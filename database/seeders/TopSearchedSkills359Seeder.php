<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills359Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Diseño de programas de lealtad y retención de clientes desde marketing',
                'description'      => 'Crea un programa de fidelización de clientes estructurado que combine recompensas, experiencias exclusivas y comunicación personalizada para reducir el churn y aumentar el valor de vida del cliente.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de marketing especializado en programas de lealtad y retención de clientes con experiencia en empresas de consumo, retail, SaaS y servicios. Has diseñado e implementado programas de fidelización que han mejorado la retención en un 25-40% y aumentado el customer lifetime value en mercados competitivos.

Necesito que me ayudes a diseñar un programa de lealtad y retención de clientes completo y ejecutable para mi negocio.

CONTEXTO DE MI NEGOCIO:
- Tipo de negocio y sector: [describe]
- Modelo de ingresos: [suscripción, transaccional, recurrente, etc.]
- Perfil del cliente objetivo: [describe el segmento principal]
- Ticket medio y frecuencia de compra actual: [datos]
- Tasa de churn actual: [porcentaje si lo conoces]
- Presupuesto disponible para el programa: [orientativo]
- Competidores con programas de lealtad destacables: [lista]

ELEMENTOS DEL PROGRAMA QUE DEBES DISEÑAR:

1. ESTRATEGIA BASE Y MECÁNICA DEL PROGRAMA
Define la mecánica central del programa de lealtad: sistema de puntos, cashback, niveles de membresía (tiered), programa de beneficios directo o combinación. Justifica por qué esta mecánica es la más adecuada para mi modelo de negocio y mi tipo de cliente. Incluye las reglas básicas: cómo se ganan puntos o beneficios, cómo se canjean y cuándo caducan.

2. ESTRUCTURA DE NIVELES Y BENEFICIOS
Si propones un sistema por niveles, diseña entre 3 y 4 niveles con nombres atractivos, requisitos de acceso claros y beneficios diferenciados. Para cada nivel, define al menos 5 beneficios tangibles e intangibles. Asegúrate de que los beneficios del nivel más alto sean aspiracionales pero alcanzables para el cliente habitual.

3. PERSONALIZACIÓN Y SEGMENTACIÓN
Explica cómo personalizar la comunicación y las ofertas del programa según el comportamiento del cliente: historial de compras, productos favoritos, momentos de vida, frecuencia de uso. Define los 3-4 segmentos de lealtad principales y la estrategia específica para cada uno.

4. CALENDARIO DE COMUNICACIÓN Y ACTIVACIÓN
Diseña un calendario de comunicaciones del programa: email de bienvenida al programa, recordatorios de puntos acumulados, notificaciones de upgrades de nivel, ofertas exclusivas para miembros, campaña de aniversario y campaña de reactivación. Para cada comunicación, define el trigger, el mensaje clave y el canal.

5. ESTRATEGIA ANTI-CHURN Y REACTIVACIÓN
Define el protocolo de detección temprana de clientes en riesgo de abandono dentro del programa: señales de decaimiento de actividad, secuencia de reactivación (emails, ofertas especiales, llamada personal para cuentas VIP) y criterios para declarar un cliente perdido y pasar a campaña de win-back.

6. MÉTRICAS DEL PROGRAMA DE LEALTAD
Establece el cuadro de mando del programa: tasa de participación activa, distribución de clientes por nivel, puntos emitidos vs. canjeados (break rate), impacto del programa en la tasa de retención, incremento del ticket medio de miembros vs. no miembros, NPS de miembros vs. no miembros y ROI del programa.

7. LANZAMIENTO Y COMUNICACIÓN INICIAL
Diseña la campaña de lanzamiento del programa: nombre y branding, mensaje principal, email de lanzamiento, secuencia de activación en los primeros 30 días y métricas de adopción inicial que indicarán si el lanzamiento ha sido exitoso.

ENTREGABLES ESPERADOS:
- Diseño completo del programa con reglas y beneficios.
- Calendario de comunicaciones del primer año.
- Dashboard de métricas con KPIs y benchmarks de referencia.
- Estimación del impacto esperado en retención y LTV.

Un buen programa de lealtad no es un coste, es una inversión que se autofinancia con el incremento de retención y gasto del cliente fiel.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar un programa de fidelización que aumente la retención y el customer lifetime value',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura técnica para sistemas de fidelización y retención de clientes',
                'description'      => 'Diseña la arquitectura técnica de un sistema de fidelización de clientes: base de datos de puntos, motor de reglas, APIs de integración con el CRM y automatización de comunicaciones. Aprende a construir sistemas de retención escalables.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en sistemas de CRM, plataformas de fidelización y motores de automatización de marketing. Tienes experiencia diseñando sistemas de lealtad para empresas con millones de clientes activos.

Necesito que me ayudes a diseñar la arquitectura técnica de un sistema de fidelización de clientes para nuestra plataforma. El sistema debe gestionar puntos, niveles, recompensas y comunicaciones automatizadas de retención.

CONTEXTO TÉCNICO:
- Stack tecnológico actual: [describe el backend, base de datos, infraestructura]
- Volumen estimado de clientes activos: [número]
- Transacciones diarias estimadas: [número]
- Sistemas existentes a integrar: [CRM, ERP, pasarela de pagos, herramienta de email, etc.]
- Presupuesto o preferencia de infraestructura: [cloud provider, on-premise, etc.]

COMPONENTES DE LA ARQUITECTURA:

