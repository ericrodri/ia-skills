<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills310Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Sprint planning para campañas de marketing digital',
                'description'      => 'Aplica la metodología ágil a la planificación y ejecución de campañas de marketing mediante sprints de dos semanas con objetivos medibles. Aprende a priorizar iniciativas con backlog de campañas, velocity tracking y retrospectivas de equipo. Convierte tu área de marketing en un motor de ejecución continua y aprendizaje rápido.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en metodologías ágiles aplicadas al marketing digital con más de diez años de experiencia liderando equipos de marketing en empresas tecnológicas de alto crecimiento. Tu misión es guiarme paso a paso para implementar un sistema de gestión ágil en mi equipo de marketing.

CONTEXTO DEL PROYECTO
Quiero transformar la forma en que mi equipo de marketing planifica y ejecuta campañas. Actualmente trabajamos con planes mensuales rígidos que no nos permiten adaptarnos rápidamente a los cambios del mercado, las tendencias de redes sociales o los resultados de campañas en curso. Necesito un sistema ágil basado en sprints de dos semanas.

PARTE 1 — ESTRUCTURA DEL SPRINT DE MARKETING
Explica cómo estructurar un sprint de marketing de 14 días que incluya:
- Ceremonias ágiles adaptadas: sprint planning, daily standup reducido, sprint review y retrospectiva
- Cómo crear y mantener un backlog de campañas con historias de usuario de marketing (ej.: "Como responsable de adquisición, quiero lanzar una campaña de email que recupere leads inactivos del último trimestre")
- Definición de "Done" para tareas de marketing: aprobación de creatividades, publicación, primeras métricas alcanzadas
- Cómo estimar esfuerzo con planning poker o tallas de camiseta aplicadas a tareas creativas y de análisis

PARTE 2 — MÉTRICAS DE VELOCIDAD Y CAPACIDAD
Detalla cómo calcular y usar:
- Velocity del equipo de marketing en puntos de historia durante los primeros tres sprints
- Capacity planning considerando días festivos, reuniones externas y tiempo de revisión creativa
- Cómo ajustar el sprint backlog cuando llegan solicitudes urgentes de dirección o ventas
- Burndown chart adaptado a campañas: qué significa "avance" en una tarea de copywriting o diseño gráfico

PARTE 3 — BACKLOG Y PRIORIZACIÓN
Enseña un sistema de priorización del backlog con:
- Matriz de valor vs. esfuerzo para elegir qué campañas entran en el próximo sprint
- Técnica MoSCoW aplicada a iniciativas de marketing: Must have, Should have, Could have, Won't have
- Cómo involucrar a stakeholders de ventas, producto y dirección en la priorización sin perder autonomía del equipo
- Refinamiento de backlog: cómo hacerlo en 30 minutos semanales sin que sea una reunión improductiva

PARTE 4 — RETROSPECTIVAS EFECTIVAS
Proporciona un formato de retrospectiva de 45 minutos para equipos de marketing con:
- Dinámica "Qué salió bien / Qué mejorar / Acciones concretas" adaptada a resultados de campaña
- Cómo analizar métricas de la última campaña durante la retrospectiva sin que se convierta en una sesión de culpa
- Plantilla de action items con responsable y fecha de seguimiento
- Cómo medir si las mejoras de la retrospectiva anterior tuvieron impacto real en el sprint siguiente

PARTE 5 — ESCALADO ÁGIL EN MARKETING
Cuando el equipo crece, explica:
- Cómo coordinar múltiples sub-equipos (paid media, content, SEO, social) con sprints sincronizados
- Uso de un Kanban board de marketing en Jira o Notion con columnas específicas: Backlog, En refinamiento, Sprint actual, En revisión, Publicado, Analizando resultados
- Integración con el roadmap de producto para alinear lanzamientos con campañas de go-to-market
- OKRs de marketing como guía norte para la priorización trimestral del backlog

FORMATO DE ENTREGA
Presenta la información con:
1. Resumen ejecutivo de la transformación ágil (5 puntos clave)
2. Plantilla de sprint planning lista para usar en la próxima reunión
3. Ejemplos reales de historias de usuario de marketing con criterios de aceptación
4. Checklist de implementación para las primeras cuatro semanas
5. KPIs para medir el éxito de la adopción ágil en marketing
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Planificación ágil de campañas de marketing',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Sprint planning avanzado con estimación por puntos de historia',
                'description'      => 'Domina las técnicas avanzadas de sprint planning para equipos de desarrollo: estimación con planning poker, refinamiento de backlog, definición de ready y done, y gestión de deuda técnica dentro del sprint. Aprende a negociar el sprint goal con producto y a proteger al equipo de interrupciones durante la ejecución.',
                'prompt_content'   => <<<'PROMPT'
Eres un Scrum Master certificado y coach ágil con experiencia en equipos de ingeniería de software de entre cinco y veinticinco personas. Has trabajado en startups de serie B y empresas tecnológicas medianas. Tu objetivo es enseñarme a facilitar un sprint planning de alto nivel que resulte en compromisos realistas y sprints exitosos.

CONTEXTO
Mi equipo de desarrollo tiene seis ingenieros (tres seniors, dos mid, un junior) y trabaja en sprints de dos semanas. El Product Owner tiende a sobrecargar el sprint y los ingenieros subestiman la deuda técnica. Las retrospectivas revelan que el 40% de los sprints no cierran todos los ítems comprometidos. Necesito mejorar el proceso completo.

PARTE 1 — PREPARACIÓN DEL BACKLOG ANTES DEL PLANNING
Explica el proceso de refinamiento previo al sprint planning:
- Criterios de "Definition of Ready": una historia de usuario debe tener descripción clara, criterios de aceptación verificables, maquetas o especificaciones técnicas, y estimación aproximada antes de entrar al planning
- Técnica de Three Amigos: cómo involucrar a dev, QA y PO en el refinamiento para detectar ambigüedades
- Cómo dividir historias épicas en historias pequeñas que quepan en un sprint (splitting patterns: por flujo de negocio, por variaciones de datos, por reglas de negocio, por interfaz)
- Deuda técnica: cómo reservar entre el 15 y el 20% de la capacidad del sprint para refactoring y mejoras de infraestructura

