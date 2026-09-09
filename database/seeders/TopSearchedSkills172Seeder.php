<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills172Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing de equipos distribuidos',
                'description'       => 'Coordina campañas y sprints de marketing en equipos totalmente remotos: los procesos, las herramientas y la cultura asíncrona que permite trabajar en múltiples zonas horarias sin perder cohesión.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en marketing operacional con experiencia liderando equipos distribuidos en múltiples zonas horarias. Voy a compartirte información sobre mi equipo de marketing y necesito que me ayudes a diseñar un sistema de trabajo asíncrono que mantenga la cohesión y la calidad de las campañas.

**Contexto de mi equipo:**
- Número de personas en el equipo: [indica cuántas personas]
- Zonas horarias cubiertas: [lista las zonas horarias]
- Herramientas actuales que usamos: [Slack, Notion, Asana, otras]
- Tipo de campañas que gestionamos: [email, social, paid, contenidos, etc.]
- Cadencia de lanzamientos: [semanal, quincenal, mensual]
- Mayor problema actual: [reuniones excesivas / falta de alineación / briefs poco claros / otro]

**Lo que necesito que me diseñes:**

1. **Estructura de reuniones asíncronas vs. síncronas**
   - Qué decisiones requieren reunión y cuáles se resuelven con un documento
   - Cadencia de sync semanal mínima viable para el equipo
   - Cómo hacer los stand-ups asíncronos sin que sean un teatro

2. **Sistema de briefs y documentación de campaña**
   - Plantilla de brief de campaña que funciona en remoto (sin reuniones de alineación interminables)
   - Cómo estructurar el documento de decisiones para que todo el mundo entienda el "por qué"
   - Proceso de revisión y aprobación de assets entre personas en distintos husos horarios

3. **Sprints de marketing**
   - Cómo adaptar los sprints ágiles al trabajo de marketing
   - Planning, retrospectiva y revisión en remoto: formato y duración óptimos
   - Cómo gestionar las urgencias y cambios de última hora sin romper el sprint

4. **Cultura y cohesión a distancia**
   - Rituales de equipo que crean sentido de pertenencia sin ser forzados
   - Cómo mantener la visibilidad del trabajo de cada persona sin microgestión
   - Señales de desenganche temprano y cómo actuar antes de perder a alguien

5. **Stack tecnológico recomendado**
   - Las herramientas que realmente necesita un equipo de marketing distribuido (sin sobrecargar)
   - Cómo evitar el problema de "demasiados canales" y la fatiga de herramientas
   - Integración entre las herramientas para que la información fluya sin duplicidades

6. **Métricas de equipo distribuido**
   - Cómo medir la productividad sin presentismo digital
   - Indicadores de salud del equipo que se pueden rastrear de forma asíncrona
   - Dashboard de equipo semanal: qué mostrar y qué no mostrar

Para cada sección, dame ejemplos concretos, plantillas reutilizables y, cuando sea posible, el texto exacto que usaría en un documento o mensaje. El objetivo es que pueda implementar este sistema la semana que viene sin necesitar contratar a un consultor de operaciones.

Termina con un plan de implementación en tres fases (semanas 1-2, semanas 3-4, mes 2) para que la transición sea gradual y no rompa los proyectos en curso.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar un sistema operativo de marketing para equipos remotos distribuidos en múltiples zonas horarias.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Trabajo remoto para developers',
                'description'       => 'Optimiza tu setup de trabajo remoto como developer: el entorno técnico, la comunicación asíncrona, la documentación que sustituye las conversaciones de pasillo y la cultura de trabajo que valoran las empresas remotas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un senior developer con 8 años trabajando en remoto para empresas de producto americanas y europeas. Necesito que me ayudes a construir mi setup óptimo de trabajo remoto y a entender qué valoran las empresas de tecnología cuando contratan perfiles remotos.

**Mi situación actual:**
- Años de experiencia como developer: [indica cuántos]
- Stack tecnológico principal: [lenguajes, frameworks, herramientas]
- Modelo de trabajo actual: [100% remoto / híbrido / oficina, quiero pasar a remoto]
- Zona horaria: [tu zona horaria]
- Tipo de empresa en la que quiero trabajar: [startup / scale-up / empresa grande / cualquiera]
- Mayor preocupación sobre el remoto: [aislamiento / visibilidad / productividad / otro]

**Necesito tu ayuda con:**

