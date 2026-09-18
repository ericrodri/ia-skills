<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills383Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de relaciones con medios y PR para marcas en crecimiento',
                'description'      => 'Desarrolla una estrategia integral de PR y medios que posicione tu marca en los medios correctos, construya relaciones duraderas con periodistas y genere cobertura orgánica de alto valor. Aprende a pasar de reaccionar a los medios a liderarlos proactivamente.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Comunicaciones y PR con más de 15 años de experiencia gestionando estrategias de relaciones con medios para marcas de consumo, startups tecnológicas y empresas en etapa de crecimiento.

Necesito diseñar una estrategia de PR y relaciones con medios completa que construya visibilidad genuina para mi marca o empresa durante los próximos 12 meses.

**Contexto de mi marca:**
- Tipo de empresa: [startup / pyme / corporación / marca personal]
- Sector: [tecnología / retail / salud / educación / finanzas / otro]
- Etapa actual: [lanzamiento / crecimiento / consolidación / expansión]
- Presupuesto de PR: [sin presupuesto / bajo (<5K€/mes) / medio / alto]
- Audiencia objetivo: [consumidores / empresas / inversores / talento / política]
- Objetivos de PR: [awareness de marca / lanzamiento de producto / captación de inversión / employer branding / gestión de reputación]
- Experiencia previa con medios: [ninguna / alguna cobertura espontánea / relaciones existentes]

**Módulo 1 — Diagnóstico y posicionamiento mediático:**
Ayúdame a definir mi posicionamiento en medios:
- Cómo identificar mi ángulo editorial único: qué hace que mi historia sea periodísticamente interesante
- Desarrollo de los 3-5 mensajes clave que deben aparecer en toda cobertura mediática
- Identificación de los "credenciales de novedad": qué elemento de mi historia es genuinamente nuevo o relevante
- Análisis de mis portavoces potenciales: quién es el perfil más adecuado para hablar con medios y cómo prepararlo
- Evaluación honesta de lo que los medios van a valorar y lo que no

**Módulo 2 — Mapeo y segmentación de medios:**
Diseña mi mapa de medios objetivo:
- Categorías de medios que debo priorizar según mis objetivos (generalistas, verticales del sector, trade press, podcasts, newsletters, medios digitales)
- Cómo investigar y crear una base de datos de medios y periodistas relevantes
- Criterios para priorizar medios: alcance, audiencia, credibilidad en mi sector, accesibilidad
- Diferencias en la estrategia para medios nacionales vs. locales vs. internacionales
- Cómo identificar periodistas que cubren temas relacionados con mi historia

**Módulo 3 — Construcción de relaciones con periodistas:**
Explica cómo construir relaciones auténticas con periodistas:
- Principios fundamentales de la relación marca-periodista: lo que nunca debes hacer
- Cómo hacer el primer contacto sin resultar invasivo o genérico
- Estrategia de seguimiento sin insistir: la línea entre persistencia y spam
- Cómo convertirte en una fuente de referencia para periodistas de tu sector
- Gestión del long game: relaciones que dan frutos en meses, no en días

**Módulo 4 — Creación de materiales de PR:**
Diseña mis materiales de comunicación:
- Estructura de una nota de prensa efectiva en 2025: qué incluir y qué eliminar
- Cómo redactar el asunto perfecto de un email a un periodista (la diferencia entre abrirlo e ignorarlo)
- El media kit: qué debe contener y cómo mantenerlo actualizado
- Pitches personalizados vs. comunicados masivos: cuándo usar cada uno
- Cómo usar datos y estudios propios para generar cobertura de valor

**Módulo 5 — Generación proactiva de cobertura:**
Explica tácticas para generar cobertura mediática consistentemente:
- Newsjacking: cómo conectar tu historia a noticias de actualidad de forma relevante y oportuna
- Construcción de un calendario editorial de PR alineado con el ciclo de noticias
- Técnica del "experto de referencia": cómo posicionarte como fuente para preguntas de tu sector
- Uso de plataformas como HARO, Qwoted o Terkel para aparecer en medios
- Generación de estudios, encuestas o datos propios que los medios quieran citar

**Módulo 6 — Medición y optimización:**
Define cómo medir el éxito de tu PR:
- Métricas de PR más allá del AVE (equivalent advertising value): cobertura cualitativa, mensajes clave presentes, tier de medios
- Herramientas de monitoreo de medios gratuitas y de pago
- Proceso de revisión mensual de la estrategia de PR
- Cómo informar resultados de PR a dirección de forma impactante

**Entregable:**
Estrategia de PR para 12 meses con: calendario trimestral de iniciativas, lista de medios objetivo por nivel de prioridad, plantillas de pitch y nota de prensa adaptadas a mi sector, y métricas de éxito por trimestre.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar estrategia de PR y relaciones con medios',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'PR técnico y relaciones con medios especializados en tecnología',
                'description'      => 'Aprende a comunicar innovaciones tecnológicas complejas a medios especializados y generalistas de forma que resuene tanto con periodistas técnicos como con audiencias no expertas. Construye la visibilidad que tu producto o startup necesita para atraer usuarios, talento e inversores.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en PR tecnológico con experiencia comunicando productos de software, hardware, startups deeptech e innovaciones técnicas complejas tanto a medios especializados como a prensa generalista de negocio.

