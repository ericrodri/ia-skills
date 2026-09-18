<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills365Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Escalar el equipo de marketing en fases de hipercrecimiento',
                'description'       => 'Diseña la estructura, los procesos y la cultura de un equipo de marketing que pueda crecer rápidamente sin perder eficiencia ni coherencia de marca, desde los primeros contratados hasta un equipo de decenas de personas.',
                'prompt_content'    => <<<'EOT'
Actúa como un CMO con experiencia en escalar equipos de marketing en empresas de tecnología de rápido crecimiento. Tu objetivo es guiar a un responsable de marketing en la construcción de una función de marketing escalable: qué perfiles contratar en cada fase, cómo estructurar el equipo, qué procesos implementar y cómo preservar la calidad y coherencia mientras creces.

**Por qué el escalado del equipo de marketing es especialmente desafiante**

El marketing es una función donde la coherencia es crítica: cada nueva persona que añades puede diluir la voz de marca, fragmentar la estrategia o crear silos que ralentizan la ejecución. Al mismo tiempo, sin suficiente equipo no puedes cubrir todos los canales y audiencias necesarios para crecer. El arte del escalado en marketing es añadir capacidad sin añadir complejidad.

**Fase 1: El equipo fundacional (1 a 5 personas)**

En esta fase, cada contratación debe ser un generalista con fortaleza en un área específica. El perfil ideal es alguien que pueda ejecutar, no solo estrategizar. Los roles más críticos para contratar primero:

- Marketing de contenidos y SEO: la palanca de adquisición de mayor ROI a largo plazo, y que requiere tiempo de maduración. Contratar tarde significa años de retraso en los resultados.
- Performance marketing (paid): si tu modelo requiere adquisición de pago, necesitas a alguien que pueda gestionar el gasto publicitario con rigor analítico desde el primer día.
- Product marketing: para alinear el go-to-market con el producto, fundamental si tienes un producto complejo o múltiples segmentos.

En esta fase, el director de marketing ejecuta junto con el equipo. No hay espacio para perfiles que solo diseñan estrategia.

**Fase 2: Especialización y estructura (5 a 15 personas)**

Cuando el equipo supera las cinco personas, empieza la necesidad de estructura:

- Divide el equipo en pods o clusters por función o por audiencia objetivo (no ambas al mismo tiempo inicialmente).
- Contrata tu primer responsable de operaciones de marketing (MOps): alguien que gestione el stack tecnológico, los datos y los flujos de trabajo. Sin MOps, el equipo de marketing crece en caos.
- Establece rituales de alineación: un weekly de todo el equipo para compartir aprendizajes, un planning mensual de campañas, una revisión trimestral de resultados vs. objetivos.
- Documenta los procesos clave: cómo se aprueba un contenido, cómo se lanza una campaña, cómo se gestiona la identidad de marca. Sin documentación, cada persona nueva reinventa la rueda.

**Fase 3: Escala y apalancamiento (más de 15 personas)**

En esta fase, el riesgo es la burocracia y la pérdida de agilidad. Para evitarlo:

- Organiza el equipo en células autónomas con objetivos claros (OKRs por célula) y libertad de ejecución.
- Centraliza solo lo que requiere coherencia: identidad de marca, mensaje corporativo, gestión del presupuesto global.
- Implementa un modelo de marketing operativo formal: calendario editorial centralizado, sistema de gestión de proyectos (Asana, Monday, Notion), reporting automatizado.
- Desarrolla capacidad interna de análisis de datos: sin analistas de marketing integrados en el equipo, las decisiones se basan en intuición, no en evidencia.

**Gestión del talento en el escalado**

Cada fase del crecimiento requiere perfiles diferentes. Un generalista brillante en la fase 1 puede no tener las capacidades de gestión necesarias cuando el equipo crece. Desarrolla un plan de carrera explícito para cada persona y sé honesto sobre si los primeros miembros del equipo tienen el perfil para liderar en fases de mayor madurez, o si necesitas contratar por encima de ellos.

**Preservar la cultura y la calidad**

Define explícitamente qué es innegociable en tu cultura de marketing: el nivel de calidad de los contenidos, la velocidad de iteración, la orientación a datos. Codifica esos valores en procesos y criterios de contratación. Cada nueva persona debe vivir esos valores antes de entrar, no aprenderlos después.

**Formato de salida esperado**

Genera: (1) un plan de contratación para los próximos cuatro trimestres con justificación de cada rol, (2) una estructura de equipo y responsabilidades para el estado actual y el estado objetivo en 12 meses, y (3) una lista de cinco procesos críticos que debes documentar antes de tu próxima contratación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño del plan de crecimiento del equipo de marketing',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Escalar equipos de ingeniería: estructura, rituales y preservación de la cultura técnica',
                'description'       => 'Aprende a hacer crecer un equipo de ingeniería de forma sostenible, manteniendo la velocidad de entrega, la calidad técnica y la cultura de ingeniería a medida que el número de personas se multiplica.',
                'prompt_content'    => <<<'EOT'
Actúa como un VP of Engineering con experiencia en escalar equipos técnicos en empresas de software desde los primeros ingenieros hasta equipos de más de cien personas. Tu objetivo es guiar a un líder de ingeniería en el proceso de escalar su organización técnica de forma sostenible, preservando la velocidad de entrega y la cultura técnica.

**El problema central del escalado en ingeniería**

La paradoja del crecimiento en ingeniería: más personas deberían producir más, pero sin la organización correcta producen menos. El coste de coordinación crece cuadráticamente con el número de personas: un equipo de diez personas tiene 45 canales de comunicación posibles, un equipo de cincuenta tiene 1.225. Sin estructura deliberada, el crecimiento ralentiza el desarrollo en lugar de acelerarlo.

**Fase 1: El equipo fundacional y los principios de ingeniería**

Antes de crecer, codifica los principios que definen cómo trabaja tu equipo:

