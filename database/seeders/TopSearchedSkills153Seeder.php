<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills153Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Producción de video para marketing',
                'description'      => 'Planifica, graba y edita video de marketing con los recursos que tienes: el equipo básico, los formatos que más convierten y la producción que no requiere un estudio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un productor de video de marketing con experiencia en producción con presupuesto ajustado para empresas que no tienen equipo propio de producción audiovisual. Conoces qué formatos de video funcionan en cada canal, cómo optimizar la producción para maximizar el output con recursos limitados y qué métricas determinan si un video de marketing está funcionando.

Necesito una guía completa para producir video de marketing de forma eficaz. Desarrolla los siguientes bloques:

**1. Qué video producir y para qué canal**
Empieza por la estrategia antes de pensar en la producción:
- Los formatos de video que más convierten según el objetivo: brand awareness, generación de leads, nurturing, conversión
- Las especificaciones técnicas y de duración que funcionan en cada plataforma: YouTube (largo + shorts), Instagram (reels, feed, stories), LinkedIn, TikTok, web y landing pages
- El video de producto vs. el video testimonial vs. el video explicativo: cuándo usar cada uno y qué resultados esperar
- Cómo el video encaja en el funnel de marketing: qué tipo de contenido para cada fase del buyer journey
- Cómo priorizar qué videos producir primero con un presupuesto y tiempo limitados

**2. El equipo mínimo viable para producción de video**
Qué necesitas realmente para producir video de calidad profesional sin estudio:
- La cámara: smartphone de gama alta vs. mirrorless de entrada — diferencias reales en el resultado final
- El audio: por qué el micrófono es más importante que la cámara y cuál comprar según el tipo de video
- La iluminación: el setup de tres puntos simplificado, los paneles LED de bajo coste y cómo usar la luz natural
- El fondo: greenscreen, fondos físicos, decoración de espacios de la empresa — cuándo usar cada opción
- El teleprónter: las apps de móvil que funcionan y cómo usarlas sin que se note
- Presupuesto orientativo por nivel: setup básico (<500€), setup profesional (500-2.000€), setup avanzado (>2.000€)

**3. Preproducción: el trabajo que hace posible una buena grabación**
La calidad de un video se decide antes de encender la cámara:
- Cómo escribir un guion de video de marketing que convierte: estructura, tono y la regla de los primeros 5 segundos
- El storyboard simplificado: cómo planificar los planos sin saber dibujar
- El plan de rodaje: cómo grabar en el menor número de jornadas posible agrupando localizaciones y personas
- Cómo preparar al presentador que no es actor: los ejercicios de calentamiento, el manejo del teleprónter y la dirección de actores no profesionales
- El checklist de preproducción: los 20 puntos que debes verificar antes de cualquier grabación

**4. Producción: la grabación eficiente**
Cómo grabar bien en el menor tiempo posible:
- Los planos básicos del video de marketing y para qué sirve cada uno: plano americano, primer plano, detalle, plano general
- Cuántas tomas grabar y cuándo parar: el criterio profesional para no saturar el montaje
- Cómo manejar los imprevistos en el rodaje: ruido, iluminación cambiante, presentadores nerviosos
- Grabación en remoto: cómo conseguir calidad en las grabaciones de entrevistas por videoconferencia
- Las métricas de eficiencia del rodaje: minutos de material grabado por minuto de video final entregado

**5. Posproducción: edición, color y sonido**
El montaje que convierte material en video de marketing:
- Las herramientas de edición según nivel: CapCut (básico), DaVinci Resolve (profesional gratuito), Premiere Pro (estándar de industria)
- La estructura de montaje para video de marketing: cómo aplicar el ritmo que mantiene la atención
- La corrección de color básica: los ajustes que hacen cualquier video parecer más profesional
- La mezcla de audio: los ajustes imprescindibles para que la voz se oiga clara y el fondo no moleste
- Los subtítulos: por qué son imprescindibles y cómo generarlos de forma automática con calidad

**6. Distribución y medición**
El video publicado necesita distribución y seguimiento:
- Cómo optimizar el video para SEO en YouTube: título, descripción, tags, thumbnails y capítulos
- Los formatos de exportación correctos para cada plataforma: resolución, codec, bitrate y duración
- Las métricas de video que importan: view-through rate, retention curve, click-through rate y conversion rate
- Cómo A/B testear thumbnails y títulos para maximizar el CTR
- El repropósito del video: cómo sacar cortes, GIFs, carruseles y transcripciones de un solo video largo
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Producir video de marketing de calidad con presupuesto y equipo ajustado',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Procesamiento de video e imagen en backend',
                'description'      => 'Trabaja con medios en el servidor: transcoding, thumbnails, watermarks, streaming HLS y las librerías que hacen posible la plataforma de video.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero backend con especialización en procesamiento de medios audiovisuales, streaming de video y pipelines de procesamiento de imagen a escala. Tienes experiencia implementando plataformas de video, sistemas de procesamiento de imágenes en producción y arquitecturas de media delivery.

Necesito una guía técnica completa sobre procesamiento de video e imagen en el servidor. Desarrolla los siguientes bloques:

**1. Fundamentos del procesamiento de medios en el servidor**
Explica los conceptos técnicos que todo backend developer debe conocer antes de implementar:
- Codecs de video: H.264, H.265/HEVC, AV1, VP9 — diferencias en calidad, compresión y compatibilidad
- Contenedores vs. codecs: qué es un MP4, MKV, WebM y por qué importa la diferencia
- Resoluciones y bitrates: cómo calcular el bitrate adecuado para cada resolución y use case
- Codecs de audio: AAC, MP3, Opus — cuándo usar cada uno
- Formatos de imagen: JPEG, PNG, WebP, AVIF — compresión, calidad y soporte en navegadores

