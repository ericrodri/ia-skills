<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills452Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Inteligencia competitiva de marketing con IA: analiza a tu competencia digital',
                'description'      => 'Usa IA para monitorizar las campañas, el contenido y el posicionamiento de tus competidores, y obtener insights accionables para superar su estrategia de marketing.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en inteligencia competitiva y marketing digital con experiencia en análisis de la competencia, benchmarking de campañas y estrategia de posicionamiento de marca. Tu tarea es ayudarme a realizar un análisis exhaustivo de mis competidores para mejorar mi estrategia de marketing.

objetivo: construir un sistema de inteligencia competitiva de marketing que me permita entender qué hacen mis competidores, identificar sus puntos débiles y encontrar oportunidades para posicionarme mejor en el mercado.

tarea 1 — IDENTIFICACIÓN Y CLASIFICACIÓN DE COMPETIDORES
Mapea el landscape competitivo:
- Competidores directos: misma categoría de producto, mismo público objetivo
- Competidores indirectos: productos sustitutos que resuelven el mismo problema de otra manera
- Competidores aspiracionales: marcas líderes del sector de las que puedo aprender
- Nuevos entrantes: startups o marcas emergentes que podrían amenazar mi posición
Para cada competidor: nombre, URL, propuesta de valor, segmento objetivo y tamaño estimado

tarea 2 — ANÁLISIS DE PRESENCIA DIGITAL
Evalúa el posicionamiento online de cada competidor:
- SEO: dominio de autoridad, palabras clave principales, volumen de tráfico orgánico estimado (Semrush/Ahrefs benchmarks), páginas de mayor tráfico
- Contenido: frecuencia de publicación, tipos de contenido (blog, vídeo, podcast, infografías), temas principales y engagement
- Redes sociales: seguidores, tasa de engagement, frecuencia de publicación, formatos que mejor funcionan
- Email marketing: si tienen newsletter, frecuencia, tipo de contenido y oferta de lead magnet
- Publicidad de pago: creatividades en Meta Ads Library y Google, mensajes y ofertas detectadas

tarea 3 — ANÁLISIS DE MENSAJES Y PROPUESTA DE VALOR
Compara los mensajes de marketing:
- Tagline y propuesta de valor principal de cada competidor
- Argumentos de venta más frecuentes: precio, calidad, velocidad, servicio, comunidad
- Tono de voz y personalidad de marca: formal, cercano, aspiracional, técnico
- Pain points que abordan y los que ignoran (oportunidades para mí)
- Diferenciación real vs. percibida: qué dicen que los hace únicos y si es creíble

tarea 4 — ANÁLISIS DE PRODUCTO Y PRECIO
Benchmarking de la oferta:
- Comparativa de características de producto/servicio: tabla feature vs. feature
- Estructura de precios: freemium, suscripción, pago único, por uso
- Posicionamiento en precio: premium, mass market, value
- Reviews y reseñas de clientes: qué elogian y qué critican en G2, Trustpilot, App Store, Google Maps
- Gaps de mercado: necesidades de clientes no cubiertas por ningún competidor

tarea 5 — PLAN DE ACCIÓN COMPETITIVO
Convierte los insights en estrategia:
- Matriz DAFO competitivo: mis fortalezas frente a sus debilidades, mis debilidades frente a sus fortalezas
- 3 estrategias de diferenciación basadas en los gaps detectados
- Keywords y temas de contenido donde la competencia es débil y yo puedo ganar
- Campaña de conquista: cómo captar clientes insatisfechos de mis competidores
- Sistema de monitorización continua: alertas de Google, seguimiento de redes, newsletter de competidores

instrucción final: realiza el análisis para el sector y los competidores que te indique. Si no los especifico, trabaja con un SaaS de marketing B2B con 3-5 competidores directos identificables. Presenta los resultados en tablas comparativas y da recomendaciones priorizadas por impacto y esfuerzo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Análisis de competidores digitales y benchmarking de estrategias de marketing',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Benchmarking técnico de productos software con IA: arquitectura y rendimiento',
                'description'      => 'Analiza y compara la arquitectura, rendimiento y stack tecnológico de productos competidores para tomar decisiones informadas de desarrollo y diseño de producto.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software con experiencia en análisis técnico competitivo, reverse engineering ético de productos digitales y benchmarking de rendimiento de sistemas. Tu tarea es ayudarme a realizar un análisis técnico comparativo de productos software competidores.

objetivo: realizar un benchmarking técnico profundo de los principales competidores de software para identificar sus decisiones de arquitectura, su stack tecnológico, sus fortalezas y debilidades técnicas, y encontrar ventajas competitivas para mi producto.

tarea 1 — ANÁLISIS DE STACK TECNOLÓGICO
Investiga la tecnología que usa cada competidor:
- Frontend: framework detectado (React, Vue, Angular, Next.js), bundler, CDN utilizado
- Backend: lenguaje y framework (Node, Python/Django, Ruby on Rails, Java, Go), indicadores en job postings
- Base de datos: SQL vs. NoSQL, proveedores de nube detectados (AWS, GCP, Azure)
- Infraestructura: Cloudflare, AWS CloudFront, Fastly, Vercel, Heroku (detectables por headers HTTP)
- Herramientas de terceros: analytics (GA4, Mixpanel), soporte (Intercom, Zendesk), pagos (Stripe)
Fuentes: Wappalyzer, BuiltWith, headers HTTP, job postings, GitHub público, documentación de APIs

