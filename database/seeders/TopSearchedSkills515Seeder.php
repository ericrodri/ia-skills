<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills515Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Optimización de campañas de afiliados con IA para marketing digital',
                'description'      => 'Usa IA para analizar el rendimiento de tus campañas de afiliados, identificar los canales más rentables, optimizar el contenido de captación y maximizar las comisiones generadas.',
                'prompt_content'   => <<<'EOT'
Eres un estratega de marketing de afiliación con más de diez años de experiencia en la industria, especializado en optimización de conversión, análisis de atribución y escalado de programas de afiliados en sectores como finanzas, ecommerce, software y viajes. Conoces a fondo las principales redes de afiliación (Awin, CJ Affiliate, Rakuten, Impact, Amazon Associates, TradeDoubler) y las herramientas de tracking más utilizadas.

**Contexto de la tarea:**
El marketing de afiliación es uno de los canales de adquisición más eficientes en términos de ROI cuando está bien gestionado, ya que el pago es por resultado (CPA, CPL o revenue share). Sin embargo, la mayoría de los marketers dejan dinero sobre la mesa por falta de análisis sistemático, contenido poco optimizado y dependencia de los datos que proporciona la red de afiliación (que suelen ser incompletos o retrasados).

**objetivo principal:**
Desarrollar un sistema de optimización continua de mis campañas de afiliación que aumente el revenue mensual en al menos un 30% en los próximos 90 días, sin aumentar el presupuesto de tráfico de pago.

**Instrucciones de trabajo:**

1. **Auditoría de rendimiento actual:** Ayúdame a analizar los datos de mis campañas actuales. Dame una plantilla estructurada para recopilar: revenue por afiliado/publisher, tasa de conversión por fuente de tráfico, EPC (Earnings Per Click), tasa de reversal/cancelación, y tendencias temporales. A partir de estos datos, identifica los cuellos de botella principales.

2. **Segmentación de afiliados por potencial:** Diseña una matriz para clasificar a mis afiliados actuales en cuatro cuadrantes: alto rendimiento / alta escalabilidad (estrellas), alto rendimiento / baja escalabilidad (cash cows), bajo rendimiento / alta escalabilidad (con potencial) y bajo rendimiento / baja escalabilidad (candidatos a eliminar). Define acciones específicas para cada cuadrante.

3. **Optimización de landing pages de afiliados:** Analiza los principios de conversión más efectivos para landing pages en marketing de afiliación. Incluye: estructura del headline y subheadline, ubicación y texto del CTA, uso de prueba social (testimonios, reseñas, número de usuarios), tabla comparativa de productos, FAQ para resolver objeciones y velocidad de carga como factor crítico.

4. **Estrategia de contenido SEO para afiliados:** Desarrolla una estrategia de contenido que capture tráfico orgánico con intención de compra. Tipos de contenido más efectivos: comparativas ("X vs Y"), reviews en profundidad, "mejores X de 2024", guías de compra y artículos de "cómo elegir". Para cada tipo, indica la estructura óptima, las palabras clave objetivo y cómo integrar los enlaces de afiliado de forma natural.

5. **Modelo de atribución avanzado:** Explica cómo implementar un modelo de atribución multi-touch que va más allá del último clic, el modelo por defecto en la mayoría de redes. Cómo usar datos de Google Analytics 4, pixels de seguimiento propios y UTMs para entender el rol real de cada canal en el customer journey y reasignar el presupuesto correctamente.

6. **Email marketing para monetización de lista:** Diseña una estrategia de monetización de mi lista de suscriptores con marketing de afiliación: frecuencia de emails promocionales vs. contenido de valor, estructura de los emails de recomendación, cómo usar segmentación por comportamiento para mostrar productos relevantes y cómo medir el revenue por suscriptor (RPS).

7. **Negociación de comisiones y condiciones:** Guíame en la negociación de mejores condiciones con los anunciantes: cuándo y cómo pedir un aumento de comisión, cómo construir el argumento basado en datos (volumen, calidad del tráfico, LTV de los usuarios referidos), qué pedir además del porcentaje (cookie window más largo, acceso a ofertas exclusivas, pagos más frecuentes).

8. **Dashboard de seguimiento de KPIs:** Diseña la estructura de un dashboard de seguimiento semanal de mi programa de afiliación. Métricas a incluir: revenue total, comisiones por canal, EPC, tasa de conversión, nuevos vs. afiliados activos y proyección mensual.

Pregúntame por las categorías de productos o servicios que promociono y las redes de afiliación que utilizo antes de personalizar las recomendaciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Aumentar el revenue de afiliación analizando rendimiento, optimizando conversión y mejorando las condiciones con anunciantes.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Sistema de tracking y atribución de afiliados con IA para desarrolladores',
                'description'      => 'Diseña e implementa un sistema propio de tracking de clics y conversiones para marketing de afiliación, con atribución multi-touch, detección de fraude y dashboards en tiempo real.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software especializado en sistemas de tracking, análisis de datos y plataformas de marketing de rendimiento. Tu experiencia incluye construcción de pipelines de datos para atribución de conversiones, sistemas anti-fraude para marketing de afiliación y APIs de integración con redes de afiliados.

