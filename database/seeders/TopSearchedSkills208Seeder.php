<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills208Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Cultura de marketing data-driven',
                'description'       => 'Construye el equipo de marketing que toma decisiones con datos: los rituales, las herramientas y el cambio cultural que transforma a un equipo creativo en uno que combina creatividad con evidencia.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en transformación cultural de equipos de marketing y en la adopción de una mentalidad data-driven. Quiero que me ayudes a construir una cultura de marketing donde los datos y la creatividad convivan de forma natural y productiva.

Mi contexto:
- Tamaño del equipo de marketing: [número de personas y roles principales]
- Nivel actual de orientación a datos: [intuitivo, incipiente, en transición, o avanzado]
- Herramientas de datos disponibles: [Google Analytics, Mixpanel, Tableau, hojas de cálculo, otras]
- Principal resistencia detectada: [miedo a los números, falta de formación, cultura creativa arraigada, etc.]
- Métricas que ya se reportan regularmente: [menciona las que usáis]
- Tamaño de la empresa y sector: [contexto general]

Con esa información, quiero que me entregues un plan estructurado en estas áreas:

**1. Diagnóstico de madurez data-driven**
Describe los cuatro niveles de madurez de un equipo de marketing orientado a datos: intuitivo, descriptivo, predictivo y prescriptivo. Sitúa mi equipo en el nivel correcto según el contexto que te he dado e identifica las brechas más urgentes que tengo que cerrar.

**2. Rituales de equipo que anclan la cultura de datos**
Propón cinco rituales concretos que introduciré en el equipo para que los datos sean parte del idioma cotidiano. Para cada ritual especifica: nombre del ritual, frecuencia, duración, quién lo lidera, qué datos se revisan y cuál es el resultado esperado. Incluye un weekly de métricas, una sesión mensual de aprendizajes de campañas y al menos dos rituales que conecten datos con decisiones creativas.

**3. Framework de decisión basado en datos**
Diseña un proceso de toma de decisiones en cinco pasos que el equipo usará cuando lance una campaña nueva: cómo formula la hipótesis, qué datos consulta antes de crear, cómo define el éxito en números antes de ejecutar, cómo monitoriza durante la ejecución y cómo documenta el aprendizaje al finalizar.

**4. Plan de formación en datos para creativos**
Propón un plan de capacitación de doce semanas para que los perfiles más creativos del equipo desarrollen competencias básicas en análisis de datos. Incluye: módulos de contenido, ejercicios prácticos con datos reales del negocio, y cómo evaluar el progreso sin generar ansiedad ni resistencia.

**5. Herramientas y stack mínimo viable**
Recomienda el stack de herramientas mínimo que un equipo de marketing necesita para operar de forma data-driven según su tamaño y presupuesto. Diferencia entre lo esencial, lo conveniente y lo avanzado. Incluye herramientas de visualización, de análisis de campañas, de atribución y de experimentación (A/B testing).

**6. Cómo gestionar la resistencia cultural**
Describe las tres resistencias más comunes cuando se introduce una cultura de datos en equipos creativos y cómo superarlas. Incluye frases concretas que puedo usar con mi equipo, cómo celebrar las victorias de datos y cómo evitar que la cultura de datos se convierta en microgestión por métricas.

**7. Indicadores de que la cultura está arraigando**
Lista diez señales observables que me confirmarán que la transformación cultural está funcionando: comportamientos del equipo, cambios en las conversaciones, métricas de adopción y resultados de negocio que serían imposibles sin la cultura de datos.

Responde en español. Sé específico, accionable y ten en cuenta que el objetivo es que creatividad y datos se refuercen mutuamente, no que los datos aplanen la creatividad.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Transformar la cultura del equipo de marketing hacia la toma de decisiones basada en datos manteniendo la creatividad.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Cultura de ingeniería de alta calidad',
                'description'       => 'Construye la cultura técnica que produce software de calidad de forma sostenida: la cultura del code review, los principios de ingeniería compartidos y los rituales que mantienen los estándares técnicos elevados con el tiempo.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en ingeniería de software y en la construcción de culturas técnicas de alta calidad en equipos de desarrollo. Quiero que me ayudes a diseñar la cultura técnica de mi equipo de ingeniería para que produzca software de calidad de forma consistente y sostenida.

Mi contexto:
- Tamaño del equipo: [número de desarrolladores y nivel de seniority]
- Stack tecnológico principal: [lenguajes, frameworks, arquitectura]
- Situación actual de calidad: [deuda técnica, cobertura de tests, frecuencia de bugs en producción]
- Proceso de code review actual: [existe, es informal, es riguroso, no existe]
- Principales problemas de calidad que sufro ahora: [bugs frecuentes, regresiones, código inconsistente, etc.]
- Metodología de trabajo: [Scrum, Kanban, Shape Up, etc.]

Con esa información, quiero que me entregues un plan completo en estas áreas:

**1. Principios de ingeniería del equipo**
Ayúdame a formular entre cinco y ocho principios de ingeniería que definirán cómo trabaja mi equipo. Para cada principio incluye: el enunciado del principio, la explicación de por qué importa, un ejemplo concreto de cómo se aplica en el día a día y un antipatrón que el principio ayuda a evitar. Los principios deben cubrir al menos: calidad del código, mantenibilidad, testing, revisión entre pares y tratamiento de la deuda técnica.

