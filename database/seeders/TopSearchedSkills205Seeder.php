<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills205Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Localización de marketing para mercados internacionales',
                'description'       => 'Adapta tu estrategia de marketing a nuevos países: la localización del mensaje, los canales que funcionan en cada mercado y los errores culturales que destruyen campañas que en el mercado local funcionaban perfectamente.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en marketing internacional y estrategia de localización de marca. Necesito tu ayuda para adaptar mi estrategia de marketing a un nuevo mercado internacional sin cometer los errores culturales que hacen fracasar campañas que funcionan perfectamente en el mercado de origen.

Mi contexto:
- Mercado de origen actual: [país o región donde operas hoy]
- Nuevo mercado objetivo: [país o región al que quieres expandirte]
- Producto o servicio: [describe brevemente qué ofreces]
- Canales de marketing actuales: [SEO, paid, redes sociales, email, eventos, etc.]
- Presupuesto de localización aproximado: [indica el rango disponible]
- Plazo para lanzar en el nuevo mercado: [cuándo necesitas estar operativo]

Con ese contexto, dame:

1. ANÁLISIS CULTURAL DEL MERCADO OBJETIVO
Explícame las dimensiones culturales de Hofstede relevantes para mi categoría de producto en el nuevo mercado: el índice de individualismo vs. colectivismo, la distancia al poder, la aversión a la incertidumbre y la orientación temporal. Cómo afecta cada dimensión al tono del mensaje, a la prueba social que funciona y al tipo de llamada a la acción que genera conversión en ese mercado.

2. LOCALIZACIÓN DEL MENSAJE CENTRAL
¿Cuál es el mensaje de marketing que funciona en mi mercado de origen y por qué puede no funcionar en el nuevo? Dame el proceso para adaptar la propuesta de valor sin perder la esencia de la marca: qué elementos del mensaje son universales, cuáles deben adaptarse y cuáles deben eliminarse directamente. Incluye ejemplos de marcas que localizaron bien y mal en mercados similares.

3. CANALES PRIORITARIOS EN EL NUEVO MERCADO
¿Qué canales de marketing funcionan en el nuevo mercado que no son los mismos que en el mío? Dame un análisis de los canales dominantes por país o región: las redes sociales con mayor penetración, los motores de búsqueda relevantes (Google, Baidu, Yandex, Naver), las plataformas de ecommerce y los medios tradicionales o digitales que tienen credibilidad en ese mercado. Incluye cómo varía el mix de canales óptimo respecto a mi situación actual.

4. ERRORES CULTURALES QUE DESTRUYEN CAMPAÑAS
Lista los diez errores culturales más comunes que cometen las empresas al entrar en un nuevo mercado: los colores con connotaciones negativas, los eslóganes que pierden el significado en la traducción o adquieren uno inadecuado, los gestos o imágenes que ofenden, los humores que no viajan y los tabús por categoría de producto en diferentes culturas. Para cada error dame un ejemplo real y la alternativa correcta.

5. ADAPTACIÓN DE CONTENIDOS Y CREATIVIDAD
¿Cómo organizo el proceso de localización de los activos de marketing? Dame el flujo de trabajo para adaptar el contenido: la diferencia entre traducción, transcreación y creación local desde cero, cuándo usar cada opción, cómo trabajar con hablantes nativos del mercado objetivo y cómo validar que el contenido localizado resuena antes de lanzarlo a escala.

6. SEO Y PAID MEDIA INTERNACIONAL
¿Cómo adapto mi estrategia de SEO y paid media al nuevo mercado? Dame las claves de la investigación de palabras clave en otro idioma y mercado, cómo estructurar el dominio y las URLs para el SEO internacional (hreflang, subdominios vs. subdirectorios vs. TLDs locales), y cómo adaptar las campañas de paid a los patrones de búsqueda y coste por clic del nuevo mercado.

7. MÉTRICAS DE LOCALIZACIÓN Y SEÑALES DE ALERTA
¿Cómo sé que la localización está funcionando o que algo va mal? Dame las métricas que debo monitorizar en los primeros noventa días de presencia en el nuevo mercado: las tasas de conversión comparadas con el mercado de origen, los indicadores de rechazo cultural (comentarios negativos, tasa de rebote por segmento geográfico), y las señales que me indican que necesito pivotar el mensaje o los canales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Adaptar la estrategia de marketing a un nuevo mercado internacional evitando errores culturales.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Internacionalización (i18n) y localización (l10n) en software',
                'description'       => 'Construye aplicaciones que funcionan en cualquier idioma y región: los estándares (Unicode, CLDR), los formatos de fecha, moneda y número por región y las librerías de i18n que los frameworks modernos usan.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en ingeniería de software con especialización en internacionalización y localización de aplicaciones. Necesito que me ayudes a construir o adaptar mi aplicación para que funcione correctamente en múltiples idiomas, regiones y culturas sin reescribir el código base cada vez.

Mi contexto:
- Tipo de aplicación: [web app / mobile app / desktop / API / SaaS]
- Stack tecnológico: [lenguaje, framework, base de datos]
- Mercados objetivo iniciales: [lista los idiomas y regiones que quieres soportar]
- Estado actual de i18n: [nunca lo hemos hecho / tenemos algo básico / migrando de una solución existente]
- Complejidad del contenido: [solo UI strings / contenido dinámico de usuario / documentos / emails / reportes]

Con ese contexto, dame:

1. FUNDAMENTOS: UNICODE, CLDR Y LOS ESTÁNDARES QUE DEBES CONOCER
Explícame los estándares que toda aplicación internacionalizada debe respetar: qué es Unicode y por qué UTF-8 es el encoding que debes usar en todos los sistemas (base de datos, API, filesystem, HTTP headers), qué es el CLDR (Common Locale Data Repository) de Unicode y cómo los frameworks modernos lo usan para formatos de fecha, moneda y número. Incluye los errores más frecuentes de encoding que aparecen en producción y cómo evitarlos.

2. ARQUITECTURA DE I18N: CÓMO SEPARAR EL CONTENIDO DEL CÓDIGO
¿Cuál es la arquitectura correcta para externalizar los strings de la interfaz? Explícame los patrones más usados (archivos JSON, PO/POT files, bases de datos de traducciones, sistemas como ICU MessageFormat) y cuándo usar cada uno. Dame las convenciones de naming de claves de traducción que escalan bien, cómo gestionar las traducciones cuando el equipo crece y cuáles son los errores de arquitectura que se pagan muy caro más adelante.

