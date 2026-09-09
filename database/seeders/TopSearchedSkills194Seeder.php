<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills194Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Co-marketing y partnerships de marca',
                'description'      => 'Colabora con otras marcas para amplificar el alcance: el co-branding, los webinars conjuntos y las campañas que generan el doble de impacto con la mitad de presupuesto porque cada marca lleva a su audiencia.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en marketing partnerships y co-branding con experiencia en marcas B2B y B2C. Necesito diseñar una estrategia de co-marketing que me permita llegar a nuevas audiencias y amplificar el impacto de mis campañas sin multiplicar el presupuesto.

**Mi empresa:**
[DESCRIBE TU EMPRESA: producto o servicio, audiencia objetivo, posicionamiento de marca, presupuesto de marketing aproximado, canales donde tienes mayor presencia]

**Objetivo del partnership:**
[QUÉ QUIERES CONSEGUIR: acceso a una nueva audiencia, credibilidad por asociación, contenido conjunto, leads compartidos, alcance geográfico nuevo, etc.]

---

Ayúdame a diseñar la estrategia completa de co-marketing:

**1. Identificación y selección de partners**

Con quién tiene sentido colaborar:
- Los criterios de selección: audiencia complementaria pero no competidora, valores y posicionamiento compatibles, tamaño y capacidad de ejecución similares, y objetivos alineados para la colaboración
- Cómo identificar candidatos potenciales: análisis de los partners de tus clientes actuales, marcas que aparecen en el mismo contenido que consumes tu audiencia, herramientas como SparkToro para entender la superposición de audiencias
- La matriz de evaluación: cómo puntuar y priorizar los candidatos para no perder tiempo en conversaciones que no van a ningún lado
- Los red flags en un potencial partner: marcas en declive, culturas muy diferentes o desequilibrios grandes de tamaño que generan relaciones asimétricas

**2. El diseño de la propuesta de valor conjunta**

Qué ofreces y qué pides:
- Cómo definir el intercambio de valor de forma que sea equitativo: si las audiencias son de tamaños diferentes, cómo compensar con otros activos — contenido, visibilidad, datos, acceso a clientes
- El brief conjunto: el documento que describe el proyecto, los objetivos compartidos, las métricas de éxito y las responsabilidades de cada parte
- Cómo presentar la propuesta al partner potencial: el deck de una página que convierte a un desconocido en colaborador

**3. Los formatos de co-marketing más efectivos**

Las tácticas que funcionan y cuándo:
- **Webinars y eventos conjuntos**: cómo dividir el trabajo, atraer audiencia de ambas partes y convertir asistentes en leads
- **Contenido co-creado**: ebooks, reports de sector, estudios conjuntos — el formato que más genera leads de calidad y el que más cuesta producir
- **Newsletters cruzadas**: el intercambio de menciones en newsletters, los sponsorships en el newsletter del partner y las colaboraciones en contenido editorial
- **Campañas de social media**: las colaboraciones que funcionan en LinkedIn, los live conjuntos y los takeovers que llevan la audiencia de un canal al otro
- **Bundles y ofertas conjuntas**: cuando tiene sentido empaquetar dos productos y cómo estructurar el descuento sin sacrificar márgenes

**4. Ejecución y gestión del proyecto**

Cómo hacer que la colaboración funcione en la práctica:
- El kickoff del partnership: la reunión de alineación, el brief compartido y el calendario de hitos
- Gestión de los equipos de ambas marcas: cómo coordinar cuando tienes interlocutores con diferentes prioridades y diferentes jefes
- Los cuellos de botella más comunes: los retrasos en aprobaciones, las diferencias en el estilo de comunicación y los desacuerdos sobre el mensaje
- Cómo mantener el momentum cuando la colaboración se ralentiza

**5. Distribución y amplificación**

Sacar el máximo partido al contenido conjunto:
- La estrategia de lanzamiento: cómo coordinar la comunicación en los canales de ambas marcas para maximizar el alcance el día del lanzamiento
- El plan de distribución post-lanzamiento: cómo extender la vida útil del contenido más allá del primer día
- Cómo reutilizar el contenido conjunto en múltiples formatos — clips para social, quotes para email, datos para infografías

**6. Medición y seguimiento**

Saber si el partnership ha funcionado:
- Las métricas compartidas: cómo acordar qué medir antes de empezar para que ambas partes evalúen el éxito con los mismos datos
- Atribución en campañas conjuntas: cómo saber qué leads vienen del esfuerzo del partner y cuáles de tu propio canal
- El review post-campaña: la conversación que decide si el partnership se repite, se amplía o se termina

**7. Construir un programa de partnerships escalable**

Pasar de la colaboración puntual al canal sistemático:
- Cómo documentar los aprendizajes de cada partnership para mejorar los siguientes
- El programa de partner marketing: cuando tienes suficiente volumen para formalizar las colaboraciones en un programa con criterios, procesos y beneficios estandarizados
- Las herramientas para gestionar múltiples partnerships simultáneamente

Termina con el pitch de co-marketing para el primer partner que identificamos juntos: el email de outreach, el deck de propuesta y los términos del acuerdo inicial.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar y ejecutar una estrategia de co-marketing con otras marcas para ampliar el alcance y generar leads con un presupuesto compartido.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Developer ecosystems y API partnerships',
                'description'      => 'Construye el ecosistema de partners técnicos alrededor de tu plataforma: el programa de partners para developers, los integration marketplaces y la estrategia que convierte a tus integraciones en un moat.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en developer relations, platform strategy y ecosystem building con experiencia en empresas que construyen plataformas técnicas. Necesito diseñar la estrategia para construir un ecosistema de partners developers alrededor de mi producto.

**Mi plataforma:**
[DESCRIBE TU PRODUCTO: qué hace, quiénes son los developers que lo usan, qué tipo de API o extensibilidad tiene actualmente, casos de uso de integración más comunes, tamaño del equipo de DevRel si existe]

**Objetivo del ecosistema:**
[QUÉ QUIERES CONSEGUIR: más integraciones, mayor stickiness, nuevos segmentos de mercado a través de partners, distribución a través del ecosistema, o construir un marketplace]

---

Diseña la estrategia completa de developer ecosystem para mi caso:

**1. La estrategia de plataforma**

