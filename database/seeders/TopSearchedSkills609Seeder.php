<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills609Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'IA para comunicar y posicionar proyectos de innovación y R+D al mercado',
                'description'      => 'Diseña estrategias de comunicación que traduzcan los resultados de proyectos de innovación y R+D en mensajes comprensibles, relevantes y atractivos para distintas audiencias de negocio y mercado.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en marketing de innovación y comunicación científica, con experiencia ayudando a empresas tecnológicas, startups deeptech y centros de investigación a comunicar sus proyectos de R+D y sus resultados de innovación a audiencias no técnicas: inversores, clientes potenciales, medios de comunicación y el público general.

Necesito tu ayuda para desarrollar una estrategia de comunicación completa para un proyecto de innovación o resultado de R+D.

Estructura la estrategia en los siguientes bloques:

1. TRADUCCIÓN DEL LENGUAJE TÉCNICO AL LENGUAJE DE NEGOCIO
- Metodología para extraer los beneficios de negocio de los resultados técnicos de investigación
- Cómo describir la innovación sin jerga científica pero sin perder precisión
- Técnica del "¿y qué?" (So What?): conectar cada resultado técnico con un beneficio concreto para el interlocutor
- Elaboración del elevator pitch del proyecto de innovación para distintas audiencias
- Creación de analogías y metáforas que hagan comprensible lo complejo

2. MAPA DE AUDIENCIAS Y MENSAJES DIFERENCIADOS
Define los mensajes clave para cada audiencia:
- Inversores y fondos de capital riesgo: foco en mercado potencial, ventaja diferencial y retorno esperado
- Clientes potenciales: foco en el problema que resuelve y los beneficios tangibles que aporta
- Medios de comunicación generalistas: ángulo de interés público, novedad e impacto social
- Medios especializados: detalle técnico, rigor metodológico y comparativa con el estado del arte
- Empleados y equipo interno: orgullo de pertenencia, significado del trabajo y contexto estratégico
- Administración pública y entidades financiadoras: impacto socioeconómico y alineación con políticas de innovación

3. ESTRATEGIA DE CONTENIDOS PARA PROYECTOS DE I+D
- Plan editorial para comunicar el progreso de un proyecto de innovación durante su desarrollo
- Tipos de contenido: white papers, casos de estudio, vídeos de demostración, infografías de resultados
- Estrategia de visibilidad en publicaciones científicas y su impacto comercial
- Comunicación de hitos del proyecto: cómo generar expectativa e interés en cada etapa
- Gestión de la confidencialidad: qué se puede comunicar y qué debe permanecer reservado hasta la patente

4. RELACIONES CON MEDIOS E INFLUENCIADORES DEL SECTOR
- Cómo construir relaciones con periodistas especializados en tecnología e innovación
- Notas de prensa para resultados de investigación: estructura y enfoque para maximizar la cobertura
- Estrategia de participación en congresos, hackathons y premios de innovación
- Colaboración con influenciadores y thought leaders del sector tecnológico

5. MÉTRICAS DE IMPACTO COMUNICATIVO
- KPIs de comunicación adaptados a proyectos de innovación (no solo alcance, sino comprensión y acción)
- Seguimiento de la reputación de innovación de la empresa en medios y redes
- Impacto de la comunicación de I+D en las conversaciones comerciales y la generación de leads
- Evaluación de la percepción de innovación entre clientes actuales y potenciales

Indícame el tipo de innovación (producto, proceso, tecnología), el sector de aplicación, el estado actual del proyecto y el objetivo principal de la comunicación (financiación, comercialización, talento, reputación).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de comunicación y posicionamiento para proyectos de innovación y resultados de R+D',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'IA para gestionar sprints de investigación y desarrollo tecnológico',
                'description'      => 'Adapta las metodologías ágiles para gestionar proyectos de investigación y desarrollo tecnológico, equilibrando la exploración científica con la entrega de resultados medibles en iteraciones cortas.',
                'prompt_content'   => <<<'EOT'
Actúa como un gestor de proyectos de I+D con experiencia combinando metodologías ágiles (Scrum, Kanban) con la naturaleza no lineal y exploratoria de la investigación y el desarrollo tecnológico, habiendo trabajado en equipos de investigación aplicada en empresas y centros de innovación.

Necesito tu ayuda para diseñar un marco de gestión ágil adaptado a proyectos de investigación y desarrollo tecnológico donde la incertidumbre es elevada y los resultados no siempre son predecibles.

Desarrolla la guía en los siguientes módulos:

1. ADAPTACIÓN DE SCRUM PARA PROYECTOS DE R+D
Define cómo adaptar los elementos de Scrum al contexto de investigación:
- Sprints de investigación vs. sprints de desarrollo: diferentes objetivos, diferentes dinámicas
- Definición de "done" en proyectos de I+D: cómo medir el progreso cuando el resultado es incierto
- Product Backlog de investigación: cómo priorizar hipótesis, experimentos y líneas de trabajo
- Sprint Goal en R+D: cómo formular el objetivo del sprint cuando la investigación puede tomar caminos inesperados
- Retrospectivas de investigación: qué preguntas son más útiles cuando el sprint fue exploración pura

