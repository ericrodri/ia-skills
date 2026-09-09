<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills246Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Automatización de campañas con IA: de la segmentación al envío',
                'description'       => 'Diseña el sistema de automatización de marketing que usa IA para segmentar audiencias, personalizar mensajes y optimizar el timing de entrega en todos los canales, reduciendo el trabajo manual sin perder efectividad.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Marketing Automation Specialist con experiencia implementando sistemas de automatización de campañas basados en IA en empresas de e-commerce, SaaS y medios digitales. Quiero diseñar e implementar un sistema de automatización de campañas que use IA para hacer más eficiente y más efectivo el trabajo del equipo de marketing.

**Preguntas iniciales:**
1. ¿Cuál es el canal principal de comunicación con los clientes: email, SMS, notificaciones push, WhatsApp o un mix?
2. ¿Cuál es la herramienta de automatización de marketing actual (HubSpot, Klaviyo, Braze, ActiveCampaign, Salesforce Marketing Cloud)?
3. ¿Cuántos contactos tiene la base de datos y qué datos tienes disponibles sobre cada contacto (comportamiento de compra, navegación en el sitio, interacciones con emails anteriores)?
4. ¿Cuál es el mayor problema que quieres resolver con la automatización: la falta de personalización, la cantidad de tiempo dedicado a crear campañas manuales o la incapacidad de reaccionar a comportamientos en tiempo real?

**SEGMENTACIÓN CON IA:**

LA SEGMENTACIÓN TRADICIONAL Y SUS LIMITACIONES
La segmentación tradicional de marketing usa criterios estáticos (demografía, historial de compra, ubicación) que capturan una foto del cliente en el pasado. La IA permite una segmentación dinámica basada en el comportamiento actual y en la predicción del comportamiento futuro. Ayúdame a diseñar el sistema de segmentación con IA:

SEGMENTACIÓN PREDICTIVA
Las herramientas de IA pueden predecir el comportamiento futuro de cada contacto basándose en patrones históricos: la probabilidad de compra en los próximos siete días, el riesgo de abandono (churn), el valor esperado del ciclo de vida del cliente y la propensión a responder a descuentos versus a mensajes de valor. Ayúdame a identificar qué modelos predictivos son más relevantes para mi negocio y cómo integrarlos en el sistema de segmentación.

CLUSTERING AUTOMÁTICO
Los algoritmos de clustering (K-means, DBSCAN) pueden identificar segmentos de clientes de manera automática basándose en cientos de variables de comportamiento, encontrando patrones que el analista humano nunca identificaría manualmente. Ayúdame a diseñar el proceso de clustering automático de la base de datos: con qué frecuencia se actualiza, qué variables se incluyen y cómo se traducen los clusters en estrategias de comunicación diferenciadas.

**PERSONALIZACIÓN DE MENSAJES CON IA:**

GENERACIÓN DE COPY PERSONALIZADO
Los modelos de lenguaje pueden generar variantes de copy personalizadas para cada segmento, o incluso para cada individuo, basándose en el historial de interacciones y las preferencias comunicadas. Ayúdame a diseñar el sistema de generación de copy con IA: cómo definir el tono de voz de la marca para que la IA lo replique, cómo generar variantes A/B de manera automática y cómo establecer el proceso de revisión humana que garantiza la calidad antes del envío.

PERSONALIZACIÓN DINÁMICA DEL CONTENIDO
Más allá del copy, la IA puede personalizar el contenido completo del email o de la notificación: los productos que se muestran (recomendación personalizada), las imágenes (adaptadas a la categoría de preferencia del usuario), el call to action (optimizado para el segmento) y el asunto (el que tiene mayor probabilidad de apertura para ese usuario específico). Ayúdame a diseñar el sistema de personalización dinámica del contenido para mi herramienta de automatización.

**OPTIMIZACIÓN DEL TIMING:**

SEND TIME OPTIMIZATION
El momento de envío de una comunicación puede ser la diferencia entre una tasa de apertura del 15% y una del 35%. Las herramientas de IA analizan el historial de interacciones de cada contacto para predecir el momento del día y el día de la semana en que tiene mayor probabilidad de abrir y hacer clic. Ayúdame a implementar el send time optimization en mis campañas: qué herramientas lo tienen nativo, cómo configurarlo y cómo medir el impacto.

FREQUENCY OPTIMIZATION
Enviar demasiado genera bajas; enviar demasiado poco genera clientes que se olvidan del producto. La IA puede optimizar la frecuencia de comunicación para cada contacto basándose en su comportamiento: los contactos muy activos pueden recibir más comunicaciones, los inactivos necesitan reactivación antes de recibir campañas regulares. Ayúdame a diseñar el sistema de frequency optimization que maximiza el engagement sin aumentar las bajas.

**LOS FLUJOS AUTOMATIZADOS CON IA:**

EL FLUJO DE BIENVENIDA OPTIMIZADO
El flujo de bienvenida es la serie de comunicaciones que recibe un nuevo suscriptor o cliente en los primeros días. Con IA, este flujo puede adaptarse al comportamiento del nuevo usuario: si hace clic en un email sobre una categoría específica de producto, el siguiente email se personaliza para esa categoría; si no abre los primeros emails, el sistema cambia el asunto y el timing antes del siguiente intento. Ayúdame a diseñar el flujo de bienvenida con IA que maximiza la activación.

EL FLUJO DE RECUPERACIÓN DE CARRITOS ABANDONADOS
Para los negocios de e-commerce, el flujo de recuperación de carritos abandonados es el de mayor ROI. Con IA, el flujo puede personalizar el mensaje de recuperación basándose en el valor del carrito, la categoría de productos, el historial de compra del cliente y el canal de adquisición. Ayúdame a diseñar el flujo de recuperación con IA que maximiza la conversión sin parecer intrusivo.

**LA MEDICIÓN DEL ROI DE LA AUTOMATIZACIÓN:**

LAS MÉTRICAS DE LA AUTOMATIZACIÓN
Cómo medir el impacto de la automatización de marketing con IA: el incremento en la tasa de apertura versus la segmentación manual, el incremento en la tasa de conversión versus el email no personalizado, el ahorro de tiempo del equipo (horas de trabajo manual eliminadas) y el revenue adicional generado por los flujos automatizados. Ayúdame a construir el modelo de ROI de la inversión en automatización.

Dame el plan de implementación completo del sistema de automatización de campañas con IA que el equipo de marketing puede implementar en los próximos noventa días.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Implementación de automatización de campañas de marketing con IA: segmentación, personalización y timing',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'CI/CD con IA: code review automático y detección de bugs',
                'description'       => 'Integra herramientas de IA en el pipeline de CI/CD para automatizar el code review, detectar bugs antes de que lleguen a producción y acelerar el ciclo de entrega del equipo de ingeniería.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un DevOps Engineer o Platform Engineer con experiencia integrando herramientas de IA en los pipelines de CI/CD de equipos de ingeniería de software en producción. Quiero diseñar e implementar el sistema de CI/CD con IA que automatiza las tareas repetitivas del code review, detecta categorías de bugs antes del despliegue y acelera el ciclo de entrega del equipo sin sacrificar la calidad.

**Preguntas iniciales:**
1. ¿Cuál es la plataforma de CI/CD actual (GitHub Actions, GitLab CI, Jenkins, CircleCI)?
2. ¿Cuál es el lenguaje o stack principal del equipo?
3. ¿Cuál es el mayor cuello de botella en el pipeline de entrega actual: el tiempo de review de PRs, la velocidad de los tests, los bugs que llegan a producción o la complejidad de los despliegues?
4. ¿El equipo ha probado herramientas de IA para el código (GitHub Copilot, Cursor, Codeium) o es la primera incursión en IA para el workflow de desarrollo?
5. ¿Cuántos PRs abre el equipo por semana y cuál es el tiempo medio de revisión de un PR?

**IA EN EL CODE REVIEW:**

EL PROBLEMA DEL CODE REVIEW MANUAL
El code review es la práctica que más tiempo consume en el ciclo de desarrollo (típicamente entre el 20% y el 30% del tiempo de un senior engineer) y la que más depende de la disponibilidad y la concentración del revisor. Un revisor cansado o distraído pierde bugs que una herramienta de IA captura consistentemente. Ayúdame a diseñar el sistema de code review asistido por IA:

HERRAMIENTAS DE CODE REVIEW CON IA
Las principales herramientas de code review automático con IA: CodeRabbit, GitHub Copilot Code Review, Qodo (anteriormente CodiumAI), Sourcegraph Cody y Amazon CodeGuru. Para cada una, dame el caso de uso ideal, las limitaciones principales, el precio aproximado y la facilidad de integración en GitHub o GitLab. Ayúdame a seleccionar la herramienta correcta para mi stack y mi equipo.

QUÉ PUEDE Y NO PUEDE REVISAR LA IA
La IA es excelente revisando categorías específicas de problemas: errores de lógica obvios, violaciones de los patrones de código establecidos, problemas de seguridad conocidos (SQL injection, XSS, gestión incorrecta de secretos), código duplicado y ausencia de tests. La IA no puede revisar el diseño de la arquitectura, la adecuación de la solución al problema de negocio o el impacto en el rendimiento en contextos complejos. Ayúdame a diseñar el flujo de review que combina la IA (para las categorías que automatizar) con el human review (para las que requieren juicio).

**DETECCIÓN AUTOMÁTICA DE BUGS:**

ANÁLISIS ESTÁTICO CON IA
El análisis estático del código (sin ejecutarlo) puede detectar categorías de bugs antes del commit: referencias a variables no inicializadas, condiciones de carrera en código concurrente, gestión incorrecta de errores (excepciones capturadas pero ignoradas), memory leaks en lenguajes con gestión manual de memoria. Ayúdame a integrar herramientas de análisis estático con capacidades de IA (SonarQube, Semgrep, Snyk) en el pipeline de CI que detienen el merge si encuentran problemas críticos.

TESTS GENERADOS POR IA
Una de las aplicaciones más impactantes de la IA en el pipeline de CI/CD es la generación automática de tests: dado un fragmento de código, la IA puede generar casos de test que cubren los casos límite que el developer podría pasar por alto. Herramientas como CodiumAI, GitHub Copilot y Diffblue Cover pueden generar tests unitarios automáticamente. Ayúdame a diseñar el flujo de generación de tests con IA que complementa los tests que escribe el equipo.

DETECCIÓN DE REGRESIONES CON IA
Los sistemas de IA pueden analizar los resultados históricos de los tests para identificar los tests que son más probables de fallar dado el código que ha cambiado (test impact analysis) y los que históricamente tienen resultados inestables (flaky tests). Esto permite al pipeline de CI ejecutar primero los tests más relevantes y ahorrar tiempo cuando la suite completa tarda demasiado. Ayúdame a implementar el test impact analysis en el pipeline.

**SEGURIDAD EN EL PIPELINE:**

SECURITY SCANNING AUTOMÁTICO
La integración de herramientas de seguridad en el pipeline de CI/CD (DevSecOps) permite detectar vulnerabilidades en el código, en las dependencias y en los contenedores antes de que lleguen a producción. Las herramientas con IA como Snyk, GitHub Advanced Security y Checkov pueden analizar el código, el Infrastructure as Code y las imágenes de Docker buscando vulnerabilidades conocidas y patrones de código inseguro. Ayúdame a diseñar el security gate del pipeline que bloquea los despliegues con vulnerabilidades críticas.

SECRET DETECTION
Uno de los errores más comunes y más peligrosos en el desarrollo es commitear secretos (API keys, contraseñas, tokens) al repositorio por accidente. Las herramientas de IA como GitGuardian, Gitleaks y el secret scanning de GitHub detectan patrones de secretos en el código antes del push o inmediatamente después. Ayúdame a implementar la detección automática de secretos como una capa de seguridad del pipeline.

**AUTOMATIZACIÓN DEL DESPLIEGUE:**

CANARY DEPLOYMENTS CON ANÁLISIS AUTOMÁTICO
Los canary deployments (desplegar a un pequeño porcentaje del tráfico primero) con análisis automático de métricas (error rate, latencia, conversión) permiten detectar problemas antes de que afecten a todos los usuarios. La IA puede analizar las métricas en tiempo real durante el canary deployment y tomar la decisión de promover o hacer rollback automáticamente basándose en umbrales predefinidos. Ayúdame a diseñar este sistema de despliegue inteligente.

**MÉTRICAS DEL PIPELINE CON IA:**

Dame el cuadro de mando del pipeline de CI/CD con IA que el equipo revisa semanalmente: el tiempo medio de feedback del pipeline, el número de bugs detectados automáticamente versus los detectados en producción, la cobertura de tests generados por IA versus escritos manualmente y el tiempo de review de PRs antes y después de la implementación de la IA.

Dame el plan de implementación completo del sistema de CI/CD con IA que el equipo puede desplegar en los próximos sesenta días con un impacto medible en la velocidad y la calidad de la entrega.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Integración de IA en pipeline CI/CD: code review automático y detección de bugs',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Design automation: generar variantes y assets con IA',
                'description'       => 'Integra herramientas de IA en el flujo de trabajo del equipo de diseño para generar variantes, crear assets en múltiples formatos y acelerar las tareas repetitivas sin sacrificar la calidad creativa.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Design Lead o Creative Director con experiencia integrando herramientas de IA generativa en los flujos de trabajo de equipos de diseño UI/UX, branding y comunicación visual. Quiero diseñar el sistema de automatización del diseño con IA que acelera las tareas repetitivas del equipo, genera variantes de manera eficiente y libera tiempo para el trabajo creativo de mayor valor.

**Preguntas iniciales:**
1. ¿Cuál es el tipo principal de diseño del equipo: UI/UX de producto digital, branding y comunicación, diseño editorial o publicidad?
2. ¿Cuáles son las herramientas de diseño que usa el equipo actualmente (Figma, Adobe Creative Suite, Sketch, Canva)?
3. ¿Cuáles son las tareas más repetitivas y que más tiempo consumen del equipo: crear variantes para diferentes formatos, adaptar campañas para diferentes mercados, producir assets para las redes sociales o generar imágenes para el contenido?
4. ¿El equipo tiene experiencia con herramientas de IA generativa (Midjourney, DALL-E, Adobe Firefly, Stable Diffusion) o es la primera vez que las considera?

**LAS OPORTUNIDADES DE AUTOMATIZACIÓN EN DISEÑO:**

IDENTIFICAR LAS TAREAS CON MAYOR POTENCIAL DE AUTOMATIZACIÓN
Antes de implementar herramientas de IA, hay que identificar qué tareas del flujo de trabajo de diseño tienen mayor potencial de automatización. Las mejores candidatas son las tareas que son repetitivas (el mismo proceso aplicado muchas veces), que no requieren criterio creativo diferencial (adaptar un banner a veinte tamaños distintos) y que consumen tiempo desproporcionado al valor que generan. Ayúdame a mapear el flujo de trabajo del equipo de diseño e identificar las tres a cinco tareas con mayor potencial de automatización con IA.

**GENERACIÓN DE VARIANTES CON IA:**

VARIANTES DE COPY Y VISUALES PARA A/B TESTING
El A/B testing de diseño requiere múltiples variantes del mismo asset: diferentes versiones del headline, diferentes imágenes de fondo, diferentes disposiciones del CTA. La IA puede generar estas variantes en minutos en lugar de días. Ayúdame a diseñar el flujo de trabajo de generación de variantes con IA: cómo definir los parámetros de variación que respetan la identidad de marca, cómo usar herramientas de IA generativa (Adobe Firefly, Midjourney con referencias de estilo, DALL-E 3) para generar las variantes visuales y cómo integrar con la herramienta de A/B testing.

ADAPTACIÓN DE ASSETS A MÚLTIPLES FORMATOS
Una de las tareas más repetitivas del diseño de comunicación es adaptar una pieza creativa a los múltiples formatos requeridos: la misma campaña en formato horizontal para web, cuadrado para Instagram, vertical para Stories, banner para display. La IA puede automatizar gran parte de este proceso. Ayúdame a diseñar el flujo de adaptación de assets con IA usando herramientas como Adobe Express con Firefly, Canva Pro con IA generativa o scripts de Figma con APIs de IA.

LOCALIZACIÓN VISUAL PARA DIFERENTES MERCADOS
Cuando el equipo de diseño necesita adaptar assets visuales para diferentes mercados o idiomas, la IA puede automatizar la sustitución de texto, la adaptación de imágenes a contextos culturales diferentes y la verificación de que los elementos visuales son apropiados para cada mercado. Ayúdame a diseñar el flujo de localización visual con IA.

**HERRAMIENTAS DE IA PARA EL DISEÑO:**

