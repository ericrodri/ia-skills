<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills466Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Personalización hipersegmentada en e-commerce con IA',
                'description'      => 'Diseña campañas de marketing con personalización a nivel individual usando IA para segmentar audiencias en retail digital.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing digital especializado en e-commerce y personalización avanzada con inteligencia artificial. Tu misión es ayudarme a diseñar una estrategia de personalización hipersegmentada para una tienda online que quiere ir más allá de los segmentos tradicionales y llegar a cada cliente como un individuo único.

**Contexto de la tarea:**
Tengo una tienda de e-commerce con un catálogo de más de 5.000 productos y una base de datos de clientes con historial de compras, navegación y comportamiento en el sitio. Quiero usar IA para crear experiencias de compra radicalmente personalizadas que aumenten la tasa de conversión y el valor medio del pedido.

**Lo que necesito que hagas:**

Primero, analiza los distintos niveles de personalización que existen en el e-commerce moderno: desde la segmentación demográfica básica hasta la personalización 1-to-1 en tiempo real. Explícame qué diferencia a cada nivel y cuándo tiene sentido invertir en cada uno según el tamaño del negocio y el volumen de datos disponible.

Segundo, diseña para mí una arquitectura de personalización usando IA que incluya:
- Qué datos debo recolectar y cómo estructurarlos (señales de comportamiento, historial de compras, contexto de sesión, datos externos como clima o eventos locales)
- Qué modelos de IA son más adecuados para recomendaciones de producto (collaborative filtering, content-based filtering, modelos híbridos)
- Cómo implementar personalización dinámica en la homepage, páginas de categoría, fichas de producto y emails transaccionales
- Estrategias de personalización en tiempo real durante la sesión de compra

Tercero, crea para mí un sistema de mensajes personalizados según el estado del cliente en el ciclo de compra:
- Visitante nuevo (primera visita, sin datos)
- Cliente ocasional (1-2 compras en el último año)
- Cliente recurrente (3+ compras)
- Cliente en riesgo de abandono (sin actividad en 90 días)
- Cliente VIP (top 10% en valor de vida)

Para cada segmento, dame ejemplos concretos de: asunto de email, mensaje de bienvenida en web, oferta personalizada y producto recomendado según categorías típicas de moda, electrónica o alimentación gourmet.

Cuarto, explícame cómo medir el impacto real de la personalización: qué KPIs usar, cómo diseñar tests A/B que aislen el efecto de la personalización, y cómo calcular el ROI de invertir en tecnología de personalización con IA.

Quinto, dame una hoja de ruta de implementación de 90 días: qué hacer primero cuando el presupuesto es limitado, qué herramientas SaaS de personalización con IA merecen la pena (Klaviyo, Dynamic Yield, Bloomreach, Nosto), y cómo escalar progresivamente sin romper la experiencia de usuario.

Incluye al final tres casos de uso reales donde la personalización con IA transformó los resultados de un e-commerce, con cifras concretas de mejora en conversión y revenue.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar estrategia de personalización 1-to-1 para aumentar conversión en e-commerce',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura de dynamic pricing con IA para retail',
                'description'      => 'Implementa un sistema de precios dinámicos en tiempo real usando modelos de IA que maximicen margen y competitividad.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en sistemas de precios dinámicos para retail y e-commerce. Necesito que me guíes en el diseño e implementación de un motor de dynamic pricing con inteligencia artificial que ajuste precios en tiempo real según múltiples variables de mercado.

**Objetivo principal:**
Construir un sistema de dynamic pricing que sea justo para el cliente, sostenible para el negocio y que maximice el margen bruto sin sacrificar volumen de ventas. El sistema debe operar en un catálogo de entre 10.000 y 100.000 SKUs con competidores que también ajustan precios varias veces al día.

**Diseño técnico que necesito:**

Explícame la arquitectura completa del sistema:
- Componentes principales: motor de scraping de precios de competidores, pipeline de datos de demanda, modelo de elasticidad de precios por categoría, motor de reglas de negocio y API de actualización de precios
- Stack tecnológico recomendado: qué bases de datos usar (time-series para históricos, OLAP para análisis), colas de mensajería para actualización en tiempo real, frameworks de ML para los modelos predictivos
- Cómo estructurar el repositorio, los servicios y los flujos de datos de extremo a extremo

