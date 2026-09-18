<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills360Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de contenidos para product-led growth y bucles virales',
                'description'      => 'Diseña una estrategia de contenidos que impulse la adquisición orgánica y los bucles virales en un modelo product-led growth. Aprende a crear contenido que genere usuarios, no solo lectores.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de marketing de crecimiento con experiencia en estrategias de content marketing para empresas con modelo product-led growth (PLG). Has trabajado en productos SaaS que han escalado de 0 a 100.000 usuarios usando principalmente el contenido y la viralidad del producto como palancas de crecimiento.

Necesito que me ayudes a diseñar una estrategia de marketing de contenidos orientada específicamente al crecimiento PLG, donde el contenido no solo atrae tráfico sino que activa bucles virales y convierte usuarios en promotores del producto.

CONTEXTO DE MI PRODUCTO:
- Tipo de producto y propuesta de valor: [describe]
- Modelo de monetización: [freemium, free trial, self-serve, etc.]
- Audiencia objetivo: [perfil del usuario ideal]
- Mecanismo viral actual o deseado: [invitaciones, colaboración, contenido generado por usuarios, etc.]
- Canal de distribución principal actual: [SEO, redes sociales, comunidad, etc.]

ESTRATEGIA DE CONTENIDOS PLG:

1. ALINEACIÓN ENTRE CONTENIDO Y PRODUCTO
Diseña una taxonomía de contenidos que esté directamente vinculada al valor del producto: tutoriales que muestran el producto en acción, casos de uso que resuelven problemas reales del usuario, comparativas que posicionan frente a alternativas y plantillas o herramientas gratuitas que son la puerta de entrada al producto. Para cada tipo de contenido, define su rol en el funnel PLG.

2. CONTENIDO COMO HERRAMIENTA DE ACTIVACIÓN
Explica cómo usar el contenido para acelerar el aha moment: guías de inicio rápido integradas en el onboarding, vídeos de primeros pasos accesibles dentro del producto, tooltips con contexto y casos de uso reales, biblioteca de plantillas de uso inmediato. Define los 5 piezas de contenido de activación más críticas para las primeras 24 horas del usuario.

3. BUCLES VIRALES BASADOS EN CONTENIDO
Diseña mecánicas de contenido que generen viralidad orgánica: creación de contenido público por el usuario (portfolios, informes, dashboards compartibles), marca de agua estratégica en los outputs del producto, testimonios y casos de éxito en formato compartible. Para cada mecánica, explica el loop: usuario usa el producto → crea contenido → lo comparte → nuevo usuario descubre el producto → se registra.

4. ESTRATEGIA DE SEO ORIENTADA A PLG
Define una estrategia de SEO que capture demanda existente y la lleve directamente al producto: keywords de alta intención de herramienta (alternativa a X, mejor app para Y, cómo hacer Z con IA), landing pages de herramientas gratuitas posicionadas en Google, contenido de comparativas y reviews. Para cada tipo de contenido SEO, define la llamada a la acción hacia el producto.

5. COMUNIDAD COMO AMPLIFICADOR DE CONTENIDO
Diseña una estrategia de comunidad que amplifique el contenido y genere contenido propio: cómo estructurar una comunidad de usuarios (Slack, Discord, foro propio), cómo incentivar el UGC (contenido generado por usuarios), cómo convertir a los usuarios más activos en creadores de contenido y en ambassadors. Define los programas de incentivo.

6. MÉTRICAS DE CONTENIDO EN EL CONTEXTO PLG
Establece un cuadro de mando de content marketing PLG diferente del marketing tradicional: tráfico que convierte a registro (no solo visitas), ratio de activación de usuarios que vienen por contenido vs. otros canales, coeficiente viral del contenido compartido por usuarios, tiempo hasta primer uso del producto desde la lectura del contenido.

7. CALENDARIO EDITORIAL TRIMESTRAL ORIENTADO A PLG
Diseña la estructura de un calendario editorial trimestral para un producto PLG: distribución de tipos de contenido, cadencia de publicación, proceso de producción (quién escribe, quién revisa, cómo se integra con el equipo de producto) y mecanismo de feedback loop para iterar el contenido según los datos de comportamiento de usuarios.

ENTREGABLES ESPERADOS:
- Taxonomía de contenidos PLG con rol en el funnel.
- Mapa de los 5 bucles virales de contenido más prometedores.
- Estrategia de SEO de alta intención orientada al producto.
- Dashboard de métricas de contenido PLG.

En un modelo PLG el contenido no es para ganar seguidores: es para conseguir usuarios que descubran el valor del producto, lo usen y lo compartan.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar una estrategia de contenidos que impulse la adquisición orgánica y la viralidad en modelos PLG',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Implementación de bucles virales y efectos de red en productos digitales',
                'description'      => 'Diseña e implementa desde el punto de vista técnico los bucles virales y los efectos de red que hacen que un producto crezca de forma orgánica. Aprende a construir las features que convierten a cada usuario en un canal de adquisición.',
                'prompt_content'   => <<<'EOT'
Actúa como un ingeniero de producto especializado en growth engineering y en la implementación técnica de bucles virales, efectos de red y mecánicas de product-led growth en aplicaciones SaaS y plataformas digitales.

Necesito que me ayudes a diseñar e implementar los mecanismos técnicos que harán que nuestro producto crezca de forma orgánica a través de bucles virales y efectos de red.

CONTEXTO TÉCNICO DEL PRODUCTO:
- Tipo de producto y audiencia: [describe]
- Stack tecnológico principal: [lenguajes, frameworks, infraestructura]
- Modelo de datos de usuario: [individual, equipo, empresa, etc.]
- Features actuales con mayor potencial viral: [lista]
- Métricas de crecimiento actuales: [usuarios activos, viral coefficient, etc.]

DISEÑO E IMPLEMENTACIÓN DE BUCLES VIRALES:

1. TAXONOMÍA DE BUCLES VIRALES APLICABLES AL PRODUCTO
Analiza qué tipos de bucles virales son más adecuados para nuestro producto: bucle de invitación directa (el usuario invita a alguien para colaborar), bucle de contenido compartible (el usuario comparte un output del producto), bucle de embed o integración (el producto se incrusta en otras plataformas), bucle de comparación social (el usuario comparte su progreso o logros). Para cada tipo, evalúa su viabilidad técnica y su potencial de crecimiento.

