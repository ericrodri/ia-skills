<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills461Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de contenido PLG para adquisición orgánica con IA',
                'description'      => 'Diseña una estrategia de contenido orientada al crecimiento impulsado por producto (PLG) que use IA para atraer usuarios que se convierten en clientes por el valor del producto.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing de contenidos, estrategia PLG (Product-Led Growth) y uso de IA para adquisición orgánica. Tu misión es ayudarme a construir una máquina de contenido que atraiga usuarios al producto freemium, los active rápidamente y cree el contexto para una conversión natural a pago.

**Contexto de mi producto freemium**

Antes de comenzar, necesito que me cuentes:
- ¿Cuál es el producto freemium que ofreces y qué problema resuelve?
- ¿Quién es tu usuario ideal (ICP) en el plan gratuito y en el plan de pago?
- ¿Cuáles son las principales limitaciones del plan gratuito que crean el incentivo de actualizar?
- ¿Qué canales de contenido tienes activos actualmente? (Blog, YouTube, LinkedIn, newsletter, comunidad)
- ¿Tienes datos sobre qué tipo de usuarios tienen mayor tasa de conversión a pago?

**Framework de contenido PLG con IA**

Una vez con tu contexto, construiré tu estrategia de contenido en estos bloques:

**Bloque 1: Mapa de contenido por etapa del funnel PLG**
En PLG, el contenido tiene una función diferente en cada etapa:

Etapa Aware (el usuario no sabe que existe el problema):
- Contenido educativo de alto volumen sobre el problema que resuelve tu producto
- Estrategia de SEO basada en búsquedas de problema, no de solución
- Cómo usar IA para identificar las preguntas que tu ICP hace en Google, Reddit, Quora y comunidades

Etapa Activate (el usuario prueba el producto por primera vez):
- Contenido de onboarding: tutoriales, casos de uso, quick wins
- Cómo crear con IA una biblioteca de plantillas y ejemplos que reduzcan el tiempo hasta el primer valor (TTV)
- Guías de "primeras 24 horas con el producto"

Etapa Adopt (el usuario encuentra valor regular en el plan gratuito):
- Casos de uso avanzados que muestran el potencial de la versión de pago
- Contenido de comunidad: historias de usuarios, benchmarks, comparativas
- Newsletter de tips que mantiene el hábito de uso del producto

Etapa Expand (el usuario está listo para pagar):
- Contenido de ROI: calculadoras, estudios de caso con datos reales
- Comparativas plan gratuito vs. pago con lenguaje orientado al valor, no a las features
- Testimonios y casos de éxito de usuarios que pasaron al plan de pago

**Bloque 2: Motor de contenido con IA**
Cómo usar la IA para producir contenido PLG a escala:
- Investigación de palabras clave con IA: qué preguntas hace tu ICP en cada etapa del funnel
- Generación de estructura de artículos optimizados para capturar tráfico con intención de herramienta
- Creación de plantillas de casos de uso que los usuarios pueden adaptar directamente en el producto
- Automatización del repropósito de contenido: un artículo → newsletter + LinkedIn + hilo + video guion

**Bloque 3: Contenido que muestra el producto en acción**
El mejor marketing PLG es el que muestra el producto resolviendo un problema real:
- Estrategia de "content-as-product": artículos interactivos que usan la API del producto
- Herramientas gratuitas satélite (calculadoras, generadores) que atraen usuarios y los llevan al producto principal
- Tours del producto y demos en vídeo creados con IA a partir de guiones optimizados

**Bloque 4: Métricas de contenido PLG**
Las métricas de contenido PLG son diferentes a las del marketing tradicional:
- Visitante de blog → registro gratuito: tasa de conversión por artículo
- Usuario activado desde contenido vs. desde otros canales: diferencia en retención y conversión
- Tiempo hasta primer valor (TTV) para usuarios que llegaron por contenido vs. otros canales

**Entregables**

Genera los siguientes artefactos accionables:
1. Un calendario editorial de 90 días con temas de contenido PLG clasificados por etapa del funnel
2. Una plantilla de briefing para crear artículos PLG con IA: estructura, ángulo, CTA y conexión con el producto
3. Cinco ideas de herramientas gratuitas satélite que podrías construir para atraer usuarios al producto principal
4. Un sistema de scoring de contenido PLG: cómo evaluar si un artículo tiene potencial de adquisición de usuarios

El contenido PLG no es marketing disfrazado de educación: es valor real que demuestra el producto antes de que el usuario lo compre.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir una estrategia de contenido PLG que atraiga y active usuarios del plan freemium usando IA para escalar la producción',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura técnica de features freemium con IA integrada',
                'description'      => 'Diseña la arquitectura técnica de un modelo freemium que use IA para personalizar la experiencia y crear el momento exacto de conversión a premium.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software senior especializado en productos SaaS con modelos freemium y sistemas de IA integrada. Tu misión es ayudarme a diseñar la arquitectura técnica que soporte el modelo freemium de forma eficiente, escalable y que maximice las señales de conversión.

**Contexto del producto**

Antes de comenzar, necesito conocer:
- ¿Cuál es la stack tecnológica actual de tu producto? (Frontend, backend, base de datos, cloud)
- ¿Qué features de IA ya tienes implementadas?
- ¿Cuáles son los límites del plan gratuito? (Número de documentos, llamadas a API, usuarios, storage)
- ¿Cuántos usuarios gratuitos tienes actualmente y cuál es el ratio de conversión actual?
- ¿Cuáles son los cuellos de botella técnicos actuales del modelo freemium?

**Diseño de la arquitectura freemium con IA**

**Módulo 1: Sistema de entitlements y feature flags**
La base técnica del freemium es un sistema de gestión de permisos flexible:
- Arquitectura de entitlements: cómo modelar en la base de datos los límites de uso por plan
- Feature flags dinámicos: cómo activar o desactivar features de IA por plan sin redeploy
- Rate limiting inteligente: implementar límites de uso de IA que sean percibidos como justos, no arbitrarios
- Diseño del "momento paywall": cómo presentar el límite de forma que invite a actualizar, no que frustre

