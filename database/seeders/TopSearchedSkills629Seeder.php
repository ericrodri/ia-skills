<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills629Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id' => 1,
                'title' => 'Marketing y comunidades para equipos de esports con IA',
                'description' => 'Desarrolla estrategias de marketing digital y gestión de comunidades para organizaciones de esports y gaming competitivo usando inteligencia artificial.',
                'prompt_content' => <<<'EOT'
Actúa como un especialista en marketing digital con experiencia profunda en la industria de los esports y el gaming competitivo. Necesito desarrollar una estrategia de marketing completa para una organización de esports que quiere aumentar su base de fans, atraer patrocinadores y construir una comunidad leal en el ecosistema del gaming.

contexto de la organización:
- Nombre de la organización: [nombre del equipo o liga]
- Juegos en los que compite: [League of Legends / Valorant / CS2 / FIFA / Fortnite / otro]
- Nivel competitivo: [amateur / semiprofesional / profesional / organizador de torneos]
- Presencia actual en redes: [seguidores en Twitch / YouTube / TikTok / Twitter / Instagram]
- Presupuesto mensual de marketing: [bajo / medio / alto]
- Objetivo principal: [crecimiento de audiencia / captación de patrocinadores / venta de merchandising / monetización de streams]

objetivo:
Desarrolla un plan de marketing para esports que incluya:

1. ESTRATEGIA DE CONTENIDOS MULTIPLATAFORMA
Los esports exigen presencia en canales muy específicos. Define la estrategia de contenidos para cada plataforma:
- Twitch: programación de streams, interacción con la comunidad, raids y hosts, uso de alertas y subgoals para engagement
- YouTube: tipo de vídeos (highlights, vlogs detrás de las cámaras, análisis tácticos, documentales de jugadores), frecuencia y longitud óptima
- TikTok: formato de vídeos cortos de gaming, tendencias del sector, challenges y clips virales
- Twitter/X: comunicación en tiempo real durante torneos, interacción con jugadores y equipos rivales, anuncios de fichajes
- Instagram: contenido visual de marca, fotografías del equipo, stories de eventos y viajes a torneos

Para cada plataforma proporciona: frecuencia de publicación recomendada, tipo de contenido que genera más engagement en esports, y 5 ideas concretas de contenido para empezar.

2. CONSTRUCCIÓN Y GESTIÓN DE COMUNIDAD
El activo más valioso de una organización de esports es su comunidad. Diseña un plan de comunidad que incluya:
- Estructura del servidor de Discord: categorías, canales, roles y sistema de permisos
- Sistema de gamificación de la comunidad: puntos de lealtad, roles por antigüedad o participación, concursos y sorteos
- Programa de embajadores de fans: cómo identificar, reclutar y gestionar a los fans más activos
- Gestión de la toxicidad online: protocolo de moderación, reglas de la comunidad y herramientas de moderación automatizada
- Eventos de comunidad: torneos internos, AMA con los jugadores, viewing parties de torneos oficiales

3. ESTRATEGIA DE PATROCINIOS
Desarrolla la estrategia para captar y retener patrocinadores en el sector del gaming:
- Categorías de patrocinadores objetivo: periféricos gaming, bebidas energéticas, plataformas de apuestas esports (donde sea legal), ropa y calzado, marcas generalistas que quieren llegar al público gaming
- Propuesta de patrocinio: qué activos ofrece la organización (jersey, stream overlay, menciones, activaciones de marca, contenido branded)
- Kit de medios para patrocinadores: datos de audiencia, demografía de fans, tasas de engagement y alcance potencial
- Cómo medir el retorno para el patrocinador y presentar resultados post-campaña

4. MERCHANDISING Y MONETIZACIÓN DE MARCA
Define la estrategia de merchandising para una organización de esports:
- Catálogo de productos: jerseys, periféricos con el logo del equipo, ropa casual, accesorios, productos digitales (emotes de Twitch, stickers, wallpapers)
- Modelo de producción: stock propio vs. print-on-demand
- Canales de venta: tienda propia, Amazon, Fanatics para equipos de mayor escala
- Drops limitados y ediciones especiales para generar urgencia y coleccionismo

5. GESTIÓN DE LA MARCA PERSONAL DE LOS JUGADORES
Los jugadores son el mayor activo de comunicación de un equipo de esports. Diseña un plan para potenciar la marca personal de cada jugador:
- Guía de identidad personal: cómo cada jugador puede tener su propia personalidad sin contradecir los valores del equipo
- Política de redes sociales para jugadores: qué pueden publicar, qué está vetado, cómo manejar la controversia
- Contratos de imagen y derechos de contenido: qué pertenece al equipo y qué es del jugador
- Plan de crecimiento del canal personal de cada jugador

6. MÉTRICAS Y KPIs DE MARKETING EN ESPORTS
Define 10 indicadores clave específicos del marketing de esports:
- Crecimiento mensual de seguidores por plataforma
- Viewership medio de streams en Twitch
- Tasa de conversión de espectador a suscriptor de pago
- Ingresos por mil impresiones (RPM) en YouTube
- Engagement rate en publicaciones de torneos vs. contenido regular
- Coste de adquisición de nuevo fan
- Valor de los contratos de patrocinio cerrados
- Tasa de retención de suscriptores de Discord

Finaliza con un calendario de marketing para los próximos 90 días adaptado al calendario de la temporada competitiva del juego principal.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 40,
                'use_case' => 'Estrategia de marketing para organizaciones de esports',
                'vote_score' => 47,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 2,
                'title' => 'Herramientas de análisis de rendimiento para jugadores competitivos con IA',
                'description' => 'Desarrolla sistemas de análisis de datos y rendimiento para jugadores y equipos de esports usando inteligencia artificial y machine learning.',
                'prompt_content' => <<<'EOT'
Actúa como un desarrollador de software especializado en análisis de datos deportivos aplicados al gaming competitivo y los esports. Necesito construir un sistema de análisis de rendimiento para jugadores y equipos de competición que les permita identificar debilidades, mejorar su juego y tomar decisiones estratégicas basadas en datos.

contexto del proyecto:
- Juego objetivo: [League of Legends / Valorant / CS2 / Dota 2 / Rocket League / otro]
- Tipo de usuario: [jugador individual amateur / equipo semiprofesional / organización profesional / entrenador / analista táctico]
- Fuentes de datos disponibles: [API oficial del juego / archivos de replays / capturas de pantalla de estadísticas / streams grabados]
- Stack tecnológico preferido: [Python + FastAPI / Node.js / React / combinación]
- Nivel de acceso a la API del juego: [API pública gratuita / API de partner / datos propietarios scrapeados éticamente]

objetivo:
Desarrolla una arquitectura técnica completa y los módulos principales de un sistema de análisis de rendimiento en esports:

1. INGESTA Y NORMALIZACIÓN DE DATOS
Diseña el pipeline de datos para extraer y normalizar información de partidas:
- Conexión con la API oficial del juego: endpoints principales, limitaciones de rate y estrategias de caché
- Estructura del modelo de datos: cómo normalizar eventos de partida (kills, muertes, posiciones, uso de habilidades, economía del juego) en un esquema relacional o de series temporales
- Para juegos con sistema de replays: cómo parsear los archivos de replay (formatos .rofl para LoL, .dem para CS2) y extraer los eventos relevantes
- Almacenamiento: qué tipo de base de datos elegir según el volumen de datos (PostgreSQL para datos estructurados, InfluxDB o TimescaleDB para series temporales de eventos en tiempo real)

