<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills248Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Posicionamiento competitivo: ser el primero en la mente del cliente',
                'description'       => 'Define y comunica el posicionamiento de tu marca de forma que ocupe un lugar único en la mente del cliente: la diferenciación real, el mensaje que conecta y la estrategia para mantener el liderazgo percibido.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en estrategia de marca y posicionamiento competitivo con experiencia en empresas de consumo, tecnología y servicios. Necesito tu ayuda para definir o revisar el posicionamiento de mi marca frente a la competencia.

Mi contexto:
- Producto o servicio que ofrezco: [describe brevemente qué vendes]
- Mercado objetivo: [segmento de clientes principal]
- Competidores principales: [nombra los dos o tres más relevantes]
- Posicionamiento actual si lo tienes: [cómo te describes hoy a ti mismo]
- Problema con el posicionamiento actual: [demasiado genérico, no diferencia de la competencia, el cliente no lo entiende, etc.]
- Fortaleza real en la que puedes ganar: [qué haces mejor que nadie o diferente a todos]

Con ese contexto, dame:

1. DIAGNÓSTICO DEL POSICIONAMIENTO ACTUAL
Analiza el posicionamiento que me describes y dime: ¿es diferenciado o genérico?, ¿es creíble dado lo que la empresa hace realmente?, ¿es relevante para el segmento objetivo? y ¿es defendible frente a los competidores actuales y futuros? Identifica los tres problemas principales del posicionamiento actual y explica por qué cada uno es un obstáculo para el crecimiento.

2. EL MAPA DE POSICIONAMIENTO COMPETITIVO
Ayúdame a construir el mapa de posicionamiento: ¿cuáles son los dos ejes más relevantes para mi categoría (precio/calidad, funcionalidad/simplicidad, especialización/generalismo, etc.)? Ubica en ese mapa a mis competidores principales y a mi marca actual. ¿Hay un espacio vacío y defendible que pueda ocupar? Dame dos o tres opciones de posicionamiento diferente con los pros y contras de cada uno.

3. EL CONCEPTO DE POSICIONAMIENTO: LA FRASE QUE LO DEFINE TODO
Dame el proceso para construir el concepto de posicionamiento: la estructura clásica "Para [segmento], [marca] es la única [categoría] que [beneficio diferencial] porque [razón para creer]". Escribe tres versiones del concepto de posicionamiento para mi caso, con diferentes apuestas diferenciales, y explícame cómo elegir la más fuerte evaluando la relevancia para el cliente, la diferenciación frente a la competencia y la credibilidad de la marca.

4. LA RAZÓN PARA CREER: CÓMO HACER EL POSICIONAMIENTO CREÍBLE
Un buen posicionamiento necesita pruebas. Dame las cinco categorías de razones para creer más poderosas en marketing: las pruebas de proceso (cómo lo hacemos), las pruebas de resultado (lo que consiguen los clientes), las pruebas de ingredientes o tecnología, la validación de terceros (premios, certificaciones, menciones en medios) y la prueba social (casos de uso, testimonios, número de clientes). Para mi caso, ¿cuáles son más relevantes y cómo comunicarlas?

5. LA ARQUITECTURA DE MENSAJES DEL POSICIONAMIENTO
¿Cómo traducir el concepto de posicionamiento en mensajes concretos para cada canal y audiencia? Dame la arquitectura de mensajes: el mensaje central (el tagline o la promesa principal), los tres o cuatro mensajes de soporte (los beneficios clave que sostienen la promesa) y las pruebas para cada mensaje. Incluye cómo adaptar el tono y el vocabulario para los distintos contextos: página web, presentación comercial, anuncio de paid media y comunicación interna con el equipo.

6. CÓMO MANTENER EL POSICIONAMIENTO FRENTE A MOVIMIENTOS COMPETITIVOS
¿Qué hacer cuando un competidor copia tu posicionamiento o cuando el mercado cambia y el posicionamiento empieza a quedarse obsoleto? Dame el proceso para monitorizar el posicionamiento competitivo (qué señales vigilar, con qué frecuencia y cómo reaccionar) y los tres tipos de respuesta: reforzar el posicionamiento actual, ampliar la diferenciación o pivotar hacia un nuevo espacio competitivo.

7. DE LA ESTRATEGIA A LA EJECUCIÓN: CÓMO ACTIVAR EL POSICIONAMIENTO
¿Cómo pasar de tener un concepto de posicionamiento claro a activarlo en todas las touchpoints de la marca? Dame el plan de activación del posicionamiento: los cambios en la web, en el copy publicitario, en el discurso del equipo comercial, en la propuesta de valor de los materiales de venta y en la comunicación interna para que toda la organización hable con la misma voz. ¿Cuánto tiempo tarda un reposicionamiento en calar en la mente del cliente?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Definir un posicionamiento competitivo diferenciado y creíble para ocupar un lugar único en la mente del cliente.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Technical moat: construir ventajas técnicas difíciles de copiar',
                'description'       => 'Identifica y construye las ventajas técnicas que convierten tu producto en difícil de replicar: la arquitectura que escala mejor, los datos propietarios que se acumulan y los efectos de red que refuerzan el liderazgo.',
                'prompt_content'    => <<<'PROMPT'
Eres un arquitecto de software y estratega de producto técnico con experiencia en el diseño de ventajas competitivas sostenibles en empresas de tecnología. Necesito que me ayudes a identificar y construir las ventajas técnicas de mi producto que sean difíciles de copiar para los competidores.

Mi contexto:
- Descripción del producto técnico: [qué hace, para quién, cómo funciona a alto nivel]
- Estado de desarrollo actual: [MVP / producto en crecimiento / producto maduro]
- Competidores principales: [quiénes son, qué tienen ellos que nosotros no, y qué tenemos nosotros que ellos no]
- Principal hipótesis sobre la ventaja técnica: [dónde crees que puedes ganar técnicamente: velocidad, datos, algoritmos, integraciones, arquitectura, etc.]
- Recursos del equipo técnico: [tamaño del equipo, seniority, áreas de especialización]

Con ese contexto, dame:

1. LAS FUENTES DE VENTAJA TÉCNICA SOSTENIBLE
Explícame las seis fuentes principales de ventaja técnica que son difíciles de replicar: los datos propietarios que mejoran el producto con el uso, los efectos de red técnicos (el producto es más valioso para cada usuario cuando hay más usuarios), la arquitectura que permite escalar con costes decrecientes, los algoritmos o modelos entrenados con datos propietarios, las integraciones profundas que crean costes de cambio y la velocidad de ejecución del equipo. Para cada fuente, evalúa cuál es más relevante y alcanzable en mi caso.

