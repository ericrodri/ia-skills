<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills137Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Content strategy a largo plazo',
                'description'      => 'Diseña una estrategia de contenidos que posiciona en Google, convierte en leads y educa al mercado durante 2-3 años, no solo el próximo trimestre.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de contenidos con experiencia en SEO, inbound marketing y construcción de audiencias a largo plazo. Voy a describir mi empresa y mi mercado, y necesito que me ayudes a diseñar una estrategia de contenidos que funcione durante los próximos 2-3 años, no solo el próximo mes.

Mi empresa y contexto:
[Describe tu empresa: qué vendes, a quién, ticket medio, ciclo de compra y en qué fase de crecimiento estás: ¿todavía buscando product-market fit, en fase de growth, o consolidada en el mercado?]

Mi situación de contenidos actual:
[¿Tienes blog, newsletter, canal de YouTube, redes sociales? ¿Cuánto tráfico orgánico tienes hoy, cuántos leads genera el contenido y cuántas personas trabajan en crear contenido?]

Mis competidores y el mercado:
[¿Quiénes son tus principales competidores en contenido (no solo en producto)? ¿Hay medios especializados en tu sector que marquen la agenda?]

Con ese contexto, diseña mi estrategia de contenidos a largo plazo:

**1. Definición del territorio de contenido**
Ayúdame a definir el espacio de contenido donde quiero ser la referencia: el tema paraguas lo suficientemente amplio para que sea relevante durante años, los subtemas donde puedo dominar y los que debo evitar porque ya los poseen otros. El objetivo es que en 2 años, cuando alguien en mi industria tenga una duda sobre ese territorio, piense primero en mi empresa.

**2. Análisis de audiencia en profundidad**
Define los 3 perfiles de lector de mi contenido (distintos del buyer persona de ventas): su nivel de conocimiento del tema, qué preguntas tienen en cada etapa del viaje del comprador, dónde consumen contenido hoy y qué formato prefieren. El contenido que funciona a largo plazo sirve a los lectores, no al vendedor.

**3. Arquitectura de contenido (topic clusters)**
Diseña la estructura de topic clusters para los próximos 2 años: los 5-7 pilares temáticos principales, el contenido hub de cada pilar (el artículo que lo define, largo y definitivo), los contenidos spoke que lo rodean (más específicos y orientados a búsquedas de cola larga) y las interconexiones entre clusters para construir autoridad topical.

**4. Estrategia de keywords a largo plazo**
Construye la estrategia de keywords que equilibra volumen con intención: las keywords de alto volumen donde necesitamos posicionarnos aunque la competencia sea alta (estrategia a 18-24 meses), las keywords de cola larga donde podemos ganar posición en 3-6 meses, y las keywords de conversión directa que nos importan aunque tengan poco volumen.

**5. Calendario editorial para los próximos 12 meses**
Diseña el calendario editorial con la distribución de recursos: cuántos contenidos nuevos crear por mes, cuántos actualizar (los contenidos existentes degradan su posición con el tiempo), qué formatos producir (artículos largo, guías, estudios de caso, infografías, vídeos) y cómo alinear la producción de contenido con el ciclo comercial de la empresa.

**6. Distribución y amplificación**
Explica cómo distribuir cada pieza de contenido para maximizar su alcance: los canales propios (newsletter, redes sociales, comunidades), los canales prestados (publicaciones en medios del sector, podcasts de terceros, sindicación) y la reutilización del contenido (de artículo largo a serie de posts, a infografía, a episodio de podcast).

**7. Medición del ROI del contenido**
Define el framework de métricas para los próximos 3 años: métricas de audiencia (tráfico, suscriptores, recurrencia), métricas de engagement (tiempo en página, tasa de scroll, comentarios), métricas de negocio (leads generados, oportunidades influenciadas, clientes que citaron el contenido como primer contacto) y la cadencia de revisión de cada grupo de métricas.

**8. Construcción de autoridad y relaciones**
Diseña la estrategia de link building y relaciones con el sector que acompaña al contenido: qué proyectos de contenido atraen links naturalmente (estudios originales, herramientas gratuitas, rankings del sector), cómo colaborar con referentes de la industria en contenido conjunto y cómo convertir el contenido en invitaciones a hablar en eventos.

**9. Evergreen vs. trending: el equilibrio**
Explica cómo equilibrar el contenido evergreen (el 80% que dura años) con el contenido de actualidad (el 20% que capitaliza momentos): cómo identificar los temas de actualidad que merecen la inversión, cómo escribir sobre tendencias de forma que el artículo siga siendo relevante dentro de dos años, y cómo usar la actualidad para rejuvenecer contenido evergreen.

**10. El plan de los primeros 90 días**
Dame el plan concreto para los primeros 90 días que sienta las bases de la estrategia: qué auditar del contenido existente, qué eliminar o consolidar, qué crear primero para generar tracción inicial, y los tres hitos que confirmarán que la estrategia está en el camino correcto al final del trimestre.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar una estrategia de contenidos que posiciona, convierte y educa al mercado durante 2-3 años.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Developer relations y contenido técnico',
                'description'      => 'El developer que crea contenido técnico de calidad para atraer a otros developers: tutoriales, charlas y la comunidad que convierte en evangelistas del producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Developer Relations y marketing técnico con experiencia construyendo programas de DevRel en empresas de developer tools y APIs. Quiero diseñar mi estrategia de DevRel y contenido técnico para atraer developers a mi producto o comunidad.

Mi contexto:
[Describe tu producto: ¿es una API, un framework, un SDK, una plataforma de infraestructura? ¿A qué tipo de developer va dirigido (frontend, backend, data, DevOps)? ¿Cuál es el stage de la empresa y cuántos developers tienes ya?]

Mis recursos actuales:
[¿Eres el único DevRel o hay equipo? ¿Qué presupuesto tienes para eventos y creación de contenido? ¿Tienes ya documentación, blog técnico o comunidad?]

Mis objetivos:
[¿Quieres crecer el número de developers registrados, mejorar la activación, reducir el churn, construir una comunidad activa, o posicionar la empresa como referente técnico?]

Con ese contexto, diseña mi programa de DevRel y contenido técnico:

**1. Definición de la propuesta de valor para developers**
Ayúdame a articular por qué un developer debería usar mi producto y contribuir a mi comunidad: el developer value proposition (no el pitch comercial, sino el valor técnico real), las fricciones que elimina respecto a las alternativas, y el mensaje que resuena con developers que toman decisiones técnicas vs developers que influyen pero no deciden.

