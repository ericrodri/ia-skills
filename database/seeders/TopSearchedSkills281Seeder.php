<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills281Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Growth hacking: experimentos rápidos para escalar la adquisición',
                'description'      => 'Diseña y ejecuta experimentos de growth para encontrar los canales de adquisición más eficientes y escalarlos antes que la competencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un growth marketer con experiencia en startups SaaS y ecommerce que han escalado de cero a millones de usuarios. Necesito tu ayuda para diseñar un sistema de experimentos de growth que me permita encontrar palancas de adquisición reales para mi producto y escalarlas de forma sistemática.

**Qué es y qué no es growth hacking**

El término "growth hacking" ha sido tan mal usado que conviene aclarar qué significa en la práctica. No es un truco viral ni una táctica mágica. Es la aplicación de mentalidad científica (hipótesis, experimento, medición, iteración) a los problemas de crecimiento, con énfasis en velocidad y eficiencia de recursos. El growth hacker busca el canal o mecanismo que tiene el mejor ratio de retorno sobre el esfuerzo invertido, lo valida rápido y lo escala antes de que la competencia lo encuentre.

**El funnel de adquisición completo**

El crecimiento empieza antes de la adquisición y termina después. Ayúdame a mapear mi funnel completo:

- Conciencia (awareness): ¿cómo me descubren los clientes potenciales? ¿Qué dicen sobre mí cuando hablan con otros?
- Adquisición: ¿qué canales traen usuarios? ¿Cuál es el coste de adquisición por canal?
- Activación: ¿qué porcentaje de los usuarios adquiridos experimenta el primer valor? ¿Cuánto tardan?
- Retención: ¿cuántos vuelven? ¿Cuándo y con qué frecuencia?
- Referencia: ¿cuántos recomiendan el producto? ¿A quién y cómo?
- Ingresos: ¿cuántos se convierten a pago? ¿Cuál es el LTV promedio?

Antes de optimizar la adquisición, necesito entender dónde está el verdadero cuello de botella. A veces el problema no es traer más usuarios sino convertir mejor los que ya llegan.

**El sistema de experimentos de growth**

Un experimento de growth bien diseñado tiene estos componentes:

1. **Hipótesis con formato estándar**: "Creemos que [acción concreta] para [segmento específico] logrará [resultado medible] porque [razonamiento]."

2. **Métrica de éxito principal**: una única métrica que determina si el experimento funciona. No cinco métricas.

3. **Criterios mínimos de éxito**: antes de lanzar, qué número tiene que alcanzar la métrica para considerarlo un éxito.

4. **Duración y muestra mínima**: cuánto tiempo y cuántos usuarios necesito para que el resultado sea estadísticamente significativo.

5. **Coste máximo de aprendizaje**: cuánto dinero y tiempo estoy dispuesto a gastar para aprender de este experimento, aunque fracase.

Ayúdame a construir este sistema para mi contexto específico y a priorizar los experimentos por impacto potencial vs. coste de ejecución.

**Canales de adquisición a explorar**

No todos los canales funcionan para todos los productos. Para cada canal, dame el framework de evaluación:

- SEO y contenido: qué necesita mi producto para que el SEO sea un canal viable. Tiempo hasta resultados, inversión inicial, diferenciación de contenido.
- Publicidad de pago (SEM, Social Ads): cuándo es el momento adecuado para pagar por adquisición. La trampa de escalar paid antes de tener el funnel optimizado.
- Viral y referidos: los mecanismos de viralidad que realmente funcionan vs. los que parecen buenos en papel. Product-led growth (PLG) como estrategia de adquisición.
- Partnerships y distribución: cómo encontrar socios que ya tienen acceso a mi audiencia objetivo. El acuerdo de distribución básico.
- Comunidades y eventos: cómo construir presencia en comunidades relevantes sin ser percibido como spam.
- Outbound: cuándo el outbound directo (email, LinkedIn) tiene sentido para un producto SaaS o de consumo.

**Métricas de growth que importan**

- CAC (Coste de Adquisición de Cliente) por canal: cómo calcularlo correctamente incluyendo costes de equipo y tiempo
- LTV (Lifetime Value): cómo estimarlo con datos limitados en etapas tempranas
- Payback period: en cuántos meses recupero el CAC. El estándar de mercado por tipo de producto.
- North Star Metric: la única métrica que captura el valor que el producto entrega a los usuarios. Cómo encontrar la mía.

**El backlog de growth**

Ayúdame a construir y gestionar un backlog de experimentos de growth priorizados, con el formato adecuado para presentarlo al equipo directivo y conseguir recursos para ejecutarlos.

Dame las primeras cinco hipótesis de growth específicas para mi producto y el plan de experimentos de los próximos 30 días.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar y ejecutar experimentos de growth hacking para encontrar los canales de adquisición más eficientes.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Acquisition engineering: los sistemas técnicos que escalan el crecimiento',
                'description'      => 'Aprende a construir la infraestructura técnica que hace posible el crecimiento de usuarios a escala: tracking, pipelines de datos, experimentación y sistemas de referidos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de growth con experiencia en startups de alto crecimiento donde el equipo técnico tiene un rol central en la adquisición de usuarios. Necesito tu ayuda para construir los sistemas técnicos que hacen posible escalar la adquisición: desde el tracking hasta la experimentación y los mecanismos virales integrados en el producto.

**Por qué los ingenieros son clave en la adquisición**

El growth no es solo responsabilidad de marketing. Los sistemas técnicos que soportan el crecimiento, la velocidad de iteración de experimentos y la calidad del producto son determinantes para si un canal de adquisición escala o no. El ingenieroek growth construye la maquinaria que hace que el crecimiento sea medible, repetible y escalable.

