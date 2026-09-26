<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills634Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Medir el impacto de campañas formativas con evaluación educativa e IA',
                'description'       => 'Aplica modelos de evaluación educativa para medir el retorno de inversión de campañas de formación y marketing de contenidos orientados al aprendizaje.',
                'prompt_content'    => <<<'EOT'
Actúa como un especialista en marketing de aprendizaje y medición del impacto formativo, con experiencia en la aplicación de modelos de evaluación educativa al contexto del marketing de contenidos, la formación de equipos comerciales y la medición del ROI de las iniciativas formativas de marketing.

Objetivo principal: Necesito diseñar un sistema completo para medir el impacto real de nuestras campañas de formación interna para el equipo de marketing y de nuestros programas de marketing educativo para clientes, usando modelos de evaluación basados en evidencia y métricas cuantificables.

Contexto de la organización:
- Tipo de organización: [Empresa B2B / B2C / Agencia de marketing]
- Programas de formación a evaluar: [Formación del equipo comercial / Academias para clientes / Webinars educativos / Cursos online de captación]
- Herramientas disponibles para medición: [CRM, plataforma LMS, Google Analytics, encuestas]
- Presupuesto destinado a formación: [PRESUPUESTO ANUAL]
- Objetivo principal de la formación: [RETENCIÓN DE CLIENTES / VENTAS / ENGAGEMENT / CAPTACIÓN]

Tareas que necesito que desarrolles:

1. Marco de evaluación del impacto formativo en marketing
Diseña un marco de evaluación adaptado al contexto del marketing educativo que combine el Modelo Kirkpatrick de cuatro niveles con métricas de negocio propias de marketing. Para cada nivel define las métricas específicas: nivel 1 Reacción (NPS del webinar, CSAT de la academia de clientes, valoraciones en plataforma), nivel 2 Aprendizaje (porcentaje de mejora en evaluaciones pre-post, tasa de completación de cursos, tiempo de consecución de certificados), nivel 3 Comportamiento (cambio en el comportamiento del cliente o del equipo comercial: más clics, más uso del producto, más ventas de upsell) y nivel 4 Resultados (impacto en retención, LTV, tasa de conversión, cuota de mercado).

2. Sistema de evaluación del conocimiento para webinars y cursos
Diseña el sistema de evaluación del conocimiento para los tres formatos formativos más usados en marketing: webinar en directo de 60 minutos (encuesta de conocimiento previo al inicio, 3 preguntas durante el webinar via Mentimeter o Slido, encuesta de satisfacción post-webinar y seguimiento de comportamiento a 30 días), curso online autogestionado (evaluación diagnóstica inicial, cuestionarios entre módulos con retroalimentación inmediata, evaluación final y proyecto de aplicación), y academia de clientes (rúbrica de nivel de conocimiento del producto, certificación interna con criterios de evaluación y pathway de aprendizaje progresivo).

3. Rúbricas de evaluación para proyectos de aplicación
Diseña rúbricas de evaluación para los proyectos de aplicación práctica de tres programas de marketing educativo: rúbrica para evaluar un plan de marketing digital presentado al final de un curso de formación del equipo (5 criterios con 4 niveles de desempeño cada uno), rúbrica para evaluar el grado de implementación de las estrategias aprendidas en un programa de formación para clientes (indicadores de adopción medibles en el CRM o en la plataforma), y rúbrica para evaluar la calidad de los contenidos generados por el equipo tras recibir formación en creación de contenidos (originalidad, relevancia para la audiencia, estructura y resultados medibles).

4. Seguimiento del progreso y feedback formativo continuo
Define el sistema de seguimiento del progreso y feedback continuo para programas formativos en marketing: dashboard de seguimiento individual del alumno (métricas a visualizar, alertas de inactividad, indicadores de riesgo de abandono), proceso de feedback formativo a mitad del programa (encuesta de pulso de 3 preguntas, sesión de preguntas y respuestas en directo, ajuste del programa en función del feedback), y sistema de feedback entre pares para talleres de creación de contenidos o campañas (instrucciones para el feedback constructivo, formulario estructurado, rúbrica para valorar el feedback recibido).

5. Corrección automática y evaluación escalable
Explica cómo implementar la corrección automática en los programas formativos de marketing para escalar sin aumentar el equipo: tipos de preguntas que pueden corregirse automáticamente (opción múltiple, verdadero/falso, ordenar pasos, emparejar conceptos), cómo diseñar preguntas de opción múltiple que evalúen comprensión real y no solo memorización (técnica de los distractores plausibles), cómo usar cuestionarios adaptativos que ajustan la dificultad según las respuestas previas del alumno, y cuándo y cómo escalar a corrección humana para evaluaciones abiertas de mayor complejidad (criterios de cuándo vale la pena el esfuerzo).

6. Informe de impacto formativo para la dirección
Diseña la estructura de un informe trimestral de impacto de las iniciativas formativas de marketing para presentar a la dirección: resumen ejecutivo con los 3 datos más relevantes, cuadro de mando de aprendizaje por programa (adoptantes activos, tasa de completación, NPS y nivel de conocimiento promedio), análisis de correlación entre la formación recibida y los KPI de negocio (con ejemplos de visualizaciones de datos), recomendaciones de mejora para el siguiente trimestre y cálculo del ROI de la inversión formativa.

Formato de respuesta: Usa tablas para las rúbricas y el cuadro de mando, listas para el sistema de feedback y la corrección automática, y formato de informe ejecutivo para la sección del reporting a dirección. Incluye ejemplos de preguntas bien diseñadas y mal diseñadas para ilustrar los principios de evaluación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Medir el impacto de programas formativos de marketing con modelos de evaluación educativa',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Sistema de evaluación automática de código para formación tech con IA',
                'description'       => 'Diseña sistemas de evaluación automática de código para bootcamps, cursos de programación y plataformas de formación técnica que escalen sin intervención humana constante.',
                'prompt_content'    => <<<'EOT'
Actúa como un ingeniero de software senior especializado en el diseño de sistemas de evaluación automática de código (autograders) para plataformas de formación técnica, bootcamps de programación y cursos online de desarrollo de software.

Objetivo principal: Necesito diseñar e implementar un sistema de evaluación automática de código para una plataforma de formación técnica que permita dar feedback inmediato a los alumnos, escalar la corrección sin aumentar el equipo docente y detectar de forma temprana a los alumnos que tienen dificultades.

Contexto de la plataforma:
- Lenguajes de programación que se enseñan: [Python / JavaScript / Java / SQL / Otro]
- Tipo de formación: [Bootcamp intensivo / Curso online autogestionado / Plataforma universitaria]
- Número de alumnos activos: [NÚMERO]
- Tipos de ejercicios: [Algoritmos / Proyectos web / Bases de datos / Ciencia de datos / DevOps]
- Infraestructura disponible: [Cloud provider, contenedores, CI/CD]
- Restricciones de seguridad: [Ejecución de código de alumnos en entorno aislado]

Tareas que necesito que desarrolles:

1. Arquitectura del sistema de evaluación automática
Diseña la arquitectura del sistema de autoevaluación de código con los componentes principales: interfaz de envío de código del alumno (editor online con resaltado de sintaxis, o integración con GitHub), cola de evaluación (gestión de la concurrencia durante los picos de entrega de ejercicios), motor de ejecución aislada (sandboxed execution con contenedores Docker o equivalente para cada lenguaje), motor de pruebas automáticas (unittest, pytest, Jest, JUnit o equivalente), sistema de comparación de resultados y cálculo de puntuación, y sistema de entrega de feedback al alumno. Justifica cada decisión de diseño y proporciona alternativas open source y comerciales para cada componente.