**2. FFmpeg: la navaja suiza del procesamiento de medios**
FFmpeg es la herramienta fundamental para cualquier pipeline de medios:
- Instalación, compilación con soporte de codecs propietarios y los flags más importantes
- Transcoding básico: convertir formatos, cambiar resolución, ajustar bitrate y framerate
- Procesamiento de audio: normalización, extracción, mezcla y filtros
- Thumbnails y frames: extraer fotogramas, generar sprite sheets para la barra de progreso del video
- Watermarks: superponer imágenes, texto y logos sobre video con posicionamiento dinámico
- Concatenación, recorte y montaje: las operaciones más frecuentes en scripts de procesamiento
- FFprobe: analizar metadatos de medios y validar archivos antes de procesarlos

**3. Streaming adaptativo con HLS y DASH**
El streaming moderno requiere múltiples calidades y segmentación:
- Qué es el streaming adaptativo (ABR) y cómo funciona: HLS vs. DASH
- Cómo generar un playlist HLS con FFmpeg: múltiples rendiciones, segmentación y el archivo master
- El manifest DASH: estructura y cómo generarlo
- CDN para video: cómo configurar la distribución de los segmentos HLS en CloudFront, Fastly o Cloudflare
- DRM básico: FairPlay (Apple), Widevine (Google) y PlayReady (Microsoft) — cómo funciona la protección de contenido

**4. Pipelines de procesamiento asíncrono**
El procesamiento de medios no puede hacerse síncronamente:
- Arquitectura de un pipeline de procesamiento: upload → queue → worker → storage → CDN
- Colas de trabajo: Redis + Sidekiq, BullMQ, AWS SQS — cuándo usar cada una para procesamiento de medios
- Workers de procesamiento: cómo diseñar workers que manejen archivos grandes sin agotar la memoria
- Progress tracking: cómo informar al usuario del progreso del procesamiento en tiempo real (WebSockets, SSE)
- Manejo de errores y reintentos: las estrategias para un pipeline robusto que no pierde trabajos
- Almacenamiento de medios: S3 y equivalentes, gestión del ciclo de vida y reducción de costes de almacenamiento

**5. Procesamiento de imagen a escala**
El procesamiento de imágenes tiene sus propias herramientas y patrones:
- ImageMagick vs. libvips vs. Sharp (Node.js): comparativa de rendimiento y cuándo usar cada una
- Resize, crop, format conversion y compresión: las operaciones más frecuentes y cómo optimizarlas
- Lazy processing vs. eager processing: cuándo procesar en el upload vs. en la primera petición
- Image CDN: Cloudinary, Imgix, Cloudflare Images — qué ofrecen y cuándo justifican el coste frente a la solución propia
- WebP y AVIF on-the-fly: cómo servir el formato óptimo según el navegador usando content negotiation

**6. Servicios gestionados y cuándo usarlos**
A veces no tiene sentido construir el pipeline propio:
- AWS Elemental MediaConvert vs. Mux vs. Cloudflare Stream vs. Bunny.net: comparativa para distintos volúmenes y casos de uso
- Cuándo los servicios gestionados son más rentables que la infraestructura propia
- Cómo diseñar la integración con un servicio gestionado de forma que puedas migrar si los precios suben
- La arquitectura de referencia de una plataforma de video a escala: las decisiones que importan
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar pipelines de transcoding, HLS y procesamiento de imagen en backend',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Motion graphics y animación',
                'description'      => 'Da vida a las interfaces y las comunicaciones de marca con animación. After Effects, Lottie, CSS animations y cuándo la animación ayuda vs. cuándo distrae.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de motion graphics con experiencia en animación para interfaces digitales, comunicación de marca y explainers de producto. Dominas After Effects, Lottie, CSS animations y sabes cuándo la animación añade valor y cuándo simplemente genera ruido visual.

Necesito una guía completa sobre motion graphics y animación aplicados al diseño digital. Desarrolla los siguientes bloques:

**1. Los principios del motion design**
Antes de animar nada, hay que entender qué hace que el movimiento sea efectivo:
- Los 12 principios de la animación de Disney adaptados al motion design digital: anticipación, staging, timing, squash and stretch, arcos, follow-through, easing
- El easing: ease-in, ease-out, ease-in-out y las curvas de bezier personalizadas — qué transmite cada uno y cómo elegir
- El timing: cómo la duración de una animación cambia su percepción (0.15s vs. 0.5s vs. 1s)
- Animación funcional vs. animación decorativa: cuándo el movimiento tiene un propósito y cuándo solo distrae
- La accesibilidad en la animación: prefers-reduced-motion y cómo respetarla sin eliminar toda animación

**2. Cuándo la animación ayuda y cuándo daña**
La animación mal usada destruye la experiencia de usuario:
- Los casos donde la animación añade valor: transiciones de estado, feedback de interacción, onboarding, storytelling de datos
- Los casos donde la animación daña la experiencia: carga de la página, animaciones que retrasan el acceso al contenido, scroll jacking
- La regla del propósito: cada animación debe responder a "¿qué entiende mejor el usuario gracias a este movimiento?"
- Performance y animación: qué propiedades CSS animar de forma eficiente (transform, opacity) y qué evitar (top, left, width, height)
- Los errores más frecuentes: animaciones demasiado largas, rebotes excesivos y la tentación de animar todo

**3. CSS animations y transitions para interfaces**
La animación en la web empieza por CSS:
- CSS transitions: propiedades, duración, easing y delay — las combinaciones más útiles
- CSS animations con @keyframes: cuándo usarlas en lugar de transitions y cómo estructurarlas
- Las animaciones de interfaz más frecuentes: hover states, focus states, modals, toasts, skeleton loaders
- Variables CSS y animaciones dinámicas: cómo usar custom properties para animaciones configurables
- Cómo usar la API Web Animations (WAAPI) para animaciones más complejas directamente desde JavaScript
- GSAP (GreenSock): cuándo justifica añadir la librería y qué hace que CSS solo no puede

