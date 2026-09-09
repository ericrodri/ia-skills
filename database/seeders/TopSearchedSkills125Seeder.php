<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills125Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Demand generation para cuentas enterprise',
                'description'      => 'Crea demanda real en grandes cuentas con ABM, eventos privados, contenido de liderazgo de pensamiento y relaciones con analistas de mercado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Marketing B2B especializado en demand generation para el segmento enterprise. Quiero construir o mejorar mi programa de generación de demanda para grandes cuentas y necesito orientación estratégica y táctica concreta.

Mi contexto:
- Producto o solución que vendo: [describe brevemente]
- Ticket medio de contrato (ACV): [rango de €/$]
- Número de cuentas objetivo en el ICP: [estimación]
- Recursos de marketing actuales: [tamaño del equipo, presupuesto aproximado]
- Canal que mejor funciona hoy: [si ya tienes alguno]
- Principal reto: [conciencia de marca / generación de pipeline / calidad de leads / ciclo largo / otro]

Ayúdame en los siguientes bloques:

**1. Estrategia ABM (Account-Based Marketing)**
Explica las tres variantes de ABM (one-to-one, one-to-few, one-to-many) y cuál es la apropiada para mi escala y recursos. Dame el proceso completo de selección de cuentas objetivo: criterios de ICP, señales de intención de compra, fuentes de datos (6sense, Bombora, G2, LinkedIn Insights) y cómo priorizar las doscientas cuentas más importantes de mi lista.

**2. Programa de eventos privados**
Los eventos privados (cenas ejecutivas, roundtables, desayunos de trabajo) tienen el mayor ROI en el segmento enterprise. Dame el proceso de organización de un evento para doce a quince CXOs: la propuesta de valor que logra que vengan, el formato de la sesión, cómo generar pipeline sin que parezca un pitch comercial y cómo hacer el seguimiento post-evento. ¿Qué presupuesto necesito y qué pipeline debo esperar por evento?

**3. Contenido de thought leadership**
El comprador enterprise investiga durante meses antes de hablar con un vendedor. ¿Qué tipo de contenido posiciona a mi empresa como referente en su categoría? Dame el calendario editorial de un trimestre con los formatos más efectivos: informe sectorial, benchmark de industria, guía técnica, caso de uso, podcast ejecutivo. Para cada formato: a quién va dirigido, cómo distribuirlo y cómo medir si está generando pipeline.

**4. Relaciones con analistas de mercado**
Gartner, Forrester, IDC y los analistas independientes influyen masivamente en las decisiones de compra enterprise. ¿Cómo empiezo a construir relaciones con ellos si soy una empresa emergente? ¿Qué espera un analista de nosotros en los briefings? ¿Cómo me convierto en vendor en sus Magic Quadrants o Wave Reports? ¿Qué pasa si no tengo presupuesto para pagarles?

**5. Métricas de demand generation enterprise**
El ciclo de ventas enterprise dura entre seis y dieciocho meses. ¿Qué métricas me dicen que mi programa de demand gen está funcionando antes de que se cierren los deals? Dame el conjunto de métricas leading y lagging que debo reportar: pipeline influenced, engagement de cuentas target, velocidad de pipeline, cobertura de pipeline y tasa de conversión por etapa.

**6. Alineación con ventas**
El mayor problema del demand gen enterprise es cuando marketing y ventas no están alineados. ¿Cómo diseño el proceso de traspaso de cuentas trabajadas de marketing a ventas? ¿Qué información debe llevar una cuenta cuando la pasa marketing? ¿Cómo defino los SLAs de seguimiento para que los leads no se enfríen? Dame la estructura del meeting de alineación semanal entre marketing y ventas.

Quiero un plan ejecutable con prioridades claras, no una lista de tácticas aisladas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un programa de demand generation para cuentas enterprise con ABM, eventos privados y thought leadership.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura enterprise: integración de sistemas legacy',
                'description'      => 'SOA, ESB, API gateways y las decisiones de integración que escalan cuando el cliente tiene 10.000 empleados y sistemas de 20 años.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software enterprise con quince años de experiencia integrando sistemas en grandes organizaciones. Necesito tu ayuda para diseñar o revisar la arquitectura de integración de un entorno con sistemas legacy y necesidades modernas.

Mi contexto:
- Tipo de organización: [banca / retail / manufactura / sector público / sanidad / otro]
- Sistemas legacy principales: [ERP, CRM, mainframe, COBOL, SAP, Oracle, etc.]
- Sistemas modernos o cloud que necesito integrar: [describe]
- Número aproximado de integraciones activas: [número o rango]
- Principal problema actual: [latencia / fiabilidad / mantenimiento / coste / velocidad de cambio]
- Equipo disponible: [tamaño y perfil técnico]

Ayúdame en los siguientes bloques:

