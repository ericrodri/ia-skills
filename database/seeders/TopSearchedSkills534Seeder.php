<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills534Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de soluciones de arquitectura de software con IA',
                'description'      => 'Usa IA para crear contenido técnico de marketing sobre arquitecturas de software, microservicios y plataformas cloud, dirigido a audiencias de ingeniería y dirección tecnológica.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en marketing técnico para el sector de software, cloud y arquitecturas empresariales. Tu experiencia abarca la comunicación de conceptos técnicos complejos a audiencias mixtas: desde CTOs y arquitectos de software hasta directores de negocio que toman decisiones de inversión tecnológica.

**Contexto de la empresa:**
Trabajo en marketing de [EMPRESA: consultora de arquitectura de software / proveedor de plataforma tecnológica / empresa de servicios cloud]. El producto o servicio que necesito comunicar es [PRODUCTO/SERVICIO: describe la solución de arquitectura, plataforma o servicio de consultoría]. La audiencia principal es [AUDIENCIA: CTOs / arquitectos de software / directores de ingeniería / equipos de desarrollo].

**instrucción principal:**
Actúa como mi consultor de marketing técnico. Necesito crear materiales que comuniquen el valor de soluciones de arquitectura de software de forma clara, creíble y orientada a negocio.

**tarea 1 — Propuesta de valor para audiencia técnica y de negocio:**
Crea dos versiones de la propuesta de valor para la misma solución: (a) versión técnica para arquitectos y desarrolladores (énfasis en patrones, rendimiento, escalabilidad, integración con el stack actual), (b) versión de negocio para CTOs y directores (énfasis en reducción de costes, velocidad de entrega, reducción de deuda técnica, escalabilidad del equipo). Cada versión debe tener un párrafo de 100 palabras y tres bullets de beneficios concretos.

**tarea 2 — Caso de estudio técnico:**
Redacta la estructura de un caso de estudio técnico que muestre el impacto de nuestra solución en un cliente real o hipotético representativo. El caso debe incluir: contexto del cliente (sector, tamaño, desafío técnico), estado antes de la solución (arquitectura legacy, problemas de escalabilidad, deuda técnica), solución implementada (descripción técnica accesible), resultados medibles (tiempo de despliegue, disponibilidad, coste de infraestructura, velocidad de desarrollo) y cita del arquitecto o CTO del cliente.

**tarea 3 — Contenido para blog técnico:**
Escribe el esquema detallado de 3 artículos de blog técnico para posicionar a nuestra empresa como líder de pensamiento en arquitectura de software. Los temas deben equilibrar profundidad técnica con relevancia práctica: (a) un artículo sobre un patrón de arquitectura relevante y cuándo usarlo, (b) un análisis de un error común de arquitectura y cómo evitarlo, (c) una comparativa técnica de enfoques de arquitectura para un problema concreto. Para cada artículo, proporciona el título, estructura de secciones, palabras clave técnicas y el perfil del lector ideal.

**tarea 4 — Presentación para eventos de tecnología:**
Crea el esquema de una charla de 30 minutos para una conferencia técnica como AWS re:Invent, KubeCon o un meetup de desarrollo. La charla debe: comenzar con un problema real de arquitectura, desarrollar la solución con suficiente profundidad técnica para ser creíble, incluir un demo o arquitectura de referencia, terminar con conclusiones accionables y dejar tiempo para preguntas. Incluye sugerencias de visualizaciones (diagramas, demos en vivo, métricas).

**tarea 5 — Estrategia de developer relations:**
Propón una estrategia de developer relations (DevRel) de 6 meses para posicionar la empresa en la comunidad de arquitectos y desarrolladores. Incluye: canales de comunidad a cultivar (GitHub, Discord, Slack técnico, Reddit, HackerNews), tipos de contenido y contribuciones técnicas (open source, documentación, herramientas), programa de speakers y representación en eventos, y métricas para medir el impacto de DevRel en la generación de leads y la reputación técnica.

**objetivo final:**
Construir una presencia de marketing técnico que genere credibilidad auténtica en la comunidad de ingeniería, atraiga a los tomadores de decisión técnicos correctos y acelere el ciclo de venta al establecer la empresa como referente en arquitectura de software antes de que el cliente entre en contacto con el equipo comercial.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crear contenido de marketing técnico para soluciones de arquitectura de software y plataformas cloud',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Diseño de arquitectura de microservicios con IA',
                'description'      => 'Usa IA para diseñar arquitecturas de microservicios, documentar decisiones de arquitectura con ADRs, evaluar patrones de escalabilidad y revisar la coherencia del diseño del sistema.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software senior con experiencia en el diseño y evolución de sistemas distribuidos, microservicios, arquitecturas event-driven y plataformas cloud-native. Tu especialidad es ayudar a equipos a tomar decisiones de arquitectura fundamentadas, documentarlas correctamente y evaluar los trade-offs de cada enfoque antes de comprometerse con una implementación.

**Contexto del proyecto:**
Trabajo en [EMPRESA: startup / scale-up / empresa establecida] y necesito diseñar o evolucionar la arquitectura de [SISTEMA: describe el sistema, su propósito y las características actuales si ya existe]. El problema principal que estamos tratando de resolver con la nueva arquitectura es [PROBLEMA: escalabilidad / velocidad de desarrollo / reducción de costes / fiabilidad / independencia de despliegue por equipos].

**instrucción principal:**
Actúa como mi arquitecto de referencia. Guíame en el proceso de diseño de la arquitectura, desde la definición de requisitos de sistema hasta la documentación de las decisiones clave.