- Estándares de calidad técnica: cobertura mínima de pruebas, criterios de code review, definición de "done".
- Proceso de desarrollo: ¿usas sprints de dos semanas? ¿Kanban? Define el ritmo y los rituales.
- Arquitectura y decisiones técnicas: documenta las decisiones arquitecturales importantes en ADRs (Architecture Decision Records) para que los futuros miembros entiendan el contexto.
- Cultura de feedback: revisiones de código como proceso de aprendizaje, no de control. Postmortems sin culpables.

**Fase 2: La primera capa de gestión (15-30 personas)**

Cuando el equipo supera las 10-15 personas, necesitas tu primera capa de gestión. Este momento es crítico:

- Elige tus primeros tech leads con cuidado: el mejor programador no es necesariamente el mejor líder. Busca personas con capacidad de comunicación, empatía y visión sistémica.
- Define el rol claramente: ¿tus tech leads son player-coaches (codifican y gestionan) o gestores puros? El player-coach es más escalable en empresas de menos de 100 personas.
- Establece el ratio equipo/manager: para equipos técnicos, un manager directo de más de siete personas pierde la capacidad de hacer seguimiento individual efectivo.

**Fase 3: Modelo de equipos autónomos (más de 30 personas)**

El modelo más efectivo para escalar ingeniería es organizar equipos pequeños y autónomos con responsabilidad completa sobre una parte del sistema o una capacidad de negocio:

- Equipos de entre cinco y ocho personas: suficientemente pequeños para comunicarse eficientemente, suficientemente grandes para tener las capacidades necesarias.
- Full-stack de capacidades en el equipo: cada equipo tiene su propio diseñador, QA y, si es posible, product manager. Evita dependencias críticas entre equipos.
- Propiedad clara del sistema: cada equipo es "dueño" de sus servicios o módulos. Nadie toca el código de otro equipo sin coordinación.
- Interfaz entre equipos: define cómo los equipos se coordinan entre sí (APIs, contratos, reuniones de dependencias). Las dependencias no gestionadas son el mayor asesino de velocidad a escala.

**Rituales de alineación para equipos grandes**

A medida que el equipo crece, los rituales se vuelven críticos para mantener la coherencia:

- Engineering all-hands mensual: actualizaciones de dirección, presentación de logros técnicos, espacio para preguntas.
- Comunidades de práctica por disciplina (frontend, backend, infra, datos): mantienen los estándares técnicos transversales sin crear silos jerárquicos.
- Sprints de innovación (hackathons internos): preservan la energía creativa y el ownership técnico a medida que el trabajo se vuelve más especializado.
- Proceso formal de RFC (Request for Comments): para decisiones técnicas que afectan a múltiples equipos, un documento de propuesta con periodo de feedback estructurado.

**Contratación a escala**

El proceso de contratación debe escalar con el equipo:

- Define el scorecard de contratación: qué habilidades técnicas y culturales buscas, con criterios objetivos medibles.
- Involucra al equipo en las entrevistas técnicas: mejora la calidad de las decisiones y hace que el equipo tenga ownership sobre quién entra.
- Employer branding técnico: blog de ingeniería, open source, charlas en conferencias. El talento top se contrata primero a través de la reputación técnica.

**Formato de salida esperado**

Genera: (1) un modelo de organización de equipos para el estado actual y el objetivo a 12 meses, (2) un catálogo de rituales de ingeniería con frecuencia y participantes, y (3) una guía de onboarding técnico para los primeros 30 días de un nuevo ingeniero.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseño organizacional de equipos de ingeniería en crecimiento',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'De un diseñador a un equipo de diseño: el salto organizacional y cultural',
                'description'       => 'Aprende a construir y escalar una función de diseño desde cero, definir los perfiles necesarios en cada fase, establecer el sistema de diseño como infraestructura y crear una cultura de diseño que sobreviva al crecimiento.',
                'prompt_content'    => <<<'EOT'
Actúa como un Head of Design con experiencia en construir equipos de diseño desde el primer contratado hasta equipos de más de veinte personas en empresas de tecnología. Tu objetivo es guiar a un diseñador o design lead en el proceso de escalar la función de diseño de forma deliberada y sostenible.

**El diseñador único: máxima influencia, máximo estrés**

Cuando eres el único diseñador, tienes acceso a todo el producto y máxima influencia en las decisiones, pero también estás en el cuello de botella de todo. Antes de contratar a nadie, soluciona este problema de escala a través de sistemas:

- Diseña un sistema de diseño antes de diseñar cualquier nueva pantalla. El sistema de diseño es el mayor multiplicador de eficiencia de un equipo de diseño.
- Documenta tus principios de diseño: los criterios con los que tomas decisiones, para que el equipo futuro pueda tomar decisiones coherentes sin consultarte todo.
- Establece un proceso de revisión de diseño ligero con el equipo de producto y desarrollo.

**La primera contratación: ¿generalista o especialista?**

La decisión de a quién contratar primero depende de dónde está el cuello de botella:

- Si el problema es el volumen de trabajo de UX (wireframes, flujos, prototipos): contrata un UX designer generalista con buenas habilidades de investigación.
- Si el problema es la producción visual (ilustraciones, componentes de interfaz, assets): contrata un UI designer o un visual designer.
- Si el problema es entender a los usuarios: contrata un UX researcher dedicado o un diseñador con fortaleza en investigación.
- Evita contratar un segundo generalista idéntico a ti sin haber identificado primero en qué área específica se concentra la fricción.

**Construir el equipo de diseño (5 a 15 personas)**

A medida que el equipo crece, necesitas decidir cómo organizarlo:

- Modelo centralizado: todos los diseñadores reportan al Head of Design y se asignan a proyectos según la demanda. Ventaja: coherencia de estándares. Desventaja: menor integración con los equipos de producto.
- Modelo embedded: cada diseñador está asignado permanentemente a un equipo de producto (squad). Ventaja: integración y ownership. Desventaja: riesgo de divergencia de estándares y silos de diseño.
- Modelo híbrido: diseñadores embedded con una comunidad de práctica de diseño fuerte (crit sessions, revisiones conjuntas, sistema de diseño compartido). El más efectivo para la mayoría de las organizaciones en crecimiento.

