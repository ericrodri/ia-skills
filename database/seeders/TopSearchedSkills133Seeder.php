<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills133Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Análisis competitivo de marketing',
                'description'      => 'Mapea el posicionamiento, mensajes, canales y presupuesto estimado de los competidores para encontrar los gaps que puedes explotar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista de inteligencia competitiva especializado en marketing. Voy a darte información sobre mis competidores y quiero que me ayudes a construir un análisis competitivo completo que me permita identificar las oportunidades de diferenciación y los gaps que puedo explotar.

Para comenzar, necesito que me hagas las preguntas necesarias para recopilar la información base:
- Cuáles son mis principales competidores (máximo 5)
- Cuál es mi propuesta de valor actual
- En qué mercado o segmento compito
- Qué presupuesto y recursos tengo disponibles para marketing

Una vez que tenga esa información, quiero que construyas el análisis siguiendo esta estructura:

**1. Matriz de posicionamiento**
Crea una tabla comparativa con los competidores en los ejes que más importan en mi sector. Evalúa precio, calidad percibida, especialización, cobertura geográfica y propuesta de valor principal. Identifica los espacios vacíos donde ningún competidor está posicionado de forma clara.

**2. Análisis de mensajes y comunicación**
Revisa los mensajes principales de cada competidor: su tagline, su propuesta de valor explícita, los pain points que atacan, el tono de voz que usan y el tipo de contenido que publican. Identifica qué temas dominan, cuáles evitan y dónde hay fatiga de mensaje en el mercado.

**3. Auditoría de canales**
Mapea qué canales usa cada competidor y con qué intensidad: SEO, SEM, redes sociales, email marketing, contenido orgánico, eventos, partnerships, PR. Estima el nivel de inversión relativa en cada canal según señales observables (volumen de contenido, frecuencia de publicación, presencia en buscadores).

**4. Estimación de presupuesto**
Usando señales indirectas (herramientas como SimilarWeb, SEMrush, LinkedIn Ads Library, Meta Ads Library), estima el rango de inversión en marketing de cada competidor. No busco cifras exactas, sino un orden de magnitud que me ayude a entender dónde concentran su gasto.

**5. Análisis de audiencia y comunidad**
Evalúa el tamaño y calidad de la comunidad de cada competidor: seguidores en redes, engagement real vs. inflado, reseñas en G2 o Capterra si aplica, menciones en foros y comunidades del sector.

**6. Fortalezas y debilidades por competidor**
Para cada uno, lista sus tres principales fortalezas y sus tres principales debilidades desde la perspectiva del marketing y la percepción de mercado.

**7. Gaps y oportunidades**
Basándote en todo el análisis anterior, identifica:
- Los temas de contenido que nadie está cubriendo bien
- Los segmentos de audiencia que están desatendidos
- Los canales donde hay menor competencia pero audiencia potencial
- Los mensajes que resuenan en el mercado pero ningún competidor articula con claridad
- Las objeciones de compra que los competidores no están resolviendo

**8. Recomendaciones de posicionamiento**
Propón un posicionamiento diferenciado basado en los gaps identificados. Define el mensaje central, los tres pilares de comunicación y los canales prioritarios donde enfocar el presupuesto en los próximos 90 días.

**9. Plan de monitoreo continuo**
Diseña un sistema de vigilancia competitiva simple: qué fuentes revisar, con qué frecuencia y qué señales debo observar para detectar cambios de estrategia de la competencia antes de que impacten en mis métricas.

Al final, dame un resumen ejecutivo de media página que pueda compartir con el equipo directivo para alinear la estrategia.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Análisis competitivo de marketing para identificar gaps y oportunidades de diferenciación',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Evaluación técnica de productos de la competencia',
                'description'      => 'Cómo analizar la arquitectura, el stack y las decisiones técnicas de productos competidores para informar las tuyas propias.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software senior con experiencia en análisis competitivo técnico. Voy a darte información sobre un producto competidor y quiero que me ayudes a construir una evaluación técnica profunda que me permita tomar decisiones informadas sobre mi propio producto.

Primero, ayúdame a recopilar la información correcta haciéndome preguntas sobre:
- El producto competidor que quiero analizar
- Mi contexto: qué estoy construyendo y en qué fase estoy
- Qué decisiones técnicas específicas necesito informar

Con esa base, desarrolla el siguiente análisis técnico:

**1. Inferencia del stack tecnológico**
A partir de señales públicas (job postings, tech stacks en LinkedIn, Wappalyzer, BuiltWith, análisis de respuestas HTTP, código fuente del frontend, documentación pública de la API), construye una hipótesis del stack tecnológico. Diferencia lo que sabes con certeza de lo que estás infiriendo.

