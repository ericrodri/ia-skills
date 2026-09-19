<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills614Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Employer branding y atracción de talento con IA',
                'description'      => 'Usa IA para construir y comunicar la propuesta de valor como empleador, diseñando campañas de employer branding que atraigan candidatos alineados con la cultura de tu empresa.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing de recursos humanos y employer branding, especializado en construir la reputación de las empresas como lugares de trabajo excepcionales y en diseñar campañas que atraigan candidatos de alta calidad que se ajusten culturalmente a la organización.

contexto de la empresa:
Necesito desarrollar la estrategia de employer branding para [nombre de empresa], una empresa de [sector] con [número] empleados. Actualmente tenemos dificultades para atraer candidatos del perfil que necesitamos, especialmente para roles de [área]. Nuestra tasa de retención es del [porcentaje]% y el tiempo medio de cobertura de vacantes es de [días] días.

objetivo de employer branding:
Diseña una estrategia de employer branding de 12 meses que incluya:

1. DIAGNÓSTICO DE LA EMPLOYEE VALUE PROPOSITION (EVP)
Ayúdame a identificar y articular por qué alguien debería trabajar en nuestra empresa:
- Metodología para realizar una auditoría de cultura interna: encuestas de clima, entrevistas de permanencia, focus groups por generación
- Análisis de las razones por las que los mejores empleados se quedan: compensación, desarrollo, propósito, autonomía, equipo
- Benchmark de la competencia: qué prometen en sus portales de empleo y glassdoor las empresas que compiten por el mismo talento
- Identificación de las fortalezas únicas como empleador que pueden ser el núcleo de la EVP
- Redacción de la EVP en 3 versiones: frase de impacto (15 palabras), párrafo (100 palabras), texto completo (300 palabras)

2. ESTRATEGIA DE COMUNICACIÓN DE LA EVP
Diseña el plan de comunicación para dar a conocer la propuesta de valor:
- Canales propios: careers page, LinkedIn Company Page, perfiles en Glassdoor e InfoJobs
- Contenidos auténticos: testimoniales de empleados, día a día del equipo, cultura en acción, historias de crecimiento interno
- Campañas pagadas: anuncios en LinkedIn para roles estratégicos, segmentación por skills y experiencia
- Colaboraciones con universidades y bootcamps para la captación de talento junior
- Presencia en eventos: ferias de empleo, conferencias del sector, hackathons y meetups

3. PLAN DE CONTENIDOS DE EMPLOYER BRANDING
Crea el calendario editorial mensual con:
- LinkedIn: 3 posts semanales sobre cultura, equipo, proyectos y valores de empresa
- Instagram: contenido visual del ambiente de trabajo, eventos, beneficios del equipo
- YouTube/TikTok: series de contenido "un día en [nombre empresa]" con diferentes roles y departamentos
- Podcast interno o entrevistas en audio con empleados sobre su carrera y experiencia

4. MÉTRICAS DE EMPLOYER BRANDING
Define los KPIs para medir el impacto de la estrategia:
- Candidatos por vacante y calidad del pool de candidatos
- Tiempo de cobertura de vacantes y tasa de oferta aceptada
- Puntuación en Glassdoor y respuestas a encuestas de clima interno
- Alcance y engagement de contenidos de employer branding en LinkedIn
- Tasa de referidos de empleados actuales como fuente de candidatos

5. PLAN DE ACTIVACIÓN INTERNA
La marca empleadora empieza dentro de la empresa:
- Programa de embajadores de marca entre empleados satisfechos
- Formación a managers para convertirse en prescriptores de la empresa en sus redes
- Gestión de la experiencia del empleado en momentos clave del ciclo de vida

tarea inmediata:
Redacta los 5 primeros posts para LinkedIn sobre employer branding con tono auténtico y cercano, mostrando la cultura real de la empresa, los valores del equipo y por qué es un gran lugar para desarrollar una carrera profesional. Cada post debe tener mínimo 200 palabras y generar conversación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estrategia de employer branding para atraer y retener talento con IA',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Plataforma digital de onboarding para equipos técnicos con IA',
                'description'      => 'Diseña y desarrolla una plataforma de onboarding digital automatizada que acelere la integración de nuevos desarrolladores y empleados técnicos en el equipo.',
                'prompt_content'   => <<<'EOT'
Eres un desarrollador de software con experiencia en DevOps, automatización y en el diseño de sistemas de onboarding técnico para equipos de desarrollo distribuidos. Conoces las mejores prácticas de integración de nuevos ingenieros en organizaciones ágiles.

contexto técnico:
Necesito diseñar e implementar una plataforma de onboarding digital para nuevos empleados técnicos (desarrolladores, data scientists, DevOps engineers). Actualmente el proceso de onboarding es manual, inconsistente y lleva entre 2 y 4 semanas antes de que un nuevo empleado sea productivo. Queremos reducir ese tiempo y mejorar la experiencia de los recién incorporados.

objetivo del sistema:
Diseña la arquitectura técnica completa de la plataforma de onboarding:

