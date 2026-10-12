<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills185Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de redes sociales B2B',
                'description'       => 'LinkedIn, Twitter/X y las plataformas donde se mueven los compradores B2B: el contenido que genera leads, las métricas que importan y el proceso que mantiene la consistencia.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en marketing B2B y social media estratégico. Necesito que me ayudes a diseñar la estrategia de redes sociales de mi empresa B2B desde cero o a revisarla profundamente para que genere pipeline real, no solo seguidores.

Mi contexto:
- Tipo de empresa y producto o servicio: [describe brevemente]
- ICP (Ideal Customer Profile): [cargo del decisor, tamaño de empresa objetivo, sector]
- Presencia actual en redes: [plataformas donde estás, seguidores aproximados, frecuencia de publicación]
- Equipo disponible para contenido: [solo el fundador / equipo de marketing / agencia / sin equipo]
- Objetivo principal ahora mismo: [notoriedad de marca / generación de leads / posicionamiento como experto / captación de talento]
- Mayor frustración con las redes sociales hasta ahora: [sin engagement / no genera leads / falta de consistencia / etc.]

Con ese contexto, dame:

1. PLATAFORMAS Y PRIORIZACIÓN
¿En qué plataformas debo estar y cuáles puedo ignorar en mi caso concreto? Analiza LinkedIn, Twitter/X, YouTube, newsletter y cualquier otra relevante para mi sector. Para cada una que me recomiendas, dime el formato de contenido que funciona, el tipo de algoritmo con el que opero y el recurso mínimo necesario para tener presencia efectiva. Ayúdame a priorizar si no tengo recursos para cubrirlas todas.

2. ARQUITECTURA DE CONTENIDO B2B
Diseña una arquitectura de contenido para los próximos tres meses: los cuatro o cinco pilares temáticos que debo cubrir, el porcentaje de contenido de cada tipo (thought leadership / casos de uso / producto / detrás de las cámaras / educativo / de conversación), y la cadencia recomendada por plataforma. Explícame por qué ese mix funciona para generar confianza con compradores B2B que tienen ciclos de decisión largos.

3. LINKEDIN: LA PLATAFORMA PRIORITARIA B2B
Profundiza en LinkedIn con detalle específico para mi caso:
- El perfil de empresa vs. el perfil personal del fundador o CEO: cuál tiene más alcance orgánico y por qué
- Los formatos que consiguen mayor alcance orgánico en LinkedIn ahora mismo: texto largo, carruseles, documentos PDF, vídeo nativo, polls
- La anatomía de un post de LinkedIn que genera comentarios y leads: el hook, el cuerpo, el CTA y las primeras interacciones
- Las horas de publicación óptimas y por qué importan menos de lo que se cree
- Cómo construir el social selling desde los perfiles personales del equipo comercial

4. CÓMO CONVERTIR SEGUIDORES EN LEADS
Las redes sociales solo tienen valor si generan pipeline. Dame las mecánicas concretas para pasar del contenido a la conversación de negocio: el CTA correcto según el tipo de contenido, cuándo y cómo mover la conversación a mensaje directo, cómo integrar las redes con el CRM y los lead magnets que funcionan para captar el email de contacto del seguidor B2B.

5. PROCESO Y SISTEMA DE PRODUCCIÓN DE CONTENIDO
¿Cómo monto un proceso de producción de contenido que sea sostenible con los recursos que tengo? Dame el flujo desde la idea hasta la publicación: el banco de ideas, el calendario editorial, las herramientas de programación, el proceso de aprobación si hay varias personas implicadas y la reutilización del mismo contenido en distintos formatos y plataformas.

6. MÉTRICAS QUE IMPORTAN EN B2B SOCIAL
¿Qué métricas debo seguir y cuáles son vanity metrics que no me dicen nada? Dame el dashboard de métricas sociales B2B: el alcance y las impresiones como indicadores de notoriedad, el engagement rate como señal de relevancia, los clics a la web como indicador de intención, las conversiones atribuidas a social y el pipeline generado. ¿Con qué frecuencia debo revisar las métricas y cuándo tocar la estrategia?

7. PLAN DE LOS PRIMEROS 90 DÍAS
Dame un plan concreto de acción para los próximos 90 días: qué hacer en el mes 1 (configuración y primeras publicaciones), en el mes 2 (iteración según los datos) y en el mes 3 (ampliación de lo que funciona). Incluye hitos medibles para saber si voy por el buen camino.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar una estrategia de redes sociales B2B que genere pipeline real con los recursos disponibles.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Desarrollar en público (Building in Public)',
                'description'       => 'Comparte tu proceso de desarrollo en tiempo real para construir audiencia: las plataformas, el tipo de contenido y el efecto en la captación de usuarios y el funding.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en estrategias de distribución para indie hackers y founders técnicos. Quiero implementar una estrategia de building in public para construir audiencia mientras desarrollo mi producto. Necesito que me ayudes a diseñar el sistema completo.

Mi contexto:
- Qué estoy construyendo: [describe el producto o proyecto]
- Estado actual del proyecto: [idea / MVP / en desarrollo / ya con primeros usuarios]
- Experiencia previa en redes sociales o contenido: [ninguna / algo / activo en alguna plataforma]
- Plataformas donde tengo presencia o quiero tenerla: [Twitter/X / LinkedIn / YouTube / newsletter / Indie Hackers / etc.]
- Objetivo principal del building in public: [construir audiencia / encontrar early adopters / atraer cofundadores / visibilidad para fundraising / aprender en público]
- Cuánto tiempo puedo dedicar al contenido a la semana: [horas aproximadas]

Con ese contexto, dame:

1. QUÉ ES BUILDING IN PUBLIC Y QUÉ NO ES
Explícame la diferencia entre building in public genuino (compartir el proceso real con sus fracasos, dudas e iteraciones) y el building in public performativo (solo compartir logros disfrazados de humildad). ¿Por qué la autenticidad es el activo más valioso en esta estrategia? ¿Qué tipo de contenido genera comunidad real y qué tipo genera likes pero no conversación?

