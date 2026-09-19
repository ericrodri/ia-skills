<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills486Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de marketing para podcasts con IA',
                'description'       => 'Aprende a usar Claude para diseñar una estrategia completa de marketing para tu podcast: crecimiento de audiencia, distribución multicanal, SEO de audio y campañas de lanzamiento de temporadas.',
                'prompt_content'    => <<<'EOT'
Eres un experto en marketing de podcasts y en estrategias de crecimiento de audiencia en plataformas de audio. Necesito que me ayudes a crear una estrategia de marketing integral para mi podcast que multiplique los oyentes y construya una comunidad activa alrededor del contenido.

**Contexto de mi podcast:**
Tengo un podcast de entrevistas a emprendedores españoles llamado "Construido en España". Llevo 18 meses publicando, tengo 120 episodios y una media de 1.800 descargas por episodio. La mayoría de mis oyentes llegan por recomendación boca a boca. No he hecho prácticamente ninguna acción de marketing proactiva. Quiero llegar a 10.000 descargas por episodio en 12 meses.

**instrucción de estrategia de crecimiento:**
Actúa como mi director de marketing de podcasts. Diseña el plan de crecimiento que incluya:

1. Análisis de la situación actual: dónde están mis oyentes, qué episodios funcionan mejor y por qué.
2. Estrategia de SEO para podcasts: cómo optimizar el título y la descripción de cada episodio para que aparezca en búsquedas.
3. Plan de contenidos derivados: cómo convertir cada episodio en contenido para LinkedIn, Instagram, X y YouTube.
4. Estrategia de colaboraciones: cómo aprovechar la audiencia de mis invitados para crecer.
5. Plan de lanzamiento de la próxima temporada con acciones de marketing concretas.

**tarea de repurposing de contenido:**
Para cada episodio del podcast, diseña el flujo de trabajo de repurposing:
- Audiograma de 60 segundos para Instagram y TikTok (el fragmento más impactante)
- Hilo de LinkedIn con los 5 aprendizajes clave del episodio
- Newsletter semanal con el resumen del episodio + una reflexión personal
- Artículo de blog SEO optimizado de 800-1.200 palabras basado en el episodio
- Quote card para Pinterest con las frases más destacadas del invitado
- Clip de 3 minutos para YouTube Shorts con el momento más viral del episodio

**objetivo de SEO para podcasts:**
Ayúdame a optimizar la presencia del podcast en plataformas de búsqueda:
- Spotify: cómo escribir la descripción del podcast y de cada episodio para el algoritmo
- Apple Podcasts: optimización del título, categoría y palabras clave
- Google Podcasts / Google: cómo aparecer en búsquedas de voz y texto
- YouTube: estrategia de publicar el episodio completo en vídeo para captar audiencia de YouTube
- Transcripciones: cómo usar la transcripción completa del episodio para SEO de la web

**Estrategia de crecimiento por canal:**
Diseña acciones específicas para cada canal:

LinkedIn (canal principal para emprendedores):
- Frecuencia de publicación: 3 posts por semana relacionados con el podcast
- Tipos de contenido: aprendizajes del episodio, behind the scenes, preview de invitados
- Estrategia de comentarios: cómo interactuar con la publicación de mis propios invitados

Instagram (canal visual):
- Stories diarias durante la semana del lanzamiento del episodio
- Reels con los momentos más impactantes del episodio
- Carrusel con el resumen visual de los aprendizajes clave

Newsletter (canal de retención):
- Frecuencia: semanal, el martes de cada semana
- Estructura: 3 aprendizajes del episodio + una recomendación + noticia del sector
- Cómo hacer crecer la lista de suscriptores: lead magnet, CTAs en el podcast

**Plan de lanzamiento de temporada:**
Diseña el plan de marketing para el lanzamiento de una nueva temporada (8 episodios):
- 4 semanas antes: anuncio de la nueva temporada, teaser con los invitados confirmados
- 2 semanas antes: publicación del primer episodio en exclusiva para suscriptores de la newsletter
- Día del lanzamiento: publicación en todas las plataformas, campaña de email, posts en redes
- Semanas 1-8: cadencia de publicación y acciones de marketing por episodio
- Finale de temporada: episodio especial, recap de aprendizajes, campaña de valoraciones en Spotify

**Métricas de marketing a trackear:**
Define el dashboard de marketing del podcast:
- Descargas por episodio (D1, D7, D30)
- Fuentes de tráfico de nuevos oyentes (social, búsqueda orgánica, cross-promotion)
- Tasa de suscripción a la newsletter desde el podcast
- Engagement en redes sociales del contenido derivado
- Ranking en categorías de Spotify y Apple Podcasts
- Tasa de retención de oyentes (qué % de los que escuchan el episodio 1 escuchan el episodio 5)

Empieza con el plan de repurposing de contenido para un episodio tipo y la estrategia de SEO para los títulos y descripciones.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Estrategia completa de marketing para podcasts: crecimiento de audiencia, SEO y distribución multicanal',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Automatización de producción de podcasts con IA',
                'description'       => 'Usa Claude para construir pipelines de automatización de la producción de podcasts: transcripción automática, generación de show notes, distribución a plataformas y análisis de audiencia.',
                'prompt_content'    => <<<'EOT'
Eres un desarrollador especializado en sistemas de automatización de medios de comunicación y en la integración de APIs de procesamiento de audio e IA para la producción de contenido. Necesito que me ayudes a construir un pipeline de producción de podcasts totalmente automatizado.

**Contexto del proyecto:**
Produzco o gestiono la producción de 8 podcasts diferentes para distintos clientes. Cada podcast publica entre 1 y 4 episodios por semana. El proceso manual actual es muy laborioso: descargar el audio del editor, transcribir, escribir show notes, subir a cada plataforma, publicar en la web, programar el post en redes sociales. Este proceso tarda 3-4 horas por episodio. Necesito automatizar el 80% de este trabajo.

**instrucción del pipeline de automatización:**
Actúa como mi arquitecto de sistemas de producción de podcasts. Diseña el pipeline completo que incluya:

1. Ingesta del audio: cómo recibir el archivo del editor (Dropbox, Google Drive, email con adjunto).
2. Transcripción automática: integración con Whisper (OpenAI) o AssemblyAI para transcripción de alta calidad.
3. Generación de show notes con IA: integración con Claude API para generar el contenido editorial.
4. Distribución automática a plataformas: Spotify, Apple Podcasts, Amazon Music vía RSS y APIs.
5. Publicación en web y redes sociales: WordPress, LinkedIn, X, Instagram en el momento de publicación.

**tarea de arquitectura técnica:**
Diseña el sistema con estas tecnologías:
- Orquestador: n8n o Make (anteriormente Integromat) para el flujo de trabajo principal
- Transcripción: API de Whisper de OpenAI con speaker diarization para separar voces
- IA de contenido: Claude API para show notes, resúmenes y contenido de redes
- Almacenamiento: Google Drive para los archivos, Airtable como base de datos de episodios
- Distribución RSS: Transistor, Buzzsprout o Podbean con API para subir episodios
- Publicación web: WordPress REST API para crear el post del episodio automáticamente

