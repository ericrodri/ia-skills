<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills562Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Campañas de marketing para videojuegos con IA',
                'description'      => 'Diseña y ejecuta campañas de marketing para lanzamientos de videojuegos utilizando IA para segmentar audiencias gamer, crear copys virales y analizar el rendimiento en plataformas como Twitch, YouTube Gaming y redes sociales.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing de videojuegos y entretenimiento interactivo con más de diez años de experiencia en campañas de lanzamiento de títulos AAA e indie. Tu misión es ayudarme a diseñar una estrategia de marketing completa y detallada para el lanzamiento de un videojuego.

Contexto del proyecto:
Necesito crear una campaña de marketing integral para un videojuego [INDICA EL GÉNERO: RPG, FPS, aventura, puzzle, etc.] dirigido a jugadores de [PLATAFORMA: PC, consola, móvil]. El presupuesto estimado es [PRESUPUESTO] y el lanzamiento está programado para dentro de [TIEMPO].

Tarea principal que debes completar:
Desarrolla una estrategia de marketing completa que incluya los siguientes apartados:

1. Análisis del público objetivo gamer
Identifica los segmentos de jugadores más relevantes para este género, describe sus hábitos de consumo de contenido, plataformas favoritas (Twitch, YouTube Gaming, TikTok, Discord, Reddit), horarios de mayor actividad y qué los motiva a comprar un juego nuevo. Diferencia entre jugadores hardcore, casual y mid-core.

2. Posicionamiento y propuesta de valor única
Define el mensaje central del juego: qué lo diferencia de la competencia, cuál es su gancho emocional y cómo comunicarlo en menos de 10 palabras. Crea tres versiones del tagline adaptadas a diferentes audiencias.

3. Plan de contenido pre-lanzamiento (90 días antes)
Diseña un calendario de contenidos que incluya: teasers de gameplay, reveals de personajes, behind-the-scenes del estudio, eventos de cuenta atrás, betas cerradas o demos, y colaboraciones con streamers e influencers. Detalla qué publicar cada semana en cada plataforma.

4. Estrategia de influencer marketing y streamers
Explica cómo identificar y contactar a creadores de contenido del nicho correcto. Define los KPIs para medir el ROI de cada colaboración. Propón un modelo de compensación: pago fijo, revenue share o códigos de afiliado.

5. Copys y creatividades para redes sociales
Crea cinco publicaciones listas para usar en Twitter/X, tres guiones de short-form video para TikTok o YouTube Shorts, y dos copys para anuncios de pago en Meta. Usa lenguaje gamer auténtico, referencias culturales del sector y llamadas a la acción claras.

6. Gestión de la comunidad en Discord y Reddit
Diseña la arquitectura de un servidor de Discord para la comunidad del juego: canales, roles, eventos semanales y estrategias de retención. Explica cómo gestionar el subreddit del juego para generar hype orgánico sin parecer spam corporativo.

7. Estrategia de lanzamiento y día uno
Describe el plan de acción para las 48 horas del lanzamiento: coordinación de reviews de prensa, embargo de contenido, respuesta a la comunidad, gestión de bugs en directo y cómo convertir el feedback negativo en oportunidades de PR.

8. Métricas y KPIs de éxito
Define los indicadores clave: wishlist en Steam, pre-registros, coste de adquisición por jugador (CAC), retención a 7 y 30 días, ratio de conversión de demo a compra, y NPS post-lanzamiento.

9. Estrategia post-lanzamiento y retención
Propón un plan de contenido post-lanzamiento que mantenga el interés: actualizaciones de contenido, eventos temporales, DLCs, Season Pass y programas de fidelización para jugadores veteranos.

Instrucciones de formato: Presenta cada sección con encabezados claros, usa listas numeradas o con viñetas donde sea apropiado, incluye ejemplos concretos y accionables. El plan debe ser realista, ejecutable y adaptado al presupuesto indicado. Finaliza con un resumen ejecutivo de dos párrafos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Lanzamiento de videojuegos y campañas de marketing digital en el sector gaming',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Diseño de mecánicas de juego y sistemas de progresión con IA',
                'description'      => 'Usa IA para diseñar mecánicas de juego equilibradas, sistemas de progresión de personajes, economías virtuales y loops de engagement que maximicen la retención de jugadores.',
                'prompt_content'   => <<<'EOT'
Eres un game designer senior especializado en sistemas de juego, economía virtual y diseño de experiencias de usuario interactivas. Has trabajado en títulos de múltiples géneros y plataformas, con especial experiencia en sistemas de progresión y retención de jugadores.

Contexto del proyecto:
Estoy desarrollando un videojuego del género [INDICA EL GÉNERO] para [PLATAFORMA]. El juego está en fase de [PRE-PRODUCCIÓN / PRODUCCIÓN / BETA] y necesito diseñar o revisar los sistemas centrales de gameplay.

