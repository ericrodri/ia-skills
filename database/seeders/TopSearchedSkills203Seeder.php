<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills203Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing inclusivo: llegar a todos sin excluir a nadie',
                'description'      => 'El marketing que representa a toda la audiencia: lenguaje inclusivo, representación en las imágenes y campañas que resuenan en comunidades diversas sin caer en la apropiación cultural.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de marketing con especialización en marketing inclusivo y diversidad de audiencias, con experiencia desarrollando campañas para marcas globales que necesitan conectar con comunidades diversas de forma auténtica. Voy a explorar contigo cómo construir una práctica de marketing genuinamente inclusivo.

Mi contexto: [describe tu empresa o marca: tipo de producto, audiencia actual y la diversidad que quieres representar mejor en tu comunicación]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. Por qué el marketing inclusivo importa y por qué la mayoría lo hace mal**
El marketing inclusivo no es un ejercicio de relaciones públicas: es una decisión de negocio con impacto medible en el alcance y la relevancia de la marca. Explícame el caso de negocio del marketing inclusivo: el tamaño de los segmentos de audiencia que el marketing tradicional deja fuera, el costo real de la exclusión (pérdida de clientes, daño de reputación, campañas que se vuelven virales por las razones equivocadas) y la diferencia entre el marketing inclusivo auténtico (que surge de la comprensión real de las comunidades) y el performativo (que usa la diversidad como accesorio visual sin comprensión de fondo).

**2. El lenguaje inclusivo en el marketing**
Las palabras que usamos incluyen o excluyen a las personas antes de que vean una sola imagen. Explícame cómo aplicar el lenguaje inclusivo en el marketing: la diferencia entre el lenguaje neutro (que no asume género, edad, capacidad o cultura del lector), el lenguaje representativo (que nombra activamente a grupos que históricamente se han invisibilizado) y el lenguaje afirmativo (que transforma la narrativa sobre colectivos que han sido retratados negativamente). Los errores más comunes: el uso de términos que han dejado de ser aceptables, el lenguaje condescendiente hacia ciertos grupos y las frases que asumen una experiencia de vida uniforme.

Dame un proceso de revisión de copy que el equipo de marketing pueda integrar en su flujo de trabajo.

**3. La representación visual: más allá de la diversidad decorativa**
Las imágenes que elegimos comunican a quién se dirige nuestra marca y quién forma parte de ella. Explícame cómo construir una práctica de representación visual auténtica: la diferencia entre la diversidad decorativa (poner personas diversas en las fotos sin cambiar nada más) y la representación real (donde la diversidad de los protagonistas está integrada en la narrativa de la pieza), los sesgos en la representación visual que hay que evitar (la tokenización, los estereotipos visuales, la representación de ciertos grupos solo en contextos limitados), y el proceso de selección de imágenes y producción fotográfica que incorpora la diversidad desde la planificación y no como corrección de último momento.

**4. Llegar a comunidades diversas con autenticidad**
Cada comunidad tiene sus propios códigos culturales, referencias y formas de comunicarse. Explícame cómo desarrollar campañas que resuenen en comunidades diversas sin caer en la apropiación o la superficialidad: el proceso de investigación cultural que debe preceder cualquier campaña dirigida a una comunidad específica, el rol de las personas de esa comunidad en el proceso creativo (no como validadores finales sino como co-creadores), y cómo construir relaciones genuinas con comunidades diversas que van más allá de la campaña puntual.

**5. La apropiación cultural: cómo reconocerla y evitarla**
La apropiación cultural es uno de los errores más dañinos y más evitables en el marketing. Explícame qué es la apropiación cultural en el contexto del marketing: la diferencia entre la apreciación cultural (que da crédito, es respetuosa y beneficia a la comunidad de origen) y la apropiación (que toma elementos culturales sin comprensión ni reconocimiento de su origen), los casos más comunes de apropiación en el marketing (el uso de símbolos sagrados, la estética de culturas no occidentales como accesorio de moda, el dialecto y el argot de comunidades como recurso humorístico), y el proceso de revisión que permite detectar el riesgo de apropiación antes de que la campaña sea pública.

**6. Medir el impacto del marketing inclusivo**
El marketing inclusivo debe demostrar su valor con datos. Propón el sistema de métricas del marketing inclusivo: las métricas de representación (auditoría de la diversidad en las piezas de comunicación), las métricas de alcance (¿el marketing llega a las comunidades que quiere representar?), las métricas de percepción (encuestas de brand perception segmentadas por demografía) y las métricas de negocio (impacto en conversión y retención en segmentos históricamente excluidos). El proceso de auditoría periódica del contenido de marketing desde la perspectiva de la inclusión.

Quiero concreción: ejemplos de campañas de marketing inclusivo que lo han hecho bien y las que han fallado de forma pública, con el análisis de por qué. Y el proceso paso a paso que puedo implementar en mi equipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Desarrollar campañas y comunicación de marketing que sean genuinamente inclusivas y representativas',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Accesibilidad web (WCAG) para developers',
                'description'      => 'Construye aplicaciones que funcionan para todos: niveles de conformidad WCAG, técnicas de implementación y el proceso de testing de accesibilidad que el equipo puede integrar en el flujo de desarrollo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un senior developer especializado en accesibilidad web con experiencia implementando los estándares WCAG en aplicaciones web de distintas tecnologías y complejidades. Voy a explorar contigo cómo construir aplicaciones accesibles de forma sistemática.

Mi contexto: [describe tu stack tecnológico: framework frontend (React, Vue, Angular u otro), tipo de aplicación (SPA, SSR, web app compleja) y el nivel actual de accesibilidad de tu producto]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. Los estándares WCAG: qué son y qué exigen**
Las Web Content Accessibility Guidelines son la referencia internacional de accesibilidad web. Explícame los fundamentos que todo developer debe conocer: los cuatro principios WCAG (Perceptible, Operable, Comprensible, Robusto), los tres niveles de conformidad (A, AA y AAA) y qué implica cada uno en la práctica, cuál es el nivel que la mayoría de las aplicaciones debe alcanzar y por qué (AA como estándar mínimo en contextos legales en la UE), y la diferencia entre conformidad técnica (cumplir los criterios de éxito) y accesibilidad real (que la aplicación funcione bien para personas con distintas capacidades).

