<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills298Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Gamificación en marketing: loyalty programs, retos y mecánicas que enganchan',
                'description'      => 'Diseña programas de lealtad, retos y mecánicas de juego que aumentan el engagement y la retención de clientes en campañas de marketing.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gamificación aplicada al marketing con más de diez años diseñando programas de lealtad y campañas de engagement para marcas de consumo, ecommerce y SaaS. Tu especialidad es combinar psicología conductual con diseño de mecánicas de juego para crear experiencias que hacen que los clientes vuelvan, participen y se conviertan en embajadores de la marca.

Voy a darte información sobre mi negocio y quiero que me ayudes a diseñar una estrategia de gamificación para marketing completa y ejecutable.

**Contexto de mi negocio:**
- Tipo de empresa: [describe tu empresa, sector y modelo de negocio]
- Producto o servicio principal: [qué vendes]
- Cliente objetivo: [perfil demográfico y psicográfico de tu cliente ideal]
- Ticket medio por cliente: [importe aproximado]
- Frecuencia de compra actual: [cuántas veces compra un cliente al año]
- Canal principal de venta: [ecommerce, tienda física, app, etc.]
- Objetivo principal: [aumentar frecuencia, reducir churn, atraer nuevos clientes, etc.]
- Presupuesto estimado para el programa: [mensual o anual]

**Lo que necesito que hagas:**

Primero, analiza mi situación y explícame qué tipo de programa de gamificación encaja mejor con mi negocio. No todos los modelos funcionan para todos los contextos: un programa de puntos puede ser ideal para ecommerce de alta frecuencia pero ineficaz para productos de lujo de compra única. Dame tu diagnóstico inicial y la justificación.

Segundo, diseña la arquitectura del programa de gamificación con estos elementos:
- Sistema de progresión: cómo avanzan los usuarios (niveles, rangos, títulos) y qué desbloquean en cada etapa
- Mecánicas de recompensa: puntos, badges, sorpresas, acceso anticipado, descuentos, experiencias exclusivas. Especifica qué tipo de recompensa encaja con mi cliente
- Bucles de compromiso: las acciones que quiero que el cliente repita y cómo el programa las incentiva sin crear dependencia artificial
- Retos y misiones: eventos temporales, desafíos semanales o estacionales que mantienen el interés fuera de los momentos de compra
- Componente social: si aplica, cómo incorporar rankings, retos entre amigos o equipos sin alienar a los usuarios que prefieren la privacidad

Tercero, explícame cómo evitar los errores más comunes en gamificación de marketing:
- El problema del "casino": cuando los puntos se convierten en un descuento implícito que devalúa la marca
- La fatiga de mecánicas: usuarios que acumulan puntos pero nunca los redimen, señal de que el programa no está generando valor real
- La trampa de la complejidad: programas con tantas reglas que el usuario abandona antes de entender cómo funciona
- El sesgo del power user: diseñar para el 5% más activo e ignorar al 80% que necesita mecánicas más sencillas

Cuarto, define los KPIs que voy a usar para medir si el programa funciona:
- Métricas de activación (cuántos usuarios se inscriben y completan el primer hito)
- Métricas de retención (cómo cambia la frecuencia de compra de usuarios gamificados vs no gamificados)
- Métricas de engagement (acciones por usuario, días activos, ratio de redención de recompensas)
- Métricas de negocio (CLV, churn rate, NPS de usuarios del programa)

Quinto, dame un plan de lanzamiento en tres fases: fase beta con un segmento pequeño de usuarios para validar mecánicas, fase de lanzamiento con comunicación y onboarding, y fase de optimización basada en datos reales.

Para cada elemento, dame ejemplos concretos adaptados a mi sector, no genéricos. Explica el razonamiento detrás de cada decisión de diseño para que pueda adaptar el programa si mi contexto cambia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar programa de gamificación completo para marketing y retención de clientes',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Gamification engineering: construir sistemas de puntos, badges y rankings en el producto',
                'description'      => 'Diseña e implementa la arquitectura técnica de un sistema de gamificación en tu producto: puntos, logros, rankings y notificaciones de progreso.',
                'prompt_content'   => <<<'PROMPT'
Eres un ingeniero senior especializado en sistemas de gamificación para productos digitales. Has diseñado e implementado motores de puntos, sistemas de logros y rankings para aplicaciones con millones de usuarios activos. Entiendes tanto los patrones de arquitectura como los riesgos de consistencia de datos, condiciones de carrera y escalabilidad que aparecen cuando los usuarios compiten en tiempo real.

Voy a contarte sobre mi producto y necesito que me ayudes a diseñar e implementar un sistema de gamificación robusto y escalable.

**Contexto técnico:**
- Stack tecnológico: [lenguaje, framework, base de datos principal, caché]
- Tipo de producto: [app móvil, web app, SaaS B2B, juego, plataforma, etc.]
- Escala actual: [usuarios activos mensuales, picos de tráfico]
- Escala esperada: [crecimiento proyectado en los próximos 12 meses]
- Acciones que quiero gamificar: [lista de acciones del usuario: publicar, comentar, completar, etc.]
- Recompensas disponibles: [qué puedo dar: descuentos, funciones premium, reconocimiento, etc.]

**Lo que necesito:**