2. QUÉ COMPARTIR Y CON QUÉ FRECUENCIA
Dame una taxonomía del contenido de building in public aplicada a mi proyecto: los milestones técnicos, los números de negocio (MRR, usuarios, churn), los fracasos y los pivots, los aprendizajes del proceso de ventas o captación, las decisiones de producto y por qué las tomé y las preguntas abiertas donde pido feedback a la comunidad. ¿Cuánta transparencia es demasiada? ¿Hay cosas que no debo compartir?

3. PLATAFORMAS Y FORMATO
¿Dónde hace más sentido hacer building in public para mi caso? Analiza Twitter/X (threads, updates semanales), LinkedIn (para audiencias profesionales y B2B), YouTube (vlogs de desarrollo, proceso), newsletter (el lugar más valioso para construir audiencia propia), y comunidades como Indie Hackers o Product Hunt. Para cada plataforma relevante para mí dame el formato específico que funciona mejor.

4. EL UPDATE SEMANAL: LA UNIDAD BÁSICA DE BUILDING IN PUBLIC
La actualización semanal es el formato más efectivo para el building in public. Dame la estructura del update semanal perfecto: qué incluir (progreso de la semana, número clave, obstáculo encontrado, próxima semana, pregunta para la comunidad), cómo escribirlo de forma que sea honesto pero también inspirador, y cómo distribuirlo en distintos formatos y plataformas desde un único documento fuente.

5. CÓMO EL BUILDING IN PUBLIC CONVIERTE EN USUARIOS Y CLIENTES
¿Cómo convierto los seguidores de mi building in public en usuarios reales del producto? Dame las mecánicas: cuándo y cómo hacer el anuncio del lanzamiento de la waitlist, cómo involucrar a la audiencia en decisiones de producto para que se conviertan en stakeholders del proyecto, y el momento correcto para pedir a los seguidores que prueben el producto o que paguen.

6. BUILDING IN PUBLIC Y FUNDRAISING
Si en algún momento quiero levantar financiación, ¿cómo el building in public puede ser una ventaja? Explícame cómo los inversores han descubierto proyectos a través de esta estrategia, qué tipo de tracción online es relevante para ellos y cómo la audiencia construida puede funcionar como prueba de distribución en una conversación con un VC o un business angel.

7. LOS ERRORES QUE DESTRUYEN UNA ESTRATEGIA DE BUILDING IN PUBLIC
Lista los seis errores más comunes que cometen los fundadores cuando intentan hacer building in public: la inconsistencia que destruye la audiencia, el exceso de autopromoción sin valor, compartir solo los éxitos, el agotamiento por publicar sin sistema, el exceso de detalle técnico que aleja al público generalista y la falta de CTA que convierta seguidores en leads.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar una estrategia de building in public para construir audiencia y captar early adopters mientras se desarrolla el producto.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Portafolio en redes sociales para diseñadores',
                'description'       => 'Usa Instagram, Behance, LinkedIn y Dribbble para mostrar tu trabajo y generar oportunidades: la estrategia de contenido del diseñador que consigue trabajo por sus redes.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en personal branding para diseñadores y profesionales creativos. Necesito que me ayudes a diseñar mi presencia en redes sociales como diseñador para que mi portafolio online me genere oportunidades de trabajo, clientes o colaboraciones de forma consistente.

Mi contexto:
- Especialidad de diseño: [UX/UI / branding / motion / ilustración / diseño web / packaging / etc.]
- Nivel de experiencia: [junior / mid / senior / experto reconocido en el sector]
- Tipo de oportunidades que busco: [trabajo en empresa / clientes freelance / colaboraciones / visibilidad para cambio de sector]
- Plataformas donde tengo presencia o quiero tener: [Instagram / Behance / Dribbble / LinkedIn / TikTok / YouTube / etc.]
- Estado actual del portafolio online: [no tengo / tengo pero desactualizado / activo pero sin resultados]
- Cuánto tiempo puedo dedicar a redes a la semana: [horas aproximadas]

Con ese contexto, dame:

1. LA ESTRATEGIA DE PLATAFORMAS PARA DISEÑADORES
No todas las plataformas son iguales para un diseñador. Dame el análisis de cada plataforma relevante para mi perfil: qué tipo de audiencia tiene (reclutadores, otros diseñadores, clientes potenciales), qué tipo de contenido funciona mejor en cada una, cuál es el algoritmo que hay que entender para crecer y qué prioridad debería tener dado mi objetivo. Ayúdame a elegir dos o tres plataformas en las que concentrar el esfuerzo.

2. QUÉ MOSTRAR MÁS ALLÁ DEL RESULTADO FINAL
El error más común de los diseñadores en redes es mostrar solo el resultado pulido. ¿Qué más debo mostrar para diferenciarte y generar engagement? Dame los seis tipos de contenido que funcionan para diseñadores: el proceso (sketches, wireframes, iteraciones), el razonamiento detrás de las decisiones de diseño, los errores y lo que aprendí, el behind the scenes de cómo trabajo, los proyectos personales y la opinión experta sobre tendencias o trabajos ajenos.

3. INSTAGRAM PARA DISEÑADORES: LA GUÍA ESPECÍFICA
Profundiza en Instagram con detalle concreto para mi especialidad: el perfil óptimo (foto, bio, enlace), los formatos que más alcance generan ahora mismo (reels, carruseles, stories), la frecuencia de publicación recomendada, la estrategia de hashtags para diseñadores, y cómo construir una estética visual coherente que refleje mi identidad como diseñador sin volverse rígida.

4. LINKEDIN PARA DISEÑADORES
LinkedIn no es solo para perfiles de negocio: para diseñadores que quieren trabajo en empresa o clientes B2B es fundamental. Dame la estrategia específica de LinkedIn para diseñadores: cómo optimizar el perfil para que los reclutadores me encuentren, qué tipo de contenido publicar (no solo el portfolio, sino también el proceso y la opinión experta), y cómo usar LinkedIn para establecer conversaciones con reclutadores y potenciales clientes de forma no invasiva.