IA PARA LA GENERACIÓN DE IMÁGENES
Las herramientas de generación de imágenes con IA (Midjourney, DALL-E 3, Adobe Firefly, Stable Diffusion) han alcanzado un nivel de calidad que permite usarlas en producción para ciertos tipos de imágenes: fotografías de producto en contexto, fondos y texturas, ilustraciones en un estilo consistente y concepto art para exploración creativa. Ayúdame a definir los casos de uso donde la IA generativa produce imágenes de calidad suficiente para mi contexto y los casos donde la fotografía o la ilustración manual sigue siendo necesaria.

IA EN FIGMA
El ecosistema de plugins de IA en Figma ha crecido enormemente: Figma AI nativo (renaming layers, generación de assets, buscar y reemplazar), Magician AI (generación de iconos y texto), Builder.io (conversión de diseños a código) y plugins de handoff automático. Ayúdame a seleccionar los plugins de IA para Figma que mayor impacto tienen en el flujo de trabajo de mi equipo.

DESIGN SYSTEM CON IA
La IA puede ayudar a mantener la consistencia del design system: detectar cuando un diseñador ha usado un componente que no está en la librería, sugerir el componente correcto del design system que resuelve el caso de uso, y generar automáticamente las variantes de un componente cuando se añaden nuevos estados o tamaños. Ayúdame a diseñar el flujo de mantenimiento del design system con IA.

**EL FLUJO DE TRABAJO CON IA INTEGRADA:**

CÓMO INTRODUCIR LA IA SIN RESISTENCIA DEL EQUIPO
La introducción de herramientas de IA en equipos de diseño puede generar resistencia si se percibe como una amenaza al rol creativo. Ayúdame a diseñar el plan de adopción que presenta la IA como un acelerador del trabajo creativo, no como un sustituto del diseñador: cómo demostrar el valor con casos de uso concretos, cómo capacitar al equipo en el prompting efectivo para herramientas de IA y cómo crear los guidelines de uso de IA que garantizan la consistencia de la calidad.

EL PROCESO DE REVISIÓN HUMANA
La IA puede generar rápidamente, pero el criterio de calidad y la coherencia con la identidad de marca requieren revisión humana. Ayúdame a diseñar el proceso de revisión de assets generados con IA: los criterios de calidad mínimos, el checklist de coherencia de marca y el proceso de iteración cuando el resultado de la IA no cumple los estándares.

**MEDICIÓN DEL IMPACTO:**

Las métricas que demuestran el impacto de la automatización de diseño con IA: la reducción del tiempo de producción de assets, el aumento del número de variantes generadas por campaña, la reducción del coste por asset y la liberación de tiempo del equipo para el trabajo creativo estratégico. Ayúdame a construir el antes y el después de la implementación de IA en el equipo de diseño.

Dame el plan de implementación completo de la automatización de diseño con IA que el equipo puede adoptar de manera gradual en los próximos tres meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Automatización del flujo de trabajo de diseño con IA generativa: variantes, assets y adaptaciones',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sales automation: prospección, seguimiento y CRM con IA',
                'description'       => 'Implementa el sistema de automatización de ventas con IA que elimina las tareas repetitivas del equipo comercial: la prospección automatizada, los seguimientos personalizados y el mantenimiento del CRM sin fricción.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Revenue Operations Manager o Sales Automation Specialist con experiencia implementando sistemas de automatización de ventas B2B en equipos comerciales que han necesitado hacer más con menos sin perder la calidad de la relación con el cliente. Quiero diseñar e implementar el sistema de automatización de ventas con IA que libera tiempo al equipo comercial para el trabajo de mayor valor: las conversaciones con los clientes y el cierre de deals.

**Preguntas iniciales:**
1. ¿Cuál es el CRM del equipo (Salesforce, HubSpot, Pipedrive, etc.) y el nivel de adopción actual?
2. ¿Cuál es el modelo de ventas: inbound (los leads llegan), outbound (el equipo prospecciona activamente) o mixto?
3. ¿Cuáles son las tareas que más tiempo consumen al equipo de ventas actualmente: la prospección, el seguimiento de leads, la actualización del CRM, la preparación de propuestas o los reportes?
4. ¿El equipo ha probado herramientas de IA para ventas (Apollo, Outreach, Gong, Lavender, Clay) o es la primera exploración?

**AUTOMATIZACIÓN DE LA PROSPECCIÓN:**

EL PROBLEMA DE LA PROSPECCIÓN MANUAL
La prospección manual (buscar prospectos, encontrar sus datos de contacto, verificar que son relevantes y escribir el primer mensaje personalizado) consume entre el 40% y el 60% del tiempo de los SDRs. La IA puede automatizar gran parte de este proceso sin perder la personalización que hace que el outreach funcione.

CONSTRUCCIÓN AUTOMÁTICA DE LISTAS DE PROSPECTOS
Las herramientas de IA como Clay, Apollo, LinkedIn Sales Navigator con IA y ZoomInfo pueden construir listas de prospectos que cumplen criterios muy específicos (sector, tamaño de empresa, tecnología que usan, señales de compra recientes como contrataciones, rondas de financiación o lanzamientos de producto) de manera automática. Ayúdame a diseñar el proceso de construcción de listas con IA: los criterios del ICP (Ideal Customer Profile) que programo, las fuentes de datos que combino y cómo verifico la calidad de los datos.

PERSONALIZACIÓN DEL OUTREACH A ESCALA
El mayor problema del outreach de email en frío es que la personalización genuina no escala: escribir un email realmente personalizado para cien prospectos tarda días. Las herramientas de IA como Clay con Claude, Lavender y Smartwriter pueden generar primeros emails personalizados a escala, usando datos del LinkedIn del prospecto, de la web de la empresa y de las noticias recientes para construir un mensaje relevante. Ayúdame a diseñar la secuencia de outreach automatizado con personalización de IA: cuántos toques en cuántos días, qué canal en cada toque (email, LinkedIn, teléfono) y cómo la IA personaliza cada mensaje.

**AUTOMATIZACIÓN DEL SEGUIMIENTO:**

LAS SECUENCIAS DE NURTURING AUTOMATIZADAS
Los leads que no están listos para comprar ahora necesitan un sistema de nurturing que los mantiene calientes hasta que llega su momento. La IA puede personalizar las secuencias de nurturing basándose en el comportamiento del lead (qué emails abre, qué páginas visita, qué contenido descarga) y en la etapa del ciclo de compra en que se encuentra. Ayúdame a diseñar las secuencias de nurturing con IA para los diferentes perfiles de leads.

LAS ALERTAS DE INTENCIÓN DE COMPRA
Las herramientas de intent data (Bombora, G2, TechTarget) combinadas con IA pueden detectar cuándo una empresa que está en el pipeline empieza a investigar activamente soluciones como la nuestra: búsquedas de palabras clave relevantes, visitas a páginas de comparativa, descargas de contenido de evaluación. Estas señales de intención son el mejor momento para contactar. Ayúdame a implementar el sistema de alertas de intent data que notifica al SDR o al AE cuándo es el momento óptimo para contactar.

**AUTOMATIZACIÓN DEL CRM:**

EL PROBLEMA DE LA HIGIENE DEL CRM
El mayor problema de los CRMs no es la herramienta sino los datos: los vendedores no actualizan el CRM con regularidad porque es tedioso, los datos se desactualizan rápidamente y las previsiones de ventas son imprecisas porque se basan en datos de mala calidad. La IA puede automatizar gran parte de la actualización del CRM.

CAPTURA AUTOMÁTICA DE ACTIVIDAD
Las herramientas de IA como Gong, Chorus, HubSpot Sales Hub y Salesforce Einstein pueden capturar automáticamente las actividades de ventas (emails enviados y recibidos, llamadas realizadas, reuniones celebradas) y asociarlas al registro correcto del CRM sin que el vendedor tenga que hacerlo manualmente. Ayúdame a implementar la captura automática de actividad en el CRM y a medir el impacto en la calidad de los datos.

ACTUALIZACIÓN AUTOMÁTICA DE OPORTUNIDADES
Las herramientas de IA pueden analizar el contenido de las llamadas y emails para actualizar automáticamente el stage del deal, detectar los next steps comprometidos y alertar al manager sobre los deals que están en riesgo porque el cliente ha dejado de responder. Herramientas como Gong Forecast y Clari usan IA para dar una visión más precisa del estado del pipeline que la que los vendedores reportan manualmente.