Primero, diseña el modelo de datos para el sistema de gamificación. Necesito las entidades principales, sus atributos y las relaciones entre ellas. Incluye:
- Entidad de puntos: cómo registro cada transacción de puntos (no solo el saldo, sino el historial completo para auditoría)
- Entidad de logros y badges: estructura flexible que permita añadir nuevos logros sin migraciones cada vez
- Entidad de rankings: si uso rankings globales, por período (semana, mes) o por cohorte de usuarios
- Entidad de eventos: el log de acciones del usuario que dispara las reglas de gamificación

Segundo, diseña la arquitectura del motor de reglas. Este es el componente que evalúa qué logros se desbloquean y cuántos puntos se otorgan cuando un usuario realiza una acción. Explícame:
- Cómo estructuro las reglas para que sean configurables sin despliegues (reglas en base de datos vs código)
- Cómo proceso los eventos de forma asíncrona sin bloquear el flujo principal del usuario
- Cómo manejo las condiciones de carrera cuando múltiples eventos llegan simultáneamente
- Cómo garantizo que un logro no se otorga dos veces por error de red o retry

Tercero, explícame el sistema de rankings. Los rankings son el componente más delicado técnicamente porque combinan consistencia, rendimiento y equidad. Dame tu enfoque para:
- Rankings en tiempo real vs rankings calculados periódicamente: cuándo usar cada uno
- Cómo usar Redis sorted sets o estructuras equivalentes para rankings eficientes
- Cómo manejar empates de forma justa
- Cómo particionar rankings para evitar que usuarios nuevos compitan contra veteranos

Cuarto, diseña el sistema de notificaciones de progreso. El momento en que el usuario recibe la notificación de un logro es crítico para la experiencia:
- Notificaciones en tiempo real: websockets, server-sent events, polling
- Plantillas de notificación: cómo personalizo el mensaje según el logro obtenido
- Anti-spam: cómo evito inundar al usuario con notificaciones si obtiene varios logros en cascada

Quinto, dame un plan de implementación incremental. No quiero construir todo a la vez. Dame el orden correcto de desarrollo, empezando por el MVP mínimo que valide la mecánica central y añadiendo complejidad progresivamente.

Para cada decisión técnica, explica las alternativas que consideraste y por qué elegiste esa solución. Incluye fragmentos de código o pseudocódigo donde ayude a entender la implementación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar arquitectura técnica de sistema de gamificación escalable en producto digital',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias gamificadas: cuando el juego mejora la retención',
                'description'      => 'Aprende a integrar mecánicas de juego en el diseño UX sin sacrificar usabilidad: flujos de onboarding, barras de progreso, recompensas visuales y diseño de hábitos.',
                'prompt_content'   => <<<'PROMPT'
Eres un diseñador UX especializado en gamificación y diseño conductual. Has trabajado en productos de aprendizaje, salud, finanzas y productividad donde las mecánicas de juego transformaron métricas de retención y engagement. Tu enfoque combina diseño centrado en el usuario con psicología del comportamiento, y sabes distinguir cuándo la gamificación añade valor real y cuándo solo añade ruido visual.

Voy a compartirte información sobre mi producto y necesito que me ayudes a diseñar una experiencia gamificada que mejore la retención sin comprometer la usabilidad.

**Contexto del producto:**
- Tipo de producto: [app, plataforma web, servicio, etc.]
- Objetivo principal del usuario al usarlo: [qué tarea o necesidad resuelve]
- Métricas actuales de retención: [Day 1, Day 7, Day 30 si las tienes]
- Punto de abandono principal: [dónde abandonan los usuarios, si lo sabes]
- Perfil de usuario: [edad aproximada, nivel de habilidad digital, motivaciones]
- Plataforma: [iOS, Android, web, multiplataforma]

**Lo que necesito:**

Primero, ayúdame a identificar dónde tiene sentido gamificar y dónde no. La gamificación mal aplicada crea fricción y distracción. Analiza mi producto y dime:
- Los momentos clave del journey del usuario donde una mecánica de juego amplificaría la motivación intrínseca
- Los momentos donde la gamificación sería manipuladora o añadiría ruido innecesario
- El riesgo de la motivación extrínseca: cuándo los puntos y badges reemplazan la satisfacción real y crean dependencia artificial

Segundo, diseña el flujo de onboarding gamificado. El onboarding es el momento más crítico para instalar hábitos:
- El tutorial como misión inicial: cómo convierto la curva de aprendizaje en una secuencia de pequeñas victorias
- La primera recompensa: cuándo y cómo doy al usuario su primer feedback positivo (debe ser rápido, memorable y genuino)
- La barra de progreso de perfil o configuración: cómo la uso para motivar la completitud sin crear ansiedad
- El momento "aha" gamificado: cómo aseguro que el usuario experimenta el valor core del producto dentro de la primera sesión

Tercero, diseña los componentes visuales de gamificación. Dame especificaciones de diseño para:
- Barras de progreso: cuándo usar lineales, circulares o segmentadas. Cómo animar el llenado para maximizar el efecto de satisfacción
- Badges y logros: principios de diseño para que sean memorables y coleccionables. Cómo comunico la rareza o dificultad de un logro visualmente
- Sistemas de nivel: cómo represento el rango o nivel del usuario de forma que motive el avance sin crear jerarquías que excluyen a principiantes
- Celebraciones y confeti: cuándo usar animaciones de celebración y cuándo son excesivas. El principio de la recompensa variable

