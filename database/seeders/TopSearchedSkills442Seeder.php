<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills442Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Segmentación predictiva de audiencias para campañas de marketing con IA',
                'description'       => 'Usa inteligencia artificial para identificar micro-segmentos de audiencia con alta propensión de conversión y personalizar mensajes a escala.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en marketing de datos y segmentación de audiencias con amplia experiencia en el uso de inteligencia artificial para personalizar campañas a escala. Tu objetivo es ayudarme a construir un sistema de segmentación predictiva que vaya más allá de los criterios demográficos básicos y utilice comportamientos, intenciones y patrones de consumo para identificar los segmentos más valiosos.

**Contexto de mi negocio:**
[Describe aquí tu negocio: sector, producto o servicio principal, ticket promedio y ciclo de venta]

**Datos disponibles:**
[Indica qué fuentes de datos tienes: CRM, historial de compras, comportamiento web, interacciones en redes sociales, datos de email marketing, etc.]

**Herramienta de analytics actual:**
[Ejemplo: Google Analytics 4, Mixpanel, HubSpot, Salesforce, exportaciones CSV, etc.]

**Objetivo de la segmentación:**
[Ejemplo: reducir CAC, mejorar LTV, aumentar tasa de reactivación, lanzar nuevo producto, etc.]

---

Con esta información, necesito que realices las siguientes tareas:

**1. Diseño del modelo de segmentación:**
Propón un framework de segmentación en capas que combine variables RFM (Recencia, Frecuencia, Monetario) con señales de intención conductual. Explica qué variables deberían tener mayor peso según mi sector y cómo construir un scoring compuesto que prediga la probabilidad de conversión para cada segmento.

**2. Identificación de micro-segmentos de alto valor:**
A partir de los datos disponibles, ayúdame a identificar al menos cinco micro-segmentos distintos. Para cada uno especifica: nombre descriptivo, criterios de inclusión, tamaño estimado como porcentaje de la base, valor potencial, y mensaje o propuesta de valor diferenciada que maximice la resonancia.

**3. Plan de personalización por segmento:**
Para cada micro-segmento diseña una secuencia de comunicación personalizada: canal principal, tono y estilo del mensaje, oferta o CTA más relevante, frecuencia de contacto óptima y métricas clave de éxito. Incluye ejemplos de asunto de email y copy de anuncio adaptados a cada perfil.

**4. Estrategia de activación y pruebas:**
Explica cómo implementar un experimento A/B riguroso para validar la segmentación. Define el tamaño de muestra mínimo para significancia estadística, el período de prueba recomendado, y los criterios de decisión para escalar o descartar cada segmento.

**5. Automatización y retroalimentación continua:**
Describe cómo crear un ciclo de aprendizaje automatizado en el que cada interacción del usuario retroalimente el modelo de segmentación y mejore la precisión predictiva con el tiempo. Menciona herramientas de IA accesibles (como Claude, ChatGPT API, Google Vertex AI o plataformas de CDP) que puedan integrarse sin necesidad de un equipo de data science dedicado.

**6. KPIs y cuadro de mando:**
Define los cinco indicadores más importantes para medir el éxito del sistema de segmentación: cómo calcularlos, con qué frecuencia revisarlos y qué umbrales deberían disparar una revisión del modelo.

Responde en formato estructurado con encabezados, tablas comparativas donde sea útil y ejemplos concretos adaptados a mi contexto. El objetivo final es que pueda implementar este sistema en las próximas cuatro semanas con los recursos disponibles.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Identificar micro-segmentos de audiencia con alta propensión de conversión y diseñar mensajes personalizados a escala para reducir CAC y aumentar LTV.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Personalización dinámica de UI con IA basada en segmentos de usuario',
                'description'       => 'Implementa lógica de personalización en aplicaciones web o móviles que adapte la interfaz, el contenido y los flujos según el segmento de usuario detectado en tiempo real.',
                'prompt_content'    => <<<'EOT'
Eres un ingeniero de software especializado en sistemas de personalización y experiencia de usuario adaptativa. Vas a ayudarme a diseñar e implementar una arquitectura de personalización dinámica de UI que use segmentos de usuario para adaptar la interfaz y los flujos de mi aplicación en tiempo real.

**Tipo de aplicación:**
[Describe tu app: web SPA, app móvil nativa, PWA, aplicación B2B o B2C, stack tecnológico principal]

**Framework y lenguajes:**
[Ejemplo: React + TypeScript, Vue 3, Laravel + Inertia, Flutter, etc.]

**Fuentes de segmentación disponibles:**
[Ejemplo: atributos del usuario en base de datos, historial de navegación, plan de suscripción, comportamiento anterior, geolocalización, etc.]

