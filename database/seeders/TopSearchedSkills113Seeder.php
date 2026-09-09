<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills113Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Personal branding para directivos de marketing',
                'description'      => 'Construye la reputación que te hace la opción obvia cuando las empresas buscan a alguien con tu perfil de marketing.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en personal branding para directivos y profesionales senior con experiencia ayudando a CMOs, directores de marketing y líderes de growth a posicionarse como referentes en su sector.

Quiero construir o fortalecer mi marca personal como directivo de marketing y necesito una estrategia completa y ejecutable.

**Mi situación actual:**
- Rol actual: [CMO, VP de Marketing, Director de Marketing, Head of Growth, otro]
- Años de experiencia: [indicar]
- Sector o sectores donde has trabajado: [indicar]
- Especialización principal: [performance, brand, growth, product marketing, demand gen, otro]
- Presencia digital actual: [LinkedIn seguidores, si publico contenido, si tengo newsletter, si hablo en eventos...]
- Objetivo del personal branding: [encontrar trabajo, conseguir clientes, hablar en conferencias, atraer inversión, otro]
- A quién quiero llegar: [recruiters de empresas tech, fundadores de startups, empresas enterprise, otros directivos...]

Con esa información, desarrolla la estrategia completa:

**1. Diagnóstico de tu marca actual**
Cómo auditar tu presencia digital actual: qué aparece en Google cuando alguien busca tu nombre, cómo está tu perfil de LinkedIn, qué dice tu audiencia actual sobre ti y cuál es el gap entre cómo te ves tú y cómo te perciben los demás.

**2. Posicionamiento y propuesta de valor única**
Define el nicho específico donde puedes ser referente: no "marketing" sino el cruce exacto de sector, especialización y tipo de empresa donde tu experiencia te hace único. Cómo articular en una frase clara a quién ayudas, con qué y con qué resultado.

**3. Estrategia de contenido en LinkedIn**
LinkedIn es el canal principal para directivos de marketing. Define:
- Tipos de contenido que funcionan: análisis de tendencias, casos reales de tu experiencia, opiniones contraintuitivas, frameworks propios
- Frecuencia y formato recomendados
- Cómo escribir posts que generan debate y visibilidad sin caer en el engagement bait
- Cómo construir la narrativa de tu trayectoria de forma que genere autoridad

**4. Otros canales según el objetivo**
Qué otros canales vale la pena construir dependiendo de mi objetivo: newsletter propia, podcast, hablar en conferencias o eventos, artículos en medios especializados, Twitter/X para conversaciones con otros directivos.

**5. Networking estratégico**
Cómo construir relaciones con las personas correctas: otros directivos de marketing, recruiters especializados, fundadores de empresas donde querrías trabajar. Cómo hacer networking sin que parezca oportunismo y cómo mantener las relaciones a largo plazo.

**6. Gestión de la reputación online**
Cómo gestionar lo que aparece cuando te buscan en Google: qué crear para desplazar contenido negativo o irrelevante, cómo controlar la narrativa sobre tu carrera y cómo manejar las críticas públicas.

**7. Métricas y señales de progreso**
Qué medir para saber que la marca personal está funcionando: seguidores, inbound de oportunidades, invitaciones a eventos, menciones en prensa, solicitudes de conversación de personas relevantes. Tiempos realistas para ver resultados.

**8. Plan de acción para los primeros 60 días**
Acciones concretas semana a semana para construir la base de la marca personal, incluyendo optimización del perfil, primeros contenidos y primeras conversaciones estratégicas.

Dame estrategias que funcionen de verdad, no consejos genéricos de "sé auténtico y publica con consistencia".
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construcción de marca personal para directivos de marketing',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Preparación para entrevistas técnicas: LeetCode, system design y behavioral',
                'description'      => 'El plan de estudio de 4 semanas que funciona para entrevistas en FAANG, startups top y empresas tech de primer nivel.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en preparación para entrevistas técnicas con experiencia ayudando a desarrolladores a pasar procesos de selección en empresas como Google, Meta, Amazon, Stripe, Airbnb y startups similares. Conoces el formato, los patrones más comunes y las estrategias que funcionan de verdad.

Necesito prepararme para entrevistas técnicas en el nivel de FAANG o startups de primer nivel y quiero un plan de estudio estructurado y realista.

**Mi situación:**
- Nivel de experiencia: [junior, mid, senior, staff]
- Lenguaje principal: [Python, JavaScript, Java, C++, otro]
- Tiempo disponible para estudiar: [horas por semana]
- Plazo objetivo: [en cuántas semanas quiero estar listo]
- Nivel actual en algoritmos: [nunca he hecho LeetCode / hago algunos / los resuelvo razonablemente bien]
- Tipo de empresas objetivo: [FAANG / startups top tier / empresas tech sólidas / scale-ups]
- Puntos débiles conocidos: [grafos, DP, system design, behavioral, otro]

Con esa información, diseña el plan de estudio completo:

**1. Diagnóstico honesto de dónde estás**
Cómo evaluar tu nivel real antes de empezar: qué problemas de LeetCode hacer como diagnóstico, cómo interpretar los resultados y qué significa para el tiempo de preparación necesario. Sin suavizar la realidad.

**2. Plan de estudio de 4 semanas (o adaptado a tu plazo)**
Divide el estudio semana a semana con objetivos claros:
- **Semana 1**: estructuras de datos fundamentales (arrays, strings, hashmaps, stacks, queues) + patrones básicos
- **Semana 2**: árboles, grafos y búsqueda (BFS, DFS, backtracking)
- **Semana 3**: dynamic programming, sliding window, two pointers y patrones avanzados
- **Semana 4**: repaso, mock interviews y los problemas más frecuentes por empresa

**3. Los patrones que más se repiten**
Los 15 patrones algorítmicos que cubren el 80% de los problemas de entrevista: two pointers, sliding window, fast & slow pointers, merge intervals, cyclic sort, in-place reversal, tree BFS/DFS, two heaps, subsets, modified binary search, top K elements, K-way merge, topological sort, DP básico. Cómo reconocer qué patrón aplica en un problema nuevo.

**4. System Design para mid y senior**
Marco estructurado para responder preguntas de diseño de sistemas: cómo clarificar los requisitos, estimar la escala, diseñar la API, el modelo de datos, los componentes principales y las decisiones de trade-off. Los problemas más frecuentes: diseña Twitter, URL shortener, sistema de notificaciones, rate limiter, sistema de búsqueda.

**5. Behavioral interviews y el método STAR+**
Cómo preparar las preguntas de comportamiento que siempre aparecen: dime un conflicto que resolviste, tu mayor fracaso, una decisión difícil, cómo manejas el feedback. El método STAR extendido para dar respuestas estructuradas y memorables. Las preguntas específicas de cada empresa.

**6. La entrevista en vivo: cómo comportarse**
Cómo manejar los problemas que no sabes resolver, cómo pensar en voz alta correctamente, cómo pedir pistas sin parecer perdido, cómo manejar los nervios y cómo hacer preguntas al entrevistador al final.

**7. Recursos concretos recomendados**
LeetCode (qué listas de problemas), libros (Cracking the Coding Interview, System Design Interview), canales de YouTube, plataformas de mock interviews (Pramp, interviewing.io) y comunidades donde practicar.

**8. Los errores más comunes que eliminan candidatos buenos**
Por qué muchos buenos developers no pasan las entrevistas técnicas y cómo evitar los errores más frecuentes: no comunicar el proceso de pensamiento, saltar a código sin clarificar, no manejar edge cases, no optimizar la solución inicial.

Quiero un plan realista y aplicable, no una lista de los 2.000 problemas de LeetCode que debería hacer.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Plan de preparación para entrevistas técnicas en empresas top',
                'vote_score'       => 49,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Portfolio de diseño que consigue trabajo',
                'description'      => 'Qué proyectos incluir, cómo presentarlos y el proceso para conseguir que reclutadores y directores de diseño te contacten.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en portfolios de diseño y en procesos de selección para diseñadores con experiencia tanto como hiring manager de equipos de diseño como ayudando a diseñadores a construir portfolios que consiguen entrevistas y ofertas de trabajo.

Quiero construir o mejorar mi portfolio de diseño para conseguir trabajo y necesito una guía completa y honesta.

**Mi situación:**
- Nivel de experiencia: [junior sin trabajo / junior con algo de experiencia / mid / senior]
- Especialización: [UI, UX, product design, motion, brand, ilustración, otro]
- Tipo de empresas objetivo: [startups tech, agencias, empresas enterprise, trabajo remoto internacional]
- Estado actual del portfolio: [no tengo / tengo uno pero no funciona / quiero mejorarlo]
- Proyectos disponibles: [cuántos proyectos tienes y de qué tipo: profesionales, personales, académicos, ficticios]
- Herramientas que usas: [Figma, Adobe XD, Sketch, otro]
- Principal problema o duda: [qué incluir, cómo presentar el proceso, dónde publicarlo, cómo que me encuentren]

Con esa información, desarrolla la guía completa:

**1. Qué buscan realmente los hiring managers**
Qué mira un director de diseño en los primeros 30 segundos de un portfolio, qué hace que sigan leyendo y qué les hace cerrarlo inmediatamente. La diferencia entre lo que los diseñadores creen que importa y lo que realmente importa en la selección.

**2. Cuántos proyectos y cuáles elegir**
Por qué 3-5 proyectos excelentes son mejor que 15 mediocres. Cómo elegir los proyectos que mejor muestran tu proceso y tu impacto. Qué hacer cuando no tienes proyectos profesionales: proyectos de redesign, proyectos ficticios bien ejecutados, contribuciones a open source de diseño.

**3. Cómo presentar el proceso de diseño**
La estructura que funciona para cada caso de estudio: contexto del problema, usuarios y research, definición del reto, exploración y decisiones (con sus alternativas descartadas y por qué), solución final e impacto medido. Cómo escribir la narrativa sin convertirla en una lista de bullets aburridos.