Antes de construir el ecosistema, clarificar la visión:
- Por qué un ecosistema: el argumento estratégico de por qué las integraciones de terceros crean un moat competitivo mejor que las integraciones propietarias
- El modelo de plataforma: los diferentes modelos — API pura, marketplace de integraciones, plugin system, embedded marketplace — y cuál encaja con mi producto
- Los trade-offs: qué control pierdes cuando abres la plataforma y cómo gestionar la tensión entre apertura e integridad del producto
- Los ejemplos de referencia: qué puedes aprender de Slack, Shopify, Stripe y Salesforce en cómo construyeron sus ecosistemas

**2. La API como producto**

La base técnica del ecosistema:
- Diseño de API developer-first: qué hace que una API sea un placer de usar — consistencia, documentación, predictibilidad, error handling
- Versionado y backwards compatibility: las políticas que mantienen la confianza de los developers que construyen encima de tu plataforma
- Rate limiting, quotas y los planes de API que equilibran la apertura con la sostenibilidad
- Webhooks y event-driven architecture: cómo dar a los partners la capacidad de reaccionar a lo que pasa en tu plataforma en tiempo real

**3. La developer experience**

El producto que convierte a un developer curioso en un partner activo:
- Developer portal: los componentes que no pueden faltar — quickstart, API reference, SDKs, sandbox, changelog, status page
- Onboarding del developer: el tiempo desde que un developer llega a tu portal hasta que tiene su primera integración funcionando
- Documentación como producto: cómo construir una documentación que los developers amen, no toleren
- Developer support: los canales (Slack, Discord, foros, GitHub) y cómo escalarlos sin que consuman todo el tiempo del equipo

**4. El programa de partners técnicos**

La estructura que convierte integraciones en relaciones:
- Los tiers del programa: los criterios de certificación, los beneficios de cada tier y los incentivos que mueven a los partners a invertir en la integración
- El proceso de certificación: cómo asegurar la calidad de las integraciones sin crear una burocracia que ahuyente a los buenos developers
- Co-selling con partners técnicos: cómo los partners llevan clientes a tu plataforma y cómo tú llevas clientes a los suyos
- Revenue sharing y modelos de comisión: cuándo tiene sentido compartir revenue con los partners y cómo estructurarlo

**5. El integration marketplace**

La vitrina del ecosistema:
- Qué hace un marketplace exitoso: listing, discovery, ratings, categorización y cómo Salesforce AppExchange o Shopify App Store lo hacen bien
- El proceso de review y listing: los criterios de calidad, los tiempos de revisión y cómo evitar que el marketplace se llene de integraciones de baja calidad
- Cómo promover las integraciones de mayor calidad: las featured sections, los partnerships destacados y la curaduría que diferencia tu marketplace de un directorio sin filtro
- Monetización del marketplace: si y cómo cobrar por el listing, por las transacciones o por las integraciones premium

**6. Crecimiento del ecosistema**

Cómo conseguir que más developers construyan sobre tu plataforma:
- Developer acquisition: hackathons, grants, incubadoras, content marketing técnico y las comunidades donde viven tus developers potenciales
- Partner development: cómo convertir a los integradores más activos en partners certificados con incentivos para invertir más
- ISV strategy: cómo atraer y desarrollar a los Independent Software Vendors que podrían construir soluciones completas sobre tu plataforma

**7. Métricas del ecosistema**

Cómo saber si el ecosistema está creciendo y generando valor:
- Integrations developed, active integrations y integration quality scores
- Ecosystem-sourced revenue: cuánto pipeline y cuántos clientes nuevos vienen a través del canal de partners técnicos
- Developer NPS y el tiempo para la primera integración exitosa — los indicadores de la calidad de la developer experience

Termina con el roadmap de 12 meses para construir el ecosistema desde donde estamos hoy: qué construir en los primeros 90 días, qué partners priorizar y qué métricas rastrear para saber si vamos por el camino correcto.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar la estrategia para construir un ecosistema de partners developers alrededor de una plataforma técnica, desde la API hasta el marketplace de integraciones.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design partnerships y colaboraciones creativas',
                'description'      => 'El diseñador que colabora con otras disciplinas: las metodologías de co-creación con ingenieros, product managers y clientes que producen mejores resultados que el diseño en solitario.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en diseño colaborativo y en las metodologías de co-creación que producen mejores resultados cuando el diseño trabaja en estrecha colaboración con otras disciplinas. Necesito mejorar la forma en que el equipo de diseño colabora con ingeniería, producto y negocio para producir mejores resultados juntos.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: si eres diseñador individual, líder de diseño o design manager, cómo está organizado el equipo, cuáles son las fricciones más habituales en la colaboración con otras disciplinas, qué metodologías ya usas]

---

Ayúdame a construir la cultura y los procesos de colaboración creativa en diseño:

**1. La colaboración diseño-ingeniería**

La relación que más afecta a la calidad del producto:
- Cómo implicar a los ingenieros en el proceso de diseño desde el principio, no solo en el handoff — los design reviews donde los ingenieros dan feedback de factibilidad antes de que el diseño esté finalizado
- Design systems como lenguaje compartido: cómo el design system reduce la fricción del handoff y crea un vocabulario común entre diseño e ingeniería
- Pairing: las sesiones de trabajo conjunto donde un diseñador y un ingeniero resuelven un problema juntos en tiempo real — cuándo tiene sentido y cómo organizarlas
- Cómo gestionar la tensión entre el diseño ideal y las restricciones técnicas sin que siempre gane una u otra parte

**2. La colaboración diseño-producto**

Cuándo el diseñador es un socio estratégico y no solo un ejecutor:
- Cómo participar en el discovery de producto: las técnicas de investigación que el diseñador puede liderar para informar las decisiones de roadmap
- Design critiques abiertas: cómo invitar a los PMs a los critiques de diseño y usar su perspectiva de negocio para mejorar las soluciones
- El brief de diseño co-creado: el proceso por el que PM y diseñador definen juntos el problema antes de que el diseñador empiece a resolver
- Cómo influir en las decisiones de producto con argumentos de diseño que hablan el lenguaje del negocio — impacto en conversión, en retención, en NPS

**3. Co-creación con usuarios y clientes**

Diseñar con, no para:
- Participatory design workshops: cómo estructurar una sesión donde los usuarios son co-creadores activos, no solo informantes pasivos
- Co-diseño con clientes B2B: las dinámicas especiales cuando el cliente es una empresa con múltiples stakeholders, cada uno con sus propias prioridades
- Prototype testing como conversación: cómo usar los prototipos no solo para validar sino para generar nuevas ideas con los usuarios durante la sesión
- Cómo gestionar el feedback de co-creación que es contradictorio o que va en contra de tu visión de diseño

