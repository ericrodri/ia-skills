<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills236Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Brand positioning: encontrar el espacio único de la marca',
                'description'       => 'Posiciona la marca en el espacio mental del consumidor que ningún competidor ocupa: el proceso de positioning, el perceptual map y la plataforma de marca que guía todas las decisiones de comunicación durante años.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en estrategia de marca y brand positioning con experiencia en mercados competitivos. Necesito que me ayudes a definir o revisar el posicionamiento de mi marca para encontrar el espacio único que ningún competidor ocupa hoy.

Mi contexto:
- Descripción de la marca/producto/servicio: [qué ofreces, a quién, qué problema resuelve]
- Competidores principales: [lista tres o cuatro y cómo se posicionan cada uno]
- Público objetivo: [perfil del cliente ideal, sus motivaciones y los criterios con que elige entre marcas]
- Estado actual del posicionamiento: [sin posicionamiento definido / posicionamiento difuso / posicionamiento que quieres revisar]
- Principal problema con la percepción actual de la marca: [nos perciben como uno más / nos confunden con la competencia / nuestro mensaje no conecta con nuestro cliente ideal]

Con ese contexto, dame:

1. EL PROCESO DE POSITIONING: PASO A PASO
Explícame el framework de posicionamiento que debo seguir antes de escribir ningún mensaje de marca:
- Cómo definir el marco de referencia (frame of reference): la categoría en la que el cliente te evalúa y cómo elegir ese marco para tu ventaja
- Cómo identificar los puntos de paridad (points of parity): las características que debes tener para ser considerado en la categoría, aunque no te diferencien
- Cómo encontrar los puntos de diferencia (points of difference): las razones por las que el cliente debería elegirte a ti y que los competidores no pueden copiar fácilmente
- La reason to believe: cómo demostrar que tu diferencial es real y no solo una promesa vacía

2. EL PERCEPTUAL MAP: VISUALIZAR EL ESPACIO COMPETITIVO
Dame el proceso para construir el mapa perceptual de mi categoría:
- Cómo elegir los dos ejes del mapa: los atributos que más importan a mi cliente objetivo para decidir entre marcas
- Cómo posicionar a los competidores y a mi propia marca en el mapa
- Cómo identificar el espacio libre: el segmento del mapa que nadie ocupa y que tiene valor para un grupo de clientes
- Cómo validar que el espacio libre es real y no está vacío porque nadie lo quiere

3. LA PLATAFORMA DE MARCA
Una vez definido el posicionamiento, ¿cómo lo convierto en una plataforma que guíe todas las decisiones de comunicación? Dame la estructura de la plataforma de marca:
- El propósito de marca (brand purpose): por qué existe la marca más allá de vender productos
- La promesa de marca: el beneficio central que el cliente puede esperar siempre
- La personalidad de marca: los cinco o seis rasgos de personalidad que definen el tono y el comportamiento de la marca
- Los valores de marca: los principios no negociables que guían las decisiones
- El tono de voz: cómo habla la marca y cómo no habla nunca

4. DE LA PLATAFORMA AL MENSAJE
¿Cómo convierto la plataforma de marca en mensajes concretos para cada canal y audiencia? Dame el proceso de traducción:
- El tagline o claim de marca: cómo escribir la frase que resume el posicionamiento en menos de ocho palabras
- El elevator pitch de la marca: la descripción de 30 segundos que cualquier empleado puede dar
- El mensaje principal por audiencia: cómo adaptar el posicionamiento central a los diferentes segmentos sin perder la coherencia
- Los mensajes de soporte: los dos o tres argumentos que refuerzan la promesa principal

5. VALIDACIÓN DEL POSICIONAMIENTO
¿Cómo saber si el posicionamiento que he definido es el correcto antes de invertir en comunicación? Dame los métodos de validación:
- Las técnicas cualitativas: el concept testing con el cliente objetivo, cómo estructurar las preguntas y qué señales indican que el posicionamiento conecta
- Las técnicas cuantitativas simplificadas: cómo medir el brand preference y el brand differentiation con encuestas básicas
- El test de resistencia: las preguntas que debes hacerte para evaluar si el posicionamiento es sostenible, creíble y difícil de copiar

6. ERRORES DE POSICIONAMIENTO MÁS FRECUENTES
Lista los ocho errores más comunes que cometen las marcas al posicionarse: el posicionamiento por atributos en lugar de por beneficios, la propuesta de valor que es válida para cualquier competidor, el posicionamiento que el cliente no entiende, el claim que no puede demostrarse, el posicionamiento demasiado amplio que no conecta con nadie en particular, la marca que cambia el posicionamiento cada dos años y el posicionamiento que existe en los documentos internos pero no en los puntos de contacto del cliente.

7. EL PLAN DE ACTIVACIÓN
Un posicionamiento que solo vive en un documento es inútil. Dame el plan de activación:
- Cómo comunicar el posicionamiento internamente para que todo el equipo lo entienda y lo viva
- Los primeros tres cambios que debo hacer en los puntos de contacto del cliente (web, redes sociales, materiales de venta) para reflejar el nuevo posicionamiento
- Cómo medir el avance del posicionamiento en la mente del cliente a lo largo del tiempo
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Definir el posicionamiento de marca que ocupa un espacio único en la mente del cliente y guía todas las decisiones de comunicación.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Employer brand técnica: posicionarse como empresa donde los developers quieren trabajar',
                'description'       => 'Construye la reputación que hace que los developers quieran trabajar contigo: las contribuciones open source, las charlas técnicas y la presencia en la comunidad que posiciona a la empresa como un lugar donde los developers crecen.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en employer branding técnico y en la construcción de reputación en comunidades de desarrolladores de software. Necesito que me ayudes a construir la estrategia de marca empleadora técnica que hace que los developers de talento quieran trabajar en mi empresa.

Mi contexto:
- Tipo de empresa: [startup / scale-up / empresa tecnológica / empresa con equipo tech interno]
- Stack tecnológico principal: [lenguajes, frameworks y herramientas que usáis]
- Tamaño del equipo de ingeniería: [número aproximado de developers]
- Estado actual de la employer brand técnica: [invisible en la comunidad / algo de presencia / marca técnica activa pero sin estrategia]
- Principal reto de atracción técnica: [los developers no nos conocen / nos conocen pero no nos eligen / tenemos problemas para atraer perfiles senior / competimos con empresas más conocidas]

Con ese contexto, dame:

1. EL MAPA DE LA REPUTACIÓN TÉCNICA
¿Dónde construyen su reputación las empresas que los developers quieren? Dame el mapa de los canales y formatos que importan:
- Las plataformas donde los developers investigan antes de aplicar a una oferta: GitHub, Stack Overflow, Hacker News, LinkedIn, Reddit, YouTube, podcasts técnicos
- El peso de cada canal según el seniority del developer objetivo: por qué la estrategia de atracción de junior no funciona para senior
- Los indicadores de reputación técnica que los developers usan para evaluar una empresa: el repositorio de GitHub, las charlas de los empleados, los artículos técnicos, la arquitectura del producto descrita en público

2. LA ESTRATEGIA DE OPEN SOURCE
¿Cómo puede mi empresa usar el open source como palanca de employer brand técnica? Dame el framework:
- El modelo de contribución: contribuir a proyectos existentes vs crear y mantener proyectos propios — cuándo tiene sentido cada uno
- Cómo elegir en qué proyectos open source contribuir para maximizar la visibilidad con el perfil de developer que quieres atraer
- El proceso de creación de un proyecto open source propio: qué problemas tienen sentido externalizar como proyecto público y cómo lanzarlo para que tenga tracción
- Las métricas de éxito de la estrategia open source como employer brand: stars, forks, contribuidores externos, menciones en la prensa técnica