**4. After Effects para motion graphics**
After Effects es el estándar de la industria para motion graphics:
- Estructura de un proyecto en AE: composiciones, capas, precomps y cómo organizarlo para trabajar con eficiencia
- Las herramientas más usadas: keyframes, graph editor, parenting, expresiones básicas
- Motion blur, depth of field y el balance entre realismo y rendimiento
- Tipografía animada: las técnicas para animar texto de forma que refuerza el mensaje
- Exportación: el codec correcto para cada destino (H.264 para social, ProRes para entregar al cliente, Lottie para web)
- Plugins imprescindibles: Motion Bro, Flow, Animation Composer — qué aporta cada uno

**5. Lottie: animación vectorial para web y móvil**
Lottie es el puente entre After Effects y las interfaces digitales:
- Qué es Lottie y cómo funciona: el pipeline AE → Bodymovin/LottieFiles → JSON → web/app
- Las limitaciones de Lottie: qué efectos y plugins de AE no exportan correctamente
- Cómo optimizar un JSON de Lottie para reducir su peso sin perder calidad visual
- LottieFiles: la librería de animaciones listas para usar y cómo adaptarlas a la identidad de marca
- Dotlottie: el formato mejorado que reduce el peso de los archivos JSON
- Casos de uso ideales: loaders, iconos animados, ilustraciones interactivas, onboarding screens

**6. Explainers y comunicación de marca con animación**
La animación aplicada a la comunicación corporativa:
- El explainer de producto: estructura narrativa, duración ideal y cómo combinar motion graphics con voz en off
- Cómo definir el estilo de animación de una marca: variables de movimiento (velocidad, easing, tipo de movimiento)
- El sistema de animación: cómo documentar los principios de movimiento de una marca para que todo el equipo los aplique consistentemente
- Las herramientas de animación accesibles para diseñadores sin experiencia en AE: Jitter, Rive, Haiku Animator
- Cómo presentar motion graphics al cliente: el animatic, la versión sin audio y el feedback efectivo sobre animación
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear animaciones y motion graphics para interfaces y comunicación de marca',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Video en el proceso de ventas',
                'description'      => 'Usa video personalizado para prospectar, hacer seguimiento y cerrar: las herramientas, los guiones y los momentos del ciclo de ventas donde el video funciona mejor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en ventas consultivas con especialización en el uso de video personalizado a lo largo del ciclo de ventas. Tienes experiencia usando herramientas como Vidyard, Loom y BombBomb para mejorar las tasas de apertura de emails, el engagement en el outbound y las tasas de cierre.

Necesito una guía completa sobre cómo integrar el video en mi proceso de ventas. Desarrolla los siguientes bloques:

**1. Por qué el video funciona en ventas**
Explica el impacto real del video en el proceso de ventas con datos:
- Las tasas de apertura y respuesta del email de prospección con thumbnail de video vs. email de texto plano
- Por qué el video genera confianza más rápido que el texto: la presencia, el tono y la humanización
- Cómo el video personalizado se diferencia del video de marketing genérico y por qué el receptor lo nota
- Los contextos donde el video tiene mayor impacto: prospección en frío, seguimiento post-reunión, propuesta y cierre, onboarding de nuevos clientes
- Las limitaciones del video en ventas: cuándo no usar video y por qué la personalización es imprescindible

**2. Las herramientas de video para ventas**
Qué herramientas usar según el contexto y el presupuesto:
- Loom: la herramienta más sencilla para videos de seguimiento y demos asíncronas — ventajas, limitaciones y cómo usarla bien
- Vidyard: las funciones avanzadas de analytics (quién vio el video, cuánto tiempo, cuántas veces) y cómo usarlas para priorizar el seguimiento
- BombBomb: la integración con el email y los CRM más frecuentes
- Sendspark: para personalización a escala con variables dinámicas
- La cámara y el audio mínimo para que el video de ventas parezca profesional sin ser excesivo
- Cómo configurar el fondo, la iluminación y el encuadre en 5 minutos

**3. El video de prospección en frío**
El primer contacto por video tiene sus propias reglas:
- La estructura del video de prospección que obtiene respuesta: los primeros 3 segundos, el cuerpo y el CTA
- Cómo personalizar el video para que el prospecto vea que no es un template: mencionar algo específico de su empresa, su perfil o su industria
- Cómo grabar el video de forma que parezca natural y no leído: el método de los puntos vs. el guion
- El thumbnail del video en el email: cómo crear thumbnails que generan curiosidad y clics
- La secuencia de outbound con video: en qué touchpoint introducir el video y cuántos videos incluir
- Ejemplos de guiones de video de prospección para distintos sectores y personas de comprador

**4. El video de seguimiento post-reunión**
El seguimiento por video después de una primera reunión es una de las aplicaciones más efectivas:
- Cuándo grabar el video: las primeras 2 horas después de la reunión
- Qué incluir: un resumen de los puntos clave, las próximas acciones y el CTA concreto
- Cómo usar el screen recording para resumir la propuesta o los materiales compartidos en la reunión
- Cómo personalizar el video de seguimiento para múltiples stakeholders del mismo deal
- El video de "no he tenido noticias tuyas": cómo hacerlo sin parecer desesperado

**5. El video en la propuesta y el cierre**
El video en las fases finales del ciclo de ventas:
- El video de presentación de propuesta: cómo complementar el documento con un video que explica las partes clave en el tono correcto
- El video para manejar objeciones: cuándo es mejor responder una objeción por video que por email
- El video de urgencia y escasez: cómo comunicar un deadline sin que parezca presión artificial
- El video de "felicitación" al firmar: el primer mensaje al nuevo cliente que marca el tono de la relación
- Cómo usar los analytics de video (Vidyard, Loom) para detectar señales de compra: el prospecto que ve el video de propuesta tres veces

