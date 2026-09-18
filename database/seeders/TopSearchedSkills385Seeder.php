<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills385Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de networking para profesionales de marketing',
                'description'      => 'Aprende a construir una red de contactos estratégica en el sector del marketing digital y tradicional. Descubre cómo conectar con líderes de opinión, agencias y marcas para impulsar tu carrera o negocio.',
                'prompt_content'   => <<<'EOT'
Eres un experto en networking profesional y desarrollo de carrera en el sector del marketing. Tu misión es ayudarme a diseñar una estrategia de networking completa, práctica y adaptada a mi perfil como profesional de marketing.

**Contexto y antecedentes**
El networking en marketing es especialmente valioso porque este sector funciona en gran medida a través de relaciones: colaboraciones entre marcas, recomendaciones de agencias, partnerships con influencers y referencias entre profesionales. Sin una red sólida, es difícil acceder a las mejores oportunidades, proyectos y conocimientos del sector.

**Lo que necesito que desarrolles**

1. **Diagnóstico de mi red actual**
   - Dame un framework para evaluar la calidad y diversidad de mis contactos actuales.
   - ¿Qué perfiles me faltan (clientes potenciales, referentes del sector, pares creativos, proveedores estratégicos)?
   - ¿Cómo identificar los "nodos clave" en mi red que me conectan con oportunidades relevantes?

2. **Estrategia de networking online para marketing**
   - Cómo optimizar mi perfil de LinkedIn para atraer conexiones de calidad (estructura, palabras clave, contenido que genera engagement).
   - Plantilla de mensaje de conexión personalizada para cada tipo de contacto: CMOs, directores de agencia, freelancers creativos y tech marketers.
   - Rutina semanal de 30 minutos para mantener presencia activa sin saturarme.
   - Cómo usar Twitter/X, comunidades de Slack y foros especializados para hacerme visible.

3. **Networking presencial y en eventos**
   - Cómo seleccionar los eventos de marketing más relevantes (ferias, conferencias, meetups locales).
   - Protocolo para preparar cada evento: investigación previa, objetivos claros, material de presentación personal.
   - Técnicas para iniciar conversaciones de forma natural y memorable en eventos.
   - Cómo hacer seguimiento post-evento sin parecer insistente (plantilla de email de seguimiento).

4. **Construcción de relaciones a largo plazo**
   - Sistema CRM sencillo para gestionar mis contactos profesionales (campos clave, frecuencia de contacto, notas).
   - Cómo agregar valor a mis contactos antes de pedir cualquier favor: sharing de contenido, introducciones, reconocimiento público.
   - Estrategia de "warm introductions": cómo pedir presentaciones a terceros de forma efectiva.
   - Cómo convertir conocidos en aliados reales mediante colaboraciones de contenido, webinars conjuntos o proyectos piloto.

5. **Construcción de comunidad propia**
   - Ventajas de crear o co-crear una comunidad en torno a una temática de marketing.
   - Formatos viables: newsletter, grupo de LinkedIn, canal de Slack, club de lectura virtual.
   - Cómo posicionarme como conector dentro de mi sector para que otros me busquen.

6. **Métricas de éxito del networking**
   - ¿Cómo mido que mi red está creciendo de forma útil?
   - KPIs cualitativos y cuantitativos: nuevas oportunidades generadas, collaboraciones iniciadas, menciones recibidas.

**Formato de respuesta esperado**
- Plan estructurado en fases (mes 1, mes 2-3, mes 4-6).
- Plantillas de mensajes listas para usar.
- Lista de recursos y comunidades recomendadas para profesionales de marketing.
- Checklist semanal de acciones de networking.

Adapta todo el contenido a un profesional de marketing con entre 3 y 8 años de experiencia que busca dar un salto cualitativo en su carrera o negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar una estrategia de networking para crecer en el sector del marketing',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Networking técnico para desarrolladores de software',
                'description'      => 'Guía práctica para que desarrolladores construyan una red profesional sólida en el ecosistema tech. Incluye estrategias para comunidades open source, conferencias técnicas y presencia en GitHub y LinkedIn.',
                'prompt_content'   => <<<'EOT'
Eres un experto en desarrollo de carrera para ingenieros de software y conoces en profundidad cómo funciona el networking en el mundo tech. Ayúdame a construir una estrategia de networking profesional adaptada a mi perfil como desarrollador.

**Por qué el networking importa en tech**
A diferencia de otros sectores, los desarrolladores suelen subestimar el networking porque creen que el talento técnico habla por sí solo. Sin embargo, la realidad es que las mejores oportunidades —empleos en startups de alto impacto, proyectos freelance interesantes, acceso a inversión si tienes una idea— llegan principalmente a través de relaciones. Tu red amplifica tu talento técnico.