1. ANÁLISIS DE REQUISITOS
Define las funcionalidades imprescindibles del sistema:
- Portal web personalizado para cada nuevo empleado con su plan de onboarding único
- Sistema de tareas y checklist con progreso en tiempo real y notificaciones
- Módulo de documentación técnica con búsqueda inteligente y versionado
- Integración con herramientas existentes: Slack, JIRA, GitHub, Confluence, Google Workspace
- Panel de seguimiento para managers y RRHH con métricas de progreso por empleado

2. ARQUITECTURA DEL SISTEMA
Propone la arquitectura técnica recomendada:
- Backend: API REST con Laravel o Node.js, base de datos PostgreSQL para datos estructurados
- Frontend: aplicación React o Vue.js con diseño responsive para acceso desde cualquier dispositivo
- Automatizaciones: workflows con n8n o Zapier para trigger de acciones en puntos clave del onboarding
- Infraestructura: despliegue en AWS o GCP con CI/CD automatizado
- Integraciones API: HRIS (BambooHR, Personio), Active Directory para gestión de accesos, plataformas de e-learning

3. FLUJO DE ONBOARDING AUTOMATIZADO
Diseña los workflows de automatización:
- Día -5: creación automática de cuentas, configuración de accesos, envío de email de bienvenida con instrucciones
- Día 0: activación del portal personalizado, asignación de buddy/mentor, agenda de primeras reuniones
- Semana 1: checklist de tareas técnicas (setup del entorno de desarrollo, acceso a repos, primeros commits)
- Mes 1: hitos de aprendizaje, primera revisión de desempeño de integración, encuesta de satisfacción NPS
- Mes 3: evaluación de productividad, feedback del manager, ajuste del plan de desarrollo individual

4. MÓDULO DE APRENDIZAJE TÉCNICO
Diseña el sistema de gestión del conocimiento para nuevos empleados:
- Biblioteca de recursos técnicos organizada por tecnología, proyecto y nivel de experiencia
- Learning paths personalizados según el rol: backend developer, frontend, full-stack, mobile, data
- Integración con plataformas de formación (Pluralsight, Udemy Business, Coursera) para asignación automática de cursos
- Evaluaciones de conocimiento técnico antes y después del onboarding
- Documentación viva: guías de arquitectura, ADR (Architecture Decision Records), runbooks

5. ANALÍTICA Y MEJORA CONTINUA
Define el sistema de métricas del onboarding:
- Time-to-productivity: tiempo hasta el primer pull request, primer feature en producción
- Engagement del nuevo empleado: uso del portal, completitud de tareas, participación en sesiones
- Satisfacción: NPS del proceso de onboarding recogido en semana 1, mes 1 y mes 3
- Retención a 6 y 12 meses segmentada por cohorte de onboarding

tarea de implementación:
Escribe el esquema completo de la base de datos en SQL (PostgreSQL) para gestionar el sistema de onboarding, incluyendo tablas para empleados, planes de onboarding, tareas, recursos de aprendizaje, progresos y métricas, con todas las relaciones y restricciones necesarias.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Arquitectura técnica de plataforma digital de onboarding para empleados',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencia de onboarding visual y comunicación interna con IA',
                'description'      => 'Crea materiales visuales y sistemas de comunicación que hagan del proceso de onboarding una experiencia memorable y coherente con la identidad de marca de la empresa.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de experiencia de usuario especializado en comunicación interna y diseño organizacional, con experiencia en la creación de materiales de onboarding que combinan eficacia funcional con una estética cuidada que refuerza la identidad de marca de la empresa.

contexto del proyecto de diseño:
Necesito rediseñar completamente la experiencia visual del proceso de onboarding de [nombre empresa]. Actualmente los materiales son inconsistentes, poco atractivos y no reflejan los valores de nuestra marca. Queremos que el primer contacto de un nuevo empleado con la empresa sea memorable, organizado y que comunique claramente quiénes somos.

objetivo de diseño de onboarding:
Diseña el sistema visual completo de la experiencia de onboarding:

1. KIT DE BIENVENIDA VISUAL
Define los elementos del welcome pack físico y digital:
- Diseño del paquete de bienvenida físico: caja branded, manual del empleado, merchandising de empresa
- Carta de bienvenida personalizada del CEO y del manager directo
- Guía de inicio rápido con los 10 primeros pasos del empleado
- Infografía del organigrama y estructura de la empresa con fotos del equipo
- Mapa de la oficina con ubicaciones clave: baños, cocina, salas de reunión, zona de descanso

2. SISTEMA DE DOCUMENTACIÓN VISUAL
Diseña los templates para los materiales de onboarding:
- Plantilla de presentación de empresa: historia, misión, visión, valores y cultura
- Manual del empleado: diseño editorial con tipografía legible, ilustraciones de conceptos clave, iconografía coherente
- Fichas de procesos internos: cómo solicitar vacaciones, gestionar gastos, acceder a herramientas
- Infografías de cultura: cómo nos comunicamos, cómo tomamos decisiones, cómo damos feedback
- Mapa de carrera visual: itinerarios de desarrollo profesional por área y nivel

