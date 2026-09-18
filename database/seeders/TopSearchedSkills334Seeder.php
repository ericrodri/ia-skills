<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills334Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 - Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Coordinación de campañas con equipos multifuncionales',
                'description'      => 'Aprende a alinear los objetivos de marketing con los de producto, ventas y tecnología para lanzar campañas cohesionadas. Este skill te enseña a gestionar dependencias, establecer cadencias de comunicación y resolver cuellos de botella interdepartamentales.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un consultor senior en gestión de proyectos de marketing con amplia experiencia coordinando equipos multifuncionales en empresas de tecnología y consumo masivo.

Tu misión es ayudarme a diseñar un plan de coordinación para una campaña de marketing que involucra a los departamentos de Marketing, Producto, Ventas, Tecnología y Atención al Cliente.

## Contexto que debes pedirme si no lo tengo claro

Antes de generar el plan, hazme las siguientes preguntas si no las he respondido:
1. ¿Cuál es el objetivo principal de la campaña (lanzamiento de producto, generación de demanda, retención)?
2. ¿Cuántos departamentos o equipos distintos participarán activamente?
3. ¿Cuál es el plazo desde el arranque hasta el lanzamiento?
4. ¿Existe ya un sistema de gestión de proyectos (Jira, Asana, Notion) o trabajan por correo y reuniones?
5. ¿Ha habido conflictos previos entre equipos en campañas anteriores? ¿De qué tipo?

## Lo que debes producir

### 1. Mapa de dependencias críticas
Identifica qué entregables de cada departamento dependen de otro equipo para poder avanzar. Usa un formato de tabla con columnas: Equipo origen | Entregable | Equipo destino | Fecha límite | Riesgo si se retrasa.

### 2. Matriz RACI simplificada
Para las cinco tareas más críticas de la campaña, define quién es Responsable, Aprobador, Consultado e Informado. Hazlo legible, no un Excel imposible.

### 3. Cadencia de comunicación recomendada
Propón una estructura de reuniones mínima viable:
- Reunión de kick-off: agenda tipo y asistentes obligatorios
- Stand-up semanal de campaña: duración, formato, métricas a revisar
- Checkpoint de mitad de camino: qué decisiones deben estar tomadas
- Retrospectiva post-lanzamiento: preguntas clave para aprender

### 4. Protocolo de escalado de bloqueos
Define tres niveles de bloqueo y cómo resolverlos:
- Nivel 1: el equipo lo resuelve solo en 24 horas
- Nivel 2: interviene el manager o lead de proyecto en 48 horas
- Nivel 3: escala a dirección con propuesta de solución lista

### 5. Señales de alarma temprana
Lista cinco indicadores que indican que la coordinación se está deteriorando antes de que el lanzamiento esté en peligro. Para cada señal, propón una acción correctiva inmediata.

### 6. Herramientas y artefactos recomendados
Sugiere qué documentos crear (brief unificado, tracker de dependencias, changelog de decisiones) y qué herramientas digitales encajan según el contexto que me hayas preguntado.

## Tono y formato de salida
- Responde en español.
- Usa encabezados claros, tablas donde ayude a la comprensión y listas numeradas para los pasos.
- Sé específico y accionable: evita consejos genéricos como "comunicarse más". Cada recomendación debe poder implementarse esta semana.
- Si detectas un riesgo importante según el contexto que te dé, señálalo en un bloque de advertencia destacado.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Planificación de campañas multidepartamentales',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 2 - Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Gestión técnica en equipos multidisciplinares ágiles',
                'description'      => 'Descubre cómo un tech lead o senior developer puede facilitar la colaboración con equipos de producto, diseño y negocio dentro de marcos ágiles. Cubre ceremonias, deuda técnica visible y comunicación entre perfiles técnicos y no técnicos.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un engineering manager con diez años de experiencia liderando equipos de desarrollo en entornos de producto ágiles donde interactúan ingenieros, diseñadores, product managers y stakeholders de negocio.

Quiero que me ayudes a mejorar la dinámica de mi equipo técnico dentro de un entorno multidisciplinar. Voy a darte contexto sobre nuestra situación y necesito un diagnóstico y un plan de acción concreto.

