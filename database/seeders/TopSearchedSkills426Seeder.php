<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills426Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de contenido long-form y SEO con IA para marcas',
                'description'       => 'Diseña una estrategia completa de contenido de largo formato y posicionamiento SEO usando IA para identificar oportunidades de keywords, crear briefs detallados y medir el impacto en tráfico orgánico y conversión.',
                'prompt_content'    => <<<'EOT'
Eres estratega de contenido y SEO con experiencia en marcas B2B y B2C. Tu objetivo es construir una estrategia integral de contenido long-form que posicione a la marca como referente en su sector, capture tráfico orgánico cualificado y convierta visitantes en leads o clientes.

Antes de comenzar, necesito que me proporciones:
- Marca: sector, producto o servicio, propuesta de valor y audiencia objetivo
- Situación SEO actual: dominio, DA/DR aproximado, tráfico orgánico mensual, herramienta de analytics
- Competidores principales con los que competir en SERP
- Objetivos de negocio del contenido: generación de leads, ventas directas, branding, o mixto
- Recursos disponibles: tamaño del equipo de contenido, presupuesto mensual, uso de freelancers o agencias

Con esa información, genera:

1. AUDITORÍA DE CONTENIDO Y OPORTUNIDADES SEO
   - Análisis del contenido existente: inventario de URLs, rendimiento actual, gap de keywords no cubiertas
   - Identificación de quick wins: contenido existente que puede optimizarse para ganar posiciones en 90 días
   - Análisis de la competencia: qué temas cubren los competidores que la marca no tiene, qué keywords les generan más tráfico
   - Mapa de oportunidades: clusters de keywords por intención de búsqueda (informacional, comercial, transaccional)

2. ARQUITECTURA DE CONTENIDO
   - Estructura de pillar pages y content clusters: cómo organizar el contenido en torno a temas pilares
   - Jerarquía de URLs y estructura de categorías recomendada
   - Mapa de interlinking: cómo conectar los artículos del cluster con la pillar page y entre sí
   - Priorización de contenidos a crear: impacto potencial vs. dificultad de posicionamiento (keyword difficulty)
   - Calendario editorial de 6 meses: temas, formatos, frecuencia de publicación

3. PROCESO DE CREACIÓN DE CONTENIDO CON IA
   - Investigación de keywords con IA: cómo usar herramientas y modelos de lenguaje para encontrar oportunidades no obvias
   - Brief de contenido completo para cada artículo: título, meta description, keywords primaria y secundarias, estructura H2/H3, fuentes a citar, longitud objetivo, CTA
   - Uso de IA para generar un borrador inicial y cómo editarlo para añadir valor diferencial
   - Proceso de revisión SEO antes de publicar: checklist de optimización on-page
   - Añadir opinión experta y datos propios: cómo diferenciar el contenido IA del que produce cualquier competidor

4. OPTIMIZACIÓN PARA FEATURED SNIPPETS Y SGE
   - Qué preguntas del sector merecen posicionarse en featured snippet y cómo estructurar el contenido para ello
   - Formato de respuesta directa: párrafos cortos, listas numeradas, tablas comparativas
   - Adaptación al Search Generative Experience de Google: qué cambia con la búsqueda con IA generativa
   - Schema markup recomendado: Article, FAQ, HowTo, Review según el tipo de contenido

5. LINK BUILDING Y AUTORIDAD DE DOMINIO
   - Estrategia de link building para contenido long-form: qué tácticas generar enlaces a artículos de blog
   - Digital PR: cómo crear estudios, estadísticas o herramientas que otros quieran enlazar
   - Guest posting: criterios para seleccionar dónde publicar contenido externo
   - Construcción de autoridad temática: cómo concentrar los esfuerzos de link building en el cluster prioritario

6. DISTRIBUCIÓN Y AMPLIFICACIÓN
   - Cómo reutilizar cada artículo long-form en múltiples formatos: newsletter, LinkedIn, hilo de Twitter, vídeo, infografía
   - Estrategia de promoción de contenido nuevo: paid, earned y owned
   - Email marketing de contenido: cómo nutrir suscriptores con el contenido SEO sin que parezca spam
   - Comunidades y foros donde distribuir el contenido de forma no intrusiva

7. MEDICIÓN Y OPTIMIZACIÓN CONTINUA
   - KPIs de contenido SEO: tráfico orgánico, posiciones, CTR, tiempo en página, leads generados por artículo
   - Proceso de revisión de contenido antiguo: cuándo actualizar, cuándo consolidar, cuándo eliminar
   - Reporting mensual de contenido: qué incluir en el informe para la dirección
   - Ciclo de mejora continua: cómo usar los datos para priorizar los próximos contenidos a crear o actualizar

Entrega: estrategia completa de contenido long-form y SEO con calendario editorial, proceso de creación con IA y sistema de medición.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Construir una estrategia SEO de contenido long-form que posicione la marca como referente y genere tráfico orgánico cualificado.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Blog técnico de desarrollo con IA: SEO para programadores',
                'description'       => 'Crea una estrategia de contenido técnico para blogs de desarrollo de software usando IA, con enfoque en SEO para audiencias de desarrolladores, documentación que posiciona y tutoriales que convierten.',
                'prompt_content'    => <<<'EOT'
Eres developer advocate o technical writer con experiencia en marketing de contenido para productos de tecnología. Tu misión es construir una estrategia de contenido técnico que posicione un producto o empresa de software entre los desarrolladores, usando SEO y distribución en las comunidades correctas.

Antes de comenzar, necesito saber:
- Producto o empresa: tipo de producto (API, framework, herramienta, SaaS técnico), lenguajes y tecnologías objetivo
- Audiencia: nivel técnico (junior, senior, arquitecto), rol (frontend, backend, fullstack, DevOps, data engineer)
- Situación actual: ¿existe ya blog o documentación? ¿Hay comunidad de usuarios activa?
- Objetivo del contenido: adquisición de nuevos usuarios, retención, educación de la comunidad, o branding técnico
- Recursos: ¿quién escribirá el contenido? ¿Ingenieros internos, technical writers, freelancers?

Con esa información, genera:

1. INVESTIGACIÓN DE KEYWORDS TÉCNICAS
   - Cómo encontrar keywords que buscan los desarrolladores: Stack Overflow tags, GitHub trending, términos de error, comparativas de herramientas
   - Tipos de búsquedas técnicas de alta intención: "how to X with Y", "X vs. Y", "X not working", "best way to X"
   - Oportunidades de long tail técnico: errores específicos, configuraciones, casos de uso avanzados
   - Competencia en SERPs técnicos: quién domina las primeras posiciones y por qué (documentación oficial, Stack Overflow, Medium, blog de empresa)

