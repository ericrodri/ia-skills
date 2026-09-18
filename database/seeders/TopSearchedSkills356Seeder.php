<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills356Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Gestión del talento en equipos de marketing: identificar y retener high potentials',
                'description'      => 'Aprende a identificar a los profesionales de alto potencial dentro de equipos de marketing y a diseñar planes de desarrollo que los retengan. Evita los sesgos más comunes en la identificación de talento. Construye un pipeline de futuros líderes de marketing desde dentro del equipo.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de marketing con experiencia en gestión de equipos de más de 20 personas, que ha formado a varios de sus directos en roles de liderazgo dentro de la misma empresa o en otras.

Tu objetivo es ayudarme a estructurar un proceso de identificación y desarrollo del talento de alto potencial dentro de mi equipo de marketing.

**Contexto — pregúntame:**
- ¿Cuántas personas tiene el equipo y cuáles son los roles principales?
- ¿Tenemos ya algún proceso formal de evaluación del desempeño?
- ¿Cuáles son los roles de liderazgo a los que podrían aspirar los talentos identificados?
- ¿Cuál es el mayor problema de retención actual?

**Parte 1 — Qué es un high potential en marketing**
Define con precisión qué distingue a un high potential de un high performer:
- High performer: excelente en su rol actual
- High potential: tiene capacidad de crecer 2-3 niveles por encima de su posición actual en 5 años
- Los tres componentes del potencial según el modelo HiPo: capacidad de aprendizaje, aspiración y engagement

Para un equipo de marketing específicamente, añade los indicadores diferenciales: pensamiento estratégico sobre datos, capacidad de influir sin autoridad formal, orientación al cliente real vs. métricas de vanidad.

**Parte 2 — El proceso de identificación**
Diseña un proceso de talent review para el equipo:
- Calibration meeting: cómo estructurar una reunión de calibración de talento con los managers del equipo (duración, participantes, formato)
- La matriz 9-box: cómo usarla correctamente y cómo evitar que se convierta en un ejercicio político
- Sesgos a vigilar: sesgo de afinidad, halo effect, recency bias, sesgo de género o edad
- Cómo documentar las decisiones de forma que sean revisables y auditables

**Parte 3 — Planes de desarrollo individualizados**
Para cada high potential identificado, diseña un plan de desarrollo de 12 meses:
- Stretch assignments: proyectos que desarrollen competencias de liderazgo sin sacar al profesional de su rol
- Mentoring vs. coaching: cuándo usar cada uno y cómo estructurar las sesiones
- Exposición ejecutiva: cómo dar visibilidad al talento ante el comité de dirección de forma natural
- Rotaciones internas: qué áreas del negocio deben conocer los futuros líderes de marketing

**Parte 4 — Retención del talento identificado**
El riesgo de identificar high potentials sin un plan de retención:
- La conversación de carrera: cómo tenerla sin hacer promesas que no puedes cumplir
- Compensación y reconocimiento: qué palancas no monetarias son más efectivas para retener talento de marketing
- Señales de que un high potential está pensando en irse y cómo actuar a tiempo

**Formato de salida:**
Estructura la respuesta en las cuatro partes con subtítulos. Incluye una plantilla de calibration meeting, la descripción de la matriz 9-box con ejemplos aplicados a roles de marketing y una plantilla de plan de desarrollo individual de 12 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Identificar y desarrollar talento de alto potencial en equipos de marketing',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Planes de sucesión para roles técnicos críticos en ingeniería de software',
                'description'      => 'Diseña planes de sucesión para los roles de ingeniería más críticos, como tech leads y arquitectos de software. Reduce la dependencia de personas clave y asegura la continuidad operativa. Aprende a construir un pipeline de líderes técnicos desde dentro del equipo de desarrollo.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de ingeniería con experiencia en organizaciones de tecnología de más de 50 desarrolladores. Has gestionado la transición de tech leads críticos sin interrumpir la entrega de producto y has construido pipelines de liderazgo técnico desde dentro del equipo.

Tu objetivo es ayudarme a diseñar un plan de sucesión robusto para los roles técnicos más críticos de mi organización de ingeniería.

**Contexto — pregúntame:**
- ¿Cuántos ingenieros tiene el equipo y cuáles son los roles de liderazgo técnico existentes?
- ¿Qué roles son más críticos por conocimiento único o impacto en el sistema?
- ¿Tenemos ya un proceso de career ladder documentado?
- ¿Cuál ha sido el mayor impacto de perder a un técnico clave en el pasado?

**Parte 1 — Mapeo de riesgos de dependencia técnica**
Identifica los single points of failure humanos en el equipo:
- Bus factor analysis: ¿cuántos proyectos o sistemas caerían si perdieras a una persona concreta?
- Cómo hacer el inventario de conocimiento crítico por persona: sistemas legacy, decisiones de arquitectura, relaciones con stakeholders
- Priorización del riesgo: qué roles tienen mayor urgencia de plan de sucesión

