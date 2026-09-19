<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills531Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'CRO con IA para optimizar landing pages de campañas de marketing',
                'description'       => 'Usa IA para analizar, diagnosticar y mejorar sistemáticamente la tasa de conversión de tus landing pages de marketing.',
                'prompt_content'    => <<<'EOT'
Actúa como especialista en Conversion Rate Optimization (CRO) con más de 10 años de experiencia usando inteligencia artificial para diagnosticar y optimizar landing pages de marketing digital.

Necesito tu ayuda para mejorar la tasa de conversión de mis landing pages usando un enfoque sistemático con IA.

**Contexto de mi landing page:**
- URL o descripción de la landing: [describe la página o comparte el copy principal]
- Objetivo de conversión: [lead, venta, registro, descarga, llamada]
- Tráfico actual: [visitas mensuales aproximadas]
- Tasa de conversión actual: [porcentaje o número de conversiones por mes]
- Fuentes de tráfico principales: [Google Ads, Meta Ads, email, orgánico, etc.]
- Benchmark del sector: [si conoces la tasa de conversión media de tu industria]

**Lo que necesito que hagas:**

1. **Diagnóstico de la landing page actual:**
   - Basándote en la descripción que te doy, identifica los principales problemas de conversión que probablemente tiene mi landing page.
   - Evalúa la claridad del mensaje principal (headline, propuesta de valor, CTA) según los principios de copywriting de conversión.
   - Identifica posibles fricciones en el proceso de conversión: formularios, pasos, información pedida al usuario.
   - Analiza la jerarquía visual y el flujo de atención: ¿el ojo del usuario va hacia donde quiero?

2. **Plan de pruebas A/B con IA:**
   - Diseña un plan de testing A/B priorizado por impacto potencial: qué elementos probar primero (headline, CTA, imagen principal, formulario, precio, testimonios).
   - Para cada test propuesto, dame la hipótesis, la variante A (control), la variante B (challenger) y cómo medir el ganador.
   - Cómo calcular el tamaño de muestra necesario para que los resultados sean estadísticamente significativos.
   - Qué herramientas de IA facilitan la configuración y análisis de tests A/B multivariante.

3. **Optimización del copy con IA:**
   - Dame 3 variantes del headline principal de mi landing optimizadas para conversión, cada una con un ángulo diferente (miedo a perder, beneficio principal, prueba social).
   - Cómo usar IA para generar variantes de copy del CTA que superen al genérico "Comprar ahora" o "Enviar".
   - Cómo usar reseñas y testimonios de clientes con IA para extraer el lenguaje que más resuena con la audiencia objetivo.

4. **Análisis de comportamiento con IA:**
   - Qué herramientas de heatmaps e inteligencia de sesiones recomendarías con IA integrada para entender dónde pierdo al usuario.
   - Cómo interpretar los datos de scroll depth, click maps y grabaciones de sesiones para tomar decisiones de optimización.
   - Cómo usar IA para analizar grandes volúmenes de feedback cualitativo (encuestas post-conversión, chats de soporte) e identificar objeciones recurrentes.

5. **Optimización del formulario:**
   - Cuántos campos debe tener mi formulario según el tipo de conversión y el nivel de compromiso del usuario.
   - Técnicas de optimización de formularios con IA: autocompletado, validación en tiempo real, formularios multi-paso.
   - Cómo reducir la fricción del formulario sin perder la calidad del lead.

Finaliza con un plan de acción de 30 días para mejorar mi tasa de conversión, con tareas concretas por semana.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Optimización sistemática de la tasa de conversión de landing pages con IA',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Desarrollo de tests A/B multivariante con IA para sitios web',
                'description'       => 'Implementa una arquitectura de testing A/B multivariante con IA que automatiza el aprendizaje y acelera la optimización de conversión.',
                'prompt_content'    => <<<'EOT'
Actúa como ingeniero de software especializado en experimentación y CRO técnico, con experiencia en implementar sistemas de testing A/B multivariante con machine learning para optimización de conversión a escala.

Necesito tu ayuda para diseñar e implementar una arquitectura técnica de testing A/B multivariante con IA para mi sitio web.

**Contexto técnico:**
- Tecnología del sitio: [React, Vue, Next.js, Laravel, WordPress, Shopify, etc.]
- Volumen de tráfico: [visitas diarias/mensuales]
- Objetivo de los tests: [mejorar conversión en checkout, formularios de lead, páginas de producto, onboarding]
- Herramientas actuales de analytics: [Google Analytics 4, Mixpanel, Amplitude, etc.]
- Stack de backend: [lenguaje, framework, base de datos]
- Requisitos de privacidad: [si hay restricciones de cookies o GDPR que afecten al testing]

