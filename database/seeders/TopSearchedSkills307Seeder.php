<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills307Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Video marketing strategy: del guion al canal de YouTube que convierte',
                'description'       => 'Construye una estrategia de video marketing completa: define el posicionamiento del canal, tipos de contenido, guion persuasivo y optimización SEO para que cada vídeo genere audiencia y leads.',
                'prompt_content'    => <<<'PROMPT'
Eres un estratega de video marketing con experiencia en canales de YouTube que han superado las 100.000 suscripciones y generado leads cualificados para empresas B2B y B2C. Voy a darte contexto sobre mi negocio y necesito que me ayudes a construir una estrategia de video marketing completa y accionable.

**Mi contexto:**
- Sector o industria: [describe tu sector]
- Producto o servicio principal: [qué vendes]
- Público objetivo: [perfil del cliente ideal]
- Presupuesto mensual aproximado para producción: [cantidad]
- Recursos disponibles: [cámara, micrófono, equipo de edición, etc.]
- Canal actual (si existe): [URL o "no tenemos canal"]
- Objetivo principal: [brand awareness / generación de leads / ventas directas / educación de mercado]

Con esta información, desarrolla una estrategia estructurada en los siguientes bloques:

**1. Posicionamiento del canal**
Define el nicho exacto dentro del sector, la promesa de valor única del canal (por qué alguien debería suscribirse en lugar de ver a la competencia) y el tono y estilo que debe tener el contenido. Sugiere un nombre de canal y una descripción optimizada para búsqueda.

**2. Arquitectura de contenido**
Diseña tres tipos de vídeos que debe producir el canal: contenido de adquisición (orientado a búsquedas, palabras clave de volumen), contenido de conversión (casos de uso, testimonios, demos) y contenido de comunidad (engagement, respuestas a preguntas frecuentes). Para cada tipo indica la duración recomendada, frecuencia de publicación y su objetivo dentro del funnel.

**3. Investigación de palabras clave para YouTube**
Proporciona un método paso a paso para encontrar palabras clave con intención relevante usando YouTube Search Suggest, herramientas gratuitas como TubeBuddy o VidIQ, y el análisis de los canales de la competencia. Genera una lista inicial de 15 temas con formato de título optimizado para CTR.

**4. Estructura del guion persuasivo**
Escribe una plantilla de guion para vídeos de entre 8 y 12 minutos que incluya: gancho en los primeros 15 segundos para evitar el abandono, presentación del problema que resuelve el vídeo, desarrollo con tres puntos clave con ejemplos concretos, llamada a la acción intermedia, cierre con resumen y CTA final que lleve al lead magnet o página de conversión.

**5. Producción mínima viable**
Detalla el setup mínimo para producir vídeos con calidad profesional con menos de 500 euros de inversión: cámara, micrófono, iluminación, software de edición. Incluye un flujo de trabajo semanal desde la idea hasta la publicación que se pueda completar en menos de 8 horas por vídeo.

**6. Optimización SEO en YouTube**
Explica cómo escribir títulos con la palabra clave principal al inicio, descripciones de más de 250 palabras con variaciones semánticas, etiquetas relevantes y capítulos con timestamps. Cómo diseñar miniaturas con alto CTR: colores, texto, expresiones faciales, elementos visuales que funcionan según el sector.

**7. Distribución y amplificación**
Describe una estrategia de distribución multi-canal: cómo reutilizar el contenido largo en clips cortos para Instagram Reels, TikTok y LinkedIn, cómo integrar los vídeos en la estrategia de email marketing, en la web y en el blog para mejorar el SEO del sitio. Incluye un plan de promoción en las primeras 48 horas tras la publicación para maximizar las señales de engagement.

**8. Métricas y optimización continua**
Define los KPIs que hay que monitorizar: tasa de retención (objetivo mínimo 50% a los 30%), CTR de miniatura (objetivo 4-8%), suscriptores por vídeo, leads generados por canal UTM. Crea un sistema de revisión mensual para identificar qué temas y formatos generan más conversiones y doblar la apuesta sobre ellos.

**9. Monetización y ROI**
Explica cómo calcular el retorno de la inversión en video marketing cuando el objetivo no es la monetización directa de YouTube sino la generación de negocio: coste por lead desde canal orgánico de video, comparación con el coste de leads de pago, valor de la audiencia construida como activo a largo plazo.

Termina con un plan de acción para los primeros 90 días: qué publicar en el primer mes para validar el posicionamiento, cómo ajustar en el segundo mes según los datos y cómo escalar en el tercer mes si los primeros resultados son positivos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar una estrategia de video marketing completa con guiones y optimización SEO para YouTube',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Tech podcast y video: crear contenido técnico que educa y construye audiencia',
                'description'       => 'Diseña un podcast o canal de video técnico desde cero: formato, estructura de episodios, distribución y estrategia para posicionarte como referente en tu especialidad tecnológica.',
                'prompt_content'    => <<<'PROMPT'
Eres un productor de contenido técnico especializado en ayudar a desarrolladores, ingenieros y profesionales de tecnología a construir audiencias con podcasts y canales de video. Necesito que me ayudes a crear una estrategia completa para lanzar o mejorar mi contenido técnico.

**Mi contexto:**
- Especialidad técnica: [backend, frontend, DevOps, data, seguridad, etc.]
- Nivel de audiencia objetivo: [juniors, mid, seniors, CTOs, etc.]
- Formato preferido: [podcast de audio, video en YouTube, o ambos]
- Tiempo disponible semanal para producción: [horas]
- Objetivo: [reputación profesional, hiring, ventas de cursos, consultoría, etc.]
- Experiencia previa en contenido: [ninguna / algo / tengo canal/podcast existente]

Con este contexto, desarrolla una estrategia completa:

**1. Definición del nicho y ángulo diferenciador**
El espacio técnico está saturado de tutoriales genéricos. Ayúdame a encontrar el ángulo único: ¿Qué perspectiva, profundidad o tipo de problema voy a abordar que otros no hacen? Define la promesa del show en una frase, el perfil exacto del oyente o espectador ideal y por qué debería elegir mi contenido sobre el de la competencia.

