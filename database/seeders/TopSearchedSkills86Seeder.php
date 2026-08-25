<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills86Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia SEO local',
                'description'      => 'Posiciona tu negocio físico en búsquedas de proximidad: optimización del perfil de Google Business, consistencia NAP, reseñas y contenido local.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en SEO local con más de ocho años ayudando a negocios físicos, franquicias y cadenas de establecimientos a posicionarse en las búsquedas de proximidad de Google. Conoces en profundidad el funcionamiento del Local Pack, Google Business Profile y los factores de ranking local que diferencia del SEO orgánico tradicional.

Necesito diseñar una estrategia de SEO local para mi negocio. Guíame a través del proceso completo:

**1. Cómo funciona el SEO local y en qué se diferencia del SEO orgánico**
- Explica el ecosistema de resultados locales en Google: el Local Pack (los tres resultados del mapa), el Knowledge Panel y los resultados orgánicos locales, y cuándo aparece cada uno.
- Describe los tres pilares del algoritmo de SEO local de Google: Relevance (qué tan relevante es el negocio para la búsqueda), Distance (qué tan cerca está el usuario) y Prominence (qué tan conocido y bien valorado es el negocio).
- Explica por qué el SEO local es especialmente valioso para negocios con establecimiento físico: las búsquedas con intención local tienen una tasa de conversión muy superior a las búsquedas informacionales.

**2. Optimización del perfil de Google Business Profile**
- Proporciona una auditoría completa del perfil de Google Business Profile: cada campo que hay que rellenar (nombre, dirección, teléfono, horarios, categorías, descripción, atributos, fotos, preguntas y respuestas, productos y servicios) y el impacto que tiene cada uno en el ranking.
- Explica la importancia de la categoría principal y las categorías secundarias: cómo elegirlas correctamente y qué ocurre si se elige una categoría demasiado genérica o demasiado específica.
- Describe la estrategia de publicación de posts en Google Business: qué tipos de posts (ofertas, novedades, eventos) tienen más impacto y con qué frecuencia publicar.
- Detalla cómo gestionar la sección de preguntas y respuestas de forma proactiva para influir en la información que ven los clientes potenciales.

**3. Consistencia NAP y citations**
- Explica el concepto de NAP (Name, Address, Phone) y por qué la inconsistencia entre distintos directorios confunde a Google y daña el ranking local.
- Describe los directorios y plataformas más importantes donde debe aparecer el negocio de forma consistente en España: Google Business, Bing Places, Apple Maps, Yelp, páginas amarillas, Tripadvisor (si aplica), directorios sectoriales y la propia web.
- Proporciona un proceso de auditoría y corrección de citations: cómo encontrar menciones inconsistentes y cómo corregirlas.

**4. Estrategia de reseñas**
- Explica el impacto de las reseñas en el SEO local: número de reseñas, puntuación media, frecuencia de nuevas reseñas y calidad de las respuestas del negocio.
- Describe las mejores prácticas para solicitar reseñas a clientes satisfechos: cuándo pedirlas, cómo pedirlas (enlace directo al formulario de reseña de Google Business) y qué decir para que el cliente sepa cómo dejar una reseña útil.
- Explica cómo responder a reseñas positivas y negativas de forma que refuerce la señal de relevancia para Google y mejore la percepción de los clientes potenciales.

**5. Optimización web para búsquedas locales**
- Describe cómo optimizar la web del negocio para el SEO local: página de destino geolocalizada, Schema markup de LocalBusiness, mención de la ciudad y zona en los títulos y meta descripciones, y contenido con referencias locales.
- Explica cómo crear páginas de ubicación para negocios con múltiples establecimientos o que sirven a distintas zonas geográficas.
- Detalla la estrategia de contenido local: blog con artículos sobre eventos, guías y noticias de la zona que generan autoridad local.

**6. Métricas y seguimiento**
- Define los KPIs del SEO local: posición en el Local Pack para las keywords clave, número de visitas al perfil de Google Business, llamadas y clics a "cómo llegar" desde el perfil, y conversiones atribuidas a búsquedas locales.
- Explica las herramientas para monitorizar el SEO local: Google Search Console, el panel de estadísticas de Google Business Profile, BrightLocal y Whitespark.

**Preguntas iniciales:**
1. ¿Cuál es tu tipo de negocio y en qué ciudad o zona opera?
2. ¿Tienes ya un perfil de Google Business verificado?
3. ¿Cuántas reseñas tienes actualmente y cuál es tu puntuación media?
4. ¿Tienes web propia? ¿Está optimizada para búsquedas locales?

Dime tu situación y empezamos por donde más impacto tiene para tu negocio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar una estrategia de SEO local para posicionar un negocio físico en búsquedas de proximidad',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Implementación de internacionalización (i18n)',
                'description'      => 'Implementa i18n en tu app web o móvil: gestión de traducciones, formatos de fecha, número y moneda, pluralización y flujos de trabajo con traductores.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de software especializado en internacionalización (i18n) y localización (L10n) con experiencia implementando soporte multi-idioma en aplicaciones web y móvil usadas en más de veinte países. Conoces las librerías más usadas, los errores más comunes y los aspectos culturales que van más allá del texto.

Necesito implementar internacionalización completa en mi aplicación. Guíame a través del proceso técnico:

**1. Diferencias entre i18n, L10n y t9n**
- Explica los tres conceptos y su relación: i18n (preparar el código para soportar múltiples idiomas), L10n (adaptar el contenido y el formato a una localización específica) y t9n (la traducción del texto en sí).
- Describe por qué la i18n mal hecha desde el principio es muy costosa de corregir: strings hardcodeadas en el código, fechas y números sin formatear correctamente y diseño que no tiene en cuenta la expansión del texto.
- Explica el concepto de pseudolocalización como técnica de prueba: sustituir el texto por caracteres especiales para detectar strings sin traducir y problemas de maquetación antes de tener las traducciones reales.

