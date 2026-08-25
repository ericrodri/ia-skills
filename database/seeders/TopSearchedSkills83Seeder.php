<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills83Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing en Twitch y gaming',
                'description'      => 'Aprende a crear estrategias de branded content, gestionar patrocinios de streamers y conectar con comunidades de videojuegos de forma auténtica.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing de gaming y plataformas de streaming con más de ocho años de experiencia trabajando con marcas que buscan conectar con audiencias jóvenes a través de Twitch, YouTube Gaming y comunidades de videojuegos.

Voy a darte información sobre mi marca, mis objetivos y mi presupuesto. Necesito que me ayudes a diseñar una estrategia completa de marketing en el ecosistema gaming que incluya los siguientes elementos:

**1. Análisis del ecosistema gaming relevante para mi marca**
- Identifica qué géneros de videojuegos y qué tipo de comunidades encajan mejor con los valores y el público objetivo de mi marca.
- Explica las diferencias entre Twitch, YouTube Gaming, Discord y Reddit gaming para decidir dónde concentrar los esfuerzos.
- Señala los riesgos de reputación que debo conocer antes de entrar en este espacio.

**2. Estrategia de branded content**
- Propón formatos de contenido que no interrumpan la experiencia del streamer ni la de su audiencia: integraciones nativas, overlays, segmentos patrocinados, giveaways y eventos especiales.
- Explica cómo adaptar el tono de comunicación de mi marca al lenguaje y la cultura gaming sin sonar forzado o desautenticado.
- Dame ejemplos concretos de campañas de branded content exitosas en gaming que pueda usar como referencia o inspiración.

**3. Selección y gestión de streamers**
- Define los criterios para elegir streamers: alcance, engagement rate, valores, tipo de comunidad y alineación con mi marca.
- Diferencia entre mega-streamers, mid-tier y micro-streamers, y cuándo tiene sentido cada uno según mis objetivos.
- Explica qué debe incluir un contrato de patrocinio con un streamer: exclusividades, deliverables, métricas de éxito, derechos de uso de contenido y cláusulas de rescisión.
- Propón un proceso de briefing para que el streamer entienda mi marca sin limitar su autenticidad.

**4. Estrategia de comunidad en Discord y Reddit**
- Detalla cómo participar de forma genuina en comunidades de gaming de Reddit y Discord sin ser percibido como spam corporativo.
- Propón acciones de community building que aporten valor real: torneos, AMAs, recursos exclusivos, colaboraciones con moderadores.

**5. Métricas y medición de resultados**
- Define los KPIs más relevantes para campañas de gaming: concurrent viewers, chat engagement, clicks en links de descripción, códigos de descuento usados, impresiones de overlay y sentiment de la comunidad.
- Explica cómo hacer el seguimiento de la atribución en un entorno donde la conversión no siempre es directa.

**6. Plan de acción y calendario**
- Propón un plan de 90 días con fases: investigación, selección de creators, lanzamiento piloto y escalado.
- Incluye hitos medibles y puntos de decisión para ajustar la estrategia según los resultados iniciales.

**Información que necesito que me proporciones antes de empezar:**
1. ¿Cuál es tu marca y a qué sector pertenece?
2. ¿Cuál es tu público objetivo (edad, intereses, geografía)?
3. ¿Cuál es tu presupuesto mensual para activaciones de gaming?
4. ¿Has hecho alguna acción de marketing en gaming anteriormente? ¿Con qué resultado?
5. ¿Tienes algún streamer o comunidad en mente con la que ya tengas relación?

Empieza por hacerme estas preguntas una a una y, cuando tengas toda la información, genera la estrategia completa estructurada con los seis bloques anteriores.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar una estrategia de marketing en Twitch y comunidades gaming para una marca',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Implementación de PWA',
                'description'      => 'Guía completa para implementar Progressive Web Apps: service workers, web app manifest, estrategias offline-first y caché con Workbox.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero senior de frontend especializado en Progressive Web Apps con experiencia implementando PWAs en producción para aplicaciones con millones de usuarios. Tu enfoque es pragmático: priorizas la fiabilidad, la performance y la experiencia de usuario sobre la sofisticación técnica innecesaria.

Necesito implementar una PWA completa en mi aplicación web. Ayúdame a través de los siguientes bloques técnicos:

**1. Diagnóstico del punto de partida**
- Analiza qué requisitos mínimos debe cumplir mi aplicación para ser considerada una PWA instalable: HTTPS, manifest válido y service worker registrado.
- Explica cómo usar Lighthouse para auditar el estado PWA actual de mi aplicación y qué puntuaciones debo perseguir.
- Identifica las partes de la aplicación que más se beneficiarán de la capacidad offline.