**2. Estrategia de contenido técnico**
Diseña el mix de contenido técnico: tutoriales de primeros pasos (la experiencia del nuevo developer importa más que cualquier otra cosa), guías de casos de uso avanzados, comparativas honestas con alternativas, posts sobre decisiones de arquitectura internas y los formatos que funcionan mejor en mi nicho técnico (artículos, vídeos, notebooks, demos interactivas).

**3. Producción de tutoriales que realmente funcionan**
Explica cómo escribir tutoriales técnicos que el developer completa y no abandona a la mitad: la estructura óptima (el prerequisite check, el objetivo claro, los pasos numerados con código ejecutable, el troubleshooting de los errores más comunes), cómo mantenerlos actualizados cuando el API cambia, y cómo medir si un tutorial está funcionando más allá de las visitas.

**4. Programa de charlas y conferencias**
Construye la estrategia de presencia en eventos técnicos: qué conferencias priorizas según el tipo de developer que quieres atraer, cómo diseñar un abstract que es aceptado por los comités de selección, la estructura de la charla técnica que genera impacto y no es un demo de ventas encubierto, y cómo maximizar el retorno de cada evento.

**5. Construcción de comunidad**
Diseña la estrategia de comunidad: la plataforma adecuada para tu tipo de developer (Discord, Slack, Discourse, GitHub Discussions), el contenido que siembra para activar la participación, los roles de la comunidad (moderadores, contributors, evangelistas), y cómo pasar de una comunidad reactiva (que solo responde preguntas) a una proactiva (que genera contenido propio).

**6. Programa de Developer Advocates externos**
Construye el programa de colaboración con developers externos: cómo identificar a los developers que ya hablan de tu producto o tienen audiencia relevante, qué ofrecerles a cambio de su contenido (acceso anticipado, soporte dedicado, compensación económica), y cómo estructurar la colaboración para que el contenido que crean sea auténtico y no un anuncio.

**7. Developer Experience (DX) como contenido**
Explica cómo la mejora de la DX es en sí misma una estrategia de contenido: changelog con narrativa (no solo una lista de cambios), release notes que explican el por qué detrás de cada decisión, y la documentación que los developers citan cuando recomiendan tu producto. El producto bien documentado es marketing.

**8. Medición del impacto del DevRel**
Define las métricas de DevRel que prueban el valor ante la dirección: métricas de top of funnel (impresiones en conferencias, lectores de blog técnico, miembros de comunidad), métricas de activación (developers que van del registro al primer uso exitoso), y métricas de retención y advocacy (developers activos tras 90 días, contribuciones a la comunidad, mentions orgánicas en Twitter y Reddit).

**9. Relación entre DevRel y producto**
Describe cómo estructurar el feedback loop entre DevRel y el equipo de producto: cómo sistematizar el feedback de la comunidad para que llegue al PM con el contexto adecuado, cómo priorizar las peticiones de la comunidad junto al resto del backlog, y cómo comunicar a la comunidad cuándo una petición ha sido implementada para cerrar el ciclo.

**10. Plan de los primeros 6 meses**
Dame el roadmap de los primeros 6 meses del programa de DevRel: qué construir primero (la documentación de primeros pasos, el primer tutorial, el canal de comunidad), cómo medir el progreso semana a semana y los tres hitos que marcarán que el programa está funcionando y merece más inversión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir un programa de DevRel y contenido técnico que atrae developers y genera comunidad.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Portfolio de diseño que consigue trabajo',
                'description'      => 'Diseña tu portfolio para ser encontrado (SEO), convencer (case studies) y contratar (proceso de trabajo): los portafolios que realmente funcionan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en personal branding para diseñadores y en estrategia de portfolio con experiencia tanto en la contratación de diseñadores como en el asesoramiento de carreras creativas. Quiero construir un portfolio que no solo sea bonito sino que consiga entrevistas y clientes.

Mi perfil como diseñador:
[Describe tu especialidad: UX/UI, gráfico, motion, branding, ilustración, o combinación. Años de experiencia, los sectores en los que has trabajado y los tipos de proyecto que más disfrutas]

Mi objetivo con el portfolio:
[¿Buscas empleo en empresa (startup, agencia, corporación), trabajo freelance, o ambos? ¿Tienes perfil específico que quieres atraer: tech companies, marcas de consumo, ONGs?]

Mi situación actual:
[¿Tienes portfolio existente? ¿Qué resultados ha dado: entrevistas conseguidas, clientes que han contactado? ¿Cuáles son los principales proyectos que tienes para mostrar?]

Con ese contexto, diseña mi estrategia de portfolio:

**1. Posicionamiento y propuesta de valor**
Ayúdame a definir el posicionamiento de mi portfolio: no "diseñador UX con 5 años de experiencia" (eso lo dice todo el mundo) sino el nicho específico donde soy la mejor opción. Quién es mi lector ideal (el hiring manager de una startup fintech, el director creativo de una agencia boutique), qué problema resuelvo para ellos y cómo diferenciarte de los 200 portfolios que van a ver esa semana.

**2. Selección de proyectos**
Explica el criterio para seleccionar qué proyectos incluir: cuántos (menos es más, pero cuánto es suficiente), cómo equilibrar el tipo de trabajo (variedad vs especialización), qué hacer con proyectos de los que no tienes métricas de impacto, y cómo mostrar trabajo que está bajo NDA sin romperlo.

**3. Arquitectura del case study perfecto**
Diseña la estructura del case study que convence a un hiring manager en 3 minutos: el contexto del proyecto (qué problema, para quién, con qué restricciones), tu rol específico en el equipo (qué hiciste tú exactamente), el proceso de diseño con las decisiones clave explicadas, el resultado con métricas cuando sea posible, y lo que aprendiste. Incluye qué imágenes poner en cada sección y qué texto las acompaña.

**4. SEO para portfolios de diseño**
Construye la estrategia de SEO para que los recruiters te encuentren: las keywords que usan cuando buscan diseñadores de tu perfil (no solo "diseñador UX" sino combinaciones con sector, herramienta y nivel), cómo estructurar los títulos y descripciones de los proyectos, el contenido adicional (blog, notas de proceso) que genera tráfico orgánico y cómo optimizar los textos alternativos de las imágenes.

**5. La página de presentación personal**
Diseña el About page que convierte: la fotografía adecuada (y por qué importa más de lo que crees), el texto que en 3 párrafos explica quién eres, cómo trabajas y por qué te deberían contratar, las habilidades que listars y las que omites, y el CTA correcto para el tipo de trabajo que buscas.