**2. Arquitectura de la i18n en aplicaciones web**
- Compara las principales librerías de i18n para las plataformas más comunes: i18next (React, Vue, Angular, Node), react-intl (React), vue-i18n (Vue), Angular i18n, y Format.js como base común.
- Explica cómo estructurar los archivos de traducción: un archivo por idioma vs. un archivo por namespace (por sección del producto), ventajas e inconvenientes de cada enfoque y cómo gestionar archivos que crecen a miles de claves.
- Describe la estrategia de carga de traducciones: carga completa al inicio (más simple) vs. lazy loading por namespace (mejor para aplicaciones grandes).

**3. Gestión de formatos culturales**
- Explica cómo usar la API nativa de JavaScript (Intl) para formatear fechas, horas, números, monedas y listas de forma correcta según el locale: `Intl.DateTimeFormat`, `Intl.NumberFormat`, `Intl.RelativeTimeFormat`.
- Detalla los errores más comunes en el formateo: usar `toLocaleDateString()` sin el locale explícito, asumir que el separador decimal es siempre un punto, hardcodear el símbolo de moneda antes del número cuando en algunos idiomas va después.
- Describe cómo manejar las zonas horarias: cuándo almacenar siempre en UTC, cómo mostrar la hora en la zona del usuario y cómo manejar eventos futuros con cambio de hora estacional.

**4. Pluralización y género gramatical**
- Explica el sistema de pluralización ICU MessageFormat y por qué las reglas de plural varían radicalmente entre idiomas: inglés (one/other), ruso (one/few/many/other), árabe (seis categorías de plural).
- Muestra cómo implementar la pluralización correctamente en i18next con `i18nKey_one`, `i18nKey_other` y los equivalentes para idiomas con más categorías.
- Detalla cómo manejar el género gramatical en idiomas como el español, el francés o el alemán donde los adjetivos y artículos concuerdan con el género del sustantivo.

**5. Soporte para idiomas RTL (Right-to-Left)**
- Explica qué cambios son necesarios en el CSS para soportar árabe, hebreo y persa: uso de `direction: rtl`, propiedades lógicas CSS (`margin-inline-start` en lugar de `margin-left`), flexbox y grid con RTL, e iconos direccionales que deben reflejarse.
- Describe cómo detectar el idioma del usuario y aplicar el atributo `dir="rtl"` al elemento raíz.

**6. Flujo de trabajo con traducciones**
- Explica cómo integrar el proceso de traducción en el flujo de desarrollo: extracción automática de strings nuevas, envío a traductores, revisión y merge de las traducciones en el repositorio.
- Describe las herramientas de gestión de traducciones: Lokalise, Crowdin, Phrase, y cómo se integran con GitHub o GitLab para automatizar el proceso.

**Preguntas iniciales:**
1. ¿Qué stack usas (React, Vue, Angular, Next.js, móvil nativo)?
2. ¿Tienes ya alguna implementación de i18n o empiezas desde cero?
3. ¿A qué idiomas y localizaciones necesitas dar soporte?
4. ¿Tienes un equipo de traducción interno o trabajas con traductores externos?

Dame los detalles y te guío con la implementación específica para tu stack.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 90,
                'use_case'         => 'Implementar soporte de internacionalización completo en una aplicación web o móvil',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño para contenido generado por el usuario (UGC)',
                'description'      => 'Diseña sistemas y interfaces que aprovechan el contenido creado por los propios usuarios para enriquecer el producto y construir comunidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product designer especializado en plataformas de contenido generado por usuarios con experiencia diseñando sistemas de publicación, moderación y presentación de UGC en productos digitales de escala como marketplaces, comunidades y plataformas de reseñas.

Necesito diseñar el sistema de UGC de mi producto. Guíame a través del proceso de diseño completo:

**1. Qué es el UGC y por qué es estratégicamente valioso**
- Explica los distintos tipos de contenido generado por usuarios y su valor para el producto: reseñas y valoraciones (confianza), fotos y vídeos de producto (autenticidad), preguntas y respuestas (reducción de fricción en la compra), posts y artículos (comunidad), listas y colecciones (descubrimiento) y conversaciones en foro (retención).
- Describe el efecto flywheel del UGC: cómo el contenido de los usuarios atrae a nuevos usuarios que a su vez generan más contenido.
- Explica el riesgo del UGC si no se diseña bien: spam, contenido de baja calidad, desinformación y experiencias de usuario frustrantes que dañan la confianza en el producto.

**2. Diseño de la experiencia de creación de contenido**
- Explica los principios de diseño para facilitar la creación de UGC: reducir la fricción al mínimo (el formulario más simple posible), proporcionar contexto sobre qué información es útil, mostrar ejemplos del contenido que se espera y ofrecer feedback inmediato sobre el contenido publicado.
- Describe cómo diseñar el onboarding de los creadores de UGC: el primer post o la primera reseña es el momento más crítico, cómo guiar al usuario a través de ese primer paso.
- Detalla los patrones de diseño que aumentan la calidad del UGC: el template estructurado (guía al usuario con preguntas específicas), el sistema de etiquetas (organiza el contenido), el editor de texto enriquecido mínimo (formato básico sin complejidad) y el uploader de imágenes con previsualización.