**Lo que necesito diseñar:**

1. **Arquitectura del sistema de testing:**
   - Diseña la arquitectura de un sistema de feature flags y A/B testing que permita lanzar experimentos sin deploys de código.
   - Cómo implementar la asignación de usuarios a variantes de manera determinista (mismo usuario siempre ve la misma variante) y con proporciones configurables.
   - Arquitectura para testing multivariante (múltiples elementos cambiados simultáneamente) vs tests A/B simples: cuándo usar cada uno.
   - Cómo garantizar que los tests no interfieren entre sí cuando hay múltiples experimentos corriendo en paralelo.

2. **Implementación técnica:**
   - Dame el código base para un sistema de feature flags en [lenguaje del stack] con soporte para porcentajes de tráfico, segmentación por atributos de usuario y logging de exposiciones.
   - Cómo integrar el sistema de testing con Google Analytics 4 o la herramienta de analytics que uso para enviar los eventos de variante vista y conversión.
   - Cómo implementar Server-Side Testing para evitar el parpadeo visual (FOUC) que arruina la experiencia de usuario en tests client-side.

3. **IA para automatización del testing:**
   - Cómo implementar Multi-Armed Bandit con IA para que el sistema aprenda en tiempo real y dirija más tráfico a la variante ganadora sin esperar al final del test.
   - Qué algoritmos de bandits recomendarías (Epsilon-Greedy, UCB, Thompson Sampling) según mi nivel de tráfico y el tipo de conversión.
   - Cómo usar IA para detectar automáticamente anomalías en los tests (cambios repentinos de conversión, efectos de novelty, problemas técnicos).

4. **Análisis estadístico automatizado:**
   - Cómo implementar el cálculo automático de significancia estadística y tamaño del efecto para que el sistema declare un ganador sin intervención manual.
   - Diferencia entre estadística frecuentista (p-value) y bayesiana para el análisis de tests A/B: cuál recomiendas y por qué.
   - Cómo controlar el problema de "mirar los datos continuamente" (peeking problem) que infla los falsos positivos.

5. **Dashboard e informes automáticos:**
   - Diseña el esquema de base de datos para registrar experimentos, variantes, exposiciones y conversiones.
   - Qué métricas debe mostrar el dashboard de testing: uplift, intervalo de confianza, probabilidad de ser el mejor, tiempo estimado hasta decisión.
   - Cómo generar informes automáticos de los tests con IA que expliquen los resultados en lenguaje natural para stakeholders no técnicos.

Incluye snippets de código comentados para los componentes más críticos del sistema.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Arquitectura e implementación técnica de sistemas A/B testing multivariante con IA',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de landing pages de alta conversión con IA',
                'description'       => 'Aplica principios de diseño de conversión y heatmaps inteligentes para crear landing pages que conviertan más desde el primer día.',
                'prompt_content'    => <<<'EOT'
Actúa como diseñador UX especializado en conversion-centered design, con experiencia en crear landing pages que convierten usando datos de heatmaps, eyetracking y análisis de comportamiento con inteligencia artificial.

Necesito tu ayuda para diseñar (o rediseñar) una landing page con enfoque de alta conversión.

**Contexto de la landing page:**
- Objetivo de conversión: [venta directa, captura de lead, registro en prueba gratuita, solicitud de demo, descarga de contenido]
- Producto o servicio: [descripción breve de qué ofrezco]
- Audiencia objetivo: [perfil del usuario que llegará a esta página]
- Fuente de tráfico principal: [Google Ads, Meta Ads, email marketing, SEO, redes sociales]
- Dispositivo primario de los usuarios: [mayoritariamente móvil, escritorio, o mix]
- Referencia o inspiración: [si tienes ejemplos de landing pages que te gustan]

**Lo que necesito:**

1. **Estructura y jerarquía visual:**
   - Diseña la estructura de secciones de la landing page en orden de aparición: qué debe verse en el above the fold, qué argumentos desarrollar en el cuerpo y cómo cerrar hacia la conversión.
   - Cómo aplicar los patrones de lectura F y Z según el tipo de página y la audiencia para guiar el ojo hacia los elementos clave.
   - Principio de jerarquía visual: cómo usar tamaño, contraste y espacio para que el CTA principal sea siempre el elemento más prominente.