3. EXPERIENCIA DIGITAL DE ONBOARDING
Diseña la interfaz del portal de onboarding:
- Dashboard de bienvenida personalizado: foto del nuevo empleado, nombre, cargo y equipo
- Checklist visual con progreso gamificado: barras de progreso, celebraciones al completar hitos
- Página de presentación del equipo con fotos, roles y datos curiosos de cada persona
- Sección de cultura con vídeos, fotos y testimoniales de empleados actuales
- Diseño responsive adaptado a móvil para acceder desde cualquier dispositivo

4. COMUNICACIONES DE ONBOARDING
Diseña los templates de comunicación:
- Email de bienvenida: diseño HTML branded con tono cálido y estructura clara
- Secuencia de emails de los primeros 30 días: un email semanal con información progresiva
- Mensajes de Slack de bienvenida del equipo y del bot de onboarding
- Invitaciones a reuniones: formato visual con agenda y objetivos claros
- Encuestas de feedback: diseño que incentive la respuesta honesta

5. MEDICIÓN DE LA EXPERIENCIA DE DISEÑO
Define cómo medir el impacto del rediseño:
- Encuesta de satisfacción con el proceso de onboarding enfocada en la experiencia visual
- Tasa de completitud de materiales y tareas del onboarding
- Net Promoter Score del nuevo empleado al finalizar el primer mes
- Comparativa antes/después del rediseño en retención a 90 días

tarea creativa:
Diseña el storyboard completo de la experiencia del primer día de un nuevo empleado, desde que abre el email de bienvenida hasta que se va a casa por la noche, describiendo en detalle cada touchpoint visual, los materiales que recibe, las interacciones con el equipo y las emociones que queremos generar en cada momento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Sistema visual de onboarding y comunicación interna para nuevos empleados',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Onboarding acelerado para equipos de ventas con IA',
                'description'      => 'Diseña un programa de incorporación rápida para comerciales nuevos que les permita cerrar sus primeras ventas en el menor tiempo posible.',
                'prompt_content'   => <<<'EOT'
Eres un director de ventas con amplia experiencia en la formación y ramping de equipos comerciales, especializado en diseñar programas de onboarding que reducen el tiempo hasta la primera venta y aceleran la curva de aprendizaje de los nuevos comerciales.

contexto del equipo de ventas:
Tengo un equipo de ventas en crecimiento y necesito un proceso de onboarding estructurado para los nuevos comerciales. Actualmente el tiempo medio hasta la primera venta es de [número] meses, y quiero reducirlo a [número objetivo] meses. Los nuevos comerciales necesitan aprender [producto/servicio], el proceso de ventas de la empresa y el mercado objetivo.

objetivo de onboarding de ventas:
Diseña el programa completo de incorporación comercial:

1. SEMANA 0: PREPARACIÓN ANTES DE LA INCORPORACIÓN
Define qué debe estar listo antes del primer día:
- Accesos a CRM (Salesforce, HubSpot, Pipedrive), herramientas de prospección y email
- Asignación del territorio, vertical o segmento de mercado desde el primer día
- Buddy de ventas asignado: un comercial senior con disponibilidad para acompañar
- Materiales de lectura previa: estudios de mercado, casos de éxito, testimoniales de clientes

2. PRIMERAS 2 SEMANAS: INMERSIÓN EN PRODUCTO Y MERCADO
Diseña el programa de formación intensiva:
- Formación de producto: sesiones con el equipo de producto y demostraciones en vivo
- Inmersión en el cliente: llamadas de escucha con comerciales experimentados, revisión de grabaciones de ventas exitosas
- Conocimiento de la competencia: análisis comparativo de producto, objeciones frecuentes y cómo responderlas
- Roleplay de ventas: simulaciones con el manager para practicar el pitch, demos y gestión de objeciones
- Certificación de conocimiento del producto antes de hablar con clientes reales

3. SEMANAS 3-4: PRIMERAS INTERACCIONES CON CLIENTES REALES
Estructura la transición a la actividad comercial real:
- Acompañamiento de llamadas: el nuevo comercial observa y luego el manager observa al comercial
- Primeras llamadas de prospección con soporte del buddy de ventas
- Primera demo de producto a un prospecto real con feedback estructurado del manager
- Revisión semanal del pipeline y coaching individualizado sobre actividades de prospección
- Objetivo de actividad: número mínimo de llamadas, emails y demostraciones por semana

4. MES 2-3: RAMPING HACIA LA CUOTA COMPLETA
Define el proceso de escalada de responsabilidad:
- Cuota rampeada: porcentaje de la cuota objetivo para el mes 1, 2 y 3
- Gestión independiente del pipeline con check-ins semanales con el manager
- Participación en reuniones de equipo de ventas: forecast, pipeline review, deal strategy sessions
- Primeras negociaciones y cierres con soporte del manager o un senior
- Plan de 30-60-90 días con objetivos claros, medibles y revisables

5. MÉTRICAS DE ONBOARDING COMERCIAL
Define los KPIs para evaluar el éxito del programa:
- Time to first deal: días hasta el primer cierre
- Ramping time: meses hasta alcanzar el 100% de la cuota
- Actividad en las primeras 4 semanas: llamadas, demos, propuestas enviadas
- Satisfacción del nuevo comercial con el programa de onboarding (encuesta)
- Retención a 12 meses de los comerciales que pasan por el programa

