<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills317Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Diseño de programas de employer branding auténtico para equipos de marketing',
                'description'       => 'Construye una estrategia de employer branding coherente con la cultura real del equipo de marketing para atraer talento creativo y digital. Aprende a comunicar la propuesta de valor del empleador de forma auténtica sin caer en mensajes vacíos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de employer branding y marketing de talento con experiencia en equipos creativos y digitales. Tu misión es ayudarme a diseñar un programa de employer branding auténtico específicamente orientado a atraer y retener talento de marketing.

## Por qué el employer branding genérico no funciona en marketing

Los profesionales de marketing son, precisamente, expertos en detectar mensajes vacíos y promesas corporativas sin sustancia. Un employer branding construido sobre valores de catálogo ("somos una familia", "innovamos constantemente") genera el efecto contrario: desconfianza. El employer branding auténtico parte de la realidad vivida por el equipo y la comunica con la misma calidad creativa que exigimos a las campañas externas.

## Fase 1 — Diagnóstico de la experiencia real del empleado

Antes de comunicar nada, hay que entender qué es verdadero:
- Diseña cinco preguntas de entrevista interna para descubrir qué es lo que genuinamente valoran los miembros actuales del equipo de marketing de su experiencia diaria.
- ¿Qué momentos del trabajo describen como "los mejores días"? ¿Qué situaciones los hacen sentir orgullosos?
- ¿Qué aspectos de la cultura del equipo son difíciles de encontrar en otras empresas?
- ¿Qué frustraciones existen que vale la pena reconocer honestamente en lugar de ocultar?
- ¿Qué tipo de autonomía, herramientas, proyectos o aprendizaje tiene el equipo que no se comunica externamente?

## Fase 2 — Construcción de la propuesta de valor del empleador (EVP)

Con los inputs del diagnóstico, ayúdame a construir la EVP para el equipo de marketing:
- Define los tres o cuatro pilares de la experiencia del empleado en este equipo (por ejemplo: "autonomía creativa", "impacto medible", "aprendizaje constante", "cultura de feedback").
- Para cada pilar, identifica una evidencia concreta que lo respalde (no una afirmación, sino un ejemplo real o política específica).
- Redacta la EVP en un tono auténtico, directo y sin jerga corporativa.
- Diferencia la EVP para distintos perfiles: ¿qué valora más un content strategist vs. un growth marketer vs. un brand designer?

## Fase 3 — Estrategia de contenidos para employer branding

Diseña un plan de contenidos para comunicar la EVP de forma orgánica y creíble:
- **Contenido generado por empleados**: ¿qué formatos (vídeos cortos, artículos, threads de LinkedIn) pueden crear los propios miembros del equipo para dar visibilidad auténtica a su día a día?
- **Behind the scenes**: ideas de contenido que muestren el proceso creativo, los errores y aprendizajes, las herramientas usadas.
- **Casos de impacto**: cómo documentar y comunicar proyectos donde el equipo tuvo un impacto medible.
- **Canales prioritarios**: LinkedIn, Instagram, un blog de empresa, eventos del sector, podcasts especializados.
- Propón un calendario de contenidos de employer branding para los primeros 90 días.

## Fase 4 — Experiencia de candidato diferenciada

El employer branding se prueba en el proceso de selección:
- ¿Cómo debe ser la descripción de puesto para reflejar la EVP real y no parecer una lista de requisitos genéricos?
- Diseña un proceso de entrevista que, además de evaluar al candidato, le permita experimentar la cultura del equipo.
- ¿Qué touchpoints del proceso de selección pueden mejorarse para dejar una impresión memorable, incluso en los candidatos no seleccionados?
- ¿Cómo se estructura el mensaje de rechazo para preservar la experiencia y mantener la puerta abierta?

## Fase 5 — Métricas de employer branding

Define los KPIs para medir el impacto del programa:
- Tiempo de cobertura de vacantes en el equipo de marketing vs. benchmark anterior.
- Calidad de candidatos (definida por el porcentaje que supera la primera criba).
- Tasa de aceptación de ofertas.
- eNPS (Net Promoter Score de empleado) del equipo de marketing.
- Engagement en contenidos de employer branding (alcance orgánico, shares por empleados).
- Fuente de candidatos: ¿aumentan las referencias internas y las candidaturas espontáneas?

## Entregable

Genera un documento de estrategia de employer branding listo para presentar al director de RRHH y al responsable de marketing, con todos los elementos anteriores estructurados en secciones claras. Incluye ejemplos de copy para LinkedIn, una propuesta de EVP redactada y el calendario de contenidos para el primer trimestre.

Pídeme información sobre el tamaño del equipo, la industria y los perfiles de talento prioritarios para personalizar el plan.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Estrategia de atracción de talento creativo y digital mediante employer branding auténtico',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Programa de onboarding técnico estructurado para nuevos desarrolladores',
                'description'       => 'Diseña un proceso de incorporación técnica para desarrolladores que reduzca el tiempo hasta la primera contribución significativa y mejore la retención en los primeros seis meses. Cubre desde la configuración del entorno hasta la integración cultural y técnica.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un engineering manager con experiencia en el diseño de programas de onboarding técnico para equipos de desarrollo de software. Tu misión es ayudarme a crear un programa de incorporación estructurado que maximice la velocidad de integración y la retención de nuevos desarrolladores.

## El coste oculto del onboarding mal diseñado

Un desarrollador tarda de promedio entre tres y seis meses en ser verdaderamente productivo en un nuevo equipo. Un onboarding mal diseñado puede extender ese período a nueve meses o provocar una salida temprana, con un coste de reposición que puede superar el 150% del salario anual. Un buen programa de onboarding no es solo una cuestión de bienestar: es una inversión con retorno medible.

## Semana 0 — Pre-boarding: antes del primer día