2. GESTIÓN DE LA INCERTIDUMBRE Y EL RIESGO TÉCNICO
- Taxonomía de la incertidumbre en I+D: incertidumbre de mercado, técnica, de recursos, de regulación
- Técnica de los spikes o experimentos de investigación: cómo acudir a la experimentación para reducir la incertidumbre
- Gestión de los puntos de pivot: cuándo cambiar de dirección y cómo documentar la decisión
- Indicadores de alerta temprana que señalan que una línea de investigación no es viable
- Gestión del riesgo de dependencias externas: universidades, proveedores de tecnología, organismos reguladores

3. PLANIFICACIÓN DE PROYECTOS DE I+D A LARGO PLAZO
- Estructura del proyecto en fases: desde la exploración conceptual hasta el prototipo funcional
- Técnica de la planificación rodante: cómo planificar con detalle el corto plazo y en alto nivel el largo plazo
- Gestión del presupuesto de I+D con la flexibilidad que requiere la investigación
- Coordinación con proyectos subvencionados: cómo integrar los hitos de justificación con la gestión ágil
- Reporting para dirección y financiadores: cómo comunicar el avance cuando el resultado es una hipótesis validada o descartada

4. HERRAMIENTAS Y TECNOLOGÍA PARA LA GESTIÓN DE I+D
- Plataformas de gestión de proyectos adaptadas a I+D: Jira, Linear, Notion, herramientas específicas
- Gestión del conocimiento generado: cuadernos de laboratorio digitales, wikis de investigación, gestión de datos experimentales
- Herramientas de colaboración para equipos de investigación distribuidos
- Integración de IA en el proceso de investigación: búsqueda de literatura, análisis de datos, generación de hipótesis

5. INDICADORES DE AVANCE Y ÉXITO EN PROYECTOS DE I+D
- KPIs de proceso: velocidad de experimentación, ratio de hipótesis validadas vs. descartadas, tiempo de ciclo
- KPIs de resultado: IP generada, publicaciones, prototipos funcionales, tecnologías transferidas
- Indicadores de salud del equipo: carga de trabajo, diversidad de líneas de investigación, colaboraciones externas
- Métricas de transferencia: tiempo desde el resultado de investigación hasta la aplicación comercial

Indícame el tipo de proyecto de R+D (investigación básica, investigación aplicada, desarrollo de prototipo, validación de concepto), el tamaño del equipo y el plazo del proyecto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Metodologías ágiles adaptadas a la gestión de proyectos de investigación y desarrollo tecnológico',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'IA para el diseño centrado en el usuario en proyectos de innovación',
                'description'      => 'Integra metodologías de design thinking y UX research en el proceso de innovación para garantizar que los proyectos de R+D respondan a necesidades reales y generen soluciones adoptables.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador UX especializado en la integración de metodologías centradas en el usuario dentro de procesos de innovación y proyectos de R+D, con experiencia trabajando en la intersección entre el equipo de investigación técnica y el usuario final para garantizar que las innovaciones sean relevantes y adoptables.

Necesito tu ayuda para incorporar el diseño centrado en el usuario en un proyecto de innovación o R+D, desde las etapas más tempranas de investigación hasta la validación del prototipo.

Desarrolla una metodología práctica en los siguientes módulos:

1. INVESTIGACIÓN DE USUARIO EN EL CONTEXTO DE LA INNOVACIÓN
- Cuándo incorporar al usuario en el proceso de innovación: antes, durante y después de la investigación técnica
- Métodos de investigación cualitativa para proyectos de innovación: entrevistas contextuales, observación etnográfica, shadowing
- Identificación de necesidades latentes: lo que los usuarios no saben que necesitan pero sí sienten como problema
- Integración de datos de usuario con los datos técnicos en el proceso de toma de decisiones de I+D
- Gestión de la confidencialidad del proyecto durante la investigación de usuario

2. DESIGN THINKING APLICADO A LA INNOVACIÓN TECNOLÓGICA
Define el proceso de diseño adaptado a proyectos de R+D:
- Empatizar: técnicas de inmersión en el contexto del usuario para investigadores técnicos
- Definir: cómo reformular la declaración del problema desde la perspectiva del usuario
- Idear: talleres de ideación que integran investigadores técnicos y usuarios finales
- Prototipar: tipos de prototipo según la madurez tecnológica (papel, digital, funcional)
- Testear: protocolos de prueba de usuario para innovaciones tecnológicas en fases tempranas