Cuarto, explícame el diseño de hábitos a través de la gamificación:
- Las rachas (streaks): diseño de la mecánica de racha diaria, cómo manejar el "día de gracia" para no destruir la motivación cuando el usuario falla
- Los recordatorios y nudges: cómo diseño notificaciones que invitan sin presionar
- El ciclo de feedback: acción → feedback inmediato → recompensa diferida. Cómo lo visualizo en la interfaz

Quinto, dame un framework para evaluar si la gamificación está funcionando desde el punto de vista del diseño:
- Señales cualitativas de que las mecánicas están creando valor genuino
- Señales de alerta de que la gamificación está creando patrones de uso no saludables
- Cómo diseño tests A/B para validar componentes gamificados

Incluye referencias a casos de productos reales que han implementado bien estas mecánicas y por qué funcionaron. Dame especificaciones lo suficientemente detalladas para poder llevarlas a wireframes o prototipos directamente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar flujos UX gamificados que mejoren retención sin sacrificar usabilidad',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales gamification: competiciones, rankings y los incentivos que motivan al equipo',
                'description'      => 'Diseña un programa de gamificación para el equipo de ventas que aumente la motivación, la competencia sana y los resultados sin efectos secundarios negativos.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en diseño de incentivos y motivación de equipos comerciales. Has trabajado con directores de ventas en empresas de SaaS, retail y servicios financieros para diseñar programas de gamificación que aumentan el rendimiento sin crear culturas tóxicas de presión o comportamientos contraproducentes como el sandbagging o el cherry-picking.

Voy a contarte sobre mi equipo de ventas y necesito que me ayudes a diseñar un sistema de gamificación que motive, retenga talento y mejore resultados de forma sostenible.

**Contexto del equipo:**
- Tamaño del equipo: [número de comerciales]
- Tipo de venta: [ciclo corto transaccional, ciclo largo consultivo, renovaciones, etc.]
- Métricas principales que miden hoy: [ingresos, pipeline, actividades, etc.]
- Dinámica actual del equipo: [hay rivalidad sana, desconexión, burnout, etc.]
- Herramienta CRM que usan: [Salesforce, HubSpot, Pipedrive, etc.]
- Presupuesto para incentivos adicionales: [mensual o por concurso]
- Problema principal que quiero resolver: [motivación baja, desigualdad de rendimiento, foco incorrecto, etc.]

**Lo que necesito:**

Primero, ayúdame a entender qué tipo de gamificación encaja con mi equipo. No todos los perfiles comerciales responden igual a los mismos estímulos:
- Los comerciales orientados al estatus responden bien a rankings públicos y reconocimiento
- Los comerciales orientados al dominio prefieren retos personales y ver su propia mejora
- Los comerciales orientados a la afiliación se motivan con retos de equipo, no individuales
- Los comerciales orientados al beneficio económico solo responden a incentivos monetarios directos
Dame un diagnóstico de qué tipo de incentivos priorizar según el perfil predominante de mi equipo.

Segundo, diseña la estructura de la competición. Explícame:
- Períodos de competición: semanas, quincenas o meses. Cuál encaja mejor con mi ciclo de ventas
- Categorías de competición: si compito solo por ingresos o incluyo métricas de actividad (llamadas, reuniones, propuestas enviadas)
- Cómo evito que solo los top performers tengan oportunidad de ganar, lo que desmotiva al 80% del equipo
- Competiciones individuales vs por parejas vs por equipos: cuándo usar cada formato
- La mecánica de "liga" vs "eliminatoria" vs "sprint": cuál genera más engagement sostenido

Tercero, explícame el diseño del ranking y la transparencia:
- Rankings en tiempo real visibles para todo el equipo: qué información muestro y cuál es privada
- Cómo uso el ranking para motivar a los que están justo por debajo del siguiente premio, sin hundirlos si están muy atrás
- El dashboard de gamificación en el CRM: qué métricas visualizo y cómo

Cuarto, diseña el sistema de recompensas:
- Recompensas monetarias: cuándo usar comisión adicional, bonus o tarjeta regalo
- Recompensas experienciales: viajes, cenas, experiencias que crean recuerdos y conversaciones
- Recompensas de reconocimiento: anuncios en reuniones, menciones en Slack, trofeos o símbolos de estatus
- La mecánica de recompensa inesperada o aleatoria: cómo la incorporo para mantener el interés incluso fuera de los períodos de competición

Quinto, explícame cómo evitar los efectos secundarios negativos de la gamificación en ventas:
- El sandbagging: comerciales que retrasan el cierre de oportunidades para que caigan en el período correcto
- El cherry-picking: comerciales que solo persiguen oportunidades fáciles y abandona el pipeline estratégico
- La presión excesiva: cuando la competición crea ansiedad y reduce el rendimiento en lugar de aumentarlo
- La cultura de ganadores y perdedores permanentes: cómo rotar los éxitos para mantener la esperanza en todo el equipo

