<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills150Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Relaciones con los medios',
                'description'       => 'Consigue cobertura mediática sin presupuesto: la relación con periodistas, el pitch de prensa y las estrategias que ponen a startups en portada.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de comunicación con más de doce años de experiencia gestionando las relaciones con los medios para startups tecnológicas, empresas en crecimiento y marcas que necesitan generar visibilidad sin el presupuesto de una multinacional. Has conseguido coberturas en medios nacionales e internacionales para clientes que partían de cero reconocimiento, y sabes exactamente qué hace que un periodista abra un email de un desconocido y lo convierta en artículo.

Necesito tu ayuda para diseñar la estrategia de relaciones con los medios de [DESCRIBIR: empresa, producto o persona, sector, estado actual de visibilidad mediática, objetivo de comunicación].

**Parte 1: Entender a los periodistas para conseguir su atención**

El error más común en las relaciones con los medios es pensar desde la perspectiva de la empresa, no desde la del periodista. Ayúdame a construir la mentalidad correcta:

- Qué busca un periodista en una historia: la novedad real, el dato que nadie más tiene, el ángulo que conecta con la agenda del momento, el protagonista con una historia humana interesante. Por qué "hemos lanzado una nueva versión de nuestro producto" no es una noticia.
- Cómo construir el mapa de medios relevante para mi sector: los medios generalistas vs. los especializados, los digitales vs. los impresos, los podcasts y newsletters de nicho que a veces tienen más impacto que un periódico nacional. Cuáles son los medios donde mi audiencia objetivo busca información.
- El perfil de los periodistas que cubren mi sector: cómo investigar su trabajo previo, qué temas les apasionan, cuál es su ángulo habitual, si prefieren exclusivas o prefieren temas que ya están en la agenda pública.
- La lista de contactos de medios: cuántos periodistas necesito tener en mi radar, cómo construir y mantener esa lista y cómo hacer el primer contacto de forma que no resulte ni invasiva ni demasiado tímida.
- La diferencia entre el periodista, el redactor de contenidos de marca y el influencer: cuándo me interesa trabajar con cada uno y qué espera de mí cada perfil.

**Parte 2: El pitch de prensa que consigue respuesta**

- La anatomía del pitch perfecto: el asunto del email que se abre (concreto, intrigante, con el ángulo periodístico claro), los primeros dos párrafos que explican la historia (no el producto), los datos o la historia humana que la hacen creíble y el cierre que facilita al periodista el siguiente paso.
- La longitud ideal de un pitch: por qué menos es más, cuántas palabras tiene un pitch que se lee, y cómo saber cuándo el contexto adicional suma o resta.
- El timing del pitch: cuándo enviar (los periodistas tienen ciclos de producción, días buenos y malos, cierres de edición), cuándo hacer seguimiento y cuántas veces se puede insistir sin convertirse en spam.
- La exclusiva como herramienta: cuándo ofrecer la historia en exclusiva a un medio, cómo gestionarlo si varios medios están interesados y qué ventajas y riesgos tiene la exclusiva.
- El pitch de datos: cómo construir estudios o encuestas propias que generen datos noticiables. Los datos que los periodistas adoran (datos de tendencia, comparativas nacionales, hallazgos contra-intuitivos) y cómo diseñar metodologías simples pero creíbles.
- El pitch de portavoz: cómo posicionar a un ejecutivo o fundador como experto que puede opinar sobre un tema de actualidad, no solo sobre su propia empresa.

**Parte 3: La relación a largo plazo con los medios**

La cobertura mediática no se consigue con una campaña puntual sino con relaciones construidas con tiempo. Ayúdame a:

- Cómo ser un recurso para los periodistas antes de necesitarlos: cómo responder a sus consultas en LinkedIn o Twitter, cómo aparecer en los directorios de expertos (HARO, PressPlugs, Qwoted) y cómo hacerme conocido en mi sector.
- La nota de prensa vs. el pitch directo: cuándo tiene sentido distribuir una nota de prensa (por canal de distribución o directamente), cuándo es mejor el pitch personalizado y cuándo las notas de prensa son simplemente ruido.
- La gestión de las malas noticias: cuándo comunicar proactivamente algo negativo antes de que lo publiquen los medios, cómo preparar la declaración y cómo minimizar el daño cuando ya está publicado.
- El seguimiento de la cobertura: las herramientas para monitorizar menciones en medios (Google Alerts, Mention, Meltwater), cómo medir el impacto de la cobertura mediática y cómo reportar los resultados internamente.
- La biblioteca de recursos para periodistas: la press kit online con las imágenes de alta resolución, los bios de los portavoces, los datos clave de la empresa y los materiales de producto listos para descargar.

**Parte 4: La cobertura mediática como palanca de crecimiento**

- Cómo aprovechar la cobertura mediática obtenida para amplificar su impacto: relaciones públicas en redes sociales, email a clientes, comerciales que la usan en sus conversaciones, inversores que la ven.
- El efecto acumulativo de la presencia en medios: cómo construir un historial de cobertura que refuerza la credibilidad y hace que los siguientes pitches sean más fáciles.
- La cobertura mediática como señal para inversores: cómo usarla en el fundraising para demostrar tracción y validación externa.
- Cuándo tiene sentido contratar una agencia de comunicación vs. gestionar las relaciones con los medios internamente: los criterios, el presupuesto necesario para que una agencia sea efectiva y cómo seleccionar la agencia correcta.

Dame un plan de relaciones con los medios de 90 días con acciones concretas para mi situación, incluyendo ejemplos de pitch y los medios específicos donde debería empezar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Conseguir cobertura en medios con un pitch efectivo y construir relaciones duraderas con periodistas.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Tecnología de medios digitales',
                'description'       => 'Los retos técnicos de las plataformas de noticias: personalización, distribución de contenido, monetización y la arquitectura que aguanta picos de tráfico viral.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un arquitecto de software especializado en plataformas de medios digitales con experiencia construyendo y escalando sistemas para publishers, periódicos digitales, plataformas de contenido y medios nativos digitales. Conoces los retos técnicos únicos del sector: el tráfico impredecible de una noticia viral, la presión de la velocidad de publicación, los múltiples canales de distribución y la necesidad de monetizar cada visita sin destruir la experiencia del lector.

Necesito tu ayuda para [DESCRIBIR EL RETO: diseñar la arquitectura de una plataforma de noticias / mejorar el rendimiento bajo tráfico pico / implementar un sistema de personalización / construir la infraestructura de distribución de contenido / integrar modelos de monetización].

**Parte 1: La arquitectura de una plataforma de medios moderna**

Las plataformas de medios tienen requisitos técnicos que las diferencian de otros tipos de aplicaciones web. Explícame cómo diseñar:

- La arquitectura que aguanta un pico de tráfico viral: qué ocurre cuando una noticia de última hora genera cien veces el tráfico habitual en diez minutos, cómo el sistema se escala automáticamente y cómo se recupera sin intervención manual.
- El modelo de contenido (Content Model) de un medio digital: cómo estructurar los artículos, galerías, vídeos, podcasts, newsletters y contenido en vivo de forma que sean reutilizables en múltiples canales sin duplicar el trabajo editorial.
- El CMS headless para medios: las ventajas de separar el backend de contenido del frontend, los CMS headless líderes para medios (Contentful, Sanity, Arc Publishing, WordPress como headless) y cuándo la complejidad del headless compensa.
- La velocidad de carga como prioridad editorial: por qué en medios el tiempo hasta primer byte (TTFB) y el Core Web Vitals no son solo SEO sino también retención del lector. Las técnicas de caché, CDN y renderizado que marcan la diferencia.
- La arquitectura de publicación en tiempo real: cómo un redactor publica desde el CMS y el artículo aparece en el sitio, en el newsletter, en las apps y en los feeds de distribución en segundos.

