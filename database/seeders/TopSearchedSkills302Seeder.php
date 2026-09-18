<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills302Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Market sizing: cuantificar el mercado antes de lanzar cualquier campaña',
                'description'      => 'Metodología para que los profesionales de marketing estimen el tamaño real de su mercado objetivo antes de asignar presupuesto, con técnicas de TAM, SAM y SOM adaptadas a decisiones de campaña.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de marketing con experiencia en análisis de mercado para empresas de consumo, B2B y tecnología. Has liderado procesos de go-to-market en múltiples industrias y sabes cuantificar mercados tanto con datos primarios como con estimaciones razonadas (el famoso "back-of-the-envelope").

Necesito calcular el tamaño de mercado para mi producto o servicio antes de decidir cuánto invertir en marketing y en qué canales.

**Mi producto o servicio:**
[Describe qué vendes y a quién va dirigido]

**Mi contexto geográfico:**
[¿En qué país o región quieres operar?]

**Mi duda específica:**
[¿No tienes claro el tamaño total del mercado, no sabes cuánto puedes capturar de forma realista, o tienes datos pero no sabes cómo interpretarlos?]

---

**1. El marco TAM / SAM / SOM explicado para marketing**
Explica cada concepto con una definición clara y un ejemplo práctico en mi contexto:

- TAM (Total Addressable Market): el universo total de posibles clientes si tuvieras distribución y recursos ilimitados. Cómo evitar sobrestimarlo por definir la categoría de forma demasiado amplia.
- SAM (Serviceable Addressable Market): la parte del TAM a la que realmente puedes llegar dado tu modelo de negocio, geografía y canales de distribución actuales.
- SOM (Serviceable Obtainable Market): la porción del SAM que puedes capturar de forma realista en los próximos 12-24 meses, dada tu competencia, recursos y estrategia.

Para cada nivel, indica qué supuestos son los más críticos y cómo de sensible es el resultado a cada uno.

**2. Cómo estimar el mercado con datos disponibles**
Describe dos metodologías complementarias:

*Enfoque top-down:*
- Partir de estadísticas del sector (informes de consultoras, datos del INE, Eurostat, estudios sectoriales)
- Cómo encontrar datos secundarios gratuitos o de bajo coste para hacer la estimación
- Cómo ajustar datos agregados a tu segmento específico

*Enfoque bottom-up:*
- Estimar desde los primeros principios: número de clientes potenciales × frecuencia de compra × ticket medio
- Cómo validar los supuestos con datos de ventas propios o de competidores públicos
- El test de coherencia: comparar ambos enfoques y explicar las diferencias

**3. Segmentación del mercado para decisiones de inversión en marketing**
El tamaño total del mercado no es suficiente. Explica cómo segmentarlo para asignar presupuesto:
- Segmentación por valor del cliente: qué segmentos tienen mayor LTV y justifican mayor CAC
- Segmentación por accesibilidad: qué segmentos son más fáciles de alcanzar con tus canales actuales
- Segmentación por competencia: dónde hay menos presión competitiva y mayor oportunidad de share
- Cómo construir una matriz de priorización de segmentos para la inversión en marketing

**4. Errores comunes al estimar mercados desde marketing**
Describe los sesgos más frecuentes que llevan a decisiones de inversión incorrectas:
- El "todo el mundo puede ser mi cliente": cómo evitar definir el mercado de forma demasiado amplia
- Confundir demanda con mercado: no todos los que necesitan tu producto van a comprarlo
- Ignorar la penetración de la categoría: cuántos del mercado potencial conocen que existe la solución
- Tomar estudios de mercado a valor facial sin ajustar por contexto local o temporal

**5. De los datos a la decisión de marketing**
Explica cómo usar el análisis de mercado para tomar decisiones concretas:
- Cómo calcular el presupuesto de marketing como porcentaje del mercado accesible
- Cómo usar el SOM para fijar objetivos de adquisición realistas
- Cómo revisar y actualizar el análisis de mercado a medida que se obtienen datos reales

**6. Estimación para mi caso**
Con los datos que te he dado, ayúdame a construir una estimación inicial de TAM, SAM y SOM para mi producto, indicando claramente los supuestos que estás usando y el grado de incertidumbre de cada cifra.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Estimación de TAM/SAM/SOM y segmentación de mercado para decisiones de inversión en marketing',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Technical market analysis: evaluar el ecosistema tecnológico antes de construir',
                'description'      => 'Metodología para que los desarrolladores y CTOs evalúen el panorama tecnológico, la competencia técnica y la viabilidad del mercado antes de comprometer recursos de desarrollo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CTO con experiencia en análisis de ecosistemas tecnológicos y decisiones de build vs. buy vs. partner en empresas de tecnología. Has evaluado cientos de mercados tecnológicos y sabes distinguir una oportunidad real de un espejismo técnico.

Estoy valorando construir un producto o solución técnica y necesito entender el mercado tecnológico antes de comprometer recursos de desarrollo.

**Mi idea o producto:**
[Describe qué quieres construir técnicamente y qué problema resuelve]

**Mi contexto:**
[¿Eres una startup, una empresa establecida añadiendo una nueva línea, o un desarrollador independiente?]

**Mi duda:**
[¿Qué aspecto del análisis técnico de mercado te resulta más crítico en este momento?]

---

**1. Análisis del ecosistema tecnológico existente**
Antes de escribir una línea de código, hay que entender qué existe. Explica cómo evaluar:

*Soluciones existentes:*
- Cómo mapear las soluciones actuales (open source, comerciales, internas de grandes empresas) que ya resuelven el problema
- Análisis de GitHub: qué proyectos open source existen en el espacio, su nivel de actividad y adopción
- Marketplaces de software (Product Hunt, G2, Capterra): qué soluciones tienen tracción de usuarios reales
- Cómo leer las valoraciones de los usuarios existentes para identificar las carencias del mercado actual

*La brecha tecnológica:*
- Cómo articular con precisión qué hace tu solución que las existentes no pueden hacer
- La diferencia entre "mejor" (iterativo) y "diferente" (disruptivo): cuál justifica construir desde cero
- Cuándo una brecha técnica es real y cuándo es un problema que el mercado no valora lo suficiente

**2. Evaluación del timing tecnológico**
El timing en tecnología lo es casi todo. Desarrolla cómo evaluar:
- Tecnologías habilitadoras: qué avances recientes hacen posible tu solución hoy cuando no era viable hace dos años (APIs de IA, infraestructura cloud, nuevos dispositivos)
- Curva de adopción del mercado: ¿está el mercado objetivo en la fase de early adopters, mayoría temprana o ya es un mercado maduro?
- Regulación como acelerador: normativas recientes que crean demanda obligatoria de soluciones como la tuya
- Señales de que llegas demasiado tarde: el mercado ya tiene un líder dominante con efectos de red

**3. Análisis competitivo técnico**
Explica cómo comparar tu propuesta con los competidores desde una perspectiva técnica y de negocio:
- Stack tecnológico de la competencia: qué se puede inferir de sus ofertas de empleo, documentación pública y código abierto
- Deuda técnica de los competidores establecidos: por qué es una ventaja estratégica que puedas explotar
- Velocidad de iteración de los competidores: cómo medir si están acelerando o estancados
- Moats técnicos reales: red de datos, efectos de red, switching cost, patentes y por qué importan

**4. Validación técnica de la demanda antes de construir**
Describe las técnicas que los equipos técnicos usan para validar el mercado sin construir el producto completo:
- Landing page con lista de espera: métricas de conversión que validan el interés real
- Concierge MVP: hacer manualmente lo que el software hará después para validar el proceso
- Integraciones antes que el producto: construir sobre APIs existentes para validar el flujo
- Presales o cartas de intención: empresas que se comprometen a pagar antes de que exista el producto

**5. La decisión de build vs. buy vs. partner**
Explica cuándo tiene sentido cada opción y cómo evaluarla:
- Build: cuándo la diferenciación técnica es suficiente para justificar el coste de construir desde cero
- Buy: cómo evaluar una adquisición de tecnología existente (startups tempranas, herramientas complementarias)
- Partner: integraciones y acuerdos que aceleran el go-to-market sin el coste del desarrollo propio
- Open source as a strategy: contribuir o construir sobre proyectos open source como ventaja de distribución

**6. Análisis de mi caso**
Con lo que me has descrito, identifica las 3 preguntas técnicas de mercado más críticas que debes responder antes de comprometer tu primer sprint de desarrollo, y cómo responder cada una con el menor tiempo y recursos posibles.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Análisis del ecosistema tecnológico, competencia técnica y validación de mercado antes de iniciar el desarrollo',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de investigación de mercado: metodologías visuales para entender al usuario',
                'description'      => 'Guía para diseñadores que lideran procesos de investigación de mercado y usuario, con metodologías visuales, herramientas de síntesis y cómo traducir los hallazgos en decisiones de diseño.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un investigador de UX y diseño estratégico con experiencia liderando procesos de investigación de usuario en proyectos de diseño de producto, servicio y comunicación. Combinas metodologías cualitativas y cuantitativas y sabes comunicar los hallazgos de forma visual para que los equipos de diseño puedan actuar sobre ellos.

Necesito diseñar un proceso de investigación de mercado y usuario para un proyecto de diseño y quiero orientación sobre qué metodologías usar y cómo sintetizar los hallazgos.

**Mi proyecto:**
[Describe el proyecto de diseño: qué estás diseñando, para quién y en qué fase estás]

**Mi objetivo de investigación:**
[¿Qué preguntas específicas necesitas responder con la investigación?]

**Mis recursos:**
[¿Cuánto tiempo y presupuesto tienes para la investigación? ¿Tienes acceso a usuarios reales?]

---

**1. La diferencia entre investigación de mercado y investigación de usuario en diseño**
Explica la distinción y cuándo necesitas cada una:
- Investigación de mercado: quiénes son los usuarios potenciales, cuántos hay, qué usan actualmente, qué están dispuestos a pagar
- Investigación de usuario: cómo piensan, qué sienten, cómo se comportan al interactuar con productos similares
- Investigación de contexto de uso: el entorno físico, social y emocional en el que ocurre el uso
- Por qué el diseño necesita las tres y cómo combinarlas en un proyecto con tiempo limitado

**2. Metodologías de investigación cualitativa para diseño**
Describe cada metodología, cuándo usarla y cómo ejecutarla con recursos limitados:

*Entrevistas de usuario en profundidad:*
- Guía de entrevista: cómo estructurar las preguntas para extraer comportamientos reales, no opiniones
- Técnica de los "cinco por qués" para llegar a la motivación subyacente
- Cómo reclutar usuarios representativos cuando no tienes presupuesto de research agency
- Qué herramientas usar para la síntesis (Dovetail, Notion, post-its físicos)

*Observación contextual y shadowing:*
- Cómo observar sin contaminar: la diferencia entre lo que los usuarios dicen y lo que hacen
- Protocolos de observación adaptados a entornos digitales (grabaciones de sesión) y físicos