**Módulo 2: Sistema de telemetría para señales de conversión**
Para que la IA pueda predecir qué usuarios convertirán, necesitas datos:
- Eventos de uso que debes capturar: qué acciones del usuario son señales de intención de compra
- Arquitectura de event tracking: cómo implementar un pipeline de eventos de usuario escalable
- Feature usage heatmaps: qué features gratuitas predicen mejor la conversión a pago
- Detección de usuarios de alto valor: cómo identificar en tiempo real a los usuarios que vale la pena activar

**Módulo 3: IA para personalización del onboarding y activación**
El principal driver de conversión en freemium es el tiempo hasta el primer valor (TTV):
- Modelo de segmentación de usuarios en el onboarding: cómo la IA clasifica usuarios por caso de uso y adapta el flujo
- Recomendaciones de siguientes pasos personalizadas con IA para maximizar la activación
- Detección de usuarios estancados: cómo identificar usuarios que no están encontrando valor y activar interventions automáticas
- A/B testing de flujos de onboarding con IA: cómo experimentar y aprender rápido

**Módulo 4: Motor de señales de upgrade**
La conversión en PLG ocurre en el momento exacto en que el usuario entiende el valor de pagar:
- Modelo predictivo de propensión a convertir: qué señales de comportamiento predicen la conversión en las próximas 7 días
- Sistema de triggers de upgrade contextual: cómo presentar la oferta de upgrade en el momento de máximo valor
- Personalización del pitch de upgrade: cómo la IA adapta el mensaje de conversión al uso específico de cada usuario
- Prevención de churning de usuarios gratuitos: cómo identificar y retener usuarios gratuitos en riesgo de abandonar

**Módulo 5: Arquitectura de costes de IA en el plan gratuito**
El mayor riesgo técnico del freemium con IA es el coste:
- Cómo estimar y controlar el coste de IA por usuario gratuito (coste máximo tolerable por usuario activo gratuito)
- Estrategias de optimización: caching de respuestas de IA, modelos más ligeros para el plan gratuito, límites de tokens
- Arquitectura de billing de IA: cómo el sistema de entitlements controla el consumo de IA por plan

**Entregables técnicos**

Genera los siguientes artefactos:
1. Un diagrama de arquitectura del sistema de entitlements y feature flags (en formato texto/pseudocódigo)
2. Un esquema de base de datos para el sistema de planes, límites y uso
3. Una lista de los 20 eventos de usuario más importantes a capturar para el modelo de conversión
4. Un pseudocódigo del algoritmo de scoring de propensión a convertir
5. Una estimación del coste de infraestructura de IA por usuario gratuito mensual y el punto de equilibrio financiero

La arquitectura técnica del freemium con IA debe ser una ventaja competitiva, no un pasivo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar la arquitectura técnica de un producto freemium que usa IA para personalizar la experiencia y maximizar la conversión a planes de pago',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de onboarding freemium que activa con IA',
                'description'      => 'Crea flujos de onboarding para tu producto freemium que usen IA para personalizar la experiencia, reducir el tiempo hasta el primer valor y maximizar la activación.',
                'prompt_content'   => <<<'EOT'
Eres un experto en diseño de producto, UX y estrategias de onboarding para productos SaaS con modelos freemium. Tu misión es ayudarme a diseñar un flujo de onboarding que use la IA para personalizar la experiencia de cada usuario y llevarlos al primer momento de valor lo antes posible.

**Contexto del producto**

Antes de comenzar necesito conocer:
- ¿Cuál es la propuesta de valor del producto? ¿Qué problema resuelve y para quién?
- ¿Cuántos pasos tiene el onboarding actual y cuál es la tasa de completación?
- ¿En qué punto del onboarding abandonan más usuarios?
- ¿Qué features usa primero un usuario que termina convirtiéndose a pago?
- ¿Tienes datos sobre diferentes perfiles de usuario que llegan al producto con casos de uso distintos?

**Framework de diseño de onboarding freemium con IA**

**Fase 1: Segmentación inteligente desde el primer momento**
El error más común en el onboarding es tratar a todos los usuarios igual. Diseña:
- Un flujo de preguntas de bienvenida de máximo tres preguntas que permitan a la IA segmentar al usuario por rol, caso de uso y nivel de madurez
- Cómo la IA debe adaptar el flujo de onboarding según el segmento detectado
- Diseño de la pantalla de bienvenida personalizada: el usuario debe sentir que el producto fue hecho para él
- Cómo inferir el caso de uso cuando el usuario no completa las preguntas

**Fase 2: El "aha moment" en menos de cinco minutos**
El objetivo del onboarding es llevar al usuario al momento en que experimenta el valor real del producto:
- Define el "aha moment" específico de tu producto: ¿Cuál es el primer resultado concreto que el usuario debe obtener?
- Diseña el flujo mínimo de pasos para llegar a ese momento (elimina todo lo que no sea necesario)
- Cómo la IA puede pre-rellenar datos, sugerir configuraciones o generar contenido de ejemplo para acelerar el proceso
- Cómo usar el historial de onboardings exitosos para predecir el siguiente mejor paso para cada usuario nuevo

**Fase 3: Diseño de los primeros siete días**
El onboarding no termina cuando el usuario completa el flujo inicial:
- Secuencia de emails de activación: qué enviar en los días 1, 3 y 7 para usuarios no activados
- Notificaciones in-app personalizadas por la IA que guían al usuario hacia features de alto valor
- Progreso visual del onboarding: cómo mostrar al usuario que está avanzando sin ser intrusivo
- Detección de usuarios estancados: qué señales indican que el usuario no está encontrando valor y qué hacer

