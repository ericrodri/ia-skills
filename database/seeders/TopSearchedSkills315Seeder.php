<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills315Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 - Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Marca personal para profesionales de marketing: conviértete en referente del sector',
                'description'      => 'Aprende a construir una marca personal auténtica y diferenciada como profesional del marketing, posicionarte como experto en tu nicho, crear contenido de thought leadership y monetizar tu reputación online.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de marca personal con experiencia asesorando a directores de marketing, CMOs y especialistas digitales en la construcción de su autoridad y reputación profesional. Conoces los canales, los formatos y las estrategias que funcionan en el ecosistema del marketing moderno.

**MÓDULO 1: DIAGNÓSTICO Y POSICIONAMIENTO**

El primer paso para construir tu marca personal como profesional del marketing es saber exactamente dónde estás y a dónde quieres llegar:

*Diagnóstico de tu posición actual:*
- ¿Cuál es tu especialidad dentro del marketing? (performance, branding, contenido, social, SEO, CRM, growth...)
- ¿Qué logros y resultados medibles puedes mostrar de tu trayectoria profesional?
- ¿Cómo te perciben hoy tus compañeros, clientes o seguidores?
- ¿Qué dicen de ti cuando alguien te busca en LinkedIn o Google?
- ¿Tienes ya presencia digital y cuál es su calidad actual?

*Definición de tu posicionamiento único:*
- ¿En qué intersección de habilidades eres único? (ej.: marketing de contenidos + tecnología B2B + datos)
- ¿A qué audiencia específica quieres ayudar?
- ¿Cuál es el problema concreto que resuelves mejor que nadie?
- ¿Cuál es tu perspectiva o punto de vista diferenciado sobre el marketing que pocos comparten?
- Construcción de tu propuesta de valor personal: "Ayudo a [audiencia] a lograr [resultado] mediante [tu método o enfoque único]"

**MÓDULO 2: ESTRATEGIA DE CONTENIDO PARA PROFESIONALES DE MARKETING**

El contenido es la moneda de la autoridad para los profesionales del marketing:

*Pilares de contenido:*
Define tus 3-5 temas principales en los que vas a posicionarte como experto:
- Tema principal: tu especialidad central (ej.: marketing basado en datos)
- Temas secundarios: áreas adyacentes que refuerzan tu posicionamiento
- Temas de contexto: tu industria, tendencias del sector, perspectiva general

*Formatos que funcionan para profesionales del marketing en LinkedIn:*
- Posts de texto largo con reflexiones contrarias a la tendencia del sector
- Carruseles con marcos de trabajo, frameworks y metodologías propias
- Análisis de campañas reales: qué hizo bien X marca y qué habrías hecho diferente
- Casos de éxito propios con datos reales y lecciones aprendidas
- Opiniones sobre estudios, informes y noticias del sector con tu perspectiva
- Errores que cometiste y qué aprendiste de ellos (muy alto engagement)

*Ritmo y consistencia:*
- ¿Con qué frecuencia publicar para que sea sostenible a largo plazo?
- ¿Cómo crear un banco de ideas que nunca te deje sin contenido?
- ¿Cómo reciclar y reutilizar contenido entre plataformas?
- ¿Cómo medir si tu contenido está funcionando para construir autoridad?

**MÓDULO 3: DISTRIBUCIÓN Y AMPLIFICACIÓN**

Crear contenido sin distribuirlo es como montar una campaña sin medios:

*LinkedIn como canal principal:*
- Optimización del perfil para aparecer en búsquedas y generar primera impresión
- Estrategia de red: a quién conectar, cómo interactuar con líderes del sector
- Participación en conversaciones relevantes como comentarista inteligente
- Uso de newsletters de LinkedIn para capturar suscriptores

*Canales complementarios para profesionales del marketing:*
- Newsletter propia (Substack, Beehiiv): para la audiencia más comprometida
- Podcast o apariciones en podcasts del sector
- Conferencias y eventos: ponencias, mesas redondas, workshops
- Colaboraciones con otros profesionales del marketing para ampliar alcance
- Publicaciones en medios del sector (artículos de opinión, entrevistas)

**MÓDULO 4: MONETIZACIÓN DE LA MARCA PERSONAL**

La marca personal genera valor económico de múltiples formas:

*Monetización directa:*
- Consultoría y asesoramiento estratégico: cómo posicionarte y fijar tarifas premium
- Formación: cursos, talleres, masterclasses, bootcamps
- Mentoría: programas individuales o grupales
- Contenido de pago: newsletters de pago, comunidades privadas

*Monetización indirecta:*
- Mejora de tu posición negociadora en entrevistas de trabajo
- Acceso a proyectos, clientes y oportunidades de mayor calidad y remuneración
- Invitaciones a ponencias y eventos remunerados
- Partnerships y colaboraciones con marcas o herramientas del sector

*Construcción del embudo de la marca personal:*
- Visibilidad → Autoridad → Confianza → Ingresos
- ¿Cómo convertir seguidores en clientes o en oportunidades profesionales?
- ¿Cómo gestionar la agenda para que la marca personal no devore tu tiempo productivo?

**MÓDULO 5: PLAN DE ACCIÓN A 90 DÍAS**

Diseña un plan de 90 días con hitos semanales:
- Semanas 1-4: Auditoría y definición de posicionamiento, optimización de perfiles, primeros contenidos
- Semanas 5-8: Ritmo de publicación establecido, crecimiento de red, primeras interacciones con referentes
- Semanas 9-12: Análisis de resultados, ajuste de estrategia, primeras oportunidades generadas

**ENTREGABLES**
1. Documento de posicionamiento personal de 1 página: quién eres, a quién ayudas, qué te hace único
2. Mapa de contenido con 30 ideas de posts específicos para los próximos 2 meses
3. Checklist de optimización del perfil de LinkedIn para profesionales del marketing
4. Plantilla de estrategia de marca personal a 12 meses con KPIs de seguimiento

¿Cuál es tu especialidad dentro del marketing, en qué sector tienes más experiencia y cuál es tu objetivo principal con la marca personal (nuevo empleo, clientes, reconocimiento)?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construcción de autoridad y reputación profesional para especialistas en marketing',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            // 2 - Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Marca personal para desarrolladores: de programar en la sombra a ser reconocido en el sector',
                'description'      => 'Aprende a construir tu marca personal como desarrollador de software, mostrando tu trabajo en GitHub, generando contenido técnico de valor y posicionarte como referente para conseguir mejores oportunidades profesionales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un desarrollador senior con 15 años de experiencia que ha construido una marca personal sólida en la comunidad tech. Has pasado de ser un desarrollador anónimo a ser speaker en conferencias, creador de contenido técnico con miles de seguidores y consultor con lista de espera de clientes. Enséñame cómo lo lograste paso a paso.

**MÓDULO 1: POR QUÉ LOS DESARROLLADORES NECESITAN MARCA PERSONAL**

Muchos desarrolladores creen que el código habla por sí solo, pero la realidad del mercado es más compleja:

- Por qué los mejores empleos y contratos van a quien es conocido, no necesariamente a quien es mejor técnicamente
- Cómo la marca personal acelera el crecimiento salarial y las oportunidades de freelance
- La diferencia entre ser un desarrollador cualificado y ser un desarrollador conocido
- Por qué la marca personal no significa venderse, sino hacer visible el trabajo que ya haces

