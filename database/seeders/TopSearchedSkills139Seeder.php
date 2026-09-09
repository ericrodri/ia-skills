<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills139Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Community-led growth: convierte tu comunidad en tu mejor canal de adquisición',
                'description'       => 'Aprende los modelos, las mecánicas y los errores críticos del community-led growth para construir una comunidad alrededor de tu producto que genere adquisición orgánica sostenible.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en community-led growth con experiencia en empresas como Notion, Figma, Linear y Webflow. Voy a darte el contexto de mi producto y quiero que me ayudes a diseñar una estrategia completa de comunidad.

**Contexto de mi producto:**
- Tipo de producto / SaaS: [describe brevemente]
- Público objetivo: [perfil del usuario ideal]
- Fase actual: [early stage / crecimiento / escala]
- Canales de adquisición actuales: [lista los que ya usas]
- Recursos disponibles para comunidad: [presupuesto mensual y personas dedicadas]

**Parte 1 — Fundamentos del community-led growth**

Antes de diseñar nada, explícame:
1. Qué distingue realmente una comunidad de una audiencia. La mayoría de empresas tienen audiencia y creen que tienen comunidad. Dame criterios concretos para saberlo.
2. Los tres modelos de comunidad que más funcionan en B2B SaaS: comunidad de práctica, comunidad de producto y comunidad de éxito. Explica cuál encaja mejor con mi contexto y por qué.
3. El error más caro que cometen las empresas cuando intentan construir comunidad (spoiler: hacerlo demasiado tarde o como táctica de marketing disfrazada de algo auténtico).

**Parte 2 — Diseño de la comunidad**

Ayúdame a tomar estas decisiones fundacionales:
1. Plataforma: evalúa Discord, Slack, Circle, Discourse y foro propio para mi contexto. Dame una recomendación con criterios objetivos, no solo el hype del momento.
2. Estructura de canales o categorías para los primeros 90 días. No quiero un foro fantasma con 40 canales vacíos.
3. Las primeras 10 conversaciones que debo iniciar yo mismo para dar tono a la comunidad. Conversaciones que generen valor real, no autopromoción encubierta.
4. Cómo identificar y reclutar a los primeros 20 miembros que serán los fundacionales. De dónde los saco y qué les ofrezco.

**Parte 3 — Mecánicas de crecimiento**

Diseña para mí:
1. El flywheel de la comunidad: cómo cada miembro activo genera visibilidad que atrae a nuevos miembros que se convierten en activos. Dibújalo con palabras paso a paso.
2. Las métricas que realmente importan: no DAU/MAU genéricos, sino las señales que indican que la comunidad está viva y genera valor de negocio. Dame 5 métricas con sus benchmarks.
3. Cómo conectar la actividad de la comunidad con el pipeline de adquisición. Qué momentos de la journey comunitaria son señales de intención de compra.
4. El programa de embajadores o power users: criterios de selección, beneficios que escalan con su contribución y cómo evitar que se sientan explotados.

**Parte 4 — Las mecánicas que matan las comunidades**

Dame un diagnóstico preventivo:
1. Los 5 patrones que matan las comunidades antes de llegar a los 1.000 miembros. Para cada uno, dame el síntoma temprano y la corrección.
2. Cómo gestionar la moderación sin ahogar la energía natural. El equilibrio entre comunidad estructurada y caótica.
3. Qué hacer cuando la comunidad crece pero la calidad de las conversaciones baja (el problema de la escala).
4. Cómo manejar a los miembros negativos, trolls o competidores que se infiltran.

**Parte 5 — Roadmap a 90 días**

Crea un plan concreto semana a semana para los primeros 90 días: qué hago yo, qué delego, qué automatizo y cuáles son los hitos que me indican que voy bien o que necesito pivotar la estrategia.

Sé específico, opinionado y dame ejemplos de empresas reales que hayan ejecutado bien (y mal) cada punto. Evita los consejos genéricos que podría encontrar en cualquier artículo de blog.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 60,
                'use_case'          => 'Diseñar una estrategia de community-led growth desde cero o diagnosticar una comunidad existente',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Open source community building: contribuidores, governance y sostenibilidad',
                'description'       => 'Construye y mantiene una comunidad activa alrededor de un proyecto open source: atrae contribuidores, diseña governance sana y asegura la sostenibilidad a largo plazo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un maintainer experimentado de proyectos open source con conocimiento profundo de proyectos como Kubernetes, Vue.js, Astro, Remix y proyectos de la CNCF. Voy a compartirte mi proyecto y quiero construir una comunidad sostenible alrededor de él.

**Contexto de mi proyecto:**
- Nombre y descripción en una frase: [describe el proyecto]
- Lenguaje/ecosistema principal: [lenguaje, runtime, framework]
- Estado actual: [edad del proyecto, estrellas en GitHub, contribuidores activos]
- Licencia: [MIT / Apache 2.0 / GPL / otra]
- Patrocinador/empresa detrás (si hay): [nombre o "es personal"]
- Problema concreto que quiero resolver con la comunidad: [crecimiento de contribuidores / governance / financiación / otro]