3. EL ENGINEERING BLOG Y EL CONTENIDO TÉCNICO
¿Cómo construir el blog técnico y la estrategia de contenido que posiciona a mi empresa como un lugar donde los developers aprenden? Dame el diseño:
- Los temas que funcionan: la autopsia técnica de un problema difícil, la historia de una migración, las decisiones de arquitectura y por qué se tomaron, los experimentos que no funcionaron y lo que se aprendió
- El proceso de producción de contenido técnico: cómo convencer a los ingenieros de que escriban, cómo ayudarles a estructurar el artículo y cómo publicar con consistencia
- La distribución: cómo llevar el contenido técnico a Hacker News, Reddit, Dev.to, y las newsletters técnicas relevantes
- El contenido en video y podcast: cuándo tiene sentido y cómo empezar sin una producción profesional

4. LA PRESENCIA EN CONFERENCIAS Y COMUNIDADES
¿Cómo construir la presencia de mi empresa en el ecosistema técnico a través de charlas, meetups y eventos? Dame la estrategia:
- Cómo identificar los eventos que importan para el perfil de developer que quiero atraer
- El proceso de preparación de una propuesta de charla técnica que los comités acepten
- El developer relations (DevRel): cuándo tiene sentido tener alguien dedicado y cuándo los propios ingenieros pueden hacer esta función
- Cómo medir el ROI de la presencia en eventos en términos de employer brand y pipeline de talento

5. EL GLASSDOOR Y LA REPUTACIÓN ONLINE
¿Cómo gestionar la reputación online de mi empresa como empleadora en las plataformas que los developers consultan? Dame el proceso:
- Cómo auditar la presencia actual: qué dicen de mí en Glassdoor, LinkedIn, Twitter y foros técnicos
- Cómo responder a las críticas de ex-empleados: el tono, lo que hay que decir y lo que no hay que decir nunca
- Cómo conseguir que los empleados satisfechos dejen reseñas: el proceso ético de generación de reseñas
- Las señales de alerta en Glassdoor que los candidates detectan inmediatamente

6. EL PROCESO DE SELECCIÓN COMO TOUCHPOINT DE EMPLOYER BRAND
El proceso de selección es la mayor palanca de employer brand técnica y el que más daño hace cuando está mal diseñado. Dame el diseño del proceso de selección que construye marca:
- Los elementos del proceso de selección que los developers valoran: la calidad del challenge técnico, la transparencia sobre el stack, el acceso a los futuros compañeros antes de la oferta
- Lo que destruye la employer brand en el proceso de selección: el take-home de 8 horas, el whiteboard de algoritmos sin relación con el trabajo real, la falta de feedback tras la entrevista, el silencio de semanas entre etapas
- Cómo diseñar el challenge técnico que da información real sobre el candidato y que el developer quiere hacer aunque no consiga el trabajo

7. MÉTRICAS DE EMPLOYER BRAND TÉCNICA
¿Cómo medir si la estrategia de employer brand técnica está funcionando? Dame las métricas:
- Métricas de atracción: número de candidaturas espontáneas, porcentaje de candidatos que mencionan el blog o el open source, posición en los rankings de empresas tecnológicas donde trabajar
- Métricas de contenido: tráfico al engineering blog, engagement en GitHub, seguidores técnicos en redes
- Métricas de proceso: tasa de aceptación de ofertas, feedback de los candidatos que rechazan la oferta, Net Promoter Score del proceso de selección
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir la estrategia de employer brand técnica que hace que los developers de talento quieran trabajar en la empresa.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Brand identity: construir el sistema visual de una marca',
                'description'       => 'Diseña el sistema de identidad visual que define cómo se ve la marca: el logo, la paleta, la tipografía y los principios que guían todas las aplicaciones de la marca, desde el cartel de la oficina hasta el icono de la app.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en diseño de identidad visual y brand design con amplia experiencia en el desarrollo de sistemas de marca desde cero o en la evolución de marcas existentes. Necesito que me ayudes a diseñar o revisar el sistema de identidad visual de mi marca.

Mi contexto:
- Descripción de la marca: [qué hace, a quién sirve, qué valores quiere proyectar]
- Estado actual de la identidad: [sin identidad / identidad básica que necesita madurar / rediseño de identidad existente]
- Competidores principales y cómo se ven visualmente: [describe brevemente el panorama visual de la categoría]
- Aplicaciones principales: [web, app, redes sociales, packaging, señalética, presentaciones, etc.]
- Restricciones o referencias: [colores que deben evitarse, referentes de diseño que gustan o no gustan, decisiones ya tomadas]

Con ese contexto, dame:

1. EL BRIEF DE IDENTIDAD ANTES DE DISEÑAR
Antes de tomar ninguna decisión visual, necesito tener claro lo que la identidad debe comunicar. Dame el proceso para construir el brief de identidad:
- Las palabras clave de personalidad de marca que deben traducirse en decisiones visuales: cómo pasar de "somos innovadores y cercanos" a decisiones concretas de color, tipografía y forma
- El análisis de la competencia visual: cómo mapear el espacio visual de la categoría para encontrar el territorio visual que está libre y que encaja con mi posicionamiento
- Las audiencias y sus expectativas visuales: cómo los diferentes segmentos de mi público perciben los diferentes estilos visuales y qué comunica credibilidad en mi sector

2. EL LOGO: PRINCIPIOS Y PROCESO
Dame el framework para diseñar o evaluar el logo principal de la marca:
- Los tipos de logo y cuándo usar cada uno: wordmark, lettermark, símbolo, logo combinado, emblema — las ventajas y limitaciones de cada tipo según la estrategia de marca y los soportes de aplicación
- Los principios de un buen logo: escalabilidad (del favicon al cartel), legibilidad en blanco y negro, funcionalidad en fondo claro y oscuro, distinción del espacio competitivo
- El sistema de versiones del logo: el logo principal, la versión vertical, la versión horizontal, la versión para fondo oscuro, el favicon y el icono de app — qué versiones son necesarias y por qué
- El proceso de evaluación de propuestas de logo: las preguntas que debes hacerte antes de aprobar una propuesta de logo

3. LA PALETA DE COLOR
¿Cómo construir la paleta de color que sea funcional y diferenciadora? Dame el diseño:
- El color principal (brand color): cómo elegirlo basándome en la psicología del color, en el espacio competitivo y en los soportes de aplicación
- Los colores secundarios: cuántos necesito, cómo deben relacionarse con el color principal y cuándo usarlos
- Los colores funcionales: los colores de éxito, error, advertencia e información para interfaces digitales
- Los colores neutros: el sistema de grises o tonos neutros que dan soporte a toda la composición
- Las especificaciones técnicas: cómo definir cada color en todos los formatos que voy a necesitar (HEX, RGB, CMYK, Pantone) y por qué cada formato importa en su contexto