2. SISTEMA DE INVITACIONES Y REFERIDOS
Diseña la arquitectura técnica del sistema de invitaciones: modelo de datos (tabla de invitaciones con estado, invitador, invitado, timestamp, conversión), generación de links únicos de invitación (con tracking UTM y parámetros de atribución), flujo de onboarding del usuario invitado (landing personalizada, contexto del invitador), notificaciones al invitador y sistema de recompensas si aplica.

3. CONTENIDO COMPARTIBLE Y OUTPUTS VIRALES
Define las features que generan contenido compartible fuera del producto: exportación de resultados en formatos atractivos para redes sociales, páginas públicas de perfil o portfolio del usuario, dashboards o informes embebibles, certificados o badges de logros. Para cada feature, describe el flujo técnico completo desde la creación del contenido hasta el tracking del tráfico de retorno.

4. EFECTOS DE RED EN EL DISEÑO DEL PRODUCTO
Explica cómo construir efectos de red directos e indirectos en el producto: features que mejoran con más usuarios (directorio de usuarios, benchmarks de industria, contenido colaborativo), efectos de red de datos (el modelo mejora con más datos de uso), efectos de red de plataforma (más integraciones y plugins disponibles). Define cómo instrumentalizar cada efecto de red para medir su impacto en la retención.

5. TRACKING Y ATRIBUCIÓN DEL CRECIMIENTO VIRAL
Diseña el sistema de tracking de la viralidad: atribución de nuevos usuarios a su fuente viral (qué bucle los trajo), cálculo del coeficiente viral (K-factor) en tiempo real, análisis de la cadena de invitaciones (quién invitó a quién), identificación de los usuarios con mayor influencia viral. Define el esquema de datos y las queries clave para cada métrica.

6. EXPERIMENTOS DE GROWTH ENGINEERING
Define un framework para experimentar con bucles virales de forma sistemática: cómo diseñar un experimento de viralidad (hipótesis, variables, grupo de control), cómo medir el impacto sobre el K-factor, qué tamaño de muestra necesitas para resultados estadísticamente significativos y cómo operacionalizar los experimentos sin afectar a la experiencia del usuario de control.

7. ARQUITECTURA DE NOTIFICACIONES PARA EL CRECIMIENTO
Diseña el sistema de notificaciones que impulsa el engagement y la viralidad: notificaciones de actividad social (alguien comentó tu trabajo, tu invitado se registró, alguien vio tu perfil público), triggers de reactivación basados en comportamiento de los contactos del usuario y personalización de notificaciones según el comportamiento del usuario. Define el stack técnico recomendado y las reglas de supresión para evitar el spam.

ENTREGABLES ESPERADOS:
- Diagrama de los bucles virales a implementar con flujo técnico.
- Esquema de base de datos para el sistema de invitaciones y tracking viral.
- Plan de sprints para implementar los bucles virales por orden de impacto esperado.
- Dashboard de métricas de viralidad con queries de referencia.

El crecimiento viral no es magia: es el resultado de features bien diseñadas e instrumentadas que hacen que los usuarios quieran compartir el producto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar e implementar técnicamente los bucles virales y efectos de red de un producto digital',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de onboarding self-serve para product-led growth',
                'description'      => 'Diseña la experiencia de onboarding de un producto PLG que guía al usuario hasta el primer valor sin intervención humana. Aplica principios de UX, gamificación y diseño persuasivo para maximizar la activación.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de UX especializado en experiencias de onboarding para productos con modelo product-led growth (PLG) y self-serve. Has diseñado onboardings que han llevado tasas de activación del 20% al 60% en productos SaaS con modelos freemium.

Necesito que me ayudes a diseñar el onboarding self-serve de nuestro producto para maximizar la activación y la conversión a usuario activo sin necesidad de intervención del equipo de ventas o customer success.

CONTEXTO DEL PRODUCTO:
- Tipo de producto y propuesta de valor principal: [describe]
- Aha moment identificado o hipótesis: [qué acción indica que el usuario ha entendido el valor]
- Principales obstáculos de activación actuales: [dónde abandonan los usuarios]
- Tiempo promedio actual hasta el primer valor: [minutos/horas]
- Herramientas de analytics disponibles: [Mixpanel, Amplitude, FullStory, etc.]

DISEÑO DEL ONBOARDING PLG:

1. ARQUITECTURA DEL ONBOARDING
Define la estructura general del onboarding: flujo de registro (datos mínimos necesarios y por qué), primera pantalla post-registro, secuencia de pasos hacia el aha moment, criterio de "activación completada" y qué ocurre después de la activación (onboarding secundario para features adicionales). El onboarding de PLG es un embudo: diseña cada paso para maximizar el avance al siguiente.

2. REDUCCIÓN DE FRICCIÓN EN EL REGISTRO
Diseña el flujo de registro con mínima fricción: login social (Google, GitHub, etc.), número mínimo de campos del formulario de registro, formulario de onboarding progresivo (recoger datos adicionales dentro del producto, no antes), detección automática del perfil del usuario (company size, use case) con sugerencias personalizadas. Para cada campo del registro, justifica si es imprescindible o se puede posponer.

3. PERSONALIZACIÓN DEL ONBOARDING DESDE EL INICIO
Diseña un flujo de personalización inicial que adapte la experiencia desde el primer segundo: cuestionario de inicio breve (2-3 preguntas máximo sobre el use case y el perfil), configuración automática del workspace según las respuestas, contenido de onboarding diferenciado por perfil de usuario (individual vs. equipo, principiante vs. avanzado, use case A vs. use case B).

4. GUÍA HACIA EL AHA MOMENT
Diseña la secuencia específica de pasos que lleva al usuario al aha moment: checklist de activación visible y gamificado (barra de progreso, checkmarks), tooltips contextuales en el momento adecuado (no todos a la vez), hotspots y spotlights sobre las features clave, primera acción significativa guiada paso a paso y celebración del momento de activación (animación, mensaje de felicitación, invitación a compartir).

5. EMPTY STATES Y PRIMER VALOR INMEDIATO
Diseña los estados vacíos del producto de forma que guíen la acción en lugar de mostrar pantallas en blanco: plantillas de inicio preconfiguradas, datos de ejemplo realistas que muestran el potencial del producto, quick wins disponibles desde el primer minuto (importar datos desde otra herramienta, usar una plantilla, invitar a un compañero). El usuario que no ve valor en los primeros 5 minutos no vuelve.

