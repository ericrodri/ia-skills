<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills509Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Employer branding con IA para atraer talento digital',
                'description'      => 'Usa Claude para construir una estrategia de employer branding potenciada por IA que atraiga perfiles tecnológicos, diseñe la propuesta de valor al empleado y genere contenidos auténticos para LinkedIn y canales de reclutamiento.',
                'prompt_content'   => <<<'EOT'
Eres el responsable de marketing de talento de una empresa tecnológica en crecimiento que compite por los mismos perfiles digitales que Google, Amazon o Glovo. Tu presupuesto es limitado pero tienes una cultura de empresa genuinamente diferenciadora. Necesitas construir una estrategia de employer branding que posicione a la empresa como empleador de elección para perfiles tech, producto y datos.

instrucción 1 — Diagnóstico de employer brand actual:
Antes de crear contenido, necesito entender dónde estamos. Diseña una encuesta interna de 10 preguntas para descubrir por qué los empleados actuales eligieron esta empresa y qué les hace quedarse. Adicionalmente, crea una guía para analizar las reseñas en Glassdoor y LinkedIn de la empresa y los 3 principales competidores: ¿qué temas aparecen con más frecuencia? ¿cuáles son los ejes de diferenciación reales?

instrucción 2 — Employee Value Proposition (EVP):
Con los insights del diagnóstico (imagina que los tienes: cultura de autonomía, proyectos con impacto real, equipo pequeño y multidisciplinar, salario competitivo pero no líder de mercado, posibilidad de trabajo remoto total), redacta la EVP completa. Incluye: (a) los 5 pilares de la propuesta de valor al empleado con su descripción, (b) los mensajes clave adaptados a 3 perfiles distintos (desarrollador backend senior, product manager, data scientist), (c) lo que la empresa NO es (para atraer a los que encajan y alejar a los que no).

instrucción 3 — Estrategia de contenidos para LinkedIn:
Diseña un plan de contenidos de 8 semanas para la página de empresa en LinkedIn y los perfiles personales de los founders y managers. Para cada semana: tema, tipo de publicación (post de texto, vídeo corto, imagen con dato, encuesta, artículo), ángulo de storytelling, quién lo publica (empresa o persona interna), y objetivo de la pieza (alcance, engagement o conversión). Varía el formato para evitar la fatiga del algoritmo.

instrucción 4 — Contenido de alta conversión para fichas de empleo:
Las fichas de empleo en LinkedIn, InfoJobs o Glassdoor son el primer touchpoint del candidato. Redacta la sección "¿Por qué trabajar con nosotros?" (200 palabras) y la descripción de equipo y cultura (150 palabras) que usarás en todas las ofertas. El tono debe ser auténtico, específico y diferente del estándar corporativo. Evita clichés como "somos una familia", "ambiente dinámico" o "salario competitivo".

instrucción 5 — Métricas y ROI del employer branding:
Define el cuadro de mando del employer branding. Incluye métricas de awareness (seguidores, alcance de publicaciones), de consideración (candidaturas espontáneas, visitas al portal de empleo), de conversión (ratio candidatura/oferta aceptada, tiempo de cobertura de vacante) y de retención (eNPS, rotación voluntaria en el primer año). ¿Cómo demuestras al CEO el ROI de invertir en employer branding frente a gastar más en portales de empleo?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir employer brand con IA para atraer talento tecnológico',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Automatización del pipeline de reclutamiento técnico con IA',
                'description'      => 'Diseña con Claude un sistema automatizado de screening y evaluación técnica de candidatos para roles de desarrollo de software, usando IA para filtrar CVs, generar pruebas técnicas personalizadas y estructurar entrevistas.',
                'prompt_content'   => <<<'EOT'
Eres tech lead y actualmente participas en 4 procesos de selección simultáneos para tu equipo. El proceso consume entre 8 y 12 horas semanales entre revisión de CVs, diseño de pruebas técnicas, corrección y entrevistas. Quieres usar IA para automatizar las partes repetitivas sin perder la calidad ni la experiencia del candidato.

instrucción 1 — Sistema de screening automatizado de CVs técnicos:
Diseña el proceso de screening de CVs con IA para una posición de desarrollador backend Python senior. El sistema debe: (a) definir los criterios de evaluación ponderados (experiencia técnica, proyectos relevantes, stack tecnológico, formación, señales de crecimiento continuo), (b) generar el prompt exacto que usarías en Claude para analizar un CV y puntuar cada criterio del 1 al 5 con justificación, (c) establecer los umbrales de pase a la siguiente fase. Incluye también cómo detectar señales de alerta (CV inflado, inconsistencias temporales, skills que no se demuestran en proyectos).