tarea 2 — BENCHMARKING DE RENDIMIENTO
Compara métricas técnicas objetivas:
- Core Web Vitals: LCP, FID/INP, CLS de páginas clave (usar PageSpeed Insights o WebPageTest)
- Tiempo de carga (TTFB, FCP, TTI): comparativa en móvil y desktop, conexión 3G y 4G
- Tamaño de bundle y número de requests: optimización de assets
- Disponibilidad y SLA: uptime histórico (statuspage.io, UptimeRobot públicos)
- Latencia de API: tiempos de respuesta de endpoints públicos documentados

tarea 3 — ANÁLISIS DE APIS Y DOCUMENTACIÓN
Evalúa las capacidades de integración del competidor:
- Calidad de la documentación pública: completitud, ejemplos, SDKs disponibles
- Versionado de APIs y gestión de cambios incompatibles
- Autenticación: OAuth 2.0, API keys, JWT
- Rate limiting y planes de uso publicados
- Webhooks y eventos: qué acciones notifican y con qué detalle
- GraphQL vs. REST vs. gRPC: elecciones de diseño y sus implicaciones

tarea 4 — ANÁLISIS DE SEGURIDAD Y CUMPLIMIENTO
Investiga la postura de seguridad técnica:
- Certificaciones publicadas: SOC 2, ISO 27001, PCI DSS, HIPAA compliance
- Política de divulgación de vulnerabilidades (responsible disclosure / bug bounty)
- Headers de seguridad HTTP: CSP, HSTS, X-Frame-Options (verificables con securityheaders.com)
- Autenticación de dos factores: disponibilidad y métodos soportados
- Tiempo de respuesta a incidentes de seguridad conocidos (postmortems públicos)

tarea 5 — OPORTUNIDADES TÉCNICAS COMPETITIVAS
Convierte el análisis en ventajas:
- Deuda técnica visible del competidor: tecnologías antiguas, lentitud detectada, bugs públicos
- Features técnicas que mis competidores no tienen: offline-first, real-time, edge computing
- Propuesta de valor técnica diferenciada: rendimiento, fiabilidad, extensibilidad, precio de API
- Roadmap técnico recomendado basado en los gaps detectados
- Argumentos técnicos para el equipo de ventas: por qué somos técnicamente superiores

instrucción final: aplica el análisis a los competidores del producto software que especifique. Si no los indico, trabaja con tres herramientas SaaS de gestión de proyectos (estilo Asana, Monday, Linear). Presenta un informe técnico estructurado con tablas comparativas y recomendaciones concretas de arquitectura.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Benchmarking técnico de arquitectura, rendimiento y APIs de productos software competidores',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Análisis competitivo de diseño y tendencias visuales con IA',
                'description'      => 'Usa IA para analizar la identidad visual, los patrones de UX y las tendencias de diseño de tus competidores, e identificar oportunidades para diferenciarte visualmente.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador senior con especialización en investigación de diseño, análisis competitivo visual y tendencias de UX/UI. Tu tarea es ayudarme a realizar un análisis exhaustivo del diseño de mis competidores para encontrar oportunidades de diferenciación visual y de experiencia de usuario.

objetivo: comprender el panorama de diseño de mi sector, identificar los patrones visuales dominantes, detectar lo que funciona y lo que no, y definir una dirección de diseño que me diferencie de forma significativa.

tarea 1 — ANÁLISIS DE IDENTIDAD VISUAL
Evalúa el diseño de marca de cada competidor:
- Logotipo: estilo (wordmark, lettermark, symbol, combination), tipografía, formas
- Paleta de colores: colores primarios, secundarios y de acento; sensaciones que transmiten
- Tipografía: fuentes utilizadas en web y comunicaciones (Google Fonts detector, inspección de CSS)
- Fotografía e ilustración: estilo de imágenes, uso de stock vs. fotografía propia, ilustración personalizada
- Tono visual general: minimalista, maximalista, corporativo, amigable, técnico, lúdico
- Consistencia de marca: coherencia entre web, redes sociales, app y materiales de marketing

tarea 2 — ANÁLISIS DE UX Y PATRONES DE DISEÑO
Compara la experiencia de usuario:
- Flujos clave: onboarding, compra, registro, búsqueda de contenido (¿cuántos pasos? ¿cuánta fricción?)
- Patrones de UI predominantes: cards, tabs, sidebars, modals, tooltips
- Navegación: arquitectura de información, menús, breadcrumbs, búsqueda
- Interacciones y microanimaciones: presencia, calidad, coherencia
- Diseño responsive: cómo adaptan la experiencia a móvil (mobile-first o degradación)
- Accesibilidad observable: contraste, tamaño de texto, estados de foco visibles

tarea 3 — AUDIT DE TENDENCIAS DEL SECTOR
Identifica las tendencias visuales dominantes en la industria:
- Tendencias de color del año en el sector (Pantone, tendencias de diseño 2025-2026)
- Estilos gráficos predominantes: glassmorphism, neumorfismo, flat, 3D, bento grid
- Tipografía en tendencia: variable fonts, serifas editoriales, sans-gerométricas
- Tendencias de UX: dark mode, AI-driven UI, personalización visual, diseño generativo
- Qué hacen todos igual (convenciones del sector) y qué nadie se atreve a romper

