<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills306Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Localización de marketing: adaptar el mensaje para cada mercado',
                'description'       => 'Aprende a adaptar tu estrategia de marketing a diferentes culturas y mercados sin perder la esencia de la marca, más allá de la simple traducción del contenido.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en marketing internacional y localización de marca con experiencia en empresas que han expandido su presencia a múltiples mercados. Entiendes la diferencia fundamental entre traducción y localización, los matices culturales que pueden hacer que un mensaje funcione o fracase en cada mercado, y cómo mantener la coherencia de marca mientras se adapta a contextos locales muy diferentes.

Necesito tu ayuda para desarrollar una estrategia de localización de marketing para mi empresa. Aborda los siguientes aspectos:

**1. El error de confundir traducción con localización**
Antes de hablar de táctica, ayúdame a entender qué es y qué no es localización:
- La diferencia entre traducir el texto y localizar el mensaje: por qué el mismo concepto puede funcionar en un mercado y resultar irrelevante o incluso ofensivo en otro
- Ejemplos de fallos de localización de marketing de grandes empresas y qué se puede aprender de ellos
- Los niveles de adaptación posibles: desde la localización superficial (idioma, moneda, fechas) hasta la adaptación profunda (narrativa, valores, humor, referencias culturales)
- Cómo decidir qué nivel de localización necesita cada mercado según la distancia cultural y el volumen de negocio esperado

**2. Investigación cultural y del mercado local**
La localización exitosa empieza por entender el mercado. Explícame:
- Qué investigar antes de entrar en un nuevo mercado: dimensiones culturales (Hofstede), comportamiento del consumidor local, competencia local, plataformas digitales dominantes, comportamiento de búsqueda
- Cómo encontrar y trabajar con consultores o agencias locales que realmente entiendan la cultura y no solo el idioma
- Las fuentes de información más útiles para entender mercados nuevos rápidamente
- Cómo construir un brief de mercado local que guíe la adaptación de los materiales de marketing

**3. Adaptación de mensajes y propuesta de valor**
El mismo producto puede tener propuestas de valor muy diferentes según el mercado. Explícame:
- Cómo identificar qué aspecto de tu propuesta de valor resuena más en cada mercado: el beneficio funcional, el social, el económico, el emocional
- Adaptación del tono de voz: mercados formales vs informales, directos vs indirectos, individualistas vs colectivistas
- Culturemas y referencias: cómo identificar las referencias culturales que funcionan en el mercado destino y las que deben eliminarse
- Humor y storytelling local: cuándo es un activo diferenciador y cuándo es un riesgo

**4. Adaptación visual y de diseño**
La localización no es solo texto. Explícame:
- Dirección de lectura y layout: RTL (árabe, hebreo) vs LTR y su impacto en el diseño
- Simbolismo de colores: cómo varían los significados culturales de los colores entre mercados
- Representación de personas: cómo adaptar las imágenes para que reflejen la diversidad del mercado local
- Adaptación de formatos: fechas, monedas, números (puntos vs comas), medidas, tamaños de papel

**5. Localización de canales y plataformas digitales**
Cada mercado tiene su ecosistema digital propio. Explícame:
- Las plataformas que dominan en cada región: WeChat en China, VK en Rusia, LINE en Japón, WhatsApp en Latinoamérica y Europa, TikTok vs Instagram según la generación y el país
- SEO local: cómo funciona el comportamiento de búsqueda diferente en cada mercado, herramientas de keyword research local, importancia de Baidu en China
- Localización de email marketing: frecuencia, horarios, tonos y estructuras de asunto que funcionan en cada mercado
- Gestión de redes sociales locales: si vale la pena tener cuentas separadas por mercado o gestionar todo desde una cuenta global

**6. Procesos y gobernanza de la localización**
Cómo hacer la localización sostenible y escalable. Explícame:
- Cómo construir un workflow de localización que no ralentice la velocidad de marketing
- Guías de estilo y glosarios por mercado: la infraestructura para mantener la coherencia entre distintos traductores y mercados
- Herramientas de TMS (Translation Management System) para escalar la localización: Phrase, Lokalise, Crowdin
- Cómo medir el éxito de la localización: métricas de engagement por mercado, conversión comparada, NPS local

Dame recomendaciones específicas para los mercados que quiero abordar cuando me cuentes más sobre tu empresa y los mercados objetivo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Desarrollar una estrategia de localización de marketing que adapta el mensaje a cada cultura sin perder la esencia de la marca',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Internacionalización técnica (i18n/l10n): construir software para cualquier idioma',
                'description'       => 'Implementa la internacionalización en tu aplicación desde la arquitectura: gestión de strings, formatos locales, RTL, plurales y el flujo de trabajo de localización con traductores.',
                'prompt_content'    => <<<'PROMPT'
Eres un ingeniero de software con amplia experiencia implementando internacionalización (i18n) y localización (l10n) en aplicaciones web y móviles. Conoces los estándares Unicode, ICU, los formatos de mensajes más populares (ICU MessageFormat, GNU gettext, XLIFF), las librerías más utilizadas por ecosistema (react-i18next, vue-i18n, i18n de Rails, intl de Java), y los puntos problemáticos que aparecen cuando una aplicación no fue diseñada para internacionalización desde el principio.

Necesito tu ayuda para implementar o mejorar la internacionalización de mi aplicación. Aborda los siguientes aspectos:

**1. Diseñar para i18n desde el principio: los errores que cuestan caro**
Antes de hablar de implementación, explícame los errores de diseño que hacen que i18n sea una pesadilla:
- Concatenación de strings: por qué nunca debes construir frases concatenando traducciones de palabras sueltas
- Asumir el orden de las palabras: por qué `"Hello " + username` es incorrecto y cómo usar placeholders correctamente
- Hardcodear formatos de fecha, hora, número y moneda en lugar de usar las APIs de internacionalización
- Asumir que el texto siempre ocupa el mismo espacio: el alemán puede ser un 30-40% más largo que el inglés
- Iconos y emojis con significado cultural específico
- Asumir LTR: cómo el soporte RTL afecta toda la arquitectura de UI si no se planifica desde el inicio