instrucción 2 — Generador de pruebas técnicas personalizadas:
Diseña el sistema de generación de pruebas técnicas adaptadas al CV del candidato. Para un desarrollador backend Python con 5 años de experiencia en APIs REST, PostgreSQL y arquitecturas de microservicios, genera: (a) un ejercicio de código de 2-3 horas que evalúe diseño de APIs, manejo de errores, eficiencia de queries y testing, (b) 5 preguntas de arquitectura de sistema abiertas con los criterios de evaluación de cada respuesta, (c) un caso práctico de debugging en un fragmento de código con un bug sutil. Incluye los criterios de corrección para cada parte.

instrucción 3 — Estructuración de la entrevista técnica con IA:
Con los resultados de la prueba técnica del candidato (imagina que resolvió correctamente el ejercicio pero con un diseño de base de datos mejorable y sin tests de integración), genera el guion de entrevista técnica de 60 minutos. El guion debe: profundizar en las decisiones de diseño del candidato, explorar cómo razona ante problemas nuevos, evaluar su experiencia con trabajo en equipo técnico y code reviews, y terminar con preguntas de cultural fit técnico. Incluye las preguntas exactas y lo que buscas en cada respuesta.

instrucción 4 — Evaluación estructurada y libre de sesgos:
Diseña el sistema de evaluación post-entrevista que usa IA para reducir sesgos. Incluye: (a) scorecard estandarizado con competencias técnicas y blandas y su ponderación, (b) protocolo para que todos los entrevistadores registren observaciones antes de la reunión de calibración, (c) lista de verificación de sesgos cognitivos comunes en entrevistas técnicas (efecto halo, afinidad, contraste) y cómo contrarrestarlos, (d) prompt para que Claude analice las notas de múltiples entrevistadores y detecte inconsistencias o señales de sesgo.

instrucción 5 — Comunicación con candidatos y candidate experience:
Escribe las plantillas de comunicación para todas las fases del proceso: (a) confirmación de recepción de candidatura (inmediata, personalizada con el nombre del puesto), (b) invitación a prueba técnica con instrucciones claras y expectativas de tiempo, (c) feedback constructivo para candidatos rechazados en la prueba técnica (específico, útil y respetuoso), (d) oferta de trabajo informal por email antes del contrato formal. El tono debe ser humano y representar la cultura técnica de la empresa, no el estilo RRHH corporativo estándar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Automatizar screening y evaluación técnica de candidatos con IA',
                'vote_score'       => 55,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Portfolio de diseño como herramienta de reclutamiento con IA',
                'description'      => 'Aplica IA para crear procesos de evaluación de portfolios de diseño que sean objetivos, detallados y libres de sesgos, definiendo criterios claros y feedback accionable para candidatos de diseño UX/UI.',
                'prompt_content'   => <<<'EOT'
Eres design manager y buscas incorporar dos diseñadores UX/UI a tu equipo. El proceso actual de evaluación de portfolios es subjetivo, dependiente del gusto personal de quien evalúa y genera mucha varianza entre entrevistadores. Quieres usar IA para estructurar la evaluación de portfolios y hacer el proceso más justo, consistente y útil para los candidatos.

instrucción 1 — Criterios de evaluación del portfolio de diseño:
Define el framework de evaluación de portfolios UX/UI para un rol de producto en empresa tech. Crea una rúbrica de evaluación con estos 6 dimensiones: (a) profundidad del proceso de diseño mostrado (research, ideación, iteración, validación), (b) calidad del craft visual y coherencia de sistemas de diseño, (c) claridad en la comunicación del impacto de cada proyecto (métricas, outcomes de negocio), (d) complejidad y relevancia de los problemas resueltos, (e) capacidad para trabajar con restricciones (técnicas, de tiempo, de negocio), (f) crecimiento y evolución visible entre proyectos. Para cada dimensión, define los descriptores de 1 (insuficiente) a 5 (excepcional).

instrucción 2 — Análisis de portfolio con IA:
Diseña el proceso de análisis de un portfolio con Claude. El candidato ha compartido su portfolio online con 4 case studies: rediseño de una app de banca móvil, diseño de un sistema de design tokens, UX de una plataforma B2B de gestión de proyectos y diseño de un dashboard de analytics. Genera el prompt que usarías para analizar cada case study de forma estructurada con los criterios del punto anterior. ¿Qué preguntas de seguimiento generarías automáticamente para profundizar en los puntos débiles o ambiguos de cada proyecto?

instrucción 3 — Prueba de diseño personalizada:
En lugar de mandar la misma prueba a todos los candidatos, diseña un sistema que genere pruebas de diseño adaptadas al nivel y especialización detectados en el portfolio. Para un candidato con perfil sólido en UX research pero portfolio más débil en UI y sistemas de diseño, genera: (a) un briefing de prueba de 4-6 horas que evalúe específicamente UI craft y trabajo con design tokens, (b) criterios de evaluación claros que compartas con el candidato antes de empezar, (c) las preguntas de debriefing que harías en la entrevista de revisión de la prueba.

