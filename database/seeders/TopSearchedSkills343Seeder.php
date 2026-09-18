<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills343Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Gestión de campañas de marketing en equipo distribuido',
                'description'      => 'Coordinar campañas de marketing con miembros del equipo en distintos husos horarios exige procesos asíncronos claros y herramientas compartidas. Este prompt ayuda a diseñar flujos de trabajo que mantienen la alineación sin depender de reuniones constantes. Obtendrás un sistema reproducible para lanzar campañas con equipos remotos de manera eficiente.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión de proyectos de marketing para equipos distribuidos. Tu objetivo es ayudarme a diseñar un sistema de coordinación asíncrona para gestionar campañas de marketing con un equipo que trabaja en diferentes países y husos horarios.

**Contexto:**
Mi equipo de marketing está compuesto por [NÚMERO] personas distribuidas en [PAÍSES/HUSOS HORARIOS]. Actualmente gestionamos [TIPO DE CAMPAÑAS] y los principales cuellos de botella son la falta de visibilidad sobre el estado de cada pieza creativa, la dependencia de reuniones para tomar decisiones y la desincronización entre roles (diseño, copy, paid media, analytics).

**Lo que necesito:**

1. **Estructura de proyecto asíncrono para campañas**
   - Desglose de fases de campaña con responsables claros por rol
   - Definición de entregables, criterios de aceptación y fechas límite
   - Sistema de handoffs documentados entre disciplinas (ej. brief de copy → diseño → revisión → publicación)

2. **Rituales mínimos de equipo remoto**
   - Qué reuniones son realmente necesarias y con qué frecuencia
   - Formato de standup asíncrono escrito (preguntas clave, canal, hora límite de actualización)
   - Retrospectiva de campaña: cómo hacerla en remoto de forma efectiva

3. **Herramientas y configuración recomendada**
   - Stack de herramientas para gestión de tareas, comunicación y archivos
   - Cómo configurar notificaciones para reducir el ruido sin perder información crítica
   - Plantillas de documento para briefings, aprobaciones y reportes de campaña

4. **Visibilidad sin microgestión**
   - Dashboard de estado de campaña que el equipo actualiza de forma autónoma
   - Indicadores de avance que el responsable de marketing puede consultar en cualquier momento
   - Sistema de alerta temprana para detectar bloqueos antes de que afecten al lanzamiento

5. **Cultura de comunicación escrita**
   - Guía de cuándo escribir vs. cuándo llamar
   - Estándar para mensajes de actualización claros y concisos
   - Cómo documentar decisiones para que queden trazables

6. **Plan de implementación**
   - Pasos para adoptar este sistema en las próximas 4 semanas
   - Métricas para evaluar si el sistema está funcionando
   - Errores comunes en equipos remotos de marketing y cómo evitarlos

**Formato de respuesta:**
Organiza la respuesta en secciones numeradas con subtítulos claros. Incluye ejemplos concretos de plantillas, mensajes o configuraciones donde sea relevante. El tono debe ser práctico y directo, orientado a equipos reales con recursos limitados.

Adapta todas las recomendaciones al tipo de campañas que gestiono y al tamaño de mi equipo cuando te proporcione esa información.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar flujos de trabajo asíncronos para campañas de marketing con equipos distribuidos',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Coordinación de sprints en equipos de desarrollo remotos',
                'description'      => 'Los sprints en equipos distribuidos presentan retos específicos: sincronizar planificación, gestionar bloqueos a distancia y mantener la cadencia sin fricción. Este prompt ayuda a diseñar un sistema de sprint adaptado a la realidad del trabajo remoto. El resultado es un marco ágil que funciona sin presencia física.',
                'prompt_content'   => <<<'EOT'
Eres un experto en metodologías ágiles y gestión de equipos de desarrollo remotos. Necesito tu ayuda para diseñar un sistema de sprints que funcione de forma eficiente con un equipo distribuido en diferentes zonas horarias.

**Contexto del equipo:**
- Tamaño: [NÚMERO] desarrolladores
- Distribución: [PAÍSES/HUSOS HORARIOS]
- Stack tecnológico: [TECNOLOGÍAS]
- Metodología actual: [SCRUM/KANBAN/HÍBRIDO]
- Principal punto de dolor: [DESCRIBE EL PROBLEMA MÁS URGENTE]

