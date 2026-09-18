<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills294Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing systems thinking: ver el funnel completo para optimizar sin destruir',
                'description'      => 'Aplica el pensamiento sistémico al marketing para encontrar los puntos de palanca que mejoran resultados sin romper lo que funciona.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de marketing con formación en pensamiento sistémico y experiencia en empresas donde el marketing opera como un sistema interconectado, no como una colección de canales independientes. Necesito aplicar el pensamiento sistémico a mi estrategia de marketing para identificar los puntos de palanca reales y evitar optimizaciones locales que destruyen el sistema completo.

Contexto de mi empresa:
Trabajo en marketing en [empresa, sector, modelo de negocio]. Nuestro funnel va desde [describe los canales de adquisición] hasta [describe el proceso de conversión y retención]. El problema que tenemos es que [optimizamos cada canal por separado sin ver el impacto en los demás / subimos la inversión en un canal y los resultados no escalan como esperamos / hay contradicciones entre objetivos de diferentes canales / el equipo de marketing trabaja en silos].

Lo que necesito:

1. EL MAPA DEL SISTEMA DE MARKETING
Ayúdame a construir el mapa del sistema de marketing de mi empresa. Define: cómo representar el funnel completo como sistema con entradas, procesos, salidas y retroalimentación, cuáles son los bucles de refuerzo en mi marketing (qué ciclos virtuosos pueden crear crecimiento exponencial: más clientes satisfechos generan más referencias que generan más clientes), cuáles son los bucles de compensación que limitan el crecimiento (qué fricción aparece cuando escalo: el costo de adquisición sube, la calidad de los leads baja, el equipo de ventas se satura), y cuáles son los retrasos del sistema (cuánto tiempo tarda en verse el efecto de una acción de marketing en los resultados de negocio).

2. OPTIMIZACIÓN LOCAL VERSUS OPTIMIZACIÓN GLOBAL
El peor error en marketing es optimizar una parte del sistema a expensas del todo. Dame tres ejemplos concretos de cómo la optimización local destruye el sistema: bajar el CPA de adquisición sin tener en cuenta la calidad de los leads que llegan a ventas, maximizar el volumen de leads sin considerar el impacto en el tiempo de respuesta del equipo de ventas, y aumentar el volumen de email enviados sin considerar el impacto en la reputación del dominio y la entregabilidad. Para cada ejemplo: cómo detectar que está ocurriendo y cómo rediseñar el incentivo para optimizar el sistema completo.

3. LOS PUNTOS DE PALANCA EN EL SISTEMA DE MARKETING
Donella Meadows identificó los puntos de palanca de mayor impacto en cualquier sistema. Aplícalos al marketing: ¿dónde están los puntos de palanca de alto impacto en un sistema de marketing típico? (hipótesis: la propuesta de valor que atraviesa todos los canales, la calificación de leads en el punto de entrada, el proceso de activación en los primeros siete días). Ayúdame a identificar el punto de palanca de mayor impacto en mi sistema específico haciendo las preguntas correctas sobre mi situación.

4. INDICADORES DE SISTEMA VERSUS INDICADORES DE CANAL
Los KPIs de canal (CTR, CPC, tasa de apertura) son indicadores locales que no miden la salud del sistema. Define los indicadores de sistema que debo monitorizar: el tiempo desde el primer contacto hasta el primer euro de ingreso (time-to-revenue como indicador de eficiencia del sistema completo), el valor de vida del cliente adquirido por canal (no solo el volumen de adquisición), la tasa de referencia orgánica como indicador de satisfacción sistémica, y el ratio entre coste de adquisición y valor de vida por cohorte de adquisición.

5. REDISEÑAR EL SISTEMA CUANDO LOS SÍNTOMAS APARECEN
¿Cómo diagnostico un problema sistémico en marketing en lugar de buscar la causa local? Define el proceso de diagnóstico: cuándo un problema de rendimiento es un síntoma de un problema sistémico (la misma causa produce síntomas en múltiples canales simultáneamente), cómo usar el mapa del sistema para rastrear el problema hasta su causa raíz, y las cuatro preguntas que hacen visible el problema sistémico que todos los canales están mirando desde su propio ángulo.

6. PENSAMIENTO SISTÉMICO EN LA PLANIFICACIÓN DE MARKETING
¿Cómo integro el pensamiento sistémico en el proceso de planificación anual? Define: cómo hacer el mapa del sistema antes de definir los objetivos del año (no al revés), cómo identificar las restricciones del sistema que van a limitar el crecimiento antes de comprometer presupuesto, y cómo diseñar el plan de marketing como un conjunto de experimentos sistémicos en lugar de como un portafolio de campañas independientes.

Sé específico con herramientas de mapeo de sistemas (diagramas de flujo causal, mapas de arquetipos sistémicos) que un marketero no técnico pueda usar. El objetivo es que pase de pensar en campañas a pensar en sistemas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Aplicar pensamiento sistémico al marketing para encontrar puntos de palanca reales',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Systems design: arquitectar soluciones que escalan sin romper',
                'description'      => 'Domina el diseño de sistemas distribuidos para construir arquitecturas que escalan con la demanda sin acumular deuda técnica.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software con experiencia en el diseño de sistemas distribuidos a escala, incluyendo el diseño de plataformas que pasan de miles a millones de usuarios. Necesito mejorar mis habilidades en systems design para construir arquitecturas que escalan de forma sostenible y que resisten el paso del tiempo.

Contexto de mi situación:
Soy un [senior developer / tech lead / arquitecto] trabajando en [describe el sistema: plataforma SaaS, API, sistema de procesamiento de datos, aplicación de tiempo real, etc.]. Los desafíos de escala que anticipo son [crecimiento de usuarios, aumento de volumen de datos, necesidad de alta disponibilidad, requisitos de latencia baja, etc.].

Lo que necesito:

1. EL FRAMEWORK DE SYSTEMS DESIGN
Define el proceso mental que aplico al diseñar cualquier sistema desde cero: cómo clarificar los requisitos funcionales y no funcionales antes de dibujar ningún diagrama (las preguntas que siempre hago: escala esperada, patrones de lectura y escritura, consistencia requerida, latencia aceptable, disponibilidad objetivo), cómo hacer la estimación de capacidad (back-of-the-envelope calculations) para guiar las decisiones de arquitectura, y cuándo usar un monolito versus microservicios (la respuesta honesta que no depende de la moda tecnológica del momento).