Ayúdame a diseñar el proceso de pre-boarding que ocurre antes del primer día:
- ¿Qué accesos, equipos y herramientas deben estar listos el día de incorporación? Genera una checklist para el equipo de IT y el engineering manager.
- ¿Qué información debe recibir el nuevo desarrollador antes de llegar? (organigrama del equipo, stack tecnológico, guía de herramientas, lectura recomendada sobre la arquitectura del sistema)
- ¿Quién debe ser el "onboarding buddy" y cuáles son sus responsabilidades específicas?
- ¿Cómo se presenta al nuevo miembro al equipo antes de que llegue para reducir la ansiedad social del primer día?

## Semana 1 — Orientación y contexto

El primer objetivo no es que el desarrollador escriba código, sino que entienda el contexto:
- Diseña una agenda detallada para la primera semana: reuniones de contexto con quién, duración y objetivo de cada una.
- ¿Cómo se comunica la visión del producto, la arquitectura del sistema y las decisiones de diseño pasadas?
- ¿Cómo se presenta la cultura de ingeniería: principios de diseño, estándares de código, proceso de revisión de código, gestión de deuda técnica?
- Define la primera tarea técnica: debe ser real, útil y de alcance acotado para permitir una primera contribución exitosa en los primeros cinco días.

## Semanas 2 a 4 — Rampa de contribución progresiva

Diseña un plan de 30 días con contribuciones de complejidad creciente:
- Semana 1: primera contribución de código (bug fix o feature pequeña bien documentada).
- Semana 2: primera participación activa en una revisión de código como revisor.
- Semana 3: primera tarea de complejidad media con diseño técnico propio.
- Semana 4: primera presentación al equipo de una solución técnica implementada.

Para cada hito, define cómo se mide el éxito y cómo el engineering manager proporciona feedback estructurado.

## Días 30 a 90 — Integración profunda

Más allá del código, la integración técnica requiere:
- Comprensión del sistema completo: guía de exploración de la arquitectura por dominios.
- Participación en decisiones: ¿cuándo y cómo se invita al nuevo miembro a participar en decisiones de diseño?
- Relaciones con el equipo: estructura de 1:1 con el manager y con compañeros clave.
- Alineación de expectativas: ¿qué se espera del desarrollador al final del mes 1, 3 y 6?

## Evaluación y mejora continua del programa de onboarding

- Diseña encuestas de feedback para el nuevo desarrollador al final de la semana 1, el mes 1 y el mes 3.
- Define las métricas del onboarding: tiempo hasta la primera contribución aprobada, número de PRs en el primer mes, eNPS al tercer mes.
- ¿Cómo se recoge feedback del buddy y del manager para mejorar el programa en cada iteración?

## Entregable

Genera los siguientes documentos:
1. Checklist de pre-boarding (para IT y manager).
2. Agenda detallada de la primera semana (día a día).
3. Plan de 90 días con hitos y métricas de éxito.
4. Plantilla de encuesta de feedback de onboarding.
5. Guía del onboarding buddy: rol, responsabilidades y sugerencias de conversaciones.

Indícame el tamaño del equipo, el stack tecnológico principal y si es trabajo presencial, remoto o híbrido para adaptar el programa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño de programa de incorporación para desarrolladores de software',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Creación de planes de carrera personalizados para diseñadores UX/UI',
                'description'       => 'Diseña rutas de desarrollo profesional claras y motivadoras para diseñadores de UX/UI en distintos niveles de senioridad. Combina el crecimiento técnico, el liderazgo y la especialización para aumentar el engagement y reducir la rotación del equipo de diseño.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un design manager con experiencia en el desarrollo de talento de diseño UX/UI en equipos de producto. Tu misión es ayudarme a construir planes de carrera personalizados y marcos de progresión profesional para diseñadores en distintos niveles de senioridad.

## Por qué los planes de carrera de diseño son diferentes

A diferencia de otras disciplinas, el diseño UX/UI tiene una dualidad inherente: la ruta del colaborador individual (IC track), que culmina en roles de principal designer o design fellow, y la ruta de gestión (management track), que lleva hacia design lead, design manager y VP of Design. Muchos diseñadores talentosos abandonan equipos no porque el trabajo sea malo, sino porque no ven cómo crecer dentro sin convertirse en managers, algo que no todos desean. Un buen sistema de planes de carrera resuelve esta tensión.

## Módulo 1 — Marco de competencias por nivel

Construye el marco de competencias para los niveles principales del equipo de diseño:

**Junior Designer (0-2 años)**:
- Competencias técnicas: dominio de herramientas (Figma), sistemas de diseño, fundamentos de tipografía y color.
- Competencias de proceso: ejecución de wireframes y prototipos, participación en research guiado.
- Competencias de colaboración: comunicación con desarrolladores, participación en critiques.

**Mid-level Designer (2-5 años)**:
- Competencias técnicas: diseño de sistemas de componentes, diseño de accesibilidad, motion design básico.
- Competencias de proceso: facilitación de sesiones de research, análisis de datos cualitativos.
- Competencias de liderazgo: mentoría informal, gestión de stakeholders junior, presentación de propuestas de diseño.

**Senior Designer (5+ años)**:
- Competencias técnicas: arquitectura de sistemas de diseño, definición de estándares de calidad.
- Competencias estratégicas: conexión entre negocio y diseño, influencia en el roadmap de producto.
- Competencias de liderazgo: mentoría formal, facilitación de sprints de diseño, influencia cross-funcional.

**Principal Designer / Design Lead**:
- Visión de experiencia a nivel de plataforma o empresa.
- Definición de la cultura y la práctica de diseño.
- Representación del diseño a nivel ejecutivo.

## Módulo 2 — Plan de carrera individual (IDP)

Para cada diseñador del equipo, guíame en la creación de un IDP (Individual Development Plan) personalizado:
- ¿Cuáles son sus aspiraciones a uno, tres y cinco años? (gestión vs. especialización vs. entrepreneurship)
- ¿Qué competencias del siguiente nivel ya tiene y cuáles necesita desarrollar?
- Define dos o tres proyectos de desarrollo concretos para los próximos seis meses: proyectos de stretch, mentoría, formación específica.
- ¿Qué oportunidades dentro de la empresa pueden acelerar su desarrollo? (liderazgo de un proyecto estratégico, colaboración con otro equipo, participación en conferencias)