Necesito una estrategia de comunicación para hacer que mi producto o empresa tecnológica aparezca en los medios correctos, con la narrativa adecuada para cada tipo de audiencia.

**Mi contexto tecnológico:**
- Tipo de empresa: [startup de software / empresa de hardware / consultora tecnológica / open source project / otra]
- Producto: [descripción técnica de lo que construyes]
- Estado: [en stealth / lanzamiento / crecimiento / expansión internacional]
- Audiencia de usuarios: [developers / CTOs / empresas / consumidores / investigadores]
- Objetivos de PR: [awareness producto / captación de talento técnico / inversión / clientes enterprise / partnerships]

**Bloque 1 — Narrativa tecnológica para no técnicos:**
El mayor reto del PR tecnológico es traducir sin perder. Ayúdame a:
- Construir una narrativa de mi producto que un periodista de economía entienda en 30 segundos
- Desarrollar analogías efectivas para explicar conceptos técnicos complejos (IA, blockchain, infra cloud, APIs, etc.)
- Identificar el beneficio humano detrás de la innovación técnica: el "so what" que importa a los medios generalistas
- Evitar el trap del jargon: cómo saber cuándo un término técnico suma credibilidad vs. cuándo aleja al lector

**Bloque 2 — Mapa de medios tecnológicos:**
Ayúdame a segmentar los medios que debo priorizar:
- Medios tech españoles e internacionales por nivel de relevancia para mi objetivo
- Diferencia entre cobertura en TechCrunch, Wired, Xataka, El Referente, Computer Hoy, y cuándo buscar cada uno
- Newsletters técnicas de nicho con audiencias de alto valor (ingenieros, CTOs, VCs)
- Podcasts técnicos como canal de PR complementario
- Medios de negocio generalista con secciones de tecnología

**Bloque 3 — Pitching técnico efectivo:**
Diseña mi estrategia de pitching para medios tecnológicos:
- Estructura de un pitch para medios tech vs. medios de negocio generalista
- Cómo preparar una demo o acceso temprano que seduzca al periodista
- El papel de los benchmarks y datos técnicos en el pitch: cuántos y de qué tipo
- Gestión de embargos: cuándo usarlos, cómo redactarlos y qué riesgos tienen
- Exclusivas: cuándo darlas y cómo negociarlas a tu favor

**Bloque 4 — GitHub, comunidad técnica y earned media:**
Explica cómo el PR técnico va más allá de los medios:
- Estrategia de GitHub como canal de visibilidad (stars, forks, contribuciones como señal de credibilidad)
- Cómo construir audiencia en comunidades técnicas (HackerNews, Reddit tech, Dev.to, Product Hunt)
- Artículos técnicos en tu blog que los medios citen y compartan
- Conferencias y hackathons como canal de PR técnico
- Contribuciones a medios especializados (guest posts en blogs técnicos de referencia)

**Bloque 5 — PR para captación de talento e inversores:**
Diseña una estrategia de PR específica para objetivos no comerciales:
- Cómo usar la visibilidad mediática para atraer ingenieros senior y perfiles técnicos difíciles
- Qué medios leen los VCs y business angels de tech y cómo aparecer en su radar
- Construcción de credibilidad técnica que facilita las conversaciones de fundraising

**Entregable:**
Plan de PR tecnológico para 6 meses con: narrativa adaptada a tres tipos de medios, lista de 20 medios objetivo con nombre del periodista de referencia y ángulo de pitch sugerido, calendario de lanzamiento de contenido técnico, y métricas de éxito diferenciadas por objetivo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir estrategia de PR técnico para empresas de tecnología',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Construcción de visibilidad mediática para estudios y freelancers de diseño',
                'description'      => 'Diseña una estrategia de PR y relaciones con medios específica para profesionales creativos: cómo aparecer en publicaciones de referencia del diseño, construir una narrativa de marca personal potente y convertir tu trabajo en historias que los medios quieran contar.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de marca personal y PR para creativos, con experiencia ayudando a diseñadores, directores de arte, estudios creativos e ilustradores a construir visibilidad mediática en publicaciones de referencia del sector.

Quiero construir una presencia mediática consistente que posicione mi trabajo de diseño en las publicaciones y plataformas donde me ven mis clientes ideales y los pares de referencia de mi industria.

**Mi contexto creativo:**
- Especialidad: [UX/UI / diseño gráfico / branding / ilustración / motion / tipografía / diseño de producto / interiorismo / moda]
- Tipo de práctica: [freelancer / estudio pequeño / socio en agencia / creativo interno]
- Portfolio actual: [describe los proyectos más representativos]
- Objetivo mediático: [clientes premium / reconocimiento de pares / premios / hablar en conferencias / docencia / licencias de obra]
- Presupuesto disponible: [tiempo como único recurso / algo de presupuesto]

**Área 1 — Construcción de narrativa creativa:**
Ayúdame a articular mi historia como diseñador:
- Identificación de mi punto de vista único: qué perspectiva del diseño es genuinamente mía
- Desarrollo de mi "manifiesto creativo": las ideas que guían mi trabajo y que merecen ser publicadas
- Cómo articular mi proceso creativo de forma que sea interesante para medios no especializados
- La diferencia entre hablar de "qué hice" vs. "por qué importa": cómo elevar el nivel de la conversación sobre mi trabajo
- Construcción de mi posicionamiento en el ecosistema del diseño: con quién me asocio conceptualmente