3. FORMATOS DE FECHA, HORA, NÚMERO Y MONEDA POR REGIÓN
Dame una guía práctica de los formatos que varían por región y que más frecuentemente causan bugs en producción: el orden de día, mes y año en diferentes países, el separador decimal y de miles, la posición del símbolo de moneda, los formatos de hora de 12 vs. 24 horas, y las zonas horarias incluyendo el horario de verano (DST). Incluye las librerías recomendadas por stack tecnológico para manejar estos formatos correctamente (Intl API en JavaScript, java.time en Java, dateutil en Python, Carbon en PHP, etc.).

4. PLURALIZACIÓN, GÉNEROS GRAMATICALES Y CASOS ESPECIALES
¿Cómo manejo correctamente la pluralización en diferentes idiomas? Explícame por qué el simple if singular else plural no funciona en ruso, árabe o polaco, cómo ICU MessageFormat resuelve este problema, cómo gestionar los géneros gramaticales en idiomas como el español, francés o alemán y cómo manejar los casos especiales como listas de elementos (Oxford comma en inglés vs. equivalentes en otros idiomas).

5. IDIOMAS BIDIRECCIONALES Y SOPORTE RTL
¿Cómo añado soporte para árabe, hebreo y otros idiomas RTL? Dame la guía técnica completa: el atributo dir en HTML, la propiedad CSS direction y unicode-bidi, cómo adaptar los layouts de CSS Flexbox y Grid para RTL sin duplicar el CSS, cómo manejar los iconos y las imágenes que asumen un flujo LTR, y las herramientas de testing para verificar que el diseño RTL funciona correctamente.

6. LIBRERÍAS Y FRAMEWORKS DE I18N POR STACK
Dame una comparativa de las librerías de i18n más utilizadas para los principales stacks: react-i18next y react-intl para React, Vue I18n para Vue, Angular i18n nativo, i18n-js o Ruby-i18n para Rails, django-i18n para Django y el soporte nativo de Laravel. Para cada una indica: cómo se integra con CLDR, qué soporte de pluralización tiene, cómo gestiona las traducciones faltantes y cómo se integra con herramientas de gestión de traducciones.

7. PROCESO DE LOCALIZACIÓN Y GESTIÓN DE TRADUCCIONES
¿Cómo organizo el proceso de localización para que no sea un cuello de botella en el desarrollo? Dame el flujo de trabajo completo: la extracción automática de strings, las plataformas de gestión de traducciones (Lokalise, Phrase, Crowdin, Weblate), la integración con CI/CD para que las traducciones se actualicen automáticamente, y cómo establecer un proceso de QA de localización que detecte strings sin traducir, traducciones truncadas y errores de formato antes de que lleguen a producción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir aplicaciones correctamente internacionalizadas que funcionen en cualquier idioma y región.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño para mercados globales y sensibilidades culturales',
                'description'       => 'Adapta el diseño a culturas diferentes: los colores con significados distintos por cultura, la dirección del texto en árabe y hebreo (RTL) y los patrones de diseño que funcionan universalmente frente a los que necesitan adaptación local.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en diseño intercultural y localización visual con experiencia en productos digitales que operan en múltiples mercados. Necesito tu ayuda para adaptar mis diseños a diferentes culturas sin cometer errores que dañen la percepción de la marca o generen rechazo en el mercado local.

Mi contexto:
- Tipo de producto o plataforma: [app móvil, web app, ecommerce, landing page, etc.]
- Mercado de origen del diseño actual: [país o cultura para la que fue diseñado originalmente]
- Mercados objetivo: [lista los países o culturas a los que quieres expandirte]
- Sistema de diseño actual: [si tienes componentes, tipografía y paleta definidos]
- Mayor preocupación: [colores, RTL, iconografía, imágenes de personas, densidad de información, etc.]

Con ese contexto, dame:

1. PSICOLOGÍA DEL COLOR EN DIFERENTES CULTURAS
Dame una guía de las diferencias culturales en la percepción del color que todo diseñador que trabaja globalmente debe conocer: el significado del blanco en culturas occidentales vs. asiáticas (duelo vs. pureza), el rojo en China (suerte y prosperidad) vs. en otros mercados, el verde en países de mayoría musulmana, el amarillo en Alemania vs. en Brasil, y el azul como el color más universalmente aceptado. Para cada diferencia dame una recomendación práctica de cómo adaptar la paleta para cada mercado sin perder la identidad de marca.

2. DISEÑO RTL: ÁRABE, HEBREO Y FARSI
¿Cómo adapto mi diseño para idiomas de derecha a izquierda? Dame la guía completa de diseño RTL: el espejado de layouts (qué se espeja y qué no), la tipografía árabe y sus características (la unión entre letras, la ausencia de cursiva tradicional), cómo adaptar los iconos que asumen un flujo LTR (flechas, iconos de progreso, la barra de desplazamiento), cómo manejar los números en árabe vs. los numerales indoarábigos, y las herramientas de diseño que tienen mejor soporte RTL.

3. ICONOGRAFÍA UNIVERSAL VS. ICONOGRAFÍA CULTURALMENTE ESPECÍFICA
¿Qué iconos y símbolos son verdaderamente universales y cuáles tienen significados distintos por cultura? Dame ejemplos concretos de iconos problemáticos: el pulgar hacia arriba en Irán o el sur de Italia, la mano de OK en Brasil, los iconos de correo basados en el buzón americano que no reconocen los usuarios europeos o asiáticos, y los iconos de teléfono que muestran un auricular de los años 80 cuando el usuario solo conoce el smartphone. Cómo construir un sistema de iconografía que funcione globalmente.

4. IMÁGENES DE PERSONAS Y REPRESENTACIÓN CULTURAL
¿Cómo selecciono y adapto las imágenes de personas para diferentes mercados? Dame los criterios para elegir imágenes que reflejen la diversidad del mercado local sin caer en estereotipos: la representación de edad, género, etnia y vestimenta en cada cultura, los gestos y expresiones faciales con diferentes significados culturales, y cómo gestionar el banco de imágenes para que cada mercado tenga fotografías que representen a su propia audiencia.

5. DENSIDAD DE INFORMACIÓN Y PATRONES DE LECTURA POR CULTURA
¿Cómo varían los patrones de consumo de información por cultura? Explícame las diferencias en la densidad de información preferida (los usuarios japoneses o chinos aceptan interfaces más densas que los escandinavos), el patrón de lectura Z vs. F en culturas con diferentes alfabetos, las preferencias de animación y movimiento que varían culturalmente, y cómo adaptar la jerarquía visual para cada mercado sin rediseñar desde cero.