**2. Análisis de la arquitectura observable**
Examina la API pública si existe, los tiempos de respuesta, el comportamiento bajo carga observado, los patrones de URL, los headers de respuesta y cualquier documentación técnica disponible. Infiere si usa microservicios o monolito, qué tipo de base de datos es probable, cómo gestiona la autenticación.

**3. Decisiones técnicas clave**
Identifica las decisiones de arquitectura que han tomado que son visibles: cómo manejan el estado en el frontend, qué patrón de rendering usan, cómo gestionan los assets, qué CDN y cloud provider usan, qué herramientas de observabilidad dejan señales públicas.

**4. Calidad del producto observable**
Evalúa la calidad técnica desde la perspectiva del usuario: tiempo de carga, Core Web Vitals si puedes medirlos, comportamiento en móvil, gestión de errores visible, accesibilidad básica. Esto refleja las prioridades técnicas del equipo.

**5. Capacidades técnicas inferidas**
Basándote en las features del producto, infiere qué capacidades técnicas ha tenido que construir el equipo: procesamiento de datos en tiempo real, búsqueda avanzada, integrations, procesamiento de archivos, APIs externas que consumen.

**6. Deuda técnica visible**
Identifica señales de deuda técnica: inconsistencias en la UI que sugieren código legado, comportamientos erráticos documentados en reseñas, tiempo de lanzamiento de features, calidad de la API pública si existe.

**7. Tamaño y capacidad del equipo técnico**
A partir de LinkedIn, job postings actuales y pasados, y el ritmo de lanzamiento de features, estima el tamaño del equipo de ingeniería, su senioridad media y las áreas donde están invirtiendo.

**8. Lecciones para mi roadmap**
Traduce los hallazgos en decisiones concretas para mi producto: qué tecnologías evitar porque ya sabemos que crean problemas, qué decisiones arquitectónicas parecen haber funcionado bien, qué features tardaron más de lo esperado en el competidor y por qué.

**9. Ventajas técnicas que puedo explotar**
Identifica dónde mis decisiones técnicas me dan ventaja: si ellos tienen deuda y yo no, si mi stack me permite iterar más rápido en ciertas áreas, si hay capacidades que ellos no tienen y yo puedo construir.

Termina con una tabla de decisiones técnicas recomendadas con el razonamiento de cada una.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Evaluación técnica de productos competidores para informar decisiones de arquitectura y roadmap',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Benchmarking de UX competitivo',
                'description'      => 'Analiza sistemáticamente la experiencia de usuario de los competidores para identificar las best practices del sector y las oportunidades de diferenciación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un investigador de UX especializado en análisis competitivo. Quiero que me guíes a través de un benchmarking de UX completo de los competidores en mi sector para identificar los estándares que los usuarios ya esperan, las mejores prácticas establecidas y los espacios donde puedo diferenciarme con una experiencia superior.

Empieza haciéndome las preguntas necesarias para entender:
- Qué producto estoy diseñando y para qué usuarios
- Cuáles son los 3-5 competidores directos que quiero analizar
- Qué flujos o áreas de la experiencia son más críticos para mi negocio

Con esa información, desarrolla el siguiente benchmarking:

**1. Definición de los criterios de evaluación**
Antes de analizar, define el framework de evaluación que usaremos. Propón las dimensiones relevantes para mi contexto: onboarding, navegación, flujo principal de valor, gestión de errores, mobile experience, accesibilidad, personalización, tiempo hasta el primer valor percibido. Ajusta según lo que es más crítico en mi sector.

**2. Análisis por flujo crítico**
Para cada flujo identificado como prioritario, analiza cómo lo resuelve cada competidor. Documenta el número de pasos, las decisiones de diseño más llamativas, los patrones de interacción que usan y los puntos donde la experiencia es claramente superior o inferior.

**3. Inventario de patrones**
Crea un inventario de los patrones de diseño que se repiten entre competidores. Estos son las convenciones del sector que los usuarios ya han interiorizado. Usarlos bien te hace predecible (positivo); innovar aquí sin razón añade fricción innecesaria.

**4. Análisis de la primera impresión**
Evalúa el landing page, la pantalla de registro y el primer uso de cada competidor. ¿Qué comunican en los primeros 5 segundos? ¿Cuánto tiempo tarda un usuario nuevo en entender el valor? ¿Cuántos pasos tiene el registro? ¿Piden demasiado demasiado pronto?

**5. Mobile y multi-dispositivo**
Evalúa la experiencia en móvil específicamente: ¿tienen app nativa o web responsive? ¿La experiencia es de primera clase o claramente un puerto del desktop? ¿Qué funcionalidades están disponibles en móvil y cuáles no?