**2. Web App Manifest**
- Genera un archivo `manifest.json` completo con todos los campos relevantes: `name`, `short_name`, `start_url`, `display`, `theme_color`, `background_color`, `icons` (en todos los tamaños necesarios para Android, iOS y desktop), `description`, `orientation` y `categories`.
- Explica las diferencias entre los valores de `display` (`standalone`, `minimal-ui`, `fullscreen`, `browser`) y cuándo elegir cada uno.
- Detalla cómo manejar el prompt de instalación (`beforeinstallprompt`) de forma personalizada para maximizar las instalaciones sin ser intrusivo.

**3. Service Worker: estrategias de caché**
- Explica el ciclo de vida del service worker: install, activate, fetch, y cómo gestionar las actualizaciones sin romper la experiencia de los usuarios activos.
- Implementa con Workbox las siguientes estrategias de caché según el tipo de recurso:
  - **Cache First**: para assets estáticos (CSS, JS, fuentes, imágenes de UI)
  - **Network First**: para llamadas a API con datos dinámicos
  - **Stale While Revalidate**: para páginas HTML y contenido que puede ser ligeramente desactualizado
  - **Network Only**: para operaciones críticas que nunca deben resolverse desde caché
- Muestra cómo configurar el precaching de assets de la shell de la aplicación.

**4. Estrategia offline-first**
- Diseña el flujo de usuario cuando no hay conexión: qué páginas y funcionalidades deben funcionar offline y cuáles deben mostrar un mensaje claro.
- Implementa la sincronización en segundo plano con Background Sync API para operaciones pendientes que deben ejecutarse cuando el dispositivo recupere la conexión.
- Explica cómo manejar conflictos de datos entre la versión local (offline) y la del servidor.

**5. Notificaciones push**
- Guía paso a paso para implementar Web Push Notifications: solicitud de permiso, suscripción al servidor push, envío desde backend y recepción en el service worker.
- Explica las mejores prácticas para no abusar de las notificaciones y mantener el opt-in rate alto.

**6. Performance y métricas**
- Define los Core Web Vitals que debo monitorizar: LCP, CLS, INP.
- Explica cómo el service worker impacta en el Time to First Byte y el First Contentful Paint.
- Herramientas recomendadas para monitorizar la PWA en producción.

**Preguntas iniciales:**
1. ¿Qué framework o stack usas (React, Vue, Angular, vanilla JS, Next.js…)?
2. ¿Tienes ya un service worker o partes desde cero?
3. ¿Cuál es el principal caso de uso offline que quieres cubrir?
4. ¿Tu aplicación tiene autenticación? ¿Cómo gestionas los tokens?

Hazme estas preguntas primero y luego genera el código y la guía adaptados a mi stack.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 90,
                'use_case'         => 'Implementar una PWA con service workers, manifest y estrategias de caché offline',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Rediseño de la identidad visual',
                'description'      => 'Proceso completo de rebranding estratégico que moderniza la marca sin sacrificar el equity construido: auditoría, estrategia y sistema visual nuevo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de diseño y estratega de marca con más de diez años liderando procesos de rebranding para empresas consolidadas. Tu metodología equilibra la innovación visual con la preservación del reconocimiento de marca que la empresa ha construido durante años.

Voy a afrontar un proceso de rediseño de identidad visual y necesito tu guía experta en cada fase del proyecto:

**1. Auditoría de la marca actual**
- Diseña una checklist completa para auditar la identidad visual existente: logotipo, paleta de color, tipografía, iconografía, tono visual, aplicaciones en soportes físicos y digitales.
- Explica cómo medir el brand equity visual actual: reconocimiento espontáneo, asociaciones de marca, coherencia percibida y diferenciación competitiva.
- Ayúdame a identificar qué elementos de la identidad actual tienen valor y deben preservarse y cuáles lastran la percepción de la marca.
- Propón una metodología de investigación con stakeholders internos y clientes actuales para entender qué valores visuales son inamovibles.

**2. Estrategia de rebranding**
- Define el espectro de intensidad del rebranding: evolución leve, modernización significativa o transformación radical. Ayúdame a determinar cuál necesito según mis objetivos.
- Explica cómo establecer el brief creativo estratégico: valores de marca que debe comunicar la nueva identidad, público objetivo, mercados donde compite y posicionamiento deseado.
- Detalla los riesgos del rebranding agresivo y las señales de alarma que indican que se está sacrificando demasiado equity.

