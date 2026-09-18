<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills289Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Producción de contenido a escala: el sistema editorial que no colapsa',
                'description'       => 'Diseña un sistema de producción de contenido sostenible que permita publicar más sin sacrificar calidad ni quemar al equipo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de contenidos con experiencia en medios digitales y marketing de alto volumen. Necesito diseñar un sistema editorial que me permita escalar la producción de contenido sin colapsar al equipo ni sacrificar la calidad. Mi situación actual es la siguiente:

**Contexto de mi operación:**
- Equipo: [describe el tamaño y perfiles del equipo]
- Canales activos: [blog, redes sociales, newsletter, vídeo, podcast, etc.]
- Volumen actual: [número de piezas por semana/mes]
- Objetivo de escala: [a dónde quiero llegar en 6 meses]
- Principal cuello de botella: [revisiones, ideas, producción, distribución]

**Lo que quiero que construyas conmigo:**

1. **Arquitectura editorial base**
Diseña la estructura de un sistema editorial completo: categorías de contenido, pilares temáticos, jerarquía de formatos y relación entre ellos. Explica cómo un artículo largo puede derivar en una docena de piezas más pequeñas (modelo de contenido atómico o cluster).

2. **Calendario y pipeline de producción**
Propón un sistema de gestión del pipeline editorial con estados claros (idea, en redacción, revisión, programado, publicado, reciclado). Incluye recomendaciones sobre qué herramienta usar según el tamaño del equipo (Notion, Airtable, Trello, ClickUp) y cómo configurar las columnas y automatizaciones básicas.

3. **Sistema de briefing y plantillas**
Crea una plantilla de brief editorial que cualquier persona del equipo pueda rellenar en menos de diez minutos y que proporcione toda la información necesaria para que un redactor empiece sin preguntas adicionales. Incluye: objetivo de la pieza, audiencia objetivo, ángulo diferencial, palabras clave principales, estructura sugerida, ejemplos de referencia, tono y extensión.

4. **Flujo de revisión y aprobación**
Diseña un proceso de revisión en el que haya máximo dos rondas: una revisión editorial (fondo, estructura, precisión) y una revisión de estilo y marca. Explica cómo evitar el ciclo infinito de cambios y cómo establecer criterios de aprobación objetivos.

5. **Gestión de la capacidad del equipo**
Explica cómo calcular la capacidad real de producción de un equipo, cómo repartir la carga de trabajo de forma equitativa y cómo identificar cuándo es el momento de externalizar o contratar en lugar de apretar más al equipo interno.

6. **Control de calidad a escala**
Propón un sistema de checklists de calidad que no ralentice la producción: qué revisar siempre, qué se puede delegar a herramientas de IA, qué requiere ojo humano. Incluye los errores más frecuentes que destruyen la calidad cuando se escala (genérico, sin perspectiva propia, sin llamada a la acción, sin datos).

7. **Métricas de producción**
¿Qué indicadores debo seguir para saber si mi sistema editorial funciona? Propón un cuadro de mando sencillo con métricas de eficiencia (tiempo de ciclo, piezas por semana, tasa de rechazo) y de impacto (tráfico generado, leads, engagement por pieza).

8. **Reciclaje y reutilización de contenido**
Diseña una estrategia de content repurposing: cómo identificar qué contenido antiguo merece actualizarse, cómo adaptarlo a diferentes formatos y canales, y cómo integrarlo en el calendario sin que parezca relleno.

**Entrega final:**
Tras el análisis, proporciona un plan de acción en tres fases (semanas 1-2, semanas 3-4, mes 2-3) para implementar este sistema editorial desde cero o mejorar el existente. Cada fase debe tener tareas concretas, responsable sugerido y criterio de éxito medible.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar sistemas editoriales escalables para equipos de marketing',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Technical content production: documentación, tutoriales y demos que educan',
                'description'       => 'Crea un sistema para producir documentación técnica, tutoriales y demos que realmente ayuden a los desarrolladores a usar tu producto o librería.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un technical writer con amplia experiencia en documentación de APIs, SDKs y herramientas de desarrollo. Necesito construir un sistema de producción de contenido técnico que genere documentación, tutoriales y demos que los desarrolladores realmente lean y usen.

**Mi contexto técnico:**
- Tipo de producto: [API, SDK, framework, aplicación SaaS, librería open source]
- Audiencia principal: [desarrolladores frontend, backend, fullstack, DevOps]
- Stack tecnológico del producto: [lenguajes, plataformas, integraciones]
- Estado actual de la documentación: [inexistente, desactualizada, incompleta, funcional pero mejorable]
- Recursos disponibles para documentación: [persona dedicada, tarea compartida, comunidad]

**Estructura del sistema de contenido técnico que necesito:**

1. **Taxonomía de contenido técnico**
Define los tipos de contenido técnico y su propósito: referencia de API (qué hace cada endpoint), guías conceptuales (por qué existe algo), tutoriales paso a paso (cómo hacer algo concreto), guías de inicio rápido (en quince minutos veo valor), recetas o cookbooks (soluciones a problemas comunes), y changelogs. Explica cuándo usar cada tipo.

2. **Estructura de una guía de inicio rápido perfecta**
Diseña la plantilla definitiva para un quickstart que lleve al desarrollador de "acabo de descubrir esto" a "tengo algo funcionando" en menos de veinte minutos. Qué secciones incluir, qué no incluir, cómo manejar los prerrequisitos, cómo escribir los bloques de código y cómo validar que el ejemplo funciona de verdad.

