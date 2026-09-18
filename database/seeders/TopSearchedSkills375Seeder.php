<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills375Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 - Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de producto B2B SaaS: posicionamiento, mensajes y demanda',
                'description'      => 'Diseña la estrategia de marketing de producto para una solución B2B SaaS desde el posicionamiento hasta la generación de demanda. Aprende a comunicar el valor a distintos compradores, crear contenido para el ciclo de ventas largo y diferenciarte en un mercado competitivo.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Product Marketing especializado en soluciones B2B SaaS. Tienes experiencia desarrollando estrategias de posicionamiento, mensajes y generación de demanda para software empresarial en mercados competitivos, y conoces en profundidad las diferencias entre el marketing B2C y el marketing B2B con ciclos de venta complejos y múltiples compradores.

El marketing B2B SaaS tiene una complejidad única: hay múltiples stakeholders en el proceso de compra (champion técnico, usuario final, decisor económico, legal, TI), el ciclo de venta es largo, y el comprador es sofisticado y busca evidencia real de ROI antes de comprometerse. Necesito tu ayuda para desarrollar una estrategia de marketing completa para mi producto SaaS.

**Posicionamiento de producto B2B SaaS:**
Explica cómo construir un posicionamiento diferenciado en mercados SaaS saturados:
- El framework de posicionamiento de April Dunford: cómo identificar los competidores reales (no los que el CEO cree)
- La definición del ICP (Ideal Customer Profile): empresa, industria, tamaño, madurez tecnológica, caso de uso específico
- Cómo articular el "unique value proposition" que resuena en el comprador, no en el equipo interno
- La diferencia entre posicionamiento de mercado (cómo te ven vs. la categoría) y posicionamiento de producto (qué te hace mejor para el ICP)
- Cómo actualizar el posicionamiento cuando el mercado o el producto evolucionan

**Mensajes para múltiples compradores:**
Describe cómo adaptar el mensaje a cada stakeholder en el ciclo de compra B2B:
- El champion técnico o power user: qué le importa (funcionalidades, integraciones, eficiencia)
- El decisor económico (CFO, CEO, VP): qué le importa (ROI, riesgo, coste total de propiedad)
- El equipo de TI o seguridad: qué le importa (cumplimiento, SSO, SOC2, APIs)
- El equipo de legal o compras: qué le importa (SLAs, términos de contrato, exit clauses)
- Cómo construir un "messaging house" que coordine todos los mensajes sin que se contradigan

**Generación de demanda B2B SaaS:**
Diseña la estrategia de demanda para un SaaS B2B:
- Content marketing para ciclos de venta largos: cómo educar al mercado antes de que esté listo para comprar
- SEO B2B: cómo capturar intención de compra en búsquedas de problema (pain) vs. búsquedas de solución (tool)
- LinkedIn como canal primario B2B: tipos de contenido, targeting, formatos que funcionan
- Estrategia de eventos: webinars, conferencias, community building como canal de demanda
- Paid demand generation: LinkedIn Ads, Google Ads de intención, review sites (G2, Capterra)
- Account-Based Marketing (ABM): cuándo y cómo implementar ABM como complemento al inbound

**Habilitación de ventas (Sales Enablement):**
Explica cómo el marketing de producto apoya al equipo de ventas en B2B SaaS:
- Qué materiales de ventas son críticos: battle cards, case studies, demo decks, ROI calculators
- Cómo construir un battle card efectivo: competidor, debilidades, cómo manejar la comparación
- El case study B2B: estructura, datos necesarios y cómo conseguir que el cliente participe
- Cómo alinear marketing y ventas en el ICP y el qualification criteria
- El feedback loop entre ventas y marketing: cómo capturar lo que funciona y lo que no en el campo

**Métricas de marketing B2B SaaS:**
Define qué medir y cómo interpretar las métricas:
- MQL (Marketing Qualified Lead) vs. SQL (Sales Qualified Lead): cómo definirlos de forma alineada con ventas
- Pipeline generado por marketing: cómo calcularlo y reportarlo correctamente
- CAC desglosado por canal y por segmento
- Tiempo de ciclo de venta por canal de adquisición
- Win rate por source y por mensaje: cómo conectar la eficacia del marketing con el cierre

**Formato de respuesta:**
1. Plantilla de posicionamiento B2B SaaS (template de April Dunford adaptado)
2. Messaging matrix: tabla de mensajes por stakeholder (champion, decisor, TI, legal)
3. Plan de content marketing para 90 días orientado a generación de demanda B2B
4. Estructura de un battle card completo para un competidor directo
5. Dashboard de métricas de marketing B2B con las fórmulas clave

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar estrategia de marketing de producto para B2B SaaS',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 2 - Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura multi-tenant para SaaS B2B: diseño y consideraciones técnicas',
                'description'      => 'Domina los patrones de diseño para construir una arquitectura multi-tenant robusta, segura y escalable para una plataforma SaaS B2B. Cubre aislamiento de datos, customización por tenant, estrategias de base de datos y consideraciones de seguridad enterprise.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software senior especializado en plataformas SaaS B2B con experiencia diseñando sistemas multi-tenant para clientes enterprise. Tienes conocimiento profundo de los patrones de aislamiento de datos, las implicaciones de seguridad del multi-tenancy y los tradeoffs entre los distintos enfoques de implementación.

La arquitectura multi-tenant es uno de los pilares técnicos que define si una plataforma SaaS puede crecer y servir a clientes enterprise sin comprometer la seguridad, la customización o el rendimiento. Un diseño incorrecto desde el inicio puede forzar migraciones costosas y limitar el crecimiento comercial. Necesito entender profundamente este dominio.

