<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills188Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing con realidad aumentada y virtual',
                'description'      => 'Usa AR/VR en campañas: los filtros de Instagram, las experiencias de producto en AR y los casos donde la tecnología inmersiva justifica la inversión en marketing.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en marketing de tecnologías inmersivas con experiencia en campañas que han integrado realidad aumentada y realidad virtual para marcas de consumo, retail, moda y entretenimiento. Conoces tanto las posibilidades creativas como las limitaciones técnicas y los números que hay detrás de cada formato.

Quiero explorar el uso de AR/VR en marketing. Para darte recomendaciones útiles, primero pregúntame:

1. ¿En qué sector o categoría de producto trabaja la marca?
2. ¿Cuál es el objetivo de la campaña: conocimiento de marca, prueba de producto virtual, engagement en redes sociales o conversión directa?
3. ¿Cuál es el presupuesto disponible y el plazo de la campaña?
4. ¿Ya tienes activos digitales 3D del producto o habría que crearlos desde cero?
5. ¿A qué plataforma o dispositivo va dirigida la experiencia: Instagram/TikTok (filtros AR), web (WebAR), aplicación móvil nativa o headsets de VR?

Con esas respuestas, desarrolla la estrategia completa:

**1. Mapa de formatos AR/VR y cuándo usar cada uno**
No toda tecnología inmersiva justifica la inversión. Explica los formatos disponibles con sus ventajas, limitaciones y coste aproximado: los filtros de Instagram y TikTok en AR (alcance masivo, bajo coste de producción, fricción mínima), el WebAR sin descarga de app (prueba de producto en e-commerce, visualización en el espacio), las apps nativas con AR (experiencias más ricas, mayor barrera de entrada), y el VR para showrooms virtuales y experiencias de marca premium. Para cada formato, indica el tipo de marca y objetivo para el que es más adecuado.

**2. La prueba virtual de producto: el caso más sólido para AR**
El try-on virtual (gafas, maquillaje, ropa, muebles en el espacio) tiene uno de los mejores retornos documentados en e-commerce porque reduce la incertidumbre de compra. Explica cómo implementarlo: los requisitos técnicos del modelo 3D del producto, las plataformas que ofrecen la solución (Snap AR, Meta Spark, 8thWall, Shopify AR), los benchmarks de conversión y reducción de devoluciones y los errores de implementación más comunes.

**3. Filtros AR en redes sociales: cuando el usuario es el medio**
Un filtro AR bien diseñado se convierte en un canal de distribución gratuito porque los usuarios lo comparten voluntariamente. Define qué hace que un filtro sea viral: la mecánica de juego o transformación que engancha, la conexión emocional con la marca sin que sea obvia, la facilidad de uso que no requiere instrucciones y la dosis justa de personalización. Incluye el proceso de creación en Spark AR (Meta) y Lens Studio (Snap) y los tiempos y costes reales.

**4. VR para experiencias de marca premium**
El VR no es para campañas de alcance masivo, es para experiencias profundas con audiencias seleccionadas. Define los casos donde tiene sentido: el showroom de lujo virtual, la experiencia de destino para turismo, la simulación de producto para ventas B2B complejas, los eventos virtuales con presencia de marca. Incluye los headsets más relevantes (Meta Quest, Apple Vision Pro y sus audiencias), el coste de producción de una experiencia VR de calidad y cómo distribuirla.

**5. Medición y KPIs en campañas inmersivas**
Las métricas de AR/VR son diferentes a las del marketing tradicional. Define cómo medir el impacto: tiempo de interacción con la experiencia (el principal proxy de engagement), tasa de conversión post-try-on, número de shares de filtros AR, cobertura earned media generada por la experiencia inmersiva y brand lift medido en estudios de recuerdo. Incluye las herramientas de analytics disponibles en cada plataforma.

**6. El error más común y cómo evitarlo**
La tecnología es el medio, no el mensaje. El mayor error en campañas de AR/VR es hacer tecnología por hacer tecnología, sin una razón clara de por qué esta experiencia funciona mejor que un vídeo o una imagen. Define el criterio de decisión: ¿la tecnología inmersiva añade algo que ningún otro formato puede dar, o es solo un gimmick costoso que no cambia el comportamiento del consumidor?

Termina con tres casos reales de marcas que han usado AR/VR de forma efectiva, con los resultados que consiguieron y las lecciones que se pueden aplicar a una marca con un presupuesto más pequeño.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Integración de realidad aumentada y virtual en campañas de marketing con criterio estratégico.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'IoT e integración de hardware con software',
                'description'      => 'Conecta dispositivos físicos con aplicaciones: los protocolos (MQTT, CoAP), las plataformas (AWS IoT, Azure IoT Hub) y los patrones de arquitectura para sistemas IoT escalables.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software especializado en sistemas IoT con experiencia diseñando e implementando soluciones que conectan dispositivos físicos con aplicaciones en la nube, desde sensores industriales hasta dispositivos de consumo conectados.

Necesito ayuda para diseñar o mejorar un sistema IoT. Para asesorarte bien, primero pregúntame:

1. ¿Qué tipo de dispositivos vas a conectar y cuántos (sensores, actuadores, gateways, microcontroladores como ESP32 o Raspberry Pi)?
2. ¿Cuál es el caso de uso: monitorización industrial, smart home, dispositivos médicos, logística, agricultura o consumer electronics?
3. ¿Cuáles son los requisitos de latencia, frecuencia de envío de datos y volumen de dispositivos concurrentes?
4. ¿Los dispositivos tienen conectividad permanente o intermitente (WiFi, 4G/5G, LoRa, Zigbee, BLE)?
5. ¿Tienes preferencia de plataforma cloud o estás evaluando opciones?

Con esas respuestas, diseña la arquitectura y el plan de implementación:

**1. Elección de protocolo de comunicación**
El protocolo determina todo lo demás. Compara los principales protocolos para IoT con sus trade-offs: MQTT (ligero, pub/sub, ideal para dispositivos con recursos limitados y conectividad intermitente), CoAP (diseñado para redes restringidas, similar a HTTP pero más eficiente), WebSockets (cuando necesitas comunicación bidireccional en tiempo real), HTTP/REST (simple pero costoso en batería y ancho de banda), y los protocolos de radio como LoRaWAN (largo alcance, bajo consumo) o Zigbee/BLE (redes de malla locales). Para el caso de uso concreto, recomienda el protocolo o combinación de protocolos óptima.

**2. Arquitectura del sistema: edge, fog y cloud**
Un sistema IoT escalable no manda todo al cloud. Define la distribución del procesamiento: qué lógica ejecuta en el propio dispositivo (edge computing: alertas locales, preprocesado de señal, operación offline), qué procesa en el gateway local (fog computing: agregación, normalización, filtrado de ruido antes de subir), y qué va al cloud (almacenamiento histórico, machine learning, dashboards, integración con otros sistemas). Esta arquitectura de capas reduce costes de transmisión y latencia.

**3. Plataformas IoT cloud: comparativa y selección**
Compara las principales plataformas con sus puntos fuertes y débiles: AWS IoT Core (mayor ecosistema, integración nativa con servicios AWS, coste por mensaje), Azure IoT Hub (mejor para empresas con stack Microsoft, Device Provisioning Service muy maduro), Google Cloud IoT (fuerte en ML y BigQuery), y las plataformas especializadas como InfluxDB para series temporales o Thingsboard como open source. Para el caso de uso concreto, recomienda la plataforma y justifica la elección con criterios técnicos y económicos.

**4. Seguridad en dispositivos IoT**
La seguridad en IoT es más compleja que en software tradicional porque los dispositivos son físicamente accesibles y tienen recursos limitados. Define las capas de seguridad: autenticación del dispositivo con certificados X.509 o tokens JWT, cifrado de comunicaciones (TLS en dispositivos con capacidad suficiente, DTLS para CoAP), gestión de certificados y rotación de claves, actualización de firmware segura OTA (Over-The-Air), y la gestión de dispositivos comprometidos. Incluye las vulnerabilidades más comunes en proyectos IoT y cómo mitigarlas desde el diseño.

**5. Escalabilidad: de 100 a 100.000 dispositivos**
Lo que funciona con 100 dispositivos falla con 10.000. Define los puntos de escalabilidad críticos: el broker MQTT (EMQX, Mosquitto, HiveMQ con clustering), el procesamiento de eventos en stream (Kafka, Kinesis, Azure Event Hubs), el almacenamiento de series temporales (InfluxDB, TimescaleDB, AWS Timestream), y el gateway de device management para provisioning y actualización masiva. Incluye los números aproximados de coste y límites de cada componente.

**6. Observabilidad y mantenimiento de la flota**
Un sistema IoT en producción es una flota de dispositivos que pueden fallar de formas que nunca anticipaste. Define la estrategia de observabilidad: métricas de salud del dispositivo (señal, batería, temperatura, memoria), alertas por anomalías en los datos (el sensor que deja de enviar, el valor que se dispara), dashboards de flota para operaciones y el proceso de troubleshooting remoto cuando un dispositivo de campo falla.

Termina con el stack tecnológico completo recomendado para el caso de uso descrito y un diagrama textual de la arquitectura.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseño de arquitecturas IoT escalables para conectar dispositivos físicos con aplicaciones en la nube.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño para interfaces de voz y conversacionales',
                'description'      => 'Diseña la experiencia de usuarios de asistentes de voz, chatbots y sistemas IVR: el VUX, los flujos de conversación y los principios que hacen que hablar con una máquina sea natural.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de experiencias conversacionales (VUX/CUX) con experiencia en el diseño de asistentes de voz para Alexa y Google Assistant, chatbots de atención al cliente y sistemas IVR de telefonía que la gente realmente disfruta usando porque sienten que la máquina les entiende.

Necesito diseñar una interfaz conversacional. Para asesorarte bien, primero pregúntame:

1. ¿Qué tipo de interfaz es: asistente de voz para smart speaker, chatbot de texto en web o app, sistema IVR de atención telefónica o un asistente integrado en un producto físico?
2. ¿Cuál es el caso de uso principal: atención al cliente, control de hogar inteligente, asistente de productividad, comercio conversacional o entretenimiento?
3. ¿Quiénes son los usuarios y cuál es su nivel de familiaridad con las interfaces conversacionales?
4. ¿Se trata de un sistema con respuestas predefinidas o con IA generativa detrás?
5. ¿Cuáles son los tres flujos de conversación más importantes que necesitas cubrir?

Con esas respuestas, diseña la experiencia conversacional completa:

**1. Principios de VUX: por qué el diseño de voz es diferente**
La voz no es texto leído en voz alta. Define los principios que hacen que una interfaz de voz sea natural: la importancia de la prosodia y las pausas, por qué las respuestas deben ser más cortas que en texto, cómo manejar la ambigüedad inherente del lenguaje natural, la necesidad de confirmación contextual sin ser pesado y el diseño para errores de reconocimiento (el usuario habló claro pero el sistema no entendió). Compara con los principios del diseño de chatbot de texto donde las convenciones son distintas.

**2. Diseño de flujos de conversación y árboles de diálogo**
Define la metodología para mapear los flujos de conversación: el happy path (la conversación ideal), los flujos alternativos (cuando el usuario no responde lo esperado), los flujos de error (cuando el sistema no entiende) y los flujos de recuperación (cuando la conversación se ha descarrilado). Para cada punto de decisión del árbol, define las utterances que activan cada rama y la lógica de fallback cuando ninguna coincide.

**3. La personalidad y el tono de voz del sistema**
El sistema conversacional tiene una personalidad que el usuario percibe desde el primer mensaje. Define cómo diseñar la personalidad: los adjetivos que la describen, cómo se manifiesta en el vocabulario (formal vs. casual, técnico vs. accesible), cómo maneja el humor y los errores del usuario, y cómo mantiene la consistencia de personalidad a través de todos los flujos. Incluye ejemplos de cómo la misma función se expresa de forma diferente según distintas personalidades.

