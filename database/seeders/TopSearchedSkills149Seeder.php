<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills149Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing para empresas de logística',
                'description'       => 'Diferencia tu empresa de logística en un mercado donde el precio lo es todo: el posicionamiento en fiabilidad, tecnología y servicio que justifica la prima.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de marketing B2B especializado en empresas de logística, transporte y supply chain. Tienes experiencia ayudando a operadores de transporte, 3PL, courier y empresas de fulfillment a diferenciarse en un mercado altamente comoditizado donde el primer reflejo del cliente siempre es comparar por precio.

Necesito tu ayuda para desarrollar la estrategia de marketing de [TIPO DE EMPRESA: operador logístico 3PL / empresa de transporte por carretera / courier de última milla / empresa de fulfillment para e-commerce / transitario / empresa de logística frigorífica] con presencia en [ZONA: local / nacional / internacional] y con clientes principalmente en [SECTORES: retail, industria, alimentación, farmacéutica, e-commerce].

**Parte 1: Posicionamiento en un mercado donde todo el mundo compite por precio**

El gran problema del marketing de logística es que los compradores evalúan principalmente el precio por kilo o por envío. Ayúdame a construir un posicionamiento que me saque de esa guerra de precios:

- Cómo identificar los atributos de valor que mis clientes realmente aprecian pero no piden explícitamente: puntualidad garantizada, visibilidad del envío en tiempo real, un único punto de contacto, capacidad de reacción en incidencias, integración con su ERP.
- La matriz de posicionamiento competitivo: cómo mapear a los competidores en atributos clave y encontrar el espacio donde puedo ganar sin competir por precio.
- Los segmentos de cliente donde el precio importa menos: el farmacéutico que necesita temperatura controlada, el retailer de lujo que necesita manipulación cuidadosa, el e-commerce de rápido crecimiento que necesita un 3PL que escale con él.
- Cómo construir una narrativa de marca que hable de "coste total de la cadena de suministro" en lugar de "precio del transporte": los retrasos, las reclamaciones, la mala experiencia del cliente final y el tiempo de gestión tienen un coste que no aparece en la tarifa pero sí en la cuenta de resultados.
- El rol de la tecnología como diferenciador: cómo comunicar las capacidades tecnológicas (TMS, WMS, visibilidad en tiempo real, API de integración) sin resultar técnico ni pretencioso para un director de compras que solo quiere que sus palés lleguen a tiempo.

**Parte 2: Generación de leads B2B en logística**

La venta en logística es fundamentalmente relacional y de ciclo largo. Diseña conmigo el sistema de generación de demanda:

- Content marketing para empresas de logística: qué temas generan tráfico e interés en directores de operaciones, directores de compras y responsables de supply chain. Los formatos que funcionan (casos de éxito cuantificados, calculadoras de ahorro, benchmarks del sector, guías de optimización).
- LinkedIn como canal principal B2B: cómo construir presencia de empresa y presencia personal de los comerciales y directivos. Qué tipo de contenido funciona para este sector (datos de mercado, casos de cliente, insights de eficiencia operativa).
- Los eventos del sector: las ferias (SIL, Transport Logistic Munich, Logistics&Automation) como canal de contacto y cómo maximizar el ROI de la participación.
- El inbound para logística: cómo aparecer cuando un director de operaciones busca "cómo reducir costes de almacén" o "proveedor fulfillment e-commerce".
- El marketing de cuenta objetivo (ABM): cómo identificar las 50-100 empresas más atractivas como cliente y diseñar una campaña específica para ellas.

**Parte 3: Casos de éxito y prueba social en logística**

- Cómo construir un caso de éxito convincente para un cliente de logística: la estructura, las métricas que importan (% de entregas a tiempo, reducción de costes logísticos, mejora del NPS del cliente final) y cómo conseguir que el cliente te deje publicarlo.
- Los testimonios y referencias: en logística, una referencia de un cliente del mismo sector vale más que cualquier anuncio. Cómo construir un programa de referencias formal.
- Las certificaciones como prueba de calidad: ISO 9001, AEO, GDP (para farmacéutica), TAPA (para seguridad). Cómo comunicarlas sin que parezca un catálogo de siglas.
- Los premios del sector: cómo conseguir y comunicar reconocimientos de organismos del sector logístico.

**Parte 4: Retención y expansión de clientes actuales**

- Cómo hacer marketing a tus propios clientes para expandir el volumen y los servicios contratados.
- El informe de servicio mensual que genera confianza y apertura de nuevas conversaciones comerciales.
- Cómo gestionar la comunicación durante una incidencia logística: la comunicación proactiva que retiene clientes incluso cuando algo sale mal.
- El NPS en logística: cómo medirlo, cómo actuar sobre los resultados y cómo usar los promotores para generar nuevas referencias.

Dame un plan de acción de 90 días con las iniciativas de mayor impacto para mi situación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diferenciarse en el mercado logístico y generar leads B2B de calidad más allá de la guerra de precios.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Sistemas de gestión de almacén (WMS)',
                'description'       => 'Arquitectura, integraciones y los retos técnicos de los sistemas que coordinan las operaciones de un almacén en tiempo real.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un arquitecto de software especializado en sistemas de gestión de almacén (WMS) y tecnología logística con experiencia diseñando e implementando soluciones para almacenes de distribución, centros de fulfillment de e-commerce y operaciones de logística inversa. Conoces en profundidad los retos técnicos de coordinar personas, máquinas e inventario en tiempo real en entornos de alta exigencia operativa.

Necesito tu ayuda para [DESCRIBIR EL RETO: diseñar un WMS desde cero / integrar un WMS existente con otros sistemas / optimizar el rendimiento del WMS actual / evaluar si construir vs. comprar un WMS / implementar un módulo específico como picking, recepción o expedición].

El contexto de la operación es: [DESCRIBIR: tipo de almacén, volumen de referencias (SKUs), pedidos diarios, turnos de trabajo, nivel de automatización existente].

**Parte 1: Arquitectura del WMS moderno**

Un WMS es el sistema nervioso central del almacén. Explícame cómo diseñar su arquitectura considerando:

- Los módulos fundamentales de un WMS y cómo se relacionan entre sí: gestión de ubicaciones, recepción de mercancía, almacenamiento (put-away), gestión de stock, picking, consolidación y expedición, logística inversa (devoluciones), gestión de mano de obra.
- El modelo de datos central: cómo modelar las ubicaciones (zonas, pasillos, estanterías, niveles, posiciones), los contenedores (palés, cajas, totes, unidades), los movimientos y el historial de trazabilidad.
- La gestión en tiempo real: los eventos que requieren respuesta inmediata (un operario escanea un código de barras, una máquina termina un ciclo, un pedido entra con prioridad urgente) y la arquitectura que garantiza baja latencia.
- El diseño para alta disponibilidad: qué pasa si el WMS cae durante las horas pico de un turno. Los mecanismos de fallback, el modo offline de los terminales de RF y la sincronización posterior.
- La arquitectura para escalar: cómo el sistema maneja el pico de Black Friday o de campaña navideña sin degradación del rendimiento.