2. TIPOS DE CONTENIDO TÉCNICO QUE POSICIONAN
   Tutoriales paso a paso:
   - Estructura óptima: objetivo, prerrequisitos, código funcional desde el principio, puntos de error comunes
   - Cómo usar IA para generar el código de ejemplo y los casos de error probables
   - GitHub repository enlazado: cómo el repo apoya al artículo y viceversa

   Comparativas técnicas:
   - "Tu herramienta vs. alternativa": estructura justa y objetiva que transmite credibilidad
   - Cuándo tu solución es mejor y cuándo no: la honestidad genera confianza y enlaces

   Artículos de errores y soluciones:
   - "How to fix X error": alto volumen de búsqueda, baja dificultad, tráfico muy cualificado
   - Cómo organizar una biblioteca de troubleshooting con SEO

   Casos de uso avanzados:
   - Artículos de arquitectura: cómo grandes equipos usan tu herramienta en producción
   - Entrevistas técnicas con usuarios avanzados o contribuidores de open source

3. PROCESO DE CREACIÓN CON IA
   - Usar IA para generar el borrador técnico: cómo hacer el prompt para que el código generado sea correcto y en el lenguaje objetivo
   - Revisión técnica obligatoria: el ingeniero valida que el código funciona antes de publicar
   - Estructura SEO del artículo técnico: H1, H2, meta description, code blocks correctamente etiquetados
   - Cómo IA ayuda con la parte narrativa (introducción, contexto, conclusión) y el ingeniero aporta el know-how real

4. DISTRIBUCIÓN EN COMUNIDADES DE DESARROLLADORES
   - Plataformas donde distribuir contenido técnico: Dev.to, Hashnode, HackerNews, Reddit (r/programming, subreddits de tecnología específicos), Discord servers, newsletters técnicas
   - Cómo publicar sin ser percibido como spam: participar antes de promocionar, aportar valor adicional en el post
   - Developer relations: cómo el equipo de ingeniería puede ayudar a distribuir el contenido de forma auténtica
   - GitHub como canal de distribución: README que linkea al blog, GitHub Discussions, repositorios de ejemplos

5. DOCUMENTACIÓN QUE POSICIONA
   - Documentación como SEO: cómo la documentación técnica puede posicionar keywords de producto
   - Estructura de docs que convierte a usuarios: getting started, guías de uso, referencia de API, FAQ
   - Versioning de documentación: cómo manejar múltiples versiones sin canibalizar keywords entre sí
   - Interlink entre docs y blog: cómo conectar artículos del blog con la documentación oficial

6. MÉTRICAS DE CONTENIDO TÉCNICO
   - KPIs para audiencias de desarrolladores: tráfico de búsqueda, tiempo en página, copias de código (si rastreable), registro de prueba gratuita desde artículos
   - Cómo medir la calidad del tráfico: usuarios que se convierten en clientes vs. usuarios que solo leen
   - SEO técnico específico: core web vitals para blogs técnicos, rendering de code blocks, canonical en contenido sindicalizado

Entrega: estrategia completa de contenido técnico con plan editorial, proceso de creación con IA y guía de distribución en comunidades de desarrolladores.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Crear y posicionar contenido técnico que atraiga a desarrolladores y los convierta en usuarios del producto.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Portafolio y contenido SEO para diseñadores con IA',
                'description'       => 'Desarrolla una estrategia de contenido long-form y SEO para diseñadores que quieren atraer clientes a través de su portafolio y blog, usando IA para crear casos de estudio que posicionan y generan consultas.',
                'prompt_content'    => <<<'EOT'
Eres diseñador UX/UI, gráfico o de marca con experiencia y un portafolio que quieres convertir en un canal de adquisición de clientes a través de SEO y contenido de valor. Tu objetivo es crear una estrategia de contenido que posicione tu trabajo online, atraiga al tipo de cliente que quieres y genere consultas de proyectos de calidad.

Antes de comenzar, necesito saber:
- Especialidad de diseño: UX/UI, branding e identidad, diseño gráfico, diseño de producto, motion, web design
- Tipo de clientes objetivo: startups, pymes, agencias, corporaciones, sectores específicos
- Plataforma del portafolio: Behance, Dribbble, portfolio propio en Webflow/Squarespace, LinkedIn
- Situación actual de visibilidad: ¿te encuentran online? ¿Cómo llegan los clientes ahora mismo?
- Objetivo: más clientes freelance, conseguir empleo en empresa o hacer crecer una agencia

Con esa información, genera:

1. ESTRATEGIA DE KEYWORDS PARA DISEÑADORES
   - Tipos de búsqueda que hacen los clientes cuando buscan un diseñador: "diseñador UX para startup", "agencia de branding [ciudad]", "rediseño de app móvil"
   - Keywords de proceso: "cómo se hace un logo", "proceso de diseño de UX", "cuánto cuesta rediseñar una web"
   - Keywords de portfolio: "[tu especialidad] portfolio examples", "case study diseño UX"
   - Long tail de nicho: si te especializas en un sector (fintech, salud, ecommerce), keywords específicas de ese sector
   - Estrategia local vs. global: cuándo posicionarse en tu ciudad vs. para clientes remotos en todo el mundo

2. CASOS DE ESTUDIO QUE POSICIONAN Y CONVIERTEN
   - Estructura del caso de estudio SEO-optimizado: contexto del cliente, problema, proceso, solución, resultados
   - Cómo añadir keywords naturalmente en el caso de estudio sin que suene forzado
   - Datos y métricas: qué resultados incluir (si los clientes los permiten) para dar credibilidad
   - Uso de IA para redactar la narrativa del caso de estudio a partir de notas del proceso
   - Longitud y formato: casos de estudio de 1.500-3.000 palabras con imágenes del proceso, wireframes, iteraciones

3. BLOG DE DISEÑO QUE ATRAE CLIENTES
   Temas que posicionan ante clientes:
   - "Cuánto cuesta [tu servicio] en 2025": responde la pregunta que todos buscan, genera consultas
   - "Cómo elegir un diseñador de [tu especialidad]": posiciona ante quien está en proceso de decisión
   - "Errores comunes en [tu área de diseño] y cómo evitarlos": demuestra expertise

   Temas que posicionan ante colegas y reclutadores:
   - "Cómo diseñé [proyecto específico]": proceso detallado que muestra tu metodología
   - "Herramientas que uso en mi día a día como diseñador": keywords de herramientas con alto volumen
   - "Tendencias de diseño [año]": contenido de temporada con tráfico predecible