**2. Los criterios de éxito que más fallan en la práctica**
Algunos criterios WCAG son mucho más frecuentemente incumplidos que otros. Explícame los criterios de éxito que el equipo de desarrollo debe tener siempre presentes: el contraste de color suficiente (1.4.3 y 1.4.11), la navegación completa con teclado (2.1.1), el orden de foco lógico (2.4.3), las etiquetas accesibles para elementos de formulario (1.3.1 y 4.1.2), el texto alternativo para imágenes (1.1.1), la accesibilidad de los componentes custom (árbol de accesibilidad correcto), y el comportamiento de los lectores de pantalla en flujos críticos.

Para cada criterio, dame la implementación correcta con código de ejemplo.

**3. El HTML semántico como fundamento de la accesibilidad**
La mayoría de los problemas de accesibilidad tienen la misma raíz: usar elementos HTML genéricos (`div`, `span`) donde existen elementos semánticos apropiados. Explícame por qué el HTML semántico es el fundamento de la accesibilidad: la estructura de encabezados que permite la navegación por secciones, el uso de `button` vs. `div` clickable (y por qué la diferencia importa), los elementos nativos de formulario que vienen con accesibilidad integrada, las landmarks de HTML5 (`main`, `nav`, `header`, `footer`, `aside`) que estructuran la página para los lectores de pantalla, y el árbol de accesibilidad que el navegador construye desde el DOM y cómo inspeccionarlo.

**4. ARIA: cuándo usarlo y cuándo no**
ARIA (Accessible Rich Internet Applications) extiende la accesibilidad de los componentes interactivos custom, pero se usa mal con mucha frecuencia. Explícame las reglas de ARIA que el developer debe conocer: la primera regla de ARIA (no usar ARIA si existe un elemento HTML nativo que hace lo mismo), los roles ARIA más comunes y cuándo aplicarlos, los atributos `aria-label`, `aria-labelledby` y `aria-describedby` y sus diferencias, el manejo del foco en componentes custom (modales, dropdowns, tabs) con `aria-expanded`, `aria-haspopup` y `tabindex`, y los errores de ARIA que crean problemas de accesibilidad en lugar de resolverlos.

**5. Testing de accesibilidad: automatizado y manual**
La accesibilidad no se puede verificar únicamente con herramientas automáticas, pero las herramientas automáticas son el primer paso. Explícame el proceso de testing de accesibilidad que el equipo puede integrar en el flujo de desarrollo: las herramientas de análisis automático que se integran en el CI/CD (axe-core, Lighthouse), las extensiones de navegador para testing rápido durante el desarrollo (axe DevTools, WAVE), el testing manual con teclado (el flujo completo de la aplicación navegando solo con Tab, Shift+Tab, Enter y las teclas de flecha), el testing con lectores de pantalla (NVDA + Chrome en Windows, VoiceOver en macOS, TalkBack en Android) y el testing con usuarios reales con distintas capacidades.

**6. Integrar la accesibilidad en el proceso de desarrollo**
La accesibilidad que se añade al final del proceso es cara y difícil. Explícame cómo integrarla desde el principio: el rol del developer en la revisión de diseños desde la perspectiva de accesibilidad (detectar problemas antes de que estén en código), los criterios de aceptación de accesibilidad que deben incluirse en las historias de usuario, el proceso de code review que incluye verificación de accesibilidad, el linting de accesibilidad en el IDE (eslint-plugin-jsx-a11y para React), y cómo construir la cultura de accesibilidad en un equipo que todavía no la tiene en el radar.

Quiero ejemplos de código reales para los errores más comunes y sus correcciones. Y la lista de cosas que el developer puede hacer hoy, sin esperar a un proyecto de accesibilidad formal.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Implementar accesibilidad web WCAG de forma sistemática en el flujo de desarrollo',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño accesible e inclusivo',
                'description'      => 'El diseño que funciona para personas con distintas capacidades: contraste de color, tamaño de fuente, navegación con teclado y el proceso de incluir a usuarios con diversidad funcional en el diseño.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de UX especializado en diseño accesible e inclusivo, con experiencia integrando los principios de accesibilidad en el proceso de diseño de productos digitales desde la fase de concepto. Voy a explorar contigo cómo construir una práctica de diseño accesible.

Mi contexto: [describe tu situación: tipo de producto que diseñas, herramientas de diseño que usas (Figma, Sketch u otras) y el nivel actual de accesibilidad de tus diseños]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. El diseño inclusivo como filosofía y como práctica**
El diseño inclusivo no es una lista de requisitos técnicos: es una filosofía que parte de la premisa de que diseñar para los extremos de la distribución de usuarios mejora la experiencia para todos. Explícame los fundamentos del diseño inclusivo: el concepto del espectro de capacidades (las personas no son accesibles o no accesibles: todos experimentamos limitaciones temporales, situacionales o permanentes), el principio de "diseñar para los extremos beneficia al centro" con ejemplos concretos (el subtítulo que ayuda a personas sordas también ayuda a quien está en un entorno ruidoso), y los siete principios del diseño universal aplicados al diseño digital.

**2. El color y el contraste: la accesibilidad visual**
El contraste de color es el criterio de accesibilidad que más afecta a la mayoría de los usuarios y el que más fácilmente se puede mejorar desde el diseño. Explícame cómo aplicar el contraste correctamente: los ratios de contraste que exige WCAG AA (4.5:1 para texto normal, 3:1 para texto grande y elementos gráficos), cómo medir el contraste en Figma y en el navegador, el error de no usar el color como único medio de transmitir información (y cómo añadir texturas, iconos o etiquetas como canal alternativo), y el diseño para personas con daltonismo (los tipos más comunes, cómo simularlo en las herramientas de diseño y las paletas de color que funcionan para todos).

**3. La tipografía accesible**
Las decisiones tipográficas tienen un impacto enorme en la legibilidad para personas con dislexia, baja visión y otras condiciones. Explícame las decisiones de tipografía que mejoran la accesibilidad: el tamaño mínimo de texto en interfaces (16px como punto de partida para el cuerpo de texto), el interlineado y el espaciado entre letras que facilitan la lectura, las familias tipográficas que funcionan mejor para la legibilidad (y las que deben evitarse), el contraste entre texto y fondo en distintos contextos (texto sobre fotografía, texto sobre color) y el diseño que permite que el texto escale sin romper el layout cuando el usuario aumenta el tamaño de letra del sistema.