**6. Gestión de estados vacíos y errores**
Analiza cómo cada competidor maneja los estados vacíos (usuario nuevo sin datos), los errores y los estados de carga. Este es un área donde muchos productos fallan y donde una experiencia superior crea fidelidad.

**7. Personalización y progresión**
¿Cómo evoluciona la experiencia a medida que el usuario usa más el producto? ¿Hay personalización, atajos para usuarios expertos, progresión de funcionalidades? ¿O la experiencia es igual para el usuario de día 1 y el de año 1?

**8. Evaluación de accesibilidad básica**
Comprueba señales básicas de accesibilidad: contraste de colores, navegación con teclado, tamaño de los targets táctiles, uso de texto alternativo. Esto refleja la madurez del equipo de diseño.

**9. Mapa de oportunidades**
Basándote en todo el análisis, crea un mapa visual (en formato tabla) de las oportunidades de UX: áreas donde todos los competidores son mediocres (alta oportunidad), áreas donde hay un líder claro (aprende de él), áreas donde hay variedad de enfoques (experimenta).

**10. Recomendaciones de diseño priorizadas**
Lista las 10 decisiones de diseño más importantes para mi producto, justificadas por los hallazgos del benchmarking. Diferencia entre lo que debes hacer igual que el mercado (para cumplir expectativas) y lo que debes hacer diferente (para diferenciarte).
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Benchmarking de UX competitivo para identificar estándares del sector y oportunidades de diferenciación',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Inteligencia competitiva para ventas',
                'description'      => 'Battle cards, manejo de objeciones comparativas y cómo posicionar tu solución cuando el cliente ya tiene una propuesta de la competencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de ventas especializado en inteligencia competitiva. Necesito que me ayudes a construir el sistema de inteligencia competitiva que mi equipo de ventas necesita para ganar deals cuando nos encontramos frente a frente con la competencia.

Para empezar, ayúdame a recopilar la información necesaria:
- Cuáles son mis 3 principales competidores en los deals
- Cuál es mi solución y cuál es mi propuesta de valor diferencial
- Cuál es el perfil típico del comprador con quien compito

Con esa base, vamos a construir el sistema completo:

**1. Battle cards por competidor**
Para cada competidor, crea una battle card de una página con:
- Resumen ejecutivo de su propuesta de valor
- Sus fortalezas reales (no las minimices, el equipo de ventas necesita honestidad)
- Sus debilidades reales
- Cómo posicionar mi solución frente a ellos
- Las 3 preguntas que debo hacer para desviar la conversación hacia mis fortalezas
- Las frases exactas que ellos usan para atacarme y mi respuesta para cada una

**2. Manejo de la comparación directa**
El cliente dice: "Estamos también viendo a [competidor]". Dame el script exacto para responder en ese momento. No quiero minimizar al competidor (eso da mala imagen), sino reencuadrar la conversación hacia los criterios donde yo gano.

**3. Respuestas a las objeciones de precio**
Cuando el competidor es más barato y el cliente lo menciona. Dame el framework para traducir la diferencia de precio en diferencia de valor, con ejemplos concretos y formas de cuantificar el ROI de mi solución.

**4. Gestión del escenario de propuesta simultánea**
El cliente tiene mi propuesta y la del competidor sobre la mesa. Qué información necesito conseguir, qué preguntas hacer para saber en qué punto del proceso estamos, y cómo influir en los criterios de evaluación antes de que la decisión esté tomada.

**5. Señales de que el cliente viene de perder con el competidor**
Lista las señales de dolor típicas de clientes que han usado al competidor y están insatisfechos. Cómo identificarlas en la conversación y cómo usar ese contexto sin atacar al competidor directamente.

**6. Win/loss analysis template**
Crea la plantilla de win/loss que mi equipo debe completar después de cada deal donde aparezca un competidor. Los campos que necesito para aprender sistemáticamente de cada victoria y cada derrota.

**7. Gestión de la inteligencia competitiva en el equipo**
Cómo crear un sistema simple para que los comerciales compartan lo que aprenden sobre la competencia en cada llamada: el canal, el formato y la cadencia para mantener las battle cards actualizadas sin que sea una carga administrativa.

**8. Escenarios difíciles**
Dame el guión para tres escenarios complicados: el cliente que ya decidió ir con el competidor y quiere que iguale el precio, el cliente que pide una comparación punto a punto por escrito, y el cliente interno que es fan del competidor y bloquea nuestra entrada.