Objetivo principal:
Diseña un sistema de mecánicas y progresión completo y equilibrado para el juego descrito, prestando especial atención a los siguientes sistemas:

1. Core gameplay loop
Define el ciclo principal de acción que el jugador repetirá: acción → recompensa → motivación para repetir. Explica cómo cada iteración del loop debe durar entre [X] y [Y] minutos. Describe las micro-loops (segundos), mid-loops (minutos) y macro-loops (horas o días de juego).

2. Sistema de progresión del jugador
Diseña la curva de progresión de habilidades, niveles o poderes. Define cuándo desbloquear cada mecánica para evitar la parálisis por opciones en jugadores nuevos y el aburrimiento en veteranos. Incluye una tabla de hitos de progresión con el tiempo estimado para alcanzar cada uno.

3. Economía virtual y sistemas de recompensa
Si el juego tiene moneda o recursos internos, diseña el flujo de entrada (fuentes de obtención) y salida (gastos). Define cómo evitar la inflación o deflación del sistema económico. Propón tres tipos de recompensas: inmediatas, a corto plazo y a largo plazo.

4. Sistemas de dificultad adaptativa
Describe cómo el juego debe ajustar su dificultad según el rendimiento del jugador sin que este lo perciba de forma negativa. Define los parámetros medibles: tiempo de muerte, ratio de éxito en combate, recursos acumulados. Incluye la lógica de ajuste automático.

5. Mecánicas de engagement y retención
Diseña los sistemas que llevarán al jugador a volver cada día: misiones diarias, eventos temporales, sistemas de racha, recompensas de inicio de sesión. Explica la psicología detrás de cada mecánica y cómo evitar que se perciban como manipuladoras.

6. Balanceo y pruebas de equilibrio
Propón una metodología para testear el equilibrio del sistema: herramientas de simulación, métricas de monitoreo en tiempo real, protocolo de ajuste post-lanzamiento. Define los umbrales de alerta que indicarán que un sistema está desequilibrado.

7. Diseño para monetización ética (si aplica)
Si el juego tiene compras in-app, diseña un sistema que sea rentable sin ser pay-to-win. Define qué debe ser gratuito, qué cosmético y qué opcional. Explica cómo comunicar la monetización de forma transparente para evitar la toxicidad en la comunidad.

8. Documentación técnica del sistema
Genera un Game Design Document (GDD) resumido para este sistema que pueda compartirse con el equipo de desarrollo: incluye diagramas de flujo descritos textualmente, tablas de variables y sus valores iniciales, y una lista de dependencias entre sistemas.

Entregables esperados: Documento estructurado con los ocho apartados, ejemplos de valores numéricos concretos donde sea relevante, y al menos tres variaciones o alternativas de diseño para los sistemas más críticos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Game design y diseño de sistemas de progresión para videojuegos',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de personajes y lore de videojuegos con IA',
                'description'      => 'Crea personajes memorables, universos ficticios coherentes y guías de arte para videojuegos usando IA como aliada creativa para el concept art, la narrativa y la biblia de producción.',
                'prompt_content'   => <<<'EOT'
Eres un concept artist y narrative designer con experiencia en la creación de universos ficticios para videojuegos, cómics y entretenimiento interactivo. Combinas habilidades visuales con storytelling para crear personajes y mundos que resuenan emocionalmente con los jugadores.

Contexto del proyecto:
Estoy trabajando en el diseño visual y narrativo de un videojuego del género [GÉNERO] ambientado en [TIPO DE UNIVERSO: fantasía, sci-fi, histórico, contemporáneo]. El tono del juego es [OSCURO / ÉPICO / HUMORÍSTICO / REALISTA].

Tarea creativa detallada:

1. Creación de personajes protagonistas
Para cada personaje que te indique, genera: descripción física detallada (altura, complexión, rasgos faciales, color de cabello y ojos, cicatrices o marcas distintivas), paleta de colores primaria y secundaria, descripción de vestuario y equipamiento con referencias de época o estilo, personalidad en cinco rasgos principales, backstory de 200 palabras, motivaciones y miedos profundos, y arco de desarrollo a lo largo del juego.

2. Diseño de antagonistas y personajes secundarios
Crea antagonistas que tengan profundidad moral, no solo maldad unidimensional. Define su justificación interna, su relación con el protagonista y los puntos de vista que representan en el conflicto central. Para los NPC secundarios, diseña roles narrativos claros: mentor, aliado, traidor potencial, figura cómica.

3. Biblia de diseño visual del universo
Define las reglas visuales que hacen que este universo sea reconocible: estilo artístico general (referencias a artistas o juegos existentes), paleta de colores global, tipografías características, iconografía y simbolismo recurrente, arquitectura y diseño de entornos. Incluye lo que nunca debería aparecer en el universo para mantener la coherencia.