**4. La accesibilidad de los componentes interactivos**
Los componentes interactivos (botones, formularios, modales, tabs, dropdowns) son el área de mayor impacto en la accesibilidad de las aplicaciones. Explícame cómo diseñar componentes interactivos accesibles: los tamaños mínimos de área táctil para garantizar la usabilidad con motor fino reducido (44x44px como referencia), el diseño del foco visible que funciona para usuarios de teclado y sea reconocible en todos los estados del componente, el diseño de los estados del componente (hover, focus, active, disabled, error) que comunican el estado sin depender solo del color, y el diseño de los formularios accesibles (etiquetas visibles, mensajes de error contextuales, instrucciones claras).

**5. Incluir a usuarios con diversidad funcional en el proceso de diseño**
El diseño accesible más efectivo se crea con la participación de las personas a las que va dirigido. Explícame cómo integrar a usuarios con diversidad funcional en el proceso de diseño: los métodos de investigación que facilitan la participación de usuarios con distintas capacidades (entrevistas, tests de usabilidad), las adaptaciones del proceso de testing para usuarios con discapacidad visual (test con lectores de pantalla), cognitiva (tests con menor carga cognitiva) o motriz (tests con control por voz o teclado), y cómo diseñar el proceso de reclutamiento de participantes para incluir la diversidad de capacidades.

**6. Las herramientas de accesibilidad en el flujo de trabajo del diseñador**
El diseñador puede detectar y corregir la mayoría de los problemas de accesibilidad antes de que el código esté escrito. Explícame las herramientas que debo integrar en mi flujo de trabajo: los plugins de Figma para verificar el contraste de color (Contrast, A11y Annotation Kit), las herramientas para simular distintas condiciones visuales (daltonismo, baja visión), los plugins para anotar los diseños con información de accesibilidad que el equipo de desarrollo necesita (roles ARIA, orden de foco, textos alternativos), y el proceso de revisión de accesibilidad de los diseños que puedo integrar en el handoff con desarrollo.

Quiero concreción: checklist de accesibilidad que puedo usar en mis revisiones de diseño y ejemplos visuales de antes/después de las mejoras de accesibilidad más comunes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Integrar los principios de diseño accesible e inclusivo en el proceso de diseño de producto',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas inclusivas: llegar a mercados diversos',
                'description'      => 'Adapta el proceso de ventas a compradores de culturas, géneros y capacidades diversas: el lenguaje, los estilos de comunicación y las prácticas que eliminan los sesgos inconscientes del proceso comercial.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia liderando equipos comerciales diversos y construyendo procesos de venta que funcionan para compradores de distintos contextos culturales, géneros y capacidades. Voy a explorar contigo cómo construir una práctica de ventas genuinamente inclusiva.

Mi contexto: [describe tu equipo y tu mercado: tipo de venta (B2B, B2C), geografías donde operas, diversidad del equipo de ventas y los sesgos o problemas de inclusión que has observado en el proceso comercial]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. Los sesgos inconscientes en el proceso de ventas**
Los sesgos inconscientes afectan la forma en que los vendedores se relacionan con los compradores y reducen la efectividad del proceso comercial con ciertos perfiles. Explícame cómo identificar y gestionar los sesgos en ventas: el sesgo de afinidad (tendemos a conectar mejor con personas parecidas a nosotros), el sesgo de género (las expectativas inconscientes que aplicamos a compradores de distintos géneros), el sesgo cultural (asumir que todos los compradores comparten los mismos valores y estilos de comunicación), y el sesgo de apariencia (juzgar la autoridad o la capacidad de decisión por la apariencia del interlocutor).

Dame técnicas concretas para detectar estos sesgos en el propio comportamiento y en el del equipo.

**2. La comunicación intercultural en el proceso de ventas**
Los estilos de comunicación varían enormemente entre culturas, y un proceso de venta que ignora estas diferencias pierde oportunidades y genera fricciones. Explícame las dimensiones culturales que el vendedor debe entender: las culturas de alto contexto (donde la comunicación es indirecta y el contexto lo dice todo) vs. las de bajo contexto (donde la comunicación es directa y explícita), las diferencias en los estilos de toma de decisiones (decisión individual vs. consenso del grupo), las variaciones en la importancia de la relación personal antes de la transacción comercial, y las diferencias en la gestión del tiempo y la puntualidad que afectan la dinámica de las reuniones de ventas.

**3. El lenguaje inclusivo en el proceso comercial**
Las palabras que usamos en las presentaciones, propuestas y correos de ventas incluyen o excluyen a los compradores. Explícame cómo aplicar el lenguaje inclusivo en el proceso comercial: el uso del lenguaje neutro en las comunicaciones (evitar asumir el género del interlocutor cuando no se conoce), la eliminación de expresiones que favorecen a ciertos grupos culturales (referencias deportivas, militares o culturales que no resuenan en todos los contextos), y la adaptación del registro del lenguaje al estilo de comunicación del comprador específico en lugar de usar un tono estándar para todos.

**4. El proceso de cualificación sin sesgos**
El proceso de cualificación de oportunidades puede estar contaminado por sesgos que hacen que el equipo de ventas persiga menos oportunidades con ciertos perfiles de comprador. Explícame cómo construir un proceso de cualificación basado en criterios objetivos: los criterios de ICP (Ideal Customer Profile) que deben ser independientes del género, la cultura o las características personales del comprador, los sistemas de scoring de oportunidades que reduzcan la subjetividad, y el proceso de revisión del pipeline que permite detectar si hay patrones de sesgos en las oportunidades que el equipo elige perseguir o abandonar.

**5. Construir un equipo de ventas diverso**
Un equipo de ventas diverso conecta mejor con una base de compradores diversa. Explícame cómo construir la diversidad en el equipo comercial: el análisis de la diversidad actual del equipo y su correlación con los mercados a los que se vende, las prácticas de reclutamiento que amplían el pipeline de candidatos a perfiles más diversos, el proceso de onboarding y desarrollo que asegura que los vendedores de distintos orígenes tienen las mismas oportunidades de éxito, y cómo crear la cultura de equipo que valora y aprovecha la diversidad en lugar de presionar a todos para que encajen en el mismo molde.