6. TIPOGRAFÍA INTERNACIONAL Y CONSIDERACIONES DE FUENTES
¿Cómo manejo la tipografía en un producto multilingüe? Dame las guías técnicas y de diseño para la selección tipográfica internacional: las fuentes que tienen buena cobertura de caracteres para el alfabeto cirílico, el griego, los caracteres CJK (chino, japonés, coreano) y el árabe, las diferencias de tamaño de texto entre idiomas (el alemán suele ocupar un 30% más de espacio que el inglés), y cómo diseñar componentes que no se rompan cuando el texto es significativamente más largo o más corto que en el idioma original.

7. PROCESO DE DISEÑO CULTURAL Y VALIDACIÓN
¿Cómo integro la sensibilidad cultural en el proceso de diseño antes de lanzar en un nuevo mercado? Dame el checklist de validación cultural que todo diseño debe pasar antes de publicarse en un nuevo país: las revisiones de colores y simbolismo, la revisión de imágenes y representación, el testing de RTL si aplica, la validación con usuarios nativos del mercado objetivo y las herramientas o servicios que me ayudan a identificar problemas culturales antes de que los encuentren los usuarios reales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Adaptar diseños de productos digitales a diferentes culturas y mercados globales.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas cross-border y exportación',
                'description'       => 'Abre mercados internacionales con una estrategia de ventas adaptada: los canales de distribución en diferentes regiones, la adaptación del pitch a distintas culturas de negocio y los aspectos prácticos de operar comercialmente en otro país.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en ventas internacionales y estrategia de entrada en mercados extranjeros. Necesito tu ayuda para construir una estrategia de ventas cross-border que me permita abrir un nuevo mercado internacional de forma efectiva y sin los errores más costosos que cometen las empresas cuando venden fuera de su país de origen.

Mi contexto:
- Producto o servicio: [describe brevemente qué vendes]
- Mercado de origen: [dónde vendes actualmente con éxito]
- Nuevo mercado objetivo: [país o región al que quieres entrar]
- Modelo de ventas actual: [inbound, outbound, canal, directo, distribuidor, etc.]
- Ticket medio y ciclo de venta: [precio aproximado y duración del proceso comercial]
- Recursos disponibles para la expansión: [equipo comercial, presupuesto, tiempo]

Con ese contexto, dame:

1. MODELO DE ENTRADA AL MERCADO: OPCIONES Y CRITERIOS DE ELECCIÓN
Explícame los diferentes modelos de entrada a un mercado extranjero para ventas: venta directa desde el país de origen, representante comercial local, distribuidor exclusivo, agente comisionista, joint venture con empresa local, o filial propia. Para cada modelo indica: en qué fase de la empresa tiene sentido, qué control conservas sobre el proceso de ventas, qué coste y riesgo conlleva, y cuál recomiendas para mi situación concreta.

2. ADAPTACIÓN CULTURAL DEL PROCESO COMERCIAL
¿Cómo cambia el proceso de ventas en el nuevo mercado? Explícame las diferencias culturales en el proceso comercial B2B que más afectan al cierre: la relación personal antes del negocio (especialmente en culturas de alto contexto como Japón, China, o el Medio Oriente), el proceso de toma de decisiones (más jerárquico o más distribuido), el papel de la confianza y las referencias, el tiempo que se tarda en llegar al decisor real y cómo adaptar el pitch a los valores de negocio dominantes en ese mercado.

3. CANALES DE DISTRIBUCIÓN Y SOCIOS LOCALES
¿Cómo identifico y evalúo socios locales de distribución o representación? Dame el proceso completo: dónde encontrar distribuidores o agentes en el nuevo mercado (cámaras de comercio, ferias sectoriales, plataformas de matchmaking como Kompass o Europages), los criterios para evaluar a un socio (cartera actual, fuerza comercial, exclusividad, capacidad financiera), el contrato de distribución que protege mis intereses y las señales de que un socio no está dando los resultados esperados.

4. PRICING PARA EL MERCADO INTERNACIONAL
¿Cómo ajusto el precio para el nuevo mercado? Dame el framework de pricing internacional: cómo adaptar el precio sin canibalizar el mercado de origen (arbitraje de precios), cómo tener en cuenta los costes adicionales de operar en otro país (aranceles, costes de envío, márgenes del distribuidor, IVA o impuestos locales), y cuándo conviene entrar con un precio de penetración vs. un precio de posicionamiento premium.

5. PROSPECCIÓN Y GENERACIÓN DE LEADS EN EL NUEVO MERCADO
¿Cómo genero oportunidades comerciales en un mercado donde no tengo red de contactos? Dame las tácticas de prospección cross-border más efectivas: el outreach por email en frío adaptado al idioma y cultura local, el uso de LinkedIn para mercados anglosajones y europeos, los directorios y bases de datos de empresas por país, las ferias sectoriales internacionales y cómo aprovecharlas para generar pipeline, y los programas de apoyo a la exportación de organismos como ICEX, IVACE o las cámaras de comercio bilaterales.

6. ASPECTOS PRÁCTICOS: DIVISA, COBRO Y RIESGO COMERCIAL
¿Cómo gestiono los aspectos prácticos de cobrar en otro país? Dame la guía de las opciones de pago internacionales B2B: las cartas de crédito, el confirming internacional, los seguros de crédito a la exportación (CESCE, Coface, Atradius), la gestión del riesgo de tipo de cambio y cuándo conviene facturar en la divisa del cliente frente a la propia. Incluye también cómo gestionar los impagos cross-border.

7. PRIMEROS CIEN DÍAS EN EL NUEVO MERCADO
Dame el plan de acción para los primeros cien días de actividad comercial en el nuevo mercado: los hitos que deben cumplirse en los primeros treinta, sesenta y noventa días, las métricas de pipeline que indican si la estrategia está funcionando, y las señales de alerta que deben llevarme a replantear el canal, el precio o el mensaje antes de haber quemado el presupuesto de expansión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir una estrategia de ventas cross-border para entrar en nuevos mercados internacionales.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Expansión internacional del producto',
                'description'       => 'Lleva el producto a nuevos mercados: el framework de decisión para priorizar países, la adaptación del producto al mercado local y los errores que cometen la mayoría de las empresas tech cuando se internacionalizan.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product management internacional con experiencia en expansión de productos tech a nuevos mercados globales. Necesito tu ayuda para diseñar la estrategia de expansión internacional de mi producto y evitar los errores más comunes que hacen fracasar internacionalizaciones que parecían prometedoras sobre el papel.