**Área 2 — Mapa de publicaciones y plataformas:**
Diseña mi mapa de medios objetivo en el mundo del diseño:
- Publicaciones impresas y digitales de referencia en diseño gráfico, UX, branding, ilustración y diseño de producto
- Plataformas de comunidad con peso mediático (Behance, Dribbble, Are.na, Fonts In Use)
- Blogs y newsletters influyentes del sector del diseño que lean mis clientes ideales
- Medios de negocio que cubren diseño e innovación (cómo llegar a Forbes, FastCompany o El País desde el diseño)
- Diferencia en estrategia entre publicaciones indexadas por pares vs. publicaciones que llegan a decisores de compra

**Área 3 — Case studies y presentación de proyectos:**
Explica cómo convertir proyectos en historias publicables:
- Estructura de un case study que una publicación de diseño quiera publicar
- Fotografía y documentación del proceso creativo: qué materiales necesitas preparar para los medios
- Cómo redactar el pitch de un proyecto para enviarlo a una editorial o publicación
- Gestión de la confidencialidad con clientes: cómo publicar trabajo protegido bajo NDA
- Timing de la publicación: cuándo publicar un proyecto para maximizar impacto

**Área 4 — Premios y reconocimiento sectorial:**
Diseña una estrategia de premios como canal de PR:
- Cuáles son los premios con mayor impacto mediático en mi especialidad
- Cómo preparar presentaciones ganadoras para jurados de diseño
- Uso de los premios como palanca para cobertura mediática posterior
- Creación de un calendario anual de concursos y convocatorias relevantes

**Área 5 — Construcción de autoridad editorial:**
Explica cómo generar visibilidad siendo tú el que publica:
- Estrategia de escritura sobre diseño: qué temas tienen más probabilidad de ser citados y compartidos
- Cómo construir una newsletter de diseño con audiencia en 12 meses
- Participación como ponente en conferencias: cómo proponer charlas y qué eventos priorizar
- Posicionamiento como docente o mentor: cómo el teaching genera PR de forma orgánica

**Entregable:**
Plan de visibilidad creativa para 12 meses con: calendario de publicaciones y envío de case studies, lista de 15 publicaciones objetivo con criterios editoriales de cada una, 3 ideas de artículos originales sobre diseño que tengan potencial mediático, y métricas de éxito adaptadas a objetivos creativos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir visibilidad mediática para diseñadores y estudios creativos',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'PR y medios como herramienta de enablement de ventas',
                'description'      => 'Aprende a usar la cobertura mediática como palanca de ventas: cómo la visibilidad en medios reduce el ciclo de venta, aumenta la credibilidad en reuniones con clientes y facilita la apertura de puertas en cuentas clave. El PR como acelerador comercial.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en sales enablement y comunicaciones corporativas, con experiencia demostrando cómo las relaciones con medios y la cobertura PR impactan directamente en las métricas de ventas B2B.

Quiero diseñar una estrategia de PR que sirva directamente como herramienta de apoyo a mi equipo comercial y acelerador del ciclo de ventas.

**Mi contexto comercial:**
- Sector: [B2B tech / consultoría / servicios financieros / manufactura / salud / otro]
- Tipo de venta: [enterprise / mid-market / transaccional]
- Ciclo de venta promedio: [semanas / meses]
- Principales objeciones en el proceso de venta: [confianza en la marca / falta de referencias / competencia más conocida / dudas sobre estabilidad de la empresa]
- Canales de venta actuales: [directo / partners / inside sales / field sales]

**Bloque 1 — PR como señal de credibilidad comercial:**
Explica cómo la cobertura mediática impacta en el proceso de venta:
- Por qué los prospectos buscan tu empresa en Google y qué encuentran: audit de presencia mediática
- El poder de la "tercera voz": por qué un artículo en El Economista vale más en una propuesta que tu propio claim
- Cómo los compradores enterprise usan los medios para validar decisiones de compra
- El efecto halo de los medios: cómo una aparición en TechCrunch o Expansion abre puertas en cuentas enterprise

**Bloque 2 — Sales toolkit basado en PR:**
Diseña un conjunto de herramientas de ventas construidas sobre cobertura mediática:
- Cómo integrar clippings de prensa en propuestas comerciales de forma natural y efectiva
- Uso de artículos de medios en las secuencias de LinkedIn y email outreach
- One-pagers de credibilidad mediática para el equipo de ventas
- Briefing para comerciales sobre cómo referenciar la cobertura en reuniones sin sonar presuntuoso
- Página de "press" en la web orientada a conversión comercial, no solo a medios

**Bloque 3 — Generación de contenido PR orientado a ventas:**
Explica qué tipo de cobertura mediática tiene mayor impacto comercial:
- Estudios y datos propios que convierten: cómo diseñar research que genere PR y leads simultáneamente
- Case studies de clientes en medios: cómo convertir un éxito de cliente en cobertura que genere referencias
- Posicionamiento como thought leader del CEO o especialistas: cómo los artículos de opinión en medios de negocio generan inbound
- Premios y rankings del sector: cuáles tienen valor comercial real y cuáles son vanity metrics

**Bloque 4 — Account-based PR:**
Diseña una estrategia de PR dirigida a cuentas específicas:
- Técnica de "PR dirigido": cómo generar cobertura en medios que leen específicamente tus cuentas objetivo
- Uso de PR para "marcar presencia" antes de llamadas de prospección
- Cómo hacer que tus prospectos vean tu marca en los medios que consumen sin comprar publicidad
- Integración de PR y ABM (Account-Based Marketing) en una estrategia unificada

