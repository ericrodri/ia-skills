<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills631Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id' => 1,
                'title' => 'Marketing de energía nuclear limpia con IA',
                'description' => 'Crea campañas de comunicación para posicionar la energía nuclear como solución limpia y segura, superando percepciones negativas del público.',
                'prompt_content' => <<<'EOT'
Actúa como un especialista en comunicación estratégica para el sector de la energía nuclear. Tu objetivo es ayudarme a diseñar una campaña de marketing y comunicación que posicione a la energía nuclear como una fuente limpia, segura y necesaria para la transición energética hacia la neutralidad de carbono.

Contexto del sector: La energía nuclear enfrenta importantes barreras de percepción pública heredadas de accidentes históricos como Chernóbil y Fukushima, a pesar de que la tecnología moderna de reactores de generación III y IV presenta niveles de seguridad radicalmente superiores. Al mismo tiempo, el debate sobre el cambio climático ha resituado a la energía nuclear como aliada imprescindible para lograr electricidad de baja huella de carbono de forma estable y predecible.

Tarea principal: Diseña una estrategia de comunicación completa para una empresa operadora de plantas nucleares o para una asociación sectorial que quiera mejorar la percepción pública en España o Latinoamérica.

Incluye los siguientes elementos en tu respuesta:

1. Análisis de audiencias: Define al menos cuatro segmentos clave (ciudadanos preocupados por el medio ambiente, políticos y reguladores, inversores institucionales, comunidades locales próximas a plantas) y describe sus miedos, creencias actuales y mensajes que pueden resonar con cada uno.

2. Mensajes clave: Redacta tres mensajes centrales que la campaña debe transmitir. Cada mensaje debe ser claro, verificable y capaz de desmontar un mito frecuente sobre la energía nuclear. Incluye datos cuantitativos reales sobre emisiones de CO₂ por kWh, tasa de mortalidad comparada con otras fuentes de energía y porcentaje de tiempo de operación.

3. Plan de contenidos: Propón un calendario editorial para tres meses con al menos dos piezas de contenido por semana. Especifica el formato (artículo de blog, infografía, vídeo corto, hilo de redes sociales, podcast), el canal de distribución y el objetivo de cada pieza.

4. Gestión de la controversia: Describe cómo responder ante una crisis de comunicación provocada por un incidente menor en una planta (por ejemplo, una alerta técnica sin consecuencias para la población). Proporciona un protocolo de comunicación de crisis en cinco pasos con plantillas de declaración inicial.

5. Métricas de éxito: Define cinco KPI para medir el impacto de la campaña a los seis meses, con sus valores de referencia de partida y los umbrales de éxito esperados.

6. Alianzas estratégicas: Sugiere al menos tres organizaciones o colectivos con los que aliarse para dar credibilidad al mensaje (por ejemplo, científicos climáticos, grupos de defensa del medio ambiente favorable a la nuclear, ingenieros de energía).

7. Adaptación digital: Explica cómo usar IA generativa para personalizar mensajes según el perfil de la audiencia en redes sociales, optimizar el rendimiento de anuncios pagados y analizar el sentimiento de las conversaciones online sobre energía nuclear en tiempo real.

Al finalizar, proporciona un resumen ejecutivo de una página que pueda presentarse a la dirección de la empresa para aprobar la inversión en la campaña.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 45,
                'use_case' => 'Estrategia de comunicación y marketing para el sector nuclear',
                'vote_score' => 38,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 2,
                'title' => 'Desarrollo de sistemas de monitoreo predictivo para plantas nucleares con IA',
                'description' => 'Diseña arquitecturas de software para supervisar en tiempo real los parámetros operacionales de reactores nucleares y anticipar fallos mediante modelos de IA.',
                'prompt_content' => <<<'EOT'
Actúa como un ingeniero de software especializado en sistemas críticos y machine learning aplicado al sector de la energía nuclear. Necesito tu ayuda para diseñar la arquitectura completa de un sistema de monitoreo predictivo para una planta nuclear de potencia.

Objetivo del sistema: Capturar, procesar y analizar en tiempo real los datos de sensores distribuidos a lo largo de la planta (temperatura, presión, flujo de refrigerante, vibración de bombas, niveles de radiación, etc.) para detectar anomalías, predecir fallos de equipos críticos y recomendar acciones preventivas a los operadores antes de que se produzca una degradación del rendimiento o un evento no deseado.

Requisitos técnicos y funcionales que debes cubrir:

1. Ingesta de datos: Describe cómo conectar el sistema a los protocolos industriales existentes en plantas nucleares (OPC-UA, Modbus, DNP3). Propón una arquitectura de streaming con Apache Kafka o alternativa equivalente para manejar miles de señales simultáneas con latencia inferior a 100 ms.

2. Preprocesamiento y feature engineering: Explica cómo limpiar señales ruidosas, detectar y tratar valores atípicos, y construir ventanas temporales deslizantes para alimentar los modelos predictivos. Indica qué librerías de Python son más adecuadas (pandas, tsfresh, tslearn, etc.).

3. Modelos de IA: Propón al menos tres enfoques de modelado complementarios: un modelo de detección de anomalías no supervisado (por ejemplo, Isolation Forest o Autoencoder LSTM), un modelo de predicción de tiempo hasta el fallo (Remaining Useful Life) con redes neuronales recurrentes, y un clasificador supervisado para categorizar el tipo de anomalía. Justifica la elección de cada uno.

4. Explicabilidad: Dado el entorno regulado de la energía nuclear, los operadores deben comprender por qué el sistema emite una alerta. Describe cómo integrar SHAP o LIME para generar explicaciones locales de las predicciones en lenguaje natural que se muestren en el panel de operaciones.

5. Infraestructura y seguridad: Define los requisitos de despliegue en entorno air-gapped (sin conexión a internet), con redundancia de servidores, cifrado de datos en reposo y en tránsito, y auditoría completa de todas las acciones del sistema. Menciona las normas aplicables (IEC 61513, IEEE 7-4.3.2).

6. Interfaz de operador: Describe el diseño funcional del dashboard que verán los operadores de sala de control, con indicadores semafóricos, tendencias históricas, lista de alertas priorizadas y acceso a las explicaciones del modelo.

7. Validación y certificación: Explica el proceso de validación del sistema antes de su puesta en operación real, incluyendo pruebas con datos históricos de fallos conocidos, auditoría de código y el papel del organismo regulador nuclear en la aprobación del software.

Proporciona también un esquema de la arquitectura en texto estructurado (tipo diagrama de bloques descrito con pseudocódigo o ASCII art) y una lista de las principales librerías y frameworks que compondrían el stack tecnológico.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 60,
                'use_case' => 'Arquitectura de software para monitoreo de plantas nucleares',
                'vote_score' => 42,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 3,
                'title' => 'Diseño de interfaces de sala de control para plantas nucleares con IA',
                'description' => 'Aplica principios de UX y visualización de datos para rediseñar los paneles de control de operadores en plantas de energía nuclear con apoyo de IA.',
                'prompt_content' => <<<'EOT'
Actúa como un diseñador de experiencia de usuario especializado en interfaces de sistemas críticos de seguridad (Human Factors Engineering). Necesito tu asistencia para rediseñar la interfaz de la sala de control de una planta nuclear, incorporando capacidades de IA que ayuden a los operadores a tomar mejores decisiones en condiciones normales y de emergencia.

Contexto del proyecto: La planta tiene una sala de control tradicional con cientos de indicadores físicos y pantallas diseñadas hace más de veinte años. El objetivo es migrar a una sala de control digital moderna que cumpla con los estándares NUREG-0700 (guía de factores humanos de la NRC de Estados Unidos) y la norma IEC 60964, integrando al mismo tiempo un asistente de IA que presente información relevante de forma proactiva.

Aspectos de diseño que debes abordar:

1. Jerarquía de información: Explica cómo organizar la información en tres niveles (estado global de la planta, sistemas principales, equipos individuales) para que el operador pueda pasar de una vista general a un detalle específico en el menor número de interacciones posible. Define qué datos deben ser siempre visibles y cuáles se consultan bajo demanda.

2. Visualización de datos en tiempo real: Describe las mejores prácticas para mostrar tendencias temporales de parámetros críticos (temperatura del reactor, presión del circuito primario, potencia generada) de forma que las desviaciones sean inmediatamente perceptibles. Menciona el uso de sparklines, escalas de color calibradas y bandas de tolerancia normativa.

3. Integración del asistente de IA: Diseña el concepto de interacción del operador con el módulo de IA. ¿Cómo se presentan las alertas predictivas sin generar alarma fatigue? ¿Cómo puede el operador pedir explicaciones al sistema con lenguaje natural? Propón el flujo de pantallas para una situación de alerta temprana.

4. Gestión de alarmas: Describe un sistema de priorización de alarmas basado en IA que reduzca el número de falsas alarmas y agrupe eventos relacionados en incidentes unificados. Indica cómo se visualizan las alarmas suprimidas y cómo el operador puede auditar las decisiones del algoritmo.