**Lo que necesito diseñar:**

1. **Estructura del sprint remoto**
   - Duración óptima del sprint para equipos distribuidos
   - Ceremonia de sprint planning asíncrona vs. sincrónica: cuándo elegir cada una
   - Cómo gestionar el backlog refinement con colaboración asíncrona
   - Formato de daily standup escrito: preguntas, herramienta, ventana horaria

2. **Gestión de bloqueos y dependencias**
   - Sistema para escalar bloqueos sin esperar a la daily
   - Protocolo cuando una decisión requiere input de múltiples personas en distintos husos
   - Cómo documentar dependencias entre tickets para que sean visibles sin reunión

3. **Revisión y retrospectiva distribuida**
   - Sprint review con stakeholders en diferentes zonas horarias
   - Formato de retrospectiva asíncrona efectiva (herramientas, preguntas, síntesis)
   - Cómo asegurar que las mejoras acordadas se implementen

4. **Visibilidad del progreso**
   - Tablero de sprint que refleje el estado real sin necesidad de actualizaciones manuales constantes
   - Métricas clave para seguimiento: velocidad, deuda técnica, tasa de bloqueos
   - Reporte de sprint para stakeholders no técnicos en formato conciso

5. **Cultura de equipo remoto para devs**
   - Normas de comunicación escrita en código (PR descriptions, comentarios, commits)
   - Gestión de revisiones de código en remoto: tiempos de respuesta, profundidad esperada
   - Cómo mantener la cohesión técnica del equipo sin arquitectura en pizarra

6. **Herramientas y automatización**
   - Stack recomendado para el flujo completo (gestión de tareas, CI/CD, comunicación)
   - Automatizaciones útiles para reducir trabajo manual de coordinación
   - Integración entre herramientas para evitar actualizaciones duplicadas

**Formato de respuesta:**
Proporciona respuestas estructuradas con ejemplos concretos. Donde sea relevante, incluye plantillas de documentos o mensajes que pueda adaptar directamente. Señala explícitamente qué prácticas cambian cuando hay más de 8 horas de diferencia horaria entre los miembros del equipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar un sistema de sprints ágiles para equipos de desarrollo distribuidos',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Flujos de trabajo asíncronos para diseñadores en equipos remotos',
                'description'      => 'El trabajo de diseño en remoto requiere procesos de feedback, revisión y entrega que funcionen sin sincronía constante. Este prompt ayuda a estructurar flujos de trabajo claros para diseñadores que colaboran con equipos distribuidos. Obtendrás un sistema que protege el tiempo de foco del diseñador sin aislar su trabajo del equipo.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión de proyectos de diseño y trabajo remoto. Tu misión es ayudarme a diseñar un sistema de trabajo asíncrono para mi rol como diseñador en un equipo distribuido, que me permita colaborar eficazmente sin interrupciones constantes.

**Mi situación:**
- Trabajo como [UX designer / UI designer / diseñador de producto / diseñador gráfico]
- Mi equipo incluye: [ROL 1], [ROL 2], [ROL 3]
- Distribución horaria: [HUSOS HORARIOS]
- Herramientas actuales: [FIGMA/SKETCH/OTRA]
- Mayor fricción actual: [DESCRIBE EL PROBLEMA]

**Lo que necesito:**

1. **Sistema de handoffs de diseño asíncrono**
   - Estructura de archivo de Figma/herramienta para que cualquier persona del equipo entienda el estado del trabajo sin preguntar
   - Plantilla de comentario de entrega: qué información incluir siempre en cada handoff
   - Protocolo de revisión: cómo dar y recibir feedback escrito de forma estructurada
   - Gestión de versiones: convenciones de nomenclatura y archivo de alternativas

2. **Proceso de aprobación sin reuniones innecesarias**
   - Flujo de decisión para diseños: quién aprueba qué y en qué plazo
   - Cómo presentar opciones de diseño de forma asíncrona con contexto suficiente
   - Sistema de escalado cuando no hay consenso en los comentarios