**Parte 1 — El estado real de mi comunidad hoy**

Antes de recomendar nada, ayúdame a hacer un diagnóstico honesto:
1. Dame las métricas de GitHub que debo revisar: no solo las estrellas, sino los indicadores de salud real (tiempo medio de cierre de issues, porcentaje de PRs de la comunidad vs. mantenedores, ratio de issues abiertos/cerrados).
2. Qué significa cada nivel de contribuidor y cómo identificar en cuál estoy bloqueado (users, reporters, occasional contributors, regular contributors, maintainers).
3. Los signos de que una comunidad open source está muriendo aunque el repo siga teniendo estrellas.

**Parte 2 — Onboarding de contribuidores**

El primer PR es el momento más crítico. Diseña para mi proyecto:
1. El archivo CONTRIBUTING.md ideal: estructura, tono y el nivel de detalle que no ahoga a los contribuidores nuevos.
2. El label `good first issue`: cómo seleccionar issues realmente apropiados (no los triviales que nadie quiere y no los complejos que frustran).
3. El proceso de revisión de PRs que retiene a los contribuidores: tiempos de respuesta, tono del feedback y cómo rechazar sin desanimar.
4. El bot o automatización mínima que hace el onboarding más fluido sin quitar la sensación de comunidad humana.

**Parte 3 — Governance**

Diseña el modelo de governance apropiado para mi tamaño y tipo de proyecto:
1. Compara los modelos BDFL (Benevolent Dictator), Core Team y Foundation. Cuál encaja mejor con mi contexto y por qué.
2. El proceso de decisión para cambios que afectan a la API pública o la dirección del proyecto: RFC, lazy consensus, votación.
3. Cómo manejar los conflictos entre contribuidores o entre la comunidad y la empresa patrocinadora.
4. Cuándo y cómo crear un Code of Conduct que proteja sin convertirse en una herramienta política.

**Parte 4 — Canales de comunicación**

Recomiéndame la combinación correcta:
1. Dónde deben vivir las discusiones técnicas, las decisiones, los anuncios y el chat informal. No todo puede ir a un solo sitio.
2. GitHub Discussions vs. Discord vs. foro Discourse vs. mailing list: para mi tipo de proyecto y comunidad, qué combinación funciona.
3. La cadencia de comunicación de los mantenedores: cuánto compartir, cuándo y en qué formato para que la comunidad sienta que el proyecto tiene dirección sin que el mantenedor se queme.

**Parte 5 — Sostenibilidad económica**

Dame un plan realista para sostener el proyecto a largo plazo:
1. Open Collective, GitHub Sponsors, Tidelift, y patrocinadores empresariales: diferencias, pros/contras y cuál funciona mejor según el tipo de proyecto.
2. El modelo de Open Core: cuándo tiene sentido, cómo diseñar la frontera entre la versión libre y la comercial sin alienar a la comunidad.
3. Cómo comunicar las necesidades económicas del proyecto sin que parezca mendicidad ni presión.
4. Los proyectos que han resuelto bien la sostenibilidad y qué hicieron diferente.

Termina con un roadmap de 6 meses con hitos concretos para mi situación actual.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 75,
                'use_case'          => 'Crear o escalar la comunidad de contribuidores de un proyecto open source',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Comunidades de diseño: visibilidad, aprendizaje y oportunidades reales',
                'description'       => 'Participa y lidera comunidades de diseño para crecer profesionalmente: Dribbble, Behance, Figma Community y los grupos que realmente generan oportunidades.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador senior con una red profesional sólida y experiencia en las principales comunidades de diseño digitales e internacionales. Quiero mejorar mi presencia en comunidades de diseño de forma estratégica, no solo acumulando seguidores.

**Mi contexto como diseñador:**
- Especialidad principal: [UI / UX / producto / gráfico / motion / ilustración / otro]
- Años de experiencia: [número]
- Objetivo principal: [encontrar trabajo / conseguir clientes / aprender / mentoría / reconocimiento / otro]
- Plataformas donde ya tengo presencia: [lista]
- Dónde siento que me estanco: [describe el problema concreto]

**Parte 1 — El ecosistema real de comunidades de diseño**

Explícame con honestidad:
1. Qué sirve realmente cada plataforma para un diseñador según su objetivo. Dribbble ya no es lo que era en 2015. Behance tiene una función específica. Figma Community tiene su propia lógica. Desmonta los mitos.
2. Las comunidades de Slack, Discord y Telegram que realmente valen la pena según mi especialidad: Design Leadership, Sidebar, Designer Hangout, ADPList, y otros. Cuáles son activos de verdad y cuáles son fantasmas con muchos miembros.
3. La diferencia entre tener presencia en una comunidad y tener influencia en ella. La mayoría confunde los dos.

**Parte 2 — Estrategia de presencia en plataformas de portfolio**