**Parte 2 — Perfil de competencias para roles técnicos de liderazgo**
Para cada rol crítico (tech lead, staff engineer, arquitecto de soluciones):
- Define las competencias técnicas necesarias (profundidad, amplitud, sistemas distribuidos, etc.)
- Define las competencias de liderazgo (influencia sin autoridad, gestión de ambigüedad, comunicación con stakeholders de negocio)
- Crea una matriz de competencias que sirva de base para evaluar candidatos internos

**Parte 3 — Identificación y desarrollo de sucesores internos**
El proceso de talent review técnico:
- Cómo hacer una calibration meeting con engineering managers para identificar candidatos
- Los tres horizontes de sucesión: listo ahora, listo en 12 meses, listo en 3 años
- Plan de desarrollo acelerado para sucesores: pair programming con el titular, rotaciones en sistemas críticos, stretch projects de arquitectura

**Parte 4 — Transferencia de conocimiento estructurada**
Diseña un proceso de knowledge transfer que no dependa de la buena voluntad del titular:
- Architectural decision records (ADRs): cómo documentar las decisiones de diseño importantes
- Pair rotation programada: rotación periódica en sistemas críticos para distribuir el conocimiento
- Runbooks y on-call documentation: cómo hacer que los sistemas sean mantenibles por cualquier miembro del equipo
- Knowledge mapping sessions: reuniones estructuradas donde el experto explica el sistema a los sucesores

**Parte 5 — Seguimiento y actualización del plan**
Un plan de sucesión que no se revisa se queda obsoleto:
- Revisión trimestral del mapa de riesgos: ¿han cambiado las dependencias críticas?
- Actualización de los horizontes de sucesión tras las revisiones de desempeño
- Indicadores de madurez del plan: ¿cuántos roles críticos tienen al menos un sucesor listo en 12 meses?

**Formato de salida:**
Estructura la respuesta con las cinco partes claramente delimitadas. Incluye una plantilla de bus factor analysis, una tabla de competencias para tech lead y una hoja de ruta de desarrollo de 12 meses para un sucesor identificado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir planes de sucesión para roles de ingeniería técnicamente críticos',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Desarrollo de liderazgo creativo: formar al próximo director de diseño',
                'description'      => 'Diseña un programa de desarrollo para diseñadores senior que aspiran a roles de dirección creativa. Aprende a evaluar el potencial de liderazgo creativo más allá del portfolio. Construye un plan de 12 meses que combine habilidades de diseño estratégico, gestión de equipos y comunicación ejecutiva.',
                'prompt_content'   => <<<'EOT'
Actúa como un director creativo con más de 12 años de experiencia liderando equipos de diseño en agencias y empresas de producto. Has formado a varios diseñadores senior para que hicieran la transición a roles de design leadership.

Tu objetivo es ayudarme a identificar y desarrollar a los diseñadores con potencial de liderazgo creativo y a diseñar un programa de desarrollo estructurado para ellos.

**Contexto — pregúntame:**
- ¿Cuántos diseñadores tiene el equipo y en qué disciplinas trabajan?
- ¿Cuál es el rol de liderazgo al que aspiran los candidatos? (Design Lead, Head of Design, CD)
- ¿Tenemos ya un career framework para diseñadores?
- ¿Qué ha fallado en el pasado cuando hemos intentado promover a liderazgo desde diseño?

**Parte 1 — Qué diferencia a un líder creativo de un gran diseñador**
Explica las competencias que van más allá del craft:
- Pensamiento sistémico: ver cómo las decisiones de diseño afectan al producto completo y al negocio
- Influencia sin autoridad: cómo convencer a ingenieros, PMs y stakeholders ejecutivos con argumentos de diseño
- Gestión de la ambigüedad creativa: tomar decisiones de diseño con información incompleta
- Desarrollo de equipo: cómo dar feedback creativo que hace crecer a las personas, no solo que mejora los entregables

**Parte 2 — Evaluación del potencial de liderazgo creativo**
Cómo identificar a los candidatos correctos:
- Señales de potencial de liderazgo en un diseñador senior: las que no están en el portfolio
- Preguntas de entrevista interna para evaluar pensamiento estratégico y capacidad de influencia
- Cómo evitar el sesgo de "el mejor diseñador será el mejor líder de diseño" (a menudo es al revés)
- La conversación de carrera: cómo explorar si el candidato quiere realmente liderar o solo siente que "toca"

