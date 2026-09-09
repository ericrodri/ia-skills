<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills141Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing technology stack: selección, integración y errores que cuestan millones',
                'description'       => 'Diseña el martech stack ideal para tu empresa: criterios de selección, integraciones necesarias y los errores que hacen fracasar los proyectos de marketing technology.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CMO y arquitecto de martech con experiencia implementando y optimizando stacks de marketing en empresas de diferentes tamaños, desde startups hasta empresas con miles de empleados. Voy a contarte mi contexto y quiero que me ayudes a diseñar o auditar mi martech stack.

**Contexto de mi empresa:**
- Tamaño: [número de empleados y de personas en marketing]
- Tipo de negocio: [B2B SaaS / ecommerce / B2C subscription / marketplace / otro]
- Volumen de leads/clientes mensual: [aproximado]
- Stack actual (si tienes): [lista las herramientas que ya usas]
- Presupuesto anual de martech: [rango]
- Principal problema con el stack actual o con la decisión de construirlo: [describe]

**Parte 1 — La arquitectura de un martech stack moderno**

Antes de hablar de herramientas, necesito entender la arquitectura:
1. Las capas del martech stack moderno: data layer (CDP, data warehouse), activation layer (automation, CRM, email), analytics layer (BI, attribution), ads layer. Para cada capa, qué problemas resuelve y en qué orden hay que construirlas.
2. El error más caro de martech: comprar herramientas antes de tener los procesos y los datos limpios. Por qué el 60% de los proyectos de martech fracasan y qué tienen en común los que fallan.
3. Build vs. buy vs. integrate: cuándo tiene sentido construir herramientas custom, cuándo comprar SaaS y cuándo integrar con middleware (Zapier, Make, n8n, Workato). El criterio de decisión correcto.

**Parte 2 — El data layer: la base de todo**

Sin datos limpios, el stack no funciona:
1. Customer Data Platform (CDP): qué es exactamente, cuándo necesito uno y cuándo es prematuro. Segment vs. RudderStack vs. mParticle para mi tamaño y necesidades.
2. El data warehouse: Snowflake, BigQuery, Redshift. Cuándo el marketing necesita acceso directo al data warehouse y cuándo basta con los dashboards del CRM.
3. La unificación de identidad: cómo conecto el comportamiento anónimo (web) con el lead y con el cliente. El problema del identity resolution que nadie explica bien.
4. La calidad de datos: por qué el 80% de los problemas de martech son problemas de datos sucios. Cómo auditar y limpiar antes de añadir más herramientas.

**Parte 3 — CRM y automation**

El núcleo del stack:
1. La selección del CRM para marketing: Salesforce + Marketing Cloud vs. HubSpot vs. Marketo vs. ActiveCampaign. Para mi tamaño y tipo de negocio, cuál tiene más sentido y por qué. Dame criterios objetivos, no el pitch de cada vendor.
2. El marketing automation: qué procesos debo automatizar primero (lead nurturing, scoring, routing) y qué nunca debo automatizar porque pierde la personalización necesaria.
3. El lead scoring: cómo diseñar un modelo de scoring que realmente prediga el MQL vs. uno que solo mide actividad sin correlación con conversión.
4. La integración CRM-Sales: los parámetros de la integración perfecta entre marketing y ventas que evitan el "los leads de marketing no valen nada" vs. "ventas no trabaja los leads".

**Parte 4 — Analytics y attribution**

Midiendo lo que importa:
1. El problema de la atribución multi-touch: por qué el last-click sigue siendo la medida más usada aunque todos sabemos que es la peor. Los modelos alternativos (data-driven, time decay, linear) y cuándo aplicar cada uno.
2. Las herramientas de analytics de marketing: Google Analytics 4 vs. Mixpanel vs. Amplitude vs. Heap. Para mi caso de uso, cuál da más información accionable.
3. El Marketing Mix Modeling (MMM): cuándo tiene sentido para empresas de mi tamaño, qué requiere en términos de datos históricos y cómo complementa la atribución digital.
4. El reporting de marketing al board: las métricas que importan a dirección (CAC, LTV, payback period, pipeline influence) vs. las métricas de operación interna (CTR, open rates, MQLs). Cómo construir el dashboard correcto para cada audiencia.

**Parte 5 — Implementación y governance**

El proyecto de martech que no fracasa:
1. El roadmap de implementación: qué construyo en el mes 1-3, qué en el 3-6 y qué en el 6-12. La secuencia que reduce el riesgo de proyectos que nunca acaban de funcionar.
2. La governance del martech stack: quién decide qué herramientas se añaden, quién tiene los permisos de configuración y cómo evito el shadow IT de marketing (herramientas que compra cada persona de forma independiente).
3. Los vendors y las negociaciones: cómo negociar con los grandes vendors de martech, cuándo pedir descuentos y las cláusulas de los contratos que debo leer antes de firmar.
4. El momento de cambiar una herramienta: los síntomas que indican que una herramienta ya no sirve y el proceso de migración que minimiza el riesgo operativo.

Termina con el stack específico que recomendarías para mi contexto, justificando cada elección y las integraciones clave entre herramientas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 65,
                'use_case'          => 'Diseñar o auditar el martech stack de una empresa con criterios técnicos y de negocio',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Domain-driven design en la práctica: bounded contexts y código mantenible',
                'description'       => 'DDD aplicado: bounded contexts, aggregates, eventos de dominio y cómo estructurar una base de código compleja para que sea mantenible a 5 años.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un arquitecto de software con amplia experiencia en Domain-Driven Design aplicado en sistemas de producción complejos. Voy a contarte el contexto de mi sistema y quiero aplicar DDD de forma práctica, no teórica.

**Contexto de mi sistema:**
- Tipo de dominio: [ecommerce / fintech / logística / SaaS B2B / salud / otro]
- Stack tecnológico: [lenguaje, frameworks, base de datos]
- Tamaño del equipo: [número de desarrolladores]
- Estado actual del código: [monolito bien estructurado / big ball of mud / microservicios desacoplados / otro]
- Principal problema: [la base de código es difícil de cambiar / los equipos se pisan / no sabemos cómo dividir el sistema / los conceptos del negocio están mezclados en el código / otro]

**Parte 1 — Strategic Design: el mapa del dominio**

