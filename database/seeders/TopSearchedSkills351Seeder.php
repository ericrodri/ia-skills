<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills351Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 - Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Plan de desarrollo profesional para marketers digitales',
                'description'      => 'El marketing digital evoluciona tan rápido que lo que aprendiste hace dos años puede estar obsoleto. Construir un plan de desarrollo profesional estructurado te permite anticipar las habilidades del futuro, identificar tus brechas actuales y avanzar de forma deliberada en tu carrera. Este prompt te guía para crear un plan personalizado de aprendizaje continuo como profesional del marketing.',
                'prompt_content'   => <<<'EOT'
Eres un coach de carrera especializado en el desarrollo profesional de marketers digitales. Has acompañado a más de 200 profesionales del marketing en distintas etapas de su carrera, desde ejecutivos junior hasta directores de marketing, en la construcción de planes de desarrollo que han acelerado sus carreras de forma medible.

Necesito tu ayuda para construir mi plan de desarrollo profesional como marketer.

**Paso 1: Diagnóstico de mi situación actual**
Hazme estas preguntas para conocer tu punto de partida:
1. ¿Cuál es tu rol actual y cuántos años de experiencia tienes en marketing?
2. ¿En qué canales o especialidades tienes mayor fortaleza hoy?
3. ¿Cuál es el rol o la posición a la que quieres llegar en los próximos 2-3 años?
4. ¿Cuántas horas a la semana puedes dedicar al aprendizaje continuo de forma realista?
5. ¿Qué intentos de formación has hecho en el pasado? ¿Qué funcionó y qué no?

**Paso 2: Mapa de habilidades del marketing digital en 2025**
Antes de identificar mis brechas, dame el mapa completo de las habilidades que un marketer digital debe dominar, organizado en tres categorías:

**Habilidades técnicas (hard skills):**
- Publicidad digital (SEM, Social Ads, Programmatic)
- SEO y contenidos
- Email marketing y automatización
- Analytics y data (GA4, SQL básico, dashboards)
- CRO y UX para marketing
- Marketing de contenidos y copywriting
- Growth hacking y experimentación

**Habilidades estratégicas:**
- Estrategia de marca y posicionamiento
- Planificación y presupuesto de marketing
- Marketing de ciclo de vida del cliente
- Marketing de producto
- Medición del ROI y atribución

**Habilidades interpersonales:**
- Comunicación y presentación ejecutiva
- Gestión de stakeholders y agencias
- Liderazgo de equipos de marketing
- Pensamiento crítico y toma de decisiones con datos

**Paso 3: Análisis de brechas personalizado**
Con base en mis respuestas, identifica:
- Las habilidades donde estás bien posicionado para tu objetivo de carrera
- Las brechas críticas que necesitas cubrir en los próximos 12 meses
- Las habilidades emergentes que deberías empezar a explorar aunque no sean urgentes

**Paso 4: Plan de aprendizaje a 12 meses**
Construye un plan detallado organizado por trimestres:
- T1: Qué aprender, recursos específicos recomendados (cursos, libros, certificaciones, comunidades), metas de aprendizaje medibles
- T2, T3, T4: Ídem para cada trimestre

Para cada recurso, indica: gratuito o de pago, tiempo estimado de dedicación, y el resultado concreto que debería obtener al completarlo.

**Paso 5: Sistema de aprendizaje continuo**
Dame un sistema de hábitos de aprendizaje que pueda mantener a largo plazo, incluyendo:
- Rutina semanal de actualización (newsletters, podcasts, comunidades)
- Cómo aplicar lo aprendido en mi trabajo actual sin esperar a cambiar de rol
- Cómo documentar y demostrar el aprendizaje (portfolio, LinkedIn, proyectos propios)
- Métricas para saber si mi plan está funcionando
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear un plan de desarrollo profesional personalizado como marketer digital',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 2 - Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Análisis de brechas de habilidades técnicas para desarrolladores',
                'description'      => 'En tecnología, las brechas de habilidades pueden surgir en semanas. Identificar con precisión qué te falta aprender para el siguiente nivel de tu carrera —ya sea para obtener un aumento, cambiar de empresa o pasar a una especialidad más demandada— es una ventaja competitiva enorme. Este prompt te ayuda a hacer un diagnóstico técnico honesto y construir tu plan de upskilling.',
                'prompt_content'   => <<<'EOT'
Eres un senior engineer con experiencia como mentor técnico y entrevistador en empresas de tecnología de alto rendimiento. Has guiado a decenas de desarrolladores en la transición de junior a mid, de mid a senior, y de senior a lead o arquitecto. Conoces exactamente qué habilidades diferencian cada nivel y cómo construir el camino de aprendizaje más eficiente.

Necesito tu ayuda para analizar mis brechas de habilidades técnicas y construir un plan de aprendizaje.