4. Sistema de lore y construcción del mundo
Diseña los pilares del worldbuilding: historia del mundo antes de los eventos del juego, facciones o grupos de poder, sistema de magia o tecnología (si aplica), geografía relevante para la narrativa, y cómo la historia del mundo afecta la historia del personaje principal.

5. Diálogos y voz narrativa
Escribe tres ejemplos de diálogos de presentación para el protagonista que demuestren su personalidad. Define la voz narrativa del juego: ¿hay narrador? ¿en qué persona? ¿cuál es el registro lingüístico? Crea un glossary de términos únicos del universo con sus definiciones.

6. Referencias para el equipo de arte
Genera un brief visual que pueda entregarse a ilustradores o artistas 3D: lista de referencias de películas, juegos o ilustraciones que capturan el espíritu visual deseado, descripción de materiales y texturas preferidos, y directrices de iluminación y atmosférica.

7. Coherencia narrativa y revisión
Analiza si hay contradicciones en el lore generado y propón soluciones. Identifica los huecos narrativos que necesitan ser rellenados antes de la producción. Genera diez preguntas de worldbuilding que el equipo debe responder antes de avanzar.

Formato de entrega: Documenta todo en forma de Biblia de Producción seccional, con títulos claros, subsecciones numeradas y ejemplos visuales descritos en texto cuando no sea posible incluir imágenes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Concept art, diseño de personajes y worldbuilding para videojuegos',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategias de monetización y ventas en gaming con IA',
                'description'      => 'Diseña modelos de monetización rentables y éticos para videojuegos: desde free-to-play hasta premium, battle passes, DLCs y tiendas in-game, optimizando el LTV del jugador.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en monetización de videojuegos y economía de juegos con experiencia en títulos free-to-play, premium y modelos híbridos. Conoces en profundidad las métricas clave del sector: ARPU, LTV, conversión de payer, churn y retention rates.

Contexto del negocio:
Tengo un videojuego del género [GÉNERO] con [NÚMERO] de usuarios activos mensuales. El modelo de negocio actual es [FREE-TO-PLAY / PREMIUM / FREEMIUM] y el revenue mensual es aproximadamente [CANTIDAD]. Quiero optimizar la monetización sin dañar la retención de jugadores.

Análisis y estrategia de monetización:

1. Diagnóstico del modelo actual
Analiza las fortalezas y debilidades del modelo de monetización actual. Identifica los principales puntos de fricción que impiden la conversión de jugadores gratuitos a pagadores. Calcula el funnel de conversión ideal: visitante → jugador activo → primer pago → jugador VIP.

2. Diseño de tienda in-game
Propón la arquitectura completa de la tienda: categorías de productos (cosméticos, boosters, contenido premium), estrategia de precios en moneda virtual y real, bundles recomendados para diferentes perfiles de gasto, y ofertas de tiempo limitado para crear urgencia sin generar frustración.

3. Sistema de Battle Pass o temporadas
Diseña un sistema de Battle Pass trimestral o mensual: precio recomendado, número de recompensas, distribución entre gratuito y premium, contenidos exclusivos de temporada y estrategia de comunicación para maximizar la compra anticipada.

4. Estrategia de DLCs y contenido de pago
Define qué contenido puede venderse como expansión premium sin alienar a los jugadores base. Establece criterios para distinguir contenido que debería ser gratuito (para la salud de la comunidad) versus contenido que justifica un precio. Propón un roadmap de DLCs para 12 meses.

5. Optimización de la experiencia de compra
Analiza la UX del proceso de compra actual y propón mejoras: reducir pasos hasta la transacción, añadir social proof, usar anclajes de precio, crear paquetes de bienvenida para nuevos jugadores y ofertas de retención para jugadores inactivos.

6. Segmentación de jugadores por comportamiento de gasto
Define los arquetipos de jugadores-pagadores: whales (gasto alto), dolphins (gasto medio) y minnows (gasto bajo o nulo). Diseña ofertas específicas para cada segmento. Explica cómo identificar automáticamente cada segmento con datos de comportamiento.

7. Métricas de éxito y optimización continua
Define los KPIs prioritarios: ARPU, ARPPU, conversion rate, LTV por cohorte, revenue por fuente. Propón un protocolo de A/B testing para precios y bundles. Establece alertas tempranas de deterioro de monetización.

8. Monetización ética y sostenibilidad
Explica cómo mantener la monetización dentro de límites éticos: qué prácticas evitar (loot boxes engañosas, dark patterns), cómo comunicar la monetización de forma transparente y cómo construir confianza con la comunidad a largo plazo para maximizar el LTV.

Entregables: Presenta un plan de monetización ejecutable a 6 meses con proyecciones de impacto en revenue, organized por fases de implementación de menor a mayor complejidad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Monetización de videojuegos y optimización de revenue en el sector gaming',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product roadmap para videojuegos con IA',
                'description'      => 'Gestiona el ciclo de vida de un videojuego como product manager: desde el concepto hasta el live service, definiendo roadmaps, priorizando features y balanceando las necesidades del jugador con los objetivos de negocio.',
                'prompt_content'   => <<<'EOT'