3. **Sistema para tutoriales de calidad**
Propón la estructura de un tutorial técnico: objetivo claro, resultado verificable, pasos numerados con código ejecutable, explicaciones del por qué (no solo el cómo), sección de troubleshooting con errores frecuentes, y enlace al código completo. Incluye recomendaciones sobre longitud, tono y nivel de asunción de conocimientos.

4. **Demos y ejemplos de código**
¿Cómo crear demos que la gente realmente ejecute? Explica las mejores prácticas para ejemplos de código: nombres de variables descriptivos, sin lógica innecesaria que distrae, comentarios que explican decisiones no obvias, manejo visible de errores, y cobertura de los casos de uso más comunes. ¿Cuándo usar un repositorio de ejemplo vs. snippets inline?

5. **Flujo de trabajo para mantener la documentación actualizada**
Este es el mayor problema de la documentación técnica: queda desactualizada. Diseña un proceso para que la documentación se actualice en el mismo sprint o PR que el cambio de código. Incluye estrategias para detectar documentación obsoleta, quién es responsable de actualizar qué, y cómo usar automatización o CI/CD para lograrlo.

6. **Escritura técnica efectiva**
Comparte las reglas fundamentales de escritura técnica: voz activa, oraciones cortas, términos consistentes, evitar la jerga innecesaria, estructura de las explicaciones con el principio de lo general a lo específico, y cómo escribir para lectores que escanean antes de leer en profundidad.

7. **Gestión de la deuda de documentación**
Cómo auditar la documentación existente, priorizar qué arreglar primero, y crear un backlog de mejoras de documentación que conviva con el backlog de producto sin perder siempre la batalla de prioridades.

8. **Métricas de una buena documentación**
¿Cómo sé si mi documentación es buena? Propón métricas accionables: tiempo hasta el primer éxito (time to first success), tasa de abandono en tutoriales, tickets de soporte relacionados con documentación insuficiente, contribuciones de la comunidad, y feedback cualitativo recurrente.

**Entregable:**
Termina con un plan de 90 días para transformar la situación actual de documentación técnica en un sistema sostenible, con hitos claros y criterios de éxito para cada fase.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Crear y mantener documentación técnica efectiva para productos de desarrollo',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Gestión de proyectos de diseño: de la brief al entregable sin caos',
                'description'       => 'Estructura tus proyectos de diseño con flujos claros, briefs efectivos y procesos de revisión que eviten el caos y los cambios infinitos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un design manager con experiencia gestionando proyectos de diseño complejos en agencia y en empresa. Necesito estructurar mi práctica de diseño con procesos claros que eliminen el caos, reduzcan los cambios infinitos y me permitan entregar trabajo de calidad de forma consistente.

**Mi contexto actual:**
- Tipo de trabajo: [freelance, diseñador en empresa, líder de equipo de diseño, agencia]
- Tipos de proyectos habituales: [identidad visual, diseño de producto digital, diseño web, diseño editorial, motion]
- Mayor problema actual: [briefs vagos, revisiones interminables, scope creep, comunicación con clientes, plazos incumplidos]
- Herramientas que uso: [Figma, Adobe Suite, Notion, Slack, etc.]

**Sistema completo de gestión de proyectos de diseño:**

1. **La brief perfecta de diseño**
Diseña una plantilla de brief de diseño que capture todo lo necesario antes de empezar: objetivo del proyecto, audiencia objetivo, referentes visuales (y por qué gustan o no gustan), restricciones técnicas, entregables exactos, plazos por fase, presupuesto y criterios de éxito. Explica cómo hacer la sesión de briefing con el cliente para rellenarla bien, incluyendo las preguntas que nunca debes olvidar hacer.

2. **Fases estándar de un proyecto de diseño**
Define las fases típicas de un proyecto de diseño y qué sucede en cada una: descubrimiento e investigación, exploración conceptual, desarrollo de la dirección elegida, refinamiento y detalles, producción y entregables finales. Qué se entrega al final de cada fase y qué aprobación se necesita antes de avanzar.

3. **Gestión de revisiones y feedback**
Este es el punto donde se gana o se pierde: diseña un proceso de revisión que funcione. Cómo presentar el trabajo para maximizar la calidad del feedback (no mostrar en bruto, contextualizar, guiar la mirada). Cómo documentar el feedback recibido. Cómo establecer un número máximo de rondas de revisión y qué incluir en el contrato para hacerlo cumplir. Cómo manejar feedback contradictorio o subjetivo.

4. **Prevención y gestión del scope creep**
El scope creep es el enemigo del diseñador. Cómo detectarlo temprano, cómo decir no (o cobrar más) sin dañar la relación con el cliente, y cómo documentar los cambios de alcance de forma profesional. Incluye un template de change order o solicitud de cambio de scope.

5. **Comunicación con clientes y stakeholders**
Diseña un sistema de comunicación: qué canal para qué tipo de mensaje, con qué frecuencia comunicarse proactivamente, cómo escribir actualizaciones de progreso que generen confianza, y cómo manejar clientes que desaparecen, que micromanagean o que cambian de opinión constantemente.

6. **Sistema de archivos y versiones**
Propón una estructura de carpetas y convención de nombres de archivos que funcione tanto para proyectos de Figma como para archivos de Adobe. Cómo gestionar versiones (cuándo guardar una nueva versión, cómo nombrarla), cómo organizar los assets, y qué mantener en la nube vs. en local.

7. **Entregables y cierre del proyecto**
Define qué incluye un paquete de entregables profesional según el tipo de proyecto. Cómo preparar los archivos finales para el cliente (formatos, resoluciones, guías de uso). Cómo hacer el handoff a desarrollo cuando aplica. Qué incluir en una sesión de cierre de proyecto y cómo solicitar el testimonio o referencia al cliente satisfecho.