**2. Cultura y proceso de code review**
Diseña el proceso de code review ideal para mi equipo. Incluye: quién revisa (autor, revisor, quorum mínimo), criterios de aprobación, tiempos de respuesta esperados, qué cosas bloquean un merge y qué son solo sugerencias, cómo dar feedback constructivo y cómo gestionar los desacuerdos técnicos. Proporciona también una guía de diez preguntas que todo revisor debe hacerse antes de aprobar un pull request.

**3. Rituales de calidad técnica**
Propón seis rituales concretos que reforzarán la cultura de calidad. Para cada uno: nombre, frecuencia, duración, quién participa, qué se revisa o discute y cuál es el output esperado. Incluye al menos: revisión de bugs de producción (blameless postmortem), sesión de deuda técnica, tech talk interno y revisión de métricas de calidad.

**4. Definición de "done" con calidad incorporada**
Diseña una Definition of Done que incorpore criterios de calidad técnica no negociables. Incluye criterios de código, tests, documentación, revisión de seguridad y rendimiento. Explica cómo introducirla sin que el equipo la perciba como burocracia y cómo mantenerla actualizada cuando el contexto cambia.

**5. Tratamiento de la deuda técnica**
Propón un sistema para gestionar la deuda técnica de forma que no se acumule hasta convertirse en un problema crítico. Incluye: cómo identificarla y documentarla, cómo priorizarla frente a nuevas funcionalidades, qué porcentaje de la capacidad del equipo dedicar a reducirla y cómo comunicar su impacto al negocio en términos no técnicos.

**6. Formación técnica continua**
Diseña un programa de aprendizaje técnico continuo para el equipo. Incluye: cómo organizar tech talks internos, cómo gestionar el tiempo de aprendizaje dentro del sprint, cómo compartir conocimiento tras asistir a conferencias y cómo crear un ambiente donde hacer preguntas y admitir que no sabes algo es seguro y valorado.

**7. Métricas de calidad técnica**
Lista las ocho métricas que usaré para medir la salud técnica del equipo. Para cada una: definición exacta, cómo se mide, frecuencia de revisión, umbral de alerta y qué acción tomar cuando se degrada. Incluye métricas de DORA (deployment frequency, lead time, MTTR, change failure rate) y métricas de calidad de código.

Responde en español. Sé concreto y accionable. Ten en cuenta que el objetivo es construir una cultura que se autorregulea y mantiene los estándares sin depender de una sola persona.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar la cultura técnica de un equipo de ingeniería que produce software de calidad de forma sostenida.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Design culture: el diseño como valor organizacional',
                'description'       => 'Construye una cultura que valora el diseño: la educación de los stakeholders, los procesos que involucran al diseño desde el principio y los indicadores de que la cultura de diseño está arraigando en la organización.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en liderazgo de diseño y en la construcción de culturas organizacionales que valoran y entienden el diseño. Quiero que me ayudes a diseñar la estrategia para hacer del diseño un valor real en mi organización, no solo un servicio estético que se llama al final del proceso.

Mi contexto:
- Tamaño del equipo de diseño: [número de diseñadores y roles]
- Posición del diseño en la organización: [reporta a producto, a marketing, a tecnología, o es independiente]
- Nivel de madurez de la cultura de diseño actual: [invisible, reactivo, consultivo, estratégico]
- Principales problemas que sufro: [diseño llamado tarde, stakeholders que cambian los diseños, falta de presupuesto, no se mide el impacto]
- Tipo de empresa y sector: [startup, scale-up, corporación, agencia]
- Aliados en la organización que ya entienden el valor del diseño: [quiénes son]

Con esa información, quiero que me entregues un plan completo en estas áreas:

**1. Diagnóstico de madurez de la cultura de diseño**
Describe los cinco niveles del Design Maturity Model y sitúa mi organización en el nivel correcto según el contexto que te he dado. Identifica las tres palancas más importantes que me harán subir al siguiente nivel y el principal obstáculo que tendré que superar.

**2. Educación de stakeholders**
Diseña un programa de alfabetización en diseño para los stakeholders clave de la organización (CEO, CPO, ingeniería, marketing, ventas). Incluye: qué conceptos necesitan entender cada perfil, cómo presentar el valor del diseño en su idioma (negocio, tecnología, cliente), qué materiales o sesiones concretas organizaré y cómo medir si la educación está funcionando.

**3. Procesos que involucran al diseño desde el principio**
Diseña los rituales y procesos que garantizarán que el diseño esté en la sala cuando se toman las decisiones importantes. Incluye: cómo participar en el proceso de discovery de producto, cómo estar presente en las reuniones de planificación estratégica, cómo asegurarte de que ningún proyecto de cara al usuario empieza sin diseño y cómo gestionar los casos en que se saltaron el proceso.

**4. Design crits y revisiones que construyen cultura**
Propón un formato de design critique que sea un ritual de aprendizaje colectivo y no solo una revisión de trabajo. Incluye: frecuencia, participantes (¿solo diseñadores o también producto e ingeniería?), estructura de la sesión, cómo dar feedback constructivo, cómo gestionar las críticas difíciles y cómo documentar los aprendizajes.

**5. Comunicación del impacto del diseño**
Diseña el sistema con el que mostraré el valor del diseño en términos de negocio. Incluye: qué métricas conectan el diseño con resultados de negocio (conversión, NPS, tiempo de tarea, retención), cómo presentar los case studies de diseño al liderazgo, cómo calcular el ROI de una inversión en diseño y qué formato de informe trimestral usaré con los stakeholders.

