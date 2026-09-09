<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills207Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Growth hacking en startups',
                'description'       => 'Las tácticas de crecimiento que no requieren presupuesto de marketing: el loop viral, el referral program, el SEO de producto y los experimentos de growth que los mejores equipos de marketing en startups han documentado.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en growth marketing con experiencia en startups en etapa temprana y de crecimiento acelerado. Necesito tu ayuda para diseñar e implementar una estrategia de growth hacking que genere crecimiento sostenido sin depender de un presupuesto de publicidad masivo.

Mi contexto:
- Producto o servicio: [describe brevemente qué ofreces y a quién]
- Estado de la startup: [pre-lanzamiento / primeros usuarios / creciendo / buscando escala]
- Métricas actuales: [usuarios activos, tasa de conversión, retención, si las tienes]
- Canales de adquisición actuales: [qué estás usando hoy]
- Presupuesto de marketing disponible: [aproximado mensual]
- Mayor palanca de crecimiento sin explotar: [referidos, contenido, SEO, comunidad, integraciones, etc.]

Con ese contexto, dame:

1. EL LOOP DE CRECIMIENTO: IDENTIFICAR EL MÍO
Explícame qué es un growth loop y cómo es distinto a un funnel: el loop es circular (cada usuario adquirido puede generar el siguiente usuario) mientras que el funnel es lineal y se agota. Ayúdame a identificar el growth loop natural de mi producto: el loop viral (el uso del producto expone el producto a nuevos usuarios), el loop de contenido (los usuarios generan contenido que trae nuevos usuarios), el loop de datos (más usuarios generan mejores datos que mejoran el producto y atraen más usuarios), o el loop de ventas. Dame el diagrama del loop específico para mi modelo de negocio y los friction points que debo eliminar para que el loop gire más rápido.

2. REFERRAL PROGRAM: DISEÑO Y MÉTRICAS
¿Cómo diseño un programa de referidos que realmente funcione? Dame el proceso completo: cuándo tiene sentido lanzar un referral program (necesitas un producto que la gente quiera recomendar antes), la mecánica del incentivo (bilateral vs. unilateral, descuento vs. crédito vs. cash vs. acceso premium), el diseño del flujo de referido para maximizar la conversión, y cómo calcular si el programa es rentable (LTV del usuario referido vs. coste del incentivo). Dame ejemplos de referral programs que han generado crecimiento exponencial (Dropbox, Airbnb, Uber) y qué los hizo funcionar específicamente.

3. SEO DE PRODUCTO Y PROGRAMMATIC SEO
¿Cómo uso el SEO como canal de adquisición escalable sin un equipo de contenido? Explícame el SEO de producto (integrar el SEO en el producto para que las páginas generadas por usuarios sean indexadas y traigan tráfico orgánico), el programmatic SEO (generar automáticamente miles de páginas de alta calidad a partir de datos estructurados), y el long tail SEO para startups (capturar búsquedas muy específicas que tienen menos competencia). Dame ejemplos de cómo startups como Zapier, Canva o Tripadvisor han usado estas técnicas y cómo puedo replicar el enfoque en mi caso.

4. VIRALIDAD DE PRODUCTO: AÑADIR MECÁNICAS VIRALES SIN FORZARLO
¿Cómo construyo viralidad en el producto de forma que sea natural y no forzada? Dame los mecanismos de viralidad que puedo explorar: el invite-only que crea escasez y deseo (Gmail, Clubhouse), el sharing nativo que hace que el uso del producto genere exposición pública (Spotify Wrapped, los informes de Canva), los widgets embebables que llevan el producto a otros sitios (Typeform, Calendly), y el cobranding o powered-by que identifica el producto en cada uso externo. Cuál de estos aplica mejor a mi caso y cómo lo implemento.

5. GROWTH EXPERIMENTS: EL PROCESO DE EXPERIMENTACIÓN RÁPIDA
¿Cómo organizo el proceso de growth hacking como un sistema de experimentos? Dame el framework ICE (Impact, Confidence, Ease) o similar para priorizar experimentos de growth, el proceso de diseño del experimento (hipótesis, métrica principal, criterio de éxito, duración mínima), la gestión del backlog de ideas de growth, y cómo documentar los aprendizajes para que el equipo no repita experimentos fallidos. Dame también los tipos de experimentos de growth más frecuentes en empresas similares a la mía.

6. COMUNIDAD COMO CANAL DE CRECIMIENTO
¿Cómo construyo una comunidad de usuarios que se convierta en un motor de crecimiento? Dame la estrategia de comunidad para startups: el canal inicial (Discord, Slack, LinkedIn, Reddit, foro propio), cómo llegar a los primeros cien miembros comprometidos, las mecánicas de comunidad que generan retención y evangelismo, y cómo la comunidad alimenta el crecimiento (los miembros reclutan a nuevos miembros, el contenido generado en la comunidad atrae búsquedas orgánicas, los power users dan feedback que mejora el producto). Dame ejemplos de startups que han construido crecimiento sobre comunidad.

7. LAS MÉTRICAS DE GROWTH QUE REALMENTE IMPORTAN
¿Qué métricas debo monitorizar para saber si mi estrategia de growth está funcionando? Dame el dashboard de growth para una startup: el coeficiente viral (K-factor) y cómo calcularlo, el time-to-payback del CAC, la tasa de retención por cohortes (la métrica que distingue el crecimiento real del crecimiento inflado), el NPS como predictor de viralidad, y la diferencia entre North Star Metric (la métrica que mejor refleja el valor entregado) y las métricas de vanidad que distraen. Por qué la retención es el fundamento de cualquier estrategia de growth y cómo mejorarla antes de acelerar la adquisición.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar una estrategia de growth hacking con loops virales, referral programs y SEO de producto.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'MVP: construir lo mínimo que valida la hipótesis',
                'description'       => 'Construye el producto mínimo que prueba si el negocio funciona: las decisiones de qué incluir y qué dejar fuera, las herramientas no-code que aceleran el primer MVP y el criterio técnico que evita construir lo que nadie necesita.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product development en etapas tempranas de startup con experiencia en construir MVPs que validan hipótesis de negocio sin desperdiciar recursos de ingeniería. Necesito tu ayuda para definir y construir el MVP de mi proyecto: el mínimo que necesito construir para aprender si el negocio funciona antes de invertir meses en el producto completo.

Mi contexto:
- Idea o problema que quiero resolver: [describe el problema y la solución que tienes en mente]
- Hipótesis principal a validar: [qué es lo que más necesitas saber si es verdad o no]
- Usuario objetivo: [quién tiene el problema y cuánto le duele]
- Recursos disponibles: [tiempo, equipo de desarrollo, presupuesto]
- Fecha límite o urgencia: [tienes un plazo?]
- Qué ya tienes construido o validado: [si tienes algo]

Con ese contexto, dame:

1. LA HIPÓTESIS DEL NEGOCIO: QUÉS LO QUE REALMENTE NECESITAS VALIDAR
Antes de hablar de lo que construir, ayúdame a formular con precisión la hipótesis de negocio que necesito validar: la hipótesis del problema (¿el problema que creo que existe realmente existe y duele lo suficiente?), la hipótesis de la solución (¿mi solución resuelve el problema mejor que las alternativas?), y la hipótesis del negocio (¿hay un modelo de negocio viable?). Para cada hipótesis, dame la pregunta exacta que necesito responder y el tipo de experimento que la valida más rápido (entrevista, encuesta, demo, prototipo, o MVP funcional).