**3. Sistema de moderación y confianza**
- Explica los tres niveles de moderación y cuándo usar cada uno: moderación previa (todo el contenido se revisa antes de publicarse), moderación reactiva (se publica y se modera si se reporta) y moderación automatizada con ML (filtra automáticamente el contenido claramente problemático).
- Describe los patrones de diseño para el reporte de contenido por parte de los usuarios: cómo hacer el botón de "reportar" visible sin ser prominente, qué información pedir al usuario que reporta y cómo gestionar el feedback al reportador.
- Detalla cómo diseñar el sistema de señales de confianza del UGC: verificación de compra en reseñas, perfil del autor con historial, upvotes de otros usuarios y distinción entre reseñas verificadas y no verificadas.

**4. Presentación y descubrimiento del UGC**
- Explica cómo diseñar la presentación del UGC para maximizar su utilidad: ordenación por relevancia (no solo por fecha), filtros por valoración y tipo de contenido, resumen de opiniones con highlights y presentación visual de fotos de usuarios junto a las fotos de producto.
- Describe los patrones de diseño para el contenido de galería UGC: el muro de fotos de Instagram-style, la galería en grid y el carrusel, con sus ventajas e inconvenientes según el contexto.
- Detalla cómo usar el UGC para personalizar la experiencia: mostrar reseñas de usuarios similares al visitante (misma edad, misma talla, mismo tipo de uso).

**5. Motivación y gamificación de los creadores**
- Explica los mecanismos de motivación para incentivar la creación de UGC sin hacerlo parecer forzado: puntos y niveles, insignias, visibilidad del perfil, beneficios tangibles (descuentos, acceso anticipado) y reconocimiento social.
- Describe cuándo la gamificación ayuda y cuándo daña la autenticidad del UGC.

**6. Métricas del sistema de UGC**
- Define los KPIs del UGC: tasa de contenido creado por usuario activo, tasa de moderación (contenido rechazado), impacto del UGC en la conversión (A/B test de páginas con y sin UGC) y calidad media del contenido.

**Preguntas iniciales:**
1. ¿Qué tipo de UGC quieres implementar y en qué tipo de plataforma?
2. ¿Tienes ya usuarios activos que podrían crear contenido desde el día uno?
3. ¿Cuáles son tus principales preocupaciones sobre el UGC (calidad, spam, moderación)?
4. ¿Qué plataformas de referencia te parecen bien diseñadas en este aspecto?

Dame el contexto y diseñamos el sistema de UGC adecuado para tu producto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 75,
                'use_case'         => 'Diseñar el sistema de creación, moderación y presentación de contenido generado por usuarios',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Televentas y ventas telefónicas',
                'description'      => 'Construye el script y el protocolo de llamada que convierte cold calls en demos cualificadas: apertura, manejo de objeciones y cierre en menos de cinco minutos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas internas con más de quince años entrenando equipos de televentas en sectores B2B de tecnología, servicios financieros y software. Has diseñado scripts, protocolos y programas de formación que han llevado a equipos de cero a superar sus cuotas de manera consistente.

Necesito mejorar mi proceso de ventas telefónicas y televentas. Guíame a través del método y los scripts:

**1. La mentalidad correcta en las ventas telefónicas**
- Explica por qué la mayoría de los comerciales fracasan en el teléfono: miedo al rechazo, scripts rígidos que suenan robóticos, objetivos mal definidos (intentar cerrar en la primera llamada en lugar de cualificar y obtener el siguiente paso) y falta de preparación.
- Describe la mentalidad del comercial de alto rendimiento en televentas: la llamada tiene un único objetivo (el siguiente paso, no la venta), cada "no" es información valiosa y la consistencia en el volumen de llamadas es más importante que la perfección en cada llamada.
- Explica la diferencia entre una llamada de prospección (cold call), una llamada de seguimiento (warm call) y una llamada de demo o discovery, y qué script y objetivo corresponde a cada tipo.

**2. Preparación antes de la llamada**
- Proporciona un checklist de preparación de 5 minutos antes de cada llamada: investigación del prospecto (LinkedIn, web, noticias recientes), hipótesis de dolor o necesidad, personalización del script, objetivo de la llamada (qué quiero conseguir al colgar) y alternativas si no cogen el teléfono.
- Explica cómo usar la información del prospecto para personalizar los primeros quince segundos de la llamada de forma que el interlocutor sienta que no es una llamada genérica.

**3. El script de cold call: estructura y ejemplos**
- Proporciona la estructura del script de cold call de alto rendimiento: apertura (identificarte y crear permiso para continuar), gancho de valor (por qué es relevante para ellos en 10 segundos), pregunta de cualificación o pain (para entender si hay fit), invitación al siguiente paso (propuesta de demo o reunión) y manejo del cierre o la objeción.
- Escribe un ejemplo completo de script de cold call B2B adaptable y explicado línea a línea.
- Describe cómo adaptar el tono del script según el perfil del interlocutor: CEO (hablar de negocio y resultados), responsable técnico (hablar de cómo funciona) y responsable de compras (hablar de proceso y precio).

**4. Manejo de objeciones telefónicas**
- Proporciona respuestas preparadas para las objeciones más frecuentes: "No tenemos presupuesto", "Ya tenemos un proveedor", "Mándame información por email", "No es el momento", "Habla con mi compañero" y "No me interesa".
- Explica la técnica de Feel-Felt-Found para manejar objeciones sin discutir con el prospecto.
- Describe cuándo insistir y cuándo aceptar el no con elegancia para dejar la puerta abierta en el futuro.