**4. Mostrar el impacto, no solo el trabajo**
Cómo cuantificar el impacto de tu trabajo aunque no tengas datos perfectos: métricas de negocio, feedback de usuarios, mejoras de usabilidad medidas, tiempo ahorrado. Cómo presentarlo de forma honesta cuando los resultados no fueron los esperados.

**5. Diseño y estructura del portfolio**
Cuándo usar Notion, Webflow, Framer, un PDF o una web hecha en código. Cómo debe ser la navegación, qué va en la página de inicio, cómo estructurar el case study para que fluya bien. Los errores de diseño más comunes en portfolios de diseñadores (ironía incluida).

**6. Cómo conseguir que te encuentren**
Dónde publicar el portfolio para que llegue a las personas correctas: LinkedIn, Dribbble, Behance, comunidades de diseño, Twitter/X. Cómo hacer outreach activo con el portfolio como herramienta central. Cómo optimizar para que los recruiters te encuentren por búsqueda orgánica.

**7. El portfolio para el proceso de entrevistas**
Cómo usar el portfolio durante la entrevista: cómo presentar un case study en 10 minutos, cómo responder preguntas difíciles sobre decisiones de diseño y cómo manejar los feedback negativos del entrevistador de forma constructiva.

**8. Plan de acción para los próximos 30 días**
Qué hacer esta semana, esta quincena y este mes para tener un portfolio funcional lanzado, con tareas concretas y priorizadas.

Sé honesto sobre lo que funciona y lo que no. Incluye ejemplos de portfolios que admiras y por qué, si los tienes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Construcción de portfolio de diseño para conseguir trabajo',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Búsqueda de empleo en ventas: cómo encontrar, evaluar y negociar',
                'description'      => 'Cómo encontrar el trabajo de ventas correcto, dónde buscar, cómo evaluarlo y cómo negociar la oferta y el plan de comisiones.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en carreras de ventas y en procesos de selección para perfiles comerciales con experiencia tanto como hiring manager de equipos de ventas como ayudando a profesionales de ventas a encontrar y conseguir las mejores oportunidades del mercado.

Quiero encontrar mi próxima oportunidad en ventas y necesito una estrategia completa para la búsqueda, evaluación y negociación.

**Mi perfil:**
- Experiencia en ventas: [años y tipo: SDR, AE, AM, BDM, Key Account, Director de Ventas...]
- Sectores en los que has trabajado: [indicar]
- Tipo de venta que dominas: [B2B, B2C, enterprise, transaccional, consultiva, SaaS...]
- Ticket medio con el que has trabajado: [pequeño, medio, grande, enterprise]
- Objetivo de búsqueda: [tipo de empresa, sector, rol, nivel de seniority, salario objetivo]
- Situación actual: [empleado buscando / desempleado / cambiando de sector]
- Principal dificultad en la búsqueda: [poco inbound, no pasar las entrevistas, malas ofertas, falta de red...]

Con esa información, desarrolla la estrategia completa:

**1. Dónde buscar trabajo en ventas**
Los mejores canales para encontrar oportunidades en ventas: LinkedIn, portales especializados, headhunters de ventas, comunidades de sales professionals, eventos del sector. Cómo maximizar el inbound de oportunidades y no depender solo de las ofertas publicadas.

**2. Cómo evaluar una oportunidad de ventas antes de aceptar la entrevista**
Las preguntas que debes hacerte antes de invertir tiempo en un proceso: cultura de ventas de la empresa, rotación del equipo, producto que se vende, mercado objetivo, etapa de la empresa y cómo eso afecta a tu trabajo. Cómo investigar la empresa antes de la primera llamada.

**3. El proceso de selección en ventas: qué esperar**
Cómo funciona típicamente el proceso de selección para roles de ventas: screening, role play, business case, entrevistas con el equipo y con dirección. Cómo prepararte para cada fase, especialmente el role play de ventas que muchas empresas incluyen.

**4. Señales de alarma en las entrevistas**
Las red flags que indican que la empresa no es lo que parece: targets poco realistas, cultura tóxica de presión sin soporte, alta rotación que no explican, producto sin product-market fit, compensación variable no transparente. Cómo detectarlas en el proceso de selección.

**5. Negociación de la oferta y del plan de comisiones**
Cómo negociar el salario base, el OTE (On-Target Earnings), el plan de comisiones y los beneficios. Qué preguntar sobre el plan de comisiones antes de firmar: tasa de conversión histórica, porcentaje del equipo que alcanza cuota, aceleradores, clawbacks y restricciones. Cómo evaluar si el OTE es alcanzable de verdad.

**6. Evaluación de la cuota**
Cómo evaluar si la cuota que te proponen es razonable o es una trampa: qué porcentaje del equipo la alcanza, cuál es el ramp-up para los nuevos, cómo se fija y se revisa, y cuál es la consecuencia de no alcanzarla.