PARTE 2 — PLANNING POKER Y ESTIMACIÓN
Guía paso a paso del planning poker:
- Cartas de Fibonacci (1, 2, 3, 5, 8, 13, 21): qué representa cada valor en horas reales para tu equipo de referencia
- Técnica de la historia de referencia: cómo elegir dos historias de tamaños conocidos como anclas de estimación
- Cómo manejar la divergencia extrema (un dev estima 2, otro 13): técnicas de discusión sin alargar la sesión
- Estimación por talla de camiseta (XS/S/M/L/XL) como alternativa más rápida para el refinamiento inicial
- Cómo convertir puntos de historia en forecast de velocidad para el sprint actual

PARTE 3 — DEFINICIÓN DEL SPRINT GOAL Y COMPROMISOS
Explica cómo establecer un sprint goal efectivo:
- El sprint goal debe ser un resultado de negocio medible, no una lista de tareas (ej.: "Al final del sprint, los usuarios pueden completar el onboarding sin contactar soporte")
- Cómo calcular la capacidad real: días disponibles × horas productivas por día × factor de enfoque (generalmente 0.7)
- Negociación con el PO cuando el backlog priorizado supera la capacidad: técnicas para tomar decisiones sin conflicto
- Compromisos vs. metas de estiramiento: qué entra en el sprint y qué queda como "stretch goals"

PARTE 4 — GESTIÓN DE INTERRUPCIONES Y BUGS EN PRODUCCIÓN
Proporciona estrategias para proteger el sprint:
- Bug fund: reservar entre el 10 y el 15% de la capacidad para incidencias imprevistas
- Protocolo de escalación cuando llega un bug crítico en producción durante el sprint
- Cómo registrar y priorizar las interrupciones para visibilizarlas en la retrospectiva
- Swarm technique: cuándo tiene sentido que todo el equipo se enfoque en un solo ítem bloqueante

PARTE 5 — FACILITACIÓN DEL SPRINT PLANNING
Agenda detallada para un sprint planning de dos horas:
- Primeros 15 minutos: revisión del velocity histórico y capacidad del sprint
- Siguientes 30 minutos: presentación del sprint goal propuesto por el PO
- Siguientes 45 minutos: selección y estimación de historias del backlog
- Últimos 30 minutos: desglose en tareas técnicas, identificación de dependencias y plan de ejecución

FORMATO DE ENTREGA
1. Plantilla de agenda de sprint planning lista para usar
2. Plantilla de Definition of Ready con checklist de ocho criterios
3. Tabla de referencia de Fibonacci con ejemplos de historias de cada tamaño
4. Script de cinco preguntas para facilitar la discusión cuando hay divergencia de estimaciones
5. Dashboard de métricas ágiles: velocity, predictability index y sprint goal success rate
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimización del sprint planning en equipos de desarrollo',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Metodología ágil para proyectos de diseño UX/UI',
                'description'      => 'Adapta los principios ágiles al flujo de trabajo de diseño UX/UI: sprints de discovery, iteraciones de prototipado, integración en el equipo de desarrollo y gestión de la deuda de diseño. Aprende a trabajar con el equipo técnico sin sacrificar la calidad del proceso de diseño centrado en el usuario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Design Lead con experiencia en equipos ágiles que combina certificación en Scrum con profundo conocimiento en UX/UI. Has trabajado durante ocho años integrando diseñadores en squads ágiles en empresas de producto digital. Tu misión es enseñarme a aplicar metodología ágil al proceso de diseño sin perder la rigurosidad del pensamiento centrado en el usuario.

CONTEXTO DEL DESAFÍO
El mayor reto del diseño ágil es la tensión entre el tiempo que requiere un buen proceso de investigación y prototipado (que puede llevar semanas) y la velocidad de los sprints de desarrollo (que duran dos semanas). Necesito aprender a reconciliar estos dos mundos de forma práctica.

PARTE 1 — EL DUAL-TRACK AGILE PARA DISEÑO
Explica el modelo de dos pistas paralelas:
- Discovery track: investigación de usuarios, definición de problemas, ideación y prototipado de baja fidelidad, siempre dos sprints por delante del desarrollo
- Delivery track: diseño de alta fidelidad, especificaciones, colaboración con desarrollo y QA durante el sprint actual
- Cómo coordinar ambas pistas para que discovery alimente continuamente el backlog con historias bien definidas
- Cuándo el diseñador debe parar el discovery para apoyar al equipo de desarrollo en decisiones de implementación

PARTE 2 — SPRINT DE DISCOVERY DE DISEÑO
Estructura un sprint de discovery de dos semanas:
- Día 1-2: revisión de investigación existente, definición de hipótesis de diseño, alineación con PO y tech lead
- Día 3-5: entrevistas con usuarios (mínimo cinco), análisis de competidores, revisión de analytics
- Día 6-8: síntesis de hallazgos, user journey mapping, definición de jobs-to-be-done
- Día 9-10: ideación (crazy eights, design studio), prototipado de baja fidelidad en FigJam o papel
- Revisión de discovery con stakeholders: cómo presentar hallazgos para que informan las decisiones del backlog

PARTE 3 — INTEGRACIÓN CON EL SPRINT DE DESARROLLO
Explica cómo el diseñador trabaja dentro del sprint de desarrollo:
- Design specs en Figma: nivel de detalle necesario para que desarrollo implemente sin constantes preguntas
- Handoff ágil: no es una entrega puntual sino un proceso continuo de colaboración y clarificación
- Cómo participar en el planning sin bloquear la estimación: cuándo decir "necesito más investigación"
- Daily standup del diseñador: qué comunicar, qué bloqueos reportar, cómo pedir feedback rápido del equipo

PARTE 4 — DEUDA DE DISEÑO Y SISTEMA DE DISEÑO
Gestión de la calidad del diseño en el largo plazo:
- Qué es la deuda de diseño: componentes inconsistentes, patrones de interacción duplicados, diseños que no pasaron por proceso de usabilidad adecuado
- Cómo crear un backlog de deuda de diseño y priorizarlo junto con la deuda técnica
- Design system ágil: cómo construir y mantener una librería de componentes en Figma mientras el producto evoluciona sprint a sprint
- Criterios para decidir si vale la pena refactorizar un diseño existente vs. construir nuevo

