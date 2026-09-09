<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills241Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing de conversión en el checkout',
                'description'       => 'Optimiza el último paso del funnel donde el dinero cambia de manos: las pruebas A/B del checkout, los mensajes que reducen la ansiedad del comprador y los elementos de confianza que hacen que el cliente pulse "Comprar".',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en CRO (Conversion Rate Optimization) con experiencia específica en la optimización del checkout en tiendas de e-commerce y plataformas de pago. Has trabajado con tiendas que venden desde productos físicos hasta servicios digitales y suscripciones, y sabes que el abandono de carrito en el momento del pago no es un problema de precio sino de confianza y fricción percibida.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el tipo de negocio (e-commerce físico, SaaS, marketplace, servicios) y cuál es el ticket medio de compra?
2. ¿Cuál es la tasa de abandono de carrito actual y en qué paso del checkout se produce con más frecuencia?
3. ¿Cuántos pasos tiene el proceso de checkout actual y qué campos se solicitan al comprador?
4. ¿Qué elementos de confianza existen actualmente en el checkout (sellos, garantías, testimonios, logos de métodos de pago)?
5. ¿Tienes acceso a grabaciones de sesión (Hotjar, Microsoft Clarity) o a datos de comportamiento en el checkout?

Con esas respuestas, diseña la estrategia completa de optimización del checkout:

**1. El diagnóstico del abandono: dónde y por qué se van los compradores**
Antes de optimizar hay que entender qué está pasando. Define el proceso de diagnóstico del abandono de checkout: el análisis de los pasos del funnel (qué porcentaje de usuarios pasa de cada paso al siguiente), la revisión de las grabaciones de sesión para identificar patrones de comportamiento (scroll, clics en zonas sin enlace, movimientos de salida), las encuestas de exit intent que capturan el motivo en el momento del abandono y el análisis de los campos del formulario donde se produce más abandono (los campos de dirección, el teléfono, la creación obligatoria de cuenta son los mayores bloqueadores). Explica cómo priorizar los problemas identificados según el impacto potencial en la tasa de conversión.

**2. Los mensajes que reducen la ansiedad del comprador en el momento de pago**
El comprador que llega al checkout tiene dudas que en ese momento se amplifican. Define la estrategia de messaging anti-ansiedad en el checkout: los mensajes de refuerzo de la decisión que recuerdan al comprador por qué eligió ese producto (el resumen visual del pedido con imagen y beneficio principal, no solo precio y cantidad), los mensajes de urgencia legítima que aceleran la decisión sin generar desconfianza (el stock real, el plazo de entrega exacto para ese código postal), los mensajes de garantía que eliminan el miedo al error (la política de devolución en el checkout, no enterrada en las FAQs) y la micro-copy de los campos del formulario que explica por qué se pide cada dato y para qué se usa. Incluye ejemplos de copy para cada tipo de mensaje.

**3. Los elementos de confianza que el comprador necesita ver**
La confianza en el momento del pago no se construye en el checkout, se confirma. Define la arquitectura de elementos de confianza del checkout: los sellos de seguridad y certificaciones SSL que deben estar visibles cerca del botón de pago, los logos de los métodos de pago aceptados (que funcionan como señales de legitimidad además de información práctica), los testimonios o reseñas que se muestran en el checkout y que responden a la pregunta "¿me arrepentiré de esto?", la garantía de devolución presentada de forma prominente y la información de contacto del soporte que demuestra que hay personas reales detrás de la tienda. Explica dónde posicionar cada elemento según el momento del proceso de compra en que el comprador más lo necesita.

**4. Las pruebas A/B del checkout que más impactan la conversión**
No todas las pruebas tienen el mismo potencial de impacto. Define la hoja de ruta de pruebas A/B del checkout ordenada por potencial de impacto: el test del checkout de un paso vs. múltiples pasos (con los casos donde cada formato gana), el test del guest checkout vs. la creación obligatoria de cuenta (con el dato de cuántos abandonos genera la obligatoriedad de registro), el test del order summary fijo en la pantalla vs. colapsado, el test de los CTAs (el copy del botón de compra, el color, el tamaño), el test de los campos del formulario (eliminar el campo de teléfono, cambiar el orden, añadir autocompletado de dirección) y el test de los métodos de pago (el impacto de añadir opciones como Apple Pay, Google Pay o BNPL como Klarna en la conversión). Define el tiempo mínimo de cada test y cómo calcular la significatividad estadística de los resultados.

**5. La recuperación del abandono de checkout**
El comprador que abandona no está perdido. Define la estrategia de recuperación del abandono de checkout: el email de recuperación de carrito con el timing óptimo (el primer email en la primera hora, el segundo a las veinticuatro horas, el tercero a las setenta y dos), el copy del email de recuperación que no es un descuento sino un recordatorio del valor y una respuesta a la objeción más probable, la segmentación de la secuencia según el punto de abandono (el que abandonó en los datos de envío vs. el que abandonó en el pago tienen objeciones diferentes), el SMS de recuperación cuando el comprador ha dado el teléfono y la estrategia de retargeting para los compradores anónimos que no han dejado el email.

**6. La optimización del checkout para móvil**
Más de la mitad de las visitas son desde móvil y la tasa de conversión mobile es sistemáticamente inferior a la de escritorio. Define las optimizaciones específicas del checkout para móvil: el teclado correcto para cada campo del formulario (numérico para el número de tarjeta, email para el campo de correo), el tamaño mínimo de los botones para que sean usables con el pulgar, la gestión del teclado virtual que oculta el formulario, la integración con los métodos de pago nativos del móvil (Apple Pay, Google Pay) que eliminan la necesidad de introducir los datos de la tarjeta y el diseño del order summary que no ocupa toda la pantalla y deja espacio para el formulario.

Termina con el plan de los primeros treinta días de optimización del checkout: las tres intervenciones que implementarías primero según el impacto potencial y la facilidad de ejecución, con los criterios de éxito para cada una.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Optimización de la tasa de conversión en el checkout de e-commerce mediante mensajes de confianza, pruebas A/B y recuperación del abandono.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Integración de pasarelas de pago: Stripe, PayPal y alternativas',
                'description'       => 'Integra los sistemas de pago en aplicaciones web y móviles: la arquitectura de pagos, el manejo de webhooks, la gestión de estados y los aspectos de seguridad PCI DSS que el developer debe conocer para no crear vulnerabilidades al manejar datos de pago.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un ingeniero de software senior especializado en la integración de sistemas de pago en aplicaciones web y móviles. Has integrado Stripe, PayPal, Adyen, Braintree y pasarelas locales en aplicaciones de todos los tamaños, desde startups hasta empresas con millones de transacciones al mes. Sabes que la integración de pagos parece sencilla hasta que te enfrentas a los webhooks fuera de orden, los pagos en estado ambiguo y las auditorías de PCI DSS.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el stack tecnológico (lenguaje backend, framework frontend) y el tipo de aplicación (web, móvil, marketplace, SaaS con suscripciones)?
2. ¿Cuáles son los casos de uso de pago que necesitas cubrir: pago único, suscripciones recurrentes, marketplace con split de pagos, pago aplazado?
3. ¿Cuáles son los mercados geográficos donde necesitas aceptar pagos y qué métodos de pago locales son importantes (SEPA, iDEAL, Bizum, PIX)?
4. ¿Tienes ya una pasarela seleccionada o estás en el proceso de evaluación?
5. ¿Cuál es el nivel de compliance que necesitas: ¿estáis en scope de PCI DSS o planeáis usar una integración que lo evite?

Con esas respuestas, diseña la arquitectura completa de integración de pagos:

**1. La elección de la pasarela de pago según el caso de uso**
No hay una pasarela perfecta para todos los casos. Define el proceso de evaluación y selección de pasarela: los criterios técnicos (calidad de la API y la documentación, SDKs disponibles para tu stack, capacidades de webhook), los criterios de negocio (fees por transacción y por chargeback, presencia en los mercados objetivo, soporte de los métodos de pago locales necesarios), los criterios de compliance (los niveles de PCI DSS que cada integración requiere, las certificaciones que tiene la pasarela) y los criterios de resiliencia (el uptime histórico, el tiempo de recuperación ante incidentes, la política de rollback de transacciones). Compara Stripe, PayPal, Adyen y Braintree en estos criterios para el caso de uso específico.