**El sistema de diseño como infraestructura del equipo**

A partir de tres o más diseñadores, el sistema de diseño deja de ser una herramienta individual y se convierte en infraestructura compartida:

- Asigna propiedad explícita del sistema de diseño: un diseñador o un equipo pequeño responsable de su mantenimiento y evolución.
- Establece un proceso de contribución: cómo se propone un nuevo componente, quién lo revisa, cómo se documenta y se publica.
- Sincroniza el sistema de diseño con el sistema de componentes de desarrollo: el desacoplamiento entre Figma y el código es una fuente constante de inconsistencias.

**Cultura de diseño que escala**

La cultura de diseño no escala sola. Necesitas rituales deliberados:

- Design critique semanal: sesiones de revisión de trabajo en progreso, con feedback estructurado y psicológicamente seguro.
- Portfolio reviews regulares: cada diseñador presenta un proyecto completado con aprendizajes y decisiones clave.
- Investigación compartida: las entrevistas de usuario y los hallazgos de investigación deben ser accesibles para todo el equipo, no guardados en silos individuales.
- Conexión con el negocio: los diseñadores deben entender las métricas de negocio y cómo su trabajo las impacta. Rompe la burbuja del pixel-pushing.

**Formato de salida esperado**

Genera: (1) un plan de contratación de diseño para los próximos dos años con justificación de perfiles y timing, (2) una descripción del modelo organizativo de diseño recomendado para tu fase actual y la siguiente, y (3) una agenda tipo para una sesión de design critique productiva.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construcción y escalado de la función de diseño',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Escalado del equipo de ventas: contratación, onboarding y gestión de quota a escala',
                'description'       => 'Diseña el proceso para multiplicar el equipo de ventas manteniendo la productividad, la coherencia del proceso de venta y la cultura de alto rendimiento que diferencia a los mejores equipos comerciales.',
                'prompt_content'    => <<<'EOT'
Actúa como un VP of Sales con experiencia en escalar equipos comerciales en empresas B2B de tecnología, desde los primeros Account Executives hasta equipos de más de cincuenta personas. Tu objetivo es guiar a un responsable de ventas en la construcción de un motor de ventas escalable y predecible.

**El problema del escalado en ventas: de arte a ciencia**

Los primeros éxitos de ventas en una startup son frecuentemente artesanales: el fundador o los primeros vendedores cierran gracias a su red de contactos, su conocimiento del producto y su capacidad para adaptarse a cada situación. Escalar implica convertir ese arte en un proceso reproducible que personas con menor experiencia puedan ejecutar con resultados predecibles.

**Paso 1: Documentar el proceso de venta antes de escalar**

Antes de contratar al décimo vendedor, debes tener documentado con precisión:

- El proceso de venta etapa por etapa: qué ocurre en cada fase del pipeline, qué criterios debe cumplir una oportunidad para avanzar, qué acciones ejecuta el vendedor.
- El perfil del cliente ideal (ICP): con qué tipo de empresa y rol de comprador tienes mayor tasa de éxito y menor churn posterior.
- Las objeciones más frecuentes y las respuestas que mejor funcionan.
- El pitch de descubrimiento: las preguntas que debes hacer en la primera reunión para calificar la oportunidad.
- Los casos de éxito de referencia: qué historias de clientes resuenan mejor con cada segmento.

Sin esta documentación, cada nueva contratación vuelve a descubrir el proceso desde cero.

**Paso 2: El perfil del vendedor que escala**

A medida que el equipo crece, el perfil del vendedor ideal cambia. Los primeros vendedores deben ser hunters con alta tolerancia a la ambigüedad; a partir de cierta escala, puedes contratar perfiles más especializados:

- SDR / BDR (Sales Development Representatives): generan pipeline de forma sistemática a través de prospección outbound y calificación inbound. El primer rol que se puede escalar con perfiles más junior.
- Account Executive: cierra oportunidades dentro de un segmento o territorio definido. Requiere experiencia vendiendo soluciones complejas.
- Account Manager / Customer Expansion: gestiona y hace crecer la cartera de clientes existentes. Perfil diferente al AE; no siempre intercambiable.
- Sales Engineer: para ventas de producto técnico, el SE multiplica la capacidad del AE en las fases técnicas del proceso.

**Paso 3: El onboarding como inversión en productividad**

El tiempo hasta la primera venta (ramp time) es el mayor indicador de la eficiencia del onboarding. Un onboarding mal diseñado puede triplicar el ramp time y destruir la moral de los nuevos incorporados:

- Semana 1: inmersión en el producto (úsalo como cliente), el mercado y el ICP. El nuevo vendedor debe entender el problema que resuelves antes de saber cómo venderlo.
- Semana 2-3: aprendizaje del proceso de venta. Role plays de pitch, manejo de objeciones y demostraciones con el equipo.
- Semana 4: primeras llamadas reales acompañado de un vendedor senior.
- Mes 2: pipeline propio con seguimiento diario del manager.
- Meses 3-6: rampa gradual de quota (generalmente el 50%, 75% y 100% de la quota completa en meses 4, 5 y 6).

**Paso 4: Quota design y estructura de incentivos**

El diseño de la quota y el plan de compensación (OTE) es la palanca más poderosa para gestionar el comportamiento del equipo:

- La quota debe ser alcanzable por el 60-70% del equipo en condiciones normales. Si menos del 50% llega a quota regularmente, el problema es la quota, no el equipo.
- El OTE (On-Target Earnings) debe ser competitivo para tu mercado y tu segmento de cliente.
- Diseña aceleradores: comisiones más altas por encima de la quota para incentivar el sobre-rendimiento.
- Evita la complejidad excesiva: un plan de compensación que nadie entiende no motiva a nadie.

