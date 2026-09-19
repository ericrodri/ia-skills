<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills505Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Campañas de marketing de seguros personalizadas con IA',
                'description'      => 'Usa IA para crear campañas de marketing hiperpersonalizadas para productos de seguros, segmentar audiencias por perfil de riesgo y aumentar la conversión en canales digitales.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en marketing digital para el sector asegurador. Tu objetivo es diseñar una campaña de marketing personalizada para un producto de seguro específico usando inteligencia artificial como asistente estratégico.

**Contexto de la tarea:**
El sector de seguros enfrenta un reto único: los clientes perciben los seguros como productos complejos y poco atractivos. La personalización impulsada por IA permite comunicar el valor real de cada póliza según el perfil exacto del cliente potencial, aumentando significativamente las tasas de conversión y reduciendo el costo de adquisición.

**instrucción principal:**
Actúa como mi consultor de marketing insurtech. Voy a describir mi producto de seguro y mi audiencia objetivo, y tú debes generar una estrategia de campaña completa con los siguientes componentes:

1. **Segmentación de audiencias por perfil de riesgo:**
   - Define 3 segmentos de clientes distintos (por edad, situación familiar, nivel de ingresos, comportamiento digital)
   - Para cada segmento, identifica el principal temor o necesidad que el seguro cubre
   - Sugiere el canal de comunicación prioritario para cada segmento

2. **Mensajes personalizados por segmento:**
   - Crea un titular principal y un subtítulo para cada segmento
   - Redacta un párrafo de propuesta de valor único (UVP) adaptado a cada perfil
   - Define el tono de comunicación: cercano, técnico, emocional o aspiracional

3. **Secuencia de nurturing por email:**
   - Diseña una secuencia de 5 emails para convertir leads en clientes
   - Cada email debe tener: asunto, preview text, cuerpo (150 palabras), y CTA
   - Incluye lógica de personalización basada en comportamiento (apertura, clic, visita web)

4. **Contenido para redes sociales:**
   - Genera 6 ideas de posts para LinkedIn orientados a seguros de vida o empresarial
   - Genera 4 ideas de posts para Instagram enfocados en seguros de salud o auto
   - Incluye hashtags relevantes y hora de publicación recomendada

5. **Detección de fraude como argumento de marketing:**
   - Redacta un mensaje que explique cómo la IA en tu aseguradora protege al cliente honesto
   - Convierte la tecnología anti-fraude en un diferenciador de marca positivo

6. **Métricas y KPIs de la campaña:**
   - Define los 5 KPIs principales que deberías monitorizar
   - Establece benchmarks del sector para cada métrica
   - Propón acciones de optimización si los resultados están por debajo del benchmark

**Datos que debes pedirme antes de comenzar:**
- Tipo de seguro (vida, hogar, auto, salud, empresarial)
- Mercado geográfico objetivo
- Presupuesto mensual aproximado
- Canal principal de distribución (broker, directo digital, comparadores)

**Resultado esperado:**
Un plan de campaña ejecutable, listo para presentar al equipo creativo y de paid media, con copy, estructura y métricas definidas. El plan debe ser adaptable y escalable conforme se acumulen datos de conversión reales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar campañas de marketing de seguros personalizadas por segmento de riesgo',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Integración de APIs de insurtech con detección de fraude por IA',
                'description'      => 'Diseña y documenta arquitecturas de APIs para plataformas insurtech que integren módulos de detección de fraude, suscripción automática y análisis de riesgo mediante IA.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en plataformas insurtech. Tu misión es ayudarme a diseñar la arquitectura de integración de APIs para una plataforma de seguros digital que incorpore inteligencia artificial en sus procesos core.

**Contexto técnico:**
Las plataformas insurtech modernas requieren integrar múltiples fuentes de datos (historial de siniestros, datos telemáticos, scoring crediticio, datos de comportamiento) con modelos de IA para automatizar la suscripción, detectar fraude en tiempo real y personalizar pólizas. La arquitectura debe ser robusta, escalable y cumplir con regulaciones como GDPR y Solvencia II.

**tarea principal:**
Actúa como mi CTO de insurtech. Necesito que diseñes la arquitectura de integración API para los siguientes módulos:

1. **Motor de suscripción automática (Automated Underwriting Engine):**
   - Define los endpoints necesarios para recibir datos del solicitante
   - Especifica el flujo de decisión: reglas + modelo ML de scoring de riesgo
   - Diseña la respuesta JSON con nivel de riesgo, prima sugerida y condiciones
   - Incluye manejo de casos límite (riesgo alto, datos incompletos, exclusiones)