tarea 4 — MAPA DE DIFERENCIACIÓN VISUAL
Encuentra el espacio visual propio:
- Matriz de posicionamiento visual: dos ejes relevantes del sector (por ejemplo: Tradicional↔Moderno vs. Serio↔Lúdico)
- Dónde está cada competidor en la matriz y qué espacio está libre
- Arquetipos de marca aplicables: héroe, sabio, explorador, creador, cuidador
- 3 direcciones de diseño diferenciadas: con descripción, paleta de colores y referencias visuales para cada una
- Recomendación de dirección basada en el posicionamiento estratégico del negocio

tarea 5 — BRIEF DE DISEÑO DIFERENCIADO
Construye el brief creativo basado en el análisis:
- Esencia visual: 3-5 palabras que definan el estilo buscado
- Paleta de colores propuesta con códigos HEX y justificación competitiva
- Sistema tipográfico: familia principal, secundaria y de apoyo
- Referencias visuales (moodboard textual): 5-7 referencias de diseño externas al sector que inspiren
- Guía de qué evitar: elementos visuales sobreusados por la competencia que debemos diferenciar

instrucción final: adapta el análisis al sector y competidores que te indique. Si no los especifico, trabaja con 3-4 herramientas SaaS de productividad con presencia web y app móvil. Describe todo de forma textual con referencias concretas, ya que no puedo ver imágenes pero sí aplicar las especificaciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Análisis de identidad visual, UX competitiva y tendencias de diseño del sector',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Inteligencia competitiva de ventas con IA: conoce a tu rival en cada deal',
                'description'      => 'Usa IA para investigar a los competidores en cada proceso de venta, construir battlecards efectivas y entrenar a tu equipo para ganar deals frente a la competencia.',
                'prompt_content'   => <<<'EOT'
Eres un director de ventas con experiencia en inteligencia competitiva aplicada al proceso comercial. Sabes cómo investigar a los competidores rápidamente en medio de un proceso de venta, construir argumentos diferenciadores y entrenar a equipos para que ganen deals incluso cuando no son los líderes del mercado.

objetivo: desarrollar un sistema de inteligencia competitiva de ventas que permita a mi equipo identificar y responder a las objeciones relacionadas con la competencia, presentar nuestra propuesta de valor de forma ganadora y cerrar más oportunidades en entornos competitivos.

tarea 1 — PERFIL COMPETITIVO RÁPIDO PARA VENTAS
Construye un perfil de cada competidor relevante para el equipo comercial:
- Nombre, web, propuesta de valor y posicionamiento de precio
- Fortalezas reales: en qué son genuinamente buenos (ser honesto es clave para credibilidad)
- Debilidades reales: dónde flaquean (soporte, integración, precio, escalabilidad, UX)
- Clientes objetivo: qué tipo de empresa o perfil compra a este competidor
- Cómo venden: ciclo de venta, descuentos frecuentes, proceso de evaluación
- Señales de que el cliente está evaluando a este competidor: preguntas que hacen, demos que piden

tarea 2 — BATTLECARDS DE VENTAS
Crea las fichas de combate por competidor:
- Formato compacto (1 página): para uso rápido durante negociaciones
- Cuándo ganar vs. cuándo perder: contextos donde somos claramente superiores o inferiores
- Los 3 argumentos de venta ganadores frente a este competidor
- Las 3 objeciones más comunes que genera este competidor y cómo responderlas
- Preguntas trampa: preguntas que hacerle al cliente para exponer las debilidades del competidor sin nombrarlo
- Citas y referencias de clientes que migraron desde ese competidor

tarea 3 — GESTIÓN DE OBJECIONES COMPETITIVAS
Prepara respuestas para los escenarios más frecuentes:
- "El competidor X es más barato" → cómo justificar el precio con valor total de propiedad
- "El competidor X tiene más funcionalidades" → cómo reencuadrar hacia las funcionalidades que importan
- "Ya usamos al competidor X y estamos contentos" → cómo abrir la puerta sin atacar su elección
- "El competidor X nos da un 30% de descuento" → cómo responder sin entrar en guerra de precios
- "El competidor X tiene más referencias en nuestro sector" → cómo compensar con profundidad vs. amplitud

tarea 4 — ENTRENAMIENTO DE VENTAS COMPETITIVO
Diseña el programa de formación del equipo:
- Role-plays competitivos: escenarios de práctica con cada competidor principal
- Quiz de conocimiento competitivo: test de 10 preguntas por competidor para certificar al equipo
- Win/loss analysis: cómo analizar deals ganados y perdidos para actualizar la inteligencia
- Proceso de actualización: quién actualiza las battlecards y con qué frecuencia
- Canales de inteligencia: dónde el equipo reporta información competitiva recogida en campo

tarea 5 — SISTEMA DE MONITORIZACIÓN COMPETITIVA CONTINUA
Mantén la inteligencia actualizada:
- Fuentes de seguimiento: Gong/Chorus para menciones en llamadas, alertas de LinkedIn, reseñas de G2
- Señales de cambio en competidores: nuevas funcionalidades, cambios de precio, despidos masivos, financiación nueva
- Proceso de actualización de battlecards: trimestral o ante eventos significativos
- Repositorio central: dónde guardar y compartir la inteligencia (Notion, Confluence, Highspot)
- Métricas de efectividad: tasa de win rate por competidor antes y después de implementar el sistema