8. **Métricas y aprendizaje continuo**
¿Cómo evaluar si un proyecto fue exitoso? Más allá de la satisfacción del cliente, cómo medir eficiencia (horas estimadas vs. reales), calidad del proceso (número de rondas de revisión, cambios de scope) y aprendizaje (qué mejoraría la próxima vez).

**Plan de acción:**
Termina con una lista de los cinco cambios más importantes que debo implementar este mes para mejorar mi gestión de proyectos de diseño, ordenados por impacto esperado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Gestionar proyectos de diseño con procesos claros y profesionales',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Producción de materiales de ventas: propuestas, decks y collateral que cierran',
                'description'       => 'Crea un sistema para producir propuestas comerciales, presentaciones y materiales de apoyo que aceleren el ciclo de ventas y aumenten la tasa de cierre.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director comercial con experiencia en ventas B2B complejas y en la creación de materiales de ventas de alto impacto. Necesito construir un sistema de producción de materiales comerciales que acelere el ciclo de ventas, mejore la tasa de cierre y posicione a mi empresa de forma diferencial frente a la competencia.

**Mi contexto comercial:**
- Tipo de ventas: [B2B enterprise, B2B SMB, B2C, transaccional, consultivo]
- Ticket medio: [rango de precio de los contratos habituales]
- Ciclo de ventas típico: [duración y fases del proceso]
- Principales competidores: [cómo se posicionan]
- Mayor debilidad actual de los materiales de ventas: [demasiado genéricos, sin historias de éxito, mal diseño, difíciles de personalizar]

**Sistema de producción de materiales comerciales:**

1. **Inventario de materiales de ventas necesarios por etapa del funnel**
Mapea qué material necesita un comercial en cada etapa del proceso de venta: en la prospección (cold email, secuencias de LinkedIn, one-pager de empresa), en el descubrimiento (guía de preguntas de calificación), en la propuesta (deck de propuesta, propuesta escrita, scope of work), en el cierre (business case, comparativa competidora, testimonios y casos de éxito), y en el onboarding (kit de bienvenida, guía de implementación). ¿Qué tiene más impacto en la tasa de cierre?

2. **La propuesta comercial ganadora**
Diseña la estructura de una propuesta que cierre: empieza con el problema del cliente (no con tu empresa), presenta tu comprensión de la situación actual, cuantifica el coste de no actuar, presenta la solución en términos de resultados (no de características), muestra evidencia social relevante (casos de éxito del mismo sector o tamaño), detalla el plan de implementación con hitos, presenta el precio en contexto de ROI, incluye garantías que reduzcan el riesgo percibido y termina con una llamada a la acción clara con fecha límite.

3. **El deck de presentación comercial**
¿Cómo construir un deck que se vende solo cuando el comercial no está presente? Estructura de una presentación de ventas efectiva, reglas de diseño para que sea visual y legible, cómo equilibrar texto e imagen, cómo incluir datos sin abrumar, y cómo crear versiones adaptadas a diferentes audiencias (CEO, CTO, CFO, usuario final).

4. **Sistema de personalización a escala**
El mayor error del collateral de ventas es ser demasiado genérico. Crea un sistema de personalización: qué partes de cada material son fijas (marca, mensajes clave) y qué partes son variables (referencias al sector del cliente, casos de éxito relevantes, lenguaje adaptado). Cómo usar plantillas que permitan personalizar en minutos, no en horas.

5. **Casos de éxito y testimonios**
Los casos de éxito son el material de ventas más persuasivo y el menos producido. Diseña un proceso para capturarlos sistemáticamente: qué preguntas hacer al cliente satisfecho, la estructura narrativa de un buen caso de éxito (situación, problema, solución, resultados cuantificados), los formatos posibles (PDF de una página, vídeo de dos minutos, cita corta para el deck) y cómo manteneros actualizados.

6. **Flujo de aprobación y control de versiones**
Cómo gestionar las versiones de los materiales de ventas: quién aprueba cambios, cómo comunicar al equipo comercial que hay una versión actualizada, cómo retirar materiales obsoletos de circulación y cómo asegurarse de que todos los comerciales usan las versiones correctas.

7. **Sales enablement: formación en el uso de materiales**
Los materiales más bien diseñados no sirven de nada si el equipo no sabe usarlos. Propón un plan de formación y activación: cómo presentar un nuevo material al equipo, qué incluir en una guía de uso, y cómo recoger feedback del equipo sobre qué funciona y qué no en el proceso de ventas real.

8. **Métricas para evaluar la efectividad de los materiales**
¿Cómo sé si mis materiales de ventas están funcionando? Métricas de uso (qué materiales se usan más), métricas de impacto (correlación entre uso de material y tasa de cierre, velocidad del ciclo de ventas) y cómo recoger feedback cualitativo del equipo comercial de forma sistemática.

**Entregable final:**
Plan de tres meses para auditar, mejorar y sistematizar la producción de materiales de ventas, con prioridades claras basadas en el impacto en la tasa de cierre.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Crear materiales de ventas efectivos que aceleren el cierre de negocios',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product content operations: gestionar el contenido del producto como un sistema',
                'description'       => 'Construye un sistema de gestión del contenido del producto —UX writing, documentación, comunicaciones— que escale con el equipo y el producto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un head of content o product operations manager con experiencia en gestión de contenido de producto en empresas de tecnología en crecimiento. Necesito estructurar todo el contenido que rodea al producto —UX writing, help center, comunicaciones en el producto, release notes— como un sistema coherente y escalable.