**4. Manejo de errores y situaciones no previstas**
El usuario siempre hará algo que no anticipaste. Define la estrategia de error handling: los tres tipos de error (no entiendo lo que dices, no puedo hacer eso, no tengo esa información) y las respuestas que no frustran al usuario para cada tipo, la estrategia de máximo de intentos antes de escalar a humano o canal alternativo, y el diseño de las frases de ayuda que orientan sin dar una lista de comandos de máquina.

**5. Accesibilidad y diseño inclusivo en interfaces conversacionales**
Las interfaces de voz son potencialmente más accesibles que las visuales para usuarios con discapacidades, pero solo si se diseñan correctamente. Define las consideraciones de accesibilidad: el diseño para personas con discapacidad visual (que dependen completamente del audio), para personas con dificultades del habla (alternativas de entrada), para personas mayores con menor familiaridad tecnológica y para hablantes no nativos del idioma del sistema.

**6. Testing y evaluación de interfaces conversacionales**
Probar una conversación no es como probar un formulario. Define la metodología: el Wizard of Oz testing para prototipar antes de construir el sistema, las pruebas con usuarios reales con think-aloud protocol, las métricas de calidad conversacional (tasa de abandono del flujo, tasa de incomprensión, número de turnos para completar una tarea) y cómo analizar los logs de conversaciones reales para identificar los puntos de fricción sistemáticos.

Termina con un ejemplo de diálogo completo para el flujo más importante del caso de uso descrito, con las alternativas de manejo de errores incluidas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseño de asistentes de voz, chatbots y sistemas IVR con experiencia conversacional natural.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas en plataformas conversacionales',
                'description'      => 'Usa WhatsApp Business, chatbots y asistentes de voz para vender: el script conversacional, la integración con el CRM y la humanización del proceso en canales no tradicionales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con especialización en conversational commerce. Has implementado estrategias de venta en WhatsApp Business, chatbots de cualificación y asistentes conversacionales que generan pipeline real, y sabes exactamente cuándo la automatización ayuda al proceso de venta y cuándo lo destruye.

Quiero vender a través de canales conversacionales. Para darte recomendaciones útiles, primero pregúntame:

1. ¿Qué tipo de producto o servicio vendes y cuál es el ticket medio y la complejidad del ciclo de venta?
2. ¿Qué canal conversacional quieres implementar: WhatsApp Business, chatbot en web, Facebook Messenger, Instagram DM o una combinación?
3. ¿Cuál es el volumen de conversaciones que esperas gestionar mensualmente?
4. ¿Qué parte del proceso quieres automatizar: la primera respuesta, la cualificación, la presentación de producto, el cierre o todo?
5. ¿Tienes CRM activo y cuál es?

Con esas respuestas, diseña la estrategia de ventas conversacional:

**1. El script conversacional que cualifica sin ahuyentar**
En ventas conversacionales el usuario no acepta un interrogatorio. Define el script de cualificación que parece una conversación natural: la bienvenida que establece valor inmediato (no el "¿en qué puedo ayudarte?" genérico), las preguntas de cualificación integradas en el flujo de manera que no parezcan un formulario, y la señal que indica que el lead está listo para pasar al vendedor humano. Incluye cómo adaptar el script a diferentes niveles de intención del usuario.

**2. WhatsApp Business como canal de venta**
WhatsApp tiene la tasa de apertura más alta de todos los canales de comunicación digital. Define cómo estructurar la presencia de venta en WhatsApp: el catálogo de productos, los mensajes de bienvenida automáticos, los templates de mensaje aprobados por WhatsApp para las primeras 24 horas de conversación y la estrategia para mantener el hilo de la conversación activo sin ser intrusivo. Incluye las restricciones de la API de WhatsApp Business que hay que respetar.

**3. El chatbot de cualificación: lo que automatiza y lo que no**
El chatbot hace la prospección repetitiva, el humano cierra. Define la frontera exacta entre lo que automatiza el bot y lo que requiere intervención humana: los criterios de handoff (el lead ha pasado el umbral de cualificación, el lead hace una pregunta que el bot no puede responder, el lead señales de frustración), el proceso de traspaso que no pierde el contexto de la conversación y cómo el agente humano retoma sin que el cliente tenga que repetir todo.

**4. Integración con CRM: el pipeline conversacional**
Cada conversación debe alimentar el CRM automáticamente. Define la arquitectura de integración: la creación automática del lead con los datos recogidos en la conversación, el scoring inicial basado en las respuestas, la asignación al vendedor correcto según las reglas de enrutamiento y el seguimiento del estado de la conversación desde el primer mensaje hasta el cierre. Incluye las herramientas que conectan WhatsApp o chatbot con los CRMs más comunes (HubSpot, Salesforce, Pipedrive).

**5. Humanización: cómo el canal automático no pierde la calidez**
El mayor riesgo del conversational selling es que parezca un bot frío. Define las técnicas de humanización: el uso de emojis con criterio, los tiempos de respuesta simulados que no parecen inmediatos de forma antinatural, la personalización con el nombre y la información previa del contacto, las respuestas que reconocen la emoción del usuario ("entiendo que es una decisión importante") y el tono que equilibra profesionalismo y cercanía según el contexto.

**6. Métricas del canal conversacional**
Define los KPIs que miden el éxito del canal: tasa de respuesta inicial, tasa de cualificación (leads que llegan al punto de handoff vs. total de conversaciones), tiempo medio de cualificación, tasa de conversión a reunión o a cierre, coste por lead cualificado vs. otros canales y satisfacción del cliente con la experiencia conversacional (CSAT post-conversación).