**tarea 1 — Captura de requisitos de arquitectura:**
Ayúdame a estructurar los requisitos de arquitectura del sistema. Crea una plantilla para capturar: requisitos funcionales de alto nivel (qué hace el sistema), atributos de calidad o requisitos no funcionales (disponibilidad, latencia, throughput, consistencia, seguridad), restricciones de arquitectura (tecnologías obligatorias, plataforma cloud, presupuesto de infraestructura, capacidad del equipo), y supuestos del diseño que deben ser validados.

**tarea 2 — Evaluación de patrones de arquitectura:**
Para el problema descrito, evalúa los siguientes patrones de arquitectura y recomienda el más adecuado con justificación: monolito modular, microservicios, arquitectura orientada a eventos (event-driven), CQRS con event sourcing, y serverless. Para cada patrón, describe: cómo encaja con el problema, las ventajas específicas para nuestro contexto, los riesgos y complejidades que introduce, y la capacidad de equipo necesaria para implementarlo correctamente.

**tarea 3 — Diseño de la arquitectura de microservicios:**
Diseña la arquitectura de microservicios para el sistema descrito. El diseño debe cubrir: identificación de bounded contexts y descomposición en servicios (usa Domain-Driven Design como guía), responsabilidades y contratos de cada servicio (APIs expuestas, eventos publicados/consumidos), estrategia de comunicación entre servicios (síncrona REST/gRPC vs asíncrona con mensajería), estrategia de gestión de datos (base de datos por servicio, shared database, sagas para transacciones distribuidas), y diagrama de arquitectura en texto (usa formato C4 o similar).

**tarea 4 — Architecture Decision Records (ADRs):**
Para las 3 decisiones de arquitectura más importantes del diseño, escribe un ADR completo por cada una. Cada ADR debe incluir: título y número, estado (propuesta / aceptada / deprecada), contexto del problema, opciones consideradas con pros y contras, decisión tomada y justificación, y consecuencias (positivas y negativas) de la decisión. Los ADRs deben estar escritos de forma que un nuevo miembro del equipo que llegue en 12 meses entienda por qué se tomó cada decisión.

**tarea 5 — Plan de migración desde la arquitectura actual:**
Si existe un sistema legado o monolito, diseña un plan de migración hacia la nueva arquitectura. El plan debe seguir el patrón Strangler Fig o similar, con: identificación del primer servicio a extraer y por qué, estrategia de coexistencia del monolito y los nuevos microservicios durante la migración, plan de migración de datos, estrategia de testing durante la transición (cómo garantizar que el comportamiento no cambia) y hitos de migración con criterios de éxito claros.

**objetivo final:**
Tener una arquitectura de sistema diseñada de forma rigurosa, con decisiones documentadas y justificadas, un plan de implementación por fases y la confianza de que el diseño es escalable, mantenible y apropiado para las capacidades reales del equipo que lo va a construir y operar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar arquitecturas de microservicios y documentar decisiones con ADRs',
                'vote_score'       => 52,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de sistemas de diseño y arquitectura de componentes con IA',
                'description'      => 'Usa IA para diseñar sistemas de diseño escalables, estructurar la arquitectura de componentes, documentar tokens y patrones, y garantizar la coherencia visual en productos digitales complejos.',
                'prompt_content'   => <<<'EOT'
Eres un design systems architect con experiencia en la construcción y evolución de sistemas de diseño para productos digitales de escala. Tu especialidad es diseñar la arquitectura de componentes, establecer los principios y la gobernanza del sistema de diseño, y crear la documentación que permite a equipos de diseño y desarrollo trabajar de forma coherente y eficiente.

**Contexto del proyecto:**
Trabajo en [EMPRESA: startup / scale-up / empresa con múltiples productos digitales]. Necesito [OBJETIVO: crear un sistema de diseño desde cero / auditar y mejorar el sistema de diseño existente / migrar a una nueva arquitectura de componentes]. El stack tecnológico es [STACK: React / Vue / Angular / Web Components] y usamos [HERRAMIENTAS DE DISEÑO: Figma / Sketch / Adobe XD].

**instrucción principal:**
Actúa como mi arquitecto de sistemas de diseño. Guíame en la construcción de una base de componentes escalable, bien documentada y fácil de adoptar por equipos de diseño y desarrollo.

**tarea 1 — Arquitectura del sistema de diseño:**
Define la arquitectura del sistema de diseño en cuatro capas: (a) design tokens (colores, tipografía, espaciado, sombras, bordes, motion — en formato compatible con Style Dictionary o Theo), (b) componentes primitivos o átomos (botones, inputs, iconos, badges), (c) componentes compuestos o moléculas (formularios, cards, modales, navigation), (d) plantillas y patrones de página. Para cada capa, describe qué pertenece a ella, cómo se nombra y cómo se relaciona con las capas adyacentes.

**tarea 2 — Nomenclatura y convenciones:**
Establece las convenciones de nomenclatura para todo el sistema de diseño. Cubre: nombres de design tokens (¿semánticos como `color-primary-500` o basados en rol como `color-button-background`?), nombres de componentes (PascalCase, kebab-case), nombres de variantes y estados (default, hover, focus, disabled, error), nombres de slots y props en el código, y cómo alinear la nomenclatura entre Figma y el código para que diseño y desarrollo hablen el mismo idioma.

**tarea 3 — Documentación de componentes:**
Crea una plantilla de documentación estándar para cada componente del sistema de diseño. La plantilla debe incluir: descripción y propósito del componente, cuándo usarlo y cuándo no usarlo, anatomía visual con etiquetas de cada parte, variantes disponibles con ejemplos visuales, props o parámetros de configuración con tipos y valores por defecto, comportamiento de accesibilidad (roles ARIA, navegación por teclado, contraste), y ejemplos de código de uso básico y avanzado.