3. EVALUACIÓN DE USABILIDAD Y ADOPCIÓN DE INNOVACIONES
- Metodología de pruebas de usabilidad para prototipos tecnológicos en fases de I+D
- Escala de Usabilidad del Sistema (SUS) y su aplicación en evaluaciones de prototipos
- Barreras de adopción: cómo identificar y mitigar los factores que impiden la adopción de la innovación
- Evaluación de la curva de aprendizaje: diseño para la facilidad de adopción desde el primer uso
- Pruebas de campo y pilotos controlados: diseño, ejecución y análisis de resultados

4. INTEGRACIÓN DE DISEÑO E INVESTIGACIÓN EN EL EQUIPO DE INNOVACIÓN
- Cómo incorporar un perfil de diseño en un equipo de investigación técnica
- Rituales de colaboración entre diseñadores e investigadores: design sprints adaptados a I+D
- Herramientas compartidas: tableros de investigación de usuario accesibles para todo el equipo técnico
- Cómo traducir los hallazgos de usuario en requisitos funcionales y técnicos del sistema
- Gestión de las tensiones entre lo técnicamente posible y lo que el usuario realmente necesita

5. DOCUMENTACIÓN Y TRANSFERENCIA DEL CONOCIMIENTO DE USUARIO
- Artefactos de diseño que sirven a lo largo de todo el proyecto: personas, journey maps, escenarios de uso
- Cómo integrar el knowledge de usuario en la documentación técnica del proyecto
- Herramientas para mantener el repositorio de investigación de usuario actualizado
- Transferencia del conocimiento al equipo comercial cuando el proyecto pasa a la fase de go-to-market

Indícame el tipo de innovación, el estado actual del proyecto (ideación, prototipo, validación), el perfil del usuario final y si tienes ya algún dato de investigación de usuario disponible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Design thinking y UX research integrados en proyectos de innovación y R+D',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'IA para comercializar productos resultantes de proyectos de I+D',
                'description'      => 'Diseña la estrategia go-to-market para lanzar al mercado productos o tecnologías desarrolladas en proyectos de investigación y desarrollo, gestionando el salto del laboratorio al cliente.',
                'prompt_content'   => <<<'EOT'
Actúa como un director comercial especializado en la comercialización de tecnologías innovadoras y productos resultantes de proyectos de I+D, con experiencia en el proceso de transferencia tecnológica desde el laboratorio hasta el mercado, incluyendo la gestión de la brecha entre la madurez tecnológica y la preparación del mercado.

Necesito tu ayuda para diseñar la estrategia go-to-market de un producto o tecnología que surge de un proyecto de I+D.

Estructura el plan en los siguientes bloques:

1. EVALUACIÓN DE MADUREZ Y PREPARACIÓN PARA EL MERCADO
- Escala TRL (Technology Readiness Level): en qué nivel está la tecnología y qué falta para llegar al mercado
- Escala MRL (Market Readiness Level): evaluación de la preparación del mercado para adoptar la innovación
- Análisis de la brecha entre capacidad técnica actual y requisitos del mercado
- Criterios de go/no-go para iniciar la comercialización: qué debe estar resuelto antes de vender
- Gestión de expectativas: cómo comunicar el estado real de la tecnología a clientes early adopter

2. IDENTIFICACIÓN Y SELECCIÓN DE LOS PRIMEROS CLIENTES
- Técnica de los innovadores y early adopters: dónde encontrarlos y cómo calificarlos
- Perfil del cliente ideal para una tecnología en fase de comercialización temprana: tolerancia al riesgo, capacidad de co-desarrollo, presupuesto de innovación
- Estrategia de primeros clientes de referencia: quién debe ser el primero y por qué importa tanto
- Programas de beta customers: estructura del acuerdo, beneficios para el cliente y compromisos del proveedor
- Sectores de entrada vs. sectores de expansión: cómo elegir dónde empezar y cuándo expandirse

3. PROPUESTA DE VALOR Y MODELO DE NEGOCIO
- Cómo construir la propuesta de valor cuando la tecnología todavía no tiene histórico de rendimiento en mercado
- Modelos de negocio alternativos para la comercialización de I+D: licencias, joint ventures, spin-offs, ventas directas
- Pricing de innovación: cómo fijar el precio cuando no hay referencia de mercado comparable
- Estructura del contrato con los primeros clientes: pilotos pagados, acuerdos de co-desarrollo, contratos con cláusulas de desempeño

4. PROCESO DE VENTA PARA TECNOLOGÍAS INNOVADORAS
- Ciclo de venta largo: cómo gestionar procesos de 6 a 18 meses sin agotar al equipo comercial
- Gestión de los distintos perfiles en el comité de compra de innovación: campeón interno, dirección, técnicos, finanzas
- Educación del mercado: cómo crear demanda cuando el cliente no sabe que el problema tiene solución
- Gestión de pilotos y pruebas de concepto: diseño, métricas de éxito y conversión a contrato
- Manejo de objeciones específicas de la innovación: "ya lo hemos intentado con otra tecnología", "¿tenéis referencias?"

