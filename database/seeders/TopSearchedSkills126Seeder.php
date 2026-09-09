<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills126Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Growth marketing para apps de consumo masivo',
                'description'      => 'Las tácticas de crecimiento que funcionan en apps B2C: viral loops, programas de referidos, push notifications segmentadas y gamificación para la retención.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Growth Manager senior con experiencia escalando apps de consumo masivo en el mercado hispanohablante e internacional. Quiero diseñar o mejorar la estrategia de crecimiento de mi app B2C.

Mi contexto:
- Tipo de app: [red social / entretenimiento / salud / fintech / ecommerce / utilidad / otro]
- Estado actual: [lanzamiento / primeros 10K usuarios / crecimiento / escala]
- Métricas actuales: [DAU, MAU, retención D1/D7/D30, CAC, LTV si los tienes]
- Principal palanca de crecimiento sin explotar: [adquisición / activación / retención / referidos / monetización]
- Presupuesto de marketing disponible: [rango mensual]
- Plataformas: [iOS / Android / ambas]

Ayúdame con los siguientes bloques:

**1. Viral loops y coeficiente K**
Un producto que crece solo es el sueño de todo growth marketer. ¿Cómo identifico si mi app tiene potencial viral y cómo construyo loops de viralidad? Explica el cálculo del coeficiente K (usuarios invitados por usuario activo × tasa de conversión de la invitación) y qué valor necesito para tener crecimiento viral real. Dame tres tipos de viral loops que funcionan en apps de consumo: el loop de contenido, el loop social y el loop de utilidad, con ejemplos concretos para mi tipo de app.

**2. Programa de referidos que funciona**
Los programas de referidos mal diseñados son costosos y generan usuarios de baja calidad. ¿Cómo diseño un programa de referidos que traiga usuarios de alta intención? Explica la mecánica de incentivo (doble cara: el que invita y el invitado), el momento óptimo para mostrar la invitación dentro del journey del usuario, los formatos de sharing que convierten mejor y cómo mido la calidad de los usuarios referidos versus los de paid.

**3. Push notifications segmentadas para retención**
Las push notifications son la herramienta más poderosa de retención cuando se usan bien, y la más destructiva cuando se usan mal. Dame la estrategia de notificaciones para mejorar la retención D7 y D30: cómo segmento a los usuarios según su comportamiento, qué mensajes envío a cada segmento, cuántas notificaciones por semana es el límite antes de aumentar el opt-out, cómo mido el impacto y qué copy funciona mejor para reactivar usuarios inactivos.

**4. Gamificación para el engagement**
La gamificación aumenta el engagement cuando está ligada al valor real del producto. ¿Cómo implemento mecánicas de gamificación sin que parezcan artificiales? Dame los elementos de gamificación más efectivos para apps de consumo: streaks, puntos y niveles, logros y badges, rankings y competición social, y recompensas tangibles. Para cada uno: cuándo usarlo, cuándo evitarlo y cómo mido su impacto en la retención y en el LTV.

**5. Optimización del onboarding para la activación**
El mayor problema de las apps de consumo es que la mayoría de los usuarios que se descargan la app no llegan al momento aha. ¿Cómo optimizo el onboarding para maximizar la activación? Dame el proceso: cómo defino el evento de activación de mi app, cómo reduzco la fricción en los primeros cinco minutos, qué solicitudes (permisos, registro, datos de perfil) retrasas y cuáles son imprescindibles al inicio, y cómo uso el primer push notification para traer al usuario de vuelta si no completa el onboarding.

**6. Métricas de growth y el modelo de cohortes**
¿Qué métricas son las más importantes para una app de consumo en crecimiento? Dame el dashboard mínimo: instalaciones, DAU/MAU ratio, curvas de retención por cohorte, CAC por canal, LTV proyectado y la métrica de north star específica para mi tipo de app. Explica cómo leer una curva de retención por cohorte para identificar si el problema es adquisición, activación o retención a largo plazo.

Dame tácticas concretas que pueda ejecutar esta semana, no conceptos de growth hacking genéricos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar una estrategia de growth marketing para apps de consumo: viral loops, referidos, push notifications y gamificación para la retención.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Optimización de apps móviles: rendimiento, crashes y rating',
                'description'      => 'Reduce los crashes, elimina los ANRs, minimiza el tamaño del binario y aplica las técnicas que mejoran el rating en tiendas y la retención del usuario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero senior de aplicaciones móviles especializado en rendimiento y estabilidad en iOS y Android. Quiero mejorar la calidad técnica de mi app para reducir los problemas que deterioran el rating y la retención.

Mi contexto:
- Plataformas: [iOS / Android / ambas / React Native / Flutter]
- Crash rate actual: [porcentaje si lo sabes]
- Rating actual en tiendas: [número de estrellas]
- Tamaño del binario actual: [MB]
- El problema más urgente: [crashes frecuentes / ANRs / lentitud de inicio / consumo de batería / tamaño excesivo / rating bajo]
- Volumen de usuarios activos: [rango de DAU]

Ayúdame con los siguientes bloques:

**1. Diagnóstico de crashes y ANRs**
Dame el proceso de diagnóstico de crashes: qué herramientas usar (Firebase Crashlytics, Sentry, Instabug, Bugsnag), cómo leer un stack trace de iOS (simbolización de .dSYM) y Android (deobfuscación con ProGuard/R8), cómo priorizar los crashes por impacto (crash-free sessions, afectados únicos) y cuáles son los crashes más comunes en apps de consumo que nunca deberían ocurrir. Para Android: qué diferencia un crash de un ANR y cómo diagnostico el hilo principal bloqueado.