Antes de tocar el código, necesito entender el dominio:
1. Event Storming como primer paso: cómo facilitar una sesión de event storming con el equipo de producto y negocio. Qué eventos de dominio identifico, qué comandos los disparan y qué actores participan. Dame el proceso paso a paso.
2. Bounded Contexts: cómo identificarlos a partir del event storming. Los criterios para decidir dónde trazar el límite entre contextos. Para un dominio de ecommerce, por ejemplo, cómo identifico que "Pedido" en el contexto de Ventas es un concepto diferente al "Pedido" del contexto de Logística aunque tengan el mismo nombre.
3. Context Map: los patrones de relación entre bounded contexts (Shared Kernel, Customer/Supplier, Conformist, Anti-Corruption Layer, Open Host Service, Published Language). Para mi sistema, cuáles son los patrones más comunes y cómo impactan la arquitectura.
4. El Ubiquitous Language: cómo construirlo con el equipo de negocio y cómo asegurarse de que el código refleja exactamente ese lenguaje. Los síntomas de que el UL está roto.

**Parte 2 — Tactical Design: dentro del bounded context**

Los bloques de construcción de DDD:
1. Entities vs. Value Objects: el criterio exacto para decidir cuándo algo es una entidad (tiene identidad propia) y cuándo es un value object (se define por sus atributos). Dame 10 ejemplos del dominio típico con la decisión correcta y la razón.
2. Aggregates: qué son, cómo identificarlos y cómo decidir sus límites. La regla de que las transacciones no deben cruzar boundaries de aggregates y las implicaciones de diseño. El error más común: aggregates demasiado grandes.
3. Domain Events: cuándo usar eventos de dominio, cómo nombrarlos (pasado, específico, significativo para el negocio) y cómo publicarlos de forma que otros bounded contexts puedan reaccionar sin acoplamiento.
4. Domain Services: cuándo la lógica de negocio no pertenece a ninguna entidad ni value object y debe ir en un servicio de dominio. Cómo distinguirlos de los application services y de los infraestructure services.
5. Repositories: el contrato que define un repositorio en DDD, cómo implementarlo sin que el ORM dicte el diseño del dominio, y el patrón de separación Query/Command.

**Parte 3 — Implementación práctica**

Sin teoría: cómo se hace en código:
1. La estructura de carpetas/paquetes que refleja los bounded contexts: monorepo con módulos vs. repos separados. Para mi tamaño de equipo, cuál escala mejor.
2. Cómo evitar que la persistencia (el ORM, el esquema de base de datos) contamine el modelo de dominio. El patrón de mappers entre domain objects y persistence objects.
3. CQRS básico: cuándo separar los modelos de lectura y escritura. La implementación mínima que da los beneficios sin la complejidad de event sourcing.
4. Event Sourcing: cuándo vale la pena ir más allá de CQRS básico. Los casos de uso donde event sourcing tiene sentido real y dónde es sobreingeniería costosa.

**Parte 4 — DDD en microservicios**

La intersección más relevante hoy:
1. Cómo mapear bounded contexts a microservicios: la regla de que un bounded context puede ser uno o varios microservicios, pero un microservicio nunca debe cruzar bounded contexts.
2. La comunicación entre servicios que respeta los límites de DDD: cuándo usar mensajería asíncrona (eventos) vs. llamadas síncronas (API), y qué patrón de integración preserva el desacoplamiento.
3. El eventual consistency como consecuencia del DDD en microservicios: cómo gestionar la consistencia distribuida con sagas, outbox pattern y compensating transactions.

**Parte 5 — Introducir DDD en código existente**

Para quien tiene deuda técnica real:
1. El proceso de strangler fig aplicado a un monolito sin estructura: cómo identificar el primer bounded context a extraer, cómo crear el anti-corruption layer que protege el dominio mientras migras.
2. Cómo convencer al equipo y al management de invertir en DDD sin que suene a reescritura completa del sistema.
3. Los errores que se cometen al aplicar DDD de forma dogmática: cuándo aplicar tácticas de DDD y cuándo el CRUD simple es la respuesta correcta.

Incluye ejemplos de código en [el lenguaje de mi stack] para los conceptos más importantes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 90,
                'use_case'          => 'Aplicar Domain-Driven Design en un sistema real para mejorar la mantenibilidad del código',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Design systems escalables: tokens, componentes, documentación y governance',
                'description'       => 'Construye un design system que crece con la empresa: tokens de diseño, librería de componentes, documentación viva y la governance que evita que quede obsoleto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Design Systems Lead con experiencia construyendo sistemas de diseño desde cero en empresas en crecimiento y manteniendo sistemas maduros en organizaciones grandes. Quiero construir o escalar el design system de mi empresa.

**Contexto de mi organización:**
- Tamaño del equipo de diseño: [número de diseñadores]
- Tamaño del equipo de desarrollo: [número de desarrolladores frontend]
- Tipo de producto: [web app / mobile app / ambas / otro]
- Framework frontend: [React / Vue / Angular / Flutter / otro]
- Estado actual del design system: [no tenemos nada / tenemos una librería de componentes sin documentación / tenemos Storybook básico / tenemos un sistema parcialmente funcional]
- Principal problema: [inconsistencia visual entre productos / los componentes no se reusan / el sistema queda obsoleto / no hay adopción / otro]

**Parte 1 — Estrategia y fundamentos**

Antes de construir nada:
1. La diferencia entre una librería de componentes y un design system real. Por qué la mayoría de empresas tienen la primera y creen que tienen el segundo.
2. El caso de negocio del design system: cómo cuantificar el ROI del design system para convencer a producto y a ingeniería de invertir tiempo en él. Las métricas que hablan el lenguaje del negocio.
3. El modelo de equipo: design system como producto con su propio PM, eng y diseñador dedicados vs. modelo federated donde cada equipo contribuye. Para mi tamaño, cuál funciona.
4. La estrategia de lanzamiento: el error de construir el sistema perfecto antes de publicarlo vs. lanzar con lo mínimo viable y iterar. Cómo hacer el lanzamiento que genera adopción.

**Parte 2 — Design tokens: la capa más importante**

La base sobre la que se construye todo:
1. La arquitectura de tokens en tres capas: primitive tokens (los valores brutos: colores hex, tamaños en px), semantic tokens (los valores con significado: color-primary, spacing-md) y component tokens (los valores específicos de un componente). Cómo diseñar las tres capas para que el sistema sea flexible.
2. Herramientas para gestionar tokens: Tokens Studio para Figma, Style Dictionary para la transformación a código, design-tokens community group format. Cómo configurar el pipeline de tokens que mantiene Figma y código sincronizados.
3. Dark mode y theming: cómo diseñar los tokens desde el inicio para que dark mode sea una variante trivial de implementar, no una refactorización completa.
4. Los tokens de tipografía, espaciado, elevación y movimiento: los sistemas de escala (4px, 8px, modular scale para tipografía) y cómo documentarlos para que cualquier diseñador o desarrollador tome decisiones coherentes.

**Parte 3 — Librería de componentes**