**6. Mostrar el proceso de trabajo**
Explica cómo mostrar cómo piensas y trabajas, no solo el resultado final: wireframes y sketches que muestran la evolución, las decisiones que tomaste y por qué descartaste las alternativas, los problemas que encontraste y cómo los resolviste, y las iteraciones basadas en feedback del usuario. Los portfolios que solo muestran el resultado final son los que más se parecen entre sí.

**7. La plataforma y la tecnología**
Recomienda las opciones de plataforma para mi perfil: Behance y Dribbble para visibilidad en la comunidad, portfolio propio con Webflow o Cargo para máxima personalización, o una solución híbrida. Explica las ventajas y desventajas de cada opción, el dominio propio y el impacto en la percepción de profesionalidad.

**8. Distribución y visibilidad**
Diseña la estrategia de distribución del portfolio: cómo usar LinkedIn para que el portfolio llegue a quien te puede contratar, la presencia en comunidades de diseño donde los hiring managers también están (Design Week, Slack de diseño, Twitter de diseño), y cómo usar el portfolio como ancla de todas las conversaciones con potenciales clientes o empleadores.

**9. El portfolio en la entrevista**
Prepárate para presentar el portfolio en una entrevista: cómo narrar cada proyecto en 5 minutos (el timing importa), qué preguntas anticipar sobre cada decisión de diseño, cómo manejar los proyectos donde el resultado no fue exitoso o donde el cliente no siguió tus recomendaciones, y cómo adaptarte si el entrevistador hace preguntas inesperadas.

**10. Mantenimiento y evolución**
Define la rutina de mantenimiento del portfolio: cuándo añadir un proyecto nuevo (y si añades uno, tienes que quitar otro), cómo actualizar los case studies con métricas posteriores que no tenías al lanzarlo, cada cuánto revisar el posicionamiento para que siga siendo relevante a medida que evoluciona tu carrera, y las señales que indican que el portfolio necesita un rediseño completo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un portfolio de diseño que genera entrevistas y clientes a través de SEO, case studies y posicionamiento.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales content que acelera el cierre',
                'description'      => 'El contenido que ayuda al equipo de ventas a cerrar: battle cards, case studies, demos grabadas y los activos que aceleran el ciclo de venta en cada etapa del funnel.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Sales Enablement y creación de contenido de ventas con experiencia en empresas B2B con ciclos de venta complejos. Quiero diseñar un sistema de sales content que ayude al equipo comercial a cerrar más rápido y con mayor tasa de conversión.

Mi contexto comercial:
[Describe el producto o servicio, el ciclo de venta típico (días, semanas, meses), el número de personas involucradas en la decisión de compra del cliente y las principales objeciones que aparecen en el proceso]

Mi equipo de ventas:
[Número de AEs y SDRs, su nivel de experiencia, los principales cuellos de botella en el proceso de cierre y cuánto tiempo dedican hoy a crear su propio contenido de apoyo]

Lo que ya existe:
[Qué materiales de ventas tienes hoy: decks, one-pagers, demos, case studies, y cuál es la valoración del equipo sobre su utilidad real]

Con ese contexto, diseña mi sistema de sales content:

**1. Auditoría del proceso de venta y sus necesidades de contenido**
Mapea el proceso de venta etapa por etapa e identifica el contenido que falta o que existe pero no funciona: qué necesita el prospect en la etapa de descubrimiento para querer una demo, qué necesita en la etapa de evaluación para superar las objeciones técnicas, qué necesita para convencer al CFO, y qué necesita para firmar cuando el proceso se estanca.

**2. Battle cards**
Construye las battle cards para los 3 principales competidores: la propuesta de valor de cada competidor tal como la entiende el prospect (no como la queremos ver nosotros), las áreas donde el competidor es genuinamente más fuerte (sí, hay que ser honesto con esto), nuestras ventajas diferenciales reales en cada dimensión, y los mensajes exactos para cada objeción de comparación.

**3. Case studies que convierten**
Diseña el formato de case study que cierra deals: el perfil del cliente (sector, tamaño, problema previo) que hace que el lector se identifique, el problema específico antes de la solución, el proceso de implementación (para que el prospect vea que es manejable), los resultados con métricas concretas, y la cita del cliente que resume el valor. Define cuántos case studies necesitas y de qué tipo de clientes para cubrir los segmentos más frecuentes.

**4. Demo grabada y recursos de autoservicio**
Diseña la estrategia de demos: cuándo usar demo en vivo vs demo grabada, cómo producir una demo grabada que funciona sin el vendedor explicándola (narración clara, ritmo adecuado, casos de uso reales), y los recursos de autoservicio que permiten al prospect explorar el producto sin necesitar al AE para cada pregunta técnica.

**5. Materiales para el champion interno**
Construye el kit para el champion del cliente que tiene que vender el proyecto internamente: la presentación ejecutiva que puede copiar y pegar para el comité de dirección, la hoja de cálculo de ROI que él puede rellenar con sus datos, el email de resumen que envía a su equipo, y las respuestas a las preguntas difíciles que le van a hacer antes de la aprobación.

**6. Propuestas y documentación comercial**
Diseña la plantilla de propuesta que el AE puede personalizar en 30 minutos: la estructura (resumen ejecutivo, comprensión del problema, solución propuesta, ROI esperado, precio, siguientes pasos), el lenguaje que usa el cliente (no el nuestro), y la jerarquía de información para que el lector encuentre lo que busca aunque no la lea entera.

**7. Gestión de objeciones con contenido**
Construye el repositorio de objeciones y sus respuestas: las 10 objeciones más frecuentes organizadas por etapa del proceso, la respuesta recomendada con el argumento principal, el contenido de apoyo que refuerza la respuesta (un case study, un dato, un artículo técnico), y el proceso de actualización del repositorio cuando aparece una objeción nueva.

**8. Email templates y secuencias de seguimiento**
Diseña las plantillas de email para cada etapa: email de seguimiento post-demo con los recursos relevantes para ese prospect, email de nurture para los deals que se han enfriado, email de cierre cuando el proceso lleva más del doble del ciclo de venta habitual, y el email de reactivación para los deals que dijeron que no en el momento pero podrían estar listos ahora.

