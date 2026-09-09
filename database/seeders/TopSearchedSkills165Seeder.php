<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills165Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing deportivo',
                'description'      => 'Estrategias de marketing para clubes, marcas deportivas y eventos: fan engagement, patrocinio y construcción de comunidad con la audiencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de marketing especializado en el sector deportivo con experiencia en clubes de fútbol, marcas deportivas, federaciones y eventos de deporte profesional y amateur en España y Europa.

Necesito desarrollar una estrategia de marketing integral para un club deportivo de nivel profesional-semiprofesional (fútbol, baloncesto o pádel) que quiere construir una base de fans sólida, monetizarla de forma sostenible y crecer en notoriedad más allá de su mercado local.

Diseña la estrategia completa:

1. **La particularidad del marketing deportivo**: el deporte es uno de los pocos productos donde el cliente es también el principal promotor de la marca y vive el producto con una intensidad emocional que ningún marketing convencional puede reproducir. Explica cómo el marketing deportivo capitaliza esta relación emocional: la identidad del fan con el club, el calendario como estructura narrativa natural, y los momentos de máxima atención (partido, fichaje, ascenso) como ventanas de marketing.

2. **Construcción de la identidad de marca del club**: la marca de un club deportivo es el punto de partida. Define los elementos de identidad: historia y valores del club, el escudo y los colores como activos emocionales, el estadio o pabellón como espacio de experiencia, y cómo se expresa la identidad en todos los touchpoints (uniforme, merchandising, comunicación digital, experiencia del fan en el partido).

3. **Estrategia de contenidos deportivos**: el deporte genera contenido de forma natural (partidos, entrenamientos, victorias, derrotas). Define la estrategia de contenidos para maximizar el alcance: los detrás de cámaras que humaniza a los deportistas, el contenido de formación táctica que educa y engancha al fan más sofisticado, los momentos virales que el club debe estar preparado para capturar, y la distribución por canal (Instagram para imagen, TikTok para viralidad, YouTube para contenido largo, Twitter/X para conversación en tiempo real durante el partido).

4. **Fan engagement y construcción de comunidad**: diferencia entre tener seguidores en redes sociales y tener una comunidad activa. Define las estrategias de fan engagement: la app oficial del club como plataforma de fidelización, los programas de socios y abonados con beneficios escalonados, la co-creación con fans (votar el nombre del estadio, elegir la camiseta alternativa), y los eventos de fan experience que refuerzan el sentimiento de pertenencia.

5. **Patrocinio deportivo: la venta y la gestión**: el patrocinio es la principal fuente de ingresos de marketing para muchos clubes. Define la estrategia de venta de patrocinios: cómo segmentar las marcas con mayor afinidad con la audiencia del club, la construcción del media kit y el dosier de patrocinio, los formatos de patrocinio más allá de la camiseta (naming del estadio, patrocinador de la academia, activaciones digitales), y cómo medir el ROI del patrocinador para fidelizarlo año tras año.

6. **Monetización digital del club**: la audiencia digital del club es un activo monetizable más allá de los derechos de retransmisión. Define las palancas de monetización digital: el modelo de suscripción para contenido premium (el modelo de Real Madrid TV o Barça TV), los NFTs y activos digitales para fans coleccionistas, las plataformas de fan tokens (Socios.com), y el e-commerce de merchandising oficial con logística internacional.

7. **Marketing en el estadio y la experiencia en directo**: el partido en directo sigue siendo la experiencia deportiva definitiva. Define cómo maximizar la experiencia del fan en el estadio: el journey completo desde la compra de la entrada hasta la salida del recinto, las activaciones de patrocinadores que añaden valor en lugar de interrumpir, el uso de tecnología en el estadio (app para pedir comida desde el asiento, replay en el móvil), y cómo convertir la experiencia del estadio en contenido para los fans que no fueron.

8. **Marketing del deportista individual como activo del club**: los deportistas estrella del club tienen audiencias propias en redes sociales que pueden amplificar el alcance de la marca del club. Define cómo gestionar la relación entre la marca del club y la marca personal del deportista: los acuerdos sobre contenido en redes sociales, la gestión conjunta de las relaciones con marcas patrocinadoras, y los protocolos de comunicación en momentos de crisis (lesión, escándalo, transferencia).

9. **Marketing para la cantera y el deporte base**: los clubes con cantera tienen la oportunidad de construir fans desde la infancia. Define la estrategia de marketing para la academia y el deporte base: cómo convertir a los padres de los jugadores de la cantera en embajadores del club, los eventos de puertas abiertas que conectan a la afición con los futuros talentos, y el relato del jugador de la cantera que llega al primer equipo como una de las narrativas más poderosas del marketing deportivo.

10. **Métricas del marketing deportivo**: define el cuadro de mando del director de marketing de un club: seguidores y engagement en redes (pero con escepticismo sobre su relación con los ingresos), tasa de renovación de abonados, ingresos por patrocinio y evolución del portfolio de patrocinadores, ingresos por merchandising, y el NPS de los socios como indicador de la salud de la relación con la comunidad.

Responde con ejemplos concretos de clubes españoles y europeos que han ejecutado bien estas estrategias, las campañas que mejor han funcionado, y los errores de marketing deportivo que hay que evitar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Estrategia de marketing integral para clubes deportivos y marcas del sector del deporte',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Fantasy sports y gamification',
                'description'      => 'Construcción de plataformas de fantasy deportivo y mecánicas de gamification que mantienen al usuario comprometido durante toda la temporada.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager y arquitecto de software con experiencia en el desarrollo de plataformas de fantasy sports y aplicaciones de gamification deportiva, con conocimiento del mercado español e internacional (La Liga Fantasy, Comunio, Biwenger, y plataformas norteamericanas como DraftKings y FanDuel).

Quiero desarrollar una plataforma de fantasy sports para la liga de fútbol española (LaLiga) con mecánicas de gamification avanzadas que generen compromiso durante toda la temporada, no solo en los primeros meses.

Guíame a través del diseño completo del producto:

1. **Modelos de fantasy sports**: existen varios modelos de juego y cada uno tiene dinámicas muy diferentes. Compara los modelos principales: fantasy de temporada completa (el clásico de Comunio y La Liga Fantasy, donde el usuario gestiona una plantilla durante toda la temporada), el daily fantasy sports (DFS, donde cada jornada es independiente, como el modelo DraftKings), los pools de predicciones (apostar por resultados de partidos), y las quinielas sociales. Cuál encaja mejor con el mercado español y por qué.

2. **Sistema de puntuación y equilibrio del juego**: el sistema de puntuación es el motor del fantasy y determina qué jugadores son valiosos. Define el sistema de puntuación para un fantasy de fútbol: puntos por goles, asistencias, portero a cero, tarjetas, minutos jugados, y los sistemas de bonus por rendimiento excepcional. Los trade-offs entre un sistema simple (más accesible) y uno complejo (más estratégico), y cómo se testea el equilibrio para que el juego sea justo y entretenido.