5. Diseño para condiciones de estrés: Los operadores pueden encontrarse en situaciones de alta presión durante transitorios o emergencias. Explica qué adaptaciones de diseño favorecen la legibilidad y la toma de decisiones rápidas: contraste, tamaño de fuente, reducción del ruido visual, guías de procedimiento integradas en pantalla.

6. Accesibilidad y ergonomía: Define la disposición física de las pantallas en la sala de control, la distancia de visión óptima, el uso de iluminación adaptativa y las consideraciones para operadores con visión reducida del color.

7. Pruebas con usuarios: Propón un protocolo de validación de la interfaz con operadores reales mediante simuladores de planta, incluyendo escenarios de prueba, métricas de rendimiento (tiempo de detección de anomalías, tasa de errores) y criterios de aceptación.

Entrega un documento de especificación de diseño estructurado con los apartados anteriores, más un listado de las herramientas de prototipado recomendadas para este tipo de proyectos (Figma, ANSYS medini, etc.).
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 50,
                'use_case' => 'UX y diseño de interfaces de control para plantas nucleares',
                'vote_score' => 31,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 4,
                'title' => 'Ventas de soluciones tecnológicas para el sector nuclear con IA',
                'description' => 'Elabora propuestas comerciales y estrategias de venta consultiva para ofrecer software de IA y servicios de ingeniería a operadores de plantas nucleares.',
                'prompt_content' => <<<'EOT'
Actúa como un consultor de ventas B2B especializado en tecnología para industrias reguladas y de alta criticidad. Necesito tu ayuda para desarrollar una estrategia de venta consultiva dirigida a operadores de plantas de energía nuclear que quieran adoptar soluciones de inteligencia artificial para mantenimiento predictivo, gestión de operaciones o cumplimiento regulatorio.

Contexto comercial: El ciclo de ventas en el sector nuclear es extremadamente largo (puede superar los dos años), los procesos de aprobación involucran a múltiples stakeholders (director de operaciones, director de ingeniería, responsable de seguridad nuclear, director financiero y comité de cumplimiento regulatorio) y cualquier software que toque sistemas relacionados con la seguridad debe pasar por validaciones rigurosas. Al mismo tiempo, el presupuesto disponible en grandes plantas es significativo y la presión por reducir costos de mantenimiento y extender la vida operativa de los reactores crea una ventana de oportunidad real.

Aspectos de la estrategia que debes desarrollar:

1. Identificación de oportunidades: Explica cómo mapear el mercado de plantas nucleares en España, Francia, Países Bajos y Argentina (como mercados clave de habla hispana e hispanófona). Describe qué fuentes de información públicas permiten identificar las necesidades actuales de cada planta (informes regulatorios, publicaciones del CSN, IAEA, etc.).

2. Perfil del comprador ideal: Define el ICP (Ideal Customer Profile) para una solución de mantenimiento predictivo basada en IA. ¿Qué características debe tener la planta? ¿Qué dolores específicos hacen que la inversión sea urgente para el comprador?

3. Proceso de calificación de leads: Diseña un cuestionario de discovery de diez preguntas para la primera llamada con el director de operaciones de una planta nuclear. El objetivo es evaluar el nivel de madurez digital de la planta, los sistemas de datos existentes y la disposición presupuestaria.

4. Propuesta de valor diferenciada: Redacta el argumento central de venta que justifica la inversión en IA frente a los métodos de mantenimiento preventivo tradicional. Incluye un ejemplo de cálculo simplificado del retorno de inversión basado en la reducción de paradas no planificadas y la extensión de vida de componentes clave.

5. Gestión de objeciones: Lista las cinco objeciones más frecuentes en este sector (ciberseguridad del sistema, validación regulatoria, integración con sistemas legacy, coste total de propiedad, resistencia interna al cambio) y proporciona argumentos detallados para responder a cada una.

6. Plan de cuenta: Describe cómo estructurar un plan de cuenta para una planta objetivo a lo largo de doce meses, desde el primer contacto hasta la firma del contrato piloto, especificando los hitos, las personas clave a involucrar en cada fase y las acciones de nurturing entre reuniones.

7. Herramientas de habilitación de ventas: Sugiere qué materiales de soporte debe preparar el equipo de marketing para apoyar el proceso de venta (white papers técnicos, casos de éxito, demos interactivas, certificaciones de seguridad disponibles).