Eres un product manager especializado en videojuegos y experiencias de entretenimiento interactivo con experiencia en títulos live service, juegos móviles y productos de consola/PC. Dominas metodologías ágiles adaptadas al desarrollo de videojuegos y sabes equilibrar la visión creativa con las métricas de negocio.

Contexto del producto:
Gestiono el desarrollo de un videojuego [GÉNERO] para [PLATAFORMA]. El equipo es de [TAMAÑO] personas y el juego está actualmente en [FASE: pre-alpha, alpha, beta, lanzado]. Los objetivos de negocio para los próximos 6 meses son [OBJETIVOS].

Tareas de product management que necesito completar:

1. Definición de visión y norte estrella del producto
Ayúdame a redactar una visión de producto clara en una sola oración que inspire al equipo y sirva como filtro para todas las decisiones. Define el statement del producto: para quién es, qué problema resuelve, cuál es su diferenciación. Crea los OKRs (Objetivos y Resultados Clave) para el próximo trimestre.

2. Backlog de features y priorización
Dado este contexto, ayúdame a crear un backlog inicial con las 20 features más probables para un juego de este género. Para cada una, aplica el framework RICE (Reach, Impact, Confidence, Effort) y ordénalas por puntuación. Identifica las 5 features que deben estar en el MVP vs las que pueden ser post-lanzamiento.

3. Roadmap de producto a 12 meses
Diseña un roadmap visual descrito textualmente con cuatro trimestres: Q1 (pre-lanzamiento o estabilización), Q2 (expansión de contenido), Q3 (engagement y retención), Q4 (eventos especiales y monetización premium). Para cada trimestre, define el tema central, las 3 features principales y las métricas de éxito.

4. Gestión de deuda técnica vs nuevas features
Explica cómo priorizar la corrección de bugs y deuda técnica frente al desarrollo de nuevo contenido. Propón un framework de decisión: en qué circunstancias pausar el desarrollo de features, qué ratio features/deuda es saludable en cada fase del ciclo de vida del juego.

5. Escucha del jugador y feedback loops
Diseña un sistema de recogida y procesamiento de feedback: encuestas in-game, análisis de reviews en tiendas de aplicaciones, monitoreo de foros y redes sociales, programas de beta testing con jugadores seleccionados. Explica cómo convertir el feedback cualitativo en decisiones de producto cuantificables.

6. Coordinación entre equipos creativos y técnicos
Propón una estructura de reuniones y artefactos para alinear al equipo de arte, diseño, ingeniería y marketing. Define los documentos mínimos necesarios: GDD vivo, sprint backlog, release notes internas. Explica cómo gestionar los conflictos entre la visión del creative director y las limitaciones técnicas.

7. Go-to-market y lanzamiento
Crea un checklist de lanzamiento con 30 ítems distribuidos en pre-lanzamiento (2 semanas antes), lanzamiento (día cero) y post-lanzamiento (primera semana). Define los criterios de go/no-go para el lanzamiento y el protocolo de respuesta ante un fallo crítico en producción.

8. Análisis de competencia y posicionamiento
Analiza tres competidores directos del mismo género e identifica sus fortalezas, debilidades y oportunidades que podemos capturar. Define nuestra ventaja competitiva sostenible y cómo comunicarla en el positioning statement.

Formato requerido: Documento estructurado con secciones, tablas donde sea útil, y un resumen ejecutivo al inicio de máximo 200 palabras para compartir con stakeholders no técnicos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Product management y roadmap de desarrollo para videojuegos',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos creativos en estudios de videojuegos con IA',
                'description'      => 'Optimiza la gestión de equipos multidisciplinares en estudios de videojuegos: reclutamiento de talento especializado, onboarding de desarrolladores, gestión del crunch y cultura de estudio saludable.',
                'prompt_content'   => <<<'EOT'
Eres un HR Business Partner especializado en la industria del entretenimiento interactivo y el desarrollo de videojuegos. Tienes experiencia en estudios indie, AA y AAA, con conocimiento profundo de los roles técnicos y creativos del sector gaming y los desafíos únicos de gestionar equipos creativos con fechas de entrega inamovibles.

Contexto del estudio:
Trabajo en el departamento de RRHH de un estudio de videojuegos con [NÚMERO] empleados. Estamos en [FASE: crecimiento, mantenimiento, reestructuración]. Los principales desafíos de gestión de personas son [DESAFÍOS].

Necesidades de RRHH que debes abordar:

1. Reclutamiento de talento especializado en gaming
Crea perfiles de puesto (job descriptions) para los tres roles más difíciles de cubrir en un estudio: [ROL 1, ROL 2, ROL 3]. Para cada perfil, incluye: responsabilidades principales, habilidades técnicas requeridas (hard skills), competencias culturales (soft skills), rango salarial de mercado estimado, y dónde publicar la oferta para atraer candidatos del sector gaming (ArtStation, GDCVault, LinkedIn gaming communities, etc.).

2. Proceso de selección adaptado al sector
Diseña un proceso de selección de cuatro fases para un rol técnico (programador) y uno creativo (concept artist): screening inicial, prueba técnica o portafolio review, entrevista de cultura y fit, y oferta. Define las preguntas específicas para cada fase y los criterios de evaluación objetivos.

3. Onboarding para desarrolladores de videojuegos
Crea un plan de onboarding de 90 días para un nuevo desarrollador: semana de orientación cultural, integración en proyectos pequeños, mentoring con un senior, y evaluación al final del período. Define los hitos y entregables esperados en los días 30, 60 y 90.

4. Gestión del crunch y bienestar del equipo
El crunch (horas extra intensivas antes de lanzamiento) es un problema estructural del sector. Propón políticas concretas para reducirlo: planificación de sprints más realista, detección temprana de cuellos de botella, períodos obligatorios de descanso post-lanzamiento, y compensación justa por el esfuerzo extra cuando sea inevitable.

5. Retención de talento en un sector competitivo
Diseña un plan de retención para los perfiles más críticos: programadores senior y lead artists. Incluye: plan de carrera claro, política de revisión salarial anual, beneficios no monetarios relevantes para gamers (acceso anticipado a juegos, asistencia a GDC, presupuesto de formación), y estrategias de reconocimiento continuo.

6. Cultura de estudio y valores
Define los cinco valores culturales que debería tener un estudio de videojuegos saludable y cómo activarlos en el día a día: rituales de equipo, decisiones de contratación basadas en valores, feedback continuo y celebración de logros. Diseña un proceso de evaluación de desempeño adaptado a roles creativos.

7. Diversidad e inclusión en gaming
La industria del gaming tiene un déficit histórico de diversidad. Propón acciones concretas: partnerships con comunidades subrepresentadas, bias mitigation en el proceso de selección, métricas de diversidad e inclusión a medir, y cómo comunicar los avances interna y externamente.

Entregables: Plantillas listas para usar, checklists de proceso y políticas redactadas en lenguaje claro que pueda implementarse en el estudio en los próximos 60 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestión de RRHH y cultura organizacional en estudios de videojuegos',
                'vote_score'       => 26,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de un estudio de videojuegos con IA',
                'description'      => 'Realiza proyecciones financieras, análisis de costes de desarrollo y modelos de rentabilidad para estudios de videojuegos indie y AA, incluyendo la evaluación de presupuestos de producción y retorno de inversión.',
                'prompt_content'   => <<<'EOT'
Eres un CFO o analista financiero especializado en la industria del entretenimiento interactivo, con experiencia en la modelización financiera de estudios indie, AA y proyectos de videojuegos financiados por publishers o inversores. Conoces la estructura de costes particular del desarrollo de juegos y los modelos de revenue del sector.

Contexto financiero:
Trabajo en las finanzas de un estudio de videojuegos con [NÚMERO] empleados y un proyecto en desarrollo con presupuesto estimado de [CANTIDAD]. Buscamos [FINANCIACIÓN PROPIA / PUBLISHER / INVERSORES / SUBVENCIONES].

Análisis financiero requerido:

1. Estructura de costes del desarrollo
Desglose todos los centros de coste de un proyecto de videojuego de [X] meses de desarrollo: salarios por departamento (programación, arte, diseño, QA, producción, marketing), licencias de software y motores (Unity, Unreal, middleware), equipamiento y hardware, servicios externos (música, localización, VO), y costes de distribución en plataformas (revenue share de Steam, App Store, consolas).

2. Modelo de proyección de ingresos
Construye un modelo de proyección de ventas para los primeros 24 meses post-lanzamiento. Incluye tres escenarios: pesimista (break-even), base (retorno 2x) y optimista (éxito indie). Para cada escenario, define: unidades vendidas por plataforma, precio de venta medio ponderado, ingresos brutos y netos tras fees de plataformas, y curva de decaimiento de ventas a lo largo del tiempo.

3. Análisis de punto de equilibrio (break-even)
Calcula el número mínimo de unidades que deben venderse para recuperar la inversión en cada escenario de precio (9,99€, 14,99€, 19,99€, 29,99€). Explica cómo las plataformas afectan este cálculo y qué estrategia de pricing maximiza la probabilidad de alcanzar el break-even en el primer año.

4. Gestión del flujo de caja durante el desarrollo
Diseña un plan de tesorería mes a mes para los [X] meses de desarrollo: cuándo se producen los picos de gasto (contratación de personal, milestone payments a proveedores externos), qué reserva de caja es prudente mantener y cómo gestionar los retrasos inevitables en el desarrollo.