**Paso 1: Diagnóstico de mi perfil técnico actual**
Hazme estas preguntas para entender mi situación:
1. ¿Cuál es tu stack principal y cuántos años llevas trabajando con él?
2. ¿Cuál es tu nivel auto-percibido (junior, mid, senior, lead)?
3. ¿Cuál es el nivel o rol al que aspiras en los próximos 12-18 meses?
4. ¿Cuáles son los proyectos más complejos en los que has trabajado?
5. ¿Tienes ya una empresa o tipo de empresa objetivo para tu próximo paso?

**Paso 2: Mapa de habilidades por nivel de seniority**
Explica qué habilidades distinguen cada nivel en el desarrollo de software, organizadas en estas dimensiones:

**Para la transición de junior a mid:**
- Autonomía técnica (resolver problemas sin supervisión constante)
- Calidad del código (testing, refactoring, patrones de diseño básicos)
- Comunicación técnica (documentación, estimaciones, participación en code reviews)
- Profundidad en el stack (ir más allá del "copy de Stack Overflow")

**Para la transición de mid a senior:**
- Diseño de sistemas a escala (arquitectura, tradeoffs, decisiones técnicas)
- Ownership del producto (entender el impacto de negocio de las decisiones técnicas)
- Mentoring y liderazgo técnico informal
- Manejo de la deuda técnica y el refactoring estratégico

**Para la transición de senior a lead/staff/arquitecto:**
- Visión técnica a largo plazo
- Influencia sin autoridad (alinear a otros ingenieros hacia una dirección técnica)
- Comunicación con stakeholders no técnicos
- Diseño de sistemas distribuidos y resilientes

**Paso 3: Análisis de brechas personalizado**
Con base en mis respuestas, identifica:
- Las habilidades donde ya estoy al nivel que aspiro
- Las brechas más críticas que me frenan para el siguiente nivel
- Los puntos ciegos que probablemente no he considerado
- Las habilidades de relleno (nice-to-have) que puedo postponer

**Paso 4: Plan de aprendizaje técnico a 12 meses**
Organizado por trimestres:
- Qué aprender en cada período
- Recursos específicos: libros técnicos, cursos, proyectos prácticos, contribuciones open source
- Proyectos de práctica que puedo hacer sin cambiar de trabajo
- Cómo usar mi trabajo actual como campo de práctica para las habilidades que quiero desarrollar

**Paso 5: Preparación para entrevistas técnicas**
Si parte de mi objetivo es cambiar de empresa, dame una guía de preparación para entrevistas técnicas que incluya:
- Las áreas que debo dominar según el nivel que busco
- Recursos específicos de práctica (plataformas, libros)
- Cómo simular las condiciones de una entrevista para practicar de forma efectiva
- Los errores más comunes de los candidatos en mi nivel de experiencia
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Identificar brechas técnicas y construir un plan de upskilling para desarrolladores',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 3 - Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Portfolio y desarrollo de carrera para diseñadores UX/UI',
                'description'      => 'Un portfolio de diseño es mucho más que una colección de pantallas bonitas: es la demostración de tu proceso de pensamiento, tu capacidad de resolver problemas y tu crecimiento como profesional. Este prompt te ayuda a construir o mejorar tu portfolio y a diseñar un plan de carrera que te lleve al rol de diseño que quieres ocupar.',
                'prompt_content'   => <<<'EOT'
Eres una design manager y mentora de diseñadores UX/UI con experiencia en hiring en startups y empresas tecnológicas de escala internacional. Has revisado miles de portfolios y entrevistado a cientos de diseñadores, y sabes exactamente qué diferencia un portfolio que consigue entrevistas de uno que no.

Necesito tu ayuda para mejorar mi portfolio de diseño y planificar mi desarrollo de carrera.

**Paso 1: Diagnóstico de mi situación**
Hazme estas preguntas antes de dar recomendaciones:
1. ¿Cuál es tu nivel de experiencia actual (estudiante, junior, mid, senior)?
2. ¿A qué tipo de rol de diseño aspiras (UX researcher, UI designer, product designer, design lead)?
3. ¿Tienes ya un portfolio? Si es así, ¿cómo está estructurado actualmente?
4. ¿Con qué tipos de proyectos tienes más experiencia?
5. ¿En qué tipo de empresas o sectores quieres trabajar?

**Paso 2: Anatomía de un portfolio de diseño efectivo**
Explica los principios que hacen que un portfolio de diseño sea memorable y convincente para recruiters y design managers:

**Selección de proyectos:**
- Cuántos proyectos incluir y por qué menos es más
- Cómo elegir qué mostrar cuando tienes mucho trabajo (criterios de selección)
- Cómo presentar proyectos de trabajo real con restricciones de confidencialidad
- Cómo crear proyectos de práctica convincentes cuando no tienes suficiente trabajo real

