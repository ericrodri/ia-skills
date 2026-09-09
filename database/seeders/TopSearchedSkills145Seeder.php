<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills145Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing para edtech',
                'description'      => 'Domina las particularidades del marketing educativo: el ciclo de decisión largo, los múltiples stakeholders y los canales que funcionan en cada segmento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing para empresas de educación tecnológica (edtech) con más de diez años de experiencia ayudando a startups y scale-ups educativas a crecer en España y Latinoamérica. Voy a describirte mi empresa edtech y quiero que me diseñes una estrategia de marketing completa y accionable.

Mi empresa: [DESCRIBE TU EMPRESA: qué enseñas, a quién, formato (online/presencial/híbrido), precio aproximado, estadio actual]

Antes de darme cualquier recomendación, analiza en profundidad las siguientes particularidades del marketing educativo que deberás tener en cuenta:

**El ciclo de decisión largo**
A diferencia de una compra de impulso, la decisión de invertir en formación puede tardar semanas o meses. El prospecto pasa por fases de reconocimiento del problema ("necesito mejorar mis habilidades"), investigación comparativa, validación social y justificación económica. Diseña para mí un mapa del customer journey completo con las acciones de marketing apropiadas para cada fase, los contenidos que aceleran el ciclo y los puntos de fricción más comunes que debo eliminar.

**Los múltiples stakeholders**
En edtech raramente hay un único decisor. Identifica y describe las estrategias para cada perfil relevante en mi caso:
- El estudiante directo (quien aprende): sus motivaciones intrínsecas y extrínsecas, sus miedos sobre el tiempo y el ROI del aprendizaje, y cómo conectar emocionalmente con su aspiración profesional.
- El pagador (que puede ser el propio estudiante, un padre o una empresa): sus criterios de decisión son distintos al aprendiz. El pagador corporativo mira precio, escalabilidad y reporting; el padre busca seguridad y reputación.
- El prescriptor (tutor, responsable de formación, decano, HR manager): influye sin comprar. ¿Cómo convierto prescriptores en aliados?

Para cada perfil dame mensajes clave diferenciados y canales recomendados.

**Los canales que funcionan en educación**
Dame un análisis honesto de los siguientes canales para mi contexto específico:
- SEO y contenido de largo plazo: los temas de aprendizaje tienen demanda de búsqueda evergreen. ¿Qué clusters de contenido debería atacar primero?
- YouTube y vídeo educativo gratuito: el marketing de producto en edtech a menudo ES el producto. ¿Cómo uso el contenido gratuito para convertir sin canibalizar las ventas?
- LinkedIn y comunidades profesionales: especialmente relevante para formación B2B y executive education.
- Email nurturing: el canal más eficiente en el ciclo largo de decisión. Dame una secuencia de nurturing de 8 correos para un lead que se apunta a mi lead magnet.
- Paid acquisition: cuándo tiene sentido Google Ads vs. Meta Ads vs. LinkedIn Ads para mi segmento.
- Partnerships con empresas: el canal B2B2C que cambia las matemáticas de adquisición.
- Referencias y comunidad alumni: el activo más infrautilizado en edtech.

**Métricas clave que debo monitorizar**
Define para mí los KPIs críticos: coste por lead, coste por enrollment, tasa de conversión lead-to-student, NPS de estudiantes activos, completion rate como indicador de satisfacción y retención, LTV por cohorte y payback period.

**El problema de la credibilidad**
La educación se compra sobre la base de la confianza. Diseña una estrategia de prueba social que incluya: testimonios de estudiantes con formato optimizado, casos de éxito laboral post-formación, acreditaciones y partners que añadan credibilidad, y cómo aprovechar los medios especializados en educación.

**Estacionalidad y lanzamientos**
El marketing educativo tiene picos muy marcados (septiembre, enero, primavera). Dame un calendario anual de campañas con la lógica de cada momento.

Termina con un plan de acción de los primeros 90 días con prioridades claras, presupuesto orientativo por canal y las tres palancas que tendrán mayor impacto en mi caso específico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar estrategia de marketing completa para una empresa edtech con múltiples segmentos y ciclo de decisión largo',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Plataformas de aprendizaje (LMS)',
                'description'      => 'Construye o evalúa sistemas de gestión del aprendizaje: los estándares SCORM y xAPI, la arquitectura de contenido y las funcionalidades clave.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software especializado en plataformas de aprendizaje (LMS/LXP) con experiencia en implementaciones de pequeña escala hasta soluciones enterprise. Voy a explicarte mi situación y necesito tu análisis técnico completo.