## Módulo 3 — Conversaciones de desarrollo estructuradas

Diseña la cadencia y estructura de las conversaciones de desarrollo:
- **1:1 semanal**: agenda estándar para mantener el pulso (proyectos actuales, bloqueos, estado emocional).
- **Check-in de desarrollo mensual**: revisión de progreso en el IDP, ajuste de objetivos.
- **Revisión semestral de carrera**: evaluación formal de competencias, actualización del plan de carrera, conversación sobre compensación.

Genera plantillas de preguntas para cada tipo de conversación que faciliten diálogos profundos sobre el desarrollo sin que resulten incómodos o forzados.

## Módulo 4 — Reconocimiento y visibilidad del crecimiento

El crecimiento invisible destruye la motivación:
- ¿Cómo se comunican los avances de carrera dentro del equipo y la empresa?
- ¿Qué rituales de reconocimiento concretos tiene el equipo de diseño?
- ¿Cómo se visibiliza el trabajo de los diseñadores ante stakeholders de negocio y liderazgo?

## Módulo 5 — Indicadores de salud del desarrollo del equipo

Define las métricas para saber si el programa de desarrollo está funcionando:
- Porcentaje del equipo con IDP actualizado.
- Tasa de promociones internas vs. contrataciones externas para cubrir roles senior.
- eNPS específico para la dimensión de "oportunidades de crecimiento".
- Tasa de rotación voluntaria por nivel.

Indícame el tamaño del equipo de diseño, los niveles presentes actualmente y el tipo de empresa (startup, scale-up, corporación) para personalizar el marco.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Desarrollo de marcos de progresión profesional para equipos de diseño UX/UI',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Estrategias de motivación y retención de equipos comerciales de alto rendimiento',
                'description'       => 'Diseña un sistema integral de motivación para equipos de ventas que vaya más allá de las comisiones, combinando reconocimiento, desarrollo profesional y cultura de logro. Reduce la rotación de los mejores comerciales con intervenciones estructuradas y medibles.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas con experiencia en la construcción de equipos comerciales de alto rendimiento y bajas tasas de rotación. Tu misión es ayudarme a diseñar un sistema integral de motivación y retención para mi equipo de ventas que vaya mucho más allá de la estructura de comisiones.

## El mito de que los vendedores solo se mueven por dinero

Los estudios sobre rotación en equipos de ventas consistentemente muestran que el dinero raramente es el factor principal de salida. Los motivos más frecuentes son: falta de reconocimiento, ausencia de oportunidades de crecimiento, management deficiente, cultura tóxica y falta de propósito. Un buen sistema de motivación aborda todos estos factores de forma sistemática.

## Módulo 1 — Diagnóstico de los motivadores individuales

No todos los comerciales se motivan igual. Guíame para identificar los motivadores de cada miembro del equipo:
- Diseña una entrevista de motivación (15 minutos) para entender qué impulsa a cada comercial: ¿el reconocimiento público, el desarrollo de habilidades, la autonomía, la competición, el propósito, la estabilidad económica?
- ¿Cómo adaptar el estilo de gestión y los incentivos a los distintos perfiles motivacionales?
- ¿Cómo identificar las señales tempranas de desmotivación antes de que llegue la renuncia?

## Módulo 2 — Sistema de reconocimiento y logro

Diseña un sistema de reconocimiento que funcione para equipos comerciales:
- **Reconocimiento inmediato**: ¿qué rituales de celebración de logros se pueden implementar en el día a día? (slack de logros, celebraciones en reuniones de equipo, comunicación a liderazgo)
- **Reconocimiento formal**: ¿cómo diseñar un programa de "vendedor del mes/trimestre" que sea percibido como justo y aspiracional en lugar de favoritismo?
- **Reconocimiento de los líderes**: ¿qué papel juega el director de ventas y el CEO en el reconocimiento individual y de equipo?
- **Reconocimiento de los hitos de carrera**: aniversarios, primera gran cuenta, primer millón de ARR, primera certificación.

## Módulo 3 — Estructura de compensación y gamificación

Más allá del plan de comisiones base, ayúdame a diseñar:
- **SPIFs** (Sales Performance Incentive Funds): incentivos puntuales para productos, segmentos o períodos específicos.
- **Clubes de élite**: el "President's Club" u equivalente: criterios, experiencia y comunicación del programa.
- **Gamificación ética**: rankings visibles, retos de equipo, desafíos de habilidades. ¿Cómo evitar que la competición se vuelva tóxica?
- **Beneficios no monetarios con alto valor percibido**: horario flexible, días adicionales de vacaciones por rendimiento, presupuesto de herramientas personales, acceso a mentoría de líderes de ventas externos.

## Módulo 4 — Desarrollo profesional y plan de carrera comercial

La falta de crecimiento percibido es la principal causa de salida de los mejores comerciales:
- Define las rutas de carrera disponibles: ¿qué opciones de crecimiento existen más allá de "vender más"? (account management, sales engineering, enablement, management)
- ¿Cómo se estructuran los planes de desarrollo individual para comerciales con distintas aspiraciones?
- Define los criterios de promoción: ¿qué métricas de rendimiento y competencias se requieren para pasar de SDR a AE, de AE a Senior AE, de Senior AE a Team Lead?
- ¿Qué inversión en formación y certificaciones está disponible para el equipo comercial?

## Módulo 5 — Gestión proactiva de la retención

Prevenir la rotación antes de que ocurra:
- Diseña un "stay interview" (entrevista de permanencia): preguntas que un manager puede hacer trimestralmente para detectar riesgo de salida antes de que se cristalice.
- ¿Cómo gestionar las contrapropuestas cuando un buen comercial recibe una oferta externa?
- Define las señales de alarma de riesgo de fuga: cambios de comportamiento, caída de rendimiento, distancia emocional.
- Construye un protocolo de retención de talento crítico: quién actúa, cuándo y cómo.

## Entregable

Genera un plan de retención de 90 días con iniciativas concretas, responsables y métricas para cada módulo. Incluye también una plantilla de "stay interview" y un framework de planes de desarrollo individual para el equipo comercial.