**Objetivo de negocio de la personalización:**
[Ejemplo: aumentar conversión en onboarding, reducir churn, aumentar upsell, mejorar retención, etc.]

---

Con este contexto, necesito que:

**1. Arquitectura del sistema de personalización:**
Diseña la arquitectura técnica para implementar personalización dinámica. Incluye: dónde vive la lógica de segmentación (cliente, servidor o edge), cómo se propaga el segmento a los componentes de UI, cómo se gestiona el estado del segmento en sesión y cómo se evita el "parpadeo" o layout shift al cargar contenido personalizado.

**2. Modelo de segmentos para personalización de UI:**
Define un modelo de datos para los segmentos de usuario relevantes para la interfaz. Para cada segmento especifica: identificador único, criterios de asignación, componentes o secciones de UI afectadas, variante de contenido o flujo correspondiente, y prioridad cuando un usuario cumple múltiples criterios.

**3. Implementación de componentes adaptativos:**
Proporciona el código de un componente de ejemplo (en mi framework) que reciba el segmento del usuario y renderice la variante correcta sin duplicar lógica de negocio. Incluye manejo de estado de carga, fallback para usuarios sin segmento asignado, y soporte para SSR si aplica.

**4. Feature flags y experimentos A/B:**
Explica cómo integrar el sistema de segmentación con una solución de feature flags (como GrowthBook, LaunchDarkly o una implementación propia) para poder lanzar variantes de forma gradual, medir impacto y revertir sin despliegue de código.

**5. Logging y observabilidad:**
Define qué eventos deben registrarse para cada interacción personalizada: formato del evento, campos obligatorios, destino del log y cómo construir un funnel de análisis que permita comparar el rendimiento de cada variante por segmento.

**6. Consideraciones de rendimiento y privacidad:**
Describe las optimizaciones necesarias para que la personalización no impacte el tiempo de carga (LCP, TTI) y cómo cumplir con GDPR o LGPD asegurando que el usuario pueda optar por no ser segmentado sin perder funcionalidad básica.

Incluye fragmentos de código funcionales y diagramas de flujo en texto cuando sea útil. El resultado debe ser implementable por un equipo de dos desarrolladores en un sprint de dos semanas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar una arquitectura de personalización dinámica de interfaz que adapte flujos y contenido según el segmento de usuario para mejorar conversión y retención.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Sistemas de diseño adaptativos que personalizan la experiencia visual por segmento de usuario',
                'description'       => 'Aplica IA para crear sistemas de diseño que ajusten paletas, tipografía, densidad de información y flujos visuales según el perfil y segmento de cada usuario.',
                'prompt_content'    => <<<'EOT'
Eres un diseñador de producto especializado en sistemas de diseño adaptativos y experiencias personalizadas a escala. Tu enfoque combina principios de diseño centrado en el usuario con inteligencia artificial para crear interfaces que se adaptan dinámicamente al perfil, contexto y necesidades de cada segmento de audiencia.

**Producto que diseño:**
[Describe el producto: tipo de aplicación, sector, propuesta de valor principal y público objetivo]

**Sistema de diseño actual:**
[Herramientas que usas: Figma, Storybook, tokens de diseño, librería de componentes, etc.]

**Segmentos de usuario relevantes para el diseño:**
[Describe los segmentos que conoces o sospechas: por ejemplo, usuarios expertos vs novatos, móvil vs escritorio, alta vs baja frecuencia de uso, plan premium vs gratuito]

**Problema de diseño que quiero resolver:**
[Ejemplo: la interfaz actual no funciona bien para usuarios nuevos Y para usuarios avanzados al mismo tiempo, o necesito aumentar la tasa de completado del onboarding en móvil]

---

Con este contexto, necesito que:

**1. Framework de diseño adaptativo por segmento:**
Define un modelo de capas de adaptación visual: qué elementos del sistema de diseño son candidatos a variar por segmento (densidad de información, jerarquía tipográfica, uso del color, presencia de tooltips y ayudas contextuales, complejidad de los flujos) y cuáles deben permanecer constantes para mantener coherencia de marca.

**2. Matriz de variantes por segmento:**
Crea una tabla que cruce cada segmento identificado con las variables de diseño que cambian: tipo de layout, nivel de progresividad de la información, tono del microcopy, presencia de elementos educativos y tipo de CTA principal. Justifica cada decisión de diseño con principios cognitivos o datos de comportamiento.

**3. Sistema de tokens adaptativos:**
Explica cómo estructurar los tokens de diseño (en JSON o formato de Figma Variables) para soportar múltiples temas o modos que correspondan a los segmentos identificados. Incluye ejemplo de token de color, espaciado y tipografía con variantes por segmento.

