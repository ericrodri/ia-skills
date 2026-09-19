<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills598Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de ORM con IA para marcas en crisis de reputación',
                'description'      => 'Usa la IA para diseñar y ejecutar estrategias de Online Reputation Management que protejan y recuperen la imagen de una marca ante comentarios negativos, crisis virales y desinformación.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión de reputación online (ORM) con más de diez años de experiencia gestionando crisis de comunicación digital para marcas de consumo, servicios financieros y tecnología. Necesito tu ayuda para diseñar una estrategia integral de ORM potenciada por inteligencia artificial para una marca que está enfrentando un deterioro progresivo de su reputación online.

Contexto de la situación:
La marca opera en el sector retail de moda sostenible y lleva tres meses recibiendo un volumen creciente de críticas en redes sociales, reseñas negativas en Google My Business y Trustpilot, y cobertura desfavorable en medios de comunicación de nicho. Las críticas giran en torno a retrasos en las entregas, atención al cliente deficiente y cuestionamientos sobre la autenticidad de sus prácticas sostenibles. La puntuación media en plataformas de reseñas ha caído de 4,3 a 3,6 en tres meses.

Fase 1 – Diagnóstico reputacional con IA:
Diseña un sistema de escucha activa y análisis de sentimiento. Describe las herramientas de monitorización que usarás (Brand24, Mention, Sprinklr o equivalentes open source), cómo configurar las alertas por palabras clave negativas, menciones de la marca y hashtags críticos, y cómo usar la IA para clasificar automáticamente cada mención en categorías: queja operativa, ataque reputacional, desinformación, crítica legítima de sostenibilidad. Define el dashboard de reputación que el equipo de marketing revisará a diario, incluyendo el Net Promoter Score online, el Share of Voice negativo y la velocidad de propagación de las críticas.

Fase 2 – Clasificación y priorización de amenazas:
Explica cómo usar modelos de IA para priorizar qué conversaciones requieren respuesta inmediata (triage reputacional). Los criterios de urgencia incluyen: el número de seguidores del usuario que publica la crítica, la velocidad de viralización (likes, shares y comentarios en las primeras dos horas), el tono emocional de la publicación, la plataforma donde ocurre (Twitter/X, TikTok e Instagram tienen velocidades de propagación muy diferentes), y si el contenido incluye imágenes o vídeos que amplifican el impacto. Define los umbrales que activan el protocolo de crisis de nivel 1, 2 y 3.

Fase 3 – Generación de respuestas con IA:
Describe cómo usar modelos de lenguaje para redactar respuestas a las críticas negativas de forma eficiente sin perder autenticidad. La IA debe generar borradores de respuesta adaptados al tono de la plataforma (más formal en Google My Business, más cercano en Instagram), la gravedad de la queja y el perfil del usuario. Incluye instrucciones para que el modelo genere respuestas que reconozcan el problema sin admitir responsabilidad legal cuando sea relevante, ofrezcan una solución concreta, inviten a continuar la conversación en privado y mantengan el tono de voz de la marca. Define las reglas de validación humana antes de publicar cada respuesta.

Fase 4 – Construcción de contenido reputacional positivo:
Describe la estrategia de creación de contenido positivo que desplace el negativo en los resultados de búsqueda. La IA debe ayudar a identificar las búsquedas relacionadas con la marca donde predomina el contenido negativo, generar ideas de contenido (artículos de blog, comunicados de prensa, vídeos de transparencia, testimonios de clientes satisfechos) que ataquen esas posiciones en las SERPs, y optimizar el SEO de cada pieza para desplazar los resultados desfavorables. Define el calendario editorial de los primeros 90 días de recuperación reputacional.

Fase 5 – Medición y recuperación progresiva:
Establece los KPIs de recuperación reputacional: evolución de la puntuación media en plataformas de reseñas, ratio de reseñas positivas respecto a negativas mes a mes, posición de resultados negativos en la primera página de Google, y evolución del sentimiento en redes sociales. Define los hitos de recuperación a 30, 60 y 90 días y cómo la IA ajusta automáticamente la estrategia según los datos de cada revisión periódica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseño de estrategia ORM con IA para recuperación de reputación de marca',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura de sistema de monitorización de reputación online con IA',
                'description'      => 'Diseña e implementa un sistema técnico de monitorización y análisis de sentimiento para gestión de reputación online usando APIs de IA y procesamiento de lenguaje natural.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software especializado en sistemas de procesamiento de lenguaje natural y análisis de datos en tiempo real. Necesito tu ayuda para diseñar la arquitectura técnica de un sistema de monitorización de reputación online impulsado por IA para una empresa de tamaño mediano con presencia en múltiples plataformas digitales.