**2. La arquitectura de integración que minimiza el scope de PCI DSS**
Manejar datos de tarjeta directamente es el camino hacia la auditoría de PCI DSS más costosa. Define la arquitectura de integración que minimiza el scope: el uso de los elementos de UI hospedados por la pasarela (Stripe Elements, PayPal Hosted Fields, Braintree Drop-in UI) que capturan los datos de tarjeta directamente en los servidores de la pasarela sin que pasen por los tuyos, la tokenización de los datos de pago para pagos futuros, la implementación de 3D Secure 2 para la autenticación del comprador y la arquitectura de tu backend que solo maneja tokens y no datos de tarjeta en texto plano. Explica la diferencia entre los niveles PCI SAQ A, SAQ A-EP y SAQ D y cuál corresponde a cada tipo de integración.

**3. El manejo de webhooks: el corazón de la integración de pagos**
Los webhooks son el mecanismo por el que la pasarela te notifica el resultado de las operaciones asíncronas. Define el sistema de procesamiento de webhooks robusto: la verificación de la firma del webhook para asegurarte de que el evento viene realmente de la pasarela (el HMAC-SHA256 de Stripe, la verificación de IPN de PayPal), el procesamiento idempotente de los webhooks que garantiza que el mismo evento procesado dos veces no genera efectos duplicados (el pedido que se marca como pagado dos veces), la gestión de la cola de webhooks que garantiza el procesamiento en orden y la recuperación ante fallos y el manejo de los webhooks que llegan fuera de orden (el evento de pago completado que llega antes del evento de pago creado). Incluye el código de ejemplo del handler de webhook con verificación de firma e idempotencia.

**4. La gestión de los estados del pago y la consistencia de datos**
Un pago no es solo "pagado" o "no pagado". Define el modelo de estados del pago que cubre todos los casos: los estados del ciclo de vida completo (pending, processing, authorized, captured, partially_captured, failed, cancelled, refunded, partially_refunded, disputed, chargeback), las transiciones válidas entre estados y las que no son posibles, el mapeo de los estados de la pasarela a los estados internos de tu aplicación (cada pasarela usa terminología diferente), la estrategia de sincronización de estado entre tu base de datos y la pasarela (qué es la fuente de verdad cuando hay discrepancia) y el proceso de reconciliación periódica que detecta pagos en estado inconsistente entre tu sistema y el de la pasarela.

**5. La gestión de las disputas y chargebacks**
Las disputas y chargebacks son inevitables. Define el proceso de gestión que minimiza su impacto: el sistema de detección de fraude preventivo que usa las herramientas de la pasarela (Stripe Radar, PayPal Fraud Protection) y las señales propias (velocidad de pedidos, dirección de envío distinta a la de facturación, primer pedido de un usuario nuevo con ticket alto), el proceso de respuesta a una disputa con la evidencia que la pasarela requiere en el plazo establecido, el análisis de los chargebacks recibidos para identificar patrones de fraude o de insatisfacción del cliente y la estrategia de descuento de alto riesgo que aplica más fricción a las transacciones sospechosas sin penalizar a los compradores legítimos.

**6. Las pruebas de la integración de pagos antes de ir a producción**
Una integración de pagos que no se ha probado exhaustivamente llegará a producción con errores que cuestan dinero real. Define la estrategia de testing de la integración: el uso de los entornos de sandbox y los números de tarjeta de prueba para simular los diferentes escenarios (pago exitoso, tarjeta rechazada, fondos insuficientes, 3DS requerido, disputa, reembolso), el testing de los webhooks con herramientas como Stripe CLI o ngrok para recibir eventos en local, la simulación de los escenarios de error más comunes (timeout de la pasarela, webhook fuera de orden, pago en estado ambiguo) y el plan de carga que verifica que la integración soporta el volumen de transacciones esperado sin degradación.

Termina con la lista de verificación de seguridad que revisarías antes de lanzar a producción cualquier integración de pagos, con los diez puntos críticos que no pueden faltar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Arquitectura e implementación de integraciones de pasarela de pago con Stripe, PayPal y alternativas, incluyendo webhooks, seguridad PCI DSS y gestión de estados.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño del flujo de pago: la UX que no asusta al comprador',
                'description'       => 'Diseña el checkout que convierte: los principios de diseño del flujo de pago, los elementos que generan confianza en el momento más crítico y los patrones de UX que reducen el abandono sin simplificar en exceso el proceso.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un UX designer especializado en flujos de conversión y diseño de checkout para e-commerce y plataformas de pago. Has diseñado y optimizado procesos de pago para tiendas de moda, plataformas SaaS, marketplaces y negocios de servicios, y sabes que el checkout es el momento de mayor tensión en la experiencia de compra: el usuario está a punto de entregar su dinero y su confianza simultáneamente.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el tipo de negocio y producto (e-commerce de producto físico, suscripción digital, marketplace, servicio profesional) y cuál es el ticket medio?
2. ¿Cuál es el estado actual del checkout: hay un diseño existente que quieres mejorar, o estás diseñando uno desde cero?
3. ¿Cuáles son los datos que tienes sobre el comportamiento en el checkout actual: tasas de abandono por paso, dispositivos de los usuarios, mercados geográficos?
4. ¿Cuáles son las restricciones de diseño: sistema de diseño existente, restricciones técnicas de la plataforma, requisitos de compliance (accesibilidad, GDPR)?
5. ¿Cuáles son los métodos de pago que se van a soportar y hay algún método prioritario para el mercado objetivo?

Con esas respuestas, diseña el flujo de pago completo:

**1. La arquitectura del flujo: cuántos pasos y en qué orden**
La decisión sobre la estructura del checkout es la más importante del proceso. Define el proceso de decisión sobre la arquitectura del flujo: cuándo usar un checkout de una sola página (one-page checkout) y cuándo un proceso en múltiples pasos, el orden óptimo de los pasos según la investigación de UX (los datos de contacto antes de la dirección, la selección del método de pago cerca del final cuando el usuario ya está comprometido), la lógica de progreso que muestra al usuario dónde está y cuánto falta, el diseño del order summary que acompaña al usuario en todos los pasos y la estrategia de recuperación del progreso cuando el usuario vuelve después de abandonar. Incluye la justificación de cada decisión de estructura basada en datos o principios de psicología del consumidor.

**2. Los elementos de confianza en el diseño del checkout**
La confianza en el checkout no se construye con grandes declaraciones sino con pequeños detalles de diseño. Define la arquitectura visual de confianza del checkout: el posicionamiento de los sellos de seguridad y certificaciones en relación con el campo de número de tarjeta, el diseño del campo de tarjeta que visualmente se parece a una tarjeta real y reduce la ansiedad de introducir los datos, los logos de los métodos de pago que actúan como señales de legitimidad y deben estar presentes desde el primer paso, la presentación de la política de devolución como garantía prominente (no como enlace enterrado en el footer), la información del vendedor que humaniza la transacción y los testimonios o reseñas de otros compradores posicionados estratégicamente. Explica cómo la jerarquía visual refuerza o debilita cada elemento de confianza.

**3. El diseño de los formularios del checkout**
Los formularios del checkout son donde más fricción se acumula. Define los principios de diseño de formularios para el checkout: la longitud del formulario (cada campo adicional reduce la conversión, define cuáles son verdaderamente necesarios), el etiquetado claro y la micro-copy de ayuda que explica por qué se pide cada dato y cómo se va a usar, el diseño de los mensajes de error que aparecen en tiempo real (inline validation) sin esperar al submit, el orden de los campos que sigue la lógica mental del usuario, el diseño del campo de número de tarjeta con formateo automático y detección visual del tipo de tarjeta, los atajos que reducen la fricción (autocompletado de dirección, checkboxes para copiar la dirección de facturación desde la de envío, guest checkout sin obligación de registro). Incluye especificaciones de diseño para los estados de cada campo (vacío, activo, completado, con error).