Según mi especialidad y objetivo, diseña mi estrategia:
1. Cómo estructurar un perfil de Behance que realmente posiciona. No me digas "muestra tu mejor trabajo": dame la estructura de los case studies que generan contactos.
2. Cómo usar Dribbble en 2025: ya no es suficiente publicar shots bonitos. Qué tipo de contenido y con qué frecuencia funciona para el objetivo que tengo.
3. Figma Community: cómo publicar recursos (templates, sistemas de diseño, plugins) que generen visibilidad real y, eventualmente, ingresos.
4. El perfil de LinkedIn como diseñador: qué es diferente a un perfil genérico y cómo complementa las plataformas de portfolio.

**Parte 3 — Participación que genera oportunidades**

Dame un sistema concreto:
1. Cómo participar en comunidades de diseño sin parecer desesperado o autopromocionarse constantemente. El balance entre dar valor y mostrar lo que haces.
2. Los tipos de contribución que más retorno generan: feedback a otros diseñadores, recursos gratuitos, tutoriales, participación en eventos, mentoring. Para mi objetivo concreto, ¿cuál priorizo?
3. Cómo identificar a las personas clave en una comunidad con las que vale la pena conectar y cómo iniciar esa relación de forma genuina.
4. El calendario de participación realista para alguien que trabaja a jornada completa: cuánto tiempo mínimo dedicar y cuándo.

**Parte 4 — Crear y liderar**

Si quiero pasar de participante a referente:
1. Cómo lanzar un grupo o iniciativa de diseño que no muera en el segundo mes: los primeros pasos, la dinámica inicial y cómo generar hábito de participación.
2. Los formatos de contenido que funcionan para diseñadores: critique sessions, design challenges, recursos compartidos, AMAs con profesionales. Cuál empezar según mis recursos.
3. Cómo monetizar (discretamente) la influencia en una comunidad de diseño: cursos, recursos premium, consultoría, membresías.

**Parte 5 — Plan de acción a 90 días**

Crea un plan semanal concreto con acciones específicas, tiempo estimado por semana y métricas para saber si voy en la dirección correcta. Quiero visibilidad real, no vanity metrics.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 40,
                'use_case'          => 'Definir una estrategia de presencia y crecimiento en comunidades de diseño',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Venta a través de comunidades: genera leads sin hacer spam',
                'description'       => 'Usa comunidades de Slack, Discord y LinkedIn Groups para generar oportunidades de venta de forma orgánica: aporta valor primero, vende después.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en social selling y community selling con experiencia en ventas B2B. Voy a darte mi contexto y quiero que me enseñes a generar leads en comunidades de forma que no me expulsen y que realmente convierta.

**Mi contexto de ventas:**
- Producto o servicio que vendo: [describe brevemente]
- Precio medio por cliente: [rango]
- Ciclo de venta medio: [días o semanas]
- Tipo de comprador (ICP): [cargo, industria, tamaño de empresa]
- Comunidades donde ya participo o estoy considerando entrar: [lista]
- Principal problema hoy: [no genero suficientes leads / los leads son de mala calidad / no sé cómo entrar sin hacer spam / otro]

**Parte 1 — El marco mental correcto**

Antes de cualquier táctica, necesito entender:
1. Por qué el 95% de los vendedores que entran en comunidades son expulsados o ignorados en las primeras dos semanas. Describe los patrones exactos que los delatan.
2. La diferencia entre community selling auténtico y community selling disfrazado de autenticidad. Cómo los miembros experimentados detectan inmediatamente el segundo.
3. El concepto de "dar primero sin expectativa de retorno inmediato" aplicado a ventas: cuánto tiempo y esfuerzo requiere antes de que sea legítimo mencionar lo que vendes.

**Parte 2 — Selección de comunidades**

Ayúdame a elegir dónde invertir mi tiempo:
1. Cómo identificar las comunidades donde está mi ICP: señales que indican que una comunidad es activa, tiene los perfiles correctos y está abierta a conexiones profesionales.
2. Criterios para priorizar: tamaño de la comunidad, nivel de actividad, permisividad hacia los vendedores y calidad de los miembros. No todas las comunidades grandes son útiles.
3. Las comunidades de Slack y Discord más relevantes para mi sector específico. Dame nombres concretos si los conoces.
4. Cómo investigar una comunidad antes de unirme: qué leer, a quién observar y cuánto tiempo dedicar antes de empezar a participar.

**Parte 3 — El sistema de participación que genera confianza**

Diseña para mí un sistema de participación semanal:
1. Los tipos de contribución que construyen reputación más rápido para mi perfil: responder preguntas técnicas, compartir recursos, hacer introductions, organizar eventos, provocar debates.
2. Cómo posicionarme como experto en mi nicho sin mencionar mi producto: qué tipo de preguntas respondo, qué tipo de recursos comparto y con qué tono.
3. El momento exacto en que es apropiado mencionar lo que hago y cómo hacerlo sin romper la dinámica.
4. Cómo gestionar las DMs que llegan de forma orgánica: cómo cualificar, cómo transicionar a una conversación de ventas y cuándo derivar a una llamada.

**Parte 4 — Tácticas avanzadas sin cruzar la línea**

