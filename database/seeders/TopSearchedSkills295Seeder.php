<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills295Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Upsell marketing: campañas que expanden el valor del cliente actual',
                'description'      => 'Diseña estrategias de upsell y cross-sell orientadas a clientes existentes para aumentar el ingreso medio por cuenta sin incrementar el coste de adquisición.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing de retención y expansión de ingresos con experiencia en empresas SaaS B2B y B2C de alto crecimiento. Tu misión es ayudarme a diseñar una estrategia de upsell y cross-sell orientada exclusivamente a clientes actuales, con el objetivo de aumentar el ingreso medio por cuenta (ARPA) sin incrementar el coste de adquisición de nuevos clientes.

Contexto de mi negocio:
Tenemos [describe brevemente tu producto o servicio]. Nuestro plan base cuesta [precio] y disponemos de [describe los planes superiores o productos adicionales que podríamos vender]. La mayoría de nuestros clientes están en el plan [nombre del plan], y detectamos que [porcentaje estimado] podrían beneficiarse de características premium que aún no usan.

Lo que necesito:

1. SEGMENTACIÓN PARA UPSELL
Explica cómo identificar los segmentos de clientes con mayor propensión a expandir su gasto. Define los criterios de segmentación basados en comportamiento de producto (uso intensivo de una funcionalidad, acercamiento a un límite de plan, frecuencia de login), madurez en el uso (tiempo de vida como cliente, número de integraciones activas, tamaño del equipo que usa la herramienta) y señales contextuales externas (crecimiento de la empresa cliente, cambio de rol del contacto principal, nueva financiación). Para cada segmento, indica el mensaje de upsell más relevante y el canal preferido.

2. ESTRATEGIA DE CONTENIDO PARA UPSELL
¿Cómo educo a un cliente sobre el valor del plan superior sin que sienta que le estoy vendiendo? Diseña una estrategia de contenido educativo que prepare el terreno para el upsell: qué tipo de contenido enviar en cada etapa de madurez del cliente (artículo de caso de uso, webinar de funciones avanzadas, comparativa de planes con ejemplos reales), cuándo introducir el mensaje de actualización y cómo usar el propio producto como canal (tooltips, banners in-app, notificaciones de uso).

3. CAMPAÑAS DE UPSELL POR CANAL
Diseña campañas específicas por canal con ejemplos concretos:
- Email de upsell basado en comportamiento (el cliente usa el ochenta por ciento de su límite de plan): asunto, cuerpo y CTA
- Secuencia de email de upsell por expansión de equipo (el cliente añadió nuevos usuarios recientemente)
- Mensaje de upsell en el momento del éxito (el cliente acaba de conseguir un resultado clave con el producto)
- Campaña de cross-sell para producto adicional relacionado con el plan actual

4. PRICING PSICOLÓGICO EN EL UPSELL
¿Cómo presentar el precio del upgrade para que parezca una inversión y no un coste? Explica técnicas de anclaje de precio, el uso del precio mensualizado, la comparación de coste por usuario, y cómo estructurar los incentivos de actualización (descuento por primer mes, migración sin fricción, prueba gratuita del plan superior por catorce días).

5. EL MOMENTO DEL UPSELL: CUÁNDO Y CÓMO
Define los cinco momentos de mayor propensión a actualizar en el ciclo de vida del cliente y qué acción de marketing desencadena cada uno. Incluye también los tres momentos en los que nunca se debe intentar el upsell (cliente con ticket de soporte abierto, cliente en período de renovación bajo riesgo, cliente que acaba de sufrir un incidente) y por qué son contraproducentes.

6. MÉTRICAS DEL PROGRAMA DE UPSELL
Define el cuadro de mando mínimo para medir el éxito del programa: tasa de conversión de upsell por segmento, ARPA antes y después, tiempo medio hasta la actualización desde el primer trigger, revenue de expansión como porcentaje del MRR total, y net revenue retention como indicador de salud global. ¿Cuándo un programa de upsell está funcionando y cuándo hay que revisarlo?

Responde con ejemplos concretos adaptados a mi negocio. Donde pidas información de contexto, indica con corchetes lo que debo completar antes de usar la recomendación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar campañas de upsell y cross-sell que incrementan el ingreso por cliente actual',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Feature flags y monetización: controlar el acceso a features premium en el código',
                'description'      => 'Implementa un sistema de feature flags que habilite la monetización por niveles de plan, experimentos A/B y despliegues graduales sin romper la experiencia del usuario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero senior con experiencia en sistemas de feature flags, arquitectura de SaaS multi-plan y monetización de producto a través del control de acceso a funcionalidades. Necesito diseñar e implementar un sistema de feature flags que permita controlar el acceso a características premium según el plan del usuario, realizar experimentos y hacer despliegues graduales de forma segura.

Contexto técnico:
Mi stack es [describe tu tecnología: lenguaje de backend, framework, base de datos, frontend]. Actualmente tenemos [número de planes] con las siguientes diferencias de funcionalidad: [describe brevemente los planes]. No tenemos ningún sistema de feature flags o lo tenemos de forma rudimentaria con [condicionales hardcodeados / columna de base de datos / etc.].

Lo que necesito:

1. ARQUITECTURA DEL SISTEMA DE FEATURE FLAGS
Explica las tres estrategias principales para implementar feature flags en una aplicación SaaS: flags booleanos simples (on/off por usuario o plan), flags con variantes (para A/B testing con porcentajes de tráfico) y flags de targeting por segmento (basados en atributos del usuario como plan, país, fecha de registro, empresa). Para cada estrategia indica cuándo usarla, qué tabla o estructura de datos necesita en base de datos y cómo se evalúa en tiempo de ejecución sin penalizar el rendimiento.