Mi situación: [DESCRIBE: si vas a construir desde cero, evaluar un LMS existente o migrar; el número aproximado de usuarios; si es para uso interno (L&D corporativo) o para vender cursos; stack tecnológico preferido si lo tienes]

**Estándares de interoperabilidad: SCORM vs xAPI**

Explícame en detalle las diferencias prácticas entre estos estándares desde el punto de vista del desarrollador:

SCORM (Sharable Content Object Reference Model): su arquitectura basada en el modelo de comunicación con el LMS vía JavaScript API, las versiones 1.2 vs 2004 y sus incompatibilidades, las limitaciones del modelo de datos (sólo registra completion y score básico), y los casos donde SCORM sigue siendo la opción correcta a pesar de su antigüedad.

xAPI (Tin Can): el modelo de statements actor-verb-object que permite registrar cualquier experiencia de aprendizaje, el Learning Record Store (LRS) como repositorio separado, cómo xAPI permite tracking offline y mobile, y por qué la adopción ha sido más lenta de lo esperado. Dame un ejemplo de statement xAPI en JSON para tres acciones de aprendizaje distintas.

AICC, cmi5 y LTI: cuándo aparecen y qué problema resuelven.

**Arquitectura de contenido**

Diseña la arquitectura de datos para mi plataforma incluyendo: la jerarquía curriculum > curso > módulo > lección > actividad, el modelo de progresión del usuario (prerrequisitos, rutas de aprendizaje ramificadas, certificaciones), la gestión de versiones del contenido cuando un curso se actualiza mientras hay usuarios activos, y la separación entre el motor de contenido y el motor de progresión.

**Funcionalidades que determinan la experiencia del estudiante**

Analiza y prioriza para mi caso las siguientes funcionalidades ordenadas por impacto en la experiencia:
- Motor de búsqueda de contenido con filtros avanzados
- Reproductores de vídeo con transcripción, velocidad variable y marcadores
- Evaluaciones adaptativas y quiz engine con banco de preguntas
- Foros y espacios de discusión por curso
- Notificaciones y recordatorios de continuación
- Gamificación: badges, puntos, leaderboards (y sus riesgos)
- Mobile app vs PWA: la decisión correcta para mi volumen
- Accesibilidad WCAG 2.1 AA como requisito no opcional
- Offline mode y sincronización posterior
- Analytics para el estudiante (su propio progreso) vs analytics para el administrador

**Decisión: construir vs comprar**

Ayúdame a evaluar las opciones: desarrollar un LMS propio (cuándo tiene sentido, qué frameworks facilitan el desarrollo, el coste real a largo plazo del mantenimiento), las plataformas open source (Moodle, Open edX, Canvas: sus fortalezas, debilidades y coste de operación real), y los SaaS (Teachable, Thinkific, LearnDash, TalentLMS: sus límites y cuándo se quedan cortos).

**Integraciones críticas**

Lista las integraciones que no pueden faltar: SSO/SAML para entornos corporativos, pasarela de pago si es B2C, videoconferencia (Zoom/Meet), herramientas de autoría de contenido, CRM y marketing automation, y reporting hacia sistemas externos.

Dame un documento de requerimientos técnicos priorizado (MoSCoW) que pueda usar como base para la toma de decisión o para briefar a un equipo de desarrollo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Arquitecturar o evaluar un LMS con soporte para estándares SCORM/xAPI y funcionalidades clave de experiencia de aprendizaje',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño instruccional y UX educativa',
                'description'      => 'Diseña experiencias de aprendizaje que realmente funcionan aplicando principios de ciencia del aprendizaje al diseño digital.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador instruccional y experto en UX educativa con formación en ciencias cognitivas y experiencia diseñando cursos y plataformas de aprendizaje digital. Necesito que me ayudes a diseñar una experiencia de aprendizaje efectiva.

Mi proyecto: [DESCRIBE: el tema que quieres enseñar, el perfil del aprendiz (nivel, contexto, motivación), el formato disponible (vídeo, texto, interactivo, mixto), la duración total prevista y el objetivo de aprendizaje final]

**Los principios científicos del aprendizaje que deben guiar el diseño**

Explícame cómo aplico cada uno de estos principios a mi proyecto concreto:

Carga cognitiva (Sweller): la memoria de trabajo tiene capacidad limitada. Cómo segmento el contenido para no sobrecargar al aprendiz, cómo uso el espacio en blanco y la progresión gradual, y cómo diferencio entre carga intrínseca (la complejidad del tema), extrínseca (ruido de diseño) e interactiva (procesamiento activo deseable).