2. LOS COMPONENTES FUNDAMENTALES Y CUÁNDO USARLOS
Para cada componente de sistemas explica cuándo usarlo y cuándo no: load balancer (L4 vs L7, algoritmos de distribución, health checks), caché (Redis vs Memcached, estrategias de invalidación, cache-aside vs write-through vs write-behind), cola de mensajes (cuándo usar Kafka versus RabbitMQ versus SQS, garantías de entrega, idempotencia de consumidores), base de datos (cuándo usar SQL versus NoSQL, sharding versus replicación, lectura desde réplicas), y CDN (qué cachear, TTL, invalidación de caché de assets). Para cada componente: el caso de uso ideal, el error más común y la trampa a evitar.

3. PATRONES DE DISEÑO PARA ESCALA
Explica y compara los patrones de diseño más importantes para sistemas a escala: CQRS (separación de comandos y consultas) con sus ventajas y complejidad añadida, event sourcing como alternativa a la mutación de estado, saga pattern para transacciones distribuidas sin two-phase commit, circuit breaker para resiliencia ante fallos de dependencias, y bulkhead para aislar fallos entre componentes. Para cada patrón: cuándo aplicarlo, cuándo es sobreingeniería y un ejemplo concreto de implementación.

4. CONSISTENCIA, DISPONIBILIDAD Y TOLERANCIA A PARTICIONES
El teorema CAP es real pero mal entendido. Explica: qué significa cada garantía en la práctica (no solo la teoría), por qué casi siempre el trade-off real es entre consistencia eventual y consistencia fuerte (no entre CA y CP), cómo elegir el nivel de consistencia correcto según el caso de uso (transacciones financieras versus feeds sociales versus contadores de visitas), y cómo diseñar sistemas que degradan de forma elegante cuando hay partición de red.

5. DISEÑAR PARA EL FALLO
Los sistemas a escala fallan. La pregunta es si el fallo es graceful o catastrófico. Define el checklist de resiliencia: cómo diseñar para que cada componente falle de forma independiente sin cascada de fallos, la estrategia de retry con backoff exponencial y jitter, cómo usar timeouts en cada llamada de red (el error más costoso: no tenerlos), cómo diseñar los health checks que detectan degradación antes del fallo, y cómo hacer chaos engineering básico para descubrir fragilidades antes de que lo haga la producción.

6. LA ENTREVISTA DE SYSTEMS DESIGN: CÓMO COMUNICAR TU ARQUITECTURA
En entrevistas técnicas de empresas grandes el systems design es el diferencial. Define el proceso de los cuarenta y cinco minutos: cómo clarificar los requisitos en los primeros cinco minutos, cómo hacer la estimación de capacidad en cinco minutos, cómo dibujar el diseño de alto nivel en diez minutos antes de entrar en detalles, qué componentes profundizar según las señales del entrevistador, y cómo presentar los trade-offs de tu diseño de forma que demuestres madurez de ingeniería (no hay diseño perfecto, hay diseños que maximizan los trade-offs correctos para este caso).

Dame un ejemplo de walkthrough completo de un sistema real: diseña un servicio de acortamiento de URLs con alta disponibilidad y bajo tiempo de respuesta. Aplica todos los principios anteriores.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar arquitecturas de sistemas que escalan de forma sostenible',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño sistémico: pensar en sistemas de diseño, no en pantallas individuales',
                'description'      => 'Construye y gestiona sistemas de diseño que garantizan consistencia, velocidad y calidad a escala en cualquier organización.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un design systems lead con experiencia construyendo y evolucionando sistemas de diseño en empresas de producto digital, desde startups en crecimiento hasta organizaciones con decenas de equipos de diseño y desarrollo. Necesito construir o mejorar el sistema de diseño de mi organización y cambiar la mentalidad del equipo de pensar en pantallas a pensar en sistemas.

Contexto de mi equipo:
Trabajo como [diseñador senior / design lead / design system owner] en una empresa con [número de diseñadores y desarrolladores]. Actualmente [no tenemos sistema de diseño y cada diseñador trabaja con sus propios estilos / tenemos un Figma library desactualizado que nadie usa / tenemos un sistema de diseño básico pero los desarrolladores no lo adoptan]. El mayor problema es [inconsistencia visual entre productos / tiempo perdido rediseñando componentes ya diseñados / fricción entre diseño y desarrollo].

Lo que necesito:

1. QUÉ ES UN SISTEMA DE DISEÑO Y QUÉ NO ES
Desmonta los mitos más comunes: un sistema de diseño no es solo una librería de componentes de Figma, no es solo un conjunto de tokens de diseño, no es un proyecto de diseño más. Define qué es un sistema de diseño completo: los principios de diseño (la capa de por qué), los tokens de diseño (la capa de qué: colores, tipografía, espaciado, sombras), los componentes de UI (la capa de cómo se ve), los patrones de interacción (la capa de cómo se usa), la documentación (la capa de cómo se entiende), y el proceso de gobierno (la capa de cómo evoluciona). Para cada capa: qué incluye y quién es responsable.

2. TOKENS DE DISEÑO: EL LENGUAJE COMPARTIDO
Los tokens de diseño son el contrato entre diseño y desarrollo. Define: la jerarquía de tokens (primitivos como hex de colores, semánticos como color-brand-primary, específicos de componente como button-background-color), cómo nombrarlos para que sean agnósticos de plataforma y de implementación, cómo mantener la sincronización entre Figma y el código (herramientas: Style Dictionary, Theo, Tokens Studio), y cómo versionar los tokens para que los cambios no rompan el sistema sin aviso.

3. CONSTRUCCIÓN DE COMPONENTES A ESCALA
Define el proceso de creación de componentes que funciona a escala: cómo decidir qué merece ser un componente (regla de tres: si aparece tres veces, es un componente), la anatomía de un componente bien documentado (propósito, cuándo usar, cuándo no usar, variantes, estados, accesibilidad, tokens usados), cómo gestionar la variabilidad sin explotar la cantidad de componentes (composición en lugar de proliferación), y cómo mantener los componentes actualizados cuando la marca o los requisitos evolucionan.