4. LA TIPOGRAFÍA
El sistema tipográfico es la segunda palanca visual más poderosa después del color. Dame el diseño del sistema tipográfico:
- Los criterios para elegir la tipografía de marca: la personalidad que proyecta, la legibilidad en digital y en impreso, la disponibilidad de pesos y variantes, el coste de licencia
- El sistema de dos o tres tipografías: la combinación de tipografía de display (para títulos grandes) y tipografía de texto (para lectura), y cuándo tiene sentido una tercera fuente de apoyo
- La jerarquía tipográfica: los estilos de texto que el sistema necesita (H1, H2, H3, body, caption, label) y cómo definirlos de forma que sean consistentes en todos los soportes
- Las alternativas gratuitas: cuándo tiene sentido usar Google Fonts u otras fuentes sin licencia y cómo elegir las mejores para mi tipo de marca

5. LOS ELEMENTOS DE APOYO
¿Qué elementos visuales complementan el logo, el color y la tipografía para hacer el sistema completo? Dame el diseño de:
- La iconografía: el estilo de iconos que encaja con la personalidad de la marca, las opciones de fuente de iconos vs iconos propios y las reglas de uso
- Los patrones y texturas: cuándo tienen sentido, cómo diseñarlos para que sean reconociblemente de la marca y cómo usarlos sin que saturen
- El estilo fotográfico y de ilustración: las reglas de selección de imágenes que garantizan coherencia visual aunque las fotos vengan de diferentes fuentes
- El espacio en blanco y los márgenes: las reglas de composición que hacen que todo lo que salga de la marca parezca parte del mismo sistema

6. EL BRAND GUIDELINES DOCUMENTO
Una identidad sin documentación es una identidad que nadie aplicará bien. Dame la estructura del documento de brand guidelines:
- Las secciones imprescindibles de un manual de marca eficaz
- Qué nivel de detalle incluir: cuándo más detalle ayuda y cuándo asfixia la creatividad de quienes aplican la marca
- El formato del documento: PDF estático vs página web vs sistema de diseño en Figma — cuándo usar cada uno
- Cómo hacer que el documento sea usado: los errores que hacen que el manual de marca no se consulte nunca

7. APLICACIONES PRIORITARIAS Y REVISIÓN
Dame el checklist de las aplicaciones de identidad que debo resolver primero:
- Las aplicaciones digitales prioritarias: el favicon, los templates de redes sociales, la firma de email, la plantilla de presentaciones
- Las aplicaciones impresas esenciales: la tarjeta de visita, el sobre y el papel de carta si aún tienen sentido para mi tipo de negocio
- El proceso de revisión de aplicaciones: cómo evaluar si una aplicación de la marca está bien hecha antes de aprobarla para su distribución
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el sistema de identidad visual completo de una marca, desde el logo hasta el manual de aplicación.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Vender la propuesta de valor diferencial: el pitch que diferencia',
                'description'       => 'Presenta la propuesta de valor de forma que el cliente entiende por qué tú y no la competencia: la articulación del diferencial, los proofpoints y el proceso de conectar el valor con las prioridades específicas de cada comprador.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en ventas B2B y comunicación de valor con amplia experiencia en entornos competitivos. Necesito que me ayudes a construir y presentar la propuesta de valor diferencial de mi producto o servicio de forma que el cliente entienda claramente por qué debería elegirme a mí frente a las alternativas.

Mi contexto:
- Descripción de lo que vendo: [producto, servicio o solución, con el problema que resuelve]
- Competidores principales: [lista los dos o tres más frecuentes en las decisiones de compra de tus clientes]
- Por qué crees que deberían elegirte: [tu diferencial percibido, aunque sea difuso]
- Tipo de comprador: [el perfil, el rol, las prioridades que suele tener]
- Mayor dificultad en la diferenciación: [el cliente dice que somos muy parecidos a la competencia / no sabemos articular el diferencial con claridad / el diferencial que tenemos no importa a los compradores]

Con ese contexto, dame:

1. EL DIAGNÓSTICO DE TU PROPUESTA DE VALOR ACTUAL
Antes de construir el pitch diferencial, ayúdame a entender qué falla en la propuesta de valor actual:
- Los tres tipos de propuesta de valor que no diferencian: la que habla de características en lugar de resultados, la que podría decirla cualquier competidor, y la que diferencia en algo que el cliente no valora
- Cómo evaluar si mi diferencial es real y relevante: las preguntas para testearlo internamente antes de presentarlo al cliente
- La diferencia entre el diferencial que la empresa cree tener y el diferencial que el cliente reconoce: por qué suelen ser distintos y cómo alinearlos

2. EL FRAMEWORK PARA ARTICULAR EL DIFERENCIAL
Dame el proceso para construir la propuesta de valor diferencial:
- Cómo identificar los jobs to be done del comprador: los resultados funcionales, emocionales y sociales que el comprador busca conseguir con tu solución
- Cómo mapear los pain points que tu solución resuelve mejor que nadie: la lista de dolores del cliente y cuáles resuelves tú de forma superior
- El gain que solo tú produces: los beneficios que el comprador no esperaba y que son difíciles de replicar
- La fórmula de la propuesta de valor: cómo combinar estos elementos en una frase que el comprador entiende y recuerda

3. LOS PROOFPOINTS
Una propuesta de valor sin evidencia es una promesa. Dame el sistema de proofpoints:
- Los tipos de evidencia que más persuaden a mi tipo de comprador: casos de éxito cuantificados, testimonios de pares, demostraciones en vivo, datos propios, tercera parte independiente
- Cómo construir el caso de éxito que demuestra el diferencial: la estructura (situación, problema, solución, resultado) y cómo cuantificar el resultado en términos del comprador
- Cómo usar la tercera parte: analistas, premios, certificaciones, press coverage — cuándo añaden credibilidad y cuándo no importan al comprador
- El manejo del escepticismo: qué hacer cuando el comprador no cree el proofpoint o lo considera un caso atípico

4. EL PITCH DIFERENCIAL ADAPTADO AL COMPRADOR
La propuesta de valor es la misma para todos pero el pitch debe variar según el interlocutor. Dame el proceso de personalización:
- Cómo investigar las prioridades específicas del comprador antes de la reunión: las fuentes de información y las preguntas de discovery que revelan lo que más le importa
- Cómo adaptar el pitch a los diferentes roles: el pitch para el CEO (ROI y riesgo), para el director técnico (integración y fiabilidad), para el usuario final (usabilidad y tiempo), para el director financiero (coste total de propiedad y payback)
- El mapeo de tu diferencial a sus prioridades: cómo conectar lo que te hace diferente con lo que ese comprador específico está intentando conseguir

5. GESTIONAR LA COMPARACIÓN CON LA COMPETENCIA
En algún momento el comprador compara. Dame el playbook para gestionar esa conversación:
- Cuándo y cómo tomar la iniciativa en la comparación: por qué es mejor ser tú quien estructura el análisis comparativo que dejar que lo haga el cliente solo
- La battle card: cómo construir la ficha de comparación interna que prepara al equipo de ventas para la conversación competitiva
- Cómo hablar de los competidores: el tono correcto (nunca atacar, siempre comparar en los criterios donde ganas)
- Qué hacer cuando el competidor tiene algo mejor: la honestidad estratégica como herramienta de confianza

6. LA DEMOSTRACIÓN DEL DIFERENCIAL
Demostrar es más poderoso que describir. Dame el diseño de la demo diferencial:
- Cómo estructurar la demo para que demuestre el diferencial y no todas las features
- El momento de la demo: cuándo en el proceso de ventas tiene más impacto una demo en vivo
- El POC (proof of concept): cuándo tiene sentido proponer un piloto o prueba para que el cliente viva el diferencial antes de comprometerse

