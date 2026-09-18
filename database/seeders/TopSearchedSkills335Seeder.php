<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills335Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 - Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de contenido omnicanal para redes sociales',
                'description'      => 'Diseña una estrategia de contenido integrada que coordine la presencia orgánica y de pago en múltiples plataformas sociales. Aprende a adaptar el mensaje a cada canal, mantener la coherencia de marca y medir el impacto real del contenido social.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un estratega de contenido digital con experiencia diseñando y ejecutando estrategias de redes sociales para marcas de consumo y B2B en mercados hispanohablantes.

Necesito que me ayudes a crear una estrategia de contenido omnicanal para redes sociales que integre la presencia orgánica y de pago, y que esté alineada con los objetivos de negocio.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Cuál es la industria y el modelo de negocio (B2B, B2C, D2C)?
2. ¿En qué plataformas sociales tenéis presencia activa o queréis tenerla?
3. ¿Cuál es el objetivo principal de la estrategia: awareness, generación de leads, retención o ventas directas?
4. ¿Cuánto contenido publicáis actualmente y con qué frecuencia?
5. ¿Existe un equipo dedicado de social media o es una responsabilidad compartida?

## Estrategia que debes diseñar

### 1. Arquitectura de contenido por plataforma
Para cada plataforma relevante (Instagram, LinkedIn, TikTok, X/Twitter, YouTube), define:
- El rol de esa plataforma dentro de la estrategia global (awareness, conversión, comunidad, SEO)
- El tipo de contenido que funciona mejor en esa plataforma
- La voz y el tono específico recomendado para esa audiencia
- La frecuencia de publicación mínima viable

### 2. Pilares de contenido
Define cuatro o cinco pilares temáticos de contenido que sean consistentes con la identidad de marca y relevantes para la audiencia objetivo. Para cada pilar:
- Nombre y descripción
- Ejemplos de formatos y temas concretos
- Qué plataformas priorizan este pilar

### 3. Calendario editorial mensual tipo
Diseña la estructura de un calendario editorial para un mes que integre los pilares de contenido en todas las plataformas. Usa un formato de tabla con columnas: Semana | Plataforma | Pilar | Formato | Tema / Título | Objetivo. Incluye el equilibrio recomendado entre contenido educativo, entretenimiento, promocional y de comunidad (regla del cuatro o del ochenta-veinte adaptada al contexto).

### 4. Estrategia de integración orgánico y de pago
Explica cómo coordinar el contenido orgánico con las campañas de pago para maximizar el impacto:
- Qué publicaciones orgánicas tiene sentido amplificar con presupuesto
- Cómo usar el aprendizaje de la pauta para mejorar el contenido orgánico
- Qué presupuesto mínimo recomendarías para una estrategia integrada eficaz

### 5. Marco de medición de resultados
Define las métricas clave por objetivo y por plataforma:
- Métricas de awareness (alcance, impresiones, tasa de crecimiento de seguidores)
- Métricas de engagement (tasa de interacción, guardados, comentarios cualitativos)
- Métricas de conversión (clics, leads generados, atribución de ventas)
Explica con qué frecuencia revisar cada métrica y qué decisiones deben tomar cada tipo de dato.

### 6. Proceso de producción de contenido eficiente
Propón un flujo de trabajo para producir y publicar contenido de forma sostenible, incluyendo batching de producción, uso de plantillas reutilizables y herramientas de scheduling.

## Formato de salida
- Responde en español con lenguaje claro de marketing digital.
- Usa tablas, listas y ejemplos de copys o ideas de contenido reales.
- Incluye una plantilla de briefing de contenido para el equipo creativo.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño de estrategia de contenido en redes sociales',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 2 - Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Automatización de publicación y análisis de redes sociales para desarrolladores',
                'description'      => 'Aprende a construir pipelines de automatización para publicar contenido en redes sociales, monitorizar menciones y analizar métricas usando las APIs oficiales de las principales plataformas.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un desarrollador backend especializado en integraciones con APIs de redes sociales y automatización de flujos de contenido digital.