tarea de implementación:
Crea el plan de 90 días completo y detallado para un nuevo account executive B2B, con objetivos específicos, actividades diarias para las primeras 2 semanas y semanales para el resto del periodo, recursos de aprendizaje y criterios de evaluación para cada etapa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Programa de onboarding para acortar el tiempo hasta la primera venta de nuevos comerciales',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Mejora de la experiencia del empleado en equipos de producto con IA',
                'description'      => 'Diseña iniciativas de employee experience que aumenten el compromiso, la productividad y la retención en equipos de producto y tecnología.',
                'prompt_content'   => <<<'EOT'
Eres un experto en diseño de experiencia del empleado (EX) con enfoque en equipos de producto y tecnología, especializado en crear entornos de trabajo que potencian la motivación intrínseca, la autonomía y el crecimiento de los profesionales más técnicos y creativos.

contexto del equipo de producto:
Lidero un equipo de [número] personas entre product managers, diseñadores UX y desarrolladores. La encuesta de clima más reciente muestra áreas de mejora en [áreas: autonomía, feedback, desarrollo profesional, colaboración, equilibrio vida-trabajo]. La rotación del equipo ha sido del [porcentaje]% en el último año y queremos revertir esa tendencia.

objetivo de employee experience:
Diseña un plan de mejora de la experiencia del empleado para equipos de producto:

1. DIAGNÓSTICO DE LA EXPERIENCIA ACTUAL
Estructura el proceso de investigación interna:
- Employee Journey Map: mapeo de todos los momentos clave en la vida de un empleado del equipo (incorporación, proyectos, promociones, revisiones, reconocimiento, salida)
- Encuesta de Employee Net Promoter Score (eNPS) trimestral con preguntas específicas por área
- Entrevistas de permanencia (stay interviews) con los empleados más valiosos para entender qué les retiene
- Análisis de datos de RRHH: rotación por departamento, ausentismo, uso de beneficios, tiempo de cobertura de vacantes

2. DISEÑO DEL EMPLOYEE JOURNEY IDEAL
Define cómo debería sentirse cada etapa del ciclo de vida del empleado:
- Onboarding: primeras 4 semanas de integración en el equipo de producto y los proyectos activos
- Desarrollo: oportunidades de aprendizaje, proyectos desafiantes, mentoring y feedback continuo
- Reconocimiento: sistema de reconocimiento entre pares y del manager para celebrar logros y contribuciones
- Bienestar: equilibrio vida-trabajo, flexibilidad, gestión del burnout en momentos de alta presión
- Offboarding: proceso de salida digno que preserve la relación y facilite la transición del conocimiento

3. INICIATIVAS DE MEJORA POR ÁREA
Propone acciones concretas para las principales palancas de engagement:
- Autonomía y propósito: OKRs co-creados, autonomía en el cómo (no solo el qué), participación en decisiones de producto
- Aprendizaje: presupuesto individual de formación, Innovation Fridays, time to learn, rotaciones entre equipos
- Feedback: one-on-ones semanales estructurados, feedback 360 semestral, retrospectivas de equipo
- Reconocimiento: sistema de kudos peer-to-peer, celebración de logros en all-hands, compensación ligada al desempeño
- Comunidad: rituales de equipo, retiros anuales, canales de Slack para intereses no laborales

4. EXPERIENCIA DE TRABAJO REMOTO E HÍBRIDO
Diseña la estrategia para equipos distribuidos:
- Async-first communication: documentación de decisiones, video updates, menos reuniones y más eficaces
- Reuniones de equipo sincrónicas: formato, frecuencia y facilitación de daily stand-ups, planning y retrospectivas
- Cultura de documentación: cómo asegurar que el conocimiento fluye en equipos híbridos
- Momentos de conexión: onsite trimestrales, virtual coffees, hackathons remotos

5. MEDICIÓN Y MEJORA CONTINUA
Define el sistema de seguimiento de la experiencia del empleado:
- Dashboard de employee experience con eNPS, rotación, absentismo y uso de beneficios
- Pulso mensual de 3 preguntas para detectar problemas antes de que sean irreversibles
- Revisión trimestral de iniciativas: ¿qué está funcionando? ¿qué hay que ajustar?

tarea práctica:
Diseña el guion completo de una entrevista de permanencia (stay interview) de 30 minutos para tener con los mejores empleados del equipo de producto, con preguntas que permitan identificar sus motivaciones, expectativas y posibles riesgos de rotación, y con instrucciones para el manager sobre cómo crear el ambiente de confianza necesario para una conversación honesta.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Plan de mejora de la experiencia del empleado en equipos de producto y tecnología',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Programa de onboarding estructurado con IA para RRHH',
                'description'      => 'Diseña un programa de onboarding integral y escalable que garantice una integración exitosa de todos los nuevos empleados, independientemente del departamento o nivel.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en recursos humanos con amplia experiencia en el diseño e implementación de programas de onboarding en empresas de crecimiento rápido, conocedor de las mejores prácticas internacionales para reducir el tiempo hasta la productividad y aumentar la retención temprana de talento.