**3. Proceso de diseño del nuevo sistema visual**
- Explica las fases del proceso creativo: exploración de conceptos, desarrollo de direcciones visuales, refinamiento y sistema final.
- Detalla cómo construir un sistema de identidad robusto que funcione en todos los contextos: logotipo principal, versiones secundarias, versión monocromática, favicon y app icon.
- Guíame en la selección de la paleta de color: colores primarios, secundarios y neutrales, con ratios de accesibilidad WCAG 2.1 AA.
- Explica el proceso de selección tipográfica: tipografía de display, tipografía de texto, fallbacks para web y criterios de legibilidad.

**4. Sistema de identidad completo**
- Describe qué debe incluir un brandbook moderno: principios de marca, uso correcto e incorrecto del logo, colores con valores HEX/RGB/CMYK/Pantone, tipografía con estilos y jerarquía, espaciado, fotografía, iconografía y voz visual.
- Explica cómo diseñar el sistema de aplicaciones: papelería, packaging, redes sociales, web, señalética y merchandising.

**5. Plan de lanzamiento y transición**
- Propón un plan de rollout por fases para minimizar la confusión: cuándo activar el cambio internamente, cuándo hacerlo público y cómo gestionar el período de convivencia entre la identidad antigua y la nueva.
- Redacta el mensaje de comunicación del rebranding para distintas audiencias: clientes, empleados, prensa y socios.

**Información que necesito:**
1. ¿En qué sector opera la empresa y cuántos años lleva en el mercado?
2. ¿Por qué se está planteando el rebranding ahora? ¿Hay un detonante concreto?
3. ¿Cuál es el presupuesto y el plazo disponible?
4. ¿Hay elementos de la identidad actual que sean innegociables?

Hazme estas preguntas y luego guíame fase a fase.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 90,
                'use_case'         => 'Liderar un proceso de rebranding que modernice la marca preservando su equity visual',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Técnicas de negociación win-win',
                'description'      => 'Domina el método Harvard de negociación basada en principios para cerrar acuerdos duraderos que satisfacen los intereses de todas las partes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en negociación con certificación en el método Harvard de negociación basada en principios y más de quince años entrenando a equipos comerciales, directivos y mediadores en situaciones de alta complejidad.

Necesito preparar y ejecutar una negociación importante. Ayúdame a aplicar el método Harvard y las técnicas win-win más efectivas:

**1. Fundamentos del método Harvard**
- Explica los cuatro principios del método Harvard: separar a las personas del problema, centrarse en intereses y no en posiciones, generar opciones de mutuo beneficio y usar criterios objetivos.
- Describe la diferencia entre posiciones (lo que cada parte dice que quiere) e intereses (por qué lo quiere), y cómo descubrir los intereses reales de la otra parte.
- Explica el concepto de BATNA (Best Alternative to a Negotiated Agreement) y cómo calcularlo para mi caso y para la otra parte.

**2. Preparación de la negociación**
- Proporciona una plantilla de preparación completa que incluya: mis objetivos prioritarios, mis intereses subyacentes, mi BATNA, el BATNA estimado de la otra parte, la zona de posible acuerdo (ZOPA), mis puntos de ruptura y las opciones creativas que puedo proponer.
- Explica cómo investigar a la otra parte antes de sentarse a negociar: qué información buscar, cómo interpretarla y qué sesgos evitar.
- Ayúdame a anticipar los argumentos y objeciones de la otra parte y a preparar respuestas que no sean defensivas sino exploratorias.

**3. Técnicas de apertura y desarrollo**
- Explica cuándo conviene hacer la primera oferta y cuándo es mejor dejar que la otra parte abra.
- Detalla las técnicas de anclaje: cómo establecer un ancla favorable sin dañar la relación.
- Describe cómo usar preguntas abiertas para descubrir intereses ocultos: qué preguntas hacer y en qué orden.
- Explica el rol del silencio como herramienta de negociación.

**4. Gestión de situaciones difíciles**
- Tácticas para manejar a una parte que usa presión, ultimátums o juego sucio sin comprometer la relación ni ceder posición innecesariamente.
- Cómo salir de un punto muerto (deadlock): técnicas de reformulación, introducción de nuevas variables y pausa estratégica.
- Qué hacer cuando la otra parte no negocia de buena fe.

**5. Cierre y seguimiento**
- Señales que indican que la otra parte está lista para cerrar.
- Cómo estructurar el acuerdo por escrito para evitar malentendidos futuros.
- Qué revisar después de la negociación para mejorar en la próxima.