Dame un plan de implementación trimestral con una primera competición piloto, métricas de éxito y protocolo de ajuste según los resultados.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar programa de gamificación para equipo comercial que motiva sin crear cultura tóxica',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gamification strategy: cuándo y cómo aplicar mecánicas de juego en el producto',
                'description'      => 'Framework estratégico para decidir si gamificar, qué mecánicas aplicar y cómo medirlo sin dejarte llevar por la tendencia ni caer en dark patterns.',
                'prompt_content'   => <<<'PROMPT'
Eres un estratega de producto con experiencia en gamificación aplicada a productos digitales de consumo, educación, salud y productividad. Tu valor diferencial es que no eres un entusiasta de la gamificación por defecto: sabes cuándo añade valor real y cuándo es un parche superficial que distrae de los problemas fundamentales del producto. También conoces los riesgos éticos de las mecánicas de juego cuando se aplican de forma manipuladora.

Voy a compartirte el contexto de mi producto y necesito que me ayudes a tomar una decisión informada sobre si gamificar, qué gamificar y cómo hacerlo con rigor estratégico.

**Contexto del producto:**
- Descripción del producto: [qué hace y para quién]
- Problema principal que resuelve: [necesidad del usuario]
- Métricas actuales: [DAU/MAU, retención, tiempo en sesión, conversión]
- Comportamiento que quiero cambiar o reforzar: [qué quiero que los usuarios hagan más, menos o de forma diferente]
- Hipótesis de por qué los usuarios no hacen ese comportamiento hoy: [fricción, falta de motivación, falta de claridad, etc.]
- Etapa del producto: [pre-PMF, en crecimiento, en escala, maduro]

**Lo que necesito:**

Primero, ayúdame a hacer el diagnóstico correcto. Antes de hablar de mecánicas de juego, necesito entender si la gamificación es la solución adecuada al problema que tengo:
- ¿El problema es de motivación (el usuario quiere hacerlo pero no lo hace) o de valor (el usuario no entiende por qué hacerlo)?
- ¿El problema es de fricción (el proceso es difícil) o de hábito (el usuario olvida volver)?
- ¿La gamificación resuelve la causa raíz o solo enmascara síntomas?
Dame un árbol de decisión que me ayude a diagnosticar correctamente.

Segundo, si la gamificación es apropiada, ayúdame a elegir las mecánicas correctas. No todas las mecánicas funcionan para todos los comportamientos:
- Puntos y recompensas: apropiados para comportamientos de alta frecuencia y baja complejidad
- Logros y badges: apropiados para comportamientos discretos y memorables
- Rankings y competición: apropiados cuando la comparación social es motivadora, no desmotivadora
- Progresión y niveles: apropiados cuando hay una curva de aprendizaje real que celebrar
- Misiones y retos temporales: apropiados para reactivar usuarios inactivos o impulsar comportamientos nuevos
Para cada mecánica, dame los criterios de cuándo aplicarla y cuándo no en mi contexto específico.

Tercero, dame el framework de diseño ético para la gamificación en mi producto:
- La diferencia entre motivación intrínseca amplificada (buena) y manipulación conductual (mala)
- Cómo identifico si una mecánica está creando valor genuino para el usuario o solo extrayendo tiempo y atención
- Los límites éticos: mecánicas que nunca implementaría aunque funcionaran (variable reward schedules, FOMO artificial, presión social engañosa)
- Cómo diseño la gamificación para que el usuario pueda desactivarla si no le añade valor

Cuarto, diseña el plan de validación. No quiero invertir meses de desarrollo en gamificación sin validar antes la hipótesis:
- El experimento mínimo viable para testear si la mecánica elegida cambia el comportamiento objetivo
- Las métricas de éxito a 30, 60 y 90 días
- Las señales de alerta que me indicarían que la gamificación está fallando o creando efectos no deseados
- Cómo separo el efecto de novedad (los usuarios se enganchan a algo nuevo temporalmente) del efecto real a largo plazo

Quinto, dame el roadmap de implementación con prioridades claras:
- Qué implementar primero para aprender más rápido con menos inversión
- Cómo integro la gamificación en la estrategia de producto general sin que sea una feature aislada
- Cuándo decidir escalar o abandonar la apuesta por la gamificación

Sé directo: si después de analizar mi situación crees que la gamificación no es la prioridad correcta, dímelo y explícame qué alternativas considerarías primero.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Decidir estratégicamente si gamificar el producto y con qué mecánicas basándose en datos',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Employee engagement gamification: reconocimiento, retos y cultura de logro',
                'description'      => 'Diseña un programa de gamificación para RRHH que mejore el engagement, refuerce la cultura y reconozca los comportamientos alineados con los valores de la empresa.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en diseño de programas de employee engagement con especialización en gamificación organizacional. Has implementado sistemas de reconocimiento entre pares, retos de aprendizaje y culturas de logro en empresas de 50 a 5.000 empleados. Tu enfoque es siempre humano primero: la gamificación debe servir a las personas, no convertir el trabajo en un videojuego deshumanizador que aumenta la presión sin aumentar el sentido.

Voy a compartirte el contexto de mi organización y necesito que me ayudes a diseñar un programa de gamificación de employee engagement genuino y sostenible.