1. MODELO DE DATOS DEL SISTEMA DE FIDELIZACIÓN
Diseña el esquema de base de datos del sistema: entidades principales (Cliente, Cuenta de Puntos, Transacción de Puntos, Nivel, Recompensa, Canje, Campaña), sus atributos y las relaciones entre ellas. Justifica las decisiones de diseño (normalización, índices, particionamiento) para garantizar rendimiento y escalabilidad.

2. MOTOR DE REGLAS DE PUNTUACIÓN
Define la arquitectura del motor de reglas que calcula los puntos a otorgar por cada evento: compra, registro, referido, interacción con el producto, aniversario, etc. El motor debe ser configurable por negocio sin necesidad de cambios de código. Propón el patrón de diseño más adecuado (strategy pattern, rule engine, event-driven) y cómo almacenar las reglas de forma flexible.

3. GESTIÓN DE NIVELES Y RECALIFICACIÓN
Diseña el componente que gestiona la asignación y actualización de niveles de membresía: cálculo periódico de recalificación, retroactividad de beneficios, notificaciones de cambio de nivel y manejo de los casos especiales (descenso de nivel, congelación de nivel, etc.). Define con qué frecuencia se recalcula y qué triggers lo disparan.

4. API DE INTEGRACIÓN
Define las APIs REST o GraphQL necesarias para integrar el sistema de fidelización con el resto de la plataforma: endpoint de acreditación de puntos (sincrónico), endpoint de consulta de saldo y nivel, endpoint de canje de recompensas y webhooks para eventos de lealtad. Incluye el contrato de cada endpoint (método, URL, payload, respuesta, códigos de error).

5. SISTEMA DE COMUNICACIONES AUTOMATIZADAS
Diseña el componente de automatización de comunicaciones de retención: arquitectura de eventos que disparan comunicaciones, integración con la herramienta de email/SMS, plantillas dinámicas con datos de lealtad del cliente y sistema de supresión para evitar sobre-comunicación. Define los eventos de retención más críticos a implementar primero.

6. CONSISTENCIA Y PREVENCIÓN DE FRAUDE
Explica cómo garantizar la consistencia de los datos en un sistema distribuido (idempotencia de transacciones, manejo de duplicados, rollback de puntos por devoluciones) y cómo implementar controles antifraude básicos (detección de comportamientos anómalos en el canje, rate limiting de acreditaciones).

7. OBSERVABILIDAD Y MÉTRICAS TÉCNICAS
Define el sistema de monitorización del sistema de fidelización: métricas de negocio en tiempo real (puntos emitidos/canjeados, nuevas inscripciones), alertas operativas (latencia del motor de reglas, errores de integración) y dashboard técnico para el equipo de ingeniería.

ENTREGABLES ESPERADOS:
- Diagrama de arquitectura de componentes (descrito textualmente).
- Esquema de base de datos con entidades y relaciones.
- Contratos de las APIs principales.
- Plan de implementación por fases priorizando el MVP.

Diseña pensando en la escalabilidad desde el inicio pero implementa de forma incremental: el sistema más sofisticado que no se lanza nunca no retiene a nadie.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar e implementar la arquitectura técnica de un sistema de puntos y fidelización',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias de fidelización que enamoran al cliente',
                'description'      => 'Aplica principios de diseño centrado en el usuario para crear experiencias de programa de lealtad visualmente atractivas y emocionalmente resonantes. Desde el diseño del portal de miembros hasta las recompensas tangibles e intangibles.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de experiencias senior especializado en programas de lealtad, gamificación y diseño emocional de productos digitales. Has trabajado en el diseño de aplicaciones de fidelización para empresas de retail, aerolíneas, hotelería y fintech.

Necesito que me ayudes a diseñar la experiencia de usuario del programa de fidelización de nuestra empresa, desde el portal de miembros hasta las comunicaciones y los elementos físicos o digitales de la recompensa.

CONTEXTO DEL PROGRAMA:
- Tipo de programa de lealtad: [puntos, niveles, beneficios directos, etc.]
- Plataforma principal donde vive el programa: [app móvil, web, integrado en el producto, etc.]
- Perfil del cliente objetivo: [edad, estilo de vida, relación con la marca]
- Identidad de marca existente: [describe los colores, tipografía y tono de voz]
- Niveles del programa (si aplica): [nombres y beneficios principales]

ÁREAS DE DISEÑO QUE DEBES DESARROLLAR:

1. IDENTIDAD VISUAL DEL PROGRAMA
Diseña la identidad visual del programa de lealtad: nombre del programa (si no existe), paleta de colores diferenciada pero coherente con la marca, iconografía de puntos y niveles, ilustraciones o fotografías que transmitan los valores del programa. Define cómo los diferentes niveles tienen su propia identidad visual dentro del sistema.

2. PORTAL O SECCIÓN DE MIEMBROS
Diseña la experiencia del portal de miembros: pantalla de inicio del programa (dashboard de miembro), visualización del saldo de puntos y progreso hacia el siguiente nivel, catálogo de recompensas, historial de actividad y sección de beneficios exclusivos. Para cada pantalla, describe la jerarquía de información, los elementos interactivos y el estado emocional que debe generar en el usuario.

3. GAMIFICACIÓN Y ELEMENTOS DE ENGAGEMENT
Propón mecánicas de gamificación para aumentar el engagement con el programa: barras de progreso visual, celebración de hitos (animaciones, mensajes especiales), retos o misiones temporales, insignias de logros y comparación social (si aplica). Define cómo cada elemento refuerza el comportamiento que queremos incentivar.