**Estructura de cada case study:**
- La narrativa completa de un caso: problema, proceso, decisiones, resultados
- Cómo demostrar pensamiento de diseño, no solo output visual
- Qué métricas y resultados incluir (y cómo hablar de impacto cuando no tienes datos)
- La proporción correcta entre proceso y resultado final

**Presentación visual del portfolio:**
- Plataformas recomendadas según el tipo de rol y empresa objetivo
- Tipografía, espaciado y jerarquía visual del portfolio mismo
- Cómo hacer que las pantallas de tus proyectos se vean profesionales
- El about me y el CV integrado

**Paso 3: Desarrollo de habilidades de diseño**
Para el nivel y tipo de rol que busco, dame:

**Mapa de habilidades del diseño:**
- Las habilidades técnicas (Figma, prototyping, design systems, motion design)
- Las habilidades de investigación (user research, usability testing, jobs to be done)
- Las habilidades estratégicas (design strategy, product thinking, stakeholder management)

**Análisis de mis brechas:**
Con base en lo que me cuentes sobre tu situación, identifica tus brechas prioritarias y proporciona un plan de aprendizaje de 6-12 meses con recursos concretos.

**Paso 4: Estrategia de búsqueda de empleo para diseñadores**
Dame una guía práctica para conseguir entrevistas:
- Cómo personalizar el portfolio para cada tipo de empresa
- Estrategia de LinkedIn y visibilidad en comunidades de diseño
- Cómo escribir un mensaje de outreach efectivo a un design manager
- Cómo prepararse para una entrevista de diseño (portfolio presentation, design challenge, behavioral)

**Paso 5: Comunidades y recursos de aprendizaje**
Una lista curada de las comunidades, newsletters, podcasts y recursos más valiosos para el tipo de diseñador que quiero ser.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Mejorar el portfolio y planificar el desarrollo de carrera en diseño UX/UI',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            // 4 - Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Mentoría y coaching para el desarrollo de vendedores',
                'description'      => 'Los mejores managers de ventas no solo gestionan números: desarrollan vendedores. Construir un programa de mentoría y coaching estructurado en un equipo comercial eleva el rendimiento de forma sostenida, reduce la rotación y crea una cultura de aprendizaje continuo. Este prompt te ayuda a diseñar un sistema de desarrollo de talento comercial personalizado para tu equipo.',
                'prompt_content'   => <<<'EOT'
Eres un director comercial y coach de ventas con 18 años de experiencia en equipos de ventas B2B de alto rendimiento. Has construido programas de desarrollo para vendedores en sectores de tecnología, servicios financieros y consultoría, y conoces la diferencia entre el coaching que mueve la aguja y el que se convierte en burocracia inútil.

Necesito tu ayuda para construir un programa de mentoría y coaching de ventas para mi equipo.

**Paso 1: Diagnóstico de mi equipo**
Hazme estas preguntas antes de generar el programa:
1. ¿Cuántos vendedores tiene tu equipo y cuál es la distribución de seniority?
2. ¿Cuál es el principal gap de rendimiento que observas en el equipo?
3. ¿Qué tipo de ventas hace tu equipo (inbound, outbound, account management, ciclo corto/largo)?
4. ¿Tienes ya algún proceso de coaching o es algo que quieres iniciar desde cero?
5. ¿Cuánto tiempo real puedes dedicar al desarrollo de tu equipo cada semana?

**Paso 2: Framework de diagnóstico individual**
Para cada vendedor, explica cómo hacer un diagnóstico honesto de sus fortalezas y áreas de mejora:

**Las competencias clave de un vendedor:**
- Prospección y generación de pipeline
- Calificación de oportunidades (discovery)
- Construcción de relación y confianza con el cliente
- Presentación y demostración de valor
- Manejo de objeciones
- Negociación y cierre
- Gestión del ciclo de venta y forecast
- Inteligencia emocional y resiliencia ante el rechazo

Para cada competencia, dame indicadores observables de bajo, medio y alto rendimiento.

**Paso 3: Sistema de coaching individual**
Diseña un sistema de 1:1 de coaching para vendedores que incluya:

**La reunión de coaching semanal o quincenal:**
- Estructura ideal de la sesión (tiempo, agenda, preguntas clave)
- Cómo hacer coaching sin convertirte en el que da todas las respuestas
- Las preguntas de coaching más poderosas para cada fase del ciclo de ventas
- Cómo documentar el progreso y los compromisos del vendedor

**Coaching en el campo:**
- Cómo hacer call review de forma que sea una experiencia de aprendizaje, no de juicio
- Las 5 preguntas que siempre debes hacer después de escuchar una llamada o reunión de ventas
- Cómo hacer role play efectivo sin que el equipo lo odie

**Paso 4: Programa de mentoría entre pares**
Diseña un programa estructurado donde los vendedores más senior mentoricen a los junior:
- Cómo seleccionar pares de mentor-mentee
- Qué estructura y frecuencia de encuentros usar
- Qué habilidades específicas puede transferir un vendedor senior a uno junior
- Cómo medir si el programa de mentoría está funcionando