2. **Diseño del above the fold de alta conversión:**
   - Qué elementos son imprescindibles en los primeros 600px de la página: headline, subheadline, imagen/video hero, CTA, elemento de prueba social.
   - Cómo diseñar el headline visual para que comunique la propuesta de valor en menos de 5 segundos.
   - Tipografía y colores del CTA: qué funciona según los datos de heatmaps y por qué el color del botón importa menos de lo que se cree.

3. **Interpretación de heatmaps con IA:**
   - Cómo interpretar un mapa de clicks para detectar "false affordances" (elementos que parecen clickables pero no lo son) y oportunidades de mejora.
   - Qué revelan los scroll maps sobre qué contenido nunca se lee y cómo reorganizar la página en consecuencia.
   - Cómo usar IA para analizar grabaciones de sesiones y detectar patrones de fricción de manera automatizada.
   - Herramientas de heatmaps con IA integrada que recomendarías (Hotjar, Microsoft Clarity, FullStory, Smartlook).

4. **Diseño para conversión móvil:**
   - Qué diferencias clave hay en el diseño de landing pages para móvil vs escritorio desde la perspectiva de conversión.
   - Optimización de formularios para móvil: tamaño de campos, teclado apropiado, autocompletado, botón de envío siempre visible.
   - Cómo adaptar las imágenes y el video hero para carga rápida en móvil sin perder calidad visual.

5. **Elementos de confianza y prueba social:**
   - Dónde colocar los testimonios, logos de clientes, sellos de confianza y garantías para máximo impacto en la conversión.
   - Cómo diseñar testimonios que conviertan: foto real, nombre, cargo, resultado específico en números.
   - Uso de IA para generar variaciones de diseño de las secciones de prueba social y testearlas.

Incluye una wireframe textual de la landing completa con las decisiones de diseño justificadas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño de landing pages de alta conversión con datos de heatmaps e IA',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Copy de conversión con IA para landing pages de ventas',
                'description'       => 'Escribe copy de ventas de alta conversión para landing pages usando IA y los principios de copywriting más efectivos.',
                'prompt_content'    => <<<'EOT'
Actúa como copywriter especializado en páginas de ventas y landing pages de alta conversión, con experiencia en usar inteligencia artificial para generar, testar y optimizar copy que convierte visitantes en clientes.

Necesito tu ayuda para escribir el copy de una landing page de ventas que maximice la tasa de conversión.

**Contexto del producto o servicio:**
- Nombre del producto/servicio: [nombre]
- Descripción: [qué es y qué hace]
- Precio: [precio o rango de precios]
- Audiencia objetivo: [describe detalladamente al cliente ideal: cargo, empresa, problema que tiene, qué ha intentado antes]
- Principal beneficio: [el resultado más importante que consigue el cliente]
- Principales objeciones: [qué le impide comprar: precio, tiempo, confianza, necesidad real]
- Competidores directos: [con quién me compara el cliente]
- Prueba social disponible: [testimonios, casos de éxito, número de clientes, logros medibles]

**Lo que necesito que escribas:**

1. **Análisis del cliente y el mensaje:**
   - Basándote en el contexto, ayúdame a identificar el trabajo-a-realizar (job-to-be-done) principal del cliente: qué está intentando lograr en su vida o trabajo.
   - Cuál es el miedo más profundo del cliente si no resuelve este problema.
   - Cuál es el deseo más intenso que mi producto puede satisfacer.
   - Qué lenguaje específico usa mi audiencia para describir su problema (importante para el copy).

2. **Estructura del copy de la landing:**
   - Escribe el copy completo de la landing page con las siguientes secciones: headline, subheadline, agitación del problema, presentación de la solución, características y beneficios, prueba social, oferta y precio, garantía, CTA principal y cierre urgencia/escasez.
   - Para el headline: dame 5 variantes usando diferentes fórmulas (pregunta, resultado específico, curiosidad, miedo a perder, promesa audaz).

3. **Copy del CTA:**
   - Dame 10 variantes del texto del botón de conversión que superen a "Comprar ahora" o "Enviar".
   - Cómo escribir el microcopy debajo del CTA (el texto pequeño) para reducir el miedo a hacer clic.

4. **Copy de manejo de objeciones:**
   - Escribe una sección de FAQ o "Para quién es esto" que aborde las 5 principales objeciones de compra.
   - Cómo incluir garantías en el copy de manera que reduzcan el riesgo percibido sin dañar el posicionamiento de precio.