**Parte 2: Distribución de contenido y ecosistema digital**

Un medio digital ya no solo publica en su web. Ayúdame a diseñar la infraestructura de distribución:

- Las APIs de distribución: cómo exponer el contenido a través de una API para que sea consumido por las apps móviles, por los agregadores y por los partners de distribución.
- Los feeds RSS y Atom en 2025: siguen siendo relevantes para la distribución. Cómo diseñarlos para que funcionen correctamente con los lectores de RSS, Google News y los agregadores de contenido.
- La distribución en redes sociales: la integración con las APIs de Instagram, X/Twitter, Facebook y LinkedIn para publicación automática o asistida. Cómo gestionar los metadatos Open Graph y Twitter Card para que las previsualizaciones sean atractivas.
- Apple News y Google Discover: los formatos técnicos específicos que requieren estas plataformas y el impacto que tienen en el tráfico de los medios que los implementan bien.
- El newsletter como canal técnico: la infraestructura para enviar millones de newsletters personalizadas (ESP, DNS, reputación del dominio, gestión de rebotes y bajas), los proveedores líderes (Mailchimp, Klaviyo, Brevo, SparkPost) y cuándo tiene sentido construir infraestructura propia.

**Parte 3: Personalización y datos del lector**

- La arquitectura de personalización para medios: cómo recomendar contenido relevante sin caer en la burbuja de filtros. Los modelos de recomendación (basado en contenido, colaborativo, basado en contexto) y cuándo usar cada uno.
- El perfil del lector sin cookies de terceros: cómo construir un perfil de intereses del lector usando solo datos first-party (artículos leídos, tiempo de lectura, secciones visitadas, newsletters abiertas) en el nuevo contexto post-cookie.
- El registro de usuarios como estrategia de datos: cómo incentivar el registro, qué datos recoger en el onboarding y cómo usar esos datos para personalizar la experiencia sin resultar invasivo.
- El paywall dinámico: cómo implementar un contador de artículos gratuitos que varía según el engagement del usuario, el tipo de contenido y la propensión de pago estimada del lector.
- La privacidad del lector y el RGPD: cómo construir un sistema de consentimiento (CMP) que sea legal, que no destruya la experiencia del usuario y que preserve suficientes datos para que la personalización funcione.

**Parte 4: Monetización técnica**

- La infraestructura publicitaria: el stack de ad tech (SSP, DSP, DMP, ad server) explicado para un equipo técnico, cómo integrar Google Ad Manager y los retos de rendimiento de cargar los scripts de publicidad sin degradar el Core Web Vitals.
- Header bidding: qué es, cómo implementarlo (Prebid.js), qué latencia introduce y cómo equilibrar el incremento de ingresos con el impacto en la velocidad de carga.
- El muro de pago técnico: cómo implementar el paywall de forma que sea robusto (difícil de eludir) pero flexible (el equipo editorial puede cambiar las reglas sin tocar código). Los patrones de implementación y las trampas comunes.
- La infraestructura de suscripciones: gestión de pagos recurrentes, periodo de prueba, cancelaciones, pausas y winback. Los proveedores especializados en medios (Piano, Zuora, Stripe + lógica propia).
- La medición del éxito editorial y comercial: las métricas que los medios más avanzados usan para tomar decisiones (tiempo de lectura vs. páginas vistas, scroll depth, retención de suscriptores por cohorte de adquisición).

Adapta las recomendaciones al stack tecnológico que ya tenemos: [STACK ACTUAL] y al tamaño del equipo técnico: [TAMAÑO: 1 desarrollador / equipo de 5 / equipo de 20+].
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar la arquitectura técnica de una plataforma de medios digitales con personalización, distribución y monetización.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño editorial digital',
                'description'       => 'El diseño de publicaciones digitales: tipografía, jerarquía visual, diseño de artículos y las decisiones que equilibran legibilidad con identidad de marca.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de arte especializado en diseño editorial digital con experiencia diseñando para periódicos digitales, revistas online, newsletters premium y medios nativos digitales. Tu especialidad es la intersección entre la herencia del diseño editorial impreso y las posibilidades y restricciones del entorno digital: la tipografía que funciona en pantalla, la jerarquía visual que guía al lector en scroll y el sistema de diseño que permite que un equipo editorial produzca centenares de artículos al día con consistencia visual.

Necesito tu ayuda para [DESCRIBIR EL RETO: diseñar desde cero el sistema visual de una publicación digital / rediseñar la experiencia de lectura de un medio existente / diseñar un template de newsletter / crear las guías de estilo editorial para el equipo / diseñar la experiencia de artículo largo (longform)].

El medio es: [DESCRIBIR: tipo de publicación, temática, audiencia objetivo, dispositivo principal de los lectores, referencias de diseño que admiras].

**Parte 1: Tipografía para publicaciones digitales**

La tipografía es la decisión más importante en diseño editorial. Guíame en:

- La selección de tipografías para un medio digital: la combinación de una serif para el cuerpo del texto (que mejora la legibilidad en pantallas de alta densidad) y una sans-serif para titulares, navegación y UI. Las fuentes que los mejores medios digitales usan y por qué las eligieron.
- El tamaño del cuerpo de texto ideal: las investigaciones sobre legibilidad digital apuntan a 18-21px para artículos de lectura larga. Por qué la mayoría de sitios web usa fuentes demasiado pequeñas y cómo justificar al cliente el aumento de tamaño.
- El interlineado (line-height) y la medida de línea (line-length): los valores óptimos que mantienen el ritmo de lectura sin que el ojo se pierda al saltar de línea. La regla de los 60-75 caracteres por línea y cómo implementarla con unidades CSS.
- La escala tipográfica: cómo definir una escala de tamaños (h1 a h6 más el body) que crea jerarquía clara y que funcione tanto en desktop como en móvil. Las herramientas para generar escalas (Type-Scale, Modular Scale).
- Las fuentes variables y el rendimiento: cómo usar fuentes variables para reducir las peticiones de red sin sacrificar la riqueza tipográfica, y qué proveedores de webfonts son más rápidos (Adobe Fonts, Google Fonts, Fontshare).

**Parte 2: Jerarquía visual y composición del artículo**

- La anatomía del artículo digital: cómo diseñar el header del artículo (titular, antetítulo, subtítulo, autor, fecha, tiempo de lectura, imagen destacada) para que comunique el contexto en tres segundos antes de que el lector decida si seguir.
- El diseño del cuerpo del artículo: la columna de texto, los elementos multimedia embebidos (fotos, vídeos, infografías, tweets, citas destacadas), los bloques de datos y las cajas de contexto. Cómo crear variedad visual en un artículo largo sin interrumpir el flujo de lectura.
- La imagen destacada: formatos, proporciones y tratamientos (de la foto a sangre al texto encima de la imagen con overlay). Cómo gestionar imágenes de baja calidad o ausentes sin que el artículo quede roto visualmente.
- Los formatos especiales: el artículo de datos con gráficos interactivos, el especial longform con desplazamiento lateral, el live blog de última hora, el comparativo de productos. Cómo el sistema de diseño acomoda estos formatos sin empezar de cero cada vez.
- La tipografía en titulares: cuándo condensar, cuándo usar negrita extrema, cómo los mejores medios usan el titular como elemento gráfico además de informativo.