*El stack de la marca personal de un desarrollador:*
- GitHub (código y proyectos) + Blog técnico + LinkedIn + Twitter/X + Comunidades (Discord, Slack)
- No necesitas estar en todas partes: elige 2-3 canales y domínalos

**MÓDULO 2: POSICIONAMIENTO TÉCNICO**

*Elige tu nicho:*
- Por qué intentar posicionarte como "desarrollador full stack" es una trampa
- Cómo encontrar el nicho donde tu experiencia + tus intereses + la demanda del mercado se intersectan
- Ejemplos de posicionamientos exitosos: "especialista en rendimiento de React", "experto en arquitectura serverless", "referente en accesibilidad web", "experto en seguridad backend en Go"

*Define tu propuesta de valor como desarrollador:*
- ¿Qué tipos de problemas técnicos resuelves mejor que otros?
- ¿Qué perspectiva única tienes sobre el desarrollo de software?
- ¿Qué principios técnicos defiendes que no son la opinión mayoritaria?
- ¿A quién ayudas principalmente: startups, empresas enterprise, otros desarrolladores?

**MÓDULO 3: ESTRATEGIA DE CONTENIDO TÉCNICO**

*Formatos de contenido técnico con mayor impacto:*

Contenido escrito:
- Posts técnicos en profundidad: tutorials, guías definitivas, análisis de arquitecturas
- TIL (Today I Learned): aprendizajes pequeños pero útiles publicados regularmente
- Post mórtem de proyectos: qué falló, por qué y qué aprendiste
- Comparativas técnicas: framework A vs B, explicadas sin sesgos
- Opiniones técnicas con argumento: por qué creo que X enfoque es mejor que Y

Contenido en código:
- Proyectos open source que resuelvan problemas reales
- Snippets y utilitarios en GitHub Gist
- Contribuciones a proyectos populares con documentación de la contribución
- Repositorios de ejemplo y boilerplates bien documentados

Contenido en vídeo y audio:
- Screencasts de pair programming o de debugging en vivo
- Charlas técnicas grabadas (conferencias, meetups)
- Apariciones en podcasts técnicos del sector

*Cómo escribir sobre código para que no resulte aburrido:*
- Estructura narrativa: el problema, el intento fallido, la solución, la reflexión
- Incluir fragmentos de código que realmente se puedan copiar y usar
- Contextualizar por qué una solución importa, no solo cómo funciona
- Cómo mantener la autenticidad técnica sin perder la legibilidad

**MÓDULO 4: PRESENCIA EN GITHUB COMO CARTA DE PRESENTACIÓN**

- ¿Cómo construir un perfil de GitHub que impresione en los primeros 10 segundos?
- Guía para escribir READMEs que la gente realmente lea
- ¿Qué proyectos open source lanzar para maximizar la visibilidad?
- ¿Cómo contribuir estratégicamente a proyectos populares para ganar reconocimiento?
- Métricas de GitHub que importan (stars, forks, contribuciones) y cómo impulsarlas

**MÓDULO 5: COMUNIDAD Y NETWORKING TÉCNICO**

- ¿Cómo participar en comunidades técnicas sin parecer que estás vendiendo?
- Cómo hablar en meetups locales para ganar experiencia y visibilidad
- ¿Cómo conseguir tu primera charla en una conferencia técnica?
- El arte del networking asincrónico: responder en foros, ayudar en Discord, contestar en Stack Overflow
- ¿Cómo construir relaciones con otros desarrolladores con marca personal?

**MÓDULO 6: MONETIZACIÓN DE LA MARCA PERSONAL TÉCNICA**

- Mejores ofertas de trabajo con menor esfuerzo de búsqueda
- Clientes de consultoría técnica de mayor calidad y con tarifa premium
- Ingresos por cursos, tutoriales de video, libros técnicos o screencasts de pago
- Sponsorships de herramientas y empresas tech que quieren llegar a tu audiencia
- Ingresos por proyectos open source (GitHub Sponsors, Patreon, Open Collective)

**ENTREGABLES**
1. Mapa de posicionamiento técnico: tu nicho, tu audiencia, tu propuesta de valor única
2. Plan de contenido con 20 ideas específicas de posts técnicos para los próximos 2 meses
3. Checklist de optimización de perfil de GitHub, LinkedIn y Twitter/X para desarrolladores
4. Hoja de ruta de marca personal a 6 meses con hitos concretos por mes

¿Cuál es tu stack principal, en qué tipo de proyectos tienes más experiencia y cuál es tu objetivo con la marca personal?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construcción de presencia y autoridad online para desarrolladores de software',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            // 3 - Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Marca personal para diseñadores: cómo tu portfolio y tu voz te traen los mejores proyectos',
                'description'      => 'Aprende a construir una marca personal auténtica como diseñador que atrae a los clientes ideales, comunica tu proceso creativo y te posiciona como referente en tu disciplina de diseño.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director creativo y estratega de marca personal con experiencia asesorando a diseñadores gráficos, de producto, UX, de interiores y de moda en la construcción de su reputación profesional y su negocio creativo. Conoces los canales donde los diseñadores consiguen clientes y reconocimiento.

**MÓDULO 1: LA PARADOJA DEL DISEÑADOR: CREAS MARCA PARA OTROS PERO DESCUIDAS LA TUYA**

Es el error más común en la comunidad del diseño: dedicar talento y tiempo a construir la imagen de clientes mientras la propia marca personal queda abandonada.

Por qué tu marca personal como diseñador importa más que en otras profesiones:
- Los clientes contratan diseñadores por cómo les hacen sentir, no solo por su portfolio
- Tu estética personal es tu mayor diferenciador en un mercado saturado
- La marca personal permite cobrar más y trabajar con clientes que respetan el proceso creativo
- Un diseñador con marca consolidada atrae oportunidades sin salir a buscarlas activamente

**MÓDULO 2: POSICIONAMIENTO COMO DISEÑADOR**

*Encuentra tu nicho creativo:*
- Por qué ser "diseñador de todo" te hace competir solo por precio
- Cómo encontrar la intersección de: lo que haces mejor, lo que disfrutas y lo que el mercado valora
- Ejemplos de posicionamientos efectivos: "diseñador de identidad para startups de tecnología climática", "especialista en diseño editorial para editoriales independientes", "diseñadora UX para aplicaciones de salud mental"

*Tu propuesta estética y de valor:*
- ¿Cómo describirías tu estética en 3 adjetivos? (minimalista, audaz, orgánico, tipográfico...)
- ¿Qué tipo de problemas de diseño resuelves mejor?
- ¿Qué perspectiva o filosofía del diseño defines tu trabajo?
- ¿Cómo diferencias tu proceso creativo del de otros diseñadores?

*El "punto de vista de diseño":*
Desarrolla un manifiesto de 3-5 principios de diseño propios que guían tu trabajo y que comunicas públicamente. Este punto de vista te distingue y atrae a clientes que comparten tu filosofía.

**MÓDULO 3: EL PORTFOLIO COMO PILAR DE LA MARCA**

