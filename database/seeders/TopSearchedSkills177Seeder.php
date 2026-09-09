<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills177Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Launch marketing para startups: de cero a tracción',
                'description'      => 'Lanza tu startup al mundo: Product Hunt, newsletters de tech, comunidades y las estrategias de lanzamiento que generan tracción inicial sin presupuesto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un growth marketer especializado en lanzamientos de startups con experiencia en Product Hunt, comunidades tech y estrategias de distribución orgánica. Estoy a punto de lanzar mi startup y necesito una estrategia de lanzamiento completa que genere tracción real con presupuesto limitado.

**Datos de mi startup:**
- Producto: [describe qué hace tu producto en una frase]
- Usuario objetivo: [perfil exacto del usuario al que va dirigido]
- Problema que resuelve: [el dolor concreto que soluciona]
- Diferenciación: [por qué es mejor que lo que existe ahora]
- Estado actual: [MVP listo / en beta privada / ya tenemos primeros usuarios / lanzamiento inminente]
- Presupuesto para el lanzamiento: [0 / menos de 1.000€ / menos de 5.000€]
- Canales donde ya tengo presencia: [LinkedIn / Twitter / comunidades online / newsletter propia / ninguno]
- Audiencia actual: [número de seguidores o lista de espera si existe]

**Módulo 1 — Estrategia de pre-lanzamiento (4-8 semanas antes)**

El lanzamiento se gana antes del día D:

1. **Construcción de audiencia propia**: ¿cómo construyo una lista de espera o newsletter de early adopters antes del lanzamiento? ¿Qué lead magnet tiene sentido para mi producto? Dame 5 ideas concretas de lead magnets que funcionan para startups B2B y 5 para B2C.

2. **Comunidades donde están mis usuarios**: ¿cómo identifico las comunidades online (Slack, Discord, Reddit, foros específicos, LinkedIn Groups) donde está mi usuario objetivo? ¿Cómo participo de forma que genere credibilidad y no parezca spam? Dame el approach correcto para introducir el producto en una comunidad donde no se te conoce.

3. **El beta circle**: ¿cómo selecciono y gestiono un grupo de 20-50 beta users que van a probar el producto antes del lanzamiento y me darán feedback, testimonios y serán embajadores el día del lanzamiento?

4. **Construcción de relaciones con creadores de contenido y newsletters**: ¿qué newsletters de tecnología o de mi sector cubren startups en fase de lanzamiento? ¿Cómo les hago llegar el producto de forma que sea genuinamente interesante para sus lectores?

**Módulo 2 — La estrategia de Product Hunt**

Product Hunt es la plataforma de lanzamiento más visible para startups tech:

1. **Cómo preparar un lanzamiento en Product Hunt para quedar en el top 5 del día**: el timing (martes, miércoles o jueves a las 00:01 PST), los assets (icono, tagline, primera imagen, video demo, descripción), la página de producto y cómo conseguir el primer Maker con credibilidad.

2. **La activación el día del lanzamiento**: ¿cómo coordino a mis beta users, seguidores y red para que voten sin que parezca un voto organizado (que viola las reglas de Product Hunt)? ¿Cómo respondo a todos los comentarios durante el día para maximizar la visibilidad?

3. **Qué expectativas realistas tener de Product Hunt**: ¿qué tipo de tráfico y registros puedo esperar? ¿Para qué tipos de productos funciona bien Product Hunt y para cuáles no tiene sentido como canal de lanzamiento principal?

**Módulo 3 — Distribución en el día del lanzamiento**

1. **La secuencia de publicaciones el día D**: dame el plan hora a hora de publicaciones en redes sociales, mensajes a la lista de correo, publicaciones en comunidades y outreach personal el día del lanzamiento.

2. **El post de lanzamiento para LinkedIn**: redacta la estructura de un post de LinkedIn para el día del lanzamiento que sea auténtico, cuente la historia del problema que resuelve el producto y termine con una CTA clara.

3. **El email a la lista de espera**: redacta el email que envío a mis suscriptores el día del lanzamiento.

4. **PR en medios especializados**: ¿tiene sentido intentar salir en un medio de tecnología el día del lanzamiento? ¿Cómo contacto a periodistas y qué les cuento para que les resulte interesante publicarlo?

**Módulo 4 — La semana post-lanzamiento**

El lanzamiento no termina el día D:

1. ¿Cómo mantengo el momentum la semana después del lanzamiento?
2. ¿Qué métricas miro para saber si el lanzamiento fue exitoso (más allá del vanity de votos en PH)?
3. ¿Cómo convierto el tráfico del lanzamiento en usuarios activos y retenidos?
4. ¿Cuándo tiene sentido hacer un segundo lanzamiento si el primero no generó la tracción esperada?

Dame el checklist completo con todas las tareas del lanzamiento, organizadas en pre-lanzamiento, día D y post-lanzamiento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Estrategia de lanzamiento de startup: Product Hunt, comunidades, beta users y distribución orgánica para generar tracción desde cero.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Stack técnico para startups: cómo elegir bien desde el principio',
                'description'      => 'Elige el stack tecnológico inicial de una startup. Los criterios de selección, las opciones que permiten iterar rápido y el momento en que debes replatformar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CTO experimentado que ha construido startups desde cero y ha liderado procesos de replatformación. Necesito ayuda para elegir el stack técnico inicial de mi startup o para evaluar si el stack actual es el correcto para la etapa en que estamos.

**Datos de mi startup:**
- Tipo de producto: [web app / mobile app / API/plataforma / herramienta de datos / marketplace / otro]
- Usuarios objetivo: [B2B enterprise / B2B SMB / B2C / desarrolladores]
- Etapa: [idea / MVP en construcción / MVP lanzado / product-market fit buscando / creciendo]
- Equipo técnico actual: [solo yo / 1-2 devs / equipo pequeño de 3-5 / más grande]
- Perfil del equipo: [full-stack / backend-heavy / frontend-heavy / data science]
- Restricciones de contratación: [quiero poder contratar fácil / prefiero un stack nicho pero potente / sin preferencia]
- Stack actual (si hay): [describe lo que tienes ahora]
- Principal duda o problema: [no sé qué elegir / creo que debo replatformar / quiero validar que estoy bien]