instrucción 4 — Entrevista estructurada para diseñadores:
Diseña la guía de entrevista de portfolio de 45 minutos para diseñadores UX/UI. Incluye: apertura (5 min), deep dive en el proyecto más relevante con preguntas estandarizadas (20 min), exploración de proceso de colaboración con producto e ingeniería (10 min), preguntas de cultura y forma de trabajar (10 min). Para cada sección, incluye las preguntas exactas, lo que buscas en la respuesta y las señales de alerta.

instrucción 5 — Feedback de calidad a candidatos rechazados:
Una de las formas de construir reputación como empleador en la comunidad de diseño es dando feedback genuinamente útil a los candidatos que no avanzan. Diseña el template de feedback personalizado post-entrevista de portfolio para un candidato con buen proceso de diseño pero weak UI y sin métricas de impacto en sus proyectos. El feedback debe ser específico, accionable, honesto sin ser cruel y dejar una impresión positiva de la empresa aunque el candidato no haya pasado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estructurar evaluación objetiva de portfolios de diseño con IA',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Reclutamiento de perfiles comerciales de alto rendimiento con IA',
                'description'      => 'Usa Claude para diseñar el proceso de selección de vendedores y perfiles comerciales que prediga el rendimiento real en ventas, más allá del CV y la primera impresión en la entrevista.',
                'prompt_content'   => <<<'EOT'
Eres director comercial y has contratado a 12 vendedores en los últimos 3 años. El 40% no pasó de los 6 meses: algunos no tenían las habilidades reales que parecían en la entrevista, otros no encajaban con el ciclo de venta complejo de tu producto. El coste de cada contratación fallida supera los 30.000 euros entre reclutamiento, formación y oportunidad perdida. Quieres rediseñar el proceso con IA para predecir mejor el rendimiento comercial real.

instrucción 1 — Perfil del vendedor ideal basado en datos:
Antes de contratar al siguiente comercial, necesitas definir el perfil predictor de éxito basado en tu experiencia. Ayúdame a construir el perfil ideal para un Account Executive que vende software B2B con ciclo de venta de 3-9 meses y ticket medio de 40.000 euros anuales. Analiza estos factores: (a) experiencia y background que correlaciona con el éxito (no el CV ideal, sino el que realmente funciona), (b) competencias conductuales observables (resiliencia, gestión de la ambigüedad, curiosidad, capacidad de escucha activa), (c) motivadores y valores que encajan con el equipo y el producto, (d) señales tempranas en el CV y la entrevista que predicen fracaso.

instrucción 2 — Simulación de venta como evaluación:
El mejor predictor del rendimiento comercial es ver al candidato en acción. Diseña una simulación de venta de 20 minutos para evaluar a los candidatos. El contexto: el candidato debe hacer una llamada de discovery a un potencial cliente (el entrevistador en rol) que es director de operaciones de una empresa industrial interesada en software de gestión logística. Define: (a) briefing que recibirá el candidato 15 minutos antes, (b) perfil del cliente ficticio que interpretará el entrevistador (con sus objeciones y puntos de dolor), (c) rúbrica de evaluación de la simulación con los 8 comportamientos que observas y cómo los puntúas.

instrucción 3 — Preguntas de entrevista basadas en comportamientos pasados:
Las preguntas STAR (Situación, Tarea, Acción, Resultado) son más predictivas que las preguntas hipotéticas. Diseña un banco de 15 preguntas de entrevista basadas en comportamientos pasados para evaluar: prospección y generación de pipeline, gestión de ciclos de venta largos con múltiples stakeholders, resiliencia ante el rechazo, capacidad de aprender y adaptar el discurso, y ética comercial. Para cada pregunta incluye las sondas de seguimiento y lo que buscas en una respuesta de nivel 4-5.

instrucción 4 — Proceso de onboarding predictivo de los primeros 90 días:
El proceso de selección no termina con la oferta. Diseña un plan de onboarding de 90 días para el nuevo Account Executive que: (a) le permita hacer su primera venta antes del día 60 (aunque sea pequeña), (b) evalúe de forma objetiva si el perfil encaja en los primeros 30 días antes de que la inversión sea irrecuperable, (c) incluya métricas de progreso semana a semana que distingan entre curva de aprendizaje normal y señales de que el perfil no encaja, (d) asigne un mentor comercial del equipo con protocolo de acompañamiento.