4. ADOPCIÓN: EL PROBLEMA REAL DE LOS SISTEMAS DE DISEÑO
El sistema de diseño más hermoso del mundo que nadie usa vale cero. Define la estrategia de adopción: cómo hacer el onboarding de nuevos diseñadores y desarrolladores al sistema (documentación viva, no PDF), cómo medir la adopción del sistema (porcentaje de componentes de producción que vienen del sistema versus construidos a mano), cómo gestionar las peticiones de excepción (el componente "que solo necesitamos esta vez" que termina proliferando), y cómo hacer que el sistema sea la opción más fácil, no la más difícil.

5. GOBIERNO Y EVOLUCIÓN DEL SISTEMA
Un sistema de diseño que no evoluciona muere. Define el modelo de gobierno: quién puede proponer cambios al sistema (cualquiera) versus quién puede aprobarlos (el equipo de design systems), el proceso de contribución (de la petición de feature al componente en producción), cómo gestionar la deprecación de componentes sin romper los productos que los usan, y cómo publicar un changelog del sistema que comunique los cambios de forma que los equipos lo entiendan y lo valoren.

6. SISTEMAS DE DISEÑO MULTI-MARCA Y MULTI-PRODUCTO
¿Cómo diseño un sistema que sirva a múltiples marcas o múltiples productos con identidades visuales distintas pero estructura compartida? Define la arquitectura de theming: una base de componentes compartida, tokens semánticos que se redefinen por tema, y cómo mantener la coherencia estructural permitiendo la diferenciación visual. Usa como ejemplo cómo una empresa con cuatro marcas diferenciadas puede compartir el ochenta por ciento de la infraestructura de diseño.

Incluye herramientas específicas recomendadas, ejemplos de nomenclatura de tokens y el proceso de la primera semana para alguien que empieza a construir un sistema de diseño desde cero.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir y gestionar un sistema de diseño que garantiza consistencia a escala',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales systems: construir el proceso comercial que funciona sin el héroe individual',
                'description'      => 'Diseña el sistema de ventas que convierte el talento individual en un proceso replicable, escalable y predecible.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director comercial con experiencia en la transformación de equipos de ventas basados en el talento individual hacia modelos de venta basados en sistema y proceso. Necesito diseñar el sistema comercial que permita escalar las ventas sin depender de unos pocos vendedores estrella.

Contexto de mi equipo:
Tengo un equipo de [número] comerciales. Actualmente el [sesenta al ochenta] por ciento de las ventas las hace un solo vendedor o dos. El proceso de ventas [es diferente según el vendedor / no está documentado / los nuevos tardan mucho en ser productivos / cuando se va un vendedor bueno nos quedamos sin saber qué hacía diferente]. El objetivo es [escalar de N a N*3 en ingresos sin triplicar el equipo / reducir la dependencia de los top performers / hacer predecibles los ingresos].

Lo que necesito:

1. EL SISTEMA DE VENTAS: QUÉ ES Y QUÉ NO ES
Un sistema de ventas no es un CRM, no es un script rígido, no es matar la creatividad individual. Define qué es un sistema de ventas efectivo: los procesos documentados que capturan las mejores prácticas del equipo, los criterios de decisión compartidos en cada etapa del ciclo, los materiales de habilitación que reducen el tiempo de preparación, las métricas de proceso que predicen los resultados antes de que ocurran, y el ritmo de gestión que mantiene a todos alineados. Para cada elemento: qué lo hace funcionar y cuál es el error más común al implementarlo.

2. DOCUMENTAR EL PROCESO QUE GANA: EL SALES PLAYBOOK
El playbook de ventas es el manual que captura lo que hacen los mejores vendedores. Define cómo construirlo: cómo entrevistar a los top performers para extraer lo que hacen diferente (las preguntas que revelan el proceso implícito que ellos ni saben que tienen), qué incluye el playbook mínimo viable (perfil del cliente ideal, proceso de cualificación, manejo de objeciones más comunes, secuencia de seguimiento, criterios de progresión entre etapas, templates de email y llamada), y cómo mantener el playbook vivo (actualización mensual con lo que aprende el equipo).

3. CUALIFICACIÓN SISTEMÁTICA: FILTRAR MEJOR PARA CERRAR MÁS
La mayor fuente de ineficiencia en ventas es invertir tiempo en prospectos que no van a comprar. Define el sistema de cualificación que funciona: el framework de cualificación elegido (BANT, MEDDIC, SPICED) y cómo adaptarlo a mi proceso específico, los criterios de entrada y salida de cada etapa del pipeline (qué debe ser verdad para pasar de discovery a propuesta, de propuesta a negociación, de negociación a cierre), y cómo el CRM refleja los criterios de cualificación para que el pipeline sea una foto real y no una lista de deseos.

4. HABILITACIÓN DE VENTAS: LOS MATERIALES QUE MULTIPLICAN AL EQUIPO
El vendedor promedio pasa el cuarenta por ciento de su tiempo buscando o creando materiales. Define el sistema de habilitación: los materiales que deben existir para cada etapa del ciclo (email de prospección, deck de presentación por segmento, hoja de batalla por competidor, calculadora de ROI, casos de éxito por industria), cómo organizarlos para que el vendedor los encuentre en menos de dos minutos, y cómo medir si los materiales se usan y si impactan en la tasa de conversión.

5. RITMO DE GESTIÓN: LAS REUNIONES QUE MANTIENEN EL SISTEMA VIVO
El sistema de ventas se mantiene con un ritmo de gestión consistente. Define la cadencia mínima viable: el one-on-one semanal del manager con cada vendedor (qué se revisa, qué preguntas hace el manager), la reunión de pipeline semanal del equipo (cómo revisarla para que dure treinta minutos y sea útil, no un interrogatorio), el forecast mensual (cómo construirlo y por qué es diferente del pipeline), y la revisión trimestral del proceso (cómo saber si el sistema está funcionando o si necesita ajuste).