**Módulo 1 — Los principios de selección de stack para startups**

Antes de hablar de tecnologías concretas, necesito entender los criterios correctos:

1. **La velocidad de iteración es el criterio número uno**: explícame por qué en las primeras etapas de una startup el criterio más importante no es la escalabilidad técnica sino la velocidad de construcción y de cambio. ¿Cuándo empieza a importar la escalabilidad?

2. **El mercado de talento importa**: un stack donde es difícil contratar multiplica el tiempo de crecimiento del equipo. ¿Cuáles son los stacks con mayor oferta de talento en España y Europa en este momento para cada capa (frontend, backend, datos)?

3. **El costo de cambiar de decisión**: no todas las decisiones de stack son igual de reversibles. ¿Cuáles son las decisiones que más cuestan cambiar más adelante (base de datos, lenguaje principal, monolito vs. microservicios) y cuáles son más fáciles de reemplazar?

4. **Herramientas que sustituyen código**: en 2024-2025, muchas startups usan herramientas no-code o low-code para partes del producto que antes requerían ingeniería. ¿Cuándo tiene sentido usar Bubble, Webflow, Supabase, Firebase, Retool o similares? ¿Y cuándo es un error?

**Módulo 2 — Opciones de stack por tipo de producto**

Para mi tipo de producto, dame las opciones reales con sus pros y contras:

1. **Frontend**: ¿React / Next.js / Vue / Nuxt / Svelte? ¿Cuándo tiene sentido una SPA y cuándo un SSR? ¿Qué frameworks tienen mejor ecosistema de componentes y cuáles tienen menor curva de aprendizaje?

2. **Backend**: ¿Node.js (Express / NestJS / Fastify) / Python (FastAPI / Django) / Ruby on Rails / Laravel (PHP) / Go? Para una startup en fase temprana, ¿cuál permite iterar más rápido y cuál escala mejor cuando llegue el momento?

3. **Base de datos**: ¿PostgreSQL / MySQL / MongoDB / Supabase? ¿Cuándo tiene sentido NoSQL y cuándo SQL? ¿Qué managed services de base de datos recomendarías para no tener que gestionar infraestructura?

4. **Infraestructura y hosting**: ¿Vercel / Railway / Render / AWS / GCP / Azure? ¿Cuál tiene la mejor relación coste-simplicidad para una startup en fase temprana? ¿Cuándo tiene sentido pasar a AWS?

5. **Auth, pagos y notificaciones**: ¿Clerk / Auth0 / Supabase Auth para autenticación? ¿Stripe para pagos? ¿Resend / SendGrid para email? ¿Cuándo compensa construirlo propio vs. usar un tercero?

**Módulo 3 — Arquitectura inicial: monolito vs. microservicios**

Este es el debate más frecuente y donde más startups cometen el error:

1. ¿Por qué la mayoría de startups exitosas empezaron con un monolito? ¿Qué empresas son el ejemplo y en qué momento hicieron la transición a microservicios?

2. ¿Cuándo tiene sentido empezar con microservicios o con una arquitectura de servicios desde el principio?

3. ¿Cómo diseño un monolito desde el principio de forma que sea fácil de partir en servicios más adelante si llega el momento?

**Módulo 4 — Cuándo y cómo replatformar**

Si creo que debo cambiar de stack, ayúdame a pensar en esto:

1. ¿Cuáles son las señales de que el stack actual está limitando el crecimiento del producto o del equipo?
2. ¿Cuándo es el momento correcto para replatformar (nunca durante un crecimiento acelerado, pero tampoco lo dejes para cuando sea una emergencia)?
3. ¿Cuáles son las estrategias de migración que minimizan el riesgo (strangler fig pattern, migración progresiva de módulos, reescritura paralela)?

Dame una recomendación de stack concreta para mi tipo de producto y etapa, con la justificación de cada decisión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Elegir el stack técnico de una startup: criterios de selección, opciones por tipo de producto y cuándo replatformar.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'MVP design: diseñar el mínimo producto viable con impacto',
                'description'      => 'Diseña el mínimo producto viable con el máximo impacto. Las decisiones de diseño que importan en el lanzamiento, las que se posponen y el proceso de validación que evita construir lo que nadie quiere.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product designer con experiencia en startups en fase temprana, especializado en diseño de MVP y procesos de validación de producto. Estoy diseñando el MVP de mi startup y necesito ayuda para tomar las decisiones de diseño correctas: qué hacer, qué no hacer todavía y cómo validar antes de construir.

**Datos del MVP:**
- Tipo de producto: [web app / mobile app / herramienta interna / marketplace / SaaS]
- Usuario objetivo: [perfil exacto]
- Problema principal que resuelve: [el dolor central]
- Las funcionalidades que creo que debe tener el MVP: [lista lo que tienes en mente]
- Restricciones de tiempo: [cuánto tiempo tienes para lanzar]
- Restricciones de recursos: [solo yo / tengo un diseñador / tengo un equipo pequeño]
- Presupuesto de diseño: [cero / herramientas de pago disponibles / diseñador contratado]

**Módulo 1 — Qué es realmente un MVP (y por qué suelen ser demasiado grandes)**

1. **El MVP no es la versión pequeña del producto soñado, es el experimento más pequeño que valida la hipótesis más importante**: explícame cómo identificar la hipótesis central de mi negocio y qué es lo mínimo que necesito construir para validarla.

2. **Las funcionalidades que siempre sobran en un MVP**: las más frecuentes son perfiles de usuario complejos, sistemas de roles y permisos, notificaciones elaboradas, dashboards de analytics, integraciones con terceros y onboarding multi-paso. ¿Cuándo son necesarias desde el principio y cuándo pueden esperar?

3. **MVP vs. prototipo no funcional**: ¿cuándo tiene más sentido validar con un prototipo en Figma (o incluso con mockups estáticos) antes de construir el MVP funcional? ¿Para qué tipo de hipótesis funciona la validación con prototipo y para cuáles necesitas el producto real?

**Módulo 2 — Decisiones de diseño que importan en el MVP**