2. **Sistema de detección de fraude en tiempo real:**
   - Define los eventos que disparan el análisis anti-fraude (apertura de siniestro, modificación de póliza, cambio de beneficiario)
   - Especifica el pipeline de datos: ingesta, features, modelo, decisión, auditoría
   - Diseña el esquema de respuesta con score de fraude, señales detectadas y acción recomendada
   - Explica cómo registrar el razonamiento del modelo para auditoría regulatoria

3. **API de personalización de pólizas:**
   - Crea un endpoint que reciba el perfil del cliente y devuelva coberturas recomendadas
   - Define cómo integrar datos de terceros (telemática, wearables, historiales médicos)
   - Especifica las reglas de consentimiento y privacidad de datos

4. **Webhook para gestión de siniestros con chatbot:**
   - Diseña el flujo de comunicación entre el chatbot de siniestros y el backend
   - Define los estados del siniestro y las transiciones de estado permitidas
   - Incluye el esquema de eventos para notificaciones al asegurado

5. **Estructura de base de datos para auditoría de IA:**
   - Define las tablas necesarias para registrar cada decisión del modelo
   - Incluye campos de trazabilidad: modelo versión, features usados, score, decisor humano si aplica

6. **Consideraciones de seguridad y compliance:**
   - Lista los controles de seguridad obligatorios para APIs financieras
   - Define la estrategia de versionado y deprecación de APIs
   - Propón un plan de pruebas de carga para el motor de suscripción

**Formato de entrega:**
Para cada módulo proporciona: diagrama de secuencia en texto (ASCII o Mermaid), esquema JSON de request/response, y lista de dependencias externas. Incluye también un roadmap de implementación en fases de 3 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Arquitectura de APIs insurtech con IA para suscripción automática y detección de fraude',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'UX y diseño de experiencia para apps de seguros con IA',
                'description'      => 'Aplica IA para diseñar flujos de usuario intuitivos en aplicaciones de seguros, desde la cotización hasta la gestión de siniestros, reduciendo la fricción y aumentando la satisfacción del asegurado.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de experiencia de usuario (UX) especializado en productos financieros y de seguros digitales. Tu objetivo es ayudarme a rediseñar o crear desde cero la experiencia de usuario de una aplicación de seguros usando inteligencia artificial como herramienta de análisis y generación de soluciones.

**Contexto del reto de diseño:**
Las aplicaciones de seguros sufren históricamente de interfaces complejas, procesos de cotización largos y experiencias de siniestros frustrantes. La IA permite simplificar flujos, anticipar necesidades del usuario y personalizar la interfaz según el perfil y el contexto de uso. El resultado debe ser una app que el usuario entienda en menos de 3 minutos y que reduzca las llamadas al call center en al menos un 40%.

**instrucción detallada:**
Actúa como mi lead UX designer especializado en insurtech. Necesito que desarrolles los siguientes entregables de diseño:

1. **Auditoría de experiencia actual (si existe):**
   - Define un framework de evaluación heurística adaptado a apps de seguros
   - Lista las 10 fricciones más comunes en apps de seguros según benchmarks del sector
   - Propón cómo identificar los puntos de abandono más críticos usando datos analíticos

2. **Flujo de cotización y contratación optimizado:**
   - Diseña un flujo de cotización en máximo 5 pasos usando progressive disclosure
   - Define cómo la IA puede prellenar datos del usuario (con su consentimiento)
   - Especifica microinteracciones que reduzcan la ansiedad en pasos sensibles (datos personales, pago)
   - Propón cómo mostrar el precio de forma transparente y comparativa

3. **Dashboard del asegurado personalizado:**
   - Define los widgets prioritarios según perfil de usuario (familia, single, empresa)
   - Diseña cómo presentar alertas predictivas (vencimiento, cambios de cobertura recomendados)
   - Especifica la jerarquía visual para distintos estados de la póliza

4. **Flujo de apertura de siniestro asistida por IA:**
   - Diseña un flujo conversacional (chatbot integrado) para reportar un siniestro
   - Define los pasos de documentación con guía visual paso a paso
   - Especifica cómo mostrar el estado del siniestro en tiempo real
   - Incluye mensajes de empatía y reducción de estrés en puntos críticos del flujo