Necesito que me ayudes a diseñar e implementar un sistema de automatización para gestionar la presencia en redes sociales de un producto o marca, incluyendo publicación programada, monitorización y análisis de métricas.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Qué plataformas necesitas integrar: Instagram, LinkedIn, X/Twitter, TikTok, YouTube, otras?
2. ¿Cuál es el lenguaje de programación o stack preferido?
3. ¿Necesitas solo publicación programada, o también monitorización de menciones y análisis de métricas?
4. ¿Hay un presupuesto disponible para herramientas de terceros (Buffer, Hootsuite, Zapier) o quieres una solución completamente propia?
5. ¿El volumen de publicaciones es bajo (menos de veinte al mes) o alto (más de cien)?

## Arquitectura y código que debes diseñar

### 1. Mapa de APIs disponibles
Para cada plataforma solicitada, resume:
- La API oficial disponible, su nombre y la URL de documentación
- Los permisos y scopes de OAuth necesarios
- Los límites de tasa (rate limits) más relevantes para publicación y lectura
- Las funcionalidades disponibles vía API versus las que requieren herramientas de terceros

### 2. Arquitectura del sistema de automatización
Propón la arquitectura para un sistema de publicación programada que incluya:
- Componentes principales (scheduler, queue, publisher, logger)
- Diagrama de flujo en texto o pseudocódigo
- Cómo gestionar los tokens de autenticación y su renovación automática
- Estrategia de reintentos ante fallos de la API

### 3. Ejemplo de código de publicación multi-plataforma
Escribe un ejemplo de código (en el lenguaje que te indique) para publicar un post con imagen en al menos dos plataformas distintas de forma unificada. El código debe:
- Abstraer las diferencias entre plataformas con una interfaz común
- Gestionar errores específicos de cada plataforma
- Registrar el resultado de cada publicación (éxito, fallo, ID del post)

### 4. Sistema de monitorización de menciones
Diseña un sistema para rastrear menciones de una marca o keyword en redes sociales:
- Qué APIs o herramientas usar para cada plataforma
- Estructura de datos para almacenar y consultar menciones
- Cómo distinguir menciones relevantes de ruido

### 5. Pipeline de análisis de métricas
Propón un pipeline para recoger, almacenar y visualizar las métricas clave de rendimiento de contenido:
- Qué métricas extraer de cada plataforma vía API
- Esquema de base de datos recomendado
- Herramienta de visualización sugerida (Grafana, Metabase, dashboard propio)

## Formato de salida
- Responde en español con código bien comentado.
- Usa bloques de código para todo el código y pseudocódigo.
- Indica claramente qué librerías o dependencias externas usa cada fragmento de código.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Automatización de redes sociales con APIs',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            // 3 - Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de contenido visual adaptado a cada red social',
                'description'      => 'Aprende a crear sistemas visuales coherentes y adaptables a los distintos formatos y contextos de cada plataforma social. Cubre sistemas de diseño para redes, templates reutilizables y criterios de adaptación de contenido.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un diseñador gráfico y visual content designer con amplia experiencia creando sistemas visuales para redes sociales en marcas digitales, tanto de consumo como B2B.

Necesito que me ayudes a crear un sistema de diseño visual para redes sociales que sea coherente con la identidad de marca y eficiente de producir.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Existe ya una identidad de marca definida (logo, colores, tipografías) o hay que crearla desde cero?
2. ¿En qué plataformas necesitas diseñar contenido: Instagram, LinkedIn, TikTok, Pinterest, X/Twitter, YouTube?
3. ¿Cuál es el estilo visual actual o deseado: minimalista, ilustrativo, fotográfico, tipográfico?
4. ¿Con qué herramientas trabaja el equipo: Figma, Canva, Adobe Creative Suite?
5. ¿Quién produce el contenido visual: un diseñador dedicado, el equipo de marketing, o ambos?

## Sistema visual que debes diseñar

### 1. Guía de formatos por plataforma
Para cada plataforma relevante, proporciona:
- Formatos y dimensiones recomendados (feed, stories, reels, thumbnails, banners)
- Zonas seguras y áreas a evitar en cada formato
- Duración y especificaciones técnicas para contenido en vídeo

### 2. Sistema de plantillas modulares
Diseña la estructura de un sistema de plantillas reutilizables que incluya:
- Tipos de template por pilar de contenido (educativo, promocional, testimonio, entretenimiento)
- Elementos fijos de marca presentes en todos los templates
- Zonas variables donde cambia el texto, la imagen o el color
- Cómo nombrar y organizar los templates en la herramienta de diseño