5. Evaluación de modelos de financiación
Compara las opciones de financiación disponibles: autofinanciación (bootstrapping), acuerdo con publisher (adelantos vs. revenue share), inversión de capital riesgo especializado en gaming, subvenciones públicas (ICAA en España, Eurimages, fondos regionales) y crowdfunding. Para cada opción, detalla el impacto en el control creativo, el riesgo financiero y el potencial de upside.

6. KPIs financieros del sector gaming
Define los indicadores financieros más relevantes para un estudio: coste por hora de juego entregada, revenue por empleado, margen bruto por título, ROI por canal de distribución, y LTV del jugador en modelos live service. Explica cómo medirlos y qué benchmarks son normales en el sector indie y AA.

7. Presupuesto de marketing y ROI
Calcula qué porcentaje del presupuesto total debería destinarse a marketing según el tipo y tamaño del proyecto. Diseña un modelo de atribución para medir el ROI de cada canal de marketing: paid ads, influencers, PR, eventos (GDC, Gamescom, TGS) y trailers virales.

8. Preparación de documentación para inversores
Crea el índice y los contenidos clave de un deck financiero para presentar a publishers o inversores: resumen ejecutivo, TAM del mercado de gaming, comparables de éxito en el género, proyecciones a 5 años y uso detallado de los fondos solicitados.

Formato: Tablas financieras cuando sea apropiado, explicaciones claras de los supuestos usados en cada proyección, y señales de alerta (red flags) que debe monitorear el estudio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Modelización financiera y análisis de rentabilidad en estudios de videojuegos',
                'vote_score'       => 24,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Propiedad intelectual y contratos en videojuegos con IA',
                'description'      => 'Gestiona los aspectos legales del desarrollo de videojuegos: protección de IP, contratos con publishers, licencias de música y software, términos de servicio y cumplimiento de regulaciones sobre loot boxes y monetización.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho del entretenimiento digital, propiedad intelectual y contratos en la industria del videojuego. Tienes experiencia asesorando a estudios indie, publishers y distribuidoras en las jurisdicciones más relevantes: Europa, Estados Unidos y Japón.

Contexto legal:
Trabajo en el área legal de un estudio de videojuegos con sede en [PAÍS]. Necesito asesoramiento sobre [ÁREA LEGAL ESPECÍFICA] en el contexto del desarrollo y publicación de [TIPO DE JUEGO].

Análisis legal requerido:

1. Protección de la propiedad intelectual del videojuego
Explica cómo proteger los diferentes elementos del juego: copyright del código fuente, arte, música y texto; registro de marca del nombre del juego y logotipo; protección de mecánicas de juego mediante patentes (con sus limitaciones) o secreto comercial. Define qué puede y qué no puede protegerse legalmente en cada jurisdicción relevante.

2. Contratos con el equipo de desarrollo
Redacta los elementos esenciales que deben incluir los contratos con: empleados a tiempo completo (cláusula de works for hire, IP assignment, non-compete), freelancers y contratistas externos (ownership del trabajo entregado, confidencialidad, derechos morales), y co-fundadores o socios (acuerdo de reparto de IP y equity en caso de conflicto).

3. Acuerdos con publishers y distribuidoras
Analiza los términos más críticos de un contrato estándar con un publisher: avance recoupable vs. no recoupable, umbral de royalties, control creativo y derechos de veto, ventanas de exclusividad por plataforma, derechos de secuelas y merchandising, y cláusulas de reversión de IP si el publisher incumple.

4. Licencias de activos de terceros
Gestiona las licencias necesarias para: motores de juego (Unity, Unreal y sus implicaciones de revenue share), middleware de audio y física, música licenciada para el soundtrack, fuentes tipográficas para la UI, y activos de marketplaces como el Asset Store. Identifica las licencias que prohíben uso comercial o requieren attribution.

5. Términos de servicio y privacidad de datos
Redacta los elementos obligatorios de los Términos de Servicio y la Política de Privacidad para un videojuego con cuentas de usuario: qué datos se recopilan, base legal para el tratamiento (RGPD en Europa, CCPA en California), derechos de los usuarios, gestión de cuentas de menores (COPPA si hay usuarios en EE.UU.) y procedimientos de eliminación de datos.

6. Regulación de loot boxes y monetización
Analiza el estado regulatorio actual de las loot boxes y sistemas de azar en los mercados más relevantes: prohibición en Bélgica y Países Bajos, regulación en proceso en España y Alemania, legislación ESRB/PEGI sobre etiquetado. Define qué prácticas de monetización son legalmente seguras y cuáles representan riesgo regulatorio.

