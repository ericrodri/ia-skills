<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills495Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de videojuegos con IA para estudios independientes',
                'description'      => 'Diseña estrategias de marketing para videojuegos indie que maximicen el alcance con presupuesto limitado, usando IA para crear trailers, copys de Steam, campañas en redes sociales y relaciones con streamers.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing de videojuegos con experiencia trabajando con estudios indie y AA. Has ayudado a decenas de juegos a alcanzar sus objetivos de ventas en Steam, itch.io, consolas y móvil. Conoces en profundidad las dinámicas de las comunidades de gaming, los algoritmos de Steam y cómo hacer ruido sin grandes presupuestos.

**Mi situación:**
Somos un estudio indie de 3 personas que ha desarrollado un roguelite de fantasía oscura en 2D. Vamos a lanzar en Steam en 3 meses con un presupuesto de marketing de 2.000€. Necesito un plan de marketing completo para maximizar las ventas del lanzamiento.

**instrucción 1 — Estrategia de posicionamiento:**
Ayúdame a definir cómo posicionar mi juego:

1. **Análisis de la competencia en Steam:**
   - Cómo usar Steam Spy y los datos públicos de Steam para entender el mercado de roguelites 2D
   - Identificar los 5-10 juegos más similares al mío y analizar qué les funcionó
   - Encontrar el "nicho dentro del nicho": qué hace a mi juego diferente dentro del género

2. **Propuesta de valor única (UVP):**
   - Cómo articular en una frase qué hace especial a mi juego
   - La fórmula: "[Nombre] es un [género] donde [elemento diferenciador] para jugadores que [descripción del jugador ideal]"
   - Cómo testear el mensaje con la comunidad antes de lanzar

3. **Tags de Steam:**
   - Qué tags elegir para maximizar la visibilidad orgánica
   - Balance entre tags de alta competencia (roguelite, indie) y tags de nicho
   - Cómo los tags afectan al algoritmo de Steam

**instrucción 2 — Página de Steam optimizada:**
La pieza más importante del marketing de Steam:

1. **Cápsula del juego (capsule art):**
   - Principios de diseño para una capsule que destaque en los resultados de búsqueda
   - A/B testing de capsules: cómo hacerlo antes del lanzamiento
   - Qué funciona en el género roguelite oscuro

2. **Descripción del juego:**
   - Estructura óptima (párrafo de gancho + bullets de features + párrafo de cierre)
   - Cómo escribir el "about this game" para convertir visitas en wishlist
   - Localización: en qué idiomas priorizar para mi género

3. **Screenshots y trailer:**
   - Qué mostrar en las primeras 3-4 screenshots (las más importantes)
   - Estructura del trailer de Steam: primeros 15 segundos críticos, duración óptima
   - Cómo mostrar el gameplay loop de forma atractiva sin spoilers

4. **Gestión de la wishlist:**
   - Cómo interpretar los números de wishlist como señal de éxito potencial
   - Estrategias para maximizar wishlists en los 3 meses previos al lanzamiento
   - Festivales de Steam a los que presentarse

**instrucción 3 — Comunidad y redes sociales:**
Cómo construir audiencia antes del lanzamiento:

- **Twitter/X para devs:** estrategia de #screenshotsaturday, #indiedev, desarrollo en público
- **TikTok e Instagram:** clips cortos de gameplay, behind the scenes del desarrollo
- **Discord:** cómo construir y gestionar una comunidad antes del lanzamiento
- **Reddit:** subreddits relevantes (r/indiegaming, r/roguelikes, r/gamedev) y cómo participar sin spam

**instrucción 4 — Streamers y prensa especializada:**
El canal más impactante para juegos indie:

- Cómo identificar streamers de tamaño medio-pequeño con audiencias muy afines al género
- Plantilla de email de contacto a streamers (personalizado, breve, con key de Steam)
- Prensa especializada: qué medios cubren juegos indie, cómo conseguir una review
- Youtubers de análisis: cuándo y cómo acercarse

**instrucción 5 — Plan de lanzamiento:**
Los 30 días más críticos:

- Semana -4: embargo de keys a prensa y streamers
- Semana -2: levantamiento del embargo, primeros vídeos y reviews
- Día de lanzamiento: actividad máxima, discount o bundle con otros juegos
- Semana +1: respuesta a reviews negativas, primer parche de correcciones
- Mes +1: primera actualización de contenido para mantener el algoritmo

objetivo: Conseguir 1.000 ventas en las primeras dos semanas de lanzamiento en Steam y establecer una base de jugadores fiel que soporte el crecimiento a largo plazo del estudio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Crear un plan de marketing completo para el lanzamiento de un videojuego indie en Steam con presupuesto limitado',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Diseño de mecánicas y sistemas de juego con IA',
                'description'      => 'Usa IA para diseñar, iterar y documentar mecánicas de juego equilibradas, sistemas de progresión y loops de gameplay que enganchen a los jugadores y mantengan la retención a largo plazo.',
                'prompt_content'   => <<<'EOT'
Eres un experto en game design con experiencia en diseño de mecánicas de juego, sistemas de progresión, economía de juego y balanceo. Has trabajado en juegos de varios géneros y sabes cómo aplicar principios psicológicos para crear loops de gameplay que mantengan a los jugadores enganchados de forma ética.

**Mi contexto:**
Soy game designer en un estudio indie desarrollando un RPG de acción con elementos roguelite. Necesito diseñar el sistema de progresión del personaje y el loop de gameplay principal de forma que sea divertido desde el primer minuto y tenga profundidad para jugadores avanzados.

**instrucción 1 — Core gameplay loop:**
Ayúdame a diseñar y documentar el loop central del juego:

1. **El ciclo básico (10-30 segundos):**
   - Acción → Feedback → Recompensa → Decisión
   - Cómo cada elemento refuerza el engagement
   - Ejemplos de loops exitosos en el género roguelite que puedo analizar como referencia