**Áreas que necesito trabajar**

1. **Presencia en GitHub como herramienta de networking**
   - Cómo usar mis contribuciones y repositorios para generar visibilidad orgánica.
   - Estrategia para contribuir a proyectos open source relevantes: cómo elegirlos, cómo hacer mi primera PR de calidad, cómo mantener la constancia.
   - Cómo escribir READMEs que me posicionen como profesional y atraigan colaboradores.

2. **LinkedIn para desarrolladores**
   - Qué diferencia a un perfil de LinkedIn atractivo para recruiters y otros devs.
   - Cómo compartir contenido técnico (aprendizajes, proyectos, opiniones sobre tecnologías) que genere conversación.
   - Plantilla de mensaje para conectar con otros desarrolladores, CTOs y technical leads sin sonar robótico.

3. **Comunidades online y offline**
   - Las mejores comunidades para desarrolladores según especialidad (frontend, backend, DevOps, data, mobile): Discord, Slack, Reddit, foros.
   - Cómo participar de forma que me haga memorable: responder preguntas, compartir recursos, hacer demostraciones técnicas.
   - Cómo sacar partido a hackathons y meetups locales: preparación, qué llevar, cómo hacer seguimiento.

4. **Conferencias y charlas técnicas**
   - Cómo seleccionar conferencias (presenciales y online) de alto valor para mi especialidad.
   - Estrategia para proponer una charla o taller y convertirme en speaker.
   - Rutina de networking en conferencias: a quién buscar, cómo iniciar conversaciones técnicas interesantes.

5. **Relaciones con reclutadores y hiring managers**
   - Cómo gestionar la relación con reclutadores de manera que sea mutuamente beneficiosa, incluso cuando no estoy buscando trabajo activamente.
   - Señales que hago llegar a mi red cuando sí estoy disponible para nuevas oportunidades.

6. **Networking para freelancers tech**
   - Cómo construir una red que genere referencias constantes de proyectos.
   - Estrategia de subcontratación y colaboración con otros freelancers para proyectos más grandes.

**Entregables esperados**
- Plan de 90 días con acciones concretas semana a semana.
- Plantillas de mensajes para cada contexto.
- Lista de comunidades y eventos recomendados según especialidad técnica.
- Checklist de perfil de GitHub y LinkedIn optimizados.

Orienta todo el contenido a un desarrollador con experiencia media-alta que quiere dar visibilidad a su trabajo y conectar con oportunidades de mayor impacto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir una red profesional efectiva en el ecosistema de desarrollo de software',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Networking para diseñadores: visibilidad y colaboraciones creativas',
                'description'      => 'Estrategia de networking diseñada específicamente para diseñadores gráficos, UX/UI y creativos. Aprende a mostrar tu trabajo, conectar con clientes y construir una comunidad creativa que genere oportunidades reales.',
                'prompt_content'   => <<<'EOT'
Eres un experto en desarrollo de carrera para diseñadores y creativos. Conoces las particularidades del sector del diseño: la importancia del portfolio, las dinámicas de las agencias creativas y el ecosistema freelance. Ayúdame a desarrollar una estrategia de networking completa y auténtica.

**El networking en el mundo del diseño**
Los diseñadores muchas veces confunden mostrar su trabajo con hacer networking. La visibilidad es necesaria, pero el networking real consiste en construir relaciones bidireccionales que generan confianza, colaboraciones y oportunidades a lo largo del tiempo. Esta estrategia combina ambas dimensiones.

**Bloques de trabajo**

1. **Portfolio como herramienta de networking**
   - Cómo estructurar mi portfolio (Behance, Dribbble, web propia) para que no solo muestre mi trabajo sino que invite a la conversación.
   - Qué incluir en cada case study para que clientes y otros diseñadores quieran contactarme.
   - Estrategia de publicación: frecuencia, formatos, captions que generan interacción.

2. **Presencia en redes sociales para diseñadores**
   - Plataformas clave: Instagram, LinkedIn, Twitter/X y TikTok según mi tipo de diseño.
   - Qué tipo de contenido funciona mejor para diseñadores: procesos creativos, before/after, opiniones sobre tendencias, tutoriales.
   - Cómo interactuar con otros diseñadores referentes sin parecer un fan: comentarios de valor, colaboraciones de contenido.

3. **Comunidades y eventos de diseño**
   - Comunidades online más activas para diseñadores UX, gráficos e industriales (Slack groups, Discord, meetups de Figma, eventos de ADG).
   - Cómo participar activamente para ganar reputación dentro de la comunidad.
   - Estrategia para asistir a eventos de diseño: qué objetivos llevar, cómo presentarme, cómo hacer seguimiento.