**Bloque 5 — Medición del impacto comercial del PR:**
Establece un sistema para conectar PR con resultados de ventas:
- Cómo trackear si los prospectos llegaron influenciados por cobertura mediática
- Preguntas para incluir en el proceso de qualifying para medir la influencia del PR
- Métricas de PR con correlación comercial: búsquedas de marca, tráfico directo, inbound qualificado
- Argumentación del ROI de PR ante dirección comercial y CFO

**Entregable:**
Plan integrado de PR y enablement de ventas con: calendario de iniciativas de PR por trimestre, kit de materiales de ventas basados en PR, protocolo de briefing al equipo comercial sobre uso de prensa, y dashboard de métricas que conecten PR con pipeline comercial.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Usar PR y medios como acelerador del ciclo de ventas',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Comunicación con medios para el lanzamiento de producto',
                'description'      => 'Diseña la estrategia de PR para el lanzamiento de tu producto: cómo crear un calendario de comunicación con medios, gestionar la cobertura pre-lanzamiento, ejecutar el día de lanzamiento y mantener el momentum mediático en las semanas siguientes.',
                'prompt_content'   => <<<'EOT'
Actúa como un PR Manager especializado en lanzamientos de producto, con experiencia gestionando el go-to-market comunicacional de aplicaciones móviles, plataformas SaaS y productos físicos de consumo en mercados europeos y latinoamericanos.

Necesito diseñar la estrategia de PR completa para el lanzamiento de mi producto, incluyendo la fase pre-lanzamiento, el día de lanzamiento y el seguimiento post-lanzamiento.

**Contexto del producto:**
- Tipo de producto: [app / SaaS / marketplace / hardware / plataforma web]
- Mercado objetivo: [España / LATAM / Europa / global]
- Audiencia principal: [consumidores / profesionales / empresas / developers]
- Fecha prevista de lanzamiento: [semanas hasta el lanzamiento]
- Hitos previos que apoyan la narrativa: [financiación / beta con usuarios / primeros clientes / premios]
- Diferenciación del producto: [qué hace que sea genuinamente diferente de lo que existe]

**Fase 1 — Preparación (8-12 semanas antes):**
Diseña las actividades de PR en la fase de preparación:
- Construcción de la narrativa de lanzamiento: el "pitch de una oración" que usarán los periodistas en sus titulares
- Desarrollo del media kit completo: qué debe incluir obligatoriamente y en qué formatos
- Identificación y priorización de medios: cuáles van en la A-list (exclusiva/embargo), B-list (briefing previo) y C-list (nota general)
- Construcción de una lista de periodistas con contexto personalizado de por qué les interesa tu historia
- Identificación de embajadores y early adopters que puedan apoyar el lanzamiento con testimoniales

**Fase 2 — Pre-lanzamiento (4-8 semanas antes):**
Explica las tácticas de pre-lanzamiento:
- Estrategia de embargo: qué es, cuánto tiempo antes usarlo, cómo redactar el acuerdo y qué pasa si se rompe
- Gestión de exclusivas: cuántas dar, cómo seleccionar el medio, cómo negociar los términos
- Pre-briefings con analistas del sector y medios especializados
- Construcción de anticipación en redes sociales y comunidades sin revelar detalles prematuramente
- Gestión de filtraciones no deseadas: qué hacer si el lanzamiento se filtra antes de tiempo

**Fase 3 — Lanzamiento (semana clave):**
Diseña el playbook del día de lanzamiento:
- Timeline hora a hora del día de lanzamiento: cuándo se levanta el embargo, cuándo sale la nota de prensa, cuándo se activan redes sociales
- Protocolo de monitorización de cobertura en tiempo real y respuesta a periodistas ese día
- Gestión de errores o problemas técnicos durante el lanzamiento y su comunicación
- Cómo amplificar la cobertura de medios en los canales propios ese mismo día
- Qué hacer si la cobertura es menor de la esperada

**Fase 4 — Post-lanzamiento (semanas 2-8):**
Explica cómo mantener el momentum mediático:
- Segunda oleada de PR: nuevos ángulos de la historia para medios que no cubrieron el lanzamiento
- Uso de los primeros datos de adopción como gancho para nuevos artículos
- Gestión de primeras reseñas y análisis de usuarios en medios
- Estrategia de testimoniales de usuarios reales en medios

**Fase 5 — Gestión de crisis durante el lanzamiento:**
Prepara un protocolo de gestión de crisis:
- Escenarios de crisis más comunes en un lanzamiento de producto (bug crítico, mala reseña viral, comparación negativa con competidor)
- Protocolo de respuesta en las primeras 4 horas de una crisis de PR
- Cómo comunicar problemas técnicos sin amplificar el ruido negativo

**Entregable:**
Timeline completo de PR para el lanzamiento con actividades semana a semana, plantillas de nota de prensa y embargo, lista de medios objetivo con tier y ángulo de pitch personalizado, y protocolo de gestión de crisis.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Planificar la estrategia de PR para el lanzamiento de un producto',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Employer branding y PR de talento: cómo los medios atraen candidatos',
                'description'      => 'Diseña una estrategia de employer branding y PR de talento que posicione a tu empresa como un lugar excepcional para trabajar. Aprende a usar los medios, las redes sociales y los canales de comunicación para atraer perfiles difíciles de encontrar sin depender únicamente de portales de empleo.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de People con experiencia en employer branding y comunicaciones de talento, especializado en construir la reputación empleadora de empresas tecnológicas y de alto crecimiento para atraer perfiles escasos y exigentes.