contexto organizacional:
Somos una empresa de [sector] con [número] empleados y estamos incorporando entre [número] y [número] personas nuevas al mes. Actualmente no tenemos un proceso de onboarding estandarizado y cada departamento lo gestiona de forma diferente, con resultados inconsistentes. La tasa de abandono en los primeros 6 meses es del [porcentaje]% y queremos mejorarla significativamente.

objetivo del programa de onboarding:
Diseña el programa de onboarding corporativo completo:

1. ESTRUCTURA DEL PROGRAMA DE ONBOARDING
Define la arquitectura general del programa:
- Pre-boarding (días -10 a -1): acciones antes del primer día para reducir la ansiedad y preparar al empleado
- Onboarding corporativo (semana 1): contenido común a todos los empleados independientemente del departamento
- Onboarding departamental (semanas 2-4): integración específica en el equipo y aprendizaje del rol
- Onboarding de rol (mes 2-3): dominio de las responsabilidades específicas del puesto con hitos claros
- Revisión de integración (mes 3 y 6): evaluación del proceso y ajustes del plan de desarrollo individual

2. CONTENIDOS DEL ONBOARDING CORPORATIVO
Define qué debe aprender cada nuevo empleado en la primera semana:
- Historia de la empresa: fundación, hitos, evolución, cultura y valores en acción
- Organización y liderazgo: presentación del equipo directivo, estructura organizativa, cómo se toman las decisiones
- Políticas de empresa: código de conducta, política de privacidad, herramientas y sistemas de información
- Beneficios y compensación: explicación detallada del paquete retributivo, beneficios sociales y cómo acceder a ellos
- Mapa de recursos: quién es quién para cada tipo de consulta, dónde está la información, cómo pedir ayuda

3. SISTEMA DE BUDDY Y MENTORING
Diseña el programa de acompañamiento entre compañeros:
- Criterios de selección del buddy: voluntario, mínimo 1 año de antigüedad, buen communicator, representativo de la cultura
- Formación del buddy: qué se espera de él, cómo dar feedback útil, cómo gestionar las dudas del nuevo compañero
- Agenda de interacciones buddy-nuevo empleado: encuentros semanales durante el primer mes, quincenales el segundo
- Evaluación del programa de buddy: satisfacción del nuevo empleado y del buddy, impacto en la integración

4. GESTIÓN DE LOS PRIMEROS 90 DÍAS
Estructura el seguimiento por parte de RRHH:
- Check-in de fin de semana 1: ¿primeras impresiones? ¿qué le ha sorprendido? ¿qué necesita?
- Revisión de fin de mes 1: evaluación del avance, identificación de gaps de conocimiento, ajuste del plan
- Evaluación de fin de periodo de prueba: feedback del manager, autoevaluación del empleado, decisión de confirmación
- Plan de desarrollo para los siguientes 6 meses: objetivos, formación y hitos de crecimiento

5. AUTOMATIZACIÓN Y ESCALABILIDAD DEL PROCESO
Define cómo escalar el onboarding con tecnología:
- Checklist digital en el HRIS o LMS con tareas asignadas a empleado, manager y RRHH
- Emails automáticos de bienvenida y seguimiento en momentos clave del proceso
- Biblioteca de recursos digitales accesible desde el día 1 organizada por departamento y rol
- Encuestas automatizadas de NPS en semana 1, mes 1 y mes 3 para medir la satisfacción del proceso

tarea práctica:
Crea el checklist completo de las 50 tareas del onboarding de los primeros 30 días, organizado por responsable (empleado, manager, RRHH, buddy, IT), con el día exacto en que debe completarse cada tarea y la consecuencia de no completarla a tiempo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño de programa de onboarding corporativo escalable y medible',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis del ROI de programas de employee experience con IA',
                'description'      => 'Calcula el retorno sobre la inversión de los programas de experiencia del empleado y onboarding para justificar el presupuesto ante la dirección financiera.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en la medición del impacto económico de las inversiones en capital humano, con experiencia en la construcción de modelos de ROI para programas de recursos humanos y en la presentación de resultados ante comités de dirección y consejos de administración.

contexto del análisis:
Necesito construir un modelo financiero que demuestre el ROI de invertir en programas de mejora de la experiencia del empleado y onboarding. El equipo directivo y el CFO necesitan ver el impacto económico antes de aprobar el presupuesto de [cantidad] euros para estos programas.

objetivo del análisis financiero:
Diseña el modelo completo de ROI para programas de employee experience:

1. CUANTIFICACIÓN DE LOS COSTES ACTUALES DE LA MALA EXPERIENCIA DEL EMPLEADO
Ayúdame a calcular cuánto cuesta el problema actual:
- Coste de rotación por empleado: reclutamiento, selección, onboarding, tiempo hasta productividad, pérdida de conocimiento
- Coste del absentismo: días perdidos por baja motivación, burnout o desenganche
- Coste de la baja productividad: impacto de empleados desenganchados en la productividad del equipo
- Coste de los errores y la mala calidad: relación entre engagement y tasa de errores
- Coste reputacional: impacto en la capacidad de atraer talento de calidad (employer branding)