Teoría multimedia (Mayer): los 12 principios del aprendizaje multimedia y cuáles son más relevantes para mi formato. En particular: el principio de coherencia (menos es más), el principio de segmentación (el aprendiz controla el ritmo), el principio de modalidad (audio + imagen supera texto + imagen) y el principio de personalización (tono conversacional).

Recuperación y práctica espaciada (Roediger, Ebbinghaus): por qué hacer preguntas es más eficaz que releer, cómo diseño un sistema de revisión espaciada dentro del curso, y cómo incorporo quizzes de recuperación que no se sientan como examen sino como ayuda al aprendizaje.

Aprendizaje intercalado: por qué alternar temas es mejor que practicar uno hasta la maestría, aunque se sienta más difícil (el efecto dificultad deseable).

Feedback inmediato y elaborado: el feedback que dice "correcto/incorrecto" no enseña. Diseña para mí el modelo de feedback que incluye explicación del error y la ruta correcta de razonamiento.

**El flujo de una lección bien diseñada**

Dame la estructura de una lección tipo para mi tema siguiendo el modelo ADDIE o la taxonomía de Bloom aplicada al diseño digital:
- Activación del conocimiento previo (2 minutos)
- Presentación del nuevo concepto con ejemplo concreto
- Demostración o caso de uso real
- Práctica guiada con andamiaje progresivo
- Práctica independiente
- Síntesis y conexión con la siguiente lección

**UX específica para el aprendizaje**

Analiza los patrones de UX que son únicos en el contexto educativo y que difieren del diseño de producto convencional: la importancia de la sensación de progreso (progress bars, completion streaks, milestones), el diseño de estados de error que no desmotivan, la navegación entre lecciones que equilibra libertad y estructura sugerida, el diseño de la pantalla de bienvenida de un curso que reduce la ansiedad del aprendiz novel, y la accesibilidad cognitiva (lenguaje claro, consistencia de interfaces, reducción de decisiones).

**Evaluación del aprendizaje**

Diseña el sistema de evaluación para mi curso: la diferencia entre evaluación formativa (que ayuda a aprender) y sumativa (que certifica), los tipos de preguntas según el nivel de Bloom (recordar, comprender, aplicar, analizar, evaluar, crear), y cómo diseño proyectos prácticos que demuestren el aprendizaje real mejor que cualquier test.

Termina con un esquema completo de mi curso con módulos, lecciones, tipos de actividades y objetivos de aprendizaje concretos para cada sección.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar la estructura pedagógica y UX de un curso online aplicando principios de ciencia del aprendizaje',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas a instituciones educativas',
                'description'      => 'Vende a universidades, colegios y empresas de formación: los procesos de compra, las licitaciones y las particularidades del mercado educativo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas enterprise especializado en el sector educativo con experiencia cerrando contratos con universidades, colegios concertados, administraciones educativas y empresas de formación corporativa. Voy a describirte mi solución y necesito que me ayudes a construir mi proceso de ventas.

Mi solución: [DESCRIBE: qué vendes (software, contenido, servicios, hardware), a qué tipo de institución educativa te diriges, rango de precio del contrato, en qué país operas]

**La estructura de decisión en instituciones educativas**

Antes de vender, necesito entender quién decide realmente. Explícame el mapa de poder en diferentes tipos de instituciones:

Universidades públicas: el rectorado vs los decanos vs los servicios informáticos vs el profesorado. Quién tiene presupuesto, quién tiene veto técnico, quién influye sin firmar. Los comités de compras y los procesos de evaluación que pueden durar más de un año.

Colegios privados y concertados: la estructura de dirección, el papel del titular de la red (congregación, fundación, empresa), y cómo la decisión pedagógica y la presupuestaria suelen estar en personas diferentes.

Departamentos de formación corporativa (L&D): el CHRO vs el CLO vs el manager de área que paga. El papel de los responsables de IT en la aprobación de nuevas plataformas. Los ciclos presupuestarios anuales que condicionan cuándo puedes cerrar.

Administraciones educativas: el proceso de licitación pública, los pliegos de condiciones técnicas, y cómo influir en los requerimientos antes de que se publique la licitación (el trabajo de preventa con el funcionario técnico).

**El proceso de venta largo en educación**