5. **Elementos de urgencia y escasez:**
   - Qué técnicas de urgencia y escasez son éticas y efectivas para landing pages.
   - Escribe el copy para un contador de plazas limitadas, una oferta por tiempo limitado o un bono exclusivo para primeros compradores.

6. **Optimización del copy con IA:**
   - Cómo usar IA para analizar el copy de mis competidores e identificar ángulos que no están usando.
   - Cómo usar feedback de clientes existentes (reseñas, entrevistas) con IA para encontrar el lenguaje que más convierte.

Entrega el copy completo listo para implementar, con notas sobre las decisiones creativas más importantes.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Redacción de copy de ventas de alta conversión para landing pages con IA',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Estrategia de experimentación con IA para producto y growth',
                'description'       => 'Diseña el programa de experimentación de tu equipo de producto usando IA para priorizar hipótesis y maximizar el aprendizaje de cada test.',
                'prompt_content'    => <<<'EOT'
Actúa como Head of Growth o Director de Producto especializado en culturas de experimentación y CRO, con experiencia en construir programas de testing sistemáticos en empresas de tecnología y e-commerce.

Necesito tu ayuda para diseñar e implementar un programa de experimentación maduro en mi equipo de producto, usando IA para maximizar el ritmo y calidad de aprendizaje.

**Contexto del equipo:**
- Tipo de producto: [SaaS, e-commerce, app móvil, marketplace, plataforma B2B]
- Tamaño del equipo: [PMs, diseñadores, desarrolladores involucrados]
- Madurez actual en testing: [ningún proceso, tests ad-hoc, proceso básico, proceso avanzado]
- Tráfico mensual: [número de usuarios activos que permite hacer tests significativos]
- Herramientas actuales: [Optimizely, VWO, LaunchDarkly, Unleash, implementación propia]
- Principal métrica de negocio a mejorar: [activación, retención, conversión, revenue per user, NPS]

**Lo que necesito:**

1. **Programa de experimentación:**
   - Diseña la estructura del programa de experimentación: cómo se generan hipótesis, se priorizan, se diseñan los tests, se analizan resultados y se documentan aprendizajes.
   - Cómo usar IA para generar hipótesis de mejora basadas en datos de analytics, feedback de usuarios y benchmarks del sector.
   - Qué framework de priorización de experimentos recomiendas (ICE, PIE, BRASS) y cómo adaptarlo con scoring asistido por IA.

2. **Cultura de experimentación:**
   - Cómo cambiar la mentalidad del equipo de "lanzamos features" a "testamos hipótesis".
   - Cómo gestionar los tests que dan resultados negativos o nulos (son aprendizajes valiosos, no fracasos).
   - Cómo involucrar a stakeholders de negocio en el programa de experimentación sin que presionen para parar tests que no van como esperan.
   - Cadencia recomendada de review de tests: reuniones semanales, análisis interim, decisiones de parar o continuar.

3. **Gestión del backlog de experimentos con IA:**
   - Cómo estructurar el repositorio de hipótesis: template de hipótesis bien formulada (Si cambiamos X para el segmento Y esperamos Z porque...).
   - Cómo usar IA para enriquecer las hipótesis con datos históricos de tests similares en la industria.
   - Cómo gestionar las dependencias entre tests para evitar resultados contaminados.

4. **Aprendizaje acumulado con IA:**
   - Cómo construir una base de conocimiento de experimentos pasados que la IA pueda consultar para sugerir nuevos tests.
   - Cómo detectar con IA patrones entre los tests ganadores de tu producto para inferir principios de diseño o copy que funcionan para tu audiencia.
   - Cómo compartir los aprendizajes con el equipo de manera que influyan en las decisiones de producto futuras.

5. **Métricas del programa de experimentación:**
   - Cómo medir la salud del programa: número de tests corriendo en paralelo, tiempo medio hasta decisión, porcentaje de tests ganadores, uplift acumulado.
   - Qué reportes automáticos con IA debo generar para la dirección sobre el impacto del programa de experimentación en las métricas de negocio.

Incluye plantillas de documentos de hipótesis, briefing de test y análisis post-test.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Programa de experimentación y cultura de testing para equipos de producto con IA',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'IA para optimizar el funnel de selección y conversión de candidatos en RRHH',
                'description'       => 'Aplica principios de CRO al funnel de reclutamiento: mejora la conversión de candidatos en cada etapa del proceso de selección.',
                'prompt_content'    => <<<'EOT'