2. QUÉ INCLUIR Y QUÉ DEJAR FUERA DEL MVP
¿Cómo decido qué construir y qué no? Dame el proceso de definición del scope del MVP: la distinción entre los requisitos que directamente validan la hipótesis (deben estar), los que mejoran la experiencia pero no son necesarios para la validación (se pueden añadir después), y los que son nice-to-have que el equipo quiere construir pero que no aportan aprendizaje (eliminados). Dame también los errores más comunes en la definición del MVP: el MVP que es demasiado grande y tarda meses, el MVP que es tan mínimo que no enseña nada, y el MVP que resuelve un problema diferente al que el cliente tiene.

3. TIPOS DE MVP SEGÚN LO QUE NECESITAS VALIDAR
¿Qué tipo de MVP debo construir para mi caso específico? Dame el análisis de los diferentes tipos de MVP y cuándo usar cada uno: el Concierge MVP (el proceso es manual, el equipo hace a mano lo que el producto haría automáticamente), el Wizard of Oz MVP (parece automatizado pero hay un humano detrás), el Landing Page MVP (prueba si hay demanda antes de construir nada), el Prototype MVP (interfaz sin backend para validar el diseño del flujo), el Piecemeal MVP (combina herramientas existentes para simular el producto), y el MVP técnico mínimo (código real pero con funcionalidades reducidas al mínimo). Cuál es el mejor para mi hipótesis.

4. HERRAMIENTAS NO-CODE QUE ACELERAN EL MVP
¿Qué herramientas no-code o low-code puedo usar para construir el MVP más rápido? Dame el mapa de herramientas por caso de uso: para landing pages y formularios de validación (Webflow, Carrd, Notion, Typeform), para apps web sin código (Bubble, Glide, Softr, AppGyver), para automatizaciones y lógica de negocio (Make/Integromat, Zapier, n8n), para bases de datos y backend (Airtable, Supabase, Firebase), para pagos (Stripe con Checkout, Gumroad), y para comunidad o membresías (Notion, Circle, Memberstack). Para mi caso específico, cuál combinación me permite validar la hipótesis en menos tiempo.

5. EL CRITERIO DE ÉXITO DEL MVP: QUÉ RESULTADOS VALIDAN O INVALIDAN
¿Cómo sé si el MVP está funcionando o no? Ayúdame a definir el criterio de éxito antes de construir el MVP, no después: la métrica que, si se cumple, confirma la hipótesis (usuarios activos, conversión, retención, NPS, disposición a pagar), el umbral concreto que define el éxito (no "muchos usuarios" sino "50 usuarios activos que usan el producto al menos 3 veces por semana en el primer mes"), y el criterio de pivote: cuándo los datos me dicen claramente que debo cambiar de dirección. Por qué definir el criterio de éxito antes de construir es crítico para aprender y no para confirmar sesgos.

6. EL PROCESO DE CONSTRUCCIÓN DEL MVP: VELOCIDAD SIN CAOS
¿Cómo organizo el proceso de construcción del MVP para ir rápido sin crear deuda técnica que paralice el crecimiento? Dame las decisiones técnicas clave en la construcción del MVP: cuándo usar frameworks y herramientas que permiten iterar rápido aunque no sean perfectamente escalables (Next.js, Laravel, Django, Firebase vs. arquitecturas distribuidas prematuras), cómo manejar la deuda técnica del MVP cuando el producto valida y empieza a crecer, y qué partes del código del MVP merece la pena hacer bien desde el principio porque serán la base del producto real.

7. DESPUÉS DEL MVP: CUÁNDO ESCALAR Y CUÁNDO PIVOTAR
¿Cómo interpreto los resultados del MVP para decidir qué hacer a continuación? Dame el framework de decisión post-MVP: las señales de que el MVP ha validado la hipótesis y es momento de escalar (retención elevada, usuarios que pagan sin presión, usuarios que recomiendan el producto, petición de features adicionales), las señales de que necesito pivotar (alta adquisición pero nula retención, usuarios que no vuelven, disposición a pagar baja, feedback que apunta a un problema diferente al que creía resolver), y cuándo el MVP simplemente necesita más tiempo para generar suficientes datos antes de decidir.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Definir y construir el MVP que valida la hipótesis de negocio con el mínimo esfuerzo de desarrollo.',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de producto en la etapa pre-product/market fit',
                'description'       => 'El diseñador en una startup temprana: las decisiones de diseño rápido que no sacrifican la experiencia, el design thinking aplicado con recursos mínimos y el proceso de iterar el diseño basándose en el feedback de los primeros usuarios.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en diseño de producto para startups en etapas tempranas con experiencia en mover el diseño a la velocidad que requiere la búsqueda del product-market fit. Necesito tu ayuda para diseñar el producto en la fase más incierta: cuando todavía no sabemos exactamente qué necesita el usuario y necesitamos aprender rápido sin construir de más.

Mi contexto:
- Producto y etapa: [describe el producto y en qué fase estás: idea, MVP lanzado, iterando]
- Recursos de diseño disponibles: [soy el único diseñador / hay un equipo pequeño / el fundador hace el diseño]
- Usuarios actuales: [cuántos tienes, cómo son, qué feedback has recibido]
- Mayor reto de diseño ahora mismo: [definir el flujo principal, mejorar la retención, rediseñar algo que no funciona, etc.]
- Herramientas de diseño que usas: [Figma, Sketch, herramientas no-code, etc.]

Con ese contexto, dame:

1. EL ROL DEL DISEÑO EN LA BÚSQUEDA DEL PRODUCT-MARKET FIT
Explícame cómo debe funcionar el diseño en una startup pre-PMF de forma distinta a como funciona en una empresa establecida: la diferencia entre optimizar un diseño que ya funciona y diseñar para descubrir qué funciona, el peligro del diseño demasiado pulido que ralentiza el aprendizaje (los usuarios dan feedback diferente a un prototipo lo-fi que a un diseño de alta fidelidad), y cuándo invertir en calidad de diseño vs. cuándo lo suficientemente bueno es suficiente. Qué tipos de decisiones de diseño son costosas de revertir y cuáles son baratas.

2. DESIGN SPRINTS Y PROTOTIPOS RÁPIDOS
¿Cómo aplico el design sprint o técnicas de prototipado rápido para aprender en días en lugar de semanas? Dame el proceso de design sprint adaptado a una startup pequeña: cómo comprimirlo a dos o tres días cuando no tienes un equipo de cinco personas, las técnicas de prototipado que generan el aprendizaje máximo con el esfuerzo mínimo (paper prototyping, prototipos de Figma sin interacciones reales, Wizard of Oz con una presentación de Keynote), y cómo organizar el test de usuario al final del sprint cuando no tienes presupuesto para un lab de usabilidad.

3. INVESTIGACIÓN DE USUARIO CON RECURSOS MÍNIMOS
¿Cómo hago investigación de usuario cuando no tengo ni presupuesto ni tiempo? Dame el toolkit del diseñador de startup para la investigación: las entrevistas de usuario en profundidad (cinco entrevistas revelan el 80% de los insights), cómo reclutar usuarios para las entrevistas cuando no tienes base de usuarios todavía, el story mapping como técnica para entender el viaje del usuario antes de diseñar la solución, el análisis de la competencia como sustituto parcial de la investigación primaria cuando vas muy rápido, y cómo convertir las conversaciones de ventas y soporte en investigación de usuario continua.