4. **Colaboraciones creativas como networking**
   - Cómo proponer colaboraciones con otros diseñadores, ilustradores, fotógrafos y copywriters.
   - Proyectos personales y experimentales como excusa para conectar con otros creativos.
   - Cómo co-crear contenido (webinars, retos de diseño, exposiciones virtuales) para ampliar mi red.

5. **Networking con clientes potenciales**
   - Dónde están mis clientes ideales y cómo conectar con ellos de forma no invasiva.
   - Cómo usar LinkedIn para acercarme a directores de marketing, product managers y founders que necesitan diseño.
   - Plantilla de mensaje de presentación para clientes potenciales que conocí en un evento.

6. **Gestión y mantenimiento de la red**
   - Sistema sencillo para recordar hacer seguimiento a contactos importantes.
   - Rituales de networking: revisión mensual de la red, acciones de mantenimiento de relaciones.
   - Cómo pedir y dar referencias dentro de la comunidad de diseño.

**Entregables**
- Plan de acción de 60 días.
- Plantillas de mensajes para distintos contextos.
- Lista de comunidades, eventos y plataformas recomendadas para diseñadores.
- Rutina semanal de networking de 20 minutos.

Adapta el contenido a un diseñador con perfil freelance o que trabaja en agencia y quiere diversificar su red de contactos y fuentes de trabajo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Crear una estrategia de networking que genere visibilidad y colaboraciones para diseñadores',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Red de contactos para profesionales de ventas B2B',
                'description'      => 'Estrategia de networking orientada a resultados para vendedores y account executives. Incluye técnicas de prospección social, participación en eventos sectoriales y construcción de relaciones que aceleran el ciclo de ventas.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas B2B y desarrollo de negocio con amplia experiencia en la construcción de redes de contactos que generan pipeline real. Ayúdame a diseñar una estrategia de networking orientada a resultados comerciales.

**El networking en ventas B2B**
En ventas B2B, tu red es tu activo más valioso. Los compradores confían en personas que les han sido recomendadas o con quienes tienen relación previa. Una red bien construida reduce el tiempo de cierre, aumenta la tasa de conversión y genera referencias que llegan precalificadas. Este es un asset de carrera que se acumula con el tiempo.

**Dimensiones de la estrategia**

1. **Social selling: LinkedIn como motor de pipeline**
   - Cómo optimizar mi perfil de LinkedIn para que mis prospects me encuentren antes de que yo les contacte.
   - Estrategia de contenido para vendedores: qué compartir (insights de sector, casos de éxito, opiniones sobre tendencias) para ganar credibilidad con decision makers.
   - Secuencia de prospección social: cómo interactuar con un prospect durante 2-3 semanas antes de enviar el primer mensaje de venta.
   - Plantilla de LinkedIn InMail que consigue respuesta: estructura, longitud óptima, llamada a la acción.

2. **Networking en eventos sectoriales**
   - Cómo seleccionar los eventos donde están mis buyers ideales (ferias, congresos, cámaras de comercio, asociaciones sectoriales).
   - Preparación previa: investigar asistentes, definir objetivos, preparar mi elevator pitch.
   - Técnicas para iniciar conversaciones de negocio naturales sin sonar a vendedor.
   - Protocolo de seguimiento post-evento: email dentro de las 24 horas, conexión en LinkedIn, agenda de llamada.

3. **Red de referidos y aliados estratégicos**
   - Cómo identificar y cultivar aliados no competidores que sirven al mismo buyer (consultoras, integradores, agencias).
   - Sistema de intercambio de referidos: cómo estructurarlo, cómo hacer el tracking, cómo cerrar el loop con agradecimiento.
   - Cómo pedir una "warm introduction" de forma que mi contacto quiera hacerla.

4. **Relaciones con ex-clientes y ex-colegas**
   - Por qué los ex-clientes son la fuente de referidos más potente y cómo mantener esa relación viva.
   - Rituales de mantenimiento: check-ins periódicos, compartir contenido relevante, felicitaciones de hitos.
   - Cómo reactivar una relación dormida sin que resulte forzado.

5. **CRM de networking personal**
   - Campos clave para gestionar mi red: tipo de relación, último contacto, oportunidades abiertas, próxima acción.
   - Frecuencia de contacto según el nivel de prioridad del contacto.
   - Herramientas recomendadas: desde una hoja de cálculo hasta Clay o Pipedrive para gestión personal.

6. **Métricas del networking comercial**
   - Número de nuevas conexiones de calidad por mes.
   - Pipeline generado por referidos vs prospección fría.
   - Tasa de conversión de contactos de red vs contactos fríos.