**4. Design sprints y metodologías de trabajo conjunto**

El proceso estructurado que hace colaborar a disciplinas diferentes:
- El Design Sprint de Google: cuándo funciona y cuándo es overkill — las condiciones que hacen que un sprint de 5 días valga la pena
- Adaptaciones del sprint para equipos más pequeños: el mini-sprint de 2 días, el sprint asíncrono para equipos distribuidos
- Facilitation: las técnicas que hacen que una sesión creativa conjunta sea productiva y no una reunión donde hablan siempre los mismos — dot voting, crazy 8s, How Might We, affinity mapping
- Cómo preparar y facilitar un taller de co-creación con stakeholders que nunca han participado en uno

**5. Colaboraciones externas y partnerships creativos**

Cuándo traer perspectiva de fuera:
- Agencias y freelancers: cómo gestionar la colaboración con equipos de diseño externos — el brief, los rituales de alineación y cómo integrar su trabajo con el del equipo interno
- Cross-company design partnerships: las colaboraciones de diseño entre empresas no competidoras que producen aprendizajes que no puedes obtener mirando solo hacia dentro
- Open design: cuándo tiene sentido hacer el proceso de diseño más transparente — los design in public moments que generan feedback externo valioso

**6. Herramientas para la colaboración en diseño**

La infraestructura que habilita el trabajo conjunto:
- Figma como espacio de colaboración: las prácticas que hacen que Figma sea un espacio de trabajo conjunto y no solo un archivo de entrega — los component libraries compartidos, los comments estructurados, los branches para exploración
- FigJam, Miro, Mural: cuándo usar las herramientas de whiteboarding y cómo estructurar las sesiones para que la pizarra digital se convierta en decisiones concretas
- Documentación de decisiones de diseño: cómo registrar el por qué de las decisiones de diseño para que el equipo no tenga que reconstruirlo seis meses después

**7. Construir una cultura de diseño colaborativo**

El trabajo cultural que lo hace posible:
- Cómo hacer que el diseño sea más visible en la organización — las demos regulares, los design reviews abiertos y los canales donde el diseño comparte su trabajo en proceso
- Evangelizar el valor del diseño colaborativo: los argumentos para convencer a los ingenieros y PMs de que su participación en el proceso de diseño mejora el resultado final
- Cómo medir la calidad de la colaboración y mejorarla con el tiempo

Termina con el plan para mejorar la colaboración diseño-ingeniería en el próximo trimestre: los rituales concretos, los cambios de proceso y cómo medir si están funcionando.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Mejorar la colaboración del equipo de diseño con ingeniería, producto y clientes mediante metodologías de co-creación que producen mejores resultados.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Channel sales y gestión de partners comerciales',
                'description'      => 'Construye y gestiona una red de distribución: los VAR, los resellers y los agentes que llevan tu producto a mercados donde no tienes presencia directa.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en channel sales, gestión de redes de distribución y partner management con experiencia en empresas B2B que venden a través de canal indirecto. Necesito diseñar o mejorar la estrategia de ventas a través de partners para llegar a mercados donde no tengo presencia directa.

**Mi empresa y producto:**
[DESCRIBE TU SITUACIÓN: producto o servicio, precio medio, ciclo de venta, mercados objetivo, presencia directa actual, por qué quieres o necesitas un canal indirecto — cobertura geográfica, acceso a segmentos específicos, velocidad de escala]

---

Diseña la estrategia completa de channel sales para mi caso:

**1. La estrategia de canal**

Antes de reclutar partners, clarificar la estrategia:
- Qué tipo de canal necesito: el mapa de los modelos de distribución — VAR (Value Added Resellers), MSPs, agentes de comisión, distribuidores, integradores de sistema — y cuál encaja con mi producto y mis clientes
- Canal directo vs. indirecto: cuándo el canal directo sigue siendo necesario y cómo gestionar el conflicto de canal cuando los dos coexisten
- La propuesta de valor para el partner: por qué un reseller o un integrador debería priorizar mi producto sobre los de mis competidores — el margen, el soporte, la formación y las herramientas que les facilitas
- El partner ideal: el perfil de partner que mejor encaja con mi producto — tamaño, vertical, base de clientes, capacidades técnicas y de ventas

**2. Reclutamiento de partners**

Cómo construir la red:
- Dónde encontrar partners potenciales: las asociaciones sectoriales, los eventos de canal, las comunidades de resellers y las referencias de los clientes actuales
- El proceso de evaluación de partners: los criterios de selección, la due diligence mínima y cómo evitar firmar con partners que no van a generar negocio
- El pitch para el partner: cómo convencer a un reseller establecido de añadir tu producto a su portfolio — el deck de partner, la demo de la oportunidad de negocio
- El onboarding del partner: los primeros 90 días que determinan si el partner va a ser activo o va a quedarse inactivo

**3. Habilitación de ventas del canal**

Hacer que los partners vendan bien:
- Sales training para partners: el programa de formación que convierte a los comerciales del partner en vendedores efectivos de tu producto
- Sales tools: los materiales que el partner necesita para vender — presentaciones, demos, hojas de producto, battle cards, calculadoras de ROI — adaptados para el canal, no copias del material de ventas directas
- Certificaciones: los programas de certificación técnica y comercial que crean expertise y crean adhesión — el partner que certifica a su equipo está más comprometido
- Deal registration: el sistema que protege al partner que trabaja una oportunidad de que otro partner o el canal directo le quite el deal

**4. Gestión y motivación del canal**

Mantener al partner activo y motivado:
- El channel manager: el rol que gestiona la relación con los partners, sus responsabilidades y cómo mide su efectividad
- QBRs con partners: la revisión trimestral que alinea objetivos, revisa el pipeline y identifica los bloqueos que impiden al partner vender más
- SPIFs y programas de incentivos: cuándo tienen sentido los incentivos adicionales sobre el margen estándar y cómo diseñarlos para que muevan comportamientos sin crear dependencia
- Cómo gestionar al partner que no rinde: la conversación difícil sobre si el problema es de capacidad, de compromiso o de ajuste entre el partner y tu producto

**5. Operaciones del canal**

La infraestructura que escala:
- Partner portal: las herramientas que el partner necesita para operar — deal registration, orderamiento, recursos de marketing, tracking de comisiones
- PRM (Partner Relationship Management): cuándo un CRM genérico no es suficiente y qué herramientas especializadas considerar
- Operaciones de comisiones: cómo automatizar el cálculo y el pago de comisiones para que sea predecible y no genere disputas
- Reporting del canal: las métricas que el director de ventas necesita para entender la salud del canal — pipeline por partner, conversión, ARR generado, tiempo de ramp