**6. Colaboración diseño-ingeniería**
Describe el modelo de colaboración ideal entre diseño e ingeniería que elimina el handoff tradicional y crea co-creación. Incluye: en qué fases colaboran, cómo gestionar el diseño en el sprint, cómo usar los design tokens y sistemas de diseño para hablar el mismo idioma y cómo resolver los conflictos entre restricciones técnicas y ambición de diseño.

**7. Indicadores de que la cultura de diseño está arraigando**
Lista diez señales concretas y observables que me confirmarán que la cultura de diseño está cambiando. Diferencia entre señales tempranas (en los primeros tres meses), señales de consolidación (a los seis meses) y señales de madurez (al año). Incluye comportamientos de los stakeholders, cambios en los procesos y resultados de negocio medibles.

Responde en español. Sé específico y accionable. Ten en cuenta que el cambio cultural en diseño es un proceso político tanto como técnico y que la influencia sin autoridad formal es el principal músculo que tengo que desarrollar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir una cultura organizacional que valora el diseño como disciplina estratégica y no solo como servicio estético.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Cultura de ventas ganadora',
                'description'       => 'Construye la cultura del equipo comercial que supera sus objetivos de forma consistente: los valores compartidos, los rituales que refuerzan la mentalidad correcta y los comportamientos que el liderazgo tiene que modelar.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en liderazgo comercial y en la construcción de culturas de ventas de alto rendimiento. Quiero que me ayudes a diseñar la cultura de mi equipo de ventas para que supere sus objetivos de forma consistente y sostenida en el tiempo.

Mi contexto:
- Tamaño del equipo comercial: [número de vendedores y roles: SDR, AE, AM, etc.]
- Ciclo de venta típico: [duración y complejidad del proceso]
- Producto o servicio que se vende: [descripción breve]
- Tipo de venta: [B2B, B2C, enterprise, SMB, transaccional, consultiva]
- Situación actual del equipo: [supera objetivos, los cumple, los incumple; ambiente del equipo]
- Principales problemas culturales que identifico: [miedo al no, falta de actividad, baja resiliencia, competencia interna destructiva, etc.]

Con esa información, quiero que me entregues un plan completo en estas áreas:

**1. Los valores de la cultura de ventas ganadora**
Define entre cinco y siete valores concretos que quiero que definan la cultura de mi equipo de ventas. Para cada valor: el enunciado, lo que significa en la práctica diaria de un vendedor, un ejemplo de comportamiento que lo encarna y un comportamiento que lo viola. Los valores deben cubrir al menos: orientación al cliente, resiliencia ante el rechazo, responsabilidad personal, colaboración y aprendizaje continuo.

**2. Rituales que refuerzan la mentalidad correcta**
Propón ocho rituales concretos del equipo de ventas que reforzarán la cultura ganadora. Para cada ritual: nombre, frecuencia, duración, quién lo lidera, qué se hace exactamente y qué mentalidad o comportamiento refuerza. Incluye al menos: una reunión diaria de actividad (standup), una sesión semanal de roleplay o llamadas en equipo, una celebración de victorias y un ritual de aprendizaje de las derrotas.

**3. Comportamientos que el liderazgo tiene que modelar**
Lista los diez comportamientos específicos que yo como líder comercial debo modelar para que la cultura que quiero construir sea creíble. Para cada uno: el comportamiento, por qué es importante que lo haga yo y no solo lo exija, y qué ocurre en la cultura cuando el líder no lo hace. Incluye comportamientos sobre: cómo das feedback, cómo reaccionas ante los fracasos, cómo muestras actividad propia y cómo tratas a los clientes.

**4. Sistema de reconocimiento y celebración**
Diseña el sistema de reconocimiento que reforzará los comportamientos correctos y no solo los resultados. Incluye: cómo reconocer la actividad y el proceso además del cierre, qué tipos de reconocimiento usar (público, privado, económico, no económico), con qué frecuencia celebrar y cómo evitar que el sistema de reconocimiento genere competencia tóxica.

**5. Gestión de la resiliencia y el rechazo**
Diseña el programa de gestión emocional que preparará a mi equipo para manejar el rechazo, los meses malos y la presión de los objetivos. Incluye: cómo hablar de las emociones en un equipo de ventas sin que parezca terapia, qué técnicas concretas usar para resetear la mentalidad tras una semana mala, y cómo identificar a los vendedores que están en riesgo de quemarse antes de que abandonen.

**6. Onboarding cultural para nuevos vendedores**
Diseña el programa de onboarding de los primeros treinta días para un nuevo vendedor que lo sumerja en la cultura antes de que empiece a vender. Incluye: quién lo acompaña, qué observa, qué rituales vive desde el primer día, qué conversaciones tiene con el líder y con el equipo, y cómo evalúas al final del primer mes si el nuevo vendedor encaja culturalmente.

**7. Indicadores de salud cultural del equipo**
Lista ocho métricas o señales observables que me indicarán si la cultura del equipo de ventas es sana o está deteriorándose. Incluye métricas de actividad, de colaboración, de retención y de satisfacción. Para cada una, indica el umbral de alerta y la acción que tomaré cuando se deteriore.