2. MÓDULO DE MÉTRICAS DE RENDIMIENTO INDIVIDUAL
Implementa el cálculo de las métricas de rendimiento individual más relevantes para el juego elegido:
- Para un juego de tipo MOBA (LoL, Dota 2): KDA ajustado, CS por minuto, daño por oro gastado, participación en kills del equipo, eficiencia de visión (control de mapa), tasa de victorias por campeón/héroe
- Para un juego de tipo FPS (Valorant, CS2): KAST (porcentaje de rondas con Kill/Assist/Survive/Trade), rating de impacto por ronda, porcentaje de duelos ganados, precisión de headshots, clutch rate, apertura de rondas vs. cierre
- Para cada métrica: fórmula de cálculo, cómo comparar contra la media del parche actual, y cómo detectar tendencias positivas o negativas a lo largo del tiempo

3. ANÁLISIS TÁCTICO DE EQUIPO
Desarrolla los módulos de análisis colectivo:
- Análisis de composición de equipo: qué combinaciones de personajes/agentes funcionan mejor contra qué arquetipos
- Análisis de patrones de juego: rotaciones habituales, timing de objetivos, tendencias de side selection (CT/T side en FPS, blue/red side en MOBA)
- Detección de tendencias del meta: cómo el rendimiento de ciertos personajes o estrategias cambia con cada parche
- Análisis de los rivales: scraping y análisis de las estadísticas públicas de los equipos rivales antes de un enfrentamiento

4. SISTEMA DE DETECCIÓN DE DEBILIDADES Y RECOMENDACIONES
Implementa un motor de recomendaciones basado en el análisis de datos:
- Algoritmo para identificar los 3 puntos débiles más críticos de un jugador en un rol determinado
- Sistema de recomendaciones priorizadas: qué mejorar primero para obtener el mayor impacto en el rendimiento
- Cómo usar modelos de machine learning (regresión, clustering, clasificación) para comparar el perfil de juego del usuario con el de jugadores de mayor rango y detectar qué diferencia su juego
- Generación automática de un informe semanal de rendimiento con gráficas y texto interpretativo

5. DASHBOARD DE VISUALIZACIÓN
Diseña la interfaz de análisis para jugadores y entrenadores:
- Pantalla de resumen de sesión: estadísticas de las últimas 20 partidas con tendencias
- Gráfico de evolución del rendimiento en el tiempo (semana, mes, temporada)
- Heat maps de posición en el mapa para detectar tendencias espaciales
- Comparador de rendimiento: el jugador vs. la media de su rango vs. jugadores de rango superior
- Panel de análisis previo al torneo: resumen del equipo rival con sus patrones detectados

6. INTEGRACIÓN CON HERRAMIENTAS DEL ECOSISTEMA ESPORTS
Describe las integraciones clave que aumentarían el valor del sistema:
- Exportación de informes a formato PDF o PowerPoint para presentaciones a entrenadores y directivos
- Integración con plataformas de análisis existentes (op.gg, tracker.gg, leetify) mediante sus APIs públicas
- Bot de Discord para enviar resúmenes automáticos de rendimiento tras cada sesión de scrimmage
- Integración con OBS Studio para superponer estadísticas en tiempo real durante los streams

Finaliza con una estimación del tiempo de desarrollo por módulo y una lista de las bibliotecas de Python o JavaScript más útiles para este tipo de proyecto.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 60,
                'use_case' => 'Sistema de análisis de rendimiento para gaming competitivo',
                'vote_score' => 52,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 3,
                'title' => 'Diseño de identidad visual para equipos y torneos de esports con IA',
                'description' => 'Crea identidades visuales potentes y dinámicas para equipos de esports, torneos y eventos de gaming competitivo que conecten con la audiencia gaming.',
                'prompt_content' => <<<'EOT'
Actúa como un director de arte especializado en branding para la industria del gaming, los esports y la cultura gamer. Necesito desarrollar una identidad visual completa para una organización de esports o un torneo de gaming que sea impactante, reconocible y que resuene con la audiencia del gaming competitivo.

contexto del proyecto:
- Tipo de cliente: [equipo de esports / organización de torneos / plataforma de streaming gaming / marca de periféricos gaming]
- Juego o géneros en los que está presente: [FPS / MOBA / Battle Royale / deportes / RTS / lucha]
- Posicionamiento deseado: [élite y premium / accesible y comunitario / agresivo y competitivo / tecnológico y futurista / retro y nostálgico]
- Audiencia objetivo: [edad media, géneros, mercados geográficos]
- Presupuesto de diseño estimado: [bajo / medio / alto]
- Uso principal: [digital / merch físico / jerseys deportivos / decoración de venue para eventos presenciales]

objetivo:
Desarrolla un sistema de identidad visual completo para esports que incluya:

1. ANÁLISIS DE REFERENTES Y POSICIONAMIENTO VISUAL
Analiza el panorama visual del sector de los esports a nivel global:
- Describe los 5 arquetipos visuales dominantes en el branding de esports (agresivo-guerrero, tecnológico-futurista, minimalista-premium, tribal-comunidad, nostálgico-retro) con ejemplos de organizaciones reales que los representan
- Identifica las tendencias de diseño actuales en el sector: uso de gradientes neón, efectos glitch, animaciones de partículas, tipografías geométricas bold, motion graphics
- Define el posicionamiento visual deseado y cómo diferenciarse de los referentes más directos

2. CONSTRUCCIÓN DEL SISTEMA DE MARCA
Define todos los elementos del sistema de identidad visual:
- Logotipo: directrices para el diseño de un logotipo para esports (uso de escudos, animales, símbolos abstractos; tipografía custom vs. tipografía modificada; versiones horizontal, vertical y sigla)
- Paleta de colores: primario, secundario y acento (con códigos HEX, RGB y CMYK); reglas de uso en fondos oscuros y claros; contraste para accesibilidad
- Tipografía: fuente principal para titulares, fuente secundaria para texto de cuerpo, fuente monoespaciada para datos y estadísticas; reglas de jerarquía tipográfica
- Elementos gráficos de apoyo: patrones de textura, formas geométricas de relleno, líneas de acento, partículas o efectos de energía que pueden usarse como marcos o fondos

3. APLICACIONES DIGITALES
Especifica el sistema visual para los entornos digitales donde vive la marca:
- Stream overlay para Twitch y YouTube: alertas de nuevo seguidor y donación, facecam frame, panels informativos del canal, starting soon screen, BRB screen, end screen
- Gráficas para redes sociales: plantillas para anuncio de victoria, derrota, fichajes, stream schedules, hype posts previos a torneos (formatos: feed de Instagram, stories, Twitter/X, banners de YouTube)
- Website y app: sistema de componentes de UI (colores de botones, estado hover y active, iconografía, tarjetas de jugador, tabla de clasificación, cartel de torneo)
- Avatares y emotes de Twitch/Discord: guía de estilo para crear emotes coherentes con la identidad visual de la organización

4. APLICACIONES EN JERSEY Y MERCHANDISING
Define las especificaciones para las aplicaciones físicas de la marca:
- Jersey deportivo: zonas de aplicación del logo, nombre del patrocinador principal, número y nombre del jugador, colores de temporada regular vs. jersey alternativo
- Casual wear: cómo adaptar la identidad para camisetas, sudaderas, gorras y calcetines que puedan comprarse fans no jugadores
- Accesorios gaming: mousepads, fundas de mando, stickers para portátil
- Reglas de uso prohibido: combinaciones de color no permitidas, deformaciones del logo, uso sobre fondos inadecuados