**7. Transición y primeros 90 días**
Cómo gestionar la salida del trabajo anterior, cómo negociar el periodo de incorporación y cómo estructurar los primeros 90 días en el nuevo rol para demostrar resultados rápidos y asegurar la posición.

**8. Estrategia personalizada para mi caso**
Basándome en mi perfil y objetivos, cuál es la estrategia más efectiva para los próximos 60 días, con acciones concretas para cada semana.

Dame consejos directos y prácticos, incluyendo las cosas que muchos candidatos de ventas no hacen y deberían hacer.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Estrategia de búsqueda de empleo y negociación de ofertas en ventas',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Conseguir el primer trabajo como Product Manager',
                'description'      => 'El camino más corto de cero a product manager: proyectos para el portfolio, dónde aprender y cómo destacar en el proceso de selección.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en transiciones de carrera hacia product management y en procesos de selección para roles de PM con experiencia como hiring manager de equipos de producto y como mentor de personas que quieren entrar a PM desde otros roles.

Quiero conseguir mi primer trabajo como product manager y necesito un plan completo y realista para hacerlo.

**Mi situación:**
- Rol actual o background: [developer, diseñador, analista de datos, consultor, marketing, otro]
- Años de experiencia laboral total: [indicar]
- Experiencia tangencial con producto: [si has trabajado con equipos de producto, lanzado features, participado en discovery, otro]
- Tipo de empresa objetivo: [startup early-stage, startup en crecimiento, scale-up, empresa grande, corporación]
- Sector de interés: [fintech, SaaS, consumer, healthcare, marketplace, otro]
- Plazo objetivo: [en cuántos meses quieres conseguirlo]
- Principal obstáculo percibido: [falta de experiencia formal en PM, no sé por dónde empezar, no paso las entrevistas, otro]

Con esa información, desarrolla el plan completo:

**1. La realidad de entrar a PM sin experiencia previa**
Qué dice la evidencia sobre cómo la mayoría de PMs juniors consiguen su primer rol: la ruta desde roles adyacentes (developer, diseñador, analista), las empresas que contratan APMs, los programas de rotación corporativos y cuánto tiempo lleva de media la transición.

**2. Cómo demostrar mentalidad de PM sin haber sido PM**
Qué habilidades y behaviors buscan los hiring managers en los candidatos junior y cómo puedes demostrarlos aunque no hayas tenido el título: ownership de proyectos, pensamiento analítico, comunicación con stakeholders, priorización con trade-offs. Cómo re-enmarcar tu experiencia actual en términos de producto.

**3. El portfolio de PM para candidatos sin experiencia**
Qué incluir en el portfolio cuando no tienes productos reales que mostrar:
- Product teardowns: análisis crítico de productos existentes con propuestas de mejora
- Mini product specs: documenta la spec de una feature que resolverías para un producto real
- Side projects como PM: lanza algo pequeño (app, bot, herramienta) y documenta el proceso completo
- Contribuciones a proyectos open source con componente de producto
Cómo presentarlo para que demuestre el proceso de pensamiento, no solo el resultado.

**4. Aprendizaje estructurado**
Los recursos más eficaces para aprender PM: libros fundamentales (Inspired, The Mom Test, Continuous Discovery Habits), cursos (cuáles valen la pena y cuáles son marketing disfrazado), comunidades y el papel de la práctica real vs el aprendizaje teórico.

**5. Networking hacia el primer trabajo**
Cómo construir relaciones con PMs en activo, cómo pedir informational interviews sin que suene interesado solo en el trabajo, y cómo estas conversaciones se convierten en referidos que abren puertas que los portales de empleo no abren.

**6. El proceso de selección para roles junior de PM**
Qué esperar: screening, product case, análisis de métricas, presentación ejecutiva y entrevistas de comportamiento. Cómo preparar el product case (el ejercicio más crítico del proceso) con frameworks claros. Las preguntas más frecuentes y cómo responderlas.

**7. Programas APM y rutas alternativas**
Los programas de Associate Product Manager en empresas grandes (Google APM, Facebook RPM, similares en startups), cómo acceder a ellos y si son la ruta correcta para tu perfil. Alternativas: roles de PM en startups muy early donde el título importa menos.

**8. Plan de 90 días**
Acciones concretas semana a semana durante los próximos 90 días para construir el portfolio, generar network y empezar a aplicar a roles específicos.

Sé honesto sobre cuánto tiempo lleva realísticamente y qué hace que algunos candidatos lo consigan más rápido que otros.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Plan de transición de carrera hacia product management',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Employer branding activo para atraer talento sin publicar ofertas',
                'description'      => 'Construye la reputación como empleador en LinkedIn, Glassdoor y comunidades para que los mejores candidatos lleguen solos.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en employer branding y atracción de talento con experiencia ayudando a empresas de todos los tamaños a construir una reputación como empleador que convierte la captación de talento de reactiva en proactiva.