**1. Evaluación del estado actual**
Dame un framework para auditar la arquitectura de integración existente: cómo mapeo las dependencias entre sistemas, cómo identifico los puntos únicos de fallo, cómo mido el impacto de cada integración en el negocio y cómo priorizo qué modernizar primero. ¿Qué preguntas debo hacer a los equipos de negocio y tecnología en las primeras dos semanas?

**2. SOA versus ESB versus API Gateway versus Event Bus**
Explica las diferencias reales entre estos patrones para alguien que tiene que elegir hoy. ¿Cuándo tiene sentido mantener o introducir un ESB (MuleSoft, IBM MQ, TIBCO)? ¿Cuándo es mejor un API Gateway (Kong, AWS API GW, Azure APIM)? ¿Y cuándo un event bus (Kafka, AWS EventBridge)? Dame criterios de decisión basados en volumen, latencia, garantía de entrega y equipo disponible.

**3. Estrategia de API para sistemas legacy**
El sistema legacy no tiene API y el equipo original ya no existe. ¿Cómo creo una capa de API sobre él? Explica los patrones: screen scraping controlado, lectura de base de datos directa (con sus riesgos), conectores JDBC/ODBC, adaptadores de mensajería y los wrappers de servicios. Para mi contexto, ¿cuál recomiendas y cuál es el plan de migración gradual?

**4. Gestión de la consistencia de datos**
Con múltiples sistemas que manejan el mismo concepto (el cliente en el CRM, en el ERP y en el portal web), ¿cómo gestiono la consistencia? Explica los patrones: master data management (MDM), event sourcing para sincronización, CQRS y sagas para transacciones distribuidas. ¿Cuál aplica a mi situación y cuál es la complejidad real de implementarlo?

**5. Gobernanza y ownership de las integraciones**
¿Quién es el dueño de cada integración? ¿Cómo evito que cada equipo cree sus propias conexiones punto a punto y en cinco años tenga el plato de espagueti clásico? Dame un modelo de gobernanza: cómo registro las integraciones, cómo apruebo las nuevas, quién mantiene cada una y cómo gestiono el versionado de APIs internas.

**6. Hoja de ruta de modernización**
Dado mi contexto, dame una hoja de ruta de dieciocho meses para modernizar la integración sin parar el negocio. Divide las fases por riesgo: qué toco primero (impacto bajo, aprendizaje alto), qué dejo para cuando el equipo haya ganado confianza y qué no toco nunca porque el riesgo no merece la recompensa.

Sé directo sobre las limitaciones de cada approach. Los consultores suelen vender el enfoque que mejor conocen; necesito la opción que mejor encaja con mi situación real.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar la arquitectura de integración para entornos enterprise con sistemas legacy: SOA, ESB, API gateways y event buses.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Enterprise UX: diseño para organizaciones complejas',
                'description'      => 'Diseña para miles de usuarios con roles complejos, procesos rígidos y resistencia al cambio. La UX enterprise tiene reglas distintas a la UX de consumo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de UX senior especializado en productos enterprise con miles de usuarios internos en grandes organizaciones. Necesito tu ayuda para diseñar o mejorar la experiencia de usuario de un producto que se usa en un entorno corporativo complejo.

Mi contexto:
- Tipo de producto: [ERP / CRM / herramienta interna / plataforma de colaboración / otro]
- Número de usuarios: [rango]
- Roles de usuario principales: [lista los tres o cuatro roles más importantes]
- El mayor problema de UX actual: [baja adopción / errores frecuentes / flujos complejos / accesibilidad / resistencia al cambio]
- Restricciones técnicas o de empresa: [tecnología del frontend, navegadores soportados, políticas de TI]

Ayúdame con los siguientes bloques:

**1. Research en entornos enterprise**
El research de UX en organizaciones grandes es diferente: hay gatekeepers, políticas de confidencialidad y usuarios que no quieren participar. Dame el proceso de investigación adaptado: cómo consigo acceso a los usuarios reales, qué técnicas funcionan mejor (contextual inquiry, diary studies, análisis de logs de uso), cómo analizo los procesos de negocio existentes y cómo documento los roles y sus necesidades sin simplificarlos.

**2. Diseño de sistemas de roles y permisos**
Un producto enterprise tiene administradores globales, administradores de departamento, usuarios estándar y auditores de solo lectura, como mínimo. ¿Cómo diseño la interfaz para que cada rol vea exactamente lo que necesita sin confusión? Explica el patrón de diseño de interfaces basadas en roles, cómo gestiono los estados de permiso denegado y cómo diseño la administración de permisos para que el admin de TI no necesite soporte.

**3. Flujos complejos y formularios largos**
Los procesos de negocio enterprise tienen quince pasos, validaciones cruzadas y flujos de aprobación. ¿Cómo diseño un formulario de veinte campos que no abrume? Explica los patrones: wizards progresivos, guardado automático de borradores, validación en tiempo real versus al enviar, campos condicionales y cómo gestiono los errores de validación en procesos largos que el usuario puede interrumpir.