4. OPTIMIZACIÓN DEL PORTAFOLIO PARA SEO
   - Texto alt en todas las imágenes: cómo describirlas con keywords sin ser robótico
   - Páginas de proyecto con URL descriptiva: /portfolio/rediseno-app-fintech en lugar de /proyecto/45
   - Meta descriptions que venden: cómo escribir el snippet que aparece en Google para que genere clicks
   - Schema markup de portfolio: CreativeWork, Person, Organization
   - Velocidad de carga: imágenes de diseño optimizadas sin perder calidad visual

5. PROCESO DE CREACIÓN DE CONTENIDO CON IA
   - Uso de IA para generar el outline del artículo según la keyword objetivo
   - Cómo añadir tu voz y perspectiva personal al borrador generado por IA
   - IA para revisar el SEO on-page: densidad de keywords, estructura de encabezados, links internos
   - Creación de variaciones de contenido para diferentes plataformas: mismo artículo adaptado a LinkedIn, Instagram carousel, newsletter

6. DISTRIBUCIÓN Y CONSTRUCCIÓN DE AUTORIDAD
   - Plataformas de diseño para distribuir contenido: Dribbble, Behance, Muzli, Design Week, Smashing Magazine
   - LinkedIn para diseñadores: tipo de contenido que funciona, frecuencia, formato
   - Newsletters de diseño donde puedes publicar como colaborador
   - Backlinks naturales para diseñadores: recursos gratuitos, plantillas descargables, herramientas que otros enlazan

Entrega: estrategia de contenido personalizada con calendario editorial de 3 meses, plantilla de caso de estudio y checklist SEO para el portafolio.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Convertir el portafolio de diseño en un canal de adquisición de clientes mediante SEO y contenido long-form.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Thought leadership y contenido long-form para ventas B2B con IA',
                'description'       => 'Crea una estrategia de contenido de liderazgo de pensamiento para equipos de ventas B2B, usando IA para producir artículos, whitepapers y estudios de caso que abran puertas y aceleren el ciclo de ventas.',
                'prompt_content'    => <<<'EOT'
Eres director de ventas B2B o responsable de sales enablement con experiencia en social selling y marketing de contenido orientado a ventas. Tu objetivo es diseñar una estrategia de contenido de thought leadership que posicione a los vendedores y a la empresa como referentes, genere demanda inbound y acelere los deals del pipeline.

Información necesaria antes de comenzar:
- Empresa y producto: sector, tipo de solución, ticket medio y ciclo de ventas
- Compradores objetivo: cargos, industrias, tamaño de empresa, pain points principales
- Situación actual: ¿existe contenido de ventas? ¿Hay blog corporativo activo? ¿Los vendedores publican en LinkedIn?
- Objetivo del contenido: generar leads inbound, acelerar deals activos, posicionar la marca o una combinación
- Recursos: ¿quién produce el contenido? ¿Marketing, los propios vendedores con IA, o una combinación?

Con esa información, genera:

1. ESTRATEGIA DE THOUGHT LEADERSHIP B2B
   - Diferencia entre thought leadership y contenido de producto: por qué los compradores confían en quien educa, no en quien vende
   - Posicionamiento temático: los 3-5 temas en los que la empresa debe ser la voz de referencia para el comprador
   - Perspectiva de la empresa vs. perspectiva del vendedor individual: cuándo usar la marca corporativa y cuándo el perfil personal del AE
   - Cómo el thought leadership acorta el ciclo de ventas: el comprador que llega habiendo leído tu contenido ya está pre-cualificado

2. FORMATOS DE CONTENIDO LONG-FORM PARA B2B
   Whitepaper o informe de industria:
   - Estructura: executive summary, metodología, hallazgos, implicaciones para el comprador, llamada a la acción
   - Cómo usar IA para analizar datos de la industria y redactar el informe en tiempo récord
   - Cómo el whitepaper se convierte en lead magnet, material de nurturing y argumento en la reunión de ventas

   Caso de estudio en profundidad:
   - Estructura: situación anterior, reto principal, proceso de selección, implementación, resultados cuantificados, lección aprendida
   - Cómo conseguir que los clientes colaboren en el caso de estudio (qué incentivos ofrecer)
   - Versión larga para el blog + versión corta de una página para el equipo de ventas

   Guía definitiva para el comprador:
   - "Cómo elegir un [tipo de solución]": posiciona ante compradores en fase de evaluación
   - Estructura: qué criterios evaluar, preguntas a hacer a los proveedores, red flags, proceso de implementación
   - Cómo incluir perspectiva neutral que genere confianza aunque la guía la haga un proveedor

3. CONTENIDO DE LINKEDIN PARA VENDEDORES B2B
   - Estrategia de publicación individual del AE: frecuencia, temas, tipos de post (opinión, insight, caso de uso)
   - Cómo usar IA para generar ideas y borradores de posts a partir de las conversaciones de ventas del día
   - El post que abre puertas: cómo un artículo de LinkedIn puede convertirse en una solicitud de reunión
   - Engagement strategy: qué comentar, a quién seguir, cómo construir relaciones online con prospects

4. SALES ENABLEMENT CON CONTENIDO
   - Biblioteca de contenido para el equipo de ventas: organización por etapa del ciclo, por industry, por objeción
   - Contenido para cada etapa del funnel: awareness (educación), consideration (comparación), decision (validación)
   - Cómo compartir el contenido de forma no intrusiva en el proceso de ventas (timing, canal, contexto)
   - Follow-up con contenido: cómo usar un artículo relevante para retomar una conversación estancada

5. PROCESO DE PRODUCCIÓN CON IA
   - Workflow de producción de whitepaper con IA: investigación, esquema, borrador, revisión experta, diseño
   - Cómo entrevistar a un vendedor durante 30 minutos y convertir la conversación en un artículo de 2.000 palabras con IA
   - Repurposing del contenido long-form: de whitepaper a serie de LinkedIn posts, a email de nurturing, a script de webinar
   - Control de calidad: qué debe revisar siempre un humano antes de publicar contenido generado con IA

