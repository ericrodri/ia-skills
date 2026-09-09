<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills265Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Influencer marketing: estrategia, selección y medición de ROI',
                'description'      => 'Construye una estrategia completa de influencer marketing: selección por tier, briefing, modelos de compensación y medición de ROI con UTMs y códigos de afiliación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en influencer marketing con más de 10 años de experiencia trabajando con marcas de consumo, tecnología y retail. Voy a pedirte que me guíes a través de la construcción de una estrategia de influencer marketing completa para mi empresa.

Antes de empezar, hazme las siguientes preguntas:
- ¿Cuál es mi producto o servicio y cuál es el precio promedio?
- ¿Cuál es mi público objetivo (edad, intereses, plataformas que usa)?
- ¿Cuál es mi presupuesto mensual estimado para influencer marketing?
- ¿Qué resultados quiero lograr: awareness, conversiones, comunidad o SEO?
- ¿He trabajado con influencers antes? ¿Qué funcionó y qué no?

Una vez que tengas esta información, guíame a través de los siguientes pasos:

PASO 1: Definir la estrategia de influencer
Explícame las diferencias entre mega-influencers (más de 1M seguidores), macro (100K-1M), micro (10K-100K) y nano (menos de 10K). Ayúdame a entender qué tier es el más adecuado para mis objetivos y presupuesto. Incluye datos de engagement promedio por tier y casos de uso típicos para cada categoría.

PASO 2: Criterios de selección de influencers
Crea conmigo una rúbrica de evaluación que incluya:
- Tasa de engagement real vs inflada (cómo detectar bots y compra de seguidores)
- Alineación de audiencia con mi target demográfico
- Calidad del contenido y consistencia de la marca personal
- Historial de colaboraciones y posibles conflictos de marca
- Métricas de rendimiento pasado en contenido patrocinado
- Red flags que debo evitar en el proceso de selección

PASO 3: Estructura del briefing creativo
Dame una plantilla de briefing para influencers que cubra:
- Mensajes clave y elementos no negociables de la marca
- Libertad creativa permitida y límites editoriales
- Especificaciones técnicas del contenido (formato, duración, resolución)
- Calendario de publicación y proceso de aprobaciones
- Requisitos de disclosure y cumplimiento legal según la normativa de publicidad

PASO 4: Modelos de compensación
Explícame los diferentes modelos de pago y cuándo usar cada uno:
- Fee fijo por publicación o por campaña
- Comisión por afiliación o código de descuento único
- Modelo híbrido (fee reducido más comisión sobre ventas)
- Producto o servicio gratuito como única compensación (cuándo tiene sentido)
- Partnership a largo plazo o programa de embajadores con contrato anual

Ayúdame a calcular el fee justo basado en los seguidores, el engagement y el sector de actividad.

PASO 5: Métricas y medición de ROI
Define conmigo un framework de medición estructurado:
- KPIs por etapa del funnel: awareness (reach, impresiones), consideración (clics, guardados, comentarios), conversión (ventas, registros, descargas)
- Cómo trackear el tráfico y conversiones atribuibles al influencer usando UTMs, códigos de descuento exclusivos y landing pages dedicadas
- Cómo calcular el CPM, CPC y ROAS comparado con publicidad pagada convencional
- Benchmarks de la industria por sector y tipo de contenido para saber si mis números son buenos
- Cómo construir un reporte mensual claro para presentar a la dirección

PASO 6: Gestión de relaciones a largo plazo
Explícame cómo convertir colaboraciones puntuales en embajadorías sostenibles:
- Frecuencia de comunicación y check-ins recomendados
- Cómo co-crear contenido que genere valor para el influencer y para la marca
- Estructura de un programa de embajadores con incentivos escalonados
- Cómo manejar situaciones de crisis o controversia con influencers

Termina con un plan de acción de 90 días con hitos semanales y entregables concretos para lanzar mi primer programa de influencer marketing desde cero.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Desarrollar una estrategia de influencer marketing completa con selección, briefing y medición de ROI',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Plataformas para creadores: construir herramientas para la economía creadora',
                'description'      => 'Diseña y arquitecta herramientas SaaS para la creator economy: desde gestión de audiencias hasta monetización, pagos y analytics para creadores de contenido.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software especializado en plataformas para la creator economy, con experiencia en Substack, Patreon, Gumroad y herramientas similares. Quiero construir una herramienta o plataforma para creadores de contenido y necesito tu guía técnica completa.

Primero hazme estas preguntas:
- ¿Qué tipo de creadores son mi target principal (podcasters, newsletters, streamers, YouTubers, cursos, comunidades)?
- ¿Cuál es el problema principal que resuelvo: distribución, monetización, gestión de comunidad, analytics, o gestión de marca?
- ¿Cuál es el stack tecnológico que prefiero o con el que ya trabajo?
- ¿Es un MVP, una feature nueva en un producto existente, o una plataforma completa?