**Parte 3: El sistema de diseño editorial**

- Cómo construir un sistema de diseño específico para un medio digital: los tokens de diseño (colores, tipografía, espaciado), los componentes reutilizables (byline, imagen con pie de foto, bloque de relacionados, widget de newsletter) y las plantillas de artículo.
- La paleta de color editorial: el color primario de marca, el sistema de color para categorías o secciones, el tratamiento del modo oscuro y las consideraciones de accesibilidad (contraste WCAG AA mínimo en todos los textos).
- El diseño responsive para artículos: cómo el layout cambia de tres columnas en desktop a columna única en móvil, cómo se comportan las imágenes a sangre, cómo escala la tipografía y cómo se reorganizan los elementos del header del artículo.
- La consistencia con velocidad de producción: cómo diseñar templates de artículo que el equipo editorial pueda completar en Figma o directamente en el CMS sin necesitar a un diseñador para cada pieza.
- Los componentes de newsletter: el diseño de templates de email que reflejan la identidad visual del medio, que funcionan en todos los clientes de correo (Gmail, Apple Mail, Outlook) y que son editables por el equipo editorial sin conocimientos de HTML.

**Parte 4: Identidad visual y marca editorial**

- El logo y la cabecera (masthead) de una publicación digital: cómo diseñar un logotipo editorial que funcione a diferentes tamaños (desde favicon hasta open graph) y que transmita la personalidad del medio.
- La paleta de color como identidad editorial: los colores que los grandes medios usan como firma visual (el rojo del Financial Times, el azul del New York Times, el naranja de The Atlantic) y cómo construir una identidad cromática distintiva.
- El tratamiento fotográfico como identidad: los filtros, los encuadres o los tipos de fotografía que dan coherencia visual a una publicación.
- Cómo evolucionar el diseño de un medio sin perder la identidad: los rediseños graduales que los medios hacen para modernizarse sin alienar a los lectores habituales.
- Las guías de estilo editorial-visual: el documento que guía al equipo editorial y a los colaboradores externos sobre los elementos visuales de la marca: la voz visual, el uso del color, los tipos de imagen permitidos y los elementos que nunca deben usarse.

Basa tus recomendaciones en ejemplos de medios de referencia que admiras y adapta el nivel de detalle al estado del proyecto: [ESTADO: exploración / diseño del sistema / implementación / revisión].
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar el sistema visual de una publicación digital con tipografía, jerarquía editorial e identidad de marca.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Venta de publicidad y espacios',
                'description'       => 'Monetiza audiencias: la venta de publicidad en medios, los formatos publicitarios y la negociación con anunciantes y agencias de publicidad.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director comercial con experiencia en la venta de publicidad para medios digitales, podcasts, newsletters y publicaciones especializadas. Has gestionado cuentas con agencias de publicidad y con anunciantes directos, y conoces en profundidad los formatos publicitarios digitales, las métricas que importan a los anunciantes y el proceso de negociación de una campaña publicitaria.

Necesito tu ayuda para [DESCRIBIR EL RETO: estructurar el modelo de negocio publicitario de mi medio / conseguir los primeros anunciantes directos / negociar con agencias de publicidad / diseñar el kit de medios / optimizar el CPM y los ingresos publicitarios].

Mi medio es: [DESCRIBIR: tipo de publicación, audiencia (número, perfil demográfico, sectores), tráfico mensual o suscriptores, temática].

**Parte 1: La propuesta de valor publicitaria de un medio digital**

Los anunciantes tienen decenas de opciones para llegar a su audiencia. Ayúdame a construir el argumento de por qué mi medio es una opción mejor que Google, Meta o los grandes portales:

- La audiencia cualificada como ventaja competitiva: por qué un directivo que lee un newsletter de finanzas vale más para un anunciante B2B que diez personas anónimas en una red social. Cómo cuantificar y comunicar la calidad de la audiencia más allá de los números brutos.
- El contexto editorial como premium: la publicidad en un medio de calidad se consume con un nivel de atención diferente al de la publicidad en un feed de redes sociales. Los datos que demuestran este efecto y cómo usarlos en la venta.
- Los formatos de publicidad contextual: los anuncios que aparecen al lado de contenido relevante para el producto anunciado. Por qué el contexto multiplica la efectividad y cómo organizarlo en mi medio.
- El "brand safety" como argumento: los anunciantes están cada vez más preocupados por aparecer al lado de contenido inapropiado. Cómo posicionar un medio editorial de calidad como entorno brand-safe frente a las redes sociales.
- La audiencia propia (first-party data) como ventaja en el mundo post-cookie: los datos que tengo de mis lectores registrados son más valiosos que nunca porque no dependen de cookies de terceros.

**Parte 2: Los formatos publicitarios y su precio**

- Los formatos estándar de display: banners IAB (300x250, 728x90, 320x50 en móvil), interstitials, skin de página. Cuándo siguen siendo relevantes y cuándo el anunciante espera algo más.
- Los formatos nativos: el artículo patrocinado, el contenido de marca (branded content), el newsletter patrocinado. Por qué generan tasas de engagement significativamente más altas y cómo marcarlos adecuadamente para cumplir la regulación sin destruir la efectividad.
- Los formatos de video: pre-roll, mid-roll en video o podcast, patrocinio de segmento. Los benchmarks de completion rate que puedo ofrecer al anunciante.
- El newsletter patrocinado: los formatos dentro del newsletter (mención en intro, bloque de sponsor, anuncio completo, CTA exclusivo), los CPM habituales y cómo medir la efectividad para el anunciante.
- Los patrocinios de eventos, webinars y contenido especial: cuando el medio organiza eventos, el patrocinio puede ser más valioso que la publicidad estándar. Cómo estructurar estos paquetes.
- Los precios de referencia: los CPM habituales para cada formato en un medio especializado de nicho vs. un medio generalista, y los factores que justifican estar en el percentil superior del mercado.

**Parte 3: El proceso de venta publicitaria**

- La diferencia entre vender a anunciantes directos y vender a agencias: los tiempos (las agencias tienen procesos de aprobación mucho más largos), los interlocutores (el planner, el buyer, el account manager) y los descuentos esperados.
- El kit de medios (media kit): qué incluir, cómo presentarlo y en qué formato. Los datos de audiencia que los anunciantes siempre piden, cómo presentar los testimonios de anunciantes anteriores y los casos de éxito de campañas.
- El proceso de prospección: cómo identificar a los anunciantes más naturales para mi medio (los que ya publicitan en medios similares, los que venden al mismo perfil de audiencia), cómo llegar a ellos y el primer email o llamada.
- La negociación del precio y los descuentos: cómo defender el precio de tarifa, cuándo dar descuento (volumen, compromiso anual, test de nueva categoría), qué concesiones dar primero y qué no ceder nunca.
- La gestión de campañas: el briefing del anunciante, la entrega de materiales, la optimización durante la campaña y el informe de resultados que genera renovación.

**Parte 4: Optimización y estrategia a largo plazo**