No todas las decisiones de diseño tienen el mismo impacto en un MVP:

1. **Las tres áreas de diseño que no pueden ser malas ni en el MVP más básico**:
   - La primera pantalla o landing page: si la primera impresión falla, nadie prueba el producto
   - El flujo de onboarding: si el usuario no llega al momento aha en los primeros minutos, no vuelve
   - La acción principal del producto: el core loop que el usuario hace repetidamente debe ser perfecto

2. **Qué puedo hacer con deuda de diseño en el MVP**: ¿en qué áreas es aceptable tener un diseño mediocre temporalmente? (settings, páginas de perfil, documentación, páginas de error, estados vacíos secundarios, emails transaccionales no críticos).

3. **Design systems para startups**: ¿tiene sentido construir un design system propio en el MVP o usar Tailwind UI, Shadcn, Material UI, Ant Design o un Figma UI kit? ¿Cuándo el sistema propio genera valor y cuándo es ingeniería/diseño prematura?

**Módulo 3 — El proceso de diseño del MVP**

1. **El proceso correcto**: ¿en qué orden hago las cosas? (definir el problema → research de usuarios → flujos de usuario → wireframes → prototipo → test con usuarios → diseño visual → handoff). ¿Qué pasos se pueden comprimir o saltar en un MVP con tiempo limitado?

2. **Validación con usuarios antes de diseñar**: ¿cómo hago 5 entrevistas con usuarios potenciales en menos de una semana? ¿Qué preguntas hago para validar el problema (no el producto)? ¿Qué aprendo de estas entrevistas que cambie el diseño?

3. **Test de usabilidad del prototipo**: ¿cómo hago un test de usabilidad rápido con un prototipo en Figma antes de pasar a desarrollo? ¿Qué señales busco para saber si el flujo funciona o tiene problemas?

**Módulo 4 — Handoff y trabajo con el equipo de desarrollo**

1. ¿Cómo preparo las especificaciones de diseño para que el desarrollo sea rápido y no haya malentendidos?
2. ¿Qué herramienta uso para el handoff (Figma con Dev Mode, Zeplin, Storybook) y qué incluyo?
3. ¿Cómo gestiono los cambios de diseño durante el desarrollo sin bloquear al equipo?
4. ¿Cuándo un desarrollador propone un cambio al diseño original por complejidad técnica, cómo decido si aceptarlo o mantener el diseño original?

Termina con la lista de las 5 decisiones de diseño más importantes que debo tomar en las próximas dos semanas para mi MVP y cómo tomar cada una.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Diseñar el MVP de una startup: qué construir, qué posponer, cómo validar con usuarios y cómo hacer el handoff al equipo de desarrollo.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Primeras ventas como founder técnico',
                'description'      => 'El founder que tiene que vender cuando no hay equipo comercial. El proceso de las primeras 10 ventas, los clientes que debes elegir y los errores que cometen los founders técnicos al vender.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un advisor de ventas especializado en founders técnicos o de producto que tienen que vender su startup sin tener experiencia comercial previa. Necesito ayuda para conseguir mis primeras ventas reales.

**Mi situación:**
- Producto: [describe qué vendes en una frase]
- Target de cliente: [perfil del comprador ideal: rol, tipo de empresa, sector]
- Precio del producto: [monthly / anual / por uso / custom]
- Estado actual de ventas: [cero clientes / 1-2 clientes iniciales / tengo conversaciones pero no cierro]
- Mi perfil como founder: [técnico / de producto / sin experiencia en ventas]
- Principal dificultad: [no sé a quién llamar / no consigo reuniones / consigo reuniones pero no cierro / el proceso es demasiado largo]
- Canales que he probado: [outreach en LinkedIn / cold email / referidos / comunidades / eventos]

**Módulo 1 — La mentalidad correcta para las primeras ventas**

Las primeras ventas de una startup no son ventas normales: son investigación de mercado pagada:

1. **El objetivo real de las primeras 10 ventas**: no es el revenue (aunque bienvenido sea), es entender qué perfil de cliente compra, por qué compra, qué objeción es real y cuál es el proceso de decisión. ¿Cómo diseño mis primeras conversaciones de ventas para extraer el máximo aprendizaje?

2. **El cliente ideal para las primeras ventas**: no todos los clientes son buenos clientes iniciales. ¿Qué características debe tener el cliente que me conviene conseguir en las primeras ventas? (early adopter que tolera imperfecciones, que da feedback, que es referenciable, que no tiene un proceso de aprobación de 6 meses).

3. **Por qué los founders técnicos tienen ventaja en las primeras ventas**: el founder puede hablar de tú a tú con el comprador técnico, puede resolver dudas en tiempo real, puede customizar el producto en la reunión. ¿Cómo uso estas ventajas en mis conversaciones?

**Módulo 2 — Cómo conseguir las primeras reuniones**

1. **El outreach que funciona para founders**: ¿qué canal tiene mejor tasa de respuesta para conseguir reuniones con el perfil de cliente que busco? ¿LinkedIn DM, cold email, comunidades online, eventos, o través de la red personal?

2. **El mensaje de outreach que abre puertas**: dame la estructura del mensaje (sea email o LinkedIn) que tiene más probabilidades de conseguir una respuesta. Incluye: referencia personalizada a la empresa del prospecto, el problema que resuelves (no tu producto), la prueba de que resuelves ese problema, y la CTA. Dame un ejemplo concreto para mi caso.

3. **La investigación previa a cada outreach**: ¿cuánto tiempo dedico a personalizar cada mensaje y qué busco en la empresa antes de contactar? Dame el proceso en menos de 10 minutos por prospecto.

4. **El uso de la red propia**: las primeras reuniones siempre son más fáciles a través de presentaciones. ¿Cómo activo mi red de forma sistemática sin parecer que estoy pidiendo favores?

**Módulo 3 — La conversación de discovery y el pitch**

1. **La reunión de discovery (no de pitch)**: las primeras reuniones deben ser de escucha, no de presentación. Dame el framework de preguntas de discovery que me permite entender si el prospecto tiene el problema, cómo lo está resolviendo ahora y si tiene budget y urgencia para cambiarlo.