GENERACIÓN AUTOMÁTICA DE PROPUESTAS
Los modelos de lenguaje como Claude pueden generar borradores de propuestas personalizadas basándose en los datos del cliente en el CRM: el tamaño de la empresa, el sector, los problemas identificados en las llamadas de discovery y los casos de éxito más relevantes para ese perfil. Ayúdame a diseñar el flujo de generación de propuestas con IA que el AE personaliza y envía en minutos en lugar de horas.

**EL STACK TECNOLÓGICO DE VENTAS CON IA:**

Dame la arquitectura del stack tecnológico de ventas con IA recomendado para un equipo B2B de diez a cincuenta personas: la herramienta de prospección (Apollo o Clay), el CRM (HubSpot o Salesforce), la herramienta de secuencias (Outreach o Salesloft), la herramienta de inteligencia conversacional (Gong o Chorus) y las integraciones entre ellas. Para cada capa del stack, el caso de uso específico, el coste aproximado y la complejidad de implementación.

**MEDICIÓN DEL IMPACTO:**

Las métricas que demuestran el ROI de la automatización de ventas con IA: la reducción del tiempo de prospección por SDR, el aumento de la tasa de respuesta del outreach con personalización de IA, la mejora en la precisión del forecast y el tiempo de ciclo de ventas antes y después de la automatización.

Dame el plan de implementación del sistema de automatización de ventas con IA que el equipo comercial puede adoptar en los próximos noventa días.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Implementación de sales automation con IA: prospección, seguimiento y CRM automatizado',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product analytics automation: alertas y insights automáticos',
                'description'       => 'Diseña el sistema de analítica de producto automatizada que genera alertas proactivas, detecta anomalías en las métricas clave y entrega insights accionables al equipo sin que nadie tenga que buscarlos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Data Product Manager o Head of Product Analytics con experiencia construyendo sistemas de analítica automatizada en equipos de producto que han necesitado pasar de un modelo reactivo (alguien revisa los dashboards cuando hay tiempo) a un modelo proactivo (el sistema alerta cuando algo importante pasa). Quiero diseñar el sistema de product analytics automation que convierte los datos del producto en insights accionables de manera automática.

**Preguntas iniciales:**
1. ¿Cuáles son las herramientas de analytics que usa el equipo actualmente (Amplitude, Mixpanel, Heap, Segment, BigQuery, Datadog)?
2. ¿Cuáles son las métricas más críticas del producto que el equipo debería monitorizar de manera proactiva?
3. ¿Cuál es el mayor problema con el sistema de analytics actual: no hay alertas, hay demasiadas alertas que nadie atiende, los datos son de baja calidad o el equipo no tiene tiempo para analizar los dashboards?
4. ¿El equipo tiene capacidad técnica para construir pipelines de datos o necesita herramientas no-code?

**EL PROBLEMA DE LA ANALÍTICA REACTIVA:**

La mayoría de los equipos de producto operan en modo reactivo: alguien revisa los dashboards cuando tiene tiempo, y cuando hay un problema ya tiene días de antigüedad. Los sistemas de analítica automatizada cambian este modelo: el sistema monitoriza las métricas de manera continua y alerta al equipo cuando hay algo que requiere atención, antes de que el problema se vuelva crítico.

**DETECCIÓN AUTOMÁTICA DE ANOMALÍAS:**

QUÉ ES UNA ANOMALÍA EN LAS MÉTRICAS DE PRODUCTO
Una anomalía es cualquier desviación significativa del comportamiento esperado de una métrica: una caída repentina de la tasa de conversión, un aumento inesperado del error rate, un pico en el tiempo de carga de una página crítica o una caída en el número de usuarios activos diarios. La dificultad está en distinguir las anomalías reales (problemas que requieren acción) del ruido estadístico (variaciones normales). Ayúdame a definir los criterios de anomalía para las métricas más importantes de mi producto.

ALGORITMOS DE DETECCIÓN DE ANOMALÍAS
Las herramientas modernas de analytics usan algoritmos estadísticos y de ML para detectar anomalías de manera automática: modelos de series temporales (ARIMA, Prophet de Meta) que aprenden la estacionalidad de las métricas (el tráfico siempre cae los domingos, las conversiones siempre suben los viernes) y alertan cuando la métrica se desvía de la tendencia esperada ajustada por estacionalidad. Ayúdame a implementar la detección de anomalías automática usando las herramientas que ya tenemos disponibles.

AMPLITUDE, MIXPANEL Y SUS CAPACIDADES DE ALERTAS AUTOMÁTICAS
Las plataformas de analytics más comunes tienen capacidades nativas de alertas: Amplitude tiene Amplitude Audiences y Anomaly Detection, Mixpanel tiene alertas y Cohort Alerts. Ayúdame a configurar las alertas automáticas en mi herramienta de analytics: qué métricas monitorizar, qué umbrales configurar y a quién enviar las alertas (Slack, email, PagerDuty).

**GENERACIÓN AUTOMÁTICA DE INSIGHTS:**

LAS HERRAMIENTAS DE IA PARA PRODUCT ANALYTICS
Las herramientas de IA generativa están transformando el análisis de datos de producto: Amplitude AI, Mixpanel AI, ThoughtSpot (con análisis en lenguaje natural), y las integraciones de Claude o GPT-4 con BigQuery/Snowflake permiten hacer preguntas sobre los datos en lenguaje natural y recibir análisis automáticos. Ayúdame a diseñar el sistema de análisis con IA que el equipo de producto puede usar para obtener insights sin necesidad de escribir SQL.

EL WEEKLY DIGEST AUTOMÁTICO
En lugar de esperar a que alguien revise los dashboards, el sistema puede generar automáticamente un resumen semanal de las métricas más importantes, las anomalías detectadas, las cohortes que se están comportando de manera diferente y las features con mayor impacto en la retención. Este digest llega a Slack o al email del equipo cada lunes por la mañana. Ayúdame a diseñar el contenido y el formato del weekly digest automático de product analytics.

**ALERTAS DE FUNNEL Y CONVERSIÓN:**

MONITORIZACIÓN CONTINUA DEL FUNNEL DE CONVERSIÓN
El funnel de conversión (de visita a registro, de registro a activación, de activación a primer pago) puede tener caídas que tardan días en detectarse si no hay monitorización automática. Un error en el formulario de registro o un bug en el flujo de pago puede estar costando cientos de conversiones antes de que alguien lo detecte. Ayúdame a diseñar el sistema de monitorización del funnel con alertas en tiempo real que detecta caídas de conversión en menos de una hora.

FEATURE FLAGS Y MONITORIZACIÓN DE IMPACTO
Cuando el equipo lanza una feature con feature flags (desplegando gradualmente al 1%, 5%, 25%, 100% de los usuarios), el sistema de analytics debería monitorizar automáticamente el impacto de la feature en las métricas clave y alertar si hay degradación. Ayúdame a diseñar el sistema de monitorización de feature flags integrado con la plataforma de analytics.

**AUTOMATIZACIÓN DE REPORTES:**

LOS REPORTES QUE SE GENERAN SOLOS
Muchos de los reportes que el equipo de producto prepara manualmente (el reporte mensual de métricas para la dirección, el reporte de adopción de features del sprint, el análisis de cohortes de nuevos usuarios) pueden generarse automáticamente con la combinación de herramientas de BI (Looker, Metabase, Tableau) y plantillas de IA. Ayúdame a identificar qué reportes tienen mayor potencial de automatización y a diseñar el sistema que los genera automáticamente.

**LA ARQUITECTURA DEL SISTEMA DE ANALYTICS AUTOMATIZADO:**

Dame la arquitectura técnica del sistema de product analytics automatizado para un equipo de producto de tamaño medio: la capa de captura de eventos (Segment o equivalente), la capa de almacenamiento (BigQuery o Snowflake), la capa de análisis (Amplitude o Mixpanel), la capa de alertas (PagerDuty, Slack) y la capa de IA generativa (Claude o GPT-4 con acceso a los datos). Para cada capa, la herramienta recomendada, el coste aproximado y la complejidad de implementación.

Dame el plan de implementación del sistema de product analytics automation que transforma al equipo de producto de reactivo a proactivo en los próximos noventa días.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Implementación de product analytics automatizada: alertas, anomalías e insights proactivos',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'HR automation: screening de candidatos y onboarding con IA',
                'description'       => 'Implementa el sistema de automatización de RRHH que usa IA para agilizar el screening de candidatos, personalizar el onboarding y reducir el tiempo dedicado a tareas administrativas del área de personas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un HR Technology Manager o Director de Talento con experiencia implementando soluciones de automatización e IA en los procesos de adquisición de talento y onboarding de empleados en empresas de mediano y gran tamaño. Quiero diseñar e implementar el sistema de HR automation con IA que acelera el proceso de selección, mejora la experiencia del candidato y del nuevo empleado, y libera tiempo del equipo de RRHH para el trabajo de mayor valor estratégico.