**2. Formato y estructura de episodio**
Diseña la estructura óptima para mis episodios según el formato elegido. Para podcast: duración recomendada, si debe ser solo o con invitados, intro y outro, secciones fijas dentro del episodio, notas del episodio con recursos. Para video: duración, si incluye demo en vivo de código, estructura del guion técnico que sea didáctica sin ser aburrida, cómo manejar los errores en tiempo real para humanizar el contenido.

**3. Banco de ideas para los primeros 20 episodios**
Genera 20 ideas de episodios concretas basadas en mi especialidad que tengan potencial de búsqueda en Google, en YouTube o en plataformas de podcast como Spotify. Para cada idea indica el título, el subtítulo que explica el value y el nivel de audiencia al que apunta.

**4. Setup técnico mínimo viable**
Detalla el equipo mínimo para podcast y para video con calidad aceptable para una audiencia técnica exigente: micrófono USB vs XLR, interfaz de audio, cámara, iluminación, software de grabación y edición. Indica qué actualizar primero cuando el presupuesto es limitado. Para contenido técnico con código: cómo grabar la pantalla con buena legibilidad, temas de editor, tamaño de fuente, resolución.

**5. Flujo de trabajo de producción**
Describe el flujo semanal desde la idea hasta la publicación que me permita publicar con consistencia sin que la producción consuma todo mi tiempo: planificación del episodio, grabación en batch, edición mínima viable (el nivel de calidad que espera una audiencia técnica vs una audiencia de entretenimiento), publicación y distribución.

**6. Distribución técnica del podcast**
Explica cómo distribuir el podcast a través de un RSS feed propio alojado en plataformas como Buzzsprout, Podbean o Transistor.fm, cómo enviar a Apple Podcasts, Spotify, Google Podcasts y Amazon Music, y cómo medir escuchas reales con estadísticas de descarga.

**7. SEO para contenido técnico**
El contenido técnico tiene la ventaja de indexar en búsquedas de Stack Overflow, Reddit, foros especializados y DEV.to además de Google y YouTube. Detalla una estrategia para que cada episodio tenga un artículo de blog acompañante con el código de ejemplo, los recursos del episodio y las transcripción parcial que capture búsquedas long tail.

**8. Construcción de comunidad técnica**
Explica cómo convertir los oyentes o espectadores en una comunidad activa: canal de Discord, newsletter técnica, sesiones de Q&A en vivo, participación en conferencias y meetups para amplificar el contenido. Cómo conseguir los primeros 100 oyentes auténticos sin comprar publicidad.

**9. Monetización para el profesional técnico**
Detalla las vías de monetización que funcionan para la audiencia técnica: cursos online, talleres en vivo, consultoría derivada de la autoridad del contenido, patrocinios de herramientas relevantes para la audiencia, afiliados de libros técnicos y plataformas de cloud. Cuántos oyentes o suscriptores se necesitan para que cada vía sea viable.

Concluye con un plan de lanzamiento para las primeras 8 semanas: cuántos episodios grabar antes de publicar el primero, cómo hacer el lanzamiento inicial para conseguir reseñas y suscriptores en los primeros días, y cómo mantener la consistencia cuando la motivación decae.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Lanzar un podcast o canal técnico con estrategia de contenido, producción y distribución',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Motion design y video: animar el diseño para que cuente una historia',
                'description'       => 'Aprende a integrar motion design en tu flujo creativo: principios de animación, narrativa visual en video, herramientas clave y cómo presentar proyectos animados que impactan al cliente.',
                'prompt_content'    => <<<'PROMPT'
Eres un director de motion design con experiencia en la producción de piezas de video para marcas, agencias y startups. Necesito que me guíes para integrar el motion design en mi práctica de diseño y crear contenido en video que comunique con impacto.

**Mi contexto:**
- Nivel actual en diseño: [junior / mid / senior]
- Herramientas que domino: [Figma, Illustrator, Photoshop, etc.]
- Experiencia en motion: [ninguna / básica en After Effects / experiencia media]
- Tipo de proyectos más comunes: [identidad de marca, UI, ilustración, etc.]
- Objetivo: [añadir motion a mi portfolio / ofrecer motion como servicio / crear contenido propio]

Desarrolla una guía completa y práctica:

**1. Los 12 principios de animación aplicados al motion design**
Explica cada uno de los 12 principios clásicos de animación de Disney (anticipación, squash and stretch, ease in/out, etc.) con ejemplos concretos de cómo aplicarlos en motion design digital para logos, UI transitions y motion graphics. No es lo mismo animar un personaje que animar un botón o una tipografía: adapta cada principio al contexto del diseño digital.

**2. Narrativa visual en video**
El motion design es diseño que cuenta una historia en el tiempo. Explica los conceptos de storyboard para motion: cómo pasar de un brief de cliente a un storyboard funcional, la importancia del ritmo y el timing, cómo la música y el sound design amplifican o destruyen una pieza de motion, y la diferencia entre motion funcional (UI, notificaciones) y motion narrativo (explainer videos, brand films).

**3. Herramientas y ecosistema**
Describe el ecosistema de herramientas que debe conocer un diseñador que quiere dominar motion: After Effects como estándar de la industria (curva de aprendizaje, plugins esenciales como Motion Blink, AEJuice, Flow), Cinema 4D para motion 3D, Lottie para animaciones web y mobile exportadas desde After Effects, Rive como alternativa moderna para animaciones interactivas, y Jitter o Cavalry para flujos más rápidos y menos técnicos.

**4. Flujo de trabajo desde diseño estático a animado**
Paso a paso del proceso: diseño en Figma con capas bien organizadas para facilitar la importación, exportación a After Effects con el plugin Overlord o mediante SVG, estructura de composiciones en After Effects para proyectos escalables, técnicas de rigging básico para elementos que se van a reutilizar, render y exportación en los formatos correctos según el destino (MP4 H.264 para web, ProRes para producción, GIF para email).

**5. Motion design para branding**
Detalla cómo crear un sistema de motion para una marca: animación del logotipo (logo reveal), transiciones y motion patterns que sean consistentes con la identidad visual, iconografía animada, tipografía cinética. Cómo documentar las normas de motion en un brand guide que el cliente pueda entregar a otros proveedores.

**6. Explainer videos y motion para marketing**
Explica la estructura de un explainer video eficaz de 60 a 90 segundos: gancho en los primeros 5 segundos, presentación del problema, solución, evidencias o beneficios, llamada a la acción. Cómo escribir el guion antes de diseñar el storyboard, por qué el voiceover debe grabarse antes de empezar la animación y cómo elegir el estilo visual (flat, 2.5D, kinetic typography, mixed media).