Proporciona al final un ejemplo de correo electrónico de prospección fría dirigido al director de ingeniería de una planta nuclear española que haya publicado recientemente una licitación de servicios de mantenimiento.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 40,
                'use_case' => 'Estrategia comercial B2B para tecnología nuclear',
                'vote_score' => 29,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 5,
                'title' => 'Gestión de producto para software de monitoreo de plantas nucleares con IA',
                'description' => 'Define la hoja de ruta de producto para una solución de IA aplicada a la operación y mantenimiento de plantas de energía nuclear, considerando las restricciones regulatorias del sector.',
                'prompt_content' => <<<'EOT'
Actúa como un product manager senior con experiencia en software para industrias críticas reguladas. Necesito que me ayudes a construir la hoja de ruta de producto para los próximos dieciocho meses de una plataforma de inteligencia artificial destinada a operadores de plantas de energía nuclear.

Contexto del producto: La plataforma ya tiene un MVP funcional que incluye detección de anomalías en sensores de temperatura y presión del circuito primario de un reactor de agua a presión (PWR). Tenemos un cliente piloto (una planta en operación en Europa) y estamos en proceso de obtener la aprobación regulatoria. El equipo de producto tiene tres personas y el equipo de ingeniería cuenta con ocho desarrolladores.

Elementos que debes incluir en tu respuesta:

1. Revisión de la visión del producto: Redacta una declaración de visión de producto de dos párrafos que inspire al equipo y comunique claramente el impacto que la plataforma tendrá en la seguridad nuclear global y en la transición energética limpia.

2. Definición de horizontes estratégicos: Divide la hoja de ruta en tres horizontes (H1: próximos seis meses de optimización y certificación; H2: de seis a doce meses de expansión de funcionalidades; H3: de doce a dieciocho meses de nuevos mercados y modelos de negocio). Para cada horizonte, lista las iniciativas principales con su objetivo de negocio y métricas de éxito.

3. Priorización de funcionalidades: Usa el framework RICE (Reach, Impact, Confidence, Effort) para evaluar y ordenar las siguientes funcionalidades candidatas: extensión del monitoreo al circuito secundario, módulo de predicción del tiempo restante de vida de componentes, dashboard de cumplimiento regulatorio automatizado, integración con sistemas de gestión de mantenimiento (CMMS), y API pública para integradores de sistemas.

4. Gestión de deuda técnica y regulatoria: Explica cómo equilibrar en el backlog el trabajo de nuevas funcionalidades con las tareas de validación y documentación requeridas por los organismos reguladores nucleares (IAEA, CSN, ASN). Define un porcentaje orientativo de capacidad del equipo que debe reservarse para estas actividades.

5. Descubrimiento de producto en un entorno restringido: El acceso a los clientes finales (operadores de planta) es limitado por razones de seguridad. Describe métodos alternativos para obtener feedback de usuarios: simuladores de planta, entrevistas con expertos en retiro, revisión de incidentes documentados en la base de datos IAEA-IRS.

6. Métricas de producto: Define el North Star Metric de la plataforma y un cuadro de mando con cinco métricas de producto secundarias que el equipo revisará semanalmente.

7. Comunicación con stakeholders: Describe cómo presentar el estado de la hoja de ruta mensualmente a los inversores, al equipo directivo y al cliente piloto, adaptando el nivel de detalle y el lenguaje técnico a cada audiencia.

Entrega el resultado en un documento estructurado listo para ser compartido con el equipo directivo de la empresa.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 50,
                'use_case' => 'Hoja de ruta de producto para software nuclear con IA',
                'vote_score' => 33,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 6,
                'title' => 'Gestión del talento especializado en energía nuclear con IA',
                'description' => 'Diseña procesos de atracción, selección, formación y retención de profesionales altamente especializados para el sector de la energía nuclear.',
                'prompt_content' => <<<'EOT'
Actúa como un director de recursos humanos con experiencia en sectores de alta tecnología y seguridad crítica. El sector de la energía nuclear enfrenta una crisis de talento global: muchos operadores y técnicos senior están próximos a la jubilación y las universidades forman pocos graduados en ingeniería nuclear. Necesito tu ayuda para diseñar una estrategia integral de gestión del talento para una empresa operadora de plantas nucleares.

Desafíos específicos del sector que debes tener en cuenta: los procesos de habilitación de seguridad pueden tardar más de un año, la formación de un operador certificado requiere entre tres y cinco años de entrenamiento en simulador y planta real, el conocimiento tácito de los expertos senior es crítico y difícil de documentar, y la imagen del sector entre los jóvenes profesionales sigue siendo negativa.