1. **Setup técnico que profesionaliza el trabajo remoto**
   - Hardware mínimo y recomendado (micro, cámara, auriculares, pantallas)
   - Conexión a internet: requisitos reales y cómo gestionar cortes
   - Entorno de desarrollo local vs. cloud dev environments (Gitpod, GitHub Codespaces, Coder)
   - Seguridad: VPN, gestores de contraseñas, configuración del home office para datos sensibles

2. **Comunicación asíncrona como developer**
   - Cómo escribir mensajes de Slack que no generan hilos de 40 respuestas
   - El arte del PR description: cómo revisar código sin llamadas de 45 minutos
   - Cómo pedir ayuda técnica en remoto sin parecer que molestas
   - Gestión de las notificaciones para entrar en estado de flow sin desaparecer del equipo

3. **Documentación como sustituto de las conversaciones de pasillo**
   - ADRs (Architecture Decision Records): qué son y cómo escribirlos
   - Runbooks y playbooks: cuándo documentar y cuándo no vale la pena
   - Cómo documentar mientras programas sin que sea una carga
   - El nivel de documentación que valoran las empresas remotas first

4. **Visibilidad sin presentismo digital**
   - Cómo hacer que tu trabajo sea visible cuando no estás en la misma oficina
   - Weekly updates que el equipo realmente lee
   - Cómo demostrar impacto más allá de los tickets cerrados
   - Construir reputación técnica dentro de un equipo distribuido

5. **Autonomía y gestión del tiempo**
   - Cómo estructurar el día para maximizar el tiempo de deep work
   - Gestión de los bloqueantes sin depender de que alguien responda al instante
   - Cuándo escalar y cuándo resolver solo
   - Cómo evitar el burnout cuando la oficina está en casa

6. **Lo que buscan las empresas remotas en un developer**
   - Las soft skills que diferencian a un developer remoto excelente de uno mediocre
   - Cómo demostrar en la entrevista que sabes trabajar en remoto
   - Red flags que eliminan candidatos remotos en los primeros 30 días
   - Las preguntas que debes hacer tú para evaluar si la empresa tiene cultura remoto real

Dame ejemplos concretos, herramientas con nombres reales y, cuando sea posible, fragmentos de texto que pueda usar directamente (un mensaje de Slack, un PR description, un weekly update). Quiero salir de esta conversación con algo que pueda implementar esta semana.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Construir el setup técnico y cultural para trabajar en remoto como developer de forma profesional.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño colaborativo en remoto',
                'description'       => 'Colabora con equipos de diseño distribuidos: las herramientas, los workshops virtuales y los procesos de feedback asíncrono que mantienen la calidad del trabajo de diseño cuando el equipo no comparte oficina.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un design director con experiencia liderando equipos de diseño completamente distribuidos para empresas de producto digital. Necesito que me ayudes a construir un sistema de colaboración en remoto que mantenga la calidad del trabajo de diseño y la energía creativa del equipo.

**Mi contexto:**
- Rol en el equipo: [diseñador individual / design lead / UX manager]
- Tamaño del equipo de diseño: [número de personas]
- Tipo de proyectos: [producto digital / branding / UX research / todos]
- Herramientas de diseño que usamos: [Figma, Sketch, Adobe XD, otras]
- Principal dolor actual: [feedback de mala calidad / falta de alineación con producto / workshops caóticos / otro]
- Stakeholders con los que colaboro: [PM, devs, marketing, clientes directos]

**Diseña para mí:**

1. **Setup de herramientas para diseño colaborativo en remoto**
   - La combinación de herramientas que realmente necesita un equipo de diseño distribuido
   - Cómo organizar los archivos de Figma para que cualquiera encuentre lo que busca
   - Herramientas de whiteboarding virtual (FigJam, Miro, Mural) y cuándo usar cada una
   - Grabación asíncrona de decisiones de diseño con Loom u otras herramientas

2. **Design critiques en remoto**
   - Cómo estructurar una critique session virtual que sea útil y no un suplicio
   - El protocolo de feedback escrito que funciona en Figma sin conversación en tiempo real
   - Cómo dar y recibir feedback duro en remoto sin que se pierda el contexto ni la relación
   - Cuándo hacer la critique síncrona y cuándo es mejor asíncrona

3. **Workshops de diseño virtuales**
   - Cómo facilitar un design sprint o un workshop de discovery en remoto
   - Las dinámicas que funcionan en virtual (y las que son un fracaso total)
   - Cómo mantener la energía y la participación durante 3-4 horas online
   - El setup técnico del facilitador para que todo funcione sin interrupciones