**Simulación práctica**
Una vez que me hayas explicado el marco, propón un rol-play: tú juegas el papel de la otra parte en mi negociación y yo practico las técnicas contigo. Dame feedback después de cada intercambio.

**Preguntas iniciales:**
1. ¿Qué tipo de negociación tienes por delante (comercial, laboral, contractual, interna)?
2. ¿Cuál es tu objetivo principal y tu objetivo mínimo aceptable?
3. ¿Cuál es tu relación actual con la otra parte y qué quieres que sea después?
4. ¿Hay presión de tiempo o factores externos que condicionan la negociación?

Empieza con las preguntas y luego guíame.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Preparar y ejecutar una negociación compleja aplicando el método Harvard',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Localización de producto',
                'description'      => 'Adapta tu producto para nuevos mercados más allá de la traducción: UX, métodos de pago, regulación local y estrategia de entrada por país.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager especializado en expansión internacional con experiencia llevando productos digitales a más de doce mercados en Europa, Latinoamérica y Asia. Entiendes que la localización no es traducir el texto: es rediseñar la experiencia para que el usuario del nuevo mercado sienta que el producto fue construido para él.

Necesito localizar mi producto para entrar en un nuevo mercado. Guíame a través de este proceso completo:

**1. Análisis de mercado y viabilidad**
- Proporciona un framework para evaluar el atractivo de un mercado objetivo: tamaño, crecimiento, competidores locales, madurez digital, comportamiento del consumidor y barreras de entrada.
- Explica cómo priorizar entre varios mercados candidatos usando una matriz de esfuerzo-impacto.
- Identifica las señales tempranas que indican que un mercado ya está atrayendo usuarios de forma orgánica y conviene priorizar.

**2. Localización de UX y contenido**
- Describe las dimensiones de la localización de UX más allá de la traducción: dirección del texto (RTL/LTR), formatos de fecha, hora, número y moneda, longitud de los textos en distintos idiomas, preferencias de color y simbolismo cultural, y densidad de información en pantalla.
- Explica cómo hacer una auditoría de localización de la UI actual para identificar todos los elementos que deben adaptarse.
- Detalla el proceso de trabajo con traductores nativos y revisores culturales: briefing, glosario de producto, cadencia de revisión y gestión de assets.

**3. Métodos de pago y monetización local**
- Explica por qué los métodos de pago globales (Visa, Mastercard, PayPal) no son suficientes en muchos mercados y qué alternativas locales suelen ser dominantes por región.
- Describe cómo adaptar el modelo de precios: paridad de poder adquisitivo, precios psicológicos locales, frecuencias de pago preferidas y opciones de facturación.
- Detalla las implicaciones técnicas de integrar pasarelas de pago locales.

**4. Cumplimiento legal y regulación**
- Explica las principales áreas regulatorias que varían por país y que afectan a productos digitales: privacidad de datos (GDPR y equivalentes), fiscalidad digital, regulación de contenidos, protección al consumidor y requisitos de localización de datos.
- Proporciona un checklist de due diligence legal antes de lanzar en un nuevo mercado.

**5. Estrategia de go-to-market local**
- Describe las diferencias en los canales de adquisición entre mercados: qué redes sociales, buscadores y plataformas de contenido dominan en cada región.
- Explica cuándo tiene sentido buscar un socio local (distribuidor, agencia, partner estratégico) y cuándo es mejor entrar de forma directa.
- Propón una estructura de equipo mínima para gestionar un mercado nuevo en las primeras fases.

**6. Métricas de localización**
- Define los KPIs que indican que la localización está funcionando: conversión por país, churn diferencial, NPS por mercado, tiempo de activación y soporte por idioma.

**Preguntas iniciales:**
1. ¿Cuál es tu producto y a qué mercado quieres entrar?
2. ¿Cuál es tu mercado de origen y qué has aprendido de él que sea transferible?
3. ¿Tienes ya usuarios en ese mercado de forma orgánica?
4. ¿Cuál es tu presupuesto y plazo para el lanzamiento?

Hazme las preguntas y luego desarrolla el plan completo de localización.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 75,
                'use_case'         => 'Diseñar la estrategia de localización para entrar en un nuevo mercado con un producto digital',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de empleados remotos con bajo rendimiento',
                'description'      => 'Aprende a identificar y abordar el underperformance a distancia con conversaciones estructuradas, sin microgestión y con un plan de mejora efectivo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de liderazgo especializado en equipos remotos e híbridos con más de doce años ayudando a managers a gestionar situaciones de bajo rendimiento de forma justa, directa y efectiva. Tu enfoque combina la claridad en las expectativas con el apoyo al desarrollo de la persona.