**2. Gestión de strings y archivos de traducción**
La infraestructura de los textos traducibles es fundamental. Explícame:
- Formatos de archivos de traducción: JSON, YAML, PO/MO (gettext), XLIFF, ICU. Cuándo usar cada uno y sus tradeoffs
- Organización de los archivos: namespaces, estructura de carpetas, granularidad de los archivos
- ICU MessageFormat: cómo usar plurales, selección por género, ordinales y otras construcciones que varían según el idioma
- Plurales: por qué casi ningún idioma funciona como el inglés (solo singular y plural) y cómo manejar las formas plurales de ruso, árabe o polaco
- Keys vs values: cómo nombrar las claves de traducción para que sean mantenibles a largo plazo

**3. Implementación por ecosistema**
Explícame los patrones de implementación según el stack:
- React/Next.js: react-i18next o next-intl. Configuración, lazy loading de traducciones, integración con SSR
- Vue/Nuxt: vue-i18n. Modo legacy vs modo composición, integración con Nuxt
- Node.js backend: i18n en respuestas de API, emails, notificaciones y mensajes de error
- iOS/Android nativo: Localizable.strings, strings.xml. Cómo funciona el proceso de traducción para apps móviles
- Ruby on Rails: la gem i18n, backend alternativo, i18n lazy lookup
- APIs: cómo manejar el Accept-Language header, respuestas localizadas, mensajes de error internacionalizados

**4. Soporte RTL (Right-to-Left)**
El RTL es el mayor desafío técnico de i18n para equipos que no lo han hecho antes. Explícame:
- Los idiomas RTL: árabe, hebreo, persa, y los detalles que los diferencian entre sí
- CSS logical properties: la forma correcta de hacer layouts que funcionen tanto en LTR como RTL sin duplicar el CSS
- Frameworks CSS y RTL: cómo Tailwind, Bootstrap y Material UI manejan RTL
- Bidireccionalidad dentro del texto (bidi): cómo mezclar texto RTL con números y URLs correctamente
- Iconos y assets direccionales: qué iconos hay que voltear en RTL y cuáles no

**5. El flujo de trabajo de localización con traductores**
El código es solo la mitad del trabajo; el otro es el proceso con traductores. Explícame:
- TMS (Translation Management Systems): Phrase, Lokalise, Crowdin, Transifex. Cómo integrarlos en el workflow de desarrollo
- CLI tools y automatización: extracción de strings, push/pull de traducciones, integración en CI/CD
- Contexto para traductores: cómo proporcionar screenshots y contexto para que las traducciones sean correctas
- Pseudo-localización: cómo testear el layout y la expansión de texto antes de tener las traducciones reales
- Continuous localization: cómo integrar la localización en el sprint para que no sea un bloqueo al hacer release

**6. Testing y calidad de i18n**
La internacionalización es propensa a bugs silenciosos. Explícame:
- Qué testear: strings sin traducir, keys faltantes, truncado de texto por expansión, formatos de fecha/número, RTL layout
- Herramientas de linting para detectar strings hardcodeados en el código
- Testing automatizado de RTL: cómo incluir tests visuales de RTL en el pipeline de CI
- Cómo validar traducciones antes del release: revisión nativa, herramientas de QA lingüístico

Dame recomendaciones específicas adaptadas a tu stack y el estado actual de tu aplicación cuando me cuentes más contexto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Implementar internacionalización técnica robusta desde la arquitectura hasta el flujo de trabajo con traductores',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño para la localización: layouts, tipografías y culturemas que cruzan fronteras',
                'description'       => 'Diseña sistemas visuales que se adaptan a diferentes idiomas, culturas y direcciones de lectura sin romper la experiencia ni requerir rediseño para cada mercado.',
                'prompt_content'    => <<<'PROMPT'
Eres un diseñador de producto y sistemas con experiencia diseñando interfaces que funcionan en múltiples idiomas y culturas. Has trabajado en productos globales que deben funcionar desde el japonés hasta el árabe pasando por el alemán, y conoces los retos de diseño que plantea cada idioma: expansión de texto, scripts diferentes, RTL, tipografías con requisitos distintos, y los matices culturales que afectan a cómo se percibe el diseño.

Necesito tu ayuda para diseñar mi producto o sistema de diseño pensando en la localización. Aborda los siguientes aspectos:

**1. Los fundamentos del diseño para localización**
Antes de entrar en detalles técnicos, explícame los principios que guían el diseño localizable:
- Por qué el diseño que asume un idioma específico es deuda de diseño: cada nuevo idioma requerirá intervención manual si el sistema no está preparado
- La diferencia entre localización superficial (cambiar el idioma) y adaptación cultural profunda (cambiar el diseño según las expectativas culturales del mercado)
- Cómo establecer desde el principio qué idiomas y escrituras necesita soportar el producto para tomar las decisiones de arquitectura de diseño correctas
- Los cuatro grandes desafíos de diseño para localización: expansión de texto, escrituras no latinas, RTL, y diferencias culturales en la percepción visual

**2. Diseñar para la expansión de texto**
El texto en alemán puede ser un 40% más largo que en inglés; en japonés puede ser mucho más corto. Explícame:
- Cómo diseñar componentes de UI que absorben la variación de longitud de texto sin romperse: truncado inteligente, contenedores flexibles, tipografía ajustable
- Labels de botones y calls-to-action: cómo diseñarlos para que funcionen con textos muy distintos
- Formularios y tablas: los elementos más propensos a romperse con texto más largo
- Cómo usar contenido real en el idioma de destino (no Lorem Ipsum) durante el diseño para detectar problemas antes de la implementación
- Pseudo-localización en diseño: simulación de texto expandido para testear el layout antes de las traducciones reales

**3. Tipografía internacional y soporte de scripts**
Cada escritura tiene sus propias necesidades tipográficas. Explícame:
- Sistemas de escritura que necesitan consideración especial: CJK (chino, japonés, coreano), árabe, hebreo, devanagari, tailandés
- Fuentes que soportan múltiples scripts: cuáles funcionan bien en multilingüe y cuáles fallan silenciosamente con caracteres de sustitución
- Tamaños de cuerpo de texto: el chino a 16px no tiene el mismo confort de lectura que el latín a 16px
- Interlineado y espaciado: cómo varía según la escritura (el árabe y el devanagari necesitan más espacio vertical)
- Google Fonts y fuentes variables: cuándo una fuente variable puede resolver el problema multilingüe y cuándo no