6. MEDICIÓN DE IMPACTO EN VENTAS
   - Cómo atribuir deals al contenido: UTMs, preguntar en el discovery "¿cómo nos conociste?", análisis de primer toque
   - Métricas de contenido B2B: downloads de whitepaper, tiempo de lectura, deals influenciados, reducción del ciclo de ventas
   - Reporte mensual de contenido para el VP de Ventas: qué medir y cómo presentarlo

Entrega: estrategia de thought leadership B2B con plan de contenidos, proceso de producción con IA y métricas de impacto en ventas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Crear contenido de thought leadership B2B que posicione a la empresa como referente y acelere los ciclos de ventas.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Contenido SEO de producto con IA para capturar demanda orgánica',
                'description'       => 'Diseña una estrategia de SEO de producto que capture la demanda orgánica de usuarios con alta intención de compra, usando IA para crear contenido de comparación, alternativas y casos de uso que posicionen el producto.',
                'prompt_content'    => <<<'EOT'
Eres product marketer o growth manager con experiencia en SEO de producto. Tu objetivo es diseñar una estrategia de contenido SEO que capture tráfico orgánico con alta intención de compra, posicionando el producto en las búsquedas que hacen los usuarios cuando están evaluando soluciones como la tuya.

Antes de comenzar, necesito:
- Producto: tipo de software o servicio, categoría de mercado, propuesta de valor diferencial
- Competidores principales con los que te comparan los usuarios
- Situación de SEO actual: dominio, tráfico orgánico, páginas que ya posicionan
- Perfil del usuario que quieres capturar: cargo, tamaño de empresa, industria, nivel de consciencia del problema
- Herramientas SEO disponibles: Ahrefs, Semrush, Moz, o acceso a datos de GSC únicamente

Con esa información, genera:

1. MAPA DE KEYWORDS DE ALTA INTENCIÓN DE COMPRA
   Categorías de búsqueda de alta intención para productos SaaS:
   - "Alternativas a [competidor]": el usuario está evaluando cambiar; enorme oportunidad de captura
   - "[Tu producto] vs. [competidor]": el usuario ya te conoce y está comparando
   - "Mejor [tipo de herramienta] para [caso de uso]": usuario en fase de evaluación activa
   - "[Tu producto] reviews": búsqueda de validación social antes de comprar
   - "[Caso de uso] software": intención de compra para resolver un problema específico
   - "[Tu categoría] para [industria]": nichos verticales con alta conversión

2. PÁGINAS DE COMPARACIÓN Y ALTERNATIVAS
   Página "Alternativas a [competidor]":
   - Estructura que posiciona sin atacar: reconoce las fortalezas del competidor, identifica para quién tu solución es mejor
   - Tabla comparativa objetiva: qué características comparar y cuáles evitar (no comparar donde pierdes)
   - Testimonial de usuarios que migraron del competidor: el argumento más convincente
   - CTA específico: prueba gratuita, demo, calculadora de ROI

   Página "[Tu producto] vs. [competidor]":
   - Perspectiva más directa que la de alternativas: para quién es cada uno
   - Casos de uso donde ganas, casos de uso donde el competidor puede ser mejor (honestidad que genera confianza)
   - Precios comparados si el dato es público

3. PÁGINAS DE CASOS DE USO Y VERTICALES
   - Estructura de la página de caso de uso: problema específico → cómo el producto lo resuelve → pasos concretos → resultado esperado → CTA
   - Páginas por industria vertical: "[Tu producto] para [sector]" — misma solución, diferente contexto y lenguaje
   - Páginas por cargo o rol: "[Tu producto] para [cargo]" — para el decision maker vs. para el usuario final
   - Cómo usar IA para crear estas páginas en escala manteniendo calidad y evitando contenido duplicado

4. SEO TÉCNICO DEL PRODUCTO
   - Estructura de URLs recomendada para el sitio de producto: /alternativas, /vs, /casos-de-uso
   - Canonical y hreflang para sitios con versiones en múltiples idiomas
   - Schema markup de producto y software application para enriquecer el snippet
   - Core Web Vitals: las páginas de producto deben cargar rápido porque los usuarios las abandona si tardan
   - Indexación y crawl budget: qué páginas indexar y cuáles no (páginas de precios desactualizadas, landing pages de ads)

5. PROCESO DE CREACIÓN DE CONTENIDO SEO DE PRODUCTO CON IA
   - Brief de la página de comparación: keyword, estructura, mensajes clave, diferenciadores a destacar
   - Uso de IA para generar el borrador de la tabla comparativa y el copy de secciones
   - Revisión del product marketer: añadir datos reales, quotes de clientes, features actualizadas
   - Actualización periódica: cómo mantener las páginas de comparación actualizadas cuando cambian los competidores

6. INTEGRACIÓN CON EL FUNNEL DE CONVERSIÓN
   - Cómo las páginas de SEO de producto conectan con el proceso de onboarding y trial
   - CTA de las páginas de comparación: cuál convierte más (prueba gratuita, demo, calculadora de ROI)
   - Retargeting de los visitantes de páginas de alta intención que no convirtieron
   - Análisis de conversión por tipo de página SEO: qué keywords traen usuarios que se quedan

7. MEDICIÓN DE IMPACTO
   - Tráfico orgánico de high-intent por tipo de página: comparación, alternativas, casos de uso
   - Tasa de conversión a trial o demo desde cada categoría de keyword
   - Pipeline generado por SEO: cómo atribuir revenue al tráfico orgánico
   - Revisión trimestral: qué páginas actualizar, qué nuevas comparaciones crear

Entrega: estrategia completa de SEO de producto con mapa de keywords, estructura de páginas y proceso de creación con IA.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Capturar demanda orgánica de alta intención con páginas de comparación, alternativas y casos de uso optimizadas para SEO.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Contenido de employer branding long-form con IA para atraer talento',
                'description'       => 'Diseña una estrategia de contenido de employer branding que posicione a la empresa como empleador de referencia, usando IA para crear artículos, casos de éxito de empleados y contenido SEO que atraiga al talento adecuado.',
                'prompt_content'    => <<<'EOT'
Eres especialista en employer branding y talent marketing. Tu objetivo es diseñar una estrategia de contenido que posicione a la empresa como el empleador ideal para los perfiles que necesitas atraer, combinando SEO, storytelling y distribución en las plataformas donde está el talento objetivo.