2. Diseño de casos de prueba educativos efectivos
Explica cómo diseñar casos de prueba automatizados para ejercicios de programación que evalúen la comprensión real y no solo la solución correcta: tipos de casos de prueba a incluir (casos básicos, casos límite, casos de error, casos de rendimiento), cómo estructurar los casos de prueba de modo que el feedback sea informativo y pedagógico (no solo "Test 3 failed" sino "Tu función devuelve X cuando se esperaba Y para la entrada Z"), cómo evitar que los alumnos hagan trampa con soluciones que pasan las pruebas sin resolver el problema real (hardcoding de respuestas, pruebas de caja negra vs. análisis de código), y cómo graduar la dificultad de los ejercicios con niveles de prueba progresivos.

3. Sistema de feedback formativo automático
Diseña el sistema de feedback automático que el alumno recibe después de cada intento de envío. El sistema debe incluir: feedback inmediato sobre qué pruebas han pasado y cuáles han fallado (con información pedagógica suficiente para que el alumno entienda el error), análisis estático del código del alumno para detectar patrones problemáticos (bucles ineficientes, variables no usadas, código duplicado) con sugerencias específicas de mejora, pistas progresivas disponibles a petición del alumno (primera pista general, segunda pista más específica, tercera pista casi solución), y cómo calibrar el nivel de detalle del feedback para no dar la solución directamente pero sí guiar el pensamiento.

4. Detección de dificultades y alerta temprana
Define el sistema de analítica de aprendizaje para detectar a los alumnos con dificultades antes de que abandonen: señales de alerta en el comportamiento de evaluación (más de 5 intentos fallidos en el mismo ejercicio, tiempo de resolución muy superior a la mediana del grupo, patrón de errores que se repite en distintos ejercicios), cómo integrar estas señales en un dashboard para el equipo docente con alertas automáticas, protocolo de intervención cuando se detecta un alumno en riesgo (mensaje automático del sistema + notificación al tutor para seguimiento personalizado), y cómo usar los datos de errores más frecuentes para mejorar los materiales didácticos del curso.

5. Control de integridad académica
Describe las medidas técnicas y pedagógicas para mantener la integridad académica en la evaluación de código: detección de similitud entre envíos de distintos alumnos (herramientas como MOSS o JPlag), cómo diferenciar la colaboración legítima del plagio (análisis de métricas de código más allá de la similitud superficial), cómo diseñar ejercicios que sean difíciles de copiar (personalización con variables aleatorias, proyectos con requisitos específicos por alumno, defensa oral del ejercicio), y cómo gestionar los casos de sospecha de deshonestidad académica de forma justa y documentada.

6. Escalabilidad y gestión de picos de carga
Define la estrategia de escalabilidad del sistema de evaluación para gestionar los picos de entrega (últimas horas antes de la fecha límite de un ejercicio): arquitectura de colas con priorización (alumnos que han enviado antes tienen mayor prioridad), escalado automático de los contenedores de ejecución según la demanda (AWS Lambda, Google Cloud Run, Kubernetes autoscaling), tiempos máximos de ejecución por ejercicio y cómo gestionar los timeouts de forma pedagógica (el alumno sabe que su código es demasiado lento, no que el sistema ha fallado), y cómo monitorizar el rendimiento del sistema y recibir alertas ante degradación de la calidad del servicio.

Formato de respuesta: Usa diagramas en texto (ASCII o Mermaid) para la arquitectura, tablas para comparar herramientas y ejemplos de código (pseudocódigo o Python real) para ilustrar el diseño de casos de prueba y el sistema de feedback.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Diseñar e implementar sistemas de evaluación automática de código para plataformas de formación técnica',
                'vote_score'        => 50,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Rúbricas visuales y feedback formativo en diseño educativo con IA',
                'description'       => 'Crea rúbricas de evaluación visual, sistemas de feedback formativo y herramientas de seguimiento del progreso para talleres, cursos y programas de formación en diseño.',
                'prompt_content'    => <<<'EOT'
Actúa como un evaluador educativo y diseñador instruccional especializado en la evaluación del aprendizaje en programas de formación de diseño gráfico, UX, diseño de producto y comunicación visual, con experiencia en la creación de rúbricas analíticas, portfolios de evaluación y sistemas de feedback formativo para entornos creativos.

Objetivo principal: Necesito diseñar un sistema completo de evaluación formativa y sumativa para un programa de formación en diseño que sea justo, transparente, pedagógicamente sólido y que motive a los alumnos a mejorar en lugar de centrarse únicamente en la calificación.

Contexto del programa de formación:
- Especialidad de diseño: [Diseño gráfico / UX-UI / Diseño de producto / Diseño de comunicación]
- Tipo de programa: [Bootcamp / Grado / Máster / Curso online / Taller intensivo]
- Duración del programa: [SEMANAS O MESES]
- Número de alumnos: [NÚMERO]
- Proyectos evaluados: [TIPOS DE PROYECTOS O ENTREGAS]
- Herramientas que usan los alumnos: [Figma / Adobe / Procreate / Otro]

Tareas que necesito que desarrolles:

1. Sistema de evaluación del aprendizaje en diseño
Diseña el sistema de evaluación completo para el programa, diferenciando claramente entre evaluación formativa (para aprender y mejorar durante el proceso) y evaluación sumativa (para certificar el nivel alcanzado al final). Define: qué se evalúa en cada momento del programa (diagnóstica inicial, evaluaciones formativas semanales, evaluación de proyectos intermedios y proyecto final), quién evalúa (autoevaluación del alumno, evaluación entre pares, evaluación del instructor), qué peso tiene cada evaluación en la calificación final y cómo se comunica el sistema de evaluación a los alumnos desde el primer día para que sea completamente transparente.

2. Rúbricas analíticas para proyectos de diseño
Crea rúbricas analíticas detalladas para evaluar tres tipos de proyectos de diseño habituales en la formación: rúbrica para un proyecto de diseño de identidad visual (criterios: investigación y estrategia de marca, originalidad y concepto creativo, calidad técnica y de presentación, coherencia del sistema de identidad, capacidad de justificación de las decisiones de diseño), rúbrica para un proyecto de diseño UX (criterios: investigación de usuarios y definición del problema, calidad del proceso de ideación, prototipado y pruebas con usuarios, calidad del diseño visual final y documentación del proceso), y rúbrica para evaluar la presentación oral de un proyecto de diseño (criterios: claridad en la comunicación del proceso, defensa de las decisiones de diseño, manejo de preguntas y críticas, calidad visual de la presentación). Cada rúbrica debe tener al menos cuatro niveles de desempeño con descripciones específicas y ejemplos concretos.

3. Protocolo de crítica constructiva (design critique)
Define el protocolo completo para las sesiones de crítica de diseño (design crits) en el programa formativo: estructura de la sesión (tiempo de presentación del alumno, tiempo de observación silenciosa, ronda de preguntas aclaratorias, feedback estructurado de compañeros y del instructor), reglas del feedback constructivo en diseño (describir antes de evaluar, usar la rúbrica como referencia, distinguir entre preferencias personales y criterios de calidad objetivos, ofrecer alternativas cuando se señala un problema), formulario de feedback entre pares que guíe a los alumnos para dar feedback útil y específico, y cómo el instructor modela el tipo de feedback que quiere ver antes de pedir a los alumnos que lo practiquen.