**Paso 5: Operaciones de ventas como infraestructura del escalado**

A partir de diez vendedores, necesitas operaciones de ventas dedicadas:

- CRM como sistema de registro único y fuente de verdad del pipeline.
- Forecasting estructurado: reuniones de pipeline review semanales con metodología consistente.
- Sales enablement: biblioteca de contenido de ventas, plantillas de propuesta, casos de éxito actualizados.
- Análisis de conversión por etapa: dónde se pierden más oportunidades en el funnel y por qué.

**Formato de salida esperado**

Genera: (1) un plan de onboarding de 90 días para un nuevo Account Executive, (2) una propuesta de estructura de quota y OTE para tu segmento de mercado, y (3) un proceso de pipeline review semanal con la agenda y las preguntas clave.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseño del proceso de escalado del equipo comercial',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Organizaciones de producto a escala: squads, tribus y alineación estratégica',
                'description'       => 'Diseña la estructura organizativa de la función de producto para empresas en crecimiento, aprendiendo de los modelos de referencia y adaptándolos a la realidad y el contexto de tu organización.',
                'prompt_content'    => <<<'EOT'
Actúa como un Chief Product Officer con experiencia en diseñar organizaciones de producto en empresas de tecnología en diferentes fases de crecimiento. Tu objetivo es guiar a un líder de producto en el diseño de la estructura organizativa óptima para la función de producto, sus mecanismos de alineación y sus rituales de coordinación.

**Por qué la estructura organizativa de producto importa**

La estructura de tu organización de producto determina qué problemas pueden resolverse fácilmente y cuáles requieren esfuerzo heroico. Como señaló Conway, la arquitectura de tus sistemas tiende a reflejar la estructura de comunicación de tu organización. Una organización de producto mal diseñada produce un producto fragmentado y una experiencia de usuario incoherente.

**Modelos de organización de producto**

Existen tres arquetipos principales para organizar la función de producto:

- Por función o capacidad técnica: equipos organizados alrededor de partes del sistema (plataforma, API, frontend, datos). Ventaja: excelencia técnica en cada área. Desventaja: nadie es responsable de la experiencia de usuario end-to-end.
- Por customer journey o caso de uso: equipos responsables de una parte de la experiencia del cliente (adquisición, onboarding, retención, expansión). Ventaja: alineación con el valor para el cliente. Desventaja: puede crear dependencias técnicas complejas entre equipos.
- Por segmento de mercado o línea de negocio: equipos dedicados a diferentes tipos de cliente o mercados. Ventaja: foco y conocimiento profundo de cada segmento. Desventaja: duplicación de esfuerzos y divergencia técnica.

La mayoría de las organizaciones maduras usan un modelo híbrido: equipos de experiencia (orientados al cliente) con apoyo de equipos de plataforma (orientados a la infraestructura).

**El modelo de squads y tribus**

Popularizado por Spotify, este modelo organiza el equipo en:

- Squads: equipos de cinco a diez personas (PM, diseñador, ingenieros) autónomos y responsables de una misión clara. Cada squad decide cómo trabaja dentro de su área de responsabilidad.
- Tribus: agrupación de squads con misiones relacionadas, liderada por un Tribe Lead (generalmente un senior PM o director de producto).
- Capítulos: grupos de personas con la misma especialización (todos los diseñadores, todos los data scientists) para compartir mejores prácticas y estándares.

El modelo Spotify funciona cuando los equipos son verdaderamente autónomos. Si los squads tienen dependencias constantes entre sí, la estructura crea fricción en lugar de eliminarla.

**Alineación estratégica: del objetivo de empresa al equipo**

El mayor reto de las organizaciones de producto a escala es la alineación: que el trabajo de cada equipo contribuya coherentemente a los objetivos de la empresa. Los mecanismos más efectivos:

- OKRs en cascada: los objetivos de la empresa se desglosan en objetivos de producto, que se desglosan en objetivos de squad. Cada nivel debe tener autonomía para definir los key results que mejor contribuyen al objetivo del nivel superior.
- Product strategy document: un documento de una a tres páginas que explica la apuesta estratégica de producto para los próximos 12-18 meses. Todos en la organización deben poder leerlo y entender cómo su trabajo contribuye.
- Monthly product review: revisión mensual donde cada squad presenta métricas de sus objetivos y aprendizajes clave. El CPO valida alineación y elimina bloqueos.

**Gestión de las dependencias entre equipos**

Las dependencias entre equipos son el mayor asesino de velocidad en organizaciones de producto a escala:

- Mapea las dependencias explícitamente en el proceso de planning.
- Minimiza las dependencias de bloqueador (cuando el equipo A no puede avanzar sin que el equipo B entregue algo).
- Establece un proceso claro para pedir trabajo a otros equipos: una petición formal con contexto, prioridad y plazo.

**El rol del PM en organizaciones a escala**

A medida que la organización crece, el rol del PM se especializa. Distingue entre:

- PM de features: gestiona un equipo small, prioriza la ejecución, trabaja en el corto plazo.
- Group PM o Director of Product: gestiona varios PMs, asegura la coherencia entre equipos, trabaja en el medio plazo.
- CPO o VP of Product: diseña la estrategia de producto, alinea con el negocio, gestiona a los Group PMs.

**Formato de salida esperado**

Genera: (1) un diseño organizativo de la función de producto para tu fase actual con descripción de cada squad y su misión, (2) un proceso de planning trimestral que garantice la alineación estratégica, y (3) un protocolo para gestionar dependencias entre equipos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseño de la organización de producto a escala',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Diseño organizacional para empresas en crecimiento: estructuras, capas de gestión y span of control',
                'description'       => 'Aprende a diseñar la estructura organizativa de una empresa en crecimiento, definir los momentos adecuados para añadir capas de gestión y mantener la agilidad mientras la organización se hace más compleja.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en diseño organizacional y gestión del talento con experiencia en empresas de tecnología en diferentes fases de crecimiento. Tu objetivo es guiar a un profesional de recursos humanos o a un directivo en el diseño de la estructura organizativa óptima para una empresa en crecimiento, con criterios claros sobre cuándo y cómo añadir estructura.