4. **Colaboración con producto y desarrollo**
   - Handoff de diseño en remoto: qué documentar para que los devs no tengan que preguntar
   - Cómo gestionar las revisiones de implementación sin estar físicamente presente
   - El proceso de design QA cuando no puedes mirar la pantalla del developer
   - Alineación con PMs cuando no hay conversaciones de pasillo

5. **Proceso de feedback de stakeholders y clientes**
   - Cómo presentar diseños en remoto y conseguir feedback de calidad (no solo "me gusta")
   - Protocolos de revisión asíncrona que respetan el tiempo de todos
   - Cómo gestionar el feedback contradictorio de múltiples stakeholders en remoto
   - Cuándo una reunión síncrona es necesaria y cuándo un vídeo de Loom es suficiente

6. **Cultura creativa en un equipo distribuido**
   - Cómo mantener la energía creativa y la inspiración cuando no hay oficina
   - Rituales de equipo para diseñadores distribuidos (show & tell, design challenges, etc.)
   - Onboarding de un nuevo diseñador en un equipo remoto
   - Cómo evitar que el trabajo en remoto aísle a los perfiles más junior del equipo

Para cada punto, dame ejemplos concretos, plantillas de documentos y el texto de los mensajes o facilitación que usaría en la práctica. Quiero poder usar esto directamente en mi equipo la semana que viene.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir el sistema de colaboración y procesos de feedback para equipos de diseño distribuidos.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas remotas (inside sales)',
                'description'       => 'El proceso de ventas completamente remoto: las videoconferencias que funcionan, las demos online que enganchan y las técnicas de closing cuando no puedes leer el lenguaje corporal en persona.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de inside sales con experiencia construyendo equipos de ventas completamente remotas para empresas B2B SaaS. Necesito que me ayudes a dominar el proceso de ventas en remoto: desde la prospección hasta el cierre, sin reuniones presenciales.

**Mi contexto de ventas:**
- Tipo de producto/servicio que vendo: [describe brevemente]
- Ticket medio de la operación: [precio aproximado]
- Ciclo de ventas habitual: [días/semanas/meses]
- Perfil del comprador: [cargo, tipo de empresa, sector]
- Número de stakeholders involucrados en la decisión: [uno / comité de compra]
- Principal objeción que enfrento: [precio / tiempo / competencia / otro]
- Herramientas de ventas que uso: [CRM, email, LinkedIn, etc.]

**Lo que necesito dominar:**

1. **Videoconferencias de ventas que funcionan**
   - Setup técnico de la llamada de ventas: cámara, luz, fondo, micrófono
   - Cómo hacer una apertura de llamada en remoto que rompa el hielo sin ser forzado
   - La estructura de la discovery call en remoto (tiempos, preguntas, flujo)
   - Cómo leer señales de interés y resistencia sin el lenguaje corporal presencial

2. **Demos online que enganchan**
   - Estructura de la demo remota que mantiene la atención (sin el efecto pantalla compartida aburrida)
   - Cómo personalizar la demo en tiempo real según las respuestas del prospecto
   - Técnicas para hacer la demo interactiva aunque sea remota
   - Cómo gestionar los problemas técnicos durante la demo sin perder credibilidad

3. **El proceso de propuesta en remoto**
   - Cómo presentar la propuesta económica sin estar en la misma sala
   - El documento de propuesta que el comprador comparte internamente y te representa bien
   - Seguimiento de la propuesta sin ser pesado: cadencia, mensajes y canales
   - Cómo mantener el momentum cuando el proceso de decisión se alarga

4. **Técnicas de closing en remoto**
   - Cómo crear urgencia sin manipular cuando no hay presión presencial
   - El cierre por email vs. el cierre por videoconferencia: cuándo usar cada uno
   - Cómo gestionar el silencio del prospecto después de enviar la propuesta
   - Las objeciones típicas del remoto ("tengo que consultarlo internamente") y cómo manejarlas

5. **Construcción de relación sin presencialidad**
   - Cómo construir confianza y rapport en un proceso 100% digital
   - Personalización de la comunicación en cada touchpoint del proceso
   - Cuándo usar el teléfono en lugar del email o la videoconferencia
   - Regalos y detalles en ventas remotas: ¿siguen funcionando y cómo?