4. Autoevaluación y metacognición en diseño
Diseña el sistema de autoevaluación que acompañará cada entrega de proyecto. El sistema debe incluir: formulario de autoevaluación estructurado (5 preguntas reflexivas sobre el proceso creativo seguido, las decisiones tomadas y los aprendizajes de la iteración), indicaciones para comparar la autoevaluación con la rúbrica del instructor y reflexionar sobre las diferencias, ejercicio de fijación de objetivos personales de mejora para el siguiente proyecto (qué habilidad específica quiero mejorar y cómo lo haré), y cómo construir el portfolio de aprendizaje a lo largo del curso como evidencia del progreso y herramienta de reflexión metacognitiva.

5. Seguimiento del progreso individual y grupal
Define el sistema de seguimiento del progreso de los alumnos en el programa de diseño: indicadores de progreso que se monitorean semana a semana (calidad de los proyectos según rúbrica, participación activa en las sesiones de crítica, regularidad en las entregas, evolución de la autoevaluación), cómo visualizar el progreso para el alumno de forma motivadora (gráficos de radar de competencias, historial de proyectos con evolución en cada criterio), reuniones de tutoría individual de seguimiento (frecuencia recomendada, estructura de la conversación de 20 minutos, cómo establecer compromisos concretos de mejora) y cómo detectar y apoyar a los alumnos que no progresan al ritmo esperado.

6. Evaluación final y certificación del programa
Define el proceso de evaluación final y certificación del programa de diseño: estructura y criterios de evaluación del proyecto final o portfolio de cierre, proceso de defensa ante tribunal (si aplica): duración, formato, criterios de evaluación y protocolo de preguntas, criterios de superación del programa y de distinción por nivel de excelencia, diseño del certificado y cómo comunicar las competencias adquiridas de forma que sea relevante para empleadores o clientes freelance, y cómo mantener el contacto con los alumnos tras la certificación para monitorizar el impacto del programa en su carrera.

Formato de respuesta: Usa tablas para las rúbricas analíticas (una fila por criterio, una columna por nivel de desempeño), listas para los protocolos de crítica y autoevaluación, y un tono cercano y pedagógico que refleje la naturaleza creativa y humana de la enseñanza del diseño.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar rúbricas, feedback formativo y seguimiento del progreso en programas de formación en diseño',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Evaluación del rendimiento comercial y feedback formativo para equipos de ventas con IA',
                'description'       => 'Diseña sistemas de evaluación del desempeño, rúbricas de llamadas de ventas y programas de feedback formativo continuo para equipos comerciales de alto rendimiento.',
                'prompt_content'    => <<<'EOT'
Actúa como un director comercial y formador de equipos de ventas con amplia experiencia en el diseño de sistemas de evaluación del rendimiento comercial, la creación de rúbricas de evaluación de llamadas y reuniones de ventas, y la implementación de programas de coaching y feedback formativo para equipos de alto rendimiento.

Objetivo principal: Necesito diseñar un sistema integral de evaluación y feedback formativo para el equipo de ventas que vaya más allá de los KPI numéricos habituales (número de llamadas, tasa de conversión, ingresos), y que desarrolle de forma continua las habilidades de venta del equipo a través de la evaluación, el coaching y el feedback estructurado.

Contexto del equipo comercial:
- Tipo de ventas: [B2B / B2C / Inbound / Outbound / Venta consultiva / Venta de producto]
- Tamaño del equipo: [NÚMERO DE COMERCIALES]
- Ciclo de venta medio: [DÍAS O SEMANAS]
- Herramientas de ventas utilizadas: [CRM, Gong, Chorus, Salesforce, HubSpot, etc.]
- Principales retos del equipo: [BAJA CONVERSIÓN / FALTA DE CUALIFICACIÓN / PROBLEMAS EN EL CIERRE / OTRO]
- Experiencia media del equipo: [JUNIOR / MIXTO / SENIOR]

Tareas que necesito que desarrolles:

1. Marco de competencias comerciales
Define el mapa de competencias del comercial de alto rendimiento en tu tipo de venta. Las competencias deben agruparse en: competencias de prospección y cualificación (identificar el perfil de cliente ideal, cualificar la oportunidad con criterios BANT o MEDDIC, manejar el rechazo y la objeción inicial), competencias de descubrimiento y diagnóstico (escucha activa, preguntas de diagnóstico de necesidades, identificación del dolor y el impacto económico), competencias de presentación y propuesta de valor (storytelling comercial, demostración del producto o servicio, personalización de la propuesta), competencias de cierre y negociación (gestión de objeciones avanzadas, técnicas de cierre, negociación de condiciones) y competencias relacionales (construcción de confianza, gestión de la relación a largo plazo, ampliación de la cuenta).

2. Rúbrica de evaluación de llamadas y reuniones de ventas
Crea una rúbrica analítica completa para evaluar una llamada o reunión de ventas. La rúbrica debe tener al menos 8 criterios de evaluación con cuatro niveles de desempeño (en desarrollo, competente, avanzado, experto) con descripciones específicas y ejemplos concretos de comportamientos observables. Los criterios deben cubrir: apertura y rapport, cualificación de la oportunidad, descubrimiento de necesidades y dolores, presentación de la solución adaptada al contexto del cliente, manejo de objeciones, avance hacia el siguiente paso y cierre o compromiso. Incluye también cómo usar esta rúbrica en sesiones de escucha de llamadas grabadas.

3. Sistema de coaching y feedback formativo continuo
Define el sistema de coaching individual para cada comercial del equipo: frecuencia y formato de las sesiones de coaching (sesión semanal de 30 minutos recomendada, agenda estándar de la sesión), cómo seleccionar la llamada o reunión a revisar en cada sesión (criterios de selección para maximizar el aprendizaje), protocolo de feedback usando el modelo SBI (Situación, Comportamiento, Impacto) adaptado al contexto de ventas, cómo convertir el feedback en compromisos de práctica concretos para la siguiente semana, y cómo hacer seguimiento de los compromisos de mejora de sesión en sesión sin que parezca un control sino un acompañamiento.

4. Evaluación 360 grados para el equipo comercial
Diseña el proceso de evaluación 360 grados para los comerciales: autoevaluación del comercial (formulario de 10 preguntas sobre sus propias fortalezas y áreas de mejora), evaluación del manager directo usando la rúbrica de competencias, evaluación de un compañero o compañero con quien colabore frecuentemente (focus en las competencias relacionales y de trabajo en equipo), y si aplica, evaluación de clientes seleccionados (NPS de la gestión comercial, valoración de la relación y el soporte post-venta). Define cómo agregar los resultados de los cuatro ángulos de forma que sean útiles para el desarrollo y no generen defensividad.

5. Plan de desarrollo individual (PDI) para comerciales
Define la estructura del Plan de Desarrollo Individual que se construye con cada comercial a partir de la evaluación: cómo identificar las dos o tres áreas de mayor impacto en las que enfocarse durante el siguiente trimestre, cómo redactar objetivos de desarrollo específicos, medibles y con plazos concretos, qué recursos de formación asignar para cada objetivo (roleplay, shadowing, curso online, mentoring de un comercial senior, lectura recomendada), cómo hacer seguimiento mensual del progreso del PDI y cómo celebrar y reconocer los avances de desarrollo conseguidos.

6. Analítica de ventas para la mejora continua del equipo
Define el cuadro de mando de evaluación del equipo comercial que combina métricas de actividad, resultados y desarrollo: métricas de actividad (llamadas realizadas, reuniones completadas, propuestas enviadas), métricas de conversión en cada etapa del embudo (de lead a cualificado, de reunión a propuesta, de propuesta a cierre), métricas de calidad de la venta (tamaño medio del deal, tiempo del ciclo de venta, tasa de descuento media), y métricas de desarrollo (evolución de la puntuación en la rúbrica de llamadas, número de sesiones de coaching completadas, porcentaje del PDI ejecutado). Incluye cómo usar estos datos en las reuniones de equipo semanales sin que se conviertan en una sesión de presión y control.