**6. Marketing a través del canal**

Cómo usar el canal para llegar a más mercado:
- MDF (Market Development Funds): cuándo y cómo proporcionar fondos de marketing a los partners para campañas locales
- Co-marketing con partners: los programas de generación de demanda que el partner puede ejecutar con tu apoyo — eventos locales, webinars, campañas de email a su base de clientes
- Enablement de marketing: los templates y materiales que permiten al partner hacer marketing de tu producto sin necesitar un equipo de marketing propio

Termina con el plan de lanzamiento del programa de channel: el primer partner que reclutar, el proceso de onboarding semana a semana y las métricas de éxito a 6 meses.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar y gestionar un programa de channel sales con VARs, resellers y agentes que escala la distribución del producto sin escalar proporcionalmente el equipo de ventas directo.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Platform strategy y ecosystem plays',
                'description'      => 'Transforma tu producto en una plataforma que otros construyen encima: el API como producto, el marketplace de integraciones y la estrategia que multiplica el valor de tu producto sin multiplicar tu equipo.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en platform strategy y en la transformación de productos en plataformas. Necesito evaluar si mi producto tiene potencial para convertirse en una plataforma y, si es así, diseñar la estrategia para hacerlo.

**Mi producto:**
[DESCRIBE TU PRODUCTO: qué problema resuelve, quiénes son los usuarios, qué datos y flujos de trabajo pasan por tu producto, qué casos de uso adyacentes existen que actualmente no cubres, modelo de negocio actual]

---

Ayúdame a diseñar la estrategia de plataforma para mi caso:

**1. ¿Tiene mi producto potencial de plataforma?**

El diagnóstico honesto antes de comprometer recursos:
- Los indicadores de que un producto puede convertirse en plataforma: red effects potenciales, datos únicos, flujos de trabajo donde participan múltiples partes, casos de uso que los clientes ya están haciendo con workarounds
- Los anti-patrones: cuándo la plataformización es un movimiento equivocado — productos demasiado nicho, falta de volumen mínimo, o cuando el coste de construir y mantener la plataforma supera el valor que crea
- La pregunta clave: qué necesitan hacer tus clientes que no pueden hacer con tu producto hoy y que terceros podrían construir mejor que tú
- Los ejemplos de referencia relevantes para mi industria: qué plataformas han tenido éxito en sectores similares y por qué

**2. Los modelos de plataforma**

Las diferentes arquitecturas y sus implicaciones:
- **API platform**: abrir los datos y funcionalidades del producto a developers externos — la opción más técnica y con la curva de adopción más larga
- **Integration marketplace**: el catálogo de integraciones con otras herramientas del stack del cliente — el modelo Zapier o el modelo de app marketplace de Slack
- **Plugin o extension system**: dejar que terceros añadan funcionalidad dentro de tu interfaz — el modelo de Figma plugins o de VS Code extensions
- **Data platform**: convertir los datos que genera tu producto en el activo que otros consumen — el modelo de Snowflake Data Marketplace
- Cómo elegir el modelo correcto para mi caso y cuándo combinar más de uno

**3. El chicken-and-egg problem**

El reto fundamental de las plataformas:
- Por qué es tan difícil arrancar un ecosistema: necesitas developers para atraer usuarios y usuarios para atraer developers
- Las estrategias que las plataformas exitosas han usado para resolver el chicken-and-egg: seeding con integraciones propias, subsidios a los primeros developers, construir los primeros casos de uso internamente para demostrar el modelo
- Cómo identificar el segmento de developers o partners que tiene más incentivo para ser el primero en construir sobre tu plataforma
- El tamaño mínimo de ecosistema que necesitas para que la plataforma tenga valor para los clientes

**4. La gobernanza de la plataforma**

Cómo gestionar lo que otros construyen encima de ti:
- Los límites de la plataforma: qué pueden y qué no pueden hacer los terceros — los términos que protegen la integridad del producto y la confianza de los usuarios
- Cómo gestionar la competencia con tus propias apps o integraciones — el dilema de la plataforma cuando tú mismo compites con los developers de tu ecosistema
- Calidad y confianza: el proceso de revisión de las apps o integraciones del marketplace para que los usuarios confíen en lo que instalan
- La estrategia de acqui-hire: cuándo tiene sentido adquirir a los mejores builders del ecosistema

**5. Monetización de la plataforma**

Cómo ganar dinero con el ecosistema:
- Modelos de revenue de plataforma: comisión sobre transacciones del marketplace, planes de API por volumen, premium listing, revenue share con partners
- La tensión entre abrir la plataforma y monetizarla sin matar el ecosistema — las lecciones de los errores de Twitter, Apple y Google
- Cómo estructurar los incentivos para que los mejores builders del ecosistema se queden y crezcan

**6. Métricas de salud de la plataforma**

Cómo saber si el ecosystem está prosperando:
- Developer funnel: el número de developers que llegan a la documentación, crean una cuenta de developer, completan el quickstart y publican una integración
- Ecosystem health metrics: número de integraciones activas, volumen de llamadas a la API, revenue generado a través del canal de partners
- Stickiness generado por el ecosistema: si los clientes con más integraciones tienen mayor retención y mayor NRR — la prueba de que el ecosistema crea valor real

Termina con el plan de los primeros 6 meses para construir la v1 del ecosistema: qué construir técnicamente, cómo reclutar a los primeros 10 developers o partners y cómo medir el progreso.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Evaluar el potencial de plataforma de un producto y diseñar la estrategia para construir el ecosistema de partners e integraciones que multiplica el valor sin multiplicar el equipo.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'HR partnerships: proveedores, consultoras y tecnología',
                'description'      => 'Gestiona el ecosistema de partners de RRHH: la selección de proveedores de formación, las consultoras de gestión del cambio y los vendors de HR tech que complementan las capacidades del equipo interno.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión de proveedores y partners de RRHH con experiencia en empresas medianas y grandes. Necesito construir y gestionar un ecosistema de partners que complemente las capacidades internas del equipo de personas y maximice el retorno de la inversión en RRHH.

**Mi organización:**
[DESCRIBE TU SITUACIÓN: tamaño de la empresa, tamaño del equipo de RRHH, qué capacidades tienes internamente y qué necesitas externalizar, presupuesto aproximado de RRHH excluyendo nómina, principales retos de personas que afrontas]