Contexto técnico:
La empresa necesita procesar entre 500 y 5.000 menciones diarias de su marca procedentes de Twitter/X, Instagram, Facebook, TikTok, Google My Business, Trustpilot, Reddit, foros especializados del sector y medios de comunicación online. El sistema debe clasificar el sentimiento, priorizar las menciones críticas y generar informes automatizados para el equipo de marketing y la dirección.

Módulo 1 – Ingesta y normalización de datos:
Diseña la capa de ingesta de datos. Describe las APIs que usarás para cada plataforma (Twitter API v2, Instagram Graph API, YouTube Data API, Reddit API, APIs de rastreo web para medios) y sus limitaciones de rate limiting. Propón una arquitectura de colas de mensajes (Kafka, RabbitMQ o Redis Streams) que gestione los picos de volumen durante crisis reputacionales. Describe el proceso de normalización que transforma los datos crudos de cada plataforma en un esquema unificado con campos como: fuente, timestamp, autor, texto, engagement_score, url y tipo de contenido.

Módulo 2 – Pipeline de análisis de sentimiento:
Describe el pipeline de procesamiento NLP. Explica cómo elegir entre modelos de análisis de sentimiento preentrenados (BERT, RoBERTa, modelos de HuggingFace especializados en español) frente a llamadas a la API de modelos generativos como Claude o GPT para análisis más contextual. Define cuándo usar cada enfoque según la urgencia y el coste por análisis. Describe el sistema de clasificación de sentimiento (positivo, negativo, neutro) enriquecido con categorías adicionales: urgencia, tipo de queja, intención de cambio de proveedor, riesgo de viralización y si requiere respuesta inmediata.

Módulo 3 – Sistema de alertas y priorización:
Diseña el motor de alertas en tiempo real. Define las reglas de priorización basadas en: puntuación de sentimiento, número de seguidores del autor, velocidad de engagement en los primeros 30 minutos, presencia de palabras clave de alto riesgo (denuncia, estafa, boicot, mentira) y coincidencia con patrones históricos de crisis anteriores. Describe cómo el sistema envía notificaciones al equipo (Slack, email, SMS) con un resumen generado por IA del contexto de la crisis y las acciones recomendadas.

Módulo 4 – Generación de borradores de respuesta:
Diseña el componente de generación automática de respuestas. Describe el sistema de plantillas enriquecidas con IA que genera borradores personalizados según el tipo de queja, la plataforma y el tono del mensaje original. Explica cómo implementar un flujo de aprobación humana antes de publicar cualquier respuesta, con una interfaz simple donde el responsable de comunicación puede editar, aprobar o rechazar el borrador en menos de dos minutos. Define las guardarraíles (guardrails) que impiden que el modelo genere respuestas que admitan responsabilidad legal o usen tono inapropiado.

Módulo 5 – Dashboard e informes automatizados:
Describe el sistema de reporting. El dashboard en tiempo real debe mostrar el mapa de calor de menciones por plataforma, la evolución del sentimiento en las últimas 24 horas, 7 días y 30 días, el ranking de influencers que han mencionado la marca, y las tendencias de temas emergentes. Define los informes semanales automatizados que la IA genera para la dirección: resumen ejecutivo de la situación reputacional, comparativa con la semana anterior, alertas sobre tendencias preocupantes y recomendaciones de acción para el equipo de marketing.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Arquitectura técnica de sistema de monitorización de reputación con NLP',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de identidad visual de respuesta a crisis reputacional con IA',
                'description'      => 'Crea la estrategia visual y de comunicación gráfica para gestionar crisis de reputación online, usando IA para generar materiales coherentes y rápidos en momentos críticos.',
                'prompt_content'   => <<<'EOT'
Eres un director creativo especializado en comunicación de crisis y branding de emergencia. Necesito tu ayuda para diseñar el sistema visual de respuesta a crisis reputacionales para una marca de bienestar y salud que ha recibido críticas virales en redes sociales por supuestas prácticas engañosas en sus productos.

Contexto del diseño:
La marca tiene una identidad visual consolidada (colores verde salvia y blanco, tipografía humanista, fotografía de estilo lifestyle natural) pero su sistema de diseño no contempla escenarios de crisis. Necesitamos crear en 48 horas un conjunto de materiales visuales que comuniquen transparencia, responsabilidad y compromiso sin abandonar los valores de la marca ni parecer defensivos o calculadores.

Fase 1 – Auditoría visual de la crisis:
Analiza cómo los usuarios visualizan la crítica contra la marca. Describe cómo usar la IA para catalogar los memes, pantallazos, vídeos de denuncia y gráficos que están circulando, identificar los elementos visuales que más daño reputacional están causando (colores del packaging asociados a la crítica, fotos específicas de producto que se comparten de forma negativa, el logotipo en contextos desfavorables) y proponer qué elementos visuales de la marca conviene invisibilizar temporalmente en las comunicaciones de respuesta. Define el briefing de diseño de emergencia que recibirá el equipo creativo.