**2. Optimización del tiempo de arranque**
El tiempo de inicio de la app es la primera impresión del usuario. ¿Cómo reduzco el cold start time en iOS y Android? Dame las técnicas concretas: qué trabajo diferir al background thread, cómo evitar la inicialización lazy incorrecta de SDKs de terceros, cómo mido el tiempo de inicio con Xcode Instruments y Android Studio Profiler, y cuál es el objetivo de tiempo de arranque para no perder usuarios en el primer segundo.

**3. Reducción del tamaño del binario**
Un binario grande aumenta el tiempo de descarga y reduce las conversiones en la página de la tienda. ¿Cómo reduzco el tamaño del IPA en iOS y del APK/AAB en Android? Dame las técnicas: bitcode y app thinning en iOS, App Bundles versus APKs en Android, compresión de assets (imágenes WebP, vídeos comprimidos), eliminación de código muerto con LinkMap en iOS y tree shaking con R8 en Android, y cómo audito las dependencias de terceros que más pesan.

**4. Rendimiento de UI y fluidez de animaciones**
Los fotogramas perdidos (jank) destruyen la percepción de calidad. ¿Cómo diagnostico y elimino el jank en mi app? Explica el uso del Profiler de Android Studio (GPU rendering) y Instruments de Xcode (Core Animation) para identificar las vistas que tardan más de dieciséis milisegundos en renderizarse. Dame las causas más comunes: operaciones en el hilo principal, vistas sobredibujadas (overdraw), layouts demasiado anidados y carga de imágenes mal gestionada.

**5. Consumo de batería y datos**
Los usuarios desinstalan apps que consumen mucha batería o datos. ¿Cómo audito el consumo de batería de mi app? Dame las herramientas (Battery Historian en Android, Energy Organizer en Xcode) y las causas más comunes: wakelock excesivos, polling de red innecesario, GPS activo en background, sincronización sin WorkManager (Android) o Background Tasks (iOS). ¿Cómo implemento una estrategia de red eficiente con caché, compresión y batching de peticiones?

**6. Estrategia de mejora del rating en tiendas**
El rating en App Store y Google Play impacta directamente en la conversión de descargas. ¿Cómo construyo un sistema para mejorar el rating de forma orgánica y sostenida? Dame el proceso: cuándo mostrar el in-app review dialog (iOS SKStoreReviewRequest, Android In-App Review API), cómo identificar a los usuarios satisfechos antes de pedirles valoración, cómo gestionar las reseñas negativas y qué respondo en las tiendas para mostrar que el equipo está activo.

Quiero un plan de acción con prioridades claras basado en el impacto real en la experiencia del usuario, no optimizaciones de bajo nivel que nadie nota.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Optimizar el rendimiento, estabilidad y calidad de apps móviles para mejorar el rating en tiendas y la retención del usuario.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de apps de consumo masivo: patrones de las más descargadas',
                'description'      => 'Los patrones de UX de las apps con millones de usuarios: onboarding que convierte, notificaciones que no molestan, engagement loops y dark patterns a evitar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de UX/UI senior especializado en apps de consumo masivo con experiencia en apps que han superado el millón de descargas. Quiero mejorar el diseño de mi app para aumentar la activación, el engagement y la retención.

Mi contexto:
- Tipo de app: [red social / entretenimiento / salud y bienestar / fintech / utilidad / ecommerce]
- Plataformas: [iOS / Android / ambas]
- Métricas actuales de diseño: [tasa de activación, retención D7, si las tienes]
- El mayor problema de diseño: [onboarding largo / baja retención / baja conversión de registro / usuarios que no encuentran el valor / otro]
- Referentes de diseño que admiras: [apps cuyo diseño te gusta]

Ayúdame con los siguientes bloques:

**1. Onboarding que convierte**
Los primeros cinco minutos deciden si el usuario se queda o abandona. ¿Cómo diseño un onboarding para mi tipo de app que maximice la activación? Explica los principios: mostrar el valor antes de pedir el registro, reducir los pasos al mínimo absoluto, aplazar las solicitudes de permisos al momento en que tienen contexto, el patrón de onboarding progresivo (aprende mientras usa) versus el tutorial upfront, y cómo mido el funnel de onboarding paso a paso.

**2. Notificaciones que generan engagement sin molestar**
Las notificaciones push son el canal de retención más efectivo, pero también el que más usuarios molesta. ¿Cómo diseño la estrategia de notificaciones para mi app? Dame el framework: qué tipos de notificaciones crean valor real para el usuario (notificaciones sociales, recordatorios de valor, alertas de contexto), cuántas son demasiadas, cómo personalizo el contenido según el comportamiento del usuario y cómo diseño el momento en que pido el permiso para maximizar la aceptación.

**3. Engagement loops basados en hábito**
Las apps que más se usan crean hábitos. ¿Cómo diseño loops de engagement basados en el modelo de hábito (cue, routine, reward)? Dame el diseño del loop de engagement de mi tipo de app: qué trigger interno o externo activa la apertura, qué acción rutinaria ofrece el valor principal y qué recompensa variable mantiene la sorpresa. ¿Cómo distingo entre diseño persuasivo ético y manipulación que daña al usuario?