6. **Gestión del pipeline en remoto**
   - Cómo hacer un forecast fiable cuando todas las señales son digitales
   - Las métricas que realmente importan en inside sales (ratio de conversión por etapa, velocidad del pipeline)
   - Cómo priorizar el tiempo cuando tienes 50 oportunidades activas a la vez
   - Los CRM que mejor se adaptan al proceso de inside sales y cómo usarlos bien

Dame scripts de apertura, preguntas de discovery, mensajes de seguimiento y respuestas a las objeciones más comunes. Quiero salir de esta conversación con un playbook de inside sales que pueda usar mañana.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Construir un playbook completo de ventas B2B remotas desde la prospección hasta el cierre.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión de producto en equipos remotos',
                'description'       => 'Hace producto con equipos distribuidos: las ceremonias ágiles en remoto, la documentación como forma de comunicación primaria y las decisiones que se toman mejor de forma asíncrona.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP de Producto con experiencia construyendo y escalando productos digitales con equipos completamente distribuidos. Necesito que me ayudes a diseñar el sistema operativo de producto para un equipo remoto: desde las ceremonias ágiles hasta el proceso de toma de decisiones asíncrono.

**Mi contexto:**
- Tamaño del equipo de producto: [PM, diseño, desarrollo, QA]
- Metodología actual: [Scrum, Kanban, Shape Up, híbrido]
- Zonas horarias del equipo: [lista las principales]
- Tipo de producto: [B2B SaaS / B2C / plataforma / app móvil]
- Herramienta de gestión: [Jira, Linear, Notion, Productboard, otra]
- Mayor problema de coordinación: [alineación con negocio / comunicación diseño-dev / priorización / otro]

**Necesito tu ayuda para diseñar:**

1. **Ceremonias ágiles optimizadas para remoto**
   - Planning en remoto: duración, formato y cómo evitar que dure 3 horas sin decidir nada
   - Daily asíncrono vs. síncrono: cuándo usar cada uno y el formato exacto
   - Sprint review en remoto: cómo hacer que los stakeholders realmente participen
   - Retrospectiva virtual: dinámicas que funcionan y las que son un fracaso absoluto

2. **Documentación como comunicación primaria**
   - El PRD (Product Requirements Document) que funciona en remoto: qué incluir y qué no
   - Cómo tomar decisiones de producto de forma asíncrona con RFCs o design docs
   - El nivel de documentación de cada iniciativa: cuándo un ticket es suficiente y cuándo necesitas un doc
   - Cómo mantener la documentación viva (que no se convierta en un cementerio de docs desactualizados)

3. **Priorización y roadmap en remoto**
   - Cómo hacer sesiones de priorización asíncronas con múltiples stakeholders
   - El formato de roadmap que comunica sin necesitar una presentación de 1 hora
   - Cómo gestionar las peticiones de los stakeholders que llegan por múltiples canales
   - Discovery en remoto: entrevistas de usuario, encuestas y análisis sin salir de casa

4. **Decisiones de producto asíncronas**
   - El proceso de RFC (Request for Comments) para decisiones grandes
   - Cómo documentar el contexto de una decisión para que el equipo que llega después lo entienda
   - Cuándo es necesaria una reunión síncrona vs. cuándo un doc de decisión es suficiente
   - Cómo evitar que las decisiones queden bloqueadas porque alguien no ha respondido

5. **Coordinación diseño-desarrollo en remoto**
   - Cómo hacer el handoff de diseño sin reuniones de alineación interminables
   - El proceso de clarificación de dudas técnicas que no genera hilos de Slack infinitos
   - Cómo hacer la revisión de implementación de forma asíncrona
   - Planning de capacidad cuando el equipo está distribuido en varias zonas horarias

6. **Cultura de producto distribuida**
   - Cómo mantener el equipo alineado con la visión cuando no hay pasillo
   - Los rituales de equipo de producto que funcionan en remoto
   - Onboarding de un nuevo PM en un equipo distribuido
   - Cómo medir la salud del equipo de producto en remoto

Dame plantillas concretas (PRD, RFC, retrospectiva asíncrona), el texto exacto de los mensajes y rituales, y un calendario típico de un sprint en remoto con los tiempos y formatos de cada ceremonia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el sistema operativo de producto para equipos distribuidos con ceremonias ágiles y decisiones asíncronas.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Remote work policy',
                'description'       => 'Diseña la política de trabajo remoto de tu empresa: elegibilidad, herramientas, gastos, seguridad y los estándares de rendimiento que aplican cuando el empleado trabaja desde casa o desde cualquier lugar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de People & Culture con experiencia diseñando políticas de trabajo remoto para empresas de entre 50 y 500 empleados en España. Necesito que me ayudes a redactar una política de trabajo remoto completa que cumpla con la normativa española y refleje la cultura de nuestra empresa.