5. MOTION DESIGN Y EFECTOS VISUALES
Los esports son un medio audiovisual. Describe las directrices de motion design:
- Animaciones del logotipo: intro sting (3 segundos), loop idle, explosión de victoria
- Transiciones de cámara para broadcasts: overlays animados entre jugadas, gráficas de estadísticas en directo
- Animaciones de entrada de jugadores para ceremonias de apertura de torneos
- Especificaciones técnicas: software recomendado (After Effects, Cavalry, Rive), formatos de entrega, tasas de fotogramas

6. GUÍA DE MARCA Y MANUAL DE USO
Define el contenido del brand guidelines document que recibirá el cliente:
- Estructura del documento: principios de marca, logo, colores, tipografía, fotografía, ilustración, aplicaciones digitales, aplicaciones físicas, tono de voz
- Cómo preparar los archivos para diferentes proveedores: imprenta, fabricante de jerseys, diseñador web, community manager
- Plantillas editables que el cliente puede usar de forma autónoma

Finaliza con una lista de 8 fuentes tipográficas gratuitas (Google Fonts, DaFont) que funcionan especialmente bien en branding de esports y gaming.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 45,
                'use_case' => 'Identidad visual y branding para esports y gaming',
                'vote_score' => 48,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 4,
                'title' => 'Monetización y patrocinios en la industria de los esports con IA',
                'description' => 'Desarrolla estrategias de captación de patrocinadores y diversificación de ingresos para organizaciones de esports y gaming competitivo.',
                'prompt_content' => <<<'EOT'
Actúa como un director comercial especializado en el sector de los esports y el gaming competitivo. Ayúdame a construir una estrategia de monetización completa y a desarrollar relaciones comerciales con patrocinadores para una organización de esports.

contexto de la organización:
- Nombre y juegos: [nombre del equipo / organización y juegos en los que compite]
- Nivel competitivo: [amateur / semiprofesional / profesional de liga regional / nacional / internacional]
- Audiencia actual: [número de seguidores totales en todas las plataformas, datos demográficos si los tienes]
- Ingresos actuales: [cuáles son las fuentes de ingreso existentes y su importancia relativa]
- Objetivo de ingresos anuales: [cifra o rango]

objetivo:
Desarrolla un plan de monetización y comercialización completo que incluya:

1. INVENTARIO DE ACTIVOS COMERCIALIZABLES
Identifica y valora todos los activos que la organización puede ofrecer a un patrocinador:
- Activos de visibilidad: espacio en el jersey (pecho, mangas, espalda), logo en el stream overlay, banners en el Discord, menciones en redes sociales, naming rights del equipo o de una sección (p.ej. "powered by X")
- Activos de contenido: vídeos sponsored, unboxings de productos del patrocinador, integración en streams, posts de jugadores en sus redes personales
- Activos de activación: presencia en torneos presenciales, fan zones, firma de autógrafos con presencia de marca, sorteos y giveaways copatrocinados
- Activos digitales: patrocinio de la newsletter, espacio publicitario en el sitio web, skin o cosméticos del juego con marca del patrocinador (si el juego lo permite)
Para cada activo: precio unitario orientativo y volumen anual disponible.

2. PAQUETES DE PATROCINIO POR NIVELES
Diseña 4 paquetes de patrocinio con nombres, precios orientativos y contenidos diferenciados:
- Nivel Presenting Sponsor (título principal): incluye todos los activos más valiosos, exclusividad en su categoría de mercado
- Nivel Gold Partner: activos de alta visibilidad sin exclusividad de categoría
- Nivel Silver Partner: activos de visibilidad digital principalmente
- Nivel Community Partner: activos de bajo coste orientados a marcas locales o startups del sector gaming
Para cada nivel: qué activos incluye, precio anual sugerido, y qué beneficios medibles puede esperar el patrocinador.

3. PROCESO DE CAPTACIÓN DE PATROCINADORES
Define el proceso comercial de principio a fin:
- Investigación de prospects: 15 categorías de empresas que naturalmente patrocinan esports (periféricos, bebidas energéticas, servicios de internet de alta velocidad, ropa deportiva, bancos orientados a jóvenes, marcas de tecnología de consumo, plataformas de streaming, etc.) con ejemplos de empresas en cada categoría
- Metodología de acercamiento: cómo identificar al decisor correcto dentro de cada empresa, cómo hacer el primer contacto (LinkedIn, email directo, evento del sector), y qué decir en el primer mensaje
- Propuesta comercial: estructura del deck de ventas de 10 diapositivas (historia del equipo, métricas de audiencia, perfil del fan, activos disponibles, paquetes, casos de éxito de patrocinios anteriores, próximos pasos)
- Negociación: cómo negociar más allá del precio (plazos de pago, contenido a medida, renovación anticipada, derechos de exclusividad)

4. MEDICIÓN Y REPORTING DE PATROCINIOS
Define el sistema para demostrar el valor al patrocinador y asegurar la renovación:
- Métricas a trackear: impresiones de marca en streams, clics en enlaces patrocinados, menciones en redes, ventas atribuibles (si hay código de descuento)
- Herramientas de medición: StreamElements, Streamlabs, Google Analytics, datos nativos de Twitch y YouTube
- Informe trimestral de patrocinio: estructura del documento, qué métricas incluir, cómo presentar los resultados de forma visual y comprensible para directivos de marketing de empresa no gaming
- Reunión de renovación: cómo preparar la propuesta de renovación con datos reales vs. proyecciones iniciales

5. FUENTES DE INGRESOS PROPIAS (SIN PATROCINADORES)
Diversifica los ingresos más allá de los patrocinios:
- Suscripciones de Twitch y YouTube Membership: cómo optimizar los beneficios de suscripción para aumentar la tasa de conversión
- Donaciones y tips: mejores prácticas de solicitud sin alienar a la audiencia
- Merchandising: márgenes típicos del sector, cómo lanzar una drop exitosa
- Torneos propios: cómo organizar y monetizar un torneo comunitario (inscripciones, patrocinadores del torneo, streaming del evento)
- Contenido exclusivo de pago: cursos de mejora para jugadores, análisis tácticos premium, acceso a scrimages del equipo
- NFTs y activos digitales coleccionables: estado actual del mercado y consideraciones antes de entrar

6. MODELO FINANCIERO Y PROYECCIÓN
Elabora un modelo financiero simplificado para los próximos 12 meses:
- Proyección de ingresos por fuente (patrocinios, merch, suscripciones, torneos)
- Costes fijos y variables de la organización (salarios de jugadores y staff, bootcamp, equipamiento, viajes, producción de contenido)
- Break-even y márgenes por línea de negocio
- Escenario de crecimiento si se consigue un presenting sponsor frente a escenario sin patrocinio principal

Finaliza con una lista de 10 agencias especializadas en representación comercial de equipos de esports en el mercado español y europeo.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 50,
                'use_case' => 'Patrocinios y monetización para organizaciones de esports',
                'vote_score' => 46,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 5,
                'title' => 'Gestión de producto en videojuegos competitivos y plataformas de esports con IA',
                'description' => 'Aplica metodologías de product management a videojuegos competitivos y plataformas digitales de esports para maximizar el engagement y la retención de jugadores.',
                'prompt_content' => <<<'EOT'