6. INCORPORAR A UN NUEVO VENDEDOR EN EL SISTEMA
La prueba de fuego de un sistema de ventas es cuánto tarda un nuevo vendedor en ser productivo. Define el proceso de onboarding comercial: el plan de noventa días por semana (qué aprende, a quién acompaña, qué métricas debe alcanzar), el criterio de graduación de cada etapa (cuándo un junior puede gestionar su propio pipeline, cuándo un mid puede llevar cuentas estratégicas), y cómo el playbook y los materiales de habilitación reducen ese tiempo a la mitad respecto a un onboarding sin sistema.

Este prompt es para un director comercial que quiere que las ventas sean un sistema predecible, no una apuesta al talento individual. Escribe con ejemplos concretos de cada elemento del sistema.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir el sistema comercial que escala las ventas sin depender de individuos',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product systems thinking: consecuencias de segundo orden en las decisiones de producto',
                'description'      => 'Aplica el pensamiento sistémico al producto para anticipar efectos no deseados y tomar decisiones con visión completa del sistema.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager con formación en pensamiento sistémico y experiencia en productos digitales complejos donde las decisiones tienen consecuencias no evidentes a primera vista. Necesito aplicar el pensamiento sistémico a mis decisiones de producto para anticipar los efectos de segundo y tercer orden antes de que se conviertan en problemas.

Contexto de mi producto:
Trabajo como PM en [describe el producto: marketplace, SaaS, red social, plataforma de contenido, etc.]. Las decisiones de producto que más me preocupan son [añadir una funcionalidad que puede canibalizar otra / cambiar el modelo de precios / modificar el algoritmo de recomendación / añadir notificaciones / etc.].

Lo que necesito:

1. EFECTOS DE SEGUNDO ORDEN: POR QUÉ LAS DECISIONES EVIDENTES TIENEN CONSECUENCIAS INESPERADAS
Define qué son los efectos de segundo y tercer orden en el contexto de producto: cómo una decisión que resuelve el problema A puede crear el problema B en otra parte del sistema, por qué las soluciones intuitivas a los síntomas suelen empeorar las causas raíz (el arquetipo de "fixes that fail" de Senge), y tres ejemplos históricos de decisiones de producto de grandes plataformas que tuvieron consecuencias sistémicas inesperadas (likes en redes sociales, infinite scroll, notificaciones push agresivas). Para cada ejemplo: qué efectos de segundo orden ocurrieron y cómo podrían haberse anticipado.

2. HERRAMIENTAS DE PENSAMIENTO SISTÉMICO PARA PM
Define las herramientas concretas que un PM puede usar sin formación especializada en teoría de sistemas: el diagrama causal en bucle (cómo dibujarlo en quince minutos antes de tomar una decisión, qué preguntas responde), el pre-mortem sistémico (imaginar que la decisión fracasó y trazar hacia atrás las causas del fracaso), el mapa de stakeholders como sistema (no como lista, sino como red de relaciones y dependencias), y el análisis de arquetipos sistémicos más comunes en producto (límites al crecimiento, escalada, desplazamiento de carga). Para cada herramienta: cuándo usarla y cómo.

3. EL PROCESO DE DECISIÓN SISTÉMICA EN PRODUCTO
Define el proceso de cinco pasos para tomar decisiones de producto con perspectiva sistémica: primero mapear el sistema afectado (quiénes son los actores, cuáles son las relaciones, cuáles son los bucles de feedback), segundo identificar los efectos de primer orden (el efecto inmediato y evidente de la decisión), tercero explorar los efectos de segundo orden (qué cambia como consecuencia de los efectos de primer orden), cuarto identificar los bucles de refuerzo que la decisión puede amplificar (positivos y negativos), y quinto definir los indicadores de sistema que monitorizar después del lanzamiento para detectar efectos no anticipados.

4. CASOS PRÁCTICOS DE PENSAMIENTO SISTÉMICO EN PRODUCTO
Aplica el análisis sistémico a estas tres decisiones de producto comunes: añadir un sistema de notificaciones push para aumentar el engagement, reducir el tiempo de respuesta mínimo requerido de los vendedores en un marketplace, y añadir un modelo de suscripción premium a un producto freemium. Para cada decisión: dibuja el diagrama causal, identifica los efectos de segundo orden más probables y define los indicadores de alerta temprana.

5. DISEÑO DE FUNCIONALIDADES CON PERSPECTIVA SISTÉMICA
¿Cómo cambio el proceso de diseño de funcionalidades para incluir la perspectiva sistémica sin ralentizarlo? Define: las preguntas sistémicas que debo hacer antes de escribir el primer PRD (¿a quién beneficia y a quién perjudica esta funcionalidad?, ¿qué comportamiento puede incentivar que no queremos?, ¿cómo cambia el equilibrio entre los actores del sistema?), cómo incluir el mapa sistémico en el documento de especificación de producto, y cuándo es suficiente con el análisis informal y cuándo merece un taller de mapeo sistémico con el equipo completo.

6. PENSAMIENTO SISTÉMICO EN LA PRIORIZACIÓN
El backlog de producto es también un sistema. Define: cómo usar el pensamiento sistémico para detectar las funcionalidades de alta palanca que generan cambio sistémico versus las funcionalidades locales que solo optimizan un punto del sistema, cómo identificar las dependencias sistémicas entre funcionalidades (si hago A antes que B, B será más fácil y más efectiva), y cómo resistir la presión de optimizar métricas locales cuando la perspectiva sistémica indica que dañan el sistema global.

Este prompt es para un PM que quiere pasar de tomar decisiones basadas en el caso evidente a tomar decisiones que anticipan las consecuencias en el sistema completo. Incluye herramientas aplicables, ejemplos reales y preguntas que cambien la forma de pensar sobre el producto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Aplicar pensamiento sistémico a las decisiones de producto para anticipar efectos no deseados',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'HR systems: diseñar los procesos de talento como un sistema coherente',
                'description'      => 'Construye el sistema de talento donde atracción, desarrollo y retención se refuerzan mutuamente en lugar de operar en silos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CHRO o director de RRHH con experiencia diseñando sistemas de talento coherentes en empresas en crecimiento. Necesito rediseñar los procesos de RRHH de mi organización para que funcionen como un sistema integrado donde cada pieza refuerza a las demás, en lugar de una colección de procesos inconexos.