Fase 2 – Sistema de plantillas de respuesta visual:
Diseña el kit de comunicación de crisis. Describe las plantillas para: los comunicados oficiales (formato para LinkedIn y web corporativa con tipografía seria y espaciado generoso que transmita calma y control), las publicaciones de respuesta en Instagram y Twitter (formato que mantenga la identidad de marca pero con una paleta de color más sobria y sin elementos decorativos distractores), los vídeos cortos de portavoz (indicaciones de fondo, iluminación, encuadre y grafismos de texto para reforzar los mensajes clave), y las infografías de datos (para mostrar certificaciones, auditorías independientes y datos que desmientan las críticas). Para cada plantilla, describe cómo la IA puede acelerar la producción manteniendo la coherencia visual.

Fase 3 – Guía de tono visual para la crisis:
Define las reglas de uso visual durante la crisis. Qué imágenes están prohibidas durante la gestión de crisis (fotografías de empleados sonriendo, imágenes festivas, comunicaciones de producto que puedan interpretarse como insensibles), qué paleta de color usar en los primeros 30 días de gestión de crisis, cómo adaptar el logotipo para contextos formales de disculpa o transparencia, y cómo equilibrar la presencia de marca con la humildad visual que requiere una situación de crisis. Describe cómo usar la IA generativa de imágenes para crear fotografías de situaciones de escucha, diálogo y transparencia que no estén disponibles en el banco de imágenes actual.

Fase 4 – Diseño de la narrativa visual de recuperación:
Planifica la transición visual de la crisis a la recuperación. Describe la campaña de contenido visual de los 60 días posteriores a la crisis: las primeras publicaciones que introducen los cambios comprometidos, los behind-the-scenes que muestran los procesos internos mejorados, los testimonios de clientes y expertos externos presentados visualmente, y la campaña de relanzamiento que reencuadra la identidad de la marca desde los valores reforzados por la crisis. Define cómo medir la efectividad visual de cada fase (engagement, ratio de comentarios positivos sobre el contenido visual, recuperación del sentimiento en las menciones de la marca).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Sistema visual de comunicación de crisis reputacional para marcas',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión de reseñas de clientes con IA para equipos de ventas',
                'description'      => 'Usa la IA para transformar las reseñas negativas de clientes en oportunidades de ventas, recuperar clientes insatisfechos y construir un flujo de reseñas positivas que impulse la conversión.',
                'prompt_content'   => <<<'EOT'
Eres un experto en estrategia de ventas y gestión de la experiencia del cliente con especialización en el impacto de las reseñas online en la conversión B2C y B2B. Necesito tu ayuda para diseñar un sistema de gestión de reseñas potenciado por IA que convierta las valoraciones de clientes en una ventaja competitiva para el equipo de ventas.

Contexto del equipo de ventas:
Tenemos un equipo de 15 comerciales en una empresa de software SaaS para el sector inmobiliario. Nuestros clientes dejan reseñas en Google, Capterra, G2 y en el perfil de empresa en LinkedIn. Actualmente tenemos una media de 3,8 en Capterra con 47 reseñas, y los prospectos frecuentemente mencionan las reseñas negativas en las llamadas de ventas como objeción para no avanzar en el proceso.

Módulo 1 – Sistema de detección y análisis de reseñas negativas:
Diseña el flujo de trabajo para que los comerciales reciban alertas cuando se publica una reseña negativa relevante para sus oportunidades abiertas. El sistema de IA debe: identificar si el autor de la reseña negativa es un cliente activo o un ex-cliente que el equipo de ventas puede identificar en el CRM, analizar el contenido de la reseña para extraer las objeciones específicas que el comercial necesitará rebatir en sus próximas llamadas, generar un briefing personalizado para el comercial con la historia del cliente, el problema descrito en la reseña y los argumentos más efectivos para contextualizarlo ante prospectos. Describe cómo integrar este sistema con el CRM (Salesforce, HubSpot o Pipedrive).

Módulo 2 – Generación de respuestas a reseñas negativas que impulsen ventas:
Describe cómo usar la IA para redactar respuestas a reseñas negativas que no solo gestionen la reputación sino que también demuestren a los prospectos que la empresa es responsable y orientada a soluciones. Las respuestas deben: reconocer el problema de forma específica, describir la solución implementada o el proceso para resolverlo, incluir datos cuantificables de mejora cuando sea posible, e invitar al revisor a una conversación directa. Para reseñas de clientes que dejaron de usar el producto, define el script de recuperación que el comercial usará para contactar con ellos directamente.