**4. Adopción y gestión del cambio**
La resistencia al cambio en organizaciones grandes es el mayor enemigo del éxito de un producto enterprise. ¿Qué puede hacer el diseñador (no solo el equipo de formación) para facilitar la adopción? Dame estrategias de onboarding progresivo, tooltips contextuales, modo de aprendizaje dentro del producto, indicadores de progreso de adopción para el administrador y cómo diseño la migración desde el sistema anterior.

**5. Accesibilidad en enterprise**
Las grandes empresas tienen obligaciones legales de accesibilidad más estrictas y usuarios con necesidades diversas: edad avanzada, discapacidades visuales o motoras, uso de lectores de pantalla. ¿Qué nivel de WCAG debo alcanzar y cómo lo integro en el proceso de diseño desde el principio en lugar de como revisión final? Dame los cinco fallos de accesibilidad más comunes en productos enterprise.

**6. Métricas de UX en enterprise**
¿Cómo mido la calidad de la experiencia de usuario en un entorno donde no puedo hacer A/B testing libremente y los datos de comportamiento son limitados por políticas de privacidad? Dame las métricas cualitativas y cuantitativas más relevantes para enterprise UX: task completion rate, error rate, tiempo en tarea, SUS score y NPS interno, y cómo recojo cada una con las restricciones del entorno corporativo.

Necesito un enfoque pragmático para los recursos y restricciones reales del diseño enterprise, no las mejores prácticas ideales de un entorno startup.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar experiencias de usuario para productos enterprise: roles complejos, adopción, accesibilidad y flujos de proceso rígidos.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Large account management: protege el revenue de tus cuentas grandes',
                'description'      => 'Gestiona las cuentas de más de 1M€ de ARR: el proceso, la política interna del cliente y el trabajo de relaciones que protege el revenue y abre expansión.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Key Account Manager senior con experiencia gestionando cuentas de más de un millón de euros de ARR en el sector tecnológico B2B. Necesito tu ayuda para proteger y hacer crecer mis cuentas más grandes.

Mi contexto:
- Número de cuentas grandes que gestiono: [número]
- ARR total bajo mi responsabilidad: [rango]
- Tipo de producto o servicio: [SaaS / servicios profesionales / mixto]
- Riesgo de churn más inminente: [describe la situación de la cuenta en mayor riesgo]
- Principal palanca de crecimiento sin explotar: [expansión de producto / nuevos departamentos / nuevas geografías / upsell]
- Recursos de apoyo disponibles: [equipo de CS, ingeniería de soluciones, marketing]

Ayúdame con los siguientes bloques:

**1. Mapa de relaciones y análisis político**
En una cuenta grande, el éxito depende de entender la política interna. Dame un framework para mapear a todos los stakeholders relevantes: quién tiene el poder real (no siempre el que firma), quién es el campeón interno, quién puede bloquear la renovación, quién está en riesgo de marcharse a otra empresa y llevarse la cuenta. ¿Cómo construyo este mapa de relaciones con discreción?

**2. Executive Relationship Program**
Las cuentas más grandes necesitan relaciones de nivel C, no solo con el equipo operativo. ¿Cómo construyo un programa de relaciones ejecutivas? Dame el plan: qué ejecutivo de mi empresa cubre qué ejecutivo del cliente, con qué frecuencia se reúnen, qué formato tienen esas reuniones (EBR, evento privado, visita a las oficinas) y cómo preparo a mis ejecutivos para que esas conversaciones generen valor real.

**3. QBRs que abren expansión**
El Quarterly Business Review es la herramienta más poderosa del KAM, pero la mayoría son revisiones de métricas que no inspiran nada. ¿Cómo diseño un QBR que revise el pasado en quince minutos y dedique el resto a la agenda de crecimiento del cliente? Dame la estructura, las preguntas que hacen al cliente hablar de sus retos futuros y cómo convierto esa conversación en una oportunidad de expansión.

**4. Señales de riesgo y acciones preventivas**
El churn en cuentas grandes rara vez ocurre de repente; hay señales semanas o meses antes. ¿Cuáles son las señales de riesgo que debo monitorizar en una cuenta grande? (reducción de uso, cambio de campeón, congelación de presupuesto, RFP abierta, reorganización del cliente). Para cada señal: cómo la detecto, cuánto tiempo tengo para actuar y cuál es la acción correcta.

**5. Estrategia de expansión**
La expansión dentro de la cuenta es más barata que conseguir un cliente nuevo. ¿Cómo identifico las oportunidades de upsell y cross-sell en una cuenta donde ya tengo relación? Dame el proceso de land-and-expand para nuevos departamentos o geografías del mismo cliente: quién es el sponsor interno, cómo enfrento la resistencia del nuevo departamento que no me conoce y cómo el equipo ya existente me ayuda a presentarme.