**Modelos de aislamiento de datos en multi-tenancy:**
Describe los tres patrones principales y sus tradeoffs:
- Base de datos separada por tenant (Silo model): máximo aislamiento, mayor coste operativo, complejidad de gestión
- Schema separado por tenant (Bridge model): buen aislamiento, moderada complejidad, mejor que silo en coste
- Tabla compartida con tenant_id (Pool model): máxima eficiencia de coste, menor aislamiento, mayor riesgo si no se implementa bien
- Cuándo usar cada modelo: tamaño del cliente, requisitos de compliance, necesidades de customización
- Modelos híbridos: cómo algunos SaaS sirven clientes pequeños en pool y enterprise en silo

**Implementación del modelo de tabla compartida (pool):**
Explica las prácticas de seguridad críticas para el modelo pool:
- Row Level Security (RLS) en PostgreSQL: cómo implementarlo correctamente para que sea imposible el "tenant bleed"
- El tenant context pattern: cómo propagar el tenant_id a través del stack sin tener que pasarlo explícitamente en cada query
- Índices multi-tenant: cómo indexar correctamente tablas con tenant_id para rendimiento óptimo
- El peligro de los joins sin tenant_id: cómo prevenir errores de aislamiento en queries complejas
- Testing de aislamiento: cómo construir tests automatizados que detecten tenant bleed

**Customización por tenant:**
Describe cómo implementar configuración y customización sin fork del código:
- Feature flags por tenant: cómo implementar un sistema de flags que permita activar/desactivar features por cliente
- Configuración jerárquica: global → plan → tenant → usuario (el orden correcto de precedencia)
- Custom fields y extensiones de datos por tenant: Entity-Attribute-Value vs. JSON columns vs. schema migrations
- Branding y white-labeling: cómo soportar dominios custom, logos y colores por tenant
- Webhooks y integraciones custom por tenant: cómo gestionarlos sin contaminar el código core

**Escalabilidad y rendimiento en arquitecturas multi-tenant:**
Explica los retos de escalar un SaaS multi-tenant:
- El "noisy neighbor" problem: cómo un tenant con alto volumen afecta a otros y cómo mitigarlo
- Rate limiting por tenant: implementación correcta y comunicación de límites a los clientes
- Sharding de datos: cuándo y cómo implementar sharding para tenants de alto volumen
- Query performance en tablas compartidas con millones de filas: estrategias de particionado
- Caching multi-tenant: cómo implementar caching que no filtre datos entre tenants (cache key strategies)

**Seguridad enterprise en SaaS multi-tenant:**
Describe los requisitos de seguridad que los clientes enterprise exigen:
- SSO y SAML/OIDC: implementación de login federado por tenant con su identity provider
- RBAC (Role-Based Access Control) por tenant: roles y permisos customizables por organización
- Audit logs inmutables por tenant: qué registrar, cuánto tiempo retener, cómo exportar
- Encriptación de datos en reposo por tenant: cuándo necesitas encryption keys separadas por cliente
- Penetration testing y certificaciones (SOC2, ISO 27001): qué impacto tienen en el diseño del sistema

**Formato de respuesta:**
1. Tabla comparativa de los 3 modelos de aislamiento con criterios de decisión
2. Diagrama de arquitectura multi-tenant (texto estructurado o ASCII art) con los componentes clave
3. Implementación de tenant context en middleware de una app web (pseudocódigo o código real)
4. Checklist de seguridad multi-tenant: lo que no puede faltar antes de un cliente enterprise
5. Plan de migración de single-tenant a multi-tenant para una aplicación existente

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar arquitectura multi-tenant segura y escalable para SaaS',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            // 3 - Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de UX para plataformas B2B SaaS complejas',
                'description'      => 'Aprende los principios y patrones de UX específicos para productos SaaS B2B con usuarios técnicos, flujos complejos y necesidades de personalización por rol. Cubre desde el diseño de navigation hasta dashboards, configuración y onboarding de equipos.',
                'prompt_content'   => <<<'EOT'
Actúa como un UX designer senior especializado en plataformas SaaS B2B complejas. Tienes experiencia diseñando interfaces para software empresarial con múltiples roles de usuario, flujos de trabajo sofisticados y necesidades de customización por organización. Entiendes en profundidad las diferencias entre el diseño de producto B2C y B2B.

El diseño UX para B2B SaaS tiene retos únicos que no aparecen en productos B2C: múltiples roles con diferentes permisos, onboarding de equipos enteros, configuración administrativa compleja, integración con otros sistemas de la empresa y usuarios que usan el producto durante horas al día para su trabajo. Necesito profundizar en los principios específicos de este dominio.

**Principios de UX para B2B SaaS:**
Explica los principios fundamentales que diferencian el diseño B2B del B2C:
- El usuario B2B es un profesional, no un consumidor: qué implica en términos de densidad de información y curva de aprendizaje
- Eficiencia sobre deleite: por qué el usuario experto prioriza la velocidad sobre la belleza
- La importancia del keyboard-first para usuarios de alta frecuencia: atajos, navegación sin ratón
- Customización vs. consistencia: cómo balancear la personalización del workspace sin crear caos de UX
- La paradoja de las preferencias del usuario B2B: quieren simplicidad pero necesitan poder avanzado

**Diseño de arquitectura de información para SaaS complejo:**
Describe cómo organizar la información y la navegación en una plataforma enterprise:
- Navegación principal: flat nav vs. sidebar jerárquica vs. object-based navigation
- Cómo diseñar para múltiples roles con acceso a diferentes partes del sistema
- El reto de los settings: cómo organizar configuración global, de organización, de equipo y de usuario
- Breadcrumbs y orientación en sistemas con profundidad de 3-5 niveles
- Search como navegación primaria: cuándo y cómo implementar búsqueda global como eje del producto

**Diseño de dashboards y datos para B2B:**
Explica cómo diseñar dashboards que los usuarios realmente usen:
- La diferencia entre el dashboard de marketing (bonito, rígido) y el dashboard B2B (funcional, configurable)
- Cómo diseñar para distintos roles: el dashboard del manager vs. el del usuario operacional
- Widgets, filtros y personalización: cuánto control dar al usuario sobre su vista
- Data visualization para usuarios no técnicos: cuándo simplificar y cuándo mostrar la complejidad
- Empty states en dashboards: cómo guiar al usuario cuando no hay datos todavía