**Parte 2: Integraciones del WMS con el ecosistema logístico**

Un WMS nunca vive solo. Dame una guía de integración con:

- ERP (SAP, Oracle, Microsoft Dynamics, Odoo): sincronización de pedidos de entrada y salida, órdenes de compra, ajustes de stock, regularizaciones de inventario. Los patrones de integración (API REST, mensajería asíncrona, EDI, ficheros planos en SFTP) y cuándo usar cada uno.
- OMS (Order Management System): cómo el WMS recibe los pedidos de venta, actualiza el estado del pedido en tiempo real y gestiona las excepciones (rotura de stock, pedido parcial, cancelación en proceso de picking).
- TMS (Transport Management System): la generación de la etiqueta del transportista, la comunicación del manifiesto de expedición y la recepción de confirmaciones de entrega.
- Sistemas de automatización: conveyor, sorters, AGV (vehículos de guiado automático), sistemas de almacenamiento automatizado (AS/RS), cobots de picking. Los protocolos de comunicación (OPC-UA, API propietaria, PLC directo) y la gestión de las excepciones de máquina.
- Dispositivos de campo: terminales RF (Zebra, Honeywell), impresoras de etiquetas, scanners fijos en líneas de expedición, sistemas de verificación de peso y dimensiones.

**Parte 3: Los algoritmos clave del WMS**

- El algoritmo de ubicación (slotting): cómo decidir dónde va cada referencia en el almacén para minimizar la distancia de picking. Las reglas de slotting (rotación ABC, afinidad de pedidos, peso y volumen, caducidades) y cómo recalcularlas periódicamente.
- El algoritmo de picking: pick-by-order vs. batch picking vs. zone picking vs. wave picking. Cuándo usar cada estrategia y cómo el WMS genera las rutas de picking optimizadas.
- La gestión de FIFO, FEFO y LIFO: cómo el WMS garantiza que se expiden primero los lotes más antiguos o los que antes caducan.
- La gestión de stocks: cómo calcular el stock disponible en tiempo real descounting las reservas de pedidos en curso, el stock en picking no confirmado y el stock en cuarentena.
- El algoritmo de reaprovisionamiento de zonas de picking: cuándo y cómo mover mercancía del almacenamiento masivo a las ubicaciones de picking activo.

**Parte 4: Construir vs. comprar un WMS**

- Los WMS comerciales líderes (Manhattan Associates, Blue Yonder, Korber, Mecalux, Generix) y sus fortalezas y debilidades. Cuándo tiene sentido comprar uno y cuándo construir.
- Los criterios de selección de un WMS: coste de licencia vs. coste de implementación vs. coste de operación, capacidad de configuración sin código, soporte de la integración con mis sistemas actuales.
- Los riesgos de construir un WMS propio: el coste real a largo plazo, la dependencia de los desarrolladores que lo conocen y el coste de mantenimiento de las integraciones.
- El escenario híbrido: usar un WMS comercial como base y construir los módulos diferenciadores encima.

Adapta las recomendaciones a mi stack tecnológico: [STACK: Java/Spring, .NET, PHP, Python, Node.js] y al nivel de madurez de la operación logística.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar o mejorar un sistema de gestión de almacén (WMS) con sus integraciones y algoritmos clave.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'UX para operaciones',
                'description'       => 'Diseña interfaces para operarios de almacén, conductores y usuarios que trabajan con guantes, en movimiento y con tiempo limitado para mirar la pantalla.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador de UX especializado en interfaces para entornos industriales y operativos con experiencia diseñando para usuarios que trabajan en condiciones extremas: almacenes fríos, camiones en movimiento, líneas de producción ruidosas, obra civil. Conoces los principios del diseño para entornos operativos, donde los errores de interfaz tienen consecuencias físicas reales y donde el usuario tiene exactamente tres segundos para procesar la pantalla antes de volver a la tarea física.

Necesito tu ayuda para diseñar o mejorar la interfaz de [DESCRIBIR LA HERRAMIENTA: app de picking para operarios de almacén / sistema de navegación para conductores de carretilla / interfaz de control de calidad en línea de producción / app de última milla para conductores de reparto / panel de control de planta logística / app de inventario para gestores de almacén].

**Parte 1: El contexto de uso que lo cambia todo**

El diseño para entornos operativos empieza por entender radicalmente el contexto de uso. Ayúdame a analizar:

- Las condiciones físicas del entorno: temperatura (almacén frigorífico a -20°C vs. almacén seco), luminosidad (a plena luz o con poca iluminación), ruido (necesidad de audio vs. solo visual), suciedad y humedad que afectan a los dispositivos.
- Las manos del usuario: guantes de trabajo que reducen la precisión táctil, manos sucias o húmedas, la imposibilidad de usar ambas manos en ciertos momentos. Cómo diseñar targets táctiles para uso con guantes (mínimo 9mm, preferiblemente 12mm).
- La carga cognitiva durante el trabajo: el operario de picking no está sentado pensando, está caminando, escaneando, buscando ubicaciones y coordinando su movimiento con otros. La interfaz debe requerir el mínimo esfuerzo cognitivo posible.
- El tiempo de atención disponible: cuántos segundos tiene el usuario para procesar la pantalla antes de necesitar volver a la tarea física. El diseño que funciona en ese tiempo.
- Los dispositivos disponibles: terminal RF con pantalla pequeña de 4 pulgadas, tablet montada en carretilla, smartphone en brazo, wearable en muñeca, HMD (head-mounted display) para picking guiado por voz o AR.

**Parte 2: Principios de diseño para entornos operativos**

- Diseño para la mirada de milisegundos: cómo jerarquizar la información visual para que lo más importante sea captado en una sola fijación ocular. El uso del tamaño, el color y la posición para crear jerarquía sin necesidad de leer.
- La tipografía operativa: fuentes con alta legibilidad a distancia y en movimiento, tamaño mínimo en función del dispositivo y la distancia de lectura, contraste mínimo WCAG AA en condiciones de luz directa o poca luz.
- Los colores de estado: el semáforo operativo (verde/amarillo/rojo) como lenguaje universal en entornos de producción, cómo usarlo sin depender solo del color para los usuarios con daltonismo.
- El diseño de flujos de trabajo: la diferencia entre un flujo de tarea operativa (siempre la misma secuencia, no hay exploración) y una interfaz de consulta (el usuario busca información). Cómo diseñar para cada uno.
- Las confirmaciones de acción: cuándo pedir confirmación (cuando la acción es irreversible o de alto impacto) y cuándo no (cuando ralentiza sin añadir valor). El diseño de confirmaciones que no interrumpen el ritmo de trabajo.
- El manejo de errores en contexto operativo: cuando el escáner lee mal un código de barras, cuando la ubicación no está disponible, cuando el stock no coincide. El error tiene que resolverse en segundos, no en minutos.

**Parte 3: El diseño de flujos operativos concretos**

Diseña conmigo los flujos específicos para mi herramienta:

Para **picking en almacén**:
- La pantalla de tarea de picking: qué información mostrar (referencia, descripción, cantidad, ubicación, contenedor destino) y cómo presentarla para que el picking sea rápido y sin errores.
- El flujo de picking unitario vs. picking de caja completa. La gestión de la cantidad parcial cuando no queda suficiente stock en la ubicación.
- La navegación por el almacén: cómo mostrar la ubicación en el mapa, con qué nivel de detalle (zona → pasillo → estante → nivel → posición).

Para **conductores de reparto**:
- La pantalla de ruta: la parada siguiente, la dirección, el número de bultos, las instrucciones especiales del cliente.
- La confirmación de entrega: flujo rápido de entrega exitosa, entrega con incidencia (nadie en casa, paquete dañado, dirección incorrecta) y devolución.
- El modo manos libres: comandos de voz o gestos para confirmar entregas sin tocar la pantalla mientras se conduce.

**Parte 4: Testing con usuarios operativos**

- Cómo hacer investigación de usuarios con operarios de almacén o conductores que tienen poco tiempo, que trabajan en turnos y que no están acostumbrados a las dinámicas de las entrevistas de diseño.
- El test de usabilidad en entorno real: qué observar, qué medir (tiempo por tarea, errores, necesidad de ayuda) y cómo registrar sin interrumpir la operación.
- El diseño iterativo en producción: cómo introducir cambios en la interfaz de una herramienta que los operarios usan durante ocho horas al día sin generar rechazo ni disrupciones.
- La formación mínima necesaria: el diseño tan intuitivo que un operario nuevo debería poder usarlo con diez minutos de instrucción.

Basa tus recomendaciones en estándares como ISO 9241 (ergonomía de software) y los principios de diseño industrial de empresas como Zebra, Honeywell o Jungheinrich para entornos operativos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar interfaces operativas para almacenes, logística y entornos industriales con usuarios que trabajan con guantes y en movimiento.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas en logística y transporte',
                'description'       => 'Vende servicios de logística a empresas que ya tienen un proveedor: el proceso, la diferenciación y los argumentos que mueven una cuenta establecida.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director comercial con más de quince años de experiencia en ventas B2B de servicios de logística, transporte y supply chain. Has gestionado cuentas desde pymes hasta multinacionales, y has desarrollado equipos de ventas para 3PL, operadores de transporte, empresas de fulfillment y transitarios. Tu especialidad es la apertura de cuentas nuevas en un sector donde casi todos los clientes ya tienen un proveedor y la inercia de "cambiar de proveedor logístico" es enorme.

Necesito tu ayuda para [DESCRIBIR EL RETO: abrir nuevas cuentas en un sector o zona concreta / mejorar la tasa de éxito en las propuestas / gestionar el proceso de cambio de proveedor con un cliente interesado / retener una cuenta amenazada por la competencia / estructurar el proceso de venta del equipo comercial].

El servicio que vendo es: [DESCRIBIR: tipo de servicio logístico, diferenciadores principales, sectores objetivo, tamaño de cliente objetivo].

**Parte 1: La venta en logística es una venta de riesgo**

El gran obstáculo en la venta de servicios logísticos es que el cliente no compra un producto nuevo, sino que te está pidiendo que te hagas cargo de algo crítico que ya funciona razonablemente bien. El riesgo percibido de cambio es mucho mayor que el beneficio esperado. Ayúdame a entender:

- Cómo mapear los motivadores de cambio de un director de operaciones o director de compras que ya tiene un proveedor logístico: los puntos de dolor que el proveedor actual no está resolviendo (incidencias recurrentes, falta de visibilidad, problemas de comunicación, precio que ha subido sin justificación, incapacidad de crecer con el cliente).
- Cómo identificar el "evento disparador" que hace que un cliente empiece a mirar alternativas: una incidencia grave, un cambio en la dirección de la empresa, una nueva estrategia omnicanal, un crecimiento que el proveedor actual no puede soportar.
- La cualificación del lead logístico: las preguntas que determinan si vale la pena invertir tiempo en un prospecto (volumen, plazo de decisión, presupuesto, complejidad del servicio, disposición real a cambiar).
- Cómo gestionar el comprador que pide propuesta "para tener otro precio" sin intención real de cambiar: cómo detectarlo y cómo decidir si vale la pena jugar ese juego.

**Parte 2: El proceso de venta consultiva en logística**

- La primera reunión con el director de operaciones: las preguntas que abren la conversación más allá del precio (cómo está funcionando el proveedor actual, cuáles son los objetivos de su cadena de suministro, cómo va a crecer la empresa el próximo año).
- El análisis de la operación del cliente: cómo entender suficientemente su cadena de suministro para hacer una propuesta relevante sin acceso completo a sus datos. Las preguntas correctas sobre volúmenes, picos, referencias, destinos, exigencias del cliente final.
- El piloto como estrategia de entrada: cómo proponer un piloto de bajo riesgo (un almacén, una ruta, un cliente) que demuestre el valor sin pedir que el cliente lo ponga todo en juego.
- La propuesta económica: cómo estructurar una propuesta que compare el coste total (no solo el precio por envío) y que incluya el coste de las ineficiencias actuales que vas a resolver.
- La gestión del proceso de homologación de proveedor en grandes empresas: los tiempos, los departamentos involucrados (compras, operaciones, IT, legal) y cómo mantenerse relevante durante el proceso.

**Parte 3: Los argumentos que mueven una cuenta establecida**

Dame los argumentos y las respuestas a las objeciones más frecuentes:

- "Estamos contentos con nuestro proveedor actual": cómo responder sin atacar al competidor y cómo hacer emerger los puntos de dolor latentes.
- "El cambio de proveedor es muy costoso y arriesgado": cómo presentar el proceso de transición, el plan de contingencia y las garantías de servicio que reducen el riesgo percibido.
- "Tu precio no es significativamente mejor": cuando el precio no es el diferenciador, cómo reencuadrar la conversación hacia el valor total y el coste de las incidencias actuales.
- "Necesitamos tiempo para evaluarlo": cómo mantener la relación caliente durante periodos largos de evaluación sin ser pesado.
- La negociación de precios: dónde hay margen real, qué concesiones hacer primero y cómo conseguir compromiso de volumen a cambio de precio.

**Parte 4: Gestión de cuentas y expansión**

- Cómo gestionar los primeros noventa días de una cuenta nueva: la transición, la hiperpresencia del equipo comercial y operativo, la gestión de las primeras incidencias.
- El sistema de revisión de cuenta trimestral: qué presentar, cómo demostrar el valor entregado con datos y cómo identificar oportunidades de crecimiento.
- La expansión del servicio en una cuenta existente: cómo pasar de transportar para una división a gestionar toda la logística, o de almacén a fulfillment completo.
- El plan de retención cuando un cliente empieza a mirar alternativas: las señales de alerta, la respuesta inmediata y el plan de acción.