PARTE 5 — RETROSPECTIVAS Y MEJORA CONTINUA EN DISEÑO
Herramientas para mejorar el proceso:
- Métricas de diseño ágil: tiempo de discovery por feature, número de iteraciones de prototipo por historia, satisfacción del equipo con las especificaciones entregadas
- Cómo facilitar una retrospectiva de diseño orientada a mejorar la colaboración con desarrollo
- Design critique en el sprint: cómo organizar sesiones de feedback estructurado sin ralentizar el ritmo
- Cómo medir el impacto del diseño en métricas de negocio (conversión, tiempo en tarea, NPS)

FORMATO DE ENTREGA
1. Diagrama del modelo dual-track ágil con responsabilidades del diseñador en cada pista
2. Plantilla de sprint de discovery con entregables diarios
3. Checklist de handoff de diseño: qué debe estar listo antes de que desarrollo empiece a implementar
4. Plantilla de Design Critique de 45 minutos adaptada al ciclo ágil
5. KPIs de diseño ágil: cuáles medir y cada cuánto revisarlos
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Integración del diseño UX/UI en equipos ágiles',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Pipeline de ventas gestionado con sprints y retrospectivas',
                'description'      => 'Aplica la metodología ágil a la gestión del pipeline de ventas mediante sprints de dos semanas con objetivos de prospección, cualificación y cierre. Aprende a hacer retrospectivas comerciales para identificar cuellos de botella en el funnel y mejorar las tasas de conversión sprint a sprint.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Ventas con experiencia en implementación de metodologías ágiles en equipos comerciales B2B. Has liderado la transformación ágil de equipos de ventas en empresas de SaaS, servicios profesionales y distribución industrial. Tu objetivo es enseñarme a aplicar sprints y retrospectivas a la gestión de mi pipeline de ventas.

CONTEXTO COMERCIAL
Los equipos de ventas tradicionales trabajan con cuotas mensuales o trimestrales, pero carecen de un sistema de mejora continua que les permita aprender rápido de los errores y ajustar la estrategia en tiempo real. Quiero implementar una cadencia ágil que mantenga la motivación del equipo y mejore los ratios de conversión de forma consistente.

PARTE 1 — ESTRUCTURA DEL SPRINT COMERCIAL
Diseña un sprint de ventas de dos semanas que incluya:
- Sprint goal comercial: definir objetivos medibles (ej.: "Al final del sprint, tenemos 15 demos agendadas con decisores en empresas de más de 100 empleados del sector retail")
- Backlog de actividades comerciales: prospección, outreach, llamadas de cualificación, demos, propuestas, seguimiento de cierres pendientes
- Cómo estimar la carga de trabajo comercial: número de contactos por actividad, tiempo promedio de cada tipo de interacción
- Velocidad comercial: cómo calcular cuántas actividades de cada tipo puede realizar un comercial en un sprint

PARTE 2 — DAILY COMMERCIAL STANDUP
Adapta el daily standup al contexto de ventas:
- Tres preguntas del daily para comerciales: ¿Qué cierres avancé ayer en el pipeline? ¿Qué actividades completé para cumplir el sprint goal? ¿Qué obstáculos me impiden avanzar en mis oportunidades calientes?
- Formato de quince minutos máximo: cómo evitar que se convierta en una sesión de reporte de CRM
- Escala de temperatura del pipeline: cómo cada comercial comunica el estado de sus oportunidades principales en treinta segundos
- Protocolo de escalación: cuándo un comercial debe pedir ayuda al manager o a un experto técnico

PARTE 3 — ANÁLISIS DEL PIPELINE Y MÉTRICAS ÁGILES
Explica las métricas clave del pipeline ágil:
- Velocity de ventas: número de oportunidades × tasa de conversión × valor medio × velocidad del ciclo
- Conversion rate por etapa del funnel: dónde se rompe la cadena y cómo priorizarlo en el siguiente sprint
- Forecast ágil: cómo construir un forecast rolling de cuatro sprints más preciso que el forecast mensual tradicional
- Lead scoring dinámico: cómo actualizar la puntuación de los leads al inicio de cada sprint basándose en señales de comportamiento

PARTE 4 — RETROSPECTIVA COMERCIAL
Guía para una retrospectiva de ventas de 60 minutos:
- Revisión de métricas del sprint: deals ganados, perdidos, avanzados de etapa, actividades completadas vs. planificadas
- Análisis de deals perdidos: metodología de post-mortem comercial en quince minutos (por qué perdimos, qué podríamos haber hecho diferente, qué aprendemos)
- Dinámica de mejores prácticas: cada comercial comparte una técnica que funcionó en el sprint (script de objeción, email de seguimiento, pregunta de cualificación)
- Action items concretos: máximo tres cambios a implementar en el siguiente sprint con responsable y criterio de éxito

PARTE 5 — BACKLOGS ESPECIALIZADOS DEL EQUIPO DE VENTAS
Crea backlogs específicos para:
- Backlog de prospección: listas de cuentas target por segmento, secuencias de outreach multi-canal
- Backlog de habilitación: materiales de ventas a crear, formaciones pendientes, mejoras de argumentario
- Backlog de CRM: datos a limpiar, automatizaciones a configurar, reportes a mejorar
- Cómo integrar el backlog de ventas con el backlog de marketing para coordinar campañas y generación de demanda

FORMATO DE ENTREGA
1. Plantilla de sprint planning comercial de 45 minutos con agenda detallada
2. Tablero Kanban de ventas: columnas desde prospección hasta cliente cerrado con definición de cada etapa
3. Plantilla de retrospectiva comercial con sección de post-mortem de deals perdidos
4. Dashboard de métricas del sprint comercial: las cinco métricas imprescindibles
5. Guía de implementación: cómo introducir la metodología ágil en un equipo de ventas resistente al cambio
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestión ágil del pipeline y equipo comercial',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Escalado ágil con SAFe para productos digitales en crecimiento',
                'description'      => 'Aprende a escalar la metodología ágil más allá de un único equipo aplicando el framework SAFe (Scaled Agile Framework) o sus alternativas más ligeras. Domina los conceptos de PI Planning, ART (Agile Release Train), épicas de portafolio y alineación de múltiples equipos hacia un mismo objetivo de producto.',
                'prompt_content'   => <<<'PROMPT'