*Card sorting y tree testing:*
- Cuándo usar card sorting abierto vs. cerrado en proyectos de arquitectura de información
- Cómo interpretar los resultados para tomar decisiones de diseño

**3. Metodologías de investigación cuantitativa accesibles para diseñadores**
Explica cómo usar datos cuantitativos en proyectos de diseño sin ser estadístico:
- Encuestas de usuario: cuándo añaden valor y los errores más comunes en el diseño de preguntas
- Análisis de comportamiento en producto: métricas de uso que revelan problemas de diseño (tasa de completitud de tareas, puntos de abandono, tiempo en tarea)
- Benchmark competitivo cuantitativo: cómo comparar tu diseño con el de la competencia usando criterios objetivos
- Tests de usabilidad cuantitativo: qué métricas medir en un test (éxito de tarea, tiempo, errores) y cómo interpretarlas

**4. Síntesis visual de los hallazgos de investigación**
Esta es la habilidad diferenciadora del diseñador investigador. Describe cómo:
- Construir personas de usuario que sean útiles (no decorativas) y cómo evitar los estereotipos
- Mapas de journey: estructura, nivel de detalle y cómo validarlos con usuarios reales
- Mapas de oportunidad: cómo visualizar las brechas entre la experiencia actual y la deseada
- Cómo comunicar insights de investigación a stakeholders que no leen informes de 50 páginas
- El "How Might We" como puente entre la investigación y el proceso de ideación

**5. De los hallazgos a las decisiones de diseño**
Explica el proceso de traducción de la investigación en criterios de diseño accionables:
- Cómo definir los design principles desde la investigación
- Cómo priorizar los problemas de usuario cuando hay demasiados
- Cómo defender decisiones de diseño basadas en datos ante stakeholders que prefieren sus intuiciones

**6. Plan para mi proyecto**
Basándote en mi situación, propón un plan de investigación de 2 semanas con metodologías específicas, herramientas y entregables, ajustado a los recursos que me has indicado.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseño de procesos de investigación de usuario y mercado con metodologías visuales y síntesis de hallazgos',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Market validation: cómo el equipo comercial valida si el mercado existe antes de invertir',
                'description'      => 'Técnicas de validación de mercado desde el equipo de ventas: cómo hacer prospección exploratoria, leer señales de compra reales y confirmar que el problema existe antes de que el producto esté listo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia en empresas que lanzan nuevos productos o entran en nuevos mercados. Has liderado equipos de validación comercial en startups y en divisiones de nuevos negocios de empresas establecidas, y sabes distinguir el interés de los prospectos de la intención real de compra.

Necesito validar si existe un mercado real para mi producto o servicio antes de escalar el equipo comercial o comprometer mucho presupuesto.

**Mi producto o servicio:**
[Describe qué vendes y a qué tipo de cliente va dirigido]

**Mi situación actual:**
[¿Tienes ya algunos clientes, estás en conversaciones tempranas, o partes de cero?]

**Mi hipótesis de mercado:**
[¿Cuál es la hipótesis de cliente y problema que quieres validar o refutar?]

---

**1. Por qué la validación comercial es diferente de la investigación de mercado**
Explica la diferencia entre saber que un problema existe y saber que hay clientes dispuestos a pagar para resolverlo:
- La trampa de la investigación de mercado: las personas dicen que comprarían algo que no comprarían
- La validación comercial como el único test que importa: dinero o compromisos reales en la mesa
- Por qué el equipo de ventas es el mejor validador de mercado: tiene conversaciones reales con posibles compradores
- Cómo separar el entusiasmo educado de la intención de compra genuina

**2. Las señales de compra reales que buscar en conversaciones de validación**
Describe las señales que indican que el mercado existe:

*Señales positivas (verdes):*
- El prospecto pide la propuesta económica sin que se la hayas ofrecido
- Comparte el problema con detalles específicos y emocionales (tiene el problema de verdad)
- Pregunta por el proceso de contratación, plazos de implementación o integración con sus sistemas
- Pide referencias de otros clientes o hace preguntas técnicas específicas
- Intenta negociar el precio (está comprometido, solo quiere un mejor trato)

*Señales de advertencia (amarillas):*
- "Muy interesante, envíame más información" sin haber acordado un próximo paso
- "Lo comentamos en el equipo" sin un responsable de decisión identificado
- Entusiasmo genérico sin preguntas específicas sobre su caso de uso
- "Esto es exactamente lo que necesitamos" de alguien que no tiene presupuesto ni autoridad

*Señales negativas (rojas):*
- No pueden articular qué están haciendo actualmente para resolver el problema
- El problema no tiene urgencia: "sería útil pero no es prioritario"
- El decisor real nunca aparece en las conversaciones

**3. Técnicas de validación comercial con bajo presupuesto**
Describe paso a paso cómo ejecutar la validación:

*Discovery calls estructuradas:*
- El protocolo de 45 minutos para extraer la información que necesitas: situación actual, problema real, impacto del problema, intentos fallidos de solución
- Cómo hacer preguntas de hipótesis: "¿Si pudieras hacer X en Y minutos, cambiaría algo para tu equipo?"
- Cómo no contaminar la conversación con tu solución prematuramente

*El test del presupuesto:*
- Cómo preguntar por el presupuesto sin que resulte agresivo
- Señales de que hay partida presupuestaria disponible aunque digan que "no tienen presupuesto"
- Cómo interpretar el silencio sobre el presupuesto