**Onboarding de equipos en B2B SaaS:**
Describe los retos específicos del onboarding en contexto empresarial:
- El onboarding en B2B no es individual: cómo diseñar para que el admin configure el producto para todo el equipo
- Roles del onboarding: el admin que configura vs. el usuario invitado que llega al producto ya configurado
- Progressive disclosure en productos complejos: cómo introducir funcionalidades avanzadas sin abrumar al usuario nuevo
- La importancia de los plantillas de configuración: cómo ayudar al admin a empezar rápidamente
- Onboarding interactivo vs. documentación: cuándo cada uno es más efectivo en B2B

**Gestión de permisos y RBAC desde el diseño:**
Explica cómo diseñar la experiencia de gestión de usuarios y permisos:
- Diseño del sistema de roles: predefinidos vs. customizables, cuándo ofrecer cada opción
- Cómo comunicar en la UI qué puede y qué no puede hacer un usuario según su rol
- Permission denied states: cómo mostrar que algo existe pero no está disponible vs. ocultarlo completamente
- El flow de invitación de usuarios: cómo hacer que sea fácil para el admin gestionar accesos
- Audit trail en la UI: cómo mostrar quién hizo qué y cuándo en sistemas con accountability importante

**Integración y configuración de APIs:**
Describe cómo diseñar la experiencia de configuración para usuarios técnicos:
- API keys y tokens: cómo diseñar su gestión de forma segura y usable
- Webhook configuration: cómo guiar al usuario en la configuración de integraciones técnicas
- Documentation in-product: cómo integrar guías técnicas dentro del flujo de configuración
- Error messages para usuarios técnicos: más detalle, menos suavizado, con troubleshooting steps

**Formato de respuesta:**
1. Principios de diseño B2B SaaS: 10 principios con ejemplos de aplicación
2. Patrones de navegación B2B: cuándo usar sidebar, tabs, breadcrumbs o search-first
3. Checklist de diseño de onboarding para plataforma B2B multirol
4. Guía de diseño de empty states para 5 contextos diferentes en B2B SaaS
5. Plantilla de diseño de sistema de permisos y roles: qué decisiones hay que tomar y en qué orden

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar UX para plataformas SaaS B2B con múltiples roles y flujos complejos',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 4 - Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas enterprise para SaaS B2B: proceso, discovery y cierre',
                'description'      => 'Domina el proceso completo de venta enterprise en B2B SaaS: desde la cualificación y el discovery hasta la gestión del proceso de compra corporativo y el cierre de contratos multi-año. Aprende a navegar comités de compra, objeciones de seguridad y ciclos de venta largos.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de ventas enterprise especializado en B2B SaaS con experiencia cerrando contratos de cinco y seis cifras en empresas medianas y grandes. Has liderado equipos de Account Executives que venden soluciones de software complejas con ciclos de venta de 3-9 meses y procesos de compra que involucran múltiples departamentos y aprobaciones.

La venta enterprise B2B SaaS es radicalmente diferente a la venta SMB o transaccional. Requiere gestionar relaciones con múltiples stakeholders simultáneamente, navegar procesos de compra burocráticos, superar objeciones de seguridad y compliance, y construir un business case que justifique la inversión ante un comité de aprobación. Necesito dominar este proceso de forma integral.

**Cualificación en ventas enterprise B2B:**
Explica cómo cualificar oportunidades enterprise de forma eficiente:
- El framework MEDDIC/MEDDPICC: cómo aplicarlo en el contexto específico de SaaS B2B
- Señales de una oportunidad enterprise genuina vs. una que solo parece enterprise
- Cómo identificar al economic buyer real (quien puede decir sí con dinero y autoridad)
- La identificación del champion interno: quién te va a vender internamente cuando tú no estás
- Cuándo descualificar una oportunidad enterprise y redirigir a un plan self-serve

**Discovery en ventas enterprise:**
Diseña el proceso de discovery para oportunidades enterprise:
- Las preguntas de discovery que revelan el impact business case: qué pasa si no resolvemos esto
- Cómo mapear la organización del cliente: quiénes son los stakeholders, qué les importa a cada uno
- Discovery técnico: cómo entender el stack existente, las integraciones necesarias y los requisitos de seguridad
- Discovery del proceso de compra: cómo preguntar sobre el proceso sin sonar torpe
- Técnicas de discovery por capas: de lo general a lo específico, de lo actual a lo deseado

**Gestión del proceso de compra enterprise:**
Explica cómo navegar el proceso de compra corporativo:
- Cómo construir el mutual success plan (MSP) o joint evaluation plan con el cliente
- El rol de procurement: cómo relacionarte con compras sin perder el control del proceso
- Requisitos de seguridad (vendor assessment, DPIA, penetration test): cómo prepararlos con antelación
- Legal enterprise: negociación de DPA, MSA, SLA y las cláusulas que suelen ser puntos de fricción
- Cómo gestionar el proceso cuando hay múltiples competidores en evaluación simultánea

**Construcción del business case para el comité de aprobación:**
Describe cómo construir el business case que supera el proceso de aprobación:
- Los componentes del business case enterprise: problema cuantificado, solución, ROI proyectado, coste, riesgos
- Cómo ayudar al champion a vender internamente cuando tú no estás en la sala
- Técnicas de cuantificación del ROI: cómo ayudar al cliente a calcular el valor con sus propios datos
- El executive sponsor letter: por qué conseguirlo y cómo estructurarlo
- Cómo anticipar y responder a las objeciones del comité de aprobación (CFO, CTO, legal)