**6. Medir la inclusión en el proceso de ventas**
Lo que no se mide no mejora. Propón el sistema de métricas de inclusión en ventas: las métricas de proceso (distribución de oportunidades entre distintos perfiles de comprador, win rate por demografía del comprador, ciclo de venta por perfil cultural), las métricas del equipo (diversidad del equipo, retención por perfil, promociones por perfil), y el proceso de revisión periódica que detecta sesgos sistémicos en los resultados del equipo comercial.

Quiero concreción: role-plays específicos para practicar las técnicas de venta intercultural, y los errores más comunes de los equipos de ventas cuando trabajan con compradores de perfiles distintos al habitual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Eliminar los sesgos del proceso de ventas y conectar con compradores de perfiles diversos',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Producto para usuarios diversos',
                'description'      => 'Diseña productos que funcionan para todo el mundo: los principios del diseño inclusivo, la investigación con usuarios subrepresentados y las decisiones de producto que amplían el mercado al eliminar barreras.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager con especialización en diseño inclusivo y accesibilidad, con experiencia construyendo productos que funcionan para usuarios de distintas capacidades, culturas, idiomas y contextos de uso. Voy a explorar contigo cómo integrar el pensamiento inclusivo en el proceso de product management.

Mi contexto: [describe tu producto: tipo de aplicación, base de usuarios actual y los grupos de usuarios que sientes que tu producto no sirve bien en este momento]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. Por qué la inclusión amplía el mercado**
El diseño inclusivo no es solo la cosa correcta que hacer: es una decisión de negocio que amplía el mercado addressable y reduce el riesgo de regulación. Explícame el caso de negocio de la inclusión en el producto: el tamaño de los mercados que los productos excluyentes dejan fuera (personas con discapacidad, usuarios en países con infraestructura digital limitada, usuarios de mayor edad, usuarios con baja alfabetización digital), las regulaciones de accesibilidad que obligan a las empresas a actuar (EAA en Europa, ADA en Estados Unidos) y los ejemplos de productos que amplían su mercado de forma significativa al eliminar barreras de acceso.

**2. La investigación con usuarios subrepresentados**
La investigación de usuarios estándar tiende a sobre-muestrear a los usuarios más fáciles de alcanzar, que generalmente son los más similares al equipo que hace la investigación. Explícame cómo diseñar la investigación para incluir a usuarios subrepresentados: las técnicas de reclutamiento que amplían el pool de participantes más allá del usuario típico, las adaptaciones metodológicas para investigar con usuarios con distintas capacidades (usuarios ciegos en tests de usabilidad, usuarios con discapacidad cognitiva en entrevistas, usuarios de idiomas y culturas distintas), y cómo analizar e integrar los hallazgos de investigación con usuarios diversos en las decisiones de producto.

**3. Los principios del diseño inclusivo aplicados al producto**
El diseño inclusivo tiene principios concretos que el PM puede aplicar en las decisiones de producto. Explícame los principios más relevantes para el product management: el diseño para la variabilidad humana (asumir que los usuarios tienen rangos distintos de capacidades, experiencias y contextos, no una capacidad promedio), la flexibilidad de uso (ofrecer distintas formas de realizar la misma tarea para que cada usuario elija la que le funciona mejor), el bajo esfuerzo físico y cognitivo (reducir la carga que el usuario debe asumir para completar sus objetivos), y el tamaño y el espacio para el acercamiento y el uso (garantizar que los elementos de la interfaz son utilizables independientemente del tamaño de la pantalla o del método de entrada).

**4. La accesibilidad como criterio de priorización**
La accesibilidad debe ser un criterio de priorización del roadmap, no un proyecto separado. Explícame cómo integrar la accesibilidad en el proceso de priorización de producto: cómo estimar el impacto de mejorar la accesibilidad de una feature (número de usuarios que la podrán usar por primera vez, reducción del riesgo regulatorio), cómo incluir los criterios de accesibilidad en los acceptance criteria de las historias de usuario, cómo diseñar el roadmap de accesibilidad que cubre los gaps más críticos sin paralizar el resto del producto, y cómo medir el progreso en accesibilidad con métricas que el equipo y los stakeholders entiendan.

**5. El producto en contextos de uso diversos**
Los productos digitales se usan en contextos muy distintos que el equipo de producto raramente experimenta. Explícame cómo diseñar el producto para contextos de uso diversos: el uso en dispositivos de gama baja y con conexiones lentas (el performance como accesibilidad), el uso en entornos con iluminación variable (modo oscuro, contraste adaptativo), el uso con una sola mano o con el teléfono en movimiento, el uso en idiomas distintos con alfabetos y dirección de escritura diferentes (RTL, caracteres más largos que el inglés), y el diseño para usuarios con baja literacidad digital que necesitan más contexto y guía para completar las tareas.

**6. Construir la cultura de inclusión en el equipo de producto**
La inclusión del producto no ocurre por accidente: requiere una cultura y unos procesos que la conviertan en la forma habitual de trabajar. Explícame cómo construir esta cultura en el equipo: la inclusión de la diversidad de capacidades en las personas de usuario (los user personas que el equipo usa para tomar decisiones), los rituales de revisión de inclusión del producto (el checklist de inclusión en el process de diseño y de desarrollo), la formación del equipo en principios de diseño inclusivo y accesibilidad, y cómo celebrar y visibilizar las mejoras de inclusión para que el equipo entienda que este trabajo tiene valor.

Quiero ejemplos concretos de decisiones de producto que mejoran la inclusión y tienen impacto medible en el negocio. Y el proceso paso a paso para empezar sin necesitar un presupuesto ni un equipo especializados.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir productos digitales que funcionan para usuarios de distintas capacidades, culturas y contextos',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'DEI en la práctica: más allá de la declaración de intenciones',
                'description'      => 'Implementa programas de diversidad, equidad e inclusión que producen cambios reales: el diagnóstico, las iniciativas con evidencia de impacto y la medición que diferencia el progreso real del teatro corporativo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief People Officer o director de DEI con experiencia implementando programas de diversidad, equidad e inclusión en empresas tech que han pasado de las declaraciones a los resultados medibles. Voy a explorar contigo cómo construir una estrategia de DEI que produce cambio real.

