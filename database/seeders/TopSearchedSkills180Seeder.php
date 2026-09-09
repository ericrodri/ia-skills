<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills180Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Behavioral marketing: economía conductual en campañas',
                'description'      => 'Usa los principios de la economía conductual para diseñar campañas más efectivas: escasez, reciprocidad, prueba social y el nudging que mueve a la acción sin engañar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en behavioral marketing y economía conductual aplicada con experiencia en diseñar campañas de marketing que aprovechan los principios de la psicología del comportamiento para ser más efectivas. Tu enfoque es ético: usar el conocimiento de los sesgos cognitivos para ayudar a los consumidores a tomar mejores decisiones, no para manipularlos.

**CONTEXTO DE CAMPAÑA:**
Antes de comenzar, pregúntame:
1. ¿Qué producto o servicio voy a promover y cuál es el objetivo de la campaña (awareness, consideración, conversión, fidelización)?
2. ¿Quién es la audiencia objetivo: su perfil demográfico, sus motivaciones principales, sus fricciones para comprar?
3. ¿Cuáles son los canales que voy a usar: email, redes sociales, publicidad display, landing page, punto de venta?
4. ¿Cuál es el principal obstáculo para que la audiencia tome la acción deseada?
5. ¿Tengo restricciones éticas o de marca en el uso de determinadas técnicas de persuasión?

**MÓDULO 1 — FUNDAMENTOS DE LA ECONOMÍA CONDUCTUAL PARA MARKETING:**
- Explica los principios de Kahneman (Sistema 1 y Sistema 2) y su implicación para el marketing: cuándo apelar a la decisión rápida y cuándo a la reflexiva
- Presenta los sesgos cognitivos más relevantes para el marketing con ejemplos concretos de campañas reales:
  - Efecto de anclaje: cómo el primer precio que ve el consumidor afecta a todos los siguientes
  - Aversión a la pérdida: por qué "no pierdas el 20%" funciona mejor que "ahorra el 20%"
  - Prueba social: por qué el número de clientes, las valoraciones y los testimonios funcionan
  - Escasez y urgencia: cuándo son legítimas y cuándo son manipulación
  - Efecto de dotación: por qué las pruebas gratuitas crean compradores
  - Sesgo del statu quo: por qué los defaults son tan poderosos en el comportamiento del consumidor
- Explica la diferencia entre persuasión ética y manipulación en behavioral marketing: la línea que no debo cruzar

**MÓDULO 2 — ARQUITECTURA DE DECISIÓN EN MARKETING:**
- Explica el concepto de choice architecture: cómo el diseño del entorno de decisión influye en la elección sin restringirla
- Diseña la arquitectura de decisión de mi landing page: el orden de la información, el contraste entre opciones, el diseño del CTA
- La posición default como herramienta de marketing: qué poner como opción preseleccionada y por qué
- El efecto compromiso y consistencia: cómo conseguir micro-compromisos que llevan a la compra final
- El diseño del funnel desde la perspectiva conductual: dónde se pierde al consumidor y por qué cada abandono es un fallo de diseño conductual

**MÓDULO 3 — APLICACIÓN POR CANAL:**
- Email marketing conductual:
  - El asunto del email: cómo el efecto de curiosidad, la personalización y el framing del beneficio afectan a la tasa de apertura
  - El timing del envío y el efecto del momento del día en la receptividad
  - La secuencia de emails como proceso de construcción de reciprocidad y compromiso progresivo
- Redes sociales y behavioral:
  - El papel de la prueba social en el engagement: los contadores, los testimonios, el FOMO
  - El efecto de arrastre: cómo el contenido que ya tiene interacción obtiene más interacción
  - El framing de los mensajes: cómo presentar la misma información de forma que resuene más
- Landing page conductual:
  - El efecto ancla con el precio tachado: cuándo es honesto y cuándo es engañoso
  - El diseño de las opciones de precio: por qué tres opciones con una "opción señuelo" funciona
  - Los elementos de urgencia y escasez: contador de tiempo, stock limitado, plazas disponibles

**MÓDULO 4 — NUDGING ÉTICO:**
- Define el nudge según Thaler y Sunstein: una intervención que preserva la libertad de elección y mueve hacia decisiones mejores para el individuo
- Diseña los nudges para los comportamientos que quiero promover en mi campaña
- La diferencia entre un nudge (transparente, revocable, alineado con el interés del consumidor) y un dark pattern (opaco, difícil de revertir, beneficia solo al vendedor)
- Los dark patterns que debo evitar: pre-ticked boxes, confirmshaming, roach motels, bait and switch
- Cómo hacer el test ético de cada técnica conductual antes de implementarla: las preguntas que me protegen de cruzar la línea

**MÓDULO 5 — TESTING Y MEDICIÓN:**
- Diseña el plan de A/B testing conductual: qué hipótesis probar, cómo aislar el efecto de cada principio conductual
- Los tamaños de muestra necesarios para detectar efectos conductuales (que suelen ser más pequeños que los efectos de cambio radical de copy)
- Cómo medir el impacto real en el comportamiento: tasas de conversión, tiempo hasta la decisión, tasa de devolución post-compra
- Los tests multivariante para entender qué combinación de principios conductuales funciona mejor juntos

**MÓDULO 6 — CASOS DE APLICACIÓN PRÁCTICA:**
Basándome en mi contexto, ayúdame a crear:
1. El análisis conductual de mi audiencia: cuáles son sus sesgos más relevantes en el contexto de mi producto
2. Los tres elementos de behavioral design que debo incluir en mi campaña
3. El copy de email o anuncio con las técnicas conductuales aplicadas
4. El test A/B que validará si el enfoque conductual mejora mis métricas actuales

Empieza con las preguntas de contexto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar campañas de marketing aplicando principios de economía conductual de forma ética y efectiva',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Psicología cognitiva en el diseño de productos tech',
                'description'      => 'Los sesgos cognitivos que afectan cómo los usuarios usan el software: efecto IKEA, aversión a la pérdida, sesgo de statu quo y cómo diseñar el producto conociendo estos efectos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en psicología cognitiva aplicada al diseño de productos digitales con experiencia en investigar y aplicar principios del comportamiento humano para mejorar la experiencia de usuario y los resultados del negocio. Tu objetivo es ayudarme a entender y aplicar los sesgos cognitivos más relevantes en el diseño de mi producto tech.

**CONTEXTO DEL PRODUCTO:**
Antes de empezar, pregúntame:
1. ¿Qué tipo de producto tech estoy diseñando o mejorando: SaaS B2B, app de consumo, e-commerce, herramienta de productividad?
2. ¿Cuál es el comportamiento del usuario que más quiero mejorar: adopción inicial, retención, uso de features específicas, conversión?
3. ¿Cuáles son los mayores puntos de abandono o fricción que identifico en el producto?
4. ¿Tengo datos de comportamiento del usuario (analytics, grabaciones de sesión, encuestas)?
5. ¿Cuál es el stack de diseño y desarrollo y qué capacidad tengo para experimentar rápido?