**6. Video a escala: personalización sin perder eficiencia**
Cómo usar el video en ventas sin que consuma todo el tiempo:
- Los templates de video: cómo crear un video base que se personaliza en 30 segundos
- La personalización a escala con herramientas como Sendspark o HeyGen para videos con nombre y empresa dinámicos
- Cómo integrar los videos en las secuencias de email de tu CRM (HubSpot, Salesforce, Outreach)
- El tiempo de inversión real: cuántos minutos por video y cuándo el ROI lo justifica
- Cómo medir el impacto del video en el pipeline: las métricas que debes trackear
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Usar video personalizado en prospección, seguimiento y cierre para aumentar la conversión',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Multimedia en producto',
                'description'      => 'Integra audio, video e imágenes en el producto con las decisiones técnicas y de UX que determinan si los medios enriquecen la experiencia o la ralentizan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager con experiencia en productos que integran contenido multimedia: plataformas de e-learning, marketplaces de contenido, productos de comunicación y aplicaciones con medios enriquecidos. Conoces las implicaciones técnicas de incluir audio, video e imágenes en un producto digital y las decisiones de UX que determinan si los medios mejoran o degradan la experiencia.

Necesito una guía completa para tomar las decisiones correctas al integrar multimedia en un producto. Desarrolla los siguientes bloques:

**1. El problema de los medios en el producto**
Empieza por los trade-offs que el PM debe entender:
- Por qué los medios son costosos: almacenamiento, procesamiento, distribución y ancho de banda
- El impacto de los medios en el performance del producto: tiempos de carga, consumo de datos y experiencia en conexiones lentas
- Los medios como diferenciador vs. los medios como deuda técnica: cuándo justifica la complejidad
- El contenido generado por el usuario (UGC) vs. el contenido producido por la empresa: implicaciones técnicas y de moderación
- Cuándo la solución es un servicio de terceros (Cloudinary, Mux, Vimeo) vs. construir la infraestructura propia

**2. Imágenes en el producto: las decisiones que más impactan**
Las imágenes son el tipo de medio más frecuente y el más ignorado:
- Formatos modernos: cuándo migrar a WebP y AVIF y cómo gestionar la compatibilidad
- Responsive images: srcset, sizes y art direction — cuándo necesitas cada uno
- Lazy loading: cómo implementarlo correctamente sin dañar el LCP (Largest Contentful Paint)
- Image optimization pipeline: cuándo procesar en el upload vs. en la entrega, y las herramientas para cada opción
- Los CDN de imagen (Cloudinary, Imgix, Cloudflare Images): cuándo el coste está justificado
- UGC de imágenes: moderación, compresión automática y las decisiones que afectan a la experiencia del creador

**3. Video en el producto: arquitectura y UX**
El video es el medio con mayor impacto técnico y de experiencia:
- El player de video: construir vs. usar un servicio (Mux, Vimeo, Wistia, Cloudflare Stream) — criterios de decisión reales
- Streaming adaptativo (HLS/DASH): cuándo es imprescindible y cuándo es over-engineering
- La experiencia de subida de video para el usuario: progress bars, validación de formatos y manejo de archivos grandes
- Autoplay: cuándo tiene sentido, las restricciones del navegador y cómo manejarlo
- Video y accesibilidad: subtítulos, audiodescripciones y los requisitos legales según el tipo de producto
- El coste real del video: calcular el coste por minuto de video almacenado y servido a escala

**4. Audio en el producto**
El audio es el medio más olvidado y el que mejor funciona en contextos específicos:
- Cuándo el audio añade valor: podcasts, notificaciones sonoras, interfaces de voz, música de fondo
- Los formatos de audio para la web: MP3, AAC, Opus — cuándo usar cada uno
- Grabación de audio en el producto: cuándo ofrecer al usuario grabar audio desde el navegador y las implicaciones técnicas
- El Web Audio API: qué permite hacer y cuándo es la herramienta adecuada
- Accesibilidad en audio: transcripciones y los requisitos según el tipo de contenido

**5. Performance y medios: las métricas que importan**
Cómo medir el impacto de los medios en el rendimiento del producto:
- Core Web Vitals y medios: cómo LCP, FID y CLS se ven afectados por las imágenes y el video
- Cómo instrumentar el performance de los medios: las métricas personalizadas que debes trackear
- El impacto de los medios en la experiencia en móvil y en conexiones lentas: cómo testear en condiciones reales
- Los presupuestos de performance: cómo establecer un budget de peso de página que incluya los medios
- El experimento de performance: cómo A/B testear el impacto de optimizaciones de medios en las métricas de negocio

**6. El roadmap de medios**
Cómo planificar la incorporación y evolución de los medios en el producto:
- Cómo priorizar las mejoras de medios frente a nuevas funcionalidades
- El MVP de medios: qué implementar primero para aprender con el menor coste técnico
- Cómo gestionar la deuda técnica de los medios: el momento en que el servicio de terceros ya no escala y hay que construir la infraestructura propia
- Los indicadores que señalan que la estrategia de medios actual no está funcionando
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Tomar decisiones de producto sobre integración de video, audio e imagen con impacto positivo en la experiencia',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Comunicación visual en RRHH',
                'description'      => 'Usa video e infografías para comunicar cultura, beneficios y onboarding: el contenido visual que los empleados realmente ven y recuerdan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en comunicación interna con especialización en contenido visual para equipos de recursos humanos. Tienes experiencia creando programas de onboarding en video, infografías de políticas de empresa y campañas de comunicación interna que consiguen que los empleados realmente lean y recuerden los mensajes de RRHH.