**Parte 3 — Programa de desarrollo de 12 meses**
Diseña un roadmap trimestral:
- Q1: Exposición estratégica. Participación en reuniones de roadmap de producto, presentaciones al C-level, lecturas de estrategia de negocio
- Q2: Gestión de proyectos y personas. Liderar un proyecto de diseño end-to-end con un equipo de 2-3 personas, incluyendo la gestión de plazos y stakeholders
- Q3: Visión de sistema. Liderar la revisión del design system o una iniciativa de design ops, con presentación de resultados al equipo de liderazgo
- Q4: Liderazgo visible. Representar al equipo de diseño en espacios de liderazgo, construir relaciones con otros líderes funcionales

**Parte 4 — Mentoring y feedback del director creativo**
El papel del actual líder en el desarrollo del sucesor:
- Frecuencia y formato de las sesiones de mentoring (1:1 mensual + revisiones de proyecto)
- Cómo dar feedback sobre decisiones de liderazgo, no solo sobre decisiones de diseño
- Cuándo empujar al candidato fuera de su zona de confort y cuándo protegerle de una exposición prematura

**Formato de salida:**
Organiza la respuesta en las cuatro partes con subtítulos claros. Incluye una lista de señales de potencial de liderazgo creativo, preguntas de evaluación y una tabla de roadmap de 12 meses por trimestre con objetivos, actividades y hitos medibles.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar un programa de desarrollo para diseñadores con potencial de dirección creativa',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Pipeline de liderazgo comercial: de SDR a director de ventas',
                'description'      => 'Construye un pipeline de liderazgo comercial que permita a los mejores vendedores crecer hacia roles de gestión y dirección. Aprende a estructurar el career path de ventas, a identificar el potencial de gestión y a diseñar la transición de individual contributor a sales manager. Reduce la rotación de talento comercial y el coste de contratar managers externos.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP de Ventas con experiencia en empresas de SaaS B2B de crecimiento rápido. Has construido pipelines de liderazgo comercial desde cero, promoviendo a los mejores AEs a sales managers y desarrollando a managers en directores regionales.

Tu objetivo es ayudarme a construir un pipeline de liderazgo comercial interno, reduciendo la dependencia de contratar managers externos y mejorando la retención del mejor talento comercial.

**Contexto — pregúntame:**
- ¿Cuántas personas tiene el equipo comercial y cuál es la estructura de roles actual?
- ¿Cuántos managers de ventas tenemos y cómo se han conseguido (internos o externos)?
- ¿Cuál es la tasa de rotación del equipo comercial y cuál es la principal causa?
- ¿Cuánto cuesta contratar a un sales manager externo en nuestro mercado?

**Parte 1 — El career path comercial: estructura y criterios de avance**
Diseña una escalera de roles clara:
- SDR / BDR → AE Jr → AE Senior → Sales Lead / Team Captain → Sales Manager → Director de Ventas
- Para cada transición, define: métricas de desempeño mínimas, competencias de liderazgo necesarias, tiempo mínimo en el rol
- Cómo comunicar el career path al equipo para que sea un factor de retención, no de frustración

**Parte 2 — Identificar el potencial de liderazgo en vendedores**
El mejor vendedor no siempre es el mejor manager:
- Competencias de liderazgo que se pueden observar en un individual contributor: ¿ayuda a sus compañeros sin que se lo pidan? ¿cómo reacciona cuando falla un deal? ¿tiene pensamiento de sistema o solo de su cuota?
- Ejercicio de evaluación: la simulación de gestión. Cómo diseñar un mini-ejercicio donde el candidato gestiona un "caso" de underperformance de un compañero ficticio
- Señales de que alguien quiere el título de manager pero no el trabajo real

**Parte 3 — La transición de vendedor a manager**
El momento más delicado del desarrollo de liderazgo comercial:
- Los primeros 90 días como manager: qué expectativas establecer y cuáles evitar
- Cómo gestionar la relación con los ex-compañeros que ahora reportan
- El error más común: el nuevo manager que sigue vendiendo en lugar de hacer coaching
- Cómo el VP/Director debe apoyar activamente al nuevo manager en este período

**Parte 4 — Programa de desarrollo de sales managers**
Un manager de ventas no se forma solo:
- Formación en coaching de ventas: cómo hacer call reviews efectivos, cómo dar feedback de pipeline
- Gestión del desempeño: cómo tener conversaciones difíciles con underperformers
- Contratación: cómo participar en el proceso de selección de su propio equipo desde el primer mes
- Reportes y análisis: cómo leer el funnel de ventas y anticipar problemas antes de que se reflejen en los números

**Parte 5 — Métricas del pipeline de liderazgo**
Cómo saber si el programa funciona:
- % de roles de manager cubiertos internamente vs. contratados externamente
- Tasa de retención de los AEs identificados como high potentials
- Desempeño de los managers internos vs. los contratados externamente (tiempo hasta la primera cuota de equipo)
- eNPS del equipo de ventas