5. BEHANCE Y DRIBBBLE: CÓMO DESTACAR
Behance y Dribbble son plataformas específicas de la comunidad de diseño. Dame la guía para crear proyectos que destaquen en cada una: la estructura del proyecto en Behance (portada, descripción, proceso, resultado, cierre), las mejores prácticas de presentación en Dribbble, cómo los reclutadores usan estas plataformas y qué buscan, y cómo integrar estos portafolios con mi perfil en LinkedIn e Instagram.

6. SISTEMA DE PRODUCCIÓN DE CONTENIDO PARA DISEÑADORES
¿Cómo monto un proceso de creación de contenido que sea compatible con mi trabajo como diseñador? Dame el sistema: cómo capturar ideas y material del proceso durante el trabajo del día a día, el batch de publicación semanal o quincenal, las herramientas para preparar el contenido de diseño para redes (mockups, templates de stories) y cómo reutilizar cada pieza en varias plataformas con mínimo esfuerzo adicional.

7. CÓMO MEDIR SI TU ESTRATEGIA FUNCIONA
¿Cómo sé si mis redes me están generando oportunidades reales? Dame las métricas que importan para un diseñador: el crecimiento de seguidores relevantes (no cualquier seguidor), las impresiones de los posts que muestran trabajo, las visitas al portafolio desde redes, los mensajes directos recibidos con propuestas y las oportunidades concretas cerradas en los últimos 90 días. ¿Cuándo tiene sentido cambiar de estrategia?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Crear una presencia en redes sociales como diseñador que genere oportunidades de trabajo y clientes de forma consistente.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Social selling en LinkedIn',
                'description'       => 'Genera negocio en LinkedIn sin spamear: el perfil que posiciona, el contenido que atrae y la secuencia de contacto que abre conversaciones de ventas de forma natural.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en social selling y LinkedIn. Necesito que me ayudes a diseñar un sistema de social selling en LinkedIn que genere conversaciones de venta de forma consistente sin caer en el spam y sin dañar mi reputación profesional.

Mi contexto:
- Qué vendo y a quién: [producto o servicio y perfil del decisor de compra]
- Ticket medio y ciclo de venta aproximado: [para entender el esfuerzo que justifica la plataforma]
- Estado actual del perfil de LinkedIn: [sin actividad / activo como usuario / con seguidores / perfil de empresa activo]
- Número de conexiones aproximado y calidad de la red: [personas del sector objetivo / red mixta / red pequeña]
- Experiencia previa con outreach en LinkedIn: [nunca he hecho / lo he intentado sin resultados / tengo un proceso pero no funciona]

Dame:

1. EL PERFIL DE LINKEDIN QUE VENDE
El perfil de LinkedIn de un vendedor no es un CV: es una landing page para tu cliente potencial. Dame las instrucciones detalladas para optimizar cada sección: la foto profesional, el headline que describe el valor que aporto al cliente (no el cargo), el about orientado al problema que resuelvo, las experiencias con resultados cuantificados, los skills y endorsements estratégicos, las recomendaciones y cómo solicitarlas, y el banner visual que refuerza el mensaje.

2. LA ESTRATEGIA DE CONTENIDO QUE ATRAE COMPRADORES
El social selling moderno funciona porque el comprador llega a ti, no al revés. ¿Qué contenido debo publicar para que los decisores de compra de mi ICP me vean como un experto de referencia y se acerquen de forma natural? Dame los cuatro o cinco pilares de contenido para mi perfil, el tipo de post que genera más engagement en mi sector, la frecuencia óptima y las primeras cuatro semanas de contenido para arrancar.

3. CÓMO CONSTRUIR LA RED CORRECTA
Social selling sin la red correcta es inútil. Dame el proceso para construir y expandir la red de forma estratégica: cómo identificar a los decisores de mi ICP en LinkedIn, la nota de conexión que consigue que la acepten (qué decir y qué no decir nunca), cuántas invitaciones enviar a la semana para no activar las restricciones de LinkedIn y cómo usar los filtros de búsqueda de Sales Navigator si lo tengo.

4. LA SECUENCIA DE OUTREACH QUE ABRE CONVERSACIONES
Una vez conectado, ¿cómo paso de la conexión a la conversación sin parecer un bot de ventas? Dame la secuencia completa de mensajes para las primeras dos semanas después de conectar: el mensaje de bienvenida que no pide nada, los dos o tres touchpoints de valor antes de mencionar el negocio, el momento y la forma de introducir el producto y el mensaje que plantea la reunión. Para cada mensaje dame el texto completo y la lógica detrás.

5. CÓMO USAR EL CONTENIDO DEL PROSPECTO A MI FAVOR
Uno de los superpoderes del social selling es que puedes interactuar con el contenido del prospecto antes de contactarle. ¿Cómo uso los comentarios en los posts, las reacciones y las interacciones como punto de entrada natural a la conversación? Dame las situaciones concretas en las que un comentario en un post puede abrir una conversación de ventas de forma genuina y no forzada.

6. HERRAMIENTAS Y AUTOMATIZACIÓN: QUÉ SÍ Y QUÉ NO
¿Qué herramientas puedo usar para escalar el social selling sin que LinkedIn me banee y sin parecer un robot? Dame el análisis de las principales herramientas de LinkedIn automation: cuáles son seguras, cuáles tienen riesgo de restricción de cuenta, qué tipo de automatización es aceptable (programación de contenido) y cuál está prohibida (mensajes automatizados masivos). ¿Cómo escalo sin perder la personalización?