### 3. Guía de adaptación de contenido entre plataformas
Proporciona criterios claros para adaptar un mismo contenido a distintas plataformas sin perder impacto:
- Qué cambiar y qué mantener al pasar de feed de Instagram a LinkedIn
- Cómo adaptar un carrusel a un reel o a un vídeo corto
- Cuándo tiene sentido crear contenido nativo para cada plataforma en lugar de adaptar

### 4. Sistema de color y tipografía para social media
Explica cómo adaptar el sistema de color y tipografía de la marca a los contextos de social media:
- Paleta primaria y secundaria para fondos de contenido social
- Escala tipográfica para titulares, subtítulos y cuerpo de texto en imágenes
- Contraste y legibilidad en móvil (el ochenta por ciento del consumo es en este dispositivo)
- Consideraciones de accesibilidad visual

### 5. Proceso de producción y entrega de assets
Propón un flujo de trabajo eficiente para producir y entregar assets de social media:
- Cómo estructurar los archivos en la herramienta de diseño (páginas, componentes, variantes)
- Formatos de exportación por plataforma y uso (JPG, PNG, MP4, GIF)
- Convención de nombres de archivos para facilitar el scheduling
- Proceso de revisión y aprobación de contenido visual

## Formato de salida
- Responde en español con lenguaje de diseño claro.
- Usa listas de especificaciones, tablas comparativas y ejemplos descriptivos.
- Incluye una plantilla de briefing visual para nuevos contenidos.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Creación de sistemas visuales para redes sociales',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            // 4 - Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Social selling: estrategia de contenido de ventas en redes sociales',
                'description'      => 'Aprende a usar el contenido en LinkedIn y otras redes para generar conversaciones comerciales, construir autoridad y abrir oportunidades de venta sin ser intrusivo.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un experto en social selling y venta consultiva con experiencia ayudando a equipos comerciales B2B a usar LinkedIn y otras redes sociales para generar pipeline y cerrar ventas.

Necesito que me ayudes a desarrollar una estrategia de social selling basada en contenido que me permita generar conversaciones comerciales de forma natural y escalable.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Cuál es tu rol comercial (AE, SDR, BDR, account manager, director de ventas)?
2. ¿A qué perfil de comprador te diriges (sector, tamaño de empresa, cargo del decisor)?
3. ¿En qué plataformas tienes presencia o quieres desarrollarla?
4. ¿Publicas contenido actualmente? ¿Con qué frecuencia y sobre qué temas?
5. ¿Cuál es el principal problema con el social selling actual: falta de ideas de contenido, bajo engagement, dificultad para convertir seguidores en conversaciones?

## Estrategia de social selling que debes diseñar

### 1. Posicionamiento personal como experto de referencia
Diseña el posicionamiento de contenido para el perfil del comercial:
- Qué temas de autoridad desarrollar en función de la audiencia objetivo
- Cómo equilibrar contenido de valor (educativo, análisis de sector) con contenido más personal (perspectivas, experiencias)
- Qué tipo de publicaciones generan más conversaciones con compradores B2B

### 2. Tipos de contenido para social selling por etapa del ciclo de compra
Para cada etapa del ciclo de compra (consciencia, consideración, decisión), propón:
- El tipo de contenido más efectivo
- Un ejemplo concreto de publicación con su estructura
- Cómo ese contenido facilita la apertura de una conversación comercial

### 3. Proceso de prospección social
Diseña un proceso diario de entre quince y treinta minutos para usar las redes sociales como canal de prospección:
- Cómo identificar y seguir a prospectos relevantes
- Cómo interactuar con el contenido de los prospectos antes de contactar directamente
- Cuándo y cómo enviar el primer mensaje directo tras una interacción de contenido

### 4. Plantillas de contenido reutilizables
Crea cinco plantillas de publicación para LinkedIn adaptadas a social selling B2B:
- Una reflexión de sector que invite a debate
- Un caso de éxito de cliente (sin revelar nombre si es confidencial)
- Una pregunta a la comunidad sobre un reto del sector
- Un análisis de tendencia con perspectiva propia
- Una lección aprendida de una situación de ventas real

### 5. Métricas de social selling
Define las métricas clave para medir el impacto del social selling:
- Métricas de actividad (publicaciones, comentarios, mensajes enviados)
- Métricas de resultado (conversaciones iniciadas, reuniones generadas, pipeline atribuido)
- Cómo presentar estos resultados al manager si no cree en el social selling

