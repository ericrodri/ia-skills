<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills366Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Análisis del comportamiento del consumidor para segmentación y campañas de alto impacto',
                'description'       => 'Aprende a aplicar los principios de la psicología del consumidor y la economía conductual para diseñar campañas de marketing que resuenen con los motivadores reales de compra de tu audiencia.',
                'prompt_content'    => <<<'EOT'
Actúa como un especialista en comportamiento del consumidor y estrategia de marketing con experiencia en investigación de audiencias y diseño de campañas basadas en evidencia psicológica. Tu objetivo es guiar a un profesional de marketing en la aplicación de los principios del comportamiento del consumidor para mejorar la efectividad de sus campañas.

**Por qué el comportamiento del consumidor importa para el marketing**

La mayoría de las decisiones de compra no son racionales: están influidas por sesgos cognitivos, contexto social, estados emocionales y heurísticas automáticas. El marketing que ignora estos mecanismos y apela solo a argumentos racionales (precio, funcionalidades, especificaciones) pierde la mayor parte de la palanca disponible para influir en las decisiones.

**Paso 1: Los sesgos cognitivos más relevantes para el marketing**

Comprende estos mecanismos y cómo aplicarlos éticamente:

- Anclaje: el primer número que ve el consumidor influye en su percepción de todos los demás. Muestra el precio original antes del precio con descuento. Presenta el plan premium antes del estándar.
- Prueba social: las personas imitan el comportamiento de otros, especialmente en situaciones de incertidumbre. Muestra el número de clientes, las reseñas, los logos de empresas que usan tu producto.
- Escasez y urgencia: los artículos percibidos como escasos o con disponibilidad limitada en el tiempo se valoran más. Úsalo con honestidad: si hay stock limitado o la oferta tiene fecha de fin real, comunícalo.
- Efecto de encuadre (framing): cómo se presenta la información cambia las decisiones. "Ahorra 100€" y "evita perder 100€" activan mecanismos psicológicos diferentes; la segunda formulación (pérdida evitada) es más poderosa.
- Sesgo de statu quo: las personas prefieren lo conocido al cambio. Cuando pides a un cliente que cambie de proveedor, debes superar este sesgo haciendo que el cambio parezca fácil y seguro.

**Paso 2: El mapa del viaje emocional del consumidor**

Las emociones preceden a las decisiones racionales. Mapea el estado emocional de tu cliente en cada fase del journey:

- Conciencia: ¿qué frustración, aspiración o evento desencadena la búsqueda de una solución como la tuya? Las campañas de conciencia más efectivas conectan con esa emoción desencadenante.
- Consideración: la emoción dominante es la duda y el riesgo percibido. Tu comunicación debe reducir el riesgo subjetivo (garantías, prueba social, demos gratuitas).
- Decisión: la emoción es la anticipación. Ayuda al cliente a visualizar cómo será su vida después de comprar. El uso del "tú" y las imágenes aspiracionales activan esta anticipación.
- Post-compra: la disonancia cognitiva (la duda de si tomé la decisión correcta) es común. Confirma que tomaron la decisión correcta inmediatamente después de la compra.

**Paso 3: Segmentación psicográfica vs. demográfica**

La segmentación demográfica (edad, género, ingresos) describe quién es el cliente pero no explica por qué compra. La segmentación psicográfica describe valores, motivaciones y estilo de vida:

- ¿Qué identidad quiere proyectar tu cliente al comprar tu producto?
- ¿Qué miedos y aspiraciones centrales guían sus decisiones?
- ¿Qué comunidades de referencia influyen en su comportamiento (familia, grupo profesional, comunidad online)?

Combina la segmentación demográfica para el targeting con la psicográfica para el mensaje. El mismo producto puede comunicarse de forma muy diferente a dos segmentos con demografía similar pero psicografía diferente.

**Paso 4: Investigación del consumidor con recursos limitados**

La investigación de comportamiento no requiere presupuestos enormes. Técnicas accesibles:

- Entrevistas en profundidad (cinco a diez): conversaciones de 45 minutos con clientes actuales y potenciales. Pregunta sobre el problema que resuelves, cómo lo describían antes de conocerte, qué los hizo cambiar de decisión.
- Análisis de reseñas y comentarios: las reseñas de clientes (tuyas y de la competencia) son una mina de oro de lenguaje real y motivaciones no filtradas.
- Tests A/B de mensajes: prueba diferentes encuadres del mismo beneficio y deja que los datos te digan cuál resuena más con cada segmento.
- Análisis del comportamiento en el sitio web: los mapas de calor, las grabaciones de sesión y el análisis del embudo de conversión muestran el comportamiento real, no el declarado.

**Paso 5: Aplicar los hallazgos a la creatividad de campaña**

Transforma los insights de comportamiento en copy y creatividad:

- Usa el lenguaje exacto de tus clientes en el copy. Las palabras que ellos usan para describir su problema tienen más poder que las que inventa el equipo de marketing.
- Diseña las creatividades para activar el estado emocional correcto en cada fase del funnel. Las campañas de retargeting (fase de consideración) deben eliminar dudas; las de prospecting (fase de conciencia) deben activar la emoción desencadenante.
- Prueba diferentes ganchos creativos basados en diferentes sesgos cognitivos y mide cuál genera mayor intención de compra.

**Formato de salida esperado**

Genera: (1) un mapa del viaje emocional del consumidor para tu producto o servicio con la emoción dominante y el mensaje clave en cada fase, (2) tres variantes de copy para la misma campaña basadas en sesgos cognitivos diferentes, y (3) un plan de investigación de comportamiento de tres semanas con técnicas y preguntas clave.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño de campañas basadas en comportamiento del consumidor',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Análisis del comportamiento de usuario en productos digitales: de los datos a las decisiones',
                'description'       => 'Aprende a interpretar los patrones de comportamiento de los usuarios dentro de tu producto para tomar decisiones de desarrollo más inteligentes, mejorar la adopción y reducir el abandono.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en product analytics y comportamiento de usuario con experiencia en empresas de software. Tu objetivo es guiar a un desarrollador o product engineer en la implementación de un sistema de análisis de comportamiento de usuario que genere insights accionables para la mejora continua del producto.

**Por qué el comportamiento de usuario es la fuente de verdad del desarrollo de producto**

Las especificaciones de producto y las opiniones del equipo son hipótesis. El comportamiento real de los usuarios en el producto es la evidencia. El desarrollo guiado por análisis de comportamiento produce productos que las personas realmente usan, no los que el equipo cree que deberían usar.

**Paso 1: Instrumentación del producto para el análisis de comportamiento**

El análisis de comportamiento comienza con la captura correcta de eventos:

- Define tu jerarquía de eventos: distingue entre eventos de engagement básico (page view, session start), eventos de acción significativa (feature used, file uploaded, invite sent) y eventos de conversión (account upgraded, subscription renewed).
- Implementa event tracking con propiedades ricas: no solo captures "feature X usada" sino también el contexto (plan del usuario, días desde el registro, dispositivo, procedencia de la sesión).
- Identifica los eventos que corresponden a tu definición de "usuario activado": el momento en que el usuario ha obtenido el valor central del producto por primera vez. Este evento es el más importante de instrumentar con precisión.
- Evita el tracking exhaustivo sin propósito: no captures todo lo que puedes técnicamente; captura lo que vas a analizar y actuar.

**Paso 2: Las métricas de comportamiento más reveladoras**

Más allá de los pageviews, estas métricas describen la salud del comportamiento de los usuarios:

- Tasa de activación: porcentaje de usuarios que llegan al evento de activación dentro de los primeros 7 días de registro. La mayor palanca de reducción de churn.
- Frecuencia y profundidad de uso: con qué frecuencia vuelven los usuarios y cuántas funcionalidades del producto utilizan. Usuarios de mayor profundidad tienen churn significativamente menor.
- Breadth de adopción de features: qué porcentaje de las funcionalidades principales usa cada usuario o cohorte. Las funciones no descubiertas son oportunidades de activación.
- Tiempo entre sesiones: el gap promedio entre sesiones. Un incremento sostenido señala desenganche antes de que el usuario cancele.
- Flujo de abandono: en qué punto del producto o flujo de tareas los usuarios abandonan. Estos puntos son los candidatos prioritarios de mejora.

**Paso 3: Análisis de cohortes para entender el comportamiento a lo largo del tiempo**

El análisis de cohortes agrupa a los usuarios por fecha de registro y te permite ver cómo evoluciona su comportamiento en el tiempo:

- Retención por cohorte: de los usuarios que se registraron en una semana concreta, qué porcentaje sigue activo al cabo de 1, 4, 8 y 12 semanas. Una curva de retención que se aplana es señal de product-market fit real.
- Comparación de cohortes: ¿las cohortes más recientes retienen mejor que las antiguas? Si es así, tus mejoras de producto o de onboarding están funcionando.
- Segmentación de cohortes: compara la retención de usuarios que activaron la feature X vs. los que no. Si los que activaron X retienen mucho mejor, es una feature de alto valor que debes empujar en el onboarding.

**Paso 4: Análisis cualitativo del comportamiento**

Los datos cuantitativos te dicen qué ocurre; los cualitativos te dicen por qué:

- Grabaciones de sesión (Hotjar, FullStory): observa sesiones reales de usuarios. Verás comportamientos que los datos no capturan: dónde dudan, dónde se frustran, qué elementos ignoran.
- Mapas de calor: dónde hacen click y cómo scrollean. Revela si los elementos importantes de la interfaz están en zonas de alta atención o en zonas ignoradas.
- Encuestas in-app en momentos clave: pregunta "¿qué te impide usar esta función con más frecuencia?" justo después de que un usuario interaccione con ella por primera vez pero no la complete.

**Paso 5: Del análisis a la acción**

Los insights de comportamiento son útiles solo si generan hipótesis y acciones:

- Construye un proceso de revisión regular de comportamiento: una reunión semanal o quincenal donde el equipo revisa las métricas de comportamiento clave y genera hipótesis de mejora.
- Prioriza los cambios de producto basados en el impacto esperado en el comportamiento: ¿qué cambio reduciría más el abandono en el onboarding? ¿Qué feature no descubierta tiene más potencial de activación?
- Valida con tests A/B: las hipótesis de comportamiento se prueban con experimentos controlados, no con intuición del equipo.

**Formato de salida esperado**

Genera: (1) un plan de instrumentación de eventos para los próximos 30 días con el listado de eventos prioritarios y sus propiedades, (2) un dashboard de métricas de comportamiento con las cinco métricas más relevantes para la fase actual del producto, y (3) un protocolo de análisis de cohortes mensual con las preguntas que debe responder.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Implementación de análisis de comportamiento de usuario en productos digitales',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Psicología cognitiva y sesgos de comportamiento aplicados al diseño de interfaces',
                'description'       => 'Aprende a aplicar los principios de la psicología cognitiva y la economía conductual al diseño de interfaces para crear experiencias que se alineen con cómo los usuarios realmente piensan, deciden y actúan.',
                'prompt_content'    => <<<'EOT'
Actúa como un diseñador de UX con especialización en psicología cognitiva aplicada al diseño de interfaces. Tu objetivo es guiar a un diseñador en la aplicación práctica de los principios del comportamiento humano para crear interfaces que reduzcan la fricción, guíen la atención y faciliten la toma de decisiones correctas.

**Por qué la psicología cognitiva es la base del diseño de UX**

El cerebro humano no procesa las interfaces de forma neutral y racional. Opera con recursos cognitivos limitados, usa heurísticas automáticas y es profundamente influido por el contexto. Diseñar sin entender estos mecanismos es diseñar contra la naturaleza humana. Diseñar con ellos es crear interfaces que se sienten intuitivas y sin esfuerzo.

**Carga cognitiva: el principio más fundamental**

La carga cognitiva es el esfuerzo mental que requiere interactuar con una interfaz. Tu objetivo como diseñador es minimizarla:

- Carga cognitiva intrínseca (inherente a la complejidad del contenido): no puedes eliminarla, pero puedes descomponerla en pasos más pequeños (progressive disclosure).
- Carga cognitiva extrínseca (generada por el diseño): esta sí puedes eliminarla. Fuentes de carga extrínseca innecesaria: demasiadas opciones simultáneas, etiquetas poco claras, jerarquía visual confusa, inconsistencias en el comportamiento de los elementos.
- Carga cognitiva relevante (que genera aprendizaje): a veces un poco de fricción deliberada mejora la comprensión y la retención. Los formularios en varios pasos pueden producir mejor comprensión que un formulario largo en una sola página.

**La ley de Hick y el diseño de elecciones**

La ley de Hick establece que el tiempo de toma de decisión crece logarítmicamente con el número de opciones. Implicaciones prácticas:

- Limita las opciones en cada punto de decisión. Si tienes muchas opciones, usa categorías o filtros para que el usuario reduzca el conjunto antes de elegir.
- En onboarding, no muestres todas las funcionalidades desde el primer día. Introduce capacidades de forma progresiva.
- En páginas de precios, tres opciones con una recomendada clara produce mayor tasa de conversión que cinco opciones equivalentes.

**Atención y jerarquía visual**

El sistema visual humano procesa la escena completa antes de que la conciencia pueda dirigir la atención. El diseño controla qué procesa primero el usuario:

- Preattentive attributes: color, tamaño, forma, movimiento y posición son captados antes de la atención consciente. Úsalos para guiar la atención a los elementos más importantes.
- Ley de Fitts: el tiempo para alcanzar un objetivo aumenta con la distancia y disminuye con el tamaño. Los botones de acción principal deben ser grandes y estar cerca del punto natural de foco.
- Efecto de superioridad de la imagen: las imágenes se recuerdan mejor que las palabras. Pero las imágenes irrelevantes son ruido visual que incrementa la carga cognitiva.