**4. Dark patterns: lo que debes evitar**
Muchas apps de consumo usan patrones manipuladores que generan engagement a corto plazo pero destruyen la confianza. ¿Cuáles son los dark patterns más comunes en apps de consumo? Dame una lista de diez patrones a evitar: roach motel (fácil entrar, difícil salir), confirmshaming, notificaciones de presión social falsas, contadores de tiempo falsos, ocultación del botón de cancelación. Para cada uno: cómo lo identifico si ya existe en mi app y qué alternativa ética diseño.

**5. Diseño para la retención a largo plazo**
Activar al usuario es relativamente fácil; que vuelva en el día treinta es el verdadero reto. ¿Qué mecanismos de diseño generan retención a largo plazo en apps de consumo? Dame los patrones más efectivos según el tipo de app: streaks y rachas de uso (apps de aprendizaje), progresión y nivel (apps de fitness), colecciones y completismo (apps de contenido), reconocimiento social (redes sociales). ¿Cómo evito que estos mecanismos se sientan forzados?

**6. Diseño para los dos sistemas operativos**
iOS y Android tienen guías de diseño distintas (HIG de Apple versus Material Design de Google) y usuarios con expectativas diferentes. ¿Cómo decido cuándo seguir las convenciones de cada plataforma y cuándo mantener un diseño unificado de marca? Dame los elementos de UI donde las diferencias importan (navegación, gestos, iconografía, tipografía) y los donde puedo unificar sin que el usuario nativo lo note.

Quiero patrones concretos con ejemplos de apps reales que los usen bien, no principios de diseño abstractos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar apps de consumo masivo con patrones de onboarding, notificaciones, engagement loops y sin dark patterns.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas directas al consumidor (DTC): el canal propio que maximiza el margen',
                'description'      => 'Elimina intermediarios con el modelo DTC: construye el canal de venta directa que maximiza el margen bruto, los datos del cliente y el control de la experiencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de comercio electrónico y ventas directas al consumidor con experiencia construyendo canales DTC rentables en marcas de consumo. Quiero eliminar o reducir la dependencia de intermediarios y construir mi canal propio.

Mi contexto:
- Tipo de producto: [moda / alimentación / cosmética / electrónica / salud / otro]
- Canal actual principal: [marketplaces como Amazon o Zalando / distribuidores / retail físico / mixto]
- Canal DTC actual: [ninguno / web propia / tienda física propia / poco desarrollado]
- Margen bruto actual con intermediarios: [porcentaje si lo sabes]
- Principal barrera para el DTC: [adquisición de tráfico / logística / marca / precio percibido / otro]
- Mercados objetivo: [España / Europa / LATAM / global]

Ayúdame con los siguientes bloques:

**1. El caso financiero del DTC**
¿Cuándo tiene sentido económico construir un canal DTC en lugar de vender a través de intermediarios? Dame el modelo financiero comparativo: margen bruto en canal DTC (precio de venta menos COGS y logística directa) versus margen en canal de distribución o marketplace (precio neto de comisiones, devoluciones y fees). ¿Qué CAC máximo puedo permitirme para que el DTC sea más rentable que el canal actual? ¿Cuándo no tiene sentido?

**2. Construcción del canal DTC: tecnología y logística**
¿Qué necesito para lanzar o mejorar mi canal DTC? Dame el stack tecnológico mínimo: plataforma de ecommerce (Shopify, WooCommerce, propio), pasarela de pago, solución de logística (3PL versus logística propia, fulfillment, devoluciones), sistema de gestión de clientes (CRM, CDP) y las integraciones entre ellas. ¿Cuál es la configuración más rápida de lanzar con el menor riesgo técnico?

**3. Adquisición de tráfico para DTC**
Sin marketplace, soy responsable de traer mi propio tráfico. ¿Cuál es la mezcla de canales de adquisición más efectiva para una marca DTC de mi tipo de producto? Compara: Meta Ads (Instagram/Facebook), Google Shopping, TikTok Ads, SEO de producto, email marketing y colaboraciones con creators. Para cada canal: coste por adquisición típico, ciclo de aprendizaje y cómo escalo cuando funciona.

**4. Email y SMS marketing para LTV**
El canal propio más rentable de cualquier negocio DTC es la lista de emails y SMS. ¿Cómo construyo y monetizo mi lista desde cero? Dame la estrategia: cómo genero suscriptores con tráfico frío (pop-ups, lead magnets, quizzes), los flujos automáticos que más revenue generan (bienvenida, carrito abandonado, post-compra, win-back), la frecuencia de campañas que maximiza el revenue sin quemar la lista y las métricas que uso para medir la salud de mi lista.

**5. Retención y suscripción en DTC**
La diferencia entre un negocio DTC rentable y uno que quema dinero suele ser la retención. ¿Cómo maximizo la repetición de compra y cuándo tiene sentido un modelo de suscripción? Dame las tácticas de retención: programa de fidelización (puntos, tiers), suscripción recurrente (qué productos funcionan, cómo reducir el churn), packaging y experiencia de unboxing que genera recomendaciones orgánicas, y cómo mido la cohort retention de mis compradores.