**Contexto técnico:**
La dependencia de los sistemas de tracking de terceros (redes de afiliación, Google Analytics) tiene limitaciones importantes: datos retrasados 24-48 horas, modelos de atribución simplificados (último clic), bloqueo de cookies de terceros por navegadores modernos y falta de visibilidad sobre la calidad del tráfico. Las empresas más avanzadas construyen sistemas de tracking propios que complementan los datos de las redes.

**objetivo principal:**
Diseñar e implementar un sistema de tracking de afiliados first-party que proporcione datos en tiempo real, atribución precisa y detección de tráfico fraudulento, integrándose con las redes de afiliación existentes.

**Módulos técnicos:**

1. **Arquitectura del sistema de tracking:** Diseña la arquitectura completa del sistema: servidor de redirección de tracking (para capturar clics antes de redirigir al destino), servidor de eventos de conversión (pixel o postback URL), base de datos de sesiones y conversiones, sistema de matching entre clics y conversiones, y capa de analítica en tiempo real.

2. **Implementación del pixel de tracking:** Escribe el código para un pixel de seguimiento que: capture el click ID y parámetros UTM al llegar el usuario, almacene en cookie first-party con fallback a localStorage, persista el attribution data a través de redirects y dominios propios, y dispare el evento de conversión al completarse la acción objetivo.

3. **Server-side tracking con postback URLs:** Implementa el sistema de notificación server-to-server (S2S) para conversiones. Cuando se produce una conversión en el servidor: enviar postback a la red de afiliación con el click ID, registrar la conversión en la base de datos propia y manejar reintentos ante fallos de red.

4. **Modelo de atribución personalizable:** Implementa diferentes modelos de atribución en el sistema: último clic (baseline para comparar con redes), primer clic, lineal (crédito igual a todos los touchpoints), time decay (más crédito a touchpoints recientes) y basado en datos (usando ML para aprender qué touchpoints predicen mejor la conversión).

5. **Detección de fraude en tráfico de afiliados:** Implementa reglas y modelos para detectar tráfico fraudulento: click flooding (muchos clics del mismo IP/dispositivo en poco tiempo), cookie stuffing (inyección de cookies de afiliado sin clic real), traffic bots (patrones de comportamiento no humano), y geo-fraud (tráfico de países no permitidos marcado como de países premium).

6. **API de integración con redes de afiliación:** Desarrolla una capa de integración con las principales redes (Awin, CJ, Impact) para: importar automáticamente reportes de comisiones, reconciliar con los datos propios de conversión, detectar discrepancias y exportar datos para análisis cross-network.

7. **Dashboard de analytics en tiempo real:** Diseña un dashboard con WebSockets o Server-Sent Events que muestre en tiempo real: clics por afiliado y campaña, conversiones en los últimos 60 minutos, EPC en tiempo real, alertas de anomalías (spike de clics, caída de conversión) y mapa geográfico de tráfico.

Especifica el stack tecnológico que prefieres (Node.js, Python, Go para el tracker; PostgreSQL/ClickHouse para almacenamiento; Redis para sesiones) antes de comenzar a generar código.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Construir un sistema propio de tracking de afiliados con atribución multi-touch, detección de fraude y analytics en tiempo real.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de landing pages de alta conversión para marketing de afiliados',
                'description'      => 'Usa IA para diseñar landing pages de afiliados que conviertan al máximo, con estructuras probadas, microcopy persuasivo y elementos visuales que generan confianza y urgencia.',
                'prompt_content'   => <<<'EOT'
Eres un experto en diseño de landing pages y optimización de conversión (CRO) especializado en marketing de afiliación. Conoces las técnicas más efectivas de persuasión visual, copywriting de conversión y principios psicológicos que llevan a los usuarios a hacer clic en los enlaces de afiliado y completar la compra.

**Contexto del proyecto:**
Las landing pages de afiliados compiten en un entorno saturado donde el usuario ya ha visto docenas de comparativas y reseñas similares. La diferencia entre una página que convierte al 2% y una que convierte al 8% suele estar en detalles de diseño, jerarquía visual, microcopy y elementos de confianza, no en el presupuesto de tráfico.

**objetivo principal:**
Diseñar landing pages de afiliados que maximicen la tasa de conversión (clicks en enlaces de afiliado y compras completadas), adaptadas al tipo de producto o servicio que promociono y al perfil de mi audiencia objetivo.

**Instrucciones de diseño:**

1. **Estructura de página de mayor conversión:** Define la estructura óptima para una landing page de afiliados según el tipo de contenido: review en profundidad de un solo producto, comparativa de varios productos, guía de compra con ranking, y página de cupones/descuentos. Para cada tipo, especifica la disposición de elementos: hero, beneficios, tabla comparativa, reviews, CTA y FAQ.

2. **Jerarquía visual y flujo de lectura:** Diseña el flujo visual de la página para guiar al usuario desde el headline hasta el CTA principal. Incluye: uso de tamaños de fuente para establecer jerarquía, espaciado entre secciones para facilitar la lectura en scroll, posicionamiento de CTAs (arriba del fold, en mitad de página y al final) y uso de elementos visuales (flechas, iconos) para guiar la mirada.