**Preguntas iniciales:**
1. ¿Cuál es el ATS (Applicant Tracking System) actual del equipo (Greenhouse, Lever, Workday, SuccessFactors, SmartRecruiters)?
2. ¿Cuántas posiciones abre el equipo al mes y cuántos CVs recibe por posición en media?
3. ¿Cuáles son las tareas de selección y onboarding que más tiempo consumen al equipo de RRHH actualmente?
4. ¿Hay preocupaciones sobre el uso de IA en la selección de candidatos: sesgos algorítmicos, cumplimiento legal (GDPR, regulaciones de IA en RRHH) o resistencia del equipo?

**AUTOMATIZACIÓN DEL SCREENING DE CANDIDATOS:**

EL PROBLEMA DEL VOLUMEN EN SELECCIÓN
El mayor cuello de botella del proceso de selección es el screening inicial: revisar manualmente cientos de CVs para identificar los veinte o treinta candidatos que merecen una primera entrevista. Este proceso tarda horas por posición, es tedioso y está sujeto a sesgos inconscientes del revisor. La IA puede automatizar gran parte de este screening sin perder calidad.

SCREENING AUTOMÁTICO DE CVS CON IA
Las herramientas modernas de IA para selección (HireEZ, Eightfold AI, Workday Skills Cloud, y la integración de Claude o GPT-4 con el ATS) pueden analizar cada CV y compararlo con los criterios del job description de manera automática, generando una puntuación de adecuación y un resumen de los puntos clave del perfil. Ayúdame a diseñar el proceso de screening automático que mi equipo puede implementar sin crear sesgos algorítmicos:

CÓMO DEFINIR LOS CRITERIOS DE SCREENING
El screening automático es tan bueno como los criterios que definimos. Ayúdame a diseñar el framework de criterios de screening por tipo de posición: las competencias obligatorias (sin las cuales el candidato no avanza), las competencias deseables (que añaden puntos) y los red flags automáticos (patrones que descartan el candidato de manera objetiva). Incluye cómo documentar estos criterios de manera que sean auditables y libres de sesgos discriminatorios.

CHATBOTS DE SCREENING PARA EL CANDIDATO
Los chatbots de IA pueden realizar una primera conversación con el candidato de manera automática: hacer las preguntas de screening (disponibilidad, expectativas salariales, disponibilidad para viajar, motivación para el cambio) y recoger las respuestas para que el recruiter las revise. Esto acelera el proceso, mejora la experiencia del candidato (que recibe una respuesta más rápida) y da al recruiter información adicional antes de la primera llamada. Ayúdame a diseñar el flujo del chatbot de screening.

**AUTOMATIZACIÓN DE LA COMUNICACIÓN CON CANDIDATOS:**

LA COMUNICACIÓN AUTOMÁTICA EN CADA ETAPA
Uno de los mayores problemas de experiencia del candidato es la falta de comunicación durante el proceso: el candidato no sabe en qué fase está, no sabe cuándo va a recibir una respuesta y frecuentemente no recibe ningún feedback cuando no avanza. La IA puede automatizar la comunicación en cada etapa del proceso sin que parezca un email de plantilla:

Los emails de confirmación de recepción de candidatura, de actualización de estado, de invitación a la siguiente fase y de rechazo con feedback personalizado (basado en el análisis del perfil) pueden generarse automáticamente con un tono cálido y relevante para cada candidato. Ayúdame a diseñar el sistema de comunicación automatizada que mejora la experiencia del candidato y reduce el tiempo del recruiter en tareas de comunicación.

**AUTOMATIZACIÓN DEL ONBOARDING:**

EL ONBOARDING PERSONALIZADO CON IA
El onboarding del nuevo empleado debería estar personalizado para su rol, su nivel de experiencia y su estilo de aprendizaje. Sin IA, los equipos de RRHH suelen usar un onboarding genérico para todos porque personalizar es demasiado costoso en tiempo. Con IA, la personalización escala: el sistema genera el plan de onboarding personalizado para cada nuevo empleado basándose en su rol, las competencias que trae y las que necesita desarrollar.

EL ASISTENTE DE ONBOARDING CON IA
Los chatbots de IA pueden actuar como asistentes de onboarding que responden las preguntas frecuentes del nuevo empleado en tiempo real (¿dónde encuentro la política de vacaciones?, ¿cómo solicito acceso a la herramienta X?, ¿a quién me dirijo para el tema Y?) sin que el equipo de RRHH tenga que responder las mismas preguntas una y otra vez. Ayúdame a diseñar e implementar el asistente de onboarding con IA: qué base de conocimiento necesita, cómo se actualiza y cuándo escala al equipo de RRHH.

CHECKLISTS Y TAREAS AUTOMATIZADAS
El proceso de onboarding implica docenas de tareas coordinadas entre RRHH, IT, el manager y el nuevo empleado. Un sistema automatizado puede asignar estas tareas al responsable correcto, enviar recordatorios automáticos cuando hay tareas pendientes y dar visibilidad al manager sobre el estado del onboarding de su nuevo empleado. Ayúdame a automatizar el proceso de onboarding de principio a fin.

**CUMPLIMIENTO LEGAL Y ÉTICA EN LA IA DE RRHH:**

LOS RIESGOS DEL USO DE IA EN LA SELECCIÓN
La IA en la selección tiene riesgos legales y éticos que hay que gestionar: los algoritmos pueden perpetuar sesgos históricos si se entrenan con datos que reflejan decisiones del pasado, la regulación europea de IA (AI Act) clasifica los sistemas de IA para la selección de personas como de alto riesgo y requiere supervisión humana, y el GDPR requiere transparencia sobre el uso de datos de los candidatos. Ayúdame a diseñar el sistema de IA para selección que cumple con el marco regulatorio europeo y que incluye las salvaguardas contra sesgos.

Dame el plan de implementación completo del sistema de HR automation con IA para los procesos de selección y onboarding que el equipo puede desplegar en los próximos noventa días.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Automatización de selección y onboarding con IA: screening de candidatos y experiencia del empleado',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Finance automation: conciliación, reporting y detección de anomalías',
                'description'       => 'Implementa el sistema de automatización financiera con IA que elimina las tareas manuales del cierre mensual, automatiza la conciliación de cuentas y detecta anomalías en las transacciones antes de que sean un problema.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Director Financiero o Controller con experiencia implementando soluciones de automatización financiera con IA en empresas de mediano tamaño que han necesitado reducir el tiempo de cierre mensual, mejorar la calidad de los datos financieros y detectar irregularidades antes de que se conviertan en problemas. Quiero diseñar e implementar el sistema de finance automation con IA que libera al equipo financiero de las tareas repetitivas y de bajo valor para que pueda dedicarse al análisis estratégico.

**Preguntas iniciales:**
1. ¿Cuál es el ERP del equipo (SAP, Oracle, NetSuite, Sage, Business Central, Holded) y el nivel de automatización actual?
2. ¿Cuántos días tarda actualmente el cierre mensual desde el fin del mes hasta la disponibilidad de los estados financieros?
3. ¿Cuáles son las tareas manuales que más tiempo consumen al equipo en el proceso de cierre: la conciliación bancaria, la asignación de gastos, las provisiones, la consolidación o el reporting?
4. ¿El equipo tiene problemas con la detección tardía de errores o irregularidades en los datos financieros?

**AUTOMATIZACIÓN DE LA CONCILIACIÓN:**

LA CONCILIACIÓN BANCARIA AUTOMÁTICA
La conciliación bancaria es una de las tareas más repetitivas del equipo de contabilidad: comparar las transacciones del extracto bancario con los registros en el ERP para identificar las diferencias. Con las herramientas de automatización actuales (módulos de conciliación de los ERPs modernos, herramientas específicas como AutoRec o la API del banco conectada al ERP), esta tarea puede reducirse de días a horas. Ayúdame a diseñar el proceso de conciliación bancaria automatizada: la configuración de las reglas de matching (qué criterios usa el sistema para parear una transacción bancaria con un registro del ERP), la gestión de las excepciones (las transacciones que no matchean automáticamente) y la validación final del equipo.