Mi contexto:
- Producto: [describe qué hace, para quién, qué problema resuelve]
- Mercado actual: [dónde tienes tracción hoy y qué métricas tienes]
- Mercados candidatos: [lista los países o regiones que estás considerando]
- Recursos disponibles: [tamaño del equipo de producto, ingeniería disponible para adaptación, presupuesto]
- Mayor incógnita: [¿el producto necesita muchos cambios para el nuevo mercado? ¿hay regulación? ¿hay competidores locales fuertes?]

Con ese contexto, dame:

1. FRAMEWORK DE PRIORIZACIÓN DE MERCADOS
¿Cómo decido a qué mercado ir primero? Dame el framework de priorización que debo aplicar: los criterios de tamaño de mercado (TAM), la similitud cultural y regulatoria con mi mercado actual (menor fricción de adaptación), la presencia de competidores locales fuertes, la penetración de internet y del tipo de dispositivo relevante para mi producto, y la facilidad operativa (idioma, zona horaria, legislación). Dame una plantilla de scoring para comparar los mercados candidatos de forma objetiva.

2. PRODUCT-MARKET FIT EN EL NUEVO MERCADO: ¿ES DISTINTO?
¿Por qué el product-market fit que tengo en mi mercado actual puede no transferirse al nuevo? Explícame los factores que hacen que un producto que funciona en un mercado no funcione en otro: las diferencias en el comportamiento del usuario, los sustitutos locales, la propensión al pago, los casos de uso que varían por cultura, y los hábitos digitales que difieren por región. Cómo hacer una investigación de usuario lean antes de lanzar en el nuevo mercado.

3. ADAPTACIÓN DEL PRODUCTO: MÍNIMO VS. MÁXIMO
¿Qué debo adaptar del producto para el nuevo mercado y qué puedo dejar igual? Dame el framework de decisión: el mínimo de localización necesario (idioma de la interfaz, formatos locales, métodos de pago locales), las adaptaciones de producto de nivel medio (cambios en el flujo para adaptarse al comportamiento del usuario local), y las adaptaciones profundas que solo tienen sentido si el mercado tiene suficiente tamaño. Cómo evitar el error de customizar demasiado para el primer mercado y crear una deuda técnica que impide escalar a los siguientes.

4. REGULACIÓN Y CUMPLIMIENTO POR MERCADO
¿Cómo evalúo los requisitos regulatorios del nuevo mercado antes de lanzar? Dame el checklist de due diligence regulatoria para un producto tech: protección de datos (GDPR en Europa, LGPD en Brasil, PIPL en China), regulación sectorial si aplica (fintech, healthtech, edtech tienen regulaciones específicas en muchos países), requisitos de localización de datos, y los bloqueadores regulatorios que hacen que algunos mercados sean inaccesibles sin una inversión legal significativa.

5. GO-TO-MARKET PARA LA EXPANSIÓN DE PRODUCTO
¿Cómo diseño el go-to-market del nuevo mercado desde la perspectiva de producto? Dame el proceso de lanzamiento en fases: el soft launch con un grupo reducido de usuarios del nuevo mercado antes del lanzamiento público, cómo conseguir los primeros usuarios locales para el beta, qué métricas de validación debo ver antes de acelerar la inversión, y cómo construir el feedback loop con usuarios del nuevo mercado cuando el equipo no está físicamente allí.

6. EQUIPO Y OPERACIONES INTERNACIONALES DESDE PRODUCTO
¿Cómo organizo el equipo de producto para gestionar la expansión internacional? Dame las opciones de estructura: un equipo central con responsabilidad global, equipos locales de producto en cada mercado, o un modelo híbrido. Cómo gestionar el roadmap cuando tienes que balancear las necesidades del mercado local con las del producto global, cómo priorizar las peticiones de adaptación local sin fragmentar el producto, y cuándo tiene sentido contratar un product manager local en el nuevo mercado.

7. LOS ERRORES MÁS COMUNES EN LA INTERNACIONALIZACIÓN DE PRODUCTO
Dame los siete errores que cometen la mayoría de las empresas tech cuando intentan llevar su producto a un nuevo mercado: el error de asumir que el éxito local se transfiere automáticamente, la internacionalización tardía que obliga a reescribir partes del código, la subestimación del esfuerzo de adaptación, el no tener en cuenta los métodos de pago locales, la falta de soporte en el idioma local como bloqueador de adopción, la elección del mercado equivocado por motivos emocionales y el error de lanzar demasiado pronto sin validación previa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar la estrategia de expansión internacional de un producto tech, desde la priorización del mercado hasta el lanzamiento.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de personas en operaciones internacionales',
                'description'       => 'Gestiona equipos y empleados en múltiples países: las diferencias culturales en el liderazgo, las legislaciones laborales que varían por país y el modelo de operación de RRHH que funciona cuando la empresa crece internacionalmente.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en gestión internacional de personas (Global HR) con experiencia en empresas que operan en múltiples países. Necesito tu ayuda para construir o mejorar el modelo de gestión de personas de mi empresa en un contexto internacional, donde las diferencias culturales, legales y operativas hacen que las políticas de RRHH de un solo país no sean suficientes.

Mi contexto:
- Tamaño de la empresa y distribución geográfica: [número de empleados por país]
- Países donde operamos o vamos a operar: [lista los países]
- Modelo actual de gestión de personas: [centralizado desde un país / descentralizado por filiales / sin modelo formal]
- Mayor reto actual: [legislación laboral compleja, diferencias culturales en el liderazgo, retención de talento internacional, onboarding remoto, etc.]
- Modelo de contratación: [empleados locales / contractors / EOR (Employer of Record) / filial propia]

Con ese contexto, dame:

1. DIFERENCIAS CULTURALES EN EL LIDERAZGO Y LA GESTIÓN DE EQUIPOS
¿Cómo cambia el estilo de liderazgo efectivo según la cultura? Explícame las diferencias prácticas en la gestión de equipos en los países donde opero: el nivel de jerarquía esperado por los empleados, la actitud hacia el feedback directo (en culturas de bajo contexto como Holanda o Alemania vs. culturas de alto contexto como Japón o Brasil), la relación con el fracaso y el error, y la expectativa sobre la autonomía y la toma de decisiones. Cómo debe adaptar su estilo de liderazgo un manager que gestiona equipos de diferentes culturas.