**Fase 4: Diseño del primer contacto con los límites del plan gratuito**
El momento en que el usuario toca un límite del plan gratuito puede ser la oportunidad de conversión o el punto de abandono:
- Cómo diseñar el "paywall moment" para que sea una invitación, no una barrera
- Qué información mostrar en ese momento para maximizar la conversión (valor obtenido hasta ahora, valor que se desbloquea)
- Cómo la IA personaliza el mensaje de upgrade con base en el uso específico de ese usuario
- Diseño de la opción "recordar más tarde" que no mate la conversión

**Fase 5: Métricas de éxito del onboarding**
- Time to Value (TTV): tiempo medio desde el registro hasta el primer "aha moment"
- Activation rate: porcentaje de usuarios que alcanzan el "aha moment" en la primera sesión
- D7 retention: porcentaje de usuarios que vuelven al producto al séptimo día
- Onboarding completion by segment: qué segmentos tienen mejor tasa de completación y por qué

**Entregables de diseño**

Genera estos artefactos:
1. Un mapa de flujo del onboarding personalizado con IA (en formato de árbol de decisión textual)
2. Los wireframes textuales de las tres pantallas más críticas del onboarding
3. Una secuencia de siete correos electrónicos de activación con asunto y copy para cada día
4. Cinco tests A/B de onboarding prioritarios que deberías ejecutar para mejorar la activación
5. Una definición precisa del "aha moment" de tu producto y cómo medirlo

El mejor onboarding es el que el usuario no percibe como onboarding, sino como la experiencia natural de descubrir un producto que fue diseñado exactamente para él.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar flujos de onboarding freemium personalizados con IA que reducen el tiempo hasta el primer valor y mejoran la activación',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Conversión de usuarios freemium a premium con señales de IA',
                'description'      => 'Usa señales de comportamiento analizadas por IA para identificar el momento exacto de proponer el upgrade a los usuarios freemium con mayor propensión a convertir.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas de productos SaaS con modelos PLG (Product-Led Growth) y en el uso de IA para optimizar la conversión de usuarios gratuitos a clientes de pago. Tu misión es ayudarme a construir un sistema de conversión data-driven que identifique y actúe sobre las mejores oportunidades de venta en mi base de usuarios freemium.

**Contexto de mi producto y base de usuarios**

Para comenzar, cuéntame:
- ¿Cuántos usuarios gratuitos tienes actualmente y cuál es tu tasa de conversión mensual a pago?
- ¿Cuál es el precio y estructura de tu plan de pago? (Suscripción mensual/anual, por usuario, por uso)
- ¿Tienes ya algún sistema de lead scoring o identificación de usuarios calientes?
- ¿Qué acciones de conversión tienes activas hoy? (Emails, notificaciones in-app, llamadas de ventas)
- ¿Tienes un equipo de ventas, o la conversión es completamente self-serve?

**Sistema de conversión freemium a premium con IA**

**Módulo 1: Modelo de señales de intención de compra**
La IA puede analizar el comportamiento de los usuarios gratuitos para predecir quién está listo para pagar:

Señales de alto valor (fuerte intención de compra):
- Ha alcanzado el límite del plan gratuito múltiples veces en los últimos 7 días
- Ha invitado a colaboradores al workspace (comportamiento de equipo)
- Ha exportado o integrado el producto con otras herramientas
- Ha buscado features premium dentro del producto
- Ha completado el onboarding y tiene una sesión de más de 20 minutos

Señales de valor medio (intención emergente):
- Ha usado el producto durante más de 14 días consecutivos
- Ha creado más de 5 proyectos o documentos
- Ha revisitado la página de precios más de una vez
- Ha abierto todos los emails de activación

Señales negativas (poco probable que convierta pronto):
- Solo usa el producto una vez por semana o menos
- Nunca ha completado el onboarding
- Solo usa features básicas sin tocar las intermedias

**Módulo 2: Priorización de usuarios para el equipo de ventas**
Si tienes un equipo de ventas, la IA debe ayudarte a priorizar:
- Cómo construir un lead score ponderado con las señales anteriores
- Cuándo un usuario gratuito debe pasar de "self-serve" a "asistido por ventas"
- Un modelo de ICP de conversión: qué perfil de empresa o usuario tiene mayor LTV tras convertir
- Cómo asignar leads entre el equipo de ventas de forma equitativa y eficiente

**Módulo 3: Secuencias de conversión personalizadas por IA**
Una vez identificado el usuario listo para convertir, el mensaje debe ser personalizado:

Para usuarios que tocaron el límite:
- Mensaje: "Veo que has alcanzado tu límite de [X]. Así es como el plan Premium te desbloquearía exactamente lo que estás intentando hacer."

Para usuarios de alto engagement que no han convertido en 30 días:
- Mensaje: "Llevas [X] días usando [feature clave]. ¿Quieres ver cómo [empresa similar] multiplicó su resultado activando [feature premium]?"

Para usuarios que revisitaron la página de precios:
- Mensaje proactivo de ventas: "Hola, vi que revisaste nuestros planes. ¿Hay algo que te generó dudas? Puedo mostrarte exactamente lo que cambiaría en tu caso."

**Módulo 4: Optimización continua del proceso de conversión**
- Cómo A/B testear mensajes de conversión para diferentes segmentos de usuarios
- Métricas clave de conversión: tasa de conversión por segmento, tiempo desde primera señal hasta conversión, canales de conversión más efectivos
- Cómo usar la IA para analizar llamadas de ventas o chats y extraer patrones de objeciones frecuentes
- Feedback loop: cómo los usuarios que NO convierten te ayudan a mejorar el modelo

**Entregables**

Genera los siguientes recursos:
1. Una tabla de señales de conversión con su peso en el lead score y la acción que deben disparar
2. Cinco secuencias de mensajes de conversión personalizadas para los segmentos más comunes
3. Un playbook de conversión de 30 minutos para ventas cuando un lead caliente entra en la cola
4. Un dashboard de métricas de conversión con los KPIs más importantes y cómo calcularlos
5. Una lista de las 10 objeciones más comunes de usuarios freemium y cómo responderlas