**Cierre de contratos enterprise:**
Explica las técnicas de cierre específicas para venta enterprise:
- Negociación de precio en enterprise: por qué nunca dar el primer descuento sin conseguir algo a cambio
- La estructura del contrato enterprise SaaS: términos anuales vs. multi-año, precios de renovación
- Cómo crear urgencia real en el cliente sin presionar artificialmente (budget cycles, project deadlines)
- El manejo del "lo consultamos y te decimos": cómo mantener momentum en un proceso largo
- Qué hacer cuando una oportunidad que parecía cerrada se para o se enfría

**Formato de respuesta:**
1. Template de cualificación MEDDIC adaptado a B2B SaaS (preguntas para cada variable)
2. Guía de discovery enterprise: 20 preguntas organizadas por área (negocio, técnico, compra)
3. Estructura del mutual success plan para evaluación enterprise
4. Plantilla de business case de 2 páginas para el champion del cliente
5. Checklist de cierre enterprise: lo que debe estar completo antes de enviar la propuesta final

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Cerrar deals enterprise en ciclos de venta B2B SaaS complejos',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            // 5 - Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Estrategia de producto B2B SaaS: roadmap orientado al cliente enterprise',
                'description'      => 'Diseña y ejecuta la estrategia de producto para un B2B SaaS enfocado en clientes enterprise. Aprende a construir un roadmap customer-driven, priorizar entre features generales y custom enterprise, gestionar las métricas SaaS y diferenciarte competitivamente.',
                'prompt_content'   => <<<'EOT'
Actúa como un Head of Product o CPO con experiencia liderando la estrategia de producto en empresas B2B SaaS que sirven a clientes enterprise. Has navegado la tensión entre construir para el mercado general y satisfacer las demandas customizadas de grandes cuentas, y entiendes en profundidad cómo las métricas SaaS guían las decisiones de producto.

La estrategia de producto B2B SaaS enterprise tiene tensiones únicas: los clientes enterprise pagan más pero piden customización, los ciclos de feedback son más lentos, la influencia de ventas sobre el roadmap es mayor y el riesgo de convertirse en una "feature factory" para grandes cuentas es real. Necesito un framework completo para navegar estos retos.

**Definición de la estrategia de producto B2B SaaS:**
Explica cómo construir una estrategia de producto robusta para B2B enterprise:
- La jerarquía de decisiones: visión → estrategia → objetivos de producto → iniciativas → features
- Cómo identificar el ICP de producto (qué empresa se beneficia más de lo que construyes)
- Product-market fit en B2B: cómo medir que tienes PMF en un contexto enterprise (no es lo mismo que B2C)
- La elección de categoría: ¿eres el mejor para un caso de uso específico o una plataforma horizontal?
- Cómo manejar la evolución del producto a medida que el ICP cambia o el mercado madura

**Construcción del roadmap customer-driven en enterprise:**
Describe cómo construir un roadmap que equilibra las necesidades de los clientes y la estrategia de producto:
- El proceso de recolección de feedback enterprise: customer advisory boards, EBR insights, support data
- Cómo distinguir entre una feature request válida (problema real de muchos clientes) y una pet project de un cliente grande
- La matriz de priorización de features enterprise: valor estratégico × frecuencia del problema × esfuerzo
- Cómo comunicar el roadmap a clientes enterprise que tienen expectativas sobre sus requests
- El concepto de "enterprise readiness": qué features convierte un producto SMB en un producto enterprise

**Métricas SaaS para decisiones de producto:**
Explica cómo usar las métricas SaaS para guiar las decisiones del PM:
- Feature adoption rate: cómo medir si las features que construyes se usan realmente
- Time-to-value: qué señales en el producto indican que el cliente llegó al Aha moment
- Expansion MRR como señal de product-market fit: qué features correlacionan con expansión
- Retention por segmento de cliente: cómo usar los datos de churn para priorizar el roadmap
- Net Promoter Score (NPS) por segmento: qué te dice y qué no te dice sobre el producto

**Priorización en B2B SaaS enterprise:**
Ayúdame con los frameworks de priorización específicos para este contexto:
- RICE adaptado para B2B enterprise: cómo calcular el reach cuando tienes pocos clientes de alto ACV
- El framework de Jobs-to-be-Done aplicado a B2B: cómo identificar los trabajos funcionales y emocionales del comprador enterprise
- La priorización de infraestructura vs. features: cómo justificar trabajo técnico en el roadmap de producto
- Cómo manejar el conflicto ventas-producto sobre features del roadmap con un proceso transparente
- El "enterprise tax": cuánto del roadmap es razonable dedicar a features de enterprise puro

**Diferenciación competitiva en mercados SaaS maduros:**
Describe cómo construir ventaja competitiva sostenible en un mercado B2B SaaS establecido:
- Moat de datos: cómo el producto puede generar efectos de red o aprendizaje que dificulten el switch
- Integrations ecosystem: por qué un marketplace de integraciones es un moat competitivo
- Verticalization: cuándo especializarse por industria vertical aumenta la ventaja competitiva
- La estrategia de plataforma vs. la estrategia de punto de solución: tradeoffs y cuándo cada una funciona
- Cómo responder competitivamente sin perder el foco estratégico: feature parity vs. innovación

**Formato de respuesta:**
1. Framework de estrategia de producto en una página: visión, ICP, propuesta de valor, métricas de éxito
2. Proceso de priorización de features enterprise: pasos, criterios, roles y herramientas
3. Plantilla de customer advisory board: agenda, frecuencia, participantes y cómo usar los outputs
4. Dashboard de métricas de producto B2B SaaS: qué monitorizar y con qué frecuencia
5. Guía para comunicar al equipo de ventas qué entra y qué no entra en el roadmap

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Definir y ejecutar estrategia de producto para B2B SaaS enterprise',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            // 6 - RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento y cultura en empresas SaaS B2B de alto crecimiento',
                'description'      => 'Diseña estrategias de atracción, desarrollo y retención del talento específicas para empresas SaaS en etapa de escala. Aprende a gestionar la cultura durante el hipercrecimiento, contratar para roles únicos de SaaS y estructurar equipos go-to-market.',
                'prompt_content'   => <<<'EOT'