Antes de comenzar, necesito saber:
- Empresa: sector, tamaño, cultura y valores diferenciadores como empleador
- Perfiles de talento objetivo: roles, nivel de seniority, perfiles técnicos o no técnicos
- Situación de employer brand actual: ¿hay presencia activa en LinkedIn, Glassdoor, portales de empleo?
- Principales competidores de talento: otras empresas con las que compites por los mismos perfiles
- Objetivo principal: reducir time-to-hire, mejorar calidad de candidatos, reducir coste de adquisición de talento, o mejorar la reputación general como empleador

Con esa información, genera:

1. ESTRATEGIA DE CONTENIDO DE EMPLOYER BRANDING
   - Employee Value Proposition (EVP): cómo definir y articular qué hace única a la empresa como empleador
   - Diferencia entre lo que la empresa dice (messaging) y lo que los empleados dicen (testimonios): cómo alinear ambos
   - Pilares de contenido de employer branding: cultura, desarrollo profesional, impacto, team, beneficios
   - Audiencias a las que hablar: candidatos activos (buscando empleo ahora), candidatos pasivos (no buscan pero podrían), ex-empleados (que pueden volver o recomendar)

2. FORMATOS DE CONTENIDO LONG-FORM
   Historias de empleados:
   - Estructura del artículo "Un día en la vida de [rol]": rutina, retos, herramientas, qué hace que el trabajo sea especial
   - Trayectorias de carrera: "De junior a tech lead en 3 años en [empresa]": cómo el desarrollo interno es real
   - Cómo usar IA para entrevistar a un empleado (preguntas sugeridas) y redactar la historia

   Artículos de cultura y valores:
   - Cómo escribir sobre cultura sin caer en clichés ("somos como una familia", "ambiente joven y dinámico")
   - Artículos sobre cómo se toman decisiones, cómo se da feedback, cómo es el proceso de evaluación
   - Transparencia sobre salarios y beneficios: el contenido más leído y enlazado del employer branding

   Contenido técnico para perfiles de desarrollo:
   - "Cómo trabajamos en [empresa]": stack tecnológico, metodologías, cultura de ingeniería
   - Blog técnico que atrae talento: los mejores candidatos leen blogs técnicos de las empresas donde quieren trabajar

3. SEO PARA EMPLOYER BRANDING
   - Keywords que buscan los candidatos: "[empresa] salarios", "[empresa] opiniones", "[empresa] ambiente de trabajo"
   - Posicionamiento en búsquedas de empleo: "[rol] + [ciudad]", "trabajo en [sector] [ciudad]"
   - Glassdoor SEO: cómo gestionar las reseñas para mejorar la posición en las búsquedas de empleados
   - LinkedIn company page SEO: cómo optimizar la página de empresa para aparecer en más búsquedas de talento

4. PROCESO DE CREACIÓN CON IA
   - Entrevista estructurada con empleado (guión de 20 preguntas) → transcripción → artículo con IA → revisión del empleado
   - Uso de IA para adaptar el mismo artículo a diferentes audiencias: candidatos técnicos vs. candidatos de negocio
   - Generación de titulares y meta descriptions atractivos para candidatos
   - Calendario de contenido de employer branding: frecuencia, temas por mes, fechas especiales (Día del Orgullo, Día de la Mujer en Tecnología)

5. DISTRIBUCIÓN DEL CONTENIDO
   - LinkedIn: tipo de publicaciones que alcanzan a candidatos pasivos, uso de empleados como amplificadores
   - Instagram y TikTok: contenido de employer branding visual y en vídeo (behind the scenes, oficina, eventos de equipo)
   - Glassdoor y Indeed: cómo responder a reseñas y usar las respuestas como contenido de marca
   - Newsletter de talento: email mensual para candidatos que dejaron su CV o seguidores de la empresa en redes

6. MÉTRICAS DE EMPLOYER BRANDING
   - Awareness: alcance en LinkedIn, impresiones del contenido, búsquedas directas de la empresa como empleador
   - Consideración: tráfico a la página de careers, tiempo en página, páginas de empleo más visitadas
   - Conversión: tasa de aplicación, porcentaje de candidatos inbound vs. outbound, calidad de candidatos desde contenido
   - Reputación: puntuación en Glassdoor y tendencia, eNPS y su correlación con recomendaciones externas

Entrega: estrategia completa de employer branding con plan de contenidos, proceso de producción con IA y métricas de talento.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir una estrategia de contenido de employer branding que atraiga talento cualificado de forma orgánica.',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Contenido financiero long-form con IA para autoridad y captación',
                'description'       => 'Desarrolla una estrategia de contenido SEO para empresas o profesionales de finanzas, con artículos que posicionan en Google, demuestran expertise y generan confianza para captar clientes o inversores.',
                'prompt_content'    => <<<'EOT'
Eres experto en finanzas con experiencia en content marketing para el sector financiero. Tu objetivo es diseñar una estrategia de contenido long-form que posicione a una empresa o profesional financiero como referente de confianza, captando tráfico orgánico de personas que buscan información financiera y convirtiéndolos en clientes o leads cualificados.

Antes de comenzar, necesito:
- Entidad o profesional: tipo de negocio (asesor financiero independiente, fintech, gestora de fondos, consultoría financiera, blog de finanzas personales)
- Audiencia objetivo: perfil del lector ideal (nivel de conocimiento financiero, situación patrimonial, objetivos financieros)
- Mercado geográfico y regulación aplicable: España, México, Latam, internacional
- Objetivo del contenido: captación de clientes, posicionamiento de marca, monetización de audiencia (afiliados, cursos)
- Restricciones regulatorias: ¿hay limitaciones para dar consejos de inversión concretos?

Con esa información, genera:

1. ESTRATEGIA DE KEYWORDS FINANCIERAS
   - Categorías de búsqueda financiera por intención: información ("qué es la inflación"), comparación ("mejor fondo indexado"), transacción ("cómo invertir en bolsa")
   - Keywords de alto volumen y alta competencia: cómo ganar en ellas con contenido más completo y actualizado que el existente
   - Long tail financiero de alta conversión: "cómo invertir 10.000 euros", "rentabilidad depósito vs. fondos indexados 2025"
   - Oportunidades de contenido evergreen vs. contenido estacional (declaración de la renta, rebajas fiscales de fin de año)