3. **Microcopy de alta conversión:** Escribe los textos para los elementos clave de la página: headline principal (beneficio + audiencia + urgencia en menos de 10 palabras), subheadline que desarrolla la propuesta de valor, texto de los botones CTA (específico y orientado a acción: "Ver precio actual" en lugar de "Comprar ahora"), tooltips y aclaraciones en los puntos de decisión.

4. **Elementos de confianza y prueba social:** Diseña la estrategia de social proof para la página: tipos de testimonios más creíbles (con nombre, foto y resultado específico), cómo mostrar el número de usuarios o compradores, uso de logos de medios que han mencionado el producto, badges de seguridad y garantías, y fecha de última actualización visible.

5. **Tablas comparativas optimizadas para conversión:** Diseña la estructura de la tabla comparativa perfecta para afiliados: columnas (características que realmente importan a la audiencia), highlight del producto ganador, precios actualizados con variación de color para ofertas, botón CTA en cada fila y nota de cuándo se verificó la información.

6. **Optimización para móvil:** Adapta el diseño de escritorio para móvil considerando: tabla comparativa con scroll horizontal o versión simplificada, botones CTA con tamaño táctil mínimo de 44x44px, carga rápida priorizando contenido visible above-the-fold, y sticky bar inferior con CTA siempre visible mientras se hace scroll.

7. **Testing A/B sistemático:** Define un plan de tests A/B para mejorar continuamente la conversión: qué elementos testar en qué orden (headline → CTA → prueba social → tabla → imágenes), cómo calcular el tamaño de muestra necesario para resultados estadísticamente significativos, y cómo documentar y aplicar los aprendizajes.

Dime el tipo de producto o servicio que afilio y la plataforma donde construyo las páginas (WordPress, Webflow, etc.) para personalizar todas las recomendaciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar landing pages de afiliados que maximicen la tasa de conversión con estructura, microcopy y elementos de confianza optimizados.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas para gestores de redes de afiliados con IA',
                'description'      => 'Usa IA para reclutar nuevos afiliados de alto rendimiento, negociar condiciones ventajosas con publishers y construir relaciones duraderas que escalen el revenue del programa.',
                'prompt_content'   => <<<'EOT'
Eres un gestor de programas de afiliación (Affiliate Manager) con experiencia en la dirección de redes de afiliados de alto rendimiento para empresas de ecommerce, software SaaS, servicios financieros y seguros. Conoces el lado del anunciante (cómo maximizar el ROI del programa) y el del publisher (qué buscan los afiliados para unirse y mantener la relación).

**Contexto profesional:**
Un programa de afiliación exitoso depende fundamentalmente de las relaciones humanas: encontrar a los publishers correctos, convencerlos de promocionar tu producto en lugar del de la competencia, darles las herramientas para triunfar y retenerlos cuando son exitosos. La parte de ventas y gestión de relaciones es tan crítica como la técnica.

**objetivo principal:**
Desarrollar mis habilidades como gestor de programas de afiliación para reclutar publishers de mayor calidad, mejorar la retención de los afiliados existentes y aumentar el revenue total del programa en los próximos 6 meses.

**Módulos de trabajo:**

1. **Identificación y prospección de afiliados de alto potencial:** Define los criterios para identificar publishers ideales para mi programa: métricas de tráfico, relevancia de la audiencia, historial de rendimiento en categorías similares, credibilidad (calidad del contenido, engagement) y escalabilidad. Enseñame a usar herramientas como SimilarWeb, Ahrefs y las propias redes de afiliación para encontrar candidatos.

2. **Pitch de reclutamiento personalizado:** Diseña el proceso de outreach para reclutar nuevos afiliados. Incluye: email de presentación inicial que evite parecer spam (personalización, valor claro, brevedad), propuesta de valor diferenciada versus los programas de la competencia, y argumentos específicos según el tipo de afiliado (blogger, comparador, influencer, portal de cashback).

3. **Onboarding de nuevos afiliados:** Diseña un proceso de incorporación de 30 días para nuevos afiliados que maximice su activación (primer venta generada): materiales de bienvenida, guía de los mejores materiales creativos disponibles, ejemplos de contenido de alta conversión, soporte proactivo en los primeros días y hitos de progreso para mantener la motivación.

4. **Negociación de condiciones con publishers:** Guíame en la negociación de condiciones con diferentes tipos de afiliados: cómo justificar el CPA o revenue share propuesto con datos de rendimiento, cuándo dar bonus por volumen o por calidad de lead, cómo estructurar acuerdos de exclusividad y qué concesiones son aceptables sin comprometer la rentabilidad del programa.

5. **Gestión de afiliados de alto rendimiento (VIPs):** Define un programa de relación especial para los afiliados que generan el 80% del revenue: comunicación directa, acceso a ofertas exclusivas, comisiones escalonadas, feedback prioritario sobre creatividades y tecnología, y tratamiento especial en eventos del sector.

6. **Análisis de competencia de programa:** Enseñame a hacer un benchmark del programa propio versus los de la competencia: comisiones ofrecidas, materiales creativos disponibles, reputación en comunidades de afiliados y velocidad de pago. Cómo usar esta información para mejorar el programa y comunicar las ventajas a publishers potenciales.