Quiero construir una estrategia de employer branding activo que haga que los mejores candidatos nos encuentren y quieran trabajar aquí.

**Contexto de la empresa:**
- Tamaño de la empresa: [número de empleados]
- Sector: [tecnología, salud, finanzas, retail, otro]
- Tipo de talento que buscamos captar: [developers, diseñadores, ventas, perfiles técnicos, directivos, otro]
- Estado actual del employer brand: [prácticamente nulo / algo de presencia / marca consolidada que quiero mejorar]
- Principales canales actuales de captación: [portales de empleo, LinkedIn, referidos, agencias, otro]
- Cultura y valores reales de la empresa: [descripción honesta, no la versión de la web corporativa]
- Reto principal de captación: [candidatos de calidad insuficiente, proceso lento, competencia con grandes empresas, rotación alta que daña la reputación, otro]

Con esa información, desarrolla la estrategia completa:

**1. Diagnóstico de la reputación actual como empleador**
Cómo auditar honestamente la reputación actual: qué dicen los empleados en Glassdoor e Indeed, qué aparece en Google cuando alguien busca "trabajar en [empresa]", qué dice el equipo actual sobre su experiencia y cuál es el gap entre la percepción interna y la externa.

**2. La EVP (Employee Value Proposition)**
Qué hace única a tu empresa como lugar donde trabajar, más allá de los beneficios y el salario. Cómo articular la EVP de forma auténtica, específica y diferencial: no "cultura dinámica" sino qué significa exactamente trabajar allí, qué tipo de personas encajan y por qué elegirían vuestra empresa sobre una alternativa.

**3. Estrategia de contenido en LinkedIn**
Cómo usar LinkedIn como canal de employer branding:
- Qué publicar desde la página de empresa (no solo ofertas de trabajo)
- Cómo activar a los empleados como embajadores voluntarios (employee advocacy sin forzar)
- Qué tipo de contenido genera más interés en candidatos: cultura real, proyectos, equipo, aprendizajes, behind the scenes
- Frecuencia y formato recomendados

**4. Glassdoor y portales de reseñas**
Cómo construir una presencia positiva y auténtica en Glassdoor sin manipular las reseñas. Cómo responder a las reseñas negativas de forma que demuestre madurez y mejora continua. Por qué las reseñas negativas bien gestionadas generan más confianza que cinco estrellas sin críticas.

**5. Comunidades de talento especializado**
Dónde está el talento que buscas fuera de LinkedIn: comunidades de developers (GitHub, Stack Overflow, comunidades locales), comunidades de diseño (Figma Community, Dribbble), comunidades de producto y marketing. Cómo tener presencia auténtica allí sin que parezca solo reclutamiento.

**6. Programa de referidos como canal de employer branding**
Cómo diseñar un programa de referidos que funcione: incentivos, proceso, comunicación interna. Por qué los referidos son el mejor indicador de que el employer brand interno está funcionando.

**7. Métricas de employer branding**
Cómo medir el impacto de la estrategia: tiempo de cobertura de vacantes, calidad del candidato (tasa de pase a segunda fase), coste por contratación, inbound vs outbound, NPS de empleados actuales, visibilidad en Glassdoor.

**8. Plan de implementación en 90 días**
Qué implementar primero para ver resultados rápidos, con acciones concretas por semana y por quién debería ejecutarse cada acción.

Quiero una estrategia que funcione con recursos limitados, no un plan que requiera un equipo de employer branding de cinco personas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Estrategia de employer branding para atraer talento de forma proactiva',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Carrera en finanzas: corporativo, banca de inversión, VC y CFO de startup',
                'description'      => 'Conoce los distintos caminos en finanzas y cómo posicionarte para el que quieres según tu perfil y ambiciones.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en carreras en el sector financiero con experiencia en múltiples subsectores y conocimiento profundo de las diferencias reales entre trabajar en finanzas corporativas, banca de inversión, capital riesgo y como CFO de startup.

Quiero planificar o replantear mi carrera en finanzas y necesito un análisis honesto de las opciones disponibles y cómo posicionarme para la que más me interesa.

**Mi situación:**
- Formación: [ADE, Economía, MBA, Ingeniería, CFA, otro]
- Experiencia actual: [años y en qué área de finanzas o negocio]
- Rol actual: [analista financiero, controller, auditor, consultor, otro]
- Aspiración principal: [banca de inversión, PE/VC, CFO de startup, finanzas corporativas, fintech, otro]
- Plazo de la transición: [corto plazo / medio plazo / largo plazo]
- Motivación principal: [dinero, impacto, aprendizaje, trabajo en proyectos interesantes, autonomía, otro]
- Principal obstáculo: [falta de red de contactos, formación, experiencia no relevante, otro]

Con esa información, desarrolla el análisis completo:

**1. Mapa de las carreras en finanzas**
Descripción honesta de las principales trayectorias:
- **Finanzas corporativas**: controller, FP&A, tesorería, M&A interno. Pros, contras, salarios y techo de carrera.
- **Banca de inversión**: la vida real más allá del glamour de las películas. Horas, jerarquía, exit opportunities y cuándo merece la pena.
- **Private equity y Venture Capital**: cómo se entra, qué perfil buscan, la diferencia entre PE mid-market y VC early stage, qué carreras previas abren la puerta.
- **CFO de startup**: el rol más generalista de finanzas, qué significa en etapa seed vs serie B vs pre-IPO, por qué es distinto a ser CFO de empresa grande.
- **Fintech**: dónde están las oportunidades, qué habilidades piden y cómo se accede.

**2. Análisis de la trayectoria que más me interesa**
Análisis detallado de la opción que me interesa: cómo es el día a día real, qué aprenderás y qué no aprenderás, qué habilidades desarrollarás, qué salario esperar en cada etapa, cuál es el techo y cuáles son las exit opportunities más comunes.

**3. El gap entre donde estoy y donde quiero estar**
Qué tienes que tu trayectoria objetivo valora y qué te falta. Análisis honesto del gap de experiencia, red de contactos, credenciales (CFA, MBA, otro) y cómo de cerrable es ese gap desde donde estás.

**4. Plan de transición**
Ruta concreta para llegar a donde quieres: qué roles intermedios podrían funcionar como trampolín, qué formación o certificaciones añaden valor real (y cuáles son solo costosas), y cómo construir la red de contactos en el subsector objetivo.

**5. El networking en finanzas**
Cómo funciona realmente el acceso a oportunidades en finanzas: el peso de la red de contactos vs los portales de empleo, cómo construir relaciones con banqueros, investors o directores financieros, el papel de los MBA programs como acelerador de red.

**6. Salarios y compensación por trayectoria**
Rangos salariales realistas (salario base + bonus) por nivel de experiencia y subsector en el mercado español e internacional, para tener expectativas calibradas.

**7. Los errores más comunes en carreras de finanzas**
Qué decisiones de carrera suelen arrepentirse los profesionales de finanzas: elegir el nombre de la empresa sobre el aprendizaje, quedarse demasiado tiempo en roles de bajo impacto, no moverse en el momento correcto.

**8. Primeros pasos concretos**
Las tres o cuatro acciones más importantes que deberías tomar en los próximos 30 días para empezar a moverse hacia la trayectoria objetivo.

Quiero honestidad, no solo lo positivo de cada trayectoria. Incluye los aspectos menos atractivos de cada camino.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Planificación de carrera en el sector financiero',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Carrera en derecho empresarial: in-house, Big Law y boutique',
                'description'      => 'Conoce las salidas más demandadas y la estrategia para posicionarte en el nicho legal con mejor mercado según tu perfil.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en carreras en el sector legal con experiencia en distintos tipos de práctica jurídica y conocimiento profundo de las diferencias reales entre trabajar en un despacho grande, una boutique especializada o como asesor jurídico in-house en una empresa.

Quiero planificar o replantear mi carrera en derecho empresarial y necesito un análisis honesto de las opciones y una estrategia de posicionamiento.

**Mi situación:**
- Formación: [Derecho, Doble grado, LLM, MBA, año de estudio]
- Experiencia actual: [años, tipo de práctica, firma o empresa]
- Especialización actual o preferida: [M&A, laboral, tecnología, competencia, fiscal, propiedad intelectual, startup law, otro]
- Aspiración: [socio en despacho grande, in-house en empresa tech, fundar boutique, academia, otro]
- Mercado objetivo: [España, Europa, internacional]
- Motivación: [compensación, calidad de vida, impacto, trabajo en sectores interesantes, autonomía, otro]

Con esa información, desarrolla el análisis:

**1. Mapa de las trayectorias en derecho empresarial**
Descripción honesta de las principales opciones:
- **Big Law**: la realidad más allá del prestigio. Horas, jerarquía, presión, camino a socio, compensación y por qué muchos se van antes de llegar.
- **Boutique especializada**: qué ofrece en términos de especialización, calidad de vida, remuneración y mercado. Cómo construir la marca de una boutique desde cero.
- **In-house legal counsel**: la diferencia de trabajar para una empresa vs para clientes. Qué tipos de empresas contratan in-house, qué perfil buscan y qué aprenderás (y qué dejarás de aprender).
- **Startups y scale-ups tech**: el rol de General Counsel o Head of Legal en una empresa de tecnología, lo que lo diferencia del resto y por qué es uno de los nichos más demandados.
- **Sector público y organismos reguladores**: para qué perfiles tiene sentido y qué exit opportunities genera.

**2. Las especializaciones con más salidas**
Qué áreas del derecho empresarial tienen más demanda y mejores perspectivas salariales en el mercado actual: tech & data privacy, M&A y corporate, laboral, fintech, propiedad intelectual. Cómo posicionarse en el nicho correcto.

**3. El camino in-house en tecnología**
Dado el crecimiento del sector tech, análisis específico de cómo acceder a roles legales en startups y empresas de tecnología: qué buscan, cómo demuestras que entiendes el negocio además de la ley, y cómo el entorno legal de una empresa tech es diferente a la práctica privada.