Módulo 3 – Construcción de flujo de reseñas positivas:
Diseña la estrategia de generación de reseñas auténticas de clientes satisfechos. La IA debe identificar los momentos óptimos del customer journey para solicitar una reseña (tras una renovación, después de una integración exitosa, cuando el cliente alcanza un hito de uso importante), personalizar el mensaje de solicitud según el perfil del cliente y la plataforma donde su reseña tendrá mayor impacto para los prospectos del mismo sector, y crear un programa de incentivos no monetarios (reconocimiento público, acceso anticipado a funcionalidades, invitaciones a eventos) que motive a los mejores clientes a compartir su experiencia.

Módulo 4 – Uso de reseñas en el proceso de ventas:
Define cómo el equipo de ventas usa las reseñas como herramienta de cierre. Describe las técnicas para compartir reseñas positivas de clientes del mismo sector que el prospecto durante la presentación de ventas, cómo preparar con IA las respuestas a objeciones basadas en reseñas negativas específicas antes de cada llamada importante, y cómo crear casos de estudio en formato corto (una página) a partir de las reseñas más detalladas y positivas para usarlos como material de ventas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de gestión de reseñas con IA para convertirlas en ventaja comercial',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'ORM de producto con IA: gestión de reseñas en marketplaces y app stores',
                'description'      => 'Diseña el sistema de gestión de reputación online específico para productos digitales y físicos en marketplaces como Amazon, App Store, Google Play y plataformas de reseñas especializadas.',
                'prompt_content'   => <<<'EOT'
Eres un product manager con especialización en crecimiento y gestión de reputación de productos en marketplaces y plataformas de distribución digital. Necesito tu ayuda para construir un sistema completo de ORM (Online Reputation Management) para un producto móvil de productividad personal que tiene presencia en App Store, Google Play, Product Hunt y varias publicaciones especializadas en tecnología.

Contexto del producto:
La aplicación tiene 85.000 usuarios activos mensuales, 4,1 estrellas en App Store con 1.200 reseñas y 3,8 en Google Play con 890 reseñas. En los últimos dos meses, tras una actualización importante, el flujo de reseñas negativas ha aumentado un 40% centrado principalmente en problemas de rendimiento en dispositivos Android más antiguos y en la pérdida de una funcionalidad que los usuarios avanzados valoraban especialmente.

Análisis de reseñas con IA para decisiones de producto:
Describe cómo usar la IA para extraer insights de producto de las reseñas de usuarios. El sistema debe: clasificar las reseñas por tipo de problema (rendimiento, usabilidad, funcionalidades perdidas, comparativa con competidores, bugs específicos), identificar patrones recurrentes en las reseñas de una y dos estrellas que revelan los problemas sistémicos más urgentes, extraer las funcionalidades más mencionadas positivamente para reforzarlas en la comunicación de marketing, y detectar segmentos de usuarios especialmente insatisfechos (usuarios de versiones antiguas de Android, usuarios premium, usuarios de larga data). Define cómo convertir estos insights en tickets del backlog de producto con priorización basada en el impacto reputacional.

Sistema de respuesta a reseñas de App Store y Google Play:
Diseña el flujo de respuesta a reseñas en plataformas de distribución. La IA debe generar borradores de respuesta adaptados a las restricciones de cada plataforma (longitud máxima, tono esperado por la plataforma, imposibilidad de contactar directamente al usuario), priorizando las reseñas recientes de una y dos estrellas de usuarios con historial de uso extenso. Para las reseñas que describen bugs específicos, el sistema debe enlazar las respuestas con el sistema de tracking de bugs del equipo de desarrollo para añadir automáticamente el contexto reputacional a cada ticket técnico.

Gestión de la reputación tras actualizaciones:
Define el protocolo de ORM para los 30 días posteriores a cada actualización mayor. Describe cómo usar la IA para monitorizar la velocidad de aparición de reseñas negativas en las primeras 48 horas post-lanzamiento, definir el umbral de caída de rating que activa un rollback parcial de funcionalidades, generar la comunicación proactiva en las notas de actualización que anticipa y responde a las preocupaciones más probables de los usuarios, y diseñar la campaña de solicitud de reseñas a los usuarios más satisfechos para contrarrestar el sesgo de reseñas negativas que caracteriza los períodos post-actualización.

Construcción de comunidad de beta testers y embajadores:
Propón un programa de usuarios avanzados que ayude a gestionar la reputación de forma proactiva. Describe cómo identificar con IA a los usuarios con mayor potencial de convertirse en embajadores (historial de uso, reseñas previas positivas, actividad en comunidades de tecnología), cómo estructurar el programa de beta testing que los convierte en los primeros defensores de cada nueva versión, y cómo incentivizar a los embajadores para que respondan orgánicamente a reseñas negativas con sus experiencias positivas reales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestión de reputación de producto en marketplaces con IA para product managers',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Employer branding y reputación digital de empresa con IA para RRHH',
                'description'      => 'Usa la IA para gestionar la reputación de tu empresa como empleadora en Glassdoor, LinkedIn y foros de profesionales, atrayendo talento y reduciendo la rotación a través de una reputación sólida.',
                'prompt_content'   => <<<'EOT'