4. DISEÑO ITERATIVO BASADO EN FEEDBACK DE PRIMEROS USUARIOS
¿Cómo integro el feedback de los primeros usuarios en el proceso de diseño de forma sistemática? Dame el proceso de iteración de diseño en etapa temprana: cómo recoger feedback de diseño de los usuarios (qué preguntar, cómo observar el uso del producto, herramientas de registro de sesión como Hotjar o FullStory para los primeros usuarios), cómo priorizar el feedback cuando cada usuario pide algo diferente (buscar los patrones, no las peticiones individuales), y cómo decidir qué rediseñar y qué dejar para después en el backlog de mejoras.

5. DISEÑO DEL FLUJO PRINCIPAL: EL JTBD QUE EL DISEÑO DEBE SERVIR
¿Cómo diseño el flujo principal del producto alrededor del Job to Be Done del usuario? Ayúdame a clarificar el JTBD principal de mi producto y a usarlo como guía de diseño: la diferencia entre features y Jobs (el usuario no quiere un calendario, quiere coordinar una reunión sin esfuerzo), cómo el JTBD informa las decisiones de diseño en cada pantalla, y cómo eliminar todo el diseño que no contribuye directamente al JTBD principal. Dame el proceso de revisar el diseño existente a través de la lente del JTBD para identificar lo que sobra y lo que falta.

6. SISTEMA DE DISEÑO MÍNIMO PARA STARTUPS
¿Cómo construyo un sistema de diseño mínimo que me permita iterar rápido sin caer en el caos de la inconsistencia? Dame el mínimo viable de sistema de diseño para una startup en etapa temprana: los tokens de diseño que debo definir desde el principio (colores, tipografía, espaciado), los componentes reutilizables que vale la pena crear desde el día uno (botón, input, card, modal), cuándo un sistema de diseño completo es prematuro y cuándo la inconsistencia del diseño empieza a ser un problema real, y cómo construir sobre un design system existente (Material, Ant Design, Radix) para no empezar desde cero.

7. MÉTRICAS DE DISEÑO EN LA ETAPA TEMPRANA
¿Cómo mide el diseño si está contribuyendo al crecimiento del producto en etapa temprana? Dame las métricas que debo monitorizar como diseñador en una startup pre-PMF: la tasa de completado del flujo principal (¿cuántos usuarios llegan al momento de valor?), el time-to-value (¿cuánto tarda el usuario en experimentar el beneficio del producto por primera vez?), la tasa de retención como indicador indirecto de la calidad del diseño de la experiencia, y los indicadores cualitativos del diseño (el feedback sobre confusión, el número de preguntas al soporte sobre cómo hacer algo) que señalan problemas de diseño antes de que los datos cuantitativos los confirmen.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar y iterar el producto de una startup temprana de forma rápida y basada en el feedback de los primeros usuarios.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Founder-led sales: el fundador que vende',
                'description'       => 'Los primeros clientes los consigue el propio fundador: las técnicas de venta consultiva para quien no tiene experiencia comercial, el proceso de descubrimiento y el cierre cuando vendes tu propia visión.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en ventas para fundadores de startups con experiencia en enseñar a personas sin formación comercial a conseguir sus primeros clientes. Necesito tu ayuda para desarrollar las habilidades de venta que necesito como fundador para conseguir los primeros clientes de mi startup: no quiero ser un vendedor agresivo, quiero aprender a vender mi visión de forma auténtica.

Mi contexto:
- Producto o servicio: [describe brevemente qué vendes y a quién]
- Mi perfil: [fundador técnico / no técnico, con o sin experiencia comercial previa]
- Clientes objetivo: [tipo de empresa, cargo del decisor, sector]
- Estado actual: [sin clientes todavía / primeros clientes / quiero sistematizar el proceso]
- Modelo de negocio: [B2B SaaS, servicio, marketplace, etc.]
- Mayor dificultad con las ventas: [miedo al rechazo, no sé cómo estructurar la conversación, dificultad para cerrar, etc.]

Con ese contexto, dame:

1. POR QUÉ EL FUNDADOR ES EL MEJOR COMERCIAL EN LA FASE TEMPRANA
Explícame por qué en la etapa pre-product/market fit el fundador debe vender él mismo y no delegar en un comercial: la profundidad del conocimiento del problema que tiene el fundador, la credibilidad que genera ante el cliente hablar con quien toma las decisiones de producto, y el aprendizaje que las conversaciones de ventas generan sobre el cliente que es imposible de obtener de otra forma. Por qué contratar un comercial antes de que el fundador haya validado el proceso de ventas es uno de los errores más comunes y más costosos en startups tempranas.

2. LA VENTA CONSULTIVA: ESCUCHAR ANTES DE VENDER
¿Cómo hago la conversación de ventas sin parecer un vendedor? Dame el proceso de la venta consultiva aplicada a la founder-led sales: las preguntas de descubrimiento que revelan el problema real del cliente (basadas en el framework SPIN: Situation, Problem, Implication, Need-payoff), por qué hacer preguntas es más poderoso que presentar features, cómo usar lo que el cliente te dice para personalizar el pitch en tiempo real, y cómo cerrar la brecha entre el problema del cliente y la solución que ofreces de forma que el cliente sienta que ha llegado a la conclusión solo.

3. EL OUTREACH INICIAL: CÓMO CONSEGUIR LA PRIMERA CONVERSACIÓN
¿Cómo consigo que el tipo de empresa que quiero como cliente me dé la primera reunión? Dame el proceso de prospección para un fundador: cómo identificar a los primeros diez clientes objetivo usando LinkedIn y otras fuentes, el cold email que funciona para fundadores (breve, específico, con el problema del cliente en el asunto, no un pitch de producto), el warm outreach a través de la red personal del fundador (por qué es diez veces más efectivo que el frío), y cómo aprovechar los eventos del sector para conseguir reuniones de forma natural.

4. LA DEMO DEL PRODUCTO: QUE EL CLIENTE VEA SU FUTURO
¿Cómo hago una demo que convenza sin ser una presentación de features? Dame la estructura de la demo de startup que convierte: la apertura que establece el contexto del cliente antes de mostrar nada, el flujo de la demo que sigue el viaje del cliente en lugar del menú de features, cómo personalizar la demo en función del descubrimiento previo, el momento de la demo donde el cliente debe decir "esto es exactamente lo que necesitaba", y cómo manejar las preguntas sobre features que no existen todavía sin perder credibilidad.

5. MANEJO DE OBJECIONES DEL CLIENTE TEMPRANO
¿Cómo respondo a las objeciones del cliente sin que la conversación se convierta en un debate? Dame las respuestas a las cinco objeciones más frecuentes que enfrenta un fundador cuando vende: "ya tenemos algo que hace algo parecido", "no tenemos presupuesto ahora", "somos demasiado pequeños (o grandes) para esto", "necesitamos hablar con el equipo de IT / el comité de compras", y "vuélvete a llamar en seis meses". Para cada objeción dame la respuesta que avanza la conversación sin generar presión.

6. EL CIERRE: CÓMO PEDIR EL COMPROMISO SIN QUE SEA INCÓMODO
¿Cómo cierro la venta siendo un fundador que no quiere ser agresivo? Dame las técnicas de cierre que funcionan para founders: el cierre consultivo (resumir los problemas que has entendido y preguntar si la solución propuesta los resuelve), los next steps concretos al final de cada reunión (no "me dices algo" sino "¿cuándo puedes hablar con tu equipo y cuándo nos reunimos para el siguiente paso?"), cómo distinguir el prospect genuinamente interesado del que está siendo educado, y cuándo decidir que un prospect no va a convertir y es mejor dejar de invertir tiempo.

