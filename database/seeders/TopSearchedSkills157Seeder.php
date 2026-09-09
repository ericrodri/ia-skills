<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills157Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'CMO como marca personal',
                'description'       => 'Construye tu presencia pública como director de marketing: conferencias, artículos de opinión y la visibilidad que atrae talento, mandatos y oportunidades de board.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un estratega de marca personal especializado en ejecutivos C-suite del ámbito del marketing. Voy a darte información sobre mi perfil como CMO y necesito que me ayudes a construir una estrategia completa de marca personal que me posicione como referente en mi sector.

Mi perfil:
- Cargo actual: [tu cargo y empresa]
- Años de experiencia: [años]
- Sectores en los que has trabajado: [sectores]
- Logros más destacados: [describe 2-3 logros medibles]
- Temáticas en las que tienes opinión propia: [lista tus áreas de expertise]
- Objetivo de la marca personal: [visibilidad sectorial, board, advisory, talento...]

Con esta información, desarrolla para mí:

**1. Declaración de posicionamiento**
Escribe una propuesta de valor en dos párrafos que explique quién soy, qué punto de vista único tengo sobre el marketing y qué problemas resuelvo que otros CMOs no resuelven de la misma manera. Esta declaración debe poder usarse como bio en LinkedIn, como presentación en conferencias y como punto de partida para cualquier pieza de contenido.

**2. Los tres pilares temáticos de tu marca**
Define los tres grandes temas sobre los que vas a tener voz pública. Para cada pilar:
- Nombre del pilar y por qué es relevante ahora mismo en el mercado
- Tu punto de vista diferencial (lo que crees que la mayoría hace mal o no ve)
- Tres subtemas concretos que puedes desarrollar en artículos, ponencias o posts
- Una frase que resume tu postura en ese pilar

**3. Estrategia de contenido en LinkedIn**
Diseña un plan de publicación para los próximos 90 días:
- Frecuencia recomendada y tipos de publicaciones (reflexión, caso de estudio, opinión, datos)
- Los cinco primeros posts que debes publicar, con titular y argumento central de cada uno
- Cómo usar LinkedIn Newsletter para construir audiencia recurrente
- Los errores que cometen los CMOs en LinkedIn y cómo evitarlos

**4. Estrategia de conferencias y eventos**
- Cómo identificar los eventos donde debes aparecer (criterios de selección)
- Cómo escribir una propuesta de ponencia que sea aceptada
- La estructura de una charla que construye autoridad y no es un pitch de ventas encubierto
- Cómo maximizar el impacto de cada aparición pública en redes y prensa

**5. Artículos de opinión y medios**
- En qué medios del sector del marketing deberías publicar y por qué
- Cómo escribir un artículo de opinión que genere debate y visibilidad
- La diferencia entre un artículo que construye marca y uno que pasa desapercibido
- Cómo relacionarte con periodistas y editores del sector

**6. La conexión entre marca personal y oportunidades de board**
- Qué perfil de CMO buscan los consejos de administración y comités de dirección
- Cómo hacer que tu visibilidad pública derive en conversaciones de advisory y board
- Los errores de posicionamiento que alejan a los CMOs de las oportunidades de gobierno corporativo
- Qué debes comunicar y qué debes evitar si quieres ser percibido como candidato a board

**7. Métricas de tu marca personal**
Define los KPIs que usarás para saber si tu estrategia está funcionando:
- Métricas cuantitativas (seguidores, alcance, invitaciones recibidas, menciones en prensa)
- Métricas cualitativas (calidad de las conversaciones, perfil de quién te contacta)
- Revisión trimestral: qué analizar y cómo ajustar el rumbo

**8. Plan de acción primeras 4 semanas**
Lista las acciones concretas que debo ejecutar en las próximas cuatro semanas para poner en marcha esta estrategia, ordenadas por impacto y esfuerzo.

Trabaja con un estilo directo y orientado a la acción. Evita los tópicos del personal branding genérico y aplica el conocimiento específico del mundo del marketing de alto nivel.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Estrategia de marca personal para directores de marketing que quieren construir presencia pública y atraer oportunidades de alto nivel.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Developer brand en GitHub y comunidades',
                'description'       => 'Construye presencia técnica como developer: open source, contribuciones y la visibilidad que genera el efecto compuesto de años de trabajo visible.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en crecimiento de carrera técnica y marca personal para developers. Quiero construir una presencia pública como desarrollador que me abra oportunidades sin tener que buscarlas activamente. Dame una estrategia completa y accionable.

Mi perfil técnico:
- Stack principal: [tus tecnologías]
- Años de experiencia: [años]
- Tipo de trabajo actual: [empresa producto, agencia, freelance, open source]
- Proyectos propios o contribuciones abiertas: [si las hay]
- Objetivo de la marca: [nuevas oportunidades laborales, freelance, hablar en conferencias, reconocimiento técnico]

Con esta base, desarrolla:

**1. Diagnóstico de visibilidad técnica actual**
Analiza los canales donde los developers construyen reputación: GitHub, Twitter/X, LinkedIn, Stack Overflow, DEV.to, Hacker News, Reddit. Explica qué señales miran los recruiters, CTOs y otros developers cuando evalúan el perfil técnico de alguien, y qué indica que alguien es un developer de referencia en su stack.

**2. Estrategia de GitHub**
- Cómo optimizar el perfil para que comunique expertise antes de ver el código
- Qué tipo de proyectos abrir al público y con qué criterio de selección
- Cómo documentar los repositorios para que sean atractivos y comprensibles
- La estrategia de contribuciones a proyectos open source relevantes: cómo elegir dónde contribuir, cómo hacer contribuciones que sean aceptadas y cómo hacer crecer el reconocimiento en esas comunidades
- El README como carta de presentación técnica

**3. Contenido técnico de alto impacto**
- Los formatos que más visibilidad generan para un developer (posts, threads, tutoriales, comparativas, postmortems)
- Cómo escribir sobre tecnología para que te lean developers de tu nivel o por encima, no solo principiantes
- La estrategia de publicación: dónde, cuándo y con qué frecuencia
- Cómo convertir el trabajo del día a día en contenido técnico sin revelar información confidencial

**4. Comunidades técnicas estratégicas**
- Qué comunidades online y eventos locales merecen tu tiempo y cuáles son ruido
- Cómo participar en comunidades de manera que construya reputación real y no solo seguidores
- El papel de las conferencias técnicas: cómo enviar una propuesta de charla y cómo construir relaciones en los eventos
- Meetups, guilds, Slack communities: cuál es la inversión de tiempo razonable y qué esperar a cambio

**5. El efecto compuesto en la visibilidad técnica**
Explica cómo funciona el crecimiento de reputación técnica en el tiempo: los primeros seis meses, el primer año, y cómo los nodos de visibilidad se refuerzan entre sí. ¿Qué pasa cuando un proyecto tuyo es citado en un newsletter relevante? ¿Cómo la contribución a un proyecto conocido te conecta con su comunidad? Describe el flywheel de la marca técnica.

**6. Personal site y portfolio técnico**
- Si necesito un portfolio propio o GitHub es suficiente según mi objetivo
- Qué debe incluir y qué debe omitir un portfolio técnico efectivo
- Cómo presentar proyectos para que el lector entienda el problema, la decisión técnica y el impacto

**7. LinkedIn para developers**
- La visión crítica de LinkedIn desde la perspectiva técnica: cuándo vale la pena y cuándo es tiempo perdido
- Cómo optimizar el perfil para ser encontrado por los roles que quieres
- Qué publicar y qué no publicar en LinkedIn si eres developer

**8. Roadmap de 12 meses**
Diseña un plan mensual con las acciones concretas que construyen marca técnica progresivamente, empezando por las que generan señal más rápido y terminando con las que dan frutos a largo plazo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Estrategia de visibilidad técnica para developers que quieren ser reconocidos en su comunidad y atraer oportunidades sin buscarlas.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseñador de referencia en un nicho',
                'description'       => 'Especialízate en un tipo de diseño y conviértete en la primera opción: los nichos con mayor demanda y cómo construir la reputación que lleva oportunidades sin buscarlas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de posicionamiento para diseñadores creativos y de producto. Quiero dejar de competir en generalista y convertirme en el diseñador de referencia en un nicho específico. Ayúdame a definir el nicho, construir la reputación y estructurar el sistema que hace que las oportunidades lleguen solas.

Mi perfil:
- Tipo de diseño actual: [UX/UI, gráfico, branding, motion, producto, ilustración...]
- Sectores en los que has trabajado: [lista]
- Proyectos de los que estás más orgulloso: [describe brevemente]
- Tipo de trabajo que más disfrutas: [describe]
- Objetivo: [más clientes, mejores proyectos, cambio de carrera, reconocimiento sectorial]

Desarrolla:

**1. Mapa de nichos del diseño con alta demanda**
Lista los nichos de diseño que tienen demanda real y creciente en el mercado actual: diseño para SaaS, diseño para fintech, branding para marcas de lujo, ilustración editorial, diseño de sistemas, UX research, diseño para e-commerce, motion design para redes sociales, etc. Para cada uno explica el nivel de competencia, el rango de tarifas y el perfil de cliente típico.

**2. Cómo elegir tu nicho**
Dame un framework de decisión para elegir el nicho adecuado teniendo en cuenta: qué se me da bien, qué disfruto, dónde está la demanda y dónde tengo ventaja sobre otros. Incluye las preguntas que debo hacerme y cómo ponderar cada factor.

**3. Propuesta de valor del especialista**
Una vez elegido el nicho, escribe una propuesta de valor en primera persona que explique:
- A quién ayudo exactamente
- Qué problema específico resuelvo
- Por qué soy mejor opción que un diseñador generalista para este problema
- Cuál es mi proceso o metodología diferencial