**7. Motion para redes sociales y contenido propio**
Describe cómo producir contenido de motion en formato vertical (9:16) y cuadrado (1:1) para Instagram, TikTok y LinkedIn con los tiempos de atención actuales: los primeros 2 segundos lo son todo, el loop perfecto para stories, animaciones sin audio que funcionen igual. Herramientas rápidas para producción de contenido: CapCut, Adobe Express o plantillas de After Effects.

**8. Pricing y propuestas para proyectos de motion**
Explica cómo tarifar proyectos de motion design: diferencia entre tarifa por hora, por día y por proyecto, cómo calcular el tiempo real de producción incluyendo revisiones, qué incluir en el brief de motion que el cliente debe completar antes de empezar, cómo gestionar las revisiones para evitar el scope creep.

**9. Portfolio de motion**
Describe cómo estructurar un portfolio que demuestre competencia en motion: qué proyectos incluir, cómo presentar el proceso (del brief al storyboard a la pieza final), la importancia del showreel y cómo editarlo para que muestre tu mejor trabajo en los primeros 30 segundos.

Cierra con un plan de aprendizaje de 12 semanas para pasar de diseñador estático a diseñador con competencia real en motion, incluyendo recursos gratuitos y de pago recomendados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Integrar motion design en el flujo creativo y ofrecer animación como servicio de diseño',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Video selling: propuestas en vídeo y demos que aceleran el ciclo de ventas',
                'description'       => 'Domina el video selling: crea propuestas personalizadas en vídeo, demos de producto impactantes y seguimientos visuales que reducen el ciclo de ventas y aumentan la tasa de cierre.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en video selling que ha entrenado a equipos comerciales en el uso de vídeo personalizado para acelerar el pipeline y cerrar más deals. Necesito que me ayudes a implementar una estrategia de video selling completa en mi proceso comercial.

**Mi contexto:**
- Tipo de venta: [B2B / B2C / enterprise / SMB]
- Producto o servicio: [describe brevemente]
- Ticket medio: [rango de precio]
- Ciclo de venta actual: [duración media]
- Canal principal de prospección: [email, LinkedIn, llamadas, etc.]
- CRM que uso: [Salesforce, HubSpot, Pipedrive, etc.]
- Principal objeción o cuello de botella: [dónde se caen más oportunidades]

Con este contexto, desarrolla una estrategia completa de video selling:

**1. Por qué el vídeo personalizado funciona en ventas**
Explica la psicología detrás del video selling: la tasa de apertura de emails con vídeo personalizado frente a texto plano, el efecto de la presencia humana en la pantalla sobre la confianza y la reciprocidad, por qué el vídeo reduce la fricción cognitiva en decisiones de compra complejas. Datos y benchmarks del sector para justificar la inversión en tiempo.

**2. Setup técnico para video selling**
Detalla el equipo mínimo para grabar vídeos de ventas con calidad profesional sin estudio: herramientas como Loom, Vidyard o Sendspark para grabación y envío con seguimiento de visualizaciones, cámara web vs cámara de teléfono, iluminación básica con un ring light, fondo profesional o virtual, configuración de audio. El objetivo es parecer preparado sin parecer corporativo.

**3. El vídeo de prospección en frío**
Diseña una plantilla de script para vídeo de prospección de entre 60 y 90 segundos que incluya: personalización visible en los primeros 3 segundos (mencionar el nombre, la empresa o algo específico que hayas investigado), conexión entre el problema que has identificado y lo que haces, demostración rápida de valor con un ejemplo concreto, llamada a la acción clara y no amenazante. Qué mostrar en pantalla mientras grabas: tu cara, el sitio web del prospecto, una presentación, o ambos en simultáneo.

**4. La demo de producto en vídeo**
Explica cómo estructurar una demo grabada que no sea un tutorial aburrido: empieza por el resultado (el antes/después), no por las funcionalidades; construye el guion alrededor del trabajo-a-hacer del comprador, no alrededor de las features; cómo manejar los momentos de transición para mantener la atención, cómo incluir micro-CTAs dentro de la demo. La diferencia entre una demo de descubrimiento (adaptada al problema del prospecto) y una demo de cierre (enfocada en eliminar objeciones finales).

**5. Propuestas en vídeo**
Describe cómo grabar una propuesta en vídeo de entre 3 y 5 minutos que acompañe al documento de propuesta escrito: cómo estructurar el mensaje (resumen del problema entendido, solución propuesta, inversión, próximos pasos), cómo personalizar la propuesta con referencias a la conversación previa, cómo usar el vídeo para anticipar y responder las objeciones antes de que las planteen.

**6. Video selling en el seguimiento**
Detalla cómo usar el vídeo en los seguimientos post-demo y post-propuesta: el vídeo de seguimiento inmediato las primeras 24 horas, el vídeo de reactivación para oportunidades frías, el vídeo de cierre para las últimas semanas del ciclo. Cómo saber cuándo un prospecto ha visto tu vídeo y cómo usar esa información para el timing perfecto del follow-up.

**7. Integración con el CRM y el stack de ventas**
Explica cómo integrar las herramientas de video selling con el CRM: registro automático de visualizaciones en el timeline de la oportunidad, alertas cuando el prospecto abre el vídeo para llamar en el momento de mayor interés, informes de qué vídeos tienen mayor tasa de visualización y cómo correlacionan con el cierre.

**8. Métricas de video selling**
Define los KPIs a monitorizar: tasa de visualización de vídeos enviados, porcentaje de vídeos vistos hasta el final, tasa de respuesta tras envío de vídeo frente a email de texto, influencia del vídeo en la velocidad del pipeline y en la tasa de cierre. Cómo comunicar estos resultados al manager de ventas para escalar la práctica en el equipo.

**9. Errores comunes en video selling**
Lista los 8 errores más frecuentes que cometen los comerciales al empezar con video selling y cómo evitarlos: vídeos demasiado largos, poca personalización, mala calidad de audio, no practicar antes de grabar, usar el mismo vídeo para todos, no incluir CTA clara, no analizar métricas de visualización.