2. LEGISLACIÓN LABORAL: LO QUE VARÍA POR PAÍS
¿Cuáles son las diferencias legales más importantes que debo conocer al gestionar personas en múltiples países? Dame un mapa de los aspectos que más varían: el contrato de trabajo y los tipos permitidos (indefinido, temporal, freelance), el período de prueba máximo, los motivos de despido y la indemnización obligatoria, las vacaciones y los días festivos, las obligaciones de cotización a la seguridad social, y los convenios colectivos que pueden aplicar por sector. Enfoca el análisis en los países donde opero.

3. MODELOS DE CONTRATACIÓN INTERNACIONAL: EOR, FILIAL O CONTRACTOR
¿Cuándo contratar empleados locales directamente, usar un Employer of Record (EOR), o trabajar con contractors? Dame el análisis de las tres opciones: el coste y la complejidad de cada una, el nivel de control sobre el empleado, el riesgo legal (especialmente el riesgo de misclassification de contractors), cuándo el volumen de empleados en un país justifica abrir una filial, y los proveedores de EOR más utilizados (Deel, Remote, Rippling, Papaya Global) con sus diferencias principales.

4. POLÍTICAS DE RRHH QUE DEBEN SER GLOBALES Y LAS QUE DEBEN SER LOCALES
¿Qué políticas de RRHH deben ser iguales en todos los países y cuáles deben adaptarse? Dame el marco de decisión: las políticas que reflejan los valores de la empresa (código de conducta, política de diversidad e inclusión, política de seguridad psicológica) que deben ser globales y consistentes, y las políticas que deben adaptarse a la legislación y cultura local (compensación, horario, vacaciones, beneficios). Cómo comunicar que hay diferencias sin generar percepción de inequidad entre los equipos.

5. ONBOARDING INTERNACIONAL Y GESTIÓN REMOTA DE EQUIPOS DISTRIBUIDOS
¿Cómo integro correctamente a un nuevo empleado en un país diferente al de la sede? Dame el proceso de onboarding para empleados remotos internacionales: la documentación legal que varía por país, la configuración del equipo y accesos cuando hay diferente legislación de privacidad, cómo crear conexión cultural con la empresa a distancia, y las herramientas y rituales que mantienen la cultura y la cohesión del equipo cuando está distribuido en múltiples zonas horarias.

6. COMPENSACIÓN Y BENEFICIOS EN UN CONTEXTO INTERNACIONAL
¿Cómo diseño una política de compensación que sea equitativa globalmente pero tenga en cuenta las diferencias de coste de vida y mercado por país? Dame el framework de compensación internacional: los modelos de equalización (geographic pay, global bands, local market pay), cómo explicar a los empleados por qué alguien en otro país gana un salario diferente, y cómo gestionar los beneficios cuando lo que es valorado varía enormemente por país (seguro médico, plan de pensiones, coche de empresa, días de vacaciones adicionales).

7. EL MODELO DE RRHH QUE ESCALA INTERNACIONALMENTE
¿Cómo debe evolucionar la función de RRHH a medida que la empresa crece en número de países y empleados? Dame el modelo de madurez de Global HR: desde el fundador que gestiona todo, pasando por el primer HR Generalist, hasta el modelo de HRBPs locales con un centro de excelencia global. Cuándo contratar el primer HRBP local en un país, cuándo centralizar funciones como payroll o L&D, y cuáles son las herramientas de HRIS que escalan bien en un entorno multi-país (Workday, BambooHR, HiBob, Personio).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir un modelo de gestión de personas que funcione en operaciones de múltiples países.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Gestión financiera de operaciones internacionales',
                'description'       => 'Los aspectos financieros de operar en múltiples países: el riesgo de divisa, la repatriación de beneficios, la estructura legal óptima y la planificación fiscal internacional que no viola la normativa de ningún país.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en finanzas corporativas internacionales con experiencia en empresas que operan en múltiples monedas y jurisdicciones. Necesito tu ayuda para gestionar correctamente los aspectos financieros de operar internacionalmente: el riesgo de divisa, la tesorería internacional, la estructura legal y la planificación fiscal que cumple con la normativa.

Mi contexto:
- Estructura actual del grupo: [países donde operamos, si hay holding, filiales, etc.]
- Divisas con las que operamos: [lista las monedas relevantes]
- Volumen de ingresos y gastos en cada divisa: [aproximado]
- Mayor reto financiero internacional: [riesgo de tipo de cambio, repatriación de beneficios, estructura de holding, optimización fiscal, etc.]
- Tamaño del equipo financiero: [CFO solo, equipo pequeño, departamento financiero]

Con ese contexto, dame:

1. GESTIÓN DEL RIESGO DE TIPO DE CAMBIO (FX RISK)
¿Cómo gestiono el riesgo de que las fluctuaciones del tipo de cambio afecten a mis resultados? Explícame los tres tipos de exposición cambiaria (transaccional, traslación y económica) y cómo afecta cada uno a una empresa de mi perfil. Dame las estrategias de cobertura que puedo usar: los forward contracts, las opciones sobre divisas, el netting interno entre filiales, y cuándo tiene sentido una cobertura natural facturando en la divisa de los costes. Incluye el coste de las coberturas y cuándo no cubrirse puede ser la decisión correcta.

2. TESORERÍA INTERNACIONAL: CASH POOLING Y OPTIMIZACIÓN DE LIQUIDEZ
¿Cómo centralizo y optimizo la liquidez del grupo cuando tengo cuentas en varios países? Explícame los modelos de cash pooling (notional pooling, zero-balancing) y cuándo tiene sentido cada uno, cómo funcionan los pagos intragrupo y los préstamos entre filiales (intercompany loans) y qué tipo de interés deben tener para cumplir con arm's length, y cómo reducir el coste de las transacciones bancarias internacionales usando plataformas como Wise Business, Airwallex o los bancos de tesorería corporativa.

3. ESTRUCTURA LEGAL ÓPTIMA PARA OPERACIONES INTERNACIONALES
¿Cuál es la estructura societaria más eficiente para un grupo internacional? Dame el análisis de las opciones: holding en Países Bajos, Luxemburgo, Irlanda o España, las ventajas de cada jurisdicción para la sede del holding (red de convenios de doble imposición, participación en dividendos, patent box), cuándo usar filiales vs. sucursales vs. establecimientos permanentes, y cómo la estructura legal afecta a la repatriación de beneficios y a la responsabilidad del grupo.