7. **Gestión de conflictos con afiliados:** Cómo manejar las situaciones conflictivas más comunes: afiliado que usa técnicas prohibidas (PPC brand bidding, cookie stuffing), disputas sobre conversiones no reconocidas, cancelación masiva de comisiones y afiliados que amenazan con irse a la competencia. Principios de comunicación asertiva y límites no negociables.

Dime el sector del programa de afiliación que gestiono y el modelo de comisión (CPA, CPL, revenue share) para personalizar todas las recomendaciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Reclutar y gestionar afiliados de alto rendimiento, negociar condiciones ventajosas y escalar el revenue del programa.',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management de plataformas de afiliación y monetización web con IA',
                'description'      => 'Usa IA para tomar mejores decisiones de producto en plataformas de marketing de afiliación, definir el roadmap basado en datos de monetización y mejorar la experiencia de publishers y anunciantes.',
                'prompt_content'   => <<<'EOT'
Eres un product manager con experiencia en plataformas de marketing de rendimiento, redes de afiliación y herramientas de monetización web. Conoces los modelos de negocio de plataformas bilaterales (conectan anunciantes y publishers), las métricas que importan en este ecosistema y los retos técnicos y de negocio que enfrentan.

**Contexto del producto:**
Una plataforma de afiliación es un marketplace bilateral: debe satisfacer simultáneamente a dos tipos de usuarios con necesidades muy diferentes (anunciantes que quieren ROI controlable y publishers que quieren maximizar sus ingresos). Las decisiones de producto que benefician a uno pueden perjudicar al otro, lo que hace que la priorización sea especialmente compleja.

**objetivo principal:**
Ayudarme a definir y ejecutar una estrategia de producto para una plataforma de afiliación o herramienta de monetización web que mejore la retención de ambos lados del marketplace y aumente el GMV (Gross Merchandise Value) de comisiones procesadas.

**Áreas de trabajo:**

1. **Métricas norte y OKRs de plataforma bilateral:** Define las métricas clave para cada lado del marketplace: para anunciantes (ROAS del programa, calidad del tráfico referido, incrementalidad de las ventas generadas por afiliados) y para publishers (EPC, tasa de aprobación de comisiones, velocidad de pago, variedad de programas). Define cómo balancear las métricas cuando entran en conflicto.

2. **Roadmap de features con impacto en monetización:** Prioriza las features más impactantes para aumentar el GMV de la plataforma: mejoras en el sistema de tracking (más precisión = más confianza = más inversión), herramientas de deep linking automatizado, feeds de producto actualizados en tiempo real, reportes de atribución multi-touch y APIs para integración con herramientas de terceros.

3. **Reducción de fricción en el onboarding:** Analiza el funnel de activación para anunciantes y publishers por separado. Para cada tipo de usuario, identifica el mayor punto de abandono y diseña un experimento para reducir la fricción: simplificación del proceso de registro, guía de configuración paso a paso, verificación automatizada de requisitos técnicos.

4. **Sistema de detección y prevención de fraude como feature de producto:** Define cómo el sistema anti-fraude puede ser una ventaja competitiva de la plataforma. Qué capacidades mostrar en el producto a anunciantes (transparencia sobre la calidad del tráfico), qué feedback dar a publishers legítimos (para que entiendan por qué algunas conversiones se revierten) y cómo comunicar las políticas de fraude de forma que no genere fricciones innecesarias.

5. **Integraciones y ecosistema de producto:** Define una estrategia de integraciones que aumente el valor de la plataforma: con herramientas de ecommerce (Shopify, WooCommerce), con sistemas de email marketing (para automatizar la notificación de nuevas ofertas a publishers relevantes), con herramientas de BI (para exportar datos a dashboards propios de anunciantes) y con APIs de pagos (para automatizar el pago a publishers globalmente).

6. **Pricing y modelos de monetización de la plataforma:** Ayúdame a diseñar o revisar el modelo de monetización de la plataforma: comisión sobre transacciones (fee por conversión), subscription fee para anunciantes, premium para publishers (acceso anticipado a programas exclusivos), y pricing de features avanzadas (anti-fraude premium, atribución avanzada). Analiza el impacto de cada modelo en la retención y el crecimiento.

7. **Investigación de usuario en un marketplace bilateral:** Define un proceso de research que capture insights de ambos lados del marketplace: cómo hacer entrevistas con anunciantes sin revelar información confidencial de publishers, cómo usar los datos de comportamiento en la plataforma para inferir necesidades no expresadas, y cómo priorizar el feedback cuando los dos lados piden cosas contradictorias.

Dime si el producto que gestionas es una plataforma existente en proceso de mejora o un nuevo producto en construcción para personalizar el enfoque.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Definir roadmap y estrategia de producto para plataformas de afiliación y monetización web con datos y IA.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Reclutamiento de afiliados y gestión de partnerships con IA para RRHH',
                'description'      => 'Usa IA para diseñar el proceso de reclutamiento, evaluación y onboarding de afiliados y partners comerciales, creando marcos de colaboración que escalen el canal de forma sostenible.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en gestión de partnerships y ecosistemas de colaboración comercial, con experiencia en el diseño de programas de afiliación, partner programs y redes de distribución digital. Conoces los procesos de evaluación de socios, los contratos de colaboración y las mejores prácticas para construir relaciones de largo plazo con publishers y afiliados.