2. EL FLYWHEEL TÉCNICO: VENTAJAS QUE SE REFUERZAN SOLAS
¿Cómo diseñar un flywheel técnico donde el crecimiento del producto refuerce la ventaja competitiva? Dame ejemplos de flywheels técnicos en productos reales y ayúdame a diseñar el flywheel de mi producto: qué datos se acumulan con el uso, cómo mejoran el producto, cómo esa mejora atrae más usuarios y cómo más usuarios generan más datos. ¿Cuánto tiempo tarda en activarse un flywheel de datos y qué masa crítica necesita?

3. DATOS PROPIETARIOS COMO MOAT: ESTRATEGIA DE ACUMULACIÓN
Si los datos son mi principal ventaja, ¿cómo diseñar la estrategia de datos para que sean un moat defensible? Dame el proceso para: identificar qué datos son únicos y valiosos (los que el competidor no puede comprar ni generar fácilmente), cómo instrumentar el producto para capturarlos de forma sistemática, cómo estructurarlos para que alimenten el modelo o el algoritmo que mejora el producto y cómo protegerlos legalmente (GDPR, contratos con clientes, propiedad de los datos en los términos de servicio).

4. ARQUITECTURA TÉCNICA COMO VENTAJA COMPETITIVA
¿Cómo pueden las decisiones de arquitectura crear una ventaja competitiva sostenible? Dame ejemplos de cómo la arquitectura puede ser un moat: el monorepo bien estructurado que permite iteración más rápida, la arquitectura de microservicios que permite escalar componentes críticos de forma independiente, la elección de tecnologías que el equipo domina mejor que el mercado y el diseño de la API que hace que los clientes construyan sobre tu plataforma y no quieran migrar. Para mi caso, ¿qué decisiones arquitectónicas debería priorizar?

5. INTEGRACIONES Y ECOSISTEMA COMO DEFENSA
¿Cómo usar las integraciones con terceros como parte del moat técnico? Dame la estrategia de integraciones defensivas: cómo priorizar las integraciones que crean costes de cambio para el cliente (las que conectan con sus sistemas críticos), cómo construir un ecosistema de partners técnicos que amplíen el valor del producto sin que yo tenga que construirlo todo, y cómo el marketplace de integraciones puede convertirse en una ventaja que el competidor no puede replicar a corto plazo.

6. VELOCIDAD DE EJECUCIÓN COMO MOAT TRANSITORIO
¿Cómo la velocidad del equipo técnico puede ser un moat mientras se construyen las ventajas estructurales? Dame el marco para evaluar la velocidad de ejecución: cómo medirla (cycle time, deployment frequency, mean time to recovery), cómo mejorarla sistemáticamente y cuándo la velocidad de ejecución es suficiente moat y cuándo necesitas complementarla con ventajas más estructurales como datos o efectos de red.

7. CÓMO COMUNICAR EL MOAT TÉCNICO A INVERSORES Y CLIENTES
¿Cómo explicar la ventaja técnica a audiencias no técnicas? Dame el discurso para tres audiencias: el inversor que quiere entender por qué no serás copiado en 18 meses, el cliente enterprise que quiere entender por qué apostar por tu plataforma a largo plazo y el candidato técnico senior al que quieres convencer de que el problema técnico es suficientemente difícil e interesante para unirse al equipo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Identificar y construir las ventajas técnicas del producto que sean difíciles de replicar y generen un moat competitivo sostenible.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño como ventaja competitiva: cuando la UX es el producto',
                'description'       => 'Construye una ventaja competitiva basada en la experiencia de usuario: los principios de diseño que crean lealtad, los sistemas de diseño escalables y cómo medir el impacto del diseño en el negocio.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en design strategy y diseño centrado en el negocio con experiencia en empresas donde el diseño es un diferenciador competitivo. Necesito tu ayuda para convertir el diseño en una ventaja competitiva real de mi producto o servicio, más allá de la estética.

Mi contexto:
- Tipo de producto o servicio: [app, web, producto físico, servicio, plataforma, etc.]
- Estado actual del diseño: [sin equipo de diseño / con un diseñador / con un equipo / diseño maduro]
- Competidores y cómo es su experiencia de usuario comparada con la mía: [describe brevemente]
- Mayor oportunidad de diferenciación por diseño: [onboarding, flujo principal, accesibilidad, velocidad percibida, personalización, etc.]
- Restricciones principales: [presupuesto, capacidad del equipo, deuda de UX acumulada, etc.]

Con ese contexto, dame:

1. QUÉ SIGNIFICA QUE EL DISEÑO SEA UNA VENTAJA COMPETITIVA
Explícame la diferencia entre el diseño como decoración (hacerlo más bonito) y el diseño como ventaja competitiva (hacer que el usuario elija mi producto y no quiera irse). Dame ejemplos de productos donde el diseño es el moat: Notion, Figma, Linear, Apple, Airbnb. ¿Qué tienen en común? ¿Qué principios de diseño son los que generan lealtad y no sólo satisfacción?

2. EL DESIGN AUDIT: DÓNDE ESTÁS HOY
¿Cómo hacer un audit rápido del estado actual del diseño de mi producto para identificar las mayores oportunidades? Dame el proceso: las cinco dimensiones a evaluar (consistencia visual, claridad de la navegación, calidad del onboarding, gestión de los estados de error y vacíos, y accesibilidad básica), cómo puntuarlas en una escala simple y cómo priorizar los problemas según su impacto en la retención y la conversión.

3. EL SISTEMA DE DISEÑO COMO VENTAJA ESCALABLE
¿Por qué un sistema de diseño bien construido es una ventaja competitiva y no solo una herramienta de eficiencia? Explícame los componentes de un sistema de diseño efectivo: los design tokens (colores, tipografía, espaciado), la biblioteca de componentes, la documentación de patrones de interacción y los principios de diseño que guían las decisiones. ¿Cuándo tiene sentido construir un sistema de diseño propio y cuándo es mejor partir de uno existente (Material, Radix, etc.)?

4. ONBOARDING DE DISEÑO: EL MOMENTO QUE DEFINE LA RETENCIÓN
¿Cómo diseñar un onboarding que sea una ventaja competitiva? Dame los principios del onboarding que genera lealtad: el tiempo mínimo hasta el primer valor (time-to-value), la personalización del onboarding según el perfil del usuario, el diseño de los empty states para motivar en lugar de frustrar, y la progresión de la complejidad para no abrumar al nuevo usuario. Dame un checklist para auditar el onboarding actual de mi producto.