2. MODELO DE COSTES DEL PROGRAMA
Define todos los costes de implementación:
- Costes directos: tecnología (HRIS, LMS, plataforma de onboarding), materiales, kit de bienvenida
- Costes de personal: horas de RRHH para diseño e implementación, tiempo de managers en buddy sessions y check-ins
- Costes de formación: cursos externos, speakers, suscripciones a plataformas de e-learning
- Costes de eventos: team buildings, retiros, eventos de empresa para reforzar la cultura
- Costes recurrentes anuales vs costes de implementación únicos

3. BENEFICIOS CUANTIFICABLES DEL PROGRAMA
Modela los beneficios económicos esperados:
- Reducción de la rotación: si bajamos la rotación del X% al Y%, ¿cuánto ahorramos en costes de sustitución?
- Aumento de la productividad: impacto de mejorar el engagement en las métricas de output del negocio
- Reducción del time-to-productivity: cada semana de onboarding más rápido tiene un valor económico
- Mejora de la calidad del reclutamiento: employer branding fuerte reduce el coste por contratación
- Reducción del absentismo: correlación entre engagement y días de baja voluntaria

4. CONSTRUCCIÓN DEL MODELO FINANCIERO
Diseña el modelo con proyección a 3 años:
- Año 0: inversión inicial de implementación y primeros costes operativos
- Año 1-3: ahorros acumulados por reducción de rotación, absentismo y mejora de productividad
- Cálculo del payback period: ¿en cuántos meses se recupera la inversión?
- ROI global del programa: (beneficios - costes) / costes x 100
- Análisis de sensibilidad: escenarios optimista, realista y pesimista

5. PRESENTACIÓN EJECUTIVA DEL ROI
Diseña el formato de presentación para el comité de dirección:
- Resumen ejecutivo de una página con los números más impactantes
- Visualizaciones de datos: gráfico de payback, comparativa de costes actuales vs con el programa
- Benchmarks del sector: datos de estudios sobre el ROI medio de programas de employee experience
- Gestión de riesgos: ¿qué podría salir mal? ¿cómo mitigamos los riesgos de la inversión?

tarea concreta:
Crea la plantilla completa del modelo de ROI en formato tabla con todas las fórmulas necesarias para calcular el retorno de una inversión de 50.000 euros en un programa de onboarding y employee experience para una empresa de 200 empleados con una rotación actual del 25% anual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Modelo financiero de ROI para programas de employee experience y onboarding',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal del proceso de onboarding y contratación con IA',
                'description'      => 'Garantiza el cumplimiento legal en cada etapa del proceso de incorporación de nuevos empleados, desde la oferta hasta el periodo de prueba.',
                'prompt_content'   => <<<'EOT'
Eres un abogado laboralista especializado en derecho del trabajo español y europeo, con experiencia en el asesoramiento a empresas sobre el cumplimiento normativo en los procesos de contratación, incorporación y gestión del periodo de prueba de nuevos empleados.

contexto legal:
Necesito asegurar que nuestro proceso de onboarding y contratación cumple con toda la normativa laboral aplicable en España. Queremos profesionalizar el proceso y evitar riesgos legales relacionados con la contratación, la documentación, el periodo de prueba y la protección de datos de los empleados.

objetivo de compliance laboral:
Proporciona una guía legal completa del proceso de incorporación de nuevos empleados:

1. PROCESO DE CONTRATACIÓN Y DOCUMENTACIÓN
Detalla los documentos obligatorios en la contratación:
- Contrato de trabajo: tipos de contrato vigentes tras la Reforma Laboral de 2022 (indefinido, temporal, formativo, a tiempo parcial)
- Cláusulas obligatorias del contrato: jornada, salario, categoría profesional, convenio colectivo aplicable
- Documentos complementarios: acuerdo de confidencialidad, cláusula de no competencia post-contractual (requisitos de validez y compensación)
- Comunicación a la SEPE: alta en la Seguridad Social y comunicación del contrato a través del servicio Red de la TGSS
- Entrega obligatoria al trabajador de copia del contrato y nómina a mes vencido

2. PERIODO DE PRUEBA
Explica el régimen legal del periodo de prueba:
- Duración máxima según convenio colectivo y categoría del trabajador
- Extinción durante el periodo de prueba: ¿es libre? ¿qué consecuencias tiene no respetar el preaviso?
- Suspensión del periodo de prueba por IT, maternidad/paternidad o excedencias
- Obligaciones de buena fe durante el periodo de prueba: no discriminación, igualdad de condiciones
- Indemnización: ¿corresponde indemnización al extinguir durante el periodo de prueba?

3. PROTECCIÓN DE DATOS EN EL ONBOARDING
Explica los requisitos del RGPD en la incorporación de empleados:
- Información al trabajador sobre el tratamiento de sus datos personales (art. 13 RGPD)
- Categorías de datos que puede tratar el empleador: datos identificativos, bancarios, de salud (solo para bajas), biométricos
- Consentimiento del trabajador: cuándo es necesario y cuándo no es base legal válida en el contexto laboral
- Transferencias internacionales de datos en empresas con sede en otros países de la UE o fuera de la UE
- Política de uso de los sistemas de información de la empresa: email, internet, dispositivos corporativos