Necesito diseñar una estrategia integral de employer branding y PR de talento que convierta nuestra empresa en un destino de elección para los profesionales que queremos contratar.

**Contexto de mi empresa:**
- Sector: [tecnología / finanzas / consultoría / salud / retail / otro]
- Tamaño actual: [empleados] y proyección a 12 meses: [objetivo de contratación]
- Perfiles más difíciles de atraer: [ingenieros senior / data scientists / product managers / commercial profiles / etc.]
- Competidores por talento: [empresas con las que compito por los mismos perfiles]
- Propuesta de valor actual como empleador: [salario / equity / misión / flexibilidad / impacto / aprendizaje]
- Presencia actual en medios de empleo: [Glassdoor / LinkedIn / Indeed rating y reseñas]

**Pilar 1 — Employee Value Proposition (EVP):**
Ayúdame a construir y articular mi propuesta de valor como empleador:
- Framework para identificar qué hace genuinamente único trabajar en mi empresa (más allá de los claims genéricos)
- Cómo validar la EVP con empleados actuales: metodología de entrevistas internas y encuestas
- Desarrollo de mensajes de EVP diferenciados por perfil objetivo: el mensaje para un ingeniero senior no es el mismo que para un comercial
- Traducción de la EVP en contenido concreto: qué historias, datos y testimoniales la hacen creíble

**Pilar 2 — PR en medios para atraer talento:**
Diseña una estrategia de PR orientada a candidatos:
- Medios donde buscan empleo o siguen noticias los perfiles técnicos y especializados que necesito
- Cómo aparecer en rankings y listas de "mejores empresas para trabajar": requisitos, proceso y beneficios
- Artículos sobre cultura de empresa: qué ángulos tienen más probabilidad de publicarse en medios de empleo y negocio
- Presencia en medios especializados del sector donde están los candidatos (ej: medios tech para captar developers)
- Cómo convertir el crecimiento de la empresa o logros de negocio en historias que atraigan talento

**Pilar 3 — Empleados como embajadores de marca:**
Explica cómo convertir a tus empleados en el mejor canal de PR:
- Programa de employee advocacy: cómo motivar a los empleados a compartir contenido sobre la empresa sin forzarlos
- Apoyo a los empleados para que construyan su marca personal (conferencias, artículos, LinkedIn) mientras representan a la empresa
- Gestión de reseñas en Glassdoor: cómo responder a críticas y fomentar reseñas positivas auténticamente
- Protocolo para que empleados participen en entrevistas con medios de forma segura y efectiva

**Pilar 4 — Contenido de employer branding:**
Diseña un plan de contenido de employer branding:
- Tipos de contenido con mayor impacto en atracción de talento: behind the scenes, day-in-the-life, team spotlights, aprendizajes
- Calendario de contenido mensual de employer branding para LinkedIn, Instagram y YouTube
- Cómo documentar y compartir la cultura de empresa de forma auténtica (no corporativa)
- Uso del blog de empresa para mostrar profundidad técnica y atraer perfiles especializados

**Pilar 5 — Medición del PR de talento:**
Establece métricas de éxito:
- Indicadores de employer brand: awareness entre candidatos, calidad del pipeline, ratio de aceptación de ofertas, reseñas en Glassdoor
- Cómo preguntar a los candidatos cómo llegaron a la empresa y qué influyó en su decisión
- Tracking de menciones en medios y conversaciones en comunidades donde está el talento objetivo

**Entregable:**
Estrategia de employer branding para 12 meses con: EVP documentada por perfil objetivo, plan de contenido trimestral, lista de medios y rankings de empleo objetivo, protocolo de employee advocacy, y dashboard de métricas de employer brand.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar estrategia de employer branding y PR de talento',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Comunicación financiera y PR con inversores y medios económicos',
                'description'      => 'Diseña una estrategia de comunicación financiera que gestione las relaciones con inversores, analistas y medios económicos. Aprende a presentar los resultados de tu empresa de forma transparente, gestionar las expectativas del mercado y construir credibilidad financiera en medios especializados.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en comunicación financiera e Investor Relations (IR) con experiencia en empresas cotizadas, startups en proceso de fundraising y pymes en expansión que buscan visibilidad en medios económicos.

Necesito diseñar una estrategia de comunicación financiera que construya credibilidad con inversores, analistas y medios económicos mientras gestiona las expectativas del mercado de forma efectiva.

**Mi contexto financiero y empresarial:**
- Tipo de empresa: [startup / pyme / empresa cotizada / empresa en proceso de salida a bolsa]
- Situación financiera: [en crecimiento / rentable / en proceso de fundraising / post-IPO]
- Audiencias financieras clave: [VCs / business angels / analistas / medios económicos / accionistas minoristas]
- Objetivos de comunicación financiera: [captación de inversión / gestión de accionistas / credibilidad para clientes / preparación de M&A]
- Herramientas actuales: [deck de inversores / sala de prensa / comunicados de resultados / reuniones con analistas]