Construir lo que se usa, no lo que parece completo:
1. Cómo priorizar qué componentes construir primero: el análisis de uso que identifica los 20 componentes que resuelven el 80% de los problemas de diseño en mi producto.
2. La anatomía de un componente de design system bien construido: variantes, estados, props, accesibilidad, documentación y ejemplos de uso. Lo que tiene que tener para que los equipos lo adopten.
3. Componentes compuestos vs. primitivos: cuándo construir un DatePicker complejo y cuándo exponer solo los primitivos (Input, Calendar, Popover) para que los equipos los combinen según sus necesidades.
4. La accesibilidad como parte del componente, no como afterthought: qué debe garantizar el design system para que los productos construidos sobre él sean accesibles por defecto (ARIA, keyboard navigation, color contrast).
5. El versionado semántico de los componentes: cuándo un cambio es breaking, cuándo es una feature y cuándo es un fix. Cómo gestionar los deprecations sin bloquear a los equipos consumidores.

**Parte 4 — Documentación que se usa**

La documentación que los equipos leen:
1. Storybook como documentación viva: cómo estructurar los stories para que sean documentación útil (no solo demos técnicas), cómo integrar Figma embeds y cómo mantener Storybook actualizado con el componente real.
2. Las guías de uso que evitan el mal uso: para cada componente, qué incluir en el "Do / Don't", cuándo usar este componente vs. uno alternativo y cuáles son los antipatrones más comunes.
3. Los changelogs y notas de migración: cómo documentar los cambios de forma que los equipos puedan migrar sin bloquear sus sprints.
4. El portal de design system: cómo estructurar la documentación para que sea el primer lugar donde van diseñadores y desarrolladores cuando tienen una pregunta. Zeroheight, Supernova, Notion o Storybook + static site.

**Parte 5 — Governance y adopción**

El sistema que no muere en 6 meses:
1. El modelo de contribución: cómo los equipos pueden proponer nuevos componentes o cambios sin que el equipo del design system se convierta en cuello de botella.
2. El proceso de RFC (Request for Component): cuándo un problema se resuelve con un componente nuevo vs. cuándo con una variante del existente vs. cuándo el equipo debería resolverlo localmente.
3. Métricas de adopción: cómo medir si los equipos usan el design system o lo ignoraron. Las métricas de npm install counts, referencia a tokens, coverage de componentes en los productos.
4. Cómo manejar a los equipos que no adoptan el sistema: las razones habituales (sistema demasiado rígido, mala documentación, componentes que no cubren sus necesidades) y cómo resolverlas sin imponer.

Dame también un roadmap de 12 meses para construir el design system desde donde estoy ahora hasta un sistema adoptado y activamente mantenido.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 80,
                'use_case'          => 'Construir un design system escalable con tokens, componentes, documentación y governance',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sales tech stack: CRM, engagement e inteligencia de datos para vender más',
                'description'       => 'Diseña el stack tecnológico de ventas que multiplica la productividad: CRM, sales engagement, inteligencia de datos y las integraciones que eliminan el trabajo manual.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Revenue Operations (RevOps) director con experiencia implementando y optimizando stacks de ventas en empresas B2B de diferentes tamaños. Voy a darte mi contexto y quiero diseñar el sales tech stack que maximice la productividad de mi equipo.

**Contexto de mi equipo de ventas:**
- Modelo de ventas: [inbound / outbound / PLG / channel / enterprise / combinación]
- Tamaño del equipo de ventas: [número de AEs, SDRs, CSMs]
- Ticket medio: [rango de precio]
- Ciclo de venta medio: [días o semanas]
- Stack actual: [lista las herramientas que ya usas]
- Presupuesto de sales tech mensual: [rango por persona o total]
- Principal problema: [los vendedores pierden tiempo en trabajo manual / falta visibilidad del pipeline / los datos están en silos / no sabemos de dónde vienen los mejores deals / otro]

**Parte 1 — La arquitectura del sales tech stack**

El mapa antes de las herramientas:
1. Las capas del sales tech stack: CRM (sistema de registro), sales engagement (comunicación y secuencias), datos e inteligencia (prospección, enriquecimiento), conversational intelligence (análisis de llamadas), CPQ (cotizaciones) y analytics. Para cada capa, qué problema resuelve y cuándo es necesaria.
2. El error más frecuente en sales tech: comprar demasiadas herramientas que se solapan, generan datos duplicados y nadie acaba usando bien. El principio de stack mínimo eficiente vs. el "necesitamos X porque lo usa [empresa grande]".
3. RevOps como función: por qué el sales tech sin RevOps que lo gobierne no funciona. Cómo estructura las responsabilidades de RevOps incluso si soy un equipo pequeño sin ese cargo formal.

**Parte 2 — El CRM: la decisión más importante**

Elegir mal el CRM cuesta años y mucho dinero:
1. Salesforce vs. HubSpot Sales Hub vs. Pipedrive vs. Close.com vs. Attio para mi tamaño de equipo y modelo de ventas. Dame la decisión correcta con los criterios que la justifican, no solo las features de marketing de cada vendor.
2. El diseño del pipeline en el CRM: cuántas etapas, qué significa cada una (criterios de entrada y salida), cómo evitar que el pipeline se convierta en cementerio de deals que nadie actualiza.
3. Los campos obligatorios del CRM: cuáles son imprescindibles para reportar con confianza y cuáles son campos que nadie rellena y solo generan ruido. El principio de mínimo dato máximo utilidad.
4. La integración CRM-ERP o CRM-Finanzas: cómo conectar el deal ganado con la factura emitida sin que los datos se pierdan en el proceso.

**Parte 3 — Sales engagement y outbound**

Las herramientas que multiplican el alcance:
1. Outreach vs. Salesloft vs. Apollo vs. Instantly vs. Lemlist para mi modelo de ventas. Cuándo cada uno tiene sentido.
2. El diseño de secuencias de outbound que funcionan en 2025: la cadencia, los canales (email, LinkedIn, teléfono), el número de toques y la personalización mínima que hace diferencia.
3. La inteligencia de datos para prospección: Apollo, ZoomInfo, Clay, Cognism, LinkedIn Sales Navigator. Para mi ICP y geografía, cuál da los datos más precisos y qué coste/calidad ofrece cada uno.
4. El enrichment automático: cómo enriquecer los leads que llegan inbound antes de que el SDR los trabaje. Las herramientas que hacen este proceso sin intervención manual.

**Parte 4 — Conversational Intelligence y coaching**

Las grabaciones de llamadas como herramienta de mejora:
1. Gong vs. Chorus (Zoominfo) vs. Fireflies vs. Otter para equipos de ventas. Para mi tamaño y modelo, cuál tiene mejor ROI.
2. Cómo usar el conversational intelligence para coaching: qué patrones buscar en las llamadas exitosas vs. las perdidas, cómo estructurar las sesiones de coaching basadas en datos reales.
3. Las métricas de llamadas que predicen el cierre: talk/listen ratio, preguntas por llamada, mención de competidores, siguiente paso claro. Cómo usar estos datos sin microgestionar.