**4. Guía de entrega para desarrollo:**
Proporciona una especificación de entrega que los desarrolladores puedan implementar: nomenclatura de variantes de componentes, convención de nombrado de props de personalización, anotaciones de Figma recomendadas y lista de preguntas que el diseñador debe responder para cada componente adaptativo antes de entregarlo.

**5. Proceso de validación de las variantes:**
Diseña un protocolo de test de usabilidad y métricas de diseño para validar que cada variante realmente mejora la experiencia del segmento objetivo. Incluye método (prueba moderada, A/B en producción, análisis de mapas de calor), tamaño de muestra mínimo y criterios de éxito cualitativos y cuantitativos.

**6. Mantenimiento y gobernanza del sistema:**
Describe cómo mantener la consistencia del sistema de diseño a medida que crecen los segmentos y las variantes. ¿Cómo evitar la deuda de diseño? ¿Qué proceso de revisión debe existir antes de añadir una nueva variante?

Responde con ejemplos concretos de decisiones de diseño, tablas comparativas y, donde sea útil, pseudocódigo de tokens o anotaciones de componentes.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Crear sistemas de diseño adaptativos que personalicen la experiencia visual según el perfil de usuario para mejorar usabilidad y conversión sin fragmentar la identidad de marca.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Personalización de propuestas comerciales según el perfil y segmento del prospecto con IA',
                'description'       => 'Genera propuestas de venta altamente personalizadas analizando el segmento, industria, tamaño y pain points del prospecto para aumentar la tasa de cierre.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de ventas consultivas y estrategia comercial con experiencia en personalización de propuestas a escala usando inteligencia artificial. Tu objetivo es ayudarme a crear un sistema que genere propuestas comerciales altamente relevantes para cada prospecto, basándose en su segmento, industria, etapa de madurez y puntos de dolor específicos.

**Mi producto o servicio:**
[Describe qué vendes: tipo de solución, precio promedio, ciclo de venta típico y principales competidores]

**Tipos de prospectos que atiendo:**
[Describe los segmentos de clientes: por tamaño de empresa, sector, rol del comprador, nivel de sofisticación tecnológica, etc.]

**Información que tengo del prospecto antes de la propuesta:**
[Indica qué datos recopilas: formulario de descubrimiento, notas del CRM, LinkedIn, sitio web, reunión de discovery, etc.]

**Problema actual con mis propuestas:**
[Ejemplo: son demasiado genéricas, el cierre tarda mucho, el prospecto pide descuentos en lugar de ver valor, etc.]

---

Con este contexto, necesito que construyas lo siguiente:

**1. Sistema de segmentación de prospectos para ventas:**
Define los segmentos de compradores más relevantes para mi producto y describe el perfil de cada uno: motivaciones principales, objeciones típicas, métricas de éxito que les importan, vocabulario que usan y factores decisivos de compra. Crea una ficha de perfil de comprador para cada segmento.

**2. Framework de personalización de propuestas:**
Diseña la estructura de una propuesta comercial modular donde algunos bloques son fijos (presentación de empresa, metodología) y otros se personalizan dinámicamente según el segmento del prospecto: caso de uso, ROI esperado, testimonios relevantes, términos y condiciones, y próximos pasos. Especifica qué información del prospecto activa cada variante.

**3. Plantillas de propuesta por segmento:**
Escribe el esqueleto de una propuesta para el segmento de mayor volumen de mi pipeline. Incluye: título personalizado con el nombre de la empresa, resumen ejecutivo de una página, sección de diagnóstico del problema específico del prospecto, propuesta de valor adaptada, plan de implementación con hitos, cálculo de ROI y CTA claro con urgencia.

**4. Banco de argumentos y prueba social por segmento:**
Para cada segmento crea: tres argumentos de venta principales con evidencia (datos, benchmarks, casos de éxito), dos objeciones frecuentes con respuestas preparadas, y un testimonio de cliente del mismo sector o tamaño que el prospecto.

**5. Flujo de trabajo con IA para generar propuestas:**
Diseña el proceso paso a paso para usar Claude u otra IA en la generación de propuestas personalizadas: qué datos del prospecto ingresar como contexto, qué secciones generar automáticamente, cuáles requieren revisión humana y cómo integrar el flujo con el CRM o herramienta de propuestas (como PandaDoc, Proposify o un Google Doc).

**6. Métricas para optimizar el sistema:**
Define los KPIs para medir si la personalización mejora los resultados: tasa de apertura de propuestas, tiempo hasta primer respuesta, tasa de cierre por segmento, ciclo de venta promedio y NPS de la experiencia de compra. ¿Cómo iterar el sistema basándome en estos datos?