Cierra con una guía de implementación para los primeros 30 días: cuántos vídeos grabar por semana para coger el ritmo, cómo medir el impacto desde el primer día y cuándo considerar que el video selling ya es parte del proceso estándar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Implementar video selling con propuestas, demos y seguimientos que aceleran el cierre',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product videos: demos, tutoriales y release videos que aumentan la adopción',
                'description'       => 'Crea una biblioteca de contenido en video para tu producto: demos de onboarding, tutoriales de features y release videos que reducen el churn y aceleran el time-to-value de los usuarios.',
                'prompt_content'    => <<<'PROMPT'
Eres un especialista en product marketing y video content con experiencia en SaaS que ha ayudado a equipos de producto a reducir el churn y acelerar la adopción mediante una estrategia de video estructurada. Necesito que me ayudes a crear un sistema de video content para mi producto.

**Mi contexto:**
- Tipo de producto: [SaaS, app móvil, plataforma, herramienta developer, etc.]
- Fase del producto: [early stage / growth / maduro]
- Complejidad de onboarding actual: [simple / medio / complejo]
- Recurso de CS disponible: [no hay / tenemos CS pequeño / CS completo]
- Principal problema de adopción: [usuarios no completan onboarding / no usan features avanzadas / churn en los primeros 30 días]
- Stack de video actual: [ninguno / tenemos algunos tutoriales / biblioteca desorganizada]

Desarrolla una estrategia de video content para el producto:

**1. Mapa de video content por etapa del ciclo de vida del usuario**
Diseña el mapa completo de vídeos que necesita el producto según la etapa del usuario: vídeo de evaluación (para el prospecto que aún no compró), vídeo de bienvenida (primeras 24 horas), serie de onboarding paso a paso (primera semana), tutoriales de features clave (primera a cuarta semana), vídeos avanzados para usuarios power (de la cuarta semana en adelante), y vídeos de release para anunciar nuevas funcionalidades.

**2. El vídeo de onboarding que reduce el churn**
Detalla la estructura del vídeo de onboarding inicial de entre 2 y 4 minutos: comenzar con el resultado (qué va a conseguir el usuario, no cómo funciona el sistema), mostrar los 3 pasos críticos que debe completar para obtener el primer valor, dar contexto de por qué cada paso importa, terminar con un quick win que el usuario pueda replicar en los próximos 10 minutos. Cómo adaptar este vídeo a diferentes segmentos de usuarios si los hay.

**3. Tutoriales de features: la estructura que funciona**
Explica cómo estructurar tutoriales de funcionalidades concretas de entre 2 y 5 minutos que no sean una demostración aburrida de clicks: el problema que resuelve la feature antes de mostrarla, el workflow completo desde el inicio hasta el resultado, atajos y tips que un usuario básico no descubriría solo, cuándo usar esa feature y cuándo no. Cómo organizar la biblioteca de tutoriales para que sea buscable y navegable.

**4. Release videos que generan engagement**
Describe cómo crear vídeos de anuncio de nuevas funcionalidades que generen expectativa y adopción: el formato del changelog en vídeo de entre 60 y 90 segundos por feature importante, cómo narrar el contexto (por qué construimos esto, qué problema resuelve), cómo mostrar la feature en acción con casos de uso reales, cómo distribuir el release video (email, in-app, redes sociales, comunidad de usuarios).

**5. Setup de producción interno**
Detalla cómo producir vídeos de producto internamente con calidad suficiente para el usuario sin necesidad de agencia externa: herramientas de grabación de pantalla (Loom, Camtasia, ScreenFlow), cómo configurar el entorno del producto para grabación (datos de demo limpios, UI en estado correcto), cómo grabar la voz en off con calidad aceptable, herramientas de edición básica para añadir títulos, zooms y efectos de cursor.

**6. Automatización de video con IA**
Explica cómo usar herramientas de IA para escalar la producción de video: generación de voz en off con ElevenLabs u otras herramientas de TTS, creación de avatares virtuales para tutoriales con herramientas como Synthesia o HeyGen, transcripción automática para subtítulos con Whisper o Descript, actualización eficiente de vídeos cuando el producto cambia sin re-grabar desde cero.

**7. Distribución y embebido en el producto**
Describe las mejores prácticas para integrar vídeos en el propio producto: in-app tooltips con vídeo, modales de onboarding con vídeo, centros de ayuda con tutoriales incrustados (intercom, Zendesk, Notion), cómo usar herramientas como Arcade o Storylane para demos interactivas que combinan video con elementos clicables.

**8. Métricas de video en producto**
Define los KPIs para medir el impacto del video content: tasa de visualización de vídeos de onboarding vs tasa de activación del usuario, correlación entre visualización de tutoriales y retención a 30 días, reducción de tickets de soporte en los temas que tienen tutorial en video, NPS de usuarios que consumen video vs los que no.

Termina con un plan de 60 días para construir la biblioteca inicial de video: qué vídeos crear primero según el impacto sobre la retención, cómo priorizar si el equipo es pequeño y el tiempo de producción es limitado, y cómo iterar el contenido según el feedback de los usuarios.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Construir una biblioteca de product videos que reduce el churn y acelera la adopción',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Employer brand en vídeo: videos de cultura que atraen al talento correcto',
                'description'       => 'Crea una estrategia de employer branding en vídeo: entrevistas a empleados, vídeos de cultura y contenido de LinkedIn que posicionan la empresa como empleador deseable para el talento que necesitas.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en employer branding y estrategia de contenido que ha ayudado a empresas medianas y grandes a posicionarse como empleadores referentes mediante el uso estratégico del video. Necesito que me ayudes a construir una estrategia de employer branding en vídeo desde cero o a mejorar la existente.

**Mi contexto:**
- Tamaño de la empresa: [número de empleados]
- Sector: [tecnología, industria, retail, servicios, etc.]
- Perfiles que más necesitamos contratar: [ingenieros, comerciales, diseñadores, etc.]
- Problema de contratación actual: [poco volumen de candidatos / candidatos no encajan en cultura / alta competencia salarial / alta rotación]
- Presupuesto para employer brand: [bajo / medio / no hay presupuesto definido]
- Canales actuales de employer brand: [LinkedIn / web careers / Instagram / ninguno]

Desarrolla la estrategia completa:

**1. Diagnóstico del employer brand actual**
Explica cómo hacer un diagnóstico rápido del estado actual del employer brand: revisar las valoraciones en Glassdoor y LinkedIn, analizar qué dicen los ex-empleados en redes, identificar la brecha entre lo que la empresa dice sobre sí misma y lo que dicen los empleados, revisar el contenido actual de la careers page y las redes sociales. Qué preguntas hacerle a los empleados actuales para entender qué hace única a la empresa como lugar de trabajo.

**2. La propuesta de valor al empleado (EVP) en video**
Detalla cómo articular la EVP en un vídeo de entre 2 y 3 minutos que funcione como pieza central del employer brand: qué elementos de la EVP deben aparecer (cultura, crecimiento, misión, beneficios, comunidad), cómo mostrarlos en lugar de solo declararlos, qué empleados deben aparecer (diversidad de perfiles, áreas y niveles), qué no decir nunca en un vídeo de employer brand.

**3. Entrevistas a empleados que generan confianza**
Describe el formato de entrevista en vídeo a empleados que sea auténtico y no parezca forzado: cómo preparar al empleado para que se sienta cómodo delante de la cámara, qué preguntas hacerle (evitar las corporativas como "¿qué es lo que más te gusta de trabajar aquí?"), cómo editar la entrevista para que fluya de manera natural, la duración óptima para diferentes plataformas (LinkedIn: 2-3 minutos, Instagram: 60-90 segundos, careers page: hasta 5 minutos).

**4. Vídeos de "un día en la vida de"**
Explica cómo producir vídeos de day-in-the-life para los perfiles que más necesitas contratar: seguir a un empleado durante su jornada de trabajo, mostrar el entorno real de trabajo (oficina, remoto, híbrido), los proyectos en los que trabaja, el nivel de autonomía y la interacción con el equipo. Cómo grabarlos con el móvil para que parezcan auténticos y no producidos en exceso.

**5. Vídeos de cultura y valores**
Describe cómo documentar la cultura de la empresa en vídeo: retreats y eventos de empresa, celebraciones de logros del equipo, hackathons, momentos de la vida cotidiana. La importancia del vídeo espontáneo frente al vídeo producido para generar credibilidad. Cómo crear una política de contenido generado por empleados (employee-generated content) que amplifique el alcance sin perder coherencia de mensaje.

**6. Estrategia de publicación en LinkedIn**
LinkedIn es el canal principal para el employer brand orientado a profesionales. Detalla la estrategia de contenido: qué tipos de vídeos publicar desde la página de empresa vs desde los perfiles personales de los managers y founders (el contenido personal tiene hasta 10 veces más alcance), frecuencia óptima, cómo escribir el texto que acompaña al vídeo para maximizar el alcance orgánico, uso de hashtags de empleos.

**7. Integración con el proceso de selección**
Explica cómo integrar el contenido en vídeo en el proceso de reclutamiento: vídeo de presentación del rol que acompañe a la oferta de empleo, vídeo de bienvenida a los candidatos finalistas, vídeo de presentación del equipo antes de la entrevista para reducir la tasa de no-shows, vídeo de pre-boarding para el candidato que ha aceptado la oferta.

**8. Métricas de employer brand en video**
Define los KPIs: incremento del tráfico a la careers page desde social, tasa de aplicación espontánea (candidatos que aplican sin oferta publicada), reducción del coste por hire, mejora en las valoraciones de Glassdoor, engagement de los vídeos por plataforma. Cómo hacer encuestas a candidatos para entender qué canales y contenidos les influyeron en su decisión de aplicar.

Termina con un plan de producción para los primeros 3 meses: qué vídeos rodar primero, cómo conseguir el buy-in de los empleados para aparecer en cámara y cómo medir si el employer brand en video está ayudando a cubrir los puestos correctos más rápido.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Construir una estrategia de employer branding en vídeo para atraer al talento correcto',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Financial video content: explicar conceptos financieros complejos en video',
                'description'       => 'Diseña una estrategia de contenido financiero en video: cómo simplificar conceptos complejos, cumplir con el compliance regulatorio y construir autoridad en finanzas con audiencias que van desde inversores hasta empleados.',
                'prompt_content'    => <<<'PROMPT'
Eres un especialista en comunicación financiera y video content que ha ayudado a entidades financieras, CFOs y profesionales de finanzas a comunicar conceptos complejos en video de manera clara, rigurosa y sin comprometer el cumplimiento normativo. Necesito una estrategia completa para crear contenido financiero en video.

**Mi contexto:**
- Perfil: [CFO de empresa, analista financiero, asesor financiero, fintech, banco, etc.]
- Audiencia principal: [inversores, empleados, clientes, público general, etc.]
- Tipos de conceptos que necesito explicar: [resultados financieros, modelos de inversión, presupuestos, etc.]
- Restricciones regulatorias: [sujeto a CNMV, MiFID II, no tengo regulación específica, etc.]
- Canal principal: [presentaciones internas, webinars, LinkedIn, YouTube]

Desarrolla la estrategia completa:

**1. El reto único del contenido financiero en video**
Explica por qué el contenido financiero es especialmente difícil de comunicar en video: la maldición del conocimiento (el experto asume que el espectador sabe más de lo que sabe), la abstracción de los conceptos numéricos sin contexto visual, el riesgo regulatorio de simplificar en exceso y dar a entender algo incorrecto, y la percepción de que el contenido financiero "debe ser aburrido" para parecer serio. Cómo romper con cada uno de estos obstáculos.

**2. Técnicas de simplificación sin trivialización**
Detalla las técnicas para explicar conceptos financieros complejos sin perder rigor: el uso de analogías cotidianas para conceptos abstractos (qué es un derivado, cómo funciona la inflación, qué significa la tasa interna de retorno), la técnica de Feynman aplicada a las finanzas, cómo construir desde el concepto más simple hasta el complejo en capas, cuándo usar metáforas y cuándo pueden crear malentendidos peligrosos.

**3. Visualización de datos financieros en video**
Explica cómo mostrar datos financieros en video de manera que el espectador pueda absorberlos: qué tipos de gráficos funcionan mejor en pantalla (evitar los de tarta, preferir los de barras y líneas), cómo animar los datos para que cuenten una historia (los datos en movimiento se retienen mejor que los estáticos), herramientas para crear gráficos animados (Flourish, Datawrapper, After Effects), cómo evitar el dashboard dump que abruma al espectador.