**6. Gestión de la renovación**
¿Cuándo empieza el proceso de renovación de una cuenta grande? Dame el timeline inverso desde la fecha de renovación: cuándo debo tener la conversación de renovación, cuándo debo involucrar a legal y finanzas, cómo gestiono las negociaciones de precio sin deteriorar la relación y qué hago si el cliente pide un descuento grande que no puedo dar.

Dame un enfoque que combina la gestión de relaciones a largo plazo con la presión de resultados trimestrales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar cuentas enterprise de más de 1M€ de ARR: mapeo político, QBRs, señales de churn y estrategias de expansión.',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Producto enterprise-ready: SSO, RBAC y audit logs',
                'description'      => 'Las funcionalidades que convierten un producto SaaS en enterprise-ready: SSO, RBAC granular, audit logs, SLAs diferenciados, data residency y APIs robustas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager senior con experiencia convirtiendo productos SaaS de mid-market en productos enterprise-ready. Quiero priorizar y diseñar las funcionalidades que desbloquean el segmento enterprise para mi producto.

Mi contexto:
- Estado actual del producto: [describe las capacidades de administración y seguridad que ya tienes]
- Deals enterprise perdidos por falta de funcionalidad: [si tienes ejemplos concretos]
- Recursos de ingeniería disponibles para este roadmap: [velocidad de entrega estimada]
- El segmento enterprise al que aspiro: [tamaño de empresa, sector, geografía]
- Competidores que ya son enterprise-ready: [nombres si los conoces]

Ayúdame a priorizar y diseñar las siguientes áreas:

**1. Single Sign-On (SSO) y gestión de identidad**
SSO es el primer bloqueador que encuentro en los deals enterprise. Dame la especificación de producto completa: qué protocolos soportar primero (SAML 2.0, OIDC, cuál antes), cómo diseño el flujo de configuración para el administrador de TI, qué casos edge necesito cubrir (usuarios que existen antes del SSO, SSO y acceso por email de fallback, provisioning automático con SCIM). ¿Cuánto esfuerzo de ingeniería es realista y cómo lo vendo como upgrade de plan?

**2. RBAC granular**
Mis clientes enterprise necesitan roles personalizados, no solo los tres roles predefinidos que tengo ahora. ¿Cómo diseño un sistema de RBAC (Role-Based Access Control) granular? Explica el modelo de permisos: permisos atómicos, roles como conjuntos de permisos, roles predeterminados versus roles personalizados, herencia de permisos y el editor de roles para el administrador. ¿Cómo gestiono la retrocompatibilidad con los roles existentes?

**3. Audit logs**
Los clientes enterprise en sectores regulados necesitan saber quién hizo qué y cuándo. ¿Qué eventos debo registrar en el audit log? Dame la especificación: qué campos mínimos incluye cada entrada (timestamp, usuario, acción, recurso, resultado, IP), qué retención necesito ofrecer, cómo diseño la interfaz de búsqueda y filtrado para el administrador, y cómo exporto los logs para integración con SIEMs.

**4. SLAs diferenciados por plan**
¿Cómo diseño una política de SLAs que discrimine correctamente entre planes? Dame la estructura de SLAs para tres tiers: professional (99,5%), business (99,9%) y enterprise (99,95%+). Para cada tier: uptime garantizado, tiempo de respuesta de soporte (P1/P2/P3), canales de soporte disponibles y el crédito de servicio. ¿Cómo hago que los SLAs enterprise sean creíbles desde un punto de vista de arquitectura?

**5. Data residency y privacidad**
Los clientes europeos y de sectores regulados preguntan dónde viven sus datos. ¿Cuándo es el momento de invertir en regiones adicionales para data residency? Dame el plan de producto: cómo comunico las opciones de región al cliente, cómo diseño la selección en onboarding, qué implica para la arquitectura multi-tenant y cómo precio el addon de data residency.

**6. APIs y extensibilidad**
Los clientes enterprise necesitan integrar mi producto con sus sistemas internos. ¿Qué hace una API enterprise-grade? Dame los requisitos: autenticación (API keys, OAuth 2.0), rate limiting documentado, versionado de API, webhooks con reintentos, documentación interactiva (OpenAPI/Swagger), SLA de la API y sandbox de desarrollo. ¿En qué orden construyo estas capacidades para desbloquear el mayor número de deals?

Quiero salir de esta conversación con un roadmap priorizado de funcionalidades enterprise que puedo presentar al equipo de ingeniería esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Priorizar y especificar las funcionalidades enterprise-ready: SSO, RBAC, audit logs, SLAs y APIs robustas.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'RRHH a escala: gestión de personas en grandes corporaciones',
                'description'      => 'Gestión de personas en organizaciones de más de 1.000 empleados: procesos globales, particularidades locales, cultura coherente y los retos que no existen en las startups.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Recursos Humanos con experiencia en organizaciones de más de mil empleados en múltiples países. Quiero mejorar la gestión de personas a escala y necesito tu ayuda para diseñar procesos que funcionen en entornos corporativos complejos.