3. **Arquitectura técnica de la plataforma**: define la arquitectura del sistema: cómo se ingieren los datos de rendimiento de los jugadores en tiempo real (fuentes de datos como Opta, StatsBomb o las APIs oficiales de LaLiga), el procesamiento de eventos del partido para actualizar puntuaciones en tiempo real, la base de datos de jugadores con estadísticas históricas, y el sistema de mercado de fichajes y traspasos entre ligas de amigos.

4. **Ligas sociales como motor de retención**: el fantasy es fundamentalmente un juego social. Define las funcionalidades de liga entre amigos: creación de ligas privadas con reglas personalizables, el chat de la liga como espacio de conversación, las notificaciones sociales que generan conversación (tu rival ficha a tu jugador estrella), y los rituales semanales que convierten el fantasy en un hábito social.

5. **Mecánicas de gamification para el engagement a largo plazo**: el fantasy sin gamification pierde usuarios a mitad de temporada. Define las mecánicas que sostienen el compromiso durante los nueve meses de competición: los logros y trofeos por hitos (primera victoria, racha de jornadas en positivo), los rankings globales y de la liga de amigos, los retos semanales con recompensas, y la narrativa de progresión que hace que el usuario se sienta mejor gestor de fútbol con el tiempo.

6. **Monetización de la plataforma de fantasy**: define el modelo de negocio, diferenciando entre los modelos que funcionan mejor en el mercado español: el modelo freemium con funcionalidades premium (análisis de rendimiento avanzado, alertas de lesiones, herramientas de gestión de plantilla), las ligas de pago con premios, el patrocinio integrado en la plataforma (un patrocinador de la jornada), y los modelos de afiliación con casas de apuestas (que es como monetizan muchas plataformas de fantasy en España).

7. **Datos y estadísticas como diferenciador**: el fantasy más sofisticado ofrece a los usuarios datos que van más allá de los básicos. Define la capa de análisis de datos: estadísticas avanzadas de rendimiento del jugador (xG, xA, presión defensiva), tendencias de mercado (qué jugadores están siendo más fichados esta semana), análisis predictivo de rendimiento futuro, y cómo presentar estos datos de forma que el usuario no-experto también los entienda y los use.

8. **Aplicación móvil y notificaciones**: el fantasy es un producto que se consume principalmente en móvil, con momentos de alta actividad (la noche del miércoles antes de cerrar el mercado, los minutos antes del partido). Define la estrategia de notificaciones: alertas de convocatorias y lesiones, recordatorio de mercado, actualizaciones de puntuación en tiempo real durante el partido, y el diseño de la app para los momentos de máxima tensión (cambio de jugador a los 89 minutos que puede decidir la jornada).

9. **Gestión de la comunidad y el fraude**: una plataforma de fantasy con dinero real necesita gestionar el fraude (cuentas múltiples, uso de bots para detectar cambios de convocatoria antes que los demás usuarios) y la comunidad (usuarios que se insultan en los foros). Define los sistemas de detección de fraude y moderación, los términos de servicio que regulan el comportamiento, y cómo construir una comunidad sana alrededor de la plataforma.

10. **Regulación de los daily fantasy sports en España**: los DFS con dinero real tienen una regulación ambigua en España que los diferencia del juego online convencional. Explica el marco legal actual, los requisitos para operar una plataforma de fantasy con premios en efectivo, la posición de la DGOJ (Dirección General de Ordenación del Juego), y las restricciones de publicidad que aplican a las plataformas de apuestas y que pueden afectar a los modelos de monetización por afiliación.

Responde con referencias a plataformas reales de fantasy deportivo, las mecánicas que mejor han funcionado para sostener el engagement a lo largo de la temporada, y los errores de diseño de producto más frecuentes en este tipo de aplicaciones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseño de producto y arquitectura técnica para plataformas de fantasy sports con gamification',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de identidad para deportes',
                'description'      => 'Creación de identidades visuales para clubes, atletas y eventos deportivos con los estándares del branding deportivo y fans exigentes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de arte y diseñador de marca especializado en el sector deportivo, con experiencia en el diseño de identidades visuales para clubes deportivos, atletas profesionales, eventos deportivos y marcas del mundo del deporte en España y Europa.

Necesito diseñar la identidad visual completa para un club de fútbol de nueva creación que competirá en la Segunda División española, con ambición de llegar a Primera División en los próximos cinco años. El club tiene base en una ciudad mediana española sin tradición futbolística fuerte.

Guíame a través del proceso de diseño de la identidad completa:

1. **La identidad de marca en el deporte: por qué es diferente**: el branding deportivo tiene unas particularidades únicas. El escudo no es solo un logo, es un símbolo de identidad que los fans se tatúan. Los colores no son opciones estéticas, son atributos identitarios que se heredan de generación en generación. Explica cómo estas dinámicas emocionales condicionan las decisiones de diseño y por qué el proceso de diseño de identidad deportiva debe incluir a la comunidad de forma más activa que en cualquier otro sector.

2. **Investigación y territorio de marca**: antes de diseñar una línea, hay que entender el territorio. Define el proceso de research: análisis de la identidad visual de los clubes competidores (tanto en la misma categoría como en la zona geográfica), búsqueda de referencias históricas y culturales del territorio donde se ubica el club (heráldica local, arquitectura, referencias naturales o industriales), y cómo estas referencias se convierten en activos visuales genuinos y no en clichés.

3. **Diseño del escudo: el corazón de la identidad**: el escudo es el elemento más importante y el más difícil de diseñar bien. Define el proceso de diseño: las formas clásicas del escudo de fútbol español y sus connotaciones, cómo integrar los elementos identitarios del territorio de forma que resulten genuinos, la tipografía del nombre del club como parte del escudo, los colores primarios y su justificación, y los criterios de simplicidad y versatilidad que permiten que el escudo funcione en un pin de solapa y en una pancarta de estadio.

4. **Sistema de color y tipografía**: la identidad visual completa va mucho más allá del escudo. Define el sistema cromático completo: los colores primarios del club y sus proporciones de uso, los colores secundarios para aplicaciones específicas, las versiones del escudo en positivo, negativo y reducido, y la tipografía oficial del club para comunicaciones formales (carteles, redes sociales, señalética del estadio).

5. **La equipación como aplicación estrella de la identidad**: la camiseta es el producto de merchandising más visible y el que más comunica la identidad del club. Define el diseño de la equipación titular (primera), la alternativa (segunda) y la tercera equipación: cómo los colores del club se aplican a los distintos modelos, el diseño de los detalles (cuello, mangas, pantalón, medias), y la relación con el kit sponsor (fabricante de equipaciones) que tiene sus propias restricciones de diseño.

6. **Señalética y experiencia en el estadio**: el estadio es el espacio donde la identidad visual alcanza su máxima expresión. Define el sistema de señalética: los banners y murales del estadio, la cartelería del naming y las zonas del recinto, el diseño del terreno de juego (publicidad perimetral, centro del campo), y cómo la identidad visual crea una experiencia inmersiva para el fan que llega al estadio.

7. **Identidad digital y redes sociales**: la identidad visual del club vive principalmente en digital hoy en día. Define el sistema de plantillas para redes sociales: la estructura de las publicaciones de resultado, las plantillas de alineación, las celebraciones de goles, los anuncios de fichajes. Cómo mantener la coherencia visual en un entorno donde se publican varias piezas al día y con recursos humanos limitados.