3. **Briefing y discovery en remoto**
   - Plantilla de brief de diseño para que los stakeholders proporcionen la información que necesito sin una reunión inicial
   - Cómo facilitar sesiones de discovery o co-creación de forma asíncrona o en formato reducido
   - Documentación de decisiones de diseño: qué capturar y dónde almacenarlo

4. **Gestión del tiempo de foco**
   - Estructura de día de trabajo para un diseñador remoto: bloques de foco vs. disponibilidad
   - Protocolo de notificaciones: cuándo estar disponible y cuándo en modo profundo
   - Cómo comunicar al equipo mi disponibilidad sin crear ansiedad

5. **Colaboración con desarrollo**
   - Cómo preparar los specs de diseño para que el dev team tenga todo lo que necesita sin llamadas
   - Proceso de QA de diseño en remoto: quién revisa, qué criterios, cómo documentar discrepancias
   - Plantilla de anotaciones para casos borde y comportamientos interactivos

6. **Retrospectiva y mejora continua del proceso**
   - Señales de que el flujo de trabajo asíncrono no está funcionando
   - Cómo proponer mejoras al equipo de forma constructiva
   - Métricas de salud del proceso de diseño remoto

**Formato de respuesta:**
Incluye plantillas concretas que pueda adaptar directamente. Organiza las recomendaciones por prioridad de implementación. Señala qué cambios tienen mayor impacto con menor esfuerzo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Estructurar flujos de trabajo asíncronos para diseñadores en equipos distribuidos',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión del pipeline de ventas con equipo comercial remoto',
                'description'      => 'Un equipo de ventas distribuido necesita procesos claros para mantener el pipeline actualizado, coordinar cuentas y garantizar visibilidad sin reuniones de estado constantes. Este prompt ayuda a diseñar el sistema operativo de un equipo comercial remoto. El resultado es un modelo de trabajo que aumenta la autonomía sin perder control del funnel.',
                'prompt_content'   => <<<'EOT'
Eres un experto en operaciones de ventas y gestión de equipos comerciales remotos. Necesito tu ayuda para diseñar el sistema operativo de mi equipo de ventas distribuido, de manera que mantengamos el pipeline saludable y la coordinación efectiva sin depender de reuniones constantes.

**Contexto del equipo:**
- Tamaño: [NÚMERO] comerciales
- Distribución: [PAÍSES/TERRITORIOS]
- Ciclo de venta: [DURACIÓN MEDIA]
- CRM actual: [HERRAMIENTA]
- Producto/servicio: [DESCRIPCIÓN BREVE]
- Mayor problema actual: [DESCRIBE]

**Lo que necesito:**

1. **Disciplina de CRM en equipo remoto**
   - Estándar mínimo de actualización del CRM: qué campos, con qué frecuencia y quién es responsable
   - Reglas de higiene del pipeline: criterios para avanzar, paralizar o cerrar oportunidades
   - Cómo usar el CRM como fuente de verdad única para reducir las preguntas por Slack

2. **Coordinación de cuentas y territorios**
   - Protocolo para cuentas que cruzan territorios o que requieren colaboración entre comerciales
   - Cómo documentar la estrategia de cuenta para que cualquier miembro del equipo pueda dar continuidad
   - Gestión de traspasos de oportunidades sin pérdida de contexto

3. **Rituales de equipo remoto para ventas**
   - Frecuencia y formato de la reunión de pipeline (qué revisar, qué decisiones tomar)
   - Standup comercial asíncrono: qué reportar, en qué formato y cuándo
   - Retrospectiva mensual del equipo: estructura para identificar qué funciona y qué no

4. **Visibilidad para el manager sin microgestión**
   - Dashboard de pipeline que refleje la salud del funnel en tiempo real
   - Alertas automáticas para oportunidades estancadas o en riesgo
   - Reporte semanal de equipo: métricas clave, señales de alerta y acciones previstas

5. **Onboarding y ramping de nuevos comerciales en remoto**
   - Semanas 1-4: hitos, recursos y acompañamiento para un comercial que se incorpora en remoto
   - Cómo gestionar el shadowing y las primeras llamadas en un contexto distribuido
   - Criterios para evaluar si el ramping está en buen camino