**Parte 5 — Analytics y forecasting**

Ver el futuro del pipeline:
1. El forecast de ventas: cómo construir un modelo de forecasting que el management pueda confiar. La diferencia entre forecast intuitivo (lo que dice el vendedor) y forecast basado en datos (weighted pipeline, historical conversion rates).
2. El dashboard del VP de Ventas: las métricas que hay que ver cada día, cada semana y cada mes para gestionar el equipo con datos.
3. La detección temprana de deals en riesgo: qué señales en el CRM y en el conversational intelligence indican que un deal marcado como "commit" está en peligro real.
4. Las integraciones de BI: cuándo necesito conectar el CRM con un data warehouse (Snowflake/BigQuery) y herramientas de BI (Tableau, Looker, Metabase) vs. cuándo los reports nativos del CRM son suficientes.

Termina con el stack específico que recomiendas para mi situación y el ROI esperado de cada herramienta.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar el sales tech stack que maximiza la productividad del equipo de ventas B2B',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Platform thinking: construye plataformas con efectos de red, no solo productos',
                'description'       => 'Las decisiones de arquitectura de producto que permiten a terceros construir sobre tu base, crean efectos de red y convierten un producto en una plataforma.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Product Strategist con experiencia en el diseño y evolución de plataformas tecnológicas que han creado efectos de red. Voy a darte el contexto de mi producto y quiero entender si tiene sentido la estrategia de plataforma y cómo ejecutarla.

**Contexto de mi producto:**
- Descripción del producto actual: [describe en detalle]
- Usuarios actuales: [número y perfil]
- Modelo de negocio: [SaaS / marketplace / transaccional / freemium / otro]
- Fase: [early stage / crecimiento / escala]
- Por qué estoy considerando la estrategia de plataforma: [describe tu motivación o hipótesis]
- Principal duda: [no sé si mi producto puede ser plataforma / sé que quiero ser plataforma pero no sé por dónde empezar / ya tenemos API y no sabemos cómo crecer el ecosistema / otro]

**Parte 1 — Qué es realmente una plataforma**

La claridad conceptual que evita errores costosos:
1. La diferencia fundamental entre un producto y una plataforma: los productos crean valor para sus usuarios, las plataformas facilitan intercambios de valor entre grupos de usuarios y/o terceros. Por qué esta distinción importa para las decisiones que voy a tomar.
2. Los tipos de plataforma y sus diferentes economías: two-sided markets (Airbnb, Uber), app ecosystems (Salesforce AppExchange, Shopify Apps), API businesses (Stripe, Twilio), data platforms. Cuál de estos modelos es más relevante para mi contexto.
3. Los efectos de red: la diferencia entre efectos de red directos (mismo lado) e indirectos (entre lados), los efectos de red de datos y los efectos de escala. Por qué los efectos de red son el moat más difícil de replicar y cómo saber si mi producto puede generarlos.
4. El "chicken and egg problem": cómo las plataformas más exitosas resolvieron el problema de necesitar dos grupos de usuarios para tener valor. Las estrategias que funcionaron (subsidiar un lado, focalización geográfica, single-player mode).

**Parte 2 — La decisión de apertura**

Cuánto abrir y cuándo:
1. El espectro de apertura: desde el producto cerrado hasta la plataforma completamente abierta. Los puntos intermedios (API privada, partner program, marketplace cerrado, open ecosystem) y cuándo transicionar de uno a otro.
2. Por qué abrir demasiado pronto destruye la plataforma: el riesgo de construir el ecosistema antes de tener product-market fit en el core product.
3. Qué parte de mi producto debe ser abierta y qué debe permanecer cerrada. El principio de "Core vs. Context": cómo decidir qué es infraestructura que puedo abrir y qué es diferenciación que debo mantener.
4. Las APIs como producto: el diseño de la API pública que hace que los terceros quieran construir sobre ti. Qué hace que la API de Stripe sea la referencia de developer experience y qué puedo aprender.

**Parte 3 — Diseño del ecosistema**

Cómo atraer y retener a los terceros que construyen:
1. La propuesta de valor para los desarrolladores o partners: por qué alguien debería construir sobre mi plataforma en lugar de construir su propio producto independiente. El business case que debo ofrecerles.
2. Los modelos de monetización del ecosistema: revenue share (AppExchange toma el 25%), freemium para developers, certified partner programs. Cuál tiene sentido para mi modelo de negocio.
3. El programa de partners: cómo estructuro los niveles, qué reciben en cada nivel (visibilidad, soporte técnico, co-marketing, MDF) y qué me entregan a cambio.
4. Los primeros 10 partners: cómo los identifico, cómo los recluto y cómo los convierto en casos de éxito que atraen a los siguientes.

**Parte 4 — Gobernanza del ecosistema**

El reto de la plataforma madura:
1. Las decisiones de plataforma que afectan a terceros: cuándo un cambio en el core producto beneficia a los usuarios pero daña a los partners. Cómo gestionar estos conflictos de forma que el ecosistema siga confiando en ti.
2. El riesgo del "kill zone": plataformas que copian las apps más exitosas de su ecosistema. Cómo evitar caer en este patrón y cómo construir confianza con los terceros de que no los van a competir.
3. La estandarización vs. la flexibilidad: cuánto fijar los estándares del ecosistema (para garantizar calidad y consistencia) y cuánto dejar libre a los terceros para innovar.
4. La gestión de la calidad del ecosistema: cómo asegurarse de que las apps o integraciones de terceros no dañan la experiencia del usuario final.

**Parte 5 — Métricas de plataforma**

Cómo saber si la estrategia funciona:
1. Las métricas que indican que el ecosistema está sano: número de integraciones activas, apps en el marketplace, desarrolladores registrados, revenue generado por el ecosistema. Para cada métrica, dame el benchmark de referencia.
2. Cómo medir los efectos de red: cómo sé que cada nuevo usuario hace el producto más valioso para los existentes. La evidencia cuantitativa de que los network effects funcionan.
3. El momento en que la plataforma supera al producto: cuándo el ecosistema contribuye más al crecimiento que el equipo interno. Cómo prepararse para ese momento.

Aplica todo esto a mi caso específico y dame el roadmap de plataforma para los próximos 18 meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 80,
                'use_case'          => 'Diseñar la estrategia de plataforma y ecosistema para escalar un producto con efectos de red',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'HR tech stack: HRIS, ATS, LMS y la vista unificada del empleado',
                'description'       => 'El ecosistema de herramientas de RRHH moderno: HRIS, ATS, LMS, plataformas de engagement y las integraciones que crean una vista unificada del ciclo de vida del empleado.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Chief People Officer con experiencia implementando y optimizando stacks de tecnología de RRHH en empresas en crecimiento. Voy a darte mi contexto y quiero diseñar o auditar el HR tech stack de mi organización.