Mi contexto:
- Tamaño de la organización: [número de empleados]
- Número de países o ubicaciones: [número]
- Sector: [tecnología / manufactura / servicios / retail / otro]
- El reto más urgente de RRHH: [atracción de talento / retención / cultura / transformación / compliance / digitalización de HR]
- Equipo de RRHH disponible: [tamaño y estructura]

Ayúdame con los siguientes bloques:

**1. Procesos globales con flexibilidad local**
Uno de los mayores retos de RRHH corporativo es mantener la coherencia global sin ignorar las particularidades legales y culturales de cada país. ¿Cómo diseño un framework de RRHH global que defina qué es obligatorio en todos los países (los no negociables de cultura y compliance) y qué se puede adaptar localmente? Dame ejemplos concretos de qué suele ser global versus local en empresas multinacionales.

**2. Performance management a escala**
Evaluar a mil personas de forma justa, consistente y que realmente impulse el rendimiento es uno de los retos más difíciles de RRHH corporativo. ¿Qué modelo de gestión del rendimiento recomiendas para una organización de mi tamaño? ¿Ciclo anual versus continuo? ¿Ratings versus no ratings? ¿Calibración forzada versus flexible? Dame el diseño del proceso y los errores más comunes que destruyen la credibilidad del sistema.

**3. Cultura coherente en organizaciones grandes**
Mantener una cultura reconocible cuando tienes diez países, quince años de historia y tres adquisiciones recientes es casi imposible. ¿Qué mecanismos concretos funcionan para preservar la cultura sin que se quede en carteles en la pared? Dame iniciativas que escalan: onboarding cultural, rituales organizacionales, embajadores de cultura, comunicación del liderazgo y cómo mides la salud cultural con datos.

**4. Digitalización del HR: qué automatizar primero**
Hay cientos de procesos de RRHH que se pueden automatizar. ¿Cuáles tienen mayor impacto en la experiencia del empleado y en la eficiencia del equipo de RRHH? Dame el orden de prioridad: onboarding digital, self-service de nómina y documentos, gestión de vacaciones, comunicación de beneficios, feedback continuo y la plataforma de HR que recomendarías para mi tamaño.

**5. Gestión del talento en riesgo**
¿Cómo identifico a los empleados de alto potencial que están pensando en marcharse antes de que acepten otra oferta? Dame las señales tempranas de desvinculación que debo monitorizar, las conversaciones de retención que el manager directo debe tener y el papel de RRHH en la gestión proactiva de la retención. ¿Cuándo tiene sentido hacer una contraoferta y cuándo no?

**6. Relaciones laborales y compliance**
En una empresa grande con varios países, el riesgo de incumplimiento laboral es constante. ¿Cómo construyo un sistema de gestión del riesgo laboral que sea preventivo en lugar de reactivo? Dame el calendario de compliance de RRHH para un año: qué revisiones legales son anuales, qué formaciones son obligatorias, cómo gestiono los comités de empresa y cómo preparo a los managers para conversaciones difíciles dentro de la ley.

Quiero respuestas adaptadas a la realidad de los entornos corporativos, no las mejores prácticas de startups con cincuenta personas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar personas a escala en corporaciones: procesos globales, cultura coherente, performance management y compliance laboral.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Valoración de contratos enterprise plurianuales',
                'description'      => 'Analiza el valor financiero de contratos a largo plazo con descuentos por volumen: impacto en el balance, reconocimiento de ingresos, penalizaciones y riesgos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con experiencia en empresas tecnológicas que venden contratos SaaS o de servicios a grandes clientes con compromisos plurianuales. Quiero mejorar el análisis financiero de mis contratos enterprise.

Mi contexto:
- Tipo de contrato típico: [SaaS con pago anual / SaaS con pago mensual / servicios con SOW / licencia más mantenimiento]
- Duración típica de los contratos: [uno / dos / tres o más años]
- ARR total bajo contratos plurianuales: [rango]
- Principal duda financiera: [reconocimiento de ingresos / descuentos sostenibles / impacto en caja / riesgo de crédito del cliente / otro]
- Norma contable aplicable: [IFRS 15 / ASC 606 / PCGA locales]

Ayúdame con los siguientes bloques:

**1. Reconocimiento de ingresos en contratos plurianuales**
Bajo IFRS 15 o ASC 606, los contratos plurianuales tienen reglas específicas de reconocimiento. ¿Cómo identifico las obligaciones de desempeño en un contrato que combina licencia, implementación y soporte? ¿Qué ocurre cuando el cliente paga por adelantado dos años? ¿Cómo afectan los descuentos variables según el cumplimiento de SLAs al reconocimiento? Dame ejemplos numéricos concretos.

**2. Análisis de descuentos por volumen**
El cliente pide un descuento del veinte por ciento a cambio de un compromiso de tres años. ¿Cómo evalúo si ese descuento es sostenible? Dame el modelo de análisis: coste de adquisición del cliente, coste de servicio, churn esperado sin descuento versus con compromiso, valor neto presente del cliente en ambos escenarios y el umbral a partir del cual el descuento destruye valor.