2. MODELO DE DATOS Y EVALUACIÓN EN SERVIDOR
Diseña el esquema de base de datos para el sistema de feature flags con capacidad para soportar miles de usuarios con latencia mínima. Incluye: tabla de definición de flags (nombre, tipo, valores posibles, descripción), tabla de reglas de targeting (condición, valor esperado, porcentaje de inclusión), tabla de override por usuario específico para soporte y debugging, y estrategia de cacheo (Redis o similar) para evitar consultas repetidas en cada request. Muestra el código de la función de evaluación de un flag en [lenguaje preferido].

3. INTEGRACIÓN CON EL MODELO DE PLANES Y SUSCRIPCIONES
¿Cómo vinculo el sistema de flags con el plan de suscripción del usuario sin acoplar ambos sistemas? Define la capa de abstracción recomendada: cómo el servicio de feature flags recibe el contexto del usuario (plan, features contratadas, overrides), cómo evitar lógica de negocio de precios dentro del evaluador de flags, y cómo manejar los edge cases de usuarios en período de gracia, prueba gratuita o plan heredado.

4. FEATURE FLAGS EN FRONTEND
¿Cómo expongo el estado de los flags al frontend de forma segura? Diseña la API de consulta de flags para el cliente (qué flags exponer, cuáles ocultar siempre por seguridad), el patrón de componente de UI que oculta o deshabilita funcionalidad según el flag (con ejemplo en React o Vue), y cómo manejar el estado de "plan upgrade needed" con un modal o CTA de actualización en lugar de simplemente esconder la funcionalidad.

5. DESPLIEGUES GRADUALES Y FEATURE TOGGLES DE SEGURIDAD
Explica cómo usar los feature flags para reducir el riesgo de los despliegues: porcentaje de rollout progresivo (uno por ciento, diez por ciento, cincuenta por ciento, cien por ciento), flag de kill switch para desactivar una funcionalidad sin desplegar código, y flag de acceso anticipado para beta users internos o early adopters. ¿Qué métricas monitorizo en cada fase del rollout para decidir si avanzo o revierto?

6. DEUDA TÉCNICA DE LOS FLAGS: LIMPIEZA Y GOBIERNO
Los feature flags abandonados se convierten en deuda técnica. ¿Cómo gestiono el ciclo de vida de un flag? Define el proceso: cómo documentar la intención y fecha de expiración de cada flag, cómo detectar flags nunca evaluados o siempre activos (candidatos a ser eliminados del código), y qué proceso de pull request incluye la eliminación del flag y el código alternativo cuando el rollout llega al cien por ciento.

Incluye ejemplos de código funcionales en [lenguaje]. El objetivo es que pueda implementar esto en una semana con un equipo pequeño.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar feature flags para controlar acceso a funcionalidades premium y hacer despliegues seguros',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño del upgrade flow: la experiencia que convierte al usuario free en de pago',
                'description'      => 'Diseña los flujos de actualización de plan que maximizan la conversión de usuarios freemium a suscripción de pago con fricción mínima.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de producto con experiencia en modelos freemium y en la optimización de flujos de conversión de plan. Tu misión es ayudarme a diseñar la experiencia de usuario que transforma a un usuario gratuito en un cliente de pago, desde el primer momento en que encuentra el límite de su plan hasta que introduce su tarjeta y confirma la actualización.

Contexto de mi producto:
Mi producto es [describe brevemente el producto SaaS, app o plataforma]. El plan gratuito permite [describe los límites principales]. El plan de pago cuesta [precio] y ofrece [ventajas principales]. Actualmente nuestro mayor problema en la conversión es [usuarios que no encuentran el CTA de upgrade / abandono en el checkout / no perciben el valor del plan premium / fricción en el proceso de pago].

Lo que necesito:

1. MAPA DEL UPGRADE FLOW COMPLETO
Diseña el flujo completo desde el punto de fricción hasta la confirmación de pago. Identifica los tres puntos principales donde el usuario free encuentra el límite de su plan y define qué debe ver en cada uno: el mensaje de bloqueo (cómo comunicar el límite sin frustrar al usuario), la pantalla de comparativa de planes (qué información mostrar y en qué orden), el checkout (campos mínimos, opciones de pago, garantías de confianza) y la pantalla de confirmación (cómo reforzar la decisión y activar al usuario en el plan premium inmediatamente). Para cada pantalla especifica el objetivo principal del diseño y las métricas de éxito.

2. EL MOMENTO DE FRICCIÓN: DISEÑAR EL PAYWALL CORRECTO
¿Cómo diseño el paywall para que motive la actualización en lugar de frustrar al usuario? Explica la diferencia entre paywall de bloqueo duro (el usuario no puede continuar) y paywall de bloqueo suave (puede ver qué se perdería), cuándo usar cada uno, cómo incluir en el mensaje de bloqueo el beneficio inmediato del upgrade y no solo el límite alcanzado, y cómo diseñar el CTA de actualización con jerarquía visual correcta dentro del contexto de la tarea que el usuario estaba haciendo.

3. PÁGINA DE COMPARATIVA DE PLANES
Diseña la estructura de la página de precios o comparativa de planes que maximiza la conversión: cómo organizar las características (las más valoradas primero, no las más técnicas), cómo usar el plan recomendado para anclar la decisión, cómo presentar el precio anual versus mensual para favorecer el anual sin forzar al usuario, y qué elementos de prueba social (número de usuarios del plan, testimonios, logos de clientes) colocar en qué posición de la página.

4. REDUCIR LA FRICCIÓN EN EL CHECKOUT
El checkout es el punto de mayor abandono. Define el diseño del checkout de menor fricción posible: número mínimo de campos (nombre, email, tarjeta), indicadores de seguridad y confianza (logos de pago seguro, política de cancelación visible), manejo del error de tarjeta sin perder el contexto del usuario, y cómo ofrecer la prueba gratuita del plan premium (si existe) como alternativa de bajo compromiso antes del pago completo.