Responde en español. Sé concreto, directo y práctico. Ten en cuenta que la cultura de ventas se construye en los momentos de presión, no cuando todo va bien, y que el líder es siempre el principal arquitecto de la cultura de su equipo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir la cultura de un equipo comercial que supera objetivos de forma consistente con la mentalidad y rituales correctos.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Diseño organizacional para product teams',
                'description'       => 'Cómo estructurar la organización de producto: los modelos de equipos, las dependencias entre ellos y las decisiones estructurales que aceleran o ralentizan la entrega de valor.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en diseño organizacional de producto y en los modelos de estructuración de equipos de ingeniería y producto. Quiero que me ayudes a diseñar la estructura de los equipos de producto y tecnología de mi organización para que entreguen valor de forma rápida y autónoma.

Mi contexto:
- Tamaño de la organización de producto y tecnología: [número total de personas y desglose por roles]
- Número de equipos actuales y cómo están formados: [describe la estructura actual]
- Problema principal con la estructura actual: [dependencias, cuellos de botella, falta de ownership, silos, etc.]
- Tipo de producto: [B2B SaaS, marketplace, app de consumo, plataforma, etc.]
- Etapa de la empresa: [startup temprana, scale-up, empresa establecida]
- Grado de autonomía que quiero para los equipos: [alta autonomía vs. coordinación centralizada]

Con esa información, quiero que me entregues un análisis y plan completo en estas áreas:

**1. Los modelos de organización de product teams**
Explica los principales modelos de estructuración de equipos de producto y tecnología: feature teams, component teams, platform teams, stream-aligned teams (Team Topologies), y los modelos híbridos más comunes. Para cada modelo: ventajas, desventajas, en qué contexto encaja mejor y un ejemplo real de empresa que lo usa. Recomienda el modelo más adecuado para mi contexto y explica el razonamiento.

**2. Los cuatro tipos de equipo de Team Topologies**
Explica en detalle los cuatro tipos de equipo del framework Team Topologies: stream-aligned, platform, enabling, y complicated subsystem. Para cada tipo: cuándo crear uno, qué hace exactamente, cómo medir si cumple su propósito, y los antipatrones más comunes. Describe cómo aplicaría este framework a mi organización concreta.

**3. Los tres modos de interacción entre equipos**
Explica los tres modos de interacción entre equipos según Team Topologies: collaboration, X-as-a-Service y facilitating. Para cada modo: cuándo usarlo, cuándo terminarlo, cómo gestionarlo en la práctica y el coste cognitivo que implica. Diseña el mapa de interacciones que debería tener mi organización.

**4. Gestión de dependencias entre equipos**
Diseña el sistema para identificar, gestionar y reducir las dependencias entre equipos que ralentizan la entrega. Incluye: cómo mapear las dependencias actuales, el proceso para resolverlas (plataforma, API, reestructuración), las reuniones de coordinación mínimas necesarias y los indicadores de que las dependencias están aumentando el lead time del equipo.

**5. Decisiones de staffing y composición de equipos**
Define el tamaño ideal de un equipo de producto (la two-pizza rule y sus matices), la composición mínima viable de un equipo autónomo y cómo gestionar los equipos temporales de proyecto. Incluye: cuándo partir un equipo, cuándo fusionarlos y cómo gestionar el onboarding de nuevos miembros sin romper el ritmo del equipo.

**6. El proceso de reestructuración**
Diseña el proceso para reorganizar la estructura de equipos minimizando el trauma organizacional. Incluye: cómo comunicar la reestructuración, cuánto tiempo durar en la transición, cómo gestionar las resistencias, cómo medir si la nueva estructura está funcionando y cuándo hacer un ajuste adicional.

**7. Indicadores de salud de la estructura organizativa**
Lista los ocho indicadores que me confirmarán que la estructura de equipos está funcionando bien o mal. Incluye métricas de flujo (lead time, deployment frequency), métricas de dependencias, métricas de satisfacción del equipo y señales cualitativas observables en las reuniones y conversaciones del día a día.

Responde en español. Sé preciso y accionable. Ten en cuenta el contexto de mi organización para las recomendaciones específicas y no solo el marco teórico general.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar la estructura organizacional de los equipos de producto para maximizar la autonomía y la velocidad de entrega.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Diseño organizacional y estructura empresarial',
                'description'       => 'Diseña la estructura de la organización que ejecuta la estrategia: los modelos organizativos, los principios de diseño y el proceso de reestructuración que minimiza el trauma.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en diseño organizacional y en la construcción de estructuras empresariales que ejecutan la estrategia con eficacia. Quiero que me ayudes a diseñar o rediseñar la estructura de mi organización para que apoye la estrategia de negocio y permita crecer sin crear complejidad paralizante.

Mi contexto:
- Tamaño de la organización: [número de empleados y principales áreas o departamentos]
- Estructura actual: [describe cómo está organizada hoy: quién reporta a quién, principales silos]
- Estrategia de negocio que quiero ejecutar: [crecimiento en nuevos mercados, eficiencia operativa, innovación, etc.]
- Principal problema organizativo que estoy sufriendo: [lentitud de decisiones, silos, duplicidades, falta de accountability, etc.]
- Etapa de la empresa: [startup, scale-up, empresa establecida en transformación]
- Restricciones importantes: [personas clave que no se pueden mover, compromisos existentes, sindicatos, etc.]

Con esa información, quiero que me entregues un análisis y plan completo en estas áreas:

**1. Los modelos organizativos y cuándo usar cada uno**
Explica los principales modelos de estructura organizativa: funcional, divisional (por producto, geografía o cliente), matricial, holocracia y modelos ágiles. Para cada modelo: ventajas, desventajas, tamaño de organización para el que está diseñado, y un ejemplo de empresa que lo aplica bien. Recomienda el modelo o la combinación de modelos más adecuada para mi contexto con el razonamiento completo.

**2. Principios de diseño organizacional**
Define los ocho principios que guiarán el diseño de la nueva estructura. Para cada principio: el enunciado, cómo aplicarlo en la práctica, la tensión que resuelve y el antipatrón que evita. Incluye principios sobre: accountability clara, spans of control, alineación estrategia-estructura, gestión de las dependencias, y equilibrio entre autonomía y coordinación.

**3. El proceso de diseño de la estructura**
Describe el proceso en fases para diseñar una nueva estructura organizativa. Incluye: cómo partir de la estrategia para derivar la estructura, cómo definir las unidades organizativas y sus misiones, cómo diseñar los mecanismos de coordinación entre ellas, y cómo validar el diseño antes de implementarlo. Proporciona las preguntas clave que debo responder en cada fase.

**4. Decisiones de reporting y governance**
Diseña el modelo de reporting y governance de la organización. Incluye: cómo definir los spans of control correctos para cada nivel, cuándo usar estructura plana y cuándo jerarquía, cómo diseñar los comités y foros de decisión que no se conviertan en burocracia, y cómo garantizar que la información fluye hacia arriba y las decisiones fluyen hacia abajo con agilidad.

**5. El proceso de reestructuración que minimiza el trauma**
Diseña el plan de implementación de la nueva estructura minimizando el impacto negativo en las personas y en la operación. Incluye: cómo comunicar la reestructuración (secuencia, mensajes, canales), cómo gestionar las conversaciones individuales difíciles, cuánto tiempo estimar para la transición completa, y cómo mantener la productividad durante el período de cambio.

**6. Gestión de los roles y las personas en la nueva estructura**
Describe el proceso para asignar personas a la nueva estructura. Incluye: cómo evaluar el fit de cada persona con los nuevos roles, cómo gestionar a las personas cuyo rol desaparece o cambia significativamente, cómo comunicar los cambios de reporting y cómo gestionar las resistencias de los managers que pierden equipo o visibilidad.

**7. Medición del éxito del diseño organizacional**
Define los indicadores que me confirmarán que la nueva estructura está funcionando correctamente. Incluye: métricas de velocidad de decisión, métricas de colaboración cross-funcional, indicadores de satisfacción y claridad de rol, y resultados de negocio que solo serán posibles con la nueva estructura. Para cada indicador, el umbral de éxito y el plazo en el que espero verlo.

Responde en español. Sé preciso, estructurado y accionable. Recuerda que la estructura sigue a la estrategia y que el mejor diseño organizacional es el más simple que permite ejecutar la estrategia sin crear complejidad innecesaria.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar o rediseñar la estructura organizativa de una empresa para que ejecute la estrategia de negocio con eficacia.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Cultura financiera en toda la organización',
                'description'       => 'Extiende la disciplina financiera más allá del departamento de finanzas: los programas de financial literacy para managers, los rituales de P&L por negocio y la cultura de ownership financiero.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en finanzas empresariales y en la construcción de culturas de ownership financiero en organizaciones. Quiero que me ayudes a diseñar el programa para extender la disciplina financiera más allá del departamento de finanzas y hacer que todos los managers de la organización gestionen el dinero como si fuera suyo.

Mi contexto:
- Tamaño de la organización: [número de empleados y número de managers con presupuesto]
- Sector y modelo de negocio: [descripción breve]
- Nivel actual de cultura financiera fuera de finanzas: [nulo, básico, moderado, avanzado]
- Principales problemas financieros que el negocio sufre: [overspending, falta de accountability, decisiones sin ROI, etc.]
- Herramientas de reporting financiero actuales: [ERP, dashboards, hojas de cálculo]
- Qué información financiera compartes actualmente con los managers: [poco o nada, datos básicos, P&L completo]

Con esa información, quiero que me entregues un plan completo en estas áreas:

**1. Diagnóstico de la madurez de cultura financiera**
Define los cuatro niveles de madurez de cultura financiera en una organización: de la opacidad total hasta el open book management. Sitúa mi organización en el nivel correcto y describe el camino para subir al siguiente nivel con los cambios específicos que tendré que hacer.

**2. Programa de financial literacy para managers**
Diseña un programa de alfabetización financiera para los managers no financieros de la organización. Incluye: qué conceptos deben entender (P&L, cash flow, EBITDA, ROI, coste variable vs fijo), cómo explicarlos con ejemplos de su propio negocio, el formato del programa (workshops, sesiones 1:1, materiales de referencia) y cómo evaluar que el aprendizaje se ha producido. El programa debe ser práctico y conectado con las decisiones reales que toman los managers, no una clase de contabilidad.

**3. Modelo de P&L por unidad de negocio**
Diseña el modelo de P&L que daré a cada manager para que gestione su parte del negocio con ownership financiero. Incluye: qué líneas incluir en el P&L de cada unidad, qué costes son directamente imputables al manager y cuáles son costes compartidos, cómo definir los indicadores de rentabilidad por unidad y cómo gestionar los debates sobre la imputación de costes internos.

