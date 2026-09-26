<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills633Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing de cursos online y e-learning con IA',
                'description'       => 'Diseña estrategias de marketing para lanzar y escalar cursos online, plataformas LMS y programas de formación digital dirigidos a distintas audiencias profesionales.',
                'prompt_content'    => <<<'EOT'
Actúa como un estratega de marketing digital especializado en el sector del e-learning y la formación online, con experiencia en el lanzamiento y escalado de cursos digitales, plataformas LMS y programas de formación corporativa.

Objetivo principal: Necesito diseñar una estrategia de marketing completa para el lanzamiento de un nuevo curso online o programa de e-learning, desde la validación del mercado hasta la captación de los primeros alumnos y la escalabilidad posterior.

Contexto del curso o programa:
- Nombre del curso: [NOMBRE]
- Temática y contenidos principales: [DESCRIPCIÓN]
- Audiencia objetivo: [PERFIL DEL ALUMNO IDEAL]
- Formato: [Videocurso / Bootcamp / Programa mixto / Suscripción]
- Precio del curso: [PRECIO O RANGO]
- Plataforma de venta: [Udemy / Teachable / Propia / LMS corporativo]
- Presupuesto de marketing para el lanzamiento: [PRESUPUESTO]

Tareas que necesito que desarrolles:

1. Validación del mercado antes del lanzamiento
Define cómo validar la demanda real del curso antes de invertir en su producción completa. Incluye: cómo construir una lista de espera con una página de preventa, cómo realizar encuestas de validación a la audiencia potencial (proporciona 10 preguntas clave), cómo interpretar los resultados para decidir si continuar con el proyecto y cómo usar comunidades online (grupos de Facebook, foros, LinkedIn) para medir el interés sin pagar publicidad.

2. Posicionamiento y propuesta de valor del curso
Ayúdame a posicionar el curso frente a la competencia. Realiza un análisis del mercado de cursos similares: qué ofrecen los tres competidores principales, cuáles son sus fortalezas y debilidades, y qué hueco de mercado puede ocupar mi curso. Basándote en este análisis, redacta la propuesta de valor del curso en tres formatos: una frase de posicionamiento (tagline), un párrafo de descripción para la página de ventas y tres puntos diferenciadores para usar en publicidad.

3. Estrategia de contenidos y construcción de audiencia
Diseña un plan de contenidos de 8 semanas previas al lanzamiento para construir audiencia y generar expectativa. Incluye: tipos de contenido para cada canal (blog, YouTube, podcast, newsletter, Instagram, LinkedIn, TikTok), frecuencia de publicación recomendada, temas de contenido gratuito que demuestren la expertise del instructor sin revelar todo el curso, y cómo usar una clase o módulo gratuito como imán de captación de leads.

4. Secuencia de emails de lanzamiento
Redacta una secuencia de 7 emails para el lanzamiento del curso, distribuida en 10 días: email de apertura del carrito (día 1), email de valor con la historia del instructor (día 2), email de testimonios y casos de éxito (día 4), email de objeciones y preguntas frecuentes (día 6), email de urgencia (día 8, 48 horas antes del cierre), email de último día con oferta final (día 9) y email de cierre del carrito (día 10). Cada email debe tener asunto, preencabezado, cuerpo y llamada a la acción clara.

5. Estrategia de publicidad de pago para escalar
Define la estrategia de publicidad en Meta Ads (Facebook e Instagram) y Google Ads para escalar las ventas del curso después del lanzamiento orgánico. Incluye: estructura de campañas recomendada, tipos de audiencias objetivo (intereses, similares, remarketing), tipos de creatividades que mejor funcionan para cursos online, presupuesto inicial recomendado y métricas de control (CPL, CPA, ROAS objetivo).

6. Métricas de éxito del lanzamiento
Define los KPI del lanzamiento: número de leads captados, tasa de conversión de lead a venta, coste por lead y coste por venta (con valores de referencia por sector), ingresos del lanzamiento, NPS de los primeros alumnos y tasa de completación del curso (indicador clave de calidad y satisfacción).

Formato de respuesta: Usa encabezados claros, tablas para el calendario de contenidos y la estructura de emails, y listas para los puntos de diferenciación y los KPI. Incluye ejemplos concretos de copies, asuntos de email y textos de anuncios listos para adaptar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Lanzar y escalar cursos online con estrategias de marketing digital para e-learning',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Arquitectura de plataforma LMS escalable con IA',
                'description'       => 'Diseña la arquitectura técnica de un sistema de gestión del aprendizaje (LMS) moderno, escalable y con integración de IA para personalización del itinerario formativo.',
                'prompt_content'    => <<<'EOT'
Actúa como un arquitecto de software senior especializado en plataformas de gestión del aprendizaje (LMS), sistemas de e-learning y tecnología educativa, con experiencia en arquitecturas escalables, integración de IA para la personalización del aprendizaje y estándares del sector como SCORM, xAPI y LTI.

Objetivo principal: Necesito diseñar la arquitectura técnica completa de una plataforma LMS moderna que soporte desde cientos hasta decenas de miles de usuarios activos concurrentes, con capacidades de personalización del itinerario formativo basadas en IA y compatibilidad con los principales estándares del sector.

Contexto del proyecto:
- Tipo de LMS: [Corporativo / Educativo / Marketplace de cursos / SaaS multitenant]
- Usuarios esperados al inicio: [NÚMERO]
- Pico de usuarios concurrentes estimado: [NÚMERO]
- Tipos de contenido a soportar: [Vídeo, SCORM, xAPI, documentos, evaluaciones, webinars]
- Necesidades de personalización con IA: [RECOMENDACIÓN DE CURSOS / RUTAS ADAPTATIVAS / ANÁLISIS DE PROGRESO]
- Infraestructura preferida: [AWS / Azure / GCP / On-premise]
- Stack tecnológico preferido: [LENGUAJES Y FRAMEWORKS]

Tareas que necesito que desarrolles:

1. Definición de la arquitectura general
Propón la arquitectura de alto nivel para el LMS: justifica la elección entre monolito modular, microservicios o arquitectura de servicios (SOA). Describe los módulos principales del sistema: gestión de usuarios y roles, catálogo de cursos y contenidos, motor de reproducción de contenidos (player), seguimiento del progreso (tracking), motor de evaluaciones, sistema de notificaciones, analítica y reporting, y módulo de pagos y suscripciones. Para cada módulo, indica su responsabilidad, sus interfaces con otros módulos y las tecnologías recomendadas.