---

Ayúdame a construir la estrategia de partnerships de RRHH:

**1. El mapa de proveedores de RRHH**

Entender el ecosistema antes de elegir:
- Las categorías de proveedores: formación y desarrollo, recruiting y headhunting, HR tech, consultoras de gestión del cambio, bienestar y beneficios, outplacement, coaching ejecutivo
- El análisis make vs. buy en RRHH: qué capacidades tiene sentido construir internamente y cuáles externalizar según el volumen, la especialización necesaria y el coste
- Las tendencias del mercado de HR tech: qué categorías están madurando, qué soluciones están convergiendo y qué áreas siguen fragmentadas y son difíciles de navegar
- Cómo mapear las necesidades de tu organización contra el ecosistema de proveedores disponible

**2. Selección de proveedores de formación y desarrollo**

El partner más estratégico para el desarrollo del talento:
- Los criterios de selección: relevancia del contenido para tus necesidades específicas, calidad del diseño instruccional, capacidad de personalización y los modelos de evaluación de aprendizaje
- Content providers vs. custom learning: cuándo comprar contenido estándar (LinkedIn Learning, Coursera for Business) y cuándo invertir en formación a medida
- Evaluación del ROI de la formación: cómo medir si las inversiones en L&D están cambiando comportamientos y produciendo resultados, más allá de las encuestas de satisfacción postformación
- Gestión de múltiples proveedores de formación sin crear fragmentación en la experiencia del empleado

**3. Recruiting y headhunting**

El proveedor que más impacta a la calidad del talento:
- Cuándo usar un headhunter executive search vs. una RPO (Recruitment Process Outsourcing) vs. agencias de selección tradicionales
- El briefing de búsqueda: cómo preparar el brief que le da al headhunter la información necesaria para presentar candidatos que realmente encajan
- Gestión del proceso con el proveedor: los hitos de comunicación, las expectativas de calidad y cómo manejar cuando la búsqueda no avanza
- Evaluación de headhunters: las métricas que revelan si el proveedor es bueno — calidad de los candidatos presentados, tiempo de entrega, retención de los contratados a 12 meses

**4. HR technology: construir el stack**

Las herramientas que habilitan las capacidades del equipo de RRHH:
- El HRIS como columna vertebral: cómo evaluar y seleccionar el sistema de información de RRHH — Workday, SAP SuccessFactors, BambooHR, Personio — según el tamaño y la madurez de la organización
- Las categorías adyacentes: ATS (Applicant Tracking System), plataformas de engagement y feedback, herramientas de gestión del rendimiento, sistemas de compensación, HR analytics
- El dilema del best-of-breed vs. suite: las ventajas e inconvenientes de tener muchas herramientas especializadas frente a una plataforma integrada
- Gestión de la implementación: por qué el 70% de las implementaciones de HR tech fracasan y cómo estar en el 30% que tiene éxito

**5. Consultoras de gestión del cambio**

Cuando necesitas ayuda externa para transformaciones importantes:
- Cuándo tiene sentido contratar una consultora de change management vs. hacerlo internamente
- La selección: cómo evaluar consultoras de gestión del cambio, qué preguntar en el proceso de selección y las señales de que la propuesta no es seria
- La relación cliente-consultora: cómo gestionar al equipo consultor para que transfiera conocimiento al equipo interno y no cree dependencia
- El governance del proyecto: los mecanismos de control que evitan el scope creep y los costes no previstos en proyectos de consultoría

**6. Gestión de proveedores**

La función que maximiza el valor del ecosistema:
- Vendor management como disciplina: los procesos, las métricas y los rituales que convierten la gestión de proveedores en una fuente de ventaja estratégica
- SLA y KPIs por proveedor: cómo definir los indicadores de rendimiento en el contrato y cómo gestionarlos sin convertirse en adversarios
- Las revisiones periódicas: la cadencia y el contenido de las revisiones con cada tipo de proveedor
- Cómo gestionar la renovación y la negociación de contratos con los proveedores clave sin perder poder de negociación

Termina con la auditoría del ecosistema actual de proveedores: el proceso para evaluar si los partners actuales siguen siendo los mejores para las necesidades de hoy, y los criterios para decidir cuándo cambiar de proveedor.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir y gestionar el ecosistema de proveedores y partners de RRHH que complementa las capacidades internas del equipo de personas con el máximo retorno de inversión.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Joint ventures y alianzas estratégicas',
                'description'      => 'Estructura y gestiona las alianzas financieras más complejas: el joint venture agreement, la gobernanza compartida y los mecanismos de salida que protegen los intereses de cada parte cuando las cosas cambian.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en estructuración de joint ventures, alianzas estratégicas y partnerships corporativos complejos. Necesito entender cómo diseñar, negociar y gestionar una alianza estratégica que cree valor para ambas partes mientras protege los intereses de mi organización.

**Mi situación:**
[DESCRIBE EL CONTEXTO: el tipo de alianza que estás considerando, las partes implicadas, el objetivo estratégico, el sector, el alcance geográfico y el horizonte temporal de la alianza]

---

Guíame a través de la estructuración completa de la alianza estratégica:

**1. El análisis estratégico previo**

Antes de entrar en negociaciones:
- Las preguntas que debes responder antes de comprometerte: ¿qué obtengo que no puedo conseguir solo? ¿qué aporto que el partner no tiene? ¿cuál es el BATNA —mejor alternativa— si la alianza no prospera?
- Make vs. partner vs. acquire: el framework de decisión que determina si una alianza es la mejor estructura o si sería mejor una adquisición, una license o el desarrollo interno
- El análisis de compatibilidad cultural: las diferencias de cultura corporativa que hacen fracasar alianzas que financieramente tenían todo el sentido
- El due diligence de la contraparte: qué debes verificar sobre el partner potencial antes de comprometer recursos y reputación

**2. Los modelos de alianza**

Las estructuras disponibles y cuándo usar cada una:
- **Joint Venture (JV) con nueva entidad**: cuándo crear una empresa nueva tiene sentido, las implicaciones fiscales y de gobernanza, y los costes de estructura que a menudo se infravaloran
- **Contractual JV**: la alianza sin crear una entidad nueva — más flexible pero con menos protección y más ambigüedad en la gestión
- **Strategic partnership agreement**: el contrato de colaboración que define derechos, obligaciones y exclusividades sin compartir equity
- **Equity partnership**: cuando uno de los partners toma una participación en el otro como señal de compromiso — las implicaciones para la valoración y la gobernanza