**4. Rituales financieros de toda la organización**
Propón seis rituales financieros concretos que extenderán la disciplina financiera a toda la organización. Para cada ritual: nombre, frecuencia, participantes, formato y qué comportamiento refuerza. Incluye al menos: una revisión mensual de P&L con los managers, una sesión trimestral de business review, y un ritual que involucre a toda la organización en los resultados del negocio.

**5. Open book management: cuánto abrir los números**
Analiza el modelo de open book management y describe cómo implementarlo gradualmente. Incluye: qué información financiera compartir primero, cómo proteger la información sensible, cómo presentar los números para que sean comprensibles y motivadores (no amenazantes), y cómo conectar los resultados financieros con las decisiones individuales del equipo.

**6. Incentivos que refuerzan el ownership financiero**
Diseña el sistema de incentivos que alineará el comportamiento de los managers con los resultados financieros del negocio. Incluye: qué métricas financieras ligar a los incentivos variables, cómo evitar que el sistema de incentivos genere comportamientos disfuncionales (recortar en formación para mejorar el P&L a corto plazo), y cómo calibrar los objetivos financieros para que sean retadores pero alcanzables.

**7. Indicadores de que la cultura financiera está arraigando**
Lista los diez indicadores que me confirmarán que la cultura de ownership financiero está cambiando en la organización. Incluye señales conductuales (cómo hablan los managers en las reuniones), métricas de uso de los dashboards financieros y resultados de negocio medibles que solo son posibles con una cultura financiera sana.

Responde en español. Sé concreto y práctico. Ten en cuenta que el objetivo no es convertir a todos los managers en contables, sino en empresarios que entienden cómo sus decisiones impactan en la salud financiera del negocio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar un programa de cultura financiera que extiende el ownership económico a todos los managers de la organización.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Cultura de compliance: el cumplimiento como valor',
                'description'       => 'Construye una organización donde el cumplimiento normativo no es una carga sino un valor: los programas de formación, los canales de denuncia y la ética corporativa que previene los problemas antes de que se conviertan en escándalos.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en compliance, ética corporativa y en la construcción de culturas organizacionales donde el cumplimiento normativo es un valor genuino y no una imposición burocrática. Quiero que me ayudes a diseñar la cultura de compliance de mi organización para que prevenga los problemas antes de que ocurran.

Mi contexto:
- Tamaño de la organización y sector: [número de empleados y sector de actividad]
- Marco normativo principal aplicable: [GDPR, PBC, SOX, ISO 27001, regulación sectorial específica, etc.]
- Situación actual de compliance: [programa inexistente, básico, establecido o maduro]
- Principales riesgos de compliance que más me preocupan: [corrupción, privacidad de datos, conflictos de interés, seguridad laboral, etc.]
- Incidentes de compliance pasados si los hubo: [describe brevemente sin necesidad de detalle]
- Recursos del equipo de compliance: [tamaño del equipo, presupuesto aproximado, herramientas]

Con esa información, quiero que me entregues un plan completo en estas áreas:

**1. Diagnóstico de la cultura de compliance actual**
Define los cuatro niveles de madurez de una cultura de compliance: reactivo (cumplimos cuando nos pillan), burocrático (cumplimos porque nos obligan), proactivo (prevenimos porque entendemos los riesgos) y ético (el cumplimiento es un valor organizacional). Sitúa mi organización en el nivel correcto y describe el camino hacia la cultura ética con las palancas más importantes.

**2. El programa de formación en compliance que funciona**
Diseña un programa de formación en compliance que cambie comportamientos y no solo informe. Incluye: segmentación de audiencias (alta dirección, managers, empleados, terceros), contenidos específicos por audiencia, formatos más efectivos (e-learning, casos reales, roleplay, talleres), frecuencia de formación y cómo evaluar que la formación ha tenido impacto en el comportamiento real. Explica por qué el e-learning anual que nadie lee no funciona y qué hacer en su lugar.

**3. El canal de denuncia que la gente realmente usa**
Diseña el sistema de canal de denuncias (whistleblowing) que genere confianza y sea efectivamente utilizado. Incluye: qué canales ofrecer (anónimo, confidencial, externo), cómo gestionar las denuncias recibidas, los tiempos de respuesta, cómo proteger al denunciante, cómo comunicar internamente la existencia y el uso del canal, y qué métricas de uso indican que la cultura de denuncia es sana (paradójicamente, más denuncias suele indicar más confianza, no más problemas).

**4. El tono desde la cima: el papel del liderazgo**
Describe los comportamientos concretos que la alta dirección y el consejo de administración deben modelar para que la cultura de compliance sea creíble. Incluye: cómo comunicar el compromiso con el compliance en las reuniones de dirección, cómo actuar cuando el cumplimiento entra en conflicto con los objetivos de negocio a corto plazo, y las señales que invalidan toda la inversión en compliance si el liderazgo no las evita.

**5. Gestión de los dilemas éticos**
Diseña el proceso y los recursos para que los empleados gestionen los dilemas éticos del día a día. Incluye: un framework de decisión ética en cinco pasos que cualquier persona puede usar, cómo crear foros seguros para discutir situaciones ambiguas, y una biblioteca de casos prácticos de dilemas éticos comunes en mi sector con el análisis de la respuesta correcta.