**El stack técnico de adquisición**

Ayúdame a entender qué sistemas necesito en cada fase:

1. **Tracking y analítica**: la base de todo. Qué eventos debo instrumentar desde el día uno. El diseño del plan de tracking antes de escribir el primer evento. Herramientas: Mixpanel, Amplitude, Segment, PostHog (self-hosted), Google Analytics 4. Cuándo usar cada una y cómo evitar los errores de implementación que invalidan los datos.

2. **Attribution**: cómo saber qué canal generó cada conversión. UTMs, pixel de conversión, server-side tracking (la evolución necesaria con las restricciones de privacidad). Las limitaciones reales de cada modelo de atribución y cómo trabajar con datos imperfectos.

3. **Data pipeline**: cómo centralizar los datos de todos los canales en un data warehouse. Stack moderno: Fivetran/Airbyte + Snowflake/BigQuery + dbt + Metabase/Looker. El momento adecuado para cada pieza.

4. **Feature flags y experimentación**: la infraestructura técnica para hacer A/B testing en el producto. Herramientas: LaunchDarkly, Unleash (open source), GrowthBook. Cómo implementar el sistema de forma que no cree deuda técnica y que los experimentos puedan terminarse limpiamente.

**Mecanismos virales en el producto**

Los mejores canales de adquisición son los que están integrados en el producto. Cómo implementar cada uno:

- Referidos estructurados: el sistema técnico de un programa de referidos. Generación de links únicos, tracking de conversiones, rewards automáticos. Los edge cases que hay que manejar: referidos circulares, abuso del sistema, atribución cuando un usuario usa múltiples links.

- Viral loop de colaboración: cuando el usuario invita a otros usuarios para usar el producto juntos. Slack, Figma, Notion son el ejemplo clásico. Cómo diseñar el flujo de invitación para maximizar la tasa de aceptación.

- Viral de exposición (producto visible en el output): cuando el resultado del producto es visible para terceros y lleva al producto de vuelta. "Creado con Canva", el footer de Mailchimp. Cómo implementarlo y cuándo no hacerlo.

- SEO programático: generar páginas de forma programática desde datos estructurados para capturar tráfico de long tail. Arquitectura técnica, generación de contenido, gestión del crawl budget, canonicals y prevención de contenido duplicado.

**Optimización de la landing y el funnel de activación**

- Velocidad de carga: el impacto medido de cada 100ms en las tasas de conversión. Web Vitals, lazy loading, optimización de imágenes, CDN.
- Pruebas A/B en la web: cómo implementar experimentos en la landing sin afectar el SEO. Server-side vs. client-side testing y sus implicaciones técnicas.
- Optimización del onboarding: instrumentación del funnel de activación para encontrar los pasos con mayor abandono. Técnicas de reducción de fricción: progressive profiling, magic links, OAuth, configuración asistida.

**Sistemas de notificación y reactivación**

- Email transaccional y de ciclo de vida: cómo instrumentar los eventos que disparan cada email y cómo medir su impacto real en la activación y retención.
- Push notifications: cuándo implementarlas y cuándo evitarlas. Las métricas que indican si están generando valor o degradando la experiencia.
- In-app messaging: guías de onboarding, tooltips, anuncios. El sistema técnico para mostrar el mensaje correcto en el momento correcto.

Dame un plan técnico para los primeros 90 días de construcción de infraestructura de growth, con las prioridades correctas según la fase del producto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir la infraestructura técnica de tracking, experimentación y mecanismos virales que escalan la adquisición.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de la landing page que convierte: de la visita al registro',
                'description'      => 'Aprende a diseñar landing pages de alto rendimiento que convierten visitantes en usuarios registrados con principios de diseño centrado en la conversión.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en diseño de conversión con experiencia en landing pages para productos SaaS, aplicaciones móviles y servicios digitales. Necesito tu ayuda para diseñar una landing page que convierta visitantes de distintos canales en usuarios registrados, aplicando principios de diseño centrado en la conversión respaldados por datos.

**Por qué la mayoría de landing pages fallan**

La mayoría de las landing pages falla porque están diseñadas para impresionar en vez de para convertir. Un diseño visualmente impresionante que no comunica el valor en los primeros tres segundos es un diseño fallido desde el punto de vista de la conversión. El visitante llega con una pregunta implícita: "¿Esto resuelve mi problema?" La landing tiene que responder esa pregunta antes de que el usuario pierda interés.

**Estructura de la landing page de alta conversión**

Dame un análisis detallado de cada sección:

1. **Above the fold (lo que se ve sin hacer scroll)**: el elemento más crítico. Contiene el headline principal, el subheadline y el CTA primario. El headline tiene que comunicar el beneficio principal en una sola frase. Errores más comunes: headlines que describen el producto en vez de la transformación que produce, CTAs vagos ("Saber más" vs. "Empezar gratis").

2. **Propuesta de valor**: cómo articular qué hace el producto, para quién y por qué es mejor que la alternativa. El framework del Job-to-be-Done aplicado al copy de la landing: qué tarea está intentando completar el visitante y cómo el producto la resuelve mejor.

3. **Prueba social**: qué tipos de prueba social son más efectivos según el tipo de producto y la audiencia. Logos de clientes, testimonios (con foto y cargo real), reviews de terceros, números de usuarios o casos de éxito con resultados concretos.

4. **Beneficios vs. características**: el error universal de listar features en vez de beneficios. Cómo transformar cada característica del producto en el beneficio que el usuario experimenta.