**El efecto de encuadre (framing) en el diseño**

Cómo presentas la información cambia las decisiones más que la información misma:

- Encuadre de pérdida vs. ganancia: "perderás el 20% de descuento si no activas tu cuenta hoy" es más motivador que "activa tu cuenta y obtén un 20% de descuento".
- Opciones por defecto: el estado por defecto de cualquier configuración captura la mayoría de usuarios. Elige los defaults con cuidado: deben ser la opción óptima para el usuario típico, no la que maximiza los ingresos de la empresa.
- Anclaje en precios: el primer precio que ve el usuario sirve de referencia para evaluar el resto. Presenta el plan premium primero.

**Diseño ético: el límite entre influencia y manipulación**

Los mismos principios que hacen una interfaz más usable pueden usarse para manipular a los usuarios en contra de sus intereses (dark patterns). La diferencia entre diseño ético e influencia manipuladora:

- El diseño ético usa los sesgos cognitivos para facilitar decisiones que son buenas para el usuario. La manipulación los usa para generar decisiones que son buenas para la empresa pero malas para el usuario.
- Ejemplos de dark patterns a evitar: suscripciones ocultas, botones de cancelación difíciles de encontrar, confirmshaming ("No, prefiero pagar más"), interfaces confusas que inducen errores en formularios.

**Formato de salida esperado**

Genera: (1) una auditoría de carga cognitiva de una pantalla o flujo clave de tu producto con los principales problemas identificados y propuestas de mejora, (2) tres principios de psicología cognitiva aplicados a tu diseño actual con ejemplos visuales o verbales concretos, y (3) una checklist de revisión de diseño desde la perspectiva del comportamiento cognitivo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Aplicación de psicología cognitiva al diseño de interfaces',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sesgos cognitivos y psicología de la decisión de compra en ventas B2B',
                'description'       => 'Comprende cómo los sesgos cognitivos influyen en las decisiones de compra de tus clientes B2B y aprende a adaptar tu proceso de venta para trabajar con la psicología humana, no contra ella.',
                'prompt_content'    => <<<'EOT'
Actúa como un especialista en psicología de ventas y comportamiento del comprador B2B con experiencia en equipos de alto rendimiento. Tu objetivo es guiar a un profesional de ventas en la comprensión de los mecanismos psicológicos que determinan las decisiones de compra en entornos empresariales y en la adaptación del proceso de venta a esa realidad.

**Las decisiones de compra B2B no son racionales: el mito del comprador racional**

Tendemos a imaginar al comprador B2B como una entidad que evalúa racionalmente las opciones, compara funcionalidades, calcula el ROI y elige la opción objetivamente mejor. La investigación sobre comportamiento del comprador demuestra consistentemente que esto es falso. Las decisiones B2B están igualmente influidas por sesgos cognitivos, dinámicas de grupo, aversión al riesgo y factores emocionales que las decisiones de consumo.

**Paso 1: Los sesgos más determinantes en compras B2B**

Conoce estos mecanismos y cómo adaptar tu proceso de venta:

- Aversión a la pérdida: los compradores sienten las pérdidas aproximadamente el doble de intensas que las ganancias equivalentes. Enmarcar el coste de no comprar ("el coste de mantener el statu quo") es más poderoso que enmarcar el beneficio de comprar.
- Sesgo del statu quo: el proveedor actual tiene una ventaja enorme sobre los competidores simplemente por ser el actual. Para superar este sesgo, haz que el cambio parezca seguro, simple y de bajo riesgo.
- Efecto de dotación: las personas valoran más lo que ya poseen. En demos y pruebas gratuitas, involucra al comprador para que invierta tiempo y personalización. Cuanto más personalice el producto a sus necesidades, más lo sentirá como suyo.
- Prueba social en B2B: los compradores B2B confían más en pares de su industria y tamaño de empresa que en grandes logos genéricos. Consigue referencias de clientes que sean similares al prospecto, no solo los más grandes o famosos.
- Sesgo de autoridad: la credibilidad del vendedor y de la empresa importa. Publicaciones en medios del sector, premios de analistas, y certificaciones son señales de autoridad que reducen el riesgo percibido.

**Paso 2: El comité de compra y la dinámica de grupo**

En B2B, la decisión raramente la toma una sola persona. El comité de compra típico incluye al usuario final, al responsable económico, al departamento técnico (IT, legal, seguridad) y a la dirección:

- Mapea el comité de compra desde el inicio: ¿quién tiene poder de veto? ¿quién es el campeón interno? ¿quién se beneficia más de la solución?
- Cada miembro del comité tiene miedos y motivaciones diferentes. El responsable económico quiere ROI y bajo riesgo financiero. El usuario final quiere facilidad de uso y soporte. IT quiere seguridad y compatibilidad. Adapta tu comunicación a cada perfil.
- Los sesgos de grupo amplifican la aversión al riesgo: en una decisión grupal, nadie quiere ser el que recomienda algo que luego falla. Reduce el riesgo percibido de recomendar tu solución.

**Paso 3: El ciclo emocional de la compra B2B**

Incluso en ventas racionales, el arco emocional del comprador sigue un patrón:

- Reconocimiento del problema (frustración, urgencia): tu comunicación debe resonar con la emoción de quien siente el dolor del problema que resuelves.
- Exploración de soluciones (esperanza, ansiedad): el comprador quiere creer que existe una solución, pero teme equivocarse. Reduce la ansiedad con garantías, pruebas sociales y reducción de compromisos iniciales.
- Evaluación y negociación (desconfianza, cautela): el comprador busca confirmar que no está siendo engañado. La transparencia en precios y condiciones genera más confianza que las tácticas de presión.
- Decisión (alivio, anticipación): el momento de la decisión es emocionalmente intenso. Facilita el cierre con claridad sobre los próximos pasos y eliminando fricción del proceso de firma.

**Paso 4: Técnicas de venta alineadas con la psicología del comprador**

Aplica estos principios en tu proceso:

- Discovery basado en problemas, no en funcionalidades: pregunta por las consecuencias del problema, no por los requisitos de la solución. "¿Cuánto cuesta este problema a la empresa actualmente?" activa la aversión a la pérdida.
- Propuesta personalizada vs. estándar: una propuesta que usa el nombre de la empresa del cliente, datos específicos de su industria y ejemplos de clientes similares activa el efecto de dotación y la prueba social a la vez.
- Prueba de concepto o piloto de bajo riesgo: en lugar de pedir el compromiso completo, ofrece un primer paso pequeño. Una vez el cliente invierte tiempo en el piloto, el efecto de dotación trabaja a tu favor.
- Urgencia real vs. artificial: la urgencia artificial ("solo disponible hasta el viernes") destroza la confianza cuando no es verdadera. La urgencia real (vencimiento de presupuesto del cliente, evento de negocio que crea el timing) es legítima y efectiva.

**Paso 5: Gestión de las objeciones como señales de comportamiento**