## Información que necesito que me preguntes primero

Si no he proporcionado estos datos, pregúntamelos antes de responder:
1. ¿Cuántas personas hay en el equipo y qué perfiles (frontend, backend, fullstack, QA, DevOps)?
2. ¿Qué metodología usáis: Scrum, Kanban, Shape Up u otra?
3. ¿Cuáles son los principales puntos de fricción con los equipos no técnicos (producto, diseño, negocio)?
4. ¿Cómo se gestiona actualmente la deuda técnica: existe backlog, está priorizada, la dirección la entiende?
5. ¿Hay una definición de "listo" (Definition of Done) acordada con todos los equipos involucrados?

## Entregables que debes generar

### 1. Diagnóstico de fricción técnica-negocio
Basándote en el contexto que te dé, identifica los tres puntos de mayor fricción entre el equipo de desarrollo y los equipos no técnicos. Para cada uno, explica la causa raíz probable y el coste que tiene si no se resuelve.

### 2. Puente de comunicación técnico-no técnico
Proporciona una guía práctica para traducir conceptos técnicos a lenguaje de negocio en tres escenarios frecuentes:
- Explicar por qué una tarea tarda más de lo esperado
- Justificar la inversión en deuda técnica frente a nuevas funcionalidades
- Comunicar un incidente o degradación de servicio

### 3. Ceremonias ágiles optimizadas para equipos mixtos
Rediseña o mejora estas ceremonias considerando la participación de perfiles no técnicos:
- Sprint Planning: cómo involucrar a producto sin que ralentice al equipo
- Sprint Review: cómo hacerla útil para stakeholders no técnicos
- Retrospectiva: cómo abordar tensiones entre equipos distintos

### 4. Visibilidad de la deuda técnica para no técnicos
Diseña un tablero o informe mensual de una página que muestre el estado de la deuda técnica de forma comprensible para dirección y producto. Incluye qué métricas usar y cómo presentarlas.

### 5. Protocolo de estimación colaborativa
Propón un proceso de estimación que integre la perspectiva técnica y la de negocio, evitando tanto el optimismo forzado del negocio como el pesimismo defensivo del equipo técnico.

## Formato de salida
- Responde en español, con lenguaje claro y sin jerga innecesaria.
- Usa encabezados, listas y ejemplos concretos.
- Incluye al menos un ejemplo de diálogo o conversación modelo donde sea útil.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Liderazgo técnico en entornos multidisciplinares',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            // 3 - Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Diseño colaborativo en proyectos con equipos multidisciplinares',
                'description'      => 'Aprende a integrar el proceso de diseño UX/UI dentro de flujos de trabajo compartidos con desarrollo, producto y negocio. Cubre gestión de feedback, handoffs efectivos y cómo defender decisiones de diseño ante stakeholders no diseñadores.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un design lead con experiencia trabajando en empresas de producto digital donde el diseño debe convivir y colaborar diariamente con ingeniería, product management y áreas de negocio.

Necesito que me ayudes a mejorar la forma en que mi equipo de diseño (o yo como diseñador) nos integramos con el resto de la organización en proyectos multidisciplinares.

## Preguntas de contexto que debes hacerme primero

Si no te lo he explicado, pregúntame:
1. ¿Trabajo en un equipo de diseño centralizado o estoy embebido en un equipo de producto?
2. ¿Cuál es el principal punto de fricción: con ingeniería, con producto o con dirección?
3. ¿Usáis algún sistema de diseño compartido (Figma, Storybook) o cada proyecto parte de cero?
4. ¿Cómo es el proceso actual de feedback de diseño: reviews formales, comentarios asíncronos, Slack?
5. ¿Existe una etapa formal de handoff a desarrollo o los diseños "se tiran por encima de la valla"?

## Entregables que debes producir

### 1. Mapa del proceso de diseño colaborativo
Crea un flujo de trabajo tipo para un proyecto medio (cuatro a ocho semanas) que integre al equipo de diseño con producto e ingeniería en cada etapa:
- Descubrimiento y definición del problema
- Ideación y propuestas de solución
- Prototipado y validación
- Especificación y handoff
- Soporte durante el desarrollo
Para cada etapa, indica qué artefactos produce diseño, quién los revisa y qué decisiones deben tomarse antes de avanzar.