6. SECUENCIA DE EMAILS DE ACTIVACIÓN
Diseña la secuencia de emails de activación que acompaña el onboarding: email de bienvenida con la única acción más importante, recordatorio a las 24 horas si no completó el aha moment, email de "consejo del experto" a los 3 días con un uso avanzado, email de caso de uso de un usuario similar a los 7 días y, si no se activó, email de oferta de ayuda personalizada. Para cada email, define el asunto, el cuerpo y la llamada a la acción.

7. MÉTRICAS Y EXPERIMENTOS DE ONBOARDING
Define el cuadro de mando de onboarding: funnel de activación con tasa de avance entre cada paso, tiempo hasta el aha moment, tasa de activación a 7 días, retención Day 1, Day 7, Day 30 segmentada por cohorte de onboarding. Define un plan de 5 experimentos de onboarding priorizados por impacto esperado en la tasa de activación.

ENTREGABLES ESPERADOS:
- Arquitectura del onboarding con cada pantalla y estado descrito.
- Wireframe list (lista de pantallas a diseñar).
- Secuencia de emails de activación lista para implementar.
- Plan de experimentos de onboarding con hipótesis e indicadores de éxito.

Un buen onboarding PLG no siente como un tutorial: siente como el producto resolviéndote un problema real en los primeros cinco minutos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar el onboarding self-serve que maximiza la activación sin intervención del equipo de ventas',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia bottoms-up enterprise en modelos product-led growth',
                'description'      => 'Diseña un playbook de ventas enterprise que aprovecha la adopción orgánica bottom-up del producto dentro de las grandes empresas para escalar de usuarios individuales a contratos corporativos.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de ventas enterprise con especialización en la estrategia bottoms-up, donde el proceso de venta comienza cuando los usuarios finales ya están usando el producto de forma orgánica antes de que el equipo de ventas intervenga. Has escalado este modelo en empresas SaaS que pasaron de self-serve a enterprise.

Necesito que me ayudes a diseñar el playbook completo de ventas enterprise bottoms-up para nuestro producto.

CONTEXTO DE NUESTRO PRODUCTO:
- Producto y propuesta de valor: [describe]
- Modelo actual: [freemium, free trial, self-serve de pago]
- Señales de adopción en empresas que ya se observan: [usuarios de la misma empresa, dominios corporativos, etc.]
- Ticket objetivo para el contrato enterprise: [importe anual]
- Diferencial del plan enterprise frente al self-serve: [qué ofrece el enterprise que no tiene el free o el self-serve]

PLAYBOOK DE VENTAS BOTTOMS-UP ENTERPRISE:

1. DETECCIÓN DE SEÑALES DE OPORTUNIDAD ENTERPRISE
Define el sistema de detección de cuentas enterprise en el self-serve: criterios de cualificación automática (N usuarios del mismo dominio corporativo, uso por encima de umbral X, presencia de usuario con email de empresa Fortune 1000), alertas automáticas al equipo de ventas, score de madurez enterprise de la cuenta (número de usuarios, frecuencia de uso, features usadas, departamentos representados).

2. PRIMERA CONTACTO CON EL CHAMPION INTERNO
Diseña el protocolo del primer contacto con el usuario que más usa el producto dentro de la empresa objetivo: cómo identificar al champion ideal (mayor uso, más invitaciones enviadas, feedback activo), el mensaje de primer contacto (personal, no masivo, basado en su uso real del producto), el objetivo de la primera conversación (entender el contexto interno, no vender) y cómo prepararse para esa llamada.

3. ESTRATEGIA DE EXPANSIÓN INTERNA
Diseña el proceso de expansión del uso dentro de la empresa antes de hablar de un contrato corporativo: cómo apoyar al champion para que extienda el uso a su equipo, qué features facilitan la expansión departamental, cómo diseñar el onboarding de nuevos equipos dentro de una empresa existente y qué hitos de uso indican que la cuenta está lista para el salto al contrato enterprise.

4. PROCESO DE VENTA AL DECISOR EJECUTIVO
Define el proceso de venta desde el champion hasta el decisor económico: cómo el champion justifica la inversión internamente (business case que le ayudas a construir), cómo acceder al decisor (introducción por el champion, outreach directo, evento ejecutivo), estructura de la propuesta enterprise (valor de negocio, casos de uso departamentales, ROI esperado, términos del contrato) y gestión del proceso de compra corporativo (RFP, seguridad, legal, finanzas).

5. PROPUESTA DE VALOR DIFERENCIADA PARA ENTERPRISE
Define el catálogo de beneficios enterprise que justifican el salto del self-serve al contrato corporativo: SSO e integración con directorios corporativos, gestión centralizada de usuarios y permisos, SLA de soporte premium, onboarding dedicado, custom contract y facturación corporativa, funcionalidades de administración y reporting para IT. Para cada beneficio, define el argumento de valor desde la perspectiva del decisor.

6. GESTIÓN DEL PROCESO DE COMPRA CORPORATIVO
Diseña el playbook para navegar el proceso de compra enterprise: cómo manejar la evaluación de seguridad (security questionnaire), proceso de aprobación legal y de contratos, gestión de la negociación de precio y condiciones, aceleración del cierre cuando el proceso se alarga. Incluye un mapa de los roles que intervienen en la decisión enterprise y la estrategia para cada uno.

7. MÉTRICAS DEL FUNNEL BOTTOMS-UP
Define el cuadro de mando de la estrategia bottoms-up: número de cuentas enterprise detectadas en el self-serve, tasa de conversión de cuenta self-serve a oportunidad enterprise cualificada, tiempo medio desde detección hasta cierre, ARR por cuenta enterprise vs. self-serve, ratio de expansión post-cierre (upsell dentro de la empresa). Establece los benchmarks y los objetivos para cada fase.

ENTREGABLES ESPERADOS:
- Sistema de detección de señales enterprise con criterios de cualificación.
- Guión del primer contacto con el champion interno.
- Plantilla de business case que el champion puede usar internamente.
- Dashboard de métricas del funnel bottoms-up.