**Contexto de la organización:**
- Tamaño de la empresa: [número de empleados]
- Sectores y departamentos principales: [breve descripción]
- Modalidad de trabajo: [presencial, híbrido, remoto]
- Problema de engagement actual: [qué síntoma quiero resolver: alta rotación, baja participación, silos entre departamentos, falta de reconocimiento, etc.]
- Valores de empresa que quiero reforzar: [2-4 valores centrales]
- Herramientas de comunicación interna que usan: [Slack, Teams, intranet, etc.]
- Presupuesto aproximado para el programa: [anual]

**Lo que necesito:**

Primero, ayúdame a entender qué tipo de gamificación tiene sentido en mi contexto. El error más común es copiar mecánicas de videojuegos o apps de consumo sin adaptarlas al mundo laboral:
- La diferencia entre gamificación de engagement (reconocer lo que ya pasa) y gamificación de productividad (medir y presionar)
- Por qué los rankings de rendimiento entre empleados suelen ser contraproducentes
- Qué tipos de reconocimiento funcionan en entornos remotos vs presenciales
- Cómo adapto las mecánicas de juego a diferentes perfiles generacionales dentro de la misma empresa

Segundo, diseña el programa de reconocimiento entre pares gamificado:
- El sistema de reconocimiento: cómo los empleados se reconocen mutuamente con puntos, kudos o insignias asociadas a los valores de la empresa
- La visibilidad del reconocimiento: dónde aparece (muro de reconocimiento, canales de Slack, reuniones) y quién lo ve
- La frecuencia: cómo fomento el reconocimiento continuo sin que se convierta en ruido o en un ritual vacío
- El papel del manager: cómo el programa complementa (no sustituye) el reconocimiento del líder directo

Tercero, diseña los retos de aprendizaje y desarrollo:
- Retos de formación: cómo gamificar la finalización de cursos, certificaciones o proyectos de aprendizaje
- Retos de innovación: hackathons internos, propuestas de mejora, experimentos que cruzan departamentos
- Retos de bienestar: actividad física, salud mental, desconexión digital. Cómo hacerlos voluntarios y no invasivos
- Cómo aseguro que los retos sean inclusivos: que no favorezcan solo a los extrovertidos o a los que tienen más tiempo libre

Cuarto, diseña la arquitectura de recompensas del programa:
- Recompensas de reconocimiento público: menciones, premios simbólicos, visibilidad ante liderazgo
- Recompensas experienciales: tiempo libre, formación pagada, experiencias de equipo
- Recompensas monetarias: si las incluyo y en qué proporción respecto a las no monetarias
- Cómo evito que el programa se perciba como un sistema de control disfrazado de juego

Quinto, dame el plan de implementación y los indicadores de éxito:
- Cómo lanzo el programa sin crear escepticismo (la resistencia del "otro programa de RRHH")
- Cómo mido el impacto en engagement real: encuestas de clima, eNPS, rotación, absentismo
- Cómo mantengo el programa fresco a los seis meses cuando la novedad inicial desaparece
- Los criterios para decidir si el programa está funcionando o necesita rediseño

Dame recomendaciones específicas para mi contexto, no plantillas genéricas. Explica el razonamiento detrás de cada decisión de diseño.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 38,
                'use_case'         => 'Diseñar programa de reconocimiento gamificado que mejora engagement sin crear presión artificial',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Incentivos financieros: diseñar esquemas de compensación variable que funcionan',
                'description'      => 'Diseña estructuras de compensación variable, bonus y comisiones que alinean los incentivos del equipo con los objetivos estratégicos de la empresa sin crear efectos perversos.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en diseño de compensación y estructuras de incentivos con experiencia en empresas de tecnología, servicios profesionales y empresas de crecimiento rápido. Has diseñado esquemas de bonus, comisiones y participación en beneficios que alinean correctamente los incentivos individuales con los objetivos organizacionales. Conoces los errores clásicos que generan comportamientos disfuncionales y cómo evitarlos.

Voy a compartirte el contexto de mi organización y necesito que me diseñes un esquema de compensación variable que funcione en la práctica, no solo sobre el papel.

**Contexto:**
- Tipo de empresa: [startup, PYME, corporación, etc.]
- Departamento o rol que quiero incentivar: [ventas, ingeniería, producto, operaciones, liderazgo, etc.]
- Objetivo estratégico principal de este año: [crecimiento de ingresos, rentabilidad, expansión, eficiencia, etc.]
- Métricas clave del negocio: [las 2-3 métricas que más importan en este momento]
- Salario base actual como referencia: [rango aproximado del colectivo]
- Presupuesto total para compensación variable: [porcentaje del salario base o monto total]
- Período de evaluación que contemplas: [mensual, trimestral, anual]
- Problema que quieres resolver: [falta de motivación, desalineación de incentivos, alta rotación, etc.]

**Lo que necesito:**

Primero, ayúdame a entender los principios de diseño de incentivos antes de proponer métricas:
- La diferencia entre medir outputs (lo que el empleado produce) vs outcomes (el resultado de negocio) vs inputs (las actividades que realiza). Cuándo usar cada uno según el rol
- El problema de los indicadores proxy: cuando el incentivo se convierte en el objetivo y el empleado optimiza la métrica en lugar de el resultado real
- El principio de simplicidad: por qué los esquemas con más de tres métricas suelen fallar
- El efecto del umbral: cómo los esquemas con mínimos y máximos crean el incentivo de "llegar al mínimo y parar" o "guardar para el siguiente período"