Dame tácticas concretas:
1. Cómo usar los hilos de presentación (los típicos "preséntate" de los lunes) para posicionarse sin sonar a anuncio.
2. Cómo crear un recurso gratuito (guía, template, checklist) que resuelva un problema real del ICP y usarlo como punto de entrada.
3. La estrategia del "pregunta inteligente": cómo formular una pregunta que genere debate, te posicione como pensador y atraiga exactamente al perfil que te interesa.
4. Cómo colaborar con admins y moderadores para que te vean como un activo de la comunidad.

**Parte 5 — Medición y optimización**

Dame un sistema de seguimiento:
1. Qué medir: no solo leads generados, sino señales de que tu reputación en la comunidad crece (menciones, DMs recibidos, invitaciones a colaborar).
2. Cómo saber cuándo una comunidad no es rentable para tu tiempo y dejarla con elegancia.
3. El dashboard mínimo para gestionar la actividad en 3-5 comunidades simultáneamente.

Termina con una rutina diaria y semanal concreta de 30-60 minutos que pueda ejecutar desde mañana.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Generar leads B2B de forma orgánica en comunidades de Slack, Discord y LinkedIn',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product community: usuarios como fuente de feedback y evangelistas',
                'description'       => 'Construye una comunidad de usuarios que sea tu mejor fuente de feedback, casos de uso y evangelización: Discord, Slack o foro propio con impacto real en el producto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Head of Community con experiencia en empresas de producto como Notion, Linear, Superhuman y Coda. Quiero construir una comunidad de usuarios de mi producto que tenga impacto real en el roadmap y en el crecimiento.

**Contexto de mi producto:**
- Tipo de producto: [SaaS / app / plataforma / herramienta]
- Usuarios actuales: [número aproximado de usuarios activos]
- Perfil del usuario ideal: [describe brevemente]
- Objetivo principal de la comunidad: [feedback de producto / retención / evangelización / soporte entre usuarios / otro]
- Recursos disponibles: [tiempo del equipo + presupuesto mensual]

**Parte 1 — Estrategia de comunidad de producto**

Explícame:
1. La diferencia entre una comunidad de producto bien construida y un foro de soporte glorificado. Los usuarios saben la diferencia y responden de forma muy diferente a cada uno.
2. Cuándo tiene sentido invertir en comunidad de producto vs. cuando es prematuro. El error de lanzar la comunidad demasiado pronto (con pocos usuarios) o demasiado tarde (cuando ya hay dinámicas informales establecidas fuera).
3. Los tres roles que la comunidad puede jugar en el ciclo de vida del producto: discovery (qué construir), adoption (cómo usarlo mejor) y advocacy (quién lo recomienda). Cuál es más urgente para mí.

**Parte 2 — Selección de plataforma y diseño inicial**

Ayúdame a decidir:
1. Discord vs. Slack vs. Circle vs. foro propio (Discourse, Vanilla): para el tipo de producto y usuario que tengo, qué plataforma y por qué. Dame criterios, no solo el default del sector.
2. La arquitectura de canales para los primeros 200 miembros. Cuáles son obligatorios, cuáles son prematuros y cómo evoluciona a medida que crece.
3. El onboarding de nuevos miembros: qué les digo, qué les pido y cómo los conecto con otros usuarios similares a ellos.
4. Cómo integrar la comunidad con el producto: notificaciones, badges por contribución, acceso beta para miembros activos. Qué integración tiene más impacto con menos esfuerzo técnico.

**Parte 3 — Recolección de feedback de calidad**

El feedback genérico ("me gustaría que...") no sirve. Diseña:
1. El proceso de feedback estructurado para que los usuarios aporten insights accionables, no solo peticiones de features.
2. Los formatos de sesión de usuario que funcionan en comunidad: office hours del PM, sesiones de beta testing, votación de roadmap pública. Cuál encaja mejor con mi etapa.
3. Cómo distinguir el feedback de los power users (que pueden sesgar el producto hacia sus necesidades específicas) del feedback representativo de la mayoría silenciosa.
4. Cómo cerrar el loop con la comunidad cuando implementas (o rechazas) algo que pidieron. Este paso es el que más fideliza y el que casi nadie hace bien.

**Parte 4 — Activación de evangelistas**

Convierte usuarios satisfechos en promotores activos:
1. Cómo identificar a los usuarios con más potencial de ser evangelistas. No solo los más activos en la comunidad, sino los que tienen influencia fuera de ella.
2. El programa de champions o embajadores: qué les das (acceso, reconocimiento, contenido exclusivo) y qué les pides (reviews, referencias, casos de uso, contenido).
3. Cómo generar casos de éxito desde la comunidad sin que parezca testimonial de marketing.
4. La mecánica de referidos que funciona cuando el producto tiene comunidad fuerte.

**Parte 5 — Métricas y roadmap**

1. Las 5 métricas de comunidad de producto que realmente importan al CEO y al board: no solo actividad, sino impacto en retención, NPS y pipeline.
2. Cómo reportar el valor de la comunidad a stakeholders que solo ven el coste.
3. El roadmap de 6 meses para pasar de cero a una comunidad que genere impacto medible en el negocio.