Actúa como un Product Manager senior con experiencia en videojuegos de servicio continuo (live-service games) y plataformas digitales del ecosistema de esports. Necesito aplicar principios de gestión de producto a un videojuego competitivo o a una plataforma digital de esports para mejorar el engagement, la retención y la monetización.

contexto del producto:
- Tipo de producto: [videojuego competitivo PC/móvil / plataforma de torneos / app de estadísticas y coaching / plataforma de streaming gaming / marketplace de skins]
- Estado actual: [en desarrollo / MVP lanzado / producto maduro en optimización]
- Métricas actuales: [DAU, MAU, retención D1/D7/D30, ARPU, tiempo de sesión]
- Principales competidores: [listar los 3 principales]
- Problema más urgente a resolver: [retención / monetización / adquisición / engagement / equilibrio competitivo]

objetivo:
Desarrolla un framework de product management aplicado a este tipo de producto que incluya:

1. ANÁLISIS DE MÉTRICAS CLAVE DE GAMING
Define el sistema de métricas más relevante para un producto gaming competitivo:
- North Star Metric: por qué para la mayoría de los juegos competitivos la métrica polar es el número de partidas jugadas por usuario activo por día, y cuándo podría ser otra
- Funnel de activación del jugador: registro → tutorial → primera partida → primera victoria → primera semana → jugador retenido a 30 días; explica las tasas de conversión típicas en cada etapa y dónde suelen estar los mayores abandonos
- Curvas de retención: cómo interpretar la curva de retención por cohortes y qué benchmarks son buenos en gaming competitivo (retención D1 > 40%, D7 > 15%, D30 > 8% como referencia)
- Métricas de salud del juego: tiempo en cola (matchmaking time), tasa de abandono de partida (AFK rate), toxicidad (report rate), distribución de rango de los jugadores (curva de distribución de habilidad)

2. DISEÑO DE SISTEMAS DE PROGRESIÓN Y RETENCIÓN
El diseño de los sistemas de progresión es la clave de la retención en gaming competitivo:
- Battle Pass: cómo diseñar un battle pass que maximice la retención diaria (recompensas diarias, misiones semanales, recompensas de hito) y la conversión a pago
- Sistema de ranking y matchmaking: cómo el diseño de los sistemas de ELO/MMR afecta a la retención; el rol de la "cara ascendente del aprendizaje" y el flujo (flow state de Csikszentmihalyi)
- Loops de progresión: progresión de cuenta (nivel, logros), progresión de personaje/agente/héroe (desbloqueos, mastery), progresión coleccionable (skins, emotes, variantes)
- Sistema de recompensas variables: cómo el diseño de loot boxes, crafting systems y eventos temporales afecta al engagement y a las consideraciones éticas y legales en España y Europa

3. CALENDAR DE CONTENIDO Y EVENTOS ESTACIONALES
Los juegos de servicio continuo viven y mueren por su cadencia de contenido:
- Planificación de temporadas (seasons): duración óptima (8-12 semanas típicamente), qué incluye cada temporada (nuevo mapa, nuevo personaje, nuevo pase de batalla, meta shift)
- Eventos especiales: Halloween, Navidad, aniversario del juego, colaboraciones con IP externas; cómo diseñar un evento que genere picos de DAU
- Parches y balance: frecuencia de actualización de balance, cómo comunicar los cambios de meta a la comunidad sin generar rechazo, gestión del riesgo de un parche que "rompe el juego"
- Roadmap público vs. privado: qué comunicar a la comunidad y qué mantener sorpresa para maximizar el hype

4. SISTEMA DE MONETIZACIÓN ÉTICA EN GAMING COMPETITIVO
La monetización en juegos free-to-play tiene implicaciones éticas y de regulación en Europa:
- Modelo free-to-play puro (solo cosméticos): ventajas, desventajas y ejemplos exitosos
- Regulación de loot boxes en España y la UE: estado actual de la legislación, consideraciones para juegos con menores
- Diseño de la tienda: cómo presentar los cosméticos para maximizar la conversión sin usar dark patterns
- Pase de batalla vs. tienda directa: análisis de cuál es más beneficioso para el jugador y para el desarrollador a largo plazo
- Monetización de la escena competitiva: pases de torneo, skins de equipos profesionales, pickems

5. GESTIÓN DEL EQUILIBRIO COMPETITIVO (GAME BALANCE)
El balance del juego es el producto principal de un videojuego competitivo. Define el proceso:
- Proceso de análisis de balance: cómo usar los datos de partida (win rate, pick rate, ban rate, KDA por personaje) para identificar elementos desequilibrados
- Framework de decisión de nerf/buff: cuándo actuar y cuándo esperar, cómo priorizar los cambios de mayor impacto
- Proceso de testeo de balance: PBE/PTR (servidores de prueba), recogida de feedback de la comunidad, métricas post-lanzamiento de parche
- Comunicación de cambios: cómo redactar notas de parche que sean informativas, transparentes y que mantengan la confianza de la comunidad