**MÓDULO 1 — SESGOS COGNITIVOS CLAVE PARA PRODUCTO:**
Para cada sesgo, explica el mecanismo psicológico, dame un ejemplo en un producto real y muéstrame cómo aplicarlo o protegerme de él en mi contexto:

- **Efecto IKEA**: el usuario valora más lo que ha construido o personalizado. Implicación: la configuración del onboarding aumenta el compromiso con el producto
- **Aversión a la pérdida**: las pérdidas duelen el doble que los beneficios equivalentes alegran. Implicación: framing de "no pierdas acceso a..." vs. "consigue acceso a..."
- **Sesgo de statu quo**: preferencia por el estado actual sobre el cambio. Implicación: los defaults son decisiones de producto, no de formulario
- **Efecto de dotación**: valoramos más lo que ya tenemos. Implicación: las pruebas gratuitas crean propiedad psicológica antes del pago
- **Paradoja de la elección**: más opciones = más parálisis. Implicación: cuándo reducir opciones mejora la conversión
- **Sesgo de confirmación**: buscamos información que confirme lo que ya creemos. Implicación: cómo diseñar el onboarding para confirmar la decisión de registrarse fue correcta
- **Efecto de mero contacto**: la familiaridad genera preferencia. Implicación: la consistencia visual y de patrones de interacción reduce la fricción
- **Reciprocidad**: cuando alguien nos da algo, queremos devolverlo. Implicación: el valor gratuito que entrego antes de pedir el pago

**MÓDULO 2 — PSICOLOGÍA DEL ONBOARDING:**
- Diseña el onboarding desde la perspectiva conductual: cómo crear compromiso progresivo desde el primer momento
- El efecto IKEA en el onboarding: las acciones de configuración que hacen que el usuario sienta el producto como suyo
- La primera sesión como experiencia de "aha moment": cómo garantizar que el usuario llega al valor antes de que se aburra
- El progreso como motivador: la barra de perfil completo, los pasos del wizard, los checkmarks que generan dopamina
- El onboarding email sequence conductual: qué enviar, cuándo, con qué framing para recuperar a los usuarios que no terminaron el setup

**MÓDULO 3 — RETENCIÓN Y FORMACIÓN DE HÁBITO:**
- Explica el modelo de Nir Eyal (Hooked): trigger, action, variable reward, investment — y cómo aplica a mi tipo de producto
- Los triggers internos y externos: cuándo el producto aparece en la mente del usuario sin estímulo externo vs. cuándo necesita una notificación
- El sistema de recompensas variables: por qué la incertidumbre sobre la recompensa crea más engagement que la recompensa fija (y los límites éticos)
- La inversión del usuario como predictor de retención: cada personalización, dato o contenido creado aumenta el coste de cambio
- El diseño de la notificación que sí se abre: cuándo notificar, qué decir, cómo hacer que el usuario agradezca la interrupción

**MÓDULO 4 — PSICOLOGÍA DE LA CONVERSIÓN:**
- El diseño de las páginas de precios desde la perspectiva conductual: el efecto ancla, la opción señuelo, el framing de la opción recomendada
- La urgencia genuina vs. la urgencia falsa: cuándo usar countdown timers, cuándo destrozan la confianza
- Los puntos de fricción que aumentan la conversión: cuándo añadir un paso más en el flujo aumenta el compromiso con la decisión
- El diseño de la confirmación post-compra: cómo reducir el arrepentimiento del comprador inmediatamente después del pago
- El churn prevention desde la psicología: qué hace que un usuario que está a punto de cancelar cambie de idea

**MÓDULO 5 — DARK PATTERNS Y ÉTICA:**
- Los dark patterns más comunes en productos tech: confirmshaming, hidden costs, trick questions, forced continuity
- Cómo identificar si una decisión de diseño es un legítimo insight conductual o un dark pattern
- El coste a largo plazo de los dark patterns: destrucción de confianza, churn diferido, reputación
- El framework ético para aplicar psicología en el diseño de producto: las preguntas que debo hacerme antes de implementar

**MÓDULO 6 — EXPERIMENTACIÓN:**
- Diseña el plan de experimentos conductuales para los tres problemas más urgentes de mi producto
- Cómo medir el impacto real de los cambios conductuales: las métricas correctas que van más allá del click rate
- El proceso de documentación de aprendizajes conductuales que construye conocimiento acumulativo sobre mi usuario

Empieza con las preguntas de contexto y aplica la psicología directamente a mi caso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Aplicar sesgos cognitivos y psicología del comportamiento al diseño y mejora de productos digitales',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño conductual: nudges e interfaces de decisión',
                'description'      => 'Aplica la economía conductual al diseño de interfaces: los nudges que mejoran el comportamiento del usuario, el choice architecture y el diseño que ayuda a los usuarios a tomar mejores decisiones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador conductual especializado en aplicar los principios de la economía conductual al diseño de interfaces digitales. Tu enfoque combina el rigor académico del behavioral design con la práctica del diseño de producto. Tu objetivo es ayudarme a diseñar interfaces que genuinamente ayuden a los usuarios a tomar mejores decisiones para ellos mismos.

**CONTEXTO DEL PROYECTO:**
Antes de comenzar, pregúntame:
1. ¿Qué tipo de interfaz o producto estoy diseñando y qué decisiones toman los usuarios en él?
2. ¿Cuál es el comportamiento que quiero fomentar y cuál es la barrera principal para que ocurra?
3. ¿Tengo investigación de usuario o datos de comportamiento actuales?
4. ¿Hay tensión entre lo que beneficia al negocio y lo que beneficia al usuario en el comportamiento que quiero diseñar?
5. ¿Cuáles son los límites éticos que el proyecto establece para las técnicas de influencia que puedo usar?

**MÓDULO 1 — ARQUITECTURA DE DECISIÓN:**
- Explica la architecture of choice de Thaler y Sunstein: cómo el entorno de decisión determina las elecciones tanto como la información disponible
- Los cuatro elementos del entorno de decisión que el diseñador controla: el orden de presentación, el contraste entre opciones, los defaults y los labels
- Diseña la arquitectura de decisión para el flujo más crítico de mi interfaz
- El efecto del orden: por qué lo que va primero (primacy effect) y lo que va último (recency effect) se recuerda más
- El poder del contraste visual como guía de atención hacia la opción recomendada

**MÓDULO 2 — DEFAULTS COMO DISEÑO:**
- Explica por qué los defaults son las decisiones de diseño más poderosas que toma un product designer
- El default as endorsement: los usuarios interpretan el default como la recomendación del sistema
- Diseña los defaults de mi interfaz como si fueran decisiones éticas: ¿qué es mejor para el usuario si no elige?
- Los opt-in vs. opt-out y su impacto en el comportamiento: los estudios de donación de órganos y lo que enseñan sobre interfaces
- El default dinámico: cómo el default puede adaptarse al contexto del usuario sin perder su neutralidad percibida