4. DISEÑO DE LA RECOMPENSA
Diseña la presentación visual y la experiencia de canje de recompensas: catálogo de recompensas con jerarquía clara, momento de anticipación antes del canje, pantalla de confirmación de canje y entrega de la recompensa (animación de celebración, mensaje de agradecimiento). El momento del canje es el de mayor impacto emocional: hazlo memorable.

5. SISTEMA DE NOTIFICACIONES Y COMUNICACIONES
Diseña los templates de comunicación del programa: email de bienvenida al programa, notificación de puntos acumulados, alerta de puntos próximos a caducar, email de ascenso de nivel y oferta exclusiva para miembros. Para cada pieza, define la estructura, los elementos visuales principales y el copywriting sugerido.

6. ESTADOS DE VACÍO Y PRIMEROS PASOS
Diseña la experiencia del nuevo miembro: primer acceso al programa (estado vacío sin puntos), primera acción completada, primer hito alcanzado. Estos primeros momentos determinan si el cliente se enganchará al programa o lo ignorará. Haz que cada primer paso sea celebrado.

7. ACCESIBILIDAD E INCLUSIÓN
Define los criterios de accesibilidad que debe cumplir el diseño del programa: contraste de colores mínimo (WCAG AA), textos alternativos para iconos, navegación por teclado y lectura de pantalla. Un programa de lealtad debe ser accesible para todos los clientes.

ENTREGABLES ESPERADOS:
- Sistema de diseño del programa (tokens de color, tipografía, iconos).
- Descripción detallada de cada pantalla o estado clave.
- Guía de tono de voz y microcopy del programa.
- Checklist de accesibilidad para el equipo de desarrollo.

Recuerda que el programa de lealtad es una extensión de la marca. Cada pixel debe reforzar por qué el cliente eligió a esta empresa y por qué debería seguir eligiéndola.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar la experiencia visual y emocional de un programa de fidelización de clientes',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategias de prevención de churn y retención de cuentas en ventas B2B',
                'description'      => 'Desarrolla un playbook completo para detectar señales de abandono en cuentas B2B, intervenir en el momento adecuado y convertir clientes en riesgo en defensores de la marca.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de ventas B2B con especialización en gestión de cuentas clave y prevención de churn. Has trabajado en sectores de SaaS, servicios profesionales y distribución, donde la retención de cuentas es tan crítica como la adquisición de nuevas.

Necesito que me ayudes a construir un playbook completo de prevención de churn y retención de clientes B2B para mi equipo de ventas.

CONTEXTO DE MI NEGOCIO:
- Sector y tipo de producto o servicio: [describe]
- Ciclo de contrato habitual: [mensual, anual, plurianual]
- Tasa de churn actual: [porcentaje anual]
- Tamaño medio de las cuentas: [revenue anual por cuenta]
- Número de cuentas que gestiona cada vendedor: [número]
- Principales razones de churn identificadas: [lista]

COMPONENTES DEL PLAYBOOK DE RETENCIÓN B2B:

1. SISTEMA DE HEALTH SCORING DE CUENTAS
Diseña un modelo de health score para evaluar el riesgo de churn de cada cuenta. Define entre 5 y 8 indicadores de salud (uso del producto, satisfacción, engagement con el equipo, renovación a tiempo, expansión reciente, problemas de soporte abiertos, cambios de interlocutor). Asigna pesos a cada indicador y define los umbrales de semáforo: verde, ámbar y rojo.

2. SEÑALES DE ALARMA TEMPRANA
Identifica las 10 señales de alarma más predictivas de churn B2B: tanto las señales de comportamiento (caída de uso, reducción de tickets de soporte, cancelación de reuniones) como las señales externas (cambio de CEO, recortes presupuestarios del cliente, adquisición por un competidor). Para cada señal, define el tiempo medio que anticipa el churn y la urgencia de intervención.

3. PROTOCOLOS DE INTERVENCIÓN POR NIVEL DE RIESGO
Para cada nivel de riesgo (bajo, medio, alto, crítico), diseña un protocolo de acción específico: quién interviene (vendedor, director de cuenta, directivo), cuándo se activa, qué acciones se ejecutan (llamada de revisión, oferta de valor adicional, escalación a dirección del cliente) y cuál es el objetivo de la intervención.

4. CONVERSACIONES DIFÍCILES DE RETENCIÓN
Proporciona guiones para las conversaciones más difíciles de retención: el cliente que quiere cancelar, el cliente insatisfecho con el producto, el cliente que está evaluando a un competidor, el cliente que dice que es demasiado caro y el cliente que perdió al sponsor interno. Para cada situación, define la apertura, las preguntas de diagnóstico, los argumentos de valor y el cierre.

5. ESTRATEGIA DE EXPANSIÓN COMO HERRAMIENTA DE RETENCIÓN
Explica cómo la expansión de cuentas (upsell, cross-sell) es la mejor herramienta de retención: un cliente que compra más tiene más en juego y es más difícil de perder. Define el proceso para identificar oportunidades de expansión en cuentas en riesgo y cómo presentar la expansión sin parecer oportunista.

6. PROGRAMA DE ÉXITO DEL CLIENTE PARA EL EQUIPO DE VENTAS
Define las actividades proactivas de retención que el equipo de ventas debe realizar regularmente: Business Review trimestral (QBR), check-in de mitad de contrato, llamada de renovación anticipada (90-60 días antes) y encuesta de satisfacción semestral. Para cada actividad, incluye una agenda tipo y los materiales necesarios.

7. MÉTRICAS DE RETENCIÓN PARA EL EQUIPO DE VENTAS
Establece el cuadro de mando de retención: tasa de renovación bruta, tasa de renovación neta (incluyendo expansión), revenue en riesgo por nivel de health score, tiempo medio de conversión de cuenta en riesgo a cuenta sana y tasa de éxito de las intervenciones de retención.