Sé específico y práctico. Incluye ejemplos de copy de propuesta y guiones de seguimiento post-envío adaptados a cada perfil de comprador.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Crear un sistema de propuestas comerciales personalizadas por segmento de prospecto que reduzca el ciclo de venta y aumente la tasa de cierre.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Segmentación de usuarios para priorización de roadmap y desarrollo de producto con IA',
                'description'       => 'Aplica IA para analizar segmentos de usuarios y traducir sus comportamientos y necesidades en prioridades concretas de roadmap con impacto medible.',
                'prompt_content'    => <<<'EOT'
Eres un product manager senior especializado en estrategia de producto basada en datos y segmentación de usuarios. Tu misión es ayudarme a construir un proceso sistemático para identificar los segmentos de usuarios más estratégicos, entender sus necesidades profundas y traducir esos insights en decisiones de roadmap con impacto de negocio demostrable.

**Mi producto:**
[Describe el producto: tipo de app, propuesta de valor, etapa de desarrollo y modelo de monetización]

**Métricas de producto disponibles:**
[Indica qué datos tienes: eventos de analytics, tasas de retención, NPS, entrevistas de usuario, tickets de soporte, datos de uso de features, etc.]

**Segmentos actuales:**
[Describe cómo segmentas hoy a tus usuarios, aunque sea de forma básica o intuitiva]

**Desafío principal del roadmap:**
[Ejemplo: no sé qué construir para usuarios avanzados sin alienar a los nuevos, hay conflicto entre peticiones de distintos tipos de cliente, o no tengo visibilidad del impacto real de cada feature]

---

Necesito que me ayudes con:

**1. Framework de segmentación estratégica para producto:**
Define un modelo de segmentación de usuarios que combine variables de comportamiento (frecuencia de uso, features utilizadas, profundidad de adopción), variables de valor (LTV actual, potencial de expansión, probabilidad de churn) y variables de necesidad (casos de uso primarios, nivel de sofisticación). Proporciona el esquema de datos y las queries o filtros de analytics para construir cada segmento.

**2. Proceso de discovery por segmento:**
Diseña un protocolo de investigación de usuarios diferenciado por segmento: qué preguntas hacer en entrevistas a cada tipo de usuario, cómo analizar los datos de uso para inferir necesidades no declaradas, y cómo triangular hallazgos cualitativos y cuantitativos para obtener insights accionables.

**3. Matriz de impacto por segmento:**
Crea un framework para estimar el impacto de cada iniciativa del roadmap desglosado por segmento. Incluye fórmulas para calcular: alcance (usuarios afectados por segmento), incremento esperado en métrica clave, esfuerzo de desarrollo y score de prioridad compuesto. Proporciona una plantilla de hoja de cálculo que pueda completar para cada propuesta de feature.

**4. Estrategia de diferenciación por segmento:**
Para cada segmento identificado, sugiere al menos dos oportunidades de producto que maximicen el valor percibido por ese grupo sin crear complejidad innecesaria para otros. Explica cómo usar feature flags o planes de suscripción para entregar valor diferenciado manteniendo un único producto base.

**5. Sistema de feedback continuo por segmento:**
Diseña un mecanismo para recopilar feedback cualitativo y cuantitativo de forma permanente, diferenciado por segmento: encuestas in-app segmentadas, alertas automáticas basadas en comportamiento, entrevistas recurrentes programadas y paneles de usuarios beta por segmento.

**6. Comunicación del roadmap por audiencia:**
Explica cómo adaptar la comunicación del roadmap a cada stakeholder interno (CEO, ventas, desarrollo) y externo (usuarios power, usuarios nuevos, clientes enterprise) sin revelar información estratégica sensible y generando alineación y anticipación.

Incluye plantillas, marcos de evaluación y ejemplos concretos que pueda aplicar en mi próxima sesión de planificación de roadmap.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Construir un proceso de segmentación de usuarios que alimente directamente las decisiones de roadmap con evidencia cuantitativa y cualitativa por segmento.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Segmentación de candidatos y personalización del proceso de selección con IA',
                'description'       => 'Usa IA para segmentar el pool de candidatos según fit cultural, competencias y potencial, y personalizar la experiencia de selección para mejorar la calidad de contratación y la experiencia del candidato.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en adquisición de talento y experiencia del candidato con profundo conocimiento en el uso de inteligencia artificial para optimizar procesos de selección. Tu objetivo es ayudarme a implementar un sistema de segmentación de candidatos que permita personalizar el proceso de selección, mejorar la precisión de las contrataciones y ofrecer una experiencia diferenciada según el perfil de cada candidato.

**Contexto de mi empresa:**
[Describe tu empresa: sector, tamaño, cultura, tipos de roles que contratas con mayor frecuencia y volumen anual de contrataciones]