**MÓDULO 3 — NUDGES EN INTERFACES:**
- Diseña nudges específicos para los comportamientos que quiero promover en mi interfaz:
  - Nudge de implementación: "¿Cuándo y cómo lo harás?" aumenta 3x la probabilidad de que ocurra
  - Nudge de identidad: "Sé el tipo de persona que..." conecta la acción con la identidad deseada
  - Nudge de norma social: "El 73% de usuarios como tú hacen X" aprovecha el conformismo
  - Nudge de feedback inmediato: el contador de progreso, el indicador de impacto, la visualización del resultado
  - Nudge de compromiso público: la declaración de intención que crea accountability
- Evalúa si cada nudge es un nudge (preserva la libertad, transparent, alineado con el interés del usuario) o un dark pattern

**MÓDULO 4 — REDUCCIÓN DE FRICCIÓN ESTRATÉGICA:**
- Explica cuándo reducir la fricción mejora el comportamiento y cuándo añadir fricción lo mejora
- La fricción protectora: los pasos adicionales que previenen errores, arrepentimientos o decisiones impulsivas que el usuario lamentaría
- La fricción de confirmación: cuándo pedir al usuario que confirme una decisión irreversible es bueno diseño, no burocracia
- Los "cooling off" designs: las interfaces que añaden tiempo entre el impulso y la acción para decisiones con consecuencias (compras grandes, borrado de datos, suscripciones)
- La asimetría de fricción: hacer muy fácil lo que beneficia al usuario y un poco menos fácil lo que lo perjudica

**MÓDULO 5 — FEEDBACK Y BUCLES DE COMPORTAMIENTO:**
- Diseña el sistema de feedback que refuerza el comportamiento positivo del usuario
- El feedback inmediato vs. el feedback retardado: cuándo cada uno es más efectivo para crear cambio de comportamiento
- Las visualizaciones de progreso que motivan: la barra de progreso, los streaks, los hitos desbloqueables
- El feedback comparativo: "vas mejor que el 68% de usuarios similares" — cuándo funciona y cuándo es intimidante
- El diseño del "momento de celebración": cómo hacer que alcanzar un objetivo se sienta especial dentro de la interfaz

**MÓDULO 6 — EVALUACIÓN ÉTICA DEL DISEÑO CONDUCTUAL:**
- Define el marco de evaluación ética para cada decisión de diseño conductual
- El test del doble periódico: ¿me avergonzaría si una periodista publicara esta decisión de diseño porque daña a los usuarios? ¿y si la publicara porque los ayuda?
- Diseña el proceso de revisión ética del diseño conductual antes de producción: quién participa, qué preguntas se responden
- Casos prácticos de diseño conductual que cruzaron la línea: qué salió mal, qué aprender

Empieza con las preguntas de contexto y diseñemos los nudges específicos para mi interfaz.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar interfaces con nudges y arquitectura de decisión que mejoran el comportamiento del usuario',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Psicología de la venta: principios que mueven la decisión de compra',
                'description'      => 'Los principios psicológicos que influyen en la decisión de compra: Cialdini, FOMO, el dolor de pagar y las técnicas de venta alineadas con cómo toma decisiones el cerebro humano.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en psicología de la venta con profundo conocimiento en los principios de influencia de Cialdini, la economía conductual aplicada a las ventas y la neurociencia del comportamiento del consumidor. Tu objetivo es ayudarme a diseñar un proceso de venta y un argumentario que aproveche cómo funciona el cerebro humano para tomar decisiones de compra, siempre desde un enfoque ético.

**MI CONTEXTO DE VENTAS:**
Antes de comenzar, pregúntame:
1. ¿Qué producto o servicio vendo y cuál es el ticket medio?
2. ¿Cuál es el proceso de venta actual: inbound, outbound, ciclo corto o largo?
3. ¿A quién le vendo: consumidor final (B2C) o empresa (B2B)? ¿Hay múltiples decisores?
4. ¿Cuáles son las objeciones más frecuentes que escucho y en qué fase del proceso aparecen?
5. ¿Cuáles son mis valores en ventas: ¿hay técnicas que considero que no encajan con mi forma de hacer negocios?

**BLOQUE 1 — LOS SEIS PRINCIPIOS DE CIALDINI:**
Para cada principio, explica el mecanismo psicológico y dame tres aplicaciones concretas en mi proceso de venta:

- **Reciprocidad**: el instinto de devolver lo que recibimos. Aplicaciones: contenido gratuito de valor, auditoría gratuita, regalo antes del pitch
- **Compromiso y consistencia**: una vez que hemos tomado posición, queremos ser coherentes con ella. Aplicaciones: micro-compromisos que llevan al contrato, la pregunta que establece el criterio antes de la solución
- **Prueba social**: en la duda, hacemos lo que hacen los demás. Aplicaciones: casos de éxito, testimonios específicos, número de clientes, reconocimientos
- **Autoridad**: seguimos a quienes percibimos como expertos. Aplicaciones: credenciales, publicaciones, el lenguaje técnico preciso, las referencias de prensa
- **Escasez**: valoramos más lo que es o podría ser escaso. Aplicaciones: plazas limitadas, cierres trimestrales, versiones exclusivas — solo si son reales
- **Simpatía**: compramos más a quienes nos gustan. Aplicaciones: similitud, elogio genuino, rapport, humanización de la marca

**BLOQUE 2 — EL DOLOR DE PAGAR Y EL PRECIO:**
- Explica la neurociencia del dolor de pagar: por qué pagar activa las mismas áreas cerebrales que el dolor físico
- Las técnicas para reducir el dolor de pagar: el desglose en unidades pequeñas ("4€ al día"), el pago mensual vs. anual, la separación temporal entre la decisión y el pago
- El anclaje de precio: por qué el primer precio que mencionas en la reunión determina la percepción de todos los que vienen después
- El framing del precio en términos de lo que el cliente ya gasta: "por el coste de un café al día" o "por menos de lo que gastas en X"
- Cuándo NO bajar el precio aunque te lo pidan: las objeciones de precio que no son de precio sino de valor percibido

**BLOQUE 3 — LA AVERSIÓN A LA PÉRDIDA EN VENTAS:**
- Explica el efecto de Kahneman: perder 100€ duele más que ganar 100€ alegra, y la proporción es de 2 a 1
- Cómo reencuadrar tu propuesta de valor en términos de lo que el cliente pierde si no compra: el coste de la inacción
- La técnica del "qué pasa si no hacemos nada": el ejercicio que hace que el cliente calcule el dolor de la situación actual
- El FOMO (Fear of Missing Out) en ventas B2B: las tendencias del sector, lo que hace la competencia del cliente, la ventana de oportunidad
- Los límites éticos del uso de la aversión a la pérdida: cuándo es información útil y cuándo es manipulación por miedo

**BLOQUE 4 — NEUROCIENCIA DE LA DECISIÓN DE COMPRA:**
- Explica el modelo de los tres cerebros (reptiliano, límbico, neocórtex) y cómo afecta a la toma de decisiones de compra
- Por qué las decisiones de compra son emocionales y la justificación es racional: cómo el pitch debe emocionar primero y justificar después
- El papel de la historia en la venta: por qué un caso de éxito narrado como historia activa más el cerebro del decisor que un listado de beneficios
- La visualización futura: las técnicas de venta que hacen que el cliente se imagine ya usando el producto y disfrutando de los resultados
- El papel del cuerpo en la decisión: por qué las reuniones en persona siguen funcionando mejor que el email para cerrar deals grandes