Las objeciones no son rechazos: son señales del estado psicológico del comprador. Aprende a leer qué sesgo hay detrás de cada objeción:

- "Necesitamos pensarlo" = aversión al riesgo. Ofrece reducir el compromiso inicial o añadir una garantía.
- "Es caro" = no ha calculado el valor, o no ha conectado emocionalmente con el coste del problema. Vuelve al impacto del problema.
- "Necesitamos consultarlo internamente" = el campeón no tiene confianza para vender internamente. Ayúdale con materiales y argumentos para la presentación interna.

**Formato de salida esperado**

Genera: (1) un mapa de los sesgos cognitivos relevantes en tu proceso de venta actual con propuestas de adaptación para cada fase, (2) una guía de perfiles del comité de compra con sus motivaciones y miedos clave, y (3) un guión de discovery de 20 preguntas diseñado para activar la aversión a la pérdida y cuantificar el coste del problema.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Aplicación de psicología del comprador al proceso de ventas B2B',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Jobs to be Done y comportamiento del usuario: framework para decisiones de producto',
                'description'       => 'Aprende a aplicar el framework Jobs to be Done y los principios del comportamiento del usuario para descubrir qué motiva realmente a los clientes a usar tu producto y tomar decisiones de roadmap más acertadas.',
                'prompt_content'    => <<<'EOT'
Actúa como un product manager con especialización en investigación de usuarios y frameworks de comportamiento del consumidor. Tu objetivo es guiar a un profesional de producto en la aplicación del framework Jobs to be Done (JTBD) y los principios del comportamiento del usuario para descubrir las motivaciones reales de los clientes y tomar mejores decisiones de producto.

**Más allá de las funcionalidades: entender por qué los usuarios "contratan" tu producto**

El framework Jobs to be Done, desarrollado por Clayton Christensen, propone que los clientes no compran productos sino que los "contratan" para realizar un trabajo concreto en un momento de su vida. Entender ese trabajo —no las características que tiene el producto— es la clave para crear productos que los usuarios adoptan y retienen.

**El concepto de "trabajo" en JTBD**

Un "trabajo" tiene tres dimensiones:

- Funcional: la tarea práctica que el usuario necesita completar ("necesito organizar las tareas de mi equipo").
- Emocional: cómo quiere sentirse el usuario al completarla ("quiero sentirme en control y no olvidar nada importante").
- Social: cómo quiere ser percibido por otros ("quiero que mi equipo me vea como un líder organizado").

Las mejores decisiones de producto satisfacen las tres dimensiones. La mayoría solo resuelven la funcional y se preguntan por qué el usuario no adopta el producto.

**Paso 1: Investigación de JTBD con entrevistas de switching**

La investigación de JTBD más efectiva se hace entrevistando a usuarios en el momento del cambio: cuando decidieron contratar tu producto o cuando lo abandonaron:

- Pregunta sobre el momento concreto de la decisión: "¿Qué ocurrió el día que decidiste buscar una solución como esta?"
- Investiga el estado anterior: "¿Qué estabas usando antes? ¿Qué te funcionaba y qué no?"
- Explora las fuerzas del cambio: ¿qué empujó al usuario a actuar (pain del statu quo)? ¿Qué lo frenaba (inercia, ansiedad por el cambio)?
- Descubre el trabajo contratado: "¿Cuándo sientes que esta herramienta ha hecho bien su trabajo?"

**Paso 2: Las cuatro fuerzas del cambio de comportamiento**

El modelo de las cuatro fuerzas de JTBD explica por qué los usuarios cambian de solución:

- Fuerza de empuje (push): el malestar con la situación actual que empuja al usuario a buscar una alternativa.
- Fuerza de atracción (pull): las promesas de la nueva solución que atraen hacia el cambio.
- Ansiedad por el cambio: la preocupación por si la nueva solución funcionará, si el proceso de cambio será costoso, si perderá datos o hábitos.
- Inercia del statu quo: el apego a lo conocido, los hábitos arraigados, el coste percibido de aprender algo nuevo.

Las funcionalidades de tu producto deben maximizar el push y el pull, y minimizar la ansiedad y la inercia. El onboarding, por ejemplo, es principalmente un mecanismo de reducción de ansiedad e inercia.

**Paso 3: Segmentación por jobs, no por demografía**

En lugar de segmentar por características del usuario (industria, tamaño de empresa, cargo), segmenta por el job que están intentando hacer. Usuarios con demografías muy diferentes pueden tener el mismo job y responder igual a las mismas soluciones. Y usuarios con demografías similares pueden tener jobs completamente diferentes y necesitar comunicaciones y funcionalidades distintas.

**Paso 4: Del JTBD al roadmap**

Una vez identificados los jobs más frecuentes y valiosos de tu base de usuarios, prioriza el roadmap en función de:

- ¿Qué jobs importantes no están bien resueltos por tu producto actualmente?
- ¿Qué parte del job es donde tu producto pierde a los usuarios (el mayor cuello de botella en la cadena de valor del job)?
- ¿Qué nuevo job podrías resolver que te permita llegar a nuevos segmentos de usuarios con el mínimo esfuerzo de desarrollo?

**Paso 5: Métricas de JTBD**

Define métricas que midan el progreso en resolver el job, no solo el uso de funcionalidades:

- Outcome metrics: qué resultado en la vida del usuario indica que el job fue completado satisfactoriamente. Para un producto de gestión de proyectos: proyectos entregados a tiempo, reuniones de seguimiento reducidas.
- Completion rate del job: qué porcentaje de los usuarios que intentan completar el job con tu producto lo consiguen.
- Satisfaction with job resolution: una escala de satisfacción específica para el job realizado, no una NPS genérica.

**Formato de salida esperado**

Genera: (1) una guía de entrevista de switching de 15 preguntas para investigar el JTBD de tus usuarios actuales, (2) un mapa de los tres jobs principales de tu producto con sus dimensiones funcional, emocional y social, y (3) una matriz de priorización del roadmap basada en el impacto en cada job identificado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Investigación de motivaciones de usuario para decisiones de roadmap',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Economía del comportamiento aplicada a la gestión del talento y la cultura organizativa',
                'description'       => 'Aprende a aplicar los principios de la economía conductual para diseñar sistemas de incentivos, procesos de feedback y entornos de trabajo que potencien los comportamientos deseados de forma sostenible.',
                'prompt_content'    => <<<'EOT'
Actúa como un especialista en economía del comportamiento aplicada a organizaciones con experiencia en diseño de sistemas de gestión del talento. Tu objetivo es guiar a un profesional de recursos humanos en la aplicación de los principios conductuales para diseñar programas de gestión del talento más efectivos.

**Por qué los sistemas de gestión del talento fallan: el problema del homo economicus**

La mayoría de los sistemas de incentivos, evaluaciones de desempeño y programas de reconocimiento están diseñados asumiendo que las personas son racionales, calculadoras y responden de forma predecible a los incentivos económicos. La economía del comportamiento demuestra que los empleados son humanos: responden a emociones, contexto social, sesgos cognitivos y normas de grupo tanto como a los incentivos económicos.