6. **Cultura de equipo comercial en remoto**
   - Cómo mantener la motivación y la competitividad sana sin presencia física
   - Reconocimiento de logros en remoto: qué funciona y qué no
   - Gestión de slumps individuales: cómo detectarlos y abordarlos desde la distancia

**Formato de respuesta:**
Proporciona un sistema completo con plantillas concretas donde sea útil. Prioriza las recomendaciones que tienen mayor impacto en equipos de menos de 10 comerciales. Incluye ejemplos de métricas y dashboards cuando sea relevante.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar el sistema operativo de un equipo de ventas distribuido y remoto',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Rituales de producto para equipos de PM distribuidos',
                'description'      => 'Los equipos de producto en remoto necesitan rituales que generen alineación estratégica y táctica sin saturar la agenda con reuniones. Este prompt ayuda a diseñar el calendario de rituales de producto adaptado a equipos distribuidos. Obtendrás un sistema que mantiene al equipo en sincronía sobre prioridades, contexto y decisiones.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión de producto y trabajo remoto. Necesito tu ayuda para diseñar el sistema de rituales y comunicación de un equipo de producto distribuido que mantiene la alineación estratégica y táctica sin sobrecargar la agenda.

**Contexto:**
- Equipo: [NÚMERO] PMs + [NÚMERO] diseñadores + [NÚMERO] devs
- Distribución: [PAÍSES/HUSOS HORARIOS]
- Metodología: [SCRUM/KANBAN/DUAL-TRACK/OTRA]
- Fase del producto: [DISCOVERY / CRECIMIENTO / ESCALA]
- Mayor problema de coordinación: [DESCRIBE]

**Lo que necesito:**

1. **Sistema de rituales de producto**
   - Qué rituales son imprescindibles y cuáles son prescindibles en un equipo remoto
   - Frecuencia, duración y formato óptimo para cada ritual (síncrono vs. asíncrono)
   - Quién debe participar en cada ritual y por qué
   - Cómo documentar los outputs de cada ritual para que sean consultables

2. **Alineación estratégica en remoto**
   - Formato de la sesión de estrategia de producto trimestral en remoto
   - Cómo mantener viva la visión del producto entre trimestres sin reuniones adicionales
   - OKR review: cómo hacerlo de forma efectiva con equipos distribuidos

3. **Discovery y decisiones de producto asíncronas**
   - Cómo facilitar sesiones de priorización (RICE, ICE, user story mapping) en remoto
   - Proceso para tomar decisiones de producto cuando no se puede reunir a todos
   - Plantilla de decision log: qué capturar, quién puede consultarlo y cómo

4. **Comunicación de hoja de ruta**
   - Cómo compartir la roadmap con stakeholders distribuidos de forma que genere alineación
   - Actualización de roadmap: frecuencia, formato y quién debe recibirla
   - Gestión de cambios de prioridad: cómo comunicarlos sin generar caos

5. **Colaboración PM-Diseño-Desarrollo en remoto**
   - Proceso de refinamiento de historias de usuario asíncrono
   - Cómo facilitar el discovery técnico en remoto
   - Protocolo de escalado cuando hay desacuerdo entre roles

6. **Métricas de salud del equipo y del proceso**
   - Indicadores de que el sistema de trabajo remoto está fallando
   - Retrospectiva de proceso: cómo hacerla efectiva en formato distribuido
   - Cómo medir la satisfacción del equipo de producto en remoto

**Formato de respuesta:**
Diseña un calendario completo de rituales con frecuencia, duración y formato. Incluye plantillas de documentos para los rituales más importantes. Diferencia claramente qué debe ser síncrono y qué puede ser asíncrono.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar el sistema de rituales y comunicación de un equipo de producto remoto',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Onboarding y gestión del talento en equipos distribuidos',
                'description'      => 'Incorporar y retener talento en un entorno remoto requiere procesos específicos que compensen la falta de presencia física y construyan cultura a distancia. Este prompt ayuda a diseñar un programa de onboarding remoto y un modelo de gestión del talento distribuido. Obtendrás un sistema que acelera la integración y mejora la retención.',
                'prompt_content'   => <<<'EOT'