8. **Merchandising oficial y revenue de marca**: el merchandising es una fuente de ingresos importante para el club y un vehículo de difusión de la marca. Define el rango de productos de merchandising para un club de Segunda División: camisetas y equipaciones (el producto estrella), accesorios (bufandas, gorras, llaveros), artículos para el hogar (tazas, banderas), y cómo la identidad visual se adapta a cada producto sin perder coherencia.

9. **Manual de identidad corporativa (Brand Guidelines)**: toda la identidad diseñada debe documentarse en un manual que garantice la coherencia a lo largo del tiempo y con diferentes proveedores. Define el contenido del manual de identidad del club: usos correctos e incorrectos del escudo, paleta de color con códigos Pantone/CMYK/RGB/HEX, tipografías con licencias y jerarquía, aplicaciones en diferentes soportes, y las restricciones para los patrocinadores que quieran co-brandear con el club.

10. **Rebranding: cuándo y cómo rediseñar la identidad**: algunos clubes necesitan renovar su identidad visual (cuando el escudo histórico no funciona en digital, cuando el club cambia de nombre o ciudad, cuando la identidad está desfasada). Define cuándo tiene sentido hacer un rebranding, cómo gestionar la resistencia de los fans más tradicionales, los procesos participativos para involucrar a la afición en el cambio, y los ejemplos de rebrandings deportivos exitosos y fallidos en los últimos años.

Responde con referencias a clubes deportivos con identidades visuales especialmente bien resueltas, los principios de diseño que hacen que una identidad deportiva sea duradera, y los errores más comunes en el diseño de identidad para el sector.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Proceso completo de diseño de identidad visual para clubes deportivos y marcas del deporte',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de patrocinio deportivo',
                'description'      => 'Proceso de venta de derechos de patrocinio: propuesta de valor, medición del ROI y negociación de contratos de patrocinio con grandes marcas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director comercial especializado en la venta de derechos de patrocinio deportivo con más de diez años de experiencia negociando contratos de patrocinio con marcas nacionales e internacionales para clubes de fútbol, federaciones deportivas y eventos deportivos en España.

Necesito construir el departamento comercial de un club de fútbol de Primera División española que históricamente ha tenido un enfoque reactivo al patrocinio (esperando que las marcas lleguen) y quiere pasar a un modelo proactivo con una propuesta de valor sólida y un proceso de venta estructurado.

Desarrolla la estrategia comercial completa de patrocinio:

1. **El mercado del patrocinio deportivo en España**: contextualiza el mercado: el volumen del patrocinio deportivo en España (en relación al mercado europeo), los deportes con mayor inversión de patrocinio, el perfil de las marcas que patrocinan deporte (por sector: automoción, finanzas, telecomunicaciones, bebidas energéticas), y las tendencias post-COVID que han cambiado cómo las marcas evalúan el patrocinio (mayor peso de la activación digital, sostenibilidad, autenticidad).

2. **Inventario de activos de patrocinio del club**: antes de salir a vender, hay que tener claro qué se vende. Define el inventario completo de activos de patrocinio de un club de Primera División: visibilidad en la camiseta (pecho, manga, short, espalda, cuello), naming de instalaciones (estadio, ciudad deportiva, sala de prensa), derechos de hospitalidad (palcos y entradas VIP), activaciones digitales (presencia en redes, contenido co-branded, derechos de uso de jugadores e imagen del club), y los derechos de producto (ser el proveedor oficial de una categoría de producto).

3. **Segmentación y targeting de patrocinadores**: no todas las marcas son patrocinadores potenciales. Define el proceso de identificación y segmentación: análisis del perfil demográfico de la audiencia del club para identificar marcas con alta afinidad, mapa de categorías de producto sin patrocinador actual (la oportunidad de ser "el primero" en una categoría), estudio de los patrocinadores de los clubes competidores, y el proceso de cualificación del patrocinador potencial antes de invertir tiempo en una propuesta.

4. **El dosier de patrocinio: cómo construir la propuesta de valor**: el dosier de patrocinio es el documento que convierte a un club de fútbol en una plataforma de marketing para las marcas. Define la estructura del dosier: datos de audiencia (aficionados, seguidores en redes, audiencia televisiva, visitantes al estadio), el perfil demográfico y psicográfico del fan del club, los casos de éxito de patrocinadores actuales con métricas de impacto real, los formatos de patrocinio disponibles con precios orientativos, y la propuesta de activación específica para el tipo de marca que se está abordando.

5. **El proceso de venta de patrocinio: del primer contacto al contrato**: define el proceso completo de venta: cómo llegar al interlocutor correcto en una gran empresa (generalmente el director de marketing o de comunicación, no el director de patrocinio que a menudo tiene un presupuesto ya comprometido), la propuesta de reunión inicial, la presentación del dosier adaptada al interés específico de la marca, la negociación de los activos y el precio, y el proceso de aprobación interno en las marcas grandes.

6. **Medición del ROI del patrocinio deportivo**: la mayor barrera para cerrar un patrocinio es que el comprador no puede demostrar el retorno a su dirección. Define la metodología de medición del ROI que ofrece el club a sus patrocinadores: el valor mediático de la visibilidad (técnica de equivalencia publicitaria), el reach de las activaciones digitales, la efectividad de las activaciones en el estadio medida con encuestas de recall de marca, y los estudios de brand lift que miden el impacto en notoriedad y preferencia.

7. **Activaciones de patrocinio que añaden valor real**: los mejores patrocinios van mucho más allá de la visibilidad pasiva. Define los formatos de activación que generan mayor impacto: experiencias exclusivas para clientes del patrocinador en el estadio (acceso al vestuario, foto con los jugadores), contenido co-branded con los jugadores para las redes del patrocinador, campañas integradas que conectan el storytelling del club con los valores de la marca, y los programas de hospitalidad para clientes B2B del patrocinador.

8. **Negociación y estructura del contrato de patrocinio**: los contratos de patrocinio deportivo tienen una estructura específica. Define los elementos clave: duración (los patrocinadores buscan tiempo para construir el vínculo, mínimo 2-3 años), los activos incluidos con descripción detallada, los derechos de exclusividad por categoría, las obligaciones mutuas (el club de entrega de los activos, el patrocinador de cumplir las normas de uso de la marca del club), las cláusulas de terminación anticipada, y cómo se gestiona un escándalo que afecta a la imagen del club o a la del patrocinador.

9. **Patrocinio de naming de estadio e instalaciones**: el naming de estadio es el activo de mayor visibilidad y mayor valor económico en el portafolio de un club. Define el proceso de venta de un naming deal: el universo de marcas que pueden y quieren pagar por este activo, la valoración del naming (cómo se calcula el precio), la negociación de las condiciones de transición del nombre (el tiempo que se dan los medios para adoptar el nuevo nombre), y la gestión de la resistencia de los aficionados que no quieren perder el nombre histórico del estadio.