Actúa como un Chief People Officer (CPO) con experiencia en empresas SaaS B2B que pasaron de 20 a 200 empleados en 2-3 años. Entiendes los retos únicos de gestión de personas en el contexto del hipercrecimiento: cómo mantener la cultura cuando se triplica el equipo, cómo contratar rápidamente sin bajar el listón y cómo estructurar la organización go-to-market de una empresa SaaS.

Las empresas SaaS en etapa de escala tienen un contexto de gestión de personas muy específico: el talento técnico es escaso y caro, la cultura startup está en tensión con las necesidades de proceso a medida que crece la empresa, y roles como Customer Success Manager o Sales Development Representative son relativamente nuevos y requieren perfiles específicos. Necesito tu ayuda para navegar estos retos.

**Atracción de talento para empresas SaaS:**
Explica cómo atraer los mejores perfiles en un mercado competitivo de talento tech:
- Employee Value Proposition (EVP) para SaaS: qué hace atractiva a tu empresa para los perfiles más demandados
- Compensación en SaaS: equity (stock options), salario base y variables, cómo estructurar el paquete competitivo
- Sourcing de perfiles técnicos escasos: ingenieros, PMs, data scientists, cómo llegar a ellos antes que la competencia
- El proceso de contratación como experiencia de candidato: por qué el tiempo y la calidad del proceso importan
- Employer branding para SaaS: cómo construir reputación de empresa donde se quiere trabajar

**Roles únicos del ecosistema SaaS B2B:**
Describe los perfiles clave y sus particularidades para contratar bien:
- Sales Development Representative (SDR) vs. Account Executive (AE): qué buscar en cada rol y cómo evaluarlos
- Customer Success Manager (CSM): la diferencia entre un CSM reactive y uno strategic
- Product Manager para SaaS B2B: las competencias específicas que necesita un PM de empresa enterprise
- Growth Engineer o Growth PM: el perfil híbrido que muchas SaaS necesitan pero pocos saben contratar
- Head of Partnerships: cuándo crearlo y qué perfil buscar para un programa de partnerships SaaS

**Gestión de la cultura durante el hipercrecimiento:**
Explica cómo preservar y escalar la cultura cuando la empresa crece rápidamente:
- La cultura como sistema operativo: qué es la cultura en realidad y qué no es (no son los valores en la pared)
- Los "culture carriers": cómo identificarlos y usarlos como embajadores durante la escala
- El peligro del "culture fit" como criterio de selección: por qué puede generar homogeneidad y discriminación velada
- Cómo mantener la agilidad y el sentido de urgencia de la startup cuando la empresa crece
- Rituales de cultura que escalan: all-hands, retrospectivas, celebraciones de éxito, cómo adaptarlos

**Estructura organizativa del equipo go-to-market SaaS:**
Describe cómo estructurar los equipos comerciales en un SaaS B2B:
- El modelo de pods o squads de ventas: SDR + AE + SE (Sales Engineer) + CSM
- Cuándo separar New Business de Account Management y Customer Success
- La ratio correcta de SDR:AE:CSM según el modelo de ventas (PLG, sales-led, hybrid)
- Cómo estructurar el equipo de Revenue Operations (RevOps) y cuándo crearlo
- La organización del equipo de producto a medida que crece: PMs generalistas vs. PMs especializados por línea de producto

**Desarrollo y retención en entorno SaaS:**
Explica cómo desarrollar y retener el talento en una empresa SaaS de alto crecimiento:
- Career ladders para roles de SaaS: cómo definir niveles en Customer Success, Sales, Product
- La gestión del desempeño en un entorno de cambio rápido: OKRs individuales, frecuencia de feedback
- Retención de talento top en mercados competitivos: más allá del salario
- Cómo gestionar la salida de empleados fundacionales que ya no escalan con la empresa
- El manager de primera vez en SaaS: cómo apoyar la transición de IC a manager

**Formato de respuesta:**
1. EVP (Employee Value Proposition) canvas para empresa SaaS en etapa de escala
2. Guía de entrevistas para roles clave de SaaS (SDR, CSM, PM) con preguntas específicas
3. Organigrama típico go-to-market de una SaaS B2B en Series B (20-100 personas)
4. Career ladder de Customer Success: niveles, competencias y criterios de promoción
5. Agenda del all-hands mensual para empresa SaaS de 50-200 personas

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar talento y cultura en empresa SaaS de alto crecimiento',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            // 7 - Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Métricas financieras SaaS B2B: ARR, LTV, CAC y modelado de crecimiento',
                'description'      => 'Domina el análisis financiero específico de negocios SaaS B2B: cómo calcular, interpretar y proyectar las métricas que los inversores y la dirección usan para evaluar la salud y el potencial del negocio. Cubre ARR, churn, NRR, unit economics y modelado financiero SaaS.',
                'prompt_content'   => <<<'EOT'
Actúa como un CFO o VP of Finance especializado en empresas SaaS B2B en etapas de crecimiento (Series A a Series C). Tienes experiencia preparando data rooms para rondas de inversión, modelando el crecimiento de negocios SaaS y presentando métricas financieras a inversores de venture capital e institucionales.

Las finanzas de un SaaS B2B requieren dominar un lenguaje específico de métricas que es diferente al de las finanzas tradicionales. Un inversor SaaS busca datos muy concretos sobre la eficiencia del crecimiento, la calidad de los ingresos y la predicibilidad del negocio. Necesito dominar este lenguaje y estas métricas para gestionar el negocio con rigor y comunicar efectivamente con inversores.

**Las métricas fundacionales del SaaS B2B:**
Define y explica con precisión cada métrica crítica:
- ARR (Annual Recurring Revenue): definición exacta, qué incluir, qué excluir, convenciones del sector
- ARR waterfall: New ARR, Expansion ARR, Contraction ARR, Churned ARR y Net New ARR
- Gross Revenue Retention (GRR): por qué es el indicador de "calidad del ingresos"
- Net Revenue Retention (NRR) o Net Dollar Retention (NDR): el indicador más importante de salud SaaS
- Benchmarks de NRR por tipo de SaaS: cuándo es bueno un NRR del 110% vs. del 130%