**Módulo 1 — Narrative financiero y storytelling de resultados:**
Ayúdame a comunicar mis resultados financieros de forma impactante:
- Cómo construir una narrativa financiera que conecte los números con la estrategia y el mercado
- La diferencia entre comunicar resultados a inversores, a medios y a empleados: cómo adaptar el mensaje
- Técnicas de storytelling financiero: cómo hacer que los números cuenten una historia de progreso y credibilidad
- Manejo de resultados negativos o mixtos: cómo comunicar un trimestre difícil sin perder la confianza del mercado
- Gestión de expectativas: por qué la consistencia entre lo prometido y lo entregado es la variable más importante

**Módulo 2 — Relaciones con medios económicos:**
Diseña mi estrategia de relaciones con prensa financiera:
- Mapa de medios económicos relevantes según mi tipo de empresa y mercado (Expansion, CincoDías, El Economista, Forbes, Financial Times, Bloomberg)
- Cómo construir relaciones con periodistas económicos especializados en mi sector
- Tipos de historias que los medios económicos publican de empresas no cotizadas
- Cómo usar hitos financieros (financiación, breakeven, expansión, adquisición) para generar cobertura mediática
- Gestión de filtraciones de información financiera sensible antes de comunicados oficiales

**Módulo 3 — Investor Relations para startups:**
Explica las mejores prácticas de IR para empresas en fase de crecimiento:
- Estructura de las actualizaciones periódicas a inversores: qué incluir, qué frecuencia y qué formato
- Cómo preparar el investor day o la presentación de resultados anual
- Gestión de conversaciones difíciles con inversores cuando los resultados no son los esperados
- Construcción de credibilidad con analistas de venture capital y private equity
- Protocolo de comunicación durante un proceso de fundraising activo

**Módulo 4 — Gestión de crisis financiera y reputación:**
Diseña un protocolo de comunicación para escenarios críticos:
- Cómo comunicar una reestructuración, reducción de plantilla o cierre de línea de negocio
- Respuesta a rumores en medios sobre dificultades financieras de la empresa
- Gestión de la comunicación durante un cambio de CEO o del equipo directivo
- Comunicación de una fusión o adquisición: timing, mensajes clave y gestión de filtración

**Módulo 5 — Comunicación con mercados de capitales:**
Para empresas cotizadas o en proceso de salida a bolsa:
- Estructura y contenido de los comunicados de resultados trimestrales
- Gestión del silent period antes de resultados
- Protocolo para eventos materiales: cómo determinar qué requiere comunicado de hecho relevante
- Preparación de la presentación del equipo directivo para el roadshow con inversores institucionales

**Entregable:**
Manual de comunicación financiera con: narrativa financiera adaptada a cada audiencia, calendario anual de comunicaciones de resultados y hitos, plantillas de comunicados de prensa financieros, protocolo de gestión de crisis financiera, y guía de relaciones con medios económicos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar estrategia de comunicación financiera e investor relations',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión de PR legal y comunicación en litigios de alto perfil',
                'description'      => 'Aprende a gestionar la comunicación pública durante litigios, investigaciones regulatorias o controversias legales de alto perfil. La intersección entre estrategia legal y comunicación mediática puede determinar el resultado de un caso tanto como los argumentos jurídicos.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en comunicación de crisis y PR legal, con experiencia trabajando junto a equipos jurídicos en la gestión de la narrativa pública durante litigios complejos, investigaciones regulatorias y controversias corporativas de alto impacto mediático.

Necesito entender cómo gestionar la comunicación pública cuando mi empresa o cliente está involucrado en un proceso legal de alto perfil, sin comprometer la estrategia jurídica ni agravar la situación reputacional.

**Contexto del asunto:**
- Tipo de situación: [litigio civil / investigación regulatoria / proceso penal / conflicto laboral mediático / reclamación de consumidores / conflicto de propiedad intelectual]
- Partes involucradas: [empresa como demandante / como demandada / individuo / sector regulado]
- Nivel de exposición mediática: [local / nacional / internacional / redes sociales]
- Objetivo principal: [proteger reputación / influir en percepción pública / minimizar daños colaterales / preparar terreno para acuerdo]
- Sensibilidad de la información: [alta confidencialidad requerida]

**Módulo 1 — Marco estratégico de comunicación legal:**
Establece los principios básicos de la comunicación en contextos legales:
- La regla de oro: cuándo hablar y cuándo el silencio es la mejor estrategia de PR
- Diferencia entre silencio estratégico, "sin comentarios" y comunicación proactiva: cuál usar en cada momento
- Cómo coordinar la estrategia de comunicación con la estrategia legal: quién tiene la última palabra
- El principio de consistencia: por qué lo que dices en los medios no puede contradecir tu posición legal
- Gestión del "ruido de fondo": cómo manejar rumores y especulaciones sin alimentarlos

**Módulo 2 — Coordinación entre equipo legal y de comunicaciones:**
Diseña el protocolo de trabajo entre abogados y comunicadores:
- Estructura del comité de crisis legal-comunicaciones: quién decide qué
- Protocolo de aprobación de mensajes públicos con el equipo legal antes de cualquier declaración
- Documentación de todas las comunicaciones públicas como parte del expediente legal
- Gestión de las solicitudes de comentario de medios: protocolo de respuesta y timing
- Cómo informar al equipo directivo sobre el estado de la cobertura mediática sin comprometer el privilegio abogado-cliente