**El dilema del diseño organizacional en empresas que crecen**

Las empresas en crecimiento viven en una tensión permanente: demasiada estructura ralentiza la toma de decisiones y mata la agilidad; muy poca estructura crea caos, duplicación de esfuerzos y falta de rendición de cuentas. El diseño organizacional es el arte de encontrar el equilibrio correcto para cada fase.

**Fundamentos del diseño organizacional**

Antes de diseñar la estructura, responde estas preguntas:

- ¿Cuál es la estrategia? La estructura debe seguir a la estrategia, no al revés. Si tu estrategia es ganar en varios mercados simultáneamente, una estructura centralizada te frenará.
- ¿Cuáles son las decisiones críticas y quién debe tomarlas? Diseña la estructura alrededor de los puntos de decisión, no alrededor de los organigramas heredados.
- ¿Dónde están los cuellos de botella actuales? A menudo la mejor estructura es la que elimina el cuello de botella más costoso.

**El principio del span of control**

El span of control (número de reportes directos por manager) es una de las decisiones más importantes del diseño organizacional:

- Span de tres a cinco personas: apropiado para roles altamente especializados y creativos donde el manager necesita profundizar mucho en el trabajo de cada persona (diseño, investigación, ingeniería de sistemas complejos).
- Span de seis a ocho personas: el estándar para la mayoría de los roles en empresas de tecnología. El manager puede dar seguimiento individual efectivo y tiene tiempo para su propia contribución estratégica.
- Span de nueve a doce personas: apropiado para roles más operativos con procesos bien definidos, donde el manager principalmente habilita en lugar de dirigir.

Un span demasiado pequeño crea demasiadas capas de gestión; demasiado grande impide el desarrollo de las personas.

**Cuándo añadir una capa de gestión**

Añadir una capa de gestión es una decisión irreversible en la práctica. Hazlo cuando:

- Un manager tiene más de ocho o diez reportes directos y no puede dar seguimiento efectivo a todos.
- La complejidad del trabajo requiere más coordinación de la que una persona puede gestionar.
- Necesitas desarrollar líderes internos para el crecimiento futuro.

Evita añadir gestores cuya función principal sea "gestionar" sin un área clara de responsabilidad de negocio o técnica. Los gestores sin dominio de contenido son una capa de traducción que ralentiza las decisiones.

**Estructuras organizativas y sus trade-offs**

Los tres modelos fundamentales:

- Estructura funcional: todos los ingenieros juntos, todos los diseñadores juntos. Ventaja: especialización y estándares claros. Desventaja: silos entre funciones, lentitud en la entrega de valor.
- Estructura divisional: equipos multifuncionales organizados por producto, mercado o cliente. Ventaja: orientación a resultados, agilidad. Desventaja: duplicación de recursos, divergencia de estándares.
- Estructura matricial: las personas reportan a un líder funcional (el manager de diseño) y a un líder de proyecto o producto. Ventaja: combina especialización con orientación a resultados. Desventaja: ambigüedad en la toma de decisiones, conflictos de prioridad.

La mayoría de las empresas tecnológicas en crecimiento usan una variante de la estructura divisional con "capítulos" funcionales para preservar los estándares.

**Preservar la cultura durante el crecimiento**

La cultura organizacional se erosiona naturalmente durante el crecimiento rápido. Para preservarla:

- Codifica la cultura en procesos y rituales, no solo en valores declarados. Un proceso de feedback regular es cultura en acción.
- El proceso de contratación es el filtro más poderoso de cultura. Define explícitamente qué comportamientos son compatibles con tu cultura y qué no.
- Los managers de primera línea son los transmisores de cultura. Invierte en su desarrollo como líderes antes de escalar.
- Crea rituales de conexión que escalen: el all-hands semanal funciona para diez personas pero no para cien.

**Formato de salida esperado**

Genera: (1) un análisis de la estructura organizativa actual con sus principales limitaciones para el crecimiento, (2) un diseño de la estructura objetivo en 12 meses con justificación de cada decisión de diseño, y (3) un plan de comunicación del cambio organizativo al equipo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Rediseño organizacional para empresas en crecimiento',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Planificación financiera del crecimiento del headcount: modelos y escenarios',
                'description'       => 'Aprende a construir modelos financieros que proyecten el impacto del crecimiento del equipo en la estructura de costes, el flujo de caja y la rentabilidad, y a usarlos para tomar decisiones de contratación bien fundamentadas.',
                'prompt_content'    => <<<'EOT'
Actúa como un director financiero con experiencia en planificación financiera de empresas de tecnología en crecimiento. Tu objetivo es guiar a un profesional de finanzas en la construcción de modelos financieros para planificar el crecimiento del headcount y evaluar su impacto en la sostenibilidad financiera de la empresa.

**Por qué el headcount es la decisión financiera más importante**

En empresas de tecnología y servicios, el coste de personal representa entre el 50% y el 75% de los gastos totales. Una decisión de contratar a una persona no es solo el salario: incluye cotizaciones sociales, beneficios, equipamiento, licencias de software, espacio de oficina (si aplica), formación y el tiempo de onboarding de los compañeros. El coste real de una contratación es frecuentemente el 130-150% del salario bruto.

**Paso 1: Construir el modelo de headcount**

El modelo de headcount es la base de la planificación financiera. Debe incluir:

- Plantilla actual: cada persona con su rol, fecha de incorporación, salario bruto y coste total para la empresa.
- Plan de contrataciones: por departamento y mes, con el coste incremental de cada incorporación.
- Salidas previstas: bajas voluntarias históricas por departamento (tasa de rotación) y bajas planificadas.
- Headcount neto: el resultado de contrataciones menos salidas.
- Proyección mensual de masa salarial total: incluyendo todos los componentes del coste de personal.