Eres un experto en employer branding y experiencia del empleado con especialización en la gestión de la reputación digital de empresas como lugar de trabajo. Necesito tu ayuda para diseñar una estrategia completa de gestión de reputación de empleadora usando inteligencia artificial para una empresa tecnológica en crecimiento que está sufriendo una pérdida de talento y dificultades para atraer nuevos perfiles cualificados.

Contexto de la empresa:
Empresa de e-commerce con 200 empleados, valoración de 3,1 sobre 5 en Glassdoor con 78 reseñas, de las cuales un 45% mencionan negativamente la gestión directiva, la falta de promoción interna y los salarios por debajo de mercado. La tasa de rotación está en el 28% anual, y el coste por contratación ha aumentado un 35% en el último año porque los candidatos rechazan ofertas tras investigar la empresa online.

Diagnóstico de reputación como empleadora:
Diseña el análisis inicial de la situación reputacional. La IA debe procesar todas las reseñas de Glassdoor, los comentarios de exempleados en LinkedIn, los posts en foros como InfoJobs o Reddit-Spain/trabajo, y las menciones en comunidades de profesionales del sector. El análisis debe identificar: los tres o cuatro problemas sistémicos más mencionados por exempleados, las áreas de la empresa con mayor generación de reseñas negativas (departamentos o equipos específicos), las reseñas de empleados actuales que muestran un nivel de satisfacción positivo que puede amplificarse, y la brecha entre la propuesta de valor como empleadora que la empresa comunica en sus ofertas de trabajo y la experiencia real descrita por los empleados.

Estrategia de respuesta a reseñas de Glassdoor:
Describe el protocolo de respuesta a reseñas críticas de exempleados. La IA genera borradores de respuesta que: agradecen el feedback sin defensividad, reconocen los problemas identificados de forma honesta cuando corresponde, describen los cambios ya implementados o en proceso, e invitan a los exempleados a contactar directamente si quieren compartir más detalles. Define quién firma las respuestas (director de RRHH, CEO, responsable del área mencionada), el tiempo máximo de respuesta (objetivo: menos de 72 horas) y las respuestas que conviene no dar por el riesgo legal o reputacional adicional que generarían.

Programa de amplificación de voces positivas:
Diseña la estrategia para aumentar el volumen de reseñas auténticas de empleados satisfechos. La IA identifica los momentos del employee journey más propios para solicitar una reseña (tras un ascenso, al completar el primer año, después de un reconocimiento público), personaliza el mensaje de solicitud según el perfil del empleado y la plataforma donde su testimonio tendrá mayor impacto, y gestiona el programa sin presionar a los empleados ni crear reseñas que parezcan coordinadas o poco auténticas. Define las métricas de seguimiento: ratio de respuesta a la solicitud, puntuación media de las nuevas reseñas, evolución de la puntuación global trimestral.

Plan de mejora de cultura y comunicación interna:
Propón las iniciativas de mejora real que sustentarán la recuperación reputacional. No se puede mejorar la reputación sin mejorar la realidad, por lo que la IA debe ayudar a priorizar las inversiones de mejora de cultura (revisión salarial, programa de desarrollo profesional, comunicación directiva más transparente) según el impacto esperado en la satisfacción de los empleados y en las métricas de rotación. Define el plan de comunicación interna que mantiene informados a los empleados de cada mejora implementada como respuesta directa al feedback recibido.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Employer branding y gestión de reputación digital de empresa en Glassdoor con IA',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Monitorización de reputación financiera y de inversores con IA',
                'description'      => 'Usa la IA para monitorizar y gestionar la reputación de una empresa cotizada o en proceso de captación de inversión ante medios financieros, analistas e inversores particulares.',
                'prompt_content'   => <<<'EOT'
Eres un experto en relaciones con inversores y comunicación financiera con experiencia en gestión de reputación para empresas cotizadas y startups en proceso de captación de financiación. Necesito tu ayuda para diseñar un sistema de monitorización y gestión de reputación online orientado al ecosistema financiero usando inteligencia artificial.

Contexto de la empresa:
Empresa de tecnología financiera (fintech) con 5 años de historia, en proceso de preparación para una ronda Serie B de 15 millones de euros. Tiene presencia en medios especializados como Expansión, Cinco Días, El Referente y TechCrunch España. En el ecosistema inversor español existe cierta narrativa negativa en foros de inversores particulares (Rankia, Forocoches sección economía) que asocia la empresa con dificultades de liquidez, aunque los datos financieros son positivos.