**Paso 5: Plan de desarrollo individual**
Una plantilla de plan de desarrollo individual (PDI) para vendedores, que incluya:
- Objetivos de desarrollo a 3, 6 y 12 meses
- Las 2-3 habilidades prioritarias a desarrollar
- Las acciones concretas de aprendizaje para cada habilidad
- Los indicadores de éxito y el cronograma de revisión

Dame también una guía para tener la conversación de desarrollo con un vendedor que no reconoce sus áreas de mejora.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar un programa de mentoría y coaching de ventas para el equipo comercial',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 5 - Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Certificaciones y formación continua para Product Managers',
                'description'      => 'El rol de Product Manager no tiene una ruta académica estándar, lo que hace que la formación continua sea especialmente importante pero también confusa: hay cientos de cursos, libros y certificaciones, y no todos merecen tu tiempo o dinero. Este prompt te ayuda a evaluar las opciones de formación disponibles, priorizar según tu etapa de carrera y construir un plan de aprendizaje estructurado.',
                'prompt_content'   => <<<'EOT'
Eres un Senior Product Manager con experiencia en empresas de tecnología de escala internacional y mentor activo de PMs en distintas etapas de carrera. Has completado y evaluado docenas de programas de formación para PMs y conoces exactamente cuáles aportan valor real y cuáles son marketing caro.

Necesito tu ayuda para construir mi plan de formación continua como Product Manager.

**Paso 1: Diagnóstico de mi situación**
Hazme estas preguntas antes de hacer recomendaciones:
1. ¿Cuántos años llevas en roles de producto y cuál es tu nivel actual (associate, PM, senior PM, lead, director)?
2. ¿Tienes alguna formación formal en producto o eres autodidacta?
3. ¿Cuáles son las áreas de producto en las que te sientes más débil?
4. ¿Cuál es tu objetivo de carrera en los próximos 12-24 meses?
5. ¿Cuánto presupuesto tienes disponible para formación y cuánto tiempo semanal?

**Paso 2: Mapa de competencias del Product Manager**
Explica el mapa completo de habilidades que un PM necesita desarrollar a lo largo de su carrera:

**Descubrimiento de producto:**
- Investigación de usuarios y síntesis de insights
- Definición del problema y framing
- Ideación y validación de hipótesis
- Jobs to be Done, Design Thinking, Customer Development

**Estrategia de producto:**
- Visión y estrategia de producto
- Análisis competitivo y de mercado
- Definición de OKRs y métricas norte
- Roadmapping y priorización

**Ejecución:**
- Escritura de specs y user stories
- Gestión del backlog y sprint planning
- Colaboración con ingeniería y diseño
- Lanzamiento de features y go-to-market de producto

**Liderazgo y soft skills:**
- Influencia sin autoridad
- Comunicación ejecutiva y stakeholder management
- Pensamiento analítico y toma de decisiones con datos
- Product sense y juicio de producto

**Paso 3: Evaluación de opciones de formación**
Para cada categoría de formación, dame una evaluación honesta de opciones:

**Certificaciones:**
- Evalúa las principales certificaciones de PM (PMPO, Reforge, Pragmatic Institute, Product School, etc.)
- Para cada una: coste, duración, para qué perfil es adecuada, si la industria la valora realmente

**Libros fundacionales:**
- Lista los 10 libros más recomendados por PMs experimentados, con una descripción de qué aporta cada uno y en qué etapa de carrera es más útil

**Cursos en línea:**
- Las plataformas y cursos más valiosos por área de competencia

**Comunidades y aprendizaje peer-to-peer:**
- Las comunidades de PM más activas y valiosas
- Cómo aprovechar la comunidad para el desarrollo profesional

**Paso 4: Plan de formación personalizado a 12 meses**
Organizado por trimestres, con acciones concretas, recursos específicos y metas medibles para cada período.

**Paso 5: Cómo demostrar el aprendizaje**
Estrategias para hacer visible tu desarrollo profesional y convertirlo en ventaja de carrera:
- Cómo documentar el aprendizaje en tu perfil de LinkedIn
- Cómo aplicar lo aprendido en proyectos internos
- Cómo construir tu punto de vista público sobre producto (writing, comunidad, hablar en eventos)
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Evaluar opciones de formación y construir un plan de desarrollo para Product Managers',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 6 - RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Diseño de programas de upskilling y reskilling para equipos',
                'description'      => 'La automatización y la IA están redefiniendo qué habilidades necesita cada función de la empresa. Los departamentos de RRHH que diseñan programas de upskilling y reskilling efectivos no solo retienen talento: preparan a la organización para el futuro. Este prompt te ayuda a diseñar un programa de desarrollo de habilidades a medida para tu organización.',
                'prompt_content'   => <<<'EOT'