**Contexto de mi organización:**
- Número de empleados: [número]
- Fase de crecimiento: [startup / scale-up / empresa establecida]
- Geografías donde opero: [países]
- Stack actual de RRHH: [lista las herramientas que ya usas]
- Presupuesto de HR tech por empleado/año: [rango]
- Principal problema: [todo está en Excel / tenemos herramientas que no se hablan / los managers no tienen datos para gestionar / el onboarding es manual y lento / otro]

**Parte 1 — La arquitectura del HR tech stack**

El mapa antes de las herramientas:
1. Las capas del HR tech moderno: core HR (sistema de registro de empleados), talent acquisition (ATS), learning & development, performance management, employee engagement, compensation y analytics. Para cada capa, qué problema resuelve y en qué orden de madurez necesito cada una.
2. La decisión de HCM suite vs. best-of-breed: cuándo tiene sentido comprar una plataforma todo-en-uno (Workday, SAP SuccessFactors, Bamboo+) vs. combinar las mejores herramientas de cada categoría. El trade-off real entre integración y especialización.
3. El sistema de registro: qué herramienta es la fuente de verdad para los datos de empleados y cómo el resto del stack se conecta a ella. Por qué es crítico tenerlo claro antes de añadir cualquier otra herramienta.

**Parte 2 — HRIS: el sistema central**

La decisión más importante del stack:
1. La selección del HRIS para mi tamaño: BambooHR vs. Personio (Europa) vs. Rippling vs. HiBob vs. Factorial. Para mi geografía y número de empleados, cuál tiene más sentido y por qué. Dame criterios objetivos.
2. Los módulos mínimos del HRIS que necesito desde el día 1: org chart, gestión de ausencias, documentos de empleados, self-service del empleado. Qué puede esperar.
3. La calidad de datos en el HRIS: cómo diseñar los campos y las políticas de datos para que la información sea fiable. El HRIS con datos sucios es peor que no tener HRIS.
4. La integración del HRIS con nómina: los modelos de integración (HRIS que incluye nómina, HRIS + proveedor de nómina externo) y cuándo cada uno tiene sentido según mi geografía.

**Parte 3 — Talent acquisition: ATS**

El proceso de selección como sistema:
1. La selección del ATS: Greenhouse vs. Lever vs. Workable vs. Ashby vs. Teamtailor. Para mi volumen de contrataciones y tamaño de equipo, cuál da el mejor ROI.
2. El diseño del pipeline de selección en el ATS: etapas, criterios de scorecard, automizaciones que ahorran tiempo y cuáles generan una mala experiencia de candidato.
3. La integración ATS-LinkedIn y ATS-job boards: cómo centralizar los candidatos de todos los canales sin duplicación.
4. Las métricas de talent acquisition que el ATS debe darme: time-to-hire, cost-per-hire, source quality, offer acceptance rate, pipeline conversion por etapa.

**Parte 4 — LMS, performance y engagement**

La capa de desarrollo y retención:
1. Learning Management System: cuándo es necesario, cuándo es prematuro. Para mi tamaño, la diferencia entre un LMS (360Learning, Docebo, TalentLMS) y una plataforma de contenidos de formación (LinkedIn Learning, Coursera for Business).
2. Performance management: las herramientas de gestión del desempeño (Lattice, Leapsome, 15five, Betterworks) y cuándo cada formato funciona. OKRs vs. 360 reviews vs. continuous feedback vs. annual review.
3. Employee engagement y pulso: las encuestas de pulso (Culture Amp, Peakon, Glint) y la diferencia entre medir el engagement y actuar sobre él.
4. Compensation management: cuándo necesito una herramienta de compensation beyond una hoja de cálculo. Carta, Pave, Radford para benchmarks de mercado.

**Parte 5 — Analytics e integración**

La vista unificada que mejora las decisiones:
1. People analytics: qué preguntas de RRHH necesitan datos de múltiples sistemas para ser respondidas y cómo construir la infraestructura analítica sin ser una empresa gigante.
2. Las integraciones críticas del HR tech stack: HRIS ↔ ATS, HRIS ↔ nómina, HRIS ↔ IT (provisioning de cuentas), HRIS ↔ Finance (headcount planning). Cuáles son las más impactantes.
3. El people dashboard para managers: qué datos necesita un manager de personas para tomar mejores decisiones. Headcount, absentismo, performance distribution, engagement, flight risk.
4. La privacidad en el HR tech: GDPR y la gestión de datos de empleados. Qué debo verificar al contratar cualquier herramienta de HR tech que procesa datos de personas en Europa.

Termina con el roadmap de implementación para mi situación actual: qué compro primero, qué integro después y qué dejo para cuando tenga más madurez.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar el HR tech stack que crea una vista unificada del empleado y mejora las decisiones de personas',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Fintech infrastructure: core banking, payment rails y decisiones de build vs. buy',
                'description'       => 'La infraestructura que hace posibles los productos financieros modernos: core banking, payment rails, KYC/AML y las decisiones de build vs. buy que definen el futuro de un fintech.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CTO de fintech con experiencia construyendo infraestructura financiera desde cero y tomando las decisiones de arquitectura que determinan la escalabilidad y el cumplimiento regulatorio de un producto financiero.

**Contexto de mi proyecto fintech:**
- Tipo de producto: [neobank / lending / payments / wealth management / B2B fintech / embedded finance / otro]
- Geografía y jurisdicción: [país o región]
- Fase actual: [idea / MVP / lanzado / escalando]
- Licencia o regulación actual: [tenemos licencia propia / operamos como BaaS sobre licencia de tercero / estamos en proceso / otro]
- Principal decisión técnica que enfrento ahora: [describe el dilema concreto]

**Parte 1 — El mapa de la infraestructura fintech**

La arquitectura de un producto financiero moderno:
1. Las capas de infraestructura de un fintech: ledger/core banking, payment processing, card issuing, KYC/AML, lending engine, data layer. Para cada capa, qué opciones hay (build, buy BaaS, usar legacy bancario) y cuándo cada una tiene sentido.
2. El core banking system: qué es exactamente, qué hace y por qué es la decisión de infraestructura más difícil de cambiar una vez tomada. Las opciones modernas: Thought Machine (Vault), Mambu, Temenos, 10x Banking, Synapse (fallido), vs. construir un ledger propio.
3. El papel del sponsor bank o banking-as-a-service en los primeros años: por qué la mayoría de fintechs operan primero sobre la licencia de un banco (BaaS) antes de conseguir la propia. Las implicaciones técnicas, regulatorias y de negocio de este modelo.