5. EXPERIENCIA POST-UPGRADE: LOS PRIMEROS CINCO MINUTOS
El upgrade no termina con el cobro. Diseña la experiencia inmediata tras la actualización: mensaje de confirmación que refuerza la decisión con el beneficio específico que acaba de desbloquear, guía de las tres primeras acciones que debe hacer con el plan premium, notificación in-app de bienvenida al plan superior y email de confirmación que no solo da el recibo sino que activa al usuario en las funciones nuevas.

6. TESTING Y OPTIMIZACIÓN DEL FLOW
¿Cómo itero el upgrade flow con datos reales? Define qué variantes vale la pena testear primero (copy del CTA de upgrade, estructura de la página de planes, precio mensual versus anual en pantalla, posición del botón en el checkout), qué tamaño de muestra necesito para tener resultados significativos, y cómo interpretar los datos de embudo (dónde hay caída de conversión, qué señal indica que el problema es el precio versus el diseño versus la propuesta de valor).

Incluye recomendaciones específicas con ejemplos visuales en texto (qué dice el título, el subtítulo, el CTA) para que pueda trasladar las decisiones directamente a Figma o a código.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar la experiencia de actualización de plan que maximiza la conversión de freemium a pago',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Account expansion: de la venta inicial a la cuenta que crece año a año',
                'description'      => 'Desarrolla la estrategia y las tácticas de expansión de cuentas para aumentar el valor de cada cliente a lo largo del tiempo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con especialización en account management y expansion revenue en entornos B2B de venta consultiva. Tu misión es ayudarme a desarrollar una estrategia completa de expansión de cuentas que transforme la venta inicial en una relación comercial que crece año a año.

Contexto de mi negocio:
Vendo [producto o servicio] a [perfil del cliente: tamaño de empresa, sector, rol del decisor]. El ticket inicial promedio es de [importe]. Actualmente el expansion revenue representa [porcentaje] de nuestro ARR total, y el mayor obstáculo para crecer en las cuentas existentes es [falta de relación con otros departamentos / desconocimiento del potencial del cliente / falta de proceso sistemático / resistencia interna del cliente].

Lo que necesito:

1. MAPA DE EXPANSIÓN DE CUENTA
Define el framework para identificar el potencial de expansión de cada cuenta: cómo calcular el Account Whitespace (la diferencia entre lo que ya compra el cliente y lo que podría comprar dado su perfil), cómo priorizar qué cuentas trabajar para expansión versus cuáles mantener en modo de gestión estándar, y qué información del cliente debo tener actualizada para hacer un buen análisis de potencial (número de empleados, departamentos sin contrato, presupuesto disponible, ciclo fiscal).

2. ESTRATEGIA DE MULTITHREADING: ENTRAR EN MÁS DEPARTAMENTOS
La expansión requiere acceder a nuevos contactos dentro del mismo cliente. Explica cómo construir una estrategia de multithreading: cómo identificar a los stakeholders de otros departamentos que podrían beneficiarse de mi solución, cómo conseguir que mi contacto principal me introduzca a otros interlocutores sin parecer agresivo, y cómo construir una historia de valor diferente para cada departamento usando los resultados ya conseguidos en el departamento que ya usa el producto.

3. UPSELL Y CROSS-SELL: CONVERSACIONES QUE NO PARECEN VENTAS
¿Cómo introduzco la conversación de expansión sin que el cliente sienta que le están vendiendo algo más? Define la secuencia de la conversación de expansion: cuándo es el momento correcto (tras un éxito demostrable, en la revisión de negocio trimestral, tras una solicitud de soporte que revela una necesidad no cubierta), qué preguntas de diagnóstico abren la puerta a la conversación de expansión, y cómo formular la propuesta de expansión como una extensión lógica del éxito ya conseguido.

4. EL QBR COMO PALANCA DE EXPANSIÓN
La revisión de negocio trimestral (QBR) es la mejor oportunidad para la expansión. Diseña la estructura de un QBR orientado a la expansión: cómo presentar los resultados conseguidos de forma que hagan evidente el ROI de la relación, qué preguntas sobre los objetivos del próximo período abren la puerta a conversaciones de nuevas necesidades, y cómo cerrar el QBR con un siguiente paso concreto hacia la expansión (prueba de un módulo adicional, presentación a otro departamento, análisis de whitespace conjunto).

5. GESTIÓN DEL CICLO DE RENOVACIÓN CON EXPANSIÓN
La renovación es el momento de defender el contrato actual pero también de expandirlo. Define el proceso de renovación con expansión: cuándo empezar la conversación de renovación (noventa, sesenta y treinta días antes), cómo posicionar el aumento de precio o el upgrade de plan como una mejora natural de la relación, y cómo manejar la objeción de presupuesto cuando el cliente quiere renovar en las mismas condiciones.

6. MÉTRICAS DE EXPANSIÓN Y TARGETS
Define el cuadro de mando del account manager orientado a la expansión: net revenue retention como métrica principal (qué significa un NRR por encima del cien por ciento y cómo conseguirlo), pipeline de expansión diferenciado del pipeline de nuevos logos, tasa de upsell por cuenta y por vertical, y cómo establecer targets de expansión por comercial que sean ambiciosos pero alcanzables.

Sé específico con ejemplos de conversaciones, preguntas y argumentos que pueda usar en mis próximas reuniones con clientes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desarrollar estrategia de expansión de cuentas para aumentar el valor de cada cliente año a año',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Expansion revenue: features y modelos que hacen crecer el ARR sin nuevo logo',
                'description'      => 'Define la estrategia de producto para generar expansion revenue a través de funcionalidades, modelos de precios y flujos que aumentan el valor de cada cliente existente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager con experiencia en crecimiento de ARR a través de expansion revenue en empresas SaaS. Tu misión es ayudarme a diseñar la estrategia de producto que genera ingresos de expansión: más dinero de los clientes que ya tenemos, sin necesidad de captar nuevos logos.