2. TIPOLOGÍA DE CONTENIDO FINANCIERO QUE POSICIONA
   Guías definitivas:
   - "Guía completa de [producto financiero]": pensiones, ETFs, planes de ahorro, hipotecas
   - Estructura óptima: qué es, cómo funciona, ventajas e inconvenientes, para quién es adecuado, cómo contratar, preguntas frecuentes
   - Longitud y profundidad: superar en calidad y exhaustividad a los competidores que ya posicionan (mínimo 3.000 palabras para temas competidos)

   Comparativas financieras:
   - "Fondos indexados vs. gestión activa": la comparativa que miles buscan cada mes
   - "Mejores brokers en España [año]": contenido de alta intención que actualizar cada año para mantener la posición
   - Cómo hacer comparativas honestas que generen confianza aunque unas opciones sean mejores que otras

   Artículos de planificación financiera:
   - "Cómo crear un fondo de emergencia paso a paso"
   - "Estrategia de inversión para [etapa de vida]": 30 años, recién jubilado, familia con hipoteca
   - Calculadoras integradas en el artículo: interés compuesto, comparativa de rentabilidades, cuánto necesito para jubilarme

3. CONTENIDO YMYL Y E-E-A-T EN FINANZAS
   - Google trata el contenido financiero como YMYL (Your Money Your Life): qué significa para el SEO
   - E-E-A-T (Experience, Expertise, Authoritativeness, Trustworthiness): cómo demostrar cada dimensión
   - Credenciales del autor: certificaciones financieras a mencionar, regulaciones bajo las que opera
   - Transparencia sobre afiliados y conflictos de interés: cómo divulgarlos sin perder tráfico
   - Revisión periódica de contenido: Google penaliza el contenido financiero desactualizado

4. PROCESO DE CREACIÓN CON IA EN FINANZAS
   - Uso de IA para investigar y estructurar artículos complejos sobre productos financieros
   - Revisión obligatoria por un experto financiero antes de publicar: qué verificar específicamente
   - Cómo citar fuentes regulatorias y oficiales (Banco de España, CNMV, BOE) para dar autoridad
   - Actualización de contenido existente: cómo usar IA para identificar qué datos hay que actualizar y cómo hacerlo

5. DISTRIBUCIÓN DEL CONTENIDO FINANCIERO
   - Comunidades financieras donde distribuir: foros de inversión, grupos de Telegram de finanzas personales, Reddit /r/es_personalfinance
   - Newsletter financiera: cómo construir una lista y qué contenido enviar para mantener el engagement
   - Podcast y YouTube: cómo el contenido long-form apoya la presencia en otros formatos
   - Prensa y medios especializados: cómo conseguir que Expansión, El Economista u otros enlacen al contenido

6. MONETIZACIÓN Y CONVERSIÓN
   - Llamadas a la acción en contenido financiero: descarga de guía, consulta gratuita, calculadora, newsletter
   - Cómo nutrir lectores desde el artículo de blog hasta la consulta o contratación
   - Afiliación financiera: qué productos financieros se pueden promocionar con afiliados y cómo hacerlo de forma transparente
   - Métricas de conversión de contenido financiero: lectura completa, clics en CTA, leads cualificados generados

Entrega: estrategia completa de contenido financiero con plan editorial, proceso de creación con IA y guía de E-E-A-T para el sector.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Crear contenido financiero long-form que posiciona como experto de confianza y capta clientes o inversores.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contenido legal long-form con IA para despachos y abogados',
                'description'       => 'Diseña una estrategia de contenido SEO para despachos de abogados o abogados independientes que posicione en las búsquedas legales de sus clientes potenciales, usando IA para producir artículos que generan autoridad y consultas.',
                'prompt_content'    => <<<'EOT'
Eres abogado o responsable de marketing de un despacho jurídico. Tu objetivo es construir una estrategia de contenido long-form que posicione el despacho como referente en su área de práctica, capte tráfico orgánico de personas con problemas legales y los convierta en consultas y clientes.

Antes de comenzar, necesito saber:
- Despacho o abogado: áreas de práctica, especialización, jurisdicción principal
- Tipo de clientes objetivo: particulares (consumidores), pymes, empresas, o mixto
- Situación actual: ¿existe web o blog? ¿Hay presencia en buscadores actualmente?
- Competencia local: qué despachos de la zona o especialidad dominan Google actualmente
- Objetivo del contenido: captar consultas directas, posicionar la marca del despacho, o construir autoridad para referidos

Con esa información, genera:

1. KEYWORDS LEGALES QUE BUSCAN LOS CLIENTES
   - Tipos de búsqueda legal por intención: informacional ("qué es un despido improcedente"), transaccional ("abogado laboralista [ciudad]"), comparativa ("cuánto cuesta un abogado de divorcio")
   - Keywords de alta intención y bajo volumen pero alta conversión: "despido sin causa justificada qué hacer", "cómo reclamar al banco cláusula suelo"
   - Búsquedas locales: "abogado + especialidad + ciudad" y variaciones (barrio, zona metropolitana)
   - Búsquedas de precio y coste: los clientes buscan saber cuánto les va a costar; el contenido que responde convierte
   - Long tail de situaciones específicas: "accidente de tráfico sin seguro qué hacer", "heredar piso con deudas"

2. TIPOLOGÍA DE CONTENIDO LEGAL QUE POSICIONA
   Artículos explicativos de derechos:
   - "Tus derechos si te despiden": el artículo que buscan miles de personas cada mes
   - Estructura: qué es, qué derechos tienes, pasos a seguir, plazos importantes, cuándo necesitas un abogado
   - Tono: accesible para no juristas, sin perder rigor; evitar jerga legal sin explicación

   Guías de procedimientos legales:
   - "Cómo reclamar [situación común]": guía paso a paso del proceso, con plazos y documentación necesaria
   - Infografía o tabla de pasos incluida en el artículo para mejorar tiempo de permanencia

   Artículos de cambios legislativos:
   - Cuando cambia una ley relevante: el despacho que explica el cambio primero se posiciona como referente
   - "Cómo te afecta la nueva ley de [materia]": contenido de temporada con alta demanda puntual

   FAQs legales en profundidad:
   - Las 10 preguntas más frecuentes de los clientes sobre [especialidad]: cada una desarrollada en 200-300 palabras
   - Formato ideal para featured snippets y respuestas de Google AI

3. CONTENIDO YMYL LEGAL Y E-E-A-T
   - El contenido legal es YMYL: Google lo escrutina especialmente; qué significa para el despacho
   - Demostración de expertise: mencionar años de experiencia, casos ganados (anonimizados), formación del abogado autor
   - Credenciales en cada artículo: colegiación, especialización acreditada, membresía en asociaciones
   - Disclaimer legal obligatorio: cómo incluirlo sin que destruya la experiencia de lectura
   - Actualización de contenido: el contenido legal desactualizado puede ser dañino para el lector y penalizado por Google