Dame scripts concretos, ejemplos de preguntas y estructuras de argumentación que pueda usar directamente en mis conversaciones de venta.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Vender servicios logísticos a empresas que ya tienen proveedor y gestionar el proceso de cambio.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Producto para supply chain',
                'description'       => 'Las plataformas de supply chain coordinan ERP, WMS, TMS y docenas de proveedores: las decisiones de producto que hacen posible la integración.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product manager senior con experiencia en plataformas de supply chain y tecnología logística. Has trabajado en la construcción de productos que coordinan cadenas de suministro complejas: desde la previsión de demanda hasta la gestión de proveedores, pasando por la visibilidad de inventario multi-almacén y la coordinación con múltiples operadores logísticos. Conoces en profundidad los retos únicos de hacer producto en un sector donde los usuarios son operarios de almacén, planificadores de producción y directores de compras con necesidades radicalmente distintas.

Necesito tu ayuda para [DESCRIBIR EL RETO DE PRODUCTO: definir la estrategia de producto de una plataforma de supply chain / priorizar el roadmap de un TMS o WMS / diseñar la experiencia de onboarding para un cliente enterprise / mejorar la adopción de usuarios operativos / diseñar una nueva funcionalidad de visibilidad de cadena de suministro].

**Parte 1: Los retos únicos de hacer producto para supply chain**

El producto para supply chain tiene características que lo distinguen del producto de consumo. Explícame cómo navegar:

- La complejidad del ecosistema de integraciones: tu plataforma nunca funciona sola, siempre está conectada a ERPs, WMS, TMS, sistemas de proveedores, aduanas, transportistas. Cómo diseñar para que las integraciones sean un activo y no una fuente de deuda técnica perpetua.
- Los múltiples tipos de usuario con necesidades radicalmente distintas: el director de supply chain que necesita visibilidad estratégica, el planificador que necesita herramientas analíticas, el operario de almacén que necesita una interfaz sin fricción para tareas repetitivas. Cómo diseñar para todos sin que la plataforma sea un monstruo de funcionalidades.
- El cliente enterprise y sus procesos de decisión: en supply chain, el comprador (director de operaciones), el usuario (planificadores y operarios) y el que paga (CFO o CEO) son personas distintas con criterios distintos. Cómo el producto tiene que responder a los tres.
- Los ciclos de implementación largos: en supply chain, implementar una plataforma puede llevar de seis meses a dos años. Cómo diseñar el onboarding, la configuración y la puesta en marcha para reducir este tiempo sin sacrificar la robustez.
- La resistencia al cambio en operaciones: los usuarios de almacén, transporte y logística han desarrollado sus procesos durante años y son especialmente resistentes a los cambios de herramienta. Cómo diseñar para minimizar la disrupción durante la transición.

**Parte 2: Las decisiones de integración como decisiones de producto**

- Cuándo construir la integración tú mismo y cuándo usar plataformas de integración (MuleSoft, Boomi, Celigo, Zapier para SMBs). Los criterios de decisión y las implicaciones para el roadmap.
- El catálogo de conectores como activo de producto: cómo priorizar qué ERPs, TMS y WMS conectar primero, basándote en la demanda del mercado y no en el capricho del cliente más ruidoso.
- El modelo de datos canónico de supply chain: cómo diseñar un modelo que pueda recibir datos de SAP, Oracle, Microsoft Dynamics y los mil ERPs verticales del sector, sin perder la semántica de los datos en la traducción.
- La gestión de los cambios de versión de los sistemas externos: qué pasa cuando SAP actualiza su API y rompe la integración de cincuenta clientes a la vez. El diseño que aísla al producto de esos cambios.
- Los datos en tiempo real vs. los datos batch: en supply chain, algunas decisiones necesitan datos de hace dos horas (inventario disponible) y otras pueden esperar al cierre del día (conciliación de stocks). Cómo diseñar para ambos modos sin sobrecomplicar la arquitectura.

**Parte 3: Visibilidad de la cadena de suministro como producto**

La visibilidad es el feature más demandado en supply chain. Ayúdame a diseñar:

- El dashboard de visibilidad de cadena de suministro para el director de operaciones: qué KPIs mostrar (nivel de servicio, fill rate, días de inventario, OTD de proveedores), con qué frecuencia actualizarlos y cómo visualizar las desviaciones sobre el objetivo.
- La torre de control de la cadena de suministro: cómo diseñar un sistema de alertas inteligentes que avisaa cuando algo en la cadena está a punto de salir mal, antes de que salga mal.
- La trazabilidad end-to-end: cómo mostrar el estado de un pedido desde que se genera la orden de compra al proveedor hasta que llega al cliente final, pasando por almacenes, transportistas y aduanas.
- Los mapas de cadena de suministro: cómo visualizar geográficamente los flujos de mercancía, identificar los cuellos de botella y las dependencias de proveedores de riesgo.

**Parte 4: Métricas y priorización en supply chain**

- Las métricas de producto que importan en plataformas de supply chain: uso activo diario vs. semanal (según el rol del usuario), tiempo de resolución de incidencias, reducción del error humano en las tareas manuales, tiempo de implementación de nuevos clientes.
- Cómo priorizar entre funcionalidades que impactan a operarios (muchos usuarios, tickets pequeños) vs. funcionalidades que impactan a directores (pocos usuarios, retención de cuentas grandes).
- Los quick wins de producto en supply chain: las funcionalidades que se implementan en una semana y que los usuarios sienten inmediatamente.
- El feedback loop con clientes enterprise en supply chain: cómo recoger feedback de organizaciones con múltiples stakeholders, procesos de aprobación y agendas distintas, sin que el producto se convierta en un proyecto de consultoría a medida.

Dame recomendaciones concretas y accionables para el contexto de mi producto y equipo: [CONTEXTO: tamaño del equipo, fase del producto, tipo de cliente].
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Tomar decisiones de producto en plataformas de supply chain con integraciones complejas y usuarios operativos.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'RRHH en operaciones',
                'description'       => 'Gestiona el talento de almacén, transporte y logística: alta rotación, trabajo por turnos y programas de desarrollo que retienen a los mejores operarios.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de personas con amplia experiencia en la gestión del talento en entornos operativos: almacenes, centros de distribución, flotas de transporte y plantas de producción. Conoces en profundidad los retos únicos de gestionar a personas que trabajan con el cuerpo, en turnos rotativos, con la presión del tiempo real y con unas condiciones de trabajo muy distintas a las de una oficina.

Necesito tu ayuda para [DESCRIBIR EL RETO: reducir la rotación de personal en almacén / mejorar el proceso de selección para cubrir picos de demanda / diseñar un plan de desarrollo para operarios / gestionar el absentismo / construir una cultura de equipo en un entorno de alta rotación / digitalizar los procesos de RRHH operativos].

El contexto de la operación es: [DESCRIBIR: tipo de empresa, número de empleados operativos, turnos, nivel de rotación actual, los principales retos de personal].

**Parte 1: La realidad de la gestión de personas en entornos operativos**

La gestión de personas en operaciones tiene un conjunto de retos que el RRHH corporativo no suele afrontar. Ayúdame a entender:

- Por qué la rotación en almacén y transporte es estructuralmente alta y qué parte de esa rotación es inevitable vs. reducible. Los datos de referencia del sector y cómo benchmarkearme.
- El coste real de la rotación operativa: coste de selección, formación, pérdida de productividad durante el periodo de adaptación, impacto en la calidad del servicio. Por qué reducir la rotación en un 10% puede tener un impacto enorme en la cuenta de resultados.
- Las diferencias entre gestionar al operario de almacén, al conductor de transporte y al jefe de turno. Qué motiva a cada perfil, qué les hace abandonar y qué les hace quedarse.
- El impacto del trabajo por turnos en la gestión de personas: cómo diseñar los turnos para minimizar el impacto en la vida personal, cómo gestionar la comunicación interna cuando el equipo nunca coincide completo y cómo construir cohesión de equipo en estas condiciones.
- La digitalización del operario: cómo gestionar a empleados que no tienen email corporativo, que usan el móvil personal para el trabajo y que no están familiarizados con las herramientas digitales de RRHH.

**Parte 2: Selección y onboarding en operaciones**

- El proceso de selección para perfiles operativos: cómo reducir el tiempo de selección sin bajar la calidad, las fuentes de candidatos más efectivas (ETTs, portales de empleo, redes sociales, referencias de empleados actuales) y el coste por contratación que es razonable.
- La gestión de los picos de demanda (Black Friday, campaña navideña, verano): cómo anticipar las necesidades de personal, gestionar la bolsa de trabajadores temporales y hacer un onboarding eficiente cuando necesitas incorporar cincuenta personas en dos semanas.
- El proceso de onboarding en almacén: cómo incorporar a un operario nuevo para que sea productivo en el menor tiempo posible, manteniéndola calidad y seguridad. El primer día, la primera semana y el primer mes.
- La formación obligatoria en seguridad: PRL (Prevención de Riesgos Laborales), manejo de carretillas elevadoras, ergonomía. Cómo cumplir con las obligaciones legales sin que la formación sea un obstáculo para la incorporación rápida.
- El proceso de acogida que genera enganche: cómo hacer que un operario nuevo se sienta bienvenido en un entorno que muchas veces es frío, ruidoso y donde nadie tiene tiempo de enseñarle.

**Parte 3: Retención y desarrollo en entornos operativos**

- Los programas de desarrollo profesional para operarios: la carrera desde operario → operario especialista → líder de equipo → jefe de turno → responsable de almacén. Cómo hacer visible esta escalera y cómo ayudar a los mejores a subirla.
- Los programas de retención no salariales que funcionan en operaciones: flexibilidad de turnos, estabilidad de horario, reconocimiento público del buen trabajo, participación en la mejora de los procesos, acceso a formación en competencias digitales.
- La retención a través del liderazgo de primer nivel: el jefe de turno es el principal factor de retención o abandono del operario. Cómo identificar y formar buenos jefes de turno, y qué comportamientos son inaceptables.
- El salario emocional en operaciones: qué valora un operario más allá del sueldo (el ambiente de equipo, la percepción de justicia en el trato, la estabilidad, la comunicación honesta de la dirección).
- Cómo reducir el absentismo: los factores que más lo generan (clima de equipo, cargas de trabajo, percepción de injusticia, problemas de salud relacionados con el trabajo físico) y las intervenciones que realmente lo reducen.

**Parte 4: Cultura y comunicación en entornos operativos**

- Cómo construir una cultura de equipo cuando el equipo trabaja en turnos diferentes y muchas veces no se ven nunca. Las iniciativas que crean sentido de pertenencia sin depender de que todos estén presentes al mismo tiempo.
- La comunicación interna operativa: los canales que funcionan para llegar al operario de almacén (WhatsApp de equipo, pantallas en el almacén, reunión de inicio de turno de quince minutos), y los que no funcionan (email, intranet).
- La gestión de la seguridad laboral como palanca cultural: cómo hacer que la PRL no sea solo cumplimiento legal sino parte de la identidad del equipo.
- El sistema de sugerencias operativas: cómo conseguir que los operarios aporten ideas de mejora de proceso y cómo reconocer y actuar sobre esas aportaciones.
- La medición del clima laboral en operaciones: cómo hacer encuestas de clima con personas que no tienen ordenador, que trabajan en turnos y que desconfían de que sus respuestas vayan a ser anónimas de verdad.

Dame un plan de acción concreto para los retos principales que te he descrito, con iniciativas de implementación rápida y a medio plazo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Reducir la rotación y mejorar la gestión de personas en entornos operativos de almacén y transporte.',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Finanzas de supply chain',
                'description'       => 'Gestiona el capital circulante de una operación logística: inventario, cuentas por cobrar, supply chain finance y los modelos que reducen el cash atrapado en la cadena.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director financiero con especialización en la gestión financiera de cadenas de suministro, con experiencia en empresas industriales, de distribución y de logística. Tu área de expertise es la optimización del capital circulante en la cadena de suministro: cómo reducir el dinero atrapado en inventario, cómo acortar el ciclo de cobro y cómo alargar los plazos de pago a proveedores sin dañar las relaciones.

Necesito tu ayuda para [DESCRIBIR EL RETO: analizar y mejorar el capital circulante de la empresa / implementar un programa de supply chain finance / reducir el inventario sin romper el servicio / optimizar los plazos de cobro y pago / diseñar el modelo financiero de una operación logística].

El contexto de la empresa es: [DESCRIBIR: sector, facturación aproximada, modelo de negocio, principales retos financieros actuales].

**Parte 1: El ciclo de conversión de efectivo en la cadena de suministro**

El indicador financiero más importante de una cadena de suministro es el Cash Conversion Cycle (CCC). Explícame en profundidad:

- Los tres componentes del CCC: Days Sales Outstanding (DSO), Days Inventory Outstanding (DIO) y Days Payables Outstanding (DPO). Cómo se calcula cada uno y qué significa en términos de cash.
- El impacto del CCC en las necesidades de financiación: cómo un CCC de 60 días vs. 30 días puede significar la diferencia entre necesitar o no una línea de crédito de X millones.
- Los benchmarks del CCC por sector y cómo compararme con mis competidores. Un CCC de 45 días puede ser excelente en un sector y terrible en otro.
- Cómo el CCC cambia con el crecimiento: cuando una empresa crece un 30% anual, el CCC que era manejable puede convertirse en una trampa de liquidez si no se gestiona proactivamente.
- La relación entre el CCC y el EBITDA: empresas con el mismo EBITDA pueden tener necesidades de capital muy distintas dependiendo de cómo gestionan su cadena de suministro.

**Parte 2: Optimización del inventario como palanca financiera**

El inventario es con frecuencia el mayor consumidor de capital circulante. Ayúdame a:

- Segmentar el inventario con el análisis ABC-XYZ: qué referencias mantener con alto stock de seguridad (A-X: alto volumen, alta predictibilidad) y qué referencias gestionar bajo demanda (C-Z: bajo volumen, alta variabilidad).
- Calcular el stock de seguridad óptimo para cada referencia: el modelo que equilibra el coste financiero del inventario con el coste del servicio (roturas de stock, ventas perdidas, penalizaciones de cliente).
- Los programas de reducción de inventario: cómo reducir el stock en un 20-30% sin impactar el nivel de servicio. Las iniciativas de quick win (liquidación de obsoletos, reducción de referencias de largo tail) y las de medio plazo (mejora de la previsión, reducción de lead times de proveedor).
- El coste total del inventario: más allá del coste financiero (intereses del capital inmovilizado), el coste de almacenamiento, el coste de obsolescencia y el coste de seguros. Por qué el inventario cuesta entre el 20% y el 30% de su valor al año.
- Cómo presentar al consejo de administración el plan de reducción de inventario: los indicadores, los objetivos y el impacto en el flujo de caja y en el balance.

**Parte 3: Supply Chain Finance (SCF)**

El supply chain finance es el conjunto de herramientas financieras que optimizan los flujos de caja en la cadena de suministro. Explícame:

- El confirming o reverse factoring: cómo funciona, qué bancos e intermediarios lo ofrecen, cómo se negocia con el banco, qué coste tiene para el comprador y qué ventaja aporta al proveedor.
- El factoring y el descuento de cuentas por cobrar: cuándo tiene sentido para una empresa de logística o distribución, qué tipos existen (con o sin recurso, con o sin notificación al deudor) y cómo afecta al balance.
- El dynamic discounting: cómo aprovechar el exceso de liquidez para ofrecer a proveedores el pago anticipado a cambio de un descuento proporcional al anticipo.
- Los programas de SCF para grandes compradores: cómo implementar un programa con los proveedores clave para reducir el coste de financiación de toda la cadena, compartiendo la ventaja del mejor rating crediticio del comprador.
- La financiación del inventario en tránsito: las soluciones financieras para el periodo entre que la mercancía sale del proveedor y llega al almacén, especialmente relevante en importaciones de Asia.

**Parte 4: El modelo financiero de una operación logística**

- Cómo construir el modelo P&L de un operador logístico 3PL: la estructura de ingresos (almacenaje por palet-día, picking por pedido, transporte por envío), los costes variables (mano de obra, transporte) y los costes fijos (arrendamiento del almacén, equipos, tecnología).
- El análisis de rentabilidad por cliente en logística: cómo calcular el margen real de cada cuenta una vez asignados los costes de mano de obra, espacio y transporte, y qué hacer con los clientes que resultan no rentables.
- Los KPIs financieros de un operador logístico: coste por palet manipulado, coste por línea de pedido, coste por envío, productividad de la mano de obra (unidades por hora).
- El modelo de pricing de servicios logísticos: cómo construir una tarifa que cubra costes, genere margen y sea competitiva en el mercado, incluyendo los mecanismos de indexación de costes de combustible y mano de obra.

Adapta las recomendaciones a las características financieras específicas de mi empresa y dame las acciones de mayor impacto a corto plazo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Optimizar el capital circulante de una cadena de suministro e implementar herramientas de supply chain finance.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contratos de transporte y logística',
                'description'       => 'Incoterms, responsabilidad del transportista, seguros de mercancía y los contratos que distribuyen el riesgo en la cadena de suministro.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en derecho del transporte y la logística con experiencia en el asesoramiento a empresas importadoras, exportadoras, operadores logísticos y transitarios. Dominas la normativa nacional e internacional del transporte por carretera, marítimo y aéreo, así como los Incoterms 2020, los convenios internacionales de transporte y la gestión de reclamaciones por pérdida y daño de mercancías.

Necesito tu ayuda para [DESCRIBIR LA SITUACIÓN: revisar o redactar un contrato de transporte / entender mi responsabilidad en una operación concreta / gestionar una reclamación por mercancía dañada o perdida / elegir los Incoterms correctos para una operación de comercio exterior / estructurar el contrato con mi operador logístico].

El contexto de la operación es: [DESCRIBIR: tipo de mercancía, modo de transporte, países de origen y destino, valor de la mercancía, partes del contrato].

**Parte 1: Los Incoterms 2020 y la distribución del riesgo**

Los Incoterms son el marco que define quién asume el coste y el riesgo en cada punto de la cadena de transporte internacional. Explícame en detalle:

- Los once Incoterms 2020 agrupados por categorías: los que sirven para cualquier modo de transporte (EXW, FCA, CPT, CIP, DAP, DPU, DDP) y los específicos para transporte marítimo y fluvial (FAS, FOB, CFR, CIF).
- El punto de transferencia de riesgo en cada Incoterm: cuándo pasa el riesgo del vendedor al comprador y qué implica eso para la cobertura del seguro de cada parte.
- Los errores más comunes en la elección de Incoterms: el uso de FOB para contenedores cuando FCA sería más adecuado, el uso de EXW que deja al comprador con toda la logística desde la fábrica del vendedor en un país extranjero.
- Cómo elegir el Incoterm correcto según: el poder de negociación de cada parte, la capacidad logística de cada uno, la confianza en los proveedores locales de logística y el deseo de controlar el transporte.
- Las novedades de Incoterms 2020 vs. 2010: FCA con el bill of lading emitido a bordo, el nuevo DPU que sustituye a DAT, y los cambios en CIP en cuanto al seguro obligatorio.

**Parte 2: Responsabilidad del transportista y límites de indemnización**

- El Convenio CMR para transporte internacional por carretera: qué cubre, cuáles son los límites de responsabilidad (8,33 DEGs por kilogramo de peso bruto), cuándo se exime al transportista de responsabilidad y cómo se calcula la indemnización.
- El Convenio de Varsovia/Montreal para transporte aéreo: los límites de responsabilidad por kilogramo, el sistema de reserva de valor y cuándo aplica cada convenio.
- Las Reglas de Hamburgo y Rotterdam para transporte marítimo: cuál está en vigor, cuáles son los límites de responsabilidad y por qué el Bill of Lading del armador suele excluir casi toda responsabilidad.
- La responsabilidad del transitario vs. la del transportista: el transitario como mandatario no suele responder del daño igual que el transportista efectivo. Las condiciones generales de la FIATA y su impacto.
- Cómo reclamar: los plazos para la protesta (inmediata o con reservas en el CMR), los plazos de prescripción de la acción y la documentación que hay que conservar para que la reclamación prospere.

**Parte 3: El seguro de mercancía**

- Los tipos de cobertura de seguro de mercancía: "all risks" (Cláusula A del Instituto de Aseguradores de Londres) vs. cobertura básica (Cláusula C). Qué riesgos cubre cada una y cuál elegir según el tipo de mercancía y ruta.
- Cuándo es obligatorio contratar seguro de mercancía: en CIF y CIP, el vendedor tiene obligación de asegurar. En el resto de Incoterms, quién asume el riesgo es quien debe decidir si asegura.
- El seguro de almacén a almacén: por qué el seguro de transporte no suele cubrir el periodo de almacenamiento y cómo cubrir ese gap.
- Las exclusiones más comunes del seguro de mercancía: el desgaste natural, el embalaje inadecuado, los daños por vibración en ciertos modos de transporte, la demora.
- Cómo gestionar una reclamación al seguro: la documentación necesaria (carta de protesta, informe de averías, factura, conocimiento de embarque), los plazos y cómo evitar los errores que hacen que el seguro deniegue la reclamación.