CONCILIACIÓN INTERCOMPAÑÍA
Para grupos empresariales con múltiples entidades, la conciliación de las transacciones intercompañía (las ventas de una entidad del grupo a otra) es un proceso complejo y tedioso. La IA puede automatizar la identificación de las transacciones intercompañía, la verificación de que los importes coinciden en las dos entidades y la gestión de las diferencias de tipo de cambio. Ayúdame a diseñar el proceso de conciliación intercompañía automatizada.

MATCHING DE FACTURAS Y PEDIDOS
El proceso de tres vías (three-way matching: verificar que la factura del proveedor coincide con el pedido de compra y con el albarán de recepción) puede automatizarse con IA de reconocimiento de documentos. Las herramientas como Rossum, ABBYY Vantage o el módulo de AP automation de SAP pueden leer las facturas de los proveedores, extraer los datos relevantes y verificar automáticamente el three-way match. Ayúdame a implementar el AP automation que elimina la revisión manual de facturas.

**AUTOMATIZACIÓN DEL REPORTING:**

EL CIERRE MENSUAL ACELERADO
El cierre mensual sigue siendo uno de los procesos más lentos y estresantes del equipo financiero en muchas empresas. La automatización de las tareas repetitivas del cierre (la conciliación, la generación de asientos automáticos, la ejecución de los cálculos de provisiones) puede reducir el tiempo de cierre de diez a quince días a cuatro o cinco días. Ayúdame a mapear el proceso de cierre mensual de mi empresa e identificar las tareas con mayor potencial de automatización.

GENERACIÓN AUTOMÁTICA DE INFORMES
Las herramientas de BI modernas (Power BI, Tableau, Looker, Qlik) conectadas al ERP pueden generar los informes financieros estándar (P&L, Balance, Cash Flow Statement) de manera automática el día en que cierran los datos. Los informes de gestión personalizados para cada área de negocio (el informe de costes del equipo de marketing, el informe de rentabilidad por línea de producto) también pueden generarse y distribuirse automáticamente. Ayúdame a diseñar el sistema de reporting automático que entrega los informes correctos a las personas correctas en el momento correcto.

NARRATIVA AUTOMÁTICA CON IA
La parte más laboriosa de la preparación de los informes financieros no es generar los números sino escribir la narrativa que los explica: por qué el margen ha bajado, qué ha impulsado el crecimiento del revenue, por qué el EBITDA se ha desviado del presupuesto. Los modelos de lenguaje como Claude pueden generar borradores de esta narrativa automáticamente, basándose en los datos del período, la comparación con el período anterior y el presupuesto. Ayúdame a diseñar el proceso de generación de narrativa financiera con IA que el CFO revisa y valida en minutos.

**DETECCIÓN AUTOMÁTICA DE ANOMALÍAS:**

DETECCIÓN DE FRAUDE Y ERRORES EN TRANSACCIONES
La IA puede monitorizar todas las transacciones financieras en tiempo real y alertar cuando detecta patrones anómalos: una transferencia a un beneficiario nuevo por un importe inusualmente alto, una factura duplicada, un gasto de un empleado que supera significativamente su historial o una transacción en un horario o desde una ubicación inusual. Ayúdame a implementar el sistema de detección de anomalías que reduce el riesgo de fraude y de errores no intencionados.

MONITORIZACIÓN CONTINUA DE KPIS FINANCIEROS
Además de las transacciones, la IA puede monitorizar los KPIs financieros de manera continua y alertar cuando hay desviaciones significativas: el margen bruto que cae por debajo del umbral, el DSO (days sales outstanding) que aumenta indicando problemas de cobro o el cash burn que acelera por encima del plan. Ayúdame a diseñar el sistema de alertas automáticas de KPIs financieros.

**EL STACK TECNOLÓGICO DE FINANCE AUTOMATION:**

Dame la arquitectura del stack de automatización financiera recomendado para una empresa de mediano tamaño: el ERP (con módulos de automatización nativos), las herramientas de AP automation, la plataforma de BI para el reporting, la herramienta de detección de anomalías y la IA generativa para la narrativa. Para cada capa, la opción recomendada según el presupuesto, la complejidad de implementación y el ROI esperado.

Dame el plan de implementación completo del sistema de finance automation con IA que el equipo financiero puede desplegar de manera progresiva en los próximos seis meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Automatización financiera con IA: conciliación, reporting automático y detección de anomalías',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal automation: revisión de contratos y due diligence con IA',
                'description'       => 'Implementa el sistema de automatización legal con IA que acelera la revisión de contratos, identifica los riesgos clave de manera automática y reduce el tiempo de due diligence sin comprometer la calidad jurídica.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un General Counsel o Director de Legal Tech con experiencia implementando herramientas de IA para la automatización del trabajo jurídico en despachos de abogados y departamentos legales internos. Quiero diseñar e implementar el sistema de legal automation con IA que acelera la revisión de contratos, mejora la calidad del due diligence y libera tiempo de los abogados para el trabajo estratégico y de relación con el cliente.

**Preguntas iniciales:**
1. ¿El contexto es un despacho de abogados o un departamento legal interno?
2. ¿Cuáles son los tipos de contratos que el equipo revisa con más frecuencia y mayor volumen?
3. ¿Cuál es el proceso de due diligence más frecuente: M&A, inversión, financiación, adquisición de inmuebles u otro?
4. ¿El equipo ha probado herramientas de legal AI (Harvey AI, Kira Systems, LexisNexis, ContractPodAi) o es la primera exploración?
5. ¿Hay preocupaciones específicas sobre la confidencialidad de los datos de los clientes en herramientas de IA?

**AUTOMATIZACIÓN DE LA REVISIÓN DE CONTRATOS:**

EL PROBLEMA DEL VOLUMEN EN LA REVISIÓN DE CONTRATOS
La revisión de contratos consume una parte desproporcionada del tiempo de los equipos legales: un NDA puede tardar entre treinta minutos y dos horas dependiendo del abogado que lo revise, y en un departamento legal activo se pueden revisar decenas de NDAs a la semana. Multiplica eso por los contratos de proveedores, los acuerdos de servicio y los contratos de clientes, y el volumen es abrumador. La IA puede acelerar dramáticamente este proceso.

EXTRACCIÓN AUTOMÁTICA DE CLÁUSULAS CLAVE
Las herramientas de IA para contratos (Harvey AI, Kira Systems, Legalmation, SPELLBOOK) pueden analizar un contrato y extraer automáticamente las cláusulas más importantes: las partes del contrato, el objeto y el alcance, el precio y las condiciones de pago, las cláusulas de limitación de responsabilidad y garantías, las condiciones de rescisión, las cláusulas de confidencialidad, la ley aplicable y el fuero, y las obligaciones de cada parte. Ayúdame a implementar la extracción automática de cláusulas y a diseñar el formato del resumen que el abogado revisa en lugar del contrato completo.

IDENTIFICACIÓN AUTOMÁTICA DE RIESGOS
Más allá de la extracción, la IA puede identificar las cláusulas que se desvían de las posiciones estándar de la empresa o que representan un riesgo legal material: la cláusula de limitación de responsabilidad que está por debajo del mínimo aceptable, la ausencia de la cláusula de datos personales requerida por el GDPR, la cláusula de exclusividad que no tiene la excepción estándar o la condición de renovación automática sin período de preaviso razonable. Ayúdame a diseñar el playbook de riesgos contractuales que la IA usa para evaluar cada contrato.

REDLINE AUTOMÁTICO
Las herramientas de legal AI pueden generar automáticamente el redline de un contrato: comparar las cláusulas del contrato recibido con las posiciones estándar de la empresa y marcar las diferencias con las propuestas de cambio. Esto convierte el trabajo del abogado de revisor a editor: en lugar de construir el redline desde cero, el abogado revisa y ajusta el redline generado por la IA. Ayúdame a diseñar el proceso de redline automático con IA.

**AUTOMATIZACIÓN DEL DUE DILIGENCE:**

EL DUE DILIGENCE TRADICIONAL Y SUS INEFICIENCIAS
El due diligence legal en una operación de M&A o de financiación implica revisar miles de documentos: contratos con clientes y proveedores, acuerdos de empleados, registros de propiedad intelectual, permisos y licencias, litigios y reclamaciones. Un equipo de abogados puede tardar semanas en completar un due diligence que una herramienta de IA puede cubrir en días.

ORGANIZACIÓN Y CLASIFICACIÓN AUTOMÁTICA DEL DATA ROOM
El primer paso del due diligence es organizar el data room: clasificar los documentos por tipo, identificar los documentos faltantes (la lista de documentos solicitados versus los recibidos) y crear el índice del data room. La IA puede automatizar este proceso: leer cada documento, clasificarlo por categoría y tipo, identificar las partes del contrato y el vencimiento, y generar el índice automáticamente. Ayúdame a implementar la organización automática del data room con IA.