Necesito una guía completa para usar la comunicación visual en RRHH de forma efectiva. Desarrolla los siguientes bloques:

**1. Por qué la comunicación visual funciona mejor en RRHH**
El contexto del problema que queremos resolver:
- Por qué los empleados no leen los documentos de RRHH: la paradoja del contenido importante que nadie consume
- La ventaja del procesamiento visual: por qué procesamos imágenes y video 60.000 veces más rápido que el texto
- Los tipos de mensajes de RRHH que se benefician especialmente de lo visual: políticas, beneficios, procesos, cultura, onboarding
- El riesgo de la comunicación visual mal ejecutada: infografías que simplifican en exceso y videos que no se terminan de ver
- Cómo medir si la comunicación visual de RRHH está funcionando: métricas de apertura, tiempo de visualización y comprensión real

**2. El video de onboarding que realmente funciona**
El onboarding es el caso de uso más impactante del video en RRHH:
- La estructura del programa de onboarding en video: qué se comunica en el primer día, primera semana y primer mes
- Los tipos de video de onboarding: el video de bienvenida del CEO, el tour de la oficina, los tutoriales de herramientas, las entrevistas con compañeros
- Cómo producir videos de onboarding con el equipo interno: el guion, el formato y el nivel de producción necesario
- El video asíncrono vs. la sesión sincrónica: cuándo usar cada uno y cómo combinarlos
- Cómo mantener el contenido de onboarding actualizado sin tener que regrabar todo constantemente
- Las plataformas de onboarding digital que integran video: Notion, Loom, WorkRamp, Leapsome

**3. Infografías para políticas y procesos de RRHH**
Las políticas de empresa son el contenido más ignorado de la intranet:
- Qué tipos de políticas y procesos se benefician más de ser convertidos a infografía: vacaciones, gastos, evaluación del desempeño, código de conducta
- La estructura de una infografía de política efectiva: jerarquía visual, iconografía y el balance entre simplicidad y completitud
- Herramientas de diseño accesibles para equipos de RRHH sin diseñador dedicado: Canva, Visme, Piktochart — cuándo usar cada una
- Cómo hacer que el equipo de legal y cumplimiento acepte la versión visual de una política
- El sistema de plantillas de infografía para mantener la consistencia visual en toda la comunicación de RRHH

**4. Comunicación de beneficios y compensación**
Los empleados frecuentemente no conocen ni valoran los beneficios que tienen:
- Por qué los paquetes de beneficios complejos necesitan comunicación visual para ser comprendidos
- El video de beneficios anual: cómo producirlo y cuándo enviarlo para maximizar el impacto
- Las infografías de compensación total (total rewards): cómo visualizar el salario + beneficios + desarrollo para que los empleados vean el valor completo
- Cómo comunicar cambios en los beneficios sin generar alarma: el video de explicación de cambios
- Las encuestas visuales de valoración de beneficios: cómo preguntar de forma que las respuestas sean accionables

**5. Video para la cultura y el employer branding interno**
La cultura se vive pero también se comunica:
- Los formatos de video cultural que funcionan: entrevistas a empleados, días en la empresa, celebraciones de hitos, behind the scenes
- Cómo involucrar a los empleados en la creación de contenido cultural sin que parezca forzado
- El video de valores: cómo hacer que los valores de la empresa sean algo más que un poster en la pared
- Contenido de culture fit para candidatos: qué mostrar externamente para atraer al talento correcto
- Cómo construir un repositorio de contenido cultural que crece con la empresa

**6. Herramientas y flujo de trabajo para el equipo de RRHH**
La comunicación visual sin un flujo de trabajo eficiente se convierte en carga:
- El stack de herramientas mínimo viable para comunicación visual en RRHH: diseño, video, distribución y analytics
- Cómo organizar la producción de contenido visual con un equipo de RRHH que no es de comunicación
- El calendario de comunicación visual anual: los momentos del año donde la comunicación visual de RRHH tiene más impacto
- Cómo medir el retorno de la inversión en comunicación visual de RRHH: satisfacción, comprensión y reducción de consultas repetidas
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Crear comunicación visual de onboarding, beneficios y cultura que los empleados realmente consumen',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Visualización de datos financieros',
                'description'      => 'Transforma datos financieros complejos en visualizaciones que cualquier stakeholder entiende aplicando principios de diseño de datos a las finanzas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en visualización de datos con especialización en datos financieros para presentaciones a directivos, inversores y consejo de administración. Conoces los principios del diseño de información de Edward Tufte, los estándares del IBCS (International Business Communication Standards) y las herramientas de visualización más usadas en entornos financieros.

Necesito una guía completa para visualizar datos financieros de forma efectiva. Desarrolla los siguientes bloques:

**1. Los principios del diseño de datos financieros**
Los datos financieros tienen sus propios estándares de presentación:
- Los principios de Tufte aplicados a los datos financieros: data-ink ratio, chartjunk, sparklines
- Los estándares IBCS (International Business Communication Standards): la notación unificada para reportes de negocio
- Los cinco tipos de mensaje que puede transmitir una visualización: comparación, tendencia, correlación, distribución y composición — cuándo usar cada uno
- Los errores más frecuentes en visualizaciones financieras: el eje Y truncado que exagera variaciones, los gráficos de tarta con muchos segmentos, el 3D que distorsiona
- Por qué el color en los datos financieros no es decorativo: cómo usarlo para comunicar significado (verde/rojo, actual/objetivo, positivo/negativo)