**Módulo 3 — Gestión de medios durante el proceso legal:**
Explica las tácticas de comunicación durante litigios activos:
- Declaraciones ante los medios: cuándo hacerlas, quién las hace y qué nivel de detalle incluir
- Gestión de filtraciones de documentos legales a medios: respuesta y contención
- Cómo manejar periodistas de investigación que tienen información parcial sobre el caso
- Uso de portavoces externos (expertos independientes) para gestionar la narrativa
- Estrategia de redes sociales durante un proceso legal activo

**Módulo 4 — Comunicación interna durante crisis legal:**
Diseña la comunicación con empleados y stakeholders internos:
- Mensajes para el equipo sobre el proceso legal: qué explicar y qué no
- Protocolo para empleados ante preguntas de familiares, clientes o medios
- Comunicación con el consejo de administración y accionistas
- Gestión del impacto en la moral del equipo durante procesos legales largos

**Módulo 5 — Post-resolución y recuperación reputacional:**
Explica qué hacer una vez resuelto el asunto legal:
- Comunicación del resultado: cómo enmarcarlo independientemente de si es favorable o no
- Plan de recuperación reputacional a 6-12 meses: reconstrucción de la narrativa de la empresa
- Lecciones aprendidas: cómo convertir la experiencia en una historia de resiliencia y mejora
- Gestión del "long tail" mediático: cómo manejar que los artículos negativos sigan indexando en Google

**Importante:**
Incluye una sección sobre los límites éticos y legales de la comunicación durante litigios: qué nunca debe hacerse desde PR que pueda comprometer el proceso legal o exponer a la empresa a responsabilidades adicionales.

**Entregable:**
Manual de gestión de comunicación en crisis legal con: protocolo de decisión para cada tipo de situación, plantillas de declaraciones adaptables, guía de coordinación legal-comunicaciones, y plan de recuperación reputacional post-resolución.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar comunicación y PR durante procesos legales de alto perfil',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'PR de clientes y casos de éxito como motor de reputación',
                'description'      => 'Aprende a convertir los éxitos de tus clientes en activos de relaciones públicas que generan visibilidad, credibilidad y nuevos clientes. El Customer Success tiene acceso privilegiado a las mejores historias de tu empresa: aprende a extraerlas y publicarlas.',
                'prompt_content'   => <<<'EOT'
Actúa como un profesional de Customer Success y comunicaciones con experiencia construyendo programas de customer advocacy y convirtiendo historias de clientes en activos de PR que generan cobertura mediática, referencias y nuevas oportunidades comerciales.

Necesito diseñar un programa completo de PR basado en casos de éxito de clientes que funcione como motor de reputación y generación de negocio para mi empresa.

**Mi contexto de CS y PR:**
- Tipo de producto/servicio: [SaaS / servicios profesionales / plataforma / consultoría / otro]
- Segmento de clientes: [enterprise / mid-market / pymes]
- Número de clientes en cartera: [aproximado]
- Éxitos más destacados que tengo en cartera: [describe 2-3 historias de impacto sin revelar datos confidenciales]
- Objetivos de PR con clientes: [cobertura en medios / referencias comerciales / premios de sector / content marketing]
- Restricciones habituales: [NDA / clientes en sectores regulados / baja disposición a aparecer públicamente]

**Bloque 1 — Identificación y priorización de historias:**
Diseña un sistema para identificar las mejores historias de clientes para PR:
- Criterios para seleccionar clientes con potencial mediático: impacto cuantificable, narrativa transformadora, sector relevante
- Cómo detectar momentos óptimos para proponer una historia a un cliente (renovación, expansión, NPS alto)
- Clasificación de historias: cuáles son para medios generalistas, cuáles para trade press, cuáles para premios
- Proceso de conversación inicial con el cliente para explorar su disposición a participar en PR

**Bloque 2 — Programa de customer advocacy:**
Diseña un programa estructurado de embajadores de cliente:
- Tipos de participación en el programa de advocacy: testimoniales, case studies, referencias, eventos, medios
- Incentivos para clientes que participan: visibilidad, networking, acceso a producto, reconocimiento
- Gobernanza del programa: cómo gestionar las relaciones con los advocacy champions a lo largo del tiempo
- Onboarding de nuevos advocacy champions: primeros pasos y gestión de expectativas

**Bloque 3 — Creación de case studies con potencial mediático:**
Explica cómo construir case studies que los medios quieran publicar:
- Estructura de un case study para medios vs. para la web de la empresa: diferencias clave
- Las 5 preguntas que debe responder todo case study para ser publicable: antes, después, cómo, cuánto, por qué importa
- Cómo obtener datos concretos de impacto que hagan el case study irresistible (ROI, ahorro de tiempo, incremento de ingresos)
- Gestión de la revisión del cliente: cómo obtener aprobación sin que el contenido quede esterilizado
- Formato multimedia del case study: vídeo, audio y visual para ampliar el alcance

**Bloque 4 — Colocación del contenido en medios:**
Diseña la estrategia de distribución de las historias de clientes:
- Tipos de medios donde un case study de cliente tiene cabida: trade press, medios de negocio, podcasts, newsletters
- Cómo adaptar el mismo caso de éxito a diferentes medios y formatos sin repetirse
- Pitching conjunto con el cliente: cómo presentar a dos empresas como protagonistas de una historia
- Uso de casos de éxito en premios del sector: cuáles aplicar y cómo construir la candidatura
- Distribución orgánica: cómo hacer que el cliente comparta la historia con su propia red