**4. El diseño para móvil: el checkout que funciona con los pulgares**
Más del 60% de las visitas son desde móvil y la tasa de conversión mobile es sistemáticamente inferior. Define las consideraciones de diseño específicas del checkout para móvil: el tamaño mínimo de los elementos interactivos (48x48dp según las guías de accesibilidad), la gestión del teclado virtual que oculta parte del formulario (diseño que mantiene el campo activo visible), la selección del tipo de teclado correcto para cada campo (numérico para el número de tarjeta, email para el correo), los métodos de pago nativos del móvil (Apple Pay, Google Pay) que deben ser la opción principal por reducir al máximo la fricción, el diseño del order summary colapsable que no ocupa toda la pantalla y el flujo de 3D Secure que no destruye la experiencia en una pantalla pequeña.

**5. Los patrones de UX que reducen el abandono sin engañar al usuario**
Hay técnicas de diseño que reducen el abandono y técnicas que generan desconfianza. Define los patrones de UX honestos que aumentan la conversión: el diseño del guest checkout que no obliga al registro pero ofrece la opción de crear cuenta después del pago (cuando el usuario ya está satisfecho), la presentación del coste de envío lo antes posible en el flujo (los costes ocultos son la primera causa de abandono), el diseño de la pantalla de confirmación del pedido que refuerza la decisión del usuario con información clara sobre qué va a pasar a continuación, el timing de los mensajes de urgencia (mostrar el stock limitado o el plazo de entrega garantizado solo cuando es verdad) y el diseño del exit intent que intenta recuperar al usuario que mueve el ratón hacia la barra del navegador sin usar tácticas manipuladoras.

**6. La medición del rendimiento del diseño del checkout**
Un diseño de checkout que no se mide no se puede mejorar. Define el framework de medición del rendimiento del checkout: las métricas de conversión por paso (el funnel que muestra dónde se pierden los usuarios con más precisión que la tasa global de abandono), las métricas de usabilidad del formulario (tiempo por campo, número de correcciones en cada campo, campos que se dejan en blanco), el análisis de los grabaciones de sesión que identifican patrones de comportamiento problemáticos, el programa de pruebas de usabilidad con usuarios reales que revelan problemas que los datos cuantitativos no capturan y la priorización de las iteraciones de diseño según el impacto potencial en la tasa de conversión.

Termina con el checklist de diseño del checkout: los quince elementos de diseño que revisarías antes de lanzar cualquier checkout, clasificados por impacto en la confianza del usuario y en la tasa de conversión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseño de flujos de checkout que equilibran la confianza del comprador, la reducción de fricción y la conversión, con especificaciones para móvil y desktop.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Flexibilidad de pago como palanca de ventas',
                'description'       => 'Usa las condiciones de pago como herramienta de cierre: los plazos, el split payment y las opciones financieras que eliminan la barrera del precio sin bajar el precio y que transforman un "demasiado caro" en un "cerramos".',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas con experiencia en el diseño de estructuras de pago creativas que cierran deals sin reducir el precio. Has trabajado con equipos comerciales de empresas B2B y B2C que venden soluciones de ticket medio y alto, y sabes que cuando el cliente dice "es demasiado caro" en muchos casos no está hablando del precio total sino del flujo de caja que implica pagar todo de una vez en ese momento.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el producto o servicio, el ticket medio y el perfil del cliente (B2B empresa mediana/grande, B2C consumidor, autónomo)?
2. ¿Cuál es la estructura de pago actual que ofreces y cuál es la objeción de precio más frecuente que escuchas en el proceso de cierre?
3. ¿Tienes flexibilidad para ofrecer condiciones de pago distintas o hay restricciones de tesorería o de política de empresa que lo limitan?
4. ¿Cuál es el margen típico del producto y hasta qué punto la financiación o el aplazamiento impactan en ese margen?
5. ¿Cuáles son los competidores y qué condiciones de pago ofrecen habitualmente?

Con esas respuestas, diseña el sistema completo de flexibilidad de pago como palanca de ventas:

**1. El diagnóstico de la objeción de precio: ¿es el precio o es el momento?**
Antes de ofrecer condiciones de pago alternativas hay que entender qué hay detrás de la objeción. Define el proceso de diagnóstico de la objeción de precio: las preguntas que distinguen entre "el precio total es demasiado alto" (objeción de valor) y "no puedo pagarlo todo ahora" (objeción de flujo de caja), las preguntas que revelan el presupuesto disponible en este ejercicio fiscal y las restricciones de tesorería del cliente, las señales de que el cliente realmente quiere el producto pero necesita una salida financiera y las señales de que la objeción de precio es un pretexto para un problema diferente (falta de confianza, prioridades diferentes, proceso de compra interno no completado). Explica por qué ofrecer condiciones de pago antes de entender la causa de la objeción puede ser un error que debilita tu posición negociadora.

**2. Las estructuras de pago que eliminan la barrera del flujo de caja**
Hay muchas formas de llegar al mismo precio total. Define el catálogo de estructuras de pago que puedes ofrecer según el tipo de cliente y producto: el pago aplazado sin coste financiero para el cliente (cuando el margen lo permite), el pago en cuotas mensuales que convierte un gasto en un coste operativo y no de capital (relevante para la aprobación presupuestaria en B2B), el esquema de milestone payments que alinea el pago con la entrega de valor (especialmente útil en proyectos de implementación o servicios profesionales), el pago con un porcentaje inicial reducido y el resto a la entrega y el modelo de suscripción o retainer que transforma una compra única en una relación recurrente. Para cada estructura, explica las situaciones en las que es más efectiva y los riesgos que implica para el vendedor.

**3. El BNPL (Buy Now Pay Later) y la financiación externa como herramienta de cierre**
A veces la solución de pago no tiene que salir de tu empresa. Define la estrategia de uso de las opciones de financiación externa: los proveedores de BNPL B2B (Hokodo, Two, Billie) que ofrecen financiación al comprador mientras el vendedor cobra al contado, los proveedores de BNPL B2C (Klarna, Sequra, Alma) para tickets medianos y altos en consumo, el leasing operativo como alternativa para equipamiento y software, el crédito comercial con seguros de impago para clientes de alto riesgo y cómo presentar estas opciones en la conversación de ventas de forma que el cliente lo percibe como un beneficio y no como una señal de que el precio es demasiado alto.

**4. Las condiciones de pago como diferenciador competitivo**
Si los competidores ofrecen las mismas condiciones, no hay diferencial. Define la estrategia de condiciones de pago que crea ventaja competitiva: el análisis de las condiciones que ofrece la competencia y los gaps que puedes cubrir, el diseño de condiciones que la competencia no puede igualar porque no tiene el margen o la estructura financiera para hacerlo, las condiciones de pago que acortan el ciclo de ventas (el descuento por pago anticipado que acelera la decisión del cliente y mejora tu tesorería), la flexibilidad como argumento de ventas que se menciona antes de que el cliente plantee la objeción de precio y cómo documentar las condiciones de pago disponibles en el material de ventas.

**5. La negociación de condiciones de pago sin ceder en el precio**
Ofrecer flexibilidad de pago no es lo mismo que hacer un descuento. Define el proceso de negociación de condiciones de pago que protege el margen: cómo presentar las opciones de pago de forma que el cliente elige en lugar de negociar, el coste real de cada estructura de pago para tu empresa (el aplazamiento tiene un coste financiero que hay que contabilizar), cuándo tiene sentido ofrecer un pequeño descuento por pago anticipado en lugar de aplazar y cuándo no, cómo vincular las concesiones en condiciones de pago con contrapartidas del cliente (volumen mínimo, contrato más largo, referencia de cliente) y el límite en las condiciones de pago que hay que respetar para no comprometer la tesorería de la empresa.

**6. La gestión del riesgo de impago con condiciones de pago flexibles**
Más flexibilidad de pago implica más riesgo de impago. Define el sistema de gestión del riesgo que acompaña a una política de pago flexible: la evaluación del riesgo crediticio del cliente antes de ofrecer condiciones de aplazamiento, los contratos que protegen al vendedor en caso de impago (las cláusulas de reserva de dominio, los pagarés, los avales), el proceso de seguimiento de los cobros que detecta el riesgo temprano, el protocolo de actuación ante el primer impago (la llamada vs. el email, el plazo antes de escalar) y los seguros de crédito comercial que permiten ofrecer condiciones generosas sin asumir el riesgo en el balance.