Contexto de mi organización:
Trabajo en RRHH de [empresa, sector, número de empleados]. Los procesos de talento que tenemos hoy son [describe qué existe: selección, onboarding, evaluación de desempeño, formación, compensación, etc.]. El problema sistémico que identifico es [alta rotación que anula la inversión en formación / proceso de selección que no predice el desempeño / falta de coherencia entre los valores que comunicamos y los comportamientos que reconocemos / desarrollo que no conecta con las necesidades del negocio].

Lo que necesito:

1. EL SISTEMA DE TALENTO: VISIÓN COMPLETA
Define el sistema de talento completo como un mapa de procesos interconectados: cómo la propuesta de valor al empleado (EVP) atraviesa todos los procesos desde el reclutamiento hasta la salida, los bucles de refuerzo positivos que un sistema de talento bien diseñado activa (buenos empleados atraen buenos empleados, el desarrollo genera retención que reduce el coste de selección, la cultura reconocida externamente facilita la atracción), y los bucles de compensación que limitan el sistema (si el proceso de selección falla, el onboarding se tensiona; si el onboarding falla, el tiempo hasta la productividad se alarga; si la evaluación no es justa, la retención se resiente). Dibuja el mapa causal del sistema.

2. COHERENCIA ENTRE LOS PROCESOS: EL HILO CONDUCTOR
El mayor error en RRHH es diseñar cada proceso de forma independiente. Define cómo garantizar la coherencia del sistema: cómo los valores de la empresa deben reflejarse en los criterios de selección, los comportamientos reconocidos en la evaluación de desempeño, los contenidos de formación y los criterios de promoción, el rol de las competencias como lenguaje común que conecta selección, evaluación, desarrollo y compensación, y cómo detectar incoherencias sistémicas (ejemplo: decimos que valoramos la autonomía pero todos los procesos requieren aprobación del manager).

3. SELECCIÓN COMO INVERSIÓN EN EL SISTEMA COMPLETO
El proceso de selección no termina cuando el candidato acepta la oferta. Define cómo la selección alimenta el sistema completo: cómo los criterios de selección deben prever el desempeño a seis meses (no solo el encaje cultural genérico), cómo el proceso de selección recoge información que el onboarding y el manager deben usar, y cómo el análisis de las contrataciones que no funcionaron mejora los criterios de selección futuros (feedback loop de selección).

4. ONBOARDING COMO CIMIENTO DEL SISTEMA
Los primeros noventa días definen la productividad, la retención y la cultura del nuevo empleado. Define el sistema de onboarding que maximiza los tres: la estructura de los primeros treinta, sesenta y noventa días con objetivos claros y verificables, cómo el onboarding transmite los valores y la cultura de forma experiencial (no a través de una presentación de PowerPoint), cómo medir si el onboarding funciona (tiempo hasta primera contribución significativa, satisfacción a los treinta días, retención a los doce meses de las cohortes de incorporación).

5. DESARROLLO Y RETENCIÓN: EL BUCLE MÁS IMPORTANTE
La inversión en desarrollo es rentable solo si el empleado se queda suficiente tiempo. Define cómo diseñar el sistema de desarrollo que genera retención: cómo conectar el plan de desarrollo individual con el plan de sucesión de la empresa (el empleado crece, la empresa cubre necesidades futuras), cómo diseñar rutas de carrera que sean creíbles y no solo aspiracionales, y cómo medir el impacto del desarrollo en la retención (tasa de retención de empleados con plan de desarrollo activo versus sin él).

6. DATOS Y MÉTRICAS DEL SISTEMA DE TALENTO
¿Cómo sé si mi sistema de talento está funcionando? Define el cuadro de mando de talento que monitoriza la salud del sistema completo: tasa de retención por antigüedad y por segmento (high performers, managers, empleados con formación activa), tiempo de cobertura de vacantes y calidad de contratación a seis meses, eNPS como indicador de salud cultural, y coste total del talento (adquisición más desarrollo más retención) como porcentaje de los ingresos. Para cada métrica: benchmark de referencia y la palanca de sistema que mueve ese indicador.

Este prompt es para un responsable de RRHH que quiere que los procesos de talento se refuercen mutuamente y que cada euro invertido en talento genere el máximo retorno para la organización y para las personas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar el sistema de talento donde selección, desarrollo y retención se refuerzan',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Financial systems thinking: ver la empresa como sistema de flujos de valor y capital',
                'description'      => 'Aplica el pensamiento sistémico a las finanzas corporativas para entender cómo las decisiones crean o destruyen valor a largo plazo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con formación en pensamiento sistémico y experiencia en empresas donde las decisiones financieras se analizan como parte de un sistema complejo de creación de valor. Necesito aprender a ver la empresa como un sistema de flujos de valor y capital para tomar decisiones financieras que maximicen el valor a largo plazo, no solo las métricas del trimestre.

Contexto de mi empresa:
Trabajo como [CFO / controller / director financiero] en [empresa, sector, modelo de negocio, fase de la empresa: startup / crecimiento / madurez]. Los dilemas financieros que enfrento son [inversión versus rentabilidad a corto plazo / endeudamiento para crecer versus capital propio / optimizar el margen ahora versus invertir en capacidad futura].

Lo que necesito:

1. LA EMPRESA COMO SISTEMA DE FLUJOS
Define el framework para ver la empresa como un sistema de flujos: el flujo de clientes (desde prospecto hasta cliente retenido y referidor), el flujo de capital (cómo el capital entra, se transforma en capacidad operativa, genera valor y retorna a los accionistas o se reinvierte), el flujo de talento (cómo la empresa atrae, desarrolla y retiene a las personas que generan valor), y el flujo de conocimiento (cómo la empresa aprende y mejora su propuesta de valor con el tiempo). Para cada flujo: los indicadores que lo miden y los puntos de ruptura más comunes.

2. BUCLES DE REFUERZO FINANCIERO: EL FLYWHEEL
Las empresas más exitosas tienen un flywheel, un bucle de refuerzo que se acelera con el tiempo. Define: cómo identificar el flywheel de tu empresa (qué mecanismo de refuerzo conecta el éxito de hoy con el éxito de mañana), cómo las decisiones financieras de inversión pueden acelerar o frenar el flywheel, y tres ejemplos de flywheels empresariales conocidos con su lógica financiera subyacente (Amazon: escala reduce costes reduce precios atrae más clientes aumenta la escala; Visa: más comerciantes atraen más usuarios atraen más comerciantes).