4. REPATRIACIÓN DE BENEFICIOS Y DIVIDENDOS INTERNACIONALES
¿Cómo traigo los beneficios generados en otros países sin que la fiscalidad me destruya el retorno? Explícame el funcionamiento de las retenciones sobre dividendos (withholding tax) y cómo los convenios de doble imposición las reducen, el régimen de exención de participaciones en España y en otros países europeos (participation exemption), el funcionamiento del royalty como mecanismo de repatriación de beneficios por propiedad intelectual y los límites que impone la directiva anti-elusión fiscal (ATAD) a las estructuras agresivas.

5. PLANIFICACIÓN FISCAL INTERNACIONAL QUE CUMPLE LA NORMATIVA
¿Cómo optimizo la fiscalidad del grupo sin caer en elusión o evasión fiscal? Dame el framework de planificación fiscal internacional legítima: la sustancia económica necesaria en cada jurisdicción para que las estructuras sean respetadas por las autoridades, el impacto del pilar dos de la OCDE (impuesto mínimo global del 15%) en empresas que superan los 750 millones de euros de facturación, las reglas CFC (Controlled Foreign Corporations) que pueden hacer que se tribute en el país de la matriz por los beneficios de filiales en baja tributación, y el impacto de BEPS en la planificación fiscal internacional.

6. CONTROL DE GESTIÓN Y REPORTING FINANCIERO INTERNACIONAL
¿Cómo construyo el sistema de reporting financiero para un grupo internacional? Dame el framework de control de gestión multi-país: la consolidación de estados financieros bajo diferentes normas contables (NIIF vs. US GAAP vs. normas locales), cómo estandarizar los KPIs financieros cuando las filiales tienen diferentes estructuras de costes y modelos de negocio, y las herramientas de consolidación y planning que funcionan para grupos de tamaño medio (Prophix, Anaplan, Vena Solutions, o soluciones sobre ERP como SAP o Oracle).

7. DECISIONES FINANCIERAS CLAVE PARA EL CFO DE UN GRUPO EN CRECIMIENTO INTERNACIONAL
¿Cuáles son las cinco decisiones financieras que el CFO de un grupo en expansión no puede ignorar? Dame el análisis de: cuándo es el momento de contratar un asesor fiscal internacional especializado, cómo evaluar si la estructura actual del grupo es la óptima o necesita revisión, cuándo abrir una cuenta bancaria local en un nuevo país vs. operar con cuentas virtuales, cómo gestionar la relación con los bancos en cada país, y cuándo la complejidad financiera internacional justifica implementar un ERP global en lugar de seguir con sistemas locales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Gestionar los aspectos financieros de un grupo internacional: riesgo de divisa, estructura legal, tesorería y planificación fiscal.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Expansión internacional: el marco legal',
                'description'       => 'Los aspectos jurídicos de entrar en un nuevo mercado: la estructura societaria, los contratos locales, la normativa que varía por sector y las diferencias entre los sistemas de derecho continental y anglosajón.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado experto en derecho internacional de los negocios con experiencia en asesorar empresas en su expansión a nuevos mercados. Necesito que me ayudes a entender el marco legal de entrar en un nuevo mercado y a tomar las decisiones jurídicas correctas desde el principio, porque los errores legales en una expansión internacional son costosos y difíciles de revertir.

Mi contexto:
- Tipo de empresa y sector: [describe la actividad y el sector]
- País de origen: [dónde está constituida la empresa y cuál es su sistema legal de referencia]
- Mercado objetivo: [país o países a los que quieres entrar]
- Modelo de negocio en el nuevo mercado: [ventas directas, distribuidor, filial, joint venture, adquisición, etc.]
- Mayor preocupación legal: [responsabilidad, contratos con distribuidores, regulación sectorial, protección de IP, etc.]

Con ese contexto, dame:

1. DIFERENCIAS ENTRE DERECHO CONTINENTAL Y COMMON LAW
Explícame las diferencias prácticas entre los sistemas de derecho civil (continental) y el common law anglosajón que afectan a mis operaciones internacionales: el papel de la jurisprudencia vs. el código escrito, la interpretación de los contratos (el contrato anglosajón es exhaustivo porque el juez no puede interpretar más allá del texto, el continental puede ser más breve porque hay más principios generales), las diferencias en el régimen de responsabilidad contractual, y cómo afecta al diseño de los contratos que uso con mis socios, distribuidores o clientes en el nuevo mercado.

2. ESTRUCTURA SOCIETARIA: FILIAL VS. SUCURSAL VS. ESTABLECIMIENTO PERMANENTE
¿Qué forma jurídica debo usar para operar en el nuevo mercado? Explícame las diferencias entre constituir una filial (sociedad independiente con responsabilidad limitada), abrir una sucursal (establecimiento sin personalidad jurídica propia), o simplemente tener empleados o agentes que generen un establecimiento permanente sin estructura formal. Para cada opción indica: responsabilidad de la matriz, implicaciones fiscales, coste y tiempo de constitución, y en qué situaciones recomiendas cada una para mi caso.

3. CONTRATOS LOCALES: CUÁNDO ADAPTAR Y CUÁNDO ESTANDARIZAR
¿Puedo usar mis contratos estándar en el nuevo mercado o debo adaptarlos? Dame el análisis de los contratos más relevantes para mi actividad: los contratos de distribución o agencia (altamente regulados en la UE y en muchos países, con derechos de indemnización al agente que no puedo excluir contractualmente), los contratos con empleados locales, los contratos de servicios con clientes locales, y las cláusulas que pueden ser nulas o contrarias al orden público local aunque las firmen las partes. Cómo gestionar la ley aplicable y la jurisdicción en los contratos internacionales.

4. REGULACIÓN SECTORIAL EN EL NUEVO MERCADO
¿Qué regulación específica de mi sector debo conocer antes de operar en el nuevo mercado? Dame el proceso de due diligence regulatoria: cómo identificar si mi actividad requiere licencia, autorización o registro en el nuevo país, las regulaciones sectoriales que varían significativamente por mercado (servicios financieros, salud, alimentación, telecomunicaciones, transporte, educación), y los organismos reguladores relevantes en el mercado objetivo. Incluye cuánto tiempo suelen tardar los procesos de autorización y si existe la posibilidad de operar en modo sandbox o piloto regulatorio.