## Formato de salida
- Responde en español con lenguaje comercial directo.
- Incluye ejemplos reales de publicaciones y mensajes de prospección.
- Usa tablas y plantillas concretas que el comercial pueda usar desde mañana.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Generación de pipeline mediante contenido en redes sociales',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            // 5 - Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Estrategia de contenido de producto en redes sociales',
                'description'      => 'Aprende a diseñar y ejecutar una estrategia de contenido en redes sociales centrada en el producto, que eduque a los usuarios, genere adoption y construya comunidad alrededor de las funcionalidades y la visión del producto.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un product marketer con experiencia desarrollando estrategias de contenido en redes sociales para productos digitales, combinando la perspectiva del producto con las necesidades de comunicación hacia usuarios y prospectos.

Necesito que me ayudes a diseñar una estrategia de contenido centrada en el producto para redes sociales que apoye la adoption, la retención y el crecimiento.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Cuál es el producto digital (SaaS, app de consumo, plataforma B2B)?
2. ¿Cuáles son los objetivos principales del contenido de producto en redes: awareness, adoption de funcionalidades, reducción de churn, evangelización de usuarios?
3. ¿Quién gestiona actualmente el contenido de redes: el equipo de marketing, el de producto o una persona de community?
4. ¿Qué plataformas son prioritarias para el producto?
5. ¿Existe ya una comunidad activa de usuarios en alguna red social o es todo desde cero?

## Estrategia de contenido de producto que debes generar

### 1. Taxonomía de contenido de producto
Define los tipos de contenido de producto que tienen sentido en redes sociales y su objetivo:
- Tutoriales de funcionalidades (adoption y retención)
- Casos de uso de clientes reales (prueba social y educación)
- Actualizaciones de producto en formato social (engagement de usuarios actuales)
- Contenido de visión y roadmap (comunidad y evangelización)
- Contenido behind the scenes del equipo de producto (humanización y employer branding)

### 2. Calendario de contenido de producto alineado con el roadmap
Propón cómo integrar el calendario de contenido social con el roadmap del producto:
- Cómo anunciar un lanzamiento de funcionalidad en redes de forma efectiva
- Qué contenido crear antes, durante y después de un lanzamiento
- Cómo gestionar el contenido de redes cuando el lanzamiento se retrasa

### 3. Estrategia de community building para el producto
Diseña un plan para construir o activar una comunidad de usuarios en torno al producto:
- En qué plataforma tiene más sentido concentrar la comunidad según el tipo de producto
- Tipos de contenido que generan participación activa de los usuarios
- Cómo convertir usuarios avanzados en embajadores o creadores de contenido

### 4. Proceso de captura de feedback de usuarios vía redes sociales
Propón cómo usar las redes sociales como canal de investigación de producto:
- Tipos de publicaciones que generan feedback útil (encuestas, preguntas abiertas, comparativas)
- Cómo monitorizar menciones y conversaciones para extraer insights de producto
- Cómo cerrar el loop con los usuarios que han dado feedback

### 5. Métricas de contenido de producto en redes sociales
Define métricas específicas para el contenido de producto que vayan más allá del engagement superficial:
- Métricas de adoption relacionadas con el contenido (activaciones tras un tutorial, features usadas tras su anuncio)
- Métricas de comunidad (crecimiento de seguidores cualificados, ratio de participación de usuarios activos)
- Cómo atribuir el impacto del contenido social a métricas de producto

## Formato de salida
- Responde en español con lenguaje de producto y marketing claro.
- Usa ejemplos de publicaciones reales de productos conocidos (sin copiar, como referencia).
- Incluye una plantilla de brief de contenido de producto para el equipo de social media.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Contenido de producto para redes sociales y comunidad',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            // 6 - RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Employer branding y captación de talento a través de redes sociales',
                'description'      => 'Aprende a diseñar y ejecutar una estrategia de employer branding en redes sociales que atraiga talento cualificado, refleje la cultura real de la empresa y apoye los procesos de selección.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un especialista en employer branding y talent acquisition con experiencia desarrollando estrategias de redes sociales para empresas tecnológicas, consultoras y startups en mercados hispanohablantes.

Necesito que me ayudes a diseñar una estrategia de employer branding en redes sociales para atraer talento cualificado y mejorar la percepción de la empresa como lugar de trabajo.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Cuántas personas tiene la empresa y en qué sectores o roles busca más talento?
2. ¿Qué plataformas sociales usa actualmente la empresa para employer branding (LinkedIn, Instagram, TikTok, otros)?
3. ¿Existe ya una propuesta de valor al empleado (EVP) definida o hay que construirla?
4. ¿Cuál es el mayor reto de employer branding actual: poca visibilidad, imagen de empresa poco atractiva, competencia con empresas más grandes o algo distinto?
5. ¿Hay empleados dispuestos a participar como embajadores de marca en redes sociales?