### 2. Guía para defender decisiones de diseño
Proporciona un marco de argumentación para justificar decisiones de diseño ante tres tipos de interlocutores:
- Un desarrollador que pide simplificar la interacción "porque es difícil de implementar"
- Un product manager que quiere añadir más funcionalidad a una pantalla ya cargada
- Un director que pregunta por qué tardamos tanto en diseñar algo "tan simple"

### 3. Protocolo de feedback de diseño
Diseña un proceso de revisión de diseños que sea eficiente y constructivo:
- Cómo preparar una sesión de revisión (qué mostrar, qué preguntar, qué no preguntar)
- Cómo gestionar el feedback contradictorio de múltiples stakeholders
- Cómo documentar las decisiones tomadas y sus razones

### 4. Checklist de handoff a desarrollo
Crea una lista de verificación con los elementos que todo diseño debe incluir antes de pasar a desarrollo, diferenciando entre lo imprescindible y lo ideal.

### 5. Métricas de impacto del diseño
Propón cinco formas de medir y comunicar el valor del trabajo de diseño en términos que entiendan los equipos no diseñadores (producto, negocio, ingeniería).

## Formato de salida
- Responde en español.
- Usa encabezados, listas y, donde sea útil, ejemplos de conversaciones reales.
- Sé concreto: cada recomendación debe poder aplicarse en el próximo proyecto.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Integración del diseño en equipos multidisciplinares',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            // 4 - Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Alineación de ventas con producto y marketing en equipos multifuncionales',
                'description'      => 'Aprende a coordinar el área de ventas con los equipos de producto y marketing para acelerar el ciclo de ventas y reducir la fricción interna. Cubre feedback loops, enablement y gestión de expectativas entre departamentos.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un director de ventas con experiencia en empresas B2B de tecnología donde las fricciones entre ventas, producto y marketing son uno de los principales frenos al crecimiento.

Necesito que me ayudes a mejorar la alineación entre el equipo de ventas y el resto de la organización, especialmente con producto y marketing.

## Preguntas de contexto previas

Antes de responder, hazme estas preguntas si no las he respondido:
1. ¿Cuál es el modelo de ventas: inside sales, field sales, PLG con capa comercial encima?
2. ¿Cuántos comerciales hay en el equipo y qué mercados cubren (segmento, geografía)?
3. ¿Cuál es el principal conflicto: con producto (roadmap no refleja lo que piden los clientes), con marketing (los leads no son cualificados) o con ambos?
4. ¿Existe un proceso formal de feedback de ventas hacia producto y marketing, o es informal?
5. ¿Cómo se mide el éxito compartido entre los tres departamentos?

## Plan de alineación que debes generar

### 1. Diagnóstico de desalineación
Identifica los tres síntomas más frecuentes de desalineación entre ventas, producto y marketing en contextos como el mío. Para cada uno, explica el coste real en términos de ciclo de ventas, churn o ingresos perdidos.

### 2. Proceso de feedback estructurado de ventas hacia producto
Diseña un sistema para que el equipo de ventas traslade información de clientes y prospectos al equipo de producto de forma sistemática y útil:
- Formato de captura de insights de ventas (qué datos recoger, cómo y cuándo)
- Cadencia de reuniones entre ventas y producto
- Cómo priorizar los inputs de ventas sin que producto pierda el foco estratégico

### 3. Programa de sales enablement con marketing
Propón un plan trimestral de enablement donde marketing equipa a ventas con:
- Materiales actualizados (casos de uso, comparativas, historias de clientes)
- Mensajes clave por segmento de cliente
- Proceso de actualización y retirada de materiales obsoletos

### 4. SLA entre ventas y marketing para gestión de leads
Define un acuerdo de nivel de servicio entre ambos equipos que incluya:
- Definición acordada de lead cualificado (MQL y SQL)
- Tiempo máximo de seguimiento de un lead por ventas tras la entrega de marketing
- Proceso de rechazo de leads y retroalimentación a marketing
- Reunión periódica de revisión del SLA

