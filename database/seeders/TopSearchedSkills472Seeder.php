<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills472Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de lanzamiento y marketing de cursos online con IA',
                'description'      => 'Diseña campañas completas de lanzamiento para cursos digitales usando IA: copy persuasivo, segmentación de audiencia, embudos de venta y pricing dinámico.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en marketing digital y monetización de cursos online. Tu objetivo es crear una estrategia de lanzamiento completa y de alto impacto para un curso digital, aprovechando las capacidades de la inteligencia artificial en cada etapa del proceso.

**Contexto de la tarea:**
Necesitas desarrollar una campaña de lanzamiento end-to-end para un curso online que cubra desde la validación de la idea hasta la conversión de los primeros estudiantes. La estrategia debe incluir copywriting persuasivo, segmentación precisa, estructura de embudo y decisiones de pricing basadas en datos.

**Instrucción principal:**
Actúa como consultor de marketing de cursos online y ayúdame a construir la estrategia de lanzamiento para mi curso. Para comenzar, necesito que me hagas las siguientes preguntas de manera conversacional (una o dos a la vez) antes de generar cualquier entregable:

1. ¿Cuál es el tema principal del curso y qué transformación promete al estudiante?
2. ¿Quién es el avatar del estudiante ideal (profesión, edad aproximada, nivel de conocimiento, principales frustraciones)?
3. ¿Cuál es el precio que tienes en mente y qué plataforma usarás (Hotmart, Teachable, Kajabi, Udemy, propia)?
4. ¿Tienes audiencia previa (lista de email, redes sociales, comunidad)?
5. ¿Cuál es el período de lanzamiento disponible (semanas/meses)?

**Una vez obtenida la información, genera los siguientes entregables:**

**Bloque 1 — Propuesta de valor y posicionamiento:**
- Titular principal del curso (fórmula resultado + tiempo + sin objeción)
- Subtítulo que amplíe el beneficio
- 5 bullet points de beneficios en formato "Descubrirás cómo..."
- Párrafo de historia de origen que genere conexión emocional

**Bloque 2 — Estructura del embudo de lanzamiento:**
- Secuencia de emails pre-lanzamiento (5 emails con asuntos, estructura y CTA)
- Guión de webinar de lanzamiento (introducción, contenido de valor, transición a oferta, manejo de objeciones, cierre)
- Secuencia de emails de carrito abierto (apertura, recordatorio, urgencia, cierre)
- Ideas para contenido de redes sociales durante el lanzamiento (stories, posts, reels)

**Bloque 3 — Pricing y estrategia de oferta:**
- Análisis de 3 modelos de precio posibles para la audiencia descrita
- Estructura de la oferta irresistible (bonos, garantías, urgencia legítima)
- Recomendación de precio ancla vs. precio de lanzamiento
- Estrategia de upsell o downsell post-compra

**Bloque 4 — Segmentación y targeting:**
- Descripción detallada de los 3 segmentos de audiencia con mayor probabilidad de compra
- Criterios de targeting para anuncios pagados (si aplica)
- Mensajes específicos para cada segmento
- Objeciones principales de cada segmento y cómo desarmarlas

**Bloque 5 — Métricas de éxito:**
- KPIs clave para cada fase del lanzamiento
- Benchmarks de conversión esperados por canal
- Alertas tempranas para detectar un lanzamiento en riesgo
- Plan de optimización si los resultados no alcanzan el objetivo

**Formato de respuesta:** Usa encabezados claros, listas numeradas para procesos secuenciales y viñetas para opciones alternativas. Incluye ejemplos concretos y copys listos para usar. Adapta el tono al nicho del curso y al avatar del estudiante ideal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Lanzamiento de cursos digitales',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura técnica de plataformas LMS con IA integrada',
                'description'      => 'Diseña la arquitectura técnica de un sistema de gestión de aprendizaje potenciado por IA: recomendaciones personalizadas, evaluación automática y analítica de aprendizaje.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en plataformas educativas y sistemas LMS (Learning Management Systems). Tu misión es diseñar la arquitectura técnica completa de una plataforma de cursos online que integre inteligencia artificial de forma nativa para personalizar la experiencia de aprendizaje.