5. CÓMO MEDIR EL IMPACTO DEL DISEÑO EN LOS RESULTADOS DE NEGOCIO
¿Cómo demostrar el ROI del diseño para justificar la inversión? Dame las métricas de diseño ligadas a resultados de negocio: la tasa de activación (usuarios que llegan al primer valor), la tasa de retención a 7 y 30 días, el task success rate en las tareas críticas del producto, el time-on-task (menos tiempo en tareas críticas = mejor diseño), la tasa de errores y el SUS score (System Usability Scale). Para cada métrica, explícame cómo medirla y qué valor indica un producto bien diseñado.

6. DISEÑO INCLUSIVO Y ACCESIBILIDAD COMO DIFERENCIADOR
¿Cómo puede la accesibilidad ser una ventaja competitiva y no solo una obligación legal? Dame la perspectiva estratégica del diseño inclusivo: el mercado adicional que se abre con un producto accesible, cómo la accesibilidad mejora la experiencia para todos los usuarios y no solo para los que tienen discapacidad, y cómo comunicar el compromiso con la accesibilidad como parte del posicionamiento de marca. Dame el nivel mínimo de accesibilidad (WCAG 2.1 AA) que debería alcanzar mi producto y cómo auditarlo.

7. CULTURA DE DISEÑO: CÓMO CONSTRUIR UN EQUIPO QUE HACE DEL DISEÑO UN MOAT
¿Cómo construir la cultura de diseño dentro de una organización que convierta el diseño en una ventaja sostenible? Dame los principios de las organizaciones donde el diseño es un diferenciador: el design leadership conectado con la estrategia de negocio, el proceso de decisión que incluye perspectiva de diseño desde el principio, la colaboración entre diseño e ingeniería que permite iterar rápido sin acumular deuda de UX y cómo medir la madurez de diseño de la organización usando el Design Maturity Model de Nielsen Norman Group.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Convertir el diseño en una ventaja competitiva real del producto midiendo su impacto en negocio y construyendo sistemas escalables.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Competitive selling: ganar cuando el cliente compara proveedores',
                'description'       => 'Gana los deals en los que el cliente está evaluando varias opciones: cómo posicionarte como la mejor alternativa, manejar las comparaciones directas con la competencia y cerrar incluso cuando no eres el más barato.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en estrategia de ventas competitivas con experiencia en ciclos de venta donde el cliente evalúa múltiples proveedores simultáneamente. Necesito que me ayudes a mejorar mi tasa de win rate en los deals competitivos: cuando el cliente me compara directamente con uno o varios competidores.

Mi contexto:
- Tipo de producto o servicio que vendo: [describe brevemente]
- Competidores principales con los que me comparan habitualmente: [nombra dos o tres]
- Ciclo de venta típico en deals competitivos: [duración, número de interlocutores involucrados]
- Win rate actual en deals competitivos aproximado: [si lo sabes]
- Mayor dificultad en los deals competitivos: [el competidor es más conocido, tiene mejor precio, tiene más features, o el cliente no percibe la diferencia]

Con ese contexto, dame:

1. INTELIGENCIA COMPETITIVA: CONOCER AL ENEMIGO ANTES DEL DEAL
¿Cómo construir y mantener la inteligencia competitiva necesaria para ganar en deals donde me comparan? Dame el sistema de competitive intelligence: las fuentes de información (reseñas en G2 o Capterra, conversaciones con clientes que también usan al competidor, análisis de la web y el pricing público del competidor, conversaciones con ex empleados o ex clientes del competidor) y cómo organizar esa información en una battle card operativa que el equipo comercial pueda usar en la conversación con el cliente.

2. LA BATTLE CARD: EL ARMA TÁCTICA EN DEALS COMPETITIVOS
¿Cómo construir una battle card efectiva para cada competidor principal? Dame la estructura: los tres puntos fuertes del competidor que el cliente mencionará (y cómo responder a cada uno), los tres puntos débiles del competidor que yo puedo explotar (con evidencia, no con opinión), el perfil del cliente para el que yo soy mejor opción y el perfil para el que el competidor podría ser mejor opción (honestidad que genera confianza), y las preguntas que debo hacer al cliente para descubrir si el competidor está presente en el deal.

3. CÓMO DESCUBRIR QUÉ COMPETIDORES ESTÁN EN EL DEAL
¿Cuándo y cómo preguntar al cliente si está evaluando otras opciones? Dame las técnicas para descubrir el panorama competitivo del deal sin parecer inseguro: las preguntas indirectas que revelan qué competidores están en juego, cómo interpretar las preguntas del cliente para inferir qué le está diciendo el competidor, y qué hacer cuando el cliente se niega a confirmar quién más está en el proceso de evaluación.

4. EL FRAME COMPETITIVO: CÓMO PRESENTAR LA COMPARACIÓN A TU FAVOR
¿Cómo guiar al cliente en el proceso de comparación para que evalúe los criterios donde yo gano? Dame el proceso de reframing de la comparación competitiva: cómo introducir criterios de evaluación que el cliente no había considerado y en los que yo soy superior, cómo hacer preguntas que revelen las limitaciones del competidor sin mencionarlo directamente, y cómo diseñar la propuesta o la presentación para que la comparación sea inevitable pero favorable.

5. MANEJAR EL "PERO TU COMPETIDOR TIENE MÁS FEATURES"
¿Cómo responder cuando el cliente dice que el competidor tiene funcionalidades que yo no tengo? Dame las técnicas para manejar esta objeción: cómo distinguir entre las features que el cliente realmente usará y las que le parecen interesantes pero no son críticas, cómo convertir la simplicidad o el foco de mi producto en una ventaja frente al competidor más completo, y cuándo es correcto decir "el competidor es mejor en X, pero nosotros somos mejores en Y que es lo que realmente importa para tu caso".

6. EL CIERRE EN DEALS COMPETITIVOS: LAS ÚLTIMAS HORAS DEL DEAL
¿Cómo gestionar el momento en que el cliente está entre mi propuesta y la del competidor y está a punto de decidir? Dame el playbook de los últimos días del deal competitivo: cómo saber si estoy ganando o perdiendo (las señales de compra y las señales de alarma), qué hacer si el cliente dice que el competidor ha mejorado su oferta en el último momento, cómo usar referencias de clientes similares como argumento de cierre y cuándo es correcto hacer una concesión de precio para ganar el deal y cuándo es mejor dejarlo ir.