**6. Coexistencia con marketplaces**
La mayoría de las marcas no pueden abandonar Amazon o los grandes distribuidores de un día para otro. ¿Cómo construyo el DTC en paralelo sin canibalizar el canal existente ni violar los contratos de distribución? Dame la estrategia de coexistencia: diferenciación de producto o precio entre canales, cómo evito la guerra de precios, qué le ofrezco en el canal propio que no puede conseguir en Amazon y cómo convenzo al distribuidor de que el DTC no es una amenaza para ellos.

Dame un plan con prioridades claras para los primeros seis meses, con las métricas que indican que voy por el buen camino.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un canal DTC rentable: caso financiero, stack tecnológico, adquisición de tráfico, email marketing y retención.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Consumer product management: métricas y viralidad',
                'description'      => 'Las diferencias entre hacer producto para consumidores y para empresas: métricas de retención, toma de decisiones rápida y el rol central de la viralidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager senior de productos de consumo masivo con experiencia en apps o plataformas con millones de usuarios. Quiero mejorar cómo tomo decisiones de producto para aumentar la retención y el crecimiento en mi app B2C.

Mi contexto:
- Tipo de producto: [app móvil / web / ambas]
- Categoría: [red social / entretenimiento / salud / finanzas personales / productividad / otro]
- Métricas actuales: [MAU, retención D7/D30, tasa de conversión de registro, si las tienes]
- Equipo: [diseño, ingeniería, data, marketing — tamaño de cada área]
- Problema de producto más urgente: [retención baja / crecimiento lento / monetización / engagement bajo / otro]

Ayúdame con los siguientes bloques:

**1. Las métricas que importan en consumer product**
Las métricas de un producto de consumo son muy distintas a las de un SaaS B2B. ¿Cuál es la north star metric de mi tipo de producto y por qué? Dame el árbol de métricas completo: la north star, las métricas de input que la mueven (activación, retención, referidos, monetización) y las métricas de guardrail que no debo sacrificar. ¿Cómo evito optimizar una métrica a expensas de la salud a largo plazo del producto?

**2. El momento aha y la activación**
Cada producto tiene un momento aha: el instante en que el usuario entiende el valor. ¿Cómo identifico el momento aha de mi producto con datos? Explica el proceso: correlación entre eventos de onboarding y retención D30, técnicas de análisis de cohortes para identificar el comportamiento de los usuarios que se quedan versus los que se van, y cómo rediseño el onboarding para que más usuarios lleguen a ese momento antes de perder el interés.

**3. Toma de decisiones con experimentos en consumer**
En un producto de consumo puedo hacer A/B testing con millones de usuarios. ¿Cómo diseño un programa de experimentación efectivo? Dame el proceso: cómo formulo hipótesis que valen la pena testear, cómo calculo el tamaño de muestra necesario para detectar efectos pequeños, cuánto tiempo debo correr un experimento, cómo evito los sesgos más comunes (novelty effect, network effects en tests de viralidad) y cómo tomo la decisión cuando los resultados son estadísticamente significativos pero el efecto es pequeño.

**4. La viralidad como función de producto**
La viralidad no es marketing; es producto. ¿Cómo identifico si mi producto tiene potencial viral y cómo lo construyo dentro de las funcionalidades? Explica los tres tipos de viralidad: viralidad de invitación (traer a otros explícitamente), viralidad de exhibición (el uso del producto es visible para otros) y viralidad colaborativa (el producto es mejor con más personas). ¿Cuál aplica a mi producto y cómo diseño la mecánica específica?

**5. Monetización que no destruye la retención**
En consumer, la monetización mal implementada destruye el producto. ¿Cuándo y cómo introduzco la monetización sin canibalizar el engagement? Compara los modelos: freemium (qué queda gratis, qué es premium), publicidad (formatos que molestan menos, límites de densidad de anuncios), marketplace y comisión de transacción, y suscripción mensual. Para mi tipo de producto: ¿qué modelo recomiendas y qué aprendizaje del mercado respalda esa recomendación?

**6. Priorización en un equipo pequeño con mucho que hacer**
Los productos de consumo tienen infinitas ideas de mejora y un equipo limitado. ¿Cómo priorizo el roadmap cuando cada semana surge una nueva idea viral que "debemos hacer ya"? Dame el framework de priorización que usas en productos de consumo: cómo peso el impacto en la north star, el esfuerzo de implementación y el riesgo de ejecución, y cómo mantengo el foco del equipo en las apuestas grandes sin ignorar las mejoras rápidas que también importan.

Quiero la perspectiva de alguien que ha tenido que tomar decisiones difíciles con datos incompletos y equipos pequeños, no la teoría de los libros de PM.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Tomar mejores decisiones de producto en apps de consumo: métricas, momento aha, experimentación, viralidad y monetización.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Cultura y talento en empresas B2C de alto crecimiento',
                'description'      => 'Gestiona el talento en empresas de consumo con ritmo rápido: presión de métricas, rotación alta, equipos que miden el éxito en millones de usuarios y cultura de velocidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Personas con experiencia en empresas de consumo de alto crecimiento (apps, ecommerce, redes sociales, entretenimiento digital). Quiero mejorar la gestión del talento y la cultura en un entorno donde la velocidad y la presión de métricas son constantes.

Mi contexto:
- Tipo de empresa: [app móvil / plataforma digital / ecommerce / medio de comunicación digital / otro]
- Tamaño: [número de empleados]
- Estado de crecimiento: [hypergrowth / crecimiento sostenido / consolidación]
- Problema más urgente de talento: [retención / burnout / contratación / cultura fragmentada / rendimiento bajo en equipos / otro]
- Perfil de empleado mayoritario: [producto y diseño / ingeniería / marketing y growth / operaciones / mixto]