7. MÉTRICAS Y OPTIMIZACIÓN DEL PROCESO
¿Cómo mido si mi social selling en LinkedIn está funcionando? Dame el dashboard de métricas: SSI (Social Selling Index) de LinkedIn y cómo interpretarlo, tasa de aceptación de invitaciones, tasa de respuesta de los mensajes, conversaciones abiertas por semana, reuniones agendadas desde LinkedIn y pipeline generado atribuido a LinkedIn. ¿Con qué frecuencia debo revisar y ajustar la estrategia?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar un sistema de social selling en LinkedIn que genere pipeline de ventas de forma consistente y sin dañar la reputación.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product marketing en redes sociales',
                'description'       => 'Comunica el producto en las redes de la empresa: los formatos que funcionan para anunciar features, el tono y la estrategia que convierte seguidores en usuarios activos.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product marketing y comunicación de producto digital. Necesito que me ayudes a diseñar la estrategia de comunicación del producto en las redes sociales de la empresa para que cada publicación acerque al usuario a adoptar el producto o a usar más sus funcionalidades.

Mi contexto:
- Tipo de producto: [SaaS / app móvil / plataforma / herramienta developer / etc.]
- Audiencia principal: [consumidores finales / profesionales / empresas / developers]
- Plataformas donde la empresa tiene presencia: [Twitter/X / LinkedIn / Instagram / TikTok / YouTube / etc.]
- Estado de la comunidad: [sin comunidad / comunidad pequeña / comunidad activa]
- Objetivo principal ahora: [adquisición de nuevos usuarios / activación de nuevos registros / retención / expansión de features existentes]
- Mayor reto con la comunicación del producto en redes: [contenido que no convierte / tono demasiado corporativo / falta de consistencia / no sabemos qué publicar]

Dame:

1. EL POSICIONAMIENTO DE PRODUCTO EN REDES
Antes de hablar de formatos, necesito claridad sobre el mensaje. Ayúdame a definir la propuesta de valor del producto en una frase que pueda usar en todas las redes, el tono de voz (formal, cercano, técnico, humorístico) apropiado para mi audiencia y cómo diferenciarlo del lenguaje de marketing genérico que usa la competencia. ¿Cuánto hablar del producto vs. hablar del problema o del usuario?

2. CÓMO ANUNCIAR UN NUEVO FEATURE
El lanzamiento de un nuevo feature es el momento de mayor impacto para la comunicación de producto en redes. Dame el playbook completo para anunciar un feature: el teaser antes del lanzamiento, el post de anuncio (qué decir, qué no decir, qué mostrar visualmente), los formatos que funcionan para demos de producto (GIFs, vídeos cortos, carruseles de pantallas), y el contenido de seguimiento para los primeros 7 días después del lanzamiento para mantener el momentum.

3. FORMATOS QUE FUNCIONAN POR PLATAFORMA
Para cada plataforma relevante para mí, dame el análisis específico de qué formatos de contenido de producto funcionan mejor: los demos en vídeo corto en TikTok e Instagram Reels, los hilos de Twitter/X para explicar cómo usar el producto, los carruseles de LinkedIn para comparativas antes/después, los vídeos de YouTube para tutoriales y los changelogs visuales para el feed. ¿Cómo adapto el mismo anuncio a cada plataforma sin que parezca copy-paste?

4. EL CHANGELOG PÚBLICO COMO HERRAMIENTA DE MARKETING
Muchas empresas de producto mantienen un changelog público. ¿Cómo convierto el changelog en contenido de redes sociales? Dame la estrategia para transformar las notas técnicas de cada release en posts que generen entusiasmo en los usuarios: el formato de los "What's new", cómo destacar el beneficio para el usuario en lugar de la feature técnica, y las plataformas donde el changelog-as-content funciona mejor (Twitter/X, LinkedIn, Product Hunt).

5. COMUNIDAD Y SOCIAL PROOF
¿Cómo uso los testimonios, casos de éxito y contenido generado por los usuarios para construir prueba social en redes? Dame las tácticas: cómo solicitar y reutilizar tweets o posts de usuarios satisfechos, cómo construir el programa de advocates o power users que amplifican el mensaje del producto, y cómo mostrar el "before/after" de un usuario de forma que sea auténtico y convierta.

6. FRECUENCIA Y CALENDARIO EDITORIAL DE PRODUCTO
¿Con qué frecuencia debo publicar contenido de producto vs. contenido educativo vs. contenido de comunidad? Dame el mix recomendado para mi caso, el calendario editorial del mes tipo, y cómo coordinarlo con el roadmap de producto para que el equipo de marketing siempre sepa con antelación qué va a lanzarse.

7. MÉTRICAS QUE CONECTAN REDES SOCIALES CON ACTIVACIÓN
¿Cómo sé si mi estrategia de producto en redes está funcionando para la activación, no solo para la notoriedad? Dame las métricas que conectan social con producto: clics desde social hacia la web o la app, tasa de registro desde campañas de contenido orgánico, feature adoption de los usuarios que llegan desde social y el time-to-activation de ese segmento comparado con otros canales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar la comunicación del producto en redes sociales para convertir seguidores en usuarios activos y amplificar el lanzamiento de nuevas funcionalidades.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Employer branding en redes sociales',
                'description'       => 'Muestra la cultura y el equipo en LinkedIn, Instagram y TikTok para atraer talento: el contenido que funciona, quién lo publica y cómo medirlo.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en employer branding y comunicación de marca empleadora. Necesito que me ayudes a diseñar la estrategia de employer branding en redes sociales para atraer el talento que necesitamos, reducir el tiempo de reclutamiento y mejorar la calidad de los candidatos que llegan.

Mi contexto:
- Tipo de empresa y sector: [describe la empresa brevemente]
- Perfiles que más necesitas atraer: [engineers / comerciales / diseñadores / perfiles digitales / etc.]
- Estado actual del employer branding: [sin presencia / presencia básica / activo pero sin resultados / rebrand reciente]
- Plataformas donde quieres tener presencia: [LinkedIn / Instagram / TikTok / Twitter/X / YouTube]
- Principal reto de reclutamiento ahora: [dificultad para atraer ciertos perfiles / candidatos no conocen la empresa / alta tasa de rechazo de oferta / competencia con grandes empresas]
- Quién puede crear el contenido: [equipo de RRHH / equipo de marketing / empleados voluntarios / agencia]