2. **Cuándo y cómo hacer la demo**: ¿cuándo en el proceso tiene sentido hacer la demo del producto? ¿Cómo hago una demo que muestre el valor sin abrumar con funcionalidades? Dame la estructura de demo de 20 minutos para mi tipo de producto.

3. **Manejo de las objeciones más frecuentes**:
   - "No tenemos presupuesto ahora"
   - "Necesito consultarlo con mi equipo"
   - "¿Podéis integraros con [herramienta]?"
   - "¿Tenéis referencias de otros clientes?"
   - "Somos muy pequeños/grandes para vuestro producto"

**Módulo 4 — El cierre y el proceso post-reunión**

1. ¿Cómo cierro una conversación de ventas con un next step concreto en lugar de un "ya te digo algo"?
2. ¿Cómo diseño un piloto o prueba gratuita que genere compromiso y no me deje en el limbo?
3. ¿Qué hago después de enviar la propuesta para que no muera en bandeja de entrada?
4. ¿Cuándo tengo que asumir que un prospecto no va a comprar y pasar al siguiente?

Dame el playbook de ventas de las primeras 90 reuniones que puedo empezar a ejecutar la semana que viene.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Conseguir las primeras ventas como founder: outreach, discovery, demo, manejo de objeciones y cierre sin equipo comercial.',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product-market fit: cómo medirlo y alcanzarlo',
                'description'      => 'Los marcos para medir y alcanzar el product-market fit: la encuesta de Sean Ellis, los cohorts de retención y las señales que indican que has encontrado algo que la gente realmente quiere.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product advisor especializado en early-stage startups que ha ayudado a múltiples productos a encontrar el product-market fit. Necesito entender si mi producto ha encontrado el PMF, cómo medirlo con rigor y qué cambiar si todavía no estoy ahí.

**Mi situación actual:**
- Tipo de producto: [B2B SaaS / B2C app / marketplace / herramienta developer / otro]
- Tiempo desde el lanzamiento: [meses]
- Número de usuarios activos: [número]
- Revenue actual (si hay): [MRR o ARR]
- Churn mensual aproximado: [porcentaje o "no lo he medido bien"]
- Mi sensación honesta sobre el PMF: [creo que lo tengo / no lo sé / claramente no lo tengo todavía]
- Mayor señal positiva que tengo: [usuarios que vuelven solos / referidos orgánicos / clientes que se enfadan cuando hay downtime / otro]
- Mayor señal negativa: [retención baja / mucho churn / crecimiento estancado / feedback inconsistente]

**Módulo 1 — Qué es realmente el PMF (y qué no es)**

1. **La definición operativa del PMF**: el PMF no es un estado binario sino un continuum. Explícame las fases desde "no hay PMF" hasta "PMF claro" y cómo reconocer en qué fase estoy.

2. **La diferencia entre traction y PMF**: tener usuarios no significa tener PMF. ¿Qué patrones de uso indican PMF real vs. curiosidad temporal? ¿Qué comportamientos de los usuarios son las mejores señales de PMF según el tipo de producto?

3. **Por qué los fundadores confunden validación temprana con PMF**: el primer cliente entusiasta, el primer mes con buena retención, el primer artículo de prensa positivo. ¿Por qué estas señales pueden engañar y qué necesito ver durante cuánto tiempo para estar razonablemente seguro?

**Módulo 2 — Cómo medir el PMF**

1. **La encuesta de Sean Ellis**: explícame la metodología completa. ¿Cómo diseño y envío la encuesta? ¿A quién la envío (solo usuarios activos del último mes)? ¿Qué umbral del 40% significa y por qué es esa cifra? ¿Qué hago con los segmentos que responden "muy decepcionado" vs. los que responden "poco decepcionado"?

2. **Análisis de retención por cohorts**: ¿cómo construyo un análisis de retención que me diga si tengo PMF? ¿Qué herramientas uso (Amplitude, Mixpanel, PostHog, incluso Google Sheets)? ¿Qué forma debe tener la curva de retención para indicar PMF (la curva que se "aplana" en lugar de ir a cero)?

3. **Net Promoter Score (NPS) contextualizado**: ¿qué NPS es bueno para mi tipo de producto y etapa? ¿Cómo uso el NPS cualitativo (los comentarios, no solo el número) para entender qué cambia en la percepción?

4. **El DAU/WAU/MAU ratio**: ¿qué ratio es normal para mi tipo de producto? ¿Un ratio DAU/MAU del 10% es bueno o malo dependiendo del contexto?

5. **Growth rate orgánico y referidos**: ¿qué porcentaje del nuevo crecimiento viene de referidos y boca a oreja? ¿Por qué esta es una de las señales más fiables de PMF?

**Módulo 3 — Qué hacer si no tienes PMF todavía**

Si las métricas dicen que no hay PMF, el trabajo es encontrarlo antes de escalar:

1. **El análisis de los mejores usuarios**: ¿cómo identifico a mis usuarios más comprometidos y qué aprendo de ellos? ¿Qué tienen en común (sector, tamaño, rol, caso de uso) que podría ser mi segmento de PMF incluso si el producto general no lo tiene?

2. **Los pivots que buscan el PMF**: ¿cuáles son los tipos de pivot más frecuentes que llevan al PMF? (cambio de segmento de cliente, cambio de canal de distribución, cambio del problema principal que se resuelve, cambio del modelo de negocio). ¿Cómo decido qué cambiar?

3. **Cuándo pivotar y cuándo perseverar**: la decisión más difícil de cualquier founder. ¿Qué señales me dicen que debo pivotar vs. que debo esperar más? ¿Cuánto runway necesito para dar otro intento después de un pivot?

**Módulo 4 — Después del PMF: cuándo escalar**

Una vez que hay señales claras de PMF:

1. ¿Qué métricas debo ver durante cuántos meses antes de estar seguro de que el PMF es estable?
2. ¿Cuáles son los primeros movimientos de escala que no debo hacer antes de tener PMF sólido?
3. ¿Cómo sé que he encontrado PMF en un segmento pero todavía no en el mercado más grande que quiero atacar?