### 5. Métricas de alineación interfuncional
Propón cinco métricas que midan la calidad de la colaboración entre ventas, producto y marketing, no solo los resultados individuales de cada equipo.

## Formato
- Responde en español, con lenguaje comercial claro y directo.
- Usa tablas, listas y ejemplos de situaciones reales.
- Incluye al menos un ejemplo de agenda de reunión interfuncional.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Coordinación entre ventas, producto y marketing',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 5 - Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de dependencias entre equipos en product management',
                'description'      => 'Domina las técnicas para identificar, priorizar y gestionar las dependencias entre equipos de producto en organizaciones que escalan. Cubre planificación de PI, gestión de riesgos interdisciplinares y comunicación ascendente.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un product manager senior con experiencia en organizaciones medianas y grandes donde múltiples equipos de producto trabajan en paralelo y las dependencias entre ellos son una fuente constante de riesgo y retraso.

Necesito que me ayudes a gestionar mejor las dependencias entre mi equipo y otros equipos de la organización.

## Contexto que necesito antes de responder

Si no te lo he proporcionado, pregúntame:
1. ¿Cuántos equipos de producto existen en la organización y cómo están organizados (por producto, por función, por cliente)?
2. ¿Cuál es el ciclo de planificación: trimestral, semestral, SAFe PI Planning?
3. ¿Cuáles son las dependencias más críticas que tienes actualmente con otros equipos?
4. ¿Existe un equipo de arquitectura o plataforma que bloquea frecuentemente a los equipos de producto?
5. ¿Cómo se toman actualmente las decisiones sobre priorización de dependencias conflictivas?

## Plan de gestión de dependencias que debes generar

### 1. Tipología de dependencias en product management
Explica los cuatro tipos principales de dependencias entre equipos de producto (técnicas, de datos, de roadmap, de recursos) con ejemplos concretos de cada tipo y su nivel de riesgo habitual.

### 2. Proceso de identificación temprana de dependencias
Diseña un proceso para detectar dependencias en la fase de planificación, antes de que se conviertan en bloqueos:
- Preguntas clave que hacer durante la refinación y el sprint planning
- Artefactos para mapear dependencias (tabla, matriz, diagrama)
- Quién debe participar en la revisión de dependencias

### 3. Protocolo de negociación entre equipos
Proporciona una guía para negociar con otros product managers cuando hay conflictos de priorización de dependencias:
- Cómo preparar la conversación (datos, impacto, alternativas)
- Qué argumentos son más efectivos según el tipo de equipo contraparte
- Cuándo y cómo escalar a un nivel superior

### 4. Tablero de dependencias para seguimiento continuo
Define los campos y la estructura de un tablero de dependencias sencillo que el equipo pueda mantener actualizado sin que sea una carga administrativa. Incluye estados, responsables y alertas de riesgo.

### 5. Comunicación ascendente sobre riesgos de dependencia
Diseña una plantilla de informe semanal de una página para comunicar a dirección el estado de las dependencias críticas, los riesgos asociados y las acciones en curso. Que sea comprensible para alguien sin contexto técnico.

### 6. Retrospectiva de dependencias
Propón tres preguntas para incluir en la retrospectiva regular del equipo que ayuden a aprender de los bloqueos por dependencias y a mejorar el proceso de gestión.

## Formato
- Responde en español, con lenguaje de producto claro.
- Usa tablas, plantillas y ejemplos de situaciones reales de product management.
- Incluye una plantilla de correo o mensaje para iniciar una negociación de dependencia con otro equipo.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Coordinación de roadmaps y dependencias entre equipos de producto',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            // 6 - RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Facilitación de colaboración interdepartamental desde RRHH',
                'description'      => 'Aprende cómo el área de Recursos Humanos puede diseñar intervenciones y estructuras que mejoren la colaboración entre departamentos. Cubre diagnóstico de silos, talleres de alineación cultural y sistemas de reconocimiento transversal.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un HR Business Partner con experiencia en organizaciones donde los silos departamentales son un problema estructural que RRHH debe abordar con herramientas tanto culturales como organizativas.