Indícame el tamaño del equipo, el tipo de ventas (B2B/B2C, enterprise/SMB, ciclo largo/corto) y los principales retos de retención actuales para personalizar el plan.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Reducción de rotación y mejora del engagement en equipos comerciales',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión del desarrollo profesional de los equipos de producto',
                'description'       => 'Construye un sistema de desarrollo profesional para product managers en distintos niveles de senioridad que equilibre el crecimiento técnico, estratégico y de liderazgo. Diseña rutas de carrera claras que aumenten la retención del talento de producto más valioso.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP de Product con experiencia en la construcción y el desarrollo de equipos de product management de alto rendimiento. Tu misión es ayudarme a diseñar un sistema completo de desarrollo profesional para los product managers de mi organización.

## El desafío único del desarrollo de product managers

El desarrollo de PMs es especialmente complejo porque el rol requiere la síntesis de múltiples disciplinas: estrategia de negocio, tecnología, diseño, análisis de datos y liderazgo sin autoridad formal. No existe una única trayectoria de carrera y las expectativas varían enormemente entre empresas. Sin un sistema estructurado, los mejores PMs se van a empresas que les ofrezcan crecimiento más claro.

## Módulo 1 — Marco de competencias por nivel de PM

Define el marco de competencias para cada nivel de la organización de producto:

**Associate PM o PM Junior (0-2 años)**:
- Comprensión del ciclo de vida del producto y metodologías ágiles.
- Escritura de user stories y criterios de aceptación de calidad.
- Análisis básico de métricas de producto (funnel, activación, retención).
- Gestión de un equipo de desarrollo pequeño con supervisión cercana.
- Comunicación efectiva de prioridades al equipo de desarrollo.

**PM (2-5 años)**:
- Gestión autónoma de un área de producto o un squad completo.
- Definición de OKRs de producto y seguimiento de métricas de negocio.
- Facilitación de discovery con usuarios y stakeholders.
- Priorización basada en datos con marcos como RICE, ICE o Kano.
- Comunicación de roadmap a stakeholders de negocio sin supervisión.

**Senior PM (5+ años)**:
- Responsabilidad sobre una línea de producto o un dominio de negocio.
- Influencia en la estrategia de producto de la empresa.
- Mentoría formal de PMs junior.
- Gestión de conflictos entre stakeholders de alto nivel.
- Visión y narrativa de producto de largo plazo.

**Principal PM / Group PM**:
- Definición de la estrategia de producto a nivel de empresa o línea de negocio.
- Liderazgo de múltiples equipos de producto de forma matricial.
- Influencia en la cultura de producto de la organización.
- Representación del área de producto a nivel ejecutivo y ante inversores.

## Módulo 2 — Rutas de carrera duales en producto

Define las dos rutas principales y cómo transitar entre ellas:

**Ruta de especialista (IC track)**: PM → Senior PM → Principal PM → Distinguished PM
- Se valoran la profundidad de conocimiento en un dominio, la influencia en la estrategia y el pensamiento de sistemas.
- No requiere gestión de personas pero sí liderazgo por influencia.

**Ruta de gestión (management track)**: PM → Senior PM → Group PM → Head of Product → VP of Product → CPO
- Se valoran la construcción de equipos, el desarrollo del talento y la coordinación entre squads.

¿Cómo se toma la decisión de qué ruta seguir? Define un proceso de conversación con el manager para explorar aspiraciones sin presionar hacia ninguna dirección.

## Módulo 3 — Plan de desarrollo individual para PMs

Para cada PM del equipo, diseña el IDP con:
- Autoevaluación de competencias: plantilla de 20 preguntas para que el PM evalúe su nivel actual vs. el nivel objetivo.
- Áreas de desarrollo priorizadas: no más de dos o tres en paralelo para evitar dispersión.
- Proyectos de stretch: asignaciones concretas que expanden las capacidades actuales del PM.
- Recursos de aprendizaje: libros, cursos, comunidades, conferencias y mentores externos recomendados.
- Hitos de progreso a 30, 60 y 90 días.

## Módulo 4 — Rituales de desarrollo del equipo de producto

Crea rituales que conviertan el aprendizaje en parte de la cultura:
- **Product reviews como aprendizaje colectivo**: ¿cómo estructurar las revisiones de producto para que sean ocasiones de desarrollo del equipo, no solo de accountability?
- **Biblioteca de casos de producto**: documentación de decisiones pasadas, errores y aprendizajes como recurso compartido del equipo.
- **Sesiones de benchmarking de producto**: análisis colectivo de productos líderes del sector como práctica de equipo.
- **Invitados externos**: PMs de otras empresas o CPOs que compartan su experiencia con el equipo.

## Módulo 5 — Métricas de efectividad del programa de desarrollo

- Porcentaje de PMs con IDP activo y actualizado en los últimos 90 días.
- Tasa de promociones internas vs. contrataciones externas para roles senior de producto.
- Tasa de retención de PMs por encima de la mediana de rendimiento.
- Tiempo promedio de permanencia de los PMs en el equipo antes de la primera promoción.
- Satisfacción con el desarrollo profesional en la encuesta de engagement.

Indícame el tamaño del equipo de producto, los niveles presentes y el tipo de empresa para personalizar el marco de competencias y las rutas de carrera.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño de marcos de carrera y planes de desarrollo para product managers',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Diseño de encuestas de engagement y planes de acción para RRHH',
                'description'       => 'Crea encuestas de compromiso del empleado rigurosas y metodológicamente sólidas, y diseña procesos de análisis y planes de acción que conviertan los datos en mejoras reales de la experiencia del empleado. Evita el "survey fatigue" con una cadencia y diseño óptimos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de People & Culture con experiencia en el diseño de programas de medición del engagement y en la transformación de datos de encuestas en cambios organizacionales reales. Tu misión es ayudarme a construir un sistema completo de medición y mejora del compromiso del empleado.

## El problema de las encuestas de engagement que no cambian nada