2. Integración de estándares e-learning
Describe cómo implementar la compatibilidad con los principales estándares: SCORM 1.2 y 2004 (cómo funciona el runtime API, gestión del estado del alumno, comunicación con el LRS), xAPI o Tin Can (ventajas sobre SCORM, estructura de los statements, integración con un Learning Record Store externo o propio) y LTI 1.3 (cómo usarlo para integrar herramientas de terceros como plataformas de evaluación, simuladores o laboratorios virtuales). Incluye las implicaciones técnicas de soportar cada estándar simultáneamente.

3. Motor de personalización con IA
Diseña el módulo de recomendación y personalización del itinerario formativo basado en IA. Incluye: fuentes de datos a recopilar (progreso, tiempos de visualización, resultados de evaluaciones, preferencias declaradas), algoritmos de recomendación recomendados (filtrado colaborativo, basado en contenido, híbrido), cómo implementar rutas de aprendizaje adaptativas que ajusten el siguiente contenido en función del rendimiento del alumno, y consideraciones éticas sobre el uso de datos de aprendizaje (transparencia, explicabilidad de las recomendaciones, sesgo algorítmico).

4. Estrategia de escalabilidad y rendimiento
Define la estrategia técnica para garantizar el rendimiento bajo carga: arquitectura de caché multicapa (Redis para sesiones y datos de usuario frecuentes, CDN para contenidos estáticos y vídeos), estrategia de bases de datos (base de datos relacional para datos transaccionales, base de datos de grafos o documental para recomendaciones, almacenamiento de objetos para vídeos y documentos), estrategia de escalado horizontal de los servicios críticos y plan de pruebas de carga (herramientas recomendadas, escenarios de prueba y métricas de rendimiento objetivo).

5. Seguridad y protección de contenidos
Describe las medidas de seguridad específicas para un LMS: autenticación y autorización (OAuth 2.0, SSO con SAML, gestión de sesiones), protección de los contenidos educativos contra descarga no autorizada (DRM para vídeos, marcas de agua digitales para documentos), cifrado de datos en tránsito y en reposo, auditoría de accesos y cumplimiento del RGPD para plataformas con usuarios europeos.

6. Plan de implementación por fases
Propón un plan de desarrollo de 12 meses dividido en cuatro fases: MVP con las funcionalidades esenciales (meses 1-3), versión beta con usuarios piloto y primeras integraciones de IA (meses 4-6), lanzamiento oficial con escalabilidad probada (meses 7-9) y optimización y nuevas funcionalidades basadas en feedback (meses 10-12). Para cada fase, indica las funcionalidades entregadas, el equipo necesario, los hitos técnicos clave y los criterios de paso a la siguiente fase.

Formato de respuesta: Usa diagramas en texto (ASCII o Mermaid) para ilustrar la arquitectura, tablas para comparar tecnologías y opciones, y listas numeradas para los pasos de implementación. Justifica cada decisión técnica con criterios objetivos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Diseñar la arquitectura técnica de un LMS escalable con personalización basada en IA',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño instruccional visual para cursos e-learning con IA',
                'description'       => 'Crea el diseño visual y la experiencia de usuario de cursos online, módulos de microlearning y materiales formativos digitales que maximicen el engagement y la retención.',
                'prompt_content'    => <<<'EOT'
Actúa como un diseñador instruccional y UX especializado en la creación de experiencias de aprendizaje digital (e-learning), con experiencia en el diseño de cursos online, módulos de microlearning y materiales formativos interactivos que maximizan el engagement del alumno y la retención del conocimiento.

Objetivo principal: Necesito diseñar la experiencia visual y la arquitectura de contenido de un curso e-learning completo, aplicando principios de diseño instruccional basados en la evidencia (carga cognitiva, multimedia learning, gamificación) y criterios de diseño gráfico modernos.

Contexto del curso:
- Temática del curso: [TEMA]
- Audiencia objetivo: [PERFIL DEL ALUMNO]
- Duración total estimada: [HORAS]
- Número de módulos previstos: [NÚMERO]
- Plataforma de publicación: [Articulate Storyline / Rise / Adobe Captivate / iSpring / H5P / Propia]
- Nivel de interactividad deseado: [Básico / Medio / Alto]
- Presupuesto de producción: [PRESUPUESTO]

Tareas que necesito que desarrolles:

1. Arquitectura pedagógica del curso
Diseña la estructura del curso aplicando el modelo ADDIE o el modelo SAM (elige el más adecuado y justifícalo). Define: el mapa de contenidos con la secuencia de módulos y lecciones, los objetivos de aprendizaje de cada módulo usando taxonomía de Bloom (redacta tres objetivos por módulo en formato "Al finalizar esta lección, el alumno será capaz de..."), la distribución del tiempo por actividad (vídeo, lectura, ejercicios, evaluación) y los momentos de práctica y aplicación del conocimiento.

2. Guía de estilo visual del curso
Diseña el sistema visual del curso e-learning: paleta de colores principal y secundaria con sus códigos hexadecimales y las reglas de uso, tipografía (fuentes recomendadas para pantalla, jerarquía H1/H2/body/caption con tamaños mínimos para legibilidad en móvil), sistema de iconos y pictogramas coherente, estilo de ilustraciones o fotografías (realistas, flat design, isométricas) y plantilla de diapositiva o pantalla con sus zonas definidas (área de título, área de contenido, área de navegación, área de progreso).

3. Diseño de interactividades para e-learning
Propón un catálogo de 8 tipos de actividades interactivas adaptadas a la temática del curso, con especificación detallada de cada una: tipo de interactividad (arrastrar y soltar, escenario de decisión, simulación de proceso, cuestionario adaptativo, etc.), objetivo pedagógico que cumple, instrucciones para el alumno, descripción del feedback correcto e incorrecto y estimación del tiempo de producción en horas. Prioriza las actividades que activen niveles altos de la taxonomía de Bloom (aplicar, analizar, crear).

4. Principios de diseño para reducir la carga cognitiva
Explica cómo aplicar la Teoría de la Carga Cognitiva de Sweller al diseño visual del curso: cómo evitar el efecto de redundancia (no poner en texto lo mismo que se dice en audio), cómo aplicar el efecto de contigüidad (colocar gráficos y explicaciones juntos), cómo segmentar el contenido complejo en microlearning de máximo 5 minutos, cómo usar el señalamiento visual (flechas, resaltados, encuadre) para guiar la atención del alumno, y cómo diseñar las evaluaciones para que refuercen el aprendizaje (testing effect).