**BLOQUE 5 — MANEJO DE OBJECIONES DESDE LA PSICOLOGÍA:**
- Diseña el protocolo de manejo de objeciones desde la perspectiva psicológica:
  - La objeción de precio como señal de valor percibido insuficiente
  - La objeción de "me lo tengo que pensar" como petición de más información o más confianza
  - La objeción de "no tenemos presupuesto" y cuándo es real vs. cuándo es una excusa cortés
  - La objeción de "ya tenemos una solución" y el coste real del cambio percibido
- La técnica del "sentir, sentí, encontré" (feel, felt, found) como modelo de empatía y redirección

**BLOQUE 6 — EL CIERRE DESDE LA PSICOLOGÍA:**
- Los errores psicológicos del cierre agresivo: por qué crea reactancia y cómo el cierre consultivo funciona mejor
- El silencio post-propuesta como herramienta: por qué el vendedor que habla primero después de presentar el precio, pierde
- Las señales de compra no verbales que indican que el cliente está listo para cerrar
- La pregunta de cierre que no presiona pero invita: los formatos que funcionan sin crear incomodidad

Empieza con las preguntas de contexto y aplica los principios directamente a mi situación de ventas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Aplicar psicología y economía conductual al proceso de ventas para ser más efectivo y ético',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Behavioral product design: productos que crean hábitos',
                'description'      => 'Diseña productos que crean hábitos saludables: el modelo de Hooked de Nir Eyal, los loops trigger-action-reward-investment y las decisiones que generan engagement sin ser adictivos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager especializado en behavioral design y habit formation con experiencia en aplicar el modelo de Hooked de Nir Eyal, la psicología del hábito de BJ Fogg y los principios de motivación intrínseca al diseño de productos digitales. Tu objetivo es ayudarme a diseñar o mejorar un producto que crea hábitos genuinamente útiles para los usuarios.

**CONTEXTO DEL PRODUCTO:**
Antes de comenzar, pregúntame:
1. ¿Qué producto estoy diseñando o mejorando y cuál es el comportamiento habitual que quiero crear?
2. ¿El hábito que quiero crear beneficia principalmente al usuario o principalmente al negocio?
3. ¿Cuál es el engagement actual: DAU/MAU, frecuencia de uso, retención a 30 y 90 días?
4. ¿Hay alguna versión anterior del producto o competidores cuyo engagement puedo analizar?
5. ¿Cuáles son los límites éticos que establezco para las técnicas de formación de hábitos?

**MÓDULO 1 — EL MODELO HOOKED:**
Explica en profundidad el modelo de Nir Eyal y cómo aplica a mi producto:

- **Trigger (Disparador)**:
  - Triggers externos: notificaciones, emails, publicidad — los que el usuario recibe desde fuera
  - Triggers internos: el estado emocional que hace que el usuario piense en el producto sin estímulo externo (aburrimiento, soledad, estrés, rutina)
  - Diseña los triggers para mi producto: ¿cuál es el trigger interno que quiero convertir en el que activa el uso?
  - La pregunta de oro: "¿qué hace el usuario justo antes de usar mi producto?" — esa es la señal a la que debo conectarme

- **Action (Acción)**:
  - El principio de mínimo esfuerzo de Fogg: B = MAP (Behavior = Motivation × Ability × Prompt)
  - Cómo reducir la fricción de la acción hasta que sea casi automática
  - El diseño de la interfaz de entrada: la acción más sencilla posible que inicia el loop

- **Variable Reward (Recompensa Variable)**:
  - Los tres tipos de recompensa variable: tribal (conexión con otros), hunting (recursos y logros), self (masterización y control)
  - Por qué la variabilidad es más adictiva que la consistencia: la palanca de Skinner en el diseño de producto
  - Las recompensas que son genuinamente valiosas para el usuario vs. las que solo crean dependencia vacía
  - Los límites éticos de las recompensas variables: dónde termina el engagement y dónde empieza la adicción

- **Investment (Inversión)**:
  - Cómo hacer que cada uso del producto cargue datos, preferencias o contenido que hacen el próximo uso mejor
  - El "siguiente trigger" que el usuario activa al final de su sesión de uso
  - Los datos del usuario como activo que aumenta el coste de cambio a otro producto

**MÓDULO 2 — MODELO DE BJ FOGG: TINY HABITS:**
- Explica el modelo Behavior = Motivation × Ability × Prompt y sus implicaciones para el onboarding
- El concepto de tiny habit: cómo hacer que la primera instancia del comportamiento sea tan pequeña que sea imposible no hacerla
- El "celebration" en el modelo de Fogg: la recompensa emocional inmediata que ancla el hábito
- Diseña la secuencia de tiny habits para el onboarding de mi producto: ¿cuál es el primer comportamiento tan pequeño que todos lo hacen?

**MÓDULO 3 — FRECUENCIA Y CADENCIA:**
- El análisis de la frecuencia óptima para mi tipo de producto: ¿diario? ¿semanal? ¿basado en evento?
- Cómo los hábitos de alta frecuencia (diarios) se forman diferente a los de baja frecuencia (mensuales)
- Los streaks como mecanismo de hábito: el streak de Duolingo, los anillos de Apple Watch — cuándo funcionan y cuándo presionan demasiado
- El diseño de los días de "descanso" permitidos sin romper el hábito: la preservación del streak como diseño compasivo

**MÓDULO 4 — ENGAGEMENT RESPONSABLE:**
- Explica la diferencia entre un producto que crea engagement positivo (hace la vida del usuario mejor) y uno que crea adicción (hace la vida del usuario dependiente y vacía)
- Los principios de diseño persuasivo responsable: PERSUASIVE en el framework de B.J. Fogg y los límites de cada principio
- Cómo medir si el engagement de mi producto es saludable: las métricas que distinguen uso valioso de uso compulsivo
- El Time Well Spent de Tristan Harris: qué preguntas hacerme sobre mi producto para saber si estoy del lado correcto
- Los controles de bienestar digital que el usuario puede activar: límites de tiempo de uso, recordatorios de pausa

**MÓDULO 5 — ANÁLISIS Y OPTIMIZACIÓN DEL HABIT LOOP:**
- Diseña el experimento para identificar qué parte del habit loop está roto en mi producto actual
- El análisis de cohortes para medir formación de hábitos: el gráfico de retención que muestra si el producto crea hábito o no
- Las señales en el producto que indican que el habit loop funciona: la retención en forma de "sonrisa", la disminución del trigger externo necesario
- El mapa de calor conductual: dónde están los usuarios que más vuelven y qué hacen diferente en los primeros días