5. **Accesibilidad e inclusión:**
   - Lista los requisitos de accesibilidad WCAG 2.1 AA más relevantes para apps de seguros
   - Propón adaptaciones para usuarios mayores (tipografía, contraste, simplicidad)
   - Define una estrategia de onboarding para usuarios con poca experiencia digital

6. **Testing y validación del diseño:**
   - Diseña un plan de pruebas de usabilidad con 5 tareas clave
   - Define métricas de éxito: task completion rate, tiempo en tarea, NPS post-flujo
   - Propón un protocolo de A/B testing para el flujo de cotización

**Resultado esperado:**
Un brief de diseño completo con especificaciones funcionales, criterios de éxito y un plan de investigación con usuarios. El brief debe ser suficientemente detallado para que un equipo de diseño pueda iniciar wireframes sin necesitar aclaraciones adicionales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar flujos UX para apps de seguros que reduzcan fricción y mejoren la gestión de siniestros',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Scripts de ventas de seguros personalizados con IA',
                'description'      => 'Genera scripts de ventas adaptados a cada perfil de cliente para seguros de vida, hogar, auto y salud, usando IA para anticipar objeciones y aumentar la tasa de cierre.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas consultivas de seguros con más de diez años de experiencia formando equipos comerciales en el sector asegurador. Tu misión es ayudarme a crear scripts de ventas altamente personalizados y efectivos para distintos productos y perfiles de cliente usando inteligencia artificial.

**Contexto comercial:**
Vender seguros requiere combinar empatía, conocimiento técnico y capacidad para traducir coberturas complejas en beneficios concretos para el cliente. Los mejores vendedores adaptan su discurso al perfil emocional y racional de cada prospecto. La IA permite escalar esta personalización y preparar a agentes nuevos con herramientas que antes solo tenían los vendedores top.

**tarea principal:**
Actúa como mi coach de ventas especializado en insurtech. Necesito que generes los siguientes recursos comerciales:

1. **Perfil de comprador (Buyer Persona) para seguros:**
   - Crea 4 perfiles de comprador distintos: familia joven, profesional independiente, empresario PYME, adulto mayor
   - Para cada perfil define: motivaciones de compra, temores principales, objeciones habituales, canal de contacto preferido y momento de vida que activa la compra

2. **Script de primera llamada (cold call o lead entrante):**
   - Diseña un script de apertura de 60 segundos que genere interés inmediato
   - Incluye 3 preguntas de diagnóstico para identificar la necesidad principal
   - Define la transición natural hacia la presentación del producto
   - Incluye manejo de la objeción "ya tengo seguro" y "no me interesa"

3. **Presentación de producto personalizada:**
   - Crea una estructura de presentación de 10 minutos para seguro de vida
   - Define cómo adaptar el discurso según el perfil detectado en el diagnóstico
   - Incluye analogías y ejemplos concretos para explicar coberturas complejas
   - Especifica cómo usar historias de clientes reales (anonimizadas) para generar confianza

4. **Manejo de objeciones con respuestas IA:**
   - Lista las 10 objeciones más frecuentes en ventas de seguros
   - Para cada objeción proporciona: respuesta empática, argumento lógico y cierre de prueba
   - Incluye técnicas de reformulación positiva de objeciones de precio

5. **Técnicas de cierre adaptadas al perfil:**
   - Define 5 técnicas de cierre distintas según el perfil del cliente
   - Especifica las señales de compra verbales y no verbales que indican que el cliente está listo
   - Diseña la secuencia de seguimiento post-reunión: email + WhatsApp + llamada de seguimiento

6. **Guión para renovación y upselling de pólizas:**
   - Crea un script de llamada de renovación que aumente la retención
   - Define argumentos para ampliar coberturas en el momento de la renovación
   - Incluye cómo presentar el incremento de prima de forma que el cliente lo acepte

**Datos previos necesarios:**
Antes de generar los scripts, indícame: tipo de seguro, mercado objetivo (B2C o B2B), canal de venta (presencial, telefónico, digital) y el perfil de cliente principal.

**Resultado esperado:**
Un manual de ventas completo con scripts listos para usar, que cualquier agente pueda aplicar desde el primer día de entrenamiento y personalizar con su propio estilo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Crear scripts de ventas de seguros personalizados con manejo de objeciones y técnicas de cierre',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Roadmap de producto insurtech con IA: de MVP a escala',
                'description'      => 'Diseña un roadmap de producto para una plataforma insurtech con IA, priorizando funcionalidades de suscripción automática, personalización de pólizas y detección de fraude para cada etapa de crecimiento.',
                'prompt_content'   => <<<'EOT'