**4. Portfolio enfocado en el nicho**
- Cómo reenfocar un portfolio generalista hacia el nicho elegido aunque no tenga proyectos previos en ese espacio exacto
- Los proyectos de práctica o conceptuales que puedo hacer para poblar el portfolio
- La narrativa que debe tener cada proyecto: problema, proceso, solución, impacto
- Dónde publicar el portfolio: Behance, Dribbble, web propia, caso de uso de cada uno

**5. Sistema de contenido para diseñadores**
- Los formatos que mejor funcionan para diseñadores en redes: proceso en tiempo real, breakdowns de decisiones de diseño, comparativas antes/después, críticas de diseño conocido
- Las plataformas donde los diseñadores de nicho construyen más audiencia relevante
- Cómo hablar de diseño para que te lean clientes potenciales, no solo otros diseñadores
- Frecuencia y consistencia: cuánto tiempo debo invertir y qué resultados esperar

**6. Estrategia de relaciones y comunidad**
- Qué comunidades de diseño merecen tiempo de inversión según el nicho elegido
- Cómo construir relaciones con otros diseñadores que sean complementarios, no competencia
- El papel de los eventos y conferencias de diseño en la construcción de reputación
- Cómo gestionar las colaboraciones que construyen marca y cuáles evitar

**7. La reputación que genera demanda entrante**
Explica los mecanismos concretos por los que la visibilidad en el nicho se convierte en clientes que llegan solos: el efecto boca a boca en sectores verticales, el SEO de portfolio, las menciones en newsletters del sector y cómo cada aparición pública se convierte en punto de entrada para nuevos proyectos.

**8. Plan de acción para los próximos 90 días**
Las acciones semanales que necesito ejecutar para pasar de diseñador generalista a referente en el nicho en tres meses, con indicadores de que estoy en el camino correcto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Estrategia de especialización y posicionamiento para diseñadores que quieren convertirse en referentes en un nicho con alta demanda.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'El vendedor como asesor de confianza',
                'description'       => 'Posiciónate como el vendedor al que tus clientes llaman antes de tomar decisiones, no solo cuando quieren comprar. La estrategia para construir esa relación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en ventas consultivas y construcción de relaciones comerciales de largo plazo. Quiero transformar mi perfil de vendedor transaccional en asesor de confianza para mis clientes: alguien a quien llaman cuando tienen un problema, no solo cuando van a comprar. Ayúdame a diseñar la estrategia completa.

Mi perfil:
- Sector y tipo de producto/servicio que vendo: [describe]
- Perfil típico de mis clientes: [empresa, cargo, sector]
- Duración media del ciclo de venta: [semanas/meses]
- Número de cuentas activas que gestiono: [número]
- Punto de partida actual: [cómo me relaciono hoy con mis clientes]

Desarrolla:

**1. La diferencia entre vendedor y asesor de confianza**
Explica de forma concreta y con ejemplos del sector comercial en qué se diferencia el comportamiento de un vendedor transaccional del de un asesor de confianza: cómo se comunican, con qué frecuencia, sobre qué temas, y cuál es el valor diferencial que aporta el asesor más allá del producto que vende.

**2. El mapa de confianza**
Define los componentes de la confianza en una relación comercial (competencia percibida, fiabilidad, honestidad, orientación al cliente vs. orientación al propio beneficio) y cómo construir y demostrar cada uno de ellos de manera sistemática en el contexto de mis cuentas.

**3. El programa de contacto con clientes**
Diseña un plan de touchpoints para mis cuentas que no sean llamadas de seguimiento ni presión comercial:
- La cadencia de contactos no transaccionales: cuándo, con qué excusa y a través de qué canal
- Qué información y contenido puedo compartir con mis clientes que sea genuinamente útil para ellos
- Cómo usar la información del sector de mi cliente para generar conversaciones de valor
- La revisión de negocio periódica: cómo hacer una QBR que sea una sesión de estrategia y no un informe de ventas

**4. Cómo posicionarse como experto en el negocio del cliente**
- Qué debo aprender del negocio de mi cliente para poder hablar de su mundo, no solo del mío
- Las preguntas que hacen los asesores de confianza y cómo formularlas
- Cómo implicarme en los problemas de mi cliente que van más allá del producto que vendo
- Los límites: cuándo ayudar y cuándo derivar a otro experto porque no es mi terreno

**5. La marca personal del vendedor asesor**
- Qué presencia pública (LinkedIn, contenido, eventos) refuerza la imagen de experto asesor
- Cómo comunicar conocimiento del sector sin revelar información de clientes ni parecer que hago marketing disfrazado de consejo
- El papel de las referencias y los testimonios en la construcción de autoridad comercial

**6. Gestión de las situaciones difíciles con integridad**
- Qué hacer cuando tu producto no es la mejor opción para el cliente
- Cómo manejar la presión de cuota sin comprometer la relación de confianza
- Qué hacer cuando un cliente toma una decisión que crees que es equivocada
- Cómo recuperar la confianza después de un problema de producto o servicio

**7. Métricas del asesor de confianza**
Define los indicadores que me dicen si estoy construyendo relaciones de asesor y no solo de vendedor: NPS, referencias recibidas, conversaciones no comerciales iniciadas por el cliente, tiempo promedio de relación con la cuenta.