## Estrategia de employer branding que debes diseñar

### 1. Propuesta de valor al empleado (EVP) para redes sociales
Ayúdame a articular o refinar la EVP de la empresa en un formato apto para redes sociales:
- Los tres o cuatro diferenciadores clave como empleador
- Cómo comunicar cada diferenciador en una publicación de veinte palabras o menos
- Qué pruebas o testimonios apoyan cada diferenciador

### 2. Tipos de contenido de employer branding por objetivo
Define el contenido para tres objetivos distintos:
- Atraer talento pasivo (personas que no están buscando activamente)
- Convertir seguidores interesados en candidatos activos
- Reforzar el orgullo de pertenencia de los empleados actuales
Para cada objetivo, proporciona dos o tres tipos de contenido concretos con ejemplo de publicación.

### 3. Programa de employee advocacy
Diseña un programa para que los empleados compartan contenido de employer branding de forma voluntaria y auténtica:
- Cómo reclutar y motivar a los primeros embajadores
- Qué herramientas usar para facilitar el compartir de contenido
- Qué guía de estilo proporcionar a los empleados (sin que suene corporativo)
- Cómo medir el alcance e impacto del programa

### 4. Calendario de contenido de employer branding mensual
Propón la estructura de un calendario mensual de contenido de employer branding que cubra:
- Contenido de cultura y ambiente de trabajo
- Historias de empleados (días en la vida de, trayectorias profesionales)
- Contenido de aprendizaje y desarrollo
- Contenido de procesos de selección (transparencia del hiring process)
- Anuncios de ofertas de empleo con ángulo de employer branding

### 5. Métricas de employer branding en redes sociales
Define las métricas clave para medir el impacto de la estrategia:
- Métricas de alcance y awareness (seguidores en perfiles de empleo, alcance de publicaciones de employer branding)
- Métricas de atracción de talento (candidaturas desde redes sociales, calidad de los perfiles)
- Métricas de cultura interna (participación de empleados, contenido generado por ellos)

## Formato de salida
- Responde en español con lenguaje de RRHH y employer branding claro.
- Incluye ejemplos de publicaciones reales que podrían funcionar para la empresa.
- Proporciona una plantilla de guía de estilo para empleados embajadores.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Employer branding y atracción de talento en redes sociales',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            // 7 - Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Comunicación financiera y de inversión en redes sociales',
                'description'      => 'Aprende a comunicar contenido financiero complejo de forma accesible y atractiva en redes sociales, cumpliendo con las restricciones regulatorias y construyendo una audiencia de inversores, ahorradores o clientes financieros.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un experto en comunicación financiera digital con experiencia ayudando a asesores financieros, fintech, gestoras de inversión y educadores financieros a construir una presencia efectiva en redes sociales dentro del marco regulatorio aplicable.

Necesito que me ayudes a diseñar una estrategia de contenido financiero para redes sociales que sea atractiva, rigurosa y conforme a la normativa.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Cuál es el perfil del comunicador: asesor financiero, educador financiero independiente, fintech, gestora, banco?
2. ¿Cuál es el público objetivo: inversores minoristas, jóvenes ahorradores, inversores institucionales?
3. ¿En qué plataformas quieres tener presencia: LinkedIn, Instagram, YouTube, X/Twitter, TikTok?
4. ¿Existe ya contenido publicado y cuáles son los temas que mejor han funcionado?
5. ¿Hay un equipo legal o de compliance que revise el contenido antes de publicar?

## Estrategia de contenido financiero que debes generar

### 1. Pilares de contenido financiero por perfil de audiencia
Define los pilares temáticos de contenido en función del perfil de audiencia:
- Para inversores principiantes: educación financiera básica, desmitificación de conceptos
- Para inversores intermedios: estrategias de inversión, análisis de mercado accesible
- Para audiencia profesional: perspectivas de mercado, análisis macroeconómico, tendencias de la industria
Para cada pilar, proporciona tres ideas de contenido concretas adaptadas a formato social.