**Contexto de nuestra empresa:**
- Sector: [tecnología / consultoría / retail / servicios / otro]
- Número de empleados: [indica cuántos]
- Modelo actual: [presencial obligatorio / híbrido informal / híbrido estructurado / sin política clara]
- Modelo objetivo: [híbrido con X días en oficina / remote first / flexible total]
- Países donde tenemos empleados: [España / otros países, indica cuáles]
- Convenio colectivo aplicable: [si lo sabes]
- Principal preocupación del liderazgo: [productividad / cohesión / seguridad / cumplimiento legal]

**Redacta la política de trabajo remoto con estas secciones:**

1. **Alcance y elegibilidad**
   - Qué puestos pueden acogerse al trabajo remoto y cuáles no (con criterios objetivos)
   - Período mínimo de antigüedad antes de poder solicitar el trabajo remoto
   - Proceso de solicitud y aprobación (formulario, plazos, quién aprueba)
   - Condiciones que pueden revocar el acceso al trabajo remoto

2. **Modalidades y días de presencia**
   - Definición clara de cada modalidad (híbrido, remote first, full remote)
   - Días mínimos de presencia en oficina y cómo se organizan
   - Días de presencia obligatoria (kick-offs, all-hands, sprints de equipo)
   - Flexibilidad horaria dentro del modelo remoto

3. **Lugar de trabajo y condiciones del domicilio**
   - Requisitos del espacio de trabajo en casa (escritorio, silla, internet, privacidad)
   - Política de trabajo desde el extranjero (si aplica, duración máxima, requisitos)
   - Política de co-working spaces y oficinas flexibles
   - Condiciones para el trabajo desde un tercer lugar

4. **Herramientas, equipamiento y gastos**
   - Equipamiento que provee la empresa (portátil, periféricos, pantalla)
   - Compensación de gastos: internet, electricidad, mobiliario (importes y proceso)
   - Herramientas de comunicación y colaboración corporativas
   - Política de seguridad: VPN, cifrado, gestión de dispositivos

5. **Prevención de riesgos laborales**
   - Obligaciones de la empresa en materia de PRL para el trabajo remoto
   - Evaluación de riesgos del puesto de teletrabajo
   - Accidentes de trabajo en el domicilio: qué cuenta y qué no
   - Desconexión digital: tiempos de respuesta esperados fuera del horario

6. **Rendimiento y evaluación**
   - Cómo se mide el rendimiento en remoto (por objetivos, no por presencia)
   - Estándares de disponibilidad y comunicación
   - Proceso de revisión y feedback en un modelo remoto
   - Qué ocurre si el rendimiento no se mantiene en remoto

Redacta el texto de la política en un lenguaje claro, profesional y legalmente seguro según la Ley 10/2021 de trabajo a distancia en España. Incluye al final un FAQ con las 10 preguntas más frecuentes de los empleados sobre la política.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Redactar una política de trabajo remoto completa y legalmente segura según la normativa española.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Finanzas del trabajo remoto',
                'description'       => 'Las implicaciones fiscales y laborales del trabajo remoto internacional: los nómadas digitales, los empleados que trabajan desde otro país y el compliance que la empresa debe gestionar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un asesor fiscal y laboral especializado en movilidad internacional y trabajo remoto transfronterizo. Necesito entender las implicaciones fiscales y legales del trabajo remoto cuando el empleado trabaja desde un país diferente al de la empresa.

**Mi situación:**
Soy [empleado / autónomo / empresa que tiene empleados remotos]:
- País de residencia del trabajador: [indica el país]
- País donde está registrada la empresa: [indica el país]
- Tiempo que lleva o planea llevar trabajando desde el extranjero: [semanas / meses / de forma permanente]
- Tipo de contrato: [empleado por cuenta ajena / autónomo / contractor]
- Sector de actividad: [tecnología / diseño / consultoría / otro]
- Ingresos anuales aproximados: [rango]

**Necesito que me expliques:**

1. **Residencia fiscal y el test de los 183 días**
   - Cómo se determina la residencia fiscal cuando se trabaja en remoto desde distintos países
   - El criterio de los 183 días: cómo se cuenta y qué pasa si se supera
   - Doble residencia fiscal: qué es y cómo se resuelve con los convenios de doble imposición
   - Cómo acreditar la residencia fiscal ante la Agencia Tributaria española