5. ESCALADO Y CRECIMIENTO COMERCIAL
- Criterios para pasar de los primeros clientes al escalado comercial
- Construcción del equipo comercial para vender innovación: perfil, formación y compensación
- Estrategia de canal: cuándo y cómo trabajar con distribuidores, integradores o partners tecnológicos
- Métricas del embudo comercial para tecnologías innovadoras: de pipeline a ARR

Indícame el tipo de tecnología o producto, el sector de aplicación, el TRL actual y si ya tenéis algún cliente interesado o en conversaciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estrategia go-to-market para la comercialización de tecnologías y productos resultantes de I+D',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'IA para gestionar el roadmap de innovación y proyectos de R+D',
                'description'      => 'Diseña y gestiona el roadmap de innovación de una organización, priorizando proyectos de R+D según el impacto estratégico, la viabilidad técnica y los recursos disponibles.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de innovación (Chief Innovation Officer) con experiencia diseñando y ejecutando estrategias de innovación en empresas de distintos sectores, gestionando portfolios de proyectos de R+D que van desde la innovación incremental hasta la innovación disruptiva.

Necesito tu ayuda para diseñar y gestionar el roadmap de innovación de mi organización, asegurando que el portfolio de proyectos de R+D esté alineado con la estrategia de negocio y sea gestionable con los recursos disponibles.

Desarrolla una metodología completa en los siguientes bloques:

1. DIAGNÓSTICO DE LA CAPACIDAD DE INNOVACIÓN
Evalúa el punto de partida antes de diseñar el roadmap:
- Inventario de proyectos de innovación en curso: tipología, estado, recursos asignados y resultados esperados
- Capacidades internas de innovación: talento técnico, presupuesto de R+D, infraestructura y cultura
- Análisis de la brecha de innovación: dónde estás vs. donde necesitas estar para ser competitivo en 3-5 años
- Benchmarking de innovación: qué están haciendo los competidores directos e indirectos
- Evaluación de las fuentes de innovación: interna, open innovation, universidades, startups, adquisiciones

2. DISEÑO DEL PORTFOLIO DE INNOVACIÓN
Define la estructura del portfolio de proyectos de R+D:
- Modelo de las tres horizontes de McKinsey: equilibrio entre optimización del negocio actual, nuevos negocios y opciones futuras
- Matriz de priorización: impacto estratégico vs. viabilidad técnica vs. recursos necesarios
- Tipología de proyectos: incremental, adyacente y disruptivo — cuánto invertir en cada tipo
- Gestión de la incertidumbre: cómo distribuir el riesgo a través del portfolio
- Criterios de entrada y salida de proyectos: cuándo iniciar un proyecto y cuándo matarlo

3. DISEÑO DEL ROADMAP DE INNOVACIÓN
- Estructura del roadmap: plazos, hitos, entregables y puntos de decisión (stage gates)
- Sincronización del roadmap de innovación con el roadmap de producto y la estrategia de negocio
- Gestión de las dependencias entre proyectos de R+D
- Comunicación del roadmap a distintos niveles: dirección, equipo técnico, equipo comercial
- Proceso de revisión y actualización trimestral del roadmap

4. GOVERNANCE Y TOMA DE DECISIONES DE INNOVACIÓN
- Estructura de governance: comité de innovación, revisiones de portfolio, decisiones de financiación
- Proceso de stage gate: cómo evaluar el avance de los proyectos y tomar decisiones de continuación
- Gestión del presupuesto de R+D: distribución entre proyectos, gestión de imprevistos y reasignación dinámica
- Mecanismos de aprendizaje organizacional: cómo convertir los fracasos de innovación en conocimiento

5. INDICADORES DE GESTIÓN DEL PORTFOLIO DE INNOVACIÓN
Define el cuadro de mando de innovación:
- Indicadores de input: inversión en R+D, número de proyectos activos, talento dedicado a innovación
- Indicadores de proceso: velocidad de iteración, tiempo de ciclo de experimentos, tasa de proyectos completados en plazo
- Indicadores de output: patentes, prototipos, tecnologías transferidas a producto, papers publicados
- Indicadores de impacto: porcentaje de facturación procedente de innovaciones recientes, nuevos mercados abiertos, ventaja competitiva creada

Indícame el tamaño de la empresa, el sector, el presupuesto aproximado disponible para innovación y los principales retos estratégicos que la organización debe resolver con la innovación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseño y gestión del roadmap y portfolio de proyectos de innovación y R+D',
                'vote_score'       => 49,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'IA para gestionar equipos multidisciplinares en proyectos de innovación',
                'description'      => 'Diseña estrategias de gestión de personas y equipos para proyectos de innovación que integran perfiles técnicos, creativos y de negocio, maximizando la colaboración y el rendimiento colectivo.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de RRHH especializado en la gestión de talento para equipos de innovación y R+D, con experiencia en la formación, coordinación y retención de equipos multidisciplinares que integran ingenieros, científicos, diseñadores y perfiles de negocio en entornos de alta incertidumbre y cambio continuo.