**Contexto del rol:**
El crecimiento de un canal de afiliación requiere un proceso sistemático y escalable para atraer, evaluar, incorporar y retener colaboradores externos. Muchos programas fracasan no por falta de atractivo comercial sino por procesos de incorporación lentos, falta de soporte a los socios o incapacidad de escalar el volumen de relaciones gestionadas.

**objetivo principal:**
Diseñar un proceso profesional y escalable de gestión de afiliados y partners que permita crecer el número de colaboradores activos de calidad sin aumentar proporcionalmente el equipo de gestión.

**Áreas de trabajo:**

1. **Criterios de evaluación y scoring de candidatos:** Desarrolla un sistema de puntuación (scoring) para evaluar solicitudes de nuevos afiliados. Variables a considerar: calidad y relevancia del tráfico (análisis de SimilarWeb), calidad del contenido (originalidad, profundidad, engagement), historial en otras redes de afiliación, modelo de monetización del publisher y reputación en la industria. Define umbrales de aprobación automática, revisión manual y rechazo.

2. **Proceso de due diligence de socios:** Diseña el proceso de verificación antes de activar a un nuevo afiliado: comprobación de propiedad del sitio web (Google Search Console), verificación de identidad para el contrato y el pago, revisión de que el contenido cumple con las políticas (sin contenido prohibido, sin competencia directa no autorizada) y comprobación de que el modelo de tráfico es legítimo.

3. **Contrato y términos de colaboración:** Define los elementos esenciales del contrato de afiliación: definición de conversión válida y causas de reversal, política de uso de marca (qué está permitido y qué no en el contenido y en SEM), condiciones de pago (umbral mínimo, frecuencia, métodos), causas de terminación y cláusula de no competencia si aplica. Proporciona un borrador base.

4. **Programa de onboarding estructurado:** Diseña el proceso de incorporación de nuevos afiliados aprobados: email de bienvenida con credenciales y recursos, tutorial de la plataforma de afiliación, kit de materiales creativos organizados por formato y campaña, guía de mejores prácticas para generar conversiones con el programa específico, y primera revisión de rendimiento a los 30 días.

5. **Sistema de comunicación y soporte a escala:** Define una estrategia de comunicación que mantenga a los afiliados informados y motivados sin consumir todo el tiempo del equipo: newsletter mensual con novedades del programa y materiales nuevos, webinars trimestrales de formación para afiliados, canal de soporte con SLA diferenciado por nivel de afiliado, y sistema de notificaciones automáticas para cambios en comisiones o condiciones.

6. **Programa de reconocimiento y retención:** Diseña un programa de fidelización para afiliados activos: niveles de membresía con beneficios crecientes (bronce/plata/oro/platino), bonos por objetivos trimestrales, reconocimiento público (ranking de afiliados, award anual), acceso anticipado a nuevas funcionalidades o campañas exclusivas y eventos de networking con el equipo del anunciante.

7. **Terminación y offboarding de afiliados:** Define el proceso para gestionar la desvinculación de afiliados: cuándo terminar proactivamente la relación (fraude, incumplimiento de términos, inactividad prolongada), cómo comunicarlo de forma profesional, liquidación de comisiones pendientes y gestión de contenido publicado con los links de afiliado (redirección o desactivación).

Pregúntame por el tamaño actual del programa de afiliación y los recursos disponibles para la gestión antes de ajustar las recomendaciones a tu contexto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar procesos escalables para reclutar, evaluar, incorporar y retener afiliados y partners comerciales.',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de programas de afiliación y monetización con IA',
                'description'      => 'Usa IA para modelar la economía de un programa de afiliación, proyectar el revenue de monetización de tráfico y tomar decisiones financieras basadas en datos de rendimiento real.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en modelos de negocio digitales y en particular en la economía del marketing de afiliación: análisis de unit economics de programas de afiliados, modelización de revenue de publishers, valoración de portfolios de sitios web monetizados y análisis de rentabilidad de inversiones en tráfico orgánico.

**Contexto financiero:**
El marketing de afiliación tiene una economía compleja porque mezcla flujos variables (comisiones que dependen del volumen de ventas y las tasas de conversión), costes semi-fijos (plataforma de afiliación, equipo de gestión, producción de contenido) y activos intangibles difíciles de valorar (autoridad de dominio, audiencia construida). Muchos operadores no tienen clara la rentabilidad real de su actividad.

**objetivo principal:**
Ayudarme a construir un modelo financiero completo de mi actividad de afiliación o monetización de tráfico que me permita tomar mejores decisiones de inversión, proyectar el crecimiento y valorar el negocio correctamente.

**Módulos de análisis:**

1. **Unit economics del programa de afiliación:** Calcula y analiza las métricas clave de unit economics: EPC (Earnings Per Click) por fuente de tráfico, CPC efectivo de tráfico orgánico (coste de contenido / clics generados), margen por conversión, LTV del tráfico orgánico vs. de pago y payback period de la inversión en contenido.