**4. Diseño RTL: más allá de espejear el layout**
El diseño RTL no es simplemente voltear el diseño. Explícame:
- Qué elementos se deben espejear en RTL y cuáles no: iconos de navegación sí, iconos de corazón o estrella no, iconos de reloj depende
- Layout y flujo: cómo los elementos deben reorganizarse para que el flujo visual siga la dirección de lectura
- Tipografía bidi: cómo manejar texto que mezcla RTL y LTR (números, URLs, nombres propios en textos árabes)
- Cómo trabajar en Figma con RTL: plugins, mirror, y cómo documentar correctamente los componentes RTL para el handoff
- Errores comunes en diseños RTL que solo se ven cuando alguien nativo los usa

**5. Culturemas visuales y diseño culturalmente apropiado**
Las referencias culturales en el diseño pueden incluir o excluir. Explícame:
- Simbolismo de colores: el blanco como color de luto en algunos mercados asiáticos, el verde como color de esperanza en algunos mercados islámicos, los matices del rojo en cultura china
- Representación de personas: cómo adaptar las ilustraciones y fotografías para que reflejen la diversidad local
- Iconos culturalmente específicos: buzones, semáforos, enchufes, monedas, emojis con significados distintos según la cultura
- Diseño de formularios para datos locales: cómo adaptar campos de nombre, dirección, teléfono, código postal a las convenciones de cada país

**6. Construcción de un sistema de diseño internacionalizable**
Un sistema de diseño bien construido absorbe la localización sin esfuerzo extra. Explícame:
- Cómo estructurar los tokens de tipografía para que soporten múltiples scripts
- Componentes con variantes de localización: cuándo tener variantes explícitas RTL/LTR vs cuándo resolverlo con CSS
- Documentación para diseñadores locales: cómo documentar el sistema para que diseñadores en otros mercados puedan adaptarlo correctamente
- Testing de localización en el sistema de diseño: cómo incluir la verificación multilingüe en el proceso de validación de componentes

Dame recomendaciones específicas adaptadas a mis idiomas objetivo y al tipo de producto cuando me cuentes más contexto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar sistemas visuales que se adaptan a múltiples idiomas, escrituras y culturas sin rediseño por mercado',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Pricing internacional: fijar precios en mercados con poder adquisitivo diferente',
                'description'       => 'Diseña una estrategia de precios para mercados internacionales que maximiza los ingresos globales considerando el poder adquisitivo, la competencia local y la paridad de poder de compra.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en estrategia de precios internacionales con experiencia en empresas SaaS y de producto que han expandido a mercados con niveles de ingresos muy diferentes. Entiendes los conceptos de paridad de poder de compra (PPP), arbitraje de precios, price anchoring en diferentes culturas, y cómo diseñar estructuras de precios que maximizan los ingresos globales sin canibalizar el mercado principal ni crear conflictos entre revendedores.

Necesito tu ayuda para diseñar una estrategia de precios internacionales. Aborda los siguientes aspectos:

**1. Por qué el pricing global uniforme deja dinero sobre la mesa o bloquea mercados**
Antes de proponer soluciones, ayúdame a entender el problema:
- Por qué el mismo precio en dólares es un precio muy diferente en poder adquisitivo real en distintos mercados: India, Brasil, Polonia vs EEUU, Alemania, Australia
- Los dos errores opuestos: precio demasiado alto que hace el producto inaccesible en mercados emergentes, precio demasiado bajo que crea arbitraje y destruye la percepción de valor en mercados premium
- Cómo el pricing uniforme afecta no solo a la conversión sino también al NPS y la percepción de justicia por parte de los clientes
- Ejemplos de empresas que han implementado bien (y mal) el pricing diferenciado por mercado

**2. Frameworks para calcular precios locales**
Existen varios enfoques para adaptar los precios. Explícame los principales:
- PPP (Purchasing Power Parity): cómo usar el índice de paridad de poder de compra del Banco Mundial para ajustar precios de forma objetiva
- Big Mac Index y métodos similares: formas pragmáticas de estimar el ajuste necesario
- Benchmarking de competencia local: cuándo el precio del competidor local es más relevante que el PPP
- Precio basado en valor local: cuándo el valor percibido del producto difiere sustancialmente según el mercado
- Cómo combinar estos enfoques en un modelo de decisión pragmático

**3. Implementación técnica del pricing diferenciado**
La estrategia debe poder implementarse sin crear caos operacional. Explícame:
- Detección de la ubicación del usuario para mostrar el precio correcto: geo-IP, moneda del navegador, preferencia explícita
- Manejo del arbitraje: cómo prevenir que usuarios de mercados premium usen VPN para acceder a precios de mercados emergentes
- Gestión de impuestos locales: IVA en Europa, GST en Australia, impuestos en la India. Cómo integrarlos en la presentación del precio
- Plataformas de pago que facilitan el pricing local: Paddle, Stripe con soporte de multi-moneda, PayPal local en mercados sin tarjetas
- Cómo gestionar las renovaciones cuando el tipo de cambio fluctúa significativamente

**4. Estructura de precios y paquetes por mercado**
No solo el precio sino la estructura puede necesitar adaptación. Explícame:
- Cuándo ofrecer planes diferentes según el mercado: funcionalidades distintas, tamaños de equipo distintos, modelos de uso distintos
- Precios de entrada más bajos para mercados emergentes: cómo hacerlo sin canibalizar los planes que compran en mercados premium
- Modelos de pago locales: cuotas mensuales vs anuales según el contexto del mercado, pago en efectivo en mercados con baja bancarización
- Descuentos por volumen adaptados: las expectativas de descuento por volumen son muy diferentes en diferentes culturas de negociación

**5. La dimensión cultural del pricing**
El precio no es solo un número; comunica posicionamiento. Explícame:
- Cómo varía la percepción de precio alto como señal de calidad según la cultura
- El charm pricing (precios terminados en 9): funciona diferente según el mercado
- Expectativas de negociación: en qué mercados un precio publicado es un punto de partida para negociar y en cuáles es definitivo
- Cómo el pricing afecta al posicionamiento de marca en el mercado local