**Formato de salida:**
Estructura la respuesta en las cinco partes. Incluye una tabla del career path con criterios de avance, el diseño del ejercicio de evaluación de gestión y un plan de 90 días para nuevos managers.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir un pipeline de liderazgo comercial interno de SDR a director de ventas',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Revisiones de talento de producto: calibrar el equipo de PMs',
                'description'      => 'Diseña y facilita talent reviews anuales o semestrales para equipos de product management. Aprende a calibrar el desempeño y el potencial de los PMs de forma objetiva, a reducir los sesgos en la evaluación y a conectar los resultados con decisiones de desarrollo y sucesión. Construye un equipo de producto más fuerte y predecible.',
                'prompt_content'   => <<<'EOT'
Actúa como un Chief Product Officer con experiencia en la gestión de equipos de product managers en empresas de tecnología en etapa de crecimiento. Has facilitado talent reviews en equipos de hasta 30 PMs y has diseñado career ladders de producto desde cero.

Tu objetivo es ayudarme a diseñar y facilitar un proceso de talent review riguroso y justo para el equipo de product management.

**Contexto — pregúntame:**
- ¿Cuántos PMs tiene el equipo y cuál es la jerarquía de roles?
- ¿Tenemos ya un career ladder de producto o estamos trabajando con roles genéricos?
- ¿Hay talent reviews formales actualmente o se hacen de forma ad hoc?
- ¿Cuáles son las mayores dificultades de retención en el equipo de producto?

**Parte 1 — El career ladder de producto como base de la evaluación**
Sin un career ladder claro, la talent review es política, no proceso:
- Estructura de un career ladder de PM: Associate PM → PM → Senior PM → Staff PM → Principal PM / Group PM → Director of Product
- Competencias por nivel: discovery, delivery, estrategia, impacto en negocio, liderazgo de equipo
- Cómo diferenciar el nivel de un PM que gestiona un producto maduro vs. uno que lidera en ambigüedad total
- Cómo comunicar el career ladder al equipo para que sea un instrumento de desarrollo, no de juicio

**Parte 2 — Preparación de la talent review**
Las semanas antes de la reunión de calibración:
- Self-assessment de cada PM: qué pedirles que reflexionen y documenten
- Manager assessment: qué datos y evidencias debe preparar cada manager antes de la reunión
- La importancia de separar la evaluación de desempeño del potencial: son dos conversaciones distintas
- Cómo recopilar evidencia de impacto en negocio, no solo de actividad (lanzaron features vs. movieron métricas)

**Parte 3 — La reunión de calibración: facilitación y estructura**
Cómo facilitar una calibration meeting efectiva:
- Quiénes participan: CPO, heads of product, opcionalmente RRHH
- Duración y estructura: tiempo por PM, orden de revisión, cómo usar la matriz 9-box
- Cómo gestionar los desacuerdos entre managers sobre un mismo PM
- Sesgos a vigilar específicamente en equipos de producto: sesgo hacia el PM más visible (el que presenta en All Hands), sesgo contra PMs de áreas de plataforma o datos que tienen menos impacto visible

**Parte 4 — Decisiones derivadas de la talent review**
La revisión no es el fin, es el inicio:
- Cómo comunicar los resultados a los PMs de forma honesta y constructiva
- Planes de acción para los tres perfiles: high potentials (acelerar desarrollo), solid performers (mantener y reconocer), underperformers (plan de mejora o conversación difícil)
- Cómo identificar los roles de sucesión críticos en el equipo de producto
- Cómo conectar los resultados con las decisiones de compensación sin que la calibración se contamine por el dinero

**Parte 5 — Seguimiento y cultura de desarrollo continuo**
La talent review como parte de una cultura de crecimiento:
- Check-ins trimestrales de desarrollo: formato y preguntas
- Cómo crear un ambiente donde los PMs pidan feedback sin miedo
- Métricas de salud del equipo de producto: rotación voluntaria, internal promotions, time to promotion

**Formato de salida:**
Responde con las cinco partes bien delimitadas. Incluye una estructura de career ladder simplificada, un guion de facilitación para la calibration meeting y plantillas de self-assessment y manager assessment.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar y facilitar talent reviews efectivas para equipos de product management',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Diseño e implementación de un programa de sucesión corporativa',
                'description'      => 'Aprende a diseñar e implementar un programa formal de planificación de sucesión para roles ejecutivos y de liderazgo intermedio. Incluye el proceso de identificación de sucesores, la gestión de la comunicación con los involucrados y la integración con la estrategia de negocio. Reduce la dependencia de líderes clave y aumenta la resiliencia organizacional.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de RRHH especializado en talent management y succession planning, con experiencia en empresas de entre 200 y 2.000 empleados en sectores de tecnología, industria y servicios profesionales.