7. POST-MORTEM COMPETITIVO: APRENDER DE LAS PÉRDIDAS
¿Cómo hacer el análisis post-deal de los deals competitivos que perdí para mejorar el win rate? Dame el proceso del loss analysis competitivo: las preguntas que hay que hacerle al cliente que eligió al competidor (cómo conseguir que sea honesto), cómo clasificar las causas de la pérdida (precio, features, relación, proceso de venta, timing) y cómo convertir esos aprendizajes en mejoras concretas del proceso comercial y de las battle cards.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Mejorar el win rate en deals competitivos donde el cliente evalúa múltiples proveedores simultáneamente.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Business model canvas para product managers',
                'description'       => 'Usa el Business Model Canvas como herramienta estratégica del product manager: cómo mapear el modelo de negocio actual, identificar las hipótesis más arriesgadas y diseñar experimentos para validarlas.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en estrategia de producto y diseño de modelos de negocio con experiencia en startups y empresas en crecimiento. Necesito que me ayudes a usar el Business Model Canvas como herramienta estratégica para el equipo de producto: no como un ejercicio de consultoría, sino como una herramienta operativa para tomar mejores decisiones de producto.

Mi contexto:
- Descripción del producto y el negocio: [qué hace el producto, para quién, cómo genera ingresos]
- Estado del producto: [pre-product-market fit / creciendo / escalando]
- Reto estratégico principal ahora mismo: [encontrar un nuevo segmento, defender el core business, expandir el modelo de monetización, entrar en un nuevo mercado, etc.]
- Tamaño del equipo de producto: [solo PM / PM + diseño / equipo completo]

Con ese contexto, dame:

1. EL BUSINESS MODEL CANVAS COMO HERRAMIENTA DE PRODUCTO
¿Por qué el Business Model Canvas es relevante para un product manager y no solo para el CEO o el equipo de estrategia? Explícame cómo los nueve bloques del Canvas se traducen en decisiones de producto concretas: cómo los segmentos de clientes definen el roadmap, cómo la propuesta de valor guía el diseño de features, cómo los canales de distribución afectan al diseño del producto, y cómo la estructura de costes e ingresos impacta en las decisiones de priorización.

2. MAPEAR EL MODELO DE NEGOCIO ACTUAL: EL CANVAS HOY
Ayúdame a mapear el modelo de negocio actual en los nueve bloques del Canvas. Para cada bloque, dame las preguntas que debo responder para completarlo correctamente: qué preguntar al CEO y al equipo de ventas, qué analizar en los datos del producto y qué observar en los comportamientos de los clientes. Al terminar el mapeo, ¿cuál es el bloque más débil o más incierto del Canvas actual?

3. IDENTIFICAR LAS HIPÓTESIS MÁS ARRIESGADAS
¿Cómo usar el Canvas para identificar las hipótesis más arriesgadas del modelo de negocio? Dame el proceso: cómo distinguir los hechos conocidos (lo que hemos validado) de las hipótesis (lo que asumimos pero no hemos probado), cómo priorizar las hipótesis por su impacto en el negocio y por la incertidumbre actual, y cuáles son las hipótesis que suelen ser las más arriesgadas en cada tipo de modelo de negocio (marketplace, SaaS, D2C, etc.).

4. DISEÑAR EXPERIMENTOS PARA VALIDAR LAS HIPÓTESIS
¿Cómo diseñar experimentos de producto para validar las hipótesis más arriesgadas del Canvas? Dame el proceso de lean experimentation aplicado al modelo de negocio: cómo formular la hipótesis en formato testeable, cómo diseñar el experimento mínimo que genera el aprendizaje (no siempre un MVP completo, a veces una landing page, una entrevista o una venta manual), qué métrica de éxito define si la hipótesis se confirma o se rechaza y cuánto tiempo y cuántos usuarios necesito para tener confianza en el resultado.

5. CANVAS ALTERNATIVES: CUANDO EL MODELO ACTUAL NO ESCALA
¿Cómo usar el Canvas para explorar modelos de negocio alternativos cuando el modelo actual está llegando a sus límites? Dame el proceso de innovation canvas: cómo generar variantes del modelo de negocio actual cambiando uno o dos bloques (un segmento diferente, un canal nuevo, un modelo de ingresos alternativo), cómo evaluar la viabilidad de cada variante antes de invertir recursos en validarla y cómo comunicar la exploración de nuevos modelos al equipo y a los stakeholders sin generar incertidumbre innecesaria.

6. EL CANVAS EN EL CONTEXTO COMPETITIVO
¿Cómo usar el Canvas para analizar el modelo de negocio de los competidores y encontrar espacios de diferenciación? Dame el proceso de competitive canvas analysis: cómo construir el Canvas de los dos o tres competidores principales a partir de información pública, cómo identificar los bloques donde mi modelo es estructuralmente diferente al del competidor y cómo esas diferencias crean ventajas o vulnerabilidades competitivas que el equipo de producto debe tener en cuenta en el roadmap.

7. EL CANVAS EN LA PRÁCTICA: CÓMO USARLO EN LAS REUNIONES DE ESTRATEGIA
¿Cómo integrar el Business Model Canvas en el proceso de planificación estratégica del equipo de producto? Dame el formato para la quarterly strategy review usando el Canvas: cómo usarlo para revisar qué ha cambiado en cada bloque en el último trimestre, cómo ligar los OKRs del equipo de producto a los bloques más críticos del Canvas y cómo usarlo como herramienta de comunicación con el board o los inversores para mostrar que el equipo tiene una visión estratégica clara del negocio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Usar el Business Model Canvas como herramienta operativa para identificar hipótesis arriesgadas y diseñar experimentos de validación.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Talent strategy como ventaja competitiva',
                'description'       => 'Diseña la estrategia de talento que convierte a las personas en el principal diferenciador competitivo: atracción, desarrollo y retención de los perfiles que nadie más puede tener.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en estrategia de talento y people strategy con experiencia en empresas donde el talento es el principal diferenciador competitivo. Necesito tu ayuda para diseñar una estrategia de talento que convierta a las personas en una ventaja competitiva sostenible, no solo en un recurso que gestionar.