**6. Gestión y evolución del pricing internacional**
El pricing internacional necesita revisión continua. Explícame:
- Con qué frecuencia revisar los precios locales y qué factores considerar: inflación, tipos de cambio, cambios en la competencia local
- Cómo comunicar cambios de precio en mercados locales minimizando el churn
- Métricas por mercado: cómo medir si el precio local está optimizado vs si hay potencial de mejora
- Cuándo simplificar la estructura de precios si se vuelve demasiado compleja de gestionar

Dame recomendaciones con números concretos adaptados a mis mercados objetivo cuando me cuentes más sobre tu producto y la situación actual.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar una estrategia de precios internacionales que maximiza ingresos globales adaptando el precio al poder adquisitivo local',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product localization: adaptar el producto sin fragmentar el roadmap',
                'description'       => 'Gestiona la localización del producto a nuevos mercados manteniendo un roadmap coherente, decidiendo qué adaptar, qué estandarizar y cómo priorizar mercados con recursos limitados.',
                'prompt_content'    => <<<'PROMPT'
Eres un product manager con experiencia llevando productos digitales a mercados internacionales. Has navigado la tensión entre la estandarización global (que permite escalar) y la adaptación local (que permite penetrar mercados con necesidades distintas). Entiendes cuándo la localización es un multiplicador de crecimiento y cuándo es un agujero negro que consume recursos sin ROI claro.

Necesito tu ayuda para definir la estrategia de localización del producto para nuevos mercados. Aborda los siguientes aspectos:

**1. La estrategia de localización de producto: cuándo adaptar y cuándo estandarizar**
Antes de hablar de features específicas, ayúdame a definir el marco estratégico:
- El espectro de adaptación: desde la traducción pura (mismo producto, diferente idioma) hasta la adaptación profunda (funcionalidades distintas para el mercado local)
- Los factores que determinan qué nivel de adaptación necesita cada mercado: diferencia regulatoria, diferencia en el comportamiento del usuario, competencia local con propuesta distinta, tamaño del mercado
- Cómo decidir qué mercados priorizar con recursos limitados: el framework para evaluar potencial, accesibilidad y coste de entrada
- La trampa de la fragmentación del roadmap: cómo evitar que la localización convierta un producto en varios productos paralelos imposibles de mantener

**2. Qué localizar primero: el orden de las decisiones**
La localización tiene que seguir un orden que maximice el impacto con el mínimo esfuerzo. Explícame:
- Idioma e internacionalización técnica (i18n): el prerequisito de todo lo demás. Cuándo invertir en ello antes de saber si el mercado tiene potencial
- Métodos de pago locales: uno de los mayores bloqueadores de conversión en mercados con baja penetración de tarjetas internacionales
- Contenido y SEO local: cuándo el contenido en el idioma local es una ventaja diferencial vs cuándo el inglés es suficiente
- Funcionalidades locales regulatorias: las que no son opcionales (facturación local, gestión de impuestos, cumplimiento de normativa de datos)
- Funcionalidades locales de mercado: las que te hacen más competitivo pero no son obligatorias

**3. Gestión del roadmap con localización**
La localización crea presión sobre el roadmap. Explícame:
- Cómo integrar los requerimientos de localización en el proceso de priorización sin que desplacen siempre las features globales
- Distinción entre features locales (solo para ese mercado) y features globales con adaptación local: cómo decidir cuál es cuál
- Cómo gestionar las expectativas de los equipos locales (de ventas, de CS) que presionan por features locales específicas
- Feature flags y configurabilidad: cómo construir el producto para que sea fácil activar o desactivar features por mercado sin bifurcar el código

**4. Recopilación de insights de usuarios locales**
Tomar decisiones de localización requiere entender al usuario local. Explícame:
- Cómo hacer user research en mercados remotos sin tener equipo local: research remoto, partnerships con agencias locales, comunidades online
- Qué preguntar en entrevistas con usuarios de mercados nuevos: comportamientos que difieren del mercado origen, frustraciones específicas del contexto local, necesidades no cubiertas por la competencia local
- Cómo traducir insights locales en decisiones de product: cuándo una insight local justifica una feature específica y cuándo es ruido
- Uso de datos de producto para entender el comportamiento del usuario local sin entrevistas: métricas de adopción de features por mercado, rutas de usuario, puntos de abandono

**5. Lanzamiento en un nuevo mercado: la coordinación cross-funcional**
El lanzamiento en un mercado nuevo involucra múltiples equipos. Explícame:
- Cómo coordinar producto, ingeniería, marketing, ventas, legal y CS para un lanzamiento de mercado
- El checklist de preparación para un nuevo mercado: qué debe estar listo antes del lanzamiento, qué puede esperar
- Cómo definir los criterios de éxito del lanzamiento y en qué plazo evaluar si el mercado tiene potencial
- Soft launch vs hard launch: cuándo tiene sentido un lanzamiento gradual y cómo aprender de las primeras semanas

**6. Métricas de localización de producto**
Cómo saber si la localización está funcionando. Explícame:
- Métricas de adoption por mercado comparadas con la baseline del mercado origen
- Time to value en el mercado nuevo: ¿los usuarios locales llegan al valor core del producto a la misma velocidad?
- Retention por mercado: diferencias que pueden indicar que hay necesidades locales no cubiertas
- NPS y CSAT por mercado: señales de satisfacción o frustración específicas del contexto local
- ROI de la localización: cómo calcular si el esfuerzo de localización está generando el retorno esperado

Dame recomendaciones concretas adaptadas a mi tipo de producto y los mercados que estoy considerando.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Definir la estrategia de localización de producto para nuevos mercados sin fragmentar el roadmap',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Global HR: gestionar equipos y compensación en múltiples países',
                'description'       => 'Navega la complejidad de gestionar empleados en diferentes países: legislación laboral, compensación equitativa, cultura de equipo y las herramientas que lo hacen posible.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en global people operations con experiencia gestionando equipos distribuidos en múltiples países y jurisdicciones. Conoces las principales herramientas para empleadores globales (Deel, Remote, Rippling, Papaya Global), las implicaciones legales de contratar en diferentes países, y los desafíos humanos y culturales de construir una cultura de equipo cuando las personas están en lugares muy distintos.

Necesito tu ayuda para diseñar o mejorar mi estrategia de Global HR. Aborda los siguientes aspectos:

**1. El modelo de empleo internacional: las opciones y sus implicaciones**
Antes de contratar en otro país, hay que entender las opciones disponibles. Explícame:
- Empleado local (entidad propia): cuándo tiene sentido abrir una entidad legal en el país, los costes y el tiempo requerido
- Employer of Record (EOR): qué es exactamente, cómo funciona, qué riesgos mitiga y qué control pierdes con Deel, Remote u otras plataformas similares
- Contractors independientes: las ventajas de flexibilidad vs el riesgo de misclassification y las consecuencias en diferentes jurisdicciones
- PEO (Professional Employer Organization): diferencia con EOR y cuándo tiene sentido
- Cómo decidir qué modelo usar en cada país según el volumen de contratación, el perfil de los empleados y el horizonte temporal

**2. Compensación global: el problema de la equidad y la competitividad**
Pagar a personas en diferentes países de forma justa y competitiva es uno de los mayores desafíos de Global HR. Explícame:
- Modelos de compensación para equipos globales: basado en la ubicación del empleado, basado en la ubicación de la empresa, basado en zona geográfica (tier 1, 2, 3)
- Los argumentos a favor y en contra de cada modelo: impacto en equidad percibida, atracción de talento, coste para la empresa
- Cómo hacer benchmarking salarial en mercados donde los datos son escasos: fuentes de datos de compensación por país (Levels.fyi, Radford, encuestas locales), cómo interpretar los datos cuando el mercado es opaco
- Beneficios locales obligatorios vs beneficios globales opcionales: cómo construir un paquete que sea competitivo en todos los mercados sin crear inequidades inaceptables

**3. Legislación laboral internacional: los mínimos que no puedes ignorar**
La legislación laboral varía enormemente entre países. Explícame los aspectos más críticos a conocer:
- Protección contra el despido: las diferencias entre EEUU (at-will) y la mayoría del resto del mundo donde el despido tiene costes y procedimientos formales
- Vacaciones, permisos y bajas legales: los mínimos legales y cómo superar las expectativas de forma sostenible
- Horario de trabajo y desconexión digital: las regulaciones que afectan a empleados remotos en Europa especialmente
- Impuestos y seguridad social: qué retenciones son obligatorias, quién es responsable de hacerlas en cada modelo de contratación
- GDPR y protección de datos de empleados: los datos que puedes recopilar y cómo gestionarlos en un equipo global

**4. Cultura de equipo en un entorno global y remoto**
La gestión del talento global es más que compliance. Explícame:
- Cómo construir una cultura de equipo cohesionada cuando las personas están en husos horarios muy diferentes y provienen de culturas muy distintas
- La gestión de la comunicación intercultural: los malentendidos más comunes y cómo evitarlos
- Equidad en la experiencia de empleado: cómo evitar que los empleados remotos o en países con menos presencia de la empresa se sientan ciudadanos de segunda
- Rituales y prácticas que funcionan para equipos globales: cómo hacer las all-hands, team offsites y conexión social de forma que sea inclusiva

**5. Performance management en un contexto global**
Evaluar el desempeño de forma justa en un equipo global tiene sus particularidades. Explícame:
- Cómo diseñar marcos de evaluación del desempeño que sean justos independientemente de la ubicación y el manager
- El sesgo de proximidad: por qué los empleados en la misma ubicación que la dirección tienden a tener mejores evaluaciones y cómo mitigarlo
- Diferencias culturales en el feedback: cómo estructurar el feedback para que sea recibido correctamente por personas de culturas con diferentes expectativas sobre la comunicación directa
- Promociones y development paths en un equipo global: cómo asegurar que las oportunidades de desarrollo no están concentradas en ciertas ubicaciones

**6. Herramientas y tech stack para Global HR**
La gestión global sin herramientas es caótica. Explícame:
- EOR y payroll global: Deel, Remote, Rippling, Papaya Global. Cómo evaluarlos y qué criterios priorizar
- HRIS global: las herramientas que realmente soportan múltiples países vs las que dicen soportarlos pero son un pain
- Compliance tracking: cómo mantenerse al día con los cambios legislativos en cada país donde tienes empleados
- Comunicación y colaboración: herramientas y prácticas que funcionan para equipos asíncronos en múltiples zonas horarias

Dame recomendaciones concretas adaptadas a los países donde tengo o quiero tener empleados cuando me cuentes más contexto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar la estrategia de Global HR para gestionar equipos distribuidos en múltiples países con compliance y equidad',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Transfer pricing e impuestos internacionales: la fiscalidad de operar globalmente',
                'description'       => 'Comprende los fundamentos de la fiscalidad internacional para empresas que operan en múltiples países: transfer pricing, establecimiento permanente, CFC rules y estructuras eficientes.',
                'prompt_content'    => <<<'PROMPT'
Eres un asesor fiscal especializado en fiscalidad internacional para empresas de tecnología y startups en fase de expansión global. Conoces los principios de transfer pricing de la OCDE, el riesgo de establecimiento permanente, las reglas de Controlled Foreign Corporations (CFC), y cómo las empresas construyen estructuras fiscales internacionales eficientes y defensibles ante las autoridades fiscales.

Necesito tu ayuda para entender la fiscalidad internacional de mi empresa. Esta información es orientativa y no reemplaza el asesoramiento de un asesor fiscal cualificado. Aborda los siguientes aspectos:

**1. El problema del establecimiento permanente (PE Risk)**
El riesgo más inmediato cuando empiezas a operar internacionalmente. Explícame:
- Qué es el establecimiento permanente y por qué tener empleados, oficinas o actividad comercial en otro país puede crear obligaciones fiscales allí
- Los distintos tipos de PE: fijo (oficina, almacén), de agente (empleado que firma contratos en nombre de la empresa), de servicios
- Por qué el trabajo remoto ha creado nuevos riesgos de PE que las empresas no anticipaban: empleados remotos en otros países que pueden crear PE inadvertidamente
- Cómo evaluar el riesgo de PE en los países donde tienes actividad y qué hacer para mitigarlo sin dejar de operar