**Bloque 5 — Integración de PR con el ciclo de CS:**
Explica cómo el PR de clientes refuerza la retención y expansión:
- Cómo participar en PR fortalece el vínculo entre el cliente y la empresa
- Uso de los case studies como herramienta de QBR: mostrar al cliente el valor generado de forma narrativa
- Cómo los testimoniales públicos reducen el riesgo de churn: el cliente que ha hablado bien de ti en medios difícilmente se va

**Entregable:**
Manual del programa de customer advocacy para PR con: proceso completo desde identificación hasta publicación, plantilla de case study con potencial mediático, protocolo de aprobación de clientes, lista de medios objetivo por sector, y métricas del programa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Convertir casos de éxito de clientes en activos de PR',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'PR y visibilidad mediática para freelancers y consultores independientes',
                'description'      => 'Aprende a construir visibilidad mediática como freelancer o consultor independiente sin agencia de PR ni grandes presupuestos. La cobertura en medios correctos puede transformar tu posicionamiento, justificar tarifas más altas y abrir puertas a proyectos imposibles de conseguir de otra forma.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de marca personal y PR especializado en profesionales independientes, freelancers de alto valor y consultores especializados que quieren construir visibilidad mediática de forma autónoma y con recursos limitados.

Necesito una estrategia práctica y realista de PR personal que me permita aparecer en medios relevantes para mi sector sin agencia y con tiempo limitado, construyendo una reputación que justifique tarifas premium y atraiga mejores clientes.

**Mi perfil profesional:**
- Especialidad: [diseño / consultoría estratégica / desarrollo / marketing / finanzas / legal / RRHH / otra]
- Tipo de clientes objetivo: [pymes / startups / corporaciones / particulares con alto poder adquisitivo]
- Ticket promedio de mis proyectos: [rango]
- Porcentaje del negocio que viene por referencia vs. captación activa: [estimación]
- Presencia actual en medios: [ninguna / alguna mención espontánea / colaboraciones puntuales]
- Tiempo disponible para PR: [horas por semana]

**Área 1 — Construcción de autoridad temática:**
Diseña mi estrategia de posicionamiento como referente:
- Identificación de los 2-3 temas en los que tengo perspectiva única y puedo hablar con autoridad real
- Cómo diferenciarse de los miles de "expertos" en LinkedIn: qué es un punto de vista genuinamente original
- Construcción de mi "tesis" sobre mi especialidad: la posición que me hace interesante para medios
- Cómo articular mis ideas de forma que sean tanto publicables como útiles para mis clientes potenciales

**Área 2 — Mapa de medios y oportunidades para independientes:**
Explica qué medios son realistas y valiosos para un freelancer:
- Medios especializados en mi sector que son accesibles para contribuidores independientes
- Medios de emprendimiento y lifestyle profesional con alto alcance entre mis clientes objetivo
- Newsletters de nicho con audiencias de alto valor y apertura a colaboradores externos
- Podcasts como canal de PR: ventajas, cómo encontrar los adecuados y cómo proponer mi participación
- La trampa de los medios de gran alcance pero audiencia irrelevante: por qué un blog de nicho puede valer más que El País

**Área 3 — Tácticas de PR para independientes con poco tiempo:**
Diseña un sistema de PR que quepa en mi agenda:
- La técnica del "experto disponible": registro en plataformas de conexión con periodistas (HARO, Qwoted, Terkel, Help a Reporter)
- Sistema de alertas para responder oportunidades de PR en tiempo real
- Rutina semanal de PR en 2 horas: qué hacer cada semana para mantener el pipeline mediático activo
- Reaprovechamiento de contenido: cómo un artículo se convierte en episodio de podcast, en post de LinkedIn y en pitch para medios
- Colaboraciones estratégicas con otros freelancers para amplificar mutuamente la visibilidad

**Área 4 — Construcción de la plataforma de contenido propio:**
Explica cómo el contenido propio es la base del PR externo:
- Por qué un blog, newsletter o podcast propio hace que los medios externos te tomen en serio
- Cómo crear contenido que los periodistas encuentren cuando investigan un tema
- El rol de LinkedIn como plataforma de PR para profesionales: publicación de artículos long-form, gestión de la reputación
- Frecuencia y consistencia: cuánto contenido es suficiente y cómo mantenerlo sin quemarse

**Área 5 — Impacto del PR en el modelo de negocio freelance:**
Muéstrame la conexión entre visibilidad mediática y resultados económicos:
- Cómo y cuándo el PR justifica subida de tarifas: la señal de mercado que envía aparecer en medios
- Uso de la cobertura mediática en el proceso de venta: cómo introducirla sin sonar pretencioso
- El efecto compuesto del PR: por qué la visibilidad se autoamplifica con el tiempo
- Métricas de éxito del PR para freelancers: no es reach, es calidad de leads y conversación que genera

**Entregable:**
Plan de PR personal para 6 meses con: lista de 10 medios y podcasts objetivo con criterios de selección, rutina semanal de PR de 2 horas, 5 ideas de artículos propios con potencial de ser recogidos por medios externos, sistema de seguimiento de oportunidades de PR, y estimación del impacto esperado en el posicionamiento y las tarifas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir visibilidad mediática como freelancer o consultor independiente',
                'vote_score'       => 43,
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