2. **Modelo de revenue proyectado:** Construye un modelo de proyección a 12-24 meses que incluya: proyección de tráfico orgánico basada en curvas de crecimiento de posicionamiento SEO, tasas de conversión estimadas por tipo de contenido y fuente, variaciones estacionales del sector (Black Friday, verano, etc.) y sensibilidad del revenue ante cambios en comisiones o algoritmos de buscadores.

3. **Análisis de rentabilidad por canal:** Compara la rentabilidad de los diferentes canales de monetización: afiliación directa, Google AdSense/Mediavine (publicidad display), venta de leads, productos propios digitales y membresías. Para cada canal, calcula el revenue por visita, los costes directos atribuibles y el margen de contribución.

4. **Valoración de un portfolio de sitios de afiliación:** Explica las metodologías para valorar sitios web monetizados con afiliación: múltiplos de EBITDA mensual (el estándar de mercado en plataformas como Flippa o Empire Flippers), factores que ajustan el múltiplo al alza (diversificación de tráfico, antigüedad del dominio, crecimiento tendencial) o a la baja (concentración en un programa, dependencia de SEO, nichos volátiles).

5. **Análisis de inversión en contenido SEO:** Construye el modelo de ROI de la inversión en contenido para afiliación. Entradas: coste por artículo (escritura, edición, optimización), tiempo hasta generar tráfico orgánico significativo, tráfico esperado en el pico de posicionamiento, tasa de clics en afiliados y EPC. Salida: payback period, IRR y NPV de la inversión.

6. **Gestión de riesgo financiero:** Identifica y cuantifica los principales riesgos financieros del negocio de afiliación: riesgo de penalización algorítmica de Google (impacto en revenue), riesgo de reducción de comisiones por el anunciante (cómo cubrirse diversificando programas), riesgo de reversales masivos de comisiones (por cambio de política del anunciante) y riesgo regulatorio (cookies, privacidad).

7. **Reporting financiero mensual:** Diseña la plantilla del informe financiero mensual para un operador de marketing de afiliación: revenue bruto vs. neto (tras reversales), desglose por canal y programa, evolución de márgenes, proyección para el mes siguiente y KPIs de negocio vs. objetivos anuales.

Dime el volumen de revenue mensual aproximado y si operas como publisher individual o como empresa para ajustar el nivel de complejidad del análisis.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Modelar la economía de un programa de afiliación, proyectar revenue y valorar negocios de monetización de tráfico con IA.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos y compliance legal para marketing de afiliación con IA',
                'description'      => 'Usa IA para revisar y redactar contratos de afiliación, asegurar el cumplimiento con GDPR y regulación de publicidad online, y proteger tu negocio ante riesgos legales del sector.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho digital, marketing online y comercio electrónico, con experiencia en contratos de afiliación, regulación de publicidad en internet (Ley de Servicios de la Sociedad de la Información - LSSI, DSA - Digital Services Act), protección de datos (GDPR/LOPD) y regulación de influencers y comunicaciones comerciales.

**Contexto legal:**
El marketing de afiliación opera en un entorno legal complejo y poco homogéneo. Las obligaciones varían según el país, el tipo de contenido (blog, comparador, red social, email) y el tipo de compensación (comisión por venta, pago fijo por publicación). Las regulaciones de publicidad exigen transparencia sobre las relaciones comerciales, el GDPR impone obligaciones sobre el tracking de usuarios, y los contratos de afiliación raramente están bien equilibrados para el publisher.

**objetivo principal:**
Ayudarme a entender mis obligaciones legales como publisher o anunciante en marketing de afiliación, revisar y negociar contratos con las redes y anunciantes, y asegurar que mi operación cumple con toda la regulación aplicable.

**Áreas de trabajo:**

1. **Obligaciones de transparencia en publicidad:** Explica las obligaciones legales de identificar el contenido publicitario en España y la UE: cuándo es obligatorio indicar que un enlace es de afiliado, qué fórmulas son aceptadas ("Enlace patrocinado", "Anuncio", "#ad", "Este artículo contiene enlaces de afiliado"), dónde debe aparecer el aviso (al inicio del contenido, junto al enlace, en el pie de página) y qué ocurre si no se cumple (sanciones de la CNMC, demandas de competidores).

2. **Revisión del contrato de afiliación del anunciante:** Dame una checklist para revisar contratos de afiliación antes de firmar. Cláusulas a revisar con especial atención: definición de conversión válida y causas de reversal (¿son razonables o abusivas?), política de cancelación de comisiones (plazo, causas), restricciones de competencia (¿puedo promocionar a la competencia?), política de uso de marca en SEM y redes sociales, y condiciones de terminación del contrato.

3. **Contrato de afiliación para anunciantes:** Si soy el anunciante que lanza un programa, ayúdame a redactar los términos y condiciones del programa de afiliación. Elementos esenciales: definición precisa de conversión válida, política de cookies y tracking, conductas prohibidas (lista exhaustiva), proceso de reclamación de comisiones, mecanismo de resolución de disputas y derecho de modificación unilateral de condiciones.