**Mi contexto de producto:**
- Tipo de producto: [SaaS B2B, B2C, marketplace, plataforma, app móvil]
- Fase de la empresa: [early stage, growth, escala]
- Equipo actual que toca el contenido: [product managers, diseñadores, engineers, sin UX writer dedicado]
- Idiomas y mercados: [un mercado o multilingüe]
- Principal problema con el contenido actual: [inconsistente, desactualizado, sin sistema, generado ad hoc]

**Sistema completo de product content operations:**

1. **Inventario y taxonomía del contenido del producto**
Define todos los tipos de contenido que vive en y alrededor de un producto digital: microcopy (botones, placeholders, mensajes de error, tooltips, estados vacíos), comunicaciones en el producto (onboarding, notificaciones, emails transaccionales, mensajes de upsell), documentación de ayuda (artículos de soporte, tutoriales en vídeo, FAQs), y comunicaciones de cambios (release notes, anuncios de nuevas funcionalidades, alertas de mantenimiento). Explica quién debería ser responsable de cada tipo.

2. **Content design y UX writing: principios fundamentales**
Aunque no tenga un UX writer dedicado, el equipo necesita principios para escribir bien. Comparte las reglas esenciales de UX writing: ser específico en lugar de genérico, usar lenguaje de acción, escribir para el momento de uso (no para el manual), consistencia terminológica, tono según el contexto emocional del usuario (error vs. celebración), y cómo escribir mensajes de error que no sean frustrantes.

3. **Guía de voz y tono del producto**
Crea el esquema de una guía de voz y tono adaptada al producto: atributos de la voz de la marca (en qué consiste, cómo suena, qué no es), tabla de tono según situación (onboarding entusiasta pero no condescendiente, error empático pero útil, upsell sin presión excesiva), y ejemplos de antes/después para cada situación.

4. **Sistema de gestión de strings y traducciones**
Propón cómo gestionar los strings de contenido del producto (especialmente si hay o habrá internacionalización): organización de los archivos de strings, convenciones de naming, proceso para actualizar o añadir strings sin romper nada, y cómo gestionar las traducciones sin perder el contexto que los traductores necesitan.

5. **Proceso de content review integrado en el ciclo de desarrollo**
Uno de los problemas más frecuentes: el contenido se revisa al final, cuando ya es tarde para cambios profundos. Diseña un proceso en el que la revisión de contenido esté integrada desde el diseño: en qué fase del proceso de diseño o desarrollo se revisa el copy, quién lo revisa, qué criterios se usan, y cómo documentar las decisiones de contenido en los tickets.

6. **Help center y documentación de usuario**
Estructura un help center efectivo: jerarquía de categorías y artículos, plantilla de artículo de soporte, criterios para crear nuevo contenido vs. mejorar existente, proceso de actualización cuando el producto cambia, y cómo medir si los artículos resuelven el problema del usuario (deflexión de tickets de soporte).

7. **Release notes y comunicaciones de cambios**
Diseña un sistema para comunicar cambios al producto: cuándo comunicar qué (bug fix vs. mejora menor vs. nueva funcionalidad vs. cambio disruptivo), la plantilla de release notes que la gente realmente lee, y cómo distribuir los cambios por los canales adecuados (en el producto, por email, en blog, en redes).

8. **Métricas de content operations**
¿Cómo medir si el sistema de contenido del producto funciona? Propón métricas de calidad del contenido (consistencia terminológica, cobertura de estados de error), de efectividad (deflexión de soporte gracias al help center, completion rate del onboarding) y de eficiencia del proceso (tiempo de revisión de contenido por release, errores de copy detectados en producción).

**Plan de implementación:**
Cierra con una hoja de ruta de doce semanas para transformar el contenido del producto de algo ad hoc a un sistema gestionado, con quick wins en las primeras dos semanas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Gestionar el contenido del producto como un sistema coherente y escalable',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Producción de contenido de employer branding: videos, posts y campañas internas',
                'description'       => 'Crea contenido de employer branding auténtico y sistemático que atraiga talento, refuerce la cultura y amplifique la marca como empleador.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en employer branding y comunicación interna con experiencia en empresas de tecnología y consultoría. Necesito construir un sistema de producción de contenido de employer branding que sea auténtico, escalable con recursos limitados y que genere un impacto real en la atracción y retención de talento.

**Mi contexto de empresa y RRHH:**
- Tamaño de empresa: [número de empleados y fases de crecimiento]
- Sector y tipo de perfiles que necesito atraer: [ingenieros, comerciales, diseñadores, etc.]
- Estado actual del employer branding: [inexistente, iniciativas aisladas, hay algo pero sin sistema]
- Canales disponibles: [LinkedIn, Instagram, web de empleo, eventos, Glassdoor]
- Recursos para producción: [persona dedicada, tarea compartida con marketing, presupuesto disponible]

**Sistema de producción de contenido de employer branding:**

1. **Estrategia de contenido: pilares y mensajes clave**
Define los pilares de contenido de employer branding: la cultura y los valores (cómo se viven en el día a día, no en el PowerPoint), el equipo y las personas (historias reales de empleados), el crecimiento profesional (qué oportunidades de desarrollo existen), el impacto del trabajo (qué construye o mejora la empresa en el mundo), y el entorno de trabajo (cómo son las oficinas, el trabajo en remoto, la flexibilidad). Para cada pilar, propone tres tipos de contenido concretos.

2. **Programa de employee advocacy**
El mejor contenido de employer branding lo crean los propios empleados. Diseña un programa de embajadores internos: cómo identificarlos, cómo motivarlos (sin presionarlos), cómo facilitarles la creación de contenido (plantillas, formación, aprobaciones), y cómo amplificar lo que publican. Incluye cómo manejar el contenido espontáneo de empleados (positivo y negativo).