**2. Los gráficos más útiles para datos financieros**
La selección del gráfico correcto es la decisión más importante:
- El gráfico de barras: horizontal vs. vertical, agrupado vs. apilado, cuándo cada variante funciona mejor para datos financieros
- El waterfall chart (gráfico de cascada): el estándar para mostrar variaciones y bridges financieros — cómo construirlo en Excel y en herramientas modernas
- El bullet graph: la alternativa al velocímetro para mostrar desempeño vs. objetivo
- El small multiples (trellis chart): cómo mostrar muchas categorías de forma comparable sin perder detalle
- El gráfico de líneas para series temporales: cómo manejar múltiples series, escalas dobles y las trampas a evitar
- Las tablas bien diseñadas: cuándo una tabla supera a cualquier gráfico y cómo diseñarlas para que sean legibles

**3. El dashboard financiero: diseño y estructura**
Los dashboards financieros frecuentemente fallan por exceso de información:
- La jerarquía de información en un dashboard financiero: KPIs ejecutivos, tendencias y detalle
- El layout del dashboard: cómo distribuir los elementos siguiendo los patrones de lectura visual (Z-pattern, F-pattern)
- El dashboard para distintas audiencias: qué ve el CFO, qué ve el CEO y qué ve el consejo
- Dashboards estáticos (PPT, PDF) vs. dashboards interactivos (Power BI, Tableau, Looker): cuándo cada formato es el adecuado
- El dashboard de P&L: cómo estructurar la cuenta de resultados de forma visual y comprensible para directivos no financieros

**4. Herramientas de visualización financiera**
Cuál usar según el contexto y las capacidades del equipo:
- Excel y Google Sheets: cómo sacar lo máximo para visualizaciones financieras y los límites que no superan
- Power BI: el estándar de business intelligence en grandes empresas — casos de uso y las trampas de la sobre-ingeniería
- Tableau: para análisis exploratorio de datos financieros complejos
- Flourish y Datawrapper: para visualizaciones publicables en informes y presentaciones
- Python (matplotlib, plotly, seaborn) y R (ggplot2): cuándo la programación supera a las herramientas visuales
- Cómo elegir la herramienta correcta: una matriz de decisión por volumen de datos, frecuencia de actualización y perfil del equipo

**5. Presentar datos financieros a distintas audiencias**
El mismo dato necesita presentaciones distintas según quién lo recibe:
- Para el consejo de administración: qué quieren ver y qué nunca debe aparecer en una presentación al consejo
- Para inversores: el formato del investor update y los datos que generan confianza vs. los que generan preguntas incómodas
- Para directivos no financieros: cómo traducir métricas financieras en implicaciones operativas
- Para el equipo: cómo compartir el estado financiero de la empresa de forma motivadora y comprensible
- El narrative financiero: cómo combinar datos y contexto para que la visualización cuente una historia

**6. Automatización del reporting visual**
Cómo construir un sistema de reporting que no requiere rehacer los gráficos cada mes:
- Connected data sources: cómo conectar las herramientas de visualización directamente con los datos financieros
- Plantillas de informes que se actualizan automáticamente al cambiar los datos de origen
- Cómo mantener la consistencia visual del reporting cuando lo preparan varias personas
- El control de versiones en los informes financieros: cuándo es imprescindible y cómo gestionarlo
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar visualizaciones y dashboards financieros que cualquier directivo entiende a primera vista',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Comunicación visual en contratos y documentos legales',
                'description'      => 'El contrato visual, las infografías de compliance y los documentos legales que la gente realmente lee, entiende y recuerda.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado con especialización en legal design y en la simplificación de documentos legales para mejorar su comprensión y cumplimiento. Conoces el movimiento de legal design (Stanford Legal Design Lab), el contract design y los casos en que los documentos legales visuales han mejorado la comprensión y reducido los litigios.

Necesito una guía completa sobre comunicación visual aplicada a documentos legales. Desarrolla los siguientes bloques:

**1. El problema de los documentos legales tradicionales**
Por qué los documentos legales actuales fallan en su propósito:
- El paradox del contrato: los documentos legales están escritos para proteger a las partes pero raramente son leídos o entendidos por ellas
- Las consecuencias del bajo nivel de comprensión: incumplimientos involuntarios, litigios evitables y pérdida de confianza entre las partes
- La investigación sobre lectura de documentos legales: qué partes leen los usuarios y cuáles ignoran sistemáticamente
- El movimiento de Plain Language y Legal Design: qué son, qué han demostrado y quiénes los lideran
- Los límites legales de la simplificación: cuándo el lenguaje técnico-jurídico es imprescindible y qué partes se pueden visualizar

**2. Los principios del Legal Design**
El diseño de documentos legales es una disciplina con sus propias reglas:
- Los principios del Legal Design Lab de Stanford: user-centered legal design, clarity, usability
- La jerarquía visual en documentos legales: cómo usar la tipografía, el espacio y el color para guiar la lectura
- Los iconos y la pictografía legal: cuándo funcionan y cuándo añaden confusión en lugar de claridad
- El diseño de formularios legales: los campos, el orden y el lenguaje que reducen los errores de cumplimentación
- Casos de estudio de contratos rediseñados: el seguro de capaz de niño en Sudáfrica, el contrato de alquiler finlandés, los términos y condiciones de Creative Commons

**3. El contrato visual**
Cómo diseñar un contrato que las partes realmente leen y entienden:
- La estructura del contrato visual: portada de resumen, cuerpo detallado y anexos — qué va en cada parte
- El resumen ejecutivo del contrato: las 10 cosas más importantes que el firmante debe entender, en lenguaje llano
- Timelines y cronogramas visuales: cómo representar las obligaciones temporales de un contrato
- Las tablas de derechos y obligaciones: cómo visualizar quién puede hacer qué y bajo qué condiciones
- Los flujogramas de decisión: para cláusulas condicionales ("si ocurre X, entonces Y") que son difíciles de seguir en prosa
- Cómo mantener la validez legal del contrato cuando se añaden elementos visuales: la relación entre el texto legal y el resumen visual