*Pilotos y pruebas de concepto:*
- Cuándo ofrecer un piloto gratuito y cuándo es una señal de debilidad
- Cómo estructurar un piloto de validación que sea un proceso de venta disfrazado
- Qué compromisos pedir del cliente en un piloto para validar el interés real

**4. Cuántos "síes" necesitas para validar el mercado**
Explica cómo interpretar los resultados de la validación comercial:
- El número mínimo de conversaciones que te dan confianza estadística informal
- Cómo interpretar una tasa de conversión de interés a propuesta en etapa de validación
- Cuándo pivota la hipótesis y cuándo se confirma
- El momento en que puedes decir "el mercado existe" con suficiente confianza para escalar

**5. Plan de validación para mi situación**
Basándote en lo que me has descrito, diseña un plan de 30 conversaciones con el protocolo exacto, las hipótesis a testear y los criterios de éxito que te dirán si el mercado existe o necesitas pivotar.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Validación comercial de mercado: técnicas de prospección exploratoria y lectura de señales de compra reales',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Opportunity sizing: de la intuición al análisis que justifica el roadmap',
                'description'      => 'Marco de trabajo para product managers que necesitan cuantificar oportunidades de producto antes de priorizarlas, convirtiendo insights cualitativos en estimaciones numéricas defendibles.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior con experiencia en empresas de tecnología de alto crecimiento. Has presentado análisis de oportunidad a juntas directivas, inversores y equipos de liderazgo, y sabes cómo construir estimaciones que son rigurosas sin ser falsamente precisas.

Necesito aprender a dimensionar oportunidades de producto de forma que pueda priorizar el roadmap con argumentos cuantitativos y no solo intuitivos.

**Mi contexto de producto:**
[Describe el producto que gestionas, en qué fase está y cómo es el proceso actual de priorización en tu empresa]

**La oportunidad que quiero analizar:**
[Describe la oportunidad o feature concreta que necesitas dimensionar, o el tipo de análisis que más necesitas aprender]

---

**1. Por qué el opportunity sizing importa y cuándo es suficiente la intuición**
Contextualiza cuándo vale la pena hacer el análisis formal:
- Las decisiones que no necesitan sizing: cambios pequeños, correcciones de bugs obvios, mejoras de calidad técnica
- Las decisiones que sí lo necesitan: nuevas líneas de producto, features que requieren más de 2 sprints, cambios en el modelo de negocio
- El riesgo de no hacerlo: roadmaps que optimizan lo urgente sobre lo importante, recursos invertidos en oportunidades marginales
- El riesgo de sobre-analizarlo: parálisis por análisis en mercados que cambian rápido

**2. El framework de opportunity sizing para product managers**
Presenta un modelo estructurado en cuatro dimensiones:

*Dimensión 1 – Alcance del problema:*
- ¿Cuántos usuarios tienen este problema? (expresado en número de usuarios activos, no en porcentaje abstracto)
- ¿Con qué frecuencia tienen el problema? (diario, semanal, ocasional)
- ¿Cuál es la severidad del problema? (bloquea el uso, causa fricción, es una molestia menor)
- Cómo calcular el "problema-usuario-frecuencia" como proxy del tamaño de oportunidad

*Dimensión 2 – Impacto en métricas de negocio:*
- Conversión: ¿cuántos usuarios no convierten por este problema? Valor monetario del aumento de conversión
- Retención: ¿cuántos churnan parcialmente porque este problema no está resuelto? Valor de retener un usuario adicional
- Expansión: ¿abriría nuevos segmentos o nuevos mercados? Cuánto vale el acceso a ese segmento
- Eficiencia: ¿reduciría el coste de soporte, operaciones o desarrollo? Ahorro anual estimado

*Dimensión 3 – Esfuerzo de desarrollo:*
- Cómo traducir el esfuerzo en T-shirt sizing a semanas de desarrollo
- Por qué siempre debes multiplicar por un factor de incertidumbre (el famoso "todo tarda el doble")
- Coste de oportunidad: qué dejas de hacer si priorizas esto

*Dimensión 4 – Incertidumbre y riesgo:*
- Factores que pueden invalidar la oportunidad: cambios de mercado, dependencias técnicas, regulación
- Cómo expresar la incertidumbre honestamente sin que el análisis pierda credibilidad
- La diferencia entre imprecisión y sesgo: es mejor ser vagamente correcto que precisamente equivocado

**3. Fuentes de datos para el sizing de oportunidades**
Explica cómo obtener los números que necesitas:
- Datos de comportamiento en producto (Analytics, Mixpanel, Amplitude): qué eventos buscar
- Investigación de usuario: cuántas entrevistas necesitas para tener confianza en un número
- Datos de soporte: el volumen de tickets como proxy del tamaño del problema
- Benchmarks del sector: cuando no tienes datos propios, cómo usar comparativas externas
- El método de triangulación: por qué usar tres fuentes independientes que apuntan al mismo número

**4. Cómo presentar el análisis de oportunidad**
Describe el formato de presentación que funciona con distintos stakeholders:
- Para el CEO o el board: una cifra, una suposición clave y el rango de incertidumbre
- Para el equipo de desarrollo: el desglose de supuestos para que puedan cuestionarlo
- Para el equipo comercial: el impacto en adquisición y retención expresado en términos que usan ellos
- Cómo manejar las preguntas difíciles: "¿Cómo sabes eso?", "¿Qué pasa si estás equivocado?"