**9. Sistema de gestión y distribución del contenido**
Explica cómo organizar el sales content para que el equipo lo use: dónde vive cada activo (repositorio centralizado, integrado con el CRM), cómo naming los archivos para que el AE encuentre lo que busca en 30 segundos, y cómo medir qué contenido usa el equipo y cuál no se está usando aunque existe.

**10. Ciclo de actualización y mejora**
Define la cadencia de revisión del sales content: cada cuánto revisar las battle cards cuando cambia el mercado o los competidores lanzan nuevas features, cómo recoger el feedback del equipo de ventas sobre qué está funcionando y qué no, y quién es el responsable de mantener actualizado el repositorio sin convertirlo en un cuello de botella para el equipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crear el contenido que ayuda al equipo de ventas a cerrar más rápido en cada etapa del funnel.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product content marketing',
                'description'      => 'El contenido que explica el producto, educa al usuario y genera demanda: product demos, tours interactivos, changelogs y los formatos que convierten mejor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en product marketing y content strategy con experiencia en SaaS y productos digitales. Quiero diseñar la estrategia de contenido de producto que educa a los usuarios, reduce el tiempo hasta el valor y genera demanda orgánica.

Mi producto y contexto:
[Describe el producto: qué hace, para quién, en qué fase está (beta, crecimiento, maduro). ¿Cuáles son las features principales y las que más valor generan pero menos se usan?]

Mi audiencia:
[Perfil del usuario principal: cargo, sector, nivel técnico, cómo descubrió el producto y cuáles son sus principales frustraciones en los primeros días de uso]

Mi situación de contenido actual:
[¿Tienes base de conocimiento, blog de producto, changelog público, tutoriales en vídeo? ¿Cuál es la tasa de activación hoy y cuándo se producen la mayoría de abandonos?]

Con ese contexto, diseña mi estrategia de product content:

**1. Mapa de contenido por etapa del ciclo de vida**
Diseña el contenido necesario en cada etapa: contenido de descubrimiento para atraer a quien todavía no conoce el producto, contenido de activación para llevar al nuevo usuario al primer valor en el menor tiempo posible, contenido de adopción para que use más features, contenido de retención para que renueve, y contenido de expansión para que actualice de plan.

**2. Product demos que convierten**
Diseña la estrategia de demos: cuándo usar demo interactiva (Arcade, Navattic, Storylane) vs demo en vídeo vs demo en vivo con el equipo de ventas. Para las demos grabadas, la estructura que funciona: el problema que resuelve en 10 segundos, el flujo completo en menos de 3 minutos, y la llamada a la acción clara al final. Incluye cuántas demos necesitas (por caso de uso, por segmento, por etapa del funnel).

**3. Tours interactivos del producto**
Construye la estrategia de onboarding interactivo dentro del producto: el checklist de primeros pasos que lleva al usuario al aha moment, los tooltips y tooltips de feature que explican sin interrumpir, y el tour guiado que activa a los usuarios que no leen la documentación. Define qué herramienta usar (Intercom, Appcues, UserGuiding) según mi stack.

**4. Base de conocimiento que reduce tickets**
Diseña la base de conocimiento que el usuario usa antes de contactar al soporte: la arquitectura de categorías y artículos, el estándar de calidad de cada artículo (longitud, capturas, vídeos cortos), el proceso de actualización cuando cambia el producto, y cómo medir si está funcionando (deflexión de tickets y búsquedas sin resultado).

**5. Changelog que construye comunidad**
Explica cómo escribir changelogs que la gente lee: el formato narrativo (el problema que resolviste, no solo la lista de cambios), la frecuencia y el canal de distribución (email, in-app, blog, Twitter), cómo usar el changelog para reactivar usuarios que han bajado su actividad, y el changelog como herramienta de ventas para prospects que están evaluando.

**6. Vídeos de producto que escalan la educación**
Diseña la biblioteca de vídeos de producto: los tutoriales cortos de feature (2-4 minutos, un tema, un objetivo claro), los webinars de casos de uso avanzados, la serie de tips rápidos para redes sociales, y el proceso de producción que permite publicar un vídeo de calidad sin un equipo de producción completo.

**7. Blog de producto y thought leadership**
Construye la estrategia de blog que atrae usuarios: el mix entre artículos de SEO (cómo hacer X con el producto), artículos de thought leadership (nuestra visión del mercado), y detrás de escena (cómo construimos el producto y por qué). Define la cadencia, los formatos y cómo cada artículo del blog se conecta con una feature o caso de uso del producto.

**8. Comunidad como contenido**
Explica cómo construir una comunidad de usuarios que genera contenido: foro de ideas y feature requests, espacio de casos de uso donde los usuarios comparten cómo usan el producto, programa de usuarios destacados (customer spotlights), y cómo la comunidad reduce el coste de adquisición porque los mejores clientes atraen a otros como ellos.

**9. SEO de producto**
Define la estrategia de SEO específica para un producto: páginas de landing por caso de uso (mejor que una sola página de producto), páginas de comparativa con competidores, y las páginas de integración con otras herramientas que capturan búsquedas de usuarios de esas herramientas. Incluye la arquitectura de URL y el contenido mínimo de cada tipo de página.

**10. Medición del impacto del product content**
Construye el framework de medición: cómo atribuir la activación a los tutoriales (¿los usuarios que ven el tour se activan más rápido?), el impacto de los changelogs en la retención, la reducción de tickets de soporte por cada nuevo artículo de base de conocimiento, y el tráfico orgánico y las conversiones que genera el blog. Define la revisión mensual de las métricas y quién es responsable de cada una.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crear el contenido que educa al usuario, reduce el tiempo hasta el valor y genera demanda orgánica.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Employer branding content',
                'description'      => 'El contenido que hace que los mejores candidatos quieran trabajar contigo antes de que abras la posición: cultura, equipo y los behind-the-scenes que generan confianza.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en employer branding y marketing de RRHH con experiencia en la construcción de marcas empleadoras que atraen talento de forma orgánica. Quiero diseñar una estrategia de contenido que haga que los mejores profesionales de mi sector quieran trabajar con nosotros.

Mi empresa y contexto:
[Describe la empresa: sector, tamaño, etapa de crecimiento, cultura real (no el wishful thinking), y los principales retos de contratación que tienes hoy: ¿es difícil atraer candidatos, o atraes muchos pero no los perfiles correctos?]

Mi competencia por el talento:
[¿Con quién compites por los mismos candidatos? ¿Qué ventajas genuinas tienes como empleador (flexibilidad, misión, salario, crecimiento, tecnología, equipo) y en qué aspectos estás en desventaja frente a otros empleadores que los candidatos consideran?]