**8. Transformación en 6 meses**
El plan de cambio progresivo para las próximas 26 semanas: qué dejo de hacer, qué empiezo a hacer y cómo mido si la transformación está ocurriendo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Transformar el perfil comercial de vendedor transaccional a asesor de confianza al que los clientes llaman antes de tomar decisiones importantes.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'PM visible',
                'description'       => 'El product manager que publica sus frameworks, habla en conferencias y construye audiencia: el efecto en la carrera y las oportunidades de los PMs con marca personal.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en desarrollo de carrera para product managers y en estrategias de visibilidad profesional en el mundo del producto digital. Quiero construir una presencia pública como PM que me posicione como referente y genere oportunidades de carrera que no habría encontrado de otra manera.

Mi perfil:
- Años de experiencia en producto: [años]
- Tipo de empresa actual: [startup, scale-up, corporación, consultora]
- Dominio de producto: [B2B SaaS, marketplace, consumer app, fintech...]
- Frameworks o metodologías en los que tienes criterio propio: [lista]
- Objetivo de la visibilidad: [siguiente rol, hablar en conferencias, advisory, inversor, consultoría propia]

Desarrolla:

**1. Por qué los PMs con marca personal tienen ventaja de carrera**
Explica de forma concreta y con datos el impacto que tiene la visibilidad pública en la carrera de un PM: acceso a mejores roles, salarios más altos, invitaciones a advisory, acceso a redes de founders. Describe el mecanismo por el que la marca personal de un PM genera oportunidades y no solo reconocimiento vanidoso.

**2. Tu punto de vista único sobre el producto**
Para construir marca como PM necesitas un punto de vista diferencial, no solo repetir lo que ya dicen los grandes referentes. Ayúdame a encontrar el mío:
- Qué pienso sobre el discovery que va contra la corriente mayoritaria
- Qué creo sobre la ejecución que la mayoría de PMs no aplica bien
- Qué errores veo repetirse en los equipos de producto que otros no nombran
- Mi crítica constructiva a algún framework o metodología muy extendida

**3. Frameworks propios: cómo crearlos y publicarlos**
- Qué convierte un framework en algo compartible y citado vs. algo que nadie propaga
- Cómo tomar las ideas que ya tengo y estructurarlas en un framework publicable
- Los formatos de publicación de frameworks para PMs: post de LinkedIn, artículo largo, newsletter, thread, charla
- Cómo construir sobre los frameworks de otros sin plagiar y con valor añadido real

**4. Newsletter de producto**
- El caso para tener newsletter propia como PM: por qué LinkedIn no es suficiente
- Cómo elegir el tema y la audiencia de la newsletter
- La cadencia, el formato y las secciones que hacen que una newsletter de PM sea leída y no borrada
- Cómo crecer la lista de suscriptores de 0 a 1.000 suscriptores relevantes

**5. Conferencias y eventos de producto**
- Cuáles son los eventos de producto donde un PM en crecimiento debe aparecer (ProductCon, Product School, eventos locales, Lean Startup...)
- Cómo escribir una propuesta de charla que sea aceptada por comités de eventos de producto
- La estructura de una charla que genera impacto, conversaciones y seguidores: qué incluir y qué evitar
- Cómo monetizar la visibilidad en conferencias: advisory, formación, consultoría

**6. Comunidad y relaciones en el mundo del producto**
- Las comunidades de producto que merecen tiempo de inversión vs. las que son ruido
- Cómo construir relaciones con otros PMs, founders y executives que se conviertan en oportunidades
- El papel de los mentoring reversibles: cómo aprender y dar valor al mismo tiempo

**7. El riesgo de la visibilidad y cómo gestionarlo**
- Qué compartir y qué no compartir de tu trabajo actual (confidencialidad, política de empresa)
- Cómo tener opiniones fuertes sin dañar tu reputación ni la de tu empresa
- Cómo responder a las críticas públicas de forma que refuerce tu autoridad

**8. Plan de 12 meses para el PM visible**
Las acciones mes a mes para construir marca como PM desde cero o desde poca visibilidad, con hitos concretos para saber si estás progresando.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Estrategia de visibilidad pública para product managers que quieren construir marca personal y multiplicar sus oportunidades de carrera.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'CHRO como líder de opinión',
                'description'       => 'El director de personas que tiene voz pública en cultura, talento y liderazgo: cómo construir esa presencia y el impacto en la capacidad de atraer talento.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en comunicación ejecutiva y marca personal para líderes de recursos humanos. Soy CHRO o director de personas y quiero construir una voz pública en temas de talento, cultura y liderazgo que refuerce la reputación de la empresa como empleador y abra oportunidades profesionales para mí.

Mi contexto:
- Empresa donde trabajo: [tipo, tamaño, sector]
- Años en posiciones de liderazgo de RRHH: [años]
- Temas en los que tengo criterio propio: [cultura, talento, diversidad, desarrollo, liderazgo...]
- Objetivo principal: [employer branding, visibilidad personal, advisory, siguiente rol]