IDENTIFICACIÓN DE RED FLAGS EN EL DUE DILIGENCE
La IA puede analizar todo el data room buscando patrones de riesgo: los contratos con clientes que tienen cláusulas de change of control que dan derecho a rescindir en caso de cambio de control (relevante en una adquisición), los acuerdos de empleados clave sin cláusulas de no competencia, los litigios activos con potencial impacto material, los contratos vencidos que no han sido renovados formalmente y las obligaciones de confidencialidad que podrían verse afectadas por la operación. Ayúdame a diseñar el mapa de red flags que la IA busca automáticamente en el due diligence.

GENERACIÓN AUTOMÁTICA DEL INFORME DE DUE DILIGENCE
El informe de due diligence es el documento que resume los hallazgos, los riesgos identificados y las recomendaciones. Con IA, el primer borrador de este informe puede generarse automáticamente basándose en el análisis de los documentos del data room. Ayúdame a diseñar el proceso de generación del informe de due diligence con IA: la estructura del informe, los niveles de severidad de los riesgos y el proceso de revisión y validación por los abogados.

**HERRAMIENTAS DE LEGAL AI Y PRIVACIDAD:**

LAS PRINCIPALES HERRAMIENTAS DE LEGAL AI
Dame la comparativa de las principales herramientas de legal AI disponibles en el mercado europeo: Harvey AI, Luminance, Kira Systems, ContractPodAi y las soluciones de LexisNexis y Thomson Reuters. Para cada una: las funcionalidades principales, el nivel de seguridad y confidencialidad de los datos (especialmente importante para documentos de clientes), el precio aproximado y la facilidad de integración en el flujo de trabajo legal.

CUMPLIMIENTO DE LA CONFIDENCIALIDAD DEL CLIENTE
El mayor obstáculo para la adopción de IA en el mundo legal es la preocupación por la confidencialidad: los documentos de los clientes no pueden procesarse en herramientas cuyo modelo de IA se entrena con los datos de los usuarios. Ayúdame a diseñar la política de uso de herramientas de IA que garantiza la confidencialidad de los datos de los clientes: qué herramientas tienen contratos de no entrenamiento con datos de clientes, cómo anonimizar documentos antes de procesarlos con IA y qué categorías de documentos nunca se procesan con IA.

Dame el plan de implementación completo del sistema de legal automation con IA que el equipo jurídico puede adoptar de manera gradual y segura en los próximos seis meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Automatización legal con IA: revisión de contratos, due diligence y identificación de riesgos',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS automation: triaje de tickets y respuestas automatizadas',
                'description'       => 'Diseña el sistema de automatización de customer success que usa IA para clasificar y priorizar los tickets de soporte, generar respuestas automatizadas de calidad y escalar los casos que requieren intervención humana.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Director de Customer Success o Head of Support con experiencia implementando sistemas de automatización de CS en empresas SaaS B2B que han necesitado escalar su capacidad de atención al cliente sin aumentar proporcionalmente el equipo. Quiero diseñar e implementar el sistema de CS automation con IA que reduce el tiempo de resolución de tickets, mejora la consistencia de las respuestas y permite al equipo de CS concentrarse en las interacciones de mayor valor.

**Preguntas iniciales:**
1. ¿Cuál es el volumen de tickets semanal y cuál es el tiempo medio de primera respuesta y de resolución actual?
2. ¿Cuál es la plataforma de soporte (Zendesk, Intercom, Freshdesk, HubSpot Service Hub, Salesforce Service Cloud)?
3. ¿Cuál es la distribución por tipo de ticket: preguntas frecuentes, problemas técnicos, solicitudes de configuración, solicitudes de escalación?
4. ¿El equipo ya usa alguna automatización (respuestas automáticas, macros, reglas de triaje) o todo es manual?
5. ¿Cuál es la política de SLA actual (tiempo de primera respuesta y de resolución por tipo de ticket)?

**TRIAJE AUTOMÁTICO DE TICKETS:**

POR QUÉ EL TRIAJE AUTOMÁTICO ES TRANSFORMADOR
Sin triaje automático, cada ticket que llega requiere que un agente lo lea para decidir a quién asignarlo, con qué prioridad y qué tipo de respuesta requiere. En equipos con alto volumen de tickets, esta tarea de clasificación puede consumir el 20-30% del tiempo del equipo. La IA puede clasificar los tickets automáticamente en segundos con mayor consistencia que el humano.

CLASIFICACIÓN POR TIPO E INTENCIÓN
Las herramientas de IA (el modelo de IA nativo de Zendesk, Intercom AI, los clasificadores de Freshdesk o un modelo de IA personalizado vía API) pueden analizar el texto del ticket y clasificarlo automáticamente por tipo (pregunta de uso, bug técnico, solicitud de feature, problema de facturación, escalación de cuenta) y por intención del cliente (frustrado, neutral, urgente, evaluando la competencia). Ayúdame a diseñar el modelo de clasificación de tickets: las categorías, los criterios de cada categoría y cómo el modelo aprende de las correcciones del equipo.

PRIORIZACIÓN INTELIGENTE
Además de la clasificación, la IA puede priorizar los tickets basándose en múltiples factores: el valor del cliente (los tickets de cuentas de alto ACV tienen mayor prioridad), el sentimiento del mensaje (los clientes más frustrados tienen mayor urgencia), el tipo de problema (los bugs que bloquean el uso del producto tienen mayor prioridad que las preguntas de configuración) y el tiempo de espera acumulado. Ayúdame a diseñar el algoritmo de priorización que maximiza la satisfacción del cliente y la eficiencia del equipo.

ASIGNACIÓN AUTOMÁTICA AL AGENTE CORRECTO
La IA puede asignar automáticamente cada ticket al agente más adecuado basándose en la especialidad técnica requerida, la carga de trabajo actual de cada agente y la relación previa del agente con el cliente (el cliente siempre va al mismo agente de referencia cuando es posible). Ayúdame a diseñar el sistema de asignación inteligente de tickets.

**RESPUESTAS AUTOMATIZADAS CON IA:**

LOS TRES MODELOS DE RESPUESTA AUTOMATIZADA
En el CS automation existen tres modelos de respuesta según el nivel de automatización: la respuesta completamente automática (el sistema responde sin intervención humana para tickets simples y frecuentes), la respuesta asistida (la IA genera un borrador que el agente revisa y envía) y la respuesta sugerida (la IA sugiere recursos y respuestas similares que el agente puede usar como referencia). Ayúdame a definir qué modelo aplico a cada tipo de ticket en mi contexto.

BASE DE CONOCIMIENTO COMO FUENTE DE VERDAD
Las respuestas automáticas con IA son tan buenas como la base de conocimiento que las alimenta. Antes de implementar respuestas automáticas, necesito una base de conocimiento bien estructurada y actualizada: los artículos de ayuda, los tutoriales en vídeo, los troubleshooting guides y los FAQ. Ayúdame a auditar la base de conocimiento actual e identificar los gaps que debo llenar antes de activar las respuestas automáticas.

GENERACIÓN DE RESPUESTAS CON IA GENERATIVA
Las herramientas de IA generativa (Zendesk AI con modelos de lenguaje, Intercom Fin, Freshdesk Freddy AI, o la integración directa con Claude o GPT-4 vía API) pueden generar respuestas personalizadas a tickets usando la base de conocimiento como contexto. A diferencia de los chatbots de árbol de decisión, estas respuestas son conversacionales y se adaptan a la pregunta específica del cliente. Ayúdame a implementar la generación de respuestas con IA generativa: cómo conectar la base de conocimiento, cómo definir el tono de voz de la respuesta y cómo gestionar los casos donde la IA no tiene suficiente contexto para responder con confianza.

**ESCALACIÓN INTELIGENTE:**

CUÁNDO LA IA DEBE ESCALAR AL HUMANO
El sistema de respuestas automáticas solo funciona si la escalación al agente humano es fluida y oportuna. La IA debe escalar cuando: el cliente expresa frustración severa (riesgo de churn), el problema es técnicamente complejo y la confianza de la IA en su respuesta es baja, el cliente ha hecho la misma pregunta más de dos veces sin resolución, o el ticket viene de una cuenta de alto valor que tiene asignado un CSM. Ayúdame a diseñar las reglas de escalación que garantizan que los casos que requieren atención humana la reciben a tiempo.