Profundiza en los modelos de IA para pricing:
- Cómo construir un modelo de elasticidad de precio por categoría de producto usando regresión y datos históricos de ventas y precio
- Cómo usar reinforcement learning para optimizar precios a largo plazo balanceando exploración y explotación
- Cómo incorporar variables externas: estacionalidad, días festivos, eventos locales, tendencias en Google Trends, niveles de inventario en tiempo real

Diseña el sistema de reglas de negocio que debe acompañar al modelo:
- Precio mínimo (suelo) basado en coste + margen mínimo aceptable
- Precio máximo (techo) basado en precio de lista sugerido o reputación de marca
- Reglas de paridad de precio (si el producto está en Amazon, qué delta mantener)
- Reglas de velocidad de cambio de precio (cuántas veces puede subir/bajar en 24h sin dañar la percepción del cliente)

Dame código Python funcional para:
- Un scraper de precios de competidores usando Playwright con manejo de rate limiting y rotación de proxies
- El entrenamiento de un modelo de elasticidad de precio básico con scikit-learn usando datos sintéticos realistas
- Una función de optimización de precio que, dado el modelo de elasticidad, calcule el precio óptimo que maximiza el beneficio esperado

Finalmente, explícame cómo hacer el despliegue gradual: cómo empezar con un subconjunto de categorías piloto, cómo medir el impacto real vs el grupo de control, qué señales de alerta configurar para detectar si el sistema está dañando la percepción de precio de la marca, y cómo presentar los resultados al equipo directivo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Implementar motor de precios dinámicos con IA para maximizar margen en e-commerce',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias de compra inmersivas con IA en retail',
                'description'      => 'Crea conceptos de UX innovadores para retail físico y digital usando IA generativa y tecnologías inmersivas.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de experiencias UX/CX especializado en retail innovation y tecnologías inmersivas. Quiero explorar cómo la inteligencia artificial puede transformar radicalmente la experiencia de compra, tanto en tiendas físicas como en canales digitales, creando momentos memorables que conviertan visitantes en clientes leales.

**El reto de diseño:**
El retail tradicional enfrenta presión creciente del e-commerce. La única forma de que las tiendas físicas sobrevivan es ofrecer experiencias que no se puedan replicar online. Al mismo tiempo, el e-commerce necesita reducir la brecha con el retail físico en términos de tangibilidad y experiencia sensorial. La IA es la clave para lograrlo en ambos canales.

**Lo que necesito de ti:**

Diseña conceptualmente cinco experiencias de compra inmersivas habilitadas por IA, describiendo para cada una:
- El problema del cliente que resuelve
- La tecnología de IA que la hace posible (visión por computadora, NLP, generación de imágenes, recomendación en tiempo real)
- El flujo de interacción del cliente paso a paso
- Los momentos de sorpresa y deleite que crea
- Los KPIs de experiencia que mejoraría (tiempo en tienda, tasa de conversión, NPS, ticket medio)

Las cinco experiencias deben cubrir:
1. Probador virtual con IA para moda: cómo diseñar la interfaz para que sea fluida, realista y no invasiva
2. Asistente de compra por voz en tienda física: cómo integrar un agente conversacional con el inventario en tiempo real y el historial del cliente
3. Personalización visual de productos on-demand: interfaces para que el cliente diseñe o personalice un producto con sugerencias de IA en tiempo real
4. Navegación inteligente en supermercados: cómo una app con IA puede guiar al cliente por la tienda optimizando su ruta según su lista de compra, sus preferencias dietéticas y las ofertas del día
5. Post-compra inmersiva: cómo usar AR o experiencias digitales para añadir valor después de la venta (instrucciones de uso, recetas con los ingredientes comprados, matching de outfits con prendas ya en el armario)

Para cada concepto, incluye:
- Un wireframe descrito en texto con la estructura de pantallas o elementos físicos
- Las consideraciones de accesibilidad e inclusividad
- Los posibles puntos de fricción y cómo mitigarlos
- Una estimación de complejidad técnica (baja/media/alta) y tiempo mínimo de desarrollo