Ayúdame con los siguientes bloques:

**1. Cultura en empresas B2C de velocidad**
Las empresas de consumo digital tienen una cultura distinta a las empresas B2B o industriales: ciclos de decisión de horas, métricas públicas y visibles, fracasos de features que ven millones de usuarios. ¿Cómo construyo una cultura que abrace la velocidad sin generar burnout sistémico? Dame los principios culturales que caracterizan a las mejores empresas de consumo (Spotify, Netflix, TikTok, Duolingo) y cómo los adapto a mi tamaño y estado actual.

**2. Gestión de la presión de métricas**
En consumer, el equipo sabe cada semana si las métricas de retención y engagement suben o bajan. Esa transparencia puede motivar o paralizar. ¿Cómo gestiono el estrés del equipo cuando las métricas no van bien? Dame el marco de comunicación interna para semanas malas: cómo el liderazgo comunica los malos resultados sin sembrar el pánico, cómo diferencia entre problema de producto versus problema de ejecución, y cómo mantiene el equipo enfocado en las soluciones en lugar del análisis post mortem interminable.

**3. Contratación de perfiles de growth y producto**
Los perfiles más escasos en empresas de consumo son los buenos PMs de consumer y los growth engineers con intuición de producto. ¿Cómo los identifico y los atraigo? Dame el proceso de selección: qué preguntas de entrevista revelan si el candidato tiene instinto de consumidor, cómo evalúo su capacidad de experimentación, qué señales de CV de consumo son más predictivas y cómo compito en salario con las grandes tech sin tener su presupuesto.

**4. Gestión de la rotación en equipos de marketing y growth**
La rotación en equipos de marketing digital y growth es alta: los mejores perfiles son contratados constantemente por la competencia. ¿Cómo reduzco la rotación en estos equipos sin depender solo del salario? Dame palancas de retención específicas para estos perfiles: impacto visible en métricas, autonomía en decisiones de canal, presupuesto propio para experimentar, acceso a datos en tiempo real y el tipo de aprendizaje y crecimiento que valoran más.

**5. Onboarding para la velocidad**
En una empresa de consumo con ritmo rápido, el onboarding debe ser rápido y orientado a resultados, no a procesos. ¿Cómo diseño un onboarding para nuevos empleados que les permita contribuir en la primera semana y sentirse parte de la cultura desde el primer día? Dame la estructura del onboarding para un PM o un growth marketer: qué aprenden el primer día, la primera semana y el primer mes, y cuál es el primer entregable real que les doy para que ganen confianza rápido.

**6. Performance y feedback en cultura de velocidad**
Los ciclos de feedback anuales no tienen sentido en una empresa que lanza features cada semana. ¿Qué sistema de gestión del rendimiento encaja con la cultura de consumer digital? Dame el diseño del sistema: frecuencia del feedback formal e informal, cómo mido el rendimiento de un PM de consumer (más allá del impacto en métricas, que también depende del producto), cómo gestiono los casos de bajo rendimiento sin desmotivar al equipo y cuándo es el momento de tener la conversación difícil.

Quiero respuestas de alguien que ha vivido el ritmo de una empresa de consumo, no los procesos de RRHH diseñados para corporaciones lentas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar talento y cultura en empresas B2C de alto crecimiento: presión de métricas, retención de perfiles digitales y feedback rápido.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Monetización de apps de consumo: in-app purchases y suscripciones',
                'description'      => 'In-app purchases, suscripciones, publicidad y los modelos de revenue que generan más LTV con menor CAC en el mercado de consumo digital.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en monetización de productos digitales de consumo con experiencia diseñando modelos de revenue para apps móviles con millones de usuarios. Quiero optimizar o diseñar la monetización de mi app.

Mi contexto:
- Tipo de app: [juego / utilidad / contenido / red social / salud / educación / finanzas personales]
- Modelo de monetización actual: [ninguno / publicidad / in-app purchases / suscripción / freemium / mixto]
- Métricas actuales: [ARPU, ARPPU, tasa de conversión a pago, LTV si los tienes]
- Principal reto de monetización: [baja conversión a pago / ARPU bajo / retención de suscriptores / ad revenue insuficiente / no hemos empezado]
- Plataformas: [iOS / Android / ambas]

Ayúdame con los siguientes bloques:

**1. Elección del modelo de monetización**
¿Qué modelo de monetización es el más adecuado para mi tipo de app? Dame el árbol de decisión: cuándo elegir publicidad (volumen alto, engagement frecuente, baja disposición a pagar), cuándo elegir freemium con in-app purchases (valor diferencial claro de lo premium), cuándo apostar por suscripción (contenido o utilidad recurrente) y cuándo combinarlos sin canibalizar la experiencia. Dame ejemplos de apps que han elegido bien y mal su modelo.

**2. Diseño de la suscripción**
La suscripción tiene el mayor LTV pero la mayor fricción inicial. ¿Cómo diseño la suscripción para maximizar la conversión y minimizar el churn? Dame el diseño completo: precio mensual versus anual (y cómo presento el descuento), el período de prueba gratuita (¿cuántos días?, ¿con tarjeta o sin tarjeta?), la pantalla de paywall (qué elements convierten más), las notificaciones de renovación y los flujos de gestión de suscripción que reducen el churn involuntario (graceful downgrades, billing retry).