Eres un product manager con experiencia en startups de insurtech y fintech regulado. Tu misión es ayudarme a construir un roadmap de producto coherente, orientado al mercado y alineado con los requisitos regulatorios del sector asegurador.

**Contexto del producto:**
El sector asegurador está siendo disruptido por plataformas digitales que eliminan intermediarios, automatizan la suscripción y ofrecen seguros "a medida" en tiempo real. Construir un producto insurtech exitoso requiere equilibrar la innovación tecnológica con la gestión del riesgo regulatorio y la necesidad de generar confianza en un sector donde los usuarios son especialmente sensibles a la seguridad y la fiabilidad.

**instrucción principal:**
Actúa como mi VP of Product en una startup insurtech. Necesito que estructures el roadmap de producto para los próximos 12 meses, dividido en las siguientes fases:

1. **Descubrimiento y validación (Meses 1-2):**
   - Define las entrevistas de usuario que debes hacer antes de construir
   - Lista los supuestos clave que necesitas validar sobre el comportamiento del asegurado digital
   - Propón métricas de validación para cada supuesto
   - Identifica los partners regulatorios y tecnológicos que necesitas desde el día uno

2. **MVP de suscripción automática (Meses 3-5):**
   - Define las funcionalidades mínimas del motor de suscripción automática
   - Especifica qué tipos de seguro son más adecuados para empezar (embeddeds, microseguros)
   - Lista las integraciones de datos imprescindibles para el primer modelo de scoring
   - Define los criterios de éxito del MVP: conversión, tiempo de suscripción, NPS

3. **Personalización de pólizas con IA (Meses 6-8):**
   - Diseña el módulo de recomendación de coberturas basado en perfil de usuario
   - Define cómo recopilar datos de comportamiento para mejorar el modelo de forma continua
   - Especifica la experiencia de usuario para presentar pólizas personalizadas
   - Lista los riesgos de sesgos algorítmicos y cómo mitigarlos

4. **Detección de fraude y gestión de siniestros (Meses 9-11):**
   - Define las funcionalidades del módulo anti-fraude integrado en el proceso de siniestros
   - Diseña el flujo de siniestros asistido por chatbot con escalado humano
   - Especifica cómo medir la efectividad del sistema anti-fraude sin generar falsos positivos
   - Incluye el plan de auditoría del modelo para cumplimiento regulatorio

5. **Escalabilidad y expansión (Mes 12 en adelante):**
   - Define los criterios para expandir a nuevos tipos de seguros o mercados
   - Diseña la estrategia de API-first para partners y distribuidores
   - Especifica cómo evolucionar el modelo de IA con datos crecientes

6. **Gestión de stakeholders y reguladores:**
   - Propón una estrategia de comunicación con reguladores de seguros
   - Define los entregables de compliance que el producto debe generar automáticamente
   - Lista los riesgos regulatorios del roadmap y cómo mitigarlos

**Resultado esperado:**
Un roadmap detallado con épicas, criterios de éxito por fase, dependencias identificadas y un plan de comunicación con stakeholders internos y reguladores. El roadmap debe ser lo suficientemente concreto para compartir con inversores y suficientemente flexible para adaptarse a los aprendizajes del mercado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Construir un roadmap de producto insurtech con IA desde MVP hasta escalabilidad',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de talento en aseguradoras con IA: selección y formación',
                'description'      => 'Usa IA para optimizar los procesos de selección, onboarding y formación de agentes de seguros, reduciendo el tiempo de ramp-up y mejorando la retención del talento comercial.',
                'prompt_content'   => <<<'EOT'
Eres un director de recursos humanos especializado en el sector asegurador. Tu misión es usar inteligencia artificial para transformar los procesos de atracción, selección y desarrollo del talento en una organización aseguradora, especialmente en los equipos comerciales donde la rotación suele ser alta.

**Contexto del reto de RRHH:**
El sector asegurador enfrenta un problema estructural: la alta rotación de agentes comerciales (típicamente 30-50% anual en el primer año), el envejecimiento de la fuerza de ventas tradicional y la dificultad para atraer talento digital nativo. La IA puede transformar cada fase del ciclo de vida del empleado, desde la atracción hasta el desarrollo continuo.

**tarea completa:**
Actúa como mi CHRO especializado en insurtech. Necesito un plan integral de gestión del talento con IA para los siguientes procesos:

1. **Atracción y employer branding digital:**
   - Define la propuesta de valor al empleado (EVP) para perfiles digitales en seguros
   - Genera 5 ideas de contenido para LinkedIn que atraigan talento tech al sector asegurador
   - Diseña una campaña de reclutamiento que desmitifique la industria para candidatos jóvenes
   - Define los canales de atracción más efectivos para agentes comerciales y perfiles tech

2. **Proceso de selección con IA:**
   - Diseña un proceso de selección en 4 etapas con IA integrada en cada una
   - Define qué competencias predice mejor el rendimiento de un agente de seguros
   - Propón ejercicios de assessment específicos para el sector (simulación de venta, manejo de objeciones)
   - Especifica cómo usar IA para reducir sesgos inconscientes en la selección

3. **Onboarding acelerado con IA:**
   - Diseña un programa de onboarding de 90 días para agentes comerciales nuevos
   - Define los módulos de formación que debe completar cada semana
   - Propón cómo usar role-playing con IA para practicar ventas antes de hablar con clientes reales
   - Especifica los hitos de desempeño que determinan si el agente supera el período de prueba

4. **Formación continua y upskilling en IA:**
   - Define un plan de formación en herramientas de IA para el equipo comercial
   - Diseña micro-módulos de formación de 15 minutos sobre uso de IA en ventas de seguros
   - Propón cómo medir el ROI de la formación en términos de productividad comercial
   - Especifica cómo identificar qué agentes necesitan refuerzo en qué habilidades

5. **Retención y gestión del desempeño:**
   - Define los indicadores de riesgo de abandono más fiables para agentes de seguros
   - Diseña un modelo de conversación de retención usando IA como preparación del manager
   - Propón un sistema de reconocimiento y gamificación adaptado al perfil comercial
   - Especifica cómo usar datos de desempeño para personalizar el plan de carrera de cada agente

6. **Métricas de RRHH para una aseguradora:**
   - Define los 8 KPIs de RRHH más relevantes para el sector asegurador
   - Propón un dashboard mensual de seguimiento del talento para el comité de dirección

**Resultado esperado:**
Un manual de gestión del talento completo que el equipo de RRHH pueda implementar en 6 meses, con procesos, herramientas, métricas y planes de comunicación interna incluidos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimizar selección, onboarding y formación de talento asegurador con IA',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de riesgo financiero en seguros con IA: actuaría aumentada',
                'description'      => 'Aplica IA para potenciar el análisis actuarial, modelar carteras de riesgo, detectar concentraciones peligrosas y optimizar la política de precios de una aseguradora o reaseguradora.',
                'prompt_content'   => <<<'EOT'
Eres un actuario con especialización en modelos de machine learning aplicados a la valoración de riesgos en seguros. Tu misión es usar la inteligencia artificial como asistente para potenciar el análisis actuarial tradicional y producir insights más rápidos y precisos sobre la cartera de riesgo de una aseguradora.

**Contexto técnico-financiero:**
La actuaría tradicional se basa en modelos estadísticos paramétricos (GLM, tablas de mortalidad, modelos de Poisson). La IA complementa estos enfoques con capacidad para procesar datos no estructurados (imágenes de siniestros, telemática, texto de informes médicos) y detectar patrones no lineales en la siniestralidad. El resultado es una tarificación más precisa, una gestión del riesgo más proactiva y una rentabilidad técnica mejorada.

**instrucción principal:**
Actúa como mi chief actuary con expertise en IA. Necesito que desarrolles los siguientes análisis y modelos:

1. **Análisis de la cartera de riesgo actual:**
   - Define el framework de análisis de concentración de riesgo por sector, geografía y producto
   - Propón métricas de dispersión y correlación de riesgos en la cartera
   - Diseña alertas automáticas cuando la concentración supere umbrales definidos
   - Especifica cómo comparar la cartera propia con benchmarks de mercado

2. **Modelo de tarificación con IA:**
   - Describe cómo construir un modelo de pricing que combine GLM con gradient boosting
   - Define las variables más predictivas para distintos ramos (auto, hogar, vida, salud)
   - Explica cómo gestionar el trade-off entre precisión actuarial y explicabilidad regulatoria
   - Propón cómo actualizar el modelo de forma continua con datos nuevos de siniestralidad