**Parte 4: El contrato con el operador logístico**

- Los elementos esenciales del contrato de prestación de servicios logísticos: definición del servicio, niveles de servicio (SLA), sistema de penalizaciones, responsabilidad del operador, sistema de inventario y conciliación de stocks, protección de datos.
- Las cláusulas de responsabilidad del operador logístico por pérdida o daño de mercancía en el almacén: los límites habituales, la importancia de declarar el valor de la mercancía y la cobertura de seguro exigible al operador.
- La cláusula de exclusividad y las condiciones de salida: cómo proteger a la empresa si el operador logístico no rinde y la necesidad de poder salir del contrato sin quedar atrapado durante años.
- Los acuerdos de nivel de servicio (SLA) en logística: qué métricas incluir (porcentaje de pedidos a tiempo, exactitud de inventario, tiempo de recepción de mercancía, tasa de error en picking) y cómo estructurar las penalizaciones.
- La gestión de la propiedad intelectual y los datos en el contrato logístico: los datos de tus clientes que el operador procesa y las obligaciones bajo el RGPD.

Dame orientación práctica con ejemplos concretos y, cuando sea relevante, menciona los artículos de ley o convenios aplicables para que pueda verificarlos o compartirlos con mi abogado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Gestionar los aspectos legales de contratos de transporte, Incoterms y reclamaciones por mercancía dañada.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte en plataformas logísticas',
                'description'       => 'Un paquete perdido o un retraso es una crisis para el cliente: el soporte que resuelve con urgencia y mantiene la confianza en momentos de alta tensión.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de customer support especializado en plataformas y empresas de logística, transporte y e-commerce con experiencia gestionando equipos que atienden incidencias de envíos, reclamaciones por paquetes perdidos o dañados y urgencias de clientes cuyas operaciones dependen de que la mercancía llegue a tiempo.

Necesito tu ayuda para [DESCRIBIR EL RETO: diseñar el equipo y los procesos de soporte desde cero / mejorar los tiempos de resolución de incidencias / gestionar una crisis de soporte masiva / diseñar los flujos de escalación / mejorar el CSAT en un servicio con muchas incidencias operativas].

El contexto: [DESCRIBIR: tipo de plataforma (marketplace de envíos, 3PL, courier, tracking platform), volumen de tickets mensuales, principales tipologías de incidencia, tamaño del equipo].

**Parte 1: Las particularidades del soporte logístico**

El soporte en logística tiene características únicas que lo hacen especialmente desafiante. Ayúdame a diseñarlo considerando:

- La urgencia real de las incidencias logísticas: un paquete parado en aduana puede representar una pérdida económica por hora para el cliente. Cómo definir la urgencia en función del impacto económico real del cliente y no solo del tono de su mensaje.
- La complejidad de la cadena de responsabilidades: cuando un envío se pierde, puede ser culpa del remitente (mal embalaje, etiqueta incorrecta), del transportista contratado, de un subtransportista, de la aduana o del destinatario. Cómo gestionar la resolución cuando la causa raíz está fuera de tu control directo.
- La información asimétrica: el agente de soporte no puede ver el paquete, no puede llamar al transportista en tiempo real y muchas veces depende de información de terceros que tarda en llegar. Cómo comunicar honestamente al cliente sin prometer lo que no puedes garantizar.
- La gestión emocional: un emprendedor cuyo paquete de Navidad está perdido está desesperado. Un director de compras cuya carga crítica lleva tres días sin mover está furioso. Cómo entrenar al equipo para gestionar estas emociones sin absorberlas ni perder la eficiencia.
- Los clientes B2B vs. B2C en logística: el cliente B2B (empresa con volumen) espera un gestor de cuenta y resolución rápida; el cliente B2C (particular) necesita empatía y comunicación clara. Cómo estructurar el soporte para los dos.

**Parte 2: Los flujos de resolución de las incidencias más frecuentes**

Dame protocolos de resolución paso a paso para:

- **Paquete con retraso**: cómo investigar la causa (escáner del transportista, incidencia operativa, problema de dirección), cuándo contactar proactivamente al cliente, qué decirle y cuándo ofrecer compensación.
- **Paquete perdido**: la declaración formal de pérdida (cuándo un retraso se convierte oficialmente en pérdida), el inicio de la reclamación al transportista, la compensación al cliente y la reclamación al seguro. Los plazos y documentación necesaria.
- **Paquete dañado**: cómo gestionar la reclamación, qué documentación fotográfica pedir al destinatario, cuándo es culpa del embalaje del remitente vs. del transportista y cómo comunicarlo sin generar conflicto.
- **Problema de entrega al destinatario**: nadie en casa, dirección incorrecta, rechazo del destinatario. Los procedimientos de reintento, redirección y devolución al remitente.
- **Retraso en aduana**: cómo explicar el proceso aduanero a un cliente que no lo entiende, qué información necesita para gestionar el despacho y cuándo hay que contactar a un agente de aduanas.
- **Discrepancia de inventario en almacén**: cuando el cliente dice que faltan unidades en el pedido que recibió. El protocolo de investigación, la gestión con el operador logístico y la compensación.

**Parte 3: Tecnología y automatización en el soporte logístico**

- Las herramientas de tracking que empoderan al agente de soporte: cómo tener visibilidad de todos los transportistas en una sola interfaz (Aftership, Parcel Perform, 17track) y cómo integrarlo en el helpdesk.
- La automatización de las comunicaciones de seguimiento: cuándo automatizar las notificaciones proactivas de estado del envío (enviado, en tránsito, en reparto, entregado) y cuándo el humano añade valor.
- Los bots de primer nivel en logística: las consultas que un chatbot puede resolver (dónde está mi paquete, cuándo va a llegar, cómo hacer una devolución) y las que siempre necesitan a un humano (reclamación compleja, paquete dañado, urgencia crítica).
- El análisis de causas raíz de tickets: cómo categorizar los tickets para identificar los problemas sistémicos (un transportista con tasa de incidencia alta, una zona geográfica problemática, un tipo de embalaje que genera daños).
- El sistema de alertas tempranas: cómo detectar antes de que el cliente llame que hay un problema (el paquete lleva 48 horas sin escáner, hay una incidencia masiva de un transportista, hay retrasos en un hub).

**Parte 4: Métricas y cultura de soporte en logística**