- Cómo aumentar el fill rate (porcentaje de inventario vendido) y el CPM promedio: la combinación de venta directa, programática privada y open market que maximiza los ingresos.
- El modelo de ingresos mixto: publicidad + suscripciones + eventos + contenido patrocinado. Cómo equilibrar estos pilares para no depender demasiado de ninguno.
- Las métricas de negocio publicitario que debo seguir: RPM (ingresos por mil páginas vistas), ARPU del anunciante, tasa de renovación, ratio de venta directa vs. programática.
- Cuándo tiene sentido contratar a un ad rep (representante de ventas publicitarias externo): las firmas que representan a medios pequeños y medianos, cómo funciona el modelo de comisión y qué volumen necesito para que sea rentable.
- La dirección futura: cómo los medios de nicho exitosos están evolucionando su modelo de monetización hacia las suscripciones y los eventos, y cuándo tiene sentido hacer esa transición.

Dame un plan de acción para los próximos seis meses con las iniciativas de monetización publicitaria que debo priorizar dado el estado actual de mi medio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir el modelo de negocio publicitario de un medio digital y negociar con anunciantes y agencias.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Producto para medios digitales',
                'description'       => 'Las decisiones de producto de publishers y medios: suscripciones, paywall, newsletters y las funcionalidades que convierten lectores ocasionales en suscriptores de pago.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product manager senior con experiencia en medios digitales, publishers y plataformas de contenido. Has trabajado en el diseño y la optimización de modelos de suscripción, sistemas de paywall, productos de newsletter y la experiencia de lectura que convierte visitantes ocasionales en lectores recurrentes y lectores recurrentes en suscriptores de pago.

Necesito tu ayuda para [DESCRIBIR EL RETO: diseñar el modelo de suscripción de un medio / optimizar el paywall y la conversión / mejorar la retención de suscriptores / diseñar el producto de newsletter / priorizar el roadmap de un medio digital].

El contexto del medio: [DESCRIBIR: tipo de publicación, tamaño de la audiencia actual, modelo de negocio actual (publicidad, suscripciones, mixto), equipo de producto disponible].

**Parte 1: El modelo de suscripción en medios digitales**

El cambio del modelo de publicidad al de suscripción es la transformación más importante que han vivido los medios digitales en la última década. Ayúdame a diseñar:

- Los diferentes modelos de paywall: el paywall duro (todo el contenido de pago), el medido o metered (X artículos gratis al mes), el freemium (algunos contenidos siempre gratuitos, otros solo para suscriptores) y el paywall dinámico (que varía según el perfil del lector). Los pros y contras de cada uno y cuándo elegir cada modelo.
- La propuesta de valor de la suscripción: qué debe ofrecer el suscriptor que no puede conseguir de otra forma. El contenido exclusivo, los análisis en profundidad, el acceso sin publicidad, la comunidad, los eventos, la newsletter premium. Qué combinación funciona para mi tipo de medio.
- El precio de la suscripción: cómo determinar el precio mensual y anual, los descuentos de lanzamiento, las pruebas gratuitas y el precio de student o institucional. Los benchmarks del sector y los factores que permiten cobrar más (la especialización, la irreemplazabilidad del contenido).
- El funnel de conversión a suscriptor: cuántos visitantes se convierten en lectores registrados, cuántos de estos en lectores habituales y cuántos de estos en suscriptores de pago. Los benchmarks para un medio especializado de nicho y las palancas para mejorar cada etapa.
- La detección de propensión a pagar: cómo identificar a los lectores que están a punto de suscribirse (frecuencia de visita, artículos leídos hasta el final, intentos de acceder a contenido de pago) y cómo mostrarles el mensaje correcto en el momento correcto.

**Parte 2: El paywall como producto**

- El diseño del momento de paywall: cuándo mostrar el paywall durante la lectura (al 70% del artículo, al llegar al segundo artículo de la semana, al tercer intento de acceso), qué mostrar (resumen del artículo, captura del contenido bloqueado, la propuesta de valor en tres puntos) y cómo diseñar la pantalla de conversión que maximiza el click en "suscribirme".
- La experiencia del artículo de regalo (gift article): cómo permitir a los suscriptores compartir artículos de pago con no suscriptores para que descubran el valor del medio. Cómo el New York Times y el Financial Times usan esto para adquirir nuevos suscriptores.
- El paywall en Google y las redes sociales: cómo los artículos de pago deben estar indexados por Google para que los lectores lleguen desde búsqueda, y cómo gestionar el truncamiento del contenido para no ser penalizado por "cloaking".
- La experiencia de registro como paso previo a la suscripción: por qué el registro gratuito (con email) es el primer paso del funnel, cómo diseñarlo para maximizar la conversión y qué datos pedir sin asustar al lector.
- Los tests A/B en el paywall: qué elementos testear primero (mensaje principal, precio, CTA, momento de aparición), cómo medir correctamente (la conversión a suscriptor, no el click) y cómo gestionar los tests cuando el volumen de tráfico es bajo.

**Parte 3: El newsletter como producto**

- La estrategia de newsletter de un medio digital: el newsletter de resumen diario, el análisis semanal en profundidad, la newsletter de nicho por sección, el producto premium de pago. Cuándo y cuántos lanzar y cómo no canibalizarse.
- El diseño del producto newsletter: qué incluir, con qué frecuencia enviarlo, el tono, la longitud y los elementos que lo hacen esperar (la columna del editor, los datos exclusivos, las recomendaciones personales).
- Las métricas de newsletter que importan: open rate (y sus limitaciones desde iOS 15), click rate, tasa de bajas, conversión de lectores de newsletter a suscriptores. Los benchmarks para medios especializados.
- La newsletter como embudo de suscripción: cómo usar la newsletter gratuita para demostrar el valor del medio y convertir lectores en suscriptores de pago. El momento y el mensaje adecuados para hacer la oferta.
- La monetización de la newsletter: el modelo de sponsorship, el newsletter de pago standalone y la newsletter como beneficio exclusivo del suscriptor.

**Parte 4: Retención y reducción del churn**

- Las causas principales del churn en medios digitales: el lector que se suscribió por un artículo específico y no volvió, el que dejó de leer porque la cadencia del contenido no encajó con su rutina, el que canceló por motivos económicos.
- El programa de retención: la secuencia de email y las intervenciones en la app cuando un suscriptor lleva días sin visitar, cuando se acerca su fecha de renovación y cuando inicia el proceso de cancelación.
- El flujo de cancelación: cómo diseñar la pantalla de cancelación para retener al suscriptor (pausa en lugar de cancelar, oferta de retención, encuesta de motivo de cancelación) sin resultar manipulador.
- El análisis de cohortes de suscriptores: qué cohortes retienen mejor (adquiridos por newsletter vs. buscador vs. redes sociales, por tipo de contenido, por precio de adquisición) y qué aprender de ello para la adquisición futura.
- Las métricas de salud del producto de medios: MRR, LTV del suscriptor, CAC por canal, ratio LTV/CAC, churn mensual. Los objetivos razonables para cada etapa del crecimiento.

Dame recomendaciones concretas para el estado actual de mi medio, con las iniciativas de mayor impacto ordenadas por facilidad de implementación y potencial de mejora en los ingresos de suscripción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar y optimizar el modelo de suscripción, paywall y retención de un medio digital.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Comunicación interna estratégica',
                'description'       => 'La comunicación interna que mantiene alineado a un equipo de 50 a 5.000 personas: los canales, la frecuencia y el tono que genera confianza.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de comunicación interna con experiencia en empresas en crecimiento, desde startups que están estructurando sus primeras comunicaciones formales hasta empresas medianas con múltiples oficinas y equipos remotos. Tu especialidad es diseñar sistemas de comunicación interna que mantienen a los equipos alineados, informados y comprometidos sin añadir ruido a su ya sobrecargada bandeja de entrada.