**3. Impacto en el balance de compromisos a largo plazo**
Un portafolio de contratos plurianuales genera obligaciones de servicio futuras. ¿Cómo afectan al balance? Explica el tratamiento del deferred revenue, las obligaciones de desempeño pendientes (RPO en el lenguaje de inversores SaaS), el impacto en el flujo de caja libre y por qué los inversores miran estas métricas de forma distinta según el modelo de reconocimiento.

**4. Cláusulas de penalización y su valoración**
Muchos contratos enterprise incluyen penalizaciones por incumplimiento de SLAs o por cancelación anticipada. ¿Cómo valoro el riesgo financiero de estas cláusulas? ¿Cómo las cuantifica el equipo de finanzas en provisiones? ¿Qué cláusulas de penalización son aceptables y cuáles representan un riesgo que no deberíamos asumir? Dame ejemplos de redacción de cláusulas que equilibren la confianza del cliente con el riesgo financiero.

**5. Riesgo de crédito del cliente enterprise**
Los clientes grandes tienen, paradójicamente, mayor riesgo de impago en algunos sectores (startups financiadas, empresas en reestructuración, sector público con retrasos). ¿Cómo evalúo el riesgo de crédito antes de firmar un contrato plurianual? ¿Qué garantías financieras puedo pedir sin que el cliente lo viva como una ofensa? ¿Cómo gestiono el riesgo de un cliente que representa más del diez por ciento de mi ARR?

**6. Métricas financieras de la cartera enterprise**
¿Qué dashboard financiero necesito para gestionar una cartera de contratos plurianuales? Dame los indicadores clave: ARR, NRR (Net Revenue Retention), Gross Revenue Retention, RPO (Remaining Performance Obligations), weighted average contract duration, cobertura de pipeline de renovación y cómo uso estas métricas para proyectar el revenue de los próximos doce meses con precisión.

Quiero respuestas con ejemplos numéricos y el nivel de rigor que esperaría de un CFO, no de un consultor generalista.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Analizar el valor financiero de contratos enterprise plurianuales: reconocimiento de ingresos, descuentos, balance y riesgo de crédito.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Negociación de contratos enterprise: MSA, SOW y DPA',
                'description'      => 'Los documentos del ciclo de ventas enterprise y cómo negociarlos para cerrar el deal sin bloqueos legales interminables.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado tecnológico con amplia experiencia negociando contratos en ciclos de ventas enterprise B2B para empresas de software y servicios. Necesito tu ayuda para agilizar la negociación contractual sin ceder en los puntos críticos.

Mi contexto:
- Tipo de empresa: [vendedor SaaS / proveedor de servicios / plataforma tecnológica]
- Tamaño del cliente típico: [facturación / número de empleados]
- Documentos que suele exigir el cliente: [MSA, SOW, DPA, NDA, orden de compra, todos los anteriores]
- El cuello de botella más habitual: [redlining interminable / DPA compleja / limitaciones de responsabilidad / IP / datos]
- Tiempo medio de negociación legal actual: [semanas / meses]

Ayúdame con los siguientes bloques:

**1. Estructura del contrato enterprise: qué documento hace qué**
Muchos equipos de ventas no entienden la jerarquía de documentos y confunden al cliente. Explica el propósito de cada documento: MSA (Marco General), SOW (Alcance del Trabajo), Order Form (Pedido), DPA (Tratamiento de Datos) y NDA (Confidencialidad). ¿En qué orden se firman? ¿Cuál prevalece en caso de conflicto? ¿Cuáles son renegociables en cada renovación y cuáles son permanentes?

**2. Las cláusulas que más se redlinean**
Los equipos legales de grandes empresas siempre atacan las mismas cláusulas. Dame los diez puntos de mayor conflicto en una negociación enterprise SaaS: limitación de responsabilidad, indemnizaciones (IP, incumplimiento de datos), uso aceptable, SLAs, propiedad intelectual de los datos del cliente, terminación por conveniencia, auditoría y subcontratistas. Para cada uno: tu posición inicial, las concesiones que puedes hacer y las líneas rojas que no debes cruzar.

**3. DPA bajo GDPR: cómo negociarla sin que bloquee el deal**
La DPA es el documento que más retrasa los deals con empresas europeas. ¿Cómo diseño una DPA estándar que el noventa por ciento de los clientes acepte sin cambios? ¿Qué puntos son los más discutidos (subencargados, transferencias internacionales, auditoría del tratamiento)? ¿Cómo respondo cuando el cliente quiere incluir a mi DPO en una reunión técnica de dos horas que no lleva a ningún sitio?