**4. Formato y duración según el tipo de contenido financiero**
Define los formatos óptimos para cada tipo de contenido: explicación de resultados trimestrales (2-4 minutos, formato talking head con gráficos animados), explainer de un concepto (3-6 minutos, animación + voz en off), presentación a inversores (10-15 minutos, slides + presentador visible), formación financiera para empleados (módulos de 5-8 minutos, contenido interactivo), commentary de mercados (1-2 minutos, rápido y al punto).

**5. Compliance y disclaimers en video financiero**
Detalla las mejores prácticas para cumplir con la regulación sin que los disclaimers arruinen la experiencia del espectador: dónde colocar los disclaimers (texto en pantalla, inicio del vídeo, descripción), cómo redactar un disclaimer efectivo que cubra el riesgo regulatorio sin ser incomprensible, la diferencia entre contenido educativo (no regulado) y asesoramiento (regulado), cuándo consultar al equipo legal antes de publicar.

**6. Investor relations en video**
Para los profesionales con responsabilidades de IR, detalla cómo usar el video en la comunicación con inversores: earnings calls en formato video vs solo audio, investor day presentaciones grabadas vs en vivo, vídeos de CEO letter como alternativa moderna a la carta anual, cómo medir el engagement de los inversores con el contenido en vídeo.

**7. Formación financiera interna en video**
Explica cómo crear una biblioteca de video para formación financiera de empleados no financieros: los conceptos más importantes que un manager de negocio debe entender (P&L, cash flow, EBITDA, working capital), cómo hacer la formación interactiva con cuestionarios después del vídeo, plataformas para alojar y gestionar el LMS de formación financiera.

**8. Setup de producción para el profesional de finanzas**
Detalla el setup mínimo para grabar vídeos con la autoridad y credibilidad que requiere el contenido financiero: importancia del entorno visual (fondo de librería vs fondo blanco vs fondo de sala de reuniones), cómo vestir para proyectar confianza, calidad de audio como prioridad número uno en contenido donde la credibilidad es fundamental, herramientas para generar gráficos y datos en tiempo real durante la grabación.

Termina con un calendario editorial de contenido financiero para 6 meses alineado con el ciclo fiscal y los eventos de mercado relevantes, con el tipo de vídeo recomendado para cada momento del año.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Crear contenido financiero en video que simplifica conceptos complejos con rigor y compliance',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal content en vídeo: el despacho que educa en YouTube sin comprometer la confidencialidad',
                'description'       => 'Construye una estrategia de contenido legal en video para YouTube y LinkedIn: qué temas publicar, cómo gestionar los disclaimers, cómo generar leads sin infringir el secreto profesional y cómo posicionarte como referente jurídico.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de marketing jurídico especializado en la creación de contenido legal en video para abogados, despachos y asesores legales. Necesito que me ayudes a construir una estrategia de contenido en video que genere autoridad, confianza y leads sin comprometer el secreto profesional ni las normas deontológicas.

**Mi contexto:**
- Tipo de despacho: [individual / boutique / mediano / grande]
- Especialidad jurídica: [mercantil, laboral, fiscal, penal, propiedad intelectual, etc.]
- Audiencia objetivo: [particulares, pymes, startups, empresas medianas, multinacionales]
- Objetivo del contenido: [generación de leads / autoridad de marca / networking / todos]
- Presencia digital actual: [ninguna / blog / LinkedIn activo / canal de YouTube existente]
- Restricciones: [deontología del Colegio de Abogados de tu jurisdicción]

Desarrolla la estrategia completa:

**1. El contenido legal en video: oportunidad y riesgos**
Explica la oportunidad que representa el video para los despachos de abogados: el cliente busca al abogado en Google y YouTube antes de contactar, los vídeos educativos generan la confianza que una web corporativa no puede dar, el video como herramienta de cualificación (el cliente que ha visto tus vídeos llega a la primera consulta con una relación ya establecida). Los riesgos a gestionar: no dar asesoramiento específico, los disclaimers necesarios, la deontología profesional y el tratamiento de los casos reales.

**2. Qué temas publicar: la matriz de contenido legal**
Diseña una matriz de contenido legal en video con cuatro cuadrantes: temas de alta búsqueda y baja competencia (preguntas frecuentes que los clientes hacen antes de contratar un abogado), novedades legislativas y jurisprudenciales (posicionarte como actualizado), casos prácticos anonimizados (mostrar el trabajo real sin violar la confidencialidad), y contenido de proceso (cómo funciona el sistema judicial, qué esperar en un juicio, cuánto tarda un procedimiento).

**3. Formatos de vídeo para el despacho**
Detalla los formatos que mejor funcionan para el contenido jurídico: el vídeo explicativo tipo FAQ (60 a 90 segundos para LinkedIn, 3 a 5 minutos para YouTube), el webinar en vivo sobre una temática específica para generar base de datos de leads, el vídeo de presentación del despacho y del abogado para la web, el vídeo de testimonio de cliente (cómo gestionarlo con el consentimiento adecuado sin comprometer la confidencialidad), y el video-píldora de actualidad jurídica.

**4. Disclaimers y deontología en el vídeo legal**
Explica cómo redactar y colocar los disclaimers en el contenido legal en video: el disclaimer estándar que diferencia el contenido educativo del asesoramiento jurídico específico, dónde colocarlo (al inicio del vídeo, en texto superpuesto, en la descripción), cómo adaptarlo a los distintos códigos deontológicos según el colegio profesional. Qué nunca decir en un vídeo legal para evitar la responsabilidad por asesoramiento implícito.

**5. Confidencialidad y casos reales**
Detalla cómo usar los casos reales como fuente de contenido sin violar el secreto profesional: anonimización correcta (cambiar nombres, sectores, fechas y datos identificativos), si el caso es de jurisprudencia pública cómo citarlo correctamente, cómo pedir autorización explícita al cliente para usar su caso como ejemplo y qué debe incluir ese consentimiento, la diferencia entre hablar de un tipo de caso genérico y hablar de un caso específico.

**6. SEO jurídico en YouTube y Google**
Explica cómo optimizar el contenido legal para búsquedas: las consultas que hacen los potenciales clientes antes de contratar un abogado (empiezan con "cómo", "qué pasa si", "puedo", "me pueden"), cómo hacer keyword research para temáticas legales, títulos de YouTube optimizados para búsquedas de alto valor, cómo usar el vídeo para aparecer en los featured snippets de Google, la importancia de transcripción y capítulos del vídeo para el SEO.