5. **Objeciones y FAQs**: las objeciones más comunes que impiden el registro y cómo abordarlas proactivamente en el diseño. La sección de FAQs como herramienta de conversión, no como relleno.

6. **CTA secundario y urgencia**: cuándo y cómo usar urgencia real (no falsa) para acelerar la decisión. El CTA para los visitantes que no están listos para registrarse todavía.

**Diseño visual al servicio de la conversión**

- Jerarquía visual: cómo dirigir el ojo del usuario hacia los elementos de conversión. El rol del espacio en blanco, el contraste y el tamaño relativo.
- Color del CTA: cómo elegir el color del botón de llamada a la acción para que destaque sin romper la estética de la marca.
- Imágenes y vídeos: qué tipo de visual genera más confianza y reduce la fricción. El hero image: producto en uso, persona usando el producto, o ilustración abstracta. Los datos de cada opción.
- Tipografía para conversión: legibilidad sobre originalidad. Tamaño mínimo, interlineado, longitud de línea óptima para lectura en pantalla.
- Mobile-first: el diseño de landing para móvil tiene sus propias reglas. CTA en el pulgar, jerarquía de texto adaptada, velocidad de carga crítica.

**Copy que convierte**

El diseño sin copy es decoración. Dame los principios de copywriting para landing pages:

- El método PAS (Problema, Agitación, Solución) para estructurar el copy principal
- Cómo escribir el headline: fórmulas que funcionan y ejemplos reales
- Verbos de acción en el CTA: qué palabras generan más clics y cuáles matan la conversión
- La longitud óptima de la landing: cuándo la página corta gana y cuándo la larga es mejor

**Iteración y optimización**

Cómo establecer el proceso de mejora continua de la landing:

- Qué métricas mirar: tasa de conversión por canal, tiempo en página, scroll depth, heatmaps
- Cómo priorizar qué testear primero: cambios de alto impacto vs. micro-optimizaciones
- A/B testing básico: tamaño de muestra necesario, duración, errores a evitar
- Los cambios que típicamente generan las mejoras de conversión más grandes en los primeros meses

Diseña para mí la estructura completa de mi landing page con el copy de cada sección y las decisiones de diseño justificadas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar landing pages de alta conversión que transforman visitantes en usuarios registrados.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Outbound moderno: prospección que no molesta y que genera respuesta',
                'description'      => 'Aprende a diseñar secuencias de outbound que consiguen respuesta sin spam: segmentación precisa, personalización real y timing correcto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas B2B especializado en outbound moderno con experiencia en mercados competitivos donde los compradores están saturados de mensajes. Necesito tu ayuda para diseñar un sistema de prospección outbound que genere respuesta real sin ser percibido como spam, usando personalización auténtica y segmentación precisa.

**El problema del outbound moderno**

El outbound clásico está muerto por saturación. Un ejecutivo de nivel medio recibe entre 50 y 150 emails de prospección a la semana. La tasa de respuesta promedio del cold email ha caído a menos del 1%. La mayoría de SDRs sigue usando las mismas plantillas que todos los demás, con el mismo tono y la misma estructura, lo que resulta en ignorancia masiva. El outbound que funciona hoy es el que se parece poco al outbound.

**La base del outbound moderno: segmentación antes que volumen**

El error más común es la segmentación demasiado amplia. Escribir a "directores de marketing en empresas de 50-500 empleados" es escribir a una audiencia demasiado diversa para personalizar de verdad. El outbound moderno empieza por definir el Ideal Customer Profile (ICP) con criterios que permiten personalización real:

- Eventos desencadenantes (triggers): qué evento en la vida de la empresa o del contacto hace que mi solución sea relevante ahora. Contratación reciente de un rol específico, ronda de financiación, lanzamiento de un nuevo producto, expansión a un nuevo mercado, cambio de tecnología detectable en LinkedIn o bases de datos como Crunchbase y Builtwith.
- Señales de intención: cuándo el prospecto está activamente buscando una solución como la mía. Visitas a la web (con herramientas de deanonimización como Clearbit o 6sense), búsquedas orgánicas, engagement con contenido del sector.
- Fit técnico o de negocio verificable: usar datos de terceros para confirmar antes de contactar que el prospecto cumple los criterios mínimos.

**La anatomía del mensaje outbound que genera respuesta**

Un mensaje efectivo tiene estas características:

1. Línea de asunto: específica, no genérica. La referencia a algo concreto del prospecto, no una promesa de beneficio vaga.

2. Primera línea de personalización real: algo que demuestre que he investigado a esta persona o empresa específica, no un campo de combinación genérico. Referencia a un post suyo, a una noticia de la empresa, a una contratación reciente, a un resultado público.

3. Conexión al problema: el puente entre lo que observé y por qué me hace pensar que puedo ayudar. Una sola frase, no un párrafo.

4. Propuesta de valor en una línea: qué hacemos y para quién, con resultado concreto si es posible.

5. CTA de baja fricción: no pedir una reunión de 30 minutos como primer paso. Pedir permiso para enviar más información, hacer una pregunta concreta, o proponer una llamada de 10 minutos con un tema específico.

**La secuencia multicanal**

El outbound moderno usa múltiples puntos de contacto en el orden correcto:

- Toque en LinkedIn antes del email: interactuar con contenido del prospecto o enviar conexión con nota breve antes del primer email
- Secuencia de emails: número óptimo de emails, espaciado entre ellos, cómo variar el ángulo y el tono en cada uno
- Llamada en el momento adecuado: cuándo en la secuencia tiene sentido el teléfono y cuándo no
- El email de ruptura: el último mensaje de la secuencia, honesto sobre que es el último intento y que deja la puerta abierta