5. Diseño adaptado a móvil (mobile-first)
Define las consideraciones específicas de diseño para garantizar que el curso funcione perfectamente en smartphones: tamaño mínimo de elementos interactivos (áreas táctiles), longitud máxima de textos en pantalla, tipos de interactividad que funcionan bien en móvil y cuáles evitar, cómo adaptar los vídeos (subtítulos obligatorios, formato vertical opcional) y cómo estructurar el curso para consumo fragmentado (sesiones de 5-10 minutos).

6. Checklist de calidad antes de publicar el curso
Proporciona una lista de verificación de 30 puntos para revisar un módulo e-learning antes de publicarlo, organizada por categorías: diseño visual y coherencia de marca, legibilidad y accesibilidad (WCAG 2.1 AA), corrección del contenido pedagógico, funcionamiento técnico de las interactividades, rendimiento en distintos dispositivos y navegadores, y calidad del audio y el vídeo.

Formato de respuesta: Usa tablas para el catálogo de interactividades y el checklist, listas para los principios de diseño y formato narrativo con ejemplos concretos para la guía de estilo. Incluye recomendaciones de herramientas gratuitas o de bajo coste para cada fase de producción.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar la experiencia visual e instruccional de cursos e-learning con principios pedagógicos',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Venta de programas de formación corporativa e-learning con IA',
                'description'       => 'Domina la venta B2B de soluciones de formación online y e-learning a empresas: identificación de necesidades formativas, propuesta de valor y negociación con responsables de RRHH y L&D.',
                'prompt_content'    => <<<'EOT'
Actúa como un consultor de ventas B2B especializado en la comercialización de soluciones de formación corporativa, e-learning, plataformas LMS y programas de desarrollo del talento a empresas de todos los tamaños y sectores.

Objetivo principal: Necesito preparar una estrategia completa de ventas B2B para ofrecer soluciones de formación online y e-learning a empresas, desde la identificación de oportunidades hasta el cierre del contrato y la renovación.

Contexto de la solución de formación:
- Solución a vender: [PLATAFORMA LMS / CURSOS A MEDIDA / CATÁLOGO DE CONTENIDOS / FORMACIÓN MIXTA]
- Precio: [PRECIO POR USUARIO / LICENCIA ANUAL / PROYECTO A MEDIDA]
- Sectores objetivo: [SECTORES PRIORITARIOS]
- Tamaño de empresa objetivo: [PYMES / MEDIANA EMPRESA / CORPORATIVO]
- Interlocutor principal: [DIRECTOR DE RRHH / RESPONSABLE L&D / DIRECTOR DE FORMACIÓN / CEO]
- Diferenciación frente a competidores: [VENTAJAS CLAVE]

Tareas que necesito que desarrolles:

1. Identificación y cualificación de oportunidades de e-learning corporativo
Define los criterios de cualificación de una empresa como cliente potencial de formación online: señales de que una empresa necesita actualizar su formación (crecimiento rápido, alta rotación, expansión geográfica, transformación digital, cambio regulatorio en su sector), cómo identificar el momento de compra ideal en el ciclo anual de las empresas (vinculado al presupuesto de formación, enero-marzo y septiembre-octubre), y qué información recopilar antes de la primera llamada para personalizar la conversación.

2. Análisis de necesidades formativas (diagnóstico con el cliente)
Proporciona un guion de reunión de diagnóstico de 60 minutos con el responsable de RRHH o L&D de una empresa. El guion debe explorar: situación formativa actual (plataformas usadas, presupuesto anual de formación, número de empleados formados), principales gaps de competencias identificados, retos específicos de la empresa (onboarding, cumplimiento normativo, desarrollo del liderazgo, upskilling técnico), experiencia previa con e-learning (positiva y negativa) y criterios de éxito para el responsable de la decisión de compra.

3. Propuesta de valor adaptada al contexto corporativo
Basándote en el diagnóstico, redacta una propuesta de valor en dos formatos: un resumen ejecutivo de media página para el CEO o director general (enfocado en ROI, ahorro de costes vs. formación presencial y retención del talento) y una propuesta técnica de dos páginas para el responsable de RRHH o L&D (enfocada en la metodología, la experiencia del alumno, la analítica de aprendizaje y la facilidad de implementación). Incluye cómo calcular el ROI de la formación online (fórmula, inputs necesarios y ejemplo con números).

4. Gestión de las objeciones más frecuentes en ventas de e-learning B2B
Para cada objeción, proporciona la respuesta recomendada: "Los empleados no terminan los cursos online" (cómo rebatir con datos y con el diseño de nuestra solución), "Ya tenemos LinkedIn Learning o Coursera para empresas" (cómo diferenciarte de las plataformas de contenido genérico), "Es demasiado caro, la formación presencial nos sale más barata" (cómo presentar el TCO real de la formación presencial), "No tenemos tiempo de implementar otra plataforma" (cómo minimizar el esfuerzo de implementación) y "Necesitamos aprobación del comité de dirección" (cómo ayudar al responsable a vender internamente).

5. Estructura de la propuesta comercial y contrato
Define la estructura de la propuesta comercial para una empresa mediana: resumen ejecutivo, diagnóstico de la situación actual (basado en la reunión de descubrimiento), solución propuesta (con mockups o demos), plan de implementación y onboarding, inversión y condiciones de pago, garantías y compromisos de servicio (SLA) y referencias de clientes del mismo sector. Incluye también las cláusulas contractuales más importantes para la venta de servicios de e-learning (propiedad intelectual de los contenidos a medida, protección de datos de los empleados alumnos, garantías de disponibilidad de la plataforma).

6. Estrategia de renovación y expansión de la cuenta
Define cómo maximizar el valor de cada cliente a lo largo del tiempo: plan de seguimiento mensual durante el primer año (reuniones de revisión, informes de analítica de aprendizaje), cómo identificar oportunidades de upsell (nuevos módulos, más usuarios, funcionalidades premium), cómo conseguir referidos dentro del grupo empresarial o del sector y cómo estructurar la conversación de renovación anual para retener el contrato y aumentar el ticket.