Contexto de mi producto:
Mi producto es [describe brevemente]. Nuestro modelo de precios actual es [suscripción plana / por asiento / por uso / freemium]. El ARR actual es [importe aproximado o rango] y el expansion revenue representa aproximadamente [porcentaje]. El principal bloqueo para crecer en expansion revenue es [modelo de precios que no captura el valor / falta de features premium diferenciados / clientes que no usan lo que ya tienen / pricing por asiento que desincentiva el crecimiento del equipo].

Lo que necesito:

1. ANÁLISIS DEL MODELO DE PRECIOS PARA EXPANSIÓN
Evalúa mi modelo de precios actual desde la perspectiva del expansion revenue. ¿En qué medida el modelo actual captura valor cuando el cliente crece? Explica las ventajas y desventajas de cada modelo para la expansión: por asiento (crece con el equipo pero desincentiva la adopción amplia), por uso o consumo (captura el valor pero introduce incertidumbre en el cliente), tiered con límites (predecible pero requiere upsell activo), y modelo híbrido (plataforma fija más componentes de uso variable). ¿Cuál encaja mejor con mi negocio y por qué?

2. FEATURES QUE GENERAN EXPANSION REVENUE
¿Qué tipo de funcionalidades tienen mayor potencial para convertirse en palancas de expansión? Clasifica las features por su potencial de monetización: features de colaboración y multiusuario (cuanto más las usa el equipo, más asientos o más uso), features de integración con otros sistemas (crean dependencia y justifican planes superiores), features de análisis e inteligencia (alto valor percibido, bajo coste marginal de entrega) y features de automatización (sustituyen trabajo manual, el ROI es fácil de calcular). Para cada categoría indica cómo diseñar la feature para que tenga fricción de downgrade pero no fricción de adopción.

3. ROADMAP DE EXPANSIÓN: PRIORIZAR LO QUE GENERA INGRESOS HOY
¿Cómo equilibro el roadmap entre funcionalidades que retienen al cliente actual y funcionalidades que abren conversaciones de expansión? Define el framework de priorización: cómo medir el potencial de expansion revenue de cada feature en el backlog (entrevistas con cuentas de alto valor, análisis de uso en cuentas que ya pagan más, señales del equipo de ventas de qué frena el upsell), y cómo asignar capacidad de ingeniería entre retención, expansión y adquisición.

4. USAGE-BASED PRICING: CUÁNDO Y CÓMO PIVOTAR
Muchas empresas SaaS están migrando a modelos de precios basados en uso porque alinean mejor el precio con el valor. ¿Cuándo tiene sentido migrar a un modelo de uso y cómo hacerlo sin perder clientes actuales? Explica: qué métricas de uso son buenas unidades de cobro (número de documentos procesados, llamadas de API, registros creados, minutos de procesamiento), cómo hacer la transición de clientes en plan fijo a modelo de uso con garantías de precio, y qué guardarraíles de gasto máximo dan confianza al cliente durante la transición.

5. NET REVENUE RETENTION: EL KPI QUE EL PRODUCTO DEBE MOVER
El NRR por encima del cien por ciento significa que el producto crece solo. Explica qué palancas de producto mueven el NRR: reducción de churn involuntario (mejoras de UX, recordatorios de renovación, health monitoring), expansión de uso (onboarding de features avanzadas, notificaciones de límite de plan, programas de adopción con CS), y nuevos módulos comprables. ¿Cómo construyo un dashboard de producto que monitorice las señales de riesgo de NRR antes de que se materialicen?

6. EXPERIMENTOS DE EXPANSIÓN: CÓMO VALIDAR ANTES DE COMPROMETER INGENIERÍA
Antes de construir una feature nueva de expansión, ¿cómo valido que hay disposición a pagar? Define el proceso de validación de precio y demanda: entrevistas de discovery con cuentas de alto potencial, fake door test para medir el interés antes del desarrollo, pricing test con un segmento pequeño antes del rollout general, y cómo interpretar los resultados para tomar la decisión de construir o descartar.

Responde con ejemplos concretos y, donde aplique, con el razonamiento que usaría un PM para defender cada decisión ante el equipo de liderazgo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar la estrategia de producto y precios para generar expansion revenue en clientes existentes',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Internal mobility: retener talento expandiendo su rol dentro de la empresa',
                'description'      => 'Diseña un programa de movilidad interna que desarrolle a los empleados, retenga el talento clave y reduce los costes de rotación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en gestión del talento y desarrollo organizacional con experiencia en el diseño de programas de movilidad interna en empresas de tamaño mediano y grande. Tu misión es ayudarme a construir un programa de movilidad interna que retenga al talento clave dándole oportunidades de crecimiento dentro de la organización, antes de que busque esas oportunidades fuera.

Contexto de mi organización:
Somos una empresa de [sector] con [número de empleados] distribuidos en [número de departamentos o áreas]. Nuestra tasa de rotación voluntaria actual es del [porcentaje] y el principal motivo de salida según las entrevistas de salida es [falta de crecimiento / techo profesional / mejores oportunidades externas / falta de visibilidad interna de las vacantes]. Actualmente [no tenemos ningún programa formal / tenemos un proceso informal / tenemos un sistema básico pero poco usado].

Lo que necesito:

1. DISEÑO DEL PROGRAMA DE MOVILIDAD INTERNA
Define la estructura completa del programa: tipos de movilidad que el programa debe cubrir (ascenso vertical al siguiente nivel, movimiento lateral entre departamentos, rotación temporal para adquirir nuevas habilidades, participación en proyectos transversales, shadow de otra función), criterios de elegibilidad (tiempo mínimo en el puesto actual, performance mínima, aprobación del manager actual) y proceso de solicitud (cómo se postula el empleado, cómo se evalúa, quién decide y en qué plazo). Para cada tipo de movilidad indica los beneficios esperados para el empleado y para la organización.