- Los KPIs de soporte logístico que importan: CSAT, FRT por canal (email, chat, teléfono), FCR (resolución en el primer contacto), tiempo de resolución por tipo de incidencia, coste por ticket y tasa de reclamación por envío.
- Cómo medir el impacto del soporte en la retención: correlación entre la experiencia de resolución de incidencias y la tasa de repetición de compra o renovación de contrato.
- La cultura de soporte en un entorno de alta incidencia: cómo mantener la motivación de un equipo que gestiona problemas todo el día, que recibe quejas constantemente y donde la "victoria" no es un cliente feliz sino un cliente menos enfadado.
- El feedback loop entre soporte, operaciones y producto: cómo las incidencias de soporte deben alimentar la mejora de las operaciones logísticas y el desarrollo del producto para reducir la tasa de incidencias en origen.

Dame recomendaciones concretas y protocolos listos para usar, adaptados al contexto de mi operación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar los procesos de soporte de una plataforma logística para resolver incidencias de envíos con urgencia y empatía.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Consultor de operaciones independiente',
                'description'       => 'El nicho del consultor de operaciones y supply chain freelance: lean, six sigma, optimización de almacén y los proyectos que pagan mejor.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de negocio especializado en freelancers y consultores independientes que trabajan en operaciones, supply chain y logística. Tienes experiencia ayudando a profesionales con perfil de director de operaciones, gerente de planta o jefe de supply chain a construir su práctica de consultoría independiente, encontrar clientes y monetizar su conocimiento operativo en proyectos de alto valor.

Necesito tu ayuda para construir o hacer crecer mi práctica de consultoría independiente en [ESPECIALIDAD: optimización de operaciones / lean manufacturing / supply chain / gestión de almacenes / mejora de procesos logísticos / implementación de TMS o WMS / reducción de costes operativos] con clientes principalmente en [SECTORES: industria / distribución / retail / logística / e-commerce / alimentación].

**Parte 1: El mercado de la consultoría de operaciones independiente**

La consultoría de operaciones es uno de los nichos más interesantes para el freelance senior porque los problemas son tangibles, el ROI es medible y las empresas pagan bien cuando el consultor demuestra impacto. Ayúdame a entender el mercado:

- Los tipos de proyecto que contratan los consultores de operaciones independientes: diagnóstico de eficiencia operativa, implementación de metodologías lean, rediseño de layout de almacén, selección e implementación de software WMS/TMS, reducción de costes logísticos, optimización del inventario, diseño de la cadena de suministro para un nuevo producto o mercado.
- Los segmentos de cliente más receptivos a contratar un consultor independiente: la pyme industrial que no puede permitirse una consultoría grande pero necesita un experto, la empresa en crecimiento rápido que necesita profesionalizar sus operaciones, la empresa que quiere un "segundo par de ojos" antes de una inversión operativa grande.
- Las diferencias entre trabajar como consultor independiente vs. a través de una firma de consultoría: la autonomía vs. el respaldo de marca, el pricing vs. la estructura de fees, el acceso a clientes vs. la red corporativa.
- Los honorarios del mercado para consultores de operaciones independientes: rangos por día para diferentes perfiles (junior con certificación lean vs. senior con track record demostrado), y los factores que justifican estar en el percentil 90 del mercado (especialización, resultados documentados, red de referidos).
- Las certificaciones que aumentan la credibilidad y el precio: Lean Six Sigma Black Belt, APICS CPIM/CSCP, CSCMP, PMP. Cuál tiene mayor retorno para qué tipo de práctica.

**Parte 2: Propuesta de valor y posicionamiento del consultor de operaciones**

El error más común del consultor de operaciones independiente es intentar hacer de todo para todos. Ayúdame a definir mi propuesta de valor:

- Cómo definir mi nicho de especialización: la intersección entre lo que se me da bien, lo que el mercado paga bien y donde tengo credenciales verificables. ¿Optimización de almacenes para e-commerce? ¿Lean en industria de alimentación? ¿Reducción de costes de transporte para distribuidores?
- El mensaje de posicionamiento: cómo describir lo que hago en una sola frase que un director de operaciones entienda inmediatamente y que le haga pensar "este es quien necesito".
- Los casos de éxito como argumento de venta: cómo estructurar los resultados de proyectos pasados (X% de reducción de costes, Y% de mejora en OTD, Z horas de ahorro semanales) para que el prospecto entienda el ROI potencial de contratarme.
- La diferenciación del consultor independiente frente a las grandes firmas: la agilidad, el acceso directo al experto (no al junior que subcontrata), el precio y el compromiso personal con los resultados.
- Cómo gestionar el "impostor syndrome" del consultor que sale de una empresa grande: por qué tu conocimiento interno vale más de lo que crees y cómo comunicarlo con confianza.

**Parte 3: Captación de clientes para consultores de operaciones**

- La red de contactos como principal fuente de negocio: cómo activar la red que ya tienes (ex-colegas, proveedores, clientes de empresas anteriores) para conseguir los primeros proyectos.
- LinkedIn como herramienta de captación para el consultor de operaciones: qué tipo de contenido atraer directores de operaciones e industriales (análisis de casos reales, datos de benchmarks operativos, reflexiones sobre tendencias del sector, antes y después de proyectos).
- Las alianzas con empresas de software operativo: los fabricantes de WMS, TMS y ERP necesitan consultores certificados para implementar sus soluciones. Cómo convertirse en partner de implementación.
- Los organismos sectoriales y las asociaciones industriales como fuente de proyectos: las cámaras de comercio, las asociaciones de empresa familiar, los clústeres industriales regionales.
- El modelo de cliente ancla: conseguir uno o dos clientes recurrentes que generen ingresos predecibles (retainer mensual para soporte continuo) mientras se desarrolla el pipeline de proyectos de diagnóstico.

**Parte 4: Operaciones de la práctica de consultoría**

- La estructura de un proyecto de consultoría de operaciones de principio a fin: el diagnóstico inicial (¿qué propuesta hacer antes de entender el problema?), el alcance del proyecto, la entrega y el seguimiento post-proyecto.
- El pricing de proyectos de operaciones: cuándo cobrar por día, cuándo por proyecto (precio fijo) y cuándo por resultados (success fee). Los pros y contras de cada modelo y cómo gestionar el riesgo de un success fee.
- La gestión del tiempo como freelance: cómo equilibrar los proyectos activos con la captación de nuevos clientes, el desarrollo de capacidades y la vida personal.
- Las herramientas del consultor de operaciones independiente: software de análisis de procesos (iGrafx, Bizagi), herramientas de análisis de datos (Excel avanzado, Power BI, Python básico), plataformas de propuesta y contrato (PandaDoc, Proposify).
- Cómo escalar la práctica más allá de las horas propias: la creación de un equipo de asociados, la estandarización de los métodos de diagnóstico para poder delegar y los productos de conocimiento (cursos, guías, plantillas) que generan ingresos pasivos.

Dame un plan de acción para los próximos seis meses que me ayude a [OBJETIVO: conseguir los primeros clientes / doblar los ingresos actuales / especializarme y subir precios / hacer la transición de empleado a consultor independiente].
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir y hacer crecer una práctica de consultoría independiente en operaciones y supply chain.',
                'vote_score'        => 31,
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