7. OBJECIONES A LA PROPUESTA DE VALOR
Dame los scripts para las objeciones más frecuentes a la propuesta de valor diferencial:
- "Sois más caros que la competencia" — cómo responder sin bajar el precio
- "La competencia dice exactamente lo mismo que vosotros" — cómo demostrar que el diferencial es real
- "Tenemos una solución interna que hace lo mismo" — cómo evaluar y responder al build vs buy
- "Ya somos clientes de otro proveedor y el cambio es costoso" — cómo cuantificar el coste de no cambiar
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir y presentar la propuesta de valor diferencial que hace que el cliente entienda por qué elegirte frente a la competencia.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product positioning: encontrar el lugar del producto en la mente del usuario',
                'description'       => 'Posiciona el producto de forma que el usuario lo entiende y lo recuerda: el proceso de positioning del producto, el messaging que conecta con el job-to-be-done y la comunicación coherente en todos los touchpoints.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product marketing y product positioning con amplia experiencia en productos digitales y SaaS. Necesito que me ayudes a definir el posicionamiento de mi producto de forma que los usuarios potenciales lo entiendan inmediatamente, lo recuerden y lo elijan frente a las alternativas.

Mi contexto:
- Descripción del producto: [qué hace, qué problema resuelve y para quién]
- Segmentos de usuario objetivo: [los diferentes tipos de usuario que el producto sirve o podría servir]
- Competidores y alternativas: [directas, indirectas y el "no hacer nada" como alternativa]
- Estado del posicionamiento: [sin posicionamiento claro / posicionamiento difuso que no conecta / posicionamiento que no diferencia / nuevo producto que hay que posicionar desde cero]
- Principal problema: [nadie entiende qué hace el producto en la primera visita / nos comparan con competidores con los que no queremos que nos comparen / el mensaje no conecta con el job-to-be-done real del usuario]

Con ese contexto, dame:

1. EL FRAMEWORK DE POSITIONING DE APRIL DUNFORD
Explícame el proceso de positioning basado en el método de April Dunford (Obviously Awesome) aplicado a mi producto:
- Cómo identificar a los mejores clientes actuales como punto de partida del posicionamiento
- Cómo extraer las capacidades competitivas reales del producto: lo que el producto hace mejor que cualquier alternativa
- Cómo identificar el valor que esas capacidades producen en los mejores clientes
- Cómo caracterizar a los compradores que valoran ese diferencial de forma desproporcionada
- Cómo elegir el mercado de referencia: la categoría en la que posicionar el producto para que el contexto amplifique el valor

2. EL JOB-TO-BE-DONE Y EL MENSAJE QUE CONECTA
¿Cómo asegurarme de que el mensaje del producto habla del trabajo que el usuario quiere hacer y no de las features que el producto tiene? Dame el proceso:
- Cómo realizar las entrevistas de jobs-to-be-done: las preguntas específicas, el switch interview y qué escuchar
- Cómo traducir los jobs-to-be-done a mensajes: del "progreso que el usuario quiere" al copy de la homepage
- Cómo distinguir el job funcional, el job emocional y el job social en el contexto de mi producto
- La prueba del "so what": cómo evaluar si cada línea del mensaje del producto sobrevive la pregunta "¿y qué?"

3. LA JERARQUÍA DE MENSAJES DEL PRODUCTO
Dame la estructura de mensajes del producto que debe existir antes de escribir ningún copy:
- El tagline o headline principal: la frase de 10 palabras que resume el valor del producto
- El sub-headline: la frase que explica cómo el producto entrega ese valor
- Los tres mensajes de soporte: los beneficios que justifican la promesa principal
- Los mensajes por segmento: cómo adaptar el mensaje principal a los diferentes tipos de usuario
- Los mensajes para los diferentes momentos del funnel: discovery, evaluación, decisión

4. LA CATEGORÍA: CREAR VS ENTRAR
Una de las decisiones más importantes de posicionamiento es si entro en una categoría existente o creo una nueva. Dame el framework de decisión:
- Cuándo tiene sentido entrar en una categoría existente (aunque sea muy competida) vs crear una categoría propia
- Los riesgos de la creación de categoría: el coste de educar al mercado, el tiempo que lleva y los recursos que requiere
- Las ventajas de crear categoría cuando el momento es el correcto: ser el líder de la categoría que tú defines
- Ejemplos de productos que han ganado redefiniendo la categoría en lugar de compitiendo en la existente

5. LA COHERENCIA EN LOS TOUCHPOINTS
El mejor posicionamiento se destruye si el mensaje es diferente en cada punto de contacto. Dame el sistema de coherencia:
- La auditoría de mensajes: cómo revisar todos los touchpoints del producto (homepage, ads, emails, onboarding, sales deck, support) y evaluar si el mensaje es coherente
- Quién es el dueño del posicionamiento: el rol de product marketing y cómo coordina con ventas, marketing y producto
- El proceso de actualización: cómo cambiar el posicionamiento cuando el producto evoluciona sin crear incoherencia durante la transición

6. VALIDAR EL POSICIONAMIENTO CON USUARIOS REALES
¿Cómo saber si el posicionamiento que he definido conecta con los usuarios antes de lanzarlo? Dame los métodos de validación:
- El test de la homepage: cómo hacer una prueba de cinco segundos para saber si el mensaje comunica el valor en el tiempo de atención real del usuario
- Las entrevistas de posicionamiento: las preguntas para evaluar si el usuario entiende el diferencial del producto
- Los tests A/B de messaging: cómo diseñar el test que compara dos posicionamientos diferentes en tráfico real

7. REPOSITIONING: CUANDO EL POSICIONAMIENTO ACTUAL YA NO FUNCIONA
¿Cómo sé que necesito cambiar el posicionamiento y cómo lo hago sin destruir lo que ya tengo? Dame el framework:
- Las señales de que el posicionamiento actual está roto: la tasa de conversión de la homepage, el tiempo de sales cycle, el churn por "no es lo que esperaba", la dificultad para explicar el producto en una frase
- El proceso de reposicionamiento sin perder usuarios actuales: cómo gestionar la transición de mensaje sin confundir a la base actual
- Cuándo el reposicionamiento requiere cambios en el producto y cuándo es solo un cambio de comunicación
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Definir el posicionamiento del producto que conecta con el job-to-be-done del usuario y diferencia de las alternativas.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'EVP (Employee Value Proposition): construir la propuesta de valor del empleado',
                'description'       => 'Define lo que hace única a tu empresa como empleadora: el proceso de construcción del EVP, la validación con empleados actuales y candidatos y la activación del EVP en todos los canales de atracción de talento.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en employer branding y talento con experiencia en la construcción e implementación de Employee Value Propositions (EVP) en empresas de diferentes tamaños y sectores. Necesito que me ayudes a definir el EVP de mi empresa y a activarlo para atraer y retener el talento que necesito.

Mi contexto:
- Tipo de empresa: [startup / empresa en crecimiento / empresa consolidada / sector y tamaño aproximado]
- Perfiles de talento que más necesitas atraer: [las dos o tres posiciones o perfiles con mayor dificultad de captación]
- Mercado de talento donde compites: [local / nacional / internacional / remoto]
- Estado actual del employer brand: [invisible / conocida en el sector pero sin EVP formal / EVP existente que quieres revisar]
- Principal problema de atracción o retención: [no atraemos suficientes candidatos / los candidatos no nos eligen / retenemos mal al talento que captamos]

Con ese contexto, dame:

1. QUÉ ES EL EVP Y POR QUÉ IMPORTA
Explícame el concepto de Employee Value Proposition y su importancia estratégica:
- La diferencia entre el EVP (lo que la empresa promete al empleado) y el employer brand (la percepción que el mercado tiene de la empresa como empleadora): cuál va primero y por qué
- Por qué el EVP falso daña más que no tener EVP: la experiencia del candidato que llega esperando X y encuentra Y es la fuente de la peor reputación online
- Los componentes de un EVP robusto: el modelo de los pilares (compensación, beneficios, desarrollo, propósito, cultura) y por qué el orden de importancia varía según el perfil de talento
- Los beneficios cuantificables de tener un EVP bien activado: reducción del coste de adquisición de talento, mejora de la tasa de aceptación de ofertas, mejora de la retención en el primer año

2. EL PROCESO DE CONSTRUCCIÓN DEL EVP
¿Cómo se construye un EVP que sea auténtico y diferenciador? Dame el proceso paso a paso:
- La investigación interna: cómo hacer las encuestas y focus groups con empleados actuales para identificar qué valoran realmente de trabajar aquí (la diferencia entre lo que la empresa cree que ofrece y lo que los empleados realmente valoran)
- La investigación externa: cómo hacer entrevistas con candidatos que rechazaron la oferta, candidatos recientes incorporados y talento del mercado que no ha tenido contacto con la empresa
- El análisis competitivo: cómo mapear el EVP de los competidores de talento para identificar el espacio diferenciador
- La síntesis: cómo pasar de los datos de investigación a los pilares del EVP y a los mensajes que los expresan

3. LOS PILARES DEL EVP
Dame el diseño de los pilares del EVP para mi empresa:
- Cómo elegir los tres o cuatro pilares que son realmente diferenciales (no los que toda empresa dice tener)
- Cómo redactar cada pilar de forma que sea específico, creíble y verificable por el candidato durante el proceso de selección
- Las evidencias de cada pilar: los proofpoints que demuestran que el pilar no es solo un claim de marketing (datos, políticas, historias de empleados, reconocimientos externos)
- El pilar aspiracional vs el pilar actual: cómo gestionar la brecha entre lo que la empresa quiere ser como empleadora y lo que es hoy

4. VALIDACIÓN DEL EVP
Antes de activar el EVP, ¿cómo sé que es el correcto? Dame los métodos de validación:
- El test de autenticidad con empleados: ¿reconocen los empleados actuales la empresa que se describe en el EVP?
- El test de relevancia con candidatos: ¿importa el EVP a los perfiles que queremos atraer?
- El test de diferenciación: ¿el EVP podría decirlo cualquier competidor o es genuinamente propio?
- El test de sostenibilidad: ¿puede la empresa cumplir la promesa del EVP de forma consistente en el tiempo?

5. ACTIVACIÓN DEL EVP EN LOS CANALES DE ATRACCIÓN
Un EVP que no se activa no atrae a nadie. Dame el plan de activación:
- La web de empleo: cómo estructurar la página de carreras para que el EVP sea lo primero que ve el candidato
- LinkedIn y las redes sociales: cómo traducir el EVP en contenido orgánico que un candidato quiere ver y compartir
- Las ofertas de empleo: cómo redactar las ofertas de trabajo para que reflejen el EVP y no sean una lista de requisitos genérica
- Los anuncios de empleo: cómo usar el EVP en campañas de atracción de talento de pago
- El proceso de selección: cómo hacer que cada etapa del proceso demuestre que el EVP es real

6. EVP PARA DIFERENTES SEGMENTOS DE TALENTO
¿Debo tener un EVP diferente para perfiles diferentes? Dame el framework de segmentación:
- Cuándo tiene sentido adaptar el EVP por segmento (tech vs comercial vs operaciones) y cuándo el EVP debe ser único para toda la empresa
- Cómo adaptar el mensaje del EVP sin cambiar los pilares: el mismo fundamento, distinto énfasis según el perfil
- El EVP para el talento recién graduado vs el talento senior: qué valoran diferente y cómo ajustar el mensaje

7. MÉTRICAS DE ÉXITO DEL EVP
¿Cómo medir si el EVP está funcionando? Dame el framework de medición:
- Las métricas de atracción: candidatos por oferta, calidad del perfil de candidatos, porcentaje de candidaturas espontáneas
- Las métricas de selección: tasa de aceptación de ofertas, feedback de los candidatos que rechazan, score del proceso de selección
- Las métricas de retención: retención a 90 días y 12 meses, NPS del empleado a los 3 meses, puntuación en Glassdoor
- La cadencia de revisión del EVP: con qué frecuencia revisar si el EVP sigue siendo relevante y diferenciador
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Definir y activar el Employee Value Proposition para atraer y retener el talento que la empresa necesita.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Corporate communications y reputación financiera',
                'description'       => 'Gestiona la reputación financiera de la empresa: las relaciones con analistas, los mensajes clave para los inversores y el proceso de construcción de la credibilidad financiera que reduce el coste del capital y facilita el acceso a financiación.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en comunicación corporativa y relaciones con inversores (IR) con amplia experiencia en empresas cotizadas y en fase de crecimiento. Necesito que me ayudes a construir la estrategia de comunicación financiera que construye credibilidad con inversores, analistas y el mercado financiero.

Mi contexto:
- Tipo de empresa: [cotizada / pre-IPO / empresa de crecimiento con inversores institucionales / empresa familiar buscando financiación bancaria]
- Estado actual de la comunicación financiera: [sin estrategia / comunicación reactiva / comunicación estructurada pero mejorable]
- Audiencia principal: [inversores institucionales / analistas de equity / inversores de deuda / bancos / potenciales socios financieros]
- Principal reto de reputación financiera: [los inversores no entienden nuestro modelo de negocio / la valoración no refleja el valor que creemos tener / tenemos dificultades para acceder a capital en condiciones favorables]

Con ese contexto, dame:

1. LA ESTRATEGIA DE RELACIONES CON INVERSORES
¿Cuál es el marco estratégico de la comunicación con inversores? Dame el diseño:
- Los objetivos de la estrategia de IR: los tres resultados concretos que una buena comunicación financiera debe conseguir (credibilidad, valoración justa, acceso a capital)
- La jerarquía de audiencias: cómo priorizar entre inversores institucionales, inversores retail, analistas y prensa financiera según el tipo de empresa
- El calendario de IR: los hitos de comunicación financiera del año (resultados trimestrales o anuales, capital markets day, conferencias de inversores, roadshows)
- El equipo de IR: quién debe ser responsable de la función de IR en empresas de diferente tamaño y en qué momento tiene sentido crear una función interna o contratar un IR advisor externo

2. LA EQUITY STORY: EL RELATO FINANCIERO DE LA EMPRESA
El elemento central de la comunicación financiera es la equity story: el relato que explica por qué la empresa vale lo que vale y por qué seguirá creando valor. Dame el diseño:
- Los componentes de una equity story creíble: el mercado (TAM), el modelo de negocio, la ventaja competitiva, el track record financiero, el plan de crecimiento y el equipo directivo
- Cómo cuantificar la oportunidad de mercado de forma que el inversor la crea: los errores del TAM inflado y los errores del TAM demasiado conservador
- Cómo presentar el modelo de negocio con los unit economics que demuestran escalabilidad
- Los mensajes clave: las tres o cuatro ideas que el inversor debe recordar después de la reunión