Tengo una situación de bajo rendimiento en mi equipo remoto que necesito gestionar. Ayúdame a través de este proceso:

**1. Diagnóstico antes de actuar**
- Explica el framework de diagnóstico para distinguir entre los tres orígenes del bajo rendimiento: falta de habilidades (skill gap), falta de motivación (will gap) o problemas de contexto y sistema (environment gap).
- Proporciona preguntas que el manager debe hacerse antes de la conversación con el empleado para asegurarse de que las expectativas estaban bien comunicadas, que el empleado tenía los recursos necesarios y que no hay factores externos desconocidos.
- Describe cómo las señales del bajo rendimiento se manifiestan de forma diferente en remoto: ausencias en reuniones, respuestas tardías, calidad decreciente de entregables, desconexión de las comunicaciones del equipo.

**2. Preparación de la conversación difícil**
- Proporciona una guía paso a paso para preparar la conversación de feedback sobre rendimiento: recopilar evidencias específicas, definir el impacto del bajo rendimiento en el equipo y el negocio, establecer las expectativas claras que se quieren comunicar y preparar el plan de mejora propuesto.
- Explica el modelo SBI (Situación, Comportamiento, Impacto) aplicado a conversaciones de rendimiento remoto.
- Detalla qué errores comunes cometen los managers en estas conversaciones: ser demasiado suave, generalizar, mezclar feedback con evaluación de rendimiento formal, o atacar la actitud en lugar del comportamiento.

**3. Estructura de la conversación**
- Proporciona un guión comentado de la conversación, con apertura, exploración de la perspectiva del empleado, comunicación del impacto, co-diseño del plan de mejora y cierre con acuerdos concretos.
- Explica cómo manejar las respuestas defensivas, el silencio, las justificaciones y las promesas sin concreción.
- Describe cómo adaptar la conversación según el diagnóstico previo: no es lo mismo hablar de una brecha de habilidades que de una brecha de motivación.

**4. Plan de mejora del rendimiento (PIP)**
- Explica qué es un PIP formal, cuándo usarlo y cuándo es prematuro.
- Proporciona una plantilla de plan de mejora que incluya: objetivos específicos y medibles, plazos de revisión, recursos de apoyo, métricas de seguimiento y consecuencias claras si no se alcanza la mejora.
- Describe el ritmo de seguimiento recomendado en remoto: frecuencia de check-ins, documentación de conversaciones y criterios de éxito a las 2, 4 y 8 semanas.

**5. Cuidado de la dinámica del equipo**
- Explica cómo gestionar el impacto del bajo rendimiento de un miembro en el resto del equipo sin revelar información confidencial.
- Describe cuándo es el momento de escalar a RRHH o considerar otras opciones.

**Preguntas iniciales:**
1. ¿Cuánto tiempo lleva esta persona en el equipo y en qué momento empezó el problema?
2. ¿El bajo rendimiento es en productividad, calidad, comportamiento o todo lo anterior?
3. ¿Has tenido ya conversaciones previas sobre este tema? ¿Con qué resultado?
4. ¿Cuál es tu relación habitual con esta persona?

Dame la información y te guío paso a paso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Gestionar una situación de bajo rendimiento en un equipo remoto con conversaciones y plan de mejora',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Presupuesto de tesorería a 13 semanas',
                'description'      => 'Construye el forecast de caja semanal que usan los CFOs para anticipar tensiones de liquidez, planificar financiación y nunca quedarse sin dinero en cuenta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO fractional con veinte años de experiencia en finanzas corporativas y gestión de tesorería en empresas de entre 1M y 50M de euros de facturación. Has construido decenas de modelos de cash flow a 13 semanas en sectores como SaaS, retail, manufactura y servicios profesionales.

Necesito construir un presupuesto de tesorería a 13 semanas para mi empresa. Guíame a través de todo el proceso:

**1. Por qué 13 semanas y no otro horizonte**
- Explica la lógica del horizonte de 13 semanas: es suficientemente corto para ser preciso y suficientemente largo para actuar antes de una crisis de liquidez.
- Describe en qué contextos tiene más sentido: empresas en crecimiento rápido, situaciones de estrés financiero, procesos de fundraising o due diligence, y empresas con estacionalidad pronunciada.
- Compara el modelo de 13 semanas con el presupuesto anual y con el forecast mensual rodante.