**Unit Economics en SaaS B2B:**
Explica el cálculo correcto de las métricas de unit economics:
- CAC (Customer Acquisition Cost): qué incluir exactamente (solo sales y marketing, o también CS, onboarding)
- LTV en SaaS: por qué el cálculo simple (ARPA / churn) es una aproximación y sus limitaciones
- LTV: CAC ratio: qué significa, benchmarks por etapa y por ACV (Annual Contract Value)
- CAC Payback Period: por qué algunos inversores lo prefieren al LTV:CAC y cómo calcularlo
- Magic Number: el indicador de eficiencia de ventas más usado por los inversores de SaaS

**Churn y retención en SaaS B2B enterprise:**
Describe las particularidades del churn en contextos enterprise:
- Churn mensual vs. churn anual: por qué el churn mensual es engañoso en contratos anuales
- Logo churn vs. revenue churn: cuándo discrepan y qué dice cada uno del negocio
- Cohort analysis de NRR: cómo ver la expansión y contracción a lo largo del tiempo por cohort de clientes
- Quick ratio de SaaS: qué es y por qué es una métrica de eficiencia de crecimiento
- Benchmarks de churn por segmento de mercado (SMB, mid-market, enterprise)

**Modelado financiero SaaS:**
Explica cómo construir un modelo financiero robusto para un SaaS B2B:
- El driver-based model: cómo modelar el ARR desde los drivers (nuevos clientes, ARPA, churn, expansión)
- La cuenta de resultados SaaS: cómo separar correctamente los ingresos recurrentes de los no recurrentes
- Gross margin en SaaS: cómo calcularlo y por qué el 75-85% es el benchmark al que aspirar
- Rule of 40: cómo calcularlo y por qué es la métrica de balance entre crecimiento y rentabilidad preferida por inversores
- Burn múltiple: la métrica de eficiencia de capital que los inversores miran en 2023-2025

**Preparación del data room financiero para inversores:**
Describe qué información financiera debe contener un data room de SaaS:
- Las métricas que todo inversor SaaS pide en las primeras 48h del proceso
- Presentación de cohorts de clientes: formato, nivel de detalle, qué dice de tu negocio
- Cómo presentar el pipeline de ARR: contracted, committed y projected
- La transparencia sobre el churn: cómo presentar los datos de forma honesta sin alarmar
- Cómo estructurar el modelo financiero de 3 años que soporte la narrativa de crecimiento