Con esas respuestas, guíame a través de lo siguiente:

MÓDULO 1: Arquitectura de la plataforma para creadores
Diseña conmigo la arquitectura de datos que soporte los flujos típicos de un creador:
- Modelo de datos para perfiles de creador, contenido, suscriptores y transacciones
- Cómo estructurar los niveles de membresía y acceso a contenido
- Diseño de la API para que terceros puedan integrar la plataforma
- Decisiones de arquitectura para escalar de 100 a 100.000 suscriptores por creador

MÓDULO 2: Sistema de monetización técnica
Explícame las decisiones de implementación para los modelos de ingresos más comunes:
- Integración de pagos recurrentes con Stripe (subscriptions, webhooks, gestión de fallos de cobro)
- Implementación de acceso por contenido (paywalls, content gating, DRM básico)
- Sistema de afiliados y códigos de referido con tracking preciso
- Marketplaces de productos digitales (descargables, cursos, templates)
- Gestión de impuestos internacionales y cumplimiento fiscal automatizado

MÓDULO 3: Analytics y datos para creadores
Diseña el dashboard de analytics que un creador necesita realmente:
- Métricas de crecimiento de audiencia (seguidores, suscriptores, churn, LTV)
- Métricas de engagement por tipo de contenido y canal
- Ingresos: MRR, ARR, ingresos por producto, proyección
- Cómo construir un sistema de atribución de conversiones para el creador
- Exportación de datos y portabilidad para que el creador no quede atrapado en tu plataforma

MÓDULO 4: Gestión de comunidad a escala
Cómo construir las funcionalidades de comunidad que los creadores más necesitan:
- Comentarios, hilos y foros: cuándo construir vs integrar (Discord, Slack, Circle)
- Sistema de notificaciones multicanal (email, push, SMS) sin spam
- Moderación automatizada y herramientas para que el creador gestione su comunidad
- Eventos y webinars: opciones de integración (Zoom, Riverside, solución propia)

MÓDULO 5: Experiencia del creador (Creator DX)
El creador es tu usuario más crítico. Diseña conmigo:
- Onboarding que lleve al creador a su primer ingreso en menos de 7 días
- Editor de contenido adaptado al formato del creador (texto, video, audio, mixto)
- Automatizaciones que ahorren tiempo al creador (welcome sequences, upsells automáticos)
- Mobile-first para que el creador gestione todo desde el teléfono

Termina con un roadmap técnico de 6 meses con sprints de 2 semanas, priorizando las features que generan retención del creador antes que las que generan ingresos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 90,
                'use_case'         => 'Arquitectar y construir plataformas SaaS orientadas a la creator economy',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño para creadores: kits, templates y assets que los influencers necesitan',
                'description'      => 'Aprende a diseñar sistemas visuales reutilizables para creadores de contenido: brand kits, templates de Reels, Stories, thumbnails y packs de assets listos para vender o distribuir.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador gráfico especializado en branding para creadores de contenido y en la producción de assets digitales para plataformas como Instagram, TikTok, YouTube y Substack. Quiero crear un sistema de diseño o un pack de templates para creadores de contenido.

Antes de empezar, hazme estas preguntas:
- ¿Para qué tipo de creador estoy diseñando (o soy yo el creador que necesita su propio sistema visual)?
- ¿Qué plataformas son prioritarias (Instagram, TikTok, YouTube, newsletters, podcasts)?
- ¿El objetivo es vender estos assets a otros creadores o usarlos para mi propio contenido?
- ¿Qué herramientas de diseño usamos (Figma, Canva, Adobe Express, Illustrator)?

Con esas respuestas, guíame a través de:

BLOQUE 1: Brand kit del creador
Un creador de contenido no es una empresa tradicional, pero sí necesita coherencia visual. Ayúdame a definir:
- Paleta de colores que funcione en fondo oscuro y claro, y en pantallas de móvil
- Tipografías que sean legibles en contenido de formato corto (Reels, Shorts, TikToks)
- Elementos gráficos de firma: marcos, texturas, patrones o iconos propios del creador
- Reglas de uso del logo y foto de perfil en diferentes formatos
- Versión "lite" del brand kit que cualquier creador sin conocimientos de diseño pueda aplicar

BLOQUE 2: Sistema de templates para redes sociales
Diseña conmigo una familia de templates coherentes que incluya:
- Templates de Reels/TikTok: portadas, subtítulos, callouts, overlays de texto
- Templates de Stories (9:16): carruseles de valor, encuestas, preguntas, cuenta atrás
- Posts de feed (1:1 y 4:5): carruseles educativos, citas, antes/después, listas
- Thumbnails de YouTube con jerarquía visual clara y alto CTR
- Portadas de newsletter y encabezados de email