Formato de respuesta: Usa tablas para el plan de cualificación y las objeciones, guion estructurado para la reunión de diagnóstico y formato de carta/propuesta para los documentos comerciales. Incluye ejemplos de cálculo del ROI con datos ficticios pero realistas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Vender soluciones de e-learning y formación corporativa online a empresas B2B',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product discovery para plataformas e-learning con IA',
                'description'       => 'Aplica metodologías de descubrimiento de producto para identificar oportunidades de mejora en plataformas de e-learning y diseño instruccional digital.',
                'prompt_content'    => <<<'EOT'
Actúa como un Product Manager senior especializado en plataformas de e-learning y tecnología educativa, con experiencia en la aplicación de metodologías de product discovery para identificar oportunidades de mejora en sistemas de gestión del aprendizaje (LMS), creadores de cursos y herramientas de diseño instruccional.

Objetivo principal: Necesito ejecutar un proceso completo de product discovery para una plataforma de e-learning existente, con el fin de identificar los mayores puntos de dolor de los usuarios, las oportunidades de diferenciación y las funcionalidades de mayor impacto para priorizar en el siguiente ciclo de desarrollo.

Contexto de la plataforma:
- Nombre y descripción de la plataforma: [NOMBRE Y DESCRIPCIÓN]
- Usuarios principales: [CREADORES DE CONTENIDO / ALUMNOS / ADMINISTRADORES / LOS TRES]
- Métricas actuales de uso: [MAU, TASA DE COMPLETACIÓN, NPS, CHURN]
- Competidores principales: [NOMBRES]
- Retos actuales más visibles: [PROBLEMAS CONOCIDOS]
- Equipo disponible para discovery: [TAMAÑO Y PERFILES DEL EQUIPO]

Tareas que necesito que desarrolles:

1. Plan de investigación de usuarios
Diseña un plan de investigación de usuarios de cuatro semanas para descubrir oportunidades de mejora en la plataforma. El plan debe incluir: métodos de investigación a combinar (entrevistas en profundidad, tests de usabilidad, análisis de datos de comportamiento, encuestas cuantitativas, análisis de reseñas y tickets de soporte), número de participantes recomendado para cada método, perfiles de usuarios a reclutar y criterios de selección, y protocolo para sintetizar los hallazgos de forma que sean accionables para el equipo de producto.

2. Guion de entrevistas de discovery para cada perfil de usuario
Proporciona guiones de entrevista de 45 minutos para los tres perfiles de usuario de una plataforma e-learning: creador de contenido o diseñador instruccional (enfocado en el flujo de creación, las herramientas de autor y la publicación), alumno (enfocado en la experiencia de aprendizaje, la navegación, la motivación y las barreras para completar el curso) y administrador o responsable de RRHH o L&D (enfocado en la gestión de usuarios, la analítica, la integración con otros sistemas y el reporting a dirección).

3. Análisis de la competencia: benchmarking de e-learning
Define el framework de análisis competitivo para evaluar las 5 principales plataformas e-learning del mercado. Las dimensiones de análisis deben cubrir: experiencia del alumno (interfaz, personalización, acceso móvil), herramientas de autor para creadores de contenido, capacidades de IA y personalización del aprendizaje, analítica e informes disponibles, integraciones con sistemas externos (HRIS, videoconferencia, pago), modelo de precios y propuesta de valor declarada. Propón cómo convertir este análisis en una matriz de posicionamiento competitivo.

4. Síntesis de hallazgos y oportunidades
Explica cómo transformar los datos cualitativos y cuantitativos de la investigación en oportunidades de producto accionables. Describe el método de síntesis recomendado: cómo codificar las entrevistas para identificar patrones, cómo construir un mapa de oportunidades (opportunity solution tree de Teresa Torres), cómo priorizar las oportunidades según su impacto en las métricas clave del negocio y cómo comunicar los hallazgos al equipo de ingeniería y a los stakeholders ejecutivos de forma efectiva.

5. Definición de hipótesis y experimentos de validación
Para las tres oportunidades más prometedoras identificadas en el discovery, define: la hipótesis de producto (si añadimos X, el usuario podrá hacer Y, lo que generará Z resultado medible), el experimento más económico para validarla antes de construirla (prototipo en papel, fake door, wizard of oz, etc.), los criterios de éxito del experimento (métricas y umbrales que indicarán si la hipótesis es válida) y el plazo de validación recomendado.

6. Métricas clave para medir el impacto del producto e-learning
Define el árbol de métricas de una plataforma e-learning: métrica estrella o North Star Metric (justifica cuál debería ser: alumnos activos diarios, horas de aprendizaje completadas, tasa de completación de cursos), métricas de input (acciones del equipo que predicen la North Star), métricas de guardrail (indicadores que no deben empeorar) y métricas de calidad de la experiencia de aprendizaje (retención del conocimiento si se puede medir, NPS por segmento de usuario).

Formato de respuesta: Usa tablas para el plan de investigación y el benchmarking competitivo, guiones estructurados para las entrevistas, y formato narrativo con ejemplos para la síntesis y las hipótesis. El tono debe ser práctico y basado en metodologías actuales de product management (continuous discovery, dual track agile).
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Ejecutar product discovery en plataformas e-learning para identificar oportunidades de mejora',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Programa de formación corporativa e-learning desde RRHH con IA',
                'description'       => 'Diseña, implementa y evalúa programas de formación online para empleados desde el departamento de RRHH, usando e-learning, microlearning y LMS corporativos.',
                'prompt_content'    => <<<'EOT'
Actúa como un director o directora de formación y desarrollo (L&D) con amplia experiencia en el diseño e implementación de programas de aprendizaje corporativo utilizando plataformas e-learning, LMS y metodologías de microlearning para equipos de distintos sectores y tamaños.

Objetivo principal: Necesito diseñar un programa completo de formación corporativa online para la empresa, que cubra desde el análisis de necesidades formativas hasta la medición del impacto en el negocio, pasando por la selección de la plataforma LMS, el diseño del itinerario de aprendizaje y la estrategia de adopción.

Contexto de la empresa:
- Sector y actividad: [SECTOR]
- Número de empleados a formar: [NÚMERO]
- Perfiles de empleados más relevantes: [PERFILES]
- Necesidades formativas prioritarias: [COMPETENCIAS O PROGRAMAS PRIORITARIOS]
- Infraestructura tecnológica existente: [SUITE DE PRODUCTIVIDAD, LMS ACTUAL SI EXISTE]
- Presupuesto anual de formación por empleado: [PRESUPUESTO]