2. VISIBILIDAD DE OPORTUNIDADES INTERNAS
Uno de los mayores problemas de la movilidad interna es que las vacantes no llegan a los empleados adecuados. Define el sistema de comunicación de oportunidades: cómo publicar las vacantes internas antes que externamente (ventana de prioridad interna de siete a catorce días), qué información debe incluir una oferta interna para ser atractiva (no solo el puesto, sino el proyecto, el equipo y el impacto esperado), y cómo usar las conversaciones de desarrollo anual o semestral para explorar activamente los intereses de movilidad de cada empleado.

3. EL ROL DEL MANAGER EN LA MOVILIDAD INTERNA
El mayor freno a la movilidad interna es el manager que no quiere perder a un buen empleado. ¿Cómo cambio esa dinámica? Explica: cómo incluir el desarrollo y la movilidad del equipo como parte de la evaluación del performance del manager, cómo gestionar la transición cuando un buen empleado se mueve a otro departamento (plan de traspaso, overlap de conocimiento, reconocimiento al manager que libera talento), y cómo manejar el caso del manager que bloquea activamente la movilidad de su equipo.

4. RESKILLING Y UPSKILLING COMO BASE DE LA MOVILIDAD
La movilidad interna no funciona sin desarrollo de habilidades. Define el programa de desarrollo que habilita la movilidad: cómo mapear las competencias actuales de cada empleado versus las requeridas en otros roles que le interesan, qué tipo de formación es más efectiva para la transición interna (proyectos reales en el nuevo área, mentoring de alguien que ya ejerce el rol, cursos cortos certificados), y cómo financiar y dar tiempo para el desarrollo sin que sea un coste percibido sino una inversión.

5. MÉTRICAS DEL PROGRAMA DE MOVILIDAD
¿Cómo sé si el programa está funcionando? Define los indicadores clave: tasa de cobertura de vacantes con candidatos internos (objetivo razonable por sector), tiempo medio hasta cubrir una vacante interna versus externa, retención a doce meses de empleados que se han movido internamente versus los que no, satisfacción de los empleados móviles a los seis meses del cambio, y reducción del coste de rotación como consecuencia del programa.

6. COMUNICACIÓN Y CULTURA DE LA MOVILIDAD INTERNA
La movilidad interna solo funciona si los empleados creen en ella. ¿Cómo construyo una cultura donde moverse internamente sea algo normal y positivo? Define la estrategia de comunicación interna: historias de éxito de empleados que se han movido (en qué canales, con qué formato), mensajes de liderazgo que refuercen que pedir un cambio no es desleal, y cómo incorporar la conversación de movilidad en los procesos de evaluación del desempeño sin que sea una amenaza para el manager actual.

Sé concreto con plantillas de proceso, preguntas de conversación de desarrollo y argumentos para convencer a managers y directivos de que este programa beneficia a la empresa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar un programa de movilidad interna para retener talento y reducir la rotación',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Net Revenue Retention: la métrica que predice la salud del negocio',
                'description'      => 'Analiza, modela y mejora el Net Revenue Retention para predecir el crecimiento real del negocio y tomar decisiones financieras basadas en la calidad de los ingresos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con especialización en métricas SaaS y en el análisis de la calidad de los ingresos recurrentes. Tu misión es ayudarme a entender, calcular y mejorar el Net Revenue Retention de mi empresa, la métrica que mejor predice la salud real del negocio a largo plazo.

Contexto de mi empresa:
Somos una empresa [SaaS / de suscripción / de servicios recurrentes] con [número de clientes activos] y un ARR actual de [importe aproximado o rango]. Nuestro modelo de precios es [por asiento / por uso / suscripción plana / mixto]. Actualmente nuestra tasa de churn es del [porcentaje] pero no calculamos el NRR de forma sistemática o creemos que está en torno al [porcentaje].

Lo que necesito:

1. FUNDAMENTOS DEL NRR: QUÉ ES Y POR QUÉ IMPORTA MÁS QUE EL CHURN
Explica en profundidad qué mide el Net Revenue Retention (también llamado Net Dollar Retention), por qué un NRR por encima del cien por ciento significa que el negocio crece aunque no adquiera un solo cliente nuevo, y por qué es una métrica más completa que la tasa de churn bruta. Diferencia entre NRR y Gross Revenue Retention e indica cuándo usar cada uno. ¿Por qué los inversores valoran tanto el NRR y qué significa un NRR del ciento diez, ciento veinte o ciento treinta por ciento para una empresa en cada etapa de crecimiento?

2. CÁLCULO DEL NRR: FÓRMULA Y COMPONENTES
Define la fórmula exacta del NRR con sus cuatro componentes: ARR inicial del período, expansión (upsell y cross-sell), contracción (downgrades a planes inferiores) y churn (cancelaciones). Muestra el cálculo con un ejemplo numérico concreto y explica cómo tratar los casos especiales: cliente que cancela y vuelve a suscribirse, cliente que pausa su suscripción, cliente que negocia un precio diferente a mitad de período. Define también el período correcto de cálculo (mensual versus anual) y las cohortes que tienen más valor analítico.

3. MODELO DE FORECASTING BASADO EN NRR
¿Cómo uso el NRR para proyectar el ARR futuro sin depender solo del pipeline de nuevos clientes? Construye el modelo conceptual: cómo el NRR convierte el ARR inicial de cada cohorte de clientes en el ARR futuro de esa cohorte, cómo combinar el NRR con las proyecciones de nuevos logos para obtener el ARR proyectado a doce y veinticuatro meses, y cómo usar el análisis de cohortes (NRR por mes de adquisición, por plan, por tamaño de empresa) para identificar qué segmentos son más valiosos a largo plazo.