BLOQUE 3: Assets de contenido reutilizables
Qué elementos gráficos debe tener todo kit profesional para creadores:
- Transiciones y elementos animados para vídeo (cuándo usar Canva vs After Effects)
- Stickers, stamps y overlays con la identidad del creador
- Fondos y texturas para vídeos y fotos de producto
- Marcos de captura de pantalla para mockups de teléfonos y ordenadores
- Pack de iconos en el estilo visual del creador

BLOQUE 4: Sistema de producción y consistencia
Cómo mantener calidad y velocidad cuando publicas todos los días:
- Cómo organizar los archivos de Figma o Canva para que templates sean rápidos de editar
- Convenciones de naming para no perder tiempo buscando assets
- Cómo crear variables de color y tipografía en Figma para actualizar el estilo en segundos
- Guía de estilo de fotografía e imagen para que el contenido se reconozca sin ver el logo

BLOQUE 5: Vender assets de diseño a otros creadores
Si el objetivo es monetizar el trabajo de diseño:
- Plataformas donde vender templates (Creative Market, Etsy, Gumroad, la web propia)
- Cómo empaquetar y presentar un bundle de templates para que se venda solo
- Estrategia de precios: desde el pack de entrada hasta la licencia profesional
- Cómo proteger los activos y definir los términos de licencia de uso

Termina con una lista de entregables concretos para el primer kit, con tiempos estimados de producción por pieza y un orden de prioridad basado en el impacto inmediato para el creador.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Crear sistemas visuales y packs de templates para creadores de contenido',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Vender a través de influencers: modelos de afiliación y co-ventas',
                'description'      => 'Diseña un programa de ventas a través de influencers: estructura de afiliación, comisiones, tracking de conversiones y cómo convertir a los mejores en socios de co-venta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en ventas indirectas y programas de afiliación para marcas que venden a través de influencers y creadores de contenido. Quiero diseñar o mejorar mi programa de ventas a través de influencers y necesito una guía práctica y orientada a resultados.

Para empezar, hazme estas preguntas:
- ¿Qué vendo y cuál es el ticket promedio y el margen?
- ¿Tengo ya influencers con los que colaboro, o parto de cero?
- ¿Cuál es el canal principal de venta (ecommerce, app, servicio)?
- ¿Quiero un programa de afiliación masivo o prefiero pocos socios de alto volumen?
- ¿Qué infraestructura de tracking tengo (herramienta de afiliación, CRM)?

Con esas respuestas, guíame por estos bloques:

BLOQUE 1: Diseño del programa de afiliación
Explícame cómo estructurar un programa que sea atractivo para el influencer y rentable para mí:
- Comisiones por conversión: porcentaje vs fee fijo, cuándo usar cada modelo
- Duración de la cookie de atribución y cómo impacta en la decisión del influencer
- Estructura de niveles de comisión según volumen (más ventas, mayor porcentaje)
- Cómo calcular el máximo de comisión que puedo pagar sin destruir mi margen

BLOQUE 2: Herramientas de tracking y atribución
El tracking preciso es la base de cualquier programa de afiliación serio:
- Comparativa de plataformas: Impact, PartnerStack, ShareASale, Tapfiliate, solución propia
- Cómo implementar el tracking con códigos de descuento únicos vs links con parámetros UTM
- Cómo atribuir ventas que vienen de múltiples touchpoints (el influencer no siempre es el último clic)
- Dashboards para que el influencer vea sus propias métricas en tiempo real
- Cómo prevenir el fraude en los programas de afiliación

BLOQUE 3: Del afiliado al socio de co-venta
Algunos influencers pueden convertirse en verdaderos socios comerciales:
- Señales que indican que un afiliado tiene potencial de co-venta (volumen, engagement de su audiencia con mi producto)
- Modelos de co-venta: el influencer como canal exclusivo para un producto o mercado específico
- Cómo estructurar un acuerdo de revenue share más profundo (equity, beneficios, acceso anticipado)
- Qué compromisos pedir al socio de co-venta: contenido mínimo, exclusividades, formación

BLOQUE 4: Activación y soporte al influencer-vendedor
El influencer necesita herramientas para vender bien:
- Kit de ventas para influencers: mensajes clave, objeciones frecuentes, argumentario simplificado
- FAQs del producto que el influencer pueda consultar antes de publicar
- Materiales de contenido co-branded que el influencer puede usar directamente
- Proceso de onboarding para un nuevo afiliado que lo lleve a su primera venta en 7 días

BLOQUE 5: Medición del canal influencer como canal de ventas
Cómo evaluar el rendimiento del programa más allá de las ventas directas:
- CAC del cliente proveniente de influencer vs otros canales
- LTV comparado: ¿los clientes que llegan por influencer retienen mejor o peor?
- Contribución del canal influencer al pipeline total
- Cuándo escalar el programa y cuándo cortarlo