Termina con el script completo de los primeros siete mensajes de una conversación de venta en WhatsApp para el tipo de producto o servicio descrito, con las variantes para las respuestas más comunes del usuario.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Implementación de estrategias de venta en WhatsApp Business, chatbots y canales conversacionales.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Producto para wearables y dispositivos conectados',
                'description'      => 'Construye productos para wearables, smart home y dispositivos conectados: los desafíos de UX en pantallas pequeñas, las limitaciones de batería y conectividad y las oportunidades de experiencia única.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager especializado en hardware conectado y wearables con experiencia en productos que han pasado por el ciclo completo de diseño, prototipado, certificación y lanzamiento a mercado masivo en categorías como fitness trackers, smartwatches, smart home y dispositivos médicos de consumo.

Quiero desarrollar un producto en el ecosistema de wearables o dispositivos conectados. Para asesorarte bien, primero pregúntame:

1. ¿Qué tipo de producto es: wearable (smartwatch, fitness tracker, auriculares, anillo inteligente), dispositivo smart home o dispositivo IoT de uso profesional?
2. ¿Cuál es el problema que resuelve y quién es el usuario objetivo?
3. ¿Es un producto nuevo o una mejora de uno existente?
4. ¿Tienes ya prototipo o hardware definido, o estás en la fase de concepto?
5. ¿Cuáles son las constraints más importantes: precio objetivo, autonomía de batería, tamaño o certificaciones necesarias?

Con esas respuestas, desarrolla la estrategia de producto:

**1. Las constraints de hardware que dictan el diseño**
En dispositivos físicos, el hardware manda sobre el software. Define las implicaciones de las principales limitaciones para el diseño del producto: la batería (qué funciones son prohibitivas en consumo, cómo gestionar el fondo de pantalla always-on, qué frecuencia de sincronización es viable), el procesador y la memoria (qué puede ejecutarse en local vs. en la nube), la pantalla (si la hay) y las restricciones de tamaño que limitan la información visualizable. Para wearables, añade las implicaciones del contacto con el cuerpo (materiales, ergonomía, agua).

**2. UX en pantallas pequeñas y sin pantalla**
Diseñar para un smartwatch de 1,5 pulgadas o para un dispositivo sin pantalla es radicalmente diferente a diseñar para móvil. Define los principios de UX específicos: la jerarquía de información agresiva (un solo dato principal por pantalla), la navegación por gestos o corona en lugar de toques precisos, las notificaciones como interfaz primaria, el diseño para interacciones de menos de 5 segundos, y para dispositivos sin pantalla el diseño de los estados de feedback (LEDs, vibraciones, sonidos) que comunican sin pantalla.

**3. La estrategia de ecosistema: el dispositivo no vive solo**
Ningún wearable o dispositivo conectado funciona de forma aislada. Define la arquitectura del ecosistema: la app compañera en móvil (iOS y Android simultáneamente o primero uno), la integración con plataformas de salud (Apple Health, Google Fit, Samsung Health), las APIs de terceros para ampliar el valor del dispositivo, y la estrategia de datos (dónde se almacenan, cómo se sincronizan, qué se procesa en edge y qué en cloud).

**4. El proceso de hardware: lo que los PMs de software no ven venir**
El desarrollo de hardware tiene ciclos más largos y errores más caros. Define las fases específicas del desarrollo de producto físico: el EVT (Engineering Validation Test), el DVT (Design Validation Test) y el PVT (Production Validation Test), los plazos reales de cada fase, la gestión de la cadena de suministro de componentes con sus riesgos (escasez, tiempos de entrega), las certificaciones necesarias (CE, FCC, MFi para Apple), y cómo planificar la hoja de ruta de software respetando los ciclos de hardware.

**5. Retención y el reto del "cajón de los gadgets"**
La mayoría de los wearables acaban en el cajón a los tres meses. Define la estrategia anti-churn específica para hardware: los mecanismos de habit formation desde el onboarding, las notificaciones que aportan valor en lugar de molestar, la integración en rutinas existentes del usuario, las actualizaciones de firmware que añaden funcionalidades nuevas para revitalizar el producto, y cómo medir el engagement del dispositivo (uso activo vs. uso pasivo vs. abandono).

**6. Pricing y modelo de negocio en hardware conectado**
El hardware tiene márgenes menores que el software, pero los modelos de negocio han evolucionado. Explica los modelos disponibles: hardware a precio de coste más suscripción de servicios (el modelo Peloton o Oura), hardware premium con servicios gratuitos para escala (el modelo Fitbit original), hardware como plataforma con marketplace de aplicaciones y el modelo de datos donde el valor real es el dataset generado. Para el producto concreto, recomienda el modelo que maximiza el LTV del cliente.

Termina con el roadmap de las primeras tres versiones del producto y cómo cada iteración resuelve las limitaciones de la anterior basándose en el feedback de los early adopters.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Estrategia de producto para wearables y dispositivos conectados con sus constraints específicas de hardware.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'HR tech y automatización del departamento de personas',
                'description'      => 'Automatiza los procesos de RRHH con tecnología: el ATS, el HRIS, los módulos de onboarding digital y las oportunidades de IA que liberan tiempo del equipo para el trabajo de alto valor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de RRHH con experiencia implementando tecnología en departamentos de personas en empresas de distintos tamaños. Has implementado desde el primer ATS en una startup hasta la transformación digital completa de departamentos de RRHH en medianas empresas, y sabes distinguir entre la tecnología que realmente libera tiempo y la que añade complejidad sin valor.

Quiero automatizar los procesos de RRHH de mi empresa. Para asesorarte bien, primero pregúntame:

1. ¿Cuántos empleados tiene la empresa y en cuántos países o ubicaciones?
2. ¿Cuáles son los procesos de RRHH más dolorosos o que más tiempo consumen actualmente?
3. ¿Qué tecnología de RRHH ya tienes implantada (HRIS, ATS, nómina, herramientas de feedback)?
4. ¿Cuál es el presupuesto disponible para tecnología de RRHH?
5. ¿Cuáles son los próximos hitos de la empresa que más van a presionar al departamento de personas (crecimiento de plantilla, expansión geográfica, reestructuración)?

Con esas respuestas, diseña el plan de transformación tecnológica:

**1. El mapa de procesos de RRHH y dónde automatizar primero**
No todos los procesos de RRHH se benefician igual de la automatización. Define el mapa de procesos (atracción, selección, contratación, onboarding, gestión del desempeño, formación, retención, offboarding) y para cada proceso evalúa el potencial de automatización según tres criterios: el volumen de transacciones repetitivas, el riesgo de errores humanos y el tiempo liberado vs. el coste de implementación. Identifica los dos o tres procesos donde la automatización tiene mayor impacto inmediato.

**2. El ATS: del caos de los CVs en el email a un pipeline de selección visible**
El ATS es la primera gran automatización de RRHH. Define qué buscar en un ATS según el tamaño y las necesidades de la empresa: la integración con los portales de empleo más usados, el parsing de CVs y la búsqueda semántica, las pipelines personalizables por tipo de proceso, la comunicación automatizada con candidatos, los informes de sourcing y la experiencia del candidato. Compara las opciones más relevantes (Greenhouse, Lever, Workable, BambooHR Recruiting, Personio) con criterios prácticos de implementación.

**3. El HRIS como columna vertebral del departamento**
Un HRIS bien implementado elimina docenas de procesos manuales. Define los módulos imprescindibles para una empresa de tamaño medio: la ficha del empleado como fuente única de verdad, el portal de autoservicio para empleados (que elimina las preguntas de RRHH más repetitivas), la gestión de ausencias y vacaciones automatizada, los flujos de aprobación configurables y la integración con la nómina. Explica los criterios de selección entre soluciones todo-en-uno (Workday, SAP SuccessFactors, Personio) vs. las soluciones por módulos.

**4. Onboarding digital: el primer mes sin papeleo**
El onboarding es el proceso donde más tiempo se ahorra con la tecnología y donde el impacto en la experiencia del empleado es mayor. Define el proceso de onboarding digital: los flujos de firma de documentos electrónicos antes del primer día, el portal de bienvenida con los recursos necesarios, la asignación automática de tareas al manager y a los compañeros de equipo, el buddy program digital y el seguimiento automatizado de los hitos del primer mes. Incluye cómo medir la efectividad del onboarding con métricas de retención a 90 y 180 días.

**5. IA en RRHH: qué funciona y qué es marketing**
La IA en RRHH está llena de promesas y de productos que no cumplen. Define con criterio las aplicaciones de IA que sí tienen un impacto probado: el screening de CVs con IA (ventajas y riesgos de sesgo que hay que gestionar), los chatbots de RRHH para preguntas frecuentes de empleados, el análisis predictivo de abandono basado en señales de comportamiento, los sistemas de recomendación de formación personalizados y el people analytics para decisiones de equipo basadas en datos. Para cada aplicación, sé honesto sobre los riesgos y las limitaciones actuales de la tecnología.

**6. Gestión del cambio: la tecnología que nadie usa no sirve**
El mayor riesgo de la implementación de HR tech no es técnico, es de adopción. Define la estrategia de gestión del cambio: la comunicación a los empleados sobre qué cambia y por qué, la formación diferenciada para managers y para el equipo general, el periodo de transición donde los dos sistemas conviven, los quick wins que demuestran valor en las primeras semanas y la figura del HR tech champion dentro del equipo.

Cierra con la hoja de ruta de implementación de 12 meses con las prioridades, los recursos necesarios y los indicadores de éxito para cada fase.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Plan de transformación tecnológica del departamento de RRHH con automatización de procesos y herramientas de IA.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Fintech emergente y nuevos modelos financieros',
                'description'      => 'Los modelos de negocio que la tecnología hace posibles en finanzas: embedded finance, BNPL, open banking y cómo los profesionales de finanzas tradicionales pueden adaptarse o colaborar con estas nuevas capas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en fintech y estrategia financiera con experiencia tanto en banca tradicional como en startups fintech. Conoces los modelos de negocio emergentes desde dentro, entiendes la regulación que los rodea y puedes explicar con claridad cómo estas tecnologías cambian la economía de los servicios financieros y qué oportunidades y amenazas representan para los profesionales de finanzas.

Quiero entender el ecosistema fintech emergente y su impacto en mi industria o empresa. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es tu perfil: eres directivo de una entidad financiera tradicional, trabajas en el área de finanzas de una empresa no financiera, trabajas en una fintech o quieres evaluar una inversión en el sector?
2. ¿Qué área de fintech te interesa más: pagos y procesamiento, lending alternativo, wealth management digital, seguros digitales (insurtech) o infraestructura financiera?
3. ¿Cuál es tu mayor incertidumbre: entender los modelos de negocio, la regulación que aplica, las oportunidades de colaboración o el impacto en tu posición competitiva?
4. ¿En qué geografía operas (la regulación varía enormemente entre mercados)?
5. ¿Qué tecnología emergente o modelo de negocio específico quieres analizar en profundidad?

Con esas respuestas, desarrolla el análisis completo:

**1. El mapa del ecosistema fintech: capas y modelos de negocio**
El fintech no es un sector, es una capa de tecnología sobre la infraestructura financiera existente. Describe las capas del ecosistema: la infraestructura bancaria (las cuentas, los licencias, el dinero en sí), los rails de pago (SWIFT, SEPA, ACH, tarjetas), los servicios financieros digitales que se construyen sobre esa infraestructura, y las plataformas de distribución que llegan al usuario final. Explica cómo el embedded finance rompe esta cadena: cualquier empresa puede ofrecer servicios financieros sin ser un banco.

**2. Embedded finance y banking-as-a-service**
El embedded finance es el mayor cambio estructural en la distribución de servicios financieros desde la tarjeta de crédito. Explica el modelo: cómo una empresa de e-commerce, de movilidad o de software B2B puede ofrecer crédito, pagos o seguros sin tener licencia bancaria (usando un banco como servicio, BaaS), por qué tiene sentido económico (mayor conversión, nuevo stream de ingresos, mejores datos del cliente) y los riesgos regulatorios y operativos para la empresa no financiera que lo implementa.