5. PROTECCIÓN DE LA PROPIEDAD INTELECTUAL INTERNACIONALMENTE
¿Cómo protejo mi propiedad intelectual en el nuevo mercado? Dame la estrategia de protección de IP internacional: el registro de marcas (sistema de Madrid de la OMPI vs. registros nacionales), las patentes internacionales (PCT), el derecho de autor y cuándo requiere registro local, la protección del know-how y los secretos empresariales a través de acuerdos de confidencialidad y políticas internas, y los países con mayor riesgo de infracción de IP donde la protección activa es especialmente importante.

6. RESOLUCIÓN DE DISPUTAS INTERNACIONALES
¿Cómo manejo los conflictos con socios, distribuidores o clientes en otro país? Explícame las opciones de resolución de disputas internacionales: el arbitraje internacional (ICC, LCIA, CIAM) y sus ventajas sobre los tribunales locales, la cláusula de arbitraje que debo incluir en mis contratos internacionales, cuándo el litigio ante tribunales locales puede ser inevitable, y cómo ejecutar una sentencia o laudo arbitral en un país extranjero a través del Convenio de Nueva York.

7. EL PRIMER AÑO LEGAL EN EL NUEVO MERCADO: CHECKLIST
Dame el checklist legal completo para el primer año de operación en un nuevo mercado: la constitución o registro de la entidad, los registros fiscales obligatorios, las licencias y autorizaciones sectoriales, la inscripción en registros de empleadores, el cumplimiento de protección de datos local, los seguros obligatorios por ley, y los plazos de presentación de cuentas y declaraciones que no debo perder el primer año para evitar sanciones. ¿Cuándo debo contratar un abogado local vs. trabajar con un despacho internacional con presencia en ese mercado?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Navegar el marco legal de la expansión internacional: estructura societaria, contratos, regulación y protección de IP.',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer success en mercados internacionales',
                'description'       => 'Adapta el modelo de CS a clientes de otras culturas: el soporte en múltiples idiomas, las diferencias en cómo los clientes de distintos países expresan su satisfacción o insatisfacción y el modelo operativo que escala globalmente.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Customer Success con experiencia en modelos internacionales de atención y retención de clientes. Necesito tu ayuda para adaptar mi modelo de CS a clientes de otros países y culturas, donde la forma de comunicar, las expectativas de soporte y los indicadores de satisfacción o riesgo de churn son distintos a los de mi mercado de origen.

Mi contexto:
- Tipo de producto o servicio: [SaaS, servicio profesional, plataforma, etc.]
- Mercado de origen donde ya tengo CS establecido: [país o región]
- Nuevos mercados donde tengo o voy a tener clientes: [lista los países o regiones]
- Tamaño del equipo de CS actual: [número de personas, si están centralizados o distribuidos]
- Mayor reto en la expansión internacional del CS: [idioma, diferencias culturales en la comunicación, cobertura horaria, escalar sin disparar costes, etc.]

Con ese contexto, dame:

1. DIFERENCIAS CULTURALES EN LA EXPRESIÓN DE SATISFACCIÓN E INSATISFACCIÓN
¿Cómo varían las señales de salud del cliente según la cultura? Explícame las diferencias en cómo los clientes de diferentes países expresan su satisfacción y, más importante, su insatisfacción: el cliente japonés o coreano que nunca se quejará directamente pero que no renovará (high context culture), el cliente americano que da un NPS 10 con facilidad pero que también cancela sin previo aviso, el cliente europeo del norte que es directamente crítico pero que valora la honestidad en la respuesta, y el cliente latinoamericano que construye relaciones personales antes de dar feedback negativo. Cómo adaptar las señales de riesgo de churn a cada cultura.

2. SOPORTE MULTILINGÜE: OPCIONES Y MODELOS OPERATIVOS
¿Cómo ofrezco soporte en el idioma del cliente sin multiplicar el equipo por el número de idiomas? Dame las opciones de modelo operativo multilingüe: el equipo centralizado con CSMs poliglotas, el modelo de hubs regionales (EMEA, APAC, AMER), el uso de herramientas de traducción en tiempo real para el soporte asíncrono, la externalización a BPOs locales para idiomas de menor volumen, y cuándo el soporte en inglés como lengua franca es suficiente para cada segmento de cliente. Incluye las herramientas de helpdesk que tienen mejor soporte multilingüe (Zendesk, Intercom, Freshdesk).

3. COBERTURA DE ZONAS HORARIAS SIN DISPARAR COSTES
¿Cómo ofrezco cobertura de soporte a clientes en múltiples zonas horarias? Dame el modelo de follow-the-sun y cuándo tiene sentido implementarlo, cómo diseñar los turnos para cubrir las horas de mayor demanda en cada región, el papel del soporte asíncrono de alta calidad (documentación, base de conocimiento, comunidad) para reducir la necesidad de soporte en tiempo real fuera del horario de oficina, y cómo usar la IA y los chatbots para el primer nivel de soporte en idiomas donde no tenemos equipo propio.

4. ONBOARDING PARA CLIENTES INTERNACIONALES
¿Cómo adapto el proceso de onboarding para clientes de diferentes culturas y mercados? Dame el análisis de lo que debe ser global y lo que debe localizarse: el contenido de onboarding en el idioma local vs. en inglés, la adaptación del timing y el ritmo del onboarding a las diferencias culturales en la velocidad de adopción, el papel de los materiales de formación adaptados a los casos de uso locales, y cómo asignar CSMs cuando el cliente está en un huso horario muy diferente al del equipo.

5. MÉTRICAS DE CS QUE FUNCIONAN GLOBALMENTE
¿Cómo interpreto el NPS, el CSAT y el CES cuando los clientes son de diferentes culturas? Explícame las diferencias en la distribución de respuestas por cultura (los clientes japoneses raramente dan un 10 en el NPS aunque estén muy satisfechos, los norteamericanos son más propensos a los extremos), cómo normalizar las métricas para poder comparar la salud del cliente entre regiones, y qué métricas de comportamiento del producto (login frequency, feature adoption, time-to-value) son mejores predictores del churn cuando las encuestas de satisfacción no son comparables entre culturas.

6. CONSTRUIR UN EQUIPO DE CS INTERNACIONAL
¿Cómo organizo y desarrollo un equipo de CS distribuido internacionalmente? Dame el modelo de gestión: cómo equilibrar la autonomía de los equipos locales con la consistencia del modelo de CS global, el perfil ideal del CSM para cada región (nativo del mercado vs. expatriado), el plan de onboarding de CSMs internacionales para que interioricen los valores y el modelo de CS de la empresa, y cómo medir el rendimiento cuando los mercados tienen condiciones de retención muy diferentes entre sí.