**Herramientas de reclutamiento actuales:**
[ATS que usas, plataformas de búsqueda de candidatos, herramientas de evaluación, etc.]

**Principal problema en el proceso de selección:**
[Ejemplo: alto abandono de candidatos en el proceso, baja calidad de contrataciones en ciertos roles, procesos demasiado largos, sesgos en la evaluación, etc.]

---

Con este contexto, necesito que diseñes:

**1. Modelo de segmentación de candidatos:**
Define los segmentos de candidatos más relevantes para mis roles habituales. Para cada segmento especifica: características clave (experiencia, motivación, perfil competencial, etapa de carrera), estrategia de sourcing más efectiva, canal de comunicación preferido y etapa del proceso donde hay mayor probabilidad de abandono. Incluye variables de segmentación que no sean discriminatorias y cumplan con legislación laboral.

**2. Criterios de evaluación personalizados por segmento:**
Para cada segmento diseña una rúbrica de evaluación diferenciada que combine: competencias técnicas con pesos distintos según el nivel del rol, indicadores de fit cultural medibles, señales de potencial de crecimiento y factores de riesgo de rotación temprana. Proporciona preguntas de entrevista específicas para evaluar cada criterio.

**3. Personalización de la experiencia del candidato:**
Diseña las variaciones del proceso de selección según el segmento: duración del proceso, número de etapas, tipo de evaluaciones (técnica, situacional, valores), formato de las entrevistas y nivel de personalización de las comunicaciones. Incluye plantillas de email personalizadas para cada segmento en los momentos clave: confirmación de aplicación, invitación a etapas, feedback y oferta.

**4. Uso de IA para análisis de CVs y screening:**
Describe cómo usar Claude u otra IA para analizar CVs y asignar candidatos a segmentos de forma objetiva. Proporciona el prompt base para el análisis de CV, los criterios de scoring automatizable y los elementos que siempre deben ser evaluados por un humano para evitar sesgos algorítmicos.

**5. Panel de métricas de calidad de contratación por segmento:**
Define los KPIs para medir la efectividad del sistema de segmentación: tasa de conversión por etapa y segmento, tiempo hasta oferta, tasa de aceptación, rendimiento a 90 días y retención al año. ¿Cómo detectar si un segmento está siendo sistemáticamente subvalorado o sobrevalorado?

**6. Protocolo de mejora continua:**
Establece un ciclo trimestral de revisión del sistema: cómo incorporar el feedback de candidatos rechazados, cómo analizar el desempeño de los contratados por segmento y cómo ajustar los criterios de segmentación basándote en los datos de retención y rendimiento.

Incluye ejemplos concretos, plantillas de emails y tablas de evaluación que pueda implementar en las próximas dos semanas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Implementar un sistema de segmentación de candidatos que personalice el proceso de selección y mejore la calidad de contratación reduciendo el sesgo y el tiempo al cierre.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Segmentación de clientes por valor y personalización de estrategias financieras con IA',
                'description'       => 'Aplica IA para segmentar la cartera de clientes según valor financiero, perfil de riesgo y potencial de crecimiento, y diseñar estrategias diferenciadas de servicio y retención.',
                'prompt_content'    => <<<'EOT'
Eres un analista financiero senior especializado en gestión de carteras de clientes y segmentación de valor. Tu objetivo es ayudarme a construir un modelo de segmentación financiera que permita identificar los clientes más valiosos, anticipar comportamientos de riesgo y diseñar estrategias de servicio y retención diferenciadas por segmento para maximizar la rentabilidad de la cartera.

**Tipo de institución o empresa:**
[Describe tu organización: banco, fintech, aseguradora, gestora de patrimonio, empresa B2B con cartera de clientes, etc.]

**Datos disponibles:**
[Indica qué datos financieros tienes: historial de transacciones, saldo promedio, productos contratados, historial crediticio, antigüedad, frecuencia de uso de servicios, etc.]

**Herramientas de análisis actuales:**
[Excel, Power BI, Tableau, Python, SQL, herramientas de CRM financiero, etc.]

**Objetivo principal de la segmentación:**
[Ejemplo: reducir el churn de clientes premium, identificar clientes con potencial de upgrading, optimizar la asignación de gestores, personalizar ofertas de productos financieros, etc.]

---

Con este contexto, necesito que:

**1. Diseñes el modelo de segmentación financiera:**
Define los segmentos de la cartera usando una combinación de métricas de valor actual (ingresos generados, margen de contribución, productos activos) y valor potencial (probabilidad de contratación de productos adicionales, proyección de patrimonio, riesgo de churn). Proporciona fórmulas o lógica de scoring para cada dimensión y cómo combinarlas en un índice de valor de cliente compuesto.