Cierra con una reflexión sobre los límites éticos del diseño de experiencias con IA en retail: privacidad de datos faciales, sesgos en sistemas de recomendación, y cómo diseñar con transparencia para que el cliente confíe en la tecnología en lugar de sentirse vigilado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Conceptualizar experiencias de compra innovadoras habilitadas por IA para retail omnicanal',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Scripts de ventas consultivas para e-commerce B2B con IA',
                'description'      => 'Genera argumentarios de venta personalizados para cerrar acuerdos de e-commerce corporativo usando análisis de IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en ventas B2B especializado en soluciones de e-commerce y retail technology. Necesito que me ayudes a construir un sistema de scripts de venta consultiva que use la IA para personalizar el argumentario según el tipo de cliente, su sector, su madurez digital y sus objeciones específicas.

**El contexto de ventas:**
Vendo soluciones de e-commerce avanzadas (plataforma, personalización, analítica) a empresas retail medianas y grandes con ticket de venta entre 50.000€ y 500.000€ anuales. El ciclo de venta es largo (3-9 meses) e involucra múltiples stakeholders: el CMO quiere conversión, el CTO quiere integración técnica, el CFO quiere ROI claro y el CEO quiere ventaja competitiva.

**Lo que necesito:**

Primero, diseña un framework de discovery para la primera reunión con el cliente, con preguntas abiertas que me ayuden a entender su situación actual en e-commerce, sus dolores principales, sus objetivos de negocio a 12 meses, y el proceso de decisión interno. Las preguntas deben ser lo suficientemente específicas para sector retail pero adaptables a subsectores (moda, electrónica, alimentación, hogar).

Segundo, crea cuatro versiones del argumentario central, una para cada perfil de stakeholder:
- Para el CMO: centrado en personalización, conversión, fidelización y lifetime value del cliente
- Para el CTO: centrado en arquitectura técnica, integraciones, escalabilidad, seguridad y time-to-market
- Para el CFO: centrado en ROI, payback period, reducción de costes operativos y benchmark de industria
- Para el CEO: centrado en ventaja competitiva, cuota de mercado, experiencia de cliente diferencial y visión a largo plazo

Para cada versión incluye: la apertura (primeras 60 segundos), los tres beneficios principales en el lenguaje de ese perfil, dos casos de éxito relevantes con métricas, y el cierre hacia el siguiente paso.

Tercero, dame respuestas a las diez objeciones más frecuentes en este tipo de venta:
- "Ya tenemos una plataforma y el coste de cambio es muy alto"
- "No tenemos presupuesto este año"
- "Necesitamos validarlo con IT primero"
- "¿Por qué vosotros y no Salesforce Commerce Cloud / Shopify Plus?"
- "Necesitamos referencias de empresas similares a nosotros"

Para cada objeción: reconoce la preocupación, reformúlala en positivo, da la respuesta con datos y cierra con una pregunta que retome el control de la conversación.

Cuarto, diseña el email de seguimiento post-reunión que maximice la probabilidad de avanzar al siguiente paso. Debe ser breve, personalizable con una referencia específica de la conversación, incluir un insight de valor no mencionado en la reunión, y tener un CTA claro y de bajo compromiso.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear argumentarios de venta consultiva para soluciones de e-commerce B2B enterprise',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Roadmap de producto para plataforma de e-commerce con IA',
                'description'      => 'Define la estrategia y priorización de features de IA para una plataforma de e-commerce usando frameworks de product management.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager senior especializado en plataformas de e-commerce con capacidades de IA. Necesito construir un roadmap de producto sólido que integre funcionalidades de inteligencia artificial de forma coherente con la estrategia de negocio y las necesidades reales de los usuarios.

**Situación de partida:**
Tengo una plataforma de e-commerce con 500 merchants activos, ticket medio de 120€ y una tasa de conversión del 2,8%. Quiero incorporar IA para mejorar estos números en el próximo año fiscal. El equipo de producto tiene 4 personas y el equipo de desarrollo tiene 12 ingenieros. El presupuesto de producto para el año es de 800.000€.