ENTREGABLES ESPERADOS:
- Plantilla de health score con indicadores y pesos.
- Playbook de intervención por nivel de riesgo.
- Biblioteca de guiones para conversaciones de retención.
- Dashboard de métricas de retención del equipo.

Recuerda: perder una cuenta B2B no es un fracaso puntual, es el resultado de una cadena de señales ignoradas. Este playbook convierte esas señales en acciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Detectar y actuar sobre cuentas B2B en riesgo de abandono antes de que sea demasiado tarde',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Optimización del customer lifetime value con product analytics',
                'description'      => 'Usa el análisis de comportamiento de producto para identificar los palancas que aumentan el LTV de los clientes: momentos de activación, funcionalidades de mayor retención y patrones de expansión.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager senior especializado en product analytics, retención y optimización del customer lifetime value en productos SaaS y plataformas digitales. Tienes experiencia diseñando estrategias basadas en datos para aumentar el LTV sin incrementar los costes de adquisición.

Necesito que me ayudes a construir una estrategia completa de optimización del customer lifetime value (LTV) basada en el análisis del comportamiento de producto.

CONTEXTO DE MI PRODUCTO:
- Tipo de producto: [SaaS, marketplace, app de consumo, plataforma B2B, etc.]
- Modelo de monetización: [suscripción, freemium, transaccional, uso, etc.]
- LTV medio actual: [si lo conoces]
- Tasa de churn mensual o anual: [porcentaje]
- Herramientas de analytics disponibles: [Mixpanel, Amplitude, Segment, GA4, etc.]
- Principales features del producto: [lista de las más importantes]

FRAMEWORK DE OPTIMIZACIÓN DE LTV:

1. DIAGNÓSTICO DE LTV ACTUAL
Define cómo calcular el LTV de forma correcta para tu modelo de negocio: fórmula básica, segmentación del LTV por cohorte de adquisición y por perfil de cliente. Identifica qué componentes del LTV tienen más margen de mejora: reducir churn, aumentar frecuencia de uso, incrementar ticket medio o mejorar la tasa de expansión.

2. ANÁLISIS DE COHORTES Y RETENCIÓN
Diseña un análisis de cohortes completo: curvas de retención por mes de adquisición, identificación de los meses críticos de abandono, comparación de retención entre segmentos y análisis de las cohortes con mejor retención para extraer patrones. Define qué datos necesitas y cómo configurar el análisis en tu herramienta de analytics.

3. IDENTIFICACIÓN DEL AHA MOMENT Y FEATURES DE RETENCIÓN
Explica cómo usar el análisis de correlación entre el uso de features y la retención a largo plazo para identificar: el aha moment del producto (la acción que más predice que un usuario quedará retenido), las features "sticky" que generan hábito y las features que más se correlacionan con la expansión o el upsell.

4. OPTIMIZACIÓN DEL ONBOARDING PARA MAXIMIZAR EL LTV
Define las mejoras de onboarding que más impacto tienen sobre el LTV: reducir el tiempo hasta el primer valor (TTFV), guiar al usuario hacia el aha moment lo antes posible y asegurar la adopción de las features de mayor retención en los primeros 7-14 días. Propón un plan de experimentos de onboarding priorizado por impacto esperado sobre el LTV.

5. ESTRATEGIA DE EXPANSIÓN Y UPSELL BASADA EN COMPORTAMIENTO
Usa el comportamiento de producto para identificar el momento óptimo para ofrecer el upsell: uso de un % del límite del plan actual, adopción de N features premium, alcanzar un hito de valor relevante. Define los triggers de expansión más efectivos y cómo presentar la oferta en el contexto de uso del producto.

6. SEGMENTACIÓN DE CLIENTES POR LTV POTENCIAL
Diseña un modelo de segmentación de clientes basado en su LTV potencial: clientes de alto valor actual y alto potencial (nurture), alto valor actual y bajo potencial (proteger), bajo valor actual y alto potencial (desarrollar) y bajo valor actual y bajo potencial (eficiencia). Para cada segmento, define la estrategia de producto y de customer success diferenciada.

7. CUADRO DE MANDO DE LTV
Define el dashboard de LTV que el equipo de producto debe revisar regularmente: LTV por cohorte, retención a 30/60/90/180 días, tasa de expansión mensual, NRR (Net Revenue Retention), distribución de clientes por segmento de valor y evolución de LTV predicho de las nuevas cohortes.

ENTREGABLES ESPERADOS:
- Framework de cálculo y segmentación del LTV.
- Plan de análisis de cohortes y retención.
- Hoja de ruta de experimentos para mejorar el LTV.
- Dashboard de métricas de LTV listo para implementar.

El LTV es el resultado de cientos de pequeñas decisiones de producto. Este framework te ayuda a tomar las decisiones correctas con datos, no con intuición.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Usar product analytics para identificar y activar las palancas de aumento del LTV',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Estrategia de retención del talento como palanca de fidelización cultural',
                'description'      => 'Diseña un programa integral de retención del talento que combine compensación, desarrollo, cultura y propósito para reducir la rotación no deseada y construir una organización donde las personas quieran quedarse.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Recursos Humanos con especialización en employee experience, retención del talento y cultura organizacional. Has liderado estrategias de retención en entornos competitivos de alta rotación, desde startups tecnológicas hasta empresas industriales con perfiles técnicos escasos.