3. **Producción de vídeos de employer branding con recursos limitados**
No todos tienen presupuesto para producción cinematográfica. Propón una guía para crear vídeos de employer branding de calidad con un smartphone y herramientas básicas: formatos que funcionan (día en la vida, por qué trabajo aquí, visita a oficinas, entrevistas en sala), guión tipo para cada formato, consejos técnicos básicos (luz, audio, encuadre), y cómo editar en Capcut, CapCut o herramientas similares sin ser profesional.

4. **Contenido para LinkedIn: qué funciona y qué no**
LinkedIn es el canal principal de employer branding B2B. Diseña un calendario mensual de contenido de employer branding para LinkedIn con formatos variados: post de texto con historia personal, carrusel de cultura, vídeo de testimonio de empleado, encuesta de engagement, post de celebración de hito de equipo. Para cada formato, proporciona una plantilla y los criterios de un buen post.

5. **Campañas internas para reforzar la cultura**
El employer branding no es solo externo. Diseña tres campañas internas para reforzar la cultura: una campaña de reconocimiento entre pares, una campaña de valores en acción (mostrar ejemplos reales de los valores de la empresa), y una campaña de story-sharing donde los empleados comparten su historia con la empresa. Para cada campaña, explica la mecánica, el canal, la duración y las métricas de éxito.

6. **Gestión de Glassdoor y reseñas**
Las reseñas en Glassdoor son el primer filtro de muchos candidatos. Diseña una estrategia para gestionar la presencia en Glassdoor: cómo solicitar reseñas a empleados satisfechos (sin presionar ni sesgar), cómo responder a reseñas negativas de forma constructiva, qué información debe estar siempre actualizada, y cómo usar el feedback de Glassdoor para mejorar la experiencia del empleado.

7. **Calendario editorial de employer branding**
Crea la estructura de un calendario editorial mensual de employer branding que combine contenido planificado con espacio para contenido espontáneo y oportunidades del momento (eventos de empresa, logros del equipo, noticias del sector). Incluye quién es responsable de cada tipo de contenido y el flujo de aprobación.

8. **Métricas de employer branding**
¿Cómo medir si la estrategia de employer branding funciona? Propón métricas de atracción (número y calidad de candidaturas espontáneas, tasa de conversión de candidatos, coste por contratación), de engagement de la marca (seguidores, alcance, interacciones en LinkedIn), de reputación (puntuación en Glassdoor, NPS de candidatos) y de retención (rotación no deseada antes y después de implementar la estrategia).

**Plan de los próximos noventa días:**
Cierra con un roadmap trimestral para lanzar o relanzar el employer branding de la empresa desde cero, con hitos concretos en cada mes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Crear contenido de employer branding auténtico para atraer y retener talento',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Producción de informes financieros: eficiencia en la generación de reportes',
                'description'       => 'Automatiza y optimiza la producción de informes financieros para reducir el tiempo de elaboración y mejorar la calidad y utilidad de los reportes.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un controller financiero o CFO con amplia experiencia en la optimización de procesos de reporting financiero. Necesito transformar la producción de informes financieros de mi empresa: reducir el tiempo de elaboración, mejorar la calidad de los análisis y convertir los reportes en herramientas de decisión reales en lugar de documentos que nadie lee.

**Mi contexto financiero:**
- Tipo de empresa: [startup, pyme, filial de multinacional, empresa familiar]
- Equipo financiero: [controller solo, equipo de dos o tres personas, departamento completo]
- Tipos de informes que produzco: [P&L mensual, balance, cashflow, presupuesto vs. real, KPIs de negocio]
- Herramientas actuales: [Excel, Power BI, ERP específico, Google Sheets]
- Mayor problema en el proceso de reporting: [tarda demasiado, demasiado manual, errores frecuentes, nadie lo entiende, no genera debate]

**Sistema de producción eficiente de informes financieros:**

1. **Arquitectura del modelo de reporting**
Diseña la estructura de un modelo de reporting financiero moderno: fuente única de verdad (single source of truth), separación entre datos brutos, datos procesados y presentación, definición clara de las métricas y KPIs con su fórmula exacta, y diccionario de datos compartido con toda la empresa. Cómo evitar tener múltiples versiones del P&L que no cuadran entre sí.

2. **Automatización del proceso de cierre**
El cierre mensual no debería tardar más de dos días laborables. Propón un calendario de cierre optimizado: qué tareas se pueden automatizar (conciliaciones, consolidaciones, carga de datos), qué requiere revisión humana, cómo usar herramientas como Excel con Power Query, Python con pandas, o el ERP para eliminar pasos manuales, y cómo documentar el proceso para que cualquier miembro del equipo pueda ejecutarlo.

3. **Diseño de informes que se leen y generan debate**
La mayoría de los informes financieros son documentos que nadie lee. Diseña plantillas de informe financiero efectivas: resumen ejecutivo de una página con los mensajes clave, visualizaciones que facilitan la comprensión de tendencias, narrativa que explica el por qué detrás de los números (no solo el qué), comparaciones relevantes (vs. presupuesto, vs. año anterior, vs. benchmark del sector), y llamadas a la acción claras para quien toma decisiones.

4. **Presupuesto vs. real: análisis de desviaciones**
La comparativa presupuesto vs. real es el informe más importante y el menos explotado. Diseña una metodología de análisis de desviaciones: umbral de materialidad (cuándo una desviación merece análisis), categorización de desviaciones por causa (precio, volumen, mix, timing), formato de presentación del análisis de desviaciones, y cómo convertirlo en aprendizaje para la próxima iteración del presupuesto.