4. IGUALDAD Y NO DISCRIMINACIÓN EN EL ONBOARDING
Detalla las obligaciones en materia de igualdad:
- Plan de igualdad obligatorio para empresas de más de 50 trabajadores: impacto en el proceso de selección y onboarding
- Protocolo de acoso sexual y por razón de sexo: obligación de implementarlo y comunicarlo en el onboarding
- Adaptación del puesto de trabajo para personas con discapacidad: obligaciones y ayudas disponibles
- Cuotas de reserva para personas con discapacidad en empresas de más de 50 trabajadores (2%)

5. GESTIÓN DE LA SALIDA DURANTE O DESPUÉS DEL ONBOARDING
Explica el régimen de extinción del contrato en los primeros meses:
- Extinción durante el periodo de prueba: procedimiento correcto para evitar reclamaciones
- Despido disciplinario y objetivo: diferencias, requisitos y consecuencias económicas
- Gestión de la baja voluntaria del trabajador: preaviso, liquidación y finiquito
- Documentación de salida: carta de despido o baja, finiquito y carta de referencia

tarea legal:
Elabora un checklist de 25 puntos de compliance laboral que el departamento de RRHH debe verificar en cada nueva incorporación, con la referencia normativa específica (artículo del ET, RGPD u otra ley) y el riesgo legal concreto que se evita con cada comprobación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Cumplimiento legal en el proceso de contratación e incorporación de empleados en España',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Onboarding de equipos de atención al cliente con IA',
                'description'      => 'Diseña un programa de incorporación para agentes de customer support que reduzca el tiempo hasta la resolución autónoma de casos y mejore la satisfacción del cliente desde el primer día.',
                'prompt_content'   => <<<'EOT'
Eres un director de customer success con experiencia en el desarrollo de equipos de soporte de alto rendimiento, especializado en el diseño de programas de formación y onboarding que preparan a los agentes para ofrecer una experiencia de cliente excepcional desde el inicio de su incorporación.

contexto del equipo de soporte:
Mi equipo de customer support atiende [número] de tickets/casos al día a través de [canales: email, chat en vivo, teléfono, redes sociales]. Los nuevos agentes tardan actualmente [número] semanas en gestionar casos de forma autónoma con garantías de calidad. Queremos reducir ese tiempo y mejorar los indicadores de satisfacción del cliente (CSAT, NPS) desde las primeras semanas.

objetivo del onboarding de soporte:
Diseña el programa completo de incorporación para agentes de customer support:

1. SEMANA 1: INMERSIÓN EN PRODUCTO Y CLIENTE
Define el contenido de la primera semana:
- Conocimiento del producto: demo exhaustiva del producto o servicio, casos de uso principales, funcionalidades más consultadas
- Conocimiento del cliente: buyer personas, casos de uso reales, segmentos de clientes y sus particularidades
- Revisión de tickets históricos: análisis de los 100 tickets más frecuentes y las respuestas de mayor calidad
- Shadowing con agente senior: escuchar llamadas, leer chats en vivo, ver cómo se resuelven casos complejos
- Familiarización con herramientas: Zendesk/Intercom/Freshdesk, CRM, base de conocimiento interna, macros y plantillas

2. SEMANA 2: PRÁCTICA GUIADA
Diseña la transición al trabajo real con supervisión:
- Primeros tickets con revisión del supervisor antes de enviar la respuesta
- Roleplay de casos difíciles: clientes enfadados, reclamaciones de devolución, bugs críticos, escaladas
- Formación en técnicas de comunicación escrita y verbal: empatía, claridad, resolución en el primer contacto
- Objetivos de actividad: número de tickets resueltos por día con aumento progresivo
- Sesión de calibración de calidad: revisión conjunta de las respuestas enviadas y feedback estructurado

3. CERTIFICACIONES DE PRODUCTO Y PROCESO
Define los hitos de certificación antes de la autonomía completa:
- Certificación de producto básico: prueba de conocimiento de las funcionalidades más consultadas
- Certificación de procesos: conocimiento de los flujos de escalada, SLAs por tipo de ticket y políticas de empresa
- Certificación de herramientas: manejo fluido del helpdesk, CRM y base de conocimiento
- Certificación de calidad: muestra de tickets revisados por el QA con puntuación mínima

4. MÉTRICAS DE ONBOARDING DE SOPORTE
Define los KPIs para evaluar el progreso del nuevo agente:
- Tiempo de primera respuesta en las primeras semanas vs objetivo del equipo
- Tasa de resolución en el primer contacto (FCR) semana a semana durante el onboarding
- CSAT de los tickets gestionados por el nuevo agente vs media del equipo
- Tasa de escalada: qué porcentaje de sus tickets necesita escalar a soporte nivel 2 o al manager
- Satisfacción del nuevo agente con el proceso de onboarding

5. GESTIÓN DEL CONOCIMIENTO PARA NUEVOS AGENTES
Diseña el sistema de knowledge management que soporte el onboarding:
- Base de conocimiento interna: estructura, mantenimiento y cómo los nuevos agentes deben usarla
- Runbooks para los casos más frecuentes: instrucciones paso a paso para resolver los casos más comunes
- Árbol de decisión para escaladas: criterios claros para decidir cuándo escalar un caso
- Proceso de contribución a la base de conocimiento: cómo los agentes añaden artículos cuando detectan gaps