Mis recursos actuales:
[¿Tienes página de careers, perfil de LinkedIn de empresa, presencia en Glassdoor, o alguna iniciativa de employer branding en marcha?]

Con ese contexto, diseña mi estrategia de employer branding content:

**1. EVP: propuesta de valor al empleado**
Ayúdame a definir la Employee Value Proposition real: no lo que queremos ser, sino lo que los empleados actuales dirían que es diferente de trabajar aquí. El EVP abarca la compensación, el crecimiento, el equipo, la misión, la cultura y la flexibilidad. Identifica los 3 elementos donde tenemos ventaja real sobre la competencia y los 2 donde tenemos que ser honestos sobre que no somos la mejor opción.

**2. Arquetipos de contenido de employer branding**
Define los 5 tipos de contenido que construyen marca empleadora con ejemplos concretos: los behind-the-scenes del equipo y el trabajo real, los testimonios de empleados en formato auténtico (no el video corporativo de RRHH), las decisiones de empresa que muestran los valores en acción, los proyectos y retos técnicos que atraen al talento que buscas, y los contenidos sobre crecimiento y aprendizaje que responden a la pregunta "¿qué voy a aprender aquí?".

**3. Los canales y la cadencia**
Diseña la presencia por canal: LinkedIn (la página de empresa y los perfiles personales de los empleados como amplificadores), Instagram (el lado más humano y visual de la cultura), Twitter/X si tu sector está ahí, la página de careers (el activo más olvidado y más importante a la vez), y Glassdoor (cómo gestionar la presencia en una plataforma donde no controlas el mensaje). Define la frecuencia de publicación en cada canal con los recursos que tenemos.

**4. Los empleados como creadores de contenido**
Construye el programa de employee advocacy: cómo identificar a los empleados que tienen energía para crear contenido sobre su trabajo, qué tipo de contenido pedirles (y cuál no pedirles nunca porque queda forzado), cómo apoyarles sin quitarles la autenticidad, y cómo medir el alcance que genera el contenido de los empleados vs el contenido oficial de la empresa.

**5. La página de careers que convierte**
Rediseña la estrategia de la página de careers: la propuesta de valor que aparece antes del listado de posiciones, las fotos del equipo real (no de stock), el vídeo de cultura que ayuda al candidato a imaginarse trabajando aquí, las posiciones descritas de forma que atraigan al perfil correcto (y disuadan al incorrecto), y el proceso de selección explicado paso a paso para reducir la incertidumbre.

**6. Contenido para diferentes perfiles de candidato**
Adapta el contenido al perfil que quieres atraer: el desarrollador senior que evalúa tu stack técnico y la deuda técnica antes de aplicar, el perfil comercial que mira el plan de comisiones y el potencial de mercado, el recién graduado que busca aprendizaje y cultura, y el candidato pasivo que no busca trabajo activamente pero podría cambiar si la oferta es suficientemente atractiva.

**7. Gestión de Glassdoor y la reputación pública**
Explica cómo gestionar la presencia en plataformas de opiniones de empleados: cuándo y cómo responder a las valoraciones negativas (la respuesta importa tanto como la valoración), cómo incentivar a los empleados satisfechos a dejar valoraciones sin que parezca comprado, y cómo usar el feedback de Glassdoor como input real para mejorar la experiencia del empleado.

**8. Eventos y comunidad como employer branding**
Diseña la estrategia de eventos que construye marca empleadora: meetups y eventos técnicos que organiza la empresa, participación en hackathons y conferencias del sector, programas de becas o colaboración con universidades, y cómo cada evento genera contenido que amplifica el alcance más allá de los asistentes.

**9. Medición del employer branding**
Define las métricas que prueban que la estrategia funciona: el time-to-fill (cuánto tardas en cubrir una posición) antes y después, el coste por contratación, el porcentaje de candidatos que llegan por canales orgánicos (referidos + inbound) vs pagados, la calidad de los candidatos que aplican, y la tasa de aceptación de las ofertas enviadas.

**10. El employer branding en los momentos difíciles**
Explica cómo gestionar la comunicación de employer branding cuando las cosas no van bien: una ronda de despidos, un momento de crisis reputacional, un cambio de dirección estratégica que el equipo no esperaba. La autenticidad en los momentos difíciles construye más confianza que diez posts de cultura positiva.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir la estrategia de contenido que atrae a los mejores candidatos antes de que la posición esté abierta.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Thought leadership financiero',
                'description'      => 'El CFO o director financiero que se posiciona como experto con contenido: dónde publicar, qué temas funcionan y cómo monetizar la autoridad creada.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en personal branding y thought leadership para directivos financieros con experiencia ayudando a CFOs, directores de finanzas y controllers a construir autoridad en su sector. Quiero diseñar una estrategia de contenido que me posicione como referente en mi ámbito financiero.

Mi perfil:
[Describe tu cargo, sector en el que trabajas, especialidad financiera (tesorería, M&A, controlling, planificación financiera, inversión) y los años de experiencia que tienes]

Mis objetivos con el thought leadership:
[¿Qué quieres conseguir: una posición de mayor responsabilidad, visibilidad para atraer oportunidades de consultoría, posicionamiento para un consejo de administración, o simplemente construir la red de contactos correcta en tu sector?]

Mi situación actual:
[¿Tienes presencia en LinkedIn, escribes artículos, hablas en eventos? ¿Cuánto tiempo puedes dedicar a crear contenido por semana?]

Con ese contexto, diseña mi estrategia de thought leadership financiero:

**1. Definición del nicho de autoridad**
Ayúdame a encontrar el nicho específico donde puedo ser reconocido como experto: no "dirección financiera" (demasiado amplio) sino la intersección de tu especialidad, el sector donde tienes más experiencia y el tema que más dominas y disfrutas. El nicho correcto es suficientemente específico para que te recuerden y suficientemente amplio para que haya audiencia.

**2. Los temas que funcionan para un directivo financiero**
Define los 10 temas que generan más engagement entre los directivos financieros y los CEOs que buscan al próximo CFO: las lecciones aprendidas de situaciones difíciles (una negociación financiera compleja, una reestructuración, un cierre de ronda), los marcos de análisis que uso para tomar decisiones, las tendencias del sector con mi interpretación personal, y los errores que veo cometer repetidamente y cómo evitarlos.

