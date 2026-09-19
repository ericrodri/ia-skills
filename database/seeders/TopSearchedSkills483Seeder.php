<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills483Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Escritura técnica de contenidos de producto y documentación de marketing con IA',
                'description'      => 'Usa IA para crear documentación de producto, guías de usuario y contenido técnico de marketing que convierta y eduque a tus clientes.',
                'prompt_content'   => <<<'EOT'
Actúa como un technical writer especializado en documentación de producto y contenido de marketing técnico. Tienes experiencia creando guías de usuario, documentation sites, release notes y contenido de onboarding para productos SaaS y herramientas de software.

**objetivo:** Crear documentación técnica de marketing de alta calidad para mi producto que eduque a los usuarios, reduzca el soporte y mejore la conversión, usando IA para acelerar el proceso sin perder la claridad.

**Contexto del producto:**
- Tipo de producto: [SaaS / app móvil / API / plataforma / hardware + software]
- Audiencia principal de la documentación: [usuarios finales no técnicos / desarrolladores / administradores de sistemas]
- Estado actual de la documentación: [inexistente / desactualizada / fragmentada / bien estructurada]
- Volumen de tickets de soporte relacionados con documentación: [alto / medio / bajo]
- Herramienta de documentación que uso o quiero usar: [Notion / GitBook / Confluence / Readme.io / otro]

**Módulo 1 — Arquitectura de la documentación de producto**

Diseña para mí la estructura completa de la documentación de mi producto:

1. Qué tipos de documentación necesito según mi audiencia: getting started, how-to guides, reference docs, troubleshooting, release notes
2. Cómo organizar la navegación para que los usuarios encuentren lo que buscan en menos de 3 clics
3. La diferencia entre documentación orientada a tareas (how-to) vs. orientada a conceptos (explanation) y cuándo usar cada una
4. Cómo estructurar el onboarding documentation para que un usuario nuevo sea productivo en menos de 30 minutos
5. Cómo versionar la documentación en paralelo con las versiones del software

Para cada tipo de documentación, dame una plantilla de estructura con los apartados obligatorios.

**Módulo 2 — Escritura de guías de usuario con IA**

Enséñame a usar IA para crear guías de usuario claras y útiles:

- Cómo proporcionar a la IA el contexto suficiente sobre mi producto para que genere documentación precisa
- Técnicas de prompt para que la IA escriba en el tono y nivel de complejidad apropiado para mi audiencia
- Cómo iterar sobre los borradores de IA para añadir capturas de pantalla, ejemplos reales y casos de uso específicos
- Cómo usar IA para simplificar documentación existente que es demasiado técnica para usuarios no técnicos
- Flujo de trabajo para generar documentación de cada nueva feature al mismo tiempo que se desarrolla

Dame un ejemplo de prompt completo para generar la guía de usuario de una feature específica de mi producto.

**Módulo 3 — Contenido técnico de marketing (Technical Content Marketing)**

Ayúdame a crear contenido de marketing técnico que combine profundidad con persuasión:

- Cómo escribir posts técnicos de blog que posicionen mi producto ante una audiencia de desarrolladores o usuarios avanzados
- Estructura de un tutorial técnico que genere leads de calidad: qué enseñar, cuándo mencionar el producto, cómo terminar con un CTA natural
- Guías de comparativa técnica: cómo estructurarlas para ser objetivos y aun así favorables a mi producto
- Documentación de integraciones: cómo hacer que instalar mi producto con otras herramientas populares sea una experiencia positiva
- Use cases y case studies técnicos: cómo contar la historia técnica de cómo un cliente resolvió un problema real con mi producto

**Módulo 4 — SEO para documentación técnica**

Optimiza mi documentación para buscadores técnicos:

- Qué intenciones de búsqueda cubre la documentación técnica y cómo diferencia de la documentación SEO del sitio
- Cómo investigar las preguntas técnicas específicas que mis usuarios buscan en Google (queries de soporte, errores, how-to)
- Estructura de URLs, headings y metadatos para documentación técnica que rankee bien
- Cómo usar IA para generar variaciones de los títulos de la documentación más orientadas a búsqueda
- El tradeoff entre documentación para buscadores vs. documentación para usuarios que ya están en el producto

**Módulo 5 — Métricas de calidad de la documentación**

Define el sistema de métricas para medir si mi documentación está funcionando:
- Métricas de uso: páginas más visitadas, tiempo en página, tasa de rebote por artículo
- Métricas de efectividad: reducción de tickets de soporte correlacionados con la creación de artículos de documentación
- Feedback de los usuarios: sistema de rating de artículos (thumbs up/down) y análisis de los comentarios negativos
- Búsquedas sin resultados en el propio site de documentación: como fuente de ideas para contenido nuevo
- Revisión periódica de documentación desactualizada: cómo detectarla y priorizarla para actualización
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear documentación técnica de producto y contenido de marketing técnico con IA',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Documentación automática de código y APIs con IA',
                'description'      => 'Aprende a usar IA para generar, mantener y mejorar la documentación técnica de código, APIs, changelogs y wikis de desarrollo de forma eficiente.',
                'prompt_content'   => <<<'EOT'
Actúa como un senior software engineer y technical writer especializado en documentación de código y APIs. Tienes experiencia integrando la generación automática de documentación en pipelines de CI/CD, usando herramientas como JSDoc, Sphinx, Swagger/OpenAPI, y aprovechando LLMs para mejorar la calidad de la documentación existente.

**objetivo:** Implementar un sistema de documentación técnica automatizada o semiautomat izada que mantenga la documentación actualizada con el código, reduzca la fricción para los desarrolladores y mejore la experiencia del consumidor de la API.

**Contexto técnico:**
- Lenguaje o lenguajes principales: [Python / JavaScript / TypeScript / Java / Go / PHP / otro]
- Tipo de proyecto: [API REST / librería / SDK / monolito / microservicios]
- Estado actual de la documentación: [sin documentación / docstrings básicos / docs desactualizadas / bien documentado]
- Herramientas de documentación existentes: [Swagger / Sphinx / JSDoc / Doxygen / Storybook / ninguna]
- Pipeline de CI/CD: [GitHub Actions / GitLab CI / Jenkins / otro]