4. **GDPR y tracking de afiliados:** Explica las implicaciones del GDPR para el tracking de afiliación: qué base legal es apropiada para el uso de cookies de tracking de terceros (consentimiento previo, según la AEPD), cómo debe configurarse el banner de cookies para que el tracking de afiliados sea válido, y las implicaciones de iOS 14.5+ y la eliminación de cookies de terceros para el modelo de atribución.

5. **Responsabilidad por el contenido publicado:** Aclara la responsabilidad legal del publisher afiliado por el contenido que publica sobre los productos que promociona: obligaciones de veracidad en las claims (¿qué pasa si afirmo que un producto tiene características que no tiene?), responsabilidad por reviews falsas o manipuladas, y límites de la protección que ofrece la exención de responsabilidad para intermediarios (DSA).

6. **Resolución de disputas con redes y anunciantes:** Explica el proceso para reclamar comisiones no pagadas o reversadas injustamente: cómo documentar el caso, qué vías de reclamación existen dentro de la red, cuándo tiene sentido escalar a una acción legal y qué posibilidades reales hay de recuperar el importe en disputa.

7. **Estructura societaria y fiscal para publishers:** Aclara las implicaciones fiscales y societarias de operar como publisher de afiliación: cuándo es obligatorio darse de alta como autónomo, cómo declarar los ingresos de redes internacionales (declaración de operaciones con terceros, modelos 349 y 720 si aplica), y si tiene sentido constituir una sociedad cuando el revenue supere cierto umbral.

Aclara siempre que las respuestas son orientativas y no sustituyen el asesoramiento de un abogado colegiado. Pregúntame por el país de residencia y el tipo de actividad (publisher individual, empresa anunciante, red de afiliación) antes de personalizar la respuesta.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Revisar contratos de afiliación, cumplir con GDPR y obligaciones de transparencia publicitaria, y proteger el negocio ante riesgos legales.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte y gestión de publishers en redes de afiliación con IA',
                'description'      => 'Usa IA para gestionar el soporte a publishers afiliados de forma eficiente, resolver disputas de comisiones, crear documentación técnica y mejorar la experiencia del colaborador en el programa.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en customer success y soporte técnico para programas de afiliación y plataformas de marketing de rendimiento. Tienes experiencia en la gestión de disputas de comisiones, soporte técnico de integración (tracking, deep links, feeds de producto) y en la creación de documentación y recursos de autoservicio para publishers.

**Contexto del rol:**
El soporte a afiliados tiene características únicas respecto a otros tipos de atención al cliente: los usuarios son profesionales del marketing que tienen altas expectativas técnicas, preguntas muy específicas sobre comisiones y tracking, y una baja tolerancia a respuestas genéricas. Al mismo tiempo, muchas preguntas son recurrentes y podrían resolverse con buena documentación de autoservicio.

**objetivo principal:**
Mejorar la calidad y eficiencia del soporte a publishers en un programa de afiliación, reduciendo el tiempo de resolución, aumentando la satisfacción de los afiliados y liberando tiempo del equipo mediante automatización y documentación de calidad.

**Módulos de trabajo:**

1. **Centro de ayuda y documentación técnica:** Diseña la estructura del centro de conocimiento para afiliados. Secciones necesarias: guía de inicio rápido (primeras 24 horas), tutorial de la plataforma de afiliación, guía de integración técnica (deep links, feeds, API), política de comisiones y reversales con ejemplos, FAQ de preguntas frecuentes y glosario de términos. Para cada sección, proporciona un ejemplo del tipo de contenido.

2. **Protocolo de resolución de disputas de comisiones:** Define el proceso estándar para gestionar disputas cuando un afiliado reclama comisiones no reconocidas. Incluye: información que el afiliado debe proporcionar (click ID, fecha, captura de la conversión), pasos de investigación (consultar logs de tracking, verificar con el anunciante), tiempos máximos de respuesta por etapa y cómo comunicar tanto la resolución favorable como la desfavorable.

3. **Diagnóstico de problemas técnicos de tracking:** Crea un árbol de decisión para diagnosticar los problemas de tracking más comunes: conversiones no registradas (¿falla el clic, la cookie o el pixel de conversión?), discrepancias entre el panel del afiliado y el del anunciante, problemas con deep links dinámicos y errores de integración de feeds de producto.

4. **Respuestas tipo y plantillas de comunicación:** Desarrolla un banco de plantillas para las consultas más frecuentes: confirmación de aprobación al programa, respuesta a consulta de estado de comisiones, notificación de reversal con explicación y opciones, respuesta a solicitud de materiales creativos adicionales y respuesta a consulta técnica de integración.

5. **Segmentación del soporte por nivel de afiliado:** Define un sistema de niveles de servicio según el revenue que genera cada afiliado: afiliados básicos (solo autoservicio y ticketing), afiliados activos (soporte por email con SLA de 48h), afiliados VIP (soporte prioritario con acceso directo a un gestor, SLA de 4h y revisión mensual de rendimiento).

6. **Encuesta de satisfacción y mejora continua:** Diseña una encuesta de satisfacción post-resolución para el soporte de afiliados. Preguntas clave (máximo 5), escala de valoración (NPS específico para soporte), pregunta abierta sobre el principal problema no resuelto y cómo usar los resultados para mejorar la documentación y los procesos.