Termina con una lista de 10 preguntas que me debo hacer esta semana para saber honestamente si tengo PMF.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Medir y alcanzar el product-market fit: encuesta de Sean Ellis, análisis de cohorts, señales reales de PMF y cuándo escalar.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Primeras contrataciones de una startup',
                'description'      => 'Las primeras 10 contrataciones son las más importantes. Cómo reclutar sin budget, qué perfiles priorizar y los errores de contratación temprana que pueden matar una startup.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un advisor de RRHH y cultura organizacional con especialización en startups en fase temprana. Necesito ayuda para tomar las decisiones de contratación correctas en los primeros empleados de mi startup.

**Mi situación:**
- Etapa de la startup: [idea / pre-seed / seed / Serie A]
- Equipo fundador actual: [número y perfiles de los cofundadores]
- Número de empleados actuales: [si hay alguno]
- Próximas contrataciones que estoy considerando: [describe los perfiles que crees que necesitas]
- Presupuesto aproximado para salarios: [rango mensual disponible]
- Sector y tipo de producto: [describe]
- Modelo de trabajo: [remoto / presencial / híbrido]

**Módulo 1 — La estrategia de contratación temprana**

Las primeras contrataciones definen la cultura y el ADN de la empresa para siempre:

1. **Cuándo contratar vs. cuándo no contratar todavía**: el error más frecuente de founders con inversión es contratar demasiado pronto, antes de tener claridad sobre lo que el equipo necesita. ¿Cuáles son las señales de que es el momento de contratar un rol específico? (la contratación debería liberar al founder para hacer más de lo que solo él puede hacer, no resolver problemas de ejecución que no están definidos todavía).

2. **El orden correcto de las primeras contrataciones**: ¿hay un orden "correcto" para contratar los primeros perfiles? ¿Qué combinaciones de roles en los primeros 5 empleados han probado ser exitosas en startups de mi tipo? ¿Qué roles se contratan pronto en B2B vs. B2C vs. deeptech?

3. **Generalist vs. specialist en fase temprana**: ¿cuándo una startup necesita generalistas que puedan con todo vs. especialistas que sean muy buenos en una cosa concreta? ¿Cómo cambio esta mezcla a medida que la empresa crece?

**Módulo 2 — Cómo reclutar sin presupuesto**

Una startup early-stage compite con empresas que pagan más. La propuesta de valor debe ser diferente:

1. **La propuesta de valor del empleado temprano**: ¿qué convence a un profesional bueno de unirse a una startup con riesgo real? El equity, la misión, el aprendizaje acelerado, la responsabilidad y el impacto. ¿Cómo construyo y comunico esta propuesta de valor de forma auténtica?

2. **Los canales de reclutamiento que funcionan con presupuesto limitado**: ¿cuáles son los canales más efectivos para contratar primeros empleados? (la red personal del founder, LinkedIn free, comunidades tech en Slack/Discord, eventos de startups, GitHub y Stack Overflow para perfiles técnicos, hackathons, YC job board y similares).

3. **El equity como parte del paquete**: ¿cómo explico el equity a un candidato que no tiene experiencia con startups? ¿Qué porcentaje es habitual para los primeros empleados (non-founder) en cada etapa? ¿Cómo diseño el vesting schedule?

**Módulo 3 — El proceso de selección para startups**

El proceso de selección en una startup debe ser diferente al de una empresa grande:

1. **Qué evaluar en un candidato para una startup**: más allá de las skills técnicas, ¿cómo evalúo la tolerancia a la ambigüedad, la capacidad de trabajar sin estructura, la iniciativa propia y la compatibilidad cultural? ¿Qué preguntas y qué ejercicios prácticos sirven para esto?

2. **El proceso corto pero riguroso**: ¿cuántas etapas de entrevistas son suficientes para tomar una buena decisión sin perder a candidatos por un proceso demasiado largo? ¿Qué formato de prueba técnica o práctica es justo y respeta el tiempo del candidato?

3. **Las referencias**: ¿cómo hago referencias que aporten información real sobre el candidato? ¿Qué preguntas hago a los ex-jefes o compañeros que me dan señales de alerta?

**Módulo 4 — Los errores de contratación que matan startups**

1. Contratar por presión de tiempo (necesito a alguien ya) en lugar de por fit
2. Contratar a alguien demasiado senior demasiado pronto (el VP de ventas que no puede vender sin equipo)
3. Contratar amigos o familia sin evaluar la idoneidad
4. No hacer offboarding correcto cuando una contratación temprana no funciona
5. No construir cultura conscientemente desde los primeros empleados

Para cada error, dame la señal de alerta que me avisa de que estoy cometiendo ese error y cómo lo corrijo.

Termina con las preguntas que le haría a un candidato para los primeros roles de mi startup, adaptadas al tipo de perfil que más necesito.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Primeras contrataciones de una startup: qué perfiles priorizar, cómo reclutar sin budget, el proceso de selección y los errores que evitar.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión financiera de una startup pre-revenue',
                'description'      => 'Controla el runway, gestiona el gasto y construye el modelo financiero que muestra cuándo llegas a la rentabilidad. Las herramientas y los hábitos del founder financieramente ordenado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO fraccionado especializado en startups en fase pre-revenue y early revenue. Necesito ayuda para gestionar las finanzas de mi startup de forma ordenada: controlar el runway, modelizar el crecimiento y preparar la empresa para la próxima ronda o para la rentabilidad.

**Datos de mi startup:**
- Etapa: [pre-seed / seed / post-seed buscando Serie A]
- Inversión recibida hasta ahora: [importe o "bootstrapped"]
- Caja disponible actualmente: [importe aproximado]
- Gasto mensual actual (burn rate): [importe o "no lo tengo claro"]
- Revenue actual: [0 / primeros euros / MRR de X euros]
- Equipo: [número de personas y composición]
- Runway estimado: [meses o "no lo he calculado"]
- Próximos hitos financieros: [levantar ronda / llegar a break-even / lanzar]

**Módulo 1 — El control del runway: la métrica más importante de una startup**