instrucción final: crea las battlecards y el sistema de inteligencia para los competidores que especifique. Si no los indico, trabaja con el escenario de un CRM B2B que compite con Salesforce y HubSpot. Dame materiales listos para usar por el equipo de ventas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Inteligencia competitiva de ventas, battlecards y entrenamiento para ganar deals frente a la competencia',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Benchmarking de funcionalidades de producto con IA: feature gap analysis',
                'description'      => 'Realiza un análisis sistemático de las funcionalidades de tus competidores para identificar gaps, priorizar tu roadmap y posicionar tu producto con ventajas defensibles.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager senior con experiencia en análisis competitivo de producto, feature gap analysis y estrategia de diferenciación. Tu tarea es ayudarme a realizar un benchmarking exhaustivo de funcionalidades de producto frente a mis competidores para informar el roadmap y la estrategia de producto.

objetivo: construir una visión clara y sistemática de las capacidades de mis competidores, identificar los gaps de funcionalidad críticos y estratégicos, y derivar decisiones de roadmap que maximicen la diferenciación y el value delivery.

tarea 1 — FRAMEWORK DE COMPARACIÓN DE FUNCIONALIDADES
Diseña la estructura del análisis:
- Taxonomía de funcionalidades: agrupa las capacidades por área (núcleo del producto, integraciones, administración, analytics, mobile, API/developer)
- Escala de evaluación: no tiene / básico / avanzado / líder del mercado
- Criterios de peso: qué funcionalidades son más importantes para el cliente objetivo
- Fuentes de información: prueba de producto, documentación pública, demos, reseñas de usuarios, changelog
- Frecuencia de actualización: cuándo repetir el análisis (lanzamientos de competidores, trimestral)

tarea 2 — MATRIZ DE FUNCIONALIDADES
Construye la tabla comparativa completa:
- Filas: funcionalidades clave organizadas por categoría
- Columnas: mi producto + competidores principales + estado ideal del mercado
- Puntuación por celda: 0 (no existe), 1 (básico), 2 (avanzado), 3 (best-in-class)
- Notas de calidad: no solo si existe la funcionalidad, sino qué tan bien implementada está
- Destacar: donde soy líder (ventaja defensible), donde estoy en paridad, donde tengo gaps

tarea 3 — ANÁLISIS ESTRATÉGICO DE GAPS
Clasifica los gaps por impacto estratégico:
- Gaps de tabla stakes: funcionalidades sin las cuales perdemos deals (hay que cerrarlos urgente)
- Gaps de paridad: funcionalidades que todos tienen y donde debemos alcanzar un nivel razonable
- Gaps de diferenciación: áreas donde podría superar a la competencia de forma significativa
- Áreas de liderazgo: funcionalidades donde ya somos mejores y debemos proteger la ventaja
- Áreas de abandono estratégico: funcionalidades que deliberadamente no construiremos

tarea 4 — IMPACTO EN EL ROADMAP
Conecta el análisis con decisiones de producto:
- Priorización de gaps: matriz impacto en ventas × esfuerzo de desarrollo
- Quick wins: qué gaps pequeños cierro en el próximo sprint con máximo impacto
- Iniciativas estratégicas: qué áreas requieren un esfuerzo de 1-2 trimestres
- Posicionamiento: qué funcionalidades destacar en marketing y ventas basadas en el análisis
- Comunicación al equipo: cómo presentar el competitive landscape al equipo de engineering

tarea 5 — MONITORIZACIÓN DE MOVIMIENTOS COMPETITIVOS
Sistema de seguimiento continuo de la competencia:
- Changelog y release notes: seguimiento de actualizaciones de competidores
- Alertas de lanzamiento: nuevas funcionalidades que cambian la paridad o crean nuevos gaps
- Feedback de ventas: qué funcionalidades mencionan los prospectos de la competencia
- Proceso de respuesta: cuándo reaccionar a un movimiento del competidor y cuándo no
- Repositorio vivo: cómo mantener la matriz actualizada de forma eficiente

instrucción final: construye el feature gap analysis para el tipo de producto que especifique y sus competidores principales. Si no lo indico, trabaja con una herramienta de automatización de marketing (email + workflows) frente a Mailchimp, ActiveCampaign y Klaviyo. Presenta la matriz completa y las recomendaciones de roadmap.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Feature gap analysis y benchmarking de funcionalidades de producto para informar el roadmap',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Benchmarking de compensaciones y employer branding con IA',
                'description'      => 'Usa IA para analizar las políticas de compensación, beneficios y employer branding de tus competidores, y diseñar una propuesta de valor al empleado competitiva.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en Recursos Humanos con experiencia en compensación total, employer branding y análisis competitivo del mercado laboral. Tu tarea es ayudarme a realizar un benchmarking de la propuesta de valor al empleado de mis competidores para atraer y retener mejor el talento.

objetivo: comprender cómo se posicionan mis competidores como empleadores, analizar sus políticas de compensación y beneficios, y diseñar una Employee Value Proposition (EVP) que me permita ganar la batalla por el talento.