**3. Formato y canales para el directivo financiero**
Recomienda el mix de formatos y canales para mi perfil: LinkedIn como canal principal (posts, artículos, comentarios en posts de influencers del sector), newsletters de nicho financiero donde publicar (indica cuáles en el contexto español e internacional), podcasts del sector para ser invitado, y los foros y grupos donde están los pares que quiero que me conozcan.

**4. La arquitectura del contenido en LinkedIn**
Diseña la estrategia de LinkedIn: el perfil optimizado para aparecer en búsquedas de headhunters y editores de medios financieros, la frecuencia de publicación recomendada (calidad vs cantidad en el entorno financiero), los tipos de post que más engagement generan entre directivos (datos propios, opiniones directas, experiencias personales), y cómo construir la red correcta sin parecer un vendedor de cursos.

**5. Artículos y publicaciones de largo recorrido**
Construye la estrategia de contenido largo: los artículos para publicaciones financieras de referencia (Harvard Business Review, medios financieros especializados en España), las colaboraciones con medios sectoriales y asociaciones profesionales, y la newsletter propia como activo central. Define el proceso de escritura para un directivo con poco tiempo: cómo capturar ideas, cuándo escribir y cómo pasar de borrador a publicación en el menor tiempo posible.

**6. Hablar en eventos y conferencias**
Diseña la estrategia de presencia en eventos: cómo identificar los eventos financieros donde tu audiencia objetivo está (CFO Forum, eventos de inversión, conferencias sectoriales), cómo proponer una charla con un abstract que sea aceptado, la estructura de la presentación que posiciona sin vender, y cómo maximizar el ROI de cada evento con el contenido generado antes, durante y después.

**7. El componente de red y relaciones**
Explica cómo el thought leadership se conecta con la construcción de red: cómo usar el contenido como excusa para acercarte a personas que te interesa conocer (comentar sus posts, citar su trabajo, proponerles una colaboración), cómo mantener la relación después del primer contacto, y cuántas relaciones significativas es posible gestionar en paralelo de forma realista.

**8. La autenticidad en el entorno financiero**
El entorno financiero tiene una cultura de discreción y reserva que puede chocar con la exposición del thought leadership. Explica cómo encontrar el equilibrio: qué puedo compartir sobre mi experiencia profesional sin comprometer la confidencialidad, cómo ser directo con mis opiniones sin quemar puentes, y cómo gestionar la diferencia entre lo que pienso y lo que puedo publicar dadas las restricciones del cargo que ocupo.

**9. Monetización de la autoridad**
Describe las vías concretas por las que el thought leadership se traduce en oportunidades económicas: la llamada del headhunter para una posición de mayor responsabilidad, las invitaciones a formar parte de un consejo de administración, las oportunidades de consultoría estratégica para empresas del sector, y la credibilidad que reduce el tiempo necesario para cerrar acuerdos en cualquier proceso que lideres.

**10. El plan de 12 meses**
Dame el roadmap de los primeros 12 meses: qué hacer los primeros 3 meses para construir la base (perfil, primeros 12 posts, primera publicación externa), qué conseguir en los primeros 6 meses (primera charla en evento, primera colaboración en medio externo), y cómo medir el progreso (número de conversaciones de calidad generadas por el contenido, invitaciones recibidas, menciones en medios). Con tiempo limitado, cuántas horas por semana es el mínimo para que funcione.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Posicionarse como referente financiero con contenido que genera autoridad y oportunidades profesionales.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marketing de contenidos para despachos',
                'description'      => 'El despacho de abogados que atrae clientes con contenido de valor: artículos de opinión, guías y el posicionamiento que genera mandatos inbound.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing jurídico y content strategy para despachos de abogados con experiencia en el entorno legal español y latinoamericano. Quiero diseñar una estrategia de marketing de contenidos que genere mandatos de forma orgánica sin depender de la red de contactos personal.

Mi despacho:
[Describe el despacho: tamaño (número de socios y abogados), especialidades, tipo de cliente que atiendes (empresa, particular, pyme), y si eres generalista o boutique especializado]

Mis objetivos:
[¿Qué tipo de mandatos quieres generar: más empresas medianas, acceso a grandes corporaciones, trabajo internacional, o un segmento específico como startups, inmobiliario o M&A?]

Mi situación actual:
[¿Tienes blog, newsletter, presencia en LinkedIn? ¿Los clientes actuales llegan principalmente por referencia personal, qué porcentaje llega de forma inbound?]

Con ese contexto, diseña mi estrategia de marketing de contenidos:

**1. Posicionamiento del despacho**
Ayúdame a definir el posicionamiento editorial del despacho: el área temática donde queremos ser la referencia para nuestros potenciales clientes. No "derecho mercantil" (demasiado amplio) sino el cruce de tu especialidad con el sector de cliente que más te interesa (por ejemplo: "financiación para startups tecnológicas" o "regulación sectorial en energías renovables"). El posicionamiento correcto atrae al cliente correcto.

**2. El contenido que buscan tus clientes potenciales**
Define los temas de contenido que generan mandatos concretos: el empresario que busca cómo estructurar la entrada de un inversor, el CFO que necesita entender las implicaciones fiscales de una operación, el CEO que quiere saber cómo protegerse en una negociación laboral compleja. Para cada perfil de cliente, los 5 temas que más buscan y para los que nuestro contenido puede ser la puerta de entrada.

**3. Blog jurídico de calidad**
Diseña la estrategia de blog: la diferencia entre el artículo que posiciona en Google (orientado a keywords, responde a una pregunta concreta) y el artículo de opinión que posiciona al abogado como experto (orientado a debate, cita jurisprudencia reciente, tiene una tesis clara). Cuántos artículos publicar al mes con los recursos del despacho, el proceso de producción (quién escribe, quién revisa, quién aprueba) y los formatos que complementan el texto (infografías de procesos, comparativas de regímenes legales).

**4. SEO jurídico**
Explica la estrategia de SEO específica para un despacho: las keywords que usan los empresarios cuando tienen un problema legal (no los términos técnicos jurídicos, sino la pregunta que escribe alguien que no sabe de derecho), la arquitectura de la web para capturar búsquedas de práctica y de especialidad, y el contenido de cola larga que captura problemas específicos con intención de compra alta.

**5. LinkedIn como canal principal**
Diseña la estrategia de LinkedIn: los perfiles de los socios como el activo principal (no la página del despacho), el tipo de contenido que funciona en LinkedIn jurídico (opinión sobre resoluciones relevantes, explicaciones de cambios normativos, casos de éxito sin violar la confidencialidad), la cadencia de publicación y cómo construir red con los directivos y empresarios que son potenciales clientes.