Formato de respuesta: Usa tablas para la rúbrica de evaluación de llamadas y las métricas del cuadro de mando, listas para los protocolos de coaching y feedback, y ejemplos de diálogo concretos para ilustrar los modelos de feedback y las conversaciones de desarrollo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Evaluar el desempeño y dar feedback formativo continuo a equipos de ventas de alto rendimiento',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Métricas de aprendizaje y evaluación de producto educativo con IA',
                'description'       => 'Define y mide la efectividad educativa de productos digitales: marcos de evaluación del aprendizaje, análisis de engagement y seguimiento del progreso del usuario como alumno.',
                'prompt_content'    => <<<'EOT'
Actúa como un Product Manager especializado en productos educativos digitales y plataformas de aprendizaje, con experiencia en la definición de métricas de aprendizaje, el diseño de sistemas de evaluación integrados en el producto y el uso de la analítica del aprendizaje (learning analytics) para tomar decisiones de producto basadas en datos.

Objetivo principal: Necesito diseñar el sistema de métricas de aprendizaje y evaluación integrado en el producto para una plataforma educativa digital, que permita medir de forma objetiva si los usuarios están aprendiendo de verdad (y no solo usando la plataforma) y usar esos datos para mejorar continuamente el producto.

Contexto del producto:
- Tipo de producto educativo: [App de idiomas / Plataforma de habilidades profesionales / LMS corporativo / App de matemáticas / Plataforma K-12]
- Usuarios principales: [PERFIL DEL USUARIO OBJETIVO]
- Objetivo de aprendizaje principal del producto: [QUÉ APRENDEN LOS USUARIOS]
- Métricas actuales que se miden: [DAU, MAU, RETENCIÓN, OTRO]
- Infraestructura de datos disponible: [DATA WAREHOUSE, HERRAMIENTAS DE ANALYTICS]
- Madurez del producto: [MVP / PRODUCTO EN CRECIMIENTO / PRODUCTO MADURO]

Tareas que necesito que desarrolles:

1. Diferenciación entre métricas de uso y métricas de aprendizaje
Explica la diferencia fundamental entre las métricas de uso de un producto digital (DAU, tiempo en sesión, clics, pantallas visitadas) y las métricas de aprendizaje que realmente indican si el usuario está aprendiendo. Define cómo complementar el cuadro de mando de producto con métricas de aprendizaje: retención del conocimiento (diferencia entre el rendimiento inmediato post-lección y el rendimiento en una evaluación espaciada a los 7 días), tasa de transferencia (capacidad de aplicar el conocimiento a contextos nuevos no vistos en el curso), progresión de competencias (número de usuarios que pasan de un nivel de competencia a otro en un periodo de tiempo), y correlación entre el uso de la plataforma y los resultados de aprendizaje.

2. Framework de evaluación integrada en el producto
Diseña el framework de evaluación del aprendizaje integrado en la experiencia del producto (sin que se sienta como un examen separado): evaluación diagnóstica onboarding (cómo personalizar el itinerario desde el primer uso basándote en el nivel inicial del usuario), microevaluaciones integradas en el flujo de aprendizaje (preguntas de práctica distribuida usando el principio del testing effect, sin interrumpir el flow del usuario), evaluaciones de nivel (hitos de progresión que el usuario desea alcanzar y que celebra el producto), y evaluaciones adaptativas que ajustan la dificultad del siguiente ejercicio según el rendimiento reciente del usuario (algoritmo de repetición espaciada tipo SM2 o equivalente).

3. Learning Analytics: datos a recopilar y cómo usarlos
Define los eventos de aprendizaje que el producto debe registrar para alimentar el sistema de analítica del aprendizaje: qué registrar a nivel de ejercicio (intento, respuesta correcta o incorrecta, tiempo de respuesta, número de intentos, pistas solicitadas), a nivel de sesión (duración, ejercicios completados, tasa de acierto, estado de ánimo declarado si aplica), y a nivel longitudinal (evolución de la tasa de acierto por concepto a lo largo del tiempo, curva de aprendizaje, patrón de olvido). Explica cómo transformar estos datos en insights accionables para el equipo de producto y para el propio usuario.

4. Personalización del itinerario de aprendizaje basada en datos
Describe cómo usar los datos de aprendizaje para personalizar el itinerario de cada usuario: cómo identificar los conceptos que el usuario domina (y evitar que los repita innecesariamente), cómo detectar los conceptos donde tiene mayor debilidad y priorizarlos en las siguientes sesiones, cómo usar la curva del olvido de Ebbinghaus para programar las revisiones en el momento óptimo antes de que el usuario olvide el concepto, y cómo equilibrar la práctica de lo conocido (para reforzar la confianza) con el reto de lo nuevo (para mantener el engagement). Incluye las consideraciones éticas sobre la transparencia del algoritmo de personalización para el usuario.

5. Feedback formativo integrado en la experiencia del usuario
Define el sistema de feedback que el usuario recibe después de cada interacción de evaluación en el producto: feedback inmediato correcto (no solo "correcto" sino por qué es correcto y qué concepto refuerza), feedback inmediato incorrecto (no solo "incorrecto" sino cuál es el error conceptual y cómo pensar sobre este tipo de problema), feedback de progresión (visualización de la curva de aprendizaje personal que muestra al usuario que está mejorando de forma tangible), y feedback de logros y hitos (celebración de niveles superados, racha de práctica, conceptos dominados) que refuercen la motivación intrínseca del usuario.

6. Métricas de efectividad educativa del producto
Define el cuadro de mando de efectividad educativa para presentar a inversores, clientes corporativos o equipos internos: Learning Gain (diferencia entre el nivel de competencia al entrar al producto y al superar un módulo), Knowledge Retention Rate (porcentaje de conocimiento retenido a los 30 días), Skill Transfer Index (capacidad de aplicar el aprendizaje a contextos nuevos), Time to Competency (tiempo medio para pasar de principiante a competente en una habilidad), correlación entre el uso del producto y los resultados profesionales o académicos de los usuarios (si se puede medir), y NPS de aprendizaje (¿recomendarías este producto a alguien que quiera aprender X?).

Formato de respuesta: Usa tablas para los eventos de aprendizaje y las métricas del cuadro de mando, diagramas en texto para el framework de evaluación integrada y ejemplos de código en pseudocódigo o Python para el algoritmo de repetición espaciada. El tono debe combinar el rigor técnico de producto con la solidez de la ciencia del aprendizaje.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar métricas de aprendizaje y evaluación integrada en productos educativos digitales',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Evaluación del desempeño y feedback formativo en RRHH con IA',
                'description'       => 'Diseña sistemas modernos de evaluación del desempeño, rúbricas de competencias y programas de feedback formativo continuo que sustituyan a las revisiones anuales tradicionales.',
                'prompt_content'    => <<<'EOT'
Actúa como un director o directora de Recursos Humanos especializado en el diseño de sistemas modernos de evaluación del desempeño y desarrollo del talento, con experiencia en la implementación de modelos de feedback continuo, evaluaciones por competencias y programas de conversaciones de desarrollo que sustituyen a las revisiones anuales tradicionales.

Objetivo principal: Necesito diseñar e implementar un sistema de evaluación del desempeño moderno para la empresa que sea percibido como justo y útil por los empleados, que motive el desarrollo continuo y que proporcione datos confiables para las decisiones de compensación, promoción y desarrollo.