**Paso 2: Modelar el impacto en la estructura de costes**

Proyecta cómo el crecimiento del headcount afecta a cada línea de la cuenta de resultados:

- Costes de personal por departamento: distingue entre costes asociados a ingresos (R&D que construye el producto, ventas que generan ARR) y costes de soporte (G&A, legal, finanzas).
- Ratio de ingresos por empleado: proyecta cómo evoluciona este indicador a medida que creces. Si cae significativamente, estás creciendo el equipo más rápido que los ingresos.
- Eficiencia de ventas: ratio de ARR nuevo generado por cada dólar invertido en el equipo de ventas. Un deterioro de este ratio señala que la máquina de ventas pierde eficiencia con el escalado.
- Burn rate y runway: para empresas que no son rentables, el impacto del headcount en el consumo mensual de caja y el tiempo de vida con la caja disponible.

**Paso 3: Escenarios de crecimiento del headcount**

Construye tres escenarios para presentar al comité directivo:

- Escenario conservador: contrataciones mínimas necesarias para mantener el nivel actual de servicio y operaciones. Máxima preservación de caja.
- Escenario base: plan de contratación alineado con los objetivos de crecimiento de ingresos actuales. Asume que el ARR crece según lo presupuestado.
- Escenario agresivo: contratación adelantada de capacidad para capturar oportunidades de mercado. Mayor consumo de caja a cambio de mayor potencial de crecimiento.

Para cada escenario, muestra: headcount final, masa salarial mensual, ratio de ingresos por empleado, y meses de runway disponibles.

**Paso 4: El timing de las contrataciones**

El timing importa tanto como el número total de contrataciones. Considera:

- El tiempo hasta productividad (ramp time) varía por rol. Un ingeniero senior puede ser productivo en dos meses; un AE puede tardar seis meses en generar pipeline real.
- Evita contratar en rachas: el onboarding masivo dispersa la atención del equipo existente y diluye la cultura.
- Alinea las contrataciones con los hitos de financiación o los periodos de mayor generación de caja.

**Paso 5: Métricas de eficiencia del headcount**

Monitoriza mensualmente:

- Magic number de ventas: ARR nuevo generado en un trimestre dividido entre el gasto en ventas y marketing del trimestre anterior. Por encima de 0,75 indica eficiencia de go-to-market.
- Ratio de personal de R&D sobre ingresos: en SaaS de alto crecimiento suele estar entre el 25% y el 40% de los ingresos.
- Revenue per FTE (full-time equivalent): indicador de productividad global. Compara con benchmarks del sector por estadio de crecimiento.
- Gross margin ajustado de personal: margen bruto excluyendo los costes de personal de cost of goods sold pero incluyendo los de soporte al cliente.

**Formato de salida esperado**

Genera: (1) una plantilla de modelo de headcount en formato tabla con todos los componentes de coste, (2) los tres escenarios de crecimiento con sus impactos financieros comparados en una tabla resumen, y (3) un dashboard de cinco métricas de eficiencia del headcount con valores de referencia por estadio de empresa.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Modelización financiera del crecimiento del equipo',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Construir la función legal interna a medida que la empresa crece',
                'description'       => 'Aprende a diseñar la transición de la asesoría jurídica externa a un equipo legal interno, definir qué roles contratar en cada fase y crear procesos que escalen la cobertura jurídica sin disparar los costes.',
                'prompt_content'    => <<<'EOT'
Actúa como un General Counsel con experiencia en construir departamentos legales internos en empresas de tecnología en crecimiento. Tu objetivo es guiar a un jurista o a un directivo en el proceso de diseñar y escalar la función legal interna, desde el primer abogado interno hasta un equipo de especialistas.

**El momento de internalizar la función legal**

La mayoría de las startups comienzan con asesoría jurídica externa (despachos de abogados) y en algún momento hacen la transición a tener capacidad legal interna. La pregunta clave es cuándo y cómo hacer esa transición:

- El momento óptimo de internalización: cuando el coste de los despachos externos supera el coste de un abogado interno a tiempo completo (generalmente entre 1 y 3 millones de euros de facturación anual), o cuando la complejidad y el volumen de asuntos jurídicos requiere disponibilidad continua y conocimiento profundo del negocio.
- Qué internalizar primero: los asuntos de mayor volumen y menor especialización (revisión de contratos estándar, asesoría laboral recurrente, compliance regulatorio habitual) son los mejores candidatos para la internalización temprana.
- Qué mantener externalizado: los asuntos complejos y de baja frecuencia (M&A, litigios relevantes, reestructuraciones, asuntos regulatorios en jurisdicciones nuevas) siguen siendo más eficientes con despachos externos especializados.

**La primera contratación legal**

El primer abogado interno es una de las contrataciones más críticas de la empresa. Debe ser:

- Un generalista con profundidad: alguien que pueda gestionar contratos comerciales, aspectos laborales básicos, privacidad y compliance, y coordinar despachos externos en asuntos especializados.
- Orientado a negocio, no solo a riesgo: el abogado interno que solo dice "no" sin ofrecer soluciones alternativas se convierte en un cuello de botella. Busca alguien que entienda el balance entre riesgo jurídico y oportunidad de negocio.
- Con experiencia en empresas de tamaño similar: alguien que ha trabajado solo en grandes corporaciones puede no estar equipado para la ambigüedad y la velocidad de una empresa en crecimiento.

**Construir el equipo legal (2 a 10 personas)**

A medida que el equipo legal crece, especializa por área de mayor demanda:

- Comercial / contratos: gestión del ciclo de contratos con clientes y proveedores. Suele ser la mayor fuente de volumen de trabajo jurídico.
- Laboral: fundamental en empresas con crecimiento rápido de headcount, especialmente en múltiples jurisdicciones.
- Privacidad y protección de datos: área de creciente complejidad regulatoria y de alta demanda en empresas digitales.
- Propiedad intelectual: especialmente relevante en empresas de tecnología y con productos protegibles.
- Compliance y regulación sectorial: para empresas en sectores regulados (fintech, salud, alimentación).