**6. Newsletters y publicaciones especializadas**
Construye la estrategia de newsletter: el boletín de actualidad jurídica para clientes y prospectos (qué incluir, qué frecuencia, cómo crecer la lista), las colaboraciones con publicaciones sectoriales donde publica el cliente (si te diriges a empresas de tecnología, las publicaciones que leen los CTO y CFO de esas empresas), y los medios generalistas de economía donde un artículo de opinión bien colocado genera muchos mandatos.

**7. Webinars y eventos propios**
Diseña la estrategia de eventos del despacho: webinars formativos sobre temas de actualidad legal (cómo organizar un webinar que atrae a potenciales clientes sin que parezca un pitch), desayunos de trabajo con clientes existentes donde el contenido facilita que traigan nuevas referencias, y la participación en conferencias del sector como ponente (no como patrocinador).

**8. Gestión de la reputación online**
Explica cómo construir y gestionar la reputación del despacho: valoraciones en Google My Business y en directorios legales (Chambers, Legal 500, Best Lawyers), cómo responder a las valoraciones negativas, y el proceso de solicitar referencias de clientes satisfechos de forma que no resulte incómodo en el entorno de discreción habitual en el sector legal.

**9. Confidencialidad y límites del marketing jurídico**
Aborda los límites específicos del marketing para abogados: el secreto profesional y cómo mostrar casos de éxito sin revelar información confidencial, las restricciones deontológicas de la publicidad legal en España, y cómo comunicar el expertise de forma que sea creíble sin incurrir en publicidad comparativa o engañosa.

**10. Medición y ROI del marketing de contenidos**
Define cómo medir que la estrategia genera retorno para el despacho: número de consultas inbound antes y después, porcentaje de consultas que se convierten en mandato, origen de los nuevos clientes (¿cómo nos encontró?), y el coste por mandato adquirido comparado con el coste de generación de negocio por la vía tradicional de relaciones personales. Con esos datos, justificar la inversión de tiempo ante los socios del despacho.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar una estrategia de contenidos que genera mandatos inbound para el despacho de abogados.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer education content',
                'description'      => 'Tutoriales, webinars, bases de conocimiento y los contenidos que reducen el tiempo hasta el valor y disminuyen el volumen de tickets de soporte.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en customer education y content strategy para SaaS con experiencia diseñando programas de formación de usuarios que reducen el churn y aumentan la adopción del producto. Quiero diseñar una estrategia de educación del cliente que acelere el tiempo hasta el valor y reduzca el coste de soporte.

Mi producto y usuarios:
[Describe el producto, el perfil del usuario típico (nivel técnico, sector, cargo), el aha moment que quieres que alcancen y cuánto tiempo tardan actualmente en conseguirlo]

Mis métricas de partida:
[Tasa de activación, tiempo hasta el primer valor, porcentaje de usuarios que usan las features clave, volumen de tickets de soporte y los temas más frecuentes]

Mi infraestructura de educación actual:
[¿Tienes base de conocimiento, vídeos de YouTube, webinars, in-app tooltips? ¿Hay un equipo dedicado o es responsabilidad de CS o producto?]

Con ese contexto, diseña mi programa de customer education:

**1. El journey de educación del cliente**
Mapea el journey educativo completo: qué necesita saber el usuario en el día 1 (solo lo mínimo para conseguir el primer resultado), en la semana 1 (los flujos de trabajo principales), en el mes 1 (las features que maximizan el valor), y en el mes 3 (los usos avanzados que convierten al usuario en power user y en evangelista del producto).

**2. Base de conocimiento que el usuario realmente usa**
Diseña la base de conocimiento que reduce tickets: la arquitectura de categorías basada en los flujos de trabajo del usuario (no en la estructura del producto), el estándar de calidad de cada artículo (longitud, capturas, vídeo corto embebido, pasos numerados), la búsqueda que devuelve resultados relevantes, y el proceso de detección de gaps (qué buscan los usuarios y no encuentran).

**3. Programa de webinars**
Construye la estrategia de webinars: los webinars de onboarding para nuevos usuarios (frecuencia, duración, estructura), los webinars de adopción de features para usuarios existentes (cómo segmentar la audiencia por nivel de uso), y los webinars de casos de uso avanzados que convierten a usuarios medios en expertos. Incluye cómo grabarlos y reutilizarlos como contenido bajo demanda.

**4. Biblioteca de vídeos de formación**
Diseña la biblioteca de vídeos: los tutoriales de feature (uno por feature, máximo 3 minutos, guión estándar: contexto del problema, solución paso a paso, resultado esperado), la serie de masterclass para usuarios avanzados, y el proceso de producción que permite mantener los vídeos actualizados cuando el producto evoluciona sin regrabar desde cero.

**5. Certificaciones y programas de formación estructurada**
Explica cuándo tiene sentido crear un programa de certificación: los criterios para saber si tu producto es lo suficientemente complejo para justificarlo, la estructura del programa (módulos, evaluaciones, badge), el valor que percibe el usuario certificado (diferenciación profesional, acceso a comunidad, visibilidad), y cómo el programa de certificación genera contenido de marketing orgánico.

**6. Educación in-app y en el momento de uso**
Diseña la educación que ocurre dentro del producto: los tooltips contextuales que explican una feature cuando el usuario está a punto de usarla (no en el onboarding inicial), los checklists de activación que guían sin abrumar, los mensajes in-app para introducir features nuevas, y la medición de si estos elementos in-app están siendo vistos y completados.

**7. Comunidad de aprendizaje entre usuarios**
Construye la comunidad de educación peer-to-peer: el foro o espacio donde los usuarios comparten cómo usan el producto, los templates y workflows que comparten entre ellos, el programa de power users que responden preguntas de otros usuarios, y cómo la empresa facilita y amplifica ese contenido generado por la comunidad.

**8. Medición del impacto del customer education**
Define las métricas que prueban el valor del programa: el time-to-value antes y después de implementar el programa de educación, la reducción en volumen de tickets de soporte (y qué categorías de tickets han caído más), la correlación entre usuarios que completan los webinars o tutoriales y la tasa de retención a 90 días, y el NPS de los usuarios que más consumen el contenido educativo vs los que no lo hacen.