7. ESCALADO GLOBAL: EL MODELO DE CS QUE CRECE SIN ROMPER
¿Cómo escalo el modelo de CS internacionalmente sin que la calidad se deteriore ni los costes crezcan de forma lineal con los clientes? Dame el framework de escalabilidad internacional: el papel de la comunidad de usuarios como canal de soporte y éxito entre pares, el modelo de CS de alta eficiencia basado en datos de producto (product-led CS), la estandarización de playbooks que pueden ejecutar equipos locales sin dependencia constante del equipo central, y los indicadores de que el modelo de CS está escalando bien vs. los que indican que la expansión internacional está canibalizado la calidad del servicio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Adaptar y escalar el modelo de Customer Success a clientes internacionales de diferentes culturas.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'El freelance que trabaja con clientes internacionales',
                'description'       => 'Gana proyectos y clientes en otros países: las plataformas, los contratos en divisa extranjera, los aspectos fiscales de cobrar del extranjero y el posicionamiento que atrae a clientes que pagan en dólares o euros.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de negocio especializado en freelancers y profesionales independientes que trabajan con clientes internacionales. Necesito tu ayuda para dar el salto de trabajar solo con clientes de mi país a conseguir proyectos en otros países, especialmente en mercados donde el nivel de precios es más alto y donde puedo cobrar en dólares, euros o libras.

Mi contexto:
- Tipo de servicio freelance: [desarrollo, diseño, redacción, marketing, consultoría, traducción, etc.]
- País de residencia: [importante para los aspectos fiscales y legales]
- Experiencia actual: [años trabajando como freelance, tipo de clientes que tienes ahora]
- Nivel de inglés u otros idiomas: [nivel aproximado y qué idiomas hablas]
- Mayor barrera percibida para trabajar con clientes internacionales: [idioma, cómo encontrarlos, cómo cobrar, los contratos, la fiscalidad, la confianza del cliente, etc.]

Con ese contexto, dame:

1. POR QUÉ EL MERCADO INTERNACIONAL ES EL MEJOR MOVIMIENTO PARA UN FREELANCE
Explícame las ventajas concretas de trabajar con clientes internacionales para un freelance de mi perfil: el diferencial de precios entre mercados (lo que es caro en EE.UU. puede ser el mismo precio que cobras en tu país local pero con el triple de valor percibido para ellos), la diversificación del riesgo de tener todos los clientes en una sola economía, el acceso a proyectos más especializados e interesantes, y el efecto que tiene en tu posicionamiento local ser un freelance que trabaja con clientes internacionales.

2. CÓMO POSICIONARTE PARA ATRAER CLIENTES INTERNACIONALES
¿Cómo me posiciono para que clientes de otros países me encuentren y me contraten? Dame la estrategia de posicionamiento internacional: cómo adaptar mi portfolio y mi perfil para un público anglófono o del mercado objetivo, qué elementos de prueba social funcionan mejor con clientes de otros países (logos de empresas conocidas en ese mercado, testimonios en su idioma, cases studies con resultados en su divisa), y cómo construir presencia en los canales donde esos clientes buscan freelancers.

3. PLATAFORMAS Y CANALES PARA ENCONTRAR CLIENTES INTERNACIONALES
¿Dónde encuentro clientes que pagan en dólares o euros? Dame el mapa completo de canales: las plataformas de freelance generalistas (Upwork, Toptal, Freelancer.com) con sus diferencias y cómo posicionarse para ganar proyectos bien pagados en ellas, las plataformas especializadas por tipo de servicio (99designs, Dribbble para diseño, Gun.io para desarrollo, Contently para redacción), y las estrategias de outreach directo por LinkedIn o email en frío que funcionan para conseguir clientes directos sin intermediarios ni comisiones de plataforma.

4. CONTRATOS CON CLIENTES INTERNACIONALES
¿Cómo estructuro el contrato cuando el cliente está en otro país? Dame la guía de los contratos freelance internacionales: la ley aplicable y la jurisdicción (cuándo usar la tuya y cuándo la del cliente), las cláusulas esenciales que protegen al freelance en cualquier mercado (alcance del trabajo, propiedad intelectual, forma de pago y penalizaciones por retraso, terminación anticipada), los formatos de contrato más aceptados por clientes anglosajones, y las herramientas para firmar contratos digitalmente con reconocimiento legal internacional (DocuSign, HelloSign).

5. CÓMO COBRAR EN DIVISA EXTRANJERA Y REPATRIAR EL DINERO
¿Cómo recibo el pago de un cliente en dólares o euros y qué me cuesta hacerlo? Dame la comparativa de las opciones disponibles para un freelance: las cuentas en divisa extranjera (Wise, Revolut Business, Payoneer), los métodos de cobro internacionales aceptados por clientes empresariales (transferencia SWIFT, Stripe, PayPal), el coste real de cada opción incluyendo las comisiones de conversión de divisa, y cómo gestionar el riesgo de tipo de cambio si cobras en dólares pero tus gastos son en otra moneda.

6. FISCALIDAD DE LOS INGRESOS INTERNACIONALES COMO FREELANCE
¿Cómo tributo los ingresos que recibo de clientes en otros países? Explícame los aspectos fiscales esenciales: si el cliente extranjero debe hacerme retención en origen o no (IVA, withholding tax), cuándo emito factura con IVA y cuándo no según el país del cliente y el tipo de servicio, qué formularios o declaraciones debo presentar en mi país para declarar ingresos de fuente extranjera, y cómo funciona el modelo OSS (One Stop Shop) si facturas a particulares europeos desde un país de la UE. Aclara que para mi situación específica debo consultar a un asesor fiscal local.

7. GESTIÓN PRÁCTICA DE LA RELACIÓN CON CLIENTES INTERNACIONALES
¿Cómo gestiono el día a día de trabajar con clientes en otras zonas horarias y culturas? Dame los consejos prácticos: las herramientas de comunicación asíncrona que funcionan mejor para trabajo remoto internacional (Loom para los vídeos de actualización de proyecto, Notion para la documentación compartida, Slack o Linear para el día a día), cómo manejar las diferencias culturales en la comunicación (el cliente americano que quiere actualizaciones frecuentes vs. el alemán que prefiere resultados y no micro-actualizaciones), y cómo construir una relación de confianza con un cliente que nunca has visto en persona.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Conseguir clientes internacionales como freelance: posicionamiento, plataformas, contratos, cobro y fiscalidad.',
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