2. **Obligaciones fiscales del trabajador nómada digital**
   - Dónde se pagan los impuestos sobre el trabajo cuando la empresa está en un país y el trabajador en otro
   - El régimen de nómadas digitales en España (visado y condiciones)
   - Territorios con ventajas fiscales para nómadas digitales (Portugal, Canarias, Estonia, otros)
   - Declaraciones que hay que presentar en cada país implicado

3. **Cotización a la Seguridad Social en remoto internacional**
   - En qué país se cotiza cuando se trabaja en remoto para una empresa extranjera
   - Los convenios de Seguridad Social entre países de la UE (Reglamento 883/2004)
   - El formulario A1 y por qué es crítico para el trabajador transfronterizo
   - Qué pasa con la cobertura de salud y el paro cuando se trabaja en remoto internacional

4. **Riesgos de establecimiento permanente para la empresa**
   - Cuándo la presencia de un empleado remoto en otro país crea un establecimiento permanente para la empresa
   - Qué umbrales de tiempo y actividad disparan este riesgo
   - Cómo estructurar el trabajo remoto internacional para minimizar el riesgo de EP
   - Las jurisdicciones que tienen normas más estrictas sobre establecimiento permanente

5. **Opciones de estructura para el trabajo remoto internacional**
   - Trabajar como empleado (Employer of Record): qué es y cuándo usar esta estructura
   - Trabajar como autónomo o contractor: ventajas, riesgos y el riesgo de recaracterización
   - Crear una empresa local: cuándo tiene sentido y costes aproximados
   - Las plataformas de Global Payroll y EOR más usadas (Remote, Deel, Papaya Global)

6. **Checklist de compliance para la empresa**
   - Qué debe verificar una empresa cuando permite que sus empleados trabajen desde el extranjero
   - Cláusulas que debe incluir el contrato de trabajo para cubrir el trabajo remoto internacional
   - Seguros y cobertura médica para empleados en el extranjero
   - Cómo monitorizar el cumplimiento sin invadir la privacidad del empleado

Dame ejemplos numéricos cuando sea posible, señala las zonas grises donde la normativa no es clara y dime qué profesionales (gestor, abogado laboral, asesor fiscal internacional) necesito consultar para cada situación.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Entender las implicaciones fiscales y laborales del trabajo remoto internacional para empleados y empresas.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Marco legal del trabajo remoto',
                'description'       => 'El contrato de trabajo en remoto: registro de la jornada, prevención de riesgos en el domicilio, compensación de gastos y los aspectos legales del teletrabajo que la empresa debe cumplir.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado laboralista especializado en derecho del trabajo español con experiencia asesorando empresas en la implementación de la Ley 10/2021 de trabajo a distancia. Necesito que me expliques el marco legal completo del teletrabajo en España y qué debe hacer una empresa para cumplir con la normativa.

**Contexto:**
- Soy [director de RRHH / gerente / responsable legal] de una empresa con [número] empleados
- Modelo de trabajo que queremos implementar: [híbrido / remote first / teletrabajo puntual]
- Porcentaje de jornada que el empleado trabajaría en remoto: [%]
- Tenemos empleados en: [comunidades autónomas / países]
- Convenio colectivo aplicable: [indica cuál, si lo sabes]
- Situación actual: [no tenemos nada regulado / tenemos un acuerdo informal / queremos actualizar lo que tenemos]

**Explícame en detalle:**

1. **Umbral legal del teletrabajo en España**
   - Cuándo aplica la Ley 10/2021 (el umbral del 30% de jornada en remoto en 3 meses)
   - Qué ocurre por debajo de ese umbral y si hay que documentar algo igualmente
   - Las diferencias entre teletrabajo, trabajo a distancia y trabajo en casa que hace la ley
   - Cómo se aplica la ley cuando el empleado trabaja desde el extranjero

2. **El acuerdo de trabajo a distancia**
   - Contenido mínimo obligatorio del acuerdo (art. 7 Ley 10/2021)
   - Forma y plazo para firmarlo cuando se inicia el teletrabajo
   - Reversibilidad: cuándo puede el trabajador volver a la presencialidad y cuándo la empresa puede exigirla
   - Qué pasa si no se firma el acuerdo: consecuencias para la empresa

3. **Compensación y abono de gastos**
   - Qué gastos está obligada a compensar la empresa (internet, electricidad, material)
   - Cómo se calcula y documenta la compensación
   - Tratamiento fiscal de la compensación de gastos: ¿es retribución en especie?
   - Qué dice el convenio colectivo sobre la compensación y cómo prevalece sobre la ley