Desarrolla:

**1. El CHRO visible como ventaja competitiva de employer branding**
Explica de forma concreta cómo la presencia pública del director de personas impacta en la capacidad de la empresa de atraer talento: el mecanismo por el que el candidato que ve al CHRO hablar en una conferencia o publicar en LinkedIn actualiza su percepción de la empresa. Incluye ejemplos de CHROs que han construido marca y cómo ha impactado en sus organizaciones.

**2. Los temas que generan autoridad para un CHRO**
Define los dos o tres temas sobre los que un CHRO debe tener voz pública para ser percibido como referente, no como activista de departamento. Incluye:
- Temas con alta demanda de contenido en el mundo empresarial
- Temas donde el CHRO tiene credibilidad única que otros ejecutivos no tienen
- Temas que están en debate y donde tener una posición clara genera visibilidad
- Los temas que debe evitar por riesgo reputacional o político

**3. Formatos de contenido para el CHRO**
- LinkedIn: qué publicar, con qué frecuencia y en qué tono para que suene a ejecutivo con criterio y no a departamento de RRHH comunicando
- Artículos de opinión: en qué medios publicar (Harvard Business Review, MIT Sloan, medios locales del sector, blogs especializados en talento)
- Podcast: si tiene sentido crear uno propio o aparecer como invitado, y cómo maximizar el impacto de cada aparición
- Conferencias: Unleash, HR Tech, Workday Rising, eventos locales de gestión de talento

**4. La voz del CHRO en momentos de crisis**
- Qué posición pública tomar en debates sobre despidos masivos, vuelta a la oficina, IA y el futuro del trabajo
- Cómo hablar de temas controvertidos sin comprometer a la empresa y sin perder credibilidad por no tener opinión
- La diferencia entre tener una voz pública y convertirse en portavoz de una causa que no te corresponde

**5. Relación entre marca personal del CHRO y employer brand de la empresa**
- Cómo alinear la voz del CHRO con la propuesta de valor de la empresa como empleador
- Qué pasa cuando la marca personal del CHRO supera en visibilidad a la de la empresa: cómo gestionarlo
- El acuerdo implícito con el CEO: hasta dónde llega la autonomía de comunicación del CHRO

**6. Red de relaciones estratégicas para el CHRO**
- Comunidades de CHROs y VP de People donde invertir tiempo
- Cómo relacionarse con inversores, headhunters y boards que valoran el talento como factor estratégico
- El papel de las relaciones con otros CHROs: intercambio de prácticas, benchmarking y referenciación

**7. Métricas de impacto de la marca personal del CHRO**
Define indicadores para saber si la estrategia está funcionando: aumento en la calidad de candidatos inbound, menciones en medios del sector, invitaciones a ponencias, conversaciones de advisory y board.

**8. Plan de arranque en 60 días**
Las acciones concretas para los primeros dos meses: qué publicar, dónde aparecer y con quién relacionarse para construir el momentum inicial.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Estrategia de liderazgo de opinión para directores de RRHH que quieren construir voz pública en talento y cultura y mejorar el employer branding de su empresa.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'CFO como comunicador',
                'description'       => 'El director financiero que traduce los números al lenguaje del negocio en público: los foros donde los CFOs construyen reputación y las oportunidades que genera.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un asesor de comunicación ejecutiva especializado en directores financieros y CFOs. Quiero dejar de ser el CFO silencioso que solo habla internamente y construir una presencia pública que posicione mi criterio financiero como activo estratégico, tanto para la empresa como para mi carrera.

Mi perfil:
- Tipo de empresa: [cotizada, privada, startup en crecimiento, PE-backed, familiar]
- Sector: [industria, tecnología, servicios financieros...]
- Años como CFO o en posiciones financieras senior: [años]
- Temas donde tengo criterio propio: [capital allocation, M&A, gestión del riesgo, investor relations, sostenibilidad financiera...]
- Objetivo: [visibilidad sectorial, board de otra empresa, advisory, siguiente rol]

Desarrolla:

**1. El CFO visible: por qué importa más de lo que parece**
Explica el impacto de la visibilidad pública de un CFO en la empresa: acceso a capital, confianza de inversores, atracción de talento financiero senior, reputación en operaciones de M&A. Describe también el impacto en la carrera personal del CFO: cómo la visibilidad genera mandatos de board, advisory y oportunidades de paso a CEO.

**2. Los temas donde el CFO tiene voz única**
Define los tres temas sobre los que un CFO tiene autoridad que ningún otro ejecutivo tiene y que generan interés en el mercado:
- La asignación de capital como decisión estratégica
- La relación entre la narrativa financiera y el valor de la empresa
- El riesgo como factor de ventaja competitiva
- La sostenibilidad financiera más allá del ESG como moda
Para cada tema, define tu punto de vista diferencial y las preguntas que podrías responder en público que otros CFOs no responden.