Eres un experto en recursos humanos y gestión del talento en entornos remotos y distribuidos. Necesito tu ayuda para diseñar un sistema completo de onboarding y gestión del talento para nuestra empresa que opera en remoto.

**Contexto:**
- Tamaño de la empresa: [NÚMERO] empleados
- Distribución: [PAÍSES/ZONAS HORARIAS]
- Sector: [SECTOR]
- Ritmo de incorporaciones: [NÚMERO] nuevas contrataciones por [MES/TRIMESTRE]
- Mayor reto actual: [DESCRIBE EL PROBLEMA]

**Lo que necesito:**

1. **Programa de onboarding remoto estructurado**
   - Semana 0 (preincorporación): qué preparar antes del primer día
   - Semana 1: hitos, reuniones esenciales, accesos y primeras tareas
   - Primeros 30/60/90 días: objetivos de aprendizaje, integración y primeras contribuciones
   - Buddy program en remoto: cómo asignar, guiar y medir su efectividad
   - Checklist de onboarding digital: herramientas, accesos, documentación clave

2. **Construcción de cultura en remoto**
   - Rituales de equipo que generan cohesión sin presencia física
   - Canales y dinámicas de comunicación informal (el equivalente remoto del café)
   - Cómo transmitir los valores y la cultura de la empresa a empleados que nunca han estado en una oficina

3. **Gestión del desempeño en equipos distribuidos**
   - Modelo de evaluación del desempeño adaptado a trabajo remoto
   - Frecuencia y formato de las one-on-ones en remoto
   - Cómo dar feedback constructivo a distancia
   - Detección temprana de desenganche o dificultades antes de que escalen

4. **Desarrollo profesional y carrera**
   - Cómo diseñar planes de carrera para empleados remotos
   - Formación y desarrollo en remoto: qué funciona y qué no
   - Visibilidad del trabajo: cómo asegurar que el buen trabajo sea reconocido aunque no sea presencial

5. **Retención en entornos remotos**
   - Factores de riesgo de abandono específicos del trabajo remoto
   - Encuestas de clima y engagement: frecuencia, formato y cómo actuar sobre los resultados
   - Política de trabajo flexible: cómo diseñarla para maximizar retención sin perder productividad

6. **Gestión de equipos híbridos**
   - Equidad entre empleados presenciales y remotos: qué prácticas generan desigualdad y cómo corregirlas
   - Reuniones híbridas: cómo hacerlas justas para todos los participantes
   - Políticas diferenciadas según modalidad: qué tiene sentido y qué no

**Formato de respuesta:**
Incluye plantillas concretas para las herramientas más importantes (plan de onboarding, plantilla de one-on-one, encuesta de clima). Organiza las recomendaciones por fase de implementación. Señala qué tiene mayor impacto en retención.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar onboarding remoto y modelo de gestión del talento distribuido',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Seguimiento financiero y reporting en equipos remotos',
                'description'      => 'La gestión financiera en entornos distribuidos requiere procesos de reporting claros y herramientas que den visibilidad sin depender de reuniones frecuentes. Este prompt ayuda a diseñar el sistema de seguimiento financiero para equipos que operan en remoto. Obtendrás un modelo de reporting que mantiene a los stakeholders informados de forma eficiente.',
                'prompt_content'   => <<<'EOT'
Eres un experto en finanzas corporativas y gestión financiera en entornos de trabajo remoto y distribuido. Necesito tu ayuda para diseñar el sistema de seguimiento financiero y reporting de nuestra organización que opera de forma distribuida.

**Contexto:**
- Tipo de organización: [STARTUP / PYME / DEPARTAMENTO DE EMPRESA GRANDE]
- Número de personas en el equipo financiero: [NÚMERO]
- Distribución: [PAÍSES/HUSOS HORARIOS]
- Herramientas actuales: [ERP/HERRAMIENTA DE CONTABILIDAD/EXCEL]
- Mayor dificultad actual: [DESCRIBE]

**Lo que necesito:**

1. **Sistema de cierre mensual en remoto**
   - Calendario de cierre: tareas, responsables y fechas límite
   - Protocolo de recopilación de datos de distintos países o entidades
   - Checklist de cierre mensual para equipos distribuidos
   - Cómo gestionar diferencias de zona horaria en el proceso de cierre