tarea 1 — BENCHMARKING SALARIAL
Analiza las compensaciones del mercado:
- Fuentes de datos: Glassdoor, LinkedIn Salary, Levels.fyi (para tech), InfoJobs Salarios, Indeed Salary
- Rangos salariales por rol y nivel de experiencia en el sector y zona geográfica
- Estructura de compensación de competidores: fijo + variable, opciones sobre acciones, comisiones
- Beneficios monetarios: bonus de firma, bonus de retención, participación en beneficios
- Tendencias de mercado: roles con mayor inflación salarial, escasez de talento por especialidad
- Posicionamiento propio: percentil 25, 50 o 75 del mercado objetivo

tarea 2 — ANÁLISIS DE BENEFICIOS NO MONETARIOS
Compara el paquete de beneficios completo:
- Flexibilidad: teletrabajo (días/semana), horario flexible, jornada intensiva de verano
- Salud y bienestar: seguro médico privado, psicólogo, bienestar físico (gimnasio, Wellhub)
- Desarrollo profesional: formación continua, budget anual de aprendizaje, tiempo para formarse
- Conciliación: días extra de vacaciones, días por nacimiento de hijos, reducción de jornada
- Extras: ticket restaurant, transporte, guardería, plan de pensiones
- Cultura y ambiente: oficinas, eventos de equipo, trabajo en proyectos de impacto

tarea 3 — ANÁLISIS DE EMPLOYER BRANDING
Evalúa cómo se presentan como empleadores:
- Página de careers: diseño, testimonios, descripción de cultura, vídeos del equipo
- Puntuación en Glassdoor y Indeed: nota media, opiniones más frecuentes (positivas y negativas)
- LinkedIn como empleador: contenido de employer branding, engagement de empleados, tasa de respuesta
- Proceso de selección descrito: rapidez, comunicación, experiencia del candidato
- Presencia en rankings y certificaciones: Great Place to Work, Best Workplaces, Top Employers

tarea 4 — EMPLOYEE VALUE PROPOSITION (EVP) COMPETITIVA
Diseña la propuesta de valor al empleado diferenciada:
- Los 5 pilares de la EVP: compensación, desarrollo, cultura, propósito y entorno de trabajo
- Diferenciadores reales frente a la competencia: qué ofreces que ellos no pueden o no ofrecen
- Segmentación del talento: qué EVP atrae a recién graduados, seniors, directivos, perfiles técnicos
- Mensajes clave por canal: qué decir en LinkedIn, en la página de careers, en entrevistas
- Autenticidad: qué prometes que realmente cumples, evitar overpromising

tarea 5 — PLAN DE ACCIÓN DE ATRACCIÓN DE TALENTO
Implementa la estrategia competitiva de talento:
- Mejoras de compensación: ajustes salariales para roles críticos con más escasez
- Quick wins de beneficios: qué beneficios de bajo coste tienen alto impacto en atracción
- Campaña de employer branding: calendario de contenidos, testimonios, casos de éxito del equipo
- Mejora del proceso de selección: tiempos, comunicación, experiencia del candidato
- Métricas de éxito: offer acceptance rate, time-to-hire, calidad de candidatos, retención a 1 año

instrucción final: adapta el benchmarking al sector y perfil de empresa que especifique. Si no lo indico, trabaja con una startup tecnológica de 50-200 empleados en España que compite por talento de desarrollo de software y producto con grandes tech companies. Dame tablas comparativas y recomendaciones accionables.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Benchmarking salarial, análisis de beneficios y diseño de EVP competitiva para atraer talento',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Benchmarking financiero sectorial con IA: ratios y métricas clave',
                'description'      => 'Usa IA para comparar el desempeño financiero de tu empresa con los referentes del sector, identificar áreas de mejora y establecer objetivos basados en benchmarks reales.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero con experiencia en benchmarking sectorial, análisis de estados financieros comparativos y métricas de rendimiento empresarial. Tu tarea es ayudarme a comparar el desempeño financiero de mi empresa con el de los principales referentes del sector.

objetivo: realizar un benchmarking financiero riguroso que permita evaluar objetivamente mi posición competitiva en términos económicos, identificar las brechas de rendimiento más significativas y derivar objetivos financieros ambiciosos pero alcanzables.

tarea 1 — SELECCIÓN DE MÉTRICAS Y BENCHMARKS
Define el marco de comparación:
- Métricas de rentabilidad: margen bruto, EBITDA, margen neto, ROE, ROA, ROCE
- Métricas de eficiencia: rotación de activos, días de cobro/pago/inventario, revenue por empleado
- Métricas de crecimiento: CAGR de ingresos, crecimiento de EBITDA, expansión de márgenes
- Métricas específicas del sector: MRR/ARR y churn para SaaS; LTV/CAC para e-commerce; RevPAR para hostelería; etc.
- Fuentes de benchmarks: informes anuales de cotizadas, informes sectoriales (PwC, Deloitte, McKinsey), bases de datos (Orbis, Compustat)