**Formato de respuesta:**
1. Glosario de las 20 métricas SaaS más importantes con fórmula y ejemplo numérico
2. Plantilla de ARR waterfall mensual con todas las categorías de movimiento
3. Calculadora de unit economics SaaS (CAC, LTV, payback, magic number) con fórmulas
4. Guía de benchmarks SaaS por etapa de empresa y segmento de mercado (tablas de referencia)
5. Lista de preguntas financieras que hace un inversor SaaS en la primera reunión con respuestas tipo

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Dominar métricas financieras SaaS para gestión e inversores',
                'vote_score'       => 49,
                'resource_type'    => 'prompt',
            ],
            // 8 - Legal
            [
                'profession_id'    => 8,
                'title'            => 'Contratos y compliance legal para SaaS B2B: MSA, DPA y negociación enterprise',
                'description'      => 'Comprende los contratos clave que necesita un SaaS B2B para vender a clientes enterprise: Master Service Agreement, Data Processing Agreement, SLAs y cómo negociar los términos más conflictivos con los departamentos legales de grandes empresas.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho tecnológico y contratos SaaS con experiencia asesorando a empresas de software B2B en sus relaciones contractuales con clientes enterprise, en la estructuración de sus acuerdos de servicio y en la negociación con los departamentos legales de grandes corporaciones.

Nota importante: Esta información es de carácter educativo y no constituye asesoramiento legal específico. Para decisiones concretas, siempre consulta con un abogado licenciado en tu jurisdicción.

Los contratos enterprise SaaS son una de las principales fricciones en el ciclo de venta. Un proceso legal mal gestionado puede alargar el cierre 60-90 días extra o perder un deal. Entender el marco contractual y las cláusulas más negociadas es una ventaja competitiva enorme.

**El stack contractual del SaaS B2B:**
Describe los documentos legales clave que necesita un SaaS B2B:
- Terms of Service (ToS): para clientes self-serve, las bases del acuerdo unilateral
- Master Service Agreement (MSA): el contrato negociado para clientes enterprise, qué debe incluir
- Order Form: el documento de compra específico que referencia el MSA y especifica el pedido
- Statement of Work (SoW): cuándo y cómo usarlo para servicios profesionales o implementaciones custom
- Data Processing Agreement (DPA): obligatorio bajo RGPD cuando el SaaS procesa datos personales del cliente

**El Master Service Agreement (MSA) SaaS:**
Explica las cláusulas fundamentales de un MSA bien estructurado:
- Definición del servicio y SLAs: uptime, tiempo de respuesta de soporte, exclusiones
- Propiedad intelectual: quién es dueño de qué (el código, los datos del cliente, las customizaciones)
- Confidencialidad: definición, obligaciones y excepciones estándar
- Limitación de responsabilidad: por qué es la cláusula más negociada y cómo estructurarla
- Indemnización: por qué el proveedor SaaS suele indemnizar por infracción de IP y cómo limitarla
- Terminación: por conveniencia, por causa, consecuencias y obligaciones post-terminación

**El Data Processing Agreement (DPA) bajo RGPD:**
Describe los elementos clave del DPA que exigen los clientes europeos:
- Cuándo es obligatorio un DPA: cualquier cliente que tenga usuarios o datos de personas en la UE
- Roles de las partes: cuándo el SaaS es "processor" y cuándo puede ser "controller"
- Las cláusulas obligatorias bajo el Art. 28 RGPD: qué debe incluir un DPA conforme a la normativa
- Sub-processors: cómo gestionar el listado de sub-processors y el proceso de notificación de cambios
- Transferencias internacionales de datos: Standard Contractual Clauses (SCCs) y cuándo son necesarias
- El DPA de los grandes clientes enterprise: suelen imponer el suyo, cómo revisarlo y qué negociar

**Negociación de contratos enterprise SaaS:**
Explica cómo navegar la negociación legal con clientes enterprise:
- Las cláusulas más negociadas y por qué: limitación de responsabilidad, indemnización, SLA, IP ownership
- Estrategia de negociación: qué ceder fácilmente, qué defender firmemente y por qué
- El equipo legal del cliente: cómo relacionarse de forma productiva con abogados que "nunca firman nada"
- Cómo preparar un redline playbook: posiciones de inicio, posiciones de negociación y líneas rojas
- Cuándo escalar una negociación legal al CEO o al board y cuándo es una señal de que el deal no vale la pena

**SLAs y acuerdos de nivel de servicio:**
Describe cómo estructurar SLAs que sean comercialmente atractivos y técnicamente sostenibles:
- Uptime SLA: cómo calcular el 99.9% vs. 99.95% vs. 99.99% y qué implica en tiempo de downtime
- Cómo definir las exclusiones del SLA: mantenimiento programado, causas de fuerza mayor, uso incorrecto del cliente
- Remedios por incumplimiento del SLA: créditos de servicio, cuándo y cómo usarlos
- Support SLA: tiempos de respuesta y resolución por severidad, cuándo ofrecer soporte 24/7
- Monitorización del SLA: cómo medir y reportar el cumplimiento al cliente

**Formato de respuesta:**
1. Checklist de documentos legales que necesita un SaaS B2B para vender a enterprise
2. Guía de las 10 cláusulas más negociadas en un MSA SaaS con posición recomendada
3. Plantilla de DPA mínima conforme al Art. 28 RGPD (estructura y secciones obligatorias)
4. Playbook de negociación: cláusulas que puedes ceder, cláusulas que debes defender
5. SLA estándar para SaaS B2B: uptime, soporte y remedios (estructura modelo)

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar contratos y compliance legal para vender SaaS a enterprise',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            // 9 - Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Customer Success para clientes enterprise B2B: expansión y renovación',
                'description'      => 'Diseña y ejecuta una estrategia de Customer Success para cuentas enterprise B2B que maximice la retención, la expansión y la conversión en referencias. Aprende a gestionar múltiples stakeholders, demostrar ROI continuo y preparar renovaciones multimillonarias.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP of Customer Success o Enterprise Customer Success Manager con experiencia gestionando carteras de clientes enterprise en empresas B2B SaaS. Has cerrado renovaciones de seis cifras, liderado expansiones de cuenta y construido relaciones a largo plazo con ejecutivos de grandes empresas en sectores como finanzas, salud, retail y manufactura.

El Customer Success enterprise es un rol estratégico diferente al CS de cuentas SMB o mid-market. Las cuentas enterprise tienen docenas de usuarios, múltiples departamentos, stakeholders con intereses distintos, y el riesgo de un churn es enorme (y el upside de la expansión también). Necesito dominar la gestión de cuentas enterprise de forma integral.

**La cuenta enterprise como ecosistema:**
Explica cómo entender y mapear la complejidad de una cuenta enterprise:
- El mapa de stakeholders enterprise: champion, executive sponsor, power users, IT admin, economic buyer
- La estrategia de multi-threading: por qué tener una sola relación fuerte es un riesgo crítico
- Cómo identificar a los stakeholders que tienen poder real vs. los que parecen tenerlo
- La salud de la cuenta enterprise: qué indicadores son realmente predictivos de churn en enterprise
- El plan de éxito del cliente (Customer Success Plan): cómo construirlo y mantenerlo vivo

**Gestión del ciclo de vida de la cuenta enterprise:**
Describe las fases del lifecycle de una cuenta enterprise y qué hacer en cada una:
- Onboarding enterprise: cómo coordinar la implementación con el equipo técnico del cliente, TI y los usuarios finales
- Adoption phase: cómo asegurar la adopción en todos los departamentos del cliente
- Value realization: cómo documentar y demostrar el valor entregado de forma continua
- Renewal management: cuándo empezar la conversación de renovación y cómo estructurarla
- Expansion: cómo identificar oportunidades de upsell y cross-sell a partir del éxito del cliente

**Demostración continua de ROI enterprise:**
Explica cómo construir el caso de valor a lo largo del año con una cuenta enterprise:
- Value engineering: cómo cuantificar el impacto del producto en los KPIs del cliente
- Business reviews ejecutivas (EBR): cómo estructurarlas y qué frecuencia en enterprise
- Value realization reports: cómo documentar el ROI acumulado para la conversación de renovación
- Cómo recoger los datos de impacto del cliente cuando no los comparte voluntariamente
- El valor anecdótico: cómo recoger y usar historias de éxito del equipo del cliente

**Renovación de contratos enterprise:**
Describe el proceso de gestión de renovación de una cuenta enterprise grande:
- Cuándo iniciar el proceso de renovación: 6-9 meses antes del vencimiento en enterprise
- Cómo identificar señales tempranas de riesgo en la renovación (cambio de sponsor, reorganización, congelación de presupuesto)
- La conversación de renovación: cómo estructurarla para que sea una formalidad, no una negociación
- Upsell en la renovación: cómo integrar la conversación de expansión en el proceso de renovación
- El multi-year deal: cuándo y cómo proponerlo y qué incentivos ofrecer

**Gestión de cuentas en riesgo enterprise:**
Explica cómo detectar y salvar una cuenta enterprise en riesgo:
- Señales de alerta en cuentas enterprise: reducción de uso, cambios en el equipo sponsor, quejas escaladas
- El plan de recuperación de cuenta enterprise: qué pasos dar, en qué orden y con qué urgencia
- Cómo escalar internamente cuando una cuenta grande está en riesgo (CS → VP CS → CEO)
- Cuándo involucrar a ventas en una situación de riesgo de churn enterprise
- Cómo manejar la conversación cuando el cliente quiere salir: opciones, concesiones, timing

**Formato de respuesta:**
1. Plantilla de Customer Success Plan enterprise (secciones, frecuencia de actualización)
2. Proceso de gestión de renovación enterprise: timeline y responsabilidades desde 9 meses antes
3. EBR agenda de 90 minutos para cuenta enterprise (agenda, objetivos, facilitación)
4. Playbook de cuenta en riesgo enterprise: señales, pasos de acción, roles y escalada
5. Scorecards de salud de cuenta enterprise: variables, pesos y clasificación de riesgo

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Retener y expandir cuentas enterprise en B2B SaaS',
                'vote_score'       => 50,
                'resource_type'    => 'prompt',
            ],
            // 10 - Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría de estrategia de producto SaaS como freelancer independiente',
                'description'      => 'Aprende a posicionarte y operar como consultor independiente de estrategia de producto SaaS. Cubre cómo definir tu propuesta de valor, conseguir los primeros clientes, estructurar los encargos y cobrar por el valor estratégico que aportas en lugar de por tus horas.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de negocios especializado en ayudar a profesionales de producto, ex-PMs y consultores de producto a construir una práctica de consultoría independiente en el sector SaaS. Has trabajado con decenas de consultores freelance de producto que pasaron de cobrar por hora como generalists a construir negocios de consultoría estratégica especializados en SaaS con tarifas premium.

