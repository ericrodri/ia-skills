<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills266Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'OKRs de marketing: conectar los objetivos del equipo con el negocio',
                'description'      => 'Aprende a definir OKRs de marketing que estén alineados con los objetivos de negocio: cómo redactar resultados clave medibles, evitar los errores más comunes y hacer seguimiento efectivo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de OKRs especializado en equipos de marketing con experiencia en empresas de tecnología y consumo. Quiero implementar o mejorar la metodología OKR en mi equipo de marketing y necesito que me guíes desde los fundamentos hasta la ejecución práctica.

Antes de empezar, hazme estas preguntas:
- ¿Cuál es el tamaño de mi equipo de marketing y cómo está estructurado?
- ¿Cuáles son los objetivos principales de la empresa para este año o trimestre?
- ¿Hemos usado OKRs antes o es la primera vez?
- ¿Cuáles son las métricas de marketing que actualmente reportamos?

Con esas respuestas, guíame por los siguientes bloques:

BLOQUE 1: Fundamentos de los OKRs para marketing
Muchos equipos de marketing confunden OKRs con KPIs o metas de negocio. Ayúdame a entender:
- La diferencia entre Objetivo (ambicioso, cualitativo) y Resultados Clave (medibles, verificables)
- Por qué los OKRs de marketing deben conectar con los OKRs de negocio y no existir de forma aislada
- La diferencia entre OKRs de compromiso y OKRs aspiracionales: cuándo usar cada tipo
- Cuántos OKRs debería tener el equipo de marketing (recomendación práctica, no teórica)
- Errores más comunes al implementar OKRs en marketing: outputs vs outcomes, actividades vs resultados

BLOQUE 2: Cómo redactar buenos OKRs de marketing
La redacción lo es todo. Ayúdame a construir OKRs reales:
- Fórmulas para redactar Resultados Clave que no sean ambiguos
- Cómo transformar métricas de vanidad (seguidores, impresiones) en resultados de negocio (leads, pipeline, retención)
- Ejemplos de OKRs de marketing por área: brand, demanda, contenido, producto, CRM
- Cómo definir la línea de base actual para que el resultado clave sea medible desde el inicio
- Cómo fijar el nivel de ambición correcto: retador pero alcanzable

BLOQUE 3: Alineación vertical y horizontal
Los OKRs de marketing deben encajar con el resto de la empresa:
- Cómo hacer el proceso de cascada desde los OKRs de empresa hacia los de marketing
- Cómo alinear horizontalmente con ventas, producto y CS para evitar conflictos de prioridad
- Qué hacer cuando el objetivo de empresa no tiene traducción directa en marketing
- Cómo manejar las contribuciones de marketing a objetivos que no controla directamente

BLOQUE 4: Seguimiento y revisión de OKRs
Los OKRs sin cadencia de revisión mueren en el primer mes:
- Check-ins semanales: qué preguntar, cuánto tiempo dedicar, cómo evitar que se vuelvan reuniones de status
- Check-in de mitad de trimestre: cómo evaluar si hay que ajustar o mantener el rumbo
- Revisión de fin de trimestre: cómo puntuar honestamente y qué aprender
- Cómo comunicar el avance de los OKRs de marketing al resto de la empresa
- Herramientas de seguimiento de OKRs recomendadas para equipos de marketing

BLOQUE 5: Transición de objetivos anuales a OKRs trimestrales
Muchos equipos tienen planes anuales pero no saben cómo trocearlo en OKRs trimestales:
- Cómo descomponer la estrategia anual de marketing en cuatro trimestres coherentes
- Cómo manejar los proyectos de largo plazo dentro de la cadencia trimestral de OKRs
- Qué hacer con las métricas operativas recurrentes (BAU) que no encajan en OKRs
- Cómo iterar el sistema de OKRs entre trimestres sin perder continuidad

Termina con una plantilla de OKRs para el próximo trimestre con tres Objetivos y tres Resultados Clave cada uno, adaptada a un equipo de marketing de empresa B2B o B2C según mi contexto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Implementar OKRs de marketing alineados con los objetivos de negocio',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Engineering OKRs: cómo el equipo técnico contribuye a los objetivos de empresa',
                'description'      => 'Aprende a definir OKRs de ingeniería que conecten con el negocio: cómo medir calidad, velocidad, deuda técnica y plataforma en el lenguaje de los objetivos de empresa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un engineering manager con experiencia implementando OKRs en equipos técnicos en empresas de producto. Quiero que mi equipo de ingeniería tenga OKRs que conecten con los objetivos de negocio y no sean solo métricas técnicas internas que nadie entiende fuera del equipo.

Para contextualizar, hazme estas preguntas:
- ¿Cuál es el tamaño del equipo de ingeniería y cómo está estructurado (equipos de producto, plataforma, infraestructura)?
- ¿Cuáles son los objetivos de negocio de la empresa para este trimestre o año?
- ¿Hemos usado OKRs en ingeniería antes? ¿Qué ha funcionado y qué no?
- ¿Cuáles son los principales retos actuales del equipo (velocidad, calidad, deuda técnica, escalabilidad)?

Con esas respuestas, guíame por:

BLOQUE 1: El problema de los OKRs de ingeniería
Los equipos técnicos tienden a escribir OKRs que nadie fuera entiende. Explícame:
- La diferencia entre OKRs de output técnico (features lanzadas, tickets cerrados) y OKRs de outcome (impacto en el negocio)
- Cómo traducir objetivos técnicos a lenguaje de negocio sin perder precisión técnica
- El error de confundir mejoras de plataforma con resultados de negocio
- Cuándo es legítimo tener OKRs puramente técnicos y cómo justificarlos ante la dirección
- Cómo involucrar al equipo de ingeniería en la definición de OKRs para que haya ownership real

BLOQUE 2: Tipos de OKRs para equipos de ingeniería
Ayúdame a entender las categorías de OKRs más comunes en equipos técnicos:
- OKRs de product engineering: velocidad de entrega, adoption de features, impacto en retención
- OKRs de plataforma e infraestructura: disponibilidad, latencia, coste de infraestructura, escalabilidad
- OKRs de calidad y deuda técnica: cobertura de tests, tiempo de resolución de bugs, error rate en producción
- OKRs de experiencia del desarrollador (DevEx): tiempo de onboarding, satisfacción del equipo, cycle time
- OKRs de seguridad: vulnerabilidades resueltas, tiempo de respuesta ante incidentes

BLOQUE 3: Métricas de ingeniería que conectan con el negocio
Las cuatro métricas de DORA y otras formas de medir lo que importa:
- DORA metrics: deployment frequency, lead time, change failure rate, MTTR
- Cómo presentar métricas de ingeniería en el lenguaje del CFO y del CPO
- Cómo definir SLOs (Service Level Objectives) y convertirlos en Resultados Clave
- Cómo medir el impacto de la deuda técnica en la velocidad del equipo

BLOQUE 4: Cadencia y seguimiento en ingeniería
Los equipos de ingeniería tienen sprints de dos semanas pero OKRs trimestrales. Cómo gestionar esto:
- Cómo conectar los sprints con los OKRs sin añadir burocracia innecesaria
- Qué métricas revisar en el weekly engineering sync vs en el quarterly OKR review
- Cómo gestionar los OKRs cuando hay un incidente mayor que consume tiempo del equipo
- Herramientas para visualizar el avance de los OKRs de ingeniería en tiempo real

BLOQUE 5: Alineación entre ingeniería, producto y negocio
Los OKRs de ingeniería no pueden definirse en el vacío:
- Cómo participar en el proceso de planificación estratégica de la empresa
- Cómo negociar el equilibrio entre trabajo de producto (features) y trabajo de plataforma (deuda técnica)
- Cómo comunicar las limitaciones técnicas como parte de la conversación de OKRs
- Cómo construir la confianza de la dirección en el equipo técnico a través de los OKRs

Termina con tres ejemplos de OKRs completos para un equipo de engineering: uno orientado a velocidad de entrega, uno a calidad/estabilidad y uno a reducción de deuda técnica, con tres resultados clave cada uno.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Definir OKRs de ingeniería que conecten el trabajo técnico con los objetivos de negocio',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design OKRs: medir el impacto del diseño en objetivos de negocio',
                'description'      => 'Aprende a escribir OKRs para equipos de diseño que vayan más allá de la estética: cómo medir usabilidad, satisfacción, conversión y contribución del diseño al negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un design manager con experiencia liderando equipos de diseño de producto en empresas de tecnología y cómo implementar OKRs que demuestren el valor del diseño al negocio. El equipo de diseño siempre lucha para justificar su impacto con números. Quiero cambiar eso.

Antes de empezar, hazme estas preguntas:
- ¿Cómo está estructurado mi equipo de diseño (UX research, product design, diseño gráfico, motion)?
- ¿Cuáles son los objetivos de negocio de la empresa este trimestre?
- ¿Tenemos ya métricas de diseño o partimos de cero en la medición?
- ¿Cuál es el principal argumento que uso para justificar el valor del diseño internamente?

Con esas respuestas, guíame por:

BLOQUE 1: El problema de medir el diseño
El diseño es intangible para quien no lo entiende, pero eso no significa que sea inconmensurable:
- Por qué los equipos de diseño tienden a medir outputs (pantallas diseñadas, componentes del design system) en lugar de outcomes (conversión, retención, satisfacción)
- Cómo separar las métricas de proceso de las métricas de impacto
- La diferencia entre métricas de diseño cualitativas (usabilidad, satisfacción) y cuantitativas (conversión, error rate, tiempo en tarea)
- Cómo construir la narrativa del impacto del diseño para la dirección

BLOQUE 2: Categorías de OKRs para equipos de diseño
Ayúdame a entender las áreas donde el diseño puede tener OKRs medibles:
- OKRs de experiencia de usuario: NPS, CSAT, usabilidad (System Usability Scale), error rates
- OKRs de conversión y rendimiento de producto: mejoras de conversión atribuibles a cambios de diseño
- OKRs de research e insight: tiempo entre insight y decisión de producto, adopción de recomendaciones de research
- OKRs de design system: adopción de componentes, tiempo de producción de equipos que usan el sistema
- OKRs de accesibilidad: nivel de conformidad con WCAG, reducción de issues de accesibilidad