5. **Dashboard financiero en tiempo real**
Propón la arquitectura de un dashboard financiero que funcione entre cierres: qué KPIs mostrar (caja disponible, ventas del mes en curso, margen por línea de negocio, principales partidas de gasto variable), con qué frecuencia actualizarlo, qué herramienta usar según el presupuesto disponible (desde Google Data Studio gratuito hasta Power BI o Tableau), y cómo asegurarse de que los datos son confiables.

6. **Gestión del proceso de presentación a dirección**
Un informe financiero bien hecho pero mal presentado no genera el debate que merece. Diseña el proceso de presentación del reporting financiero a dirección o al consejo: estructura de la reunión, cómo preparar al director financiero para el debate, cómo anticipar las preguntas difíciles, y cómo documentar las decisiones tomadas en la reunión para hacer seguimiento.

7. **Documentación y transferencia de conocimiento**
Si el proceso de reporting depende de una sola persona, la empresa tiene un riesgo enorme. Propón un sistema de documentación del proceso de reporting: cómo documentar cada paso en el cierre, dónde guardar la documentación, cómo asegurar que está actualizada, y cómo hacer onboarding de nuevos miembros del equipo financiero en el proceso.

8. **Métricas del propio proceso de reporting**
¿Cómo sé si mi proceso de reporting es eficiente? Propón métricas del proceso: días de cierre (desde el fin del mes hasta la publicación del informe), horas de trabajo del equipo por cierre, número de errores detectados post-publicación, nivel de satisfacción de los receptores del informe, y número de decisiones documentadas tomadas a partir del informe.

**Entregable:**
Plan de mejora del proceso de reporting en noventa días, con las tres iniciativas de mayor impacto para reducir el tiempo de cierre y mejorar la utilidad de los informes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Optimizar la producción de informes financieros para reducir tiempo y mejorar calidad',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Producción jurídica eficiente: contratos, informes y documentación sin cuellos de botella',
                'description'       => 'Diseña un sistema de producción de documentación jurídica que elimine los cuellos de botella, reduzca los tiempos y mantenga la calidad.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director jurídico o abogado senior con amplia experiencia en la gestión de despachos y departamentos legales de empresa. Necesito diseñar un sistema de producción jurídica eficiente que elimine los cuellos de botella en la generación de contratos, informes y documentación jurídica sin sacrificar la precisión y calidad que exige la práctica legal.

**Mi contexto jurídico:**
- Tipo de práctica: [abogado individual, despacho boutique, departamento jurídico de empresa, firma de servicios profesionales]
- Volumen de documentación: [número aproximado de contratos o documentos por mes]
- Tipos de documentos más frecuentes: [contratos mercantiles, acuerdos de confidencialidad, contratos laborales, dictámenes, due diligence, etc.]
- Mayor cuello de botella actual: [revisiones, primera versión, coordinación con clientes, firmas y gestión documental]
- Herramientas actuales: [Word, plataformas de gestión jurídica, firma electrónica]

**Sistema de producción jurídica eficiente:**

1. **Biblioteca de plantillas y cláusulas reutilizables**
El mayor ahorro de tiempo en producción jurídica viene de no empezar desde cero. Diseña la arquitectura de una biblioteca de plantillas: qué documentos merecen tener una plantilla base (los que se repiten con frecuencia), cómo estructurar las plantillas con secciones fijas y secciones variables claramente identificadas, y cómo gestionar una biblioteca de cláusulas estándar aprobadas que puedan insertarse según el caso. Incluye criterios para decidir cuándo usar una plantilla y cuándo es necesario redactar ad hoc.

2. **Primera versión eficiente con apoyo de IA**
La redacción de la primera versión es donde se pierde más tiempo. Explica cómo usar herramientas de IA (como Claude) para acelerar la primera versión de contratos e informes: qué tipo de instrucciones dar para obtener un borrador útil, cómo verificar lo que genera la IA antes de enviarlo al cliente, qué tipos de documentos son más seguros para este uso y qué riesgos hay que tener en cuenta. El objetivo es que la IA genere el ochenta por ciento del trabajo estructural y el abogado aporte el veinte por ciento de criterio y personalización.

3. **Proceso de revisión jurídica eficiente**
Define un proceso de revisión que no se convierta en un cuello de botella: quién revisa qué (no todo necesita revisión del socio senior), checklist de revisión para cada tipo de documento (qué verificar siempre: partes correctamente identificadas, ley aplicable, mecanismos de resolución de disputas, plazos, representaciones y garantías), y límite de rondas de revisión interna antes de enviar al cliente.

4. **Gestión de las negociaciones de contratos**
Las negociaciones de contratos son las que más tiempo consumen. Diseña un proceso de gestión de redlines: cómo recibir y procesar el markup del cliente de forma eficiente, cómo decidir qué ceder y qué defender en las negociaciones, cómo documentar las posiciones acordadas y el historial de negociación, y cómo usar las negociaciones anteriores como base para las futuras.

5. **Flujo de firmas y cierre de documentos**
El proceso de firma es donde muchos contratos se atascan. Diseña un flujo de cierre de documentos: lista de verificación previa a la firma (versión final bloqueada, partes correctas, anexos incluidos), proceso de firma electrónica (qué plataformas usar, cómo configurar el flujo de firmas, cómo hacer seguimiento), y proceso de archivo post-firma (dónde guardar, cómo nombrar, quién recibe copia).

6. **Gestión del archivo documental**
Un buen archivo es un activo estratégico: permite reutilizar trabajo anterior, evita errores repetidos y facilita las due diligence. Diseña la arquitectura de un archivo jurídico digital: estructura de carpetas, convención de nombres, metadatos de búsqueda, accesos y permisos, política de retención y eliminación, y cómo migrar el archivo actual si está en papel o en desorden.