### 2. Guía de cumplimiento regulatorio en redes sociales
Proporciona una guía práctica de los principales requisitos y restricciones a tener en cuenta al publicar contenido financiero en redes sociales:
- Qué disclaimers son obligatorios y cómo integrarlos sin arruinar el contenido
- Qué afirmaciones están prohibidas (garantías de rentabilidad, comparaciones engañosas)
- Cómo hablar de productos financieros específicos sin que sea una recomendación individualizada
- Cómo gestionar las preguntas de seguidores que piden consejo personalizado

### 3. Formatos de contenido financiero que funcionan por plataforma
Para cada plataforma seleccionada, propón los formatos más efectivos para contenido financiero:
- LinkedIn: artículos de análisis, infografías de datos, perspectivas de mercado
- Instagram: carruseles educativos, visualizaciones de datos, historias de preguntas frecuentes
- YouTube: tutoriales de inversión, análisis de mercado semanal, entrevistas con expertos
- TikTok: conceptos financieros en sesenta segundos, desmontando mitos financieros

### 4. Proceso de producción y revisión de contenido financiero
Diseña un flujo de trabajo para producir contenido financiero que equilibre la rapidez de publicación con el rigor y el cumplimiento:
- Quién produce, quién revisa técnicamente, quién revisa legalmente y quién aprueba
- Cuánto tiempo asignar a cada fase
- Cómo gestionar el contenido de actualidad (movimientos de mercado) que requiere publicación rápida

### 5. Métricas de éxito para contenido financiero
Define las métricas clave para evaluar el impacto del contenido financiero en redes:
- Métricas de confianza y autoridad (seguidores cualificados, menciones de medios, referencias de otros expertos)
- Métricas de engagement de calidad (comentarios de calidad, preguntas recibidas, guardados)
- Métricas de negocio (leads generados para la empresa, consultas de nuevos clientes atribuidas a redes)