10. **El futuro del patrocinio deportivo: patrocinio de equipos de esports y gaming**: las marcas que quieren llegar a audiencias más jóvenes están diversificando hacia el patrocinio de equipos de esports, streamers y creadores de contenido de gaming. Describe la oportunidad del patrocinio en esports para clubes deportivos tradicionales que están creando divisiones de esports, las diferencias respecto al patrocinio convencional (métricas diferentes, audiencias globales y más jóvenes), y cómo los departamentos de patrocinio de los clubes están adaptando sus procesos para vender también estos activos.

Responde con ejemplos concretos de contratos de patrocinio del fútbol español, las tarifas orientativas de los diferentes activos para clubes de Primera División, y las mejores prácticas en la construcción de relaciones de largo plazo con los patrocinadores.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Estrategia y proceso de venta de derechos de patrocinio para clubes y eventos deportivos',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Plataformas de streaming deportivo',
                'description'      => 'Decisiones de producto en servicios de streaming de deporte en directo: latencia, concurrencia, derechos de retransmisión y experiencia del aficionado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager con experiencia en plataformas de streaming deportivo, con conocimiento de las decisiones técnicas y de producto que definen la experiencia del aficionado en servicios como DAZN, Movistar+, LaLiga TV, o las plataformas OTT que las propias ligas y federaciones están lanzando de forma directa al consumidor (D2C).

Necesito diseñar una plataforma de streaming deportivo para una liga de fútbol de segunda división española que quiere lanzar su propio servicio OTT para distribuir los partidos y contenido relacionado directamente a sus aficionados en España y en la diáspora internacional.

Guíame a través de todas las decisiones de producto:

1. **El ecosistema del streaming deportivo**: describe el panorama actual del mercado de streaming deportivo en España: los grandes agregadores (Movistar+, DAZN), las plataformas de las ligas (LaLiga TV), las apps de clubes individuales, y el movimiento D2C de ligas y federaciones que quieren una relación directa con sus fans. Cuándo tiene sentido que una liga de segunda división lance su propio servicio en lugar de distribuir a través de agregadores.

2. **Derechos de retransmisión: la restricción fundamental**: en el fútbol español, los derechos de segunda división están centralizados por LaLiga. Define cuándo y cómo una liga tiene control sobre sus propios derechos (federaciones de deportes minoritarios, ligas regionales, divisiones inferiores al contrato centralizado), las restricciones geográficas habituales (España vs. internacional), y cómo se estructura el acuerdo de licencia con la entidad que tiene los derechos.

3. **Arquitectura técnica del streaming en directo**: el streaming deportivo en directo es técnicamente más exigente que el vídeo bajo demanda. Define la arquitectura: la cadena de producción (señal del estadio → codificación → CDN → cliente), el protocolo de streaming (HLS, DASH), las estrategias de CDN para gestionar picos de audiencia en partidos importantes, y el target de latencia para el streaming deportivo en directo (la diferencia entre los 30 segundos del streaming estándar y los 5-8 segundos del low-latency streaming que permite una experiencia más sincronizada con la conversación en redes sociales).

4. **Escalabilidad para eventos de alta concurrencia**: el partido de la jornada puede concentrar diez veces más espectadores que el partido menos atractivo. Define la arquitectura que permite escalar horizontalmente: el uso de CDNs con capacidad de distribución masiva (Akamai, Cloudflare, AWS CloudFront), los mecanismos de pre-escalado antes del partido, y los planes de contingencia para cuando la demanda supera las previsiones.

5. **Calidad de vídeo adaptativa (ABR) y experiencia en dispositivos**: los aficionados ven el partido en el televisor del salón, en el móvil en el bar, y a veces con una conexión de datos limitada. Define la estrategia de calidad adaptativa: los perfiles de codificación (de 360p en conexiones lentas hasta 4K en conexiones de fibra), el algoritmo de selección de bitrate, y los tests de experiencia que garantizan que la calidad en los momentos críticos (un gol, un penalti) no se degrada.

6. **Funcionalidades de experiencia del aficionado**: un servicio OTT propio puede ofrecer experiencias que un agregador no puede. Define las funcionalidades diferenciales: múltiples ángulos de cámara para el espectador (cámara del portero, cámara táctica cenital), estadísticas en tiempo real superpuestas al vídeo, el social watch party (ver el partido con amigos en streaming con chat en tiempo real), y el audio alternativo (la narración del partido con el comentarista oficial del club para los fans de cada equipo).

7. **Modelo de negocio y monetización**: define el modelo de monetización del servicio OTT deportivo: la suscripción mensual o anual con acceso a todos los partidos (el modelo más limpio pero requiere suficiente contenido), el pay-per-view para partidos individuales (mayor conversión en fans ocasionales pero peor LTV), el modelo freemium con contenido gratuito y partidos en directo de pago, y la publicidad como fuente de ingresos para el tier gratuito.

8. **Distribución y aplicaciones multiplataforma**: los aficionados esperan ver el partido en cualquier dispositivo. Define la estrategia de plataformas: aplicación nativa para iOS y Android (imprescindible), smart TV apps (Samsung, LG, Android TV, Apple TV, Fire Stick), aplicación web para ordenador, y la integración con televisores de pago para audiencias que prefieren el setup tradicional. El coste y la priorización del desarrollo para cada plataforma.

9. **Análisis de datos de la audiencia**: la ventaja del servicio OTT propio frente a la distribución a través de un agregador es el acceso directo a los datos del espectador. Define el modelo de datos: qué saber de cada usuario (partidos vistos, tiempo de visionado, momentos donde se pausa o adelanta, calidad de la conexión durante el partido), cómo usar estos datos para mejorar el producto y para las negociaciones de derechos y patrocinio, y las consideraciones de privacidad (RGPD) en la gestión de datos de comportamiento de visionado.

10. **Lanzamiento y crecimiento de la base de suscriptores**: define la estrategia de lanzamiento: el periodo de prueba gratuita para crear la costumbre de consumo, las campañas de captación a través de los canales del club, la estrategia de precios de lanzamiento con descuento, y el modelo de crecimiento de la base de suscriptores a lo largo de la temporada (el pico en el inicio de la temporada, el valle en verano, la retención durante los periodos sin partidos).

Responde con referencias a plataformas de streaming deportivo reales, las decisiones técnicas y de producto que han determinado el éxito o fracaso de los servicios OTT deportivos lanzados en los últimos años, y los errores que hay que evitar en el lanzamiento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño de producto y arquitectura técnica para plataformas de streaming deportivo OTT',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos de alto rendimiento',
                'description'      => 'Lecciones del deporte de élite aplicadas a la gestión de equipos: cultura de excelencia, feedback continuo y rituales que construyen equipos ganadores.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en gestión de equipos de alto rendimiento que trabaja en la intersección entre el deporte de élite y el mundo empresarial, con experiencia asesorando a empresas que quieren aplicar los principios del coaching deportivo y la psicología del rendimiento a sus equipos de trabajo.

Necesito construir una cultura de alto rendimiento en un equipo de producto tecnológico de veinte personas que trabaja en remoto y tiene dificultades para mantener la cohesión, el rendimiento sostenido y la motivación durante proyectos largos y exigentes.

Aplica los principios del deporte de élite a este contexto:

1. **Los principios universales del rendimiento de élite**: qué tienen en común los equipos deportivos de más alto rendimiento (los All Blacks de rugby, la selección española de baloncesto, la generación dorada del tenis español) con los equipos de trabajo más productivos. Los principios que se transfieren: propósito compartido más allá del resultado inmediato, cultura de exigencia y apoyo simultáneos, sistemas de feedback constante, y la mentalidad de proceso frente a la mentalidad de resultado.

2. **El propósito como motor del equipo**: los equipos de alto rendimiento tienen un propósito que va más allá de ganar el partido o cerrar el sprint. Define el proceso de construir un propósito de equipo genuino: cómo facilitar la conversación sobre el impacto real del trabajo del equipo, la diferencia entre el propósito que impone la dirección y el que emerge del propio equipo, y cómo el propósito funciona como ancla en los momentos de baja motivación o de derrota.

3. **La cultura del feedback continuo**: en el deporte de élite, el feedback es constante, inmediato y basado en datos (el vídeo del partido). Adapta este modelo al entorno laboral: el feedback que ocurre naturalmente en los rituales del equipo (retrospectivas, one-on-ones, reviews de entregables), las conversaciones de feedback que requieren iniciativa individual, y cómo construir una cultura donde el feedback sea percibido como un regalo y no como una amenaza.

4. **Los rituales del equipo como infraestructura cultural**: los equipos deportivos tienen rituales (el canto de vestuario antes del partido, el abrazo de celebración, el visionado de vídeo del miércoles) que crean cohesión y marcan los ritmos del equipo. Diseña el sistema de rituales para un equipo de producto en remoto: el inicio de semana que alinea y conecta, el ritual de cierre del sprint que celebra y aprende, el momento de reconocimiento individual que hace que cada miembro se sienta visto, y cómo estos rituales funcionan en formato digital sin perder su potencia.

5. **Gestión del rendimiento individual y colectivo**: en el deporte, el rendimiento de cada jugador se mide de forma continua y objetiva. Define el sistema de gestión del rendimiento para el equipo de producto: la diferencia entre medir la actividad (líneas de código, tickets cerrados) y medir el impacto real, las conversaciones de rendimiento que son honestas sin ser crueles, y cómo gestionar al miembro del equipo que rinde por debajo de sus capacidades.

6. **Psicología del rendimiento bajo presión**: los deportistas de élite aprenden a rendir cuando más importa. Adapta las técnicas de la psicología del deporte al entorno laboral: la preparación mental antes de una presentación importante o un lanzamiento de producto, las técnicas de gestión de la presión (respiración, rutinas pre-competición), y la mentalidad de crecimiento que convierte los errores en aprendizaje en lugar de en parálisis.

7. **La gestión del error y la cultura de la seguridad psicológica**: los equipos de alto rendimiento no tienen miedo de cometer errores, pero sí tienen procesos para aprender de ellos. Define el modelo de gestión del error: la diferencia entre error por negligencia y error por exploración de algo nuevo, el proceso de debriefing después de un fracaso (lo que en el deporte se llama "análisis post-partido"), y cómo los managers crean un entorno donde los errores se reportan y se analizan en lugar de ocultarse.

8. **Liderazgo de alto rendimiento: el manager como entrenador**: el manager de un equipo de alto rendimiento actúa más como entrenador que como jefe. Define el modelo de liderazgo: la observación continua del rendimiento del equipo (el manager que está en el partido, no en el palco), el coaching individual adaptado a las necesidades de desarrollo de cada persona, y la gestión de las dinámicas de equipo (el rol del capitán, la gestión de las egos grandes, la inclusión de los más callados).

9. **Gestión de la energía y la sostenibilidad del rendimiento**: los deportistas de élite gestionan su energía con la misma precisión que su rendimiento (ciclos de carga y descarga, pretemporada vs. temporada, periodos de recuperación). Adapta este modelo a equipos laborales: cómo detectar la fatiga del equipo antes de que llegue al burnout, la planificación de los sprints intensos con periodos de recuperación planificados, y los rituales de desconexión que permiten llegar al lunes con energía renovada.

10. **Medición del rendimiento del equipo**: define el sistema de métricas para monitorizar la salud y el rendimiento del equipo: los indicadores de rendimiento (velocidad de entrega, calidad del trabajo, satisfacción del cliente) y los indicadores de salud del equipo (NPS interno, tasa de rotación, engagement en los rituales, indicadores de bienestar). Cómo usar estos datos para tomar decisiones de gestión sin convertir la medición en un sistema de control que destruye la autonomía.

Responde con ejemplos concretos de técnicas y herramientas del deporte de élite que se han transferido con éxito al entorno empresarial, los experimentos que puedes proponer al equipo para probar estos principios, y las señales de alarma que indican que el equipo está lejos del alto rendimiento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Aplicación de principios del deporte de élite a la construcción de equipos de alto rendimiento',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Valoración de clubes y activos deportivos',
                'description'      => 'Cómo se valoran los clubes deportivos, los derechos de retransmisión y los activos intangibles del deporte profesional.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista financiero especializado en el deporte como clase de activo, con experiencia en la valoración de clubes deportivos profesionales, derechos de retransmisión, y transacciones de M&A en el sector del entretenimiento deportivo.

El deporte profesional se ha convertido en un activo de inversión de primer orden, con valoraciones de los grandes clubes de fútbol que superan los mil millones de euros y con fondos de private equity entrando de forma masiva en las ligas europeas. Necesito entender la lógica financiera detrás de estas valoraciones.

Desarrolla el análisis financiero completo del sector:

1. **El deporte como clase de activo**: explica por qué los fondos de inversión y los family offices están invirtiendo masivamente en clubes deportivos. Las características financieras que hacen atractivo al deporte: la escasez (no se puede crear un nuevo Real Madrid), la correlación baja con otros activos financieros, el crecimiento secular de los ingresos por derechos de televisión, y el componente de status y visibilidad que valoran algunos inversores más allá del retorno financiero.

2. **Fuentes de ingresos de un club de fútbol**: la valoración de un club parte de la comprensión de sus fuentes de ingresos. Define el modelo de ingresos de un club de Primera División española: derechos de televisión (la partida más grande y la más predecible), ingresos de matchday (venta de entradas y hospitality), ingresos comerciales (patrocinios, merchandising, licencias), y los ingresos extraordinarios por traspasos de jugadores. La proporción de cada fuente varía enormemente según el tamaño del club.

3. **Metodología de valoración de clubes deportivos**: los métodos de valoración de clubes deportivos son una combinación de metodologías estándar y métricas específicas del sector. Define los métodos: el múltiplo sobre ingresos (los clubes de fútbol europeos se valoran típicamente entre 3x y 10x ingresos dependiendo del tier), el DCF aplicado a las proyecciones de ingresos y EBITDA, y el método de transacciones comparables (qué han pagado otros compradores por clubes similares). Por qué el DCF es difícil de aplicar en el deporte (la incertidumbre deportiva hace imposible proyectar ingresos con fiabilidad).