Mi contexto:
- Tipo de empresa y sector: [describe brevemente el negocio]
- Tamaño de la organización: [número de empleados]
- Perfiles críticos para el negocio: [qué roles son los que más impacto tienen en el resultado]
- Estado actual de la estrategia de talento: [reactiva / sin estrategia clara / con algunos procesos / estrategia definida pero mal ejecutada]
- Mayor reto de talento ahora mismo: [atraer perfiles escasos, retener a los mejores, desarrollar talento interno, construir cultura en remoto, etc.]

Con ese contexto, dame:

1. LOS CRITICAL ROLES: IDENTIFICAR DÓNDE EL TALENTO ES UN MOAT
¿Cuáles son los roles en mi organización donde la excelencia individual crea una ventaja competitiva que la competencia no puede replicar fácilmente? Dame el proceso para identificar los critical roles: los puestos cuya vacante tendría un impacto desproporcionado en el negocio, los perfiles con habilidades escasas en el mercado y los que acumulan conocimiento institucional difícil de transferir. ¿Qué porcentaje de los roles de una organización son realmente críticos?

2. EMPLOYER BRANDING COMO VENTAJA DE ATRACCIÓN
¿Cómo construir una marca empleadora que atraiga a los mejores perfiles en mercados de talento competitivos? Dame la estrategia de employer branding: la propuesta de valor al empleado (EVP), los canales donde está presente el talento que busco, el contenido que conecta con los valores de ese perfil y cómo medir el impacto del employer branding en la calidad y el coste de la atracción. ¿Cuánto tiempo tarda en activarse el employer branding y cuándo tiene sentido invertir en él frente a invertir en compensación?

3. DESARROLLO DE TALENTO COMO DIFERENCIADOR INTERNO
¿Cómo construir un programa de desarrollo de talento que retenga a los mejores porque sienten que crecen más que en cualquier otro lugar? Dame la estrategia de desarrollo diferencial: los career paths claros con criterios de progresión objetivos, el mentoring y el sponsoring como herramientas de desarrollo de talento de alto potencial, los proyectos de stretch assignment que aceleran el crecimiento sin que el empleado tenga que cambiar de empresa y cómo medir el impacto del desarrollo en la retención de los top performers.

4. RETENCIÓN ASIMÉTRICA: NO RETENER A TODO EL MUNDO IGUAL
¿Cómo diseñar una estrategia de retención que concentre los recursos en los empleados que más importan sin desmotivar al resto? Dame el modelo de retención diferencial: cómo identificar a los empleados de alto impacto (no solo los de alto potencial, también los de alto desempeño actual), qué palancas de retención son más efectivas para cada perfil (compensación, proyectos, flexibilidad, desarrollo, reconocimiento) y cómo gestionar la salida de los empleados de bajo impacto de forma que libere espacio para el talento crítico.

5. CULTURA COMO FILTRO Y COMO MOTOR
¿Cómo usar la cultura como ventaja competitiva de talento: que atraiga a los que encajan y repela a los que no? Dame el proceso para definir la cultura de forma que sea operacional (no solo palabras en la pared): los comportamientos concretos que se premian y los que no se toleran, cómo evaluarlos en el proceso de selección, cómo reforzarlos en el onboarding y cómo mantenerlos mientras la empresa crece y contrata masivamente.

6. PEOPLE ANALYTICS: DECISIONES DE TALENTO BASADAS EN DATOS
¿Cómo usar los datos para tomar mejores decisiones de talento? Dame el modelo de people analytics básico para una empresa en crecimiento: las métricas de talento que predicen la retención (engagement, conexión con el manager, claridad de carrera), las métricas de impacto del desarrollo (tasa de promoción interna, tiempo hasta primera promoción), y cómo construir un early warning system para detectar el riesgo de fuga de talento crítico antes de que el empleado empiece a buscar.

7. EL ROI DE LA ESTRATEGIA DE TALENTO: CÓMO JUSTIFICARLO AL CEO
¿Cómo presentar el ROI de invertir en una estrategia de talento diferencial a un CEO que ve el coste del headcount pero no siempre el valor que genera? Dame el modelo de ROI del talento: el coste real de una vacante en un rol crítico (no solo el coste de selección, sino el impacto en productividad, en moral del equipo y en el cliente), el coste del turnover vs el coste de retener, y el impacto en el valor de la empresa de tener un equipo de talento diferencial frente a un equipo promedio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar una estrategia de talento diferencial que convierta a las personas en la principal ventaja competitiva de la organización.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => "Análisis de la industria: Porter's Five Forces aplicado",
                'description'       => "Aplica el modelo de las Cinco Fuerzas de Porter al análisis de tu industria para tomar decisiones estratégicas informadas: entender dónde está el poder en tu sector y cómo posicionarte para capturar más valor.",
                'prompt_content'    => <<<'PROMPT'
Eres un experto en estrategia corporativa y análisis de industrias con experiencia en el uso del marco de Porter's Five Forces para fundamentar decisiones de inversión, expansión y posicionamiento competitivo. Necesito que me ayudes a aplicar este modelo a mi industria de forma práctica y orientada a decisiones concretas.

Mi contexto:
- Industria o sector a analizar: [describe el sector: mercado geográfico, segmento específico]
- Posición de mi empresa en esa industria: [incumbente / nuevo entrante / proveedor / distribuidor]
- Decisión estratégica que quiero informar con este análisis: [entrar en el mercado, expandirse, defender la posición actual, decidir dónde competir, etc.]
- Información disponible: [fuentes de datos del sector que tengo acceso, informes, etc.]

Con ese contexto, dame:

1. FUERZA 1 - AMENAZA DE NUEVOS ENTRANTES
Analiza la amenaza de nuevos competidores en mi industria. Dame el análisis de las barreras de entrada: las economías de escala necesarias para competir, los requisitos de capital inicial, el acceso a canales de distribución, la lealtad de marca establecida, las regulaciones y licencias necesarias, y las ventajas en costes independientes de la escala (patentes, acceso a materias primas, localización). ¿Cuán alta es esta barrera en mi industria y está aumentando o disminuyendo? ¿Qué tipo de entrante representa la mayor amenaza?

2. FUERZA 2 - PODER DE NEGOCIACIÓN DE LOS PROVEEDORES
¿Cuánto poder tienen los proveedores en mi industria para imponer precios, condiciones o plazos? Analiza: la concentración de proveedores vs clientes, la disponibilidad de sustitutos para los inputs críticos, el coste de cambio de proveedor, la amenaza de integración hacia adelante del proveedor (que empiece a competir conmigo) y la importancia del sector como cliente para el proveedor. ¿Cómo puede mi empresa reducir el poder de los proveedores sin comprometer la calidad?