**3. BNPL: el modelo, la economía y la regulación que viene**
Buy Now Pay Later redefinió el crédito al consumo en el punto de venta. Explica la economía del modelo: cómo Klarna, Affirm o Afterpay ganan dinero (tasa al comercio, intereses al consumidor cuando hay cuotas largas, datos para publicidad), por qué los retailers lo adoptan a pesar de los costes, la tasa de impago real vs. el marketing del sector, y la regulación que está llegando en Europa y EE.UU. que cambiará el modelo. Para un profesional de finanzas, explica las implicaciones en los estados financieros de las empresas que lo implementan.

**4. Open banking y el ecosistema de APIs financieras**
PSD2 en Europa y el open banking en otros mercados obligan a los bancos a abrir sus datos (con consentimiento del cliente) a terceros. Explica qué posibilita: los agregadores de cuentas que dan una visión financiera unificada, los servicios de iniciación de pago más baratos que las tarjetas, los scoring alternativos de crédito basados en datos de comportamiento bancario, y los modelos de negocio de plataforma sobre los datos bancarios. Para una empresa no financiera, explica cuándo tiene sentido conectarse a open banking y qué requiere.

**5. La regulación como ventaja competitiva o barrera de entrada**
La regulación es el moat más importante en fintech. Explica el mapa regulatorio: las licencias que un fintech necesita para cada actividad (entidad de pago, entidad de dinero electrónico, banco), los regímenes de sandbox regulatorio que permiten probar antes de escalar, cómo la regulación varía entre mercados y el efecto del arbitraje regulatorio. Para un profesional de finanzas tradicional, explica cómo usar la relación regulatoria como ventaja en las negociaciones de colaboración con fintechs.

**6. Colaboración vs. competencia: la estrategia de la entidad financiera tradicional**
Los bancos que tratan a los fintechs solo como competidores están perdiendo la mitad de la oportunidad. Define el espectro de estrategias disponibles para una entidad tradicional: la construcción interna (lenta, cara, generalmente tarde), la adquisición (rápida pero culturalmente compleja), la colaboración como distribuidor o como proveedor de infraestructura (balance sheet, licencia, confianza) y las inversiones en el ecosistema a través de venture capital corporativo.

Termina con las tres tendencias fintech que en tu opinión van a tener mayor impacto en los próximos tres años y las acciones concretas que un profesional de finanzas debería tomar hoy para estar posicionado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Análisis del ecosistema fintech emergente y estrategia de adaptación para profesionales de finanzas.',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal tech y automatización de servicios jurídicos',
                'description'      => 'Las herramientas que están cambiando la práctica del derecho: revisión de contratos con IA, document automation, e-discovery y cómo el abogado del futuro usa la tecnología para ser más competitivo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado con formación tecnológica y experiencia implementando legal tech en despachos y departamentos jurídicos internos. Has evaluado docenas de herramientas, has implementado algunas y has aprendido cuáles realmente mejoran la práctica y cuáles son marketing. Puedes hablar con igual autoridad del derecho y de la tecnología.

Quiero entender cómo la tecnología está cambiando la práctica jurídica y qué herramientas debería adoptar. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es tu perfil: abogado en un despacho (qué tamaño y especialidad), responsable legal interno de una empresa o directivo de una empresa de legal tech?
2. ¿Cuáles son las tareas que más tiempo te consumen y que sientes que podrían optimizarse?
3. ¿Qué herramientas de legal tech ya usas o has evaluado?
4. ¿Cuáles son los frenos que has encontrado para adoptar tecnología en tu práctica (coste, curva de aprendizaje, reticencia del equipo, dudas sobre la calidad)?
5. ¿Qué área de práctica es tu foco: M&A y contratos, litigación, compliance, propiedad intelectual, laboral u otra?

Con esas respuestas, desarrolla el análisis y el plan de adopción de legal tech:

**1. El mapa de legal tech: qué resuelve cada categoría**
El legal tech no es un producto, es una categoría con decenas de subcategorías. Define el mapa: las herramientas de document automation (que generan contratos y documentos estándar sin esfuerzo), los sistemas de revisión y análisis de contratos con IA (que leen y comparan contratos en minutos), las plataformas de e-discovery (que procesan millones de documentos en litigación), los sistemas de gestión de asuntos y time tracking, las plataformas de firma electrónica, y los LLMs aplicados a la investigación jurídica. Para cada categoría, explica qué trabajo reemplaza y qué trabajo potencia.

**2. Revisión de contratos con IA: el caso más maduro**
La revisión de contratos con IA es hoy la aplicación de legal tech con más adopción y con más evidencia de impacto. Explica cómo funciona: el NLP que identifica cláusulas estándar y las variaciones respecto a la posición habitual de la firma, la comparación con playbooks propios del despacho, la identificación de riesgos y cláusulas ausentes, y la diferencia entre las herramientas que asisten al abogado (que sigue siendo responsable) y las que pretenden reemplazarle (con mucho más riesgo). Compara las soluciones líderes (Harvey, Kira, Luminance, ContractPodAi) con criterio práctico.

**3. Document automation: de la plantilla al generador inteligente**
Cuánto tiempo dedica un abogado a adaptar contratos estándar, cartas y escritos que son variaciones de documentos que ya existen. Define las categorías de document automation: las herramientas de template con lógica condicional simple (como HotDocs o Contract Express), los sistemas integrados en el DMS de la firma, y los generadores de documentos con LLMs que permiten generar un primer borrador a partir de una descripción en lenguaje natural. Para cada nivel de sofisticación, indica el caso de uso óptimo y los riesgos de calidad que hay que supervisar.

**4. IA generativa en la práctica jurídica: lo que funciona y lo que no**
Los LLMs (ChatGPT, Claude, Copilot) han llegado a los despachos antes que las herramientas especializadas de legal tech. Define con honestidad qué tareas jurídicas mejoran con LLMs de uso general: la redacción de borradores que el abogado revisa y refina, la investigación preliminar sobre marcos jurídicos generales, el resumen de documentos extensos, la generación de listas de comprobación para due diligence. Y las tareas donde los LLMs generales son peligrosos: la investigación de jurisprudencia (alucina casos), la interpretación de normas locales recientes, y cualquier uso sin revisión humana experta.