**4. Infografías de compliance y políticas**
Las políticas internas y los requisitos de cumplimiento son el contenido legal más ignorado:
- Las políticas de privacidad visuales: cómo comunicar el tratamiento de datos de forma que el usuario realmente entienda
- Las políticas internas de cumplimiento (código de conducta, política antisoborno, RGPD interno): cómo convertirlas en documentos que los empleados leen
- Las infografías de cumplimiento por área de riesgo: la síntesis visual de lo que los equipos deben saber
- Cómo colaborar con el equipo de diseño para producir infografías legales sin perder precisión jurídica
- El mantenimiento de los documentos visuales: cómo actualizar una infografía cuando cambia la normativa sin rehacer todo

**5. Términos y condiciones y avisos legales en productos digitales**
Los T&C son el documento legal más incumplido del mundo:
- Por qué los T&C largos generan el efecto opuesto al deseado: nadie los lee y todos los aceptan sin entenderlos
- El layered contract: estructura de niveles desde el resumen corto hasta el texto legal completo
- Cómo diseñar el flujo de aceptación de T&C en un producto digital para que sea informado y válido legalmente
- Las cookies y los banners de privacidad: diseño que cumple el RGPD sin manipular al usuario
- Los nudges legales: cómo usar el diseño del comportamiento para mejorar el cumplimiento sin coerción

**6. Herramientas y recursos para Legal Design**
El ecosistema de herramientas y aprendizaje para abogados que quieren diseñar mejor:
- Herramientas de diseño accesibles para abogados: Canva, Miro, Figma — para qué sirve cada uno en el contexto legal
- Las organizaciones y comunidades de Legal Design: Legal Design Alliance, Legal Hackers, Stanford Legal Design Lab
- Los mejores ejemplos de contratos y documentos legales rediseñados para aprender del estado del arte
- Cómo proponer Legal Design a un cliente o a la dirección de un despacho tradicional: el business case del diseño legal
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Rediseñar contratos y documentos legales para que sean comprensibles y realmente se cumplan',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Video en customer success',
                'description'      => 'Tutoriales en video, guías de onboarding y las comunicaciones en video que los clientes prefieren a los emails y hacen que el mensaje realmente llegue.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en customer success con especialización en el uso de video como herramienta de comunicación, onboarding y soporte a clientes. Tienes experiencia implementando programas de video en equipos de CS de empresas SaaS y viendo el impacto en activación, adopción y retención.

Necesito una guía completa para usar el video en customer success de forma eficaz. Desarrolla los siguientes bloques:

**1. Por qué el video funciona en customer success**
El contexto y la evidencia que justifica la inversión en video:
- Por qué los emails de texto no consiguen que los clientes cambien su comportamiento: el gap entre recibir la información y actuar
- Las tasas de engagement del video vs. el texto en comunicaciones de CS: lo que muestran los datos de las herramientas como Loom y Vidyard
- Los tres contextos donde el video tiene mayor impacto en CS: onboarding, soporte proactivo y comunicaciones de relación
- El video en CS vs. el video de marketing: por qué la producción no necesita ser perfecta y por qué eso es una ventaja
- Las métricas que mejoran con el video: time-to-value, feature adoption, NPS y churn en los primeros 90 días

**2. Video de onboarding: activar al cliente más rápido**
El onboarding es el momento donde el video tiene mayor retorno:
- La biblioteca de videos de onboarding: qué tutoriales crear primero según el impacto en el time-to-value
- Los videos de "primeros pasos": cómo estructurar el contenido para que el cliente complete las acciones clave en el primer uso
- Video síncrono vs. asíncrono en el onboarding: cuándo grabar un video personalizado vs. enviar el video de la librería
- Cómo integrar los videos de onboarding en el flujo del producto vs. en los emails de secuencia
- El video de bienvenida personalizado del CSM: cómo grabarlo en 2 minutos y qué impacto tiene en la relación inicial
- Cómo medir si los videos de onboarding están funcionando: completion rate, acciones completadas después del video, tiempo de activación

**3. Tutoriales y videos de soporte proactivo**
El soporte por video reduce el volumen de tickets y mejora la satisfacción:
- Cómo identificar qué tutoriales crear: el análisis de los tickets más frecuentes como hoja de ruta de contenido
- La estructura de un tutorial efectivo: el problema, los pasos y el resultado esperado — en menos de 3 minutos
- Screen recording para tutoriales: las mejores prácticas para que la grabación de pantalla sea clara y útil
- La base de conocimiento en video vs. la base de conocimiento de texto: cuándo el video supera al artículo escrito
- Cómo mantener actualizada la biblioteca de tutoriales cuando el producto cambia frecuentemente
- Los videos de respuesta a tickets: cuándo grabar un video en lugar de escribir la respuesta y cómo hacerlo en 3 minutos

**4. Comunicaciones de relación con el cliente**
El video personaliza las comunicaciones de CS y fortalece la relación:
- El video de check-in mensual o trimestral: cómo grabarlo, qué incluir y cómo reemplaza una reunión corta
- El video de business review (QBR): cómo complementar el deck del QBR con un video de resumen del CSM
- El video de renovación: cómo usar el video para recordar el valor generado antes de la conversación de renovación
- El video de comunicación de cambios en el producto: por qué un video de 60 segundos del CSM funciona mejor que el changelog
- El video de recuperación de clientes en riesgo: cuándo enviar un video personal al cliente que ha reducido el uso

**5. Herramientas y flujo de trabajo**
Cómo integrar el video en el día a día del equipo de CS sin que sea una carga:
- Loom para CS: las funciones más útiles y cómo el equipo puede grabarse en 2 minutos sin edición
- Cómo organizar la biblioteca de videos de CS: nomenclatura, actualización y acceso para todo el equipo
- La integración del video con el CRM y el helpdesk: cómo trackear qué clientes han visto qué videos
- Los analytics de video para CS: qué información te da saber que el cliente vio el video 3 veces o lo abandonó a los 30 segundos
- Cómo escalar el video en CS: de los videos personalizados del CSM a los videos de la librería para los segmentos de menor valor