**objetivo de generación de show notes con IA:**
Para cada episodio, el sistema debe generar automáticamente:
- Título del episodio: 3 opciones de título con diferentes enfoques (beneficio, pregunta, dato)
- Descripción corta (150 caracteres): para las plataformas de podcasts
- Descripción larga (300-500 palabras): show notes completos con timestamps, temas tratados y recursos mencionados
- Timestamps automáticos: detectar cuándo cambia el tema en la transcripción y generar el índice de contenidos
- Recursos mencionados: extraer URLs, libros, personas y herramientas nombradas en el episodio
- Cita destacada del episodio: la frase más impactante para usar en redes sociales
- SEO meta description: descripción optimizada para el post de la web

**Pipeline de distribución a plataformas:**
Diseña el proceso de publicación en cada plataforma:
- RSS feed: actualización automática cuando se sube el nuevo episodio al hosting
- Spotify: verificar que el episodio está disponible y publicar el post de Spotify en redes
- YouTube Music / YouTube Podcasts: subida del episodio con la imagen de portada del episodio
- Web propia: crear el post en WordPress con el player embebido, la transcripción y los show notes generados
- Newsletter: trigger automático del email a suscriptores cuando el episodio está publicado

**Automatización de contenido para redes sociales:**
Para cada episodio, el sistema genera y programa:
- LinkedIn: hilo de texto con los 5 aprendizajes clave (publicar el mismo día del episodio)
- Instagram: descripción del post + 30 hashtags relevantes (para el audiograma que el editor prepara)
- X/Twitter: thread de 5 tweets con los momentos más destacados
- Pinterest: descripción de la imagen del episodio con palabras clave SEO
- Programación: todas las publicaciones programadas con Buffer o Hootsuite via API

**Análisis automático de audiencia:**
Integra los datos de rendimiento en el pipeline:
- Pull automático de estadísticas de descargas desde el hosting del podcast (Transistor API)
- Comparativa de rendimiento del nuevo episodio vs. la media de los últimos 10
- Detección automática si un episodio tiene rendimiento atípico (alto o bajo) para alerta manual
- Reporte semanal automático al cliente: descargas, tops episodios, tendencia
- Dashboard en Airtable o Notion con todos los KPIs actualizados automáticamente

**Código base del sistema:**
Escribe los componentes principales en Python:
- Script `transcribe_episode.py`: llama a Whisper API, guarda la transcripción en texto y JSON con timestamps
- Función `generate_show_notes(transcript, podcast_config)`: llama a Claude API con el contexto del podcast y genera todos los assets de contenido
- Script `publish_episode.py`: sube el MP3 al hosting RSS, crea el post en WordPress, programa los posts en redes
- Archivo de configuración `podcast_config.yaml`: nombre, descripción, tono, audiencia objetivo, hashtags habituales de cada podcast

**Control de calidad antes de publicar:**
Diseña el paso de revisión humana:
- Sistema de aprobación: el show notes se envía por email al editor para su revisión antes de publicar
- Checklist automático: verificar que el MP3 tiene la duración correcta, que la portada del episodio está en formato correcto
- Período de espera configurable: publicar automáticamente si no hay respuesta en X horas
- Dashboard de revisión: interfaz simple (Notion, Airtable) donde el editor aprueba o edita el contenido generado

Empieza con el script de transcripción y la función de generación de show notes con Claude API.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 90,
                'use_case'          => 'Pipeline de automatización de producción de podcasts: transcripción, show notes y distribución multicanal',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Identidad visual y diseño gráfico para podcasts con IA',
                'description'       => 'Usa Claude para diseñar el sistema visual completo de un podcast: portada, identidad de marca, plantillas para redes sociales, thumbnails de YouTube y materiales de marketing para cada episodio.',
                'prompt_content'    => <<<'EOT'
Eres un experto en diseño de identidad visual para podcasts y en la creación de sistemas de diseño eficientes que permiten producir contenido visual de forma consistente y escalable. Necesito que me ayudes a construir el sistema de identidad visual completo de un podcast y a crear las plantillas que permitan producir todos los assets visuales de forma rápida y coherente.

**Contexto del encargo:**
Me han contratado para diseñar la identidad visual completa de un podcast de tecnología y emprendimiento digital llamado "Sin Código". El objetivo del podcast es hacer accesible el mundo de la tecnología a personas no técnicas. El tono es cercano, optimista y desmitificador. La audiencia principal son profesionales de entre 28 y 45 años que quieren entender la tecnología sin necesidad de saber programar.

**instrucción de estrategia de marca visual:**
Actúa como mi consultor de branding para podcasts. Ayúdame a definir:

1. El concepto visual central del podcast: qué metáforas visuales representan "tecnología accesible sin código".
2. La paleta de colores y su significado: cómo los colores transmiten accesibilidad y tecnología sin intimidar.
3. La tipografía: combinación de fuentes que equilibren modernidad tecnológica con legibilidad y cercanía.
4. Los elementos gráficos recurrentes: iconos, texturas, formas que den coherencia a todo el sistema.
5. El tono visual general: minimalista vs. expresivo, colorido vs. sobrio, ilustrado vs. fotográfico.

**tarea de diseño de la portada del podcast:**
La portada (cover art) es el elemento más importante. Diseña la especificación completa:
- Formato requerido por las plataformas: 3000×3000px, JPG o PNG, mínimo 72dpi
- Composición: cómo distribuir el nombre del podcast, el subtítulo y el elemento visual central
- Legibilidad a tamaño reducido: cómo se verá a 120×120px en el teléfono del oyente
- Distinción en el feed: cómo destacar entre los podcasts de la misma categoría
- Variantes: portada principal + variante clara para fondos blancos + variante oscura

**objetivo de plantillas para redes sociales:**
Diseña el sistema de plantillas para los assets visuales de cada episodio:

Audiograma para Instagram/TikTok (1080×1920px o 1080×1080px):
- Zona para la onda sonora animada
- Foto del invitado del episodio (o ilustración de avatar)
- Cita destacada del episodio (máximo 15 palabras)
- Logo del podcast y número de episodio
- Barra de progreso o indicador de duración

Carrusel de LinkedIn (1200×1350px por diapositiva):
- Portada del carrusel: título del episodio + dato gancho
- Diapositivas de contenido: cada aprendizaje clave del episodio
- Contraportada: llamada a escuchar el episodio completo

Imagen cuadrada para post de Instagram (1080×1080px):
- Foto del invitado a todo color
- Datos del episodio: número, título, duración
- Fondo que mantenga la identidad visual del podcast