**5. Análisis de mi oportunidad**
Con la información que me has dado, construye un ejemplo de opportunity sizing usando el framework anterior, indicando claramente qué datos necesitarías recopilar y cuáles son los supuestos más críticos.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Cuantificación de oportunidades de producto con frameworks numéricos para justificar decisiones de roadmap',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Talent market analysis: entender el mercado laboral antes de abrir posiciones',
                'description'      => 'Marco de análisis del mercado de talento para responsables de RRHH y recruiting: cómo evaluar la oferta y demanda de perfiles antes de diseñar la estrategia de captación y los paquetes retributivos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de talento con experiencia en análisis de mercado laboral y estrategia de captación para empresas de tecnología, servicios profesionales y gran empresa. Has liderado procesos de análisis de talento en mercados competitivos donde encontrar ciertos perfiles es extremadamente difícil.

Necesito analizar el mercado de talento para un perfil o conjunto de perfiles antes de abrir posiciones o definir la estrategia de captación.

**El perfil que necesito:**
[Describe el perfil que quieres contratar: rol, especialidad, nivel de experiencia y habilidades clave]

**Mi empresa:**
[Describe brevemente la empresa: sector, tamaño, ubicación, si ofrece trabajo remoto]

**Mi reto:**
[¿Tienes dificultades para encontrar candidatos, los pierdes frente a competidores, o partes de cero y no sabes cómo está el mercado?]

---

**1. Las dimensiones del análisis de mercado de talento**
Explica qué hay que medir para tener una imagen completa del mercado laboral de un perfil:

*Oferta de talento:*
- Cuántos profesionales con ese perfil existen en el mercado (activos, pasivos y potenciales)
- La diferencia entre talento activo (buscando empleo activamente) y pasivo (empleado pero abierto a oportunidades)
- Cómo estimar el pool de talento usando LinkedIn, informes del sector e indicadores de colegios profesionales
- Geografía del talento: dónde se concentran los profesionales con ese perfil y qué implica para la estrategia

*Demanda de talento:*
- Cuántas empresas están compitiendo por el mismo perfil (ofertas activas como proxy)
- Tendencias de demanda: ¿está creciendo la demanda de ese perfil o estabilizándose?
- Qué tipo de empresas compiten: startups, corporativas, consultoras, y qué propuesta de valor ofrece cada una

**2. Cómo hacer el análisis con herramientas disponibles**
Describe paso a paso cómo recopilar los datos necesarios:

*LinkedIn como fuente de datos de mercado:*
- Búsquedas de talento para estimar el pool disponible
- Análisis de ofertas de empleo activas de competidores: qué piden y cómo lo describen
- Cómo usar LinkedIn Salary Insights y otras herramientas de benchmark retributivo

*Otras fuentes de datos del mercado laboral:*
- Informes salariales del sector (Michael Page, Hays, Randstad, Adecco)
- Glassdoor y niveles.fyi para retribución real y percepción de empresa
- Indeed y Infojobs para analizar el volumen de oferta y demanda por ubicación
- Foros de comunidad del sector para entender las preferencias reales del talento

**3. Análisis competitivo de la propuesta de valor empleadora**
El talento elige entre tú y tus competidores. Explica cómo evaluarte:
- Qué ofrece tu competencia en términos de salario, beneficios y condiciones de trabajo
- Cómo medir tu employer branding relativo: puntuación en Glassdoor, presencia en redes del sector
- La propuesta de valor que el talento de este perfil valora más (¿salario, impacto, aprendizaje, flexibilidad?)
- Dónde tienes ventajas comparativas genuinas y cómo comunicarlas

**4. Implicaciones del análisis para la estrategia de captación**
Traduce los datos del mercado en decisiones concretas de recruiting:
- Si el mercado está muy disputado: cómo ajustar los criterios de selección para ampliar el funnel sin bajar el listón
- Estrategia de canales: qué sourcing funciona para talento activo vs. pasivo en ese perfil
- Timing: cuándo es mejor abrir la posición (hay estacionalidad en el mercado de talento)
- Build vs. buy: cuándo tiene más sentido formar internamente que buscar en el mercado externo
- Salarios y paquete: cómo posicionarte (percentil 50, 75 o 90) según tu urgencia y recursos

**5. Análisis para mi caso**
Con la información que me has dado, describe cómo estructurarías el análisis de mercado de talento para ese perfil en los próximos 5 días hábiles: qué fuentes consultarías, qué indicadores priorizarías y qué preguntas específicas intentarías responder.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Análisis de mercado de talento para diseñar estrategias de captación y retribución competitivas',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Financial market analysis: evaluar oportunidades de inversión y expansión',
                'description'      => 'Marco de análisis financiero de mercado para CFOs y directores financieros que evalúan oportunidades de expansión, inversión o entrada en nuevos negocios.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con experiencia en análisis de oportunidades de inversión y expansión para empresas en crecimiento. Has evaluado decenas de mercados nuevos, adquisiciones y proyectos de expansión geográfica, y sabes cómo combinar el análisis financiero con el análisis de mercado para tomar decisiones fundamentadas.

Necesito analizar la viabilidad financiera de entrar en un nuevo mercado o desarrollar una nueva línea de negocio.

**La oportunidad que evalúo:**
[Describe la oportunidad: nueva geografía, nuevo producto, adquisición, etc.]

**Mi empresa:**
[Describe el sector, tamaño de la empresa y situación financiera actual]

**Mi duda:**
[¿Cuál es el aspecto financiero del análisis de mercado que más te preocupa o que menos sabes cómo abordar?]

---