**7. Generación de leads desde el contenido legal**
Describe el embudo de conversión desde el vídeo hasta el cliente: CTAs en el vídeo que lleven a la primera consulta gratuita o de pago, landing pages específicas para cada especialidad que conviertan el tráfico de YouTube, cómo capturar el email con un lead magnet jurídico (guía descargable, checklist, plantilla de contrato), y cómo nutrir la base de datos con una newsletter jurídica hasta que el suscriptor tenga una necesidad legal.

**8. El abogado como marca personal en video**
Detalla cómo construir la marca personal del abogado a través del video: la importancia de aparecer en cámara para generar confianza, cómo superar el miedo a la cámara, el perfil de LinkedIn con contenido en video como canal principal, la diferencia entre el contenido de la página del despacho y el contenido personal del abogado, cómo colaborar con otros profesionales en video para ampliar la audiencia.

Termina con un plan de lanzamiento de contenido en video para el primer trimestre: los 12 primeros vídeos a publicar (tema, formato, duración, canal), la frecuencia de publicación recomendada y cómo medir si el contenido está generando consultas y clientes reales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Construir estrategia de video marketing jurídico que genera leads sin comprometer la deontología',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS video content: tutoriales y webinars que reducen el tiempo de adopción',
                'description'       => 'Diseña una estrategia de video content para Customer Success: tutoriales de onboarding, webinars de adopción de features y vídeos de renovación que reducen el churn y aumentan el NPS.',
                'prompt_content'    => <<<'PROMPT'
Eres un especialista en Customer Success que ha implementado estrategias de video content en equipos de CS de empresas SaaS para reducir el tiempo de adopción, disminuir los tickets de soporte y mejorar las tasas de renovación. Necesito que me ayudes a construir una estrategia de video completa para mi equipo de CS.

**Mi contexto:**
- Tipo de producto: [SaaS B2B / B2C / plataforma / herramienta de datos, etc.]
- Complejidad del producto: [simple / media / alta]
- Equipo de CS actual: [CSMs dedicados / CS tech touch / híbrido]
- Principal problema de adopción: [usuarios no completan onboarding / no usan features clave / churn en primeros 90 días]
- Stack de video actual: [ninguno / Loom / Intercom con video / knowledge base básica]
- Volumen de clientes: [menos de 100 / 100-500 / más de 500 cuentas]

Desarrolla la estrategia de video content para CS:

**1. El impacto del video en las métricas de CS**
Explica con datos por qué el video content es una de las palancas más efectivas en Customer Success: la retención de información visual vs texto (65% más de retención), la reducción de tickets de soporte cuando hay tutoriales en video disponibles, el impacto en el time-to-value cuando el onboarding es en video, la correlación entre consumo de contenido educativo y NPS. Cómo medir el ROI del video content en CS antes de invertir en producción.

**2. Mapeo de vídeos por etapa del customer journey**
Diseña el mapa completo de vídeos necesarios por etapa: pre-onboarding (vídeo de bienvenida enviado tras la firma del contrato o alta), onboarding (serie de 3 a 5 vídeos que llevan al first value), activación (tutoriales de las features que más impactan en la retención), adopción avanzada (vídeos de features avanzadas y casos de uso complejos), renovación (vídeo de business review con el impacto conseguido), expansión (vídeos de upsell de productos o planes adicionales).

**3. La serie de onboarding en video**
Detalla cómo estructurar una serie de onboarding en vídeo de entre 3 y 5 episodios: duración máxima por episodio (8-10 minutos para que sea completable en una sesión de trabajo), cómo secuenciar los contenidos desde lo más básico hasta la primera tarea completada, cómo activar los vídeos de manera progresiva en el producto o por email, cómo medir qué porcentaje de usuarios completa cada episodio y dónde abandonan.

**4. Webinars de adopción y formación**
Explica cómo diseñar y ejecutar webinars de CS que aumenten la adopción de features: webinar de onboarding grupal para clientes nuevos (eficiencia para el equipo, comunidad para el cliente), webinar de feature release para anunciar nuevas funcionalidades a la base instalada, webinar de caso de uso avanzado para clientes en riesgo de no renovar, cómo grabar y redistribuir los webinars para clientes que no pudieron asistir. La estructura del webinar de 45 minutos que mantiene la atención: demo en vivo, Q&A, próximos pasos.

**5. Videos personalizados del CSM**
Para el CS de alta relación, describe cómo usar vídeos personalizados en las interacciones del CSM: el vídeo de bienvenida personalizado para el nuevo cliente (grabado con Loom, referenciando el nombre del cliente y sus objetivos específicos), el vídeo de seguimiento tras identificar una señal de riesgo, el vídeo de QBR preparatorio que resume los datos antes de la reunión, el vídeo de renovación que presenta el caso de valor antes de la llamada de renovación.

**6. Knowledge base en video**
Detalla cómo construir una base de conocimiento en video que los clientes puedan consultar de manera autónoma: taxonomía de tutoriales (por tipo de usuario, por funcionalidad, por nivel de dificultad), herramientas para alojar y organizar el contenido (Intercom Articles, Zendesk Guide, Notion, Helpjuice), cómo integrar los vídeos en los tickets de soporte para responder preguntas frecuentes con un enlace al tutorial en lugar de una respuesta escrita, proceso de actualización de vídeos cuando el producto cambia.

**7. Producción eficiente para equipos de CS**
Explica cómo producir vídeos de calidad suficiente sin un equipo de producción dedicado: Loom para vídeos personalizados rápidos, ScreenFlow o Camtasia para tutoriales más elaborados, plantillas de inicio y cierre para mantener la coherencia de marca en todos los vídeos del equipo, cómo grabar en batch (varios tutoriales en una sesión de grabación), el nivel de calidad de producción que espera un cliente B2B vs un cliente de consumo.

**8. Métricas de video en CS**
Define los KPIs de video content en CS: tasa de visualización de vídeos de onboarding (objetivo mínimo 70%), correlación entre vídeos completados y activación a 30 días, reducción de tickets de soporte en temas con tutorial en video, NPS de clientes que consumen el video content vs los que no, influencia del video content en la tasa de renovación y en el expansion revenue.