**Lo que necesito de ti:**

Primero, ayúdame a hacer el discovery de oportunidades de IA: qué preguntas hacerle a los merchants para entender dónde la IA puede aportarles más valor, cómo analizar los datos de comportamiento de los compradores finales para identificar los mayores puntos de fricción en el funnel, y cómo benchmarkear qué features de IA tienen los competidores principales.

Segundo, dame un inventario de las 20 features de IA más impactantes para una plataforma de e-commerce, organizadas por área funcional:
- Búsqueda y descubrimiento de producto (búsqueda semántica, autocompletar inteligente, visual search)
- Recomendaciones y personalización (homepage, PDP, cart, email, push)
- Pricing y promociones (dynamic pricing, optimización de descuentos, detección de fraude)
- Operaciones (previsión de demanda, gestión de inventario, optimización logística)
- Atención al cliente (chatbot, clasificación de tickets, respuestas automáticas)

Tercero, aplica el framework de priorización RICE (Reach, Impact, Confidence, Effort) a las 20 features, con estimaciones justificadas para cada dimensión. Presenta el resultado en formato tabla y explica las tres features que deberían ir al top del roadmap y por qué.

Cuarto, diseña la estructura del roadmap trimestral para los próximos cuatro trimestres: qué entregar en cada trimestre, cuál es el tema o narrativa de cada quarter, cómo comunicarlo a los merchants y al equipo directivo, y qué métricas de éxito definir para cada fase.

Quinto, dame una plantilla de PRD (Product Requirements Document) para la primera feature del roadmap, con todos los apartados necesarios: problema a resolver, usuarios objetivo, métricas de éxito, solución propuesta, casos de uso detallados, criterios de aceptación y consideraciones técnicas de IA (datos necesarios, modelo recomendado, requisitos de latencia).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Construir roadmap de features IA para plataforma e-commerce con priorización basada en datos',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento en empresas retail con IA',
                'description'      => 'Usa IA para optimizar la selección, formación y retención de empleados en entornos retail con alta rotación.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en recursos humanos especializado en sector retail con experiencia en la aplicación de inteligencia artificial para la gestión del talento. El sector retail tiene una de las tasas de rotación de personal más altas del mercado laboral, y quiero usar la IA para transformar cómo atraemos, seleccionamos, formamos y retenemos a nuestros equipos.

**El contexto de la empresa:**
Somos una cadena de retail con 80 tiendas, 2.400 empleados, una tasa de rotación del 45% anual y un coste de reposición de cada empleado de aproximadamente 3.500€ (selección, formación, pérdida de productividad). El 70% de la plantilla son vendedores y cajeros, el 20% son responsables de tienda y el 10% son funciones corporativas.

**Lo que necesito que diseñes:**

Primero, un sistema de selección inteligente para el nivel de vendedor/cajero:
- Cómo usar IA para filtrar CVs y aplicaciones a escala sin perder candidatos valiosos
- Preguntas de entrevista estructurada validadas para predecir rendimiento y retención en retail
- Cómo diseñar un proceso de evaluación que sea rápido (máximo 48h desde aplicación hasta oferta) para competir con otros empleadores en el mercado
- Señales de alerta en la entrevista que predicen abandono temprano (antes de 3 meses)

Segundo, un programa de onboarding acelerado con IA:
- Cómo usar IA para personalizar el plan de formación según el perfil del nuevo empleado (experiencia previa, tienda asignada, temporada del año)
- Contenidos de microlearning para las primeras dos semanas: qué debe saber un vendedor el día 1, el día 7 y el día 30
- Cómo crear un sistema de "buddy digital" que responda dudas del nuevo empleado en tiempo real durante los primeros 90 días
- Métricas de éxito del onboarding: qué medir para saber si el proceso está funcionando antes de ver impacto en rotación