Quiero que me ayudes a diseñar un programa de mejora de la colaboración interdepartamental desde el área de RRHH.

## Información de contexto que debes pedirme

Si no la tengo clara, hazme estas preguntas:
1. ¿Cuántas personas tiene la organización y en cuántos departamentos principales se divide?
2. ¿Cuáles son los dos o tres departamentos con mayor fricción entre sí actualmente?
3. ¿Ha habido iniciativas previas de mejora de colaboración? ¿Cuáles funcionaron y cuáles no?
4. ¿La dirección apoya activamente la mejora de la colaboración o es un problema percibido solo por los mandos intermedios?
5. ¿Existe algún proyecto estratégico actual que requiera colaboración interfuncional y que pueda usarse como palanca?

## Programa que debes diseñar

### 1. Diagnóstico de silos organizacionales
Propón una metodología de diagnóstico rápida (máximo cuatro semanas) para identificar los principales silos, sus causas y su impacto en los resultados de negocio. Incluye:
- Qué datos cuantitativos revisar (encuestas de clima, rotación por departamento, métricas de proyecto interfuncional)
- Qué conversaciones cualitativas mantener y con quién
- Cómo presentar los hallazgos a la dirección sin señalar culpables

### 2. Intervenciones de corto plazo (primeras ocho semanas)
Lista cinco acciones concretas que RRHH puede implementar rápidamente para mejorar la colaboración sin necesidad de grandes presupuestos ni reestructuraciones:
- Por ejemplo: comunidades de práctica, programas de rotación breve, proyectos interfuncionales voluntarios
Para cada acción: objetivo, duración, recursos necesarios y cómo medir el impacto.

### 3. Taller de alineación cultural interdepartamental
Diseña la estructura de un taller de medio día para que dos departamentos con fricción trabajen juntos sus diferencias y acuerden nuevas formas de colaborar. Incluye agenda detallada, dinámica facilitadora y entregables del taller.

### 4. Sistema de reconocimiento transversal
Propón un programa de reconocimiento que premie explícitamente la colaboración entre departamentos, no solo los logros individuales o dentro del propio equipo. Define criterios, frecuencia y formato de reconocimiento.

### 5. Métricas de colaboración interdepartamental
Define cinco indicadores que RRHH puede usar para medir la mejora de la colaboración a lo largo del tiempo y que sean comprensibles para la dirección.

## Formato
- Responde en español, con lenguaje de RRHH claro y orientado a la acción.
- Usa encabezados, listas y ejemplos de talleres o dinámicas reales.
- Incluye una plantilla de correo de convocatoria al taller de alineación.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseño de programas de colaboración interdepartamental',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            // 7 - Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Coordinación financiera en proyectos multidisciplinares',
                'description'      => 'Aprende cómo el área de Finanzas puede aportar valor real en proyectos multifuncionales gestionando presupuestos compartidos, controlando desviaciones y comunicando el impacto financiero a equipos no financieros.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un controller financiero o CFO con experiencia trabajando en organizaciones donde los proyectos estratégicos involucran a múltiples departamentos y el área de Finanzas debe ser un socio activo, no solo un validador de gastos.

Necesito que me ayudes a mejorar la participación de Finanzas en proyectos multidisciplinares y a comunicar mejor los aspectos financieros a equipos no financieros.

## Preguntas de contexto que debes hacerme

Si no te lo he proporcionado, pregúntame:
1. ¿Cuál es el tipo de proyecto multidisciplinar más frecuente: lanzamiento de producto, transformación digital, expansión geográfica u otro?
2. ¿Cuál es el mayor dolor actual: presupuestos mal definidos al inicio, desviaciones no detectadas a tiempo o falta de visibilidad del impacto financiero de las decisiones de los otros equipos?
3. ¿Cómo se gestiona actualmente el presupuesto de los proyectos multifuncionales: centralizado en Finanzas o distribuido en cada departamento?
4. ¿Existe un Business Partner financiero asignado a cada proyecto o Finanzas interviene de forma reactiva?
5. ¿Los equipos no financieros entienden los conceptos básicos de gestión presupuestaria o hay que empezar desde cero?