Dame un proceso de ventas paso a paso para mi tipo de institución objetivo:
- Prospección y calificación: cómo identifico oportunidades reales vs instituciones que no comprarán nunca
- El primer contacto: quién llamo primero, qué mensaje abro, cómo consigo una reunión de discovery
- Discovery profundo: las preguntas que descubren el dolor real, el presupuesto disponible y el proceso de decisión
- La prueba piloto: cómo la ofrezco, cómo la estructuro para que sea un éxito demostrable y cómo convierto el piloto en contrato
- La propuesta: los elementos que debe incluir una propuesta para una institución educativa (ROI, caso de uso pedagógico, referencias de pares, plan de implementación)
- El cierre: cómo gestiono los procesos de aprobación internos sin perder el momentum
- Las licitaciones públicas: cuándo participar y cuándo no, cómo preparo un pliego competitivo

**Las objeciones más comunes en educación**

Dame respuestas detalladas para: "Necesitamos aprobación del claustro", "Ya tenemos una solución y no queremos cambiar", "El presupuesto está comprometido hasta el próximo año", "Los profesores no van a adoptarlo", "No cumplís los requisitos de seguridad de datos educativos", y "Somos una institución pública, tenemos que licitar".

**Estrategia de expansión dentro de la institución**

La venta en educación suele empezar pequeña. Diseña la estrategia de land and expand: cómo entro por un departamento, cómo demuestro valor y cómo escalo al resto de la institución sin que la venta inicial sea un piloto eterno.

Termina con un plan de acción para los próximos 60 días con las instituciones objetivo, los mensajes de apertura y los KPIs que usaré para medir el pipeline.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construir un proceso de ventas para vender software o servicios a universidades, colegios y departamentos de formación corporativa',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management en edtech',
                'description'      => 'Las métricas que importan en educación: completion rate, learning outcomes, engagement y cómo equilibrar la experiencia de aprendizaje con los objetivos de negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior especializado en productos edtech con experiencia en plataformas de aprendizaje tanto B2C como B2B. Voy a compartirte el estado actual de mi producto y necesito que me ayudes a definir la estrategia de producto para los próximos dos trimestres.

Mi producto: [DESCRIBE: qué hace tu plataforma educativa, cuántos usuarios activos tienes, si es B2C/B2B/ambos, en qué estadio estás (pre-PMF, crecimiento, madurez), los principales problemas que ves hoy]

**Las métricas que realmente importan en edtech**

El error más común en product management educativo es importar métricas de otras industrias sin adaptarlas. Ayúdame a construir mi framework de métricas correcto:

Completion rate: la métrica más citada y más malinterpretada. Explícame la diferencia entre completion rate de curso completo, completion rate de módulo y completion rate de sesión. Por qué un completion rate alto puede ser una señal negativa (el contenido es tan fácil que no genera valor). Cómo segmentar el completion rate por cohorte de entrada, canal de adquisición y perfil de aprendiz para extraer insights accionables.

Learning outcomes: la métrica que más importa y la más difícil de medir. Cómo mido si el usuario realmente aprendió lo que prometí. El diseño de assessments pre y post que me dan evidencia de aprendizaje real. El problema del attribution: ¿cómo sé que el aprendizaje viene de mi plataforma y no de otros recursos?

Engagement y activación: el número de días activos por semana, la longitud de sesión óptima (más largo no es mejor), los eventos que predicen la retención a 30 días, y el "aha moment" de mi producto educativo. ¿Cuándo sabe un nuevo usuario que mi plataforma vale la pena?

Retención y churn: la cohorte de retención correcta para un producto de aprendizaje (diferente a un SaaS estándar porque el uso intensivo es temporal durante el curso), cómo distingo churn de abandono de "graduación" satisfactoria, y las señales de riesgo de abandono que me permiten intervenir.

NPS y satisfacción: cuándo preguntar (no en el onboarding, no cuando el usuario acaba de fallar un quiz), qué pregunta de NPS es más útil en educación y cómo el NPS del aprendiz puede divergir del NPS del pagador (empresa).

**El dilema producto-pedagógico**

El PM de edtech vive una tensión permanente entre lo que es bueno para el aprendizaje y lo que maximiza las métricas de producto. Ayúdame a pensar en:
- Gamificación: los streaks y puntos aumentan el DAU pero pueden substituir la motivación intrínseca. ¿Dónde está la línea?
- Contenido breve vs profundo: los vídeos cortos tienen mayor completion rate pero ¿generan aprendizaje real?
- Socialización vs aprendizaje individual: los foros reducen churn pero añaden complejidad al producto
- Certificaciones: generan conversión pero ¿inflamos el valor percibido del diploma?

**El roadmap de los próximos dos trimestres**

Con el contexto que te he dado, ayúdame a priorizar iniciativas usando el framework ICE (Impact, Confidence, Ease) adaptado a edtech. Dame al menos 8 iniciativas priorizadas con su justificación y las métricas de éxito que usaré para validar cada una.