Necesito tu ayuda para [DESCRIBIR EL RETO: diseñar el sistema de comunicación interna de una empresa en crecimiento / mejorar la comunicación en una empresa con equipos remotos y presenciales / gestionar la comunicación durante una reestructuración / mejorar la comunicación de liderazgo / reducir la infoxicación interna].

El contexto: [DESCRIBIR: tamaño del equipo, distribución geográfica, herramientas de comunicación actuales, principales retos de comunicación].

**Parte 1: El diagnóstico de la comunicación interna**

Antes de diseñar la solución, ayúdame a diagnosticar el estado actual:

- Los síntomas de una comunicación interna deficiente: los empleados que se enteran de noticias importantes por rumores o por LinkedIn antes que por la empresa, los equipos que trabajan en silos sin saber lo que hacen los demás, la sensación de que "la dirección no comunica", el exceso de reuniones como sustituto de la comunicación escrita efectiva.
- Las preguntas que hay que hacerle al equipo para entender los problemas reales de comunicación: qué información necesitan y no reciben, qué información reciben y no necesitan, qué herramienta de comunicación genera más frustración.
- El mapa de flujos de comunicación: quién comunica qué, a quién, con qué frecuencia y a través de qué canal. Dónde hay cuellos de botella, dónde hay redundancias y dónde hay vacíos.
- El rol de los managers en la comunicación interna: cómo la comunicación de la dirección llega (o no llega) al equipo operativo a través de la cadena de managers, y cómo diseñar el sistema para que este "teléfono roto" se minimice.
- Los distintos perfiles de audiencia interna: los empleados de oficina con acceso constante a herramientas digitales vs. los empleados operativos que solo ven una pantalla durante el descanso. Cómo el sistema de comunicación llega a todos.

**Parte 2: El sistema de comunicación interna**

- El ritmo de comunicación: la cadencia regular de comunicaciones que crea predictibilidad (el all-hands mensual, la newsletter semanal del CEO, el update quincenal del equipo de producto). Por qué la regularidad genera más confianza que la intensidad.
- Los canales y su propósito: cómo asignar a cada tipo de mensaje el canal adecuado. El email para comunicaciones formales y permanentes, Slack/Teams para comunicación en tiempo real y conversacional, la intranet o Notion para la documentación y el conocimiento, las videollamadas para la conexión humana y las decisiones complejas.
- El all-hands o town hall: cómo diseñar una reunión de empresa que la gente quiera ver y no sienta que pierde el tiempo. La estructura, la duración, cómo integrar las preguntas del equipo, el tono del CEO y los elementos que hacen que sea un momento de comunidad y no una presentación de diapositivas.
- El newsletter interno: qué incluir (noticias de la empresa, victorias del equipo, incorporaciones y bajas, agenda de eventos, el dato de la semana), con qué frecuencia enviarlo y cómo hacerlo lo suficientemente breve para que se lea.
- La comunicación en momentos difíciles: restructuraciones, bajas importantes, malas noticias financieras, errores públicos de la empresa. El principio de comunicar rápido, con honestidad y con empatía, incluso cuando la noticia es incompleta.

**Parte 3: La comunicación del liderazgo**

- El CEO como comunicador principal: el estilo de comunicación que genera confianza (directo, honesto sobre las incertidumbres, coherente entre lo que dice y lo que hace). Los errores de comunicación más comunes de los líderes y cómo evitarlos.
- La comunicación de la estrategia: cómo hacer que toda la empresa entienda hacia dónde va, por qué va en esa dirección y qué papel tiene cada persona en el camino. El "why" de Simon Sinek aplicado a la comunicación interna.
- La comunicación bidireccional: cómo crear canales reales de feedback ascendente (encuestas de clima, buzones de preguntas anónimas, AMAs del CEO, foros de ideas) que no sean solo teatro de participación sino que alimenten decisiones reales.
- La comunicación en remoto: cómo los líderes de equipos distribuidos mantienen la conexión y la confianza sin los encuentros informales de la oficina. La presencia asíncrona, los videos cortos del CEO y los check-ins deliberados.
- La autenticidad en la comunicación de liderazgo: la diferencia entre el mensaje pulido por comunicación y el mensaje genuino. Cuándo la imperfección genera más confianza que la perfección.

**Parte 4: Métricas y mejora de la comunicación interna**

- Cómo medir la efectividad de la comunicación interna: las tasas de apertura del newsletter interno, la asistencia y la satisfacción de los all-hands, el NPS interno (eNPS), los resultados de las encuestas de clima sobre la comunicación.
- Las encuestas de pulso: la herramienta de medición del clima interno en tiempo real. Cómo diseñarlas (breves, frecuentes, específicas), con qué herramienta lanzarlas y, sobre todo, cómo actuar sobre los resultados.
- El ciclo de mejora continua de la comunicación interna: cómo revisar periódicamente si el sistema funciona, qué cambiar y cómo comunicar los cambios al equipo.
- La governance de la comunicación interna: quién decide qué se comunica, cuándo y cómo. Cómo evitar que cada departamento emita sus propias comunicaciones sin coordinación.

Dame un plan de acción concreto para mejorar la comunicación interna de mi empresa en los próximos noventa días, empezando por las iniciativas de mayor impacto y más rápida implementación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el sistema de comunicación interna que mantiene alineados y comprometidos a equipos de 50 a 5.000 personas.',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Comunicación con inversores (IR)',
                'description'       => 'Gestiona la relación con accionistas e inversores: los informes, los earnings calls y la narrativa financiera que mantiene la confianza del mercado.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de relaciones con inversores (IR) con experiencia en empresas cotizadas y en startups en fases de crecimiento. Conoces en profundidad las obligaciones de información al mercado, la estructura de los earnings calls, la narrativa financiera que los analistas e inversores valoran y la gestión de la comunicación en momentos difíciles cuando los resultados no cumplen las expectativas.

Necesito tu ayuda para [DESCRIBIR EL RETO: preparar el primer earnings call de la empresa / rediseñar la presentación para inversores / gestionar la comunicación de resultados negativos / construir la narrativa IR de una empresa en crecimiento / preparar el roadshow para una ampliación de capital].

El contexto: [DESCRIBIR: empresa cotizada o privada, sector, fase de crecimiento, últimos resultados financieros, relación actual con los inversores].

**Parte 1: La narrativa de inversor (investor story)**

El activo más importante de un programa de IR es la narrativa: el relato coherente de por qué esta empresa va a crear valor para sus accionistas. Ayúdame a construir:

- Los componentes de una investor story convincente: el mercado (tamaño, crecimiento, fragmentación), el problema que resuelve la empresa, la solución y la ventaja competitiva, el modelo de negocio y la economía unitaria, el equipo, la tracción demostrada y la visión a largo plazo.
- La progresión de la narrativa: cómo la historia debe ser consistente trimestre a trimestre, incorporando los logros y ajustando las expectativas sin que el inversor sienta que "le están cambiando el relato".
- Los KPIs que definen el éxito para esta empresa: en cada sector y modelo de negocio, hay métricas que los inversores usan para valorar el progreso. Cómo elegir los indicadores correctos (MRR, ARR, NRR, GMV, CAC, LTV, EBITDA margin, FCF) y comprometerse a reportarlos consistentemente.
- El mensaje diferencial: qué hace que esta empresa sea diferente e inversionable frente a sus comparables. El argumento que justifica el múltiplo de valoración.
- La narrativa en momentos de incertidumbre: cómo mantener la coherencia del relato cuando el entorno macroeconómico o competitivo cambia, sin que parezca que la empresa está girando el timón sin dirección.