**Bloque 1 — Documentación automática de código con IA**

Diseña el sistema de documentación de código que se mantiene actualizado automáticamente:

1. Cómo integrar IA (usando la API de Claude o herramientas como GitHub Copilot) para generar docstrings y comentarios JSDoc a partir del código existente
2. El formato ideal de docstring para mi lenguaje: qué secciones son obligatorias (descripción, parámetros, retorno, excepciones, ejemplos)
3. Cómo configurar un pre-commit hook o una GitHub Action que detecte funciones sin documentar y bloquee el merge hasta que se añada documentación
4. Cómo usar IA para evaluar la calidad de la documentación existente e identificar docstrings desactualizados o incorrectos
5. Cómo integrar la generación de documentación en el flujo de code review: el PR no se aprueba sin documentación de calidad

Para cada punto, dame el código de configuración o el script de automatización específico.

**Bloque 2 — Documentación de APIs con OpenAPI y IA**

Implementa un sistema de documentación de API de nivel profesional:

- Cómo generar un spec OpenAPI 3.0 completo a partir de mi código existente (frameworks: FastAPI, Express, Spring Boot, Laravel)
- Qué campos del spec OpenAPI son obligatorios para una buena experiencia de desarrollador: descripciones de endpoints, ejemplos de request/response, errores posibles
- Cómo usar IA para mejorar las descripciones automáticas del spec y hacerlas más útiles para los consumidores
- Configuración de Swagger UI o Redoc para publicar documentación interactiva con ejemplos ejecutables
- Cómo versionar la documentación de la API en paralelo con el versionado de la API

Dame el template de spec OpenAPI para un recurso típico de mi API con todos los campos bien completados.

**Bloque 3 — Changelogs inteligentes con IA**

Automatiza la generación de changelogs usando IA y git:

- Cómo configurar un workflow de GitHub Actions que genere un borrador de changelog a partir de los commits del período (usando Conventional Commits como input)
- Cómo usar IA para transformar los mensajes de commit técnicos en texto comprensible para usuarios no técnicos
- La estructura óptima de un changelog: Keep a Changelog, formato por tipo de cambio (added, changed, deprecated, removed, fixed, security)
- Cómo generar automáticamente versiones del changelog para diferentes audiencias: desarrolladores vs. usuarios finales vs. stakeholders de negocio
- Integración del changelog con el sistema de release notes del producto y las notificaciones a usuarios

**Bloque 4 — Wikis técnicas y documentación interna con IA**

Diseña el sistema de documentación interna del equipo de desarrollo:

- Arquitectura del knowledge base técnico: qué documenta en el wiki, qué va en el código, qué va en el README
- Cómo usar IA para generar el primer borrador de documentación de arquitectura (ADRs, diagramas de sistema, flujos de datos) a partir de reuniones, tickets y código
- Proceso de mantenimiento del wiki: cómo detectar documentación obsoleta y asignar responsabilidades de actualización
- Documentación de runbooks: cómo usar IA para generar guías de operaciones (deployment, rollback, incident response) a partir de los procesos existentes
- Onboarding documentation para nuevos desarrolladores: cómo generar con IA una guía completa de setup de entorno y arquitectura del sistema

**Bloque 5 — README profesionales y documentación de librerías open source**

Crea READMEs y documentación que atraigan contribuidores y usuarios:

- Estructura del README perfecto para un proyecto open source o una librería: qué secciones incluir, en qué orden, con qué nivel de detalle
- Cómo usar IA para generar ejemplos de código completos y funcionales para la documentación de la librería
- Documentación de la guía de contribución (CONTRIBUTING.md): cómo redactarla para que sea acogedora y clara
- Cómo generar automáticamente la documentación de la API pública de la librería a partir de las firmas de funciones y los tests
- Estrategia de documentación multiidioma: cuándo vale la pena traducir la documentación y cómo usar IA para hacerlo manteniendo la precisión técnica
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Automatizar la documentación de código, APIs y changelogs integrando IA en el pipeline de desarrollo',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Guías de estilo y sistemas de diseño documentados con IA',
                'description'      => 'Usa IA para crear, mantener y comunicar design systems, guías de estilo y documentación de componentes que el equipo realmente use.',
                'prompt_content'   => <<<'EOT'
Actúa como un design systems lead con experiencia creando y manteniendo sistemas de diseño en equipos de producto. Sabes que la documentación del design system es tan importante como los propios componentes, y que la IA puede acelerar enormemente la creación de documentación clara y coherente.

**objetivo:** Crear una documentación completa y mantenible para mi design system o guía de estilo, usando IA para acelerar la escritura y mantener la coherencia en toda la documentación.

**Contexto del proyecto:**
- Tipo de design system: [sistema propio / extensión de un sistema existente como Material / tokens de marca]
- Herramientas de diseño: [Figma / Sketch / Adobe XD]
- Herramienta de documentación: [Storybook / Zeroheight / Supernova / Notion / sitio web propio]
- Tamaño del equipo que usará el sistema: [número de diseñadores y desarrolladores]
- Estado actual de la documentación: [inexistente / básica / parcial / completa pero desactualizada]

**Área 1 — Estructura de la documentación del design system**

Diseña para mí la arquitectura completa de la documentación del sistema:

1. Qué secciones debe tener la documentación de un design system maduro: fundamentos, componentes, patrones, guías de uso, changelog
2. Cómo documentar los fundamentos del sistema: tipografía, paleta de colores, espaciado, iconografía, con ejemplos visuales y tokens de diseño
3. La anatomía de la documentación de un componente: descripción, cuándo usar, cuándo no usar, variantes, estados, props, accesibilidad, ejemplos de código
4. Cómo documentar los patrones de UI (patterns) que van más allá de los componentes individuales: formularios, tablas de datos, flujos de onboarding
5. Cómo estructurar las guías de contribución para que diseñadores y desarrolladores puedan añadir componentes al sistema

Para cada sección, dame la plantilla con los apartados obligatorios y ejemplos de contenido de alta calidad.

**Área 2 — Escritura de documentación de componentes con IA**

Enséñame a usar IA para crear documentación de componentes de calidad:

- Cómo proporcionar a Claude el contexto de un componente (su código, sus props, sus estados en Figma) para que genere la documentación inicial
- Técnicas para que la IA genere ejemplos de uso apropiados para cada variante del componente
- Cómo usar IA para escribir las guías de "cuándo usar vs. cuándo no usar" basándose en los principios de diseño del sistema
- Proceso de revisión de la documentación generada por IA: qué revisar siempre, qué confiar directamente
- Cómo mantener un tono y estilo consistente en toda la documentación cuando varios miembros del equipo contribuyen

**Área 3 — Documentación de tokens de diseño y variables**

Documenta el sistema de tokens de tu design system:

- Cómo estructurar y documentar la jerarquía de tokens: tokens primitivos, semánticos y de componente
- Cómo usar IA para generar descripciones claras del propósito de cada token y cuándo usarlo
- Documentación del sistema de temas: cómo documentar el modo oscuro, los temas de marca y las variaciones de accesibilidad
- Cómo generar automáticamente la documentación de tokens a partir de los archivos de definición (JSON de tokens, variables de Figma, CSS custom properties)
- Changelog de tokens: cómo documentar los cambios de valor o nombre de los tokens entre versiones del sistema

**Área 4 — Guías de escritura y voz de marca**

Crea la guía de contenido integrada en tu design system:

- Guía de escritura para la UI: tono de voz, nivel de formalidad, cómo escribir labels, botones, mensajes de error, estados vacíos
- Guía de microcopy: principios para escribir textos de UI que sean claros, útiles y coherentes con la marca
- Guía de mensajes de error: cómo documentar el patrón de mensajes de error que el equipo debe seguir en toda la aplicación
- Cómo usar IA para revisar el copy de UI de nuevas features y asegurar que sigue la guía de voz de marca
- Terminología del producto: glosario de términos que el equipo de diseño y desarrollo debe usar de forma consistente

**Área 5 — Mantenimiento y adopción de la documentación**

Diseña el proceso para que la documentación se mantenga viva y actualizada:
- Cómo integrar la actualización de la documentación del design system en el proceso de release de nuevos componentes
- Métricas de adopción del design system: cómo medir si los equipos están usando los componentes documentados
- Cómo recoger feedback de los usuarios del sistema (diseñadores y desarrolladores) sobre las lagunas de documentación
- Proceso de revisión anual del design system: cómo auditar la documentación, identificar lo obsoleto y priorizar actualizaciones
- Cómo comunicar los cambios del design system al equipo: changelog, newsletter interna, sesiones de actualización
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear y mantener documentación de design systems y guías de estilo con apoyo de IA',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Propuestas comerciales y documentación de ventas técnica con IA',
                'description'      => 'Usa IA para crear propuestas técnicas, RFP responses, statements of work y documentación de ventas que aceleren el ciclo y aumenten el win rate.',
                'prompt_content'   => <<<'EOT'
Actúa como un Sales Engineer o consultor de preventas con experiencia redactando propuestas técnicas, respondiendo RFPs y creando documentación de ventas para soluciones de software, servicios profesionales y consultoría tecnológica. Combinas el rigor técnico con la persuasión comercial.

**objetivo:** Crear un sistema de documentación de ventas técnica usando IA que acelere el proceso de creación de propuestas, mejore su calidad y aumente la tasa de éxito.

**Contexto de ventas:**
- Tipo de solución: [software / servicios profesionales / consultoría / implementación / SaaS enterprise]
- Ticket medio de los deals: [rango]
- Tiempo promedio para crear una propuesta: [horas o días actuales]
- Principal problema con las propuestas actuales: [demasiado tiempo / falta de personalización / pérdida de coherencia / poca diferenciación]
- Quién las crea: [yo solo / equipo de preventa / comercial + técnico]

**Sección 1 — Sistema de propuestas técnicas con IA**

Diseña para mí el sistema de creación de propuestas que use IA para:

1. Generar el borrador de propuesta a partir de las notas de la reunión de discovery con el cliente
2. Personalizar automáticamente la propuesta con el nombre del cliente, su industria, sus pain points específicos y sus objetivos declarados
3. Seleccionar los casos de estudio más relevantes de un banco de referencias según el perfil del cliente
4. Adaptar la complejidad técnica del documento al perfil del interlocutor (técnico vs. directivo)
5. Revisar la propuesta para asegurar consistencia en el tono, la terminología y las cifras

Para cada funcionalidad, dame el prompt exacto o el flujo de trabajo a seguir con IA.

**Sección 2 — Respuesta a RFPs y licitaciones con IA**

Dame un proceso para responder RFPs de forma eficiente y competitiva:

- Cómo usar IA para analizar el RFP y extraer los criterios de evaluación, los requisitos obligatorios y los factores diferenciadores
- Cómo decidir si vale la pena responder a un RFP (go/no-go) con un análisis asistido por IA
- Flujo de trabajo para distribuir las secciones del RFP entre el equipo y usar IA para integrarlas de forma coherente
- Cómo usar IA para identificar las preguntas trampa o ambiguas del RFP y cómo manejarlas en la respuesta
- Checklist final de revisión de la respuesta al RFP antes de enviarla

Dame también las instrucciones para el prompt de análisis de RFP que analice un documento y devuelva un resumen estructurado de requisitos.

**Sección 3 — Statements of Work y contratos técnicos**

Ayúdame a crear documentación contractual técnica con IA:

- Cómo usar IA para generar un SOW (Statement of Work) completo a partir de la propuesta aprobada
- Los apartados obligatorios de un SOW de calidad: alcance, entregables, metodología, cronograma, responsabilidades, supuestos, exclusiones, forma de pago
- Cómo usar IA para detectar ambigüedades en el SOW que puedan generar disputas durante el proyecto
- Plantillas de gestión de cambios de alcance (change requests) y cómo documentarlos formalmente
- Cómo adaptar el nivel de detalle del SOW según el tipo de cliente y el riesgo del proyecto

**Sección 4 — Materiales de habilitación de ventas técnicas**

Crea con IA los materiales que el equipo comercial necesita para vender soluciones técnicas:

- Battle cards: cómo documentar las comparativas con competidores de forma que el equipo de ventas las use realmente
- One-pagers técnicos: cómo resumir la propuesta de valor técnica en una página que el comprador técnico comparta internamente
- FAQs técnicas: las preguntas más frecuentes del equipo de compra técnico y las respuestas que desbloquean el proceso
- Documentación de seguridad y compliance: cómo preparar los cuestionarios de seguridad con IA para acelerar el proceso de due diligence del cliente
- Presentation decks técnicos: la estructura de la demo técnica y el pitch de arquitectura que convierte a los arquitectos de soluciones del cliente

**Sección 5 — Base de conocimiento de ventas y memoria institucional**

Diseña el sistema de gestión del conocimiento del equipo de ventas técnico:
- Cómo crear y mantener una librería de propuestas ganadoras que la IA pueda usar como referencia
- Sistema de capture de aprendizajes post-deal: qué documentar después de ganar o perder un deal para mejorar las propuestas futuras
- Cómo usar IA para extraer las mejores prácticas de las propuestas ganadoras y convertirlas en guías para el equipo
- Integración de la base de conocimiento con el CRM: cómo conectar la documentación de ventas con el pipeline
- Proceso de onboarding de nuevos miembros del equipo de preventa usando la base de conocimiento automatizada
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear propuestas técnicas, responder RFPs y generar documentación de ventas con IA',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Documentación de producto y especificaciones funcionales con IA',
                'description'      => 'Framework para product managers que quieren usar IA para escribir PRDs, especificaciones funcionales, user stories y documentación de decisiones de producto.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager senior con experiencia redactando Product Requirements Documents (PRDs), especificaciones funcionales y documentación de decisiones de producto en equipos ágiles de alto rendimiento. Conoces las mejores prácticas de documentación de producto y cómo usar la IA para acelerar la escritura sin perder la claridad ni el pensamiento crítico.

**objetivo:** Crear un sistema de documentación de producto eficiente usando IA que me permita escribir especificaciones de calidad en menos tiempo, mantener el historial de decisiones y alinear al equipo con claridad.

**Contexto de producto:**
- Tipo de empresa: [startup / scale-up / empresa consolidada]
- Metodología de trabajo: [Scrum / Kanban / Shape Up / híbrido]
- Herramienta de documentación: [Notion / Confluence / Linear / Jira / otro]
- Principal reto con la documentación actual: [tarda demasiado / el equipo no la lee / se desactualiza / inconsistente entre PMs]
- Cadencia de releases: [semanal / quincenal / mensual]

**Pilar 1 — PRDs y especificaciones funcionales con IA**

Diseña para mí el proceso de escritura de PRDs asistida por IA:

1. Qué información necesito recopilar antes de pedir a la IA que genere el borrador del PRD (contexto, problema, restricciones, stakeholders)
2. La estructura del PRD moderno: por qué reducir la longitud al mínimo necesario y qué secciones son realmente imprescindibles
3. Cómo usar IA para convertir notas de discovery y reuniones en un borrador de PRD estructurado
4. Cómo usar IA para revisar mi PRD e identificar ambigüedades, supuestos no documentados o requisitos contradictorios
5. El proceso de revisión del PRD con el equipo: cómo usar IA para resumir los comentarios y actualizar el documento de forma eficiente

Dame la plantilla de PRD que uso como base y el prompt exacto para generar el primer borrador.

**Pilar 2 — User Stories y criterios de aceptación con IA**

Optimiza la creación de user stories para equipos ágiles:

- Cómo descomponer una épica compleja en user stories bien escritas usando IA como asistente de refinamiento
- Formato de user story que el equipo de ingeniería prefiere vs. el que el equipo de negocio entiende: cómo reconciliarlos
- Generación automática de criterios de aceptación (acceptance criteria) en formato Gherkin a partir de la descripción funcional
- Cómo usar IA para identificar casos de borde (edge cases) y estados de error que debo incluir en los criterios de aceptación
- Estimación de historias: cómo usar IA para dar contexto suficiente al equipo de ingeniería para que la estimación sea más precisa

**Pilar 3 — Architecture Decision Records (ADRs) y decisiones de producto**

Documenta las decisiones de producto para el futuro:

- Cuándo es obligatorio escribir un ADR o decision log: qué tipo de decisiones merecen ser documentadas
- La estructura del ADR: contexto, decisión, consecuencias, alternativas consideradas y sus trade-offs
- Cómo usar IA para generar el borrador del ADR a partir de los mensajes de Slack, las notas de la reunión y el ticket de Jira donde se tomó la decisión
- Cómo indexar y hacer buscable el historial de decisiones para que el equipo pueda consultarlo antes de reabrir debates ya resueltos
- Cuándo revisar y actualizar los ADRs existentes: señales de que una decisión pasada ya no aplica

**Pilar 4 — Release Notes y comunicación de cambios**

Crea release notes que el equipo y los usuarios lean:

- Cómo usar IA para transformar el listado técnico de cambios en release notes comprensibles por usuarios no técnicos
- Estructura de las release notes por audiencia: versión para usuarios finales, versión para clientes enterprise, versión interna para el equipo
- Cómo automatizar la generación del primer borrador de release notes a partir de los tickets cerrados en el sprint
- Tono y formato de las release notes que generan más engagement: qué usuarios realmente leen y cómo escribir para ellos
- Distribución multicanal de las release notes: in-app, email, Slack, changelog público, redes sociales

**Pilar 5 — Roadmap documentation y comunicación de estrategia**

Documenta y comunica el roadmap de producto con IA:
- Cómo documentar el "por qué" detrás del roadmap de forma que los stakeholders entiendan las prioridades sin sentir que se les impone
- Cómo usar IA para adaptar la presentación del roadmap a diferentes audiencias: ingeniería, ventas, dirección, inversores
- Cómo documentar las apuestas de producto (bets) y sus hipótesis para poder medir si las decisiones estratégicas fueron acertadas
- El proceso de revisión trimestral del roadmap: cómo documentar qué cambió, por qué y qué aprendimos
- Cómo construir la narrativa del producto (product narrative) que conecta el pasado, el presente y el futuro del producto de forma coherente
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Escribir PRDs, user stories y documentación de decisiones de producto de forma eficiente con IA',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Documentación de políticas y procedimientos de RRHH con IA',
                'description'      => 'Usa IA para redactar, actualizar y comunicar políticas de RRHH, manuales del empleado y procedimientos internos de forma clara, legal y accesible.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de RRHH con experiencia redactando políticas corporativas, manuales del empleado y procedimientos de RRHH en empresas multinacionales. Sabes cómo equilibrar el cumplimiento legal con un lenguaje accesible y una comunicación que los empleados realmente lean y entiendan.