Estrategia que debes desarrollar:

1. Análisis de la brecha de talento: Describe cómo realizar un inventario de competencias de la plantilla actual y proyectar las necesidades de personal a cinco y diez años, teniendo en cuenta las jubilaciones previstas y los planes de ampliación de la planta. Sugiere las herramientas de HR analytics e IA que pueden automatizar parte de este análisis.

2. Employer branding para el sector nuclear: Propón una estrategia de marca empleadora que atraiga a ingenieros jóvenes y perfiles STEM. ¿Qué mensajes conectan con la generación Z sobre seguridad, propósito medioambiental y desarrollo profesional? ¿En qué canales y eventos universitarios debe estar presente la empresa?

3. Proceso de selección: Diseña el flujo de selección para el puesto de operador de reactor de nivel inicial, desde la publicación de la oferta hasta la incorporación. Incluye qué pruebas técnicas y psicotécnicas son apropiadas para este perfil y cómo la IA puede apoyar la cribado de candidatos sin introducir sesgos.

4. Programa de transferencia de conocimiento: Dado el riesgo de pérdida de conocimiento tácito por jubilaciones, propón un programa estructurado de mentoring y captura de conocimiento que use entrevistas grabadas, wikis internas y modelos de IA tipo RAG (Retrieval-Augmented Generation) para que los técnicos junior puedan consultar la experiencia de los expertos incluso después de que se hayan jubilado.

5. Formación continua y simuladores: Describe cómo estructurar el plan de formación anual de los operadores, combinando formación en simulador de planta, e-learning, ejercicios de respuesta a emergencias y visitas a otras instalaciones. ¿Qué métricas de competencia deben certificarse anualmente?

6. Retención de talento crítico: Identifica los factores de fuga de los perfiles más escasos (físicos nucleares, especialistas en radioquímica, ingenieros de instrumentación y control) y propón un paquete de retención que combine compensación, desarrollo de carrera, flexibilidad y propósito.

7. Diversidad e inclusión: El sector nuclear tiene una subrepresentación histórica de mujeres y minorías. Propón tres iniciativas concretas para aumentar la diversidad en los procesos de selección y en los programas de desarrollo de liderazgo.

Incluye al final una plantilla de plan de acción anual con responsables, plazos y presupuesto orientativo para cada iniciativa.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 45,
                'use_case' => 'Estrategia de RRHH para operadoras de plantas nucleares',
                'vote_score' => 27,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 7,
                'title' => 'Análisis financiero de proyectos de energía nuclear con IA',
                'description' => 'Modela la viabilidad económica de proyectos de nueva construcción nuclear, extensión de vida de plantas existentes y desmantelamiento, usando IA como asistente analítico.',
                'prompt_content' => <<<'EOT'
Actúa como un analista financiero especializado en proyectos de infraestructura energética de gran escala. Necesito tu ayuda para construir un modelo de análisis financiero completo para evaluar la viabilidad económica de un proyecto de extensión de vida operativa de una central nuclear de 1.000 MW que actualmente tiene una licencia de operación que expira en doce años.

Contexto del proyecto: La planta fue construida hace treinta años, tiene los sistemas primarios en buen estado y el organismo regulador ha indicado que una extensión de veinte años adicionales sería técnicamente posible previa inversión en modernización de sistemas de instrumentación y control, reemplazo de generadores de vapor y mejoras de seguridad post-Fukushima. La inversión estimada de modernización oscila entre 800 millones y 1.200 millones de euros.

Estructura del análisis financiero que debes ayudarme a desarrollar:

1. Proyección de ingresos: Explica cómo modelar los ingresos durante los veinte años de extensión de vida, considerando diferentes escenarios de precio de la electricidad (base, alcista, bajista), el papel de los contratos de largo plazo (PPAs), los ingresos por capacidad y la posible integración de ingresos por venta de hidrógeno verde producido con electricidad nuclear en horas valle.

2. Estructura de costos operativos: Detalla las categorías de costos que deben incluirse en el modelo: combustible nuclear (uranio enriquecido), gestión de residuos radiactivos, mantenimiento ordinario y extraordinario, seguros nucleares, tasas regulatorias, costos de personal y provisiones para el fondo de desmantelamiento.

3. Inversión y depreciación: Describe cómo amortizar la inversión de modernización a lo largo del periodo de extensión de vida y qué tratamiento contable corresponde a los distintos componentes (activos de larga vida vs. componentes de ciclo corto de reemplazo).