**Entregables**
- Plan de 90 días con acciones semanales.
- Plantillas de mensajes de LinkedIn, email de seguimiento y solicitud de referido.
- Sistema CRM de networking en formato tabla.
- Checklist de preparación para eventos.

Enfoca el contenido en un account executive o business development manager con cartera de clientes activa que quiere acelerar el crecimiento de su pipeline mediante relaciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir una red de contactos que genere pipeline y referidos en ventas B2B',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Networking estratégico para Product Managers',
                'description'      => 'Guía de networking para PMs que quieren conectar con otros product managers, founders, usuarios y stakeholders clave. Aprende a construir relaciones que alimenten tu visión de producto y aceleren tu carrera.',
                'prompt_content'   => <<<'EOT'
Eres un experto en desarrollo de producto y carrera para Product Managers. Conoces el ecosistema PM: comunidades, eventos, frameworks de referencia y los perfiles clave con los que un PM necesita relacionarse. Ayúdame a construir una estrategia de networking que apoye mi crecimiento profesional y mi visión de producto.

**Por qué el networking es crítico para un PM**
Los Product Managers viven en la intersección de negocio, tecnología y diseño. Su efectividad depende en gran medida de su capacidad para influir sin autoridad directa, lo que requiere relaciones sólidas con stakeholders internos y externos. Además, el sector PM evoluciona muy rápido y la red es la principal fuente de aprendizaje práctico.

**Bloques estratégicos**

1. **Comunidad PM: aprendizaje y visibilidad**
   - Las mejores comunidades para PMs en español e inglés: Product School, Mind the Product, comunidades de Slack, Lenny's Newsletter, grupos locales.
   - Cómo contribuir activamente: responder preguntas, compartir casos propios, publicar análisis de productos.
   - Cómo hacer networking dentro de estas comunidades de manera que no parezca oportunista.

2. **LinkedIn para Product Managers**
   - Qué tipo de contenido genera credibilidad para un PM: teardowns de productos, frameworks propios, reflexiones sobre decisiones de producto, métricas e impacto.
   - Cómo estructurar mi perfil para que founders, VPs of Product y recruiters me encuentren.
   - Estrategia de outreach para conectar con otros PMs senior y CPOs de empresas que admiro.

3. **Networking con usuarios y clientes**
   - Por qué el networking con usuarios es la forma más infrautilizada de networking para PMs.
   - Cómo convertir entrevistas de usuario en relaciones duraderas que me den acceso continuo a feedback.
   - Estrategia para construir un panel de usuarios comprometidos con quienes puedo iterar ideas.

4. **Relaciones con stakeholders internos**
   - Cómo construir relaciones de confianza con ingeniería, diseño, datos y negocio más allá del trabajo diario.
   - Rituales de relación con stakeholders: café informal, sesiones de alineación voluntaria, reconocimiento público de su trabajo.
   - Cómo gestionar relaciones con ejecutivos C-level de forma que me den visibilidad sin parecer político.

5. **Networking con el ecosistema de inversión y startups**
   - Por qué conocer a inversores, founders y angels es valioso incluso si no busco levantar capital.
   - Cómo participar en demos, pitch events y aceleradoras como networking de alto valor.
   - Cómo posicionarme como PM de referencia en un vertical específico.

6. **Conferencias y eventos de producto**
   - Selección de eventos: Product at Heart, MTP Engage, ProductCon, eventos locales.
   - Cómo proponer una charla sobre un tema de producto en el que tengo experiencia real.
   - Protocolo de networking en eventos: quién buscar, cómo presentarme, seguimiento.

**Entregables**
- Mapa de perfiles clave a incluir en mi red PM.
- Plan de 90 días con acciones concretas.
- Plantillas de mensajes para cada contexto.
- Lista de comunidades y eventos recomendados.

Adapta el contenido a un PM con 2-6 años de experiencia que quiere acelerar su carrera hacia roles senior o CPO.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar una estrategia de networking que apoye el crecimiento de carrera y visión de producto',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Networking profesional para especialistas en RRHH',
                'description'      => 'Estrategia de networking para profesionales de recursos humanos que quieren conectar con otros HR leaders, influir en su organización y mantenerse al día con las tendencias del sector people y talento.',
                'prompt_content'   => <<<'EOT'
Eres un experto en desarrollo de carrera para profesionales de Recursos Humanos y conoces en profundidad el ecosistema HR: asociaciones, eventos, comunidades online y los temas que definen la agenda del sector (HR tech, bienestar, diversidad, talento). Ayúdame a diseñar una estrategia de networking completa.