La principal queja de los empleados sobre las encuestas de engagement no es que sean largas o frecuentes, sino que "nada cambia después". Las encuestas que no van seguidas de acciones visibles generan más desconfianza que las que nunca se hacen. Un buen programa de engagement mide con precisión, comunica los resultados con transparencia y ejecuta planes de acción con rendición de cuentas.

## Fase 1 — Diseño de la encuesta de engagement

Ayúdame a construir una encuesta rigurosa y accionable:

**Dimensiones a medir** (selecciona las más relevantes para tu contexto):
- Claridad de rol y expectativas.
- Relación con el manager directo.
- Relación con el equipo y sentido de pertenencia.
- Oportunidades de desarrollo y crecimiento.
- Reconocimiento y feedback.
- Propósito y conexión con la misión de la empresa.
- Recursos, herramientas y autonomía para hacer bien el trabajo.
- Bienestar y equilibrio vida-trabajo.
- Confianza en el liderazgo de la empresa.
- Intención de permanencia (likelihood to stay).

**Diseño de preguntas**:
- Para cada dimensión, redacta tres preguntas en escala Likert de 5 puntos (1 = totalmente en desacuerdo, 5 = totalmente de acuerdo).
- Incluye dos preguntas abiertas al final: "¿Qué es lo que más valoras de trabajar aquí?" y "¿Qué cambiarías si pudieras?"
- Incluye el eNPS como pregunta estandarizada: "¿Con qué probabilidad recomendarías esta empresa como lugar para trabajar?"
- Diseña la encuesta para completarse en menos de 10 minutos (máximo 25 preguntas cerradas + 2 abiertas).

**Principios de diseño**:
- Garantía de anonimato real: ¿cómo comunicar y garantizar que los resultados individuales no son identificables?
- Neutralidad del lenguaje: evitar preguntas que induzcan respuestas positivas.
- Consistencia temporal: mantener un núcleo de preguntas invariable para medir tendencias.

## Fase 2 — Cadencia y segmentación

- **Encuesta anual completa**: 25-30 preguntas para una visión completa del engagement.
- **Pulsos trimestrales**: 5-8 preguntas sobre las dimensiones prioritarias o en las que se han implementado cambios.
- **Pulsos de onboarding**: encuestas específicas a los 30, 60 y 90 días de incorporación.
- **Encuestas de salida**: qué preguntar a los empleados que se van para capturar inteligencia de retención.

¿Cómo segmentar los resultados de forma que sean útiles sin comprometer el anonimato? Define los cortes mínimos de tamaño de grupo para reportar resultados (recomendación general: mínimo cinco respondentes por segmento).

## Fase 3 — Análisis y comunicación de resultados

- Define el proceso de análisis: ¿quién accede a los datos brutos, quién ve los datos agregados, cómo se estructuran los informes por equipo vs. empresa?
- Diseña la plantilla de informe de resultados para managers: datos de su equipo vs. benchmark de la empresa, tendencias, top 3 de fortalezas y top 3 de áreas de mejora.
- ¿Cómo comunicar los resultados a toda la empresa de forma transparente y constructiva, sin crear pánico o interpretaciones erróneas?
- Propón una cadencia de comunicación: ¿cuándo y cómo se comparten los resultados con el comité de dirección, con los managers y con el conjunto de la plantilla?

## Fase 4 — Planes de acción por equipo

El corazón del programa es convertir datos en acciones:
- Diseña un proceso de construcción del plan de acción en cada equipo: reunión de resultados con el equipo, identificación colaborativa de prioridades, definición de acciones con responsable y plazo.
- Genera una plantilla de plan de acción: dimensión de mejora, indicador actual, objetivo en 6 meses, acciones concretas, responsable, recursos necesarios, fecha de revisión.
- ¿Cómo se hace seguimiento público del avance de los planes de acción para mantener la credibilidad del programa?

## Fase 5 — Gobernanza y mejora continua

Define la estructura de gobernanza del programa:
- Propietario del programa a nivel empresa.
- Responsabilidades de los managers en la ejecución de planes de acción.
- Proceso de escalada cuando un equipo tiene resultados críticos.
- Ciclo de revisión y mejora del diseño de la encuesta.

Indícame el tamaño de la empresa, el sector y los principales retos de cultura que han identificado para personalizar el diseño de la encuesta y el proceso de planes de acción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño e implementación de programas de medición y mejora del engagement',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis del retorno de inversión de programas de experiencia del empleado',
                'description'       => 'Construye modelos financieros que cuantifiquen el impacto económico de las iniciativas de experiencia del empleado: reducción de rotación, aumento de productividad y mejora del employer branding. Presenta casos de negocio sólidos para justificar inversión en personas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director financiero con experiencia en el análisis del retorno de inversión de programas de recursos humanos y capital humano. Tu misión es ayudarme a construir modelos financieros rigurosos que demuestren el impacto económico de las inversiones en experiencia del empleado.

## El problema de justificar inversiones en personas sin datos financieros

Las iniciativas de experiencia del empleado (programas de onboarding, encuestas de engagement, planes de carrera, beneficios de bienestar) son frecuentemente las primeras en ser recortadas en períodos de presión financiera porque se perciben como costes sin ROI claro. Esta percepción es errónea, pero solo se puede rebatir con modelos financieros sólidos. Este análisis construye esos modelos.

## Modelo 1 — Coste de la rotación de empleados

El coste de rotación es el ROI más fácil de cuantificar. Para cada rol, calcula:

**Costes directos de reposición**:
- Coste de selección: honorarios de headhunter (15-25% del salario anual) o coste interno de HR × horas dedicadas.
- Coste de onboarding: formación, materiales, coste del tiempo del trainer y del buddy.
- Coste de equipos y licencias de software: provisión de hardware, licencias, accesos.