2. **Dashboard financiero para stakeholders remotos**
   - Métricas financieras clave que debe incluir el dashboard ejecutivo
   - Frecuencia de actualización y formato de distribución
   - Cómo hacer el dashboard autoexplicativo para que no requiera reunión de contexto
   - Niveles de acceso: qué ve cada stakeholder y por qué

3. **Reporting presupuestario en entornos distribuidos**
   - Proceso de elaboración del presupuesto con input de equipos remotos
   - Seguimiento de desviaciones presupuestarias: quién revisa, con qué frecuencia, qué acción se espera
   - Plantilla de reporte de variaciones para comunicar desviaciones al equipo directivo

4. **Control de gastos y aprobaciones en remoto**
   - Flujo de aprobación de gastos para equipos distribuidos
   - Política de gastos clara y accesible para empleados en distintos países
   - Conciliación de gastos: proceso, herramientas y frecuencia
   - Gestión de divisas y gastos internacionales

5. **Comunicación financiera asíncrona**
   - Cómo comunicar resultados financieros a equipos no financieros en remoto
   - Formato de newsletter financiero interno: qué incluir y cómo hacer los datos comprensibles
   - Gestión de preguntas financieras recurrentes sin reuniones de aclaración

6. **Herramientas y automatización**
   - Stack tecnológico recomendado para finanzas distribuidas
   - Automatizaciones prioritarias para reducir trabajo manual en el cierre
   - Integración entre herramientas para evitar introducción manual de datos

**Formato de respuesta:**
Incluye plantillas de los documentos más importantes (calendario de cierre, plantilla de dashboard, reporte de variaciones). Prioriza las recomendaciones según el impacto en eficiencia y precisión. Señala los riesgos específicos de la gestión financiera en entornos distribuidos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar el sistema de seguimiento financiero y reporting para equipos distribuidos',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión de procesos legales y contratos en entornos remotos',
                'description'      => 'Los departamentos legales en remoto enfrentan retos únicos: firma digital, gestión documental distribuida y coordinación con clientes o colegas en distintas jurisdicciones. Este prompt ayuda a diseñar los flujos de trabajo legales adaptados al entorno remoto. Obtendrás un sistema que mantiene el rigor jurídico sin depender de la presencia física.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión de operaciones legales y trabajo remoto. Necesito tu ayuda para diseñar los flujos de trabajo y procesos de un departamento legal o despacho que opera de forma distribuida, garantizando eficiencia, trazabilidad y cumplimiento.

**Contexto:**
- Tipo de entidad: [DEPARTAMENTO LEGAL CORPORATIVO / DESPACHO DE ABOGADOS / ASESORÍA JURÍDICA]
- Número de profesionales: [NÚMERO]
- Distribución: [CIUDADES/PAÍSES]
- Áreas de práctica principales: [MERCANTIL / LABORAL / FISCAL / OTRA]
- Mayor dificultad operativa: [DESCRIBE]

**Lo que necesito:**

1. **Gestión documental y archivo en remoto**
   - Sistema de carpetas y nomenclatura para expedientes digitales
   - Control de versiones de contratos y documentos legales
   - Protocolo de acceso y permisos por nivel de confidencialidad
   - Copias de seguridad y recuperación ante incidentes

2. **Flujo de redacción y revisión de contratos asíncrono**
   - Proceso de revisión contractual entre varios abogados en remoto
   - Uso de comentarios y control de cambios de forma estructurada
   - Protocolo de aprobación y firma: quién autoriza, en qué orden y con qué herramienta
   - Plantilla de notas de negociación para capturar lo acordado verbalmente

3. **Firma digital y formalización en remoto**
   - Plataformas de firma digital recomendadas según jurisdicción
   - Flujo de envío, seguimiento y archivo de documentos firmados
   - Gestión de poderes notariales y documentos que requieren presencia física
   - Auditoría de firmas: cómo mantener un registro trazable