3. **Predicción de siniestralidad y reservas técnicas:**
   - Define un modelo de predicción de siniestralidad a 12 meses por segmento de cartera
   - Especifica cómo calcular las reservas técnicas óptimas con intervalos de confianza
   - Propón cómo integrar datos externos macroeconómicos en la predicción de siniestralidad
   - Diseña escenarios de estrés para eventos catastróficos (catnat, pandemia, cyber)

4. **Detección de anomalías en siniestros:**
   - Define el pipeline de detección de siniestros anómalos usando modelos de anomalía
   - Especifica las variables de entrada más relevantes para detectar fraude actuarialmente
   - Propón cómo calibrar el umbral de alerta para minimizar falsos positivos
   - Diseña el proceso de revisión humana de los siniestros marcados como anómalos

5. **Optimización del programa de reaseguro:**
   - Define un modelo de optimización de la estructura de reaseguro (XL, cuota parte, stop-loss)
   - Especifica cómo calcular el punto óptimo de retención dado el apetito de riesgo
   - Propón cómo usar simulación de Monte Carlo para evaluar distintas estructuras de reaseguro

6. **Reporting regulatorio con IA:**
   - Define cómo automatizar la generación de informes de Solvencia II con datos del modelo
   - Especifica los controles de calidad necesarios para validar los outputs del modelo antes de reportar al regulador
   - Propón una estrategia de documentación del modelo para auditorías regulatorias

**Resultado esperado:**
Un framework actuarial aumentado con IA que el equipo técnico pueda implementar en fases, con especificaciones de datos, modelos, validaciones y documentación regulatoria integrada.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Potenciar el análisis actuarial con IA para tarificación, reservas y detección de fraude',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Análisis legal de pólizas de seguros y compliance insurtech con IA',
                'description'      => 'Usa IA para revisar contratos de seguros, identificar cláusulas abusivas, garantizar el cumplimiento regulatorio de plataformas insurtech y redactar condiciones generales claras y conformes.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho de seguros y regulación fintech. Tu misión es usar inteligencia artificial para analizar, revisar y mejorar la documentación legal de productos y plataformas de seguros, garantizando el cumplimiento con la regulación vigente y protegiendo los intereses de la empresa y del asegurado.

**Contexto regulatorio:**
El sector asegurador está entre los más regulados del mercado financiero. Las plataformas insurtech deben cumplir simultáneamente con la Directiva de Distribución de Seguros (IDD), el Reglamento de Solvencia II, el GDPR para tratamiento de datos de salud y comportamiento, y las normas locales de conducta de mercado. Un error legal puede resultar en sanciones millonarias, pérdida de licencia o litigios masivos de consumidores.

**tarea jurídica principal:**
Actúa como mi general counsel especializado en insurtech. Necesito tu asistencia para los siguientes análisis legales:

1. **Revisión de condiciones generales de la póliza:**
   - Define un checklist de revisión de condiciones generales adaptado al tipo de seguro
   - Identifica las cláusulas que con mayor frecuencia son declaradas abusivas por tribunales europeos
   - Propón lenguaje alternativo para cláusulas de exclusión que sean claras y conformes
   - Especifica los requisitos de transparencia que exige la IDD para la información precontractual

2. **Compliance GDPR para datos de seguros:**
   - Lista las categorías de datos especialmente protegidos que procesa una aseguradora (salud, biometría, conducción)
   - Define la base legal para cada tipo de tratamiento de datos en el contexto asegurador
   - Diseña un registro de actividades de tratamiento adaptado a una plataforma insurtech
   - Propón las cláusulas de privacidad que deben incluirse en el contrato de seguro digital

3. **Regulación de IA en la toma de decisiones de seguros:**
   - Analiza cómo el AI Act europeo afecta a los motores de suscripción automática
   - Define qué requisitos de transparencia y explicabilidad aplican a las decisiones automatizadas de seguros
   - Especifica los derechos del asegurado frente a decisiones tomadas exclusivamente por algoritmos
   - Propón cómo documentar los modelos de IA para cumplir con los requisitos del AI Act

4. **Contratos con proveedores tecnológicos (SaaS insurtech):**
   - Define las cláusulas esenciales en contratos con proveedores de IA para seguros
   - Especifica cómo asignar responsabilidad en caso de errores del modelo de IA
   - Propón cláusulas de auditoría del proveedor y acceso a datos del modelo
   - Diseña los SLAs específicos para servicios críticos de suscripción y detección de fraude