Stories de Instagram (1080×1920px):
- Anuncio del nuevo episodio: foto invitado + datos básicos + link en bio
- Teaser de contenido: pregunta o cita que genera curiosidad
- Encuesta interactiva relacionada con el tema del episodio

**Thumbnail de YouTube:**
Diseña las especificaciones del thumbnail para los vídeos del podcast en YouTube (1280×720px):
- Composición que funcione en el feed de YouTube
- Texto grande y legible en miniatura
- Expresión facial del invitado que transmita la energía del episodio
- Contraste suficiente para destacar en fondo claro y oscuro
- A/B testing: qué elementos probar para optimizar el click-through rate

**Identidad de marca completa:**
Define el brand book del podcast con:
- Logotipo del podcast: variantes horizontal, cuadrado, solo símbolo
- Paleta de colores con códigos HEX, RGB y CMYK
- Sistema tipográfico: fuente para títulos, para cuerpo de texto, para datos y números
- Librería de iconos: iconos propios del podcast o sistema de iconos externo
- Reglas de uso: qué nunca hacer con la identidad visual (fondos prohibidos, colores no permitidos)
- Mockups de presentación: cómo se ve la marca en auriculares, portátil, teléfono, camiseta

**Briefing para IA de imagen:**
Escribe los prompts detallados para generar imágenes con IA (Midjourney, DALL-E, Ideogram) para:
- El elemento visual central de la portada del podcast
- Fondos y texturas para los templates
- Ilustraciones de avatar para episodios sin invitado con foto
- Imágenes de concepto para los temas más frecuentes del podcast

**Sistema de producción eficiente:**
Diseña el workflow de producción visual por episodio (objetivo: máximo 30 minutos):
- Plantillas en Figma o Canva con variables automáticas (texto, foto, color de episodio)
- Naming convention de los archivos de cada episodio
- Checklist de assets visuales a entregar por episodio
- Proceso de exportación en todos los formatos necesarios en un solo paso

Empieza con la dirección de arte de la portada del podcast y la definición de la paleta de colores con su justificación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseño de identidad visual completa para podcasts: portada, plantillas de redes sociales y brand book',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Monetización y patrocinios de podcasts con IA',
                'description'       => 'Usa Claude para desarrollar una estrategia de monetización de tu podcast: captación de patrocinadores, dossier de ventas, negociación de tarifas y diversificación de fuentes de ingresos.',
                'prompt_content'    => <<<'EOT'
Eres un experto en la monetización de podcasts y en la venta de publicidad en medios de audio. Necesito que me ayudes a construir una estrategia de ingresos completa para mi podcast que vaya más allá de la publicidad tradicional y cree múltiples fuentes de ingresos sostenibles.

**Contexto de mi podcast:**
Tengo un podcast de marketing digital y emprendimiento online con 85 episodios publicados. Métricas actuales: 6.200 descargas por episodio en los primeros 30 días, 22.000 seguidores en LinkedIn, newsletter con 4.800 suscriptores activos, tasa de apertura del 38%. Mi audiencia son profesionales de marketing, directores de comunicación y emprendedores de pymes. Todavía no tengo ningún ingreso por el podcast.

**instrucción de estrategia de monetización:**
Actúa como mi consultor de desarrollo de negocio de medios. Diseña el plan de monetización por fases:

Fase 1 (meses 1-3): Primera monetización
- Identificar las 20 empresas más alineadas con mi audiencia para el primer acercamiento
- Crear el dossier de patrocinio básico
- Establecer las tarifas de partida para anuncios pre-roll y mid-roll
- Primera venta directa: acuerdo piloto de 3 episodios con un patrocinador

Fase 2 (meses 4-8): Escalado de patrocinios
- Paquete de patrocinio de temporada completa (8-10 episodios)
- Integración más profunda: mención del patrocinador en la newsletter y redes sociales
- Co-creación de episodio: episodio especial producido con el patrocinador
- Agencia de representación publicitaria: cuándo y por qué buscar un rep de ventas

Fase 3 (meses 9-12): Diversificación
- Membresía premium para oyentes más fieles
- Formación online basada en los temas del podcast
- Consultoría individual para oyentes que quieren apoyo personalizado
- Eventos presenciales o virtuales relacionados con el podcast

**tarea de dossier de patrocinio:**
Crea el contenido completo del dossier de ventas para patrocinadores:

Sección de audiencia:
- Perfil demográfico: edad, género, nivel de estudios, cargo profesional, sector
- Comportamiento: cuándo escuchan, en qué dispositivos, duración media de escucha
- Poder adquisitivo: sueldo medio estimado, puesto de decisión, presupuestos que gestionan
- Afinidad con marcas: qué categorías de producto son más relevantes para esta audiencia

Sección de métricas:
- Descargas por episodio (promedio D7, D30, total)
- Tendencia de crecimiento: evolución de los últimos 6 meses
- Engagement: tiempo medio de escucha, porcentaje de episodio completado
- Plataformas: distribución de oyentes entre Spotify, Apple Podcasts y otras
- Audiencia total acumulada del podcast desde el inicio

Sección de formatos publicitarios:
- Pre-roll (primeros 60 segundos): precio, duración, instrucciones de grabación
- Mid-roll (pausa natural a mitad del episodio): precio, duración, contexto de integración
- Post-roll (últimos 30 segundos): precio, duración
- Mención integrada en la newsletter del podcast: precio y alcance
- Post dedicado en LinkedIn: precio y métricas típicas de engagement
- Episodio co-creado con el patrocinador: precio y proceso de producción

**objetivo de tarifas y negociación:**
Define la estructura de precios y cómo defenderla:
- Tarifa base por CPM (coste por mil descargas) en podcasts de tu nicho y tamaño
- Cómo calcular tu tarifa: CPM × descargas promedio × número de episodios
- Descuento por volumen: paquetes de 4, 8 o 12 episodios
- Premium por audiencia de nicho: tu audiencia B2B profesional justifica un CPM más alto
- Cómo responder cuando el patrocinador quiere negociar el precio a la baja

**Secuencia de ventas para patrocinadores:**
Diseña el proceso de venta de patrocinios de principio a fin:
- Email de presentación inicial: cómo contactar a la persona correcta en la empresa objetivo
- Seguimiento si no hay respuesta: cuándo y cómo hacer follow-up sin ser invasivo
- Reunión de ventas: agenda de 30 minutos, qué presentar, cómo cerrar el compromiso
- Propuesta formal: estructura del documento que envíes tras la reunión
- Contrato de patrocinio: los elementos mínimos que debe incluir
- Onboarding del patrocinador: qué información necesitas antes del primer episodio

**Formatos de integración publicitaria:**
Para cada tipo de anuncio, escríbeme el guion modelo:
- Pre-roll nativo (como si hablaras tú con naturalidad del patrocinador, 60 segundos)
- Mid-roll de respuesta directa (con call to action específico y código de descuento, 90 segundos)
- Integración de conversación (mencionas el patrocinador en el contexto natural de la entrevista)
- Mención de agradecimiento al inicio del episodio (10-15 segundos)