Mi contexto: [describe la situación de tu empresa: etapa, tamaño, diversidad actual del equipo y el nivel de compromiso de la dirección con el DEI]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. La diferencia entre el DEI real y el teatro corporativo**
Muchas empresas tienen una declaración de diversidad, un canal de Slack de DEI y un evento el Día del Orgullo: pero nada de esto cambia quién entra a la empresa, quién asciende y quién se va. Explícame la diferencia entre el DEI performativo y el DEI que produce cambio real: los indicadores de que el programa de DEI es más de comunicación que de impacto (las métricas que se reportan son de actividad, no de resultado), los mecanismos que hacen que las iniciativas de DEI fallen (falta de datos objetivos, ausencia de rendición de cuentas, programas voluntaristas sin recursos), y los principios que distinguen las empresas con resultados reales en DEI.

**2. El diagnóstico: los datos sin los que no se puede diseñar la estrategia**
Una estrategia de DEI sin datos es un conjunto de buenas intenciones. Explícame cómo hacer el diagnóstico de la situación actual: el análisis de la composición de la plantilla por diversas dimensiones (género, etnia, edad, discapacidad, orientación sexual en los contextos donde se recopila), el análisis de los flujos (quién entra, quién asciende, quién se va y cómo difieren estos flujos entre distintos grupos), la encuesta de pertenencia e inclusión (que mide la experiencia vivida de los empleados, no solo su presencia), y el análisis de los procesos de RRHH (reclutamiento, evaluación del desempeño, compensación, promoción) en busca de sesgos sistémicos.

**3. Las iniciativas con evidencia de impacto**
El campo del DEI está lleno de iniciativas que se sienten bien pero no tienen evidencia de impacto. Explícame qué funciona según la evidencia: las intervenciones en el proceso de reclutamiento que aumentan la diversidad del pipeline (descripciones de trabajo desgenerizadas, paneles de entrevista diversos, procesos de evaluación estructurados), los programas de desarrollo que aumentan la retención y la promoción de grupos subrepresentados (mentoring, sponsorship, programas de desarrollo de liderazgo con diseño inclusivo), los cambios en los procesos de evaluación del desempeño que reducen el sesgo en las decisiones de compensación y promoción, y las intervenciones culturales que mejoran la pertenencia y la inclusión.

Para cada tipo de iniciativa, dame el nivel de evidencia y el impacto esperado.

**4. La equidad: más allá de la igualdad de trato**
El DEI no busca tratar a todos igual: busca que todos tengan las mismas oportunidades de éxito, lo que a veces requiere tratamientos distintos para compensar desventajas estructurales. Explícame el concepto de equidad aplicado al lugar de trabajo: la diferencia entre igualdad (mismo trato para todos) y equidad (tratamiento que tiene en cuenta el punto de partida de cada persona), los mecanismos de equidad que pueden implementarse en RRHH (programas de acción afirmativa donde son legales, ajustes de equidad salarial, flexibilidad de condiciones de trabajo para personas con responsabilidades de cuidado), y cómo comunicar la equidad a un equipo que puede interpretar el trato diferencial como injusticia.

**5. La rendición de cuentas: el mecanismo que determina si el DEI funciona**
El DEI sin rendición de cuentas es opcional, y lo opcional no cambia la cultura. Explícame cómo construir la rendición de cuentas en la estrategia de DEI: el sistema de métricas de DEI que se reporta al board y a toda la empresa con la misma transparencia que las métricas de negocio, la vinculación de los objetivos de DEI a la compensación de los directivos (cómo hacer que funcione sin crear los incentivos equivocados), el proceso de comunicación de los progresos (y de los fracasos) con honestidad hacia toda la plantilla, y el rol del CEO y el C-level como modelos del comportamiento inclusivo que espera de toda la organización.

**6. El roadmap de DEI a 12-24 meses**
La estrategia de DEI necesita materializarse en un plan concreto con hitos y responsables. Ayúdame a construir el roadmap: la priorización de las iniciativas según el impacto esperado y la facilidad de implementación, los quick wins que demuestran el compromiso en los primeros noventa días, los proyectos de 12 meses que construyen las capacidades necesarias para el cambio sostenido, y los indicadores de éxito que permiten evaluar si la estrategia está funcionando.

Quiero honestidad sobre lo que no funciona y por qué, y los errores más comunes de las empresas que invierten en DEI sin obtener resultados.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Implementar una estrategia de DEI que produce cambio real y medible en la organización',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Brecha de género en compensación: análisis y corrección',
                'description'      => 'Analiza y corrige las brechas salariales de género y diversidad en la organización: la metodología del análisis de equidad retributiva, los ajustes y la comunicación transparente que genera confianza.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de compensación y beneficios con experiencia realizando análisis de equidad retributiva y diseñando planes de corrección de brechas salariales en empresas tech de distintos tamaños. Voy a explorar contigo cómo analizar y corregir las brechas de género y diversidad en la compensación.

Mi contexto: [describe la situación: tamaño de la empresa, estructura de compensación actual (bandas salariales, bonus, equity) y el nivel de transparencia salarial que existe en la organización]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. Entender la brecha salarial de género: tipos y causas**
La brecha salarial de género no es una sola cifra: es el resultado de múltiples factores que es necesario distinguir para diseñar la corrección correcta. Explícame los tipos de brecha salarial: la brecha bruta (la diferencia media entre los salarios de hombres y mujeres en toda la organización, que refleja diferencias de representación en roles y niveles), la brecha ajustada (la diferencia salarial entre personas con el mismo rol, nivel de experiencia y función, que refleja discriminación directa), y la brecha estructural (la diferencia que refleja la infravaloración sistemática de los roles ocupados mayoritariamente por mujeres). Para cada tipo, la metodología de análisis y las palancas de corrección.