**1. El análisis financiero de mercado como proceso estructurado**
Explica las fases de un análisis de oportunidad financiero riguroso:
- Fase 1 – Scoping: definir exactamente qué mercado y qué modelo de negocio se está evaluando
- Fase 2 – Dimensionamiento: cuantificar el tamaño del mercado y la cuota alcanzable
- Fase 3 – Modelización: construir el modelo financiero del negocio en el nuevo mercado
- Fase 4 – Validación: contrastar los supuestos con datos reales y expertos del mercado
- Fase 5 – Decisión: presentar la recomendación con los escenarios y sensibilidades

**2. Cuantificación del retorno potencial**
Desarrolla cómo estimar el valor financiero de la oportunidad:

*Proyección de ingresos:*
- Tamaño del mercado total y cuota de mercado alcanzable en el horizonte de inversión
- Modelo de penetración de mercado: curva de adopción y supuestos de rampa de crecimiento
- Precio y volumen: cómo proyectar el mix de producto y la evolución del precio medio

*Proyección de costes:*
- Costes de entrada: inversión inicial (CAPEX), coste de adquisición del primer cliente (CAC) a escala
- Estructura de costes fijos y variables del nuevo negocio
- Economías de escala: cuándo se alcanzan y cómo afectan al margen

*Métricas de retorno:*
- VAN (Valor Actual Neto): cómo calcularlo y qué tasa de descuento usar
- TIR (Tasa Interna de Retorno): cómo interpretarla en el contexto de tu coste de capital
- Periodo de recuperación (payback): cuándo recuperas la inversión inicial
- EBITDA break-even: en qué mes o año el negocio en el nuevo mercado cubre sus costes operativos

**3. Análisis de riesgo financiero**
Explica cómo identificar y cuantificar los principales riesgos:
- Análisis de sensibilidad: qué supuestos tienen mayor impacto en el VAN si se desvían
- Escenario pesimista: qué pasa si el crecimiento es la mitad de lo esperado y cuánto tiempo aguantas
- Riesgo de divisa: si es expansión internacional, cómo protegerte de la volatilidad
- Riesgo regulatorio: cómo monetizar el impacto de posibles cambios normativos
- Riesgo de ejecución: cómo ajustar las proyecciones por la capacidad real de tu organización de ejecutar en paralelo

**4. El modelo de negocio como validación del análisis de mercado**
Explica la conexión entre el análisis de mercado y el modelo financiero:
- Cómo trasladar el análisis de mercado (TAM/SAM/SOM) a líneas del P&L
- Los errores más comunes: captura de mercado irreal, costes de entrada subestimados, tiempo hasta la rentabilidad subestimado
- Cómo usar comparables (empresas similares en mercados similares) para calibrar las proyecciones
- El nivel de detalle del modelo en función de la fase de la decisión: más detalle si vas a invertir más

**5. Estructura de la presentación al comité de dirección**
Describe cómo presentar el análisis de oportunidad:
- La recomendación en la primera diapositiva: no hacer suspense con los números
- Los tres escenarios: base, optimista y pesimista con probabilidades asignadas
- El plan de hitos: qué tienes que ver (leading indicators) para saber si la oportunidad está materializándose
- Las condiciones de salida: cuándo deberías abandonar la inversión si las cosas van mal

**6. Análisis de mi oportunidad**
Basándote en lo que me has descrito, identifica los cinco supuestos financieros más críticos de la oportunidad y propón cómo validar cada uno antes de comprometer la inversión.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Análisis financiero de oportunidades de expansión e inversión: modelización, riesgo y presentación al comité de dirección',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Market entry legal analysis: aspectos jurídicos de entrar en un nuevo mercado',
                'description'      => 'Análisis legal estructurado para empresas que planean entrar en nuevos mercados geográficos o lanzar nuevas líneas de negocio, identificando los requisitos regulatorios, licencias y riesgos jurídicos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado de negocios internacionales con experiencia en análisis regulatorio y asesoramiento en expansión a nuevos mercados, tanto dentro de la Unión Europea como en mercados internacionales. Has guiado a empresas de tecnología, servicios y distribución a través de los procesos de entrada a nuevos países y sectores regulados.

Necesito un análisis legal de los aspectos jurídicos de entrar en un nuevo mercado o lanzar una nueva línea de negocio.

**Mi empresa:**
[Describe tu empresa: sector, país de origen, modelo de negocio actual]

**El mercado que quiero entrar:**
[Describe el mercado: país o región, sector específico, tipo de producto o servicio]

**Mi duda legal principal:**
[¿Cuál es el aspecto jurídico que más te preocupa o del que menos información tienes?]

---

**1. Las dimensiones legales de la entrada a un nuevo mercado**
Explica el marco general de análisis legal que debe hacerse antes de cualquier expansión:

*Estructura jurídica de entrada:*
- Opciones de estructura: sucursal, filial, joint venture, distribuidor independiente, agente comercial
- Implicaciones fiscales de cada estructura: retención de dividendos, precios de transferencia, PE (establecimiento permanente)
- Tiempo y coste de constitución en los principales mercados europeos y latinoamericanos
- La responsabilidad de la matriz: cuándo la empresa origen responde por las obligaciones de la filial

*Requisitos regulatorios sectoriales:*
- Cómo identificar si tu sector está regulado en el mercado destino y qué licencias necesitas
- Sectores habitualmente regulados: finanzas, salud, telecomunicaciones, energía, alimentación, transporte
- El proceso de homologación de productos: cuánto tarda y cuánto cuesta en mercados clave

**2. Análisis regulatorio por tipo de negocio**
Desarrolla las particularidades legales de los modelos de negocio más comunes:

*Comercio electrónico transfronterizo:*
- Obligaciones fiscales: IVA en destino para ventas B2C en la UE (OSS), umbrales por país
- Regulación de pagos: PSD2 y SCA en Europa, equivalentes en otros mercados
- Derechos del consumidor: garantías, desistimiento y qué ley aplica (origen vs. destino)
- Logística y aduanas: qué cambia después del Brexit para ventas al Reino Unido

*Plataformas y marketplaces digitales:*
- Digital Services Act (DSA): obligaciones para plataformas grandes y muy grandes en la UE
- Responsabilidad del marketplace por contenidos y productos de terceros
- Regulación de la economía de plataformas: la clasificación de trabajadores independientes en distintos países

*Servicios profesionales y consultoría:*
- Libre prestación de servicios en la UE vs. reconocimiento de titulaciones en destino
- Colegiación obligatoria y sus equivalentes internacionales para profesiones reguladas
- Contratos con clientes internacionales: ley aplicable y jurisdicción competente

**3. Protección de la propiedad intelectual en nuevos mercados**
Explica los riesgos de PI más comunes al entrar en un nuevo mercado:
- Registro de marca: por qué debes registrar antes de entrar, no después
- Patentes y diseños industriales: validez territorial y coste de extensión geográfica
- Protección del software y datos: cómo varía la protección entre la UE, EE.UU. y Asia
- Riesgo de falsificación y copia: qué mercados tienen mayor riesgo y cómo protegerse

**4. Contratos y acuerdos locales clave**
Describe los contratos que debes tener antes de empezar a operar:
- Contrato de distribución o agencia: diferencias legales y riesgos de la clasificación incorrecta
- NDAs con proveedores y partners locales: qué cláusulas son imprescindibles
- Contrato de trabajo local: las diferencias más relevantes respecto a tu país de origen (despido, beneficios obligatorios, sindicatos)
- Acuerdos con landlords locales: plazos, garantías y condiciones de salida en los principales mercados

**5. Plan de due diligence legal para mi caso**
Basándote en la información que me has dado, describe el proceso de análisis legal que deberías completar en los próximos 60 días antes de comprometer recursos en ese mercado, identificando dónde necesitas un abogado local y dónde puedes hacer el análisis internamente.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Análisis legal de entrada a nuevos mercados: estructura societaria, regulación sectorial y protección de propiedad intelectual',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Market feedback through CS: usar conversaciones con clientes para validar el mercado',
                'description'      => 'Metodología para que los equipos de Customer Success y soporte transformen las interacciones diarias con clientes en inteligencia de mercado accionable para el producto y el negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia en empresas de tecnología y servicios donde el equipo de CS es la fuente primaria de inteligencia de mercado. Has diseñado sistemas para capturar, estructurar y distribuir el feedback del cliente de forma que el equipo de producto y liderazgo pueda actuar sobre él.

Necesito construir un sistema para convertir las conversaciones diarias con clientes en inteligencia de mercado que mejore el producto y las decisiones de negocio.

**Mi equipo:**
[Describe tu equipo de CS o soporte: tamaño, tipo de clientes que atiende y canales que usa]

**Mi reto:**
[¿El problema es que el feedback se pierde, que no llega al equipo correcto, que no está estructurado, o que llega pero nadie actúa?]

---

**1. Por qué el equipo de CS es el mejor sistema de inteligencia de mercado**
Contextualiza el valor único del feedback del equipo de CS:
- CS habla con los clientes reales, no con los que respondieron una encuesta
- El cliente habla con CS cuando tiene un problema real: el feedback más valioso surge de la frustración
- CS escucha a los clientes que están a punto de irse: las razones de churn contienen la hoja de ruta del producto
- La diferencia entre feedback de CS (experiencia real) y feedback de investigación de usuario (expectativas y preferencias)

**2. Qué tipos de inteligencia de mercado genera CS**
Describe las categorías de información que el equipo de CS captura naturalmente:

*Inteligencia de producto:*
- Features que los clientes piden repetidamente (demanda latente)
- Flujos que causan confusión o errores (problemas de usabilidad no detectados en tests)
- Workarounds que los clientes inventan para suplir funcionalidad que no existe
- Integraciones que los clientes necesitan con herramientas externas

*Inteligencia competitiva:*
- Competidores que los clientes mencionan (los que están evaluando o han evaluado)
- Funcionalidades específicas de competidores que los clientes piden
- Razones de churn relacionadas con la competencia
- Cómo los clientes posicionan tu producto vs. alternativas

*Inteligencia de segmento:*
- Casos de uso que no anticipaste cuando diseñaste el producto
- Industrias o perfiles de cliente que tienen necesidades específicas no atendidas
- Señales de que ciertos segmentos tienen mucho más valor que otros (ARPU, satisfacción, expansión)

**3. Sistema de captura y estructuración del feedback**
Explica cómo construir el proceso de recogida de información:
- Protocolo de tagging en el CRM: las categorías de feedback que debes tener siempre activas
- Plantillas de resumen de conversación: qué debe capturar el agente después de cada interacción relevante
- Sesiones de síntesis semanales del equipo de CS: cómo estructurar 30 minutos para extraer los patrones
- Herramientas de análisis de conversaciones: transcripción automática, análisis de sentimiento y clasificación de temas