**Diversificación de ingresos más allá del patrocinio:**
Explora estas fuentes adicionales de ingresos:
- Patreon / Spotify Subscriptions: membresía de oyentes fieles con beneficios exclusivos
- Masterclass online: curso de 6 horas sobre el tema principal del podcast
- Comunidad privada: foro o Discord de pago para los oyentes más comprometidos
- Consultoría one-to-one: sesiones de 60 minutos para oyentes que quieren aplicar lo aprendido
- Libros o ebooks: compilación de los mejores aprendizajes del podcast en formato descargable

Empieza con el dossier de patrocinio completo y las tarifas recomendadas para mi nivel de audiencia.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Monetización de podcasts: captación de patrocinadores, dossier de ventas y diversificación de ingresos',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión de producto para plataformas de podcast con IA',
                'description'       => 'Usa Claude para definir la estrategia de producto de una plataforma de audio y podcasts: investigación de creadores y oyentes, roadmap de funcionalidades de IA y métricas de éxito del producto.',
                'prompt_content'    => <<<'EOT'
Eres un experto en gestión de producto para plataformas de contenido de audio, con experiencia en el diseño de herramientas para creadores de podcasts y en la construcción de experiencias de escucha para audiencias. Necesito que me ayudes a definir y priorizar el roadmap de producto de una plataforma de hosting y distribución de podcasts.

**Contexto de nuestra plataforma:**
Somos una startup en España que ofrece hosting, distribución y herramientas de análisis para creadores de podcasts en español. Tenemos 2.800 podcasts activos en nuestra plataforma, desde creadores individuales hasta agencias de producción de podcasts. Competimos con Transistor, Buzzsprout y Anchor/Spotify. Nuestro diferencial inicial fue el soporte en español y las herramientas de crecimiento de audiencia, pero necesitamos una estrategia de IA para mantener la competitividad.

**instrucción de research de usuarios:**
Actúa como mi partner de estrategia de producto. Diseña el plan de research para los próximos 3 meses:

1. Entrevistas a creadores (segmento 1: podcasts con <1.000 descargas/episodio): qué les frustra más de la producción y la distribución.
2. Entrevistas a agencias de producción (segmento 2): qué herramientas necesitan para gestionar múltiples podcasts de clientes.
3. Encuesta a toda la base de usuarios: priorización de funcionalidades más deseadas.
4. Análisis del comportamiento in-product: qué funcionalidades usan más, cuáles abandonan.
5. Análisis de churned customers: por qué se han ido a la competencia.

**tarea de roadmap de IA para la plataforma:**
Diseña las funcionalidades de IA a desarrollar en los próximos 12 meses:

Quick wins (trimestre 1, sin mucha inversión en ML propio):
- Generación automática de show notes con Claude API a partir de la transcripción
- Transcripción automática de episodios (integración con Whisper)
- Sugerencias de capítulos y timestamps basadas en la transcripción
- Generación de meta descripción SEO optimizada para el episodio

Diferenciación (trimestre 2-3, mayor inversión):
- Análisis de sentimiento de los episodios para detectar los momentos más impactantes
- Recomendación de palabras clave de búsqueda para mejorar el descubrimiento del podcast
- Detección de publicidad: identificar los bloques publicitarios en la transcripción automáticamente
- Análisis de la voz del host: velocidad de habla, pausas, muletillas frecuentes

Ventaja competitiva (trimestre 4, inversión alta):
- Motor de descubrimiento: recomendar podcasts de la plataforma a oyentes según sus intereses
- Análisis predictivo: predecir qué episodios tendrán mejor rendimiento antes de publicarlos
- Herramienta de matching patrocinadores-podcasts: conectar marcas con podcasts alineados

**objetivo de métricas de éxito por funcionalidad:**
Define los OKRs y métricas de adopción para las funcionalidades de IA:

Para la transcripción automática:
- Objetivo: 70% de los usuarios activos la usan al menos 1 vez al mes
- Métrica de calidad: tasa de error del WER (Word Error Rate) < 5% para español neutro
- Impacto en retención: ¿reduce el churn de los usuarios que la usan?

Para la generación de show notes:
- Objetivo: 50% de los episodios publicados en la plataforma usan show notes generados por IA
- Métrica de calidad: NPS de la funcionalidad > 40
- Tiempo ahorrado: media de minutos ahorrados por episodio reportada por los usuarios

**Modelo de precios para las funcionalidades de IA:**
Diseña la estrategia de monetización de las funcionalidades de IA:
- ¿Incluirlas en el plan base para mejorar la retención y el upsell?
- Plan "Creator Pro" que incluya todas las herramientas de IA: precio y features incluidas
- Modelo de créditos de IA: cuántos créditos por transcripción, por show notes generado
- Free tier: qué ofrecer gratis para la captación y qué reservar para el pago

**Gestión de la hoja de ruta con el equipo:**
Ayúdame a comunicar el roadmap de IA a:
- Equipo de ingeniería: cómo escribir los documentos de especificación funcional para cada feature de IA
- Usuarios beta: cómo seleccionarlos, qué feedback pedirles, cómo incorporar sus sugerencias
- Inversores: narrative de diferenciación competitiva con IA en el mercado de podcasting en español
- Equipo de ventas y customer success: cómo hablar de las nuevas funcionalidades de IA con los clientes

**Análisis competitivo de producto:**
Ayúdame a analizar las capacidades de IA de los principales competidores:
- Spotify for Podcasters (Anchor): qué funcionalidades de IA tienen y cuál es la adopción
- Transistor: propuesta de valor vs. el mercado en español
- Buzzsprout: sus herramientas y su estrategia de producto
- Castos (competidor directo en España): diferenciación y puntos débiles
- Oportunidades de diferenciación: qué no tienen los competidores que nuestra audiencia hispana necesita

Empieza con el plan de research de usuarios y las preguntas de entrevista para los dos segmentos principales.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Estrategia de producto para plataformas de podcasts: roadmap de IA, research de usuarios y modelo de precios',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de equipos de producción de podcasts con IA',
                'description'       => 'Usa Claude para profesionalizar la gestión de un equipo de producción de podcasts: flujos de trabajo colaborativos, briefings de episodio, gestión de invitados y control de calidad de contenidos.',
                'prompt_content'    => <<<'EOT'
Eres un experto en gestión de equipos creativos de producción de contenido de audio y en el diseño de procesos de trabajo eficientes para agencias de producción de podcasts. Necesito que me ayudes a profesionalizar los procesos de mi equipo y escalar la producción sin perder calidad.

**Situación de mi equipo:**
Dirijo una agencia de producción de podcasts con 9 personas: 1 productor jefe, 3 productores de contenido, 2 técnicos de audio, 1 community manager y 2 freelances de diseño. Producimos 12 podcasts diferentes para 8 clientes distintos. Cada podcast publica entre 1 y 4 episodios por semana. El problema principal es que somos muy dependientes de las personas clave y no tenemos procesos documentados que permitan la sustitución o el escalado.