**3. Los foros donde los CFOs construyen reputación**
- Eventos financieros de referencia: CFO Summit, Financial Times CFO Forum, eventos de bancos de inversión, roadshows de inversores
- Publicaciones especializadas: en cuáles publicar y sobre qué temas (CFO Magazine, Financial Times, Harvard Business Review, publicaciones del sector)
- Podcasts de finanzas corporativas y gestión: como invitado vs. crear el propio
- Asociaciones y clubs de CFOs: cuáles tienen mayor impacto en red y en reputación

**4. Cómo hablar de finanzas para audiencias no financieras**
El mayor error de los CFOs en comunicación pública es hablar para otros CFOs. Desarrolla:
- Las reglas para traducir conceptos financieros complejos a lenguaje de negocio
- Cómo contar la historia financiera de la empresa de manera que sea comprensible e inspiradora para empleados, prensa y mercado
- Los errores de comunicación típicos de los CFOs: demasiado detalle técnico, exceso de cautela, lenguaje regulatorio

**5. Investor relations y comunicación de mercado**
- El papel del CFO en la narrativa con inversores más allá de los earnings calls
- Cómo gestionar la comunicación en momentos de turbulencia financiera: downgrade, profit warning, cambio de guidance
- La relación entre la visibilidad del CFO y la percepción del mercado sobre la calidad de la gestión

**6. LinkedIn y presencia digital para CFOs**
- Qué deben y no deben publicar los CFOs en LinkedIn teniendo en cuenta las implicaciones regulatorias y de mercado
- Cómo gestionar la diferencia entre lo que puedes decir públicamente y lo que sabe el mercado
- Los tipos de contenido que generan autoridad financiera sin comprometer la posición de la empresa

**7. La transición CFO a board**
- Cómo la visibilidad pública facilita el acceso a puestos de consejero independiente
- Qué perfil de CFO buscan los consejos: los atributos más valorados más allá de la experiencia técnica
- El networking específico para acceder a oportunidades de board

**8. Plan de comunicación para el próximo año**
Las iniciativas concretas que el CFO debe poner en marcha en los próximos 12 meses para construir reputación pública como líder financiero con criterio estratégico.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Estrategia de visibilidad pública para CFOs que quieren construir reputación como comunicadores financieros y abrir oportunidades de board y advisory.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Abogado de referencia',
                'description'       => 'El abogado que los clientes buscan porque es el experto visible en su especialidad: publicaciones, conferencias y los canales que construyen autoridad legal.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de desarrollo de negocio y marca personal para abogados y despachos de abogados. Quiero construir una reputación como abogado de referencia en mi especialidad para que los clientes me busquen a mí cuando necesiten un experto en mi área de práctica.

Mi perfil:
- Área de práctica: [mercantil, laboral, fiscal, tecnología, M&A, penal económico, propiedad intelectual...]
- Tipo de organización: [despacho propio, firma internacional, firma boutique, in-house]
- Años de ejercicio: [años]
- Tipo de cliente que atiendo: [empresas, particulares, startups, multinacionales, fondos...]
- Objetivo: [nuevos clientes, mejor perfil de cliente, visibilidad sectorial, reconocimiento en rankings legales]

Desarrolla:

**1. Cómo se construye reputación en el mundo legal**
Explica los mecanismos específicos por los que un abogado se convierte en referencia en su especialidad: la diferencia entre visibilidad técnica (entre pares) y visibilidad de cliente (entre los que contratan servicios legales). Los rankings legales (Chambers, Legal 500, Best Lawyers), las publicaciones técnicas y los eventos del sector como señales de autoridad.

**2. El posicionamiento del abogado especialista**
- La ventaja de la especialización frente al perfil generalista en términos de reputación y tarifa
- Cómo definir el nicho dentro del área de práctica para ser el primero en algo específico
- La propuesta de valor del abogado especialista: qué comunica y qué promete que el generalista no puede hacer
- Cómo gestionar el conflicto entre la especialización y la necesidad de diversidad de ingresos en las primeras etapas

**3. Publicaciones y thought leadership jurídico**
- Dónde publicar para construir autoridad: revistas jurídicas especializadas, blogs legales de referencia, publicaciones de colegios de abogados, medios generalistas de economía y empresa
- Cómo escribir un artículo jurídico que sea leído por clientes potenciales, no solo por otros abogados
- La diferencia entre un artículo técnico de revista jurídica y un análisis de opinión para medios de negocio
- Las alertas y actualizaciones legales como herramienta de contacto con clientes existentes

**4. Presencia en conferencias y foros legales**
- Los eventos donde los abogados construyen reputación sectorial: bar associations, foros de práctica, jornadas sectoriales, congresos de la industria donde son clientes tuyos
- Cómo posicionarte como ponente: la propuesta de presentación que aceptan los comités de conferencias jurídicas
- La diferencia entre hablar en eventos de abogados (visibilidad entre pares) y hablar en eventos de empresa (visibilidad de cliente)