Tareas que necesito que desarrolles:

1. Diagnóstico de necesidades formativas (Training Needs Analysis)
Define el proceso completo de análisis de necesidades formativas para la empresa: cómo recopilar información de los managers sobre los gaps de competencias de sus equipos (encuesta de 10 preguntas), cómo combinar los datos cualitativos con los indicadores de negocio (productividad, errores, rotación, satisfacción del cliente), cómo priorizar las necesidades según su impacto estratégico y urgencia, y cómo documentar los resultados en un informe de necesidades formativas que sirva de base para el plan anual.

2. Selección de la plataforma LMS corporativa
Proporciona un framework de evaluación para seleccionar la plataforma LMS más adecuada para la empresa. Define 15 criterios de evaluación agrupados en: experiencia del alumno (interfaz, móvil, gamificación), capacidades de gestión y administración (asignación de cursos, gestión de grupos, informes), integración con el ecosistema tecnológico existente (HRIS, Teams, Slack, SSO), cumplimiento normativo (gestión de certificaciones, trazabilidad para auditorías), modelo de precios (por usuario, por uso, licencia anual) y soporte y servicios del proveedor. Incluye también cómo estructurar un proceso de evaluación con demos y pilotos en 4-6 semanas.

3. Diseño del itinerario de aprendizaje por perfil profesional
Propón la estructura de un itinerario de aprendizaje completo para tres perfiles de empleado: empleado de nueva incorporación (onboarding en 30-60-90 días), mando intermedio con equipo a cargo (desarrollo del liderazgo y la gestión de personas) y empleado técnico que necesita actualizar sus competencias digitales. Para cada itinerario, define: módulos obligatorios y opcionales, orden secuencial y prerrequisitos, formato de cada módulo (vídeo, e-learning interactivo, microlearning, lectura, práctica en el puesto), duración total y sistema de reconocimiento al completar.

4. Estrategia de adopción y engagement
Define cómo conseguir que los empleados completen los cursos y no los abandonen a medias. La estrategia debe incluir: comunicación interna del lanzamiento del programa (plan de comunicación de 4 semanas), rol de los managers como palanca de adopción (cómo involucrarlos y qué esperar de ellos), elementos de gamificación y reconocimiento (badges, leaderboards, certificados, menciones internas), recordatorios y notificaciones inteligentes (sin saturar), y cómo gestionar a los empleados con baja adopción tras las primeras semanas.

5. Medición del impacto de la formación (modelo Kirkpatrick)
Explica cómo aplicar el Modelo Kirkpatrick de cuatro niveles para medir el impacto real de la formación online en la empresa: nivel 1 Reacción (encuesta de satisfacción post-curso con las 5 preguntas más importantes), nivel 2 Aprendizaje (evaluaciones pre y post curso, cómo interpretar la mejora), nivel 3 Comportamiento (cómo medir si el empleado aplica lo aprendido en el puesto de trabajo, con indicadores de 90 días) y nivel 4 Resultados (cómo vincular la formación con KPI de negocio como productividad, calidad, ventas o satisfacción del cliente).

6. Informe de formación para la dirección general
Diseña la estructura de un informe trimestral de formación para presentar a la dirección: resumen ejecutivo con los datos más relevantes, gráficos de adopción y completación por departamento, análisis del impacto en los KPI de negocio identificados, inversión realizada y coste por empleado formado, comparativa con el trimestre anterior y recomendaciones para el próximo trimestre.

Formato de respuesta: Usa tablas para el framework de evaluación del LMS y el modelo Kirkpatrick, listas para los criterios de adopción y las encuestas, y formato de informe estructurado para el documento de dirección. Incluye plantillas de encuestas con preguntas concretas y ejemplos de métricas reales.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar e implementar programas de formación corporativa e-learning desde RRHH',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis financiero de proyectos e-learning y EdTech con IA',
                'description'       => 'Evalúa la viabilidad financiera de proyectos de e-learning, plataformas LMS y negocios EdTech: modelos de negocio, proyecciones de ingresos y análisis de inversión.',
                'prompt_content'    => <<<'EOT'
Actúa como un analista financiero especializado en la evaluación de negocios de tecnología educativa (EdTech) y proyectos de e-learning, con experiencia en el análisis de modelos de negocio digitales, proyecciones financieras para startups EdTech e inversión en plataformas de formación online.

Objetivo principal: Necesito construir un modelo financiero completo para un negocio de e-learning o EdTech que permita evaluar su viabilidad, proyectar los ingresos y gastos de los próximos tres años y presentar el caso de inversión a potenciales inversores o al comité de dirección.

Contexto del proyecto EdTech:
- Tipo de negocio: [Marketplace de cursos / Plataforma LMS SaaS / Creador de cursos individual / Formación corporativa B2B / Aplicación de microlearning]
- Estado actual: [Idea / MVP / Producto en mercado con X usuarios]
- Modelo de monetización: [Suscripción / Venta de cursos / Licencia B2B / Freemium / Marketplace con comisión]
- Mercado objetivo: [B2C individual / B2B corporativo / B2G educación pública]
- Inversión inicial disponible o solicitada: [CANTIDAD]

Tareas que necesito que desarrolles:

1. Análisis del modelo de negocio EdTech
Describe en detalle el modelo de negocio seleccionado, comparándolo con los principales modelos del sector: suscripción mensual o anual (Netflix del e-learning), venta de cursos individuales (Udemy), licencia B2B por usuario (Coursera for Business, LinkedIn Learning), freemium con funciones premium (Duolingo), marketplace con comisión sobre ventas de terceros y formación corporativa a medida. Para el modelo elegido, indica: fuentes de ingresos, estructura de costes asociada, métricas clave (LTV, CAC, churn, ARPU), ventajas e inconvenientes y ejemplos de empresas exitosas con ese modelo.

2. Proyecciones financieras a tres años
Construye las proyecciones financieras del negocio para los años 1, 2 y 3 en tres escenarios: conservador, base y optimista. Para cada escenario, proyecta: número de usuarios o clientes al final de cada año (con los drivers de crecimiento que justifican la proyección), ingresos totales desglosados por fuente, costes principales (tecnología e infraestructura, contenidos y producción, marketing y captación, personal, administrativos) y resultado operativo (EBITDA). Incluye las hipótesis clave de cada proyección de forma explícita.