Eres un Release Train Engineer (RTE) certificado en SAFe con experiencia en la implementación de marcos de escalado ágil en organizaciones de entre cien y quinientas personas. Has guiado la transición desde equipos ágiles independientes hacia trenes de lanzamiento coordinados en empresas de producto digital, fintech y retail. Tu misión es enseñarme a escalar la agilidad de forma pragmática.

CONTEXTO DEL ESCALADO
Actualmente tenemos tres equipos de desarrollo trabajando en el mismo producto con sprints desincronizados. Los equipos tienen dependencias frecuentes que causan retrasos, las prioridades del backlog de cada equipo no siempre están alineadas con los objetivos del negocio y el lanzamiento de features requiere coordinación manual entre equipos. Necesito un marco que escale sin burocracia excesiva.

PARTE 1 — PRINCIPIOS DEL ESCALADO ÁGIL
Explica los fundamentos antes de elegir un marco:
- Por qué Scrum of Scrums no escala bien por encima de tres equipos y cuándo tiene sentido usarlo
- Diferencias prácticas entre SAFe, LeSS (Large Scale Scrum) y Nexus: cuándo elegir cada uno
- El Agile Release Train (ART): qué es, cómo se compone y por qué es la unidad de escalado en SAFe
- Program Increment (PI): el equivalente al sprint para el nivel de programa (generalmente 8-12 semanas con cuatro sprints de desarrollo y uno de innovación y planificación)

PARTE 2 — PI PLANNING: LA CEREMONIA CENTRAL DEL ESCALADO
Guía completa del PI Planning:
- Estructura del evento: dos días con todos los equipos del ART presentes (presencial o virtual)
- Día 1: visión del negocio presentada por el Business Owner, arquitectura del sistema presentada por el System Architect, y breakouts de equipo para planificar las features del PI
- Día 2: revisión de los draft plans de cada equipo, identificación de riesgos y dependencias, ajuste de planes y commit ceremony
- Cómo identificar y visualizar dependencias entre equipos con el Program Board
- Qué es un PI Objective y cómo redactar objetivos SMART para el Program Increment completo

PARTE 3 — ROLES DEL ESCALADO ÁGIL
Define los roles adicionales necesarios:
- Release Train Engineer (RTE): el Scrum Master del ART, facilita las ceremonias de programa, gestiona impedimentos cross-equipo
- Product Manager vs. Product Owner en SAFe: el PM gestiona el Program Backlog (features, enablers), el PO gestiona el Team Backlog (historias)
- System Architect: responsable de la integridad arquitectónica del sistema, define las habilitantes técnicas de largo plazo
- Business Owners: stakeholders que participan en el PI Planning y evalúan el PI Achievement al final de cada increment

PARTE 4 — JERARQUÍA DEL BACKLOG EN SAFe
Explica la estructura de backlog multinivel:
- Portfolio Backlog: épicas estratégicas que pueden durar varios PIs (ej.: "Implementar motor de recomendaciones personalizado")
- Program Backlog: features de nivel de ART que caben en uno o dos sprints de programa (ej.: "Sistema de notificaciones push por comportamiento del usuario")
- Team Backlog: historias de usuario estimadas en puntos que caben en un sprint de equipo
- Enablers: historias técnicas de arquitectura, infraestructura y cumplimiento normativo que no tienen valor directo para el usuario pero habilitan features futuras

PARTE 5 — MÉTRICAS Y CEREMONIAS DE PROGRAMA
Detalles de las ceremonias del nivel de programa:
- System Demo: cada sprint, demostración integrada del sistema completo con todas las features desarrolladas por todos los equipos del ART
- Inspect and Adapt (I&A): al final de cada PI, retrospectiva de todo el ART con análisis de métricas y problem-solving estructurado
- Métricas de programa: PI predictability (% de PI Objectives alcanzados), flow metrics (flow velocity, flow time, flow load, flow efficiency)
- SAFe vs. alternativas más ligeras: cuándo merece la pena toda la ceremonia de SAFe y cuándo basta con un Scrum of Scrums bien facilitado

FORMATO DE ENTREGA
1. Comparativa de marcos de escalado: SAFe vs. LeSS vs. Nexus con tabla de cuándo usar cada uno
2. Agenda de PI Planning de dos días con responsables de cada bloque
3. Plantilla de Program Board para visualizar features y dependencias entre equipos
4. Definición de PI Objectives con ejemplos para un producto de e-commerce
5. Hoja de ruta de implementación: cómo pasar de tres equipos desincronizados a un ART en seis meses
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Escalado de metodología ágil a múltiples equipos de producto',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Agile HR: gestión ágil de procesos de talento y selección',
                'description'      => 'Transforma los procesos de Recursos Humanos aplicando principios ágiles: sprints de selección, retrospectivas de ciclos de evaluación, backlog de iniciativas de cultura y desarrollo. Aprende a medir el impacto de RRHH con métricas de velocidad y a adaptar continuamente los procesos de talento a las necesidades de la organización.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Head of People con certificación en Agile HR y experiencia en la transformación de departamentos de Recursos Humanos en empresas tecnológicas de entre cincuenta y doscientas personas. Tu objetivo es enseñarme a aplicar principios ágiles a los procesos de talento, selección, desarrollo y cultura organizacional.

CONTEXTO DE LA TRANSFORMACIÓN ÁGIL EN RRHH
Los departamentos de RRHH tradicionales trabajan con proyectos anuales rígidos (plan de selección del año, evaluación de desempeño semestral, plan de formación anual) que no responden a la velocidad de cambio de las organizaciones ágiles. Necesito un enfoque más iterativo que permita adaptarse a las necesidades reales del negocio.