**El networking en el mundo HR**
Los profesionales de RRHH tienen una posición privilegiada: constantemente están en contacto con personas dentro y fuera de su organización. Sin embargo, muchos HR professionals descuidan su propia red externa porque se enfocan en las necesidades del negocio. Esta estrategia busca revertir esa tendencia.

**Dimensiones clave**

1. **Comunidades HR y aprendizaje continuo**
   - Las mejores comunidades para profesionales de RRHH en España y LATAM: SHRM, AEDIPE, comunidades de LinkedIn, foros de HR Tech.
   - Cómo participar activamente para construir reputación como experto en un área concreta (talent acquisition, L&D, HR analytics, employee experience).
   - Cómo mantenerse al día con las tendencias del sector y compartir ese conocimiento para ganar visibilidad.

2. **LinkedIn para HR professionals**
   - Cómo posicionarme como referente en mi área de especialización HR.
   - Qué contenido publicar: reflexiones sobre el futuro del trabajo, casos de éxito de iniciativas people, opiniones sobre HR tech.
   - Estrategia para conectar con CHROs, HR Directors y HR tech founders de empresas que me interesan.

3. **Networking con candidatos y talent community**
   - Por qué construir relaciones con candidatos (incluso rechazados) es una inversión estratégica.
   - Cómo crear y mantener una talent community que me dé acceso a perfiles top cuando los necesite.
   - Estrategia de employer branding personal: cómo me perciben los candidatos y cómo uso esa percepción a mi favor.

4. **Relaciones con proveedores de HR tech y consultoría**
   - Cómo gestionar la relación con proveedores de ATS, plataformas de bienestar, herramientas de engagement, etc.
   - Cómo convertir esas relaciones en fuentes de benchmark, datos de mercado y mejores prácticas.
   - Estrategia para evaluar y seleccionar proveedores aprovechando mi red de confianza.

5. **Influencia interna: networking con líderes de negocio**
   - Cómo construir relaciones de confianza con CEO, CFO y directores de área más allá de los procesos formales de HR.
   - Rituales de relación con el business: desayunos informales, sesiones de escucha activa, participación en reuniones de negocio.
   - Cómo posicionarme como business partner estratégico y no solo como función de soporte.

6. **Eventos y conferencias HR**
   - Selección de eventos clave: HR Congress, Expo RR.HH., Talent Summit, eventos locales de AEDIPE.
   - Cómo proponer una ponencia sobre una iniciativa people de impacto real.
   - Protocolo de networking en eventos: mesas de trabajo, sesiones de networking estructurado, seguimiento.

**Entregables**
- Mapa de stakeholders de red para un HR professional.
- Plan de 90 días con acciones específicas.
- Plantillas de mensajes para cada perfil de contacto.
- Checklist de perfil de LinkedIn optimizado para HR.

Enfoca el contenido en un HR Business Partner o HR Manager con 4-10 años de experiencia que quiere dar visibilidad a su trabajo y avanzar hacia roles de CHROs o directora de personas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir una red profesional que potencie la influencia y el crecimiento en el sector HR',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Networking para profesionales de finanzas y CFOs',
                'description'      => 'Estrategia de networking para directores financieros, controllers y analistas que quieren conectar con pares del sector, acceder a inteligencia de mercado y posicionarse como líderes de opinión en finanzas corporativas.',
                'prompt_content'   => <<<'EOT'
Eres un experto en desarrollo de carrera para profesionales de finanzas corporativas, inversión y controlling. Conoces las particularidades del sector financiero: la importancia de la discreción, las redes de confianza cerradas y los foros especializados donde se mueve la inteligencia de mercado. Ayúdame a construir una estrategia de networking adaptada a mi perfil financiero.

**El networking en finanzas**
El sector financiero es conocido por operar en redes cerradas y de alta confianza. Las mejores oportunidades —tanto de carrera como de negocio— raramente aparecen en bolsas de empleo públicas: circulan a través de relaciones. Construir y mantener esa red requiere un enfoque diferente al de otros sectores: más discreto, más orientado al valor y menos ruidoso.

**Estrategia por bloques**

1. **Posicionamiento y presencia en el sector**
   - Cómo construir credibilidad en finanzas: publicaciones en revistas especializadas, participación en foros técnicos, ponencias en eventos sectoriales.
   - LinkedIn para perfiles financieros: qué compartir sin comprometer la confidencialidad (tendencias macro, reflexiones sobre reporting, opiniones sobre regulación).
   - Cómo posicionarme como experto en una vertical específica: M&A, private equity, FP&A, treasury, compliance.

2. **Comunidades y asociaciones de finanzas**
   - Asociaciones clave: ACCA, CFA Institute, ICAC, AEF, círculos de CFOs.
   - Cómo sacar partido real a la membresía en estas asociaciones: comités, grupos de trabajo, eventos de socios.
   - Foros online para financieros: grupos de LinkedIn, comunidades de CFOs, foros de inversión.