**3. La negociación del acuerdo**

Los temas que determinan el éxito o el fracaso de la alianza:
- La división de contribuciones y beneficios: cómo valorar las aportaciones no monetarias —tecnología, distribución, marca, talento— y traducirlas a porcentajes de participación o de revenue share
- Los términos de exclusividad: cuándo aceptar exclusividad, en qué geografías o segmentos y cómo limitarla para no cerrar opciones estratégicas
- Las protecciones: los drag-along, tag-along, rights of first refusal y las cláusulas anti-dilución que protegen a cada parte en los escenarios adversos
- Los mecanismos de deadlock: qué pasa cuando los partners no se ponen de acuerdo en decisiones importantes — el buy-sell, la mediación y el put/call como mecanismos de resolución

**4. La gobernanza de la alianza**

Cómo gestionarla en el día a día:
- El steering committee o board del JV: la composición, la cadencia de reuniones, las decisiones que requieren unanimidad y las que se pueden tomar por mayoría
- Los comités operativos: cómo organizar la gestión operativa cuando hay equipos de dos empresas trabajando juntos
- Los procesos de decisión: el operational handbook que define qué puede decidir el management del JV sin escalar al board y qué requiere aprobación conjunta
- La comunicación entre partners: los rituales de alineación que evitan que se acumulen malentendidos y tensiones que luego son difíciles de desactivar

**5. Los mecanismos de salida**

Cómo protegerse cuando las cosas cambian:
- Las causas de terminación: los eventos que permiten a cualquiera de las partes salir de la alianza — breach de contrato, cambio de control, underperformance sostenida
- La valoración en la salida: cómo se valora el JV o los activos compartidos cuando hay que liquidar o comprar la parte del otro — los mecanismos que evitan disputas de valoración costosas
- El unwinding plan: cómo separar los activos, los clientes y los equipos cuando la alianza se disuelve de forma que se minimice el daño a ambas partes
- El aprendizaje de las alianzas que fallaron: por qué el 50-70% de los joint ventures se disuelven antes de lo previsto y cómo diseñar la tuya para que no caiga en los mismos errores

**6. El modelo financiero de la alianza**

Los números que justifican la decisión:
- Cómo construir el business case conjunto: los revenues compartidos, los costes de estructura del JV y el reparto del beneficio
- El análisis de sensibilidad: cómo varían los retornos de cada parte según diferentes hipótesis de crecimiento y de costes compartidos
- El working capital del JV: quién financia las necesidades de capital circulante y cómo se resuelven los déficits de tesorería en una entidad compartida

Termina con el checklist de due diligence que necesito completar antes de firmar el acuerdo de alianza y los 5 términos que bajo ninguna circunstancia debería ceder en la negociación.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Estructurar, negociar y gestionar joint ventures y alianzas estratégicas con la gobernanza y los mecanismos de salida que protegen los intereses de cada parte.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos de partnership y distribución',
                'description'      => 'Redacta y negocia los contratos que formalizan las alianzas: los acuerdos de distribución, los contratos de white-label y los joint venture agreements que protegen a ambas partes.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado especializado en derecho mercantil y contratos de distribución y partnership. Necesito redactar o revisar los contratos que formalizan las alianzas comerciales de mi empresa, asegurando que protegen adecuadamente nuestros intereses sin crear fricciones innecesarias con el partner.

**Mi situación:**
[DESCRIBE EL CONTEXTO: el tipo de acuerdo que necesitas — distribución, white-label, agencia comercial, joint venture, co-marketing, reseller, etc. — las partes, el sector, el producto o servicio objeto del contrato, la jurisdicción aplicable y si hay desequilibrio de poder entre las partes]

---

Ayúdame a redactar y negociar el contrato de partnership:

**1. La estructura del contrato**

Los componentes de un acuerdo de distribución bien construido:
- El objeto del contrato: cómo definir con precisión qué producto o servicio se distribuye, en qué versiones, y qué queda excluido del alcance del acuerdo
- El territorio: la definición geográfica del área exclusiva o no exclusiva, cómo gestionar los clientes que operan en múltiples territorios y las ventas online que no respetan fronteras geográficas
- La exclusividad: cuándo conceder exclusividad, qué tipo — exclusiva de territorio, de canal, de segmento — y qué compromisos de rendimiento mínimo la condicionan
- La duración: los plazos típicos según el tipo de acuerdo, las cláusulas de renovación automática y las condiciones de no renovación sin causa

**2. Las obligaciones de las partes**

Qué se compromete a hacer cada parte:
- Obligaciones del fabricante/proveedor: entrega, formación, materiales de marketing, soporte técnico, garantías y las representaciones que protegen al distribuidor
- Obligaciones del distribuidor/partner: los mínimos de compra o rendimiento, los informes de ventas, el mantenimiento del stock, las restricciones geográficas y el cumplimiento de los estándares de marca
- Las cláusulas de best efforts vs. obligaciones de resultado: la diferencia legal que determina la exigibilidad y cuándo usar cada una
- Los SLA y penalizaciones: cómo incluir estándares de servicio con consecuencias contractuales que sean disuasorias sin ser confiscatorias

**3. Los precios y condiciones comerciales**

El corazón del acuerdo que genera más disputas:
- La estructura de precios: precio de lista, descuentos del canal, márgenes recomendados de venta al cliente final y cómo proteger el precio de venta al público sin caer en fijación de precios
- Las condiciones de pago: los plazos, los descuentos por pronto pago, los intereses de demora y el tratamiento de los impagos
- Los ajustes de precio: cómo gestionar los cambios de precio durante la vigencia del contrato — con qué antelación se notifican y si el distribuidor tiene derecho a comprar stock al precio antiguo
- Las políticas de devolución y garantía: las condiciones en que el fabricante acepta devoluciones, quién soporta el coste del transporte y cómo se tramitan las reclamaciones de garantía

**4. Protección de la propiedad intelectual y la marca**

Los activos más valiosos que el contrato debe proteger:
- El uso de la marca: qué puede y qué no puede hacer el distribuidor con el nombre y logo del fabricante — el manual de uso de marca incorporado al contrato
- White-label y OEM: cuando el distribuidor vende bajo su propia marca, cómo proteger el know-how subyacente y establecer los límites del diseño y la modificación
- Confidencialidad: el alcance del NDA, la definición de información confidencial, las excepciones y el período post-contractual de mantenimiento del secreto
- Protección frente a ingeniería inversa, copias o desarrollos derivados que compitan con el producto original