**2. Perfil financiero detallado por segmento:**
Para cada segmento identifica: comportamiento financiero típico, productos más utilizados, sensibilidad al precio, nivel de autonomía digital, preferencias de canal de atención, principales motivaciones y principales riesgos de abandono. Usa estos perfiles para definir el modelo de servicio óptimo por segmento.

**3. Estrategias diferenciadas de retención y crecimiento:**
Por cada segmento diseña: táctica de retención principal, oferta de producto o servicio prioritaria para aumentar el valor, frecuencia y canal de contacto óptimos, tipo de incentivo más efectivo (tasa preferente, fee waiver, servicio premium, acceso anticipado) y triggers automáticos que deben activar una acción de retención proactiva.

**4. Modelo de alertas tempranas de churn:**
Define las señales de comportamiento financiero que predicen riesgo de abandono con al menos 30 días de antelación para cada segmento: caída en saldo promedio, reducción de transacciones, consultas de cancelación, aumento de reclamaciones, etc. Diseña el protocolo de actuación automática y humana para cada nivel de riesgo.

**5. Asignación eficiente de recursos por segmento:**
Explica cómo optimizar la asignación de gestores, tiempo de atención y presupuesto de retención según el valor y el riesgo de cada segmento. Proporciona una matriz de decisión que defina qué nivel de servicio y qué inversión en retención es rentable para cada grupo.

**6. Framework de medición y ajuste del modelo:**
Define los KPIs del sistema de segmentación: rentabilidad por segmento, efectividad de las acciones de retención, migración entre segmentos, evolución del LTV promedio y coste de servicio por segmento. ¿Con qué frecuencia revisar y recalibrar el modelo?

Proporciona tablas de scoring, matrices de decisión y ejemplos de comunicaciones personalizadas para los segmentos de mayor valor estratégico.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Construir un modelo de segmentación financiera de cartera de clientes que permita estrategias diferenciadas de retención, crecimiento y asignación de recursos para maximizar la rentabilidad.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Segmentación de clientes legales y personalización de servicios jurídicos con IA',
                'description'       => 'Usa IA para segmentar la cartera de clientes de un despacho jurídico según tipo de caso, valor potencial y riesgo, y personalizar la estrategia de servicio y comunicación para cada perfil.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de gestión de despachos jurídicos con experiencia en estrategia de desarrollo de negocio legal y uso de inteligencia artificial para optimizar la gestión de clientes. Tu objetivo es ayudarme a implementar un sistema de segmentación de clientes que permita al despacho personalizar su modelo de servicio, optimizar la asignación de abogados y maximizar el valor de cada relación cliente-despacho.

**Tipo de despacho:**
[Describe el despacho: especialidad o áreas de práctica principales, tamaño en número de abogados, tipo de clientes habituales: empresa o particular, y mercado geográfico]

**Información disponible sobre clientes:**
[Facturación histórica, tipo de asuntos contratados, antigüedad de la relación, frecuencia de nuevos encargos, sector del cliente, tamaño de empresa si es B2B, etc.]

**Herramientas de gestión actuales:**
[Software de gestión del despacho, CRM, herramientas de facturación, etc.]

**Objetivo principal de la segmentación:**
[Ejemplo: identificar clientes con mayor potencial de recurrencia, mejorar la experiencia del cliente premium, reducir clientes no rentables, desarrollar práctica en un nuevo sector, etc.]

---

Con este contexto, necesito que:

**1. Diseñes el modelo de segmentación de clientes del despacho:**
Define los segmentos estratégicos de la cartera de clientes combinando: valor económico (honorarios anuales, potencial de crecimiento, rentabilidad neta del asunto), valor estratégico (referidos generados, reputación del cliente, sectores de desarrollo futuro) y complejidad de servicio (tiempo de gestión, recursos necesarios, riesgo de litigiosidad interna). Proporciona la lógica de clasificación.

**2. Perfiles de cliente por segmento:**
Para cada segmento identifica: tipo de asuntos más frecuentes, expectativas de servicio (velocidad, nivel de detalle de informes, acceso al socio senior), sensibilidad al precio, preferencias de comunicación, señales de satisfacción y señales de riesgo de abandono. Incluye el perfil del decisor de compra en clientes corporativos.

**3. Modelo de servicio diferenciado:**
Diseña el modelo de servicio para cada segmento: nivel de acceso al equipo, frecuencia de reuniones de seguimiento proactivo, tipo de reporting de asuntos, formato de facturación preferido (tiempo, cuota fija, éxito) y protocolo de gestión de expectativas. Incluye criterios para asignar el abogado responsable según el segmento.