Tercero, un sistema de detección temprana de riesgo de abandono:
- Qué señales de comportamiento y datos operativos predicen que un empleado va a renunciar en los próximos 30-60 días
- Cómo construir un modelo de riesgo de abandono con los datos disponibles en un sistema de RRHH típico (asistencia, rendimiento, cambios de turno, feedback de manager)
- Qué intervenciones específicas han demostrado ser efectivas para retener empleados en riesgo en retail
- Cómo comunicar esto a los responsables de tienda de forma accionable sin crear estigma ni violar la confianza del empleado

Cuarto, un plan de desarrollo profesional para vendedores high performers: cómo identificarlos, qué trayectoria de carrera ofrecerles dentro de la cadena, y cómo usar la IA para personalizar su plan de desarrollo y mantenerlos comprometidos a largo plazo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Reducir rotación de personal retail usando IA en selección, onboarding y retención',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelos financieros para e-commerce con previsión IA',
                'description'      => 'Construye modelos de previsión financiera para negocios de e-commerce incorporando variables de IA y comportamiento de compra.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero senior especializado en e-commerce y retail digital con experiencia en modelos de previsión avanzados. Necesito construir un modelo financiero robusto para un negocio de e-commerce que incorpore variables de comportamiento de cliente y capacidades predictivas de IA para mejorar la precisión de las previsiones de revenue y costes.

**El negocio a modelar:**
E-commerce de moda con 85.000 clientes activos, GMV anual de 12 millones de euros, ticket medio de 87€, frecuencia de compra de 2,1 veces al año, margen bruto del 52% y un EBITDA del 8%. Estamos en fase de crecimiento y el board pide previsiones fiables a 12 y 24 meses para decisiones de inversión en stock, marketing y tecnología.

**Lo que necesito que construyas conmigo:**

Primero, diseña la estructura del modelo financiero de e-commerce, explicando qué drivers de revenue son específicos de este tipo de negocio y cómo modelarlos:
- Cohortes de clientes: cómo modelar la retención, reactivación y adquisición de nuevos clientes separadamente
- Estacionalidad: cómo incorporar los picos de Black Friday, Navidad, rebajas y la caída de enero en el modelo
- Mix de categorías: cómo modelar que el margen varía según la categoría de producto vendida
- Canal de adquisición: cómo modelar el coste de adquisición por canal (paid search, social, email, orgánico) y cómo cambia según el presupuesto de marketing

Segundo, explica cómo incorporar modelos de IA para mejorar la precisión de las previsiones:
- Previsión de demanda por SKU usando Prophet o modelos de series temporales: cómo ajustar el modelo a la estacionalidad del retail de moda
- Predicción de Customer Lifetime Value por cohorte de adquisición: qué variables incluir y cómo usar la predicción para decisiones de inversión en retención
- Modelo de probabilidad de recompra a 90 días: cómo usar el scoring para priorizar acciones de marketing y ajustar la previsión de revenue

Tercero, dame la estructura de un dashboard financiero mensual para el CFO y el board que incluya:
- Los tres o cuatro KPIs financieros más importantes de e-commerce y cómo calcularlos correctamente
- Cómo presentar la variación entre previsión y real con un análisis de las causas principales
- Cómo mostrar la salud del negocio a través de cohortes: qué le está pasando al LTV de los clientes adquiridos cada trimestre

Cuarto, ayúdame a construir el modelo de sensibilidad para las decisiones de inversión más frecuentes: qué pasa con el EBITDA si aumento el presupuesto de marketing un 30%, si el ticket medio cae un 10% por la presión competitiva, o si la tasa de devoluciones sube dos puntos porcentuales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir modelo financiero predictivo para e-commerce integrando IA en previsión de revenue',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal para e-commerce con IA personalización y pricing',
                'description'      => 'Analiza el marco regulatorio europeo aplicable a sistemas de IA en e-commerce: personalización, precios dinámicos y protección del consumidor.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho digital, protección de datos y regulación de inteligencia artificial en el contexto del comercio electrónico europeo. Necesito entender el marco legal completo que aplica cuando una empresa de e-commerce usa sistemas de IA para personalización, precios dinámicos y análisis de comportamiento de consumidores.

**El contexto regulatorio que necesito que analices:**