4. **El valor de los derechos de televisión**: los derechos de retransmisión son el activo que más ha crecido en valor en las últimas décadas. Explica el mercado de derechos de televisión de LaLiga: el reparto centralizado entre los clubes, la evolución del valor de los derechos en los últimos ciclos, la competencia entre plataformas de streaming y televisión de pago, y la amenaza que representa la creación de la Superliga Europea para el modelo de distribución de derechos actual.

5. **La plantilla como activo en el balance**: en el deporte, los jugadores de la plantilla son activos que aparecen en el balance y se amortizan. Explica el tratamiento contable: cómo se registra el fichaje de un jugador (capitalización del coste de transferencia como activo intangible), la amortización durante la duración del contrato, el tratamiento de los jugadores de la cantera (sin coste de adquisición pero con valor de mercado creciente), y cómo la volatilidad del valor de mercado de los jugadores afecta a los estados financieros.

6. **Finanzas de la normativa de Fair Play Financiero (FFP)**: el FFP de la UEFA y su sucesor el Financial Sustainability Regulations intentan limitar el gasto de los clubes a sus ingresos. Explica las reglas actuales: el límite de pérdidas permitido, las sanciones por incumplimiento, los casos más relevantes (Manchester City, PSG), y cómo el FFP afecta a las estrategias de fichajes y a la valoración de los clubes que lo cumplen versus los que lo incumplen.

7. **M&A en el sector deportivo: cómo se compra un club**: las adquisiciones de clubes de fútbol tienen particularidades que no existen en el M&A convencional. Define el proceso: la due diligence específica del sector deportivo (la evaluación del valor de la plantilla, los contratos de derechos de televisión, la posición en la tabla como activo o pasivo, las deudas con futbolistas y agentes), la estructura de la operación (compra de acciones vs. activos), y las regulaciones de la UEFA y LaLiga sobre la propiedad de clubes.

8. **Los fondos de private equity en el fútbol**: la entrada de fondos como CVC en LaLiga o Silver Lake en el City Football Group ha cambiado la dinámica financiera del sector. Explica la lógica de estas inversiones: qué buscan los fondos de PE en el deporte (múltiplos de expansión basados en el crecimiento de los derechos digitales), las estructuras de las inversiones (minority stakes, royalties sobre derechos futuros), y el impacto en la gobernanza de las ligas.

9. **Valoración de los derechos de imagen y la marca del deportista**: además de los clubes, los propios deportistas son activos valorables. Define la metodología de valoración de la marca de un deportista: los ingresos por contratos de imagen y publicidad, el valor del seguimiento en redes sociales, la durabilidad de la marca más allá de la carrera deportiva activa (el caso de Federer o Ronaldo), y cómo los fondos de inversión están comprando participaciones en los futuros ingresos de imagen de atletas jóvenes.

10. **El futuro de las finanzas del deporte**: describe las tendencias que van a remodelar las finanzas del deporte en los próximos diez años: la desintermediación de los derechos televisivos con las plataformas D2C de las ligas, el impacto de la IA en la detección y valoración del talento deportivo, los nuevos modelos de financiación de las instalaciones deportivas (fondos de infraestructura), y el papel del deporte en el ecosistema de la economía de los creadores y el entretenimiento digital.

Responde con datos financieros reales de la industria, ejemplos de transacciones y valoraciones concretas del sector deportivo español y europeo, y el nivel de análisis que esperaría un comité de inversión de un fondo especializado en el sector.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Análisis financiero y valoración de clubes deportivos y activos del deporte profesional',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos deportivos',
                'description'      => 'Contratos de deportistas profesionales: derechos de imagen, cláusulas de rescisión, agentes y los aspectos legales del deporte profesional en España.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho deportivo con experiencia en la negociación de contratos de deportistas profesionales, litigios ante el Comité Jurisdiccional de la RFEF y el Tribunal Administrativo del Deporte (TAD), y asesoramiento a clubs, agentes y deportistas en España.

Necesito entender el marco legal completo que regula las relaciones laborales y contractuales en el deporte profesional español, incluyendo los contratos de deportistas, los derechos de imagen, los contratos de agentes, y los aspectos específicos del derecho laboral especial deportivo.

Estructura el análisis jurídico completo:

1. **El contrato del deportista profesional**: el Real Decreto 1006/1985 regula la relación laboral especial del deportista profesional. Explica las características principales: las partes del contrato (deportista y club), la forma escrita obligatoria y el registro en la federación, la duración determinada como norma (a diferencia del contrato laboral ordinario que es indefinido por defecto), el periodo de prueba, y las causas de extinción y sus consecuencias económicas.

2. **Estructura de la retribución del deportista**: la retribución de un deportista profesional es más compleja que un simple salario. Define los componentes: el salario fijo bruto, las primas por rendimiento (prima por partido ganado, por clasificación, por campeonato), las primas de fichaje o de firma, los complementos en especie (coche, vivienda, colegio de los hijos), y cómo se estructura el pago del salario (mensualidades, pagas extra del sector). Las implicaciones fiscales de cada componente para el deportista.

3. **Derechos de imagen: la estructura del contrato de imagen**: los derechos de imagen de un deportista de élite pueden superar en valor a su salario deportivo. Explica la estructura legal: la diferencia entre la cesión de imagen al club (artículo 7.2 del IRPF deportista) y los contratos de imagen con marcas externas, el porcentaje del 15% de la retribución total que el club puede pagar vía cesión de imagen, los contratos de imagen con terceros y su fiscalidad, y la sociedad de imagen como vehículo habitual de planificación fiscal de los deportistas.

4. **La cláusula de rescisión**: la cláusula de rescisión es una institución peculiar del fútbol español sin equivalente en otros países. Explica su naturaleza jurídica (no es una penalización sino el precio de ejercitar el derecho a la libertad del deportista), cómo se negocia en el contrato, el procedimiento para hacer efectiva la rescisión (depósito ante la RFEF), la validez de las cláusulas anti-cláusula (restricciones a los clubes que compran al jugador rescindido), y los casos más resonantes de cláusulas ejecutadas en LaLiga.

5. **El agente de futbolistas: regulación y contrato**: los intermediarios en el fútbol han sido regulados de forma fluctuante en los últimos años. Explica el marco actual: la figura del agente FIFA y la licencia requerida, las normas de intermediación de la RFEF, el contrato de representación entre agente y deportista (duración máxima, exclusividad, comisión habitual), las limitaciones en la representación simultánea del deportista y del club en la misma transacción, y los conflictos de interés más frecuentes.

6. **El traspaso de jugadores: la estructura de la operación**: el traspaso de un futbolista es una operación jurídica compleja con múltiples partes. Define los documentos de la operación: el acuerdo de traspaso entre clubes (transfer agreement), el nuevo contrato con el deportista, el STC (Transfer Matching System) de FIFA para el registro internacional, el solidarity mechanism y la formación del jugador, y los derechos de reventa (sell-on clauses) que el club vendedor puede negociar.

7. **Resolución de conflictos en el deporte profesional**: cuando hay un conflicto entre el deportista y el club, hay varias vías de resolución. Define el sistema de resolución: la vía laboral ordinaria ante el Juzgado de lo Social para conflictos laborales, el Comité Jurisdiccional de la RFEF para asuntos disciplinarios, el Tribunal Administrativo del Deporte (TAD) para resoluciones de organismos deportivos, la FIFA DRC (Dispute Resolution Chamber) para conflictos internacionales, y el TAS (Tribunal Arbitral du Sport) como última instancia deportiva internacional.