Necesito que me ayudes a diseñar una estrategia completa de retención del talento para reducir la rotación no deseada y construir una cultura donde los mejores quieran quedarse y crecer.

CONTEXTO ORGANIZACIONAL:
- Sector y tipo de empresa: [describe]
- Tasa de rotación actual (total y voluntaria): [porcentaje]
- Perfiles de mayor riesgo de rotación: [describe los roles o colectivos]
- Principales razones de salida identificadas en exit interviews: [lista]
- Propuesta de valor al empleado (EVP) actual: [describe o indica si no está definida]
- Competidores de talento: [empresas con las que compites por el mismo talento]

PILARES DE LA ESTRATEGIA DE RETENCIÓN:

1. DIAGNÓSTICO DE ENGAGEMENT Y SATISFACCIÓN
Diseña una encuesta de engagement y satisfacción del empleado: preguntas sobre satisfacción con el trabajo, la dirección, el desarrollo profesional, la compensación, el ambiente de trabajo y el propósito. Incluye preguntas de eNPS y de intención de permanencia. Define la frecuencia (pulso trimestral + encuesta anual profunda) y cómo actuar sobre los resultados.

2. ESTRATEGIA DE COMPENSACIÓN COMPETITIVA
Explica cómo diseñar una estrategia de compensación que retenga talento sin competir únicamente por salario: benchmark salarial anual, bandas salariales por nivel, plan de revisión salarial predecible, compensación variable vinculada al desempeño y beneficios diferenciales no monetarios. Define cómo comunicar la compensación de forma transparente.

3. DESARROLLO PROFESIONAL Y PLANES DE CARRERA
Diseña un sistema de desarrollo profesional que genere expectativa de crecimiento: marcos de competencias por rol y nivel, proceso de conversación de carrera semestral, rutas de promoción claras con criterios objetivos, programa de movilidad interna y presupuesto de formación por persona. El empleado que ve un futuro claro en la empresa no busca en otro lado.

4. CULTURA Y EXPERIENCIA DEL EMPLEADO
Define los elementos de cultura que generan mayor retención: sentido de propósito y misión, autonomía y confianza, reconocimiento frecuente (no solo anual), celebración de logros del equipo y rituales de cohesión. Propón 5 rituales concretos que puedes implementar en los próximos 90 días.

5. GESTIÓN DE MOMENTOS CRÍTICOS DE LA EXPERIENCIA DEL EMPLEADO
Diseña protocolos específicos para los momentos de mayor riesgo de abandono: primeros 90 días (onboarding), primer año completo, cambio de manager, momentos de conflicto o insatisfacción, regreso de baja parental y momentos de decepción con una promoción o revisión salarial. Cada momento crítico necesita una intervención proactiva.

6. PROGRAMA DE RECONOCIMIENTO Y PERTENENCIA
Crea un programa de reconocimiento que vaya más allá del bonus anual: reconocimiento entre pares, celebración de hitos personales (aniversarios, logros de proyectos), visibilidad de los mejores dentro de la organización y mecanismos para que los empleados sientan que su voz importa.

7. MÉTRICAS DE RETENCIÓN Y SEGUIMIENTO
Define el cuadro de mando de retención del talento: tasa de rotación total, voluntaria y por colectivo clave, tiempo medio de permanencia, índice de engagement por equipo, tasa de retención de alto desempeño, cost of attrition (coste de reemplazar a un empleado) y NPS del empleado (eNPS).

ENTREGABLES ESPERADOS:
- Estrategia de retención estructurada por palancas.
- Encuesta de engagement lista para lanzar.
- Calendario de momentos críticos de la experiencia del empleado con intervenciones definidas.
- Dashboard de métricas de retención con benchmarks de sector.

La retención del talento no es un programa puntual, es el resultado de una cultura que valora a las personas todos los días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar una estrategia integral para reducir la rotación no deseada y retener el talento clave',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero del ROI de programas de retención y fidelización de clientes',
                'description'      => 'Construye un modelo financiero para evaluar el retorno sobre la inversión de un programa de fidelización de clientes, comparando el coste del programa con el incremento del customer lifetime value y la reducción del churn.',
                'prompt_content'   => <<<'EOT'
Actúa como un director financiero especializado en el análisis económico de programas de marketing y retención de clientes. Combinas el rigor del análisis financiero con la comprensión de las métricas de negocio de customer success y marketing.

Necesito que me ayudes a construir un modelo financiero completo para evaluar el ROI de nuestro programa de fidelización y retención de clientes.

DATOS DEL NEGOCIO:
- Tipo de negocio y modelo de ingresos: [describe]
- Número de clientes activos: [número]
- Revenue anual por cliente (ARR o ingresos medios): [importe]
- Tasa de churn actual: [porcentaje anual]
- Coste de adquisición de cliente (CAC): [importe]
- LTV actual de los clientes: [importe si lo conoces]
- Inversión estimada en el programa de fidelización: [importe anual]

ESTRUCTURA DEL MODELO FINANCIERO:

1. CÁLCULO DEL LTV ACTUAL Y PROYECTADO
Calcula el LTV actual de la base de clientes con la tasa de churn actual. Luego proyecta el LTV esperado si el programa de fidelización reduce el churn en distintos escenarios: reducción del 10%, 20% y 30% del churn. Muestra el incremento de LTV en valor absoluto y en porcentaje para cada escenario.

2. MODELO DE COSTES DEL PROGRAMA DE FIDELIZACIÓN
Detalla todos los costes del programa: coste de las recompensas (break rate de puntos: porcentaje que realmente se canjea), coste de comunicaciones (emails, notificaciones), coste tecnológico (plataforma de fidelización), coste de personal dedicado al programa y costes de lanzamiento amortizados. Calcula el coste por cliente activo del programa al año.