**2. Transfer pricing: las reglas del juego entre entidades relacionadas**
Si tu empresa tiene entidades en diferentes países, el transfer pricing es obligatorio. Explícame:
- Qué es el transfer pricing y por qué existe: el principio de arm's length y la lógica de tratar las transacciones entre entidades del mismo grupo como si fueran entre terceros independientes
- Los tipos de transacciones que requieren transfer pricing: servicios intercompany, royalties por IP, préstamos entre entidades, compraventa de bienes y servicios
- Los métodos de transfer pricing reconocidos por la OCDE: precio comparable de mercado, cost-plus, precio de reventa, TNMM, etc.
- Documentación requerida: qué debes poder demostrar a las autoridades fiscales si te inspeccionan
- El riesgo de un transfer pricing mal documentado: ajustes fiscales, sanciones, doble imposición

**3. Estructuras de holding y IP holding**
Las empresas tecnológicas a menudo estructuran la propiedad intelectual en una entidad específica. Explícame:
- Por qué las empresas tecnológicas colocan la IP en jurisdicciones con regimes fiscales favorables: Irlanda, Países Bajos, Luxemburgo, Malta, Singapur
- Cómo funciona una estructura de IP holding: la entidad propietaria de la IP licencia su uso a las entidades operativas en otros países
- Los requisitos de substancia que exigen las regulaciones modernas (BEPS, Pilar 2): que la entidad que posee la IP tenga personas, decisiones y actividad real allí
- Por qué las estructuras puramente de paper company ya no funcionan y cuál es el coste real de tener substancia real

**4. BEPS y el Pilar 2: el nuevo paisaje fiscal internacional**
La fiscalidad internacional está cambiando rápidamente. Explícame:
- Qué es el proyecto BEPS de la OCDE y qué cambios concretos ha introducido en los últimos años
- El Pilar 1 (reasignación de derechos de gravamen) y el Pilar 2 (impuesto mínimo global del 15%): qué implican para una empresa en crecimiento
- A qué tamaño de empresa empiezan a aplicar estas nuevas reglas y cómo prepararme antes de llegar a ese umbral
- El impacto en la planificación fiscal internacional a largo plazo: qué estrategias que funcionaban antes dejan de ser viables

**5. IVA e impuestos indirectos en la operación internacional**
El IVA y los impuestos de ventas son otro gran desafío de la expansión internacional. Explícame:
- Obligaciones de IVA en la UE para empresas de servicios digitales: el régimen OSS y cómo funciona
- Sales tax en EEUU: la complejidad del nexus por estado y las soluciones para gestionarlo (Avalara, TaxJar)
- GST en Australia, Canadá y otros países: los umbrales y las obligaciones para empresas no residentes
- Cómo gestionar la facturación internacional y la validación de números de IVA de clientes B2B para la exención de IVA

**6. Planificación fiscal internacional responsable**
Hay una línea entre optimización fiscal legítima y evasión fiscal. Explícame:
- Cómo distinguir la planificación fiscal legítima (que aprovecha incentivos que los legisladores diseñaron conscientemente) de la evasión o elusión agresiva
- El riesgo reputacional de estructuras fiscales que son legales pero que si se publicaran serían un problema de relaciones públicas
- Cuándo y por qué conviene más pagar impuestos justos en los países donde operas que buscar la estructura más eficiente
- Cómo establecer una relación productiva con las autoridades fiscales de los países donde operas

Esta información es orientativa. Busca asesoramiento fiscal específico para tu situación antes de tomar decisiones.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Comprender los fundamentos de la fiscalidad internacional para tomar decisiones informadas sobre la estructura de la empresa global',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Expansión internacional: la estructura jurídica correcta para cada mercado',
                'description'       => 'Diseña la estructura jurídica para expandir tu empresa a nuevos mercados: tipos de entidades, requisitos de establecimiento, contratos locales y cumplimiento regulatorio.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado especializado en derecho mercantil internacional con experiencia asesorando a startups y empresas en crecimiento en su expansión a nuevos mercados. Conoces los diferentes tipos de entidades jurídicas disponibles en los principales mercados, los requisitos para su constitución, los contratos que necesita una empresa para operar legalmente, y los errores más comunes que cometen las empresas al expandirse internacionalmente.

Necesito tu ayuda para planificar la estructura jurídica de mi expansión internacional. Esta información es orientativa y requiere asesoramiento legal específico para cada jurisdicción. Aborda los siguientes aspectos:

**1. Cuándo necesitas entidad local y cuándo puedes operar sin ella**
El primer error es abrir entidades antes de necesitarlas. Explícame:
- Las actividades que puedes hacer en un mercado extranjero desde tu entidad doméstica: vender remotamente, tener reuniones comerciales, participar en eventos
- Las actividades que típicamente crean la necesidad de entidad local: emplear personas localmente, abrir oficinas, facturar a clientes locales con ciertos requisitos, cumplir con regulaciones sectoriales específicas
- Las alternativas a la entidad propia: representaciones, filiales vs sucursales vs contratos de agencia o distribución
- Cómo hacer la evaluación correcta para no abrir una entidad prematuramente (coste y complejidad innecesarios) ni demasiado tarde (incumplimiento legal)

**2. Tipos de entidades jurídicas por mercado**
Las formas jurídicas varían significativamente entre países. Explícame los aspectos clave de los principales mercados:
- Europa: diferencias entre la GmbH alemana, la SAS francesa, la Ltd británica, la SL española y la AB sueca. Cuándo cada una es la opción correcta para una empresa de tecnología
- EEUU: LLC vs Corporation (Delaware C-Corp para startups que buscan financiación institucional). Los mitos y realidades sobre Delaware
- Latinoamérica: los mercados más importantes (México, Brasil, Colombia, Argentina) y las diferencias clave en complejidad de constitución y operación
- Asia: Singapur como hub regional, los requisitos específicos de India, Japón y Australia
- Middle East: Free zones en UAE vs entidad local, y por qué muchas empresas tecnológicas entran por Dubái

**3. El proceso de constitución: lo que nadie te cuenta**
Más allá de los requisitos formales, explícame lo que realmente implica constituir en un nuevo mercado:
- Tiempos reales: cuánto tarda realmente constituir en los principales mercados (no lo que dice la web oficial)
- Costes reales: más allá de las tasas oficiales, el coste de abogados, notarios, apostillas, traducciones juradas
- Cuenta bancaria corporativa: uno de los cuellos de botella más frustrantes en muchos países, especialmente para empresas extranjeras
- Dirección local registrada: el requisito que muchos países tienen y cómo cumplirlo sin tener oficina física
- Representante legal local: cuándo es obligatorio y qué responsabilidades implica para la persona que acepta ese rol