**Costes indirectos (frecuentemente ignorados)**:
- Pérdida de productividad durante el período de rampa: ¿cuántos meses tarda el nuevo empleado en alcanzar el 100% de productividad? El coste es la diferencia entre el salario pagado y la productividad generada.
- Pérdida de productividad del equipo: ¿cuántas horas invierte el equipo en entrevistar, incorporar y mentorar al nuevo miembro?
- Pérdida de conocimiento institucional: difícil de cuantificar pero real. Estima el valor del conocimiento de relaciones, procesos y sistemas que se va con el empleado.
- Impacto en el equipo restante: aumento temporal de carga de trabajo y posible efecto contagio de salidas adicionales.

Genera una hoja de cálculo modelo con estos inputs y el coste total de rotación por nivel de empleado (junior, mid, senior, manager, director).

## Modelo 2 — ROI de programas de reducción de rotación

Con el coste de rotación calculado:
- Define la tasa de rotación actual y la tasa objetivo tras implementar el programa de mejora.
- Calcula el ahorro anual: (tasa actual - tasa objetivo) × número de empleados en ese segmento × coste de rotación por empleado.
- Calcula el coste del programa de mejora (encuestas, formación de managers, beneficios adicionales, horas de HR).
- Calcula el ROI: (ahorro - coste del programa) / coste del programa × 100.
- Calcula el payback period: en cuántos meses el programa se amortiza.

## Modelo 3 — ROI del programa de onboarding

Compara dos escenarios: onboarding estándar (3 meses para alcanzar el 80% de productividad) vs. onboarding optimizado (6 semanas para alcanzar el 80%):
- Calcula el valor de las semanas de productividad adicional recuperadas.
- Resta el coste adicional del programa de onboarding mejorado.
- Proyecta el impacto acumulado a 12 meses considerando el número de contrataciones anuales.

## Modelo 4 — ROI del bienestar y reducción del absentismo

- Calcula el coste actual del absentismo: días de baja × (salario diario + coste de sustitución).
- Si el programa de bienestar reduce el absentismo un X%, ¿cuál es el ahorro anual?
- Añade el impacto en productividad: empleados con alto bienestar son hasta un 20% más productivos según estudios de Gallup y la Universidad de Oxford. Aplica un factor conservador (5-10%) para el modelo.

## Modelo 5 — Impacto en el employer branding y coste de adquisición de talento

- ¿Cómo mejora la mejora del eNPS el tiempo de cobertura de vacantes y la calidad de candidatos?
- Estima el ahorro en costes de selección si el porcentaje de candidaturas espontáneas y referencias internas aumenta.

## Presentación ejecutiva

Genera una presentación de una página con:
1. El coste actual estimado de la rotación y el absentismo.
2. El ROI proyectado de las tres iniciativas de experiencia del empleado propuestas.
3. El payback period y el horizonte de retorno.
4. Las hipótesis clave del modelo y los rangos de sensibilidad (escenario conservador vs. optimista).

Indícame el número de empleados, los roles afectados y los programas de experiencia del empleado que quieres analizar para personalizar los modelos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Modelado del ROI de iniciativas de people para presentar a comités de dirección',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Gestión de la experiencia del empleado en departamentos jurídicos',
                'description'       => 'Diseña estrategias de employee experience adaptadas a la cultura y los desafíos específicos de los equipos legales, donde la presión de plazos, el perfil de alta cualificación y la jerarquía tradicional crean dinámicas únicas de retención y desarrollo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor especializado en gestión del talento y experiencia del empleado en entornos jurídicos. Tu misión es ayudarme a diseñar estrategias de employee experience adaptadas a las dinámicas únicas de los departamentos legales, tanto en despachos de abogados como en asesorías jurídicas corporativas.

## Por qué la experiencia del empleado en entornos legales es diferente

Los departamentos jurídicos tienen características que hacen que las estrategias generales de employee experience no funcionen sin adaptación: alta presión de plazos y urgencias, cultura de confidencialidad que limita la comunicación, estructuras jerárquicas tradicionales (socio-of-counsel-asociado), perfil de empleados con alta formación y expectativas elevadas, y un trabajo cuya calidad es difícil de medir de forma objetiva. Estas particularidades exigen soluciones específicas.

## Módulo 1 — Diagnóstico de la experiencia actual en el equipo legal

Guíame en el diagnóstico de los principales puntos de dolor en la experiencia del equipo:
- ¿Qué aspectos de la cultura jurídica tradicional generan más insatisfacción en el equipo actual? (billable hours, falta de feedback, opacidad en criterios de promoción, desequilibrio vida-trabajo)
- ¿Cómo se comparan las expectativas de los nuevos abogados (generación millennial y Z) con la cultura establecida del despacho o departamento?
- Diseña una encuesta de experiencia del empleado adaptada al contexto jurídico: ¿qué preguntas son más relevantes y cuáles generarían resistencia cultural si se formulan incorrectamente?
- ¿Cómo garantizar la confidencialidad de las respuestas en un entorno donde el anonimato es difícil de creer?

## Módulo 2 — Onboarding jurídico: más allá de los procedimientos

El onboarding en entornos legales suele ser deficiente porque se centra en los procedimientos y olvida la integración cultural y el desarrollo de relaciones:
- Diseña un programa de incorporación de 90 días para nuevos abogados que incluya:
  - Conocimiento del portafolio de clientes y casos relevantes.
  - Comprensión de la cultura de trabajo del equipo (cómo se trabaja realmente, no el manual).
  - Asignación de un mentor senior con responsabilidades claras y tiempo protegido.
  - Integración progresiva en casos con supervisión decreciente.
  - Primera reunión con un cliente real en un contexto de bajo riesgo.
- ¿Cómo gestionar el onboarding de un abogado experimentado que viene de otro despacho o empresa?

## Módulo 3 — Desarrollo profesional en la carrera jurídica

El modelo tradicional de carrera jurídica (asociado → senior → socio) está en crisis:
- ¿Qué alternativas de carrera existen para los abogados que no quieren o no pueden acceder al nivel de socio? (of-counsel, especialización técnica, gestión del conocimiento, roles de legaltech, posiciones de business development)
- Diseña un marco de conversaciones de desarrollo para abogados que vaya más allá de la evaluación anual de rendimiento.
- ¿Cómo articular criterios de promoción que sean percibidos como transparentes y justos en un entorno donde las relaciones con clientes tienen un peso enorme?
- ¿Qué programas de formación continua tienen mayor impacto en la satisfacción y retención de abogados? (especializaciones técnicas, gestión de clientes, legaltech y IA, habilidades directivas)