4. DIAGNÓSTICO: POR QUÉ EL NRR ESTÁ BAJO DEL CIEN POR CIENTO
Si el NRR está por debajo del cien por ciento, el negocio se está encogiendo aunque adquiera nuevos clientes. Define el árbol de diagnóstico: ¿el problema es el churn bruto (clientes que cancelan) o la contracción (clientes que bajan de plan)? ¿En qué segmentos es peor (clientes de plan bajo, clientes de cierta industria, clientes adquiridos en cierto período)? ¿El problema está en el producto (no entregan valor), en el precio (demasiado caro para el valor percibido), en el onboarding (no llegan al momento aha) o en el soporte (tickets sin resolver que deterioran la relación)?

5. PALANCAS PARA MEJORAR EL NRR
Define las iniciativas concretas que mueven el NRR hacia arriba: reducción del churn involuntario (mejorar la recuperación de pagos fallidos, reducir el churn por desuso con onboarding proactivo), reducción del churn voluntario (programa de salvamento de cuentas en riesgo, NPS estructurado con seguimiento), aumento de la expansión (programa de upsell basado en comportamiento de producto, cross-sell para productos complementarios), y reducción de la contracción (proceso de downgrade gestionado donde se ofrece una alternativa antes de ejecutarlo). Para cada palanca indica el impacto potencial en el NRR y el tiempo hasta ver resultados.

6. DASHBOARD FINANCIERO DEL NRR
Define el cuadro de mando que debe tener el CFO para monitorizar el NRR: frecuencia de cálculo (mensual con vista de tendencia a doce meses), segmentación del NRR por cohorte de adquisición, por plan y por tamaño de cliente, alertas tempranas cuando el NRR de una cohorte se deteriora más rápido que el histórico, y cómo presentar el NRR al board de inversores de forma que cuente la historia correcta del negocio.

Usa ejemplos numéricos concretos para ilustrar cada punto. Este prompt es para un CFO o fundador que quiere dominar esta métrica y usarla para tomar mejores decisiones de inversión en retención versus adquisición.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Calcular, analizar y mejorar el Net Revenue Retention como predictor de salud del negocio',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos de expansión: cómo estructurar los acuerdos que crecen con el cliente',
                'description'      => 'Diseña cláusulas contractuales que faciliten el upsell, el cross-sell y el crecimiento del contrato a lo largo de la relación comercial.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especialista en contratos de tecnología y servicios B2B con experiencia en la estructuración de acuerdos que facilitan la expansión comercial a lo largo del tiempo. Tu misión es ayudarme a diseñar los contratos de mis clientes de forma que los mecanismos de expansión sean claros, ejecutables y no generen fricción legal cuando el cliente quiera o necesite ampliar el alcance de la relación.

Contexto de mi negocio:
Vendo [describe tu producto o servicio: SaaS, consultoría, servicios gestionados, licencias de software]. El contrato inicial típico es de [importe y duración]. Los mecanismos de expansión más habituales en mi negocio son [más usuarios o asientos, módulos adicionales, ampliación del ámbito de servicios, extensión de territorios, aumento de volumen de uso]. El mayor problema contractual actual con la expansión es [no tenemos mecanismo claro / el proceso de enmienda es lento y costoso / el cliente usa la renegociación de expansión para renegociar el precio base / incertidumbre sobre qué cubre el contrato original].

Lo que necesito:

1. ESTRUCTURA DEL CONTRATO MARCO PARA EXPANSIÓN
Explica la diferencia entre un contrato marco (MSA, Master Service Agreement) y los acuerdos de pedido o adicionales (SOW, Order Form). ¿Por qué separar los términos generales de los específicos de cada expansión facilita el crecimiento sin renegociar todo el contrato? Define qué debe estar en el contrato marco (condiciones generales, SLA, confidencialidad, responsabilidades, propiedad intelectual, proceso de resolución de disputas) y qué va en cada Order Form o addendum (alcance, precio, plazo, métricas de servicio específicas de esa fase).

2. CLÁUSULAS QUE FACILITAN EL UPSELL Y CROSS-SELL
¿Qué cláusulas incluyo en el contrato inicial para que la expansión futura sea simple? Define las cláusulas recomendadas: cláusula de servicios adicionales (mecanismo para añadir módulos o usuarios mediante un simple addendum sin renegociar el MSA), cláusula de escalonamiento de precios pre-acordado (precio del siguiente nivel de plan ya firmado, para evitar negociación en el momento del upsell), cláusula de expansión de territorio (cómo ampliar el ámbito geográfico del contrato sin nueva licitación), y cláusula de producto futuro (derecho preferente a adquirir nuevas funcionalidades al precio de cliente establecido).

3. PROTECCIÓN DEL PRECIO BASE DURANTE LA EXPANSIÓN
Uno de los riesgos de la expansión es que el cliente use la negociación de la ampliación para renegociar el precio del contrato existente. ¿Cómo proteger el precio base contractualmente? Explica: cláusulas de precio fijo para la duración del contrato con indexación opcional al IPC, separación clara entre la negociación de la expansión y la condición del contrato existente, y cómo manejar contractualmente el caso en que el cliente amenaza con no renovar si no se le baja el precio base al añadir un módulo.

4. MECANISMOS DE ESCALADO AUTOMÁTICO
En modelos de precios basados en uso o en número de usuarios, ¿cómo estructuro el contrato para que el precio suba automáticamente con el crecimiento del cliente sin necesidad de una nueva negociación? Define: tramos de uso con precio por tramo preacordado, mecanismo de reporting de uso por parte del cliente (autoservicio o reporte periódico), auditoría de uso y qué ocurre si se detecta uso superior al contratado (período de gracia, cargo retroactivo, negociación de normalización), y cómo manejar el caso de cliente que crece muy por encima de las previsiones y quiere una tarifa de volumen personalizada.