**5. LinkedIn y comunicación digital para abogados**
- Qué puede y qué no puede publicar un abogado en redes sociales: las implicaciones deontológicas de la comunicación legal
- Los tipos de contenido que generan autoridad legal sin comprometer el secreto profesional ni incumplir las normas de publicidad del Colegio
- Cómo posicionarse en LinkedIn para que los responsables legales de empresa te encuentren cuando buscan un experto

**6. Estrategia de relaciones y red de referentes**
- El papel de las referencias en la captación de clientes legales: cómo construir y mantener una red de referenciadores (asesores financieros, consultores, otros abogados de áreas complementarias)
- Cómo relacionarse con los departamentos jurídicos internos que deciden a qué despacho externo encargar los asuntos
- La relación con la prensa jurídica: cómo convertirse en fuente habitual de los periodistas que cubren el área legal

**7. Rankings legales: cómo aparecer y cómo subir**
- El proceso de nominación y evaluación de Chambers, Legal 500 y los principales rankings del sector
- Qué valoran los analistas y cómo preparar la submissión para maximizar la probabilidad de inclusión
- Las referencias de cliente en los rankings: cómo pedirlas y qué deben decir

**8. Plan de visibilidad para los próximos 18 meses**
Las iniciativas concretas, con calendario y responsables, que un abogado debe poner en marcha para construir su reputación como referente en su especialidad en el próximo año y medio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Estrategia de posicionamiento y construcción de autoridad para abogados que quieren ser la referencia visible en su especialidad y atraer los mejores clientes.',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Liderazgo de opinión en customer success',
                'description'       => 'El VP de CS que publica sus aprendizajes, habla en Pulse y construye la autoridad que atrae los mejores proyectos y el mejor talento.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en marca personal para líderes de customer success y en el ecosistema de la comunidad CS global. Quiero construir presencia pública como líder de CS que me posicione como referente en la disciplina, atraiga oportunidades de carrera de alto nivel y me conecte con la comunidad global de CS.

Mi perfil:
- Cargo actual: [VP of CS, Head of CS, Director of CS, CSM Lead...]
- Tipo de empresa: [SaaS B2B, plataforma, servicios digitales]
- Años en customer success: [años]
- Tamaño del equipo que lidero: [personas]
- Especialización: [enterprise CS, SMB CS, tech-touch, digital CS, churn reduction...]
- Objetivo: [siguiente rol, advisory, consultoría propia, reconocimiento en la comunidad]

Desarrolla:

**1. La comunidad global de customer success y sus canales de influencia**
Mapea el ecosistema donde se construye reputación en CS: Gainsight Pulse (la conferencia más importante), Customer Success Network, Success League, CS colectivos en Slack y Discord, CS podcasts (Churn FM, The Customer Success Podcast, CS Insider), publicaciones (Gainsight blog, ChurnZero, CustomerSuccessBox) y los newsletters de referencia. Explica cuál es el peso de cada uno en la construcción de autoridad.

**2. Tu punto de vista diferencial sobre el customer success**
Para construir marca en CS necesitas un ángulo único. Ayúdame a encontrar el mío:
- Qué crees que la mayoría de los equipos de CS hace mal
- Qué métricas crees que se están midiendo de forma incorrecta en CS
- Qué cambiaría en el modelo de CSM estándar si pudieras
- Tu visión sobre el futuro del CS con IA y la automatización de las interacciones

**3. Gainsight Pulse y conferencias de CS**
- Cómo enviar una propuesta de ponencia para Pulse y otros eventos de CS: qué valoran los comités y qué formato de charla tiene más posibilidades de ser aceptado
- Los temas que generan más interés en las conferencias de CS: churn, expansión, product adoption, AI in CS, CS operations
- Cómo maximizar el impacto de una aparición en conferencia: antes, durante y después del evento
- Los eventos de CS en Europa y España: cuáles existen y cuál es su peso en la comunidad

**4. Contenido de CS que construye autoridad**
- Los formatos que mejor funcionan para líderes de CS: frameworks propios, benchmarks, case studies anónimos, postmortems de churns, modelos de segmentación
- LinkedIn para líderes de CS: qué publicar, con qué frecuencia y cómo conseguir que tus posts lleguen a la audiencia correcta (VP de producto, founders, otros líderes de CS)
- Newsletter de CS: por qué tiene sentido y cómo construir una audiencia de 1.000 suscriptores relevantes
- Gainsight Community y los foros especializados: cómo participar para construir reputación de experto

**5. Advisory y consultoría como evolución de carrera**
- El perfil del advisor de CS que buscan las startups SaaS: qué aporta y qué se espera de él
- Cómo pasar de VP de CS a consultor independiente o fractional CSO
- La tarificación de los servicios de advisory en CS: rangos de mercado y modelo de compensación (cash, equity, híbrido)
- Cómo construir la red de founders y VCs que derivan proyectos de advisory

**6. La relación entre marca personal del líder de CS y atracción de talento**
- Cómo la visibilidad del líder de CS impacta en la capacidad de contratar los mejores CSMs
- Los mejores CSMs del mercado eligen a sus líderes: cómo hacer que tu perfil sea atractivo para el talento de CS senior
- La cultura del equipo de CS como parte de la marca personal del líder