## Módulo 4 — Bienestar y gestión de la carga de trabajo

El bienestar en entornos jurídicos tiene desafíos estructurales:
- ¿Cómo diseñar políticas de gestión de la carga de trabajo que sean compatibles con la naturaleza impredecible de los plazos legales?
- ¿Qué políticas de bienestar tienen mayor aceptación y uso en culturas jurídicas conservadoras?
- ¿Cómo abordar el estigma del burnout en un entorno donde mostrar debilidad se percibe como una señal de falta de capacidad?
- Diseña un protocolo de gestión de urgencias que proteja el tiempo personal sin comprometer la calidad del servicio al cliente.

## Módulo 5 — Cultura de feedback en entornos jerárquicos

El feedback es especialmente difícil en entornos jurídicos por la jerarquía y la cultura de perfeccionismo:
- ¿Cómo introducir una cultura de feedback constructivo en un entorno donde el error se percibe como inaceptable?
- Diseña un proceso de feedback 360° adaptado a la cultura jurídica: ¿quién participa, cómo se comunican los resultados, cómo se actúa sobre ellos?
- ¿Cómo dar feedback de calidad a un abogado senior sin generar conflictos de autoridad?

Indícame el tipo de organización jurídica (despacho boutique, gran firma, asesoría corporativa), el número de personas en el equipo legal y los principales retos de retención para personalizar las recomendaciones.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño de estrategias de retención y desarrollo adaptadas a la cultura jurídica',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Desarrollo de habilidades y planes de carrera en equipos de Customer Success',
                'description'       => 'Diseña un sistema de desarrollo profesional específico para Customer Success Managers que equilibre las habilidades técnicas, comerciales y relacionales. Construye rutas de carrera claras que retengan el talento y mejoren la calidad del servicio al cliente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia en la construcción de equipos de CS de alto rendimiento y en el diseño de programas de desarrollo de talento para profesionales de Customer Success. Tu misión es ayudarme a crear un sistema completo de desarrollo profesional para mi equipo de CS.

## El desafío del desarrollo de carrera en Customer Success

Customer Success es una disciplina relativamente joven y muchos profesionales del sector afrontan una pregunta difícil: ¿hacia dónde puedo crecer desde aquí? La falta de rutas de carrera claras es una de las principales causas de rotación en equipos de CS. Este programa resuelve ese problema con un marco estructurado y rutas de carrera múltiples.

## Módulo 1 — Marco de competencias del Customer Success Manager

Define el perfil de competencias en cuatro dimensiones:

**Competencias de gestión del cliente**:
- Gestión de relaciones: construcción de confianza, manejo de stakeholders múltiples, navegación de organizaciones complejas.
- Comunicación: presentaciones ejecutivas, comunicación escrita de alto impacto, manejo de conversaciones difíciles.
- Gestión proactiva de la salud del cliente: interpretación de señales de riesgo, diseño de planes de acción preventivos.

**Competencias analíticas y de datos**:
- Interpretación de métricas de producto: MAU, DAU, feature adoption, engagement scores.
- Análisis de tendencias de uso para identificar oportunidades de expansión o riesgo de churn.
- Construcción de business cases para justificar el valor del producto al cliente.

**Competencias comerciales**:
- Identificación y calificación de oportunidades de upsell y cross-sell.
- Gestión del proceso de renovación: timing, argumentación, negociación básica.
- Colaboración con ventas en expansiones de cuenta.

**Competencias técnicas del producto**:
- Dominio profundo de las funcionalidades del producto y sus casos de uso.
- Capacidad de onboarding y formación de usuarios.
- Primer nivel de resolución de problemas técnicos.

## Módulo 2 — Niveles de senioridad y criterios de promoción

Define los niveles del equipo de CS con criterios objetivos:

**CSM Associate (0-12 meses)**:
- Gestiona un portfolio de cuentas de menor complejidad con supervisión.
- KPIs: NPS del portfolio, tasa de activación de nuevas cuentas, tiempo de respuesta.

**CSM (1-3 años)**:
- Gestión autónoma de un portfolio de cuentas mid-market.
- KPIs: NRR del portfolio, churn rate, upsell generado, CSAT.

**Senior CSM (3-6 años)**:
- Gestión de cuentas enterprise o un portfolio de mayor ARR.
- Mentoría informal de CSMs junior.
- KPIs: NRR superior al objetivo del equipo, expansión de ARR, health scores del portfolio.

**CSM Team Lead o Principal CSM**:
- Referente técnico y de mejores prácticas del equipo.
- Diseño de playbooks y metodologías de CS.
- Contribución a la estrategia de CS a nivel de empresa.

## Módulo 3 — Rutas de carrera desde CS

Customer Success es una posición puente hacia múltiples especialidades:
- **Ruta de gestión**: CSM → Senior CSM → CS Manager → Head of CS → VP of CS.
- **Ruta de especialización técnica**: CSM → Solutions Consultant → Sales Engineer → Technical Account Manager.
- **Ruta comercial**: CSM → Account Manager → Enterprise Account Executive.
- **Ruta de producto**: CSM → Product Specialist → Associate PM → PM.
- **Ruta de operaciones**: CSM → CS Ops → Revenue Ops Manager.

Para cada ruta, define las competencias adicionales a desarrollar y cómo el rol de CSM actual puede servir de trampolín.

## Módulo 4 — Plan de desarrollo individual para CSMs

Diseña el IDP trimestral estándar para CSMs:
- Autoevaluación de competencias (escala 1-4 por competencia).
- Identificación de las dos o tres áreas prioritarias de mejora.
- Acciones de desarrollo concretas: asumir una cuenta enterprise nueva, liderar una iniciativa de onboarding, participar en una negociación de renovación compleja con apoyo del manager.
- Recursos de aprendizaje recomendados: certificaciones de CS (Gainsight Pulse, CSM Institute), libros clave, comunidades (Customer Success Collective, Success League).
- Revisión mensual con el manager: estructura de conversación de 30 minutos para el seguimiento del IDP.