Necesito tu ayuda para diseñar una estrategia de gestión de personas para los equipos de innovación de mi organización.

Estructura la propuesta en los siguientes módulos:

1. DISEÑO DEL EQUIPO DE INNOVACIÓN
Define la composición y estructura óptima del equipo:
- Perfiles clave en un equipo de innovación: investigador técnico, diseñador, gestor de proyectos, experto de negocio, data scientist
- Tamaño óptimo del equipo: evidencia sobre la productividad de los equipos de I+D (ley de Brooks aplicada a la innovación)
- Estructura organizativa: equipos dedicados vs. equipos matriciales vs. laboratorios de innovación independientes
- Diversidad cognitiva: cómo la diversidad de formaciones y experiencias acelera la innovación
- Integración de recursos externos: colaboración con universidades, startups, consultoras especializadas

2. CAPTACIÓN Y SELECCIÓN DE TALENTO PARA INNOVACIÓN
- Perfil del innovador: qué competencias predicen el rendimiento en proyectos de I+D
- Proceso de selección: entrevistas por competencias, pruebas técnicas, evaluación de la creatividad y la tolerancia a la ambigüedad
- Propuesta de valor al talento de innovación: qué buscan los investigadores y tecnólogos más allá del salario
- Estrategias de captación: universidades, congresos científicos, comunidades open source, redes de alumni

3. GESTIÓN DEL RENDIMIENTO EN EQUIPOS DE I+D
- Evaluación del desempeño adaptada a la naturaleza de la investigación: cómo valorar el trabajo cuando el resultado es incierto
- Objetivos OKR para equipos de innovación: cómo escribir OKRs que inspiren sin encorsetar la exploración
- Feedback continuo en contextos de alta incertidumbre: frecuencia, formato y enfoque
- Gestión de los diferentes ritmos de trabajo entre perfiles técnicos y de negocio

4. RETENCIÓN Y MOTIVACIÓN DEL TALENTO DE INNOVACIÓN
- Factores de motivación específicos de investigadores y tecnólogos: autonomía, maestría, propósito
- Diseño del plan de carrera en innovación: rutas técnicas y rutas de gestión
- Beneficios y compensación variable adaptada al perfil innovador: participación en patentes, bonus por resultados de R+D
- Gestión de la frustración en proyectos que no llegan a buen término: cómo mantener el compromiso del equipo cuando un proyecto se cancela

5. CULTURA DE INNOVACIÓN Y APRENDIZAJE CONTINUO
- Indicadores de una cultura de innovación real: seguridad psicológica, tolerancia al fracaso, velocidad de experimentos
- Rituales organizativos que refuerzan la cultura innovadora: hackathons, innovation days, show & tell, kill your darlings
- Gestión del conocimiento generado: cómo evitar que el aprendizaje se vaya con las personas
- Programa de formación continua para equipos de innovación: tendencias tecnológicas, metodologías de innovación, skills de negocio

Indícame el tamaño del equipo de innovación, el sector de la empresa, si los proyectos son más de investigación básica o de desarrollo aplicado, y cuál es el principal reto de personas que enfrentas actualmente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestión de talento y equipos multidisciplinares en proyectos de innovación y R+D',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'IA para la gestión financiera y presupuestaria de proyectos de R+D',
                'description'      => 'Diseña el modelo financiero y el sistema de control presupuestario para proyectos de investigación y desarrollo, incluyendo la gestión de subvenciones, deducciones fiscales y la medición del ROI de la innovación.',
                'prompt_content'   => <<<'EOT'
Actúa como un director financiero especializado en la gestión económica de departamentos de innovación y proyectos de R+D, con experiencia en la planificación presupuestaria de la inversión en investigación, la gestión de subvenciones públicas (CDTI, Horizon Europe, fondos FEDER), las deducciones fiscales por I+D+i y la medición del retorno económico de la innovación.

Necesito tu ayuda para diseñar el modelo financiero y el sistema de control de gestión para los proyectos de R+D de mi organización.

Estructura el análisis y las recomendaciones en los siguientes bloques:

1. ESTRUCTURA FINANCIERA DE UN PROYECTO DE R+D
Define los componentes de coste y su tratamiento contable:
- Costes directos del proyecto: personal investigador, materiales, equipamiento, subcontrataciones, viajes
- Costes indirectos o generales: cómo imputar los costes de estructura a los proyectos de I+D
- Activación vs. gasto de los costes de I+D: criterios del Plan General Contable español y las NIIF
- Tratamiento contable del inmovilizado intangible generado internamente en proyectos de R+D
- Amortización de los activos intangibles resultantes de la investigación