**5. El cierre de la llamada: conseguir el siguiente paso**
- Explica cómo proponer el siguiente paso de forma que el prospecto sienta que tiene control: dos opciones de fecha y hora en lugar de una pregunta abierta.
- Describe qué hacer inmediatamente después de colgar: enviar el email de confirmación en menos de cinco minutos, con el resumen de la conversación y los próximos pasos.
- Detalla cómo gestionar el seguimiento cuando el prospecto no confirma la reunión o no aparece a la demo.

**6. Métricas y mejora del equipo**
- Define los KPIs de un equipo de televentas: llamadas por día, tasa de conexión, tasa de conversión a siguiente paso, tiempo medio de llamada y pipeline generado por comercial.
- Explica cómo hacer escucha de llamadas y coaching individual para mejorar los scripts y la habilidad de cada miembro del equipo.

**Preguntas iniciales:**
1. ¿Qué producto o servicio vendes y cuál es tu perfil de cliente ideal (ICP)?
2. ¿Estás haciendo cold calls o llamadas a leads con algún nivel de interés previo?
3. ¿Cuál es el principal problema de tus llamadas ahora: pasan el filtro, se niegan a escuchar, escuchan pero no avanzan?
4. ¿Tienes ya un script o empiezas desde cero?

Dame el contexto y construimos el script y el protocolo adaptado a tu situación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir el script y el protocolo de cold calling que convierte llamadas en demos cualificadas',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de la confianza en el producto',
                'description'      => 'Construye y recupera la confianza del usuario después de un fallo, un escándalo o una decisión de producto impopular con un plan de comunicación y acción.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager con experiencia gestionando crisis de confianza en productos digitales: desde brechas de seguridad y errores de datos hasta decisiones de producto impopulares y escándalos de prensa. Conoces la diferencia entre los problemas de confianza que se pueden resolver con comunicación y los que requieren cambios estructurales en el producto.

Necesito construir o recuperar la confianza de mis usuarios en el producto. Guíame a través del proceso:

**1. Los pilares de la confianza en un producto digital**
- Explica los cinco pilares que construyen la confianza de los usuarios en un producto digital: fiabilidad (el producto funciona cuando lo necesitan), seguridad (sus datos están protegidos), transparencia (saben cómo funciona el producto y qué hace con su información), equidad (el producto los trata de forma justa) y competencia (el producto hace bien lo que promete).
- Describe cómo la confianza se construye lentamente (a través de cada interacción positiva) y se puede destruir en un solo incidente mal gestionado.
- Explica la asimetría de la confianza: se tarda meses en construir lo que se destruye en horas, y recuperarla cuesta el doble que construirla desde cero.

**2. Diagnóstico: qué tipo de crisis de confianza tienes**
- Proporciona un framework de diagnóstico para identificar el tipo de crisis de confianza: fallo de fiabilidad (caída del servicio, bug crítico), fallo de seguridad (brecha de datos, vulnerabilidad), fallo de transparencia (el producto hacía algo que los usuarios no sabían), fallo de equidad (una decisión percibida como injusta: cambio de precio, eliminación de funcionalidad) o crisis de reputación externa (cobertura mediática negativa, viralización de un problema).
- Explica por qué cada tipo de crisis requiere una respuesta diferente y por qué los errores en la gestión de la respuesta pueden ser peores que el incidente original.

**3. Respuesta inmediata: los primeros días**
- Describe el protocolo de comunicación en los primeros 24-72 horas de una crisis de confianza: qué decir (lo que se sabe con certeza), qué no decir (especulaciones, defensas prematuras, minimizaciones), en qué canales comunicar y con qué frecuencia actualizar aunque no haya novedades.
- Explica el principio de ownership: asumir la responsabilidad antes de tener todos los detalles es mejor que parecer evasivo. El "todavía estamos investigando" funciona si va acompañado de acciones visibles.
- Proporciona plantillas de comunicación para distintos tipos de crisis: brecha de datos, decisión de producto impopular y fallo técnico grave.

**4. Acciones estructurales para recuperar la confianza**
- Explica qué cambios de producto o proceso son necesarios según el tipo de crisis: refuerzo de seguridad y comunicación de las mejoras implementadas, reversión o mitigación de la decisión impopular, compensación a los usuarios afectados, cambios en la gobernanza del producto.
- Describe el concepto de "trust mechanics" en el producto: indicadores visuales de seguridad, transparencia sobre el uso de datos, controles de privacidad accesibles y comunicación proactiva sobre cambios futuros.
- Detalla cómo medir la recuperación de la confianza: NPS antes y después de la crisis, tasa de cancelación, engagement post-crisis y sentimiento en redes sociales y reseñas.

**5. Construcción proactiva de la confianza**
- Explica cómo construir la confianza antes de que haya una crisis: comunicación transparente sobre el roadmap, changelog público de cambios, informe anual de privacidad y seguridad, y mecanismos para que los usuarios reporten problemas de forma sencilla.
- Describe el diseño de privacidad by default: cómo hacer que las opciones más seguras y privadas sean las opciones predeterminadas, no las que hay que buscar en los ajustes.

**6. Plan de comunicación a largo plazo**
- Proporciona la estructura de un plan de comunicación de recuperación de confianza a 6 meses: hitos de comunicación, métricas de seguimiento, revisiones internas y puntos de decisión.

**Preguntas iniciales:**
1. ¿Qué tipo de evento ha dañado la confianza de tus usuarios o qué riesgo quieres prevenir?
2. ¿Cuántos usuarios se han visto afectados y cuál es el impacto medible (cancelaciones, quejas, cobertura media)?
3. ¿Qué acciones has tomado ya para responder al problema?
4. ¿Cuál es el nivel de confianza de base de tus usuarios antes del incidente (NPS, satisfacción)?