3. FUERZA 3 - PODER DE NEGOCIACIÓN DE LOS CLIENTES
¿Cuánto poder tienen los clientes para forzar la bajada de precios o el aumento de la calidad? Analiza: la concentración de clientes, el volumen de compra por cliente, el coste de cambio para el cliente, la disponibilidad de información del cliente sobre los precios y costes de la industria, y la amenaza de integración hacia atrás (que el cliente empiece a producir lo que yo le vendo). ¿Cómo puedo reducir el poder de los clientes sin perder la relación?

4. FUERZA 4 - AMENAZA DE PRODUCTOS O SERVICIOS SUSTITUTOS
¿Qué productos o tecnologías pueden satisfacer la misma necesidad que mi oferta y hacerla obsoleta? Dame el análisis de sustitutos: los sustitutos directos (mismo beneficio, diferente forma), los sustitutos indirectos (diferentes necesidades que compiten por el mismo presupuesto del cliente), el análisis precio-desempeño de los sustitutos actuales vs el mío y los sustitutos emergentes que podrían cambiar el sector en los próximos tres a cinco años. ¿Cómo me defiendo de la sustitución?

5. FUERZA 5 - RIVALIDAD ENTRE COMPETIDORES EXISTENTES
¿Cuán intensa es la competencia dentro de mi industria? Analiza: el número y tamaño relativo de los competidores, la tasa de crecimiento del sector (más lento = más competencia por cuota), los costes fijos altos (que fuerzan a competir en precio), la diferenciación de los productos, las barreras de salida (que mantienen a jugadores no rentables en el mercado) y las batallas de precio recientes. ¿Es esta una industria atractiva para competir o una guerra de posiciones desgastante?

6. SÍNTESIS ESTRATÉGICA: ¿DÓNDE ESTÁ EL PODER Y CÓMO CAPTURARLO?
Una vez completado el análisis de las cinco fuerzas, dame la síntesis estratégica: ¿cuál es el nivel de atractivo de la industria en general?, ¿en qué parte de la cadena de valor está concentrado el poder?, ¿qué posicionamiento estratégico (liderazgo en costes, diferenciación o nicho) es más defensible en este contexto competitivo? y ¿qué acciones concretas debería tomar mi empresa en los próximos 12 meses basándome en este análisis?

7. LIMITACIONES DEL MODELO Y CÓMO COMPLEMENTARLO
¿Cuáles son las limitaciones del análisis de las Cinco Fuerzas que debo tener en cuenta? Dame una perspectiva crítica: qué aspectos del entorno competitivo no captura bien el modelo de Porter (la velocidad del cambio tecnológico, los ecosistemas de plataformas, la competencia de empresas no tradicionales del sector), cómo complementarlo con otros marcos (PESTEL, Value Chain Analysis, Blue Ocean Strategy) y cuándo el análisis de las Cinco Fuerzas puede llevar a conclusiones incorrectas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => "Aplicar el modelo de Porter's Five Forces para analizar el atractivo competitivo de una industria y fundamentar decisiones estratégicas.",
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Propiedad intelectual como ventaja competitiva',
                'description'       => 'Diseña una estrategia de propiedad intelectual que proteja las innovaciones de tu empresa y cree barreras de entrada: patentes, marcas, secretos comerciales y derechos de autor como activos estratégicos.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado especializado en propiedad intelectual con enfoque estratégico en empresas de tecnología e innovación. Necesito tu ayuda para diseñar la estrategia de propiedad intelectual de mi empresa como un activo estratégico, no solo como una obligación legal.

Mi contexto:
- Tipo de empresa y sector: [tecnología, industria, consumo, servicios, etc.]
- Innovaciones o activos intelectuales que tengo o estoy desarrollando: [software, proceso, diseño, fórmula, marca, contenido, etc.]
- Estado actual de la PI: [sin protección formal / marcas registradas / alguna patente / PI bien estructurada]
- Modelo de negocio: [venta de producto, licencias, SaaS, servicios, etc.]
- Objetivo principal: [proteger de la copia, licenciar a terceros, crear barrera de entrada, preparar la empresa para una ronda de inversión o una venta]

Con ese contexto, dame:

1. EL INVENTARIO DE ACTIVOS INTELECTUALES
¿Cómo hacer el inventario de los activos intelectuales de mi empresa que merecen protección? Dame el proceso de IP audit: las cuatro categorías de PI (patentes, marcas, derechos de autor y secretos comerciales), qué activos pueden encajar en cada categoría en mi tipo de negocio y cómo identificar los activos que son críticos para el modelo de negocio vs los que son secundarios. ¿Con qué frecuencia debo revisar el inventario de PI?

2. PATENTES: CUÁNDO MERECEN LA INVERSIÓN
¿Cuándo tiene sentido solicitar una patente y cuándo no? Dame el análisis de la decisión de patentar: los requisitos de patentabilidad (novedad, actividad inventiva, aplicación industrial), el coste real de obtener y mantener una patente (honorarios de abogados, tasas oficiales en cada jurisdicción, coste del proceso de concesión), el tiempo desde la solicitud hasta la concesión, las alternativas a la patente (secreto comercial, lead time de innovación, efectos de red) y los casos en que la patente es la mejor opción y los que no lo es.

3. MARCAS: LA PI MÁS SUBESTIMADA
¿Por qué las marcas son a menudo el activo de PI más valioso y cómo construir una estrategia de marcas sólida? Dame el proceso de protección de marcas: cómo hacer la búsqueda de anterioridades antes de lanzar una marca, en qué jurisdicciones y clases de Niza registrar para proteger el negocio de forma efectiva, cómo monitorizar las infracciones y cómo gestionar el crecimiento internacional de la marca (marca de la UE, solicitud PCT para marcas, OAPI para África). ¿Cuánto vale una marca bien construida en una venta o en una ronda de inversión?

4. SECRETOS COMERCIALES: EL MOAT INVISIBLE
¿Cuándo es mejor proteger una innovación como secreto comercial que como patente? Dame el análisis de la decisión: qué tipo de innovaciones son más adecuadas para la protección como secreto comercial (procesos de producción, algoritmos, listas de clientes, know-how específico), cómo implementar las medidas de seguridad técnicas y contractuales necesarias para que la protección sea legalmente válida (NDA, acuerdos de confidencialidad con empleados y proveedores, acceso restringido a la información), y qué riesgos tiene la estrategia de secreto comercial vs la patente.