Actúa como especialista en Talent Acquisition y People Analytics con experiencia en aplicar metodologías de Conversion Rate Optimization (CRO) al proceso de reclutamiento para mejorar la calidad y velocidad de contratación usando inteligencia artificial.

Necesito tu ayuda para aplicar principios de CRO y optimización de conversión a mi proceso de selección de candidatos.

**Contexto del proceso actual:**
- Tipos de roles que recluto con más frecuencia: [descripción]
- Fuentes principales de candidatos: [job boards, LinkedIn, referencias internas, headhunting, aplicaciones directas]
- Volumen de candidaturas mensuales: [aproximado]
- Tasa de conversión actual por etapa: [si la conoces: CV recibidos → preseleccionados → entrevista inicial → entrevista técnica → oferta → aceptación]
- Principal cuello de botella del proceso: [dónde se pierde más candidatos o tarda más]
- Herramientas actuales de ATS: [Greenhouse, Lever, Workday, Teamtailor, Bizneo, etc.]

**Lo que necesito optimizar:**

1. **Diagnóstico del funnel de reclutamiento:**
   - Ayúdame a mapear las tasas de conversión ideales para cada etapa del funnel de selección según el tipo de rol y sector.
   - Qué datos debo recopilar para tener un diagnóstico objetivo de dónde se produce la mayor pérdida de candidatos cualificados.
   - Cómo usar IA para analizar los datos del ATS e identificar patrones: qué fuentes de candidatos convierten mejor, qué etapa tarda más, en qué roles hay mayor abandono.

2. **Optimización de la oferta de empleo como "landing page":**
   - La oferta de empleo es una landing page de conversión: cómo escribir un job posting que atraiga al candidato ideal y filtre a los no adecuados.
   - Qué elementos del job posting afectan más a la tasa de aplicación: título del puesto, descripción del equipo, salario visible, requisitos obligatorios vs deseables, beneficios.
   - Cómo usar IA para generar variantes de job postings y testear cuáles tienen mayor tasa de aplicación de candidatos cualificados.
   - Cómo eliminar el lenguaje que disuade a ciertos perfiles (lenguaje genérico, listas de requisitos exageradas, ausencia de información sobre cultura).

3. **Reducción de fricción en el proceso de aplicación:**
   - Cuántos pasos debe tener el proceso de aplicación para maximizar el número de candidatos que lo completan.
   - Cómo diseñar el formulario de aplicación para pedir solo lo imprescindible en el primer contacto.
   - Experiencia del candidato en el proceso: qué comunicaciones automáticas con IA mejoran la percepción del proceso y reducen el abandono.

4. **Preselección y cualificación con IA:**
   - Cómo usar IA para hacer la preselección de CVs de manera más eficiente sin introducir sesgos.
   - Diseño de cuestionarios de cualificación automática que descartan candidatos no adecuados sin necesidad de revisión manual.
   - Cómo usar IA para analizar respuestas de candidatos y puntuar el encaje cultural y técnico.

5. **Optimización de la conversión de oferta:**
   - Por qué los candidatos rechazan ofertas en el último momento y cómo prevenirlo con datos y comunicación proactiva.
   - Cómo personalizar la comunicación de la oferta con IA para maximizar la aceptación.
   - Proceso de nurturing de candidatos que están en evaluación en paralelo para que no se enfríen.

Incluye un dashboard de métricas del funnel de reclutamiento con los KPIs más importantes y cómo calcularlos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Optimización del funnel de reclutamiento con principios de CRO e IA',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'IA para optimizar la conversión en procesos de venta de servicios financieros',
                'description'       => 'Aplica CRO y análisis predictivo con IA para mejorar la conversión de leads en clientes en productos financieros y de inversión.',
                'prompt_content'    => <<<'EOT'
Actúa como consultor especializado en optimización de conversión para el sector financiero, con experiencia en aplicar CRO e inteligencia artificial a los embudos de venta de productos bancarios, de inversión, seguros y fintech.

Necesito optimizar el proceso de conversión de leads en clientes en mi empresa de servicios financieros.

**Contexto de mi negocio:**
- Tipo de producto financiero: [cuenta bancaria, fondo de inversión, hipoteca, seguro, préstamo, app de ahorro, asesoramiento patrimonial]
- Canal principal de captación: [web, app, sucursal, telemarketing, referidos, comparadores]
- Tasa de conversión actual: [porcentaje de leads que se convierten en clientes]
- Valor medio del cliente: [LTV o ingresos por cliente en los primeros 12 meses]
- Principal objeción de los leads: [precio, confianza, complejidad del producto, no entienden el beneficio, prefieren el banco actual]
- Regulación aplicable: [MiFID II, LCCI, normativa de seguros, etc. si aplica]