instrucción 5 — Reducción de sesgos en la contratación comercial:
Los equipos comerciales tienden a contratar a versiones de sí mismos, limitando la diversidad y perdiendo talento atípico pero de alto potencial. Define el protocolo anti-sesgo para el proceso de selección de comerciales: (a) cómo estandarizar la evaluación de CVs para que el nombre, la universidad o el género no afecten la criba, (b) cómo estructurar el comité de evaluación para incluir perspectivas diversas, (c) qué preguntas están prohibidas en la entrevista y por qué, (d) cómo usar los datos históricos de rendimiento de tu equipo para identificar correlaciones espurias entre perfil y éxito que reflejen sesgos pasados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar proceso de selección predictivo para perfiles comerciales con IA',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Hiring de product managers con IA: más allá del framework',
                'description'      => 'Diseña con Claude un proceso de selección de Product Managers que evalúe el pensamiento real de producto, la capacidad de priorización bajo presión y el impacto demostrable, sin caer en los clichés del reclutamiento de PM.',
                'prompt_content'   => <<<'EOT'
Eres VP of Product de una empresa de software con 80 empleados. Necesitas contratar a un Senior Product Manager que gestione uno de tus productos con 50.000 usuarios activos. Has visto que el proceso de entrevistas habitual para PMs está lleno de preguntas genéricas (¿cuántos pianos hay en Madrid?) y ejercicios desconectados de la realidad del trabajo. Quieres diseñar un proceso que realmente evalúe si el candidato puede hacer el trabajo.

tarea 1 — Definición del perfil real de PM que necesitas:
No el perfil estándar de job description, sino el que realmente necesitas. Tu producto es una plataforma B2B de análisis de datos con ciclo de desarrollo de 3 semanas, equipo de 5 ingenieros y diseñadora, con presión de roadmap de 3 clientes enterprise que representan el 60% de los ingresos. Ayúdame a definir: (a) las 5 competencias críticas para tener éxito en este rol específico, (b) las 3 experiencias pasadas que son predictoras de éxito (no el sector, sino el tipo de situación), (c) qué nivel de seniority necesito realmente y en qué dimensiones, (d) los rasgos de personalidad que han generado fricción con el equipo de ingeniería en el pasado (señales de alerta).

tarea 2 — Home assignment de producto realista:
En lugar de los ejercicios abstractos de PM interviews, diseña un home assignment de 3-4 horas que simule trabajo real. El candidato recibirá acceso a: datos de uso anonimizados del producto (inventados pero realistas), 3 entrevistas de usuario en formato texto, el roadmap actual del trimestre y feedback de 2 clientes enterprise sobre funcionalidades faltantes. La tarea: preparar una recomendación de priorización para el próximo trimestre con su justificación. Diseña el briefing completo, los materiales simulados y la rúbrica de evaluación.

tarea 3 — Entrevista de criterio y toma de decisiones:
Las mejores entrevistas de PM exploran cómo piensa el candidato bajo presión y con información incompleta. Diseña 8 preguntas de entrevista que evalúen: razonamiento con datos ambiguos, gestión de conflictos entre stakeholders, definición de qué no hacer, aprendizaje de errores de producto pasados, y comunicación de decisiones difíciles al equipo. Para cada pregunta incluye lo que buscas y las señales de respuesta excelente vs mediocre.

tarea 4 — Evaluación del home assignment con IA:
Diseña el proceso de evaluación del home assignment usando Claude. Genera el prompt que usarías para que Claude analice la entrega del candidato según la rúbrica definida, identifique los puntos fuertes y débiles de su razonamiento, genere las preguntas de seguimiento para profundizar en la presentación en vivo, y compare la calidad del análisis con el de candidatos anteriores de referencia. ¿Cómo usarías la evaluación de IA como primer filtro sin que sustituya el juicio humano?

tarea 5 — Onboarding de PM y métricas de éxito a 90 días:
Define qué significa el éxito del nuevo PM en sus primeros 90 días. Diseña: (a) el plan de primeros 30 días centrado en escucha y comprensión (qué debe aprender, con quién debe hablar, qué debe NO hacer), (b) las primeras decisiones autónomas que le delegarás en el día 45, (c) las métricas de producto y proceso que usarás para evaluar su rendimiento al final de los 90 días, (d) la conversación de feedback estructurado al día 30 y al día 90 que le permita ajustar su forma de trabajar antes de que sea tarde.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar proceso de hiring de PM que evalúe pensamiento real de producto',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'IA para RRHH: screening de CVs con diversidad e inclusión integrada',
                'description'      => 'Implementa con Claude un proceso de screening de candidaturas que combine eficiencia automatizada con principios de diversidad, equidad e inclusión, reduciendo sesgos sistémicos en la criba inicial.',
                'prompt_content'   => <<<'EOT'