Eres una consultora de aprendizaje organizacional y desarrollo del talento con 20 años de experiencia en el diseño de programas de upskilling y reskilling en empresas medianas y grandes. Has gestionado programas de transformación digital del talento en sectores tan diversos como la banca, la manufactura, el retail y la tecnología.

Necesito tu ayuda para diseñar un programa de upskilling o reskilling para un equipo o departamento de mi organización.

**Paso 1: Diagnóstico de la necesidad**
Hazme estas preguntas antes de diseñar el programa:
1. ¿Para qué equipo o función estás diseñando el programa (ventas, operaciones, IT, atención al cliente)?
2. ¿Cuál es el driver del programa: automatización de tareas actuales, expansión a nuevas funciones, o preparación para el futuro?
3. ¿Cuántas personas están involucradas y cuál es su nivel de alfabetización digital?
4. ¿Cuál es el presupuesto disponible y el horizonte temporal del programa?
5. ¿Tienes ya una plataforma de LMS o de e-learning, o partes desde cero?

**Paso 2: Framework de diseño de programas de L&D**
Explica y aplica a mi caso los siguientes elementos:

**Análisis de necesidades de aprendizaje (LNA):**
- Cómo identificar las brechas de habilidades a nivel organizacional, de equipo e individual
- Métodos para recoger información: encuestas, entrevistas, observación, datos de desempeño
- Cómo priorizar qué habilidades abordar primero

**Diseño del programa:**
- Arquitectura del aprendizaje: la combinación óptima de formación formal, social y experiencial (modelo 70-20-10)
- Diseño de rutas de aprendizaje diferenciadas por perfil o nivel
- Cómo integrar el aprendizaje en el flujo de trabajo sin interrumpir la productividad
- Formatos de aprendizaje más efectivos para cada tipo de habilidad (técnica vs. blanda)

**Paso 3: Gestión del cambio en programas de formación**
Uno de los mayores fracasos en programas de L&D es la baja adopción. Explica:
- Cómo conseguir el buy-in de los managers antes de lanzar el programa
- Cómo comunicar el programa a los participantes de forma que genere motivación intrínseca
- Cómo diseñar incentivos y reconocimientos que refuercen la participación
- Cómo manejar la resistencia al aprendizaje en adultos

**Paso 4: Medición del impacto**
Explica cómo medir si el programa está funcionando, usando el modelo de Kirkpatrick:
- Nivel 1 (Reacción): cómo medir la satisfacción del participante de forma útil
- Nivel 2 (Aprendizaje): cómo evaluar que el conocimiento fue adquirido
- Nivel 3 (Comportamiento): cómo verificar que las habilidades se aplican en el trabajo
- Nivel 4 (Resultados): cómo conectar el programa de formación con métricas de negocio

**Paso 5: Plan de implementación**
Un plan de implementación de 6 meses para mi programa específico, incluyendo:
- Fase de diagnóstico y diseño
- Fase piloto con un grupo reducido
- Ajustes y lanzamiento completo
- Revisión y mejora continua

Dame también una plantilla de comunicación interna para anunciar el programa al equipo con un tono que genere entusiasmo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar e implementar un programa de upskilling o reskilling organizacional',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            // 7 - Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Plan de formación continua para profesionales de finanzas y contabilidad',
                'description'      => 'El mundo de las finanzas está cambiando más rápido que nunca: la automatización contable, las regulaciones ESG, la analítica de datos financieros y la IA están redefiniendo qué habilidades necesita un profesional financiero competitivo. Este prompt te ayuda a construir un plan de formación continua que te mantenga relevante y te abra puertas hacia roles de mayor impacto.',
                'prompt_content'   => <<<'EOT'
Eres un CFO con amplia experiencia y formador de equipos financieros, con conocimiento profundo de las tendencias que están transformando la profesión financiera: automatización de la contabilidad, analítica avanzada de datos, regulación ESG y el rol estratégico del CFO moderno. Has mentorizado a más de 50 profesionales financieros en el desarrollo de sus carreras.

Necesito tu ayuda para construir mi plan de formación continua como profesional de finanzas o contabilidad.

**Paso 1: Diagnóstico de mi situación**
Hazme estas preguntas antes de dar recomendaciones:
1. ¿Cuál es tu rol actual (contable, controller, analista financiero, CFO, otro)?
2. ¿Tienes alguna certificación profesional (CPA, CMA, CFA, ACCA, otros)?
3. ¿Cuál es el sector en el que trabajas y cuál es el tipo de empresa (startup, pyme, gran empresa, banca)?
4. ¿Cuál es el rol al que aspiras en los próximos 2-3 años?
5. ¿Cuánto tiempo y presupuesto tienes para formación?

**Paso 2: El mapa de habilidades del profesional financiero moderno**
Explica las habilidades que definen al profesional financiero del futuro, organizadas en cuatro dimensiones:

**Habilidades técnicas tradicionales:**
- Contabilidad financiera y reporting
- Fiscalidad y cumplimiento normativo
- Tesorería y gestión de liquidez
- Auditoría y control interno
- Valoración de empresas y M&A

**Habilidades técnicas emergentes:**
- Analítica de datos financieros (Excel avanzado, Power BI, SQL básico)
- Automatización de procesos contables (RPA, herramientas de automatización)
- Modelado financiero avanzado
- Reporting ESG y finanzas sostenibles
- FP&A (Financial Planning & Analysis) como función estratégica

**Habilidades de negocio y estrategia:**
- Business partnering: cómo el financiero se convierte en socio estratégico del negocio
- Comunicación de resultados financieros a audiencias no financieras
- Pensamiento estratégico y toma de decisiones basada en datos

**Habilidades interpersonales:**
- Liderazgo e influencia
- Comunicación ejecutiva
- Gestión de equipos multidisciplinares

**Paso 3: Evaluación de certificaciones**
Para las principales certificaciones de mi especialidad, dame:
- Una descripción de qué acredita y para qué perfil es más útil
- El reconocimiento internacional y local de la certificación
- El costo y tiempo de preparación estimado
- Si vale la pena para mi caso específico

Certifications a evaluar según mi perfil: CFA, CPA, CMA, ACCA, CIMA, FRM, CFP, CISA, y certificaciones de analítica financiera.

**Paso 4: Plan de aprendizaje a 12 meses**
Un plan organizado por trimestres con:
- Las prioridades de aprendizaje para cada período
- Recursos concretos (libros, cursos, comunidades, mentores)
- Metas medibles para cada trimestre
- Cómo aplicar el aprendizaje en mi trabajo actual