3. COMUNICACIÓN DE RESULTADOS
¿Cómo comunicar los resultados financieros de forma que construya credibilidad incluso cuando los números no son los esperados? Dame el framework:
- La estructura del press release de resultados: qué va primero, qué destaca el CEO, cómo presentar los números negativos sin perder credibilidad
- El earnings call: la preparación, la agenda, el manejo del Q&A y los errores que destruyen la confianza del mercado en una sola llamada
- Cómo gestionar los profit warnings: el timing, el mensaje y cómo recuperar la credibilidad después de decepcionar al mercado
- Los KPIs no financieros: qué métricas operativas comunicar junto a los financieros para que el inversor entienda el momentum del negocio

4. LA GESTIÓN DE ANALISTAS
Los analistas de sell-side tienen un poder desproporcionado sobre la percepción del mercado. Dame el framework de relación con analistas:
- Cómo construir la relación con los analistas que cubren mi sector: la primera reunión, la cadencia de contacto y lo que los analistas valoran en la dirección de una empresa
- Cómo manejar un informe negativo o un downgrade: la respuesta, el re-engagement y cómo evitar que la relación se deteriore permanentemente
- Qué información dar a los analistas y qué no: las líneas del inside information y cómo gestionar la comunicación selectiva cumpliendo la normativa
- Cómo conseguir cobertura de analistas cuando eres una empresa pequeña o mediana

5. COMUNICACIÓN EN MOMENTOS DE CRISIS
Las crisis financieras (corrección del guidance, escándalo contable, cambio de CEO, litigio relevante) ponen a prueba la comunicación financiera. Dame el playbook de crisis:
- El principio de la comunicación en crisis: transparencia, rapidez y control del mensaje
- La secuencia de comunicación: quién se comunica primero (inversores institucionales antes de la prensa), qué canales usar y en qué orden
- Los mensajes que no pueden faltar en una comunicación de crisis financiera
- Cómo medir la recuperación de la confianza del mercado después de una crisis

6. EL INVESTOR DAY O CAPITAL MARKETS DAY
El investor day es la oportunidad de presentar la estrategia a largo plazo y construir credibilidad duradera. Dame el diseño:
- Cuándo organizarlo: los eventos que justifican un investor day (nueva estrategia, nuevo ciclo de inversión, post-IPO)
- La agenda ideal: la duración, los ponentes, el orden de las presentaciones y el papel del Q&A
- Los materiales: el deck de la presentación, el modelo financiero que se distribuye y el kit de prensa
- Cómo medir el éxito del investor day: las métricas de éxito a corto plazo (reacción del mercado, nuevos inversores) y a largo plazo (cambio en la valoración o en la cobertura de analistas)

7. MÉTRICAS DE REPUTACIÓN FINANCIERA
¿Cómo medir si la estrategia de comunicación financiera está funcionando? Dame el sistema de métricas:
- El análisis del registro de accionistas: cambios en la base de inversores como indicador de la calidad de la comunicación
- La valoración relativa: cómo comparar el múltiplo de valoración con los pares y qué parte de la diferencia es explicable por la comunicación
- El sentiment de analistas: la evolución de los ratings y de los price targets como indicador de credibilidad
- El acceso a capital: el coste de la deuda y las condiciones de los acuerdos de financiación como indicador del impacto de la reputación financiera
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir la estrategia de comunicación financiera que genera credibilidad con inversores y analistas y reduce el coste del capital.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Reputación del despacho y construcción de marca jurídica',
                'description'       => 'Construye la marca del despacho de abogados: el posicionamiento en áreas de práctica específicas, la gestión de la reputación online y la estrategia de thought leadership que hace que el despacho sea el primero en la mente del cliente cuando necesita un especialista.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de marketing jurídico y estrategia de marca especializado en despachos de abogados y profesionales del derecho. Necesito que me ayudes a construir la marca y la reputación del despacho para convertirlo en la referencia en mi área de especialización.

Mi contexto:
- Tipo de práctica: [despacho generalista / especialista en una o dos áreas / boutique / abogado independiente]
- Áreas de práctica donde quiero posicionarme: [las dos o tres áreas en las que quieres ser reconocido como especialista]
- Tipo de cliente objetivo: [empresas de cierto tamaño / sector específico / particulares de alto patrimonio / startups / etc.]
- Estado actual de la marca: [sin presencia visible / algo de reputación local / presencia digital básica / marca en construcción]
- Principal reto de reputación: [nadie nos conoce fuera de nuestros clientes actuales / nos llegan los casos equivocados / perdemos frente a despachos más conocidos aunque somos igual de buenos técnicamente]

Con ese contexto, dame:

1. EL POSICIONAMIENTO DEL DESPACHO
Antes de comunicar nada, necesito tener claro el posicionamiento. Dame el proceso:
- Cómo elegir el nicho de especialización: la tensión entre ser generalista (más potencial de clientes) y ser especialista (más credibilidad y mayores honorarios) y cómo resolver la ecuación según mi situación actual
- Cómo describir la especialización de forma que el cliente entienda exactamente para qué tipo de problema jurídico llamarme
- El marco de referencia correcto: si me comparan con el despacho más caro del mercado en mi área, o con el más grande, o con el generalista local — cuál es el marco que me favorece
- Las preguntas que debo hacerme para definir el territorio de posicionamiento del despacho

2. THOUGHT LEADERSHIP: EL CONTENIDO QUE CONSTRUYE AUTORIDAD
El contenido jurídico de calidad es la mayor palanca de reputación en el mercado legal. Dame la estrategia de thought leadership:
- Los formatos que construyen autoridad en el mercado jurídico: artículos de doctrina en publicaciones especializadas, tribunas de opinión en prensa generalista, guías prácticas descargables, webinars y formación, comentarios de jurisprudencia
- Cómo elegir los temas de contenido: la intersección entre lo que el cliente necesita entender y lo que demuestra la especialización del despacho
- La cadencia de publicación: la frecuencia mínima para mantener la presencia y la calidad mínima para no dañar la reputación
- Cómo distribuir el contenido: los canales que importan para el tipo de cliente que quiero atraer (LinkedIn, newsletters jurídicas, publicaciones del sector, eventos de clientes)

3. LA PRESENCIA DIGITAL DEL DESPACHO
¿Cómo debe ser la presencia digital de un despacho que quiere construir marca? Dame el diseño:
- La web del despacho: los elementos imprescindibles (la propuesta de valor clara, los abogados con sus perfiles y especialidades, los sectores de clientes, los casos de éxito o áreas de práctica con ejemplos concretos) y los que destruyen la credibilidad (la web de 2010, las fotos de stock genéricas, la falta de contenido actualizado)
- LinkedIn para despachos y abogados: la estrategia de presencia del perfil personal del abogado vs la página del despacho, el tipo de contenido que funciona y el que no, la cadencia de publicación
- Los directorios jurídicos: cuáles importan para mi tipo de práctica y cómo optimizar la presencia en Chambers, Legal 500, Expansión Jurídico y otros directorios relevantes en mi mercado
- El SEO jurídico: las palabras clave que mi cliente objetivo busca cuando necesita lo que ofrezco y cómo posicionar la web en esas búsquedas

4. LA REPUTACIÓN ONLINE Y LAS RESEÑAS
¿Cómo gestionar la reputación online del despacho en las plataformas donde los clientes buscan referencias? Dame el proceso:
- Las plataformas donde los clientes buscan abogados y dejan reseñas en mi mercado (Google, Trustpilot, Avvo u otras según el país)
- Cómo solicitar reseñas a clientes satisfechos de forma ética y efectiva
- Cómo responder a las reseñas negativas sin violar el secreto profesional y sin dañar más la reputación
- Cómo monitorizar lo que se dice del despacho en internet y gestionar la información incorrecta