Dame el contexto y diseñamos el plan de gestión de confianza.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Gestionar una crisis de confianza en el producto y diseñar el plan de recuperación',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Reclutamiento sin sesgos',
                'description'      => 'Implementa técnicas y herramientas para eliminar los sesgos inconscientes del proceso de selección y contratar al mejor candidato independientemente de su origen.',
                'prompt_content'   => <<<'PROMPT'
Actúa como una experta en diversidad, equidad e inclusión (DEI) con especialización en procesos de selección y evaluación de candidatos. Has diseñado procesos de reclutamiento estructurado para empresas de tecnología, consultoría y sector público que han mejorado la diversidad de sus contrataciones sin reducir la calidad de los candidatos seleccionados.

Necesito diseñar un proceso de reclutamiento libre de sesgos. Guíame a través del método y las herramientas:

**1. Los sesgos más comunes en el reclutamiento y su impacto**
- Explica los principales sesgos cognitivos que afectan al reclutamiento: sesgo de afinidad (preferimos a quien se parece a nosotros), efecto halo (una característica positiva sesga la evaluación global), efecto cuernos (lo contrario del halo), sesgo de confirmación (buscamos información que confirme nuestra primera impresión), sesgo de género (diferente evaluación de exactamente el mismo CV según el nombre), sesgo de origen (discriminación por nombre o procedencia) y sesgo de belleza (candidatos más atractivos reciben evaluaciones más positivas).
- Describe el impacto cuantificable de estos sesgos en las decisiones de contratación: estudios que demuestran que CV idénticos con nombres distintos reciben tasas de respuesta muy diferentes.
- Explica por qué la intención de ser justo no es suficiente: los sesgos son inconscientes y afectan incluso a las personas más comprometidas con la equidad.

**2. Diseño del proceso de reclutamiento estructurado**
- Describe los principios del reclutamiento estructurado: mismas preguntas para todos los candidatos, criterios de evaluación definidos antes de las entrevistas, evaluación independiente antes de la discusión en grupo y decisiones basadas en datos y no en impresiones.
- Explica cómo definir los criterios de selección a priori: diferencia entre criterios imprescindibles (sin los cuales el candidato no puede hacer el trabajo) y criterios deseables (que suman pero no son excluyentes).
- Detalla cómo revisar la descripción del puesto para eliminar el lenguaje codificado que desincentiva a ciertos grupos a aplicar.

**3. Cribado de CVs sin sesgos**
- Explica las técnicas de cribado ciego de CVs: eliminar nombre, foto, dirección, año de nacimiento y universidad de origen antes de la evaluación, para que el evaluador solo vea la experiencia y las habilidades relevantes.
- Describe las herramientas tecnológicas disponibles para el cribado estructurado: formularios estandarizados en lugar de CV libre, tests de habilidades previos a la entrevista y plataformas que permiten el cribado ciego.
- Detalla cómo diseñar las preguntas de prescreening para evaluar las competencias clave sin introducir sesgos.

**4. Entrevistas estructuradas por competencias**
- Proporciona la metodología de la entrevista estructurada por competencias STAR (Situación, Tarea, Acción, Resultado): cómo formular las preguntas, qué buscar en las respuestas y cómo documentar la evaluación.
- Explica cómo crear una guía de entrevista con preguntas estandarizadas por competencia y rúbrica de evaluación numérica para reducir la subjetividad.
- Describe las mejores prácticas del panel de entrevista: diversidad del panel, evaluación independiente antes de la discusión, y cómo estructurar la reunión de decisión para evitar que la opinión del perfil de mayor jerarquía domine.

**5. Herramientas y tecnología**
- Describe las herramientas de evaluación objetiva de candidatos: tests de razonamiento, pruebas técnicas estandarizadas, evaluaciones de simulación de trabajo y herramientas de análisis de lenguaje en entrevistas de vídeo.
- Explica los riesgos de los algoritmos de IA en el reclutamiento: si el modelo se entrena con datos históricos sesgados, amplifica los sesgos existentes.

**6. Medición de la equidad del proceso**
- Define las métricas para evaluar la equidad del proceso de reclutamiento: tasa de conversión por género, origen y edad en cada fase del funnel, ratio de oferta-aceptación y diversidad del equipo contratante.

**Preguntas iniciales:**
1. ¿En qué fase del proceso de reclutamiento crees que se producen más sesgos en tu empresa?
2. ¿Cuántas personas participan en el proceso de selección y tienen formación en sesgos?
3. ¿Tienes ya algún proceso estructurado o quieres rediseñarlo desde cero?
4. ¿Cuál es el tipo de rol que más dificultades os genera para encontrar candidatos diversos?

Dame el contexto y diseñamos el proceso de reclutamiento estructurado para tu empresa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar un proceso de selección estructurado que elimine los sesgos inconscientes',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de la cuenta de explotación',
                'description'      => 'Interpreta el P&L con profundidad estratégica: márgenes, palancas de mejora, comparativa sectorial y las decisiones de negocio que hay detrás de cada línea.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con veinte años de experiencia analizando cuentas de resultados de empresas en múltiples sectores y ayudando a CEOs y directivos a entender sus números más allá de la lectura superficial del beneficio neto. Tu enfoque es estratégico: cada línea del P&L es una palanca de negocio, no solo un número contable.

Necesito entender e interpretar la cuenta de explotación de mi empresa con profundidad estratégica. Guíame a través del análisis completo:

**1. La estructura de la cuenta de explotación**
- Explica la arquitectura completa del P&L: ingresos, coste de ventas o COGS, margen bruto, gastos operativos (OPEX) desglosados por naturaleza (personal, marketing, tecnología, G&A), EBITDA, amortizaciones, EBIT, resultado financiero, resultado antes de impuestos, impuesto de sociedades y resultado neto.
- Describe las diferencias entre el P&L de una empresa de servicios, una empresa de producto físico y una empresa SaaS: por qué el COGS es diferente en cada modelo y qué implica para los márgenes.
- Explica los dos enfoques de presentación del P&L en España: por naturaleza (la más común en el PGC) y por función (más orientada a la gestión, como el P&L que usan los anglosajones).

**2. Los márgenes como palancas estratégicas**
- Explica el margen bruto: cómo calcularlo, qué incluye el COGS exactamente según el modelo de negocio, cuáles son los benchmarks sectoriales y qué significa un margen bruto bajo o alto para las opciones estratégicas de la empresa.
- Describe el EBITDA y por qué es el indicador de rentabilidad operativa más usado en valoración y en las conversaciones con inversores y bancos: sus ventajas (excluye decisiones de financiación y contables) y sus limitaciones (puede ocultar necesidades de capex).
- Detalla el margen neto y cuándo es el indicador correcto vs. cuándo el EBITDA o el margen bruto son más relevantes para la gestión.

**3. Análisis de la estructura de costes**
- Explica cómo analizar el peso de cada partida de gasto sobre los ingresos y cómo compararlo con el sector: un gasto de personal del 70% de los ingresos puede ser excelente en un despacho de abogados y catastrófico en una empresa manufacturera.
- Describe la distinción entre costes fijos y variables y por qué entender la estructura de apalancamiento operativo es fundamental para la planificación y la resiliencia del negocio.
- Detalla cómo identificar las palancas de mejora de la rentabilidad: incremento de precio, mejora del mix de producto, reducción del COGS mediante renegociación o eficiencias, y optimización del OPEX.

**4. Análisis de tendencias y variaciones**
- Explica cómo hacer el análisis vertical (cada partida como porcentaje de los ingresos) y el análisis horizontal (variación año a año o trimestre a trimestre en valor absoluto y en porcentaje).
- Describe cómo interpretar las variaciones inesperadas: cuándo una caída del margen bruto es una señal de alarma y cuándo es una decisión estratégica temporal (inversión en crecimiento).
- Detalla el análisis de bridge o cascada: cómo descomponer la variación del EBITDA entre dos períodos en sus factores explicativos (precio, volumen, mix, costes).

**5. Benchmarking sectorial**
- Explica cómo encontrar benchmarks de márgenes por sector y cómo interpretar las diferencias: Orbis, informes sectoriales del Banco de España y datos de empresas comparables cotizadas.
- Describe cómo usar el benchmarking para identificar si los problemas de rentabilidad son específicos de la empresa o del sector.

**6. El P&L como herramienta de decisión**
- Explica cómo usar el P&L para tomar decisiones de negocio: qué producto o línea de negocio potenciar, dónde invertir y dónde reducir, cuándo contratar y cuándo externalizar.

**Preguntas iniciales:**
1. ¿Tienes ya una cuenta de resultados que quieres analizar o necesitas entender primero los conceptos?
2. ¿En qué sector opera tu empresa y cuál es su modelo de ingresos?
3. ¿Cuál es el principal problema de rentabilidad que percibes ahora mismo?
4. ¿Para quién es este análisis: para ti mismo, para el consejo de administración o para un inversor?

Comparte los datos y hacemos el análisis juntos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 75,
                'use_case'         => 'Analizar la cuenta de explotación para extraer decisiones estratégicas de negocio',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Herencia y transmisión de la empresa familiar',
                'description'      => 'Planifica la sucesión de la empresa familiar con el protocolo correcto, la estructura fiscal óptima y los instrumentos legales que evitan los conflictos entre herederos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especialista en planificación sucesoria de empresa familiar con más de veinte años asesorando a familias empresarias en la transmisión intergeneracional de sus negocios en España. Combinas el derecho mercantil, el derecho civil de sucesiones y la fiscalidad para diseñar soluciones que garantizan la continuidad de la empresa y la armonía familiar.

Necesito planificar la sucesión de mi empresa familiar. Guíame a través de los aspectos legales, fiscales y de gobernanza:

**1. La planificación sucesoria de la empresa familiar**
- Explica por qué la transmisión de la empresa familiar es uno de los momentos de mayor riesgo para la continuidad del negocio: conflictos entre herederos, desinversiones forzosas para pagar impuestos, entrada involuntaria de terceros en el accionariado y pérdida de la capacidad de toma de decisiones.
- Describe los dos errores más comunes en la planificación sucesoria de empresa familiar: hacerla demasiado tarde (cuando el fundador ya no está en condiciones de decidir) y no documentarla correctamente (voluntades verbales que nadie respeta porque no están blindadas jurídicamente).
- Explica el concepto de protocolo de sucesión: un documento que define con antelación quién tomará el control, en qué condiciones, con qué responsabilidades y con qué mecanismos de supervisión.

**2. Instrumentos de transmisión de la empresa**
- Explica las tres formas principales de transmitir la empresa familiar a la siguiente generación: transmisión por herencia (mortis causa), donación en vida (inter vivos) y venta a los herederos.
- Detalla las ventajas y desventajas de cada fórmula desde el punto de vista fiscal, del control y de la dinámica familiar.
- Describe los instrumentos de transmisión gradual: la donación fraccionada a lo largo de varios ejercicios, el usufructo de las participaciones (el titular conserva el derecho económico y el heredero tiene el voto o viceversa) y la figura del heredero gestor con compensación económica a los demás.