Termina con una hoja de ruta de implementación para los primeros 90 días: qué vídeos producir primero, cómo comunicar el lanzamiento del contenido en video a la base de clientes existente, y cómo conseguir el buy-in del equipo de CS para que adopte el video como herramienta habitual de comunicación con el cliente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Implementar video content en CS para reducir churn y acelerar adopción del producto',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Video como canal del freelance: mostrar expertise y atraer clientes con contenido audiovisual',
                'description'       => 'Usa el video para posicionarte como freelance referente: estrategia de contenido, formatos que demuestran tu expertise y un sistema de captación de clientes inbound que funciona mientras tú trabajas.',
                'prompt_content'    => <<<'PROMPT'
Eres un coach de negocios para freelancers especializado en marketing de contenidos que ha ayudado a profesionales independientes a construir audiencias y flujos de clientes inbound usando el video como canal principal. Necesito que me ayudes a diseñar una estrategia de video completa para mi negocio freelance.

**Mi contexto:**
- Especialidad freelance: [diseño, desarrollo, copywriting, consultoría, fotografía, etc.]
- Nivel actual: [recién empezando / tengo clientes pero quiero más / quiero mejorar la calidad de clientes]
- Plataformas activas: [LinkedIn, Instagram, YouTube, TikTok, ninguna]
- Tiempo disponible para contenido por semana: [horas]
- Objetivo principal: [más volumen de leads / mejores clientes / subir tarifas / reputación de experto]
- Tipo de cliente que quiero atraer: [pymes, startups, grandes empresas, particulares]

Desarrolla la estrategia completa:

**1. Por qué el video es el canal con mejor ROI para un freelance**
Explica por qué el video es especialmente poderoso para el freelance: la confianza que genera ver a la persona antes de contratarla (el cliente puede evaluar tu forma de comunicar, tu nivel de expertise y tu personalidad antes del primer contacto), el efecto de escalabilidad del contenido (un vídeo trabaja por ti 24 horas al día mientras tú estás con un cliente), la ventaja competitiva frente a freelancers que solo tienen un perfil de Upwork o un portfolio estático. Datos sobre cómo el contenido en video reduce el ciclo de venta y mejora la calidad de los leads.

**2. Tu posicionamiento en video**
Detalla cómo definir el posicionamiento de tu canal o perfil de video antes de grabar el primer vídeo: la intersección entre tu especialidad, el problema específico que resuelves y la audiencia concreta a la que te diriges, cómo diferenciarte de otros freelancers de tu especialidad que ya hacen contenido, el tono de voz (experto técnico vs divulgador accesible vs provocador vs empático), el "por qué" detrás de tu trabajo que conecta emocionalmente con el cliente ideal.

**3. Tipos de contenido que generan clientes**
Describe los tres tipos de vídeo que debe producir un freelance: contenido de demostración de expertise (casos de estudio en video, análisis de trabajos del sector, crítica constructiva de ejemplos buenos y malos), contenido de proceso (muestra cómo trabajas, qué herramientas usas, cómo piensas sobre un problema), y contenido de resultado (antes/después de proyectos tuyos con el permiso del cliente, métricas de impacto que consigues). Por qué el contenido de proceso y resultado convierte mejor que el educativo puro.

**4. La plataforma correcta para tu especialidad**
Ayúdame a elegir la plataforma principal según mi especialidad y tipo de cliente: LinkedIn para freelancers B2B de alta factura (consultores, desarrolladores enterprise, diseñadores de marca), YouTube para los que quieren ser encontrados cuando un cliente tiene un problema específico (long tail SEO), Instagram y TikTok para los creativos visuales donde el contenido es la demostración del trabajo, y cómo combinar plataformas sin dispersar la energía.

**5. Setup mínimo viable para el freelance**
Detalla el setup de grabación que necesitas como freelance para grabar con autoridad sin un gran presupuesto: el móvil bien posicionado vs una cámara web de calidad, el micrófono como prioridad absoluta (un mal audio destruye la credibilidad técnica), la iluminación natural bien aprovechada vs un ring light básico, el fondo (tu espacio de trabajo ordenado vs fondo difuminado), las herramientas gratuitas o baratas para editar (CapCut, DaVinci Resolve).

**6. Sistema de producción de contenido para el freelance con poco tiempo**
Explica cómo producir contenido de manera consistente cuando tienes clientes que atender: el sistema de batch recording (grabar 4 vídeos en una sola sesión de 2 horas), cómo repropósito un solo vídeo largo en 5 piezas cortas para distintas plataformas, la técnica de documentar en lugar de crear (grabar el trabajo que ya estás haciendo), el calendario editorial mínimo viable para mantener la consistencia sin quemarte.

**7. El embudo de clientes inbound desde video**
Describe cómo convertir la audiencia en clientes: el CTA correcto en cada tipo de vídeo según la etapa del funnel (suscribirse / ir a la web / agendar una llamada de discovery), cómo construir una landing page sencilla que convierta el tráfico del video, la importancia de la newsletter como capa de retención entre los vídeos publicados, cuántos seguidores o suscriptores necesitas realmente para generar un flujo de leads constante (menos de lo que piensas si el nicho está bien definido).

**8. Precio y posicionamiento premium gracias al video**
Explica la relación entre el contenido en video y la capacidad de cobrar tarifas más altas: el video como prueba social de expertise antes de la negociación, cómo el contenido posiciona al freelance como asesor en lugar de proveedor de horas, cómo usar el video para filtrar a los clientes que no valoran tu trabajo y atraer a los que sí, la diferencia entre el freelance que busca clientes y el que los atrae.

**9. Métricas para el freelance que hace contenido**
Define los KPIs que importan (no las vanity metrics): número de contactos cualificados recibidos por semana desde el canal de video, coste por lead comparado con plataformas de freelance como Upwork o Fiverr, tarifa media de los clientes que llegan por video vs los que llegan por referencia o plataformas, tiempo desde el primer vídeo visto hasta el primer contacto.

Termina con un plan de arranque de 8 semanas con las acciones concretas que necesito tomar para publicar los primeros cuatro vídeos, medir los primeros resultados y decidir si doblar la apuesta o ajustar el enfoque.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir un canal de video para atraer clientes inbound como freelance y posicionarse como experto',
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