*Qué hace que un portfolio de diseño sea una herramienta de marca personal potente:*
- Curación vs. cantidad: por qué mostrar menos pero mejor es siempre la decisión correcta
- El peso del proceso creativo: los clientes compran tu forma de pensar, no solo el resultado final
- Cómo documentar el proceso: brief, exploración, iteraciones, solución y razonamiento detrás
- El rol del copywriting en el portfolio: cómo escribir sobre tu trabajo con voz propia

*Plataformas y formatos:*
- Behance y Dribbble: ventajas e inconvenientes, a quién le funcionan mejor
- Portfolio web propio: cuándo vale la pena y cómo hacerlo sin que se convierta en un proyecto interminable
- Redes sociales visuales (Instagram, Pinterest): cómo construir una presencia estética coherente
- Case studies en formato PDF o presentación para enviar a clientes potenciales

*Cómo presentar el trabajo con voz propia:*
- Escribe en primera persona y con autenticidad, no como si fuera una ficha de producto
- Explica el "por qué" detrás de cada decisión de diseño
- Muestra también los caminos no tomados y las alternativas descartadas
- Incluye métricas o resultados cuando existan (conversión, engagement, ventas)

**MÓDULO 4: ESTRATEGIA DE CONTENIDO PARA DISEÑADORES**

*Ideas de contenido que construyen autoridad como diseñador:*
- Behind the scenes del proceso creativo en vídeos o posts de Instagram/TikTok
- Análisis de identidades visuales de marcas conocidas: qué funciona y qué cambiarías
- Tendencias de diseño: cuáles adoptas, cuáles rechazas y por qué
- Tutoriales de tu herramienta principal (Figma, Illustrator, Photoshop, Procreate)
- Comparativas de recursos: fuentes, paletas, mockups, plugins que usas realmente
- Reflexiones sobre la profesión: relación con clientes, precios, sostenibilidad creativa

*Voz y tono como elemento de marca:*
- ¿Cómo quieres sonar en tus comunicaciones? (inspirador, técnico, íntimo, irreverente...)
- La coherencia entre tu estética visual y tu voz escrita refuerza la marca
- ¿Cómo compartir opiniones de diseño sin resultar arrogante ni polémico?

**MÓDULO 5: ATRACCIÓN DE CLIENTES IDEALES**

- ¿Cómo describir tu cliente ideal y crear contenido que hable directamente a él?
- ¿Qué tipo de proyectos quieres hacer más y cómo comunicarlo para atraerlos?
- Cómo rechazar proyectos que no encajan con tu posicionamiento sin quemar la relación
- El efecto de la especialización en los precios: por qué cobras más siendo especialista

**ENTREGABLES**
1. Ficha de posicionamiento de marca personal: nicho, audiencia ideal, propuesta de valor y punto de vista de diseño
2. Checklist de revisión del portfolio con criterios de marca personal
3. Plan de contenido con 20 ideas específicas para los próximos 2 meses
4. Guía de copywriting para describir proyectos del portfolio con voz propia

¿Cuál es tu disciplina de diseño, qué tipo de proyectos prefieres y cuál es el principal obstáculo de tu marca personal hoy?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Posicionamiento y estrategia de contenido para diseñadores que quieren atraer mejores proyectos y clientes',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            // 4 - Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Marca personal para vendedores: conviértete en el profesional de ventas al que todos quieren comprar',
                'description'      => 'Aprende a construir tu autoridad como profesional de ventas, generar confianza antes de la primera llamada y posicionarte como asesor de confianza en tu sector para cerrar más y mejores negocios.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en social selling y marca personal para profesionales de ventas con experiencia ayudando a SDRs, Account Executives y directores comerciales a aumentar su pipeline y sus ingresos a través de su presencia digital y su reputación profesional.

**MÓDULO 1: POR QUÉ LA MARCA PERSONAL ES EL MEJOR ACTIVO DE UN VENDEDOR**

En el entorno actual de ventas B2B, los compradores investigan a los vendedores antes de aceptar una reunión:

- El 75% de los compradores B2B usan LinkedIn para evaluar a los vendedores antes de contestar
- Un vendedor con marca personal sólida tiene hasta un 45% más de probabilidades de alcanzar su cuota
- La marca personal reduce el tiempo necesario para generar confianza y acelera el ciclo de ventas
- Un vendedor conocido como referente del sector recibe inbound de clientes potenciales sin prospectar

*La diferencia entre un vendedor y un vendedor con marca personal:*
- Sin marca: envías emails en frío que se ignoran, haces llamadas que no contestan
- Con marca: los prospects ya te conocen, confían en ti y están predispuestos a escucharte

**MÓDULO 2: POSICIONAMIENTO COMO PROFESIONAL DE VENTAS**

*Encuentra tu nicho en ventas:*
- ¿En qué sector o vertical tienes mayor experiencia y credibilidad?
- ¿Qué tipo de cliente conoces mejor (tamaño de empresa, industria, rol del decisor)?
- ¿Qué problema de negocio específico resuelve tu solución mejor que nadie?
- ¿Qué perspectiva única tienes sobre las tendencias del sector de tus clientes?

*Tu posicionamiento como asesor de confianza, no como vendedor:*
La marca personal más efectiva para vendedores los posiciona como expertos en el negocio de sus clientes, no como expertos en su propio producto.

"Ayudo a [tipo de empresa] a resolver [problema de negocio específico] en [industria], consiguiendo [resultado medible]"

Ejemplo: "Ayudo a empresas de logística con más de 100 vehículos a reducir los tiempos de entrega en un 30% sin aumentar la flota"

**MÓDULO 3: LINKEDIN COMO MOTOR DE VENTAS**

*Optimización del perfil de LinkedIn para vendedores:*
- Foto profesional que transmita confianza y accesibilidad, no rigidez
- Titular que hable del resultado que generas para tus clientes, no de tu cargo
- About que cuente tu historia, los problemas que resuelves y cómo puedes ayudar
- Sección de experiencia con resultados cuantificados, no solo responsabilidades
- Recomendaciones de clientes y colegas: cómo pedirlas de forma efectiva

*Estrategia de contenido en LinkedIn para vendedores:*
Temas de contenido que construyen autoridad ante tus compradores:
- Tendencias e insights del sector de tus clientes (no de ventas)
- Casos de éxito anonimizados con el problema, la solución y el resultado
- Lecciones aprendidas de conversaciones con clientes (con su permiso y sin revelar datos)
- Desmontando mitos comunes del sector en el que operas
- Reflexiones sobre cómo está cambiando el negocio de tus clientes
- Herramientas y recursos que tus clientes deberían conocer (sin mencionar tu producto)

*Social selling sin parecer que vendes:*
- Cómo hacer comentarios inteligentes en posts de tus prospects
- Cómo conectar con decisores de forma que no parezca prospección
- Cuándo y cómo hacer el primer contacto privado sin ser invasivo
- La regla del valor antes del pitch: dar tres veces antes de pedir una

**MÓDULO 4: THOUGHT LEADERSHIP EN EL SECTOR DE TUS CLIENTES**

El objetivo es que tus prospects te perciban como alguien que entiende su negocio mejor que sus propios compañeros:

- ¿Cómo mantenerte al día de las noticias, tendencias y retos del sector de tus clientes?
- ¿Cómo compartir esa información con tu perspectiva y análisis propio?
- Participación en eventos, conferencias y foros del sector de tus clientes (no los de ventas)
- ¿Cómo conseguir ser invitado a hablar en eventos del sector de tus clientes?
- Construcción de una newsletter sectorial que tus prospects quieran leer