3. ANÁLISIS DE INGRESOS INCREMENTALES ATRIBUIBLES AL PROGRAMA
Cuantifica los ingresos incrementales del programa: incremento del ticket medio de miembros vs. no miembros, mayor frecuencia de compra, revenue de clientes reactivados por el programa y revenue protegido gracias a la reducción del churn (clientes que no se habrían ido). Define cómo atribuir este incremento al programa de forma conservadora.

4. CÁLCULO DEL ROI Y PERÍODO DE RECUPERACIÓN
Construye el modelo de ROI del programa: inversión total anual, beneficios financieros totales (incremento de revenue + ahorro por menor churn), ROI porcentual, período de recuperación de la inversión y VAN del programa a 3 años. Presenta los tres escenarios (pesimista, base, optimista).

5. ANÁLISIS DE SENSIBILIDAD
Realiza un análisis de sensibilidad del ROI ante las variables más inciertas: variación en la tasa de adopción del programa, variación en el break rate de puntos, variación en la reducción de churn y variación en el ticket medio de miembros. Muestra cómo cada variable afecta al ROI final.

6. BENCHMARK Y COMPARATIVA SECTORIAL
Proporciona benchmarks de referencia para los KPIs financieros de programas de fidelización en diferentes sectores: ROI medio, tasa de adopción de programas de lealtad, incremento típico del ticket medio de miembros y reducción media del churn. Usa estos benchmarks para validar si los supuestos de nuestro modelo son realistas.

7. RECOMENDACIÓN Y UMBRAL DE VIABILIDAD
Define el umbral mínimo de reducción del churn o incremento del ticket medio que hace el programa financieramente viable. Expresa este umbral en términos de negocio claros para comunicarlo al comité de dirección. Recomienda el tamaño y alcance del programa según los datos disponibles.

ENTREGABLES ESPERADOS:
- Modelo financiero con los tres escenarios y el análisis de sensibilidad (describiendo la estructura con precisión).
- Resumen ejecutivo de ROI para presentar a dirección.
- Umbrales de viabilidad financiera del programa.
- Recomendación de inversión con justificación numérica.

Un programa de fidelización bien diseñado no es un gasto de marketing, es una de las inversiones con mayor ROI en el ciclo de vida del cliente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Justificar financieramente la inversión en un programa de fidelización ante el CFO y el consejo',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal para programas de fidelización y uso de datos de clientes',
                'description'      => 'Analiza los requisitos legales aplicables al diseño y operación de un programa de fidelización de clientes en España y la UE, cubriendo protección de datos, comunicaciones comerciales y obligaciones contractuales.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho digital, protección de datos y marketing legal con experiencia asesorando a empresas en el diseño de programas de lealtad y fidelización conformes con la normativa europea.

Necesito que me ayudes a diseñar el marco legal completo de nuestro programa de fidelización de clientes, asegurando el cumplimiento del RGPD, la LSSI y la normativa de comunicaciones comerciales.

CONTEXTO DEL PROGRAMA:
- Tipo de programa: [puntos, descuentos, beneficios exclusivos, cashback, etc.]
- Canal principal: [app, web, tarjeta física, integrado en el checkout, etc.]
- Tipos de datos que se recogen: [email, teléfono, historial de compras, datos de comportamiento, etc.]
- Comunicaciones previstas: [email, SMS, push notifications, correo postal, etc.]
- Socios o terceros que participan en el programa: [si aplica]
- Países de operación: [España, UE, otros]

ÁREAS LEGALES QUE DEBES CUBRIR:

1. BASE LEGAL PARA EL TRATAMIENTO DE DATOS
Define la base legal correcta para cada tratamiento de datos del programa: datos necesarios para la ejecución del contrato de membresía (base: ejecución contractual), datos de comportamiento para personalización (base: consentimiento o interés legítimo), datos para comunicaciones comerciales (base: consentimiento). Justifica la elección de base legal y sus implicaciones prácticas.

2. INFORMACIÓN Y CONSENTIMIENTO EN EL REGISTRO
Diseña el flujo de registro al programa con los elementos legales requeridos: información de privacidad que se debe mostrar en el momento del registro (layered notice), checkbox de consentimiento para comunicaciones comerciales separado del contrato de membresía, doble opt-in si aplica y registro del consentimiento. Redacta los textos legales en lenguaje claro y conciso.

3. CONDICIONES DEL PROGRAMA DE FIDELIZACIÓN
Define los elementos obligatorios que deben incluir las condiciones del programa de fidelización: definición de los beneficios y su vigencia, reglas de acumulación y canje, caducidad de puntos (con la jurisprudencia española sobre transparencia en la caducidad), modificación de las condiciones (preaviso mínimo) y proceso de baja y portabilidad de datos.

4. RÉGIMEN DE COMUNICACIONES COMERCIALES
Explica el régimen legal de las comunicaciones comerciales en el contexto del programa: cuándo aplica la excepción de "cliente existente" de la LSSI, diferencias entre email, SMS y push en cuanto al consentimiento requerido, obligación de incluir mecanismo de opt-out en cada comunicación y consecuencias del incumplimiento (sanciones de la AEPD y la CNMC).

5. TRANSFERENCIAS DE DATOS Y SOCIOS DEL PROGRAMA
Si el programa implica compartir datos con socios (empresas partners, proveedores de la plataforma de fidelización, agencias de marketing), define las obligaciones legales: acuerdos de encargado del tratamiento (DPA), contratos de corresponsabilidad cuando aplica y evaluaciones de riesgo de las transferencias internacionales de datos.