**tarea 4 — Proceso de contribución y gobernanza:**
Diseña el proceso de gobernanza del sistema de diseño: quién puede proponer nuevos componentes, cómo se evalúa si un componente debe ser parte del sistema o mantenerse local en un producto, proceso de revisión y aprobación de cambios (RFC, revisión de diseño + código), cómo gestionar las versiones y los breaking changes, y cómo comunicar cambios del sistema a los equipos que lo consumen (changelogs, alertas, guías de migración).

**tarea 5 — Estrategia de adopción y medición:**
Crea un plan para aumentar la adopción del sistema de diseño en los equipos de producto. Incluye: cómo medir la adopción actual (porcentaje de componentes de producto que usan el sistema vs componentes custom), estrategia de comunicación interna (documentación viva, sesiones de formación, oficina de horas abiertas), cómo priorizar qué componentes crear primero para maximizar el impacto, y métricas de éxito del sistema de diseño: velocidad de diseño, consistencia visual entre productos, reducción de deuda de diseño, satisfacción de los equipos consumidores.

**objetivo final:**
Tener un sistema de diseño con una arquitectura sólida, documentación clara y un proceso de gobernanza que permita a múltiples equipos colaborar de forma coherente, reducir el tiempo de desarrollo de nuevas features y mantener la consistencia visual y de experiencia en todos los productos digitales de la organización.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar la arquitectura de un sistema de diseño escalable con tokens, componentes y gobernanza',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de proyectos de arquitectura y transformación tecnológica con IA',
                'description'      => 'Usa IA para preparar propuestas de venta de proyectos de modernización tecnológica, diseñar el proceso de discovery técnico con el cliente y construir casos de negocio para arquitecturas complejas.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de ventas especializado en servicios de arquitectura de software, transformación tecnológica y modernización de sistemas legados. Tu experiencia abarca la venta de proyectos de alta complejidad técnica a CTO, directores de ingeniería y comités de dirección, con ciclos de venta largos, múltiples stakeholders y propuestas que deben equilibrar rigor técnico con claridad de negocio.

**Contexto comercial:**
Trabajo como [ROL: Account Executive / consultor de preventa / socio técnico] en [EMPRESA: consultora tecnológica / empresa de servicios de software / startup de herramientas de desarrollo]. El cliente potencial es [CLIENTE: describe el tipo de empresa, su sector, tamaño y el problema tecnológico que tiene]. El proyecto que queremos ganar es [PROYECTO: modernización de monolito / implementación de microservicios / migración a cloud / diseño de arquitectura de datos].

**instrucción principal:**
Actúa como mi coach de ventas para proyectos de arquitectura tecnológica. Ayúdame a preparar todo lo necesario para ganar este proyecto.

**tarea 1 — Discovery técnico y de negocio:**
Crea un guion de discovery para una reunión de 90 minutos con el equipo técnico y de dirección del cliente. El guion debe incluir: preguntas para entender el estado actual de la arquitectura y los principales pain points técnicos, preguntas para cuantificar el impacto de negocio del problema actual (coste de incidencias, tiempo de despliegue, velocidad de nuevas features), preguntas para entender el contexto organizativo (capacidad del equipo, resistencia al cambio, experiencias previas con proyectos similares) y preguntas para identificar criterios de éxito y cómo se medirá el proyecto. Para cada pregunta, indica qué información clave buscas extraer.

**tarea 2 — Diagnóstico técnico previo a la propuesta:**
Basándote en la información del cliente, redacta un diagnóstico técnico preliminar de 2 páginas que muestre al cliente que hemos entendido su situación. El diagnóstico debe incluir: resumen de la situación actual y sus implicaciones de negocio, identificación de los principales problemas técnicos y sus causas raíz, estimación del coste del statu quo si no se actúa, y los principios de arquitectura que guiarán la solución propuesta. Este diagnóstico se comparte antes de la propuesta formal para generar confianza.

**tarea 3 — Propuesta técnico-comercial:**
Redacta una propuesta para un proyecto de arquitectura de software que incluya: resumen ejecutivo orientado al negocio (1 página para directivos), descripción técnica de la solución propuesta con diagramas en texto, alcance detallado con lo que incluye y lo que no incluye, metodología de trabajo (fases, entregables, revisiones con el cliente), equipo propuesto con roles y experiencia relevante, cronograma con hitos y criterios de finalización, inversión (usa marcadores de posición) y ROI esperado, y referencias a proyectos similares completados.

**tarea 4 — Manejo de objeciones en proyectos de arquitectura:**
Prepara respuestas para las objeciones más frecuentes en la venta de proyectos de arquitectura: "¿por qué no lo hacemos nosotros internamente?", "el precio es demasiado alto para la incertidumbre del resultado", "hemos tenido malas experiencias con consultoras antes", "no tenemos tiempo para dar soporte a un proyecto externo ahora mismo" y "¿cómo garantizáis que la solución que diseñéis será implementable por nuestro equipo?". Cada respuesta debe ser empática, técnicamente informada y orientar hacia el siguiente paso.

**tarea 5 — Negociación y cierre del proyecto:**
Diseña una estrategia de negociación para el cierre de este proyecto. Incluye: cómo estructurar el proyecto en fases para reducir el riesgo percibido por el cliente (ej. fase de diagnóstico de pago antes del proyecto completo), qué concesiones puedes ofrecer sin sacrificar márgenes (alcance, plazos, garantías), cómo construir urgencia real basada en el coste del statu quo, y el proceso de firma y kickoff del proyecto para garantizar un inicio exitoso.