Incluye ejemplos concretos de cómo empresas como Linear, Notion o Figma han ejecutado cada parte.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 60,
                'use_case'          => 'Diseñar la estrategia de comunidad de usuarios de un producto SaaS',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Comunidad de alumni: ex-empleados como activo estratégico',
                'description'       => 'Transforma a los ex-empleados en embajadores, fuentes de referidos y potenciales clientes construyendo una comunidad de alumni con valor real para sus miembros.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en employer branding y gestión de talento con experiencia en empresas que han construido programas de alumni exitosos como McKinsey, Google y Salesforce. Quiero diseñar un programa de alumni para mi empresa.

**Contexto de mi empresa:**
- Tamaño actual: [número de empleados]
- Sector: [describe el sector]
- Rotación anual aproximada: [porcentaje]
- Número de ex-empleados estimado en los últimos 5 años: [número]
- Objetivo principal del programa: [referidos de talento / referidos de clientes / embajadores de marca / boomerangs / otro]
- Estado actual: [no tenemos nada / tenemos un LinkedIn Group abandonado / otro]

**Parte 1 — El caso de negocio**

Antes de convencer a dirección, ayúdame a construir el argumento:
1. El valor económico medible de un alumni activo vs. uno desconectado: en términos de coste de referidos, conversiones de empleados boomerang y potencial como clientes o prescriptores.
2. Los sectores y tipos de empresa donde los programas de alumni generan más ROI. ¿Es relevante para mí o es una estrategia de empresa grande?
3. Las métricas con las que voy a medir el éxito del programa para presentarlas a dirección antes de pedir presupuesto.

**Parte 2 — Diseño del programa**

Ayúdame a tomar las decisiones clave:
1. El momento de activación: cuándo debo empezar a hablar con un empleado sobre el programa de alumni (antes de su salida, en el proceso de offboarding, meses después).
2. Qué tengo que ofrecerles que tenga valor real para ellos: no un newsletter que nadie lee, sino beneficios que justifiquen su participación activa. Dame 10 ideas ordenadas por impacto/coste.
3. La plataforma donde vive la comunidad: LinkedIn, Slack, Circle, plataforma propia. Para mi tamaño y objetivo, qué funciona y qué es sobredimensionado.
4. La cadencia de comunicación: qué les envío, con qué frecuencia y cómo evito que se den de baja.

**Parte 3 — Activación de referidos**

El referido de talento:
1. Cómo diseñar un sistema de referidos de talento con alumni que funcione sin parecer extractivo. Qué incentivos funcionan (no siempre es el dinero).
2. Cómo comunicar las oportunidades de trabajo sin convertir la comunidad en una bolsa de empleo.
3. El proceso de referido perfecto: qué le pido al alumni, cómo lo reconozco y cómo le hago seguimiento independientemente del resultado.

El referido de cliente y prescripción:
1. Cómo identificar a los alumni en posiciones donde pueden ser clientes o prescriptores de mis servicios.
2. Cómo hacer la transición de "ex-empleado" a "cliente potencial" sin romper la relación.

**Parte 4 — Operativa del programa**

Dame el kit de herramientas mínimo:
1. El proceso de offboarding como primer paso del programa de alumni: qué incluyo en la última semana de un empleado para que salga como embajador.
2. El calendario editorial anual de la comunidad: eventos, contenidos y momentos de activación a lo largo del año.
3. Quién gestiona el programa internamente: ¿es RRHH, employer branding, o alguien de otro departamento? Cuánto tiempo requiere.
4. Cómo gestionar a los alumni que salieron en malos términos: los ignoro, los incluyo con precaución o hay algún protocolo específico.

**Parte 5 — Implementación en 90 días**

Dame un plan de implementación realista para los primeros 90 días asumiendo que empiezo desde cero, con presupuesto limitado y sin equipo dedicado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar un programa de alumni que genere referidos de talento, clientes y embajadores',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Red profesional en finanzas: cómo construir relaciones que generan oportunidades',
                'description'       => 'Construye relaciones estratégicas en el sector financiero: conferencias, CFA Institute, family offices y los espacios donde se mueven las oportunidades reales de carrera e inversión.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un profesional senior del sector financiero con 15 años de experiencia en banca de inversión, gestión de activos y family offices, y una red de contactos sólida construida durante esa carrera. Quiero construir una red profesional en finanzas que genere oportunidades reales.

**Mi contexto:**
- Área de finanzas: [banca / gestión de activos / VC / PE / banca corporativa / finanzas corporativas / fintech / family office / otro]
- Años de experiencia: [número]
- Objetivo de networking: [nuevo empleo / mandatos de M&A / captación de fondos / deal flow / conocimiento / otro]
- Geografía principal: [país o ciudad]
- Red actual: [describe brevemente qué tienes y dónde sientes que falta]

**Parte 1 — Cómo funciona realmente el networking en finanzas**

El sector financiero tiene dinámicas muy específicas:
1. Por qué el networking en finanzas es diferente al de otros sectores: confidencialidad, jerarquía, el peso de la institución que representas y cómo esto cambia cuando eres independiente.
2. Las redes informales que realmente mueven oportunidades en finanzas: los alumni de los bancos de inversión de élite, las redes de las escuelas de negocio top y los clubs de inversión privados. Cómo se entra desde fuera.
3. La diferencia entre contactos de sector (que tienen valor informativo) y contactos estratégicos (que pueden ser fuente directa de oportunidades). Cómo identificar y priorizar los segundos.