**instrucción de estandarización de procesos:**
Actúa como mi directora de operaciones creativas. Ayúdame a diseñar:

1. El flujo de trabajo estándar de producción de un episodio, desde el briefing hasta la publicación.
2. Los documentos de trabajo que necesita cada miembro del equipo para su rol.
3. El proceso de onboarding de nuevos miembros del equipo de producción.
4. El sistema de control de calidad antes de publicar cada episodio.
5. La cadencia de reuniones de equipo y su estructura.

**tarea de flujo de producción de episodio:**
Define el proceso completo con tiempos y responsables:

Semana -2 (planificación):
- Productor de contenido: confirmar el tema del episodio con el cliente
- Productor jefe: aprobar el tema y el ángulo editorial
- Productor de contenido: investigación del tema (2 horas)
- Productor de contenido: briefing completo del episodio (plantilla)

Semana -1 (preparación):
- Productor de contenido: guion de preguntas si hay invitado, guion completo si es solo el host
- Productor de contenido: coordinación logística con el invitado (fecha, forma de grabar)
- Técnico de audio: prueba de sonido con el invitado si graba de forma remota
- Productor de contenido: investigación adicional sobre el invitado si es entrevista

Día de grabación:
- Técnico de audio: setup técnico de la grabación (local o remoto)
- Productor de contenido: asistir a la grabación como director para dirigir la conversación
- Técnico de audio: grabar con pistas separadas para el montaje posterior

Semana +1 (postproducción):
- Técnico de audio: edición del audio (cortes, niveles, música, efectos) (4-6 horas)
- Productor de contenido: revisión del audio editado y anotaciones de cambios
- Técnico de audio: versión final de audio
- Diseñador: portada del episodio y assets de redes sociales
- Community manager: show notes, descripción, programación de publicación

**objetivo del briefing de episodio:**
Diseña la plantilla del documento de briefing que el productor completa por episodio:
- Título del episodio (3 opciones propuestas)
- Descripción corta del tema y el ángulo editorial
- Audiencia objetivo de este episodio en concreto
- Invitado (si aplica): nombre, cargo, empresa, por qué es relevante para la audiencia
- Preguntas principales (mínimo 10, con variantes)
- Momentos que buscamos: la anécdota, el dato sorprendente, el aprendizaje clave
- Recursos que el oyente debe conocer: libros, herramientas, personas mencionadas
- Call to action del episodio: qué queremos que haga el oyente al terminar de escuchar
- Contexto del cliente: algo importante del cliente que debemos tener en cuenta para este episodio

**Gestión de invitados con IA:**
Diseña el proceso de gestión de invitados de principio a fin:
- Identificación de invitados potenciales: cómo usar LinkedIn y otras fuentes
- Outreach inicial: plantilla de email de invitación a participar en el podcast
- Recordatorios antes de la grabación: secuencia de mensajes automáticos (7 días, 2 días, 2 horas antes)
- Briefing para el invitado: qué información necesita el invitado para preparar la grabación
- Post-grabación: cómo coordinar la revisión del episodio por el invitado si es necesario
- Distribución al invitado: cómo facilitarle el material para que comparta el episodio

**Control de calidad por capas:**
Define el proceso de revisión en tres capas antes de publicar:
- Capa 1 (técnico de audio): checklist técnico de audio (niveles, ruidos, cortes, música)
- Capa 2 (productor de contenido): revisión editorial (coherencia, ritmo, momentos clave incluidos)
- Capa 3 (productor jefe): revisión final estratégica (alineación con el posicionamiento del cliente)

Para cada capa, diseña el checklist específico que el revisor debe completar.

**Reuniones de equipo efectivas:**
Diseña la cadencia de reuniones para una agencia de producción de podcasts:
- Standup diario de 10 minutos: formato para un equipo híbrido (parte presencial, parte remoto)
- Reunión semanal de producción: revisión del estado de todos los episodios en producción
- Retrospectiva quincenal: qué ha funcionado, qué mejorar, experimentos a probar
- Reunión mensual con clientes: cómo presentar el rendimiento de su podcast y las propuestas editoriales

**Herramientas de gestión del equipo:**
Recomienda el stack de herramientas y cómo configurarlo:
- Gestión de proyectos: Notion, Asana o ClickUp para el tracking de episodios
- Comunicación: Slack con canales por cliente y por área funcional
- Almacenamiento de audio: Google Drive o Dropbox con estructura de carpetas estándar
- Revisión de audio: Descript para la edición colaborativa y la revisión del audio
- Aprobación de contenido con el cliente: Notion o plataforma de aprobación de contenido

Empieza con el flujo de trabajo estándar de producción detallado semana a semana y el briefing de episodio.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Gestión de equipos de producción de podcasts: procesos, briefings, control de calidad y gestión de invitados',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis financiero de podcasts y modelos de negocio de audio',
                'description'       => 'Usa Claude para analizar la viabilidad financiera de un podcast como negocio, calcular el ROI de la inversión en contenido de audio y diseñar modelos de monetización sostenibles.',
                'prompt_content'    => <<<'EOT'
Eres un experto en análisis financiero de medios de comunicación digitales y en la evaluación de modelos de negocio para creadores de contenido de audio. Necesito que me ayudes a entender la viabilidad financiera de mi podcast como negocio y a diseñar un modelo de monetización que justifique la inversión en contenido.

**Mi situación financiera actual:**
Tengo un podcast de finanzas personales con 2 años de trayectoria. Métricas actuales: 8.500 descargas por episodio, 1 episodio por semana, newsletter con 5.200 suscriptores. Costes mensuales actuales: técnico de audio (600€/mes), herramientas de software (150€/mes), hosting del podcast (40€/mes). Dedico 12 horas semanales al podcast. Ingresos actuales: 0€. Quiero evaluar si tiene sentido dedicarme al podcast a tiempo completo en 12 meses.

**instrucción del modelo financiero del podcast:**
Actúa como mi analista financiero de medios digitales. Construye el modelo financiero completo que incluya:

1. Proyección de ingresos por fuente de monetización para los próximos 24 meses.
2. Proyección de costes con diferentes escenarios de crecimiento.
3. Punto de equilibrio: cuántas descargas o ingresos necesito para cubrir los costes de tiempo propio.
4. Análisis de sensibilidad: cómo cambia la rentabilidad si las descargas no crecen como espero.
5. Fecha proyectada en la que podría sustituir un sueldo de 3.000€ netos al mes con el podcast.

**tarea de análisis de fuentes de ingresos:**
Para cada fuente de monetización, calcula el potencial de ingresos basado en mis métricas:

Publicidad directa (patrocinios):
- CPM de mercado para podcasts de finanzas personales: 25-40€ por mil descargas
- Ingresos estimados: 8.500 descargas × CPM × número de anuncios por episodio × 4 episodios/mes
- Limitaciones: mínimo de descargas para atraer patrocinadores premium