## Módulo 5 — Rituales de desarrollo del equipo de CS

- **Call reviews**: análisis colectivo de llamadas de cliente (positivas y de manejo de situaciones difíciles) como práctica de aprendizaje semanal.
- **Playbook contributions**: cada CSM contribuye a la documentación de mejores prácticas con al menos una contribución por trimestre.
- **Shadowing interno**: rotaciones entre cuentas de diferentes segmentos para ampliar la perspectiva.
- **Speaker series**: invitados de otros departamentos (ventas, producto, marketing) que explican su perspectiva sobre el cliente.

Indícame el tamaño del equipo, los segmentos de cliente que gestiona y el ARR medio del portfolio para personalizar el marco de competencias y los planes de carrera.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construcción de marcos de desarrollo y rutas de carrera para equipos de CS',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Gestión de la relación y experiencia con colaboradores freelance y contratistas',
                'description'       => 'Diseña un sistema de gestión de colaboradores externos que maximice su rendimiento, compromiso y lealtad sin crear relaciones de dependencia laboral. Aplica principios de experiencia del empleado al ecosistema de freelances que trabajan con tu negocio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor especializado en gestión de talento flexible y ecosistemas de colaboradores externos. Tu misión es ayudarme a diseñar un sistema de gestión de la relación con los freelances y contratistas que trabajan habitualmente con mi negocio, aplicando principios de experiencia del empleado sin crear relaciones de dependencia laboral.

## Por qué la experiencia del colaborador externo importa

Los mejores freelances son escasos y tienen múltiples opciones de proyectos. Sin un sistema de gestión de la relación que haga que trabajar contigo sea una experiencia positiva, perderás acceso a los mejores talentos en el momento en que más los necesitas. Un colaborador externo con una excelente experiencia de trabajo se convierte en un activo estratégico: entregan mejor, comunican proactivamente los problemas, priorizan tus proyectos y te recomiendan a otros profesionales de su red.

## Módulo 1 — Onboarding de colaboradores externos

La primera experiencia con tu empresa define la relación a largo plazo:

**Antes del primer proyecto**:
- ¿Qué información debe tener el freelance antes de empezar? (contexto del negocio, estilo de comunicación del equipo, herramientas usadas, expectativas de tiempos de respuesta, proceso de aprobaciones)
- Checklist de incorporación: accesos a herramientas colaborativas, briefing del proyecto, presentación al equipo con el que trabajará, acuerdo de confidencialidad si aplica.
- ¿Cómo se maneja la documentación legal y de pago desde el primer día para evitar fricciones administrativas que dañan la relación?

**Durante el primer proyecto**:
- ¿Quién es el punto de contacto principal y cómo se gestiona la comunicación?
- ¿Cómo se da feedback durante el proyecto de forma constructiva sin microgestionar?
- ¿Cuál es el proceso de revisión y aprobación de entregas?

## Módulo 2 — Briefing y comunicación de expectativas

El briefing deficiente es la primera causa de entregables decepcionantes:
- Diseña una plantilla de briefing para proyectos creativos, técnicos y estratégicos que incluya: objetivo del proyecto, contexto del negocio, audiencia objetivo, entregables esperados con especificaciones, restricciones (tono, marca, presupuesto), criterios de éxito, plazos intermedios y final, proceso de revisión y número de rondas incluidas.
- ¿Cómo comunicar cambios de alcance o prioridades sin dañar la relación o el proyecto?
- ¿Cómo gestionar las revisiones de forma que respeten el trabajo del freelance y lleguen a un resultado satisfactorio para ambas partes?

## Módulo 3 — Sistema de pago y reconocimiento

El pago es la dimensión más básica de la experiencia del colaborador externo:
- ¿Cómo diseñar un proceso de facturación y pago que sea predecible, rápido y sin fricciones? (plazo de pago claro, proceso de aprobación de facturas, herramienta de gestión)
- ¿Cómo comunicar cambios en el cronograma de pagos si ocurren, de forma que preserven la confianza?
- Más allá del pago: ¿cómo reconocer el buen trabajo de un colaborador externo? (testimonios, recomendaciones en LinkedIn, referidos a su red, crédito público por el trabajo si el contexto lo permite)
- ¿Cómo estructurar los aumentos de tarifa con los colaboradores de largo plazo?

## Módulo 4 — Construcción de relaciones de largo plazo

Convierte colaboradores puntuales en socios estratégicos:
- Diseña un sistema de clasificación de colaboradores externos: ¿cuáles son los que aportan más valor y merecen una relación de mayor profundidad?
- ¿Cómo mantener la relación entre proyectos? (actualizaciones del negocio, primicias de proyectos interesantes, invitaciones a eventos, feedback sobre su trabajo entre proyectos)
- ¿Qué compromisos puedes ofrecer a los colaboradores más estratégicos a cambio de prioridad? (volumen de trabajo garantizado, tarifas preferentes, plazos de pago más cortos)
- ¿Cómo construir un roster de colaboradores de confianza que cubra las distintas necesidades del negocio?

## Módulo 5 — Gestión de situaciones difíciles

- ¿Cómo dar feedback negativo a un freelance sobre un entregable que no cumple las expectativas?
- ¿Cómo terminar la relación con un colaborador que no está funcionando sin dañar la reputación propia ni la suya?
- ¿Cómo gestionar los conflictos de disponibilidad cuando necesitas un colaborador que está comprometido con otro proyecto?
- ¿Cómo protegerte legalmente de clasificaciones erróneas de relación laboral al construir relaciones de largo plazo con freelances?

Indícame el tipo de colaboradores que gestionas, el volumen aproximado de proyectos y el sector de tu negocio para personalizar las recomendaciones.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Sistema de gestión de relaciones con colaboradores freelance para negocios que trabajan con talento externo',
                'vote_score'        => 40,
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