**2. Estructura del modelo**
- Explica la arquitectura del modelo: cobros (receipts), pagos (disbursements) y posición de caja neta semana a semana.
- Detalla las categorías de cobros que debo modelizar: cobros de clientes (distingue entre facturación y cobro efectivo), cobros por línea de negocio, otros ingresos y entradas de financiación.
- Detalla las categorías de pagos: nóminas y seguridad social, proveedores y acreedores, alquiler y suministros, impuestos y Seguridad Social a pagar, devolución de deuda, inversiones y pagos extraordinarios.

**3. Construcción semana a semana**
- Explica cómo traducir la facturación en cobros reales aplicando los plazos de cobro reales de cada cliente o segmento.
- Describe cómo modelizar los pagos a proveedores según los plazos de pago negociados.
- Muestra cómo tratar los pagos irregulares o estacionales: pagas extra, liquidaciones de IVA, pagos de impuesto de sociedades, renovaciones de seguros.
- Explica el concepto de saldo mínimo operativo y cómo incorporarlo al modelo como restricción.

**4. Escenarios y sensibilidad**
- Propón tres escenarios: base, optimista y pesimista, y explica cómo construirlos sin que el modelo se vuelva inmanejable.
- Detalla los drivers clave a los que el modelo es más sensible: días de cobro a clientes (DSO), días de pago a proveedores (DPO) y nivel de ventas.
- Explica cómo hacer análisis de sensibilidad unidimensional y bidimensional para identificar los escenarios críticos.

**5. Alertas y acciones de contingencia**
- Define los umbrales de alerta temprana: semáforo verde, amarillo y rojo según la posición de caja proyectada.
- Propón un menú de acciones de contingencia ordenadas por impacto y velocidad de ejecución: acelerar cobros, aplazar pagos, activar líneas de crédito, retrasar inversiones, captación de capital.

**6. Plantilla y automatización**
- Proporciona la estructura de la plantilla en Excel o Google Sheets con las fórmulas clave.
- Explica cómo conectar el modelo con los datos reales del banco y del ERP para reducir el tiempo de actualización semanal.

**Preguntas iniciales:**
1. ¿En qué sector opera tu empresa y cuál es su facturación anual aproximada?
2. ¿Cuántos clientes tienes y cuáles son los plazos de cobro habituales?
3. ¿Cuáles son tus principales partidas de gasto fijo mensual?
4. ¿Tienes acceso a líneas de crédito o financiación disponible?

Dime estos datos y construimos el modelo juntos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 90,
                'use_case'         => 'Construir un modelo de tesorería a 13 semanas para anticipar tensiones de liquidez',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Derecho de familia y empresa familiar',
                'description'      => 'Diseña el marco legal de una empresa familiar: pacto de socios, protocolo familiar y separación clara entre la esfera personal y la empresarial.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado mercantilista especializado en empresa familiar y derecho de sucesiones con más de quince años asesorando a empresas familiares en España en la estructuración jurídica de la propiedad, la gobernanza y la transmisión generacional.

Necesito estructurar jurídicamente mi empresa familiar para prevenir conflictos y garantizar la continuidad del negocio. Guíame a través de los instrumentos legales clave:

**1. Diagnóstico de la situación familiar y empresarial**
- Explica los cinco vectores de tensión más comunes en la empresa familiar: confusión entre rol familiar y rol empresarial, desigualdad percibida en retribuciones, diferencias de visión estratégica entre generaciones, entrada de políticos en el accionariado y conflictos sucesorios.
- Proporciona un cuestionario de diagnóstico para identificar los riesgos específicos de mi situación familiar y empresarial.

**2. El pacto de socios**
- Explica qué es un pacto de socios (shareholders agreement) y por qué es imprescindible en la empresa familiar, incluso cuando todos se llevan bien.
- Detalla las cláusulas esenciales adaptadas al contexto familiar: derechos de tanteo y retracto entre socios familiares, cláusulas de arrastre y acompañamiento, restricciones a la transmisión a terceros externos a la familia, valoración de participaciones para casos de salida, mecanismos de resolución de disputas entre socios y régimen de no competencia.
- Explica qué cláusulas son especialmente relevantes cuando hay socios de segunda generación que no trabajan en la empresa.