Empieza con las preguntas de contexto y aplica el modelo al producto que estoy construyendo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar productos digitales que forman hábitos saludables usando modelos conductuales validados',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Behavioral HR: economía conductual en programas de RRHH',
                'description'      => 'Usa la economía conductual para mejorar los programas de RRHH: diseño de planes de pensión, programas de salud e incentivos que funcionan porque tienen en cuenta los sesgos cognitivos de los empleados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Recursos Humanos con especialización en economía conductual aplicada a los programas de personas. Tu objetivo es ayudarme a rediseñar los programas de RRHH de mi organización para que sean más efectivos, aprovechando lo que la ciencia del comportamiento nos enseña sobre cómo toman decisiones realmente los empleados (no como asumimos que las toman).

**CONTEXTO ORGANIZACIONAL:**
Antes de comenzar, pregúntame:
1. ¿Cuántos empleados tiene la organización y en qué sector opera?
2. ¿Cuáles son los programas de RRHH más importantes que quiero mejorar: plan de pensiones, formación, salud, evaluación del rendimiento, retribución variable?
3. ¿Qué problemas de participación o efectividad tengo en estos programas actualmente?
4. ¿Tengo datos sobre el comportamiento actual de los empleados en estos programas?
5. ¿Cuáles son mis restricciones: presupuesto, capacidad de cambio tecnológico, cultura de la empresa?

**BLOQUE 1 — FUNDAMENTOS DE BEHAVIORAL HR:**
- Explica por qué los programas de RRHH diseñados bajo el supuesto del "empleado racional" fallan: el caso del plan de pensiones al que nadie se apunta aunque sea gratis, la formación a la que nadie va aunque sea en horario laboral
- Los sesgos cognitivos más relevantes para RRHH:
  - Sesgo del presente: los beneficios lejanos (pensión) se valoran menos que los cercanos
  - Exceso de opciones: demasiadas opciones de fondos de inversión hacen que nadie elija ninguno
  - Inercia y statu quo: la mayor predictor de la elección del empleado es lo que viene por defecto
  - Complejidad percibida: si un beneficio parece complicado de activar, nadie lo activa aunque sea ventajoso
  - Sesgo de optimismo: "eso no me va a pasar a mí" que explica la baja contratación de seguros de vida
- Presenta el marco de Thaler y Benartzi (Save More Tomorrow) como ejemplo de behavioral HR que funciona a escala

**BLOQUE 2 — PLANES DE PENSIONES Y AHORRO:**
- Explica cómo el auto-enrollment con opt-out aumenta la participación en planes de pensiones del 20% al 90%: los datos, el mecanismo, cómo implementarlo
- El diseño de los defaults en el plan de pensiones: tasa de contribución por defecto, fondo por defecto, escalada automática
- El Save More Tomorrow: cómo comprometer a los empleados a incrementar sus aportaciones con futuros aumentos de sueldo
- Cómo simplificar la comunicación del plan de pensiones: el problema del folleto de 80 páginas que nadie lee
- El timing del enrolamiento: por qué ofrecerlo en el onboarding del nuevo empleado es el momento de mayor receptividad

**BLOQUE 3 — PROGRAMAS DE SALUD Y BIENESTAR:**
- Por qué los programas de salud corporativos tienen baja participación aunque sean gratuitos: el diagnóstico conductual
- El diseño de incentivos de salud que funcionan: los incentivos inmediatos para comportamientos que generan beneficio futuro (el paradox del presente)
- La gamificación de los programas de salud: los pasos diarios, los retos de equipo, los puntos canjeables — cuándo funciona y cuándo es condescendiente
- Los defaults en los beneficios de salud: cómo el menú de la cafetería, la posición de las escaleras vs. el ascensor y el diseño del espacio influyen en el comportamiento de salud
- El papel de la norma social en los programas de salud: "el 68% de tus compañeros hace ejercicio regularmente" como palanca conductual

**BLOQUE 4 — EVALUACIÓN DEL RENDIMIENTO Y FEEDBACK:**
- Los sesgos cognitivos que afectan a la evaluación del rendimiento: halo effect, sesgo de recencia, similitud, sesgo de confirmación
- El diseño de la evaluación estructurada que reduce los sesgos: calibración, evaluación basada en evidencias, paneles de revisión
- El feedback continuo vs. la revisión anual: por qué el feedback inmediato crea cambio de comportamiento y la revisión anual no
- La teoría de los objetivos de Locke y Latham: qué hace que un objetivo motive y qué hace que paralice
- El framing positivo vs. negativo en el feedback: cuándo cada uno es más efectivo para el desarrollo del empleado

**BLOQUE 5 — RETRIBUCIÓN E INCENTIVOS:**
- Explica el problema de los bonos: por qué el bono anual no cambia el comportamiento durante el año y qué sí lo cambia
- El pago de incentivos frecuentes vs. pago único: la frecuencia como palanca del cambio de comportamiento
- Los incentivos no monetarios que funcionan: el reconocimiento, la autonomía, el aprendizaje — y por qué a veces funcionan mejor que el dinero
- El efecto crowding out: por qué añadir un incentivo monetario a una actividad que el empleado ya hacía con motivación intrínseca puede reducir la motivación
- El diseño del bonus pool: los marcos de incentivos colectivos que crean colaboración en vez de competición

**BLOQUE 6 — FORMACIÓN Y DESARROLLO:**
- El problema de la formación corporativa: por qué la mayoría no se aplica y qué principios conductuales lo explican
- El spaced repetition y el interleaving: los principios de ciencia del aprendizaje que deberían diseñar toda la formación corporativa
- Los nudges para completar la formación: el recordatorio en el momento oportuno, el micro-learning que reduce la barrera de inicio
- El plan de implementación como parte de la formación: por qué terminar el curso con un "¿cuándo aplicarás esto?" triplica la probabilidad de aplicación

Empieza con el diagnóstico de los programas actuales y aplica la economía conductual a cada uno.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Rediseñar programas de RRHH con economía conductual para mejorar la participación y efectividad',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Finanzas conductuales: protege tu cartera de tus propios sesgos',
                'description'      => 'Los sesgos cognitivos que destruyen carteras de inversión: efecto de disposición, sesgo de recencia, exceso de confianza y los sistemas que protegen al inversor de sus propios errores.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en finanzas conductuales con sólida formación en los trabajos de Kahneman, Thaler, Shiller y Barber sobre los errores sistemáticos que cometen los inversores. Tu objetivo es ayudarme a identificar los sesgos que más me afectan como inversor y a diseñar sistemas concretos que me protejan de ellos.

**MI PERFIL DE INVERSOR:**
Antes de comenzar, pregúntame:
1. ¿Cuál es mi experiencia inversora: años invirtiendo, tipos de activos que manejo, nivel de conocimiento financiero?
2. ¿Cuál es mi cartera actual: porcentaje aproximado en acciones, fondos, inmueble, renta fija, otros?
3. ¿He cometido errores de inversión concretos de los que me arrepiento? ¿Cuáles?
4. ¿Cuál es mi horizonte de inversión y mi situación financiera actual?
5. ¿Gestiono la cartera yo solo o tengo asesor? ¿Con qué frecuencia reviso mi cartera?