4. Análisis de riesgo: Identifica los cinco principales riesgos financieros del proyecto (riesgo regulatorio, riesgo de mercado eléctrico, riesgo de sobrecoste de obras, riesgo de parada no planificada, riesgo político de cierre anticipado) y describe cómo cuantificarlos mediante análisis de sensibilidad y simulación de Montecarlo.

5. Métricas de rentabilidad: Calcula (con datos hipotéticos coherentes que tú elijas) el VAN, la TIR, el payback descontado y el LCOE (Levelized Cost of Energy) del proyecto. Interpreta los resultados y compáralos con los costos de referencia de otras tecnologías de generación (eólica offshore, solar + almacenamiento, gas natural con CCS).

6. Estructura de financiación: Propón una estructura de capital para el proyecto (proporción de deuda/capital propio, posibles instrumentos: bonos verdes, project finance, garantías de préstamo gubernamental) y calcula el WACC resultante bajo dos escenarios de rating crediticio de la empresa.

7. Presentación a inversores: Redacta el resumen ejecutivo financiero de dos páginas que presentarías a un comité de inversión para solicitar aprobación del proyecto, destacando los elementos diferenciadores que hacen atractiva la inversión nuclear frente a otras alternativas de infraestructura energética.

Proporciona fórmulas, supuestos clave y una tabla-resumen de las métricas de rentabilidad por escenario al final del documento.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 60,
                'use_case' => 'Modelado financiero para proyectos de extensión de vida nuclear',
                'vote_score' => 36,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 8,
                'title' => 'Cumplimiento regulatorio en energía nuclear con IA',
                'description' => 'Automatiza el seguimiento y la gestión del cumplimiento de requisitos regulatorios nucleares nacionales e internacionales usando inteligencia artificial.',
                'prompt_content' => <<<'EOT'
Actúa como un abogado especializado en derecho nuclear y regulación de instalaciones de seguridad crítica. Necesito tu asistencia para diseñar un sistema de gestión del cumplimiento regulatorio para una empresa operadora de plantas nucleares en España, que utilice inteligencia artificial para automatizar el seguimiento de obligaciones, la generación de informes y la detección temprana de desviaciones.

Marco regulatorio aplicable: La empresa está sujeta a la Ley 25/1964 sobre Energía Nuclear, el Reglamento de Instalaciones Nucleares y Radiactivas (RINR), las instrucciones técnicas complementarias del Consejo de Seguridad Nuclear (CSN), los convenios internacionales de la OIEA (IAEA) ratificados por España, y las directivas europeas en materia de seguridad nuclear (Directiva 2014/87/Euratom).

Áreas que debes cubrir en tu respuesta:

1. Inventario de obligaciones regulatorias: Describe cómo construir una base de datos estructurada de todos los requisitos aplicables, clasificados por fuente normativa, frecuencia de cumplimiento (diaria, mensual, anual, tras eventos), responsable interno y consecuencia del incumplimiento. ¿Cómo puede la IA mantener esta base de datos actualizada cuando cambia la normativa?

2. Sistema de alertas y recordatorios: Propón la lógica de un sistema de gestión de plazos que notifique a los responsables con antelación suficiente antes de fechas de entrega de informes al CSN, vencimientos de licencias de personal, revisiones periódicas de seguridad y pruebas preceptivas de sistemas de seguridad.

3. Generación automatizada de informes: Explica cómo usar IA generativa para redactar borradores de los informes periódicos obligatorios (informes de operación mensual, informe anual de seguridad, informes de eventos al CSN) a partir de los datos operacionales de la planta. ¿Qué supervisión humana es imprescindible antes de la presentación formal?

4. Gestión de no conformidades: Describe el flujo de trabajo para gestionar una no conformidad detectada durante una inspección interna o externa: apertura del expediente, análisis de causa raíz, plan de acción correctiva, verificación de la eficacia y cierre. ¿Cómo puede la IA priorizar las no conformidades por riesgo regulatorio?

5. Preparación para inspecciones del CSN: Propón un protocolo de preparación para inspecciones regulatorias que incluya simulacros internos, revisión de la documentación requerida, formación del personal que será entrevistado y gestión de las observaciones recibidas tras la inspección.

6. Monitoreo de jurisprudencia y cambios normativos: Describe cómo implementar un sistema de vigilancia normativa que use IA para monitorear el BOE, el Diario Oficial de la UE, las publicaciones del CSN y las guías de la IAEA, y que genere alertas cuando se publiquen cambios que puedan afectar a las obligaciones de la empresa.