**6. Integración del compliance en los procesos de negocio**
Describe cómo integrar el compliance en los procesos de negocio existentes para que no sea una capa adicional sino parte del flujo natural de trabajo. Incluye: compliance en el proceso de onboarding de nuevos empleados, compliance en la due diligence de proveedores y socios, compliance en el lanzamiento de nuevos productos y servicios, y compliance en las decisiones de expansión geográfica.

**7. Métricas de una cultura de compliance sana**
Define los diez indicadores que usaré para medir la salud de la cultura de compliance de mi organización. Incluye métricas de programa (participación en formación, uso del canal de denuncias, tiempo de resolución de incidencias), métricas de cultura (resultados de encuesta de ética, número de consultas espontáneas al equipo de compliance) y métricas de resultado (número de incidentes, sanciones regulatorias, coste de los incumplimientos).

Responde en español. Sé concreto y accionable. Ten en cuenta que el objetivo es construir una cultura donde las personas hacen lo correcto porque quieren hacerlo, no porque les están vigilando.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Construir una cultura de compliance donde el cumplimiento normativo es un valor organizacional genuino y no una imposición burocrática.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Cultura de customer centricity',
                'description'       => 'Construye la organización que pone al cliente en el centro de todas sus decisiones: los rituales que mantienen la voz del cliente presente y el proceso para resolver los conflictos entre intereses del cliente y objetivos internos.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en customer experience, customer success y en la construcción de organizaciones genuinamente centradas en el cliente. Quiero que me ayudes a diseñar la cultura de customer centricity de mi organización para que el cliente sea el centro real de las decisiones y no solo un valor declarado en la web.

Mi contexto:
- Tipo de negocio y clientes: [B2B, B2C, tipo de cliente, tamaño del cliente]
- Tamaño de la organización: [número de empleados, principales departamentos]
- Nivel actual de orientación al cliente: [declarativa, reactiva, proactiva o predictiva]
- Principal problema de customer experience que estoy sufriendo: [churn alto, NPS bajo, quejas recurrentes, desconexión entre lo que prometemos y lo que entregamos]
- Cómo se captura la voz del cliente hoy: [encuestas, entrevistas, análisis de soporte, ad hoc]
- Alineación entre departamentos en torno al cliente: [alta, media, baja, o silos sin comunicación]

Con esa información, quiero que me entregues un plan completo en estas áreas:

**1. Los cuatro niveles de customer centricity**
Describe el modelo de madurez de customer centricity en cuatro niveles: product-centric (vendemos lo que hacemos), sales-centric (vendemos lo que el cliente dice querer), customer-centric (diseñamos pensando en el cliente) y customer-obsessed (anticipamos las necesidades antes de que el cliente las exprese). Sitúa mi organización en el nivel correcto e identifica las palancas para avanzar al siguiente.

**2. Los rituales que mantienen la voz del cliente presente**
Propón ocho rituales concretos que asegurarán que la voz del cliente está presente en las decisiones del negocio. Para cada ritual: nombre, frecuencia, participantes, formato y qué decisión o comportamiento influye. Incluye al menos: escucha de llamadas de soporte, sesiones con clientes para el equipo de producto, revisión semanal de NPS y verbatims, y un mecanismo para que el CEO o dirección hable directamente con clientes regularmente.

**3. El sistema de Voice of Customer (VoC)**
Diseña el sistema de VoC que capturará la realidad del cliente de forma continua y sistemática. Incluye: qué canales de captura usar (CSAT, NPS, entrevistas, análisis de conversaciones de soporte, reseñas), cómo sintetizar y priorizar los insights, cómo distribuirlos a los equipos relevantes y cómo cerrar el loop con el cliente informándole de que su feedback ha tenido impacto. Proporciona un proceso concreto de VoC end-to-end.

**4. Resolución de conflictos entre intereses del cliente y objetivos internos**
Diseña el framework para resolver los conflictos frecuentes entre lo que es mejor para el cliente y lo que es mejor para los objetivos internos a corto plazo. Incluye: cómo identificar cuándo estamos tomando una decisión que prioriza los objetivos internos sobre el cliente, el proceso de deliberación que pone al cliente en el centro, los criterios de decisión y cómo documentar los trade-offs para aprender de ellos en el futuro.

**5. Customer journey: responsabilidad cross-funcional**
Diseña el modelo de responsabilidad cross-funcional sobre el customer journey para que ningún punto del viaje del cliente sea propiedad exclusiva de un solo departamento. Incluye: cómo mapear el customer journey completo con todos los departamentos implicados, cómo asignar ownership de cada etapa, el proceso de revisión periódica del journey completo y cómo resolver los problemas que ocurren en las costuras entre departamentos.

**6. Métricas de customer experience que toda la organización sigue**
Define el set de métricas de customer experience que no serán solo del equipo de CS sino de toda la organización. Incluye: NPS, CSAT, CES (Customer Effort Score), churn rate, tiempo de resolución y las métricas de producto que correlacionan con la satisfacción. Para cada métrica: definición exacta, quién es responsable de moverla, con qué frecuencia se revisa en qué foros y qué target es aceptable para el tipo de negocio que tengo.

**7. Indicadores de que la cultura customer-centric está arraigando**
Lista diez señales concretas que me confirmarán que la cultura customer-centric está cambiando la organización. Incluye señales en el comportamiento de los equipos no orientados al cliente (ingeniería, finanzas, legal), cambios en la calidad de las conversaciones internas sobre el cliente, y resultados de negocio que solo son posibles cuando el cliente está realmente en el centro de las decisiones.