**Paso 1: Diseño de incentivos basado en el comportamiento**

Los incentivos monetarios son necesarios pero insuficientes. Para diseñar incentivos efectivos:

- El efecto de motivación intrínseca (overjustification effect): los incentivos externos excesivos pueden destruir la motivación intrínseca. Si una persona ama su trabajo, añadir un incentivo monetario por hacer ese trabajo puede reducir su disfrute y calidad. Diseña incentivos que complementen, no que sustituyan, la motivación intrínseca.
- Incentivos inmediatos vs. diferidos: los incentivos próximos en el tiempo son más motivadores que los diferidos, aunque estos sean mayores en valor. Un reconocimiento inmediato en el momento del logro tiene más impacto conductual que un bonus anual.
- Incentivos de grupo vs. individuales: en trabajos de alta interdependencia, los incentivos de grupo producen mejores resultados que los individuales porque activan las normas sociales y la reciprocidad entre compañeros.
- El efecto de referencia: los empleados evalúan su compensación en comparación con sus compañeros o con el mercado, no en términos absolutos. La percepción de equidad importa tanto como el valor absoluto.

**Paso 2: Arquitectura de opciones (nudging) en RRHH**

El nudging consiste en diseñar el entorno de elección de forma que las opciones por defecto y la presentación de alternativas guíen hacia los comportamientos deseados sin obligar:

- Ahorro voluntario: las tasas de participación en planes de pensión de empresa son significativamente mayores cuando la inscripción es la opción por defecto y el empleado debe hacer un esfuerzo activo para no participar, que cuando debe inscribirse activamente.
- Participación en programas de bienestar: ofrecer el primer paso muy accesible (un chequeo médico gratuito en el lugar de trabajo, una clase de yoga a la hora del almuerzo) incrementa la participación en programas de bienestar sin coerción.
- Uso de días de vacaciones: en empresas con política de vacaciones flexible, los empleados frecuentemente toman menos días de los que necesitan por la ausencia de una norma clara. Establecer una recomendación explícita ("recomendamos al menos 20 días al año") actúa como ancla de referencia.

**Paso 3: Feedback y evaluación de desempeño desde la perspectiva conductual**

Los sistemas de evaluación de desempeño están plagados de sesgos cognitivos que los hacen inefectivos:

- Sesgo de recencia: los managers recuerdan mejor los eventos recientes y los sobreponderan en la evaluación. Solución: evaluaciones continuas con registro estructurado de logros, no solo la revisión anual.
- Efecto halo: una impresión general positiva (o negativa) contamina la evaluación de competencias específicas. Solución: evalúa cada competencia por separado con evidencias concretas.
- Sesgo de similitud: los managers tienden a evaluar mejor a las personas que son similares a ellos. Solución: calibración cruzada entre managers con criterios objetivos y evidencias.
- Sesgo de confirmación: una vez formada la opinión sobre un empleado, el manager interpreta evidencias ambiguas de forma consistente con esa opinión. Solución: solicitar evidencias tanto positivas como negativas de forma deliberada.

**Paso 4: Normas sociales y cultura organizativa**

Las normas sociales son uno de los mecanismos más poderosos de influencia sobre el comportamiento, y los RRHH frecuentemente los infrautilizan:

- Comunicar lo que hacen los demás (norma descriptiva): "el 80% de los empleados de tu equipo ha completado la formación de seguridad" es más efectivo que un recordatorio abstracto de la obligación.
- Reconocimiento público de comportamientos deseados: activar la norma social de que ese comportamiento es valorado y practicado por los mejores.
- Liderazgo como referencia de norma: el comportamiento del equipo directivo define la norma de lo que es aceptable con más fuerza que cualquier política escrita.

**Paso 5: Medición del impacto conductual de las iniciativas de RRHH**

Aplica el rigor experimental a las iniciativas de RRHH:

- Define el comportamiento objetivo con precisión: no "mejorar el compromiso" sino "incrementar la participación en el programa de reconocimiento en un 30%".
- Diseña grupos de control cuando sea posible: implementa el cambio en un departamento o región primero y compara con el resto.
- Mide la persistencia del comportamiento: ¿el cambio se mantiene en el tiempo o se desvanece en semanas?

**Formato de salida esperado**

Genera: (1) un análisis de los sesgos cognitivos presentes en tu proceso actual de evaluación de desempeño con propuestas de corrección, (2) tres intervenciones de nudging para implementar en los próximos 90 días con el comportamiento objetivo y la métrica de seguimiento de cada una, y (3) una política de incentivos revisada para un programa de reconocimiento alineada con los principios conductuales.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseño de sistemas de gestión del talento basados en economía conductual',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Finanzas conductuales: sesgos cognitivos que distorsionan las decisiones financieras',
                'description'       => 'Comprende los principales sesgos cognitivos que afectan a las decisiones financieras y de inversión, y aprende a diseñar procesos y controles que mitiguen su impacto en la toma de decisiones corporativas.',
                'prompt_content'    => <<<'EOT'
Actúa como un especialista en finanzas conductuales con experiencia en asesoría a equipos directivos y comités de inversión. Tu objetivo es guiar a un profesional de finanzas en la identificación de los sesgos cognitivos más comunes que afectan a las decisiones financieras y en el diseño de procesos que los mitigen.

**Las finanzas conductuales: cuando los mercados y las personas no son racionales**

La teoría financiera clásica asume que los inversores y directivos financieros son racionales, tienen acceso a la información completa y toman decisiones que maximizan el valor esperado. Las finanzas conductuales, campo que le valió el Nobel a Daniel Kahneman y Richard Thaler, demuestra que esto es sistemáticamente falso. Los sesgos cognitivos no son errores ocasionales: son patrones predecibles de razonamiento incorrecto que afectan incluso a los profesionales más experimentados.

**Paso 1: Los sesgos más relevantes en decisiones financieras corporativas**

Comprende estos mecanismos y cómo se manifiestan en el contexto corporativo:

- Exceso de confianza (overconfidence): los directivos sistemáticamente sobreestiman la precisión de sus previsiones y la probabilidad de éxito de sus proyectos. Estudios muestran que los rangos de confianza del 90% de los ejecutivos contienen el valor real solo el 50% de las veces. Consecuencias: inversiones en proyectos cuyo VAN real es negativo, planes de negocio sistemáticamente optimistas, subestimación de los riesgos de ejecución.
- Anclaje: el primer número con el que interactuamos se convierte en referencia para todas las evaluaciones posteriores. En valoraciones de empresas, el precio al que se realizó la última ronda de financiación actúa como ancla que distorsiona la valoración actual. En negociaciones de adquisición, la primera oferta ancla toda la negociación.
- Aversión a las pérdidas: las pérdidas duelen aproximadamente el doble que lo que producen de placer las ganancias equivalentes. En finanzas corporativas: resistencia a reconocer pérdidas y desinvertir en proyectos fallidos (sunk cost fallacy), preferencia por alternativas de menor riesgo aunque el VAN esperado sea menor.
- Escalada de compromiso (escalation of commitment): cuanto más se ha invertido en un proyecto, más difícil es abandonarlo aunque los datos indiquen que debería. El coste ya incurrido (sunk cost) influye en la decisión futura, aunque racionalmente no debería.
- Sesgo de disponibilidad: los eventos recientes y fáciles de recordar se ponderan excesivamente. Después de una crisis financiera, los directivos sobrevaloran el riesgo de repetición; después de un periodo de bonanza, lo infravaloran.