**Parte 2: El earnings call y los resultados trimestrales**

- La estructura del earnings call: la apertura del CEO (resultados del trimestre, los hitos más importantes, el contexto del mercado), la presentación del CFO (detalle de las cifras, los drivers del crecimiento y el guidance), el Q&A con analistas e inversores.
- Cómo preparar el script del CEO y del CFO: el equilibrio entre los mensajes positivos y el reconocimiento honesto de los retos. Las frases que generan confianza y las que generan alarma entre los analistas.
- La preparación del Q&A: cómo anticipar las preguntas difíciles (las que los analistas más críticos van a hacer sobre los puntos débiles del trimestre), cómo preparar las respuestas y cómo entrenar al equipo directivo para el simulacro de Q&A.
- El guidance: cuándo dar guidance, cómo definir el rango (conservador vs. ajustado), cómo gestionar las expectativas del mercado y cómo actualizar el guidance durante el año cuando la situación cambia.
- La comunicación de resultados negativos: cómo presentar un trimestre que no ha cumplido las expectativas. El marco de "honestidad + contexto + plan de acción" que los inversores respetan incluso cuando las noticias son malas.

**Parte 3: Las relaciones con analistas e inversores**

- El roadshow y las reuniones con inversores: la preparación de la presentación, el pitch de 45 minutos que cubre todos los puntos importantes sin resultar exhaustivo, la gestión del tiempo de preguntas y cómo hacer seguimiento después de la reunión.
- La relación con los analistas de sell-side: cómo establecer relaciones de confianza con los analistas que cubren el sector, cuándo reunirse con ellos fuera de los periodos de resultados y cómo gestionar sus modelos y estimaciones.
- Los inversores activistas: cómo gestionar la comunicación con inversores que tienen posiciones críticas sobre la estrategia o la gestión de la empresa.
- El registro de accionistas y el perfil del inversor objetivo: cómo conocer quiénes son los principales accionistas actuales, qué tipo de inversor adicional quiero atraer (largo plazo, value, growth, especializados en el sector) y cómo construir la estrategia de targeting.
- Las conferencias y eventos de IR: cuáles son las conferencias más relevantes para mi sector, cómo seleccionar dónde participar y cómo aprovechar al máximo la participación.

**Parte 4: Las obligaciones regulatorias y el compliance de IR**

- Las obligaciones de información para empresas cotizadas en España (CNMV): hechos relevantes, información financiera periódica (semestral y anual), información privilegiada y el procedimiento para su gestión.
- El período de silencio (quiet period): cuándo empieza, qué está permitido y qué no durante ese período y cómo gestionar las consultas de inversores y analistas.
- El fair disclosure y la Reg FD: el principio de que todos los inversores deben tener acceso a la misma información relevante al mismo tiempo. Cómo gestionar las conversaciones con inversores individuales sin caer en selective disclosure.
- La web de IR: los contenidos obligatorios y los recomendados, cómo organizarla para que analistas e inversores encuentren rápidamente lo que buscan y cómo mantenerla actualizada.
- La gestión de la información privilegiada internamente: quién tiene acceso, cómo documentar el acceso y qué procedimientos aplicar cuando un directivo quiere comprar o vender acciones de la empresa.

Dame orientación práctica con ejemplos concretos de cómo presentar la situación de mi empresa de la forma más creíble y convincente para el mercado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Preparar earnings calls, construir la narrativa para inversores y gestionar las relaciones con el mercado de capitales.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Derecho de la información y prensa',
                'description'       => 'Libertad de prensa, difamación, derecho al olvido y las obligaciones legales de medios y plataformas cuando publican sobre personas reales.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en derecho de la información, libertad de prensa y responsabilidad de los medios de comunicación, con conocimiento tanto del ordenamiento español como de la jurisprudencia del Tribunal Europeo de Derechos Humanos. Tu práctica incluye tanto la defensa de periodistas y medios como el asesoramiento a personas que han sido dañadas por publicaciones periodísticas.

Necesito tu ayuda para [DESCRIBIR LA SITUACIÓN: entender si una publicación puede tener consecuencias legales / evaluar una posible reclamación por difamación / entender los límites de la libertad de información en un caso concreto / gestionar un derecho al olvido / asesorar a un medio sobre su responsabilidad legal].

El contexto concreto: [DESCRIBIR: la publicación en cuestión, si se trata de una persona pública o privada, el tipo de medio, qué información se ha publicado y cómo afecta a los interesados].

**Parte 1: El marco constitucional de la libertad de expresión e información**

- El artículo 20 de la Constitución española: los derechos que protege (libertad de expresión, libertad de información, libertad de prensa, cláusula de conciencia y secreto profesional) y sus límites (honor, intimidad, propia imagen del artículo 18).
- La jerarquía de los derechos en conflicto: cuándo prevalece la libertad de información sobre el derecho al honor y cuándo es al revés. Los criterios que el Tribunal Constitucional y el Tribunal Supremo han establecido para resolver este conflicto.
- La diferencia entre opinión e información: la crítica, el comentario y la sátira están protegidos como expresión aunque sean lesivos para la reputación de alguien; la información falsa de hechos no. Cómo el derecho distingue entre ambos y la "exceptio veritatis" como defensa.
- La relevancia pública como criterio: las personas con relevancia pública (políticos, empresarios, figuras del espectáculo) tienen un ámbito de privacidad más reducido en lo que concierne al ejercicio de su cargo o actividad pública. Dónde termina la vida pública y empieza la privada.
- Las personas privadas involucradas en asuntos públicos: el familiar de un político que no ha elegido la vida pública, el empleado de una empresa investigada, el testigo de un hecho noticioso. Cuándo su presencia en la noticia está justificada y cuándo no.

**Parte 2: Difamación, calumnia e injurias**

- Las diferencias entre la vía civil y la vía penal para la difamación: la LO 1/1982 (protección civil del honor, intimidad e imagen) y los delitos del Código Penal (injurias y calumnias). Cuándo es más adecuada cada vía y qué busca el afectado con cada una.
- Los elementos del delito de calumnia (imputar falsamente un delito) y de injurias (expresiones que lesionan la dignidad): qué tiene que probar el acusador y qué defensas tiene el periodista o el medio.
- La responsabilidad del medio por los contenidos publicados: cuándo el director del medio es responsable, cuándo el periodista y cuándo el medio como persona jurídica. La diferencia entre los contenidos editoriales y los comentarios de usuarios.
- La responsabilidad de las plataformas por contenidos de terceros: el régimen de la Directiva de Servicios Digitales (DSA) en la UE y el artículo 17 de la LSSI en España. Cuándo una plataforma es responsable de un contenido difamatorio publicado por un usuario.
- La prescripción de las acciones por difamación: cuánto tiempo tiene la víctima para reclamar, cuándo empieza a correr el plazo (la publicación o el momento en que la persona conoce el contenido) y el impacto de los contenidos online que no desaparecen nunca.

**Parte 3: El derecho al olvido y la protección de datos**