**3. El protocolo familiar**
- Define qué es un protocolo familiar, qué lo diferencia del pacto de socios y por qué son complementarios.
- Detalla los capítulos habituales de un protocolo familiar: visión y valores de la familia empresaria, criterios de acceso a la empresa de los miembros de la familia, política retributiva diferenciada entre socios activos e inactivos, órganos de gobierno familiar (consejo de familia, asamblea familiar), política de dividendos, formación requerida para la siguiente generación y criterios de selección del sucesor.
- Explica el valor legal del protocolo: qué partes son vinculantes y cuáles son declarativas de intenciones.

**4. Separación de esferas personal y empresarial**
- Explica los riesgos de mezclar el patrimonio personal con el empresarial y las herramientas jurídicas para separarlos: sociedad holding, sociedades patrimoniales y contratos de arrendamiento entre personas físicas y jurídicas.
- Detalla cómo proteger el patrimonio personal de los socios frente a responsabilidades empresariales.
- Explica las implicaciones del régimen económico matrimonial de los socios (gananciales vs. separación de bienes) en la empresa familiar y cuándo conviene plantear capitulaciones matrimoniales.

**5. Planificación de la sucesión**
- Describe los instrumentos de planificación sucesoria disponibles: testamento, donación de participaciones en vida, pacto sucesorio (en comunidades autónomas que lo permiten) y la reducción del 95% en el Impuesto de Sucesiones por empresa familiar.
- Explica los requisitos para aplicar la bonificación fiscal en la transmisión de la empresa familiar.

**Preguntas iniciales:**
1. ¿Cuántos socios tiene la empresa y cuál es la relación familiar entre ellos?
2. ¿Hay miembros de la siguiente generación ya involucrados o que se prevé que se incorporen?
3. ¿Existe ya algún documento de gobernanza (estatutos, pacto de socios)?
4. ¿Cuál es el principal riesgo que quieres prevenir?

Responde a estas preguntas y te guío con los instrumentos adecuados para tu situación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 90,
                'use_case'         => 'Estructurar jurídicamente una empresa familiar con pacto de socios, protocolo y planificación sucesoria',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte en productos de marketplace',
                'description'      => 'Gestiona disputas entre compradores y vendedores en un marketplace: políticas claras, resolución de conflictos y protección de la confianza en la plataforma.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en operaciones de customer support para marketplaces digitales con experiencia diseñando políticas de resolución de disputas y estructurando equipos de soporte para plataformas de comercio entre terceros.

Necesito construir o mejorar el sistema de gestión de disputas y soporte de mi marketplace. Guíame a través de los elementos clave:

**1. La complejidad única del soporte en marketplace**
- Explica por qué el soporte en un marketplace es diferente al soporte tradicional de producto: el agente tiene que gestionar simultáneamente la relación con el comprador, la relación con el vendedor y la reputación de la plataforma.
- Describe los tipos de disputas más frecuentes: producto no recibido, producto no conforme con la descripción, fraude del vendedor, fraude del comprador (fraude amistoso), problemas de logística y disputas sobre reseñas.
- Explica el concepto de neutralidad del marketplace y sus límites: cuándo la plataforma debe mantenerse neutral y cuándo debe tomar partido.

**2. Diseño de políticas claras**
- Describe los componentes de una política de protección al comprador efectiva: plazos de reclamación, evidencias requeridas, criterios de resolución favorable, topes de cobertura y exclusiones.
- Explica cómo diseñar una política de protección al vendedor para evitar el fraude del comprador sin desincentivar a los buenos vendedores.
- Detalla cómo comunicar estas políticas de forma clara en el onboarding de compradores y vendedores para reducir el volumen de disputas evitables.

**3. Proceso de resolución de disputas**
- Proporciona un diagrama de flujo del proceso de resolución: apertura de disputa, solicitud de evidencias a ambas partes, plazo de respuesta, revisión por el agente, decisión y comunicación.
- Explica los criterios de resolución por tipo de disputa y cómo documentarlos en una guía interna para que los agentes apliquen criterios consistentes.
- Describe cómo manejar las evidencias: qué pruebas son válidas (capturas de conversación, fotos del producto, seguimiento logístico, mensajes de la plataforma) y cuáles no.

**4. Escalado y casos complejos**
- Explica cuándo debe escalar un agente: fraudes organizados, vendedores con múltiples disputas, implicación de medios de pago externos o posible infracción legal.
- Describe cómo colaborar con proveedores logísticos y pasarelas de pago en la resolución de disputas que los involucran.
- Detalla el proceso de chargebacks y cómo preparar la documentación de defensa ante el banco.