7. DEL FOUNDER-LED SALES AL PRIMER COMERCIAL: CUÁNDO Y CÓMO ESCALAR
¿Cuándo es el momento de contratar el primer comercial y cómo le transmito el proceso que he desarrollado? Dame los criterios para contratar el primer sales: el proceso de ventas repetible y documentado (si no lo tienes documentado, no estás listo para contratar), el perfil del primer commercial hire (AE que también hace hunting vs. BDR, los errores de contratar demasiado senior), y cómo documentar el playbook de ventas que has construido como fundador para que el primer comercial pueda replicar lo que a ti te funciona.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Desarrollar las habilidades de venta consultiva para que el fundador consiga los primeros clientes de la startup.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product-market fit: cómo medirlo y encontrarlo',
                'description'       => 'Define y mide el product-market fit de tu startup: el framework de Sean Ellis, las métricas de retención que señalan PMF, los indicadores cualitativos y el proceso de iteración que acelera la búsqueda.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product management en startups tempranas con experiencia en ayudar a equipos a encontrar y medir el product-market fit. Necesito tu ayuda para entender si mi producto tiene PMF o no, cómo medirlo con datos reales, y qué proceso de iteración seguir si todavía no lo he encontrado.

Mi contexto:
- Producto: [describe qué hace y a quién va dirigido]
- Estado actual: [usuarios, métricas de retención si las tienes, tiempo en el mercado]
- Señales actuales de PMF o falta de él: [retención baja, usuarios que no vuelven, usuarios que aman el producto, etc.]
- Lo que ya has probado para mejorar la retención o el engagement: [si has iterado]
- Recursos del equipo: [tamaño del equipo, capacidad de iteración]

Con ese contexto, dame:

1. QUÉ ES EL PRODUCT-MARKET FIT Y POR QUÉ ES TAN DIFÍCIL DE MEDIR
Explícame la definición de PMF más allá del cliché: la combinación entre un problema real con suficiente intensidad de dolor, una solución que lo resuelve mejor que las alternativas, y un segmento de mercado suficientemente grande. Por qué el PMF es un estado continuo y no un evento discreto, por qué muchos fundadores creen tener PMF cuando en realidad tienen entusiasmo inicial, y cuál es la señal más fiable de PMF real: la retención que no decae con el tiempo y el crecimiento orgánico que no requiere gasto constante en adquisición.

2. EL TEST DE SEAN ELLIS: LA PREGUNTA DE LOS 40%
¿Cómo aplico el framework de Sean Ellis para medir el PMF? Explícame la encuesta de PMF: la pregunta exacta que debes hacerle a tus usuarios activos ("¿Cómo te sentirías si mañana no pudieras usar [producto]?"), las opciones de respuesta y por qué el umbral del 40% de "muy decepcionado" es el indicador clave, cómo interpretar los resultados cuando estás por debajo del 40% (qué segmento está más cercano al PMF, qué beneficio mencionan los "muy decepcionados"), y las limitaciones del test (el sesgo de selección, el sesgo del tiempo de activación). Dame el template de encuesta completo que puedo enviar a mis usuarios.

3. MÉTRICAS DE RETENCIÓN QUE REVELAN EL PMF
¿Qué métricas de retención debo monitorizar para medir el PMF de forma cuantitativa? Dame el análisis completo: las curvas de retención por cohortes (si la curva se estabiliza en lugar de llegar a cero, hay señal de PMF), el DAU/MAU como indicador de engagement habitual, el tiempo entre sesiones como medida de hábito, la retención de día 1, día 7 y día 30 como benchmark por categoría de producto, y cómo la retención varía por canal de adquisición (los usuarios de referido suelen retener mucho mejor que los de paid). Dame los benchmarks de retención por tipo de producto para que pueda comparar mis métricas.

4. SEÑALES CUALITATIVAS DE PMF: LO QUE DICEN LOS USUARIOS
¿Qué señales cualitativas indican que estoy cerca o lejos del PMF? Dame los indicadores cualitativos de PMF: los usuarios que protestan si quitas una feature, los que usan el producto de formas que no habías anticipado, los que recomiendan el producto sin que se lo pidas, el lenguaje que usan para describir el producto (si lo describen usando el nombre genérico de la categoría es buena señal), y las señales de anti-PMF: los usuarios que usan el producto una vez por obligación y no vuelven, el feedback que siempre apunta al mismo problema no resuelto, y los churn reasons que siempre son la misma objeción.

5. EL PROCESO DE ITERACIÓN PARA ENCONTRAR EL PMF
¿Cómo itero el producto y el posicionamiento para encontrar el PMF si todavía no lo tengo? Dame el proceso de búsqueda del PMF: la segmentación de los usuarios actuales para encontrar el segmento con mayor retención (el segmento más cerca del PMF, aunque sea pequeño), el análisis del comportamiento de los mejores usuarios para entender qué hacen diferente (el "happy path" que lleva al momento de valor), y la estrategia de narrowing (estrechar el segmento objetivo hasta encontrar el grupo para el que el producto es perfecto antes de ampliar).

6. CUÁNDO PIVOTAR VS. CUÁNDO PERSEVERAR
¿Cómo sé si debo pivotar el producto, el segmento, o el modelo de negocio? Dame el framework de decisión de pivote: las señales cuantitativas que justifican un pivote (retención cercana a cero en toda cohorte, cero crecimiento orgánico, alta adquisición pero nula conversión a usuario activo), las señales que justifican perseverar (retención estable aunque baja en un segmento pequeño, crecimiento boca a boca aunque lento, feedback consistentemente positivo de un perfil específico de usuario), y los tipos de pivote más comunes en startups (pivote de segmento, pivote de problema, pivote de tecnología, pivote de canal).

7. ACELERAR LA BÚSQUEDA DEL PMF: EL PROCESO QUE FUNCIONA
Dame el proceso sistemático que acelera la búsqueda del PMF para un equipo pequeño: la cadencia de entrevistas de usuario semanal que mantiene el equipo cerca del cliente mientras itera, el proceso de síntesis de insights que convierte las conversaciones en hipótesis de producto, el ritmo de iteración que es suficientemente rápido para aprender pero no tan rápido que no da tiempo a medir el impacto de los cambios, y cómo comunicar al equipo y a los inversores el progreso en la búsqueda del PMF cuando los resultados todavía no son concluyentes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Medir el product-market fit con datos y señales cualitativas, y diseñar el proceso de iteración para encontrarlo.',
                'vote_score'        => 49,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'People ops en startups: hacer mucho con poco',
                'description'       => 'Construye la función de personas en una startup sin un departamento de RRHH: el handbook del empleado, los procesos mínimos de onboarding y el employer branding que atrae talento cuando no puedes competir en salario con las grandes empresas.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en People Operations para startups en etapa temprana con experiencia en construir la función de personas sin los recursos de una empresa establecida. Necesito tu ayuda para crear los procesos mínimos de RRHH que una startup necesita para crecer de forma ordenada sin la burocracia que mata la agilidad.