**4. Plan de transición**
Ruta concreta para moverse de donde estoy hacia donde quiero ir: qué experiencias añadir, qué especializaciones desarrollar, qué formación complementaria tiene ROI real (LLM, MBA, master en derecho digital), y cómo gestionar la transición sin perder ingresos.

**5. Networking en el sector legal**
Cómo funciona el acceso a oportunidades en derecho: el peso de los contactos y la reputación dentro del gremio vs los portales de empleo, cómo construir relaciones con socios, directores legales y headhunters especializados en legal.

**6. Compensación por trayectoria**
Rangos salariales realistas por nivel de experiencia y tipo de práctica en el mercado español, con especial atención a la diferencia entre despacho e in-house en distintas etapas de la carrera.

**7. Los errores más comunes en carreras de derecho**
Qué decisiones de carrera suelen generar arrepentimiento: especializarse demasiado pronto o demasiado tarde, confundir el prestigio de la firma con el aprendizaje real, no salir del despacho cuando el mercado está receptivo.

**8. Primeros pasos concretos**
Las tres acciones más importantes para los próximos 30 días según mi situación específica.

Quiero una visión honesta, con los contras de cada trayectoria además de los pros. Sin romanticismo sobre ninguna de las opciones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Planificación de carrera en derecho empresarial',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Carrera en customer success: de CSM júnior a VP de CS',
                'description'      => 'El roadmap profesional en customer success: qué aprender, qué métricas dominar y cómo acelerar el crecimiento en la disciplina.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en desarrollo de carreras en customer success con experiencia tanto como VP de CS como mentoría de profesionales en distintas etapas de su carrera en la disciplina.

Quiero planificar o acelerar mi carrera en customer success y necesito un roadmap claro y honesto.

**Mi situación:**
- Rol actual: [CSM júnior / CSM / Senior CSM / Team Lead de CS / Director de CS / VP de CS]
- Años de experiencia en CS o roles relacionados: [indicar]
- Tipo de empresa donde trabajo o he trabajado: [startup early, scale-up, empresa consolidada, enterprise]
- Segmento de clientes que manejo: [SMB, mid-market, enterprise, consumidores]
- Ratio actual de clientes: [número de cuentas]
- ARR gestionado aproximado: [si aplica]
- Objetivo de carrera: [subir a senior / pasar a team lead / llegar a director / VP / founder de empresa CS-as-a-service / consultor independiente]
- Principal obstáculo: [falta de visibilidad, no sé cómo demostrar impacto, poca oportunidad de crecimiento en mi empresa actual, otro]

Con esa información, desarrolla el roadmap completo:

**1. Las etapas de la carrera en CS**
Descripción clara de lo que define cada nivel en customer success:
- **CSM júnior**: qué se espera, cómo se mide el éxito, cuánto tiempo es normal estar en este nivel
- **CSM**: qué cambia, qué responsabilidades adicionales y cómo se distingue un buen CSM de uno mediocre
- **Senior CSM**: más que antigüedad, qué comportamientos y resultados lo justifican
- **Team Lead / Manager de CS**: el salto de gestionar cuentas a gestionar personas, qué es diferente
- **Director de CS**: de la ejecución a la estrategia, qué significa y qué experiencias lo preparan
- **VP de CS / CCO**: responsabilidad sobre el negocio de retención e ingresos, cómo se llega aquí

**2. Las habilidades que más importan en cada etapa**
Qué habilidades son diferenciales en cada nivel de la carrera: gestión de relaciones, dominio de datos y métricas, gestión de stakeholders internos, construcción de playbooks y procesos, liderazgo de equipo, pensamiento estratégico de negocio.

**3. Las métricas que definen tu impacto**
Cómo demostrar tu valor en términos cuantitativos: NRR, GRR, tiempo hasta el primer valor, tasa de adopción de funcionalidades clave, health score de la cartera. Cómo llevar un registro de tu impacto aunque tu empresa no lo mida bien. Cómo presentar ese impacto en las conversaciones de promoción o en las entrevistas de trabajo.

**4. Cómo acelerar el crecimiento**
Las acciones que diferencian a los profesionales de CS que crecen rápido de los que se estancan: visibilidad interna, proactividad en la construcción de procesos, alineación con objetivos de negocio, relación con liderazgo, y cómo posicionarse para la siguiente oportunidad antes de pedirla.

**5. Herramientas y plataformas que debes dominar**
Las herramientas que aparecen en la mayoría de ofertas de CS: Gainsight, ChurnZero, Totango, Salesforce para CS, HubSpot, Intercom, Mixpanel. Cuáles priorizar según tu nivel y tipo de empresa objetivo.

**6. Certificaciones y formación que tienen ROI real**
Las certificaciones de CS que los hiring managers reconocen (Customer Success Association, Gainsight Pulse, otras), los recursos formativos más valiosos (libros, comunidades, eventos) y cuáles son pérdida de tiempo y dinero.