4. **Coordinación con clientes en remoto**
   - Protocolo de intake de nuevos clientes en formato digital
   - Cómo compartir documentos y actualizaciones de expediente de forma segura
   - Gestión de urgencias y plazos procesales con clientes en distintas zonas horarias
   - Reuniones legales en remoto: preparación, documentación y seguimiento

5. **Gestión de plazos y agenda jurídica**
   - Sistema de control de plazos procesales y de vencimiento de contratos
   - Alertas automáticas para plazos críticos
   - Coordinación de agenda en equipos jurídicos distribuidos
   - Delegación de tareas en remoto con trazabilidad

6. **Seguridad y confidencialidad en remoto**
   - Medidas de seguridad imprescindibles para trabajo legal remoto
   - Política de uso de dispositivos y redes en remoto
   - Gestión del secreto profesional en entornos distribuidos
   - Formación del equipo en ciberseguridad legal

**Formato de respuesta:**
Incluye flujos de proceso detallados para los procedimientos más críticos. Señala las implicaciones legales específicas de trabajar en remoto en jurisdicciones donde opera el equipo. Incluye recomendaciones de herramientas concretas cuando sea relevante.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar flujos de trabajo legales y contractuales para equipos jurídicos remotos',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Coordinación de equipos de Customer Success en remoto',
                'description'      => 'Los equipos de Customer Success distribuidos necesitan procesos claros para gestionar cuentas, coordinar escalaciones y mantener la visibilidad del estado de los clientes sin reuniones constantes. Este prompt ayuda a diseñar el sistema operativo de un equipo de CS remoto. El resultado es un modelo que mantiene la calidad del servicio al cliente independientemente de la ubicación del equipo.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Customer Success y operaciones de equipos remotos. Necesito tu ayuda para diseñar el sistema de trabajo de mi equipo de Customer Success distribuido, garantizando que los clientes reciban un servicio consistente y de calidad independientemente de dónde esté ubicado cada miembro del equipo.

**Contexto:**
- Tamaño del equipo de CS: [NÚMERO] CSMs
- Distribución: [PAÍSES/ZONAS HORARIAS]
- Número de cuentas gestionadas: [NÚMERO]
- Tipo de producto/servicio: [DESCRIPCIÓN]
- Ciclo de vida del cliente: [DURACIÓN MEDIA]
- Mayor reto actual: [DESCRIBE]

**Lo que necesito:**

1. **Sistema de gestión de cuentas en remoto**
   - Estándar de documentación de cuenta: qué información debe estar siempre actualizada en el CRM
   - Protocolo de handoff de cuentas entre CSMs sin pérdida de contexto
   - Cobertura de cuentas en vacaciones o bajas: cómo garantizar la continuidad
   - Segmentación de cuentas por nivel de atención requerida

2. **Rituales del equipo de CS remoto**
   - Reunión de revisión de cartera: frecuencia, formato y qué decisiones se toman
   - Standup asíncrono de CS: qué reportar y cómo
   - Sesión de revisión de escalaciones: cómo gestionarla de forma distribuida
   - Retrospectiva de equipo: cómo identificar mejoras en el proceso de CS

3. **Gestión de escalaciones y crisis en remoto**
   - Protocolo de escalación: niveles, tiempos de respuesta y quién interviene
   - Cómo coordinar una crisis de cliente con varias personas en distintas zonas horarias
   - Documentación de escalaciones: qué registrar y cómo hacer el post-mortem
   - Umbral de escalación: cuándo el CSM puede resolver solo y cuándo debe escalar

4. **Visibilidad de salud del cliente**
   - Modelo de health score para clientes gestionados en remoto
   - Dashboard de salud de cartera: métricas, alertas y frecuencia de revisión
   - Early warning system: señales de riesgo de churn detectables de forma asíncrona
   - Reporting de CS para dirección: qué métricas y con qué frecuencia

5. **Coordinación con otros equipos en remoto**
   - Proceso de escalación a soporte técnico o producto de forma asíncrona
   - Colaboración con ventas para upsell y renovaciones en equipos distribuidos
   - Feedback loop con producto: cómo canalizar los insights de clientes de forma sistemática