5. RENOVACIÓN CON EXPANSIÓN INCORPORADA
¿Cómo estructuro el proceso de renovación para que sea una oportunidad de expansión natural y no solo de mantenimiento del statu quo? Define: cláusula de renovación automática con preaviso de cancelación (para proteger la renovación base), ventana de negociación de expansión antes de la renovación (propuesta de expansión presentada noventa días antes con incentivo si se acepta antes del cierre del año), y cómo estructurar el descuento de fidelidad por multianual como palanca de compromiso y expansión simultánea.

6. GESTIÓN DE LAS ENMIENDAS Y ADDENDA: PROCESO ÁGIL
El mayor freno a la expansión contractual es que el proceso de enmienda es lento. Define el proceso legal ágil para gestionar expansiones: qué tipo de cambios pueden aprobarse mediante un simple Order Form firmado sin revisión legal completa (añadir usuarios dentro de un rango predefinido, activar un módulo ya descrito en el contrato), cuándo sí se requiere revisión y firma del MSA actualizado, y cómo usar la firma electrónica (DocuSign, Adobe Sign) para reducir el tiempo de ejecución de una enmienda de semanas a horas.

Este prompt es para un abogado interno o externo que asesora a una empresa tecnológica o de servicios y quiere que los contratos sean palancas de crecimiento comercial, no frenos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estructurar contratos comerciales con mecanismos de expansión ágiles y protegidos',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'QBR para expansión: la conversación que convierte la renovación en upsell',
                'description'      => 'Diseña y ejecuta revisiones de negocio trimestrales orientadas a demostrar valor, detectar oportunidades y abrir conversaciones de expansión con clientes existentes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia en la ejecución de programas de QBR (Quarterly Business Review) en entornos SaaS B2B de segmento mid-market y enterprise. Tu misión es ayudarme a diseñar una metodología de QBR que vaya más allá de la revisión de métricas de soporte y se convierta en la palanca principal de expansión de ingresos en las cuentas existentes.

Contexto de mi equipo:
Gestionamos [número de cuentas] en segmento [SMB / Mid-Market / Enterprise]. Hacemos QBRs con [porcentaje o número de cuentas] actualmente. El principal problema es que nuestros QBRs [se convierten en revisiones de tickets de soporte / el cliente no ve el valor del tiempo invertido / no generan conversaciones de expansión / el follow-up tras el QBR es débil o inexistente].

Lo que necesito:

1. ESTRUCTURA DEL QBR ORIENTADO A EXPANSIÓN
Define la agenda de un QBR de noventa minutos que equilibre la revisión del pasado con la construcción del futuro: apertura con los objetivos del cliente para este año (no los nuestros), revisión de valor entregado con métricas de negocio del cliente (no solo métricas de uso del producto), análisis de los retos del siguiente trimestre que el cliente enfrenta, presentación de cómo podemos apoyar esos retos (donde entra la conversación de expansión natural), y cierre con acuerdos concretos y próximos pasos con nombre y fecha. Para cada bloque indica la duración recomendada, quién lidera y qué materiales se necesitan.

2. PREPARACIÓN DEL QBR: LO QUE EL CSM DEBE HACER ANTES
Un QBR malo suele ser consecuencia de una preparación insuficiente. Define el checklist de preparación del CSM dos semanas antes del QBR: qué datos del producto recopilar (uso activo, funciones más y menos usadas, evolución del uso en el trimestre, usuarios inactivos), qué información del negocio del cliente investigar (noticias recientes de la empresa, cambios en el equipo directivo, financiación o eventos sectoriales relevantes), qué métricas de valor del cliente preparar para demostrar ROI (tiempo ahorrado, procesos automatizados, incremento en conversión, cualquier KPI que el cliente mencionó en la reunión de kick-off), y qué oportunidad de expansión identificar y cómo presentarla.

3. DEMOSTRAR VALOR: LA PARTE MÁS IMPORTANTE DEL QBR
La expansión solo ocurre cuando el cliente percibe el valor del contrato actual. Define cómo construir la narrativa de valor para el QBR: cómo traducir métricas de producto (número de logins, documentos procesados, flujos automatizados) en impacto de negocio que el cliente entiende y valora, cómo presentar una historia de antes y después que ancle el ROI de forma memorable, y qué hacer cuando los datos no son favorables (uso bajo o resultados por debajo de lo esperado) sin perder la credibilidad de la conversación.

4. LA CONVERSACIÓN DE EXPANSIÓN: CUÁNDO Y CÓMO ABRIRLA
La expansión no se vende, se descubre. Explica cómo pasar de la revisión de valor a la conversación de expansión de forma natural: qué preguntas de exploración de necesidades abren la puerta a las oportunidades de expansión (sin sonar a pitch de ventas), cómo presentar una propuesta de expansión como respuesta a un reto del cliente que acaba de mencionar y no como un producto que queremos vender, y cómo manejar el caso en que el cliente no está listo para expandirse ahora pero hay una oportunidad clara para el próximo trimestre.

5. FOLLOW-UP QUE CIERRA EL CICLO
El QBR sin follow-up es tiempo perdido. Define el proceso de seguimiento: qué email se envía en las veinticuatro horas siguientes con el resumen de acuerdos (template concreto con estructura), cómo hacer seguimiento de los compromisos adquiridos por ambas partes a las dos y cuatro semanas, y cómo convertir una conversación de expansión abierta en el QBR en una oportunidad de pipeline formal con fecha de cierre estimada.

6. QBR PARA DIFERENTES SEGMENTOS
No todos los clientes merecen el mismo formato de QBR. Define cómo adaptar la metodología: QBR ejecutivo para cuentas enterprise (con el C-level del cliente, foco en impacto de negocio y estrategia, sin métricas operativas), QBR operativo para cuentas mid-market (con el equipo que usa el producto, foco en adopción y funcionalidades), y revisión trimestral asíncrona para cuentas SMB de bajo ARR (un email o vídeo de cinco minutos con los datos clave y un CTA de llamada opcional).