PARTE 1 — AGILE HR: PRINCIPIOS Y MENTALIDAD
Explica la diferencia entre RRHH tradicional y Agile HR:
- Del plan anual al backlog de iniciativas de talento: cómo priorizar proyectos de RRHH usando valor de negocio y urgencia
- De los procesos rígidos a los experimentos: cómo proponer pequeñas mejoras en procesos de RRHH, medirlas y decidir si escalarlas
- Del reporte anual al dashboard de métricas en tiempo real: qué métricas de talento revisar cada dos semanas
- Cómo crear un equipo de RRHH ágil con ceremonias propias: planning, daily standup, review y retrospectiva

PARTE 2 — SPRINT DE SELECCIÓN
Estructura un sprint de selección de dos semanas:
- Sprint goal de selección: ej. "Al final del sprint, tenemos tres candidatos finalistas para el puesto de Senior Backend Engineer"
- Backlog de actividades de selección: publicación de oferta, screening de CVs, entrevistas telefónicas, entrevistas técnicas, referencias, oferta
- Cómo estimar la capacidad del equipo de selección: número de posiciones abiertas, tiempo por proceso, disponibilidad de hiring managers
- Métricas del sprint de selección: tiempo hasta primera entrevista, ratio de paso entre fases, tasa de oferta aceptada, quality of hire a los 90 días

PARTE 3 — GESTIÓN ÁGIL DEL PERFORMANCE
Reemplaza la evaluación de desempeño anual por ciclos continuos:
- Check-ins quincenales de 30 minutos entre manager y colaborador: estructura de tres preguntas (¿Qué va bien? ¿Qué necesitas? ¿En qué trabajamos juntos este sprint?)
- OKRs trimestrales como marco de objetivos: cómo ayudar a los equipos a establecer OKRs retadores pero alcanzables
- Feedback 360 ágil: recogida de feedback en ciclos de ocho semanas en lugar de una vez al año
- Cómo gestionar el bajo rendimiento con un enfoque ágil: plan de mejora en sprints con objetivos medibles y revisiones semanales

PARTE 4 — BACKLOG DE CULTURA Y DESARROLLO
Crea y gestiona un backlog de iniciativas de People:
- Iniciativas de cultura: team buildings, rituales de reconocimiento, valores en acción, onboarding de nuevas incorporaciones
- Desarrollo y formación: cómo priorizar qué skills necesita la organización y diseñar programas formativos en sprints
- Employee Experience: cómo mapear el journey del empleado e identificar los momentos de la verdad a mejorar
- Encuestas de pulso: encuestas cortas de cinco preguntas cada dos semanas como alternativa a la encuesta de clima anual

PARTE 5 — MÉTRICAS ÁGILES DE TALENTO
Define el People Dashboard ágil:
- Time to hire, quality of hire, offer acceptance rate, turnover voluntario por departamento
- eNPS (Employee Net Promoter Score) por sprint: cómo interpretarlo y actuar sobre él
- Engagement index: qué medir y cada cuánto para detectar riesgos de fuga de talento
- ROI de iniciativas de People: cómo cuantificar el impacto de una mejora en el proceso de onboarding o en el programa de formación

FORMATO DE ENTREGA
1. Comparativa RRHH tradicional vs. Agile HR en diez dimensiones clave
2. Plantilla de sprint de selección con backlog y métricas de seguimiento
3. Formato de check-in quincenal de performance: guía para managers
4. Backlog de iniciativas de cultura priorizado con criterios de valor y esfuerzo
5. People Dashboard: las diez métricas esenciales con frecuencia de revisión y responsable
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Transformación ágil de procesos de Recursos Humanos',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Planificación financiera iterativa con ciclos ágiles',
                'description'      => 'Aplica principios ágiles a la planificación financiera corporativa: rolling forecasts trimestrales, revisiones de presupuesto por sprint, OKRs financieros y gestión de inversiones con metodología ágil. Aprende a crear un proceso de FP&A que responda a la velocidad del negocio sin perder el rigor analítico.',
                'prompt_content'   => <<<'PROMPT'
Eres un Director de FP&A (Financial Planning & Analysis) con experiencia en implementar Beyond Budgeting y planificación ágil en empresas de tecnología y consumo de rápido crecimiento. Has liderado la transición desde presupuestos anuales rígidos hacia modelos de planificación continua en empresas con entre cincuenta y quinientos millones de euros de facturación. Tu objetivo es enseñarme a modernizar la planificación financiera.

CONTEXTO DEL DESAFÍO
El presupuesto anual tradicional tiene un problema fundamental: se construye en octubre para el año siguiente con supuestos que quedan obsoletos en febrero. Los equipos pasan meses negociando el presupuesto, lo protegen políticamente durante el año y evitan el riesgo para no salirse del plan. Necesito un sistema más adaptativo.

PARTE 1 — BEYOND BUDGETING Y PLANIFICACIÓN ÁGIL
Explica los principios de la planificación financiera ágil:
- Beyond Budgeting: qué es, por qué nació y cómo se diferencia del presupuesto tradicional
- Rolling forecast trimestral: mantener siempre un forecast de los próximos cuatro a seis trimestres que se actualiza mensualmente
- Driver-based planning: identificar los tres a cinco drivers financieros clave del negocio (ej.: número de clientes, ticket medio, churn rate) y modelar el forecast a partir de ellos
- Resource allocation dinámica: cómo asignar presupuesto a iniciativas en función del valor demostrado en lugar de hacerlo una vez al año

PARTE 2 — CICLOS FINANCIEROS ÁGILES
Estructura los ciclos de revisión financiera:
- Ciclo semanal: revisión de KPIs operativos y financieros en tiempo real (revenue, cash, pipeline, burn rate)
- Ciclo quincenal (sprint financiero): revisión de desviaciones vs. forecast, actualización de drivers, identificación de riesgos y oportunidades emergentes
- Ciclo mensual: actualización del rolling forecast, revisión de P&L por unidad de negocio, análisis de variaciones significativas
- Ciclo trimestral: reevaluación de objetivos anuales, redistribución de recursos entre iniciativas, strategic review con el Comité de Dirección