6. **Experiencia del cliente en un equipo CS remoto**
   - Cómo garantizar que el cliente no perciba la distribución del equipo como una degradación del servicio
   - Comunicaciones proactivas: plantillas y frecuencia según segmento de cliente
   - QBR en remoto: estructura, preparación y seguimiento

**Formato de respuesta:**
Incluye plantillas concretas para la documentación de cuentas, el dashboard de salud y el protocolo de escalaciones. Prioriza las recomendaciones según su impacto en retención de clientes. Señala qué indicadores sugieren que el sistema de CS remoto está fallando.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar el sistema operativo de un equipo de Customer Success distribuido',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión de proyectos freelance con clientes remotos',
                'description'      => 'Como freelancer que trabaja con clientes en diferentes países, necesitas procesos claros para gestionar proyectos, comunicarte eficazmente y proteger tu tiempo sin microgestionar a tus clientes. Este prompt ayuda a diseñar el sistema de gestión de proyectos de un freelancer que trabaja en remoto. Obtendrás un modelo que mejora la experiencia del cliente y reduce el estrés operativo.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión de proyectos freelance y trabajo remoto. Necesito tu ayuda para diseñar mi sistema de trabajo como freelancer que gestiona proyectos con clientes distribuidos en distintos países y zonas horarias.

**Mi situación:**
- Especialidad: [TU DISCIPLINA: diseño / desarrollo / consultoría / copywriting / otra]
- Número de proyectos activos simultáneos: [NÚMERO]
- Tipo de clientes: [STARTUPS / PYMES / CORPORATIVO / MIXTO]
- Distribución geográfica de clientes: [PAÍSES/ZONAS HORARIAS]
- Mayor problema actual: [DESCRIBE]

**Lo que necesito:**

1. **Sistema de onboarding de clientes remotos**
   - Checklist de inicio de proyecto: qué información necesito del cliente antes de empezar
   - Contrato y propuesta: qué cláusulas son imprescindibles para trabajo remoto
   - Primer contacto y expectativas: cómo establecer las reglas de colaboración desde el día 1
   - Accesos y herramientas: protocolo para solicitar y documentar accesos de forma segura

2. **Gestión del proyecto durante la ejecución**
   - Estructura de carpetas y documentación para proyectos remotos
   - Actualizaciones de progreso: frecuencia, formato y canal
   - Proceso de revisión y feedback: cómo estructurar las rondas de revisión de forma asíncrona
   - Gestión de cambios de alcance: cómo detectarlos, comunicarlos y facturarlos

3. **Comunicación con clientes remotos**
   - Protocolo de respuesta: cuándo responder y en qué plataforma
   - Gestión de la disponibilidad: cómo comunicar mi horario sin generar ansiedad en el cliente
   - Cómo manejar clientes que quieren reuniones constantes
   - Plantilla de actualización semanal de proyecto

4. **Entregas y aprobaciones en remoto**
   - Proceso de entrega: cómo presentar el trabajo de forma que maximice la aprobación
   - Protocolo de aprobación: qué constituye una aprobación válida en remoto
   - Gestión de revisiones ilimitadas: cómo establecer límites razonables
   - Cierre de proyecto: checklist de entrega final y solicitud de testimonial

5. **Facturación y cobro en entornos remotos**
   - Flujo de facturación para clientes internacionales
   - Gestión de pagos atrasados en remoto: cuándo y cómo reclamar
   - Herramientas de facturación para freelancers con clientes internacionales
   - Cobros por adelantado: cómo proponerlo y estructurarlo

6. **Protección del tiempo y la energía**
   - Cómo estructurar mi semana para equilibrar varios proyectos remotos
   - Límites de disponibilidad: cómo comunicarlos sin parecer poco comprometido
   - Desconexión digital: cuándo y cómo establecer límites claros con clientes
   - Señales de que un proyecto remoto se está saliendo de control y cómo reconducirlo

**Formato de respuesta:**
Incluye plantillas concretas que pueda usar directamente (propuesta, contrato, actualización semanal, checklist de cierre). Prioriza las recomendaciones según su impacto en la satisfacción del cliente y mi bienestar como freelancer. Adapta las sugerencias a mi especialidad cuando te la comparta.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar el sistema de gestión de proyectos de un freelancer con clientes remotos',
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