7. Responsabilidad penal y civil nuclear: Explica el régimen de responsabilidad civil nuclear establecido por el Convenio de París y su implementación en el derecho español, y describe las mejores prácticas de documentación y cobertura de seguros para proteger a la empresa y a sus directivos ante posibles reclamaciones.

Entrega un esquema del sistema de gestión del cumplimiento con los módulos principales, las integraciones de datos requeridas y los roles de usuario.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 55,
                'use_case' => 'Sistema de compliance regulatorio para operadoras nucleares',
                'vote_score' => 34,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 9,
                'title' => 'Soporte técnico avanzado para sistemas digitales de plantas nucleares con IA',
                'description' => 'Diseña procesos de atención y resolución de incidencias para los sistemas informáticos y de control digital que soportan la operación de plantas de energía nuclear.',
                'prompt_content' => <<<'EOT'
Actúa como un responsable de soporte técnico con experiencia en sistemas de control industrial y tecnología de la información para instalaciones nucleares. Necesito tu ayuda para diseñar los procesos, protocolos y herramientas de soporte técnico de los sistemas digitales que dan apoyo a la operación de una planta nuclear, garantizando la máxima disponibilidad y el cumplimiento de los requisitos de ciberseguridad nuclear.

Sistemas en el alcance del soporte: sistema de monitoreo del núcleo del reactor, sistemas de instrumentación y control digital, red de comunicaciones de planta, sistemas de gestión de documentación técnica, plataforma de mantenimiento asistido por IA, simulador de entrenamiento de operadores y sistemas de gestión de la seguridad radiológica.

Aspectos que debes cubrir en tu diseño:

1. Organización del equipo de soporte: Define los niveles de soporte (L1, L2, L3 y soporte de fabricante), las habilidades requeridas en cada nivel, los horarios de cobertura (24/7 para sistemas críticos) y los acuerdos de nivel de servicio (SLA) para cada categoría de incidencia (crítica, alta, media, baja) en función del impacto en la seguridad y la operación de la planta.

2. Clasificación de incidencias: Diseña una taxonomía de incidencias adaptada al entorno nuclear, distinguiendo entre incidencias de disponibilidad (el sistema no responde), incidencias de integridad (datos incorrectos o corruptos), incidencias de ciberseguridad (acceso no autorizado, anomalía de tráfico de red) e incidencias de rendimiento (degradación sin pérdida de función). Para cada tipo, define el protocolo de escalado.

3. Gestión de cambios en entorno regulado: Los sistemas que afectan a funciones de seguridad nuclear no pueden modificarse sin un proceso de gestión del cambio aprobado. Describe el proceso completo: solicitud de cambio, análisis de impacto en la seguridad, validación en banco de pruebas, aprobación por el responsable de seguridad nuclear, ventana de implantación y verificación post-implantación.

4. Ciberseguridad nuclear: Describe las medidas específicas de seguridad informática que deben aplicarse en el entorno de una planta nuclear siguiendo las guías del CSN y la norma NEI 08-09. ¿Cómo gestionaría el equipo de soporte una alerta de intrusión en la red de control digital? Proporciona un protocolo de respuesta a incidentes de ciberseguridad en ocho pasos.

5. Uso de IA en el soporte técnico: Explica cómo implementar un asistente de IA para el equipo de soporte que pueda buscar en la base de conocimiento de incidencias pasadas, sugerir soluciones basadas en síntomas similares, generar borradores de informes de incidencia y escalar automáticamente los tickets que superen el tiempo de resolución definido en el SLA.

6. Documentación y auditoría: En el sector nuclear, toda acción de mantenimiento o modificación de sistemas debe quedar registrada para las auditorías del organismo regulador. Describe qué información debe capturar el sistema de tickets y cómo se archiva de forma inmutable para garantizar la trazabilidad completa.

7. Continuidad del servicio: Propón un plan de continuidad para los sistemas críticos de soporte digital, incluyendo procedimientos de operación manual en caso de caída total de los sistemas digitales, pruebas periódicas de recuperación ante desastres y criterios de activación del modo de operación degradado.

Entrega el resultado como un manual de operaciones de soporte técnico estructurado, listo para ser revisado por el responsable de seguridad nuclear de la planta.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 50,
                'use_case' => 'Procesos de soporte técnico para sistemas digitales nucleares',
                'vote_score' => 28,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 10,
                'title' => 'Consultoría freelance en IA para el sector de la energía nuclear',
                'description' => 'Posiciónate como consultor independiente especializado en inteligencia artificial para el sector nuclear, captando clientes y gestionando proyectos de alta complejidad técnica y regulatoria.',
                'prompt_content' => <<<'EOT'