Mi contexto:
- Tamaño actual de la startup: [número de personas]
- Modelo de trabajo: [presencial, remoto, híbrido]
- Ritmo de contratación previsto: [cuántas personas en los próximos 6-12 meses]
- Lo que ya tenemos en place: [contratos, onboarding, políticas formales, herramientas HRIS, etc.]
- Mayor problema de personas ahora mismo: [retención, onboarding caótico, cultura que se diluye al crecer, atraer talento, etc.]

Con ese contexto, dame:

1. EL MÍNIMO DE PEOPLE OPS QUE UNA STARTUP NECESITA DESDE EL PRIMER DÍA
¿Qué procesos de RRHH son imprescindibles desde el inicio y cuáles son prematuros? Dame el mapa de People Ops por etapa: lo que necesita una startup de 1-10 personas (contratos bien hechos, claridad sobre compensación y equity, un proceso de onboarding mínimo), lo que necesita con 10-30 personas (un handbook básico, un proceso de feedback formal, un proceso de offboarding digno), y lo que necesita con más de 30 personas (HRIS, proceso de performance reviews, job levels definidos, política de compensación). Por qué añadir proceso demasiado pronto es tan perjudicial como no tenerlo.

2. EL HANDBOOK DEL EMPLEADO: LA GUÍA QUE REEMPLAZA MIL CONVERSACIONES
¿Cómo creo el handbook del empleado que documenta cómo funciona la empresa? Dame la estructura del handbook mínimo viable: la misión, valores y cultura (no de cartel de empresa sino de guía para tomar decisiones), las políticas básicas (vacaciones, horario, trabajo remoto, gastos, baja por enfermedad), el código de conducta, los beneficios y la compensación, y cómo se trabaja en la empresa (herramientas, reuniones, comunicación asíncrona, toma de decisiones). Qué empresas tienen handbooks excelentes que puedo usar como inspiración (GitLab, Basecamp, Notion) y cómo adaptar lo mejor al tamaño de mi startup.

3. ONBOARDING: EL PROCESO QUE MARCA LA DIFERENCIA EN LA RETENCIÓN
¿Cómo diseño un onboarding que integre bien al nuevo empleado sin que consuma todo el tiempo del equipo? Dame el proceso de onboarding estructurado para startups: el pre-boarding (qué hacer antes del primer día para que el nuevo empleado no llegue sin portátil ni accesos), el primer día (la agenda, quién se reúne con él y para qué, qué debe aprender antes de las primeras 24 horas), los primeros treinta días (el plan de inmersión en el producto, el equipo y los procesos), y los primeros noventa días (los objetivos del período de prueba y el proceso de evaluación). Por qué las startups que tienen onboarding estructurado retienen mucho mejor en el primer año.

4. EMPLOYER BRANDING SIN PRESUPUESTO
¿Cómo compito en talento cuando no puedo igualar el salario de las grandes empresas? Dame la estrategia de employer branding para startups: los elementos que hacen que una startup sea genuinamente atractiva para el talento que busca algo diferente a una empresa grande (impacto, aprendizaje, autonomía, equity, misión), cómo comunicar la cultura de forma auténtica en LinkedIn, Glassdoor y las comunidades de talento, el programa de referidos interno como canal de adquisición de talento de mayor calidad, y cómo las startups que han construido una marca de empleador fuerte lo han hecho sin grandes presupuestos.

5. PROCESO DE CONTRATACIÓN QUE ESCALA SIN CAOS
¿Cómo estructuro el proceso de selección cuando lo hace el propio equipo sin un reclutador dedicado? Dame el proceso de contratación lean: la descripción de puesto que atrae a los candidatos correctos y repele a los incorrectos, el proceso de filtrado inicial que respeta el tiempo de todos (el formulario previo, el pre-screening de 15 minutos), el proceso de entrevistas con criterios objetivos de evaluación, la prueba técnica o de trabajo que es proporcional al esfuerzo que pedimos al candidato, y cómo tomar la decisión de contratación de forma rápida sin que el candidato se vaya a la competencia mientras deliberamos.

6. FEEDBACK Y CULTURA DE ALTO RENDIMIENTO EN STARTUPS
¿Cómo creo una cultura de feedback continuo sin el peso de un sistema formal de performance review? Dame el modelo de feedback para startups: el one-on-one semanal o quincenal como conversación de gestión del rendimiento continua, la cultura del feedback en tiempo real que evita que los problemas escalen, el proceso de revisión trimestral o semestral que no es un trámite sino una conversación honesta sobre el desarrollo del empleado, y cómo gestionar a un empleado con bajo rendimiento en una startup donde cada persona importa mucho.

7. RETENCIÓN DEL TALENTO: POR QUÉ LA GENTE SE QUEDA EN UNA STARTUP
¿Qué hace que el talento bueno se quede en una startup aunque reciba ofertas de empresas más grandes? Dame el análisis de los factores de retención que una startup puede controlar: el aprendizaje acelerado que solo es posible en etapas tempranas, la autonomía y el ownership real del trabajo, la proximidad con los decisores y la posibilidad de influir en el rumbo de la empresa, la misión genuina que hace que el trabajo tenga sentido, y el equity bien estructurado y comunicado que hace que la gente entienda por qué tiene sentido quedarse. Y lo que no retiene a la gente aunque la empresa crea que sí: los beneficios superficiales, las palabras en una diapositiva de cultura, y los jefes que no saben dar feedback.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir los procesos mínimos de People Ops para una startup en crecimiento: handbook, onboarding y retención.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Finanzas de startup: runway, burn rate y fundraising',
                'description'       => 'Gestiona las finanzas de una startup: el modelo de tesorería, el cálculo del runway, las palancas para extenderlo y la preparación financiera para una ronda de inversión.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en finanzas de startups con experiencia en ayudar a fundadores a entender y gestionar sus finanzas en etapas tempranas: desde el control del burn rate hasta la preparación para una ronda de inversión. Necesito tu ayuda para entender la situación financiera real de mi startup y tomar decisiones informadas sobre el uso del capital y el momento de levantar financiación.

Mi contexto:
- Etapa de la startup: [pre-revenue / generando ingresos / creciendo / pre-fundraising]
- Capital disponible o últimas ronda levantada: [aproximado]
- Burn rate mensual aproximado: [si lo conoces]
- Ingresos actuales si los hay: [MRR o ARR aproximado]
- Modelo de negocio: [SaaS, marketplace, hardware, servicio, etc.]
- Objetivo financiero inmediato: [controlar el burn, extender el runway, preparar una ronda, entender las métricas para inversores]

Con ese contexto, dame:

1. BURN RATE Y RUNWAY: ENTENDER LOS NÚMEROS QUE DEFINEN TU SUPERVIVENCIA
Explícame los conceptos financieros básicos que todo fundador debe dominar: el gross burn (total de gastos antes de ingresos), el net burn (diferencia entre gastos e ingresos), y el runway (meses que puedes sobrevivir con el capital actual). Cómo calcularlos correctamente, por qué el runway en tiempo real es diferente al runway proyectado, y por qué el 18 meses de runway es el umbral de seguridad que la mayoría de los inversores y los propios fundadores usan como referencia. Dame la fórmula exacta y un ejemplo numérico para mi tipo de negocio.