BLOQUE 3: Cómo escribir Resultados Clave de diseño
La redacción precisa es lo que diferencia un OKR real de una aspiración vaga:
- Cómo establecer la línea de base antes de definir el resultado clave
- Cómo redactar resultados clave que sean verificables y no interpretativos
- Ejemplos concretos de Resultados Clave para cada categoría de OKR de diseño
- Cómo conectar el resultado clave de diseño con la métrica de negocio que impacta

BLOQUE 4: Herramientas de medición para equipos de diseño
No puedes mejorar lo que no mides. Explícame:
- Cómo incorporar test de usuarios como herramienta de medición de OKRs
- Herramientas de analítica de comportamiento en producto (Hotjar, FullStory, Maze, Lookback)
- Cómo usar encuestas in-product (CSAT, CES) como fuente de datos para OKRs
- Cómo medir el impacto de un rediseño con A/B testing
- Frecuencia de medición recomendada para cada tipo de métrica de diseño

BLOQUE 5: Integración de los OKRs de diseño con el resto del equipo
El diseño no trabaja solo. Ayúdame a integrar los OKRs de diseño con producto e ingeniería:
- Cómo co-crear OKRs con producto para que el diseño no sea un ejecutor sino un co-autor
- Cómo comunicar el progreso de los OKRs de diseño en reuniones de empresa
- Cómo gestionar los OKRs de diseño cuando el roadmap de producto cambia a mitad de trimestre
- Cómo construir un caso de contratación basado en el impacto de los OKRs anteriores

Termina con una plantilla de OKRs para el equipo de diseño con dos objetivos y tres resultados clave cada uno, adaptados a una empresa de producto digital en crecimiento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Definir OKRs de diseño que demuestren el impacto del equipo en métricas de negocio',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales planning: del objetivo anual al plan de territorio mensual',
                'description'      => 'Aprende a descomponer el objetivo anual de ventas en planes de territorio, cuotas individuales y acciones mensuales concretas que conecten el top-down con el bottom-up.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia en planificación comercial en empresas B2B de tecnología y servicios. Quiero construir un plan de ventas sólido que conecte el objetivo anual con las acciones de cada vendedor mes a mes, y necesito tu guía paso a paso.

Para contextualizar bien, hazme estas preguntas:
- ¿Cuál es el objetivo de ingresos de ventas para este año?
- ¿Cuántos vendedores tengo y cómo está estructurado el equipo (hunters, farmers, inside, field)?
- ¿Cuál es el ticket promedio y la duración del ciclo de ventas?
- ¿Cuáles son los principales segmentos o territorios en los que opera el equipo?
- ¿Hemos tenido plan formal de ventas antes, o hemos trabajado más a intuición?

Con esas respuestas, guíame por estos bloques:

BLOQUE 1: Descomponer el objetivo anual
El objetivo top-down necesita una validación bottom-up para ser creíble:
- Cómo calcular cuántos deals necesito cerrar para alcanzar el objetivo anual
- Cómo estimar el funnel necesario a partir de las tasas de conversión históricas
- El proceso top-down vs bottom-up de planning: cuándo usar cada enfoque y cómo combinarlos
- Cómo detectar si el objetivo es alcanzable o es una meta aspiracional sin base en la realidad
- Qué hipótesis necesito validar antes de comprometer el plan

BLOQUE 2: Diseño de territorios y cuotas
Un plan justo motiva; uno injusto destruye al equipo:
- Cómo dividir el mercado en territorios equitativos (por geografía, segmento, industria, tamaño de empresa)
- Criterios para asignar cuentas: potencial de mercado, relaciones existentes, capacidad del vendedor
- Cómo calcular la cuota individual a partir del objetivo de equipo y el histórico de cada vendedor
- La regla del Over Attainment: cuánto OTE pagar cuando el vendedor supera la cuota
- Cómo gestionar los territorios cuando hay cambios de equipo (nuevas contrataciones, bajas)

BLOQUE 3: El plan mensual de actividad
Los objetivos anuales se cumplen mes a mes con acciones concretas:
- Cómo definir los KPIs de actividad mensuales: llamadas, demos, propuestas, cierres
- La relación entre actividad y resultados: cómo calcular cuántas llamadas necesito para cerrar un deal
- Cómo diseñar el sprint mensual de ventas con hitos semanales claros
- Cómo gestionar el mix entre hunting (nuevos clientes) y farming (crecimiento en existentes)
- Cómo adaptar el plan mensual cuando hay un trimestre flojo o un pipeline débil

BLOQUE 4: Seguimiento y forecast
Sin seguimiento, el plan es solo papel:
- Cómo construir un forecast semanal que sea preciso y no solo optimista
- Las señales de alerta temprana en el pipeline que indican que el mes va a fallar
- Cómo hacer el one-on-one de ventas efectivo: qué revisar, cuánto tiempo, qué decisiones tomar
- Herramientas de CRM para hacer seguimiento del plan (qué configurar en Salesforce, HubSpot, Pipedrive)
- Cómo usar el análisis de pipeline coverage para gestionar el riesgo de cierre