**4. Limitación de responsabilidad: cómo negociar el cap**
La limitación de responsabilidad es la cláusula más importante del MSA. El cliente quiere responsabilidad ilimitada; nosotros queremos limitar al valor del contrato. ¿Cómo negocio esta cláusula? Dame los rangos típicos de mercado (1x, 2x, 12x el contrato anual), qué excepciones al cap son razonables (muerte, lesiones, fraude, incumplimiento de confidencialidad) y qué argumentos uso cuando el abogado del cliente insiste en que el cap es inaceptable.

**5. Aceleración del proceso de negociación**
El proceso de redlining puede durar meses. ¿Cómo lo acelero sin perder rigor? Dame estrategias prácticas: el playbook de negociación para el equipo de ventas, cuándo involucrar a legal (no antes de validar el deal), cómo priorizar los comentarios del redline (aceptar rápido lo que no importa, negociar lo que importa, escalar lo que bloquea), y cómo los modelos estándar de contratos (modelo IACCM, modelo SaaS) pueden reducir el tiempo de negociación.

**6. Gestión del proceso con múltiples partes**
Los deals enterprise suelen involucrar al cliente, su asesor legal externo, el departamento de compras, el DPO y a veces un intermediario de software. ¿Cómo orquesto el proceso para que avance aunque alguna de las partes no responda? ¿Quién debe ser el punto de contacto legal de mi lado? ¿Cómo documento los acuerdos verbales durante la negociación para que no se pierdan?

Dame respuestas prácticas orientadas a cerrar deals, no a protegerme de todos los escenarios imaginables.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Negociar contratos enterprise (MSA, SOW, DPA) de forma ágil: jerarquía de documentos, puntos de conflicto y aceleración del proceso legal.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Enterprise customer success: QBRs y success plans',
                'description'      => 'Gestiona las cuentas de mayor valor: QBRs ejecutivos, success plans anuales, executive sponsors y cómo escalar la relación en toda la organización cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Customer Success con experiencia gestionando un equipo de CSMs dedicados a cuentas enterprise de más de cien mil euros de ARR. Quiero elevar la calidad de la gestión de mis cuentas más importantes.

Mi contexto:
- Número de cuentas enterprise bajo mi responsabilidad: [número]
- ARR medio por cuenta: [rango]
- Tamaño del equipo de CS: [número de CSMs]
- El mayor problema en la gestión de cuentas enterprise: [engagement bajo / renovaciones difíciles / poco upsell / falta de estructura / otro]
- El tipo de producto que gestionamos: [SaaS / plataforma / servicios gestionados]

Ayúdame con los siguientes bloques:

**1. Success Plan anual**
El success plan es el documento que define el norte de la relación con el cliente para los próximos doce meses. ¿Cómo lo construyo en colaboración con el cliente para que sea suyo, no nuestro? Dame la estructura del success plan: objetivos de negocio del cliente (no objetivos de adopción del producto), métricas de éxito acordadas, iniciativas trimestrales, roles y responsabilidades de ambas partes y proceso de revisión. ¿Cuándo se hace y con qué nivel del cliente?

**2. QBR ejecutivo que no sea un resumen de métricas**
La mayoría de los QBRs son presentaciones de datos que el cliente ya sabe y que no generan ningún valor. ¿Cómo diseño un QBR ejecutivo de sesenta a noventa minutos que el CXO del cliente valore genuinamente? Dame la agenda: porcentaje de tiempo por sección, qué preguntas abro para que el cliente hable el setenta por ciento del tiempo, cómo conecto el rendimiento del producto con los resultados de negocio del cliente y cómo termino con compromisos accionables de ambas partes.

**3. Executive Sponsor Program**
Las cuentas enterprise necesitan relaciones a nivel C entre ambas organizaciones. ¿Cómo estructuro un programa de executive sponsors? ¿Qué ejecutivo de mi empresa cubre qué cliente, con qué criterios? ¿Cómo preparo al executive sponsor para las conversaciones con el cliente (sin que parezca que ha recibido un briefing de cinco minutos)? ¿Qué pasa cuando el executive sponsor cambia de empresa?

**4. Multi-threading: ampliar la relación en la organización cliente**
La dependencia de un solo contacto en la cuenta es el mayor riesgo de churn. ¿Cómo expando la relación a más departamentos y niveles dentro del cliente? Dame el proceso para identificar a las personas clave que aún no conozco, la excusa para conocerlas (onboarding de usuario, workshop, webinar privado) y cómo convierto a un usuario satisfecho en un campeón interno que me abre puertas a otros departamentos.

**5. Gestión de la escalación ejecutiva**
Cuando el cliente escala un problema al nivel C, la relación está en riesgo. ¿Cuál es el protocolo de escalación ejecutiva? Dame el proceso: cómo el CSM notifica al VP de CS, qué información necesita el ejecutivo antes de llamar al cliente, qué dice en esa llamada, cómo hace el seguimiento y cómo cierra la escalación de forma que el cliente quede más satisfecho que antes del problema.