Termina con una propuesta de programa de afiliación lista para presentar a un primer grupo de 5 influencers piloto, con estructura de comisiones, condiciones de acceso y criterios de éxito a 90 días.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar un programa de ventas por afiliación con influencers y estructurar co-ventas estratégicas',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Creator economy products: construir para creadores de contenido',
                'description'      => 'Define la estrategia de producto para herramientas orientadas a creadores: casos de uso, jobs-to-be-done, modelos de negocio y roadmap priorizando la retención del creador.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior con experiencia construyendo herramientas para la creator economy. Quiero definir o refinar la estrategia de producto de una herramienta orientada a creadores de contenido. Necesito tu guía para entender mejor al usuario, priorizar features y construir algo que los creadores realmente usen y paguen.

Para contextualizarme bien, hazme estas preguntas al inicio:
- ¿Qué herramienta estoy construyendo o quiero construir (analytics, monetización, gestión de comunidad, creación de contenido, distribución)?
- ¿En qué tipo de creador me enfoco (nano, micro, macro) y en qué plataformas trabajan?
- ¿Estoy en fase de ideación, tengo un MVP, o ya tengo usuarios activos?
- ¿Cuál es el modelo de negocio (SaaS, marketplace, freemium, transaccional)?

Con esas respuestas, guíame por estos módulos:

MÓDULO 1: Entender al creador como usuario
El creador de contenido tiene necesidades únicas que difieren del trabajador del conocimiento tradicional:
- Cómo aplicar el framework Jobs-to-be-Done al contexto del creador
- Los principales dolores del creador según su fase: crecimiento, monetización, escala
- Cómo hacer user research con creadores (son difíciles de reclutar y muy críticos)
- Cómo evitar el error de construir para creadores top cuando tu mercado real son los micro-creadores
- La diferencia entre lo que el creador dice que necesita y lo que realmente usa

MÓDULO 2: Modelo de negocio y monetización del producto
Los creadores son un segmento particular en términos de disposición a pagar:
- Cuándo tiene sentido freemium vs trial vs pago desde el primer día
- Cómo precio basado en el valor que genero al creador (sus ingresos, su crecimiento)
- Pricing por número de seguidores, por contenido publicado, o por ingresos generados
- El problema del "creador pobre con muchos seguidores" y cómo manejarlo en el modelo
- Modelos de marketplace donde el creador paga solo cuando gana

MÓDULO 3: Métricas de producto para herramientas de creadores
Define conmigo el sistema de métricas adecuado:
- North star metric para una herramienta de creadores (activación, contenido publicado, ingresos generados)
- Cómo medir la retención del creador (es estacional y depende de su actividad de publicación)
- Engagement de producto: diferencia entre usuarios activos diarios que son creadores vs sus fans
- Cómo medir el valor generado al creador más allá del uso de la herramienta

MÓDULO 4: Roadmap orientado a la retención del creador
Los creadores abandonan herramientas rápidamente si no ven valor inmediato:
- Cómo priorizar el tiempo al primer valor (TTV) por encima de features adicionales
- El onboarding del creador: cómo llevarle a su primer resultado en menos de 24 horas
- Features de stickiness: ¿qué hace que el creador no pueda irse (datos históricos, comunidad, workflows)?
- Cómo construir una hoja de ruta que equilibre retención de actuales vs adquisición de nuevos

MÓDULO 5: Crecer con la comunidad de creadores
Los creadores construyen en público y su red es tu mejor canal de distribución:
- Cómo construir un programa de early adopters con creadores influyentes
- Product-led growth en la creator economy: cómo el producto genera su propio marketing
- Comunidad de producto: cómo los creadores que usan tu herramienta se convierten en embajadores
- Partnerships con plataformas (YouTube, TikTok, Substack) como canal de distribución

Termina con un ejercicio de priorización de las 5 features más críticas para el próximo trimestre, con criterio de impacto en retención del creador y esfuerzo técnico estimado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 75,
                'use_case'         => 'Definir estrategia de producto para herramientas orientadas a creadores de contenido',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Talent de influencers: contratar y gestionar creadores internos',
                'description'      => 'Aprende a incorporar creadores de contenido como parte del equipo: perfiles, procesos de selección, estructura de KPIs y cómo gestionar el equilibrio entre creatividad y objetivos de negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de RRHH con experiencia específica en contratación y gestión de talento creativo para departamentos de contenido y marketing. Quiero crear o profesionalizar el equipo de creadores internos de mi empresa y necesito una guía completa desde la definición del perfil hasta la gestión del rendimiento.