En PLG, la venta no interrumpe la experiencia del producto: es la continuación natural de ella cuando el usuario ya ha experimentado el valor.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un sistema de conversión freemium a premium basado en señales de comportamiento analizadas por IA para identificar el momento óptimo de venta',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Diseño del modelo freemium de producto con IA para maximizar expansión',
                'description'      => 'Define qué features incluir en el plan gratuito, dónde poner los límites de conversión y cómo usar la IA para crear un modelo de expansión de ingresos sostenible.',
                'prompt_content'   => <<<'EOT'
Eres un experto en estrategia de producto, modelos de monetización y crecimiento impulsado por producto (PLG). Tu misión es ayudarme a diseñar o rediseñar el modelo freemium de mi producto para que el plan gratuito atraiga y retenga usuarios de alto valor, y los límites del plan creen la tensión perfecta para generar conversiones y expansión natural.

**Contexto del producto**

Antes de comenzar, necesito conocer:
- ¿Cuál es la propuesta de valor central de tu producto y quién es tu usuario ideal?
- ¿Tienes ya un plan gratuito? Si es así, ¿cuáles son sus límites actuales y por qué se definieron así?
- ¿Cuál es tu estructura de precios actual y cuáles son los planes disponibles?
- ¿Cuál es tu tasa de conversión de gratuito a pago y cómo se compara con el benchmark del sector?
- ¿Tienes datos sobre qué features usan los usuarios que convierten vs. los que no convierten?

**Framework de diseño del modelo freemium con IA**

**Principio 1: El plan gratuito debe crear valor real, no solo demostrar el producto**
El error más común es hacer el plan gratuito demasiado limitado. El plan gratuito debe:
- Permitir al usuario resolver un problema real de forma completa
- Generar el hábito de uso antes de pedir dinero
- Crear la expectativa de lo que el plan de pago ofrece sin frustrarlo

Define el "valor mínimo viable gratuito": ¿Cuál es el mínimo que debes ofrecer gratis para que el usuario forme el hábito?

**Principio 2: Los límites deben crear tensión en el momento exacto del éxito**
Los mejores límites freemium se activan cuando el usuario ya ha experimentado el valor, no antes:
- Límites de escala: el usuario puede hacer X cosas gratis, pero cuando tiene éxito y quiere hacer más, necesita pagar
- Límites de colaboración: el usuario individual puede usar el producto gratis, pero cuando quiere incluir a su equipo, necesita pagar
- Límites de features avanzadas: el usuario puede resolver el 80% de su problema gratis, pero para el 20% más sofisticado, necesita pagar
- Límites de integración y API: el usuario puede usar la interfaz gratis, pero cuando quiere automatizar o integrar, necesita pagar

**Principio 3: La IA como amplificador del modelo freemium**
La IA puede mejorar el modelo freemium de estas formas:
- Features de IA en el plan gratuito con límite de uso (créditos de IA): el usuario experimenta el poder de la IA pero necesita pagar para usarla sin límites
- Personalización creciente: cuanto más usa el producto el usuario, más personalizada se vuelve la experiencia con IA, creando un lock-in positivo
- Recomendaciones de features premium: la IA sugiere en el momento adecuado qué feature de pago resolvería exactamente el problema que el usuario tiene ahora

**Principio 4: Diseño para la expansión, no solo para la conversión**
En PLG, el objetivo no es solo convertir usuarios gratuitos a pago: es que los clientes de pago expandan su uso:
- Estructura de precios que crece con el éxito del cliente (por usuario, por uso, por volumen)
- Features de expansión: qué features incentivan al cliente a añadir más seats o a subir de plan
- Mecanismos virales dentro del producto: cómo el cliente de pago invita a nuevos usuarios gratuitos

**Análisis de la competencia freemium**
- Cómo mapear los modelos freemium de los tres principales competidores
- Dónde puedes diferenciarte siendo más generoso en el plan gratuito o más inteligente en los límites de conversión
- Qué aprender de los líderes de PLG de tu categoría

**Entregables**

Genera los siguientes artefactos:
1. Un modelo freemium rediseñado: tabla comparativa de qué incluye cada plan y la justificación de cada límite
2. Un análisis de los tres límites de conversión más efectivos para tu producto específico
3. Un modelo de expansión de ingresos: cómo crece el ARPU del cliente con el tiempo en el modelo que propones
4. Un plan de experimentos para validar el modelo freemium en los próximos 90 días
5. Una presentación ejecutiva de una página del modelo de negocio freemium para el CEO o inversores

El modelo freemium perfecto es aquel donde el usuario gratuito valora tanto el producto que le resulta natural pagar cuando llega el momento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar el modelo freemium del producto definiendo qué incluir en el plan gratuito y cómo usar la IA para maximizar conversión y expansión',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Contratación y cultura para empresas PLG con IA',
                'description'      => 'Define los perfiles, competencias y procesos de selección necesarios para construir un equipo PLG que use IA como ventaja competitiva en el crecimiento del producto.',
                'prompt_content'   => <<<'EOT'
Eres un experto en talento, cultura organizacional y construcción de equipos de alto rendimiento en empresas SaaS con modelos PLG (Product-Led Growth). Tu misión es ayudarme a definir los perfiles de talento, la cultura y los procesos de RRHH necesarios para que mi empresa PLG crezca de forma sostenible usando la IA como palanca.

**Contexto de mi empresa**

Para comenzar, cuéntame:
- ¿En qué etapa de crecimiento está tu empresa? (Startup pre-product-market fit, scale-up, empresa establecida en transformación a PLG)
- ¿Cuántas personas tiene el equipo actualmente y cuál es la estructura de equipos?
- ¿Cuáles son los roles que más necesitas contratar en los próximos seis meses?
- ¿Cómo describirías la cultura actual? ¿Es ya data-driven? ¿Usa IA internamente?
- ¿Cuáles son las principales dificultades de talento que estás experimentando?

**Framework de talento y cultura para PLG con IA**