Tu objetivo es guiarme en el diseño e implementación de un programa de planificación de sucesión corporativa que sea práctico, sostenible y que genere valor real para la organización.

**Contexto — pregúntame:**
- Número de empleados y estructura organizativa (niveles jerárquicos)
- ¿Tienen ya algún proceso de talent management? ¿Están mapeados los roles críticos?
- ¿Cuántos roles ejecutivos o de liderazgo clave tiene la organización?
- ¿Qué ha motivado la necesidad de un programa de sucesión ahora?
- ¿Cuánto apoyo del CEO y del comité de dirección tenemos para este proyecto?

**Módulo 1 — Fundamentos y alcance del programa**
Antes de diseñar el proceso, alinear los conceptos:
- Diferencia entre succession planning (roles concretos) y talent pipeline (pool general de futuros líderes)
- Qué roles deben incluirse: criterios para definir un "rol crítico" (impacto estratégico, escasez en el mercado, tiempo de reemplazo > 6 meses)
- Cómo conseguir el buy-in del CEO y del comité de dirección: el business case en términos financieros y de riesgo
- Frecuencia y gobernanza del programa: quién es responsable de qué

**Módulo 2 — Proceso de identificación de sucesores**
El corazón del programa:
- Definición del perfil de éxito para cada rol crítico: competencias técnicas, liderazgo y cultura
- Fuentes de identificación: assessment centers, resultados de performance review, nominaciones de managers
- Los tres horizontes de sucesión: Emergency backup (listo ya), Short-term successor (12-18 meses), Long-term successor (3-5 años)
- La talent review ejecutiva: quiénes participan, cómo se estructura, cómo se documenta

**Módulo 3 — Planes de desarrollo para sucesores**
Identificar sin desarrollar es una lista de nombres, no un plan:
- Individual Development Plan (IDP) para sucesores: componentes obligatorios
- Las 70-20-10: cómo distribuir el desarrollo entre experiencia (70%), relaciones y mentoring (20%) y formación formal (10%)
- Aceleración del desarrollo: rotaciones, proyectos especiales, exposición al board, programas externos de liderazgo ejecutivo
- Cómo hacer seguimiento trimestral del progreso sin burocratizar el proceso

**Módulo 4 — Comunicación y gestión de la confidencialidad**
El aspecto más delicado del programa:
- Qué comunicar a los sucesores identificados: cuándo y cómo tener la conversación
- Qué comunicar a quienes no han sido identificados: cómo mantener el engagement sin crear falsas expectativas
- Cómo gestionar la confidencialidad del plan ante el titular del rol
- Cómo manejar la situación cuando un sucesor identificado decide irse

**Módulo 5 — Métricas e integración con la estrategia**
El programa debe ser vivo, no un documento de cajón:
- KPIs del programa: % de roles críticos con sucesor identificado, tiempo de cobertura de vacantes críticas, % de posiciones cubiertas internamente
- Revisión anual del mapa de roles críticos (la estrategia cambia, los roles críticos también)
- Cómo conectar el succession planning con la planificación de plantilla (workforce planning) a 3 años

**Formato de salida:**
Responde con los cinco módulos claramente delimitados. Incluye una plantilla de talent review ejecutiva, una plantilla de IDP para sucesores y una tabla de métricas del programa con frecuencia de medición y responsable.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar un programa corporativo de planificación de sucesión para roles ejecutivos y críticos',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Sucesión en la dirección financiera: preparar al próximo CFO',
                'description'      => 'Diseña el plan de sucesión para el rol de CFO y los roles financieros críticos de la organización. Aprende a identificar y desarrollar a los futuros directores financieros desde dentro del departamento. Gestiona la transición financiera sin riesgo para la continuidad operativa ni para la confianza de inversores y entidades de crédito.',
                'prompt_content'   => <<<'EOT'
Actúa como un CFO con experiencia en empresas de tamaño mediano que ha liderado procesos de sucesión en la dirección financiera, tanto como sucesor como acompañando el desarrollo de su propio sucesor.

Tu objetivo es ayudarme a diseñar un plan de sucesión para el rol de CFO y los puestos financieros más críticos, garantizando la continuidad y reduciendo el riesgo de dependencia de personas clave.

**Contexto — pregúntame:**
- Tamaño de la empresa (empleados, facturación) y etapa (privada, cotizada, en proceso de venta)
- Estructura del equipo financiero y roles clave
- ¿Hay alguna situación de riesgo inminente? (jubilación del CFO actual, proceso de M&A, expansión internacional)
- ¿Tenemos ya candidatos internos identificados o partimos de cero?