2. EL MODELO FINANCIERO DE LA STARTUP: LO MÍNIMO QUE NECESITAS
¿Qué modelo financiero necesita una startup en etapa temprana? Dame la estructura del modelo financiero mínimo viable: el modelo de P&L simplificado (ingresos, COGS, gross margin, OpEx por categoría, EBITDA), el modelo de tesorería (cash-in, cash-out, saldo final de caja por mes), las proyecciones de ingresos basadas en asunciones explícitas (no en el hockey stick genérico), y las sensibilidades clave (qué pasa con el runway si los ingresos crecen la mitad de lo previsto o si el burn aumenta un 20%). Cómo construirlo en una hoja de cálculo que sea útil para la gestión y para los inversores.

3. PALANCAS PARA EXTENDER EL RUNWAY
¿Qué puedo hacer si el runway es insuficiente y necesito extenderlo antes de levantar la próxima ronda? Dame el análisis de las palancas para extender el runway sin matar el crecimiento: la reducción de gastos (cuáles cortar sin impactar el crecimiento: los contratos SaaS que no se usan, los gastos de oficina en modelos remotos, los proveedores que se pueden renegociar), la aceleración de ingresos (anticipar el cobro de clientes, ofrecer descuentos por pago anual anticipado), y las opciones de financiación puente que no son equity (crédito ICO, venture debt, subvenciones CDTI, factoring de ARR). Cuándo y cómo usar cada palanca.

4. MÉTRICAS FINANCIERAS QUE LOS INVERSORES MIRAN
¿Qué métricas financieras debo tener claras antes de hablar con un inversor? Dame el análisis de las métricas que los VCs y business angels usan para evaluar la salud financiera de una startup: el MRR y su tasa de crecimiento mensual (MoM growth), el ARR, el Net Revenue Retention (NRR) si tengo clientes recurrentes, el CAC y el LTV y su ratio (el LTV/CAC de 3x como mínimo), el gross margin por tipo de negocio (>70% para SaaS es buena señal), y el Rule of 40 para startups en crecimiento. Por qué estas métricas cuentan la historia de la eficiencia del negocio mejor que el revenue solo.

5. EL PROCESO DE FUNDRAISING: ETAPAS Y TIEMPOS
¿Cómo es el proceso de levantar una ronda de inversión y cuánto tiempo lleva? Dame el mapa del proceso de fundraising desde el principio: la preparación (deck, data room, modelo financiero, lista de inversores objetivo), el outreach y las primeras reuniones (cómo conseguir introductions, qué esperar en el primer meeting), el proceso de due diligence que hace el inversor, la negociación del term sheet y los términos más importantes que debo entender (valoración pre-money, dilución, liquidation preference, anti-dilución, pro-rata), y el closing legal. Por qué el fundraising tarda más de lo esperado y cómo gestionarlo mientras la empresa sigue operando.

6. CUÁNDO Y CUÁNTO LEVANTAR
¿Cuándo es el momento correcto para levantar una ronda y cuánto dinero pedir? Dame el framework de decisión: los hitos de tracción que justifican una ronda seed vs. una serie A, la relación entre la dilución que acepto y el runway que consigo (por qué levantar demasiado poco es igual de peligroso que levantar demasiado tarde), la valoración que puedo justificar en función de las métricas actuales y del mercado de financiación, y cuándo la financiación de deuda o las subvenciones son mejores que el equity para mi situación específica.

7. GESTIÓN FINANCIERA POST-INVERSIÓN: NO GASTES EL CAPITAL COMO SI FUERA TUYO
¿Cómo gestiono el capital recibido de los inversores de forma responsable? Dame las decisiones de asignación de capital más frecuentes en una startup post-ronda: cuándo contratar (la regla de que cada contratación debe tener un impacto medible en el crecimiento), cuándo invertir en paid media vs. en producto (la inversión en adquisición solo tiene sentido cuando la retención ya funciona), cómo gestionar la tesorería del capital levantado para maximizar el runway (cuentas de alta rentabilidad para el capital no desplegado inmediatamente), y el reporting financiero a los inversores que genera confianza y que cumple con las obligaciones del pacto de socios.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Gestionar las finanzas de una startup: burn rate, runway, métricas para inversores y proceso de fundraising.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal para startups: el mínimo legal que necesitas',
                'description'       => 'Los documentos y estructuras legales que una startup necesita desde el principio: el pacto de socios, los contratos de empleados vs. contractors, la propiedad intelectual y los errores legales que cuestan más de lo que costaba evitarlos.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado experto en derecho de startups con experiencia en asesorar a fundadores en las decisiones legales más importantes de la fase temprana. Necesito tu ayuda para entender qué aspectos legales son críticos desde el principio, cuáles puedo posponer, y cuáles son los errores legales que parecen menores pero que pueden destruir una startup más adelante.

Mi contexto:
- Tipo de startup: [describe el modelo de negocio y el sector]
- Estructura de fundadores: [número de cofundadores, si todos están a tiempo completo, si hay empleados]
- País de constitución o donde operas: [España, UE, etc.]
- Estado legal actual: [sin constituir / SL constituida / sociedad sin pacto de socios / etc.]
- Mayor preocupación legal: [relación entre socios, contratos con clientes, propiedad intelectual, empleados vs. contractors, financiación]

Con ese contexto, dame:

1. LA ESTRUCTURA SOCIETARIA: CÓMO CONSTITUIR LA STARTUP CORRECTAMENTE
¿Qué forma jurídica debo usar para mi startup y cómo la constituyo? Explícame las opciones en España: la Sociedad Limitada (SL) como forma estándar para startups (ventajas, limitaciones, costes de constitución), la SL de formación sucesiva para startups que no pueden aportar los 3.000 euros del capital mínimo inicial, cuándo tiene sentido una Sociedad Anónima, y por qué muchas startups con ambición de financiación internacional consideran la constitución en Delaware (EEUU) o el UK aunque operen desde España. Dame el proceso de constitución paso a paso y los costes aproximados.

2. EL PACTO DE SOCIOS: EL DOCUMENTO QUE TODOS IGNORAN HASTA QUE LO NECESITAN
¿Por qué es esencial el pacto de socios y qué debe incluir? Explícame los elementos indispensables del pacto de socios para una startup: la atribución del equity entre fundadores y su justificación (por qué el equity igual a partes iguales suele ser un error), el vesting de acciones (por qué cada fundador debe ganarse su participación a lo largo del tiempo para proteger a los demás si alguien se va), las cláusulas de salida (drag-along, tag-along, derecho de tanteo y retracto), el régimen de toma de decisiones (qué requiere unanimidad, qué mayoría, qué puede decidir cada socio solo), y las cláusulas de no competencia y confidencialidad. Por qué el 80% de los conflictos graves entre socios se habrían resuelto fácilmente con un buen pacto de socios firmado al principio.

3. EMPLEADOS VS. CONTRACTORS: EL RIESGO LEGAL QUE MUCHAS STARTUPS IGNORAN
¿Cuándo debo contratar como empleado y cuándo como freelance o contractor? Explícame los criterios que distinguen un empleado de un contratista independiente en España: la dependencia económica, la exclusividad, la integración en la organización, el control sobre el trabajo. Cuáles son las consecuencias de la falsa autonomía (el trabajador que parece freelance pero que legalmente es un empleado): los riesgos de sanción por la Inspección de Trabajo, las cotizaciones a la Seguridad Social que tendría que haber pagado la empresa, y cómo regularizar la situación cuando ya tienes contractors que en realidad son empleados encubiertos.