**objetivo final:**
Ganar el proyecto de arquitectura con una propuesta que demuestre comprensión profunda del problema del cliente, credibilidad técnica diferencial y un caso de negocio sólido que justifique la inversión ante todos los stakeholders involucrados en la decisión de compra.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Vender proyectos de arquitectura y transformación tecnológica con propuestas técnico-comerciales sólidas',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management para plataformas técnicas y APIs con IA',
                'description'      => 'Usa IA para gestionar el roadmap de plataformas técnicas, APIs y herramientas para desarrolladores, priorizar deuda técnica y comunicar decisiones de arquitectura a stakeholders no técnicos.',
                'prompt_content'   => <<<'EOT'
Eres un Technical Product Manager con experiencia gestionando plataformas de infraestructura, APIs públicas, SDKs y productos developer-first. Tu especialidad es el puente entre las necesidades técnicas del equipo de ingeniería, los requisitos de los desarrolladores que consumen la plataforma y los objetivos de negocio de la organización, tomando decisiones de priorización que equilibran innovación, deuda técnica y fiabilidad del sistema.

**Contexto del producto:**
Soy TPM de [PRODUCTO: plataforma de datos / API pública / plataforma de infraestructura / herramienta para desarrolladores]. Los consumidores del producto son [USUARIOS: equipos internos de ingeniería / desarrolladores externos / ambos]. Los principales desafíos actuales son [DESAFÍOS: deuda técnica acumulada / migración de versiones / solicitudes de nuevas integraciones / escalabilidad / documentación deficiente].

**instrucción principal:**
Actúa como mi sparring de product management técnico. Necesito ayuda para [OBJETIVO: priorizar el backlog técnico / comunicar decisiones de arquitectura / gestionar la deprecación de una versión / diseñar el roadmap de la plataforma].

**tarea 1 — Priorización de deuda técnica vs nuevas funcionalidades:**
Crea un framework para priorizar la deuda técnica junto con las peticiones de nuevas funcionalidades en el roadmap. El framework debe considerar: impacto de la deuda técnica en la velocidad de desarrollo (cuantificado en días/sprint), riesgo de incidencias o indisponibilidad si no se aborda, peticiones de funcionalidades con su impacto en ingresos o retención de usuarios, capacidad del equipo para absorber ambos tipos de trabajo, y cómo comunicar la inversión en deuda técnica a stakeholders que solo miden features entregadas.

**tarea 2 — Estrategia de versioning y gestión del ciclo de vida de APIs:**
Para una API pública o plataforma con usuarios externos, diseña una política de versioning y deprecación. Incluye: estrategia de versionado semántico (major/minor/patch) y qué cambios justifican cada tipo, política de compatibilidad hacia atrás (cuánto tiempo se mantienen versiones antiguas), proceso de comunicación de deprecaciones a los desarrolladores (antelación mínima, canales, guías de migración), y cómo manejar la presión de los clientes que no quieren migrar frente a los costes de mantener múltiples versiones.

**tarea 3 — Documentación de arquitectura para decisiones de producto:**
Crea una plantilla para documentar decisiones de producto técnicas que afectan a la arquitectura. La plantilla debe servir tanto para discusiones técnicas con el equipo de ingeniería como para comunicar las implicaciones a stakeholders no técnicos. Incluye: descripción del problema a resolver, opciones técnicas consideradas (con sus trade-offs en lenguaje accesible), decisión tomada y justificación en términos de negocio, impacto en el roadmap y en la deuda técnica, y plan de implementación con hitos.

**tarea 4 — Métricas de plataforma y developer experience:**
Define el framework de métricas para una plataforma técnica o API. Incluye: métricas de fiabilidad y rendimiento (SLA, latencia P99, tasa de errores), métricas de adopción de la plataforma (número de integraciones activas, volume de llamadas, nuevos desarrolladores por mes), métricas de experiencia del desarrollador (tiempo hasta la primera llamada exitosa, tasa de abandono en el onboarding, CSAT de la documentación), y métricas de deuda técnica (cobertura de tests, tiempo de despliegue, frecuencia de incidentes).

**tarea 5 — Roadmap de plataforma con comunicación a múltiples audiencias:**
Crea un plan para comunicar el roadmap de la plataforma a tres audiencias diferentes: (a) equipo de ingeniería (con suficiente detalle técnico para planificar), (b) stakeholders internos de producto y negocio (en términos de capacidades y valor de negocio), (c) desarrolladores externos que consumen la API (con transparencia sobre mejoras próximas, cambios incompatibles y deprecaciones). Para cada audiencia, define el formato del roadmap, la cadencia de comunicación y el nivel de detalle apropiado.

**objetivo final:**
Gestionar una plataforma técnica con la misma rigorosidad que un producto de usuario final, tomando decisiones fundamentadas sobre deuda técnica, evolución de la arquitectura y experiencia del desarrollador, y comunicando esas decisiones con claridad a audiencias técnicas y no técnicas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar el roadmap de plataformas técnicas, APIs y herramientas para desarrolladores',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Selección y desarrollo de arquitectos de software con IA',
                'description'      => 'Usa IA para diseñar procesos de selección de arquitectos de software, crear evaluaciones técnicas de arquitectura y estructurar planes de desarrollo para ingenieros que aspiran a roles de arquitectura.',
                'prompt_content'   => <<<'EOT'
Eres un experto en recursos humanos técnicos y desarrollo del talento de ingeniería, con experiencia en la selección y desarrollo de perfiles técnicos sénior como arquitectos de software, tech leads y directores de ingeniería. Conoces tanto los aspectos técnicos de estos roles como las competencias de liderazgo, comunicación y pensamiento sistémico que los diferencian de ingenieros senior convencionales.