**Parte 1 — El perfil del CFO del futuro**
El CFO del futuro es diferente al del pasado:
- De guardian del pasado a arquitecto del futuro: cómo ha cambiado el rol de CFO hacia la creación de valor
- Competencias del CFO moderno: storytelling financiero para el board, liderazgo de la transformación digital financiera, gestión de riesgos en entornos de alta incertidumbre
- Qué debe dominar técnicamente: más allá del reporting (FP&A avanzado, treasury, tax planning, investor relations)
- Las competencias blandas que distinguen a los grandes CFOs: influencia en el comité de dirección, relación con inversores, capacidad de simplificar lo complejo

**Parte 2 — Evaluación de candidatos internos**
Cómo evaluar si alguien del equipo financiero tiene potencial de CFO:
- Assessment de competencias técnicas: ¿qué áreas del negocio conoce bien y cuáles son puntos ciegos?
- Simulación de board presentation: cómo evaluar la capacidad de comunicar con el board
- Exposición al comité de dirección: qué se puede observar cuando el candidato presenta en reuniones ejecutivas
- El test del banco y los auditores: ¿sería capaz de gestionar las relaciones con entidades financieras y auditores de forma autónoma?

**Parte 3 — Plan de desarrollo para sucesor del CFO**
Un roadmap de 2-3 años para preparar a un Director Financiero para el rol de CFO:
- Rotación en áreas fuera de su expertise actual (ej. si viene de control de gestión, rotación en treasury o M&A)
- Exposición gradual al board: presentaciones de menor a mayor complejidad e impacto
- Mentoría del CFO actual: qué transferir formalmente (procesos, relaciones, conocimiento institucional) y qué el candidato debe construir por sí mismo
- Participación en procesos estratégicos: due diligence, financiación, presupuesto a largo plazo

**Parte 4 — Gestión de la transición**
El momento más delicado: cuando el sucesor toma el relevo:
- El período de solapamiento: cuánto tiempo es necesario y cómo estructurarlo
- Comunicación a inversores, entidades de crédito y auditores: cómo presentar el cambio sin generar incertidumbre
- Gestión de las relaciones clave: qué relaciones debe heredar el nuevo CFO y cómo hacer la presentación
- Los primeros 100 días del nuevo CFO: qué debe lograr para validar la transición

**Formato de salida:**
Responde con las cuatro partes y subtítulos claros. Incluye una tabla de competencias del CFO moderno con ejemplos de evaluación, un roadmap de desarrollo de 2-3 años y una guía de comunicación para la transición.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar el plan de sucesión para el CFO y roles financieros críticos',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Sucesión en despachos de abogados: planes de transición de socios',
                'description'      => 'Diseña planes de sucesión para despachos de abogados que necesitan gestionar la transición generacional de socios, el traspaso de clientes y el liderazgo interno. Aprende a identificar a los futuros socios y a estructurar la transferencia de relaciones con clientes clave sin perderlos. Garantiza la continuidad del despacho más allá de sus fundadores.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor especializado en gestión estratégica de despachos de abogados, con experiencia en procesos de transición generacional en firmas de tamaño mediano.

Tu objetivo es ayudarme a diseñar un plan de sucesión adaptado a las particularidades de un despacho de abogados, donde el capital humano y las relaciones con clientes son los activos más valiosos.

**Contexto — pregúntame:**
- Tamaño del despacho (socios, abogados, áreas de práctica)
- ¿Qué socios están en fase de transición hacia la retirada en los próximos 5 años?
- ¿Cuántos abogados senior tienen potencial para ser socios?
- ¿Cuál es el mayor riesgo: perder clientes, perder conocimiento especializado o conflictos internos entre socios?

**Parte 1 — Las particularidades de la sucesión en despachos de abogados**
Por qué la sucesión en un despacho es diferente a la de otras organizaciones:
- El capital relacional como activo no transferible fácilmente: los clientes siguen a las personas, no a la firma
- La tensión entre el interés del despacho (retener clientes) y el del socio saliente (su legado y su economía)
- Los modelos de compensación de socios y cómo afectan a la disposición de transferir clientes
- El papel del lockstep vs. merit pay en la cultura de colaboración necesaria para la sucesión

**Parte 2 — Identificación y desarrollo de futuros socios**
El proceso de partnership track:
- Criterios de selección de socios: más allá de las horas facturadas (capacidad de originar negocio, liderazgo de equipo, reputación externa)
- El partnership track: qué duración es razonable y cómo estructurar los hitos de evaluación
- Cómo dar feedback honesto a los abogados en el partnership track sobre sus probabilidades reales
- La decisión más difícil: cómo comunicar que alguien no llegará a socio

**Parte 3 — La transferencia de relaciones con clientes**
El corazón de la sucesión en un despacho:
- Metodología de client transition: presentaciones graduales, co-gestión de asuntos, transferencia de confianza
- Cuándo empezar la transferencia: mínimo 3-5 años antes de la retirada efectiva del socio
- Cómo gestionar los clientes que no quieren ser transferidos: estrategias para mantener la relación del despacho
- Documentación del conocimiento de cliente: historial de asuntos, preferencias, relaciones clave en la organización cliente