2. PRESUPUESTACIÓN DE LA INVERSIÓN EN I+D
- Metodología de presupuestación: bottom-up desde los proyectos vs. top-down desde el porcentaje sobre ventas
- Planificación plurianual de la inversión en I+D: horizonte de 3 a 5 años con escenarios
- Gestión de la incertidumbre presupuestaria en proyectos de investigación
- Proceso de aprobación de presupuesto de I+D: governance financiero y criterios de priorización
- Flexibilidad presupuestaria: mecanismos para reasignar recursos entre proyectos según el avance

3. GESTIÓN DE FINANCIACIÓN PÚBLICA Y SUBVENCIONES
- Mapas de financiación: ayudas CDTI (IDi, Neotec, Cervera), Horizon Europe, PERTE, fondos autonómicos
- Proceso de solicitud de subvenciones: elegibilidad de costes, documentación requerida y plazos
- Control de costes justificables: qué gastos son elegibles y cómo documentarlos correctamente
- Justificación técnica y económica de subvenciones: plazos, formatos y riesgos de reintegro
- Gestión de la auditoria de subvenciones: preparación, documentación y respuesta a observaciones

4. DEDUCCIONES FISCALES POR I+D+i
- Deducción por actividades de I+D en el Impuesto sobre Sociedades: base deducible, porcentajes y límites
- Diferencia entre I+D e Innovación Tecnológica a efectos fiscales: criterios y documentación
- Informes motivados vinculantes del Ministerio de Ciencia: qué son y cuándo solicitarlos
- Monetización de las deducciones: aplicación en la cuota, abono anticipado y cesión a entidades financieras
- Cumplimiento normativo: documentación técnica y económica para soportar la deducción ante inspección

5. MEDICIÓN DEL ROI DE LA INNOVACIÓN
- Metodologías para medir el retorno de la inversión en I+D: ROI financiero, ROI estratégico, opciones reales
- Indicadores de retorno a corto, medio y largo plazo: desde el coste por experimento hasta el impacto en la cuenta de resultados
- Valoración de activos intangibles generados: patentes, know-how, tecnologías propietarias
- Reporting financiero de la innovación para el consejo de administración e inversores

Indícame el volumen de inversión en I+D anual, si ya utilizáis financiación pública o deducciones fiscales, y si los proyectos son de investigación básica, aplicada o desarrollo tecnológico para personalizar las recomendaciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestión financiera, presupuestación y control de proyectos de I+D con subvenciones y deducciones fiscales',
                'vote_score'       => 50,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'IA para la protección de propiedad intelectual en proyectos de I+D',
                'description'      => 'Diseña una estrategia de propiedad intelectual para proteger los resultados de proyectos de investigación y desarrollo: patentes, secretos comerciales, modelos de utilidad y derechos de autor sobre software.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en propiedad intelectual e industrial con experiencia asesorando a empresas tecnológicas, startups, centros de investigación y departamentos de I+D en la protección de sus innovaciones mediante patentes, modelos de utilidad, secretos comerciales y derechos de autor sobre software.

Necesito tu ayuda para diseñar una estrategia de propiedad intelectual (PI) para los resultados de innovación y R+D de mi organización.

Desarrolla la estrategia en los siguientes apartados:

1. DIAGNÓSTICO DEL PORTFOLIO DE PROPIEDAD INTELECTUAL
Evalúa el estado actual antes de proteger lo nuevo:
- Inventario de activos de PI existentes: patentes vigentes, modelos de utilidad, marcas, derechos de autor
- Identificación de innovaciones no protegidas que podrían estar en riesgo de divulgación o copia
- Análisis de la cadena de titularidad: quién es el inventor, quién es el titular y si hay conflictos potenciales
- Evaluación del valor económico de la PI existente: royalties potenciales, barreras competitivas, valor en M&A

2. ESTRATEGIA DE PATENTES PARA PROYECTOS DE I+D
Define el proceso de identificación y protección de invenciones:
- Protocolo de divulgación de invenciones (Invention Disclosure): qué debe documentar el equipo técnico y cuándo
- Análisis de patentabilidad: novedad, actividad inventiva y aplicabilidad industrial — cómo evaluarlos antes de invertir
- Estrategia de filing: patente española, PCT, EPO, USPTO — cuándo usar cada vía y en qué orden
- Timing crítico: la regla de los 12 meses y la importancia de patentar antes de publicar o presentar en congresos
- Reivindicaciones: cómo definirlas para maximizar el alcance de la protección
- Gestión del portfolio de patentes: mantenimiento, extensión geográfica y decisiones de abandono