Termina con el dashboard de métricas que presentaría en mi weekly review de producto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Definir métricas de producto y roadmap para una plataforma de aprendizaje online',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Learning & Development corporativo',
                'description'      => 'Diseña y gestiona el programa de formación interna: needs assessment, diseño de programas, plataformas y medición del impacto en el rendimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Learning & Development con experiencia en empresas de entre 200 y 5.000 empleados. Estoy construyendo o rediseñando el programa de formación interna de mi empresa y necesito tu ayuda para estructurarlo correctamente.

Mi empresa: [DESCRIBE: sector, tamaño aproximado, los perfiles principales de empleados, los problemas de rendimiento o skill gaps que motivaron este proyecto, el presupuesto anual disponible para formación]

**Needs Assessment: antes de diseñar, diagnostica**

El error más caro en L&D es diseñar formación para el problema equivocado. Guíame por el proceso de needs assessment correcto:

Análisis organizacional: qué objetivos de negocio requieren nuevas competencias, cómo identifico los skill gaps que realmente limitan el crecimiento vs los que son simples preferencias del management.

Análisis de tareas y roles: cómo mapeo las competencias requeridas por cada rol, la diferencia entre competencias técnicas (hard skills) y conductuales (soft skills) y cómo priorizo cuáles son críticas para el rendimiento.

Análisis de la audiencia: los distintos perfiles de aprendiz en mi empresa, sus niveles de motivación, sus restricciones de tiempo, sus preferencias de formato y los obstáculos organizacionales que bloquean su aprendizaje.

Diagnóstico de causa raíz: cómo distingo si el problema de rendimiento es por falta de conocimiento (se resuelve con formación), falta de motivación (no se resuelve con formación) o falta de recursos y procesos (tampoco se resuelve con formación). La regla de Gilbert sobre el entorno vs la persona.

Dame una plantilla de needs assessment que pueda aplicar en entrevistas con managers y empleados.

**Diseño del programa de formación**

Con el diagnóstico en mano, diseña conmigo la arquitectura del programa:
- La mezcla de modalidades óptima para mi contexto: formación presencial, e-learning asíncrono, aprendizaje entre pares (peer learning), on-the-job learning, mentoring y coaching
- El modelo 70-20-10 aplicado a mi empresa: cómo el 70% del aprendizaje sucede en el trabajo y cómo diseño para eso
- La secuencia de aprendizaje: qué se aprende en cada momento del employee journey (onboarding, desarrollo continuo, promoción, transición de rol)
- El diseño de learning paths por rol o familia profesional

**Plataformas y tecnología**

Ayúdame a evaluar las opciones tecnológicas para mi escala: LMS corporativos (Cornerstone, SAP SuccessFactors, Workday Learning), LXP (Degreed, EdCast, Docebo), soluciones mid-market (TalentLMS, Absorb, 360Learning) y el ecosistema de LinkedIn Learning o Coursera for Business. Dame criterios de selección específicos para mi caso.

**Medición del impacto: el modelo Kirkpatrick**

La formación sin medición es un gasto, no una inversión. Explícame cómo aplico los 4 niveles de Kirkpatrick a mi programa:
- Nivel 1 (Reacción): más allá del "me gustó el curso"
- Nivel 2 (Aprendizaje): evidencia de que aprendieron
- Nivel 3 (Comportamiento): ¿cambiaron su forma de trabajar?
- Nivel 4 (Resultados): el impacto en KPIs de negocio

Dame un plan de medición específico para mi programa con los indicadores que presentaré al CFO para justificar el presupuesto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar un programa de formación corporativa desde el diagnóstico de necesidades hasta la medición del impacto en el negocio',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelos de negocio en edtech',
                'description'      => 'B2C, B2B, B2B2C: los modelos de monetización de la educación digital y los unit economics que determinan cuál escala y cuál no.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un inversor y asesor de startups edtech con experiencia analizando y construyendo modelos de negocio en educación digital en España y Latinoamérica. Estoy evaluando o refinando el modelo de negocio de mi empresa educativa y necesito un análisis riguroso.

Mi empresa: [DESCRIBE: qué tipo de formación ofreces, a quién, en qué formato, precio actual si ya tienes, número de usuarios o clientes, en qué estadio estás]

**Los tres grandes modelos de monetización en edtech y sus variantes**

Analiza en profundidad cada modelo con sus unit economics reales:

**Modelo B2C (directo al consumidor individual)**