**Automatización sin perder personalización**

Cómo usar las herramientas de sales engagement (Outreach, Apollo, Salesloft, Lemlist) para escalar el outbound sin que los mensajes suenen automáticos. La diferencia entre campos de personalización superficiales y personalización real que requiere investigación.

**Métricas del outbound moderno**

- Tasa de apertura: indicador de calidad de la línea de asunto, no del mensaje. Por qué el open rate solo es el primer filtro.
- Tasa de respuesta: la métrica real. El umbral mínimo aceptable por tipo de mensaje y canal.
- Tasa de conversión a reunión y a oportunidad: cómo calcular el funnel completo del outbound y dónde está el cuello de botella.

Dame una secuencia de outbound completa para mi ICP específico, con mensajes reales para cada toque y el razonamiento detrás de cada decisión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar secuencias de prospección outbound personalizadas que generan respuesta real sin saturar al prospecto.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Activation funnel: del registro al primer valor en el menor tiempo posible',
                'description'      => 'Diseña y optimiza el funnel de activación para que los nuevos usuarios experimenten el valor del producto lo antes posible y conviertan a usuarios activos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager especializado en growth con experiencia en la optimización de funnels de activación para productos SaaS y aplicaciones de consumo. Necesito tu ayuda para mapear, analizar y optimizar el proceso por el que un nuevo usuario pasa del registro a experimentar el primer valor real del producto.

**Por qué la activación es la métrica más importante del crecimiento**

La activación es el momento en que el usuario experimenta por primera vez el valor por el que se registró. Es el punto donde el crecimiento se convierte en retención. Puedes traer miles de usuarios con publicidad o marketing de contenidos, pero si no se activan, tu CAC es infinito porque ninguno de ellos te genera valor.

Existe un concepto que popularizó el producto Slack: el "aha moment", el instante en que el usuario entiende visceralmente por qué el producto existe y por qué lo necesita. Para Slack era "cuando el equipo envía 2.000 mensajes". Cada producto tiene el suyo. Encontrarlo y diseñar el camino más corto hasta él es el trabajo central de la activación.

**Mapear el funnel de activación actual**

El primer paso es entender qué está pasando ahora. Ayúdame a:

1. **Definir el aha moment de mi producto**: qué acción o experiencia correlaciona con retención a largo plazo. Cómo analizar los datos de comportamiento de usuarios que sí se retuvieron vs. los que se fueron para encontrar el patrón diferenciador.

2. **Mapear cada paso del funnel de activación**: desde el registro hasta el aha moment, ¿cuántos pasos hay? ¿Cuál es la tasa de conversión de cada paso? ¿Dónde está el abandono mayor?

3. **Segmentar el análisis**: los diferentes segmentos de usuarios (por canal de adquisición, por tipo de empresa, por rol del usuario) tienen tasas de activación diferentes. ¿Por qué?

**Principios de diseño para la activación**

- **Reducción de fricción**: cada campo extra en el registro, cada decisión innecesaria, cada pantalla de configuración que no aporta valor inmediato es fricción que reduce la activación. Identifica qué fricción es necesaria (garantiza la calidad del usuario, reduce el coste de soporte) y cuál es innecesaria.

- **Progressive disclosure**: no mostrar toda la complejidad del producto desde el primer momento. Diseñar la experiencia para que el usuario descubra el valor poco a poco, en el orden correcto.

- **Empty states con intención**: las pantallas vacías que ve un usuario recién registrado son una oportunidad de activación, no un problema de diseño. ¿Qué dice la pantalla vacía de mi producto? ¿Guía al usuario hacia la primera acción o lo deja perdido?

- **Onboarding interactivo vs. tutorial estático**: los tooltips y modales instructivos tienen tasas de lectura bajas. El onboarding que funciona es el que integra la instrucción en la acción, no antes de ella. Product tours guiados vs. checklists de configuración vs. onboarding por email: cuándo usar cada uno.

- **La primera sesión como momento de máxima motivación**: el usuario está más motivado en su primera sesión que en cualquier otra. Si en esa sesión no llega al aha moment, la probabilidad de que vuelva cae drásticamente. ¿Cuánto tarda el usuario promedio en llegar al primer valor en mi producto?

**Experimentos de activación de alto impacto**

Los cambios que típicamente generan el mayor impacto en la activación:

- Reducir el tiempo hasta el primer valor: ¿qué configuración inicial puedo hacer yo en vez del usuario? ¿Qué datos puedo pre-rellenar? ¿Qué template puedo ofrecer que ahorre el trabajo de empezar desde cero?
- Email de onboarding: la secuencia de emails de los primeros siete días es uno de los canales de activación más efectivos. Qué enviar, cuándo y con qué objetivo.
- Activación asistida para clientes enterprise: cuándo el producto solo no es suficiente y necesitamos un CSM o una llamada de onboarding.

**Medir la activación correctamente**

- Tasa de activación: qué porcentaje de registros llega al aha moment, en cuánto tiempo
- Time to value: el tiempo promedio entre registro y primera experiencia de valor
- D1, D7, D30 retention: cómo correlaciona la activación con la retención a diferentes plazos