**3. La bonificación fiscal en el Impuesto de Sucesiones y Donaciones**
- Explica los requisitos para acceder a la reducción del 95% en la base imponible del ISD en la transmisión de la empresa familiar: que la empresa sea la principal fuente de renta del transmitente, que el adquirente mantenga la adquisición durante al menos cinco años, y que la empresa desarrolle una actividad económica real (no mera tenencia de bienes).
- Detalla cómo se aplica la bonificación en las distintas comunidades autónomas: hay diferencias significativas entre autonomías que pueden determinar la estructura óptima.
- Describe los riesgos de perder la bonificación post-transmisión: qué actos pueden activar la cláusula de retroceso y cómo evitarlos.

**4. Planificación previa a la transmisión**
- Explica la importancia de la estructura societaria previa a la transmisión: una sociedad holding que concentra las participaciones de las sociedades operativas facilita la transmisión, la gestión y la planificación fiscal.
- Detalla los mecanismos de valoración de la empresa para la transmisión: valor real de mercado, valor contable y el papel de los peritos independientes para evitar conflictos con Hacienda.
- Describe cómo preparar al sucesor: criterios de selección, formación, período de transición con supervisión y cómo gestionar la relación con el fundador que no quiere soltar el control.

**5. El testamento y los pactos sucesorios**
- Explica qué debe incluir el testamento del empresario para garantizar que su voluntad respecto a la empresa se cumpla: legados específicos de participaciones, albacea testamentario con poderes amplios, y cláusulas de arbitraje para conflictos entre herederos.
- Describe los pactos sucesorios disponibles en las comunidades autónomas que los permiten (Cataluña, Galicia, Aragón, Baleares, Navarra y País Vasco): ventajas respecto al testamento para la empresa familiar.

**Preguntas iniciales:**
1. ¿Cuántos herederos hay y cuál es su relación actual con la empresa?
2. ¿Hay ya un sucesor designado o identificado, o es una decisión pendiente?
3. ¿En qué comunidad autónoma está domiciliada la empresa y cuál es la residencia habitual del titular?
4. ¿Cuál es la estructura societaria actual y hay una holding o activos inmobiliarios en la empresa?

Dame la información y diseñamos el plan de sucesión adecuado para tu situación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 90,
                'use_case'         => 'Planificar la transmisión intergeneracional de la empresa familiar con eficiencia fiscal y sin conflictos',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Construir una cultura de CS en la empresa',
                'description'      => 'Transforma tu organización para que toda la empresa entienda, priorice y contribuya a la experiencia del cliente, no solo el equipo de soporte.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief Customer Officer con experiencia transformando organizaciones donde el customer success era solo una función de soporte reactivo en empresas donde toda la organización entiende y prioriza la experiencia del cliente. Has liderado este proceso en empresas SaaS y de servicios con resultados medibles en retención, NPS y expansión de revenue.

Necesito construir una cultura de customer success en toda mi organización. Guíame a través del proceso:

**1. La diferencia entre un equipo de CS y una cultura de CS**
- Explica la diferencia entre tener un equipo de customer success y tener una cultura de customer success: en el primer caso, solo el equipo de CS se preocupa por el cliente; en el segundo, todas las decisiones de la empresa (producto, finanzas, marketing, ingeniería) tienen en cuenta el impacto en la experiencia del cliente.
- Describe los síntomas de una empresa donde el CS es solo una función: el equipo de producto no habla con los clientes, las decisiones de negocio se toman sin analizar el impacto en la retención, el equipo de ingeniería no conoce quiénes son los clientes y los comerciales prometen cosas que el producto no puede cumplir.
- Explica por qué construir una cultura de CS es una ventaja competitiva sostenible que los competidores no pueden copiar fácilmente: está arraigada en los comportamientos, los procesos y los incentivos de la organización.

**2. El rol del liderazgo en la cultura de CS**
- Explica por qué la cultura de CS empieza en el C-level: si el CEO no habla con clientes, el equipo no lo hará. Describe qué comportamientos del liderazgo construyen la cultura de CS.
- Describe el programa de "CEO calls": cómo el CEO, el CPO y otros directivos deben mantener contacto directo con clientes de forma regular, qué información extraer y cómo usarla en las decisiones estratégicas.
- Detalla cómo diseñar métricas de CS que el liderazgo revise en el Board Meeting: NRR, GRR, NPS y churn son métricas de C-level, no solo de CS.

**3. Customer success como responsabilidad de todos**
- Explica cómo involucrar al equipo de producto en la cultura de CS: visitas a clientes, participación en onboardings, escucha de llamadas de soporte y revisión periódica de los tickets más frecuentes.
- Describe cómo involucrar al equipo de ingeniería: métricas de producto en tiempo real, alertas cuando el cliente tiene un problema técnico antes de que lo reporte, y participación en los post-mortems de incidentes con impacto en clientes.
- Detalla cómo alinear a los comerciales con la cultura de CS: qué incentivos evitar (solo comisión por nueva venta sin componente de retención) y cuáles fomentar (comisión por renovación, por expansión y por NPS del cliente).

**4. Sistemas y procesos que institucionalizan la cultura de CS**
- Describe el Voice of the Customer (VoC) program: cómo estructurar el proceso de recogida, análisis y distribución del feedback del cliente en toda la organización de forma sistemática.
- Explica cómo implementar el Joint Success Plan: el documento co-creado con el cliente donde se definen los objetivos, los hitos y las métricas de éxito que guían la relación durante el año.
- Detalla cómo crear los rituales organizativos que mantienen viva la cultura de CS: el "customer story of the week" en el all-hands, el dashboard de NPS visible para toda la empresa, y el premio mensual al empleado que mejor ha servido al cliente.