Eres directora de Talent Acquisition en una empresa tecnológica de 400 empleados. La empresa tiene un compromiso público con la diversidad e inclusión: solo el 22% de los roles técnicos están ocupados por mujeres y hay poca diversidad en mandos intermedios. Recibes entre 80 y 200 candidaturas por vacante y el equipo de RRHH solo puede hacer entrevistas con el 10%. Quieres usar IA para hacer el screening más eficiente sin amplificar los sesgos existentes.

instrucción 1 — Auditoría de sesgos en el proceso actual:
Antes de implementar IA, necesito entender dónde están los sesgos actuales. Diseña un proceso de auditoría del pipeline de contratación de los últimos 2 años. ¿Qué datos necesitaría recopilar? ¿Qué análisis haría para detectar si hay disparidades por género, edad, universidad de origen o nombre en las tasas de criba, entrevista y contratación? ¿Qué señales en las descripciones de empleo actuales podrían estar disuadiendo la candidatura de ciertos perfiles?

instrucción 2 — Blind screening con IA para la criba inicial:
Diseña el proceso de blind screening para la criba inicial de CVs. El proceso debe: (a) anonimizar nombre, foto, dirección, universidad de origen y año de graduación antes de la evaluación, (b) evaluar a los candidatos únicamente por competencias y experiencias relevantes para el puesto, (c) generar un scorecard estandarizado que todos los reclutadores vean igual para cada candidato, (d) incluir el prompt exacto que usarías en Claude para analizar un CV anonimizado de una posición de Data Analyst. ¿Qué información sí debe quedar visible y por qué?

instrucción 3 — Reescritura de ofertas de empleo con perspectiva D&I:
Las ofertas de empleo tienen un lenguaje codificado que puede alejar a ciertos perfiles. Reescribe esta oferta de empleo (inventa una oferta genérica de "Desarrollador Full Stack Senior" con lenguaje marcadamente masculino, requisitos excesivos y cultura descrita en términos de "ritmo intenso" y "guerreros del código") para que sea inclusiva, atractiva para perfiles diversos y focalizada en las competencias realmente necesarias. Justifica cada cambio que realizas.

instrucción 4 — Pipeline de talento diverso proactivo:
La atracción de candidaturas diversas no puede depender solo de que el proceso de selección sea justo; hay que ir a buscar talento donde está. Diseña una estrategia de sourcing proactivo para aumentar la representación femenina en roles técnicos. Incluye: (a) comunidades, eventos y canales específicos donde concentrar esfuerzos de sourcing, (b) mensajes de outreach en LinkedIn que resuenen con perfiles subrepresentados, (c) programa de referidos con incentivos que promuevan la diversidad, (d) partnerships con bootcamps, universidades o asociaciones profesionales orientados a perfiles infrarrepresentados.

instrucción 5 — Métricas de D&I en el pipeline de reclutamiento:
Define el cuadro de mando de diversidad e inclusión en el proceso de selección. Para cada etapa del funnel (candidaturas recibidas, criba inicial, entrevista de competencias, entrevista técnica/prueba, oferta, contratación), define: (a) qué métricas de diversidad registras (al menos por género, si la ley lo permite), (b) qué ratio de conversión entre etapas sería señal de sesgo sistemático, (c) con qué frecuencia revisas los datos y quién tiene acceso, (d) qué acciones concretas tomas si detectas un cuello de botella de diversidad en alguna etapa específica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar screening de candidaturas con IA que integre principios D&I',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero del coste de contratación y retención con IA',
                'description'      => 'Utiliza Claude para modelizar el coste real de la rotación de personal, calcular el ROI de invertir en mejores procesos de selección y construir el caso financiero para la dirección.',
                'prompt_content'   => <<<'EOT'
Eres el director financiero de una empresa de servicios profesionales con 150 empleados y una rotación voluntaria anual del 22%, por encima de la media del sector (15%). El CHRO quiere invertir 80.000 euros anuales en mejorar los procesos de reclutamiento (mejor software ATS, formación de entrevistadores, programa de employer branding, mejora de la candidate experience). Tu trabajo es evaluar si esa inversión se justifica financieramente.

tarea 1 — Modelo de coste real de la rotación:
Construye el modelo de coste total de una baja voluntaria. Las categorías de coste a incluir son: (a) coste de reclutamiento (publicación de oferta, tiempo del equipo de RRHH, agencia si aplica, portal de empleo), (b) coste de onboarding y formación del sustituto (tiempo del equipo, formación formal, coste de mentoring), (c) coste de pérdida de productividad durante la vacante y la curva de aprendizaje del nuevo empleado (cuántos meses hasta la productividad plena y cuánto cuesta), (d) coste de pérdida de conocimiento y relaciones (difícil de cuantificar, pero propon una metodología), (e) impacto en la moral y productividad del equipo que se queda. Aplica el modelo para 3 niveles de puesto: junior (salario 28.000€), mid (45.000€) y senior (70.000€).