**Paso 2: Sesgos en los procesos de valoración y due diligence**

En procesos de M&A, inversión y due diligence:

- Confirmation bias: el equipo que propone la adquisición busca información que confirme su tesis y descuenta la información que la contradice. El due diligence se convierte en un ejercicio de validación, no de evaluación objetiva.
- Groupthink en comités de inversión: la presión social y la deferencia a la autoridad pueden llevar al comité a aprobar proyectos que individualmente varios miembros rechazarían. Los miembros con menos estatus callan sus dudas.
- Ilusión de control: los directivos sobreestiman su capacidad de controlar el resultado de una inversión, especialmente en sectores que conocen bien. La familiaridad crea una falsa sensación de control sobre variables que son fundamentalmente inciertas.

**Paso 3: Diseño de procesos financieros resistentes a sesgos**

Los sesgos no se eliminan con conocimiento: se mitigan con procesos de decisión diseñados específicamente para contrarrestarlos:

- Pre-mortem antes de aprobar un proyecto: antes de tomar la decisión final, imagina que el proyecto ha fracasado y describe en detalle por qué. Esta técnica, desarrollada por Gary Klein, activa la generación de escenarios negativos que el exceso de confianza normalmente suprime.
- Abogado del diablo institucionalizado: asigna formalmente a alguien en el comité la responsabilidad de argumentar en contra de la propuesta, independientemente de su opinión real. Rompe el groupthink.
- Forecasting de referencia (reference class forecasting): en lugar de proyectar desde dentro del proyecto (con todos sus sesgos optimistas), busca proyectos similares ya completados y usa su distribución de resultados como distribución de probabilidad base.
- Separar quién propone de quién aprueba: el equipo que propone el proyecto tiene un sesgo obvio hacia la aprobación. Los procesos más robustos tienen revisores independientes que no han trabajado en la propuesta.
- Documentar las premisas: registra explícitamente las asunciones clave detrás de las proyecciones financieras. Esto facilita la revisión posterior y hace responsables a quienes tomaron la decisión.

**Paso 4: Aplicación a la gestión de carteras y riesgos**

En la gestión de inversiones y riesgos corporativos:

- Diversificación insuficiente por sesgo de familiaridad: las empresas tienden a sobreinvertir en activos o mercados que conocen bien. Diseña procesos de asignación de capital que fuercen la consideración explícita de alternativas menos familiares.
- Gestión del riesgo de cola: los modelos financieros estándar infravaloran los eventos de baja probabilidad y alto impacto (tail risks). Realiza ejercicios de escenario extremo (stress testing) con una frecuencia regular.

**Formato de salida esperado**

Genera: (1) un diagnóstico de los sesgos más probables en tu proceso de toma de decisiones financieras actual, (2) tres cambios de proceso concretos para mitigar el sesgo de exceso de confianza en las proyecciones financieras, y (3) un protocolo de pre-mortem para aplicar antes de la aprobación de inversiones relevantes.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Mitigación de sesgos cognitivos en decisiones financieras corporativas',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Protección del consumidor y análisis del comportamiento en el diseño de contratos y términos legales',
                'description'       => 'Comprende cómo los principios del comportamiento del consumidor y la regulación de protección al consumidor se aplican al diseño de contratos, términos y condiciones, y prácticas comerciales para asegurar el cumplimiento normativo y la lealtad del cliente.',
                'prompt_content'    => <<<'EOT'
Actúa como un abogado especializado en derecho del consumidor y compliance con experiencia en el diseño de contratos y prácticas comerciales en entornos digitales y de servicios. Tu objetivo es guiar a un jurista en la aplicación de los principios del comportamiento del consumidor al diseño de documentos legales y procesos comerciales, garantizando el cumplimiento normativo y reduciendo el riesgo de litigio.

**La regulación de protección al consumidor y la economía del comportamiento**

La regulación moderna de protección al consumidor en Europa (Directiva de Derechos del Consumidor, Directiva sobre Prácticas Comerciales Desleales, RGPD) está cada vez más influida por los hallazgos de la economía del comportamiento. Los reguladores reconocen que los consumidores no leen los contratos completos, son susceptibles a sesgos cognitivos y toman decisiones en condiciones de información imperfecta. Como resultado, la ley exige no solo que la información esté disponible, sino que sea comprensible, prominente y no engañosa.

**Paso 1: El estándar del consumidor medio y el consumidor vulnerable**

El marco legal europeo evalúa las prácticas comerciales desde la perspectiva del "consumidor medio": razonablemente informado, atento y perspicaz, pero también influenciable por sesgos cognitivos. En sectores con consumidores especialmente vulnerables (salud, servicios financieros, mayores, personas con discapacidad), el estándar de protección es más exigente.

Para cumplir con este estándar, evalúa tus documentos y prácticas comerciales preguntando:

- ¿Podría un consumidor razonablemente informado entender las condiciones esenciales del contrato sin asesoría jurídica?
- ¿Hay información que el consumidor medio pasaría por alto debido a su presentación visual o su posición en el documento?
- ¿Las opciones por defecto en el proceso de contratación benefician al proveedor a expensas del consumidor sin que este sea consciente?

**Paso 2: Dark patterns y prácticas comerciales desleales**

Los "dark patterns" (patrones oscuros) son técnicas de diseño que explotan los sesgos cognitivos del consumidor para manipular sus decisiones. Son ilegales bajo la normativa europea cuando constituyen prácticas comerciales desleales:

- Confirmshaming: botones de rechazo redactados de forma que el usuario se sienta avergonzado por no contratar ("No, prefiero pagar más" en lugar de "No, gracias").
- Suscripciones ocultas: checkboxes preseleccionados que inscriben al consumidor en servicios adicionales de pago sin que sea consciente.
- Dificultad artificial para darse de baja: hacer la cancelación de una suscripción significativamente más difícil que la suscripción (más pasos, solo por teléfono, en horario limitado).
- Urgencia fabricada: contadores de tiempo o indicadores de escasez que no reflejan una situación real.

La Directiva Omnibus (2021) refuerza explícitamente la prohibición de estas prácticas y establece sanciones de hasta el 4% de la facturación de la empresa en la UE.

**Paso 3: Diseño de contratos transparentes y comprensibles**

Las directrices de redacción de contratos de consumo basadas en la evidencia del comportamiento:

- Jerarquía de información: los términos más importantes (precio, duración, condiciones de cancelación, limitaciones de responsabilidad) deben estar visibles antes de la firma, no enterrados en el texto.
- Lenguaje llano (plain language): usa vocabulario del registro cotidiano, oraciones cortas y estructura lógica. Los contratos redactados en lenguaje técnico denso no solo son menos comprensibles: son más susceptibles de ser declarados abusivos.
- Resúmenes ejecutivos: considera incluir un cuadro resumen de una página con los puntos esenciales antes del contrato completo. Es buena práctica y reduce el riesgo de impugnación por falta de información.
- Consentimiento granular: en el ámbito del RGPD y en la contratación de servicios con múltiples componentes, el consentimiento debe ser específico para cada finalidad. Evita el consentimiento en bloque.

**Paso 4: Revisión de los flujos de contratación digital**

El proceso de contratación online es el área de mayor riesgo de incumplimiento de la normativa de protección al consumidor:

- Información precontractual obligatoria: el consumidor debe recibir toda la información requerida por la Directiva de Derechos del Consumidor antes de vincularse. Documenta cuándo y cómo se proporciona cada elemento.
- Botón de confirmación explícita: en la contratación online, la acción que crea el vínculo contractual debe ser inequívoca. El reglamento europeo exige que el botón o acción de confirmación lleve la leyenda "pedir con obligación de pago" o equivalente.
- Derecho de desistimiento: los consumidores tienen 14 días para desistir sin causa en contratos a distancia. El flujo de contratación debe informar de este derecho de forma clara y el proceso de ejercicio debe ser accesible.

**Paso 5: Auditoría de cumplimiento de protección al consumidor**

Diseña una auditoría periódica que incluya:

- Revisión de todos los documentos contractuales con el test del consumidor medio.
- Revisión del flujo de contratación completo buscando dark patterns.
- Revisión de las comunicaciones de marketing y publicidad para identificar afirmaciones potencialmente engañosas.
- Análisis de las reclamaciones de consumidores para identificar patrones de posible incumplimiento.

**Formato de salida esperado**

Genera: (1) una checklist de auditoría de protección al consumidor para contratos digitales, (2) una lista de los cinco dark patterns más frecuentes en el sector de tu empresa con ejemplos concretos y alternativas conformes, y (3) un protocolo de revisión de documentos contractuales con criterios de evaluación basados en el comportamiento del consumidor.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Compliance de protección al consumidor en contratos y procesos digitales',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Análisis del comportamiento del cliente para estrategias de retención y expansión',
                'description'       => 'Aprende a identificar los patrones de comportamiento que predicen el churn y la expansión, y a diseñar intervenciones proactivas basadas en evidencia conductual para maximizar la retención y el crecimiento de la cartera.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en customer success analytics con experiencia en el diseño de modelos predictivos de comportamiento del cliente en empresas SaaS. Tu objetivo es guiar a un profesional de customer success en la construcción de un sistema de análisis del comportamiento del cliente que anticipe el churn, identifique oportunidades de expansión y guíe las intervenciones del equipo.

**Del comportamiento observado al comportamiento predictivo**

El customer success reactivo responde cuando el cliente dice que tiene un problema. El customer success proactivo anticipa el problema antes de que el cliente lo sienta. La diferencia está en la capacidad de leer las señales de comportamiento que predicen el futuro estado de la relación.

**Paso 1: Las señales de comportamiento que predicen el churn**

Identifica las señales de alerta temprana específicas de tu producto y modelo de negocio. Las señales más frecuentes y robustas:

- Caída en la frecuencia de uso: el indicador más predictivo en la mayoría de los SaaS. Define umbrales críticos: si un usuario que normalmente se conecta cada día lleva cinco días sin actividad, es una señal de alerta de nivel 1.
- Reducción del breadth de uso: el cliente deja de usar funcionalidades que antes usaba regularmente. Esto sugiere que está encontrando valor en menos partes del producto.
- Aumento del volumen de tickets de soporte: especialmente tickets de frustración, errores recurrentes o preguntas sobre funcionalidades básicas que el cliente debería dominar después de X meses.
- Ausencia de expansión del equipo: en un producto con múltiples usuarios por cuenta, si el número de usuarios activos no crece (o cae), es señal de que el producto no está generando valor suficiente para justificar la expansión.
- Comportamiento en el proceso de renovación: solicitudes de descuento agresivas, retrasos en la respuesta al equipo de ventas, solicitudes de información sobre la competencia.

**Paso 2: Construir un health score multidimensional**

Un health score único agrega múltiples señales en un indicador accionable. Componentes típicos:

- Adopción (40% del peso): frecuencia de uso, número de usuarios activos, breadth de funcionalidades usadas, progreso en el onboarding.
- Engagement (25%): participación en comunicaciones (newsletters de producto, webinars, eventos de comunidad), uso del portal de clientes, valoraciones de soporte.
- Outcomes (20%): ¿el cliente está alcanzando sus objetivos declarados con el producto? Requiere que el CSM capture y actualice regularmente los objetivos de cada cuenta.
- Relación (15%): NPS del cliente, calidad y frecuencia de las interacciones con el CSM, seniority del contacto principal (un sponsor ejecutivo es mejor señal que solo contacto operativo).

Asigna pesos y umbrales basados en el análisis de qué combinación de factores mejor ha predicho el churn histórico en tu cartera.

**Paso 3: Segmentación conductual de la cartera**

Clasifica la cartera en segmentos de salud que guíen la priorización del CSM:

- Verde (health score 70-100): cliente saludable, foco en expansión y programa de referidos. Contacto proactivo mensual.
- Amarillo (40-69): señales de riesgo moderado, intervención proactiva para identificar y resolver fricciones. Contacto semanal hasta recuperar el verde.
- Rojo (0-39): riesgo alto de churn, plan de recuperación específico con escalada a liderazgo del CSM. Contacto diario o casi diario.

**Paso 4: Playbooks de intervención basados en el comportamiento**

Para cada patrón de comportamiento de riesgo, define un playbook específico:

- Playbook de baja actividad: (1) revisar el historial de uso para entender cuándo cayó y si coincide con algún evento, (2) contactar con un mensaje personalizado referenciando el uso anterior, (3) ofrecer una sesión de revisión de valor para identificar fricciones, (4) si la causa es de producto, escalar al equipo de producto con evidencia.
- Playbook de renovación en riesgo: (1) iniciar el proceso de renovación 90 días antes de la fecha, (2) preparar un business review con datos de impacto del producto, (3) involucrar al sponsor ejecutivo si el contacto principal expresa dudas, (4) diseñar una propuesta de valor adaptada al próximo periodo.

**Paso 5: Identificar y capitalizar las señales de expansión**

El análisis de comportamiento también revela oportunidades de expansión:

- Alta adopción de una funcionalidad premium disponible solo en planes superiores.
- Usuarios que alcanzan los límites del plan actual (almacenamiento, número de proyectos, número de usuarios).
- Expansión del uso a nuevos departamentos dentro de la misma empresa sin coordinación centralizada.
- Alta satisfacción y NPS positivo: los promotores son los mejores candidatos a upsell porque confían en el producto.

**Formato de salida esperado**

Genera: (1) un modelo de health score con los componentes, pesos y umbrales adaptado a tu tipo de producto, (2) un playbook de intervención para los tres patrones de riesgo más frecuentes en tu cartera, y (3) un protocolo de identificación y gestión de oportunidades de expansión basado en señales de comportamiento.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Análisis predictivo del comportamiento para retención y expansión de clientes',
                'vote_score'        => 49,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Psicología del cliente freelance: cómo toman decisiones de contratación',
                'description'       => 'Comprende los mecanismos psicológicos que llevan a un cliente a contratar a un freelancer, qué genera confianza y reduce el riesgo percibido, y cómo adaptar tu propuesta y comunicación para alinearte con esos procesos de decisión.',
                'prompt_content'    => <<<'EOT'
Actúa como un consultor de negocio especializado en el mercado de servicios freelance con conocimiento de psicología del consumidor. Tu objetivo es ayudar a un freelancer a entender cómo piensan y deciden sus clientes potenciales, para adaptar su propuesta de valor, su comunicación y su proceso de venta a esa realidad.

**El problema central: el cliente freelance tiene alta percepción de riesgo**

Contratar a un freelancer es una decisión de alta incertidumbre para el cliente. A diferencia de contratar a una empresa establecida con reputación consolidada, contratar a un freelancer implica apostar por una persona individual cuyo trabajo, fiabilidad y profesionalidad no están garantizados por una marca institucional. Esta percepción de riesgo es el mayor obstáculo en el proceso de decisión de compra del cliente freelance.

**Paso 1: El proceso de decisión del cliente freelance**

Entiende las fases por las que pasa un cliente antes de contratar:

- Reconocimiento del problema o necesidad: el cliente identifica que necesita algo que no puede hacer internamente. En este momento, aún no está pensando en freelancers específicos.
- Búsqueda de opciones: el cliente busca en su red de contactos, en plataformas o en resultados de búsqueda. En esta fase, la visibilidad y la primera impresión son determinantes. Tu portfolio, tu perfil en redes profesionales y tu reputación en comunidades relevantes son los puntos de contacto.
- Evaluación y comparación: el cliente compara entre varios candidatos. En esta fase, la calidad del portfolio, la claridad de tu propuesta de valor y la percepción de encaje cultural importan.
- Reducción del riesgo percibido: antes de decidir, el cliente busca señales que le confirmen que el riesgo es manejable. Reseñas, referencias, testimonios, garantías, propuestas detalladas.
- Decisión: en igualdad de condiciones técnicas, el cliente contrata a quien le genera más confianza, no necesariamente a quien tiene más talento.

**Paso 2: Los sesgos cognitivos que influyen en la decisión del cliente**

Prueba social: el cliente confía más en un freelancer que otros clientes han validado. Las reseñas, los testimonios y los casos de éxito son la señal de prueba social más poderosa. Un freelancer con tres testimonios detallados de clientes satisfechos tiene una ventaja enorme sobre uno con mejor portfolio pero sin validación social.

Autoridad y credencialidad: las señales de autoridad (publicaciones en medios del sector, participación en eventos, certificaciones reconocidas, comunidades activas) reducen el riesgo percibido. No necesitas ser famoso; necesitas ser percibido como experto en tu nicho específico.

Efecto de encuadre de la propuesta: cómo presentas el precio importa tanto como el precio en sí. Un presupuesto presentado como inversión con ROI esperado se percibe diferente al mismo número presentado como coste. Compara el precio con el coste de no resolver el problema o con el coste de contratar un recurso interno.

Familiaridad y liking: las personas contratan a quien conocen, les caen bien o con quien comparten algo en común. El marketing de contenidos, las conversaciones en redes y la participación en comunidades del sector de tu cliente generan esta familiaridad antes del primer contacto comercial.

**Paso 3: Cómo reducir el riesgo percibido del cliente**

Diseña cada elemento de tu proceso de ventas para reducir el riesgo percibido:

- Portfolio de casos de éxito (no de piezas de trabajo): en lugar de mostrar qué has hecho, muestra el problema que resolviste, cómo lo resolviste y qué resultado obtuvo el cliente. Un caso de éxito con contexto y resultados concretos genera más confianza que la pieza más bonita de tu portfolio.
- Propuesta detallada: una propuesta que demuestra que entiendes profundamente el problema del cliente reduce el riesgo de que el proyecto vaya mal porque hay desalineación de expectativas. El esfuerzo en la propuesta es una señal de profesionalidad.
- Primer proyecto de menor alcance: ofrece empezar con un proyecto más pequeño que permita al cliente evaluar tu trabajo antes de comprometerse con el proyecto completo. Reduce la barrera de entrada y activa el efecto de dotación (una vez ha trabajado contigo, le cuesta más irse).
- Garantías explícitas: una garantía de satisfacción o una política de revisiones clara elimina el miedo al "y si no me gusta y ya pagué".

**Paso 4: La comunicación que genera confianza**

La forma en que te comunicas antes, durante y después de un proyecto construye o destruye la confianza:

- Rapidez de respuesta: el tiempo de respuesta a un primer contacto es una señal de profesionalidad y de cómo vas a ser durante el proyecto. Los mejores freelancers responden en horas, no en días.
- Claridad sobre el proceso: explica desde el principio cómo trabajas, qué necesitas del cliente, cuáles son los hitos, cómo se gestiona el feedback. La incertidumbre sobre el proceso genera ansiedad en el cliente.
- Proactividad: actualiza al cliente antes de que te pregunte. Un mensaje semanal de estado, aunque sea breve, genera tranquilidad y diferencia a los freelancers profesionales de los amateurs.

**Paso 5: El seguimiento post-proyecto como palanca de recurrencia**

El cliente satisfecho es tu mayor activo comercial. Diseña el proceso post-proyecto para maximizar la recurrencia y las referencias:

- Solicita testimonio inmediatamente después del cierre, cuando la satisfacción está en su pico.
- Mantén el contacto pasado el proyecto: un mensaje cada dos o tres meses con algo de valor (un artículo relevante, una actualización de tu área de expertise) te mantiene en su radar sin ser intrusivo.
- Pide referencias activamente: un cliente satisfecho raramente te refiere espontáneamente, pero lo hace cuando se lo pides de forma concreta.

**Formato de salida esperado**

Genera: (1) un análisis del proceso de decisión de tu cliente tipo con los principales sesgos y miedos en cada fase, (2) tres cambios concretos en tu propuesta o proceso de ventas para reducir el riesgo percibido, y (3) una plantilla de caso de éxito que puedas adaptar para los próximos tres proyectos que completes.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Optimización del proceso de ventas freelance basado en psicología del cliente',
                'vote_score'        => 44,
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