**Parte 2 — Eventos y asociaciones**

Dame el mapa de los espacios donde debo estar:
1. Los eventos internacionales de finanzas que generan relaciones reales vs. los que son solo marketing: SuperReturn, Milken, CFA Annual, SIBOS, Money 2020. Cuáles priorizo según mi perfil.
2. El CFA Institute y las asociaciones locales de CFA: cómo usarlas más allá del badge. Los eventos locales, los comités y las oportunidades de visibilidad que casi nadie aprovecha.
3. Los eventos de family offices: SFO/MFO summits, Family Capital, Campden. Cómo acceder si no eres parte del ecosistema aún.
4. Los eventos gratuitos o de bajo coste que generan conexiones comparables a las de las conferencias premium.

**Parte 3 — Presencia digital en finanzas**

Finanzas tiene una cultura digital específica:
1. LinkedIn en finanzas: qué tipo de contenido funciona para un profesional del sector, qué errores dañan la reputación y cómo usarlo sin parecer un influencer financiero.
2. Las newsletters y publicaciones donde publicar artículos o ideas que lleguen a las personas correctas: Substack de finanzas, CFA Institute publications, medios especializados.
3. El uso de X (Twitter) en finanzas: la comunidad de finanzas en X es real y activa. Cómo participar de forma que construya reputación.

**Parte 4 — Tácticas concretas para mi objetivo**

Según el objetivo que tengo, dame tácticas específicas:
1. Para búsqueda de empleo en finanzas: el proceso de networking que consigue entrevistas en fondos o bancos que no publican posiciones abiertamente.
2. Para generación de deal flow o mandatos: cómo construir relaciones con CFOs, fundadores y otros banqueros que generan transacciones.
3. Para captación de capital: dónde encontrar a los LPs o inversores institucionales y cómo hacer el primer contacto de forma que no parezca un pitch.

**Parte 5 — Sistema de gestión de relaciones**

Dame un sistema práctico:
1. Cómo organizar y mantener una red de 200-500 contactos sin un CRM de empresa: qué herramienta usar y qué información registrar.
2. La cadencia de seguimiento: con qué frecuencia contacto a cada tipo de relación y con qué excusa legítima.
3. Las reglas de oro del networking en finanzas: qué nunca hacer, qué siempre hacer y los matices culturales que separan a los profesionales con red sólida de los que nunca acaban de construirla.

Incluye al menos 5 ejemplos concretos de cómo profesionales del sector han construido oportunidades a través de networking no convencional.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Construir una red profesional estratégica en el sector financiero',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Red profesional en el ámbito legal: mandatos y carrera a través de relaciones',
                'description'       => 'Construye relaciones en el sector legal que generen mandatos y oportunidades de carrera: colegios, asociaciones de in-house counsel y los eventos que realmente importan.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un socio de despacho con 20 años de experiencia y una red profesional legal sólida construida a lo largo de su carrera en diferentes jurisdicciones. Quiero mejorar mi red profesional en el sector legal con un objetivo concreto.

**Mi contexto:**
- Tipo de práctica: [despacho privado / in-house / administración pública / academia / otro]
- Área de especialización: [M&A / laboral / tributario / penal económico / competencia / propiedad intelectual / otro]
- Años de carrera: [número]
- Geografía principal: [país y, si aplica, ciudad]
- Objetivo principal: [generar mandatos / conseguir posición in-house / hacer carrera en despacho / visibilidad académica / otro]

**Parte 1 — La cultura del networking legal**

El sector legal tiene reglas no escritas muy específicas:
1. Por qué el networking en derecho es diferente al de otros sectores: la restricción de publicidad, el peso de la discreción, la importancia de la reputación institucional y cómo la relación personal precede siempre al mandato.
2. El ciclo de confianza en legal: cuánto tiempo tarda en convertirse en trabajo y por qué intentar acelerar ese ciclo normalmente lo destruye.
3. La diferencia entre red de referidos (otros abogados que te mandan trabajo) y red de clientes directos. Para mi objetivo, cuál construir primero.

**Parte 2 — Colegios y asociaciones profesionales**

Guíame por el ecosistema:
1. Los colegios de abogados: más allá del registro obligatorio, cómo usarlos para construir visibilidad y relaciones. Los comités y grupos de trabajo donde realmente se conocen las personas que luego generan trabajo.
2. Las asociaciones especializadas de mi área: cuáles son las relevantes en España (o en mi jurisdicción), cómo acceder y qué roles dentro de ellas tienen más valor.
3. Las asociaciones de in-house counsel: AIJA, ECLA, ACNHE en España. Cómo relacionarse con la comunidad de directores legales si mi objetivo es generar mandatos desde despacho.
4. Los baremos y círculos de calificación (Chambers, Legal 500, Best Lawyers): cómo funcionan y qué requieren para que empiecen a tenerme en cuenta.

**Parte 3 — Eventos y visibilidad**