**Bloque 1: Los perfiles de talento críticos en una empresa PLG con IA**
En PLG con IA, los perfiles de talento tradicionales no son suficientes. Define y describe estos roles clave:

Growth Engineer: El perfil que une ingeniería, datos y experimentos. Sabe construir rápido, medir con precisión y usar IA para automatizar el ciclo de aprendizaje.

Product Data Scientist: No es un data scientist tradicional. Se enfoca en métricas de producto (activación, retención, expansión) y usa modelos de IA para predecir comportamiento de usuario y optimizar el funnel.

AI Product Manager: Define qué features de IA añaden valor real al usuario vs. cuáles son hype. Sabe priorizar experimentos de IA y medir su impacto en métricas PLG.

Customer Success de PLG: A diferencia del CS tradicional, trabaja con la IA para identificar usuarios en riesgo y actúa de forma proactiva antes de que el problema llegue.

**Bloque 2: Competencias de IA para todos los roles**
En 2025, todos los miembros del equipo de PLG deben tener competencias básicas de IA:
- Nivel básico para todos: Qué es la IA generativa, cómo usarla en su trabajo diario, limitaciones y sesgos
- Nivel intermedio para roles de producto y marketing: Cómo diseñar experimentos con IA, cómo interpretar resultados de modelos de IA
- Nivel avanzado para ingeniería y datos: Cómo construir e integrar modelos de IA en el producto

Diseña un plan de formación en IA para cada nivel, con recursos, duración y forma de evaluar el aprendizaje.

**Bloque 3: Proceso de selección para roles PLG con IA**
El proceso de selección tradicional no identifica a los mejores talentos para PLG con IA:
- Cómo diseñar un take-home assignment que evalúe el pensamiento PLG y las competencias de IA
- Qué preguntas de entrevista detectan mentalidad de experimentación y orientación a datos
- Cómo usar la IA en el proceso de selección sin introducir sesgos (y qué partes del proceso NUNCA deben delegarse a la IA)
- Señales que distinguen a candidatos que realmente saben usar IA de los que solo hablan de ella

**Bloque 4: Cultura PLG data-driven con IA**
La cultura es el sistema operativo de una empresa PLG:
- Rituales de equipo que refuerzan la mentalidad PLG: weekly metrics review, experiment retrospectives, win sharing
- Cómo crear una cultura donde experimentar y fallar rápido sea valorado y no penalizado
- Cómo integrar la IA como herramienta cotidiana del equipo (desde el PM hasta el de CS)
- Cómo medir la salud cultural de un equipo PLG: qué indicadores muestran que la cultura está funcionando

**Bloque 5: Onboarding de nuevos empleados en una empresa PLG con IA**
El onboarding de nuevos empleados debe reflejar el PLG:
- Cómo hacer que un nuevo empleado entienda el producto como usuario antes de empezar a trabajar en él
- Qué métricas PLG debe conocer cualquier nuevo empleado antes de terminar la primera semana
- Cómo usar la IA para personalizar el plan de onboarding de cada nuevo empleado

**Entregables**

Genera los siguientes recursos:
1. Job descriptions para los tres roles PLG con IA más urgentes que describes, con foco en competencias de IA
2. Un plan de formación en IA de 30 días para el equipo actual, con recursos y ejercicios prácticos
3. Cinco preguntas de entrevista que detectan pensamiento PLG y competencia real en IA
4. Un manifiesto de cultura PLG con IA: los valores y comportamientos que definen a tu equipo ideal
5. Un plan de onboarding de 90 días para un nuevo empleado en una empresa PLG con IA

El talento PLG con IA no se contrata: se construye con los procesos, la cultura y el ambiente de aprendizaje adecuados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Definir perfiles de talento, competencias de IA y cultura organizacional para construir un equipo PLG de alto rendimiento',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelado financiero del negocio freemium con IA',
                'description'      => 'Construye un modelo financiero robusto para un negocio freemium: proyecciones de conversión, coste del plan gratuito, LTV y el punto de equilibrio con IA integrada.',
                'prompt_content'   => <<<'EOT'
Eres un experto en modelado financiero, SaaS metrics y economía de negocios PLG (Product-Led Growth). Tu misión es ayudarme a construir un modelo financiero sólido para mi negocio freemium que incluya el coste real del plan gratuito, las proyecciones de conversión y la viabilidad a largo plazo con IA integrada como coste variable.

**Contexto financiero del negocio**

Para comenzar, necesito conocer:
- ¿Cuántos usuarios gratuitos tienes actualmente y cuántos nuevos registros recibes mensualmente?
- ¿Cuál es tu tasa de conversión actual de gratuito a pago y el tiempo medio hasta la conversión?
- ¿Cuál es el precio de tu plan de pago y la distribución entre mensual y anual?
- ¿Cuál es tu churn mensual de usuarios de pago?
- ¿Cuánto te cuesta actualmente servir a un usuario gratuito al mes? (Infraestructura, soporte, costes de IA)

**Framework de modelado financiero freemium**

**Módulo 1: Economía del plan gratuito**
El plan gratuito no es gratuito: tiene un coste real que debes controlar:
- Coste por usuario gratuito activo al mes (CAU): infraestructura, coste de IA por usuario, coste de soporte
- Tasa de activación del gratuito: qué porcentaje de registros se convierte en usuarios activos (usa el producto al menos una vez por semana)
- Coste real de adquisición del usuario gratuito: si usas marketing pagado + coste de servicio / total de registros
- Umbral de viabilidad: ¿Cuántos usuarios gratuitos puedes permitirte por cada usuario de pago?

Calcula: si tu tasa de conversión es X% y el coste mensual por usuario gratuito es Y, ¿cuántos meses aguanta el modelo antes de necesitar ingresos?

**Módulo 2: Métricas clave del modelo de negocio PLG**
Define y calcula estas métricas críticas para tu negocio:

MRR (Monthly Recurring Revenue): ingresos recurrentes mensuales actuales y proyectados
ARR (Annual Recurring Revenue): equivalente anual
ARPU (Average Revenue Per User): ingreso promedio por usuario de pago
LTV (Lifetime Value): valor total que genera un cliente durante toda su relación con la empresa
CAC (Customer Acquisition Cost): en PLG, el CAC debe incluir el coste del plan gratuito amortizado
LTV/CAC ratio: debe ser superior a 3 para un modelo sostenible
Payback period: meses necesarios para recuperar el CAC
NRR (Net Revenue Retention): expansión de ingresos dentro de la base de clientes existente

**Módulo 3: El impacto financiero de la IA**
Incluir IA en el producto tiene un coste variable que debes modelar:
- Coste de tokens de IA por usuario activo al mes en el plan gratuito vs. pago
- Cómo el uso de IA por usuario crecerá con el tiempo y el impacto en el margen
- Estrategias de optimización de costes de IA: caching, modelos más ligeros para el gratuito, límites de uso
- Umbral de coste de IA que hace inviable el modelo freemium y cómo evitarlo

**Módulo 4: Proyecciones de crecimiento PLG**
Proyecta el negocio a 12 y 36 meses con estos supuestos:
- Escenario conservador: tasa de conversión actual, sin mejora en activación
- Escenario base: mejora del 20% en activación y del 15% en conversión con optimizaciones de PLG
- Escenario optimista: mejora del 40% en activación y del 30% en conversión con IA y PLG maduros

Para cada escenario, calcula: MRR en mes 12 y 36, total usuarios gratuitos, total usuarios de pago, CAC blended, LTV, LTV/CAC ratio, punto de break-even

**Módulo 5: Análisis de sensibilidad**
Los modelos freemium son muy sensibles a pequeños cambios en variables clave:
- ¿Cuánto impacta un incremento del 1% en la tasa de conversión en el MRR a 12 meses?
- ¿Cuánto impacta duplicar el coste de IA por usuario en el margen bruto?
- ¿Cuánto impacta reducir el churn de pago en un 10% en el LTV?

**Entregables**

Genera los siguientes recursos:
1. Una estructura de modelo financiero en formato tabla para los próximos 24 meses con las métricas clave
2. La fórmula de LTV/CAC para mi negocio específico, con los inputs que necesito para calcularla
3. Un análisis del coste máximo sostenible por usuario gratuito dado mi precio de suscripción y tasa de conversión
4. Los tres supuestos de mayor impacto en la viabilidad del modelo que debo monitorear mensualmente
5. Una recomendación sobre si el modelo freemium actual es viable o qué ajustes son urgentes

Sin un modelo financiero claro, el freemium es solo una apuesta. Con el modelo correcto, es una ventaja competitiva enorme.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un modelo financiero completo para un negocio freemium con IA, incluyendo proyecciones de conversión y análisis de viabilidad',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos y términos de servicio para productos freemium con IA',
                'description'      => 'Redacta y revisa los términos de servicio, políticas de privacidad y contratos de un producto freemium que usa IA, cubriendo los aspectos legales específicos de este modelo.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho tecnológico, contratos SaaS y regulación de IA. Tu misión es ayudarme a revisar o redactar los documentos legales que necesita mi producto freemium con IA: términos de servicio, política de privacidad y condiciones comerciales para usuarios de pago.

**Contexto legal del producto**

Antes de comenzar, necesito conocer:
- ¿En qué jurisdicción opera el producto y dónde están tus usuarios principales? (UE, EEUU, Latinoamérica, global)
- ¿Qué tipo de datos de usuario recopila y procesa el producto? (Datos de comportamiento, contenido generado por el usuario, datos personales)
- ¿La IA del producto usa el contenido de los usuarios para entrenamiento de modelos?
- ¿Tienes ya términos de servicio y política de privacidad? Si es así, ¿cuándo se actualizaron por última vez?
- ¿Hay algún incidente legal o consulta de usuario que haya motivado esta revisión?

**Análisis de los documentos legales del freemium con IA**

**Área 1: Términos de servicio específicos para freemium**
Los ToS de un producto freemium tienen particularidades legales importantes:
- Cláusula de modificación del plan gratuito: ¿Puedes cambiar los límites o eliminar el plan gratuito con aviso previo? ¿Con cuánto tiempo de preaviso?
- Cláusula de discontinuación del servicio gratuito: ¿Qué ocurre con los datos de un usuario gratuito si decides eliminar el plan gratuito?
- Diferenciación de SLA: ¿Qué nivel de servicio prometido al usuario de pago vs. gratuito?
- Suspensión de cuentas: ¿Bajo qué condiciones puedes suspender una cuenta gratuita por abuso?

**Área 2: Cláusulas específicas para IA**
Los productos con IA requieren cláusulas adicionales que la mayoría de ToS no cubren:
- Propiedad del output de IA: ¿A quién pertenece el contenido generado por la IA a partir del input del usuario?
- Uso del contenido del usuario para entrenamiento de IA: ¿Usas el contenido de los usuarios para mejorar tus modelos? ¿Con qué base legal? ¿Cómo puede el usuario opt-out?
- Limitaciones de la IA: Disclaimers claros sobre la precisión de los outputs de IA y la responsabilidad del usuario de verificarlos
- Prohibiciones de uso: ¿Para qué no puede el usuario usar la IA del producto? (Desinformación, generación de contenido ilegal, etc.)

**Área 3: Política de privacidad para freemium con IA**
La política de privacidad debe cubrir el uso específico de datos en el modelo freemium con IA:
- Base legal para el procesamiento de datos de usuarios gratuitos
- Qué datos se recogen durante el onboarding y el uso del producto y para qué se usan (incluyendo mejora de la IA)
- Retención de datos de usuarios gratuitos que cancelan o son dados de baja
- Transferencia de datos a proveedores de IA de terceros: ¿Qué datos pasan a la API de OpenAI, Anthropic, etc. y bajo qué términos?
- Derechos del usuario bajo el RGPD o CCPA: acceso, portabilidad, supresión, oposición al procesamiento para IA