6. DERECHOS DE LOS PARTICIPANTES
Diseña el protocolo para gestionar los derechos de los participantes en el programa: acceso a sus datos (incluyendo puntos y transacciones), rectificación, supresión (y qué ocurre con sus puntos acumulados), portabilidad del historial del programa y oposición al tratamiento para personalización. Define los tiempos de respuesta y los responsables internos.

7. GESTIÓN DE INCIDENTES Y CUMPLIMIENTO CONTINUO
Establece los procedimientos de cumplimiento del programa: revisión anual de las bases legales y los textos legales, procedimiento de notificación de brecha de seguridad si afecta a datos del programa, auditoría anual del programa desde el punto de vista de protección de datos y formación del equipo de marketing en obligaciones legales.

ENTREGABLES ESPERADOS:
- Mapa de tratamientos de datos del programa con bases legales.
- Textos legales para el registro y las condiciones del programa.
- Checklist de cumplimiento normativo del programa.
- Protocolo de gestión de derechos de los participantes.

El cumplimiento normativo no es un obstáculo para el programa de fidelización: es la base de la confianza del cliente, y la confianza es el fundamento de la fidelidad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Garantizar el cumplimiento del RGPD y la normativa de marketing en programas de fidelización',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Campañas de reactivación de clientes inactivos y mejora del NPS',
                'description'      => 'Diseña campañas de win-back para recuperar clientes que han dejado de usar el producto y estrategias para mejorar el Net Promoter Score a través de acciones de customer success.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Customer Success con experiencia en estrategias de reactivación de clientes dormidos, campañas de win-back y mejora sistemática del NPS en productos SaaS y servicios de suscripción B2B y B2C.

Necesito que me ayudes a diseñar un programa completo de reactivación de clientes inactivos y una estrategia para mejorar nuestro Net Promoter Score de forma sostenida.

CONTEXTO DE NUESTRO PRODUCTO Y CLIENTES:
- Tipo de producto o servicio: [describe]
- Definición de cliente inactivo: [X días sin login, X meses sin compra, etc.]
- Volumen estimado de clientes inactivos: [número]
- NPS actual: [puntuación]
- Distribución de promotores, pasivos y detractores: [porcentajes]
- Principales razones de inactividad o puntuaciones bajas identificadas: [lista]

PROGRAMA DE REACTIVACIÓN DE CLIENTES INACTIVOS:

1. SEGMENTACIÓN DE CLIENTES INACTIVOS
Clasifica a los clientes inactivos en segmentos accionables según criterios de prioridad: valor histórico del cliente (LTV), tiempo de inactividad (30-60 días, 60-90 días, más de 90 días), razón probable de inactividad (no encontró el valor, problema técnico, competidor, presupuesto, cambio interno). Para cada segmento, define el potencial de reactivación y la estrategia diferenciada.

2. SECUENCIA DE REACTIVACIÓN MULTICANAL
Diseña una secuencia de comunicaciones de reactivación para los segmentos de mayor prioridad. Para cada paso de la secuencia, define: canal (email, in-app, SMS, llamada), timing, asunto o gancho de la comunicación, contenido del mensaje (qué valor o novedad ofreces) y llamada a la acción. La secuencia debe tener entre 3 y 5 pasos, con pausas adecuadas entre cada uno.

3. OFERTAS E INCENTIVOS DE REACTIVACIÓN
Define el catálogo de incentivos para reactivar clientes según su segmento: período de prueba extendido, descuento en la próxima renovación, acceso a una feature premium durante un tiempo limitado, sesión de onboarding personalizado gratuita, créditos adicionales o contenido exclusivo. Para cada incentivo, define en qué segmento de cliente tiene mayor probabilidad de funcionar.

4. PROTOCOLO DE LLAMADA DE REACTIVACIÓN
Para los clientes de alto valor, diseña el protocolo de la llamada de reactivación personal: preparación previa (qué datos revisar antes de llamar), apertura de la conversación, preguntas de diagnóstico para entender qué falló, argumentos de reactivación según el diagnóstico y cierre con una acción concreta. Incluye los principales escenarios de objeción y cómo manejarlos.

5. ESTRATEGIA DE MEJORA DEL NPS
Diseña un plan sistémico para mejorar el NPS: proceso de cierre del loop con detractores (llamada de follow-up en las 48 horas siguientes a la respuesta negativa), plan de nurturing para convertir pasivos en promotores, activación de promotores como referenciadores y encuesta de NPS para clientes inactivos reactivados. Define el ritmo de medición del NPS (transaccional vs. relacional).

6. ANÁLISIS DE CAUSA RAÍZ DE INACTIVIDAD Y DETRACCIÓN
Explica cómo analizar sistemáticamente las causas de inactividad y puntuaciones bajas de NPS para identificar problemas de producto, de proceso o de expectativas que necesitan corrección estructural. Define cómo convertir los hallazgos del NPS y las conversaciones de win-back en inputs concretos para el roadmap de producto y las mejoras de proceso.

7. MÉTRICAS DEL PROGRAMA DE REACTIVACIÓN Y NPS
Define el cuadro de mando: tasa de reactivación por segmento, revenue recuperado, CAC de reactivación vs. CAC de adquisición, NPS por cohorte y tendencia mensual, tasa de conversión de detractores a pasivos y de pasivos a promotores, LTV de clientes reactivados vs. clientes continuos.