3. Análisis de unit economics del negocio EdTech
Calcula y analiza las métricas de unit economics más importantes para el modelo de negocio seleccionado: coste de adquisición de cliente (CAC) por canal, valor de vida del cliente (LTV) con el cálculo detallado, ratio LTV/CAC (umbral de salud financiera), tasa de churn mensual y anual (impacto en el crecimiento neto de usuarios), tiempo de recuperación del CAC (payback period) y margen de contribución por usuario o por plan de suscripción. Proporciona benchmarks del sector EdTech para comparar.

4. Plan de inversión y uso de fondos
Si el proyecto busca financiación externa, define cómo estructurar el plan de inversión: cuánta financiación se necesita y por qué (justificación detallada por partida), en qué se va a invertir en los primeros 18 meses (hoja de ruta de uso de fondos), qué hitos de negocio se alcanzarán con esa inversión (métricas que demuestran el progreso), qué valoración se propone para la empresa y por qué, y qué opciones de retorno puede esperar el inversor (exit mediante venta estratégica, adquisición por un grupo de formación, IPO, etc.).

5. Análisis de riesgos financieros
Identifica y cuantifica los principales riesgos financieros de un negocio EdTech: riesgo de captación (CAC más alto de lo esperado o conversión más baja), riesgo de retención (churn superior al proyectado y su impacto en los ingresos), riesgo tecnológico (costes de infraestructura por encima del presupuesto), riesgo competitivo (entrada de un gran competidor con precios más bajos) y riesgo regulatorio (cambios en la normativa educativa que afecten al modelo). Para cada riesgo, indica la probabilidad, el impacto financiero y el plan de mitigación.

6. Dashboard financiero para el seguimiento mensual
Define la estructura del cuadro de mando financiero mensual para un negocio EdTech: MRR y ARR (con la descomposición en nuevo, expansión, reactivado y contraído), tasa de churn y retención neta de ingresos (NRR), CAC por canal de marketing, LTV y ratio LTV/CAC, runway (meses de financiación disponible al ritmo de gasto actual) y eficiencia de marketing (porcentaje de ingresos destinado a captación). Incluye los valores de referencia saludables para cada métrica según el tipo de negocio EdTech.

Formato de respuesta: Usa tablas para las proyecciones financieras y las métricas de unit economics, y proporciona las fórmulas de cálculo para cada indicador. Incluye ejemplos numéricos con datos ficticios pero realistas para un negocio e-learning de tamaño inicial.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Evaluar la viabilidad financiera y construir modelos de proyección para negocios EdTech',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Marco legal de los contenidos e-learning y derechos de autor con IA',
                'description'       => 'Comprende el régimen jurídico de los contenidos formativos digitales: propiedad intelectual, licencias de uso, derechos de autor en e-learning y protección de contenidos online.',
                'prompt_content'    => <<<'EOT'
Actúa como un abogado o asesora jurídica especializado en propiedad intelectual, derecho digital y tecnología educativa, con experiencia en el asesoramiento a creadores de contenido e-learning, plataformas LMS, editoriales educativas y empresas EdTech sobre el régimen jurídico de los contenidos formativos digitales.

Objetivo principal: Necesito comprender el marco legal completo que regula la creación, distribución, protección y monetización de contenidos e-learning en España y en el ámbito europeo, para asegurar el cumplimiento normativo y proteger mis derechos como creador o mi plataforma como distribuidora.

Contexto del proyecto:
- Tipo de actor: [Creador individual de cursos / Plataforma marketplace / Empresa EdTech / Editorial educativa]
- Tipo de contenidos: [Vídeos / Documentos / Software / Evaluaciones / Contenidos interactivos SCORM]
- Modelo de distribución: [Venta directa / Suscripción / Licencia B2B / Distribución gratuita]
- Países de operación: [España / Resto de la UE / Internacional]
- Uso de materiales de terceros: [SÍ, ESPECIFICAR / NO]

Tareas que necesito que desarrolles:

1. Derechos de autor sobre contenidos e-learning
Explica el régimen de derechos de autor aplicable a los distintos tipos de contenidos que componen un curso online según la Ley de Propiedad Intelectual española (TRLPI) y la Directiva europea sobre derechos de autor en el mercado único digital: vídeos grabados por el instructor, materiales escritos (guiones, apuntes, ebooks), presentaciones de diapositivas, ejercicios y evaluaciones, código de software desarrollado para el curso, música o efectos de sonido usados en la producción, imágenes y fotografías incorporadas al curso, y contenidos SCORM o interactivos. Para cada tipo, indica quién ostenta los derechos, durante cuánto tiempo y qué derechos morales y patrimoniales tiene el titular.

2. Uso de materiales de terceros en cursos online
Define el régimen jurídico para el uso de materiales de terceros en cursos e-learning: cuándo se puede usar un material sin licencia (dominio público, límite de cita con fines educativos, obras en Creative Commons), cómo interpretar correctamente cada tipo de licencia Creative Commons (CC BY, CC BY-SA, CC BY-NC, CC BY-ND y sus combinaciones) y qué implica usar una obra con licencia CC en un curso de pago, cómo licenciar o adquirir el derecho de uso de imágenes, músicas y vídeos de terceros para producción de cursos online, y cuáles son los riesgos y las consecuencias de usar materiales sin la licencia adecuada.

3. Contratos con instructores, colaboradores y productores
Redacta las cláusulas esenciales de los tres contratos más habituales en el sector e-learning: contrato de cesión de derechos con un instructor que graba cursos para la plataforma (qué derechos cede, por cuánto tiempo, en qué territorio, a cambio de qué contraprestación y qué ocurre si el instructor quiere retirar el curso), contrato de obra por encargo con un equipo de producción audiovisual (a quién pertenecen los materiales producidos, quién ostenta los derechos de las grabaciones) y contrato de distribución con una empresa que quiere usar tus cursos en su LMS interno (tipo de licencia, número de usuarios, usos permitidos y prohibidos, auditoría de uso).

4. Protección tecnológica de los contenidos
Explica las medidas tecnológicas de protección de contenidos disponibles para los creadores de e-learning y su régimen jurídico: DRM (Digital Rights Management) para vídeos (cómo funciona Widevine, FairPlay y PlayReady, qué protege y qué no), marcas de agua digitales en vídeos y documentos (visibles e invisibles, su valor como prueba ante una infracción), restricciones técnicas de descarga y reproducción en plataformas LMS, y el régimen jurídico de las medidas tecnológicas de protección (prohibición de elusión según la Directiva EUCD y el TRLPI).