6. GESTIÓN DE LA TOXICIDAD Y SALUD DE LA COMUNIDAD
La toxicidad es el mayor inhibidor de la retención a largo plazo en juegos competitivos:
- Sistema de reporting y moderación: diseño del flujo de denuncia, tipos de sanción (silencio, restricción de chat, ban temporal, ban permanente) y automatización con machine learning
- Chat filter y detección de lenguaje tóxico: herramientas disponibles (Riot's Jigsaw/Perspective API) y cómo integrarlas
- Diseño de incentivos positivos: sistema de honor/reconocimiento a jugadores con buen comportamiento, impacto de los incentivos positivos en la reducción de toxicidad según estudios de comportamiento
- Métricas de salud de la comunidad: cómo medir y hacer seguimiento de la toxicidad, el churn causado por mala experiencia de comunidad y el impacto del buen comportamiento en la retención

Finaliza con los 5 libros y recursos más recomendados sobre product management aplicado a videojuegos y gaming.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 55,
                'use_case' => 'Product management para videojuegos competitivos y plataformas esports',
                'vote_score' => 53,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 6,
                'title' => 'Gestión de talento y scouting de jugadores profesionales de esports con IA',
                'description' => 'Diseña sistemas de scouting, contratación y gestión del talento humano para organizaciones de esports profesionales, incluyendo el bienestar de los jugadores.',
                'prompt_content' => <<<'EOT'
Actúa como un director de recursos humanos y talent manager especializado en la industria de los esports profesionales. Necesito desarrollar un sistema completo de gestión del talento para una organización de esports que incluya el scouting de jugadores, su contratación, desarrollo y bienestar.

contexto de la organización:
- Juego o juegos: [League of Legends / Valorant / CS2 / otro]
- Nivel competitivo: [liga regional / nacional / primera división / liga internacional]
- Tamaño del roster: [número de jugadores activos más suplentes]
- Staff no jugador: [head coach / analista / manager / psicólogo de rendimiento / médico / streamer de contenido]
- Situación actual: [expansión / reconstrucción del roster / optimización del equipo existente]

objetivo:
Desarrolla un sistema de gestión del talento para esports que incluya:

1. SISTEMA DE SCOUTING Y EVALUACIÓN DE JUGADORES
Define el proceso para identificar y evaluar talento en esports:
- Fuentes de scouting: plataformas de estadísticas (op.gg, tracker.gg, vlr.gg), ligas amateur y universitarias, canales de Twitch y YouTube de jugadores emergentes, bases de datos de agencias de representación
- Criterios de evaluación técnica: métricas de rendimiento estadístico relevantes para el rol y el juego (para cada juego definir las 8 métricas clave que indican el potencial de un jugador)
- Evaluación de intangibles: comunicación y calidad del shot-calling, mentalidad ante la adversidad (cómo responde a perder), capacidad de aprendizaje (mejora partida a partida), adaptabilidad táctica
- Proceso de tryout: estructura de una semana de prueba con el equipo, qué evalúa el coach cada día, cómo involucrar al equipo en la decisión de incorporar un nuevo miembro

2. CONTRATOS Y ESTRUCTURA LEGAL
Describe los aspectos legales específicos de los contratos en esports:
- Tipos de contrato en esports: contrato de jugador a tiempo completo, contrato de jugador amateur con cesión a liga semiprofesional, acuerdo de streamer y creador de contenido
- Cláusulas específicas del sector: buyout/cláusula de rescisión, derechos de imagen y likeness, restricciones de streaming durante la temporada, derechos sobre el contenido generado por el jugador, cláusula de comportamiento en redes sociales
- Salario y compensación: estructura de salario fijo + bonus por resultado + porcentaje de prize money; rangos salariales orientativos por nivel competitivo en España y Europa
- Duración típica de los contratos y gestión de las ventanas de transferencias (transfer windows) de cada liga

3. ONBOARDING Y CONSTRUCCIÓN DEL EQUIPO
Diseña el proceso de integración de nuevos jugadores:
- Bootcamp de integración (primera semana): agenda detallada día a día para que el nuevo jugador aprenda los sistemas del equipo, las comunicaciones in-game y la dinámica del grupo
- Asignación de mentor interno: rol del veterano del equipo en la integración del rookie
- Definición de roles y responsabilidades dentro del equipo: cómo estructurar el sistema de comunicación in-game (quién hace el shotcalling, quién coordina los objetivos, quién gestiona las crisis)
- Establecimiento de normas de equipo: horarios de práctica, política de asistencia a bootcamp, reglas de comportamiento en el gaming house, gestión de los conflictos internos

4. BIENESTAR FÍSICO Y MENTAL DE LOS JUGADORES
Los jugadores de esports profesionales enfrentan riesgos de salud específicos. Define el programa de bienestar:
- Prevención de lesiones por esfuerzo repetitivo: lesiones más frecuentes (tendinitis de muñeca, síndrome del túnel carpiano, problemas cervicales), rutinas de calentamiento y estiramiento, ergonomía del puesto de juego
- Salud visual: parámetros de configuración del monitor, pausas recomendadas (regla 20-20-20), calidad de la iluminación en la sala de juego
- Bienestar mental: manejo del tilt (desregulación emocional), síndrome del impostor en jugadores rookie, presión de rendimiento y gestión de la expectativa pública
- Nutrición y sueño: cómo los horarios nocturnos de la escena competitiva afectan al rendimiento y qué ajustes implementar
- Psicólogo de rendimiento: cómo integrar el trabajo psicológico en la rutina del equipo, qué trabaja el psicólogo con los jugadores de esports

5. DESARROLLO Y PLAN DE CARRERA
Los jugadores de esports tienen carreras cortas. Diseña el plan de desarrollo:
- Evaluación de rendimiento trimestral: métricas técnicas, evaluación del entrenador, autoevaluación del jugador, feedback 360 del equipo
- Plan de desarrollo individual: objetivos técnicos específicos para los próximos 90 días, recursos de aprendizaje (VOD review, coaching individual, análisis de replays de los mejores del mundo)
- Reconversión profesional: cómo preparar a los jugadores para la transición al coaching, análisis, casting, creación de contenido o al mundo laboral fuera de los esports tras su carrera activa

6. GESTIÓN DE LA MARCA PERSONAL DE LOS JUGADORES Y CONFLICTOS
Define la política de gestión de la marca personal de los jugadores:
- Derechos y límites: qué puede hacer el jugador en sus redes sociales sin permiso del equipo, qué requiere aprobación previa
- Protocolo de gestión de crisis: qué hacer cuando un jugador tiene una controversia pública en redes sociales
- Mediación de conflictos internos: proceso para gestionar conflictos entre jugadores, entre jugador y coach, o entre jugador y management

Finaliza con un listado de las 8 agencias de representación de jugadores más activas en el mercado europeo de esports.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 50,
                'use_case' => 'Talento y bienestar en organizaciones de esports profesionales',
                'vote_score' => 44,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 7,
                'title' => 'Análisis financiero de organizaciones de esports con IA',
                'description' => 'Analiza la estructura financiera de organizaciones de esports, sus modelos de negocio y la viabilidad económica en un sector en rápida evolución.',
                'prompt_content' => <<<'EOT'
Actúa como un analista financiero especializado en la industria del entretenimiento interactivo, los esports y las empresas de gaming. Necesito un análisis financiero completo de una organización de esports, incluyendo sus modelos de ingresos, estructura de costes, valoración y perspectivas de rentabilidad.

contexto de la organización:
- Tipo de entidad: [equipo de esports / organizador de torneos / plataforma de esports digital / media company de gaming]
- Fase de desarrollo: [startup pre-revenue / early-stage con ingresos iniciales / growth stage / empresa consolidada]
- Ingresos anuales aproximados o proyectados: [cifra]
- Fuentes de ingresos actuales: [patrocinios / prize money / merchandising / streaming / media rights / inversión externa]
- Necesidades financieras: [análisis de viabilidad / búsqueda de inversión / optimización de costes / valoración de la empresa]

objetivo:
Desarrolla un análisis financiero completo que incluya:

1. ANÁLISIS DEL MODELO DE INGRESOS DE LOS ESPORTS
Describe y cuantifica las principales fuentes de ingresos del sector:
- Patrocinios y publicidad: mayor fuente de ingresos en el sector; cómo se valoran los activos patrocinables, rangos de precio según el tier del equipo y el tamaño de la audiencia
- Derechos de emisión (media rights): cómo funcionan los acuerdos de media rights en las ligas más importantes (LCS, LEC, VCT, ESL), qué porcentaje reciben los equipos y cómo están evolucionando estos contratos
- Prize money: importancia relativa (menor de lo que parece a nivel de equipo), cómo se distribuye entre jugadores y organización, impacto fiscal en España
- Merchandising y e-commerce: márgenes típicos, volumen por tier de equipo
- Revenue sharing de las ligas: cómo funcionan los modelos de revenue sharing de Riot Games (LCS, LEC, VCT Partners) y Valve (Major Partner programs)
- Streaming y contenido: ingresos de Twitch (subscripciones, bits, publicidad), YouTube (AdSense, memberships, Super Thanks), plataformas de contenido

2. ESTRUCTURA DE COSTES Y ECONOMÍA UNITARIA
Analiza la estructura de costes típica de una organización de esports:
- Costes de roster: salarios de jugadores por tier (amateur, semiprofesional, profesional de liga nacional, profesional de liga global), costes de coaching staff y analistas
- Costes operativos: gaming house, equipamiento, viajes a torneos internacionales, visados
- Costes de producción de contenido: equipo de producción, streaming setup, edición de vídeo, diseño gráfico
- Costes de back office: management, relaciones con patrocinadores, legal, contabilidad
- Calcula el punto de equilibrio para diferentes escenarios de ingresos por patrocinio

3. VALORACIÓN DE ORGANIZACIONES DE ESPORTS
Explica los métodos de valoración utilizados en el sector:
- Múltiplos de ingresos: por qué las organizaciones de esports se valoran típicamente a múltiplos más altos que el entretenimiento tradicional (expectativas de crecimiento) y cuáles son los múltiplos actuales del sector
- Activos intangibles: valor de la base de fans, audiencia en streaming, historia competitiva (trofeos, presencia en ligas premium), marca del jugador estrella
- Valor del slot de liga: cómo los slots en ligas tipo franchise (LCS, LEC, VCT) son activos financieros en sí mismos y cómo se han transaccionado; impacto de los cambios de modelo de Riot en 2023-2024
- Comparable transactions: ejemplos de adquisiciones e inversiones recientes en el sector (Fnatic, G2, Team Vitality, Giants Gaming en Europa)

4. FINANCIACIÓN Y ATRACCIÓN DE INVERSIÓN
Describe las opciones de financiación para organizaciones de esports en distintas fases:
- Inversión de business angels del mundo gaming: quién invierte en esports en España y Europa, qué buscan, cómo presentar el pitch
- Capital riesgo (VC) especializado en gaming y entretenimiento: fondos activos en Europa, tesis de inversión y métricas que priorizan
- Crowdfunding de fans: tokenización de participación de fans (con consideraciones regulatorias en España), crowdfunding de recompensas para proyectos concretos
- Deuda vs. equity: cuándo tiene sentido financiarse con deuda para una organización de esports, qué tipo de deuda está disponible

5. CUADRO DE MANDO FINANCIERO PARA ESPORTS
Define las 10 métricas financieras más importantes para monitorizar la salud de una organización de esports:
- Revenue per viewer (ingresos por espectador de la audiencia)
- Coste por punto de rating en torneos transmitidos
- EBITDA ajustado (excluye amortización de slots de liga, que es un activo financiero)
- Cash burn rate mensual y runway
- Ratio patrocinios / ingresos totales (concentración de riesgo)
- LTV por patrocinador (cuántos años dura la relación en media)
- Coste de adquisición de nuevos fans
- Revenue per employee
- Prize money como % del total de ingresos
- Coste de roster como % del total de ingresos

6. ANÁLISIS DE RIESGOS FINANCIEROS DEL SECTOR
Identifica los principales riesgos financieros específicos de los esports:
- Concentración de ingresos en patrocinios (riesgo de pérdida de un patrocinador clave)
- Dependencia del publisher (el desarrollador del juego puede cambiar las reglas de la liga o discontinuar el título)
- Alta volatilidad de los resultados deportivos y su impacto en la audiencia y los patrocinios
- Riesgo regulatorio: normativa de gambling en esports, regulación de menores en ligas
- Ciclo de vida del juego: qué hacer cuando el juego principal del equipo pierde popularidad

Finaliza con una proyección de ingresos a 3 años para una organización de nivel semiprofesional español que quiere convertirse en profesional, con los hitos financieros necesarios en cada año.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 55,
                'use_case' => 'Análisis financiero y valoración de organizaciones de esports',
                'vote_score' => 49,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 8,
                'title' => 'Contratos y derechos en la industria de los esports con IA',
                'description' => 'Analiza el marco legal de los esports en España y Europa, incluyendo contratos de jugadores, derechos de imagen, propiedad intelectual y regulación de torneos.',
                'prompt_content' => <<<'EOT'
Actúa como un abogado especializado en derecho del entretenimiento, propiedad intelectual y deporte electrónico. Necesito un análisis jurídico completo del marco legal que regula la industria de los esports en España y Europa, con orientación práctica para organizaciones, jugadores y organizadores de torneos.

contexto de la consulta:
- Perfil del consultante: [organización de esports / jugador profesional o su representante / organizador de torneos / marca patrocinadora / publisher de videojuego]
- Situación específica: [redacción de contratos de jugadores / disputa entre jugador y equipo / organización de torneo / acuerdo de patrocinio / problema de derechos de imagen]
- Comunidad Autónoma de referencia (para aspectos de derecho laboral): [CA]

objetivo:
Desarrolla un análisis legal completo que incluya:

1. NATURALEZA JURÍDICA DEL DEPORTISTA DE ESPORTS EN ESPAÑA
Esta es una de las grandes incertidumbres del sector. Analiza:
- Estado actual del debate: ¿es el jugador de esports un deportista profesional, un trabajador por cuenta ajena, un trabajador autónomo o un artista?
- Impacto de la Ley del Deporte (Ley 39/2022): qué reconocimiento otorga a los esports, qué obligaciones impone y qué queda sin resolver
- El criterio de la Dirección General de la Seguridad Social y la jurisprudencia menor disponible sobre la clasificación laboral de jugadores de esports
- Implicaciones prácticas según la clasificación: cotizaciones a la Seguridad Social, prestaciones a las que tiene derecho el jugador, responsabilidades del equipo como empleador

2. EL CONTRATO DE JUGADOR DE ESPORTS
Analiza los elementos esenciales de un contrato de jugador de esports:
- Cláusulas obligatorias según el tipo de relación laboral elegida
- Cláusulas específicas del sector que todo contrato debe incluir:
  - Definición de las obligaciones de rendimiento (horas de práctica, asistencia a torneos, sessions de streaming)
  - Derechos de imagen: distinción entre imagen del jugador como persona física vs. como jugador del equipo; qué puede hacer el equipo con la imagen del jugador y qué pertenece al jugador
  - Propiedad del contenido: quién es titular de los clips, vídeos y streams generados durante la vigencia del contrato
  - Cláusula de no competencia post-contractual: validez en España (artículo 21 ET), duración máxima y compensación económica necesaria para que sea válida
  - Cláusula de compra (buyout): cómo funciona, cómo se fija el precio y cómo se gestiona la negociación entre equipos
  - Conducta en redes sociales: límites de la restricción de libertad de expresión del jugador
  - Confidencialidad sobre estrategias, meta y sistemas del equipo

3. PROPIEDAD INTELECTUAL EN LOS ESPORTS
Este es uno de los ámbitos más complejos del sector:
- Derechos del publisher sobre el juego y los torneos: por qué las organizaciones de esports no son propietarias de la competición en la que participan; qué licencias otorgan los publishers (Riot Games, Valve, Activision Blizzard) y en qué condiciones
- Derechos de retransmisión: quién puede emitir un torneo de esports y en qué condiciones; conflicto entre el derecho del equipo a streamear sus propias partidas y los derechos del organizador del torneo
- Protección del nombre y logo del equipo: registro de marcas en la OEPM y en la EUIPO; conflictos de marca en el sector de los esports
- Derechos sobre las skins y cosméticos de los jugadores: quién es titular de las skins creadas a imagen de un jugador (el jugador, el equipo o el publisher)

4. ORGANIZACIÓN DE TORNEOS: ASPECTOS LEGALES
Define el marco legal para organizar un torneo de esports en España:
- Requisitos legales según el tipo de torneo: torneo gratuito vs. torneo con inscripción de pago vs. torneo con premio en metálico
- Regulación de los juegos de azar y las apuestas en esports: qué está permitido y qué está prohibido en España (Ley de Regulación del Juego)
- Protección de menores en torneos: qué restricciones aplican cuando participan menores de 18 años
- Reglamento del torneo: cláusulas esenciales (elegibilidad, sistema de sanciones, reglas anti-trampa, resolución de disputas, política de modificaciones de reglas)
- Responsabilidad civil del organizador ante incidentes durante el torneo

5. CONTRATOS DE PATROCINIO EN ESPORTS
Analiza las particularidades de los acuerdos de patrocinio en el sector:
- Estructura del contrato de patrocinio: partes, objeto, activos cedidos, contraprestación, exclusividad, duración
- Cláusulas de imagen y comportamiento: qué puede exigir el patrocinador sobre el comportamiento público de los jugadores que representan su marca
- Derechos sobre el contenido: quién es titular del contenido branded creado por el equipo para el patrocinador
- Resolución del contrato por conducta inapropiada del jugador (morality clause): cómo redactarla y cuándo es aplicable

6. REGULACIÓN DEL GAMBLING Y APUESTAS EN ESPORTS
El betting sobre esports es un sector en crecimiento con alta incertidumbre legal:
- Operadores autorizados en España para aceptar apuestas sobre esports
- Regulación de los skin betting y loot boxes como juego de azar: estado en España, Bélgica, Países Bajos
- Prohibición de apuestas para jugadores y personal de las organizaciones (integridad competitiva)
- Conflictos de interés de los patrocinadores de apuestas deportivas en esports

Finaliza con un listado de los 8 despachos de abogados con práctica en derecho de esports y entretenimiento digital más activos en España.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 50,
                'use_case' => 'Marco legal y contratos en la industria de los esports en España',
                'vote_score' => 45,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 9,
                'title' => 'Soporte a jugadores y gestión de comunidades gaming con IA',
                'description' => 'Desarrolla sistemas de atención al usuario y gestión de comunidades para plataformas de gaming, equipos de esports y desarrolladores de videojuegos.',
                'prompt_content' => <<<'EOT'
Actúa como un experto en community management y customer support especializado en la industria del gaming, los videojuegos online y los esports. Necesito desarrollar un sistema completo de soporte a jugadores y gestión de comunidad para una organización del sector gaming.

contexto de la organización:
- Tipo de organización: [estudio desarrollador de videojuego / plataforma de torneos online / organización de esports con comunidad de fans / marketplace de skins o artículos gaming]
- Tamaño de la comunidad: [número de usuarios activos o fans]
- Canales de comunidad actuales: [Discord / Reddit / Twitter / Twitch / foro propio / combinación]
- Principal tipo de incidencias de soporte: [bugs técnicos / disputas en torneo / transacciones / toxicidad y ban appeals / preguntas sobre el juego]
- Tamaño del equipo de soporte: [número de agentes]

objetivo:
Desarrolla un sistema completo de soporte y gestión de comunidad en gaming que incluya:

1. ESTRUCTURA DEL SISTEMA DE SOPORTE EN GAMING
El soporte en gaming tiene características únicas: alta volumenétría, usuarios muy exigentes y emocionales, incidencias técnicas complejas. Define la arquitectura del sistema:
- Canales de soporte: ticket system (Zendesk, Freshdesk), chat en directo, bot de autoservicio, foro de soporte comunitario (los propios usuarios ayudan a otros)
- Triage y clasificación de tickets: categorías principales (bug técnico, problema de cuenta, disputa en partida, apelación de sanción, solicitud de reembolso, pregunta general)
- SLAs por categoría: tiempo de primera respuesta y tiempo de resolución según la urgencia (pérdida de acceso a la cuenta = crítico / bug que afecta al juego competitivo = urgente / pregunta informativa = normal)
- Escalado: cuándo un ticket sube del agente junior al senior, cuándo va al equipo técnico, cuándo requiere intervención del CM o de dirección

2. GESTIÓN DE BAN APPEALS Y SANCIONES
El proceso de apelación de sanciones es uno de los aspectos más sensibles del soporte en gaming:
- Tipos de sanciones y sus procesos de appeal: silencio temporal, restricción de funciones, suspensión temporal, ban permanente
- Criterios para aprobar o denegar una apelación: qué evidencias se evalúan, quién toma la decisión, cuántos niveles de revisión hay
- Comunicación de la decisión: cómo redactar una respuesta que sea firme, justa y que no genere más conflicto
- Gestión de ban appeals de personalidades públicas (streamers, jugadores profesionales): protocolo especial para casos de alto impacto en la comunidad
- Cómo documentar y usar las apelaciones para mejorar el sistema de detección de trampas y el sistema de sanciones

3. GESTIÓN DE LA TOXICIDAD Y MODERACIÓN DE COMUNIDAD
La toxicidad es el problema crónico del gaming online. Define el sistema de moderación:
- Moderación proactiva vs. reactiva: qué porcentaje del esfuerzo del equipo debe ser proactivo (revisión de canales, detección temprana de conflictos) vs. reactivo (gestión de reportes)
- Sistema de moderación en Discord: estructura de roles de moderador, herramientas recomendadas (MEE6, Dyno, Carl-bot, AutoMod nativo de Discord), cómo configurar los filtros de palabras y el sistema de automod
- Moderación de chat de Twitch durante streams: rol de los mods voluntarios, comandos de moderación, uso de herramientas como Streamlabs Chatbot
- Gestión de radicales y usuarios problemáticos crónicos: cuándo el shadowban / quiet ban es la herramienta adecuada, cuándo hay que hacer el ban definitivo visible
- Documentación de incidentes: cómo llevar un registro de usuarios problemáticos que permita tomar decisiones informadas en el futuro

4. COMUNICACIÓN DE CRISIS EN GAMING
Las organizaciones de gaming enfrentan crisis de comunidad con frecuencia (un parche mal recibido, un escándalo de un jugador, una filtración de datos, un fallo masivo del servidor). Define el protocolo:
- Tipos de crisis en gaming: crisis técnica (caída del servidor), crisis de reputación (escándalo de un jugador o empleado), crisis de producto (parche que destruye el balance), crisis de datos (brecha de seguridad)
- Protocolo de las primeras dos horas: quién se comunica, en qué canal, con qué mensaje, qué no decir nunca durante una crisis
- Gestión del subreddit y Twitter durante una crisis: cómo manejar el flood de posts negativos, qué posts fijar, cómo interactuar con los usuarios más influyentes (streamers, content creators) para que no amplifiquen la negatividad
- Post-mortem público: cuándo y cómo comunicar las causas de la crisis y las medidas adoptadas para que no se repita

5. PROGRAMAS DE COMUNIDAD Y ENGAGEMENT
Define los programas para construir una comunidad sana y activa:
- Programa de Moderadores Voluntarios (Mod Team): cómo reclutar, formar y retener a moderadores voluntarios de la comunidad; qué compensación no económica ofrecerles (acceso early a contenido, badge exclusivo, comunicación directa con el equipo)
- Programa de Embajadores o Creator Program: cómo estructurar el programa de creators que generen contenido positivo sobre la organización o el juego
- Eventos de comunidad: torneos para usuarios, sesiones de preguntas y respuestas (AMA), viewing parties, concursos de fan art y creación de contenido
- Feedback loops: cómo recoger feedback de la comunidad de forma estructurada (encuestas periódicas, focus groups, acceso a servidores de prueba)

6. MÉTRICAS DE SOPORTE Y COMUNIDAD EN GAMING
Define los KPIs específicos para medir la salud del soporte y la comunidad en gaming:
- Métricas de soporte: volumen de tickets por categoría, tiempo de primera respuesta, tiempo de resolución, CSAT (Customer Satisfaction Score), tasa de reapertura de tickets, tasa de autoservicio
- Métricas de comunidad: miembros activos en Discord (DAU/MAU del servidor), tasa de crecimiento de la comunidad, sentiment score en redes sociales, número de reportes de toxicidad por usuario activo, tasa de ban vs. ratio de usuarios activos

Finaliza con una lista de 8 herramientas específicas del sector gaming para gestión de comunidad, soporte y moderación.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 40,
                'use_case' => 'Soporte y gestión de comunidad en gaming y esports',
                'vote_score' => 50,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 10,
                'title' => 'Carrera freelance en la industria del gaming y esports con IA',
                'description' => 'Construye una carrera freelance sostenible en el ecosistema de los esports y el gaming competitivo aprovechando habilidades existentes y creando servicios de alto valor.',
                'prompt_content' => <<<'EOT'
Actúa como un mentor de negocio freelance especializado en la industria del gaming, los esports y el entretenimiento digital. Ayúdame a construir una carrera freelance rentable dentro del ecosistema de los esports y el gaming, aprovechando mis habilidades actuales y adaptándolas a las necesidades del sector.

contexto personal:
- Habilidades actuales: [diseño gráfico / desarrollo web / producción de vídeo / análisis de datos / community management / redacción / streaming / caster / coaching de gaming / otra]
- Conocimiento del sector gaming: [muy alto (jugador competitivo) / alto (seguidor activo de esports) / medio (fan casual) / bajo (interés profesional sin conocimiento profundo)]
- Disponibilidad semanal: [horas por semana]
- Ingresos freelance actuales o esperados: [situación]
- Mercado objetivo preferido: [equipos de esports / desarrolladores de videojuegos / marcas patrocinadoras de gaming / creadores de contenido gaming / organizadores de torneos]

objetivo:
Desarrolla un plan completo de carrera freelance en el sector gaming que incluya:

1. MAPA DE OPORTUNIDADES FREELANCE EN EL ECOSISTEMA GAMING
El sector gaming tiene un ecosistema enorme y diverso. Identifica y describe las 15 oportunidades de trabajo freelance más demandadas en el sector, con su precio orientativo de mercado y el perfil ideal para cada una:
- Diseño gráfico: logos de equipos, overlays de stream, gráficas para redes sociales, jerseys, brand books de esports
- Motion graphics y animación: intro videos de torneos, alerts de Twitch animadas, packaging de eventos de esports
- Desarrollo web: sitios de equipos de esports, plataformas de torneos, landing pages de eventos
- Producción de vídeo: highlights de partidas, documentales de jugadores, behind the scenes de equipos
- Análisis y estadísticas: informes de rendimiento de jugadores, análisis de rivales, datos para el coaching staff
- Copywriting y content marketing: artículos sobre esports, scripts para YouTube, descripciones de torneos
- Community management: gestión de Discord y redes sociales de equipos y marcas gaming
- Casting y presentación de torneos: casting de partidas en español, presentación de ceremonias de apertura y cierre
- Coaching de gaming: entrenamiento individual de jugadores para subir de rango en juegos competitivos
- Traducción y localización: traducción de contenido gaming del inglés al español, localización de juegos
- Consultoría de patrocinios: ayudar a marcas no gaming a entrar en el sector
- Producción de podcasts: edición y producción de podcasts de gaming y esports
- Fotografía y vídeo de eventos presenciales: cobertura fotográfica de torneos y bootcamps
- Gestión de influencers: connecting gaming influencers with brands
- Diseño de torneos: estructura y reglamento de torneos amateur

2. POSICIONAMIENTO Y ESPECIALIZACIÓN EN EL SECTOR GAMING
No basta con ser un buen freelance genérico. Necesitas posicionarte como el mejor en tu nicho dentro del gaming:
- Cómo usar el conocimiento profundo del juego como ventaja competitiva frente a freelancers generalistas
- Los 5 nichos con menor competencia y mayor crecimiento actual en el sector gaming en España
- Cómo construir un portfolio que demuestre conocimiento del sector: proyectos de práctica, colaboraciones gratuitas iniciales con equipos amateur, mockups de proyectos imaginarios
- Cómo hablar el lenguaje del gaming en tus propuestas y comunicaciones con clientes del sector

3. CANALES DE CAPTACIÓN DE CLIENTES EN EL GAMING
Los clientes del sector gaming no están en los mismos lugares que los clientes de otros sectores:
- LinkedIn: grupos de esports, perfiles de managers y directores de organizaciones de esports
- Twitter/X: el principal punto de encuentro de la industria de esports; cómo usar Twitter para visibilizarte ante potenciales clientes
- Discord: servidores de networking de la industria de esports, comunidades de profesionales del gaming
- Eventos del sector: Gaming Madrid, BGS en São Paulo, LVP Gamergy, ESL One; cómo aprovechar los eventos presenciales para hacer networking
- Plataformas de freelance especializadas en gaming: UpWork con perfil gaming-focused, GiggedIn, Backstage
- Cold outreach directo a organizaciones de esports: cómo hacer un pitch directo a equipos y organizadores de torneos

4. PRECIOS Y NEGOCIACIÓN EN EL SECTOR GAMING
El sector gaming tiene una cultura de precios peculiar:
- El problema del "exposure": cómo rechazar trabajos gratuitos de forma educada sin quemar puentes en una industria pequeña
- Cómo justificar precios premium ante clientes de esports que están acostumbrados a pedir descuentos por ser una "startup del sector"
- Estructuras de precio recomendadas para servicios de gaming: por proyecto vs. retainer mensual vs. por hora
- Cuándo aceptar trabajar por royalties o equity en una organización de esports emergente y cuándo no

5. CONSTRUCCIÓN DE AUTORIDAD Y MARCA PERSONAL EN EL SECTOR
En una industria tan basada en la cultura y la pertenencia, la marca personal es determinante:
- Cómo usar las redes sociales para demostrar conocimiento del sector: análisis de torneos, opiniones sobre fichajes, breakdown de estrategias
- Creación de contenido especializado: newsletter de gaming para profesionales, análisis en LinkedIn sobre el negocio de los esports, threads de Twitter sobre diseño o análisis de jugadores
- Hablar en eventos de la industria: cómo conseguir ponencias en Gaming Madrid, ESL Gaming, eventos universitarios de esports
- Colaboración con otros freelancers del sector: cómo construir una red de referidos en la industria

6. HOJA DE RUTA PARA LOS PRIMEROS 12 MESES COMO FREELANCE GAMING
Define las acciones mes a mes para los primeros 12 meses:
- Meses 1-2: construcción de portfolio, presencia digital y primeros clientes de práctica
- Meses 3-4: primeros clientes de pago, ajuste de precios y servicios
- Meses 5-6: consolidación de una especialidad clara y primeras referencias
- Meses 7-9: crecimiento por referidos, subida de tarifas
- Meses 10-12: posible incorporación de un colaborador freelance para escalar capacidad

Finaliza con los 10 recursos (newsletters, podcasts, canales de YouTube y comunidades online) imprescindibles para mantenerse actualizado sobre el negocio de los esports como freelance.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'beginner',
                'estimated_minutes' => 35,
                'use_case' => 'Plan de carrera freelance en la industria del gaming y esports',
                'vote_score' => 51,
                'resource_type' => 'prompt',
            ],
        ];
        foreach ($skills as $data) {
            $slug = Str::slug($data['title']);
            if (Skill::where('slug', $slug)->exists()) {
                $this->command->info("Skipping: {$data['title']}");

                continue;
            }
            Skill::create(array_merge($data, [
                'user_id' => $admin->id,
                'slug' => $slug,
                'status' => 'published',
                'version' => 1,
                'views_count' => rand(80, 400),
                'saves_count' => rand(5, 30),
            ]));
            $this->command->info("Created: {$data['title']}");
        }
    }
}