3. SECRETOS COMERCIALES Y KNOW-HOW
- Cuándo es mejor el secreto comercial que la patente: análisis de la decisión
- Medidas técnicas y organizativas para proteger el know-how: control de acceso, NDAs, segmentación de la información
- Cláusulas de confidencialidad en contratos con empleados, colaboradores y socios de I+D
- Gestión de la información en proyectos de I+D colaborativos: qué compartir y qué mantener protegido
- Documentación del secreto comercial: cómo demostrar su existencia y titularidad ante un tribunal

4. PROPIEDAD INTELECTUAL EN PROYECTOS DE I+D COLABORATIVOS
- Acuerdos de consorcio en proyectos con múltiples participantes: titularidad compartida y licencias cruzadas
- Contratos de I+D con universidades y centros tecnológicos: propiedad de los resultados, publicaciones y explotación
- Gestión de la PI en proyectos financiados con fondos públicos (CDTI, Horizon Europe): obligaciones de acceso abierto
- Acuerdos de colaboración con startups: cómo proteger la PI de ambas partes durante el proceso de innovación abierta

5. VALORACIÓN Y EXPLOTACIÓN COMERCIAL DE LA PI
- Métodos de valoración de activos intangibles: coste, mercado, ingresos (royalty relief)
- Modelos de explotación: licencias exclusivas, no exclusivas, cross-licensing, venta de patentes
- PI como activo financiero: cómo usar las patentes como garantía o para atraer inversión
- Defensa de la PI: estrategia ante la infracción de patentes, vigilancia tecnológica y monitorizacion de la competencia

Indícame el tipo de tecnología que desarrolláis, si hacéis proyectos en colaboración con terceros, y cuáles son los principales activos de PI que queréis proteger para que pueda orientar la estrategia.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Estrategia de propiedad intelectual para proteger los resultados de proyectos de I+D',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'IA para la transferencia de conocimiento y adopción de innovaciones en equipos',
                'description'      => 'Diseña procesos y estrategias para facilitar la adopción interna de innovaciones tecnológicas, gestionando la resistencia al cambio y acelerando la curva de aprendizaje de los equipos.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en gestión del cambio y transferencia de conocimiento, con experiencia ayudando a organizaciones a superar la resistencia interna y acelerar la adopción de innovaciones tecnológicas que surgen de proyectos de R+D o se incorporan desde el exterior.

Necesito tu ayuda para diseñar un proceso de transferencia de conocimiento y adopción de una innovación tecnológica en mi organización.

Desarrolla la metodología en los siguientes módulos:

1. DIAGNÓSTICO DE LA DISPOSICIÓN AL CAMBIO
Evalúa el punto de partida de la organización:
- Análisis de los stakeholders: quién apoya la innovación, quién es neutral y quién ofrece resistencia
- Identificación de las causas de la resistencia: miedo a la obsolescencia, falta de comprensión, sobrecarga de trabajo, desconfianza
- Evaluación de la capacidad de absorción de la organización: ¿tiene el equipo la base técnica para adoptar la innovación?
- Mapa de campeones internos: quién puede actuar como embajador de la innovación en cada área
- Historial de adopción de innovaciones previas: qué ha funcionado y qué no en esta organización

2. ESTRATEGIA DE COMUNICACIÓN PARA LA ADOPCIÓN
- Narrativa del cambio: cómo comunicar la innovación de forma que inspire en lugar de generar ansiedad
- Mensajes diferenciados por perfil: dirección, mandos intermedios, usuarios finales, equipo técnico
- Plan de comunicación por fases: anuncio, formación, piloto, despliegue completo
- Gestión de rumores e información incorrecta: cómo actuar cuando circulan versiones distorsionadas de la innovación
- Canales de comunicación bidireccional: cómo crear espacios donde el equipo pueda expresar dudas y miedos sin consecuencias

3. PLAN DE FORMACIÓN Y CAPACITACIÓN
Diseña el itinerario de aprendizaje para la adopción:
- Análisis de brechas de competencias: qué sabe el equipo y qué necesita saber para usar la innovación
- Diseño del plan de formación por niveles: usuario básico, usuario avanzado, súper usuario y administrador
- Formatos de aprendizaje adaptados a distintos perfiles: formación presencial, e-learning, microlearning, aprendizaje entre pares
- Estrategia de súper usuarios: cómo seleccionarlos, formarlos y empoderarlos para que apoyen a sus compañeros
- Métricas de aprendizaje: cómo saber si la formación está generando la competencia necesaria para la adopción

4. PILOTO CONTROLADO Y DESPLIEGUE GRADUAL
- Diseño del piloto: cómo seleccionar el equipo o área piloto, qué medir y durante cuánto tiempo
- Gestión del piloto: seguimiento, resolución de problemas y comunicación de resultados
- Criterios de éxito del piloto y decisión de escalado
- Plan de despliegue gradual: secuencia de expansión a otras áreas o equipos
- Gestión de los que se quedan atrás: cómo apoyar a las personas que tienen más dificultades en la adopción