- El derecho al olvido en el contexto europeo: la sentencia Google Spain del TJUE (2014) y el artículo 17 del RGPD. Qué derechos tiene una persona para pedir que un contenido que la afecta deje de aparecer en los resultados de búsqueda.
- Cuándo prospera una solicitud de derecho al olvido: la relevancia actual de la información (algo que fue noticia hace veinte años puede ya no tener interés público), el carácter de persona pública o privada del solicitante, si la información fue publicada en un contexto judicial o penal.
- La diferencia entre el derecho al olvido frente a Google y el derecho a la supresión frente al medio que publicó: son dos reclamaciones distintas ante actores distintos.
- El procedimiento: la reclamación formal ante el responsable del tratamiento, el plazo de respuesta, la reclamación ante la AEPD si la respuesta es negativa, y el recurso contencioso-administrativo.
- Los casos especiales: los datos de personas fallecidas, los datos de menores, las hemerotecas digitales de periódicos y el equilibrio entre el derecho al olvido y el derecho a la información histórica.

**Parte 4: Las obligaciones legales de los medios de comunicación**

- La rectificación: el derecho de cualquier persona que se sienta agraviada por una información publicada a exigir que el medio publique su versión. El procedimiento, los plazos y qué pasa si el medio no rectifica.
- La protección de fuentes: el secreto profesional periodístico en España y sus límites. Cuándo un juez puede obligar a un periodista a revelar sus fuentes y cuándo no.
- Las imágenes en el periodismo: cuándo se puede publicar la imagen de una persona sin su consentimiento (cuando esté en un lugar público y su imagen sea accesoria o cuando la persona tenga relevancia pública en el contexto de la noticia) y cuándo no.
- Los menores en la información periodística: las restricciones especiales para la identificación de menores en noticias (especialmente en noticias de violencia, delitos y procesos judiciales) y la responsabilidad del medio si las viola.
- El periodismo de datos y la privacidad: cuándo el análisis y la publicación de datos personales obtenidos de fuentes abiertas es periodismo legítimo y cuándo puede ser una vulneración de la protección de datos.

Dame orientación específica para el caso que te he descrito, identificando los riesgos legales principales y las acciones recomendadas, y cuando sea relevante, cita la normativa o la jurisprudencia aplicable.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Entender los límites legales de la libertad de prensa, gestionar reclamaciones por difamación y aplicar el derecho al olvido.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Comunicación de crisis con clientes',
                'description'       => 'Cuando algo va muy mal, la comunicación con clientes afectados puede salvar o destruir la relación: los protocolos, los templates y el tono correcto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de customer success y comunicación de crisis con experiencia en empresas de SaaS, e-commerce y servicios digitales. Has gestionado comunicaciones de crisis para incidencias graves: caídas del servicio que afectaron a miles de clientes, brechas de datos, errores de facturación masivos y fallos de producto que causaron pérdidas económicas a los clientes. Conoces la diferencia entre una comunicación de crisis que destruye la confianza y una que, paradójicamente, la refuerza.

Necesito tu ayuda para [DESCRIBIR LA SITUACIÓN: preparar el plan de comunicación de crisis antes de que ocurra / gestionar una crisis activa en este momento / revisar y mejorar los protocolos existentes / redactar las comunicaciones para una crisis concreta].

La naturaleza de la crisis o el tipo de crisis para la que me preparo: [DESCRIBIR: caída del servicio / brecha de datos / error de facturación / fallo de producto con impacto económico / incumplimiento de SLA / problema reputacional].

**Parte 1: Los principios de la comunicación de crisis con clientes**

Antes de entrar en los protocolos, ayúdame a interiorizar los principios que distinguen la comunicación de crisis excelente de la mediocre:

- La velocidad vs. la completitud: el error más costoso en la comunicación de crisis es esperar a tener todos los datos antes de comunicar. Por qué comunicar rápido, con información incompleta pero honesta, genera más confianza que comunicar tarde con información perfecta.
- La transparencia radical: qué significa ser transparente en una crisis sin ser imprudente (hay información que no se puede compartir por razones legales o de seguridad). El equilibrio entre "decir todo lo que sabemos" y "no especular sobre lo que no sabemos todavía".
- La asunción de responsabilidad: cuándo y cómo asumir responsabilidad sin una negación instintiva que los clientes detectan inmediatamente. La diferencia entre "lamentamos las molestias causadas" (vacío) y "cometimos un error que causó [impacto concreto] y lo lamentamos" (auténtico).
- La orientación a la solución: la comunicación de crisis que retiene clientes combina tres elementos en ese orden: reconocimiento del problema y su impacto, asunción de responsabilidad, y plan de acción concreto con plazos.
- El tono humano: en una crisis, los clientes no quieren leer comunicados corporativos escritos por el departamento legal. Quieren saber que hay personas detrás del servicio que entienden el impacto que el problema ha tenido en sus vidas o en su negocio.

**Parte 2: El protocolo de comunicación de crisis**

Diseña conmigo el protocolo que la empresa debe seguir desde el momento en que se detecta una incidencia grave:

- **T+0 (detección)**: quién recibe la alerta, cómo se evalúa la severidad (cuántos clientes afectados, cuál es el impacto económico o en el servicio, cuál es el riesgo reputacional), quién toma la decisión de activar el protocolo de crisis.
- **T+15 minutos**: la primera comunicación interna (el canal de incidencias en Slack, el email al equipo directivo, la activación del equipo de respuesta). Qué información incluir aunque sea incompleta.
- **T+30 minutos**: la primera comunicación externa. El banner en la plataforma, el tweet o post en redes sociales, el primer email a los clientes afectados. El mensaje de "somos conscientes del problema, estamos trabajando en ello, actualizaremos cada X minutos".
- **Durante la crisis**: las actualizaciones periódicas (cada 30 o 60 minutos dependiendo de la severidad) que mantienen informados a los clientes aunque no haya novedades. Por qué "seguimos trabajando sin novedades" es mejor que el silencio.
- **La resolución**: el mensaje de que el problema está resuelto, explicando qué ocurrió (en términos que el cliente pueda entender, no jerga técnica), qué impacto tuvo y qué medidas se han tomado para que no vuelva a ocurrir.
- **El post-mortem público**: el documento que se publica días después de la crisis con el análisis completo, la línea de tiempo, el impacto real y las medidas de prevención. Por qué los post-mortems públicos son una de las mejores herramientas de construcción de confianza que existen.

**Parte 3: Los templates de comunicación para las crisis más frecuentes**

Redacta conmigo los templates base para las siguientes situaciones:

1. **Caída total del servicio** (el producto no funciona para nadie): el primer mensaje (T+30), el update de mitad de crisis y el mensaje de resolución.
2. **Degradación parcial del servicio** (el producto funciona mal para algunos usuarios o en algunas funcionalidades).
3. **Brecha de datos** (acceso no autorizado a datos de clientes): el mensaje que cumple con el RGPD (plazo de 72 horas para notificar a la AEPD, obligación de notificar a los afectados), con el tono correcto y la información que los clientes necesitan para protegerse.
4. **Error de facturación masivo** (se ha cobrado de más a clientes): el reconocimiento, el proceso de devolución automática y la garantía de que no volverá a ocurrir.
5. **Incumplimiento de SLA en un cliente B2B**: la comunicación directa con el cliente afectado, la propuesta de compensación y el plan de mejora.

**Parte 4: La gestión post-crisis**