**Lo que necesito:**

1. **Diagnóstico del funnel de conversión:**
   - Diseña el funnel de conversión ideal para mi tipo de producto financiero con las etapas y métricas de cada una.
   - Qué datos de analytics debo recopilar para identificar en qué etapa del funnel se produce la mayor caída.
   - Cómo usar IA para analizar el comportamiento de los leads en la web o app e identificar señales de intención de compra o de abandono.

2. **Optimización de la landing page de captación:**
   - Qué elementos de la landing page son más críticos para productos financieros: confianza regulatoria, comparativa de rendimiento, calculadora de beneficio, simulador.
   - Cómo estructurar una landing para un producto financiero que equilibre la obligación de información regulatoria con la claridad del mensaje de conversión.
   - Cómo usar IA para personalizar la landing según el perfil del visitante (inversor conservador vs agresivo, edad, producto de origen).

3. **Lead scoring y cualificación con IA:**
   - Cómo implementar un modelo de lead scoring con IA que prediga la probabilidad de conversión de cada lead según sus características y comportamiento.
   - Qué señales de comportamiento online son más predictivas de la conversión en productos financieros.
   - Cómo priorizar la llamada del equipo comercial a los leads con mayor probabilidad de conversión.

4. **Nurturing automatizado con IA:**
   - Diseña una secuencia de nurturing por email o WhatsApp para leads financieros que no han convertido: contenido educativo, casos de éxito, recordatorios de beneficios.
   - Cómo personalizar el contenido del nurturing según el producto de interés y el perfil de riesgo del lead.
   - Cuándo y cómo pasar de nurturing automático a contacto humano para maximizar la conversión.

5. **Cumplimiento regulatorio y conversión:**
   - Cómo diseñar el proceso de contratación digital (KYC, firma digital, cuestionario MiFID) minimizando el abandono sin comprometer el cumplimiento.
   - Qué pasos del proceso regulatorio pueden simplificarse con IA para reducir la fricción (verificación de identidad, análisis del perfil de riesgo, generación de documentación).

Incluye benchmarks de tasas de conversión por tipo de producto financiero y canal.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Optimización de conversión con IA en funnels de venta de productos financieros',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Cumplimiento legal en tests A/B y optimización de conversión',
                'description'       => 'Entiende los límites legales de la personalización y el testing A/B en landing pages, incluyendo RGPD, dark patterns y regulación publicitaria.',
                'prompt_content'    => <<<'EOT'
Actúa como abogado especialista en derecho digital, protección del consumidor y regulación publicitaria con experiencia en asesorar a empresas de e-commerce y marketing digital sobre los límites legales de las prácticas de optimización de conversión.

Necesito entender el marco legal que aplica a mis prácticas de CRO, testing A/B y optimización de conversión.

**Contexto de mi negocio:**
- Tipo de negocio: [e-commerce, SaaS, plataforma de servicios, comparador, marketplace]
- Mercado donde opero: [España, Unión Europea, Estados Unidos, global]
- Prácticas de CRO que uso o quiero usar: [tests A/B, personalización basada en cookies, precios dinámicos, urgencia y escasez, chatbots de conversión, formularios optimizados]
- Tipo de datos que recopilo para personalización: [cookies, comportamiento en web, historial de compras, datos demográficos]

**Lo que necesito que analices:**

1. **RGPD y testing A/B:**
   - Qué obligaciones del RGPD aplican cuando hago tests A/B que implican mostrar contenido diferente a usuarios según su perfil.
   - Si necesito consentimiento explícito para asignar usuarios a variantes de test y en qué casos.
   - Cómo documentar los tests A/B de manera que pueda demostrar el cumplimiento del RGPD si hay una inspección.
   - Qué herramientas de testing A/B tienen mejores garantías de privacidad y cumplimiento RGPD.

2. **Dark patterns: qué está prohibido:**
   - Qué son los dark patterns en el contexto de CRO y optimización de conversión y cuáles están explícitamente prohibidos por la Directiva Ómnibus y la Digital Services Act en la UE.
   - Ejemplos concretos de prácticas de urgencia y escasez que son ilegales (contador de tiempo falso, "últimas unidades" sin ser verdad) y cómo hacer urgencia ética y legal.
   - Qué dice la normativa española sobre el uso de técnicas de nudging en procesos de contratación online.
   - Qué sanciones puede acarrear el uso de dark patterns (AEPD, CNMC, autoridades de consumo).