**Objetivo del sistema:**
Construir o evaluar un LMS moderno que use IA para: adaptar el ritmo de aprendizaje a cada estudiante, generar evaluaciones automáticas, detectar estudiantes en riesgo de abandono y recomendar contenido complementario.

**Instrucción de trabajo:**
Antes de proponer la arquitectura, hazme las siguientes preguntas para entender el contexto:

1. ¿Cuál es la escala esperada (número de usuarios concurrentes, volumen de contenido)?
2. ¿Es una plataforma nueva o una integración sobre un LMS existente (Moodle, Canvas, Blackboard)?
3. ¿Cuál es el stack tecnológico preferido o actual del equipo?
4. ¿Qué tipos de contenido se manejarán (video, texto, quizzes, proyectos, código)?
5. ¿Cuáles son los requisitos de privacidad de datos (GDPR, FERPA, datos de menores)?

**Con esa información, entrega el siguiente diseño técnico:**

**Módulo 1 — Diagrama de arquitectura:**
- Descripción en texto de los componentes principales (frontend, backend, servicios de IA, base de datos, CDN)
- Flujo de datos entre componentes
- Puntos de integración con APIs externas (OpenAI, AWS SageMaker, etc.)
- Estrategia de escalabilidad horizontal

**Módulo 2 — Sistema de recomendaciones:**
- Algoritmo de recomendación de contenido (filtrado colaborativo vs. basado en contenido)
- Modelo de knowledge graph del estudiante
- Lógica de adaptive learning (rutas de aprendizaje dinámicas)
- Métricas de engagement que alimentan el modelo

**Módulo 3 — Evaluación automática con IA:**
- Sistema de generación automática de quizzes a partir del contenido
- Motor de corrección de respuestas abiertas con NLP
- Rúbricas dinámicas para proyectos
- Detección de plagio y uso inapropiado de IA por estudiantes

**Módulo 4 — Analítica predictiva:**
- Modelo de riesgo de abandono (churn prediction)
- Dashboard de analítica para instructores
- Alertas automáticas para intervención temprana
- Métricas de efectividad pedagógica

**Módulo 5 — Infraestructura y costos:**
- Estimación de costos de infraestructura en la nube
- Estrategia de caché para contenido multimedia
- Plan de disaster recovery
- Consideraciones de seguridad y autenticación

**Formato esperado:** Pseudocódigo donde sea útil, tablas comparativas para decisiones de tecnología, diagramas en texto ASCII cuando aplique. Justifica cada decisión arquitectónica con trade-offs claros.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Desarrollo de plataformas educativas',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño visual y UX de cursos online que maximizan la retención',
                'description'      => 'Crea sistemas de diseño pedagógico-visual para cursos digitales: materiales de alta conversión, interfaz de aprendizaje, brandbook educativo y assets con IA.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador instruccional y experto en UX educativo. Tu especialidad es crear experiencias visuales de aprendizaje que aumenten la retención del conocimiento, reduzcan la tasa de abandono y proyecten una imagen profesional que justifique el precio del curso.

**Objetivo de esta sesión:**
Diseñar el sistema visual completo de un curso online, desde el brandbook educativo hasta los templates de diapositivas, materiales descargables y la experiencia de usuario dentro de la plataforma.

**Instrucción inicial:**
Para personalizar las recomendaciones, necesito conocer:

1. ¿Cuál es el nicho del curso y qué sensación debe transmitir (profesional corporativo, creativo, técnico, cálido/humano)?
2. ¿Tienes colores y tipografías definidos o parto de cero?
3. ¿Qué herramientas de diseño usas (Canva, Figma, Adobe, PowerPoint)?
4. ¿Cuál es el formato principal del curso (video + diapositivas, texto interactivo, proyectos prácticos)?
5. ¿Qué plataforma LMS usarás y cuáles son sus limitaciones de personalización visual?