Sistema de escucha en el ecosistema financiero:
Diseña el sistema de monitorización específico para el contexto financiero. La IA debe rastrear: las menciones de la empresa en medios financieros especializados (Expansión, El Economista, Bloomberg España, Reuters), los comentarios de analistas e inversores en LinkedIn y Twitter sobre la empresa y el sector fintech, los hilos en foros de inversores particulares donde la empresa es mencionada, las búsquedas de información sobre la empresa en Google que reflejan las preocupaciones de los inversores potenciales, y cualquier contenido que vincule la empresa con términos negativos como estafa, quiebra, deuda, impago o regulación. Define las alertas prioritarias que notifican al CFO y al CEO en tiempo real.

Gestión de narrativas negativas en foros de inversores:
Describe el protocolo para responder a desinformación en foros financieros. La IA debe identificar qué afirmaciones son técnicamente incorrectas y pueden rebatirse con datos públicos verificables, qué narrativas negativas tienen suficiente alcance para justificar una respuesta oficial, y qué conversaciones es mejor ignorar para no amplificarlas. Para las que requieren respuesta, define el proceso de creación de contenido factual que contradiga la desinformación con datos concretos: informes anuales, certificaciones, avales de inversores actuales y métricas de crecimiento publicables.

Estrategia de relaciones con medios financieros:
Diseña la estrategia de generación de cobertura positiva en medios financieros. La IA debe identificar los periodistas especializados en fintech que cubren regularmente el segmento de la empresa, analizar el tipo de historias que han publicado en los últimos seis meses para proponer ángulos de noticia alineados con sus intereses editoriales, y ayudar a redactar notas de prensa y dossiers financieros que presenten los datos de la empresa de forma rigurosa y atractiva para la prensa económica. Define el calendario de comunicación financiera de los seis meses previos a la ronda de financiación.

Preparación de due diligence reputacional:
Describe cómo usar la IA para preparar la empresa para el escrutinio reputacional de los inversores durante la due diligence. Los inversores Series B investigan sistemáticamente la reputación online de la empresa antes de comprometerse, por lo que el sistema debe: mapear todos los contenidos negativos existentes y preparar explicaciones documentadas para cada uno, identificar las búsquedas más comunes sobre la empresa en Google y asegurarse de que el primer resultado para cada búsqueda crítica es contenido controlado por la empresa, y crear un dossier de reputación que el equipo de investor relations puede compartir proactivamente con los inversores interesados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Sistema de reputación financiera con IA para empresas en proceso de captación de inversión',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal para la gestión de crisis de reputación online con IA',
                'description'      => 'Diseña el protocolo jurídico para gestionar crisis de reputación online: derecho al olvido, contenido difamatorio, respuestas legales a reseñas falsas y uso de IA en la gestión de contenido.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho digital, protección de datos y reputación online con experiencia en litigación relacionada con contenido difamatorio, derecho al olvido y gestión de crisis reputacionales en entornos digitales. Necesito tu ayuda para diseñar el protocolo legal completo de gestión de reputación online para una empresa mediana del sector servicios que está sufriendo una campaña de desprestigio organizada.

Contexto legal:
La empresa opera en el sector de la consultoría de recursos humanos y lleva dos meses recibiendo reseñas claramente falsas en Google My Business (se han identificado perfiles recién creados con solo una reseña, usando el mismo patrón de texto), comentarios difamatorios en LinkedIn atribuidos a supuestos exempleados que no aparecen en los registros de la empresa, y publicaciones en foros que la acusan de prácticas ilegales en materia laboral sin aportar ninguna evidencia.

Evaluación jurídica del daño reputacional:
Describe cómo usar la IA para documentar el daño reputacional de forma que sea utilizable en un procedimiento judicial. El sistema debe: catalogar sistemáticamente cada pieza de contenido negativo (captura de pantalla con fecha y hora, URL, datos del perfil que publica, número de visualizaciones y engagement), clasificar el contenido según su tipología jurídica (opinión protegida, información falsamente presentada como hecho, difamación, calumnia o injuria según el Código Penal español), evaluar la credibilidad aparente del contenido (si un lector razonable puede tomarlo como información veraz) y estimar el daño económico cuantificable a través de la caída de nuevos clientes durante el período de la campaña.

Procedimientos de eliminación de contenido:
Diseña el árbol de decisión para la eliminación de contenido dañino. Describe los mecanismos disponibles en cada plataforma: el proceso de reclamación en Google para reseñas falsas o que incumplen sus políticas, la vía de reporte en LinkedIn para contenido difamatorio, los formularios de derecho al olvido ante Google según el RGPD (artículo 17 del Reglamento General de Protección de Datos) para información obsoleta o inexacta, y las vías de eliminación mediante requerimiento notarial o judicial cuando las plataformas no atienden las reclamaciones voluntarias. Para cada vía, define los plazos esperados, la documentación necesaria y la probabilidad de éxito estimada.