5. LA PI EN LAS RELACIONES CON EMPLEADOS, PROVEEDORES Y CLIENTES
¿Cómo gestionar la PI en los contratos con empleados, freelancers, proveedores y clientes? Dame el marco contractual básico: la cláusula de cesión de derechos en los contratos de empleo y de servicios (quién es el titular de lo que se crea durante la relación), los acuerdos de confidencialidad (qué deben incluir para ser efectivos), los joint development agreements (cómo gestionar la PI cuando se co-desarrolla con un partner o cliente) y los acuerdos de licencia (cuándo licenciar en lugar de ceder la PI).

6. PI Y FINANCIACIÓN: CÓMO VALORAR Y COMUNICAR LOS ACTIVOS DE PI
¿Cómo afecta la estrategia de PI a la valoración de la empresa en una ronda de inversión o en una due diligence de M&A? Dame el proceso de PI due diligence: qué busca un inversor o un comprador en el portfolio de PI de una empresa, cómo valorar los activos de PI (métodos de royalties, de mercado y de costes), los red flags que hacen que la PI sea un problema en una venta (derechos mal asignados, licencias problemáticas, PI de fundadores anteriores no cedida) y cómo preparar el data room de PI.

7. ESTRATEGIA DE PI INTERNACIONAL: PROTEGER EN MERCADOS CLAVE
¿Cómo diseñar una estrategia de PI internacional que sea efectiva sin arruinar el presupuesto? Dame el proceso de priorización geográfica: cómo decidir en qué países registrar patentes y marcas (los mercados donde opero, los mercados donde operan mis competidores y los mercados donde podría licenciar), los mecanismos internacionales de protección (PCT para patentes, Sistema de Madrid para marcas, Convenio de La Haya para diseños) y cuánto suele costar una estrategia de PI internacional para una startup o una empresa mediana.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar una estrategia de propiedad intelectual que proteja las innovaciones de la empresa y cree barreras de entrada sostenibles.',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer success como moat: retención que la competencia no puede replicar',
                'description'       => 'Construye un modelo de Customer Success tan efectivo que se convierta en una ventaja competitiva real: cuando los clientes se quedan no por el contrato sino porque el valor que reciben no pueden encontrarlo en otro lugar.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Customer Success strategy con experiencia en empresas SaaS donde el CS es un diferenciador competitivo y no solo una función de soporte. Necesito tu ayuda para construir un modelo de Customer Success que sea tan efectivo que se convierta en una ventaja que la competencia no pueda replicar fácilmente.

Mi contexto:
- Tipo de producto o servicio: [SaaS / plataforma / servicio recurrente]
- Perfil de clientes: [tamaño, sector, nivel de sofisticación técnica]
- Modelo de CS actual: [sin CS formal / CS reactivo / CS proactivo básico / CS maduro]
- NRR actual si lo conoces: [Net Revenue Retention aproximado]
- Principal reto de CS: [alta tasa de churn en el primer año, expansión insuficiente, CS visto como soporte y no como función estratégica, etc.]

Con ese contexto, dame:

1. QUÉ HACE QUE EL CS SEA UN MOAT Y NO SOLO UN COSTE
Explícame la diferencia entre el CS como función de soporte (resuelve problemas, responde tickets, renueva contratos) y el CS como moat competitivo (el cliente se queda porque el valor que recibe gracias al equipo de CS es mayor que el que podría recibir cambiándose al competidor). Dame ejemplos de empresas donde el CS es un diferenciador competitivo real y qué tienen en común: Gainsight, Intercom, Salesforce. ¿Cuál es la condición necesaria para que el CS sea un moat?

2. EL MODELO DE ÉXITO DEL CLIENTE: DEFINIR EL VALOR QUE DEBES ENTREGAR
¿Cómo definir qué significa el éxito para cada segmento de clientes y cómo asegurarte de que el equipo de CS lo entrega de forma consistente? Dame el proceso de customer success planning: la definición de los success outcomes para cada perfil de cliente (qué métricas de negocio del cliente debe mover el producto), el success plan por cliente (los hitos de adopción y valor en el primer año) y cómo hacer el seguimiento de los success outcomes de forma sistemática sin que se convierta en un proceso burocrático.

3. ONBOARDING DIFERENCIAL: EL PRIMER VALOR EN EL MENOR TIEMPO
¿Cómo diseñar un proceso de onboarding tan efectivo que el cliente sienta que ha tomado la mejor decisión de su vida en los primeros 30 días? Dame la arquitectura del onboarding diferencial: el kickoff que define los success outcomes del cliente, el plan de implementación con hitos de valor claramente definidos, las intervenciones proactivas del CSM en los momentos de mayor riesgo de abandono y cómo medir el time-to-first-value para cada segmento de clientes.

4. EL PROGRAMA DE ADOPCIÓN PROFUNDA
¿Cómo conseguir que los clientes usen el producto de forma suficientemente profunda para que cambiarse al competidor sea costoso? Dame la estrategia de adopción profunda: cómo identificar las features que generan stickiness (las que crean datos, hábitos o dependencias que son difíciles de migrar), cómo diseñar el journey de adopción para guiar al cliente desde el uso básico hasta el uso avanzado, y cómo usar el equipo de CS para acelerar la adopción profunda en los clientes con mayor potencial de expansión.

5. EXPANSION REVENUE: EL CS QUE GENERA MÁS INGRESOS QUE VENDE
¿Cómo construir un modelo de CS donde la expansión del cliente sea el resultado natural del éxito entregado? Dame la estrategia de expansion revenue desde CS: cuándo introducir la conversación de upsell o cross-sell (cuando el cliente ha alcanzado el success milestone, no antes), cómo identificar las señales de expansión en los datos de uso, el proceso de la conversación de expansión que no parezca una venta sino una recomendación estratégica, y cómo compensar al equipo de CS para que la expansión sea una responsabilidad suya sin que genere conflicto con el equipo de ventas.

6. LA COMUNIDAD DE CLIENTES COMO MOAT DEFINITIVO
¿Cómo construir una comunidad de clientes que refuerce el moat de CS? Dame la estrategia de community building: los formatos de comunidad que funcionan en B2B (Slack privado, foro, eventos de clientes, programas de early adopters), cómo hacer que la comunidad genere valor entre los propios clientes (no solo del vendor al cliente), cómo usar la comunidad para co-crear el roadmap del producto y cómo medir el impacto de la comunidad en la retención y en la adquisición (clientes que vienen por recomendación de la comunidad).