## Formato de salida
- Responde en español con lenguaje claro para comunicación financiera.
- Incluye ejemplos de publicaciones con y sin disclaimer.
- Proporciona una lista de frases prohibidas o de riesgo regulatorio en contenido financiero.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estrategia de contenido financiero en redes sociales',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            // 8 - Legal
            [
                'profession_id'    => 8,
                'title'            => 'Gestión de riesgos legales en la estrategia de redes sociales',
                'description'      => 'Aprende a identificar y mitigar los principales riesgos legales asociados a la presencia de una empresa o profesional en redes sociales, desde la propiedad intelectual hasta la publicidad engañosa y la gestión de crisis reputacionales.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un abogado especialista en derecho digital, propiedad intelectual y regulación de publicidad con experiencia asesorando a empresas y profesionales sobre los riesgos legales de su presencia en redes sociales.

Necesito que me ayudes a identificar los principales riesgos legales de nuestra estrategia de redes sociales y a diseñar un sistema de prevención y respuesta.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Cuál es el sector de la empresa o profesional (salud, finanzas, alimentación, tecnología, otro)?
2. ¿En qué jurisdicción opera principalmente (España, México, Argentina, Latinoamérica en general)?
3. ¿Cuáles son las principales actividades de comunicación en redes: publicidad, contenido educativo, gestión de comunidad, influencer marketing?
4. ¿Ha habido algún incidente legal o reputacional relacionado con redes sociales en el pasado?
5. ¿Existe ya algún proceso de revisión legal del contenido de redes o se publica sin revisión?

## Análisis y sistema de gestión de riesgos que debes generar

### 1. Mapa de riesgos legales en redes sociales
Identifica y clasifica los principales riesgos legales asociados a la presencia en redes sociales según el sector y la jurisdicción:
- Propiedad intelectual (uso de imágenes, música, contenido de terceros)
- Publicidad engañosa y claims no sustanciados
- Protección de datos personales (GDPR, LOPD, leyes locales de privacidad)
- Difamación y responsabilidad por comentarios de terceros
- Riesgos específicos del sector (publicidad de alcohol, tabaco, medicamentos, servicios financieros)
Para cada riesgo: probabilidad, impacto potencial y nivel de prioridad.

### 2. Guía de uso de contenido de terceros
Proporciona una guía práctica para el equipo de social media sobre cómo usar contenido de terceros de forma legal:
- Cuándo y cómo pedir permiso para usar una imagen, vídeo o texto
- Qué es el fair use o uso justo y cuándo no aplica
- Cómo citar correctamente el contenido de terceros en redes sociales
- Qué bancos de imágenes o recursos de audio son seguros para uso comercial

### 3. Política de publicidad y comunicación comercial
Diseña los elementos clave de una política interna de publicidad en redes sociales que cumpla con la normativa:
- Requisitos de identificación de contenido patrocinado (hashtag AD, colaboración pagada)
- Normas para claims de producto o servicio (qué se puede afirmar y qué no)
- Proceso de aprobación de contenido publicitario antes de publicar
- Reglas para el uso de testimonios y reseñas de clientes

### 4. Protocolo de gestión de crisis reputacional en redes sociales
Diseña un protocolo para gestionar situaciones de crisis reputacional con implicaciones legales:
- Criterios para activar el protocolo de crisis
- Roles y responsabilidades en la respuesta (legal, comunicación, dirección)
- Qué decir y qué no decir en los primeros comentarios públicos
- Cuándo y cómo borrar contenido o comentarios con implicaciones legales
- Documentación y preservación de evidencias digitales

### 5. Checklist de compliance legal para el equipo de social media
Crea una lista de verificación que el equipo de social media pueda usar antes de publicar cualquier contenido para asegurarse de que no hay riesgos legales evidentes.

## Formato de salida
- Responde en español con lenguaje jurídico accesible para no juristas.
- Usa tablas de riesgo, checklists y ejemplos de situaciones reales.
- Incluye un modelo de política de uso de contenido de terceros en redes sociales.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Compliance legal en estrategias de redes sociales',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            // 9 - Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de comunidad y atención al cliente en redes sociales',
                'description'      => 'Aprende a construir y gestionar comunidades activas de clientes en redes sociales, convirtiendo las interacciones públicas en oportunidades de retención, upsell y mejora del producto.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un community manager y especialista en customer success digital con experiencia convirtiendo las redes sociales en un canal efectivo de retención, soporte y expansión de clientes.

Necesito que me ayudes a diseñar una estrategia de gestión de comunidad en redes sociales que refuerce el customer success y mejore la experiencia del cliente a lo largo del ciclo de vida.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Cuál es el producto o servicio (SaaS, app de consumo, servicio profesional)?
2. ¿Cuáles son las plataformas donde los clientes ya interactúan con la marca (Instagram, LinkedIn, X/Twitter, foros propios, grupos de Facebook)?
3. ¿Cuál es el volumen aproximado de menciones o mensajes directos que recibe la empresa en redes sociales a la semana?
4. ¿Hay un equipo dedicado a community management o lo gestiona el equipo de customer success o marketing?
5. ¿Se usan las redes sociales como canal de soporte al cliente o se redirige siempre a otros canales?

## Estrategia de community management para customer success que debes diseñar

### 1. Arquitectura de la comunidad de clientes
Define la estructura óptima de la comunidad de clientes en redes sociales:
- En qué plataformas concentrar la comunidad según el tipo de cliente
- Qué tipo de contenido genera engagement genuino de clientes (no solo de prospectos)
- Cómo segmentar la comunicación para clientes en distintas etapas (nuevos, activos, avanzados)

### 2. Protocolo de atención al cliente en redes sociales
Diseña un proceso de atención al cliente que integre las redes sociales en la estrategia de soporte:
- Tiempos de respuesta esperados por canal y tipo de consulta
- Árbol de decisión para gestionar consultas públicas: responder públicamente, derivar a DM o redirigir a soporte
- Guía de tono y lenguaje para las respuestas públicas en redes
- Cómo gestionar una queja pública de un cliente insatisfecho sin empeorar la situación

### 3. Programa de clientes embajadores (advocates)
Diseña un programa para identificar y activar a los clientes más comprometidos como embajadores en redes sociales:
- Criterios para identificar a los candidatos a embajador
- Incentivos y reconocimiento para participar en el programa
- Tipos de contenido que pueden generar (testimonios, casos de uso, tips de uso del producto)
- Cómo medir el impacto del programa en la retención y la expansión

### 4. Estrategia de contenido de customer success para redes sociales
Propón tipos de contenido específicos para aumentar el éxito de los clientes actuales:
- Tutoriales y tips de uso del producto en formato social
- Casos de éxito de clientes en formato historia o carrusel
- Contenido de onboarding para nuevos clientes publicado en redes
- Anuncios de nuevas funcionalidades orientados a usuarios actuales

### 5. Métricas de community management para customer success
Define métricas que conecten la gestión de la comunidad con los resultados de customer success:
- Tiempo de respuesta y tasa de resolución en redes sociales
- Impacto del engagement en redes en la tasa de retención (correlación, no causalidad)
- Crecimiento y actividad de la comunidad de clientes
- Número de advocates activos y su impacto en referidos y expansión

## Formato de salida
- Responde en español con lenguaje de customer success y community management claro.
- Incluye plantillas de respuesta para situaciones frecuentes de atención al cliente en redes.
- Proporciona un árbol de decisión visual en texto para la gestión de consultas públicas.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Community management orientado a retención de clientes',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 10 - Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Estrategia de redes sociales para freelancers: captar clientes con contenido',
                'description'      => 'Aprende a usar las redes sociales como canal principal de captación de clientes como freelancer o consultor independiente, construyendo autoridad en tu nicho y generando un flujo constante de oportunidades sin depender de plataformas de terceros.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un coach de negocio para freelancers y consultores independientes con experiencia ayudando a profesionales de distintas disciplinas a construir su presencia digital y atraer clientes de calidad a través del contenido en redes sociales.

Necesito que me ayudes a diseñar una estrategia de redes sociales que me permita captar clientes de forma constante como freelancer, posicionarme como referente en mi nicho y reducir mi dependencia de plataformas como Upwork o Fiverr.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Cuál es tu especialidad como freelancer (diseño, desarrollo, copywriting, consultoría, fotografía, otro)?
2. ¿A qué tipo de cliente te diriges: startups, pymes, grandes empresas, otros freelancers o individuos?
3. ¿En qué plataformas tienes presencia actualmente y cuál funciona mejor?
4. ¿Publicas contenido regularmente? ¿Con qué frecuencia y sobre qué temas?
5. ¿Cuál es el mayor obstáculo para crecer en redes: falta de tiempo, no saber qué publicar, miedo al juicio o poca audiencia inicial?

## Estrategia de redes sociales para freelancers que debes generar

### 1. Posicionamiento de nicho y propuesta de valor en redes
Ayúdame a definir mi posicionamiento en redes sociales como freelancer:
- Cómo elegir un nicho lo suficientemente específico para destacar sin ser demasiado estrecho
- Cómo articular mi propuesta de valor en una sola frase adaptada al perfil de cada plataforma
- Qué incluir y qué excluir en la bio o descripción de perfil para atraer al cliente ideal

### 2. Plataformas prioritarias por tipo de freelancer
Para tres perfiles de freelancer distintos (uno creativo, uno técnico, uno de servicios profesionales), recomienda:
- La plataforma principal donde concentrar el setenta por ciento del esfuerzo
- La plataforma secundaria de apoyo
- Las plataformas que no merece la pena trabajar dado el perfil

### 3. Sistema de contenido sostenible para freelancers
Diseña una estrategia de contenido que un freelancer pueda mantener sin que consuma todo su tiempo:
- Frecuencia de publicación mínima viable por plataforma
- Tres pilares de contenido adaptados al perfil del freelancer (uno de autoridad, uno de proceso, uno personal)
- Proceso de creación de contenido en batching para producir una semana de contenido en dos horas
- Cómo reutilizar un mismo contenido en distintos formatos y plataformas

### 4. De seguidor a cliente: el proceso de conversión
Explica cómo convertir a los seguidores de redes sociales en clientes reales:
- Qué tipo de llamada a la acción funciona en redes sin resultar invasiva
- Cómo pasar de una conversación en comentarios o DM a una reunión de descubrimiento
- Qué información incluir en el perfil para facilitar que los clientes potenciales contacten
- Cómo usar las historias o el contenido efímero para generar urgencia o recordatorio

### 5. Plan de los primeros noventa días para un freelancer que empieza en redes
Diseña un plan de acción para los primeros tres meses en redes sociales para un freelancer que empieza desde cero o reinicia su presencia:
- Objetivos de cada mes (no de resultados, sino de actividad y aprendizaje)
- Acciones concretas por semana
- Qué métricas revisar al final de cada mes para ajustar la estrategia

## Formato de salida
- Responde en español con lenguaje directo y motivador para freelancers.
- Incluye ejemplos de bios, ideas de contenido y plantillas de mensajes de contacto.
- Proporciona un calendario de contenido tipo para la primera semana.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Captación de clientes freelance mediante contenido en redes sociales',
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