La consultoría de producto SaaS freelance es uno de los nichos más atractivos para profesionales con experiencia en producto digital. Los fundadores de SaaS, los equipos de producto y los inversores buscan expertise externo en estrategia de producto, y están dispuestos a pagar bien por ello. Pero la mayoría de los consultores de producto independientes no saben cómo posicionarse, cómo conseguir clientes o cómo cobrar lo que merecen.

**Posicionamiento como consultor de estrategia SaaS:**
Explica cómo diferenciarse en el mercado de la consultoría de producto:
- El error del generalista: por qué "consultor de producto" es demasiado amplio para atraer buenos clientes
- Cómo elegir un nicho de consultoría SaaS que combine tu experiencia real con la demanda del mercado
- Ejemplos de nichos de consultoría de producto con alta demanda: pricing y packaging SaaS, product-market fit early-stage, product operations y procesos, 0-to-1 product strategy para startups
- Cómo articular tu propuesta de valor como consultor de producto en una frase
- La importancia del punto de vista propio: por qué los mejores consultores tienen una metodología o framework propio

**Conseguir los primeros clientes de consultoría SaaS:**
Describe las estrategias más efectivas para construir la cartera inicial:
- La red profesional como punto de partida: cómo activar tu red para conseguir los primeros encargos
- Posicionamiento en LinkedIn como consultor de SaaS: tipo de contenido, frecuencia, qué compartir
- Escribir públicamente: por qué un newsletter o blog sobre estrategia de producto es el mejor canal de adquisición long-term
- Plataformas de freelance para expertos: Toptal, Catalant, Expert360, cuándo usar cada una
- Los inversores como fuente de clientes: cómo posicionarte ante VCs y fondos como experto de producto al que enviar sus portfolios

**Estructura de los encargos de consultoría:**
Explica cómo estructurar correctamente los proyectos de consultoría de producto:
- Advisory retainer mensual: qué incluye (horas de sesiones, acceso por Slack, revisión de documentos) y cómo tarifarlo
- Proyecto puntual de estrategia: product strategy sprint, pricing review, PMF assessment, cómo delimitarlos
- Embedded product consulting: trabajar como "fractional PM" semanas o meses dentro del equipo del cliente
- Cómo definir claramente el alcance para evitar el scope creep que destruye la rentabilidad
- Cuándo y cómo subcontratar parte del trabajo para escalar sin perder calidad

**Tarifas y modelo de precios para consultoría de producto SaaS:**
Describe cómo salir del modelo hora y cobrar por valor:
- Por qué las tarifas por hora son un techo de ingresos y cómo superarlo
- Pricing por proyecto: cómo calcular el precio de un proyecto de estrategia de producto
- El retainer mensual: cómo definir el alcance y el precio de un advisory retainer
- Value-based pricing para consultoría de producto: cómo conectar tu tarifa con el impacto que generas
- Cómo aumentar las tarifas con clientes existentes sin dañar la relación

**Operación del negocio de consultoría freelance:**
Explica cómo gestionar la operación del negocio de consultoría de producto:
- Herramientas mínimas para operar: contratos, facturación, gestión del tiempo, entrega de trabajo
- Cómo gestionar múltiples clientes simultáneos sin perder calidad en ninguno
- La trampa de la dependencia de un solo cliente: por qué el 80% de los ingresos de un cliente es un riesgo
- Construcción de activos de consultoría reutilizables: frameworks, plantillas, metodologías propias
- Cómo medir el éxito de tu práctica de consultoría y cuándo escalar (contratar, subcontratar, productizar)

**Formato de respuesta:**
1. Plantilla de posicionamiento como consultor de producto SaaS (nicho, propuesta de valor, perfil de cliente ideal)
2. Plan de 90 días para conseguir el primer cliente de consultoría de producto SaaS
3. Estructura de propuesta de consultoría de estrategia de producto (secciones y contenido)
4. Tabla de tarifas de referencia para distintos tipos de encargo de consultoría de producto
5. Plantilla de contrato de consultoría de advisory retainer: cláusulas esenciales a incluir

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Lanzar y operar una consultoría freelance de estrategia de producto SaaS',
                'vote_score'       => 41,
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