**Parte 4 — El proceso de sucesión en el liderazgo interno**
Suceder al managing partner:
- Competencias del managing partner: gestión económica del despacho, liderazgo de socios (que son pares, no subordinados), desarrollo de negocio institucional
- Cómo seleccionar al próximo managing partner sin crear divisiones entre socios
- El período de solapamiento: cuánto tiempo necesita el nuevo managing partner para aprender el rol
- Comunicación a clientes estratégicos y al equipo del despacho

**Parte 5 — Aspectos económicos y jurídicos de la sucesión**
Los acuerdos que deben estar por escrito:
- Cláusulas de sucesión en el acuerdo de socios: qué debe incluir
- Valoración de la participación del socio saliente: métodos habituales en el sector legal
- Derechos del socio saliente sobre los honorarios de asuntos en curso
- Non-compete y non-solicitation en el contexto de la salida de socios

**Formato de salida:**
Organiza la respuesta en las cinco partes. Incluye un timeline de transición para un socio que se retira en 3 años, una checklist de transferencia de relaciones con clientes y un resumen de las cláusulas mínimas que debe tener un acuerdo de socios respecto a la sucesión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar planes de sucesión y transición de socios en despachos de abogados',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Desarrollo de liderazgo en equipos de Customer Success: de CSM a Head of CS',
                'description'      => 'Construye el pipeline de liderazgo dentro del equipo de Customer Success para reducir la dependencia de contrataciones externas en roles directivos. Aprende a identificar a los CSMs con potencial de gestión y a diseñar su desarrollo de forma estructurada. Crea un equipo de CS más resiliente y con mayor moral interna.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP de Customer Success con experiencia en empresas SaaS B2B. Has construido equipos de CS desde cero y has desarrollado a varios CSMs para que hicieran la transición a Team Lead, Manager y Head of CS.

Tu objetivo es ayudarme a crear un pipeline de liderazgo dentro del equipo de Customer Success, desde la identificación de talento hasta el diseño de planes de desarrollo y la gestión de las transiciones.

**Contexto — pregúntame:**
- ¿Cuántas personas tiene el equipo de CS y cuál es la estructura de roles?
- ¿Cuántos managers o team leads tenemos actualmente?
- ¿Cuál ha sido la experiencia al promover internamente vs. contratar managers externos?
- ¿Cuál es el mayor problema de retención en el equipo de CS?

**Parte 1 — El career path en Customer Success**
Una escalera de roles clara como base del pipeline de liderazgo:
- CSM Jr → CSM → Senior CSM → Team Lead → CS Manager → Head of CS / VP CS
- Para cada nivel: competencias técnicas de CS, competencias de liderazgo, métricas de referencia (GRR, NRR, CSAT por portfolio)
- Cómo comunicar el career path al equipo para que sea motivador y creíble
- El rol de Team Lead como etapa de prueba de liderazgo antes del paso a manager

**Parte 2 — Identificar a los futuros líderes de CS**
Las señales de potencial de liderazgo en un CSM:
- Ayuda a sus compañeros de forma espontánea: ¿comparte aprendizajes, hace onboarding informal de nuevos CSMs?
- Pensamiento de sistema: ¿ve los problemas del cliente como parte de un patrón del producto o del proceso, no solo como issues individuales?
- Orientación al proceso: ¿propone mejoras a los playbooks y a los procesos de CS?
- Relación con stakeholders internos: ¿sabe trabajar con producto, ventas y soporte sin escalar todo al manager?

Cómo estructurar la conversación de carrera para explorar si alguien quiere liderar o solo quiere más dinero.

**Parte 3 — Stretch assignments para desarrollar liderazgo en CS**
Proyectos que desarrollan capacidad de liderazgo sin cambiar el rol formalmente:
- Liderar la implementación de un nuevo playbook de onboarding para todo el equipo
- Hacer shadowing y feedback de calls de otros CSMs (shadow coaching)
- Gestionar un segmento de clientes de mayor complejidad o una cuenta enterprise que requiere coordinación con ventas
- Representar al equipo de CS en la reunión semanal de producto

**Parte 4 — La transición de CSM a CS Manager**
Los primeros 90 días en el rol de gestión:
- La trampa de seguir gestionando cuentas: cómo hacer la transición gradual y el riesgo de no hacerla
- Cómo gestionar la relación con los ex-compañeros que ahora son directos
- Las primeras decisiones difíciles: gestionar el underperformance de alguien con quien tenías relación de compañero
- El apoyo del VP/Head de CS en este período: qué hacer y qué no hacer