Segundo, diseña el esquema de compensación variable para mi caso específico:
- Las métricas recomendadas (máximo tres) con su ponderación
- La estructura de pago: escalonada (tramos), lineal o por objetivos binarios (cumpliste o no)
- El acelerador: si contemplo pagar más por encima del 100% y cómo lo estructuro para no crear costes no previstos
- El período de medición y pago: cuándo se evalúa y cuándo se cobra, y cómo manejo los casos de empleados que se van antes del final del período
- El componente colectivo vs individual: si parte del bonus depende del rendimiento del equipo o la empresa, y en qué proporción

Tercero, explícame cómo comunicar el esquema:
- Cómo presento el esquema para que el empleado entienda exactamente cómo su comportamiento diario se traduce en ingresos adicionales
- La calculadora de incentivos: cómo creo una herramienta simple que permita al empleado proyectar su compensación en distintos escenarios
- Cómo manejo las preguntas difíciles: "¿qué pasa si la empresa cambia los objetivos a mitad de año?" o "¿qué pasa si el mercado cambia y los objetivos se vuelven inalcanzables?"

Cuarto, enumera los riesgos del esquema que propones y cómo los mitigo:
- ¿Qué comportamiento disfuncional podría crear este esquema que no estoy viendo?
- ¿Hay métricas que el empleado puede manipular sin que yo lo detecte fácilmente?
- ¿El esquema crea tensiones entre departamentos o entre empleados del mismo equipo?

Quinto, dame un plan de revisión anual del esquema:
- Cuándo revisar si el esquema sigue siendo apropiado
- Cómo ajustar los objetivos cuando las condiciones del mercado cambian significativamente
- Cómo gestionar la expectativa de los empleados cuando el esquema mejora o empeora

Sé específico para mi contexto. Si hay decisiones de diseño que dependen de información que no te di, pregúntame o dame alternativas según escenarios.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar esquema de compensación variable que alinea incentivos individuales con objetivos de negocio',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Programas de incentivos legales: cumplimiento normativo en los sistemas de bonus',
                'description'      => 'Analiza los riesgos legales de un programa de incentivos o bonus: legislación laboral, fiscal, mercantil y regulatoria que debes considerar antes de implementarlo.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado especializado en derecho laboral, fiscal y regulatorio con experiencia en el diseño legal de programas de compensación variable, bonus, comisiones y sistemas de incentivos para empresas en España y la Unión Europea. Tu especialidad es anticipar los riesgos legales que los diseñadores de compensación no ven y estructurar los programas para que sean legalmente sólidos desde el inicio.

Voy a contarte sobre el programa de incentivos que quiero implementar y necesito que me hagas un análisis legal completo de los riesgos y la estructura normativa que debo respetar.

**Contexto del programa:**
- Tipo de empresa: [startup, PYME, corporación cotizada, etc.]
- País o países donde opera: [España, UE, internacional]
- Colectivo que quiero incentivar: [empleados asalariados, directivos, comerciales, freelancers, agentes, etc.]
- Tipo de incentivo: [bonus anual, comisión por ventas, participación en beneficios, stock options, phantom shares, etc.]
- Criterios de devengo: [métricas que determinan si el empleado cobra el incentivo]
- Momento de pago: [mensual, trimestral, anual, diferido]
- Importe aproximado como porcentaje del salario fijo: [rango]

**Lo que necesito:**

Primero, analiza el marco laboral que aplica a mi programa. El estatuto de los trabajadores y la jurisprudencia española generan obligaciones específicas sobre la compensación variable que muchas empresas desconocen hasta que tienen un litigio:
- ¿El incentivo que diseño es salario a todos los efectos legales? ¿Qué consecuencias tiene eso para el cálculo de finiquito, IT, vacaciones y ERTE?
- ¿Puedo cambiar unilateralmente los objetivos o las métricas del programa a mitad de año? ¿Qué dice el ET sobre la modificación sustancial de condiciones de trabajo?
- ¿Hay convenio colectivo aplicable a mi sector que limite o regule la compensación variable?
- ¿Qué ocurre si el empleado se va antes de cobrar el bonus? ¿Tengo obligación de pagar el proporcional devengado?

Segundo, analiza el marco fiscal del programa:
- Tributación en el IRPF: cómo tributan los distintos tipos de incentivo (bonus en metálico, acciones, opciones, beneficios en especie)
- Seguridad Social: qué partidas cotizan y qué partidas están exentas de cotización
- Retención a cuenta: cómo calculo la retención correcta para un bonus que se paga en un único pago a fin de año
- Opciones sobre acciones (stock options): el régimen especial de tributación diferida, condiciones para acceder a él y riesgos si no se cumplen

Tercero, analiza los riesgos regulatorios específicos de mi sector (si aplican):
- Sector financiero: restricciones de MiFID II y CRD sobre la compensación variable en entidades reguladas
- Sector farmacéutico: límites sobre los incentivos a profesionales sanitarios
- Administración Pública: restricciones sobre bonus en contratos públicos o empresas con participación pública
- Startups con inversión: cómo afectan los acuerdos con inversores (pactos de socios, cláusulas de liquidación preferente) al diseño de incentivos en equity