Dame:

1. QUÉ ES EL EMPLOYER BRANDING Y POR QUÉ LAS REDES SOCIALES SON EL CANAL CLAVE
Explícame cómo el employer branding en redes sociales afecta directamente al embudo de reclutamiento: la reducción del coste por contratación, el incremento en la calidad de los candidatos inbound y el efecto en la tasa de aceptación de oferta. ¿Cuál es el retorno esperado de una estrategia de employer branding bien ejecutada? Dame benchmarks de industria si los tienes.

2. LA PROPUESTA DE VALOR AL EMPLEADO (EVP)
Antes de publicar nada, necesito tener clara la propuesta de valor al empleado. Dame el proceso para definir el EVP: las preguntas que debo hacer a mis empleados actuales, cómo identificar qué hace única a mi empresa como lugar de trabajo (no solo los beneficios económicos sino la cultura, el impacto, el aprendizaje, la flexibilidad) y cómo diferenciarlo de las empresas con las que compito por talento.

3. LINKEDIN: EL CANAL PRINCIPAL DE EMPLOYER BRANDING
LinkedIn es la plataforma más directa para el employer branding profesional. Dame la estrategia específica: cómo optimizar la página de empresa para el candidato (sección Life, empleados visibles, publicaciones de equipo), qué tipo de contenido funciona mejor para employer branding en LinkedIn (testimonios de empleados, día en la empresa, logros del equipo, cultura de trabajo), la frecuencia recomendada y cómo coordinar el contenido de la página de empresa con los perfiles personales de los empleados.

4. INSTAGRAM Y TIKTOK: LLEGAR A LOS PERFILES JÓVENES
Para atraer talento millennial y Gen Z, Instagram y TikTok son fundamentales. Dame la estrategia específica para cada plataforma: qué tipo de contenido funciona para employer branding en Instagram (behind the scenes, reels del equipo, stories del día a día) y en TikTok (vídeos de cultura, retos del equipo, un día en la oficina, tono desenfadado). ¿Cómo adapto el mensaje de marca empleadora para que sea auténtico en estas plataformas sin que parezca forzado?

5. LOS EMPLEADOS COMO EMBAJADORES DE MARCA
Los mejores creadores de contenido de employer branding son los propios empleados. Dame el programa completo de employee advocacy: cómo identificar y activar a los empleados voluntarios que quieren participar, qué incentivos ofrecer, cómo darles guidelines sin coartar la autenticidad, qué herramientas usar para facilitar que compartan contenido de la empresa en sus perfiles personales y cómo medir el alcance de este contenido orgánico.

6. CALENDARIO EDITORIAL DE EMPLOYER BRANDING
Dame la estructura del calendario editorial de employer branding para los próximos 90 días: los tipos de contenido a cubrir por mes (presentaciones de equipo, cultura, beneficios, proceso de selección, proyectos de impacto, eventos internos), la distribución por plataforma y la cadencia de publicación recomendada para cada una. ¿Cómo coordino el calendario de employer branding con las campañas de reclutamiento activas?

7. MÉTRICAS DE EMPLOYER BRANDING EN REDES
¿Cómo mido si mi estrategia de employer branding en redes está funcionando? Dame el set de métricas de empleador: el alcance y las impresiones de los posts de employer branding, el engagement de los candidatos objetivo (seguidores que son perfiles relevantes), los candidatos inbound que mencionan las redes como canal de descubrimiento, la tasa de respuesta a las ofertas publicadas y el eNPS como medida del engagement de los empleados con la marca.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar la estrategia de employer branding en redes sociales para atraer talento cualificado y reducir el esfuerzo de reclutamiento.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Finanzas en redes sociales',
                'description'       => 'El director financiero o consultor de finanzas que usa LinkedIn para posicionarse: el tipo de contenido, el tono y los temas que generan autoridad y oportunidades.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en personal branding para profesionales de finanzas y dirección financiera. Necesito que me ayudes a diseñar mi estrategia de contenido en LinkedIn para posicionarme como experto en mi área financiera, generar credibilidad y atraer oportunidades profesionales o de negocio.

Mi contexto:
- Mi especialidad en finanzas: [CFO / controller / auditor / consultor financiero / M&A / banca / inversión / finanzas corporativas / etc.]
- Mi objetivo con LinkedIn: [cambio de trabajo / atraer clientes de consultoría / posicionamiento como experto / visibilidad en el sector / construir red]
- Estado actual del perfil: [sin actividad / activo como lector / alguna publicación esporádica / activo con pocos resultados]
- Audiencia objetivo: [CEOs de pymes / directivos de grandes empresas / fondos de inversión / CFOs de sector específico / etc.]
- Temas donde tengo más experiencia o perspectiva única: [describe dos o tres áreas donde tu visión aporta valor]

Dame:

1. POR QUÉ UN PROFESIONAL DE FINANZAS DEBE ESTAR EN LINKEDIN
Los profesionales de finanzas son históricamente reacios a compartir contenido. Convénceme: ¿qué oportunidades concretas genera el contenido en LinkedIn para un CFO, controller o consultor financiero? Dame ejemplos de perfiles de finanzas que han construido audiencia en LinkedIn y las oportunidades que eso les ha generado (clientes, ofertas de trabajo, conferencias, publicaciones, board seats).

2. QUÉ CONTENIDO FUNCIONA PARA UN PERFIL FINANCIERO
Un CFO o consultor financiero tiene contenido valioso pero necesita saber cómo compartirlo sin revelar información confidencial de sus clientes o empleador. Dame los diez tipos de contenido que funcionan para perfiles de finanzas: el análisis de resultados de empresas cotizadas, la opinión sobre noticias de mercado o regulatorias, los marcos y herramientas analíticas que uso, las lecciones aprendidas en mi carrera, los errores financieros frecuentes en las empresas y cómo evitarlos, y las tendencias en gestión financiera.