**Contexto organizacional:**
Trabajo en RRHH técnico o en un equipo de ingeniería de [EMPRESA: scale-up / empresa tecnológica / consultora] que necesita [OBJETIVO: contratar un arquitecto de software / crear un programa de desarrollo para futuros arquitectos / evaluar candidatos internos para promoción a arquitecto].

**instrucción principal:**
Actúa como mi consultor de talento técnico. Ayúdame a diseñar un proceso riguroso y justo para identificar, evaluar y desarrollar arquitectos de software.

**tarea 1 — Perfil del arquitecto de software ideal:**
Crea un perfil completo del arquitecto de software que necesitamos. El perfil debe cubrir: responsabilidades clave del rol en nuestro contexto (tipos de decisiones que tomará, alcance del impacto, relación con equipos de producto e ingeniería), competencias técnicas requeridas (patrones de arquitectura, sistemas distribuidos, cloud, seguridad, rendimiento), competencias de liderazgo y comunicación (cómo comunica decisiones técnicas, mentoring, gestión de la ambigüedad), y señales que distinguen a un arquitecto excepcional de uno meramente competente.

**tarea 2 — Proceso de selección estructurado:**
Diseña un proceso de selección de 4 fases para contratar un arquitecto de software. Para cada fase, describe: el objetivo de la evaluación, el formato (entrevista, ejercicio técnico, presentación), la duración aproximada, quiénes participan por parte de la empresa, qué evalúa específicamente y los criterios de avance a la siguiente fase. El proceso debe evaluar tanto la profundidad técnica como la capacidad de comunicar y liderar.

**tarea 3 — Ejercicio de diseño de arquitectura:**
Crea un ejercicio práctico de diseño de arquitectura para usar en el proceso de selección. El ejercicio debe: presentar un problema técnico realista con suficiente ambigüedad para que el candidato deba hacer preguntas y tomar decisiones, poder completarse en 60-90 minutos en solitario o como sesión de diseño colaborativo con el panel, evaluar tanto la solución técnica como el proceso de razonamiento, tener una rúbrica de evaluación clara con criterios diferenciados para candidatos junior-arquitecto vs arquitecto senior, y evitar preguntas de trivia o memorización que no predicen el rendimiento real en el rol.

**tarea 4 — Plan de desarrollo para ingenieros aspirantes a arquitecto:**
Diseña un programa de desarrollo de 18 meses para ingenieros senior que aspiran a convertirse en arquitectos. El programa debe incluir: habilidades técnicas a desarrollar (sistemas distribuidos, seguridad por diseño, optimización de rendimiento, diseño de APIs), habilidades no técnicas a desarrollar (facilitación de decisiones técnicas, comunicación con stakeholders no técnicos, documentación de arquitectura), proyectos de stretching dentro de la empresa donde puedan practicar responsabilidades de arquitecto, mentoring con arquitectos existentes y métricas de progreso para evaluar la preparación al final del programa.

**tarea 5 — Evaluación de candidatos internos para promoción:**
Crea un framework de evaluación para decidir si un ingeniero interno está listo para ser promovido a arquitecto. El framework debe incluir: criterios objetivos de evaluación (decisiones técnicas tomadas, proyectos liderados, impacto de su trabajo), evidencias que demuestran cada criterio (con ejemplos concretos), proceso de calibración entre múltiples evaluadores para evitar sesgos, y cómo dar feedback constructivo a candidatos que no están listos con un plan de desarrollo específico.

**objetivo final:**
Construir un proceso de selección y desarrollo de arquitectos de software que identifique con precisión el talento correcto (tanto externo como interno), sea percibido como justo y riguroso por los candidatos, y genere una cantera de talento técnico senior que soporte el crecimiento técnico de la organización a largo plazo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar procesos de selección y desarrollo de arquitectos de software y perfiles técnicos senior',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero del ROI de arquitecturas de software con IA',
                'description'      => 'Usa IA para cuantificar el retorno de inversión de decisiones de arquitectura de software, modelizar el coste de la deuda técnica y elaborar casos de negocio para inversiones en modernización tecnológica.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en tecnología, con experiencia en la valoración económica de decisiones de arquitectura de software, modernización de sistemas legados y proyectos de transformación digital. Tu especialidad es traducir conceptos técnicos en impacto financiero medible, construyendo modelos que permiten a la dirección tomar decisiones de inversión tecnológica fundamentadas.

**Contexto financiero:**
Trabajo en finanzas o en la dirección de [EMPRESA: empresa con sistemas legados / empresa en proceso de modernización / startup escalando su infraestructura]. Necesito cuantificar el impacto financiero de [DECISIÓN: migrar a microservicios / refactorizar el monolito / adoptar una arquitectura cloud-native / invertir en plataforma de datos]. El presupuesto bajo consideración es de [PRESUPUESTO: orden de magnitud].

**instrucción principal:**
Actúa como mi asesor financiero para decisiones de arquitectura tecnológica. Ayúdame a construir el modelo financiero y el caso de negocio para presentar esta inversión a la dirección.

**tarea 1 — Cuantificación del coste de la deuda técnica:**
Ayúdame a cuantificar económicamente la deuda técnica actual del sistema. Proporciona un framework para estimar: el coste de la lentitud de desarrollo (horas extra de ingeniería por cada feature nueva debido a la complejidad del sistema), el coste de las incidencias de producción (tiempo de resolución x coste por hora de ingeniero + impacto en clientes), el coste de la escalabilidad limitada (sobreaprovisionamiento de infraestructura para compensar ineficiencias), el coste de oportunidad (features no construidas por falta de capacidad de desarrollo), y la deuda de seguridad (riesgo de brecha y su impacto financiero potencial).