BLOQUE 5: Planes de mejora y aceleración
El plan no es estático. Ayúdame a iterarlo:
- Cómo detectar si el problema es de actividad, de conversión o de tamaño de deal
- Planes de mejora individuales para vendedores por debajo de cuota
- Cómo acelerar el pipeline en el último mes del trimestre sin dañar el siguiente
- Cómo revisar y actualizar el plan anual cuando el mercado cambia a mitad de año

Termina con una plantilla de plan de territorio trimestral para un vendedor individual con objetivo, actividad semanal, pipeline mínimo necesario y hitos de revisión mensual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir un plan de ventas que conecte el objetivo anual con las acciones individuales mensuales',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product strategy y OKRs: alinear el roadmap con los objetivos de empresa',
                'description'      => 'Aprende a conectar la estrategia de producto con los OKRs de empresa: cómo construir un roadmap orientado a outcomes, priorizar con criterio estratégico y comunicarlo a stakeholders.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CPO o VP de Producto con experiencia construyendo estrategias de producto en empresas de tecnología en crecimiento. Quiero que me guíes en cómo conectar la estrategia de producto con los objetivos de negocio a través de OKRs, y cómo construir un roadmap que refleje esa alineación.

Para contextualizar, hazme estas preguntas al inicio:
- ¿En qué fase está mi empresa (early stage, escala, madurez) y cuál es el modelo de negocio?
- ¿Cuántos product managers hay en el equipo y cómo se organizan?
- ¿Cuáles son los objetivos de negocio más importantes para este año?
- ¿Tenemos ya OKRs de producto o solo roadmap de features?

Con esas respuestas, guíame por estos bloques:

BLOQUE 1: De la estrategia de empresa a la estrategia de producto
El roadmap de producto no puede existir sin una estrategia clara:
- Cómo descomponer la estrategia de empresa en apuestas de producto
- La diferencia entre misión del producto, visión, estrategia y roadmap
- Cómo identificar los problemas de cliente que son más críticos para los objetivos de negocio
- La diferencia entre estrategia de producto y lista de features priorizada
- Cómo construir la narrativa estratégica del producto que todos en la empresa entiendan

BLOQUE 2: OKRs de producto orientados a outcomes
El error más común en producto es medir features entregadas en lugar de resultados obtenidos:
- Por qué los OKRs de producto deben medir el comportamiento del usuario, no la actividad del equipo
- Cómo escribir Resultados Clave que capturen el valor entregado al cliente
- La jerarquía de OKRs en producto: empresa → área de producto → equipo → PM individual
- Cómo definir la línea de base para que los resultados clave sean verificables
- Ejemplos de OKRs de producto para los momentos más críticos: adquisición, activación, retención, monetización, referidos

BLOQUE 3: Roadmap orientado a outcomes
Un roadmap de features no es una estrategia; un roadmap de outcomes sí:
- Cómo construir un roadmap basado en problemas y oportunidades en lugar de soluciones
- Cómo usar el formato Now / Next / Later para comunicar el roadmap sin comprometer fechas
- Cómo alinear el roadmap con los OKRs del trimestre
- Cómo gestionar las peticiones de stakeholders que no están en el roadmap
- Cómo comunicar el roadmap a ventas, marketing y CS sin generar expectativas que no puedes cumplir

BLOQUE 4: Priorización estratégica con OKRs
Los OKRs son la mejor herramienta para priorizar cuando hay demasiadas opciones:
- Cómo usar los OKRs como filtro de priorización de ideas y proyectos
- Frameworks de priorización que funcionan bien con OKRs: RICE, ICE, impacto vs confianza vs esfuerzo
- Cómo decidir qué no hacer cuando tienes más oportunidades que capacidad de ejecución
- Cómo gestionar la deuda técnica y el trabajo de plataforma dentro de los OKRs de producto

BLOQUE 5: Ciclo de planificación y revisión de producto
Los OKRs de producto requieren una cadencia de revisión disciplinada:
- Cómo integrar los OKRs en el ciclo de sprint y no crear dos sistemas paralelos
- Reuniones de revisión de OKRs: qué revisar, con quién y cada cuánto
- Cómo usar los OKRs para tomar decisiones de pivotar, perseverar o parar un proyecto
- Cómo presentar el avance de los OKRs de producto al CEO y al board

Termina con una plantilla de planificación trimestral de producto con tres OKRs (uno de crecimiento, uno de retención y uno de satisfacción del cliente) con tres resultados clave cada uno y los proyectos del roadmap que los respaldan.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Conectar la estrategia de producto con OKRs de empresa y construir un roadmap orientado a outcomes',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'HR strategy y OKRs: los objetivos de talento que impulsan el negocio',
                'description'      => 'Aprende a construir una estrategia de RRHH conectada con los objetivos de negocio y a traducirla en OKRs medibles: atracción de talento, desarrollo, retención y cultura.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief People Officer con experiencia construyendo equipos de alto rendimiento en empresas de tecnología en crecimiento. Quiero diseñar una estrategia de RRHH que esté genuinamente conectada con los objetivos de negocio y traducirla en OKRs que el equipo ejecutivo pueda entender y valorar.