Primero, analiza la aplicación del RGPD al uso de IA en e-commerce:
- Qué datos de comportamiento del consumidor se pueden recoger y procesar sin consentimiento explícito bajo el fundamento de interés legítimo, y cuáles requieren consentimiento
- Cómo debe documentarse el análisis de impacto en protección de datos (DPIA) para un sistema de personalización con IA
- Qué información debe aparecer en la política de privacidad para cumplir con los requisitos de transparencia cuando se usa IA para tomar decisiones sobre precios o recomendaciones
- Cuáles son los riesgos de sanción y los casos reales de multas de la AEPD o autoridades europeas por uso incorrecto de datos en e-commerce

Segundo, analiza el impacto de la EU AI Act en sistemas de e-commerce:
- Cómo clasifica la EU AI Act los sistemas de IA usados en e-commerce (qué nivel de riesgo corresponde a personalización, dynamic pricing, detección de fraude)
- Qué obligaciones específicas de transparencia, documentación y supervisión humana aplican a cada nivel de riesgo
- Cuál es el calendario de implementación y cuándo deben estar los sistemas en cumplimiento

Tercero, analiza la normativa sobre precios y prácticas comerciales desleales:
- La Directiva Omnibus y sus implicaciones para el dynamic pricing: qué restricciones existen sobre cómo comunicar el precio de referencia, qué es un "precio anterior" válido y cómo evitar las prácticas de anchoring de precio engañosas
- Qué se considera discriminación de precio prohibida en Europa: cuándo diferenciar precios por perfil de usuario cruza la línea legal
- Cómo gestionar la transparencia de los sistemas de recomendación en plataformas bajo el Digital Services Act

Cuarto, dame un checklist legal práctico de 20 puntos que cualquier e-commerce europeo que use IA debe revisar antes de lanzar un sistema de personalización o pricing dinámico, ordenado por nivel de urgencia regulatoria.

Incluye recomendaciones sobre documentación interna mínima que debería tener cualquier empresa que quiera demostrar cumplimiento proactivo ante una inspección regulatoria.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Garantizar cumplimiento legal de sistemas IA en e-commerce bajo RGPD, AI Act y Directiva Omnibus',
                'vote_score'       => 24,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente automatizada con IA para e-commerce',
                'description'      => 'Diseña un sistema de soporte al cliente inteligente para e-commerce que resuelva el 80% de consultas sin intervención humana.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en customer service y automatización de atención al cliente para e-commerce. Quiero diseñar e implementar un sistema de soporte automatizado con IA que resuelva la gran mayoría de las consultas de los compradores sin necesidad de intervención humana, manteniendo altos niveles de satisfacción y reduciendo los tiempos de respuesta a segundos.

**El contexto del negocio:**
E-commerce con 15.000 pedidos mensuales, un equipo de atención al cliente de 8 personas que recibe 3.200 tickets mensuales, con un tiempo medio de primera respuesta de 4 horas y un CSAT del 78%. Las principales categorías de consultas son: estado del pedido (35%), devoluciones y cambios (28%), problemas con el producto (20%), preguntas pre-venta (12%) y otros (5%).

**Lo que necesito que diseñes:**

Primero, la arquitectura completa del sistema de atención al cliente con IA:
- Cómo integrar el sistema con las fuentes de datos del e-commerce (OMS, CRM, sistema de logística, catálogo de productos) para que el agente IA tenga contexto completo del cliente y del pedido
- La lógica de triage y enrutamiento: cuándo el sistema debe resolver autónomamente, cuándo debe escalar al humano y con qué información de contexto para facilitar la resolución humana
- Cómo gestionar el canal omnicanal: chat en web, email, WhatsApp, redes sociales, con coherencia de conversación entre canales

Segundo, diseña el árbol de conversación y las respuestas para las cinco categorías de consulta más frecuentes. Para cada categoría:
- Define el flujo conversacional con ramificaciones según la respuesta del cliente
- Escribe las plantillas de respuesta en español con tono empático y profesional
- Define las acciones que el sistema puede ejecutar autónomamente (cancelar pedido, iniciar devolución, emitir vale de compensación, reenviar email de confirmación)
- Define los límites: en qué situaciones debe escalar a un humano