3. EL TONO Y EL ESTILO QUE GENERA CONFIANZA
En finanzas, la confianza es el activo más importante. ¿Cómo escribo en LinkedIn de forma que genere autoridad sin parecer arrogante, y que sea accesible sin perder rigor? Dame el estilo de escritura recomendado para un perfil financiero: el equilibrio entre datos y narrativa, cómo explicar conceptos complejos de forma clara, cuándo usar gráficos o tablas y cómo evitar el lenguaje corporativo vacío que abunda en LinkedIn.

4. TEMAS TABÚ Y LÍMITES DEONTOLÓGICOS
¿Qué no debo publicar como profesional de finanzas? Dame los límites claros: la información potencialmente privilegiada, los comentarios sobre empresas donde tengo relación profesional, las predicciones de mercado que puedan interpretarse como consejo de inversión, y las implicaciones legales de ciertos tipos de contenido financiero según la regulación de mercados de valores. ¿Cómo opino sobre temas de mercado sin cruzar la línea?

5. LA ESTRUCTURA DEL POST FINANCIERO PERFECTO
Dame la anatomía de un post de LinkedIn que funciona para un perfil financiero: el hook que captura la atención del directivo o del inversor, la estructura del cuerpo (datos, análisis, implicación práctica), el cierre con una pregunta o una toma de posición que invite al comentario, y el CTA apropiado para mi objetivo. Dame tres ejemplos de posts con estos elementos aplicados a tres temas financieros diferentes.

6. FRECUENCIA Y GESTIÓN DEL TIEMPO
Un CFO o consultor financiero no tiene tiempo de convertirse en creador de contenido a tiempo completo. ¿Cómo optimizo el tiempo dedicado a LinkedIn para el máximo impacto? Dame el sistema de producción de contenido para un perfil financiero ocupado: el banco de ideas que se alimenta de la actividad del trabajo diario, el tiempo mínimo semanal necesario, las herramientas que agilizan la producción y el batch de redacción quincenal.

7. DE LA VISIBILIDAD A LAS OPORTUNIDADES
¿Cómo convierto los seguidores y el engagement en oportunidades concretas? Dame las mecánicas de conversión para un perfil financiero: cómo mover una conversación de comentarios a mensaje privado, cómo posicionar mis servicios de consultoría sin parecer un vendedor, cómo responder a peticiones de consejo que llegan por mensaje directo y cómo construir la reputación online que lleva a invitaciones a conferencias, artículos o posiciones de advisory.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Construir autoridad en LinkedIn como profesional de finanzas para generar oportunidades de negocio o carrera.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Marketing legal en redes sociales',
                'description'       => 'El despacho o el abogado que usa LinkedIn para generar mandatos: las reglas deontológicas que aplican al marketing legal y el contenido que genera confianza sin prometer resultados.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en marketing jurídico y estrategia digital para despachos de abogados. Necesito que me ayudes a diseñar mi estrategia de presencia en LinkedIn y otras redes para generar mandatos y posicionar mi despacho o mi práctica individual, respetando las normas deontológicas aplicables.

Mi contexto:
- Tipo de práctica: [despacho boutique / socio de despacho grande / abogado individual / in-house que quiere visibilidad externa]
- Especialidad jurídica: [M&A / laboral / penal / fiscal / compliance / propiedad intelectual / arbitraje / tecnología y datos / etc.]
- Mercado objetivo: [empresas de qué sector y tamaño / particulares / startups / fondos / etc.]
- Estado actual del marketing: [sin presencia digital / web básica / algo de LinkedIn / activo en alguna red]
- Objetivo: [atraer nuevos clientes / posicionarme como experto para cambiar de despacho / visibilidad para colaboraciones / construir red de referrals]
- País donde ejerces: [importante para las normas deontológicas aplicables]

Dame:

1. LAS NORMAS DEONTOLÓGICAS DEL MARKETING LEGAL
Antes de hablar de estrategia, necesito conocer los límites. Dame el resumen de las principales restricciones deontológicas que aplican al marketing de abogados en mi jurisdicción: la prohibición de publicidad engañosa, las restricciones sobre captación activa de clientes (en especial el modelo anglosajón de solicitation vs. el europeo), la prohibición de prometer resultados, las normas sobre comunicaciones comerciales del Consejo General de la Abogacía y los límites al uso de testimonios de clientes. ¿Cómo ha evolucionado la posición de los colegios de abogados sobre el marketing digital en los últimos años?

2. QUÉ TIPO DE CONTENIDO GENERA MANDATOS EN DERECHO
El contenido jurídico en redes tiene un objetivo diferente al de otros sectores: generar confianza y credibilidad para que el potencial cliente tome la decisión de llamar. ¿Qué tipos de contenido funcionan para un abogado? Dame el análisis de cada uno: los comentarios de actualidad normativa o jurisprudencial, los artículos de divulgación sobre temas que interesan a tu cliente objetivo, los casos de éxito sin identificar al cliente, las entrevistas o apariciones en medios, y los posts de opinión sobre tendencias del sector.

3. LINKEDIN PARA ABOGADOS: LA ESTRATEGIA ESPECÍFICA
LinkedIn es la plataforma más efectiva para el marketing legal B2B. Dame la estrategia detallada: cómo optimizar el perfil para que el directivo o el general counsel que me busca encuentre exactamente lo que necesita (headline, about, experiencia con resultados, recomendaciones), la frecuencia de publicación recomendada para un abogado ocupado, y el tipo de contenido que genera conversaciones con potenciales clientes sin cruzar la línea deontológica.

4. CÓMO ESCRIBIR SOBRE DERECHO SIN PROMETER RESULTADOS
El mayor reto del marketing legal es que el cliente quiere saber si va a ganar, y el abogado no puede decirlo. ¿Cómo escribo contenido jurídico que sea útil y atractivo para el cliente potencial sin hacer afirmaciones que puedan interpretarse como promesas de resultado? Dame el estilo de redacción correcto: el uso del condicional, las disclaimers apropiadas, cómo presentar casos sin que parezca publicidad engañosa y cómo dar valor real en el contenido sin revelar la estrategia jurídica completa.