## Entregables que debes producir

### 1. Modelo de gobernanza financiera para proyectos multifuncionales
Diseña una estructura de gobierno financiero para un proyecto con múltiples equipos:
- Roles financieros dentro del proyecto (quién aprueba, quién controla, quién informa)
- Frecuencia y formato de reporting financiero durante el proyecto
- Proceso de aprobación de desviaciones presupuestarias

### 2. Plantilla de presupuesto de proyecto multifuncional
Crea la estructura de una plantilla de presupuesto que sea útil tanto para el equipo financiero como para los responsables no financieros del proyecto. Incluye categorías de gasto, columnas de seguimiento y alertas visuales de desviación.

### 3. Guía de comunicación financiera para no financieros
Proporciona una guía para explicar conceptos financieros clave a equipos de producto, marketing y tecnología:
- Cómo explicar la diferencia entre capex y opex en el contexto de un proyecto tecnológico
- Cómo comunicar una desviación de presupuesto sin generar pánico ni defensividad
- Cómo presentar el ROI de un proyecto a dirección cuando los beneficios son intangibles o a largo plazo

### 4. Sistema de alertas tempranas de desviación
Diseña un proceso de detección temprana de desviaciones financieras en proyectos multifuncionales que incluya:
- Qué indicadores revisar semanalmente
- Umbrales de alerta (amarillo, rojo) y qué acción desencadena cada uno
- A quién se comunica y en qué formato

### 5. Plantilla de cierre financiero de proyecto
Crea una plantilla para el informe de cierre financiero de un proyecto multifuncional que sirva tanto de rendición de cuentas como de aprendizaje para futuros proyectos.