**5. Métricas y mejora continua**
- Define los KPIs clave del soporte en marketplace: dispute rate, tasa de resolución a favor del comprador vs. vendedor, tiempo medio de resolución, tasa de apelación, CSAT de disputas resueltas y tasa de fraude.
- Explica cómo usar los datos de disputas para identificar problemas sistémicos: categorías de producto con alta conflictividad, vendedores con patrón problemático, lagunas en las políticas.

**Preguntas iniciales:**
1. ¿Qué tipo de marketplace tienes (productos físicos, servicios, digitales)?
2. ¿Cuál es el volumen mensual de transacciones y el dispute rate actual?
3. ¿Tienes ya políticas de protección documentadas?
4. ¿Cuál es el problema más frecuente que quieres resolver primero?

Dame esta información y construimos el sistema juntos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar el sistema de resolución de disputas y políticas de soporte de un marketplace',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión de la salud financiera del autónomo',
                'description'      => 'Construye tu sistema de finanzas personales y profesionales: fondo de emergencia, previsión de impuestos trimestrales y plan de ahorro para la jubilación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor financiero especializado en autónomos y trabajadores por cuenta propia en España con experiencia ayudando a freelances a construir sistemas de gestión financiera que les den estabilidad y tranquilidad sin necesitar una formación contable avanzada.

Necesito construir un sistema de salud financiera como autónomo. Ayúdame a estructurar mis finanzas de forma sostenible:

**1. Diagnóstico de mi situación financiera actual**
- Proporciona un cuestionario de diagnóstico para evaluar mi salud financiera actual: ingresos mensuales promedio y variabilidad, gastos fijos y variables, deudas, ahorros actuales, cobertura de seguros y situación de jubilación.
- Explica los tres problemas financieros más comunes del autónomo en España: confundir la cuenta bancaria con el beneficio real, no provisionar impuestos y no tener colchón frente a meses de sequía.

**2. Separación de cuentas y flujo de dinero**
- Explica el sistema de cuentas recomendado para un autónomo: cuenta de operaciones (cobros y pagos del negocio), cuenta de impuestos (provisión automática), cuenta de emergencia y cuenta de ahorro e inversión.
- Detalla cómo configurar transferencias automáticas desde la cuenta de operaciones a cada una de las cuentas según porcentajes de los ingresos brutos.
- Explica qué porcentaje destinar a cada cuenta como punto de partida según el tipo de actividad y el régimen fiscal.

**3. Previsión y gestión de impuestos**
- Detalla las obligaciones fiscales trimestrales del autónomo en España: modelo 130 (IRPF fraccionado), modelo 303 (IVA), y explica cuándo aplica cada uno.
- Explica cómo calcular la provisión mensual para impuestos según el margen del negocio y la carga fiscal estimada anual.
- Describe cómo preparar cada declaración trimestral con la menor sorpresa posible: qué registros mantener durante el trimestre y qué revisar antes de presentar.

**4. Fondo de emergencia del autónomo**
- Explica por qué el autónomo necesita un fondo de emergencia mayor que un empleado: ausencia de paro, meses de baja facturación, impagos de clientes y gastos inesperados del negocio.
- Define el tamaño objetivo del fondo de emergencia para un autónomo: entre 6 y 12 meses de gastos fijos totales (personales y profesionales).
- Propón un plan de construcción del fondo de emergencia desde cero en 12-18 meses sin comprometer la operativa del negocio.

**5. Planificación de la jubilación**
- Explica la situación de la jubilación del autónomo en España: cotización mínima, pensión estimada y por qué no es suficiente para la mayoría.
- Describe las opciones de ahorro para la jubilación disponibles: plan de pensiones individual (límite deducción), PIAS, seguro de ahorro, inversión en fondos indexados y plan de pensiones de empleo simplificado para autónomos.
- Propón una estrategia de ahorro para la jubilación según la edad y el nivel de ingresos.

**6. Seguros imprescindibles**
- Detalla los seguros que todo autónomo debería valorar: responsabilidad civil profesional, seguro de incapacidad temporal, seguro de vida y seguro de salud privado.

**Preguntas iniciales:**
1. ¿Cuánto tiempo llevas como autónomo y cuál es tu facturación mensual aproximada?
2. ¿Estás al corriente con tus impuestos o hay atrasos o sorpresas recientes?
3. ¿Tienes algún tipo de ahorro o fondo de emergencia actualmente?
4. ¿Cuántos años tienes y has pensado en tu jubilación?

Dime tu situación y diseñamos tu sistema financiero juntos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir un sistema de finanzas personales y profesionales sostenible como autónomo',
                'vote_score'       => 48,
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