3. **Networking con pares y benchmarking**
   - Cómo crear o unirme a un grupo de benchmarking privado con CFOs o controllers de empresas similares (no competidoras).
   - Valor del intercambio informal de mejores prácticas: reporting, herramientas, gestión de equipos financieros.
   - Cómo estructurar una reunión de benchmarking que sea mutuamente beneficiosa.

4. **Relaciones con el ecosistema financiero externo**
   - Bancos, auditores, fondos de inversión, asesores M&A: cómo cultivar estas relaciones más allá de las transacciones.
   - Cómo mantener relaciones con banqueros de inversión sin que solo te llamen cuando tienen un deal.
   - Estrategia de relación con auditores y consultoras financieras para acceder a benchmarks de mercado.

5. **Networking para acceder a oportunidades de carrera**
   - Cómo relacionarme con headhunters especializados en finanzas (no solo cuando busco trabajo).
   - Cómo hacer visible mi disponibilidad de forma discreta cuando sí estoy en búsqueda.
   - Relaciones con board members y accionistas como palanca de carrera.

6. **Eventos y conferencias de finanzas**
   - Eventos clave: CFO Forum, ACCA conferences, eventos de KPMG/Deloitte/PWC, summits de inversión.
   - Cómo aprovechar los side events y cenas de networking que acompañan a las grandes conferencias.
   - Protocolo de seguimiento post-evento en un sector que valora la discreción.

**Entregables**
- Mapa de perfiles de red prioritarios para un CFO o director financiero.
- Plan de 12 meses con acciones trimestrales.
- Plantillas de mensajes adaptadas al tono formal del sector.
- Lista de asociaciones, eventos y publicaciones de referencia.

Orienta el contenido a un profesional financiero senior (CFO, VP Finance, Controller) de empresa mediana o grande que quiere ampliar su influencia y acceder a oportunidades de alto nivel.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir una red de alto nivel en el sector financiero con discreción y foco estratégico',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Estrategia de networking para abogados y profesionales del derecho',
                'description'      => 'Guía de networking diseñada para abogados, asesores jurídicos y profesionales del derecho. Incluye estrategias para captar clientes, construir reputación en el sector legal y conectar con otros profesionales del derecho.',
                'prompt_content'   => <<<'EOT'
Eres un experto en desarrollo de negocio y marketing jurídico para abogados y despachos de abogados. Conoces las restricciones éticas que regulan la publicidad legal en España y LATAM, así como las dinámicas de captación de clientes en el sector legal. Ayúdame a diseñar una estrategia de networking profesional que se adapte a las particularidades del mundo jurídico.

**El networking en el sector legal**
En el sector jurídico, la reputación es el activo más valioso y se construye principalmente a través de relaciones. A diferencia de otros sectores, la publicidad directa tiene limitaciones éticas importantes en muchas jurisdicciones. Esto hace que el networking sea prácticamente la única herramienta de desarrollo de negocio legítima y efectiva para abogados.

**Bloques estratégicos**

1. **Presencia y reputación online para abogados**
   - Cómo construir autoridad en mi área de especialidad (mercantil, laboral, fiscal, penal, IP, etc.) mediante contenido jurídico de divulgación.
   - LinkedIn para abogados: qué publicar (análisis de jurisprudencia, cambios normativos, reflexiones sobre el acceso a la justicia) sin comprometer la confidencialidad.
   - Cómo posicionarme en Google mediante artículos jurídicos de calidad y participación en medios especializados.
   - Normas deontológicas a respetar en la comunicación online.

2. **Colegios de abogados y asociaciones jurídicas**
   - Cómo aprovechar al máximo la membresía en el colegio: comisiones, eventos, cursos, directorios.
   - Asociaciones especializadas: AIJA, IBA, asociaciones de compliance, clubes de abogados in-house.
   - Cómo ganar visibilidad dentro de estas organizaciones: ponencias, publicaciones, cargos en comités.

3. **Networking con clientes potenciales**
   - Dónde están mis clientes ideales según mi especialidad (empresas, particulares, fondos, startups) y cómo conectar con ellos.
   - Estrategia para asistir a eventos de negocio (no jurídicos) donde están mis potenciales clientes corporativos.
   - Cómo convertir una consulta inicial gratuita en una relación de confianza de largo plazo.

4. **Red de colaboración entre despachos**
   - Por qué colaborar con otros despachos (no competidores directos) es una fuente de referidos recíprocos.
   - Cómo estructurar acuerdos de derivación de asuntos entre despachos.
   - Relaciones con despachos internacionales para asuntos transfronterizos.