Termina con un resumen de las 5 cosas más importantes que mi equipo de ventas debe saber sobre cada competidor.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construcción de sistema de inteligencia competitiva y battle cards para el equipo de ventas',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Análisis de producto competidor',
                'description'      => 'Cómo estudiar los productos de la competencia, qué métricas buscar en sus apps y cómo traducir los hallazgos en decisiones de roadmap.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior con experiencia en análisis competitivo de producto. Quiero que me guíes a través de un análisis de producto competidor completo que termine en decisiones concretas de roadmap para mi producto.

Empieza haciéndome preguntas para entender:
- Qué producto de la competencia quiero analizar y por qué ahora
- Cuál es mi producto, en qué fase está y cuáles son mis objetivos de crecimiento
- Qué decisiones de roadmap están pendientes y necesitan información

Con esa base, construye el análisis:

**1. Framework de análisis**
Antes de empezar, define el ángulo desde el que vamos a analizar el producto competidor. No quiero un análisis genérico; quiero uno que responda a mis preguntas de roadmap concretas. Propón el framework más adecuado para mi situación.

**2. Desglose de features y capacidades**
Mapea el producto competidor feature por feature. Organízalas por área funcional y clasifícalas en: core (sin esto el producto no funciona), diferenciadores (esto es lo que venden), y periféricas (existen pero no son clave). Identifica cuáles de mis features están en su roadmap visible o han sido pedidas públicamente en sus foros.

**3. Análisis del usuario objetivo**
A partir de sus mensajes, su pricing, los casos de uso que destacan y las reseñas públicas, infiere a quién están sirviendo bien y a quién están desatendiendo. ¿Están moviendo su ICP? ¿Están subiendo de mercado (moving upmarket) o bajando?

**4. Métricas de producto observables**
Busca señales de salud del producto: ratings en tiendas de apps, reseñas en G2/Capterra/ProductHunt, tendencias en reseñas recientes vs. antiguas, NPS estimado si hay datos públicos, menciones en foros como Reddit o comunidades del sector. ¿El producto está mejorando o estancándose en percepción de calidad?

**5. Análisis del ritmo de iteración**
Revisa los changelogs públicos, las notas de release y la cadencia de actualizaciones. ¿Cuánto están tardando en lanzar features? ¿Están iterando en profundidad (mejorando lo existente) o en amplitud (añadiendo nuevas áreas)? Esto refleja la estrategia y la capacidad del equipo.

**6. Análisis de precios y monetización**
Estudia su estructura de precios: planes, qué incluye cada uno, qué queda fuera para forzar upgrades. ¿Han cambiado precios recientemente? ¿Qué dice eso de su estrategia de negocio? ¿Cómo se compara con el valor que entregan?

**7. Puntos de dolor documentados**
Recopila los puntos de dolor más mencionados en reseñas, foros y redes sociales. Estos son los problemas que sus propios usuarios reconocen. Clasifícalos por frecuencia y gravedad.

**8. Impacto en mi roadmap**
Ahora traduce todo lo anterior en decisiones concretas:
- Features que debo acelerar porque ellos las están lanzando
- Features que puedo deprioritizar porque ellos las tienen cubiertas
- Oportunidades de diferenciación donde ellos son débiles y yo puedo ser fuerte
- Segmentos de usuarios que puedo capturar porque ellos los están descuidando

**9. Sistema de monitoreo de producto competidor**
Diseña un sistema simple para monitorear el producto de la competencia de forma continua: qué fuentes revisar, con qué frecuencia y cómo documentar los cambios para que el equipo aprenda de ellos.

Cierra con un one-pager de decisiones de roadmap basadas en el análisis.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Análisis de producto competidor para tomar decisiones informadas de roadmap',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Benchmarking de compensación',
                'description'      => 'Compara salarios, beneficios y cultura con el mercado para saber si eres competitivo y qué debes mejorar para atraer y retener talento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en compensación y beneficios con experiencia en benchmarking de mercado. Quiero que me ayudes a construir un análisis completo de la posición competitiva de mi empresa en materia de compensación, beneficios y cultura para identificar qué debo mejorar para atraer y retener el talento que necesito.

Empieza con las preguntas necesarias para contextualizar:
- El tamaño de la empresa y el sector
- Las posiciones clave que quiero analizar (máximo 5 roles)
- La localización geográfica y si hay trabajo remoto
- Los competidores de talento más relevantes (no solo competidores de negocio)

Con esa información, desarrolla el benchmarking completo:

**1. Metodología de benchmarking**
Explica qué fuentes vamos a usar para el análisis: Glassdoor, LinkedIn Salary, Levels.fyi si hay perfiles técnicos, informes de sector, encuestas salariales de asociaciones, ofertas de empleo publicadas y entrevistas de salida propias. Diferencia la fiabilidad de cada fuente y cómo triangular los datos.

**2. Análisis salarial por posición**
Para cada rol, establece las bandas salariales del mercado: percentil 25, 50, 75 y 90. Identifica en qué percentil se sitúa mi oferta actual. Define el percentil objetivo según la estrategia de talento de la empresa.

**3. Análisis de compensación total**
El salario base es solo una parte. Analiza la compensación total: variable (bonus, comisiones), equity si aplica, beneficios monetizables (tickets restaurant, seguro médico, plan de pensiones), beneficios no monetizables (días de vacaciones, horario flexible, trabajo remoto). Calcula el valor económico total y compáralo con el mercado.

**4. Benchmarking de beneficios**
Más allá del dinero, mapea los beneficios que ofrecen los competidores de talento más relevantes: formación y desarrollo, equipamiento, bienestar, conciliación, política de trabajo remoto, cultura de feedback. Identifica qué beneficios se han convertido en expectativa de mercado y cuáles siguen siendo diferenciadores.

**5. Análisis de la propuesta de valor al empleado**
La compensación es solo una parte de por qué alguien elige y se queda en una empresa. Analiza los elementos no monetarios: la misión y el impacto del trabajo, las oportunidades de crecimiento, la calidad del management, el equipo y las personas, la cultura de trabajo. Evalúa cómo nos perciben en cada dimensión.

**6. Análisis de Glassdoor y fuentes de reputación**
Revisa la percepción externa de la empresa como empleadora: rating en Glassdoor, las menciones más frecuentes en las reseñas (tanto positivas como negativas), las preguntas de entrevista más reportadas y cómo nos compara el mercado con los competidores.

**7. Diagnóstico de la posición competitiva**
Basándote en el análisis, establece un diagnóstico claro:
- ¿Eres competitivo en salario base?
- ¿Eres competitivo en compensación total?
- ¿Eres competitivo en cultura y propuesta de valor no monetaria?
- ¿Dónde están los mayores gaps?
- ¿Qué roles tienen mayor riesgo de rotación por razones de compensación?

**8. Plan de mejora priorizado**
Propón un plan de mejora con tres horizontes:
- Acciones inmediatas (sin coste o coste mínimo) que mejoran la percepción
- Ajustes a 6 meses que requieren presupuesto
- Cambios estructurales a 12-18 meses para reposicionar la oferta de empleador

**9. Modelo de decisión de compensación**
Diseña el proceso que debe seguir la empresa para tomar decisiones de compensación de forma consistente: cuándo revisar las bandas, cómo gestionar las peticiones de aumento, cómo manejar las contraofertas y cómo comunicar la filosofía de compensación al equipo.

Termina con un resumen ejecutivo para presentar al comité de dirección.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Benchmarking de compensación para evaluar posición competitiva y mejorar atracción y retención de talento',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de competidores',
                'description'      => 'Usa los informes anuales, las métricas públicas y las estimaciones del sector para entender la posición financiera de los competidores.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista financiero especializado en análisis competitivo. Quiero construir un análisis de la posición financiera de mis competidores que me permita entender su fortaleza, sus vulnerabilidades y sus posibles movimientos estratégicos.

Empieza con las preguntas necesarias para contextualizarme:
- Cuáles son los competidores que quiero analizar
- Si son cotizadas, privadas o startups
- El sector y el contexto de mercado
- Qué decisiones estratégicas necesito informar con este análisis

Con esa información, construye el análisis:

**1. Inventario de fuentes disponibles**
Según el tipo de empresa, define qué información financiera está disponible: para cotizadas (10-K, earnings calls, presentaciones a inversores, informes de analistas), para privadas (Crunchbase, PitchBook, informes de sector, noticias de financiación), para startups (rondas de financiación públicas, estimaciones de ingresos en medios).

**2. Análisis de ingresos y crecimiento**
Estima o extrae los ingresos de cada competidor y su tasa de crecimiento. Para cotizadas usa los datos reportados; para privadas triangula con señales como el número de empleados, las rondas de financiación, los precios públicos y las estimaciones del sector. Identifica si están acelerando o desacelerando.

**3. Análisis de rentabilidad y unit economics**
Evalúa la rentabilidad: ¿están en beneficio o quemando caja? Para cotizadas, analiza márgenes brutos, EBITDA y flujo de caja. Para startups, infiere el burn rate a partir del capital captado y el runway probable. Los márgenes te dicen mucho sobre el modelo de negocio y la escalabilidad.