**5. Las cláusulas de terminación**

Cómo salir del acuerdo cuando es necesario:
- Las causas de terminación anticipada: breach material, insolvencia, cambio de control, incumplimiento de los mínimos pactados — cuáles requieren notificación previa y cuáles permiten la terminación inmediata
- El período de preaviso: los plazos según el tipo de acuerdo y la protección para el distribuidor que ha hecho inversiones basadas en el contrato
- Las consecuencias de la terminación: qué pasa con el stock, los clientes, los contratos en curso y las comisiones pendientes
- Las restricciones post-contractuales: los non-compete y non-solicit que son razonables y ejecutables según la jurisdicción

**6. Resolución de disputas**

Cuando las cosas van mal:
- La elección de la ley aplicable: las implicaciones de elegir una jurisdicción u otra, especialmente en contratos internacionales
- Los mecanismos escalonados: negociación directa, mediación y arbitraje antes de ir a los tribunales — el proceso que resuelve la mayoría de las disputas sin litigación
- El arbitraje: cuándo es mejor que la jurisdicción ordinaria, qué instituciones (ICC, AAA, CIMA) y cómo redactar la cláusula arbitral para que sea eficaz
- Las medidas cautelares: cuándo y cómo solicitarlas cuando una disputa requiere una actuación urgente antes de la resolución definitiva

Termina con la revisión del borrador que me proponga la contraparte: los 10 puntos que debo revisar siempre antes de firmar cualquier contrato de distribución o partnership y las cláusulas que nunca debería aceptar sin modificar.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Redactar y negociar contratos de distribución, white-label y partnership que protejan adecuadamente los intereses de la empresa en acuerdos comerciales complejos.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Partner success: el CS que trabaja con partners',
                'description'      => 'Gestiona la relación con los clientes que llegan a través de canal indirecto: la complejidad de tener un partner en el medio, la alineación de incentivos y los modelos de soporte que funcionan en entornos de canal.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en customer success en entornos de canal indirecto con experiencia en empresas que venden a través de resellers, SIs (System Integrators) y partners de distribución. Necesito diseñar el modelo de CS que funciona cuando hay un partner entre mi empresa y el cliente final.

**Mi situación:**
[DESCRIBE TU MODELO: tipo de producto, tipo de partners —resellers, SIs, MSPs—, cómo funciona el proceso de venta y onboarding actualmente, qué problemas específicos tienes en la gestión del cliente a través de canal]

---

Diseña el modelo de Partner Success para mi caso:

**1. La complejidad del CS en entornos de canal**

Entender el problema antes de resolverlo:
- La ambigüedad del cliente: en un modelo de canal, ¿quién es el cliente al que haces CS? ¿El partner o el cliente final del partner? Las implicaciones según la respuesta
- El problema de la visibilidad: sin acceso directo al cliente final, ¿cómo sabes si está obteniendo valor del producto? Las señales de salud que puedes obtener indirectamente a través del partner
- La alineación de incentivos: el partner quiere que su cliente sea feliz, pero sus incentivos de corto plazo no siempre coinciden con los de largo plazo del cliente
- La fragmentación del soporte: cuando el cliente tiene un problema, ¿llama al partner o a ti? Y cuando el partner no tiene respuesta, ¿qué pasa?

**2. El modelo de soporte en canal**

Quién hace qué cuando el cliente necesita ayuda:
- El modelo de soporte de nivel 1/nivel 2/nivel 3: el partner hace el soporte de primer nivel, el fabricante el de segundo y tercero — cómo definir los límites y los tiempos de escalación
- Partner-led support: cuando el partner tiene la capacidad técnica para hacer todo el soporte — qué formación, herramientas y acceso necesitan para ser autosuficientes
- Direct support para cuentas enterprise: cuándo tiene sentido saltarse el canal y dar acceso directo al soporte del fabricante a los clientes más grandes o más estratégicos
- El trilateral support model: cuando la incidencia implica a tres partes — cliente, partner y fabricante — y alguien tiene que liderar la coordinación

**3. Partner enablement para CS**

Hacer que el partner pueda hacer CS mejor:
- El training de CS para partners: qué necesita saber el equipo del partner sobre el producto, sobre las metodologías de éxito del cliente y sobre los escalation paths
- Herramientas compartidas: el acceso al health score del cliente, a las señales de uso del producto y a los playbooks de intervención que normalmente están reservados al equipo interno de CS
- Partner certification en CS: los programas de certificación que crean expertise en el partner y crean adhesión — el partner que invierte en formarse en tu producto CS está más comprometido con el éxito del cliente
- El knowledge base del partner: la documentación que permite al partner responder las preguntas más frecuentes del cliente sin necesidad de escalar

**4. La visibilidad del cliente final**

Ver lo que pasa aunque no tengas acceso directo:
- Datos de uso del producto: si el producto tiene telemetría, cómo compartir los datos de adopción y uso con el partner para que pueda intervenir proactivamente
- Encuestas de NPS y CSAT al cliente final: cuándo tiene sentido hacerlas directamente —con transparencia hacia el partner— y cómo gestionar la relación cuando los resultados son malos
- Escalation paths directos: los canales por los que el cliente final puede llegar a ti cuando el partner no resuelve el problema — el equilibrio entre dar esa opción y no socavar la relación del cliente con el partner
- El community engagement: los foros, grupos de usuarios y eventos donde el cliente final interactúa contigo aunque el partner sea el interlocutor habitual

**5. La gestión de la renovación en canal**

El momento de mayor tensión en el modelo de canal:
- Quién gestiona la renovación: si la responsabilidad es del partner, del fabricante o compartida, y cómo cambia según el tamaño de la cuenta
- Señales de riesgo sin visibilidad directa: las señales de churn que puedes detectar incluso sin hablar con el cliente — comportamiento en el producto, interacciones con el soporte del partner, cambios en el equipo del cliente
- El play de retención en canal: qué puede hacer el fabricante para ayudar al partner a retener una cuenta en riesgo — desde el soporte técnico hasta el executive sponsor del fabricante que habla directamente con el cliente
- Cómo estructurar los incentivos del partner para que la retención sea tan importante para él como para ti

**6. Las métricas del Partner Success**

Cómo medir el éxito en un modelo de canal:
- Partner NPS y partner health score: la satisfacción del partner como proxy de la satisfacción del cliente final
- Retention rate por canal: el churn que se origina en cuentas gestionadas por partners vs. cuentas de canal directo — las diferencias revelan si el modelo de CS en canal está funcionando
- Partner escalation rate: cuántas incidencias del partner necesitan escalar al fabricante — si es muy alto, el partner no está suficientemente habilitado
- Time to resolution en escalaciones: el SLA que el partner y el cliente experimentan cuando un problema llega al fabricante