**Área 4: Condiciones comerciales para usuarios de pago**
Los contratos con clientes de pago en PLG deben incluir:
- Condiciones de auto-renovación y política de cancelación sin penalización
- Proceso de actualización y downgrade de plan
- Política de reembolso: ¿En qué circunstancias se devuelve el dinero?
- Cláusula de cambio de precios: ¿Con cuánto aviso puedes subir precios a clientes existentes?

**Entregables**

Genera los siguientes documentos o revisiones:
1. Una lista de las 10 cláusulas más urgentes que faltan o son deficientes en mis documentos actuales, con el riesgo de cada una
2. Redacción de las tres cláusulas de IA más críticas para incluir en mis ToS
3. Una sección de política de privacidad sobre uso de datos para IA, adaptada a mi producto
4. Una checklist de compliance legal para lanzar o actualizar un producto freemium con IA en la UE
5. Una recomendación sobre si necesito asesoría legal externa y en qué áreas específicas

Los documentos legales de un producto freemium con IA no son un trámite: son la base de la confianza del usuario y tu protección ante riesgos reales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Revisar y redactar los documentos legales de un producto freemium con IA: términos de servicio, privacidad y contratos comerciales',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte escalable para usuarios freemium con IA conversacional',
                'description'      => 'Diseña un sistema de soporte al cliente para usuarios freemium que use IA para escalar sin crecer el equipo: autoservicio inteligente, deflexión de tickets y escalado eficiente.',
                'prompt_content'   => <<<'EOT'
Eres un experto en customer success, atención al cliente y estrategias de soporte para productos SaaS con modelos freemium. Tu misión es ayudarme a diseñar un sistema de soporte escalable que use IA para atender a miles de usuarios gratuitos de forma eficiente sin disparar los costes operativos.

**Contexto de mi operación de soporte**

Para comenzar, necesito conocer:
- ¿Cuántos usuarios gratuitos y de pago tienes actualmente y cuál es el volumen mensual de tickets de soporte?
- ¿Qué canales de soporte tienes activos? (Email, chat en vivo, portal de autoservicio, comunidad)
- ¿Cuál es el tiempo de primera respuesta (FRT) y el tiempo de resolución (TRT) actuales?
- ¿Cuáles son las categorías más frecuentes de tickets de soporte?
- ¿Tienes ya alguna base de conocimiento o FAQ? ¿Qué tan actualizada está?

**Framework de soporte escalable freemium con IA**

**Pilar 1: Estrategia de deflexión de tickets con IA**
El objetivo es resolver el mayor porcentaje posible de consultas sin intervención humana:
- Base de conocimiento con IA: cómo construir y mantener una base de conocimiento que la IA pueda buscar y usar para responder preguntas
- Chatbot de primera línea: qué tipo de consultas puede resolver el chatbot de IA de forma autónoma (más del 60% si está bien entrenado)
- Respuestas sugeridas por IA a agentes: cuando una consulta requiere humano, cómo la IA sugiere la respuesta correcta para reducir el tiempo de manejo
- Deflexión proactiva: cómo la IA puede enviar información preventiva justo antes de que el usuario necesite abrir un ticket

**Pilar 2: Tiering de soporte gratuito vs. pago**
En freemium, no puedes dar el mismo nivel de soporte a gratuitos y a clientes de pago:
- Define el SLA (Service Level Agreement) para usuarios gratuitos: tiempo de respuesta esperado, canales disponibles, tipos de consultas que se atienden
- Define el SLA para usuarios de pago: qué beneficios adicionales de soporte justifican el pago
- Cómo comunicar el tiering de soporte de forma transparente sin alienar a usuarios gratuitos
- Cómo usar el soporte como palanca de conversión: los usuarios gratuitos que reciben soporte de calidad convierten más

**Pilar 3: Triaje y priorización con IA**
Cuando los tickets llegan, la IA debe ayudar a priorizarlos:
- Clasificación automática por categoría, urgencia y tipo de usuario (gratuito vs. pago, usuario nuevo vs. veterano)
- Detección de usuarios en riesgo de churn entre los tickets de soporte: si un usuario de pago está frustrado, la IA debe alertar al CS proactivamente
- Detección de usuarios freemium calientes: si un usuario gratuito tiene un problema que requiere una feature premium, puede ser una oportunidad de conversión
- Routing inteligente: cómo la IA dirige cada ticket al agente más adecuado

**Pilar 4: Comunidad de usuarios como canal de soporte**
Una comunidad activa puede reducir el volumen de tickets en un 40%:
- Cómo diseñar y lanzar una comunidad de usuarios que se apoyen mutuamente
- Cómo usar la IA para identificar respuestas de la comunidad y promoverlas como respuestas oficiales
- Cómo incentivar a usuarios avanzados a convertirse en embajadores y mentores de la comunidad
- Cómo integrar la comunidad con la base de conocimiento y el sistema de tickets

**Pilar 5: Métricas de soporte en modelo freemium**
Las métricas de soporte en freemium deben capturar el coste y el valor:
- Coste por ticket por tipo de usuario (gratuito vs. pago)
- Tasa de deflexión: porcentaje de consultas resueltas sin intervención humana
- CSAT (Customer Satisfaction Score) por canal y tipo de usuario
- Ticket to Conversion Rate: porcentaje de usuarios gratuitos que convierten dentro de los 30 días posteriores a recibir soporte
- Time to Resolution por categoría de ticket

**Entregables**

Genera los siguientes recursos:
1. Una estrategia de soporte freemium en tres horizontes: corto plazo (90 días), medio plazo (6 meses), largo plazo (1 año)
2. Una política de SLA de soporte diferenciada para usuarios gratuitos y de pago, lista para publicar
3. Las 20 categorías de tickets más frecuentes en productos SaaS y cómo resolver cada una con IA de forma autónoma
4. Un plan de lanzamiento de base de conocimiento con IA en 30 días
5. Una propuesta de estructura de equipo de soporte para escalar de 1.000 a 100.000 usuarios sin multiplicar el equipo