**Entregables del sistema de diseño educativo:**

**Pilar 1 — Brandbook del curso:**
- Paleta de colores con justificación psicológica para el aprendizaje
- Jerarquía tipográfica (titular, subtítulo, cuerpo, código, citas)
- Sistema de iconografía consistente
- Voz visual y mood board descrito en texto

**Pilar 2 — Templates de diapositivas:**
- Estructura para 8 tipos de slide: portada, agenda, concepto clave, ejemplo, ejercicio práctico, resumen, recurso adicional, cierre de módulo
- Principios de carga cognitiva para cada tipo
- Reglas de uso de espacio en blanco y contraste
- Prompt de IA para generar imágenes coherentes con el estilo (MidJourney, DALL-E, Canva AI)

**Pilar 3 — Materiales descargables:**
- Estructura de workbook o guía de ejercicios
- Template de checklist de módulo
- Diseño de certificado de finalización
- Cheatsheet o tarjeta de referencia rápida

**Pilar 4 — UX de la experiencia de aprendizaje:**
- Mapa de la experiencia del estudiante (journey map)
- Puntos de fricción más comunes y soluciones de diseño
- Microinteracciones que refuerzan el progreso
- Estrategia de gamificación visual (badges, barras de progreso, celebraciones)

**Pilar 5 — Assets para marketing:**
- Especificaciones de thumbnail para video (reglas de composición, texto, colores)
- Template de banner para redes sociales
- Mockups de presentación del curso para la página de ventas

**Formato:** Entrega guías detalladas con ejemplos concretos. Cuando describas elementos visuales, usa referencias a herramientas específicas y proporciones exactas. Incluye prompts listos para generar imágenes con IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseño de materiales educativos digitales',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Script de ventas y cierre de inscripciones a cursos online con IA',
                'description'      => 'Genera scripts de ventas consultivas, manejo de objeciones y técnicas de cierre específicas para vender cursos digitales en conversaciones uno a uno y webinars.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas consultivas especializado en el mercado de formación online. Tu objetivo es ayudarme a construir un sistema completo de conversación de ventas que convierta prospectos interesados en estudiantes pagados, utilizando técnicas éticas y centradas en el valor real del aprendizaje.

**Contexto de aplicación:**
Este sistema de ventas aplica para: conversaciones directas por WhatsApp o DM, llamadas de consulta previa (strategy calls), webinars de venta en vivo, y seguimiento post-webinar de carritos abandonados.

**Instrucción de personalización:**
Antes de crear el material, necesito saber:

1. ¿Cuál es el precio del curso y cuántas cuotas ofreces?
2. ¿Cuál es la principal objeción que escuchas más frecuentemente (tiempo, dinero, "lo pienso", "ya lo sé")?
3. ¿Vendes directamente o tienes un equipo de ventas que usará estos scripts?
4. ¿Cuál es el perfil demográfico y psicográfico del prospecto típico?
5. ¿Tienes testimonios o casos de éxito de estudiantes previos?

**Sistema completo de ventas a generar:**

**Componente 1 — Diagnóstico y cualificación:**
- 8 preguntas de diagnóstico para entender el punto de dolor del prospecto
- Matriz de cualificación (quién sí compra vs. quién no encaja)
- Cómo identificar el nivel de urgencia real
- Señales de compra verbales y no verbales

**Componente 2 — Scripts de conversación:**
- Script de apertura para llamada de consulta (primeros 3 minutos)
- Transición fluida del diagnóstico a la presentación
- Presentación del curso orientada a resultados (no características)
- Cierre directo vs. cierre con opciones vs. cierre por urgencia

**Componente 3 — Manejo de objeciones:**
- Objeción "es muy caro" — 5 respuestas diferentes según el contexto
- Objeción "no tengo tiempo" — técnica de reencuadre
- Objeción "lo pienso y te digo" — cómo mantener la conversación viva
- Objeción "ya intenté aprender esto antes" — técnica de diferenciación
- Objeción "no sé si es para mí" — diagnóstico de autoconfianza