**4. Estrategia de desarrollo de negocio por segmento:**
Para cada segmento define la estrategia de cross-selling y upselling: qué áreas de práctica adicionales son más relevantes para cada perfil, cómo identificar el momento oportuno para proponerlas, qué tipo de contenido o eventos generan mayor engagement, y cómo medir la tasa de penetración de servicios adicionales.

**5. Automatización de comunicaciones con IA:**
Describe cómo usar Claude u otra IA para personalizar las comunicaciones del despacho a cada segmento: resúmenes periódicos del estado de asuntos, alertas de cambios legislativos relevantes, newsletters sectoriales y propuestas de nuevos servicios. Proporciona plantillas de comunicación para cada segmento respetando el tono profesional y los límites éticos de la comunicación jurídica.

**6. Métricas de rentabilidad y gestión del despacho:**
Define los KPIs para medir el éxito del sistema de segmentación: tasa de retención por segmento, rentabilidad por socio y por área de práctica, tasa de cross-selling, NPS por segmento y evolución del lifetime value de cada grupo. ¿Cómo revisar trimestralmente la asignación de clientes entre segmentos?

Responde con tablas comparativas, plantillas de comunicación y recomendaciones accionables que puedan implementarse en un despacho de 5 a 50 abogados.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Segmentar la cartera de clientes de un despacho jurídico para personalizar el modelo de servicio, optimizar la asignación de abogados y maximizar la rentabilidad de la cartera.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Segmentación de clientes para personalización proactiva del soporte al cliente con IA',
                'description'       => 'Implementa un sistema de segmentación de clientes en el área de customer success que permita priorizar la atención, personalizar el soporte y anticipar problemas según el perfil y comportamiento de cada segmento.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en customer success y experiencia del cliente con amplia experiencia en el uso de inteligencia artificial para transformar equipos de soporte reactivos en organizaciones de servicio proactivo y personalizado. Tu objetivo es ayudarme a construir un sistema de segmentación de clientes que permita priorizar la atención, personalizar cada interacción y anticipar problemas antes de que escalen.

**Mi contexto de soporte:**
[Describe tu equipo: tamaño, tipo de empresa, producto o servicio que soportas, volumen mensual de tickets o interacciones y canales de atención disponibles]

**Datos de cliente disponibles:**
[Plan de suscripción, historial de tickets, NPS o CSAT, frecuencia de uso del producto, antigüedad, sector, tamaño de empresa, contactos clave, etc.]

**Herramientas actuales:**
[Helpdesk que usas: Zendesk, Intercom, HubSpot, Freshdesk, etc.; CRM, herramientas de analytics de producto]

**Problema principal:**
[Ejemplo: el equipo trata igual a todos los clientes independientemente de su valor, hay clientes de alto valor que se dan de baja sin señales previas detectadas, o el tiempo de resolución es igual para todos y genera insatisfacción en los premium]

---

Con este contexto, necesito que:

**1. Diseñes el modelo de segmentación para customer success:**
Define los segmentos de clientes relevantes para el equipo de soporte combinando: valor del cliente (ARR o LTV), salud del cliente (health score basado en uso del producto, NPS, tickets abiertos), riesgo de churn y potencial de expansión. Proporciona la lógica de scoring y los umbrales para cada segmento.

**2. Modelo de servicio diferenciado por segmento:**
Para cada segmento define: tiempo máximo de primera respuesta y resolución, canal de atención prioritario, nivel de proactividad (reactivo, check-ins programados, o gestión continua), formato del follow-up y criterios para escalar al customer success manager o al equipo técnico.

**3. Protocolo de soporte proactivo:**
Diseña los triggers automáticos que deben activar una acción proactiva para cada segmento: caída en el uso del producto, aumento de tickets en un período, NPS bajo, renovación próxima, etc. Para cada trigger define: quién recibe la alerta, en cuánto tiempo debe actuar, qué tipo de contacto debe hacer (email automático, llamada, sesión de formación) y cómo documentar el resultado.

**4. Personalización de comunicaciones por segmento:**
Proporciona plantillas de comunicación personalizadas para los momentos más críticos del ciclo de vida del cliente: onboarding, primeras 30 días, renovación, after una incidencia resuelta y reactivación de clientes en riesgo. Cada plantilla debe variar en tono, nivel de detalle y oferta según el segmento.

**5. Uso de IA en la atención al cliente:**
Describe cómo implementar IA (chatbot, clasificación automática de tickets, sugerencias de respuesta) de forma diferenciada por segmento: qué nivel de automatización es apropiado para cada grupo, cómo asegurar que los clientes de alto valor siempre tienen acceso a un humano, y cómo usar IA para reducir el tiempo de resolución sin sacrificar la experiencia.