**6. Métricas de calidad del CS enterprise**
¿Cómo mido la efectividad de mi programa de CS enterprise más allá del NRR? Dame el conjunto de métricas que predicen la renovación y la expansión: health score, engagement score, executive relationship depth, time-to-value de las iniciativas del success plan y la correlación entre QBRs ejecutivos y NRR. ¿Cómo construyo un health score que mi equipo use de verdad?

Quiero estrategias que funcionen en cuentas reales con clientes que tienen poco tiempo y altas expectativas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar cuentas enterprise con QBRs ejecutivos, success plans anuales y programas de executive sponsors que protegen y expanden el ARR.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Conseguir y gestionar clientes enterprise como freelance',
                'description'      => 'El proceso de venta, los contratos y las particularidades de trabajar para grandes corporaciones siendo autónomo: cómo entrar, facturar y crecer dentro.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor independiente senior con más de siete años de experiencia trabajando exclusivamente para grandes corporaciones. Quiero aprender a conseguir y gestionar proyectos enterprise como freelance o consultor independiente.

Mi situación:
- Mi especialización: [tecnología / diseño / estrategia / finanzas / marketing / legal / otro]
- Experiencia previa: [años en empresa / otros proyectos freelance]
- El tipo de empresa al que aspiro: [multinacional / gran empresa nacional / sector público / mixto]
- Principal barrera que percibo: [acceso a los decisores / precio / contratos complejos / competencia con consultoras / otro]
- Tarifa hora o diaria actual u objetivo: [€/$ por hora o día]

Ayúdame con los siguientes bloques:

**1. Cómo entrar en una gran corporación**
Las grandes empresas raramente contratan a freelances que no conocen. ¿Cuáles son los canales de entrada más efectivos para un consultor independiente en el mercado corporativo? Compara: referencias de antiguos colegas, brokers y plataformas de consulting (Toptal, Expert360, BTG Pactual Advisors), reclutadores especializados en interinos o freelances, LinkedIn outreach y el canal de proveedores homologados. Para cada canal: cómo lo trabajo y qué barreras de entrada tiene.

**2. El proceso de homologación de proveedores**
Las grandes empresas tienen procesos de homologación de proveedores que pueden durar semanas y requieren documentación, seguros y estructura jurídica. ¿Qué necesito tener preparado como freelance para pasar el proceso de homologación sin fricciones? Dame la lista de documentos habituales: razón social, seguros de responsabilidad civil, capacidad financiera, referencias, política de protección de datos. ¿Cuándo merece la pena crear una SL en lugar de trabajar como autónomo?

**3. Contratos con grandes empresas: qué negociar**
Las grandes empresas presentan sus propios contratos con cláusulas que favorecen al cliente. ¿Cuáles son las cláusulas más importantes que debo revisar como freelance? Dame los puntos críticos: propiedad intelectual de lo entregado, cláusulas de exclusividad o no competencia, condiciones de pago (a 60 o 90 días), limitación de responsabilidad, confidencialidad y cómo gestiono si el proyecto se cancela a mitad. ¿Qué puedo negociar y qué es prácticamente imposible cambiar?

**4. Pricing para clientes enterprise**
¿Cómo fijo mi tarifa para proyectos enterprise de forma que sea competitiva pero no regale valor? Dame la estrategia de pricing: tarifa hora versus tarifa diaria versus proyecto cerrado, cómo calculo el valor que genero para justificar tarifas altas, qué pasa cuando compito contra una consultora grande y cómo presento el precio sin que sea el único criterio de decisión. ¿Qué tarifas son razonables para mi especialización en el mercado actual?

**5. Gestión del proyecto y entrega en entornos corporativos**
Las grandes empresas tienen procesos de aprobación lentos, stakeholders múltiples y cambios de scope constantes. ¿Cómo estructuro mi trabajo para proteger mi tiempo y entregar a tiempo? Dame el proceso de gestión de proyecto adaptado a la realidad corporativa: cómo documento los requisitos al inicio para evitar scope creep, cómo gestiono los cambios de alcance con change requests, cómo me aseguro de que las aprobaciones llegan a tiempo y cómo entrego de forma que el cliente pueda usar el trabajo sin depender eternamente de mí.

**6. Crecer dentro de la cuenta**
La mejor fuente de proyectos enterprise nuevos es un cliente enterprise satisfecho. ¿Cómo expando mi trabajo dentro de una gran empresa una vez que he demostrado valor? Dame las estrategias para que me recomienden a otros departamentos, cómo convierto un proyecto puntual en un retainer mensual y cómo gestiono la dependencia sin llegar a ser tan imprescindible que el cliente quiera contratarme en plantilla.

Dame la perspectiva real del consultor que ha negociado con procurement, ha esperado facturas noventa días y ha aprendido a sobrevivir en el ecosistema corporativo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Conseguir y gestionar clientes enterprise como freelance: canales de entrada, homologación, contratos y expansión dentro de la cuenta.',
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