**2. La metodología del análisis de equidad retributiva**
El análisis de equidad retributiva requiere una metodología rigurosa que permita separar la discriminación real de las diferencias legítimas en la compensación. Explícame el proceso paso a paso: la recopilación de datos necesarios (salario base, bonus, equity, beneficios, pero también nivel de puesto, función, tiempo en el puesto, rendimiento, geografía), el modelo estadístico de análisis (regresión múltiple que controla por las variables legítimas y aisla el efecto del género y otras dimensiones de diversidad), la interpretación de los resultados (qué diferencias son estadísticamente significativas y cuáles son ruido estadístico), y los límites del análisis (qué no puede decirte el análisis cuantitativo y dónde necesitas investigación cualitativa).

**3. El plan de corrección: ajustes y su implementación**
Identificada la brecha, la pregunta es cómo corregirla. Explícame el proceso de diseño e implementación del plan de corrección: los criterios para priorizar los ajustes (cuándo ajustar primero, cómo balancear la urgencia de la corrección con el impacto presupuestario), las opciones de corrección (ajuste inmediato al mercado justo, ajuste progresivo en varias revisiones salariales, combinación de ajuste de base con equity adicional), el proceso de validación de los ajustes con managers y con el C-level, y cómo evitar que se vuelva a generar la brecha en el proceso habitual de compensación.

**4. Eliminar el sesgo del proceso de compensación**
Los ajustes puntuales no sirven de nada si el proceso de compensación sigue generando brechas. Explícame cómo rediseñar el proceso de compensación para eliminar el sesgo: el diseño de bandas salariales transparentes que reduzcan el margen de negociación individual (que favorece a quienes negocian más agresivamente), el proceso estructurado de calibración de compensación que obliga a justificar las diferencias salariales entre personas en el mismo nivel, los criterios de evaluación del rendimiento que reducen el sesgo de género (evitar la penalización del estilo de comunicación menos asertivo, por ejemplo), y las políticas de negociación salarial que reducen la disparidad de resultados por perfil.

**5. Obligaciones legales y tendencias regulatorias**
El análisis de equidad retributiva no es solo una buena práctica: en muchos contextos es una obligación legal. Explícame el marco legal de la equidad salarial: la Directiva Europea de Transparencia Salarial (en vigor desde 2023, con plazos de transposición a los estados miembros), las obligaciones de la Ley de Igualdad en España (planes de igualdad, registro retributivo, auditorías salariales para empresas de más de 50 trabajadores), y las tendencias regulatorias globales que van a seguir endureciendo las obligaciones de transparencia salarial en los próximos años.

**6. Comunicar el análisis y los ajustes con transparencia**
La comunicación del análisis de equidad retributiva y de los ajustes es tan importante como el análisis mismo. Explícame la estrategia de comunicación: cómo comunicar al equipo directivo el análisis y el plan de corrección de forma que genere compromiso, cómo comunicar a los empleados que recibirán un ajuste (el contexto, el proceso, por qué se ha tomado esta decisión), cómo comunicar al resto de la plantilla que se ha realizado un análisis de equidad y cuáles son los resultados (con el nivel de detalle que genere confianza sin crear conflictos), y cómo reportar el progreso en equidad retributiva de forma periódica.

Quiero concreción: la metodología de análisis que puedo implementar con los datos que tengo, los errores más comunes en los procesos de corrección de brechas y cómo evitarlos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Analizar y corregir las brechas salariales de género con metodología rigurosa y comunicación transparente',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Normativa antidiscriminación y responsabilidad empresarial',
                'description'      => 'Las obligaciones legales de la empresa en materia de igualdad y no discriminación: la normativa europea y española, los procedimientos internos obligatorios y los riesgos legales del incumplimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado laboralista especializado en igualdad y no discriminación en el ámbito empresarial, con experiencia asesorando a empresas tech en el diseño e implementación de los procedimientos legalmente exigidos y en la gestión de reclamaciones y litigios relacionados con la discriminación. Voy a explorar contigo el marco legal de la no discriminación y la responsabilidad empresarial.

Mi contexto: [describe la situación de tu empresa: número de empleados, sector, presencia en España o en otros países de la UE y los retos de compliance en materia de igualdad que estás abordando]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. El marco legal de la no discriminación en España y la UE**
La prohibición de discriminación en el ámbito laboral está regulada por un conjunto de normas que el departamento legal de cualquier empresa debe conocer. Explícame el marco normativo: el artículo 14 de la Constitución Española como fundamento del principio de igualdad, el Estatuto de los Trabajadores y la Ley Orgánica de Igualdad (Ley 3/2007) como normas de referencia en el ámbito laboral, las Directivas Europeas de igualdad (2000/43/CE de igualdad racial, 2000/78/CE de igualdad en el empleo, 2006/54/CE de igualdad de género), y las obligaciones específicas para distintos tamaños de empresa (el plan de igualdad obligatorio a partir de 50 trabajadores, el protocolo de acoso, el registro retributivo).

**2. Las causas protegidas de discriminación**
La ley protege a los trabajadores de la discriminación por determinadas características. Explícame el catálogo completo de causas de discriminación protegidas en el ámbito laboral español: el sexo y el género (incluyendo el embarazo y la maternidad como supuesto especialmente protegido), el origen racial o étnico, la religión o las convicciones, la discapacidad, la edad, la orientación sexual, y otras causas protegidas por el derecho de la UE y la jurisprudencia del TJUE. Para cada causa, dame ejemplos de conductas que constituyen discriminación y cómo los tribunales las evalúan.

**3. Los procedimientos internos obligatorios**
La empresa no puede limitarse a cumplir la ley en sus decisiones: debe tener procedimientos internos que prevengan y gestionen la discriminación. Explícame los procedimientos que la empresa está legalmente obligada a tener: el plan de igualdad (su contenido obligatorio, el proceso de negociación con los representantes de los trabajadores, el registro en el Registro de Planes de Igualdad), el protocolo de acoso sexual y por razón de sexo (su contenido mínimo, el procedimiento de investigación, los plazos y las garantías para la persona denunciante), y el protocolo de acoso laboral. Para cada procedimiento, los errores más comunes que lo hacen ineficaz o impugnable.