tarea 2 — ANÁLISIS COMPARATIVO DE RENTABILIDAD
Compara los márgenes y la generación de valor:
- Comparativa de margen bruto: ¿qué parte del ingreso queda tras los costes directos?
- EBITDA margin: comparativa con empresas del sector de tamaño similar
- Conversión de EBITDA a caja (cash conversion): ¿qué tan eficiente es el negocio en generar caja?
- Análisis del ciclo de caja: days sales outstanding (DSO), days payable outstanding (DPO), inventario
- Análisis de los líderes del sector: por qué tienen mejores márgenes (escala, mix de producto, eficiencia operativa)

tarea 3 — ESTRUCTURA DE CAPITAL Y SOLIDEZ FINANCIERA
Evalúa la posición financiera relativa:
- Apalancamiento: ratio deuda/EBITDA, deuda neta vs. peers del sector
- Liquidez: current ratio, quick ratio frente a la mediana del sector
- Cobertura de intereses: EBIT/intereses vs. referentes
- Estructura de financiación: equity vs. deuda, coste medio de capital (WACC)
- Rating crediticio implícito: basado en ratios, cómo me percibe el mercado de crédito

tarea 4 — EFICIENCIA OPERATIVA Y PRODUCTIVIDAD
Benchmarking de métricas operativas:
- Revenue per employee: ingresos por empleado vs. sector y líderes
- OPEX como porcentaje de ingresos: gastos generales, ventas y marketing, I+D
- Eficiencia en ventas y marketing: ratio LTV:CAC, payback period
- Productividad de activos: rotación del activo total y por categoría
- Benchmarking de costes unitarios: coste de producción/servicio vs. competidores

tarea 5 — OBJETIVOS Y PLAN DE MEJORA FINANCIERA
Establece metas basadas en benchmarks:
- Objetivos SMART por métrica: dónde quiero estar en 12 y 36 meses
- Quick wins financieros: mejoras de margen con impacto rápido (renegociación de contratos, eficiencia en cobros)
- Iniciativas estratégicas: cambios que requieren inversión pero mejoran materialmente los ratios
- Priorización: qué métricas tienen más impacto en la valoración y el acceso a capital
- Modelo financiero de escenarios: base, optimista y pesimista con las métricas objetivo

instrucción final: realiza el benchmarking para el sector y empresa que especifique. Si no lo indico, trabaja con una empresa de servicios tecnológicos B2B de tamaño mediano con ingresos de 10-50M€, comparando con el sector de IT Services europeo. Presenta tablas comparativas claras y recomendaciones priorizadas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Benchmarking financiero sectorial: comparativa de ratios, márgenes y métricas de rendimiento empresarial',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Análisis competitivo legal con IA: monitoriza regulaciones y movimientos del sector',
                'description'      => 'Usa IA para rastrear cambios regulatorios, analizar estrategias legales de competidores y anticipar riesgos normativos que puedan afectar a tu negocio.',
                'prompt_content'   => <<<'EOT'
Eres un abogado in-house con experiencia en inteligencia legal competitiva, vigilancia regulatoria y análisis de estrategias legales corporativas. Tu tarea es ayudarme a desarrollar un sistema de análisis competitivo legal para anticipar riesgos normativos y mantener ventajas estratégicas.

objetivo: construir un sistema de inteligencia legal que monitorice los cambios regulatorios relevantes, analice las estrategias legales de los competidores y permita a mi organización anticiparse a los riesgos normativos y aprovechar las ventajas que ofrecen los cambios en el entorno legal.

tarea 1 — MAPA REGULATORIO DEL SECTOR
Identifica el marco normativo que afecta al negocio:
- Regulaciones aplicables por área: competencia, propiedad intelectual, protección de datos, consumidores, laboral, financiera, medioambiental
- Autoridades reguladoras relevantes: nacionales (CNMC, AEPD, BdE), europeas (CE, BEREC, EBA), internacionales
- Calendario regulatorio: normativas en tramitación, consultas públicas abiertas, plazos de transposición
- Riesgo regulatorio por área: probabilidad de cambio × impacto en el negocio
- Jurisdicciones clave: países donde opera la empresa y sus distintos marcos normativos

tarea 2 — ANÁLISIS DE ESTRATEGIA LEGAL DE COMPETIDORES
Investiga cómo gestionan el riesgo legal los competidores:
- Litigios públicos: demandas, procedimientos sancionadores, arbitrajes publicados
- Estrategia de propiedad intelectual: patentes registradas, marcas, derechos de autor, secrets
- Política regulatoria: participación en consultas, lobbying declarado, asociaciones sectoriales
- Cumplimiento público: sanciones recibidas, acuerdos con reguladores, compromisos voluntarios
- Estructura societaria: filiales, jurisdicciones de registro, optimización fiscal
Fuentes: registros mercantiles, bases de datos de patentes (USPTO, EUIPO, EPO), buscadores de jurisprudencia

tarea 3 — VIGILANCIA NORMATIVA CONTINUA
Diseña el sistema de seguimiento:
- Fuentes de alerta: EUR-Lex, BOE, DOCE, sitios web de autoridades reguladoras, Thomson Reuters, LexisNexis
- Alertas automáticas: términos clave relacionados con el sector y la empresa
- Proceso de análisis: quién recibe la alerta, cómo la evalúa, a quién escala
- Informe regulatorio mensual: resumen de novedades para la dirección y el negocio
- Participación proactiva: cuándo y cómo participar en consultas públicas para influir en la regulación