**6. Dashboard de salud de la cartera:**
Define las métricas y la estructura del panel de control para el equipo de customer success: health score promedio por segmento, tickets abiertos y tiempo de resolución por segmento, tasa de churn mensual, tasa de expansión y NPS por cohorte. ¿Cómo organizar la reunión semanal del equipo en torno a estos datos?

Incluye plantillas de comunicación, matrices de decisión y ejemplos de configuración de alertas automáticas en las herramientas más comunes de CS.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir un sistema de segmentación de clientes para customer success que permita personalizar el soporte, priorizar la atención y reducir el churn con intervenciones proactivas basadas en datos.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Segmentación de audiencia y personalización de oferta para freelancers y consultores independientes con IA',
                'description'       => 'Usa IA para identificar los segmentos de cliente más rentables para tu práctica freelance y personalizar tu propuesta de valor, portfolio y comunicación para atraer y retener a los mejores clientes.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de estrategia de negocio para profesionales independientes con amplia experiencia en ayudar a freelancers y consultores a posicionarse en el mercado, atraer clientes de mayor valor y construir una práctica sostenible y rentable. Tu objetivo es ayudarme a identificar y enfocarme en los segmentos de clientes más rentables y alineados con mis fortalezas, y a personalizar toda mi comunicación y oferta para resonar de forma auténtica con cada segmento.

**Mi práctica freelance:**
[Describe tu especialidad, los servicios que ofreces, tu experiencia, los sectores donde has trabajado y tu situación actual: clientes activos, ingresos aproximados y principal desafío de negocio]

**Clientes actuales o pasados:**
[Describe brevemente los tipos de clientes con los que has trabajado: sector, tamaño, rol del contacto, tipo de proyecto y resultado obtenido]

**Canales de adquisición actuales:**
[Cómo consigues clientes hoy: referidos, LinkedIn, plataformas freelance, contenido, eventos, etc.]

**Objetivo de negocio:**
[Ejemplo: aumentar el ticket promedio, pasar de proyectos puntuales a retainers, especializarme en un nicho, trabajar con empresas más grandes, etc.]

---

Con este contexto, necesito que:

**1. Identifiques mis segmentos de cliente óptimos:**
Analiza los patrones de mis mejores clientes pasados y actuales y define dos o tres segmentos de cliente objetivo donde mi propuesta de valor es más diferenciada y el potencial de rentabilidad es mayor. Para cada segmento especifica: perfil del cliente ideal, tipos de proyectos más frecuentes, presupuesto típico, ciclo de decisión de compra y señales de que es un buen fit conmigo.

**2. Analices mi propuesta de valor por segmento:**
Para cada segmento identifica: qué problema específico resuelvo que les genera más valor, cómo articular mi propuesta de valor en el lenguaje y métricas que usa ese segmento, cuáles de mis casos de éxito son más relevantes y cómo diferenciarme de la competencia (agencias, otros freelancers, soluciones internas).

**3. Personalices mi portfolio y materiales de venta:**
Diseña la estrategia de presentación de portfolio para cada segmento: qué proyectos destacar, cómo estructurar el case study (problema, proceso, resultado en métricas que importan al segmento), qué formato usar (página web, PDF, presentación, Notion) y cómo adaptar el tono y vocabulario de mi bio profesional a cada perfil.

**4. Diseñes la estrategia de captación por segmento:**
Para cada segmento define: los tres canales de adquisición más efectivos, la frecuencia y tipo de contenido que genera mayor credibilidad y atracción, el enfoque de outreach personalizado (mensaje de LinkedIn, email frío, propuesta de colaboración) y cómo usar el contenido y las referencias para generar demanda inbound.

**5. Optimices el proceso de propuesta y cierre:**
Diseña el flujo de ventas personalizado para cada segmento: preguntas de discovery más relevantes, estructura de la propuesta económica, estrategia de pricing (por proyecto, por hora, retainer o basado en valor), manejo de objeciones típicas y CTA que reduce la fricción del cierre.

**6. Crees un plan de 90 días:**
Define un plan de acción concreto para los próximos tres meses: qué segmento priorizar primero, qué materiales crear, cuánto tiempo dedicar a captación versus entrega, y cómo medir si la estrategia de segmentación está funcionando (número de propuestas enviadas, tasa de cierre, ticket promedio, satisfacción del cliente).

Sé directo y práctico. Incluye ejemplos de copy para LinkedIn, plantillas de propuesta y preguntas de discovery adaptadas a mis segmentos objetivo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Identificar los segmentos de cliente más rentables para una práctica freelance y personalizar la propuesta de valor, el portfolio y la estrategia de captación para atraer y retener a los mejores clientes.',
                'vote_score'        => 41,
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