5. **Gestión de siniestros y derecho del asegurado:**
   - Define el protocolo legal de comunicación con el asegurado durante el siniestro
   - Especifica los plazos legales de respuesta y los derechos del asegurado en caso de demora
   - Propón cómo documentar las decisiones de cobertura para minimizar el riesgo de litigio
   - Diseña un proceso de resolución de disputas alternativo a los tribunales

6. **Licencias y autorizaciones para operar como insurtech:**
   - Lista las licencias y registros necesarios para operar una plataforma de distribución de seguros en España y la UE
   - Define el proceso de obtención de cada licencia y los requisitos de capital
   - Especifica las obligaciones de reporting continuo a los reguladores

**Resultado esperado:**
Un manual legal práctico que el equipo jurídico interno pueda usar como guía de compliance, con checklists, plantillas de cláusulas y protocolos de actuación para los principales riesgos legales del negocio insurtech.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Revisar pólizas, garantizar compliance regulatorio y gestionar riesgos legales en insurtech con IA',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Chatbot de siniestros y atención al cliente de seguros con IA',
                'description'      => 'Diseña e implementa un chatbot de atención al cliente para gestión de siniestros de seguros, con IA conversacional que resuelva consultas, abra expedientes y reduzca el volumen de llamadas al call center.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en customer success y experiencia del cliente en el sector asegurador. Tu misión es diseñar e implementar un sistema de atención al cliente con IA conversacional que gestione el proceso de siniestros de principio a fin, reduciendo la frustración del asegurado y el costo operativo del servicio de atención.

**Contexto del reto de CS:**
Abrir un siniestro es el momento de la verdad en los seguros. Es cuando el cliente descubre si la promesa comercial se cumple. Un proceso de siniestros mal gestionado destruye la confianza y genera abandonos masivos. La IA conversacional permite guiar al asegurado en momentos de estrés, recopilar la documentación correcta y comunicar el estado del expediente en tiempo real, reduciendo el volumen de llamadas entrantes y mejorando drásticamente el NPS post-siniestro.

**instrucción principal:**
Actúa como mi director de customer experience en una aseguradora digital. Necesito que diseñes el sistema completo de atención al cliente con IA para la gestión de siniestros:

1. **Arquitectura del chatbot de siniestros:**
   - Define los canales donde debe estar disponible el chatbot (app, web, WhatsApp, Telegram)
   - Diseña el árbol de intenciones principales: apertura de siniestro, consulta de estado, aportación de documentación, reclamación, cancelación
   - Especifica cuándo el chatbot debe escalar a un agente humano y cómo hacer la transición sin perder el contexto
   - Define la arquitectura de integración con el sistema de gestión de siniestros (CMS) del back-office

2. **Flujo de apertura de siniestro conversacional:**
   - Diseña el diálogo completo para abrir un siniestro de hogar paso a paso
   - Define los datos mínimos necesarios y cómo el chatbot los recoge de forma natural
   - Especifica cómo el chatbot guía al cliente para fotografiar y subir la documentación necesaria
   - Incluye mensajes de empatía en momentos de alta tensión emocional (accidente, robo, incendio)

3. **Comunicación proactiva del estado del siniestro:**
   - Define un sistema de notificaciones proactivas que informe al asegurado de cada avance
   - Diseña los mensajes para cada transición de estado del expediente
   - Especifica cómo responder a la pregunta "¿cuándo cobro?" de forma honesta y empática
   - Propón cómo gestionar expectativas cuando el siniestro se complica o demora

4. **Base de conocimiento para el chatbot:**
   - Define la estructura de la base de conocimiento de preguntas frecuentes sobre siniestros
   - Especifica cómo mantenerla actualizada y qué proceso de revisión seguir
   - Propón cómo el chatbot aprende de las consultas no resueltas para mejorar continuamente
   - Define cómo manejar preguntas sobre exclusiones de cobertura de forma clara y sin conflictos

5. **Medición de la calidad del servicio con IA:**
   - Define los KPIs específicos de atención al cliente para siniestros: tiempo de primera respuesta, tasa de resolución en primer contacto, NPS post-siniestro, tasa de escalado
   - Diseña un sistema de análisis de sentimiento de las conversaciones del chatbot
   - Propón cómo identificar patrones de insatisfacción antes de que el cliente decida irse

6. **Formación del equipo humano de siniestros:**
   - Define cómo usar IA para preparar a los agentes de siniestros en el manejo de casos complejos
   - Diseña un sistema de sugerencias en tiempo real para los agentes durante la gestión del expediente
   - Especifica cómo el sistema de IA apoya la decisión de cobertura del gestor de siniestros