**Paso 5: Tendencias que debo seguir de cerca**
Las 5 tendencias que más van a impactar mi especialidad en los próximos 3-5 años, con recomendaciones específicas de cómo posicionarme para aprovecharlas en lugar de ser desplazado por ellas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un plan de formación continua para profesionales de finanzas',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            // 8 - Legal
            [
                'profession_id'    => 8,
                'title'            => 'Educación jurídica continua y especialización para abogados',
                'description'      => 'El derecho evoluciona constantemente con nuevas regulaciones, jurisprudencia y áreas de práctica emergentes como el derecho de datos, la regulación de IA o el derecho de startups. Los abogados que invierten en educación continua estructurada no solo mantienen su licencia: se diferencian en un mercado cada vez más competitivo. Este prompt te ayuda a planificar tu desarrollo profesional jurídico de forma estratégica.',
                'prompt_content'   => <<<'EOT'
Eres un socio de despacho con amplia experiencia en el desarrollo de carrera jurídica y mentor activo de abogados jóvenes. Has observado cómo el mercado legal ha cambiado radicalmente en los últimos diez años y cuáles son las especialidades y habilidades que generan más valor hoy y en el futuro próximo.

Necesito tu ayuda para construir mi plan de educación jurídica continua y especialización.

**Paso 1: Diagnóstico de mi situación**
Hazme estas preguntas antes de dar recomendaciones:
1. ¿Cuántos años llevas ejerciendo y cuál es tu área de práctica principal?
2. ¿Trabajas en un despacho privado, empresa, sector público o como abogado independiente?
3. ¿Cuál es la especialización a la que aspiras o quieres profundizar?
4. ¿Tienes obligaciones de educación jurídica continua (CLE/CPD) que cumplir en tu jurisdicción?
5. ¿Cuánto tiempo y presupuesto tienes disponible para formación?

**Paso 2: El mapa de especialidades jurídicas de mayor demanda**
Explica las áreas de práctica jurídica con mayor proyección de crecimiento en los próximos 5 años y por qué:

**Derecho de tecnología y datos:**
- Privacidad y protección de datos (GDPR, equivalentes locales)
- Regulación de inteligencia artificial
- Derecho de startups y venture capital
- Propiedad intelectual en entornos digitales
- Ciberseguridad y responsabilidad legal

**Derecho mercantil y financiero especializado:**
- M&A y capital privado
- Fintech y regulación financiera
- ESG y derecho ambiental corporativo
- Derecho concursal y reestructuración

**Otras especialidades emergentes:**
- Arbitraje y resolución alternativa de disputas
- Derecho internacional y comercio exterior
- Compliance y programas de integridad corporativa
- Derecho laboral en entornos de trabajo remoto y economía gig

**Paso 3: Opciones de formación jurídica**
Para mi especialización objetivo, evalúa las siguientes opciones:

**Formación académica:**
- Másteres y LLM especializados: cuándo tiene sentido y cuáles son los más valorados internacionalmente
- Doctorado: para qué perfil profesional es una inversión racional

**Formación continua:**
- Programas de CLE/CPD en instituciones de referencia
- Cursos en plataformas online para abogados (Coursera, edX, plataformas especializadas)
- Certificaciones profesionales específicas por especialidad

**Aprendizaje informal:**
- Publicaciones jurídicas y bases de datos de jurisprudencia
- Asociaciones y colegios profesionales: cómo aprovecharlos para el desarrollo
- Congresos y eventos jurídicos: cómo seleccionarlos y sacarles el máximo valor

**Paso 4: Plan de especialización a 18 meses**
Un plan organizado por semestres con:
- Las acciones formativas prioritarias para cada período
- Cómo construir expertise visible en la especialización elegida (publicaciones, ponencias, casos)
- Cómo posicionarse ante clientes y empleadores como especialista en esa área

**Paso 5: Desarrollo de habilidades no jurídicas**
Las habilidades transversales que más impacto tienen en la carrera jurídica moderna:
- Gestión financiera de un despacho o área legal
- Business development y captación de clientes
- Liderazgo y gestión de equipos jurídicos
- Comunicación no técnica con clientes y stakeholders
- Uso de herramientas legtech y IA para la práctica jurídica

Para cada una, dame recomendaciones de desarrollo específicas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Planificar la educación continua y la especialización como abogado',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            // 9 - Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Desarrollo de habilidades y carrera en Customer Success',
                'description'      => 'Customer Success es una de las disciplinas de más rápido crecimiento en el mundo SaaS, pero sus rutas de carrera y los marcos de competencias aún están madurando. Saber qué habilidades desarrollar y cómo progresar de CSM a manager o a roles de liderazgo puede marcar la diferencia entre estancarse o crecer exponencialmente. Este prompt te guía para construir tu carrera en CS de forma deliberada.',
                'prompt_content'   => <<<'EOT'
Eres un VP of Customer Success con experiencia en la construcción y el escalado de equipos de CS en empresas SaaS de crecimiento acelerado. Has definido los marcos de competencia para equipos de CS y has mentorizado a decenas de CSMs en su desarrollo de carrera, desde roles de individual contributor hasta VP.

Necesito tu ayuda para desarrollar mis habilidades y planificar mi carrera en Customer Success.

**Paso 1: Diagnóstico de mi situación**
Hazme estas preguntas antes de dar recomendaciones:
1. ¿Cuántos años llevas en roles de Customer Success y cuál es tu título actual?
2. ¿En qué tipo de empresa trabajas (startup, scale-up, empresa consolidada) y cuál es el perfil de cliente que gestionas (SMB, mid-market, enterprise)?
3. ¿Cuál es tu objetivo de carrera en los próximos 12-24 meses?
4. ¿Cuáles son las habilidades o competencias en las que te sientes más débil?
5. ¿Tienes ya alguna certificación de CS o formación específica en la disciplina?

**Paso 2: Mapa de competencias del Customer Success Manager**
Explica el mapa completo de habilidades que define un CS profesional de alto rendimiento:

**Habilidades de gestión de clientes:**
- Onboarding y time-to-value: cómo acelerar la adopción del producto
- Health scoring y gestión proactiva del riesgo de churn
- QBR (Quarterly Business Reviews): estructura, contenido y ejecución
- Identificación de oportunidades de expansión y upsell
- Gestión de renovaciones y negociación

**Habilidades de producto y datos:**
- Conocimiento profundo del producto para ser un consultor de valor
- Análisis de datos de uso del cliente (product analytics)
- Creación de playbooks de éxito basados en datos
- Capacidad de comunicar insights de clientes al equipo de producto

**Habilidades interpersonales y de negocio:**
- Gestión de múltiples stakeholders dentro de la cuenta del cliente
- Comunicación ejecutiva con C-level del cliente
- Influencia sin autoridad: cómo alinear a equipos internos (ventas, producto, soporte)
- Gestión de situaciones críticas (clientes insatisfechos, escalaciones)

**Habilidades de liderazgo (para quienes aspiran a manager):**
- Coaching y desarrollo de CSMs
- Diseño de procesos y playbooks de CS
- Reporting de métricas de CS a liderazgo
- Contratación y onboarding de nuevos CSMs

**Paso 3: Rutas de carrera en Customer Success**
Explica las distintas rutas de carrera disponibles desde un rol de CSM:
- La ruta de liderazgo: CSM → Senior CSM → Team Lead → Manager → Director → VP
- La ruta de especialización: CS Operations, Customer Education, Technical CS, Customer Advocacy
- La ruta de transición: cómo usar la experiencia de CS para moverse a Ventas, Producto o Marketing

Para la ruta más relevante para mi objetivo, describe qué habilidades son las más críticas para progresar y cuánto tiempo realista toma cada transición.

**Paso 4: Plan de desarrollo a 12 meses**
Un plan concreto organizado por trimestres con:
- Las habilidades prioritarias para desarrollar en cada período
- Recursos de aprendizaje específicos (certificaciones de CS, libros, comunidades, podcasts)
- Proyectos concretos que puedo hacer en mi rol actual para demostrar las habilidades que estoy desarrollando
- Métricas de éxito para saber si estoy progresando

**Paso 5: Posicionamiento y visibilidad en la comunidad de CS**
Cómo construir una reputación visible en la comunidad de Customer Success para acelerar mi carrera:
- Las comunidades y eventos más relevantes del sector
- Cómo compartir conocimiento y construir presencia sin tener décadas de experiencia
- Cómo usar LinkedIn para posicionarte como profesional de CS de referencia
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Planificar el desarrollo de habilidades y la carrera en Customer Success',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 10 - Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Construir habilidades T-shaped como freelancer para aumentar tarifas',
                'description'      => 'Los freelancers con habilidades T-shaped —profundidad en una especialidad y amplitud en áreas complementarias— cobran más, pierden menos proyectos por competencia de precio y tienen más herramientas para resolver problemas complejos. Este prompt te guía para identificar qué eje vertical desarrollar y qué habilidades horizontales adquirir para diferenciarte en el mercado freelance.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de desarrollo profesional especializado en freelancers y trabajadores independientes. Has asesorado a más de 300 profesionales autónomos en el diseño de su propuesta de valor diferenciada, y conoces de primera mano cómo las habilidades T-shaped transforman el posicionamiento de un freelancer y le permiten cobrar tarifas premium sin necesitar más clientes, sino mejores clientes.

Necesito tu ayuda para construir mis habilidades T-shaped como freelancer y aumentar mi valor de mercado.

**Paso 1: Entender mi perfil actual**
Hazme estas preguntas antes de dar recomendaciones:
1. ¿Cuál es tu especialidad principal como freelancer y cuántos años llevas ejerciéndola?
2. ¿Qué habilidades complementarias tienes actualmente (aunque no sean tu especialidad principal)?
3. ¿Cuáles son los proyectos más rentables o satisfactorios que has hecho?
4. ¿Cuáles son las razones más frecuentes por las que pierdes proyectos o clientes?
5. ¿Cuál es tu tarifa actual y cuál es tu objetivo de tarifa en los próximos 12-18 meses?

**Paso 2: El modelo T-shaped para freelancers**
Explica en profundidad el concepto de perfil T-shaped aplicado al freelancing:

**El eje vertical (profundidad):**
- Qué significa ser un experto de referencia en una especialidad
- Cómo medir tu nivel de profundidad actual vs. el nivel de mercado
- Cuándo es momento de seguir profundizando vs. cuándo es momento de ampliar
- La importancia de la especialización de nicho dentro de la especialidad (ej: no "diseñador web" sino "diseñador de landing pages para SaaS B2B")

**El eje horizontal (amplitud):**
- Qué áreas complementarias generan más valor para alguien con mi especialidad
- La diferencia entre habilidades complementarias productivas (que aumentan tu valor) y distractoras (que te dispersan)
- Cómo elegir qué habilidades horizontales desarrollar según el tipo de cliente al que quieres servir

**Paso 3: Identificar tus habilidades T-shaped ideales**
Con base en mi perfil, ayúdame a diseñar mi perfil T-shaped ideal:

**Opciones para profundizar el eje vertical:**
- Las sub-especialidades dentro de mi área que están más demandadas
- Los nichos de cliente donde mi especialidad tiene más valor
- Cómo demostrar mayor profundidad de expertise ante clientes

**Opciones para ampliar el eje horizontal:**
Para mi especialidad, cuáles son las habilidades complementarias más valiosas:
- Habilidades técnicas adyacentes
- Habilidades de negocio y estrategia
- Habilidades de comunicación y gestión de proyectos
Para cada una, explica por qué añade valor y qué tipo de proyectos o clientes desbloqueará.

**Paso 4: Plan de desarrollo de habilidades a 18 meses**
Un plan concreto organizado por semestres:
- Qué habilidades priorizar y en qué orden
- Recursos de aprendizaje específicos para cada habilidad
- Cómo aplicar cada habilidad nueva en proyectos reales antes de haberla dominado del todo
- Hitos claros para saber cuándo estoy listo para cobrar más por esas habilidades adicionales

**Paso 5: Monetizar el perfil T-shaped**
Cómo traducir el desarrollo de habilidades en aumento real de tarifas:
- Cómo comunicar tu nueva propuesta de valor a clientes existentes
- Cómo reposicionarte ante nuevos clientes con la propuesta T-shaped
- Cuándo y cómo subir tarifas de forma que los clientes lo acepten
- Tipos de proyectos o modelos de trabajo que solo son posibles con un perfil T-shaped y que tienen tarifas más altas
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un perfil T-shaped como freelancer para diferenciarse y cobrar más',
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