tarea 2 — Cálculo del impacto financiero de la rotación actual:
Con el modelo del punto anterior y los datos de la empresa (150 empleados, 22% de rotación = 33 bajas al año, distribución estimada: 15 juniors, 12 mids, 6 seniors), calcula el coste total anual de la rotación voluntaria. Compara con la rotación objetivo del 15% (22 bajas). ¿Cuánto le cuesta anualmente a la empresa tener 7 bajas adicionales al año respecto al benchmark del sector?

tarea 3 — ROI de la inversión en RRHH:
La inversión de 80.000 euros anuales en mejora de procesos de selección promete los siguientes impactos (conservadores): (a) reducción de la rotación voluntaria del 22% al 17% en 2 años, (b) reducción del tiempo de cobertura de vacantes de 45 a 30 días, (c) mejora de la calidad de contratación (10% más de empleados que alcanzan productividad plena antes del mes 4). Traduce estos impactos a euros usando tu modelo del punto 1 y calcula el ROI de la inversión, el payback period y el beneficio neto acumulado a 3 años.

tarea 4 — Benchmarking y comparativa sectorial:
Compila los benchmarks del sector de servicios profesionales en España para: coste medio de contratación por nivel de puesto, tiempo medio de cobertura de vacante, tasa de rotación voluntaria por sector, porcentaje de salario que representa el coste total de una baja. ¿Cómo se compara nuestra empresa con estos benchmarks? ¿En qué métricas hay mayor margen de mejora?

tarea 5 — Presentación al comité de dirección:
Redacta el resumen ejecutivo de 1 página para presentar al comité de dirección la propuesta de inversión en mejora de procesos de selección. Estructura: situación actual y coste del problema, inversión propuesta y retorno esperado, riesgos de no actuar, hitos de seguimiento y métricas de éxito del proyecto, recomendación. Tono ejecutivo, enfocado en números y en el impacto en el negocio, evitando el lenguaje de RRHH que no conecta con el CFO.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Modelizar el ROI de mejoras en reclutamiento para presentar al comité de dirección',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal del reclutamiento con IA en España y la UE',
                'description'      => 'Navega con Claude el marco regulatorio del uso de IA en los procesos de selección, desde el AI Act hasta el RGPD, y diseña prácticas de contratación conformes y éticamente responsables.',
                'prompt_content'   => <<<'EOT'
Eres abogado especialista en derecho laboral y privacidad de datos. Tu cliente es una empresa española de 300 empleados que quiere usar sistemas de IA para: screening automatizado de CVs, análisis de vídeo-entrevistas para evaluar soft skills, y scoring predictivo de candidatos basado en datos históricos de rendimiento. Necesitan una guía legal completa sobre qué pueden y no pueden hacer.

instrucción 1 — El AI Act y los sistemas de IA en RRHH:
Analiza cómo clasifica el Reglamento de Inteligencia Artificial de la UE (AI Act) los sistemas de IA usados en procesos de selección y RRHH. ¿Son considerados sistemas de alto riesgo? ¿Qué obligaciones específicas impone a las empresas que los despliegan: evaluación de conformidad, transparencia, supervisión humana, documentación técnica? ¿Cuándo entra en vigor cada obligación? ¿Qué sanciones se contemplan por incumplimiento?

instrucción 2 — RGPD aplicado al reclutamiento con IA:
El tratamiento de datos de candidatos para alimentar sistemas de IA tiene implicaciones directas bajo el RGPD. Analiza: (a) base legal para tratar datos de candidatos con IA (¿consentimiento, interés legítimo o ejecución del contrato precontractual?), (b) obligaciones de información al candidato sobre el uso de IA en su evaluación, (c) derechos del candidato: acceso a la lógica del algoritmo, derecho a no ser objeto de decisión exclusivamente automatizada (art. 22 RGPD), derecho de oposición, (d) plazos de conservación de datos de candidatos no seleccionados, (e) transferencias internacionales de datos si el proveedor de IA está fuera de la UE.

instrucción 3 — Legalidad del análisis de vídeo-entrevistas con IA:
El cliente quiere usar un sistema que analiza las expresiones faciales, tono de voz y vocabulario de los candidatos en vídeo para predecir rasgos de personalidad y adecuación al puesto. Analiza la legalidad de esta práctica bajo: (a) RGPD (¿son datos biométricos? ¿categoría especial de datos?), (b) AI Act (¿es un sistema prohibido o de alto riesgo?), (c) normativa laboral española (Estatuto de los Trabajadores y su interpretación por la jurisprudencia), (d) recomendaciones de la Agencia Española de Protección de Datos sobre IA en el ámbito laboral. ¿Puede el cliente implementar esto legalmente? ¿Bajo qué condiciones?