**5. El impacto en el modelo de negocio del despacho**
La tecnología que hace el trabajo más rápido en un modelo de honorarios por hora es una trampa: reduces ingresos sin reducir costes. Define cómo adaptar el modelo de negocio: la transición de honorarios por hora a honorarios fijos que captura el valor de la eficiencia, el desplazamiento del trabajo hacia tareas de mayor valor que la tecnología no puede hacer (estrategia, juicio, negociación, relación de cliente), y cómo comunicar al cliente que pagas por el resultado y la experiencia, no por las horas de un junior revisando contratos.

**6. Plan de adopción: de la evaluación al cambio cultural**
La mejor herramienta sin adopción no vale nada. Define el proceso de evaluación e implementación de legal tech: los criterios de selección (integración con el DMS actual, curva de aprendizaje, soporte, precio por usuario o por documento), el piloto con un caso de uso específico antes de la adopción general, la formación del equipo y la gestión de la resistencia al cambio ("la IA va a quitarnos el trabajo"), y cómo medir el ROI de la herramienta en términos de horas recuperadas y calidad del trabajo.

Termina con las tres herramientas de legal tech que introducirías primero en una práctica jurídica del área descrita por el usuario y el argumento que usarías para convencer al socio más escéptico del despacho.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Adopción estratégica de legal tech en despachos y departamentos jurídicos internos.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer success con IA y automatización',
                'description'      => 'Usa IA para escalar el equipo de CS: las herramientas de health scoring automatizado, los playbooks activados por señales y la frontera entre lo que se automatiza y lo que necesita toque humano.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de customer success con experiencia implementando tecnología y automatización en equipos de CS de empresas SaaS B2B. Has pasado por la transición de un equipo reactivo a un equipo proactivo gracias a los datos, y sabes exactamente qué se puede automatizar sin perder la relación con el cliente y qué no.

Quiero implementar IA y automatización en mi equipo de customer success. Para asesorarte bien, primero pregúntame:

1. ¿Cuántos clientes gestiona el equipo y cuántos CSMs tiene?
2. ¿Tienes un customer success platform (Gainsight, ChurnZero, Totango, ClientSuccess) o trabajas principalmente desde el CRM?
3. ¿Cuáles son tus tasas actuales de churn y NPS, y cuál es el mayor problema que quieres resolver: reducir el churn, escalar la cobertura de clientes sin crecer el equipo, o mejorar el upsell?
4. ¿Qué datos de uso del producto tienes disponibles y con qué frecuencia se actualizan?
5. ¿Cuál es el ticket medio anual de tus clientes y cómo segmentas la cartera (enterprise, mid-market, SMB)?

Con esas respuestas, diseña el plan de transformación tecnológica del equipo de CS:

**1. El health score automatizado: tu termómetro de riesgo en tiempo real**
El health score es la base de todo CS proactivo. Define cómo construir un health score que realmente prediga el churn: los indicadores de uso del producto que correlacionan con retención (frecuencia de login, activación de funcionalidades clave, breadth de usuarios activos), los indicadores relacionales (NPS, tickets de soporte abiertos, tiempo de respuesta del cliente a los touchpoints), y los indicadores de negocio del cliente (renovación pendiente, cambios en el equipo que usa el producto). Explica cómo ponderarlos y cómo calibrar el modelo con los datos de clientes que ya churnearon.

**2. Playbooks automatizados activados por señales**
El CS proactivo responde a señales antes de que el problema sea visible. Define los playbooks más importantes para automatizar: el playbook de riesgo de churn (activado cuando el health score cae por debajo de un umbral durante X días), el playbook de adopción temprana (para clientes que no han activado funcionalidades clave en los primeros 30 días), el playbook de oportunidad de upsell (cuando el uso alcanza un umbral que indica que el cliente está listo para el siguiente plan), y el playbook pre-renovación (los 90 días antes de la fecha de renovación). Para cada playbook, define los pasos automáticos y los pasos que requieren intervención del CSM.

**3. Automatización de la comunicación sin perder la calidez**
Los emails automáticos que parecen automáticos dañan la relación. Define la estrategia de comunicación automatizada que mantiene la personalización: la personalización con datos del producto del cliente (no el mismo email para todos), el timing basado en comportamiento en lugar de en calendario fijo, los emails escritos en primera persona del CSM aunque sean automáticos, y el sistema de supervisión para que el CSM pueda intervenir antes de que se envíe si el contexto lo requiere.

**4. IA para la gestión de la cartera: priorización inteligente del tiempo del CSM**
Un CSM con 100 cuentas no puede atenderlas todas con la misma intensidad. Define cómo la IA ayuda a priorizar: el ranking diario de clientes que requieren atención urgente basado en el health score y las señales recientes, la sugerencia del próximo mejor paso para cada cliente (llamada, email, compartir recurso de formación), el resumen automático del historial del cliente antes de una llamada, y el análisis de las conversaciones grabadas para identificar riesgos o menciones de competidores.

**5. La frontera entre lo que se automatiza y lo que no**
La automatización sin juicio destruye las relaciones con clientes de alto valor. Define el principio de segmentación: los clientes de muy alto valor (enterprise, cuentas estratégicas) que nunca deben recibir automatización sin aprobación explícita del CSM, los clientes de valor medio donde la automatización asiste pero el CSM supervisa y personaliza, y los clientes de bajo valor donde la automatización puede gestionar la relación con supervisión mínima. Define las señales que indican que un cliente automatizado necesita intervención humana inmediata.

**6. Métricas de éxito del CS automatizado**
Define cómo medir que la automatización está funcionando sin dañar la relación: la retención neta (NRR) como el indicador último, el churn de cuentas en riesgo detectadas por el sistema vs. las que no estaban en el radar, el time-to-value para nuevos clientes con el playbook de onboarding automatizado, el ratio de clientes por CSM antes y después de la automatización, y el CSAT o NPS de los clientes que pasan por flujos automatizados vs. los que tienen interacción puramente humana.