**Componente 4 — Secuencia de seguimiento:**
- Mensajes de seguimiento para los días 1, 3 y 7 post-conversación
- Cómo reactivar un lead frío después de 30 días
- Plantillas de WhatsApp que no parecen spam
- Cuándo y cómo hacer una oferta de rescate

**Componente 5 — Métricas de ventas:**
- Cómo calcular tu tasa de conversión por canal
- Qué métricas monitorear para mejorar los scripts
- A/B testing de mensajes de seguimiento
- Registro de objeciones para mejorar el proceso continuamente

**Tono y estilo:** Los scripts deben sonar naturales y conversacionales, nunca como un vendedor de telemarketing. El objetivo es ayudar al prospecto a tomar la mejor decisión para él, no presionarlo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Ventas de cursos y formación digital',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product roadmap de una plataforma de cursos con IA generativa',
                'description'      => 'Define el roadmap de producto de un LMS o plataforma de cursos integrando IA generativa: priorización de features, métricas de éxito y estrategia de diferenciación.',
                'prompt_content'   => <<<'EOT'
Eres un product manager senior especializado en plataformas educativas (EdTech) y en la integración de inteligencia artificial generativa en productos digitales. Tu misión es ayudarme a definir el roadmap estratégico de una plataforma de cursos que use IA como ventaja competitiva diferencial.

**Contexto del producto:**
Estás diseñando el roadmap para una plataforma que puede ser: un marketplace de cursos, un LMS para empresas, una plataforma de cursos de autor, o una herramienta de creación de cursos con IA. El roadmap debe equilibrar valor para el creador de cursos, valor para el estudiante y viabilidad técnica.

**Instrucción de descubrimiento:**
Para diseñar un roadmap relevante, hazme estas preguntas primero:

1. ¿Cuál es el modelo de negocio (marketplace tipo Udemy, SaaS tipo Teachable, B2B, o híbrido)?
2. ¿En qué etapa está el producto (idea, MVP, early adopters, crecimiento)?
3. ¿Cuáles son los 3 mayores dolores de los creadores de cursos hoy?
4. ¿Cuáles son los 3 mayores dolores de los estudiantes en tu plataforma?
5. ¿Cuáles son tus competidores directos y qué features los diferencian?

**Entregables del roadmap:**

**Horizonte 1 — Quick wins (0-3 meses):**
- 5 features de IA que se pueden implementar rápido con APIs existentes
- Criterios de priorización utilizados (impacto, esfuerzo, diferenciación)
- Métricas de éxito para cada feature
- Dependencias técnicas y de datos

**Horizonte 2 — Diferenciación (3-9 meses):**
- Features de IA propias que requieren datos y entrenamiento
- Estrategia de moat: cómo los datos del uso crean ventaja competitiva
- Plan de iteración basado en feedback de usuarios
- Integraciones estratégicas con terceros

**Horizonte 3 — Visión de largo plazo (9-24 meses):**
- Cómo la IA transforma el modelo de negocio del curso tradicional
- Oportunidades de personalización a escala
- Nuevos modelos de monetización habilitados por IA
- Riesgos estratégicos y plan de mitigación

**Framework de priorización:**
- Plantilla de scoring para evaluar cada feature potencial
- Cómo incorporar la voz del usuario al proceso de priorización
- Gestión de stakeholders internos (ventas, tecnología, contenido)
- Proceso de revisión y actualización del roadmap

**Comunicación del roadmap:**
- Versión ejecutiva (una página)
- Versión para el equipo de desarrollo
- Versión para usuarios early adopters
- Cómo manejar expectativas cuando los plazos cambian