instrucción 4 — Obligaciones del proveedor de IA para selección:
La empresa está evaluando un software de ATS con funcionalidades de IA. Redacta el clausulado que debe incluir el contrato con el proveedor de IA para cubrir: (a) roles de responsable y encargado del tratamiento de datos, (b) obligaciones del proveedor como encargado bajo el RGPD (art. 28), (c) garantías de conformidad con el AI Act (transparencia, supervisión humana, logs de auditoría), (d) protocolo de actuación en caso de decisiones automatizadas reclamadas por candidatos, (e) obligaciones en caso de brecha de seguridad de datos de candidatos.

instrucción 5 — Política interna de uso ético de IA en selección:
Redacta los principios de la política interna de uso de IA en procesos de selección que debe aprobar el comité de dirección. La política debe cubrir: qué sistemas de IA están permitidos y bajo qué condiciones, obligación de supervisión humana en todas las decisiones de descarte y contratación, cómo se informa a los candidatos del uso de IA, protocolo para atender solicitudes de explicación de decisiones automatizadas, auditoría periódica del sistema para detectar sesgos discriminatorios, y mecanismo de reclamación para candidatos. Usa lenguaje claro y directamente aplicable, no jerga jurídica innecesaria.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Asegurar el cumplimiento legal del uso de IA en procesos de selección',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Candidate experience con IA: soporte y comunicación en todo el proceso',
                'description'      => 'Diseña con Claude un sistema de comunicación y soporte al candidato potenciado por IA que mejore la experiencia durante todo el proceso de selección, desde la candidatura hasta la incorporación.',
                'prompt_content'   => <<<'EOT'
Eres responsable de Candidate Experience en una empresa que recibe 1.500 candidaturas al mes para 20 vacantes activas simultáneas. El proceso actual tiene un NPS de candidatos de -15 (muy por debajo del benchmark de +20): los candidatos se quejan de falta de comunicación, tiempos de espera largos y feedback genérico o inexistente cuando no son seleccionados. Quieres usar IA para transformar esta experiencia sin añadir headcount al equipo de RRHH.

tarea 1 — Mapa de la experiencia del candidato actual:
Traza el mapa completo del journey del candidato desde que descubre la oferta hasta que recibe una respuesta (positiva o negativa). Para cada touchpoint identifica: qué comunica la empresa actualmente, cuánto tiempo tarda la comunicación, cómo se siente el candidato en ese momento, y la oportunidad de mejora con IA. Los touchpoints son: descubrimiento de la oferta, envío de candidatura, confirmación de recepción, criba (seleccionado o rechazado), invitación a entrevista, después de la entrevista (espera), oferta o rechazo final, y onboarding.

tarea 2 — Sistema de comunicación automatizada con IA:
Diseña el sistema de comunicaciones automatizadas para el 80% de los touchpoints. Para cada tipo de comunicación genera: (a) cuándo se envía automáticamente (trigger), (b) el texto completo del mensaje (email o SMS), (c) cómo se personaliza con el nombre del candidato y el puesto al que aplicó, (d) el tono que usar (cálido, profesional, sin corporativismo). Comunicaciones a diseñar: confirmación inmediata de candidatura, actualización de estado a los 5 días sin noticias, invitación a entrevista con detalles prácticos, recordatorio 24 horas antes de la entrevista, agradecimiento post-entrevista con timeline de decisión, y rechazo empático con opción de feedback.

tarea 3 — Chatbot de soporte a candidatos:
Los candidatos tienen preguntas frecuentes durante el proceso. Diseña el chatbot de soporte en el portal de candidatos. Define: (a) las 15 preguntas más frecuentes de los candidatos y sus respuestas, (b) cuándo el chatbot escala a un humano (consultas sobre el estado del proceso de un candidato específico, quejas, situaciones especiales), (c) cómo el chatbot mantiene el contexto de la candidatura del usuario para personalizar las respuestas, (d) el tono de voz del chatbot (nombre, personalidad, límites de lo que puede y no puede hacer). Escribe los guiones de conversación para 3 escenarios frecuentes.

tarea 4 — Feedback personalizado a candidatos rechazados con IA:
El mayor dolor de la candidate experience es el rechazo sin explicación. Diseña el sistema de generación de feedback personalizado para candidatos rechazados. ¿Cómo usa Claude la información del scorecard de evaluación del reclutador para generar un feedback específico, constructivo y honesto, sin revelar información confidencial del proceso ni crear riesgos legales? Genera 3 ejemplos de feedback personalizado para: (a) candidato rechazado en criba de CV por falta de experiencia técnica requerida, (b) candidato que llegó a entrevista final pero no fue seleccionado por ajuste cultural, (c) candidato con buen perfil pero que aplica para un puesto por encima de su nivel actual.