Contexto de la organización:
- Sector y actividad: [SECTOR]
- Número de empleados: [NÚMERO]
- Sistema de evaluación actual: [Revisión anual / Sin sistema formal / Otro]
- Principales problemas con el sistema actual: [FALTA DE OBJETIVIDAD / SOLO MIRA EL PASADO / NO SE USA EN LA PRÁCTICA / ETC.]
- Cultura organizacional: [Descripción de la cultura]
- Herramientas de RRHH disponibles: [HRMS, Lattice, Leapsome, 15Five, Excel, etc.]

Tareas que necesito que desarrolles:

1. Marco de competencias organizacional
Define el proceso para construir el marco de competencias de la organización: cómo identificar las competencias core que todos los empleados deben tener (independientemente de su rol), cómo definir las competencias de liderazgo para mandos intermedios y directivos, cómo desarrollar las competencias técnicas por familia de puestos (sin caer en la trampa de hacer un marco demasiado extenso que nadie use), y cómo redactar los indicadores de comportamiento observable para cada nivel de cada competencia de forma que sean inequívocas para cualquier evaluador. Incluye un ejemplo de competencia completa con sus cuatro niveles de desempeño.

2. Sistema de objetivos y resultados clave (OKR o similares)
Diseña el sistema de fijación y seguimiento de objetivos para la empresa: cómo articular los OKR de empresa en objetivos de equipo y en objetivos individuales (proceso de cascada y alineación), frecuencia y formato del seguimiento del progreso de los objetivos (check-in semanal de 15 minutos, revisión mensual de 30 minutos, ajuste trimestral), cómo diferenciar los objetivos de negocio (a los que va ligada la compensación variable) de los objetivos de desarrollo personal (que no deben estar vinculados al salario para no pervertir su propósito), y cómo gestionar el caso de que los objetivos se vuelvan obsoletos o no controlables por el empleado a lo largo del año.

3. Modelo de feedback continuo y conversaciones de desarrollo
Diseña el sistema de feedback continuo que reemplaza o complementa la revisión anual: frecuencia y formato de las conversaciones de desarrollo 1a1 entre manager y empleado (reunión quincenal de 30 minutos, agenda co-creada, enfocada en el presente y el futuro), protocolo de feedback de alto impacto usando el modelo SBI-I (Situación, Comportamiento, Impacto, Intención) con ejemplos concretos para managers que dan feedback por primera vez, sistema de solicitud de feedback entre pares (cómo pedir, cuándo pedir y qué hacer con el feedback recibido), y cómo documentar las conversaciones de desarrollo de forma que sean útiles y no se conviertan en burocracia.

4. Evaluación formal semestral o anual por competencias
Define el proceso de evaluación formal por competencias: quién evalúa a quién (autoevaluación del empleado, evaluación del manager, evaluación de pares si aplica, evaluación de clientes internos), formulario de evaluación (escala de valoración recomendada: evitar escalas pares, preferir impares de 5 puntos con anclas conductuales claras), cómo calibrar las evaluaciones entre managers del mismo nivel para garantizar la equidad (sesiones de calibración: quién participa, qué casos se revisan, cómo resolver desacuerdos), y cómo comunicar el resultado de la evaluación al empleado de forma constructiva y motivadora.

5. Vinculación de la evaluación con las decisiones de RRHH
Explica cómo conectar los resultados de la evaluación del desempeño con las decisiones de compensación, promoción y desarrollo: cómo diseñar la matriz de desempeño y potencial (nine-box) y sus implicaciones para cada cuadrante, cómo calcular el incremento salarial o el bonus variable a partir de la evaluación (ejemplo de modelo de distribución del presupuesto de compensación variable), criterios de promoción basados en competencias demostradas de forma consistente y en la disponibilidad de un rol superior, y cómo usar la evaluación para identificar a los empleados con mayor potencial y diseñar planes de desarrollo acelerado.

6. Gestión de evaluaciones difíciles y desempeño insuficiente
Define el protocolo para gestionar evaluaciones de bajo desempeño: cuándo y cómo iniciar una conversación de mejora de desempeño (antes de que llegue a la evaluación formal), estructura del Plan de Mejora de Desempeño (PIP): objetivos específicos, plazos, recursos de apoyo, criterios de éxito y consecuencias en caso de no cumplirlo, cómo documentar correctamente el proceso de gestión del bajo desempeño desde una perspectiva legal (España: Estatuto de los Trabajadores, despido por causas objetivas), y cómo apoyar al manager durante este proceso, que suele ser emocionalmente difícil para todas las partes implicadas.

Formato de respuesta: Usa tablas para el marco de competencias y la matriz desempeño-potencial, listas para los protocolos de feedback y evaluación, y ejemplos de conversación para las secciones sobre feedback y gestión del bajo desempeño. El tono debe ser práctico, humano y orientado a la implementación real en organizaciones de tamaño medio.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar sistemas modernos de evaluación del desempeño y feedback formativo continuo en RRHH',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Evaluación de competencias financieras y feedback formativo con IA',
                'description'       => 'Diseña programas de evaluación de la competencia financiera de equipos y directivos, con rúbricas, casos prácticos y sistemas de feedback para el desarrollo de habilidades financieras.',
                'prompt_content'    => <<<'EOT'
Actúa como un formador y evaluador de competencias financieras con experiencia en el diseño de programas de desarrollo de la inteligencia financiera para profesionales no financieros, directivos, emprendedores y equipos multidisciplinares, con habilidad para hacer el contenido financiero accesible, relevante y aplicable.

Objetivo principal: Necesito diseñar un sistema completo de evaluación de competencias financieras para un programa de formación dirigido a directivos o profesionales de otras áreas (no finanzas), que incluya evaluaciones diagnósticas, rúbricas de resolución de casos y sistemas de feedback formativo que aceleren el desarrollo de la inteligencia financiera.

Contexto del programa de formación financiera:
- Audiencia objetivo: [DIRECTIVOS / EMPRENDEDORES / COMERCIALES / EQUIPOS FUNCIONALES]
- Nivel de partida estimado: [Sin conocimientos previos / Nociones básicas / Nivel intermedio]
- Duración del programa: [SEMANAS]
- Competencias financieras a desarrollar: [Lectura de estados financieros / Presupuestación / Análisis de rentabilidad / Otro]
- Formato del programa: [Presencial / Online / Mixto]
- Uso posterior de la formación: [Toma de decisiones / Reporting al consejo / Gestión del propio negocio]

Tareas que necesito que desarrolles:

1. Mapa de competencias financieras para no financieros
Define el mapa de competencias financieras relevantes para directivos y profesionales no financieros, organizado en tres niveles de dominio: nivel básico (saber leer un balance simplificado, entender la diferencia entre ingresos y caja, interpretar las principales líneas de una cuenta de resultados), nivel intermedio (analizar la rentabilidad de un proyecto, interpretar ratios financieros clave, entender el ciclo de conversión de caja, elaborar y defender un presupuesto de su área) y nivel avanzado (analizar la viabilidad de una inversión con VAN y TIR, leer e interpretar las notas a los estados financieros, comprender el impacto de las decisiones operativas en el balance y en el flujo de caja). Para cada nivel, describe los indicadores de dominio observables.

2. Evaluación diagnóstica de competencia financiera
Diseña una evaluación diagnóstica de 30 minutos para medir el nivel inicial de competencia financiera de los participantes. La evaluación debe incluir: 10 preguntas de opción múltiple que evalúen la comprensión conceptual (no solo la memorización), 3 ejercicios prácticos breves de interpretación de datos financieros reales simplificados (un extracto de cuenta de resultados, un balance esquemático y un cuadro de flujo de caja), y una pregunta abierta de reflexión sobre cómo usan (o necesitan usar) la información financiera en su trabajo diario. Incluye la rúbrica de corrección de los ejercicios prácticos con los criterios de evaluación de cada nivel.