7. **Informes jurídicos y dictámenes**
Los informes y dictámenes son el producto más visible del trabajo jurídico de análisis. Diseña la estructura de un informe jurídico efectivo: resumen ejecutivo para el cliente no abogado, análisis jurídico estructurado, conclusiones y recomendaciones claras, y nivel de incertidumbre explicitado. ¿Cómo escribir un dictamen que el cliente entienda y que proteja al abogado?

8. **Métricas de eficiencia jurídica**
¿Cómo medir si el sistema de producción jurídica es eficiente? Propón indicadores: tiempo promedio de elaboración de los tipos de documento más frecuentes, número de rondas de revisión interna, tiempo de respuesta al cliente, tasa de reutilización de plantillas, y satisfacción del cliente con los plazos de entrega.

**Plan de implementación:**
Termina con las cinco acciones más impactantes que puedo tomar este mes para mejorar la eficiencia de mi producción jurídica, ordenadas por facilidad de implementación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Optimizar la producción de documentación jurídica eliminando cuellos de botella',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Producción de contenido de customer success: casos de éxito, webinars y recursos',
                'description'       => 'Crea un sistema de producción de contenido de CS que demuestre el valor del producto, eduque a los clientes y construya una comunidad de usuarios exitosos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un head of customer success con experiencia en empresas SaaS en crecimiento. Necesito construir un sistema de producción de contenido de customer success que demuestre el valor del producto a través de historias reales, eduque a los clientes para que obtengan más valor y construya una comunidad de usuarios exitosos que se conviertan en defensores de la marca.

**Mi contexto de customer success:**
- Tipo de producto y empresa: [SaaS B2B, plataforma, herramienta de productividad]
- Número de clientes actuales: [rango aproximado]
- Equipo de CS: [tamaño y perfiles]
- Recursos de contenido disponibles: [persona dedicada a contenido, equipo de CS sin dedicación exclusiva]
- Tipos de contenido que más impacto tienen en mi sector: [casos de éxito escritos, webinars, vídeos de producto, recursos descargables]

**Sistema de producción de contenido de customer success:**

1. **Estrategia de contenido de CS: el mapa completo**
Define los tipos de contenido de customer success y su propósito en el ciclo de vida del cliente: contenido de onboarding (guías de inicio, vídeos de setup, checklists), contenido de adopción (tutoriales de funcionalidades avanzadas, mejores prácticas), contenido de expansión (casos de uso nuevos, integraciones, funcionalidades premium), y contenido de advocacy (casos de éxito, testimonios, participación en webinars como cliente). ¿Qué contenido tiene más impacto en la retención y en la expansión?

2. **Sistema de producción de casos de éxito**
Los casos de éxito son el contenido más persuasivo y el menos producido. Diseña un proceso completo: cómo identificar los clientes adecuados para un caso de éxito (resultados cuantificados, disposición a participar, representatividad del ICP), cómo hacer la entrevista al cliente para extraer la información necesaria (qué preguntas hacer, cómo capturar datos de impacto), la estructura narrativa de un buen caso de éxito (situación antes, reto, solución, resultados con números, cita del cliente), y los formatos posibles (PDF de dos páginas, post de blog, vídeo de dos minutos, cita corta para la web).

3. **Programa de webinars de customer success**
Los webinars son el canal más escalable para la formación de clientes. Diseña un programa de webinars: tipología (formación en producto, mejores prácticas del sector, panel de clientes, sesión de preguntas y respuestas con el equipo de producto), frecuencia recomendada, proceso de producción (desde la elección del tema hasta el seguimiento post-webinar), plantilla de invitación y recordatorio, y cómo maximizar la asistencia y el engagement durante el webinar.

4. **Base de conocimiento y recursos de autoservicio**
Una buena base de conocimiento reduce las consultas repetitivas al equipo de CS y empodera al cliente. Diseña la arquitectura de una base de conocimiento efectiva: estructura de categorías, plantilla de artículo de ayuda, criterios para decidir qué contenido necesita la base de conocimiento (los temas más consultados al soporte), proceso de actualización cuando el producto cambia, y cómo medir si los artículos resuelven el problema del cliente.

5. **Programa de community y peer learning**
Los clientes aprenden mejor de otros clientes que del propio equipo de CS. Diseña las bases de un programa de comunidad: plataforma (Slack, Discourse, Circle, comunidad dentro del producto), tipos de contenido generado por la comunidad, rol del equipo de CS como facilitador (no como protagonista), eventos de comunidad (meetups virtuales, office hours, foros temáticos), y cómo medir la salud de la comunidad.

6. **Contenido de expansión: cómo usar el contenido para crecer dentro de la cuenta**
El contenido de CS no es solo para retener, también es para crecer dentro de la cuenta. Diseña una estrategia de contenido de expansión: cómo identificar oportunidades de upsell o cross-sell a través del consumo de contenido, guías de casos de uso avanzados que crean demanda para funcionalidades premium, y cómo personalizar el contenido según el perfil del cliente (tamaño, sector, madurez en el uso del producto).

7. **Flujo de producción y calendario editorial de CS**
Cómo organizar la producción de todo este contenido con recursos limitados: calendario editorial mensual de CS, proceso de creación de cada tipo de contenido (quién hace qué, tiempos estimados, flujo de revisión), y cómo reutilizar el contenido entre canales (un webinar genera un artículo, un clip de vídeo, una secuencia de emails y un post en LinkedIn).