Para contextualizar, hazme estas preguntas:
- ¿Cuál es el tamaño de la empresa y cuántos empleados tenemos?
- ¿En qué fase de crecimiento está la empresa (startup, scale-up, corporación)?
- ¿Cuáles son los objetivos de negocio más críticos para este año?
- ¿Cuáles son los mayores retos de talento actuales (contratación, retención, cultura, desarrollo)?

Con esas respuestas, guíame por:

BLOQUE 1: De la estrategia de negocio a la estrategia de talento
RRHH deja de ser un coste cuando se convierte en un habilitador del negocio:
- Cómo leer los objetivos de negocio y traducirlos en necesidades de talento
- La diferencia entre RRHH transaccional (contratar, pagar, cumplir) y RRHH estratégico (habilitar el crecimiento)
- Cómo identificar qué capacidades de talento son críticas para los objetivos de este año
- Cómo construir el business case para invertir en personas usando el lenguaje del CFO
- La diferencia entre OKRs de RRHH de proceso y OKRs de RRHH de impacto en negocio

BLOQUE 2: OKRs de atracción y selección de talento
Contratar rápido y bien es el OKR más crítico en empresas en crecimiento:
- Cómo medir la calidad de la contratación más allá del tiempo de cobertura de vacante
- KPIs clave: time-to-hire, offer acceptance rate, calidad del candidato a 6 meses, fuentes de talento
- Cómo definir OKRs de employer branding que contribuyan a la atracción de talento
- Cómo medir la diversidad en el proceso de selección como resultado clave
- Benchmarks del mercado para comparar el rendimiento del proceso de selección

BLOQUE 3: OKRs de retención y compromiso
Retener al talento clave es más barato que contratar nuevo:
- Cómo medir la retención de forma segmentada (no todos los empleados tienen el mismo valor estratégico)
- eNPS y encuestas de clima: cómo convertirlas en resultados clave accionables
- OKRs de desarrollo profesional: cómo medir que los empleados crecen dentro de la empresa
- Cómo medir el impacto de las políticas de flexibilidad en la retención
- Señales de alerta de riesgo de fuga de talento y cómo convertirlas en OKR preventivo

BLOQUE 4: OKRs de cultura y liderazgo
La cultura es el OKR más difícil de medir pero uno de los más importantes:
- Cómo convertir los valores de empresa en comportamientos medibles
- Cómo medir la efectividad del liderazgo intermedio en los resultados del equipo
- OKRs de desarrollo de managers: por qué los buenos managers son el mayor palanca de retención
- Cómo medir la salud de la cultura sin reducirla a una encuesta anual de engagement
- Cómo crear un OKR de cultura que el CEO y el board encuentren significativo

BLOQUE 5: Comunicar y hacer seguimiento de los OKRs de RRHH
Los OKRs de RRHH deben estar en el mismo cuadro de mando que los del negocio:
- Cómo presentar los OKRs de talento al equipo directivo de forma que conecten con el P&L
- Cadencia de revisión de OKRs de RRHH: qué revisar en mensual vs trimestral
- Cómo usar los datos de talento para anticipar problemas antes de que se conviertan en crisis
- Herramientas de people analytics para dar soporte a los OKRs de RRHH

Termina con un set de OKRs para el equipo de RRHH de una empresa de 50-200 personas, con tres objetivos (atracción, retención y cultura) y tres resultados clave cada uno, listos para presentar al CEO.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar una estrategia de RRHH con OKRs que conecten el talento con los objetivos de negocio',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Planificación financiera estratégica: del budget al forecast rolling',
                'description'      => 'Aprende a diseñar un proceso de planificación financiera moderno: presupuesto anual, forecast trimestral rolling y cómo conectar el plan financiero con la estrategia de negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO o director financiero con experiencia en planificación financiera estratégica en empresas de tecnología y servicios en fase de crecimiento. Quiero modernizar el proceso de planificación financiera de mi empresa y pasar de un presupuesto anual estático a un modelo de forecast rolling que apoye mejor la toma de decisiones.

Para contextualizar, hazme estas preguntas:
- ¿Cuál es el tamaño de la empresa (revenue, empleados) y el modelo de negocio?
- ¿Cómo es el proceso de planificación financiera actual? ¿Tenemos presupuesto anual?
- ¿Cuáles son los principales conductores de ingresos y costes del negocio?
- ¿Qué herramientas financieras usamos (Excel, Anaplan, Pigment, Cube, Mosaic)?
- ¿Cuál es el mayor dolor en el proceso de planificación actual?

Con esas respuestas, guíame por:

BLOQUE 1: Los problemas del presupuesto anual tradicional
El presupuesto anual que se hace en octubre para el año siguiente suele estar desactualizado en febrero:
- Por qué el presupuesto anual tradicional falla en entornos de incertidumbre y crecimiento
- La diferencia entre un budget de autorización de gasto y un plan financiero de gestión
- Cómo el presupuesto anual puede convertirse en un obstáculo para la toma de decisiones ágil
- Cuándo tiene sentido mantener el presupuesto anual y cuándo complementarlo o reemplazarlo
- El espectro de modelos de planificación: del budget fijo al beyond budgeting