4. PROPIEDAD INTELECTUAL: ASEGÚRATE DE QUE EL CÓDIGO Y LA MARCA SON TUYOS
¿Cómo protejo la propiedad intelectual de la startup? Dame la guía de PI para startups: la cesión de derechos de propiedad intelectual en los contratos de empleados y contractors (si el contrato no lo dice expresamente, el código que escribió un contractor puede ser suyo), el registro de marca (cuándo hacerlo, en qué países, el coste del registro en España vs. la Marca Comunitaria de la UE), la protección del software (por qué el código fuente está protegido por derecho de autor sin necesidad de registro pero cómo puedes reforzar esa protección), y los non-compete y NDA que protegen el know-how de la startup.

5. CONTRATOS CON CLIENTES Y TÉRMINOS DE SERVICIO
¿Qué documentos necesito para operar con clientes de forma segura? Dame la estructura de los documentos esenciales: los Términos de Servicio (TOS) o condiciones generales de contratación, la Política de Privacidad (obligatoria bajo el RGPD), los contratos B2B con clientes enterprise (qué cláusulas son las más importantes: limitación de responsabilidad, propiedad intelectual, SLA si aplica, duración y terminación), y los Acuerdos de Procesamiento de Datos (DPA) que exige el RGPD cuando tratas datos personales por cuenta de tus clientes. Cuándo un template online es suficiente y cuándo necesito un abogado.

6. FINANCIACIÓN: LOS DOCUMENTOS LEGALES DE UNA RONDA DE INVERSIÓN
¿Qué documentos legales debo entender cuando levanto financiación? Dame la guía de los documentos de una ronda de inversión para startups: el term sheet y los términos más importantes que debo negociar (valoración pre-money, liquidation preference y su estructura, anti-dilución, pro-rata rights, drag-along), el contrato de inversión y las representaciones y garantías que firmo como fundador, el nuevo pacto de socios que incluye al inversor, y los mecanismos de governance post-inversión (el board, los derechos de información del inversor, las decisiones que requieren aprobación del inversor). Por qué necesito un abogado propio en la ronda y no solo el del inversor.

7. LOS CINCO ERRORES LEGALES MÁS CAROS DE LAS STARTUPS
Dame los cinco errores legales que cometen frecuentemente las startups en fase temprana y que tienen consecuencias graves más adelante: constituir sin pacto de socios y pagar el precio cuando hay un conflicto o cuando entra un inversor, no hacer vesting de acciones y que un cofundador que se va tenga el 30% de la empresa sin aportar nada, contratar a todo el mundo como freelance sin verificar que cumple los criterios legales, no ceder la propiedad intelectual del código al contrato de los primeros desarrolladores, y no registrar la marca antes de que alguien la registre en el mercado al que te quieres expandir.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Entender los aspectos legales críticos de una startup: pacto de socios, PI, empleados vs. contractors y contratos.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer success en startups: los primeros clientes son los más importantes',
                'description'       => 'El proceso de onboarding y éxito de los primeros clientes de una startup: las conversaciones de descubrimiento profundo, el soporte de alta proximidad y el feedback que alimenta el roadmap del producto.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Customer Success en startups tempranas con experiencia en convertir los primeros clientes en embajadores del producto y en fuente de feedback estratégico. Necesito tu ayuda para diseñar el proceso de éxito de los primeros clientes de mi startup: el onboarding, las conversaciones de descubrimiento, y el ciclo de feedback que alimenta el desarrollo del producto.

Mi contexto:
- Producto y etapa: [describe el producto y cuántos clientes de pago tienes o esperas tener]
- Perfil del cliente objetivo: [empresa, cargo del usuario, tamaño]
- Modelo de soporte actual: [fundador atiende a todos / hay alguien de CS / es self-service]
- Mayor reto con los primeros clientes: [onboarding lento, baja adopción, churn en los primeros 90 días, no sabes si están contentos o no]
- Tiempo que el equipo puede dedicar a CS: [horas por semana aproximadas]

Con ese contexto, dame:

1. POR QUÉ LOS PRIMEROS CLIENTES SON CUALITATIVAMENTE DISTINTOS A LOS DEMÁS
Explícame qué hace especiales a los primeros diez o veinte clientes de una startup y por qué merecen un nivel de atención que no podrás dar a los clientes número 500: el feedback de alta calidad que solo dan los early adopters que entienden el producto en contexto real, la capacidad de influir en el roadmap cuando el producto todavía es moldeable, el riesgo de que el churn temprano señale un problema de producto que si no se identifica a tiempo se repite a escala, y el potencial de los primeros clientes para convertirse en casos de éxito, referencias y embajadores que aceleran la adquisición.

2. ONBOARDING DE ALTA PROXIMIDAD: EL PROCESO QUE ASEGURA LA ADOPCIÓN
¿Cómo diseño un proceso de onboarding para los primeros clientes que garantice que adoptan el producto? Dame el proceso de onboarding de alta proximidad para startups: el kickoff call con el cliente (qué preguntar, qué definir, qué comprometerse a hacer), el plan de éxito personalizado para el primer cliente (objetivos del cliente, hitos de adopción, criterios de éxito), el seguimiento semanal o quincenal durante los primeros noventa días, y el momento de valor (time-to-value) que debo acelerar para que el cliente experimente el beneficio del producto antes de que su entusiasmo inicial decaiga.

3. LAS CONVERSACIONES DE DESCUBRIMIENTO PROFUNDO CON CLIENTES ACTIVOS
¿Cómo obtengo insights estratégicos de los clientes que ya están usando el producto? Dame el proceso de las conversaciones de descubrimiento con clientes activos: cómo estructurar una entrevista de 30-45 minutos con un cliente que ya usa el producto para entender cómo lo usa realmente (no cómo crees que lo usa), las preguntas que revelan el job-to-be-done real (para qué contratan el producto, qué estaban haciendo antes, qué pasa si no lo usan), y cómo estas conversaciones son la fuente más valiosa de ideas para el roadmap del producto y para el mensaje de marketing.

4. EL CICLO DE FEEDBACK QUE ALIMENTA EL PRODUCTO
¿Cómo convierto el feedback de los primeros clientes en mejoras del producto de forma sistemática? Dame el proceso de cierre del loop de feedback: cómo recoger el feedback (dónde capturarlo, en qué formato, quién es responsable), cómo sintetizarlo y priorizarlo para el equipo de producto (el framework Jobs-to-be-Done vs. el simple backlog de peticiones), cómo comunicar al cliente que su feedback ha influido en el roadmap (el closing the loop que genera fidelidad y más feedback), y cómo distinguir el feedback de alta señal del ruido cuando cada cliente tiene una opinión diferente.

5. SEÑALES DE RIESGO EN LOS PRIMEROS NOVENTA DÍAS
¿Cómo identifico a tiempo que un cliente está en riesgo de churn? Dame el modelo de salud del cliente para startups tempranas: las señales de comportamiento que predicen el churn (baja en el uso del producto, preguntas frecuentes al soporte sobre lo mismo, silencio donde antes había interacción frecuente), las señales relacionales (el champion del cliente se va de la empresa, el cliente no responde a los emails), y el protocolo de intervención cuando detectas a un cliente en riesgo: qué decir, cómo ofrecer ayuda sin que parezca desesperación, y cuándo escalar al fundador o al CEO para salvar la cuenta.