5. **Networking con otros actores del ecosistema legal**
   - Notarios, registradores, peritos, mediadores, jueces (en contextos apropiados): cómo mantener relaciones de respeto mutuo.
   - Relación con aseguradoras jurídicas, bancos y gestorías que pueden derivar clientes.
   - Networking con inversores, fondos de capital riesgo y family offices si mi especialidad es corporativa.

6. **Conferencias y publicaciones jurídicas**
   - Selección de congresos y jornadas de mi especialidad.
   - Cómo proponer una ponencia o publicar en revistas jurídicas de referencia.
   - Cómo usar un artículo publicado como herramienta de networking (distribución, seguimiento con contactos clave).

**Entregables**
- Mapa de fuentes de referidos para mi especialidad jurídica.
- Plan de 12 meses con acciones trimestrales.
- Plantillas de comunicación adaptadas al tono formal del derecho.
- Checklist de optimización del perfil de LinkedIn para abogados.

Adapta el contenido a un abogado con 5-15 años de experiencia en ejercicio privado o despacho boutique que quiere sistematizar su captación de clientes a través de relaciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar una estrategia de networking y captación de clientes para abogados respetando la deontología profesional',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Networking para profesionales de Customer Success',
                'description'      => 'Estrategia de networking diseñada para Customer Success Managers y directores de éxito del cliente. Aprende a conectar con otros profesionales de CS, construir relaciones con clientes estratégicos y posicionarte en el ecosistema SaaS.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Customer Success y desarrollo de carrera para profesionales de CS. Conoces el ecosistema SaaS y las dinámicas del mundo del éxito del cliente: comunidades, certificaciones, frameworks como LAER o the CSQL. Ayúdame a diseñar una estrategia de networking que impulse mi carrera y mi capacidad de generar impacto con los clientes.

**El networking en Customer Success**
El sector de Customer Success es relativamente joven pero tiene una comunidad muy activa y colaborativa. Los profesionales de CS comparten benchmarks, mejores prácticas y herramientas con una generosidad poco común en otros sectores. Esta estrategia aprovecha esa cultura de colaboración para construir una red de alto valor.

**Bloques estratégicos**

1. **Comunidad CS: aprendizaje y visibilidad**
   - Las mejores comunidades para CS professionals: Customer Success Collective, Gainsight Community, CS Insider, grupos de LinkedIn.
   - Cómo participar activamente: responder preguntas, compartir playbooks propios, publicar métricas de impacto.
   - Cómo ganar reputación como experto en un área específica de CS: onboarding, QBRs, churn prevention, expansion revenue.

2. **LinkedIn para Customer Success Managers**
   - Qué contenido genera credibilidad: reflexiones sobre retención, análisis de métricas de CS, casos de éxito anonimizados, opiniones sobre herramientas.
   - Cómo estructurar mi perfil para que VPs of CS, directores de SaaS y recruiters me encuentren.
   - Estrategia de outreach para conectar con CS leaders de empresas que admiro.

3. **Relaciones profundas con clientes estratégicos**
   - Por qué las relaciones con clientes son la forma más valiosa de networking para un CS professional.
   - Cómo construir relaciones de confianza que van más allá del contrato: conexión personal, apoyo en sus objetivos de carrera, acceso como referente.
   - Cómo convertir a un cliente satisfecho en un embajador activo que me recomienda y da referencias.

4. **Networking con equipos internos**
   - Cómo construir relaciones sólidas con ventas, producto, soporte y marketing para ser más efectivo con los clientes.
   - Rituales de relación interna: sesiones de feedback bidireccional, reconocimiento público de logros conjuntos.
   - Cómo posicionarme como voz del cliente dentro de la organización y ganar influencia interna.

5. **Ecosistema SaaS y HR tech**
   - Cómo conectar con founders y VPs de producto de herramientas de CS (Gainsight, ChurnZero, Totango) para acceder a betas, benchmarks y formación exclusiva.
   - Participación en advisory boards de herramientas: cómo unirse y qué valor aporta.
   - Networking con inversores de SaaS como fuente de inteligencia de mercado.

6. **Eventos y certificaciones de CS**
   - Eventos clave: Pulse Conference, CS Fest, meetups locales de CS.
   - Valor de certificaciones (Gainsight Pulse, CCSM) como herramienta de networking y credibilidad.
   - Cómo proponer una charla sobre un caso de éxito real en una conferencia de CS.

**Entregables**
- Mapa de perfiles clave a incluir en mi red de CS.
- Plan de 90 días con acciones semanales.
- Plantillas de mensajes para distintos contextos.
- Lista de comunidades, eventos y certificaciones recomendadas.