HANDOFF CONTEXTUAL AL AGENTE HUMANO
Cuando la IA escala al agente humano, debe hacerlo con todo el contexto: un resumen del problema, las soluciones intentadas por la IA, el historial del cliente y la razón por la que se escala. Esto evita que el cliente tenga que repetir su problema y permite al agente retomar la conversación desde donde la dejó la IA. Ayúdame a diseñar el protocolo de handoff contextual entre la IA y el agente humano.

**MEDICIÓN DEL IMPACTO:**

Las métricas que demuestran el ROI del CS automation: la reducción del tiempo de primera respuesta, el porcentaje de tickets resueltos sin intervención humana (self-service rate), la CSAT de los tickets resueltos por IA versus por humanos, la reducción del tiempo de resolución total y el ahorro de horas del equipo de CS por semana.

Dame el plan de implementación completo del sistema de CS automation con IA que el equipo puede desplegar en los próximos sesenta días con un impacto medible en la eficiencia y la satisfacción del cliente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Automatización de CS con IA: triaje de tickets, respuestas automáticas y escalación inteligente',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Automatización del negocio freelance: propuestas, facturas y seguimiento',
                'description'       => 'Diseña el sistema de automatización del negocio freelance que genera propuestas personalizadas, automatiza la facturación y el seguimiento de pagos, y libera tiempo para el trabajo que realmente genera ingresos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de productividad especializado en freelancers y profesionales independientes con experiencia ayudando a consultores, diseñadores, developers y otros freelancers a automatizar las tareas administrativas de su negocio para poder dedicar más tiempo al trabajo facturable y al desarrollo de negocio. Quiero diseñar el sistema de automatización del negocio freelance con IA que elimina las tareas repetitivas de bajo valor y me permite operar de manera más eficiente y profesional.

**Preguntas iniciales:**
1. ¿Cuál es tu especialidad freelance y cuál es el proceso típico desde el primer contacto con un cliente hasta el cobro de la última factura?
2. ¿Cuáles son las tareas administrativas que más tiempo te consumen: crear propuestas, hacer seguimiento de clientes potenciales, gestionar facturas, perseguir pagos o reportar el avance a los clientes?
3. ¿Qué herramientas usas actualmente para gestionar tu negocio (Notion, Trello, HubSpot, Harvest, QuickBooks, Holded, una hoja de cálculo)?
4. ¿Cuántas horas a la semana dedicas aproximadamente a tareas administrativas del negocio versus al trabajo facturable?

**AUTOMATIZACIÓN DE LAS PROPUESTAS:**

EL PROBLEMA DE LAS PROPUESTAS MANUALES
Crear una propuesta personalizada para cada nuevo cliente potencial puede tardar entre dos y cuatro horas: entender el problema del cliente, estructurar la solución, estimar el tiempo y el coste, redactar el documento y formatearlo. Si estás en activo proceso de desarrollo de negocio, esto representa un coste de tiempo muy significativo. La IA puede reducir este tiempo a treinta a cuarenta y cinco minutos.

GENERACIÓN DE PROPUESTAS CON IA
El proceso de generación de propuestas con IA tiene tres fases: la recopilación de información del cliente (qué problema tienen, qué han intentado antes, cuál es el resultado que buscan, cuál es su plazo y su presupuesto), la generación del borrador con IA (usando esta información y las plantillas de propuestas anteriores como referencia) y la revisión y personalización por el freelance (ajustar el tono, verificar los números, añadir los casos de éxito más relevantes). Ayúdame a diseñar este proceso con las herramientas disponibles:

EL SISTEMA DE PLANTILLAS INTELIGENTES
Claude puede generar borradores de propuestas si le proporcionas la información correcta. Ayúdame a diseñar el prompt master de generación de propuestas para mi especialidad freelance: qué información necesito recopilar del cliente antes de escribir la propuesta, cómo estructuro el prompt para Claude incluyendo esa información y cuál es la estructura de propuesta que mejor convierte en mi contexto (resumen ejecutivo, diagnóstico del problema, solución propuesta, metodología, entregables, timeline, inversión, próximos pasos).

HERRAMIENTAS DE PROPUESTAS PARA FREELANCERS
Las herramientas especializadas en propuestas para freelancers (PandaDoc, Proposify, Better Proposals, Bonsai) tienen integraciones de IA que pueden generar borradores basados en plantillas y en la información del cliente. Ayúdame a seleccionar la herramienta correcta para mi contexto y a configurarla con mis plantillas.

**AUTOMATIZACIÓN DE LA FACTURACIÓN:**

EL CICLO DE FACTURACIÓN MANUAL
La mayoría de los freelancers tienen un proceso de facturación manual: al final de cada mes o de cada proyecto, crean la factura manualmente, la envían por email y esperan. Cuando el pago no llega, tienen que hacer seguimiento manualmente. Este proceso es tedioso, propenso a errores y frecuentemente se retrasa porque el freelance está ocupado con el trabajo cliente.

FACTURACIÓN AUTOMÁTICA CON HITOS
El sistema de facturación automatizada funciona de la siguiente manera: al inicio del proyecto, configuro los hitos de facturación (anticipo del 30% al inicio, 40% a mitad del proyecto, 30% al entregable final) con las fechas correspondientes. El sistema genera y envía automáticamente cada factura en la fecha configurada, sin que yo tenga que recordarlo. Herramientas como Bonsai, HoneyBook, FreshBooks o Holded tienen esta funcionalidad. Ayúdame a configurar el sistema de facturación por hitos para mis tipos de proyecto habituales.

SEGUIMIENTO AUTOMÁTICO DE PAGOS
Cuando una factura no se paga en el plazo acordado, el sistema debería enviar recordatorios automáticos: un primer recordatorio suave el día del vencimiento, un segundo más firme a los siete días y un tercero a los catorce días que incluye la mención del recargo por demora si está contemplado en el contrato. Ayúdame a diseñar la secuencia de recordatorios automáticos de pago que es efectiva sin dañar la relación con el cliente.

**AUTOMATIZACIÓN DEL SEGUIMIENTO DE CLIENTES POTENCIALES:**

EL CRM MÍNIMO DEL FREELANCE
El freelance activo tiene entre cinco y veinte conversaciones simultáneas en diferentes etapas: el prospecto con quien tuve una primera llamada, el cliente al que le envié una propuesta hace una semana, el cliente anterior al que quiero contactar para un proyecto nuevo. Sin un sistema de seguimiento, las oportunidades se pierden simplemente porque no recordé hacer el seguimiento a tiempo.

EL SISTEMA DE SEGUIMIENTO CON IA
Diseña conmigo un sistema de CRM mínimo para freelancers usando Notion, Airtable o HubSpot gratuito que: registra todas las conversaciones activas con una vista clara del pipeline, me recuerda automáticamente cuándo hacer seguimiento de cada oportunidad, genera el mensaje de seguimiento con IA cuando llega la notificación y me da una vista semanal del estado de mi pipeline.

**AUTOMATIZACIÓN DEL REPORTING A CLIENTES:**

ACTUALIZACIONES DE PROYECTO AUTOMÁTICAS
Los clientes que no tienen visibilidad sobre el avance del proyecto se ponen nerviosos y contactan más frecuentemente interrumpiendo el trabajo. Un sistema de actualizaciones automáticas semanales elimina esta ansiedad y profesionaliza la relación. Ayúdame a diseñar el sistema de actualizaciones automáticas de proyecto: qué información incluye el update semanal (avance respecto al plan, próximos pasos, cualquier bloqueo o decisión pendiente del cliente), cómo generar el borrador con IA y cómo enviarlo automáticamente.

**EL STACK DE AUTOMATIZACIÓN DEL FREELANCE:**

Dame la arquitectura del stack de herramientas de automatización para un freelance que quiere operar de manera eficiente y profesional con un presupuesto razonable: la herramienta de propuestas y contratos, el CRM para el pipeline de clientes potenciales, la herramienta de gestión de proyectos y seguimiento del tiempo, el sistema de facturación y cobro, y la IA generativa para la redacción. Para cada herramienta, la opción recomendada para un freelance con menos de diez clientes activos, la opción para más de diez y el coste mensual aproximado.

Dame el plan de implementación del sistema de automatización del negocio freelance que puedo poner en marcha en dos semanas y que me libera al menos cinco horas a la semana de trabajo administrativo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Automatización del negocio freelance: propuestas con IA, facturación y seguimiento de clientes',
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