Termina con el árbol de decisión que usarías cuando un cliente dice "es demasiado caro": las preguntas que harías, las opciones que presentarías en cada escenario y los límites en los que pararas de negociar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Uso de las condiciones de pago y opciones de financiación como herramienta de cierre de ventas sin reducir el precio ni comprometer el margen.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Monetización y pagos en el producto',
                'description'       => 'Construye el sistema de monetización dentro del producto: el modelo de suscripción, el pago único y los in-app purchases con la arquitectura de billing que escala con el negocio y no se convierte en una pesadilla técnica.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product manager especializado en monetización con experiencia diseñando modelos de negocio y arquitecturas de billing para productos SaaS, aplicaciones móviles y plataformas digitales. Has diseñado y lanzado sistemas de monetización desde cero y has heredado sistemas de billing legacy que eran un obstáculo para el crecimiento. Sabes que las decisiones de monetización son decisiones de producto y que el billing mal diseñado desde el principio se convierte en una deuda técnica y de producto que bloquea el crecimiento.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el producto, a qué usuario está dirigido y cuál es el problema que resuelve?
2. ¿Cuál es el modelo de monetización actual o el que estás considerando (freemium, trial, pago único, suscripción, pay-per-use, marketplace)?
3. ¿Cuál es el perfil del cliente objetivo (B2C consumidor, B2SMB, B2B enterprise) y cuál es el proceso de compra esperado (self-serve o asistido por ventas)?
4. ¿Cuál es el stack tecnológico y tienes pensado usar una solución de billing externa (Stripe Billing, Chargebee, Recurly) o construir internamente?
5. ¿Cuáles son las mayores incertidumbres sobre la monetización: qué precio poner, cómo estructurar los planes, cómo manejar el upgrade/downgrade o cómo reducir el churn involuntario?

Con esas respuestas, diseña el sistema completo de monetización del producto:

**1. El modelo de monetización que se alinea con el valor entregado**
El mejor modelo de monetización es el que el cliente percibe como justo porque refleja el valor que recibe. Define el proceso de diseño del modelo de monetización: el análisis de las unidades de valor del producto (qué métrica crece cuando el cliente extrae más valor: usuarios activos, datos procesados, ingresos generados a través del producto, proyectos activos), la selección del modelo que mejor captura ese valor (el modelo por asiento es justo cuando el valor crece con los usuarios, el modelo por uso es justo cuando el valor crece con el consumo), la estructura de planes que cubre los diferentes segmentos de cliente y el diseño del freemium o del trial que permite al usuario descubrir el valor antes de pagar. Explica cómo evaluar si el modelo de monetización está bien alineado con el valor y cuándo tiene sentido cambiarlo.

**2. La arquitectura de precios: planes, límites y add-ons**
La arquitectura de precios es el diseño del producto de pago. Define la estructura de precios que maximiza la conversión y el revenue: cuántos planes tener (la paradoja de la elección y por qué tener tres planes generalmente convierte mejor que dos o cuatro), cómo definir las features incluidas en cada plan según el perfil de cliente al que apunta, el diseño de los límites de cada plan que incentivan el upgrade de forma natural (los límites que el usuario alcanza justo cuando está más comprometido con el producto), la estrategia de add-ons que permiten personalizar sin multiplicar los planes y los precios de cada plan según el análisis del valor percibido, la disposición a pagar del mercado objetivo y el posicionamiento competitivo.

**3. La experiencia de compra y upgrade dentro del producto**
El momento en que el usuario decide pagar o hacer upgrade es uno de los momentos más críticos del producto. Define la experiencia de monetización in-product: el diseño de los paywall y upgrade prompts que aparecen en el momento correcto (cuando el usuario intenta hacer algo que requiere el plan superior, no de forma aleatoria), el copy y el diseño de los CTAs de upgrade que presentan el valor antes del precio, el flujo de checkout integrado en el producto que minimiza la fricción y mantiene al usuario dentro de la experiencia, el proceso de selección del plan para usuarios que llegan directamente a contratar (la landing de precios) y el diseño de la confirmación de compra que refuerza la decisión y establece expectativas claras sobre los próximos pasos.

**4. La arquitectura de billing que escala**
El billing mal diseñado es la deuda técnica más cara de una empresa SaaS. Define la arquitectura de billing que soporta el crecimiento: las entidades del modelo de datos de billing (customer, subscription, plan, invoice, payment_method, credit) y las relaciones entre ellas, el uso de una plataforma de billing externa (Stripe Billing, Chargebee, Recurly, Lago) vs. la construcción interna y cuándo cada opción tiene sentido, el diseño de los webhooks de billing que mantienen el estado del sistema interno sincronizado con el estado real de la suscripción, la gestión de los casos especiales de billing (prorratas en cambio de plan, créditos por downgrade, periodos de prueba que convierten, múltiples suscripciones para el mismo cliente) y los invariantes del sistema de billing que hay que garantizar para evitar estados inconsistentes.

**5. La reducción del churn involuntario: el dunning y la gestión de pagos fallidos**
El churn involuntario es el más trágico porque el cliente quiere quedarse pero el pago falla. Define el sistema de recuperación de pagos fallidos: la lógica de reintentos que optimiza el momento del reintento según el tipo de falla (fondos insuficientes vs. tarjeta expirada tienen estrategias diferentes), el flujo de comunicación con el cliente cuyo pago ha fallado (el email que informa sin alarmar, la secuencia de recordatorios que recupera el pago sin perder al cliente), el portal de actualización de método de pago que hace que actualizar la tarjeta sea trivial, la estrategia de grace period que mantiene el acceso del cliente mientras se resuelve el problema de pago y las métricas de dunning (tasa de recuperación por tipo de falla, revenue recuperado, tiempo medio de resolución).

**6. Las métricas de monetización que importan**
Las métricas de billing son los signos vitales del negocio. Define el cuadro de mandos de monetización del producto: el MRR/ARR desglosado por tipo de movimiento (nuevo MRR, expansión, contracción, churned MRR), el ARPU por segmento de cliente, la tasa de conversión de trial a pago y de free a paid, el tiempo medio hasta la conversión, el LTV por cohorte de adquisición, el churn rate separado entre voluntario e involuntario, el NRR (Net Revenue Retention) como indicador de la salud del negocio de suscripción y el payback period del CAC. Explica cómo leer estas métricas en conjunto para diagnosticar problemas de monetización y cómo priorizarlos.

Termina con el plan de lanzamiento de la monetización del producto: los pasos desde la decisión de modelo hasta el primer euro de revenue, con los hitos clave y los riesgos principales de cada etapa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseño del sistema de monetización de un producto digital, desde el modelo de precios hasta la arquitectura de billing y la recuperación del churn involuntario.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Nóminas y gestión de pagos a empleados',
                'description'       => 'Gestiona los pagos a empleados de forma precisa y a tiempo: los sistemas de nómina, la gestión de las retenciones fiscales y el proceso de onboarding de nuevos empleados al sistema de nóminas que evita los errores que destruyen la confianza del empleado.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de compensación y beneficios con experiencia gestionando nóminas en empresas de entre veinte y quinientos empleados en España. Sabes que la nómina es el proceso de RRHH con mayor impacto emocional en el empleado: un error en la nómina, por pequeño que sea, destruye la confianza de forma desproporcionada al importe del error, y un retraso en el pago es una señal de alarma que activa el mercado de trabajo incluso en los mejores empleados.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el tamaño de la empresa, el sector y el tipo de empleados (fijos, temporales, a tiempo parcial, con variables o comisiones)?
2. ¿Cuál es el sistema de nóminas actual (software propio, asesoría externa, ERP con módulo de RRHH) y cuáles son los problemas más frecuentes?
3. ¿Cuáles son los conceptos salariales más complejos de gestionar (variables, comisiones, horas extra, complementos de convenio, beneficios en especie)?
4. ¿Cuántos convenios colectivos aplican en la empresa y cuál es el nivel de complejidad de la gestión sindical?
5. ¿Cuál es el mayor riesgo actual en la gestión de nóminas: los errores de cálculo, los incumplimientos de plazos, la falta de documentación o la gestión de las situaciones especiales (bajas, maternidad, ERTE)?

Con esas respuestas, diseña el sistema completo de gestión de nóminas:

**1. La arquitectura del proceso de nómina mensual**
Un proceso de nómina robusto es un proceso con el mínimo de pasos manuales y el máximo de verificaciones automáticas. Define la arquitectura del proceso mensual de cierre de nómina: el calendario de nómina con todos los plazos (cierre de fichajes, validación de variables, revisión de bajas médicas, aprobación de la nómina, transferencia bancaria, envío de recibos), los inputs que se recogen antes de procesar la nómina y sus fuentes (el sistema de control de presupuesto o timekeeping, el sistema de ventas para las comisiones, RRHH para las altas, bajas y modificaciones del mes), las verificaciones automáticas que detectan anomalías antes de que lleguen al empleado (variaciones de nómina superiores al 10% sin justificación, IRPF fuera de rango, empleados sin nómina), el proceso de aprobación multinivel y el protocolo de actuación ante los errores detectados después del pago.

**2. La gestión del IRPF y las retenciones fiscales**
El IRPF es el concepto de mayor complejidad técnica en la nómina española. Define el sistema de gestión del IRPF que evita las sorpresas al empleado: el proceso de comunicación del porcentaje de retención al inicio del año y cuando se producen cambios de situación personal, el modelo 145 y cuándo y cómo pedírselo al empleado, el cálculo de la regularización de IRPF cuando cambia la situación del empleado a mitad de año (cambio de tipo, maternidad, variación del salario), la obligación de regularización en diciembre para los empleados con múltiples pagadores y el proceso de comunicación con el empleado cuando su retención va a cambiar de forma significativa.

**3. El onboarding al sistema de nóminas: los primeros noventa días del empleado**
El empleado nuevo tiene más sensibilidad a los errores de nómina que el veterano porque todavía no ha construido la confianza. Define el proceso de onboarding del empleado al sistema de nóminas: la checklist de la información que RRHH necesita del nuevo empleado antes de la primera nómina (datos personales, cuenta bancaria, situación familiar para el IRPF, afiliación a la Seguridad Social si es la primera vez), la verificación del alta en la Seguridad Social antes de que el empleado comience a trabajar, la comunicación proactiva al nuevo empleado sobre cuándo va a cobrar y cómo va a recibir su nómina, la revisión de la primera nómina con el empleado para explicar los conceptos y resolver las dudas antes de que se conviertan en desconfianza y el proceso de comunicación cuando hay un error en la primera nómina.

**4. La gestión de las situaciones especiales de nómina**
Las situaciones especiales son las que más errores generan porque rompen la rutina del proceso mensual. Define el protocolo de gestión de las situaciones especiales más frecuentes: la baja por enfermedad común (el inicio de la prestación de la Seguridad Social, el pago delegado, la complementación de la empresa), la baja por maternidad o paternidad (la prestación del INSS, el mantenimiento de beneficios en especie), la liquidación por fin de contrato (los conceptos incluidos, el plazo de pago, la tributación de las indemnizaciones), el ERTE (el proceso de presentación, la comunicación a los empleados, la gestión de la prestación del SEPE), las horas extra (la tributación, el límite legal, la opción de compensación con descanso) y los anticipos (la política de anticipos, el proceso de solicitud y la gestión de la devolución).

**5. La comunicación con el empleado sobre su nómina**
La transparencia sobre la nómina es la mejor prevención de conflictos. Define el sistema de comunicación de nómina con el empleado: el formato del recibo de salario que sea comprensible para alguien sin conocimientos de RRHH (los conceptos explicados en lenguaje no técnico, el desglose de deducciones), el portal del empleado donde puede acceder a sus nóminas anteriores y a su informe de vida laboral, el proceso de respuesta a las consultas de nómina (el SLA, el canal, la persona responsable), la comunicación proactiva de los cambios que van a afectar a la nómina del siguiente mes (subidas de convenio, cambio de categoría, fin del periodo de prueba) y el protocolo de gestión de la discrepancia cuando el empleado cree que su nómina está mal.

**6. El cumplimiento normativo y la auditoría de nóminas**
Una nómina correcta no solo paga al empleado sino que cumple con todas las obligaciones legales. Define el sistema de compliance de nóminas: el calendario de obligaciones fiscales y de Seguridad Social (los modelos 111, 190, TC1, TC2, las fechas de presentación), el proceso de verificación del salario mínimo de convenio para cada categoría profesional, la gestión de la actualización del convenio colectivo cuando se publica (los atrasos, los nuevos conceptos, los cambios de categoría), el proceso de preparación para una inspección de trabajo (qué documentos se necesitan, en qué plazo hay que presentarlos) y el sistema de auditoría interna de nóminas que verifica periódicamente que el proceso cumple con la normativa vigente.

Termina con el plan de mejora del proceso de nóminas para una empresa donde los errores son frecuentes: el diagnóstico, las causas raíz más habituales y las cinco acciones prioritarias que implementarías en los primeros tres meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseño del proceso de gestión de nóminas que garantiza precisión, cumplimiento normativo y confianza del empleado en el sistema de pagos de la empresa.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Gestión de cobros y flujo de caja operativo',
                'description'       => 'Optimiza el ciclo de cobros de la empresa: las condiciones de pago con clientes, la gestión de los cobros retrasados y el proceso que reduce el DSO sin dañar la relación con los clientes.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director financiero con experiencia en la gestión del ciclo de cobros en empresas B2B de entre diez y cien millones de euros de facturación. Sabes que el DSO (Days Sales Outstanding) es uno de los KPIs más importantes de la salud financiera de una empresa porque determina cuánto capital de trabajo necesitas para financiar el crecimiento y cuánto riesgo de impago estás asumiendo. Y sabes que reducir el DSO sin dañar la relación con los mejores clientes requiere proceso, no solo presión.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el sector de la empresa, el tipo de cliente (PYME, gran cuenta, administración pública) y el ticket medio de las facturas?
2. ¿Cuál es el DSO actual y cómo se compara con el plazo de pago medio acordado en los contratos?
3. ¿Cuáles son las condiciones de pago estándar que ofrece la empresa y cuáles son las excepciones más frecuentes?
4. ¿Cuál es el proceso de cobros actual: hay un equipo dedicado, lo gestiona el comercial que hizo la venta o lo gestiona administración de forma reactiva?
5. ¿Cuáles son los principales obstáculos en el cobro: clientes que no reciben la factura, clientes que disputan la factura, clientes que no tienen liquidez o clientes que simplemente priorizan pagar a otros?

Con esas respuestas, diseña el sistema completo de gestión de cobros:

**1. Las condiciones de pago como herramienta de gestión del riesgo**
Las condiciones de pago no son solo un acuerdo comercial, son el primer instrumento de gestión del riesgo de impago. Define la estrategia de condiciones de pago diferenciada por perfil de cliente: las condiciones estándar para la base de clientes (el equilibrio entre la competitividad comercial y la protección financiera), las condiciones especiales para clientes nuevos sin historial de pago (pago anticipado, confirming, letra de cambio como garantía), las condiciones para las grandes cuentas que tienen poder de negociación para imponer sus propios plazos (y cómo compensar financieramente los plazos largos en el precio o en las condiciones) y las condiciones para la administración pública (los plazos legales, el factoring sin recurso como herramienta para anticipar el cobro). Incluye el análisis del coste financiero de cada plazo de pago según el coste de capital de la empresa.

**2. El proceso de facturación que acelera el cobro**
El cobro empieza con la factura. Define el proceso de facturación que minimiza las demoras: la emisión de la factura el mismo día de la entrega o en las primeras veinticuatro horas (cada día de retraso en la facturación se convierte en un día de retraso en el cobro), la factura que incluye toda la información que el cliente necesita para aprobarla sin consultas (el número de pedido de compra del cliente, el albarán de entrega, los datos bancarios para la transferencia, el IBAN y el BIC de forma prominente), la entrega de la factura por el canal que el cliente procesa más rápido (muchas grandes empresas tienen un email específico para la recepción de facturas), la confirmación de recepción de la factura y el seguimiento proactivo para confirmar que ha entrado en el proceso de aprobación del cliente antes de que llegue la fecha de vencimiento.