5. LOS EVENTOS Y LA PRESENCIA EN EL SECTOR
La presencia en el ecosistema del cliente es una de las palancas de reputación más eficaces para un despacho. Dame la estrategia:
- Los eventos donde el despacho debe estar presente: conferencias del sector cliente, asociaciones empresariales, cámaras de comercio, eventos sectoriales del cliente objetivo
- Cómo convertir la asistencia a eventos en relaciones y en oportunidades de negocio
- Cómo organizar eventos propios: el desayuno jurídico, el webinar para clientes, la jornada anual — cuándo tiene sentido y cómo hacerlos bien
- La colaboración con otras firmas: cuándo tiene sentido co-organizar eventos con asesores financieros, consultoras o despachos de otras jurisdicciones

6. EL SISTEMA DE REFERENCIAS
El canal de adquisición más potente de un despacho es la referencia de un cliente satisfecho o de otro profesional. Dame el sistema:
- Cómo construir la red de referencias: los tipos de referidores más valiosos para mi práctica (otros abogados de áreas complementarias, asesores fiscales, banqueros, consultores, directores jurídicos)
- El proceso de cultivo de la red de referidores: la cadencia de contacto, los gestos de reciprocidad y cómo mantener la relación cuando no hay asuntos activos
- Cómo hacer que los clientes actuales recomienden el despacho: el momento adecuado para pedirlo, el proceso y lo que facilita la recomendación

7. MÉTRICAS DE CONSTRUCCIÓN DE MARCA JURÍDICA
¿Cómo medir si la estrategia de marca está funcionando? Dame el sistema de métricas simplificado para un despacho:
- Métricas de visibilidad: visitas a la web, seguidores en LinkedIn, menciones en prensa, apariciones en directorios
- Métricas de atracción: número de consultas entrantes, porcentaje de consultas de asuntos en el área de especialización objetivo, canal por el que llegan los nuevos clientes
- Métricas de reputación cualitativa: NPS de clientes, calidad de las reseñas, invitaciones a hablar en eventos del sector
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir la marca y la reputación de un despacho de abogados para convertirlo en la referencia en su área de especialización.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer advocacy: convertir clientes en embajadores de marca',
                'description'       => 'Construye el programa de customer advocacy que convierte a los clientes más satisfechos en defensores activos de la marca: los programas de referidos, los testimonios y las referencias que aceleran el pipeline de ventas con la credibilidad del cliente real.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Customer Success y customer marketing con especialización en programas de customer advocacy y referencias. Necesito que me ayudes a diseñar el programa que convierte a los clientes más satisfechos en defensores activos de la marca.

Mi contexto:
- Tipo de producto o servicio: [SaaS / plataforma / servicios profesionales recurrentes / otro]
- Base de clientes actual: [número aproximado, sectores principales, tamaños de empresa]
- Estado actual del advocacy: [sin programa / algunos testimonios aislados / referencias informales sin proceso]
- Principal reto: [no tenemos casos de éxito documentados / los clientes satisfechos no comparten activamente / el equipo de ventas no tiene referencias para usar en el proceso comercial]
- Recursos disponibles: [un equipo de CS / un equipo de marketing / solo una persona / sin recursos adicionales]

Con ese contexto, dame:

1. EL PROGRAMA DE CUSTOMER ADVOCACY: DISEÑO Y ESTRUCTURA
¿Qué es exactamente un programa de customer advocacy y qué componentes necesita? Dame el diseño:
- Los diferentes tipos de advocacy: el testimonio escrito, el caso de éxito detallado, la referencia directa para una venta, la participación en eventos, la co-creación de contenido, la aparición en webinars y el peer review en plataformas como G2 o Capterra
- Los niveles del programa: cómo crear una estructura de niveles de advocacy que reconozca y recompense diferente según la inversión de tiempo y visibilidad del cliente
- El momento de lanzamiento: cuándo en el ciclo de vida del cliente es el momento de invitar al programa de advocacy
- Las recompensas del programa: qué ofrecer a los clientes que participan en el advocacy (acceso exclusivo, visibilidad, créditos, reconocimiento, influencia en el roadmap)

2. IDENTIFICAR A LOS CLIENTES IDEALES PARA EL ADVOCACY
No todos los clientes son buenos candidatos para el advocacy. Dame el proceso de identificación:
- Los criterios de selección: NPS alto, uso intensivo del producto, resultado demostrable, cliente con credibilidad en su sector, disponibilidad de tiempo
- Cómo usar los datos del producto para identificar a los clientes con mayor engagement y mejores resultados
- Las señales de disposición al advocacy: los clientes que ya comparten espontáneamente en LinkedIn, que han dado referencias informales, que dejan reseñas sin que se las pida
- Cuántos advocates necesito según el tamaño de mi cartera y el objetivo del programa

3. EL CASO DE ÉXITO: EL ACTIVO MÁS VALIOSO
El caso de éxito bien construido es el contenido de mayor impacto en el proceso de ventas. Dame el proceso completo:
- La identificación del caso: cómo elegir los casos con mayor poder persuasivo para el tipo de comprador que quiero convencer
- El proceso de producción: las preguntas de la entrevista, cómo conseguir que el cliente apruebe el texto y los plazos realistas
- La estructura del caso de éxito que funciona en B2B: el contexto del cliente, el problema antes, por qué eligieron esta solución, la implementación y los resultados cuantificados
- Cómo distribuir el caso de éxito: los canales donde el caso genera más pipeline (web, proceso de ventas, ads, LinkedIn)

4. EL PROGRAMA DE REFERENCIAS
Las referencias directas son el canal de adquisición con mayor tasa de conversión. Dame el diseño del programa:
- El proceso formal de referidos: cómo estructurar el programa para que los clientes puedan dar referencias fácilmente cuando se les pide
- Cuándo pedir la referencia: el momento del ciclo de vida del cliente en que la petición es más natural y más efectiva
- El script para pedir la referencia: las palabras exactas que el CSM o el account manager deben usar para pedir una referencia sin incomodar
- Cómo involucrar al cliente en el proceso de ventas: la introducción por email, la llamada de referencia de peer-to-peer y el evento donde el cliente puede hablar con el prospecto

5. LAS REVIEWS EN G2, CAPTERRA Y OTRAS PLATAFORMAS
Las plataformas de peer review tienen un impacto creciente en las decisiones de compra de software. Dame la estrategia:
- Cuáles son las plataformas más relevantes para mi categoría de producto
- El proceso de solicitud de reviews: cuándo pedirlas, en qué canal, con qué texto y qué facilita que el cliente deje una review detallada
- Cómo responder a las reviews (positivas y negativas) para que la respuesta también construya marca
- Cómo usar las reviews en el proceso de ventas y en la comunicación de marketing

6. ADVOCATES EN EVENTOS Y CONTENIDO
Los clientes que hablan públicamente de su experiencia son los más valiosos. Dame el framework para activar este nivel de advocacy:
- Cómo identificar y preparar a los clientes que pueden hablar en un evento o webinar
- El proceso de preparación del ponente: cómo ayudar al cliente a construir su historia de forma que demuestre el valor del producto
- El co-marketing: los formatos de colaboración con clientes que generan visibilidad para ambas partes (webinars conjuntos, artículos co-firmados, estudios de caso en prensa)
- Cómo gestionar la logística y el reconocimiento para que la experiencia del cliente-advocate sea siempre positiva