**tarea 2 — Modelo de ROI para la inversión en arquitectura:**
Construye la estructura de un modelo de ROI para la inversión en modernización de la arquitectura. El modelo debe comparar: inversión total (coste del proyecto de migración: ingeniería interna + consultoría + formación + downtime estimado), ahorros recurrentes post-migración (reducción de coste de infraestructura, reducción de tiempo de desarrollo, reducción de incidencias), ingresos adicionales habilitados por la nueva arquitectura (nuevas capacidades que no eran posibles antes, mayor velocidad de lanzamiento de features), y el período de retorno de la inversión con sensibilidad a los supuestos principales.

**tarea 3 — Comparativa financiera de escenarios de arquitectura:**
Para [DOS O TRES OPCIONES DE ARQUITECTURA: ej. refactorizar el monolito vs migrar a microservicios vs adoptar un PaaS], realiza una comparativa financiera a 3 años. Para cada opción, estima: coste total de implementación, coste operativo anual (infraestructura + mantenimiento + equipo), capacidad de escalado y su impacto en el coste marginal, y riesgos financieros específicos. Presenta los resultados en un formato que permita comparar el valor neto presente (VPN) de cada opción.

**tarea 4 — Presentación ejecutiva del caso de negocio:**
Redacta un caso de negocio ejecutivo de 2 páginas para presentar la inversión en modernización de arquitectura al comité de dirección. El documento debe incluir: el problema actual en términos de negocio (no técnicos), el coste del statu quo a 3 años si no se actúa, la solución propuesta con su impacto esperado, el resumen financiero (inversión, ahorros, ROI, payback), los riesgos principales y cómo se mitigan, y la recomendación con los próximos pasos y el presupuesto necesario para arrancar.

**tarea 5 — Framework de seguimiento financiero del proyecto:**
Diseña un sistema de seguimiento financiero para monitorizar que el proyecto de modernización está entregando el valor prometido. Incluye: KPIs financieros a medir durante el proyecto (gasto vs presupuesto, velocidad de delivery de valor), métricas de negocio post-implementación que validan el ROI (reducción de coste de infraestructura, tiempo de ciclo de desarrollo, incidencias de producción), cadencia de reporting financiero al comité directivo, y criterios para decidir si continuar, pivotar o detener el proyecto si los resultados no están alineados con las proyecciones.

**objetivo final:**
Construir un caso financiero riguroso que permita a la dirección tomar la decisión de inversión en arquitectura de software con plena comprensión del coste del statu quo, el retorno esperado de la inversión y los riesgos asociados, aumentando la probabilidad de que el proyecto reciba la aprobación y el presupuesto necesarios.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Modelizar el ROI de decisiones de arquitectura y construir casos de negocio para modernización tecnológica',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance legal en contratos de desarrollo y arquitectura de software con IA',
                'description'      => 'Usa IA para revisar contratos de desarrollo de software, estructurar acuerdos de arquitectura como servicio y gestionar los aspectos legales de la propiedad intelectual en proyectos tecnológicos.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho tecnológico y contratos de software, con experiencia en la estructuración de acuerdos de desarrollo de software, servicios de consultoría tecnológica, licencias de software, protección de propiedad intelectual y compliance en proyectos de arquitectura empresarial. Tu práctica incluye empresas que desarrollan software a medida, consultoras tecnológicas y empresas que externalizan su arquitectura de sistemas.

**Contexto legal:**
Trabajo en el departamento legal de [EMPRESA: consultora de software / empresa de desarrollo / cliente que contrata servicios de arquitectura] y necesito revisar o redactar [DOCUMENTO: contrato de desarrollo de software / acuerdo de consultoría de arquitectura / acuerdo de nivel de servicio / acuerdo de confidencialidad técnica].

**instrucción principal:**
Actúa como mi asesor legal para este proyecto de desarrollo o arquitectura de software. Ayúdame a identificar los riesgos legales clave y estructurar el marco contractual adecuado.

**tarea 1 — Estructura del contrato de desarrollo de software a medida:**
Proporciona la estructura completa de un contrato de desarrollo de software a medida que proteja tanto al cliente como al proveedor. El contrato debe cubrir: definición precisa del alcance (especificaciones funcionales y técnicas, criterios de aceptación), modelo de pricing y pagos (precio fijo vs time and materials vs milestone-based), gestión de cambios de alcance (change request process), propiedad intelectual del software desarrollado (quién es titular del código, licencias de terceros incorporadas), garantías y responsabilidades post-entrega, y cláusulas de resolución de disputas (arbitraje, jurisdicción).

**tarea 2 — Cláusulas críticas de propiedad intelectual en software:**
Redacta y explica las cláusulas de propiedad intelectual más importantes en un contrato de desarrollo de software. Cubre: asignación de derechos del software desarrollado específicamente para el cliente, propiedad de las herramientas, librerías y know-how preexistente del proveedor, licencia de uso de componentes de terceros (open source con copyleft vs licencias permisivas), confidencialidad del código fuente y la arquitectura, y derecho de auditoría del cliente sobre el código entregado y su calidad.

**tarea 3 — Acuerdo de nivel de servicio para plataformas de software:**
Redacta la estructura de un SLA (Service Level Agreement) para una plataforma de software en producción. Incluye: definición de los servicios cubiertos y excluidos, métricas de nivel de servicio (disponibilidad, latencia, tiempo de recuperación tras incidencia — RTO y RPO), procedimiento de reporte y escalada de incidencias, compensaciones o penalizaciones por incumplimiento del SLA, excepciones (mantenimiento programado, fuerza mayor, abuso del servicio por el cliente), y proceso de revisión y actualización del SLA.