Actúa como un mentor de negocios especializado en consultoría técnica de alto valor y mercados regulados. Necesito tu ayuda para diseñar la estrategia completa para establecerme como consultor freelance independiente especializado en la aplicación de inteligencia artificial al sector de la energía nuclear, con el objetivo de alcanzar una facturación de 150.000 euros anuales en los primeros tres años.

Mi perfil actual: Soy ingeniero industrial con diez años de experiencia en mantenimiento de plantas industriales y dos años adicionales estudiando y aplicando machine learning en proyectos de mantenimiento predictivo para el sector petroquímico. Tengo conocimientos básicos del sector nuclear pero no he trabajado directamente en él. Domino Python, scikit-learn, TensorFlow y las principales plataformas de datos en la nube.

Estrategia que necesito que me ayudes a construir:

1. Definición del nicho: Ayúdame a identificar el subnicho más accesible y rentable dentro de la intersección de IA y sector nuclear para un consultor con mi perfil. ¿Es mejor especializarme en mantenimiento predictivo de sistemas no relacionados con la seguridad (equipos de balance de planta), en formación de operadores con simuladores mejorados con IA, o en análisis de datos operacionales para optimización del factor de carga? Justifica tu recomendación.

2. Plan de credencialización: El sector nuclear valora mucho las certificaciones y la experiencia verificable. Propón un plan de doce meses para adquirir las credenciales necesarias: cursos de la IAEA, certificaciones de la Sociedad Nuclear Española o la ANS, participación en conferencias del sector (ICONE, SMIRT), publicación de artículos técnicos y contribución a proyectos de investigación universitarios como forma de ganar reconocimiento sin necesidad de trabajar directamente en una planta.

3. Estrategia de captación de primeros clientes: Describe las tres vías más efectivas para conseguir los primeros proyectos pagados: subcontratación de grandes consultoras que tienen contratos con plantas nucleares, colaboración con startups de software nuclear como socio técnico, y contacto directo con plantas a través de asociaciones sectoriales. Para cada vía, detalla las acciones concretas del primer mes.

4. Estructura de servicios y tarifas: Diseña el catálogo de servicios del estudio de consultoría con tres líneas principales (diagnóstico de madurez digital, desarrollo de prueba de concepto de IA, formación técnica de equipos). Para cada servicio, propón una estructura de tarifa (por hora, por proyecto, por suscripción mensual) y un precio orientativo basado en el mercado europeo de consultoría técnica nuclear.

5. Gestión de proyectos en entornos regulados: Explica cómo adaptar la metodología de gestión de proyectos (PMBOK, ágil o híbrido) a las restricciones de un cliente nuclear: largos ciclos de aprobación, documentación exhaustiva, auditorías de calidad y necesidad de validar cada entregable con los equipos de seguridad del cliente.

6. Red de colaboradores: Dado que como freelance individual no puedo abarcar todo el espectro de competencias requerido (ingeniería nuclear, IA, regulación, ciberseguridad), propón cómo construir una red de colaboradores especializados con los que asociarme en proyectos grandes, manteniendo la coordinación y la calidad del entregable final.

7. Gestión financiera y legal del negocio: Describe la estructura legal más adecuada para operar como consultor freelance en este sector en España (autónomo vs. SL), el tratamiento fiscal de los ingresos, la cobertura de seguro de responsabilidad civil profesional necesaria y cómo gestionar la tesorería en proyectos con ciclos de pago largos típicos del sector público y de las grandes utilities.

Entrega al final un plan de acción para los primeros noventa días con tareas diarias o semanales concretas para cada semana, ordenadas por impacto esperado en el negocio.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 55,
                'use_case' => 'Estrategia de negocio para consultor freelance en IA nuclear',
                'vote_score' => 40,
                'resource_type' => 'prompt',
            ],
        ];
        foreach ($skills as $data) {
            $slug = Str::slug($data['title']);
            if (Skill::where('slug', $slug)->exists()) {
                $this->command->info("Skipping: {$data['title']}");

                continue;
            }
            Skill::create(array_merge($data, [
                'user_id' => $admin->id,
                'slug' => $slug,
                'status' => 'published',
                'version' => 1,
                'views_count' => rand(80, 400),
                'saves_count' => rand(5, 30),
            ]));
            $this->command->info("Created: {$data['title']}");
        }
    }
}