6. CONVERTIR CLIENTES EN EMBAJADORES Y REFERENCIAS
¿Cómo convierto los primeros clientes satisfechos en fuente de nuevos clientes? Dame la estrategia de advocacy en startups: cuándo y cómo pedir un caso de éxito, la estructura del case study que usa el equipo de ventas, cómo conseguir referencias para conversaciones con nuevos prospects, el programa de beta de nuevas features que hace que los mejores clientes se sientan parte del desarrollo del producto, y cómo cultivar las relaciones con los power users que pueden convertirse en los mejores embajadores de la marca.

7. ESCALANDO EL CS DE CERO A CIEN CLIENTES SIN UN EQUIPO GRANDE
¿Cómo escalo el proceso de CS cuando el número de clientes empieza a ser difícil de gestionar de forma personalizada? Dame el modelo de escalabilidad del CS para startups: cuándo pasar del CS manual de alta proximidad al modelo semi-escalado (grupos de clientes similares, materiales de onboarding reutilizables, customer education), cuándo el volumen justifica contratar el primer CSM dedicado, qué herramientas de CS introducir a medida que el volumen crece (helpdesk, CRM, herramientas de health scoring), y cómo mantener la calidad del CS y la cultura de cercanía con el cliente cuando ya no es posible que el fundador atienda a cada cliente personalmente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar el proceso de onboarding y éxito de los primeros clientes para que generen feedback y se conviertan en embajadores.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Del freelance al founder: el camino del solopreneur',
                'description'       => 'Cuando el freelance decide convertirse en fundador: las diferencias entre un negocio de servicios y un negocio de producto, los primeros pasos del freelance que quiere construir algo escalable y las decisiones que separan el freelancing del entrepreneurship.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en transición de carrera para freelancers y profesionales independientes que quieren dar el salto a fundar su propio negocio de producto o convertirse en solopreneurs. Necesito tu ayuda para entender si el salto del freelancing al entrepreneurship tiene sentido para mí, cuáles son las diferencias reales entre los dos modelos, y cómo hacer la transición de forma inteligente sin perder los ingresos del freelancing mientras construyo algo nuevo.

Mi contexto:
- Mi servicio freelance actual: [qué tipo de trabajo hago, con qué clientes]
- Ingresos actuales como freelance: [aproximado mensual]
- Idea de negocio o producto: [si ya tienes una o si estás explorando]
- Por qué quieres dar el salto: [escalabilidad, libertad, misión, cansancio del modelo de servicios, etc.]
- Mayor miedo: [perder los ingresos del freelancing, no saber construir un producto, no saber vender sin el boca a boca, etc.]

Con ese contexto, dame:

1. FREELANCING VS. ENTREPRENEURSHIP: LAS DIFERENCIAS REALES
Explícame las diferencias fundamentales entre el modelo de negocio del freelance y el del fundador de startup o solopreneur con producto: el techo de ingresos del freelancing (el tiempo es el límite) vs. la escalabilidad potencial del producto, el riesgo distribuido del freelance (si pierde un cliente tiene otros) vs. el riesgo concentrado del founder (todo el capital va a una sola apuesta), la velocidad de ingresos (el freelance genera ingresos desde el primer cliente, el founder puede tardar meses sin ingresos), y la motivación diferente que requiere cada modelo (el freelance vive del cliente que valida el trabajo, el founder vive de su propia visión durante meses sin validación externa).

2. EL SOLOPRENEUR: EL MODELO INTERMEDIO QUE MUCHOS FREELANCERS NO CONOCEN
¿Qué es el solopreneur y cómo es diferente del freelance y del startup founder? Explícame el modelo de negocio del solopreneur: el creador de productos digitales (cursos, plantillas, SaaS pequeño, newsletter de pago) que vende sin un equipo, el consultor que productiza sus servicios para vender sin estar presente en cada entrega, y el indie hacker que construye productos de software con el objetivo de generar ingresos recurrentes sin levantar financiación. Por qué para muchos freelancers el modelo solopreneur es el paso más realista hacia la escalabilidad antes de intentar construir una startup con inversores.

3. VALIDAR LA IDEA DE NEGOCIO ANTES DE DEJAR EL FREELANCING
¿Cómo valido la idea antes de apostar todo al nuevo negocio? Dame el proceso de validación que un freelance puede hacer manteniendo sus ingresos actuales: las entrevistas de problema con los clientes del tipo que tendría el nuevo negocio (no vendas nada, solo pregunta), la landing page de espera antes de construir nada para medir el interés, el producto o servicio en versión beta lanzado a un grupo pequeño antes del lanzamiento general, y los criterios de validación que te dicen que hay suficiente demanda como para apostar tiempo y dinero al nuevo negocio.

4. LA TRANSICIÓN FINANCIERA: CÓMO FINANCIARSE MIENTRAS CONSTRUYES
�¿Cómo gestiono económicamente la transición del freelancing al nuevo negocio? Dame el plan de transición financiera: el ahorro mínimo que necesitas antes de reducir el freelancing (el runway personal: cuántos meses puedes vivir sin ingresos del freelancing), el modelo de transición gradual (reducir gradualmente el freelancing mientras aumentan los ingresos del nuevo negocio en lugar de cortar de golpe), y cuándo el punto de cruce (cuando el nuevo negocio genera suficientes ingresos para vivir) es el momento de dejar definitivamente el freelancing. Cómo gestionar la incertidumbre emocional de este período.

5. LAS HABILIDADES DEL FREELANCE QUE TRANSFIEREN AL ENTREPRENEURSHIP
¿Qué habilidades del freelancing son transferibles al nuevo negocio y cuáles tengo que aprender desde cero? Explícame los activos que el freelance lleva al entrepreneurship: la red de contactos del sector que puede ser la primera base de clientes, el conocimiento profundo del problema del cliente que en el freelancing se adquiere después de años de proyectos, la disciplina del trabajo autónomo y la gestión del tiempo sin jefe, y la tolerancia a la incertidumbre y al riesgo que el freelancing ya ha entrenado. Y las habilidades que el freelance normalmente no tiene y necesita aprender: el pensamiento de producto (construir para un usuario genérico, no para un cliente específico), el marketing de contenidos y la distribución digital, y la gestión del cap table y los fundamentos financieros.

6. EL PRIMER PRODUCTO: CÓMO ELIGE EL FREELANCE EN QUÉ CONSTRUIR
¿Cómo elijo en qué producto construir cuando tengo experiencia como freelance? Dame el framework de decisión para el freelance que quiere construir un producto: cómo identificar los problemas que se repiten en los proyectos de freelancing (las herramientas que no existen, los procesos que siempre son manuales, las preguntas que todos los clientes hacen), cómo validar si esos problemas son generales (más allá de los clientes que conoces) o específicos de un sector muy nicho, y por qué el primer producto de un freelance convertido en founder suele ser una solución a un problema que el propio freelance tiene o que sus clientes tienen recurrentemente.

7. LAS TRAMPAS DEL FREELANCE QUE FUNDA UNA STARTUP
¿Cuáles son los errores más comunes del freelance que intenta convertirse en fundador? Dame los cinco errores que cometen frecuentemente los freelancers que quieren construir un producto: el error de construir un producto para los clientes que ya tiene en lugar de para un mercado más amplio, el error de seguir pensando como freelance (aceptar proyectos de customización que se alejan del producto estándar), el error de no saber vender sin el boca a boca del mercado freelance, el error de no construir la audiencia antes de lanzar el producto, y el error de no saber cuándo dejar de optimizar el producto y empezar a invertir en distribución.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar la transición del freelancing al entrepreneurship: validación, modelo solopreneur y gestión del cambio.',
                'vote_score'        => 43,
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