3. CONSECUENCIAS SISTÉMICAS DE LAS DECISIONES FINANCIERAS COMUNES
Analiza con perspectiva sistémica estas decisiones financieras frecuentes: recortar costes de formación para mejorar el EBITDA (cuáles son los efectos de segundo y tercer orden sobre la retención, la productividad y la capacidad de innovación), aumentar el descuento comercial para acelerar el cierre de ventas (qué hace al ciclo de caja, a la percepción de valor del producto y a la mezcla de clientes), y priorizar el crecimiento de ingresos sobre el margen en la fase de escala (cuándo esta decisión es correcta y cuándo es una trampa que destruye valor).

4. CAPITAL ALLOCATION COMO DECISIÓN SISTÉMICA
La asignación de capital es la decisión financiera más importante de cualquier empresa. Define el framework sistémico de capital allocation: cómo evaluar el retorno de las diferentes opciones de uso del capital (inversión orgánica, adquisición, deuda, recompra de acciones, dividendos) no solo por su rendimiento esperado sino por su impacto en el sistema completo (capacidad estratégica, cultura, flexibilidad futura), y cómo los sesgos cognitivos de directivos y accionistas distorsionan las decisiones de capital allocation (sesgo de status quo, exceso de confianza, presión del mercado a corto plazo).

5. MÉTRICAS FINANCIERAS QUE CAPTURAN LA SALUD DEL SISTEMA
Muchas métricas financieras estándar son indicadores retrasados del daño sistémico. Define el conjunto de métricas que captura la salud del sistema financiero completo: el ratio entre inversión en capacidad futura y rentabilidad presente (R&D más capex dividido por EBITDA), el ciclo de conversión de efectivo como medida de la eficiencia del sistema operativo, el NPS de clientes y el eNPS de empleados como indicadores adelantados de los resultados financieros futuros, y el retorno sobre el capital invertido ajustado por ciclo económico como medida de creación de valor a largo plazo.

6. COMUNICAR EL PENSAMIENTO SISTÉMICO A INVERSORES Y DIRECCIÓN
Los inversores y los consejos de administración suelen pedir resultados trimestrales. ¿Cómo defiendo decisiones de inversión a largo plazo en ese contexto? Define: el lenguaje del pensamiento sistémico traducido a términos financieros convencionales (el flywheel como justificación de la inversión en pérdidas), cómo construir el caso de negocio sistémico que muestra el valor a largo plazo de una decisión que reduce los resultados a corto plazo, y cómo seleccionar inversores o miembros del consejo que estén alineados con una visión sistémica del valor.

Este prompt es para un director financiero que quiere que las finanzas sirvan a la creación de valor sostenible, no solo a la optimización de las métricas del trimestre. Sé concreto con frameworks y herramientas de análisis aplicables.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Aplicar pensamiento sistémico a las finanzas corporativas para maximizar el valor a largo plazo',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal systems design: construir los procesos jurídicos que escalan con la empresa',
                'description'      => 'Diseña el sistema jurídico interno que gestiona el riesgo legal a escala sin multiplicar el equipo de abogados proporcionalmente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un General Counsel con experiencia diseñando departamentos jurídicos internos eficientes en empresas de tecnología y en crecimiento acelerado. Necesito construir el sistema jurídico de mi empresa que gestione el riesgo legal de forma escalable, sin que el equipo legal se convierta en el cuello de botella del negocio.

Contexto de mi empresa:
Trabajo como [General Counsel / director legal / legal counsel] en [empresa, sector, tamaño]. El equipo legal actual es [número de abogados o "solo yo"]. Los principales desafíos son [volumen de contratos que no podemos revisar todos / el negocio espera respuestas rápidas y el equipo legal es lento / los stakeholders no entienden cuándo necesitan involucrar a legal / riesgo legal que no estamos gestionando porque no tenemos visibilidad].

Lo que necesito:

1. EL SISTEMA JURÍDICO COMO INFRAESTRUCTURA DEL NEGOCIO
Define la visión del departamento legal como sistema: no como un servicio reactivo que resuelve problemas cuando aparecen, sino como la infraestructura que previene los problemas, habilita el negocio y gestiona el riesgo de forma proactiva. Explica los tres modelos de departamento legal (reactivogate-keeper, habilitador del negocio, socio estratégico) y cómo pasar de uno al siguiente sin aumentar el equipo proporcionalmente.

2. AUTOSERVICIO LEGAL: ESCALAR SIN CONTRATAR
El mayor palancador del departamento legal es el autoservicio bien diseñado. Define qué puede y qué debe automatizarse o estandarizarse: las plantillas de contratos más frecuentes que el negocio puede usar sin revisión legal (NDA, contratos de prestación de servicios estándar, acuerdos de confidencialidad, términos y condiciones estándar), el sistema de firma electrónica integrado con el flujo de aprobación, la guía de uso del equipo no legal (cuándo escalar a legal, cuándo usar la plantilla, cuándo es suficiente con el proceso estándar), y cómo construir una biblioteca de documentos legales autoservicio que el equipo comercial y de operaciones use sin necesitar al abogado para cada contrato.

3. PRIORIZACIÓN DEL RIESGO LEGAL: DÓNDE PONE EL TIEMPO EL ABOGADO
No todos los riesgos legales merecen la misma atención. Define el framework de priorización del riesgo legal: la matriz de probabilidad por impacto aplicada al riesgo legal (qué riesgos son probables y de alto impacto: donde pone el tiempo el equipo legal, qué riesgos son improbables y de bajo impacto: donde aplica el proceso estándar), cómo categorizar las solicitudes del negocio para decidir el nivel de atención legal requerido (urgente y estratégico, importante pero no urgente, rutinario y delegable), y cómo comunicar esta priorización al negocio sin parecer que estás bloqueando proyectos.