4. PROCESO DE CREACIÓN CON IA PARA CONTENIDO LEGAL
   - Uso de IA para redactar el borrador basado en la legislación vigente y jurisprudencia
   - Revisión obligatoria del abogado: verificar exactitud, actualidad, y adecuación al caso concreto de la jurisdicción
   - Cómo citar correctamente: BOE, sentencias del Tribunal Supremo, jurisprudencia relevante
   - Actualización periódica: protocolo para detectar cambios legislativos y actualizar el contenido afectado

5. SEO LOCAL PARA DESPACHOS
   - Google Business Profile: cómo optimizarlo para búsquedas locales, qué categorías usar, cómo gestionar reseñas
   - Páginas de servicio locales: una página por área de práctica + ciudad para capturar búsquedas locales
   - Schema markup de abogado y organización jurídica: Attorney, LegalService, LocalBusiness
   - Citas locales (NAP): dirección, teléfono y nombre consistentes en todos los directorios jurídicos

6. CONVERSIÓN Y GENERACIÓN DE CONSULTAS
   - CTA en contenido legal: consulta gratuita inicial, formulario de valoración del caso, llamada directa
   - Cómo segmentar el CTA según el tipo de artículo: artículo informativo (menos urgencia) vs. artículo de situación crítica (mayor urgencia)
   - Follow-up de leads de contenido: cómo nutrir a alguien que descargó una guía o dejó un email

Entrega: estrategia de contenido legal completa con plan editorial, proceso de creación con IA, guía de E-E-A-T y SEO local para despachos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Posicionar un despacho o abogado en Google con contenido legal long-form que genera autoridad y consultas.',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Base de conocimiento SEO con IA para reducir tickets de soporte',
                'description'       => 'Construye una base de conocimiento optimizada para SEO que resuelva las dudas de los clientes antes de que contacten con soporte, usando IA para crear artículos de ayuda que posicionan en Google y reducen el volumen de tickets.',
                'prompt_content'    => <<<'EOT'
Eres director de Customer Success o responsable de soporte con experiencia en self-service y knowledge management. Tu objetivo es construir una base de conocimiento que funcione como canal de soporte de autoservicio y al mismo tiempo posicione en Google cuando los usuarios buscan ayuda sobre tu producto, reduciendo el volumen de tickets y mejorando la satisfacción del cliente.

Antes de comenzar, necesito:
- Producto o servicio y sus principales funcionalidades
- Volumen mensual de tickets y las 10 consultas más frecuentes
- Herramienta de knowledge base actual o disponible: Intercom, Zendesk Guide, Notion, Confluence, Help Scout
- Nivel técnico de los usuarios: técnicos (desarrolladores, IT), no técnicos, o mixto
- Objetivos cuantificados: reducir tickets en un X%, mejorar tiempo de respuesta, aumentar self-service rate

Con esa información, genera:

1. ARQUITECTURA DE LA BASE DE CONOCIMIENTO
   - Categorías principales: cómo organizar el contenido para que los usuarios encuentren la respuesta en máximo 2 clicks
   - Taxonomía de artículos: getting started, guías de uso, troubleshooting, referencia técnica (API/integraciones), facturación y cuenta
   - Jerarquía de páginas: categoría → subcategoría → artículo; cuándo crear subcategorías vs. mantener estructura plana
   - Búsqueda interna: cómo optimizar los artículos para que aparezcan en la búsqueda interna del helpdesk

2. ESTRATEGIA SEO DE LA BASE DE CONOCIMIENTO
   - Keywords que buscan los usuarios fuera del producto: errores frecuentes, comparativas, tutoriales de integración
   - Tipos de búsquedas que deben capturarse: "[nombre del producto] cómo hacer X", "[nombre del producto] error Y", "problema con [feature]"
   - Estructura de URLs: /ayuda/categoria/articulo con keywords relevantes, no IDs numéricos
   - Canonical y acceso indexable: asegurarse de que Google puede indexar la base de conocimiento
   - Meta titles y descriptions de artículos de ayuda: cómo escribirlos para que tengan CTR en SERP

3. PROCESO DE CREACIÓN DE ARTÍCULOS CON IA
   Análisis de tickets para identificar temas:
   - Cómo exportar y analizar los tickets históricos para identificar las consultas más frecuentes
   - Uso de IA para agrupar tickets por tema y extraer los patrones de problema más comunes
   - Priorización: crear primero los artículos que responden al 20% de consultas que generan el 80% de los tickets

   Redacción de artículos con IA:
   - Estructura estándar del artículo de ayuda: problema a resolver, pasos numerados, capturas de pantalla, casos especiales, artículos relacionados
   - Cómo usar IA para redactar el artículo a partir del ticket histórico y las notas del agente de soporte
   - Tono accesible: sin jerga interna, lenguaje claro para el nivel técnico del usuario objetivo
   - Versiones del artículo: versión rápida (para el widget de ayuda in-app) y versión completa (para la base de conocimiento pública)

4. ARTÍCULOS DE TROUBLESHOOTING QUE POSICIONAN
   - Artículos de error: "[Mensaje de error exacto] - cómo solucionarlo": el usuario copia el error en Google
   - Estructura: qué causa el error, pasos para diagnosticarlo, soluciones ordenadas de más a menos común
   - FAQ de problemas frecuentes: la pregunta como H2, la respuesta directa en el primer párrafo (ideal para featured snippet)
   - Troubleshooting por integración: "[Tu producto] + [herramienta externa] no funciona": muy específico, muy poco competido

5. MANTENIMIENTO Y ACTUALIZACIÓN
   - Cuándo actualizar un artículo: cambio de feature, feedback negativo de usuarios, aumento de tickets sobre ese tema
   - Sistema de feedback en los artículos: ¿te ha sido útil? y cómo usar ese feedback para priorizar mejoras
   - Ciclo de revisión periódica: cada artículo revisado cada 6 meses como mínimo
   - Alertas de degradación SEO: si un artículo pierde posiciones, puede ser que haya cambiado la feature o que la competencia haya mejorado