Tercero, diseña el sistema de mejora continua:
- Cómo analizar los tickets escalados a humanos para identificar conversaciones que la IA debería poder resolver en el futuro
- Cómo usar el feedback de CSAT para detectar qué respuestas del sistema están generando insatisfacción
- Cómo construir una base de conocimiento dinámica que el sistema use para responder preguntas sobre políticas, productos y procedimientos
- Qué métricas usar para medir el rendimiento del sistema: tasa de resolución automática, CSAT de conversaciones IA vs humano, coste por ticket, tiempo de primera respuesta

Cuarto, dame tres ejemplos completos de conversación (inicio a fin) para los escenarios más complejos: un cliente que quiere devolver un producto fuera de plazo, un cliente insatisfecho con un producto que no coincide con la descripción, y un cliente que no ha recibido su pedido tras 15 días. Para cada conversación, muestra el diálogo completo y explica las decisiones que toma el sistema en cada punto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Automatizar el 80% de consultas de atención al cliente en e-commerce con IA conversacional',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Estrategia de e-commerce para freelancers y creadores con IA',
                'description'      => 'Lanza y escala una tienda online de productos digitales o físicos como freelancer usando IA para automatizar operaciones y marketing.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocios digitales especializado en ayudar a freelancers y creadores independientes a lanzar y escalar un negocio de e-commerce usando inteligencia artificial para operar de forma eficiente sin necesidad de un equipo grande.

**La situación del freelancer:**
Soy un profesional independiente (diseñador, consultor, fotógrafo, formador o creador de contenido) que quiero lanzar una tienda online para vender mis servicios empaquetados como productos, mis creaciones digitales (cursos, plantillas, fotos, diseños) o productos físicos de mi marca personal. Tengo tiempo limitado y presupuesto ajustado, así que necesito que la IA me ayude a hacer el trabajo de un equipo completo.

**Lo que necesito que me enseñes:**

Primero, ayúdame a definir mi estrategia de producto digital para e-commerce:
- Cómo identificar mis conocimientos o habilidades que tienen mayor demanda en el mercado y pueden convertirse en productos digitales rentables
- Los tres modelos de negocio de e-commerce que mejor funcionan para freelancers (productos digitales descargables, membresías y acceso a contenido, servicios empaquetados en formato producto)
- Cómo fijar el precio de mis productos digitales: qué metodología de pricing usar, cómo hacer research de mercado con IA y cómo posicionarme entre el low-cost y el premium

Segundo, diseña con IA toda la operación de mi tienda:
- Cómo usar IA para escribir todas las fichas de producto, la página de inicio, la sección "Sobre mí" y las FAQs en menos de dos horas
- Cómo crear imágenes de producto profesionales con IA generativa sin fotógrafo ni diseñador
- Cómo automatizar los emails transaccionales y las secuencias de email marketing post-compra para que trabajen solos
- Cómo usar IA para gestionar las respuestas a preguntas frecuentes de potenciales compradores

Tercero, crea mi estrategia de adquisición de clientes sin presupuesto publicitario:
- Cómo usar IA para generar contenido de redes sociales que dirija tráfico a mi tienda de forma consistente sin dedicar más de 30 minutos al día
- Cómo construir una estrategia de SEO para mi tienda usando IA: qué keywords atacar, cómo estructurar el blog, cómo generar contenido que posicione
- Cómo usar las reseñas y el user generated content para construir prueba social sin pagarlo

Cuarto, dame un plan de lanzamiento de 30 días para mi primera tienda online:
- Semana 1: definición de producto y configuración técnica básica
- Semana 2: creación de todos los contenidos con IA
- Semana 3: configuración de automatizaciones y tests
- Semana 4: lanzamiento, primeras ventas y ajustes

Para cada semana dame las tareas específicas, las herramientas de IA recomendadas para cada tarea y el tiempo estimado de dedicación diaria. El objetivo es que en 30 días tenga una tienda funcionando con al menos las primeras cinco ventas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Lanzar tienda online como freelancer usando IA para operar con mínimos recursos en 30 días',
                'vote_score'       => 45,
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