BLOQUE 2: Diseño del modelo de forecast rolling
El forecast rolling actualiza la visión financiera cada mes o trimestre para los próximos 12-18 meses:
- Qué es un forecast rolling y cómo se diferencia del budget y del reforecast trimestral
- Cómo definir el horizonte del forecast: 12+1, 18 meses, cuatro trimestres rolling
- Qué métricas y drivers del negocio deben alimentar el modelo de forecast
- Cómo construir un modelo financiero driver-based que actualice el forecast con pocas entradas
- Con qué granularidad construir el forecast: por línea de negocio, producto, geografía, función

BLOQUE 3: El proceso de planificación integrado
Un buen plan financiero no lo hace solo el equipo de finanzas:
- Cómo involucrar a los líderes de área en la construcción del plan sin crear un proceso burocrático
- El calendario de planificación: cuándo hacer el budget anual, cuándo actualizar el forecast, cuándo hacer el cierre
- Cómo alinear el plan financiero con los OKRs y la estrategia de negocio
- Cómo gestionar los escenarios (base, optimista, pesimista) y cuándo activar cada uno
- Cómo mejorar la velocidad del proceso de planificación para que no consuma semanas del equipo

BLOQUE 4: Métricas y KPIs financieros para el cuadro de mando
El plan financiero es inútil si no hay seguimiento regular:
- KPIs financieros por tipo de negocio: SaaS (ARR, MRR, churn, CAC, LTV), ecommerce, servicios
- Cómo construir un cuadro de mando financiero que la dirección entienda y use
- La diferencia entre métricas de actividad, de resultado y de predicción en finanzas
- Análisis de varianza: cómo explicar la diferencia entre el plan y el real de forma accionable
- Cadencia de revisión financiera: diaria (operacional), semanal (ventas y cash), mensual (estratégica), trimestral (inversores)

BLOQUE 5: Herramientas y automatización de la planificación
La tecnología puede liberarte de la esclavitud del Excel:
- Cuándo tiene sentido invertir en una herramienta de FP&A y cuáles son las opciones del mercado
- Cómo construir un modelo de forecast robusto en Excel o Google Sheets antes de dar el salto a una herramienta especializada
- Cómo automatizar la carga de datos reales para que el forecast se actualice solo
- Cómo conectar el ERP, el CRM y la plataforma de HR con el modelo financiero

Termina con un calendario de planificación financiera para el año próximo, con las fechas clave de cada proceso (budget, forecast Q1-Q4, cierre mensual, revisión con inversores) y los responsables de cada uno.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Diseñar un proceso de planificación financiera moderno con forecast rolling y cuadro de mando',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal strategy: cómo el departamento jurídico apoya la estrategia de negocio',
                'description'      => 'Aprende a posicionar el departamento legal como socio estratégico del negocio: cómo priorizar el trabajo jurídico, medir el impacto del equipo legal y hablar el lenguaje de los objetivos de empresa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un General Counsel o director jurídico con experiencia posicionando el departamento legal como socio estratégico en empresas de tecnología y servicios en crecimiento. Quiero transformar la percepción del departamento jurídico de "el equipo que dice no" a "el equipo que habilita el crecimiento con seguridad".

Para contextualizar bien, hazme estas preguntas:
- ¿Cuál es el tamaño del equipo legal y cómo está estructurado (in-house, externo, mixto)?
- ¿Cuáles son las áreas de mayor demanda de trabajo jurídico actualmente?
- ¿Cuáles son los objetivos estratégicos de la empresa para este año?
- ¿Cómo perciben los equipos de negocio actualmente al departamento legal?

Con esas respuestas, guíame por:

BLOQUE 1: De legal reactivo a legal estratégico
El departamento jurídico que espera que le lleven problemas no puede ser un socio estratégico:
- La diferencia entre un equipo legal reactivo (resuelve problemas) y proactivo (previene riesgos y habilita oportunidades)
- Cómo mapear los objetivos estratégicos de la empresa y las implicaciones legales de cada uno
- Cómo construir un modelo de priorización del trabajo jurídico basado en impacto de negocio y riesgo
- Cómo salir de la trampa del "todo es urgente" que paraliza al equipo legal
- Cómo comunicar al CEO y al board el valor del trabajo legal en términos de negocio

BLOQUE 2: OKRs y métricas para el departamento jurídico
Medir el trabajo legal es difícil, pero no imposible:
- Por qué los KPIs tradicionales de legal (número de contratos firmados, horas facturadas) no miden valor
- Métricas de impacto en negocio: tiempo de ciclo de contratos, porcentaje de deals bloqueados por legal, tiempo de resolución de disputas
- Métricas de calidad y riesgo: reclamaciones recibidas, incidencias de cumplimiento, nivel de riesgo del portfolio de contratos
- OKRs de legal orientados al cliente interno: satisfacción de los equipos de negocio con el soporte jurídico
- Cómo construir un dashboard de legal que la dirección quiera revisar