**3. El proceso de cobro preventivo: actuar antes del vencimiento**
El mejor cobro es el que se hace antes de que la factura venza. Define el proceso de cobro preventivo: el recordatorio amistoso enviado cinco días antes del vencimiento que confirma la factura, los datos de pago y pregunta si hay algún problema, la llamada de cortesía el día del vencimiento si no se ha recibido el pago, el protocolo de seguimiento en los primeros siete días de retraso (el segundo email, la llamada directa al responsable de pagos del cliente) y la escalación al director comercial o al responsable de la cuenta cuando el retraso supera los quince días. Explica cómo diseñar la secuencia de comunicación de cobros que es efectiva sin dañar la relación con el cliente.

**4. La gestión de los cobros retrasados y las disputas**
Cuando la factura lleva más de treinta días de retraso, el proceso cambia. Define el protocolo de gestión de cobros retrasados: la identificación de la causa real del retraso (el cliente que no puede pagar vs. el cliente que no quiere pagar vs. el cliente que disputa la factura vs. el cliente que tiene un problema administrativo interno), el plan de cobro diferenciado según la causa (el acuerdo de pago aplazado para el cliente con problemas de liquidez, la resolución rápida de la disputa para el cliente que cuestiona la factura, la presión creciente para el cliente que puede pagar pero prioriza a otros), el umbral de tiempo y de importe a partir del cual se involucra a un abogado o a una agencia de cobros y el proceso de provisión del impago cuando las perspectivas de cobro son bajas.

**5. Las herramientas financieras para acelerar el cobro**
A veces la solución al problema de cobros es financiera, no de proceso. Define el catálogo de instrumentos financieros para la gestión del cobro: el factoring con recurso (la cesión de las facturas a un factor que adelanta el importe menos una comisión, con el riesgo de impago para el cedente), el factoring sin recurso (el factor asume el riesgo de impago, más caro pero libera el riesgo del balance), el confirming (cuando el cliente usa su banco para gestionar los pagos a sus proveedores, que pueden anticipar el cobro), el descuento de pagarés, el seguro de crédito comercial que cubre los impagos de los clientes y el reverse factoring para gestionar los pagos a los propios proveedores. Explica cuándo tiene sentido usar cada instrumento según el perfil de la empresa y de su cartera de clientes.

**6. Las métricas del ciclo de cobros y el cuadro de mando del CFO**
Lo que no se mide no se gestiona. Define el cuadro de mando del ciclo de cobros: el DSO (Days Sales Outstanding) global y por segmento de cliente, el aging de la cartera de cobros (el porcentaje de facturas en cada tramo de vencimiento: corriente, hasta treinta días de retraso, de treinta a sesenta, más de sesenta y dudoso cobro), el porcentaje de impagos sobre la facturación y su evolución, el coste financiero del DSO calculado sobre el coste de capital de la empresa, la tasa de éxito del proceso de cobros por etapa y la previsión de cobros para los próximos treinta, sesenta y noventa días basada en el estado actual de la cartera.

Termina con el plan de reducción del DSO en doce semanas: las acciones concretas, el impacto esperado en el DSO de cada acción y las métricas de seguimiento semanales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseño del proceso completo de gestión de cobros para reducir el DSO y mejorar el flujo de caja sin dañar las relaciones con los clientes.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Regulación de pagos y servicios de pago',
                'description'       => 'El marco regulatorio que aplica a los servicios de pago: la Directiva PSD2, el licenciamiento de entidades de pago, la protección del consumidor en las transacciones electrónicas y los riesgos legales del e-commerce que el asesor jurídico debe conocer.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en regulación financiera y pagos digitales con experiencia asesorando a entidades de pago, plataformas de e-commerce, fintechs y empresas que procesan pagos a escala en el ámbito europeo. Sabes que la regulación de pagos es uno de los marcos normativos que más rápido evoluciona en Europa y que los errores de compliance en este sector tienen consecuencias regulatorias y reputacionales graves.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el tipo de empresa (comercio electrónico que acepta pagos, plataforma que gestiona pagos entre terceros, fintech que presta servicios de pago, banco o entidad financiera)?
2. ¿En qué mercados geográficos opera y bajo qué jurisdicción regulatoria están los pagos que procesa?
3. ¿Cuál es el volumen de transacciones mensual y el ticket medio de las operaciones?
4. ¿Cuál es la consulta o el problema jurídico concreto: el licenciamiento como entidad de pago, la implementación de SCA, la gestión de chargebacks, las obligaciones de AML/KYC o la protección del consumidor?
5. ¿Tienes ya una opinión jurídica previa sobre el tema o estás haciendo un análisis desde cero?

Con esas respuestas, diseña el análisis jurídico completo de regulación de pagos:

**1. El marco regulatorio europeo de pagos: PSD2 y el ecosistema normativo**
La regulación de pagos en Europa se articula alrededor de la Directiva PSD2 pero no se agota en ella. Define el mapa del ecosistema regulatorio de pagos: la PSD2 (Directiva UE 2015/2366) y su transposición en España a través del Real Decreto-ley 19/2018, los Regulatory Technical Standards de la EBA que desarrollan la PSD2 (especialmente el RTS sobre Strong Customer Authentication y el RTS sobre comunicación segura), la PSD3 y el Payment Services Regulation en tramitación y las principales novedades que introduce, el Reglamento DORA que aplica a las entidades financieras y a sus proveedores tecnológicos desde enero de 2025, el Reglamento sobre transferencias de fondos (Reglamento 2015/847) que aplica requisitos de información a los pagos internacionales y la normativa AML/CFT (la AMLD6 y su transposición en España) que aplica a los servicios de pago. Explica cómo se relacionan estas normas y cuáles son las que tienen más impacto práctico para cada tipo de entidad.

**2. El licenciamiento de entidades de pago y dinero electrónico**
No cualquier empresa puede prestar servicios de pago sin autorización previa. Define el régimen de licenciamiento de entidades de pago en España: las categorías de servicios de pago que requieren autorización (la adquisición de operaciones de pago, la emisión de instrumentos de pago, la ejecución de transferencias, los servicios de iniciación de pagos y de información sobre cuentas que introduce la PSD2), la diferencia entre una entidad de pago (EP), una entidad de dinero electrónico (EDE) y un banco en términos de capacidades regulatorias, los requisitos de capital mínimo y de gobierno corporativo para cada categoría, el proceso de solicitud de licencia ante el Banco de España, los plazos y los documentos requeridos, la figura del agente de la entidad de pago y las condiciones en las que una empresa puede operar como agente en lugar de obtener la licencia propia y las exenciones de licencia para volúmenes pequeños de actividad.

**3. Strong Customer Authentication (SCA): la implementación práctica**
La autenticación reforzada del cliente es uno de los requisitos más disruptivos de la PSD2. Define el análisis jurídico y práctico de la SCA: el requisito legal de la SCA (dos de los tres factores: algo que sabes, algo que tienes, algo que eres), los criterios técnicos de cada factor según el RTS de la EBA, las exenciones a la SCA que la norma permite (transacciones de bajo importe hasta 30 euros, transacciones de bajo riesgo según el análisis de riesgo de la transacción, beneficiarios de confianza, pagos recurrentes después del primer pago autenticado), el análisis de cuándo aplicar cada exención para maximizar la conversión sin incumplir la norma, el protocolo 3D Secure 2 como implementación técnica de la SCA y las implicaciones para la responsabilidad en caso de fraude (el régimen de responsabilidad cambia según si la SCA se aplicó o se excluyó y por qué motivo).

**4. Protección del consumidor en los pagos electrónicos**
La protección del consumidor en los pagos tiene un marco específico que va más allá de la normativa general de consumo. Define el régimen de protección del consumidor en pagos electrónicos: los derechos del pagador ante una operación de pago no autorizada (el régimen de responsabilidad del proveedor de servicios de pago, el plazo para reclamar y las excepciones cuando hay fraude o negligencia grave del usuario), el derecho de retrocesión del cargo en los pagos con tarjeta (el chargeback como derecho legal del consumidor y sus límites), las obligaciones de información precontractual que debe cumplir el proveedor de servicios de pago antes de la ejecución de la operación, los plazos de ejecución de los pagos (la fecha valor, el plazo máximo de abono al beneficiario) y el régimen de comisiones y cargos que el proveedor puede repercutir al usuario.