8. **Métricas de impacto del contenido de CS**
¿Cómo medir si el contenido de customer success está funcionando? Propón métricas de adopción del contenido (vistas, descargas, asistencia a webinars), métricas de impacto en el cliente (NPS de clientes que consumen contenido vs. los que no, tasa de adopción de funcionalidades después de tutoriales), y métricas de negocio (retención, expansión, NRR correlacionado con consumo de contenido).

**Entregable:**
Plan de noventa días para lanzar o relanzar el sistema de contenido de customer success, con prioridades claras y quick wins en las primeras dos semanas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Crear contenido de CS que mejore la retención y convierta clientes en defensores',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Sistema de producción del freelance: entregar calidad sin agotarse',
                'description'       => 'Diseña tu sistema personal de producción como freelance para entregar trabajo de calidad de forma consistente sin caer en el agotamiento.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de productividad y operaciones para freelancers con amplia experiencia ayudando a profesionales independientes a construir negocios sostenibles. Necesito diseñar mi sistema personal de producción como freelance: un conjunto de procesos, herramientas y hábitos que me permitan entregar trabajo de calidad de forma consistente sin trabajar más horas de la cuenta ni acabar agotado.

**Mi situación actual como freelance:**
- Especialidad o servicio principal: [diseño, redacción, desarrollo, consultoría, coaching, etc.]
- Número de clientes activos típico: [rango habitual]
- Mayor problema de productividad actual: [dificultad para estimar tiempos, interrupciones constantes, tiempo entre proyectos sin ingresos, entregar tarde, trabajar demasiadas horas]
- Herramientas que ya uso: [Notion, Trello, Toggl, Harvest, etc.]
- Objetivo de horas semanales de trabajo: [número de horas que considera sostenible]

**Sistema completo de producción para freelancers:**

1. **Arquitectura de tu semana de trabajo ideal**
Diseña la estructura de una semana de trabajo ideal para un freelance: cómo distribuir el tiempo entre trabajo de cliente (tiempo facturable), trabajo en el negocio (marketing, administración, desarrollo de habilidades) y tiempo de recarga (sin pantallas, sin temas de trabajo). Propón un modelo de semana con bloques de tiempo protegidos, días de foco profundo vs. días de reuniones, y cómo manejar la variabilidad semanal sin perder la estructura.

2. **Sistema de gestión de proyectos personal**
Un freelance es su propio project manager. Diseña un sistema de gestión de proyectos que funcione cuando gestionas varios clientes en paralelo: cómo organizar los proyectos activos (Notion, ClickUp, o incluso una hoja de cálculo bien estructurada), cómo usar un sistema de tareas diario que conecte con los proyectos activos, y cómo hacer el cierre semanal para evaluar avances y planificar la semana siguiente.

3. **Estimación de tiempos y control de la rentabilidad**
Uno de los mayores errores del freelance es subestimar el tiempo que tarda un proyecto. Propón un sistema de estimación: cómo desglosar el proyecto en tareas antes de estimar, cómo aplicar un factor de corrección basado en experiencia propia, cómo usar el registro de tiempos (time tracking) para aprender de las estimaciones pasadas, y cómo calcular si un proyecto es rentable o está por debajo del valor de tu hora real.

4. **Flujos de trabajo repetibles y plantillas**
La mayor fuente de eficiencia del freelance es no tener que reinventar el proceso en cada proyecto. Diseña flujos de trabajo estándar para los tipos de proyecto más frecuentes: desde el onboarding del cliente (qué información recopilar, qué contrato firmar, cómo establecer expectativas) hasta el cierre (entregables finales, solicitud de testimonio, factura final). Incluye qué plantillas merece la pena tener preparadas y cómo mantenerlas actualizadas.

5. **Gestión de múltiples clientes sin perder el norte**
Tener varios clientes en paralelo es uno de los mayores retos cognitivos del freelance. Propón estrategias para gestionar el cambio de contexto: cómo organizar la información de cada cliente en un lugar accesible, rituales de cambio de contexto entre proyectos, cómo establecer expectativas de disponibilidad con cada cliente, y cómo manejar los días en que todo parece urgente al mismo tiempo.

6. **Producción en batch: hacer más trabajando menos**
El batch working (agrupar tareas similares en bloques) es uno de los principios de productividad más potentes para freelancers. Explica cómo aplicarlo: agrupar todas las revisiones en un bloque, todas las reuniones en dos días, toda la escritura de propuestas en una sesión, y toda la administración en una hora semanal. Cómo adaptar este principio a la naturaleza impredecible del trabajo freelance.

7. **Prevención del agotamiento: señales y estrategias**
El burnout del freelance tiene causas específicas: incertidumbre de ingresos, falta de estructura, clientes difíciles, aislamiento, y la dificultad de desconectar. Diseña un sistema de prevención del agotamiento: indicadores tempranos de sobrecarga o desgaste, rituales de desconexión al final del día, cómo decir no o pausar la entrada de nuevos proyectos cuando estás al límite, y cómo gestionar los períodos de baja demanda sin ansiedad.

8. **Métricas del negocio freelance**
Para tomar buenas decisiones como freelance necesitas datos sobre tu propio negocio. Propón un cuadro de mando mensual sencillo: ingresos facturados y cobrados, horas trabajadas por cliente y por tipo de tarea, rentabilidad por proyecto (ingresos divididos entre horas reales), tasa de utilización (horas facturables divididas entre horas totales), y pipeline de proyectos para los próximos dos meses.

**Entregable:**
Termina con un plan de implementación en cuatro semanas para construir o mejorar tu sistema de producción personal, empezando por los cambios que generan más impacto con menos esfuerzo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar un sistema personal de producción sostenible para freelancers',
                'vote_score'        => 44,
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