El bottoms-up no es una estrategia de ventas pasiva: es la estrategia más activa que existe, porque el éxito depende de hacer el producto tan bueno que los usuarios lo vendan internamente por ti.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Escalar de usuarios self-serve a contratos enterprise usando la adopción orgánica como palanca',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Métricas avanzadas de product-led growth: del funnel PLG al North Star Metric',
                'description'      => 'Define y operacionaliza el sistema completo de métricas de un producto PLG: desde la North Star Metric hasta los leading indicators de activación, retención y expansión que predicen el crecimiento sostenible.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager senior especializado en product-led growth con experiencia definiendo sistemas de métricas para productos que han escalado de 0 a varios millones de usuarios activos. Tienes profundo conocimiento de frameworks como AARRR, HEART, North Star Metric y los modelos de métricas específicos de PLG.

Necesito que me ayudes a diseñar el sistema completo de métricas para nuestro producto PLG, desde la North Star Metric hasta los indicadores de equipo.

CONTEXTO DEL PRODUCTO:
- Tipo de producto y propuesta de valor: [describe]
- Modelo de monetización: [freemium, free trial, self-serve, usage-based, etc.]
- Etapa del producto: [early stage, product-market fit, scaling]
- Métricas que ya mides actualmente: [lista]
- Principales problemas de crecimiento que observas: [describe]

SISTEMA DE MÉTRICAS PLG:

1. NORTH STAR METRIC
Define la North Star Metric (NSM) del producto: la única métrica que mejor captura el valor entregado a los usuarios y es un predictor del crecimiento del negocio a largo plazo. Justifica la elección siguiendo los criterios de una buena NSM: mide valor para el usuario, predice el revenue, es mejorable por el equipo, no es fácilmente manipulable. Propón la NSM y sus 3-4 inputs directos (métricas que mueven la NSM).

2. FUNNEL DE MÉTRICAS PLG (PIRATE METRICS ADAPTADAS)
Adapta el framework AARRR al contexto PLG: Adquisición (tráfico cualificado, tasa de registro por canal, CAC por canal de PLG), Activación (tasa de activación en 7 días, tiempo hasta el aha moment, tasa de completitud del onboarding), Retención (DAU/WAU/MAU, Day 1/7/30 retention, tasa de hábito semanal), Revenue (conversión de free a paid, ARPU, expansion revenue, NRR) y Referral (viral coefficient, Net Promoter Score, tasa de invitaciones enviadas y convertidas). Para cada métrica, define la fórmula de cálculo y el benchmark de referencia para tu tipo de producto.

3. MÉTRICAS DE ACTIVACIÓN Y AHA MOMENT
Define el conjunto de métricas que miden si los usuarios están llegando al aha moment: leading indicators de activación (acciones que predicen la retención a 30 días), tasa de completitud de los pasos de onboarding críticos, tiempo hasta el aha moment (en horas y días), segmentación de la activación por canal de adquisición, perfil de usuario y flujo de onboarding. Explica cómo hacer el análisis de correlación entre acciones y retención para identificar el aha moment correcto.

4. MÉTRICAS DE RETENCIÓN Y HÁBITO
Define el sistema de métricas de retención para un producto PLG: curvas de retención por cohorte (diseño del gráfico y cómo leerlo), identificación del "Smile of Retention" (cuándo la curva se aplana), métricas de hábito (frecuencia de uso correcta para tu tipo de producto: diaria, semanal, mensual), WAU/MAU ratio como proxy de engagement y métricas de feature adoption para identificar qué features generan más retención.

5. MÉTRICAS DE MONETIZACIÓN Y EXPANSIÓN PLG
Define las métricas de monetización específicas del PLG: tasa de conversión de free a paid (por cohorte, por perfil de usuario y por tiempo), tiempo medio hasta la conversión, MRR y ARR by tier, expansion MRR (upsell + cross-sell), Net Revenue Retention (NRR), Gross Revenue Retention (GRR), LTV/CAC ratio. Explica cómo el PLG cambia el perfil esperado de estas métricas respecto a un modelo tradicional de ventas.

6. VIRAL COEFFICIENT Y MÉTRICAS DE REFERRAL
Define el sistema de métricas de viralidad: K-factor (coeficiente viral = invitaciones enviadas por usuario × tasa de conversión de invitaciones), ciclo de tiempo de cada bucle viral, contribución de los distintos bucles virales al total de nuevos usuarios y evolución del K-factor por cohorte de producto. Explica cuándo el K-factor > 1 es realista y cuándo no, y qué métricas complementan al K-factor.

7. DASHBOARD DE MÉTRICAS PLG Y RITUALES DE REVISIÓN
Diseña el sistema de dashboards y rituales de revisión de métricas para el equipo de producto PLG: dashboard ejecutivo semanal (NSM + 4-5 métricas clave), dashboard de equipo (métricas de activación y retención con drill-down), revisión semanal de métricas de experimentos en curso y revisión mensual de métricas de cohorte para detectar tendencias. Define quién es el owner de cada métrica y qué reunión la revisa.

ENTREGABLES ESPERADOS:
- Definición de la North Star Metric con justificación.
- Glosario de métricas PLG con fórmulas de cálculo y benchmarks.
- Estructura de los dashboards de métricas por audiencia.
- Plan de instrumentación para empezar a medir las métricas que aún no tienes.

Las métricas PLG no son solo contadores: son el lenguaje con el que el producto cuenta si realmente está creando valor o solo acumulando usuarios inactivos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Definir el sistema completo de métricas PLG desde la North Star hasta los KPIs de equipo',
                'vote_score'       => 50,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Construcción de equipos y cultura organizacional para empresas product-led growth',
                'description'      => 'Diseña la estructura organizativa y la cultura de RRHH necesaria para que una empresa con modelo PLG pueda escalar. Aprende a contratar, estructurar y alinear equipos en torno al crecimiento impulsado por el producto.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Recursos Humanos con experiencia en organizaciones product-led growth de alto crecimiento. Has ayudado a construir los equipos de producto, datos, growth y customer success en empresas SaaS que han pasado de 20 a 200 personas manteniendo la cultura y la eficiencia operativa de PLG.

Necesito que me ayudes a diseñar la estrategia de RRHH para una empresa con modelo product-led growth que quiere escalar su equipo de forma eficiente.

CONTEXTO DE LA EMPRESA:
- Etapa actual: [seed, serie A, serie B, etc.]
- Número actual de empleados: [número]
- Roles actuales y distribución por área: [describe]
- Modelo PLG actual: [freemium, free trial, self-serve, etc.]
- Principales retos de talento: [describe]