**Resultado esperado:**
Un plan de implementación completo del chatbot de siniestros con flujos conversacionales, integraciones técnicas, métricas de éxito y plan de formación del equipo humano para los casos que requieran escalado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar chatbot de siniestros con IA que mejore la experiencia del asegurado y reduzca costos de atención',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría insurtech freelance: propuestas y posicionamiento con IA',
                'description'      => 'Usa IA para posicionarte como consultor freelance especializado en transformación digital de aseguradoras, crear propuestas de proyecto ganadoras y diferenciarte en marketplaces de consultoría.',
                'prompt_content'   => <<<'EOT'
Eres un consultor freelance especializado en transformación digital del sector asegurador. Tu objetivo es usar inteligencia artificial para posicionarte eficazmente en el mercado, crear propuestas de consultoría de alto valor y gestionar tu cartera de clientes de forma más rentable y escalable.

**Contexto del mercado freelance en insurtech:**
La transformación digital de las aseguradoras tradicionales está generando una demanda creciente de consultores especializados que puedan combinar conocimiento del negocio asegurador con expertise en IA, datos y tecnología. Los freelancers que se posicionen como expertos en insurtech pueden acceder a proyectos de alto valor (tarifa diaria de 600-1500€) trabajando con aseguradoras medianas y grandes que no quieren contratar equipos internos.

**instrucción principal:**
Actúa como mi mentor de desarrollo de negocio freelance en el sector insurtech. Necesito que me ayudes a construir los siguientes pilares de mi práctica de consultoría:

1. **Posicionamiento y nicho de mercado:**
   - Define 3 posibles nichos de especialización dentro de la consultoría insurtech (ej: pricing con IA, transformación de siniestros, distribución digital)
   - Para cada nicho, analiza la demanda de mercado, la competencia y el potencial de tarifa
   - Ayúdame a elegir el nicho con mayor fit según mi experiencia previa
   - Diseña mi propuesta de valor única como consultor insurtech en una frase de posicionamiento

2. **Perfil y presencia digital:**
   - Genera el headline y el resumen de LinkedIn optimizados para atraer aseguradoras
   - Define los 5 temas de contenido sobre los que debo publicar regularmente en LinkedIn
   - Diseña la estructura de mi página web de consultor con las secciones que más convierten
   - Propón cómo usar casos de estudio anonimizados para demostrar resultados sin revelar clientes

3. **Generación de leads y desarrollo de negocio:**
   - Define una estrategia de outreach en LinkedIn para contactar directores de transformación digital en aseguradoras
   - Genera 3 mensajes de primer contacto (cold outreach) que generen respuesta sin ser agresivos
   - Diseña una estrategia de contenido que atraiga inbound leads de calidad
   - Propón cómo aprovechar eventos del sector (congreso de seguros, DES) para hacer networking

4. **Propuesta de proyecto ganadora:**
   - Define la estructura de una propuesta de consultoría insurtech que cierre proyectos
   - Especifica cómo cuantificar el ROI del proyecto para el cliente (reducción de siniestralidad, aumento de conversión, ahorro en fraude)
   - Diseña una página de propuesta ejecutiva de una sola página para el comité de dirección
   - Propón cómo estructurar la tarificación: día/hora, valor fijo, retainer mensual, success fee

5. **Gestión de contratos y cobros con IA:**
   - Define las cláusulas esenciales en un contrato de consultoría independiente para el sector asegurador
   - Diseña un sistema de seguimiento de horas y facturación automatizado con IA
   - Propón cómo gestionar clientes que demoran los pagos sin dañar la relación
   - Especifica cómo estructurar un retainer mensual de mantenimiento post-proyecto

6. **Escalabilidad del modelo de consultoría:**
   - Define cuándo y cómo subcontratar a otros freelancers para crecer sin contratar empleados
   - Propón cómo crear un producto de formación o toolkit insurtech para ingresos pasivos
   - Diseña una estrategia para pasar de consultoría por horas a consultoría por valor y resultados

**Resultado esperado:**
Un plan de negocio de consultoría freelance insurtech listo para ejecutar en 90 días, con posicionamiento definido, herramientas de captación de clientes y sistemas de gestión que te permitan alcanzar 8.000-12.000€ mensuales en ingresos de consultoría.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir una práctica de consultoría freelance en insurtech con IA como diferenciador',
                'vote_score'       => 40,
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