5. LA RED DE REFERRALS COMO CANAL PRINCIPAL
En la abogacía, los mejores mandatos vienen de referrals de colegas, clientes anteriores y otros profesionales. ¿Cómo uso LinkedIn y las redes para construir y mantener activa la red de referrals? Dame las tácticas: cómo mantener el contacto con abogados de otras especialidades para referidos mutuos, cómo posicionarme ante los CFOs, directores de RRHH o directivos que son los que luego te recomiendan y cómo el contenido que publico activa la red de forma pasiva.

6. THOUGHT LEADERSHIP EN EL SECTOR JURÍDICO
El abogado que es percibido como el experto de referencia en su especialidad atrae los mejores asuntos. ¿Cómo construyo el thought leadership jurídico? Dame el plan: cómo identificar los temas donde puedo tener perspectiva única, cómo publicar en medios jurídicos especializados (revistas, blogs, newsletters del sector), cómo conseguir invitaciones a conferencias y cómo usar LinkedIn para amplificar todo ese contenido de forma que llegue a los decisores que me interesan.

7. ERRORES DEL MARKETING LEGAL QUE DAÑAN LA REPUTACIÓN
Lista los seis errores más comunes que cometen los abogados en su marketing digital y que terminan dañando su reputación en lugar de construirla: el contenido jurídico inexacto o desactualizado, los posts de captación demasiado directa que generan rechazo, la inconsistencia que hace que la red olvide tu existencia, los testimonios de clientes que violan la confidencialidad y la presencia en plataformas irrelevantes para tu cliente objetivo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar la estrategia de marketing en redes sociales de un despacho o abogado individual respetando las normas deontológicas y generando mandatos reales.',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS y construcción de comunidad online',
                'description'       => 'Usa las redes para construir comunidad alrededor del producto: los grupos de usuarios, los hashtags y el contenido del equipo de CS que convierte clientes en evangelistas.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Customer Success y community building para productos digitales. Necesito que me ayudes a diseñar la estrategia de construcción de comunidad online de mi producto usando las redes sociales, los grupos de usuarios y el contenido generado por el equipo de CS para convertir a los clientes satisfechos en evangelistas activos.

Mi contexto:
- Tipo de producto: [SaaS / plataforma / herramienta / comunidad / etc.]
- Base de clientes actual: [número aproximado, tipo de usuario, nivel de engagement]
- Estado actual de la comunidad: [sin comunidad / grupo de Slack o Discord pequeño / comunidad activa pero sin estrategia / comunidad en redes sin coordinación]
- Plataformas donde los usuarios están activos: [LinkedIn / Twitter/X / Slack / Discord / Reddit / grupos de Facebook / etc.]
- Objetivo principal: [reducir churn por comunidad / aumentar la expansión revenue / generar producto feedback / crear user advocacy / reducir el volumen de soporte]
- Tamaño del equipo de CS: [solo / pequeño equipo / equipo grande]

Dame:

1. POR QUÉ LA COMUNIDAD ES UNA PALANCA DE CS
Explícame el caso de negocio de la comunidad de usuarios para el equipo de Customer Success: cómo la comunidad reduce el churn (los usuarios conectados con otros usuarios tienen mayor retención), cómo genera expansión revenue a través de peer advocacy, cómo reduce el volumen de soporte (los usuarios se ayudan entre sí) y cómo proporciona el mejor product feedback que existe. Dame métricas de referencia de empresas que han construido comunidades exitosas.

2. LA PLATAFORMA DE COMUNIDAD CORRECTA
¿Dónde debo construir la comunidad principal? Dame el análisis de las opciones: Slack (la más habitual en B2B SaaS, excelente para feedback y soporte técnico pero con problemas de retención histórica), Discord (popular en gaming y developer tools, gran engagement pero riesgo de ruido), grupos de LinkedIn o Facebook (menor engagement pero mayor distribución), Circle o Discourse (más controladas pero requieren que el usuario cambie de plataforma), y las redes sociales públicas (mayor alcance pero menor profundidad de conversación). ¿Cuál encaja mejor con mi caso?

3. LA ESTRATEGIA DE CONTENIDO DEL EQUIPO DE CS EN REDES
El equipo de CS tiene información única sobre los casos de uso reales del producto, los problemas frecuentes y los éxitos de los clientes. ¿Cómo convierto ese conocimiento en contenido de valor para las redes? Dame los tipos de contenido que puede crear el equipo de CS: los casos de uso prácticos del producto, los tips y trucos de power users, las preguntas frecuentes convertidas en contenido educativo, los resultados de clientes (con su permiso) y los posts de "cómo resolvemos X problema con el producto".

4. EL PROGRAMA DE CUSTOMER ADVOCACY
¿Cómo identifico a mis mejores clientes y los convierto en evangelistas activos en redes sociales? Dame el programa completo de customer advocacy: cómo identificar a los candidatos (NPS promoters, usuarios más activos, los que ya mencionan el producto en redes), cómo invitarlos al programa, qué les pido (testimonios, reseñas, casos de éxito, posts en redes, referencias), qué les doy a cambio (acceso anticipado, descuentos, visibilidad, acceso directo al equipo de producto) y cómo gestiono el programa con un equipo pequeño.

5. HASHTAGS, MENCIONES Y CONVERSACIONES EN REDES
¿Cómo uso las redes sociales para escuchar y participar en las conversaciones sobre mi producto y mi categoría? Dame la estrategia: los hashtags que debo monitorizar, cómo responder a las menciones positivas y negativas, cómo participar en las conversaciones del sector para ganar visibilidad entre usuarios potenciales, y las herramientas de social listening que puedo usar para no perderme nada relevante.

6. EVENTOS DE COMUNIDAD: ONLINE Y OFFLINE
Los eventos de comunidad son el mayor driver de engagement y retención. Dame el plan de eventos para los próximos doce meses: los webinars de producto (formato, frecuencia, cómo promocionarlos), las sesiones de Q&A con el equipo de producto o de CS, los meetups de usuarios (online y potencialmente offline), y cómo usar cada evento para generar contenido que se distribuya después en redes.