Para entender bien el contexto, hazme estas preguntas al inicio:
- ¿Qué tipo de empresa soy (startup, corporación, agencia, media) y qué contenido quiero producir internamente?
- ¿Tengo ya creadores en el equipo o estoy construyendo desde cero?
- ¿El creador va a trabajar en exclusiva para mí o en un modelo híbrido con libertad de crear su propio contenido?
- ¿Cuál es el presupuesto para este equipo y cuántos perfiles necesito?

Con esas respuestas, guíame por estos bloques:

BLOQUE 1: Perfiles de talento creador en el ecosistema corporativo
El "creador interno" no es un community manager ni un diseñador gráfico. Ayúdame a entender:
- Las diferencias entre content creator, social media manager, brand journalist y productor de contenido
- Qué habilidades técnicas son imprescindibles vs las que se aprenden en el equipo
- Cómo evaluar la "mentalidad de creador" (consistencia, resiliencia al rechazo, obsesión por la audiencia)
- El perfil T-shaped del creador interno: especialidad profunda + versatilidad de formatos
- Señales de alerta en candidatos que son más "influencers de ego" que profesionales del contenido

BLOQUE 2: Proceso de selección para creadores
La selección de talento creativo requiere métodos diferentes al proceso estándar:
- Cómo diseñar una prueba de contenido que revele creatividad real sin explotar el trabajo del candidato
- Entrevistas por competencias adaptadas al perfil creador (resiliencia, análisis de datos, audiencia)
- Cómo evaluar el portfolio: qué métricas mirar más allá de los seguidores
- Cómo contratar un creador que ya tiene su propia audiencia sin que el conflicto de intereses sea un problema
- Preguntas de entrevista específicas para detectar si el creador puede trabajar con restricciones corporativas

BLOQUE 3: Contrato, compensación y estructura del rol
Los creadores tienen expectativas diferentes al empleado corporativo típico:
- Estructura salarial que combine fijo con variable por rendimiento de contenido
- Qué derechos sobre el contenido cedido son razonables y cuáles espantan al talento creativo
- Cómo gestionar la cláusula de exclusividad sin perder a los mejores candidatos
- Beneficios que valoran los creadores: equipo técnico, tiempo para experimentar, crédito público por el trabajo
- Política de uso de las herramientas y plataformas de la empresa para contenido personal

BLOQUE 4: KPIs y evaluación del rendimiento creativo
Medir el rendimiento de un creador interno es diferente a medir el de un analista:
- Cómo establecer KPIs que equilibren métricas de negocio (leads, ventas, brand awareness) con métricas creativas (calidad, consistencia, innovación)
- Ciclos de feedback que no destruyan la creatividad pero mantengan la alineación con objetivos
- Cómo gestionar la temporada baja de un creador sin penalizarle
- Revisiones de rendimiento adaptadas al ciclo de vida del contenido

BLOQUE 5: Cultura de equipo y retención del talento creador
Los creadores son difíciles de retener porque el mercado freelance les ofrece mucha libertad:
- Cómo crear un entorno donde el creador se sienta valorado y con espacio para crecer
- Programas de desarrollo profesional específicos para talento creativo
- Cómo gestionar el burnout del creador (publicar todos los días agota)
- Cuándo tiene sentido dejar ir a un creador que ha "superado" el contexto corporativo

Termina con una job description lista para publicar para el primer creador interno de la empresa, con responsabilidades, KPIs de los primeros 90 días y estructura de compensación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Contratar y gestionar creadores de contenido como parte del equipo interno',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Monetización del creador: diversificar ingresos más allá del patrocinio',
                'description'      => 'Diseña un modelo de ingresos diversificado para creadores: suscripciones, productos digitales, comunidad de pago, servicios, eventos y licencias de contenido.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor financiero y de negocio especializado en creadores de contenido y economía digital. Quiero diseñar o diversificar las fuentes de ingresos de mi negocio como creador y construir un modelo financiero sostenible que no dependa exclusivamente de los patrocinios.

Para entender mi situación, hazme estas preguntas al inicio:
- ¿Cuál es mi nicho de contenido y en qué plataformas publico?
- ¿Cuántos seguidores o suscriptores tengo actualmente?
- ¿Cuáles son mis ingresos actuales y de qué fuentes vienen?
- ¿Qué tiempo dedico a crear contenido vs a gestionar el negocio?
- ¿Cuál es el ingreso mensual que quiero alcanzar y en qué plazo?

Con esas respuestas, guíame por este análisis:

PILAR 1: Auditoría de las fuentes de ingresos actuales
Antes de diversificar, hay que entender qué tengo:
- Cómo evaluar la sostenibilidad y predecibilidad de cada fuente de ingreso actual
- El riesgo de concentración: qué pasa si mi fuente principal desaparece (cambio de algoritmo, crisis de un sponsor)
- Cuáles son las fuentes de ingreso más comunes por tipo de creador y cuáles tienen mejor margen
- El principio de los ingresos recurrentes vs ingresos transaccionales para el creador