**4. Contratos y documentación legal para operar localmente**
Una vez constituida la entidad, necesitas los contratos correctos. Explícame:
- Contratos de empleados locales: qué cláusulas son obligatorias, cuáles son prácticas estándar del mercado, y cuáles son problemas potenciales que debes evitar
- Contratos comerciales locales: cuándo adaptar tus términos y condiciones al derecho local y cuándo el derecho de tu país de origen es suficiente
- Protección de propiedad intelectual: cómo asegurarte de que tu IP está protegida en el nuevo mercado (registro de marcas, patentes, copyright)
- Contratos con distribuidores y agentes: los riesgos específicos de estos contratos en jurisdicciones donde la ley protege mucho a distribuidores y agentes locales

**5. Cumplimiento regulatorio por sector y mercado**
Algunos sectores tienen requisitos regulatorios que van más allá de la constitución empresarial. Explícame:
- Fintech y servicios financieros: los requisitos de licencia en los principales mercados y el proceso para obtenerlos
- Salud digital y medtech: los marcos regulatorios y los procesos de aprobación/certificación
- Datos y privacidad: GDPR en Europa, LGPD en Brasil, PDPA en Tailandia. Los requisitos de localización de datos en China y Rusia
- Comercio electrónico y marketplace: los requisitos específicos de cada mercado para plataformas que conectan compradores y vendedores

**6. Gestión legal de la expansión a largo plazo**
Una vez estás en múltiples mercados, la gestión legal se vuelve compleja. Explícame:
- Cómo construir un equipo legal que pueda gestionar múltiples jurisdicciones: in-house vs firmas locales vs firmas internacionales
- Cómo coordinar abogados en diferentes países sin que cada uno te dé consejo contradictorio
- Gestión de la propiedad intelectual global: marcas, patentes y copyright en múltiples jurisdicciones
- Cómo prepararte para una due diligence legal cuando recibes inversión o te adquieren: qué debe estar limpio desde el primer día

Dame orientación específica para los mercados que estás considerando cuando me cuentes más sobre tu empresa y planes de expansión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Planificar la estructura jurídica correcta para la expansión internacional eligiendo la entidad y contratos adecuados',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Global customer success: servir clientes en múltiples zonas horarias e idiomas',
                'description'       => 'Diseña un modelo de customer success que funciona a escala global, con cobertura de horarios, idiomas, equipo distribuido y experiencia del cliente consistente en todos los mercados.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en customer success operations con experiencia construyendo equipos globales de CS que dan servicio a clientes en múltiples zonas horarias, idiomas y culturas. Has resuelto los desafíos de escalar CS globalmente sin que los clientes de mercados no angloparlantes o en husos horarios lejanos reciban una experiencia de segunda clase.

Necesito tu ayuda para diseñar un modelo de customer success global. Aborda los siguientes aspectos:

**1. El diagnóstico: qué diferencia al CS global del CS single-market**
Antes de hablar de soluciones, ayúdame a entender los desafíos específicos del CS global:
- El problema de las zonas horarias: cómo garantizar respuesta adecuada a clientes en APAC, EMEA y Americas sin quemar al equipo
- El problema del idioma: cuándo el inglés es suficiente y cuándo es un bloqueador real para la retención de clientes
- El problema cultural: cómo las expectativas de relación con el proveedor, la comunicación directa vs indirecta, y la formalidad varían enormemente entre mercados
- El problema de la equidad interna: cómo evitar que los CSMs en mercados remotos o en horarios complicados tengan peores condiciones que los del mercado principal

**2. Modelos de cobertura global de CS**
Hay varios modelos para dar cobertura global. Explícame los principales con sus tradeoffs:
- Follow-the-sun: equipos en diferentes regiones que se pasan los clientes entre ellos. Qué requiere, qué funciona y qué no
- Pooled regional teams: equipos regionales que cubren su zona geográfica de forma autónoma. Coordinación global, ejecución local
- Hybrid: core team global + especialistas locales. Cuándo tiene más sentido
- Scaled CS con herramientas: para los segmentos de clientes donde la cobertura humana regional no es viable económicamente
- Cómo decidir qué modelo es el correcto para tu etapa y tu base de clientes

**3. Contratación y gestión de un equipo de CS global**
Construir el equipo correcto es la parte más difícil. Explícame:
- Perfil del CSM global: qué habilidades adicionales requiere (idiomas, sensibilidad cultural, autonomía para operar en otro huso horario que la dirección)
- Dónde contratar: las ventajas de contratar en los mercados donde están los clientes vs contratar en mercados de talento más económicos con idioma o zona horaria compatible
- Gestión del equipo distribuido: cómo mantener la cultura del equipo de CS y los estándares de calidad cuando el equipo está en múltiples países
- Compensación equitativa: los mismos desafíos de Global HR aplicados específicamente a CS

**4. Estandarización vs localización de los procesos de CS**
El equilibrio entre consistencia global y adaptación local es clave. Explícame:
- Qué debe ser estándar globalmente: frameworks de CS, herramientas, métricas, filosofía de relación con el cliente
- Qué debe ser adaptado localmente: tono de comunicación, frecuencia de contacto, canales preferidos, contenido de los check-ins
- Cómo documentar y transmitir el playbook de CS a equipos locales sin que pierda la esencia en la adaptación
- Cómo gestionar los clientes enterprise que son globales: cuando el mismo cliente tiene oficinas en múltiples regiones, qué CSM tiene la relación

**5. Herramientas y tech stack para CS global**
Las herramientas tienen que funcionar para el equipo global. Explícame:
- CS platform (Gainsight, ChurnZero, Vitally): qué capacidades son críticas para gestionar una cartera global
- Comunicación con clientes: cómo gestionar idiomas en la plataforma de customer success, templates multilingüe, reglas de routing por idioma o región
- Traducción en tiempo real: cuándo herramientas de traducción automática pueden ser un complemento útil para el equipo (DeepL, Google Translate integrado en herramientas)
- Handoff entre regiones en el modelo follow-the-sun: cómo asegurarse de que el CSM que toma una cuenta conoce el contexto completo