3. **Personalización y precios dinámicos:**
   - ¿Es legal mostrar precios diferentes a usuarios diferentes basándome en su comportamiento o perfil?
   - Qué obligaciones de transparencia hay cuando uso personalización en ofertas y comunicaciones.
   - Cómo gestionar legalmente la personalización basada en cookies de terceros post-cookiepocalypse.

4. **Regulación de formularios de conversión:**
   - Qué información legal es obligatoria en formularios de captación de leads según el RGPD y la LSSICE.
   - Cómo deben redactarse las casillas de consentimiento para ser legalmente válidas (no pre-marcadas, lenguaje claro).
   - Cuánto tiempo puedo guardar los datos de un lead que no convirtió.

5. **Publicidad digital y CRO:**
   - Qué obligaciones de transparencia aplican a los anuncios que llevan a mis landing pages (indicación de que es publicidad, veracidad de las afirmaciones).
   - Cómo deben incluirse los testimonios y casos de éxito en las landing pages para que sean legalmente válidos.
   - Regulación específica de afirmaciones de rendimiento o resultados en sectores regulados (finanzas, salud, formación).

Incluye un checklist de cumplimiento legal de CRO que pueda usar para auditar mis prácticas actuales.

Nota: Este análisis es orientativo. Consulta con un abogado especialista para tu situación concreta.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Marco legal de CRO, tests A/B, personalización y dark patterns en España y la UE',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'IA para optimizar el onboarding y conversión de usuarios en SaaS',
                'description'       => 'Mejora la activación y conversión de usuarios de prueba en clientes de pago usando IA para personalizar el onboarding y detectar señales de churn.',
                'prompt_content'    => <<<'EOT'
Actúa como especialista en Customer Success y Growth para productos SaaS, con experiencia en diseñar onboardings de alta conversión que transforman usuarios de prueba gratuita en clientes de pago usando inteligencia artificial.

Necesito tu ayuda para optimizar el onboarding de mi producto SaaS y mejorar la conversión de trial a pago.

**Contexto del producto:**
- Tipo de producto SaaS: [descripción del producto y a quién va dirigido]
- Modelo de negocio: [freemium, trial gratuito de X días, demo solicitada, PLG, sales-led]
- Métricas actuales: [tasa de activación, conversión de trial a pago, tiempo medio hasta conversión]
- Principales segmentos de usuarios: [si tienes diferentes tipos de cliente con necesidades distintas]
- Principal "momento aha": [el momento en que el usuario entiende el valor real del producto, si lo conoces]
- Herramientas actuales: [Intercom, HubSpot, Customer.io, Amplitude, Mixpanel, etc.]

**Lo que necesito optimizar:**

1. **Diseño del onboarding con IA:**
   - Diseña un flujo de onboarding que lleve al usuario al "momento aha" en el menor tiempo posible.
   - Cómo personalizar el onboarding según el perfil del usuario (tamaño de empresa, caso de uso, industria) desde el registro.
   - Qué preguntas hacer en el onboarding inicial para segmentar al usuario y personalizar su experiencia sin generar fricción.
   - Cómo usar IA para adaptar el tour del producto y los tooltips según el comportamiento previo del usuario.

2. **Detección de señales de activación y riesgo con IA:**
   - Qué eventos de producto son los más predictivos de que un usuario va a convertir a pago (señales de activación).
   - Cómo construir un modelo de lead scoring de producto con IA que prediga la probabilidad de conversión de cada usuario en trial.
   - Qué señales de comportamiento indican que un usuario está a punto de abandonar sin convertir (churn en trial) y cómo actuar antes de que se vaya.

3. **Comunicación automatizada de activación:**
   - Diseña una secuencia de emails y mensajes in-app para los primeros 14 días de trial que guíen al usuario hacia la conversión.
   - Cómo personalizar los mensajes según el comportamiento del usuario: si no ha completado el setup, si ha llegado al aha moment, si lleva 3 días sin entrar.
   - Cuándo y cómo escalar a un humano de Customer Success para usuarios de alto valor que no están activando.

4. **Optimización de la página de conversión:**
   - Diseña la pantalla de upgrade o conversión a plan de pago dentro del producto: qué elementos de la interfaz tienen mayor impacto en la decisión de pago.
   - Cómo usar IA para personalizar la propuesta de upgrade según el uso real del usuario durante el trial (mostrar qué features premium habría usado).
   - Estrategias de pricing display y anclaje de precio en la pantalla de conversión.