**4. Posición de liquidez y acceso a capital**
¿Cuánta caja tienen? ¿Tienen deuda? ¿Cuándo vencen las obligaciones? Para cotizadas está en el balance; para startups, estima el runway basándote en la última ronda y el burn estimado. Una empresa con runway corto toma decisiones desesperadas que puedes anticipar.

**5. Análisis de inversión y capex**
¿En qué están invirtiendo? El análisis del capex y de las contrataciones recientes revela la estrategia: si están invirtiendo en producto, en ventas, en infraestructura. Las startups revelan esto a través de sus ofertas de trabajo públicas.

**6. Eficiencia de la organización**
Calcula la eficiencia relativa: ingresos por empleado, ingresos por dólar de capital captado, ratio de eficiencia comercial (ARR añadido por vendedor). Estos ratios revelan cuán eficientemente están convirtiendo recursos en crecimiento.

**7. Análisis de riesgo financiero**
Identifica los factores de riesgo financiero: concentración de clientes, dependencia de un solo canal, exposición a tipo de cambio si operan globalmente, vencimientos de deuda, necesidad de nueva financiación. Un competidor financieramente presionado puede tomar decisiones de precio agresivas o ser vulnerable a adquisición.

**8. Implicaciones estratégicas**
Traduce el análisis en implicaciones para mi estrategia:
- ¿Tienen recursos para lanzar una guerra de precios?
- ¿Están en posición de adquirir empresas?
- ¿Son vulnerables a ser adquiridos?
- ¿Tienen que mejorar márgenes lo que puede hacer su producto menos competitivo?
- ¿Su situación financiera les va a obligar a pivotear?

**9. Calendario de eventos financieros relevantes**
Para cotizadas, identifica los próximos earnings calls, conferencias de inversores y vencimientos relevantes. Estos eventos suelen ir acompañados de anuncios estratégicos que afectan al mercado.

Cierra con un resumen de la posición financiera relativa y cómo deberías posicionarte estratégicamente en función de ella.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Análisis financiero competitivo para entender posición, vulnerabilidades y movimientos estratégicos de la competencia',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Vigilancia del entorno legal y regulatorio',
                'description'      => 'Monitorea los cambios regulatorios, las sentencias relevantes y los movimientos legales de competidores que pueden afectar al negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho empresarial y cumplimiento normativo con experiencia en inteligencia legal competitiva. Quiero construir un sistema de vigilancia del entorno legal y regulatorio que me permita anticipar los cambios que van a afectar al negocio y los movimientos legales de los competidores.

Empieza con las preguntas necesarias:
- El sector de actividad y la jurisdicción principal
- Las áreas de regulación más relevantes para el negocio
- Si hay competidores que hayan tenido problemas legales o regulatorios recientes

Con esa información, desarrolla el sistema completo:

**1. Mapa del entorno regulatorio**
Identifica los cuerpos normativos más relevantes para el sector: reguladores sectoriales, autoridades de competencia, autoridades de protección de datos, organismos de normalización. Define cuáles de sus actuaciones generan mayor impacto en el modelo de negocio.

**2. Pipeline de cambios regulatorios en curso**
Mapea las iniciativas regulatorias en proceso: proyectos de ley en tramitación parlamentaria, consultas públicas abiertas, directivas europeas en transposición, estándares técnicos en desarrollo. Para cada uno, evalúa el impacto potencial y el plazo de entrada en vigor.

**3. Análisis de jurisprudencia relevante**
Identifica las sentencias y resoluciones recientes que sientan doctrina en las áreas clave del negocio. Explica qué cambia en la práctica y qué decisiones empresariales se ven afectadas.

**4. Vigilancia de la actividad legal de la competencia**
Monitorea los movimientos legales de los competidores que son de acceso público: litigios en registros judiciales, resoluciones de autoridades de competencia, sanciones regulatorias, registros de patentes y marcas, cambios en términos y condiciones que revelan estrategia legal. Qué dicen estos movimientos sobre su estrategia.

**5. Análisis de riesgo regulatorio por área**
Para cada área de riesgo regulatorio identificada, evalúa la probabilidad de un cambio relevante en los próximos 12-24 meses, el impacto potencial en el modelo de negocio y el tiempo de preparación disponible.

**6. Oportunidades regulatorias**
Los cambios regulatorios no solo crean riesgos, también crean oportunidades: nuevas obligaciones que generan demanda de servicios, regulaciones que elevan las barreras de entrada, cambios que favorecen tu modelo de negocio frente al de los competidores. Identifica estas oportunidades.