4. **Registro de jornada en el trabajo remoto**
   - Obligación de registro de jornada y cómo cumplirla en remoto
   - Los sistemas de registro válidos (app, declaración responsable, fichaje digital)
   - Horas extraordinarias en el teletrabajo: cómo se identifican y compensan
   - Derecho a la desconexión digital: qué debe garantizar la empresa

5. **Prevención de riesgos laborales en el domicilio**
   - Obligaciones de la empresa respecto a la PRL en el puesto de teletrabajo
   - La evaluación de riesgos del puesto de trabajo en el domicilio: cómo se hace
   - Accidente in itinere y accidente en el domicilio: qué cuenta como accidente de trabajo
   - Qué ocurre si el empleado trabaja en malas condiciones ergonómicas en casa

6. **Protección de datos y seguridad en el teletrabajo**
   - Obligaciones del empleador respecto a la protección de datos cuando el empleado trabaja en remoto
   - Medidas técnicas mínimas (VPN, cifrado, política de pantalla limpia)
   - El registro de actividad en los dispositivos corporativos: hasta dónde puede llegar la empresa
   - Qué debe incluir la política de seguridad del teletrabajo

Incluye los artículos de la Ley 10/2021 relevantes para cada punto, señala dónde existe jurisprudencia relevante y dame una checklist de cumplimiento que pueda usar la empresa para auditarse.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Entender y cumplir con el marco legal del teletrabajo en España según la Ley 10/2021.',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS team remoto de alto rendimiento',
                'description'       => 'Construye y gestiona un equipo de customer success totalmente remoto: la cultura, los rituales y los sistemas que mantienen la calidad del servicio cuando el equipo está distribuido.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia construyendo equipos de CS remotos de alto rendimiento para empresas SaaS B2B. Necesito que me ayudes a diseñar el sistema operativo de un equipo de customer success totalmente distribuido.

**Mi contexto:**
- Tamaño actual del equipo de CS: [número de CSMs]
- Segmento de clientes que atendemos: [Enterprise / Mid-market / SMB / mezcla]
- ARR que gestiona el equipo: [rango aproximado]
- Ubicación del equipo: [países / zonas horarias]
- Herramientas de CS que usamos: [Gainsight, ChurnZero, HubSpot, Salesforce, otras]
- Mayor problema actual: [churn / onboarding lento / calidad inconsistente / falta de visibilidad / otro]
- Modelo de cobertura: [low touch / mid touch / high touch / mezcla]

**Diseña para mí:**

1. **Estructura y onboarding del equipo remoto**
   - Cómo estructurar el equipo de CS en remoto (roles, responsabilidades, ratios de clientes por CSM)
   - Onboarding de un nuevo CSM en remoto: los 30-60-90 días
   - Cómo transferir el conocimiento de cuentas cuando alguien entra o sale del equipo en remoto
   - El buddy system en CS: cómo funciona en un equipo distribuido

2. **Rituales de equipo que funcionan en remoto**
   - Daily o weekly check-in del equipo: formato, duración y quién lo facilita
   - Account reviews en remoto: cómo hacer que sean útiles y no un reporting aburrido
   - Peer learning: cómo compartir buenas prácticas entre CSMs que no se ven físicamente
   - Celebración de victorias en remoto: cómo mantener la motivación sin oficina

3. **Calidad y consistencia del servicio en remoto**
   - Cómo estandarizar el proceso de customer success cuando el equipo está distribuido
   - Playbooks de CS: qué deben incluir para funcionar sin supervisión directa
   - QA de las interacciones con el cliente en remoto: cómo revisar sin microgestionar
   - Cómo asegurar que todos los clientes reciben el mismo nivel de servicio independientemente del CSM

4. **Visibilidad de la salud del cliente en remoto**
   - El health score que funciona para un equipo remoto: métricas y señales
   - Cómo hacer el seguimiento de los riesgos de churn cuando el equipo está distribuido
   - Las reuniones QBR en remoto: formato, preparación y cómo hacerlas valiosas para el cliente
   - Escalación de riesgos cuando el CSM está en otra zona horaria que el manager

5. **Colaboración con otros equipos en remoto**
   - Cómo trabajar con producto (feedback de clientes) cuando todo es asíncrono
   - El proceso de escalación técnica con el equipo de soporte en remoto
   - Handoff de ventas a CS en remoto: qué información necesita el CSM antes de empezar
   - Colaboración con marketing para los casos de éxito y referencias en remoto