**3. In-app purchases: consumibles y no consumibles**
Los in-app purchases funcionan especialmente bien en juegos y apps con economía virtual, pero también en otras categorías. ¿Cómo diseño la economía de una app con IAP? Explica la diferencia entre consumibles (monedas, vidas, boosts), no consumibles (eliminar publicidad, features desbloqueadas) y suscripciones. Dame la psicología de precios de los bundles de monedas, los eventos de precio limitado y las ofertas personalizadas, y cómo evito las prácticas que llevan a reviews negativas o regulación.

**4. Publicidad en apps de consumo**
La publicidad es el modelo de monetización de menor fricción pero el más difícil de escalar con buen ARPU. ¿Cuándo tiene sentido la publicidad para mi app? Dame la estrategia: qué formatos implementar (banner, interstitial, rewarded video, native), qué redes de publicidad integrar (Google AdMob, Meta Audience Network, AppLovin, Unity Ads) y cómo optimizo el ad fill rate y el eCPM sin destruir la experiencia del usuario. ¿Cuántas ads por sesión es el límite antes de aumentar las desinstalaciones?

**5. Optimización del LTV y reducción del CAC**
El éxito de una app de consumo se mide en la relación LTV/CAC. ¿Cómo mejoro el LTV de mi usuario medio? Dame las palancas: aumentar la frecuencia de uso, aumentar la conversión a pago, aumentar el ARPPU y reducir el churn de pago. Para cada palanca: la táctica concreta y el experimento que diseñaría para validarla. ¿Qué ratio LTV/CAC necesito para tener un negocio escalable?

**6. Cumplimiento de políticas de las tiendas**
App Store y Google Play tienen reglas estrictas sobre monetización que cambian constantemente. ¿Cuáles son las políticas más importantes que debo conocer? Dame los puntos clave: el 30% de comisión de las tiendas y cuándo aplica, las alternativas de pago externo en Android y iOS después de los cambios regulatorios de 2024 en la UE, las restricciones sobre suscripciones auto-renovables y las políticas sobre in-app purchases para menores. ¿Qué hago si mi app es rechazada por políticas de monetización?

Quiero respuestas con números y benchmarks reales del mercado de apps, no conceptos teóricos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar y optimizar la monetización de apps de consumo: suscripciones, in-app purchases, publicidad y LTV.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Protección de menores en apps digitales: COPPA y edad mínima',
                'description'      => 'COPPA, edad mínima, consentimiento parental y las obligaciones legales cuando tu app puede ser usada por usuarios menores de edad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en privacidad digital y protección de menores con experiencia asesorando a empresas de apps de consumo. Necesito entender las obligaciones legales cuando mi app puede ser utilizada por menores de edad.

Mi contexto:
- Tipo de app: [red social / juego / educación / entretenimiento / utilidad general]
- Mercados donde opera: [España / Unión Europea / Estados Unidos / LATAM / global]
- Rango de edad de los usuarios: [solo adultos / mixto incluyendo menores / principalmente menores]
- Datos que recopilo: [nombre, edad, email, ubicación, comportamiento, imágenes, voz, otro]
- Situación actual: [aún no tenemos políticas de menores / tenemos algo básico / queremos revisar el cumplimiento]

Ayúdame con los siguientes bloques:

**1. Marco legal aplicable según el mercado**
Dame un mapa de las leyes de protección de menores en las principales jurisdicciones: COPPA en Estados Unidos (menores de trece años), GDPR y la directiva de servicios de sociedad de la información en Europa (dieciséis años como regla general, con variaciones por país), la Ley de Servicios Digitales (DSA) de la UE y sus obligaciones para plataformas accesibles por menores, y las regulaciones emergentes en Reino Unido (UK Age Appropriate Design Code o Children's Code) y LATAM. ¿Qué ley aplica cuando un usuario europeo usa una app americana?

**2. Verificación de la edad: qué es técnicamente posible**
Las leyes exigen verificación de edad, pero no dicen exactamente cómo hacerla. ¿Cuáles son los métodos de verificación disponibles? Compare: declaración de edad por el usuario (mínimo legal pero insuficiente en sectores regulados), verificación de tarjeta de crédito, verificación de documento de identidad (DNI, pasaporte), consentimiento parental verificable (COPPA), y soluciones de estimación de edad por IA. Para cada método: efectividad real, coste, fricción para el usuario y aceptación por los reguladores.

**3. Diseño del flujo de consentimiento parental**
Si mi app está dirigida a menores o tiene menores entre sus usuarios, ¿cómo diseño el flujo de consentimiento parental que cumple con la ley? Dame el proceso completo bajo COPPA: cómo notifico a los padres, qué información debo incluir en la notificación, los métodos de consentimiento verificable aceptados por la FTC (formulario firmado, tarjeta de crédito, videollamada, pregunta de conocimiento) y cómo gestiono la retirada del consentimiento. ¿Cómo difiere el proceso bajo GDPR?

**4. Limitaciones de datos para usuarios menores**
Cuando identifico a un usuario como menor (o potencialmente menor), ¿qué datos no puedo recopilar o procesar? Dame la lista de restricciones bajo COPPA y GDPR: geolocalización precisa, fotos y vídeos, datos biométricos, perfiles de comportamiento para publicidad, datos de redes sociales. ¿Cómo implemento técnicamente estas restricciones sin interrumpir el servicio para usuarios adultos?

**5. Diseño de producto adecuado para menores (Age-Appropriate Design)**
El UK Children's Code va más allá del consentimiento: obliga a diseñar el producto para proteger a los menores por defecto. ¿Cuáles son los quince estándares del Children's Code y cuáles son los más difíciles de implementar para una app de consumo general? Dame las tres áreas donde las apps suelen incumplir: configuración de privacidad no protectora por defecto, nudging hacia más tiempo de pantalla y monetización agresiva de menores.

**6. Consecuencias del incumplimiento y plan de acción**
¿Qué pasa si mi app incumple las reglas de protección de menores? Dame los casos de multas reales (TikTok, YouTube, musical.ly bajo COPPA) con los importes, los criterios que la FTC y los reguladores europeos usan para determinar la gravedad de la infracción y qué medidas de cumplimiento debo implementar si estoy empezando desde cero. ¿Debo contratar a un DPO externo o un abogado especialista, o puedo gestionarlo internamente?

Quiero respuestas específicas para el mercado europeo y el americano, con ejemplos de casos reales. No generalidades sobre privacidad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Cumplir con COPPA, GDPR y el UK Children\'s Code en apps que pueden ser usadas por menores: verificación de edad, consentimiento parental y diseño protector.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte a escala para apps de consumo masivo',
                'description'      => 'Gestiona millones de usuarios con un equipo pequeño: self-service, comunidad de usuarios, IA conversacional y el triaje que prioriza lo que importa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Soporte al Cliente con experiencia gestionando el soporte de apps de consumo masivo con más de un millón de usuarios activos y un equipo pequeño. Quiero diseñar o mejorar mi modelo de soporte para escalar sin crecer linealmente en headcount.

Mi contexto:
- Tipo de app: [utilidad / entretenimiento / red social / fintech / salud / ecommerce]
- Volumen actual de tickets por mes: [número aproximado]
- Tamaño del equipo de soporte: [número de agentes]
- Canales actuales: [email / chat en vivo / teléfono / redes sociales / ninguno / mixto]
- Principales categorías de consulta: [¿cuáles son las tres preguntas más frecuentes?]
- Principal problema de calidad: [tiempos de respuesta altos / baja satisfacción / volumen inmanejable / otro]

Ayúdame con los siguientes bloques:

**1. Pirámide de soporte para apps de consumo**
El objetivo en consumer support es que el usuario resuelva su problema sin llegar nunca al agente humano. ¿Cómo diseño la pirámide de soporte? Explica los niveles: autoservicio en el producto (FAQ contextual, tooltips, in-app help center), centro de ayuda externo (SEO-optimizado para que Google resuelva antes que yo), comunidad de usuarios (usuarios expertos que ayudan a otros), chatbot o IA conversacional, y agente humano como último recurso. Para cada nivel: qué porcentaje del volumen debería absorber y cómo lo mido.

**2. Implementación del self-service**
El self-service es el mayor multiplicador de un equipo pequeño. ¿Cómo construyo un centro de ayuda que realmente resuelva los problemas de los usuarios? Dame el proceso: cómo identifico las preguntas más frecuentes con los datos del ticket history, cómo estructura los artículos para que sean encontrables (SEO y búsqueda interna), qué hace que un artículo de ayuda sea bueno (longitud, formato, imágenes, vídeos) y cómo mido si el centro de ayuda está reduciendo los tickets o no.

**3. IA conversacional y chatbots en consumer support**
Los chatbots de soporte tienen mala fama porque suelen ser malos. ¿Cómo implemento un chatbot o un agente de IA que realmente ayude a los usuarios en lugar de frustrarlos? Dame el diseño del bot: qué flujos automatiza bien (resetear contraseña, consultar estado de pedido, cancelar suscripción), cuándo escala inmediatamente al agente humano (reclamaciones, quejas sobre seguridad, casos de menores), cómo lo integro con mi centro de ayuda y cómo mido su CSAT comparado con el soporte humano.

**4. Gestión de comunidades de usuarios**
En apps de consumo masivo, los usuarios más comprometidos ayudan a otros. ¿Cómo construyo y gestiono una comunidad de soporte entre usuarios? Dame el proceso: qué plataforma elegir (Discord, Reddit, foro propio), cómo identifico y recompensa a los super usuarios, qué reglas de moderación son esenciales, cómo monitorizo la comunidad para detectar problemas sistémicos antes de que lleguen al soporte y cuándo la comunidad no sustituye al soporte formal (casos de seguridad, pagos, datos personales).

**5. Triaje y priorización del volumen**
Con volúmenes altos, no todos los tickets pueden tener la misma prioridad. ¿Cómo diseño el sistema de triaje? Dame el modelo de priorización: qué señales del ticket determinan la urgencia (palabras clave, plan de pago del usuario, número de tickets previos, tiempo desde la descarga), cómo clasifico automáticamente los tickets con IA o reglas, y qué SLAs de respuesta aplico por prioridad. ¿Cuándo un ticket de un usuario gratuito debe tener la misma prioridad que el de un usuario de pago?

**6. Métricas de soporte en consumer**
¿Qué métricas son las más importantes para un equipo de soporte de app de consumo? Dame el dashboard mínimo: CSAT, FCR (First Contact Resolution), tiempo de primera respuesta, ticket deflection rate (porcentaje que resuelve el self-service), backlog size, y cómo el volumen de soporte se correlaciona con la retención y el churn. ¿Cómo uso los datos de soporte para dar feedback al equipo de producto?

Quiero un modelo de soporte escalable que priorice la experiencia del usuario sin necesitar contratar un agente por cada diez mil usuarios nuevos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Escalar el soporte de una app de consumo masivo con self-service, IA conversacional, comunidad y triaje efectivo.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Crear y monetizar una app como freelance o indie developer',
                'description'      => 'El camino de la idea al lanzamiento en solitario: desarrollo, diseño, ASO, los primeros usuarios y los modelos de monetización que funcionan para proyectos independientes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un indie developer o desarrollador independiente con experiencia lanzando apps de consumo en solitario o en equipos muy pequeños y consiguiendo monetizarlas de forma sostenible. Quiero desarrollar y lanzar mi propia app como proyecto paralelo o como negocio principal.

Mi situación:
- Idea de app: [describe la idea brevemente o indica que aún no la tienes definida]
- Mi nivel técnico: [puedo programar / sé diseño / necesito externalizar parte / no soy técnico]
- Plataformas objetivo: [iOS / Android / web / todas]
- Objetivo: [ingreso pasivo / negocio principal / portfolio / experimentar]
- Tiempo disponible: [horas por semana]
- Presupuesto para el lanzamiento: [rango de €/$]

Ayúdame con los siguientes bloques:

**1. Validación de la idea antes de construir**
El error más caro de los indie developers es construir una app que nadie quiere. ¿Cómo valido mi idea de app con el mínimo esfuerzo posible antes de escribir una línea de código? Dame el proceso de validación: cómo busco si la demanda existe (búsquedas en las tiendas, Google Trends, comunidades online), cómo analizo a la competencia existente (que confirma que hay mercado, no que no debo hacerlo), cómo construyo una landing page y consigo los primeros cien emails de personas interesadas, y qué métricas de validación me dicen que tengo algo real.

**2. Stack técnico para un developer en solitario**
Construir una app solo implica elegir la tecnología que te permita avanzar rápido sin acumular deuda técnica imposible de pagar. ¿Qué stack recomiendas para un indie developer de apps móviles? Compara: nativo (Swift/Kotlin), React Native, Flutter y los no-code o low-code para apps más simples. Para un developer web que quiere hacer apps móviles: ¿cuál tiene la menor curva de aprendizaje y el mejor ecosistema de librerías? ¿Qué herramientas de backend (Supabase, Firebase, PocketBase) son las más rápidas para lanzar?

**3. Diseño y UX sin ser diseñador**
La mayoría de los indie developers no son diseñadores. ¿Cómo consigo una app que se vea profesional sin contratar a un diseñador? Dame las estrategias: cómo usar design systems y componentes UI de las librerías de cada plataforma, recursos de templates y kits de UI (Figma Community, UIKit.to), cuándo vale la pena contratar a un diseñador freelance para las pantallas clave y las herramientas de IA para generar assets e iconos. ¿Cuáles son los errores de diseño que más dañan la percepción de calidad de una app independiente?

**4. ASO: app store optimization para los primeros usuarios**
Sin presupuesto de marketing, el ASO es mi principal canal de adquisición orgánica. ¿Cómo optimizo la ficha de mi app en App Store y Google Play para maximizar la visibilidad y la conversión? Dame el proceso completo: investigación de keywords (herramientas gratuitas y de pago), optimización del título y subtítulo, descripción que convierte, capturas de pantalla que comunican el valor en tres segundos, icono que destaca en los resultados de búsqueda y estrategia de reseñas iniciales. ¿Cuántas instalaciones necesito en los primeros días para que el algoritmo me dé tracción?

**5. Los primeros mil usuarios: cómo conseguirlos sin presupuesto**
El lanzamiento es el momento más difícil para un indie developer. ¿Cómo consigo los primeros mil usuarios sin presupuesto de marketing? Dame una lista de canales orgánicos efectivos: Product Hunt (cómo preparar el lanzamiento), Reddit (qué subreddits y cómo publicar sin ser expulsado por spam), comunidades de Discord y Slack de tu nicho, Twitter o X como canal de building in public, Hacker News (Show HN), comunidades de Beta Testing y cómo aprovechar los medios especializados del sector de tu app.

**6. Monetización para proyectos indie**
La monetización de una app indie tiene reglas distintas a la de una empresa financiada. ¿Qué modelos funcionan mejor para proyectos pequeños con audiencias de nicho? Dame las opciones: pago único (one-time purchase, cada vez más raro pero con fans fieles), suscripción mensual o anual (recurrente pero con mayor fricción), freemium con compra única de pro (equilibrio entre fricción y recurrencia), y el patron pricing (Patreon, Ko-fi) para apps con comunidades comprometidas. ¿Cuántos usuarios de pago necesito para cubrir los costes y tener un ingreso modesto pero real?

Dame la perspectiva honesta del indie developer que ha pasado por el ciclo completo: la emoción del lanzamiento, la decepción de las primeras semanas y la satisfacción de encontrar un modelo que funciona.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Lanzar y monetizar una app como indie developer: validación de idea, stack técnico, ASO, primeros usuarios y modelos de monetización sostenibles.',
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