**4. La discriminación indirecta: el riesgo menos visible**
La discriminación directa (trato explícitamente distinto por una causa protegida) es relativamente fácil de identificar. La discriminación indirecta es más difícil de detectar y puede existir en empresas que creen estar cumpliendo la ley. Explícame qué es la discriminación indirecta: la definición legal (una medida aparentemente neutra que pone en situación de desventaja a un grupo protegido), los ejemplos más frecuentes en las empresas (requisitos de disponibilidad que excluyen sistemáticamente a quienes tienen responsabilidades de cuidado, criterios de evaluación que valoran comportamientos asociados a un perfil demográfico específico), y cómo auditar las prácticas de RRHH para detectar el riesgo de discriminación indirecta.

**5. La responsabilidad empresarial: cuándo responde la empresa**
La empresa puede ser responsable por la discriminación aunque no haya actuado directamente si no ha tomado las medidas adecuadas para prevenirla o gestionarla. Explícame el régimen de responsabilidad empresarial en materia de discriminación: cuándo responde la empresa por los actos discriminatorios de sus directivos y empleados, las consecuencias económicas del incumplimiento (sanciones administrativas del LISOS, indemnizaciones en vía judicial, la posibilidad de tutela judicial urgente), la doctrina de la inversión de la carga de la prueba (por qué en los casos de discriminación el empleado no tiene que probar la discriminación, sino que es la empresa la que debe probar que no discriminó), y los casos en que la empresa puede ser penalmente responsable.

**6. Gestionar una reclamación por discriminación**
Cuando un empleado presenta una reclamación por discriminación, el proceso de gestión es tan importante como el fondo del asunto. Explícame el proceso correcto de gestión: los primeros pasos al recibir una denuncia interna (asignación de la investigación a una persona independiente, medidas cautelares para proteger a la persona denunciante, plazos), el proceso de investigación interna (quién investiga, cómo se documentan las entrevistas, cómo se valora la prueba), las resoluciones posibles y sus consecuencias disciplinarias, y cómo gestionar la comunicación con la persona denunciante y con el denunciado durante el proceso. Los errores más comunes que convierten una reclamación interna en un litigio judicial.

Quiero concreción: los documentos que la empresa debe tener, los plazos que no puede incumplir y los errores más caros que cometen las empresas cuando se enfrentan a una reclamación por discriminación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Cumplir las obligaciones legales en materia de igualdad y gestionar el riesgo de discriminación en la empresa',
                'vote_score'       => 26,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte accesible y culturalmente competente',
                'description'      => 'El equipo de CS que da servicio a una base de clientes diversa: accesibilidad en los canales de soporte, competencia cultural y las prácticas que aseguran que todos los clientes reciben la misma calidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Support con experiencia construyendo equipos y procesos de soporte que dan servicio a bases de clientes globalmente diversas, incluyendo clientes con distintas capacidades, idiomas, culturas y niveles de alfabetización digital. Voy a explorar contigo cómo construir un equipo de soporte accesible y culturalmente competente.

Mi contexto: [describe tu equipo de soporte: número de agentes, geografías a las que das servicio, idiomas en los que operas y los principales retos de diversidad que enfrentas en la atención al cliente]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. El soporte inclusivo como ventaja competitiva**
El soporte que funciona para todos los clientes, independientemente de sus capacidades o su contexto cultural, no solo es lo correcto: es una ventaja competitiva. Explícame el caso de negocio del soporte inclusivo: el tamaño de los segmentos de clientes que el soporte estándar atiende mal (clientes con discapacidades, clientes de culturas con estilos de comunicación distintos al dominante, clientes con baja alfabetización digital), el coste del soporte exclusivo (mayor tasa de escalación, menor resolución en el primer contacto, mayor churn en estos segmentos), y los ejemplos de equipos de soporte que han mejorado métricas de negocio al invertir en inclusión.

**2. La accesibilidad de los canales de soporte**
La mayoría de los equipos de soporte ofrecen canales que no son igualmente accesibles para todos los clientes. Explícame cómo auditar y mejorar la accesibilidad de los canales: el chat en vivo (¿funciona con lectores de pantalla?, ¿hay alternativas para usuarios con dificultades de escritura?), el email (¿las plantillas siguen buenas prácticas de accesibilidad en HTML?), el teléfono (¿hay alternativas para clientes con dificultades de audición o de comunicación oral?), el soporte de video (¿hay opción de interpretes de lengua de signos o subtítulos en tiempo real?), y la base de conocimiento y la documentación (¿el contenido de autoservicio es accesible?). Para cada canal, dame las mejoras concretas que puedo implementar.

**3. La competencia cultural en el soporte**
Los clientes de distintas culturas tienen expectativas distintas sobre cómo debe ser la interacción de soporte. Explícame cómo desarrollar la competencia cultural en el equipo: las dimensiones culturales que afectan la interacción de soporte (la directness vs. la indirectness en la comunicación, las expectativas sobre el nivel de formalidad, el rol de la jerarquía en la relación con el proveedor, las diferencias en cómo se expresa la insatisfacción), el entrenamiento que ayuda a los agentes a adaptar su estilo de comunicación sin necesidad de conocer en profundidad cada cultura específica, y el diseño de los flujos de escalación que reconoce que las expectativas de escalación varían culturalmente.

**4. La comunicación con clientes con diversas capacidades**
Los clientes con distintas capacidades tienen necesidades específicas en la interacción de soporte. Explícame las prácticas de comunicación adaptada: la comunicación con clientes con discapacidad auditiva (chat como canal preferido, evitar el soporte exclusivamente telefónico, templates escritos claros y sin jerga), la comunicación con clientes con discapacidad visual (instrucciones que no dependen de referencias visuales como "haz clic en el botón azul de la derecha"), la comunicación con clientes con discapacidades cognitivas (lenguaje simple, instrucciones paso a paso, confirmación de comprensión), y la comunicación con clientes de mayor edad que pueden tener menor familiaridad con los productos digitales.

**5. El diseño de los flujos de soporte para la diversidad**
Los flujos de soporte estándar no siempre funcionan para todos los clientes. Explícame cómo diseñar flujos de soporte inclusivos: el enrutamiento inteligente que conecta a los clientes con el agente más adecuado para su perfil de necesidades (por idioma, por especialización en accesibilidad), el diseño del árbol de decisión del chatbot que funciona para usuarios con distintos niveles de literacidad digital, los SLAs diferenciados para clientes que requieren más tiempo de interacción debido a sus necesidades de accesibilidad, y el proceso de acomodación razonable (cómo gestionar las solicitudes de adaptación de proceso que los clientes piden directamente).