PILAR 2: Modelos de suscripción y membresía
Las suscripciones son el pilar más estable para un creador:
- Diferencias entre Patreon, Substack, Newsletter (propia), plataforma propia de membresía
- Cómo diseñar los niveles de membresía y qué valor ofrecer en cada uno
- Estrategia de precio: desde el precio de entrada hasta el nivel premium
- Cómo calcular el MRR objetivo y cuántos suscriptores necesito para alcanzarlo
- Cómo reducir el churn en una membresía de creador

PILAR 3: Productos digitales y conocimiento
El creador que enseña lo que sabe puede escalar sin límite de tiempo:
- Tipos de productos digitales: cursos, templates, ebooks, guías, herramientas, presets
- Cómo validar un producto digital antes de construirlo completamente
- Plataformas de venta y distribución: pros, contras y comisiones
- Estrategia de precios para productos digitales (incluyendo bundles y actualizaciones)
- Cómo reutilizar el contenido existente para crear productos de forma eficiente

PILAR 4: Servicios y consultoría de alto valor
Muchos creadores infravaloran su conocimiento especializado:
- Cuándo tiene sentido ofrecer servicios (no todos los creadores deberían hacerlo)
- Tipos de servicios que puede ofrecer un creador: consultoría, coaching, speaking, workshops
- Cómo fijar el precio por hora o por proyecto para no infravalorar el expertise
- Cómo limitar los servicios para que no canibalicen el tiempo de creación de contenido
- Del servicio individual al programa grupal: cómo escalar sin trabajar más horas

PILAR 5: Licencias, sindicación y reutilización del contenido
El contenido que ya existe puede seguir generando dinero:
- Cómo licenciar contenido a marcas, medios o empresas que quieran usarlo
- Sindicación de newsletters o podcasts a otras plataformas con revenue share
- Stock de vídeos, fotografías o audio: cuándo tiene sentido y qué plataformas usar
- Cómo proteger el contenido para que no se use sin permiso ni compensación

Termina con un modelo financiero simplificado que muestre el mix de ingresos objetivo a 12 meses, con el número de unidades necesarias de cada fuente para alcanzar el ingreso mensual deseado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar un modelo de ingresos diversificado y sostenible para creadores de contenido',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos con influencers: derechos, exclusividades y cumplimiento publicitario',
                'description'      => 'Aprende a redactar y revisar contratos con influencers que protejan a la marca: derechos de uso del contenido, cláusulas de exclusividad, obligaciones de disclosure y gestión de incumplimientos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho publicitario, contratos de colaboración y propiedad intelectual aplicada a la economía del influencer. Quiero entender cómo redactar, revisar y gestionar contratos con influencers que protejan los intereses de la marca sin espantar al talento creativo.

Para entender el contexto específico, hazme estas preguntas al inicio:
- ¿Soy la marca que contrata al influencer o el influencer que revisa el contrato que me ofrecen?
- ¿Cuál es el país o jurisdicción principal donde opera la colaboración?
- ¿Qué tipo de colaboración es (publicación puntual, campaña, embajadora a largo plazo)?
- ¿Hay producto o servicio de alto riesgo regulatorio implicado (finanzas, salud, alcohol, suplementos)?

Con esas respuestas, guíame por estos bloques:

BLOQUE 1: Estructura del contrato de colaboración con influencer
Los elementos fundamentales que todo contrato debe incluir:
- Identificación de las partes y capacidad legal para contratar
- Descripción detallada de los entregables (número de publicaciones, formato, plataforma, duración mínima)
- Calendario de publicación y proceso de aprobación de contenido
- Derechos de uso del contenido creado: cuánto tiempo, en qué canales, para qué fines
- Contraprestación económica: fee, condiciones de pago, facturación y retención fiscal si aplica

BLOQUE 2: Derechos de propiedad intelectual del contenido
Este es el punto más conflictivo entre marcas e influencers:
- Diferencia entre licencia de uso y cesión de derechos: cuándo pedir cada una
- Derechos de uso en publicidad pagada (whitelisting): qué implica y qué compensación extra exige
- Cómo redactar una cláusula de derechos que sea justa pero proteja a la marca
- Propiedad de los datos de audiencia que genera el contenido patrocinado
- Qué pasa con el contenido si la colaboración termina anticipadamente

BLOQUE 3: Cláusulas de exclusividad y restricciones
- Tipos de exclusividad: de categoría, de competidor directo, de plataforma
- Cómo definir con precisión quiénes son "competidores" para evitar disputas
- Duración razonable de la exclusividad según el tipo de colaboración y la compensación
- Look-back: restricciones sobre colaboraciones pasadas que puedan confundir a la audiencia
- Cómo compensar económicamente la exclusividad cuando se exige al influencer