5. **Análisis y mejora continua:**
   - Qué cohort analysis debo hacer para entender qué grupos de usuarios convierten mejor y por qué.
   - Cómo usar IA para identificar los patrones de uso durante el trial que mejor predicen la retención a 12 meses (no solo la conversión).
   - Cadencia de revisión y optimización del onboarding: cuándo un cambio del producto requiere revisar todo el flujo de onboarding.

Incluye una plantilla de secuencia de emails de onboarding para los primeros 7 días con el objetivo de cada email.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Optimización del onboarding y conversión trial-a-pago en SaaS con IA',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Optimiza tu web freelance para convertir más visitantes en clientes con IA',
                'description'       => 'Aplica CRO e IA a tu portfolio o web freelance para convertir más visitas en consultas y contratos pagados.',
                'prompt_content'    => <<<'EOT'
Actúa como consultor de CRO especializado en ayudar a profesionales freelance y consultores independientes a optimizar su web personal o portfolio para conseguir más clientes de mayor calidad.

Soy un profesional freelance y quiero mejorar la tasa de conversión de mi web para que más visitantes se conviertan en clientes potenciales que contacten conmigo.

**Contexto de mi negocio freelance:**
- Especialidad: [diseño gráfico, desarrollo web, consultoría, redacción, fotografía, marketing, etc.]
- Tipo de clientes que busco: [perfil del cliente ideal: empresa, sector, presupuesto]
- Tráfico actual a la web: [visitas mensuales aproximadas]
- Tasa de conversión actual: [consultas o leads por mes]
- Principal acción de conversión: [formulario de contacto, solicitud de presupuesto, reserva de llamada, descarga de portfolio]
- Principal fuente de tráfico: [referencias, LinkedIn, SEO, redes sociales, directorio de profesionales]

**Lo que necesito que me ayudes a optimizar:**

1. **Diagnóstico de mi web como herramienta de ventas:**
   - Dame un checklist de los 15 elementos más críticos que debe tener la web de un freelance para convertir.
   - Basándote en el contexto que te doy, identifica los problemas más probables de mi web actual.
   - Cómo usar IA para analizar el comportamiento de los visitantes en mi web e identificar dónde se van sin contactarme.

2. **Propuesta de valor y posicionamiento:**
   - Mi web debe comunicar mi propuesta de valor en menos de 5 segundos: ayúdame a redactar el headline principal de mi página de inicio.
   - Cómo diferenciarme de otros freelance con el mismo perfil: qué elemento de mi historia, metodología o resultados me hace único.
   - Cómo estructurar mi "sobre mí" para que convenza a potenciales clientes en lugar de ser una lista de logros egocéntrica.

3. **Portfolio y casos de éxito como herramientas de conversión:**
   - Cómo estructurar cada caso de éxito del portfolio para que convierta: contexto del cliente, problema, solución, resultado medible.
   - Cuántos casos de éxito mostrar y cómo organizarlos para el cliente ideal que quiero atraer.
   - Cómo usar IA para escribir los textos de cada proyecto del portfolio de manera que enfaticen los resultados para el cliente.

4. **Optimización del formulario de contacto:**
   - Cuántos campos debe tener mi formulario de contacto y cuáles son imprescindibles.
   - Cómo escribir el texto de la página de contacto para reducir el miedo a contactar (el "no tengo presupuesto suficiente" o "no quiero molestar").
   - Qué alternativas al formulario puedo ofrecer para reducir la fricción: calendly para llamada directa, WhatsApp, email directo.

5. **Tests A/B para la web freelance:**
   - Qué elementos de mi web vale la pena testear incluso con poco tráfico.
   - Cómo usar herramientas gratuitas o baratas de heatmaps y grabaciones para entender el comportamiento en mi web.
   - Cómo usar IA para generar variantes de textos clave (headline, CTA de contacto, descripción de servicios) y testearlas manualmente.

6. **Prueba social y confianza:**
   - Cómo pedir testimonios a clientes pasados que sirvan para convertir a futuros clientes (qué preguntas hacer para que el testimonio sea específico y poderoso).
   - Dónde colocar los testimonios, logotipos de clientes y premios para máximo impacto.

Dame un plan de acción priorizado de 2 semanas para mejorar mi web freelance con los cambios de mayor impacto primero.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Optimización de conversión de la web freelance para conseguir más clientes con IA',
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