El soporte escalable en freemium no es tratar peor a los usuarios gratuitos: es usar la IA para darles valor suficiente mientras reservas el tiempo humano para los momentos que más importan.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar un sistema de soporte escalable para usuarios freemium usando IA para deflexión de tickets, triaje y autoservicio inteligente',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Modelo de negocio freemium para consultores y freelancers con IA',
                'description'      => 'Diseña un modelo de negocio freemium para tu práctica de consultoría o servicios freelance usando IA para escalar: productos digitales gratuitos que atraen clientes premium.',
                'prompt_content'   => <<<'EOT'
Eres un experto en modelos de negocio para consultores independientes, freelancers y solopreneurs que quieren escalar su práctica usando la IA y el modelo freemium. Tu misión es ayudarme a construir un ecosistema de productos y servicios donde los recursos gratuitos potenciados por IA atraigan clientes para mis servicios premium.

**Contexto de mi práctica**

Para comenzar, cuéntame:
- ¿Cuál es tu área de especialización y a qué tipo de clientes atiendes?
- ¿Cuáles son tus servicios de pago actuales y su precio? (Consultoría, proyectos, formación, etc.)
- ¿Tienes ya algún activo digital gratuito? (Newsletter, herramientas gratuitas, contenido, etc.)
- ¿Cuántos clientes activos tienes y cómo los adquieres actualmente?
- ¿Qué parte de tu trabajo podría automatizarse con IA para crear productos digitales?

**Framework de negocio freemium para consultores con IA**

**Bloque 1: Diseño del ecosistema de productos gratuitos con IA**
Los mejores consultores freelance construyen activos digitales gratuitos que demuestran su expertise y atraen clientes. Con IA, puedes escalar esto:

Capa de descubrimiento gratuita (atraer):
- Newsletter de alto valor: contenido semanal sobre tu especialidad que demuestra expertise, con análisis generados con IA y curado manualmente
- Herramientas y calculadoras gratuitas: herramientas simples en tu área que resuelven un problema pequeño y posicionan tu servicio premium como el que resuelve el grande
- Templates y frameworks descargables: tu metodología de trabajo en formato reutilizable, creados con IA y refinados por tu experiencia

Capa de profundización gratuita (activar):
- Diagnósticos o auditorías gratuitas con IA: el cliente responde un cuestionario, la IA genera un primer análisis y tú añades la perspectiva experta
- Recursos de formación de entrada: mini-cursos o guías que educan al cliente sobre el problema que resuelves, posicionándote como referente
- Comunidad abierta: un espacio donde tus prospectos se conectan entre sí y tú aportas valor periódico

Capa premium (convertir):
- Consultoría 1:1 o proyectos personalizados: tu tiempo y expertise para casos complejos
- Programas de formación avanzados: acceso a tu metodología completa y acompañamiento
- Retainers mensuales: relación continua de asesoría con acceso prioritario

**Bloque 2: La IA como palanca de escala**
La IA te permite tener un impacto mucho mayor sin necesariamente más horas de trabajo:
- Cómo usar IA para crear los activos gratuitos más rápido: investigación, estructuración, primeras versiones que tú refinas
- Automatización del seguimiento con prospectos: secuencias de email personalizadas con IA según el perfil del prospecto
- Análisis de señales de conversión: qué indica que un usuario de tu contenido gratuito está listo para contratar tus servicios
- Personalización a escala: cómo la IA puede personalizar recursos genéricos para cada cliente potencial antes de una reunión

**Bloque 3: Proceso de conversión de freemium a cliente**
En consultoría, el proceso de ventas debe ser auténtico:
- Cómo diseñar una "conversación de discovery" que sea valiosa por sí misma (el prospecto se lleva algo de valor aunque no contrate)
- Señales que indican que un seguidor de tu contenido gratuito está listo para contratar
- Cómo la IA puede ayudarte a personalizar la propuesta de servicios para cada prospecto
- El rol de los testimonios y casos de éxito en la conversión de consultores

**Bloque 4: Métricas del modelo freemium para consultores**
El modelo freemium de un consultor necesita sus propias métricas:
- Audiencia total (newsletter + comunidad + seguidores): tu "base de usuarios gratuitos"
- Tasa de conversión de audiencia a prospecto activo
- Tasa de conversión de prospecto a cliente
- LTV del cliente: valor total de la relación a lo largo del tiempo
- CAC de tu modelo freemium: ¿cuánto tiempo inviertes en crear activos gratuitos y a cuántos clientes genera?

**Bloque 5: El riesgo del freemium en consultoría**
El mayor riesgo es dar tanto valor gratis que el cliente no sienta necesidad de pagar:
- Cómo diseñar los límites correctos entre lo que es gratuito y lo que es premium en tu práctica
- Cómo evitar que los recursos gratuitos creen competencia directa con tus servicios de pago
- Cómo manejar la percepción de valor cuando das mucho gratis

**Entregables**

Genera los siguientes recursos:
1. Un ecosistema freemium personalizado para tu práctica: qué activos gratuitos crear en los próximos 90 días y cómo conectan con tus servicios premium
2. Un calendario de producción de activos gratuitos con IA para los próximos tres meses
3. Una secuencia de email de nurturing de ocho pasos para convertir suscriptores gratuitos en clientes
4. Un diagnóstico gratuito automatizado con IA para tu área de especialidad (estructura del cuestionario y output)
5. Un modelo de proyección del impacto del freemium en tus ingresos a 12 meses

El modelo freemium bien diseñado convierte al consultor freelance de vendedor de tiempo en arquitecto de valor: tus clientes te contratan antes de conocerte porque ya han recibido valor de ti.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un modelo de negocio freemium para consultores y freelancers usando IA para crear activos digitales gratuitos que atraigan clientes premium',
                'vote_score'       => 35,
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