**Parte 2 — Payment rails y procesamiento**

El fontanero del sistema financiero:
1. El mapa de los payment rails: SEPA (SCT, SDD, Inst) en Europa, ACH, RTP, FedNow en USA, SWIFT para internacional, UPI en India. Para mi caso de uso, cuáles son relevantes y qué diferencias operativas tienen.
2. Los procesadores de pagos: Stripe, Adyen, Checkout.com, Worldpay, Braintree. Para mi tipo de producto (B2C / B2B / marketplace / fintech), cuál da mejor combinación de precio, fiabilidad y cobertura geográfica.
3. El card issuing: construir o comprar. Marqeta, Stripe Issuing, Galileo, Moov. Cuándo cada uno y qué implica en términos de integración, compliance y economics.
4. Las transacciones en tiempo real: por qué el "real-time" en finanzas es más complejo de lo que parece y las implicaciones de arquitectura de los sistemas de liquidación instantánea.

**Parte 3 — KYC, AML y fraude**

El compliance como infraestructura:
1. El proceso de KYC (Know Your Customer): la diferencia entre el KYC básico (verificación de identidad) y el KYC enhanced (due diligence reforzada). Las soluciones: Onfido, Jumio, Persona, Sumsub. Cuál funciona mejor para mi geografía y tipo de cliente.
2. El AML (Anti-Money Laundering): las obligaciones regulatorias, las herramientas de transaction monitoring (ComplyAdvantage, Featurespace, Unit21) y cuándo tienen sentido vs. cuándo es suficiente con las herramientas de tu BaaS.
3. La gestión del fraude: los tipos de fraude más comunes en productos financieros (synthetic identity fraud, account takeover, chargeback fraud) y las herramientas de detección. Seon, Sardine, Stripe Radar, Forter según el caso de uso.
4. El diseño del flujo de onboarding que convierte sin comprometer el compliance: los friction points y cómo reducirlos sin bajar los estándares regulatorios.

**Parte 4 — Decisiones de arquitectura técnica**

Las decisiones que se pagan durante años:
1. El ledger y la contabilidad: por qué el ledger es el corazón de cualquier fintech y por qué construirlo mal es el error más costoso. Los principios de contabilidad de doble entrada aplicados a software: immutability, auditability, reconciliation.
2. La gestión de la consistencia eventual en sistemas financieros: cuándo los bancos no pueden permitirse eventual consistency (balances) y cuándo sí (analytics, reporting). Cómo diseñar los límites.
3. La resilencia y el disaster recovery: qué RPO y RTO son aceptables en un sistema financiero y cómo diseñar la arquitectura para garantizarlos.
4. La seguridad como arquitectura, no como checklist: HSMs para gestión de claves, tokenización de datos de tarjetas (PCI DSS), encryption in transit y at rest. El estándar mínimo que espera el regulador.

**Parte 5 — Build vs. buy: el framework de decisión**

La decisión más repetida en fintech:
1. El marco de decisión build vs. buy vs. BaaS para cada capa de infraestructura. Los criterios: diferenciación de negocio, coste total (incluyendo mantenimiento), time-to-market, riesgo regulatorio.
2. Los costes ocultos del build: el equipo que necesitas para mantenerlo, el compliance que recae sobre ti en lugar del vendor, y la velocidad de iteración que pierdes.
3. Los riesgos del BaaS puro: la dependencia de un proveedor, los márgenes que se comprimen y el techo de crecimiento que puede imponerte el modelo.
4. El roadmap de migración: cómo planificar la transición de BaaS a infraestructura propia cuando el crecimiento lo justifica. Los fintechs que han hecho esta migración y qué aprendieron.

Aplica este análisis a mi caso específico y dame las recomendaciones concretas de arquitectura para mi fase actual.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 85,
                'use_case'          => 'Diseñar la arquitectura de infraestructura de un fintech con las decisiones de build vs. buy correctas',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal tech stack: CLM, e-signature, entity management y la selección que escala',
                'description'       => 'Las herramientas que transforman el departamento legal: contract lifecycle management, firma electrónica, gestión de entidades y la selección que se adapta a tu tamaño y tipo de práctica.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un General Counsel o Director Legal con experiencia implementando y optimizando el stack tecnológico de departamentos legales en empresas de diferentes tamaños. Quiero modernizar la tecnología legal de mi organización.

**Contexto de mi departamento legal:**
- Tipo: [in-house legal / despacho de abogados / departamento legal de startup / otro]
- Tamaño del equipo legal: [número de abogados y paralegales]
- Tipo de trabajo predominante: [contratos comerciales / M&A / laboral / regulatorio / litigación / propiedad intelectual / combinación]
- Volumen mensual de contratos: [número aproximado]
- Stack actual: [lista las herramientas que ya usas]
- Principal problema: [los contratos están en emails y carpetas / no tenemos visibilidad de los plazos / el proceso de negociación es lento / otro]

**Parte 1 — La arquitectura del legal tech stack**

El mapa antes de las herramientas:
1. Las capas del legal tech stack moderno: contract lifecycle management (CLM), entity management, matter management, e-billing, IP management, e-signature, legal research. Para cada capa, qué problema resuelve y cuándo es necesaria vs. prematura.
2. El error más frecuente en legal tech: comprar un CLM caro sin tener los procesos de contratos mapeados. Por qué la tecnología amplifica los procesos buenos y también los malos.
3. La diferencia entre el stack de un despacho y el de un in-house legal: las necesidades son fundamentalmente diferentes. Para mi tipo de departamento, cuáles son las prioridades.

**Parte 2 — Contract Lifecycle Management (CLM)**

El corazón del stack legal:
1. La selección del CLM para mi tamaño y tipo de trabajo: Ironclad vs. Juro vs. ContractPodAi vs. Conga vs. DocuSign CLM vs. Contractable. Para mi caso de uso específico, cuál tiene más sentido y por qué.
2. Las fases del lifecycle de contrato que debo automatizar primero: request management, drafting (con playbooks y templates), negociación (redlining collaboration), aprobaciones (workflow), ejecución (e-signature), almacenamiento y obligaciones post-firma.
3. Los playbooks de contrato: cómo construir un playbook que permita a los business teams negociar contratos estándar sin involucrar al legal en cada negociación menor.
4. El repositorio de contratos y la búsqueda: cómo migrar los contratos históricos al CLM y qué metadata mínima necesito extraer para que el repositorio sea útil.
5. Las obligaciones y alertas: cómo gestionar los vencimientos, las renovaciones automáticas y las obligaciones post-firma sin que nada caiga en el olvido.

**Parte 3 — E-signature y automatización documental**