7. MÉTRICAS DEL PROGRAMA DE ADVOCACY
¿Cómo medir el impacto del programa? Dame el framework de métricas:
- Métricas de programa: número de advocates activos, tasa de participación por nivel, Net Promoter Score del programa
- Métricas de pipeline: referencias generadas, deals influenciados por un caso de éxito o referencia, tasa de conversión de deals con referencia vs sin referencia
- Métricas de contenido: casos de éxito publicados, reviews generadas, impresiones de contenido con clientes
- El ROI del programa: cómo calcular el valor del pipeline generado por el programa frente al coste de gestionarlo
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar el programa de customer advocacy que convierte clientes satisfechos en defensores activos que aceleran el pipeline de ventas.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Posicionamiento de marca personal del freelance',
                'description'       => 'Construye la marca personal que atrae exactamente al tipo de cliente que quieres: el nicho, el mensaje y la presencia digital que hacen que cuando alguien necesita exactamente lo que tú ofreces, tu nombre sea el primero en la lista.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de estrategia de marca personal especializado en freelancers y profesionales independientes. Necesito que me ayudes a construir el posicionamiento de marca personal que me diferencia en el mercado y atrae exactamente al tipo de cliente con el que quiero trabajar.

Mi contexto:
- Tipo de servicio freelance: [diseño, desarrollo, copywriting, marketing, consultoría, fotografía, formación, etc.]
- Años de experiencia: [y los sectores o tipos de proyectos principales en tu trayectoria]
- Tipo de cliente que tienes ahora: [describe brevemente los clientes actuales]
- Tipo de cliente que quieres tener: [el cliente ideal si pudieras elegir]
- Estado actual de la marca personal: [sin presencia / perfil de LinkedIn básico / algo de contenido pero sin estrategia / marca personal activa pero que no atrae el tipo de cliente correcto]
- Principal frustración: [me llegan proyectos que no quiero hacer / me comparan por precio con freelancers más baratos / nadie sabe que existo / tengo clientes pero no los correctos]

Con ese contexto, dame:

1. EL NICHO: LA DECISIÓN MÁS IMPORTANTE
Explícame por qué la elección del nicho es la decisión de posicionamiento más importante para un freelance y cómo tomar esa decisión:
- El mito del nicho como límite: por qué especializarse atrae más trabajo, no menos, y los datos que lo respaldan
- Las tres dimensiones del nicho: el sector del cliente, el tipo de problema que resuelvo y el perfil del cliente (tamaño, momento de crecimiento, etc.) — cuántas dimensiones debo elegir y cómo combinarlas
- Cómo evaluar qué nicho me conviene: la intersección de lo que se me da bien, lo que el mercado paga bien y lo que me interesa trabajar
- El nicho óptimo para mi situación: cuándo tiene sentido ser el "especialista en X para Y" vs el especialista en X para cualquier empresa

2. EL MENSAJE DE POSICIONAMIENTO
Una vez tengo el nicho, ¿cómo lo articulo en un mensaje que el cliente entiende y recuerda? Dame el framework:
- La fórmula del mensaje de posicionamiento: "Ayudo a [tipo de cliente] a conseguir [resultado] mediante [mi servicio diferencial]" — cómo rellenarla de forma que sea específica, creíble y diferenciadora
- El headline del perfil de LinkedIn: la frase que debe aparecer debajo de mi nombre y que en 10 palabras le dice al cliente ideal que ha encontrado a la persona que necesita
- El elevator pitch del freelance: la respuesta de 30 segundos a "¿a qué te dedicas?" que genera preguntas en lugar de "qué interesante" y cambio de tema
- Cómo testar el mensaje: las señales de que el mensaje está funcionando y las de que hay que ajustarlo

3. LA PRUEBA DE AUTORIDAD
Un buen mensaje de posicionamiento necesita evidencia de que eres tan bueno como dices. Dame el sistema de construcción de autoridad:
- El portfolio orientado al cliente ideal: cómo seleccionar y presentar los trabajos que demuestran que eres el experto exacto que el cliente necesita (no todos los trabajos, solo los que convencen al tipo de cliente que quieres)
- Los casos de éxito: cómo construir los dos o tres casos de éxito que demuestran resultados en términos que el cliente valora
- Los testimonios: cómo solicitarlos, qué deben decir para ser útiles y cómo presentarlos para que convenzan
- Los reconocimientos externos: publicaciones, colaboraciones, charlas, premios — qué cuenta y qué es ruido

4. LA PRESENCIA DIGITAL DEL FREELANCE ESPECIALIZADO
¿Dónde y cómo debo estar presente para que el cliente ideal me encuentre? Dame la estrategia de presencia digital:
- El canal principal para mi tipo de cliente ideal: dónde pasan el tiempo los clientes que quiero atraer (LinkedIn, Instagram, Twitter/X, comunidades específicas del sector, foros, etc.)
- La web del freelance: cuándo es imprescindible, qué debe tener y qué no, y cómo debe estar estructurada para que el cliente que llega entienda inmediatamente si soy para él
- LinkedIn como motor de atracción: la optimización del perfil, el tipo de contenido que atrae al cliente ideal y la cadencia de publicación realista para un freelance con proyectos activos
- El contenido de autoridad: el blog, el newsletter, el podcast o el canal de YouTube — cuándo tiene sentido cada formato y cómo elegir el que se adapta a mi forma de comunicar

5. LA ESTRATEGIA DE CONTENIDO QUE ATRAE CLIENTES
El contenido que posiciona al freelance como experto es el que resuelve los problemas del cliente ideal antes de que el cliente le contrate. Dame la estrategia:
- Los temas de contenido que demuestran autoridad en mi nicho: cómo encontrar los problemas y preguntas del cliente que nadie está respondiendo bien
- El formato de contenido con mayor retorno por hora invertida para un freelance
- La promoción del contenido: cómo llegar al cliente ideal con el contenido sin depender del algoritmo
- Cómo convertir el contenido en consultas de potenciales clientes: el llamado a la acción que cierra el ciclo

6. LAS REFERENCIAS Y EL NETWORKING DEL FREELANCE ESPECIALIZADO
El canal de adquisición más eficiente para un freelance especializado es la referencia de personas que conocen al tipo de cliente que quieres. Dame la estrategia:
- El mapa de referidores: los profesionales que trabajan con mi cliente ideal y que pueden recomendarme (asesores, agencias complementarias, consultores de otras áreas)
- Cómo construir la red de referidores: el proceso de contacto inicial, la forma de mantener la relación y cómo convertirse en la referencia que dan cuando alguien necesita lo que yo hago
- La reciprocidad en las referencias: cómo construir un sistema en el que doy referencias de calidad y recibo referencias de calidad

7. MÉTRICAS DE LA MARCA PERSONAL
¿Cómo saber si el posicionamiento de marca personal está funcionando? Dame el sistema de métricas simplificado:
- Métricas de atracción: número de consultas entrantes, porcentaje de consultas que son del tipo de cliente ideal, canal por el que llegan los clientes
- Métricas de conversión: tasa de consultas que se convierten en proyectos, precio medio por proyecto (señal de que el posicionamiento sube el valor percibido)
- Métricas de reputación: seguidores en el canal principal, engagement del contenido, menciones o referencias externas
- El test definitivo: ¿cuándo alguien de tu red necesita exactamente lo que haces, tu nombre es el primero que les viene a la mente?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Construir el posicionamiento de marca personal del freelance que atrae exactamente al tipo de cliente que quiere.',
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