**Parte 5 — Métricas del pipeline de liderazgo de CS**
Cómo medir la salud del programa:
- % de roles de liderazgo de CS cubiertos internamente
- Tiempo medio de promoción de CSM a Team Lead y de Team Lead a Manager
- Retención de los CSMs identificados como high potentials
- eNPS del equipo de CS como indicador de cultura de desarrollo

**Formato de salida:**
Responde con las cinco partes claramente delimitadas. Incluye una tabla del career path con criterios de avance, una lista de señales de potencial de liderazgo y un plan de 90 días para nuevos managers de CS.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir un pipeline de liderazgo interno en equipos de Customer Success',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Planificación de sucesión para freelancers: asegurar la continuidad de los proyectos',
                'description'      => 'Diseña un plan de continuidad para tu negocio freelance que proteja a tus clientes ante una situación de incapacidad, saturación o cambio de carrera. Aprende a documentar tus procesos, a crear una red de colegas de confianza y a gestionar las transiciones de clientes de forma profesional. Diferénciate como freelancer que piensa a largo plazo.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de gestión de negocio para profesionales independientes, con experiencia asesorando a freelancers de alto nivel que quieren construir un negocio sostenible y resiliente a largo plazo.

Tu objetivo es ayudarme a diseñar un plan de continuidad y sucesión para mi negocio freelance, que proteja a mis clientes y mi reputación ante cualquier eventualidad o transición de carrera.

**Contexto — pregúntame:**
- ¿Cuál es tu especialidad y qué tipo de proyectos gestionas habitualmente?
- ¿Cuántos clientes activos tienes y cuánto dependen de ti para la continuidad operativa?
- ¿Tienes ya algún proceso documentado o todo vive en tu cabeza?
- ¿Qué eventualidades te preocupan más? (enfermedad, exceso de trabajo, viaje largo, cambio de carrera)
- ¿Tienes red de colegas de confianza en tu especialidad?

**Parte 1 — Por qué los freelancers necesitan planificación de continuidad**
El riesgo real que la mayoría ignora:
- El problema del single point of failure: tú eres toda la empresa
- Qué les pasa a los clientes cuando un freelancer clave desaparece sin aviso
- Cómo la planificación de continuidad es un argumento de venta diferencial con clientes corporativos
- Las tres situaciones que justifican tener un plan: emergencia médica, saturación y cambio de carrera planificado

**Parte 2 — Documentación de procesos como base de la continuidad**
Si no está documentado, no existe:
- El mapa de procesos de tu negocio freelance: qué procesos críticos dependen solo de ti
- Cómo documentar sin volverse loco: el nivel mínimo viable de documentación para cada proceso
- Herramientas recomendadas: Notion, Loom (vídeos de procesos), repositorios Git para código, Dropbox Paper para documentos
- La regla de los dos buses: si dos personas pueden ejecutar el proceso, está bien documentado

**Parte 3 — La red de colegas de confianza**
Tu plan B profesional:
- Cómo construir una red de 3-5 colegas de tu especialidad con los que puedas colaborar o referirte mutuamente
- Acuerdos de referral y cobertura: qué debe incluir un acuerdo informal entre freelancers (remuneración del referral, estándares de calidad mínimos, confidencialidad)
- Cómo presentar a un colega a un cliente sin perder la relación: estrategias para mantener la relación como "tu freelancer de confianza" aunque ejecute otro
- Reciprocidad: cómo ser también el plan B de otros freelancers

**Parte 4 — La transición planificada de clientes**
Cuando decides dejar un cliente o cambiar de carrera:
- Cuánto tiempo de aviso es razonable según el tipo de relación y proyecto
- La carta de transición: cómo comunicar un cambio de forma que refuerce tu reputación
- Cómo hacer el traspaso de conocimiento al cliente o al nuevo freelancer: documentos, reuniones, período de solapamiento
- Cómo terminar bien: las referencias y el portfolio como activos de largo plazo

**Parte 5 — Tu plan de emergencia**
Lo que debe estar preparado antes de que pase cualquier cosa:
- El sobre cerrado: documento con acceso a tus herramientas, proyectos activos, contactos clave y el nombre del colega que puede cubrirte, que alguien de confianza tiene
- Cómo comunicar a tus clientes más importantes que tienes un plan de contingencia (sin entrar en detalles personales)
- Revisión anual del plan: qué revisar cada año para que el plan no quede obsoleto

**Formato de salida:**
Organiza la respuesta en las cinco partes con subtítulos claros. Incluye una plantilla de mapa de procesos críticos, un modelo de acuerdo de referral entre freelancers y una plantilla del plan de emergencia. El tono debe ser práctico y directo, de colega a colega.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Crear un plan de continuidad y sucesión para proteger el negocio freelance',
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