Las variantes: pago por curso único, suscripción mensual/anual, modelo freemium, pago por resultado (income share agreements). Para cada variante explica el CAC típico en España/LATAM, el LTV esperado, el payback period y las condiciones de mercado en que funciona. El problema del B2C en educación: la fricción de la decisión de compra individual, la sensibilidad al precio y la dificultad de construir un hábito de aprendizaje continuo. ¿En qué condiciones tiene sentido el B2C puro?

**Modelo B2B (venta a empresas)**

Las variantes: licencia por número de asientos, precio por usuario activo, contrato de contenido+plataforma, managed learning service. El B2B en educación tiene ventajas estructurales: menor CAC por usuario, mayor LTV, menor churn. Pero también tiene desventajas: ciclos de venta largos, dependencia de grandes cuentas y el riesgo de no-renovación cuando cambia el responsable de formación. Calcula para mí los unit economics de una venta B2B típica a una empresa de 500 empleados.

**Modelo B2B2C (a través de empresas, llego a los individuos)**

El modelo que más escala en edtech: la empresa paga pero el empleado consume. Las variantes: beneficio de empleado, plataforma blanca para la empresa, integración en el LMS corporativo. Los retos: el usuario final no eligió el producto, la empresa mide ROI diferente al aprendiz, y la renovación depende de la utilización demostrada. Cómo se mide el éxito en B2B2C.

**Los unit economics críticos en cada modelo**

Construye conmigo el modelo financiero con los siguientes parámetros:
- CAC (coste de adquisición de cliente) desglosado por canal
- ACV (Annual Contract Value) o precio medio por usuario/año
- Gross Revenue Retention (GRR) y Net Revenue Retention (NRR)
- Gross margin por tipo de contenido (vídeo grabado vs en directo vs mentoring)
- Payback period y cuándo el modelo genera caja positiva
- Las métricas de eficiencia: CAC ratio, Magic Number, Rule of 40

**El momento en que cada modelo escala**

Ayúdame a entender los umbrales críticos: cuándo el B2C necesita viralizarse para ser viable, cuándo el B2B requiere un equipo de ventas dedicado y qué tamaño de mercado total addressable (TAM) justifica cada modelo. Los errores más comunes: perseguir el B2B demasiado pronto, crecer el B2C sin unit economics positivos, o intentar los tres modelos a la vez sin los recursos para ejecutar ninguno bien.

**Recomendación para mi caso**

Con el contexto que te he dado, dime: ¿qué modelo tiene más sentido para mi empresa ahora mismo? ¿Cuál debería ser el modelo en dos años? ¿Qué cambios necesito hacer en el producto, el equipo o el go-to-market para llegar ahí?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Evaluar y optimizar el modelo de negocio de una empresa edtech con análisis de unit economics por modelo de monetización',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal en educación',
                'description'      => 'Protección de datos de menores, accesibilidad obligatoria, propiedad intelectual del contenido y las obligaciones específicas del sector educativo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho tecnológico y regulación del sector educativo con conocimiento del marco europeo (RGPD, directivas de accesibilidad) y las legislaciones específicas de España. Estoy lanzando o gestionando una plataforma educativa digital y necesito entender mis obligaciones legales.

Mi plataforma: [DESCRIBE: qué tipo de contenido educativo ofreces, a quién (adultos, menores, empresas), si procesas datos personales de estudiantes, si vendes en España, Europa o LATAM]

**Protección de datos de menores**

Este es el área de mayor riesgo en una plataforma educativa. Explícame en detalle:

El RGPD y los menores: en España, el artículo 7 de la Ley Orgánica 3/2018 (LOPDGDD) fija en 14 años la edad a partir de la cual el menor puede consentir por sí mismo el tratamiento de sus datos. Por debajo de esa edad se requiere consentimiento parental verificable. Cómo diseño el flujo de registro para cumplir esta obligación sin friccionar la experiencia.

Datos educativos como datos sensibles: los datos sobre el rendimiento académico, las dificultades de aprendizaje o el comportamiento en el aula tienen una protección reforzada. Qué tratamiento puedo hacer y qué no, cómo baso ese tratamiento en el interés legítimo vs el consentimiento explícito, y qué debo incluir en mi política de privacidad para usuarios educativos.

Las instituciones educativas como corresponsables: cuando vendo a un colegio y proceso datos de sus alumnos, debo firmar un contrato de encargado del tratamiento (DPA). Qué cláusulas son obligatorias, qué medidas técnicas y organizativas debo demostrar y cómo gestiono las transferencias internacionales si uso infraestructura cloud americana.

**Accesibilidad digital obligatoria**