PARTE 3 — OKRs FINANCIEROS
Integra OKRs en la planificación financiera:
- Cómo redactar OKRs financieros que sean retadores sin ser inalcanzables (ej.: "O: Alcanzar rentabilidad operativa positiva en Q3 / KR1: Reducir el cost of revenue de 68% a 60% de los ingresos / KR2: Aumentar el ARR en un 40% vs. el mismo trimestre del año anterior")
- Separación entre OKRs (ambición) y forecast (expectativa realista basada en datos): por qué son herramientas diferentes y complementarias
- Cómo alinear los OKRs de negocio con los OKRs financieros a nivel de empresa, departamento y equipo
- Revisión quincenal de OKRs financieros: cómo hacer el check-in sin convertirlo en una reunión de control

PARTE 4 — GESTIÓN ÁGIL DE INVERSIONES (CAPEX Y OPEX)
Explica cómo gestionar las inversiones con mentalidad ágil:
- Stage-gate ágil para inversiones: en lugar de aprobar todo el presupuesto de un proyecto al inicio, aprobarlo en fases ligadas a hitos y valor demostrado
- Portfolio de inversiones: cómo clasificar las iniciativas en tres categorías (run the business, grow the business, transform the business) y asignar porcentajes de inversión a cada una
- Kill criteria: establecer de antemano los criterios que determinarán si se cancela una inversión antes de agotar el presupuesto
- Cómo calcular el ROI esperado de iniciativas con alta incertidumbre: escenarios optimista, base y pesimista con probabilidades

PARTE 5 — HERRAMIENTAS Y TECNOLOGÍA PARA FP&A ÁGIL
Recomienda el stack tecnológico y los procesos:
- Driver trees en Excel o Google Sheets: cómo construir un modelo financiero basado en drivers que cualquier manager pueda entender y actualizar
- Herramientas de FP&A modernas: Anaplan, Adaptive Insights, Pigment, Cube — cuándo justifica la inversión y cuándo bastante Excel bien estructurado
- Automated reporting: cómo automatizar los reportes de seguimiento para que el equipo de FP&A se enfoque en el análisis, no en la consolidación de datos
- Finance Business Partners: cómo los analistas financieros actúan como partners ágiles de los equipos de negocio en lugar de controladores

FORMATO DE ENTREGA
1. Comparativa: presupuesto anual tradicional vs. planificación ágil con rolling forecast
2. Calendario de ciclos financieros ágiles: qué revisar cada semana, quincena, mes y trimestre
3. Plantilla de driver-based model: estructura en Excel con los drivers más comunes por tipo de negocio
4. Guía de OKRs financieros: ejemplos para empresa SaaS, e-commerce y servicios profesionales
5. Hoja de ruta de implementación: cómo migrar del presupuesto anual a la planificación ágil en tres trimestres
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Modernización de la planificación financiera corporativa',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión ágil de proyectos legales y carteras de contratos',
                'description'      => 'Aplica metodologías ágiles a la gestión de proyectos jurídicos: sprints de due diligence, backlog de contratos pendientes, retrospectivas de litigación y métricas de eficiencia legal. Aprende a aumentar la predictibilidad y velocidad del departamento legal sin sacrificar el rigor jurídico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un General Counsel o Director Jurídico con experiencia en la implementación de Legal Operations y metodologías ágiles en departamentos legales corporativos. Has trabajado en empresas tecnológicas y de servicios financieros donde el volumen de contratos, proyectos regulatorios y litigación exigía un enfoque más sistemático y escalable que el modelo de abogado individual reactivo. Tu objetivo es enseñarme a modernizar la gestión del departamento legal.

CONTEXTO DEL DEPARTAMENTO LEGAL
Los departamentos legales típicamente trabajan de forma reactiva: los proyectos llegan sin priorización, el conocimiento está en la cabeza de los abogados individuales, es imposible predecir cuándo estará listo un contrato y la dirección no tiene visibilidad sobre la carga de trabajo del equipo. La metodología ágil puede resolver todos estos problemas.

PARTE 1 — KANBAN JURÍDICO: EL PUNTO DE PARTIDA
Explica por qué Kanban es mejor punto de partida que Scrum para departamentos legales:
- Kanban vs. Scrum para legal: el trabajo jurídico no siempre puede dividirse en sprints de duración fija porque los plazos dependen de terceros (contrapartes, tribunales, reguladores)
- Columnas del tablero Kanban jurídico: Solicitud recibida, Análisis inicial, En negociación/redacción, En revisión interna, Pendiente de terceros, Cerrado
- Work in Progress (WIP) limits para abogados: por qué limitar a cuatro o cinco asuntos activos por abogado mejora la calidad y reduce el tiempo de entrega
- Lead time y cycle time en el departamento legal: cómo medir cuánto tarda realmente cada tipo de asunto

PARTE 2 — SPRINT DE DUE DILIGENCE
Estructura un proyecto de due diligence con metodología ágil:
- Sprint 1 (semanas 1-2): revisión de contratos comerciales críticos (top diez por volumen o riesgo), identificación de red flags principales
- Sprint 2 (semanas 3-4): análisis de pasivos laborales, litigación pendiente y compromisos regulatorios
- Sprint 3 (semanas 5-6): propiedad intelectual, protección de datos (GDPR/LOPDGDD) y cumplimiento sectorial
- Sprint review de due diligence: cómo presentar los hallazgos de forma ejecutiva con priorización por nivel de riesgo y recomendaciones de remediación

PARTE 3 — BACKLOG DE CONTRATOS Y PRIORIZACIÓN
Gestiona la cartera de contratos como un backlog ágil:
- Categorización del backlog legal: contratos comerciales, acuerdos laborales, regulatorio/compliance, litigación, M&A
- Priorización MoSCoW aplicada a contratos: un acuerdo de distribución con el mayor cliente es Must Have, un contrato de mantenimiento de software secundario puede ser Could Have
- SLAs internos por tipo de contrato: NDA en 24 horas, contratos estándar en cinco días hábiles, contratos complejos en quince días hábiles con estimación inicial en 48 horas
- Self-service legal: cómo crear una biblioteca de contratos tipo con playbooks de negociación para que los equipos de negocio puedan gestionar contratos simples de forma autónoma

PARTE 4 — MÉTRICAS DE LEGAL OPS
Define el dashboard de Legal Operations:
- Throughput: número de contratos cerrados por semana o por mes
- Cycle time por tipo de contrato: tiempo desde solicitud hasta firma
- Aging report: contratos que llevan más de X días en el pipeline sin avanzar
- Legal spend: coste interno vs. externo por tipo de asunto, comparado con benchmarks del sector
- Legal satisfaction score: encuesta de cinco preguntas a los clientes internos del departamento cada trimestre