Orienta el contenido a un CS Manager o Senior CSM con 2-5 años de experiencia en SaaS que quiere avanzar hacia un rol de director de CS o VP de éxito del cliente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir una red profesional en el ecosistema de Customer Success para acelerar la carrera',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Networking efectivo para freelancers: generar referencias y clientes recurrentes',
                'description'      => 'Estrategia de networking diseñada para freelancers y consultores independientes. Aprende a construir una red que genere referencias constantes, proyectos recurrentes y alianzas estratégicas que hagan crecer tu negocio.',
                'prompt_content'   => <<<'EOT'
Eres un experto en negocio freelance y consultoría independiente. Conoces los desafíos específicos del trabajo por cuenta propia: la irregularidad de proyectos, la dependencia de pocos clientes y la soledad del trabajo en solitario. Ayúdame a diseñar una estrategia de networking que sea el motor principal de crecimiento de mi negocio freelance.

**Por qué el networking es esencial para freelancers**
Para un freelance, el networking no es un complemento opcional: es el sistema circulatorio de su negocio. La mayoría de los mejores clientes no llegan por plataformas de freelancing ni por publicidad de pago, sino a través de referencias de personas que confían en tu trabajo. Construir esa red de forma sistemática marca la diferencia entre un freelance que trabaja proyecto a proyecto y uno con agenda llena a 3 meses vista.

**Bloques estratégicos**

1. **Posicionamiento como freelance de referencia**
   - Cómo definir mi nicho con suficiente precisión para que la gente sepa exactamente cuándo recomendarme.
   - Herramientas de visibilidad: portfolio, web personal, perfiles en plataformas relevantes (LinkedIn, Behance, GitHub, etc. según mi especialidad).
   - Por qué la especialización es la mejor estrategia de networking: es más fácil que te recuerden si eres "el experto en X".

2. **Red de referidos: el activo más valioso**
   - Cómo identificar a mis principales fuentes de referidos actuales y potenciales.
   - Sistema para alimentar esa red: check-ins periódicos, aportación de valor antes de pedir nada.
   - Cómo pedir referencias de forma directa, cómoda y efectiva.
   - Cómo cerrar el loop: agradecer cada referido recibido, informar del resultado, reconocer al referidor.

3. **Alianzas con otros freelancers**
   - Por qué colaborar con freelancers complementarios (no competidores) multiplica las oportunidades.
   - Cómo estructurar alianzas de subcontratación mutua: acuerdos informales, porcentaje de referido, responsabilidades.
   - Cómo formar un equipo virtual de freelancers para abordar proyectos más grandes.

4. **Presencia en comunidades de freelancers**
   - Comunidades online para freelancers: grupos de LinkedIn, Slack communities, foros especializados por sector.
   - Cómo participar sin parecer que solo busco trabajo: aportar conocimiento, hacer preguntas de calidad, compartir recursos.
   - Comunidades locales: coworkings, asociaciones de autónomos, meetups de networking.

5. **Clientes actuales como red de networking**
   - Por qué mis clientes actuales son mi mejor fuente de nuevos clientes.
   - Cómo pedir testimonios y referencias en el momento óptimo del proyecto.
   - Estrategia de reactivación de ex-clientes: cuándo contactar, qué decir, cómo reabrir conversaciones.
   - Cómo hacer que los clientes me recomienden de forma proactiva y con entusiasmo.

6. **Networking en eventos para freelancers y emprendedores**
   - Tipos de eventos útiles: meetups de mi sector, eventos de startups, ferias, conferencias de nicho.
   - Cómo sacar el máximo partido a cada evento: preparación, objetivos, seguimiento.
   - Cómo organizar mis propios micro-eventos (desayunos, webinars, talleres) para posicionarme como conector.

7. **Sistema de gestión de la red**
   - CRM sencillo para freelancers: qué rastrear, con qué herramienta (Notion, hoja de cálculo, Airtable).
   - Rutina semanal de networking: 30 minutos que marcan la diferencia.
   - Métricas de la red: porcentaje de ingresos por referidos, nuevos contactos de calidad por mes, ratio de conversión de red a cliente.

**Entregables**
- Sistema CRM de networking personal en formato tabla.
- Plan de 90 días con acciones semanales.
- Plantillas de mensajes: solicitud de referido, reactivación de ex-cliente, propuesta de alianza.
- Rutina semanal de networking de 30 minutos.

Adapta todo el contenido a un freelance con 1-5 años de experiencia que ya tiene algunos clientes pero quiere estabilizar y hacer crecer sus ingresos mediante una red sólida.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Sistematizar el networking para generar referencias y clientes recurrentes como freelance',
                'vote_score'       => 45,
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