**objetivo:** Crear y mantener la documentación de RRHH de mi organización usando IA para acelerar la redacción, asegurar la consistencia legal y mejorar la comprensión por parte de los empleados.

**Contexto organizacional:**
- Tamaño de la empresa: [número de empleados]
- Geografías donde opero: [países]
- Estado actual de la documentación de RRHH: [inexistente / desactualizada / poco usada / bien estructurada]
- Principal reto: [cumplimiento legal / baja adopción por parte de los empleados / desactualización / inconsistencias]
- Sistema donde vive la documentación: [Notion / Confluence / SharePoint / intranet propia]

**Módulo 1 — Manual del empleado con IA**

Diseña para mí el proceso de creación o actualización del manual del empleado:

1. Qué secciones son obligatorias en un manual del empleado en España: derechos y deberes, jornada laboral, vacaciones, código de conducta, procedimientos de denuncia
2. Cómo usar IA para redactar cada sección con un lenguaje claro, empático y libre de jerga legal excesiva
3. Cómo equilibrar el tono del manual: profesional y correcto pero que transmita la cultura de la empresa
4. Cómo usar IA para revisar el manual existente e identificar cláusulas desactualizadas, lagunas legales o inconsistencias
5. Proceso de actualización anual: cómo detectar qué secciones han quedado obsoletas por cambios legales o de política interna

Dame la tabla de contenidos recomendada para el manual del empleado y el prompt para generar una sección específica.

**Módulo 2 — Políticas de RRHH específicas con IA**

Redacta con IA las siguientes políticas:

- **Política de teletrabajo**: condiciones, equipamiento, gastos, disponibilidad y desconexión digital
- **Política de uso de IA en el trabajo**: qué herramientas están permitidas, qué datos no se pueden compartir con herramientas de IA externas, cómo documentar el uso de IA en entregables
- **Política de diversidad, equidad e inclusión**: compromisos de la empresa, proceso de denuncia de discriminación, métricas de seguimiento
- **Política de permisos y licencias**: tipos de permiso, proceso de solicitud, documentación requerida
- **Política de viajes y gastos**: procedimiento de aprobación, categorías de gasto, plazos de justificación

Para cada política, dame la estructura, el tono recomendado y los puntos legales que no pueden faltar según la normativa española.

**Módulo 3 — Procedimientos de RRHH y guías de proceso**

Documenta los procesos de RRHH clave:

- Proceso de onboarding: guía de los primeros 30-60-90 días para nuevas incorporaciones
- Proceso de offboarding: checklist de entrevista de salida, devolución de equipos, gestión de accesos
- Proceso de evaluación de desempeño: cronograma, formularios, guías para managers y empleados
- Proceso de gestión de conflictos y disciplinario: pasos, documentación requerida, tiempos legales
- Proceso de solicitud de vacaciones y gestión de ausencias: quién aprueba, cómo se registra, excepciones

Para cada proceso, dame el diagrama de flujo (en texto) y la lista de documentos o formularios asociados.

**Módulo 4 — Comunicación de cambios de política**

Diseña el proceso de comunicación de actualizaciones de política usando IA:

- Cómo redactar el comunicado de empresa cuando se actualiza una política importante
- Estrategia multicanal para que los empleados lean y entiendan los cambios: email, intranet, sesiones informativas, FAQ
- Cómo documentar que los empleados han recibido y aceptado las nuevas políticas (registro de conformidad)
- Cómo gestionar las preguntas frecuentes de empleados sobre la nueva política con IA como primer nivel de respuesta
- Cómo actualizar el manual del empleado de forma versionada para que el historial de cambios sea auditable

**Módulo 5 — Métricas de efectividad de la documentación de RRHH**

Mide si tu documentación de RRHH está funcionando:
- Cómo medir la tasa de lectura y comprensión de las políticas de RRHH
- Reducción de preguntas repetitivas al equipo de RRHH como indicador de efectividad de la documentación
- Auditorías de conformidad: cómo usar la documentación para preparar inspecciones de trabajo o auditorías internas
- Feedback de empleados sobre la claridad de las políticas: cómo recogerlo y usarlo para mejorar la documentación
- Benchmarking de la documentación de RRHH: cómo comparar mis políticas con las mejores prácticas del sector
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Redactar y mantener políticas de RRHH, manuales del empleado y procedimientos internos con IA',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Informes financieros y memorias anuales con IA',
                'description'      => 'Usa IA para redactar informes financieros, memorias anuales, presentaciones de resultados y documentación para inversores de forma eficiente y precisa.',
                'prompt_content'   => <<<'EOT'
Actúa como un director financiero con experiencia redactando informes financieros, memorias anuales y documentación para inversores en empresas de mediana y gran dimensión. Sabes cómo transformar datos financieros complejos en narrativas claras que los stakeholders no financieros puedan entender y usar para tomar decisiones.

**objetivo:** Crear un sistema de documentación financiera usando IA que me permita producir informes de alta calidad en menos tiempo, con narrativas claras y consistentes.

**Contexto financiero:**
- Tipo de empresa: [cotizada / no cotizada / startup / pyme / empresa familiar]
- Audiencia principal de los informes: [board de directores / inversores / entidades financieras / empleados / reguladores]
- Frecuencia de reporting: [mensual / trimestral / anual]
- Herramientas de reporting actuales: [Excel / Power BI / Tableau / Google Sheets / ERP]
- Principal reto con el reporting: [tarda demasiado / narrativa poco clara / inconsistencias entre informes / baja adopción por parte del board]

**Bloque 1 — Narrativa financiera con IA**