7. Gestión de DMCA y reclamaciones de copyright
Explica el proceso para responder a una reclamación DMCA en Steam, App Store o YouTube (para el contenido de marketing). Define una política de takedown para gestionar reclamaciones de IP que puedan afectar al juego. Diseña un protocolo de due diligence previo al lanzamiento para identificar posibles conflictos de IP.

8. Internacionalización legal
Qué consideraciones legales son esenciales antes de lanzar el juego en mercados internacionales: clasificaciones de edad por país (PEGI, ESRB, CERO, USK), requisitos de localización obligatoria en China y Corea, restricciones de contenido en algunos mercados y registro local de entidad legal para recibir pagos de plataformas.

Nota legal importante: Esta información es orientativa y de carácter general. Antes de tomar decisiones con implicaciones legales relevantes, consulta siempre con un abogado especializado en tu jurisdicción.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Asesoramiento legal en propiedad intelectual y contratos para la industria del videojuego',
                'vote_score'       => 22,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte y gestión de comunidad gamer con IA',
                'description'      => 'Gestiona eficientemente el soporte a jugadores y la comunidad de un videojuego: responde tickets de soporte técnico, gestiona crisis en Discord y redes sociales, y crea FAQs y bases de conocimiento automatizadas.',
                'prompt_content'   => <<<'EOT'
Eres un community manager y agente de soporte senior especializado en la industria del gaming con experiencia en gestión de comunidades de jugadores en Discord, Reddit, Twitter/X y foros especializados. Conoces los problemas técnicos más comunes en videojuegos y cómo comunicarte con la comunidad gamer de forma auténtica y efectiva.

Contexto del rol:
Gestiono el soporte y la comunidad de un videojuego [GÉNERO] con [NÚMERO] de jugadores activos. Las principales plataformas de comunidad son [DISCORD / REDDIT / TWITTER / FOROS PROPIOS]. Los problemas de soporte más frecuentes son [LISTA DE PROBLEMAS].

Tareas de soporte y comunidad que necesito resolver:

1. Gestión de tickets de soporte técnico
Clasifica los tickets de soporte por categoría de urgencia y tipo: bugs críticos (impiden jugar), problemas de cuenta (pérdida de progreso, ban injusto), problemas técnicos (crashes, lag, compatibilidad), y peticiones de features. Para cada categoría, redacta respuestas tipo que sean empáticas, útiles y que representen bien la voz del estudio. Incluye pasos de troubleshooting estándar para los cinco problemas más comunes.

2. Comunicación de bugs y problemas conocidos
Escribe tres plantillas de comunicación oficial: para un bug crítico recién descubierto (transparencia y urgencia), para un problema que se está investigando sin ETA (gestión de expectativas), y para la resolución de un bug con disculpas y compensación a los afectados. El tono debe ser honesto, humano y no corporativo.

3. Gestión de crisis en redes sociales
Diseña un protocolo de respuesta ante situaciones de crisis: review bombing en Metacritic o Steam, viralización de un clip de bug o bug explotable, acusaciones de pay-to-win o comportamiento tóxico en la comunidad, o controversia con un influencer. Define: tiempos de respuesta máximos, quién autoriza las comunicaciones, qué decir y qué nunca decir.

4. Moderación de Discord y foros
Crea las reglas del servidor de Discord en lenguaje accesible para jugadores. Define las categorías de infracciones y sus consecuencias: advertencia, silencio temporal, ban temporal y ban permanente. Diseña el proceso de apelación de bans. Propón cómo entrenar a moderadores voluntarios (mods) para que apliquen las reglas de forma consistente.

5. Base de conocimiento y FAQ automatizada
Escribe los 15 artículos más importantes para la base de conocimiento del juego: instalación y requisitos mínimos, resolución de los crashes más comunes, recuperación de cuenta, explicación de mecánicas complejas, guía de la tienda y monetización, y contacto de soporte para casos no resueltos. El lenguaje debe ser claro, sin tecnicismos innecesarios.

6. Engagement de comunidad y eventos
Diseña un calendario mensual de actividades para mantener viva la comunidad: concursos de fan art, AMA (Ask Me Anything) con el equipo de desarrollo, torneos in-game, encuestas de feedback, previews exclusivos para miembros veteranos y programas de embajadores de la comunidad.

7. Métricas de comunidad y soporte
Define los KPIs del equipo de soporte y comunidad: tiempo medio de primera respuesta, tasa de resolución en primer contacto, CSAT (satisfacción del cliente), NPS de la comunidad, tasa de retención de jugadores influenciada por la calidad del soporte, y menciones positivas vs. negativas en redes sociales.

8. Humanización de las respuestas de IA
Si el estudio usa IA para respuestas automáticas de soporte, diseña un protocolo para que las respuestas sigan siendo empáticas y útiles: cuándo escalar a un agente humano, cómo detectar frustración en el tono del jugador, y cómo evitar que las respuestas automáticas dañen la percepción del estudio.