**7. Benchmarking de cumplimiento**
Evalúa el nivel de cumplimiento de los competidores en las áreas más reguladas del sector. Un competidor que incumple y no ha sido sancionado aún compite con ventaja injusta; uno que está siendo investigado tiene una espada de Damocles. ¿Cuál es tu posición relativa en cumplimiento?

**8. Sistema de alerta temprana**
Diseña el sistema de vigilancia continua: qué fuentes revisar (BOE, DOUE, registros judiciales, webs de autoridades, publicaciones especializadas), con qué frecuencia, quién en la organización es responsable de cada área y cómo se escala una alerta cuando se detecta un cambio relevante.

**9. Plan de respuesta por escenario**
Para los tres o cuatro cambios regulatorios más probables e impactantes, diseña un plan de respuesta: qué habría que cambiar en el producto, en las operaciones, en los contratos, y cuánto tiempo necesitarías para adaptarte.

**10. Informe de situación para la dirección**
Crea la plantilla del informe trimestral de situación regulatoria que deberías presentar al comité de dirección: los elementos fijos que siempre deben aparecer y el formato para presentar las novedades más relevantes del trimestre.

Termina con la lista de las cinco regulaciones o procesos regulatorios que deberías estar siguiendo más de cerca en este momento.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Sistema de vigilancia del entorno legal y regulatorio para anticipar cambios y movimientos de la competencia',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Benchmarking de NPS y satisfacción de cliente',
                'description'      => 'Compara tu NPS y CSAT con el sector para entender si eres líder o rezagado y qué acciones concretas mueven la aguja.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en customer experience con experiencia en benchmarking de satisfacción de cliente. Quiero que me ayudes a contextualizar mis métricas de NPS y CSAT en el mercado, entender qué las impulsa en mi sector y diseñar las acciones que más van a mover la aguja.

Empieza haciéndome las preguntas necesarias:
- Mi NPS actual y cómo lo mido (transaccional o relacional)
- Mi CSAT actual y en qué touchpoints lo mido
- El sector en el que opero y el perfil de cliente
- Los competidores directos de los que tengo información de satisfacción

Con esa información, construye el benchmarking:

**1. Referentes del sector**
Proporciona los benchmarks de NPS y CSAT para mi sector. Diferencia entre los líderes del mercado, la media del sector y los rezagados. Contextualiza los números: un NPS de 40 puede ser excelente en telecomunicaciones y mediocre en software de gestión.

**2. Posición relativa**
Ubica mis métricas actuales en el contexto del sector. ¿Soy líder, seguidor o rezagado? ¿Estoy en el cuartil superior, medio o inferior? ¿Cómo ha evolucionado mi posición en los últimos 12-24 meses?

**3. Análisis de los drivers de NPS en el sector**
En mi sector, ¿qué factores explican la mayor varianza en el NPS? No todos los factores pesan igual: en algunos sectores la velocidad de respuesta es determinante, en otros el impacto del producto en el negocio del cliente, en otros el soporte en los momentos críticos. Identifica los drivers de mayor impacto.

**4. Análisis cualitativo de las reseñas de la competencia**
Revisa las reseñas públicas de los principales competidores en G2, Capterra, Trustpilot u otras plataformas relevantes del sector. ¿Qué es lo que más celebran sus promotores? ¿Qué es lo que más critican sus detractores? Compara con el patrón de mi propio feedback.

**5. Segmentación de mi NPS**
El NPS agregado oculta información valiosa. Ayúdame a segmentar: ¿varía el NPS por tipo de cliente, por tamaño, por tiempo como cliente, por producto o plan, por región? ¿Qué segmento arrastra el NPS hacia abajo y cuál lo sostiene?

**6. Análisis de los detractores**
Los detractores son la prioridad. Para cada categoría de queja identificada en los detractores, define:
- La causa raíz probable
- El impacto en churn si no se resuelve
- La acción correctiva más efectiva
- El tiempo y recursos necesarios para implementarla

**7. Análisis de los pasivos**
Los pasivos (7-8 en NPS) son la mayor oportunidad de mejora inmediata porque están cerca del umbral de promotor. ¿Qué frena a un pasivo de ser promotor en mi contexto? ¿Cuáles son las acciones de menor esfuerzo que pueden moverlos?

**8. ROI de la mejora de NPS**
Cuantifica el impacto económico de mejorar el NPS: la correlación entre NPS y churn en mi sector, el valor de un promotor vs. un detractor en términos de expansión y referencias, el ahorro en CAC si los promotores recomiendan activamente.

**9. Plan de acción de 90 días**
Basándote en todo el análisis, define un plan de acción de 90 días con las 5-7 iniciativas más impactantes para mover el NPS. Para cada una: el impacto esperado, los responsables, los recursos necesarios y las métricas de seguimiento.