BLOQUE 4: Cumplimiento legal en publicidad con influencers
El incumplimiento de las normas de publicidad es el mayor riesgo legal de las marcas:
- Normativa vigente en España y la UE sobre identificación de contenido publicitario (CNMC, directiva de servicios de comunicación audiovisual)
- Obligación de usar etiquetas como "publicidad", "colaboración pagada" o "anuncio": cuándo, cómo y dónde
- Responsabilidad compartida: cuándo responde la marca, cuándo el influencer y cuándo ambos
- Sectores con regulación especial: productos de salud, finanzas, apuestas, alcohol, menores
- Documentación que la marca debe conservar como prueba de cumplimiento

BLOQUE 5: Incumplimientos y resolución de conflictos
- Cómo redactar una cláusula de penalización proporcional al incumplimiento
- Causas de resolución anticipada del contrato (escándalo público, incumplimiento de valores de marca)
- Cómo gestionar una crisis de reputación cuando el influencer actúa fuera del contrato
- Mecanismos de resolución de disputas: mediación, arbitraje vs litigación ordinaria
- Cómo recuperar el contenido o exigir su eliminación cuando la relación termina mal

Termina con un checklist de revisión contractual de 20 puntos que cualquier responsable de marketing puede usar antes de firmar un acuerdo con un influencer.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Redactar y revisar contratos con influencers con enfoque en derechos, exclusividades y cumplimiento publicitario',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de partnerships con creadores como canal de adquisición',
                'description'      => 'Aprende a gestionar creadores y afiliados como canal de adquisición de clientes: onboarding, soporte, medición de impacto en retención y cómo escalar el programa sin perder calidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia en programas de partnerships con creadores de contenido como canal de adquisición de usuarios. Quiero construir o mejorar la gestión de un programa de creadores que traigan clientes a mi producto o servicio.

Para contextualizar bien la situación, hazme estas preguntas al inicio:
- ¿Qué producto o servicio ofrezco y cuál es el perfil del cliente que quiero adquirir?
- ¿Tengo ya un programa de creadores o afiliados activo, o parto de cero?
- ¿Cuál es el LTV promedio del cliente y cuánto puedo pagar por una adquisición?
- ¿Cómo es el ciclo de venta (compra inmediata, trial, demo, consulta)?

Con esas respuestas, guíame por estos bloques:

BLOQUE 1: Diseño del programa de partnerships con creadores
Un programa bien diseñado funciona; uno mal diseñado genera trabajo sin resultados:
- Criterios de selección de creadores para el programa (tamaño, nicho, engagement, alineación de audiencia)
- Diferencia entre afiliado genérico y creador-partner: por qué importa la distinción
- Estructura de incentivos que motive al creador a priorizar mi producto en su contenido
- Cómo definir las reglas del programa de forma clara y evitar conflictos después
- Plataformas de gestión de partnerships recomendadas según escala y presupuesto

BLOQUE 2: Onboarding del creador como canal
El onboarding determina si el creador va a generar resultados o no:
- Proceso de activación del creador en las primeras 48 horas (acceso, materiales, brief inicial)
- Kit de inicio para el creador: talking points, FAQs del producto, materiales visuales, link de tracking
- Sesión de kickoff: qué cubrir para alinear expectativas sin quitarle al creador libertad creativa
- Cómo facilitar que el creador use el producto de verdad antes de hablar de él
- Cómo medir si el onboarding funcionó: primer contenido publicado en los primeros 14 días

BLOQUE 3: Gestión continua y soporte del creador
El mayor error es activar al creador y no volver a hablar con él en semanas:
- Cadencia de comunicación: check-ins regulares sin ser intrusivo
- Cómo responder rápido a las necesidades del creador (preguntas de audiencia, acceso a producto, materiales)
- Gestión de contenido: cuándo aprobar, cuándo pedir cambios y cómo hacerlo sin dañar la relación
- Cómo compartir insights de los clientes que llegan del creador para que el creador mejore su contenido
- Señales de que un creador del programa está perdiendo motivación y cómo recuperarle

BLOQUE 4: Medición del impacto del creador en retención y LTV
Un cliente traído por un creador no es igual a uno traído por publicidad pagada:
- Cómo segmentar la cohorte de clientes provenientes de creadores para comparar su comportamiento
- Métricas clave: conversión a pago, churn a 30/60/90 días, LTV vs cohortes de otros canales
- Cómo atribuir correctamente cuando un cliente interactúa con múltiples creadores antes de convertir
- Dashboard de rendimiento del programa de creadores para presentar al equipo directivo
- Cómo usar los datos de retención para decidir qué creadores escalar y cuáles pausar