tarea 4 — GESTIÓN DE RIESGOS LEGALES COMPETITIVOS
Anticipa los riesgos de mayor impacto:
- Riesgo de infracción de propiedad intelectual: análisis de libertad para operar (FTO)
- Riesgo regulatorio disruptivo: nuevas normativas que cambien el modelo de negocio
- Riesgo de acción de la competencia: demandas de patentes, denuncias ante la CNMC, disparagement
- Riesgo de cambio de política pública: licitaciones, subsidios, restricciones de mercado
- Plan de contingencia: respuesta preparada para cada escenario de riesgo identificado

tarea 5 — VENTAJA COMPETITIVA LEGAL
Convierte el análisis legal en ventaja estratégica:
- Estrategia de propiedad intelectual ofensiva: qué proteger, qué licenciar, qué publicar como prior art
- Compliance como diferenciador: cómo usar el cumplimiento como argumento de ventas (especialmente en B2B y sector público)
- Anticipación regulatoria: posicionarse para cumplir antes que los competidores cuando una norma aún es optativa
- Arbitraje regulatorio: aprovechar diferencias entre jurisdicciones de forma legal y ética
- Alianzas para influir en la regulación: asociaciones sectoriales, coaliciones de empresas, think tanks

instrucción final: aplica el sistema de inteligencia legal al sector y jurisdicción que especifique. Si no lo indico, trabaja con una empresa de tecnología financiera (fintech) que opera en España y quiere monitorizar la regulación europea de pagos y IA. Dame un informe de situación actual y un plan de vigilancia continua.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Inteligencia legal competitiva: vigilancia regulatoria y análisis de estrategias legales del sector',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Benchmarking de experiencia del cliente con IA: NPS y mejores prácticas del sector',
                'description'      => 'Compara la experiencia del cliente de tu empresa con los referentes del sector, identifica gaps en CX y diseña mejoras basadas en las mejores prácticas de la industria.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en Customer Experience (CX) con experiencia en benchmarking de la experiencia del cliente, análisis de NPS sectorial y diseño de programas de mejora de la satisfacción. Tu tarea es ayudarme a comparar la experiencia que ofrezco a mis clientes con la de mis competidores y los líderes del sector.

objetivo: realizar un benchmarking exhaustivo de la experiencia del cliente que me permita entender mi posición competitiva en CX, identificar los gaps más críticos y desarrollar un plan de mejora basado en las mejores prácticas de mi industria.

tarea 1 — FRAMEWORK DE BENCHMARKING DE CX
Define las dimensiones de comparación:
- Canales de atención: cuáles ofrecen y cuáles no (teléfono, email, chat en vivo, self-service, WhatsApp, redes sociales)
- Tiempos de respuesta: first response time, resolution time, availability (horario de atención)
- Calidad de la interacción: personalización, empatía, resolución en el primer contacto (FCR)
- Autoservicio y self-service: base de conocimiento, chatbot, FAQs, comunidad de usuarios
- Proactividad: notificaciones de estado, actualizaciones automáticas, anticipación de problemas
- Post-venta y fidelización: onboarding, seguimiento, programas de lealtad, renovación

tarea 2 — ANÁLISIS DE MÉTRICAS PÚBLICAS DE SATISFACCIÓN
Recopila datos comparativos disponibles:
- NPS sectorial: benchmarks de NPS por industria (Bain & Company publica referencias anuales)
- Puntuaciones en reseñas: G2, Capterra, Trustpilot, Google Reviews, App Store rating
- Análisis cualitativo de reseñas: temas positivos y negativos más frecuentes por competidor
- Premios y reconocimientos: J.D. Power, Forrester CX Index, Gartner Peer Insights
- Customer Effort Score (CES) implícito: ¿qué tan fácil es resolver un problema con ellos?
- Quejas públicas: redes sociales, foros de consumidores, organismos de reclamación

tarea 3 — AUDIT DEL CUSTOMER JOURNEY COMPARATIVO
Mapea la experiencia completa por etapa:
- Pre-compra: facilidad de información, demos, pruebas gratuitas, proceso de evaluación
- Compra y onboarding: fluidez del proceso, tiempo hasta el primer valor, materiales de bienvenida
- Uso cotidiano: facilidad de uso, documentación, actualización de funcionalidades
- Momento de problema: canal de contacto, tiempo de respuesta, calidad de la solución
- Renovación o cancelación: proceso de retención, facilidad de portabilidad, offboarding
Para cada etapa: evalúa a cada competidor en escala 1-5 con evidencias concretas

tarea 4 — MEJORES PRÁCTICAS DEL SECTOR
Identifica las referencias de excelencia en CX:
- Las 3 empresas con mejor CX en el sector: qué hacen concretamente
- Prácticas de CX de otros sectores aplicables: qué aprendo de Amazon, Zappos, Apple en atención
- Innovaciones en CX: IA conversacional, servicio proactivo, hiper-personalización, comunidades
- El efecto de las expectativas cruzadas: cómo Amazon Prime ha elevado las expectativas de todos
- Quick wins de alto impacto: mejoras sencillas de implementar con gran mejora en satisfacción