1. **Cómo calcular el runway correctamente**: el runway no es caja / burn rate. Explícame el cálculo correcto que incluye la curva de gastos (si va a crecer) y la curva de ingresos (si ya hay revenue), y por qué un cálculo lineal sobreestima el runway.

2. **El burn rate detallado**: ¿cómo descompongo el burn rate en categorías (personal, infraestructura, marketing, legal, oficina, otros) para entender dónde está el gasto y cuáles son variables vs. fijos? Dame la plantilla de categorías.

3. **Runway mínimo de seguridad**: ¿cuántos meses de runway debo tener siempre como mínimo para operar sin angustia existencial? ¿Cuándo debo empezar a buscar la siguiente ronda en términos de runway restante?

4. **El tablero de control financiero semanal**: ¿qué métricas financieras debo revisar semanalmente? Dame el dashboard mínimo viable de finanzas para un founder de startup (caja, burn, runway, MRR, churn si hay, próximos pagos grandes).

**Módulo 2 — El modelo financiero de la startup**

1. **Para qué sirve el modelo financiero en fase temprana**: el modelo no es para predecir el futuro (nadie sabe cuánto va a crecer una startup), sino para entender las palancas del negocio, comunicar con inversores y tomar decisiones sobre cuándo contratar o cómo cambiar el pricing.

2. **La estructura del modelo de una startup**: ¿qué hojas incluye el modelo financiero estándar de una startup? (assumptions, P&L proyectado, headcount plan, unit economics, cashflow, métricas SaaS o KPIs del modelo de negocio específico). Dame la estructura tab por tab.

3. **Assumptions clave según el tipo de negocio**: ¿qué asumo sobre la tasa de crecimiento, el CAC, el LTV, el churn y los márgenes para un SaaS B2B? ¿Y para un marketplace? ¿Y para un producto de consumo? ¿Cómo sé si mis assumptions son razonables o wishful thinking?

4. **El modelo de unit economics**: explícame cómo calculo el LTV:CAC para mi tipo de negocio y qué ratio es el umbral mínimo para que el negocio sea escalable.

**Módulo 3 — Gestión del gasto en fase temprana**

1. **Los gastos que una startup temprana nunca debería tener**: espacios de oficina caros, herramientas que nadie usa, contractors sin deliverable claro, consultores de marca y marketing antes de tener PMF.

2. **Los gastos que parecen caros pero valen la pena**: herramientas de producto (Figma, herramientas de analytics, Notion), infraestructura cloud bien dimensionada, asesoría legal para los contratos importantes.

3. **La política de gastos de un equipo pequeño**: ¿cómo establezco una política de gastos que dé autonomía al equipo sin perder el control del burn? ¿Qué límites, qué procesos de aprobación y qué herramientas uso?

**Módulo 4 — Preparación financiera para levantar ronda**

1. **Qué documentación financiera piden los inversores**: ¿qué documentos preparo para el data room financiero? (modelo financiero, histórico de P&L, extractos bancarios, cap table, contratos de empleados clave).

2. **Las métricas que los VCs miran más**: para mi etapa y tipo de negocio, ¿qué KPIs financieros son los más relevantes para la historia que le cuento a un inversor?

3. **Cómo presento las finanzas en el pitch deck**: ¿qué slide de finanzas incluyo en el deck y qué muestro (no el modelo completo, pero sí las métricas clave y el uso de fondos)?

Dame un plan de acción para ordenar las finanzas de mi startup en las próximas 4 semanas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestionar las finanzas de una startup: runway, burn rate, modelo financiero, unit economics y preparación para levantar ronda.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Setup legal de una startup desde cero',
                'description'      => 'Constituye la empresa, protege la propiedad intelectual y firma los contratos con cofundadores y empleados. Los documentos que una startup necesita antes de hablar con inversores.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en startups y derecho mercantil con experiencia en la estructuración legal de empresas tecnológicas. Necesito ayuda para establecer la base legal correcta de mi startup desde el principio.

**Mi situación:**
- Estado actual: [todavía no he constituido / acabo de constituir / tengo una SL sin estructurar correctamente]
- Número de cofundadores: [solo yo / 2 / 3 o más]
- Tipo de producto o servicio: [SaaS / marketplace / app / producto físico tech / servicios]
- Clientes objetivo: [B2B / B2C / ambos]
- ¿Hay IP relevante que proteger? [sí: describe / no todavía]
- Financiación prevista: [bootstrapped / busco inversores ángel / busco VCs]
- País de operación principal: [España / otra UE]

**Módulo 1 — Constitución de la empresa**

1. **SL vs. SA para startups en España**: ¿cuándo tiene sentido cada forma jurídica? Para la mayoría de startups early-stage, la SL es suficiente; ¿cuándo debo plantearme la SA? ¿Y cuándo tiene sentido incorporar en otro país (Delaware, Estonia, UK, Países Bajos) si busco inversores internacionales?

2. **El capital social mínimo y la estructura inicial de participaciones**: ¿cuánto capital social pongo en la SL inicial? ¿Cómo divido las participaciones entre los cofundadores? ¿Qué errores en la estructura inicial son difíciles de corregir más adelante?

3. **La sede social y el objeto social**: ¿qué pongo como objeto social para que sea suficientemente amplio para mi modelo de negocio actual y el futuro? ¿Hay restricciones o implicaciones fiscales según la sede social?

4. **Los estatutos sociales**: los estatutos por defecto no están pensados para startups. ¿Qué cláusulas debo incluir desde el principio que faciliten la entrada de inversores más adelante (drag along, tag along, preferencia de liquidación, antidilución, derecho de adquisición preferente)?

**Módulo 2 — El pacto de socios entre cofundadores**

El pacto de socios es el documento más importante y más olvidado de las startups tempranas:

1. **Por qué el pacto de socios es obligatorio aunque seáis amigos**: los conflictos entre cofundadores son la primera causa de muerte de startups. ¿Qué situaciones cubre el pacto de socios que los estatutos no cubren?

2. **El vesting de los cofundadores**: ¿en qué consiste el vesting para cofundadores? ¿Cuál es el cliff y el período estándar en España para cofundadores? ¿Qué pasa con las participaciones de un cofundador que se va en el primer año?