Acciones legales contra los responsables:
Describe las opciones de acción legal contra los autores de la campaña de desprestigio. Explica el proceso de identificación de los responsables a través de solicitudes de datos a las plataformas (artículo 15 RGPD y vías procesales civiles), las diferencias entre la vía civil (reclamación de daños y perjuicios por intromisión ilegítima al honor según la LO 1/1982) y la vía penal (denuncia por calumnia o injuria del Código Penal), y los criterios para decidir qué vía es más conveniente según el tipo de daño, la identificabilidad del responsable y la capacidad económica para asumir los costes del litigio. Define también las cartas de cese y desistimiento que pueden resolver la situación sin necesidad de acudir a los tribunales.

Uso de IA en la gestión legal de reputación:
Define las oportunidades y los límites del uso de IA en el trabajo jurídico de gestión reputacional. La IA puede ayudar a: catalogar y clasificar el contenido dañino, redactar los borradores de las comunicaciones a las plataformas, identificar jurisprudencia relevante del Tribunal Europeo de Derechos Humanos y del Tribunal Supremo español sobre derecho al honor en entornos digitales, y preparar el dossier probatorio para el abogado. Define también las tareas que bajo ningún concepto deben delegarse en la IA sin supervisión de un jurista: las valoraciones de riesgo legal, las estrategias procesales y cualquier comunicación oficial en nombre del cliente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Protocolo jurídico de gestión de reputación online y ORM con soporte de IA',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de reseñas negativas y recuperación de clientes con IA para soporte',
                'description'      => 'Usa la IA para diseñar los flujos de atención al cliente que convierten reseñas negativas en oportunidades de recuperación, reducen el churn y generan reseñas positivas de forma sistemática.',
                'prompt_content'   => <<<'EOT'
Eres un experto en customer success y gestión de experiencia del cliente con especialización en la recuperación de clientes insatisfechos y la gestión de reseñas en plataformas digitales. Necesito tu ayuda para diseñar el sistema de atención al cliente orientado a la gestión reputacional usando inteligencia artificial para una empresa de software de gestión empresarial (ERP para pymes).

Contexto del equipo de soporte:
El equipo de customer support tiene 8 agentes que gestionan tickets en Zendesk, reseñas en G2 y Capterra, y consultas en el chat en vivo. La valoración media actual es de 3,6 en G2 con 124 reseñas, un 38% de las cuales son de una o dos estrellas centradas en la lentitud del soporte (tiempo medio de primera respuesta de 18 horas), la dificultad de uso del producto y la falta de documentación en español.

Sistema de priorización inteligente de tickets:
Diseña el sistema de triaje de tickets basado en IA que identifica los clientes con mayor riesgo de abandono y mayor probabilidad de dejar una reseña negativa. La IA debe analizar: el historial de tickets del cliente (frecuencia, tipo de problemas, resolución satisfactoria o no), el tiempo que lleva siendo cliente y su valor económico para la empresa (MRR), el tono emocional del último mensaje enviado, si ha mencionado cancelar, buscar alternativas o hablar con la competencia, y si ya ha dejado reseñas negativas en el pasado. Los clientes que superan el umbral de riesgo pasan a una cola prioritaria atendida por los agentes más experimentados en menos de dos horas.

Generación de respuestas empáticas con IA:
Describe cómo la IA ayuda a los agentes a redactar respuestas que combinen la eficiencia con la empatía. Los modelos de lenguaje deben generar borradores de respuesta que: reconozcan la frustración del cliente de forma genuina sin frases genéricas, expliquen el problema técnico en el lenguaje del cliente (no en jerga de soporte), ofrezcan una solución concreta o un plan de acción con plazos, y añadan un gesto de compensación cuando el error ha sido claramente de la empresa (extensión de período de prueba, descuento en la próxima factura, sesión de formación gratuita). Define el sistema de validación que el agente completa antes de enviar la respuesta generada por IA.

Protocolo de recovery contact para clientes con reseñas negativas:
Diseña el proceso de contacto proactivo con clientes que han dejado reseñas de una o dos estrellas. La IA debe identificar al cliente en el CRM, preparar para el agente un resumen de todos los problemas que ha tenido con el producto, y generar un script de llamada personalizado que: reconoce los problemas específicos mencionados en la reseña, describe las mejoras que la empresa ha implementado en respuesta a ese tipo de feedback, ofrece una sesión de acompañamiento personalizado para resolver sus dificultades con el producto, y pregunta directamente si estaría dispuesto a actualizar su reseña si la experiencia mejora. Define los KPIs de éxito del programa: porcentaje de clientes contactados que actualizan su reseña, reducción de churn entre clientes contactados, y NPS post-recovery.