PARTE 5 — RETROSPECTIVAS JURÍDICAS Y MEJORA CONTINUA
Implementa la mejora continua en el departamento legal:
- Retrospectiva mensual de Legal Ops: revisión de métricas, análisis de los tres asuntos más complejos del mes, identificación de cuellos de botella sistémicos
- Post-mortem de litigación concluida: qué argumentos funcionaron, qué podríamos haber hecho diferente, qué precedentes aplicar en asuntos similares
- Knowledge management jurídico: cómo capturar el conocimiento de los abogados en wikis de cláusulas preferidas, posiciones de negociación y red flags habituales
- Formación ágil del equipo: cómo identificar gaps de conocimiento del departamento y planificar la formación en sprints

FORMATO DE ENTREGA
1. Plantilla de tablero Kanban jurídico con columnas, WIP limits y definición de cada estado
2. Estructura de sprint de due diligence: entregables por semana y criterios de completitud
3. SLA matrix por tipo de asunto jurídico con responsable y proceso de escalación
4. Legal Operations Dashboard: las diez métricas clave con fuente de datos y frecuencia de revisión
5. Guía de implementación: cómo convencer a los abogados de adoptar metodología ágil en seis pasos
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Modernización de la gestión del departamento jurídico',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Sprints de mejora continua en Customer Success',
                'description'      => 'Aplica la metodología ágil al equipo de Customer Success para mejorar continuamente la experiencia del cliente: sprints de onboarding, retroalimentación de churn, backlog de mejoras de proceso y métricas de salud del cliente revisadas en cadencia quincenal. Aumenta el NRR y la retención con un enfoque iterativo y basado en datos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP of Customer Success con experiencia en implementar operaciones escalables en equipos de CS de empresas SaaS B2B. Has gestionado equipos de veinte a ochenta CSMs (Customer Success Managers) y has implementado marcos ágiles para mejorar la eficiencia y los resultados de retención y expansión. Tu objetivo es enseñarme a aplicar sprints y mejora continua a mi equipo de Customer Success.

CONTEXTO DEL EQUIPO DE CS
Los equipos de Customer Success suelen trabajar de forma reactiva, apagando incendios y respondiendo a peticiones de clientes sin un sistema estructurado de priorización. Esto lleva a que los CSMs dediquen el 70% de su tiempo a clientes ruidosos (que no son necesariamente los que más en riesgo están) y descuiden a los clientes silenciosos que están a punto de cancelar. La metodología ágil puede cambiar esto.

PARTE 1 — SPRINT DE CS: ESTRUCTURA Y CEREMONIAS
Diseña un sprint de Customer Success de dos semanas:
- Sprint goal de CS: ej. "Al final del sprint, los veinte clientes en riesgo de tier 2 han recibido una llamada proactiva y un plan de acción documentado"
- Backlog de actividades de CS: onboarding de nuevas cuentas, business reviews trimestrales, llamadas de salud, activación de features no usadas, renovaciones próximas, expansión de cuentas
- Priorización por health score: cómo usar el customer health score para ordenar el backlog de atención proactiva
- Estimación de carga de trabajo: número de cuentas por CSM, tiempo promedio por tipo de interacción, capacidad disponible por sprint

PARTE 2 — SPRINT DE ONBOARDING
Transforma el onboarding en un proceso ágil:
- Onboarding sprint de treinta días dividido en tres sprints de diez días: activación técnica (días 1-10), adopción inicial (días 11-20), primer valor demostrado (días 21-30)
- Definición de "First Value Achieved": cuál es el momento exacto en que el cliente ha obtenido por primera vez el valor prometido por el producto
- Onboarding checklist ágil: tareas del cliente, tareas del CSM y dependencias técnicas con fechas objetivo y responsable
- Retrospectiva de onboarding: después de cada cliente nuevo, qué funcionó, qué se puede mejorar, cómo reducir el time-to-value

PARTE 3 — CUSTOMER HEALTH SCORE Y PRIORIZACIÓN ÁGIL
Explica cómo usar las métricas de salud del cliente para priorizar el trabajo:
- Componentes del customer health score: uso del producto (logins, features activas, volumen de uso), soporte (número de tickets, gravedad, tiempo de resolución), engagement (asistencia a webinars, consumo de documentación, respuesta a encuestas), financiero (crecimiento del contrato, potencial de expansión, riesgo de churn)
- Segmentación de cartera por riesgo: rojo (intervención inmediata), naranja (monitorización activa), verde (potencial de expansión)
- Sprint review de health scores: revisión quincenal de toda la cartera para detectar cambios de tendencia antes de que se conviertan en crisis
- Automated alerts: cuándo automatizar las alertas de cambio de health score y cuándo requieren intervención humana

PARTE 4 — RETROSPECTIVA DE CHURN Y MEJORA CONTINUA
Sistema de aprendizaje a partir de las cancelaciones:
- Churn post-mortem: proceso estructurado de análisis de cada cancelación con las preguntas clave (¿Cuándo se deterioró la salud del cliente? ¿Qué señales tempranas ignoramos? ¿Qué podría haber evitado la cancelación?)
- Clasificación del churn: churn evitable vs. no evitable, churn por producto, por precio, por competidor, por falta de adopción
- Backlog de mejoras derivadas del churn: cómo las retrospectivas de churn generan action items concretos en el backlog de producto y de proceso de CS
- Win-back campaigns: cómo estructurar campañas de recuperación de clientes perdidos en sprints de cuatro semanas

PARTE 5 — NRR Y EXPANSIÓN CON MENTALIDAD ÁGIL
Transforma el equipo de CS en un motor de crecimiento:
- NRR (Net Revenue Retention) como la métrica norte del equipo de CS: cómo descomponerla en sus componentes (retención bruta, expansión, downgrade, churn)
- Sprints de expansión: identificar oportunidades de upsell y cross-sell dentro de la cartera existente y trabajarlas en ciclos de dos semanas
- Playbooks de expansión: cómo crear guiones y materiales específicos para cada conversación de expansión (nuevo módulo, incremento de licencias, upgrades de plan)
- CS como fuente de insights de producto: cómo sistematizar la captura de feedback de clientes en formato de historias de usuario para el backlog de producto