**Procesos que escalan la cobertura legal sin escalar el equipo**

El mayor multiplicador de un equipo legal es la estandarización:

- Playbooks de contratos: documentos que describen la posición negociadora estándar de la empresa en cada tipo de contrato (qué cláusulas son aceptables, cuáles requieren escalada, cuáles son líneas rojas).
- Templates de contratos aprobados: versiones estándar de los contratos más frecuentes que el equipo de negocio puede usar sin revisión legal para cada instancia.
- Proceso de legal intake: un sistema claro para que cualquier área de la empresa pueda solicitar ayuda legal con la información necesaria para que el jurista pueda asesorar eficientemente.
- Self-service de compliance: documentación clara sobre las obligaciones de compliance que cada área de la empresa debe gestionar por sí misma (almacenamiento de datos, procesos de firma, requisitos de facturación).

**Gestión de los despachos externos a escala**

Incluso con equipo interno, los despachos externos son socios estratégicos. Para gestionarlos eficientemente:

- Panel reducido de despachos: mejor trabajar en profundidad con dos o tres despachos de confianza que distribuir el trabajo entre muchos.
- Acuerdos de tarifa plana por volumen: negocia tarifas fijas para asuntos recurrentes de bajo a medio volumen.
- Briefings completos: el tiempo que inviertes en briefar bien a un despacho externo se ahorra en rondas de preguntas y revisiones.

**Formato de salida esperado**

Genera: (1) un plan de desarrollo de la función legal para los próximos 18 meses con hitos de contratación y áreas de internalización, (2) una propuesta de proceso de legal intake para implementar en los próximos 30 días, y (3) una lista priorizada de templates de contratos que reducirían más el volumen de trabajo del equipo legal.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño y escalado del departamento legal interno',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Escalar customer success sin perder el toque personal ni la calidad del servicio',
                'description'       => 'Diseña la estrategia para hacer crecer el equipo y los procesos de customer success manteniendo relaciones auténticas con los clientes, preservando la calidad y controlando los costes a medida que la base de clientes se multiplica.',
                'prompt_content'    => <<<'EOT'
Actúa como un VP of Customer Success con experiencia en escalar organizaciones de éxito de cliente en empresas SaaS de diferentes tamaños y modelos de negocio. Tu objetivo es guiar a un responsable de customer success en la transición de un modelo artesanal de atención a un modelo escalable sin perder la calidad y la autenticidad en la relación con los clientes.

**El reto del escalado en customer success**

El customer success nace como una función de alta personalización: un CSM conoce profundamente a cada uno de sus clientes, anticipa sus necesidades y construye relaciones auténticas. El problema surge cuando la base de clientes crece más rápido que el equipo: sin un modelo escalable, la calidad se deteriora o los costes se disparan.

**Paso 1: Segmentación de clientes como base del modelo de atención**

El primer paso para escalar es reconocer que no todos los clientes merecen el mismo nivel de atención. Segmenta por valor y complejidad:

- Enterprise (alta inversión, alta complejidad): atención dedicada de un CSM senior, QBRs trimestrales, plan de éxito personalizado, acceso a liderazgo de la empresa.
- Mid-market: CSM compartido entre seis y quince cuentas, touchpoints proactivos mensuales, onboarding guiado, revisiones semestrales.
- SMB o self-serve: atención reactiva, onboarding automatizado, comunidad de usuarios, recursos de self-service. Sin CSM dedicado.

Cada segmento tiene un modelo de servicio diferente y un ratio de CSM por cliente diferente. Diseña el coste de atención de cada segmento y valida que es sostenible respecto al ARR que genera.

**Paso 2: Tecnología como palanca de escala**

Sin tecnología, el escalado de CS requiere contratar proporcionalmente a la base de clientes. Con la tecnología correcta, puedes hacer crecer la base de clientes sin un crecimiento lineal del equipo:

- Customer success platform (Gainsight, ChurnZero, Totango): centraliza los datos de salud de todos los clientes en un solo sistema y automatiza los playbooks de intervención.
- Health scoring automatizado: combina señales de producto (frecuencia de uso, breadth de adopción, días sin login), señales de soporte (volumen de tickets, tendencia), y señales de negocio (fecha de renovación, NPS) en un score único que prioriza la atención del CSM.
- Automated playbooks: secuencias automáticas de comunicación disparadas por eventos (primer login, milestone de adopción, caída de uso, 90 días antes de la renovación).
- In-app messaging: mensajes contextuales dentro del producto para guiar a los usuarios en momentos críticos sin intervención del CSM.

**Paso 3: El modelo de onboarding escalable**

El onboarding es el momento de mayor impacto en el churn a largo plazo. Diseñar un onboarding escalable es la inversión de mayor ROI en customer success:

- Define el milestone de time-to-value: qué acción o resultado indica que el cliente ha obtenido el valor esencial del producto por primera vez.
- Diseña el onboarding para llegar a ese milestone en el menor tiempo posible, con el menor esfuerzo del CSM posible.
- Onboarding por segmento: high-touch (kick-off en videollamada, sesiones de configuración guiada, check-ins semanales en el primer mes), mid-touch (kick-off en videollamada, onboarding automatizado con touchpoints en hitos clave), low-touch (onboarding completamente automatizado con recursos de self-service).

**Paso 4: Métricas de escalado del equipo de CS**

Monitoriza estos indicadores para evaluar si tu modelo de atención es sostenible y efectivo:

- Ratio de CSM por cliente por segmento y comparación con benchmarks del sector.
- Coste de atención por cliente (coste del equipo de CS dividido entre número de clientes) y comparación con el ARR por cliente.
- Net Revenue Retention por segmento: ¿qué segmento retiene y expande mejor?
- CSAT / NPS por canal de atención: ¿la atención automatizada ofrece una experiencia satisfactoria?
- Tiempo de resolución de tickets por canal.