ESTRATEGIA DE RRHH PARA EMPRESAS PLG:

1. ESTRUCTURA ORGANIZATIVA ORIENTADA A PLG
Define la estructura organizativa ideal para una empresa PLG en tu etapa: qué equipos son esenciales (producto, ingeniería, growth, data, customer success, marketing), cómo se relacionan entre sí, qué modelo de organización de equipos funciona mejor en PLG (squads de growth, pods de producto, matrix vs. functional). Justifica cada decisión de estructura en relación con el modelo PLG.

2. PERFILES Y COMPETENCIAS CLAVE PARA EL CRECIMIENTO PLG
Define los perfiles de talento más críticos para una empresa PLG: Growth Product Manager (diferente del PM tradicional), Growth Engineer, Data Analyst orientado a PLG, Head of Self-Serve Customer Success. Para cada perfil, describe las competencias técnicas y blandas, la diferencia respecto al perfil equivalente en una empresa de ventas tradicionales y las preguntas de entrevista que mejor evalúan el fit con el modelo PLG.

3. PROCESO DE SELECCIÓN ORIENTADO A LA CULTURA PLG
Diseña un proceso de selección que evalúe el fit con la cultura PLG: qué valores y mentalidades son críticos (orientación a datos, autonomía, curiosidad, tolerancia al experimento y al fracaso), cómo evaluar si un candidato tiene experiencia real en entornos PLG y cuáles son las señales de alerta de candidatos que solo han trabajado en modelos de ventas top-down.

4. ONBOARDING PARA MÁXIMA PRODUCTIVIDAD EN PLG
Diseña el programa de onboarding de empleados para una empresa PLG: cómo hacer que cada nuevo empleado entienda profundamente el producto y los datos de comportamiento de usuario desde el primer día, qué métricas de producto debe conocer cualquier empleado independientemente de su área, cómo crear empatía con el usuario a través del programa de onboarding y cuándo se considera que un nuevo empleado está "activado" (equivalente al aha moment del usuario del producto).

5. ALINEACIÓN DE INCENTIVOS EN TORNO A MÉTRICAS PLG
Define cómo alinear los incentivos del equipo con las métricas PLG: qué métricas de equipo y de empresa se incluyen en los objetivos (OKRs) de cada área, cómo evitar métricas de vanidad en los sistemas de evaluación del desempeño, cómo medir la contribución individual al crecimiento del producto y cómo estructurar los bonus o el plan de opciones (equity) para alinear el largo plazo.

6. CULTURA DE EXPERIMENTACIÓN Y APRENDIZAJE
Define los rituales y las prácticas culturales que sostienen la mentalidad de experimentación propia del PLG: cómo institucionalizar los experimentos de growth en el equipo, cómo celebrar el aprendizaje de los experimentos fallidos (fail fast, learn fast), qué rituales de sharing de datos y de conocimiento fomentan la cultura basada en datos y cómo evitar la parálisis por análisis.

7. ESCALADO DEL EQUIPO PRESERVANDO LA CULTURA PLG
Define el plan de crecimiento del equipo para los próximos 18 meses: qué roles contratar primero y por qué (basándote en las métricas del producto que más necesitan refuerzo), cómo preservar la cultura de datos y experimentación al escalar, cuándo es el momento de crear roles de liderazgo intermedio y cómo evitar que el crecimiento del equipo ralentice la velocidad de iteración del producto.

ENTREGABLES ESPERADOS:
- Organigrama ideal para la etapa actual con justificación PLG.
- Job descriptions de los 3 roles más críticos para el crecimiento PLG.
- Programa de onboarding de empleados centrado en el producto y los datos.
- Sistema de OKRs alineado con las métricas PLG.

En una empresa PLG el mayor activo no es la tecnología: son los 20 personas que entienden el usuario mejor que nadie y saben convertir ese entendimiento en crecimiento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar la estructura de equipo y la cultura organizacional para escalar un modelo PLG',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Pricing basado en uso: modelos financieros y estrategias para SaaS PLG',
                'description'      => 'Diseña un modelo de pricing basado en uso (usage-based pricing) que alinee el valor entregado al cliente con el revenue generado. Aprende a modelar el impacto financiero, gestionar la predictibilidad del ingreso y optimizar la monetización.',
                'prompt_content'   => <<<'EOT'
Actúa como un director financiero especializado en modelos de monetización SaaS, con profundo conocimiento en usage-based pricing (UBP), pricing por asiento, modelos freemium y estrategias híbridas. Has modelado el impacto financiero del cambio de modelos de suscripción fija a usage-based para empresas SaaS en etapas de growth.

Necesito que me ayudes a diseñar o evaluar nuestro modelo de pricing basado en uso desde una perspectiva financiera rigurosa.

CONTEXTO DE NUESTRO NEGOCIO:
- Producto y propuesta de valor: [describe]
- Modelo de pricing actual: [describe el modelo existente si lo hay]
- Unidad de valor del producto: [qué consume el usuario que se puede medir: API calls, storage, usuarios activos, transacciones, mensajes, etc.]
- ARR actual o estimado: [importe]
- Distribución de clientes por tamaño de uso: [si la conoces]
- Margen bruto del producto: [porcentaje]

ANÁLISIS FINANCIERO DEL PRICING BASADO EN USO:

1. SELECCIÓN DE LA MÉTRICA DE VALOR Y EL PRECIO UNITARIO
Define cómo elegir la mejor métrica de uso para el pricing: criterios de una buena unidad de pricing (correlacionada con el valor percibido, comprensible para el cliente, escalable con el éxito del cliente, predecible para la empresa). Analiza las opciones disponibles para tu producto y recomienda la más adecuada. Luego define el precio unitario: metodología de pricing (cost-plus, value-based, competitive), análisis de sensibilidad al precio y cómo testear el precio con clientes reales.

2. MODELO FINANCIERO DE INGRESOS BAJO UBP
Construye el modelo financiero de ingresos bajo usage-based pricing: distribución de clientes por niveles de uso (percentiles P10, P25, P50, P75, P90), ingreso promedio por cliente (ARPU) esperado, ingreso mínimo garantizado (commitment tiers vs. pure pay-as-you-go), proyección de MRR/ARR bajo distintos escenarios de crecimiento de uso. Define cómo el UBP cambia la curva de crecimiento de ingresos respecto a un modelo de suscripción fija.