**5. AML y KYC en los servicios de pago**
Los servicios de pago son uno de los sectores de mayor riesgo desde el punto de vista del blanqueo de capitales. Define las obligaciones AML/KYC que aplican a las entidades de pago: la evaluación de riesgo de blanqueo de capitales que la entidad debe realizar sobre sus clientes y actividades (la política de aceptación de clientes, los factores de riesgo que elevan el nivel de due diligence), las medidas de diligencia debida simplificada, estándar y reforzada y cuándo aplica cada una, las obligaciones de declaración de operaciones sospechosas al SEPBLAC y el procedimiento interno, los requisitos de formación del personal en materia AML, el régimen de sanciones (las sanciones que la CNMV, el Banco de España y el SEPBLAC pueden imponer por incumplimientos de AML) y las novedades que introduce el nuevo paquete europeo de AML/CFT (el Reglamento AML y la creación de la AMLA como autoridad europea).

**6. Los riesgos jurídicos del e-commerce en materia de pagos**
El comercio electrónico que acepta pagos tiene riesgos jurídicos específicos que van más allá de la normativa de consumo general. Define el mapa de riesgos jurídicos del e-commerce en materia de pagos: el régimen de responsabilidad ante los chargebacks y la estrategia jurídica para impugnarlos, las obligaciones de información sobre los métodos de pago y los recargos por método de pago (la prohibición del surcharging para los métodos más utilizados que introduce la PSD2), el régimen de devoluciones y su implementación en los sistemas de pago (el plazo para procesar la devolución, la responsabilidad si el procesador del pago falla), las obligaciones de seguridad de los datos de pago (PCI DSS como estándar contractual impuesto por las redes de pago) y la responsabilidad del comercio cuando hay una brecha de datos de pago (la combinación del régimen RGPD y del régimen PCI DSS).

Termina con la checklist de compliance en materia de pagos para un e-commerce que quiere verificar que cumple con toda la normativa aplicable, clasificada por área y con la indicación de la norma de referencia para cada punto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Análisis jurídico del marco regulatorio europeo de servicios de pago: PSD2, licenciamiento, SCA, protección del consumidor y obligaciones AML/KYC.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Gestión de fallos de pago y dunning en SaaS',
                'description'       => 'Gestiona los impagos de los clientes de SaaS: el proceso de dunning, la comunicación con el cliente cuyo pago ha fallado y el proceso de recuperación que recupera el pago sin perder el cliente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de customer success con especialización en la reducción del churn involuntario en empresas SaaS de suscripción. Has diseñado sistemas de dunning que recuperan entre el 30% y el 60% de los pagos fallidos y sabes que la diferencia entre el dunning que funciona y el que no está en la combinación de la lógica de reintentos, la comunicación empática con el cliente y la eliminación de la fricción para actualizar el método de pago.

Antes de proponer nada, necesito entender el contexto:

1. ¿Cuál es el modelo de suscripción (mensual, anual, mixto), el ticket medio y el tipo de cliente (B2C, B2SMB, B2B enterprise)?
2. ¿Cuál es la tasa de churn involuntario actual (el porcentaje de MRR que se pierde por fallos de pago) y cuánto se recupera actualmente?
3. ¿Cuál es el sistema de billing que usas (Stripe Billing, Chargebee, Recurly, desarrollo propio) y qué capacidades de dunning ofrece?
4. ¿Cuál es la secuencia de comunicación actual cuando falla un pago: email automático, llamada manual, acceso restringido?
5. ¿Cuánto tiempo pasa desde el primer fallo de pago hasta que el acceso del cliente queda bloqueado, y cuánto hasta que se cancela la suscripción?

Con esas respuestas, diseña el sistema completo de gestión de fallos de pago y dunning:

**1. El diagnóstico de los fallos de pago: por qué fallan y con qué frecuencia**
No todos los fallos de pago son iguales y no todos tienen la misma probabilidad de recuperación. Define el proceso de análisis de los fallos de pago: la clasificación de los códigos de error de las pasarelas de pago (decline codes) en categorías de recuperabilidad (temporalmente recuperable: fondos insuficientes, límite de crédito alcanzado; potencialmente recuperable con acción del cliente: tarjeta expirada, tarjeta cancelada; definitivamente perdido: fraude declarado, cuenta cerrada), el análisis de la distribución de fallos por tipo en tu cartera (qué porcentaje de tus fallos son recuperables sin acción del cliente y cuáles requieren que el cliente actualice sus datos), el análisis de la distribución temporal de los fallos (los fallos son más frecuentes ciertos días del mes o ciertas épocas del año) y la segmentación de los clientes con fallo de pago según su historial de uso y su valor para la empresa.

**2. La lógica de reintentos: cuándo y cuántas veces intentar**
La lógica de reintentos es la primera línea de recuperación y la que requiere menos interacción con el cliente. Define la estrategia de reintentos optimizada: la ventana temporal óptima para el primer reintento según el tipo de error (los fallos por fondos insuficientes tienen más probabilidad de recuperarse a principios de mes, los fallos por límite de crédito pueden recuperarse a los pocos días), el número máximo de reintentos antes de activar el flujo de comunicación con el cliente (demasiados reintentos generan penalizaciones de las redes de pago), la lógica de reintento inteligente que usa machine learning para predecir el mejor momento de reintento según el perfil del cliente y el historial de pagos, la diferencia entre el reintento automático y el reintento solicitado por el cliente desde el portal de self-service y las implicaciones regulatorias de los reintentos (las redes de pago tienen límites de reintentos que si se superan penalizan al comercio).

**3. La secuencia de comunicación con el cliente: el dunning que no destruye la relación**
La comunicación durante el proceso de dunning es lo que determina si el cliente se va sintiéndose mal tratado o si se queda agradecido de que lo ayudaras. Define la secuencia de comunicación completa: el primer mensaje (enviado inmediatamente tras el fallo de pago, tono informativo y no alarmante, enlace directo al portal de actualización de método de pago), el segundo mensaje (a los tres días del primer fallo, tono de recordatorio con más urgencia, destacar el valor del producto que están a punto de perder), el tercer mensaje (cuando el acceso está a punto de restringirse, tono de última llamada con el enlace de actualización aún más prominente), el mensaje de restricción de acceso (cuando el acceso se restringe parcialmente, explicar exactamente qué funcionalidades están disponibles y cuáles no), el mensaje de cancelación inminente y el mensaje de confirmación de reactivación cuando el pago se recupera (este último es clave para recuperar la confianza). Incluye el copy de cada mensaje.

**4. El portal de actualización de método de pago: eliminar la fricción**
El cliente que quiere pagar pero no puede hacerlo fácilmente se va. Define el diseño del flujo de actualización de método de pago que maximiza la tasa de recuperación: el enlace de acceso directo al portal de actualización sin necesidad de login (los tokens de sesión temporal que evitan que el cliente tenga que recordar su contraseña en el peor momento), el formulario de actualización de método de pago que acepta las mismas opciones de pago que el checkout original, la opción de reactivación inmediata después de actualizar el método (no esperar al siguiente ciclo de billing), la integración con los métodos de pago nativos del móvil (Apple Pay, Google Pay) que eliminan la necesidad de introducir datos de tarjeta y la confirmación visual de que el pago se ha procesado y el acceso está activo.

**5. La gestión del acceso durante el período de dunning**
La estrategia de restricción de acceso es una de las decisiones más delicadas del dunning. Define la política de acceso durante el proceso de dunning: el grace period (el número de días de gracia durante los que el cliente mantiene acceso completo a pesar del fallo de pago), la restricción gradual del acceso después del grace period (qué funcionalidades se restringen primero para crear urgencia sin causar daño al negocio del cliente), la gestión de los datos del cliente durante el período de dunning (cuánto tiempo se conservan los datos si la suscripción se cancela por impago, cuál es la política de reactivación si el cliente vuelve) y los casos especiales que requieren tratamiento manual (los clientes de alto valor, los clientes enterprise con un contacto financiero diferente al usuario del producto, los clientes que han expresado intención de cancelar pero cuyo pago falla antes de que puedan hacerlo).