3. Casos prácticos de evaluación y rúbricas de resolución
Diseña tres casos prácticos de evaluación para distintos niveles del programa financiero: caso nivel básico (interpretar la cuenta de resultados de una empresa ficticia y responder a 5 preguntas de comprensión sobre rentabilidad, evolución de ventas y estructura de costes), caso nivel intermedio (analizar la viabilidad económica de un proyecto de expansión usando los datos proporcionados: inversión inicial, proyección de ingresos y gastos, cálculo del payback y de la rentabilidad), caso nivel avanzado (simular la decisión de inversión de un comité directivo: analizar tres opciones de inversión con datos financieros, recomendar una con justificación y defender la decisión ante preguntas). Para cada caso, proporciona la rúbrica analítica de evaluación con criterios y niveles de desempeño.

4. Sistema de feedback formativo en formación financiera
Define el protocolo de feedback para los casos prácticos y ejercicios financieros: cómo dar feedback sobre un error de cálculo de forma que el participante entienda el concepto detrás y no solo la corrección numérica, cómo dar feedback sobre un error de interpretación financiera (confundir beneficio con caja, confundir rentabilidad con margen) que corrija el modelo mental erróneo, cómo usar el método socrático para guiar al participante a descubrir su propio error en lugar de dárselo directamente, y cómo calibrar el nivel de desafío de los casos para que sean lo suficientemente difíciles como para aprender pero no tan difíciles como para frustrar.

5. Seguimiento del progreso en competencias financieras
Diseña el sistema de seguimiento del desarrollo de competencias financieras a lo largo del programa: evaluación de avance a mitad del programa (qué mide, cómo se comunica al participante y cómo se usa para ajustar el itinerario restante), portfolio de aprendizaje financiero que el participante construye durante el programa (ejercicios resueltos con reflexiones escritas, análisis de casos reales de su propia empresa o sector), autoevaluación de confianza financiera al inicio y al final del programa (escala de confianza percibida por competencia, no solo conocimiento objetivo), y cómo medir el impacto del programa en el trabajo real de los participantes a los 90 días de finalizar.

6. Certificación de competencia financiera
Define el proceso de evaluación final y certificación del programa de competencias financieras: estructura y criterios del proyecto final (análisis financiero de un caso real o de la propia empresa del participante), proceso de defensa ante el grupo o ante un tribunal de evaluadores, criterios de obtención del certificado de competencia financiera (puntuación mínima en la evaluación final y en los casos intermedios), diseño del certificado y qué competencias específicas acredita de forma que sea relevante para el mercado laboral o para el consejo de administración de la empresa del participante.

Formato de respuesta: Usa tablas para el mapa de competencias y las rúbricas de los casos prácticos, listas numeradas para los protocolos de feedback y seguimiento, y ejemplos concretos de preguntas y ejercicios financieros con datos ficticios pero realistas. El tono debe ser riguroso pero accesible para un público no financiero.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Evaluar y desarrollar competencias financieras en directivos y profesionales con programas formativos basados en casos',
                'vote_score'        => 26,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Evaluación formativa y acreditación de competencias jurídicas con IA',
                'description'       => 'Diseña sistemas de evaluación de competencias jurídicas para formación de abogados, paralegales y profesionales del derecho: casos prácticos, rúbricas y feedback continuo.',
                'prompt_content'    => <<<'EOT'
Actúa como un profesor o profesora de derecho especializado en la evaluación de competencias jurídicas y el diseño de programas de formación práctica para abogados, paralegales y profesionales del área legal, con experiencia en la metodología del caso (case method), las clínicas jurídicas y los programas de formación en habilidades legales (legal skills).

Objetivo principal: Necesito diseñar un sistema completo de evaluación de competencias jurídicas para un programa de formación de abogados o profesionales del derecho, que vaya más allá de los exámenes teóricos tradicionales y evalúe las competencias prácticas que realmente se necesitan en el ejercicio profesional: análisis jurídico, redacción legal, argumentación, negociación y ética profesional.

Contexto del programa de formación jurídica:
- Tipo de programa: [Máster de acceso a la abogacía / Formación interna de despacho / Programa de especialización / Formación de paralegales]
- Área del derecho especializada: [Mercantil / Procesal / Laboral / Fiscal / Penal / Otro]
- Perfil de los participantes: [Recién graduados / Abogados junior / Profesionales en reconversión]
- Duración del programa: [MESES]
- Formato: [Presencial / Online / Mixto]

Tareas que necesito que desarrolles:

1. Mapa de competencias jurídicas profesionales
Define el mapa de competencias del abogado o profesional legal competente, organizado en cinco grupos: competencias de análisis jurídico (identificar el problema jurídico relevante, localizar y aplicar la norma aplicable, interpretar la jurisprudencia relevante, resolver conflictos normativos), competencias de redacción legal (redactar contratos, escritos procesales, dictámenes e informes con claridad, precisión y eficacia), competencias de argumentación y oratoria (construir argumentos jurídicos sólidos, rebatir argumentos contrarios, presentar posiciones oralmente), competencias de negociación y resolución alternativa de conflictos (analizar la zona de acuerdo posible, usar técnicas de negociación basada en intereses, redactar acuerdos y transacciones), y competencias de ética y deontología profesional (identificar dilemas éticos en la práctica legal, actuar conforme al código deontológico del Colegio de Abogados).

2. Sistema de evaluación basada en casos prácticos (case method)
Diseña el sistema de evaluación basado en casos jurídicos prácticos: cómo construir un caso jurídico pedagógico eficaz (estructura del caso: hechos, documentación aportada, cuestiones jurídicas a resolver y materiales de referencia), cómo graduar la complejidad de los casos a lo largo del programa (de casos lineales con una sola cuestión jurídica a casos complejos con múltiples partes, conflictos normativos y dilemas éticos), cómo estructurar la sesión de debate del caso en el aula (presentación oral de las posiciones, debate socrático, síntesis del instructor), y cómo evaluar la actuación del participante en la sesión de caso con una rúbrica específica de análisis y argumentación jurídica.

3. Rúbricas de evaluación de competencias jurídicas
Crea rúbricas analíticas detalladas para evaluar tres competencias jurídicas clave: rúbrica para evaluar un dictamen o informe jurídico escrito (criterios: identificación correcta del problema jurídico, calidad del análisis normativo y jurisprudencial, estructura y claridad del texto, solidez de la conclusión y recomendación, y formato y presentación profesional), rúbrica para evaluar una actuación oral en un juicio simulado o una negociación (criterios: preparación y dominio del caso, calidad de la argumentación, manejo de preguntas y objeciones, comunicación no verbal y presencia profesional, y ética en la actuación), y rúbrica para evaluar un contrato redactado por el participante (criterios: cobertura de los elementos esenciales del contrato, precisión del lenguaje jurídico, identificación y gestión de los riesgos de cada parte, y legibilidad y estructura del documento).

4. Juicios simulados y negociaciones como herramienta de evaluación
Define la metodología para usar los juicios simulados (moot court) y las negociaciones simuladas como herramientas de evaluación formativa y sumativa: cómo asignar los roles (abogado de la parte actora, abogado de la parte demandada, juez o árbitro, clientes) y rotarlos para que cada participante experimente distintas perspectivas, cómo facilitar el juicio o la negociación para que sea pedagógicamente productivo (el instructor como observador evaluador, no como participante), protocolo de debriefing post-simulación (30 minutos: autoevaluación de cada participante, feedback entre pares con la rúbrica, síntesis del instructor), y cómo grabar las simulaciones para el portfolio de aprendizaje del participante.