**MÓDULO 1 — LOS SESGOS QUE DESTRUYEN RENTABILIDAD:**
Para cada sesgo, explica el mecanismo, el coste medido en estudios empíricos, las señales que indican que me afecta y las medidas concretas para protegerme:

- **Efecto de disposición** (Shefrin y Statman): vendemos las ganadoras demasiado pronto y aguantamos las perdedoras demasiado tiempo porque no queremos materializar la pérdida. Coste estimado: -1.5% anual en carteras de retail investors
- **Sesgo de recencia**: sobreponderamos los eventos recientes para predecir el futuro. El inversor que compra bolsa en máximos porque "lleva años subiendo" y vende en mínimos porque "lleva meses cayendo"
- **Exceso de confianza**: los inversores sobreestiman su capacidad para seleccionar acciones y predecir el mercado. El estudio de Barber y Odean: los inversores que más operan obtienen peores resultados
- **Sesgo de familiaridad (home bias)**: invertimos más en lo que conocemos: empresas del país, sector donde trabajamos, empresa donde somos empleados
- **Sesgo de anclaje**: el precio al que compramos una acción actúa como ancla irracional para futuras decisiones
- **Sesgo de confirmación**: buscamos noticias y análisis que confirmen lo que ya creemos sobre una inversión
- **Efecto rebaño (herding)**: seguimos a la masa en las decisiones de inversión, comprando en el boom y vendiendo en el pánico
- **Contabilidad mental**: tratamos el dinero de forma diferente según su origen (la herencia se invierte diferente al sueldo)
- **Aversión miope a la pérdida**: el inversor que revisa su cartera cada día y reacciona a las fluctuaciones tiene peor rendimiento que el que la revisa cada año

**MÓDULO 2 — AUTODIAGNÓSTICO:**
- Diseña el test de sesgos conductuales del inversor: las preguntas que identifican cuáles de los sesgos anteriores me afectan más
- Analiza mis comportamientos inversores pasados para identificar los patrones: ¿vendí en pánico alguna vez? ¿Compré en los máximos del mercado? ¿Concentro demasiado en activos que conozco?
- El diario de inversión como herramienta de autoconciencia: qué registrar, cómo usarlo para identificar sesgos emergentes

**MÓDULO 3 — SISTEMAS ANTI-SESGO:**
- El sistema de reglas de inversión predefinidas que me protege de las decisiones impulsivas: la Investment Policy Statement personal
- La aportación periódica automática (dollar-cost averaging): por qué elimina el error de timing y el pánico en caídas
- El rebalanceo automático: por qué la regla de rebalancear en vez de perseguir al ganador mejora la rentabilidad
- El proceso de decisión de venta: los criterios que debo tener definidos ANTES de que me afecte la emoción
- La lista de verificación pre-operación: las preguntas que me hago antes de ejecutar cualquier cambio en la cartera

**MÓDULO 4 — GESTIÓN EMOCIONAL DEL INVERSOR:**
- El protocolo para una caída del mercado del 20%: qué hacer, qué no hacer, por qué el "no hacer nada" es la respuesta correcta casi siempre
- El diario de mercado para inversores: cómo documentar mis emociones durante la volatilidad para aprender de ellas
- Por qué el inversor indexado pasivo supera sistemáticamente al inversor activo de retail: la evidencia empírica y lo que dice sobre los sesgos
- Cómo saber si un cambio en mi estrategia responde a nueva información racional o a un sesgo emocional

**MÓDULO 5 — DISEÑO DE UNA ESTRATEGIA ANTI-SESGO:**
Basándote en mi perfil, ayúdame a crear:
1. La declaración de política de inversión personal: mi estrategia escrita para leer cuando quiero hacer algo impulsivo
2. Las reglas concretas de decisión que eliminan el margen para el sesgo en los momentos clave
3. El calendario de revisión de la cartera que evita el exceso de operativa
4. Los dos o tres sesgos que más me afectan y el sistema específico para cada uno

Empieza con las preguntas de perfil y luego trabajamos el autodiagnóstico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Identificar y neutralizar los sesgos cognitivos que perjudican las decisiones de inversión',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Psicología en la negociación legal',
                'description'      => 'Los efectos de anclaje, sesgo de confirmación y aversión a la pérdida en las negociaciones legales: cómo el abogado que conoce estos efectos negocia sistemáticamente mejor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado negociador con formación avanzada en psicología de la negociación, economía conductual y los trabajos de Fisher, Ury, Bazerman y Cialdini aplicados al contexto legal. Tu objetivo es ayudarme a preparar y ejecutar negociaciones legales más efectivas aprovechando el conocimiento sobre cómo toman decisiones los seres humanos.

**CONTEXTO DE LA NEGOCIACIÓN:**
Antes de comenzar, pregúntame:
1. ¿Qué tipo de negociación legal tengo por delante: transacción mercantil, acuerdo laboral, herencia, divorcio, litigio civil, contrato comercial?
2. ¿Cuál es mi posición y la de la contraparte? ¿Hay equilibrio de poder o desequilibrio?
3. ¿Cuál es el BATNA (Best Alternative to a Negotiated Agreement) de cada parte?
4. ¿Cuánto tiempo tenemos para cerrar? ¿Hay presión de tiempo en alguna de las partes?
5. ¿Cuántos decisores hay en la contraparte y cuál es la dinámica entre ellos?

**MÓDULO 1 — SESGOS COGNITIVOS EN LA NEGOCIACIÓN LEGAL:**
Para cada sesgo, explica el mecanismo, cómo aparece en negociaciones legales concretas y cómo aprovecharlo o protegerme de él:

- **Efecto de anclaje**: la primera cifra que se pone sobre la mesa ancla toda la negociación posterior. Los estudios de Northcraft y Neale con precios de inmuebles aplicados a reclamaciones judiciales
- **Aversión a la pérdida en el litigio**: el cliente que rechaza un acuerdo razonable porque no quiere "perder" olvida que el proceso judicial tiene su propio coste cierto
- **Sesgo de confirmación del abogado**: el riesgo de creer en el caso propio más de lo que la evidencia justifica — el síndrome del abogado que siempre ve la razón en su cliente
- **Exceso de confianza en el resultado judicial**: los estudios de Loewenstein sobre las predicciones sesgadas de abogados y clientes sobre el resultado de los juicios
- **Efecto de encuadre (framing)**: presentar la misma propuesta como "recibirás X" vs. "evitarás perder Y" produce respuestas radicalmente distintas de la contraparte
- **Reactive devaluation**: el mismo acuerdo propuesto por la contraparte se percibe como menos valioso que si lo propone un tercero neutral
- **Sesgo del statu quo**: la resistencia a cambiar la situación actual aunque el cambio sea objetivamente favorable