**6. Las métricas del dunning y la optimización continua**
El dunning es un proceso que se puede y debe optimizar de forma continua. Define el framework de medición y optimización del dunning: las métricas de recuperación (tasa de recuperación por tipo de fallo de pago, tasa de recuperación por canal de comunicación, tasa de recuperación por timing de los mensajes, revenue recuperado sobre revenue en riesgo), las métricas de retención (NPS de los clientes que han pasado por el proceso de dunning, tasa de churn de los clientes que han tenido un fallo de pago recuperado vs. los que no han tenido fallos), el proceso de A/B testing de los mensajes de dunning (el asunto del email, el copy, el timing, el canal), el análisis de los patrones de los clientes que no se recuperan (para identificar si hay segmentos con mayor riesgo estructural de churn involuntario) y el impacto del dunning en el MRR (la diferencia entre el churn bruto y el churn neto después de la recuperación).

Termina con el playbook de dunning para los primeros treinta días después de un fallo de pago: día a día, qué pasa automáticamente y qué requiere intervención manual del equipo de CS.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Sistema completo de dunning para SaaS que recupera el máximo de pagos fallidos mediante reintentos inteligentes, comunicación empática y eliminación de fricción.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Cobrar como freelance: métodos, plazos y protección ante impagos',
                'description'       => 'El sistema de cobro del freelance que protege su caja: la factura proforma, el pago anticipado y los mecanismos contractuales que protegen al freelance ante el cliente que desaparece una vez entregado el trabajo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor especializado en la gestión financiera y contractual de profesionales independientes. Has ayudado a centenares de freelancers a pasar de cobrar tarde, mal y con miedo a cobrar puntualmente, bien y con un sistema que los protege ante los clientes que no pagan. Sabes que el problema del impago no empieza cuando el cliente desaparece después de recibir el trabajo, sino mucho antes, en cómo se estructura el acuerdo y el proceso de cobro desde el inicio de la relación.

Antes de proponer nada, necesito entender tu situación:

1. ¿Cuál es tu especialidad como freelance, el ticket medio de tus proyectos y el perfil de tus clientes (empresas, agencias, particulares)?
2. ¿Cuál es tu proceso de cobro actual: cuándo y cómo facturas, qué porcentaje cobras por adelantado y cuántos días tardas en cobrar de media?
3. ¿Has tenido problemas de impago en el pasado y si es así cuál fue la causa más frecuente (cliente desaparecido, cliente en quiebra, disputa sobre el trabajo, simplemente tarda demasiado)?
4. ¿Tienes contratos escritos con tus clientes o trabajas con emails y conversaciones informales?
5. ¿Cuáles son las mayores fricciones en el proceso de cobro actual: los clientes que pagan tarde, los que disputan la factura, los que desaparecen o los que simplemente no tienen el proceso de pago organizado?

Con esas respuestas, diseña el sistema completo de cobro del freelance:

**1. La estructura de cobro que protege el flujo de caja**
El freelance que cobra todo al final del proyecto financia el trabajo del cliente. Define la estructura de cobro por proyecto que equilibra la protección del freelance con la razonabilidad para el cliente: el pago inicial (el anticipo del 30% al 50% que cubre los costes directos del proyecto y demuestra el compromiso del cliente), los pagos por milestone vinculados a entregables concretos que el cliente puede verificar (el pago al entregar el primer borrador, el pago al aprobar la revisión final), el pago final antes de la entrega del producto terminado (el último porcentaje se cobra antes de entregar los archivos finales, no después) y la gestión del pago anticipado cuando el cliente lo rechaza (cómo negociar la estructura de pagos sin perder el proyecto ni ceder en los puntos de control clave).

**2. Los métodos de pago que minimizan la fricción y los impagos**
El método de pago que eliges influye en la velocidad y la seguridad del cobro. Define la estrategia de métodos de pago del freelance: la transferencia bancaria como método estándar y cómo comunicar los datos bancarios en la factura de forma clara y sin ambigüedad, las plataformas de pago digital (Stripe, PayPal, Wise, Revolut) para clientes internacionales con las comisiones y las implicaciones fiscales de cada una, el pago por tarjeta mediante link de pago para clientes que prefieren este método y la ventaja de la confirmación inmediata del pago, los sistemas de cobro automatizado para proyectos recurrentes que eliminan la necesidad de perseguir el pago cada mes y los criterios para elegir el método de pago según el tipo de cliente, el volumen del proyecto y la geografía. Explica las ventajas e inconvenientes de cada método desde la perspectiva del flujo de caja y la seguridad del cobro.

**3. La factura proforma y los documentos de cobro que protegen al freelance**
El documento correcto en el momento correcto es la diferencia entre cobrar y no cobrar. Define el sistema de documentación del cobro: la propuesta comercial firmada como primer documento de compromiso (la propuesta que incluye el precio, el alcance, las condiciones de pago y la firma del cliente es un documento con valor jurídico aunque no sea un contrato formal), la factura proforma que se emite antes de empezar el trabajo y sirve para solicitar el anticipo, la factura ordinaria que se emite una vez realizado el trabajo y las menciones obligatorias que debe contener para ser válida fiscalmente, el albarán de entrega o el documento de aceptación que el cliente firma al recibir el trabajo terminado (este documento es clave en caso de disputa) y la nota de abono cuando hay una devolución o un ajuste. Explica la diferencia entre cada documento y cuándo emitir cada uno.

**4. Los mecanismos contractuales que previenen el impago**
La mejor protección ante el impago es el contrato que lo hace difícil. Define los mecanismos contractuales que protegen al freelance: la cláusula de propiedad intelectual condicionada al pago completo (los derechos de uso de los entregables no se transfieren hasta que el cliente ha pagado el importe total), la cláusula de pausa del proyecto por falta de pago (si el cliente no paga el milestone acordado, el trabajo se detiene hasta que regularice el pago), la cláusula de intereses de demora para los pagos retrasados (el interés legal del dinero más un porcentaje adicional que hace que retrasar el pago tenga un coste), la cláusula de resolución del contrato y sus consecuencias (qué pasa con el trabajo hecho si el cliente decide cancelar: qué se le entrega y qué se le cobra) y la cláusula de penalización por cancelación tardía. Explica cómo presentar estas cláusulas al cliente de forma que las acepte sin sentirse intimidado.

**5. El proceso de reclamación del impago: escalación paso a paso**
Cuando el cliente no paga hay que actuar siguiendo un protocolo que escala la presión sin quemar la relación antes de tiempo. Define el proceso de reclamación del impago: el recordatorio amistoso a los siete días del vencimiento (el email que asume que el retraso es un olvido), la llamada telefónica a los catorce días (más efectiva que el email para clientes que evitan responder), la carta de reclamación formal a los treinta días que menciona las consecuencias legales del impago, la mediación o la negociación de un plan de pago cuando el cliente tiene problemas de liquidez pero intención de pagar, la denuncia ante el Juzgado de Primera Instancia mediante el procedimiento monitorio para deudas documentadas (el procedimiento más ágil y económico para reclamar importes hasta diez mil euros), las agencias de cobros de impagados para los casos más difíciles y los servicios online de reclamación de deudas B2B. Explica en qué punto de la escalación tiene sentido aceptar un acuerdo parcial en lugar de continuar reclamando el importe total.

**6. La fiscalidad del cobro del freelance: facturas, IVA y IRPF**
Un cobro que no está bien gestionado fiscalmente es un cobro que acaba costando más de lo esperado. Define el sistema fiscal del cobro del freelance: el momento del devengo del IVA (cuándo hay que declarar el IVA, si en el momento de la facturación o en el momento del cobro para los sujetos al criterio de caja), la gestión del IVA no cobrado en los impagos (el procedimiento para recuperar el IVA de una factura que el cliente no ha pagado), la retención del IRPF que el cliente debe practicar si es empresa o autónomo y las implicaciones cuando el cliente es un particular sin obligación de retener, la facturación a clientes internacionales y el tratamiento del IVA según el país del cliente (la diferencia entre clientes UE y no UE, el rol del NIF intracomunitario) y la gestión de los anticipos en la facturación (cuándo y cómo facturar el anticipo para que sea correcto fiscalmente).

Termina con la plantilla del contrato de servicios mínimo viable del freelance: las cláusulas esenciales que no pueden faltar en cualquier proyecto, explicadas en lenguaje comprensible para que el cliente las entienda y las acepte.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Sistema completo de cobro para freelancers: estructura de pagos, documentación, mecanismos contractuales y proceso de reclamación de impagos.',
                'vote_score'        => 46,
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