2. **El ciclo de sesión (20-60 minutos):**
   - Estructura de una run típica: inicio, desarrollo, climax, resolución
   - Cómo gestionar la curva de dificultad dentro de una sesión
   - El "one more run": qué mecanismos psicológicos lo crean

3. **El ciclo meta (días/semanas):**
   - Progresión permanente entre runs: qué desbloquear y cuándo
   - Cómo mantener la novedad sin sacrificar la maestría
   - Sistema de desbloqueos que no genere FOMO pero sí motivación

**instrucción 2 — Sistema de progresión del personaje:**
Diseña un sistema de stats y habilidades:

Para un RPG de acción con roguelite necesito:

1. **Stats base:**
   - Qué stats son esenciales (vida, daño, velocidad, defensa)
   - Cómo hacer que cada stat tenga impacto visible en el gameplay
   - Fórmulas de escalado: lineal vs. exponencial vs. logarítmico (con ejemplos)

2. **Sistema de habilidades:**
   - Árbol de habilidades vs. grid de habilidades vs. deck building: cuál encaja mejor con mi concepto
   - Sinergias entre habilidades: cómo diseñarlas para crear builds interesantes
   - Cómo evitar que una build sea "la mejor" siempre (balance sin homogeneizar)

3. **Items y equipo:**
   - Rareza de items: Common/Uncommon/Rare/Legendary — impacto de cada nivel
   - Cómo hacer que cada item encontrado se sienta especial
   - Gestión del inventario: cuánto es demasiado para un roguelite

**instrucción 3 — Balanceo con datos:**
Cómo balancear el juego de forma sistemática:

1. **Modelo matemático de balanceo:**
   - Cómo crear una hoja de cálculo de balanceo para daño, DPS y TTK (time to kill)
   - Curvas de dificultad: cómo diseñar los enemigos en relación al poder del jugador
   - Teoría del justo desafío: que el jugador sienta que puede mejorar, no que el juego es injusto

2. **Playtesting sistemático:**
   - Qué métricas recoger durante el playtesting (muertes por zona, builds más usadas, items ignorados)
   - Señales de que algo está roto: qué hace el jugador cuando algo está desbalanceado
   - Ciclo de iteración: medir → identificar el problema → hipótesis → cambio → medir de nuevo

3. **Balanceo post-lanzamiento:**
   - Cómo comunicar nerfs y buffs a la comunidad sin generar toxicidad
   - Filosofía de balanceo: ¿buffs o nerfs como primera respuesta?

**instrucción 4 — Generación procedural de contenido:**
Para la parte roguelite del juego:

- **Generación de mazmorras:** algoritmos básicos (BSP, drunkard's walk, rooms and corridors) y sus ventajas/desventajas
- **Distribución de loot:** cómo hacer que cada run se sienta diferente sin ser completamente aleatoria
- **Variación de enemigos:** modificadores de enemigos, élites, jefes opcionales
- **Semillas (seeds):** cómo implementarlas para permitir que los jugadores compartan runs interesantes

**instrucción 5 — Documento de diseño (GDD):**
Crea la estructura de un Game Design Document para mi sistema de progresión:
- Visión y filosofía del diseño
- Descripción funcional del sistema
- Especificaciones técnicas para el equipo de desarrollo
- Preguntas abiertas y decisiones pendientes

objetivo: Tener un sistema de progresión completamente documentado y balanceado que pueda entregar al equipo de desarrollo para su implementación, con suficiente profundidad para 20+ horas de juego.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar y documentar sistemas de progresión y mecánicas de gameplay equilibradas para un RPG roguelite',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Arte y dirección visual para videojuegos con IA',
                'description'      => 'Define la dirección artística de tu videojuego usando IA como herramienta de exploración visual, creación de concept art, generación de assets y mantenimiento de la consistencia estética a lo largo del proyecto.',
                'prompt_content'   => <<<'EOT'
Eres un experto en dirección de arte para videojuegos con experiencia en pixel art, ilustración 2D y arte 3D para juegos indie y AA. Conoces las herramientas de IA generativa más relevantes para artistas de videojuegos y sabes cómo integrarlas en un pipeline de producción de arte sin comprometer la visión artística ni los derechos de propiedad intelectual.

**Mi contexto:**
Soy el único artista de un estudio indie de 4 personas. Estamos desarrollando un juego de aventuras 2D con una estética watercolor/acuarela en un mundo de fantasía celta. Tengo buenas habilidades artísticas pero recursos de tiempo limitados. Necesito estrategias para producir más arte de calidad sin sacrificar la coherencia visual.

**instrucción 1 — Definición de la dirección artística:**
Antes de producir assets, necesito documentar la visión:

1. **Mood board y referencias:**
   - Cómo crear un mood board efectivo que guíe todas las decisiones artísticas
   - Qué buscar en las referencias (no copiar, sino analizar: paleta, textura, composición, mood)
   - Herramientas para crear mood boards colaborativos con el equipo

2. **Guía de estilo (Art Bible):**
   - Qué documenta un art bible de calidad para un juego indie
   - Paleta de colores maestra: primaria, secundaria, semántica (enemigos, UI, entorno)
   - Reglas de iluminación: cómo se comporta la luz en tu estilo watercolor
   - Reglas de silueta: cómo hacer que los personajes sean reconocibles a pequeño tamaño
   - Tipografía del juego: serif vs. sans-serif para el género de fantasía celta

3. **Consistencia estética:**
   - Cómo asegurar que todos los assets parecen parte del mismo mundo
   - Checklist de revisión de arte antes de aprobar un asset

**instrucción 2 — IA como herramienta de exploración visual:**
Cómo usar IA generativa de forma ética y efectiva:

1. **Exploración de concept art:**
   - Cómo usar Midjourney/Stable Diffusion para explorar direcciones artísticas antes de comprometerse
   - Técnica de "mood exploration": generar muchas variaciones para identificar qué encaja con la visión
   - Cómo usar el concept generado como referencia para arte original, no como arte final

2. **Aceleración de la producción:**
   - Generación de texturas base para pintar encima
   - Creación de variaciones de color para assets ya creados
   - Generación de referencias de poses para personajes
   - Creación de thumbnails rápidos para composiciones

3. **Consideraciones éticas y legales:**
   - Uso ético de IA en arte de videojuegos (qué modelos usar y cuáles evitar)
   - Cómo documentar el uso de IA en el proceso para transparencia con la comunidad
   - Derechos de autor del arte generado con IA: estado actual de la cuestión

**instrucción 3 — Pipeline de producción de arte:**
Cómo organizar el trabajo de arte para ser más eficiente:

1. **Priorización de assets:**
   - Qué arte producir primero para tener una "vertical slice" presentable
   - Nivel de detalle por tipo de asset: personajes principales (mayor detalle) vs. tiles de entorno (menor)
   - Arte de placeholder vs. arte final: cuándo es aceptable y cuándo no

2. **Sistema de modulación de assets:**
   - Cómo crear componentes reutilizables (árboles, rocas, vegetación) que maximicen la variedad con menos trabajo
   - Spritesheet organization: cómo organizar los sprites para que el equipo técnico pueda implementarlos
   - Nomenclatura de archivos: convenciones que evitan confusiones en el equipo

3. **Animación eficiente:**
   - Cuántos fotogramas necesita cada tipo de animación (idle, walk, attack, death)
   - Técnicas de animación para un solo artista: bone animation vs. frame-by-frame
   - Qué animar a mano vs. qué se puede hacer proceduralmente

**instrucción 4 — UI y UX visual:**
El arte de la interfaz de usuario:
- Diseño de HUD que no distrae pero da toda la información necesaria
- Iconografía: cómo diseñar iconos que sean legibles a cualquier tamaño
- Menús y pantallas: flujo visual y jerarquía de la información
- Feedback visual al jugador: efectos de partículas, pantallas de impacto, UI animada

objetivo: Tener el art bible documentado y los primeros 30 assets del juego producidos en las próximas 8 semanas, estableciendo un pipeline sostenible para completar el arte del juego completo en 6 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Definir la dirección artística de un videojuego 2D y optimizar el pipeline de producción de arte para un solo artista',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Monetización y estrategia de ventas para videojuegos con IA',
                'description'      => 'Diseña el modelo de monetización óptimo para tu videojuego según el género y la plataforma, incluyendo pricing estratégico, DLC, free-to-play vs. premium y estrategias para maximizar los ingresos durante el ciclo de vida del juego.',
                'prompt_content'   => <<<'EOT'
Eres un experto en monetización de videojuegos y estrategia comercial para estudios indie e intermedios. Conoces en profundidad los modelos de monetización de Steam, mobile, consolas y plataformas de suscripción. Tu especialidad es diseñar estrategias de monetización éticas que maximicen los ingresos a largo plazo sin dañar la experiencia del jugador ni la reputación del estudio.

**Mi situación:**
Soy el CEO de un estudio indie de 6 personas. Hemos terminado nuestro primer juego (RPG de aventuras, 15-20 horas de contenido) y estamos planificando el lanzamiento en Steam y consolas. También estamos evaluando si lanzar una versión móvil. Necesito definir la estrategia de monetización completa.

**tarea 1 — Selección del modelo de monetización:**
Ayúdame a elegir el modelo correcto para mi situación:

1. **Premium vs. Free-to-Play vs. Premium + expansiones:**
   - Análisis de cada modelo para un RPG de aventuras con 15-20 horas
   - Datos de conversión y LTV típicos por modelo en el género aventura/RPG
   - Riesgo y recompensa de cada modelo para un estudio sin historial

2. **Precio de lanzamiento en Steam:**
   - Cómo establecer el precio correcto (no demasiado bajo que dañe la percepción, no tan alto que limite las ventas)
   - Benchmarks de precio para juegos del género con duración similar
   - Estrategia de descuentos: cuándo y cuánto descontar en las sales de Steam
   - Impacto de las reviews en la elasticidad del precio

3. **Estrategia de lanzamiento regional:**
   - Precios regionales de Steam: cómo configurarlos para mercados emergentes
   - Qué mercados latinoamericanos tienen mayor potencial para mi género
   - Localización vs. precio bajo: qué impacta más en las ventas en LATAM

**tarea 2 — DLC y contenido post-lanzamiento:**
Cómo alargar el ciclo de vida del juego:

1. **Planificación de DLC:**
   - Qué tipo de DLC tiene mejor relación precio/valor percibido para el jugador
   - Cuánto tiempo después del lanzamiento publicar el primer DLC
   - Cómo anunciar DLC sin generar sensación de que el juego base está incompleto
   - Precio de DLC: porcentaje del precio base según contenido

2. **Actualizaciones gratuitas como herramienta de marketing:**
   - Cómo usar las actualizaciones gratuitas para volver al Top Sellers de Steam
   - Qué contenido gratuito vs. qué contenido de pago
   - Comunicación de actualizaciones: devlogs, notas de parche, anuncios en Steam

3. **Bundle y colaboraciones:**
   - Cuándo entrar en bundles (Humble Bundle, etc.) y cuándo no
   - Cómo evaluar si un bundle me ayuda o canibaliza mis ventas
   - Colaboraciones con otros estudios indie para cross-promotion

**tarea 3 — Estrategia para consolas:**
Cómo abordar Nintendo Switch, PlayStation y Xbox:

- Proceso de aprobación para cada plataforma: requisitos, tiempo, costes
- Porcentajes de royalties por plataforma y cómo afectan al pricing
- Qué plataforma priorizar para el género aventura/RPG (datos de ventas por género por plataforma)
- Parity clause: cómo gestionar el precio entre PC y consolas
- Gamepass e indie deals de plataformas: ventajas e inconvenientes

**tarea 4 — Versión móvil: ¿sí o no?**
Evaluación del mercado móvil para un RPG de aventuras:
- ¿Este tipo de juego funciona en móvil? (análisis del género en App Store/Google Play)
- Adaptaciones necesarias: controles táctiles, sesiones cortas, pantalla pequeña
- Modelo de monetización para móvil (premium vs. F2P) y por qué son tan diferentes
- Coste de desarrollo vs. potencial de ingresos en móvil para un juego de este tipo
- Alternativa: Netflix Games, Apple Arcade — plataformas sin F2P

objetivo: Maximizar los ingresos durante los primeros 2 años del juego, con una estrategia de monetización que sea sostenible, ética con los jugadores y compatible con la reputación que queremos construir como estudio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar la estrategia de monetización completa para un videojuego indie en Steam, consolas y móvil',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Diseño de narrativas y worldbuilding para videojuegos con IA',
                'description'      => 'Crea mundos, personajes y narrativas interactivas para videojuegos usando IA como co-escritor, desde la biblia del mundo hasta los diálogos ramificados y el diseño de NPCs con personalidades coherentes.',
                'prompt_content'   => <<<'EOT'
Eres un experto en narrative design para videojuegos con experiencia en worldbuilding, escritura de diálogos interactivos, diseño de personajes y narrative systems. Has trabajado en juegos de varios géneros (RPGs, aventuras gráficas, juegos de mundo abierto) y sabes cómo crear narrativas que sirvan tanto al entretenimiento como a los objetivos de diseño del juego.

**Mi contexto:**
Soy el narrative designer de un RPG de fantasía oscura que estamos desarrollando en un equipo indie de 8 personas. El juego transcurre en un mundo de fantasía celta post-apocalíptica donde los dioses han abandonado el mundo. Necesito desarrollar la narrativa completa del juego, desde el worldbuilding hasta los diálogos individuales.

**instrucción 1 — Worldbuilding con IA:**
Desarrolla el mundo del juego de forma sistemática:

1. **La biblia del mundo (World Bible):**
   - Historia del mundo: qué ocurrió antes de los eventos del juego (3 eras históricas relevantes)
   - Geografía y regiones: 5 zonas del juego con personalidad propia, historia y conflicto actual
   - Facciones y poderes: 4-6 facciones con objetivos, métodos y relación entre ellas
   - Cosmología y magia: cómo funciona la magia/los dioses en este mundo, reglas claras y consistentes
   - Culturas y sociedades: cómo vive la gente ordinaria en un mundo donde los dioses los abandonaron

2. **Consistencia del mundo:**
   - Cómo usar IA para verificar consistencia interna (cuando escribo un detalle nuevo, ¿contradice algo establecido?)
   - Sistema de "lore cards" para documentar cada elemento del mundo
   - Cómo decidir qué mostrar vs. qué insinuar (el iceberg: el jugador ve el 20%, el equipo conoce el 100%)

**instrucción 2 — Diseño de personajes:**
Los personajes son la narrativa:

1. **Personaje principal (protagonista):**
   - Diseño de un protagonista adaptable (jugador hace elecciones) vs. personaje establecido
   - Arco del personaje: estado inicial, catalizador, viaje, transformación
   - Cómo hacer que el jugador se identifique con el protagonista sin quitarle agencia

2. **Compañeros y NPCs principales:**
   - Crea 3 compañeros de partido con: trasfondo, motivación, arco narrativo, relación con el protagonista
   - Sistema de relaciones: cómo evolucionan según las decisiones del jugador
   - Diálogos en viaje: conversaciones espontáneas que revelan carácter sin ser expositivos

3. **Antagonistas:**
   - Diseño de antagonistas que sean comprensibles, no simplemente malvados
   - Reveal structure: cómo distribuir la revelación de la verdad sobre el antagonista
   - Final alternativo: cómo diseñar un final donde el antagonista "gana" de forma narrativamente satisfactoria

**instrucción 3 — Sistema de diálogos interactivos:**
La escritura interactiva es diferente a la escritura lineal:

1. **Árboles de diálogo:**
   - Estructura de un diálogo con 3-4 opciones que realmente importan
   - Tipos de opciones: información, actitud, acción — cuándo usar cada una
   - Cómo evitar las opciones "obvia buena/obvia mala" sin información
   - Consecuencias diferidas: decisiones que tienen impacto 10 horas después del juego

2. **Escribir para el contexto de juego:**
   - Brevedad: los jugadores leen menos de lo que creemos
   - Voz de los personajes: cómo diferencia el vocabulario y el ritmo de cada NPC
   - Localización: escribir diálogos que se puedan traducir bien sin perder el tono

3. **IA para asistencia en escritura:**
   - Cómo usar IA para generar variaciones de diálogo manteniendo la voz del personaje
   - Generación de bark lines (frases cortas de NPCs en el mundo)
   - Revisión de consistencia de voz entre múltiples escritores

**instrucción 4 — Narrative systems:**
La narrativa que emerge del gameplay:

- **Environmental storytelling:** cómo contar historia a través del entorno sin texto
- **Lore collectibles:** diarios, cartas, objetos con historia — cómo diseñarlos para que la gente los lea
- **Decisiones con consecuencias:** cómo diseñar elecciones que se sientan importantes y lo sean
- **Final múltiple:** cómo crear finales alternativos satisfactorios sin duplicar demasiado el contenido

objetivo: Tener la biblia del mundo completa, los 5 personajes principales diseñados con sus arcos narrativos y el primer capítulo del juego escrito al completo, listo para implementación, en los próximos 3 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Desarrollar el worldbuilding, personajes y sistema de diálogos interactivos para un RPG de fantasía usando IA como co-escritor',
                'vote_score'       => 53,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos creativos en estudios de videojuegos con IA',
                'description'      => 'Lidera equipos multidisciplinares de desarrollo de videojuegos usando IA para optimizar la comunicación, gestionar conflictos entre disciplinas, mantener la visión creativa y prevenir el crunch.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión de equipos creativos con experiencia específica en estudios de videojuegos. Conoces los desafíos únicos de liderar equipos multidisciplinares donde conviven artistas, programadores, diseñadores y productores, y sabes cómo mantener alta la moral creativa sin sacrificar la ejecución y los plazos.

**Mi situación:**
Soy el Studio Director de un estudio indie que ha crecido de 4 a 12 personas en 18 meses. Tenemos un equipo diverso (artistas, devs, narrative designer, QA, marketing) trabajando en remoto desde 3 países. Tenemos problemas de comunicación entre disciplinas, estamos sufriendo los primeros síntomas de crunch y la moral ha bajado en los últimos meses.

**instrucción 1 — Diagnóstico del equipo:**
Ayúdame a entender la situación real:

1. **Survey de salud del equipo:**
   - Diseña una encuesta anónima de 15 preguntas para medir: carga de trabajo, claridad de rol, comunicación interdisciplinar, satisfacción con la dirección creativa, signos de burnout
   - Cómo interpretar los resultados y qué umbrales indican una situación urgente
   - Cómo crear un espacio seguro para que el equipo dé feedback honesto

2. **Síntomas del crunch y burnout:**
   - Señales tempranas de que alguien está al límite
   - Diferencia entre crunch puntual aceptado vs. crunch crónico tóxico
   - Cómo hablar individualmente con personas en riesgo de burnout

3. **Diagnóstico de la comunicación interdisciplinar:**
   - Por qué artistas y programadores tienen dificultades para comunicarse (lógicas diferentes)
   - Cómo identificar los puntos de fricción específicos en mi equipo
   - El coste oculto de la mala comunicación en un proyecto de juego

**instrucción 2 — Estructuras de trabajo para estudios pequeños:**
Cómo organizar el trabajo de forma sostenible:

1. **Metodología de desarrollo para juegos indie:**
   - Scrum vs. Kanban vs. híbrido para equipos de 12 personas en desarrollo de juego
   - Sprint length óptimo para desarrollo de juego (2 semanas vs. 4 semanas)
   - Cómo adaptar los dailies para equipos creativos sin convertirlos en microgestión
   - Definition of Done para tareas creativas (arte, diseño, audio) que no son binarias

2. **Ritmos de comunicación:**
   - Reuniones esenciales: qué reuniones son imprescindibles y cuáles eliminar
   - Documentación asíncrona: cómo reducir las reuniones con documentación clara
   - Herramientas de comunicación para equipos de juego remotos

3. **Gestión de la deuda creativa:**
   - Cómo gestionar el rediseño y la iteración sin que el juego nunca termine
   - Cómo decir no a las buenas ideas que llegan demasiado tarde
   - Feature freeze: cuándo y cómo implementarlo

**instrucción 3 — Prevención del crunch:**
La solución al problema más grave del sector:

1. **Estimación realista:**
   - Por qué los equipos creativos subestiman sistemáticamente el tiempo (planning fallacy)
   - Técnicas de estimación más fiables: evidence-based scheduling, buffer planning
   - Cómo negociar plazos con editores/inversores cuando el equipo necesita más tiempo

2. **Scope management:**
   - Cómo cortar features sin que el equipo sienta que su trabajo fue en vano
   - La "kill your darlings" mentalidad en el desarrollo de juego
   - Cómo involucrar al equipo en las decisiones de scope para que se sientan dueños de la solución

3. **Cultura de trabajo sostenible:**
   - Políticas concretas anti-crunch: horas máximas, días de recuperación, respeto de vacaciones
   - Cómo manejar la presión de un deadline sin imponer crunch
   - Cómo hablar del crunch con un equipo que cree que es inevitable

**instrucción 4 — Liderazgo creativo:**
Cómo mantener la visión mientras das autonomía:
- Balancear dirección creativa y autonomía del equipo
- Cómo dar feedback creativo constructivo a artistas y diseñadores
- Gestión de desacuerdos creativos profundos entre miembros del equipo
- Cómo celebrar los logros del equipo de forma que realmente importe

objetivo: Transformar la cultura del estudio en los próximos 90 días: eliminar el crunch crónico, mejorar la comunicación interdisciplinar y subir la moral del equipo sin comprometer la calidad ni los plazos del proyecto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar equipos creativos multidisciplinares en estudios de videojuegos y prevenir el crunch de forma sostenible',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Presupuesto y financiación de proyectos de videojuegos con IA',
                'description'      => 'Construye presupuestos realistas para proyectos de videojuego, identifica fuentes de financiación (subvenciones, publishers, crowdfunding, inversión), y gestiona el flujo de caja de un estudio indie en crecimiento.',
                'prompt_content'   => <<<'EOT'
Eres un experto en finanzas para la industria del videojuego con experiencia asesorando a estudios indie y AA. Conoces las particularidades financieras del desarrollo de juego: los costes variables, la dificultad de estimar tiempos en proyectos creativos, las diferentes fuentes de financiación disponibles y cómo gestionar la caja durante el largo período entre el inicio del desarrollo y los ingresos por ventas.

**Mi contexto:**
Soy el CEO de un estudio indie de 8 personas que está terminando su primer juego. Tenemos fondos para 6 meses más de operaciones. El juego tardará aproximadamente 8 meses más en lanzarse. Necesito encontrar financiación para cerrar ese gap y además planificar las finanzas del estudio a largo plazo.

**instrucción 1 — Presupuesto de desarrollo:**
Cómo construir un presupuesto realista para un juego:

1. **Categorías de coste en desarrollo de videojuegos:**
   - Equipo: salarios, contractor fees, beneficios sociales
   - Software y licencias: Unity/Unreal royalties, herramientas de arte, middleware (física, audio, etc.)
   - Hardware: ordenadores, consolas de desarrollo (devkits), periféricos de QA
   - Marketing y PR: presupuesto de lanzamiento, costes de trailers, presencia en ferias
   - Certificación de consolas: coste y tiempo de certificación por plataforma
   - Legal: registro de marca, contratos, asesoría

2. **Errores comunes de estimación en presupuestos de juego:**
   - El problema del scope creep y cómo afecta al presupuesto
   - Por qué el 30% de buffer no es suficiente en proyectos de juego
   - Cómo estimar horas para tareas creativas de forma más realista

3. **Template de presupuesto:**
   Proporciona una estructura de hoja de presupuesto mes a mes para un equipo de 8 personas durante 12 meses, con las categorías más importantes.

**instrucción 2 — Fuentes de financiación para estudios indie:**
Todas las opciones disponibles:

1. **Subvenciones y ayudas públicas:**
   - ICAA (España): convocatorias para videojuegos, requisitos, importes
   - CDTI y ayudas a la I+D+i: cómo aplican al desarrollo de videojuego
   - Fondos europeos: Creative Europe, MEDIA para videojuegos
   - Subvenciones regionales: comunidades autónomas con mayor apoyo al sector (Cataluña, Madrid, País Vasco, Galicia)
   - Latinoamérica: fondos sectoriales por país (Fonprocine México, Proimagenes Colombia, etc.)

2. **Publishers y acuerdos de distribución:**
   - Tipos de acuerdo con publisher: advance vs. minimum guarantee vs. revenue share
   - Qué cede un estudio a cambio de financiación de publisher (derechos de IP, calendario, decisiones creativas)
   - Cómo negociar un acuerdo de publisher favorable para el estudio
   - Cuándo tiene más sentido un publisher indie vs. un publisher grande

3. **Crowdfunding:**
   - Kickstarter vs. Indiegogo para videojuegos: estadísticas de éxito por genre
   - Cómo preparar una campaña exitosa: objetivo mínimo, recompensas, vídeo de campaña
   - El riesgo de prometer demasiado y cómo gestionarlo
   - Casos de éxito y fracaso en crowdfunding de videojuegos

4. **Inversión privada:**
   - Business angels especializados en gaming
   - VCs gaming-focused: qué buscan, qué métricas necesitas tener
   - Publisher-investors: hybrid deals cada vez más comunes

**instrucción 3 — Gestión de caja del estudio:**
Sobrevivir financieramente entre proyectos:

1. **Flujo de caja en un estudio de desarrollo:**
   - Cómo modelar el flujo de caja cuando los ingresos son puntuales (ventas de juego) y los costes son mensuales (salarios)
   - Cuánta caja de reserva mantener como colchón de seguridad
   - Cómo gestionar los royalty payments de Steam (mensual pero con 45 días de retraso)

2. **Revenue streams alternativos:**
   - Work-for-hire: hacer juegos para terceros para financiar proyectos propios
   - DLC y actualizaciones post-lanzamiento como fuente de ingresos continuos
   - Licenciamiento de tecnología o assets a otros estudios
   - Servicios de consultoría o QA como ingreso adicional

objetivo: Asegurar la financiación de los próximos 8 meses de desarrollo y establecer una base financiera sostenible para el estudio que permita operar entre proyectos sin necesidad de crunch ni despidos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Gestionar las finanzas de un estudio indie de videojuegos y acceder a las fuentes de financiación disponibles en España y Latinoamérica',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Derechos de autor y licencias en videojuegos con IA',
                'description'      => 'Navega el complejo marco legal de la propiedad intelectual en videojuegos: música licenciada, assets de terceros, engine royalties, protección de tu IP original y gestión de DMCA en plataformas de streaming.',
                'prompt_content'   => <<<'EOT'
Eres un experto en propiedad intelectual con especialización en la industria del entretenimiento digital y videojuegos. Conoces en profundidad el derecho de autor aplicado a software, música, arte digital y bases de datos, así como los marcos legales específicos de plataformas como Steam, Twitch, YouTube y las tiendas de consolas.

**Mi contexto:**
Soy el director de un estudio indie que está a punto de lanzar su primer juego comercial. A lo largo del desarrollo hemos acumulado preguntas legales sin resolver sobre los derechos de todos los elementos del juego. Antes del lanzamiento necesito tenerlo todo en orden.

**instrucción 1 — Protección de la IP del estudio:**
Qué y cómo proteger lo que hemos creado:

1. **Derechos de autor sobre el videojuego:**
   - ¿A quién pertenece el copyright del código? (empleados vs. contractors vs. cofundadores)
   - Cómo documentar la titularidad de los derechos de cada elemento del juego
   - Assignment agreements: por qué son imprescindibles y qué deben incluir

2. **Marca registrada:**
   - Cuándo y cómo registrar el nombre del juego y del estudio como marca
   - Búsqueda de disponibilidad de marca: cómo hacerla antes del lanzamiento
   - Clases de la EUIPO/OMPI relevantes para videojuegos y software
   - Protección del nombre en países donde lanzaremos

3. **Secreto industrial:**
   - Qué proteger bajo NDA antes de revelar el juego al público
   - Acuerdos de confidencialidad con publishers, inversores y socios

**instrucción 2 — Música y audio:**
El área más problemática en la mayoría de juegos:

1. **Opciones para la música del juego:**
   - Composer work-for-hire: qué debe incluir el contrato (asignación de derechos, nombre en créditos, sync licensing)
   - Licencias de música pre-existente: cuánto cuesta y qué derechos obtiene
   - Música libre de royalties: diferencias entre Creative Commons (BY, SA, NC, ND) y sus implicaciones para juego comercial
   - Música generada con IA: estado legal actual y riesgos

2. **Streaming y Twitch:**
   - Por qué la música licenciada para juego no incluye automáticamente el derecho de streaming
   - Cómo afecta al DMCA cuando streamers juegan tu juego en Twitch/YouTube
   - Whitelist de música para streaming: cómo implementarla y por qué te beneficia como estudio

**instrucción 3 — Assets de terceros:**
Todo lo que no hemos creado nosotros:

1. **Game engines y middleware:**
   - Unity: modelo de royalties actual y cómo te afecta según nivel de ingresos
   - Unreal Engine: 5% royalties sobre gross revenue después de 1M$ — implicaciones
   - Phaser, Godot (MIT): qué permite la licencia y qué necesitas hacer
   - Middleware de física, audio (FMOD, Wwise): licencias para uso comercial

2. **Assets de la Asset Store y marketplaces:**
   - Unity Asset Store / Unreal Marketplace: qué permite la licencia "Standard" vs. "Extended"
   - Itch.io assets: verificar licencia de cada pack antes de usar
   - Fonts: qué fuentes puedes usar en tu juego (OFL, commercial licenses) y cómo

3. **IA generativa en producción:**
   - Arte generado con Midjourney/DALL-E: términos de uso actuales para uso comercial
   - Música generada con IA: derechos actuales (en evolución)
   - Código generado con GitHub Copilot: situación legal de la licencia

**instrucción 4 — Contratos con plataformas:**
Antes de firmar con Steam, PlayStation, Nintendo, Xbox:

- Términos clave del acuerdo con Steam que todo dev debe entender
- Cláusula de paridad de precio: qué implica para tus estrategias de descuento
- Proceso de certificación de consolas: qué aceptas cuando firmas el acuerdo de desarrollador
- Términos del Apple Developer Program / Google Play Console para la versión móvil

**instrucción 5 — Reclamaciones y DMCA:**
Cómo protegerte y cómo actuar cuando alguien infringe tu IP:
- Proceso de DMCA takedown para contenido que roba assets de tu juego
- Cómo responder a una reclamación DMCA falsa
- Fair use en videojuegos: cuándo el parody/commentary protege a los creadores de contenido

objetivo: Lanzar el juego con todos los derechos correctamente documentados, proteger la IP del estudio y evitar cualquier sorpresa legal post-lanzamiento que comprometa los ingresos o la reputación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar la propiedad intelectual, licencias de assets y derechos de autor en el lanzamiento de un videojuego comercial',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de comunidad y soporte para jugadores con IA',
                'description'      => 'Construye y gestiona una comunidad de jugadores sana y comprometida alrededor de tu videojuego, usando IA para moderar contenido, responder FAQs, gestionar crisis de reputación y convertir a los fans en embajadores.',
                'prompt_content'   => <<<'EOT'
Eres un experto en community management y player support para videojuegos con experiencia en comunidades de Discord, Reddit, Steam, redes sociales y sistemas de soporte de juego. Conoces las dinámicas únicas de las comunidades de gaming: su pasión, su toxicidad potencial, su influencia en las ventas y cómo convertir una comunidad comprometida en el mejor canal de marketing.

**Mi situación:**
Acabo de lanzar mi primer juego indie en Steam hace 3 semanas. Tengo 2.500 jugadores activos, una comunidad de Discord con 800 miembros y estoy recibiendo muchas reviews en Steam (70% positivas, 30% negativas por un bug específico que ya he corregido). Todo esto lo gestiono yo solo además de seguir desarrollando el juego. Necesito sistemas para hacer esto de forma sostenible.

**tarea 1 — Estructura del soporte de jugadores:**
Cómo gestionar el volumen de soporte:

1. **Sistema de tickets:**
   - Qué herramienta de soporte usar para un juego indie (Zendesk, Freshdesk, Discord foros, Steam Discussion)
   - Cómo categorizar los bugs reports, peticiones de features y soporte general
   - Tiempo de respuesta objetivo por tipo de consulta
   - Plantillas de respuesta para los 10 problemas más frecuentes

2. **Base de conocimiento del jugador:**
   - Cómo crear una FAQ que resuelva el 60-70% de las preguntas sin contacto directo
   - Formato de guías para jugadores: wiki, FAQ en Steam, guías en Discord
   - Cómo mantener la documentación actualizada con cada patch

3. **Escalado del soporte:**
   - Cuándo contratar un community manager / support agent dedicado
   - Perfil del primer community manager para un juego indie (qué buscar)
   - Cómo involucrar a la comunidad en el soporte (moderadores voluntarios, embajadores)

**tarea 2 — Gestión de la comunidad de Discord:**
Cómo construir una comunidad sana:

1. **Estructura del servidor:**
   - Canales esenciales para un servidor de juego indie (anuncios, feedback, bugs, off-topic, idiomas)
   - Roles y permisos: cómo estructurar roles de veteranos, moderadores, embajadores
   - Bots esenciales: moderación automática, welcome messages, verificación anti-bot

2. **Moderación:**
   - Reglas de la comunidad: qué prohibir y cómo comunicarlo
   - Proceso de moderación: cómo manejar conflictos, toxicidad y trolls
   - Cómo manejar críticas legítimas vs. comentarios destructivos
   - Burnout del moderador: cómo prevenirlo en voluntarios

3. **Engagement de la comunidad:**
   - Actividades que mantienen viva la comunidad entre updates (fan art contests, tournaments, Q&A con devs)
   - Cómo involucrar a los jugadores en el desarrollo (feedback sessions, beta testing)
   - Cómo hacer que los jugadores se sientan escuchados incluso cuando no puedes implementar todo

**tarea 3 — Gestión de crisis de reputación:**
Cómo manejar situaciones difíciles:

1. **El bug viral:**
   - Alguien publicó un vídeo viral mostrando un bug grave. ¿Cómo reacciono en las primeras 24 horas?
   - Comunicación oficial: qué decir, en qué tono, qué no decir nunca
   - Proceso de hotfix urgente sin romper más cosas

2. **Review bombing:**
   - Qué provoca un review bombing y cómo prevenirlo
   - Cómo responder al review bombing en Steam (oficial y en la comunidad)
   - Cuándo pedir a Steam que marque el período como "fuera de lo normal"

3. **Mala decisión de diseño/negocio:**
   - Un DLC se percibe como contenido que debería ser gratis. ¿Cómo gestionar la reacción?
   - La diferencia entre escuchar a la comunidad y ser rehén de la comunidad
   - Cómo mantener tu visión de diseño bajo presión de la comunidad

**tarea 4 — Convertir jugadores en embajadores:**
El mejor marketing es un fan apasionado:

- Programa de embajadores: cómo identificarlos, qué ofrecerles, cómo gestionarlos
- Fan content: cómo gestionar el fan art, mods, y contenido creado por usuarios de forma que beneficie a ambas partes
- Streamers de la comunidad: cómo apoyar a streamers pequeños que aman tu juego
- Testimonios y casos de éxito: cómo usar las historias de los jugadores como marketing

objetivo: Crear un sistema sostenible de gestión de comunidad que me permita mantener una comunidad sana y comprometida dedicando no más de 2 horas diarias, con procesos claros para escalar cuando el juego crezca.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir y gestionar una comunidad de jugadores sana usando sistemas escalables y IA para el soporte post-lanzamiento',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Desarrollo independiente de videojuegos como freelance con IA',
                'description'      => 'Lanza tu carrera como desarrollador freelance de videojuegos: desde encontrar clientes y negociar contratos hasta gestionar proyectos en solitario y construir un portfolio que abra puertas en la industria del gaming.',
                'prompt_content'   => <<<'EOT'
Eres un experto en carrera profesional en la industria del videojuego y en el modelo de trabajo freelance para desarrolladores de juegos. Conoces el mercado de trabajo freelance en gaming (Unity, Unreal, game design, pixel art, narrative design), cómo conseguir contratos bien pagados y cómo construir una carrera sostenible fuera de los estudios tradicionales.

**Mi situación:**
Soy desarrollador de videojuegos con 4 años de experiencia en Unity trabajando en un estudio. Quiero dejar mi trabajo y dedicarme al freelance en la industria del juego. No tengo experiencia como freelance pero sí un buen portfolio técnico y conocimiento del sector.

**instrucción 1 — El mercado freelance de videojuegos:**
Entiende el mercado antes de entrar:

1. **Tipos de trabajo freelance en gaming:**
   - Desarrollo técnico: gameplay programming, tools programming, engine customization
   - Arte: concept art, pixel art, modelado 3D, animación, VFX
   - Diseño: game design, level design, narrative design, UX design para juego
   - Audio: composición de música original, sound design, implementation (FMOD/Wwise)
   - QA y testing: QA freelance para estudios indie que no tienen equipo interno

2. **Demanda del mercado:**
   - Qué especialidades tienen mayor demanda y menor oferta (y por tanto mejores tarifas)
   - Tendencias del mercado: Unity vs. Unreal — en qué plataformas buscan más trabajos
   - Estacionalidad: cuándo hay más trabajo en el sector (pre-lanzamientos, jam seasons)

3. **Plataformas para encontrar trabajo:**
   - GameDev.net Jobs Board, Polycount, LinkedIn para puestos más senior
   - Upwork y Fiverr: cuándo tiene sentido y cuándo infravalora tu trabajo
   - Comunidades de Discord de gamedev: cómo usar los canales de hiring sin ser spam
   - Directo con estudios: cómo aproximarte a estudios indie que buscan contractors

**instrucción 2 — Portfolio que consigue contratos:**
El portfolio de un freelancer de juegos es diferente:

1. **Qué incluir en el portfolio:**
   - Proyectos terminados vs. demos técnicas: qué impresiona más a los clientes
   - Cómo documentar tu contribución cuando has trabajado en un proyecto de equipo
   - Código de ejemplo: repositorios de GitHub que muestren tu forma de trabajar
   - La importancia de los juegos jugables vs. los screenshots

2. **Especialización del portfolio:**
   - Portfolio generalista vs. portfolio especializado: cuándo usar cada estrategia
   - Cómo crear proyectos de portfolio específicamente para el nicho al que me dirijo
   - Case studies: cómo explicar un proyecto con problema → proceso → solución → resultado

3. **Dónde alojar el portfolio:**
   - Web propia vs. Itch.io vs. ArtStation vs. GitHub Pages
   - Cómo hacer que sea fácil de compartir y de evaluar por un cliente potencial

**instrucción 3 — Pricing y contratos:**
Cómo fijar precios y protegerte legalmente:

1. **Tarifas del mercado:**
   - Rangos de tarifa por hora para diferentes especialidades en gaming (datos actualizados 2024)
   - Cuándo cobrar por hora vs. por proyecto vs. retainer mensual
   - Cómo subir las tarifas con la experiencia sin perder clientes actuales

2. **Estructura del contrato freelance:**
   - Cláusulas esenciales: scope, deliverables, revisiones, IP assignment, confidencialidad
   - Milestone payments vs. pago al final: cuándo insistir en milestones
   - Cómo protegerse de scope creep en contratos de juego
   - Depósito inicial: cuánto pedir y cómo justificarlo

3. **Negociación:**
   - Cómo negociar el precio sin perder el proyecto
   - Cuándo rechazar un proyecto (señales de alerta de un cliente problemático)
   - Cómo manejar clientes que piden "primero hazlo, después te pago"

**instrucción 4 — Usar IA para ser más productivo:**
Cómo multiplicar tu capacidad de producción:

- Generación de código boilerplate con IA (Unity, Unreal, Godot)
- Documentación técnica generada con IA
- Arte de placeholder y concept art con IA para acelerar la fase de prototipado
- Comunicación con clientes: cómo usar IA para escribir propuestas y reportes de avance
- Estimación de proyectos: cómo usar IA para analizar el scope y estimar horas

objetivo: Reemplazar mi salario actual de 35.000€/año con ingresos freelance en los primeros 12 meses, con un plan claro de primeros 90 días que incluya cómo conseguir los primeros contratos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 45,
                'use_case'         => 'Lanzar una carrera freelance en la industria del videojuego con estrategia de portfolio, pricing y captación de clientes',
                'vote_score'       => 50,
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