5. Términos y condiciones y licencia de uso para alumnos
Redacta los elementos esenciales que deben incluir los Términos y Condiciones de una plataforma e-learning o un creador de cursos respecto a los derechos sobre los contenidos: licencia de uso otorgada al alumno (personal, intransferible, no comercial), prohibiciones expresas (reproducción, distribución, creación de obras derivadas, uso para entrenamiento de IA), consecuencias del incumplimiento y proceso de reclamación, y cómo adaptar estos términos cuando el cliente es una empresa B2B con múltiples usuarios.

6. Resolución de conflictos por infracción de derechos
Describe el procedimiento para actuar ante una infracción de los derechos sobre contenidos e-learning: cómo documentar la infracción (capturas de pantalla, metadatos, marcas de agua), cómo enviar una notificación de retirada de contenido (DMCA takedown para plataformas internacionales, procedimiento de la SGAE y el TRLPI en España), cuándo acudir a la vía judicial (acciones civiles disponibles, medidas cautelares de retirada urgente) y cómo reclamar daños y perjuicios por el uso no autorizado de contenidos.

Formato de respuesta: Usa listas numeradas para los derechos y prohibiciones, tablas para las licencias Creative Commons y sus condiciones, y formato de cláusula contractual para los textos legales. Añade una nota de descargo indicando que esta información es orientativa y no sustituye al asesoramiento jurídico individualizado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Comprender el marco legal de derechos de autor y licencias en la creación de contenidos e-learning',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte al alumno en plataformas e-learning con IA',
                'description'       => 'Gestiona la atención al alumno en plataformas de formación online: resolución de incidencias técnicas, soporte pedagógico, retención del alumno y mejora de la experiencia.',
                'prompt_content'    => <<<'EOT'
Actúa como un responsable de atención al alumno y éxito del cliente (Customer Success) especializado en plataformas de e-learning y formación online, con experiencia en la resolución de incidencias técnicas, el soporte pedagógico remoto, la mejora de la tasa de completación de cursos y la reducción del churn en plataformas de suscripción formativa.

Objetivo principal: Necesito diseñar un sistema completo de soporte y atención al alumno para una plataforma de e-learning que maximice la satisfacción, la completación de los cursos y la retención de los alumnos a largo plazo.

Contexto de la plataforma:
- Tipo de plataforma: [Marketplace de cursos / LMS corporativo / Aplicación de idiomas / Plataforma de certificación]
- Número de alumnos activos: [NÚMERO]
- Canales de soporte actuales: [Email / Chat / Teléfono / Foro / Comunidad]
- Principales motivos de consulta: [TÉCNICO / PEDAGÓGICO / ADMINISTRATIVO / ACCESO]
- Volumen de tickets mensual: [NÚMERO APROXIMADO]
- Equipo de soporte disponible: [NÚMERO DE PERSONAS Y PERFILES]

Tareas que necesito que desarrolles:

1. Mapa de incidencias en e-learning
Clasifica las incidencias más frecuentes de un alumno en una plataforma e-learning por categoría y urgencia: problemas de acceso y autenticación (no puede entrar al curso, contraseña olvidada, SSO que falla), problemas técnicos de reproducción (vídeo que no carga, SCORM que no guarda el progreso, evaluación que no envía), problemas de facturación y suscripción (cobro duplicado, cancelación, acceso tras pago), dudas pedagógicas y de contenido (pregunta sobre un concepto del curso, solicitud de materiales adicionales, discrepancia en una evaluación), y problemas de motivación y abandono (alumno inactivo, solicitud de reembolso, frustración con el ritmo del curso). Para cada categoría, define el SLA recomendado, el canal de atención adecuado y el protocolo de resolución.

2. Base de conocimiento y autoservicio
Diseña la estructura de la base de conocimiento de autoservicio de la plataforma. Define las 20 preguntas más frecuentes que debe responder la base de conocimiento, organizadas por categorías: inicio y acceso, navegación del curso, problemas técnicos, evaluaciones y certificados, facturación y suscripción, y comunidad y foro. Para cada artículo, indica el formato recomendado (texto con capturas, vídeo tutorial corto, guía paso a paso) y cómo medir si el artículo está siendo útil (tasa de resolución sin ticket, valoración del artículo).

3. Protocolos de atención al alumno en riesgo de abandono
Define un sistema de detección temprana del alumno en riesgo de abandono y el protocolo de intervención. Las señales de alerta deben incluir: inactividad de más de 7 días en un curso iniciado, tasa de completación inferior al 20% tras 2 semanas de inscripción, varias sesiones de vídeo repetidas sin avance (señal de confusión), evaluación fallada más de dos veces y acceso al área de cancelación o reembolso. Para cada señal, define el mensaje de intervención automático (email o notificación push), el contenido del mensaje y cuándo escalar a un agente humano de Customer Success.

4. Plantillas de respuesta para las incidencias más frecuentes
Redacta plantillas de respuesta empáticas y profesionales para las 8 incidencias más habituales: bienvenida al alumno nuevo, respuesta a problema técnico de reproducción de vídeo, respuesta a SCORM que no guarda el progreso, gestión de solicitud de reembolso (dentro y fuera del plazo de garantía), respuesta a discrepancia en la corrección de una evaluación, respuesta a alumno frustrado que amenaza con abandonar, respuesta a solicitud de certificado no recibido y cierre de ticket con encuesta de satisfacción. Cada plantilla debe tener un tono empático pero eficiente, solución o siguiente paso claro y personalización con el nombre del alumno.

5. Comunidad y foro de alumnos
Define cómo construir y moderar una comunidad online de alumnos que reduzca la carga de soporte individual y aumente el engagement: estructura del foro por temáticas (área técnica, área de dudas por módulo, área de presentaciones y networking, área de éxitos y logros), rol de los moderadores y los alumnos embajadores, protocolo de moderación de contenido inapropiado, cómo incentivar la participación activa (puntos, badges, reconocimiento público) y cómo medir la salud de la comunidad (tasa de respuesta en el foro, tiempo medio de respuesta entre pares, porcentaje de tickets resueltos en la comunidad vs. en soporte directo).