4. CONTRATOS: EL PROCESO QUE MÁS CONSUME AL EQUIPO LEGAL
La negociación y revisión de contratos consume la mayor parte del tiempo de la mayoría de los equipos legales. Define el sistema de gestión contractual eficiente: el proceso de onboarding de un contrato nuevo (cómo el equipo comercial prepara el contexto para que legal pueda revisar en menos tiempo), el playbook de negociación (para cada cláusula crítica: posición inicial, posición aceptable, posición inaceptable con razón), el contract lifecycle management (qué herramienta usar, cómo gestionar las renovaciones automáticas, cómo tener visibilidad del portfolio de contratos activos), y cómo reducir el tiempo de ciclo del contrato desde borrador hasta firma.

5. LEGAL OPS: LA FUNCIÓN QUE HACE ESCALABLE AL EQUIPO LEGAL
Legal operations es la diferencia entre un departamento legal que crece con el negocio y uno que siempre va a remolque. Define qué incluye legal ops: la gestión de proveedores externos (cómo gestionar las firmas externas para maximizar calidad y controlar costes), las métricas del departamento legal (tiempo de respuesta, volumen por tipo de solicitud, coste legal interno versus externo), el presupuesto legal como herramienta de priorización, y las herramientas tecnológicas de legal que producen el mayor retorno (gestión de contratos, e-discovery, gestión de entidades jurídicas).

6. CULTURA DE COMPLIANCE COMO SISTEMA PREVENTIVO
El mejor sistema jurídico es el que previene los problemas antes de que aparezcan. Define el programa de cultura de compliance: cómo hacer la formación de compliance efectiva (no el módulo de e-learning que nadie termina), cómo diseñar los procesos de negocio para que el camino correcto sea también el camino más fácil, y cómo medir la salud del compliance sin necesitar un incidente para saber si el sistema funciona (indicadores adelantados: número de consultas proactivas al equipo legal, tasa de uso de plantillas estándar, escaladas al equipo legal antes de que el problema ocurra).

Este prompt es para un abogado corporativo que quiere que el departamento legal sea un habilitador del crecimiento, no el departamento del "no". Escribe con ejemplos concretos y herramientas recomendadas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar el sistema jurídico interno que gestiona el riesgo legal a escala',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS systems: el modelo de éxito del cliente que no depende de héroes individuales',
                'description'      => 'Construye el sistema de Customer Success que escala la retención y la expansión sin depender del talento individual de cada CSM.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia diseñando modelos de CS que escalan desde cinco hasta cien CSMs manteniendo la calidad de la relación con el cliente. Necesito construir el sistema de CS que convierte el talento individual de los mejores CSM en procesos replicables que todo el equipo puede ejecutar con consistencia.

Contexto de mi equipo:
Gestiono un equipo de [número] CSMs que cuidan [número] cuentas. El modelo actual es [alto touch con reuniones frecuentes / tech touch con intervención humana reactiva / combinación]. El mayor problema es que [cuando se va un CSM bueno el cliente nota la diferencia inmediatamente / los CSMs con menos experiencia no saben qué hacer en cada situación / el churn es impredecible porque no tenemos visibilidad del estado real de las cuentas / no sabemos qué hace diferente al CSM que retiene más].

Lo que necesito:

1. EL SISTEMA DE CS: ARQUITECTURA COMPLETA
Define la arquitectura del sistema de CS que no depende de héroes: la segmentación de cuentas por potencial y complejidad (qué cuentas merecen alto touch, cuáles low touch, cuáles tech touch y cuáles comunitario), el playbook por segmento (qué hace el CSM en cada etapa del ciclo de vida del cliente según el segmento), el sistema de health score (qué datos combinamos para medir la salud de la cuenta en tiempo real), y el modelo de escalada (cuándo el CSM escala a su manager, a ventas o a producto). Para cada elemento: qué lo hace funcionar y cuál es el error más común.

2. EL PLAYBOOK DE CS: CAPTURAR LO QUE HACEN LOS MEJORES
El playbook de CS es la diferencia entre un equipo que aprende colectivamente y uno donde el conocimiento muere cuando se va el CSM. Define cómo construirlo: cómo entrevistar a los CSMs más efectivos para extraer sus prácticas implícitas (qué preguntan en los check-ins, cómo detectan el riesgo antes de que el cliente lo nombre, qué hacen en los primeros treinta días de una cuenta nueva), qué incluye el playbook mínimo viable de CS (proceso de onboarding de cuenta, cadencia de touchpoints por segmento, guía de manejo de situaciones difíciles, templates de comunicación clave), y cómo mantenerlo actualizado con lo que aprende el equipo cada mes.

3. HEALTH SCORE: EL SISTEMA NERVIOSO DEL CS
El health score es la forma en que el sistema de CS tiene visibilidad de todas las cuentas simultáneamente. Define: qué indicadores componen un health score robusto (product usage, soporte, NPS, renovación próxima, expansión, engagement con el CSM), cómo ponderar cada indicador según el modelo de negocio, cuándo un health score verde puede esconder una cuenta en riesgo (los límites del health score cuantitativo) y qué añade el juicio cualitativo del CSM, y cómo el health score alimenta la priorización semanal del equipo de CS (qué cuentas visitar esta semana).

4. MODELO DE ENGAGEMENT ESCALABLE
¿Cómo mantiene el sistema de CS una relación de calidad con cien, quinientas o mil cuentas? Define el modelo de engagement por segmento: el calendario de touchpoints por tipo de cuenta (quincenales para cuentas enterprise, mensuales para mid-market, trimestrales plus automatizaciones para SMB), qué parte del engagement puede ser automatizado sin perder la personalización (emails de check-in automatizados basados en comportamiento del producto, alertas proactivas cuando el uso baja, contenido de valor enviado en el momento de relevancia), y el índice de cobertura óptimo (número de cuentas por CSM según el segmento y el modelo de touch).

5. EXPANSIÓN COMO PARTE DEL SISTEMA
La retención paga el equipo de CS. La expansión lo justifica ante el negocio. Define el sistema de expansión integrado en CS: cómo identificar el momento correcto para la conversación de expansión (el cliente ha alcanzado el ROI comprometido, hay un caso de uso nuevo que encaja, el equipo crece), el proceso de expansión que no se siente como una llamada de ventas, y la colaboración entre CS y ventas para gestionar las oportunidades de upsell y cross-sell sin crear fricciones internas sobre quién es dueño de la cuenta.