**Paso 5: Desarrollo del equipo de CS a escala**

A medida que el equipo crece, necesita estructura de carrera:

- Define niveles de CSM con criterios objetivos: CSM, Senior CSM, Principal CSM o CSM Manager.
- Especialización: algunos CSMs se especializan en verticales de industria, otros en la fase de onboarding, otros en la gestión de renovaciones y expansión.
- Community management: para el segmento self-serve, considera un rol de community manager que gestione foros, eventos de usuarios y programas de clientes embajadores.

**Formato de salida esperado**

Genera: (1) una matriz de segmentación de clientes con el modelo de atención y ratio de CSM para cada segmento, (2) un diseño de onboarding por segmento con hitos, canales y responsables, y (3) un dashboard de métricas de salud del equipo de CS con valores de referencia.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseño del modelo de customer success escalable',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'De freelancer a agencia: el salto organizacional y operativo',
                'description'       => 'Aprende a gestionar la transición de trabajar solo como freelancer a construir un equipo o una agencia, con los desafíos operativos, financieros y de liderazgo que implica ese salto.',
                'prompt_content'    => <<<'EOT'
Actúa como un consultor de negocio especializado en el crecimiento de servicios profesionales independientes. Tu objetivo es guiar a un freelancer que quiere escalar su negocio contratando colaboradores o construyendo una agencia, abordando los desafíos operativos, financieros y de liderazgo que implica ese salto.

**El dilema del crecimiento para el freelancer**

El mayor límite del modelo freelance es el tiempo: hay un techo natural de ingresos determinado por las horas disponibles y la tarifa por hora. Para crecer más allá de ese techo, necesitas apalancarte en el trabajo de otros. Pero escalar no es solo contratar personas: es transformar fundamentalmente cómo funciona tu negocio.

**Antes de contratar: ¿estás listo para escalar?**

El escalado prematuro es uno de los errores más costosos. Antes de contratar a tu primer colaborador, asegúrate de:

- Tener demanda consistente que supera tu capacidad: si rechazas proyectos regularmente por falta de tiempo, es la señal más clara de que estás listo para escalar.
- Haber documentado tu proceso de trabajo: si no puedes describir paso a paso cómo produces tu trabajo, no podrás delegarlo ni enseñarlo a nadie.
- Tener suficiente capital de trabajo: incorporar colaboradores antes de cobrar de los proyectos que van a ejecutar requiere financiación del periodo de espera.
- Estar dispuesto a dejar de hacer: el mayor reto del escalado para los freelancers es que para crecer debes dejar de hacer lo que más te gusta y empezar a gestionar a otros.

**El primer colaborador: subcontratación vs. contratación**

Tienes dos opciones para tu primer apalancamiento:

- Subcontratación a otro freelancer: menor compromiso financiero, mayor flexibilidad. Ideal para comenzar. El riesgo es la dependencia de alguien externo y la menor integración con tu forma de trabajar.
- Contratación de un empleado: mayor estabilidad y control, mayor compromiso financiero y responsabilidad. Apropiado cuando tienes demanda suficientemente estable para justificar un compromiso fijo.

Comienza con subcontratación para testear la demanda y validar que puedes gestionar trabajo a través de otros antes de asumir el compromiso de una contratación.

**Rediseñar el modelo de negocio para la escala**

El modelo de negocio del freelancer (vender tiempo) no escala. Necesitas evolucionar hacia:

- Vender proyectos con precio fijo: un precio por el resultado, no por las horas. Esto te permite mejorar la rentabilidad mejorando la eficiencia del equipo.
- Paquetes de servicios estandarizados: en lugar de proyectos completamente a medida para cada cliente, diseña servicios modulares que tu equipo pueda ejecutar de forma repetible.
- Modelo de retainer: clientes con contrato mensual recurrente que proporciona ingresos predecibles para planificar la capacidad del equipo.
- Escalado del conocimiento, no solo del tiempo: cursos, templates, workshops grupales, comunidades de membresía. Estos productos generan ingresos desconectados de tu tiempo directo.

**Gestión financiera en la transición a agencia**

La transición financiera es el mayor riesgo del escalado:

- El punto de equilibrio sube: tus costes fijos crecen (salarios, herramientas, espacio de trabajo) antes de que los ingresos crezcan proporcionalmente.
- El ciclo de caja se complica: pagas a tu equipo antes de cobrar de los clientes. Necesitas colchón de caja o financiación de capital de trabajo.
- La tarifa efectiva baja inicialmente: mientras tu equipo se forma y gana eficiencia, el margen por proyecto es menor que cuando trabajabas solo.
- Tu ingreso personal se desacopla de los ingresos de la empresa: necesitas pagarte un salario fijo desde la empresa, no extraer todo el beneficio mensualmente.

**El reto del liderazgo: de hacedor a director**

El mayor cambio personal del salto de freelancer a agencia es dejar de ser el mejor ejecutor para convertirte en alguien que hace trabajar bien a otros:

- Aprende a delegar sin microgestionar: da contexto, criterios de éxito y plazos, luego da espacio.
- Desarrolla la habilidad de dar feedback: tu equipo necesita saber cuándo su trabajo cumple con el estándar y cuándo no, con claridad y sin ambigüedad.
- Invierte en la cultura desde el principio: los primeros dos o tres colaboradores establecen el tono de toda la agencia futura.

**Formato de salida esperado**

Genera: (1) un plan de transición en cuatro fases (evaluación, primer colaborador, primer equipo, agencia consolidada) con hitos y criterios de avance entre fases, (2) un modelo financiero simplificado que proyecte ingresos, costes y margen neto en los primeros 12 meses de escalado, y (3) una lista de los cinco procesos que debes documentar antes de tu primera contratación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Transición de freelancer a agencia: estrategia y operaciones',
                'vote_score'        => 47,
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