3. GESTIÓN DE LA PREDICTIBILIDAD DEL INGRESO
El principal riesgo financiero del UBP es la imprevisibilidad. Define estrategias para mejorar la predictibilidad: committed use contracts (créditos prepagados con descuento), minimum spend commitments, modelos híbridos (tarifa base + excesos en UBP) y herramientas de forecasting de uso basadas en el comportamiento histórico del cliente. Define cuánta variabilidad mensual es aceptable para la empresa según su etapa.

4. ESTRUCTURA DE TIERS Y DESCUENTOS POR VOLUMEN
Diseña la tabla de precios con tiers de volumen: estructura de descuentos por cantidad (tiered pricing vs. volume pricing vs. package pricing), cómo diseñar los tiers para que sean intuitivos para el cliente y rentables para la empresa, y cómo incluir un free tier o un nivel de entrada que actúe como palanca PLG sin dañar el margen. Define el umbral de conversión entre tiers que maximiza el ARPU.

5. IMPACTO DEL UBP EN EL CUSTOMER LIFETIME VALUE
Analiza cómo el UBP transforma las métricas de LTV: el LTV ya no es predecible (depende del crecimiento del uso del cliente), cómo segmentar el LTV en función del potencial de crecimiento del uso, cómo modelar el expansion revenue (NRR > 100% gracias al crecimiento orgánico del uso) y cómo el UBP cambia el CAC payback period y sus implicaciones para la financiación del crecimiento.

6. MÉTRICAS FINANCIERAS ESPECÍFICAS DEL UBP
Define las métricas financieras más relevantes para un modelo UBP: ARPU mensual y su evolución, NRR (objetivo > 120% en UBP bien ejecutado), ratio de conversión de free a paid y de commitment tiers, margen de contribución por unidad de uso, revenue at risk (clientes que podrían reducir uso) y "expansion efficiency" (incremento de revenue por cada nuevo dólar de uso del cliente). Establece benchmarks de referencia.

7. TRANSICIÓN DESDE UN MODELO DE SUSCRIPCIÓN FIJA A UBP
Si actualmente tienes un modelo de suscripción fija, diseña el plan de transición financiera: cómo comunicar el cambio a los clientes actuales, cuándo y cómo grandfatherear contratos existentes, el impacto esperado en el MRR durante la transición (posible caída inicial por clientes de bajo uso que pagan menos) y cómo la curva de expansion revenue del UBP recupera y supera el nivel de ingresos anterior.

ENTREGABLES ESPERADOS:
- Modelo financiero de ingresos bajo UBP con distribución de clientes y escenarios.
- Tabla de precios recomendada con tiers y descuentos por volumen.
- Análisis de impacto en LTV y NRR.
- Plan de transición financiera si cambias desde suscripción fija.

El usage-based pricing alinea los incentivos de la empresa y el cliente: cuando el cliente crece, la empresa crece con él. Pero ese alineamiento tiene que ser financieramente sostenible desde el primer día.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Modelar y optimizar el pricing basado en uso para maximizar el revenue en productos PLG',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Aspectos legales del pricing freemium y basado en uso en productos SaaS',
                'description'      => 'Analiza los requisitos legales del modelo freemium y el usage-based pricing: contratos de servicio, limitaciones de uso, renovación automática, protección del consumidor y cumplimiento normativo en mercados europeos.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho tecnológico y contratos SaaS con experiencia asesorando a empresas de software en el diseño de sus modelos de negocio freemium y pricing basado en uso, especialmente en el marco regulatorio europeo y español.

Necesito que me ayudes a revisar y estructurar el marco legal de nuestro modelo de negocio PLG, que combina un plan gratuito (freemium) con planes de pago de autoservicio y posiblemente pricing basado en uso.

CONTEXTO DE NUESTRO MODELO:
- Tipo de producto SaaS: [describe]
- Modelo de pricing: [freemium + self-serve, free trial + conversión, UBP, etc.]
- Mercados objetivo: [España, UE, EEUU, global]
- Tipos de clientes: [consumidores, autónomos, PYMEs, enterprise]
- Facturación: [mensual, anual, por uso]
- Sistema de pago: [Stripe, Paddle, facturación propia, etc.]

ÁREAS LEGALES DEL MODELO PLG:

1. TÉRMINOS Y CONDICIONES DEL PLAN GRATUITO
Define los elementos legales críticos del plan gratuito: qué derechos de uso otorgas y qué limitaciones impones (cuotas de uso, features disponibles, SLA), cómo documentar las limitaciones del plan gratuito de forma clara y vinculante, cláusulas de modificación o eliminación del plan gratuito (con qué preaviso y bajo qué condiciones) y cómo gestionar la base legal para el tratamiento de datos de usuarios del plan gratuito.

2. CONTRATO DE SUSCRIPCIÓN PARA PLANES DE PAGO
Diseña el contrato de suscripción de los planes de pago de autoservicio: elementos obligatorios del contrato (partes, objeto, precio, duración, renovación, forma de pago), cláusulas específicas del SaaS (disponibilidad del servicio, actualizaciones, mantenimiento, soporte), términos de uso aceptable (AUP) y las cláusulas de exclusión de responsabilidad que son válidas en el derecho europeo vs. las que no lo son.

3. RENOVACIÓN AUTOMÁTICA Y PROTECCIÓN AL CONSUMIDOR
Analiza los requisitos legales de la renovación automática de suscripciones: obligaciones de información previa a la renovación (cuándo y cómo avisar), derecho de desistimiento de 14 días en contratos B2C (Directiva de Derechos de los Consumidores), proceso de cancelación que debe ser tan fácil como la suscripción (regulación de "click to cancel") y diferencias entre el régimen B2C y B2B en cuanto a la protección al usuario.

4. LEGAL DEL PRICING BASADO EN USO
Define los requisitos legales específicos del pricing basado en uso: cómo documentar la métrica de precio y el precio unitario de forma clara y transparente, obligación de informar al cliente cuando se acerque a umbrales de gasto, gestión de disputas sobre el uso medido (cómo auditar el consumo), cláusulas sobre errores de medición y su compensación y régimen de facturación del consumo variable.