Responde en español. Sé específico y accionable. Ten en cuenta que la customer centricity real requiere cambios estructurales, de proceso y de incentivos, y que los valores declarados sin estos cambios son solo buenas intenciones.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Construir una organización genuinamente centrada en el cliente con rituales, sistemas y procesos que mantienen la voz del cliente en el centro de las decisiones.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Cultura y valores del freelance',
                'description'       => 'Los valores que definen cómo trabajas y qué tipo de proyectos y clientes atraes: el manifiesto del freelance y los principios de trabajo que comunicas en tu web para atraer a clientes alineados con tu forma de trabajar.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en branding personal, posicionamiento freelance y en la construcción de una práctica profesional independiente basada en valores claros. Quiero que me ayudes a definir los valores y la cultura de trabajo que definirán mi marca como freelance y atraerán a los clientes correctos.

Mi contexto:
- Especialidad y tipo de trabajo que hago: [descripción de tu servicio principal]
- Años de experiencia y sectores en los que has trabajado: [contexto profesional]
- Tipo de clientes con los que mejor has trabajado hasta ahora: [perfil, tamaño, sector]
- Tipo de proyectos y clientes que quieres atraer en el futuro: [tu cliente ideal]
- Clientes o proyectos que has tenido y que definitivamente no quieres repetir: [qué no quieres]
- Valores que consideras más importantes en tu trabajo: [menciona tres o cuatro que te vengan a la mente]

Con esa información, quiero que me entregues un plan completo en estas áreas:

**1. Arqueología de tus valores como freelance**
Ayúdame a descubrir mis valores auténticos a través de un proceso de reflexión. Proporciona quince preguntas profundas que debo responder para descubrir qué valores realmente definen cómo trabajo (no los que me gustaría tener, sino los que ya están en mi comportamiento). A partir de mis respuestas, ayúdame a identificar los cinco valores más auténticos y a articularlos de forma que suenen como yo y no como una declaración corporativa genérica.

**2. El manifiesto del freelance**
Redacta un manifiesto de trabajo en primera persona que captura mi filosofía como profesional independiente. El manifiesto debe: tener entre cuatro y seis principios claros y concretos, usar lenguaje directo y personal (no marketing-speak), dejar claro qué tipo de colaboración ofrezco y qué tipo no ofrezco, y ser tan específico que un cliente potencial pueda leerlo y saber inmediatamente si encajamos o no. Incluye también la versión corta del manifiesto (dos o tres frases) para usar en la bio de mi web.

**3. Mis criterios de selección de clientes y proyectos**
Diseña mis criterios de aceptación y rechazo de clientes y proyectos. Incluye: los cinco criterios que un proyecto debe cumplir para que lo acepte, las cinco señales de alerta que me indican que debo declinar aunque el presupuesto sea bueno, y un proceso de due diligence del cliente en tres pasos que aplicaré antes de aceptar cualquier proyecto nuevo. El objetivo es que nunca más tome un proyecto que me quite energía o comprometa mis estándares.

**4. Mi forma de trabajar: el manual de usuario del cliente**
Diseña un documento de onboarding para clientes nuevos que explique cómo trabajas. Incluye: tu proceso de trabajo estándar, cómo te comunicas y en qué tiempos respuestas, qué necesitas del cliente para hacer tu mejor trabajo, qué no aceptas (revisiones infinitas, microgestión, cambios de última hora sin compensación) y cómo gestionas los conflictos cuando el proyecto no va según lo esperado. Este documento filtra clientes problemáticos antes de que firmen.

**5. Posicionamiento que atrae clientes alineados con tus valores**
Diseña el posicionamiento de tu web y perfiles profesionales para que la cultura de trabajo y los valores sean visibles desde el primer momento. Incluye: cómo articular la propuesta de valor conectada a los valores (no solo al resultado técnico), los elementos de la web donde los valores deben estar presentes (about, servicios, proceso, testimonios), el tono de voz que refleja tu personalidad y los tipos de clientes que tu posicionamiento actual ahuyenta y cuáles atrae.

**6. La gestión de las situaciones que ponen a prueba tus valores**
Diseña el protocolo para gestionar las situaciones en las que la presión económica o del cliente te tienta a comprometer tus valores. Incluye: cómo gestionar la petición de un cliente de hacer algo que no encaja con tu ética, cómo decir no a un proyecto lucrativo que sabes que no es para ti, cómo gestionar el momento de sequía de proyectos sin aceptar cualquier cosa, y cómo recuperarte cuando te das cuenta de que has aceptado un proyecto que no debías.

**7. Cómo los valores se convierten en reputación y referidos**
Describe el mecanismo por el que vivir los valores en el día a día construye reputación y genera un flujo de clientes referidos que ya están preseleccionados. Incluye: qué comportamientos concretos generan más referidos de calidad, cómo pedir referidos de una forma que refuerce tu posicionamiento, y los indicadores de que tu reputación basada en valores está funcionando (qué tipo de clientes te llegan y cómo te encontraron).

Responde en español. Sé auténtico y directo. Ten en cuenta que los valores del freelance más poderosos no son los más bonitos sino los más verdaderos, y que el objetivo es construir una práctica profesional en la que el trabajo que haces y cómo lo haces estén totalmente alineados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Definir los valores y la cultura de trabajo del freelance para atraer clientes alineados y construir una práctica profesional sostenible.',
                'vote_score'        => 34,
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