5. CONSOLIDACIÓN Y SOSTENIBILIDAD DE LA ADOPCIÓN
- Métricas de adopción a seguir tras el despliegue: uso activo, profundidad de uso, satisfacción, productividad
- Plan de mejora continua basado en el feedback de los usuarios
- Actualización de procesos y procedimientos para integrar la innovación en el día a día
- Gestión de las actualizaciones futuras: cómo mantener al equipo actualizado a medida que la tecnología evoluciona
- Celebración de los hitos de adopción: cómo hacer visible el progreso y reconocer el esfuerzo del equipo

Indícame la innovación que quieres adoptar, el perfil y número de personas afectadas, y si ya has detectado resistencias específicas que quieras abordar en el plan.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Transferencia de conocimiento y gestión del cambio para la adopción interna de innovaciones tecnológicas',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA para consultores independientes de innovación y gestión de proyectos de R+D',
                'description'      => 'Estructura tu práctica de consultoría independiente en innovación: desde el posicionamiento y captación de proyectos hasta la metodología de trabajo y la gestión de la relación con clientes que buscan transformar su capacidad innovadora.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor senior de innovación que trabaja de forma independiente, con experiencia asesorando a empresas medianas y grandes en el diseño e implantación de sistemas de gestión de la innovación, la gestión de portfolios de proyectos de R+D y la transferencia tecnológica, habiendo gestionado proyectos financiados con fondos públicos nacionales y europeos.

Necesito tu ayuda para estructurar y hacer crecer mi práctica de consultoría independiente en innovación y gestión de proyectos de R+D.

Desarrolla una guía completa que incluya:

1. POSICIONAMIENTO Y ESPECIALIZACIÓN COMO CONSULTOR DE INNOVACIÓN
- Nichos de mayor demanda y menor competencia en la consultoría de innovación: gestión de la innovación, vigilancia tecnológica, open innovation, inteligencia artificial aplicada a R+D, innovación en modelos de negocio
- Cómo definir tu posicionamiento diferencial sin caer en el generalismo de "consultor de innovación"
- Credenciales que generan confianza: certificaciones (NPDP, CIPO), publicaciones, ponencias en eventos del sector
- Construcción de autoridad online: LinkedIn, blog técnico, newsletter sobre tendencias de innovación

2. CAPTACIÓN DE PROYECTOS Y DESARROLLO DE NEGOCIO
- Canales de captación específicos para la consultoría de innovación: organismos intermedios (Agencias de Innovación autonómicas, CDTI), asociaciones sectoriales, cátedras universitarias, redes de business angels
- Estrategia de prospección en empresas que están iniciando su journey de innovación: señales de que una empresa está lista para invertir en innovación
- Propuesta de entrada de bajo riesgo: workshops de diagnóstico, formaciones in-company, facilitation de sesiones de innovación como puerta de acceso a proyectos mayores
- Gestión de concursos y licitaciones de consultoría de innovación: cuándo participar y cómo diferenciarse

3. METODOLOGÍA DE TRABAJO Y ENTREGABLES
- Marco metodológico propio: cómo construir una metodología de consultoría que sea rigurosa y a la vez flexible
- Tipos de encargo más habituales: diagnóstico de madurez innovadora, diseño del sistema de gestión de la innovación, acompañamiento en la implantación, formación de equipos de innovación
- Estructura de los entregables: informes de diagnóstico, planes de innovación, guías de procesos, cuadros de mando
- Gestión de proyectos de consultoría: planificación, seguimiento del avance y gestión de cambios en el alcance
- Cómo involucrar al cliente en el proceso para asegurar la adopción de las recomendaciones

4. GESTIÓN DE PROYECTOS FINANCIADOS CON FONDOS PÚBLICOS
- Cómo posicionarte como consultor de referencia para la gestión de proyectos de R+D subvencionados
- Servicios relacionados con la financiación pública: identificación de convocatorias, redacción de solicitudes, gestión y justificación de ayudas
- Gestión de consorcios: cómo actuar como coordinador o gestor técnico de un proyecto colaborativo
- Cumplimiento de los requisitos de reporting y justificación ante organismos financiadores

5. CRECIMIENTO Y SOSTENIBILIDAD DE LA PRÁCTICA
- Modelo de ingresos diversificado: proyectos puntuales, retenciones mensuales, formaciones, licencias de metodología
- Fijación de honorarios para consultoría de innovación: benchmark del mercado y cómo defender tu tarifa
- Subcontratación y red de colaboradores: cuándo y cómo trabajar con otros expertos para proyectos mayores
- Gestión de la propiedad intelectual de tus metodologías: cómo proteger y monetizar tu know-how

Cuéntame en qué área de la innovación tienes más experiencia, si tienes ya clientes o estás empezando, y cuál es el principal obstáculo que encuentras para hacer crecer tu práctica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estructuración y crecimiento de una consultoría independiente en innovación y gestión de proyectos de R+D',
                'vote_score'       => 45,
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