5. Feedback formativo en la formación jurídica
Define el sistema de feedback formativo específico para la formación legal: cómo dar feedback sobre un error de análisis jurídico (la norma aplicada es incorrecta o la interpretación es errónea) de forma que el participante comprenda el razonamiento correcto y no solo la respuesta, cómo dar feedback sobre redacción legal deficiente (ambigüedad, falta de precisión técnica, estructura confusa) usando la técnica de reescritura comentada (el instructor muestra cómo mejoraría el texto y explica por qué), cómo modelar el razonamiento jurídico en voz alta para que los participantes interioricen el proceso de pensamiento experto, y cómo usar la evaluación entre pares en la formación jurídica (con precauciones sobre la confidencialidad de los casos).

6. Evaluación de la ética y la deontología profesional
Diseña el sistema de evaluación de las competencias éticas en la formación jurídica: casos de dilema ético para debatir en grupo (el abogado descubre que su cliente le ha mentido, el abogado recibe información privilegiada de la parte contraria, el abogado enfrenta un conflicto de intereses no revelado), rúbrica para evaluar la calidad del razonamiento ético del participante (no el resultado de la decisión sino la calidad del proceso de deliberación: identifica las partes en conflicto, aplica los principios deontológicos relevantes, considera las consecuencias para todas las partes), y cómo integrar la formación en ética a lo largo de todo el programa (no solo como un módulo separado) mediante la presencia de dilemas éticos en todos los casos prácticos.

Formato de respuesta: Usa tablas para las rúbricas de evaluación con sus criterios y niveles de desempeño, listas para los protocolos de simulación y feedback, y texto narrativo para los casos jurídicos pedagógicos de ejemplo. El tono debe ser propio de un docente universitario de derecho con orientación práctica.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Evaluar competencias jurídicas prácticas con casos, rúbricas y feedback formativo en programas de formación legal',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Evaluación de la calidad del soporte y feedback formativo en CS con IA',
                'description'       => 'Diseña sistemas de evaluación de la calidad de las interacciones de atención al cliente, rúbricas de conversación y programas de feedback formativo para equipos de Customer Support.',
                'prompt_content'    => <<<'EOT'
Actúa como un director o directora de Calidad y Formación en Customer Support (CS) con experiencia en el diseño de sistemas de evaluación de la calidad de las interacciones de atención al cliente, la creación de rúbricas de conversación y la implementación de programas de coaching y feedback formativo para agentes de soporte.

Objetivo principal: Necesito diseñar un sistema integral de evaluación de la calidad del soporte y feedback formativo para un equipo de Customer Support que mejore de forma consistente la satisfacción del cliente, la resolución de problemas y el desarrollo profesional de los agentes.

Contexto del equipo de CS:
- Canales de soporte gestionados: [Email / Chat en vivo / Teléfono / Redes sociales / Todos]
- Tamaño del equipo: [NÚMERO DE AGENTES]
- Sector y tipo de producto o servicio soportado: [SECTOR]
- Herramientas utilizadas: [Zendesk / Freshdesk / Intercom / Salesforce Service Cloud / Otro]
- Principales retos actuales: [BAJA CSAT / TIEMPOS DE RESOLUCIÓN ALTOS / INCONSISTENCIA ENTRE AGENTES / ESCALADAS FRECUENTES]
- Nivel de experiencia del equipo: [Junior / Mixto / Senior]

Tareas que necesito que desarrolles:

1. Framework de calidad para evaluación de interacciones de soporte
Define el framework de calidad para evaluar las interacciones del equipo de Customer Support, diferenciando entre criterios de calidad mínimos (cuyo incumplimiento implica evaluación negativa independientemente del resto) y criterios de excelencia (que distinguen al agente competente del agente excepcional). Los criterios deben cubrir: comprensión del problema del cliente (escucha activa, paráfrasis de confirmación, preguntas de clarificación), comunicación (tono empático pero profesional, claridad de la explicación, lenguaje adecuado al nivel de conocimiento del cliente), resolución del problema (eficacia de la solución, primer contacto vs. escalada, seguimiento de procedimientos internos), velocidad y eficiencia (tiempo de respuesta, duración de la interacción, multitarea en chat), y cierre de la interacción (verificación de la satisfacción del cliente, oferta de ayuda adicional, resumen de lo acordado).

2. Rúbrica de evaluación de conversaciones de soporte por canal
Crea rúbricas analíticas diferenciadas para evaluar interacciones en los tres canales principales: rúbrica para email de soporte (criterios: tiempo de primera respuesta, comprensión correcta de la solicitud, solución completa y precisa, tono y estilo de escritura, formato y estructura del email, seguimiento si se prometió), rúbrica para chat en vivo (criterios: tiempo de primera respuesta en segundos, ritmo de la conversación sin silencios incómodos, capacidad de gestionar múltiples chats simultáneamente, calidad de la solución en tiempo real, cierre correcto), y rúbrica para llamada telefónica (criterios: saludo y verificación de identidad, escucha activa y tiempo de silencio apropiado, calidad de la solución verbal, tono de voz y ritmo del habla, cierre profesional de la llamada).