tarea de implementación:
Crea el programa de la primera semana de onboarding de un agente de customer support con horario hora por hora para los primeros 5 días, especificando qué aprende, con quién trabaja, qué practica y cómo se evalúa cada día, con el objetivo de que al final de la semana pueda resolver de forma autónoma los 20 casos más frecuentes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Programa de onboarding para agentes de customer support con objetivos de calidad desde el primer día',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Creación de materiales de onboarding como servicio freelance con IA',
                'description'      => 'Ofrece servicios de diseño y creación de materiales de onboarding a empresas como freelancer, desde manuales del empleado hasta plataformas digitales de bienvenida.',
                'prompt_content'   => <<<'EOT'
Eres un consultor freelance especializado en diseño de procesos de onboarding y experiencia del empleado, con experiencia en la venta y entrega de proyectos de consultoría de RRHH para empresas medianas en crecimiento que no tienen recursos internos para desarrollar estos programas.

contexto del freelance:
Soy un profesional con experiencia en [RRHH/L&D/diseño instruccional/comunicación interna] y quiero ofrecer servicios de creación de materiales de onboarding como freelancer. Veo una oportunidad en el mercado porque muchas empresas medianas (50-500 empleados) no tienen los recursos internos para desarrollar estos programas de forma profesional.

objetivo de negocio freelance:
Diseña el modelo de servicio completo para mi consultoría de onboarding:

1. DEFINICIÓN DEL CATÁLOGO DE SERVICIOS
Estructura la oferta de servicios en niveles:
- Servicio básico - Kit de bienvenida: manual del empleado, checklist de primeros días, guía de herramientas y contactos clave. Precio estimado: 1.500-3.000 euros, entrega en 2 semanas
- Servicio estándar - Programa de onboarding completo: diseño del journey de 90 días, materiales por departamento, templates de comunicación, formación al equipo de RRHH. Precio: 5.000-10.000 euros, entrega en 4-6 semanas
- Servicio premium - Transformación del employee experience: diagnóstico completo, diseño de la EVP, programa de onboarding digital con integración en HRIS, formación de managers y métricas de seguimiento. Precio: 15.000-30.000 euros, duración de 3-6 meses
- Retainer mensual: soporte continuo al equipo de RRHH, actualización de materiales y análisis de métricas. Precio: 1.000-2.500 euros/mes

2. PROCESO DE VENTA Y CAPTACIÓN DE CLIENTES
Define cómo conseguir los primeros clientes:
- Propuesta de valor única: por qué contratar a un especialista externo en lugar de hacerlo internamente
- Canales de captación: LinkedIn (contenidos sobre employee experience), referencias de clientes anteriores, partnerships con consultoras de RRHH, plataformas de freelancers especializadas (Toptal, Malt, Workana)
- Proceso de propuesta: reunión de descubrimiento gratuita de 45 minutos, propuesta personalizada en 48h, demo de trabajos anteriores anonimizados
- Gestión de objeciones: precio, tiempo de dedicación interna requerido, confidencialidad

3. METODOLOGÍA DE ENTREGA DE PROYECTOS
Estandariza tu proceso de trabajo:
- Fase 1 - Diagnóstico (1 semana): entrevistas con RRHH, managers y empleados recientes, revisión del proceso actual
- Fase 2 - Diseño (2-3 semanas): creación de materiales, revisión con el cliente, ajustes
- Fase 3 - Implementación (1-2 semanas): formación al equipo de RRHH, configuración de herramientas digitales, piloto con un grupo de nuevos empleados
- Fase 4 - Seguimiento (30-60 días): análisis de primeros resultados, ajustes y entrega del informe final

4. HERRAMIENTAS Y TEMPLATES
Define las herramientas y plantillas que forman tu toolkit de trabajo:
- Suite de diseño: Canva Pro o Adobe Creative Suite para materiales visuales de alta calidad
- Plataformas de e-learning: Notion, Teachable o TalentLMS para onboarding digital
- Gestión de proyectos: Asana o Monday.com para gestionar el avance del proyecto con el cliente
- Biblioteca de templates: manual del empleado, checklist de onboarding, encuestas de satisfacción, plan de 30-60-90 días

5. POSICIONAMIENTO Y CRECIMIENTO DEL NEGOCIO
Diseña la estrategia de crecimiento a largo plazo:
- Especialización por sector: ¿conviene especializarse en startups tecnológicas, pymes industriales o empresas del sector servicios?
- Creación de productos digitales: templates de onboarding en Notion o Canva para vender en Gumroad o Etsy
- Formación online: curso sobre cómo diseñar un programa de onboarding para directores de RRHH
- Certificaciones: Certified Professional in Learning and Performance (CPLP), certificaciones en diseño instruccional

tarea de arranque:
Redacta una propuesta de servicios de 3 páginas dirigida a una empresa de 150 empleados del sector tecnológico que quiere mejorar su proceso de onboarding, incluyendo diagnóstico inicial del problema, metodología de trabajo, entregables específicos, cronograma y propuesta económica detallada con diferentes opciones de inversión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Modelo de negocio freelance para servicios de diseño de onboarding y employee experience',
                'vote_score'       => 33,
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