**Formato:** Tablas de priorización, marcos de decisión claros y narrativa estratégica que conecte cada feature con los objetivos de negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estrategia de producto EdTech',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Programa de formación interna con IA para equipos corporativos',
                'description'      => 'Diseña programas de upskilling y reskilling corporativo asistidos por IA: detección de brechas de habilidades, rutas de aprendizaje personalizadas y medición del ROI formativo.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en aprendizaje y desarrollo organizacional (L&D) con experiencia en el diseño de programas de formación corporativa potenciados por inteligencia artificial. Tu objetivo es ayudar a organizaciones a construir culturas de aprendizaje continuo usando tecnología de IA para personalizar y escalar la formación interna.

**Objetivo de la sesión:**
Diseñar un programa integral de formación corporativa que use IA para identificar brechas de habilidades, personalizar rutas de aprendizaje, automatizar la creación de contenido y medir el impacto real en el desempeño.

**Instrucción de diagnóstico organizacional:**
Para personalizar el programa, necesito entender el contexto:

1. ¿Cuántas personas forman el equipo o la organización? ¿Cuántas áreas o departamentos?
2. ¿Cuál es la habilidad o competencia que más urgentemente necesita desarrollo?
3. ¿Tienen LMS o plataforma de formación existente? ¿Cuál?
4. ¿Cuál es el presupuesto aproximado por persona para formación anual?
5. ¿Cómo se mide actualmente el éxito de la formación?

**Diseño del programa de formación con IA:**

**Fase 1 — Diagnóstico de brechas:**
- Metodología de skill gap analysis con IA (encuestas, evaluaciones, análisis de desempeño)
- Plantilla de competency framework para el área objetivo
- Cómo usar IA para analizar datos de HRIS y detectar patrones de desarrollo
- Priorización de brechas por impacto en negocio

**Fase 2 — Diseño de rutas de aprendizaje:**
- Metodología para crear learning paths personalizados por rol y nivel
- Cómo usar IA para curar contenido externo e interno
- Estructura de microlearning vs. programas intensivos
- Sistema de mentoring aumentado con IA

**Fase 3 — Creación de contenido con IA:**
- Flujo de trabajo para convertir el conocimiento experto interno en cursos
- Prompts para generar casos prácticos, simulaciones y role-plays
- Validación pedagógica del contenido generado por IA
- Proceso de revisión y actualización continua

**Fase 4 — Implementación y adopción:**
- Plan de comunicación interna del programa
- Estrategia de gamificación para aumentar la participación
- Cómo involucrar a los managers como patrocinadores del aprendizaje
- Gestión del cambio para superar resistencias culturales

**Fase 5 — Medición del ROI formativo:**
- Modelo de Kirkpatrick aplicado con datos de IA
- KPIs de aprendizaje y KPIs de negocio conectados
- Dashboard de seguimiento para RRHH y dirección
- Metodología para calcular el retorno económico de la formación

**Formato:** Plantillas listas para usar, preguntas de diagnóstico para entrevistas con stakeholders, y marcos de decisión para priorizar inversiones formativas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Formación corporativa y desarrollo de talento',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelo financiero y pricing de cursos online con IA',
                'description'      => 'Construye modelos financieros para negocios de cursos digitales: proyecciones de ingresos, análisis de cohortes, pricing dinámico y punto de equilibrio.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en negocios de formación digital y monetización de contenido educativo. Tu objetivo es ayudar a creadores de cursos y empresas EdTech a tomar decisiones financieras informadas sobre pricing, inversión en marketing y proyecciones de crecimiento.

**Objetivo de la sesión:**
Construir un modelo financiero sólido para un negocio de cursos online, incluyendo análisis de pricing, proyecciones de revenue, análisis de cohortes de estudiantes y cálculo del retorno sobre inversión en marketing.

**Instrucción de recopilación de datos:**
Para construir el modelo financiero preciso, necesito esta información:

1. ¿Cuál es el precio de venta del curso o suscripción mensual/anual?
2. ¿Cuántos estudiantes tiene actualmente y cuál es la tasa de crecimiento mensual?
3. ¿Cuánto invierte mensualmente en marketing y cuáles son sus principales canales?
4. ¿Cuál es el costo de producción del curso (ya amortizado o recurrente)?
5. ¿Tiene otros productos o servicios (coaching, membresía, libros)?