**7. El mercado de CS: dónde están las mejores oportunidades**
En qué tipo de empresas hay más oportunidades de crecimiento y mejores condiciones para una carrera en CS: startups SaaS B2B en crecimiento, empresas enterprise con CS maduro, empresas en proceso de construir el departamento desde cero.

**8. Plan personalizado para los próximos 12 meses**
Basándome en tu situación, qué deberías hacer en los próximos 12 meses para dar el siguiente salto: acciones de desarrollo, visibilidad interna, networking externo y cuándo empezar a explorar el mercado externo si la oportunidad no aparece internamente.

Quiero honestidad sobre los tiempos y los salarios reales en el mercado, no solo motivación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Planificación y aceleración de carrera en customer success',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'LinkedIn como canal de captación de clientes para freelancers',
                'description'      => 'Optimiza el perfil, publica contenido estratégico y genera conversaciones que se convierten en proyectos sin publicidad de pago.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en generación de negocio para freelancers y consultores independientes a través de LinkedIn con experiencia ayudando a profesionales independientes a convertir su presencia en la plataforma en un canal consistente de captación de clientes.

Quiero usar LinkedIn como canal principal para conseguir clientes como freelance y necesito una estrategia completa y accionable.

**Mi situación:**
- Especialidad: [desarrollo web, diseño, copywriting, marketing, consultoría estratégica, otro]
- Perfil de cliente objetivo: [startups, pymes, empresas medianas, directivos, otro]
- Estado actual en LinkedIn: [perfil básico sin actividad / algo de actividad / activo pero sin resultados / sin perfil]
- Número de seguidores aproximado: [indicar]
- Objetivo mensual de ingresos: [indicar o rango]
- Tiempo disponible para LinkedIn a la semana: [horas]
- Principal dificultad: [no sé qué publicar / publico pero no genera ingresos / no sé cómo llegar a decisores / otro]

Con esa información, desarrolla la estrategia completa:

**1. El perfil de LinkedIn como landing page de negocio**
Cómo optimizar cada sección del perfil para que comunique claramente a quién ayudas, con qué y con qué resultado (no tu historial laboral cronológico):
- Titular: la fórmula que funciona para freelancers
- Foto y banner: qué comunican y cómo optimizarlos
- Sección "Acerca de": estructura para convertir visitantes en potenciales clientes
- Sección de servicios: cómo usarla correctamente
- Recomendaciones y prueba social: cómo conseguirlas y cuáles importan

**2. La estrategia de contenido para generar negocio**
Qué publicar en LinkedIn para atraer a tus clientes ideales (no para acumular seguidores genéricos):
- Tipos de contenido que atraen a decisores: casos reales con resultados, aprendizajes de proyectos, opiniones contraintuitivas sobre tu sector, errores comunes de tus clientes y cómo evitarlos
- Tipos de contenido que no generan negocio aunque tengan muchos likes
- Frecuencia realista según el tiempo disponible
- Cómo estructurar un post que se lee hasta el final

**3. La estrategia de comentarios como canal de visibilidad**
Por qué comentar en los posts de las personas correctas puede ser más efectivo que publicar propio contenido, especialmente al principio. Cómo comentar de forma que añada valor y te posicione, en lugar de comentarios vacíos.

**4. Outreach estratégico que no molesta**
Cómo conectar con potenciales clientes y iniciar conversaciones que no parezcan pitch de ventas. El proceso de warm outreach: cómo interactuar antes de conectar, cómo redactar el mensaje de conexión, cómo llevar la conversación hacia una llamada exploratoria de forma natural.

**5. LinkedIn Sales Navigator y búsqueda avanzada**
Cómo usar la búsqueda avanzada de LinkedIn (gratuita y de pago) para encontrar a tus clientes ideales por cargo, empresa, sector y tamaño. Cuándo vale la pena pagar Sales Navigator y cuándo no.

**6. De la conversación en LinkedIn al cliente pagando**
El proceso completo desde el primer comentario o mensaje hasta firmar el primer proyecto: cómo llevar la conversación de LinkedIn a una llamada, cómo estructurar esa llamada y cómo hacer la propuesta sin perder el momentum.

**7. Métricas para saber si la estrategia funciona**
Qué medir cada semana: visitas al perfil, solicitudes de conexión aceptadas, respuestas a mensajes de outreach, llamadas exploratoria realizadas, propuestas enviadas y proyectos cerrados. Cómo distinguir si el problema está en el contenido, en el outreach o en el cierre.

**8. Plan de 60 días para los primeros resultados**
Semana a semana qué hacer para empezar a generar conversaciones con potenciales clientes en los primeros dos meses, con tiempos realistas para ver los primeros resultados.

Dame estrategias que funcionen de verdad para freelancers, no los consejos genéricos de "aporta valor y los clientes llegarán solos".
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Captación de clientes freelance mediante LinkedIn',
                'vote_score'       => 47,
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