6. MÉTRICAS DE ÉXITO
   - Self-service rate: porcentaje de usuarios que resuelven su duda sin abrir un ticket
   - Deflection rate: tickets evitados gracias a la base de conocimiento (cuantificado en dinero)
   - Tráfico SEO a la base de conocimiento: nuevos usuarios que llegan desde Google
   - Satisfacción con la base de conocimiento: puntuación de "¿te ha sido útil?"
   - Artículos más consultados: top 20 artículos que más deflectan tickets

Entrega: arquitectura completa de la base de conocimiento, proceso de creación con IA, estrategia SEO y métricas de éxito.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir una base de conocimiento SEO que reduce tickets de soporte y capta tráfico orgánico de usuarios con dudas sobre el producto.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Blog y SEO personal para freelancers con IA: de invisible a referente',
                'description'       => 'Construye tu presencia online como freelancer con una estrategia de blog y SEO usando IA, posicionándote como experto en tu nicho para atraer clientes de mayor calidad y precio sin depender de plataformas de terceros.',
                'prompt_content'    => <<<'EOT'
Eres freelancer profesional que quiere reducir su dependencia de plataformas como Upwork, Fiverr o intermediarios, construyendo una presencia propia en Google que atraiga clientes directamente y te permita cobrar tarifas más altas por ser percibido como experto.

Antes de comenzar, necesito saber:
- Especialidad: tipo de servicio, nicho específico dentro de ese servicio, y en qué eres diferente a otros freelancers
- Mercado objetivo: clientes nacionales o internacionales, sector de los clientes, tamaño de empresa objetivo
- Situación actual de presencia online: ¿tienes web propia? ¿Blog activo? ¿Redes sociales?
- Objetivo de negocio: aumentar tarifas, reducir dependencia de plataformas, conseguir clientes de mayor ticket, o construir lista de espera
- Tiempo disponible para crear contenido: horas por semana que puedes dedicar (incluyendo uso de IA)

Con esa información, genera:

1. POSICIONAMIENTO Y NICHO SEO
   - La trampa del generalista en SEO: por qué es mejor ser "el experto en X para Y" que "hacer de todo"
   - Ejercicio de definición del nicho: cruza tu especialidad + sector de cliente + resultado específico que produces
   - Keywords que buscan tus clientes ideales: no keywords de tu servicio sino keywords de sus problemas
   - Ejemplo: si eres diseñador UX para startups de salud, tus clientes buscan "mejorar conversión de app de salud", no "diseñador UX"
   - Cómo posicionarte para búsquedas de alta intención de contratación: "freelancer [especialidad] [sector]", "contratar [tipo de experto]"

2. ESTRATEGIA DE BLOG PARA FREELANCERS
   Tipos de contenido que atraen clientes, no colegas:
   - Casos de estudio de proyectos (con permiso del cliente o anonimizados): el contenido que más convierte
   - "Cómo [tipo de cliente] puede [resultado deseado]": educa al cliente sobre el problema que tú resuelves
   - "Errores que cometen las empresas al [hacer X sin un experto]": posiciona la necesidad de tu servicio
   - "Cuánto cuesta [tu servicio] y por qué": responde la pregunta que todos tienen; capta clientes con presupuesto

   Contenido que construye autoridad de nicho:
   - Análisis y tendencias del sector de tus clientes: demuestra que entiendes su mundo
   - Herramientas y recursos para [sector de tu cliente]: te posicionas como consultor, no como proveedor
   - Opiniones y perspectivas sobre cambios del sector: el thought leadership que te diferencia

3. PROCESO DE CREACIÓN CON IA (2-4 HORAS POR SEMANA)
   - Sistema de generación de ideas con IA: cómo extraer temas de las conversaciones con clientes, preguntas frecuentes, y tendencias del sector
   - Workflow de creación: 30 minutos de investigación + brief → IA genera borrador → 60 minutos de edición con tu voz y experiencia real
   - Añadir lo que la IA no puede: anécdotas de proyectos reales, errores cometidos, aprendizajes específicos de tu experiencia
   - Repurposing: cada artículo del blog se convierte en 3 posts de LinkedIn, 1 email para tu lista, 1 hilo de Twitter o Threads
   - Herramientas recomendadas para el flujo de trabajo: investigación de keywords, borrador con IA, optimización SEO, publicación

4. SEO ON-PAGE PARA EL BLOG FREELANCE
   - Estructura del artículo: H1 con keyword, introducción que conecta con el problema del cliente, desarrollo en H2/H3, conclusión con CTA
   - Meta description que vende el artículo: no describe, provoca curiosidad o promete el resultado
   - Interlinking: cómo conectar los artículos del blog con las páginas de servicios para pasar autoridad
   - Imágenes: nombrar los archivos con keywords, alt text descriptivo, compresión para velocidad de carga
   - Schema de Person y ProfessionalService para que Google entienda que eres un profesional verificable

5. CONSTRUIR AUTORIDAD Y BACKLINKS COMO FREELANCER
   - Guest posting: cómo publicar en blogs del sector de tus clientes (no en blogs de freelancers o de tu especialidad)
   - Menciones en medios: cómo aparecer como experto citado en artículos de prensa o blogs del sector
   - HARO (Help a Reporter Out) y plataformas similares: cómo responder consultas de periodistas para conseguir menciones y backlinks
   - Recursos enlazables: calculadoras, plantillas gratuitas o guías descargables que otros quieran enlazar

6. CONVERTIR EL TRÁFICO EN CLIENTES
   - Página de servicios SEO-optimizada: cómo debe estar estructurada para que el visitante que llega del blog contrate
   - Lead magnet para freelancers: qué ofrecer a cambio del email (checklist, plantilla, mini-curso) que filtre a los clientes ideales
   - Email marketing: cómo nutrir a los suscriptores del blog hasta que estén listos para contratar
   - Testimonios y casos de éxito: cómo solicitar y mostrar prueba social en el blog y la web

7. MÉTRICAS Y EXPECTATIVAS REALISTAS
   - Cuánto tiempo tarda el SEO en dar resultados para un blog freelance: expectativas realistas por etapa
   - KPIs a medir mensualmente: tráfico orgánico, posición de keywords objetivo, leads generados, consultas entrantes
   - Cuándo el blog empieza a traer clientes: señales de que la estrategia está funcionando
   - Ajustes al plan según los primeros 6 meses de datos

Entrega: estrategia completa de blog y SEO para tu negocio freelance con plan de contenidos, proceso de creación con IA y sistema de conversión.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir presencia SEO propia como freelancer para atraer clientes de mayor calidad sin depender de plataformas de terceros.',
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