Enséñame a usar IA para transformar datos en narrativas financieras:

1. Cómo proporcionar a la IA los datos financieros del período de forma estructurada para que genere el análisis narrativo
2. Las secciones obligatorias de la narrativa financiera: evolución del revenue, análisis de márgenes, comparativa con el plan y con el período anterior, eventos relevantes del período
3. Cómo usar IA para explicar desviaciones significativas del presupuesto de forma que el board entienda el "por qué" y el "qué hacemos ahora"
4. Cómo adaptar la narrativa financiera a diferentes audiencias: técnica para el CFO, ejecutiva para el CEO, simplificada para el board no financiero
5. Cómo revisar y corregir la narrativa generada por IA para asegurar que los números y el contexto son precisos

**Bloque 2 — Memoria anual y reporting ESG**

Diseña el proceso de creación de la memoria anual con IA:

- Estructura de la memoria anual: carta del presidente, resultados del año, estrategia, riesgos, gobierno corporativo, información financiera, ESG
- Cómo usar IA para redactar las secciones narrativas de la memoria manteniendo coherencia entre todas las partes
- Reporting ESG: cómo documentar los indicadores ambientales, sociales y de gobierno corporativo según los estándares GRI o ESRS
- Cómo generar la versión resumida de la memoria anual (summary report) para los inversores que no leen el documento completo
- Proceso de revisión legal y de auditoría de la memoria antes de su publicación

**Bloque 3 — Presentaciones de resultados con IA**

Crea materiales de presentación de resultados de alta calidad:

- Estructura del earnings presentation para inversores: los slides obligatorios y el orden que maximiza la credibilidad
- Cómo usar IA para generar el script del CFO para la presentación de resultados trimestrales
- Preparación de la sesión de preguntas y respuestas: cómo anticipar las preguntas difíciles y preparar respuestas precisas con IA
- Cómo crear la sección de guidance con el lenguaje apropiado que informa sin comprometer legalmente a la empresa
- Deck para el board: cómo crear una presentación de 10 slides que resuma el rendimiento financiero y las decisiones que necesitan aprobación

**Bloque 4 — Documentación para entidades financieras e inversores**

Prepara la documentación financiera para procesos de financiación con IA:

- Información memoranda (IM): estructura y redacción de los apartados financieros con IA
- Data room para due diligence: cómo organizar y documentar la información financiera para que los inversores la procesen eficientemente
- Modelos financieros documentados: cómo usar IA para generar la documentación de los supuestos y la metodología del modelo financiero
- Narrativa del pitch financiero: cómo contar la historia financiera de la empresa que justifica la valoración pedida
- Covenants y reporting para deuda: cómo documentar el cumplimiento de los covenants bancarios de forma eficiente

**Bloque 5 — Automatización y mejora continua del reporting**

Diseña el sistema de reporting financiero semiautomat izado:
- Cómo integrar IA en el flujo de datos: desde el ERP hasta el análisis narrativo automatizado
- Plantillas de reporting que la IA puede rellenar con los datos de cada período con mínima intervención manual
- Sistemas de alerta: cómo configurar la IA para detectar anomalías en los datos financieros antes de incluirlos en el informe
- Versionado de informes: cómo mantener el historial de informes y sus correcciones de forma auditable
- Formación del equipo financiero en el uso de IA para el reporting: protocolo de revisión humana obligatoria antes de cada publicación
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Redactar informes financieros, memorias anuales y documentación para inversores con apoyo de IA',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Redacción de contratos y documentación legal técnica con IA',
                'description'      => 'Aprende a usar IA para redactar, revisar y estructurar contratos, términos y condiciones, políticas de privacidad y documentación legal de forma eficiente.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado mercantil con experiencia redactando contratos comerciales, acuerdos tecnológicos y documentación legal para startups y empresas de tecnología. Sabes cómo usar la IA como asistente de redacción legal manteniendo siempre la responsabilidad y revisión humana, y conoces los límites y riesgos de delegar la redacción legal a sistemas de IA.

**objetivo:** Aprender a usar IA de forma segura y eficiente para acelerar la redacción y revisión de documentación legal, sin comprometer la calidad jurídica ni asumir riesgos legales innecesarios.

**Contexto legal:**
- Tipo de práctica o empresa: [abogado independiente / despacho / departamento legal in-house / startup]
- Tipos de documentos que más redactas: [contratos de servicios / NDAs / términos y condiciones / políticas de privacidad / contratos laborales]
- Jurisdicción principal: [España / UE / Estados Unidos / internacional]
- Volumen mensual de documentos: [número aproximado]
- Principal reto: [tiempo de redacción / consistencia / actualización ante cambios legales / formación de junior lawyers]

**Área 1 — Uso responsable de IA en la práctica legal**

Antes de usar IA para documentación legal, establece el marco de uso correcto:

1. Qué tareas legales puede hacer la IA con supervisión mínima: formateo, drafting de cláusulas estándar, generación de primeros borradores de contratos simples
2. Qué tareas legales requieren revisión exhaustiva del abogado: cualquier cláusula que determine responsabilidad, jurisdicción, resolución de disputas o que sea no estándar
3. Qué tareas legales no debes delegar nunca a la IA: asesoramiento personalizado sobre estrategia legal, predicciones sobre el resultado de litigios, interpretación de jurisprudencia específica
4. Cómo documentar el uso de IA en la redacción de documentos legales para auditoría y responsabilidad profesional
5. Los riesgos de usar IA en documentos legales: alucinaciones de citas legislativas, cláusulas contradictorias, desactualización ante cambios normativos recientes

**Área 2 — Redacción de contratos estándar con IA**

Diseña el flujo de trabajo para redactar contratos estándar con IA:

- Cómo proporcionar a la IA el contexto mínimo necesario para generar un primer borrador útil: partes, objeto, jurisdicción, condiciones principales
- Template prompts para los contratos más frecuentes: NDA, contrato de servicios profesionales, acuerdo de distribución, contrato de licencia de software
- Cómo usar IA para adaptar un contrato estándar de tu librería a las particularidades de un nuevo deal
- Cómo revisar el borrador de IA con el protocolo de revisión legal: qué buscar, qué errores son más frecuentes en contratos generados por IA
- Cómo construir una librería de cláusulas curadas que la IA pueda usar como referencia para mejorar la calidad de los borradores