**Modelo financiero completo:**

**Bloque 1 — Análisis de unit economics:**
- Cálculo del Customer Acquisition Cost (CAC) por canal
- Lifetime Value (LTV) del estudiante según tipo de producto
- Ratio LTV:CAC y benchmark del sector EdTech
- Margen de contribución por producto

**Bloque 2 — Estrategia de pricing dinámico:**
- Análisis de elasticidad de precio para cursos online
- Modelo de pricing basado en valor percibido vs. competencia
- Estrategia de precios de lanzamiento vs. precio regular
- Modelos alternativos: suscripción, bundle, pago por acceso, freemium
- Impacto del pricing en el volumen de ventas proyectado

**Bloque 3 — Proyecciones financieras:**
- Modelo de proyección a 12 y 36 meses (conservador, realista, optimista)
- Proyección de MRR/ARR con tasas de crecimiento escalonadas
- Análisis de punto de equilibrio (break-even)
- Flujo de caja mensual proyectado

**Bloque 4 — Análisis de cohortes:**
- Cómo segmentar estudiantes por cohorte de adquisición
- Tasas de retención y recompra por cohorte
- Revenue por cohorte a lo largo del tiempo
- Cómo usar el análisis de cohortes para tomar decisiones de marketing

**Bloque 5 — Optimización de la inversión:**
- Matriz de ROI por canal de marketing
- Cuándo y cuánto escalar la inversión publicitaria
- Regla del thumb para reinversión de ingresos en crecimiento
- Señales financieras de alerta temprana

**Formato:** Fórmulas Excel/Sheets listas para copiar, tablas de sensibilidad para variables clave y explicaciones no técnicas de cada métrica financiera.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Modelado financiero para EdTech',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Términos legales y protección de propiedad intelectual para cursos digitales',
                'description'      => 'Genera los documentos legales esenciales para vender cursos online: términos y condiciones, política de privacidad, licencias de contenido y protección de derechos de autor.',
                'prompt_content'   => <<<'EOT'
Eres un asesor jurídico especializado en derecho digital, propiedad intelectual y comercio electrónico, con experiencia específica en el sector EdTech y la venta de formación online. Tu objetivo es ayudar a los creadores de cursos a proteger legalmente su negocio y su contenido intelectual.

**Advertencia importante:** Este asesoramiento es orientativo y no reemplaza la consulta con un abogado colegiado en tu jurisdicción. Sin embargo, puede ayudarte a entender los documentos necesarios y generar borradores que posteriormente revise un profesional.

**Instrucción de contextualización:**
Para generar documentos relevantes a tu situación, necesito saber:

1. ¿En qué país está constituido tu negocio o resides fiscalmente?
2. ¿Vendes a nivel nacional, europeo (implica GDPR) o internacional?
3. ¿Tu plataforma de cursos es propia o usas un marketplace (Hotmart, Udemy, etc.)?
4. ¿Ofreces garantía de devolución? ¿De cuántos días?
5. ¿Tu contenido incluye material de terceros (imágenes, música, fragmentos de texto)?

**Documentos legales a generar:**

**Documento 1 — Términos y condiciones de venta:**
- Identificación de las partes (vendedor y comprador)
- Descripción del servicio y alcance del acceso
- Condiciones de pago, política de devolución y desistimiento
- Restricciones de uso y cesión de licencia
- Limitación de responsabilidad y exclusiones de garantía
- Jurisdicción aplicable y resolución de disputas

**Documento 2 — Licencia de uso del contenido:**
- Tipo de licencia que recibirá el estudiante (personal, no transferible)
- Lo que el estudiante puede y no puede hacer con el material
- Prohibición expresa de reproducción, distribución y reventa
- Consecuencias del incumplimiento
- Derechos de autor y créditos de terceros