Generación de solicitudes de reseñas positivas:
Define el sistema automatizado de solicitud de reseñas a clientes satisfechos. La IA debe identificar los momentos de alta satisfacción del cliente (cierre de un ticket con valoración de 5 estrellas, alcance de un hito de uso importante, renovación anual del contrato), personalizar el mensaje de solicitud de reseña según el perfil del cliente y la plataforma más relevante para su sector, y hacer seguimiento automatizado a los clientes que no respondieron a la primera solicitud. Describe cómo medir el impacto del programa: evolución de la puntuación media mensual, incremento del volumen de reseñas positivas y correlación entre la mejora reputacional y las métricas de adquisición de nuevos clientes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de recuperación de clientes y gestión de reseñas con IA para equipos de soporte',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Construir y proteger la reputación online como freelancer con IA',
                'description'      => 'Usa la IA para construir una reputación digital sólida como profesional independiente, gestionar las reseñas en plataformas de freelance y proteger tu marca personal ante clientes insatisfechos.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de marca personal y estrategia digital para profesionales independientes con experiencia ayudando a freelancers a construir reputaciones online que les permiten cobrar tarifas premium y atraer clientes de calidad. Necesito tu ayuda para diseñar una estrategia completa de construcción y protección de reputación online usando inteligencia artificial para un diseñador gráfico freelance que quiere posicionarse en el mercado de alta gama.

Contexto del freelancer:
Diseñadora gráfica con 6 años de experiencia especializada en branding para startups tecnológicas. Trabaja principalmente a través de Behance, LinkedIn y referencias directas. Tiene una puntuación de 4,5 en Upwork (aunque ya no usa activamente la plataforma) y no ha recibido ninguna reseña negativa pública, pero un cliente insatisfecho está amenazando con publicar una crítica negativa en varias plataformas y en su red de LinkedIn.

Auditoría de presencia reputacional actual:
Diseña la auditoría inicial de la reputación digital. La IA debe analizar: los resultados de Google para las búsquedas del nombre de la freelancer y "diseñadora + ciudad + especialidad", identificar qué páginas de terceros controlan actualmente la primera página de resultados, evaluar la coherencia de la imagen profesional entre Behance, LinkedIn, Instagram y el portfolio personal, detectar cualquier contenido negativo o inconsistente que pueda estar afectando la percepción de posibles clientes, y mapear las plataformas donde la presencia es inexistente pero sería valiosa para el posicionamiento en el mercado objetivo.

Estrategia de construcción de reputación proactiva:
Describe el plan de seis meses para construir una reputación online sólida. La IA debe ayudar a: diseñar una estrategia de contenidos en LinkedIn que posicione a la freelancer como experta en branding para startups (tipos de publicaciones, frecuencia, temas que generan mayor engagement entre founders y directores de marketing), crear una estrategia de solicitud de testimonios a clientes anteriores satisfechos (cómo pedir el testimonio, en qué formato solicitarlo, dónde publicarlo), desarrollar el caso de estudio de cada proyecto importante del portfolio (estructura narrativa: problema del cliente, proceso creativo, resultado medible) y optimizar el portfolio en Behance con las palabras clave que usan los clientes objetivo al buscar diseñadores.

Gestión del conflicto con el cliente insatisfecho:
Define el protocolo para gestionar la amenaza de reseña negativa. Antes de que el cliente publique nada, la IA debe ayudar a redactar una propuesta de resolución del conflicto que: reconozca los puntos en los que el proyecto no cumplió las expectativas del cliente, proponga una solución concreta (revisión adicional gratuita, devolución parcial según corresponda, entrega de archivos en un formato alternativo), establezca las condiciones de la resolución amistosa por escrito, y deje claro que la freelancer tiene documentados todos los intercambios, aprobaciones y cambios de scope del proyecto por si fuera necesario defenderse públicamente. Define también la respuesta que la freelancer publicaría si el cliente publica la reseña negativa de todas formas.

Protección de la marca personal a largo plazo:
Diseña el sistema de protección reputacional continua. La IA debe monitorizar semanalmente las menciones del nombre de la freelancer y de sus proyectos más conocidos, alertar ante cualquier contenido nuevo que aparezca en los primeros resultados de Google, generar un informe mensual de la evolución de su reputación online (nuevos testimonios, cobertura en medios, evolución del engagement en LinkedIn), y proponer acciones de mejora continua basadas en los datos de cada mes. Define también las reglas del contrato de servicios que la freelancer implementará en todos sus proyectos futuros para reducir el riesgo de conflictos reputacionales: aprobaciones por escrito en cada fase, gestión del scope creep documentada y cláusula de resolución de disputas antes de publicar reseñas negativas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Estrategia de reputación online y marca personal para freelancers con IA',
                'vote_score'       => 41,
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