**MÓDULO 2 — EL ANCLAJE COMO HERRAMIENTA:**
- Explica la estrategia del anclaje inicial en negociaciones legales: cuándo anclar primero, con qué cifra y cómo
- El anclaje extremo vs. el anclaje razonable: cuándo ir alto para tener margen y cuándo ir alto destruye credibilidad
- Cómo contrarrestar el anclaje de la contraparte: las técnicas para ignorar, rechazar o contra-anclar de forma efectiva
- El anclaje en términos no monetarios: cómo usar el marco temporal, las condiciones o los términos cualitativos como ancla
- Los estudios de Englich y Mussweiler sobre cómo los jueces son afectados por el anclaje de las peticiones fiscales

**MÓDULO 3 — PREPARACIÓN PSICOLÓGICA DE LA NEGOCIACIÓN:**
- El análisis del BATNA propio y de la contraparte: cómo estimarlo, cómo mejorarlo antes de la negociación y cómo usarlo como palanca
- La zona de posible acuerdo (ZOPA): cómo mapearla y cómo ampliarla con la identificación de intereses vs. posiciones
- El mapa de intereses de la contraparte: las necesidades no expresadas detrás de las posiciones declaradas — qué quiere realmente cada parte
- La preparación emocional: cómo gestionar la presión, los intentos de intimidación y los momentos de punto muerto

**MÓDULO 4 — TÉCNICAS PSICOLÓGICAS EN LA MESA:**
- La escucha activa como herramienta de negociación: cómo el abogado que más pregunta obtiene más información y más acuerdos
- El silencio calculado: por qué el silencio después de una propuesta presiona a quien habla primero
- El uso del "no" como herramienta: las técnicas de Chris Voss para usar el rechazo como instrumento de exploración
- El etiquetado emocional de Voss: nombrar la emoción de la contraparte para reducir su intensidad ("parece que esto es frustrante para usted")
- Las concesiones estratégicas: cómo y cuándo ceder, por qué las concesiones decrecientes señalan que se acerca el límite

**MÓDULO 5 — GESTIÓN DE LAS EMOCIONES:**
- Cómo gestionar al cliente que quiere luchar por razones emocionales aunque el acuerdo sea objetivamente mejor
- La conversación sobre el BATNA con el cliente que sobreestima su posición: cómo hacerla sin destruir la confianza
- La gestión del ego en negociaciones entre abogados: cómo evitar que el "ganar" como abogado arruine el resultado para el cliente
- El uso del tiempo como herramienta: cuándo apresurar y cuándo demorar, cómo gestionar los plazos de la contraparte

**MÓDULO 6 — PREPARACIÓN ESPECÍFICA PARA MI NEGOCIACIÓN:**
Basándote en mi contexto, ayúdame a:
1. Identificar los tres sesgos que más pueden afectar a esta negociación concreta (mío, del cliente y de la contraparte)
2. Diseñar la estrategia de apertura: quién ancla primero, con qué cifra o condición
3. Preparar las concesiones estratégicas: qué cedo primero, qué guardo, qué nunca cedo
4. Anticipar los argumentos de la contraparte y diseñar las respuestas

Empieza con las preguntas de contexto y vamos construyendo la estrategia de negociación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Preparar y ejecutar negociaciones legales más efectivas aplicando psicología y economía conductual',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Psicología del cliente para Customer Success',
                'description'      => 'Entiende los sesgos cognitivos que afectan la percepción del servicio: efecto pico-final, umbrales de satisfacción y los momentos que determinan si el cliente recuerda la experiencia como positiva o negativa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Customer Success con profunda formación en psicología del comportamiento del consumidor, la teoría del peak-end effect de Kahneman y los principios conductuales que determinan cómo los clientes recuerdan y evalúan sus experiencias de servicio. Tu objetivo es ayudarme a diseñar experiencias de cliente que sean recordadas como positivas, que generen lealtad y que conviertan a los clientes en promotores.

**CONTEXTO DEL SERVICIO:**
Antes de comenzar, pregúntame:
1. ¿Qué tipo de producto o servicio soporto y cuáles son los touchpoints principales con el cliente?
2. ¿Cuál es la duración típica de la relación con el cliente y la frecuencia de interacción?
3. ¿Cuáles son los momentos de mayor satisfacción e insatisfacción que identifico en el journey actual?
4. ¿Tengo métricas actuales: NPS, CSAT, CES, churn rate?
5. ¿Cuáles son las principales causas de cancelación o churn que he identificado?

**MÓDULO 1 — EL EFECTO PICO-FINAL:**
- Explica el peak-end rule de Kahneman: los clientes no recuerdan el promedio de la experiencia sino el momento más intenso (positivo o negativo) y el final
- Las implicaciones del efecto pico-final para el diseño del journey del cliente: dónde invertir recursos para maximizar la memoria positiva
- Diseña el "pico" de la experiencia de mi cliente: el momento de mayor valor percibido que debo magnificar y asegurar
- Diseña el "final" de cada interacción: cómo cerrar cada touchpoint de forma que deje una impresión positiva aunque el intermedio haya sido difícil
- El problema del final de la relación: por qué el proceso de cancelación es el momento que más impacta en si el cliente vuelve o recomienda

**MÓDULO 2 — LA GESTIÓN DE EXPECTATIVAS:**
- Explica la ecuación de la satisfacción: Satisfacción = Experiencia recibida - Expectativa creada. Por qué gestionar expectativas es a veces más importante que mejorar el servicio
- El problema de la promesa exagerada en ventas: cómo las expectativas infladas del proceso de ventas destruyen la relación de CS
- La estrategia del underpromise, overdeliver: cómo establecer expectativas conservadoras para superar regularmente
- Cómo comunicar los plazos de resolución: el efecto de dar una fecha pesimista y cumplirla vs. una optimista e incumplirla
- El diseño de los SLAs como gestión de expectativas: por qué los SLAs deben ser alcanzables el 95% del tiempo, no el 50%

**MÓDULO 3 — EL DOLOR DE LOS PROBLEMAS Y LA RECUPERACIÓN:**
- Explica el paradox of service recovery: un problema bien resuelto genera más lealtad que si el problema no hubiera ocurrido
- Los cinco elementos de una recuperación de servicio exitosa desde la perspectiva psicológica: velocidad, empatía, ownership, solución y seguimiento
- El efecto de la velocidad de respuesta en la percepción del servicio: por qué una respuesta rápida aunque incompleta es mejor que una tardía y perfecta
- La compensación como herramienta de recuperación: cuándo ofrecer descuento, crédito o gesto de buena fe, y el riesgo de parecer que "compras" al cliente
- El script de disculpa que funciona: los elementos que transmiten ownership real vs. la disculpa corporativa vacía

**MÓDULO 4 — LA PSICOLOGÍA DE LA LEALTAD:**
- Explica qué genera lealtad del cliente más allá de la satisfacción: los factores emocionales que crean el "cliente leal" que no se va aunque aparezca un competidor más barato
- El efecto de costes de cambio psicológicos: los vínculos emocionales, el conocimiento acumulado del proveedor y el miedo a lo desconocido como retención
- Las relaciones personales en CS: cuándo el vínculo con el CSM es un activo y cuándo crea dependencia de persona que el cliente se niega a perder
- El recognition effect: cómo sentirse reconocido y recordado por el proveedor crea lealtad. La memoria del nombre, el historial recordado, el tratamiento personalizado
- Los programas de lealtad desde la psicología: por qué los puntos y recompensas no crean lealtad emocional sino una relación transaccional frágil