**9. Personalización de la educación por segmento**
Explica cómo adaptar el programa educativo a diferentes perfiles de usuario: el usuario técnico que aprende solo con documentación escrita, el usuario no técnico que necesita vídeo y guía paso a paso, el power user que quiere atajos y funcionalidades avanzadas, y el usuario ocasional que solo necesita saber hacer las 3 cosas que hace siempre. Diseña los paths de aprendizaje diferenciados para cada perfil.

**10. El equipo y los recursos necesarios**
Define el modelo de operación del programa de customer education: quién produce el contenido (equipo dedicado, CSMs, producto, externo), con qué herramientas (plataforma de LMS, base de conocimiento, herramienta de producción de vídeo), cuánto cuesta el programa vs cuánto ahorra en coste de soporte y cuánto contribuye a la retención, y el caso de negocio para presentar ante dirección.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar un programa de educación del cliente que acelera el valor y reduce los tickets de soporte.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Newsletter para freelancers',
                'description'      => 'Construye una newsletter que posiciona tu expertise, nutre relaciones con potenciales clientes y se convierte en el activo de marketing más valioso que tendrás.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en newsletters y estrategia de contenidos para freelancers y solopreneurs con experiencia construyendo audiencias que generan ingresos. Quiero diseñar y lanzar una newsletter que posicione mi expertise y genere clientes de forma orgánica.

Mi perfil:
[Describe tu especialidad como freelance: diseñador, desarrollador, consultor de marketing, copywriter, consultor financiero, etc. Los tipos de clientes para los que trabajas y el problema específico que resuelves para ellos]

Mis objetivos con la newsletter:
[¿Quieres atraer nuevos clientes, nutrir la relación con clientes anteriores para que vuelvan y te refieran, posicionarte para subir precios, o construir audiencia para lanzar un producto o curso en el futuro?]

Mi situación actual:
[¿Tienes lista de emails ya, presencia en redes sociales, blog? ¿Cuánto tiempo puedes dedicar a escribir la newsletter y con qué frecuencia?]

Con ese contexto, diseña mi estrategia de newsletter:

**1. El concepto editorial de la newsletter**
Ayúdame a definir el concepto específico de mi newsletter: no "consejos de diseño" (genérico) sino el ángulo único que la hace diferente a las demás en mi sector. El concepto responde a: quién es el lector exacto, qué problema específico resuelve cada número, y qué hace que un lector que ya sigue 10 newsletters decida añadir también la mía. El nombre, la tagline y el concepto editorial en una frase.

**2. La frecuencia y el formato óptimos**
Define la frecuencia y el formato según mis objetivos y recursos: semanal corto (5 minutos de lectura, un tema, una idea accionable), quincenal largo (análisis en profundidad, 15-20 minutos), o mensual de alta calidad (el que merece guardarse). Para cada opción, los pros y contras para un freelance con poco tiempo. Y el formato interno de cada número: las secciones, la longitud de cada una y por qué ese orden.

**3. Los temas que generan clientes**
Define el mix de contenido que posiciona y convierte: el contenido de expertise puro (demuestras que sabes, el lector aprende algo útil), el contenido de proceso y behind-the-scenes (muestras cómo trabajas, el lector ve por qué contratar a alguien como tú), el contenido de opinión con posición clara (el que genera debate y hace que te recuerden), y el contenido de caso de éxito (el cliente anónimo que resolvió X con tu ayuda, y el lector que tiene el mismo problema entiende que tú eres la solución).

**4. La estrategia de crecimiento de suscriptores**
Construye el plan para crecer la lista desde 0: el lead magnet irresistible para tu audiencia (guía, plantilla, checklist, mini-curso por email), los canales de distribución (LinkedIn, Twitter, grupos de tu sector, otras newsletters que mencionan la tuya), las colaboraciones con otros freelancers o creadores que tienen la misma audiencia, y la conversión de la audiencia en redes sociales a suscriptores propios.

**5. El sistema de producción semanal o quincenal**
Diseña el proceso de producción que cabe en mi agenda de freelance: el sistema de captura de ideas durante la semana (lo que observo en proyectos reales, lo que me preguntan clientes, lo que leo), la plantilla de cada número para no empezar desde cero, y el flujo de escritura, revisión y envío que tarda menos de 2 horas desde el borrador hasta el envío.

**6. Monetización de la newsletter**
Explica las vías de monetización directa e indirecta de la newsletter: la generación de clientes directos (el lector que te escribe después de un número concreto), los servicios adicionales que se pueden ofrecer a los suscriptores más comprometidos, la colaboración de marca o el patrocinador que encaja con la audiencia, y la base de suscriptores como palanca para lanzar un producto o curso en el futuro.

**7. El email de bienvenida que retiene**
Diseña la secuencia de bienvenida: el email de confirmación que ya aporta valor (no solo "gracias por suscribirte"), el email de presentación que en 200 palabras explica quién eres y por qué deberían leerte, y el email que entrega el lead magnet con contexto que hace que se guarden el recurso en lugar de ignorarlo. La primera semana decide si el nuevo suscriptor se queda o se va.

**8. Métricas que importan y las que no**
Define las métricas reales para una newsletter de freelance: la tasa de apertura (qué es bueno en tu nicho), la tasa de clic como señal de engagement real, las respuestas directas a tus emails (el indicador más poderoso de una audiencia comprometida), y el número de clientes que mencionan la newsletter como primer contacto. Por qué el número de suscriptores importa menos que la calidad de la audiencia.

**9. La newsletter como CRM de relaciones**
Explica cómo usar la newsletter como herramienta de gestión de relaciones con el ecosistema del freelance: antiguos clientes que se mantienen en órbita y eventualmente vuelven, potenciales clientes que llevan meses leyendo y ya confían en ti cuando llega el momento, colegas del sector que te referencian porque tu newsletter demuestra tu expertise. La newsletter como sustituto de una agenda de contactos que se gestiona sola.

**10. Los primeros 90 días: de cero a tracción**
Dame el plan concreto de los primeros 90 días: el día 0 (configuración técnica con Beehiiv, Substack, ConvertKit o MailerLite, y la importación de contactos existentes que pueden ser suscriptores), las primeras 4 semanas (los 4 primeros números que definen el tono y el concepto), el mes 2 (primer push de crecimiento activo), y el mes 3 (primeros resultados medibles y decisiones de ajuste). Con una lista de partida de 0, qué es razonable esperar después de 90 días.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir una newsletter que posiciona el expertise del freelance y genera clientes de forma orgánica.',
                'vote_score'       => 44,
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