7. MÉTRICAS DE COMUNIDAD CONECTADAS CON EL NEGOCIO
¿Cómo mido el impacto de la comunidad en el negocio real y no solo en métricas de vanidad de comunidad? Dame el set de métricas que conectan la comunidad con el negocio: la tasa de churn de miembros activos de la comunidad vs. no miembros, el NPS de miembros vs. no miembros, el número de referencias generadas por la comunidad, la reducción de tickets de soporte atribuible a la comunidad y el product adoption de features anunciadas en la comunidad vs. en otros canales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar la estrategia de comunidad online para convertir clientes en evangelistas y reducir el churn a través del engagement comunitario.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Inbound freelance a través de contenido',
                'description'       => 'Genera clientes entrantes con contenido: el formato, la cadencia y la estrategia de un freelance que nunca tiene que salir a buscar proyectos porque los proyectos le encuentran a él.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en estrategia de contenido para profesionales independientes y freelancers. Necesito que me ayudes a diseñar el sistema de inbound marketing a través de contenido que me permita generar clientes de forma consistente sin tener que buscarlos activamente. Quiero que los proyectos lleguen a mí.

Mi contexto:
- Mi especialidad como freelance: [copywriter / diseñador / developer / consultor / fotógrafo / etc.]
- Tipo de clientes que quiero atraer: [startups / pymes / empresas grandes / particulares / sector específico]
- Canales de contenido que tengo o estoy considerando: [LinkedIn / Instagram / newsletter / blog / YouTube / TikTok / podcast / etc.]
- Estado actual del inbound: [sin clientes inbound / alguno esporádico / activo pero no sistemático]
- Mayor reto: [falta de tiempo para crear contenido / no sé qué publicar / publico pero no convierte / la red que tengo no es mi cliente objetivo]
- Cuánto tiempo puedo dedicar al contenido a la semana: [horas aproximadas]

Dame:

1. EL MODELO INBOUND FREELANCE: CÓMO FUNCIONA
Explícame el mecanismo completo de cómo un freelance puede generar clientes inbound a través de contenido: el funnel desde el descubrimiento del contenido hasta la firma del contrato, cuánto tiempo se tarda en ver resultados, qué tipo de contenido genera clientes y qué tipo solo genera seguidores, y por qué el contenido es el activo más escalable que puede construir un freelance a largo plazo.

2. EL NICHO: LA DECISIÓN MÁS IMPORTANTE
El contenido inbound solo funciona bien cuando está extremadamente enfocado en un nicho. ¿Cómo defino el nicho correcto para mí? Dame el proceso: la intersección entre lo que se me da bien, lo que el mercado paga bien y lo que me diferencia de los demás freelancers de mi especialidad. Ayúdame a evitar el error del nicho demasiado amplio (diseñador web en general) y a encontrar el ángulo específico que me hace la opción obvia para un tipo concreto de cliente.

3. LA PLATAFORMA PRINCIPAL: DÓNDE CONCENTRAR EL ESFUERZO
¿En qué plataforma o canal debo concentrar el 80% de mi energía? Dame el análisis de las opciones según mi perfil: LinkedIn para freelancers B2B, Instagram para creativos visuales, YouTube para tutoriales técnicos y educativos, newsletter para los que quieren la audiencia más comprometida, TikTok para llegar a audiencias más jóvenes. ¿Cuál encaja mejor con mi especialidad y mi tipo de cliente? ¿Cuándo tiene sentido añadir un segundo canal?

4. LA NEWSLETTER DEL FREELANCE COMO ACTIVO FUNDAMENTAL
La newsletter propia es el único canal donde yo soy el dueño de la audiencia. ¿Cómo la uso para generar clientes? Dame la estrategia completa: el tema de la newsletter que convierte lectores en clientes (no el tema que a mí me gusta escribir, sino el que el cliente necesita leer), la frecuencia, la estructura del número tipo, cómo crecer la lista sin pagar por publicidad, y cómo monetizarla directamente a través de menciones de mis servicios sin que parezca spam.

5. TIPOS DE CONTENIDO QUE GENERAN CLIENTES FREELANCE
No todo el contenido atrae clientes. Dame la tipología de contenido que convierte para un freelance: los casos de proceso (cómo resolví X problema para un cliente), los antes y después (qué estado tenía el cliente antes de trabajar conmigo y qué estado tiene ahora), los frameworks y metodologías que uso (que demuestran expertise sin regalar el trabajo), las opiniones contracorriente en mi sector (que atraen a clientes que comparten mi visión) y los posts educativos que resuelven el problema de un cliente pero no lo suficiente como para que no me necesite.

6. EL SISTEMA DE PRODUCCIÓN DE CONTENIDO PARA UN FREELANCE OCUPADO
El freelance no tiene tiempo de ser un creador de contenido a tiempo completo. ¿Cómo monto un sistema sostenible? Dame el proceso: cómo extraer ideas de contenido del trabajo del día a día, el batch mensual de producción, la reutilización de un mismo contenido en múltiples formatos y plataformas, las herramientas que aceleran la producción y cómo mantener la consistencia en los meses con más trabajo (cuando más necesito publicar para mantener el pipeline).

7. LA CONVERSIÓN: DE SEGUIDOR A CLIENTE
El contenido construye confianza, pero la conversión requiere un sistema. Dame el proceso de conversión del seguidor al cliente: cómo presentar mis servicios en el perfil y en el contenido sin que parezca publicidad, cuándo y cómo lanzar un mensaje directo a un seguidor que muestra señales de interés, cómo manejar las primeras peticiones de información que llegan por mensaje directo, y cómo cualificar rápido al lead para saber si encaja antes de dedicar tiempo a una reunión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar un sistema de inbound marketing a través de contenido para generar clientes freelance de forma consistente sin buscarlos activamente.',
                'vote_score'        => 48,
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