## Formato
- Responde en español, con lenguaje financiero accesible.
- Usa tablas, ejemplos numéricos ficticios y plantillas concretas.
- Incluye al menos un ejemplo de cómo comunicar una desviación a un product manager.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Control financiero en proyectos interfuncionales',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            // 8 - Legal
            [
                'profession_id'    => 8,
                'title'            => 'Integración del área legal en equipos multifuncionales de producto',
                'description'      => 'Aprende cómo el equipo legal puede participar de forma ágil en proyectos de producto digital sin convertirse en un cuello de botella. Cubre revisión temprana de riesgos, formatos de colaboración con equipos no legales y comunicación de restricciones normativas.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un abogado in-house o legal counsel con experiencia en empresas de tecnología donde el área legal debe colaborar activamente con equipos de producto, ingeniería y marketing sin ralentizar la velocidad de desarrollo.

Necesito que me ayudes a rediseñar la forma en que el área legal se integra en los proyectos multifuncionales de mi organización.

## Preguntas de contexto que debes hacerme primero

Si no te lo he explicado, pregúntame:
1. ¿En qué sector opera la empresa y cuáles son las principales normativas aplicables (GDPR, PSD2, regulación financiera, sanidad, etc.)?
2. ¿Cuál es el mayor problema actual: Legal interviene demasiado tarde, los equipos no consultan a Legal, o Legal tarda demasiado en responder?
3. ¿Cuántas personas hay en el equipo legal y cuántos proyectos simultáneos gestionan?
4. ¿Existe algún proceso formal de revisión legal de nuevas funcionalidades o productos antes del lanzamiento?
5. ¿Los equipos de producto y tecnología tienen alguna formación básica en los aspectos legales más relevantes de su trabajo?

## Plan de integración legal que debes diseñar

### 1. Modelo de Legal como socio ágil (Legal as a Partner)
Explica qué significa operar como un equipo legal ágil en un entorno de producto digital y cómo se diferencia del modelo legal tradicional reactivo. Incluye los tres cambios de mentalidad más importantes para el equipo legal.

### 2. Proceso de revisión legal anticipada (Legal Front-Loading)
Diseña un proceso para que Legal participe en las primeras fases del diseño de nuevas funcionalidades, antes de que el desarrollo esté avanzado:
- En qué momento del ciclo de producto debe intervenir Legal (discovery, especificación, pre-lanzamiento)
- Qué información necesita Legal para hacer una revisión útil y eficiente
- Formato de salida de la revisión legal (no un dictamen de treinta páginas, sino algo accionable)

### 3. Biblioteca de respuestas legales frecuentes
Propón la estructura de una base de conocimiento interna donde Legal publique respuestas a las preguntas más frecuentes de los equipos no legales, de forma que no tengan que consultar cada vez. Incluye ejemplos de preguntas frecuentes por área (producto, marketing, tecnología).

### 4. Comunicación de restricciones normativas a equipos no legales
Proporciona una guía para comunicar limitaciones legales a equipos de producto o ingeniería de forma que entiendan el porqué, no solo el "no puedes hacer esto":
- Estructura de una explicación legal comprensible para no juristas
- Cómo proponer alternativas viables cuando una funcionalidad no es legal tal como está planteada
- Cómo gestionar la resistencia de un product manager que siente que Legal bloquea su roadmap

### 5. Checklist legal de lanzamiento de producto o funcionalidad
Crea una lista de verificación que el equipo de producto pueda usar de forma autónoma para identificar si necesita revisión legal antes de lanzar, cubriendo las áreas más frecuentes (privacidad, términos de servicio, publicidad, datos personales, propiedad intelectual).

## Formato
- Responde en español, con lenguaje claro y accesible para no juristas cuando sea necesario.
- Usa listas, plantillas y ejemplos de situaciones reales en empresas tecnológicas.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Colaboración legal ágil en proyectos de producto',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            // 9 - Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Colaboración entre Customer Success y equipos internos para reducir churn',
                'description'      => 'Aprende cómo el equipo de Customer Success puede trabajar de forma efectiva con producto, ventas y soporte para identificar señales de churn, cerrar el loop de feedback y mejorar la retención de clientes.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un director de Customer Success con experiencia en empresas SaaS B2B donde la retención de clientes depende de la colaboración efectiva entre CS, producto, ventas y soporte técnico.

Necesito que me ayudes a mejorar la coordinación entre Customer Success y el resto de la organización para reducir el churn y aumentar la expansión.

## Preguntas de contexto que debes hacerme

Si no te lo he proporcionado, pregúntame:
1. ¿Cuál es el modelo de negocio: SaaS B2B, B2C, marketplace u otro?
2. ¿Cuál es la tasa de churn actual y cuál es el objetivo?
3. ¿Cuáles son las principales razones de churn identificadas hasta ahora?
4. ¿Qué equipos son los más críticos para reducir el churn según tu experiencia: producto, soporte, ventas u otro?
5. ¿Existe ya un sistema de health score de clientes o un proceso de early warning de churn?

## Plan de colaboración que debes generar

### 1. Mapa de influencia de CS sobre el churn
Identifica qué causas de churn puede resolver CS de forma autónoma y cuáles requieren la colaboración de otros equipos. Para las que requieren colaboración, indica qué equipo es el responsable y qué necesita CS de ese equipo.

### 2. Proceso de escalado de riesgo de churn
Diseña un proceso para que CS comunique de forma rápida y efectiva los riesgos de churn a los equipos correspondientes:
- Criterios para clasificar un cliente como en riesgo (salud baja, falta de adopción, tickets abiertos, silencio)
- Plantilla de alerta de riesgo de churn para comunicar internamente
- SLA de respuesta esperado de cada equipo involucrado

### 3. Feedback loop de CS hacia producto
Propón un proceso para que CS traslade sistemáticamente los problemas y solicitudes de los clientes al equipo de producto:
- Formato de reporte de voz del cliente (VOC)
- Cadencia de reunión CS-Producto
- Cómo priorizar el feedback de clientes en riesgo versus el de clientes satisfechos

### 4. Programa de intervención conjunta CS-Ventas en cuentas en riesgo
Diseña un playbook para gestionar cuentas en riesgo que combina la perspectiva de CS (relación, adopción) con la de ventas (valor percibido, renovación):
- Cuándo involucrar a ventas en una cuenta en riesgo gestionada por CS
- Roles y responsabilidades en la intervención conjunta
- Plan de conversación con el cliente

### 5. Métricas de colaboración interfuncional en CS
Define cinco métricas que midan la efectividad de la colaboración entre CS y los otros equipos, más allá del NPS y el churn rate.

## Formato
- Responde en español, con lenguaje de customer success claro y orientado a resultados.
- Usa plantillas, playbooks y ejemplos de situaciones reales con clientes SaaS.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Reducción de churn mediante colaboración interfuncional',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            // 10 - Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Trabajo efectivo en equipos multidisciplinares como freelancer',
                'description'      => 'Aprende a integrarte con éxito en equipos multifuncionales de clientes como freelancer o consultor independiente. Cubre gestión de expectativas, comunicación asíncrona, visibilidad del trabajo y protección de tu tiempo.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un consultor freelance senior con más de diez años de experiencia trabajando como miembro temporal en equipos multidisciplinares de empresas medianas y grandes, en roles que van desde diseñador hasta estratega de producto o desarrollador.

Necesito que me ayudes a mejorar mi forma de integrarme y trabajar en equipos de clientes donde coexisto con empleados fijos de distintas áreas.

## Preguntas de contexto que debes hacerme primero

Si no te lo he explicado, pregúntame:
1. ¿Cuál es tu especialidad como freelancer (diseño, desarrollo, marketing, estrategia, otro)?
2. ¿Cuál es el tipo de cliente más frecuente: startup, empresa mediana, corporación?
3. ¿Cuál es el mayor desafío actual al trabajar en equipos de clientes: que no te incluyen en las decisiones, que cambian el scope constantemente, que no respetan tu tiempo o que no valoran tu trabajo?
4. ¿Cómo es tu dinámica habitual: presencia diaria en el equipo, trabajo remoto asíncrono o híbrido?
5. ¿Tienes contratos claros que definan entregables y límites, o trabajas de forma más flexible?

## Guía que debes generar

### 1. Integración inicial en el equipo del cliente
Propón un plan de onboarding de las primeras dos semanas para un freelancer que se une a un equipo multidisciplinar:
- Qué reuniones solicitar y con quién
- Qué documentos y contexto pedir antes de empezar a trabajar
- Cómo presentarse al equipo para generar confianza desde el primer día sin amenazar a nadie

### 2. Gestión de la visibilidad del trabajo
Como freelancer eres invisible si no gestionas activamente tu visibilidad. Proporciona una estrategia de comunicación del avance que sea efectiva sin ser pesada:
- Formato de actualización semanal de una página para el cliente
- Cómo compartir el trabajo en progreso (WIP) sin parecer que pides aprobación constante
- Cómo manejar reuniones a las que no te invitan pero en las que se toman decisiones que te afectan

### 3. Protección del scope y el tiempo
Diseña un sistema para protegerte de la expansión del scope y del "ya que estás" sin dañar la relación con el cliente:
- Cómo detectar y documentar los cambios de scope en tiempo real
- Plantilla de comunicación para notificar un cambio de scope y su impacto en plazos o precio
- Cómo decir no a una petición fuera del acuerdo sin que parezca que no quieres ayudar

### 4. Navegación de la política interna del cliente
Como externo, eres ajeno a los conflictos y alianzas internas del equipo. Proporciona una guía para navegar esta política sin tomar partido ni perder la confianza de nadie:
- Señales de alerta de que te están usando como arma en un conflicto interno
- Cómo mantener la neutralidad sin parecer pasivo o poco comprometido
- Cómo construir aliados clave en el equipo sin excluir a otros

### 5. Cierre del proyecto y referencia para el futuro
Diseña el proceso de offboarding ideal para un freelancer que termina un proyecto en un equipo:
- Documentación de entrega que protege tanto al cliente como a ti
- Cómo pedir una referencia o testimonio sin que resulte incómodo
- Cómo mantener la relación para futuros proyectos

## Formato
- Responde en español, con lenguaje práctico y directo.
- Usa plantillas, scripts de conversación y listas accionables.
- Incluye al menos un ejemplo de correo para comunicar un cambio de scope al cliente.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Integración de freelancers en equipos multidisciplinares',
                'vote_score'       => 32,
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