Incluye templates concretos de la agenda, del email de seguimiento y de las preguntas de expansión que pueda usar en mi próxima ronda de QBRs.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar y ejecutar QBRs que demuestran valor y generan conversaciones de expansión',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Expandir ingresos con el mismo cliente: retainers, proyectos adicionales y referidos',
                'description'      => 'Desarrolla la estrategia para aumentar el ingreso por cliente como freelance a través de retainers, proyectos adicionales y un sistema de referidos que genera nuevos clientes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de negocio para freelancers con experiencia ayudando a profesionales independientes a aumentar sus ingresos sin incrementar el número de clientes activos. Tu misión es ayudarme a desarrollar las tres palancas de expansión del negocio freelance: convertir proyectos puntuales en retainers de largo plazo, identificar y ejecutar proyectos adicionales con el mismo cliente, y construir un sistema de referidos que genere nuevos clientes de calidad.

Contexto de mi negocio freelance:
Soy freelance especializado en [área: diseño, desarrollo, marketing, consultoría, copywriting, etc.]. Mi tarifa actual es de [precio por hora o por proyecto]. Tengo [número de clientes activos] con los que trabajo de forma [puntual / recurrente / mixta]. El principal problema es que [los proyectos terminan y tengo que volver a vender / los clientes no saben todo lo que puedo hacer por ellos / no tengo ingresos predecibles entre proyecto y proyecto].

Lo que necesito:

1. CONVERTIR UN PROYECTO EN UN RETAINER: LA CONVERSACIÓN CORRECTA
El retainer es la forma más valiosa de ingreso para un freelance: predecible, recurrente y con menos esfuerzo de venta. Define la estrategia para convertir un cliente puntual en un cliente de retainer: cuándo es el momento correcto para proponer el retainer (al final de un proyecto exitoso, cuando el cliente te pide consejo fuera del alcance, cuando detectas una necesidad recurrente que el cliente no está cubriendo), qué estructura de retainer proponer (horas reservadas al mes, resultado fijo mensual, acceso prioritario con tarifa reducida), y cómo enmarcar la propuesta para que el cliente vea el beneficio para él y no solo la conveniencia para ti. Incluye el guion de la conversación con preguntas y respuestas a las objeciones más comunes.

2. IDENTIFICAR PROYECTOS ADICIONALES: VER MÁS ALLÁ DEL ENCARGO ACTUAL
El cliente actual tiene más problemas que el que te contrató para resolver. ¿Cómo identifico oportunidades de proyectos adicionales sin parecer oportunista? Define el proceso de discovery continuo: qué preguntas hacer durante la entrega del proyecto actual para entender el contexto más amplio del negocio del cliente, cómo registrar las señales de nuevas necesidades que aparecen en las reuniones (un problema que el cliente menciona de pasada, un proyecto que quieren hacer pero no han arrancado, una herramienta que están usando y que podría mejorarse), y cómo proponer un proyecto adicional como solución a un problema que el cliente ya verbalizó.

3. EL SISTEMA DE REFERIDOS: CLIENTES QUE TRAEN CLIENTES
Los mejores clientes nuevos vienen de clientes actuales. ¿Cómo construyo un sistema de referidos que funcione sin resultar incómodo? Define la estrategia: cuándo es el momento correcto para pedir una referencia (después de un entregable que generó una reacción muy positiva, al final de un proyecto exitoso, cuando el cliente te agradece algo espontáneamente), cómo pedir el referido de forma natural y específica (en lugar de "¿conoces a alguien?", pedir "¿hay alguien en tu red que esté enfrentando [problema específico que resolví para ti]?"), y cómo incentivar el referido sin que parezca un soborno (prioridad de agenda, descuento en siguiente proyecto, donación a una causa que el cliente valora).

4. AUMENTAR LA TARIFA CON CLIENTES ACTUALES: CUÁNDO Y CÓMO
Uno de los mayores errores del freelance es mantener la misma tarifa con un cliente durante años. ¿Cómo subo la tarifa a clientes existentes sin perder la relación? Define: con qué frecuencia revisar la tarifa (anualmente en la renovación del retainer o al inicio de un nuevo proyecto), cómo comunicar el aumento con suficiente antelación (dos a tres meses antes de la aplicación), cómo justificar el aumento con el valor entregado y la especialización adquirida (no solo con la inflación), y cómo manejar el cliente que dice que no puede pagar el nuevo precio (alternativas: reducir el alcance, reestructurar el retainer, aceptar la salida con buena relación).

5. PRODUCTIZAR EL SERVICIO: DE HORAS VENDIDAS A PRODUCTOS CON PRECIO FIJO
La venta de horas tiene un techo. ¿Cómo empaqueto mi conocimiento en productos de servicio con precio fijo que sean más fáciles de vender y más escalables? Define: cómo identificar los servicios que ofrezco con más frecuencia y que podría estandarizar (auditoría de X, sprint de diseño de Y, configuración de Z), cómo establecer el precio de un producto de servicio (basado en valor, no en horas), y cómo vender el producto a clientes actuales como un complemento al trabajo que ya hacemos juntos.

6. GESTIÓN DE LA CARTERA DE CLIENTES PARA MAXIMIZAR INGRESOS
No todos los clientes tienen el mismo potencial de expansión. ¿Cómo priorizo mi energía de desarrollo de negocio? Define el sistema de clasificación de clientes: criterios para identificar a los clientes de alto potencial (tamaño del negocio del cliente, confianza en la relación, amplitud de problemas que podría resolver, capacidad de pago, perfil del decisor), cómo asignar tiempo de inversión en la relación según el potencial (desayuno trimestral, newsletter personal, regalo de un recurso relevante), y cómo gestionar la salida de clientes de bajo potencial para hacer espacio a los de alto potencial.

Escribe con tono práctico y directo. Cada recomendación debe ser accionable esta semana sin necesidad de grandes inversiones de tiempo o dinero.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Expandir ingresos freelance con retainers, proyectos adicionales y referidos de clientes actuales',
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