Las quick wins del legal tech:
1. La selección de la herramienta de firma electrónica: DocuSign vs. HelloSign/Dropbox Sign vs. Adobe Sign vs. Signaturit (con validez en España). Para mi tipo de contratos y jurisdicción, cuál tiene la validez legal necesaria.
2. Los tipos de firma electrónica en la regulación europea: firma electrónica simple, avanzada y cualificada (eIDAS). Cuándo necesito cada nivel y qué herramienta lo ofrece.
3. La automatización de documentos legales: Juro, HotDocs, Gavel, ClauseBase. Cuándo tiene sentido automatizar la generación de contratos y cuándo es sobreingeniería.
4. La integración e-signature con el CLM y con el CRM de ventas: el flujo ideal donde el contrato sale del CLM, se firma y el CRM actualiza automáticamente el deal como cerrado.

**Parte 4 — Entity management e IP**

La gestión de la complejidad corporativa:
1. Entity management para grupos corporativos: Diligent Entities, CT Corporation, Capterra. Cuándo tiene sentido una herramienta dedicada vs. gestionar entidades en el CLM o en una hoja de cálculo.
2. La gestión de propiedad intelectual: CPA Global, Dennemeyer, Anaqua. Cuándo el volumen de marcas o patentes justifica una herramienta dedicada.
3. Legal holds y e-discovery: qué implica gestionar una litigation hold de documentos y cuándo necesito una herramienta dedicada (Logikcull, Everlaw, Relativity).

**Parte 5 — Legal analytics e IA en el departamento legal**

La frontera de la innovación en legal tech:
1. Las herramientas de IA para revisión de contratos: Luminance, Kira (ahora ThoughtTrace/Donnelley Financial), LegalSifter, Harvey. Cuáles están probadas en uso real y cuáles son hype.
2. Legal billing y matter management: para despachos o in-house con muchos asuntos externos, Clio, Aderant, 3E, TeamConnect. Cuándo la complejidad lo justifica.
3. El dashboard de métricas del legal: cómo medir la eficiencia del departamento legal. Cycle time de contratos, coste por contrato, % de contratos self-service, savings vs. externo. Cómo construirlo con las herramientas que ya tengo.
4. El roadmap de implementación: qué compro primero, qué integro después y el orden que minimiza la disrupción del equipo legal.

Dame también el stack específico que recomendarías para mi situación, con el coste estimado y el ROI esperado de cada herramienta.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar el stack tecnológico del departamento legal con foco en contratos y eficiencia',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer success platform: stack de CS con health scoring e integración total',
                'description'       => 'Diseña el stack de Customer Success: plataforma de CS, health scoring, automatización, BI y las integraciones con CRM y producto que dan al CSM una visión completa del cliente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Customer Success con experiencia implementando y optimizando el stack tecnológico de equipos de CS en empresas SaaS de diferentes tamaños. Quiero diseñar el stack de Customer Success que permita a mi equipo gestionar clientes de forma escalable y proactiva.

**Contexto de mi equipo de CS:**
- Tamaño del equipo de CS: [número de CSMs y otros roles]
- Número de cuentas gestionadas por CSM: [rango]
- ARR promedio por cuenta: [rango]
- Modelo de CS: [high-touch / mid-touch / low-touch / digital / combinación]
- Stack actual: [lista las herramientas que ya usas]
- Principal problema: [no tenemos visibilidad del health de los clientes / los CSMs no tienen tiempo suficiente / el churn nos sorprende / no tenemos datos de uso del producto / otro]

**Parte 1 — La arquitectura del CS tech stack**

El mapa antes de las herramientas:
1. Las capas del CS tech stack: Customer Success Platform (CSP), product analytics (datos de uso), health scoring, automation (playbooks digitales), communication (email, in-app), QBR y reporting. Para cada capa, qué problema resuelve y en qué orden de madurez necesito cada una.
2. El error más frecuente en CS tech: implementar una CSP sin tener datos de uso del producto limpios y conectados. Por qué el health score sin datos de producto es inútil.
3. Make vs. buy en CS tech: cuándo tiene sentido una CSP dedicada (Gainsight, ChurnZero, Totango, Planhat) vs. construir sobre el CRM (Salesforce + módulos / HubSpot Service Hub) + integraciones propias.

**Parte 2 — Customer Success Platform (CSP)**

La decisión central del stack:
1. La selección de la CSP: Gainsight vs. ChurnZero vs. Totango vs. Planhat vs. ClientSuccess vs. Vitally. Para mi tamaño de equipo y ARR promedio, cuál tiene el mejor ROI y por qué. Los criterios más allá de las features del pitch.
2. Los módulos de una CSP que generan más valor en los primeros 6 meses: health scoring, playbooks automatizados, timeline de cliente (todas las interacciones en un solo lugar), alertas de riesgo. Qué configurar primero y qué puede esperar.
3. El onboarding en la CSP: por qué implementar una CSP bien tarda entre 3 y 6 meses y qué hace que los proyectos fallen. Las decisiones que debo tomar antes de empezar la implementación.
4. La adopción del equipo de CS: los CSMs no quieren una herramienta más. Cómo diseñar la implementación para que la CSP reduzca su carga de trabajo desde el día 1, no la aumente.

**Parte 3 — Health scoring**

El modelo que predice el churn:
1. Cómo diseñar un health score que realmente predice la renovación vs. el churn. Los componentes del health score: product adoption, support tickets, NPS/CSAT, engagement con CS, expansión/contracción. Para cada uno, cómo lo mido y qué peso le doy.
2. Los datos de producto como base del health score: qué métricas de uso del producto son predictivas de churn en mi tipo de SaaS. Cómo conecto los datos de producto (amplitude, mixpanel, segment, o tu propia BI) con la CSP.
3. Los modelos de health scoring a evitar: el health score cosmético que da 90 a todos y no predice nada. Los síntomas de un mal modelo y cómo diagnosticarlo.
4. El health score en tiempo real vs. el recalculado periódicamente: cuándo la latencia importa y cuándo es suficiente con un cálculo semanal.

**Parte 4 — Playbooks y automatización**

Escalar sin contratar:
1. Los playbooks de CS que debo construir primero: onboarding playbook (los primeros 90 días del cliente), risk playbook (respuesta a señales de churn), expansion playbook (identificación y activación de oportunidades de upsell), renewal playbook.
2. La automatización de bajo touch: qué comunicaciones puedo automatizar sin perder la personalización que retiene a los clientes. Correos de activación, nudges de feature adoption, alertas de bajo uso.
3. Las herramientas de comunicación in-app integradas con el CS: Intercom, Pendo, Appcues para guiar al usuario dentro del producto y reducir la carga del CSM en preguntas repetitivas.
4. El balance entre automatización y toque humano: cuándo la automatización daña la relación y cuándo el toque humano es insostenible a escala.