Termina con el playbook de escalación para el caso más común de crisis en canal: qué pasa cuando el cliente del partner amenaza con cancelar y el partner no sabe cómo retenerle — quién hace qué, en qué orden y con qué argumentos.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar el modelo de customer success que funciona en entornos de canal indirecto, con la visibilidad, el enablement de partners y los mecanismos de retención que cubren la brecha entre fabricante y cliente final.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Alianzas entre freelancers',
                'description'      => 'Construye la red de colaboradores que te permite aceptar proyectos más grandes: los acuerdos de subcontratación, las referencias mutuas y los modelos de colaboración que multiplican la capacidad sin perder la flexibilidad.',
                'prompt_content'   => <<<'PROMPT'
Eres un asesor de negocio especializado en ayudar a freelancers y consultores independientes a construir redes de colaboración que les permitan crecer sin perder la flexibilidad que los hizo elegir el trabajo independiente. Necesito diseñar la estrategia de alianzas con otros freelancers que me permita aceptar proyectos más grandes y diversificar mis ingresos.

**Mi situación:**
[DESCRIBE TU PERFIL: tipo de servicio, especialización, experiencia, tipos de proyectos que actualmente aceptas y rechazas, qué capacidades complementarias necesitarías para crecer, si ya tienes relaciones informales con otros freelancers]

---

Diseña la estrategia completa de alianzas entre freelancers para mi caso:

**1. Los modelos de colaboración entre independientes**

Las diferentes formas de trabajar juntos sin montar una empresa:
- **Red de referidos**: el modelo más simple — tú referencias trabajo que no puedes aceptar y recibes una comisión o una referencia recíproca — cómo construirla y mantenerla activa
- **Subcontratación puntual**: tú llevas el cliente, defines el scope y subcontratas partes del trabajo — las implicaciones legales, fiscales y de gestión de calidad
- **Consorcio de freelancers**: varios independientes presentan una propuesta conjunta para proyectos grandes — cómo estructurarlo, quién lidera la relación con el cliente y cómo se reparte el revenue
- **Colectivo de freelancers**: una marca compartida con identidad propia que agrupa a varios independientes — más formal, más visible, pero con más coordinación necesaria

**2. La identificación de colaboradores ideales**

Con quién tiene sentido aliarse:
- Las disciplinas complementarias que amplifican tu propuesta de valor: si eres diseñador, necesitas developers; si eres consultor de estrategia, necesitas implementadores; si eres copywriter, necesitas diseñadores
- Los criterios de selección más importantes: calidad del trabajo, fiabilidad en los plazos, compatibilidad de estilo de trabajo y transparencia en la comunicación — más importantes que la tarifa o la popularidad
- Las señales de alerta en un potencial colaborador: retrasos recurrentes, comunicación reactiva, clientes que no han quedado satisfechos, o valores profesionales muy diferentes
- Dónde encontrar colaboradores de calidad: comunidades de freelancers, eventos de sector, LinkedIn y los círculos de confianza de tus clientes actuales

**3. El acuerdo de subcontratación**

La base legal que protege la relación:
- Qué incluir en el contrato de subcontratación: el scope exacto, los entregables, los plazos, la tarifa, las condiciones de pago y los derechos de propiedad intelectual
- La cláusula de no contacto directo con el cliente: cuándo incluirla, cómo redactarla y por qué protege a ambas partes —no solo al contratista principal
- La responsabilidad por los errores del subcontratista: quién responde ante el cliente cuando el subcontratista falla y cómo estructurar el acuerdo para que la responsabilidad sea proporcional
- Los términos de pago al subcontratista: si pagas antes o después de cobrar al cliente, los plazos razonables y cómo gestionar el cash flow cuando el cliente retrasa el pago

**4. El modelo de referencias mutuas**

El intercambio de oportunidades que beneficia a los dos:
- Las redes de referidos formales: cómo estructurar un acuerdo de referencia mutua — con o sin comisión, qué tipo de referencia cuenta, cómo registrar las referencias y cómo saldar las cuentas
- Las redes de referidos informales: cómo mantener la reciprocidad sin contabilizarla de forma estricta — la economía del favor que funciona en comunidades pequeñas
- El qualifying de las referencias: cómo evaluar si un proyecto que alguien te refiere encaja contigo antes de comprometerte, y cómo declinar sin deteriorar la relación
- Cómo hacer que la red de referidos sea activa y no durmiente: los rituales de mantenimiento que mantienen los colaboradores pensando en ti cuando aparece una oportunidad

**5. La presentación conjunta a proyectos grandes**

El consorcio para oportunidades que no podrías aceptar solo:
- Cómo identificar los proyectos que justifican una presentación conjunta: los proyectos demasiado grandes para un solo independiente pero demasiado pequeños para una agencia
- La propuesta conjunta: quién lidera la relación con el cliente, cómo se presenta el equipo de freelancers sin que parezca informal o riesgoso para el cliente
- El reparto del revenue: los modelos de fee splitting que son percibidos como justos por todas las partes — porcentaje de contribución, porcentaje de origen del lead, tarifa plana por rol
- La gestión del proyecto en equipo: las herramientas y los rituales de coordinación que hacen que varios independientes trabajen como un equipo cohesionado

**6. Los límites de la colaboración**

Lo que no debes confundir con una sociedad:
- Cuándo la colaboración empieza a parecerse a una empresa y las implicaciones fiscales y legales de esa situación en España
- Cómo mantener la independencia de cada colaborador: que no haya subordinación, que los proyectos sean proyectos y no empleo encubierto
- Los conflictos más comunes en las alianzas entre freelancers y cómo resolverlos antes de que dañen la relación
- Cuándo tiene sentido formalizarlo en una SL o en alguna forma societaria y cuándo la informalidad es mejor para todos

Termina con el plan de acción para construir mi red de colaboradores en los próximos 6 meses: a quién contactar primero, cómo proponer la colaboración y el acuerdo mínimo que formaliza la relación sin crear burocracia innecesaria.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir la red de colaboradores freelance con los acuerdos, modelos de referencia y estructuras de trabajo conjunto que permiten aceptar proyectos más grandes sin perder la flexibilidad del trabajo independiente.',
                'vote_score'       => 36,
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