8. **Derecho de formación y compensación por formación**: cuando un jugador formado en la cantera de un club ficha por otro, el club formador tiene derecho a una compensación. Explica el sistema de formación en el reglamento FIFA y de la RFEF: la indemnización por formación, el mecanismo de solidaridad en los traspasos internacionales, y la categorización de los clubes según la FIFA para el cálculo de las compensaciones.

9. **Dopaje: el marco jurídico y las consecuencias legales**: el dopaje tiene consecuencias jurídicas que van más allá de la sanción deportiva. Explica el marco: el Código Mundial Antidopaje, la AEPSAD (Agencia Española de Protección de la Salud en el Deporte), las sanciones deportivas (suspensión de 2 o 4 años), las consecuencias laborales (el club puede rescindir el contrato por dopaje), la responsabilidad penal en España (delito contra la salud pública) y las opciones de defensa del deportista acusado.

10. **El régimen fiscal especial del deportista: la Ley Beckham**: la Ley Beckham (el régimen especial de trabajadores desplazados) permite a los deportistas extranjeros que llegan a España tributar al tipo fijo del 24% durante seis años en lugar de la escala progresiva del IRPF. Explica los requisitos actuales (el deportista no puede haber residido en España en los diez años anteriores), el procedimiento de acogimiento, las actividades económicas compatibles, y por qué este régimen es uno de los principales argumentos que usan los grandes clubes españoles para fichar jugadores extranjeros de primer nivel.

Responde con referencias a normativas específicas, ejemplos de casos reales de conflictos y resoluciones en el deporte profesional español, y señala claramente cuándo cada situación requiere asesoramiento jurídico especializado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Marco jurídico de los contratos de deportistas profesionales y transacciones deportivas en España',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte en plataformas de entretenimiento digital',
                'description'      => 'Gestión de incidentes durante eventos en directo cuando miles de usuarios están conectados simultáneamente y cada minuto de caída tiene impacto inmediato.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Support y Site Reliability especializado en plataformas de entretenimiento digital con experiencia en la gestión de incidentes durante eventos masivos en directo (partidos de fútbol, conciertos en streaming, finales deportivas) donde la indisponibilidad del servicio durante un minuto puede generar miles de reclamaciones simultáneas.

Necesito diseñar el modelo de soporte y gestión de incidentes para una plataforma de streaming de eventos deportivos y musicales en directo que tiene eventos de alta audiencia cada semana y necesita estar preparada para los picos de tráfico y los fallos que ocurren siempre en los momentos más visibles.

Construye el modelo completo:

1. **La naturaleza del soporte en eventos en directo**: el soporte en una plataforma de entretenimiento en vivo es radicalmente diferente al soporte de un SaaS convencional. Explica las particularidades: la concentración temporal del volumen (el 80% de las incidencias del mes ocurren en el 20% del tiempo, que son los eventos), el contexto emocional del usuario (ha pagado para ver un partido que ocurre ahora y no puede volver a verlo), la exposición mediática (Twitter se llena de quejas en segundos), y la presión sobre el equipo de soporte que también siente la urgencia del evento.

2. **Planificación pre-evento: la guardia de soporte de alto impacto**: un evento de alta audiencia requiere preparación específica. Define el protocolo pre-evento: la revisión de la capacidad técnica con el equipo de ingeniería (¿está la infraestructura dimensionada para este pico?), la preparación del equipo de soporte (briefing sobre el evento, turno reforzado, acceso a los sistemas de monitorización), la preparación de las respuestas pre-aprobadas para las incidencias más frecuentes, y la coordinación con el equipo de comunicación para la gestión de redes sociales durante el evento.

3. **Monitorización en tiempo real durante el evento**: define el war room de monitorización para un evento en directo: los dashboards que muestran el volumen de usuarios conectados en tiempo real, la calidad de vídeo reportada por los clientes (buffering rate, startup failures, quality switches), el volumen de tickets de soporte entrantes por minuto como indicador de problemas, y las alertas automáticas que avisan al equipo de ingeniería cuando los indicadores superan los umbrales de alarma.

4. **Clasificación y escalado de incidentes en tiempo real**: cuando ocurre un fallo durante un evento en directo, hay segundos para decidir si escalar. Define el árbol de decisión de escalado: criterios para declarar un incidente P0 (más del 10% de los usuarios no pueden reproducir el vídeo), quién se notifica en ese momento (CTO, comunicación, soporte), y el proceso de war room para la gestión del incidente con roles definidos (incident commander, comunicación interna, comunicación externa, ingeniería).

5. **Comunicación con los usuarios durante un incidente**: cuando el servicio falla durante un partido, la comunicación proactiva es la diferencia entre la gestión correcta y la crisis reputacional. Define la estrategia de comunicación: el banner en la app y la web anunciando el problema antes de que el usuario lo reporte, los mensajes en redes sociales con actualizaciones cada diez minutos, el tono adecuado (honesto y empático, sin prometer lo que no se sabe), y cómo la comunicación proactiva reduce el volumen de contactos de soporte en hasta un 60%.

6. **Gestión del volumen masivo de contactos durante un incidente**: cuando hay un fallo generalizado, el equipo de soporte recibe cientos o miles de contactos en minutos. Define el protocolo de gestión de volumen extremo: la activación de respuestas automáticas que confirman el problema y dan una ETA de resolución, el pausado de los tickets individuales hasta la resolución del incidente general, la creación de una respuesta masiva a todos los usuarios afectados, y cómo evitar que el equipo de soporte individual responda tickets cuando el problema es sistémico y no tiene solución a nivel de usuario.

7. **Post-incidente: compensación y recuperación de la relación**: cuando el servicio falla durante un evento por el que el usuario ha pagado, la compensación es necesaria. Define la política de compensación: créditos o extensiones de suscripción automáticas para usuarios afectados, el umbral de impacto que activa la compensación automática vs. la que requiere reclamación individual, y cómo comunicar la compensación de forma que el usuario perciba que la empresa asume la responsabilidad y valora su tiempo.

8. **Análisis post-mortem y mejora continua**: cada incidente durante un evento en directo debe terminar en un análisis detallado. Define el proceso de post-mortem: la reconstrucción cronológica de lo que pasó y por qué (root cause analysis sin buscar culpables), las acciones de mejora técnica para evitar que se repita, las mejoras al proceso de soporte e incidentes, y cómo documentar el conocimiento para que el equipo esté mejor preparado el próximo evento.

9. **Self-service y reducción del contacto evitable**: muchos usuarios contactan con soporte por problemas que podrían resolver solos. Define la estrategia de deflexión: los troubleshooting flows en la app que guían al usuario a través de los problemas más frecuentes (reiniciar la app, verificar la conexión, cambiar de dispositivo), las FAQ dinámicas que se actualizan con los problemas más reportados en tiempo real, y los chatbots que pueden resolver automáticamente las gestiones más frecuentes (reembolsos, cambio de contraseña, gestión de suscripción).