BLOQUE 3: Priorización estratégica del trabajo jurídico
Con recursos limitados, el equipo legal no puede atender todo a la vez:
- Cómo diseñar una matriz de priorización de solicitudes jurídicas por impacto y urgencia
- SLA internos para las solicitudes más comunes (revisión de contrato, consulta, due diligence)
- Cómo desarrollar plantillas y playbooks que reduzcan el tiempo de respuesta en los asuntos recurrentes
- Cuándo derivar trabajo al externo y cuándo resolverlo internamente
- Cómo decir no a solicitudes de bajo valor de forma que no dañe la relación con el negocio

BLOQUE 4: Legal como habilitador del crecimiento
Las áreas donde el departamento legal tiene el mayor impacto positivo en el negocio:
- Contratos comerciales: cómo acelerar el ciclo de ventas sin aumentar el riesgo
- Expansión internacional: cómo el equipo legal puede facilitar la entrada a nuevos mercados
- Fundraising y M&A: el papel del equipo legal en las operaciones corporativas
- Privacidad y cumplimiento (RGPD, ePrivacy): cómo convertir el cumplimiento en ventaja competitiva
- Propiedad intelectual: cómo proteger los activos clave del negocio de forma proactiva

BLOQUE 5: Construir la relación con los equipos de negocio
Legal no puede ser estratégico si los equipos de negocio no confían en él:
- Cómo incorporarse a las conversaciones estratégicas antes de que los problemas lleguen
- Formación legal básica para equipos de ventas, producto y RRHH que reducen la demanda de soporte
- Cómo hacer el onboarding de los nuevos empleados para que entiendan el framework legal de la empresa
- Cómo construir la reputación del equipo legal como el "sí" con condiciones en lugar del "no"

Termina con un plan de 90 días para posicionar el departamento jurídico como socio estratégico, con acciones concretas en comunicación, procesos, métricas y relación con el negocio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Posicionar el departamento legal como socio estratégico del negocio con OKRs y métricas de impacto',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS OKRs: cómo medir el éxito del equipo más allá del NPS',
                'description'      => 'Aprende a definir OKRs de Customer Success que vayan más allá del NPS: retención, expansión, adoption de producto y contribución al crecimiento del negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia construyendo equipos y métricas de CS en empresas de SaaS B2B. Quiero definir OKRs para el equipo de Customer Success que sean significativos para el negocio y vayan mucho más allá del NPS y el CSAT.

Para contextualizar bien, hazme estas preguntas:
- ¿Cuál es el modelo de CS que tenemos (high touch, tech touch, pooled, mixto)?
- ¿Cuáles son las métricas de CS que reportamos actualmente?
- ¿Cuáles son los objetivos de negocio más importantes para este año?
- ¿Cuál es el tamaño del equipo de CS y cómo está segmentado?

Con esas respuestas, guíame por:

BLOQUE 1: El problema de medir CS solo con NPS
El NPS es fácil de medir pero casi imposible de accionar:
- Por qué el NPS no es suficiente como métrica de CS y en qué casos incluso es engañoso
- La diferencia entre métricas de percepción (NPS, CSAT, CES) y métricas de comportamiento (retención, adoption, expansión)
- Por qué el equipo de CS debe ser responsable de métricas de negocio (retención y expansión) además de las de satisfacción
- Cómo construir un sistema de métricas de CS en capas: actividad, percepción, comportamiento, impacto financiero
- Cómo evitar la trampa de las métricas de vanidad en CS

BLOQUE 2: OKRs de retención y renovación
La retención es la métrica más directa del valor que el cliente percibe:
- Cómo medir la retención de forma correcta: gross revenue retention vs net revenue retention
- OKRs de renovación: tasa de renovación, valor en riesgo gestionado, ciclo de renovación proactivo
- Cómo detectar clientes en riesgo antes de la conversación de renovación con señales de salud del cliente
- Cómo definir el Customer Health Score y convertirlo en resultado clave accionable
- La diferencia entre retener por inertia y retener por valor: cómo el OKR refleja esa diferencia

BLOQUE 3: OKRs de expansión y crecimiento
CS no es solo retención; también es el canal de crecimiento más eficiente:
- Net Revenue Retention (NRR) como la métrica más importante de CS en SaaS
- OKRs de upsell y cross-sell desde CS: cuántas oportunidades genera el equipo, conversión, valor promedio
- Cómo el equipo de CS identifica oportunidades de expansión sin ser un equipo de ventas
- El modelo de land and expand: cómo el CS habilita el crecimiento dentro de las cuentas existentes
- Cómo medir el pipeline generado por CS y su contribución al ARR total

BLOQUE 4: OKRs de adoption y valor entregado
Un cliente que usa el producto es un cliente que renueva:
- Cómo definir los indicadores de adoption críticos para la retención (product adoption metrics)
- OKRs de time-to-value: cuánto tarda el cliente en conseguir su primer resultado con el producto
- Cómo medir el uso del producto por segmento de cliente y convertirlo en señal de riesgo o de expansión
- Outcomes del cliente: cómo medir si el cliente está consiguiendo los resultados que prometimos en la venta
- Cómo el equipo de CS puede influir en el roadmap de producto a través de los datos de adoption