- Cómo evaluar el impacto de la comunicación de crisis: el CSAT de los clientes afectados tras la resolución, la tasa de cancelación en el mes siguiente, las menciones en redes sociales y los tickets de soporte recibidos.
- El seguimiento individual con los clientes más afectados: cuándo merece la pena una llamada personal del CEO o del director de customer success, qué ofrecer como compensación y cómo gestionar esa conversación.
- La compensación automática vs. la individual: cuándo tiene sentido compensar a todos los afectados automáticamente (crédito en la cuenta, extensión de suscripción) y cuándo esperar a que los clientes lo soliciten.
- Cómo usar la crisis para mejorar la relación: paradójicamente, las crisis bien gestionadas pueden resultar en clientes más fieles que si nunca hubiera ocurrido nada. El "service recovery paradox" y cómo aprovecharlo.
- La prevención: qué procesos internos de detección temprana, planes de contingencia y ejercicios de simulacro de crisis se deben implementar para estar mejor preparados la próxima vez.

Adapta todo al contexto de mi empresa y dame los templates de comunicación listos para usar, solo con los campos variables entre corchetes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el protocolo de comunicación de crisis y los templates para gestionar incidencias que afectan a clientes.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Periodismo freelance y content creator',
                'description'       => 'Monetiza tu escritura o contenido de video como freelance: pitches a medios, negociación de tarifas y los modelos que combinan cliente con audiencia propia.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de negocio especializado en periodistas freelance, escritores independientes y creadores de contenido que monetizan su trabajo de múltiples formas: colaboraciones con medios, contenidos patrocinados, newsletters de pago, libros, podcasts y consultoría de contenido para marcas. Tienes experiencia asesorando a profesionales que han hecho la transición del empleo fijo al trabajo independiente y que están construyendo modelos de ingresos sostenibles basados en su conocimiento y su voz.

Necesito tu ayuda para [DESCRIBIR EL RETO: hacer la transición de periodista empleado a freelance / conseguir los primeros clientes como freelance / construir un modelo de ingresos sostenible que combine medios y audiencia propia / escalar los ingresos actuales / especializarme en un nicho de mayor valor].

Mi situación actual: [DESCRIBIR: experiencia, especialización, publicaciones donde he colaborado o trabajado, canales propios, ingresos actuales si los hay].

**Parte 1: El mercado del periodismo freelance y los content creators**

- El ecosistema actual del periodismo freelance: quién contrata freelances (medios digitales, revistas especializadas, empresas que necesitan contenido editorial de calidad, agencias de comunicación, plataformas de contenido como Bloomberg, El País, El Confidencial), qué tipo de contenidos demandan y qué pagan.
- Las tarifas del mercado: qué se cobra por un reportaje, una entrevista, una columna de opinión, un artículo de investigación o un perfil en España. Los factores que determinan el precio (el medio, la exclusividad, la complejidad, el tiempo de investigación, la experiencia del periodista).
- La diferencia entre el periodista freelance puro (que vive de vender artículos a medios) y el modelo híbrido (medios + audiencia propia + contenido de marca). Por qué el modelo híbrido es cada vez más sostenible y por qué el modelo puro de venta a medios es cada vez más precario.
- La especialización como palanca de precio: por qué un periodista especializado en regulación farmacéutica, ciberseguridad o mercados de capitales puede cobrar cuatro o cinco veces más que un generalista. Cómo elegir el nicho y cómo construir la credibilidad en él.
- El content creator vs. el periodista: la diferencia de credibilidad, estándares editoriales y audiencia. Por qué los mejores creadores de contenido de nicho están combinando los estándares del periodismo con la distribución directa de los creadores.

**Parte 2: El pitch y la relación con los medios**

- Cómo construir el mapa de medios que pagan bien en tu especialización: los medios que pagan tarifas dignas, los que pagan mal pero dan visibilidad y los que directamente explotan a los freelances con tarifas de hambre. Cómo identificar en cuáles vale la pena invertir tiempo.
- El pitch de artículo perfecto: la estructura del email de propuesta (el ángulo de la historia, por qué es relevante ahora, por qué tú eres la persona indicada para escribirlo, las fuentes preliminares que ya tienes, la propuesta de extensión y formato).
- La negociación de tarifas con los medios: cómo responder cuando el editor dice que "no tienen presupuesto", cuándo negociar y cuándo rechazar, y cómo establecer una tarifa mínima por debajo de la cual no trabajas.
- Los contratos con los medios: los derechos que concedes (primera publicación, derechos de primera publicación en español, todos los derechos), qué significa cada uno para tus posibilidades de reutilizar el trabajo y por qué no debes ceder todos los derechos a cambio de nada.
- La gestión de las relaciones a largo plazo con los editores: cómo pasar de colaborador ocasional a colaborador habitual con tarifa pactada y flujo continuo de encargos.

**Parte 3: Construir y monetizar la audiencia propia**

- La newsletter como activo fundamental del periodista freelance moderno: por qué es la forma más directa de construir una audiencia que te pertenece (a diferencia de los seguidores en redes sociales que son "alquilados"). Cómo empezar, qué plataforma usar (Substack, Beehiiv, Kit/ConvertKit) y cuándo tiene sentido pasar a un modelo de pago.
- El modelo de pago en Substack o plataformas similares: el precio de la suscripción, la proporción de contenido gratuito vs. de pago, el tipo de contenido que justifica el pago y los benchmarks de conversión (cuántos suscriptores gratuitos se convierten en de pago).
- El podcast como canal complementario: cuándo añade valor a la estrategia de un periodista, cómo monetizarlo (publicidad, patrocinios, versión premium) y cuánto tiempo y recursos requiere realmente.
- El libro como proyecto de posicionamiento: por qué para ciertos periodistas un libro sigue siendo el mejor activo de credibilidad, cómo conseguir un agente literario, cómo valorar la diferencia entre publicar con una editorial vs. autopublicar.
- Las redes sociales como herramienta de distribución: qué red tiene más sentido para tu tipo de contenido (X/Twitter para el periodismo de opinión y de actualidad, LinkedIn para el periodismo B2B, Instagram para el visual, YouTube para los creadores de vídeo largo).

**Parte 4: El modelo de negocio sostenible del periodista-creator**

- Los pilares de ingresos del periodista freelance moderno: colaboraciones con medios (ingresos variables), audiencia propia (suscripciones, ingresos recurrentes), contenido patrocinado (ingresos esporádicos de alto ticket), formación (cursos, talleres, masterclasses), consultoría de contenido para marcas.
- Cuánto diversificar y cuánto concentrar: el riesgo de depender de un solo cliente o de un solo pilar de ingresos, y el riesgo contrario de dispersarse tanto que no se construye nada sólido en ningún frente.
- La tarifa de contenido de marca: cuánto cobrar por un artículo patrocinado, un post pagado o una mención en newsletter. Los marcos de pricing (coste por mil suscriptores, tarifa plana, paquetes de campaña) y cómo saber que estás en precio de mercado.
- Los límites éticos del contenido de marca: qué tipo de marcas y encargos aceptar sin comprometer la credibilidad, cómo marcar el contenido patrocinado y los conflictos de interés que hay que gestionar con transparencia.
- La gestión financiera del freelance: el fondo de emergencia, la tributación del autónomo (IVA, IRPF, cotizaciones a la Seguridad Social), la facturación, las deducciones y los errores fiscales más comunes que cometen los periodistas cuando empiezan como autónomos.

Dame un plan de acción de seis meses para el estado actual de mi carrera, empezando por las iniciativas que más rápido van a generar ingresos estables.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir un modelo de ingresos sostenible como periodista freelance o content creator combinando medios y audiencia propia.',
                'vote_score'        => 30,
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