La Directiva (UE) 2016/2102 y el RD 1112/2018 imponen obligaciones de accesibilidad a entidades del sector público. La Directiva de accesibilidad de los actos normativos y la European Accessibility Act (EAA) amplían estas obligaciones al sector privado para 2025. Explícame:

El estándar WCAG 2.1 nivel AA: qué implica en la práctica para una plataforma de vídeo educativo (subtítulos, transcripciones, contraste de colores, navegación por teclado, lectores de pantalla). Qué haría una auditoría WCAG en mi plataforma.

La declaración de accesibilidad obligatoria: qué debe incluir, dónde publicarla y cómo gestiono las reclamaciones de accesibilidad.

**Propiedad intelectual del contenido educativo**

Quién es el titular de los derechos del contenido educativo: si el profesor es empleado vs freelance, si el contenido lo encargo a terceros, y cómo deben redactarse los contratos para que la cesión de derechos sea efectiva y cubra los usos digitales futuros.

El uso educativo como excepción al copyright: el artículo 32 LPI permite el uso de fragmentos de obras ajenas con fines educativos, pero con límites precisos. Qué puedo usar, cuánto, con qué condiciones y cuándo debo pedir licencia.

Las licencias Creative Commons en el contexto educativo y los riesgos de contenido generado por IA (autoría, copyright y el estado actual de la jurisprudencia).

**Certificaciones y diplomas: la regulación de la formación no reglada**

La diferencia entre formación oficial (con validez académica reconocida) y formación no reglada. Qué puedo llamar "certificación" y qué no. Los requisitos para emitir diplomas con validez en el mercado laboral y las restricciones del uso de logos de organismos acreditadores.

Dame un checklist legal de lanzamiento para mi plataforma educativa organizado por prioridad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 20,
                'use_case'         => 'Identificar y cumplir las obligaciones legales específicas de una plataforma educativa digital en España y Europa',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Onboarding en plataformas educativas',
                'description'      => 'Los primeros 7 días determinan si el usuario aprende o abandona. Diseña el onboarding de activación correcto para productos de aprendizaje.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en customer success y onboarding especializado en plataformas de aprendizaje online. El mayor problema de mi plataforma educativa es que los usuarios se registran pero no completan el onboarding o abandonan en los primeros días sin llegar a experimentar el valor del producto. Necesito que me ayudes a rediseñar completamente el proceso de activación.

Mi situación actual: [DESCRIBE: qué hace tu plataforma, cuál es tu tasa de activación actual si la conoces, en qué paso del onboarding pierdes más usuarios, si tienes datos de por qué se van]

**Por qué el onboarding educativo es diferente**

Los productos de aprendizaje tienen una fricción de activación única: el usuario tiene que hacer algo difícil (aprender) para llegar al momento en que ve el valor. Explícame cómo afecta esto al diseño del onboarding y por qué las técnicas de onboarding estándar de SaaS no se transfieren directamente a la educación.

El "aha moment" en educación: a diferencia de un gestor de proyectos donde el aha moment es ver el primer tablero organizado, en educación el aha moment puede ser completar la primera lección y sentir que progresé, descubrir que hay contenido exactamente para mi nivel, o conectar con otros aprendices. ¿Cuál es el aha moment correcto para mi plataforma y cómo lo alcanza el usuario lo antes posible?

**Los 7 primeros días: el mapa de activación**

Diseña para mí un plan de onboarding día a día para la primera semana de un nuevo usuario:

Día 0 (registro): la pantalla de bienvenida que no abruma, el formulario de perfil que recojo solo para personalizar la experiencia (no para marketing), y el primer contenido que le muestro. ¿Empiezo con un diagnóstico de nivel, con la lección más popular o con una recomendación personalizada?

Día 1: el primer email de activación. No "bienvenido a la plataforma" sino "tu próximo paso es este vídeo de 8 minutos". El mensaje que crea urgencia sin presión.

Días 2-3: si el usuario no ha vuelto, cómo reactivarlo sin parecer spam. Si ha vuelto, cómo reconocer el progreso y darle un siguiente paso claro.

Días 4-7: la transición del onboarding guiado a la autonomía. Cómo entrego el "volante" al usuario sin que sienta que lo abandono.

**El equipo de soporte en el onboarding educativo**

Los usuarios de plataformas educativas tienen necesidades de soporte únicas en los primeros días: no saben si el contenido es para ellos, tienen dudas sobre el nivel, o sienten que el curso avanza demasiado rápido o lento. Diseña el protocolo de soporte proactivo durante el onboarding:
- Triggers de intervención: qué comportamientos activan una intervención del equipo de CS (inactividad de 2 días, quiz fallado dos veces, vídeo pausado repetidamente en el mismo punto)
- Los mensajes de soporte proactivo que se sienten como ayuda y no como ventas
- Cómo escalo entre soporte automatizado (chatbot, email secuencial) y soporte humano (chat en vivo, llamada de check-in)
- El primer customer success call: cuándo hacerlo, qué preguntas hago y cómo lo convierto en un momento que refuerza el compromiso del usuario con el aprendizaje