Dame el diagnóstico del funnel de activación de mi producto y las tres iniciativas de mayor impacto para mejorar la tasa de activación en los próximos 60 días.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Mapear y optimizar el funnel de activación para que los nuevos usuarios lleguen al primer valor del producto lo antes posible.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Talent acquisition: estrategias de atracción en un mercado competitivo',
                'description'      => 'Desarrolla una estrategia de atracción de talento que posicione a tu empresa como empleador preferido y llene el pipeline de candidatos cualificados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Talent Acquisition con experiencia en empresas tecnológicas y de crecimiento rápido donde la captación de talento es una ventaja competitiva. Necesito tu ayuda para desarrollar una estrategia de atracción de talento que me permita competir por los mejores candidatos sin los presupuestos de las grandes corporaciones.

**El nuevo mercado de talento**

El mercado de talento ha cambiado fundamentalmente. Los candidatos de alta demanda (ingenieros senior, product managers, data scientists, perfiles directivos) reciben entre cinco y veinte contactos de reclutadores semanalmente. La oferta de trabajo estándar con salario competitivo y "buen ambiente" ya no diferencia. Los candidatos evalúan a los empleadores con la misma rigorosidad con que evalúan a los proveedores, investigando online, en Glassdoor, LinkedIn y en su red de contactos antes de responder al primer mensaje.

**Employer branding como base de la captación**

La captación reactiva (publicar una oferta y esperar) solo funciona cuando la marca empleadora es fuerte. Antes de hablar de canales de captación, ayúdame a construir los fundamentos:

1. **Propuesta de valor al empleado (EVP)**: qué ofrezco como empleador que es genuinamente diferente y verdadero. No el "trabajo flexible" que todos dicen tener. Los elementos reales: el tipo de problemas que se resuelven, cómo se toman las decisiones, el crecimiento real de las personas que han pasado por la empresa, la cultura de feedback, la autonomía.

2. **Presencia digital como empleador**: cómo se ve mi empresa en LinkedIn, Glassdoor, Indeed y Twitter para alguien que la investiga. Qué puedo mejorar esta semana vs. lo que requiere trabajo de meses.

3. **El candidato interno como canal de atracción**: los mejores candidatos vienen de referidos de empleados actuales. Cómo diseñar un programa de referidos que funcione realmente (no solo el incentivo económico, sino la facilidad de participar y el reconocimiento del esfuerzo).

**Canales de captación por perfil**

Diferentes perfiles requieren diferentes canales:

- Perfiles técnicos (ingenieros, data): GitHub, Stack Overflow, comunidades técnicas específicas (Slack, Discord), conferencias y meetups, contribuciones open source como señal de actividad
- Perfiles de producto y diseño: Dribbble, Behance, comunidades de producto, eventos sectoriales
- Perfiles comerciales y de operaciones: LinkedIn con búsqueda booleana, recomendaciones de clientes y proveedores, asociaciones del sector
- Perfiles directivos: búsqueda ejecutiva, network del CEO y del consejo, headhunting directo

Para cada canal: cómo construir presencia, cómo hacer outreach que consiga respuesta, cómo medir el rendimiento.

**El proceso de selección como experiencia del candidato**

El proceso de selección es un escaparate de la cultura de la empresa. Los candidatos juzgan al empleador por cómo les tratan durante el proceso:

- Tiempo de respuesta: el candidato que no recibe respuesta en 48 horas ya está hablando con otro empleador
- La entrevista como conversación bidireccional: cómo diseñar entrevistas que evalúen bien y que al mismo tiempo vendan la empresa al candidato
- Feedback a los candidatos rechazados: por qué importa y cómo hacerlo de forma sostenible
- La oferta como momento de venta: cómo presentar la oferta para maximizar la aceptación

**Métricas de talent acquisition**

- Time to fill: días desde que se abre una posición hasta que hay un candidato aceptado. El estándar de mercado por tipo de rol.
- Quality of hire: cómo medir si las personas contratadas están funcionando bien (90 días, primer año de desempeño)
- Source of hire: qué canal genera los mejores candidatos (no solo volumen sino calidad y conversión)
- Candidate experience score: cómo medir la experiencia del candidato y usarla para mejorar el proceso

Dame una estrategia de talent acquisition para los próximos seis meses, adaptada a mis recursos actuales y a los perfiles prioritarios.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollar una estrategia de atracción de talento que llene el pipeline de candidatos cualificados en mercados competitivos.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Financial model de adquisición: CAC, LTV y el umbral de rentabilidad',
                'description'      => 'Construye el modelo financiero que determina si los canales de adquisición son rentables: CAC, LTV, payback period y el punto de equilibrio por canal.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con experiencia en empresas de suscripción y SaaS que han escalado desde las primeras ventas hasta el crecimiento a escala. Necesito tu ayuda para construir el modelo financiero que me permita entender si mis canales de adquisición son rentables y qué umbrales necesito alcanzar para que el negocio sea sostenible.

**Por qué el modelo de adquisición es el corazón del negocio SaaS**

Para un negocio de suscripción o de clientes recurrentes, la decisión más importante que toma la empresa cada día es cuánto dinero invertir en adquisición y en qué canales. Esta decisión sin modelo financiero sólido es apostar. Con el modelo correcto, se convierte en ingeniería de crecimiento.

**Los conceptos fundamentales que debo dominar**

1. **CAC (Coste de Adquisición de Cliente)**: el coste total de conseguir un nuevo cliente pagador. Errores comunes en el cálculo: olvidar los costes de equipo de ventas y marketing (no solo el gasto en ads), no separar el CAC por canal, mezclar clientes de distintos segmentos.

La fórmula correcta: (gasto total en ventas y marketing en el periodo) / (clientes nuevos adquiridos en ese periodo). Las variaciones: CAC blended vs. CAC por canal, CAC para nuevos logos vs. CAC incluyendo expansión.