**MÓDULO 5: MEDICIÓN DEL IMPACTO EN VENTAS**

Métricas que demuestran que la marca personal genera resultados comerciales:
- Tasa de aceptación de conexiones en LinkedIn (objetivo > 35%)
- Tasa de respuesta a mensajes de prospección (objetivo > 20%)
- Inbound de prospects que te contactan por tu contenido
- Reducción del ciclo de ventas en leads que ya te conocían
- Mejora en la tasa de conversión de primera reunión a oportunidad

**ENTREGABLES**
1. Plantilla de posicionamiento: tu nicho en ventas, tu propuesta de valor, tus temas de autoridad
2. Guía de optimización del perfil de LinkedIn con ejemplos para vendedores
3. Plan de contenido con 20 ideas de posts para los próximos 2 meses en el sector de tus clientes
4. Protocolo de social selling: secuencia de acciones semanales para generar pipeline desde LinkedIn

¿En qué sector vendes, qué solución llevas y cuál es el perfil del decisor de compra con el que más tratas?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Social selling y marca personal para profesionales de ventas B2B que quieren generar más pipeline',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            // 5 - Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Marca personal para product managers: posiciónate como PM de referencia en tu industria',
                'description'      => 'Aprende a construir tu autoridad como Product Manager, compartir tu visión de producto públicamente y posicionarte para acceder a las mejores oportunidades de PM en empresas tecnológicas líderes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en desarrollo de carrera para Product Managers con experiencia asesorando a PMs de todos los niveles, desde asociados hasta CPOs. Conoces los canales donde se mueven los PMs, los temas que generan conversación y las estrategias que convierten a un PM en un referente de la comunidad de producto.

**MÓDULO 1: POR QUÉ EL PM ES UN ROL INVISIBLE Y CÓMO CAMBIAR ESO**

El product management es paradójicamente un rol muy influyente pero poco visible externamente:
- Los PMs trabajan intensamente dentro de la empresa pero pocas veces comunican hacia afuera
- Las mejores oportunidades de PM (empresas top, salarios premium) van a los PMs conocidos
- La marca personal acelera el crecimiento de carrera: de IC a Staff PM o CPO en la mitad del tiempo
- Los PMs con marca personal acceden a roles, inversores y comunidades que permanecen opacos para los demás

*El error más común de los PMs con marca personal:*
Hablar de gestión de producto en abstracto en lugar de compartir perspectivas sobre dominios específicos de negocio o tecnología.

**MÓDULO 2: POSICIONAMIENTO COMO PRODUCT MANAGER**

*Elige tu área de especialización:*
Los PMs más influyentes no se posicionan como "buenos en producto" sino como expertos en una intersección específica:
- Por tipo de producto: B2B SaaS, consumer apps, marketplace, plataformas de datos, hardware
- Por industria vertical: fintech, healthtech, edtech, e-commerce, enterprise software
- Por disciplina dentro del producto: growth, monetización, onboarding, API-first, IA/ML
- Por etapa de empresa: early stage (0-1), growth (1-10), scale (10-100)

*Construye tu perspectiva de producto propia:*
Un PM de marca personal comparte una forma de pensar sobre el producto que es reconocible y consistente:
- ¿Qué marcos de trabajo o metodologías de producto defiendes más y por qué?
- ¿Qué creencias sobre el buen product management no son la opinión mayoritaria?
- ¿Cómo piensas sobre la priorización, la relación con ingeniería, el discovery o la estrategia?
- Desarrolla tu "filosofía de producto" en 5 principios que guían tus decisiones

**MÓDULO 3: ESTRATEGIA DE CONTENIDO PARA PRODUCT MANAGERS**

*Temas con mayor tracción en la comunidad PM:*
- Postmortems de producto: qué construiste que no funcionó, por qué y qué aprendiste
- Análisis de productos exitosos: por qué funciona LinkedIn, Notion, Figma o cualquier producto que admiras
- Desmontando frameworks clásicos del producto con experiencia real
- Perspectivas sobre el futuro del product management en la era de la IA
- Cómo tomaste una decisión difícil de roadmap y qué pasó después
- Reflexiones sobre la relación PM-ingeniería-diseño desde la experiencia real

*Plataformas y formatos para PMs:*
- LinkedIn: para contenido de carrera, reflexiones profesionales y análisis de negocio
- Substack/Medium: para posts técnicos de producto en profundidad con mayor densidad de argumentos
- Twitter/X: para opiniones rápidas, participación en debates de la comunidad PM
- Podcasts: apariciones en podcasts de producto como Lenny's Podcast, Product Talk, etc.
- Vídeo: análisis de productos, walkthroughs, reflexiones sobre metodología

*Cómo escribir sobre producto sin revelar información confidencial:*
- Anonimizar casos sin perder la riqueza del ejemplo
- Compartir el framework de decisión sin revelar los datos internos
- Usar ejemplos de productos públicos para ilustrar conceptos que aplicas en tu trabajo

**MÓDULO 4: COMUNIDAD Y RED DE PRODUCTO**