Membresía de oyentes (Patreon o plataforma propia):
- Tasa de conversión esperada a membresía: 1-3% de los oyentes mensuales
- Ticket medio de membresía: 5€, 10€ o 20€/mes según los beneficios
- Ingresos estimados según diferentes tasas de conversión

Curso online basado en el podcast:
- Precio del curso: 197-497€ según el nivel de profundidad
- Conversión de la lista de newsletter: 1-3% en el lanzamiento
- Ingresos del primer lanzamiento: 5.200 suscriptores × tasa de conversión × precio
- Relanzamientos: 2-3 veces al año con audiencia nueva acumulada

Consultoría individual (sesiones de 60 minutos):
- Precio por sesión: 150-300€ según especialización
- Capacidad: máximo 8-10 sesiones por semana sin afectar la producción del podcast
- Ingresos mensuales máximos por consultoría

Afiliación a productos financieros:
- Cuentas de inversión, seguros, productos bancarios con comisión por lead cualificado
- Comisión media: 30-100€ por lead convertido
- Tasa de conversión esperada de los oyentes a clientes de afiliados: 0,5-1,5%

**objetivo de proyección a 24 meses:**
Construye la proyección financiera mensual con estos supuestos:
- Crecimiento de descargas: 8% mensual en el primer año, 4% en el segundo
- Tiempo hasta primer patrocinador: mes 2 (1 patrocinador a CPM de 25€)
- Tiempo hasta lanzar membresía: mes 3 (conversión del 1,5% de oyentes mensuales)
- Tiempo hasta primer curso online: mes 5 (conversión del 1,5% de newsletter)
- Tiempo hasta activar consultoría: mes 7 (máximo 6 sesiones/semana inicialmente)

Para cada mes, calcula:
- Total ingresos (suma de todas las fuentes)
- Total costes (fijos + variables + coste de oportunidad del tiempo invertido)
- Resultado mensual (pérdida o ganancia)
- Resultado acumulado
- Meses hasta el punto de equilibrio

**Valoración del coste de oportunidad:**
Para decidir si me dedico al podcast a tiempo completo, necesito calcular:
- Coste de oportunidad de las 12 horas semanales actuales: si ese tiempo lo dedicara a trabajo remunerado
- Coste real del podcast a tiempo completo: sueldo que dejaría de cobrar en mi trabajo actual
- Cómo valorar el capital de marca y la audiencia que construyo aunque no genere ingresos inmediatos
- Cuándo el ingreso del podcast justifica dejar mi trabajo actual (umbral de seguridad)

**Métricas financieras clave para creadores:**
Explícame y ayúdame a calcular:
- RPM (Revenue Per Mille): ingresos por cada 1.000 descargas
- LTV del oyente: valor económico estimado de cada oyente a lo largo del tiempo
- CAC del suscriptor de newsletter: coste de adquirir cada nuevo suscriptor
- Coeficiente de monetización: cuántos euros genero por hora invertida en el podcast

**Plan financiero de transición:**
Diseña el plan para la transición de empleado a podcaster a tiempo completo:
- Fondo de reserva necesario: cuántos meses de gastos personales debo tener ahorrados
- Hitos de ingresos del podcast que deben cumplirse antes de tomar la decisión
- Reducción gradual de jornada en el trabajo actual mientras creces el podcast
- Estructura jurídica óptima: autónomo, SL, o modelo mixto
- Seguridad social y protección en caso de que el proyecto no funcione

Empieza con el modelo financiero proyectado a 24 meses con los supuestos que te he dado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Análisis de viabilidad financiera de un podcast como negocio y proyección de ingresos a 24 meses',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Propiedad intelectual y contratos para podcasters con IA',
                'description'       => 'Usa Claude para gestionar los aspectos legales de tu podcast: derechos de autor, contratos con invitados, licencias de música y protección de la marca del podcast.',
                'prompt_content'    => <<<'EOT'
Eres un experto en propiedad intelectual y derecho de medios de comunicación digitales, especializado en el sector del podcasting y la creación de contenido de audio. Necesito que me ayudes a entender y gestionar todos los aspectos legales de mi podcast para operar con seguridad jurídica y proteger mi obra.

**Mi situación como podcaster:**
Tengo un podcast de entrevistas a expertos en psicología y salud mental. Publico desde hace 2 años, 150 episodios, más de 300 invitados distintos. Uso música de fondo en la intro y en las transiciones. Algunos fragmentos de mis episodios se han publicado sin mi permiso en otros canales de YouTube. Quiero profesionalizar el aspecto legal del podcast antes de lanzar una membresía de pago.

**instrucción de protección de la obra:**
Actúa como mi asesor legal especializado en podcasting. Ayúdame a:

1. Entender qué derechos de propiedad intelectual tiene el podcast como obra creativa (derechos del productor, derechos del guionista, derechos del presentador).
2. Registrar la marca del podcast para proteger el nombre, el logotipo y el nombre del dominio.
3. Crear el aviso legal y los términos de uso de la web del podcast.
4. Proteger el contenido del podcast frente al uso no autorizado en otras plataformas.
5. Diseñar la política de uso de fragmentos del podcast (condiciones bajo las cuales otros pueden citarme o usar extractos).

**tarea de contratos con invitados:**
Diseña el contrato tipo para los invitados del podcast que regule:
- Cesión de derechos: el invitado autoriza al podcast a usar, publicar y distribuir su participación
- Uso de nombre e imagen: autorización para usar el nombre, foto y cargo del invitado en la promoción del episodio
- Grabación: confirmación de que el invitado sabe y acepta ser grabado
- Publicación: el podcaster decide si publica el episodio y cuándo, sin obligación de publicar todas las entrevistas grabadas
- Revisión del contenido: si el invitado puede revisar el episodio antes de publicar y qué puede pedir que se edite (corrección de errores factuales) y qué no puede pedir que se elimine (opiniones que expresó libremente)
- Eliminación posterior: bajo qué condiciones (si las hay) el invitado puede pedir la retirada del episodio publicado
- Confidencialidad: si hay información off-the-record que el invitado quiere proteger

**objetivo de licencias de música:**
Explícame las opciones para usar música en el podcast legalmente:
- Música de dominio público: qué obras son ya de dominio público y cómo verificarlo
- Creative Commons: qué licencias CC permiten el uso en podcasts y cuáles lo prohíben
- Plataformas de música libre de regalías: Artlist, Musicbed, Epidemic Sound (características y precios)
- SGAE y derechos de autor en España: cuándo debo pagar a la SGAE aunque tenga licencia de Artlist
- Contrato directo con el artista: cómo negociar el uso de una canción específica
- Riesgo de Content ID de YouTube si subo el podcast a YouTube