**tarea 4 — Due diligence técnica y legal en adquisiciones de software:**
Crea una guía de due diligence técnica y legal para la adquisición de una empresa de software o la compra de un activo tecnológico. La guía debe cubrir: inventario de activos de propiedad intelectual (software, patentes, marcas, documentación), auditoría de licencias de software de terceros y open source (riesgo de copyleft contaminante), estado de los contratos con clientes y partners (cláusulas de cambio de control), calidad técnica del código y deuda técnica (evaluación de riesgo tecnológico), y contratos laborales con empleados clave y cláusulas de no competencia.

**tarea 5 — Gestión de incidentes de seguridad: obligaciones legales:**
Cuando un sistema de software sufre un incidente de seguridad o una brecha de datos, ¿cuáles son las obligaciones legales del proveedor y del cliente? Crea una guía que cubra: plazos de notificación a clientes, autoridades de protección de datos (72 horas bajo GDPR) y reguladores sectoriales, contenido mínimo de la notificación de brecha, obligaciones contractuales con clientes afectados, preservación de evidencias para investigación forense y posibles responsabilidades civiles y administrativas. Adapta la guía al contexto europeo con referencias al GDPR y la Directiva NIS2.

**objetivo final:**
Gestionar el marco legal de proyectos de software y arquitectura con contratos que protejan los intereses de todas las partes, asignen claramente la propiedad intelectual, establezcan expectativas de servicio medibles y prevean los escenarios de conflicto más habituales, reduciendo el riesgo de litigios y protegiendo el valor de los activos tecnológicos.

Todas las orientaciones tienen carácter informativo. Las decisiones legales finales deben ser tomadas con el asesoramiento de abogados cualificados en cada jurisdicción relevante.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estructurar contratos de desarrollo de software, SLAs y gestionar la propiedad intelectual tecnológica',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte técnico para arquitecturas complejas y sistemas distribuidos con IA',
                'description'      => 'Usa IA para diagnosticar problemas en sistemas distribuidos, crear runbooks de incidencias para arquitecturas de microservicios y mejorar los procesos de on-call y resolución de incidentes.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en Site Reliability Engineering (SRE) y soporte de nivel 3 para sistemas distribuidos y arquitecturas de microservicios. Tu experiencia incluye el diagnóstico de problemas complejos en entornos de producción de alta disponibilidad, la creación de runbooks y playbooks de respuesta a incidentes, y el diseño de procesos de on-call que reduzcan el tiempo de resolución y el impacto en los usuarios.

**Contexto del sistema:**
Trabajo en el equipo de [ROL: SRE / Platform Engineering / soporte de nivel 3] de [EMPRESA: startup / scale-up / empresa establecida]. El sistema que soportamos es [SISTEMA: describe la arquitectura, los principales servicios y la escala aproximada en usuarios o transacciones por segundo]. El problema o desafío actual es [PROBLEMA: incidencia en curso / proceso de on-call ineficiente / falta de documentación / problemas de observabilidad].

**instrucción principal:**
Actúa como mi mentor de SRE y soporte de sistemas distribuidos. Ayúdame a diagnosticar el problema actual y a mejorar nuestros procesos de respuesta a incidentes.

**tarea 1 — Diagnóstico estructurado de incidentes en sistemas distribuidos:**
Crea una metodología de diagnóstico para incidencias en arquitecturas de microservicios. La metodología debe cubrir: cómo identificar rápidamente el servicio origen del problema en un sistema con múltiples dependencias (árbol de causa raíz, análisis de trazas distribuidas), qué métricas y logs consultar en los primeros 5 minutos de una incidencia (los "primeros auxilios" del diagnóstico), cómo distinguir entre síntomas y causas raíz, y el proceso de comunicación durante la incidencia (quién notifica a quién, con qué frecuencia y qué información).

**tarea 2 — Runbook para incidencias frecuentes:**
Para el tipo de incidencia más frecuente en nuestro sistema [TIPO DE INCIDENCIA: latencia alta en servicio X / fallos de base de datos / errores de autenticación / problemas de memoria], crea un runbook detallado. El runbook debe incluir: síntomas que activan su uso, verificaciones iniciales (comandos exactos a ejecutar y qué buscar en la respuesta), árbol de decisión para diferentes escenarios, pasos de remediación por escenario, criterios para escalar a un nivel superior, y comandos de verificación post-remediación para confirmar la resolución.

**tarea 3 — Mejora del proceso de on-call:**
Evalúa y mejora el proceso de on-call del equipo. Proporciona recomendaciones para: diseño de alertas que minimicen el ruido y maximicen la señal (qué alertar, umbrales, silencios), rotación de guardia sostenible que no genere agotamiento, proceso de handoff entre guardias (qué información transmitir al cambiar turno), métricas de salud del on-call (MTTA, MTTR, número de alertas por semana, alertas accionables vs ruido), y un proceso de revisión post-incidencia (blameless postmortem) que genere aprendizaje organizativo.

**tarea 4 — Observabilidad para arquitecturas de microservicios:**
Diseña la estrategia de observabilidad para el sistema descrito. Incluye: métricas de los tres pilares (logs, métricas, trazas distribuidas) con las herramientas recomendadas para cada pilar según el stack, los dashboards operativos imprescindibles para el equipo de on-call (qué deben ver en los primeros 30 segundos de una alerta), SLOs e indicadores de nivel de servicio (SLIs) recomendados para los servicios críticos, y cómo implementar el seguimiento de error budgets para balancear fiabilidad con velocidad de desarrollo.

**tarea 5 — Documentación técnica para el equipo de soporte:**
Crea una guía para construir y mantener la documentación técnica del sistema que el equipo de soporte necesita. Incluye: qué documentar (arquitectura de referencia, dependencias entre servicios, credenciales y accesos de emergencia, procedimientos de backup y restauración), formato y estructura recomendados para que sea útil en medio de una incidencia a las 3 AM, proceso de revisión y actualización para que no quede obsoleta, y cómo integrar la actualización de documentación en el proceso de gestión del cambio (ningún cambio de sistema sin actualizar el runbook correspondiente).