3. **Los acuerdos clave que debe incluir el pacto**: cómo se toman las decisiones importantes (unanimidad, mayorías), qué pasa si un cofundador quiere vender sus participaciones, cómo se resuelven los bloqueos en las decisiones clave, qué compromisos de dedicación y no competencia son razonables.

4. **Cuándo revisar el pacto de socios**: el pacto firmado con dos fundadores en un garaje necesita actualizarse antes de la primera ronda de inversión. ¿Qué cambia al entrar inversores en el capital?

**Módulo 3 — Propiedad intelectual**

La IP es el activo más valioso de una startup tecnológica y a menudo está mal protegida:

1. **Cesión de IP de los founders a la empresa**: si el código o el diseño fue creado antes de constituir la empresa o durante un período en que los founders no cobraban, ¿cómo aseguro que esa IP pertenece a la empresa y no a las personas físicas?

2. **Contratos de empleados y contractors con cláusula de cesión de IP**: ¿qué cláusula debo incluir en los contratos para que todo lo desarrollado por empleados y freelancers pertenezca a la empresa? ¿Cuándo esta cláusula puede no ser ejecutable?

3. **Marca registrada**: ¿cuándo tiene sentido registrar la marca? ¿Dónde la registro (EUIPO para Europa, OEPM para España, USPTO para EEUU)? ¿Qué clases debo registrar?

4. **Patentes vs. secreto industrial**: ¿cuándo tiene sentido patentar en una startup tecnológica y cuándo el secreto industrial protege mejor la ventaja competitiva?

**Módulo 4 — Contratos esenciales para operar**

1. **Condiciones de servicio y política de privacidad**: ¿qué deben incluir mínimamente para cumplir con el RGPD si tengo usuarios europeos? ¿Puedo usar templates o necesito que un abogado los redacte?

2. **Contratos de empleados**: ¿qué tipo de contrato uso para los primeros empleados? ¿Hay diferencias importantes entre un contrato de prácticas, un contrato indefinido y un contrato a término?

3. **Contratos con clientes**: para B2B, ¿qué términos y condiciones mínimos debo tener? ¿Cuándo uso DPA (Data Processing Agreement) y cuándo es obligatorio bajo el RGPD?

Dame la lista priorizada de los 10 documentos legales que debo tener firmados antes de hablar con mi primer inversor.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Establecer la base legal de una startup: constitución, pacto de socios, propiedad intelectual y contratos esenciales.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'El primer equipo de Customer Success en una startup',
                'description'      => 'Monta el customer success de una startup: cuándo contratar al primer CSM, qué procesos implementar y cómo escalar el éxito del cliente cuando el equipo es de 2 personas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia en construir equipos de CS desde cero en startups SaaS. Necesito ayuda para montar la función de customer success en mi startup, que hasta ahora ha sido gestionada directamente por los founders.

**Mi situación:**
- Tipo de producto: [SaaS B2B / marketplace / plataforma de servicios]
- Número de clientes activos: [número]
- ACV (Annual Contract Value) promedio: [rango]
- Churn actual: [porcentaje mensual o anual, o "no lo tengo medido"]
- El equipo actual de CS: [solo los founders / un CSM / nadie específico]
- Principal problema de retención: [clientes que no adoptan el producto / clientes que se van sin avisar / clientes que tienen problemas de soporte recurrentes / escaladas al CEO]
- Revenue actual: [MRR/ARR]

**Módulo 1 — Cuándo es el momento de contratar el primer CSM**

Los founders no pueden gestionar customers indefinidamente, pero tampoco deben contratar CS demasiado pronto:

1. **Las señales de que es el momento**: ¿qué indicadores me dicen que necesito un CSM dedicado? (número de clientes que supera lo que los founders pueden gestionar, churn que empieza a impactar el crecimiento, tiempo de los founders en soporte que supera el 30%, clientes enterprise que requieren dedicación sistemática).

2. **El perfil del primer CSM**: el primer CSM no debe ser un gestor de cuentas puro ni un soporte técnico puro, sino un híbrido. ¿Qué habilidades son críticas? ¿Qué background funciona mejor para el primer CSM en una startup en mi etapa?

3. **Lo que el primer CSM no debe hacer**: el primer CSM en una startup no puede depender de playbooks perfectos, herramientas sofisticadas o procesos definidos; debe saber operar en la ambigüedad. ¿Cómo evalúo esto en el proceso de selección?

**Módulo 2 — Los procesos mínimos de CS para una startup**

Con un equipo de 1-2 personas, los procesos deben ser simples pero efectivos:

1. **El onboarding de cliente**: diseña el proceso de onboarding para mis primeros 50 clientes que sea a la vez escalable y personalizado. ¿Qué etapas tiene, cuánto dura, qué hitos de activación busco y cuándo considero que el onboarding ha terminado con éxito?

2. **El health score manual**: sin herramientas de CS sofisticadas, ¿cómo construyo un health score simple para conocer el estado de cada cliente? ¿Qué señales uso (frecuencia de login, tickets de soporte, engagement en emails, uso de features clave, NPS) y cómo las combino en un semáforo verde/amarillo/rojo?

3. **El QBR (Quarterly Business Review) adaptado a startups**: ¿tiene sentido hacer QBRs con clientes en una startup temprana? ¿Para qué segmento de clientes y en qué formato? ¿Qué agenda tiene un QBR efectivo de 45 minutos?

4. **El proceso de detección temprana de churn**: ¿qué señales de comportamiento debo monitorizar para detectar un cliente en riesgo con 60-90 días de antelación? ¿Qué intervención funciona para cada tipo de señal?

**Módulo 3 — Herramientas para un equipo de CS pequeño**

1. **El stack mínimo de CS**: ¿qué herramientas son realmente necesarias con 1-2 personas de CS y menos de 100 clientes? (CRM de clientes, herramienta de soporte, analytics de producto, herramienta de comunicación). ¿Cuándo tiene sentido invertir en una plataforma de CS dedicada como Gainsight, ChurnZero o Totango?

2. **El CRM de CS en Notion o Airtable**: dame la estructura de una base de datos simple en Notion o Airtable para gestionar la cartera de clientes con los campos esenciales (salud del cliente, próxima acción, renovación, historial de interacciones clave).