ENTREGABLES ESPERADOS:
- Mapa de segmentación de clientes inactivos con criterios de priorización.
- Secuencias de reactivación por segmento listas para implementar.
- Guión de la llamada de reactivación con árbol de decisión.
- Plan de mejora del NPS con acciones concretas para los próximos 90 días.

Un cliente reactivado tiene un LTV potencial mayor que un nuevo cliente: ya conoce el producto y si lo recuperas bien, se convierte en uno de los más leales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Recuperar clientes inactivos y convertir detractores en promotores para mejorar el NPS',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Estrategias de retención de clientes para freelancers y consultores independientes',
                'description'      => 'Diseña un sistema de fidelización y retención adaptado a la realidad del trabajo freelance: gestión de relaciones a largo plazo, creación de valor continuo y conversión de clientes puntuales en clientes recurrentes.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocio especializado en el modelo freelance y la economía de independientes con experiencia ayudando a profesionales independientes a construir bases de clientes estables y rentables a largo plazo.

Necesito que me ayudes a diseñar un sistema de retención de clientes adaptado a mi realidad como freelancer o consultor independiente. El objetivo es convertir más proyectos puntuales en relaciones a largo plazo y que mis mejores clientes sigan contando conmigo proyecto tras proyecto.

CONTEXTO DE MI PRÁCTICA FREELANCE:
- Tipo de servicio que ofrezco: [describe tu especialidad]
- Perfil de mis clientes habituales: [tipo de empresa, rol del decisor, sector]
- Duración media de los proyectos: [semanas o meses]
- Porcentaje de clientes que repiten: [% actual]
- Ticket medio por proyecto: [importe]
- Principal razón por la que los clientes no vuelven: [si la conoces]

SISTEMA DE RETENCIÓN PARA FREELANCERS:

1. ESTRATEGIA DE VALOR CONTINUO ENTRE PROYECTOS
Diseña un sistema para seguir aportando valor a tus clientes incluso cuando no hay un proyecto activo: newsletter mensual con insights relevantes para el sector del cliente, informe trimestral de tendencias relacionadas con tu especialidad, felicitaciones en hitos del negocio del cliente (lanzamientos, aniversarios, noticias positivas) y recursos útiles compartidos de forma proactiva. El cliente que recibe valor continuo piensa en ti cuando surge la necesidad.

2. PROPUESTA DE SERVICIOS RECURRENTES
Diseña un catálogo de servicios de retención mensual que complementen tus proyectos de mayor envergadura: retainer de consultoría mensual (X horas de asesoramiento por un fee fijo), revisión trimestral de resultados, mantenimiento o actualización periódica de trabajos anteriores, auditoría anual. Para cada servicio, define el alcance, el precio y el argumento de venta.

3. PROCESO DE CIERRE Y SEGUIMIENTO POST-PROYECTO
Define un protocolo de cierre de proyecto que siembre la siguiente venta: entrega de resultados con celebración del éxito, encuesta de satisfacción estructurada, conversación sobre los próximos retos del cliente, propuesta de seguimiento o continuidad y check-in proactivo a los 30 y 90 días del cierre. El cierre de un proyecto es la mejor apertura para el siguiente.

4. GESTIÓN DE LA RELACIÓN CON CLIENTES CLAVE
Para tus 5-10 clientes más valiosos, diseña un plan de relación personalizado: frecuencia de contacto proactivo (no comercial), regalos o detalles en momentos especiales, invitaciones a eventos relevantes, conexiones de valor (presentarles a alguien de tu red que les pueda ayudar) y revisión anual del trabajo realizado juntos. La relación personal es tu ventaja competitiva sobre las agencias y las grandes consultoras.

5. SISTEMA DE REFERIDOS
Crea un sistema formal de referidos para que tus clientes satisfechos te recomienden: cuándo pedir el referido (en el momento de mayor satisfacción), cómo pedirlo (mensaje tipo y argumentario), qué ofrecer a cambio (descuento en próximo proyecto, servicio adicional gratuito, donación a una causa relevante para el cliente) y cómo hacer seguimiento. Un cliente fiel que te refiere vale más que cualquier campaña de marketing.

6. GESTIÓN DE LA PERCEPCIÓN DE VALOR
Diseña una estrategia para que tus clientes perciban siempre el valor de tu trabajo: reporting de resultados claro y vinculado a los objetivos del cliente, documentación del impacto acumulado de la relación, comunicación proactiva de los proyectos y el éxito en tu newsletter o LinkedIn, y gestión de las expectativas desde el primer día del proyecto.

7. RECUPERACIÓN DE CLIENTES PERDIDOS
Diseña un plan de reactivación para los clientes que llevan más de 6-12 meses sin contratarte: mensaje de reactivación personalizado (no genérico), identificación del motivo de la pausa, propuesta de un proyecto de entrada de bajo riesgo para retomar la relación y seguimiento. A veces el cliente no fue a la competencia: simplemente no surgió la necesidad. Estar presente cuando sí surge es lo que marca la diferencia.

ENTREGABLES ESPERADOS:
- Sistema de gestión de relaciones con clientes adaptado a la escala freelance.
- Catálogo de servicios recurrentes listos para ofrecer.
- Plantillas de comunicación para los momentos clave de la relación.
- Protocolo de cierre de proyecto con semillas para la siguiente venta.

Como freelancer, tu mejor activo no es tu portafolio: es la confianza que has construido con tus clientes actuales. Este sistema te ayuda a cultivarla de forma sistemática.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Convertir clientes puntuales en clientes recurrentes y construir una base de negocio estable',
                'vote_score'       => 37,
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