6. **Métricas y rendimiento del equipo remoto**
   - Las KPIs de CS que se pueden medir objetivamente en remoto (NRR, NPS, CSAT, TTV, etc.)
   - Cómo hacer las evaluaciones de rendimiento en remoto de forma justa
   - El dashboard de equipo que da visibilidad sin crear presentismo digital
   - Cómo identificar al CSM con burnout antes de que se vaya en un equipo remoto

Dame plantillas concretas (playbook de onboarding, health score template, formato de QBR en remoto) y los rituales semanales y mensuales que implementaría desde el primer día.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir el sistema operativo de un equipo de customer success totalmente remoto y de alto rendimiento.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Digital nomad y freelance en movimiento',
                'description'       => 'Trabaja desde cualquier lugar del mundo: los aspectos prácticos de ser un nómada digital (visas, impuestos, conectividad) y los servicios que funcionan mejor en este modelo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un nómada digital con 6 años de experiencia trabajando como freelance desde distintos países de Europa, Latinoamérica y el Sudeste Asiático. Necesito que me ayudes a diseñar mi setup de nómada digital: las decisiones legales, fiscales y prácticas que debo tomar para trabajar desde cualquier lugar de forma sostenible.

**Mi situación:**
- Profesión: [diseñador / developer / consultor / copywriter / otra]
- Ingresos mensuales aproximados: [rango]
- País de origen y residencia actual: [indica el país]
- Situación legal actual: [autónomo en España / empleado / sin estructura / otro]
- Experiencia como nómada: [cero / algo de experiencia / quiero optimizar lo que ya tengo]
- Destinos objetivo: [Europa / Latinoamérica / Asia / global]
- Duración planificada: [meses / años / indefinida]

**Necesito que me expliques:**

1. **La estructura legal y fiscal del nómada digital**
   - Dónde debo estar dado de alta como autónomo o empresa cuando trabajo en remoto
   - El riesgo de la doble tributación y cómo evitarlo
   - Los visados de nómada digital que existen: España, Portugal, Estonia, Georgia, Costa Rica, México y otros
   - Cuándo vale la pena cambiar la residencia fiscal y cuándo no

2. **Gestión de las finanzas en movimiento**
   - Cuentas bancarias que funcionan para el nómada digital (Wise, Revolut, N26)
   - Cómo cobrar de clientes internacionales sin perder dinero en comisiones
   - Gestión de múltiples divisas cuando trabajas con clientes de distintos países
   - Ahorro e inversión cuando los ingresos son variables e internacionales

3. **Conectividad y trabajo desde cualquier lugar**
   - La estrategia de conectividad que funciona: eSIM, router de viaje, coworking
   - Las eSIM y SIMs físicas más fiables para cada región del mundo
   - Cómo gestionar una videollamada importante cuando estás viajando
   - Herramientas para encontrar los mejores coworking y espacios de trabajo en cada ciudad

4. **Seguros y cobertura cuando eres nómada**
   - Seguro médico internacional para nómadas digitales: opciones y cobertura
   - Seguro de equipamiento: portátil, cámara, periféricos en movimiento
   - Seguro de responsabilidad civil profesional para freelances internacionales
   - La Seguridad Social española si eres autónomo: cómo gestionarla fuera de España

5. **Productividad y gestión de clientes en movimiento**
   - Cómo mantener la productividad cuando el entorno cambia constantemente
   - Comunicación con clientes cuando estás en otra zona horaria
   - Gestión de los imprevistos del viaje sin afectar los proyectos
   - Cómo explicar a tus clientes que eres nómada sin que afecte a su confianza en ti

6. **Comunidad y vida social como nómada digital**
   - Cómo evitar el aislamiento social que provoca el nomadismo
   - Las comunidades de nómadas digitales que funcionan (Nomad List, Remote Year, comunidades locales)
   - Cómo construir relaciones profesionales duraderas cuando nunca estás en el mismo sitio
   - Los mejores destinos para nómadas digitales en 2024 según coste de vida, conectividad y comunidad

Dame una hoja de ruta de los primeros 3 meses de vida como nómada digital, con las decisiones legales y prácticas en orden cronológico, los costes aproximados de la transición y los errores más comunes que debes evitar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar el setup legal, fiscal y práctico para trabajar como freelance nómada digital de forma sostenible.',
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