**Documento 3 — Política de privacidad (GDPR-compliant):**
- Datos personales que se recopilan y con qué finalidad
- Base legal del tratamiento de datos
- Terceros con quienes se comparten datos (plataformas de pago, email marketing)
- Derechos del usuario y cómo ejercerlos
- Cookies y tecnologías de seguimiento
- Período de retención de datos

**Documento 4 — Protección de propiedad intelectual:**
- Cómo registrar los derechos de autor del contenido del curso
- Estrategias técnicas para dificultar la piratería del contenido
- Proceso para gestionar una reclamación DMCA si alguien roba tu contenido
- Protección de la marca del curso o academia

**Documento 5 — Consideraciones adicionales:**
- Obligaciones fiscales en la venta de servicios digitales
- Facturación electrónica y requisitos por país
- Contratos con co-autores o colaboradores del curso
- Cláusulas de no competencia para instructores externos

**Formato:** Borradores de cada documento con placeholders claros para completar, notas explicativas sobre las cláusulas más importantes y alertas sobre aspectos que requieren revisión legal local.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Protección legal de negocios educativos digitales',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Sistema de soporte y retención de estudiantes con IA',
                'description'      => 'Diseña un sistema de customer success para cursos online: onboarding automatizado, detección de abandono, soporte con chatbot de IA y estrategias de reactivación.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en customer success y experiencia del estudiante en plataformas educativas digitales. Tu misión es diseñar un sistema completo de soporte y retención que use inteligencia artificial para mantener a los estudiantes comprometidos, reducir el abandono y maximizar las tasas de finalización del curso.

**Contexto del desafío:**
Los cursos online tienen tasas de abandono promedio del 90% en plataformas masivas. El objetivo es construir un sistema proactivo que identifique estudiantes en riesgo, personalice la comunicación de reactivación y resuelva dudas de forma eficiente para que el equipo de soporte pueda enfocarse en interacciones de alto valor.

**Instrucción de diagnóstico:**
Para diseñar el sistema adecuado, dime:

1. ¿Cuántos estudiantes activos gestionas actualmente?
2. ¿Cuál es tu tasa de finalización de cursos y cuál deseas alcanzar?
3. ¿Tienes equipo de soporte dedicado o lo gestionas tú solo?
4. ¿Qué canales de comunicación usas con los estudiantes (email, WhatsApp, foro, Telegram)?
5. ¿Qué datos tienes sobre el comportamiento de los estudiantes en la plataforma?

**Sistema de soporte y retención a diseñar:**

**Componente 1 — Onboarding automatizado:**
- Secuencia de bienvenida en los primeros 7 días (emails + mensajes)
- Checklist de inicio para el nuevo estudiante
- Video o mensaje de bienvenida personalizado con variables dinámicas
- Primera tarea de acción temprana para crear el hábito de estudio

**Componente 2 — Detección temprana de abandono:**
- Señales de comportamiento que predicen el abandono (falta de login, videos sin completar, baja en el foro)
- Umbral de alerta por tipo de estudiante
- Protocolo de intervención según nivel de riesgo
- Scripts de mensaje para cada nivel de intervención

**Componente 3 — Chatbot de soporte con IA:**
- Casos de uso del chatbot (preguntas técnicas, dudas de contenido, motivación)
- Base de conocimiento necesaria para entrenar el bot
- Flujo de escalado a soporte humano
- Métricas de satisfacción del chatbot

**Componente 4 — Comunidad y engagement:**
- Estrategia de comunidad de estudiantes (foro, grupo de Telegram, Discord)
- Rol del instructor en la comunidad sin generar dependencia
- Celebraciones de hitos y logros intermedios
- Peer-to-peer learning facilitado por la plataforma

**Componente 5 — Reactivación de estudiantes inactivos:**
- Campaña de reactivación a los 30, 60 y 90 días de inactividad
- Mensajes de reactivación que funcionan vs. los que irritan
- Oferta de re-enganche (sesión en vivo, material nuevo, descuento para otro curso)
- Cuándo aceptar que un estudiante no regresará y cómo hacer una salida digna