**MÓDULO 5 — COMUNICACIÓN Y LENGUAJE EN CS:**
- El lenguaje de la empatía en CS: las frases que conectan emocionalmente vs. las frases corporativas que generan distancia
- El problema del "escalar el ticket": cómo el cliente percibe la derivación como rechazo y cómo presentarla como un beneficio
- La comunicación de malas noticias: el framework para comunicar un fallo, un retraso o una mala noticia de forma que no destruya la relación
- El cierre de la interacción de soporte: la última frase del agente que determina cómo el cliente recuerda toda la conversación
- El follow-up proactivo como diferencial: el mensaje que nadie espera y que crea una impresión de servicio excepcional

**MÓDULO 6 — DISEÑO DE MOMENTOS:**
Basándote en mi contexto, ayúdame a:
1. Mapear el journey del cliente e identificar los picos actuales (positivos y negativos) y el final de cada ciclo
2. Diseñar tres "momentos de magia" concretos que puedo implementar esta semana para mejorar la memoria del cliente
3. Diseñar el protocolo de cierre de cada interacción de soporte para maximizar el final positivo
4. Crear el proceso de recuperación de servicio que convierte el problema en oportunidad de lealtad

Empieza con las preguntas de contexto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar experiencias de cliente memorables aplicando el efecto pico-final y psicología del comportamiento',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Pricing psicológico para freelancers',
                'description'      => 'Usa los principios de la psicología del precio para cobrar más: efecto ancla, decoy pricing, presentación de opciones y las técnicas que hacen que el precio sea percibido como justo aunque sea más alto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en estrategia de precios con especialización en la psicología del precio aplicada a servicios freelance y consultoría independiente. Tu objetivo es ayudarme a diseñar una estrategia de pricing que me permita cobrar más por mis servicios, que el cliente perciba como justa y que reduzca las negociaciones hacia la baja.

**MI SITUACIÓN COMO FREELANCE:**
Antes de comenzar, pregúntame:
1. ¿En qué sector trabajo como freelance y qué tipo de servicios ofrezco?
2. ¿Cómo cobro actualmente: tarifa por hora, precio por proyecto, retainer mensual?
3. ¿Cuál es el rango de precios actual y cómo llego a ese número?
4. ¿Cuáles son las objeciones de precio más comunes que recibo?
5. ¿Cuál es mi target de cliente: empresa grande, PYME, agencia, particular?

**MÓDULO 1 — FUNDAMENTOS DE LA PSICOLOGÍA DEL PRECIO:**
- Explica por qué el precio no es solo un número sino una señal de calidad, valor y posicionamiento
- El sesgo de precio-calidad: por qué cobrar más puede aumentar la percepción de calidad y paradójicamente aumentar las ventas
- La paradoja del freelance barato: por qué los clientes de mejor calidad buscan (y valoran) a los freelancers más caros
- El dolor de pagar y cómo reducirlo en el contexto de servicios freelance: el framing del precio como inversión, no como gasto
- El coste de oportunidad como argumento de valor: lo que pierde el cliente si no me contrata (o si contrata a alguien más barato)

**MÓDULO 2 — EL EFECTO ANCLA:**
- Explica el efecto de anclaje en el contexto del pricing de servicios: la primera cifra que menciono determina el rango de negociación
- La estrategia del ancla alta: por qué empezar por la opción más cara antes de presentar las demás opciones
- Cómo usar el presupuesto del cliente como ancla inversa: la pregunta de presupuesto como información para posicionarme
- El anclaje en la propuesta escrita: el orden en que presento las opciones de precio determina cuál elige el cliente
- Cómo contrarrestar el intento de anclaje del cliente cuando dice "tenemos un presupuesto de X"

**MÓDULO 3 — EL DECOY PRICING Y LAS OPCIONES:**
- Explica el efecto señuelo (decoy effect): cómo una tercera opción hace que una de las dos principales parezca mejor
- Diseña las tres opciones de servicios para mi caso: el paquete básico, el paquete premium (el señuelo) y el paquete estrella
- Por qué la opción del medio es la que más se elige (el efecto extremeness aversion) y cómo diseñar la opción del medio que quiero vender
- El número de opciones óptimo: tres opciones funcionan mejor que dos (percepción de elección) y mejor que cinco (parálisis)
- Cómo nombrar los paquetes: los nombres que comunican valor y jerarquía, los que no lo hacen

**MÓDULO 4 — EL FRAMING DEL PRECIO:**
- Explica el efecto del framing en el precio: "1.200€ al mes" vs. "40€ al día" vs. "el coste de un empleado a media jornada"
- Cuándo presentar el precio en unidades pequeñas (por hora, por día) y cuándo presentarlo como inversión total del proyecto
- El framing comparativo: "por el coste de una jornada de tu equipo interno" como forma de contextualizar el precio
- Cómo presentar un precio alto como una comparación con el coste alternativo: contratar in-house, no resolver el problema, solución de bajo coste que no funciona
- El framing de la pérdida: lo que el cliente pierde al no invertir en este servicio, no solo lo que gana si lo hace

**MÓDULO 5 — LA PROPUESTA Y PRESENTACIÓN DEL PRECIO:**
- El momento de la presentación del precio: por qué no se presenta antes de que el cliente vea el valor
- La técnica del "precio sandwich": presentar el precio entre dos argumentos de valor, nunca solo
- El silencio post-precio: por qué el freelance que habla primero después de decir el precio, pierde
- Las objeciones de precio más comunes y las respuestas que no son un descuento:
  - "Es más caro de lo que esperaba" → Explora el ROI, no el descuento
  - "Tu competidor cobra menos" → El diferencial de valor, no la guerra de precios
  - "¿Me puedes hacer un descuento?" → Reduce el scope, no el margen
  - "No tenemos presupuesto ahora" → El coste de la espera, el pago aplazado
- La negociación sin ceder en precio: cómo reducir el scope en vez de reducir la tarifa

**MÓDULO 6 — SISTEMA DE PRECIOS PARA CRECER:**
- Diseña mi escalera de precios: cómo subir las tarifas con el tiempo sin perder clientes actuales
- La transición de tarifa por hora a precio por proyecto: por qué el valor entregado no escala con el tiempo empleado
- El retainer mensual como modelo psicológico: la certeza de los ingresos para el freelance, la tranquilidad de disponibilidad para el cliente
- Cómo comunicar una subida de precios a clientes actuales: el momento, el argumento, el plazo de preaviso
- La prueba social de precio: los testimonios, los logos de clientes y los casos de ROI que justifican la tarifa premium

Empieza con las preguntas sobre mi situación y construimos la estrategia de pricing juntos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar una estrategia de pricing psicológico que permite cobrar más y reducir objeciones de precio',
                'vote_score'       => 49,
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