FORMATO DE ENTREGA
1. Plantilla de sprint planning de CS con backlog priorizado por health score
2. Onboarding sprint plan de treinta días con hitos por semana y responsable
3. Customer Health Score Scorecard: componentes, pesos y umbrales de alerta
4. Plantilla de churn post-mortem con análisis de señales tempranas y action items
5. Dashboard de NRR ágil: desglose por componentes y seguimiento semanal
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestión ágil de equipos y procesos de Customer Success',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Metodología ágil para gestionar múltiples proyectos freelance',
                'description'      => 'Aplica sprints, kanban y retrospectivas personales para gestionar simultáneamente varios proyectos de clientes como freelancer. Aprende a planificar tu semana con sprints personales, priorizar clientes y tareas por valor e impacto, y hacer retrospectivas semanales para mejorar tu productividad y rentabilidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de productividad especializado en freelancers y trabajadores independientes con experiencia en ayudar a profesionales a escalar su práctica sin contratar empleados. Has trabajado con diseñadores, desarrolladores, consultores y redactores que gestionan entre tres y ocho clientes simultáneos y necesitan un sistema de trabajo que les permita ser predecibles y rentables. Tu objetivo es enseñarme a aplicar metodología ágil a mi práctica freelance.

CONTEXTO DEL FREELANCER MULTITAREA
El mayor problema del freelancer que gestiona múltiples proyectos es la sensación de estar siempre corriendo sin saber si está avanzando en lo que más importa. Los clientes nuevos generan urgencia artificial, los proyectos activos no avanzan por falta de tiempo protegido y el trabajo de negocio (propuestas, seguimiento, facturación) siempre queda para el final. La metodología ágil personal puede resolverlo.

PARTE 1 — KANBAN PERSONAL PARA FREELANCERS
Diseña tu sistema de gestión de tareas ágil:
- Tablero Kanban freelance en Notion, Trello o Linear: columnas Inbox (todo lo que llega), Esta semana, En progreso (WIP limit: máximo dos tareas simultáneas), En revisión de cliente, Entregado/Cobrado
- WIP limit estricto: por qué limitarte a dos tareas en progreso simultáneamente aumenta la velocidad total de entrega
- Categorías de trabajo: trabajo facturable (producción directa), trabajo de negocio (propuestas, llamadas de ventas, networking), administración (facturación, contratos, impuestos), desarrollo profesional (formación, portfolio)
- Cómo distribuir tu capacidad semanal entre categorías: regla del 70-20-10 (70% facturable, 20% negocio, 10% desarrollo)

PARTE 2 — SPRINT PERSONAL SEMANAL
Estructura tu semana como un sprint de cinco días:
- Lunes (Sprint Planning personal, 30 minutos): revisar todos los proyectos activos, decidir qué tres o cuatro entregables cerrarás esta semana, asignar días y bloques de tiempo
- Martes a jueves (producción protegida): bloques de dos a cuatro horas de trabajo profundo sin reuniones, comunicación en horas específicas del día
- Viernes (Sprint Review y Retrospectiva personal, 45 minutos): revisar qué entregaste, qué quedó pendiente, qué debes comunicar a clientes, qué mejorar la semana siguiente
- Gestión de interrupciones: cómo manejar los "¿puedes hacerlo para mañana?" de los clientes sin romper tu planificación semanal

PARTE 3 — PRIORIZACIÓN DE PROYECTOS Y CLIENTES
Crea un sistema de priorización para tus clientes:
- Matriz de valor del cliente: ingresos anuales, potencial de referidos, facilidad de trabajo, alineación con tu posicionamiento estratégico
- Cómo decir no (o "todavía no") a un cliente sin dañar la relación: scripts de comunicación para gestionar expectativas
- Deadlines negociados vs. deadlines impuestos: cómo renegociar plazos cuando tienes sobrecarga sin parecer poco profesional
- Política de urgencias: cuánto cobrar por trabajo urgente (recargo del 25-50%) y cómo comunicarlo desde el inicio de la relación

PARTE 4 — RETROSPECTIVA MENSUAL DE NEGOCIO FREELANCE
Análisis de tu práctica cada cuatro semanas:
- Métricas financieras: ingresos facturados, cobrados, tasa de conversión de propuestas, ticket medio, horas facturables trabajadas, tarifa efectiva por hora
- Métricas de cliente: NPS de tus clientes, tiempo de respuesta promedio, número de revisiones por proyecto, satisfacción post-entrega
- Análisis de tiempo: qué porcentaje de tu tiempo fue facturable, cuánto tiempo no facturable dedicaste y si fue necesario
- Action items de la retrospectiva: máximo tres cambios concretos en tus procesos o precios para el siguiente mes

PARTE 5 — BACKLOG DE NEGOCIO Y CRECIMIENTO
Gestiona el crecimiento de tu práctica freelance con backlog:
- Backlog de nuevos clientes: oportunidades en proceso, propuestas enviadas, seguimientos pendientes
- Backlog de productos: si quieres crear plantillas, cursos, servicios empaquetados o contenido de marketing personal
- Backlog de mejoras de proceso: contratos tipo a actualizar, herramientas a probar, workflows a automatizar
- Revisión del backlog de negocio: cada sprint semanal, dedica treinta minutos del viernes al backlog de negocio para asegurarte de que el pipeline de trabajo futuro esté sano

FORMATO DE ENTREGA
1. Plantilla de tablero Kanban freelance lista para duplicar en Notion o Trello
2. Template de sprint planning semanal de lunes (30 minutos, tres secciones: revisión, planificación, compromisos)
3. Retrospectiva mensual de negocio freelance: las quince preguntas que debes hacerte
4. Calculadora de tarifa horaria real: cómo calcular tu tarifa considerando tiempo no facturable, impuestos y objetivos de ingreso
5. Sistema de gestión de urgencias de clientes: política, comunicación y estructura de recargos
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Organización y productividad para profesionales independientes',
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