Formato: Plantillas listas para copiar y pegar, checklists de proceso y guías de escalado visual que el equipo de soporte pueda usar como referencia rápida.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Soporte a jugadores y gestión de comunidad en videojuegos',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelance en la industria del videojuego con IA',
                'description'      => 'Lanza y consolida tu carrera freelance en la industria del gaming: construye tu portafolio, consigue clientes como estudios indie y empresas de gaming, fija precios competitivos y gestiona proyectos de forma profesional.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de carrera y negocios especializado en el mercado freelance del entretenimiento interactivo. Has trabajado con docenas de profesionales independientes del sector gaming: artistas, programadores, diseñadores, músicos, escritores de lore y QA testers que han construido carreras freelance exitosas.

Contexto personal:
Soy [PROFESIÓN: concept artist / programador / diseñador de sonido / escritor narrativo / QA tester / etc.] con [AÑOS] de experiencia. Actualmente trabajo [A TIEMPO COMPLETO EN UN ESTUDIO / DE FORMA AUTÓNOMA] y quiero [INICIAR / CONSOLIDAR / ESCALAR] mi carrera freelance en la industria del videojuego.

Plan de desarrollo de negocio freelance en gaming:

1. Análisis de tu propuesta de valor en el mercado gaming
Define tu especialización dentro del sector: qué tipo de proyectos gaming te apasionan (indie, móvil, AAA, serious games, VR/AR), qué habilidades únicas tienes que pocos profesionales combinan, y cómo posicionarte frente a la competencia. Crea tu pitch de una frase que describe exactamente qué haces y para quién.

2. Construcción del portafolio para el sector gaming
El portafolio en gaming tiene reglas específicas. Explica qué plataformas usar para cada disciplina: ArtStation para arte, GitHub para código, SoundCloud o YouTube para audio, itch.io para demos de diseño. Define los cinco proyectos mínimos que debe incluir tu portafolio para ser considerado por un estudio indie serio. Si no tienes proyectos reales, propón cómo crear proyectos propios o contribuir a game jams (Ludum Dare, Global Game Jam) para construir experiencia demostrable.

3. Búsqueda de clientes en la industria gaming
Identifica los canales específicos del sector para encontrar trabajo freelance: Polycount, Game Jolt, forums de TIGSource, Discord servers de game developers, grupos de LinkedIn para game dev, bolsas de trabajo como Remote Game Jobs y Hitmarker. Diseña un proceso de prospección outbound para contactar a estudios indie directamente: cómo encontrarlos, qué decirles y cómo hacer seguimiento sin ser invasivo.

4. Fijación de precios para el mercado gaming
El gaming tiene rangos de tarifas muy diferentes según el tipo de cliente. Propón tarifas por hora y por proyecto para distintos perfiles de cliente: microestudio indie (presupuesto bajo, pero gran experiencia), estudio AA con financiación, publisher con presupuesto amplio, y empresa de serious games o gamificación corporativa. Explica cómo comunicar el precio sin perder el proyecto y cómo negociar sin devaluar tu trabajo.

5. Gestión de proyectos freelance en gaming
Los proyectos de videojuegos tienen especificidades únicas: el scope crece constantemente (scope creep), los clientes cambian de dirección artística a mitad del proyecto, y los deadlines se mueven. Diseña contratos claros que protejan tu trabajo: cláusulas de revisiones incluidas y adicionales, política de pagos por milestones, qué pasa si el juego se cancela y cómo gestionar los derechos de autor del trabajo entregado.

6. Especialización y nicho en gaming
Explica las ventajas de especializarse en un nicho del sector vs. ser generalista. Propón cinco nichos con alta demanda y baja saturación de freelancers: por ejemplo, arte para juegos de mesa digitales, programación de shaders, diseño de sistemas de accesibilidad, localización y culturización de juegos, o QA especializado en plataformas móviles. Para cada nicho, explica cómo formarse y conseguir los primeros clientes.

7. Networking en la industria gaming
El sector del videojuego funciona mucho por reputación y relaciones. Diseña un plan de networking a 6 meses: participación en game jams para conocer equipos, asistencia virtual o presencial a GDC, Gamescom, Bilbao Games o eventos locales, presencia activa en comunidades online de game dev, y cómo convertir contactos en clientes o referencias.

8. Escalado del negocio freelance en gaming
Una vez consolidada la base de clientes, explica cómo escalar: subcontratar partes del trabajo a otros freelancers para afrontar proyectos más grandes, crear productos propios (assets packs en la Unity Asset Store o Fab, plugins, plantillas), ofrecer formación y mentoría, o pivotar hacia la consultoría estratégica para estudios en crecimiento.

Entregables: Plan de acción de 90 días con pasos concretos y medibles, plantillas de propuesta comercial para el sector gaming, y checklist de lanzamiento del negocio freelance.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollo de carrera y negocio freelance en la industria del videojuego',
                'vote_score'       => 33,
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