7. **Métricas de calidad del soporte a afiliados:** Define los KPIs para medir la calidad del servicio de soporte: tiempo medio de primera respuesta, tasa de resolución en el primer contacto (FCR), CSAT post-resolución, volumen de tickets por categoría (para identificar gaps de documentación), y tasa de escaladas a revisión manual de conversiones.

Adapta los flujos y plantillas al tipo de plataforma de afiliación que utilizas (Awin, Impact, plataforma propia, etc.) y al tamaño del programa (número de afiliados activos y equipo de soporte).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Mejorar el soporte a publishers afiliados con documentación de calidad, protocolos de resolución de disputas y gestión eficiente de incidencias.',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Monetización de tráfico web como freelancer con IA y afiliación',
                'description'      => 'Aprende a construir y escalar un negocio de monetización de tráfico web como freelancer usando marketing de afiliación, IA para producción de contenido y estrategias de crecimiento automatizado.',
                'prompt_content'   => <<<'EOT'
Eres un mentor de negocio para creadores de contenido y freelancers que quieren construir una fuente de ingresos pasivos a través de la monetización de tráfico web con marketing de afiliación. Tienes experiencia práctica en la construcción de sitios de nicho, portfolios de sitios de afiliación y blogs de autoridad monetizados.

**Contexto del negocio:**
El modelo de monetización de tráfico con afiliación permite a freelancers y emprendedores construir activos digitales (sitios web, canales de contenido) que generan ingresos recurrentes proporcionales al tráfico orgánico que atraen. Con la llegada de IA generativa, el coste de producción de contenido ha caído drásticamente, pero la competencia también ha aumentado, haciendo más importante que nunca la calidad, la especialización y la construcción de autoridad real en el nicho.

**objetivo principal:**
Ayudarme a construir y hacer crecer un negocio sostenible de monetización de tráfico web con marketing de afiliación como actividad freelance principal o como fuente de ingresos complementaria, usando IA para ser más eficiente sin sacrificar calidad.

**Módulos de trabajo:**

1. **Selección de nicho rentable:** Ayúdame a seleccionar un nicho de afiliación que equilibre: potencial de revenue (comisiones altas, productos de ticket elevado o recurrentes), volumen de búsquedas con intención comercial, nivel de competencia manejable para un sitio nuevo y mi conocimiento o interés genuino en el tema. Proporciona un framework de evaluación de nichos con criterios ponderados.

2. **Arquitectura del sitio de afiliación:** Diseña la estructura de contenidos de un sitio de afiliación profesional: categorías principales, tipos de artículos necesarios (reviews, comparativas, guías de compra, artículos informativos que construyen autoridad), frecuencia de publicación recomendada y estrategia de enlazado interno para maximizar el flujo de PageRank hacia las páginas más rentables.

3. **Producción de contenido con IA de calidad:** Define un workflow para producir contenido de afiliación de alta calidad usando IA: cómo usar Claude o GPT-4 para la investigación inicial y el borrador, qué partes deben ser siempre escritas o verificadas por un humano (opiniones personales, datos actualizados, experiencia real con el producto), y cómo optimizar el contenido generado para que pase los filtros de calidad de Google (E-E-A-T: Experience, Expertise, Authoritativeness, Trustworthiness).

4. **SEO técnico para sitios de afiliación:** Cubre los aspectos técnicos de SEO más impactantes para sitios de afiliación: velocidad de carga (Core Web Vitals), estructura de URLs, canonical tags para evitar contenido duplicado, schema markup para reviews (estrellitas en resultados de búsqueda), y robots.txt para no indexar páginas de baja calidad.

5. **Diversificación de fuentes de ingresos:** Explica cómo diversificar el modelo de monetización más allá de la afiliación pura: publicidad display (AdSense, Mediavine, AdThrive), venta de leads directos a anunciantes, infoproductos propios relacionados con el nicho, newsletter monetizada y servicios de consultoría para empresas del sector.

6. **Escalado del negocio:** Define las fases de crecimiento de un negocio de afiliación freelance: fase 1 (solitario, todo manual), fase 2 (primeras subcontrataciones: redactores, SEO técnico, diseñador), fase 3 (sistema con procesos documentados y equipo pequeño), y fase 4 (portfolio de varios sitios gestionados con procesos optimizados). Para cada fase, indica los umbrales de revenue que justifican el salto.

7. **Gestión fiscal y legal como freelancer:** Explica las obligaciones básicas para operar como freelancer de afiliación en España: alta en autónomos (cuándo es obligatoria), modelos tributarios aplicables a comisiones de redes internacionales, deducibilidad de gastos (hosting, herramientas SEO, contenido subcontratado, cursos de formación) y cuándo plantearse la constitución de una sociedad.

Pregúntame por tu situación actual (recién empezando o con un sitio en crecimiento), el nicho de interés y el tiempo que puedes dedicar semanalmente antes de personalizar el plan de acción.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir y escalar un negocio freelance de monetización de tráfico web con afiliación e IA de forma sostenible.',
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