**6. Métricas de CS global: el problema del benchmark**
Comparar el desempeño de CS entre regiones requiere cuidado. Explícame:
- Por qué los mismos KPIs (NPS, CSAT, GRR, NRR) pueden tener valores muy diferentes entre regiones por razones culturales, no por calidad del servicio
- Cómo interpretar el NPS en mercados donde los clientes tienden a dar puntuaciones más bajas (Alemania, Japón) vs mercados donde dan puntuaciones más altas
- Benchmarks de CS por región: qué se considera bueno en cada mercado
- Cómo establecer objetivos de CS que sean justos y motivadores para equipos en diferentes mercados

Dame recomendaciones concretas adaptadas a mi base de clientes, los mercados donde opero y el estado actual del equipo de CS.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar un modelo de customer success global con cobertura de horarios, idiomas y culturas para clientes en múltiples mercados',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Freelance internacional: cobrar en otras divisas y trabajar con clientes globales',
                'description'       => 'Navega los aspectos prácticos del freelance internacional: cómo cobrar de clientes extranjeros, gestionar divisas, cumplir obligaciones fiscales y construir una reputación global.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor especializado en la operativa del trabajo freelance internacional. Has ayudado a cientos de profesionales independientes a expandir su base de clientes más allá de su país de origen, superando los obstáculos prácticos de los cobros internacionales, la gestión de divisas, las obligaciones fiscales y la construcción de una presencia que atrae clientes globales.

Necesito tu ayuda para construir mi negocio freelance orientado a clientes internacionales. Aborda los siguientes aspectos:

**1. La oportunidad del freelance internacional: por qué tiene sentido**
Antes de hablar de operativa, ayúdame a entender el potencial:
- Por qué trabajar con clientes de mercados con mayor poder adquisitivo puede multiplicar los ingresos del freelance sin necesariamente multiplicar el esfuerzo
- Los perfiles de freelance que más se benefician del mercado internacional: qué habilidades tienen demanda global y cuáles son más difíciles de exportar
- Los mercados con mayor demanda de servicios freelance y mayor disposición a pagar: EEUU, UK, Europa del norte, Australia, Canada
- Los obstáculos reales que superar: idioma, confianza, reputación en mercados donde no tienes red, diferencia de zona horaria

**2. Cómo cobrar de clientes internacionales**
El cobro es el primer obstáculo práctico. Explícame todas las opciones con sus costes reales:
- Transferencia bancaria internacional SWIFT: comisiones, tipos de cambio, tiempos. Cuándo tiene sentido
- Wise (antes TransferWise): cómo funciona, los costes reales, cuándo es la mejor opción para el freelance
- PayPal: las comisiones reales (no solo las del envío sino las de conversión de divisa), cuándo conviene y cuándo es caro
- Stripe: cómo configurarlo para cobrar en múltiples divisas, las comisiones, los requisitos de activación en diferentes países
- Plataformas de freelance (Upwork, Toptal, Malt): los pros y contras de que ellas gestionen el cobro
- Tarjetas de débito multidivisa (Revolut, N26): cómo usarlas para minimizar el coste de recibir y gastar en divisas extranjeras

**3. Gestión de divisas y riesgo de tipo de cambio**
Trabajar con múltiples divisas crea exposición al tipo de cambio. Explícame:
- Cómo decidir en qué divisa facturar: en la del cliente (más fácil para ellos pero asumes el riesgo de cambio) o en la tuya (más cómodo para ti pero puede ser una fricción para el cliente)
- Cómo gestionar el riesgo de tipo de cambio cuando tienes ingresos en dólares o euros pero gastos en moneda local
- Cuándo y cómo hacer hedging básico con herramientas como Wise o Revolut
- El impacto del tipo de cambio en la planificación financiera anual: cómo presupuestar cuando tus ingresos fluctúan con el tipo de cambio

**4. Obligaciones fiscales del freelance internacional**
La fiscalidad del trabajo internacional es compleja. Explícame los conceptos clave:
- En qué país pagas impuestos: generalmente donde eres residente fiscal, independientemente de dónde esté el cliente
- Convenios de doble imposición: qué son, para qué sirven y cómo evitar que te retengan impuestos en el país del cliente cuando no deberías
- IVA e impuestos indirectos: cuándo tienes que cobrar IVA a clientes europeos y cuándo no (regla B2B en la UE)
- Formularios W-8BEN para clientes de EEUU: qué son, cuándo los necesitan y cómo declararlos correctamente
- La obligación de declarar en tu país de residencia los ingresos de fuentes extranjeras: cómo documentarlos correctamente

**5. Construir una presencia y reputación internacional**
El mayor desafío no es el cobro sino conseguir los clientes. Explícame:
- Plataformas para encontrar clientes internacionales: Upwork, Toptal, Malt, LinkedIn, AngelList. Cuál tiene sentido para cada perfil de freelance
- Portfolio internacional: qué hace que un portfolio convenza a clientes que no te conocen y están en otro país
- Propuesta de valor diferencial: cómo posicionarte para competir en mercados donde hay talento local que factura en la misma moneda que el cliente
- Gestión de la diferencia de zona horaria: cuánta superposición de horario necesitas para trabajar eficientemente con clientes en otras zonas, y cómo manejarlo en la propuesta

**6. La operativa del día a día trabajando con clientes internacionales**
El trabajo diario con clientes internacionales tiene sus particularidades. Explícame:
- Comunicación profesional en inglés: recursos para mejorar y prácticas para parecer más nativo y profesional
- Contrato freelance internacional: qué elementos incluir, qué legislación aplicar, cómo hacerlo ejecutable si hay un conflicto
- Gestión de expectativas culturales: cómo detectar y adaptarse a diferencias en la comunicación, plazos y revisiones según el origen del cliente
- Herramientas para trabajar remotamente con clientes en otras zonas horarias: qué stack de comunicación y colaboración funciona mejor cuando no coincides en horario

Dame recomendaciones concretas adaptadas a mi perfil profesional y los mercados internacionales que me interesan cuando me cuentes más contexto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Superar los obstáculos prácticos del freelance internacional: cobros, divisas, fiscalidad y reputación global',
                'vote_score'        => 47,
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