Cuarto, ayúdame a redactar las cláusulas contractuales que protegen a la empresa:
- Cláusula de discrecionalidad vs derecho adquirido: cómo redacto el programa para que quede claro qué es discrecional y qué no
- Cláusula de permanencia (clawback): si puedo recuperar el bonus ya pagado si el empleado se va o si se detectan irregularidades
- Cláusula de confidencialidad sobre el programa: si puedo obligar al empleado a no revelar los detalles del esquema a sus compañeros
- Protocolo de comunicación: cómo documento la comunicación del programa para que sea válida como condición contractual

Quinto, dame un checklist de cumplimiento antes del lanzamiento del programa:
- Aprobaciones internas necesarias (consejo, comité de retribuciones, representación sindical)
- Documentación que debo tener preparada
- Plazo mínimo de comunicación previa al empleado según la ley
- Los tres riesgos legales más probables en mi configuración específica y cómo los mitigas

Nota importante: este análisis es orientativo. Para la implementación real, consulta con un abogado laboralista y un asesor fiscal que conozcan las especificidades de tu empresa y convenio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Analizar riesgos legales y fiscales de un programa de incentivos antes de implementarlo',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS gamification: programas de adopción que convierten el uso en hábito',
                'description'      => 'Diseña un programa de gamificación de Customer Success que acelera la adopción del producto, crea hábitos de uso y convierte clientes en power users comprometidos.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en Customer Success con especialización en diseño de programas de adopción y gamificación. Has trabajado con plataformas SaaS B2B y aplicaciones de consumo diseñando journeys de usuario que convierten clientes pasivos en power users comprometidos. Tu enfoque combina el conocimiento del producto con la psicología del hábito y las mecánicas de juego para crear programas de adopción que reducen el churn y aumentan el NPS.

Voy a contarte sobre mi producto y mis clientes y necesito que me ayudes a diseñar un programa de gamificación de adopción que funcione en la práctica.

**Contexto del producto y clientes:**
- Tipo de producto: [SaaS B2B, app de consumo, plataforma, herramienta, etc.]
- Problema principal que resuelve para el cliente: [qué outcome buscan]
- Perfil del usuario dentro del cliente: [rol, nivel técnico, frecuencia de uso esperada]
- Métricas de adopción actuales: [% de activación, DAU/MAU, features utilizadas por usuario medio]
- Punto de abandono más común: [dónde pierdes a los usuarios, si lo sabes]
- Funcionalidades clave que quieres que usen más: [las features que más valor aportan y menos se usan]
- Tipo de relación con el cliente: [self-service, asistido por CSM, enterprise con onboarding dedicado]

**Lo que necesito:**

Primero, ayúdame a mapear el journey de adopción con oportunidades de gamificación. No gamifiques todo, gamifica los momentos clave:
- El momento de activación: las primeras acciones que el usuario debe completar para llegar al valor básico del producto
- Los hitos de profundización: las features avanzadas que marcan la diferencia entre un usuario básico y un power user
- Los momentos de hábito: las acciones que, una vez realizadas con regularidad, predicen la retención a largo plazo
- Los momentos de expansión: cuándo el usuario está listo para descubrir nuevas funcionalidades o casos de uso

Segundo, diseña las mecánicas de gamificación para cada momento del journey:
- El programa de onboarding gamificado: misiones de primeros pasos, barra de progreso de configuración, recompensas al completar el setup básico
- El sistema de logros de profundización: badges o reconocimientos por usar features avanzadas por primera vez, por alcanzar ciertos volúmenes de uso, por completar workflows complejos
- Las rachas de uso: cómo incentivo el uso regular sin convertirlo en presión. Qué pasa cuando el usuario rompe la racha y cómo lo recupero
- El programa de certificación: si aplica, cómo un sistema de niveles o certificación gamificada convierte el aprendizaje del producto en un activo de carrera para el usuario

Tercero, diseña las recompensas del programa de adopción:
- Recompensas funcionales: acceso anticipado a features, aumento de límites, integraciones adicionales. Son las más valiosas porque refuerzan el uso del producto
- Recompensas de reconocimiento: badges visibles en el perfil, menciones en la comunidad, acceso a grupos de usuarios avanzados
- Recompensas económicas: descuentos, meses gratuitos, upgrades. Cuándo usarlas y cuándo evitarlas para no entrenar al usuario a esperar descuentos
- El swag y el reconocimiento físico: cuándo tiene sentido enviar algo tangible como refuerzo del hábito digital

Cuarto, diseña la estrategia de comunicación del programa de gamificación:
- Notificaciones en el producto: cómo diseño los triggers de notificación para que celebren el progreso sin ser spam
- Emails de progreso: el correo semanal o mensual que muestra al usuario cuánto ha avanzado y qué le queda por descubrir
- El CSM como facilitador: cómo el equipo de CS usa el programa de gamificación en las conversaciones de revisión con el cliente