Dame el mapa de los eventos que importan:
1. Las conferencias legales donde se construyen relaciones reales vs. las que son solo presencia institucional: IBA, UIA, eventos de las grandes firmas y los foros especializados por área.
2. Los eventos de empresa o sector del cliente: por qué asistir a eventos de la industria donde opera tu cliente es más valioso que los eventos legales y cómo justificar la inversión de tiempo.
3. Cómo aprovechar los paneles y ponencias para construir red: la lógica detrás de hablar en público como herramienta de networking, no solo de marketing.

**Parte 4 — Generación de contenido como herramienta**

En legal, el contenido tiene unas reglas específicas:
1. Los formatos que funcionan para un abogado que quiere ser referencia en su área: artículos doctrinales, newsletters, webinars, notas de actualidad. Para mi objetivo, cuál priorizo.
2. LinkedIn para abogados en 2025: qué tipo de contenido construye reputación y qué tipo dañaría mi imagen profesional.
3. Las publicaciones especializadas donde publicar aumenta visibilidad: revistas jurídicas, medios económicos con sección legal, newsletters de referencia en mi sector.

**Parte 5 — Sistema de gestión de relaciones y seguimiento**

1. Cómo mantener el contacto con 100-300 relaciones clave de forma natural y sin parecer oportunista.
2. Las ocasiones y excusas legítimas para reconectar: sentencias relevantes, cambios normativos, reconocimientos, publicaciones propias.
3. El plan de networking a 12 meses con hitos concretos según mi objetivo principal.

Dame ejemplos de abogados que han construido prácticas exitosas principalmente a través de networking y qué hicieron diferente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Construir una red profesional legal que genere mandatos y oportunidades de carrera',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Comunidades de Customer Success: aprender, compartir y hacer carrera',
                'description'       => 'Aprovecha Gainsight Pulse, Customer Success Network y los espacios clave donde los profesionales de CS aprenden buenas prácticas y construyen su carrera.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Customer Success con 10 años de experiencia en SaaS y una participación activa en las principales comunidades globales de CS. Quiero mejorar mi participación en comunidades de Customer Success para aprender más rápido y avanzar en mi carrera.

**Mi contexto:**
- Rol actual: [CSM / Team Lead / Head of CS / VP CS / otro]
- Años en CS: [número]
- Tipo de empresa: [PLG / enterprise / startup / agencia]
- Objetivo principal: [aprender buenas prácticas / visibilidad para cambiar de empresa / construir una red de referidos / mentoring / otro]
- Comunidades donde ya participo: [lista o "ninguna"]

**Parte 1 — El ecosistema de comunidades de CS**

Explícame el mapa completo:
1. Gainsight Pulse: más que una conferencia, es el epicentro del ecosistema de CS. Cómo participar más allá de asistir una vez al año: los programas de Pulse Everywhere, los grupos regionales, la certificación de Gainsight como herramienta de visibilidad.
2. Customer Success Network (CSN): cómo funciona, qué tipo de profesionales están activos y cómo sacarle partido real.
3. SuccessHACKER, Customer Success Collective y las comunidades de Slack/Discord para CS: cuáles están activas en 2025 y cuáles son grupos abandonados con muchos miembros.
4. La comunidad de LinkedIn de CS: los hashtags, los creadores de contenido que vale la pena seguir y cómo participar de forma que construya reputación.

**Parte 2 — Aprendizaje acelerado a través de comunidad**

Quiero aprender más rápido usando la inteligencia colectiva:
1. Las preguntas que más me enseñan cuando las hago en una comunidad de CS: no las preguntas genéricas, sino las que provocan respuestas con perspectiva real de profesionales con más contexto que yo.
2. Cómo consumir contenido de CS de forma eficiente: los recursos que vale la pena leer (libros, podcasts, newsletters) y cuáles son básicamente reciclaje de los mismos frameworks.
3. Los frameworks de CS que toda la comunidad conoce y usa: Health Score, QBR, Onboarding playbooks, Churn prediction. Cómo profundizar en los que aplican a mi contexto específico.
4. Cómo usar las comunidades para resolver problemas concretos que tengo ahora: cómo plantear una pregunta para recibir respuestas útiles y no genéricas.

**Parte 3 — Visibilidad y carrera**

Si quiero que el sector me conozca:
1. Cómo pasar de consumidor de contenido a creador reconocido en el nicho de CS. El tipo de contenido que funciona: casos de uso, métricas reales, post-mortems de churn, playbooks.
2. Hablar en Pulse o en otros eventos de CS: cómo proponer una charla, qué temas tienen demanda y cómo usar esa visibilidad para avanzar en la carrera.
3. Cómo usar la participación en comunidad para conseguir mi próximo rol: las comunidades de CS son también mercados de trabajo implícitos.
4. Los programas de mentoría dentro del ecosistema de CS: cómo conseguir un mentor senior y cómo ser mentor cuando tienes experiencia suficiente.

**Parte 4 — Contribución con impacto**