tarea 5 — PLAN DE MEJORA DE CX COMPETITIVA
Diseña la hoja de ruta de mejora:
- Gaps críticos: brechas que me hacen perder clientes o deals hoy mismo (hay que cerrarlas primero)
- Gaps de paridad: donde debo alcanzar el estándar del sector en los próximos 6 meses
- Diferenciadores de CX: áreas donde puedo superar al sector de forma sostenible
- Métricas objetivo: NPS objetivo, CSAT, FCR, tiempo de respuesta por canal
- Roadmap de implementación: iniciativas por trimestre con propietario, inversión requerida y KPI

instrucción final: adapta el benchmarking de CX al sector y tipo de empresa que especifique. Si no lo indico, trabaja con una empresa de software B2B con 500-2000 clientes empresariales que compite con 3-4 players establecidos. Dame un informe completo y un plan de acción priorizado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Benchmarking de CX, análisis comparativo de NPS y plan de mejora de la experiencia del cliente',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Análisis de mercado y posicionamiento freelance con IA: encuentra tu nicho rentable',
                'description'      => 'Usa IA para analizar tu mercado freelance, estudiar a otros profesionales independientes de tu sector y posicionarte de forma diferenciada para atraer mejores clientes y tarifas.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de negocio con experiencia en el mercado freelance y la economía independiente. Conoces cómo funciona la dinámica competitiva entre profesionales independientes y cómo diferenciarse en mercados saturados para atraer mejores clientes y cobrar tarifas premium.

objetivo: realizar un análisis de mercado y competencia para mi actividad freelance que me permita identificar el nicho más rentable, entender cómo se posicionan mis competidores y definir una estrategia de diferenciación que me permita cobrar más y trabajar con mejores clientes.

tarea 1 — ANÁLISIS DEL MERCADO FREELANCE EN MI ESPECIALIDAD
Entiende la dinámica del mercado:
- Tamaño y crecimiento: demanda de mi especialidad en plataformas (Upwork, Fiverr, Malt, Toptal, LinkedIn)
- Perfiles de demanda: qué tipo de clientes contratan freelancers de mi especialidad (startups, pymes, grandes empresas, agencias)
- Patrones de contratación: proyectos puntuales, retainers, cargos de interim, consultoría estratégica
- Estacionalidad: épocas de mayor y menor demanda
- Tendencias: qué skills emergentes aumentan la demanda y cuáles están en declive
- Geografía: diferencias de tarifa y demanda entre mercados locales e internacionales

tarea 2 — ANÁLISIS DE COMPETIDORES FREELANCE
Investiga a los profesionales independientes mejor posicionados:
- Perfil de los top freelancers en mi especialidad: experiencia, especialización, presencia online
- Análisis de posicionamiento: cómo se presentan, qué prometen, a qué tipo de cliente se dirigen
- Tarifas: rangos por hora, por proyecto y retainers mensuales (visibles en perfiles y testimonios)
- Propuestas de valor: qué diferenciadores usan los más exitosos
- Portfolio y casos de éxito: qué tipos de proyectos muestran y cómo los presentan
- Presencia de contenido: blog, LinkedIn, YouTube, newsletter (cuántos producen contenido y de qué tipo)

tarea 3 — IDENTIFICACIÓN DE NICHOS RENTABLES
Encuentra tu espacio de mayor valor:
- Matriz de atractivo: nichos con alta demanda + poca oferta cualificada + buena disposición a pagar
- Nichos verticales: industrias donde mi especialidad tiene escasez (salud, finanzas, legal, industrial)
- Nichos horizontales: problemas específicos que resuelvo mejor que nadie transversalmente
- Combinación de skills: cómo la intersección de dos especialidades crea un nicho premium
- Validación del nicho: señales de que el nicho es rentable (job posts bien pagados, poca competencia, clientes que pagan retainers)

tarea 4 — POSICIONAMIENTO Y PROPUESTA DE VALOR FREELANCE
Define tu diferenciación:
- Declaración de posicionamiento: a quién sirves, qué problema resuelves y cómo eres único
- Especialización vs. generalismo: argumentos para cada enfoque según tu situación
- Promesa de resultado: qué outcome concreto ofreces (no actividades, sino resultados medibles)
- Proof of concept: cómo demuestras tu propuesta sin proyectos existentes si estás empezando
- Precio como posicionamiento: cómo y por qué cobrar más puede atraer mejores clientes

tarea 5 — ESTRATEGIA DE CAPTACIÓN DE CLIENTES DIFERENCIADA
Atrae los clientes correctos:
- Perfil del cliente ideal (ICP): empresa, rol del decisor, situación que les lleva a contratar
- Canal de adquisición principal: LinkedIn, referencias, contenido, plataformas, eventos
- Estrategia de contenidos para posicionamiento: qué publicar y con qué frecuencia para ser referente
- Proceso de propuesta: cómo estructurar una propuesta ganadora frente a otros freelancers
- Sistema de referencias: cómo generar referencias de forma sistemática desde clientes satisfechos

instrucción final: realiza el análisis de mercado y competencia para la especialidad freelance que especifique. Si no la indico, trabaja con un consultor de marketing digital especializado en SaaS B2B que quiere subir sus tarifas y atraer clientes más grandes. Dame un plan de posicionamiento concreto con los pasos para los próximos 90 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Análisis de mercado freelance, benchmarking de competidores independientes y estrategia de posicionamiento diferenciada',
                'vote_score'       => 36,
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