**6. Medir la calidad del soporte para todos los segmentos de clientes**
Las métricas de soporte agregadas pueden ocultar diferencias significativas en la calidad de la atención a distintos segmentos. Propón el sistema de métricas que detecta las disparidades: el CSAT y el CES segmentado por perfil de cliente (idioma, tipo de accesibilidad requerida, geografía), el análisis de los tiempos de resolución por segmento (una diferencia significativa indica que ciertos clientes están teniendo más dificultades), el análisis de los escalamientos por perfil (¿los clientes de ciertos grupos escalan más?) y el proceso de revisión periódica que convierte los datos en mejoras concretas del soporte.

Quiero concreción: el checklist de accesibilidad del soporte que puedo aplicar hoy y los cambios de mayor impacto que puedo implementar con recursos limitados.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un equipo de soporte que atiende con la misma calidad a todos los clientes, independientemente de sus capacidades o contexto cultural',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'El freelance inclusivo',
                'description'      => 'El freelance que trabaja con clientes y colaboradores diversos: prácticas de comunicación intercultural, accesibilidad en los entregables y el posicionamiento que atrae a clientes que valoran la diversidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor especializado en estrategia de negocio para freelancers con experiencia ayudando a profesionales independientes a construir prácticas de trabajo inclusivas que les abren nuevos mercados y fortalecen sus relaciones con clientes y colaboradores de distintos orígenes. Voy a explorar contigo cómo construir una práctica freelance genuinamente inclusiva.

Mi contexto: [describe tu práctica: tipo de servicio, tipos de clientes con los que trabajas, geografías donde operas y los retos de inclusión que has encontrado en tu trabajo]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. Por qué la inclusión importa para el freelance**
La inclusión no es solo una cuestión ética para el freelance: es una ventaja de negocio que amplía el mercado y profundiza las relaciones con los clientes. Explícame el caso de negocio de la inclusión para el freelance: el acceso a mercados de clientes más amplios (empresas con programas activos de diversidad en su supply chain que buscan proveedores con valores alineados), la ventaja competitiva en mercados globales (la capacidad de trabajar efectivamente con clientes de distintas culturas es diferenciadora), y la mejora de la calidad del trabajo (las perspectivas diversas enriquecen la solución que el freelance entrega).

**2. La comunicación intercultural con clientes**
El freelance que trabaja con clientes de distintas culturas se enfrenta a diferencias en los estilos de comunicación que pueden generar malentendidos y fricciones. Explícame las dimensiones culturales que más afectan la relación freelance-cliente: las diferencias en la directness de la comunicación (culturas donde el "sí" puede significar "lo he escuchado" en lugar de "estoy de acuerdo"), las diferencias en la gestión del tiempo y los plazos (culturas donde la puntualidad tiene un significado distinto), las diferencias en el estilo de feedback (culturas donde la crítica directa se considera inapropiada), y las diferencias en las expectativas sobre la relación personal antes de la transacción profesional.

Dame técnicas concretas para adaptar el estilo de comunicación sin perder la autenticidad.

**3. Los entregables accesibles: diseñar para todos los destinatarios**
Los entregables que el freelance produce pueden ser más o menos accesibles para los destinatarios según sus capacidades. Explícame cómo hacer accesibles los tipos de entregables más comunes: los documentos de texto (uso de estilos de encabezado, texto alternativo para imágenes, tablas accesibles, documentos Word y PDF con estructura semántica correcta), las presentaciones (contraste de color suficiente, no depender solo del color para transmitir información, notas del presentador que describen el contenido visual), los entregables de diseño visual (contraste, tamaño de texto, accesibilidad de los prototipos interactivos), y el código (comentarios claros, nombres de variables descriptivos, documentación que no asume conocimiento implícito).

**4. Trabajar con colaboradores diversos**
El freelance moderno trabaja con redes de colaboradores de distintos orígenes, culturas y capacidades. Explícame cómo construir una práctica de trabajo colaborativo inclusiva: el diseño de los procesos de comunicación con colaboradores que reduce la dependencia de la comunicación síncrona (que favorece a quienes comparten la misma zona horaria), la documentación de procesos que permite que personas de distintos contextos puedan incorporarse sin barreras de conocimiento implícito, el uso de herramientas de colaboración accesibles, y las prácticas de retroalimentación que funcionan para personas de distintos estilos de comunicación.

**5. El posicionamiento inclusivo como diferenciador**
El posicionamiento del freelance puede reflejar explícitamente el compromiso con la inclusión y atraer a clientes que buscan proveedores con estos valores. Explícame cómo construir un posicionamiento inclusivo auténtico: la diferencia entre el posicionamiento inclusivo genuino (que refleja prácticas reales) y el performativo (que usa el lenguaje de la inclusión sin sustancia detrás), cómo comunicar el compromiso con la inclusión en la web, el perfil de LinkedIn y las propuestas sin que suene a marketing vacío, y cómo el posicionamiento inclusivo puede abrir puertas en determinados sectores y tipos de cliente (empresas con programas de supplier diversity, organizaciones del sector público, ONG).

**6. Los sesgos en el negocio freelance y cómo gestionarlos**
El freelance está expuesto a sesgos tanto en la captación de clientes (que pueden elegir otros proveedores por razones no relacionadas con la calidad del servicio) como en sus propias decisiones de negocio (a qué clientes dedica más energía, a qué proyectos dice sí). Explícame cómo identificar y gestionar los sesgos en la práctica freelance: el análisis del portfolio de clientes desde la perspectiva de la diversidad (¿hay sesgo de afinidad en los clientes con los que trabaja mejor?), las prácticas de pricing que reducen la discriminación involuntaria en la negociación, y el proceso de reflexión personal sobre los sesgos propios que afectan las decisiones de negocio.

Quiero concreción: las prácticas concretas que puedo implementar esta semana para hacer mi trabajo freelance más inclusivo y los recursos que me ayudarán a desarrollar la competencia intercultural.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construir una práctica freelance inclusiva que abre nuevos mercados y profundiza las relaciones con clientes diversos',
                'vote_score'       => 27,
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