Dame un sistema para contribuir de forma eficiente:
1. El tipo de contribución que genera más reconocimiento en la comunidad de CS: compartir plantillas y playbooks, responder preguntas técnicas, hacer research propio, organizar eventos locales.
2. Cómo diseñar y lanzar un CS Meetup o grupo local si no hay uno en mi ciudad.
3. Las iniciativas de la comunidad donde participar activamente: awards, research reports, panels virtuales. Cuáles tienen más visibilidad.

**Parte 5 — Plan de 6 meses**

Dame un plan de participación de 6 meses con acciones concretas por semana, tiempo dedicado estimado y métricas para saber si está funcionando. Mi tiempo disponible para actividades de comunidad es de [X horas a la semana].
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Aprovechar comunidades de CS para aprender y avanzar en la carrera',
                'vote_score'        => 25,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Red profesional como freelance: referidos y colaboraciones sin buscar clientes',
                'description'       => 'Construye la red profesional que genera referidos, proyectos colaborativos y oportunidades para freelancers: los freelancers con mejores redes facturan más sin buscar clientes activamente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un freelance senior con más de 10 años de experiencia y una red profesional que genera el 80% de sus ingresos a través de referidos y colaboraciones. Quiero construir una red similar a la tuya que reduzca mi dependencia de la búsqueda activa de clientes.

**Mi contexto como freelance:**
- Especialidad: [diseño / desarrollo / copywriting / consultoría / marketing / legal / otro]
- Años como freelance: [número]
- Facturación mensual media actual: [rango aproximado]
- Principal fuente de clientes hoy: [plataformas / búsqueda activa / referidos / otro]
- Principal problema: [no tengo suficientes clientes / los clientes son de mala calidad / los ingresos son irregulares / otro]

**Parte 1 — El modelo de negocio de un freelance con red sólida**

Explícame cómo funciona:
1. La economía de los referidos para freelancers: cómo un freelance con buena red factura más con menos esfuerzo de captación y por qué la mayoría de los freelancers no invierten en esto hasta que están en problemas.
2. Los tres tipos de relaciones que generan más valor para un freelance: otros freelancers en áreas complementarias, agencias que subcontratan, y clientes que repiten y refieren. Para cada uno, la estrategia es diferente.
3. El concepto de "network liquidity": cómo saber si tu red está activa y te genera oportunidades o si es solo una lista de contactos que no te conocen de verdad.

**Parte 2 — Dónde construir la red**

Dame el mapa concreto para mi especialidad:
1. Las comunidades de freelancers que funcionan según mi área: Slack de diseñadores, comunidades de desarrolladores, grupos de consultores. Dame nombres concretos para mi especialidad.
2. Las plataformas donde los freelancers de alto nivel se encuentran con agencias y estudios que subcontratan. No las marketplaces de precio, sino los espacios de colaboración entre profesionales senior.
3. Los eventos presenciales y online donde se genera confianza más rápido: meetups locales, conferencias de sector, hackathons, eventos de empresas que contratan freelancers.
4. Cómo usar LinkedIn para un freelance que quiere que los clientes le encuentren a él, no al revés.

**Parte 3 — El sistema de relaciones**

Dame un sistema práctico:
1. Cómo identificar a los freelancers complementarios con los que quiero construir una red de intercambio de referidos. Los criterios para elegir a quién cultivar (calidad de trabajo, tipo de cliente, valores).
2. La propuesta de valor de la colaboración: cómo proponer a otro freelance que nos intercambiemos referidos sin que suene a transacción fría.
3. El sistema de seguimiento de mi red: sin CRM complejo, cómo recordar con quién hablar, cuándo y sobre qué. Los freelancers que gestionan bien su red no improvisan.
4. La cadencia de contacto con los diferentes niveles de mi red: con quién hablo mensualmente, con quién trimestralmente y cómo mantengo presente a los contactos más lejanos.

**Parte 4 — Contenido como imán de relaciones**

El contenido que crea oportunidades pasivas:
1. Qué tipo de contenido genera referidos y colaboraciones para un freelance de mi especialidad. No el contenido genérico de LinkedIn, sino el que hace que otros profesionales piensen en mí cuando tienen un proyecto que no pueden hacer.
2. La newsletter para freelancers: cómo una newsletter pequeña puede ser la herramienta de red más potente que tengo, aunque tenga 200 suscriptores.
3. Los proyectos o recursos gratuitos que me posicionan frente a otros freelancers: templates, herramientas, guías. Para mi especialidad, qué tipo de recurso genera más impacto.

**Parte 5 — Ir de 0 a una red que genera referidos**

Para alguien que empieza prácticamente desde cero:
1. Las 10 primeras acciones concretas que debo hacer en los próximos 30 días para empezar a construir la red.
2. Los hitos que me indican que la red está funcionando: el primer referido, la primera colaboración, el primer cliente inbound por recomendación.
3. El plan de 12 meses con objetivos trimestrales realistas para pasar de buscar clientes activamente a tener una lista de espera.

Sé específico y dame ejemplos reales de cómo freelancers han construido redes que les han cambiado el modelo de negocio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir la red de referidos y colaboraciones que reduce la búsqueda activa de clientes',
                'vote_score'        => 46,
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