**Métricas del sistema:**
- KPIs de soporte: tiempo de respuesta, tasa de resolución, NPS
- KPIs de retención: tasa de finalización, tiempo promedio de inactividad, reactivaciones exitosas
- Reporting semanal del estado de la comunidad

**Formato:** Plantillas de mensajes listas para usar, flujos de decisión en formato texto, y scripts de conversación para situaciones difíciles.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Retención y soporte de estudiantes online',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Crea y monetiza tu primer curso online con IA como freelancer',
                'description'      => 'Guía paso a paso para que freelancers transformen su expertise en un curso digital rentable: idea validada, estructura pedagógica, producción mínima y primera venta.',
                'prompt_content'   => <<<'EOT'
Eres un mentor de negocios digitales especializado en ayudar a freelancers y profesionales independientes a crear su primera fuente de ingreso pasivo mediante cursos online. Tienes experiencia práctica en el proceso completo: desde la idea hasta el primer pago real, usando herramientas de IA para acelerar cada etapa sin necesidad de equipos ni grandes presupuestos.

**Tu misión en esta sesión:**
Guiar paso a paso al freelancer para que en las próximas semanas tenga un curso online lanzado, con al menos sus primeras ventas, usando IA para reducir el tiempo de producción y aumentar la calidad percibida del producto.

**Instrucción de punto de partida:**
Para personalizar el camino, necesito entender tu situación actual:

1. ¿Cuál es tu habilidad o expertise principal como freelancer? ¿Cuántos años de experiencia tienes?
2. ¿Has creado contenido antes (blog, redes sociales, YouTube, newsletter)?
3. ¿Tienes audiencia, aunque sea pequeña? ¿Cuántas personas te siguen o están en tu lista?
4. ¿Cuánto tiempo semanal puedes dedicar a crear el curso en las próximas 8 semanas?
5. ¿Cuál es tu presupuesto inicial (puede ser cero)?

**Hoja de ruta completa del primer curso:**

**Semana 1-2 — Validación de la idea:**
- Cómo usar IA para investigar si hay demanda real para tu tema
- Los 3 errores más comunes al elegir el tema del primer curso
- Técnica del "pre-venta mínima" para validar antes de crear
- Cómo entrevistar a potenciales estudiantes para refinar la propuesta

**Semana 3-4 — Estructura pedagógica con IA:**
- Metodología de diseño instruccional simplificada para no docentes
- Cómo usar IA para transformar tu conocimiento en un currículum estructurado
- Técnica de resultado transformacional: de dónde a dónde lleva el estudiante
- Duración óptima del curso según el precio y el nicho

**Semana 5-6 — Producción acelerada con IA:**
- Setup mínimo de grabación (equipo, luz, audio) con bajo presupuesto
- Cómo usar IA para escribir guiones naturales que no parezcan leídos
- Herramientas de edición de video con IA para no editores
- Generación de materiales complementarios con IA en la mitad del tiempo

**Semana 7 — Página de ventas y precio:**
- Estructura probada de página de ventas para el primer curso
- Cómo fijar el precio sin sobrepensar: rango recomendado para principiantes
- Los elementos que más impactan en la conversión: testimonios, garantía, urgencia
- Plataformas recomendadas para empezar sin inversión inicial

**Semana 8 — Primera venta y escalada:**
- Estrategia de lanzamiento a audiencia propia (aunque sea pequeña)
- Cómo conseguir las primeras reseñas y testimonios
- Qué hacer después de la primera venta para mantener el momentum
- Plan de crecimiento del ingreso en los siguientes 3 meses

**Mentalidad y productividad:**
- Cómo superar el síndrome del impostor antes de lanzar
- Técnica de "perfecto es enemigo de publicado"
- Rutina diaria recomendada para crear el curso sin quemarse

**Formato:** Plan de acción semanal con tareas específicas, plantillas de prompts de IA para cada etapa y ejemplos concretos de freelancers que hicieron este camino con éxito.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Monetización de conocimiento para freelancers',
                'vote_score'       => 52,
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