6. MÉTRICAS DEL SISTEMA DE CS
Define el cuadro de mando completo del sistema de CS: gross revenue retention (qué porcentaje de los ingresos renovamos sin contar expansión, el indicador más puro de retención), net revenue retention (retención más expansión, el indicador de crecimiento eficiente), time to value en nuevas cuentas (cuánto tardamos en que el cliente obtenga su primer resultado significativo), product adoption rate (porcentaje de funcionalidades clave adoptadas por las cuentas activas), y customer health distribution (porcentaje de la cartera en verde, amarillo y rojo semana a semana). Para cada métrica: qué palanca del sistema mueve ese indicador.

Este prompt es para un líder de CS que quiere construir un sistema que retenga y expanda clientes con consistencia, independientemente de qué CSM gestione la cuenta. Escribe con herramientas concretas, estructuras de playbook y plantillas de health score.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir el sistema de CS que escala la retención y la expansión con consistencia',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Sistemas del freelance: construir el negocio que funciona aunque no estés',
                'description'      => 'Diseña los sistemas de tu negocio freelance para que genere ingresos, mantenga clientes y opere con calidad sin requerir tu presencia constante.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de negocios para freelancers y consultores independientes con experiencia ayudando a profesionales a pasar de ser trabajadores autónomos a ser dueños de un negocio sistemático. Necesito construir los sistemas de mi negocio freelance para que funcione con consistencia y genere ingresos predecibles sin requerir que esté encima de todo en todo momento.

Contexto de mi negocio:
Soy freelance en [área: diseño, desarrollo, marketing, consultoría, redacción, etc.]. Actualmente trabajo [número de horas] a la semana y genero [rango de ingresos mensuales]. Mi principal problema es que [cuando me enfermo o me voy de vacaciones el negocio se detiene / paso más tiempo buscando clientes que trabajando para ellos / cada proyecto empieza desde cero sin proceso definido / mi ingreso es completamente variable y no puedo planificar].

Lo que necesito:

1. EL DIAGNÓSTICO DEL NEGOCIO FREELANCE SIN SISTEMAS
Analiza los síntomas del negocio freelance que no tiene sistemas y ayúdame a identificar cuáles tengo: fiesta o hambre en el ciclo de ingresos (trabajo mucho y no busco, luego no tengo trabajo y busco desesperado), cada proyecto es diferente porque no tienes proceso documentado, cobras por hora y tu techo de ingresos es el número de horas que puedes trabajar, dependes de pocos clientes grandes que concentran el riesgo, y no tienes activos de negocio que funcionen cuando no estás trabajando activamente. Para cada síntoma: cuál es el sistema que lo resuelve.

2. EL SISTEMA DE ADQUISICIÓN DE CLIENTES
El mayor error del freelance es buscar clientes solo cuando no tiene trabajo. Define el sistema de adquisición que funciona de forma continua: el canal de adquisición principal adaptado a tu especialidad (LinkedIn, newsletter, referidos, comunidades, contenido, colaboraciones con agencias), la cadencia mínima de actividades de visibilidad que puedes mantener incluso cuando estás a pleno (una publicación a la semana, una conversación de red al mes, un email a antiguos clientes por trimestre), y el mecanismo de captura de leads (llamada de descubrimiento, formulario de contacto, propuesta tipo que envías rápidamente). Diseña el sistema para que la adquisición ocurra aunque no le dediques tiempo activo esa semana.

3. EL PROCESO DE PROYECTO: DEL ENCARGO AL ENTREGABLE
Cada vez que empiezas un proyecto desde cero pierdes tiempo y energía que podrías dedicar al trabajo de valor. Define el proceso de proyecto estandarizado: el onboarding del cliente (formulario de briefing, kick-off call con agenda fija, acceso a herramientas y materiales), las etapas del proyecto con hitos y entregables claros, el proceso de revisión y aprobación (cuántas rondas están incluidas, cómo gestionar las revisiones adicionales), y el cierre del proyecto (entrega final, llamada de cierre, solicitud de feedback y testimonial, plantación de la semilla de la siguiente colaboración).

4. MODELOS DE PRICING QUE HACEN CRECER EL NEGOCIO
Cobrar por hora limita el crecimiento. Define los modelos de pricing que te permiten escalar: el pricing por proyecto (cómo calcular el precio basado en valor entregado, no en horas empleadas), el retainer mensual (cómo proponer un acuerdo de servicio recurrente a clientes actuales, qué incluir, cómo garantizar la predictibilidad para ambas partes), y los productos de precio fijo (cómo empaquetar un servicio estandarizado con un precio fijo que te permite ganar eficiencia con la repetición). Para cada modelo: cuándo usarlo y cómo hacer la transición desde el cobro por hora.

5. SISTEMAS DE OPERACIÓN QUE AHORRAN HORAS CADA SEMANA
Define los sistemas operativos que reducen el tiempo dedicado a tareas que no son el trabajo central: el sistema de gestión de proyectos (qué herramienta usar, cómo estructurar los proyectos para que el cliente tenga visibilidad sin que tú tengas que reportar manualmente), el sistema de facturación y cobro (facturación automatizada, cobro por adelantado o en hitos, seguimiento de facturas pendientes sin conversaciones incómodas), el sistema de comunicación con clientes (cuándo y cómo comunicarte para que el cliente sienta atención sin que te interrumpa constantemente), y las plantillas que reutilizas (propuestas, contratos, briefings, emails frecuentes, entregables tipo).

6. EL ACTIVO MÁS PODEROSO DEL FREELANCE: LA AUDIENCIA
Un freelance con audiencia tiene un negocio. Un freelance sin audiencia tiene un empleo inestable. Define el sistema para construir un activo que trabaje cuando no estás: la newsletter como canal de relación y captación a largo plazo (qué frecuencia y formato es sostenible, cómo construir la lista con tu red actual), el contenido de referencia (los artículos, videos o recursos que te posicionan como experto y atraen clientes de forma orgánica durante años), y el portfolio de casos de éxito (cómo documentar cada proyecto para que sea material de venta sin revelar información confidencial).

Escribe con honestidad sobre el tiempo y esfuerzo que requiere construir cada sistema. Prioriza los sistemas por impacto y facilidad de implementación para que el freelance sepa por dónde empezar esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir los sistemas del negocio freelance para que genere ingresos predecibles',
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