BLOQUE 5: Cadencia y comunicación de OKRs de CS
Los OKRs de CS deben estar en el cuadro de mando de la dirección:
- Cómo presentar los OKRs de CS al CEO y al equipo directivo de forma que se entiendan como indicadores de salud del negocio
- Cadencia de revisión de OKRs de CS: qué revisar semanalmente, mensualmente, trimestralmente
- Cómo alinear los OKRs de CS con los de ventas y producto para que los tres equipos remen en la misma dirección
- Cómo los OKRs de CS deben traducirse en objetivos individuales del CSM

Termina con un set de OKRs para el equipo de CS con cuatro objetivos (retención, expansión, adoption y satisfacción) y tres resultados clave cada uno, con los umbrales de éxito y riesgo claramente definidos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Definir OKRs de Customer Success que vayan más allá del NPS y conecten con el crecimiento del negocio',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Planificación anual del freelance: objetivos, proyectos y revenue target',
                'description'      => 'Aprende a planificar el año como freelance: define tus objetivos de ingresos, capacidad de trabajo, mezcla de clientes y proyectos, y construye un plan de negocio personal realista.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un mentor de negocio para freelancers y trabajadores independientes con experiencia ayudando a profesionales a construir negocios freelance sostenibles y rentables. Quiero hacer la planificación anual de mi negocio freelance de forma seria y estructurada, no solo poner un número de ingresos en un papel.

Para entender mi situación, hazme estas preguntas:
- ¿En qué área trabajo como freelance y cuántos años llevo haciéndolo?
- ¿Cuáles fueron mis ingresos el año pasado y de cuántos clientes vinieron?
- ¿Cuántas horas a la semana dedico al trabajo de cliente vs al desarrollo de mi propio negocio?
- ¿Cuál es mi objetivo de ingresos para este año y por qué ese número?
- ¿Qué es lo que más me ha limitado para crecer hasta ahora?

Con esas respuestas, guíame por:

BLOQUE 1: Auditoría del año anterior
No puedes planificar el futuro sin entender el pasado:
- Cómo analizar los ingresos del año pasado: por cliente, por tipo de proyecto, por mes
- Cómo calcular mi tarifa efectiva real (ingresos totales dividido entre horas totales trabajadas, incluyendo las no facturadas)
- Qué clientes generaron más valor (ingresos + aprendizaje + referidos) y cuáles más desgaste
- Qué proyectos fueron los más satisfactorios y por qué
- Las decisiones que tomé el año pasado que más impacto tuvieron (positivo o negativo)

BLOQUE 2: Definir los objetivos de negocio para el año
El objetivo de ingresos es solo una parte del plan:
- Cómo definir objetivos de ingresos, de tipo de trabajo, de clientes y de desarrollo personal como un sistema coherente
- Cómo calcular el revenue target necesario para cubrir mis gastos, impuestos, ahorro e inversión profesional
- La diferencia entre ingresos brutos y netos: qué tengo que ganar para llevarme lo que necesito a casa
- Cómo definir el tipo de clientes y proyectos que quiero tener (no solo cuánto quiero ganar)
- Cómo usar los OKRs como framework de planificación para el negocio freelance

BLOQUE 3: Capacidad y modelo de trabajo
Un freelance no puede vender más horas de las que tiene:
- Cómo calcular mi capacidad real de horas facturables al año (descontando vacaciones, enfermedad, formación, administración)
- La regla de las horas no facturables: cuánto tiempo se va en ventas, marketing, administración
- Cómo decidir el mix entre clientes recurrentes (predecibles) y proyectos puntuales (más rentables pero inciertos)
- Cuándo subir tarifas y cómo hacerlo sin perder clientes
- Cuándo tiene sentido rechazar proyectos y cómo hacerlo con elegancia

BLOQUE 4: Plan de adquisición de clientes
Los ingresos no vienen solos; hay que planificar cómo conseguirlos:
- Cómo calcular cuántos clientes nuevos necesito para alcanzar mi objetivo de ingresos
- Los canales de adquisición más eficientes para mi tipo de trabajo freelance
- Cómo construir un pipeline de proyectos para evitar el ciclo de "trabajo mucho, no tengo tiempo de vender; dejo de trabajar, no tengo proyectos"
- Estrategia de referidos: cómo hacer que mis clientes actuales me recomienden de forma sistemática
- Plan de visibilidad: qué necesito publicar, compartir o hacer para ser visible en mi nicho

BLOQUE 5: Seguimiento y revisión del plan anual
Un plan sin revisión es un sueño:
- Cómo hacer el cierre mensual de mi negocio freelance (ingresos, horas, pipeline, gastos)
- Señales de alerta que indican que el año no va bien y hay que ajustar el plan
- Revisión trimestral: qué revisar, qué ajustar y cómo tomar decisiones de pivote
- Cómo manejar los meses malos sin entrar en pánico ni tomar decisiones apresuradas
- El sistema mínimo de gestión financiera que necesita un freelance serio

Termina con una plantilla de plan anual del freelance con objetivo de ingresos, capacidad disponible, mezcla de clientes objetivo, acciones de adquisición clave y calendario de revisión mensual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 50,
                'use_case'         => 'Planificar el año como freelance con objetivos de ingresos, capacidad de trabajo y estrategia de clientes',
                'vote_score'       => 43,
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