6. Métricas de calidad del soporte en e-learning
Define los 8 KPI fundamentales para medir la calidad del equipo de soporte de una plataforma e-learning: CSAT (satisfacción con la interacción de soporte), tiempo de primera respuesta por canal, tasa de resolución en el primer contacto, NPS del alumno activo y del alumno que completa el curso, tasa de reembolsos respecto al total de ventas, tasa de churn de alumnos de suscripción, tasa de completación de cursos (indicador indirecto de la calidad del soporte pedagógico) y número de tickets por alumno activo al mes.

Formato de respuesta: Usa tablas para el mapa de incidencias y los KPI, formato de plantilla para los mensajes de respuesta y listas para los protocolos de actuación. El tono debe ser práctico y orientado a implementar mejoras con equipos pequeños.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Gestionar la atención al alumno y la retención en plataformas e-learning',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Crear y vender cursos online como freelance con IA',
                'description'       => 'Construye un negocio freelance sostenible basado en la creación y venta de cursos online: desde la elección del nicho hasta la automatización de ventas y la generación de ingresos pasivos.',
                'prompt_content'    => <<<'EOT'
Actúa como un mentor de negocios online especializado en ayudar a profesionales a construir un negocio de cursos online rentable y sostenible, con experiencia en la creación de infoproductos, marketing de contenidos, embudos de venta automatizados y escalado de ingresos como creador independiente.

Objetivo principal: Necesito diseñar la estrategia completa para lanzar y escalar un negocio de cursos online como freelance independiente, desde la validación del nicho hasta la generación de ingresos pasivos y la automatización de las ventas.

Contexto personal y profesional:
- Área de expertise: [MATERIA O HABILIDAD EN LA QUE ERES EXPERTO]
- Años de experiencia profesional: [AÑOS]
- Audiencia potencial: [PERFIL DE TU ALUMNO IDEAL]
- Plataformas que ya usas o conoces: [REDES SOCIALES, NEWSLETTER, ETC.]
- Objetivo de ingresos mensuales del negocio de cursos: [CIFRA]
- Tiempo disponible para crear y vender cursos (horas semanales): [HORAS]

Tareas que necesito que desarrolles:

1. Validación del nicho y elección del primer curso
Ayúdame a elegir el tema de mi primer curso con mayor probabilidad de éxito comercial. Define el proceso de validación: cómo analizar la demanda usando herramientas gratuitas (Google Trends, búsquedas en Udemy, Hotmart o Teachable, preguntas frecuentes en Reddit y grupos de Facebook), cómo validar la disposición a pagar (encuesta de precio ancla a mi audiencia, preventa con un porcentaje de descuento), cómo definir el resultado concreto y transformador que obtendrá el alumno al terminar el curso (el "de dónde a dónde" en una frase), y cómo elegir entre un curso corto de bajo precio para captar primeros alumnos y un programa completo de mayor ticket.

2. Producción del curso con presupuesto mínimo
Define un flujo de producción de curso online de calidad profesional con inversión mínima: cómo estructurar el curriculum del curso en módulos y lecciones (regla de los tres por tres: 3 módulos principales con 3 lecciones cada uno para un curso inicial), qué equipamiento técnico mínimo necesito para grabar vídeos de calidad aceptable (cámara, micrófono, iluminación, software de grabación y edición), cómo grabar con fluidez superando el miedo a la cámara, cómo usar herramientas de IA para acelerar la producción (generación de guiones, transcripción automática, subtítulos, thumbnails), y qué plataforma de hosting del curso elegir según el modelo de negocio (Teachable, Thinkific, Hotmart, Kajabi, o venta directa con acceso a WordPress).

3. Construcción de audiencia orgánica antes y durante el lanzamiento
Diseña un plan de construcción de audiencia de 12 semanas antes del lanzamiento del curso. El plan debe incluir: elección del canal principal de captación de audiencia (YouTube, newsletter, LinkedIn, Instagram, podcast o TikTok) y justificación según mi perfil y audiencia objetivo, tipo de contenido gratuito que demuestre mi expertise y genere confianza sin revelar todo el curso, frecuencia de publicación sostenible para un freelance trabajando solo, estrategia de captación de suscriptores a la newsletter como activo principal (imán de captación, landing page, bienvenida automatizada) y cómo gestionar la comunidad en las primeras etapas sin que consuma todo mi tiempo.

4. Embudo de ventas y automatización
Diseña un embudo de ventas automatizado para el curso que funcione sin mi presencia activa: estructura del embudo (fuente de tráfico gratuito o de pago, imán de captación, secuencia de emails de nurturing de 5 emails, webinar o masterclass gratuita de venta, página de ventas y checkout), secuencia completa de 5 emails de bienvenida y educación antes de presentar el curso (con el tema de cada email y el objetivo que persigue), estructura de la página de ventas del curso (10 secciones imprescindibles en orden), y cómo automatizar el proceso de compra, acceso al curso y soporte inicial con herramientas de bajo coste.

5. Estrategias de escalado para un negocio de cursos freelance
Una vez que el primer curso está vendiendo de forma consistente, propón tres estrategias de escalado: añadir un programa de mentoría grupal o individual de mayor ticket sobre la misma temática (estructura, precio recomendado y cómo venderlo a los alumnos del curso), crear una comunidad de membresía con cuota mensual o anual para ingresos recurrentes (qué contenido ofrece, cómo retener a los miembros), y construir un catálogo de varios cursos en distintos niveles (gratuito de entrada, curso inicial y programa avanzado) para maximizar el valor de cada alumno captado.

6. Gestión económica y fiscal del negocio de cursos online
Define los aspectos económicos y fiscales más importantes para un creador de cursos online que opera como autónomo en España: cómo facturar la venta de cursos online (consideraciones de IVA para ventas a particulares en España, en la UE y en el resto del mundo), cómo declarar los ingresos de plataformas internacionales como Udemy, Hotmart o Teachable, qué gastos son deducibles como actividad de creación de contenidos (equipamiento, software, publicidad, formación propia), cómo planificar los pagos trimestrales de IRPF para evitar sorpresas y cuándo conviene constituir una sociedad limitada en lugar de seguir como autónomo individual.

Formato de respuesta: Usa listas de pasos accionables para el flujo de producción y el embudo de ventas, tablas para la planificación de contenidos y el calendario de lanzamiento, y formato narrativo con ejemplos concretos para la estrategia de escalado y los aspectos fiscales.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Lanzar y escalar un negocio de cursos online como freelance independiente',
                'vote_score'        => 46,
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