Termina con el roadmap de implementación de 6 meses: qué automatizar primero para conseguir el mayor impacto con el menor riesgo, y los hitos que indican que cada fase ha funcionado antes de pasar a la siguiente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Implementación de IA y automatización en equipos de customer success para escalar la cobertura sin aumentar plantilla.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'El freelance tech-savvy: automatización y agentes de IA',
                'description'      => 'Usa la tecnología emergente para diferenciarte como freelance: las herramientas de automatización, los agentes de IA y las capacidades que te permiten ofrecer más valor que cualquier empleado a tiempo completo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior que ha construido una práctica de alto valor gracias en parte al uso inteligente de la tecnología. No eres un desarrollador, eres un profesional de tu área que usa la tecnología como multiplicador de capacidad: puedes entregar más, en menos tiempo, con más calidad, y eso justifica tus tarifas y te hace prácticamente imposible de reemplazar por un empleado interno.

Quiero usar la tecnología emergente para ser más competitivo como freelance. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es tu especialidad como freelance y cuáles son los entregables típicos que produces para tus clientes?
2. ¿Qué tareas de tu trabajo actual son más repetitivas o consumen más tiempo sin añadir valor diferencial?
3. ¿Cuál es tu nivel de comodidad con la tecnología: usuario básico, usuario avanzado de herramientas no-code, o con conocimientos básicos de programación?
4. ¿Cuáles son tus tarifas actuales y cuál es la barrera que te impide subir precios o conseguir mejores clientes?
5. ¿Qué herramientas de IA ya usas y cuáles son los resultados que has obtenido?

Con esas respuestas, diseña el stack tecnológico y la estrategia de diferenciación:

**1. El stack de IA para tu especialidad: las herramientas que cambian el juego**
No existe un stack universal, existe el stack que amplifica tu especialidad concreta. Define las categorías de herramientas más relevantes para distintas especialidades freelance: para copywriters y consultores de marketing (Claude/GPT para borradores y análisis de mercado, Perplexity para research en tiempo real, Midjourney o DALL-E para conceptos visuales rápidos), para diseñadores (Figma AI, Adobe Firefly, herramientas de generación de variantes), para consultores de datos (Code Interpreter para análisis exploratorio rápido, herramientas de visualización con IA), para consultores de negocio (análisis de documentos, síntesis de investigación). Define las herramientas de tu especialidad y el caso de uso concreto de cada una.

**2. Automatización de los flujos de trabajo repetitivos**
La automatización no-code ha democratizado lo que antes requería un programador. Define los flujos que un freelance puede automatizar con herramientas como Zapier, Make (antes Integromat) o n8n: la captura y cualificación de leads entrantes (formulario de contacto → CRM → email de bienvenida personalizado), la gestión de proyectos (cuando apruebas una propuesta, se crea el proyecto en ClickUp o Notion, se envía el contrato en DocuSign y se programa el kickoff en el calendario), el seguimiento de facturas y recordatorios de pago, y el reporting automático de progreso a clientes. Para cada flujo, indica el tiempo que ahorra por semana y las herramientas necesarias.

**3. Los agentes de IA como asistentes de primer nivel**
Los agentes de IA son la evolución más transformadora para el freelance. Explica cómo usarlos: el agente que hace el research inicial de un nuevo cliente (empresa, sector, competidores, noticias recientes) antes de una llamada de ventas, el agente que resume y extrae los puntos clave de documentos largos que el cliente te envía, el agente que redacta la primera versión de entregables que tú revisas y elevas (informes, propuestas, análisis), y el agente que monitoriza las fuentes relevantes de tu sector y te hace un briefing semanal de las novedades. Para cada caso, sé honesto sobre la supervisión que requiere y los errores que comete.

**4. La propuesta de valor del freelance tech-savvy**
La tecnología no es solo una ventaja operativa, es un argumento de venta. Define cómo comunicar el valor al cliente: el turnaround más rápido que un equipo interno (puedes entregar en días lo que otros tardan semanas), la capacidad de abordar proyectos más amplios de lo que tu perfil inicial sugeriría (puedes hacer el análisis, la estrategia y el contenido), la actualización permanente con las últimas herramientas y técnicas (inviertes en formación tecnológica que el cliente no tiene que pagar), y cómo subir precios cuando tu productividad mejora sin reducir margen.

**5. El riesgo de la tecnología mal usada**
La IA amplifica tanto lo bueno como lo malo. Define los riesgos que hay que gestionar activamente: la calidad de los entregables con IA que no revisas con suficiente criterio (el cliente nota cuando el trabajo "suena a IA"), la dependencia de herramientas que pueden cambiar de precio o dejar de existir, la pérdida del criterio propio cuando delegas demasiado en la máquina, y los riesgos de confidencialidad cuando metes información del cliente en herramientas de IA de terceros. Para cada riesgo, define la práctica de mitigación concreta.

**6. Posicionamiento a largo plazo en la era de la IA**
Si la IA hace lo que tú haces, ¿qué te hace irremplazable? Define el posicionamiento a largo plazo: la especialización tan profunda que la IA no tiene contexto suficiente para replicarte, la relación de confianza con el cliente que ninguna herramienta puede automatizar, el juicio en situaciones ambiguas que requiere experiencia y conocimiento del contexto de negocio, y el rol de orquestador de IA que combina múltiples herramientas para producir resultados que ninguna herramienta sola podría generar.

Termina con el plan de los próximos 90 días para transformar el flujo de trabajo con tecnología: las tres primeras herramientas o automatizaciones a implementar, los recursos de aprendizaje recomendados y cómo medir el impacto en ingresos y tiempo libre al final del trimestre.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Uso estratégico de automatización y agentes de IA para que el freelance ofrezca más valor y justifique tarifas más altas.',
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