**4. Cómo distribuir la inteligencia de mercado internamente**
Describe el sistema de distribución del feedback al resto de la organización:
- El informe mensual de voz del cliente: formato, destinatarios y cómo hacerlo que la gente lea
- Cómo alimentar el backlog de producto con feedback de CS sin saturar al PM de ruido
- El canal de CS-to-Product: qué información va directo al PM y qué pasa por un proceso de síntesis
- Cómo involucrar a liderazgo sin que el feedback se quede en la capa superior sin llegar al equipo

**5. De la inteligencia a la acción**
Explica cómo cerrar el ciclo para que el feedback realmente cambie algo:
- Cómo medir si el feedback de CS está impactando en las decisiones de producto
- El ritual de "closing the loop": cómo comunicar al cliente que su feedback ha sido implementado
- Cómo usar el feedback de CS para validar o refutar hipótesis de mercado del equipo de producto
- Cómo hacer que los agentes de CS se sientan parte del proceso de mejora del producto

**6. Plan para mi situación**
Basándote en el reto que me has descrito, propón un sistema mínimo viable de inteligencia de mercado que puedas implementar en dos semanas con los recursos que tienes.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Sistema para convertir conversaciones de soporte y CS en inteligencia de mercado accionable para producto y liderazgo',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Análisis de mercado del freelance: identificar nichos con mayor demanda y precio',
                'description'      => 'Metodología para que los freelancers analicen el mercado de servicios independientes y encuentren los nichos de mayor rentabilidad y demanda en su especialidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de negocio freelance con experiencia ayudando a profesionales independientes a posicionarse estratégicamente en mercados competitivos. Has trabajado con freelancers de diseño, programación, marketing, redacción, consultoría y muchas otras disciplinas, y sabes cómo encontrar los nichos donde la demanda supera la oferta y los precios son más altos.

Necesito analizar el mercado freelance en mi especialidad para encontrar los nichos donde puedo trabajar mejor, cobrar más y tener clientes más satisfechos.

**Mi especialidad:**
[Describe qué haces como freelance: tu disciplina, las habilidades principales y el tipo de proyectos que has hecho]

**Mi situación actual:**
[¿Eres un freelance nuevo tratando de posicionarte, o uno establecido que quiere mejorar su nicho y sus tarifas?]

**Mi mercado geográfico:**
[¿Trabajas principalmente con clientes locales, en España, en Latinoamérica, o de forma internacional en inglés?]

---

**1. Por qué la especialización en nicho es la estrategia más rentable para el freelance**
Contextualiza el reto del mercado freelance generalista:
- El freelance generalista compite siempre en precio: cuando cualquiera puede hacer lo mismo, el más barato gana
- El freelance especializado compite en valor: cuando eres el mejor para ese problema específico, el precio importa menos
- La paradoja del nicho: cuanto más te especializas, menos competencia tienes aunque el mercado sea más pequeño
- La ruta de la especialización: cómo pasar de generalista a especialista sin perder los clientes actuales

**2. Cómo mapear el mercado freelance en tu especialidad**
Describe el proceso de análisis de mercado adaptado al contexto freelance:

*Análisis de demanda:*
- Plataformas freelance como indicador de demanda: qué categorías tienen más proyectos en Upwork, Fiverr, Malt, Toptal
- Ofertas de empleo como proxy de demanda de habilidades: qué buscan las empresas en perfiles internos que podrías ofrecer como freelance
- Comunidades y foros del sector: qué problemas repiten los potenciales clientes que nadie está resolviendo bien
- Tendencias de búsqueda en Google: cómo usar Google Trends y Keyword Planner para identificar demanda emergente

*Análisis de la competencia:*
- Cómo evaluar a los freelancers que trabajan en tu mismo espacio: qué ofrecen, a qué precio, qué dicen sus reseñas
- Los huecoss en la oferta: qué necesidades de los clientes no están bien cubiertas por los freelancers actuales
- El análisis de reseñas negativas: qué se quejan los clientes de otros freelancers es tu oportunidad

**3. Identificación de nichos de alto valor**
Explica los criterios para evaluar si un nicho es atractivo:

*Criterios de demanda:*
- Volumen de proyectos disponibles: hay suficiente mercado para vivir del nicho
- Urgencia del cliente: los proyectos con urgencia siempre se pagan mejor
- Repetición vs. proyecto único: los clientes que necesitan el servicio de forma recurrente son más valiosos
- Crecimiento del nicho: mercados emergentes donde la demanda crece más rápido que la oferta

*Criterios de rentabilidad:*
- Presupuesto típico del cliente en ese nicho: empresas grandes pagan más que startups pequeñas
- Complejidad del proyecto: mayor complejidad justifica mayor precio y reduce la competencia de perfiles junior
- Switching cost del cliente: si cambiar de freelance es costoso para el cliente, tendrás más poder de negociación

**4. Validación del nicho antes de comprometerte**
Describe cómo testear si el nicho es viable sin arriesgarlo todo:
- Outreach de validación: cómo contactar a 20 posibles clientes en el nicho para medir el interés real
- El proyecto piloto: cómo conseguir el primer proyecto en el nicho aunque no tengas portfolio específico
- Comunidades del nicho: cómo hacerte visible en los espacios donde se mueven tus clientes objetivo
- El test de precio: cómo saber si puedes cobrar más en ese nicho que en tu mercado actual

**5. Plan de reposicionamiento para mi caso**
Basándote en mi perfil y mi situación, identifica tres nichos específicos que podrías explorar en los próximos 90 días, con los criterios por los que los has seleccionado y los primeros pasos concretos para entrar en cada uno.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Análisis de mercado freelance para identificar nichos de alta demanda y rentabilidad en la especialidad propia',
                'vote_score'       => 32,
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