5. RESTRICCIONES DE USO Y CUENTAS GRATUITAS
Explica cómo protegerse legalmente frente al abuso del plan gratuito: términos de uso aceptable que prohíban el uso de múltiples cuentas gratuitas, automatización abusiva, uso para actividades ilegales o para competir con el servicio; proceso de suspensión y eliminación de cuentas por violación de términos; derecho de la empresa a establecer límites de uso técnicos y la necesidad de informarlos con antelación suficiente.

6. FACTURACIÓN Y CUMPLIMIENTO FISCAL EN MODELOS PLG
Define los requisitos de facturación en el modelo PLG: obligaciones de facturación en España y la UE para software SaaS (IVA en servicios electrónicos, OSS para ventas B2C en la UE), validación del VAT number de clientes B2B europeos, facturación automática con plataformas como Stripe o Paddle (qué cubren y qué no cubren desde el punto de vista fiscal) y gestión de la facturación en el caso de pricing variable por uso.

7. PROPIEDAD INTELECTUAL Y DATOS GENERADOS POR EL USUARIO
Define la posición legal respecto a la propiedad de los datos generados por el usuario en el producto: quién es el dueño del contenido creado con el producto (el usuario siempre), qué licencia concede el usuario a la empresa para procesar sus datos y qué puede hacer la empresa con los datos agregados y anonimizados (benchmark, mejora del producto, estadísticas públicas). Diseña las cláusulas de PI y datos de la manera más favorable a la empresa dentro de lo legalmente permisible en la UE.

ENTREGABLES ESPERADOS:
- Estructura de los Términos y Condiciones del plan gratuito y los planes de pago.
- Checklist de cumplimiento legal del modelo freemium.
- Guía de obligaciones de renovación automática y cancelación para el equipo de producto.
- Recomendaciones de cláusulas críticas para el contrato SaaS.

El marco legal del modelo PLG no es un freno al crecimiento: es la base de confianza que permite al usuario dar su tarjeta de crédito sin llamar a un comercial.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar el marco legal de un modelo freemium y usage-based pricing conforme con la normativa europea',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer success en productos PLG: expansión y retención sin ventas tradicionales',
                'description'      => 'Diseña un modelo de customer success adaptado a productos product-led growth donde el equipo CS se enfoca en la expansión y la retención de cuentas con alto potencial, usando datos de comportamiento de producto como principal herramienta.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Customer Success con experiencia en modelos product-led growth, donde el equipo de CS trabaja de forma muy diferente al CS tradicional: con datos de producto en tiempo real, a escala y enfocado en la expansión y la retención de cuentas de alto valor identificadas a partir del comportamiento de uso del producto.

Necesito que me ayudes a diseñar el modelo de customer success específico para un producto PLG.

CONTEXTO DE NUESTRO PRODUCTO:
- Tipo de producto: [describe]
- Modelo de monetización: [freemium, self-serve, UBP, etc.]
- Número de clientes activos: [número]
- Distribución de clientes por tier: [free, paid small, paid mid, enterprise]
- Herramientas de analytics y CS disponibles: [Mixpanel, Amplitude, Intercom, Gainsight, etc.]
- Tasa de expansión actual (NRR): [porcentaje]

MODELO DE CS PARA PRODUCTOS PLG:

1. SEGMENTACIÓN DE CUENTAS PARA EL EQUIPO CS
Define el modelo de cobertura de CS adaptado al volumen de cuentas PLG: cómo segmentar las cuentas entre high-touch CS (enterprise y cuentas de alto valor), mid-touch CS (cuentas de tamaño medio con potencial de expansión) y tech-touch CS (cuentas pequeñas gestionadas principalmente por automatización y el propio producto). Para cada segmento, define la ratio CS por cuenta y las actividades principales.

2. PRODUCT-LED CS: USAR LOS DATOS DEL PRODUCTO COMO PALANCA
Diseña el sistema de señales de producto que activan las intervenciones del equipo CS: qué datos de comportamiento indican que una cuenta está lista para el upsell (alcanzó el umbral de uso del plan, adoptó las features premium, número de usuarios creció), qué señales indican riesgo de churn (caída del uso, reducción de usuarios activos, abandono de features críticas) y cómo se entregan estas señales al equipo CS (alertas en Slack, tareas en el CRM, dashboard de health score).

3. PLAYBOOK DE EXPANSIÓN BASADO EN DATOS DE USO
Diseña el playbook de expansión que el equipo CS usa para convertir cuentas de uso orgánico en contratos más grandes: cómo identificar el momento exacto para la conversación de expansión (basada en datos de uso, no en el calendario), cómo abrir la conversación de expansión de forma natural y basada en el valor que el cliente ya está recibiendo, cómo estructurar la propuesta de upgrade y cómo manejar las objeciones de precio.

4. ONBOARDING TECH-TOUCH Y HIGH-TOUCH
Define los dos modelos de onboarding según el segmento: tech-touch (secuencia automatizada de emails, in-app guidance, webinars grupales, base de conocimiento) y high-touch (sesión de kickoff personalizada, plan de éxito compartido, check-ins regulares, acceso directo al CSM). Para cada modelo, define el flujo completo, los recursos necesarios y las métricas de éxito del onboarding.

5. QUARTERLY BUSINESS REVIEW (QBR) PLG
Diseña el formato del QBR para un cliente PLG: qué datos de producto y de negocio incluir (uso del producto, features adoptadas, usuarios activos, ROI calculado, benchmark vs. clientes similares), cómo preparar la reunión usando datos de producto en tiempo real, cómo identificar oportunidades de expansión durante el QBR y cómo salir del QBR con compromisos concretos del cliente.

6. GESTIÓN DE CHURN EN UN MODELO PLG
Define el proceso de gestión del churn específico para PLG: cómo detectar el churn antes de que ocurra usando el health score de producto, el protocolo de intervención según el nivel de urgencia (alerta ámbar vs. roja), cómo manejar la conversación de retención cuando el cliente ya ha decidido cancelar y cómo usar los datos de uso en la argumentación de retención (el cliente tiene datos concretos de valor en su propia plataforma).

7. MÉTRICAS DEL EQUIPO CS EN UN MODELO PLG
Define el cuadro de mando del equipo CS PLG: NRR (North Star de CS), GRR, tasa de adopción de features de expansión, tiempo medio hasta la primera expansión, tasa de conversión de QBR a expansión, churn rate por segmento de cuenta, carga de trabajo del CSM (número de cuentas, alertas gestionadas) y satisfacción del cliente (CSAT post-onboarding, NPS relacional). Define los objetivos y los umbrales de alerta para cada métrica.