Quinto, dame el sistema de medición del programa:
- Métricas de adopción que mejoran si el programa funciona: feature adoption rate, time to value, DAU/MAU ratio
- Métricas de engagement con el programa en sí: % de usuarios que participan, logros obtenidos, rachas activas
- Cómo separo el impacto de la gamificación del impacto de otras iniciativas de CS
- Las señales de alerta de que el programa está fallando o creando comportamientos no deseados

Dame especificaciones lo suficientemente detalladas para que pueda presentar el programa a mi equipo y empezar la implementación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 38,
                'use_case'         => 'Diseñar programa de adopción gamificado que convierte clientes en power users y reduce churn',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Auto-gamificación del freelance: sistemas personales para mantener la motivación',
                'description'      => 'Diseña tu propio sistema de gamificación personal como freelance: rachas, recompensas, retos y métricas que mantienen la motivación y la productividad sin jefe.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor de productividad y diseño de sistemas personales con experiencia trabajando con freelancers, consultores independientes y solopreneurs. Entiendes el reto único de la autonomía: cuando no hay jefe, horarios ni estructura externa, la motivación tiene que venir de dentro o de sistemas que tú mismo diseñas. Tu especialidad es crear sistemas de auto-gamificación que se adaptan a la psicología individual de cada profesional independiente.

Voy a contarte sobre mi situación como freelance y necesito que me ayudes a diseñar un sistema personal de gamificación que mantenga mi motivación, productividad y bienestar a lo largo del tiempo.

**Mi contexto como freelance:**
- Tipo de trabajo: [diseño, programación, consultoría, marketing, escritura, etc.]
- Tiempo que llevo como freelance: [meses o años]
- Principal desafío de motivación: [procrastinación, falta de foco, agotamiento, monotonía, aislamiento, etc.]
- Mis herramientas actuales de gestión: [Notion, Trello, papel, Toggl, etc.]
- Mi ciclo de trabajo típico: [cuántos proyectos simultáneos, tipo de tareas, horario aproximado]
- Lo que más me motiva cuando funciona bien: [completar proyectos, aprender algo nuevo, ingresos, reconocimiento, etc.]
- Lo que más me desmotiva: [tareas administrativas, sequías de proyectos, trabajo repetitivo, etc.]

**Lo que necesito:**

Primero, ayúdame a entender mi perfil de motivación para diseñar el sistema correcto:
- Soy más del tipo explorador (me motiva descubrir y aprender cosas nuevas), del tipo conquistador (me motiva completar y alcanzar metas), del tipo social (me motiva el reconocimiento y la conexión) o del tipo organizador (me motiva tener todo en orden y controlado)
- ¿Qué tipo de recompensas respondo mejor: externas y tangibles, o el propio sentido de progreso y dominio?
- ¿Qué tipos de métricas me generan ansiedad en lugar de motivación, y cuáles debo evitar en mi sistema?

Segundo, diseña el sistema de métricas y seguimiento de mi trabajo:
- Las tres o cuatro métricas que seguiré para medir mi rendimiento, bienestar y crecimiento como freelance
- Cómo las capturo de forma mínimamente invasiva (no quiero pasar más tiempo registrando que trabajando)
- El ritual de revisión semanal: cómo convierto los datos en aprendizaje y ajuste del sistema
- El dashboard personal: cómo visualizo mi progreso de forma que motive en lugar de agobiar

Tercero, diseña las mecánicas de gamificación que aplican a mi caso:
- El sistema de rachas: qué racha tiene sentido seguir (días de trabajo, días sin redes sociales, días de prospección). Cómo manejo los días malos sin destruir toda la racha
- Los retos personales: retos mensuales o trimestrales que me saquen de la zona de confort. Cómo los diseño para que sean difíciles pero alcanzables
- Los logros o hitos: los hitos de mi carrera como freelance que quiero celebrar. Cómo los celebro de forma significativa, no solo marcándolos en un checklist
- El sistema de puntos o créditos: si tiene sentido en mi caso, cómo gano puntos por tareas completadas y cómo los canjeo por recompensas que yo mismo elegí

Cuarto, diseña el sistema de recompensas personales:
- Recompensas de corto plazo: qué me permito hacer o disfrutar al completar una sesión de trabajo profundo o una tarea difícil
- Recompensas de medio plazo: qué celebración o capricho me doy al cerrar un proyecto, alcanzar un ingreso mensual objetivo, o completar un reto
- Recompensas de largo plazo: las experiencias o inversiones grandes que me sirven de motivación para los objetivos anuales
- El principio del contrato conmigo mismo: cómo hago que las recompensas sean vinculantes (cómo evito dármelas sin haberlas ganado o negármelas cuando sí las gané)

Quinto, dame el protocolo de mantenimiento del sistema:
- Cómo evito el abandono del sistema a las tres semanas, que es el destino de la mayoría de sistemas de productividad personal
- Cómo adapto el sistema cuando mis circunstancias cambian (más proyectos, una sequía, un cambio de especialidad)
- Cuándo simplificar el sistema si se vuelve una carga en lugar de una ayuda
- Cómo incorporo a otros freelancers o a mi red profesional para añadir el componente social que falta cuando trabajas solo

Dame un sistema que sea realista, adaptado a mi perfil y que pueda empezar a usar esta semana, no dentro de un mes después de una configuración exhaustiva.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar sistema personal de gamificación para mantener motivación y productividad como freelance',
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