**Métricas de onboarding que debo monitorizar**

Define para mí: tasa de activación (cómo la defino para mi producto), tiempo hasta el primer aha moment, completion rate del onboarding, correlación entre acciones en el onboarding y retención a 30 días, y el funnel de activación con los pasos donde pierdo más usuarios.

Termina con el diseño de la secuencia de emails de onboarding completa para los primeros 7 días, con asunto, mensaje y CTA de cada uno.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Rediseñar el onboarding y activación de los primeros 7 días de una plataforma de aprendizaje online para reducir el abandono temprano',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Cursos online como modelo de negocio',
                'description'      => 'Crea y vende formación online como instructor independiente: la propuesta de valor, la plataforma, el precio y las estrategias de lanzamiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en creación y venta de cursos online con experiencia ayudando a profesionales independientes a construir un negocio de formación digital rentable. Quiero lanzar mi primer curso online o mejorar el rendimiento de uno existente y necesito tu guía completa.

Mi situación: [DESCRIBE: en qué eres experto, a quién quieres enseñar, si ya tienes audiencia (y de qué tamaño), si tienes algún curso previo o es tu primer lanzamiento, en qué rango de precio estás pensando]

**La propuesta de valor del curso: el trabajo previo al contenido**

El error más común del instructor novel es empezar grabando antes de validar que hay demanda y que la propuesta es clara. Ayúdame a definir:

El problema específico que resuelve mi curso: no "aprende marketing digital" sino "consigue tus primeros 3 clientes en 60 días sin presupuesto de publicidad". La transformación concreta que prometo al alumno en términos de resultado, no de contenido.

El alumno ideal (buyer persona): quién es, qué sabe ya, qué le impide resolver el problema solo, cuánto tiempo tiene disponible para aprender, qué ha intentado antes y por qué no funcionó.

La diferenciación: hay cursos de todo en internet. Por qué el mío es la opción correcta para MI alumno específico. No tengo que ser el más barato ni el más completo, tengo que ser el más relevante para un perfil concreto.

**Validación antes de grabar**

Cómo valido que mi curso tiene demanda antes de invertir semanas en producirlo: el pre-lanzamiento con ventas reales antes de tener el contenido grabado, la lista de espera como señal de demanda, las entrevistas con potenciales alumnos para entender si el problema que resuelvo es un dolor real o un "nice to have", y los foros, grupos y búsquedas que revelan si hay mercado.

**La plataforma correcta para mi caso**

Compara las opciones con sus trade-offs reales:
- Marketplaces (Udemy, Domestika): mayor alcance orgánico pero pérdida de control del precio, del cliente y del margen. Cuándo tiene sentido.
- Plataformas propias (Teachable, Thinkific, Hotmart, Kajabi): mayor margen y control pero necesitas traer tu propio tráfico. Compara sus tarifas, funcionalidades y cuál es mejor para mi caso.
- Tu propio ecosistema (WordPress + plugins, plataforma a medida): el máximo control pero la mayor complejidad técnica. Cuándo vale la pena.

**El precio**

La psicología del precio en cursos online: por qué los cursos de 19€ generan más quejas que los de 497€, el precio como señal de calidad y la relación entre precio y commitment del alumno. Cómo establezco el precio correcto para mi curso usando: el valor del resultado prometido, los precios de la competencia, el perfil económico de mi alumno objetivo, y el modelo de precio (pago único, pago fraccionado, suscripción mensual).

**La estrategia de lanzamiento**

Diseña para mí una estrategia de lanzamiento para las próximas 8 semanas:
- Las semanas 1-4: construcción de audiencia y lista de correo con contenido gratuito relevante al tema del curso
- Las semanas 5-6: período de preventa con precio de founding member
- Las semanas 7-8: el lanzamiento abierto con emails de venta diarios

Dame la secuencia de emails de venta de una semana de lanzamiento, con el ángulo de cada mensaje y el CTA correcto.

Termina con el plan de ingresos realista para los primeros 12 meses: cuántos alumnos necesito a qué precio para que el negocio sea sostenible.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar y lanzar un curso online como instructor independiente desde la validación de la idea hasta la estrategia de ventas',
                'vote_score'       => 46,
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