7. MÉTRICAS DEL CS COMO MOAT: MÁS ALLÁ DEL CHURN
¿Qué métricas miden si el CS es realmente un moat competitivo y no solo una función de retención? Dame las métricas del CS diferencial: el NRR (Net Revenue Retention) y cómo compararlo con el benchmark de la industria, el Customer Health Score como predictor de churn y expansión, el logo retention por cohorte de onboarding (los clientes que pasaron por el nuevo proceso se quedan más), el referral rate de clientes (la mejor señal de que el CS ha creado valor real) y el win rate en deals donde el equipo de CS participa en la conversación comercial.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir un modelo de Customer Success tan efectivo que se convierta en una ventaja competitiva que la competencia no pueda replicar.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Nicho y posicionamiento: el freelance que no tiene competencia',
                'description'       => 'Define tu nicho con tanta precisión que te conviertas en el referente inevitable para ese segmento: cómo elegir el nicho correcto, posicionarte como el experto y cobrar en consecuencia.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de negocio especializado en estrategia de posicionamiento para freelancers y profesionales independientes. Necesito tu ayuda para definir mi nicho con la precisión suficiente para convertirme en el referente inevitable en ese segmento y dejar de competir por precio con todo el mundo.

Mi contexto:
- Tipo de servicio freelance que ofrezco: [copywriting, desarrollo, diseño, consultoría, marketing, etc.]
- Especialización actual si la tienes: [generalista / especializado en algo concreto]
- Proyectos más satisfactorios que has hecho: [describe dos o tres donde sentiste que hiciste un trabajo excelente]
- Clientes con los que has trabajado: [sectores, tamaños, tipos de empresa]
- Mayor problema con el posicionamiento actual: [compiten por precio, los clientes no entienden tu valor específico, recibes proyectos de todo tipo y de ninguno eres el experto, etc.]

Con ese contexto, dame:

1. POR QUÉ EL GENERALISMO ES LA TRAMPA MÁS CARA PARA UN FREELANCE
Explícame los problemas estructurales de ser un freelance generalista: por qué es más difícil de vender (el cliente no sabe si eres la mejor opción para su problema específico), por qué fuerza a competir por precio (si eres igual que otros, el precio es el único criterio), por qué agota (cada proyecto es diferente y no puedes aprovechar lo aprendido), y por qué paradójicamente un nicho más estrecho genera más demanda. Dame ejemplos reales de freelancers que ganaron más especializándose que siendo generalistas.

2. CÓMO IDENTIFICAR EL NICHO CORRECTO
¿Cómo elegir el nicho que sea al mismo tiempo rentable, diferenciado y que yo quiera trabajar? Dame el proceso de identificación del nicho en tres dimensiones: la dimensión de la habilidad (en qué soy objetivamente mejor que la mayoría), la dimensión del mercado (en qué sector o tipo de cliente genera más valor mi habilidad) y la dimensión del interés (dónde quiero pasar mi tiempo y con qué tipos de problemas disfruto). Muéstrame cómo combinar las tres dimensiones para encontrar el nicho que está en la intersección de las tres.

3. LA PRUEBA DEL NICHO: ¿ES LO SUFICIENTEMENTE ESPECÍFICO?
¿Cómo saber si mi nicho es suficientemente específico para generar un posicionamiento diferencial? Dame el test del nicho: las cinco preguntas que debo responder para saber si el nicho es correcto (¿hay empresas que buscan exactamente este perfil?, ¿puedo nombrar los cinco principales problemas que tienen esas empresas sin pensar?, ¿hay suficiente mercado para llegar a mis objetivos de ingresos sin necesitar miles de clientes?, ¿puedo construir autoridad en este nicho en seis meses?, ¿estaría dispuesto a rechazar proyectos fuera de este nicho?).

4. EL POSICIONAMIENTO DEL EXPERTO: CÓMO COMUNICAR EL NICHO
¿Cómo comunicar el nicho de forma que el cliente del perfil correcto llegue solo y el cliente equivocado no pierda mi tiempo? Dame la arquitectura de mensajes del freelance especializado: el tagline que define en una frase quién soy y para quién, la descripción del cliente ideal (ICP) que uso en mi LinkedIn, web y propuestas, el discurso de elevator pitch para el networking y cómo comunicar la especialización sin cerrarte puertas en los primeros meses de transición al nicho.

5. CONSTRUIR AUTORIDAD EN EL NICHO EN 6 MESES
¿Cómo convertirme en el referente del nicho en seis meses si parto de cero? Dame el plan de content authority: los formatos de contenido más efectivos para el nicho que elija (artículos largos, casos de estudio, newsletter, LinkedIn, podcast, colaboraciones con medios del sector), la cadencia realista para un freelance que también tiene que ejecutar proyectos, cómo medir si el contenido está generando autoridad (no seguidores, sino peticiones de colaboración entrantes) y cuándo sé que la autoridad en el nicho está funcionando.

6. EL PRICING DEL ESPECIALISTA: COBRAR MÁS POR SER EL MEJOR EN ALGO CONCRETO
¿Cuánto más puede cobrar un freelance especializado frente a un generalista en el mismo tipo de trabajo? Dame el marco del pricing del experto: por qué el especialista puede cobrar tres o cuatro veces más que el generalista por el mismo tipo de trabajo, cómo comunicar el precio premium sin que parezca arrogancia, cuándo estás listo para subir los precios (la señal es que el cliente acepta el precio sin negociar) y cómo manejar a los clientes actuales cuando subes los precios al reposicionarte.

7. LA TRANSICIÓN: CÓMO PASAR DE GENERALISTA A ESPECIALISTA SIN MORIR EN EL INTENTO
¿Cómo hacer la transición al nicho sin quedarme sin clientes durante el proceso? Dame el plan de transición en tres fases: la fase de exploración (aceptar proyectos de nicho mientras mantienes los generalistas para pagar facturas), la fase de concentración (reducir los proyectos generalistas y buscar activamente proyectos del nicho), y la fase de foco total (rechazar todo lo que no sea el nicho y vivir de él). ¿Cuánto tiempo suele tardar esta transición y cómo saber si el nicho que elegí no tiene mercado suficiente?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Definir el nicho correcto y posicionarse como el referente inevitable en ese segmento para cobrar más y trabajar con mejores clientes.',
                'vote_score'        => 49,
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