tarea 5 — Métricas de candidate experience y mejora continua:
Define el sistema de medición de la candidate experience. ¿En qué momentos del proceso envías encuestas de satisfacción? ¿Qué preguntas incluyes? ¿Cómo calculas el Candidate NPS y qué benchmarks usas? Define el proceso de revisión mensual de las métricas y cómo usas el feedback de los candidatos para mejorar el sistema de IA. ¿Cómo convences al CHRO de que mejorar la candidate experience tiene impacto en el negocio (reputación de marca empleadora, calidad de candidaturas futuras, conversión de oferta aceptada)?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Transformar la candidate experience con IA conversacional y comunicaciones automáticas',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelance de reclutamiento con IA: escala tu práctica de headhunting',
                'description'      => 'Usa Claude para potenciar tu práctica de reclutamiento freelance o headhunting independiente, desde el sourcing con IA hasta la gestión de múltiples procesos simultáneos sin perder calidad.',
                'prompt_content'   => <<<'EOT'
Eres un headhunter o recruiter freelance especializado en perfiles tecnológicos y digitales. Trabajas con 4-6 clientes simultáneos, gestionas entre 8 y 15 procesos de selección activos y tu negocio depende de la calidad de los candidatos que presentas y de tu velocidad para cubrir vacantes. Quieres usar IA para multiplicar tu capacidad sin sacrificar la calidad ni el trato personalizado que te diferencia de las grandes agencias.

instrucción 1 — Sistema de sourcing con IA para perfiles difíciles:
El sourcing de perfiles técnicos pasivos (que no están buscando activamente empleo) es el cuello de botella de tu negocio. Diseña un sistema de sourcing con IA para encontrar y cualificar perfiles de desarrolladores backend senior en LinkedIn sin pagar la licencia Premium Recruiter. El sistema debe incluir: (a) las búsquedas booleanas óptimas para encontrar perfiles que no se auto-identifican como "en búsqueda activa", (b) el proceso de cualificación preliminar del perfil leyendo el LinkedIn con ayuda de Claude, (c) el mensaje de primer contacto personalizado que genera Claude a partir del perfil del candidato y el brief del puesto, (d) el sistema de seguimiento de los perfiles identificados.

instrucción 2 — Gestión de múltiples procesos con IA:
Con 12 procesos activos, la organización es crítica. Diseña tu sistema de gestión de procesos de selección con ayuda de IA. Incluye: (a) la plantilla de brief de cliente que usas para arrancar cada proceso y que le pasas a Claude para contexto, (b) cómo usas Claude para generar el scorecard de evaluación adaptado a cada puesto, (c) el sistema de notas de candidato que generas con Claude después de cada entrevista, (d) la cadencia de actualización al cliente y las plantillas de informe de estado semanal que Claude te ayuda a redactar en 5 minutos.

instrucción 3 — Presentación de candidatos de alto impacto:
La presentación de candidatos al cliente es el momento de la verdad de tu trabajo. Diseña el sistema para crear resúmenes ejecutivos de candidatos con Claude que sean más potentes que el CV estándar. La presentación debe: (a) destacar por qué este candidato específico es relevante para este cliente específico (no un resumen genérico del CV), (b) incluir los puntos fuertes y las áreas de desarrollo del candidato honestamente, (c) anticipar las preguntas o reservas que tendrá el cliente, (d) terminar con una recomendación clara de si proceder o no a la entrevista con el cliente. Escribe el template y un ejemplo completo para un perfil de CTO para una startup de 50 personas.

instrucción 4 — Propuesta comercial para nuevos clientes:
Diferenciarte de las grandes consultoras de selección requiere una propuesta de valor clara. Diseña tu propuesta comercial para nuevos clientes que incorpore el uso de IA como ventaja competitiva. Incluye: (a) cómo describes el uso de IA en tu proceso sin que suene a que simplemente usas ChatGPT, (b) los tiempos de entrega de candidatos que puedes comprometer gracias a la IA, (c) tu modelo de honorarios (retainer, éxito, híbrido) y cómo lo justificas frente a portales de empleo y grandes consultoras, (d) los 3 primeros proyectos que usarías como casos de referencia (inventados pero creíbles) para demostrar resultados.

instrucción 5 — Productividad personal y gestión del tiempo con IA:
Como freelance, tu tiempo es tu único recurso. Analiza dónde pierdes más tiempo en tu trabajo actual (imagina: searching en LinkedIn 3h/día, redactar emails de seguimiento 1h/día, actualizar CRM 45min/día, preparar informes para clientes 2h/semana) y diseña un sistema de productividad con IA que recupere al menos 2 horas diarias. Para cada actividad: cómo usas Claude para hacerla más rápido o mejor, qué automatizaciones puedes implementar, y cómo mides si el sistema está funcionando.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Escalar práctica de headhunting freelance con IA para gestionar más procesos',
                'vote_score'       => 36,
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