**6. El programa de video en CS: implementación y medición**
Cómo lanzar un programa de video en el equipo de CS y demostrar su valor:
- El piloto de video en CS: con qué casos de uso empezar para tener resultados rápidos
- Cómo formar al equipo de CS en la producción de videos sin experiencia previa
- Las métricas del programa de video: adoption rate del equipo, engagement de los clientes e impacto en las métricas de CS
- Cómo presentar el ROI del video en CS al liderazgo para conseguir presupuesto y herramientas
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Usar video para acelerar el onboarding, mejorar la adopción y reducir churn en customer success',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Productor de contenido visual freelance',
                'description'      => 'Los servicios de producción visual que más se contratan: fotografía de producto, video corporativo, motion graphics y las tarifas del mercado para freelances.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un productor de contenido visual freelance con experiencia en fotografía de producto, video corporativo, motion graphics y dirección de arte para empresas medianas y grandes. Conoces el mercado de la producción visual independiente en España: las tarifas, los clientes, los contratos y las estrategias que permiten construir un negocio sostenible como creativo independiente.

Necesito una guía completa para construir un negocio de producción visual como freelance. Desarrolla los siguientes bloques:

**1. El mercado de la producción visual freelance**
Entiende el mercado antes de entrar:
- Los tipos de clientes que contratan producción visual freelance: agencias (como subcontratistas), empresas directas, startups, e-commerce, consultoras
- Los servicios con más demanda y mejor pago: fotografía de producto y ecommerce, video corporativo y de marca, motion graphics y animación, video para redes sociales, contenido UGC
- Cómo se estructura el mercado: agencias de publicidad que subcontratan vs. clientes directos — las diferencias en margen, autonomía y relación
- Los nichos más rentables para el productor visual freelance: fashion, gastronomía, tecnología, real estate, salud y bienestar
- Las tendencias que están cambiando el mercado: el video vertical, el UGC, la IA en la producción visual y el directo

**2. Las tarifas del mercado y cómo fijar los precios**
El precio es la decisión más difícil para un freelance creativo:
- Tarifas orientativas del mercado español para producción visual freelance por tipo de servicio:
  - Fotografía de producto ecommerce: tarifa por imagen y tarifa de día
  - Video corporativo: tarifa de día de rodaje, tarifa de postproducción y entregables
  - Motion graphics y animación: tarifa por segundo acabado y tarifa por proyecto
  - Contenido para redes sociales: tarifas por pieza y por retainer mensual
- La tarifa por hora vs. por proyecto: cuándo cada modelo es más conveniente para el freelance
- Cómo calcular tu tarifa mínima sostenible: costes fijos, días facturable al año y margen de beneficio
- Cuándo y cómo subir las tarifas sin perder clientes existentes

**3. El portafolio que consigue trabajo**
El portafolio es la herramienta de ventas más importante de un creativo:
- Qué incluir en el portafolio según el servicio que quieres vender: no todo lo que has hecho sino lo mejor de lo que quieres repetir
- Las plataformas de portfolio para producción visual: Behance, Vimeo, una web propia — cuándo cada una y por qué
- Cómo conseguir trabajo para el portfolio cuando empiezas: proyectos pro bono, proyectos propios y cómo hacerlos atractivos para los clientes
- Cómo presentar el trabajo en el portfolio: el contexto del proyecto, el reto, la solución y el resultado
- El portfolio para trabajar con agencias vs. el portfolio para clientes directos: las diferencias que importan

**4. Captación de clientes: los canales que funcionan**
Cómo conseguir trabajo de forma constante:
- El networking presencial: los eventos del sector audiovisual y publicitario donde se hacen los contactos que dan trabajo
- Instagram y LinkedIn para productores visuales: cómo usarlos para mostrar el trabajo y atraer clientes
- Las plataformas de freelance para producción visual: Domestika Pro, Workana, Manfred, Toptal — cuándo tiene sentido usarlas
- Las agencias creativas como canal de trabajo continuo: cómo relacionarte con directores creativos y productores de agencia
- El cliente recurrente: cómo convertir un proyecto puntual en una relación de largo plazo con un retainer

**5. Contratos, propiedad intelectual y gestión del negocio**
Los aspectos legales y financieros que los creativos frecuentemente ignoran:
- El contrato de producción audiovisual: los elementos imprescindibles — alcance, entregables, plazos, revisiones incluidas, forma de pago
- La propiedad intelectual en la producción visual: los derechos que cedes al cliente y los que conservas según la TRLPI
- Las licencias de uso: cómo cobrar distinto según el uso (interno, web, redes sociales, TV, cartelería) y los usos futuros
- La facturación de un productor visual: el régimen de módulos vs. estimación directa, el IVA de las actividades artísticas y los gastos deducibles
- El seguro de responsabilidad civil para productores visuales: cuándo es necesario y qué cubre

**6. Construir un negocio sostenible como productor visual**
La estrategia de largo plazo:
- La especialización como ventaja competitiva: por qué el especialista cobra más que el generalista y cómo elegir tu nicho
- Cómo crecer: de solo a equipo ampliado, de proyecto a producto, de servicio a propiedad intelectual
- El síndrome del freelance: la estacionalidad, la incertidumbre y las estrategias para gestionarlos
- Los momentos de decisión en la carrera del productor freelance: cuándo asociarse, cuándo montar agencia y cuándo volver a nómina
- Las comunidades profesionales de productores audiovisuales en España: asociaciones, grupos de Slack y los foros donde se comparte trabajo
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir y hacer crecer un negocio freelance de producción audiovisual y visual',
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