**objetivo final:**
Reducir el tiempo de resolución de incidencias en sistemas distribuidos, mejorar la experiencia del equipo de on-call con procesos más eficientes y documentación de calidad, y construir una cultura de fiabilidad que equilibre la velocidad de desarrollo con la estabilidad del sistema en producción.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diagnosticar incidencias en sistemas distribuidos, crear runbooks y mejorar procesos de on-call',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría de arquitectura de software como freelance con IA',
                'description'      => 'Usa IA para posicionarte como consultor independiente de arquitectura de software, redactar propuestas técnicas, estructurar revisiones de arquitectura y generar informes de diagnóstico para clientes.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de arquitectura de software independiente con experiencia en la venta y entrega de servicios de consultoría técnica para empresas de software, startups en crecimiento y empresas establecidas que necesitan modernizar sus sistemas. Tu especialidad es posicionar tu experiencia técnica de forma comercial, entregar valor rápido en compromisos cortos y construir relaciones de largo plazo con clientes que reconocen el impacto de buenas decisiones de arquitectura.

**Contexto del freelance:**
Soy consultor independiente de arquitectura de software con [AÑOS] años de experiencia en [ESPECIALIZACIÓN: sistemas distribuidos / arquitecturas cloud / modernización de legados / diseño de APIs / arquitecturas de datos]. Quiero [OBJETIVO: conseguir mis primeros clientes de consultoría / subir mis tarifas / estructurar mejor mis entregas / crear productos de conocimiento escalables].

**instrucción principal:**
Actúa como mi mentor de negocio freelance especializado en consultoría técnica de arquitectura. Ayúdame a construir un negocio de consultoría sostenible y de alta rentabilidad.

**tarea 1 — Posicionamiento y nicho de consultoría:**
Ayúdame a definir mi nicho de consultoría de arquitectura de forma que me diferencie y me permita cobrar tarifas premium. Cubre: cómo identificar la intersección entre lo que sé hacer excepcionalmente bien, lo que el mercado paga más y los problemas que más disfruto resolver, cómo formular mi especialización de forma que sea reconocible para clientes potenciales (no "arquitecto de software" sino algo más específico como "ayudo a startups SaaS a migrar de monolito a microservicios sin detener el desarrollo"), y cómo construir la prueba pública de mi expertise (GitHub, artículos, charlas, contribuciones open source).

**tarea 2 — Estructura de servicios y tarifas:**
Diseña el catálogo de servicios de mi consultoría de arquitectura con estructura de precios. El catálogo debe incluir: (a) revisión de arquitectura (assessment de 2-5 días con informe de recomendaciones), (b) diseño de arquitectura para nuevo sistema (proyecto de 2-8 semanas), (c) asesoramiento continuo como arquitecto externo (retainer mensual), (d) formación técnica para equipos de ingeniería. Para cada servicio, define: alcance estándar, entregables, duración, tarifa orientativa (usa rangos representativos del mercado) y el perfil de cliente ideal.

**tarea 3 — Proceso de revisión de arquitectura (Architecture Review):**
Crea el proceso estándar para un Architecture Review que puedo ofrecer como servicio de entrada a nuevos clientes. El proceso debe cubrir: kickoff y recogida de información (documentación existente, entrevistas con el equipo técnico, acceso al código), análisis y diagnóstico (evaluación de la arquitectura actual contra atributos de calidad: escalabilidad, mantenibilidad, seguridad, rendimiento), informe de recomendaciones (hallazgos priorizados, recomendaciones accionables, hoja de ruta técnica), y presentación de resultados al cliente (cómo comunicar hallazgos críticos de forma constructiva).

**tarea 4 — Informe de Architecture Review:**
Escribe la plantilla completa del informe de Architecture Review que entrego a los clientes. El informe debe incluir: resumen ejecutivo para la dirección (máx. 1 página sin tecnicismos), metodología de evaluación utilizada, hallazgos detallados organizados por área (seguridad, escalabilidad, mantenibilidad, operaciones, documentación), cada hallazgo con: descripción del problema, impacto estimado en el negocio, recomendación de solución y esfuerzo estimado de implementación (bajo/medio/alto), y hoja de ruta de mejoras con priorización por impacto y urgencia.

**tarea 5 — Estrategia de captación de clientes para arquitecto freelance:**
Diseña una estrategia de captación de clientes para los próximos 6 meses, adaptada a un consultor técnico solitario. Incluye: canales de captación más eficientes para consultoría técnica (referidos de clientes anteriores, LinkedIn, red de excompañeros, comunidades técnicas online, charlas en meetups), estrategia de contenido que demuestre expertise sin revelar propiedad intelectual del cliente (posts técnicos, casos de estudio anonimizados, artículos en publicaciones del sector), cómo estructurar el primer contacto para cualificar al cliente rápidamente (presupuesto, urgencia, encaje técnico), y cómo pasar de un proyecto puntual a un retainer de asesoramiento continuo que proporcione ingresos predecibles.

**objetivo final:**
Construir una consultoría de arquitectura de software como freelance que sea rentable, sostenible y con una reputación técnica sólida, con clientes que me valoren y refieran, tarifas que reflejen el impacto real de mi trabajo y una estructura de servicios que me permita escalar sin trabajar más horas, sino con más valor por hora.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Posicionarse como consultor independiente de arquitectura de software y estructurar servicios y propuestas',
                'vote_score'       => 47,
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