**7. Métricas de impacto de tu visibilidad en CS**
Define los indicadores que te dicen si tu estrategia de marca personal en CS está funcionando: inbound de oportunidades laborales, invitaciones a hablar, advisory requests recibidos, menciones en la comunidad, crecimiento de seguidores en LinkedIn y newsletter.

**8. Plan de 12 meses para el VP de CS visible**
Las acciones mes a mes para construir presencia pública en la comunidad de CS, con hitos concretos y resultados esperados en cada trimestre.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Estrategia de marca personal y liderazgo de opinión para líderes de customer success que quieren construir autoridad en la comunidad CS y atraer oportunidades de alto nivel.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Marca personal como motor de negocio freelance',
                'description'       => 'El freelance que no busca clientes porque los clientes le buscan: el sistema de creación de contenido que genera demanda entrante.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en negocio freelance y en sistemas de generación de demanda inbound para profesionales independientes. Quiero construir un sistema donde los clientes me encuentren a mí, no al revés: que mi presencia pública sea mi principal canal de captación y que mi marca personal haga el trabajo de ventas mientras yo hago el trabajo de cliente.

Mi perfil freelance:
- Especialidad: [tipo de servicio que ofreces]
- Años como freelance o en la especialidad: [años]
- Perfil de cliente ideal: [tipo de empresa, sector, cargo de quien contrata]
- Canales de captación actuales: [referencias, Upwork, frío, networking...]
- Objetivo: [tarifa más alta, más proyectos, mejor perfil de cliente, más estabilidad]

Desarrolla:

**1. El sistema de demanda inbound para freelancers**
Explica el mecanismo por el que un freelance pasa de buscar clientes a que los clientes lleguen solos: el flywheel de contenido → audiencia → confianza → contacto → proyecto. Incluye los plazos reales (cuánto tiempo tarda en funcionar) y qué hace que el sistema falle antes de que empiece a rendir.

**2. La especialización como precondición de la marca**
- Por qué el freelance generalista no puede construir marca que genere inbound
- El proceso de elección del nicho de especialización para un freelance: cómo combinar lo que sabes hacer, lo que te gusta y lo que el mercado paga bien
- La propuesta de valor hiperenfocada: la frase que describe exactamente a quién ayudas y con qué problema específico
- Cómo manejar el miedo a perder clientes por especializarse demasiado

**3. El motor de contenido del freelance**
Diseña un sistema de producción de contenido sostenible para alguien que trabaja solo y tiene tiempo limitado:
- Los formatos de contenido con mayor retorno para freelancers: casos de estudio, frameworks, opinión, proceso detrás de escena, resultados de clientes (con permiso)
- La plataforma principal donde concentrar el esfuerzo: LinkedIn, Twitter/X, newsletter, YouTube, podcast
- La frecuencia realista para un freelance ocupado y cómo mantenerla sin que el contenido consuma el tiempo del cliente
- El banco de contenido: cómo reutilizar y reciclar sin repetirte

**4. LinkedIn como canal principal de inbound freelance**
- Optimización del perfil de LinkedIn para que quien llega entienda en 10 segundos si puedes ayudarle
- Los tipos de posts que mejor funcionan para freelancers: el post de caso de éxito, el post de proceso, el post de opinión, el post de cuestionamiento del status quo
- La estrategia de comentarios: cómo usar los comentarios en posts de otros para construir visibilidad sin publicar propio
- Cómo usar la búsqueda de LinkedIn para identificar y conectar con el perfil exacto de cliente que quieres atraer

**5. Newsletter: el activo que no te pueden quitar**
- Por qué la newsletter es el activo más valioso para un freelance (te pertenece, no depende del algoritmo)
- Cómo arrancar la newsletter con 0 suscriptores y llegar a 500 en 6 meses
- El contenido de newsletter que hace que tus lectores piensen en ti cuando tienen el problema que resuelves
- Cómo convertir lectores de newsletter en clientes sin ser invasivo

**6. Sistema de referencias amplificado**
- Cómo diseñar un sistema de referencias que combine las referencias orgánicas con la visibilidad del contenido
- Cómo pedir testimonios y publicarlos de manera que generen confianza antes de la primera conversación
- El papel de los socios estratégicos (otros freelancers complementarios, agencias) en la generación de proyectos

**7. La tarifa del freelance visible**
Explica por qué el freelance con marca personal puede cobrar más que el que hace el mismo trabajo sin visibilidad, y cómo traducir la reputación construida en mejores condiciones económicas: subida de tarifa, anticipos más altos, proyectos de mayor duración.

**8. Plan de construcción de marca en 6 meses**
Las acciones semana a semana para poner en marcha el sistema de inbound, con los resultados esperados en cada mes y los indicadores que confirman que el sistema está funcionando.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Sistema completo de marca personal inbound para freelancers que quieren dejar de buscar clientes y construir un flujo de proyectos que llega solo gracias a su visibilidad.',
                'vote_score'        => 45,
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