**Gestión del uso no autorizado:**
Diseña el proceso para responder a usos no autorizados de mi contenido:
- Detección: cómo monitorizar si alguien usa mis episodios sin permiso (Google Alerts, YouTube Content ID, herramientas de monitoreo de audio)
- Solicitud de retirada (DMCA Takedown): cómo redactar y enviar una solicitud de retirada
- Contacto amistoso previo: plantilla de email antes de escalar a una solicitud formal
- Escalado legal: cuándo vale la pena actuar legalmente y cuándo no es proporcional
- Política de fair use/uso justo: qué fragmentos de otros podcasts puedo usar yo en el mío

**Términos legales de la membresía de pago:**
Para lanzar la membresía premium, necesito:
- Términos y condiciones del servicio de membresía
- Política de cancelación y reembolsos: plazos y condiciones
- Política de privacidad y tratamiento de datos personales de los miembros (RGPD)
- Aviso legal de la pasarela de pago
- Responsabilidad por el contenido: cómo limitar mi responsabilidad legal por el contenido del podcast sobre salud mental

**Aspectos específicos del podcast de salud mental:**
Para un podcast sobre psicología y salud mental, considera estos riesgos legales:
- Aviso de no ser sustituto del tratamiento profesional: cómo redactarlo y dónde incluirlo
- Responsabilidad por consejos dados en el podcast por parte de expertos invitados
- Protección de datos especialmente sensibles si los oyentes comparten información de salud
- Regulación publicitaria: qué tipo de patrocinadores son compatibles con un podcast de salud
- Contenido que involucra menores o personas vulnerables: consideraciones especiales

**Documentos legales que necesito:**
Ayúdame a crear o especificar estos documentos:
1. Contrato de cesión de derechos para invitados (formato corto de 1 página y formato completo)
2. Aviso legal y política de privacidad de la web del podcast
3. Términos de servicio de la membresía de pago
4. Política de uso del contenido del podcast por terceros
5. Template de solicitud de retirada de contenido (DMCA takedown)

Empieza con el contrato de invitados y el aviso sobre uso del contenido del podcast para protegerme frente a usos no autorizados.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Marco legal para podcasters: contratos con invitados, propiedad intelectual, licencias de música y membresía',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Comunidad y atención a suscriptores de podcasts con IA',
                'description'       => 'Usa Claude para construir y gestionar la comunidad de oyentes de tu podcast: atención a suscriptores de membresía, gestión de feedback, foros de comunidad y programas de oyentes embajadores.',
                'prompt_content'    => <<<'EOT'
Eres un experto en community management para creadores de contenido de audio y en la construcción de comunidades comprometidas alrededor de podcasts. Necesito que me ayudes a diseñar e implementar una estrategia de comunidad que convierta a los oyentes casuales en miembros comprometidos y a los miembros en embajadores activos del podcast.

**Contexto de mi podcast y comunidad:**
Tengo un podcast de desarrollo personal y productividad con 11.000 descargas por episodio. Recientemente lancé una membresía con 180 miembros de pago (9€/mes). La comunidad vive principalmente en un servidor de Discord. El problema: el Discord está prácticamente muerto (menos de 5 mensajes al día), los miembros no renuevan después del primer mes (tasa de cancelación del 35% mensual) y no sé cómo hacer que la membresía valga realmente su precio.

**instrucción de estrategia de comunidad:**
Actúa como mi community manager estratégico. Diseña el plan de comunidad que incluya:

1. Diagnóstico de por qué el Discord está inactivo y plan de reactivación en 30 días.
2. Arquitectura de la comunidad: qué canales tener, qué tipo de contenido va en cada uno, cómo moderar.
3. Calendario de actividades comunitarias: eventos semanales y mensuales que generen participación recurrente.
4. Programa de embajadores: cómo identificar y activar a los miembros más comprometidos.
5. Estrategia de retención: cómo reducir la tasa de cancelación del 35% al 10% en 3 meses.

**tarea de arquitectura del servidor de Discord:**
Diseña la estructura completa del Discord de la comunidad:

Canales de información (solo lectura para miembros):
- #bienvenida: mensaje automático cuando entra un nuevo miembro con el manual de uso
- #anuncios: novedades del podcast y de la membresía
- #episodios: enlace a cada nuevo episodio con la pregunta de la semana para debatir
- #recursos: biblioteca colaborativa de libros, herramientas y recursos mencionados en el podcast

Canales de comunidad (participación abierta):
- #presentaciones: nuevo canal prioritario para que cada miembro se presente al entrar
- #logros: donde los miembros comparten sus éxitos de la semana relacionados con el tema del podcast
- #preguntas-al-host: canal para preguntas que podrían responderse en episodios futuros
- #recomendaciones: libros, podcasts, herramientas que recomienda la comunidad

Canales de actividad recurrente:
- #reto-semanal: un reto de productividad o desarrollo personal por semana
- #lecturas: club de lectura mensual relacionado con los temas del podcast
- #trabajo-en-voz-alta: sesiones de trabajo conjunto en silencio virtual (pomodoro sessions)

**objetivo de calendario de actividades comunitarias:**
Diseña el calendario de actividades recurrentes:

Actividades semanales:
- Lunes: reto de la semana relacionado con el episodio del podcast
- Miércoles: hilo de "pregunta de la semana" que el host lanza al Discord
- Viernes: check-in de logros: qué has conseguido esta semana

Actividades mensuales:
- Primer martes: AMA (Ask Me Anything) en directo con el host (60 minutos en Discord Stage)
- Tercer jueves: masterclass exclusiva para miembros (30-45 minutos) sobre un tema profundo
- Último viernes: recap del mes y preview del mes siguiente

**Atención al miembro de pago:**
Diseña el proceso de atención a los suscriptores de membresía:
- Bienvenida: email y mensaje de Discord a cada nuevo miembro en las primeras 24 horas
- Onboarding de 7 días: secuencia de mensajes automáticos para los primeros 7 días de membresía
- Detección de miembros en riesgo de cancelar: señales de desenganche (no han entrado al Discord en 14 días, no han interactuado con el último episodio)
- Protocolo de win-back: cómo recuperar miembros que van a cancelar o que ya han cancelado
- Encuesta de cancelación: qué preguntar para entender por qué se va un miembro

**Programa de embajadores:**
Diseña el programa de oyentes embajadores del podcast:
- Criterios de selección: tiempo de membresía, actividad en Discord, referencias de nuevos miembros
- Beneficios del embajador: acceso anticipado a episodios, rol especial en Discord, menciones en el podcast
- Responsabilidades: compartir 2 episodios al mes en redes, participar en al menos 2 actividades del Discord por semana
- Proceso de selección: cómo comunicar el programa y seleccionar los primeros 10 embajadores