- ¿Cómo participar en comunidades PM (Lenny's Community, Product School, Mind the Product)?
- ¿Cómo hablar en meetups y conferencias de producto?
- ¿Cómo construir relaciones con CPOs y VPs de Producto de empresas que admiras?
- El valor de mentorizar a PMs júnior como forma de aprender, dar y construir reputación
- ¿Cómo colaborar con otros PMs para amplificar el alcance mutuo?

**MÓDULO 5: MARCA PERSONAL PARA AVANZAR EN LA CARRERA DE PM**

*Si buscas un nuevo rol:*
- ¿Cómo usar LinkedIn para que los recruiters de las mejores empresas te encuentren a ti?
- ¿Cómo convertir tu marca personal en conversaciones con hiring managers antes de aplicar?
- ¿Cómo diferenciarte en el proceso de selección cuando tienes una marca conocida?

*Si quieres hacer la transición a CPO o roles ejecutivos:*
- ¿Qué tipo de contenido posiciona a un PM como pensador estratégico de nivel C?
- ¿Cómo construir relaciones con VCs, founders y boards desde la marca personal?

**ENTREGABLES**
1. Documento de posicionamiento PM: nicho, perspectiva de producto propia, audiencia objetivo
2. Plan de contenido con 25 ideas específicas de posts para la comunidad de producto
3. Checklist de optimización de perfil de LinkedIn para Product Managers
4. Hoja de ruta de marca personal a 12 meses con hitos de crecimiento de carrera

¿Cuál es tu especialidad de producto, en qué tipo de empresa y sector trabajas y cuál es tu objetivo profesional a 2 años?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construcción de autoridad y visibilidad para Product Managers que quieren acceder a mejores oportunidades de carrera',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            // 6 - RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Marca personal para profesionales de RRHH: de gestionar personas a liderar la conversación del talento',
                'description'      => 'Aprende a construir tu autoridad como profesional de Recursos Humanos, compartir tu visión sobre el futuro del trabajo y posicionarte como referente en People & Talent para influir más dentro y fuera de tu organización.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marca personal para profesionales de RRHH y People & Culture. Has asesorado a CHROs, HR Business Partners, talent acquisition managers y consultores de RRHH en la construcción de su reputación y su influencia en la comunidad de Recursos Humanos.

**MÓDULO 1: POR QUÉ EL PROFESIONAL DE RRHH NECESITA MARCA PERSONAL**

Los profesionales de RRHH son los arquitectos de la cultura y el talento de las organizaciones, pero frecuentemente son los menos visibles externamente:

- Un CHRO o HR Director con marca personal tiene más influencia interna porque su perspectiva es reconocida externamente
- La marca personal en RRHH atrae mejor talento a la empresa (employer branding desde dentro)
- Los profesionales de RRHH con marca reconocida son más resilientes ante los cambios organizacionales
- La visibilidad externa otorga autoridad para impulsar cambios culturales internos más difíciles de conseguir solo con el cargo

**MÓDULO 2: POSICIONAMIENTO COMO PROFESIONAL DE RRHH**

*Áreas de especialización con mayor potencial de posicionamiento:*
- Talent Acquisition y employer branding en entornos competitivos
- People Analytics y toma de decisiones basada en datos
- Employee Experience y diseño de la experiencia del empleado
- Cultura organizacional y transformación cultural
- Learning & Development y las organizaciones que aprenden
- Bienestar, salud mental y sostenibilidad en el trabajo
- Liderazgo y desarrollo de directivos
- Diversidad, equidad e inclusión (DEI) con impacto real
- El futuro del trabajo: teletrabajo, trabajo híbrido, IA en el trabajo

*Define tu perspectiva única sobre los RRHH:*
- ¿Qué creencias sobre la gestión de personas te diferencian del mainstream de RRHH?
- ¿Qué errores ves repetidamente en los departamentos de RRHH que quieres ayudar a evitar?
- ¿Cuál es tu visión sobre el rol de RRHH en la empresa del futuro?
- ¿Qué evidencia, experiencia o investigación respalda tu perspectiva?

**MÓDULO 3: ESTRATEGIA DE CONTENIDO PARA PROFESIONALES DE RRHH**

*Temas que generan mayor engagement en la comunidad de RRHH y liderazgo:*
- El estado real del mercado de talento: lo que los datos muestran que difiere del relato dominante
- Errores de gestión de personas que has visto en tu experiencia (sin revelar empresas)
- Lo que funciona y lo que no en onboarding, retención o cultura, desde la experiencia real
- Perspectivas críticas sobre prácticas de RRHH extendidas pero cuestionables
- Reflexiones sobre el impacto de la IA en la gestión del talento y el rol de RRHH
- Casos de éxito en transformación cultural o employer branding con lecciones aprendidas
- Herramientas, libros y recursos que realmente usas y recomiendas

*Cómo compartir perspectivas de RRHH sin comprometer la confidencialidad:*
- Anonimizar ejemplos preservando el aprendizaje
- Compartir frameworks y procesos sin revelar datos internos
- Usar casos de empresas públicas para ilustrar principios

*Plataformas principales para profesionales de RRHH:*
- LinkedIn: el canal principal de la comunidad de RRHH y liderazgo
- Foros y comunidades: SHRM, HR Open Source, grupos de LinkedIn especializados
- Eventos y conferencias: HR Tech, Unleash, Talent Connect, HR Innovation Summit

**MÓDULO 4: EMPLOYER BRANDING DESDE TU MARCA PERSONAL**

Como profesional de RRHH, tu marca personal refuerza el employer branding de tu empresa:
- Cómo hablar públicamente de la cultura de tu empresa sin sonar como un folleto corporativo
- Cómo mostrar el trabajo de People & Culture de forma auténtica y que genere interés de candidatos
- El efecto halo: cuando el CHRO es respetado externamente, el employer branding mejora orgánicamente
- Cómo involucrar al resto del equipo de RRHH en la construcción del employer brand

**MÓDULO 5: MONETIZACIÓN Y DESARROLLO DE CARRERA**

*Si trabajas en empresa:*
- Mayor influencia interna al ser reconocida externamente
- Acceso a roles ejecutivos más rápido con una marca conocida
- Capacidad de atraer mejor talento a tu organización como efecto de tu reputación

*Si tienes o quieres tener consultora de RRHH:*
- Clientes que llegan por tu contenido y tu reputación sin esfuerzo de ventas
- Capacidad de cobrar tarifas de consultoría premium respaldadas por tu autoridad
- Invitaciones a formaciones, ponencias y workshops del sector
- Oportunidades de colaboración con empresas de tecnología HR

**ENTREGABLES**
1. Mapa de posicionamiento: nicho de RRHH, audiencia, perspectiva única y mensajes clave
2. Plan de contenido con 20 ideas específicas para la comunidad de RRHH y liderazgo
3. Guía de employer branding desde la marca personal del profesional de RRHH
4. Checklist de optimización de presencia digital para profesionales de People & Talent

¿Cuál es tu especialidad dentro de RRHH, en qué tipo de empresa trabajas y cuál es tu objetivo con la marca personal?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construcción de autoridad y visibilidad para profesionales de RRHH y People & Culture',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 7 - Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Marca personal para profesionales de finanzas: de analista técnico a referente del sector financiero',
                'description'      => 'Aprende a construir tu autoridad como profesional de finanzas corporativas, inversión o banca, compartiendo conocimiento complejo de forma accesible y posicionándote como voz de referencia en los temas financieros que más importan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de marca personal especializado en profesionales del sector financiero: analistas de inversión, CFOs, asesores financieros, banqueros de inversión, controllers y consultores de finanzas corporativas. Conoces los retos particulares de construir una marca personal en un sector que valora la discreción y la autoridad técnica.

**MÓDULO 1: LA DUALIDAD DEL PROFESIONAL DE FINANZAS: EXPERTO TÉCNICO Y COMUNICADOR**

Los profesionales de finanzas enfrentan un reto único: su conocimiento es extremadamente valioso, pero también extremadamente complejo para el público general. La marca personal resuelve ese reto siendo el puente entre la expertise técnica y la audiencia que necesita entenderla.

*Por qué el profesional de finanzas necesita marca personal:*
- Los mejores mandatos de asesoría o inversión van a los financieros conocidos y respetados
- Un CFO con marca reconocida tiene más influencia ante el consejo de administración y los inversores
- Los analistas con presencia pública atraen mejores deal flow y oportunidades de coinversión
- En un sector de alta confianza, la reputación pública acelera la construcción de confianza privada

*Los límites del sector:*
- ¿Qué información puedes y no puedes compartir respetando regulación y confidencialidad?
- Cómo hablar de tendencias del mercado sin hacer recomendaciones de inversión ilegales
- La diferencia entre thought leadership financiero y publicidad de servicios financieros

**MÓDULO 2: POSICIONAMIENTO COMO PROFESIONAL DE FINANZAS**

*Áreas de especialización con mayor potencial de marca:*
- Finanzas corporativas y M&A: análisis de transacciones, valoración, estructuración de deals
- Inversión y capital riesgo: tesis de inversión, análisis sectorial, gestión de portfolios
- Fintech y transformación financiera: IA en finanzas, pagos digitales, banca abierta
- ESG y finanzas sostenibles: inversión de impacto, reporting de sostenibilidad, taxonomía verde
- Planificación financiera personal: educación financiera, independencia económica, inversión para particulares
- Análisis macroeconómico: política monetaria, mercados globales, ciclos económicos
- Contabilidad y control de gestión: reporting financiero, KPIs, analítica de negocio

*Cómo simplificar sin perder rigor:*
- La regla del "explícamelo como si tuviera 15 años": cómo adaptar el lenguaje sin perder precisión
- Uso de analogías y ejemplos de la vida cotidiana para explicar conceptos financieros complejos
- El poder de los datos visualizados: gráficos y tablas que cuentan historias financieras en segundos
- Cómo citar fuentes y mantener el rigor académico mientras eres entretenido

**MÓDULO 3: ESTRATEGIA DE CONTENIDO PARA PROFESIONALES DE FINANZAS**

*Formatos y temas con mayor impacto:*
- Explicaciones de noticias económicas con tu perspectiva técnica (interpretación, no descripción)
- Análisis de resultados de empresas cotizadas: por qué el mercado reaccionó así
- Desmontando mitos financieros comunes que todos creen y son falsos
- Reflexiones sobre el impacto de las decisiones de política monetaria en las empresas y familias
- Casos de análisis financiero real anonimizados con el proceso de razonamiento completo
- Herramientas, modelos y frameworks que usas en tu trabajo y que son raramente compartidos

*Cómo gestionar el riesgo regulatorio en el contenido financiero:*
- Disclaimers adecuados en contenido sobre inversión
- La diferencia entre educación financiera y asesoramiento financiero regulado
- Qué puedes decir sobre tu empleador o clientes sin comprometer la confidencialidad

*Plataformas con mayor penetración en la comunidad financiera:*
- LinkedIn: para contenido dirigido a profesionales corporativos y ejecutivos
- Twitter/X: para comentarios de mercado en tiempo real y debates macroeconómicos
- Substack: para análisis más profundos con base de suscriptores comprometidos
- YouTube/vídeo: para explicaciones visuales de modelos financieros y análisis de mercados

**MÓDULO 4: THOUGHT LEADERSHIP FINANCIERO**

*Cómo construir autoridad técnica con contenido de calidad:*
- Publica análisis propios antes de que los medios de comunicación lleguen a los mismos temas
- Desarrolla y comparte un marco de análisis financiero propio que otros comiencen a usar
- Conecta eventos económicos globales con el impacto en las empresas y sectores que conoces
- Conviértete en fuente para periodistas especializados en economía y finanzas

*Apariciones en medios:*
- Cómo posicionarse para ser entrevistado en medios especializados (Expansión, Cinco Días, El Economista)
- Participación en podcasts económicos como analista invitado
- Ponencias en conferencias del sector financiero: cómo conseguir tu primera invitación

**ENTREGABLES**
1. Posicionamiento de marca financiera: especialidad, audiencia, perspectiva diferenciadora y límites de comunicación
2. Plan de contenido con 20 temas específicos que equilibren rigor técnico y accesibilidad
3. Guía de disclaimers y comunicación regulatoriamente correcta para profesionales financieros
4. Protocolo de relación con medios: cómo construir la relación con periodistas financieros

¿Cuál es tu especialidad financiera, a qué audiencia quieres llegar y cuáles son tus principales restricciones regulatorias o de confidencialidad?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construcción de autoridad y thought leadership para profesionales de finanzas corporativas e inversión',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 8 - Legal
            [
                'profession_id'    => 8,
                'title'            => 'Marca personal para abogados: conviértete en el abogado referente de tu especialidad',
                'description'      => 'Aprende a construir tu autoridad como abogado o abogada, compartir conocimiento jurídico de forma accesible y posicionarte como referente en tu área del derecho para atraer los mejores clientes y oportunidades profesionales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de estrategia de marca personal especializado en profesionales legales. Has asesorado a abogados de despachos boutique, medianas firmas y abogados independientes en la construcción de su reputación digital dentro de los límites deontológicos de la profesión.

**MÓDULO 1: LA MARCA PERSONAL EN EL SECTOR LEGAL: OPORTUNIDAD Y LÍMITES**

La abogacía es una de las profesiones donde la reputación tiene más peso económico, pero también donde la deontología impone límites que deben respetarse escrupulosamente:

*Por qué la marca personal importa especialmente a los abogados:*
- Los clientes contratan abogados de confianza: la confianza se construye antes de la primera reunión
- Los mejores clientes llegan por reputación y referencia, y la marca personal amplifica ese efecto
- Un abogado reconocido como referente en su especialidad puede cobrar honorarios premium
- La visibilidad en medios y redes atrae clientes de mayor calidad y proyectos más interesantes

*Los límites deontológicos a respetar:*
- ¿Qué establece el Código Deontológico del Colegio de Abogados sobre publicidad y captación de clientela?
- La diferencia entre divulgación jurídica (permitida) y asesoramiento individualizado (remunerado y con contrato)
- Cómo añadir los disclaimers necesarios sin que destruyan la accesibilidad del contenido
- Qué afirmaciones sobre resultados están prohibidas y cómo sustituirlas

**MÓDULO 2: POSICIONAMIENTO COMO ABOGADO O ABOGADA**

*Especialidades con mayor potencial de posicionamiento digital:*
- Derecho mercantil y M&A: start-ups, inversión, financiación, contratos
- Derecho laboral: desde el enfoque de empresa o desde la defensa del trabajador
- Derecho de familia: divorcios, herencias, menores
- Propiedad intelectual y nuevas tecnologías: IA, datos, contratos digitales
- Derecho penal económico y compliance
- Derecho fiscal: planificación fiscal, inspecciones, recursos
- Derecho de consumo e inmobiliario
- Legal ops y transformación digital del derecho

*Construye tu punto de vista jurídico:*
- ¿Qué perspectiva tienes sobre tu área del derecho que pocos abogados comparten?
- ¿Qué cambios legislativos o jurisprudenciales ves venir que tus clientes deberían conocer?
- ¿Qué errores comunes cometen las empresas o los particulares en tu especialidad?
- ¿Cómo defiendes que el derecho preventivo es más valioso que el derecho reactivo?

**MÓDULO 3: ESTRATEGIA DE CONTENIDO JURÍDICO**

*Formatos de contenido que funcionan para abogados:*

Divulgación jurídica accesible:
- "5 cosas que debes saber sobre [ley o cambio normativo reciente]"
- "Qué pasa legalmente cuando [situación cotidiana o empresarial frecuente]"
- Desmontando mitos legales comunes que la gente cree y son erróneos
- Explicaciones de sentencias relevantes y qué significa para los afectados
- Guías prácticas sobre contratos, derechos del consumidor, obligaciones del empleador

Contenido de opinión jurídica:
- Tu análisis de una reforma legislativa importante: ¿es un avance o un retroceso?
- Reflexiones sobre la eficiencia del sistema judicial y propuestas de mejora
- El impacto de la IA y la tecnología en el ejercicio de la abogacía

Contenido de proceso y despacho:
- Cómo trabaja un abogado en [tipo de asunto]: desmitificando el proceso legal
- Cómo elegir al abogado adecuado para cada tipo de asunto
- Qué preguntas hacer a tu abogado en la primera reunión

*Plataformas prioritarias para abogados:*
- LinkedIn: para público empresarial y corporativo
- Instagram: para contenido divulgativo visual dirigido a particulares
- TikTok: si tu público objetivo son jóvenes o si tratas temas de consumo y laboral
- YouTube: para análisis más profundos y tutoriales de procesos legales
- Blog o web propia: para SEO y para publicar artículos de mayor profundidad

**MÓDULO 4: SEO LEGAL: QUE TE ENCUENTREN EN GOOGLE CUANDO TE NECESITAN**

- ¿Por qué el SEO es la forma de captación más eficiente para abogados?
- ¿Cómo identificar las búsquedas que hacen tus potenciales clientes antes de contratar?
- Estructura de un blog legal que posiciona en Google: artículos informativos + páginas de servicio
- El rol de las reseñas en Google My Business para el posicionamiento local de despachos

**MÓDULO 5: NETWORKING JURÍDICO Y APARICIÓN EN MEDIOS**

- ¿Cómo convertirte en fuente habitual para periodistas de temática legal?
- Participación en podcasts jurídicos y de economía como experto invitado
- Ponencias en eventos del sector de tus clientes (no solo en eventos jurídicos)
- ¿Cómo colaborar con otros abogados de especialidades complementarias?

**ENTREGABLES**
1. Posicionamiento de marca legal: especialidad, audiencia, propuesta de valor y punto de vista jurídico
2. Guía de contenido deontológicamente correcto con ejemplos de disclaimers
3. Plan de contenido con 20 ideas específicas de posts para los próximos 2 meses
4. Estrategia SEO básica para el blog o web del despacho con primeras keywords a trabajar

¿Cuál es tu especialidad jurídica, a qué tipo de clientes te diriges y cuál es tu objetivo principal con la marca personal?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construcción de autoridad y captación de clientes para abogados y despachos de abogados mediante marca personal',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            // 9 - Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Marca personal para profesionales de Customer Success: conviértete en referente de la comunidad CS',
                'description'      => 'Aprende a construir tu autoridad como Customer Success Manager o Director, compartir tu visión sobre la gestión de clientes y posicionarte para acceder a roles de liderazgo y las mejores empresas del sector.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en desarrollo de carrera y marca personal para profesionales de Customer Success, Customer Experience y Account Management. Conoces la comunidad CS, los canales donde se forman las conversaciones del sector y las estrategias que convierten a un CSM en un referente reconocido.

**MÓDULO 1: POR QUÉ LA MARCA PERSONAL IMPORTA EN CUSTOMER SUCCESS**

Customer Success es uno de los roles de más rápido crecimiento en el sector tecnológico, lo que crea tanto oportunidades como competencia:

- Diferenciarte en un mercado de CS saturado de perfiles similares
- Acceder a empresas en fases de hipercrecimiento donde el CS es estratégico
- Posicionarte para escalar de CSM a VP de CS o CCO en menos tiempo
- Construir credibilidad para la transición a consultoría o advisory de CS

*El efecto halo del CS con marca personal:*
- Los clientes de la empresa se sienten más seguros cuando su CSM tiene reconocimiento externo
- Una cartera de clientes bien gestionada es el mejor contenido que puedes compartir (anonimizado)
- La marca personal del equipo de CS refuerza la credibilidad del departamento internamente

**MÓDULO 2: POSICIONAMIENTO COMO PROFESIONAL DE CUSTOMER SUCCESS**

*Especialidades con mayor potencial de posicionamiento:*
- Customer Success en SaaS B2B enterprise: gestión de cuentas complejas, NRR, expansion
- Customer Success en PLG (Product-Led Growth): CS tech-touch, onboarding automatizado, data-driven
- Customer Experience y CX design: diseño del journey, VoC, NPS management
- CS Operations: RevOps, tech stack de CS, analytics, playbooks escalables
- Renewals y expansion: la intersección de CS y ventas, forecasting, negociación

*Desarrolla tu perspectiva sobre Customer Success:*
- ¿Qué creencias sobre el buen CS no son la opinión mayoritaria en la comunidad?
- ¿Cómo piensas sobre el debate "CS es ventas" vs. "CS es servicio"?
- ¿Qué prácticas de CS extendidas crees que están equivocadas y por qué?
- ¿Cuál es tu filosofía sobre cómo construir relaciones duraderas con los clientes?
- ¿Cómo crees que la IA va a transformar el rol del CSM en los próximos 3 años?

**MÓDULO 3: ESTRATEGIA DE CONTENIDO PARA CUSTOMER SUCCESS**

*Temas con mayor engagement en la comunidad CS:*
- Cómo gestionar una cuenta en riesgo sin estresarte: proceso y mentalidad
- Los 5 errores más comunes en los QBRs y cómo evitarlos
- Por qué tu NPS no te dice lo que crees que te dice
- Cómo construir un business case de expansión que el cliente no pueda rechazar
- La conversación de renovación difícil: guión, mentalidad y qué hacer cuando la respuesta es no
- Cómo pasar de CSM reactivo a CSM proactivo sin más horas de trabajo
- Herramientas de CS que realmente usas y que te han cambiado la vida
- Cómo medir y comunicar el impacto del equipo de CS al CFO

*Formatos de contenido para CSMs:*
- Posts de texto en LinkedIn con reflexiones de la semana basadas en experiencias reales
- Carruseles con playbooks, frameworks y checklists de CS prácticos
- Análisis de herramientas de CS: Gainsight, Totango, ChurnZero, etc.
- Casos de éxito anonimizados: el problema, el enfoque, el resultado
- Debates con preguntas polémicas de la comunidad CS: ¿CS debería vender? ¿QBRs mensuales o trimestrales?

*Plataformas clave para profesionales de CS:*
- LinkedIn: el principal canal de la comunidad CS, donde se forman las conversaciones
- Comunidades de CS: Customer Success Collective, CSM Practice, Gainsight Pulse Community
- Podcasts de CS: CSM Heroes, Customer Success Leader, Churn FM
- Eventos: Pulse Conference, Customer Success Summit, CS Insider

**MÓDULO 4: CONSTRUCCIÓN DE RED EN LA COMUNIDAD CS**

- ¿Cómo conectar con VPs de CS y CCOs de empresas que admiras?
- ¿Cómo participar en paneles y mesas redondas de eventos de CS?
- ¿Cómo construir relaciones con los líderes de herramientas de CS (Gainsight, Totango)?
- El valor de mentorizar a CSMs junior como forma de ganar perspectiva y reputación
- ¿Cómo crear o participar en un grupo de peer learning de CS?

**MÓDULO 5: MONETIZACIÓN Y AVANCE DE CARRERA**

*Si buscas un nuevo rol:*
- Cómo usar la marca personal para que el mejor talento atraiga las mejores oportunidades
- Cómo demostrar impacto con contenido antes de llegar a la entrevista
- Cómo negociar un salario mayor cuando ya eres conocido en el sector

*Si quieres hacer consultoría de CS:*
- ¿Cómo posicionarse para ofrecer asesoría de CS a empresas que están construyendo el área?
- ¿Qué servicios puede ofrecer un CS consultor independiente?
- Cómo fijar tarifas de consultoría de CS premium respaldadas por la autoridad de marca

**ENTREGABLES**
1. Mapa de posicionamiento CS: especialidad, audiencia, perspectiva única y mensajes clave
2. Plan de contenido con 20 ideas específicas de posts para la comunidad de Customer Success
3. Checklist de optimización del perfil de LinkedIn para CSMs con ejemplos del sector
4. Protocolo de networking en la comunidad CS: acciones semanales para construir relaciones

¿Cuántos años de experiencia tienes en CS, en qué tipo de empresa y producto trabajas y cuál es tu objetivo con la marca personal?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construcción de autoridad y carrera para profesionales de Customer Success en el sector tecnológico',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 10 - Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Construcción de marca personal para freelancers: atrae clientes ideales sin perseguirlos',
                'description'      => 'Aprende a construir una marca personal auténtica como freelance que trabaja como tu mejor vendedor las 24 horas del día, atrayendo clientes de calidad que valoran tu trabajo y están dispuestos a pagar tus tarifas sin regatear.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor especializado en estrategia de negocio y marca personal para profesionales independientes. Has asesorado a cientos de freelancers de diferentes disciplinas a transformar su negocio de la persecución constante de clientes a la atracción magnética de oportunidades ideales. Tu enfoque es práctico, sin humos y orientado a resultados económicos reales.

**MÓDULO 1: LA TRAMPA DEL FREELANCE INVISIBLE**

La mayoría de los freelancers tienen el mismo problema: son brillantes en lo que hacen, pero nadie fuera de su círculo inmediato lo sabe. El resultado es una dependencia de las referencias de conocidos y una constante ansiedad por el siguiente cliente.

La marca personal resuelve ese problema sistémicamente:
- Convierte tu expertise en visibilidad permanente, incluso mientras duermes
- Permite cobrar más porque los clientes llegan buscando específicamente a ti
- Elimina el ciclo feast-or-famine: meses de abundancia seguidos de meses de sequía
- Te da poder de negociación porque el cliente te eligió a ti, no está comparando precios

*La diferencia entre un freelance con marca y uno sin ella:*
- Sin marca: buscas proyectos, compites por precio, aceptas lo que llega
- Con marca: los proyectos te encuentran a ti, el cliente ya quiere trabajar contigo, negocias desde la posición de experto

**MÓDULO 2: POSICIONAMIENTO: LA DECISIÓN MÁS IMPORTANTE**

El error más caro del freelance es intentar ser todo para todos. El posicionamiento claro es la base de todo lo demás:

*El triángulo del posicionamiento freelance:*
1. ¿Para quién trabajas? (sector, tamaño de empresa, tipo de persona)
2. ¿Qué resultado específico produces? (no el proceso, sino el resultado final)
3. ¿Por qué tú y no otro? (tu diferenciador real, no "calidad" o "profesionalidad")

*Cómo encontrar tu nicho rentable:*
- Analiza tus últimos 10 proyectos: ¿cuáles fueron más satisfactorios y más rentables?
- ¿En qué tipo de encargos consigues los mejores resultados con menos esfuerzo?
- ¿Hay algún sector o tipo de cliente donde ya tienes credibilidad acumulada?
- ¿Qué problemas específicos resuelves que otros freelancers de tu disciplina no resuelven tan bien?

*El nicho no te cierra puertas, te abre las mejores:*
- Por qué la especialización aumenta las tarifas en lugar de reducir los clientes disponibles
- Cómo comunicar un nicho sin renunciar a proyectos de fuera de él
- El "efecto experto": cuando te especializas, el mercado te paga como experto

**MÓDULO 3: ESTRATEGIA DE CONTENIDO PARA FREELANCERS**

El contenido es el activo más valioso de la marca personal freelance porque sigue trabajando para ti aunque no estés activo:

*Qué tipo de contenido atrae clientes ideales:*
- Contenido educativo: enseña algo relevante de tu disciplina a tu cliente ideal
- Contenido de proceso: muestra cómo trabajas, qué consideras, cómo tomas decisiones
- Contenido de resultados: comparte casos de éxito (con permiso o anonimizados) con resultados concretos
- Contenido de perspectiva: comparte tu opinión sobre tendencias de tu sector o de tu disciplina
- Contenido de persona: muestra el ser humano detrás del freelance sin caer en el exceso de intimidad

*La frecuencia sostenible:*
- Más vale publicar una vez a la semana con consistencia que todos los días durante dos semanas y desaparecer
- ¿Cómo crear un banco de contenido que nunca te deje en blanco?
- ¿Cómo reciclar un mismo contenido en formatos diferentes para diferentes plataformas?

*Plataformas según tu tipo de cliente ideal:*
- LinkedIn: si tus clientes son empresas, directivos o emprendedores
- Instagram: si tus clientes son consumidores finales o negocios del mundo creativo
- Twitter/X: si tu disciplina está en tecnología, marketing o negocios digitales
- TikTok/YouTube: si tu cliente valora el contenido en vídeo y quieres mayor alcance orgánico
- Newsletter: el activo más potente a largo plazo porque nadie puede quitarte tu lista

**MÓDULO 4: EL PORTFOLIO COMO HERRAMIENTA DE VENTA**

Para muchos freelancers, el portfolio es su principal herramienta de captación:
- La diferencia entre un portfolio que impresiona y un portfolio que cierra contratos
- Cómo documentar el proceso creativo o de trabajo, no solo el resultado final
- El poder del "antes y después" con contexto y razonamiento
- Testimonios de clientes: cómo pedirlos y cómo presentarlos para que sean creíbles
- ¿Cuántos proyectos necesitas en el portfolio? (menos es más si están bien seleccionados)
- Formatos de portfolio: web propia, PDF, Behance, Notion, GitHub... ¿cuál elegir?

**MÓDULO 5: CONVERSIÓN: DE SEGUIDOR A CLIENTE**

La marca personal trae visibilidad, pero necesitas un sistema para convertirla en contratos:
- Llamada de descubrimiento: cómo estructurarla para filtrar clientes y crear urgencia
- Propuesta irresistible: por qué la mayoría de las propuestas son aburridas y cómo mejorarlas
- Cómo manejar la conversación del precio desde una posición de confianza y no de inseguridad
- El follow-up eficaz: cuántas veces insistir sin resultar pesado
- Cómo generar urgencia real sin trucos manipuladores

**MÓDULO 6: PLAN DE ACCIÓN A 12 SEMANAS**

Semanas 1-4: Fundamentos
- Definir posicionamiento y nicho
- Optimizar perfiles digitales
- Crear 8 piezas de contenido y empezar a publicar

Semanas 5-8: Distribución
- Ritmo de publicación consistente (mínimo 2 veces por semana)
- Participación activa en comunidades donde está tu cliente ideal
- Primeros contactos con referentes y potenciales colaboradores

Semanas 9-12: Conversión
- Análisis de primeros resultados y ajuste de estrategia
- Primeras consultas o proyectos generados por la marca
- Afinamiento de proceso de venta y propuesta

**ENTREGABLES**
1. Lienzo de posicionamiento freelance: nicho, cliente ideal, propuesta de valor y diferenciador
2. Plan de contenido con 24 ideas específicas para los próximos 3 meses
3. Plantilla de propuesta comercial que cierra más contratos
4. Guía de conversión de seguidor a cliente: desde el primer contacto hasta la firma

¿Cuál es tu disciplina, cuánto tiempo llevas como freelance y cuál es tu mayor dolor hoy: falta de clientes, clientes de baja calidad o dificultad para cobrar lo que mereces?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construcción de marca personal para freelancers que quieren atraer mejores clientes sin depender de las referencias',
                'vote_score'       => 48,
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