BLOQUE 5: Escalar el programa sin perder calidad
La escala en programas de creadores destruye la calidad si no se gestiona bien:
- Cómo sistematizar el onboarding para que funcione sin atención personalizada en cada caso
- Cómo segmentar el soporte: atención personalizada para top performers, autoservicio para el resto
- Automatizaciones que mantienen el programa activo sin trabajo manual constante
- Cuándo contratar un partner manager dedicado y qué debe medir esta persona

Termina con un plan de lanzamiento de 60 días para un programa de 10 creadores piloto, con tareas semana a semana y métricas de éxito al final del periodo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar creadores y afiliados como canal de adquisición con onboarding, soporte y medición de impacto',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Ser influencer profesional: construir audiencia y monetizarla',
                'description'      => 'Guía completa para construir una carrera como creador de contenido: nicho, plataformas, estrategia de crecimiento, primeras fuentes de ingresos y cómo profesionalizar el negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un mentor de creadores de contenido con experiencia ayudando a personas a construir audiencias y negocios rentables alrededor de su conocimiento o personalidad. Quiero construir una carrera como influencer o creador de contenido y necesito una hoja de ruta clara y honesta desde donde estoy hasta los primeros ingresos.

Para entender mi situación real, hazme estas preguntas al inicio:
- ¿Cuál es mi nicho o área de expertise? ¿Por qué yo en ese nicho?
- ¿Qué plataformas he probado hasta ahora y qué resultados he tenido?
- ¿Cuánto tiempo a la semana puedo dedicar a crear contenido?
- ¿Cuál es mi objetivo: ingresos complementarios, negocio principal, o notoriedad profesional?
- ¿Tengo ya audiencia, aunque sea pequeña, o parto de cero absoluto?

Con esas respuestas, guíame a través de estos pasos:

FASE 1: Definir el nicho y la propuesta de valor como creador
El error más común es empezar sin claridad en esto:
- Cómo encontrar el cruce entre lo que sé, lo que me apasiona y lo que la gente busca
- Cómo validar si hay demanda real en mi nicho antes de invertir meses creando contenido
- La diferencia entre nicho demasiado amplio (no te diferencias) y demasiado estrecho (no hay audiencia suficiente)
- Cómo definir mi voz y punto de vista único dentro de un nicho con mucha competencia
- Ejercicio práctico: mi posicionamiento como creador en una frase

FASE 2: Elegir la plataforma correcta y el formato adecuado
No todas las plataformas son para todos los creadores:
- Qué plataformas son las mejores para diferentes tipos de contenido y personalidades
- Cómo elegir una plataforma principal de crecimiento y plataformas secundarias de distribución
- Pros y contras de depender de una sola plataforma (riesgo de algoritmo)
- Cuándo tiene sentido tener newsletter propia como base de la estrategia

FASE 3: Estrategia de contenido y crecimiento de audiencia
Crecer de forma consistente requiere sistema, no inspiración:
- Cómo crear un calendario de contenido sostenible para una persona sola
- La regla de los tres tipos de contenido: educativo, de entretenimiento y de conexión personal
- Cómo usar el contenido de formato corto para crecer y el de formato largo para fidelizar
- Colaboraciones con otros creadores: cómo acercarse, qué proponer y cómo beneficiarse
- Cómo analizar los datos de la plataforma para entender qué funciona y doblar la apuesta

FASE 4: Primeros ingresos como creador
La mayoría abandona antes de ver dinero porque no sabe cómo monetizar antes de tener 100K seguidores:
- Los modelos de monetización que funcionan con audiencias pequeñas pero comprometidas
- Cómo lanzar el primer producto o servicio sin una audiencia grande
- Cuándo aceptar el primer patrocinio y cómo negociar sin experiencia previa
- Cómo construir una lista de email desde el principio (el activo más valioso a largo plazo)
- Los primeros 1.000 euros como creador: el camino más corto según mi perfil

FASE 5: Profesionalizar el negocio como creador
Cuando el contenido empieza a generar ingresos, hay que tratarlo como un negocio:
- Estructura legal: autónomo, sociedad, o plataformas internacionales (ventajas e inconvenientes)
- Gestión del tiempo: cómo separar el tiempo de creación del tiempo de gestión
- Herramientas básicas para gestionar el negocio (facturación, contratos, analytics, scheduling)
- Cómo construir un equipo pequeño cuando el trabajo supera tu capacidad individual
- Indicadores de que tu negocio como creador es sostenible y escalable

Termina con un plan de 6 meses semana a semana para pasar de cero a los primeros 500 suscriptores o seguidores comprometidos, con los primeros ingresos y una base para construir a largo plazo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir una carrera como creador de contenido con estrategia de crecimiento y primeros ingresos',
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