3. Proceso de calibración de calidad entre evaluadores
Define el proceso de calibración del equipo de Quality Assurance (QA) para garantizar que todos los evaluadores aplican los criterios de la rúbrica de forma consistente: frecuencia y formato de las sesiones de calibración (sesión quincenal de 60 minutos: revisión de 3-5 interacciones en conjunto, discusión de las diferencias de valoración y consenso), protocolo para resolver desacuerdos en la evaluación (quién tiene la última palabra, cómo documentar el criterio acordado para casos similares futuros), cómo mantener actualizado el libro de calibración con casos de referencia de cada nivel de desempeño, y cómo medir el índice de consistencia entre evaluadores (Cohen's Kappa o equivalente) y cuándo actuar si baja del umbral aceptable.

4. Sistema de coaching y feedback formativo para agentes
Diseña el sistema de coaching individual para los agentes de soporte: frecuencia y formato de las sesiones de coaching (sesión quincenal de 20-30 minutos, agenda co-creada, enfocada en 1-2 áreas de mejora concretas), cómo seleccionar la interacción a revisar en cada sesión (1 interacción buena y 1 interacción mejorable: el sandwich no, sino revisión honesta y equilibrada), protocolo de feedback usando el modelo STAR (Situación, Tarea, Acción, Resultado) adaptado al contexto de CS, cómo convertir el feedback en acciones de práctica concretas para la siguiente semana (roleplay de situación específica, revisión de procedimiento concreto, práctica de plantilla de respuesta), y cómo hacer seguimiento de los compromisos de mejora sin que parezca control.

5. Seguimiento del progreso individual y del equipo
Define el sistema de seguimiento del desarrollo de calidad de los agentes: scorecard individual mensual (métricas de calidad de QA, CSAT, FCR, AHT y evolución respecto al mes anterior), visualización del progreso por competencia a lo largo del tiempo (radar de competencias de la rúbrica, actualizado mensualmente), identificación de patrones de error recurrentes del agente y del equipo (para diseñar formación colectiva dirigida), plan de desarrollo individual con objetivos de mejora trimestrales, y reunión de revisión trimestral para actualizar el plan de desarrollo y reconocer los avances conseguidos.

6. Métricas de calidad y efectividad del programa de evaluación
Define el cuadro de mando del programa de calidad en Customer Support: métricas de calidad de las interacciones (puntuación QA promedio del equipo por canal y por agente, tasa de interacciones con puntuación por debajo del umbral mínimo, evolución de la puntuación QA por agente en los últimos 6 meses), métricas de impacto en la satisfacción del cliente (CSAT por canal, correlación entre puntuación QA y CSAT, NPS de la experiencia de soporte), métricas de eficiencia (FCR, AHT, tasa de escalada y reaperturas), y métricas de desarrollo del equipo (porcentaje del equipo con plan de desarrollo activo, tasa de completación de formaciones asignadas tras el coaching, evolución de la brecha de calidad entre agentes del mismo nivel).

Formato de respuesta: Usa tablas para las rúbricas de evaluación por canal y el cuadro de mando, listas para los protocolos de calibración y coaching, y ejemplos de conversaciones reales (ficticias) bien y mal evaluadas para ilustrar cada criterio de la rúbrica.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar sistemas de evaluación de calidad y feedback formativo para equipos de Customer Support',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Autoevaluación y feedback formativo para freelancers con IA',
                'description'       => 'Diseña tu propio sistema de autoevaluación profesional, rúbricas de proyecto y mecanismos de feedback de clientes que aceleren tu desarrollo como freelance independiente.',
                'prompt_content'    => <<<'EOT'
Actúa como un mentor de desarrollo profesional especializado en ayudar a freelancers independientes a construir sistemas de autoevaluación, obtener feedback valioso de sus clientes y acelerar su crecimiento profesional sin depender de la estructura formal de revisión de desempeño que tiene quien trabaja en una empresa.

Objetivo principal: Necesito diseñar un sistema completo de autoevaluación profesional y feedback externo para mi carrera como freelance, que me permita identificar mis puntos fuertes y débiles de forma objetiva, mejorar continuamente la calidad de mi trabajo y construir una reputación sólida basada en resultados medibles.

Contexto profesional freelance:
- Especialidad o servicio principal: [SERVICIO]
- Años de experiencia como freelance: [AÑOS]
- Tipos de clientes más frecuentes: [PERFIL DE CLIENTES]
- Tamaño y duración típica de los proyectos: [DESCRIPCIÓN]
- Principal reto actual en tu desarrollo profesional: [RETO]
- Objetivo de desarrollo en los próximos 12 meses: [OBJETIVO]

Tareas que necesito que desarrolles:

1. Mapa de competencias del freelance de alto rendimiento
Define el mapa de competencias que necesito desarrollar como freelance independiente de alto rendimiento en mi especialidad. Organiza las competencias en cuatro grupos: competencias técnicas o de ejecución (las habilidades específicas de mi servicio que los clientes pagan), competencias de gestión de proyectos (planificación, comunicación de avances, gestión del alcance, entrega a tiempo y a presupuesto), competencias comerciales y de marketing personal (captación de clientes, propuestas, negociación de tarifas, gestión de la relación con el cliente), y competencias de desarrollo profesional (aprendizaje continuo, red de contactos, posicionamiento como experto, transición hacia servicios de mayor valor). Para cada competencia, define indicadores concretos y observables de dominio en tres niveles: en desarrollo, competente y experto.

2. Sistema de autoevaluación por proyecto
Diseña el formulario de autoevaluación que completaré al finalizar cada proyecto como freelance. El formulario debe incluir: evaluación de la calidad técnica del trabajo entregado (rúbrica de 5 criterios específicos de mi especialidad con escala del 1 al 5), evaluación de la gestión del proyecto (cumplimiento del plazo, gestión del alcance, comunicación con el cliente, manejo de imprevistos), evaluación de la relación con el cliente (satisfacción percibida del cliente, gestión de expectativas, posibilidad de volver a trabajar juntos), reflexión sobre el aprendizaje del proyecto (qué aprendí, qué haría diferente y qué nueva competencia desarrollé), y planificación de la mejora (una acción concreta de mejora para el siguiente proyecto basada en esta autoevaluación).

3. Sistema de obtención de feedback de clientes
Define el proceso para obtener feedback valioso y honesto de los clientes después de cada proyecto: cuándo y cómo pedir el feedback (momento óptimo: justo después de la entrega del proyecto final, antes de enviar la factura final), formato de la solicitud de feedback (email breve, formulario de 5 preguntas, llamada de cierre de 15 minutos), las 5 preguntas más importantes que hacer al cliente (que vayan más allá del "¿estás contento?" para obtener información accionable sobre qué mejorar), cómo manejar el feedback negativo o las críticas (cómo agradecer la honestidad, cómo no ponerse a la defensiva y cómo convertir una crítica en una mejora concreta), y cómo usar el feedback positivo para construir tu reputación (solicitar testimonio, caso de éxito o referido).

4. Rúbrica de calidad de los entregables de tu servicio
Crea una rúbrica analítica de 6 criterios para evaluar la calidad de los entregables de tu servicio principal como freelance. La rúbrica debe definir cuatro niveles de calidad para cada criterio (insuficiente, aceptable, bueno y excelente) con descripciones específicas y ejemplos concretos de qué implica cada nivel en tu trabajo real. Los criterios deben cubrir las dimensiones más importantes de la calidad de tu entrega: resultado o impacto para el cliente, calidad técnica o artesanal, adecuación al briefing y a las necesidades del cliente, presentación y documentación del trabajo, originalidad o diferenciación respecto a soluciones estándar, y cumplimiento del plazo y el presupuesto acordados.

5. Plan de desarrollo profesional anual como freelance
Diseña el proceso de planificación de tu desarrollo profesional para el próximo año: revisión anual de cierre (cómo revisar los 12 meses: proyectos realizados, clientes ganados y perdidos, ingresos vs. objetivo, horas trabajadas vs. descansadas, competencias desarrolladas y no desarrolladas), identificación de las dos o tres competencias prioritarias en las que invertir el próximo año (basado en la autoevaluación, el feedback de clientes y las oportunidades del mercado), diseño del plan de formación y desarrollo (qué aprenderé, cómo lo aprenderé, cuándo y cuánto tiempo y dinero invertiré), definición de los objetivos anuales de negocio y de desarrollo con indicadores medibles, y cómo hacer seguimiento trimestral del plan sin que se convierta en burocracia.

6. Portfolio de evidencias del crecimiento profesional
Define cómo construir y mantener un portfolio de evidencias de tu crecimiento profesional como freelance: qué incluir en el portfolio (trabajos seleccionados con el briefing y el resultado obtenido, testimonios de clientes con nombre y empresa, métricas de impacto de los proyectos si las tienes, casos de estudio de proyectos complejos, formaciones y certificaciones completadas), cómo presentar el portfolio para distintas audiencias (clientes potenciales nuevos, clientes que quieren hacer upsell, inversores si aplica, plataformas freelance), cómo actualizar el portfolio de forma sistemática sin que sea una tarea que siempre pospongas (rutina mensual de 30 minutos: añadir el mejor proyecto del mes, actualizar las métricas, pedir el testimonio pendiente), y cómo usar el portfolio como herramienta de autoevaluación del crecimiento a largo plazo.

Formato de respuesta: Usa tablas para el mapa de competencias y la rúbrica de calidad de entregables, listas para el formulario de autoevaluación y el proceso de obtención de feedback, y texto narrativo con ejemplos concretos para el plan de desarrollo anual. El tono debe ser práctico, motivador y orientado al freelance que trabaja solo y necesita ser su propio manager y su propio evaluador.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Construir sistemas de autoevaluación y feedback formativo para el desarrollo profesional continuo como freelance',
                'vote_score'        => 43,
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