**Área 3 — Términos y condiciones y políticas de privacidad**

Documenta los textos legales del producto digital con IA:

- Estructura y cláusulas obligatorias de unos términos y condiciones para un producto SaaS según la normativa española y europea
- Cómo redactar una política de privacidad conforme al RGPD que sea comprensible para usuarios no juristas
- Cómo usar IA para actualizar los textos legales existentes ante un cambio normativo (nueva ley, nuevo reglamento de la UE)
- Cómo adaptar los textos legales a diferentes mercados (España, Francia, Alemania, Estados Unidos) con IA
- Revisión de textos legales del competidor: cómo usar IA para analizar las condiciones de la competencia e identificar diferencias relevantes

**Área 4 — Revisión y redline de contratos recibidos**

Usa IA para acelerar la revisión de contratos que te envían clientes y contrapartes:

- Cómo estructurar el prompt para que la IA identifique las cláusulas más problemáticas de un contrato de 50+ páginas
- Checklist de cláusulas de alto riesgo que siempre debes revisar: limitación de responsabilidad, indemnizaciones, resolución de disputas, ley aplicable, cambio de control
- Cómo usar IA para generar el redline comentado de un contrato con las propuestas de modificación y la justificación de cada cambio
- Cómo usar IA para comparar dos versiones del mismo contrato y extraer un resumen de los cambios entre versiones
- Protocolo de negociación: cómo usar IA para preparar los argumentos de negociación de cada cláusula problemática

**Área 5 — Documentación legal interna y gestión del conocimiento**

Construye el sistema de conocimiento legal con IA:
- Cómo crear y mantener una librería de plantillas de contratos actualizada, con control de versiones y notas de uso
- Cómo usar IA para generar memos jurídicos internos que resuman la normativa aplicable a un caso concreto
- Cómo documentar la jurisprudencia relevante y las posiciones negociadoras habituales para cada tipo de contrato
- Sistema de alerta de cambios normativos: cómo usar IA para monitorizar cambios legales relevantes para tu práctica
- Formación de junior lawyers: cómo usar la IA para generar ejercicios de redacción de contratos con feedback automático
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Usar IA de forma responsable para redactar, revisar y gestionar documentación legal y contratos',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Base de conocimiento y documentación de soporte con IA',
                'description'      => 'Crea y mantén una base de conocimiento de soporte al cliente con IA: artículos de ayuda, FAQs, guías de troubleshooting y documentación que reduce tickets.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Customer Support con experiencia construyendo bases de conocimiento y centros de ayuda de alta efectividad para productos SaaS y plataformas digitales. Sabes cómo usar la IA para escalar el conocimiento del equipo de soporte sin escalar el equipo, y cómo medir el impacto de la documentación en la reducción de tickets.

**objetivo:** Construir y mantener una base de conocimiento de soporte al cliente usando IA que desvíe tickets repetitivos, empodere al cliente para resolver problemas por su cuenta y mejore la calidad de las respuestas del equipo de soporte.

**Contexto de soporte:**
- Tipo de producto: [SaaS / app / e-commerce / plataforma]
- Volumen mensual de tickets: [número]
- Porcentaje de tickets repetitivos (misma pregunta): [%]
- Herramienta de help center actual: [Intercom / Zendesk / Freshdesk / Notion / sin herramienta]
- Tamaño del equipo de soporte: [número de agentes]

**Pilar 1 — Arquitectura de la base de conocimiento**

Diseña para mí la estructura del centro de ayuda ideal para mi producto:

1. Cómo organizar las categorías del help center para que los usuarios encuentren respuestas sin buscar: taxonomía basada en tareas del usuario, no en estructura interna del producto
2. Qué tipos de artículos necesito: guías de introducción, tutoriales paso a paso, FAQ, troubleshooting, changelog, glosario
3. La jerarquía óptima: colecciones, categorías, artículos y el número máximo recomendado por nivel
4. Cómo priorizar qué artículos crear primero: análisis de los tickets más frecuentes como fuente de ideas
5. Cómo estructurar la búsqueda interna del help center para que los resultados sean relevantes desde el primer intento

Para cada punto, dame ejemplos concretos aplicados a un producto similar al mío.

**Pilar 2 — Creación de artículos de ayuda con IA**

Implementa el flujo de trabajo de creación de contenido de soporte con IA:

- Cómo usar IA para transformar los tickets de soporte más frecuentes en artículos de ayuda estructurados
- La anatomía de un artículo de ayuda de alta calidad: título orientado a la tarea, introducción de contexto, pasos numerados, capturas de pantalla, resultado esperado, troubleshooting de errores frecuentes
- Cómo usar IA para escribir en el tono adecuado: empático, claro, sin tecnicismos innecesarios y orientado a la solución
- Cómo generar variantes del mismo artículo para diferentes niveles de usuario (básico vs. avanzado)
- Flujo de aprobación de artículos: quién revisa qué antes de publicar y cómo documentar el proceso

**Pilar 3 — FAQs dinámicas y troubleshooting con IA**

Diseña el sistema de FAQ y troubleshooting que se actualiza con el producto:

- Cómo construir una FAQ que responda las preguntas reales de los usuarios (basada en datos de soporte, no en suposiciones)
- Formato del artículo de troubleshooting: síntoma → causa probable → solución paso a paso → cuándo escalar a soporte
- Cómo usar IA para generar árboles de decisión de troubleshooting a partir de los procesos de diagnóstico del equipo de soporte
- Sistema de actualización de la FAQ ante nuevas features o cambios del producto: quién es responsable y con qué frecuencia
- Cómo integrar la FAQ en el chatbot de soporte de primer nivel para que la IA responda directamente con los artículos del help center

**Pilar 4 — Documentación interna del equipo de soporte**

Crea la base de conocimiento interna para los agentes de soporte:

- Playbooks de resolución de incidencias: cómo documentar los procedimientos de diagnóstico y resolución que el equipo debe seguir
- Guías de escalado: cuándo escalar, a quién, con qué información y en qué plazo
- Biblioteca de respuestas (macros): cómo crear y mantener respuestas predefinidas de calidad para los casos más frecuentes
- Documentación de bugs conocidos y workarounds: cómo mantener actualizado el registro de problemas conocidos y sus soluciones provisionales
- Onboarding de nuevos agentes: cómo usar la base de conocimiento interna para acortar el tiempo de ramping de los nuevos miembros del equipo

**Pilar 5 — Métricas de efectividad del help center**

Mide el impacto real de tu base de conocimiento en el soporte:
- Self-service rate: cómo calcular el porcentaje de problemas resueltos sin contactar al soporte
- Deflection rate de artículos: qué artículos realmente evitan que el usuario abra un ticket
- Artículos con mayor ratio de resolución (usuarios que leen el artículo y no abren ticket posteriormente)
- Search terms sin resultados: cómo identificar las búsquedas que no encuentran respuesta y convertirlas en nuevos artículos
- Proceso de revisión de contenido: cómo detectar artículos desactualizados antes de que generen tickets de usuarios confundidos
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Crear y mantener una base de conocimiento de soporte que reduce tickets y empodera al cliente',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Portfolio y documentación de proyectos freelance con IA',
                'description'      => 'Usa IA para crear, estructurar y actualizar tu portfolio profesional, case studies de proyectos y documentación de trabajo que atraiga a mejores clientes.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de desarrollo de negocio para freelancers y profesionales independientes con experiencia ayudando a creativos, técnicos y consultores a construir portfolios y documentación de proyectos que les diferencien de la competencia y atraigan a clientes de mayor calidad y presupuesto.

**objetivo:** Crear un portfolio profesional y un sistema de documentación de proyectos usando IA que muestre mi trabajo de la forma más atractiva y convincente para mis clientes ideales.

**Mi perfil freelance:**
- Especialidad: [diseño / desarrollo / redacción / consultoría / marketing / fotografía / otro]
- Años de experiencia: [número]
- Tipo de cliente que quiero atraer: [startups / pymes / grandes empresas / agencias / particulares]
- Estado actual de mi portfolio: [sin portfolio / web básica / portfolio desactualizado / bien estructurado]
- Principal problema con mi portfolio actual: [no genera leads / no refleja mi nivel actual / falta de case studies / muy genérico]

**Sección 1 — Estrategia de portfolio para freelancers**

Define conmigo la estrategia de portfolio antes de crear el contenido:

1. Cuántos proyectos debo mostrar en mi portfolio y cómo seleccionar los más estratégicos (no los favoritos personales, sino los que atraen al cliente ideal)
2. Qué formato de portfolio se adapta mejor a mi especialidad: sitio web propio, PDF, Behance, GitHub, Notion público, Dribbble
3. Cómo posicionar mi portfolio para un nicho específico vs. mantenerlo generalista: trade-offs y cuándo especializarse
4. Qué información sobre mí mismo debo incluir vs. omitir para conectar con el cliente ideal
5. Cómo actualizar el portfolio regularmente sin que se convierta en una tarea que postergo indefinidamente

**Sección 2 — Case studies de proyectos con IA**

Aprende a documentar tus proyectos como case studies persuasivos:

- La estructura del case study que convierte: contexto del cliente (sin revelar información confidencial), problema, mi enfoque y proceso, solución entregada, resultados obtenidos (cuantitativos si es posible)
- Cómo usar IA para redactar el case study a partir de mis notas del proyecto, los entregables y los feedbacks del cliente
- Cómo cuantificar el impacto de tu trabajo cuando los resultados son cualitativos (diseño, textos, código) o cuando el cliente no comparte métricas
- Cómo incluir el proceso creativo o técnico sin hacer el case study demasiado técnico para el cliente
- Cómo pedir al cliente la información que necesitas para completar el case study sin que parezca una carga para él

Dame el template de case study con las preguntas que debo responder para cada proyecto.

**Sección 3 — Copywriting del portfolio con IA**

Crea los textos del portfolio que atraen al cliente ideal:

- Homepage del portfolio: headline, propuesta de valor, qué servicios ofrezco y para quién, prueba social, CTA
- Página "Sobre mí": cómo contar mi historia profesional de forma que sea relevante para el cliente, no una autobiografía
- Página de servicios: cómo describir mis servicios en términos de resultados para el cliente, no de tareas que realizo
- Página de contacto: cómo reducir la fricción del primer contacto y pre-cualificar los leads desde el formulario
- Bio corta (para redes sociales, plataformas de freelancing, presentaciones): cómo tener 3 versiones de mi bio (50, 150 y 300 palabras)

**Sección 4 — Presupuestos y propuestas de proyecto documentadas**

Profesionaliza tu documentación comercial con IA:

- Estructura de la propuesta de proyecto: resumen ejecutivo, comprensión del problema, enfoque propuesto, entregables, cronograma, inversión, próximos pasos
- Cómo usar IA para personalizar la propuesta con el contexto específico del cliente a partir de la reunión de briefing
- Plantilla de presupuesto formal: cómo presentar el precio de forma que justifique el valor sin parecer una lista de precios de supermercado
- Cómo documentar el alcance del proyecto (scope) de forma clara para evitar el scope creep
- Proceso de seguimiento post-propuesta: qué documentar sobre el estado de cada propuesta enviada y cómo usar IA para el seguimiento

**Sección 5 — Testimonios y prueba social con IA**

Construye un sistema de recolección y gestión de testimonios:
- Cómo pedir testimonios a los clientes de forma natural y en el momento oportuno: cuándo, cómo y qué preguntar
- Cómo usar IA para transformar el feedback informal del cliente en un testimonio estructurado y persuasivo (con aprobación del cliente)
- Dónde colocar los testimonios en el portfolio para maximizar su impacto en la conversión
- Cómo gestionar testimonios negativos o ambiguos: qué hacer cuando el cliente no está 100% satisfecho
- Construcción de reputación online: cómo usar los testimonios y case studies para posicionarte como referente en tu nicho a través de LinkedIn, comunidades y plataformas especializadas
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Crear portfolio profesional y case studies de proyectos que atraigan mejores clientes usando IA',
                'vote_score'       => 54,
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