**Módulo 4 — Métricas de CS para una startup**

1. ¿Cuáles son las métricas de CS que debo reportar al CEO y al board desde el principio? (GRR, NRR, churn por segmento, NPS, tiempo de primer valor en onboarding).

2. ¿Cómo presento estas métricas de forma que cuenten la historia del negocio y no sean solo tablas de números?

3. ¿Qué OKRs tiene sentido para un equipo de CS de una startup en fase de crecimiento temprano?

Dame el plan de 30-60-90 días para el primer CSM que contrate, con los entregables concretos de cada fase.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Montar la función de Customer Success en una startup: primer CSM, onboarding, health score, herramientas y métricas con equipo pequeño.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Servicios freelance para startups: posicionamiento y captación',
                'description'      => 'Las startups son los mejores clientes para freelancers. Necesitan todo, tienen urgencia y valoran la calidad. Los servicios más demandados y cómo posicionarte para conseguirlos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de negocio freelance con experiencia en el ecosistema startup. Quiero enfocar mi práctica freelance hacia startups como clientes principales y necesito ayuda para posicionarme, entender qué servicios demandan más y construir un pipeline de clientes en el ecosistema startup.

**Mi perfil:**
- Especialidad principal: [desarrollo / diseño / marketing / contenidos / product / datos / legal / finanzas / otro]
- Experiencia total: [años en el sector]
- Experiencia previa con startups: [he trabajado en startups / he tenido clientes startup / ninguna]
- Tarifa actual o deseada: [rango por hora o por proyecto]
- Modelo de trabajo: [remoto / presencial / híbrido]
- Mis mejores habilidades concretas: [lista las 3-5 cosas en las que eres mejor]
- Principal duda: [no sé cómo llegar a startups / no sé qué servicios ofrecer / no sé cómo cobrar / cómo diferenciarse de la competencia]

**Módulo 1 — Por qué las startups son buenos clientes (y por qué no)**

Antes de enfocarme en startups, necesito entender el perfil real de este tipo de cliente:

**Ventajas de trabajar con startups:**
- Toman decisiones rápido (hablas directamente con el founder)
- Valoran la calidad sobre el precio en servicios que impactan el crecimiento
- Tienen necesidades urgentes y continuas (hay trabajo recurrente si lo haces bien)
- Dan visibilidad y referencias si tu trabajo es bueno
- Son clientes emocionantes con los que aprendes al ritmo del mercado

**Riesgos de trabajar con startups:**
- Cash flow frágil (algunas no pueden pagar a tiempo o pagan con retraso)
- Scope creep frecuente (el founder siempre quiere más de lo acordado)
- Alta mortalidad (el cliente puede dejar de existir a mitad del proyecto)
- Expectativas poco realistas sobre plazos y resultados

¿Cómo identifico startups que son buenos clientes vs. las que serán un problema? Dame las señales de filtrado.

**Módulo 2 — Qué servicios demandan más las startups**

Según mi especialidad, explícame qué servicios específicos tienen más demanda en startups de distintas etapas:

**Para desarrollo:**
- MVP development (desde cero en pocas semanas)
- CTO fraccionado para startups sin perfil técnico en el equipo
- Integraciones con APIs y terceros
- Infraestructura y DevOps para escalar

**Para diseño:**
- Diseño de MVP y primeras versiones del producto
- Brand identity desde cero
- Landing pages de conversión
- Pitch decks para inversores

**Para marketing:**
- Estrategia de lanzamiento y growth hacking
- SEO y contenidos para generar tráfico orgánico
- Performance marketing inicial (Google Ads, Meta)
- Community management en fases tempranas

**Para finanzas:**
- Financial modeling para inversores
- CFO fraccionado
- Preparación de documentación para fundraising

**Para legal:**
- Contratos de cofundadores y pactos de socios
- Términos y condiciones y privacidad para productos digitales
- Due diligence de IP

¿Cuál de estos servicios tiene mayor demanda y menor oferta de calidad en el mercado español ahora mismo? ¿Y cuál tiene la mejor relación entre precio que el mercado paga y tiempo que requiere?

**Módulo 3 — Cómo llegar a startups como clientes**

1. **El ecosistema startup en España y cómo entrar**: ¿qué comunidades, eventos, aceleradoras e incubadoras debo conocer para estar presente donde están los founders? (South Summit, Startup Grind, IE/IESE eventos, aceleradoras como Lanzadera, Wayra, Seedrocket, SeedCapital).

2. **Las aceleradoras y fondos como fuente de clientes**: muchas aceleradoras recomiendan proveedores de confianza a sus startups. ¿Cómo me convierto en proveedor recomendado de una aceleradora o fondo de inversión?

3. **LinkedIn como canal principal**: ¿qué tipo de contenido en LinkedIn genera inbound de founders? Dame 10 ideas de posts para los próximos dos meses que demuestren mi especialidad en el contexto de startups.

4. **El programa de descuento para startups temprana**: ¿tiene sentido ofrecer precios especiales para startups pre-revenue a cambio de testimonial, referencia o equity? ¿Cómo estructuro este acuerdo?

**Módulo 4 — Modelo de negocio para trabajar con startups**

1. **Retainer vs. proyecto**: ¿qué modelo funciona mejor con startups? ¿Por qué el retainer mensual es más estable pero el proyecto es más fácil de vender al principio?

2. **El contrato con startups**: ¿qué cláusulas debo incluir siempre al trabajar con startups para protegerme del riesgo de impago o de cierre de la empresa?

3. **Cobrar en equity**: ¿cuándo tiene sentido aceptar equity en lugar de (o además de) dinero? ¿Cómo estructuro un acuerdo de equity por servicios? ¿Qué porcentaje es razonable pedir a cambio de reducir la tarifa?

Termina con el plan de acción de las próximas 8 semanas para conseguir mis primeros 3 clientes startup.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Posicionarse como freelance especializado en startups: qué servicios ofrecer, cómo llegar al ecosistema y cómo estructurar el modelo de negocio.',
                'vote_score'       => 42,
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