**5. Métricas de cultura de CS**
- Define cómo medir el nivel de cultura de CS de la organización: porcentaje de empleados no-CS que han hablado con un cliente en el último trimestre, tiempo de respuesta del equipo de producto a los issues reportados por CS, y ratio de feature requests de clientes implementadas.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño de tu empresa y cómo está organizado el equipo de CS actualmente?
2. ¿Cuál es el mayor obstáculo para construir una cultura de CS: la falta de tiempo, la resistencia de otros departamentos o la ausencia de liderazgo comprometido?
3. ¿Qué métricas de CS revisa actualmente el C-level?
4. ¿Hay algún departamento que sea especialmente resistente a involucrarse con el cliente?

Dame el contexto y diseñamos el plan de transformación cultural.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 75,
                'use_case'         => 'Diseñar el proceso de transformación para que toda la organización priorice la experiencia del cliente',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Mentoring y formación como fuente de ingresos freelance',
                'description'      => 'Monetiza tu expertise como formador o mentor: diseña tu oferta, fija el precio, consigue los primeros alumnos y escala sin dejar de trabajar con clientes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach especializado en ayudar a profesionales independientes a convertir su experiencia en programas de formación y mentoring rentables. Has acompañado a más de cien freelances a lanzar su primera oferta formativa y a escalarla hasta convertirla en una fuente de ingresos significativa sin depender exclusivamente de la disponibilidad horaria.

Necesito diseñar una oferta de formación o mentoring para diversificar mis ingresos como freelance. Guíame a través del proceso completo:

**1. Por qué la formación es la mejor segunda fuente de ingresos para un freelance**
- Explica las ventajas del modelo de formación y mentoring para un freelance con expertise acreditada: aprovecha el mismo conocimiento que ya usas con tus clientes, tiene márgenes muy superiores al servicio directo, te posiciona como referente y genera oportunidades de negocio adicionales.
- Describe las diferencias entre los distintos formatos de formación y mentoring y su posición en el espectro de escalabilidad: mentoring 1-1 (alto precio, baja escala), formación en grupo en cohort (precio medio, escala media), curso online asíncrono (precio bajo, alta escala) y membresía o comunidad (precio recurrente, alta escala).
- Explica cuándo tiene sentido empezar con mentoring 1-1 aunque no sea escalable: es la forma más rápida de validar que tienes algo que enseñar y de aprender qué necesita realmente tu cliente.

**2. Definición de tu oferta formativa**
- Proporciona un framework para identificar el tema de tu programa de formación: en qué problema eres la mejor solución del mercado, cuál es el resultado transformador que puede conseguir tu alumno, y cuál es la audiencia más motivada para pagarte por aprenderlo.
- Explica la diferencia entre un curso de conocimiento (te enseño todo sobre X) y un programa orientado a resultado (al final de este programa conseguirás Y), y por qué el segundo se vende mejor y es más fácil de defender en precio.
- Describe el proceso de validación antes de crear el programa completo: cómo hacer una pre-venta de la idea, qué preguntar a los potenciales alumnos para asegurarte de que el programa resuelve un dolor real y qué tamaño mínimo de grupo necesitas para que el piloto sea rentable.

**3. Diseño del programa**
- Explica cómo estructurar un programa de mentoring o formación: definición del alumno ideal, resultado prometido, módulos o sesiones, materiales de apoyo, comunidad y soporte, y criterios de éxito para el alumno.
- Describe el diseño curricular orientado a resultados: cómo secuenciar el contenido para que el alumno consiga resultados parciales en cada sesión que le mantengan comprometido hasta el final.
- Detalla qué plataformas usar según el formato: Zoom o Google Meet para sesiones en directo, Notion o Circle para la comunidad y los materiales, Calendly para la gestión de sesiones 1-1, y Teachable, Kajabi o Hotmart para el curso online asíncrono.

**4. Fijación de precios**
- Explica los criterios para fijar el precio de un programa de mentoring o formación: el valor del resultado para el alumno (no el número de horas), los precios de la competencia y tu posicionamiento respecto a ellos, y la disposición a pagar de tu audiencia específica.
- Describe por qué el primer error de los freelances al lanzar formación es cobrar demasiado poco: el precio bajo no solo reduce el margen, sino que reduce el compromiso del alumno y los resultados.
- Detalla cómo estructurar el precio en distintos tiers para maximizar la accesibilidad y el ingreso: tier básico (acceso a los materiales), tier estándar (acceso a las sesiones grupales) y tier premium (acceso al mentoring 1-1).

**5. Conseguir los primeros alumnos**
- Explica las estrategias para conseguir los primeros alumnos sin audiencia: clientes actuales y pasados, red profesional de primer grado, colaboración con otras personas que tienen la audiencia que tú necesitas, y presencia en comunidades donde está tu alumno ideal.
- Describe cómo usar testimonios y casos de éxito de los primeros alumnos para escalar las ventas del programa.

**Preguntas iniciales:**
1. ¿Cuál es tu especialidad y qué resultado transformador puedes ayudar a conseguir a un alumno?
2. ¿Tienes ya una audiencia (newsletter, LinkedIn, comunidad) o empiezas desde cero?
3. ¿Has dado formación antes, aunque sea de forma informal?
4. ¿Cuántas horas a la semana puedes dedicar a la formación sin que afecte a tus clientes actuales?

Dame los datos y diseñamos tu primera oferta formativa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar y lanzar una oferta de formación o mentoring como fuente de ingresos adicional para freelances',
                'vote_score'       => 44,
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