**Métricas de éxito de la comunidad:**
Define el dashboard de métricas de comunidad:
- DAU/MAU ratio del Discord (miembros activos diariamente / mensualmente)
- Mensajes por miembro activo por semana
- Tasa de retención de membresía por cohorte (mes 1, mes 2, mes 3)
- NPS de la membresía (encuesta trimestral)
- Ratio de miembros que provienen de referencias de otros miembros
- LTV promedio del miembro (en meses de permanencia)

**Plantillas de comunicación con la comunidad:**
Escríbeme los mensajes tipo para:
- Mensaje de bienvenida a nuevo miembro de Discord
- Email de bienvenida a la membresía de pago
- Mensaje de activación cuando llevas 14 días sin entrar al Discord
- Email previo a la cancelación (win-back)
- Anuncio de nueva actividad mensual (AMA, masterclass)
- Mensaje de celebración cuando un miembro comparte un logro

Empieza con el diagnóstico del Discord inactivo y el plan de reactivación en los próximos 30 días.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construcción y gestión de comunidad de oyentes: membresía, Discord activo, embajadores y retención',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Producción freelance de podcasts con IA',
                'description'       => 'Usa Claude para profesionalizar tu práctica como productor freelance de podcasts: captación de clientes, presupuestos, gestión de proyectos y desarrollo de servicios de producción de audio escalables.',
                'prompt_content'    => <<<'EOT'
Eres un experto en desarrollo de negocio para productores freelance de contenido de audio y en el diseño de servicios de producción de podcasts escalables y rentables. Necesito que me ayudes a construir una práctica freelance de producción de podcasts sostenible y bien posicionada en el mercado.

**Mi situación como productor freelance:**
Soy productor de audio freelance con 3 años de experiencia. Actualmente tengo 4 clientes estables de producción mensual de podcasts (facturación: 2.800€/mes). Quiero llegar a 7.000€/mes en 12 meses sin sacrificar la calidad ni trabajar más de 40 horas semanales. El problema: no tengo procesos claros, cada cliente es un caos diferente y no sé cómo escalar sin contratar.

**instrucción de estrategia de negocio freelance:**
Actúa como mi mentor de negocio freelance para productores de audio. Ayúdame a:

1. Auditar mi mix de servicios actual y definir la oferta de servicios productizada (estandarizada).
2. Calcular el precio correcto para cada servicio según mi coste de tiempo y el valor que entrego.
3. Diseñar los paquetes de producción mensual que faciliten el retainer estable con clientes.
4. Desarrollar la estrategia de captación de clientes de mayor ticket.
5. Crear el sistema de onboarding de nuevos clientes que estandarice el proceso desde el inicio.

**tarea de productización de servicios:**
Define los paquetes de producción de podcast estandarizados:

Paquete Starter (ideal para podcast nuevo o con poco presupuesto):
- Producción de 4 episodios al mes (máximo 45 minutos cada uno)
- Edición de audio básica (cortes, niveles, música de intro y outro)
- Subida al hosting del cliente y actualización del RSS
- Precio: 800€/mes

Paquete Growth (para podcasts establecidos que quieren crecer):
- Todo el paquete Starter
- Transcripción de cada episodio
- Generación de show notes con IA (revisados por el productor)
- Audiograma para Instagram (1 por episodio)
- Precio: 1.500€/mes

Paquete Premium (para marcas y empresas que usan el podcast como herramienta de marketing):
- Todo el paquete Growth
- Estrategia editorial mensual (planificación de temas y ángulos)
- Gestión de invitados (identificación, outreach, coordinación de grabación)
- Assets completos de redes sociales (carrusel LinkedIn, 5 audiogramas, quotes)
- Informe mensual de métricas y recomendaciones
- Precio: 2.800€/mes

**objetivo de precio y rentabilidad:**
Analiza si los precios que propongo son rentables:
- Tiempo invertido por episodio en cada paquete: edición (3h), show notes (1h), audiograma (30min), gestión (2h)
- Precio por hora efectiva en cada paquete
- Número máximo de clientes simultáneos que puedo gestionar sin contratar
- Umbral de ocupación para contratar un primer colaborador (asistente de producción)
- Cuándo tiene sentido contratar vs. subcontratar tareas específicas

**Proceso de onboarding de nuevos clientes:**
Diseña el proceso de inicio de relación con un nuevo cliente:

Semana 1 (kickoff):
- Reunión de onboarding: objetivos del podcast, audiencia objetivo, tono y valores de la marca
- Questionnaire de producción: formato preferido, música, estructura de los episodios
- Accesos técnicos: hosting, redes sociales, drive compartido, herramientas de comunicación
- Contrato y primer pago: condiciones, plazos de pago, política de cancelación

Semana 2 (piloto):
- Producción del primer episodio como prueba: aplicar todas las especificaciones
- Revisión en dos rondas: el cliente da feedback, el productor aplica cambios
- Documentación del estilo: guardar todas las decisiones para la guía de producción del cliente

Mes 1 (rodaje):
- Producción de los primeros 4 episodios con el proceso establecido
- Reunión de revisión al final del mes: qué funciona, qué ajustar
- Definición de la cadencia de trabajo: cuándo envías el audio editado, cuándo el cliente revisa

**Captación de clientes de mayor ticket:**
Diseña la estrategia de captación para clientes con presupuesto de paquete Premium (2.800€/mes):
- Perfil del cliente ideal: directivos, consultores, empresas con podcast corporativo
- Canales de captación: LinkedIn como canal principal, referidos de clientes actuales, eventos de marketing
- Contenido de atracción: qué tipo de contenido en LinkedIn atrae a este perfil de cliente
- Proceso de venta: de la primera conversación hasta el cierre del contrato en menos de 2 semanas
- Propuesta comercial: estructura del documento que envíes al cliente

**Sistema de trabajo eficiente:**
Diseña el sistema de producción que te permita gestionar más clientes sin trabajar más horas:
- Plantillas de proyectos en Notion o ClickUp para cada cliente
- Automatizaciones: qué tareas repetitivas automatizar con n8n o Make
- Baterías de mensajes tipo para las comunicaciones más frecuentes con clientes
- Batching de trabajo: cómo organizar tu semana para producir más eficientemente (dias de edición, dias de calls, dias de marketing personal)
- Protocolo de vacaciones: cómo garantizar la continuidad del servicio cuando te vas 2 semanas

**Métricas de salud del negocio freelance:**
Ayúdame a definir y trackear:
- MRR (Monthly Recurring Revenue): ingresos recurrentes mensuales de retainers
- Churn rate: qué porcentaje de clientes cancela cada mes y por qué
- Tiempo medio de relación con un cliente: cuántos meses dura la relación en promedio
- LTV del cliente: facturación total media de cada cliente durante su relación
- CAC (coste de adquisición de cliente): cuánto tiempo y dinero inviertes en captar cada cliente nuevo

Empieza con el análisis de rentabilidad de los tres paquetes y el proceso de onboarding de nuevos clientes.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Negocio freelance de producción de podcasts: paquetes de servicio, precios, captación y escala',
                'vote_score'        => 41,
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