2. **LTV (Lifetime Value)**: el valor total que genera un cliente a lo largo de su relación con la empresa. En suscripción: (ARPU mensual × margen bruto) / tasa de churn mensual. Las complejidades: LTV con expansión de ingresos, LTV con diferentes cohortes de comportamiento de churn.

3. **Payback period**: en cuántos meses recupero el CAC. El estándar de mercado: menos de 12 meses para SaaS B2C, menos de 18 meses para SMB, menos de 24 meses para enterprise. Por qué el payback period importa independientemente del LTV.

4. **Ratio LTV/CAC**: la métrica de salud del modelo de adquisición. Por encima de 3 es el umbral de referencia. Por qué este ratio solo tiene sentido con el payback period bajo control.

**Construcción del modelo por canal**

Cada canal de adquisición tiene su propio perfil financiero. Ayúdame a construir el modelo para cada uno:

- Paid digital (Google Ads, Meta, LinkedIn): gasto en ads + salarios del equipo que lo gestiona + herramientas. Cómo separar el coste por campaña y por segmento de audiencia.
- Outbound sales: coste del SDR y AE (salario + comisiones + herramientas) dividido entre los clientes cerrados. El CAC del canal outbound suele ser mayor pero el LTV del cliente también.
- SEO y contenido: el coste de producción de contenidos, el equipo, las herramientas, atribuido a los clientes que llegan por búsqueda orgánica. La dificultad de la atribución y cómo aproximarla.
- Referidos y viral: si el canal tiene coste (programa de referidos con incentivos) o no (viral orgánico). El CAC más bajo de todos si funciona.
- Partnerships: el coste del acuerdo de distribución y el equipo de partnerships, dividido entre los clientes generados.

**El umbral de rentabilidad del canal de adquisición**

Antes de escalar un canal, necesito saber el umbral mínimo que hace rentable la inversión. Ayúdame a calcular:

- El CLV mínimo que justifica el CAC actual
- El techo de gasto en cada canal antes de que la eficiencia marginal caiga
- La señal de que un canal se está saturando (CPL / CPA subiendo, calidad de leads bajando)

**Proyecciones de crecimiento con el modelo de adquisición**

Cómo usar el modelo para proyectar el crecimiento y el consumo de caja:

- Escenarios de crecimiento: qué pasa con la caja si escalo el paid 2x, 3x o 5x. En qué momento necesito más financiación.
- El modelo de cohorts: cómo proyectar ingresos futuros con base en el comportamiento histórico de cada cohorte de clientes.
- Sensibilidad del modelo: cuánto cambia el resultado si el churn sube 1 punto, si el ARPU baja 10%, si el CAC sube 20%.

Dame el modelo financiero completo en formato de hoja de cálculo con las fórmulas explicadas y los benchmarks de referencia para mi tipo de negocio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir el modelo financiero de adquisición con CAC, LTV y payback period para evaluar la rentabilidad de cada canal.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal de la captación: consentimientos, cookies y cumplimiento en el funnel',
                'description'      => 'Entiende los requisitos legales del funnel de captación digital: RGPD, consentimientos, cookies y comunicaciones comerciales en España y la UE.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho digital y protección de datos con experiencia asesorando a startups y empresas digitales en el cumplimiento de la normativa europea. Necesito entender los requisitos legales que afectan a mi funnel de captación digital para cumplir con el RGPD, la LSSI y la normativa de cookies sin frenar la conversión innecesariamente.

**El marco legal que afecta a la captación digital**

En España y la UE, la captación de usuarios digitales está regulada por múltiples normativas que se superponen:

- RGPD (Reglamento General de Protección de Datos): el marco europeo de privacidad que regula el tratamiento de datos personales. Aplica desde el primer momento en que recojo cualquier dato de un usuario, incluyendo dirección IP y cookies.
- LOPDGDD: la ley orgánica española de adaptación del RGPD. Especificidades españolas que complementan el RGPD.
- LSSI (Ley de Servicios de la Sociedad de la Información): regula las comunicaciones comerciales electrónicas, el spam y los requisitos de información para servicios online.
- Directiva ePrivacy (transpuesta en la LSSI): regula el uso de cookies y tecnologías de seguimiento. El borrador del Reglamento ePrivacy europeo está pendiente y puede cambiar el panorama.

**El consentimiento: la base de todo**

El consentimiento en el RGPD tiene requisitos estrictos que muchas empresas no cumplen correctamente:

1. Qué es consentimiento válido: libre, específico, informado e inequívoco. Lo que no es consentimiento válido: casillas pre-marcadas, consentimiento implícito por uso del servicio, consentimiento genérico para "los fines descritos en nuestra política de privacidad".

2. Consentimiento para comunicaciones comerciales: qué dice exactamente la normativa sobre el opt-in para recibir newsletters y comunicaciones de marketing. La diferencia entre el consentimiento para contratar el servicio y el consentimiento para recibir comunicaciones comerciales.

3. Documentación del consentimiento: cómo guardar evidencia del consentimiento que sea válida ante una reclamación o inspección de la AEPD. Qué información hay que registrar: fecha, versión del texto aceptado, canal de obtención.

4. Revocación del consentimiento: el usuario tiene derecho a retirar el consentimiento en cualquier momento con la misma facilidad con que lo otorgó. El botón de baja en cada email es obligatorio, no opcional.

**El funnel de captación y sus puntos de cumplimiento**

Repasa conmigo cada punto del funnel donde hay obligaciones legales:

- Landing page: información mínima obligatoria según la LSSI, aviso legal, política de privacidad y cookies. Cómo integrarlos en el diseño sin destruir la conversión.
- Formulario de registro: qué campos recoger (principio de minimización de datos: solo lo necesario), cómo redactar la cláusula de consentimiento, la casilla de opt-in para marketing que no puede ser pre-marcada.
- Banner de cookies: requisitos según las directrices de la AEPD. Por qué la mayoría de banners de cookies en España no son legales. Las opciones técnicas para implementar un banner conforme.
- Email de confirmación (double opt-in): cuándo es obligatorio y cuándo es recomendable. El doble opt-in como protección ante reclamaciones.
- Emails de marketing: requisitos de identificación del emisor, derecho de baja en cada mensaje, gestión de bajas en el CRM.

**Cookies y tecnologías de seguimiento**

La gestión de cookies es una de las áreas más incumplidas:

- Clasificación de cookies: estrictamente necesarias (no requieren consentimiento), cookies de análisis, cookies de marketing. La distinción crítica.
- Google Analytics y el RGPD: por qué el uso estándar de Google Analytics puede ser problemático según las resoluciones recientes. Las configuraciones que reducen el riesgo.
- Pixel de Meta y seguimiento cross-site: los requisitos de consentimiento para el remarketing y las audiencias similares.
- Cómo auditar las cookies de mi web: herramientas y el proceso para identificar todas las cookies que instalo.

**El impacto en la conversión: cómo cumplir sin destruir el negocio**

El cumplimiento legal y la optimización de conversión no tienen que ser enemigos. Estrategias para cumplir la normativa con el mínimo impacto en las métricas:

- Diseño del banner de cookies que maximiza la tasa de aceptación dentro de lo legal
- Formularios de registro conformes que no tienen demasiada fricción
- Cómo usar el consentimiento recogido de forma eficiente en el CRM

Dame un checklist de cumplimiento legal para mi funnel de captación y los cambios prioritarios que debo hacer para cumplir con la normativa antes de escalar mi inversión en adquisición.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Cumplir con RGPD, cookies y comunicaciones comerciales en el funnel de captación digital sin frenar la conversión.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS como canal de adquisición: referencias y expansión que generan nuevos clientes',
                'description'      => 'Convierte tu equipo de Customer Success en un motor de adquisición aprovechando referencias, casos de éxito y expansión de cuentas como fuente de nuevos clientes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia en transformar el CS de un centro de coste en un motor de crecimiento. Necesito tu ayuda para diseñar un sistema que convierta a mis clientes actuales en una fuente activa de nuevos clientes, a través de referencias, casos de éxito, expansión a otras divisiones y co-marketing.

**Por qué CS es el canal de adquisición más infravalorado**

El coste de adquisición de un cliente que viene referido por otro cliente es entre tres y diez veces menor que el de un cliente de outbound o paid. El cliente referido convierte más rápido, tiene menor churn y mayor LTV. Sin embargo, la mayoría de empresas deja el boca a boca al azar en vez de diseñarlo como un sistema activo.

El equipo de CS tiene acceso privilegiado a los clientes más satisfechos, conoce sus casos de éxito y tiene la relación de confianza necesaria para pedir referidos o colaboración. Convertir ese acceso en pipeline es el trabajo que quiero desarrollar.

**Identificar a los clientes promotores**

El primer paso es identificar cuáles de mis clientes están en condiciones de referir o colaborar:

- NPS como señal primaria: los promotores (puntuación 9-10) son candidatos naturales para el programa de referidos. Cómo sistematizar el seguimiento de cada promotor.
- Señales de éxito objetivas: el cliente que ha conseguido resultados medibles con mi producto es el que puede hablar con credibilidad. Cómo identificar estos casos desde los datos de uso y las métricas de negocio del cliente.
- El momento óptimo para pedir: justo después de un resultado positivo, cuando el cliente está en su punto de mayor satisfacción. Cómo detectar ese momento en el customer journey.

**El programa de referidos para clientes B2B**

El programa de referidos B2B es diferente al B2C. Los clientes empresariales no refieren por un descuento de 10 euros; refieren porque confían en el producto y porque hay una relación de reciprocidad bien establecida:

1. Cómo pedir un referido de forma que no resulte incómodo: la conversación correcta con el cliente promotor. "Sabemos que tu caso de éxito puede ser valioso para otras empresas en situación similar. ¿Conoces a alguien con quien te sientas cómodo haciendo una presentación?"

2. Qué ofrecer a cambio: créditos, extensión de contrato, formación adicional, visibilidad como caso de éxito en la web. Qué funciona mejor según el tipo de empresa y decisor.

3. El seguimiento del referido: cómo mantener informado al cliente que refirió sin presionarlo, y cómo cerrar el círculo cuando el referido se convierte en cliente.

**Casos de éxito y co-marketing**

Los clientes con resultados demostrables son la fuente de contenido de adquisición más poderosa:

- Cómo conseguir que un cliente participe en un caso de éxito: quién en el cliente tiene que aprobarlo, qué obsequio o reconocimiento facilita la participación, cómo hacer el proceso lo menos costoso posible para el cliente.
- Formatos de caso de éxito que generan pipeline: el estudio de caso escrito, el testimonio en vídeo, la referencia telefónica para prospects, la participación en un webinar o evento.
- Co-marketing con clientes: cuando el cliente tiene acceso a una audiencia relevante para nosotros. Webinars conjuntos, posts en LinkedIn del directivo del cliente, comunicados de prensa conjuntos.

**Expansión como adquisición interna**

El cliente que usa el producto en un departamento puede convertirse en cliente de otro departamento. La expansión es adquisición con CAC casi cero:

- Mapear el potencial de expansión de cada cuenta: cuántas divisiones, departamentos o geografías podrían usar el producto.
- La estrategia de campeón interno: cómo el CS identifica y cultiva a la persona dentro del cliente que puede promover la expansión.
- El proceso de expansión: cómo presentar el caso de expansión internamente, cómo gestionar que el comprador de la expansión es diferente al comprador original.

**Métricas del CS como canal de adquisición**

- Revenue generado por referidos: por cliente fuente y por CSM
- Net Revenue Retention (NRR): la expansión incluida. Por encima del 100% significa que el negocio crece aunque no adquiera ni un cliente nuevo.
- Referidos generados por NPS promotor: cuántos promotores identificados se convierten en fuentes de referidos activos.

Dame un plan de 90 días para activar el programa de referidos y la estrategia de expansión en mis cuentas más maduras.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Convertir el equipo de Customer Success en un motor de adquisición mediante referencias, casos de éxito y expansión de cuentas.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Adquisición de clientes del freelance: los canales que realmente funcionan',
                'description'      => 'Aprende a construir un sistema de adquisición de clientes como freelance que genera leads de calidad sin depender de plataformas de precio bajo ni del boca a boca aleatorio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior con más de diez años de experiencia y una agenda consistentemente llena de proyectos de alto valor. Necesito tu ayuda para construir un sistema de adquisición de clientes que no dependa del boca a boca aleatorio ni de plataformas de precio bajo, sino de canales predecibles que generen leads de calidad mes a mes.

**El problema de la adquisición del freelance**

La mayoría de freelancers tiene un ciclo predecible y frustrante: periodo de trabajo intenso con clientes actuales seguido de caída brusca de ingresos cuando terminan los proyectos, seguido de esfuerzo reactivo para encontrar nuevos clientes. Este ciclo es estresante, ineficiente y mantiene los precios bajos porque se negocia desde la urgencia.

La solución no es un solo canal mágico sino un sistema de dos o tres canales que funcionan en paralelo y generan un flujo constante de oportunidades. El objetivo es tener siempre más opciones de las que puedes aceptar, lo que te permite elegir los mejores proyectos y negociar desde una posición de fortaleza.

**Los canales que realmente funcionan para freelancers de alto valor**

1. **Red de contactos activa (networking de reciprocidad)**

La diferencia entre networking que funciona y el que no: el networking transaccional (contactar a alguien cuando necesitas algo) no funciona. El networking de reciprocidad (dar valor consistentemente antes de necesitar) sí.

Cómo construirlo en la práctica:
- Lista de las 50 personas más relevantes en tu red: clientes pasados, colegas, personas de referencia en tu sector
- Contacto periódico de valor: compartir un artículo relevante, hacer una introducción útil, felicitar un logro genuino. No "¿tienes algo de trabajo?"
- Aparecer en los espacios donde están tus clientes ideales: eventos, conferencias, grupos de LinkedIn, comunidades de Slack

2. **Contenido de autoridad (posicionamiento por expertise)**

El contenido que posiciona al freelance como experto es el canal de adquisición con el mayor apalancamiento a largo plazo:

- Elegir el nicho de contenido: no escribir sobre "diseño en general" sino sobre el problema específico de tu cliente ideal. Los algoritmos y el SEO favorecen la especialización.
- Formatos que funcionan para freelancers: LinkedIn (el mejor canal para B2B), newsletter propia (lista de propietario que nadie te puede quitar), artículos largos en nicho (SEO de largo plazo), podcast de entrevistas con potenciales clientes (construye relación y audiencia simultáneamente).
- Consistencia sobre perfección: publicar mediocre consistentemente supera a publicar brillante esporádicamente. El algoritmo y la memoria humana funcionan igual.
- Monetización del contenido: cómo convertir seguidores en clientes sin sentirse comercial. El funnel de contenido: post → newsletter → conversación → proyecto.

3. **Outreach directo con personalización real**

El cold outreach para freelancers puede funcionar si está bien ejecutado:
- Cómo identificar a los prospectos ideales: empresas del tamaño y sector correcto, con señales de necesitar tu servicio (contratación frustrada, proyecto visible con el problema que tú resuelves, crecimiento reciente)
- El mensaje de primer contacto: breve, específico, con una observación sobre su trabajo o empresa que demuestre investigación real
- El seguimiento sin molestar: dos o tres toques espaciados con valor diferente en cada uno

4. **Partnerships con agencias y otros freelancers**

Las agencias contratan freelancers externos cuando están al límite de capacidad. Los freelancers de servicios complementarios se refieren trabajo mutuamente:
- Cómo identificar agencias que usan freelancers externos y cómo entrar en su lista de proveedores
- Construir alianzas con freelancers de servicios complementarios: el diseñador que refiere al desarrollador, el copywriter que refiere al estratega de contenidos

**El sistema de gestión del pipeline**

Un freelance sin CRM es un freelance reactivo. Cómo construir un sistema sencillo para gestionar el pipeline de oportunidades y no dejar caer ninguna conversación.

**El momento correcto para activar la adquisición**

No esperar a que termine el proyecto actual para empezar a buscar el siguiente. La regla: empezar activamente la búsqueda del próximo proyecto cuando queda el 30-40% del proyecto actual.

Dame un plan de adquisición de 90 días adaptado a mi nicho y situación actual, con los canales específicos que debo activar y las acciones semanales para cada uno.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un sistema de adquisición de clientes freelance con canales predecibles que generen leads de calidad mes a mes.',
                'vote_score'       => 41,
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