10. **KPIs del soporte de entretenimiento digital**: define el cuadro de mando específico para este entorno: CSAT durante eventos de alta audiencia vs. días normales (para identificar si los problemas del evento están afectando a la satisfacción), tiempo de primera respuesta durante incidentes (el SLA de crisis), tasa de deflexión (porcentaje de contactos resueltos sin agente humano), y el impacto de los incidentes en la tasa de cancelación de suscripciones en los días siguientes al evento.

Responde con protocolos concretos para cada escenario, ejemplos de plataformas de entretenimiento digital que han gestionado bien o mal los incidentes durante eventos masivos, y las lecciones que se pueden aprender de cada caso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestión de incidentes y soporte durante eventos masivos en directo en plataformas de streaming',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelance en la economía del creador deportivo',
                'description'      => 'El atleta o experto deportivo que construye negocio digital alrededor de su audiencia con cursos, membresías y modelos de monetización del contenido.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en la economía del creador de contenido especializado en el nicho deportivo, con experiencia asesorando a deportistas, entrenadores, analistas y periodistas deportivos que quieren construir un negocio digital sostenible alrededor de su conocimiento y su audiencia.

Soy un exjugador de fútbol semiprofesional reconvertido en entrenador con licencia UEFA B, tengo una comunidad de tres mil seguidores en Instagram donde comparto análisis tácticos y consejos de entrenamiento, y quiero construir un negocio digital que me permita vivir de mi pasión por el fútbol sin depender de un único club que me contrate.

Guíame a través de la construcción del negocio:

1. **El nicho del creador deportivo: oportunidad y mercado**: el contenido deportivo tiene una audiencia masiva, pero también mucha competencia. Define los nichos con mayor oportunidad para un creador independiente: el análisis táctico profundo (para fans sofisticados que quieren entender el juego como un entrenador), el entrenamiento de habilidades específicas (para jugadores de base y amateurs), el camino del entrenador (para aspirantes a licencia UEFA), y la gestión de equipos de fútbol amateur (el entrenador del equipo del barrio que quiere mejorar). Cuál encaja mejor con el perfil descrito.

2. **Construcción de audiencia con propósito**: tener tres mil seguidores en Instagram es un buen punto de partida, pero la plataforma controla el acceso a esa audiencia. Define la estrategia de construcción de audiencia propia: cómo usar Instagram y TikTok para atraer audiencia nueva y convertirla en suscriptores de email o miembros de una comunidad propia, el contenido que mejor funciona para cada plataforma (análisis tácticos breves en Reels, análisis largos en YouTube, conversación en Twitter/X), y la cadencia de publicación que permite crecer sin quemarse.

3. **La newsletter como activo de audiencia propia**: la newsletter es el activo de distribución más valioso porque no depende de ningún algoritmo. Define cómo lanzar una newsletter semanal de análisis táctico de fútbol: el nombre y la propuesta de valor, cómo convertir seguidores de Instagram en suscriptores de email (el lead magnet gratuito, el formulario en la bio), el formato de la newsletter que equilibra análisis en profundidad con accesibilidad, y las métricas de éxito (tasa de apertura, tasa de clics, crecimiento semanal).

4. **Primer producto: el curso online de análisis táctico**: el primer producto digital que puede lanzar un entrenador-creador es un curso online. Define el diseño del curso: el problema concreto que resuelve (aprender a analizar partidos de fútbol como lo hace un entrenador profesional), la estructura de los módulos y lecciones, el formato del contenido (vídeo principal con análisis en pizarra táctica, análisis de partidos reales), la plataforma de alojamiento (Teachable, Kajabi, Hotmart), el precio orientativo, y la estrategia de lanzamiento con la audiencia existente.

5. **Comunidad de pago: el modelo de membresía**: el modelo de membresía (una suscripción mensual o anual que da acceso a contenido exclusivo y a la comunidad) es el más adecuado para un creador de contenido deportivo. Define el diseño de la membresía: qué incluye (análisis tácticos semanales exclusivos, sesiones de preguntas en directo, acceso al grupo privado donde se debate el fútbol), el precio por niveles, las plataformas disponibles (Patreon, Circle, Substack con suscripción de pago), y cómo escalar la membresía sin que el creador pierda calidad por intentar atender a demasiados miembros.

6. **Contenido de YouTube como motor de descubrimiento**: YouTube es la plataforma más adecuada para análisis tácticos en profundidad y tiene capacidad de búsqueda orgánica que Instagram no tiene. Define la estrategia de YouTube: el tipo de vídeo que funciona en el canal táctico (análisis de partidos de Champions, análisis del estilo de juego de los mejores equipos, explicación de los sistemas más usados), la optimización SEO de los títulos y descripciones, y cómo YouTube sirve como canal de captación de audiencia para los productos de pago.

7. **Monetización a través de patrocinios y colaboraciones**: con una audiencia de nicho pero muy comprometida, los patrocinios pueden ser más rentables que con audiencias masivas pero poco engaged. Define la estrategia de patrocinio para un creador táctico de fútbol: el perfil de marcas con mayor afinidad (software de análisis táctico como Wyscout o InStat, marcas de material deportivo, plataformas de entrenamiento), cómo construir el media kit, el precio orientativo para integraciones en newsletter y vídeos con una audiencia de diez mil personas, y cómo gestionar los patrocinios sin perder la credibilidad con la audiencia.

8. **Servicios personalizados de alto valor**: además del contenido escalable, un entrenador-creador puede ofrecer servicios uno a uno o en grupo pequeño. Define la cartera de servicios: la consultoría de análisis de vídeo para entrenadores amateur (un entrenador te manda el vídeo del partido y recibes un análisis táctico personalizado), los programas de entrenamiento de habilidades técnicas en línea para jugadores, y las formaciones específicas para grupos de entrenadores. Cómo posicionar estos servicios y fijar el precio para que sean rentables sin consumir todo el tiempo del creador.

9. **Crecimiento del negocio: de creador individual a marca**: llega un momento en que el creador no puede hacer todo solo. Define cuándo y cómo escalar: la contratación de un editor de vídeo que multiplica la producción sin multiplicar el tiempo del creador, la colaboración con otros creadores del nicho para ampliar el alcance, y la transición de una marca personal (el nombre del creador) a una marca con identidad propia que puede crecer más allá del creador individual.

10. **Fiscalidad y estructura legal del creador de contenido deportivo**: un creador que genera ingresos de múltiples fuentes (cursos, membresías, patrocinios, servicios) necesita una estructura fiscal adecuada. Define las opciones para un creador en España: el régimen de autónomo con estimación directa simplificada, las obligaciones fiscales específicas de los ingresos de plataformas internacionales (Patreon, Teachable, YouTube), cuándo tiene sentido constituir una SL, y cómo gestionar el IVA de ventas a clientes de otros países de la UE (el régimen OSS).

Responde con ejemplos concretos de creadores deportivos que han construido negocios exitosos en este nicho, las plataformas y herramientas específicas más recomendadas, y los errores que cometen los creadores al monetizar demasiado pronto antes de construir suficiente audiencia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construcción de negocio digital para deportistas y expertos deportivos en la economía del creador',
                'vote_score'       => 37,
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