**10. Sistema de medición y reporting**
Diseña el sistema de medición: frecuencia de medición, segmentación del reporting, cómo comunicar los resultados al equipo y a dirección, y los umbrales de alerta que disparan acciones inmediatas.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Benchmarking de NPS y CSAT para contextualizar métricas, identificar drivers y priorizar acciones de mejora',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Posicionamiento competitivo como freelance',
                'description'      => 'Analiza a otros freelancers en tu nicho para diferenciarte: especialización, portfolio, precios y los canales donde conseguir visibilidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor especializado en estrategia de negocio para freelancers. Quiero que me ayudes a analizar el mercado de freelancers en mi nicho, entender cómo se posicionan los que más éxito tienen y construir mi estrategia de diferenciación para dejar de competir por precio y empezar a atraer los clientes que quiero.

Empieza con las preguntas que necesitas:
- Mi especialidad y el nicho donde opero
- Mi experiencia, habilidades principales y los proyectos más representativos
- El tipo de cliente al que quiero llegar
- Los canales que uso actualmente para conseguir trabajo

Con esa información, construye el análisis y la estrategia:

**1. Mapa del mercado freelance en mi nicho**
Analiza el ecosistema de freelancers en mi especialidad. Identifica los diferentes perfiles que compiten: los generalistas, los especialistas por industria, los especialistas por tipo de proyecto, los que van al mercado masivo de plataformas y los que van al mercado premium por referencia. ¿Dónde estoy yo ahora?

**2. Análisis de los freelancers de referencia**
Identifica 5-8 freelancers que están claramente por encima de la media en mi nicho, bien en términos de tarifas, de calidad de clientes o de visibilidad. Analiza su posicionamiento: cómo se describen, qué especializaciones reclaman, cómo presentan su portfolio, qué pruebas sociales usan, en qué canales tienen presencia y cómo comunican su valor.

**3. Análisis de precios del mercado**
Mapea el rango de precios en el mercado: el suelo (donde compiten los que no tienen diferenciación), el mercado medio y el mercado premium. Identifica qué separa a los que cobran más del doble de la media: ¿especialización, tipo de cliente, resultados documentados, marca personal, método propio?

**4. Identificación de mi ángulo de diferenciación**
Basándote en mi experiencia y habilidades, propón 3-4 ángulos de diferenciación posibles. Para cada uno, evalúa: la demanda de mercado, la competencia existente, mi credibilidad para reclamarlo y el potencial de tarifa. Recomienda el que mejor combina oportunidad y autenticidad.

**5. Arquitectura del posicionamiento**
Con el ángulo elegido, construye el posicionamiento completo:
- El nicho específico al que me dirijo
- El problema concreto que resuelvo
- Por qué yo lo resuelvo mejor que los demás
- Las pruebas que lo demuestran
- El cliente ideal en detalle

**6. Estrategia de portfolio**
El portfolio es la herramienta de ventas más importante del freelance. Analiza cómo presentar mi trabajo para el posicionamiento elegido: qué proyectos destacar, cómo enmarcarlos en términos de resultados (no de entregables), qué información incluir en cada caso de estudio y cómo ordenarlos para contar una historia coherente.

**7. Estrategia de precios**
Cómo fijar las tarifas en el nuevo posicionamiento: el precio mínimo que no debo bajar, el precio objetivo a 12 meses, la estructura de paquetes o propuestas que simplifican la venta, y cómo gestionar la transición desde las tarifas actuales.

**8. Canales de visibilidad y captación**
Para mi posicionamiento específico, ¿qué canales tienen mejor ROI? Define la estrategia para los 2-3 canales que voy a priorizar: LinkedIn, comunidades especializadas, contenido propio, referidos, plataformas de nicho, SEO. Para cada canal, el tipo de contenido, la frecuencia y la métrica de éxito.

**9. Sistema de referidos**
Los mejores clientes vienen de otros buenos clientes. Diseña el sistema de referidos: cómo hacer que los clientes actuales te recomienden activamente, qué contexto darles para que recomienden bien y cómo incentivar la recomendación sin que parezca desesperado.

**10. Plan de 90 días para reposicionarse**
Termina con un plan de acción de 90 días: qué cambiar primero (la web, el discurso, el portfolio), qué crear (contenido, casos de estudio), qué activar (canales, conversaciones) y qué métricas usar para saber si el reposicionamiento está funcionando.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Estrategia de posicionamiento competitivo para freelancers que quieren diferenciarse y subir sus tarifas',
                'vote_score'       => 46,
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