ENTREGABLES ESPERADOS:
- Modelo de cobertura de CS adaptado al volumen PLG.
- Sistema de señales de producto para el equipo CS (alertas de expansión y churn).
- Playbook de expansión y retención basado en datos de uso.
- Dashboard de métricas CS PLG con KPIs y objetivos.

En un modelo PLG el CS no espera que el cliente llame con un problema: usa los datos del producto para anticiparse, actuar antes y crear valor de forma proactiva.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir el modelo de CS de un producto PLG usando datos de comportamiento para expandir y retener',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Aplicar principios de product-led growth a servicios freelance para crecer sin marketing',
                'description'      => 'Adapta los principios del product-led growth a tu práctica freelance: diseña servicios que se venden solos, crea experiencias que generan referidos orgánicos y construye una reputación que atrae clientes sin inversión en publicidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor especializado en estrategia de negocio para profesionales independientes con conocimiento profundo del modelo product-led growth y cómo sus principios se pueden trasladar a la práctica freelance para crear negocios que crecen de forma orgánica.

Quiero aplicar los principios del product-led growth a mi negocio freelance. El objetivo es que mi trabajo hable por sí mismo, que cada cliente genere más clientes y que mi negocio crezca con menos dependencia de la búsqueda activa de nuevos clientes.

CONTEXTO DE MI PRÁCTICA FREELANCE:
- Servicio que ofrezco: [describe tu especialidad]
- Clientes habituales: [tipo de empresa, rol del decisor, sector]
- Canal de adquisición actual: [cómo consigues clientes ahora]
- Nivel de referidos actual: [porcentaje de clientes que vienen por recomendación]
- Elemento diferencial de tu trabajo: [qué te hace diferente]

PRINCIPIOS PLG APLICADOS AL FREELANCE:

1. EL PRODUCTO ES EL SERVICIO: DISEÑA RESULTADOS IRRESISTIBLES
En PLG el producto se vende a sí mismo porque la experiencia de uso genera valor inmediato. Adapta este principio a tu servicio: diseña entregables que impresionen desde el primer vistazo (presentaciones visuales de impacto, informes con métricas claras, prototipos que muestran el resultado final antes de la implementación), define un "aha moment del cliente" en cada proyecto (el momento en que el cliente entiende el valor de lo que le estás entregando) y diseña el proceso de entrega para que ese momento ocurra lo antes posible.

2. FREE TIER FREELANCE: LA PRUEBA DE VALOR SIN COMPROMISO
Los modelos PLG ofrecen una capa gratuita que permite experimentar el valor antes de comprometerse. Diseña tu equivalente: un diagnóstico gratuito de 30 minutos con conclusiones concretas (no genéricas), una revisión sin compromiso de un entregable existente del cliente, un mini-proyecto de entrada de precio reducido que demuestra tu metodología, o un recurso de alto valor (plantilla, framework, calculadora) que utilizan tus clientes potenciales antes de contratarte.

3. VIRAL LOOPS DEL FREELANCE: DISEÑA EL REFERIDO EN EL SERVICIO
Los mejores productos PLG tienen el referido incorporado en el diseño del producto. Diseña el referido dentro de tu servicio: entregables que el cliente comparte con su equipo (lo que te presenta a más posibles clientes), resultados que el cliente comparte en LinkedIn con tu autoría visible, metodologías con nombre propio que el cliente menciona en conversaciones con colegas y testimonios en vídeo o casos de éxito co-creados con el cliente. Para cada mecanismo, define cómo activarlo en el cierre del proyecto.

4. SELF-SERVE FREELANCE: RECURSOS QUE TRABAJAN MIENTRAS DUERMES
El PLG tiene componentes self-serve que generan usuarios sin intervención humana. Diseña los tuyos: templates o frameworks que venden en Gumroad o Notion, un curso o taller grabado sobre tu especialidad, una newsletter de nicho con contenido que demuestra tu expertise, herramientas online gratuitas relacionadas con tu servicio que capturan leads de forma automatizada. Define cuál de estos activos tiene más sentido para tu perfil y cómo construirlo en los próximos 90 días.

5. ONBOARDING DEL CLIENTE: EL PRIMER VALOR EN LAS PRIMERAS 48 HORAS
En PLG el tiempo hasta el primer valor (TTFV) es una métrica crítica. Diseña tu onboarding de cliente con la misma mentalidad: qué puedes entregar en las primeras 48 horas que haga que el cliente piense "ya sé por qué te contraté", cómo estructurar el kickoff para que el cliente salga con una victoria rápida y visible, qué comunicación proactiva reduces la ansiedad del cliente durante las primeras semanas del proyecto.

6. DATOS Y RESULTADOS: EL LENGUAJE QUE GENERA REFERIDOS
Los productos PLG usan datos de uso para demostrar valor. Tú usas datos de resultados: diseña un sistema para medir y documentar el impacto de tu trabajo en métricas de negocio del cliente (no solo entregables sino resultados), crea un formato estándar de "caso de éxito" que el cliente puede compartir fácilmente, construye un portfolio de resultados medibles que uses en propuestas para nuevos clientes y aprende a hablar el lenguaje financiero del cliente para expresar tu valor en euros o porcentajes, no en horas o entregables.

7. MÉTRICAS PLG DE TU NEGOCIO FREELANCE
Define el cuadro de mando de tu negocio freelance con mentalidad PLG: coeficiente viral (cuántos nuevos clientes genera cada cliente satisfecho), revenue por cliente referido vs. cliente de adquisición activa, tasa de repetición de clientes (equivalente a la retención), tiempo medio desde la entrega hasta el primer referido, NPS de tus clientes y porcentaje del revenue que viene de canales orgánicos vs. outreach activo.

ENTREGABLES ESPERADOS:
- Mapa de los 3 bucles virales más adecuados para tu práctica freelance.
- Diseño del free tier o proyecto de entrada que demuestra tu valor.
- Sistema de documentación de resultados y casos de éxito.
- Cuadro de mando de métricas PLG para tu negocio freelance.

Un negocio freelance con mentalidad PLG no depende de la prospección constante: depende de que cada cliente sea tan feliz que traiga al siguiente. Eso no es suerte, es diseño.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Hacer crecer una práctica freelance de forma orgánica aplicando los principios del product-led growth',
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