**Parte 5 — Métricas, reporting e integración con el negocio**

El CS stack como fuente de verdad:
1. Las métricas de CS que el CEO y el board necesitan: NRR (Net Revenue Retention), GRR, Churn Rate, Expansion Rate, NPS, time-to-value. Cómo construir el dashboard ejecutivo que comunique el valor del CS.
2. La integración CSP-CRM: cómo el estado del cliente en la CSP se refleja en el CRM para que ventas y CS tengan la misma visión. Las fricciones más comunes y cómo resolverlas.
3. La integración CSP-Finance: cómo el forecast de renewals en la CSP alimenta el forecast financiero. La precisión que espera el CFO vs. la realidad de lo que puede predecir el CS.
4. El QBR automatizado: cómo usar la CSP para generar el Business Review con datos reales del cliente en lugar de preparar slides manualmente. Las herramientas que ayudan (Slides AI, Looker embeds, Gainsight C360).

Dame el stack específico recomendado para mi situación y el plan de implementación a 6 meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 60,
                'use_case'          => 'Diseñar el stack de Customer Success con health scoring e integración con producto y CRM',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Tech stack para freelancers: productividad, facturación y profesionalidad',
                'description'       => 'Las herramientas que hacen al freelance más productivo y profesional: gestión de proyectos, facturación, comunicación y los stacks que usan los freelancers que más facturan.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un freelance senior con 8 años de experiencia y un sistema de trabajo optimizado que le permite gestionar múltiples clientes simultáneamente con alta calidad y sin burnout. Quiero optimizar mi stack de herramientas para ser más productivo y profesional.

**Mi contexto como freelance:**
- Especialidad: [diseño / desarrollo / copywriting / consultoría / marketing / legal / otro]
- Número de clientes simultáneos que gestiono: [número]
- Facturación mensual media: [rango]
- Principal problema con mi sistema actual: [pierdo tiempo en administración / la comunicación con clientes es caótica / no tengo visibilidad del tiempo que dedico / la facturación y el cobro son dolorosos / otro]
- Herramientas que ya uso: [lista]
- Presupuesto para herramientas al mes: [rango]

**Parte 1 — El stack mínimo de un freelance productivo**

Las herramientas que no pueden faltar:
1. Por qué la mayoría de freelancers tienen demasiadas herramientas y son menos productivos que los que tienen pocas pero bien integradas. El principio de mínimo stack efectivo.
2. Las 5 categorías de herramientas que todo freelance necesita: gestión de proyectos/tareas, comunicación con clientes, documentos y propuestas, facturación y cobro, y gestión del tiempo. Para cada una, cuál es la opción mínima viable y cuándo vale la pena subir de nivel.
3. La integración entre herramientas: por qué el stack fragmentado (todo desconectado) mata la productividad. Las combinaciones que fluyen bien y las que generan trabajo manual de sincronización.

**Parte 2 — Gestión de proyectos y clientes**

El sistema de trabajo que escala:
1. Las opciones de gestión de proyectos para freelancers: Notion vs. ClickUp vs. Linear vs. Basecamp vs. Trello vs. Asana. Para mi tipo de trabajo y número de clientes, cuál tiene el mejor balance entre potencia y simplicidad.
2. El CRM para freelancers: cuándo es necesario y cuándo es sobreingeniería. Para gestionar el pipeline de oportunidades, los seguimientos de propuesta y el historial de cada cliente. Folk, HubSpot Free, Notion CRM, Pipedrive.
3. El portal de cliente: herramientas como Copilot, Clientjoy o módulos de cliente en Notion/ClickUp que dan al cliente visibilidad del proyecto sin necesidad de emails constantes.
4. La gestión del tiempo: Toggl vs. Harvest vs. Clockify vs. Timing (Mac). Para un freelance, el tracking del tiempo no es solo para facturar: es para entender la rentabilidad real de cada cliente.

**Parte 3 — Propuestas, contratos y onboarding de clientes**

La primera impresión que retiene:
1. Las herramientas de propuestas que convierten: Proposify vs. Qwilr vs. PandaDoc vs. Better Proposals. La diferencia entre una propuesta en PDF y una propuesta interactiva en términos de tasa de cierre.
2. Los contratos para freelancers: cuándo usar una plantilla propia con firma electrónica (HelloSign/Signaturit) y cuándo invertir en un contrato personalizado con abogado. Los elementos que no pueden faltar en cualquier contrato freelance.
3. El onboarding de clientes: la secuencia de acciones que da al cliente confianza desde el primer día y reduce las fricciones durante el proyecto. Los documentos, accesos y reuniones de inicio que distinguen al freelance profesional.

**Parte 4 — Facturación, cobro y finanzas**

La parte que más odian los freelancers:
1. Las herramientas de facturación para freelancers en España: Holded vs. Quipu vs. Billage vs. Factura Directa vs. FreshBooks. Para mi volumen de facturas y necesidades fiscales, cuál es más adecuado.
2. Cómo automatizar el cobro: facturas recurrentes, pagos por adelantado, recordatorios automáticos de pago vencido. La combinación de herramientas que reduce al mínimo el tiempo dedicado a cobrar.
3. La gestión financiera del freelance: cómo tener claridad sobre ingresos, gastos, impuestos y rentabilidad sin ser contable. Las herramientas que hacen este trabajo sin que me cueste horas al mes.
4. El modelo de precios como sistema: cuándo cobrar por hora, por proyecto o por retención. Para mi especialidad, qué modelo maximiza los ingresos y minimiza la inestabilidad.

**Parte 5 — Automatización y productividad**

Hacer más sin trabajar más horas:
1. Las automatizaciones de Make/Zapier/n8n que más tiempo ahorran a un freelance: onboarding de nuevo cliente automatizado, seguimiento automático de propuestas, recordatorios de entregables, generación de informes de tiempo.
2. Las herramientas de IA que ya forman parte del stack de los freelancers más productivos: cuáles para cada especialidad, cuánto tiempo realmente ahorran y cuándo la IA produce trabajo que aún necesitas revisar.
3. El sistema de templates: cómo construir una librería de plantillas de documentos, emails y comunicaciones que reduzcan el tiempo de trabajo repetitivo sin que el cliente sienta que recibe algo genérico.
4. La separación trabajo/descanso como sistema: las herramientas y hábitos que evitan el burnout cuando el despacho está en casa y el cliente siempre puede localizarte.

Termina con el stack específico que recomendarías para mi especialidad y mi situación actual, con coste mensual estimado y el ROI en tiempo ahorrado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Optimizar el stack de herramientas de un freelance para ser más productivo y profesional',
                'vote_score'        => 42,
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
